<?php
    require('../../qcubed.inc.php');
    class PrintEdit extends QForm {
        protected $txtSearch;
        protected $btnSearch;
        protected function Form_Run() {
            parent::Form_Run();
            QApplication::CheckRemoteAdmin();
        }
        protected function Form_Create() {
            parent::Form_Create();
            
            $this->txtSearch = new QAjaxAutoCompleteTextBox($this, 'txtSearch_Change');
            $this->txtSearch->Name = 'Student ID';
            $this->txtSearch->Width = 500;
            
            $this->btnSearch = new QButton($this);
            $this->btnSearch->ButtonMode = QButtonMode::Success;
            $this->btnSearch->Text = "<i class='fa fa-search '></i>";
            $this->btnSearch->AddAction(new QClickEvent(), new QAjaxAction('btnSearch_click'));
        }
        protected function btnSearch_click($strFormId, $strControlId, $strParameter) {
                $text = $this->txtSearch->Text;
                $code = explode(" ", $text);
                $mem = Ledger::LoadByCode($code[0]);                
                if($mem){
                    $apps = Application::QueryArray(
                                QQ::AndCondition(
                                QQ::Equal(QQN::Application()->ApplicantObject->Of, $mem->Idledger)
                                )
                            );
                    if($apps){
                        foreach($apps as $app){}
                        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/student_application/application.php?id='.$app->Idapplication); 
                    }else{
                        QApplication::DisplayAlert ("Student Haven't been admitted yet !!");
                    }
                    
                }else{
                    QApplication::DisplayAlert ("Student Haven't been admitted yet !!");
                }
        }
        public function txtSearch_Change($strParameter){
            $objMemberArray = Ledger::QueryArray(
                QQ::AndCondition(
                    QQ::Equal(QQN::Ledger()->Grp, 244),        
                    QQ::OrCondition(
                        QQ::Like(QQN::Ledger()->Name, '%'.$strParameter . '%'),
                        QQ::Like(QQN::Ledger()->Code, '%'.$strParameter . '%')
                    )
                )
            );
       
            $result = array();
            foreach($objMemberArray as $objMember){
                $result[] = $objMember->Code.' '.get_full_name($objMember->Name);
            }
            return $result;
        }
        
        
        
    }
    PrintEdit::Run('PrintEdit');
?>