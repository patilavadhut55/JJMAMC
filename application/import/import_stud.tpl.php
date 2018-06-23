<?php
    $strPageTitle = QApplication::Translate('Registration');
    require(__CONFIGURATION__ . '/header.inc.php');
?>
    

<h1>Import Summary</h1>
<?php $this->RenderBegin() ?>
<div class="form-controls">
    <script src="dragtable.js"></script>
    <div class="col-md-3"><?php $this->lstCalender->Render(); ?></div>
    <div class="col-md-3"><?php $this->lstRoles->Render(); ?></div>
    <div class="col-md-3"><?php $this->lstProgram->Render(); ?></div>
    <table class="datagrid draggable sortable">
        <tr>
            <th>Sr.</th>
            <th>OLD PRN</th>
            <th>NEW PRN</th>
            <th>NAME</th>
            <th>Admission Date</th>
        </tr>
    
   <?php
    $pros = array();
    $count = 1;
    $stds = Ledger::LoadArrayByGrp(244);
    $c = 1;
    foreach ($stds as $std){
        $found = substr($std->Code, 4, -3);
        if(!in_array($found, $pros) && $found != ""){
            $pros[$c] = $found;
            $c++;
        }
    }
    $sr = 1;
    foreach ($pros as $pro){
        $programs[$sr++] = $pro;
    }
    
    $yfrom = 2012; $yto = 2015;
    $xtotal = $ytotal = array();
    $total = 0;
    
    for($i = $yfrom; $i<=$yto; $i++)
        foreach ($programs as $key => $program)
            $Students = Ledger::QueryArray(
                    QQ::AndCondition(
                            QQ::Equal(QQN::Ledger()->Grp, 244),
                            QQ::Like(QQN::Ledger()->Code, "%".$_GET['prog']."%"),
                            QQ::Like(QQN::Ledger()->Code, $_GET['year']."%")
                            )
                    );
            foreach($Students as $Student){
            $name = explode(' ',$Student->Name);    
            $profile = Profile::LoadByIdprofile($Student->Idledger);    
            
            $programs = Role::QueryArray(
                            QQ::AndCondition(
                            QQ::Equal(QQN::Role()->ShortName, $_GET['prog'])
                        ));
            $color = "";
                if($programs){
                    $color = "#FFF";
                }else{
                    $color = "red";
                }  
    ?>
        <tr >
            <td><?php _p($count++);?></td>
            <td><?php if($profile->OldPrn != NULL) _p($profile->OldPrn);?></td>
            <td style="background:<?php _p($color); ?>"><?php _p($Student->Code);?></td>
            <td><?php _p(get_full_name($Student->Name));?></td>
            <td><?php if($profile->AddmissionDate){ _p(date('d/m/Y',  strtotime($profile->AddmissionDate))); }else{ _p('NULL'); }?></td>
        </tr>
            <?php } ?>
    </table>
    <div style="float: right;"><?php $this->btnGenerate->Render(); ?></div>
    <div style="clear: both;"></div>
</div>
<?php $this->RenderEnd() ?>
<?php //require(__CONFIGURATION__ .'/footer.inc.php'); ?>
