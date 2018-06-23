<?php
	class MothertongueViewPanel extends QPanel {
            public $dtgMothertongue;

            // The Local Project object which this panel represents
            protected $objMothertongue;
            protected $strPanelLeftControlId;
            protected $strPanelRightControlId;
            // Specify the Template File for this custom QPanel
            protected $strTemplate = 'mothertongueViewPanel.tpl.php';

            public function __construct($objParentObject, $objMothertongue, $strPanelRightControlId, $strControlId = null) {
			// Call the Parent
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}
                         // Next, we set the local project object
                    $this->objMothertongue= $objMothertongue;

                    
                    $this->strPanelLeftControlId = $objParentObject;
                    $this->strPanelRightControlId = $strPanelRightControlId;

                    $this->dtgMothertongue= new QDataGrid($this);
                    $this->dtgMothertongue->CssClass = "datagrid";
                    $this->dtgMothertongue->ShowFilter = TRUE;
                    $this->dtgMothertongue->Paginator = new QPaginator($this->dtgMothertongue);
                    $this->dtgMothertongue->ItemsPerPage = 8;

                    $this->dtgMothertongue->AddColumn(new QDataGridColumn('', '<?= $_CONTROL->ParentControl->EditColumn_Render($_ITEM) ?>', 'HtmlEntities=false', 'Width=20px'));
                    
                    
                    $Name = new QDataGridColumn('Name', '<?= $_ITEM->Name ?>', 
                                        array(
                                                'OrderByClause' => QQ::OrderBy(QQN::MotherTongue()->Name),
                                                'ReverseOrderByClause' => QQ::OrderBy(QQN::MotherTongue()->Name, false)));
                    
                    $Name->Filter = QQ::Like(QQN::MotherTongue()->Name, null);
                    $Name->FilterPostfix  = '%';
                    $Name->FilterType = QFilterType::TextFilter;
                    $this->dtgMothertongue->AddColumn($Name);
                    
                    // Let's make sorting Ajax-ified
                    $this->dtgMothertongue->UseAjax = true;

                    $this->dtgMothertongue->SetDataBinder('dtgMothertongue_Bind', $this);
			
	    }
            public function dtgMothertongue_Bind() {
                $MotherTongue = MotherTongue::QueryArray(
                        QQ::AndCondition(
                               $this->dtgMothertongue->Conditions
                                ),
                        QQ::Clause(
                                $this->dtgMothertongue->OrderByClause,
                                $this->dtgMothertongue->LimitClause
                        ));
                $this->dtgMothertongue->DataSource = $MotherTongue;

                $Count = MotherTongue::QueryCount(
                    QQ::AndCondition(
                           $this->dtgMothertongue->Conditions
                            ), QQ::OrderBy(QQN::MotherTongue()->Name)
                    );
                $this->dtgMothertongue->TotalItemCount = $Count;
            }

                // DataGrid Render Handlers Below
            public function EditColumn_Render(MotherTongue $objMotherTongue) {
                    // Let's specify a specific Control ID for our button, using the datagrid's CurrentRowIndex
                $strControlId = 'btnEditMotherTongue' . $this->dtgMothertongue->CurrentRowIndex;

                $btnEdit = $this->objForm->GetControl($strControlId);
                if (!$btnEdit) {
                    // Only create/instantiate a new Edit button for this Row if it doesn't yet exist
                    $btnEdit = new QLabel($this->dtgMothertongue, $strControlId);
                    $btnEdit->Text = '<i class="fa fa-pencil fa-lg"></i>';
                    $btnEdit->HtmlEntities = FALSE;

                    $btnEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnEditMotherTongue_Click'));
                }

                // Finally, update the Actionparameter for our button to store the $objPerson's ID.
                $btnEdit->ActionParameter = $objMotherTongue->IdmotherTongue;

                // Return the Rendered Button Control
                return $btnEdit->Render(false);
            }

                // Event Handlers Here
            public function btnEditMotherTongue_Click($strFormId, $strControlId, $strParameter) {
               $pnlRight = $this->objForm->GetControl($this->strPanelRightControlId);

                // First, remove all children panels from pnlRight
                $pnlRight->RemoveChildControls(true);

                $pnlRight->CssClass = "col-md-6 animated fadeInRight";
                $this->strPanelLeftControlId->CssClass = "smooth col-md-6";


                $objMotherToEdit =  MotherTongue::LoadByIdmotherTongue($strParameter);
                new MotherTongueEditPanel($pnlRight, $objMotherToEdit, 'CloseRightPanel');

            }
	}
                 
           
?>