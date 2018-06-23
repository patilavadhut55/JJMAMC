<?php

require('../../../qcubed.inc.php');

class Documents extends QForm {

    protected $lstdept;
    protected $calfrom;
    protected $calto;
    Protected $btnSearch;

    protected function Form_Run() {
        parent::Form_Run();
        QApplication::CheckRemoteAdmin();
    }

    protected function Form_Create() {
        parent::Form_Create();
        
        $this->lstdept = new QSelect2ListBox($this);
        $this->lstdept->AddItem('-Select One Department-',NULL);
        $depts = Role::LoadArrayByGrp(2);
        foreach ($depts as $dept){
            $this->lstdept->AddItem(delete_all_between('[', ']', $dept->Name),$dept->Idrole);
        }
        $this->lstdept->Width = 250;
        
        $this->calfrom = new QCalendar($this);
        $this->calfrom->Width = 150;
        
        $this->calto = new QCalendar($this);
        $this->calto->Width = 150;

        
        //Button Search
        $this->btnSearch = new QButton($this);
        $this->btnSearch->Text = '<i class="fa fa-search"></i> Search';
        $this->btnSearch->ButtonMode = QButtonMode::Success;
        $this->btnSearch->AddAction(new QClickEvent(), new QServerAction('btnSearch_Click'));

        if (isset($_GET['from'])) {
            $this->calfrom->Text = Date('M d Y', strtotime($_GET['from']));
            $this->calto->Text = Date('M d Y', strtotime($_GET['to']));
            $this->lstdept->SelectedValue = $_GET['dept'];
        }
    }

    protected function btnSearch_Click(){
        if($this->lstdept->SelectedValue != NULL && $this->calfrom->Text != '' && $this->calto->Text != ''){
            QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/store/report/dept_stock_reg.php?dept='.$this->lstdept->SelectedValue .'&from='.date('Ymd',  strtotime($this->calfrom->DateTime)) . '&to=' . date('Ymd', strtotime($this->calto->DateTime)));
        }
    }

}

Documents::Run('Documents');
?>

