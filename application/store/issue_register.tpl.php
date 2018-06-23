
<?php require(__CONFIGURATION__ . '/header.inc.php'); ?>
<?php $this->RenderBegin(); ?>

    <div class="form-controls ">
        <div ><?php $this->calDate1->RenderWithName(); ?></div>
       
        <div style="margin-left: 180px;"class="col-md-4"> <?php $this->lstmember->RenderWithName();?> </div>
        <table class="datagrid">
            <tr>
                <th width="3%"></th>
                <th width="4%"><div align="center">Sr</div></th>
                <th width="5%"><div align="center">Item</div></th>
                <th width="4%"><div align="center">Serials</div></th>
                <th width="4%"><div align="center">Description</div></th>
                <th width="12%"><div align="center">Return Date</div></th>
                <th width="4%"><div align="center">Return Item</div></th>
            </tr>
                <?php if(isset($_GET['fdate']) && isset($_GET['mem'])){ 
                $sr =1;
              
                $issues = IssuedItems::QueryArray(
                QQ::AndCondition(
                        QQ::Equal(QQN::IssuedItems()->Member,$_GET['mem']),
                        QQ::Equal(QQN::IssuedItems()->Date,date('Ymd', strtotime($this->calDate1->Text)))
                        ));
                        foreach ($issues as $issue){
                            //  $from = explode(' ', $issue->ReturnedDate)
                ?>
                  
                        <tr> 
                            <td><div align="center"><?php _p($this->lbldelete2[$issue->IdissuedItems]->Render())?></div></td>
                            <td><div align="center"> <?php _p($sr++)?></div></td>
                            <td style="cursor:pointer" onclick="window.document.location='<?php _p(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__); ?>/store/issue_register.php?id=<?php _p($issue->IdissuedItems)._p('&mem='.$_GET['mem'])._P('&fdate='.date('Ymd',  strtotime($_GET['fdate']))); ?>'"><div align="center"><?php _p($issue->ItemObject)?></div></td>
                            <td><div align="center"><?php _p($issue->Serials)?></div></td>
                            <td><div align="center"><?php _p($issue->Description)?></div></td>
                            <td><div align="center"><?php if($issue->ReturnedDate){?><?php _p(date('Y-m-d',  strtotime($issue->ReturnedDate)));}?></div></td>
                            <td><div align="center"> <?php _p($this->chkrtDate[$issue->IdissuedItems]->Render())?></div></td>
                        </tr>
                        <div style="clear: both;"></div>
                <?php }} ?>
            <div style="clear: both;"></div>
            <tr>
                <td></td>
                <td></td>
                <td width="18%"><div style="margin-left: 10px;"><?php $this->lstitem->RenderWithName(); ?></div></td> 
                <td width="15%"><?php $this->lstserial->RenderWithName(); ?></td>
                <td width="21%"><?php $this->txtDescription->RenderWithName(); ?></td>
                <td width="15%"><?php $this->btnSave1->Render(); ?></td>
                <td width="2%"></td>
            </tr>        
        </table>
        <?php // } ?>
    </div>
	<?php $this->RenderEnd() ;?>

<?php //require(__CONFIGURATION__ .'/footer.inc.php'); ?>