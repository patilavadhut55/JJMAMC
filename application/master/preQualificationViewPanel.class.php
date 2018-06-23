<?php
	
	class PreQualificationViewPanel extends QPanel {
	    public $dtgPreQualifications;

            // The Local Project object which this panel represents
            protected $objQua;
            protected $strPanelLeftControlId;
            protected $strPanelRightControlId;
            // Specify the Template File for this custom QPanel
            protected $strTemplate = 'preQualificationViewPanel.tpl.php';

            public function __construct($objParentObject, $objQua, $strPanelRightControlId, $strControlId = null) {
			// Call the Parent
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			$this->objQua = $objQua;

                    
                    $this->strPanelLeftControlId = $objParentObject;
                    $this->strPanelRightControlId = $strPanelRightControlId;

                    $this->dtgPreQualifications= new QDataGrid($this);
                    $this->dtgPreQualifications->CssClass = "datagrid";
                    $this->dtgPreQualifications->ShowFilter = TRUE;
                    $this->dtgPreQualifications->Paginator = new QPaginator($this->dtgPreQualifications);
                    $this->dtgPreQualifications->ItemsPerPage = 8;

                    $this->dtgPreQualifications->AddColumn(new QDataGridColumn('', '<?= $_CONTROL->ParentControl->EditColumn_Render($_ITEM) ?>', 'HtmlEntities=false', 'Width=20px'));
                    
                    
                    $Name = new QDataGridColumn('Name', '<?= $_ITEM->Name ?>', 
                                        array(
                                                'OrderByClause' => QQ::OrderBy(QQN::PreQualification()->Name),
                                                'ReverseOrderByClause' => QQ::OrderBy(QQN::PreQualification()->Name, false)));
                    
                    $Name->Filter = QQ::Like(QQN::PreQualification()->Name, null);
                    $Name->FilterPostfix  = '%';
                    $Name->FilterType = QFilterType::TextFilter;
                    $this->dtgPreQualifications->AddColumn($Name);
                    $this->dtgPreQualifications->AddColumn(new QDataGridColumn('Description','<?= $_ITEM->Description ?>'));
                    // Let's make sorting Ajax-ified
                    $this->dtgPreQualifications->UseAjax = true;

                    $this->dtgPreQualifications->SetDataBinder('dtgPreQualifications_Bind', $this);
		}

		public function dtgPreQualifications_Bind() {
                        $Qualifications = PreQualification::QueryArray(
                                QQ::AndCondition(
                                       $this->dtgPreQualifications->Conditions
                                        ),
                                QQ::Clause(
                                        $this->dtgPreQualifications->OrderByClause,
                                        $this->dtgPreQualifications->LimitClause
                                ));
                        $this->dtgPreQualifications->DataSource = $Qualifications;

                        $Count = PreQualification::QueryCount(
                            QQ::AndCondition(
                                   $this->dtgPreQualifications->Conditions
                                    ), QQ::OrderBy(QQN::PreQualification()->Name)
                            );
                        $this->dtgPreQualifications->TotalItemCount = $Count;
                    }

                    // DataGrid Render Handlers Below

                public function EditColumn_Render(PreQualification $objQua) {
                        // Let's specify a specific Control ID for our button, using the datagrid's CurrentRowIndex
                        $strControlId = 'btnEditGardian' . $this->dtgPreQualifications->CurrentRowIndex;

                        $btnEdit = $this->objForm->GetControl($strControlId);
                        if (!$btnEdit) {
                            // Only create/instantiate a new Edit button for this Row if it doesn't yet exist
                            $btnEdit = new QLabel($this->dtgPreQualifications, $strControlId);
                            $btnEdit->Text = '<i class="fa fa-pencil fa-lg"></i>';
                            $btnEdit->HtmlEntities = FALSE;

                            $btnEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnEditQual_Click'));
                        }

                        // Finally, update the Actionparameter for our button to store the $objPerson's ID.
                        $btnEdit->ActionParameter = $objQua->IdpreQualification;

                        // Return the Rendered Button Control
                        return $btnEdit->Render(false);
                    }

                    // Event Handlers Here
                    public function btnEditQual_Click($strFormId, $strControlId, $strParameter) {
                        // Get pnlRight from the Parent Form
                        $pnlRight = $this->objForm->GetControl($this->strPanelRightControlId);

                        // First, remove all children panels from pnlRight
                        $pnlRight->RemoveChildControls(true);

                        $pnlRight->CssClass = "col-md-6 animated fadeInRight";
                        $this->strPanelLeftControlId->CssClass = "smooth col-md-6";


                        $objQualiToEdit = PreQualification::LoadByIdpreQualification($strParameter);
                        new PreQualificationEditPanel($pnlRight, $objQualiToEdit, 'CloseRightPanel');
                    }
	}
?>