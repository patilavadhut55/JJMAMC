<?php
    require('../../qcubed.inc.php');

    class SupplierInfo extends QForm {
        protected $chkaprove;
        protected function Form_Run() {
			parent::Form_Run();
                   QApplication::CheckRemoteAdmin();
		}
            protected function Form_Create(){
                parent::Form_Create();
                
                 $ledgers = Ledger::LoadArrayByGrp(35);
                if($ledgers){
                    foreach ($ledgers as $ledger){
                            $this->chkaprove[$ledger->Idledger] = new QCheckBox($this);
                            $this->chkaprove[$ledger->Idledger]->HtmlEntities = FALSE;
                            $this->chkaprove[$ledger->Idledger]->AddAction(new QClickEvent(), new QServerAction("chkaprove_Click"));
                            $this->chkaprove[$ledger->Idledger]->ActionParameter = $ledger->Idledger;
                    }
                }
                
                
            }
            public function chkaprove_Click($strFormId, $strControlId, $strParameter){
                
            }
    }
    SupplierInfo::Run('SupplierInfo');    
?>        


