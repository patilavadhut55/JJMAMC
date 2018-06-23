<?php
require('../../qcubed.inc.php');

$yearid = 3;
$cnt = 1;
$deptyears = DeptYear::QueryArray(
                QQ::AndCondition(
                    QQ::Equal(QQN::DeptYear()->Calender, $yearid)
                )
            );

if($deptyears){
foreach($deptyears as $deptyear){
    $examtypes = array("ISE-I" => 1,"MSE" => 3,"ISE-II" => 2,"ESE" => 4);                                

    foreach ($examtypes as $key=>$examtype){            
                $templets = AcademicTemplet::QueryArray(
                    QQ::AndCondition(
                        QQ::Equal(QQN::AcademicTemplet()->Department, $deptyear->Department),
                        QQ::Equal(QQN::AcademicTemplet()->Semister, $deptyear->Semister)
                    )
                );

                $examtemplets = ExamHasEventtemplet::QueryArray(
                            QQ::Equal(QQN::ExamHasEventtemplet()->Exam, $examtype)
                        );

                foreach($examtemplets as $examtemplet){

                    //code create Main event and sub events of subjects
                    $chkemamevent = DeptYearEvents::QueryArray(
                            QQ::AndCondition(
                                //QQ::Equal(QQN::DeptYearEvents()->Title, $deptyear->DepartmentObject->ShortName.' '.$deptyear->SemisterObject.' '.$deptyear->CalenderObject->Name.' '.$key),    
                                QQ::Equal(QQN::DeptYearEvents()->DeptYear, $deptyear->IddeptYear),
                                QQ::Equal(QQN::DeptYearEvents()->ExamType, $examtype),
                                QQ::Equal(QQN::DeptYearEvents()->CalenderYear, $yearid),
                                QQ::Equal(QQN::DeptYearEvents()->Parrent, NULL),
                                QQ::Equal(QQN::DeptYearEvents()->Event, $examtemplet->Eventtemplet)
                            )
                        );

                if($chkemamevent){
                    foreach ($chkemamevent as $examevent){}
                }else{
                    _p($key.",");
                    $cnt++;
                    $examevent = new DeptYearEvents();                           
                    $examevent->ExamType = $examtype;
                    $examevent->Title = "Event ".$cnt." ";
                    //$examevent->Title = delete_all_between("[", "]", $deptyear->DepartmentObject->ParrentObject).' '. $deptyear->DepartmentObject.'['.$deptyear->DepartmentObject->ShortName.']'.' '.$deptyear->SemisterObject.' '.$deptyear->CalenderObject->Name.' '.$key;
                    $examevent->Event = $examtemplet->Eventtemplet;//for exam conduct
                    if($templets){
                        foreach ($templets as $templet){}
                        $day = date('d',  strtotime($templet->ExamStartDate));
                        $month = date('m',  strtotime($templet->ExamStartDate));
                        $year = date('Y');

                        $examevent->From = QDateTime::FromTimestamp(strtotime($year.$month.$day)); 
                        $day = date('d',  strtotime($templet->ExamEndDate));
                        $month = date('m',  strtotime($templet->ExamEndDate));
                        $year = date('Y');
                        $examevent->To = QDateTime::FromTimestamp(strtotime($year.$month.$day)); 
                    }
                    $examevent->DeptYear = $deptyear->IddeptYear;
                    $examevent->CalenderYear = $yearid;
                    $examevent->Save();
                }
                    $yearlysubs = YearlySubject::QueryArray(
                                QQ::AndCondition(
                                    QQ::Equal(QQN::YearlySubject()->DeptYear, $deptyear->IddeptYear)
                                )
                            );

                    foreach ($yearlysubs as $yearlysub){

                        $chkdeptyearexam = DeptYearExam::QueryArray(
                                    QQ::AndCondition(
                                        QQ::Equal(QQN::DeptYearExam()->YearlySubject, $yearlysub->IdyearlySubject),
                                        QQ::Equal(QQN::DeptYearExam()->Exam, $examtype)
                                    )
                                );

                        if($chkdeptyearexam){                                
                            //check year subject event
                            $chksubevent = DeptYearEvents::QueryArray(
                                        QQ::AndCondition(                                                                
                                            QQ::Equal(QQN::DeptYearEvents()->ExamType, $examtype),
                                            QQ::Equal(QQN::DeptYearEvents()->CalenderYear, $yearid),
                                            QQ::Equal(QQN::DeptYearEvents()->Event, $examtemplet->Eventtemplet),
                                            QQ::Equal(QQN::DeptYearEvents()->DeptYear, $deptyear->IddeptYear),
                                            QQ::Equal(QQN::DeptYearEvents()->Parrent, $examevent->IddeptYearEvents),
                                            QQ::Equal(QQN::DeptYearEvents()->YearlySubject, $yearlysub->IdyearlySubject)
                                        )
                                    );
                            if(!$chksubevent){
                                $cnt++;
                                $subevent = new DeptYearEvents();                                    
                                $subevent->ExamType = $examtype;
                                $subevent->Event = $examtemplet->Eventtemplet;
                                $subevent->DeptYear = $deptyear->IddeptYear;
                                $subevent->Parrent = $examevent->IddeptYearEvents;
                                $subevent->Title = $examevent->Title.' '.$yearlysub->SubjectObject;
                                $subevent->YearlySubject = $yearlysub->IdyearlySubject;
                                $subevent->CalenderYear = $yearid;
                                $subevent->From = $examevent->From;
                                $subevent->To = $examevent->To;                                    
                                //$subevent->Save();
                            }                                
                        }
                    }


    }
    }


}        
}
_t("<h2>".$cnt."</h2>");


