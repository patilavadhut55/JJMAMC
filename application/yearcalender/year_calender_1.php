<?php
require('../../qcubed.inc.php');
include './calendar.class.php';
class YearCalenderForm extends QForm {
        // Local declarations of our Qcontrols
            protected $lstCal;
            protected $lstTeachDept;
            protected $btnGenerate;
            public $btnViewCal;
            protected $lblCalander;
            public $dtgEvent;
            protected $lblMonths;
            protected $objEvent;
            protected $calFrom;
            protected $calTo;
            protected $btnSave;
            protected $btnCancel;
            
            protected function Form_Create() {
             parent::Form_Create();
                $this->objDefaultWaitIcon = new QWaitIcon($this);
                $this->lstCal = new QSelect2ListBox($this);
                $this->lstCal->AddItem('Please Select Calender to proceed', null, true);
                $calenders = CalenderYear::LoadAll();
                foreach ($calenders  as $calender)
                    $this->lstCal->AddItem($calender->Name, $calender->IdcalenderYear);

                //$this->lstCal->AddAction(new QClickEvent(), new QServerAction('lstCal_Change'));
                
                $this->lstTeachDept = new QSelect2ListBox($this);
                $this->lstTeachDept->AddItem('Please Select Department to proceed', null, true);

                $Roles = Role::QueryArray(
                        QQ::OrCondition(
                                 QQ::Equal(QQN::Role()->Grp, 4),
                                QQ::Equal(QQN::Role()->Grp, 5)));

                foreach ($Roles as $Role)
                    $this->lstTeachDept->AddItem($Role->Name, $Role->Idrole);

                //$this->lstTeachDept->AddAction(new QChangeEvent(), new QAjaxAction('lstTeachDept_Change'));

                $this->btnGenerate = new QButton($this);
                $this->btnGenerate->ButtonMode = QButtonMode::Generate;
                $this->btnGenerate->AddAction(new QClickEvent(),new QServerAction('btnGenerate_Click'));
               
                $this->lblCalander = new QLabel($this);
                $this->lblCalander->HtmlEntities = FALSE;
               
                for($i=1; $i<=12; $i++){
                    if($i < 10) $i = "0".$i; //month needs 2 char

                    $this->lblMonths[$i] = new QButton($this);
                    $this->lblMonths[$i]->ButtonMode = QButtonMode::Warning;
                    $this->lblMonths[$i]->Text = Date('M', strtotime("2016".$i."01"));
                    $this->lblMonths[$i]->Visible = FALSE;
                    $this->lblMonths[$i]->Width = 50;
                    $this->lblMonths[$i]->ActionParameter = $i;
                    $this->lblMonths[$i]->AddAction(new QClickEvent(), new QAjaxAction('lblMonths_Click'));
                }
                
                $this->calFrom = new QDateTimePicker($this);
                
                
//                $this->CalFrom->AddAction(new QEscapeKeyEvent(), new QAjaxAction('btnCancel_Click'));
//                $this->CalFrom->AddAction(new QEscapeKeyEvent(), new QTerminateAction());
                
                $this->calTo = new QDateTimePicker($this);
                $this->calTo->MaxLength = 50;
                $this->calTo->Width = 200;
                $this->CalTo->AddAction(new QEscapeKeyEvent(), new QAjaxAction('btnCancel_Click'));
                $this->CalTo->AddAction(new QEscapeKeyEvent(), new QTerminateAction());
                
                $this->btnViewCal = new QButton($this);
                $this->btnViewCal->Text = QApplication::Translate('View Calender');
                $this->btnViewCal->ButtonMode = QButtonMode::Success;
                $this->btnViewCal->AddAction(new QClickEvent(), new QServerAction('btnViewCal_Click'));
                
                $this->dtgEvent = new QDataGrid($this);
                $this->dtgEvent->CssClass = "datagrid";
                $this->dtgEvent->ShowFilter = TRUE;

                $this->dtgEvent->Paginator = new QPaginator($this->dtgEvent);
                $this->dtgEvent->ItemsPerPage = 15;
                $this->dtgEvent->AddColumn(new QDataGridColumn('Sr.', '<?= ($_CONTROL->CurrentRowIndex + 1) ?>', 'Width=3'));  
                 $Name = new QDataGridColumn('Event', '<?= $_ITEM->Title ?>', 
                        array('OrderByClause' => QQ::OrderBy(QQN::DeptYearEvents()->Title), 
                            'ReverseOrderByClause' => QQ::OrderBy(QQN::DeptYearEvents()->Title, false)));
                $Name->Filter = QQ::Like(QQN::DeptYearEvents()->Title, null);
                $Name->FilterPostfix = $Name->FilterPrefix = '%';
                $Name->FilterType = QFilterType::TextFilter;
                $this->dtgEvent->AddColumn($Name);
                
                $this->dtgEvent->AddColumn(new QDataGridColumn('', '<?= $_FORM->chkDateOut_Render($_ITEM) ?>','HtmlEntities=false'));
                $this->dtgEvent->AddColumn(new QDataGridColumn('From Date','<?= $_ITEM->From ?>'));
                $this->dtgEvent->AddColumn(new QDataGridColumn('To Date','<?= $_ITEM->To ?>'));
                $this->dtgEvent->AddColumn(new QDataGridColumn('Description','<?= $_ITEM->Description ?>'));
                // Let's make sorting Ajax-ified
                $this->dtgEvent->UseAjax = true;

                // Finally, we take advantage of the DataGrid's SetDataBinder to specify the method we use to actually bind
                // a datasource to the DataGrid
                $this->dtgEvent->SetDataBinder('dtgEvent_Bind', $this);

                
          }
          public function dtgEvent_Bind() {
              //if(isset($_GET['cal'])&& isset($_GET['dept'])){
                   $Count = DeptYearEvents::QueryCount(
                        QQ::AndCondition(
                               $this->dtgEvent->Conditions
                               
                                
                                ), QQ::OrderBy(QQN::DeptYearEvents()->Title)
                        );
                    $this->dtgEvent->TotalItemCount = $Count;
                    $Events = DeptYearEvents::QueryArray(
                            QQ::AndCondition(
                                   $this->dtgEvent->Conditions
                                     
                                    ),
                            QQ::Clause(
                                    $this->dtgEvent->OrderByClause,
                                    $this->dtgEvent->LimitClause
                            ));
                    $this->dtgEvent->DataSource = $Events;
              //}
            }
              // DataGrid Render Handlers Below
            public function chkDateOut_Render(DeptYearEvents $objEvent) {

              $strControlId = 'From'.$objEvent->IddeptYearEvents;

              // See if it exists already
              $From = $this->GetControl($strControlId);

              if (!$From) {
                $From = new QDateTimePicker($this);
                //$From->AddCssClass("dateclass");
                if ($objEvent->From != NULL) {
                  $From = $objEvent->From->qFormat('ymd');
                }
              }
              return $From->Render(false);
            }
            public function btnViewCal_Click(){
                 $cal = CalenderYear::LoadByIdcalenderYear($this->lstCal->SelectedValue);
                  $calendar = new Calendar();
                $this->lblCalander->Text = $calendar->show(date('Y',  strtotime($cal->From)),date('m',  strtotime($cal->From)), 
                        $this->lstTeachDept->SelectedValue);

                for ($i=1; $i<=12; $i++){
                    if($i < 10) $i = "0".$i; //month needs 2 char

                    $this->lblMonths[$i]->Visible = TRUE;
                }

            }
           public function lblMonths_Click($strFormId, $strControlId, $strParameter){
             if($this->lstCal->SelectedValue != NULL){
                 for ($i=1; $i<=12; $i++){
                if($i < 10) $i = "0".$i; 
                    $cal = CalenderYear::LoadByIdcalenderYear($this->lstCal->SelectedValue);
                    $calendar = new Calendar();
                     
                    $this->lblCalander->Text = $calendar->show(date('Y',  strtotime($cal->From)), $strParameter, 
                    $this->lstTeachDept->SelectedValue, 
                    $this->lstAcadYear->SelectedValue);
                 }
              }
         }
        
