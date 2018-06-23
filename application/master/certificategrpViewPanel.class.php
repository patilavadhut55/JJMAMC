<?php
	class CertificategrpViewPanel extends QPanel {
            public $dtgCertificate;

            // The Local Project object which this panel represents
            protected $objCertificate;
            protected $strPanelLeftControlId;
            protected $strPanelRightControlId;
            // Specify the Template File for this custom QPanel
            protected $strTemplate = 'certificategrpViewPanel.tpl.php';

            public function __construct($objParentObject, $objCertificate, $strPanelRightControlId, $strControlId = null) {
			// Call the Parent
                    try {
                            parent::__construct($objParentObject, $strControlId);
                    } catch (QCallerException $objExc) {
                            $objExc->IncrementOffset();
                            throw $objExc;
                    }
                     // Next, we set the local project object
                $this->objCertificate= $objCertificate;


                $this->strPanelLeftControlId = $objParentObject;
                $this->strPanelRightControlId = $strPanelRightControlId;

                $this->dtgCertificate= new QDataGrid($this);
                $this->dtgCertificate->CssClass = "datagrid";
                $this->dtgCertificate->ShowFilter = TRUE;
                $this->dtgCertificate->Paginator = new QPaginator($this->dtgCertificate);
                $this->dtgCertificate->ItemsPerPage = 8;

                $this->dtgCertificate->AddColumn(new QDataGridColumn('', '<?= $_CONTROL->ParentControl->EditColumn_Render($_ITEM) ?>', 'HtmlEntities=false', 'Width=20px'));

                $this->dtgCertificate->AddColumn(new QDataGridColumn('Code','<?= $_ITEM->Code?>'));
                $Name = new QDataGridColumn('Name', '<?= $_ITEM->Name ?>', 
                                    array(
                                            'OrderByClause' => QQ::OrderBy(QQN::CertificateGroup()->Name),
                                            'ReverseOrderByClause' => QQ::OrderBy(QQN::CertificateGroup()->Name, false)));

                $Name->Filter = QQ::Like(QQN::CertificateGroup()->Name, null);
                $Name->FilterPostfix  = '%';
                $Name->FilterType = QFilterType::TextFilter;
                $this->dtgCertificate->AddColumn($Name);

                // Let's make sorting Ajax-ified
                $this->dtgCertificate->UseAjax = true;

                $this->dtgCertificate->SetDataBinder('dtgCertificate_Bind', $this);

            }
            public function dtgCertificate_Bind() {
                $Certificates = CertificateGroup::QueryArray(
                        QQ::AndCondition(
                               $this->dtgCertificate->Conditions
                                ),
                        QQ::Clause(
                                $this->dtgCertificate->OrderByClause,
                                $this->dtgCertificate->LimitClause
                        ));
                $this->dtgCertificate->DataSource = $Certificates;

                $Count = CertificateGroup::QueryCount(
                    QQ::AndCondition(
                           $this->dtgCertificate->Conditions
                            ), QQ::OrderBy(QQN::CertificateGroup()->Name)
                    );
                $this->dtgCertificate->TotalItemCount = $Count;
            }

                // DataGrid Render Handlers Below
            public function EditColumn_Render(CertificateGroup $objCertificate) {
                    // Let's specify a specific Control ID for our button, using the datagrid's CurrentRowIndex
                $strControlId = 'btnEditCertificate' . $this->dtgCertificate->CurrentRowIndex;

                $btnEdit = $this->objForm->GetControl($strControlId);
                if (!$btnEdit) {
                    // Only create/instantiate a new Edit button for this Row if it doesn't yet exist
                    $btnEdit = new QLabel($this->dtgCertificate, $strControlId);
                    $btnEdit->Text = '<i class="fa fa-pencil fa-lg"></i>';
                    $btnEdit->HtmlEntities = FALSE;

                    $btnEdit->AddAction(new QClickEvent(), new QAjaxControlAction($this, 'btnEditCertificate_Click'));
                }

                // Finally, update the Actionparameter for our button to store the $objPerson's ID.
                $btnEdit->ActionParameter = $objCertificate->IdcertificateGroup;

                // Return the Rendered Button Control
                return $btnEdit->Render(false);
            }

                // Event Handlers Here
            public function btnEditCertificate_Click($strFormId, $strControlId, $strParameter) {
                    // Get pnlRight from the Parent Form
                    $pnlRight = $this->objForm->GetControl($this->strPanelRightControlId);

                    // First, remove all children panels from pnlRight
                    $pnlRight->RemoveChildControls(true);

                    $pnlRight->CssClass = "col-md-6 animated fadeInRight";
                    $this->strPanelLeftControlId->CssClass = "smooth col-md-6";
                    
                  
                    $objCertificateToEdit = CertificateGroup::LoadByIdcertificateGroup($strParameter);
                    new CertificategrpEditPanel($pnlRight, $objCertificateToEdit, 'CloseRightPanel');
            }
	}
                 
           
?>