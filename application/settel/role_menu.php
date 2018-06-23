<?php
    // Load the QCubed Development Framework
    require('../../qcubed.inc.php');

    require(__FORMBASE_CLASSES__ . '/RoleEditFormBase.class.php');

    class RoleEditForm extends RoleEditFormBase {
            // Override Form Event Handlers as Needed
            protected $btnList;
            protected $lstDept;
            //menus
            protected $lstMenu;
            protected $txtPermision;
            protected $txtlevel;
            protected $lstParrent;
            protected $btnAdd;
            protected $chkRole;
            protected $btnNew;
            protected function Form_Run() {
                    parent::Form_Run();

                    // Security check for ALLOW_REMOTE_ADMIN
                    // To allow access REGARDLESS of ALLOW_REMOTE_ADMIN, simply remove the line below
                    QApplication::CheckRemoteAdmin();
            }

//		protected function Form_Load() {}

            protected function Form_Create() {
                parent::Form_Create();
                
                $this->lstDept = new QSelect2ListBox($this);
                $this->lstDept->Width = 240;
                $this->lstDept->Name = "Department";
                $this->lstDept->AddItem("-Select One-", NULL);
                $depts = Role::LoadArrayByGrp(2);
                foreach ($depts as $dept){
                    $this->lstDept->AddItem(delete_all_between("[", "]", $dept->Name)."[".delete_all_between("[", "]", $dept->ParrentObject)."]",$dept->Idrole);
                }
                $this->lstDept->AddAction(new QClickEvent(), new QServerAction("lstDept_Click"));
                
                $this->btnNew = new QButton($this);
                $this->btnNew->HtmlEntities = FALSE;
                $this->btnNew->Text = '<i class="fa fa-plus-circle fa-fw"></i> New';
                $this->btnNew->ButtonMode = QButtonMode::AddNew;
                $this->btnNew->AddAction(new QClickEvent(), new QServerAction("btnNew_Click"));

                //$this->MenuArr = array();
                $this->lstMenu = new QSelect2ListBox($this);
                 $this->lstMenu->Width = '80%';
                $menus = Menu::LoadAll(QQ::OrderBy(QQN::Menu()->Code));
                    $this->lstMenu->AddItem("-Select Menu-", NULL);    
                foreach ($menus as $menu) {
                    if($menu->Parrent != NULL)
                        $this->lstMenu->AddItem($menu->Name.'-'.$menu->ParrentObject, $menu->Idmenu);    
                    else
                        $this->lstMenu->AddItem($menu->Name, $menu->Idmenu);    
                }

                $this->lstParrent = new QSelect2ListBox($this);
                $this->lstParrent->Width = '80%';
                $prnts = Menu::QueryArray(
                               QQ::AndCondition(
                                    QQ::Equal(QQN::Menu()->Level, 1)
                               ));
                    $this->lstParrent->AddItem("-Select Parent-", NULL);    
                foreach ($prnts as $prnt) {
                    $this->lstParrent->AddItem($prnt->Name, $prnt->Idmenu);    
                }
                $this->txtlevel = new QTextBox($this);
                $this->txtlevel->Placeholder = "Level";

                $this->txtPermision = new QTextBox($this);
                $this->txtPermision->Width = "70%";
                $this->txtPermision->Placeholder = "Permission";

                $this->btnAdd = new QButton($this);
                $this->btnAdd->ButtonMode = QButtonMode::Add;
                $this->btnAdd->AddAction(new QClickEvent(), new QServerAction("btnAdd_Click"));

                $this->btnList = new QButton($this);
                $this->btnList->ButtonMode = QButtonMode::listall;
                $this->btnList->AddAction(new QClickEvent(), new QAjaxAction("btnList_Click"));

                $this->btnNew = new QButton($this);
                $this->btnNew->ButtonMode = QButtonMode::AddNew;
                $this->btnNew->AddAction(new QClickEvent(), new QAjaxAction("btnNew_Click"));
                if(isset($_GET['dept'])){
                    $this->lstDept->SelectedValue = $_GET['dept'];
                    
                    //designations
                    $designations = Role::QueryArray(
                                        QQ::AndCondition(
                                            QQ::Equal(QQN::Role()->Grp, 3),
                                            QQ::Equal(QQN::Role()->Parrent,$this->lstDept->SelectedValue)
                                        )
                                    );
                    foreach ($designations as $designation){
                        $this->chkRole[$designation->Idrole] = new QCheckBox($this);
                        $this->chkRole[$designation->Idrole]->Width = 20;
                        $this->chkRole[$designation->Idrole]->Height = 20;
                    }
                    
                }

            }
            //save function of code of college



            protected function lstDept_Click(){
                if($this->lstDept->SelectedValue != NULL ){
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settel/role_menu.php?dept='.$this->lstDept->SelectedValue);
                }
            }


            protected function btnAdd_Click(){
                if($this->lstDept->SelectedValue != NULL){
                    $designations = Role::QueryArray(
                                        QQ::AndCondition(
                                            QQ::Equal(QQN::Role()->Grp, 3),
                                            QQ::Equal(QQN::Role()->Parrent,$this->lstDept->SelectedValue)
                                        )
                                    );
                    foreach ($designations as $designation){
                        $chk = RoleHasMenu::LoadByRoleIdroleMenuIdmenu($designation->Idrole, $this->lstMenu->SelectedValue);
                        if($chk){

                        }else{
                            if($this->chkRole[$designation->Idrole]->Checked == TRUE){
                                $mnuhasrole = new RoleHasMenu();
                                $mnuhasrole->RoleIdrole = $designation->Idrole;
                                $mnuhasrole->MenuIdmenu = $this->lstMenu->SelectedValue;
                                $mnuhasrole->Permission = $this->txtPermision->Text;
                                $mnuhasrole->Level = $this->txtlevel->Text;
                                $mnuhasrole->Parrent = $this->lstParrent->SelectedValue;
                                $mnuhasrole->Seq = RoleHasMenu::CountByRoleIdrole($this->lblIdrole->Text) + 1;
                                $mnuhasrole->Save();
                            }
                        }
                    }
                }
            }

            public function btnList_Click($strFormId, $strControlId, $strParameter) {
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/role_edit.php');
            }

            protected function btnNew_Click() {
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/role_edit.php?new=1');
            }


            protected function RedirectToListPage() {
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/role_edit.php');
            }
    }
    RoleEditForm::Run('RoleEditForm');
?>