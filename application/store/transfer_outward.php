<?php
require('../../qcubed.inc.php');

class transfer_outward extends QForm {
    protected $calfromdate;
    //declaring button
    protected $btnSearch;
    protected $btntransfer;
    protected $btnView;
    
    //departmental circulation controls
  
            protected function Form_Run() {
			parent::Form_Run();
                        QApplication::CheckRemoteAdmin();
            }
            
            protected function Form_Create() {
                    parent::Form_Create();
                    
                    $this->calfromdate = new QCalendar($this);
                    $this->calfromdate->Name = "Date";
                    $this->calfromdate->Width =100;
                 
                    $this->btnSearch = new QButton($this);
                    $this->btnSearch->Text = 'Search';
                    $this->btnSearch->ButtonMode = QButtonMode::Success;
                    $this->btnSearch->AddAction(new QClickEvent(), new QServerAction('btnSearch_Click'));
              
                  if(isset($_GET['date'])){
                     $to = date('Ymd', strtotime($_GET['date']));
                     $voucher = Voucher::QueryArray(
                                        QQ::AndCondition(
                                                    QQ::GreaterOrEqual(QQN::Voucher()->Date,$to.'000000'),
                                                    QQ::LessOrEqual(QQN::Voucher()->Date,$to.'235959'),
                                                    QQ::Equal(QQN::Voucher()->Grp,11)        
                                        ));
                                        
                               if($voucher){
                                   foreach ($voucher as $vouchers){
                                
                                $sr = 1;
                                
                                    $quotation = Voucher::QueryArray(QQ::AndCondition(
                                                  QQ::Equal(QQN::Voucher()->RefNoObject->RefNo,$vouchers->Idvoucher),
                                                  QQ::Equal(QQN::Voucher()->Grp, 3)       
                                            ));
                        foreach ($quotation as $quotations){
                            $this->btntransfer[$quotations->Idvoucher] = new QButton($this);
                            $this->btntransfer[$quotations->Idvoucher]->Text = 'Transfer';
                            $this->btntransfer[$quotations->Idvoucher]->ButtonMode = QButtonMode::Success;
                            $this->btntransfer[$quotations->Idvoucher]->AddAction(new QClickEvent(), new QServerAction('btnTransfer_Click'));
                            $this->btntransfer[$quotations->Idvoucher]->ActionParameter = $quotations->Idvoucher;
                            //$this->btntransfer[$quotations->Idvoucher]->Visible = FALSE;

                            $this->btnView[$quotations->Idvoucher] = new QButton($this);
                            $this->btnView[$quotations->Idvoucher]->Text = 'View';
                            $this->btnView[$quotations->Idvoucher]->ButtonMode = QButtonMode::Success;
                            $this->btnView[$quotations->Idvoucher]->AddAction(new QClickEvent(), new QServerAction('btnView_Click'));
                            $this->btnView[$quotations->Idvoucher]->ActionParameter = $quotations->Idvoucher;
                            // $this->btnView[$quotations->Idvoucher]->Visible = FALSE;
                        }
                    
                  }
                }
            }
        }
     protected function btnSearch_Click(){
        if($this->calfromdate->Text != ""){    
            QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/store/transfer_outward.php?date='.date('Ymd',strtotime($this->calfromdate->Text)));
        }
  }
    protected function btnTransfer_Click($strFormId,$strControlId,$strParameter){
        //for PO voucher
        $vov = Voucher::LoadByIdvoucher($strParameter);
        if($vov){   
            
            //for From Deparment
            $from_Dept = Role::LoadByIdrole($_SESSION['role']);
            //check voucher 
            $vhis = VoucherHasItem::LoadArrayByVoucher($vov->Idvoucher);
              //code for check transfer 
            $transfer = LoginHasRole::QueryArray(
                QQ::AndCondition(
                   QQ::Equal(QQN::LoginHasRole()->LoginIdlogin,$vov->RefNoObject->RefNoObject->DataBy),
                   QQ::Equal(QQN::LoginHasRole()->Active,1)        
                )
            );
               foreach ($transfer as $transfers){}  
               foreach ($vhis as $vhi){
                $serials = Serials::LoadArrayByRefVou($vhi->IdvoucherHasItem);
                foreach($serials as $serial){
                    $dept_trans = new DeptTransfer();
                    $dept_trans->Date = QDateTime::Now();
                    $dept_trans->Item = $serial->Item;
                    $dept_trans->FromDept = $from_Dept->Parrent;
                    $dept_trans->ToDept = $transfers->RoleIdroleObject->Parrent;
                    $dept_trans->Serials = $serial->Idserials;
                    $dept_trans->Qty = 1;
                    $dept_trans->Save();
                }
        }
      }
    }
    protected function btnView_Click($strFormId,$strControlId,$strParameter){
        $voucher = Voucher::QueryArray(QQ::AndCondition(
                             QQ::GreaterOrEqual(QQN::Voucher()->Date,date('Ymd000000',strtotime($_GET['date']))),
                             QQ::LessOrEqual(QQN::Voucher()->Date,date('Ymd359999',strtotime($_GET['date']))),
                             QQ::Equal(QQN::Voucher()->Grp,10)
                         ));
                  if($voucher){
                            foreach ($voucher as  $v){
                            $quotation = Voucher::QueryArray(QQ::AndCondition(
                                   QQ::Equal(QQN::Voucher()->RefNo,$v->Idvoucher),
                                   QQ::Equal(QQN::Voucher()->Grp, 3)       
                                 ));
                        foreach ($quotation as $quotations){
                          $transfer = LoginHasRole::QueryArray(QQ::AndCondition(
                                      QQ::Equal(QQN::LoginHasRole()->LoginIdlogin,$quotations->DataBy),
                                      QQ::Equal(QQN::LoginHasRole()->Active,1)        
                                   ));
                         foreach ($transfer as $transfers){}
                        
      $item = VoucherHasItem::LoadArrayByVoucher($strParameter);
     foreach ($item as $items){}
     $dept_trans = DeptTransfer::QueryArray(QQ::AndCondition(
     QQ::Equal(QQN::DeptTransfer()->ToDept,$transfers->RoleIdroleObject->Parrent),
     QQ::Equal(QQN::DeptTransfer()->Item,$items->Item)        
             ));
     foreach($dept_trans as $dept){}
                        }
                   }
         QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/store/view_outward.php?Item='.$items->Item.'&date='.$dept->Date.'&Dept='. $transfers->RoleIdroleObject->Parrent);
     }
    }
}
    transfer_outward::Run('transfer_outward');    
?>        