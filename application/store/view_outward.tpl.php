<?php
require(__CONFIGURATION__ . '/header.inc.php');
?>

<?php $this->RenderBegin() ?>

<div class="form-controls">
                <?php if(isset($_GET['Item'])&& isset($_GET['date'])&& isset($_GET['Dept'])){
                                 $depttrans = DeptTransfer::QueryArray(
                                        QQ::AndCondition(
                                            QQ::Equal(QQN::DeptTransfer()->Item,$_GET['Item']),    
                                            QQ::Equal(QQN::DeptTransfer()->ToDept,$_GET['Dept']),
                                            QQ::GreaterOrEqual(QQN::DeptTransfer()->Date,date('Ymd000000',strtotime($_GET['date']))),
                                            QQ::LessOrEqual(QQN::DeptTransfer()->Date,date('Ymd235959',strtotime($_GET['date'])))
                                      ),
                                       QQ::GroupBy(QQN::DeptTransfer()->Item));
                      if($depttrans){
                                    foreach ( $depttrans as  $dept){
                             ?>
     <div style="clear: both; margin-bottom: 10px;"></div>
         <table style="width: 100%;">
                  <tr>
                  <td width="10%;"><?php  _p('Deparment :'.' '.$dept->ToDeptObject); ?> </td>
                    <td width="15%;"><?php _p('Date:'.' '.date('Y-m-d',  strtotime($dept->Date))) ?></td>                        
                  </tr>
                </table>
                <div  style="width:80%;">
                        <table width="100%" border="0" class="datagrid">
                            <tr>
                                <th width="6%"><div align="center">Sr.No.</div></th>
                                <th width="40%">Asset Name</th>
                                <th width="14%">Quantity</th>
                            </tr>
                              <?php 
                           //   if( $vhps){
                                $sr = 1;
                             
                                ?>
                            <tr>
                                <td><div align="center">
                                  <?php _p($sr++); ?>
                                </div></td>
                                <td><?php 
                                _p($dept->ItemObject);
                                ?></td>
                                   <?php    ?>
                                <td><div align="center">
                                  <?php
                                   $productcount = DeptTransfer::QueryCount(
                                    QQ::AndCondition(
                                         QQ::Equal(QQN::DeptTransfer()->Item,$dept->Item),
                                         QQ::Equal(QQN::DeptTransfer()->ToDept,$dept->ToDept),
                                         QQ::GreaterOrEqual(QQN::DeptTransfer()->Date,date('Ymd000000',strtotime($dept->Date))) ,
                                         QQ::LessOrEqual(QQN::DeptTransfer()->Date,date('Ymd235959',strtotime($dept->Date)))
                                      ));
                                  _p($productcount); ?>
                                </div></td>
                              <?php   //voucher has product end   ?>
                                   </tr>
                                <?php }}  //} ?>
                         </table>
                </div>
       <?php } ?>
    <div style="clear: both; margin-bottom: 10px;"></div>
</div>
<div style="clear: both"></div>
<?php $this->RenderEnd() ?>
<?php //require(__CONFIGURATION__ .'/footer.inc.php'); ?>
