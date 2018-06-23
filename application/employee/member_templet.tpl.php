        <style type="text/css">@import url("<?php _p(__VIRTUAL_DIRECTORY__ . __CSS_ASSETS__); ?>/styles.css");</style>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="<?php _p(__APP_CSS_ASSETS__) ; ?>/bootstrap.css" rel="stylesheet" media="screen">
        <link href="<?php _p(__APP_CSS_ASSETS__) ; ?>/bootstrap-toggle.min.css" rel="stylesheet"> 
        <link rel="stylesheet" href="<?php _p(__APP_CSS_ASSETS__); ?>/font-awesome.min.css" />
       
<body <?php if(isset($_SESSION['login'])){ ?>style="background: none repeat scroll 0 0 #fff;" <?php } ?>>
    <?php $this->RenderBegin() ?>

         <div class="pull-right slideup">                
            <?php //$this->btnList->Render(); ?>
        </div>
    <div class="form-controls">
    <table width="90%" border="0">
  <tr>
    <td width="70%"><div class="form-name"><b>Salary Templet</b></div><div class="form-field"><?php $this->lstTemplet->Render(); ?></div></td>
    <td width="30%"><span class="form-field">
      <?php $this->btnApply->Render(); ?>
    </span></td>
  </tr>
</table>
<br><br>        <table width="91%" border="0" align="center">
  <?php if (isset($_GET['id'])){ ?>
  <tr>
    <td width="49%" align="left" valign="top">
      <?php 
    $grp1 = Ledger::LoadByCode('SH1');
    $earnings = SalaryHead::QueryArray(
                QQ::AndCondition(
                QQ::Equal(QQN::SalaryHead()->SalaryTemplet, $_GET['id']),
                QQ::Equal(QQN::SalaryHead()->SalaryHeadObject->Grp, $grp1->Idledger)        
                        ),  QQ::OrderBy(QQN::SalaryHead()->SalaryHeadObject->Code)); 
    if($earnings){
    
    ?>    
      <table class="datagrid" width="100%" border="1" style="border:1px solid #CCC; line-height:20px; font-size: 12px;">
        <tr>
          <th></th>  
          <th width="11%"><div align="center"><strong>Sr</strong></div></th>
          <th width="50%"><div align="center"><strong>Earning Heads</strong></div></th>
          <th width="32%"><div align="center"><strong>Type</strong></div></th>
          <th width="32%"><div align="center">Amount</div></th>
          <th width="7%"><div align="center">Show</div></th>
          <th width="7%"><div align="center"></div></th>
          </tr>
        <?php 
      $sr = 1;
      foreach($earnings as $earning){
      ?>
        <tr>
          <td><div align="center">
            <?php  $this->lblEdit[$earning->IdsalaryHead]->Render(); ?>
            </div></td>  
          <td><div align="center">
            <?php  _p($sr++); ?>
            </div></td>
          <td>&nbsp;<?php _p($earning->SalaryHeadObject.' - '.$earning->SalaryHeadObject->Name); ?></td>
          <td><div align="center">
            <?php _p($earning->CalculationGrpObject); if($earning->BasedSalaryHead != NULL) _p(' '.$earning->Percentage.'% of '.$earning->BasedSalaryHeadObject ); ?>
          </div></td>
          <td><div align="right">
            <?php _p(number_format($earning->GeneratedAmount,2,'.','')); ?>
            &nbsp;</div></td>
          <td><div align="center">
            <?php  $this->chkShow[$earning->IdsalaryHead]->Render(); ?>
          </div></td>
          <td><?php $this->lbldel[$earning->IdsalaryHead]->Render();?></td>
          </tr>
        <?php } ?>
        </table>
      <?php } ?>
      </td>
    <td width="2%" align="right" valign="top">&nbsp;</td>
    <td width="49%" align="right" valign="top"><?php 
    $grp2 = Ledger::LoadByCode('SH2');
    $deductions = SalaryHead::QueryArray(
                QQ::AndCondition(
                QQ::Equal(QQN::SalaryHead()->SalaryTemplet, $_GET['id']),
                QQ::Equal(QQN::SalaryHead()->SalaryHeadObject->Grp, $grp2->Idledger)        
                        ),  QQ::OrderBy(QQN::SalaryHead()->SalaryHeadObject->Code)); 
    if($deductions){
    
    ?>
      <table class="datagrid" width="100%" border="1" style="border:1px solid #CCC; line-height:20px; font-size: 12px;">
        <tr>
          <th></th>  
          <th width="11%"><div align="center"><strong>Sr</strong></div></th>
          <th width="50%"><div align="center"><strong>Deduction Heads</strong></div></th>
          <th width="32%"><div align="center"><strong>Type</strong></div></th>
          <th width="32%"><div align="center">Amount</div></th>
          <th width="7%"><div align="center">Show</div></th>
          <th width="7%"><div align="center"></div></th>
          </tr>
        <?php 
      $sr = 1;
      foreach($deductions as $deduction){
      ?>
        <tr>
          <td><div align="center">
            <?php $this->lblEdit[$deduction->IdsalaryHead]->Render(); ?>
            </div></td>  
          <td><div align="center">
            <?php _p($sr++); ?>
            </div></td>
          <td>&nbsp;<?php _p($deduction->SalaryHeadObject.' - '.$deduction->SalaryHeadObject->Name); ?></td>
          <td><div align="center">
            <?php _p($deduction->CalculationGrpObject); if($deduction->BasedSalaryHead != NULL) _p('% '.$deduction->Percentage.' of '.$deduction->BasedSalaryHeadObject ); ?>
          </div></td>
          <td><div align="right">
            <?php _p(number_format($deduction->GeneratedAmount,2,'.','')); ?>
            &nbsp;</div></td>
          <td><div align="center">
            <?php $this->chkShow[$deduction->IdsalaryHead]->Render();?>
          </div></td>
          <td><?php $this->lbldel[$deduction->IdsalaryHead]->Render();?></td>
          </tr>
        <?php } ?>
        </table>
      <?php } ?></td>
  </tr>
  <tr>
      <td ><div align="right"><strong>Net Pay</strong></div></td>
    <td align="center"><strong>=</strong></td>
    <td ><strong>
      <?php  
            $totalE = $totalD = 0;
            $totals = SalaryHead::QueryArray(
                                QQ::AndCondition(
                                QQ::Equal(QQN::SalaryHead()->SalaryTemplet, $_GET['id']),
                                QQ::OrCondition(       
                                QQ::Equal(QQN::SalaryHead()->SalaryHeadObject->Code, "SE99"),
                                QQ::Equal(QQN::SalaryHead()->SalaryHeadObject->Code, "SD99")        
                                        )
                                        )); 
            if($totals){
                foreach ($totals as $total){
                    if($total->SalaryHeadObject->Code == "SE99")$totalE = $total->GeneratedAmount;
                    else $totalD = $total->GeneratedAmount;
                }
            }
          _p(number_format($totalE - $totalD,2,'.',''));  
      ?>
    </strong></td>
  </tr>
  <tr>
    <td valign="top" align="left">&nbsp;</td>
    <td valign="top" align="right">&nbsp;</td>
    <td valign="top" align="right">&nbsp;</td>
  </tr>
  <tr>
    <td valign="top" align="left"><div align="center">
      <?php $this->btnEarnings->Render(); ?>
      </div></td>
    <td valign="top" align="right">&nbsp;</td>
    <td valign="top" align="right"><div align="center">
      <?php $this->btnDeduction->Render(); ?>
      </div></td>
  </tr>
  <?php } ?>
      </table>

        
    </div>
 <div class="form-actions">
          <div class="form-save"><?php $this->btnBack->Render(); ?></div>
          <div class="form-cancel"><?php $this->btnLoan->Render(); ?></div>
            
      </div>

    <?php $this->RenderEnd() ?>
    </body>
<script src="<?php echo __APP_JS_ASSETS__ ; ?>/jquery.js"></script>
<script src="<?php echo __APP_JS_ASSETS__ ; ?>/bootstrap.min.js"></script>
<script src="<?php _p(__APP_JS_ASSETS__) ; ?>/bootstrap-toggle.min.js"></script>

<?php //require(__CONFIGURATION__ .'/footer.inc.php'); ?>