/*
$appliedexams = AppliedExam::LoadAll();
foreach ($appliedexams as $appliedexam){
    $dept = DeptYearEvents::LoadByIddeptYearEvents($appliedexam->EventSubject);
    if(!$dept){
        _t($appliedexam->EventSubject."<br>");
    }
}*/




/*$vous = Voucher::QueryArray(
            QQ::OrCondition(
                QQ::Equal(QQN::Voucher()->Idvoucher, 68387),
                QQ::Equal(QQN::Voucher()->Parrent, 68387)    
            )
        );

foreach ($vous as $vou){
    
}*/

/*
$yes = $no = 0;
$leds = Ledger::LoadArrayByGrp(244);
if($leds){
    foreach($leds as $led){
        $profile = Profile::LoadByIdprofile($led->Idledger);
        if(!$profile){
            $pro = new Profile();
            $pro->Idprofile = $led->Idledger;
            $pro->OldPrn = $led->Code;
            $no++;
            $pro->Save();
        }else{
          $yes++;  
        }
    }
}

_p($yes.'  '.$no);
echo '<br>';
*/
/*
$events = Event::LoadArrayByParrent(55);
foreach ($events as $event){    
    $subevents = Event::LoadArrayByParrent($event->Idevent);    
    foreach($subevents as $subevent){
        $subevent->Delete();
    }    
    if($event->Idevent != 57){
        $event->Delete();
    }
}*/
/*
$deptyears = DeptYearEvents::QueryArray(
            QQ::AndCondition(
                QQ::Equal(QQN::DeptYearEvents()->Parrent, NULL),
                QQ::NotEqual(QQN::DeptYearEvents()->DeptYear, NULL)    
            )
        );
foreach ($deptyears as $deptyear){
    //_t($deptyear->Title." = = ".$deptyear->DeptYear."<br>");
    $subdeptyears = DeptYearEvents::QueryArray(
            QQ::AndCondition(
                QQ::Equal(QQN::DeptYearEvents()->Parrent, $deptyear->IddeptYearEvents)
            )
        );
    foreach ($subdeptyears as $subdeptyear){
            _t($deptyear->DeptYear."=". $subdeptyear->DeptYear."<br>");
        if($deptyear->DeptYear != $subdeptyear->DeptYear){
            $subdeptyear->DeptYear = $deptyear->DeptYear;
            $subdeptyear->Save();
        }
    }
    
    
}
*/
/*
$grades = GradeCard::LoadArrayBySubject(1021);

foreach ($grades as $grade){
    $grade->Total = round($grade->Total);
    $grade->Save();
}

_p("rounded.........");
*/