           public function btnGenerate_Click(){
            $events= Event::QueryArray(
                    QQ::AndCondition(
                            QQ::NotEqual(QQN::Event()->Parrent, NULL)
                            ), QQ::OrderBy(QQN::Event()->FromDate)
                    );
            foreach ($events as $event){
                
              $year = CalenderYear::LoadByIdcalenderYear($this->lstCal->SelectedValue);
              
              if(date("m". strtotime($event->FromDate)) < date("m". strtotime($year->From)))
                  $getyear = date('Y', strtotime($year->To)) - 1;
              else
                  $getyear = date('Y', strtotime($year->From)) + 1;
              
              //is event exists
              $find= DeptYearEvents::LoadByTitle($event->Name.' '.$getyear);
              if(!$find){ //no then create
                  $dept = new DeptYearEvents();
                  $dept->Event = $event->Idevent;
                  $dept->Title = $event->Name.' '.$getyear;
                  $from = date('md', strtotime($event->FromDate));
                  $to = date('md', strtotime($event->FixedToDate));
                  $dept->From = QDateTime::FromTimestamp(strtotime($getyear.$from));
                  $dept->To = QDateTime::FromTimestamp(strtotime($getyear.$to));
                  $dept->Description =$event->Description;
                  $dept->Save();
              }
            }
           }                         
}
YearCalenderForm::Run('YearCalenderForm');
?>
