<?php
	require('../../qcubed.inc.php');

	class LoginEditForm extends QForm {
            protected $lstRole;
            protected function Form_Run() {
                    parent::Form_Run();

                    QApplication::CheckRemoteAdmin();
            }

            protected function Form_Create() {
                parent::Form_Create();
                
                $this->lstRole = new QListBox($this);
                $this->lstRole->AddItem("-Select-", NULL);
                $this->lstRole->Width = 250;
                $roles = LoginHasRole::LoadArrayByLoginIdlogin($_SESSION['login']);
                foreach ($roles as $role){
                    $this->lstRole->AddItem($role->RoleIdroleObject->Name, $role->RoleIdrole);
                }
                $this->lstRole->AddAction(new QChangeEvent(), new QServerAction("lstRole_Change"));
                
                if(isset($_SESSION['role'])){
                    $this->lstRole->SelectedValue = $_SESSION['role'];
                }
                
            }
            protected function lstRole_Change(){
                if($this->lstRole->SelectedValue != NULL){
                    $_SESSION['role'] = $this->lstRole->SelectedValue;
                }
            }
        }
	LoginEditForm::Run('LoginEditForm');
?>