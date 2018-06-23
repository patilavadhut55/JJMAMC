<?php
require('../../qcubed.inc.php');

$places = Place::LoadArrayByGrp(3);
foreach ($places as $place){
    $prants = Place::QueryArray(
            QQ::AndCondition(
                QQ::Equal(QQN::Place()->Grp, 4),
                QQ::Equal(QQN::Place()->Parrent, $place->Idplace)
            )
        );
    foreach ($prants as $prant){
        $talukas = Place::LoadArrayByParrent($prant->Idplace);
        foreach ($talukas as $taluka){
            $taluka->Parrent = $place->Idplace;
            $taluka->Save();
        }
        $adds = Address::LoadArrayByTaluka($prant->Idplace);
        foreach ($adds as $add){
            $add->Taluka = NULL;
            $add->Save();
        }
        $adds = Address::LoadArrayByTaluka1($prant->Idplace);
        foreach ($adds as $add){
            $add->Taluka1 = NULL;
            $add->Save();
        }
        $prant->Delete();
    }
}

QApplication::DisplayAlert('Settel Successfully');
?>
