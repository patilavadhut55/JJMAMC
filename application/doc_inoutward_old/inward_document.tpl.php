<?php
require(__CONFIGURATION__ . '/header.inc.php');
?>

<?php $this->RenderBegin() ?>
<h1>InWard Document</h1>
<div class="form-controls">
    <?php
    if (isset($_GET['id'])) {
        $inward = DocInOut::LoadByIddocInOut($_GET['id']);
        ?>
        <div style="padding: 10px;">
            <table style="font-size: 15px;">
                <tr>
                    <td width="5%">Code :</td>
                    <td width="20%"> <strong><?php _p($inward->Code); ?></strong></td>
                    <td width="5%">Date :</td>
                    <td width="20%"><strong>  <?php _p(date('d/m/Y', strtotime($inward->Date))); ?></strong></td>
                </tr>
                <tr>
                    <td width='5%'>Document :</td>
                    <td width="20%"> <strong><?php _p($inward->DocumentGrp); ?></strong></td>
                    <?php if ($inward->RefDoc) { ?>
                        <td width="5%">Ref Doc : </td>
                        <td width="20%"><strong><?php _p($inward->RefDocObject->Name);
            } ?></strong></td>
                </tr>
                <tr>
                    <td width="5%">From : </td>
                    <td width="20%"><strong><?php _p($inward->From); ?></strong></td>
                    <td width="5%">Description : </td>
                    <td width='20%'><strong><?php _p($inward->DescData); ?></strong></td>
                </tr>
            </table>

            <table class="datagrid" border='1' style="margin-top: 20px;">
                <h3>Mark To</h3>
                <?php
                $forwards = MarkTo::QueryArray(
                                QQ::AndCondition(
                                        QQ::Equal(QQN::MarkTo()->DocInOut, $_GET['id'])));
                if ($forwards) {
                    ?>
                    <tr>
                        <th> Sr.</th>
                        <th>Date</th>
                        <th>Code</th>
                        <th>SUBJECT</th>
                        <th>Forward To</th>
                        <th>Designation</th>
                    </tr>
                    <?php
                    $sr = 1;
                    foreach ($forwards as $forward) {
                        ?>
                        <tr>
                            <td><?php _p($sr++); ?></td>
                            <td><?php _p(date('d/m/Y', strtotime($forward->Date))); ?></td>
                            <td><?php _p($forward->DocInOutObject->Code); ?></td>
                            <td><?php _p($forward->DocInOutObject->DocumentGrp); ?></td>
                            <td><?php _p($forward->ToObject->IdloginObject->Name); ?></td>
                            <td><?php if ($forward->Role) _p($forward->RoleObject->Name); ?></td>

                        </tr>
        <?php }
    } ?>
            </table>

            <?php
            $scancode = Settings::LoadByName("Scan");
            $appdocs = MemberDoc::QueryArray(
                            QQ::AndCondition(
                                    QQ::Equal(QQN::MemberDoc()->InOut, $_GET['id'])
                            )
            );
            if ($appdocs) {
                foreach ($appdocs as $appdoc) {
                    
                }
                ?>

                <div style="clear: both;"></div>
            </div>

            <div style="border: 1px solid lightgray;margin-bottom: 5px;padding: 10px;">

                <div style="margin: 7px;"><strong>Uploaded Documents</strong></div>
                <div class="col-sm-12">
                        <?php if ($appdoc->Scans != NULL) { ?>
                        <div style="float:left;">
                            <?php
                            $sr = 1;
                            $scans = explode(",", $appdoc->Scans);
                            if (key_exists(0, $scans)) {
                                foreach ($scans as $scan) {
                                    ?> <?php
                                    $css = 0;
                                    $img = '../upload/documents/inoutward/A' . $appdoc->IdmemberDoc . '/' . (int) $scan . '.png';
                                    if (file_exists($img)) {
                                        ?>
                                        <a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__); ?>/upload/cam/inoutward_docview.php?id=<?php _p($_GET['id']); ?>&doc=<?php _p($scan); ?>&flg1=1" target="_blank"><div class="btn btn-success"><?php _p($sr++); ?></div></a>
                                <?php } else { ?>
                                        <a href="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__); ?>/upload/cam/inoutward_docview.php?id=<?php _p($_GET['id']); ?>&doc=<?php _p($scan); ?>&flg1=1" target="_blank"><div class="btn btn-default"><?php _p($sr++); ?></div></a>
                    <?php } ?>  

                <?php }
            } ?>
                        </div>
        <?php } ?>    
                    &nbsp;

                </div>
                <div class="clearfix"></div>

    <?php } ?>

        </div>
<?php } ?>
</div>

<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ . '/footer.inc.php'); ?>
