<?php
    class OccuranceViewPanel extends QPanel {
       
        public $dtgOccurance;
        protected $objOccurance;
        protected $strPanelLeftControlId;
        protected $strPanelRightControlId;
        // Specify the Template File for this custom QPanel
        protected $strTemplate = 'occuranceViewPanel.tpl.php';
        // We Create a new __constructor that takes in the Project we are "viewing"
        // The functionality of __construct in a custom QPanel is similar to the QForm's Form_Create() functionality
        public function __construct($objParentObject, $objOccurance, $strPanelRightControlId, $strControlId = null) {
            // First, let's call the Parent's __constructor
            try {
                parent::__construct($objParentObject, $strControlId);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
            // Next, we set the local project object
            $this->objOccurance = $objOccurance;
            $this->strPanelLeftControlId = $objParentObject;
            $this->strPanelRightControlId = $strPanelRightControlId;
            // Now, let's set up this custom panel's child controls
            // Also notice that our datagrid column render handler is called via a $_CONTROL->ParentControl
            // This is because the render handler is defined in this ProjectViewPanel, which ends up
            // being the datagrid's ("$_CONTROL") parent control object.
            $this->dtgOccurance = new QDataGrid($this);
            $this->dtgOccurance->CssClass = "datagrid";
            $this->dtgOccurance->ShowFilter = TRUE;
            $this->dtgOccurance->Paginator = new QPaginator($this->dtgOccurance);
            $this->dtgOccurance->ItemsPerPage = 8;
            
            $this->dtgOccurance->AddColumn(new QDataGridColumn('', '<?= $_CONTROL->ParentControl->EditColumn_Render($_ITEM) ?>', 'HtmlEntities=false', 'Width=20px'));
            $Name = new QDataGridColumn('Name', '<?= $_ITEM->Name ?>', 'Width=200',
                                        array(
                                                'OrderByClause' => QQ::OrderBy(QQN::Occurance()->Name),
                                                'ReverseOrderByClause' => QQ::OrderBy(QQN::Occurance()->Name, false)));

            $Name->Filter = QQ::Like(QQN::Occurance()->Name, null);
            $Name->FilterPostfix  = '%';
            $Name->FilterType = QFilterType::TextFilter;
            $this->dtgOccurance->AddColumn($Name);
            
           
            // Let's make sorting Ajax-ified
            $this->dtgOccurance->UseAjax = true;
            // Finally, we take advantage of the DataGrid's SetDataBinder to specify the method we use to actually bind
            // a datasource to the DataGrid
            $this->dtgOccurance->SetDataBinder('dtgOccurance_Bind', $this);
        }
        
        // This is the method that will perform the actual databinding on the dtgMembers datagrid
        // Note that because it is called by the QForm, this needs to be public
        public function dtgOccurance_Bind() {
            $Subject = Occurance::QueryArray(
                    QQ::AndCondition(
                           $this->dtgOccurance->Conditions
                            ),
                    QQ::Clause(
                            $this->dtgOccurance->OrderByClause,
                            $this->dtgOccurance->LimitClause
                    ));
            $this->dtgOccurance->DataSource = $Subject;

            $Count = Occurance::QueryCount(
                    QQ::AndCondition(
                       $this->dtgOccurance->Conditions
                        ), QQ::OrderBy(QQN::Occurance()->Name)
                );
            $this->dtgOccurance->TotalItemCount = $Count;
        }
        
        // DataGrid Render Handlers Below
        public function EditColumn_Render(Occurance $objOccurance) {
            // Let's specify a specific Control ID for our button, using the datagrid's CurrentRowIndex
            $strControlId = 'btnEditSubject' . $this->dtgOccurance->CurrentRowIndex;
                    $btnEdit = $this->objForm->GetControl($strControlId);
                    if (!$btnEdit) {
                        // Only create/instantiate a new Edit button for this Row if it doesn't yet exist
                        $btnEdit = new QLabel($this->dtgOccurance, $strControlId);
                        $btnEdit->Text = '<i class="fa fa-pencil fa-lg"></i>';
                        $btnEdit->HtmlEntities = FALSE;

                        // Define an Event Handler on the Button
                        // Because the event handler, itself, is defined in the control, we use QAjaxControlAction instead of QAjaxAction
                        $btnEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnEditOccurance_Click'));
                    }
            // Finally, update the Actionparameter for our button to store the $objPerson's ID.
            $btnEdit->ActionParameter = $objOccurance->Idoccurance;

            // Return the Rendered Button Control
            return $btnEdit->Render(false);
        }

        // Event Handlers Here
        public function btnEditOccurance_Click($strFormId, $strControlId, $strParameter) {
            // Get pnlRight from the Parent Form
            $pnlRight = $this->objForm->GetControl($this->strPanelRightControlId);
            // First, remove all children panels from pnlRight
            $pnlRight->RemoveChildControls(true);
            $pnlRight->CssClass = "col-md-6 animated fadeInRight";
            $this->strPanelLeftControlId->CssClass = "smooth col-md-6";
            // Now create a new PersonEditPanel, setting pnlRight as its parent
            // and specifying parent form's "CloseRightPanel" as the method callback
            // See the note in _constructor, above, for more information
            $objsubjectToEdit = Occurance::LoadByIdoccurance($strParameter);
            new OccuranceEditPanel($pnlRight, $objsubjectToEdit, 'CloseRightPanel');
      }
    }
?>