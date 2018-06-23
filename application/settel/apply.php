<?php
require('../../qcubed.inc.php');
//$roles = LoginHasRole::QueryArray(
//         QQ::AndCondition(
//         //QQ::Equal(QQN::LoginHasRole()->DepartmentObject->Parrent, 9),
//         QQ::Equal(QQN::LoginHasRole()->RoleIdrole, 81),        
//         QQ::Equal(QQN::LoginHasRole()->Department, 79)        
//                 ));
//foreach ($roles as $role){
//      $address = Address::LoadArrayByOf($role->LoginIdlogin);
//      foreach ($address as $addres){}
//      $estabs = Establishment::LoadArrayByEmployee($addres->Idaddress);
//      if($estabs){
//          foreach ($estabs as $estab){}
//          $default = SalaryTemplet::LoadByIdsalaryTemplet(4);
//          $estab->SalaryTemplet = $default->IdsalaryTemplet;
//          $estab->Save();
//          $membertemplet = new SalaryTemplet();
//        $code = Settings::LoadByName("SalaryTemplet");
//        $code->Option = $code->Option + 1;
//        $code->Save();
//        $membertemplet->Code =$code->Option;
//        $membertemplet->Employee  = $estab->Employee;
//        $membertemplet->Date = QDateTime::Now();
//        $membertemplet->RefTemplet = $estab->SalaryTemplet;
//        $membertemplet->Department = $role->Department;
//        $membertemplet->Designation = $role->RoleIdrole;
//        $membertemplet->Active = 1;
//        $membertemplet->Save();
//        $tshs = SalaryHead::LoadArrayBySalaryTemplet($default->IdsalaryTemplet);
//                    foreach ($tshs as $tsh){
//                        $mtshs = SalaryHead::QueryArray(
//                                QQ::AndCondition(
//                                QQ::Equal(QQN::SalaryHead()->SalaryHead, $tsh->SalaryHead),
//                                QQ::Equal(QQN::SalaryHead()->SalaryTemplet, $membertemplet->IdsalaryTemplet)        
//                                        ));
//                        if($mtshs){
//                            foreach ($mtshs as $mtsh){}
//                        }else{
//                            $mtsh = new SalaryHead();
//                            $mtsh->SalaryHead = $tsh->SalaryHead;
//                            $mtsh->SalaryTemplet =  $membertemplet->IdsalaryTemplet;
//                            
//                        }
//                            $mtsh->CalculationGrp = $tsh->CalculationGrp;
//                            $mtsh->AppliedMonth = $tsh->AppliedMonth;
//                            if($tsh->SalaryHeadObject->Code == "SE1")$mtsh->Amount = number_format ($estab->BasicSalary,2,'.','');
//                            else $mtsh->Amount = number_format ($tsh->Amount,2,'.','');
//                            $mtsh->GeneratedAmount = $mtsh->Amount;
//                            $mtsh->Percentage = $tsh->Percentage;
//                            $mtsh->Save();
//                    }
//                    
//      }
//    
//}
//part 2
//$membertemplets = SalaryTemplet::QueryArray(
//                  QQ::AndCondition(
//                  QQ::NotEqual(QQN::SalaryTemplet()->Employee, NULL)        
//                          ));         
//foreach ($membertemplets as $membertemplet){
//            $reftemplet = SalaryTemplet::LoadByIdsalaryTemplet($membertemplet->RefTemplet);
//            $tshs = SalaryHead::LoadArrayBySalaryTemplet($reftemplet->IdsalaryTemplet);
//            foreach ($tshs as $tsh){
//                $mtshs = SalaryHead::QueryArray(
//                                QQ::AndCondition(
//                                QQ::Equal(QQN::SalaryHead()->SalaryHead, $tsh->SalaryHead),
//                                QQ::Equal(QQN::SalaryHead()->SalaryTemplet, $membertemplet->IdsalaryTemplet)        
//                                        ));
//                        if($mtshs){
//                            foreach ($mtshs as $mtsh){}
//
//                            if($mtsh->CalculationGrp == 2){
//                                 
//                             //caculation entry
//                             $calculations = Calculation::LoadArrayBySalaryHead($tsh->IdsalaryHead);
//                             if($calculations){
//                                 foreach ($calculations as $calculation){
//                                   $memclalcss = Calculation::QueryArray(
//                                                 QQ::AndCondition(
//                                                 QQ::Equal(QQN::Calculation()->SalaryHead, $mtsh->IdsalaryHead),
//                                                 QQ::Equal(QQN::Calculation()->Operation, $calculation->Operation),
//                                                 QQ::Equal(QQN::Calculation()->SalaryHead2Object->SalaryHead, $calculation->SalaryHead2Object->SalaryHead)        
//                                                         ));
//                                   if($memclalcss){
//                                       foreach ($memclalcss as $memclalcs){}
//                                       
//                                   }else{
//                                   $memclalcs = new Calculation();
//                                   $memclalcs->SalaryHead = $mtsh->IdsalaryHead;
//                                   }
//                                   if($calculation->SalaryHead1 != NULL){
//                                   $head1s = SalaryHead::QueryArray(
//                                            QQ::AndCondition(
//                                            QQ::Equal(QQN::SalaryHead()->SalaryHead, $calculation->SalaryHead1Object->SalaryHead),
//                                            QQ::Equal(QQN::SalaryHead()->SalaryTemplet, $membertemplet->IdsalaryTemplet)        
//                                                    ));
//                                    if($head1s){
//                                        foreach ($head1s as $head1){}
//                                        $memclalcs->SalaryHead1 = $head1->IdsalaryHead;
//                                    }
//                                   }
//                                    //head 2
//                                    $head2s = SalaryHead::QueryArray(
//                                            QQ::AndCondition(
//                                            QQ::Equal(QQN::SalaryHead()->SalaryHead, $calculation->SalaryHead2Object->SalaryHead),
//                                            QQ::Equal(QQN::SalaryHead()->SalaryTemplet, $membertemplet->IdsalaryTemplet)        
//                                                    ));
//                                    if($head2s){
//                                        
//                                        foreach ($head2s as $head2){}
//                                        $memclalcs->SalaryHead2 = $head2->IdsalaryHead;
//                                    }
//                                    $memclalcs->Operation = $calculation->Operation;
//                                    $memclalcs->Save();
//                                 }
//                             }
//                            }
//                            
//                            if($mtsh->CalculationGrp == 3){
//                                //payslab Entry
//                                $payslabs = PaySlabs::LoadArrayBySalaryhead($tsh->IdsalaryHead);
//                                if($payslabs){
//                                foreach ($payslabs as $payslab){
//                                    $memslab = new PaySlabs();
//                                    $memslab->Salaryhead = $mtsh->IdsalaryHead;
//                                    $memslab->From = number_format($payslab->From,2,'.','');
//                                    $memslab->To = number_format($payslab->To,2,'.','');
//                                    $memslab->Percentage = number_format($payslab->Percentage,2,'.','');
//                                    $memslab->Amount = number_format($payslab->Amount,2,'.','');
//                                    $memslab->Save();
//                                }
//                                }
//                            }
//                            
//                            if($mtsh->CalculationGrp == 4){
//                               $baseds = SalaryHead::QueryArray(
//                                        QQ::AndCondition(
//                                        QQ::Equal(QQN::SalaryHead()->SalaryHead, $tsh->BasedSalaryHeadObject->SalaryHead),
//                                        QQ::Equal(QQN::SalaryHead()->SalaryTemplet, $mtsh->SalaryTemplet)
//                                                ));
//                               if($baseds){
//                                   foreach ($baseds as $based){}
//                                   $mtsh->BasedSalaryHead = $based->IdsalaryHead;
//                                   $mtsh->Save();
//                               }
//                                               
//                            }
//                        }    
//            }
//}

