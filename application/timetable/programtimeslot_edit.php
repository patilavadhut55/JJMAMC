<?php
    require('../../qcubed.inc.php');
 
    class TimeSlotEditForm extends QForm {
	protected $lstDept;
        protected $lstPeriod;
        protected $lstPeriod1;
        protected $txtseq;
        protected $txtseq1;

        protected $btnAdd;
        protected $btnSearch;
        protected $lbldel;
        protected function Form_Run() {
            parent::Form_Run();
            
            QApplication::CheckRemoteAdmin();
        }
	protected function Form_Create() {
            parent::Form_Create();
            $this->txtseq = new QTextBox($this);
            $this->txtseq->Placeholder ='Sequence';
            //$this->txtseq->Width = 80;
            
            //List Box
            $this->lstDept = new QSelect2ListBox($this);
            $this->lstDept->AddItem('Select Program', null, true);
            $Roles = Role::LoadArrayByGrp(5);
            foreach ($Roles as $Role){
                $this->lstDept->AddItem(delete_all_between ("[", "]", $Role->Name), $Role->Idrole);
            }
            
            $this->lstPeriod= new QSelect2ListBox($this);
            $this->lstPeriod->AddItem('Select Period', null, true);
            $times = Timeslot::LoadAll();
            foreach ($times as $time){
                $this->lstPeriod->AddItem($time->Name, $time->IdtimeSlot);
            }
            
            $this->lstPeriod1 = new QListBox($this);
            $this->lstPeriod1->Name = "Period";
            $periods = TimeSlot::LoadAll();
            $this->lstPeriod1->AddItem("- Select One -",NULL);
            foreach ($periods as $period){
                $this->lstPeriod1->AddItem($period->Name." ( ".date('h:ia', mktime($period->From->Hour,$period->From->Minute,0,1,1,2000))." - ".date('h:ia', mktime($period->To->Hour,$period->To->Minute,0,1,1,2000))." ) ",$period->IdtimeSlot);
            }
             
            //Buttons
            $this->btnAdd = new QButton($this);
            $this->btnAdd->ButtonMode = QButtonMode::Add;
            $this->btnAdd->AddAction(new QClickEvent(), new QServerAction("btnSave_Click"));
            
            $this->btnSearch = new QButton($this);
            $this->btnSearch ->ButtonMode = QButtonMode::Success;
            $this->btnSearch->Text = "Search";
            $this->btnSearch ->AddAction(new QClickEvent(), new QServerAction("btnSearch_Click"));
            
            if(isset($_GET['dept'])){
                $this->lstDept->SelectedValue = $_GET['dept'];
               
                $times = ProgramHasTimeslot::QueryArray(
                                            QQ::AndCondition(
                                                QQ::Equal(QQN::ProgramHasTimeslot()->Role, $_GET['dept'])
                                            ));
                if($times){
                    foreach($times as $time){
                        $this->txtseq1[$time->IdprogramHasTimeslot] = new QTextBox($this);
                        $this->txtseq1[$time->IdprogramHasTimeslot]->Width = 50; 
                        $this->txtseq1[$time->IdprogramHasTimeslot]->Placeholder = 'Seq';                    
                        $this->txtseq1[$time->IdprogramHasTimeslot]->AddAction(new QFocusOutEvent(), new QServerAction('txtseq1_Enter'));
                        $this->txtseq1[$time->IdprogramHasTimeslot]->ActionParameter = $time->IdprogramHasTimeslot;
                        $this->txtseq1[$time->IdprogramHasTimeslot]->Text = $time->Seq;

                        $this->lbldel[$time->IdprogramHasTimeslot] = new QLabel($this);
                        $this->lbldel[$time->IdprogramHasTimeslot]->HtmlEntities = FALSE;
                        $this->lbldel[$time->IdprogramHasTimeslot]->Text = "<i class='fa fa-trash fw'></i>";
                        $this->lbldel[$time->IdprogramHasTimeslot]->AddAction(new QClickEvent(), new QServerAction( "lbldel_Click"));
                        $this->lbldel[$time->IdprogramHasTimeslot]->ActionParameter = $time->IdprogramHasTimeslot;
                        $this->lbldel[$time->IdprogramHasTimeslot]->ToolTip = QApplication::Translate('Delete Topic');
                    }
                }
            }
        }
        
       
        
        public function txtseq1_Enter($strFormId, $strControlId, $strParameter){
            $time = ProgramHasTimeslot::LoadByIdprogramHasTimeslot($strParameter);
            if($this->txtseq1[$strParameter]->Text != ''){
                $time->Seq = $this->txtseq1[$strParameter]->Text;
            }
            $time->Save();
        }
        
        //save for program time
        protected function btnSave_Click($strFormId, $strControlId, $strParameter) {
            if($this->lstDept->SelectedValue != NULL && $this->lstPeriod1->SelectedValue !=NULL){
                $time = new ProgramHasTimeslot();
                $time->Seq = $this->txtseq->Text;
                $time->Role = $this->lstDept->SelectedValue;
                $time->TimeSlot = $this->lstPeriod1->SelectedValue;
                $time->Save();
                QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/timetable/programtimeslot_edit.php?prog='.$this->lstDept->SelectedValue.'&dept='.$this->lstDept->SelectedValue);
            }
        }
        
        protected function lbldel_Click($strFormId, $strControlId, $strParameter) {
            $time = ProgramHasTimeslot::LoadByIdprogramHasTimeslot($strParameter);
            $time->Delete();
        }
       
        protected function btnSearch_Click($strFormId, $strControlId, $strParameter) {
            if($this->lstDept->SelectedValue != NULL ){
               QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/timetable/programtimeslot_edit.php?dept='.$this->lstDept->SelectedValue);
            }
        }
    }
    
 TimeSlotEditForm::Run('TimeSlotEditForm');
?>