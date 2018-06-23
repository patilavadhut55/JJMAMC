<?php
	// Load the QCubed Development Framework
	require('../../qcubed.inc.php');

	require(__FORMBASE_CLASSES__ . '/CastListFormBase.class.php');

	/**
	 * This is a quick-and-dirty draft QForm object to do the List All functionality
	 * of the Cast class.  It uses the code-generated
	 * CastDataGrid control which has meta-methods to help with
	 * easily creating/defining Cast columns.
	 *
	 * Any display customizations and presentation-tier logic can be implemented
	 * here by overriding existing or implementing new methods, properties and variables.
	 * 
	 * NOTE: This file is overwritten on any code regenerations.  If you want to make
	 * permanent changes, it is STRONGLY RECOMMENDED to move both cast_list.php AND
	 * cast_list.tpl.php out of this Form Drafts directory.
	 *
	 * @package My QCubed Application
	 * @subpackage Drafts
	 */
	class CastListForm extends CastListFormBase {
		// Override Form Event Handlers as Needed
		protected function Form_Run() {
			parent::Form_Run();

			// Security check for ALLOW_REMOTE_ADMIN
			// To allow access REGARDLESS of ALLOW_REMOTE_ADMIN, simply remove the line below
			QApplication::CheckRemoteAdmin();		    
		}

//		protected function Form_Load() {}

		protected function Form_Create() {
                    parent::Form_Create();

			// Instantiate the Meta DataGrid
			$this->dtgCasts = new CastDataGrid($this);

			// Style the DataGrid (if desired)
			$this->dtgCasts->CssClass = 'datagrid';
			$this->dtgCasts->AlternateRowStyle->CssClass = 'alternate';

			// Add Pagination (if desired)
			$this->dtgCasts->Paginator = new QPaginator($this->dtgCasts);
			$this->dtgCasts->ItemsPerPage = __FORM_DRAFTS_FORM_LIST_ITEMS_PER_PAGE__;

			// Use the MetaDataGrid functionality to add Columns for this datagrid

			// Create an Edit Column
			$strEditPageUrl = __VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/admission/cast_edit.php';
			$this->dtgCasts->MetaAddEditLinkColumn($strEditPageUrl, 'Edit', 'Edit');

			// Create the Other Columns (note that you can use strings for cast's properties, or you
			// can traverse down QQN::cast() to display fields that are down the hierarchy)
			$this->dtgCasts->AddColumn(new QDataGridColumn('Sr', '<?= ($_CONTROL->CurrentRowIndex + 1) ?>', 'Width=50'));
			$this->dtgCasts->MetaAddColumn('Name');
			//$this->dtgCasts->MetaAddColumn('MarName');
                        $Name = new QDataGridColumn('Parent', '<?= $_ITEM->ParentObject ?>', 'Width=200',
                                        array('OrderByClause' => QQ::OrderBy(QQN::Cast()->ParentObject->Name),
                                                'ReverseOrderByClause' => QQ::OrderBy(QQN::Cast()->ParentObject->Name, false)));
                        $Name->Filter = QQ::Like(QQN::Cast()->ParentObject->Name, null);
                        $Name->FilterPostfix = $Name->FilterPrefix = '%';
                        $Name->FilterType = QFilterType::TextFilter;
                        $Name->FilterBoxSize = 15;    
                        $this->dtgCasts->AddColumn($Name);			
                }
	}

	// Go ahead and run this form object to generate the page and event handlers, implicitly using
	// cast_list.tpl.php as the included HTML template file
	CastListForm::Run('CastListForm');
?>