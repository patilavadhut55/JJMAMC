<?php
	class GardiancatViewPanel extends QPanel {
            public $dtgGardian;

            // The Local Project object which this panel represents
            protected $objGardian;
            protected $strPanelLeftControlId;
            protected $strPanelRightControlId;
            // Specify the Template File for this custom QPanel
            protected $strTemplate = 'gardiancatViewPanel.tpl.php';

            public function __construct($objParentObject, $objGardian, $strPanelRightControlId, $strControlId = null) {
			// Call the Parent
                    try {
                            parent::__construct($objParentObject, $strControlId);
                    } catch (QCallerException $objExc) {
                            $objExc->IncrementOffset();
                            throw $objExc;
                    }
                     // Next, we set the local project object
                $this->objGardian= $objGardian;


                $this->strPanelLeftControlId = $objParentObject;
                $this->strPanelRightControlId = $strPanelRightControlId;

                $this->dtgGardian= new QDataGrid($this);
                $this->dtgGardian->CssClass = "datagrid";
                $this->dtgGardian->ShowFilter = TRUE;
                $this->dtgGardian->Paginator = new QPaginator($this->dtgGardian);
                $this->dtgGardian->ItemsPerPage = 8;

                $this->dtgGardian->AddColumn(new QDataGridColumn('', '<?= $_CONTROL->ParentControl->EditColumn_Render($_ITEM) ?>', 'HtmlEntities=false', 'Width=20px'));


                $Name = new QDataGridColumn('Name', '<?= $_ITEM->Name ?>', 
                                    array(
                                            'OrderByClause' => QQ::OrderBy(QQN::GardianCat()->Name),
                                            'ReverseOrderByClause' => QQ::OrderBy(QQN::GardianCat()->Name, false)));

                $Name->Filter = QQ::Like(QQN::GardianCat()->Name, null);
                $Name->FilterPostfix  = '%';
                $Name->FilterType = QFilterType::TextFilter;
                $this->dtgGardian->AddColumn($Name);
                $this->dtgGardian->AddColumn(new QDataGridColumn('Description','<?= $_ITEM->Description ?>'));
                // Let's make sorting Ajax-ified
                $this->dtgGardian->UseAjax = true;

                $this->dtgGardian->SetDataBinder('dtgGardiancat_Bind', $this);

	    }
            public function dtgGardiancat_Bind() {
                $Gardians = GardianCat::QueryArray(
                        QQ::AndCondition(
                               $this->dtgGardian->Conditions
                                ),
                        QQ::Clause(
                                $this->dtgGardian->OrderByClause,
                                $this->dtgGardian->LimitClause
                        ));
                $this->dtgGardian->DataSource = $Gardians;

                $Count = GardianCat::QueryCount(
                    QQ::AndCondition(
                           $this->dtgGardian->Conditions
                            ), QQ::OrderBy(QQN::GardianCat()->Name)
                    );
                $this->dtgGardian->TotalItemCount = $Count;
            }

                // DataGrid Render Handlers Below
            public function EditColumn_Render(GardianCat $objGardian) {
                    // Let's specify a specific Control ID for our button, using the datagrid's CurrentRowIndex
                $strControlId = 'btnEditGardian' . $this->dtgGardian->CurrentRowIndex;

                $btnEdit = $this->objForm->GetControl($strControlId);
                if (!$btnEdit) {
                    // Only create/instantiate a new Edit button for this Row if it doesn't yet exist
                    $btnEdit = new QLabel($this->dtgGardian, $strControlId);
                    $btnEdit->Text = '<i class="fa fa-pencil fa-lg"></i>';
                    $btnEdit->HtmlEntities = FALSE;

                    $btnEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnEditGardian_Click'));
                }

                // Finally, update the Actionparameter for our button to store the $objPerson's ID.
                $btnEdit->ActionParameter = $objGardian->IdgardianCat;

                // Return the Rendered Button Control
                return $btnEdit->Render(false);
                }

                // Event Handlers Here
            public function btnEditGardian_Click($strFormId, $strControlId, $strParameter) {
                    // Get pnlRight from the Parent Form
                $pnlRight = $this->objForm->GetControl($this->strPanelRightControlId);

                // First, remove all children panels from pnlRight
                $pnlRight->RemoveChildControls(true);

                $pnlRight->CssClass = "col-md-6 animated fadeInRight";
                $this->strPanelLeftControlId->CssClass = "smooth col-md-6";


                $objGardToEdit = GardianCat::LoadByIdgardianCat($strParameter);
                new GardianCatEditPanel($pnlRight, $objGardToEdit, 'CloseRightPanel');
            }
	}
                 
?>