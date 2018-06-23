<?php
	class EducationtitleViewPanel extends QPanel {
            public $dtgEducation;

            // The Local Project object which this panel represents
            protected $objEducationtitle;
            protected $strPanelLeftControlId;
            protected $strPanelRightControlId;
            // Specify the Template File for this custom QPanel
            protected $strTemplate = 'educationtitleViewPanel.tpl.php';

            public function __construct($objParentObject, $objEducationtitle, $strPanelRightControlId, $strControlId = null) {
			// Call the Parent
                    try {
                            parent::__construct($objParentObject, $strControlId);
                    } catch (QCallerException $objExc) {
                            $objExc->IncrementOffset();
                            throw $objExc;
                    }
                     // Next, we set the local project object
                $this->objEducationtitle= $objEducationtitle;


                $this->strPanelLeftControlId = $objParentObject;
                $this->strPanelRightControlId = $strPanelRightControlId;

                $this->dtgEducation= new QDataGrid($this);
                $this->dtgEducation->CssClass = "datagrid";
                $this->dtgEducation->ShowFilter = TRUE;
                $this->dtgEducation->Paginator = new QPaginator($this->dtgEducation);
                $this->dtgEducation->ItemsPerPage = 8;

                $this->dtgEducation->AddColumn(new QDataGridColumn('', '<?= $_CONTROL->ParentControl->EditColumn_Render($_ITEM) ?>', 'HtmlEntities=false', 'Width=20px'));


                $Name = new QDataGridColumn('Name', '<?= $_ITEM->Name ?>', 
                                    array(
                                            'OrderByClause' => QQ::OrderBy(QQN::EducationTitle()->Name),
                                            'ReverseOrderByClause' => QQ::OrderBy(QQN::EducationTitle()->Name, false)));

                $Name->Filter = QQ::Like(QQN::EducationTitle()->Name, null);
                $Name->FilterPostfix  = '%';
                $Name->FilterType = QFilterType::TextFilter;
                $this->dtgEducation->AddColumn($Name);
                $this->dtgEducation->AddColumn(new QDataGridColumn('Description','<?= $_ITEM->Description ?>'));
                $this->dtgEducation->AddColumn(new QDataGridColumn('CET','<?= $_ITEM->Cet ?>'));
                // Let's make sorting Ajax-ified
                $this->dtgEducation->UseAjax = true;

                $this->dtgEducation->SetDataBinder('dtgEducation_Bind', $this);

            }
            public function dtgEducation_Bind() {
                $Educations = EducationTitle::QueryArray(
                        QQ::AndCondition(
                               $this->dtgEducation->Conditions
                                ),
                        QQ::Clause(
                                $this->dtgEducation->OrderByClause,
                                $this->dtgEducation->LimitClause
                        ));
                $this->dtgEducation->DataSource = $Educations;

                $Count =  EducationTitle::QueryCount(
                    QQ::AndCondition(
                           $this->dtgEducation->Conditions
                            ), QQ::OrderBy(QQN::EducationTitle()->Name)
                    );
                $this->dtgEducation->TotalItemCount = $Count;
            }

                // DataGrid Render Handlers Below
               
            public function EditColumn_Render(EducationTitle $objEducationTitle) {
                    // Let's specify a specific Control ID for our button, using the datagrid's CurrentRowIndex
                $strControlId = 'btnEditGardian' . $this->dtgEducation->CurrentRowIndex;

                $btnEdit = $this->objForm->GetControl($strControlId);
                if (!$btnEdit) {
                    // Only create/instantiate a new Edit button for this Row if it doesn't yet exist
                    $btnEdit = new QLabel($this->dtgEducation, $strControlId);
                    $btnEdit->Text = '<i class="fa fa-pencil fa-lg"></i>';
                    $btnEdit->HtmlEntities = FALSE;

                    $btnEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnEditEducation_Click'));
                }

                // Finally, update the Actionparameter for our button to store the $objPerson's ID.
                $btnEdit->ActionParameter = $objEducationTitle->IdeducationTitle;

                // Return the Rendered Button Control
                return $btnEdit->Render(false);
            }

                // Event Handlers Here
            public function btnEditEducation_Click($strFormId, $strControlId, $strParameter) {
                    // Get pnlRight from the Parent Form
                $pnlRight = $this->objForm->GetControl($this->strPanelRightControlId);

                // First, remove all children panels from pnlRight
                $pnlRight->RemoveChildControls(true);

                $pnlRight->CssClass = "col-md-6 animated fadeInRight";
                $this->strPanelLeftControlId->CssClass = "smooth col-md-6";


                $objEduToEdit = EducationTitle::LoadByIdeducationTitle($strParameter);
                new EducationTitleEditPanel($pnlRight, $objEduToEdit, 'CloseRightPanel');
            }
	}
?>