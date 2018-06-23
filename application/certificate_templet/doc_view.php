<?php
    require('../../qcubed.inc.php');
    class DocView extends QForm {
         protected $lblView;
         protected $btnBack;
         protected function Form_Run() {
                    parent::Form_Run();
                    QApplication::CheckRemoteAdmin();
                }

        protected function Form_Create() {
            parent::Form_Create();
            $this->lblView = new QLabel($this);
            $this->lblView->HtmlEntities = FALSE;
            if(isset($_GET['id'])){
                $this->lblView->Text ='<iframe style="border:0px solid #000; width: 100%; height:700px; overflow-x:hidden;" src="'.__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/document/app_print.php?id='.$_GET['id'].'&print=2&view=1'.'"></iframe>';
            }
            
            $this->btnBack = new QButton($this);
            $this->btnBack->ButtonMode = QButtonMode::Success;
            $this->btnBack->Text = "Back";
            $this->btnBack->AddAction(new QClickEvent(), new QAjaxAction('btnBack_Click'));
        }
        protected function btnBack_Click($strFormId, $strControlId, $strParameter){
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/document/issue_document.php');
        }
        
    }
     DocView::Run('DocView');
?>

