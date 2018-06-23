<?php
  require('../../qcubed.inc.php');
  
    class LedgerEditForm extends QForm {
               //ledger
               protected $txtCode;
               protected $txtName;
               protected $lstGrp;
               protected $txtMname;
               protected $btnSave;
               protected $btnCancel;
               protected $btnDelete;

               //address
                protected $txtPanno;
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
                protected $lstBank;
                protected $txtBankaccno;
                protected $txtBranch;
                protected $lstCast;
                protected $txtHeight;
                protected $lstBloodGroup;
                protected $txtBirthMark;
                protected $lstGender;
                protected $txtReligion;
                protected $caldob;

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
                protected $btnAddRole;
                
                protected $lstDepartment;
                protected $lstDesignation;
                protected $lblEdit;
                protected $lblLeaveEdit;
                protected $lblViewiframe;
                protected $lblViewLeaveiframe;

                protected $lblDelete;
                protected $txtCourse;
                protected $txtSchool;
                protected $txtYearOfPassing;
                protected $txtPercentage;
                protected $btnEstablishment;
                protected $txtRoleDept;
                protected $btnLoan;

                //rewords
                protected $txtrewards;
                protected $txtdetails;
                protected $dtgRewards;
                protected $btnRewordSave;
                protected $btnRewordDelete;
                
                protected function Form_Run() {
                    parent::Form_Run();
                    QApplication::CheckRemoteAdmin();
                }

        protected function Form_Create() {
            parent::Form_Create();
            
            $this->btnEstablishment = new QButton($this);
            $this->btnEstablishment->ButtonMode = QButtonMode::AddNew;
            $this->btnEstablishment->AddAction(new QClickEvent(), new QServerAction("btnEstablishment_Click"));
            
            
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
            //$this->lstGrp->AddAction(new QChangeEvent(), new QServerAction("lstGrp_Change"));    
            if(isset($_GET['grp'])){
                foreach ($grps as $grp){
                    if($grp->Code == 59){
                        $this->lstGrp->SelectedValue = $grp->Idledger;
                    }
                }
            }
            
            //new ledger
            $this->txtCode = new QTextBox($this);
            $this->txtName = new QTextBox($this);
            $this->txtMname = new QTextBox($this);
            
            $this->txtCode->Name = "Emp. Id";
            $this->txtName->Name = "Name";
            $this->txtName->Placeholder = "Title. First Middle Surname";
            $this->txtMname->Name = "Marathi Name";
            $this->txtCode->ReadOnly = TRUE;
            
            $this->btnSave = new QButton($this);
            $this->btnSave->Text = QApplication::Translate('Save');
            $this->btnSave->AddAction(new QClickEvent(), new QServerAction('btnSave_Click'));
            $this->btnSave->CausesValidation = true;

            $this->btnCancel = new QButton($this);
            $this->btnCancel->Text = QApplication::Translate('Cancel');
            $this->btnCancel->AddAction(new QClickEvent(), new QServerAction('btnCancel_Click'));

            $this->btnDelete = new QButton($this);
            $this->btnDelete->Text = QApplication::Translate('Delete');
            $this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(sprintf(QApplication::Translate('Are you SURE you want to DELETE this %s?'), QApplication::Translate('Employee, Data like salary & attendance will be deleted Too !!'))));
            $this->btnDelete->AddAction(new QClickEvent(), new QServerAction('btnDelete_Click'));
            $this->btnDelete->Visible = isset($_GET['emp']);
            
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
        
            $this->lblViewiframe = new QLabel($this);
            $this->lblViewiframe->HtmlEntities = FALSE;
            $this->lblViewiframe->Visible = FALSE;
            
            $this->lblViewLeaveiframe = new QLabel($this);
            $this->lblViewLeaveiframe->HtmlEntities = FALSE;
            $this->lblViewLeaveiframe->Visible = FALSE;
                     
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
                
                $this->txtBankaccno = new QTextBox($this);
                $this->txtBranch = new QTextBox($this);
                $this->lstBank = new QListBox($this);
                $banks = Ledger::LoadArrayByGrp(21);
                $this->lstBank->AddItem("-Select One-", NULL);
                foreach ($banks as $bank){
                    $this->lstBank->AddItem($bank->Name, $bank->Idledger);
                }
                $this->lstCast = new QSelect2ListBox($this);
                $this->lstCast->Name = "Caste";
                //$this->lstCast->Width = "87.5%";
                $casts = Cast::QueryArray(
                            QQ::AndCondition(
                                    QQ::NotEqual(QQN::Cast()->Parent, NULL)
                                )
                        );
                $this->lstCast->AddItem("-Select Caste-", NULL);
                foreach ($casts as $cast){
                    $this->lstCast->AddItem($cast->Name, $cast->Idcast);
                }
                $this->caldob = new QDateTimePicker($this);
                $this->caldob->Name = "DOB";
                $this->caldob->Width = 70;
                
                $this->txtReligion = new QTextBox($this);
                $this->txtReligion->Name = "Religion";
                $this->txtHeight = new QTextBox($this);        
                $this->txtHeight->Name = "Height";
                
                $this->lstBloodGroup = new QSelect2ListBox($this);
                $this->lstBloodGroup->Name = "Blood Group";
                $this->lstBloodGroup->AddItem("-Select Blood Group-",NULL);
                $bloodgrps = BloodGroup::LoadAll();
                foreach ($bloodgrps as $bloodgrp){
                    $this->lstBloodGroup->AddItem($bloodgrp->Name,$bloodgrp->IdbloodGroup);
                }
                
                $this->txtBirthMark = new QTextBox($this);
                $this->txtBirthMark->Name = "Birth Mark";
                
                $this->lstGender = new QListBox($this);
                $this->lstGender->Name = "Gender";
                $this->lstGender->AddItem("-Select-", NULL);
                $genders = Gender::LoadAll();
                foreach ($genders as $gender){
                    $this->lstGender->AddItem($gender->Name, $gender->Idgender);
                }
                
                $this->txtCourse = new QTextBox($this);
                $this->txtSchool = new QTextBox($this);
                $this->txtYearOfPassing = new QTextBox($this);
                $this->txtPercentage = new QTextBox($this);
                $this->txtPanno = new QTextBox($this);
                $this->txtPanno->Name = "PAN No.";
                $this->txtCourse->Placeholder = "Course";
                $this->txtSchool->Placeholder = "School/University";
                $this->txtYearOfPassing->Placeholder = "Year Of Passing";
                $this->txtPercentage->Placeholder = "Percentage";

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
                $this->txtWeb->Name = "Father's Name";
                $this->txtWeb->Placeholder = "Mr. First Middle Surname";
                $this->txtEmail1->Name = "E-Mail 1";
                $this->txtEmail2->Name = "E-Mail 2";
                $this->txtTinSalesTaxNo->Name = "Tin/Sales Tax No.";
                $this->txtCstNo->Name = "Educationals Qualifications";
                $this->lstBank->Name = "Bank";
                $this->txtBankaccno->Name = "Account No";  
                $this->txtBranch->Name = "Bank Branch";
                      
                 
                 //logins
                $this->txtUserName = new QTextBox($this);
                $this->txtPassword = new QTextBox($this);
                $this->txtConfirm = new QTextBox($this);
                $this->chkIsEnabled = new QCheckBox($this);
                
                $this->txtUserName->Name = "User Name";
                $this->txtPassword->TextMode = QTextMode::Password;
                $this->txtPassword->Name = "Password";
                $this->txtConfirm->Name = "Confirm Password";
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
                $this->dtgRole->AddColumn(new QDataGridColumn('Department', '<?= $_ITEM->DepartmentObject ?>'));
                $this->dtgRole->AddColumn(new QDataGridColumn('Active Role', '<?= $_ITEM->Active ?>'));
                
                $this->txtRole = new QSelect2ListBox($this);
                $roles = Role::LoadArrayByGrp(3);
                $this->txtRole->AddItem("-select Role-", NULL);
                $this->txtRole->Width = 200;
                foreach ($roles as $role) {
                    $this->txtRole->AddItem($role->Name, $role->Idrole);    
                }
                
                $this->txtRole->Placeholder = "Role";
                
                $this->txtRoleDept = new QSelect2ListBox($this);
                $roles = Role::LoadArrayByGrp(2);
                $this->txtRoleDept->AddItem("-select Department- ", NULL);
                $this->txtRoleDept->Width = 200;
                foreach ($roles as $role) {
                    $this->txtRoleDept->AddItem($role->Name, $role->Idrole);    
                }
                
                $this->txtRoleDept->Placeholder = "Department";
                
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
                   
//                //rewards
//                $this->dtgRewards = new QDataGrid($this);
//                $this->dtgRewards->CssClass = "datagrid";
//                $this->dtgRewards->ShowFilter = TRUE;
//                $this->dtgRewards->Paginator = new QPaginator($this->dtgRewards);
//                $this->dtgRewards->ItemsPerPage = 10;
//                $this->dtgRewards->SetDataBinder('dtgRewards_Bind');
               

                $this->txtrewards = new QTextBox($this);
                $this->txtrewards->Placeholder = "Rewards";
                $this->txtrewards->Name = "Reward";
                $this->txtrewards->Width = 200;   

                $this->txtdetails = new QTextBox($this);
                $this->txtdetails->Placeholder = "Details";
                $this->txtdetails->Name = "Details";
                $this->txtdetails->Width = 200;
                
                $this->btnRewordSave = new QButton($this);                    
                $this->btnRewordSave->ButtonMode = QButtonMode::Save;
                $this->btnRewordSave->AddAction(new QClickEvent(), new QServerAction('btnRewordSave_Click'));

                $this->btnRewordDelete = new QButton($this);
                $this->btnRewordDelete->ButtonMode = QButtonMode::Delete;
                $this->btnRewordDelete->AddAction(new QClickEvent(), new QServerAction('btnRewordDelete_Click'));
                $this->btnRewordDelete->Visible = FALSE;

                if(isset($_GET['reward'])){
                    $this->btnRewordDelete->Visible = TRUE; 
                    $reword = Reward::LoadByIdreward($_GET['reward']);
                    $this->txtrewards->Text = $reword->Remark;
                    $this->txtdetails->Text = $reword->Details;
                }
                
                
                //establishment
                if(isset($_GET['emp'])){
                    $this->lblViewiframe->Visible = TRUE;
                    $address = Address::LoadArrayByOf($_GET['emp']);
                    if($address){
                    foreach ($address as $addres){}
                    //$this->lblViewLeaveiframe->Visible = TRUE;
//                    $estabs = Establishment::QueryArray(
//                              QQ::AndCondition(
//                              QQ::Equal(QQN::Establishment()->Active, 1),
//                              QQ::Equal(QQN::Establishment()->Employee, $addres->Idaddress)        
//                                      ));
//                    if($estabs){
//                        foreach ($estabs as $estab){}
//                        $this->lblViewiframe->Text ='<div><iframe style="width: 100%;height: 763px;" frameborder="0"  src="'.__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/employee/establishment.php?estab='.$estab->Idestablishment.'&id='.$estab->Role.'"></iframe></div>';
//                  
//                    }else{
//                    $roles = LoginHasRole::LoadArrayByLoginIdlogin($_GET['emp']);
//                    if(!$roles){
//                    $this->lblViewiframe->Text ='<div><iframe style="width: 100%;height: 763px;" frameborder="0"  src="'.__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/employee/establishment.php?emp='.$_GET['emp'].'&role=new'.'"></iframe></div>';
//                    }else{
//                        foreach ($roles as $role){}    
//                    $this->lblViewiframe->Text ='<div><iframe style="width: 100%;height: 763px;" frameborder="0"  src="'.__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/employee/establishment.php?estab=new'.'&id='.$role->Id.'"></iframe></div>';
//                    }    
//                    }
                    }
                    $adds = Address::LoadArrayByOf($_GET['emp']);
                    if($adds){
                    foreach ($adds as $add){}
                    
//                    $ests = Establishment::LoadArrayByEmployee($add->Idaddress);
//                      foreach ($ests as $est){
//                        $this->lblEdit[$est->Idestablishment] = new QLabel($this);
//                        $this->lblEdit[$est->Idestablishment]->HtmlEntities = FALSE;
//                        $this->lblEdit[$est->Idestablishment]->Text = "<img src='".__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__."/edit.png' width = '15' height ='15'/> ";
//                        $this->lblEdit[$est->Idestablishment]->AddAction(new QClickEvent(), new QServerAction('lblEdit_Click'));
//                        $this->lblEdit[$est->Idestablishment]->ActionParameter = $est->Idestablishment;                                
                    
//                        $leaves = Leaves::LoadArrayByRefEstablishment($est->Idestablishment);    
//                            foreach($leaves as $leave){
//                                $this->lblLeaveEdit[$leave->Idleaves] = new QLabel($this);
//                                $this->lblLeaveEdit[$leave->Idleaves]->HtmlEntities = FALSE;
//                                $this->lblLeaveEdit[$leave->Idleaves]->Text = "<img src='".__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__."/edit.png' width = '15' height ='15'/> ";
//                                $this->lblLeaveEdit[$leave->Idleaves]->AddAction(new QClickEvent(), new QServerAction('lblLeaveEdit_Click'));
//                                $this->lblLeaveEdit[$leave->Idleaves]->ActionParameter = $leave->Idleaves;                                  
//                            }
                        //}
                    }
                        
                }
                
                    if(isset($_GET['emp'])){
                        $led = Ledger::LoadByIdledger($_GET['emp']);
                        $this->txtCode->Text = $led->Code;
                        $this->txtName->Text = $led->Name;
                        //$this->txtMname->Text = $led->Mname;
                        $this->lstGrp->SelectedValue = $led->Grp;
                        $this->btnSave->Text = "Update";
                        //address
                        $address = Address::LoadArrayByOf($_GET['emp']);
                        if($address){
                            foreach ($address as $addres){}
                        
                        //$this->lstCast->SelectedValue = $addres->;
                        $this->caldob->DateTime = $addres->Dob;
                        //$this->txtReligion->Text = $addres->Religion;
//                        $this->txtHeight->Text = $addres->Height;
//                        $this->lstBloodGroup->SelectedValue = $addres->BloodGroup;
//                        $this->txtBirthMark->Text = $addres->BirthMark;
//                        $this->lstGender->SelectedValue = $addres->Gender;
//                        $this->txtPanno->Text = $addres->PanNo;    
//                        $this->txtTitle->Text = $addres->Title;
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
//                        $this->lstBank->SelectedValue = $addres->Bank;
//                        $this->txtBankaccno->Text = $addres->BankAccountNo;
//                        $this->txtBranch->Text = $addres->BankBranch;
                       
                    }
                    //login
                        $login = Login::LoadByIdlogin($_GET['emp']);
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
                        $this->txtRoleDept->SelectedValue = $loginhasrole->Department;
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
                protected function lblEdit_Click($strFormId, $strControlId, $strParameter){
//                    $_GET['tab'] = 5;
//                    $estab = Establishment::LoadByIdestablishment($strParameter);
//                    $this->lblViewiframe->Text ='<div><iframe style="width: 100%;height: 763px;" frameborder="0"  src="'.__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/employee/establishment.php?estab='.$strParameter.'&id='.$estab->Role.'"></iframe></div>';
                }
                protected function lblLeaveEdit_Click($strFormId, $strControlId, $strParameter){
                    $_GET['tab'] = 7;
                    $this->lblViewLeaveiframe->Text ='<div><iframe style="width: 100%;height: 763px;" frameborder="0"  src="'.__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/establishment/leaves_edit.php/'.$strParameter.'?emp='.$_GET['emp'].'"></iframe></div>';
                }
                
                protected function btnEstablishment_Click(){
                    $_GET['tab'] = 5;
                    
                   $roles = LoginHasRole::LoadArrayByLoginIdlogin($_GET['emp']);
                    if($roles){                        foreach ($roles as $role){}
                    $this->lblViewiframe->Text ='<div><iframe style="width: 100%;height: 763px;" frameborder="0"  src="'.__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/employee/establishment.php?estab=new'.'&id='.$role->Id.'"></iframe></div>';
                    }else{
                    $this->lblViewiframe->Text ='<div><iframe style="width: 100%;height: 763px;" frameborder="0"  src="'.__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/employee/establishment.php?emp='.$_GET['emp'].'"></iframe></div>';
                    } 
                }
                
              
                protected function btnSave_Click($strFormId, $strControlId, $strParameter) {
                    if(!isset($_GET['emp'])){
                        $code = Settings::LoadByIdsettings(2);
                        $this->txtCode->Text = $code->Option;
                        $code->Option = $code->Option + 1;
                        $code->Save();
                        $Ledger = new Ledger();
                    }else{
                        $Ledger = Ledger::LoadByIdledger($_GET['emp']);
                    }
                        $Ledger->Code = $this->txtCode->Text;
                        $Ledger->Name = $this->txtName->Text;
                        $Ledger->Grp = $this->lstGrp->SelectedValue;
                        $Ledger->Mname = $this->txtMname->Text;
                        $Ledger->Save();
                        
                    $Ledger = Ledger::LoadByCode($this->txtCode->Text);
                    
                    $param = "";
                    if(isset($_GET['page'])){
                        $param = "&page=".$_GET['page'];
                    }
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/employee/ledger_edit.php?emp='.$Ledger->Idledger.'&tab=1'.$param);
                }
                
                protected function btnDelete_Click($strFormId, $strControlId, $strParameter) {
			$ledger = Ledger::LoadByCode($this->txtCode->Text);
                        $atts = Attendance::LoadArrayByStaff($ledger->Idledger);
                        if($atts ){
                            foreach ($atts as $att){
                                $att->Delete();
                            }
                        }
                        $loans = BankLoan::LoadArrayByEmployee($ledger->Idledger);
                        if($loans){
                            foreach ($loans as $loan){
                                $loan->Delete();
                            }
                        }
                        $address = Address::LoadArrayByOf($ledger->Idledger);
                        if($address){
                        foreach ($address as $addres){
                            
                                    $templates = SalaryTemplet::LoadArrayByEmployee($addres->Idaddress);
                                    if($templates){
                                    foreach ( $templates as  $template){
                                        $template->Establishment = NULL;
                                        $template->Save();
                                        $shcs = SalaryHead::LoadArrayBySalaryTemplet($template->IdsalaryTemplet);
                                        if($shcs){
                                            foreach ($shcs as $shc){
                                        $payslabs = PaySlabs::LoadArrayBySalaryhead($shc->IdsalaryHead);
                                        if($payslabs){
                                            foreach ($payslabs as $payslab){
                                                $payslab->Delete();
                                            }
                                        }
                                        //delete calculation
                                        $cals = Calculation::LoadArrayBySalaryHead($shc->IdsalaryHead);
                                        if ($cals){
                                            foreach ($cals as $cal){
                                               $cal->Delete(); 
                                        }
                                        }
                                        //based calculations
                                        $basecalcs = Calculation::QueryArray(
                                                     QQ::OrCondition(
                                                     QQ::Equal(QQN::Calculation()->SalaryHead1, $shc->IdsalaryHead),
                                                     QQ::Equal(QQN::Calculation()->SalaryHead2, $shc->IdsalaryHead)        
                                                             ));
                                        if($basecalcs){
                                            foreach ($basecalcs as $basecalc){
                                                $basecalc->Delete();
                                            }

                                        }
                                       //empty based on
                                        $baseds = SalaryHead::LoadArrayByBasedSalaryHead($shc->IdsalaryHead);
                                        if($baseds){
                                            foreach ($baseds as $based){
                                                $based->BasedSalaryHead = NULL;
                                                $based->Save();
                                            }
                                        }
                                        $shc->Delete();
                                            }
                                        }
                                         //$template->Delete();
                                    }
                                   
                                    }
                                    $empsalarys = SalarysheetHasEmployee::LoadArrayByEmployee($addres->Idaddress);
                                    foreach ($empsalarys as $empsalary){
                                        $gensals = GeneratedSalary::LoadArrayByReference($empsalary->IdsalarysheetHasEmployee);
                                        foreach ($gensals as $gensal){
                                            $gensal->Delete();
                                        }
                                        $empsalary->Delete();
                                    }
                                    
                                }
                        }
                          
                        QApplication::DisplayAlert("Delete1");
                        $this->Delete2();
		}
                protected function Delete2(){
                    $ledger = Ledger::LoadByCode($this->txtCode->Text);
                        $address = Address::LoadArrayByOf($ledger->Idledger);
                        if($address){
                        foreach ($address as $addres){
                             $templates = SalaryTemplet::LoadArrayByEmployee($addres->Idaddress);
                                    if($templates){
                                    foreach ( $templates as  $template){
                                        $template->Delete();
                                    }
                                    }
//                            $estabs = Establishment::LoadArrayByEmployee($addres->Idaddress);
//                            if($estabs ){
//                                foreach ($estabs as $estab){
//                                     
//                                    $estab->Delete();
//                                }
//                            }
                           
                        }
                        }
                    $roles = LoginHasRole::LoadArrayByLoginIdlogin($ledger->Idledger);
                    if($roles){
                        foreach ($roles as $role){
                            $role->Delete();
                        }
                    }
                    QApplication::DisplayAlert("Delete2");
                    $this->Delete3();
                }
                protected function Delete3(){
                      $ledger = Ledger::LoadByCode($this->txtCode->Text);
                        $address = Address::LoadArrayByOf($ledger->Idledger);
                        if($address){
                        foreach ($address as $addres){
                            $addres->Delete();
                        }
                        }
                        $login = Login::LoadByIdlogin($ledger->Idledger);
                        if($login){
                            $login->Delete();
                        }
                        $ledger->Delete();
                        QApplication::DisplayAlert("Employee Deleted Succesfully");
                        $this->btnList_Click();
                }
                
                protected function btnUpdate_Click($strFormId, $strControlId, $strParameter) {
	  	      
                      $led = Ledger::LoadByIdledger($_GET['emp']);
                      $address = Address::LoadArrayByOf($led->Idledger);
                      if($address){
                          foreach ($address as $addres){}
                      }else{
                        $addres = new Address();
                      }
                        $addres->Caste = $this->lstCast->SelectedValue;
                        $addres->Dob = $this->caldob->DateTime;
                        $addres->Religion = $this->txtReligion->Text;
                        $addres->Height = $this->txtHeight->Text;
                        $addres->BloodGroup = $this->lstBloodGroup->SelectedValue;
                        $addres->BirthMark = $this->txtBirthMark->Text;
                        $addres->Gender = $this->lstGender->SelectedValue;
                        $addres->Of = $led->Idledger;
                        $addres->Title = $this->txtTitle->Text;
                    	$addres->AddressLine1 = $this->txtAddressLine1->Text;
                    	$addres->AddressLine2 = $this->txtAddressLine2->Text;
                    	$addres->Country = $this->txtCountry->SelectedValue;
                    	$addres->State = $this->txtState->SelectedValue;
                    	$addres->District = $this->txtDistrict->SelectedValue;
                        $addres->Taluka = $this->txtTaluka->SelectedValue;
                    	$addres->City = $this->txtCity->Text;
                        $addres->PanNo = $this->txtPanno->Text;
                    	$addres->ZipCode = $this->txtZipCode->Text;
                    	$addres->Contact1 = $this->txtContact1->Text;
                    	$addres->Contact2 = $this->txtContact2->Text;
                        $addres->Web = $this->txtWeb->Text;
                    	$addres->Email1 = $this->txtEmail1->Text;
                        $addres->Email2 = $this->txtEmail2->Text;
                    	$addres->TinSalesTaxNo = $this->txtTinSalesTaxNo->Text;
                    	$addres->CstNo = $this->txtCstNo->Text;
                        $addres->Bank = $this->lstBank->SelectedValue;
                        $addres->BankAccountNo = $this->txtBankaccno->Text;
                        $addres->BankBranch = $this->txtBranch->Text;
                    	$addres->Save();
                        $led = Ledger::LoadByIdledger($_GET['emp']);
                        $param = "";
                        if(isset($_GET['page'])){
                            $param = "&page=".$_GET['page'];
                        }
                        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/employee/ledger_edit.php?emp='.$led->Idledger.'&tab=3'.$param);
		}
                protected function btnLogin_Click($strFormId, $strControlId, $strParameter) {    
                       $login = Login::LoadByIdlogin($_GET['emp']);
                        if($login){
                           
                        }else{
                            $login = new Login();
                            $login->Idlogin = $_GET['emp'];
                        }  
                        $login->Username =  $this->txtUserName->Text ;
                    	$login->Password = $this->txtPassword->Text ;
                    	//$login->Password = $this->txtConfirm->Text;
                        $login->IsEnabled = $this->chkIsEnabled->Checked;
                        $login->Save();
                      
                        $led = Ledger::LoadByIdledger($_GET['emp']);                        
                        $param = "";
                        if(isset($_GET['page'])){
                            $param = "&page=".$_GET['page'];
                        }
                        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/employee/ledger_edit.php?emp='.$led->Idledger.'&tab=5'.$param);
		}
                
                protected function btnRemove_Click($strFormId, $strControlId, $strParameter) {
                    $led = Ledger::LoadByCode($this->txtCode->Text);
                    $address = Address::LoadByIdaddress($led->Idledger);
                    $address->Delete();
                    $param = "";
                    if(isset($_GET['page'])){
                        $param = "&page=".$_GET['page'];
                    }
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/employee/ledger_edit.php?emp='.$led->Idledger.'&tab=1'.$param);
		}
                
                protected function btnCancel_Click($strFormId, $strControlId, $strParameter) {                    
                    if(isset($_GET['page'])){
                        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/role_edit.php');
                    }else{
                        $this->RedirectToListPage();
                    }
                    //QApplication::ExecuteJavaScript("window.history.back()");
		}
                 protected function dtgRewards_Bind(){  
                     if(isset($_GET['emp'])){
                     $estab = Establishment::LoadArrayByEmployee($_GET['emp']);
                    if($estab)
                        foreach ($estab as $esta){
                    $this->dtgRewards->TotalItemCount = Reward::QueryCount(
                            QQ::AndCondition(                                    
                                    $this->dtgRewards->Conditions,
                                    QQ::Equal(QQN::Reward()->RefEstablishement, $esta->Idestablishment)
                                    ));

                    $data = Reward::QueryArray(
                                QQ::AndCondition(
                                    $this->dtgRewards->Conditions,
                                   QQ::Equal(QQN::Reward()->RefEstablishement, $esta->Idestablishment)
                                    ),
                    QQ::Clause(
                            QQ::OrderBy(QQN::Reward()->Idreward, TRUE),
                            $this->dtgRewards->LimitClause
                    ));

                    $this->dtgRewards->DataSource = $data;        
                        }
                     }
                }
                 protected function btnRewordSave_Click(){
                    $estab = Establishment::LoadArrayByEmployee($_GET['emp']);
                    if($estab)
                        foreach ($estab as $esta){}
                    if($this->txtrewards->Text != "" && $this->txtdetails->Text != ""){
                        if(isset($_GET['reward'])){
                            $reword = Reward::LoadByIdreward($_GET['reward']);
                        }else{
                            $reword = new Reward();
                        }

                        $reword->Remark = $this->txtrewards->Text;
                        $reword->Details = $this->txtdetails->Text;
                        $reword->RefEstablishement = $esta->Idestablishment;
                        $reword->Save();
                        QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/employee/ledger_edit.php?emp='.$esta->Employee.'&tab=6');
                    }                    
                }

                protected function btnRewordDelete_Click(){
                    $estab = Establishment::LoadArrayByEmployee($_GET['emp']);
                    if($estab)
                        foreach ($estab as $esta){}
                    if(isset($_GET['reward'])){
                        $reword = Reward::LoadByIdreward($_GET['reward']);
                        $reword->Delete();
                        QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/employee/ledger_edit.php?emp='.$esta->Employee.'&tab=6');
                    }
                }
                public function dtgproassetRow_Click() {
                    $estab = Establishment::LoadArrayByEmployee($_GET['emp']);
                    if($estab)
                        foreach ($estab as $esta){}
                        $reward = Reward::LoadArrayByRefEstablishement($esta->Idestablishment);
                        if($reward)
                            foreach($reward as $rewards){}
                     QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/employee/ledger_edit.php?emp='.$esta->Employee.'&tab=6&reward='.$rewards->Idreward);
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
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/employee/ledger_edit.php?new=1'.$param);
		}
                
                public function btnList_Click() {
                    
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/employee/employee_list.php');
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
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/employee/ledger_edit.php?emp='.$param);
                }
    }

LedgerEditForm::Run('LedgerEditForm');
?>