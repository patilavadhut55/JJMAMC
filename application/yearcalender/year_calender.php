<?php
require('../../qcubed.inc.php');
include './calendar.class.php';
class YearCalenderForm extends QForm {
        // Local declarations of our Qcontrols
            protected $lstCal;
            protected $lstTeachDept;
            protected $btnGenerate;
            public $btnViewCal;
            protected $pnlRight;
            public $dtgEvent;
            public $CalFrom;
            public $CalTo;
            public $objEvent;
            protected $lblCalander;
            public $lblMonths;
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
                $this->pnlRight = new QPanel($this);
                $this->pnlRight->Position = QPosition::Relative;
                $this->pnlRight->CssClass = 'col-md-6';
                $this->pnlRight->AutoRenderChildren = true;
                
                
                $this->btnGenerate = new QButton($this);
                $this->btnGenerate->ButtonMode = QButtonMode::Generate;
                $this->btnGenerate->AddAction(new QClickEvent(),new QServerAction('btnGenerate_Click'));
               
                $this->btnViewCal = new QButton($this);
                $this->btnViewCal->Text = QApplication::Translate('View Calender');
                $this->btnViewCal->ButtonMode = QButtonMode::Success;
                $this->btnViewCal->AddAction(new QClickEvent(),new QServerAction('btnViewCal_Click'));
                
