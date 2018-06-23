
<?php   require(__CONFIGURATION__ . '/header.inc.php'); ?>
<?php $this->RenderBegin() ?>

<?php   $login = Login::LoadByIdlogin($_SESSION['login']);  ?>
<div class="form-controls">
    <table width="100%" border="0">
        <tr>
            <td><strong>Department</strong></td>
            <td><?php $this->lstdept->Render(); ?></td>
            <td><strong>From</strong></td>
            <td><?php $this->calfrom->Render(); ?></td>
            <td><strong>To</strong></td>
            <td><?php $this->calto->Render(); ?></td>
            <td><?php $this->btnSearch->Render(); ?></td>
        </tr>
    </table>
</div>
<?php
if (isset($_GET["dept"])) {
    $from = $_GET['from'];
    $to = $_GET['to'];
    $dept = $_GET['dept'];
    ?>
    <script language="javascript">
        function Clickheretoprint(){
            var disp_setting = "toolbar=yes,location=no,directories=yes,menubar=yes,";
            disp_setting += "scrollbars=yes, left=100, top=10, right=100 ";
            var content_vlue = document.getElementById("Print").innerHTML;

            var docprint = window.open("", "", disp_setting);
            docprint.document.open();
            docprint.document.write('</head><body onload="window.print(); window.close();"><style type="text/css">@import url("../../../assets/_core/css/styles.css");</style><center>');
            docprint.document.write(content_vlue);
            docprint.document.write('</center></body></html>');
            docprint.document.close();
        }
    </script>  
    <script src="dragtable.js"></script>
    <script src="jquery-latest.js"></script>
    <a href="javascript:Clickheretoprint()">
        <img src="<?php _p(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__ . '/print.png'); ?>" width="40" height="40" />
    </a>
    <div class="form-controls">
        <div id="Print" style="background-color: #FFF;">
            <?php if (isset($_GET['from'])) {   ?>
            
            <?php include './letterhead.php'; ?>
            <table class="datagrid" border="1" class="draggable sortable">
                <tr>
                    <th width="24"><div align="center"><strong>Sr.</strong></div></th>
                    <th width="160"><div align="center"><strong>Product</strong></div></th>
                    <th width="174"><div align="center"><strong>Opening</strong></div></th>
                    <th width="174"><div align="center"><strong>Inward</strong></div></th>
                    <th width="102"><div align="center"><strong>Outward</strong></div></th>
                    <th width="100"><div align="center"><strong>Closing</strong></div></th>
                </tr>
                <?php
                    $from = $_GET['from'];
                    $to = $_GET['to'];
                   
                    for($i = $from ; $i <= $to ; $i++){
                ?>
               
                 <?php 
                    $sr = 1;
                    $itemindept = array();
                    $reqs = Iwow::QueryArray(
                                        QQ::AndCondition(
                                            QQ::GreaterOrEqual(QQN::Iwow()->Date, date('Ymd000000', strtotime($i))), 
                                            QQ::LessOrEqual(QQN::Iwow()->Date, date('Ymd235959', strtotime($i))),
                                            QQ::Equal(QQN::Iwow()->ToDeparment, $_GET['dept'])
                                        ),QQ::GroupBy(QQN::Iwow()->Item));
                    if($reqs){ 
                        foreach ($reqs as $req) {
                            $itemindept[$req->Item] = $req->ItemObject->Name;
                        }
                    }
                    
                    $issuedreqs = DeptTransfer::QueryArray(
                                        QQ::AndCondition(
                                            QQ::GreaterOrEqual(QQN::DeptTransfer()->Date, date('Ymd000000', strtotime($i))), 
                                            QQ::LessOrEqual(QQN::DeptTransfer()->Date, date('Ymd235959', strtotime($i))),
                                            QQ::Equal(QQN::DeptTransfer()->FromDept, $_GET['dept'])
                                        ),QQ::GroupBy(QQN::DeptTransfer()->Item));    
                    foreach($issuedreqs as $issuedreq){    
                        if(!array_key_exists($issuedreq->Item, $itemindept)){
                            $itemindept[$issuedreq->Item] = $issuedreq->ItemObject->DisplayName;
                        }
                    }
                    if($itemindept){
                ?>
                <tr><td colspan="6"><strong>Date : <?php _p(date('d/m/Y', strtotime($i))); ?></strong></td></tr>
               
                <?php 
                    foreach($itemindept as $key => $itemindept){
                    $openingqty = $inward = $outward = $closing = $issue = 0 ; 
                    
                    //issued items
                    $issued = DeptTransfer::QueryArray(
                                        QQ::AndCondition(
                                            QQ::LessThan(QQN::DeptTransfer()->Date, date('Ymd000000', strtotime($i))),
                                            QQ::Equal(QQN::DeptTransfer()->FromDept, $_GET['dept']),
                                            QQ::Equal(QQN::DeptTransfer()->Item, $key)    
                                        ));    
                    foreach($issued as $isuse){    
                        $issue = $issue + 1;
                    }
                    
                    //opening qty
                    $openings = Iwow::QueryArray(
                                        QQ::AndCondition(
                                            QQ::LessThan(QQN::Iwow()->Date, date('Ymd000000', strtotime($i))),
                                            QQ::Equal(QQN::Iwow()->ToDeparment, $_GET['dept']),
                                            QQ::Equal(QQN::Iwow()->Item, $key)    
                                        ));    
                    foreach($openings as $opening){    
                        $openingqty = $openingqty + $opening->Qty;
                    }
                    
                    //inward qty
                    $inwardreqs = Iwow::QueryArray(
                                        QQ::AndCondition(
                                            QQ::GreaterOrEqual(QQN::Iwow()->Date, date('Ymd000000', strtotime($i))), 
                                            QQ::LessOrEqual(QQN::Iwow()->Date, date('Ymd235959', strtotime($i))),
                                            QQ::Equal(QQN::Iwow()->ToDeparment, $_GET['dept']),
                                            QQ::Equal(QQN::Iwow()->Item,$key)    
                                        ));    
                    foreach($inwardreqs as $inwardreq){    
                        $inward = $inward + $inwardreq->Qty;
                    }
                    
                    //outward qty
                     $outwardreqs = DeptTransfer::QueryArray(
                                        QQ::AndCondition(
                                            QQ::GreaterOrEqual(QQN::DeptTransfer()->Date, date('Ymd000000', strtotime($i))), 
                                            QQ::LessOrEqual(QQN::DeptTransfer()->Date, date('Ymd235959', strtotime($i))),
                                            QQ::Equal(QQN::DeptTransfer()->FromDept, $_GET['dept']),
                                            QQ::Equal(QQN::DeptTransfer()->Item, $key)    
                                        ));    
                    foreach($outwardreqs as $outwardreq){    
                        $outward = $outward + 1;
                    }
                    
                    $openingqty = $openingqty - $issue;
                    $closing = ($openingqty + $inward) - $outward;
                ?>  
                
                <tr>
                    <td><div align="center"><?php _p($sr++); ?></div></td>
                    <td><div align="center"><?php _p($itemindept); ?></div></td>
                    <td><div align="center"><?php _p($openingqty); ?></div></td>
                    <td><div align="center"><?php _p($inward); ?></div></td>
                    <td><div align="center"><?php _p($outward); ?></div></td>
                    <td><div align="center"><?php _p($closing); ?></div></td>
                </tr>
                    <?php }}}?>  
            </table>
        <?php } ?>
        </div>
    </div>
    <?php } ?>
<?php $this->RenderEnd() ?>

