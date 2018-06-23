<?php
    require('../../qcubed.inc.php');

    class TempTransForm extends QForm {
        protected $calDate;
        protected $lstDept;
        protected $lstItems;
        protected $lstSerials;
        protected $btnAdd;
        protected $btnRemove;


        protected function Form_Run() {
            parent::Form_Run();
            QApplication::CheckRemoteAdmin();
        }


        protected function Form_Create() {
            parent::Form_Create();
            
            $this->calDate = new QCalendar($this);
            $this->calDate->Name = "Date";
            
            $this->lstDept = new QSelect2ListBox($this);
            $this->lstDept->Name = "Department"; //role -> grp=2
            $this->lstDept->AddItem("-Select Dept-");
            $depts = Role::LoadArrayByGrp(2);
            foreach ($depts as $dept){
                $this->lstDept->AddItem($dept->Name, $dept->Idrole);
            }
            $this->lstDept->AddAction(new QClickEvent(), new QServerAction('lstDept_Click'));
            
            if(isset($_GET['dept'])){
                $this->lstDept->SelectedValue = $_GET['dept'];
                $this->calDate->Text = date("M d Y", strtotime($_GET['cal']));
            }
            
            $login = LoginHasRole::LoadByLoginIdloginRoleIdrole($_SESSION['login'],$_SESSION['role']);
            
            $this->lstItems = new QSelect2ListBox($this);
            $this->lstItems->Name = "Items";
            $this->lstItems->AddItem("-Select Item-");
            $items = DeptTransfer::QueryArray(
                        QQ::AndCondition(
                            QQ::Equal(QQN::DeptTransfer()->ToDept, $login->RoleIdroleObject->Parrent),
                            QQ::OrCondition(    
                                QQ::Equal(QQN::DeptTransfer()->Return, 0),
                                QQ::Equal(QQN::DeptTransfer()->Return, NULL)
                            )
                        ),
                        QQ::GroupBy(QQN::DeptTransfer()->Item)
                    );
            foreach ($items as $item){
                $this->lstItems->AddItem($item->ItemObject->DisplayName, $item->Item);
            }
            $this->lstItems->AddAction(new QClickEvent(), new QServerAction('lstItems_Click'));
            
            $this->lstSerials = new QSelect2ListBox($this);
            $this->lstSerials->Name = "Serials";
            $this->lstSerials->AddItem("-Select Serials-");
            
            $this->btnAdd = new QButton($this);
            $this->btnAdd->Text = "Add";
            $this->btnAdd->ButtonMode = QButtonMode::Add;
            $this->btnAdd->AddAction(new QClickEvent(), new QServerAction('btnAdd_Click'));
            
            if(isset($_GET['dept'])){
                $login = LoginHasRole::LoadByLoginIdloginRoleIdrole($_SESSION['login'],$_SESSION['role']);
                $temptrans = TempTransfer::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::TempTransfer()->ToDept, $_GET['dept'])        
                            )
                        );
                        foreach ($temptrans as $temptran){
                            $this->btnRemove[$temptran->IdtempTransfer] = new QButton($this);
                            $this->btnRemove[$temptran->IdtempTransfer]->Text = "<i class='fa fa-trash'></i>";
                            $this->btnRemove[$temptran->IdtempTransfer]->ButtonMode = QButtonMode::Danger;
                            $this->btnRemove[$temptran->IdtempTransfer]->AddAction(new QClickEvent(),new QServerAction("btnRemove_Click"));
                            $this->btnRemove[$temptran->IdtempTransfer]->ActionParameter = $temptran->IdtempTransfer;
                        }
            }
        }
        
        protected function lstDept_Click(){
            if($this->calDate->Text != NULL && $this->lstDept->SelectedValue != NULL){
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/temp_transfer.php?dept='.$this->lstDept->SelectedValue.'&cal='.  date("Ymd", strtotime($this->calDate->Text)));  
            }
        }
        
        protected function lstItems_Click(){
            if($this->lstItems->SelectedValue != NULL){
                $this->lstSerials->RemoveAllItems();
                $login = LoginHasRole::LoadByLoginIdloginRoleIdrole($_SESSION['login'],$_SESSION['role']);
                $this->lstSerials->AddItem("-Select All Serials-");
                $serials = DeptTransfer::QueryArray(
                                QQ::AndCondition(
                                    QQ::Equal(QQN::DeptTransfer()->ToDept, $login->RoleIdroleObject->Parrent),
                                    QQ::Equal(QQN::DeptTransfer()->Item, $this->lstItems->SelectedValue),
                                    QQ::OrCondition(    
                                        QQ::Equal(QQN::DeptTransfer()->Return, 0),
                                        QQ::Equal(QQN::DeptTransfer()->Return, NULL)
                                    )
                                )
                        );

                foreach ($serials as $serial){
                    $this->lstSerials->AddItem($serial->SerialsObject->Code, $serial->Serials);
                }
            }
        }

        protected function btnAdd_Click(){
            if(isset($_GET['dept']) && $this->lstItems->SelectedValue != NULL){
                $login = LoginHasRole::LoadByLoginIdloginRoleIdrole($_SESSION['login'],$_SESSION['role']);
                if($this->lstSerials->SelectedValue == NULL){
                    $depttrans = DeptTransfer::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::DeptTransfer()->ToDept, $login->RoleIdroleObject->Parrent),
                                //QQ::Equal(QQN::DeptTransfer()->Serials, $this->lstSerials->SelectedValue),
                                QQ::Equal(QQN::DeptTransfer()->Item, $this->lstItems->SelectedValue),
                                QQ::OrCondition(    
                                    QQ::Equal(QQN::DeptTransfer()->Return, 0),
                                    QQ::Equal(QQN::DeptTransfer()->Return, NULL)
                                )
                                    
                            )
                        );
                        foreach ($depttrans as $depttran){
                            $temptrans = new TempTransfer();
                            $temptrans->Date = QDateTime::FromTimestamp(strtotime($this->calDate->Text));
                            $temptrans->ToDept = $_GET['dept'];
                            $depttran->Return = 1;
                            $temptrans->IddeptTransfer = $depttran->IddeptTransfer;
                            $temptrans->FromDept = $depttran->ToDept;
                            $depttran->Save();
                            $temptrans->Save();
                        }
                }else{
                    $depttran = DeptTransfer::QuerySingle(
                            QQ::AndCondition(
                                QQ::Equal(QQN::DeptTransfer()->ToDept, $login->RoleIdroleObject->Parrent),
                                QQ::Equal(QQN::DeptTransfer()->Serials, $this->lstSerials->SelectedValue),
                                QQ::Equal(QQN::DeptTransfer()->Item, $this->lstItems->SelectedValue)
                            )
                        );
                    $temptrans = new TempTransfer();
                    $temptrans->Date = QDateTime::FromTimestamp(strtotime($this->calDate->Text));
                    $temptrans->ToDept = $_GET['dept'];
                    $depttran->Return = 1;
                    $temptrans->IddeptTransfer = $depttran->IddeptTransfer;
                    $temptrans->FromDept = $depttran->ToDept;
                    $depttran->Save();
                    $temptrans->Save();
                }
            }
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/temp_transfer.php?dept='.$this->lstDept->SelectedValue.'&cal='.date("Ymd", strtotime($this->calDate->Text)));  
        }
        
        protected function btnRemove_Click($strFormId,$strControlId,$strParameter){
            $login = LoginHasRole::LoadByLoginIdloginRoleIdrole($_SESSION['login'],$_SESSION['role']);
            $trans = TempTransfer::LoadByIdtempTransfer($strParameter);
            if($trans){
                $depttran = DeptTransfer::QuerySingle(
                            QQ::AndCondition(
                                QQ::Equal(QQN::DeptTransfer()->ToDept, $login->RoleIdroleObject->Parrent),
                                QQ::Equal(QQN::DeptTransfer()->Serials, $trans->IddeptTransferObject->Serials),
                                QQ::Equal(QQN::DeptTransfer()->Item, $trans->IddeptTransferObject->Item)
                            )
                        );
                $depttran->Return = 0;
                $depttran->Save();
                $trans->Delete();
            }
        }
    }
    TempTransForm::Run('TempTransForm');
?>