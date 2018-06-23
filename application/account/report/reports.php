<?php 

  require('../../../qcubed.inc.php');
    
  class Documents extends QForm {        
        protected function Form_Run() {
	           parent::Form_Run();
                   QApplication::CheckRemoteAdmin();
		 }
                 protected function Form_Create() {
                     parent::Form_Create();
                        
                }
     
   }
   
   Documents::Run('Documents');
?>

