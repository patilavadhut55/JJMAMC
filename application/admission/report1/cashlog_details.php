<?php
	require('../../../qcubed.inc.php');

	
	class CastEditForm extends QForm {
		
                protected $txtSearch;
                protected $btnSearch;
                protected $lstSemister;
                
          
		protected function Form_Run() {
			parent::Form_Run();
                     QApplication::CheckRemoteAdmin();
		}

                protected function Form_Create() {
                    parent::Form_Create();
                    
                    $this->txtSearch = new QAjaxAutoCompleteTextBox($this, 'txtSearch_Change');
                    $this->txtSearch->Name = 'Student Name';
                   // $this->txtSearch->Width=500;
                    
                      if(isset($_GET['ser'])){
                        $this->txtSearch->Text = $_GET['ser'];
                    }
                    
                    $this->btnSearch = new QButton($this);
                    $this->btnSearch->ButtonMode = QButtonMode::Success;
                    $this->btnSearch->Text = "<i class='fa fa-search '></i>";
                    $this->btnSearch->AddAction(new QClickEvent(), new QServerAction('btnSearch_click'));
                    if(isset($_GET['mem'])){
                        $ledger = Ledger::LoadByIdledger($_GET['mem']);
                        $this->txtSearch->Text = $ledger->Code.' '.$ledger->Name;
                    }
                 
		}
            
                 protected function btnSearch_click($strFormId, $strControlId, $strParameter) {
                    $text = $this->txtSearch->Text;
                    $code = explode(" ", $text);
                    $mem = Ledger::LoadByCode($code[0]);
                    $currents = CurrentStatus::LoadArrayByStudent($mem->Idledger);
                    if($currents)
                        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/admission/report1/cashlog_details.php?mem='.$mem->Idledger); 
                    else
                        QApplication::DisplayAlert ("Student Haven't been admitted yet !!");
                           

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
                        $result[] = $objMember->Code.' '.  GetFullNameNew($objMember->Name,$objMember->Code);
                    }
                    return $result;
                }
                
		

	}
     CastEditForm::Run('CastEditForm');
?>