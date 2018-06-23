<?php
    require('../../qcubed.inc.php');

    require(__FORMBASE_CLASSES__ . '/PlaceEditFormBase.class.php');

    class PlaceEditForm extends PlaceEditFormBase {
            protected $btnList;
            //group
            protected $btnAdd;
            protected $txtGroup;
            protected $lbldels;
            protected function Form_Run() {
                parent::Form_Run();
        QApplication::CheckRemoteAdmin();
        }
        protected function Form_Create() {
            parent::Form_Create();
            
            $this->lstGrpObject->Name = 'Group';
            $this->lstParrentObject->Name = 'Under';
            
            $this->btnSave->ButtonMode = QButtonMode::Save;
            $this->btnCancel->ButtonMode = QButtonMode::Cancel;
            $this->btnDelete->ButtonMode = QButtonMode::Delete;
            
            $this->btnList = new QButton($this);
            $this->btnList->ButtonMode = QButtonMode::listall;
            $this->btnList->AddAction(new QClickEvent(), new QServerAction("btnList_Click"));
            
            //group
             $grps = PlaceGrp::LoadAll();
                foreach ($grps as $grp){
                  $this->lbldels[$grp->IdplaceGrp] = new QButton($this);
                  $this->lbldels[$grp->IdplaceGrp]->ButtonMode = QButtonMode::Remove;

                  $this->lbldels[$grp->IdplaceGrp]->AddAction(new QClickEvent(), new QServerAction("lbldels_Click"));
                  $this->lbldels[$grp->IdplaceGrp]->ActionParameter = $grp->IdplaceGrp;
                }
            $this->txtGroup = new QTextBox($this);
            $this->txtGroup->Name = "Group";
            
            $this->btnAdd = new QButton($this);
            $this->btnAdd->ButtonMode = QButtonMode::Add;
            $this->btnAdd->AddAction(new QClickEvent(), new QServerAction("btnAdd_Click"));
                 
        }
        protected function btnSave_Click($strFormId, $strControlId, $strParameter) {
                $this->mctPlace->SavePlace();
                $this->RedirectToListPage();
        }
        protected function btnDelete_Click($strFormId, $strControlId, $strParameter) {
                $this->mctPlace->DeletePlace();
                $this->RedirectToListPage();
        }
        protected function btnAdd_Click($strFormId, $strControlId, $strParameter) {
                $grp = PlaceGrp::LoadByIdplaceGrp($strParameter);
                $grp = new PlaceGrp();
                $grp->Name = $this->txtGroup->Text;
                $grp->Save();
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/place_edit.php');
        }
        protected function lbldels_Click($strFormId, $strControlId, $strParameter) {
               $grp = PlaceGrp::LoadByIdplaceGrp($strParameter);
               $grp->Delete();
               QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/place_edit.php');
        }
        protected function btnCancel_Click($strFormId, $strControlId, $strParameter) {
                $this->RedirectToListPage();
        }
        protected function RedirectToListPage() {
                QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/place_list.php');
        }
        public function btnList_Click($strFormId, $strControlId, $strParameter) {
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/place_list.php');
        }
    }
    
    PlaceEditForm::Run('PlaceEditForm');
?>