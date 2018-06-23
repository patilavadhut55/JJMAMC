    <?php
	
	//$strPageTitle = QApplication::Translate('ProductGroup') . ' - ' . $this->mctProductGroup->TitleVerb;
	require(__CONFIGURATION__ . '/header.inc.php');
    ?>
	<?php $this->RenderBegin() ?>
         <script>
        function dis(i){
            document.getElementById('d'+i).style.display = "none";
            document.getElementById('e'+i).style.display = "";
        }
        </script>
	<div id="titleBar">
		<?php _t('Product Group')?>
	</div>

	<div id="formControls" style="width: 800px;">
            <table class="datagrid">
                <tr>
                    <th></th>
                    <th>Sr.</th>
                    <th>Group</th>
                    <th>Sub Group</th>
                    <th></th>
                    <th>Marathi Name</th>
                </tr>
                
                <?php
                $groups = ProductGroup::LoadAll();
                $sr = 1;
                foreach ($groups as $group){
                ?>
                <tr id="d<?php _p($group->IdproductGroup); ?>">
                    <td><?php _p($this->lbldels[$group->IdproductGroup]->Render()); ?></td>
                    <td><?php _p($sr); ?></td>
                    <td><?php _p($group->Name); ?></td>
                    <td><?php _p($group->SubGroupObject); ?></td>
                    <td><?php //_p($group->); ?></td>
                   <td><?php _p($group->Marathi); ?>
                        <div class="disdiv"><?php $this->lblEdit[$group->IdproductGroup]->Render(); ?></div>
                    </td>
                </tr>
                <tr id="e<?php _p($group->IdproductGroup); ?>" style="display: none;">
                    <td></td>
                    <td><?php _p($sr); ?></td>
                    <td><?php _p($this->txtAName[$group->IdproductGroup]->Render()); ?></td>
                    <td><?php _p($this->lstSub[$group->IdproductGroup]->Render()); ?></td>
                    <td><?php _p($this->chkVbl[$group->IdproductGroup]->Render()); ?></td>
                    <td><?php _p($this->txtMname[$group->IdproductGroup]->Render()); ?></td>
                </tr>
                <?php $sr++;} ?>
                <tr>
                    <td></td>
                    <td><?php _p($sr); ?></td>
                    <td><?php $this->txtName->Render(); ?></td>
                    <td><?php $this->lstSubGroupObject->Render(); ?></td>
                    <td><?php $this->chkVisible->Render(); ?></td>
                    <td><?php $this->txtMarathi->Render(); ?></td>
                </tr>
            </table>
        </div>

	<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>