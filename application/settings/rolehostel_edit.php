<?php
    // Load the QCubed Development Framework
    require('../../qcubed.inc.php');

    class RoleEditForm extends QForm {
            // Override Form Event Handlers as Needed
            protected $txtName;
            protected $txtFacilities;
            protected $txtFacilities1;
            protected $txtIntake;
            protected $btnAdd;
            protected $btnDelete;
            protected $btnCancel;
            protected $btnNew;
            protected $btnList;
            protected $dtgRoles;
            protected $lblEdit;
          
            protected function Form_Run() {
                    parent::Form_Run();

                    // Security check for ALLOW_REMOTE_ADMIN
                    // To allow access REGARDLESS of ALLOW_REMOTE_ADMIN, simply remove the line below
                    QApplication::CheckRemoteAdmin();
            }

//		protected function Form_Load() {}

            protected function Form_Create() {
                parent::Form_Create();
                $this->txtName = new QTextBox($this);
                $this->txtName->Name = "Name";
                
                $this->txtIntake = new QTextBox($this);
                $this->txtIntake->Name = "Intake";
                
                $this->txtFacilities1 = new QTextBox($this);
                $this->txtFacilities1->Name = "Facilities";
                
               /* $roles = Role::LoadArrayByGrp(6);                   
                    foreach ($roles as $role){
                        $this->lblEdit[$role->Idrole] = new QLabel($this);
                        $this->lblEdit[$role->Idrole]->HtmlEntities = FALSE;
                        $this->lblEdit[$role->Idrole]->Text = "<i class='fa fa-pencil'></i>";
                        $this->lblEdit[$role->Idrole]->AddAction(new QClickEvent(), new QServerAction("lblEdit_Click"));
                        $this->lblEdit[$role->Idrole]->ActionParameter = $role->Idrole;
                        
                        $this->txtFacilities[$role->Idrole] = new QTextBox($this);
                        $this->txtFacilities[$role->Idrole]->Width = 150;
                        $this->txtFacilities[$role->Idrole]->Text= "Facilities";
                        $this->txtFacilities[$role->Idrole]->AddAction(new QEnterKeyEvent(), new QAjaxAction('txtFacilities_Enter'));
                        $this->txtFacilities[$role->Idrole]->ActionParameter = $role->Idrole;
                    }  */     
                       
                $this->btnAdd = new QButton($this);
                $this->btnAdd->ButtonMode = QButtonMode::Add;
                $this->btnAdd->AddAction(new QClickEvent(), new QServerAction("btnAdd_Click"));
  
                $this->btnDelete = new QButton($this);
                $this->btnDelete->ButtonMode = QButtonMode::Delete;
                $this->btnDelete->AddAction(new QClickEvent(), new QServerAction("btndelete_Click"));
  
                $this->btnCancel = new QButton($this);
                $this->btnCancel->ButtonMode = QButtonMode::Cancel;
                $this->btnCancel->AddAction(new QClickEvent(), new QServerAction("btnCancel_Click"));
    }
    
            protected function btnAdd_Click($strFormId, $strControlId, $strParameter){
                    $role = Role::LoadByIdrole($strParameter);
                    $role = new Role();
                    $role->Name = $this->txtName->Text;
                    $role->Description = $this->txtFacilities1->Text;
                    $role->Intake = $this->txtIntake->Text;
                    $role->ShortName = "-";
                    $role->Save();
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/rolehostel_edit.php');
            }
            
            protected function btndelete_Click($strFormId, $strControlId, $strParameter){
                $role = Role::LoadByIdrole($strParameter);
                $role->Delete();
            }
          
            protected function btnCancel_Click($strFormId, $strControlId, $strParameter){
                
            }
    }
    
    RoleEditForm::Run('RoleEditForm');
?>