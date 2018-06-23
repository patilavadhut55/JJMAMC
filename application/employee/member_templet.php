<?php
    require('../../qcubed.inc.php');
 
    class MemberTemplet extends QForm {
        protected $lstTemplet;
        protected $btnEarnings;
        protected $btnDeduction;
        protected $lbldel;
        protected $lblEdit;
        protected $btnApply;
        protected $chkShow;
        protected $btnBack;
        protected $btnLoan;
        protected function Form_Run() {
                parent::Form_Run();
            QApplication::CheckRemoteAdmin();
        }

        protected function Form_Create() {
            parent::Form_Create();
            
            $this->btnLoan = new QButton($this);
            $this->btnLoan->ButtonMode = QButtonMode::Success;
            $this->btnLoan->Text =  "Bank Loan";
            $this->btnLoan->AddAction(new QClickEvent(), new QAjaxAction('btnLoan_Click'));
            $this->btnLoan->Visible = FALSE;
            
            $this->lstTemplet = new QSelect2ListBox($this);
            $this->lstTemplet->AddItem("-Select Templet", NULL);
            $templates = SalaryTemplet::LoadArrayByEmployee(NULL);
            foreach ($templates as $template){
                $this->lstTemplet->AddItem($template->DepartmentObject.' '.$template->Code, $template->IdsalaryTemplet);
            }
            $this->btnApply = new QButton($this);
            $this->btnEarnings = new QButton($this);
            $this->btnDeduction = new QButton($this);
            $this->btnBack   = new QButton($this);
            
            $this->btnEarnings->Text = "Add Earning Heads";
            $this->btnApply->Text = "Apply";
            $this->btnBack->Text = "<< Back";
            $this->btnDeduction->Text = "Add Deduction Heads";
            $this->btnDeduction->Width = "100%";
            $this->btnEarnings->Width = "100%";
            $this->btnApply->ButtonMode = QButtonMode::Success;
            $this->btnBack->ButtonMode = QButtonMode::Success;
            $this->btnEarnings->ButtonMode = QButtonMode::Success;
            $this->btnDeduction->ButtonMode = QButtonMode::Success;
            
            $this->btnEarnings->AddAction(new QClickEvent(), new QServerAction("btnEarnings_Click"));
            $this->btnBack->AddAction(new QClickEvent(), new QServerAction("btnBack_Click"));
            $this->btnDeduction->AddAction(new QClickEvent(), new QServerAction("btnDeduction_Click"));
            $this->btnApply->AddAction(new QClickEvent(), new QServerAction("btnApply_Click"));
            
            $estab = Establishment::LoadByIdestablishment($_GET['estab']);
            $this->lstTemplet->SelectedValue = $estab->SalaryTemplet;
            if(isset($_GET['id'])){
              $this->btnLoan->Visible = TRUE;
                
              $this->Salary_Save();  
              $sal = SalaryTemplet::LoadByIdsalaryTemplet($_GET['id']);
              $shts = SalaryHead::LoadArrayBySalaryTemplet($_GET['id']);
               if($shts){
               foreach ($shts as $sht){  
                $this->lbldel[$sht->IdsalaryHead] = new QLabel($this);
                $this->lbldel[$sht->IdsalaryHead]->HtmlEntities = FALSE;
                $this->lbldel[$sht->IdsalaryHead]->Text = "<img src=".__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__."/delete.png />";
                $this->lbldel[$sht->IdsalaryHead]->AddAction(new QClickEvent(), new QAjaxAction('lbldel_Click'));
                $this->lbldel[$sht->IdsalaryHead]->ActionParameter = $sht->IdsalaryHead;
              
                
                $this->lblEdit[$sht->IdsalaryHead] = new QLabel($this);
                $this->lblEdit[$sht->IdsalaryHead]->HtmlEntities = FALSE;
                $this->lblEdit[$sht->IdsalaryHead]->Text = "<img src='".__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__."/edit.png' width = '15' height ='15'/> ";
                $this->lblEdit[$sht->IdsalaryHead]->AddAction(new QClickEvent(), new QAjaxAction('lblEdit_Click'));
                $this->lblEdit[$sht->IdsalaryHead]->ActionParameter = $sht->IdsalaryHead;       
                
                $this->chkShow[$sht->IdsalaryHead] = new QCheckBox($this);
                $this->chkShow[$sht->IdsalaryHead]->Checked = $sht->ShowInSalary;
                $this->chkShow[$sht->IdsalaryHead]->AddAction(new QClickEvent(), new QAjaxAction('chkShow_Click'));
                $this->chkShow[$sht->IdsalaryHead]->ActionParameter = $sht->IdsalaryHead;
               }
              } 
            }
            
        }
        protected function btnLoan_Click(){
            $template = SalaryTemplet::LoadByIdsalaryTemplet($_GET['id']);
            
           QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/employee/bank_loan_edit.php?emp='.$template->EmployeeObject->Of.'&temp='.$template->IdsalaryTemplet);
         }
        protected function btnApply_Click(){
            $estab = Establishment::LoadByIdestablishment($_GET['estab']);
            $activelogin = LoginHasRole::QueryArray(
                            QQ::AndCondition( 
                           QQ::Equal(QQN::LoginHasRole()->LoginIdlogin, $estab->EmployeeObject->Of),
                           QQ::Equal(QQN::LoginHasRole()->Active, 1)
                           ));
            foreach ($activelogin as $activelogi){}
            $estab->SalaryTemplet = $this->lstTemplet->SelectedValue;
            $estab->Save();
            $membertemplets = SalaryTemplet::QueryArray(
                             QQ::AndCondition(
                             QQ::Equal(QQN::SalaryTemplet()->Employee, $estab->Employee),
                             QQ::Equal(QQN::SalaryTemplet()->Active, 1),
                             QQ::Equal(QQN::SalaryTemplet()->Establishment, $estab->Idestablishment)        
                                    ));
            if($membertemplets){
                foreach ($membertemplets as $membertemplet){}
            }else{
                    $membertemplet = new SalaryTemplet();
                    $code = Settings::LoadByName("SalaryTemplet");
                    $code->Option = $code->Option + 1;
                    $code->Save();
                    $membertemplet->Code =$code->Option;
                    $membertemplet->Employee  = $estab->Employee;
                    $membertemplet->Date = QDateTime::Now();
                    $membertemplet->RefTemplet = $estab->SalaryTemplet;
                    $membertemplet->Establishment = $estab->Idestablishment;
            }
                    $membertemplet->Department = $activelogi->Department;
                    $membertemplet->Designation = $activelogi->RoleIdrole;
                    $membertemplet->Active = 1;
                    $membertemplet->Save();
                    
                    $reftemplet = SalaryTemplet::LoadByIdsalaryTemplet($estab->SalaryTemplet);
                    $tshs = SalaryHead::LoadArrayBySalaryTemplet($reftemplet->IdsalaryTemplet);
                    foreach ($tshs as $tsh){
                        $mtshs = SalaryHead::QueryArray(
                                QQ::AndCondition(
                                QQ::Equal(QQN::SalaryHead()->SalaryHead, $tsh->SalaryHead),
                                QQ::Equal(QQN::SalaryHead()->SalaryTemplet, $membertemplet->IdsalaryTemplet)        
                                        ));
                        if($mtshs){
                            foreach ($mtshs as $mtsh){}
                        }else{
                            $mtsh = new SalaryHead();
                            $mtsh->SalaryHead = $tsh->SalaryHead;
                            $mtsh->SalaryTemplet =  $membertemplet->IdsalaryTemplet;
                            
                        }
                            $mtsh->CalculationGrp = $tsh->CalculationGrp;
                            $mtsh->AppliedMonth = $tsh->AppliedMonth;
                            if($tsh->SalaryHead == 98){
                                $loans = BankLoan::QueryArray(
                                                QQ::AndCondition(
                                                QQ::Equal(QQN::BankLoan()->Employee, $mtsh->SalaryTempletObject->EmployeeObject->Of),
                                                QQ::Equal(QQN::BankLoan()->Show, 1)        
                                                        ));
                                if($loans){
                                    $loanamt = 0;
                                    foreach ($loans as $loan){
                                        $loanamt = $loanamt + $loan->Amount;
                                    }
                                    $mtsh->Amount = number_format ($loanamt,2,'.','');
                                }else{
                                    $mtsh->Amount = number_format ($tsh->Amount,2,'.','');
                                }
                            }else{
                            if($tsh->SalaryHeadObject->Code == "SE1")$mtsh->Amount = number_format ($estab->BasicSalary,2,'.','');
                            else $mtsh->Amount = number_format ($tsh->Amount,2,'.','');
                            
                            }$mtsh->GeneratedAmount = $mtsh->Amount;
                            $mtsh->Percentage = $tsh->Percentage;
                            $mtsh->ShowInSalary = $tsh->ShowInSalary;
                            $mtsh->Save();
                    }
                    $this->Calculation();
                    $oldtemplets = SalaryTemplet::QueryArray(
                             QQ::AndCondition(
                             QQ::Equal(QQN::SalaryTemplet()->Employee, $estab->Employee),
                             QQ::NotEqual(QQN::SalaryTemplet()->IdsalaryTemplet, $membertemplet->IdsalaryTemplet)        
                                    ));
                    if($oldtemplets){
                        foreach ($oldtemplets as $oldtemplet){
                            $oldtemplet->Active = 0;
                            $oldtemplet->Save();
                        }
                    }
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/employee/member_templet.php?id='.$membertemplet->IdsalaryTemplet.'&estab='.$_GET['estab']);            
        }
        protected function Calculation(){
            $estab = Establishment::LoadByIdestablishment($_GET['estab']);
            $membertemplets = SalaryTemplet::QueryArray(
                             QQ::AndCondition(
                             QQ::Equal(QQN::SalaryTemplet()->Employee, $estab->Employee),
                             QQ::Equal(QQN::SalaryTemplet()->Active, 1)));
            foreach ($membertemplets as $membertemplet){}
            $reftemplet = SalaryTemplet::LoadByIdsalaryTemplet($estab->SalaryTemplet);
            $tshs = SalaryHead::LoadArrayBySalaryTemplet($reftemplet->IdsalaryTemplet);
            foreach ($tshs as $tsh){
                $mtshs = SalaryHead::QueryArray(
                                QQ::AndCondition(
                                QQ::Equal(QQN::SalaryHead()->SalaryHead, $tsh->SalaryHead),
                                QQ::Equal(QQN::SalaryHead()->SalaryTemplet, $membertemplet->IdsalaryTemplet)        
                                        ));
                        if($mtshs){
                            foreach ($mtshs as $mtsh){}

                            if($mtsh->CalculationGrp == 2){
                                 
                             //caculation entry
                             $calculations = Calculation::LoadArrayBySalaryHead($tsh->IdsalaryHead);
                             if($calculations){
                                 foreach ($calculations as $calculation){
                                   $memclalcss = Calculation::QueryArray(
                                                 QQ::AndCondition(
                                                 QQ::Equal(QQN::Calculation()->SalaryHead, $mtsh->IdsalaryHead),
                                                 QQ::Equal(QQN::Calculation()->Operation, $calculation->Operation),
                                                 QQ::Equal(QQN::Calculation()->SalaryHead2Object->SalaryHead, $calculation->SalaryHead2Object->SalaryHead)        
                                                         ));
                                   if($memclalcss){
                                       foreach ($memclalcss as $memclalcs){}
                                       
                                   }else{
                                   $memclalcs = new Calculation();
                                   $memclalcs->SalaryHead = $mtsh->IdsalaryHead;
                                   }
                                   if($calculation->SalaryHead1 != NULL){
                                   $head1s = SalaryHead::QueryArray(
                                            QQ::AndCondition(
                                            QQ::Equal(QQN::SalaryHead()->SalaryHead, $calculation->SalaryHead1Object->SalaryHead),
                                            QQ::Equal(QQN::SalaryHead()->SalaryTemplet, $membertemplet->IdsalaryTemplet)        
                                                    ));
                                    if($head1s){
                                        foreach ($head1s as $head1){}
                                        $memclalcs->SalaryHead1 = $head1->IdsalaryHead;
                                    }
                                   }
                                    //head 2
                                    $head2s = SalaryHead::QueryArray(
                                            QQ::AndCondition(
                                            QQ::Equal(QQN::SalaryHead()->SalaryHead, $calculation->SalaryHead2Object->SalaryHead),
                                            QQ::Equal(QQN::SalaryHead()->SalaryTemplet, $membertemplet->IdsalaryTemplet)        
                                                    ));
                                    if($head2s){
                                        
                                        foreach ($head2s as $head2){}
                                        $memclalcs->SalaryHead2 = $head2->IdsalaryHead;
                                    }
                                    $memclalcs->Operation = $calculation->Operation;
                                    $memclalcs->Save();
                                 }
                             }
                            }
                            
                            if($mtsh->CalculationGrp == 3){
                                //payslab Entry
                                $payslabs = PaySlabs::LoadArrayBySalaryhead($tsh->IdsalaryHead);
                                if($payslabs){
                                foreach ($payslabs as $payslab){
                                    $memslab = new PaySlabs();
                                    $memslab->Salaryhead = $mtsh->IdsalaryHead;
                                    $memslab->From = number_format($payslab->From,2,'.','');
                                    $memslab->To = number_format($payslab->To,2,'.','');
                                    $memslab->Percentage = number_format($payslab->Percentage,2,'.','');
                                    $memslab->Amount = number_format($payslab->Amount,2,'.','');
                                    $memslab->Save();
                                }
                                }
                            }
                            
                            if($mtsh->CalculationGrp == 4){
                               $baseds = SalaryHead::QueryArray(
                                        QQ::AndCondition(
                                        QQ::Equal(QQN::SalaryHead()->SalaryHead, $tsh->BasedSalaryHeadObject->SalaryHead),
                                        QQ::Equal(QQN::SalaryHead()->SalaryTemplet, $mtsh->SalaryTemplet)
                                                ));
                               if($baseds){
                                   foreach ($baseds as $based){}
                                   $mtsh->BasedSalaryHead = $based->IdsalaryHead;
                                   $mtsh->Save();
                               }
                                               
                            }
                        }    
            }
        }
        protected function btnBack_Click(){
            $estab = Establishment::LoadByIdestablishment($_GET['estab']);
            QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/employee/establishment.php?estab='.$_GET['estab'].'&emprole='.$estab->Role.'&login='.$estab->Login);
        }

            protected function btnEarnings_Click(){
            $grp = Ledger::LoadByCode('SH1');
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/employee/salary_head_calculation.php?temp='.$_GET['id'].'&grp='.$grp->Idledger);
     
        }

        protected function btnDeduction_Click(){
            $grp = Ledger::LoadByCode('SH2');
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/employee/salary_head_calculation.php?temp='.$_GET['id'].'&grp='.$grp->Idledger);
     
        }
        protected function Salary_Save(){
            $estab = Establishment::LoadByIdestablishment($_GET['estab']);
            $membertemplet = SalaryTemplet::LoadByIdsalaryTemplet($_GET['id']);
            $salaryheds = SalaryHead::LoadArrayBySalaryTemplet($membertemplet->IdsalaryTemplet);
            foreach ($salaryheds as $salaryhead){
                if($salaryhead->SalaryHeadObject->Code == "SE1"){
                    $salaryhead->GeneratedAmount = $salaryhead->Amount = number_format($estab->BasicSalary,2,'.','');
                    $salaryhead->Save();
                }
                //Calculation
                if($salaryhead->CalculationGrp == 2){
                    $amount = 0;
                    $calcs = Calculation::QueryArray(
                                QQ::AndCondition(
                                        QQ::Equal(QQN::Calculation()->SalaryHead, $salaryhead->IdsalaryHead)
                                        )
                                );

                    if($calcs){
                        $run = 0;
                        foreach ($calcs as $calc){
                            $Head1 = SalaryHead::LoadByIdsalaryHead($calc->SalaryHead1);
                            if($Head1) $run = 0;
                            else  $run = 1;
                            $Head2 = SalaryHead::LoadByIdsalaryHead ($calc->SalaryHead2);
                            
                            if($calc->Operation == "+")
                                if($run == 0) $amount = $Head1->GeneratedAmount + $Head2->GeneratedAmount; 
                                else $amount = $amount + $Head2->GeneratedAmount;
                        if($calc->Operation == "-")
                                if($run == 0) $amount = $Head1->GeneratedAmount - $Head2->GeneratedAmount; 
                                else $amount = $amount - $Head2->GeneratedAmount;
                            if($calc->Operation == "*")
                                if($run == 0) $amount = $Head1->GeneratedAmount * $Head2->GeneratedAmount; 
                                else $amount = $amount * $Head2->GeneratedAmount;
                            if($calc->Operation == "/")
                                if($run == 0) $amount = $Head1->GeneratedAmount / $Head2->GeneratedAmount; 
                                else $amount = $amount / $Head2->GeneratedAmount;

                            
                        }
                        $salaryhead->GeneratedAmount = number_format(round($amount),2,'.','');
                        $salaryhead->Save();
                }
            }
            //based on calculation
              if($salaryhead->CalculationGrp == 4){
                  $baseds = SalaryHead::LoadByIdsalaryHead($salaryhead->BasedSalaryHead);
                  if($baseds){
                      $salaryhead->GeneratedAmount = number_format(round($baseds->GeneratedAmount * $salaryhead->Percentage/100),2,'.','');
                      $salaryhead->Save();
                  }
              }
            //payslab calculayion
              if($salaryhead->CalculationGrp == 3 && $salaryhead->BasedSalaryHead != NULL){
                   $baseds = SalaryHead::LoadByIdsalaryHead($salaryhead->BasedSalaryHead);
                    $slabs = PaySlabs::LoadArrayBySalaryhead($salaryhead->IdsalaryHead);
                    if($slabs){
                        foreach ($slabs as $slab){
                        if($slab->From <= $baseds->GeneratedAmount && $slab->To >= $baseds->GeneratedAmount){
                        if($slab->Amount == 0) $salaryhead->GeneratedAmount = round ($baseds->GeneratedAmount * $slab->Percentage/100);
                        else $salaryhead->GeneratedAmount = number_format (round ($slab->Amount,2,'.',''));
                        }
                        }
                        $salaryhead->Save();
                    }
                }
            }
        }
        protected function chkShow_Click($strFormId, $strControlId, $strParameter){
            $shc = SalaryHead::LoadByIdsalaryHead($strParameter);
            $shc->ShowInSalary = $this->chkShow[$shc->IdsalaryHead]->Checked;
            $shc->Save();
        }

        protected function lbldel_Click($strFormId, $strControlId, $strParameter){
            $estab = Establishment::LoadByIdestablishment($_GET['estab']);
            $shc = SalaryHead::LoadByIdsalaryHead($strParameter);
            //delete payslabs
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
            if(!$payslabs && !$cals && !$baseds)
            $shc->Delete();
            else
                QApplication::DisplayAlert ("Can Not Delete Salary Claculation");
            $this->Refresh();
            
        }
        protected function lblEdit_Click($strFormId, $strControlId, $strParameter){
             $shc = SalaryHead::LoadByIdsalaryHead($strParameter);
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/employee/salary_head_calculation.php?id='.$shc->IdsalaryHead);
         }
         protected function Refresh(){
             QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/employee/member_templet.php?id='.$_GET['id'].'&estab='.$_GET['estab']);
         }
    }

MemberTemplet::Run('MemberTemplet');
?>