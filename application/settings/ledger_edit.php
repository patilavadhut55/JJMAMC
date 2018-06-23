<?php
  require('../../qcubed.inc.php');
  //require(__FORMBASE_CLASSES__ . '/LedgerEditFormBase.class.php');

    class LedgerEditForm extends QForm {
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
                protected $lstDepartment;
                
                //ledger 
                
                protected $txtCode;
		protected $txtName;
                
                protected $btnSave;
                protected $btnCancel;
                protected $btnDelete;


                protected function Form_Run() {
                    parent::Form_Run();
                    QApplication::CheckRemoteAdmin();
            }

        protected function Form_Create() {
            parent::Form_Create();
            $this->txtName = new QTextBox($this);
            $this->txtName->Name = "Name";
            
            $this->txtCode = new QTextBox($this);
            $this->txtCode->Name = "Code";        
            $this->txtCode->ReadOnly = TRUE;
            
            
            $this->dtgLogin = new QDataGrid($this);
            $this->dtgLogin->CssClass = "datagrid";

            $this->dtgLogin->ShowFilter = TRUE;

            $this->dtgLogin->Paginator = new QPaginator($this->dtgLogin);
            $this->dtgLogin->ItemsPerPage = 10;
            
            if(!isset($_GET['id'])  && !isset($_GET['new'])){
                $this->dtgLogin->SetDataBinder('dtgLogin_Bind');
            }
            $this->dtgLogin->AddColumn(new QDataGridColumn('Code', '<?= $_ITEM->IdloginObject->Code ?>', 'Width=50'));            
            //$this->dtgLogin->MetaAddColumn("Username");
            $Name = new QDataGridColumn('Name', '<?= $_ITEM->IdloginObject->Name ?>', 'Width=200',
                                        array('OrderByClause' => QQ::OrderBy(QQN::Login()->IdloginObject->Name),
                                                'ReverseOrderByClause' => QQ::OrderBy(QQN::Login()->IdloginObject->Name, false)));
            $Name->Filter = QQ::Like(QQN::Login()->IdloginObject->Name, null);
            $Name->FilterPostfix = $Name->FilterPrefix = '%';
            $Name->FilterType = QFilterType::TextFilter;
            $Name->FilterBoxSize = 15;    
            $this->dtgLogin->AddColumn($Name);
            $this->dtgLogin->AddColumn(new QDataGridColumn('Role', '<?= $_FORM-> renderrole($_ITEM) ?>', 'HtmlEntities=false','Width=50'));
            $this->dtgLogin->AddColumn(new QDataGridColumn('Is Enable', '<div align="center"><?= $_FORM-> renderacc($_ITEM) ?></div>', 'HtmlEntities=false', 'Width=5'));
            $this->dtgLogin->RowActionParameterHtml = '<?= $_ITEM->Idlogin ?>';
            $this->dtgLogin->AddRowAction(new QClickEvent(), new QAjaxAction('dtgproassetRow_Click'));
                    
            
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
                    ));
                foreach ($grps as $grp) {
                    $this->lstGrp->AddItem($grp->Name,$grp->Idledger);
                }
            $this->lstGrp->AddAction(new QChangeEvent(), new QServerAction("lstGrp_Change"));    
            if(isset($_GET['grp'])){
                foreach ($grps as $grp){
                    if($grp->Code == 59){
                        $this->lstGrp->SelectedValue = $grp->Idledger;
                    }
                }
            }
            
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
            //$this->btnDelete->Visible = $this->mctLedger->EditMode;
            
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

            //department
            $this->lstDepartment = new QSelect2ListBox($this);
            $this->lstDepartment->AddItem("- Select Department -",NULL);
            $this->lstDepartment->Name = "Department";
            $depts = Role::QueryArray(
                QQ::OrCondition(
                QQ::Equal(QQN::Role()->Grp, 2),
                QQ::Equal(QQN::Role()->Grp, 1),
                QQ::Equal(QQN::Role()->Grp, 5),
                QQ::Equal(QQN::Role()->Idrole, 9)
                    )
                );
            
            foreach ($depts as $dept){
                $this->lstDepartment->AddItem($dept->Name,$dept->Idrole);    
            }
            $this->lstDepartment->AddAction(new QClickEvent(), new QServerAction("lstDepartment_Click"));
            
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
                $Name = new QDataGridColumn('Name', '<?= $_ITEM->RoleIdroleObject->Name ?>', 'Width=100',
                                    array(
                                            'OrderByClause' => QQ::OrderBy(QQN::LoginHasRole()->RoleIdroleObject->Name),
                                            'ReverseOrderByClause' => QQ::OrderBy(QQN::LoginHasRole()->RoleIdroleObject->Name, false)));

                $Name->Filter = QQ::Like(QQN::LoginHasRole()->RoleIdroleObject->Name, null);
                $Name->FilterPostfix = $Name->FilterPrefix = '%';
                $Name->FilterType = QFilterType::TextFilter;
                $this->dtgRole->AddColumn($Name);
                $this->dtgRole->AddColumn(new QDataGridColumn('Department', '<?= $_ITEM->RoleIdroleObject->ParrentObject ?>', 'Width=100'));
                $this->dtgRole->AddColumn(new QDataGridColumn('Active Role', '<?= $_ITEM->Active ?>', 'Width=50'));
                
                $this->txtRole = new QSelect2ListBox($this);
                $roles = Role::LoadArrayByGrp(3);
                $this->txtRole->AddItem("- Select Role -", NULL);
                $this->txtRole->Width = 200;
                foreach ($roles as $role) {
                    $this->txtRole->AddItem($role->Name, $role->Idrole);    
                }
                
                $this->txtRole->Placeholder = "Role";
                $this->txtRole->AddAction(new QClickEvent(), new QServerAction("txtRole_Click"));
                
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
        
                    if(isset($_GET['id'])){
                        $led = Ledger::LoadByIdledger($_GET['id']);
                        $this->txtCode->Text = $led->Code;
                        $this->txtName->Text = $led->Name;
                        $this->lstGrp->SelectedValue = $led->Grp;
                        
                        $this->btnSave->Text = "Update";
                        
                        //address
                        $address = Address::LoadArrayByOf($led->Idledger);
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
                        $login = Login::LoadByIdlogin($led->Idledger);
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
                            $this->lstDepartment->SelectedValue = $loginhasrole->RoleIdroleObject->Parrent;
                        }
                       
                    }else{
                       $codes = Settings::LoadAll();
                        foreach ($codes as $code){
                            if($code->Name == 'Ledger Counter'){
                                $this->txtCode->Text = $code->Option; 
                            }
                        }                      
                    }    
                    
                }
                
                protected function lstDepartment_Click(){
                    if($this->lstDepartment->SelectedValue != NULL){
                        $roles = Role::QueryArray(
                        QQ::AndCondition(
                        QQ::Equal(QQN::Role()->Grp, 3),
                        QQ::Equal(QQN::Role()->Parrent, $this->lstDepartment->SelectedValue)
                                )                        
                            );
                        $this->txtRole->RemoveAllItems();
                        $this->txtRole->AddItem("-select-", NULL);
                        $this->txtRole->Width = 200;
                        foreach ($roles as $role) {
                            $this->txtRole->AddItem($role->Name, $role->Idrole);    
                        }
                    }
                    $_GET['tab'] = 3;
                }

                protected function txtRole_Click(){
                    if($this->txtRole->SelectedValue != NULL){                       
                        $role = Role::LoadByIdrole($this->txtRole->SelectedValue);
                        $this->lstDepartment->SelectedValue = $role->Parrent;                        
                    }
                    $_GET['tab'] = 3;
                }


                protected function dtgLogin_Bind(){
                    if(isset($_GET['hrole'])){
                        $this->dtgLogin->TotalItemCount = Login::QueryCount(
                                QQ::AndCondition(                                    
                                        $this->dtgLogin->Conditions,
                                        QQ::Equal(QQN::Login()->LoginHasRoleAsId->RoleIdrole, $_GET['hrole'])
                                        ));

                        $data = Login::QueryArray(
                                    QQ::AndCondition(
                                        $this->dtgLogin->Conditions,
                                        QQ::Equal(QQN::Login()->LoginHasRoleAsId->RoleIdrole, $_GET['hrole'])    
                                        ),
                        QQ::Clause(
                                QQ::OrderBy(QQN::Login()->Idlogin, TRUE),
                                $this->dtgLogin->LimitClause
                        ));
                    }elseif($_SESSION['role'] == 1){
                        $this->dtgLogin->TotalItemCount = Login::QueryCount(
                                QQ::AndCondition(                                    
                                        $this->dtgLogin->Conditions
                                        ));

                        $data = Login::QueryArray(
                                    QQ::AndCondition(
                                        $this->dtgLogin->Conditions

                                        ),
                        QQ::Clause(
                                QQ::OrderBy(QQN::Login()->Idlogin, TRUE),
                                $this->dtgLogin->LimitClause
                        ));
                    }else{
                        $this->dtgLogin->TotalItemCount = Login::QueryCount(
                                QQ::AndCondition(                                    
                                        $this->dtgLogin->Conditions,
                                            QQ::NotEqual(QQN::Login()->Idlogin, 1)
                                        ));

                        $data = Login::QueryArray(
                                    QQ::AndCondition(
                                        $this->dtgLogin->Conditions,
                                        QQ::NotEqual(QQN::Login()->Idlogin, 1)
                                        ),
                        QQ::Clause(
                                QQ::OrderBy(QQN::Login()->Idlogin, TRUE),
                                $this->dtgLogin->LimitClause
                        ));
                    }
                    $this->dtgLogin->DataSource = $data;
                }

                
                protected function dtgRole_Bind(){
                    if(isset($_GET['id'])){
                    $this->dtgRole->TotalItemCount = LoginHasRole::QueryCount(
                            QQ::AndCondition(                                    
                                    $this->dtgRole->Conditions,
                                    QQ::Equal(QQN::LoginHasRole()->LoginIdlogin, $_GET['id'])
                                    ));

                    $data = LoginHasRole::QueryArray(
                                QQ::AndCondition(
                                    $this->dtgRole->Conditions,
                                    QQ::Equal(QQN::LoginHasRole()->LoginIdlogin, $_GET['id'])
                                    ),
                    QQ::Clause(
                            QQ::OrderBy(QQN::LoginHasRole()->RoleIdrole, TRUE),
                            $this->dtgRole->LimitClause
                    ));
                    
                    $this->dtgRole->DataSource = $data;
                    }
                }
                
                public function dtgRoleRow_Click($strFormId, $strControlId, $strParameter) {
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/ledger_edit.php?id='.$_GET['id'].'&role='.$strParameter.'&tab=3');
                }
                
                protected function btnRoleDelete_Click(){
                    $id = explode(".", $_GET['role']);
                    $role = LoginHasRole::LoadByLoginIdloginRoleIdrole($id[0], $id[1]);
                    $role->Delete();
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/ledger_edit.php?id='.$_GET['id'].'&tab=3');
                }
                
                protected function btnRoleSave_Click(){
                    $login = Login::LoadByIdlogin($_GET['id']);
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
                            //$loginhasrole->Department = $this->lstDepartment->SelectedValue;
                            $loginhasrole->Active = $this->chkActive->Checked;
                            $loginhasrole->Save();
                            
                        }
                    }
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/ledger_edit.php?id='.$_GET['id'].'&tab=3');
                }

                public function renderacc(Login $login) {
                    $objControlId = 'role'.$login->Idlogin;
                    if (!$objControl = $this->GetControl($objControlId)) {
                    $objControl = new QCheckBox($this, $objControlId);
                    $objControl->AddAction(new QChangeEvent(), new QServerAction('renderacc_change')); 
                    $objControl->ActionParameter = $login->Idlogin;
                    $objControl->Checked = $login->IsEnabled;
                    }
                    
                    return $objControl->Render(false);
                }
                
                public function renderrole(Login $login) {
                    $objControlId = 'acc'.$login->Idlogin;
                    if (!$objControl = $this->GetControl($objControlId)) {
                    $objControl = new QLabel($this, $objControlId);
                    $roles = LoginHasRole::QueryArray(
                            QQ::AndCondition(
                            QQ::Equal(QQN::LoginHasRole()->LoginIdlogin, $login->Idlogin),
                            QQ::Equal(QQN::LoginHasRole()->Active, TRUE)
                                    )
                            );
                            foreach ($roles as $role){
                                $objControl->Text = $role->RoleIdroleObject->Name;
                            }
                    
                    }
                    
                    return $objControl->Render(false);
                }
                
                public function renderacc_change($strFormId, $strControlId, $strParameter) {
                    $login = Login::LoadByIdlogin($strParameter);
                    $login->IsEnabled = $this->GetControl($strControlId)->Checked; 
                    $login->Save();
                    $this->RedirectToListPage();
                }
                
                public function dtgproassetRow_Click($strFormId, $strControlId, $strParameter) {
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/ledger_edit.php?id='.$strParameter);
                }
                
                protected function lstGrp_Change(){
                    //$this->lstGrpObject->SelectedValue = $this->lstGrp->SelectedValue;
                }

                protected function btnSave_Click($strFormId, $strControlId, $strParameter) {
                    if(isset($_GET['id'])){
                        $led = Ledger::LoadByIdledger($_GET['id']);
                    }else{
                        $led = new Ledger();
                        $code = Settings::LoadByIdsettings(2);
                        $this->txtCode->Text = $code->Option;
                        $code->Option = $code->Option + 1;
                        $code->Save();
                        $led->Code = $this->txtCode->Text;
                    }
                    
                    $led->Name = $this->txtName->Text;
                    $led->Grp = $this->lstGrp->SelectedValue;
                    $led->Save();
                    
                    $param = "";
                    if(isset($_GET['page'])){
                        $param = "&page=".$_GET['page'];
                    }
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/ledger_edit.php?id='.$led->Idledger.'&tab=1'.$param);
                }
                
                protected function btnDelete_Click($strFormId, $strControlId, $strParameter) {
                    $led = Ledger::LoadByCode($this->txtCode->Text);
                    $address = Address::LoadByIdaddress($led->Idledger);
                    if($address)
                    $address->Delete();
                    $led->Delete();
                    //$this->mctLedger->DeleteLedger();
                    $this->RedirectToListPage();
		}
                
                protected function btnUpdate_Click($strFormId, $strControlId, $strParameter) {
	  	      $led = Ledger::LoadByCode($this->txtCode->Text);
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
                        
                        $param = "";
                        if(isset($_GET['page'])){
                            $param = "&page=".$_GET['page'];
                        }
                        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/ledger_edit.php?id='.$led->Idledger.'&tab=2'.$param);
		}
                protected function btnLogin_Click($strFormId, $strControlId, $strParameter) {    
                       $login = Login::LoadByIdlogin($_GET['id']);
                        if($login){
                           
                        }else{
                            $login = new Login();
                            $login->Idlogin = $_GET['id'];
                        }  
                        $login->Username =  $this->txtUserName->Text ;
                    	$login->Password = $this->txtPassword->Text ;
                    	//$login->Password = $this->txtConfirm->Text;
                        $login->IsEnabled = $this->chkIsEnabled->Checked;
                        $login->Save();
                      
                        $led = Ledger::LoadByIdledger($_GET['id']);                        
                        $param = "";
                        if(isset($_GET['page'])){
                            $param = "&page=".$_GET['page'];
                        }
                        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/ledger_edit.php?id='.$led->Idledger.'&tab=3'.$param);
		}
                
                protected function btnRemove_Click($strFormId, $strControlId, $strParameter) {
                    $led = Ledger::LoadByCode($this->txtCode->Text);
                    $address = Address::LoadByIdaddress($led->Idledger);
                    $address->Delete();
                    $param = "";
                    if(isset($_GET['page'])){
                        $param = "&page=".$_GET['page'];
                    }
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/ledger_edit.php?id='.$led->Idledger.'&tab=1'.$param);
		}
                
                protected function btnCancel_Click($strFormId, $strControlId, $strParameter) {                    
                    if(isset($_GET['page'])){
                        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/role_edit.php');
                    }else{
                        $this->RedirectToListPage();
                    }
                    //QApplication::ExecuteJavaScript("window.history.back()");
		}
                
                protected function btnNew_Click() {
                    $param = "";
                    if(isset($_GET['page'])){
                        $param = "&page=".$_GET['page'];
                    }
                    if(isset($_GET['hrole'])&&isset($_GET['grp'])){
                        if($param == ""){
                            $param = "&hrole=".$_GET['hrole']."&grp=".$_GET['grp'];
                                    
                        }else{
                            $param = $param."&hrole=".$_GET['hrole']."&grp=".$_GET['grp'];
                        }
                    }
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/ledger_edit.php?new=1'.$param);
		}
                
                public function btnList_Click($strFormId, $strControlId, $strParameter) {
                    $param = "";
                    if(isset($_GET['page'])){
                        $param = "?page=".$_GET['page'];                        
                    }
                    if(isset($_GET['hrole'])&&isset($_GET['grp'])){
                        if($param == ""){
                            $param = "?hrole=".$_GET['hrole']."&grp=".$_GET['grp'];
                                    
                        }else{
                            $param = $param."&hrole=".$_GET['hrole']."&grp=".$_GET['grp'];
                        }
                    }
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/ledger_edit.php'.$param);
                }
                
                protected function RedirectToListPage() {
                    $param = "";
                    if(isset($_GET['page'])){
                        $param = "?page=".$_GET['page'];
                    }
                    if(isset($_GET['hrole'])&&isset($_GET['grp'])){
                        if($param == ""){
                            $param = "?hrole=".$_GET['hrole']."&grp=".$_GET['grp'];
                                    
                        }else{
                            $param = $param."&hrole=".$_GET['hrole']."&grp=".$_GET['grp'];
                        }
                    }
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/ledger_edit.php'.$param);
                }
    }

LedgerEditForm::Run('LedgerEditForm');
?>