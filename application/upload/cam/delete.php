<?php
require('../../../qcubed.inc.php');
if(isset($_GET['flag'])){
    $app = Application::LoadByIdapplication( $_GET['id']);
}else{
   $apps = Application::QueryArray(
                                QQ::AndCondition(
                                QQ::Equal(QQN::Application()->ApplicantObject->Of, $_GET['id']),
                                QQ::Equal(QQN::Application()->AppliedFor, 1)                                            
                                        )
                                    );
                foreach ($apps as $app){}
}

$img = '../documents/A'.$app->Code.'/'.(int)$_GET['doc'].'.png'; 
if(file_exists ($img) ){
    unlink($img);
}
$docs = AppDocs::LoadArrayByApplication($app->Idapplication);
foreach ($docs as $doc){
    if($doc->Scans != NULL){
    $scans = explode(",", $doc->Scans);
    if($scans){
        foreach ($scans as $scan){
            if($scan == $_GET['doc']){
               $cams = explode(",", $doc->Scans);
               $sr = $key = 0;
               $scanstr = NULL;
               foreach ($cams as $cam){
                   if($cam != $_GET['doc']){
                       $sr = $sr +1;
                   }
               }
               foreach ($cams as $cam){
                   if($cam != $_GET['doc']){
                       $key = $key +1;
                       if($sr == $key)
                           $scanstr = $scanstr.$cam;
                       else
                           $scanstr = $scanstr.$cam.',';
                   }
                  
               }
                QApplication::DisplayAlert($scanstr);
                $doc->Scans = $scanstr;
                $doc->Save();
                }                               
            }
        }
      }
    }
    if(isset($_GET['flag'])){
         QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/student_application/application.php?id='.$_GET['id'].'&tab=4');
    }else{
        QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/admission/admission.php?id='.$_GET['id'].'&tab=4');
    }
?>