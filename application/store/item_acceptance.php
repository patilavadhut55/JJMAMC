<?php

require('../../qcubed.inc.php');

class InwardList extends QForm {
    protected $btnSubmit;
    protected $chkAccept;

    protected function Form_Run() {
        parent::Form_Run();
        QApplication::CheckRemoteAdmin();
    }

    protected function Form_Create() {
        parent::Form_Create();
        
        $this->btnSubmit = new QButton($this);
        $this->btnSubmit->Text = 'Submit';
        $this->btnSubmit->ButtonMode = QButtonMode::Success;
        $this->btnSubmit->AddAction(new QClickEvent(),new QServerAction('btnSubmit_click'));
        
        
        $loginhasrole = LoginHasRole::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::LoginHasRole()->LoginIdlogin, $_SESSION['login']),
                                QQ::Equal(QQN::LoginHasRole()->RoleIdrole, $_SESSION['role'])    
                            ));
        foreach($loginhasrole as $role){}


        $sr = 1;  
        $depts = DeptTransfer::QueryArray(
                        QQ::AndCondition(
                            QQ::Equal(QQN::DeptTransfer()->ToDept, $role->RoleIdroleObject->Parrent)
                        ));
        if($depts){
            foreach($depts as $dept){
                $this->chkAccept[$dept->IddeptTransfer] = new QCheckBox($this);
                $this->chkAccept[$dept->IddeptTransfer]->Width = 20;
                $this->chkAccept[$dept->IddeptTransfer]->Height = 20;
                $this->chkAccept[$dept->IddeptTransfer]->AddAction(new QClickEvent(), new QServerAction('chkAccept_change'));
                $this->chkAccept[$dept->IddeptTransfer]->ActionParameter = $dept->IddeptTransfer;
                
                if($dept->AcceptedBy != NULL){
                    $this->chkAccept[$dept->IddeptTransfer]->Checked = TRUE;
                }else{
                    $this->chkAccept[$dept->IddeptTransfer]->Checked = FALSE;
                }
            }
        }
    }
    protected function chkAccept_change($strFormId, $strControlId, $strParameter){
        $dept = DeptTransfer::LoadByIddeptTransfer($strParameter);
        if($dept){
            if($this->chkAccept[$strParameter]->Checked == TRUE){
                $dept->AcceptedBy = $_SESSION['login'];
                $dept->AcceptedDate = QDateTime::Now();
            }else{
                $dept->AcceptedBy = NULL;
                $dept->AcceptedDate = NULL;
            }
            $dept->Save();
        }
    }
    protected function btnSubmit_click(){
        QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/dashboard.php');
    }
    
}

InwardList::Run('InwardList');
?>        

