<?php require(__CONFIGURATION__ . '/header.inc.php'); ?>
<?php $this->RenderBegin(); ?>


<div class="form-controls" >
    <div class="col-md-7 pull-left" >
        <div>
            <div style="width:56%;float: left;margin-right: 0px;"><?php $this->caldate->RenderWithName(); ?></div>
            <div style="float: left;"><?php $this->btnOld->RenderWithName(); ?></div>
        </div>
       
       
        <div>
            <div style="float: left; width: 94%;"><?php $this->txtSearch->RenderWithName(); ?></div>
            <div style="float: left; width: 94%;"><?php $this->lstdoc->RenderWithName(); ?></div>
            <div style="float: left; width:5%; margin-top: 4px;"><?php $this->btnSearch->Render(); ?></div>
            <div style="clear: both;"></div>
        </div>
       
        <div style="clear: both"></div>
         <?php if(isset($_GET['doc'])){
            $app = CertificateTemplet::LoadByIdcertificateTemplet($_GET['doc']); ?>
        
<!--        <div class="renderWithName">
                <div class="form-name">
                    <label ></label>
                </div>
                <div class="form-field">
                    <div style="width:100px;float: left">Prefix</div>
                    <div style="width:100px;float: left">FirstName</div>
                    <div style="width:100px;float: left">Middle Name</div>
                    <div style="width:100px;float: left">Last </div>                     
                </div>
        </div>-->
        
        <div class="renderWithName">
                <div class="form-name">
                    <label >Name</label>
                </div>
                <div class="form-field">
                    <div style="width:100px;float: left">Prifix<?php $this->lstprefix->Render(); ?></div>
                    <div style="width:100px;float: left">First Name<?php $this->txtFirstname->Render(); ?></div>
                    <div style="width:100px;float: left">Middle Name<?php $this->txtMiddlename->Render(); ?></div>
                    <div style="width:100px;float: left"> Last Name<?php $this->txtLastname->Render(); ?></div>                    
                </div>
        </div>
        
<!--        
         <div>
             <div>
                 <div style="float: left;margin-left: 20px;margin-right: 40px;"> <strong>Prefix</strong></div>   
             
                 <div style="clear: both;"></div>
             </div>
             <div>
                 <div style="float: left;margin-left: 20px;margin-right: 10px;"> <strong>First Name</strong></div>   
                 
                 <div style="clear: both;"></div>
             </div>
               <div>
                 <div style="float: left;margin-left: 10px;margin-right: 10px;"> <strong>Middle Name</strong></div>   
                 
                 <div style="clear: both;"></div>
             </div>
              <div>
                 <div style="float: left;margin-left: 10px;margin-right: 15px;"> <strong>Last Name</strong></div>   
                 
                 <div style="clear: both;"></div>
             </div>
            
        </div>-->
        <div style="float: left; width: 94%;">
            <?php $this->txtReason->RenderWithName(); ?>
        </div>
         <?php 
        if ($app->IdcertificateTemplet == 22) { ?>

             <div style="float: left; width: 94%;"><?php $this->lstNationality->RenderWithName(); ?></div>
              <div style="float: left; width: 94%;"><?php $this->txtplace->RenderWithName(); ?></div>
              <div style="float: left; width: 94%;"><?php $this->caldob->RenderWithName(); ?></div>
              <div style="float: left; width: 94%;"><?php $this->txtdob->RenderWithName(); ?></div>
              <div style="float: left; width: 94%;"><?php $this->txtYearin->RenderWithName(); ?></div>
            <div style="float: left; width: 94%;"><?php $this->txtLast->RenderWithName(); ?></div>
            <div style="float: left; width: 94%;"><?php $this->txtProgress->RenderWithName(); ?></div>

         <?php }}?>
        <div style="clear: both;"></div>
        
    </div>
    <?php if (isset($_GET['mem'])) { ?>
        <div class="col-md-5 pull-left" >
            <?php
            if (isset($_GET['mem'])) {
                $profile = Profile::LoadByIdprofile($_GET['mem']);
                $ledger = Ledger::LoadByIdledger($_GET['mem']);
                $firsts = CurrentStatus::QueryArray(
                                QQ::AndCondition(
                                        QQ::Equal(QQN::CurrentStatus()->SemisterObject->Parrent, 1), QQ::Equal(QQN::CurrentStatus()->Student, $ledger->Idledger)
                ));
                foreach ($firsts as $first) {
                    
                }
                if (isset($_GET['year']))
                    $CurrentStatus = CurrentStatus::QueryArray(
                                    QQ::AndCondition(
                                            QQ::Equal(QQN::CurrentStatus()->SemisterObject->Parrent, $_GET['year']), QQ::Equal(QQN::CurrentStatus()->Student, $ledger->Idledger)
                    ));
                else
                    $CurrentStatus = CurrentStatus::LoadArrayByStudent($ledger->Idledger);

                if ($CurrentStatus)
                    foreach ($CurrentStatus as $CurrentStatu) {
                        
                    }
                ?>
              
                <div style="width: 100%; border: 1px solid lightgrey; border-radius: 7px; padding: 15px;">
                    <table border="0" width="100%">
                        <tr height="30">
                            <td width="70" rowspan="3"><img src="<?php _p(__VIRTUAL_DIRECTORY__ . __IMAGE_ASSETS__); ?>/prof.png" width="75" height="75"  style="padding-right: 15px;"alt=""/></td>
                            <td width="62" >Name</td>
                            <td width="14"><strong>:</strong></td>
                            <td colspan="4"><strong><?php _p(get_full_name($ledger->Name)); ?></strong></td>
                        </tr>
                        <tr height="30">
                            <td>Program</td>
                            <td><strong>:</strong></td>
                            <td width="200"><?php _p(delete_all_between('[', ']', $CurrentStatu->RoleObject->ParrentObject)); ?></td>
                            <td></td>

                        </tr>
                        <tr height="30">
                            <td>Year</td>
                            <td><strong>:</strong></td>
                            <td colspan="4"><?php _p($CurrentStatu->SemisterObject->Name ); ?></td>
                        </tr>
                    </table>
                    </div>
                    <div >
                        <?php if($app->IdcertificateTemplet == 22){ ?>
                        <div style="margin-top: 5px; width: 100%;" >
                            <div style="float: left; margin-right: 85px; width: 10%; "><strong>Caste</strong></div>
                            <div style="float: left; width: 45%; margin-right: 10px;"><?php $this->txtCaste->Render(); ?></div>
                            <div style="clear: both;"></div>
                        </div>
                        <div style="margin-top: 5px; width: 100%;" >
                             <div style="float: left; margin-right: 68px; width: 15%; "><strong>Religion</strong></div>
                            <div style="float: left; width: 45%;"><?php $this->txtReligion->Render(); ?></div>
                            <div style="clear: both;"></div>
                        </div>
                        <div style="margin-bottom: 10px; margin-top: 10px;">
                            <div style="float: left; margin-right: 10px; width: 30%;"><strong>Date of Admission</strong></div>
                            <div style="float: left;"><?php $this->caldoa->Render(); ?></div>
                            <div style="clear: both;"></div>
                        </div>
                        <div style="margin-top: 5px;">
                           
                            <div style="float: left; margin-right:9px; width: 28%; "><strong>Date of Passout</strong></div>
                            <div style="float: left">
                            <div style="float: left;"><?php $this->caldop->Render(); ?></div>
                            <div style="float: left;"><?php $this->txtDes->Render();?></div>
                            </div>
                            <div style="clear: both;"></div>
                        </div>
                        <div style="margin-top: 5px;">
                            <div style="float: left; margin-right: 10px; width: 30%; "><strong>Registration No</strong></div>
                            <div style="float: left;"><?php $this->txtNo->Render(); ?></div>
                            <div style="clear: both;"></div>
                        </div>
                         <div style="margin-top: 5px;">
                            <div style="float: left; margin-right: 10px; width: 30%; "><strong>Conduct</strong></div>
                            <div style="float: left; width: 250px;"><?php $this->txtconduct->Render(); ?></div>
                            <div style="clear: both;"></div>
                        </div>
                         <div style="margin-top: 5px;">
                            <div style="float: left; margin-right: 10px; width: 30%; "><strong>Remark</strong></div>
                            <div style="float: left; width: 250px"><?php $this->txtremark->Render(); ?></div>
                            <div style="clear: both;"></div>
                        </div>
                        <?php } ?>
                    </div>
                
               
            <?php } ?>
        </div>
        
       
        <div style="clear: both;"></div>
        <div class="form-actions">
            <div style="float: left" ><?php $this->btnCancel->Render(); ?></div>
            <div style="float: right" ><?php $this->btnSave->Render(); ?></div>
        </div>
<?php } ?>
    <div style="clear: both;"></div>
</div>

<?php $this->RenderEnd() ?>
<?php //require(__CONFIGURATION__ .'/footer.inc.php'); ?>
