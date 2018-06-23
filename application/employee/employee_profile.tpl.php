<?php
    $strPageTitle = QApplication::Translate('Login');
    require(__CONFIGURATION__ . '/header.inc.php');
?>
	<?php $this->RenderBegin() ?>
         <h1>Profile</h1>
         <div class="form-controls" style="width: 60%; margin-left: 20%;margin-right: 20%;">
              <?php $ledger = Ledger::LoadByIdledger($_GET['id']);
                if($ledger){ 
                    $profile = Profile::LoadByIdprofile($ledger->Idledger);
                    $adds = Address::LoadArrayByOf($ledger->Idledger);?>
                   <table>
                <?php    if($adds){
                        foreach ($adds as $add){} ?>
                    <tr>
                        <td style="width: 5%;"></td>  <td><strong> Name</strong></td><td style="width: 5%;"></td><td style="width: 5%;"><strong>:</strong></td><td><?php _p($ledger->Name);?></td>
                    </tr>
                    <tr>
                       <td style="width: 5%;"></td><td> <strong>Address</strong> </td><td style="width: 5%;"></td><td style="width: 5%;"><strong>:</strong></td><td><?php _p($add->AddressLine1);?></td>
                    </tr>
                    <tr>
                      <td style="width: 5%;"></td><td><strong> Contact</strong></td><td style="width: 5%;"></td><td style="width: 5%;"><strong>:</strong></td><td><?php _p($add->Contact1);?></td>
                    </tr>  
                    <tr>
                     <td style="width: 5%;"></td><td><strong> Date Of Birth</strong></td><td style="width: 5%;"></td><td style="width: 5%;"><strong>:</strong></td><td><?php _p(date('d/m/Y', strtotime($add->Dob)));?></td>
                    </tr>  
                    <tr>
                       <td style="width: 5%;"></td><td><strong>  Cast </strong> </td><td style="width: 5%;"></td><td style="width: 5%;"><strong>:</strong></td><td><?php _p($profile->CasteCatObject);?>  
                         <?php _p($profile->CasteObject);?></td>
                    </tr>
                    <?php } ?>
                    <tr>
                    <td style="width: 5%;"></td><td><strong> Education Details</strong></td><td style="width: 5%;"></td><td style="width: 5%;"><strong>:</strong></td>
                        <?php  $educations = EducationDetails::QueryArray(
                              QQ::Equal(QQN::EducationDetails()->Student,$ledger->Idledger ));
                      ?>
                        <td>
                     <?php foreach ($educations as $education){
                        ?>
                        <?php _p($education->PreQualification);?>  
                        <?php _p($education->Institute);?>
                        <?php _p($education->PassingYear);?>  
                        <?php _p($education->Percentage);?>
                    <?php }?>
                        </td>
                    </tr>
                  <?php } ?>
            </div>
	<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>