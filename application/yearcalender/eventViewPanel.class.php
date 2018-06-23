<?php
	
	class EventViewPanel extends QPanel {
		// Local instance of the Meta DataGrid to list Events
		/**
		 * @var EventDataGrid
		 */
		public $dtgEvent;
         	// The Local Project object which this panel represents
                protected $objEvent;
                public $lblEdit;
                public $lstGrp;
                public $CalFrom;
                public $CalTo;
                public $btnSearch;
               // The Reference to the Main Form's "Right Panel" so that this panel
               // can make changes to the right panel on the page
                protected $strPanelLeftControlId;
                protected $strPanelRightControlId;

                // Specify the Template File for this custom QPanel
                protected $strTemplate = 'eventViewPanel.tpl.php';

                // We Create a new __constructor that takes in the Project we are "viewing"
                // The functionality of __construct in a custom QPanel is similar to the QForm's Form_Create() functionality

		public function __construct($objParentObject, $objEvent, $strPanelRightControlId, $strControlId = null) {
			// Call the Parent
			try {
				parent::__construct($objParentObject, $strControlId);
			} catch (QCallerException $objExc) {
				$objExc->IncrementOffset();
				throw $objExc;
			}

			      // Next, we set the local project object
                    $this->objEvent = $objEvent;
                     
                    $this->lstGrp = new QSelect2ListBox($this);
                    $this->lstGrp->Name = "";
                    $this->lstGrp->AddItem("-Select One-", NULL);
                    $grps = Event::LoadArrayByParrent(NULL);
                    foreach ($grps as $grp){
                        $this->lstGrp->AddItem($grp->Name, $grp->Idevent);
                    }
                    $this->lstGrp->AddAction(new QClickEvent(), new QAjaxControlAction($this,'lstGrp_click'));
                    
                    if(isset($_GET['grp'])){  
                        $this->lstGrp->SelectedValue = $_GET['grp'];
                      

                    }
                    $this->CalFrom = new QDateTimePicker($this);
                    $this->CalFrom->Width = 70;
                    $this->CalTo = new QDateTimePicker($this);
                    $this->CalTo->Width = 70;
                    if(isset($_GET['From'])){  
                           $this->CalFrom->DateTime = QDateTime::FromTimestamp(strtotime($_GET['From']));
                    }
                    
                    if(isset($_GET['To'])){  
                          $this->CalTo->DateTime = QDateTime::FromTimestamp(strtotime($_GET['To']));

                    }
                    
                    $this->lblEdit = new QLabel($this);
                    $this->lblEdit->Text = '<i class="fa fa-pencil fa-lg"></i>';
                    $this->lblEdit->HtmlEntities = FALSE;
                    $this->lblEdit->Visible = FALSE;
                    $this->lblEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'lblEditEvent_Click'));
                   
                    $this->btnSearch = new QButton($this);
                    $this->btnSearch->ButtonMode = QButtonMode::Success;
                    $this->btnSearch->Text = "Search";
                    $this->btnSearch->AddAction(new QClickEvent(), new QServerControlAction($this,'btnSearch_Click'));
                    
                    
                    $this->strPanelLeftControlId = $objParentObject;
                    $this->strPanelRightControlId = $strPanelRightControlId;

                    // Now, let's set up this custom panel's child controls
                    // Also notice that our datagrid column render handler is called via a $_CONTROL->ParentControl
                    // This is because the render handler is defined in this ProjectViewPanel, which ends up
                    // being the datagrid's ("$_CONTROL") parent control object.
                    $this->dtgEvent = new QDataGrid($this);
                    $this->dtgEvent->CssClass = "datagrid";
                    $this->dtgEvent->ShowFilter = TRUE;

                    $this->dtgEvent->Paginator = new QPaginator($this->dtgEvent);
                    $this->dtgEvent->ItemsPerPage = 9;

                    $this->dtgEvent->AddColumn(new QDataGridColumn('', '<?= $_CONTROL->ParentControl->EditColumn_Render($_ITEM) ?>', 'HtmlEntities=false', 'Width=20px'));
                   
                     $Name = new QDataGridColumn('Event Name', '<?= $_ITEM->Name ?>', 
                            array('OrderByClause' => QQ::OrderBy(QQN::Event()->Name), 
                                'ReverseOrderByClause' => QQ::OrderBy(QQN::Event()->Name, false)));
                    $Name->Filter = QQ::Like(QQN::Event()->Name, null);
                    $Name->FilterPostfix = $Name->FilterPrefix = '%';
                    $Name->FilterType = QFilterType::TextFilter;
                    $this->dtgEvent->AddColumn($Name);
                    $this->dtgEvent->AddColumn(new QDataGridColumn('Group','<?= $_ITEM->ParrentObject->Name ?>'));
                    $this->dtgEvent->AddColumn(new QDataGridColumn('Color','<?= $_ITEM->Color ?>'));
                    $this->dtgEvent->AddColumn(new QDataGridColumn('Scope','<?= $_ITEM->DepartmentObject->Name ?>'));
                    // Let's make sorting Ajax-ified
                    $this->dtgEvent->UseAjax = true;

                    // Finally, we take advantage of the DataGrid's SetDataBinder to specify the method we use to actually bind
                    // a datasource to the DataGrid
                    $this->dtgEvent->SetDataBinder('dtgEvent_Bind', $this);
		}

		public function dtgEvent_Bind() {
                    if(isset($_GET['grp'])){
                   
                    $Count = Event::QueryCount(
                        QQ::AndCondition(
                               $this->dtgEvent->Conditions,
                                QQ::Equal(QQN::Event()->Parrent, $_GET['grp'])
                                
                                ), QQ::OrderBy(QQN::Event()->Name)
                        );
                    $this->dtgEvent->TotalItemCount = $Count;
                     
                    
                    $Events = Event::QueryArray(
                            QQ::AndCondition(
                                   $this->dtgEvent->Conditions,
                                     QQ::Equal(QQN::Event()->Parrent, $_GET['grp'])
                                     
                                    ),
                            QQ::Clause(
                                    $this->dtgEvent->OrderByClause,
                                    $this->dtgEvent->LimitClause
                            ));
                    $this->dtgEvent->DataSource = $Events;
                    }
                    if(isset($_GET['From'])&& isset($_GET['To'])){
                    $fromdate = date('Ymd',  strtotime($_GET['From']));    
                    $todate = date('Ymd',  strtotime($_GET['To']));
                    $Count = Event::QueryCount(
                        QQ::AndCondition(
                               $this->dtgEvent->Conditions,
                                
                                QQ::LessOrEqual(QQN::Event()->FixedToDate, $todate.'235959'),
                                QQ::GreaterOrEqual(QQN::Event()->FromDate , $fromdate.'000000')
                                ), QQ::OrderBy(QQN::Event()->Name)
                        );
                    $this->dtgEvent->TotalItemCount = $Count;
                     
                    
                    $Events = Event::QueryArray(
                            QQ::AndCondition(
                                   $this->dtgEvent->Conditions,
                                     
                                     QQ::LessOrEqual(QQN::Event()->FixedToDate, $todate.'235959'),
                                     QQ::GreaterOrEqual(QQN::Event()->FromDate , $fromdate.'000000')
                                    ),
                            QQ::Clause(
                                    $this->dtgEvent->OrderByClause,
                                    $this->dtgEvent->LimitClause
                            ));
                    $this->dtgEvent->DataSource = $Events;
                    }
                    
                    if(isset($_GET['grp'])&&isset($_GET['From'])&&isset($_GET['To'])){
                    $fromdate = date('Ymd',  strtotime($this->CalFrom->DateTime));    
                    $todate = date('Ymd',  strtotime($this->CalTo->DateTime));
                    $Count = Event::QueryCount(
                        QQ::AndCondition(
                               $this->dtgEvent->Conditions,
                                QQ::Equal(QQN::Event()->Parrent, $_GET['grp']),
                                QQ::LessOrEqual(QQN::Event()->FixedToDate, $todate.'235959'),
                                QQ::GreaterOrEqual(QQN::Event()->FromDate , $fromdate.'000000')
                                ), QQ::OrderBy(QQN::Event()->Name)
                        );
                    $this->dtgEvent->TotalItemCount = $Count;
                 
                    $Events = Event::QueryArray(
                            QQ::AndCondition(
                                   $this->dtgEvent->Conditions,
                                     QQ::Equal(QQN::Event()->Parrent, $_GET['grp']),
                                     QQ::LessOrEqual(QQN::Event()->FixedToDate, $todate.'235959'),
                                     QQ::GreaterOrEqual(QQN::Event()->FromDate , $fromdate.'000000')
                                    ),
                            QQ::Clause(
                                    $this->dtgEvent->OrderByClause,
                                    $this->dtgEvent->LimitClause
                            ));
                    $this->dtgEvent->DataSource = $Events;
                    }
                }
