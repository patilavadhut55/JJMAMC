<?php
    require('../../qcubed.inc.php');
    class InwardOutward extends QForm{
        
        protected $btnview;
        protected $calDate;
        protected $btnReport;
        protected $lblAdd;
        //protected $btnview;
        protected $btnimgView1;
        protected function Form_Run() {
            parent::Form_Run();
            QApplication::CheckRemoteAdmin();
        }
        protected function Form_Create() {
            parent::Form_Create();
                $this->calDate =new QCalendar($this);
                $this->calDate->Width =150;
                $this->calDate->Name = "Date";
           
                if(isset($_GET['fdate'])){
                    $this->calDate->Text = Date('Y/m/d', strtotime($_GET['fdate']));
                }
        
                $this->btnReport = new QButton($this);
                $this->btnReport->ButtonMode = QButtonMode::Success;
                $this->btnReport->Text = "Search";
                $this->btnReport->AddAction(new QClickEvent(), new QServerAction('btnReport_Click'));
                
                $chkrole = Role::LoadByIdrole($_SESSION['role']);
                    if ($chkrole){
                        $docwords = DocInOut::QueryArray(
                            QQ::AndCondition(
                                QQ::Equal(QQN::DocInOut()->Outward,1),
                                      QQ::Equal(QQN::DocInOut()->Dept,$chkrole->Parrent)
                                ));
                        foreach ($docwords as $docword){
                            $this->btnview[$docword->IddocInOut] = new QButton($this);
                            $this->btnview[$docword->IddocInOut]->ButtonMode = QButtonMode::Success;
                            $this->btnview[$docword->IddocInOut]->Text = 'View';
                            $this->btnview[$docword->IddocInOut]->ActionParameter = $docword->IddocInOut;
                            $this->btnview[$docword->IddocInOut]->AddAction(new QClickEvent(), new QServerAction('btnview_Click'));
                        }
                    }
//                    if(isset($_GET['id'])){
//                        $docword = DocInOut::LoadByIddocInOut($_GET['id']);
//                            if($docword){
////                            $this->lblAdd[$docword->IddocInOut] = new QLabel($this);
////                            $this->lblAdd[$docword->IddocInOut]->Text = $docword->IddocInOut;
////                            $this->lblAdd->Text = '<iframe src="'.__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__.'/upload/inoutward_doc_upload.php?id='.$_GET['id'].'" height="700" width="700" ></iframe>';
//                                $this->btnimgView1[$docword->IddocInOut] = new QLabel($this);
//                            //  $this->btnimgView[$docword->IddocInOut]->Text = "Doc View";
//                            //  $this->btnimgView[$appdoc->IdmemberDoc]->AddAction(new QClickEvent(), new QAjaxAction('btnimgView_Click'));
//                                $this->btnimgView1[$docword->IddocInOut]->ActionParameter =$docword->IddocInOut;
//                                 $this->btnimgView1[$docword->IddocInOut]->Text ='<iframe src="'.__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__.'/upload/inoutward_doc_upload.php?id='.$_GET['id'].'" height="700" width="700"></iframe>';
//                            
//                            }
                 //   }
                    
          // $doc = MemberDoc::LoadByIdmemberDoc($_GET['id']);
                   //  $code = $doc->Code + 1;
                   //  if(!is_dir('../upload/documents/inoutward/A'.$doc->IdmemberDoc)){
        //   mkdir('../upload/documents/inoutward/A'.$doc->IdmemberDoc, 0777, true);
              //     }
                  //  $file = '../upload/documents/inoutward/A'.$doc->IdmemberDoc;
                   //if(file_exists($file)) {
      //     if (!mkdir('/upload/documents/inoutward/A'.$doc->IdmemberDoc, 0777, true)){}
               //    }else{
              //         if(!mkdir('../upload/documents/inoutward/A'.$doc->IdmemberDoc, 0777, true)){}
                 //   }
                    //$this->lblAdd->Visible = true;
                   // $this->btnAddClose->Visible = true;
                  
                      //    $this->lblAdd = new QLabel($this);
                   // $this->lblAdd->Visible = False;
                  //  $this->lblAdd->HtmlEntities = FALSE;
                   //  $this->lblAdd->Text ='<iframe src="'.__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__.'/upload/inoutward_doc_upload.php?id='.$_GET['id'].'" height="700" width="700" ></iframe>';
        }
        
        protected function btnReport_Click(){
            if($this->calDate->Text != NULL){
                QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/doc_inoutward/outward_view.php?fdate='.date('Ymd',  strtotime($this->calDate->Text)));
            } 
        }
            
            protected function btnview_Click($strFormId, $strControlId, $strParameter){
                 // $code = "";
                    //$doc = MemberDoc::LoadByIdmemberDoc($strParameter);
                   //  $code = $doc->Code + 1;
                   ///  if(!is_dir('../upload/documents/inoutward/A'.$doc->IdmemberDoc)){
                   //     mkdir('../upload/documents/inoutward/A'.$doc->IdmemberDoc, 0777, true);
                   // }
                   // $file = '../upload/documents/inoutward/A'.$doc->IdmemberDoc;
                   // if(file_exists($file)) {
                        //if (!mkdir('../upload/documents/A'.$doc->MemberObject->Code, 0777, true)){}
                   // }else{
                     //   if(!mkdir('../upload/documents/inoutward/A'.$doc->IdmemberDoc, 0777, true)){}
                   // }
                    //$this->lblAdd->Visible = true;
                   // $this->btnAddClose->Visible = true;
                  //  $this->lblAdd->Text ='<iframe src="'.__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__.'/upload/inoutward_doc_upload.php?id='.$strParameter.'&doc='.$doc->Code.'" height="700" width="700" ></iframe>';
                QApplication::Redirect(__VIRTUAL_DIRECTORY__.__FORM_APPLICATION__.'/doc_inoutward/outward_view.php?id='.$strParameter);
            }
           
          /*  protected function btnimgView_Click($strFormId, $strControlId, $strParameter){
                $code = "";
                $doc = MemberDoc::LoadByIdmemberDoc($strParameter);
                $code = $doc->Code + 1;
                $file = '../../upload/documents/A'.$doc->MemberObject->Code;
                if(file_exists($file)) {
                    //if (!mkdir('../upload/documents/A'.$doc->MemberObject->Code, 0777, true)){}
                }else{
                    if(!mkdir('../../upload/documents/A'.$doc->MemberObject->Code, 0777, true)){}
                }
                $this->lblAdd->Visible = true;
                $this->btnAddClose->Visible = true;
                $this->lblAdd->Text ='<iframe src="'.__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__.'/upload/uploadedimage.php?id='.$_GET['id'].'&doc='.$doc->Code.'&code='.$code.'" height="700" width="700" ></iframe>';
            }*/
        }    
    
            InwardOutward::Run('InwardOutward');    
?>        