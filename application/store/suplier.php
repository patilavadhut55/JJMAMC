<?php
    require('../../qcubed.inc.php');

    class Requirement extends QForm {
        protected $txtCode;
        protected $calregdate;
        protected $lstBussType;
        protected $txtName;
        protected $txtAddress;
        protected $lstSupType;
        protected $lstSupCat;
        protected $txtof;
        protected $txtstno;
        protected $txttanno;
        protected $txtvatno;
        protected $txtgstno;
        protected $txtbnknm;
        protected $txtaccno;
        protected $txtbranch;
        protected $calshopregDate;
        protected $txtifsc;
        protected $txtpanno;
        protected $txtadharno;
        protected $txtregfee;
        protected $txtshopactlic;
        protected $txtturnover;
        protected $txtContact1;
        protected $txtContact2;
        protected $txtPhone1;
        protected $txtPhone2;
        protected $txtPincode;
        protected $txtDetails;
        protected $txtEmail;
        protected $txtEmail1;
        protected $txtfaxno;
        protected $txtDocs;
        protected $lstCountry;
        protected $lstState;
        protected $lstDist;
        protected $lstTaluka;
        //button declaration
        protected $btnSave;
        protected $btnDelete;
        protected $btnCancel;
        protected $lbldelete;
        protected $btnAdd;
        protected $btnUpload;

        protected function Form_Run() {
			parent::Form_Run();
                   QApplication::CheckRemoteAdmin();
		}
            protected function Form_Create(){
                parent::Form_Create();
                
                //controls declaration
                $this->calregdate = new QDateTimePicker($this);
                $this->calregdate->DateTimePickerType = QDateTimePickerType::Date;
                $this->calregdate->DateTime = QDateTime::Now();
                $this->calregdate->Width = 80;
                $this->calregdate->Name = "Registerd On";
                $this->calregdate->Required = TRUE;
                
                $this->txtCode = new QTextBox($this);
                $this->txtCode->Name = "Supplier Code";
                $this->txtCode->Width = 150;
                $code = Settings::LoadByIdsettings(43); // counterSupplier
                $this->txtCode->Text = 'WCESUP'.$code->Option;
                $this->txtCode->ReadOnly =TRUE;
                
                $this->txtName = new QTextBox($this);
                $this->txtName->Name = "Supplier Name";
                $this->txtName->Required = TRUE;
                
                $this->lstSupType = new QSelect2ListBox($this);
                $this->lstSupType->Name = "Supplier Type";
                $this->lstSupType->AddItem("-Select Supplier Type-");
                $sups = SupplierGrp::LoadAll();
                foreach ($sups as $sup){
                    $this->lstSupType->AddItem($sup->Name,$sup->IdsupplierGrp);
                }
                $this->lstSupType->Required = TRUE;
                
                
                $this->lstSupCat = new QSelect2ListBox($this);
                $this->lstSupCat->Name = "Supplier Category";
                $this->lstSupCat->AddItem("-Select Supplier Category-");
                $supcats = SupplierCat::LoadAll();
                foreach ($supcats as $supcat){
                    $this->lstSupCat->AddItem($supcat->Name,$supcat->IdsupplierCat);
                }
                
                $this->lstBussType = new QSelect2ListBox($this);
                $this->lstBussType->Name = "Business Type";
                $this->lstBussType->AddItem("-Select Business Type-");
                $bustypes = BusinessCat::LoadAll();
                foreach ($bustypes as $bustype){
                    $this->lstBussType->AddItem($bustype->Name,  $bustype->IdbusinessCat);
                }
                $this->lstBussType->Required = TRUE;
                
                $this->txtAddress = new QTextBox($this);
                $this->txtAddress->Name = "Official Address";
                $this->txtAddress->TextMode = QTextMode::MultiLine;
                $this->txtAddress->Required = TRUE;
                
                $this->txtof = new QTextBox($this);
                $this->txtof->Name = "Supply Of";
                $this->txtof->TextMode = QTextMode::MultiLine;
                $this->txtof->Required = TRUE;
                
                $this->txtstno = new QTextBox($this);
                $this->txtstno->Name = "S.T.No";
                
                $this->txtvatno = new QTextBox($this);
                $this->txtvatno->Name = "VAT No";
                
                $this->txtgstno = new QTextBox($this);
                $this->txtgstno->Name = "G.S.T No";
                
                $this->calshopregDate = new QDateTimePicker($this);
                $this->calshopregDate->Width = 80;
                $this->calshopregDate->Name = "Reg Date";
                
                $this->txtbnknm = new QTextBox($this);
                $this->txtbnknm->Name = "Bank Name";
                $this->txtbnknm->Required = TRUE;
                
                $this->txtaccno = new QTextBox($this);
                $this->txtaccno->Name = "Bank A/C No";
                $this->txtaccno->Required = TRUE;
                
                $this->txtbranch = new QTextBox($this);
                $this->txtbranch->Name = "Branch Name";
                $this->txtbranch->Required = TRUE;
                
                $this->txtifsc = new QTextBox($this);
                $this->txtifsc->Name = "NIFT/IFSC Code/Wire Transfer No";
                $this->txtifsc->Required = TRUE;
                
                $this->txtpanno = new QTextBox($this);
                $this->txtpanno->Name = "PAN No";
                $this->txtpanno->Required = TRUE;
                
                $this->txttanno = new QTextBox($this);
                $this->txttanno->Name = "TAN No";
                
                $this->txtadharno = new QTextBox($this);
                $this->txtadharno->Name = "Aadhar Card No";
                
                $this->txtregfee = new QTextBox($this);
                $this->txtregfee->Name = "Registration Fee";
                 
                $this->txtshopactlic = new QTextBox($this);
                $this->txtshopactlic->Name = "Shop Act Licence";
                
                $this->txtturnover = new QTextBox($this);
                $this->txtturnover->Name = "Turnover INR";
                $this->txtturnover->Required = TRUE;
                
                $this->txtContact1 = new QTextBox($this);
                $this->txtContact1->Name = "Mobile No 1";
                $this->txtContact1->MaxLength = 12;
                $this->txtContact1->Required = TRUE;
                
                $this->txtContact2 = new QTextBox($this);
                $this->txtContact2->Name = "Mobile No 2";
                $this->txtContact2->MaxLength = 12;
                
                
                $this->txtPhone1 = new QTextBox($this);
                $this->txtPhone1->Name = "Phone No 1";
                $this->txtPhone1->MaxLength = 11;
                $this->txtPhone1->Required = TRUE;
                
                $this->txtPhone2 = new QTextBox($this);
                $this->txtPhone2->Name = "Phone No 2";
                $this->txtPhone2->MaxLength = 11;
                
                $this->txtEmail = new QTextBox($this);
                $this->txtEmail->Name = "Email 1";
                $this->txtEmail->Required = TRUE;
                
                $this->txtEmail1 = new QTextBox($this);
                $this->txtEmail1->Name = "Email 2";
                
                $this->txtfaxno = new QTextBox($this);
                $this->txtfaxno->Name = "Fax No";
                
                $this->txtPincode = new QTextBox($this);
                $this->txtPincode->Name = "Pincode";
                $this->txtPincode->MaxLength = 6;
                $this->txtPincode->Required = TRUE;
                
                $this->lstCountry= new QSelect2ListBox($this);
                $this->lstCountry->Name = "Country";
                $this->lstCountry->AddItem("-Select One-",NULL);
                $places = Place::LoadArrayByGrp(1);
                foreach ($places as $place){
                    $this->lstCountry->AddItem($place->Name,$place->Idplace);
                }
                $this->lstCountry->AddAction(new QClickEvent(), new QServerAction("lstCountry_Click"));
                $this->lstCountry->Required = TRUE;
                
                $this->lstState = new QSelect2ListBox($this);
                $this->lstState->Name = "State";
                $this->lstState->AddItem("-Select One-",NULL);
                $this->lstState->AddAction(new QClickEvent(),new QServerAction("lstState_Click"));
                $this->lstState->Required = TRUE;
                
                $this->lstDist = new QSelect2ListBox($this);
                $this->lstDist->Name = "District";
                $this->lstDist->AddItem("-Select One-",NULL);
                $this->lstDist->AddAction(new QClickEvent(),new QServerAction("lstDist_Click"));
                $this->lstDist->Required = TRUE;
                
                $this->lstTaluka = new QSelect2ListBox($this);
                $this->lstTaluka->Name = "Taluka";
                $this->lstTaluka->AddItem("-Select One-",NULL);
                $this->lstTaluka->Required = TRUE;
                
                $this->btnDelete = new QButton($this);
                $this->btnDelete->ButtonMode = QButtonMode::Delete;
                $this->btnDelete->AddAction(new QClickEvent(), new QServerAction('btnDelete_Click'));
                $this->btnDelete->Visible = FALSE;
                
                $this->btnSave = new QButton($this);
                $this->btnSave->ButtonMode =  QButtonMode::Save;
                $this->btnSave->AddAction(new QClickEvent(), new QServerAction('btnSave_Click'));
                $this->btnSave->CausesValidation = TRUE;
                
                $this->btnCancel = new QButton($this);
                $this->btnCancel->ButtonMode =  QButtonMode::Cancel;
                $this->btnCancel->AddAction(new QClickEvent(), new QServerAction('btnCancel_Click'));
                
                
                $this->txtDocs = new QTextBox($this);
                $this->txtDocs->Name = "Docs";
                
                
                $this->btnAdd = new QButton($this);
                $this->btnAdd->ButtonMode = QButtonMode::Add;
                $this->btnAdd->AddAction(new QClickEvent(), new QServerAction("btnAdd_Click"));
         
                if(isset($_GET['code'])){
                    $doc = MemberDoc::LoadByIdmemberDoc($_GET['docid']);
                    $scancode = Settings::LoadByName("Scan");
                    $scancode->Option = $_GET['code'] + 1 ;
                    $scancode->Save();
                    if($doc->Scans == NULL){ 
                       $doc->Scans = $_GET['code'];
                       $doc->Save();
                    }else{
                        //$this->btnPrint->Visible = TRUE;
                        $add = 0;
                        $scans = explode(',', $doc->Scans);
                        foreach ($scans as $scan){
                            if($scan == $_GET['code']) $add = 1;
                        }
                        if($add == 0)$doc->Scans = $doc->Scans.','.$_GET['code'];
                        $doc->Save();
                    }
                }
                if(isset($_GET['id'])){
                $apps = Ledger::QueryArray(
                                    QQ::AndCondition(
                                    QQ::Equal(QQN::Ledger()->Idledger, $_GET['id'])                                         
                                            )
                                        );
                        foreach ($apps as $app){
                            $appdocs = MemberDoc::LoadArrayByMember($_GET['id']);
                            if($appdocs){
                                foreach ($appdocs as $appdoc){
                                    $this->lbldelete[$appdoc->IdmemberDoc] = new QButton($this);
                                    $this->lbldelete[$appdoc->IdmemberDoc]->Text = "<i class='fa fa-trash'></i>";
                                    $this->lbldelete[$appdoc->IdmemberDoc]->ButtonMode = QButtonMode::Danger;
                                    $this->lbldelete[$appdoc->IdmemberDoc]->HtmlEntities = FALSE;
                                    $this->lbldelete[$appdoc->IdmemberDoc]->AddAction(new QClickEvent(), new QServerAction('lbldelete_click'));
                                    $this->lbldelete[$appdoc->IdmemberDoc]->ActionParameter = $appdoc->IdmemberDoc;
                               }
                            }
                        }
                }
               
                if(isset($_GET['id'])){
                    $this->btnDelete->Visible = TRUE;
                    $ledger = Ledger::LoadByIdledger($_GET['id']);
                    $this->txtName->Text = $ledger->Name;
                    $this->txtCode->Text = $ledger->Code;
                    
                    
                    
                  $address = Address::LoadArrayByOf($ledger->Idledger);
                         if($address){
                          foreach ($address as $addres){}
                            $this->txtAddress->Text = $addres->AddressLine1;
                            $this->txtPincode->Text = $addres->ZipCode;
                            $this->txtContact1->Text= $addres->Contact1;
                            $this->txtContact2->Text= $addres->Contact2;
                            $this->lstCountry->SelectedValue =  $addres->Country;
                            $this->lstCountry_Click();
                            $this->lstState->SelectedValue = $addres->State;
                            $this->lstState_Click();
                            $this->lstDist->SelectedValue =  $addres->District;
                            $this->lstDist_Click();
                            $this->lstTaluka->SelectedValue =  $addres->Taluka;
                            $this->lstSupType->SelectedValue = $addres->SupplierType;
                          //  $this->calregdate->DateTime = $addres->RegistrateredDate;
                            $this->lstBussType->SelectedValue = $addres->BusinessType;
                            $this->txtstno->Text = $addres->TinSalesTaxNo;
                            $this->txtvatno->Text =  $addres->VatNo;
                            $this->txtgstno->Text = $addres->GstNo;
                            $this->txtbnknm->Text = $addres->BankName;
                            $this->txtaccno->Text = $addres->BankAccNo;
                            $this->txtbranch->Text = $addres->Branch;
                            $this->txtifsc->Text =  $addres->NiftIfscWireTransferNo;
                            $this->txtpanno->Text = $addres->PanNo;
                            $this->txtadharno->Text = $addres->AdharCardNo ;
                            $this->txtregfee->Text = $addres->RegFee;
                            $this->txtshopactlic->Text = $addres->ShopActLicensNo;
                            $this->calshopregDate->DateTime = $addres->ShopActDate;
                            $this->txtturnover->Text = $addres->TurnoverInr;
                            $this->txtPhone1->Text = $addres->PhNo1;
                           // $this->txtPhone2->Text = $addres->PhNo2;
                            $this->txtfaxno->Text = $addres->FaxNo;
                            $this->txttanno->Text = $addres->TanNo;
                            $this->txtEmail->Text = $addres->Email1;
                            $this->txtEmail1->Text = $addres->Email2;
                            $this->txtof->Text = $addres->SupplierOf;
                            $this->lstSupCat->SelectedValue = $addres->SupplierCategory;
                       }
                    }
                             
                    $this->btnUpload = new QButton($this);
                    $this->btnUpload->ButtonMode = QButtonMode::Success;
                    $this->btnUpload->Text = "Upload";
                    $this->btnUpload->AddAction(new QClickEvent(), new QServerAction('btnUpload_Click'));
        }
        protected function btnSave_Click(){
           if(isset($_GET['id'])){
             $ledger = Ledger::LoadByIdledger($_GET['id']);
                 $address = Address::LoadArrayByOf($ledger->Idledger);
                  if($ledger){
                        if($address){
                          foreach ($address as $addres){}
                      }
                  }
              }else{
                    $ledger = new Ledger();
                    $code = Settings::LoadByIdsettings(43); // counter
                    $this->txtCode->Text = 'WCESUP'.$code->Option;                
                    $code->Option = $code->Option + 1;
                    $code->Save();
                    $ledger->Code = $this->txtCode->Text;
                    $ledger->Grp = 35; //Supplier Grp
                    $ledger->IsGrp = 0;
                    
                    $addres = new Address();
              }
               
                $ledger->Name = $this->txtName->Text;
                $ledger->Save();
                $addres->Of = $ledger->Idledger;
               // $addres->Title = '-';
                $addres->AddressLine1 = $this->txtAddress->Text;
                $addres->ZipCode = $this->txtPincode->Text;
                $addres->Contact1 = $this->txtContact1->Text;
                $addres->Contact2 = $this->txtContact2->Text;
                $addres->SupplierOf = $this->txtof->Text;
                $addres->SupplierCategory = $this->lstSupCat->SelectedValue;
                $addres->SupplierType = $this->lstSupType->SelectedValue;
                //$addres->RegistrateredDate = $this->calregdate->DateTime;
                $addres->BusinessType = $this->lstBussType->SelectedValue;
                $addres->TinSalesTaxNo = $this->txtstno->Text;
                $addres->VatNo = $this->txtvatno->Text;
                $addres->GstNo = $this->txtgstno->Text;
                $addres->BankName = $this->txtbnknm->Text;
                $addres->BankAccNo = $this->txtaccno->Text;
                $addres->Branch =$this->txtbranch->Text;
                $addres->NiftIfscWireTransferNo = $this->txtifsc->Text;
                $addres->PanNo = $this->txtpanno->Text;
                $addres->AdharCardNo = $this->txtadharno->Text;
                $addres->RegFee = $this->txtregfee->Text;
                $addres->ShopActLicensNo = $this->txtshopactlic->Text;
                $addres->ShopActDate = $this->calshopregDate->DateTime;
                $addres->TurnoverInr = $this->txtturnover->Text;
                $addres->PhNo1 = $this->txtPhone1->Text;
             //   $addres->PhNo2 = $this->txtPhone2->Text;
                $addres->FaxNo = $this->txtfaxno->Text;
                $addres->TanNo = $this->txttanno->Text;
                $addres->Email1 = $this->txtEmail->Text;
                $addres->Email2 = $this->txtEmail1->Text;
                $addres->Country =  $this->lstCountry->SelectedValue;
                $addres->State = $this->lstState->SelectedValue;
                $addres->District =  $this->lstDist->SelectedValue;
                $addres->Taluka = $this->lstTaluka->SelectedValue;
                $addres->Save();
                
                $login = Login::LoadByIdlogin($ledger->Idledger);
                    if(!$login){                                    
                        $login = new Login();
                        $login->Idlogin = $ledger->Idledger;
                        $login->Username = $ledger->Code;
                        $login->Password = "sup@wce";
                        $login->IsEnabled = TRUE;
                        $login->Save(); 
                    } 
                        $roles = Role::QueryArray(
                                 QQ::AndCondition(
                                         QQ::Like(QQN::Role()->Name, '%Supplier%')));
                
                        if($roles){
                              foreach ($roles as $role){}
                            //chk login has role
                            $chkloginhasrole = LoginHasRole::LoadByLoginIdloginRoleIdrole($login->Idlogin, $role->Idrole);
                            if(!$chkloginhasrole){
                                $loginhasrole = new LoginHasRole();
                                $loginhasrole->RoleIdrole = $role->Idrole;
                                $loginhasrole->LoginIdlogin = $login->Idlogin;
                                $loginhasrole->Active = TRUE;
                                $loginhasrole->Save();
                            }
                        }
                      
                    if(!is_dir('../upload/documents/A'.$ledger->Code)){
                        mkdir('../upload/documents/A'.$ledger->Code, 0777, true);
                    }
                
                 QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/suplier.php?id='.$ledger->Idledger.'&tab=2');
           
        }
        public function lstCountry_Click(){
            if($this->lstCountry->SelectedValue!= NULL){
                $places = Place::LoadArrayByParrent($this->lstCountry->SelectedValue);
                foreach ($places as $place){
                    $this->lstState->AddItem($place->Name,$place->Idplace);
                }
            }
        } 
        public function lstState_Click(){
            if($this->lstState->SelectedValue!= NULL){
                $places = Place::LoadArrayByParrent($this->lstState->SelectedValue);
                foreach ($places as $place){
                    $this->lstDist->AddItem($place->Name,$place->Idplace);
                }
            }
        }
        public function lstDist_Click(){
            if($this->lstDist->SelectedValue!= NULL){
                $places = Place::LoadArrayByParrent($this->lstDist->SelectedValue);
                foreach ($places as $place){
                    $this->lstTaluka->AddItem($place->Name,$place->Idplace);
                }
            }
        }
        protected function btnDelete_Click(){
            $ledger = Ledger::LoadByIdledger($_GET['id']);
            $vovs = Voucher::QueryArray(
                    QQ::OrCondition(
                    QQ::Equal(QQN::Voucher()->Cr, $ledger->Idledger),
                    QQ::Equal(QQN::Voucher()->Dr, $ledger->Idledger)
                            ));
            if($vovs){
                QApplication::DisplayAlert(" Supplier can not be deleted");
            }else{
                $address = Address::LoadArrayByOf($ledger->Idledger);
                if($address){
                          foreach ($address as $addres){}
                          $addres->Delete();
                      }
                
                $login = Login::LoadByIdlogin($ledger->Idledger);
                if($login){
                 $loginhasroles = LoginHasRole::LoadArrayByLoginIdlogin($ledger->Idledger);
                   if($loginhasroles){
                          foreach ($loginhasroles as $loginhasrole){}
                          $loginhasrole->Delete();
                      }
                   $login->Delete();
                }
                 $memberDocs = MemberDoc::LoadArrayByMember($ledger->Idledger);
                 if($memberDocs){
                     foreach ($memberDocs as $memberDoc){
                         $memberDoc->Delete();
                     }
                 }
                   $ledger->Delete();
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/supplier_list.php');
                        
            }
        }

        protected function btnCancel_Click(){
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/supplier_list.php');
        }
        
         protected function btnAdd_Click(){
                if($this->txtDocs->Text != NULL){
                    $scancode = Settings::LoadByName("Scan");
                   $apps = Ledger::QueryArray(
                                    QQ::AndCondition(
                                    QQ::Equal(QQN::Ledger()->Idledger, $_GET['id'])
                                            )
                                        );
                    foreach ($apps as $app){                    
                        $appdoc = new MemberDoc();
                        $appdoc->Member = $app->Idledger;
                        $appdoc->Document = $this->txtDocs->Text;
                        
                        $appdoc->Required = TRUE;
                        $appdoc->Save();
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/store/suplier.php?id='.$_GET['id'].'&docid='.$appdoc->IdmemberDoc.'&code='.$scancode->Option.'&doc='.$scancode->Option.'&tab=2');
                    }
                              
                }else{
                    QApplication::DisplayAlert("Please select any document");
                }
            }
        protected function lbldelete_click($strFormId, $strControlId, $strParameter){
            $appdoc = MemberDoc::LoadByIdmemberDoc($strParameter);
            if($appdoc->Scans != NULL){
                $scans = explode(",", $appdoc->Scans); 
                if(key_exists(0, $scans)){ 
                    foreach ($scans as $scan){
                        $img = '../upload/documents/A'.$appdoc->MemberObject->Code.'/'.(int)$scan.'.png'; 
                        if(file_exists ($img)){
                            unlink($img);
                        }
                    }
                }
            }
            $appdoc->Delete();
            QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/store/suplier.php?id='.$_GET['id'].'&tab=2');
        }
         protected function btnUpload_Click($strFormId, $strControlId, $strParameter){
                 if(isset($_GET['id'])){
                 $app = Ledger::LoadByIdledger($_GET['id']);
                 if(!is_dir('../upload/documents/A'.$app->Code)){
                        mkdir('../upload/documents/A'.$app->Code, 0777, true);
                    }
                 $target_dir = "../upload/documents/A".$app->Code."/";
                       
                        $uploadOk = 1;
                        
                        $target_file = $target_dir . $_GET['doc']. ".png" ; 
                        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                    if($app){            
                        $appdocs = MemberDoc::QueryArray(
                                        QQ::AndCondition(
                                        QQ::Equal(QQN::MemberDoc()->Member, $app->Idledger),
                                        QQ::Equal(QQN::MemberDoc()->Document, $_GET['doc'])
                                        ));
                        if($appdocs){
                            foreach($appdocs as $appdoc){}

                            $appdoc->Scans = $_GET['doc'];
                            $appdoc->Save();

                       }
                   }
                   $msg = imageFileUpload($target_file, "imgupload"); 
            }
        }
            
        }
    Requirement::Run('Requirement');    
?>        
