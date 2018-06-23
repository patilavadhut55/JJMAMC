<?php
require('../../qcubed.inc.php');

class InwardOutward extends QForm {
    protected $txtCode;
    protected $calDate;
    protected $txtCode1;
    protected $calDate1;
    protected $arrTo;
    protected $txtTo;
    protected $txtTodept;
    protected $txtFromDept;
    protected $txtAsset;
    protected $txtQty;
    protected $txtLocation;
    protected $txtNarration;
    protected $lstCat;
    protected $lstPO;
    protected $chkLock;
    protected $txtDept;
    protected $caltransDate;
    protected $calfromdate;
    protected $arrDept;
    protected $txtprocode;

    //array controls
    //inward controls
    protected $txtInwardqty;
    protected $btnBarcode;
    protected $btnAdd;
    protected $lbldel;
    
    
    //declaring button
    protected $btnSave;
    protected $btnCancel;
    protected $btnDelete;
    protected $btnProductAdd;
    protected $btnSearch;
    //departmental circulation controls
    protected $lbldelete;
    protected $lbldelete1;


    protected function Form_Run() {
			parent::Form_Run();
                        QApplication::CheckRemoteAdmin();
		}
            protected function Form_Create() {
                    parent::Form_Create();
                          
                    $this->txtDept = new QAjaxAutoCompleteTextBox($this,'dept_change');
                    $this->txtDept->Name = "Department";
                    $this->txtDept->Width = 300;
                    
                    
                    $this->calfromdate = new QCalendar($this);
                    $this->calfromdate->Name = "Date";
                    $this->calfromdate->Width =100;
                   
                    $this->btnSearch = new QButton($this);
                    $this->btnSearch->Text = 'Search';
                    $this->btnSearch->ButtonMode = QButtonMode::Success;
                    $this->btnSearch->AddAction(new QClickEvent(), new QServerAction('btnSearch_Click'));
                    
                  
                    if( isset($_GET['Dept'])&&isset($_GET['date'])){
                        $dept1 = Role::LoadByIdrole($_GET['Dept']);
                        if($dept1){                            
                          $this->txtDept->Text = delete_all_between('[',']' ,$dept1->ParrentObject).' '.delete_all_between('[',']' ,$dept1->Name).'-'.$dept1->Idrole;
                          $this->calfromdate->Text = date('M d Y',  strtotime($_GET['date']));
                          
                        }
                    }
                                         
            }
        public function dept_change($strParameter){
       $dept =  Role::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::Role()->Grp,5),
                                QQ::Like(QQN::Role()->Name, '%'. $strParameter.'%'))
                            );
            $result = array();
            foreach($dept as $depts){
                $result[] = delete_all_between('[',']' ,$depts->ParrentObject).' '.delete_all_between('[',']' ,$depts->Name).'-'.$depts->Idrole;
            }
            return $result;
     }
     protected function btnSearch_Click(){
        if($this->txtDept->Text != ""){ 
            //$dept = DeptTransfer::LoadArrayByItem($_GET['IdItem']);
          //  foreach ($dept as $depts){}
            $data = explode("-", $this->txtDept->Text);
            if(isset($data[1])){
                $dept = Role::LoadByIdrole($data[1]);
                if($dept)
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/store/view_outward.php?&Dept='.$dept->Idrole.'&date='.date('Ymd',strtotime($this->calfromdate->Text)));
                else
                    QApplication::DisplayAlert ("Invalid Department");
             
            }
        }
  }
}
    InwardOutward::Run('InwardOutward');    
?>        