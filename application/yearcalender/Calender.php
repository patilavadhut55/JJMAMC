<?php
require('../../qcubed.inc.php');
include './calendar.class.php';
require('EventEditPanel.class.php');
class YearCalForm extends QForm {
    // Local declarations of our Qcontrols
        protected $lstCal;
        protected $pnlRight;
        protected $lstTeachDept;
        protected $lstAcadYear;
        protected $lblCalander;
        protected $lblMonths;
        protected $btnAdd;
        protected $lblCal;
        protected $dlgSimpleMessage;

        protected function Form_Create() {
             parent::Form_Create();
             
            $this->pnlRight = new QPanel($this);
            $this->pnlRight->Position = QPosition::Relative;
            $this->pnlRight->CssClass = 'col-md-6';
            $this->pnlRight->AutoRenderChildren = true;
            
            $this->objDefaultWaitIcon = new QWaitIcon($this);
            
            $this->dlgSimpleMessage = new QDialog($this);
            $this->dlgSimpleMessage->Title = "Event";
            $this->dlgSimpleMessage->Text =  '<iframe src="'.__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__.'/yearcalender/dept_year_events_edit.php" height="590" width="700" style="border: 1px solid #FFF;"></iframe>';
            $this->dlgSimpleMessage->AutoOpen = false;
            $this->dlgSimpleMessage->Height = 675;
            $this->dlgSimpleMessage->Width = 750;
            $this->dlgSimpleMessage->Display = false;
            
            
            $this->btnAdd = new QButton($this);
            $this->btnAdd->ButtonMode = QButtonMode::Add;
            //$this->btnAdd->AddAction(new QClickEvent(), new QAjaxAction('btnNew_Click'));
            $this->btnAdd->AddAction(new QClickEvent(), new QShowDialog($this->dlgSimpleMessage));
            
             // Setup the Dropdown of Project Names
            $this->lstCal = new QSelect2ListBox($this);
            $this->lstCal->AddItem('Please Select Calender to proceed', null, true);
                    
            $calenders = CalenderYear::LoadAll();
            foreach ($calenders  as $calender)
                $this->lstCal->AddItem($calender->Name, $calender->IdcalenderYear);

            $this->lstCal->AddAction(new QClickEvent(), new QServerAction('lstCal_Change'));

            $this->lstTeachDept = new QSelect2ListBox($this);
            $this->lstTeachDept->AddItem('Please Select Faculty to proceed', null, true);
                    
            $Roles = Role::QueryArray(
                    QQ::OrCondition(
                             QQ::Equal(QQN::Role()->Grp, 4),
                            QQ::Equal(QQN::Role()->Grp, 5)));
            
            foreach ($Roles as $Role)
                $this->lstTeachDept->AddItem($Role->Name, $Role->Idrole);

            $this->lstTeachDept->AddAction(new QChangeEvent(), new QAjaxAction('lstTeachDept_Change'));

            $this->lstAcadYear = new QSelect2ListBox($this);
            $this->lstAcadYear->AddItem('Please Select Academic Year to proceed', null, true);
                    
            $acads = AcademicYear::LoadAll();
            foreach ($acads as $acad)
                $this->lstAcadYear->AddItem($acad->Name, $acad->IdacademicYear);
                $this->lstAcadYear->AddAction(new QChangeEvent(), new QAjaxAction('lstAcadYear_Change'));
            
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
            //$pnlProjectright = new EventEditPanel($this->pnlRight, 'Test','new');
        }
         
         
        public function lstCal_Change(){
            $cal = CalenderYear::LoadByIdcalenderYear($this->lstCal->SelectedValue);
            $calendar = new Calendar();
            

            $this->lblCalander->Text = $calendar->show(date('Y',  strtotime($cal->From)),date('m',  strtotime($cal->From)), 
                    $this->lstTeachDept->SelectedValue, 
                    $this->lstAcadYear->SelectedValue);
            
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
         
        public function btnNew_Click(){
         $this->pnlRight->RemoveChildControls(true);
           $this->pnlRight->CssClass = "col-md-6 animated fadeInRight";
           
          $pnlProjectleft = new EventEditPanel($this->pnlRight, 'new', 'Test');
           $this->dlgSimpleMessage->Open();
        }
     }

    
    YearCalForm::Run('YearCalForm');
?>


