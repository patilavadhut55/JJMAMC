<?php 

  require('../../../qcubed.inc.php');
    
  class Documents extends QForm {
            protected $calfrom;
            protected $calto;
            Protected $Srchbtn;
            protected $lstDept;
            protected $txtDept;
            protected $chkAll;

            protected function Form_Run() {
	           parent::Form_Run();
                   QApplication::CheckRemoteAdmin();
		 }
            protected function Form_Create() {
                parent::Form_Create();
                $this->chkAll = new QCheckBox($this);
                $this->chkAll->AddAction(new QClickEvent(), new QAjaxAction('chkAll_click'));
                if(isset($_GET['all'])) $this->chkAll->Checked = 1;

                $this->lstDept =  new QListBox($this);
                $this->lstDept->AddItem("Select Department");
                $this->lstDept->Width = 250;
                $refs = Role::QueryArray(
                        QQ::OrCondition(
                        QQ::Equal(QQN::Role()->Grp, 2),
                        QQ::Equal(QQN::Role()->Grp, 5)           
                            //QQ::NotLike(QQN::LoginHasRole()->RoleIdroleObject->Name, '%Student%'),
                          //  QQ::NotLike(QQN::LoginHasRole()->RoleIdroleObject->Name, '%Dx%')
                    ));
                    foreach ($refs as $ref){
                        $this->lstDept->AddItem($ref->Name,$ref->Idrole);
                    }
                if(isset($_GET['dept'])){
                    $this->lstDept->SelectedValue = $_GET['dept'];
                }
                    
              //   $this->txtDept = new QJavaScriptAutoCompleteTextBox($this, $this->arrdept);
              //   $this->txtDept->Width = 300;

                $this->calfrom = new QCalendar($this);
                $this->calto = new QCalendar($this);

                $this->calfrom->Name = 'From';
                $this->calto->Name = 'To';

                $this->calto->Width = 280;
                $this->calfrom->Width = 280 ;

                //Button Search
                $this->Srchbtn = new QButton($this);
                $this->Srchbtn->ButtonMode = QButtonMode::Success;
                $this->Srchbtn->Text = 'Search';

                if(isset($_GET['from'])) $this->calfrom->Text = Date('F d Y', strtotime($_GET['from']));
                    if(isset($_GET['to'])) $this->calto->Text = Date('F d Y', strtotime($_GET['to']));
                 //  $this->calToDate->Required = TRUE;
                   
                    //$this->calfrom->Text = Date('Ymd', strtotime($_GET['from']));
                   // $this->calto->Text = Date('Ymd', strtotime($_GET['to']));
              
                  //  if(isset($_GET['dept'])){
                       // $dept = Role::LoadByIdrole($_GET['dept']);
                     //   $this->lstDept->SelectedValue = $dept->Name;
                 //   }
                $this->Srchbtn->AddAction(new QClickEvent(), new QServerAction('Srchbtn_Click'));
            }

            protected function chkAll_click(){
                QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/store/report/departmental_stock_report.php?all=1');
            }

            protected function Srchbtn_Click(){
                //$from = date('Ymd',  strtotime($this->calfrom->DateTime));
               // $to = date('Ymd',  strtotime($this->calto->DateTime));
               // if((isset($_GET['from'])) && (isset($_GET['to']))){
                 //   if($from < $to){
             //$dept = array_search($this->txtDept->Text, $this->lstDept->SelectedValue);
                if($this->lstDept->SelectedValue && $this->calfrom->Text != "" && $this->calto->Text != "")
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/store/report/departmental_stock_report.php?dept='.$this->lstDept->SelectedValue.'&from='.$this->calfrom->DateTime.'&to='.$this->calto->DateTime);
                elseif(!$this->lstDept->SelectedValue && $this->calfrom->Text != "" && $this->calto->Text != "")
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/store/report/departmental_stock_report.php?from='.$this->calfrom->DateTime.'&to='.$this->calto->DateTime);
                   //    }else {
                  //      QApplication::DisplayAlert('Invalid Date');
                //    }
               // }     
                elseif($this->lstDept->SelectedValue && $this->calfrom->Text == "" && $this->calto->Text == "")
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/store/report/departmental_stock_report.php?dept='.$this->lstDept->SelectedValue);
                   
                        //elseif($this->lstDept->SelectedValue != "" && $this->calfrom->Text != "" && $this->calto->Text != "")
                          //  QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/store/report/departmental_stock_report.php?dept='.$this->lstDept->SelectedValue.'&from='.$this->calfrom->DateTime.'&to='.$this->calto->DateTime);
            }          
        }
   
   Documents::Run('Documents');
?>

