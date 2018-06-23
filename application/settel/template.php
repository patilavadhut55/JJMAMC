<?php
require('../../qcubed.inc.php');
//$templates = SalaryTemplet::LoadArrayByRefTemplet(1);
//foreach ($templates as $template){
//    $totaldeds = SalaryHead::QueryArray(
//              QQ::AndCondition(
//              QQ::Equal(QQN::SalaryHead()->SalaryHead, 102),
//              QQ::Equal(QQN::SalaryHead()->SalaryTemplet, $template->IdsalaryTemplet)        
//                      ));
//                      foreach ($totaldeds as $totalded){}
//    $leaves = SalaryHead::QueryArray(
//              QQ::AndCondition(
//              QQ::Equal(QQN::SalaryHead()->SalaryHead, 371),
//              QQ::Equal(QQN::SalaryHead()->SalaryTemplet, $template->IdsalaryTemplet)        
//                      ));
//    if($leaves){
//        foreach ($leaves as $leave){}
//    
//    $lcalcs = Calculation::QueryArray(
//              QQ::AndCondition(
//              QQ::Equal(QQN::Calculation()->SalaryHead, $totalded->IdsalaryHead),
//              QQ::Equal(QQN::Calculation()->SalaryHead2, $leave->IdsalaryHead)        
//                      ));                  
//    if(!$lcalcs){
//        $lcalc = new Calculation();
//        $lcalc->SalaryHead = $totalded->IdsalaryHead;
//        $lcalc->SalaryHead2 = $leave->IdsalaryHead;
//        $lcalc->Operation = "+";
//        $lcalc->Save();
//    }
//    }
                      
//    if(!$leaves){
//        $leave = new SalaryHead();
//        $leave->SalaryHead = 371;
//        $leave->SalaryTemplet = $template->IdsalaryTemplet;
//        $leave->CalculationGrp = 1;
//        $leave->GeneratedAmount = $leave->Amount = 0;
//        $leave->AppliedMonth = "1,";
//        $leave->ShowInSalary = 1;
//        $leave->Save();
//    }
//     $absentys = SalaryHead::QueryArray(
//              QQ::AndCondition(
//              QQ::Equal(QQN::SalaryHead()->SalaryHead, 372),
//              QQ::Equal(QQN::SalaryHead()->SalaryTemplet, $template->IdsalaryTemplet)        
//                      ));
//     if($absentys){
//         foreach ($absentys as $absenty){}
//         $acalcs = Calculation::QueryArray(
//              QQ::AndCondition(
//              QQ::Equal(QQN::Calculation()->SalaryHead, $totalded->IdsalaryHead),
//              QQ::Equal(QQN::Calculation()->SalaryHead2, $absenty->IdsalaryHead)        
//                      ));                  
//    if(!$acalcs){
//        $acalcs = new Calculation();
//        $acalcs->SalaryHead = $totalded->IdsalaryHead;
//        $acalcs->SalaryHead2 = $absenty->IdsalaryHead;
//        $acalcs->Operation = "+";
//        $acalcs->Save();
//    }
//     }
//    if(!$absentys){
//        $absenty = new SalaryHead();
//        $absenty->SalaryHead = 372;
//        $absenty->AppliedMonth = "1,";
//        $absenty->SalaryTemplet = $template->IdsalaryTemplet;
//        $absenty->CalculationGrp = 1;
//        $absenty->GeneratedAmount = $absenty->Amount = 0;
//        $absenty->ShowInSalary = 1;
//        $absenty->Save();
//    }
    
//    $has = SalaryHead::QueryArray(
//              QQ::AndCondition(
//              QQ::Equal(QQN::SalaryHead()->SalaryHead, 91),
//              QQ::Equal(QQN::SalaryHead()->CalculationGrp, 1),        
//              QQ::Equal(QQN::SalaryHead()->SalaryTemplet, $template->IdsalaryTemplet)        
//                      ));
//    if($has){
//        foreach ($has as $ha){}
//        $baseds = SalaryHead::QueryArray(
//              QQ::AndCondition(
//              QQ::Equal(QQN::SalaryHead()->SalaryHead, 108),
//              QQ::Equal(QQN::SalaryHead()->SalaryTemplet, $template->IdsalaryTemplet)        
//                      ));
//        if($baseds){
//            foreach ($baseds as $based){}    
//        $ha->CalculationGrp = 4;
//        $ha->Percentage = 10;
//        $ha->BasedSalaryHead = $based->IdsalaryHead;
//        $ha->GeneratedAmount = number_format(round($based->GeneratedAmount * $ha->Percentage/100),2,'.','');
//        $ha->Save();
//        }
//        
//    }
    
    
    
//                
    //part3
//    $earnings =  SalaryHead::QueryArray(
//                 QQ::AndCondition(
//                 QQ::Equal(QQN::SalaryHead()->SalaryHead, 101),
//                 QQ::Equal(QQN::SalaryHead()->SalaryTemplet, $template->IdsalaryTemplet)        
//                      ));
//    foreach ($earnings as $earning){}
//       $amount = 0;
//                    $calcs = Calculation::QueryArray(
//                                QQ::AndCondition(
//                                        QQ::Equal(QQN::Calculation()->SalaryHead, $earning->IdsalaryHead)
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
//                        $earning->GeneratedAmount = number_format(round($amount),2,'.','');
//                        $earning->Save();
//                }
//                 $deductions =  SalaryHead::QueryArray(
//                 QQ::AndCondition(
//                 QQ::Equal(QQN::SalaryHead()->SalaryHead, 102),
//                 QQ::Equal(QQN::SalaryHead()->SalaryTemplet, $template->IdsalaryTemplet)        
//                      ));
//                foreach ($deductions as $deduction){}
//                $amt = 0;
//                    $calcs = Calculation::QueryArray(
//                                QQ::AndCondition(
//                                        QQ::Equal(QQN::Calculation()->SalaryHead, $deduction->IdsalaryHead)
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
//                                if($run == 0) $amt = $Head1->GeneratedAmount + $Head2->GeneratedAmount; 
//                                else $amt = $amt + $Head2->GeneratedAmount;
//                        if($calc->Operation == "-")
//                                if($run == 0) $amt = $Head1->GeneratedAmount - $Head2->GeneratedAmount; 
//                                else $amt = $amt - $Head2->GeneratedAmount;
//                            if($calc->Operation == "*")
//                                if($run == 0) $amt = $Head1->GeneratedAmount * $Head2->GeneratedAmount; 
//                                else $amt = $amt * $Head2->GeneratedAmount;
//                            if($calc->Operation == "/")
//                                if($run == 0) $amt = $Head1->GeneratedAmount / $Head2->GeneratedAmount; 
//                                else $amt = $amt / $Head2->GeneratedAmount;
//
//                            
//                        }
//                        $deduction->GeneratedAmount = number_format(round($amt),2,'.','');
//                        $deduction->Save();
//                }
//}
?>