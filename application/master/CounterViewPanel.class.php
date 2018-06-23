<?php
    class CounterViewPanel extends QPanel {
       
        public $dtgCounter;
        protected $objCounter;
        protected $strPanelLeftControlId;
        protected $strPanelRightControlId;
        // Specify the Template File for this custom QPanel
        protected $strTemplate = 'CounterViewPanel.tpl.php';
        // We Create a new __constructor that takes in the Project we are "viewing"
        // The functionality of __construct in a custom QPanel is similar to the QForm's Form_Create() functionality
        public function __construct($objParentObject, $objCounter, $strPanelRightControlId, $strControlId = null) {
            // First, let's call the Parent's __constructor
            try {
                parent::__construct($objParentObject, $strControlId);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
            // Next, we set the local project object
            $this->objCounter = $objCounter;
            $this->strPanelLeftControlId = $objParentObject;
            $this->strPanelRightControlId = $strPanelRightControlId;
            // Now, let's set up this custom panel's child controls
            // Also notice that our datagrid column render handler is called via a $_CONTROL->ParentControl
            // This is because the render handler is defined in this ProjectViewPanel, which ends up
            // being the datagrid's ("$_CONTROL") parent control object.
            $this->dtgCounter = new QDataGrid($this);
            $this->dtgCounter->CssClass = "datagrid";
            $this->dtgCounter->ShowFilter = TRUE;
            $this->dtgCounter->Paginator = new QPaginator($this->dtgCounter);
            $this->dtgCounter->ItemsPerPage = 8;
            $this->dtgCounter->AddColumn(new QDataGridColumn('', '<?= $_CONTROL->ParentControl->EditColumn_Render($_ITEM) ?>', 'HtmlEntities=false', 'Width=20px'));
           $Name = new QDataGridColumn('Name', '<?= $_ITEM->Name ?>', 'Width=200',
                                        array(
                                                'OrderByClause' => QQ::OrderBy(QQN::Settings()->Name),
                                                'ReverseOrderByClause' => QQ::OrderBy(QQN::Settings()->Name, false)));
            $Name->Filter = QQ::Like(QQN::Settings()->Name, null);
            $Name->FilterPostfix  = '%';
            $Name->FilterType = QFilterType::TextFilter;
            $this->dtgCounter->AddColumn($Name);
                    
            
            
            $this->dtgCounter->AddColumn(new QDataGridColumn('Option', '<?= $_ITEM->Option ?>')); 
            // Let's make sorting Ajax-ified
            $this->dtgCounter->UseAjax = true;
            // Finally, we take advantage of the DataGrid's SetDataBinder to specify the method we use to actually bind
            // a datasource to the DataGrid
            $this->dtgCounter->SetDataBinder('dtgCounter_Bind', $this);
        }
        
        // This is the method that will perform the actual databinding on the dtgMembers datagrid
        // Note that because it is called by the QForm, this needs to be public
        public function dtgCounter_Bind() {
            $Counter = Settings::QueryArray(
                    QQ::AndCondition(
                           $this->dtgCounter->Conditions
                            ),
                    QQ::Clause(
                            $this->dtgCounter->OrderByClause,
                            $this->dtgCounter->LimitClause
                    ));
            $this->dtgCounter->DataSource = $Counter;

            $Count = Settings::QueryCount(
                    QQ::AndCondition(
                       $this->dtgCounter->Conditions
                        ), QQ::OrderBy(QQN::Settings()->Name)
                );
            $this->dtgCounter->TotalItemCount = $Count;
        }
        
        // DataGrid Render Handlers Below
        public function EditColumn_Render(Settings $objCounter) {
            // Let's specify a specific Control ID for our button, using the datagrid's CurrentRowIndex
            $strControlId = 'btnEditSubject' . $this->dtgCounter->CurrentRowIndex;
                    $btnEdit = $this->objForm->GetControl($strControlId);
                    if (!$btnEdit) {
                        // Only create/instantiate a new Edit button for this Row if it doesn't yet exist
                        $btnEdit = new QLabel($this->dtgCounter, $strControlId);
                        $btnEdit->Text = '<i class="fa fa-pencil fa-lg"></i>';
                        $btnEdit->HtmlEntities = FALSE;

                        // Define an Event Handler on the Button
                        // Because the event handler, itself, is defined in the control, we use QAjaxControlAction instead of QAjaxAction
                        $btnEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnEditCounter_Click'));
                    }
            // Finally, update the Actionparameter for our button to store the $objPerson's ID.
            $btnEdit->ActionParameter = $objCounter->Idsettings;

            // Return the Rendered Button Control
            return $btnEdit->Render(false);
        }

        // Event Handlers Here
        public function btnEditCounter_Click($strFormId, $strControlId, $strParameter) {
            // Get pnlRight from the Parent Form
            $pnlRight = $this->objForm->GetControl($this->strPanelRightControlId);
            // First, remove all children panels from pnlRight
            $pnlRight->RemoveChildControls(true);
            $pnlRight->CssClass = "col-md-6 animated fadeInRight";
            $this->strPanelLeftControlId->CssClass = " col-md-6";
            // Now create a new PersonEditPanel, setting pnlRight as its parent
            // and specifying parent form's "CloseRightPanel" as the method callback
            // See the note in _constructor, above, for more information
            $objCounterToEdit = Settings::LoadByIdsettings($strParameter);
            new CounterEditPanel($pnlRight, $objCounterToEdit, 'CloseRightPanel');
      }
    }
?>