<?php

require('../../qcubed.inc.php');

class ReportForm extends QForm {

    //Control Declaration 
    protected $lstCourse;
    protected $lstCalyear;
    protected $lstAcadyear;
    protected $calFromDate;
    protected $btnReport;
    protected $calToDate;
   

    protected function Form_Run() {
        parent::Form_Run();
        QApplication::CheckRemoteAdmin();
    }

    protected function Form_Create() {
        parent::Form_Create();
        //Controls Define
        $this->lstCourse = new QSelect2ListBox($this);
        $this->lstCourse->Name = "Course";
        $this->lstCourse->AddItem('-Select One-', NULL);
        $progs = Role::LoadArrayByGrp(5, (QQ::Clause(QQ::OrderBy(QQN::Role()->Name))));
        foreach ($progs as $prog) {
            $this->lstCourse->AddItem(delete_all_between("[", "]", $prog->Name), $prog->Idrole);
        }
     
        //List of Acadmic Year
          
        $this->lstAcadyear = new QListBox($this);
        $this->lstAcadyear->Name = "Year";
        $this->lstAcadyear->AddItem("-Select One-", NULL);
        $acadyears = AcademicYear::LoadArrayByParrent(NULL);
        foreach ($acadyears as $acadyear){
            $this->lstAcadyear->AddItem($acadyear->Name, $acadyear->IdacademicYear);
        }
        
      /*  $this->lstAcadyear = new QSelect2ListBox($this);
        $this->lstAcadyear->Placeholder = "Acadmic Year";
        $this->lstAcadyear->AddItem("-All Year-", NULL);
        $acadyears = AcademicYear::LoadArrayByParrent(NULL);
        foreach ($acadyears as $acadyear) {
            $this->lstAcadyear->AddItem($acadyear->Name, $acadyear->IdacademicYear);
        }
        */
        //List of Calender Year
        $this->lstCalyear = new QSelect2ListBox($this);
        $this->lstCalyear->Placeholder = "Calender Year";
        $this->lstCalyear->AddItem("-Select One-", NULL);
        $calenders = CalenderYear::QueryArray(
                        QQ::AndCondition(
                                QQ::Equal(QQN::CalenderYear()->Visible, 1)), (QQ::OrderBy(QQN::CalenderYear()->Name, False)));
        foreach ($calenders as $calender) {
            $this->lstCalyear->AddItem($calender->Name, $calender->IdcalenderYear);
            
        }
         if (isset($_GET['cal'])) {
            $this->lstCalyear->SelectedValue = $_GET['cal'];
            $Findrole = Role::LoadByIdrole($_GET['prog']);
            $this->lstCourse->SelectedValue = $_GET['prog'];
           // $this->lstCourse_Change();
          
            if (isset($_GET['acdyear']))
                $this->lstAcadyear->SelectedValue = $_GET['acdyear'];
           
        }
         // Controls of Date
        $this->calFromDate = new QCalendar($this);
        $this->calFromDate->Name = "From";
        if (isset($_GET['fdate']))
            $this->calFromDate->Text = Date('F d Y', strtotime($_GET['fdate']));
        $this->calFromDate->Required = TRUE;
      //  $this->calFromDate->Width = 150;

        $this->calToDate = new QCalendar($this);
        $this->calToDate->Name = "To";
        if (isset($_GET['todate']))
            $this->calToDate->Text = Date('F d Y', strtotime($_GET['todate']));
        $this->calToDate->Required = TRUE;
        //$this->calToDate->Width = 150;

        //Button
        $this->btnReport = new QButton($this);
        $this->btnReport->Text = 'Report';
        $this->btnReport->ButtonMode = QButtonMode::Success;
        $this->btnReport->AddAction(new QClickEvent(), new QServerAction('btnReport_click'));
    }

    //To show daily report of Fees 
    protected function btnReport_click() {
        $param = "";
        if ($this->lstAcadyear->SelectedValue != NULL) {
            $param = "&acdyear=" . $this->lstAcadyear->SelectedValue;
        }
        
        if ($this->lstCalyear->SelectedValue != NULL && $this->lstCourse->SelectedValue != NULL ) {         
            QApplication::Redirect("other_fee_report.php?fdate=" . date('Ymd', strtotime($this->calFromDate->Text)) . "&todate=" . date('Ymd', strtotime($this->calToDate->Text)) . "&cal=" . $this->lstCalyear->SelectedValue . "&prog=" . $this->lstCourse->SelectedValue  .  $param);
        } elseif ($this->lstCalyear->SelectedValue != NULL && $this->lstCourse->SelectedValue != NULL) {         
            QApplication::Redirect("other_fee_report.php?fdate=" . date('Ymd', strtotime($this->calFromDate->Text)) . "&todate=" . date('Ymd', strtotime($this->calToDate->Text)) . "&cal=" . $this->lstCalyear->SelectedValue . "&prog=" . $this->lstCourse->SelectedValue .   $param);
        } else if($this->calFromDate->Text != "" && $this->calToDate->Text != ""){
            QApplication::Redirect("other_fee_report.php?fdate=" . date('Ymd', strtotime($this->calFromDate->Text)) . "&todate=" . date('Ymd', strtotime($this->calToDate->Text)));
        }else {
            QApplication::DisplayAlert("Please Select Field.");
        }
    }

   
}

ReportForm::Run('ReportForm');
?>