/*$roles = Role::LoadArrayByParrent(9);
foreach ($roles as $role){
    
    $subroles = Role::LoadArrayByParrent($role->Idrole);
    foreach ($subroles as $subrole){
        $rolehasmenus = RoleHasMenu::LoadArrayByRoleIdrole($subrole->Idrole);
        foreach ($rolehasmenus as $rolehasmenu){
            $rolehasmenu->Delete();
        }
        
        $adds = Address::LoadArrayByRoll($subrole->Idrole);
        foreach ($adds as $add){
            $add->Delete();
        }
        $subrole->Delete();
    }
    
    
    $adds = Address::LoadArrayByRoll($role->Idrole);
    foreach ($adds as $add){
        $add->Delete();
    }
    $role->Delete();
}
_p("settel all");

/*
$salaryheds = SalaryHead::LoadArrayBySalaryHead(108);
foreach ($salaryheds as $salaryhed){
    $salaryhed->ShowInSalary = 0;
    $salaryhed->Save();
}*/

//$roles = Role::LoadArrayByGrp(3);
//foreach ($roles as $role){
//    $role->ServiceYears = 58;
//    $role->Save();
//}
//$templates = SalaryTemplet::QueryArray(
//            QQ::AndCondition(
//            QQ::NotEqual(QQN::SalaryTemplet()->Employee, NULL)
//                    ));
//            foreach ($templates as $template){
//                $estabs = Establishment::LoadArrayByEmployee($template->Employee);
//                foreach ($estabs as $estab){}
//                $template->Establishment= $estab->Idestablishment;
//                $template->Save();
//            }
//$roles = Role::QueryArray(  
//         QQ::AndCondition(
//         QQ::Equal(QQN::Role()->Parrent, 9),
//          QQ::NotEqual(QQN::Role()->Idrole, 79)        
//                 ));
//         foreach ($roles as $role){
//             $logins = LoginHasRole::LoadArrayByDepartment($role->Idrole);
//             foreach ($logins as $login){
//                 $address = Address::LoadArrayByOf($login->LoginIdlogin);
//                 if(!$address){
////                     $address = new Address();
////                     $address->Of = $login->LoginIdlogin;
////                     $title = explode(" ", $login->LoginIdloginObject->IdloginObject->Name);
////                     if($title){
////                        $address->Title = $title[1].' '.$title[2]; 
////                      $address->Save();  
////                     }
//                 }else{
//                     foreach ($address as $addres){}
//                     $estbalishemnt = Establishment::LoadArrayByEmployee($addres->Idaddress);
//                     if(!$estbalishemnt){
//                         $estbalishemnt = new Establishment();
//                         $estbalishemnt->Employee = $addres->Idaddress;
//                         $estbalishemnt->BasicSalary = 1000;
//                         $estbalishemnt->AppointmentDate = QDateTime::Now();
//                         $estbalishemnt->Post = $login->RoleIdrole;
//                         $estbalishemnt->Save();
//                     }
//                 }
//             }
//         }
////$adress = Address::QueryArray(
////          QQ::AndCondition(
////          QQ::NotEqual(QQN::Address()->Of, 103),
////          QQ::NotEqual(QQN::Address()->Of, 29),
////          QQ::NotEqual(QQN::Address()->Of, 1),
////          QQ::NotEqual(QQN::Address()->Of, NULL)        
////                  ));
////          foreach ($adress as $adres){
////              $adres->Title = "--";
////              $adres->Save();
////          }
//$membertemplets = SalaryTemplet::QueryArray(
//                  QQ::AndCondition(
//                  QQ::NotEqual(QQN::SalaryTemplet()->Employee, NULL)        
//                          ));         
//foreach ($membertemplets as $membertemplet){
//$salaryheds = SalaryHead::LoadArrayBySalaryTemplet($membertemplet->IdsalaryTemplet);
//foreach ($salaryheds as $salaryhed){
//    $salaryhed->ShowInSalary = 1;
//    $salaryhed->Save();
//}
//}
    /*$profiles = Profile::LoadAll();
    $sr = 1; 
    foreach($profiles as $profile){
        $date = date('Y',  strtotime($profile->AddmissionDate));
        if($date == 1970){
            _p($sr++.')  code-'.$profile->OldPrn.'   Ad Date-'.date('d/m/Y', strtotime($profile->AddmissionDate)));
            echo '<br>';
        }
    }*/
/*
$roles = LoginHasRole::LoadAll();
    foreach($roles as $role){
        $role->Department = $role->RoleIdroleObject->Parrent;
        $role->Save();
    }
*/

?>