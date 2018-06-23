<?php
	require('../qcubed.inc.php');

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
                    $this->iALabel->FontSize = 14;
                    $this->iALabel->AlertLabelMode = IAlertLabelMode::Success;
                    $this->iALabel->Text = "Enter Username and Password";
                    
                    if(isset($_GET['out'])){
                        unset($_SESSION['login']);
                        $this->iALabel->AlertLabelMode = IAlertLabelMode::Warning;
                        $this->iALabel->Text = "<i class='fa fa-sign-out fa-fw'></i> Logout Successfully";
                    }
                    
                    if(isset($_GET['lock'])){
                        unset($_SESSION['login']);                        
                        if($_GET['lock'] == 2){
                            $this->iALabel->AlertLabelMode = IAlertLabelMode::Danger;
                            $this->iALabel->Text = "<i class='fa fa-exclamation-triangle'></i> Access Denited";
                        }
                        if($_GET['lock'] == 3){
                            $this->iALabel->AlertLabelMode = IAlertLabelMode::Danger;
                            $this->iALabel->Text = "<i class='fa fa-exclamation-triangle'></i> Session has been Lost";
                        }
                    }
                
                    $this->txtUser = new QTextBox($this);
                    $this->txtUser->Placeholder = "Enter username";
                    $this->txtUser->Focus();
                    $this->txtUser->Width = "100%";
                    $this->txtUser->AddAction(new QEnterKeyEvent(), new QAjaxAction("txtUser_Click"));
                    
                    $this->txtPassword = new QTextBox($this);
                    $this->txtPassword->TextMode = QTextMode::Password;
                    $this->txtPassword->Width = "100%";
                    $this->txtPassword->Placeholder = "Password";
                    $this->txtPassword->AddAction(new QEnterKeyEvent(), new QAjaxAction("btnLogin_Click"));
                    
                    $this->btnLogin = new QButton($this);
                    $this->btnLogin->Text = "<i class='fa fa-sign-in'></i> Login";
                    $this->btnLogin->ButtonMode = QButtonMode::Success;
                    $this->btnLogin->AddAction(new QClickEvent(), new QServerAction("btnLogin_Click"));
                }
                
                protected function btnLogin_Click($strFormId, $strControlId, $strParameter){
//                    $logins = Login::QueryArray(
//                            QQ::AndCondition(
//   /                   if($logins){
//                        foreach ($logins as $login){}
//                        $_SESSION['login'] = $login->Idlogin;
//                        
//                        $LoginRoles = LoginHasRole::QueryArray(
//                                QQ::AndCondition(
//                                        QQ::Equal(QQN::LoginHasRole()->LoginIdlogin, $login->Idlogin),
//                                        QQ::Equal(QQN::LoginHasRole()->Active, 1)
//                                        )
//                                );
//                        foreach ($LoginRoles as $LoginRole){}
//                                    QQ::Equal(QQN::Login()->Username, $this->txtUser->Text),
//                                    QQ::Equal(QQN::Login()->Password, $this->txtPassword->Text)
//                                    )
//                            );
//                    if($logins){
//                        foreach ($logins as $login){}
//                        $_SESSION['login'] = $login->Idlogin;
//                        
//                        $LoginRoles = LoginHasRole::QueryArray(
//                                QQ::AndCondition(
//                                        QQ::Equal(QQN::LoginHasRole()->LoginIdlogin, $login->Idlogin),
//                                        QQ::Equal(QQN::LoginHasRole()->Active, 1)
//                                        )
//                                );
//                        foreach ($LoginRoles as $LoginRole){}
//                            $_SESSION['role'] = $LoginRole->RoleIdrole;
                        
                       // QApplication::DisplayAlert('hi');
//                    }else{
//                        $this->txtUser->Text = "";
//                        $this->txtPassword->Text = "";
//                        $this->txtUser->Focus();
//                        $this->iALabel->FontSize = 16;
//                        $this->iALabel->AlertLabelMode = IAlertLabelMode::Danger;
//                        $this->iALabel->Text = "<i class='fa fa-exclamation-circle fa-fw'></i> Invalid username or password.";
//                    }
                     $logins = Login::QueryArray(
                            QQ::AndCondition(
                                    QQ::Equal(QQN::Login()->Username, $this->txtUser->Text),
                                    QQ::Equal(QQN::Login()->Password, $this->txtPassword->Text)
                                    )
                            );
                    if($logins){
                        foreach ($logins as $login){}
                        $_SESSION['login'] = $login->Idlogin;
                        
                        $LoginRoles = LoginHasRole::QueryArray(
                                QQ::AndCondition(
                                        QQ::Equal(QQN::LoginHasRole()->LoginIdlogin, $login->Idlogin),
                                        QQ::Equal(QQN::LoginHasRole()->Active, 1)
                                        )
                                );
                        foreach ($LoginRoles as $LoginRole){}
                         $_SESSION['role'] = $LoginRole->RoleIdrole;
                        QApplication::Redirect('dashboard.php');
                    }else{
                        $this->txtUser->Text = "";
                        $this->txtPassword->Text = "";
                        $this->txtUser->Focus();
                        $this->iALabel->FontSize = 16;
                        $this->iALabel->AlertLabelMode = IAlertLabelMode::Danger;
                        $this->iALabel->Text = "<i class='fa fa-exclamation-circle fa-fw'></i> Invalid username or password.";
                    }
                }
                
                protected function txtUser_Click($strFormId, $strControlId, $strParameter){
                   $this->txtPassword->Focus();
                }
	}

	LoginEditForm::Run('LoginEditForm');
?>