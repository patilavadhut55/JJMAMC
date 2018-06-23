<?php
	require('../../qcubed.inc.php');

	class UniversityReservationEditForm extends QForm {
            protected $txtName;
            protected $btnSave;
            protected $btnCancel;
            protected $btnDelete;
            protected $dtgUniversityReservations;

            protected $currentId;
            protected $editMode;
            
            protected function Form_Run() {
                    parent::Form_Run();

                    QApplication::CheckRemoteAdmin();
            }

            protected function Form_Create() {
                parent::Form_Create();
                
                $this->txtName = new QTextBox($this);
                $this->txtName->Name = "Name";
                $this->txtName->Required = True;
                
                $this->btnSave=new QButton($this);
                $this->btnSave->ButtonMode = QButtonMode::Save;
                $this->btnSave->CausesValidation = TRUE;
                $this->btnSave->AddAction(new QClickEvent(),new QServerAction('btnSave_click'));

                $this->btnCancel=new QButton($this);
                $this->btnCancel->ButtonMode = QButtonMode::Cancel;
                $this->btnCancel->AddAction(new QClickEvent(),new QServerAction('btnCancel_click'));

                $this->btnDelete=new QButton($this);
                $this->btnDelete->ButtonMode = QButtonMode::Delete;
                $this->btnDelete->AddAction(new QClickEvent(), new QConfirmAction(sprintf(QApplication::Translate('Are you SURE you want to DELETE this %s?'), QApplication::Translate('Block Details'))));
                $this->btnDelete->AddAction(new QClickEvent(),new QServerAction('btnDelete_click'));
                $this->btnDelete->Display = FALSE;
                
                //datagrid
                $this->dtgUniversityReservations = new QDataGrid($this);
                $this->dtgUniversityReservations->CssClass = "datagrid";

                $this->dtgUniversityReservations->ShowFilter = TRUE;

                $this->dtgUniversityReservations->Paginator = new QPaginator($this->dtgUniversityReservations);
                $this->dtgUniversityReservations->ItemsPerPage = 10;
                $this->dtgUniversityReservations->SetDataBinder('dtgUniversityReservations_Bind');

                $this->dtgUniversityReservations->RowActionParameterHtml='<?= $_ITEM->IduniversityReservation ?>';
                $this->dtgUniversityReservations->AddRowAction(new QClickEvent(), new QServerAction('dtgUniversityReservationsRow_Click'));

                $this->dtgUniversityReservations->AddColumn(new QDataGridColumn('Sr', '<?= ($_CONTROL->CurrentRowIndex + 1) ?>', 'Width=3'));

                $this->dtgUniversityReservations->AddColumn(new QDataGridColumn('Name ',  '<?= $_ITEM->Name ?>', 'Width=100'));

                $this->currentId = 0;
                $this->editMode = FALSE;
            }
            
            protected function btnSave_click(){
                if($this->editMode == FALSE){
                    $unires = new UniversityReservation();
                    $unires->Name = $this->txtName->Text;
                    $unires->Save();
                }elseif ($this->editMode == TRUE && $this->currentId != 0) {
                    $unires = UniversityReservation::LoadByIduniversityReservation($this->currentId);
                    $unires->Name = $this->txtName->Text;
                    $unires->Save();
                }
                $this->pageClearAll();
            }
            
            protected function btnCancel_click(){
                $this->txtName->Text = "";
                $this->currentId = 0;
                $this->editMode = FALSE;
               $this->btnDelete->Visible = FALSE;
            }
            
            protected function btnDelete_click(){
                if($this->currentId != 0){
                    $unires = UniversityReservation::LoadByIduniversityReservation($this->currentId);
                    $unires->Delete();
                    $this->txtName->Text = "";
                }else{
                    QApplication::DisplayAlert("No Such University Reservation Exists");
                }
               $this->btnDelete->Display = FALSE;
                $this->pageClearAll();
            }
            
            protected function dtgUniversityReservations_Bind(){
                $this->dtgUniversityReservations->TotalItemCount = UniversityReservation::QueryCount(
                        QQ::AndCondition(                                    
                                $this->dtgUniversityReservations->Conditions
                                ));
                $data = UniversityReservation::QueryArray(
                            QQ::AndCondition(
                                $this->dtgUniversityReservations->Conditions
                                ),
                QQ::Clause(
                        QQ::OrderBy(QQN::UniversityReservation()->IduniversityReservation, TRUE),
                        $this->dtgUniversityReservations->LimitClause
                ));

                $this->dtgUniversityReservations->DataSource = $data;
            }
            
            protected function dtgUniversityReservationsRow_Click($strFormId,$strControlId,$strParameter) {
                $this->btnDelete->Display = TRUE;
                $this->editMode = TRUE;

                if(isset($strParameter)){
                   $unires = UniversityReservation::LoadByIduniversityReservation($strParameter);
                   if($unires) {
                       $this->txtName->Text = $unires->Name;
                       $this->currentId = $unires->IduniversityReservation;
                   }
                }
            }
            protected function pageClearAll() {
                $this->txtName->Text = "";
                $this->currentId = 0;
                $this->editMode = FALSE;
                $this->btnDelete->Display = FALSE;
            }
	}
	UniversityReservationEditForm::Run('UniversityReservationEditForm');
?>