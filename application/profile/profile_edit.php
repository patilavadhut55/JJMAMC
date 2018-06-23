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
		protected $btnLogin;
              

                protected $txtUserName;
                protected $txtPassword;
                protected $txtConfirm;
                protected $chkIsEnabled;
                protected $dtgLogin;
                
                protected $txtName;
                protected $txtMname;
                protected $btnSave;
                protected $btnCancel;
                protected $btnCancel1;

                protected function Form_Run() {
                    parent::Form_Run();
                    QApplication::CheckRemoteAdmin();
            }

        protected function Form_Create() {
            parent::Form_Create();
            $this->txtName = new QTextBox($this);
            $this->txtName->Name = "Name";
            
            $this->txtMname = new QTextBox($this);
            $this->txtMname->Name = "Marathi Name";
            
            $this->btnSave = new QButton($this);
            $this->btnSave->Text = QApplication::Translate('Save');
            $this->btnSave->AddAction(new QClickEvent(), new QServerAction('btnSave_Click'));
            $this->btnSave->CausesValidation = true;

            $this->btnCancel = new QButton($this);
            $this->btnCancel->Text = QApplication::Translate('Cancel');
            $this->btnCancel->AddAction(new QClickEvent(), new QServerAction('btnCancel_Click'));

            $this->btnCancel1 = new QButton($this);
            $this->btnCancel1->Text = QApplication::Translate('Cancel');
            $this->btnCancel1->AddAction(new QClickEvent(), new QServerAction('btnCancel1_Click'));
            
            $this->btnSave->ButtonMode = QButtonMode::Save;
            $this->btnCancel->ButtonMode = QButtonMode::Cancel;
            $this->btnCancel1->ButtonMode = QButtonMode::Cancel;

            
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
            
            

             //logins
            $this->txtUserName = new QTextBox($this);
            $this->txtPassword = new QTextBox($this);
            $this->txtConfirm = new QTextBox($this);
            

            $this->txtUserName->Name = "User Name";
            $this->txtPassword->TextMode = QTextMode::Password;
            $this->txtPassword->Name = "Password";
            $this->txtConfirm->Name = "Confirm Password";
            $this->txtConfirm->TextMode = QTextMode::Password;
            

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

            
            $this->btnLogin = new QButton($this);
            $this->btnLogin->ButtonMode = QButtonMode::Save;
            $this->btnLogin->AddAction(new QClickEvent(), new QServerAction("btnLogin_Click"));

            
            if(isset($_SESSION['login'])){
                $led = Ledger::LoadByIdledger($_SESSION['login']);
                $this->txtName->Text = $led->Name;
                //$this->txtMname->Text = $led->Mname;
                //address
                $address = Address::LoadArrayByOf($_SESSION['login']);
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
                

                }

                //login
                $login = Login::LoadByIdlogin($_SESSION['login']);
                if($login){                     
                    $this->txtUserName->Text = $login->Username;
                    $this->txtPassword->Text = $login->Password;
                    $this->txtConfirm->Text = $login->Password;                    
                }
            }                 
        }
        
        protected function btnSave_Click($strFormId, $strControlId, $strParameter) {
            $led = Ledger::LoadByIdledger($_SESSION['login']);
            $led->Name = $this->txtName->Text;
            //$led->Mname = $this->txtMname->Text;
            $led->Save();            
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
            $addres->Save();
           QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/profile/profile_edit.php?tab=1');   
        }

     
     
        
        protected function btnLogin_Click($strFormId, $strControlId, $strParameter) {    
            if($this->txtPassword->Text == $this->txtConfirm->Text){
               $login = Login::LoadByIdlogin($_SESSION['login']);
                if($login){

                }else{
                    $login = new Login();
                    $login->Idlogin = $this->lblIdledger->Text;
                }  
                $login->Username =  $this->txtUserName->Text ;
                $login->Password = $this->txtPassword->Text ;
                $login->Save();
               // QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/profile/profile_edit.php?tab=1');
                QApplication::DisplayAlert('Upadated Suceessfuly password');
                }else{
                QApplication::DisplayAlert("Incorrect Password");
            }
        }

        
        protected function btnCancel_Click($strFormId, $strControlId, $strParameter) {                    
            $this->RedirectToListPage();
            //QApplication::ExecuteJavaScript("window.history.back()");
        }

         protected function btnCancel1_Click($strFormId, $strControlId, $strParameter) {                    
              $this->RedirectToListPage();
        }
        protected function RedirectToListPage() {                            
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/dashboard.php');
        }
    }

LedgerEditForm::Run('LedgerEditForm');
?>