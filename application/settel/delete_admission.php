<?php
require('../../qcubed.inc.php');
$prn = array("2016MTEEN00015","2016MTEEN00011","2016MTECSCO008");
 $leds = Ledger::QueryArray(
                QQ::AndCondition(
                QQ::In(QQN::Ledger()->Code, $prn)
                ));
         
if($leds){
    foreach($leds as $led){
        $addresses = Address::LoadArrayByOf($led->Idledger);
        if($addresses){
            foreach ($addresses as $address){
                $apps = Application::LoadArrayByApplicant($address->Idaddress);
                if($apps){
                    foreach($apps as $app){
                        $docs = AppDocs::LoadArrayByApplication($app->Idapplication);
                        if($docs){
                            foreach ($docs as $doc){
                                $doc->Delete();
                            }
                        }
                        $approvals = AppApproval::LoadArrayByApplication($app->Idapplication);
                        if($approvals){
                            foreach ($approvals as $approval){
                                $approval->Delete();
                            }
                        }
                        $app->Delete();
                    }
                }
            }
            $address->Delete();
        }
        $profile = Profile::LoadByIdprofile($led->Idledger);
        if($profile){
            $profile->Delete();
        }
        $educations = EducationDetails::LoadArrayByStudent($led->Idledger);
        if($educations){
            foreach ($educations as $education){
                $education->Delete();
            }
        }
        $gardians = Gardian::LoadArrayByOf($led->Idledger);
        if($gardians){
            foreach($gardians as $gardian){
                $gardian->Delete();
            }
        }
        $login = Login::LoadByIdlogin($led->Idledger);
        if($login){
            $lhrs = LoginHasRole::LoadArrayByLoginIdlogin($login->Idlogin);
            if($lhrs){
                foreach($lhrs as $lhr){
                    $lhr->Delete();
                }
            }
        }
        $currents = CurrentStatus::LoadArrayByStudent($led->Idledger);
        if($currents){
            foreach($currents as $status){
                $status->Delete();
            }
        }
        
        

        $led->Delete();
    }
    _p("cleared");
}
?>


