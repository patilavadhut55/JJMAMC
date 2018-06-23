<?php

require('../../qcubed.inc.php');

class InquiryEditForm extends QForm{

    protected $lstStatus;
    protected $lstCourse;
    
    protected $chkAdmit;
    protected $chkSelectAll;
    protected $lblEdit;
    protected $lblDel;
    
    protected $calFrom;
    protected $calTo;
    
    protected $btnadd;
    protected $btnShow;
    protected $btnSubmit;
    protected $btnCancel;

    protected function Form_Run() {
        parent::Form_Run();
        QApplication::CheckRemoteAdmin();
    }

    protected function Form_Create() {
        parent::Form_Create();

        $this->calFrom = new QCalendar($this);
        $this->calFrom->Name = "From";
        $this->calFrom->DateTimeFormat = "dd/mm/yy";

        $this->calTo = new QCalendar($this);
        $this->calTo->Name = "To";
        $this->calTo->DateTimeFormat = "dd/mm/yy";

        if(isset($_GET['from']))
            $this->calFrom->Text = date('d/m/Y', strtotime($_GET['from']));
        if(isset($_GET['to']))
            $this->calTo->Text = date('d/m/Y', strtotime($_GET['to']));

        $this->lstCourse = new QListBox($this);
        $this->lstCourse->Name = "Department";
        $this->lstCourse->AddItem('-Select One-', NULL);

        $this->lstCourse->Width = "100%";
        $courses = Role::QueryArray(
                        QQ::AndCondition(
                                QQ::Equal(QQN::Role()->Grp, 5) //program
                        ), QQ::OrderBy(QQN::Role()->Code)
        );

        foreach ($courses as $course) {
            $this->lstCourse->AddItem(delete_all_between('[', ']', $course->Name), $course->Idrole);
        }
        if (!isset($_GET['id']))
            $this->lstCourse->SelectedValue = 793;


        $this->lstStatus = new QListBox($this);
        $this->lstStatus->Name = "Status";
        $this->lstStatus->AddItem('-Select One-', NULL);
        $this->lstStatus->AddItem('New', 1);
        $this->lstStatus->AddItem('Finalised', 2);

        if(isset($_GET['status'])){
            $this->lstStatus->SelectedValue = $_GET['status'];
        }
        
        $this->chkSelectAll = new QCheckBox($this);
        $this->chkSelectAll->Width = 20;
        $this->chkSelectAll->Height = 20;
        $this->chkSelectAll->AddAction(new QChangeEvent(), new QAjaxAction("chkSelectAll_Click"));
        
        $this->btnSubmit = new QButton($this);
        $this->btnSubmit->Text = "<i class='fa fa-save'></i> Submit";
        $this->btnSubmit->ButtonMode = QButtonMode::Success;
        $this->btnSubmit->AddAction(new QClickEvent(), new QServerAction('btnSubmit_Click'));
        
        $this->btnCancel = new QButton($this);
        $this->btnCancel->Text = "<i class='fa fa-backward'></i> Back";
        $this->btnCancel->ButtonMode = QButtonMode::Warning;
        $this->btnCancel->AddAction(new QClickEvent(), new QAjaxAction('btnCancel_Click'));

        $this->btnShow = new QButton($this);
        $this->btnShow->Text = "<i class='fa fa-list'></i> Report";
        $this->btnShow->ButtonMode = QButtonMode::Success;
        $this->btnShow->AddAction(new QClickEvent(), new QAjaxAction('Report'));

        $this->btnadd = new QButton($this);
        $this->btnadd->ButtonMode = QButtonMode::Warning;
        $this->btnadd->Text = "<i class='fa fa-plus-circle'></i>  New";
        $this->btnadd->HtmlEntities = FALSE;
        $this->btnadd->AddAction(new QClickEvent(), new QAjaxAction('btnadd_click'));
        
        if(isset($_GET['dept'])) {
            if ($_GET['status'] == 1)
                $inquiries = Inquiry::QueryArray(
                                QQ::AndCondition(
                                        QQ::Equal(QQN::Inquiry()->Course, $_GET['dept']), QQ::Equal(QQN::Inquiry()->Finalized, 0), QQ::GreaterOrEqual(QQN::Inquiry()->AdmissionDate, $_GET['from']), QQ::LessOrEqual(QQN::Inquiry()->AdmissionDate, $_GET['to'])
                                ), QQ::OrderBy(QQN::Inquiry()->Course));
            elseif ($_GET['status'] == 2)
                $inquiries = Inquiry::QueryArray(
                                QQ::AndCondition(
                                        QQ::Equal(QQN::Inquiry()->Course, $_GET['dept']), QQ::Equal(QQN::Inquiry()->Finalized, 1), QQ::GreaterOrEqual(QQN::Inquiry()->AdmissionDate, $_GET['from']), QQ::LessOrEqual(QQN::Inquiry()->AdmissionDate, $_GET['to'])
                                ), QQ::OrderBy(QQN::Inquiry()->Course));
        }else{
            $inquiries = Inquiry::QueryArray(
                            QQ::AndCondition(
                                    QQ::Equal(QQN::Inquiry()->Admitted, 0)
                            ), QQ::OrderBy(QQN::Inquiry()->Course));
        }
        if ($inquiries) {
            foreach ($inquiries as $inquiry) {
                $this->chkAdmit[$inquiry->Idinquiry] = new QCheckBox($this);
                $this->chkAdmit[$inquiry->Idinquiry]->Width = 20;
                $this->chkAdmit[$inquiry->Idinquiry]->Height = 20;
                $this->chkAdmit[$inquiry->Idinquiry]->Checked = $inquiry->Finalized;
                $this->chkAdmit[$inquiry->Idinquiry]->ActionParameter = $inquiry->Idinquiry;

                $this->lblEdit[$inquiry->Idinquiry] = new QLabel($this);
                $this->lblEdit[$inquiry->Idinquiry]->HtmlEntities = FALSE;
                $this->lblEdit[$inquiry->Idinquiry]->Text = "<img width='15' height='15' src=" . __VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__ . "/edit.png />";
                $this->lblEdit[$inquiry->Idinquiry]->AddAction(new QClickEvent(), new QAjaxAction('edit'));
                $this->lblEdit[$inquiry->Idinquiry]->ActionParameter = $inquiry->Idinquiry;

                $this->lblDel[$inquiry->Idinquiry] = new QLabel($this);
                $this->lblDel[$inquiry->Idinquiry]->HtmlEntities = FALSE;
                $this->lblDel[$inquiry->Idinquiry]->Text = "<img src=" . __VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__ . "/delete.png />";
                $this->lblDel[$inquiry->Idinquiry]->AddAction(new QClickEvent(), new QServerAction("lblDel_Click"));
                $this->lblDel[$inquiry->Idinquiry]->ActionParameter = $inquiry->Idinquiry;
            }
        }
    }
    protected function chkSelectAll_Click(){
        if(isset($_GET['dept'])) {
            if ($_GET['status'] == 1)
                $inquiries = Inquiry::QueryArray(
                                QQ::AndCondition(
                                        QQ::Equal(QQN::Inquiry()->Course, $_GET['dept']), QQ::Equal(QQN::Inquiry()->Finalized, 0), QQ::GreaterOrEqual(QQN::Inquiry()->AdmissionDate, $_GET['from']), QQ::LessOrEqual(QQN::Inquiry()->AdmissionDate, $_GET['to'])
                                ), QQ::OrderBy(QQN::Inquiry()->Course));
            elseif ($_GET['status'] == 2)
                $inquiries = Inquiry::QueryArray(
                                QQ::AndCondition(
                                        QQ::Equal(QQN::Inquiry()->Course, $_GET['dept']), QQ::Equal(QQN::Inquiry()->Finalized, 1), QQ::GreaterOrEqual(QQN::Inquiry()->AdmissionDate, $_GET['from']), QQ::LessOrEqual(QQN::Inquiry()->AdmissionDate, $_GET['to'])
                                ), QQ::OrderBy(QQN::Inquiry()->Course));
        }else{
            $inquiries = Inquiry::QueryArray(
                            QQ::AndCondition(
                                    QQ::Equal(QQN::Inquiry()->Admitted, 0)
                            ), QQ::OrderBy(QQN::Inquiry()->Course));
        }
        if ($inquiries) {
            foreach ($inquiries as $inquiry) {
                if($this->chkSelectAll->Checked == TRUE){
                    $this->chkAdmit[$inquiry->Idinquiry]->Checked = TRUE;
                }else{
                    $this->chkAdmit[$inquiry->Idinquiry]->Checked = FALSE;
                }
            }
        }
    }
    protected function Report() {
        if ($this->lstStatus->SelectedValue != NULL && $this->lstCourse->SelectedValue != NULL && $this->calFrom->Text != '' && $this->calTo->Text != '') {
            $from = date('dmy', strtotime($this->calFrom->DateTime));
            $to = explode("/", $this->calTo->Text);
            $from = explode("/", $this->calFrom->Text);
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/admission/inquiry_list.php?dept=' . $this->lstCourse->SelectedValue . '&status=' . $this->lstStatus->SelectedValue . '&from=' . $from[2] . $from[1] . $from[0] . '&to=' . $to[2] . $to[1] . $to[0]);
        } else {
            QApplication::DisplayAlert("Please Select All Fields");
        }
    }

