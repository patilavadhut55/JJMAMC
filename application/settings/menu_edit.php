<?php
	require('../../qcubed.inc.php');

	require(__FORMBASE_CLASSES__ . '/MenuEditFormBase.class.php');

	class MenuEditForm extends MenuEditFormBase {
            protected $lstIconList;
            protected function Form_Run() {
			parent::Form_Run();

			QApplication::CheckRemoteAdmin();
		}

//		protected function Form_Load() {}

		protected function Form_Create() {
                    parent::Form_Create();                    
                    $this->lstIconList = new QSelect2ListBox($this);
                    $this->lstIconList->Name = "Icon";
                    $this->lstIconList->AddItem("Select",NULL);
                    $myfile = fopen("../settel/Document.txt", "r") or die("Unable to open file!");
                    $cnt = 1;
                    while(!feof($myfile)) {
                        $val = trim(fgets($myfile));
                        $this->lstIconList->AddItem('<i style="width:20px;" class="fa '.$val.'"></i> '.$val,$val);                            
                    }
                    fclose($myfile);
                    $this->lstIconList->AddAction(new QClickEvent(), new QAjaxAction("lstIconList_Click"));
                    
                    if($this->mctMenu->EditMode == TRUE){
                        $this->lstIconList->SelectedValue = $this->txtIcon->Text;    
                    }
                    
                    $this->btnSave->ButtonMode = QButtonMode::Save;
                    $this->btnCancel->ButtonMode = QButtonMode::Cancel;
                    $this->btnDelete->ButtonMode = QButtonMode::Delete;
                    
                    $this->lstPositionObject->Name = "Position";
                    $this->lstParrentObject->Name = "Parrent Menu";
                    $this->lstPositionObject->Focus();
                    $this->lstPositionObject->AddAction(new QChangeEvent(), new QAjaxAction("lstPositionObject_Change"));
                }
                
                protected function lstIconList_Click(){                    
                    $this->txtIcon->Text = $this->lstIconList->SelectedValue;
                }
                
                protected function lstPositionObject_Change($strFormId, $strControlId, $strParameter){
                    $Position = MenuPosition::LoadByIdmenuPosition($this->lstPositionObject->SelectedValue);
                    $this->txtCode->Text = $Position->ShortName.' '.$Position->Counter;                    
                    $this->txtName->Focus();
                }
                
                protected function btnSave_Click($strFormId, $strControlId, $strParameter) {
			// Delegate "Save" processing to the MenuMetaControl
			$this->mctMenu->SaveMenu();
                        
                        if($this->mctMenu->EditMode == FALSE){
                            $Position = MenuPosition::LoadByIdmenuPosition($this->lstPositionObject->SelectedValue);
                            $Position->Counter = $Position->Counter + 1;
                            $Position->Save();
                        }
                        
			$this->RedirectToListPage();
		}
                
                protected function RedirectToListPage() {
			QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/menu_list.php');
		}
	}

	MenuEditForm::Run('MenuEditForm');
?>