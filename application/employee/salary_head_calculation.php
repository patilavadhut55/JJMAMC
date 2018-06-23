<?php
    require('../../qcubed.inc.php');

    class SalaryHeadCalculation extends QForm {
        //form controls
        protected $lstSalaryhead;
        protected $chkMonths;
        protected $chkAllmonth;
        protected $txtPer;
        protected $txtAmount;
        protected $lstType;
        protected $lstBased;
        protected $arrmonths;
        //payslab
        protected $txtFromamt;
        protected $txtToamt;
        protected $txtPayper;
        protected $txtPayAmt;
        protected $lbldelPay;
        
        //calculation
        protected $lstHead1;
        protected $lstHead2;
        protected $txtOperation;
        protected $lbldelCal;

        protected $btnSave;
        protected $btnCancel;
        protected $btnDelete;
        protected function Form_Run() {
            parent::Form_Run();

            QApplication::CheckRemoteAdmin();
        }

        protected function Form_Create() {
            parent::Form_Create();
            
            //form controls declaration
            $this->lstSalaryhead = new QSelect2ListBox($this);
            $this->lstSalaryhead->AddItem('-Select One-', NULL);
            $this->lstSalaryhead->Name = "Salary Head";
            if(isset($_GET['grp'])){
               $heads = Ledger::LoadArrayByGrp ($_GET['grp']);
            }else{
               $shc = SalaryHead::LoadByIdsalaryHead($_GET['id']);
               $heads = Ledger::LoadArrayByGrp($shc->SalaryHeadObject->Grp);
            }
            foreach ($heads as $head){
                $this->lstSalaryhead->AddItem($head->Name, $head->Idledger);
            }
           //based on list
            $this->lstBased = new QSelect2ListBox($this);
            $this->lstBased->AddItem('-Select One-', NULL);
            $this->lstBased->Name = "Based On";
            if(isset($_GET['id'])){
               $shc = SalaryHead::LoadByIdsalaryHead($_GET['id']);
               $baseds = SalaryHead::LoadArrayBySalaryTemplet($shc->SalaryTemplet);
               foreach ($baseds as $based){
                $this->lstBased->AddItem($based->SalaryHeadObject->Name, $based->IdsalaryHead);
            }
            }
            
            $this->lstBased->Visible = FALSE;
            $this->lstType = new QListBox($this);
            $this->lstType->Name = "Calculation Type";
            $this->lstType->AddItem("-Select One-", NULL);
            $types = CalculationGrp::LoadAll();
            foreach ($types as $type){
                $this->lstType->AddItem($type->Name, $type->IdcalculationGrp);
            }
            //validations for change of calculation group
            if(isset($_GET['id'])){
                $cals = Calculation::LoadArrayBySalaryHead($_GET['id']);
              if($cals){ //if calculation it will delete calculation
                  $this->lstType->AddAction(new QChangeEvent(), new QConfirmAction("Do You Want to delete Previous Calculations ?? "));
                  $this->lstType->AddAction(new QChangeEvent(), new QAjaxAction('lstType_change'));
              }
              $pays = PaySlabs::LoadArrayBySalaryhead($_GET['id']);
              if($pays){//if calculation it will delete calculation
                  $this->lstType->AddAction(new QChangeEvent(), new QConfirmAction("Do You Want to delete Previous Payslabs ?? "));
                  $this->lstType->AddAction(new QChangeEvent(), new QAjaxAction('lstType_change'));
              }
              
               
                if(!$cals && !$pays )
                $this->lstType->AddAction(new QChangeEvent(), new QAjaxAction('lstType_change'));
                
            }else{
                $this->lstType->AddAction(new QChangeEvent(), new QAjaxAction('lstType_change'));
            }
            
            $this->txtAmount = new QTextBox($this);
            $this->txtAmount->Name = "Amount";
            $this->txtAmount->Visible = FALSE;
            
            $this->txtPer = new QTextBox($this);
            $this->txtPer->Name = "Percentage %";
            $this->txtPer->Visible = FALSE;
               
            $this->btnSave = new QButton($this);
            $this->btnCancel = new QButton($this);
            $this->btnDelete = new QButton($this);
            $this->btnSave->ButtonMode = QButtonMode::Save;
            $this->btnCancel->ButtonMode = QButtonMode::Cancel;
            $this->btnDelete->ButtonMode = QButtonMode::Delete;
            $this->btnDelete->Visible = FALSE;
            $this->btnSave->Visible = FALSE;
            
            $this->btnSave->AddAction(new QClickEvent(), new QServerAction('btnSave_Click'));
            $this->btnCancel->AddAction(new QClickEvent(), new QServerAction("btnCancel_Click"));
            $this->btnDelete->AddAction(new QClickEvent(), new QServerAction('btnDelete_Click'));
            
            $this->chkAllmonth = new QCheckBox($this);
            $this->chkAllmonth->AddAction(new QClickEvent(), new QAjaxAction('All_months'));
            //payslab declaration
            $this->txtFromamt = new QTextBox($this);
            $this->txtToamt= new QTextBox($this);
            $this->txtPayper = new QTextBox($this);
            $this->txtPayAmt = new QTextBox($this);
            $this->txtPayAmt->AddAction(new QEnterKeyEvent(), new QServerAction('Save_Payslab'));
            
            //calculation
            $this->lstHead1 = new QListBox($this);
            $this->lstHead1->AddItem('-Select One-', NULL);
            $this->lstHead2 = new QListBox($this);
            $this->lstHead2->AddItem('-Select One-', NULL);
            
            if(isset($_GET['id'])){
            $shc = SalaryHead::LoadByIdsalaryHead($_GET['id']);
            $this->btnDelete->Visible = TRUE;
            $this->btnSave->Visible = TRUE;
            $this->lstSalaryhead->SelectedValue = $shc->SalaryHead;
            $this->lstType->SelectedValue = $shc->CalculationGrp;
              
              if($this->lstType->SelectedValue == 1){
                  $this->txtAmount->Visible = TRUE;
              }elseif($this->lstType->SelectedValue == 2){
                  $this->lstHead1->Focus();
              }elseif($this->lstType->SelectedValue == 3){
                  $this->lstBased->Visible = TRUE;
                  $this->txtFromamt->Focus();
              }elseif($this->lstType->SelectedValue == 4){
                  $this->txtPer->Visible= TRUE;
                  $this->lstBased->Visible = TRUE;
              }
              $this->txtAmount->Text = $shc->GeneratedAmount;
              $this->txtPer->Text = $shc->Percentage;
              $this->lstBased->SelectedValue = $shc->BasedSalaryHead;
              
            if($shc->AppliedMonth == "1,2,3,4,5,6,7,8,9,10,11,12,") $this->chkAllmonth->Checked = 1;
            $calcheads = SalaryHead::LoadArrayBySalaryTemplet($shc->SalaryTemplet);
             foreach ($calcheads as $calchead){
                $this->lstHead1->AddItem($calchead->SalaryHeadObject->Name, $calchead->IdsalaryHead);
                $this->lstHead2->AddItem($calchead->SalaryHeadObject->Name, $calchead->IdsalaryHead);
            }
              //lbldelCal    
            $cals = Calculation::LoadArrayBySalaryHead($_GET['id']);
              if($cals){
                  $this->lstHead1->Visible = FALSE;  
                foreach ($cals as $cal){  
                $this->lbldelCal[$cal->Idcalculation] = new QLabel($this);
                $this->lbldelCal[$cal->Idcalculation]->HtmlEntities = FALSE ;
                $this->lbldelCal[$cal->Idcalculation]->Text = "<img src=".__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__."/delete.png />";
                $this->lbldelCal[$cal->Idcalculation]->AddAction(new QClickEvent(), new QServerAction('lbldelCal_Click'));
                $this->lbldelCal[$cal->Idcalculation]->ActionParameter = $cal->Idcalculation;
                }
              }
            
            //lbldelPay
            $pays = PaySlabs::LoadArrayBySalaryhead($_GET['id']);
              if($pays){
                foreach ($pays as $pay){  
                $this->lbldelPay[$pay->IdpaySlabs] = new QLabel($this);
                $this->lbldelPay[$pay->IdpaySlabs]->HtmlEntities = FALSE ;
                $this->lbldelPay[$pay->IdpaySlabs]->Text = "<img src=".__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__."/delete.png />";
                $this->lbldelPay[$pay->IdpaySlabs]->AddAction(new QClickEvent(), new QServerAction('lbldelPay_Click'));
                $this->lbldelPay[$pay->IdpaySlabs]->ActionParameter = $pay->IdpaySlabs;
                }
              }
              $months = explode(",", $shc->AppliedMonth);
              for($i=1; $i<=12; $i++){
                  $this->chkMonths[$i] = new QCheckBox($this);
                  if($months){
                  foreach ($months as $month){
                      if($month == $i)$this->chkMonths[$i] ->Checked = 1;
                  }
                  }
              }
              
            }
           
            $this->txtOperation = new QTextBox($this);
            $this->lstHead2->AddAction(new QChangeEvent(), new QAjaxAction('Save_Calculation'));
            
            
          
            
        }
        protected function All_months(){
            
            for($i=1; $i<=12; $i++){
                if($this->chkAllmonth->Checked == 1)
                $this->chkMonths[$i]->Checked = 1;
                else
                    $this->chkMonths[$i]->Checked = 0;
                
            }
        }

        protected function Save_Calculation(){
            if($this->txtOperation->Text == '+' || $this->txtOperation->Text == '-' || $this->txtOperation->Text == '*' || $this->txtOperation->Text == '/' ){
            $calculation = new Calculation();
            $calculation->SalaryHead = $_GET['id'];
            $calculation->SalaryHead1 = $this->lstHead1->SelectedValue;
            $calculation->SalaryHead2 = $this->lstHead2->SelectedValue;
            $calculation->Operation = $this->txtOperation->Text;
            $calculation->Save();
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/employee/salary_head_calculation.php?id='.$_GET['id']);
            }else{
                QApplication::DisplayAlert("Please enter calculation symbol");
            }
        }

        protected function Save_Payslab(){
            $payslab = new PaySlabs();
            $payslab->From = $this->txtFromamt->Text;
            $payslab->To = $this->txtToamt->Text;
            $payslab->Percentage = $this->txtPayper->Text;
            $payslab->Amount = $this->txtPayAmt->Text;
            $payslab->Salaryhead = $_GET['id'];
            $payslab->Save();
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/employee/salary_head_calculation.php?id='.$_GET['id']);
          
        }

        protected function lstType_change(){
            if(isset($_GET['id'])){
            $shc = SalaryHead::LoadByIdsalaryHead($_GET['id']);
            $shc->SalaryHead = $this->lstSalaryhead->SelectedValue;
            $shc->CalculationGrp = $this->lstType->SelectedValue;
            $shc->GeneratedAmount = number_format($this->txtAmount->Text,2,'.','');
            if($this->lstBased->SelectedValue != 3){
             //delete payslabs
            $payslabs = PaySlabs::LoadArrayBySalaryhead($shc->IdsalaryHead);
            if($payslabs){
                foreach ($payslabs as $payslab){
                    $payslab->Delete();
                }
            }
            }
            if($this->lstBased->SelectedValue != 2){
            //delete calculation
            $cals = Calculation::LoadArrayBySalaryHead($shc->IdsalaryHead);
            if ($cals){
                foreach ($cals as $cal){
                   $cal->Delete(); 
            }
            }
            }
            if($this->lstType->SelectedValue == 1){
                 $shc->BasedSalaryHead = NULL;
                 $shc->Percentage = "0";
            }else{
                 $shc->Percentage = $this->txtPer->Text;   
                 $shc->BasedSalaryHead = $this->lstBased->SelectedValue;
            }     
            $shc->Save();
            
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/employee/salary_head_calculation.php?id='.$shc->IdsalaryHead);
            }else{
                if($this->lstSalaryhead->SelectedValue == NULL){
                    QApplication::DisplayAlert ("Please Select Salary Head !!");
                }else{
                    $shc = new SalaryHead();
                    $shc->SalaryTemplet = $_GET['temp'];
                    $shc->SalaryHead = $this->lstSalaryhead->SelectedValue;
                    $shc->CalculationGrp = $this->lstType->SelectedValue;
                    $shc->AppliedMonth = "0";
                    $shc->Save();
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/employee/salary_head_calculation.php?id='.$shc->IdsalaryHead);
                }    
            }
        }

        protected function btnSave_Click(){
            
            $shc = SalaryHead::LoadByIdsalaryHead($_GET['id']);
            $shc->SalaryHead = $this->lstSalaryhead->SelectedValue;
            $shc->CalculationGrp = $this->lstType->SelectedValue;
            $shc->GeneratedAmount = number_format($this->txtAmount->Text,2,'.','');
            $shc->Percentage = number_format($this->txtPer->Text,2,'.','');
            $shc->BasedSalaryHead = $this->lstBased->SelectedValue;
            $months = NULL;
            for($i=1; $i<=12; $i++){
                if($this->chkMonths[$i]->Checked == 1)$months = $months.$i.',';
            }    
            $shc->AppliedMonth = $months;                  
            $shc->Save();
            $estabs = Establishment::QueryArray(
                      QQ::AndCondition(
                      QQ::Equal(QQN::Establishment()->Employee, $shc->SalaryTempletObject->Employee),
                      QQ::Equal(QQN::Establishment()->SalaryTemplet, $shc->SalaryTempletObject->RefTemplet)        
                              ));
            foreach ($estabs as $estab){}
            if($shc->SalaryHead == 83){
                $estab->BasicSalary = round($shc->GeneratedAmount);
                $estab->Save();
            }
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/employee/member_templet.php?id='.$shc->SalaryTemplet.'&estab='.$shc->SalaryTempletObject->Establishment);
            
        }
        protected function btnDelete_Click(){
            $shc = SalaryHead::LoadByIdsalaryHead($_GET['id']);
            //delete payslabs
            $payslabs = PaySlabs::LoadArrayBySalaryhead($shc->IdsalaryHead);
            if($payslabs){
                foreach ($payslabs as $payslab){
                    $payslab->Delete();
                }
            }
            //delete calculation
             $basedcalcs = Calculation::QueryArray(
                                   QQ::OrCondition(
                                   QQ::Equal(QQN::Calculation()->SalaryHead1, $shc->IdsalaryHead),
                                   QQ::Equal(QQN::Calculation()->SalaryHead2, $shc->IdsalaryHead)        
                                           ));
                    foreach ($basedcalcs as $basedcalc){
                        $basedcalc->Delete();
                    }
            $cals = Calculation::LoadArrayBySalaryHead($shc->IdsalaryHead);
            if ($cals){
                foreach ($cals as $cal){
                   $cal->Delete(); 
            }
            }
            //empty based on
            $baseds = SalaryHead::LoadArrayByBasedSalaryHead($shc->SalaryHead);
            if($baseds){
                foreach ($baseds as $based){
                    $based->BasedSalaryHead = NULL;
                    $based->Save();
                }
            }
            $temp= $shc->SalaryTemplet;
            if(!$payslabs && !$cals && !$baseds)
            $shc->Delete();
            else
            $estabs = Establishment::QueryArray(
                      QQ::AndCondition(
                      QQ::Equal(QQN::Establishment()->Employee, $shc->SalaryTempletObject->Employee),
                      QQ::Equal(QQN::Establishment()->SalaryTemplet, $shc->SalaryTempletObject->RefTemplet)        
                              ));
            foreach ($estabs as $estab){}
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/employee/member_templet.php?id='.$shc->SalaryTemplet.'&estab='.$estab->Idestablishment);
           
        }
        protected function lbldelCal_click(){
            $cal = Calculation::LoadArrayBySalaryHead($_GET['id']);
            $cal[0]->Delete(); 
            
        }
        protected function lbldelPay_click(){
            $payslab = PaySlabs::LoadArrayBySalaryHead($_GET['id']);
            $payslab[0]->Delete(); 
        }
        
        protected function RedirectToListPage() {
            $temp = SalaryTemplet::LoadByCode($this->txtCode->Text);
            $estabs =Establishment::QueryArray(
                        QQ::AndCondition(
                        QQ::Equal(QQN::Establishment()->Employee, $temp->Employee),
                        QQ::Equal(QQN::Establishment()->SalaryTemplet, $temp->RefTemplet)        
                              ));
            foreach ($estabs as $estab){}
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/employee/member_templet.php?id='.$shc->SalaryTemplet.'&estab='.$estab->Idestablishment);
           
        }
        public function btnCancel_Click($strFormId, $strControlId, $strParameter) {
         if(isset($_GET['id'])){
             $shc = SalaryHead::LoadByIdsalaryHead($_GET['id']);
             $estabs = Establishment::QueryArray(
                      QQ::AndCondition(
                      QQ::Equal(QQN::Establishment()->Employee, $shc->SalaryTempletObject->Employee),
                      QQ::Equal(QQN::Establishment()->SalaryTemplet, $shc->SalaryTempletObject->RefTemplet)        
                              ));
            foreach ($estabs as $estab){}
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/employee/member_templet.php?id='.$shc->SalaryTemplet.'&estab='.$estab->Idestablishment);
           
         }else{
              $template = SalaryTemplet::LoadByIdsalaryTemplet($_GET['temp']);  
              $estabs = Establishment::QueryArray(
                        QQ::AndCondition(
                        QQ::Equal(QQN::Establishment()->Employee, $template->Employee),
                        QQ::Equal(QQN::Establishment()->SalaryTemplet, $template->RefTemplet)        
                              ));
                foreach ($estabs as $estab){}
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/employee/member_templet.php?estab='.$estab->Idestablishment.'&id='.$template->IdsalaryTemplet);
           
         }
        
        }       
         
                
    }
    SalaryHeadCalculation::Run('SalaryHeadCalculation');
?>