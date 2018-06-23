<?php
	require('../../qcubed.inc.php');
	
	class RoleListForm extends QForm {
		protected $dtgRoles;
                protected $btnNew;
		protected function Form_Run() {
		    parent::Form_Run();
                    QApplication::CheckRemoteAdmin();		    
		}

		protected function Form_Create() {
                    parent::Form_Create();
			$this->dtgRoles = new RoleDataGrid($this);
                        $this->dtgRoles->CssClass = 'datagrid';
			$this->dtgRoles->AlternateRowStyle->CssClass = 'alternate';

			$this->dtgRoles->Paginator = new QPaginator($this->dtgRoles);
			$this->dtgRoles->ItemsPerPage = __FORM_DRAFTS_FORM_LIST_ITEMS_PER_PAGE__;

			$this->dtgRoles->MetaAddColumn('Name');
			$this->dtgRoles->MetaAddColumn('Description');
			
                        $this->dtgRoles->RowActionParameterHtml = '<?= $_ITEM->Idrole ?>';
                        $this->dtgRoles->AddRowAction(new QClickEvent(), new QAjaxAction('dtgproassetRow_Click'));
                        
			$this->btnNew = new QButton($this);
                        $this->btnNew->HtmlEntities = FALSE;
                        $this->btnNew->Text = '<i class="fa fa-plus-circle fa-fw"></i> New';
                        $this->btnNew->ButtonMode = QButtonMode::AddNew;
                        $this->btnNew->AddAction(new QClickEvent(), new QAjaxAction("btnNew_Click"));
                }
                public function dtgproassetRow_Click($strFormId, $strControlId, $strParameter) {
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/role_edit.php/'.$strParameter);
                }
                
                public function btnNew_Click($strFormId, $strControlId, $strParameter) {
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/role_edit.php');
                }
	}
	RoleListForm::Run('RoleListForm');
?>