    protected function lblDel_Click($strFormId, $strControlId, $strParameter) {
        $employee = Inquiry::LoadByIdinquiry($strParameter);
        if ($employee) {
            //delete education
            $edus = Education::LoadArrayByInquiry($employee->Idinquiry);
            if ($edus) {
                foreach ($edus as $edu) {
                    $marks = Marks::LoadArrayByEducation($edu->Ideducation);
                    if ($marks) {
                        foreach ($marks as $mark) {
                            $mark->Delete();
                        }
                    }
                    $edu->Delete();
                }
            }
            $employee->Delete();
        }
    }
    protected function btnCancel_click(){
        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/admission/inquiry_list.php');
    }

    protected function edit($strFormId, $strControlId, $strParameter) {
        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/admission/inquiry_edit.php?id=' . $strParameter);
    }

    protected function btnSubmit_Click($strFormId, $strControlId, $strParameter) {
        if(isset($_GET['dept'])) {
            if ($_GET['status'] == 1)
                $inquiries = Inquiry::QueryArray(
                                QQ::AndCondition(
                                        QQ::Equal(QQN::Inquiry()->Course, $_GET['dept']), QQ::Equal(QQN::Inquiry()->Finalized, 0), QQ::GreaterOrEqual(QQN::Inquiry()->AdmissionDate, $_GET['from']), QQ::LessOrEqual(QQN::Inquiry()->AdmissionDate, $_GET['to'])
                                ), QQ::OrderBy(QQN::Inquiry()->Course));
            elseif ($_GET['status'] == 2)
                $inquiries = Inquiry::QueryArray(
                                QQ::AndCondition(
                                        QQ::Equal(QQN::Inquiry()->Course, $_GET['dept']), QQ::Equal(QQN::Inquiry()->Finalized, 1), QQ::GreaterOrEqual(QQN::Inquiry()->AdmissionDate, $_GET['from']), QQ::LessOrEqual(QQN::Inquiry()->AdmissionDate, $_GET['to'])
                                ), QQ::OrderBy(QQN::Inquiry()->Course));
        }else{
            $inquiries = Inquiry::QueryArray(
                            QQ::AndCondition(
                                    QQ::Equal(QQN::Inquiry()->Admitted, 0)
                            ), QQ::OrderBy(QQN::Inquiry()->Course));
        }
        if($inquiries) {
            foreach ($inquiries as $inquiry) {
                if ($this->chkAdmit[$inquiry->Idinquiry]->Checked == 1) {
                    $inquiry->Finalized = 1;
                } else {
                    $inquiry->Finalized = 0;
                }
                $inquiry->Save();
            }
        }
        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/admission/inquiry_list.php');
    }

    protected function btnadd_click() {
        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/admission/inquiry_edit.php');
    }

}

InquiryEditForm::Run('InquiryEditForm');
?>