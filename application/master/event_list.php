<?php
    require('../../qcubed.inc.php');
    class ExamEventEditForm extends QForm {
        protected $lstEvent;
        protected $lstDept;
        protected $lstSem;
        protected $calFrom;
        protected $calTo;
        protected $dtgEvent;
        protected $btnSearch;
        protected $btnadd;

        protected function Form_Run() {
            parent::Form_Run();
                // Security check for ALLOW_REMOTE_ADMIN
                // To allow access REGARDLESS of ALLOW_REMOTE_ADMIN, simply remove the line below
            QApplication::CheckRemoteAdmin();
        }

        protected function Form_Create() {
            parent::Form_Create();
            
            $this->lstEvent = new QSelect2ListBox($this);
            $this->lstEvent->Name = "Event";
            $this->lstEvent->AddItem("-Select Event-",NULL);
            $events = Event::LoadArrayByParrent(55);
            $this->lstEvent->Width = 300;
            foreach($events as $event){
                $this->lstEvent->AddItem($event->Name,$event->Idevent);
            }
            
            $this->lstDept = new QSelect2ListBox($this);
            $this->lstDept->Name = "Dept"; 
            $this->lstDept->AddItem("-Select Department-",NULL);
            $depts = Role::QueryArray(
                        QQ::OrCondition(
                                QQ::Equal(QQN::Role()->Grp, 4),
                                QQ::Equal(QQN::Role()->Grp, 5)));

            foreach ($depts as $dept)
                $this->lstDept->AddItem(delete_all_between ("[", "]",$dept->Name), $dept->Idrole);
                
            $this->lstSem = new QSelect2ListBox($this);
            $this->lstSem->Name = "Semester"; 
            $this->lstSem->AddItem("-Select Semester-", NULL);
            $this->lstSem->Width = 300;
            $sems = AcademicYear::LoadArrayByParrent(!NULL);
            foreach ($sems  as $sem)
                $this->lstSem->AddItem($sem->Name, $sem->IdacademicYear);

            
            $this->calFrom = new QCalendar($this);
            $this->calFrom->Name = "From";
            $this->calFrom->Width = 300;
            
            $this->calTo = new QCalendar($this);
            $this->calTo->Name = "To";
            $this->calTo->Width = 300;
            
            if(isset($_GET['from'])) $this->calFrom->Text = date ('d M Y', strtotime ($_GET['from']));
            if(isset($_GET['to'])) $this->calTo->Text = date ('d M Y', strtotime ($_GET['to']));
            if(isset($_GET['event'])) $this->lstEvent->SelectedValue = $_GET['event'];
            if(isset($_GET['dept'])) $this->lstDept->SelectedValue = $_GET['dept'];
            if(isset($_GET['sem'])) $this->lstSem->SelectedValue = $_GET['sem'];
            
            //datagride
            $this->dtgEvent = new QDataGrid($this);
            $this->dtgEvent->CssClass = "datagrid";

            $this->dtgEvent->ShowFilter = TRUE;

            $this->dtgEvent->Paginator = new QPaginator($this->dtgEvent);
            $this->dtgEvent->ItemsPerPage = 15;
            $this->dtgEvent->SetDataBinder('dtgEvent_Bind');


            $this->dtgEvent->AddColumn(new QDataGridColumn('Sr', '<?= ($_CONTROL->CurrentRowIndex + 1) ?>', 'Width=50'));
            
            $Name = new QDataGridColumn('Title', '<?= $_ITEM->Title ?>', 'HtmlEntities=false', 'Width=200',
                                array(
                                        'OrderByClause' => QQ::OrderBy(QQN::DeptYearEvents()->Title),
                                        'ReverseOrderByClause' => QQ::OrderBy(QQN::DeptYearEvents()->Title, false)));

            $Name->Filter = QQ::Like(QQN::Event()->Name, null);
            $Name->FilterPostfix = $Name->FilterPrefix = '%';
            $Name->FilterType = QFilterType::TextFilter;
            $this->dtgEvent->AddColumn($Name);

            $this->dtgEvent->AddColumn(new QDataGridColumn('From', '<?= date("d/m/Y", strtotime($_ITEM->From)) ?>', 'Width=50'));
            $this->dtgEvent->AddColumn(new QDataGridColumn('To', '<?= date("d/m/Y", strtotime($_ITEM->To)) ?>', 'Width=50'));
            /*$this->dtgEvent->AddColumn(new QDataGridColumn('Created By', '<?= $_ITEM->Name ?>', 'Width=50'));*/
            
            $this->dtgEvent->RowActionParameterHtml = '<?= $_ITEM->IddeptYearEvents ?>';
            $this->dtgEvent->AddRowAction(new QClickEvent(), new QServerAction('dtgEventRow_Click'));
                
            $this->btnSearch = new QButton($this);
            $this->btnSearch->ButtonMode = QButtonMode::Success;
            $this->btnSearch->Text = "Search";
            $this->btnSearch->AddAction(new QClickEvent(), new QServerAction("btnSearch_Click"));
           
            $this->btnadd = new QButton($this);
            $this->btnadd->ButtonMode = QButtonMode::Success;
            $this->btnadd->Text = "Add Events";
            $this->btnadd->AddAction(new QClickEvent(), new QServerAction("btnSave_Click"));

        }
        
        protected function dtgEvent_Bind(){
          if(isset($_GET['from']) && isset($_GET['to']) && isset($_GET['event']) && isset($_GET['dept']) && isset($_GET['sem'])){
            $this->dtgEvent->TotalItemCount = DeptYearEvents::QueryCount(
                    QQ::AndCondition(
                            QQ::GreaterOrEqual(QQN::DeptYearEvents()->From,  $_GET['from']),
                            QQ::LessOrEqual(QQN::DeptYearEvents()->To,  $_GET['to']),
                            QQ::Equal(QQN::DeptYearEvents()->Event, $_GET['event']),
                            QQ::Equal(QQN::DeptYearEvents()->DeptYearObject->Department, $_GET['dept']),
                            QQ::Equal(QQN::DeptYearEvents()->DeptYearObject->Semister, $_GET['sem']),
                            $this->dtgEvent->Conditions
                        ));

            $data = DeptYearEvents::QueryArray(
                        QQ::AndCondition(
                            QQ::GreaterOrEqual(QQN::DeptYearEvents()->From,  $_GET['from']),
                            QQ::LessOrEqual(QQN::DeptYearEvents()->To, $_GET['to']),
                            QQ::Equal(QQN::DeptYearEvents()->Event, $_GET['event']),
                            QQ::Equal(QQN::DeptYearEvents()->DeptYearObject->Department, $_GET['dept']),
                            QQ::Equal(QQN::DeptYearEvents()->DeptYearObject->Semister, $_GET['sem']),
                            $this->dtgEvent->Conditions
                        ),
            QQ::Clause(
                    QQ::OrderBy(QQN::DeptYearEvents()->IddeptYearEvents, TRUE),
                    $this->dtgEvent->LimitClause
            ));

            $this->dtgEvent->DataSource = $data;
          }
        }
        
        public function dtgEventRow_Click($strFormId, $strControlId, $strParameter) {
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/yearcalender/dept_year_events_edit.php?id='.$strParameter);
        }
        
        protected function btnSearch_Click(){
            if($this->calFrom->Text != NULL && $this->calTo->Text != NULL && $this->lstEvent->SelectedValue != NULL && $this->lstDept->SelectedValue != NULL && $this->lstSem->SelectedValue != NULL){
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/master/event_list.php?from='.date('Ymd',  strtotime ($this->calFrom->Text))."&to=".date('Ymd',  strtotime ($this->calTo->Text))."&event=".$this->lstEvent->SelectedValue."&dept=".$this->lstDept->SelectedValue."&sem=".$this->lstSem->SelectedValue); 
            }
        }    
            
        protected function btnSave_Click(){
             QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/yearcalender/dept_year_events_edit.php?'); 
        }
    }
    
    ExamEventEditForm::Run('ExamEventEditForm');
?>