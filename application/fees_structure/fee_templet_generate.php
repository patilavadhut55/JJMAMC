<?php
	require('../../qcubed.inc.php');

	class MemberListForm extends QForm {
            protected $btnShow;
            protected $lstCourse;
            protected $lstcast;
            protected $lstYear;
            protected $btnGenerate;
            protected $txtStudTuition;
            protected $txtGovtTuition;
            
            protected $txtStudDev;
            protected $txtGovtDev;
            protected $btnSave;
            protected function Form_Run() {
			parent::Form_Run();
			QApplication::CheckRemoteAdmin();		    
            }
            
            protected function Form_Create() {
                    parent::Form_Create();
                    
                    $this->lstYear = new QListBox($this);
                    $this->lstYear->Name = "year";
                    $this->lstYear->AddItem('-Select One-', NULL);
                    $progs = CalenderYear::QueryArray(
                                QQ::All(),
                                QQ::OrderBy(QQN::CalenderYear()->Sequence)
                            );
                    foreach ($progs as $prog){
                        $this->lstYear->AddItem($prog->Name,$prog->IdcalenderYear);
                    }
                    
                    $this->btnGenerate = new QButton($this);
                    $this->btnGenerate->Text = "Generate";
                    $this->btnGenerate->ButtonMode = QButtonMode::Success;
                    $this->btnGenerate->AddAction(new QClickEvent(), new QConfirmAction('Do you really want generate this'));  
                    $this->btnGenerate->AddAction(new QClickEvent(), new QAjaxAction('btnGenerate_Click'));  
                    
                    
                    $this->btnSave = new QButton($this);
                    $this->btnSave->Text = "Save All";
                    $this->btnSave->ButtonMode = QButtonMode::Success;                    
                    $this->btnSave->AddAction(new QClickEvent(), new QServerAction('btnSave_Click'));  
                    
                    
                    $this->lstCourse = new QListBox($this);
                    $this->lstCourse->Name = "Course";
                    $this->lstCourse->AddItem('-Select One-', NULL);
                    $progs = Role::LoadArrayByGrp(5,(QQ::Clause(QQ::OrderBy(QQN::Role()->Name))));
                    foreach ($progs as $prog){
                        $this->lstCourse->AddItem(delete_all_between ("[", "]", $prog->Name),$prog->Idrole);
                    }
                    
                    $this->lstcast = new QListBox($this);
                    $this->lstcast->Name = "Cast";
                    $this->lstcast->AddItem("-Select Cast-", NULL);
                    $casts = FeesConcession::LoadAll();
                    foreach ($casts as $cast) {
                        $this->lstcast->AddItem($cast->Name, $cast->IdfeesConcession);
                    }
                    if(isset($_GET['course'])){
                        $this->lstCourse->SelectedValue = $_GET['course'];
                    }

                    if(isset($_GET['cast'])){
                            $this->lstcast->SelectedValue = $_GET['cast'];
                    }
                        $cals = CalenderYear::QueryArray(            
                            QQ::All(),
                            QQ::Clause(
                                QQ::OrderBy(QQN::CalenderYear()->Sequence)    
                            )
                        );
                    if($cals && isset($_GET['course'])){
                        foreach ($cals as $cal){
                            $academicyears = AcademicYear::QueryArray(
                                QQ::AndCondition(
                                    QQ::Equal(QQN::AcademicYear()->Parrent, NULL)
                                )
                            );
                            foreach($academicyears as $academicyear){
                                $tut = Fees::QuerySingle(
                                    QQ::AndCondition(
                                        QQ::Equal(QQN::Fees()->Category, $this->lstcast->SelectedValue ),
                                        QQ::Equal(QQN::Fees()->Course, $_GET['course']),                            
                                        QQ::Equal(QQN::Fees()->AcademicYear,$academicyear->IdacademicYear),
                                        QQ::Equal(QQN::Fees()->CalenderYear,$cal->IdcalenderYear),
                                        QQ::Equal(QQN::Fees()->Fee,10288)
                                    ),
                                    QQ::Clause(
                                        QQ::Sum(QQN::Fees()->AdmitAmt, "stud_amt"),
                                        QQ::Sum(QQN::Fees()->GovAmt, "govt_amt")
                                    )                        
                                );
                                
                                
                                $dep = Fees::QuerySingle(
                                    QQ::AndCondition(
                                        QQ::Equal(QQN::Fees()->Category, $this->lstcast->SelectedValue ),
                                        QQ::Equal(QQN::Fees()->Course, $_GET['course']),                            
                                        QQ::Equal(QQN::Fees()->AcademicYear,$academicyear->IdacademicYear),
                                        QQ::Equal(QQN::Fees()->CalenderYear,$cal->IdcalenderYear),
                                        QQ::Equal(QQN::Fees()->Fee,10289)
                                    ),
                                    QQ::Clause(
                                        QQ::Sum(QQN::Fees()->AdmitAmt, "stud_amt"),
                                        QQ::Sum(QQN::Fees()->GovAmt, "govt_amt")
                                    )                        
                                );
                                
                                $this->txtStudTuition[$cal->IdcalenderYear][$academicyear->IdacademicYear] = new QTextBox($this);
                                $this->txtStudTuition[$cal->IdcalenderYear][$academicyear->IdacademicYear]->Width = 70;
                                $this->txtStudTuition[$cal->IdcalenderYear][$academicyear->IdacademicYear]->Text = $tut->GetVirtualAttribute("stud_amt");
                                $this->txtStudTuition[$cal->IdcalenderYear][$academicyear->IdacademicYear]->ToolTip = $tut->GetVirtualAttribute("stud_amt");
                                
                                $this->txtGovtTuition[$cal->IdcalenderYear][$academicyear->IdacademicYear] = new QTextBox($this);
                                $this->txtGovtTuition[$cal->IdcalenderYear][$academicyear->IdacademicYear]->Width = 70;
                                $this->txtGovtTuition[$cal->IdcalenderYear][$academicyear->IdacademicYear]->Text = $tut->GetVirtualAttribute("govt_amt");
                                $this->txtGovtTuition[$cal->IdcalenderYear][$academicyear->IdacademicYear]->ToolTip = $tut->GetVirtualAttribute("govt_amt");
                                
                                $this->txtStudDev[$cal->IdcalenderYear][$academicyear->IdacademicYear] = new QTextBox($this);
                                $this->txtStudDev[$cal->IdcalenderYear][$academicyear->IdacademicYear]->Width = 70;
                                $this->txtStudDev[$cal->IdcalenderYear][$academicyear->IdacademicYear]->Text = $dep->GetVirtualAttribute("stud_amt");
                                $this->txtStudDev[$cal->IdcalenderYear][$academicyear->IdacademicYear]->ToolTip = $dep->GetVirtualAttribute("stud_amt");
                                $this->txtGovtDev[$cal->IdcalenderYear][$academicyear->IdacademicYear] = new QTextBox($this);
                                $this->txtGovtDev[$cal->IdcalenderYear][$academicyear->IdacademicYear]->Width = 70;
                                $this->txtGovtDev[$cal->IdcalenderYear][$academicyear->IdacademicYear]->Text = $dep->GetVirtualAttribute("govt_amt");
                                $this->txtGovtDev[$cal->IdcalenderYear][$academicyear->IdacademicYear]->ToolTip = $dep->GetVirtualAttribute("govt_amt");
                            }
                        }
                    }
                    
                    $this->btnShow = new QButton($this);
                    $this->btnShow->Text = "Report";
                    $this->btnShow->ButtonMode = QButtonMode::Primary;
                    $this->btnShow->AddAction(new QClickEvent(), new QAjaxAction('Report'));    
            }
               
            protected function btnSave_Click(){
                    $cals = CalenderYear::QueryArray(            
                            QQ::All(),
                            QQ::Clause(
                                QQ::OrderBy(QQN::CalenderYear()->Sequence)    
                            )
                        );
                    if($cals){
                        foreach ($cals as $cal){  
                            $academicyears = AcademicYear::QueryArray(
                                QQ::AndCondition(
                                    QQ::Equal(QQN::AcademicYear()->Parrent, NULL)
                                )
                            );
                            foreach($academicyears as $academicyear){       
                                $tuts = 0;
                                $tuts = Fees::QueryArray(
                                    QQ::AndCondition(
                                        QQ::Equal(QQN::Fees()->Category, $this->lstcast->SelectedValue),
                                        QQ::Equal(QQN::Fees()->Course, $_GET['course']),                            
                                        QQ::Equal(QQN::Fees()->AcademicYear,$academicyear->IdacademicYear),
                                        QQ::Equal(QQN::Fees()->CalenderYear,$cal->IdcalenderYear),
                                        QQ::Equal(QQN::Fees()->Fee,10288)
                                    ),
                                    QQ::Clause(
                                        QQ::Sum(QQN::Fees()->AdmitAmt, "stud_amt"),
                                        QQ::Sum(QQN::Fees()->GovAmt, "govt_amt")
                                    )                        
                                );
                                
                                if($tuts){
                                    foreach ($tuts as $tut){
                                        $tut->AdmitAmt = $this->txtStudTuition[$cal->IdcalenderYear][$academicyear->IdacademicYear]->Text;
                                        $tut->GovAmt = $this->txtGovtTuition[$cal->IdcalenderYear][$academicyear->IdacademicYear]->Text;
                                        $tut->Save();
                                    }
                                    $tuts = 0;
                                    if($cal->IdcalenderYear == 14){
                                        //QApplication::DisplayAlert("Saved tuition1 Successfully.".$tut->IdfeesTemplet);
                                    }
                                }else{
                                    if($this->txtStudTuition[$cal->IdcalenderYear][$academicyear->IdacademicYear]->Text != ""){
                                        $tut = new Fees();
                                        $tut->AcademicYear = $academicyear->IdacademicYear;
                                        $tut->CalenderYear = $cal->IdcalenderYear;
                                        $tut->Course = $_GET['course'];
                                        $tut->Category = $this->lstcast->SelectedValue; 
                                        $tut->Fee = 10288;
                                        $tut->Seq = 1;
                                        $tut->Parrent = "";
                                        $tut->AdmitAmt = $this->txtStudTuition[$cal->IdcalenderYear][$academicyear->IdacademicYear]->Text;
                                        $tut->GovAmt = $this->txtGovtTuition[$cal->IdcalenderYear][$academicyear->IdacademicYear]->Text;
                                        $tut->Save();
                                        //QApplication::DisplayAlert("Saved tuition Successfully.");
                                    }
                                }
                                
                                $deps = 0;
                                $deps = Fees::QueryArray(
                                    QQ::AndCondition(
                                        QQ::Equal(QQN::Fees()->Category, $this->lstcast->SelectedValue),
                                        QQ::Equal(QQN::Fees()->Course, $_GET['course']),                            
                                        QQ::Equal(QQN::Fees()->AcademicYear,$academicyear->IdacademicYear),
                                        QQ::Equal(QQN::Fees()->CalenderYear,$cal->IdcalenderYear),
                                        QQ::Equal(QQN::Fees()->Fee,10289)
                                    ),
                                    QQ::Clause(
                                        QQ::Sum(QQN::Fees()->AdmitAmt, "stud_amt"),
                                        QQ::Sum(QQN::Fees()->GovAmt, "govt_amt")
                                    )                        
                                );  
                                
                                if($deps){
                                    foreach ($deps as $dep){
                                        $dep->AdmitAmt = $this->txtStudDev[$cal->IdcalenderYear][$academicyear->IdacademicYear]->Text;
                                        $dep->GovAmt = $this->txtGovtDev[$cal->IdcalenderYear][$academicyear->IdacademicYear]->Text;
                                        $dep->Save();
                                    }
                                    $deps = 0;
                                    if($cal->IdcalenderYear == 14){
                                        //QApplication::DisplayAlert("Saved Dev1 Successfully.".$tut->IdfeesTemplet);
                                    }
                                    //QApplication::DisplayAlert("Saved Dev1 Successfully.");
                                }else{
                                    if($this->txtStudDev[$cal->IdcalenderYear][$academicyear->IdacademicYear]->Text != ""){
                                        $dep = new Fees();
                                        $dep->AcademicYear = $academicyear->IdacademicYear;
                                        $dep->CalenderYear = $cal->IdcalenderYear;
                                        $dep->Course = $_GET['course'];
                                        $dep->Category = $this->lstcast->SelectedValue; 
                                        $dep->Fee = 10289;
                                        $dep->Seq = 2;
                                        $dep->Parrent = "";
                                        $dep->AdmitAmt = $this->txtStudDev[$cal->IdcalenderYear][$academicyear->IdacademicYear]->Text;
                                        $dep->GovAmt = $this->txtGovtDev[$cal->IdcalenderYear][$academicyear->IdacademicYear]->Text;
                                        $dep->Save();
                                        //QApplication::DisplayAlert("Saved Dev Successfully.");
                                    }
                                }
                            }
                        }
                    }
                    QApplication::DisplayAlert("Saved Successfully.");
                    
            }
            
            protected function btnGenerate_Click(){
                if($this->lstYear->SelectedValue != NULL){                    
                    $cals = CalenderYear::QueryArray(
                                QQ::AndCondition(
                                    QQ::Equal(QQN::CalenderYear()->IdcalenderYear, $this->lstYear->SelectedValue)
                                )
                            );
                }else{
                    $cals = CalenderYear::QueryArray(
                                QQ::AndCondition(
                                    QQ::All()
                                ),
                                QQ::Clause(
                                    QQ::OrderBy(QQN::CalenderYear()->Sequence)                                            
                                )                                                     
                            );
                }      
                foreach ($cals as $cal){
                        $fees = Fees::QueryArray(
                        QQ::AndCondition(
                                QQ::Equal(QQN::Fees()->Category, $this->lstcast->SelectedValue),
                                QQ::Equal(QQN::Fees()->Course, $_GET['course']),                                
                                QQ::Equal(QQN::Fees()->AcademicYear,1),
                                QQ::Equal(QQN::Fees()->CalenderYear,$cal->IdcalenderYear)
                            )
                        );
                    
                        if($fees){

                    $tution =$studtutper = $studdevper = $govttutper = $govtdevper = $dev = $total1 = $total2 = $amt = $amt1 = $amt2 = 0;                    
                    foreach ($fees as $fee) {
                        $studperamt = 0;
                        $govtperamt = 0;
                        if($cal->Approved == TRUE){
                            $studperamt = ($fee->AdmitAmt * ($cal->FeePercentage))/100; 
                            $govtperamt = ($fee->GovAmt *($cal->FeePercentage))/100;
                        }
                        
                        if($fee->Fee == 10288){
                            $studtutper = round($fee->AdmitAmt + $studperamt);            
                            $govttutper = round($fee->GovAmt + $govtperamt);            
                            $tution = ceil($fee->AdmitAmt + $fee->GovAmt);                            
                        }

                        if($fee->Fee == 10289){
                            $studdevper = round($fee->AdmitAmt + $studperamt);
                            $govtdevper = round($fee->GovAmt + $govtperamt);
                            $dev = ceil($fee->AdmitAmt + $fee->GovAmt);
                        }
                        
                        
                        
                        $academicyears = AcademicYear::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::AcademicYear()->Parrent, NULL)
                            )
                        );
                        foreach ($academicyears as $academicyear){    
                            $chktut = Fees::QuerySingle(
                                    QQ::AndCondition(
                                        QQ::Equal(QQN::Fees()->Category, $this->lstcast->SelectedValue ),
                                        QQ::Equal(QQN::Fees()->Course, $_GET['course']),                            
                                        QQ::Equal(QQN::Fees()->AcademicYear,$academicyear->IdacademicYear),
                                        QQ::Equal(QQN::Fees()->CalenderYear,$cal->IdcalenderYear),
                                        QQ::Equal(QQN::Fees()->Fee,10288)
                                    )                        
                                );
                            
                            if(!$chktut){
                                $tut = new Fees();
                                $tut->AcademicYear = $academicyear->IdacademicYear;
                                $tut->CalenderYear = $cal->IdcalenderYear;
                                $tut->Course = $_GET['course'];
                                $tut->Category = $this->lstcast->SelectedValue; 
                                $tut->Fee = 10288;
                                $tut->Seq = 1;
                                $tut->Parrent = "";
                                $tut->Save();
                            }
                                $dep = Fees::QuerySingle(
                                    QQ::AndCondition(
                                        QQ::Equal(QQN::Fees()->Category, $this->lstcast->SelectedValue ),
                                        QQ::Equal(QQN::Fees()->Course, $_GET['course']),                            
                                        QQ::Equal(QQN::Fees()->AcademicYear,$academicyear->IdacademicYear),
                                        QQ::Equal(QQN::Fees()->CalenderYear,$cal->IdcalenderYear),
                                        QQ::Equal(QQN::Fees()->Fee,10289)
                                    )                    
                                );  
                            if(!$dep){
                                $dep = new Fees();
                                $dep->AcademicYear = $academicyear->IdacademicYear;
                                $dep->CalenderYear = $cal->IdcalenderYear;
                                $dep->Course = $_GET['course'];
                                $dep->Category = $this->lstcast->SelectedValue; 
                                $dep->Fee = 10289;
                                $dep->Seq = 2;
                                $dep->Parrent = "";
                                $dep->Save();
                            }
                            
                            
                        }
                    }
                    
                    
                    
                        // 2nd year
                        $tut = Fees::QuerySingle(
                            QQ::AndCondition(
                                QQ::Equal(QQN::Fees()->Category, $this->lstcast->SelectedValue ),
                                QQ::Equal(QQN::Fees()->Course, $_GET['course']),                            
                                QQ::Equal(QQN::Fees()->AcademicYear,4),
                                QQ::Equal(QQN::Fees()->CalenderYear,$cal->IdcalenderYear),
                                QQ::Equal(QQN::Fees()->Fee,10288)
                            ),
                            QQ::Clause(
                                QQ::Sum(QQN::Fees()->AdmitAmt, "stud_amt"),
                                QQ::Sum(QQN::Fees()->GovAmt, "govt_amt")
                            )                        
                        );
                
                        
                        $dep = Fees::QuerySingle(
                            QQ::AndCondition(
                                QQ::Equal(QQN::Fees()->Category, $this->lstcast->SelectedValue ),
                                QQ::Equal(QQN::Fees()->Course, $_GET['course']),                            
                                QQ::Equal(QQN::Fees()->AcademicYear,4),
                                QQ::Equal(QQN::Fees()->CalenderYear,$cal->IdcalenderYear),
                                QQ::Equal(QQN::Fees()->Fee,10289)
                            ),
                            QQ::Clause(
                                QQ::Sum(QQN::Fees()->AdmitAmt, "stud_amt"),
                                QQ::Sum(QQN::Fees()->GovAmt, "govt_amt")
                            )                  
                        );  
                        if($tut){
                            $tut->AdmitAmt = $studtutper;
                            $tut->GovAmt = $govttutper;
                            $tut->Save();
                        }
                        if($dep){
                            $dep->AdmitAmt = $studdevper;
                            $dep->GovAmt = $govtdevper;
                            $dep->Save();
                        }
                        //-----------------------
                        // 3rd year
                        $tut = Fees::QuerySingle(
                            QQ::AndCondition(
                                QQ::Equal(QQN::Fees()->Category, $this->lstcast->SelectedValue ),
                                QQ::Equal(QQN::Fees()->Course, $_GET['course']),                            
                                QQ::Equal(QQN::Fees()->AcademicYear,7),
                                QQ::Equal(QQN::Fees()->CalenderYear,$cal->IdcalenderYear),
                                QQ::Equal(QQN::Fees()->Fee,10288)
                            ),
                            QQ::Clause(
                                QQ::Sum(QQN::Fees()->AdmitAmt, "stud_amt"),
                                QQ::Sum(QQN::Fees()->GovAmt, "govt_amt")
                            )                        
                        );
        
                        
                        $dep = Fees::QuerySingle(
                            QQ::AndCondition(
                                QQ::Equal(QQN::Fees()->Category, $this->lstcast->SelectedValue ),
                                QQ::Equal(QQN::Fees()->Course, $_GET['course']),                            
                                QQ::Equal(QQN::Fees()->AcademicYear,7),
                                QQ::Equal(QQN::Fees()->CalenderYear,$cal->IdcalenderYear),
                                QQ::Equal(QQN::Fees()->Fee,10289)
                            ),
                            QQ::Clause(
                                QQ::Sum(QQN::Fees()->AdmitAmt, "stud_amt"),
                                QQ::Sum(QQN::Fees()->GovAmt, "govt_amt")
                            )                  
                        );  
                        
                        if($tut){
                            $tut->AdmitAmt = $studtutper;
                            $tut->GovAmt = $govttutper;
                            $tut->Save();
                        }
                        if($dep){
                            $dep->AdmitAmt = $studdevper;
                            $dep->GovAmt = $govtdevper;
                            $dep->Save();
                        }
                        
                        //-----------------
                        // 4th year

                        $tut = Fees::QuerySingle(
                            QQ::AndCondition(
                                QQ::Equal(QQN::Fees()->Category, $this->lstcast->SelectedValue ),
                                QQ::Equal(QQN::Fees()->Course, $_GET['course']),                            
                                QQ::Equal(QQN::Fees()->AcademicYear,10),
                                QQ::Equal(QQN::Fees()->CalenderYear,$cal->IdcalenderYear),
                                QQ::Equal(QQN::Fees()->Fee,10288)
                            ),
                            QQ::Clause(
                                QQ::Sum(QQN::Fees()->AdmitAmt, "stud_amt"),
                                QQ::Sum(QQN::Fees()->GovAmt, "govt_amt")
                            )                        
                        );
        
                        
                        $dep = Fees::QuerySingle(
                            QQ::AndCondition(
                                QQ::Equal(QQN::Fees()->Category, $this->lstcast->SelectedValue ),
                                QQ::Equal(QQN::Fees()->Course, $_GET['course']),                            
                                QQ::Equal(QQN::Fees()->AcademicYear,10),
                                QQ::Equal(QQN::Fees()->CalenderYear,$cal->IdcalenderYear),
                                QQ::Equal(QQN::Fees()->Fee,10289)
                            ),
                            QQ::Clause(
                                QQ::Sum(QQN::Fees()->AdmitAmt, "stud_amt"),
                                QQ::Sum(QQN::Fees()->GovAmt, "govt_amt")
                            )                  
                        );  
                        if($tut){
                            $tut->AdmitAmt = round($studtutper +(($studtutper)/2));
                            $tut->GovAmt =  round($govttutper + (($govttutper)/2));
                            $tut->Save();
                        }
                        if($dep){
                            $dep->AdmitAmt = round($studdevper +(($studdevper)/2)); 
                            $dep->GovAmt = round($govtdevper +(($govtdevper)/2)); 
                            $dep->Save();
                        }                            
                    }
                }    
                    
                    
                    
                
                QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/fees_structure/fee_templet_generate.php?course='.$this->lstCourse->SelectedValue.'&cast='.$this->lstcast->SelectedValue);
            }

            protected function Report(){
                    if($this->lstCourse->SelectedValue != NULL && $this->lstcast->SelectedValue != NULL){
                        QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/fees_structure/fee_templet_generate.php?course='.$this->lstCourse->SelectedValue.'&cast='.$this->lstcast->SelectedValue);
                    }  
                    elseif ($this->lstCourse->SelectedValue != NULL && $this->lstcast->SelectedValue == NULL){
                      QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/fees_structure/fee_templet_generate.php?course='.$this->lstCourse->SelectedValue);
                    }    
                     
            }
           }  
	MemberListForm::Run('MemberListForm');
?>