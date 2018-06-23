<?php

require('../../qcubed.inc.php');

require(__FORMBASE_CLASSES__ . '/EventEditFormBase.class.php');

class EventEditForm extends EventEditFormBase {

    protected $txtcode;
    protected $txtnote;
    protected $txtname;
    protected $lsteventcat;
    protected $calfrom;
    protected $calto;
    protected $btnCancel;
    protected $btnSave;

    protected function Form_Run() {
        parent::Form_Run();

        QApplication::CheckRemoteAdmin();
    }

    protected function Form_Create() {
        parent::Form_Create();

        $this->txtcode = new QTextBox($this);
        $this->txtcode->Width = 50;
        $this->txtcode->Name = "Code";
        $code = Settings::LoadByName("Event");
        $this->txtcode->Text = 'E-' . $code->Option;

        $this->txtnote = new QTextBox($this);
        $this->txtnote->Width = 100;
        $this->txtnote->Name = "Note";

        $this->txtname = new QTextBox($this);
        $this->txtname->Width = 240;
        $this->txtname->Name = "Name";

        $this->lsteventcat = new QListBox($this);
        $this->lsteventcat->Width = 240;
        $this->lsteventcat->Name = "Event Category";
        $this->lsteventcat->AddItem('-Select Category-');
        $events = EventCat::LoadAll();
        foreach ($events as $event) {
            $this->lsteventcat->AddItem($event->Name,$event->IdeventCat);
        }
        $this->lsteventcat->AddAction(new QChangeEvent(), new QAjaxAction('lsteventcat_Change'));


        $this->calfrom = new QDateTimePicker($this);
        $this->calfrom->DateTimePickerType = QDateTimePickerType:: Date;
        $this->calfrom->Name = "From Date";
        $this->calfrom->Width = 80;
      if(isset($_GET['from']))
        $this->calfrom->DateTime = QDateTime::FromTimestamp(strtotime($_GET['from']));
        

        $this->calto = new QDateTimePicker($this);
        $this->calto->DateTimePickerType = QDateTimePickerType::Date;
        $this->calto->Name = "To Date";
        $this->calto->Width = 80;
         if(isset($_GET['to']))
        $this->calto->DateTime = QDateTime::FromTimestamp(strtotime($_GET['to']));
        

        
        $this->txtnote = new QTextBox($this);
        $this->txtnote->Width = 240;
        $this->txtnote->Height = 80;
        $this->txtnote->Name = "Note";
        $this->txtnote->TextMode = QTextMode::MultiLine;

        $this->btnSave = new QButton($this);
        $this->btnSave->Text = "Save ";
        $this->btnSave->ButtonMode = QButtonMode::Success;
        $this->btnSave->AddAction(new QClickEvent(), new QServerAction('btnSave_Click'));

        $this->btnCancel = new QButton($this);
        $this->btnCancel->Text = "Cancel ";
        $this->btnCancel->ButtonMode = QButtonMode::Danger;
        $this->btnCancel->AddAction(new QClickEvent(), new QServerAction('btnCancel_Click'));
    
       if(isset($_GET['event']))
        {
            $event = Event::LoadByIdevent($_GET['event']);
             $this->txtname->Text = $event->Name;
              $this->txtnote->Text = $event->Note;
              $this->lsteventcat->SelectedValue =  $event->EventCat;
              $this->calfrom->DateTime =  $event->Fromdate;
              $this->calto->DateTime =  $event->Todate;
        }
        
        }

    protected function btnSave_Click() {
        if (isset($_GET['yearid'])&&isset($_GET['from'])&&isset($_GET['year'])&&isset($_GET['event'])) {
            $event = Event::LoadByIdevent($_GET['event']);
        } else {
            $event = new Event();
            $code = Settings::LoadByName("Event");
            $event->Code = $this->txtcode->Text;
            $code->Option = $code->Option + 1;
            $code->Save();
        }

        $event->EventCat = $this->lsteventcat->SelectedValue;
        $event->Name = $this->txtname->Text;
        $event->Fromdate = QDateTime::FromTimestamp(strtotime($this->calfrom->DateTime));
        $event->Todate = QDateTime::FromTimestamp(strtotime($this->calto->DateTime));
        $event->ArragedBy = $_SESSION['login'];
        $event->Note = $this->txtnote->Text;
        $event->Save();
        $month = date("m",  strtotime($_GET['from']));
        
        QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/calender/yearcal.php?yearid='.$_GET['yearid'].'&from='.$_GET['from'].'&year='.$_GET['year'].'&month='.$month);
    }

    protected function lsteventcat_Change() {
        $this->txtname->Text = $this->lsteventcat->SelectedName;
    }

    protected function btnCancel_Click() {

         QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/calender/yearcal.php');
    }

}

EventEditForm::Run('EventEditForm');
?>