<?php
    require('../../qcubed.inc.php');
 

    class TimeSlotEditForm extends QForm {
	protected $txtName;
        protected $txtNote;
        protected $calFrom;
        protected $calTo;
        protected $dtgtimeslot;
        protected $btnSave;
        protected $btnDelete;
        protected $btnNew;
        
        protected function Form_Run() {
            parent::Form_Run();
            
            QApplication::CheckRemoteAdmin();
        }
	protected function Form_Create() {
            parent::Form_Create();

            $this->txtName = new QTextBox($this);
            $this->txtName->Placeholder = "Name";
          
            $this->txtNote = new QTextBox($this);
            $this->txtNote->Placeholder = "Note";
            
            $this->calFrom = new QDateTimePicker($this);
            $this->calFrom->DateTimePickerType = QDateTimePickerType::Time;
            $this->calFrom->Name = 'From';
            
            $this->calTo = new QDateTimePicker($this);
            $this->calTo->DateTimePickerType = QDateTimePickerType::Time;
            $this->calTo->Name = 'To';
            
            $this->btnSave = new QButton($this);
            $this->btnSave->ButtonMode = QButtonMode::Add;
            $this->btnSave->AddAction(new QClickEvent(), new QServerAction("btnSave_Click"));
            
            $this->btnDelete = new QButton($this);
            $this->btnDelete->ButtonMode = QButtonMode::Delete;
            $this->btnDelete->Visible = FALSE;
            $this->btnDelete->AddAction(new QClickEvent(), new QServerAction("btnDelete_Click"));
            
            $this->btnNew = new QButton($this);
            $this->btnNew->Text = "Role";
            $this->btnNew->ButtonMode = QButtonMode::Success;
            $this->btnNew->AddAction(new QClickEvent(), new QServerAction("btnNew_Click"));                    
            
            
            $this->dtgtimeslot = new QDataGrid($this);
            $this->dtgtimeslot->CssClass = "datagrid";
            $this->dtgtimeslot->ShowFilter = TRUE;

            $this->dtgtimeslot->Paginator = new QPaginator($this->dtgtimeslot);
            $this->dtgtimeslot->ItemsPerPage = 20;

            $Name = new QDataGridColumn('Name', '<?= $_ITEM->Name ?>', 'Width=200',
                                array(
                                        'OrderByClause' => QQ::OrderBy(QQN::TimeSlot()->Name),
                                        'ReverseOrderByClause' => QQ::OrderBy(QQN::TimeSlot()->Name, false)));

            $Name->Filter = QQ::Like(QQN::TimeSlot()->Name, null);
            $Name->FilterPostfix = $Name->FilterPrefix = '%';
            $Name->FilterType = QFilterType::TextFilter;
            $this->dtgtimeslot->AddColumn($Name);
            $this->dtgtimeslot->AddColumn(new QDataGridColumn('From', '<?= $_ITEM->From ?>', 'Width=50'));
            $this->dtgtimeslot->AddColumn(new QDataGridColumn('To', '<?= $_ITEM->To ?>', 'Width=50'));
            $this->dtgtimeslot->AddColumn(new QDataGridColumn('Note', '<?= $_ITEM->Note ?>', 'Width=50'));

            $this->dtgtimeslot->SetDataBinder('dtgtimeslot_Bind');

            $this->dtgtimeslot->RowActionParameterHtml = '<?= $_ITEM->IdtimeSlot ?>';
            $this->dtgtimeslot->AddRowAction(new QClickEvent(), new QAjaxAction('dtgtimeslotRow_Click'));
            
            if(isset($_GET['id'])){
                $this->btnDelete->Visible = TRUE;   
                $time = TimeSlot::LoadByIdtimeSlot($_GET['id']);
                $this->txtName->Text = $time->Name;
                $this->txtNote->Text = $time->Note;
                $this->calFrom->DateTime = $time->From;
                $this->calTo->DateTime =$time->To;
            }
        }
        
        protected function dtgtimeslot_Bind(){
            $this->dtgtimeslot->TotalItemCount = TimeSlot::QueryCount(
                    QQ::AndCondition(
                                    $this->dtgtimeslot->Conditions
                            ));

            $data = TimeSlot::QueryArray(
                        QQ::AndCondition(
                                    $this->dtgtimeslot->Conditions
                            ),
            QQ::Clause(
                    $this->dtgtimeslot->OrderByClause,
                    $this->dtgtimeslot->LimitClause
            ));

            $this->dtgtimeslot->DataSource = $data;
        }

        public function dtgtimeslotRow_Click($strFormId, $strControlId, $strParameter) {            
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/master/timeslot_edit.php/?id='.$strParameter);
        }
        
        protected function btnSave_Click($strFormId, $strControlId, $strParameter) {
            $time = TimeSlot::LoadByIdtimeSlot($strParameter);
            if($time){                    
                $time->Name = $this->txtName->Text;
                $time->Note = $this->txtNote->Text ;
                $time->From = $this->calFrom->DateTime ;
                $time->To = $this->calTo->DateTime;
                $time->Save();
            }else{
                $time = new TimeSlot();
                $time->Name = $this->txtName->Text;
                $time->Note= $this->txtNote->Text;
                $time->From = $this->calFrom->DateTime ; 
                $time->To =  $this->calTo->DateTime;
                $time->Save();
            }
            $this->RedirectToListPage();
        }
        protected function btnDelete_Click($strFormId, $strControlId, $strParameter) {
            $time = TimeSlot::LoadByIdtimeSlot($_GET['id']);
            $time->Delete();
            $this->RedirectToListPage();
        }
        
        protected function btnNew_Click(){
              QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/master/timeslot_edit.php');
        }
        
        protected function RedirectToListPage() {
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/master/timeslot_edit.php');
        }
        
    }
 TimeSlotEditForm::Run('TimeSlotEditForm');
?>