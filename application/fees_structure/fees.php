<?php

 require_once('../../qcubed.inc.php');
    
    class FeeForm extends QForm {
        protected $lstProgram;
        protected $lstCalyear;
        protected $lstAcadyear;
        protected $lstFeecontype;
        protected $txtseq;
        protected $lstfees;
        protected $txtStudent;
        protected $txtGovt;
        protected $txtseq1;
        protected $lstfees1;
        protected $lstparrent;
        protected $lstparrent1;
        protected $chkon;
        protected $chkoff;
        protected $lbldelete;
        protected $btnAdd;
        protected $btnAdd1;
        protected $btnSearch;
        protected $btnCopyTemplete;
        //copy templet
        protected $lstCalyear1;
        protected $lstProgram1;
        protected $lstAcadyear1;
        protected $lstFeecontype1;
        
        protected function Form_Create() {
            $this->lstProgram = new QSelect2ListBox($this);
            $this->lstProgram->Placeholder = "Course";
            $progs = Role::LoadArrayByGrp(5,(QQ::Clause(QQ::OrderBy(QQN::Role()->Name))));
            foreach ($progs as $prog){
                $this->lstProgram->AddItem(delete_all_between ("[", "]", $prog->Name),$prog->Idrole);
            }
            
            $this->lstAcadyear = new QSelect2ListBox($this);
            $this->lstAcadyear->Placeholder = "Acadmic Year";
            $acadyears = AcademicYear::LoadArrayByParrent(NULL);
            foreach ($acadyears as $acadyear){
                $this->lstAcadyear->AddItem($acadyear->Name,$acadyear->IdacademicYear);
            }
            
            $this->lstCalyear = new QSelect2ListBox($this);
            $this->lstCalyear->Placeholder = "Calender Year";
            $calenders =  CalenderYear::QueryArray(
                            QQ::AndCondition(
                            QQ::Equal(QQN::CalenderYear()->Visible, 1)),
                        (QQ::OrderBy(QQN::CalenderYear()->Name,False)));
                foreach ($calenders as $calender) {
                    $this->lstCalyear->AddItem($calender->Name, $calender->IdcalenderYear);    
                    if($calender->Active == 1){
                        $this->lstCalyear->SelectedValue = $calender->IdcalenderYear;
                    }
                }

            $this->lstFeecontype = new QSelect2ListBox($this);
            $this->lstFeecontype->Placeholder ="Fee Concession Type";
            
            $concessions = FeesConcession::LoadAll();
                foreach ($concessions as $concession){
                    $this->lstFeecontype->AddItem($concession->Name,$concession->IdfeesConcession);
                }
            
            $this->lstProgram1 = new QSelect2ListBox($this);
            $this->lstProgram1->Placeholder = "Course";
            $progs = Role::LoadArrayByGrp(5,(QQ::Clause(QQ::OrderBy(QQN::Role()->Name))));
            foreach ($progs as $prog){
                $this->lstProgram1->AddItem(delete_all_between ("[", "]", $prog->Name),$prog->Idrole);
            }
            
            $this->lstAcadyear1 = new QSelect2ListBox($this);
            $this->lstAcadyear1->Placeholder = "Acadmic Year";
            $acadyears = AcademicYear::LoadArrayByParrent(NULL);
            foreach ($acadyears as $acadyear){
                $this->lstAcadyear1->AddItem($acadyear->Name,$acadyear->IdacademicYear);
            }
            
            $this->lstCalyear1 = new QSelect2ListBox($this);
            $this->lstCalyear1->AddItem("-Select One-",NULL);
            $this->lstCalyear1->Placeholder = "Calender Year";
            $calenders = CalenderYear::LoadAll();
                foreach ($calenders as $calender) {
                    $this->lstCalyear1->AddItem($calender->Name, $calender->IdcalenderYear);    
                }

            $this->lstFeecontype1 = new QSelect2ListBox($this);
            $this->lstFeecontype1->AddItem("-Select One-",NULL);
            $this->lstFeecontype1->Placeholder ="Fee Concession Type";
            
            $concessions = FeesConcession::LoadAll();
                foreach ($concessions as $concession){
                    $this->lstFeecontype1->AddItem($concession->Name,$concession->IdfeesConcession);
                }    
                
            $this->btnSearch = new QButton($this);
            $this->btnSearch->ButtonMode = QButtonMode::Success;
            $this->btnSearch->Text ="Search";
            $this->btnSearch->AddAction(new QClickEvent(), new QServerAction('btnSearch_click'));


            $this->btnCopyTemplete = new QButton($this);
            $this->btnCopyTemplete->ButtonMode = QButtonMode::Warning;
            $this->btnCopyTemplete->Text ="Copy Templete";
            $this->btnCopyTemplete->AddAction(new QClickEvent(), new QServerAction('btnCopyTemplete_click'));

            $this->txtseq = new QTextBox($this);
            $this->txtseq->Placeholder = "Seq";
            $this->txtseq->Width =50;

            $this->lstfees = new QSelect2ListBox($this);
            $this->lstfees->Placeholder = "Fees";
            $this->lstfees->AddItem("-Select One-",NULL);
            $leds = Ledger::LoadArrayByGrp(5454);
            foreach ($leds as $led){
                $this->lstfees->AddItem($led->Name,$led->Idledger);
            }

            $this->lstparrent = new QSelect2ListBox($this);
            $this->lstparrent->AddItem("-Select One-",NULL);


            $this->btnAdd = new QButton($this);
            $this->btnAdd->ButtonMode = QButtonMode::Add;
            $this->btnAdd->AddAction(new QClickEvent(), new QServerAction('btnAdd_Click'));


            if(isset($_GET['acdyear']) && isset($_GET['cal']) && isset($_GET['prog']) && isset($_GET['concession'])){
                    $fees1 = Fees::QueryArray(
                                QQ::AndCondition(
                                    QQ::Equal(QQN::Fees()->AcademicYear, $_GET['acdyear']),
                                    QQ::Equal(QQN::Fees()->CalenderYear, $_GET['cal']),
                                    QQ::Equal(QQN::Fees()->Course, $_GET['prog']),
                                    QQ::Equal(QQN::Fees()->Category, $_GET['concession']),
                                    QQ::Equal(QQN::Fees()->Parrent, NULL)
                                  
                                )
                            );
                    if($fees1){
                        foreach ($fees1 as $fee1){
                            $this->lstparrent->AddItem($fee1->FeeObject->Name, $fee1->IdfeesTemplet);
                        }
                    }

                $this->lstAcadyear->SelectedValue = $_GET['acdyear'];
                $this->lstCalyear->SelectedValue = $_GET['cal'];
                $this->lstProgram->SelectedValue = $_GET['prog'];
                $this->lstFeecontype->SelectedValue = $_GET['concession'];
                
                $this->lstAcadyear1->SelectedValue = $_GET['acdyear'];
                $this->lstProgram1->SelectedValue = $_GET['prog'];

                $fees = Fees::QueryArray(
                            QQ::AndCondition(
                               QQ::Equal(QQN::Fees()->AcademicYear, $_GET['acdyear']),
                               QQ::Equal(QQN::Fees()->CalenderYear, $_GET['cal']),
                               QQ::Equal(QQN::Fees()->Course, $_GET['prog']),
                               QQ::Equal(QQN::Fees()->Category, $_GET['concession'])
                            )
                        );
                 if($fees){
                     foreach ($fees as $fee){
                        $this->lbldelete[$fee->IdfeesTemplet] = new QLabel($this);
                        $this->lbldelete[$fee->IdfeesTemplet]->HtmlEntities = FALSE;
                        $this->lbldelete[$fee->IdfeesTemplet]->Text = "<img src=".__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__."/delete.png />";
                        $this->lbldelete[$fee->IdfeesTemplet]->AddAction(new QClickEvent(), new QServerAction("lbldelete_Click"));
                        $this->lbldelete[$fee->IdfeesTemplet]->ActionParameter = $fee->IdfeesTemplet;

                        $this->txtseq1[$fee->IdfeesTemplet] = new QTextBox($this);
                        $this->txtseq1[$fee->IdfeesTemplet]->Width = 50; 
                        $this->txtseq1[$fee->IdfeesTemplet]->Placeholder = 'Seq';                    
                        $this->txtseq1[$fee->IdfeesTemplet]->AddAction(new QFocusOutEvent(), new QServerAction('txtseq1_Enter'));
                        $this->txtseq1[$fee->IdfeesTemplet]->ActionParameter = $fee->IdfeesTemplet;
                        $this->txtseq1[$fee->IdfeesTemplet]->Text = $fee->Seq;

                        $this->txtStudent[$fee->IdfeesTemplet] = new QTextBox($this);
                        $this->txtStudent[$fee->IdfeesTemplet]->Width = 90; 
                        $this->txtStudent[$fee->IdfeesTemplet]->Placeholder = 'Stud.Amt';                    
                        $this->txtStudent[$fee->IdfeesTemplet]->AddAction(new QFocusOutEvent(), new QServerAction('Enter'));
                        $this->txtStudent[$fee->IdfeesTemplet]->ActionParameter = $fee->IdfeesTemplet;
                        $this->txtStudent[$fee->IdfeesTemplet]->Text = $fee->AdmitAmt;

                        $this->txtGovt[$fee->IdfeesTemplet] = new QTextBox($this);
                        $this->txtGovt[$fee->IdfeesTemplet]->Width = 90; 
                        $this->txtGovt[$fee->IdfeesTemplet]->Placeholder = 'Gov.Amt';                    
                        $this->txtGovt[$fee->IdfeesTemplet]->AddAction(new QFocusOutEvent(), new QServerAction("Enter"));
                        $this->txtGovt[$fee->IdfeesTemplet]->ActionParameter = $fee->IdfeesTemplet;
                        $this->txtGovt[$fee->IdfeesTemplet]->Text = $fee->GovAmt;

                        $this->chkon[$fee->IdfeesTemplet] = new QCheckBox($this);
                        $this->chkon[$fee->IdfeesTemplet]->Width = 90; 
                        $this->chkon[$fee->IdfeesTemplet]->AddAction(new QClickEvent(), new QServerAction("Checked"));
                        $this->chkon[$fee->IdfeesTemplet]->ActionParameter = $fee->IdfeesTemplet;
                        $this->chkon[$fee->IdfeesTemplet]->Checked = $fee->OnAdmission;

                        $this->chkoff[$fee->IdfeesTemplet] = new QCheckBox($this);
                        $this->chkoff[$fee->IdfeesTemplet]->Width = 90; 
                        $this->chkoff[$fee->IdfeesTemplet]->AddAction(new QClickEvent(), new QServerAction("Checked"));
                        $this->chkoff[$fee->IdfeesTemplet]->ActionParameter = $fee->IdfeesTemplet;
                        $this->chkoff[$fee->IdfeesTemplet]->Checked = $fee->AfterDueDate;

                        $this->lstparrent1[$fee->IdfeesTemplet] = new QSelect2ListBox($this);
                        $this->lstparrent1[$fee->IdfeesTemplet]->Width = 200; 
                        $this->lstparrent1[$fee->IdfeesTemplet]->AddItem('-Select One-',NULL); 

                        $fees1 = Fees::QueryArray(
                            QQ::AndCondition(
                               QQ::Equal(QQN::Fees()->AcademicYear, $_GET['acdyear']),
                               QQ::Equal(QQN::Fees()->CalenderYear, $_GET['cal']),
                               QQ::Equal(QQN::Fees()->Course, $_GET['prog']),
                               QQ::Equal(QQN::Fees()->Category, $_GET['concession']),
                               QQ::Equal(QQN::Fees()->Parrent, NULL)
                            )
                            );
                        if($fees1){
                            foreach ($fees1 as $fee1){
                                $this->lstparrent1[$fee->IdfeesTemplet]->AddItem($fee1->FeeObject->Name,$fee1->IdfeesTemplet);
                            }
                        }
                        $this->lstparrent1[$fee->IdfeesTemplet]->AddAction(new QClickEvent(), new QServerAction("lstparrent1_Click"));
                        $this->lstparrent1[$fee->IdfeesTemplet]->ActionParameter = $fee->IdfeesTemplet;
                        $this->lstparrent1[$fee->IdfeesTemplet]->SelectedValue = $fee->Parrent;
                    }
                 }
            }
                
        }
        public function btnSearch_click(){
            if($this->lstCalyear->SelectedValue != NULL && $this->lstProgram->SelectedValue != NULL && $this->lstAcadyear->SelectedValue != NULL && $this->lstFeecontype->SelectedValue != NULL ){
                QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__."/fees_structure/fees.php?cal=".$this->lstCalyear->SelectedValue."&prog=".$this->lstProgram->SelectedValue."&acdyear=".$this->lstAcadyear->SelectedValue."&concession=".$this->lstFeecontype->SelectedValue);
            }
        }
        protected function btnCopyTemplete_click(){
            if($this->lstCalyear1->SelectedValue!= NULL && $this->lstAcadyear1->SelectedValue != NULL && $this->lstProgram1->SelectedValue != NULL && $this->lstFeecontype1->SelectedValue != NULL ){
                $copyfees =  Fees::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::Fees()->AcademicYear,$this->lstAcadyear1->SelectedValue),
                                QQ::Equal(QQN::Fees()->CalenderYear, $this->lstCalyear1->SelectedValue),
                                QQ::Equal(QQN::Fees()->Course, $this->lstProgram1->SelectedValue),
                                QQ::Equal(QQN::Fees()->Category, $this->lstFeecontype1->SelectedValue)
                            ));

                if($copyfees){
                    foreach ($copyfees as $copyfee){
                    
                        $chkfees =  Fees::QueryArray(
                                    QQ::AndCondition(
                                        QQ::Equal(QQN::Fees()->AcademicYear,$this->lstAcadyear->SelectedValue),
                                        QQ::Equal(QQN::Fees()->CalenderYear, $this->lstCalyear->SelectedValue),
                                        QQ::Equal(QQN::Fees()->Course, $this->lstProgram->SelectedValue),
                                        QQ::Equal(QQN::Fees()->Category, $this->lstFeecontype->SelectedValue),
                                        QQ::Equal(QQN::Fees()->Fee, $copyfee->Fee)    
                                    ));

                        if($chkfees){
                            foreach ($chkfees as $chkfee){}
                           
                        }else{    
                            $fee = new Fees();
                            $fee->AcademicYear = $this->lstAcadyear->SelectedValue;
                            $fee->CalenderYear = $this->lstCalyear->SelectedValue;
                            $fee->Course = $this->lstProgram->SelectedValue;
                            $fee->Category = $this->lstFeecontype->SelectedValue; 
                            $fee->Fee = $copyfee->Fee;
                            $fee->Seq = $copyfee->Seq;
                            if($copyfee->Parrent){
                                $chkparrentfees =  Fees::QueryArray(
                                        QQ::AndCondition(
                                            QQ::Equal(QQN::Fees()->AcademicYear,$this->lstAcadyear->SelectedValue),
                                            QQ::Equal(QQN::Fees()->CalenderYear, $this->lstCalyear->SelectedValue),
                                            QQ::Equal(QQN::Fees()->Course, $this->lstProgram->SelectedValue),
                                            QQ::Equal(QQN::Fees()->Category, $this->lstFeecontype->SelectedValue),
                                            QQ::Equal(QQN::Fees()->Fee, $copyfee->ParrentObject->Fee)    
                                        ));
                                if($chkparrentfees){
                                    foreach($chkparrentfees as $chkparrentfee){}
                                    $fee->Parrent = $chkparrentfee->IdfeesTemplet;
                                }else{
                                    $fee->Parrent = NULL;
                                }
                            }else{
                                $fee->Parrent = NULL;
                            }
                            $fee->GovAmt = $copyfee->GovAmt;
                            $fee->AdmitAmt = $copyfee->AdmitAmt;
                            $fee->Save();
                        }
                    }
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__."/fees_structure/fees.php?cal=".$this->lstCalyear->SelectedValue."&prog=".$this->lstProgram->SelectedValue."&acdyear=".$this->lstAcadyear->SelectedValue."&concession=".$this->lstFeecontype->SelectedValue);
                    
                }else{
                    QApplication::DisplayAlert("Templet Not Available for Copy");
                }
            }
        }

        public function btnAdd_Click(){
            if($this->lstCalyear->SelectedValue!= NULL && $this->lstAcadyear->SelectedValue != NULL && $this->lstProgram->SelectedValue != NULL && $this->lstFeecontype->SelectedValue != NULL && $this->lstfees->SelectedValue != NULL ){
                $fees =  Fees::QueryArray(
                        QQ::AndCondition(
                                QQ::Equal(QQN::Fees()->AcademicYear,$this->lstAcadyear->SelectedValue),
                                QQ::Equal(QQN::Fees()->CalenderYear, $this->lstCalyear->SelectedValue),
                                QQ::Equal(QQN::Fees()->Course, $this->lstProgram->SelectedValue),
                                QQ::Equal(QQN::Fees()->Category, $this->lstFeecontype->SelectedValue),
                                QQ::Equal(QQN::Fees()->Fee, $this->lstfees->SelectedValue)));

                if($fees){
                    foreach ($fees as $fee){}
                }else{
                    $fee = new Fees();
                    $fee->AcademicYear = $this->lstAcadyear->SelectedValue;
                    $fee->CalenderYear = $this->lstCalyear->SelectedValue;
                    $fee->Course = $this->lstProgram->SelectedValue;
                    $fee->Category = $this->lstFeecontype->SelectedValue; 

                }
                $fee->Fee = $this->lstfees->SelectedValue;
                $fee->Seq = $this->txtseq->Text;
                $fee->Parrent = $this->lstparrent->SelectedValue;
                $fee->Save();
                QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__."/fees_structure/fees.php?cal=".$this->lstCalyear->SelectedValue."&prog=".$this->lstProgram->SelectedValue."&acdyear=".$this->lstAcadyear->SelectedValue."&concession=".$this->lstFeecontype->SelectedValue);
            }else{
                QApplication::DisplayAlert("Select proper");
            }  
         }
         public function Enter($strFormId, $strControlId, $strParameter){            
            $fee = Fees::LoadByIdfeesTemplet($strParameter); 
                if($this->txtStudent[$strParameter]->Text != ''){ 
                    $fee->AdmitAmt = $this->txtStudent[$strParameter]->Text;
                }else{
                    $fee->AdmitAmt = NULL; 
                }
                if($this->txtGovt[$strParameter]->Text != ''){
                   $fee->GovAmt = $this->txtGovt[$strParameter]->Text;
                }else{
                    $fee->GovAmt = NULL; 
                }
                
                $fee->Save();
        }
        public function Checked($strFormId, $strControlId, $strParameter){
            $fee = Fees::LoadByIdfeesTemplet($strParameter); 
            if($this->chkon[$fee->IdfeesTemplet]->Checked == TRUE){
                    $this->chkoff[$fee->IdfeesTemplet]->Checked == FALSE;
                }elseif ($this->chkoff[$fee->IdfeesTemplet]->Checked == TRUE) {
                    $this->chkon[$fee->IdfeesTemplet]->Checked == FALSE;
                }
                if($this->chkon[$strParameter]->Checked == TRUE){ 
                    $fee->OnAdmission = $this->chkon[$strParameter]->Checked;
                    $fee->OnAdmission =1;
                }else{
                    $fee->OnAdmission = 0;
                }
                if($this->chkon[$strParameter]->Checked == TRUE){ 
                    $fee->AfterDueDate = $this->chkoff[$strParameter]->Checked;
                    $fee->OnAdmission =1;
                }else {
                    $fee->OnAdmission = 0;
                }
               $fee->Save();
         }
        public function lstparrent1_Click($strFormId, $strControlId, $strParameter){
            $fee = Fees::LoadByIdfeesTemplet($strParameter);
            //if($this->lstparrent1[$strParameter]->SelectedValue != NULL){
                $fee->Parrent = $this->lstparrent1[$strParameter]->SelectedValue;
            //}
            $fee->Save();
              
        }
        public function txtseq1_Enter($strFormId, $strControlId, $strParameter){
            $fee = Fees::LoadByIdfeesTemplet($strParameter);
                if($this->txtseq1[$strParameter]->Text != ''){
                    $fee->Seq = $this->txtseq1[$strParameter]->Text;
                }
               $fee->Save();
        }
        public function lbldelete_Click($strFormId, $strControlId, $strParameter){
              $fee = Fees::LoadByIdfeesTemplet($strParameter);
              $fee->Delete();
              QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__."/fees_structure/fees.php?cal=".$this->lstCalyear->SelectedValue."&prog=".$this->lstProgram->SelectedValue."&acdyear=".$this->lstAcadyear->SelectedValue."&concession=".$this->lstFeecontype->SelectedValue);
        }
    }
    FeeForm::Run('FeeForm');
?>