                $this->btnCancel = new QButton($this);
                $this->btnCancel->ButtonMode = QButtonMode::Success;
                $this->btnCancel->Text = QApplication::Translate('View All Month');
                $this->btnCancel->AddAction(new QClickEvent(),new QServerAction('btnCancel_Click'));
                $this->btnCancel->Visible =FALSE;
                
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
                    $this->lblMonths[$i]->AddAction(new QClickEvent(), new QServerAction('lblMonths_Click'));
                }
                
                $this->dtgEvent = new QDataGrid($this);
                $this->dtgEvent->CssClass = "datagrid";
                $this->dtgEvent->ShowFilter = TRUE;
                
                $this->dtgEvent->Paginator = new QPaginator($this->dtgEvent);
                $this->dtgEvent->ItemsPerPage = 10;
                
                $this->dtgEvent->AddColumn(new QDataGridColumn('', '<?= $_FORM->renderButton($_ITEM) ?>', 'HtmlEntities=false'));
                $Name = new QDataGridColumn('Event Name', '<?= $_ITEM->Title ?>', 
                    array('OrderByClause' => QQ::OrderBy(QQN::DeptYearEvents()->Title), 
                            'ReverseOrderByClause' => QQ::OrderBy(QQN::DeptYearEvents()->Title, false)));
                $Name->Filter = QQ::Like(QQN::DeptYearEvents()->Title, null);
                $Name->FilterPostfix = $Name->FilterPrefix = '%';
                $Name->FilterType = QFilterType::TextFilter;
                $this->dtgEvent->AddColumn($Name);
                $this->dtgEvent->AddColumn(new QDataGridColumn('From Date','<?= $_ITEM->From ?>'));
                $this->dtgEvent->AddColumn(new QDataGridColumn('To Date','<?= $_ITEM->To ?>'));

                // Let's make sorting Ajax-ified
                $this->dtgEvent->UseAjax = true;

                // Finally, we take advantage of the DataGrid's SetDataBinder to specify the method we use to actually bind
                // a datasource to the DataGrid
                $this->dtgEvent->SetDataBinder('dtgEvent_Bind', $this);
                
                 


                }
            public function dtgEvent_Bind() {
                if($this->lstCal->SelectedValue != Null){
                $Events = DeptYearEvents::QueryArray(
                        QQ::AndCondition(
                                $this->dtgEvent->Conditions,
                                QQ::Equal(QQN::DeptYearEvents()->CalenderYear, $this->lstCal->SelectedValue)
                                ),
                        QQ::Clause(
                                   
                                    $this->dtgEvent->OrderByClause,
                                    $this->dtgEvent->LimitClause
                            ));
                $this->dtgEvent->DataSource = $Events;
                $Count = DeptYearEvents::QueryCount(
                        QQ::AndCondition(
                               $this->dtgEvent->Conditions,
                                 QQ::Equal(QQN::DeptYearEvents()->CalenderYear, $this->lstCal->SelectedValue)
                                 ), QQ::OrderBy(QQN::DeptYearEvents()->Title));
                $this->dtgEvent->TotalItemCount = $Count;
                }  else {
                    $Events = DeptYearEvents::QueryArray(
                        QQ::AndCondition(
                                $this->dtgEvent->Conditions
                                ),
                        QQ::Clause(
                                   
                                    $this->dtgEvent->OrderByClause,
                                    $this->dtgEvent->LimitClause
                            ));
                $this->dtgEvent->DataSource = $Events;
                $Count = DeptYearEvents::QueryCount(
                        QQ::AndCondition(
                               $this->dtgEvent->Conditions
                                 ), QQ::OrderBy(QQN::DeptYearEvents()->Title));
                $this->dtgEvent->TotalItemCount = $Count;
                }
               
                
            }
            public function renderButton(DeptYearEvents $objEvent) {
                $objControlId = "editButton" . $objEvent->IddeptYearEvents;

                if(!$objControl = $this->GetControl($objControlId)) {
                    $objControl = new QLabel($this->dtgEvent, $objControlId);
                    $objControl->Text = '<i class="fa fa-pencil fa-lg"></i>';
                    $objControl->HtmlEntities = FALSE;

                    $objControl->AddAction(new QClickEvent(), new QServerAction("renderButton_Click"));
                    $objControl->ActionParameter = $objEvent->IddeptYearEvents;
                }

                // We pass the parameter of "false" to make sure the control doesn't render
                // itself RIGHT HERE - that it instead returns its string rendering result.
                return $objControl->Render(false);
            }

            public function renderButton_Click($strFormId, $strControlId, $strParameter) {
                QApplication::ExecuteJavaScript("showdialog('".$strParameter."')");
            }
            
            
            public function btnViewCal_Click($strFormId, $strControlId, $strParameter){
              if($this->lstCal->SelectedValue!=NULL){
                $this->btnCancel->Visible = TRUE;
                $cal = CalenderYear::LoadByIdcalenderYear($this->lstCal->SelectedValue);
                $calendar = new Calendar();


                $this->lblCalander->Text = $calendar->show(date('Y',  strtotime($cal->From)),date('m',  strtotime($cal->From)), 
                        $this->lstCal->SelectedValue,$this->lstTeachDept->SelectedValue);

                for ($i=1; $i<=12; $i++){
                    if($i < 10) $i = "0".$i; //month needs 2 char

                    $this->lblMonths[$i]->Visible = TRUE;
                }
              } else {
                QApplication::DisplayAlert('please select year');
                }
              
          }
          public function btnGenerate_Click(){
              if($this->lstCal->SelectedValue!=NULL && $this->lstTeachDept->SelectedValue!= NULL){
                $events= Event::QueryArray(
                        QQ::AndCondition(
                                QQ::NotEqual(QQN::Event()->Parrent, NULL)
                                ), QQ::OrderBy(QQN::Event()->FromDate)
                        );
                foreach ($events as $event){
                $year = CalenderYear::LoadByIdcalenderYear($this->lstCal->SelectedValue);

                    if(date("m". strtotime($event->FromDate)) < date("m". strtotime($year->From)))
                        $getyear = date('Y', strtotime($year->To));
                    else
                        $getyear = date('Y', strtotime($year->From));

                  //is event exists
                    $find= DeptYearEvents::LoadByTitle($event->Name.' '.$getyear);
                        if(!$find){ //no then create
                            $dept = new DeptYearEvents();
                            $dept->Event = $event->Idevent;
                            $dept->Title = $event->Name.' '.$getyear;
                            $dept->Department = $this->lstTeachDept->SelectedValue;
                            $dept->CalenderYear = $this->lstCal->SelectedValue;
                            $from = date('md', strtotime($event->FromDate));
                            $to = date('md', strtotime($event->FixedToDate));
                            $dept->From = QDateTime::FromTimestamp(strtotime($getyear.$from));
                            $dept->To = QDateTime::FromTimestamp(strtotime($getyear.$to));
                            $dept->Description =$event->Description;
                            $dept->Save();
                      }
                }
                } else {
                QApplication::DisplayAlert('please select year and Department');
                }
           }
           
            public function lblMonths_Click($strFormId, $strControlId, $strParameter){
             if($this->lstCal->SelectedValue != NULL){
                 for ($i=1; $i<=12; $i++){
                if($i < 10) $i = "0".$i; 
                    $cal = CalenderYear::LoadByIdcalenderYear($this->lstCal->SelectedValue);
                    $calendar = new Calendar();
                    $this->lblCalander->Text = $calendar->show(date('Y',  strtotime($cal->From)), $strParameter, 
                    $this->lstCal->SelectedValue,$this->lstTeachDept->SelectedValue);
                 }
              }
         }
         public function btnCancel_Click(){
             QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__.'/yearcalender/year_calender.php');  
         }
                                     
}
YearCalenderForm::Run('YearCalenderForm');
?>
