<?php
	// Load the QCubed Development Framework
	require('../../qcubed.inc.php');

	require(__FORMBASE_CLASSES__ . '/ReportEditFormBase.class.php');
	
	class ReportEditForm extends ReportEditFormBase {
		// Override Form Event Handlers as Needed
               
                protected $btnAddLink;
                protected function Form_Run() {
			parent::Form_Run();

			// Security check for ALLOW_REMOTE_ADMIN
			// To allow access REGARDLESS of ALLOW_REMOTE_ADMIN, simply remove the line below
			QApplication::CheckRemoteAdmin();
		}

//		protected function Form_Load() {}

		protected function Form_Create() {
                    parent::Form_Create();
                    $orgs = Role::LoadArrayByGrp(1);                   
                    foreach ($orgs as $org){
                        $this->btnAddLink[$org->Idrole] = new QButton($this);
                        $this->btnAddLink[$org->Idrole]->ButtonMode = QButtonMode::Link;
                        $this->btnAddLink[$org->Idrole]->Text = "Add";
                        $this->btnAddLink[$org->Idrole]->AddAction(new QClickEvent(), new QServerAction("btnAddLink_Click"));
                        $this->btnAddLink[$org->Idrole]->ActionParameter = $org->Idrole.' '.'1';
                        
                        $objs = Role::LoadArrayByParrent($org->Idrole);
                        foreach ($objs as $obj){
                            $this->btnAddLink[$obj->Idrole] = new QButton($this);
                            $this->btnAddLink[$obj->Idrole]->ButtonMode = QButtonMode::Link;
                            $this->btnAddLink[$obj->Idrole]->AddAction(new QClickEvent(), new QServerAction("btnAddLink_Click"));
                            $param = 0;
                            if($obj->Grp == 3){
                                $this->btnAddLink[$obj->Idrole]->Text = "Employee";
                                $param = 1;                                
                            }else{ 
                                $this->btnAddLink[$obj->Idrole]->Text = "Add";
                            }
                            
                            $this->btnAddLink[$obj->Idrole]->ActionParameter = $obj->Idrole.' '.$param;
                            
                        
                            $subobjs = Role::QueryArray(
                                        QQ::AndCondition(
                                        QQ::Equal(QQN::Role()->Parrent, $obj->Idrole),
                                        QQ::NotEqual(QQN::Role()->Parrent, NULL)
                                            )
                                        );
                            foreach ($subobjs as $subobj){
                                $this->btnAddLink[$subobj->Idrole] = new QButton($this);
                                $this->btnAddLink[$subobj->Idrole]->ButtonMode = QButtonMode::Link;
                                $param = 0;
                                if($subobj->Grp == 3){
                                    $this->btnAddLink[$subobj->Idrole]->Text = "Employee";    
                                    $param = 1;
                                }else{
                                    $this->btnAddLink[$subobj->Idrole]->Text = "Add";
                                }
                                $this->btnAddLink[$subobj->Idrole]->AddAction(new QClickEvent(), new QServerAction("btnAddLink_Click"));
                                $this->btnAddLink[$subobj->Idrole]->ActionParameter = $subobj->Idrole.' '.$param;

                                $subobjs1 = Role::QueryArray(
                                QQ::AndCondition(
                                QQ::Equal(QQN::Role()->Parrent, $subobj->Idrole),
                                QQ::NotEqual(QQN::Role()->Parrent, NULL)
                                    )
                                );

                                foreach ($subobjs1 as $subobj1){
                                    $this->btnAddLink[$subobj1->Idrole] = new QButton($this);
                                    $this->btnAddLink[$subobj1->Idrole]->ButtonMode = QButtonMode::Link;
                                    $param = 0;
                                    if($subobj1->Grp == 3){
                                        $this->btnAddLink[$subobj1->Idrole]->Text = "Employee";
                                        $param = 1;
                                    }else{
                                        $this->btnAddLink[$subobj1->Idrole]->Text = "Add";
                                    }
                                    $this->btnAddLink[$subobj1->Idrole]->AddAction(new QClickEvent(), new QServerAction("btnAddLink_Click"));
                                    $this->btnAddLink[$subobj1->Idrole]->ActionParameter = $subobj1->Idrole.' '.$param;



                                    $subobjs2 = Role::QueryArray(
                                    QQ::AndCondition(
                                    QQ::Equal(QQN::Role()->Parrent, $subobj1->Idrole),
                                    QQ::NotEqual(QQN::Role()->Parrent, NULL)
                                        )
                                    );

                                    foreach ($subobjs2 as $subobj2){ 
                                        $this->btnAddLink[$subobj2->Idrole] = new QButton($this);
                                        $this->btnAddLink[$subobj2->Idrole]->ButtonMode = QButtonMode::Link;
                                        $param = 0;                                        
                                        if($subobj2->Grp == 3){
                                            $this->btnAddLink[$subobj2->Idrole]->Text = "Employee";
                                            $param = 1;
                                        }else{    
                                            $this->btnAddLink[$subobj2->Idrole]->Text = "Add";
                                        }
                                        $this->btnAddLink[$subobj2->Idrole]->AddAction(new QClickEvent(), new QServerAction("btnAddLink_Click"));
                                        $this->btnAddLink[$subobj2->Idrole]->ActionParameter = $subobj2->Idrole.' '.$param;

                                        $subobjs3 = Role::QueryArray(
                                        QQ::AndCondition(
                                        QQ::Equal(QQN::Role()->Parrent, $subobj2->Idrole),
                                        QQ::NotEqual(QQN::Role()->Parrent, NULL)
                                            )
                                        );

                                        foreach ($subobjs3 as $subobj3){
                                            $this->btnAddLink[$subobj3->Idrole] = new QButton($this);
                                            $this->btnAddLink[$subobj3->Idrole]->ButtonMode = QButtonMode::Link;
                                            $param = 0;
                                            if($subobj3->Grp == 3){
                                                $this->btnAddLink[$subobj3->Idrole]->Text = "Employee";
                                                $param = 1;
                                            }else{
                                                $this->btnAddLink[$subobj3->Idrole]->Text = "Add";
                                            }
                                            $this->btnAddLink[$subobj3->Idrole]->AddAction(new QClickEvent(), new QServerAction("btnAddLink_Click"));
                                            $this->btnAddLink[$subobj3->Idrole]->ActionParameter = $subobj3->Idrole.' '.$param;

                                        }
                                    }
                                }
                            }
                        }
                    }                                                 
                }
                
                protected function btnAddLink_Click($strFormId, $strControlId, $strParameter){
                    $param = explode(' ', $strParameter);
                    if($param[1] == 0){
                        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/role_edit.php?new=1&dept='.$param[0]);
                    }else {
                        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/ledger_edit.php?new=1');                        
                    }
                    
                }

		// Other Methods
		protected function RedirectToListPage() {
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/report_edit.php');
		}
	}

	// Go ahead and run this form object to render the page and its event handlers, implicitly using
	// report_edit.tpl.php as the included HTML template file
	ReportEditForm::Run('ReportEditForm');
?>