<?php
	
    require('../../qcubed.inc.php');

    require(__FORMBASE_CLASSES__ . '/ProductGroupEditFormBase.class.php');

    class ProductGroupEditForm extends ProductGroupEditFormBase {
            protected $lbldels;
            protected $txtAName;
            protected $txtMname;
            protected $lstSub;
            protected $chkVbl;
            protected $lblEdit;
            protected function Form_Run() {
            parent::Form_Run();

            QApplication::CheckRemoteAdmin();
            }

            //protected function Form_Load() {}

            protected function Form_Create() {
                parent::Form_Create();       
                $groups = ProductGroup::LoadAll(QQ::OrderBy(QQN::ProductGroup()->Name));
                $sr = 1;
                foreach ($groups as $group){
                    $this->lbldels[$group->IdproductGroup] = new QLabel($this);
                    $this->lbldels[$group->IdproductGroup]->HtmlEntities = FALSE; 
                    $this->lbldels[$group->IdproductGroup]->Text = "<img src=".__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__."/delete.png />";

                    $this->lbldels[$group->IdproductGroup]->AddAction(new QClickEvent(), new QServerAction("lbldels_Click"));
                    $this->lbldels[$group->IdproductGroup]->ActionParameter = $group->IdproductGroup;

                    $this->txtAName[$group->IdproductGroup] = new QTextBox($this);
                    $this->txtAName[$group->IdproductGroup]->Text = $group->Name;
                    
                    $grops = ProductGroup::LoadAll();
                        $this->lstSub[$group->IdproductGroup] = new QListBox($this);
                        $this->lstSub[$group->IdproductGroup]->AddItem('- Select One -',NULL) ;
                        foreach ($grops as $grop) {
                            $this->lstSub[$group->IdproductGroup]->AddItem($grop->Name,$grop->IdproductGroup) ;
                        }
                        $this->lstSub[$group->IdproductGroup]->SelectedValue = $group->SubGroup;
                        
                    $this->chkVbl[$group->IdproductGroup] =new QCheckBox($this);
                    $this->chkVbl[$group->IdproductGroup]->HtmlEntities = FALSE;
                     
                    $this->txtMname[$group->IdproductGroup] = new QTextBox($this);
                    $this->txtMname[$group->IdproductGroup]->Text = $group->Marathi;
                    $this->txtMname[$group->IdproductGroup]->AddAction(new QEnterKeyEvent(), new QAjaxAction("txtMname_Change"));
                    $this->txtMname[$group->IdproductGroup]->ActionParameter = $group->IdproductGroup;

                    $this->lblEdit[$group->IdproductGroup] =new QLabel($this);
                    $this->lblEdit[$group->IdproductGroup]->HtmlEntities = FALSE;
                    $this->lblEdit[$group->IdproductGroup]->Text = "<img width='15' height='15' src=".__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__."/edit.png />";
                    $dis = "'dis('".$group->IdproductGroup."');'";
                    $this->lblEdit[$group->IdproductGroup]->AddAction(new QClickEvent(), new QJavaScriptAction("dis(".$group->IdproductGroup.");"));
                    $this->lblEdit[$group->IdproductGroup]->ActionParameter = $group->IdproductGroup;

                }

                $this->txtName->Focus();
                $this->txtMarathi->Height = 20;
                $this->txtMarathi->Width = 175;
                $this->txtMarathi->AddAction(new QEnterKeyEvent(), new QServerAction("btnSave_Click"));
            }

             protected function txtMname_Change($strFormId, $strControlId, $strParameter){
                $auts = ProductGroup::LoadByIdproductGroup($strParameter);
                $auts->Name = $this->txtAName[$strParameter]->Text;
                $auts->Marathi = $this->txtMname[$strParameter]->Text;
                $auts->Save();
                $this->RedirectToListPage();
            }

             protected function lbldels_Click($strFormId, $strControlId, $strParameter) {
                $auts = ProductGroup::LoadByIdproductGroup($strParameter);
                $auts->Delete();
                $this->RedirectToListPage();
            }

            protected function RedirectToListPage() {
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/configration/product_group_edit.php');
            }
    }

    ProductGroupEditForm::Run('ProductGroupEditForm');
?>