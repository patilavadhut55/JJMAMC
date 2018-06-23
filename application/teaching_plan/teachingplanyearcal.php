<?php
	require('../../qcubed.inc.php');
    class YearCalForm extends QForm { 
        protected $lstAcade;
        protected $lblFromYear;
        protected $lblToYear;
        protected $lblFrom;
        protected $lblTo;
        protected $fmon;
        protected $tmon;
        protected $calFrom;
        protected $calTo;
        protected $lstStatus;
        
        protected function Form_Run() {
            parent::Form_Run();
            QApplication::CheckRemoteAdmin();
        }
        
        protected function Form_Create() {
            parent::Form_Create();
            $this->lstAcade = new QListBox($this);
              //$acads = AcademicYear::LoadAll();
            $acads = CalenderYear::LoadAll(
                    QQ::OrderBy(
                            QQN::CalenderYear()->From, FALSE));
            $this->lstAcade->AddItem("Academic Year", NULL);
            foreach ($acads as $acad){
                $this->lstAcade->AddItem($acad->Name,$acad->IdcalenderYear);
            }
            $this->lblFromYear = new QLabel($this);
            $this->lblToYear = new QLabel($this);
            $this->lblFrom = new QLabel($this);
            $this->lblTo = new QLabel($this);
            $this->fmon = new QLabel($this);
            $this->tmon = new QLabel($this);
            
            $this->calFrom = new QCalendar($this);
            $this->calFrom->Name = "From";
            $this->calFrom->DateTimeFormat = 'dd/mm/yy';
            //$this->calFrom->AddAction(new QChangeEvent(), new QAjaxAction('calFrom_Change'));
                    
            $this->calTo = new QCalendar($this);
            $this->calTo->Name = "To";
            $this->calTo->DateTimeFormat = 'dd/mm/yy';
            $this->calFrom->Width = $this->calTo->Width = 100;
            $this->calTo->AddAction(new QChangeEvent(), new QAjaxAction('calFrom_Change'));
            
            if(isset($_GET['from'])&&isset($_GET['to'])){
                $this->calFrom->Text = date('d/m/Y',strtotime($_GET['from']));    
                $this->calTo->Text = date('d/m/Y',strtotime($_GET['to']));
            }
            
            if(isset($_GET['yearid'])){
                $acads = CalenderYear::LoadByIdcalenderYear($_GET['yearid']);
                $this->lblFromYear->Text = date('Y', strtotime($acads->From));
                $this->lblToYear->Text = date('Y', strtotime($acads->To));
                $this->lblFrom->Text = date('d M Y', strtotime($acads->From));
                $this->lblTo->Text = date('d M Y', strtotime($acads->To));
                $this->fmon->Text = date('m', strtotime($acads->From));
                $this->tmon->Text = date('m', strtotime($acads->To));
                
                $this->lstAcade->SelectedValue = $_GET['yearid'];
            }else{
                $year = 4;
                $acads = CalenderYear::LoadAll();
                if($acads){
                    foreach ($acads as $acad){
                        if(date("Ymd",  strtotime($acad->From))<= date("Ymd") && date("Ymd",  strtotime($acad->To)) >= date("Ymd")){
                            $year = $acad->IdcalenderYear;
                            break;
                        }
                    }
                }
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/teaching_plan/teachingplanyearcal.php?yearid='.$year);
            }
            $this->lstAcade->AddAction(new QChangeEvent(), new QAjaxAction('lstAcade_Change'));            
            $this->lstStatus = new QListBox($this);
            $this->lstStatus->Name = "Status";
            $this->lstStatus->AddItem("-Select-",NULL);
            $this->lstStatus->AddItem("Completed",1);
            $this->lstStatus->AddItem("Incompleted",0);
            $this->lstStatus->AddItem("Postponed",2);
            $this->lstStatus->AddAction(new QChangeEvent(), new QServerAction("lstStatus_Change"));
            if(isset($_GET['status'])){
                if($_GET['status'] != NULL){
                    $this->lstStatus->SelectedValue = $_GET['status'];
                }
            }
        }
        
        protected function lstStatus_Change(){
            if(isset($_GET['agenda'])){
                if($_GET['agenda'] == 2){
                    $param = "";
                    if(isset($_GET['subagenda'])){
                        $param = '&subagenda='.$_GET['subagenda'];
                    }
                    if(isset($_GET['staff'])){
                        $param = '&staff='.$_GET['staff'];
                    }
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/calender/yearcal.php?yearid='.$_GET['yearid'].'&agenda=2&from='.$_GET['from'].'&to='.$_GET['to'].'&month='.$_GET['month'].'&course='.$_GET['course'].'&yearsubid='.$_GET['yearsubid'].$param.'&status='.$this->lstStatus->SelectedValue);
                }
            }
        }

        protected function calFrom_Change(){
            if($this->calFrom->Text != "" && $this->calTo->Text != ""){
                if(isset($_GET['course'])&&isset( $_GET['yearsubid'])){
                    if(isset($_GET['month'])){
                        $param = "";
                        if(isset($_GET['staff'])){
                            $param = "&staff=".$_GET['staff'];
                        }
                        if(isset($_GET['subagenda'])){
                            if($param == ""){
                                $param = "&subagenda=".$_GET['subagenda'];
                            }else{
                                $param = $param."&subagenda=".$_GET['subagenda'];
                            }
                        }
                        $fapdate = explode("/", $this->calFrom->Text);
                        $tapdate = explode("/", $this->calTo->Text);
                        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/calender/yearcal.php?yearid='.$_GET['yearid'].'&agenda=2&from='.(QDateTime::FromTimestamp(strtotime($fapdate[2].$fapdate[1].$fapdate[0]))).'&to='.(QDateTime::FromTimestamp(strtotime($tapdate[2].$tapdate[1].$tapdate[0]))).'&month='.$_GET['month'].'&course='.$_GET['course'].'&yearsubid='.$_GET['yearsubid'].$param);
                    }             
                }else{
                    $fapdate = explode("/", $this->calFrom->Text);
                    $tapdate = explode("/", $this->calTo->Text);
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/calender/yearcal.php?yearid='.$_GET['yearid'].'&agenda=1&from='.(QDateTime::FromTimestamp(strtotime($fapdate[2].$fapdate[1].$fapdate[0]))).'&to='.(QDateTime::FromTimestamp(strtotime($tapdate[2].$tapdate[1].$tapdate[0]))));
                }
            }
        }

        protected function lstAcade_Change(){
            if($this->lstAcade->SelectedValue != NULL){
                if(isset($_GET['course'])&&isset( $_GET['yearsubid'])){
                    $param = "";
                    if(isset($_GET['year'])){
                        if($param == ""){
                            $param = "&year=".$_GET['year'];
                        }else{
                            $param = $param."&year=".$_GET['year'];   
                        }
                    }

                    if(isset($_GET['staff'])){ 
                        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/calender/yearcal.php?yearid='.$this->lstAcade->SelectedValue.'&course='.$_GET['course'].'&yearsubid='.$_GET['yearsubid'].'&staff='.$_GET['staff'].$param);
                    }else if(isset($_GET['subagenda'])){ 
                        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/calender/yearcal.php?yearid='.$this->lstAcade->SelectedValue.'&course='.$_GET['course'].'&yearsubid='.$_GET['yearsubid'].'&subagenda='.$_GET['subagenda'].$param);
                    }else{
                        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/calender/yearcal.php?yearid='.$this->lstAcade->SelectedValue.'&course='.$_GET['course'].'&yearsubid='.$_GET['yearsubid'].$param);
                    }                
                }else{
                    $param = "";
                    if(isset($_GET['month'])){
                        if($param == ""){
                            $param = "&month=".$_GET['month'];
                        }else{
                            $param = $param."&month=".$_GET['month'];
                        }
                    }

                    if(isset($_GET['staffatten'])){
                        if($param == ""){
                            $param = "&staffatten=".$_GET['staffatten'];
                        }else{
                            $param = $param."&staffatten=".$_GET['staffatten'];   
                        }
                    }

                    if(isset($_GET['year'])){
                        if($param == ""){
                            $param = "&year=".$_GET['year'];
                        }else{
                            $param = $param."&year=".$_GET['year'];   
                        }
                    }
                    
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/calender/yearcal.php?yearid='.$this->lstAcade->SelectedValue.$param);
                }
            }
        }
        
        protected function RedirectToListPage() {
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/calender/yearcal.php');
        }
        
    }
    YearCalForm::Run('YearCalForm');
?>