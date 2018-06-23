<?php
    class MenuViewPanel extends QPanel {
        public $dtgMenu;
        protected $objMenu;
        protected $strPanelLeftControlId;
        protected $strPanelRightControlId;
        // Specify the Template File for this custom QPanel
        protected $strTemplate = 'MenuViewPanel.tpl.php';
        // We Create a new __constructor that takes in the Project we are "viewing"
        // The functionality of __construct in a custom QPanel is similar to the QForm's Form_Create() functionality
        public function __construct($objParentObject, $objMenu, $strPanelRightControlId, $strControlId = null) {
            // First, let's call the Parent's __constructor
            try {
                parent::__construct($objParentObject, $strControlId);
            } catch (QCallerException $objExc) {
                $objExc->IncrementOffset();
                throw $objExc;
            }
            // Next, we set the local project object
            $this->objMenu = $objMenu;
            $this->strPanelLeftControlId = $objParentObject;
            $this->strPanelRightControlId = $strPanelRightControlId;
            // Now, let's set up this custom panel's child controls
            // Also notice that our datagrid column render handler is called via a $_CONTROL->ParentControl
            // This is because the render handler is defined in this ProjectViewPanel, which ends up
            // being the datagrid's ("$_CONTROL") parent control object.
            $this->dtgMenu = new QDataGrid($this);
            $this->dtgMenu->CssClass = "datagrid";
            $this->dtgMenu->ShowFilter = TRUE;
            $this->dtgMenu->Paginator = new QPaginator($this->dtgMenu);
            $this->dtgMenu->ItemsPerPage = 20;
           
            
            $this->dtgMenu->AddColumn(new QDataGridColumn('', '<?= $_CONTROL->ParentControl->EditColumn_Render($_ITEM) ?>', 'HtmlEntities=false', 'Width=20px'));
            
            $Name = new QDataGridColumn('Code  Name', '<?= $_ITEM->Code ?>  <?= $_ITEM->Name ?>', 
                                        array(
                                                'OrderByClause' => QQ::OrderBy(QQN::Menu()->Name),
                                                'ReverseOrderByClause' => QQ::OrderBy(QQN::Menu()->Name, false)));
            $Name->Filter = QQ::Like(QQN::Menu()->Name, null);
            $Name->FilterPostfix  = '%';
            $Name->FilterPrefix  = '%';
            $Name->FilterType = QFilterType::TextFilter;
            $this->dtgMenu->AddColumn($Name);
           
            $this->dtgMenu->AddColumn(new QDataGridColumn('Link', '<?= $_ITEM->Link ?>'));
            
            // Let's make sorting Ajax-ified
            $this->dtgMenu->UseAjax = true;
            // Finally, we take advantage of the DataGrid's SetDataBinder to specify the method we use to actually bind
            // a datasource to the DataGrid
            $this->dtgMenu->SetDataBinder('dtgMenu_Bind', $this);
        }
        
        // This is the method that will perform the actual databinding on the dtgMembers datagrid
        // Note that because it is called by the QForm, this needs to be public
        public function dtgMenu_Bind() {
            $Menu = Menu::QueryArray(
                    QQ::AndCondition(
                           $this->dtgMenu->Conditions
                            ),
                    QQ::Clause(
                            $this->dtgMenu->OrderByClause,
                            $this->dtgMenu->LimitClause
                    ));
            $this->dtgMenu->DataSource = $Menu;

            $Count = Menu::QueryCount(
                    QQ::AndCondition(
                       $this->dtgMenu->Conditions
                        ), QQ::OrderBy(QQN::Menu()->Name)
                );
            $this->dtgMenu->TotalItemCount = $Count;
        }
        
        // DataGrid Render Handlers Below
        public function EditColumn_Render(Menu  $objMenu) {
            // Let's specify a specific Control ID for our button, using the datagrid's CurrentRowIndex
            $strControlId = 'btnEditMenu' . $this->dtgMenu->CurrentRowIndex;
                    $btnEdit = $this->objForm->GetControl($strControlId);
                    if (!$btnEdit) {
                        // Only create/instantiate a new Edit button for this Row if it doesn't yet exist
                        $btnEdit = new QLabel($this->dtgMenu, $strControlId);
                        $btnEdit->Text ='<i class="fa fa-pencil fa-lg"></i>';
                        $btnEdit->HtmlEntities = FALSE;

                        // Define an Event Handler on the Button
                        // Because the event handler, itself, is defined in the control, we use QAjaxControlAction instead of QAjaxAction
                        $btnEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnEditMenu_Click'));
                    }
            // Finally, update the Actionparameter for our button to store the $objPerson's ID.
            $btnEdit->ActionParameter = $objMenu->Idmenu;

            // Return the Rendered Button Control
            return $btnEdit->Render(false);
        }

        // Event Handlers Here
        public function btnEditMenu_Click($strFormId, $strControlId, $strParameter) {
            // Get pnlRight from the Parent Form
            $pnlRight = $this->objForm->GetControl($this->strPanelRightControlId);
            // First, remove all children panels from pnlRight
            $pnlRight->RemoveChildControls(true);
            
           // $pnlRight->CssClass =  "col-md-6 animated fadeInRight";
            $pnlRight->CssClass = "col-md-6 animated fadeInRight";
            
            $this->strPanelLeftControlId->CssClass = "smooth col-md-6";
            // Now create a new PersonEditPanel, setting pnlRight as its parent
            // and specifying parent form's "CloseRightPanel" as the method callback
            // See the note in _constructor, above, for more information
            $objMenuToEdit = Menu::LoadByIdmenu($strParameter);
            new MenuEditPanel($pnlRight, $objMenuToEdit, 'CloseRightPanel');
      }
    }
?>