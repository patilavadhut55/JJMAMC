<?php
require('../../../qcubed.inc.php');
$app = Ledger::LoadByIdledger($_GET['emp']);

$img = '../documents/A'.$app->Code.'/'.(int)$_GET['doc'].'.png'; 
if(file_exists ($img) ){
    unlink($img);
}
$docs = AppDocs::LoadArrayByMember($app->Idledger);
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
                
                $doc->Scans = $scanstr;
                $doc->Save();
                }                               
            }
        }
    }
    }
    QApplication::Redirect('ledgerdoc.php?emp='.$app->Idledger);

?>