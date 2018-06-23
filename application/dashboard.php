<?php
	require('../qcubed.inc.php');

	class LoginEditForm extends QForm {
            protected $calfrom;
            protected $calto;
            protected $lblView;
            protected $btnApproval;
            protected $btnDenied;
            protected function Form_Run() {
                    parent::Form_Run();

                    QApplication::CheckRemoteAdmin();
            }

            protected function Form_Create() {
                parent::Form_Create();
                
                $chkrole = Role::QueryArray(
                            QQ::AndCondition(
                            QQ::Equal(QQN::Role()->Idrole, $_SESSION['role']),        
                            QQ::Like(QQN::Role()->Name, '%Student%')
                            ));
                if($_SESSION['role'] == 381 || $chkrole) //381 applicant
                    QApplication::Redirect (__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__."/admission/admission.php?id=".$_SESSION['login']);
                
                $this->calfrom = new QCalendar($this);
                $this->calto = new QCalendar($this);
                
                $this->calfrom->Text = date('M d Y',  strtotime(date('Ymd')));
                $this->calto->Text = date('M d Y',  strtotime(date('Ymd')));
                if(isset($_GET['from']) && isset($_GET['to'])){
                    $this->calfrom->Text = date('M d Y',  strtotime($_GET['from']));
                    $this->calto->Text = date('M d Y',  strtotime($_GET['to']));
                }
                $this->calto->Width = 100;
                $this->calfrom->Width = 100;
                    
                $this->calfrom->AddAction(new QChangeEvent(), new QServerAction('calfrom_change'));
                $this->calto->AddAction(new QChangeEvent(), new QServerAction('calto_change'));
            
                //Approval
            if($_SESSION['role'] == 436  || $_SESSION['role'] == 337){ 
            if($_SESSION['role'] == 436){   //HOD
            $vouchers = Voucher::QueryArray(
                QQ::AndCondition(
                    QQ::LessOrEqual(QQN::Voucher()->Amount, 5000),
                    QQ::Equal(QQN::Voucher()->ApprovedBy, NULL),
                   // QQ::NotEqual(QQN::Voucher()->Cancel, 1) , 
                    QQ::Equal(QQN::Voucher()->Grp, 11)
                   
                ));
            }
            if($_SESSION['role'] == 337){   //Director
            $vouchers =  Voucher::QueryArray(
                QQ::AndCondition(
                    QQ::GreaterOrEqual(QQN::Voucher()->Amount, 5000),
                    QQ::Equal(QQN::Voucher()->ApprovedBy, NULL),
                     //  QQ::NotEqual(QQN::Voucher()->Cancel, 1) , 
                    QQ::Equal(QQN::Voucher()->Grp, 11)
                 //   QQ::Equal(QQN::Voucher()->Cancel, 1) 
                ));
            } 
                if($vouchers){
                    foreach ($vouchers as $voucher){
                        $this->lblView[$voucher->Idvoucher] = new QLabel($this);
                        $this->lblView[$voucher->Idvoucher]->Text = $voucher->InvNo;
                        $this->lblView[$voucher->Idvoucher]->BackColor = '#F5876E';
                    }
                }
            }
           }
            protected function calfrom_change(){
                QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/dashboard.php?from='.date('Ymd',  strtotime($this->calfrom->Text)).'&to='.date('Ymd',  strtotime($this->calto->Text)).'&time=6'); 
            }
            
            protected function calto_change(){
                QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/dashboard.php?from='.date('Ymd',  strtotime($this->calfrom->Text)).'&to='.date('Ymd',  strtotime($this->calto->Text)).'&time=6'); 
            }
         
        }
	LoginEditForm::Run('LoginEditForm');
?>
  