//part3
//$membertemplets = SalaryTemplet::QueryArray(
//                  QQ::AndCondition(
//                  QQ::NotEqual(QQN::SalaryTemplet()->Employee, NULL)        
//                          ));     
//                  foreach ($membertemplets as $membertemplet){
//                      $estabs = Establishment::LoadArrayByEmployee($membertemplet->Employee);
//                      foreach ($estabs as $estab){}
//                    $reftemplet = SalaryTemplet::LoadByIdsalaryTemplet($membertemplet->RefTemplet);
//                    $salaryheds = SalaryHead::LoadArrayBySalaryTemplet($membertemplet->IdsalaryTemplet);
//                    foreach ($salaryheds as $salaryhead){
//                if($salaryhead->SalaryHeadObject->Code == "SE1"){
//                    $salaryhead->GeneratedAmount = $salaryhead->Amount = number_format(round($estab->BasicSalary),2,'.','');
//                    $salaryhead->Save();
//                }
//                //Calculation
//                if($salaryhead->CalculationGrp == 2){
//                    $amount = 0;
//                    $calcs = Calculation::QueryArray(
//                                QQ::AndCondition(
//                                        QQ::Equal(QQN::Calculation()->SalaryHead, $salaryhead->IdsalaryHead)
//                                        )
//                                );
//
//                    if($calcs){
//                        $run = 0;
//                        foreach ($calcs as $calc){
//                            $Head1 = SalaryHead::LoadByIdsalaryHead($calc->SalaryHead1);
//                            if($Head1) $run = 0;
//                            else  $run = 1;
//                            $Head2 = SalaryHead::LoadByIdsalaryHead ($calc->SalaryHead2);
//                            
//                            if($calc->Operation == "+")
//                                if($run == 0) $amount = $Head1->GeneratedAmount + $Head2->GeneratedAmount; 
//                                else $amount = $amount + $Head2->GeneratedAmount;
//                        if($calc->Operation == "-")
//                                if($run == 0) $amount = $Head1->GeneratedAmount - $Head2->GeneratedAmount; 
//                                else $amount = $amount - $Head2->GeneratedAmount;
//                            if($calc->Operation == "*")
//                                if($run == 0) $amount = $Head1->GeneratedAmount * $Head2->GeneratedAmount; 
//                                else $amount = $amount * $Head2->GeneratedAmount;
//                            if($calc->Operation == "/")
//                                if($run == 0) $amount = $Head1->GeneratedAmount / $Head2->GeneratedAmount; 
//                                else $amount = $amount / $Head2->GeneratedAmount;
//
//                            
//                        }
//                        $salaryhead->GeneratedAmount = number_format(round($amount),2,'.','');
//                        $salaryhead->Save();
//                }
//            }
//            //based on calculation
//              if($salaryhead->CalculationGrp == 4){
//                  $baseds = SalaryHead::LoadByIdsalaryHead($salaryhead->BasedSalaryHead);
//                  if($baseds){
//                      $salaryhead->GeneratedAmount = number_format(round($baseds->GeneratedAmount * $salaryhead->Percentage)/100,2,'.','');
//                      $salaryhead->Save();
//                  }
//              }
//            //payslab calculayion
//              if($salaryhead->CalculationGrp == 3 && $salaryhead->BasedSalaryHead != NULL){
//                   $baseds = SalaryHead::LoadByIdsalaryHead($salaryhead->BasedSalaryHead);
//                    $slabs = PaySlabs::LoadArrayBySalaryhead($salaryhead->IdsalaryHead);
//                    if($slabs){
//                        foreach ($slabs as $slab){
//                        if($slab->From <= $baseds->GeneratedAmount && $slab->To >= $baseds->GeneratedAmount){
//                        if($slab->Amount == 0) $salaryhead->GeneratedAmount = round ($baseds->GeneratedAmount * $slab->Percentage/100);
//                        else $salaryhead->GeneratedAmount = number_format (round ($slab->Amount),2,'.','');
//                        }
//                        }
//                        $salaryhead->Save();
//                    }
//                }
//            }           
//                    
//        }
?>
