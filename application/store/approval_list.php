<?php
    require('../../qcubed.inc.php');
 
        class BlockEditForm extends QForm {
	    protected $btnApproval;
            protected $btnDenied;
            protected $txtReason;

            protected function Form_Run() {
                parent::Form_Run();

                QApplication::CheckRemoteAdmin();
            }
            
            protected function Form_Create() {
                parent::Form_Create();
                    $this->txtReason = new QTextBox($this);
                    $this->txtReason->Name = "Reason";
                    $this->txtReason->TextMode = QTextMode::MultiLine;
                    $this->txtReason->Width = 300;
                    
                    $this->btnApproval = new QButton($this);
                    $this->btnApproval->ButtonMode = QButtonMode::Success;
                    $this->btnApproval->Text = "<i class='fa fa-check-circle-o'></i> Approve";
                    $this->btnApproval->AddAction(new QClickEvent(), new QAjaxAction('btnApproval_click'));
                  
                    $this->btnDenied = new QButton($this);
                    $this->btnDenied->ButtonMode = QButtonMode::Danger;
                    $this->btnDenied->Text = "<i class='fa fa-times-circle-o'></i> Deny";
                    $this->btnDenied->AddAction(new QClickEvent(), new QAjaxAction('btndenied_click'));
            }
            
            public function btnApproval_click($strFormId, $strControlId, $strParameter) {
                $vhr = Voucher::LoadByIdvoucher($_GET['req']);
                if($vhr){
                    $chkrole = Role::QueryArray(
                                    QQ::AndCondition(
                                        QQ::Equal(QQN::Role()->Idrole,$_SESSION['role']),
                                        QQ::Like(QQN::Role()->Name,"%HOD%")
                                    ));
                    if($chkrole){ 
                        $vhr->ApprovedBy  = $_SESSION['login'];
                        $vhr->ApprovedDate = QDateTime::Now();
                    }
                    $chkroleD = Role::QueryArray(
                                    QQ::AndCondition(
                                        QQ::Equal(QQN::Role()->Idrole, $_SESSION['role']),
                                        QQ::Like(QQN::Role()->Name, "%Principal%")
                                    ));
                    if($chkroleD){
                        $vhr->PrincipalApprovedBy  = $_SESSION['login'];
                        $vhr->PrincipalApprovedDate = QDateTime::Now();
                    }  
                    $vhr->Save();
                    if($chkrole ){ 
                        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/dashboard.php');
                    }elseif($chkroleD){
                        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/dashboard.php');
                    }else{
                        QApplication::DisplayAlert('Please Check Your Role');
                    }    
                } 
            }  
            
            public function btndenied_click($strFormId, $strControlId, $strParameter) {
                if($this->txtReason->Text != NULL){
                    $vhr = Voucher::LoadByIdvoucher($_GET['req']);
                    if($vhr){
                        $vhr->Description = $this->txtReason->Text;
                        $vhr->Cancel  = 1;
                        $vhr->Save();
                        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/dashboard.php?');
                    }
                }else{
                   QApplication::DisplayAlert('Please provide reason');
                }
            }  
        
        //Databind
      
    }
    BlockEditForm::Run('BlockEditForm');
?>