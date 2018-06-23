<?php
    require('../../qcubed.inc.php');
    class IssueRegisterForm extends QForm {
        protected $lstmember; 
        protected $lstitem;
        protected $lstserial;
        protected $txtDescription;
        protected $txtCode1;
        
        protected $calDate1;
        protected $chkrtDate;
        protected $btnSave1;
        protected $btnCancel1;  
        protected $lblEdit; 
        protected $lbldelete2;
        
        protected function Form_Run() {
            parent::Form_Run();
                // Security check for ALLOW_REMOTE_ADMIN
                // To allow access REGARDLESS of ALLOW_REMOTE_ADMIN, simply remove the line below
            QApplication::CheckRemoteAdmin();
        }

//     protected function Form_Load() {}

        protected function Form_Create() {
            parent::Form_Create();
             //controls  
            $this->txtDescription = new QTextBox($this);
            $this->txtDescription->Placeholder = "Description"; 
            
            $this->txtCode1 = new QTextBox($this);
            $this->txtCode1->Placeholder = "Code"; 
            
            $this->lstmember = new QSelect2ListBox($this);
            $this->lstmember->Name = "Member";
            $this->lstmember->AddItem("-Select Member-",NULL);
            $members = Login::QueryArray(
            QQ::AndCondition(
            QQ::Equal(QQN::Login()->IdloginObject->Grp, 34)));
           // $this->lstmember->Width =300;
            foreach($members as  $member){
                $this->lstmember->AddItem($member->IdloginObject->Name,$member->Idlogin);
            }
            $this->lstmember->AddAction(new QClickEvent(),new QServerAction('lstmember_click'));
            
            if(isset($_GET['mem'])){ 
                $this->lstmember->SelectedValue = $_GET['mem'];
            }
             
            $this->lstitem = new QSelect2ListBox($this);
          //  $this->lstitem->Name ="Item";
            $this->lstitem->AddItem("-Select Item-",NULL);
            $ledgers = LedgerDetails::LoadAll();
            foreach ($ledgers as  $ledger){
                $this->lstitem->AddItem( $ledger->DisplayName, $ledger->IdledgerDetails);
            }
            $this->lstitem->AddAction(new QClickEvent(),new QServerAction('lstitem_click'));
            
            $this->lstserial = new QSelect2ListBox($this);
            $this->lstserial->RemoveAllItems();
            $this->lstserial->AddItem("-Select Serials-",NULL);
          
            $this->calDate1 =new QCalendar($this);
            $this->calDate1->Width =150;
            $this->calDate1->Name = "Date";
           
            if(isset($_GET['fdate'])){
                $this->calDate1->Text = Date('Y/m/d', strtotime($_GET['fdate']));
            }
             
            //Delete 
            if(isset($_GET['fdate']) && isset($_GET['mem'])){ 
                $issues = IssuedItems::QueryArray(
                QQ::AndCondition(
                        QQ::Equal(QQN::IssuedItems()->Member,$_GET['mem']),
                        QQ::Equal(QQN::IssuedItems()->Date,date('Ymd', strtotime($this->calDate1->Text)))
                        ));
                        foreach ($issues as $issue){
                            $this->lbldelete2[$issue->IdissuedItems] = new QLabel($this);
                            $this->lbldelete2[$issue->IdissuedItems]->HtmlEntities = FALSE;
                            $this->lbldelete2[$issue->IdissuedItems]->Text = "<img src=".__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__."/delete.png />";
                            $this->lbldelete2[$issue->IdissuedItems]->AddAction(new QClickEvent(), new QConfirmAction(QApplication::Translate('Are You sure you want to delete')));
                            $this->lbldelete2[$issue->IdissuedItems]->AddAction(new QClickEvent(), new QServerAction('lbldelete2_click'));
                            $this->lbldelete2[$issue->IdissuedItems]->ActionParameter = $issue->IdissuedItems;
                            $this->lbldelete2[$issue->IdissuedItems]->ToolTip = QApplication::Translate('Delete');
                            
                            $this->chkrtDate[$issue->IdissuedItems] = new QCheckBox($this);
                            $this->chkrtDate[$issue->IdissuedItems]->Width = 20;
                            $this->chkrtDate[$issue->IdissuedItems]->ActionParameter = $issue->IdissuedItems;
                            $this->chkrtDate[$issue->IdissuedItems]->AddAction(new QClickEvent(), new QServerAction('chkrtDate_Click'));
                           //  $this->chkrtDate[$issue->IdissuedItems]->Checked = $issue->IdissuedItems; 
                        }
            }
           //Buttons
            $this->btnSave1 = new QButton($this);
            $this->btnSave1->ButtonMode = QButtonMode::Save;
            $this->btnSave1->AddAction(new QClickEvent(),new QServerAction('btnSave1_Click'));
            $this->btnSave1->CausesValidation = TRUE;

            $this->btnCancel1 = new QButton($this);
            $this->btnCancel1->ButtonMode = QButtonMode::Cancel;
            $this->btnCancel1->AddAction(new QClickEvent(),new QServerAction('btnCancel1_Click'));
          
            if(isset($_GET['id1'])){
                $pricehistorys = IssuedItems::LoadByIdissuedItems($_GET['id1']);
                if($pricehistorys){
                   $this->txtDescription->Text = $pricehistorys->Description;
                   $this->lstserial->SelectedValue = $pricehistorys->Serials;
                   $this->lstitem->SelectedValue = $pricehistorys->Item;
                 //  $this->btn->Visible = TRUE;
                }
            }
        }
        
        //Save for issue register
        protected function btnSave1_Click($strFormId, $strControlId, $strParameter) {
            if($this->lstitem->SelectedValue !== NULL && $this->lstserial->SelectedValue !== NULL){
                if(isset($_GET['id1'])){
                    $issue = IssuedItems::LoadByIdissuedItems($_GET['id1']);
                    if ($issue){
                         if(isset($_GET['mem'])){
                        $issue->Description = $this->txtDescription->Text;
                        $issue->Date = $this->calDate1->DateTime;
                        $issue->Item = $this->lstitem->SelectedValue;
                        $issue->Serials = $this->lstserial->SelectedValue;
                        $issue->Member = $_GET['mem'];
                        $issue->Save();
                          QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/issue_register.php?mem='.$this->lstmember->SelectedValue.'&fdate='.date('Ymd',  strtotime($this->calDate1->Text)));
                         }
                    }                      
                }else {
                    $issue = new IssuedItems();
                    $set = Settings::LoadByIdsettings(3);
                    $issue->Code = $set->Option;
                    $set->Option= $set->Option +1;
                    $set->Save();
                    $issue->Code = $set->Option ;
                    $issue->Description = $this->txtDescription->Text;
                    $issue->Date = $this->calDate1->DateTime;
                    $issue->Item = $this->lstitem->SelectedValue;
                    $issue->Serials = $this->lstserial->SelectedValue;
                    $issue->Member = $_GET['mem'];
                    $issue->Save();
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/issue_register.php?mem='.$this->lstmember->SelectedValue.'&fdate='.date('Ymd',  strtotime($this->calDate1->Text)));
                }  // QApplication::DisplayAlert('Save Successfully');
            }else{
                QApplication::DisplayAlert('Please Fields Value');
            }
        }
    
        public function chkrtDate_Click($strFormId, $strControlId, $strParameter) {
            $issues= IssuedItems::QueryArray(
                    QQ::AndCondition(
                         QQ::Equal(QQN::IssuedItems()->Member, $this->lstmember->SelectedValue)));
                    foreach ($issues as $issue){
                        if($this->chkrtDate[$issue->IdissuedItems]->Checked == TRUE){
                            $issue->ReturnedDate = QDateTime::Now();
                            $issue->ReturnItem = 1;
                            $issue->Save();
                            //$this->chkrtDate[$issue->IdissuedItems]->Checked = $issue->IdissuedItems; 
                          QApplication::DisplayAlert(' Returne this item by  ' .$issue->MemberObject->IdloginObject->Name); 
                        }
                    }       
        }
        
        public function lbldelete2_click($strFormId, $strControlId, $strParameter) {
            try{
              //   if(isset($_GET['id1'])){
                $issues = IssuedItems::LoadArrayByMember($_GET['mem']);
              if($issues){
                foreach ($issues as$issue){}
                $issue->Delete(); 
                 } 
               //  }    
            }  catch (Exception $ex){
                QApplication::DisplayAlert(' This Item cannot be deleted '); 
            }
        }

        protected function lstmember_click($strFormId, $strControlId, $strParameter) {
            if($this->calDate1->Text != NULL && $this->lstmember->SelectedValue !== NULL){
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/issue_register.php?mem='.$this->lstmember->SelectedValue.'&fdate='.date('Ymd',  strtotime($this->calDate1->Text)));
            }else{
                QApplication::DisplayAlert('Please Select Date');
            }
        }
        
        protected function lstitem_click($strFormId, $strControlId, $strParameter) {
            $this->lstserial->RemoveAllItems();
                $issue= Serials::QueryArray(
                    QQ::AndCondition(
                        QQ::Equal(QQN::Serials()->Item, $this->lstitem->SelectedValue)));
                foreach ($issue as $serial){
                    $remove = IssuedItems::QueryArray(
                        QQ::AndCondition(
                            QQ::Equal(QQN::IssuedItems()->Serials, $serial->Idserials),
                        QQ::OrCondition(
                            QQ::Equal(QQN::IssuedItems()->ReturnItem , NULL),
                            QQ::Equal(QQN::IssuedItems()->ReturnItem , 0)
                        )));
                    if(!$remove){
                        $this->lstserial->AddItem($serial->Idserials,$serial->Idserials);
                    }
                }
        }
    }
        
           IssueRegisterForm::Run('IssueRegisterForm');
?>