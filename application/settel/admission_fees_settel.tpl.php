<?php
	$strPageTitle = QApplication::Translate('Staff Report') ;
	require(__CONFIGURATION__ . '/header.inc.php');
?>
    <?php $this->RenderBegin() ?>
<link rel="stylesheet" type="text/css" href="<?php _p(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__); ?>/jquery.dialogbox.css">       
<!--h1>Bulk Readmission</h1-->

<div class="form-controls">
    <div class="col-md-2"><?php $this->lstCal->Render(); ?></div>
    <div class="col-md-2"><?php $this->lstProgram->Render(); ?></div>
    <div class="col-md-3"><?php $this->lstTeachDept->Render(); ?></div>    
    <div class="col-md-2"><?php $this->lstSpecialization->Render();?></div>
    <div class="col-md-2"><?php $this->lstSem->Render(); ?></div>
    <div class="pull-right"><?php $this->btnReport->Render(); ?></div>
    <div style="clear: both; "></div>
    <?php if($this->lstCal->SelectedValue != NULL && $this->lstSem->SelectedValue!= NULL && $this->lstTeachDept->SelectedValue!= NULL){ ?>
        <script src="dragtable.js"></script>
        <div style="clear: both; height: 10px;"></div>        
        <?php $this->objDefaultWaitIcon->Render('Position=absolute', 'Top=55px', 'Left=350px'); ?>
        <div style="clear: both; height: 10px;"></div>
        <div style="overflow: auto; width: 100%;//1050px;" id="mytable">
            <table border="1" style="width: 100%; overflow: auto;" class="datagrid col-md-12 draggable sortable"  > 
                <tr>
                    <th><div align="center">Sr.</div></th>  
                    <th><div align="center">PRN</div></th>
                    <th><div align="center">Roll No</div></th>
                    <th><div align="center">Name</div></th>
                    <th><div align="center">Branch/Program</div></th>
                    <th><div align="center">Fee Concession Type</div></th>
                    <th><div align="center">SSH</div></th>
                    <th><div align="center">Vov</div></th>
                 
                </tr>
                    <?php
                        $Sr = 1;
                            $students = CurrentStatus::QueryArray(
                                    QQ::AndCondition(
                                        QQ::Equal(QQN::CurrentStatus()->CalenderYear, $this->lstCal->SelectedValue),
                                        QQ::Equal(QQN::CurrentStatus()->RoleObject->Parrent, $this->lstTeachDept->SelectedValue),
                                        QQ::Equal(QQN::CurrentStatus()->SemisterObject->Parrent, $this->lstSem->SelectedValue)
                                    ),QQ::GroupBy(QQN::CurrentStatus()->StudentObject->IdloginObject->Code));
                        
                        foreach ($students as $student){
                           //if($studentscnt > $Sr){
                           $profile = Profile::LoadByIdprofile($student->Student);
                           $address = Address::LoadArrayByOf($student->Student);
                           foreach ($address as $addres){}
                    ?>
                    <tr>
                        <td><?php _p($Sr++); ?></td>
                        <td><?php _p($student->StudentObject->IdloginObject->Code); ?></td>
                        <td><?php _p($student->RollNo); ?></td>
                        <td>
                            <?php 
                                _p(GetFullNameNew($student->StudentObject->IdloginObject->Name, $student->StudentObject->IdloginObject->Code));
                            ?>
                        </td>
                        <td><?php _p(delete_all_between('[', ']', $student->RoleObject->ParrentObject->ParrentObject->Name).'/'.delete_all_between('[', ']',$student->RoleObject->ParrentObject->Name)); ?></td>                  
                        <?php if($profile){ ?>
                        <td><?php  _p($profile->FeeConcessionObject);?></td>                         
                        <td>
                            <?php 
                            $scholarship = Ledger::LoadArrayByGrp($student->Student);
                            if($student->StudentObject->IdloginObject->Profile && $student->StudentObject->IdloginObject->Profile->FeeConcession != 1 && $student->StudentObject->IdloginObject->Profile->FeeConcession != 6 &&  $student->StudentObject->IdloginObject->Profile->FeeConcession != NULL){
                                if($scholarship){
                                    _p("Yes");
                                }else{
                                    _p("No");                                
                                }
                            }
                            ?>
                        </td>
                        <td>
                            <?php
                            if($scholarship){
                                $chkvov = Voucher::QueryArray(
                                            QQ::AndCondition(                                            
                                                QQ::Equal(QQN::Voucher()->AcademicYear, $_GET['sem']),
                                                QQ::Equal(QQN::Voucher()->Dr,$scholarship[0]->Idledger)
                                            )
                                        );                            
                                if($chkvov){
                                    _p("Yes");
                                }else{
                                    _p("No");
                                }
                            }else{
                                _p("No");
                            }
                            ?>
                        </td>
                        <?php }else{ ?>
                        <td></td>                       
                        <?php } ?>                        
                    </tr>
                    <?php } ///} ?>
            </table>
            <div style="clear: both; height: 10px;"></div>
            <?php $this->btnTakePhotoSign->Render(); ?>
        </div>
        <?php } ?>
</div>
<script>
    var tableToExcel = (function() {
      var uri = 'data:application/vnd.ms-excel;base64,'
        , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
        , base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
        , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
      return function(table, name) {
        if (!table.nodeType) table = document.getElementById(table)
        var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
        window.location.href = uri + base64(format(template, ctx))
      }
    })()

</script>

<?php $this->RenderEnd(); ?>
<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>