//               public function search_change(){
//                 QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/yearcalender/event_edit.php?grp='.$this->lstGrp->SelectedValue);
//               }
                public function lstgrp_click(){
                    if($this->lstGrp->SelectedValue != NULL)
                        $this->lblEdit->Visible = TRUE;
                    else
                        $this->lblEdit->Visible = FALSE;
                }
                // DataGrid Render Handlers Below
                public function EditColumn_Render(Event $objEvent) {
                    // Let's specify a specific Control ID for our button, using the datagrid's CurrentRowIndex
                    $strControlId = 'btnEditEvent' . $this->dtgEvent->CurrentRowIndex;

                    $btnEdit = $this->objForm->GetControl($strControlId);
                    if (!$btnEdit) {
                        // Only create/instantiate a new Edit button for this Row if it doesn't yet exist
                        $btnEdit = new QLabel($this->dtgEvent, $strControlId);
                        $btnEdit->Text = '<i class="fa fa-pencil fa-lg"></i>';
                        $btnEdit->HtmlEntities = FALSE;

                        // Define an Event Handler on the Button
                        // Because the event handler, itself, is defined in the control, we use QAjaxControlAction instead of QAjaxAction
                        $btnEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnEditEvent_Click'));
                    }

                    // Finally, update the Actionparameter for our button to store the $objPerson's ID.
                    $btnEdit->ActionParameter = $objEvent->Idevent;

                    // Return the Rendered Button Control
                    return $btnEdit->Render(false);
                }

                // Event Handlers Here
                public function btnEditEvent_Click($strFormId, $strControlId, $strParameter) {
                    // Get pnlRight from the Parent Form
                    $pnlRight = $this->objForm->GetControl($this->strPanelRightControlId);

                    // First, remove all children panels from pnlRight
                    $pnlRight->RemoveChildControls(true);

                    $pnlRight->CssClass = "col-md-6 animated fadeInRight";
                    $this->strPanelLeftControlId->CssClass = "smooth col-md-6";
                    
                    // Now create a new PersonEditPanel, setting pnlRight as its parent
                    // and specifying parent form's "CloseRightPanel" as the method callback
                    // See the note in _constructor, above, for more information
                    $objEventToEdit = Event::LoadByIdevent($strParameter);
                    new EventEditPanel($pnlRight, $objEventToEdit, 'CloseRightPanel');
                }
                
                public function lblEditEvent_Click($strFormId, $strControlId, $strParameter) {
                    // Get pnlRight from the Parent Form
                    $pnlRight = $this->objForm->GetControl($this->strPanelRightControlId);

                    // First, remove all children panels from pnlRight
                    $pnlRight->RemoveChildControls(true);

                    $pnlRight->CssClass = "col-md-6 animated fadeInRight";
                    $this->strPanelLeftControlId->CssClass = "smooth col-md-6";
                    
                    // Now create a new PersonEditPanel, setting pnlRight as its parent
                    // and specifying parent form's "CloseRightPanel" as the method callback
                    // See the note in _constructor, above, for more information
                    $objEventToEdit = Event::LoadByIdevent($this->lstGrp->SelectedValue);
                    new EventEditPanel($pnlRight, $objEventToEdit, 'CloseRightPanel');
                }
                
                public function btnSearch_Click(){
                    if($this->lstGrp->SelectedValue!= NULL){
                          QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/yearcalender/event_edit.php?grp='.$this->lstGrp->SelectedValue);
                    }elseif($this->CalFrom->DateTime != NULL && $this->CalTo->DateTime != NULL){
                            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/yearcalender/event_edit.php?From='.date('Ymd',strtotime($this->CalFrom->DateTime)).'&To='.date('Ymd',strtotime($this->CalTo->DateTime))); 
                    }elseif($this->lstGrp->SelectedValue!= NULL && $this->CalFrom->DateTime != NULL && $this->CalTo->DateTime != NULL){
                            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/yearcalender/event_edit.php?grp='.$this->lstGrp->SelectedValue.'&From='.date('Ymd',strtotime($this->CalFrom->DateTime)).'&To='.date('Ymd',strtotime($this->CalTo->DateTime))); 
                    }
                }
        
	}
?>