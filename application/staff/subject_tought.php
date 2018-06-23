<?php

 require('../../qcubed.inc.php');

 class EmpRegistration Extends QForm{

    protected $btnDelete;
    protected $arrname;
    protected $txtName;
    protected $btnAdd;

    protected function Form_Run() {
         parent::Form_Run();

         QApplication::CheckRemoteAdmin();
     }

    protected function Form_Create() {
        parent::Form_Create();

        $this->btnAdd = new QButton($this);
        $this->btnAdd->Text = "Add";
        $this->btnAdd->AddAction(new QClickEvent(), new QServerAction("btnAdd_Click"));
        $this->btnAdd->ButtonMode = QButtonMode::Success;

        if(isset($_GET['subject'])){
            $yearlysub = YearSubject::LoadByIdyearSubject($_GET['subject']);
            $subtaughts = SubjectTought::LoadArrayBySubject($yearlysub->IdyearSubject);
            foreach ($subtaughts as $subtaught){
                $this->btnDelete[$subtaught->IdsubjectTought] = new QButton($this);
                $this->btnDelete[$subtaught->IdsubjectTought]->Text = "<i class='fa fa-trash'></i>";
                $this->btnDelete[$subtaught->IdsubjectTought]->ButtonMode = QButtonMode::Danger;
                $this->btnDelete[$subtaught->IdsubjectTought]->AddAction(new QClickEvent(), new QConfirmAction("Do you want to delete this staff."));
                $this->btnDelete[$subtaught->IdsubjectTought]->AddAction(new QClickEvent(), new QServerAction("btnDelete_Click"));
                $this->btnDelete[$subtaught->IdsubjectTought]->ActionParameter = $subtaught->IdsubjectTought;
            }

            $this->txtName = new QAjaxAutoCompleteTextBox($this, 'txtName_Change');
            $this->txtName->Width = 300;
        }
    }

    public function txtName_Change($strParameter){
        $objMemberArray = Address::QueryArray(
                QQ::AndCondition(
                    QQ::Equal(QQN::Address()->OfObject->Grp, 34),
                    QQ::OrCondition(
                            QQ::Like(QQN::Address()->Fname, '%'.$strParameter . '%'),
                            QQ::Like(QQN::Address()->Mname,  '%'.$strParameter . '%'),
                            QQ::Like(QQN::Address()->OfObject->Code, '%'.$strParameter . '%')
                    )
                )
            );

        $result = array();
        foreach($objMemberArray as $objMember){
            $result[] = $objMember->OfObject->Code.' '.$objMember->Fname.' '.$objMember->Lname;
        }
        return $result;
    }

     protected function btnAdd_Click(){
        $staff = new SubjectTought();
        $staff->Subject = $_GET['subject'];
        $text = $this->txtName->Text;
        $code = explode(" ", $text);
        $mem = Ledger::LoadByCode($code[0]);
        $staff->Login = $mem->Idledger;

        $year = CalenderYear::QuerySingle(
                    QQ::AndCondition(
                        QQ::Equal(QQN::CalenderYear()->Active, 1)
                    )
                );

        if($year)
        $staff->CalenderYear = $year->IdcalenderYear;

        $loginhasrole = LoginHasRole::QuerySingle(
                    QQ::AndCondition(
                        QQ::Equal(QQN::LoginHasRole()->Active, 1)
                    )
                );

        if($loginhasrole)
        $staff->Role = $loginhasrole->RoleIdrole;

        $staff->Save();
        QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/staff/subject_tought.php?subject='.$_GET['subject']);
    }

    protected function btnDelete_Click($strFormId, $strControlId, $strParameter){
        $subtaughts = SubjectTought::LoadByIdsubjectTought($strParameter);
        $subtaughts->Delete();
        QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/staff/subject_tought.php?subject='.$subtaughts->IdsubjectTought);
    }


}

EmpRegistration::Run('EmpRegistration');
?>