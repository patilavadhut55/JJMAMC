<?php
    require('../../qcubed.inc.php');
    
    function getFullName($name,$code){
        return str_replace($code,'', $name);
    }
    
    $led = Ledger::LoadByCode("2013BIT050");
    _t($led->Name.'<br>');
    _t(getFullName($led->Name,$led->Code).'<br>');
    
    
?>