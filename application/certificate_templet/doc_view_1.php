<?php
    require('../../qcubed.inc.php');
    class DocView extends QForm {
         protected $lblView;
         protected $btnBack;
         protected $btnconfirm;
         protected $dlgYesNo;
         protected $txtReason;
         
         protected $txtRemark;
         protected $btnSave;
         protected function Form_Run() {
                    parent::Form_Run();
                    QApplication::CheckRemoteAdmin();
                }

        protected function Form_Create() {
           parent::Form_Create();
           $this->txtReason = new QTextBox($this);
           $this->txtReason->Width = 350;
           
           $this->txtRemark = new QTextBox($this);
           $this->txtRemark->TextMode = QTextMode::MultiLine;
           $this->txtRemark->Width = 350;
            
            
            $this->lblView = new QLabel($this);
            $this->lblView->HtmlEntities = FALSE;
            if(isset($_GET['id'])){
                $this->lblView->Text ='<iframe style="border:0px solid #000; width: 100%; height:700px; overflow-x:hidden;" src="'.__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/document/app_print.php?id='.$_GET['id'].'&print=2&view=1'.'"></iframe>';
            }
            
            $this->btnSave = new QButton($this);
            $this->btnSave->ButtonMode = QButtonMode::Success;
            $this->btnSave->Text = '<i class="fa fa-print"></i> Print';
            $this->btnSave->AddAction(new QClickEvent(), new QServerAction('btnSave_Click'));
            $this->btnSave->Visible = FALSE;
            
           
            
            $this->btnBack = new QButton($this);
            $this->btnBack->ButtonMode = QButtonMode::Success;
            $this->btnBack->Text = "Back";
            $this->btnBack->AddAction(new QClickEvent(), new QAjaxAction('btnBack_Click'));
            
              // Define the Simple Message Dialog Box
            $this->dlgYesNo = new QDialog($this);
            $this->dlgYesNo->Modal = true;
            $this->dlgYesNo->Resizable = false;
            $this->dlgYesNo->AutoOpen = false;

            // Make sure this Dislog Box is "hidden"
            // Like any other QPanel or QControl, this can be toggled using the "Display" or the "Visible" property
            $this->dlgYesNo->AddButton ('Yes','YesbtnID');
            $this->dlgYesNo->AddButton ('No','NobtnID');
           
            $this->dlgYesNo->AddAction (new QDialog_ButtonEvent(), new QHideDialog ($this->dlgYesNo));
            $this->dlgYesNo->AddAction (new QDialog_ButtonEvent(), new QAjaxAction ('dlgYesNo_Button'));
             
            $this->btnconfirm = new QButton($this);
            $this->btnconfirm->ButtonMode = QButtonMode::Success;
            $this->btnconfirm->Text = "Finalize & Print";
            $this->btnconfirm->AddAction(new QClickEvent(), new QServerAction('btnconfirm_Click'));
             //$this->btnconfirm->AddAction(new QClickEvent(), new QShowDialog($this->dlgYesNo));
            if(isset($_GET['view']) && $_GET['view']== 1){
                $this->btnconfirm->Visible = FALSE;
                $this->btnSave->Visible = TRUE;
            }
        }
        protected function btnBack_Click($strFormId, $strControlId, $strParameter){
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/document/issue_document.php');
        }
         protected function btnconfirm_Click($strFormId, $strControlId, $strParameter){
            $this->dlgYesNo->Title = "Confirmation";
            $this->dlgYesNo->Text = "Do You Want to finalize the LC Details";
            $this->dlgYesNo->HtmlEntities = FALSE;
            $this->dlgYesNo->Display = TRUE;
            $this->dlgYesNo->Height = 300;
            $this->dlgYesNo->Width = 350;
            $this->dlgYesNo->ZIndex = 50000;
            $this->dlgYesNo->Open();
        }
        protected function dlgYesNo_Button($strFormId, $strControlId, $strParameter) {
              if ($this->dlgYesNo->ClickedButton == 'YesbtnID' && isset($_GET['appfor'])) {
                $counter = CertificateTemplet::LoadByIdcertificateTemplet($_GET['appfor']); 
                $counter->Counter = $counter->Counter + 1;
                $counter->Save();  
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/certificate_templet/doc_view.php?id='.$_GET['id'].'&appfor='.$_GET['appfor']);  
           
            }else{
                 QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/certificate_templet/doc_view_1.php?id='.$_GET['id'].'&appfor='.$_GET['appfor']);  
            }
               
        }
           
        protected function btnSave_Click($strFormId, $strControlId, $strParameter) {
            if(isset($_GET['id'])){
                $app = Application::LoadByIdapplication($_GET['id']);
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/certificate_templet/doc_view.php?id='.$_GET['id'].'&appfor='.$_GET['appfor']);
            }
      }
        
    }
     DocView::Run('DocView');
?>

