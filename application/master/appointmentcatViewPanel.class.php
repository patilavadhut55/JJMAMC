<?php
	class AppointmentcatViewPanel extends QPanel {
            public $dtgAppointmentcat;

            // The Local Project object which this panel represents
            protected $objAppointmentcat;
            protected $strPanelLeftControlId;
            protected $strPanelRightControlId;
            // Specify the Template File for this custom QPanel
            protected $strTemplate = 'appointmentcatViewPanel.tpl.php';

            public function __construct($objParentObject, $objAppointmentcat, $strPanelRightControlId, $strControlId = null) {
                    // Call the Parent
                    try {
                            parent::__construct($objParentObject, $strControlId);
                    } catch (QCallerException $objExc) {
                            $objExc->IncrementOffset();
                            throw $objExc;
                    }
                     // Next, we set the local project object
                $this->objAppointmentcat= $objAppointmentcat;


                $this->strPanelLeftControlId = $objParentObject;
                $this->strPanelRightControlId = $strPanelRightControlId;

                $this->dtgAppointmentcat= new QDataGrid($this);
                $this->dtgAppointmentcat->CssClass = "datagrid";
                $this->dtgAppointmentcat->ShowFilter = TRUE;
                $this->dtgAppointmentcat->Paginator = new QPaginator($this->dtgAppointmentcat);
                $this->dtgAppointmentcat->ItemsPerPage = 8;

                $this->dtgAppointmentcat->AddColumn(new QDataGridColumn('', '<?= $_CONTROL->ParentControl->EditColumn_Render($_ITEM) ?>', 'HtmlEntities=false', 'Width=20px'));


                $Name = new QDataGridColumn('Name', '<?= $_ITEM->Name ?>', 
                                    array(
                                            'OrderByClause' => QQ::OrderBy(QQN::AppoinmentCat()->Name),
                                            'ReverseOrderByClause' => QQ::OrderBy(QQN::AppoinmentCat()->Name, false)));

                $Name->Filter = QQ::Like(QQN::AppoinmentCat()->Name, null);
                $Name->FilterPostfix  = '%';
                $Name->FilterType = QFilterType::TextFilter;
                $this->dtgAppointmentcat->AddColumn($Name);
                $this->dtgAppointmentcat->AddColumn(new QDataGridColumn('Description','<?= $_ITEM->Des ?>'));
                // Let's make sorting Ajax-ified
                $this->dtgAppointmentcat->UseAjax = true;

                $this->dtgAppointmentcat->SetDataBinder('dtgAppointmentcat_Bind', $this);

		}
            public function dtgAppointmentcat_Bind() {
                    $Appointmentcats =  AppoinmentCat::QueryArray(
                            QQ::AndCondition(
                                   $this->dtgAppointmentcat->Conditions
                                    ),
                            QQ::Clause(
                                    $this->dtgAppointmentcat->OrderByClause,
                                    $this->dtgAppointmentcat->LimitClause
                            ));
                    $this->dtgAppointmentcat->DataSource = $Appointmentcats;

                    $Count = AppoinmentCat::QueryCount(
                        QQ::AndCondition(
                               $this->dtgAppointmentcat->Conditions
                                ), QQ::OrderBy(QQN::AppoinmentCat()->Name)
                        );
                    $this->dtgAppointmentcat->TotalItemCount = $Count;
            }

                // DataGrid Render Handlers Below
               
            public function EditColumn_Render(AppoinmentCat $objAppointmentcat) {
                    // Let's specify a specific Control ID for our button, using the datagrid's CurrentRowIndex
                    $strControlId = 'btnEditAppointmentcat' . $this->dtgAppointmentcat->CurrentRowIndex;

                    $btnEdit = $this->objForm->GetControl($strControlId);
                    if (!$btnEdit) {
                        // Only create/instantiate a new Edit button for this Row if it doesn't yet exist
                        $btnEdit = new QLabel($this->dtgAppointmentcat, $strControlId);
                        $btnEdit->Text = '<i class="fa fa-pencil fa-lg"></i>';
                        $btnEdit->HtmlEntities = FALSE;

                        // Define an Event Handler on the Button
                        // Because the event handler, itself, is defined in the control, we use QAjaxControlAction instead of QAjaxAction
                        $btnEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnEditAppointmentcat_Click'));
                        // Finally, update the Actionparameter for our button to store the $objPerson's ID.
                        $btnEdit->ActionParameter = $objAppointmentcat->IdappoinmentCat;

                    // Return the Rendered Button Control
                    return $btnEdit->Render(false);
                    }
            }
                // Event Handlers Here
            public function btnEditAppointmentcat_Click($strFormId, $strControlId, $strParameter) {
                    // Get pnlRight from the Parent Form
                    $pnlRight = $this->objForm->GetControl($this->strPanelRightControlId);

                    // First, remove all children panels from pnlRight
                    $pnlRight->RemoveChildControls(true);

                    $pnlRight->CssClass = "col-md-6 animated fadeInRight";
                    $this->strPanelLeftControlId->CssClass = "smooth col-md-6";
                    
                  
                    $objExamToEdit =  AppoinmentCat::LoadByIdappoinmentCat($strParameter);
                    new AppointmentCatEditPanel($pnlRight, $objExamToEdit, 'CloseRightPanel');
            }
	}
?>