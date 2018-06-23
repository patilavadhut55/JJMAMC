<?php
	require('../../qcubed.inc.php');

	class LoginEditForm extends QForm {
            protected $txtUser;
            protected $txtPassword;
            protected $btnLogin;
            protected $iALabel;
            
            protected function Form_Run() {
			parent::Form_Run();

			QApplication::CheckRemoteAdmin();
		}

//		protected function Form_Load() {}

		protected function Form_Create() {
                    parent::Form_Create();
                    
                    $this->iALabel = new IAlertLabel($this);
                    $this->iALabel->FontSize = 30;
                    $this->iALabel->AlertLabelMode = IAlertLabelMode::Success;
                    $this->iALabel->Text = "<i class='fa fa-connectdevelop'></i>Welcome";
                    
                    if(isset($_GET['out'])){
                        unset($_SESSION['login']);
                        $this->iALabel->FontSize = 16;
                        $this->iALabel->AlertLabelMode = IAlertLabelMode::Warning;
                        $this->iALabel->Text = "<i class='fa fa-sign-out fa-fw'></i> Logout Successfully";
                    }
                
                    $this->txtUser = new QTextBox($this);
                    $this->txtUser->Placeholder = "Enter username";
                    $this->txtUser->Focus();
                    
                    $this->txtPassword = new QTextBox($this);
                    $this->txtPassword->TextMode = QTextMode::Password;
                    $this->txtPassword->Placeholder = "Password";
                    $this->txtPassword->AddAction(new QEnterKeyEvent(), new QAjaxAction("btnLogin_Click"));
                    
                    $this->btnLogin = new QButton($this);
                    $this->btnLogin->Text = "Login";
                    $this->btnLogin->ButtonMode = QButtonMode::Success;
                    $this->btnLogin->AddAction(new QClickEvent(), new QAjaxAction("btnLogin_Click"));
                }
                
                protected function btnLogin_Click($strFormId, $strControlId, $strParameter){
                    $logins = Login::QueryArray(
                            QQ::AndCondition(
                                    QQ::Equal(QQN::Login()->Username, $this->txtUser->Text),
                                    QQ::Equal(QQN::Login()->Password, $this->txtPassword->Text)
                                    )
                            );
                    if($logins){
                        foreach ($logins as $login){}
                        $_SESSION['login'] = $login->Id;
                        QApplication::Redirect('login_edit.php');
                    }else{
                        $this->txtUser->Text = "";
                        $this->txtPassword->Text = "";
                        $this->iALabel->FontSize = 16;
                        $this->iALabel->AlertLabelMode = IAlertLabelMode::Danger;
                        $this->iALabel->Text = "<i class='fa fa-exclamation-circle fa-fw'></i> Invalid username/password";
                    }
                }
	}

	LoginEditForm::Run('LoginEditForm');
?>