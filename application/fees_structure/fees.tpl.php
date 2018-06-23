<?php require(__CONFIGURATION__ . '/header.inc.php'); ?>
<?php $this->RenderBegin(); ?>

    <div class="form-controls">
        <div style=" margin-bottom: 10px; "> 
        <div style="padding: 1px;" class="col-md-2"><?php $this->lstCalyear->Render(); ?></div>
        <div style="padding: 1px;" class="col-md-3"><?php $this->lstProgram->Render(); ?></div>
        <div style="padding: 1px;" class="col-md-3"><?php $this->lstAcadyear->Render(); ?></div>
        <div style="padding: 1px;" class="col-md-3"><?php $this->lstFeecontype->Render(); ?></div>
        <div class="pull-right"><?php $this->btnSearch->Render(); ?></div>
        <div style="clear: both;"></div>
<?php  if(isset($_GET['acdyear']) && isset($_GET['cal']) && isset($_GET['prog']) && isset($_GET['concession'])){?>
        <table class="datagrid" style='margin-top: 10px; '>
            <tr>
                <th><div align="center">Sr.</div></th>
                <th><div align="center">Seq</div></th>
                <th><div align="left">Fees Title</div></th>
                <th><div align="center">Parrent</div></th>
                <th><div align="center">Student</div></th>
                <th><div align="center">Government</div></th>
                <th>On Admission</th>
                <th>Exam Fee Head</th>
            </tr>
         <?php 
         $sr=1;
        
            $fees = Fees::QueryArray(
                            QQ::AndCondition(
                                    QQ::Equal(QQN::Fees()->AcademicYear, $_GET['acdyear']),
                                    QQ::Equal(QQN::Fees()->CalenderYear, $_GET['cal']),
                                    QQ::Equal(QQN::Fees()->Course, $_GET['prog']),
                                    QQ::Equal(QQN::Fees()->Category, $_GET['concession'])                                  
                                                                  
                                    
                            ),
                            QQ::Clause(QQ::OrderBy(QQN::Fees()->Seq, TRUE))
                        );
            if($fees){
            foreach($fees as $fee){
                 ?>
            <tr>
                <td>
                    <div align="center">
                        <?php $this->lbldelete[$fee->IdfeesTemplet]->Render(); ?>
                        &nbsp;&nbsp;<?php _p($sr++); ?>
                    </div>
                </td>
                <td><div align="center"><?php $this->txtseq1[$fee->IdfeesTemplet]->Render();  ?></td>
                <td><div align="left"><?php _p($fee->FeeObject); ?></div></td>
                <td><div align="center"><?php $this->lstparrent1[$fee->IdfeesTemplet]->Render(); ?></div></td>
                <td><div align="center"><?php $this->txtStudent[$fee->IdfeesTemplet]->Render();  ?></div></td>
                <td><div align="center"><?php $this->txtGovt[$fee->IdfeesTemplet]->Render(); ?></div></td>
                <td><div align="center"><?php $this->chkon[$fee->IdfeesTemplet]->Render(); ?></div></td>
                <td><div align="center"><?php $this->chkoff[$fee->IdfeesTemplet]->Render();?></div></td>
            </tr>
          <?php }?>
            <tr>
                <td></td>
                <td><?php ?></div></td>
                <td><?php ?></td>
                <td><?php ?></td>
                <td><?php ?></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
         <?php }
         ?>
            <tr>
                <td></td>
                <td ><div align="center"><?php $this->txtseq->Render(); ?></div></td>
                <td width="250"><?php $this->lstfees->Render(); ?></td>
                <td ><?php $this->lstparrent->Render(); ?></td>
                <td ><?php $this->btnAdd->Render(); ?></td>
                <td ></td>
                <td ></td>
                <td></td>
            </tr>
            
         </table>
<?php }?>        
        </div>
</div>
<?php if(isset($_GET['acdyear']) && isset($_GET['cal']) && isset($_GET['prog']) && isset($_GET['concession'])){ ?>
    <div class="form-controls">
        <div style=" margin-bottom: 10px; "> 
        <div style="padding: 1px;" class="col-md-2"><?php $this->lstCalyear1->Render(); ?></div>
        <div style="padding: 1px;" class="col-md-3"><?php $this->lstProgram1->Render(); ?></div>
        <div style="padding: 1px;" class="col-md-2"><?php $this->lstAcadyear1->Render(); ?></div>
        <div style="padding: 1px;" class="col-md-3"><?php $this->lstFeecontype1->Render(); ?></div>
        <div class="pull-right"><?php $this->btnCopyTemplete->Render(); ?></div>
        <div style="clear: both;"></div>
        </div>
    </div>   
<?php }?>
<?php $this->RenderEnd(); ?>
<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>