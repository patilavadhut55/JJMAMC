<?php
require('../../qcubed.inc.php');
$loans = BankLoan::LoadAll();
foreach ($loans as $loan){
    $loan->Show =1;
    $loan->Save();
}
$heads = SalaryHead::QueryArray(
         QQ::AndCondition(
         QQ::NotEqual(QQN::SalaryHead()->SalaryTemplet, 1),
         QQ::Equal(QQN::SalaryHead()->SalaryHead, 98)
        ));
foreach ($heads as $head){
    $bankloans = BankLoan::QueryArray(
                QQ::AndCondition(
                QQ::Equal(QQN::BankLoan()->Employee, $head->SalaryTempletObject->EmployeeObject->Of),
                QQ::Equal(QQN::BankLoan()->Show, 1)        
                        ));
    if($bankloans){
        $amt = 0;
        foreach ($bankloans as $bankloan){
            $amt = $amt+ $bankloan->Amount;
        }
        $head->Amount = $head->GeneratedAmount = $amt;
        $head->Save();
    }
}
?>
