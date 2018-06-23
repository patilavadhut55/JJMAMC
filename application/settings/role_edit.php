<?php
    // Load the QCubed Development Framework
    require('../../qcubed.inc.php');

    require(__FORMBASE_CLASSES__ . '/RoleEditFormBase.class.php');

    class RoleEditForm extends RoleEditFormBase {
            // Override Form Event Handlers as Needed
            protected $btnList;
            protected $dtgRoles;

            protected $txtGrpName;
            protected $txtGrpDescription;
            protected $dtgGroup;

            protected $btnGrpSave;
            protected $btnGrpDelete;
            protected $btnGrpNew;
            
            //menus
            protected $lstMenu;
            protected $txtPermision;
            protected $txtlevel;
            protected $lstParrent;
            protected $btnAdd;
            protected $btnNew;
            protected $lbldels;
            protected $lblUp;
            protected $lblDown;
            protected $count;

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
            protected $btnRemove;
            protected $txtSeqarr;
          
            protected $btnAddLink;
            protected $lblEdit;
            protected $Code;
            protected $txtcollegeCode;
            protected function Form_Run() {
                    parent::Form_Run();

                    // Security check for ALLOW_REMOTE_ADMIN
                    // To allow access REGARDLESS of ALLOW_REMOTE_ADMIN, simply remove the line below
                    QApplication::CheckRemoteAdmin();
            }

//		protected function Form_Load() {}

            protected function Form_Create() {
                parent::Form_Create();
               
                if(isset($_GET['parrent'])){
                    $this->lstParrentObject->SelectedValue = $_GET['parrent'];
                }
               
                $this->txtCode->Name = "Seq";
                $this->txtCode->Width = 50;        
                $this->txtServiceYears->Name = "Age Of Retirment";
                $this->txtCount->Name = "Person Count";
                //Followig code for hierarchy
                //-----------------------------------------------------------------------------//
                $orgs = Role::LoadArrayByGrp(1);                   
                    foreach ($orgs as $org){
                        $this->lblEdit[$org->Idrole] = new QLabel($this);
                        $this->lblEdit[$org->Idrole]->HtmlEntities = FALSE;
                        $this->lblEdit[$org->Idrole]->Text = "<i class='fa fa-pencil'></i>";
                        $this->lblEdit[$org->Idrole]->AddAction(new QClickEvent(), new QServerAction("lblEdit_Click"));
                        $this->lblEdit[$org->Idrole]->ActionParameter = $org->Idrole;
                        
                        $this->txtcollegeCode[$org->Idrole] = new QTextBox($this);
                        $this->txtcollegeCode[$org->Idrole]->Width = 30;
                        $this->txtcollegeCode[$org->Idrole]->Text = $org->Code;
                        $this->txtcollegeCode[$org->Idrole]->AddAction(new QEnterKeyEvent(), new QAjaxAction('txtcollegeCode_Enter'));
                        $this->txtcollegeCode[$org->Idrole]->ActionParameter = $org->Idrole;
                        
                        
                        $this->btnAddLink[$org->Idrole] = new QButton($this);
                        $this->btnAddLink[$org->Idrole]->ButtonMode = QButtonMode::Link;
                        $this->btnAddLink[$org->Idrole]->Text = "Add";
                        $this->btnAddLink[$org->Idrole]->AddAction(new QClickEvent(), new QServerAction("btnAddLink_Click"));
                        $this->btnAddLink[$org->Idrole]->ActionParameter = $org->Idrole.' '.'0';
                        
                        $objs = Role::LoadArrayByParrent($org->Idrole, QQ::OrderBy(QQN::Role()->Grp));
                        foreach ($objs as $obj){
                            $this->lblEdit[$obj->Idrole] = new QLabel($this);
                            $this->lblEdit[$obj->Idrole]->HtmlEntities = FALSE;
                            $this->lblEdit[$obj->Idrole]->Text = "<i class='fa fa-pencil'></i>";
                            $this->lblEdit[$obj->Idrole]->AddAction(new QClickEvent(), new QServerAction("lblEdit_Click"));
                            $this->lblEdit[$obj->Idrole]->ActionParameter = $obj->Idrole;
                            
                            $this->Code[$obj->Idrole] = new QTextBox($this);
                            $this->Code[$obj->Idrole]->Width = 30;
                            $this->Code[$obj->Idrole]->AddAction(new QEnterKeyEvent(), new QAjaxAction('Code_Save'));
                            $this->Code[$obj->Idrole]->ActionParameter = $obj->Idrole;
                            $this->Code[$obj->Idrole]->Text = $obj->Code;
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
                                $this->lblEdit[$subobj->Idrole] = new QLabel($this);
                                $this->lblEdit[$subobj->Idrole]->HtmlEntities = FALSE;
                                $this->lblEdit[$subobj->Idrole]->Text = "<i class='fa fa-pencil'></i>";
                                $this->lblEdit[$subobj->Idrole]->AddAction(new QClickEvent(), new QServerAction("lblEdit_Click"));
                                $this->lblEdit[$subobj->Idrole]->ActionParameter = $subobj->Idrole;                                
                                $this->Code[$subobj->Idrole] = new QTextBox($this);
                                $this->Code[$subobj->Idrole]->Width = 30;
                                $this->Code[$subobj->Idrole]->Text = $subobj->Code;
                                $this->Code[$subobj->Idrole]->AddAction(new QEnterKeyEvent(), new QAjaxAction('Code_Save'));
                                $this->Code[$subobj->Idrole]->ActionParameter = $subobj->Idrole;
                            
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
                                    $this->lblEdit[$subobj1->Idrole] = new QLabel($this);
                                    $this->lblEdit[$subobj1->Idrole]->HtmlEntities = FALSE;
                                    $this->lblEdit[$subobj1->Idrole]->Text = "<i class='fa fa-pencil'></i>";
                                    $this->lblEdit[$subobj1->Idrole]->AddAction(new QClickEvent(), new QServerAction("lblEdit_Click"));
                                    $this->lblEdit[$subobj1->Idrole]->ActionParameter = $subobj1->Idrole;                                
                                    
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
                                        $this->lblEdit[$subobj2->Idrole] = new QLabel($this);
                                        $this->lblEdit[$subobj2->Idrole]->HtmlEntities = FALSE;
                                        $this->lblEdit[$subobj2->Idrole]->Text = "<i class='fa fa-pencil'></i>";
                                        $this->lblEdit[$subobj2->Idrole]->AddAction(new QClickEvent(), new QServerAction("lblEdit_Click"));
                                        $this->lblEdit[$subobj2->Idrole]->ActionParameter = $subobj2->Idrole;                                

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
                                            $this->lblEdit[$subobj3->Idrole] = new QLabel($this);
                                            $this->lblEdit[$subobj3->Idrole]->HtmlEntities = FALSE;
                                            $this->lblEdit[$subobj3->Idrole]->Text = "<i class='fa fa-pencil'></i>";
                                            $this->lblEdit[$subobj3->Idrole]->AddAction(new QClickEvent(), new QServerAction("lblEdit_Click"));
                                            $this->lblEdit[$subobj3->Idrole]->ActionParameter = $subobj3->Idrole;                                

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
                
                
                //-----------------------------------------------------------------------------//
                $this->btnSave->ButtonMode = QButtonMode::Save;
                $this->btnCancel->ButtonMode = QButtonMode::Cancel;
                $this->btnDelete->ButtonMode = QButtonMode::Delete;

                $this->lstParrentObject->Name = "Under";
                if(isset($_GET['dept'])){
                    $this->lstParrentObject->SelectedValue = $_GET['dept'];
                }
                $this->lstGrpObject->Name = "Group";
                $this->txtMname->Name = "Marathi Name";
                
               // $this->txtName->AddAction(new QChangeEvent(),new QAjaxAction("txtName_Change"));
               // $this->txtName->AddAction(new QFocusOutEvent(),new QAjaxAction("txtName_Change"));
                
                
                $this->dtgRoles = new RoleDataGrid($this);
                $this->dtgRoles->CssClass = 'datagrid';
                $this->dtgRoles->AlternateRowStyle->CssClass = 'alternate';

                $this->dtgRoles->Paginator = new QPaginator($this->dtgRoles);
                $this->dtgRoles->ItemsPerPage = __FORM_DRAFTS_FORM_LIST_ITEMS_PER_PAGE__;
                $this->dtgRoles->AddColumn(new QDataGridColumn('Sr', '<?= ($_CONTROL->CurrentRowIndex + 1) ?>', 'Width=50'));
                $this->dtgRoles->MetaAddColumn('Name');
                $this->dtgRoles->MetaAddColumn('Description');

                $this->dtgRoles->AddColumn(new QDataGridColumn('Parent', '<?= $_ITEM->ParrentObject ?>', 'Width=300'));
                
                $this->dtgRoles->RowActionParameterHtml = '<?= $_ITEM->Idrole ?>';
                $this->dtgRoles->AddRowAction(new QClickEvent(), new QServerAction('dtgproassetRow_Click'));

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

                $this->btnUpdate = new QButton($this);
                $this->btnUpdate->ButtonMode = QButtonMode::Save;
                $this->btnUpdate->AddAction(new QClickEvent(), new QServerAction("btnUpdate_Click"));

                $this->btnRemove = new QButton($this);
                $this->btnRemove->ButtonMode = QButtonMode::Delete;
                $this->btnRemove->AddAction(new QClickEvent(), new QServerAction("btnRemove_Click"));

                /* code for group tab */
                //------------------------------------------------------------------
                $this->txtGrpName = new QTextBox($this);
                $this->txtGrpName->Placeholder = "Name";

                $this->txtGrpDescription = new QTextBox($this);
                $this->txtGrpDescription->Placeholder = "Description";

                $this->btnGrpSave = new QButton($this);
                $this->btnGrpSave->ButtonMode = QButtonMode::Add;
                $this->btnGrpSave->AddAction(new QClickEvent(), new QServerAction("btnGrpSave_Click"));

                $this->btnGrpDelete = new QButton($this);
                $this->btnGrpDelete->ButtonMode = QButtonMode::Delete;
                $this->btnGrpDelete->Visible = FALSE;
                $this->btnGrpDelete->AddAction(new QClickEvent(), new QServerAction("btnGrpDelete_Click"));

                $this->btnGrpNew = new QButton($this);
                $this->btnGrpNew->Text = "Role";
                $this->btnGrpNew->ButtonMode = QButtonMode::Success;
                $this->btnGrpNew->AddAction(new QClickEvent(), new QServerAction("btnGrpNew_Click"));                    


                $this->dtgGroup = new QDataGrid($this);
                $this->dtgGroup->CssClass = "datagrid";
                $this->dtgGroup->ShowFilter = TRUE;

                $this->dtgGroup->Paginator = new QPaginator($this->dtgGroup);
                $this->dtgGroup->ItemsPerPage = 20;
                $this->dtgGroup->AddColumn(new QDataGridColumn('Sr', '<?= ($_CONTROL->CurrentRowIndex + 1) ?>', 'Width=3'));
                $Name = new QDataGridColumn('Name', '<?= $_ITEM->Name ?>', 'Width=200',
                                    array(
                                            'OrderByClause' => QQ::OrderBy(QQN::Group()->Name),
                                            'ReverseOrderByClause' => QQ::OrderBy(QQN::Group()->Name, false)));

                $Name->Filter = QQ::Like(QQN::Group()->Name, null);
                $Name->FilterPostfix = $Name->FilterPrefix = '%';
                $Name->FilterType = QFilterType::TextFilter;
                $this->dtgGroup->AddColumn($Name);

                $this->dtgGroup->AddColumn(new QDataGridColumn('Description', '<?= $_ITEM->Description ?>', 'Width=300'));

                $this->dtgGroup->SetDataBinder('dtgGroup_Bind');

                $this->dtgGroup->RowActionParameterHtml = '<?= $_ITEM->Idgroup ?>';
                $this->dtgGroup->AddRowAction(new QClickEvent(), new QAjaxAction('dtgGroupRow_Click'));

                $this->lstParrentObject->AddAction(new QChangeEvent(), new QAjaxAction("lstParrentObject_Click"));
                
                if(isset($_GET['id'])){
                    $this->btnGrpDelete->Visible = TRUE;   
                    $grp = Group::LoadByIdgroup($_GET['id']);
                    $this->txtGrpName->Text = $grp->Name;
                    $this->txtGrpDescription->Text = $grp->Description;
                    $this->btnGrpSave->ActionParameter = $_GET['id'];
                }
                
                /* ------------------------------------------------------ */
                
                if($this->mctRole->EditMode == TRUE){
                    $this->btnSave->Text = "Update";
                    $this->count = 0;
                    $mnuhasroles = RoleHasMenu::LoadArrayByRoleIdrole($this->lblIdrole->Text);
                    foreach ($mnuhasroles as $mnuhasrole){
                        $this->count = $this->count + 1;
                        $this->lbldels[$mnuhasrole->RoleIdrole.$mnuhasrole->MenuIdmenu] = new QButton($this);
                        $this->lbldels[$mnuhasrole->RoleIdrole.$mnuhasrole->MenuIdmenu]->ButtonMode = QButtonMode::Remove;

                        $this->lbldels[$mnuhasrole->RoleIdrole.$mnuhasrole->MenuIdmenu]->AddAction(new QClickEvent(), new QServerAction("lbldels_Click"));
                        $this->lbldels[$mnuhasrole->RoleIdrole.$mnuhasrole->MenuIdmenu]->ActionParameter = $mnuhasrole->RoleIdrole.' '.$mnuhasrole->MenuIdmenu;

                        $this->lblUp[$mnuhasrole->RoleIdrole.$mnuhasrole->MenuIdmenu] = new QLabel($this);
                        $this->lblUp[$mnuhasrole->RoleIdrole.$mnuhasrole->MenuIdmenu]->HtmlEntities = FALSE; 
                        $this->lblUp[$mnuhasrole->RoleIdrole.$mnuhasrole->MenuIdmenu]->Text = "<i class='fa fa-chevron-circle-up fa-fw'></i>";
                        $this->lblUp[$mnuhasrole->RoleIdrole.$mnuhasrole->MenuIdmenu]->AddAction(new QClickEvent(), new QServerAction("lblUp_Click"));
                        $this->lblUp[$mnuhasrole->RoleIdrole.$mnuhasrole->MenuIdmenu]->ActionParameter = $mnuhasrole->RoleIdrole.' '.$mnuhasrole->MenuIdmenu.' '.$mnuhasrole->Seq;

                        $this->lblDown[$mnuhasrole->RoleIdrole.$mnuhasrole->MenuIdmenu] = new QLabel($this);
                        $this->lblDown[$mnuhasrole->RoleIdrole.$mnuhasrole->MenuIdmenu]->HtmlEntities = FALSE; 
                        $this->lblDown[$mnuhasrole->RoleIdrole.$mnuhasrole->MenuIdmenu]->Text = "<i class='fa fa-chevron-circle-down fa-fw'></i>";
                        $this->lblDown[$mnuhasrole->RoleIdrole.$mnuhasrole->MenuIdmenu]->AddAction(new QClickEvent(), new QServerAction("lblDown_Click"));
                        $this->lblDown[$mnuhasrole->RoleIdrole.$mnuhasrole->MenuIdmenu]->ActionParameter = $mnuhasrole->RoleIdrole.' '.$mnuhasrole->MenuIdmenu.' '.$mnuhasrole->Seq;

                        $this->txtSeqarr[$mnuhasrole->RoleIdrole.$mnuhasrole->MenuIdmenu] = new QTextBox($this);
                        $this->txtSeqarr[$mnuhasrole->RoleIdrole.$mnuhasrole->MenuIdmenu]->Text = $mnuhasrole->Seq;                            
                        $this->txtSeqarr[$mnuhasrole->RoleIdrole.$mnuhasrole->MenuIdmenu]->AddAction(new QEnterKeyEvent(), new QServerAction("txtSeqarr_Enter"));
                        $this->txtSeqarr[$mnuhasrole->RoleIdrole.$mnuhasrole->MenuIdmenu]->ActionParameter = $mnuhasrole->RoleIdrole.' '.$mnuhasrole->MenuIdmenu;
                        $this->txtSeqarr[$mnuhasrole->RoleIdrole.$mnuhasrole->MenuIdmenu]->Width = 30;
                        $this->txtSeqarr[$mnuhasrole->RoleIdrole.$mnuhasrole->MenuIdmenu]->Height = 20;
                    }  

                    //address
                    $address = Address::LoadArrayByRoll($this->lblIdrole->Text);
                    if($address){
                        foreach ($address as $addres){}

                    //$this->txtTitle->Text = $addres->Title;
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
                    //$this->txtWeb->Text = $addres->Web;
                    $this->txtEmail1->Text = $addres->Email1;
                    $this->txtEmail2->Text = $addres->Email2;
                    $this->txtTinSalesTaxNo->Text = $addres->TinSalesTaxNo;
                    $this->txtCstNo->Text = $addres->CstNo;
                    }
                    
                }else{
                    if($this->lstParrentObject->SelectedValue != NULL){
                        $role = Role::LoadByIdrole($this->lstParrentObject->SelectedValue);
                        $this->txtName->Text = " [".$role->ShortName."]";
                    }
                }

                //$this->btnNew->Visible = FALSE;

            }
            //save function of code of college
            
            protected function txtName_Change(){
                if($this->txtName->Text != ""){                    
                    $data = explode("[", $this->txtName->Text);
                    $str = "";
                    foreach($data as $dt){
                        
                        if($dt){
                            $subdata = explode(" ", $dt);
                            foreach($subdata as $subdt){                    
                                if($subdt){
                                    if($str == ""){
                                        $str .= ucwords($subdt[0]);     
                                    }else{
                                        $str .= " ".ucwords($subdt[0]);     
                                    }
                                    
                                }
                            }
                        }
                    }
                    $this->txtShortName->Text = $str;
                }
            }

            protected function lstParrentObject_Click(){
                if($this->lstParrentObject->SelectedValue != NULL){
                    $role = Role::LoadByIdrole($this->lstParrentObject->SelectedValue);
                    $this->txtName->Text = " [".$role->ShortName."]";
                }
            }

            protected function txtcollegeCode_Enter($strFormId, $strControlId, $strParameter){
                $role = Role::LoadByIdrole($strParameter);
                $role->Code = $this->txtcollegeCode[$strParameter]->Text;
                $role->Save();
            }
            protected function Code_Save($strFormId, $strControlId, $strParameter){
                $role = Role::LoadByIdrole($strParameter);
                $role->Code = $this->Code[$strParameter]->Text;
                $role->Save();
            }

            protected function lblEdit_Click($strFormId, $strControlId, $strParameter){
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/role_edit.php/'.$strParameter);
            }
            
            protected function btnAddLink_Click($strFormId, $strControlId, $strParameter){
                $param = explode(' ', $strParameter);
                if($param[1] == 0){
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/role_edit.php?new=1&dept='.$param[0]);
                }else {
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/employee/employee_list.php?dept='.$param[0]);
                }
            }
            
            public function dtgproassetRow_Click($strFormId, $strControlId, $strParameter) {
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/role_edit.php/'.$strParameter);
            }

            protected function txtSeqarr_Enter($strFormId, $strControlId, $strParameter){
                $data = explode(' ', $strParameter);
                $role = RoleHasMenu::LoadByRoleIdroleMenuIdmenu($data[0],$data[1]);
                $role->Seq = $this->txtSeqarr[$data[0].$data[1]]->Text;
                $role->Save();
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/role_edit.php/'.$this->lblIdrole->Text.'?tab=2#2');                   
            }

            protected function lbldels_Click($strFormId, $strControlId, $strParameter) {
                $data = explode(' ', $strParameter);
                $role = RoleHasMenu::LoadByRoleIdroleMenuIdmenu($data[0],$data[1]);
                $role->Delete();
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/role_edit.php/'.$this->lblIdrole->Text.'?tab=2#2');
            }

            protected function lblUp_Click($strFormId, $strControlId, $strParameter){
                $data = explode(' ', $strParameter);
                if($data[2] != "1"){
                   $seq = $data[2]-1;
                    $rolehasmenu = RoleHasMenu::QueryArray(
                                QQ::AndCondition(
                                QQ::Equal(QQN::RoleHasMenu()->RoleIdrole, $data[0]),
                                QQ::Equal(QQN::RoleHasMenu()->Seq, $seq)                                            
                                        )
                                );
                    if($rolehasmenu){
                       $rolehasmenu[0]->Seq = $seq + 1;
                       $rolehasmenu[0]->Save();
                    }
                    $rolehasmenu = RoleHasMenu::LoadByRoleIdroleMenuIdmenu($data[0], $data[1]);
                    $rolehasmenu->Seq = $seq;
                    $rolehasmenu->Save();                                               
                }
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/role_edit.php/'.$this->lblIdrole->Text.'?tab=2#2');
            }

            protected function lblDown_Click($strFormId, $strControlId, $strParameter){
                $data = explode(' ', $strParameter);

                if($data[2] != $this->count){
                   $seq = $data[2]+1;
                    $rolehasmenu = RoleHasMenu::QueryArray(
                                QQ::AndCondition(
                                QQ::Equal(QQN::RoleHasMenu()->RoleIdrole, $data[0]),
                                QQ::Equal(QQN::RoleHasMenu()->Seq, $seq)                                            
                                        )
                                );
                    if($rolehasmenu){
                       $rolehasmenu[0]->Seq = $seq - 1;
                       $rolehasmenu[0]->Save();
                    }
                    $rolehasmenu = RoleHasMenu::LoadByRoleIdroleMenuIdmenu($data[0], $data[1]);
                    $rolehasmenu->Seq = $seq;
                    $rolehasmenu->Save();                                               
                }
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/role_edit.php/'.$this->lblIdrole->Text.'?tab=2#2');
            }

            protected function btnAdd_Click(){
                $chk = RoleHasMenu::LoadByRoleIdroleMenuIdmenu($this->lblIdrole->Text, $this->lstMenu->SelectedValue);
                if($chk){
                    QApplication::DisplayAlert("Already have this menu");
                }else{
                    $mnuhasrole = new RoleHasMenu();
                    $mnuhasrole->RoleIdrole = $this->lblIdrole->Text;
                    $mnuhasrole->MenuIdmenu = $this->lstMenu->SelectedValue;
                    $mnuhasrole->Permission = $this->txtPermision->Text;
                    $mnuhasrole->Level = $this->txtlevel->Text;
                    $mnuhasrole->Parrent = $this->lstParrent->SelectedValue;
                    $mnuhasrole->Seq = RoleHasMenu::CountByRoleIdrole($this->lblIdrole->Text) + 1;
                    $mnuhasrole->Save();
                }
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/role_edit.php/'.$this->lblIdrole->Text.'?tab=2#2');
            }

            public function btnList_Click($strFormId, $strControlId, $strParameter) {
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/role_edit.php');
            }

            protected function btnSave_Click($strFormId, $strControlId, $strParameter) {
                    $this->mctRole->SaveRole();
                    $role = Role::LoadByName($this->txtName->Text);
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/role_edit.php/'.$role->Idrole.'?tab=1');
            }

            protected function btnUpdate_Click($strFormId, $strControlId, $strParameter) {
                    $address = Address::LoadArrayByRoll($this->lblIdrole->Text);
                    if($address){
                        foreach ($address as $addres){}
                    }else{
                        $addres = new Address();
                        $addres->Roll = $this->lblIdrole->Text;
                    }

                    //$addres->Title = $this->txtTitle->Text;
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
                    //$addres->Web = $this->txtWeb->Text;
                    $addres->Email1 = $this->txtEmail1->Text;
                    $addres->Email2 = $this->txtEmail2->Text;
                    $addres->TinSalesTaxNo = $this->txtTinSalesTaxNo->Text;
                    $addres->CstNo = $this->txtCstNo->Text;
                    $addres->Save();

                    $role = Role::LoadByName($this->txtName->Text);
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/role_edit.php/'.$role->Idrole.'?tab=2');
            }

            protected function btnRemove_Click($strFormId, $strControlId, $strParameter) {
                    $address = Address::LoadArrayByRoll($this->lblIdrole->Text);
                    if($address){
                        foreach ($address as $addres) $addres->Delete ();
                    }

                    $role = Role::LoadByName($this->txtName->Text);
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/role_edit.php/'.$role->Idrole);
            }

            protected function btnDelete_Click($strFormId, $strControlId, $strParameter) {
                    // Delegate "Delete" processing to the RoleMetaControl
                    //
                    $roles = Role::QueryArray(
                                QQ::AndCondition(
                                QQ::Equal(QQN::Role()->Parrent,$this->lblIdrole->Text)
                                ));
                    if($roles){
                        foreach($roles as $role){}
                        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/role_edit.php/'.$this->lblIdrole->Text.'?delete=1');
                    }else{
                        $this->mctRole->DeleteRole();    
                        $this->RedirectToListPage();
                    }
            }

            protected function btnNew_Click() {
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/role_edit.php?new=1');
            }

            protected function btnCancel_Click($strFormId, $strControlId, $strParameter) {
                QApplication::ExecuteJavaScript("window.history.back()");
            }

            protected function dtgGroup_Bind(){
            $this->dtgGroup->TotalItemCount = Group::QueryCount(
                    QQ::AndCondition(
                                    $this->dtgGroup->Conditions
                            ));

            $data = Group::QueryArray(
                        QQ::AndCondition(
                                    $this->dtgGroup->Conditions
                            ),
            QQ::Clause(
                    $this->dtgGroup->OrderByClause,
                    $this->dtgGroup->LimitClause
            ));

            $this->dtgGroup->DataSource = $data;
            }

            public function dtgGroupRow_Click($strFormId, $strControlId, $strParameter) {
                if($this->mctRole->EditMode == TRUE)
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/role_edit.php/'.$this->lblIdrole->Text.'?id='.$strParameter.'&tab=3');
                else
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/role_edit.php'.'?id='.$strParameter.'&tab=3');    
            }

            protected function btnGrpSave_Click($strFormId, $strControlId, $strParameter) {
                $grp = Group::LoadByIdgroup($strParameter);
                if($grp){                    
                    $grp->Name = $this->txtGrpName->Text;
                    $grp->Description = $this->txtGrpDescription->Text;
                    $grp->Save();
                }else{
                    $grp = new Group();
                    $grp->Name = $this->txtGrpName->Text;
                    $grp->Description = $this->txtGrpDescription->Text;
                    $grp->Save();
                }
                $this->redirectgrp();
            }
            protected function btnGrpDelete_Click($strFormId, $strControlId, $strParameter) {
                $grp = Group::LoadByIdgroup($_GET['id']);
                $grp->Delete();
                $this->redirectgrp();
            }
            protected function btnGrpNew_Click(){
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/role_edit.php');
            }
            
            protected function redirectgrp(){
                if($this->mctRole->EditMode == TRUE)
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/role_edit.php/'.$this->lblIdrole->Text.'?tab=3');
                else
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/role_edit.php'.'?tab=3');
            }

            protected function RedirectToListPage() {
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/role_edit.php');
            }
    }
    RoleEditForm::Run('RoleEditForm');
?>