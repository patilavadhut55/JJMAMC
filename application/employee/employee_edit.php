<?php
  require('../../qcubed.inc.php');
  require(__FORMBASE_CLASSES__ . '/LedgerEditFormBase.class.php');

    class LedgerEditForm extends LedgerEditFormBase {
               //address
                protected $txtTitle;
		protected $txtAddressLine1;
		protected $txtAddressLine2;
		protected $txtCountry;
		protected $txtState;
		protected $txtDistrict;
                protected $txtTaluka;
                protected $txtCity;
		protected $txtZipCode;
		protected $txtContact1;
		protected $txtContact2;
		protected $txtWeb;
		protected $txtEmail1;
		protected $txtEmail2;
		protected $txtTinSalesTaxNo;
		protected $txtCstNo;
                protected $btnUpdate;
                protected $btnLogin;
                protected $btnRemove;
                protected $btnList;
                protected $btnAdd;
                protected $btnNew;
                protected $lstGrp;

                protected $txtUserName;
                protected $txtPassword;
                protected $txtConfirm;
                protected $chkIsEnabled;
                protected $dtgLogin;
                protected $txtRole;
                protected $chkActive;
                protected $btnRoleSave;
                protected $btnRoleDelete;
                protected $dtgRole;
                
        protected function Form_Run() {
            parent::Form_Run();
            QApplication::CheckRemoteAdmin();
        }

        protected function Form_Create() {
            parent::Form_Create();
            
            //$this->txtMname->Name = "Marathi Name";
            

                    
            $this->lstGrpObject->Name = 'Group';
            $this->lstGrp = new QListBox($this);
            $this->lstGrp->Name = "Group";
            $this->lstGrp->AddItem("-select-",NULL);
            $grps = Ledger::QueryArray(
                    QQ::AndCondition(
                        QQ::Equal(QQN::Ledger()->IsGrp, 1),
                        QQ::OrCondition(
                        QQ::Equal(QQN::Ledger()->GrpObject->Code, "D17"),
                        QQ::Equal(QQN::Ledger()->GrpObject->Code, "D21")
                        )
                    )
                    );
                foreach ($grps as $grp) {
                    $this->lstGrp->AddItem($grp->Name,$grp->Idledger);
                }
            $this->lstGrp->AddAction(new QChangeEvent(), new QServerAction("lstGrp_Change"));    
            
            
            $this->btnSave = new QButton($this);
            $this->btnSave->Text = QApplication::Translate('Save');
            $this->btnSave->AddAction(new QClickEvent(), new QServerAction('btnSave_Click'));
            $this->btnSave->CausesValidation = true;

            $this->btnCancel = new QButton($this);
            $this->btnCancel->Text = QApplication::Translate('Cancel');
            $this->btnCancel->AddAction(new QClickEvent(), new QServerAction('btnCancel_Click'));

            $this->btnDelete = new QButton($this);
            $this->btnDelete->Text = QApplication::Translate('Delete');
            $this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(sprintf(QApplication::Translate('Are you SURE you want to DELETE this %s?'), QApplication::Translate('Ledger'))));
            $this->btnDelete->AddAction(new QClickEvent(), new QServerAction('btnDelete_Click'));
            $this->btnDelete->Visible = $this->mctLedger->EditMode;
            
            $this->btnDelete->Text = 'Delete';
            $this->btnSave->ButtonMode = QButtonMode::Save;
            $this->btnCancel->ButtonMode = QButtonMode::Cancel;
            $this->btnDelete->ButtonMode = QButtonMode::Delete;
            
            
            $this->btnNew = new QButton($this);
            $this->btnNew->ButtonMode = QButtonMode::AddNew;
            $this->btnNew->AddAction(new QClickEvent(), new QServerAction("btnNew_Click"));                    
            
            $this->btnList = new QButton($this);
            $this->btnList->ButtonMode = QButtonMode::listall;
            $this->btnList->AddAction(new QClickEvent(), new QServerAction("btnList_Click"));

                $this->txtTitle = new QTextBox($this);
                $this->txtAddressLine1 = new QTextBox($this);
                $this->txtAddressLine2 = new QTextBox($this);
                $this->txtCountry = new QSelect2ListBox($this);
                $this->txtState = new QSelect2ListBox($this);
                $this->txtDistrict = new QSelect2ListBox($this);
                $this->txtTaluka = new QSelect2ListBox($this);
                $this->txtCity = new QTextBox($this);
                $this->txtZipCode = new QTextBox($this);
                $this->txtContact1 = new QTextBox($this);
                $this->txtContact2 = new QTextBox($this);
                $this->txtWeb = new QTextBox($this);
                $this->txtEmail1 = new QTextBox($this);
                $this->txtEmail2 = new QTextBox($this);
                $this->txtTinSalesTaxNo = new QTextBox($this);
                $this->txtCstNo = new QTextBox($this);

                $this->txtTitle->Name = "Address Title";
                $this->txtAddressLine1->Name = "Address Line 1";
                $this->txtAddressLine2->Name = "Address Line 2";
                $this->txtCountry->Name = "Nation";
                $this->txtState->Name = "State";
                $this->txtDistrict->Name = "District";
                $this->txtTaluka->Name = "Taluka";
                $this->txtCity->Name = "City";
                $this->txtZipCode->Name = "ZIP Code";
                $this->txtContact1->Name = "Contact 1";
                $this->txtContact2->Name = "Contact 2";
                $this->txtWeb->Name = "Website";
                $this->txtEmail1->Name = "E-Mail 1";
                $this->txtEmail2->Name = "E-Mail 2";
                $this->txtTinSalesTaxNo->Name = "Tin/Sales Tax No.";
                $this->txtCstNo->Name = "Cst No.";
                 
                 //logins
                $this->txtUserName = new QTextBox($this);
                $this->txtPassword = new QTextBox($this);
                $this->txtConfirm = new QTextBox($this);
                $this->chkIsEnabled = new QCheckBox($this);
                
                $this->txtUserName->Name = "User Name";
                //$this->txtUserName->Required = TRUE;
                
                $this->txtPassword->TextMode = QTextMode::Password;
                //$this->txtPassword->Required = TRUE;
                $this->txtPassword->Name = "Password";
                $this->txtConfirm->Name = "Confirm Password";
                //$this->txtConfirm->Required = TRUE;
                $this->txtConfirm->TextMode = QTextMode::Password;
                $this->chkIsEnabled->Name = "Is Enable";
                
                $nations = Place::LoadAll(QQ::OrderBy(QQN::Place()->Code));
                $this->txtCountry->AddItem("-Select Nation-", NULL);    
                $this->txtState->AddItem("-Select State-", NULL);    
                $this->txtDistrict->AddItem("-Select District-", NULL);    
                $this->txtTaluka->AddItem("-Select Taluka-", NULL);    
                foreach ($nations as $nation) {
                    if($nation->Grp == 1 )
                    $this->txtCountry->AddItem($nation->Name, $nation->Idplace);    
                    if($nation->Grp == 2 )
                    $this->txtState->AddItem($nation->Name, $nation->Idplace);    
                    if($nation->Grp == 3 )
                    $this->txtDistrict->AddItem($nation->Name, $nation->Idplace);    
                    if($nation->Grp == 7 )
                    $this->txtTaluka->AddItem($nation->Name, $nation->Idplace);    
                }
                //Roles
                $this->dtgRole = new QDataGrid($this);
                $this->dtgRole->CssClass = "datagrid";

                $this->dtgRole->ShowFilter = TRUE;

                $this->dtgRole->Paginator = new QPaginator($this->dtgRole);
                $this->dtgRole->ItemsPerPage = 10;
                $this->dtgRole->SetDataBinder('dtgRole_Bind');

                $this->dtgRole->RowActionParameterHtml = '<?= $_ITEM->LoginIdlogin.".".$_ITEM->RoleIdrole ?>';
                $this->dtgRole->AddRowAction(new QClickEvent(), new QServerAction('dtgRoleRow_Click'));

                $this->dtgRole->AddColumn(new QDataGridColumn('Sr', '<?= ($_CONTROL->CurrentRowIndex + 1) ?>', 'Width=3'));
                $Name = new QDataGridColumn('Name', '<?= $_ITEM->RoleIdroleObject->Name ?>', 'Width=200',
                                    array(
                                            'OrderByClause' => QQ::OrderBy(QQN::LoginHasRole()->RoleIdroleObject->Name),
                                            'ReverseOrderByClause' => QQ::OrderBy(QQN::LoginHasRole()->RoleIdroleObject->Name, false)));

                $Name->Filter = QQ::Like(QQN::LoginHasRole()->RoleIdroleObject->Name, null);
                $Name->FilterPostfix = $Name->FilterPrefix = '%';
                $Name->FilterType = QFilterType::TextFilter;
                $this->dtgRole->AddColumn($Name);
                $this->dtgRole->AddColumn(new QDataGridColumn('Active Role', '<?= $_ITEM->Active ?>'));
                
                $this->txtRole = new QSelect2ListBox($this);
                $roles = Role::LoadAll();
                $this->txtRole->AddItem("-select-", NULL);
                $this->txtRole->Width = 200;
                foreach ($roles as $role) {
                    $this->txtRole->AddItem($role->Name, $role->Idrole);    
                }
                $this->txtRole->Placeholder = "Role";
                
                $this->chkActive = new QCheckBox($this);
                $this->chkActive->Width = 50;
                $this->chkActive->Name = "Active";
                
                $this->btnRoleSave = new QButton($this);
                if(isset($_GET['role'])){
                    $this->btnRoleSave->ButtonMode = QButtonMode::Save;
                }else{                    
                    $this->btnRoleSave->ButtonMode = QButtonMode::Add;
                }
                $this->btnRoleSave->AddAction(new QClickEvent(), new QServerAction("btnRoleSave_Click"));
                
                $this->btnRoleDelete = new QButton($this);
                $this->btnRoleDelete->Visible = FALSE;
                $this->btnRoleDelete->ButtonMode = QButtonMode::Delete;
                $this->btnRoleDelete->AddAction(new QClickEvent(), new QServerAction("btnRoleDelete_Click"));
        
                        
                $this->btnUpdate = new QButton($this);
                $this->btnUpdate->ButtonMode = QButtonMode::Save;
                $this->btnUpdate->AddAction(new QClickEvent(), new QServerAction("btnUpdate_Click"));

                $this->btnLogin = new QButton($this);
                //$this->btnLogin->CausesValidation = TRUE;
                $this->btnLogin->ButtonMode = QButtonMode::Save;
                $this->btnLogin->AddAction(new QClickEvent(), new QServerAction("btnLogin_Click"));
                
                $this->btnRemove = new QButton($this);
                $this->btnRemove->ButtonMode = QButtonMode::Delete;
                $this->btnRemove->AddAction(new QClickEvent(), new QServerAction("btnRemove_Click"));
        
                   if($this->mctLedger->EditMode == TRUE){
                        $this->lstGrp->SelectedValue = $this->lstGrpObject->SelectedValue;
                        $this->btnSave->Text = "Update";
                        //address
                        $address = Address::LoadArrayByOf($this->lblIdledger->Text);
                        if($address){
                            foreach ($address as $addres){}
                        
                        $this->txtTitle->Text = $addres->Title;
                    	$this->txtAddressLine1->Text = $addres->AddressLine1;
                    	$this->txtAddressLine2->Text = $addres->AddressLine2;
                    	$this->txtCountry->SelectedValue = $addres->Country;
                    	$this->txtState->SelectedValue = $addres->State;
                    	$this->txtDistrict->SelectedValue = $addres->District;
                        $this->txtTaluka->SelectedValue = $addres->Taluka;
                    	$this->txtCity->Text = $addres->City;
                    	$this->txtZipCode->Text = $addres->ZipCode;
                    	$this->txtContact1->Text = $addres->Contact1;
                    	$this->txtContact2->Text = $addres->Contact2;
                        $this->txtWeb->Text = $addres->Web;
                    	$this->txtEmail1->Text = $addres->Email1;
                        $this->txtEmail2->Text = $addres->Email2;
                    	$this->txtTinSalesTaxNo->Text = $addres->TinSalesTaxNo;
                    	$this->txtCstNo->Text = $addres->CstNo;
                       
                    }
                    //login
                        $login = Login::LoadByIdlogin($this->lblIdledger->Text);
                       if($login){
                     
                        $this->txtUserName->Text = $login->Username;
                    	$this->txtPassword->Text = $login->Password;
                    	$this->txtConfirm->Text = $login->Password;
                        $this->chkIsEnabled->Checked = $login->IsEnabled;
                       }
                    //login has role
                    if(isset($_GET['role'])){
                        $this->btnRoleDelete->Visible = TRUE;
                        $id = explode(".", $_GET['role']);
                        $loginhasrole = LoginHasRole::LoadByLoginIdloginRoleIdrole($id[0], $id[1]);
                        $this->txtRole->SelectedValue = $loginhasrole->RoleIdrole;
                        $this->chkActive->Checked = $loginhasrole->Active;  
                        }
                       
                    }else {
                       $codes = Settings::LoadAll();
                       foreach ($codes as $code){
                         if($code->Name == 'Ledger Counter'){
                            $this->txtCode->Text = $code->Option; 
                         }
                      }
                      
                   }                   
                }
                
                
                
                protected function btnRoleDelete_Click(){
                    $id = explode(".", $_GET['role']);
                    $role = LoginHasRole::LoadByLoginIdloginRoleIdrole($id[0], $id[1]);
                    $role->Delete();
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/employee/employee_edit.php/'.$this->lblIdledger->Text.'?tab=3');
                }
                
                protected function btnRoleSave_Click(){
                    $login = Login::LoadByIdlogin($this->lblIdledger->Text);
                    if($login){
                        if($this->txtRole->SelectedValue != NULL){
                            //following code is used for reset all active role to false
                            //because only one active role should be there so it reset to deactive all roles
                            //--------------------------------------------------------------------------
                            //This condition checks for Acive role if yes then reset active role 
                            if($this->chkActive->Checked == TRUE){
                                $resetLHRActives = LoginHasRole::LoadArrayByLoginIdlogin($login->Idlogin);
                                foreach ($resetLHRActives as $resetLHRActive){
                                    $resetLHRActive->Active = FALSE;
                                    $resetLHRActive->Save();
                                }
                            }
                            //--------------------------------------------------------------------------
                            
                            if(isset($_GET['role'])){
                                $id = explode(".", $_GET['role']);
                                $loginhasrole = LoginHasRole::LoadByLoginIdloginRoleIdrole($id[0], $id[1]);
                            }else{
                                $loginhasrole = new LoginHasRole();
                            }
                            //Add new Role or set Active role for that login
                            $loginhasrole->LoginIdlogin = $login->Idlogin;
                            $loginhasrole->RoleIdrole = $this->txtRole->SelectedValue;
                            $loginhasrole->Active = $this->chkActive->Checked;
                            $loginhasrole->Save();
                            
                        }
                    }
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/employee/employee_edit.php/'.$this->lblIdledger->Text.'?tab=3');
                }
                
                protected function lstGrp_Change(){
                    $this->lstGrpObject->SelectedValue = $this->lstGrp->SelectedValue;
                }

                protected function btnSave_Click($strFormId, $strControlId, $strParameter) {
                    if($this->mctLedger->EditMode == FALSE){
                        $code = Settings::LoadByIdsettings(2);
                        $this->txtCode->Text = $code->Option;
                        $code->Option = $code->Option + 1;
                        $code->Save();
                    }
                    $this->mctLedger->SaveLedger();
                    $led = Ledger::LoadByCode($this->txtCode->Text);
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/employee/employee_edit.php/'.$led->Idledger.'?tab=1');
                }
                
                protected function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			$led = Ledger::LoadByCode($this->txtCode->Text);
                        $address = Address::LoadByIdaddress($led->Idledger);
                        if($address)
                        $address->Delete();
                        $this->mctLedger->DeleteLedger();
			$this->RedirectToListPage();
		}
                
                protected function btnUpdate_Click($strFormId, $strControlId, $strParameter) {
	  	      $led = Ledger::LoadByIdledger($this->lblIdledger->Text);
                      $address = Address::LoadArrayByOf($led->Idledger);
                      if($address){
                          foreach ($address as $addres){}
                      }else{
                        $addres = new Address();
                      }
                        $addres->Of = $led->Idledger;
                        $addres->Title = $this->txtTitle->Text;
                    	$addres->AddressLine1 = $this->txtAddressLine1->Text;
                    	$addres->AddressLine2 = $this->txtAddressLine2->Text;
                    	$addres->Country = $this->txtCountry->SelectedValue;
                    	$addres->State = $this->txtState->SelectedValue;
                    	$addres->District = $this->txtDistrict->SelectedValue;
                        $addres->Taluka = $this->txtTaluka->SelectedValue;
                    	$addres->City = $this->txtCity->Text;
                    	$addres->ZipCode = $this->txtZipCode->Text;
                    	$addres->Contact1 = $this->txtContact1->Text;
                    	$addres->Contact2 = $this->txtContact2->Text;
                        $addres->Web = $this->txtWeb->Text;
                    	$addres->Email1 = $this->txtEmail1->Text;
                        $addres->Email2 = $this->txtEmail2->Text;
                    	$addres->TinSalesTaxNo = $this->txtTinSalesTaxNo->Text;
                    	$addres->CstNo = $this->txtCstNo->Text;
                    	$addres->Save();
                        $led = Ledger::LoadByIdledger($this->lblIdledger->Text);
                        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/employee/employee_edit.php/'.$led->Idledger.'?tab=2');
		}
                protected function btnLogin_Click($strFormId, $strControlId, $strParameter) {    
                       $login = Login::LoadByIdlogin($this->lblIdledger->Text);
                        if($login){
                           
                        }else{
                            $login = new Login();
                            $login->Idlogin = $this->lblIdledger->Text;
                        }  
                        $login->Username =  $this->txtUserName->Text ;
                    	$login->Password = $this->txtPassword->Text ;
                    	//$login->Password = $this->txtConfirm->Text;
                        $login->IsEnabled = $this->chkIsEnabled->Checked;
                        $login->Save();
                      
                        $led = Ledger::LoadByIdledger($this->lblIdledger->Text);                        
                        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/employee/employee_edit.php/'.$led->Idledger.'?tab=3');
		}
                protected function btnRemove_Click($strFormId, $strControlId, $strParameter) {
                    $led = Ledger::LoadByCode($this->txtCode->Text);
                    $address = Address::LoadByIdaddress($led->Idledger);
                    $address->Delete();
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/employee/employee_edit.php/'.$led->Idledger.'?tab=1');
		}
                protected function btnCancel_Click($strFormId, $strControlId, $strParameter) {                    
                    $this->RedirectToListPage();
                    //QApplication::ExecuteJavaScript("window.history.back()");
		}
                
                protected function btnNew_Click() {
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/employee/employee_edit.php?new=1');
		}
                
                public function btnList_Click($strFormId, $strControlId, $strParameter) {
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/employee/employee_edit.php');
                }
                protected function RedirectToListPage() {
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/role_edit.php');
                }
    }

LedgerEditForm::Run('LedgerEditForm');
?>