<?php
	require('../../qcubed.inc.php');

        require('RoleEditPanel.class.php');
        
	class Roles extends QForm {
            protected $pnlLeft;
            protected $pnlRight;
            protected function Form_Run() {
                    parent::Form_Run();
                    QApplication::CheckRemoteAdmin();
            }

            protected function Form_Create() {
                parent::Form_Create();
              
                $this->pnlLeft = new QPanel($this);
                $this->pnlLeft->Position = QPosition::Relative;
                $this->pnlLeft->CssClass = 'panelDefault';
                $this->pnlLeft->AutoRenderChildren = true;

                $this->pnlRight = new QPanel($this);
                $this->pnlRight->Position = QPosition::Relative;
                $this->pnlRight->CssClass = 'panelDefault panelRight';
                $this->pnlRight->AutoRenderChildren = true;

                $this->objDefaultWaitIcon = new QWaitIcon($this);
            }
	}

	Roles::Run('Roles');
?>