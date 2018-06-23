<?php
    require('../../qcubed.inc.php');
    require(__FORMBASE_CLASSES__ . '/StockGrpEditFormBase.class.php');
    class StockGrpEditForm extends StockGrpEditFormBase {
            protected $btnList;
            protected function Form_Run() {
                    parent::Form_Run();
                    QApplication::CheckRemoteAdmin();
            }
            protected function Form_Create() {
                parent::Form_Create();
                
                $this->lstParrentObject->Name = "Under";
                $this->btnSave->ButtonMode = QButtonMode::Save;
                $this->btnCancel->ButtonMode = QButtonMode::Cancel;
                $this->btnDelete->ButtonMode = QButtonMode::Delete;
                
                $this->btnList = new QButton($this);
                $this->btnList->ButtonMode = QButtonMode::listall;
                $this->btnList->AddAction(new QClickEvent(), new QAjaxAction("btnList_Click"));   
            }
            
            public function btnList_Click($strFormId, $strControlId, $strParameter) {
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/stock_grp_list.php');
            }
            protected function btnSave_Click($strFormId, $strControlId, $strParameter) {
			$this->mctStockGrp->SaveStockGrp();
			$this->RedirectToListPage();
            }

            protected function btnDelete_Click($strFormId, $strControlId, $strParameter) {
                    $this->mctStockGrp->DeleteStockGrp();
                    $this->RedirectToListPage();
            }

            protected function btnCancel_Click($strFormId, $strControlId, $strParameter) {
                    $this->RedirectToListPage();
            }
            protected function RedirectToListPage() {
                    QApplication::Redirect(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__ . '/settings/stock_grp_list.php');
            }
    }
    StockGrpEditForm::Run('StockGrpEditForm');
?>