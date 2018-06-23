<?php
    $strPageTitle = QApplication::Translate('Employee');
    require(__CONFIGURATION__ . '/header.inc.php');
?>
<script language="javascript">
	function Clickheretoprint(formid){
          var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,";
              disp_setting+="scrollbars=yes, left=100, top=10, right=100 ";
          var content_vlue = document.getElementById(formid).innerHTML;

          var docprint=window.open("","",disp_setting);
           docprint.document.open();
           docprint.document.write('</head><body onload="window.print(); window.close();"><style type="text/css">@import url("../../assets/_core/css/styles.css");</style><center>');
           docprint.document.write(content_vlue);
           docprint.document.write('</center></body></html>');
           docprint.document.close();
        }
</script>
	<?php $this->RenderBegin() ?>
        <?php if(isset($_GET['emp'])){
            $ledger = Ledger::LoadByIdledger($_GET['emp']);
            if($ledger){
                ?><div class="pull-left "><h3><?php _p($ledger->Name); ?></h3></div>
        <?php  }} ?> 
        <div class="pull-right slideup">
            <?php $this->btnNew->Render(); ?> <?php $this->btnList->Render(); ?>
        </div>
	
        
        <?php 
            if(isset($_GET['emp']) || isset($_GET['new'])){
        ?>
    <div class="tabbable-panel">
        <div class="tabbable-line slideup">
                <ul class="nav nav-tabs ">
                    <li class="<?php if(!isset($_GET['tab'])){ $this->txtName->Focus(); ?>active<?php } ?> pull-left margin-left-large" style="margin-left: 180px;">
                        <a href="#0" data-toggle="tab" id="link1">
                            <i class="fa fa-asterisk fa-fw"></i><?php _t('Ledger')?>
                        </a>
                    </li>
                    
                    <?php if(isset($_GET['emp'])){ ?>
                    <li class="<?php if(isset($_GET['tab']) && $_GET['tab'] == 1){ $this->txtWeb->Focus(); ?>active<?php } ?> pull-left">
                            <a href="#1" data-toggle="tab" id="link2">
                            <i class="fa fa-map-marker fa-fw"></i><?php _t('Details')?>
                            </a>
                    </li>
<!--                    <li class="<?php //if(isset($_GET['tab']) && $_GET['tab'] == 2){ ?>active<?php //} ?> pull-left">
                            <a href="#2" data-toggle="tab" id="link2">
                                <i class="fa fa-map-marker fa-fw"></i><?php //_t('Service Book')?>
                            </a>
                    </li>-->
                    
                    <li class="<?php if(isset($_GET['tab']) && $_GET['tab'] == 3){ $this->txtUserName->Focus(); ?>active<?php } ?> pull-left">
                            <a href="#3" data-toggle="tab" aria-expanded="true" id="link3">
                            <i class="fa fa-sign-in fa-fw"></i><?php _t('Login')?>
                            </a>
                    </li>
                    
<!--                    <li class="<?php //if(isset($_GET['tab']) && $_GET['tab'] == 5){ ?>active<?php //} ?> pull-left">
                        <a href="#5" data-toggle="tab" aria-expanded="true" id="link4">
                            <i class="fa fa-sign-in fa-fw"></i><?php //_t('Establishment');?>
                        </a>
                    </li>-->
<!--                    <li class="<?php //if(isset($_GET['tab']) && $_GET['tab'] == 6){ ?>active<?php //} ?> pull-left">
                        <a href="#6" data-toggle="tab" aria-expanded="true" id="link5">
                            <i class="fa fa-sign-in fa-fw"></i><?php //_t('Rewards');?>
                        </a>
                    </li>-->
                    <?php } ?>
                </ul>
            
                <div class="tab-content">
                    <div class="tab-pane <?php if(!isset($_GET['tab'])){ ?>active<?php } ?>" id="0">
                    <?php 
                    if(isset($_GET['emp']) || isset($_GET['new'])){
                        
                    ?>
                    <div class="form-controls">
                        <?php $this->txtCode->RenderWithName(); ?>
                        <?php $this->txtName->RenderWithName(); ?>
                        <?php $this->lstGrp->RenderWithName(); ?>
                                
                        <?php $this->txtMname->RenderWithName(); ?>
                        <div class="form-actions">
                            <div class="form-save"><?php $this->btnSave->Render(); ?></div>
                            <div class="form-cancel"><?php $this->btnCancel->Render(); ?></div>
                            <div class="form-delete"><?php $this->btnDelete->Render(); ?></div>
                        </div>
                    </div>
                    <?php } ?>
                    </div>
                    
                    <div class="tab-pane <?php if(isset($_GET['tab'])&& $_GET['tab'] == 1){ ?>active<?php } ?>" id="1">
                        <div class="form-controls">
                            <?php $this->txtWeb->RenderWithName(); ?>
                            
                            <?php //$this->txtReligion->RenderWithName(); ?>
                            <?php $this->lstCast->RenderWithName(); ?>                                                        
                            <?php $this->caldob->RenderWithName(); ?>
                             <?php $this->lstBank->RenderWithName(); ?>
                             <?php $this->txtBankaccno->RenderWithName(); ?>
                             <?php $this->txtBranch->RenderWithName(); ?>
                             <?php $this->txtPanno->RenderWithName(); ?>
                            
                                 <?php $this->txtHeight->RenderWithName(); ?>
                            <?php $this->lstBloodGroup->RenderWithName(); ?>
                            <?php $this->txtBirthMark->RenderWithName(); ?>
                            <?php $this->lstGender->RenderWithName(); ?>
                            <?php $this->txtCstNo->RenderWithName(); ?>
                            
                            <?php $this->txtTitle->RenderWithName(); ?>
                            <?php $this->txtAddressLine1->RenderWithName(); ?>
                            <?php $this->txtAddressLine2->RenderWithName(); ?>
                            <?php $this->txtCountry->RenderWithName(); ?>
                            <?php $this->txtState->RenderWithName(); ?>
                            <?php $this->txtDistrict->RenderWithName(); ?>
                            <?php $this->txtTaluka->RenderWithName(); ?>
                            <?php $this->txtCity->RenderWithName(); ?>
                            <?php $this->txtZipCode->RenderWithName(); ?>
                            <?php $this->txtContact1->RenderWithName(); ?>
                            <?php $this->txtContact2->RenderWithName(); ?>
                            
                            <?php $this->txtEmail1->RenderWithName(); ?>
                            <?php $this->txtEmail2->RenderWithName(); ?>
                            <?php //$this->txtTinSalesTaxNo->RenderWithName(); ?>
                            
                            <div class="form-actions">
                                <div class="form-save"><?php $this->btnUpdate->Render(); ?></div>
                                <div class="form-delete"><?php $this->btnRemove->Render(); ?></div>
                            </div>
                        </div>    
                    </div>
                    
                    <div class="tab-pane <?php if(isset($_GET['tab']) && $_GET['tab'] >= 20){ ?>active<?php } ?>" id="2">
                        <div style="clear: both;"></div>
                        <div class="tabbable-panel">
                            <div class="tabbable-line">                                
                                <ul class="nav nav-tabs">
                                    <li class="<?php if(!isset($_GET['tab'])){ ?>active<?php } ?>">
                                        <a href="#20" data-toggle="tab" >
                                            <i class="fa fa-asterisk fa-fw"></i><?php _t('1')?>
                                        </a>
                                    </li>
                                    
                                    <li class="<?php if(isset($_GET['tab']) && $_GET['tab'] == 21){ ?>active<?php } ?> ">
                                            <a href="#21" data-toggle="tab" >
                                            <i class="fa fa-map-marker fa-fw"></i><?php _t('2')?>
                                            </a>
                                    </li>
                                    
                                    <li class="<?php if(isset($_GET['tab']) && $_GET['tab'] == 22){ ?>active<?php } ?>">
                                            <a href="#22" data-toggle="tab" >
                                                <i class="fa fa-map-marker fa-fw"></i><?php _t('3')?>
                                            </a>
                                    </li>
                                    <li class="<?php if(isset($_GET['tab']) && $_GET['tab'] == 23){ ?>active<?php } ?>">
                                            <a href="#23" data-toggle="tab" >
                                                <i class="fa fa-map-marker fa-fw"></i><?php _t('4')?>
                                            </a>
                                    </li>
                                    <li class="<?php if(isset($_GET['tab']) && $_GET['tab'] == 24){ ?>active<?php } ?>">
                                            <a href="#24" data-toggle="tab" >
                                                <i class="fa fa-map-marker fa-fw"></i><?php _t('5')?>
                                            </a>
                                    </li>
                                    <li class="<?php if(isset($_GET['tab']) && $_GET['tab'] == 25){ ?>active<?php } ?>">
                                            <a href="#25" data-toggle="tab" >
                                                <i class="fa fa-map-marker fa-fw"></i><?php _t('6')?>
                                            </a>
                                    </li>
                                    <li class="<?php if(isset($_GET['tab']) && $_GET['tab'] == 26){ ?>active<?php } ?>">
                                            <a href="#26" data-toggle="tab" >
                                                <i class="fa fa-map-marker fa-fw"></i><?php _t('7')?>
                                            </a>
                                    </li>
                                    <li class="<?php if(isset($_GET['tab']) && $_GET['tab'] == 27){ ?>active<?php } ?>">
                                            <a href="#27" data-toggle="tab" >
                                                <i class="fa fa-map-marker fa-fw"></i><?php _t('8')?>
                                            </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                            <div class="tab-pane <?php if(!isset($_GET['tab'])){ ?>active<?php } ?>" id="20">
                                <div style="clear: both;"></div>
                                <div class="pull-left" style="width: 10%">
                                    <a href="javascript:Clickheretoprint('print1')">
                                        <img src="<?php _p(__VIRTUAL_DIRECTORY__. __IMAGE_ASSETS__.'/print.png'); ?>" width="40" height="40" />
                                    </a>
                                </div>
                                <div id="print1" class="form-controls">
                                  <p align="center">ORIGINAL / DUPLICATE<br>
                                    SERVICE BOOK<br>
                                    TO BE KEPT BY NON-GAZETTED OFFICERS<br>
                                    Subject to the Revised Leave Rules,  1935, promulgated in<br>
                                    Government Notification, Finance  Department,<br>
                                    No. 2706-C, dated 12th  November 1935</p>
                                  <p>
                                  <p align="center">
                                  Name of the Incumbent <b><?php _p($this->txtName->Text); ?></b></p>
                                </div>
                            </div>
                            <div class="tab-pane <?php if(isset($_GET['tab']) && $_GET['tab'] == 21){ ?>active<?php } ?>" id="21">
                                <div style="clear: both;"></div>
                                <div class="pull-left" style="width: 10%">
                                    <a href="javascript:Clickheretoprint('print2')">
                                        <img src="<?php _p(__VIRTUAL_DIRECTORY__. __IMAGE_ASSETS__.'/print.png'); ?>" width="40" height="40" />
                                    </a>
                                </div>
                                <div id="print2" class="form-controls">
                                  <p align="center"><strong><u>OATH OF  ALLEGIANCE</u></strong><br></p>
                                  <p align="justified">
                                    I <b><?php _p($this->txtName->Text); ?></b> do swear  that I will be faithful and bear true allegiance to india and to the  Constitution of India as by Law established and that I will carry out the  duties of my office loyally, honestly and impartiality.<br>
                                    So help me  God.</p>
                                  <p>Attested by</p>
                                  <p>&nbsp;</p>
                                  <p>&nbsp;</p>
                                  <p>Signature and Designation</p>
                                  
                                  <p class="pull-left">
                                    Place ____________________<br>
                                    Date  ____________________</p>
                                  <p class="pull-right"  width="200">Signature</p>
                                  <p class="clear">&nbsp;</p>
                                  
                                  <p style="margin-top: 50px;">&nbsp;</p>
                                  <p class="clear" align="center"><b>Understanding  regarding Employment</b><br></p>
                                  <p>I <b><?php _p($this->txtName->Text); ?></b> understand  that my employment under_________________________________________is purely  temporary and that my services may be dispensed with at any time without notice  and without any reasons wthatsoever being assigned and  I accept the employment on this terms only.</p>
                                  <p>&nbsp;</p>
                                  <p class="pull-left">
                                    Place ____________________<br>
                                    Date  ____________________</p>
                                  <p class="pull-right"  width="200">Signature</p>
                                  <p class="clear">&nbsp;</p>
                                  
                            <div class="form-actions">
                                        
                            </div>   
                                </div>
                            </div>
                            <div class="tab-pane <?php if(isset($_GET['tab']) && $_GET['tab'] == 22){ ?>active<?php } ?>" id="22">
                                <div style="clear: both;"></div>
                                <div class="pull-left" style="width: 10%">
                                    <a href="javascript:Clickheretoprint('print3')">
                                        <img src="<?php _p(__VIRTUAL_DIRECTORY__. __IMAGE_ASSETS__.'/print.png'); ?>" width="40" height="40" />
                                    </a>
                                </div>
                                <div id="print3" class="form-controls">
                                    <?php 
                                    if(isset($_GET['emp'])){
                                    $address = Address::LoadArrayByOf($_GET['emp']);
                                        if($address){
                                        foreach ($address as $addres){}
                                    ?>
                                    <table border="1" align="center" class="datagrid" style="font-size:16px;">
                                    <tr>
                                      <td valign="top"><p>1) Name<br>
                                        १) नाव</p></td>
                                      <td width="312" valign="top"><p><?php _p($addres->OfObject); ?></p></td>
                                    </tr>
                                    <tr>
                                      <td width="312" valign="top"><p>2) Race<br>
                                        २) जात</p></td>
                                      <td width="312" valign="top"><p><?php //_p($addres->CasteObject); ?></p></td>
                                    </tr>
                                    <tr>
                                      <td width="312" valign="top"><p>3) Residence<br>
                                        ३) राहण्याचे ठिकाण</p></td>
                                      <td width="312" valign="top"><p><?php _p($addres->AddressLine1); ?></p></td>
                                    </tr>
                                    <tr>
                                      <td width="312" valign="top"><p>4) Father&rsquo;s  Name and Residence<br>
                                        ४) बापाचे नाव व राहण्याचे ठिकाण</p></td>
                                      <td width="312" valign="top"><p><?php _p($addres->Web); ?></p></td>
                                    </tr>
                                    <tr>
                                      <td width="312" valign="top"><p>5) Date of Birth by the Christian Era as nearly as can be ascertained<br>
                                        ५) जन्म झाल्याच्या    तारखेचा निश्चय करून जितकी ती बरोबरय लिहिता येईल तितकी ती ख्रिस्ती सणाप्रमाणे    लिहावी.</p></td>
                                      <td width="312" valign="top"><p><?php if($addres->Dob) _p(date('d/m/Y',  strtotime($addres->Dob))); ?></p></td>
                                    </tr>
                                    <tr>
                                      <td width="312" valign="top"><p>6) Exact height by measurement<br>
                                        ६) मोजण्यात बरोबर    उंची</p></td>
                                      <td width="312" valign="top"><p><?php //_p($addres->Height); ?></p></td>
                                    </tr>
                                    <tr>
                                      <td width="312" valign="top"><p>7) Personal marks  for    identification<br>
                                        ७) ओळखण्यासाठी    अंगावरील खुणा</p></td>
                                      <td width="312" valign="top"><p><?php //_p($addres->BirthMark); ?></p></td>
                                    </tr>
                                    <tr>
                                      <td width="312" valign="top"><p>8) Educational qualifications<br>
                                        ८) शेक्षणिक लायकी</p></td>
                                      <td width="312" valign="top"><p><?php _p($addres->CstNo); ?></p></td>
                                    </tr>
                                    <tr>
                                      <td width="312" valign="top"><p>9) Singature    of (non-gazetted)Government servant.<br>
                                        9) (नॉन-ग्याझेटेड)सरकारी    नोकराची सही</p></td>
                                      <td width="312" valign="top"><p>&nbsp;</p></td>
                                    </tr>
                                    <tr>
                                      <td width="312" valign="top"><p>10) Signature    and designation of the Head of the Officer or other Attesting Officer.<br>
                                        १०) कचेरीच्या    मुख्य(कामदाराची) किंवा सही करणाऱ्या दुसऱ्या (कामदाराची) सही व हुद्दा.</p></td>
                                      <td width="312" valign="top"><p>&nbsp;</p></td>
                                    </tr>
                                  </table>
                                    <?php  }} ?>
                                    <p>N.B.:- The entries in this page should be renewed or  re-attested at least every five years, and the Signature of lines  [9]&amp;[10]should be dated. Finger prints   need not be taken a fresh every five years under this rule.</p>
                           
                                </div>
                            </div>
                            <div class="tab-pane <?php if(isset($_GET['tab']) && $_GET['tab'] == 23){ ?>active<?php } ?>" id="23">
                                <div style="clear: both;"></div>
                                <div class="pull-left" style="width: 10%">
                                    <a href="javascript:Clickheretoprint('print4')">
                                        <img src="<?php _p(__VIRTUAL_DIRECTORY__. __IMAGE_ASSETS__.'/print.png'); ?>" width="40" height="40" />
                                    </a>
                                </div>
                                <div id="print4" class="form-controls">
                                  <?php for($i = 1; $i <= 5; $i++){ ?>  
                                    <p style="text-align: center; font-size: 18px;"><strong>Certificate by the Head of the Office or other attesting  Officer  </strong><br></p>
                                    <p style="margin-bottom: 50px;">
                                        Certificate that all the entries on the first page of  the Service Book have been duty re attested by me and found to be current *  except that __________</p>
                                  <p>
                                  <p class="clear">Date:&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;   </p>
                                  <p class="pull-right clear">Signature of the Head of the Office</p>
                                  <ul class="clear"  style="margin-bottom: 50px;">
                                    <li>These  words should be scored out when there is no exception.</li>
                                  </ul>
                                  <?php } ?>
                                </div>
                            </div>
                                    
                            <div class="tab-pane <?php if(isset($_GET['tab']) && $_GET['tab'] == 24){ ?>active<?php } ?>" id="24">
                                <div style="clear: both;"></div>
                                <div class="pull-left" style="width: 10%">
                                    <a href="javascript:Clickheretoprint('print5')">
                                        <img src="<?php _p(__VIRTUAL_DIRECTORY__. __IMAGE_ASSETS__.'/print.png'); ?>" width="40" height="40" />
                                    </a>
                                </div>
                                <div  class="form-controls">
                                    <div style="overflow: auto;">
                                    <table id="print5"  border="1" class="datagrid" style="width: 2000px;">
                                    <tr style="font-size:12px;">
                                      <th width="103" height="100" valign="top"><p>Name of Appointment</p>
                                        <p>नेमणुकीचे नाव</p></td>
                                      <th class="rotate" style="width: 100px;"><div><span>Whether substantive or officiating and whether    permanent or temporary <br/>
                                      कायमची किवां ऑफिशियेटिंग किवां नेहमीची  किवां थोड्या दिवासाबाद्द्लाची <div><span></td>
                                      <th valign="top" style="width: 200px;"><p>If officiating state<br>
                                        1)Substitute appointment and<br>
                                        2)Nature of organizational vacancy in    which he officiates ( see article 371.C.S.Rs. and Rule 240(2) of the Bombay.    C. S. Rules.)<br>
                                        जर बदलीची असेल तर, <br>
                                        १)कायमची नामणूक असेल ती लिहावी आणि <br>
                                        २)तो ज्या जागी बदलीचे काम करीत असेल त्या    मुळच्या रिकाम्या जागेचा प्रकार लिहावा. सि. स. रे. आर्टिकल ३७१, व बॉम्बे सि.    स. रुल्समधील कानू २४० (२) ही पहा.</p></td>
                                      <th class="rotate" style="width: 100px;">
                                      <div><span>Pay in substantive appointment.<br/>
                                        कायमचा पगार. </span></div></td>
                                      <th class="rotate" style="width: 100px;">
                                      <div><span>Additional pay for officiating.<br/>
                                       ऑफिशियेटिंग बद्दल जास्ती </span></div></td>
                                      <th class="rotate" style="width: 100px;">
                                      <div><span>Other emoluments falling under the term &ldquo;pay&rdquo;
                                        पगारात गणन्यासारखा दुसरा मुशाहिरा</span></div></td>
                                      <th class="rotate" style="width: 100px;">
                                      <div><span>Date of Appointment
                                      नामानुकीची तारीख</span></div></td>
                                      <th class="rotate" style="width: 100px;">
                                      <div><span>Signature of ( None gazette )Government servant<br/>
                                      (नोन-गयेझेटेड) सरकारी नोकराचे </span></div></td>
                                      <th  valign="top" style="width: 200px;">
                                      <div><span>Signature and designation of the Head    of the office or other Attesting officer in attestation of Columns 1 to 8.<br/>
                                      रकाने १ ते ८ ह्याचा रेपाणाबद्दल कचेरीच्या    मुख्य अंमलदाराची किवां सही करणाऱ्या दुसऱ्या अंमलदाराची सही व हुद्दा.</span></div></td>
                                      <th class="rotate" style="width: 100px;">
                                      <div><span>Date of termination of Appointment<br/>
                                      नामनुकीची मुदत संपल्याची तारीख</span></div></td>
                                      <th class="rotate" style="width: 100px;">
                                      <div><span>Reason for termination (such as promotion, transfer,    dismissal etc.)<br/>
                                        संपल्याचे कारण (जशी बडती झाल्याने, एका जागेवरून दुसऱ्या जागेवर    बदली झाल्याने, बडतर्फ झाल्याने,, वगेरे)</span></div></td>
                                      <th class="rotate" style="width: 100px;">
                                      <div><span>Signature of the Head of the office or other    Attesting officer. <br/>
                                      कचेरीच्या मुख्य अंमलदाराची किवां सही करणाऱ्या दुसऱ्या अंमलदाराची    सही </span></div></td>
                                      <th class="rotate" style="width: 100px;">
                                      <div><span>Nature and Duration of Leave Taken.<br/>
                                      रजेचा प्रकार व मुदत</span></div></td>
                                      <th class="rotate" style="width: 100px;">
                                      <div><span>Signature of the Head of the office or other    Attesting officer. <br/>
                                        कचेरीच्या मुख्य अंमलदाराची किवां सही करणाऱ्या दुसऱ्या अंमलदाराची    सही </span></div></td>
									  <th class="rotate" style="width: 100px;">
                                      <div><span>Reference of any recorded Punishment of censure or    reward or Pried of the Government Servant.<br/>
                                      सरकारी नोकरास शिक्षा झाली किवां ठपका मिळाला, 
                                          किवां बक्षीस देण्यात आले, किवां त्याची तारीफ करण्यात आले असे    लिहून ठेवण्यात आले असेल त्यावर हवाला. </span></div></td>
                                    </tr>
                                    <tr>
                                      <td valign="top"><div align="center">1</div></td>
                                      <td valign="top"><div align="center">2</div></td>
                                      <td valign="top"><div align="center">3</div></td>
                                      <td valign="top"><div align="center">4</div></td>
                                      <td valign="top"><div align="center">5</div></td>
                                      <td valign="top"><div align="center">6</div></td>
                                      <td valign="top"><div align="center">7</div></td>
                                      <td valign="top"><div align="center">8</div></td>
                                      <td valign="top"><div align="center">9</div></td>
                                      <td valign="top"><div align="center">10</div></td>
                                      <td valign="top"><div align="center">11</div></td>
                                      <td valign="top"><div align="center">12</div></td>
                                      <td valign="top"><div align="center">13</div></td>
                                      <td valign="top"><div align="center">14</div></td>
                                      <td valign="top"><div align="center">15</div></td>
                                    </tr>
                                    <?php
                                    if(isset($_GET['emp'])){
                                        $adds = Address::LoadArrayByOf($_GET['emp']);
                                        if($adds){
                                        foreach ($adds as $add){}
                                       
                                        $establishments = Establishment::LoadArrayByEmployee($add->Idaddress);
                                        foreach ($establishments as $establishment){
                                    ?>
                                    <tr>
                                      <td valign="top"><?php $this->lblEdit[$establishment->Idestablishment]->Render(); _p($establishment->PostObject); ?></td>
                                      <td valign="top"><div align="center">
                                        <?php _p($establishment->AppointmentCategoryObject); ?>
                                      </div></td>
                                      <td valign="top"><div align="center">
                                        <?php if($establishment->AppointmentCategory == 2)  _p($establishment->PostObject); else  _p($establishment->AppointmentDetails);   ?>
                                      </div></td>
                                      <td valign="top"><div align="center">
                                        <?php _p(number_format($establishment->BasicSalary,2,'.','')); ?>
                                      </div></td>
                                      <td valign="top"><div align="center">
                                        <?php _p($establishment->AdditonalPay); ?>
                                      </div></td>
                                      <td valign="top"><div align="center">
                                        <?php _p($establishment->PayDeatils); ?>
                                      </div></td>
                                      <td valign="top"><div align="center">
                                        <?php if($establishment->AppointmentDate) _p(date('d/m/Y',  strtotime($establishment->AppointmentDate))); ?>
                                      </div></td>
                                      <td valign="top">&nbsp;</td>
                                      <td valign="top">&nbsp;</td>
                                      <td valign="top"><div align="center">
                                        <?php if($establishment->DateOfTermination) _p(date('d/m/Y',  strtotime($establishment->DateOfTermination))); ?>
                                      </div></td>
                                      <td valign="top"><div align="center">
                                        <?php _p($establishment->TeminationDetails); ?>
                                      </div></td>
                                      <td valign="top">&nbsp;</td>
                                      <td valign="top">&nbsp;</td>
                                      <td valign="top">&nbsp;</td>
                                      <td valign="top">
                                            <?php
                                                $rewards = Reward::LoadArrayByRefEstablishement($establishment->Idestablishment);
                                                foreach ($rewards as $reward){
                                                    _p($reward->Remark.'('.$reward->Details.'),');
                                                }
                                            ?>
                                      </td>
                                    </tr>
                                        <?php }}} ?>
                                  </table>
                                        <?php $this->btnEstablishment->RenderWithName(); ?>
                                  </div>
                                </div>
                            </div>

                            <div class="tab-pane <?php if(isset($_GET['tab']) && $_GET['tab'] == 25){ ?>active<?php } ?>" id="25">
                                <div style="clear: both;"></div>
                                <div class="pull-left" style="width: 10%">
                                    <a href="javascript:Clickheretoprint('print6')">
                                        <img src="<?php _p(__VIRTUAL_DIRECTORY__. __IMAGE_ASSETS__.'/print.png'); ?>" width="40" height="40" />
                                    </a>
                                </div>
                                <div id="print6" class="form-controls">
                                  <p>Left hand &ldquo;thumb and finger impressions of ( non-gazetted )  Government servant.</p>
                                  <p style="height:400px;">&nbsp;</p>
                                  <p align="center">NOTE.<br>
                                    <strong>To avoid trouble about Pension, take  great care in the following circumstances, that the Service Book / Roll clearly  answers the following questions :-</strong></p>
                                  <table border="1" cellspacing="0" cellpadding="0" class="datagrid">
                                    <tr>
                                      <td width="312" valign="top"><p align="center">Circumstances<br>
                                        1)When Substantive    inferior Servants (e.g. bailiff etc.) are appointed to officiate in the    superior grade on pay exceeding Rs.10<br>
                                        When service    commences as <br>
                                        2)&rsquo; officiating &rsquo;<br>
                                        3)&rsquo; on probation &lsquo;<br>
                                        4)&rsquo; officiating&rsquo;    in a temporary appointment.<br>
                                        5)Upon    reinstatement after suspension</p></td>
                                      <td width="312" valign="top"><p align="center">Questions<br>
                                        What is the nature    of vacancy there a full vacancy, or does any other officer count at the same    time for pension in the same apt.?[Article37].C.S.R. or Rule 240(2) of the    B.C.S. Rs, Manul]<br>
                                        Do.                           Do.                               Do.<br>
                                        Is it in a    probatiner&rsquo;s appointment specially allotted, or is it only case(?)<br>
                                        In the temp. apt.    eventually made permanent? [Article 370, C.S.R or Rule 240(1) of the B. C. S    Rs. Mannual ] <br>
                                        Is the period    ordered to count for leave and pension ?</p></td>
                                    </tr>
                                  </table>
                                </div>
                            </div>
                                    
                            <div class="tab-pane <?php if(isset($_GET['tab']) && $_GET['tab'] == 26){ ?>active<?php } ?>" id="26">
                                <div style="clear: both;"></div>
                                <div class="pull-left" style="width: 10%">
                                    <a href="javascript:Clickheretoprint('print7')">
                                        <img src="<?php _p(__VIRTUAL_DIRECTORY__. __IMAGE_ASSETS__.'/print.png'); ?>" width="40" height="40" />
                                    </a>
                                </div>
                                <div id="print7" class="form-controls">
                                  <div style="overflow: auto;">
                                    <p>Form of Leave Account<br>
                                      (Revised Leave Rules 1935)</p>
                                    <table cellspacing="0" cellpadding="0" style="width: 2000px;">
                                      <tr>
                                        <td width="149" valign="top"><p>Date of commandment Of continues service</p></td>
                                        <td width="215" valign="top"><p>&nbsp;</p></td>
                                        <td width="828" valign="bottom"><p>Date of Contract. If any</p></td>
                                        <td width="397" valign="bottom"><p>Date of compulsory retirement</p></td>
                                        <td width="397" valign="bottom"><p></p></td>
                                      </tr>
                                    </table>
                                    <table border="1" cellspacing="0" cellpadding="0"  style="width: 2000px;" class="datagrid" >
                                      <tr style="font-size:12px;">
                                        <th width="78" colspan="3" valign="top"><p>Duty</p></th>
                                        <th width="198" colspan="6" valign="top"><p>EARNED LEAVE</p></th>
                                        <th width="162" colspan="5" valign="top"><p>HALF PAY LEAVE</p></th>
                                        <th width="319" colspan="10" valign="top"><p>Leave Taken</p></th>
                                        <th class="rotate" rowspan="3">
                                      <div>
                                        <p><span>Total half pay leave taken</span></p>
                                        <p><span> (cols 17 + 21 + 24)</span></p>
                                      </div></th>
                                        <th class="rotate" style="height: 50px;" rowspan="3">
                                      <div><span>Balance on return from leave <br/>
											(cols 14-25)</span>
                                      </div></th>
                                        <th class="rotate" style="height: 50px;" rowspan="3">
                                      <div><span>Remarks</span></div></th>
                                      </tr>
                                      <tr style="font-size:12px;">
                                        <th width="29" rowspan="2" valign="top"><p>From</p>
                                          <p>&nbsp;</p></th>
                                        <th width="22" rowspan="2" valign="top"><p>To</p>
                                          <p>&nbsp;</p></th>
                                        <th width="27" rowspan="2" valign="top"><p>No of days</p>
                                          <p>&nbsp;</p></th>
                                        <th width="83" colspan="2" valign="top"><p>Leave at credit</p></th>
                                        <th width="115" colspan="4" valign="top"><p>Leave taken</p></th>
                                        <th width="96" colspan="3" valign="top"><p>Length of service</p></th>
                                        <th width="66" colspan="2" valign="top"><p>Leave at Credit</p></th>
                                        <th width="78" colspan="3" valign="top"><p> Leave on private affaires or    on medical certificate.</p></th>
                                        <th width="78" colspan="3" valign="top"><p>Commuted leave on full pay limited to 180 days in entire service </p></th>
                                        <th width="46" rowspan="2" valign="top"><p>Commuted leave converted in to half pay leave (twice of cal. 20)</p></th>
                                        <th width="116" colspan="3" valign="top"><p>Leave not Due on Medical Certificate(limited to 180 days in entire    service )</p></th>
                                      </tr>
                                      <tr style="font-size:12px;">
                                        <th width="34" valign="top"><p>Leave carried<br>
                                          (in Days)</p></th>
                                        <th width="48" valign="top"><p>Leave at Credit (in Days) cols. 9+4 I Subject to the appropriate    limit.</p></th>
                                        <th width="29" valign="top"><p>From</p></th>
                                        <th width="22" valign="top"><p>To</p></th>
                                        <th width="27" valign="top"><p>No. of days</p></th>
                                        <th width="37" valign="top"><p>Balance on return from leave (cols. 5-8)</p></th>
                                        <th width="29" valign="top"><p>From</p></th>
                                        <th width="22" valign="top"><p>To</p></th>
                                        <th width="45" valign="top"><p>No of completed years of service</p></th>
                                        <th width="35" valign="top"><p>Leave Earned (in Days)</p></th>
                                        <th width="32" valign="top"><p>Leave at Credit<br>
                                          (cols. 26)</p></th>
                                        <th width="29" valign="top"><p>From</p></th>
                                        <th width="22" valign="top"><p>To</p></th>
                                        <th width="27" valign="top"><p>No. of days</p></th>
                                        <th width="29" valign="top"><p>From</p></th>
                                        <th width="22" valign="top"><p>To</p></th>
                                        <th width="27" valign="top"><p>No. of days</p></th>
                                        <th width="48" valign="top"><p>From</p></th>
                                        <th width="39" valign="top"><p>To</p></th>
                                        <th width="28" valign="top"><p>No. of Days</p></th>
                                      </tr>
                                      <tr>
                                        <td width="29" valign="top"><p align="center">1</p></td>
                                        <td width="22" valign="top"><p align="center">2</p></td>
                                        <td width="27" valign="top"><p align="center">3</p></td>
                                        <td width="34" valign="top"><p align="center">4</p></td>
                                        <td width="48" valign="top"><p align="center">5</p></td>
                                        <td width="29" valign="top"><p align="center">6</p></td>
                                        <td width="22" valign="top"><p align="center">7</p></td>
                                        <td width="27" valign="top"><p align="center">8</p></td>
                                        <td width="37" valign="top"><p align="center">9</p></td>
                                        <td width="29" valign="top"><p align="center">10</p></td>
                                        <td width="22" valign="top"><p align="center">11</p></td>
                                        <td width="45" valign="top"><p align="center">12</p></td>
                                        <td width="35" valign="top"><p align="center">13</p></td>
                                        <td width="32" valign="top"><p align="center">14</p></td>
                                        <td width="29" valign="top"><p align="center">15</p></td>
                                        <td width="22" valign="top"><p align="center">16</p></td>
                                        <td width="27" valign="top"><p align="center">17</p></td>
                                        <td width="29" valign="top"><p align="center">18</p></td>
                                        <td width="22" valign="top"><p align="center">19</p></td>
                                        <td width="27" valign="top"><p align="center">20</p></td>
                                        <td width="46" valign="top"><p align="center">21</p></td>
                                        <td width="48" valign="top"><p align="center">22</p></td>
                                        <td width="39" valign="top"><p align="center">23</p></td>
                                        <td width="28" valign="top"><p align="center">24</p></td>
                                        <td width="31" valign="top"><p align="center">25</p></td>
                                        <td width="37" valign="top"><p align="center">26</p></td>
                                        <td width="39" valign="top"><p align="center">27</p></td>
                                      </tr>
                                       <?php
                                      if(isset($_GET['emp'])){
                                        $adds = Address::LoadArrayByOf($_GET['emp']);
                                        if($adds){
                                        foreach ($adds as $add){}
                                        $establishments = Establishment::LoadArrayByEmployee($add->Idaddress);
                                        if($establishments){
                                         foreach ($establishments as $establishment){}
                                          $leaves = Leaves::LoadArrayByRefEstablishment($establishment->Idestablishment);    
                                          foreach($leaves as $leave){
                                    ?>
                                       <tr>
                                        <td width="29" valign="top"><?php $this->lblLeaveEdit[$leave->Idleaves]->Render(); ?></td>
                                        <td width="22" valign="top"><p>&nbsp;</p></td>
                                        <td width="27" valign="top"><p>&nbsp;</p></td>
                                        <td width="34" valign="top"><?php _p($leave->LeavesCarriedInDays);?></td>
                                        <td width="48" valign="top"><?php _p($leave->LeavesAtCredit);?></td>
                                        <td width="37" valign="top"><?php if($leave->CreditLeaveTakenFrom) _p(date('d/m/Y',  strtotime($leave->CreditLeaveTakenFrom)));?></td>
                                        <td width="29" valign="top"><?php if($leave->CreditLeaveTakenTo) _p(date('d/m/Y',  strtotime($leave->TakenLeaveTo)));?></td>
                                        <td width="37" valign="top"><?php if($leave->TakenLeaveForm) _p(date('d/m/Y',  strtotime($leave->TakenLeaveForm)));?></td>
                                        <td width="29" valign="top"><?php if($leave->TakenLeaveTo) _p(date('d/m/Y',  strtotime($leave->TakenLeaveTo)));?></td>
                                        <td width="27" valign="top"><?php _p($leave->TakenNoOfDays); ?></td>
                                        <td width="22" valign="top"><?php _p($leave->LeaveBalance);?></td>
                                        <td width="29" valign="top"><?php if($leave->ServiceLengthFrom) _p(date('d/m/Y',  strtotime($leave->ServiceLengthFrom)));?></td>
                                        <td width="22" valign="top"><?php if($leave->ServiceLengthTo) _p(date('d/m/Y',  strtotime($leave->ServiceLengthTo)));?></td>
                                        <td width="45" valign="top"><?php _p($leave->YearsOfService);?></td>
                                        <td width="34" valign="top"><?php _p($leave->LeaveEarned);?></td>
                                        <td width="48" valign="top"><?php _p($leave->LeaveAtCredit);?></td>
                                        <td width="37" valign="top"><?php if($leave->MedicalCertLeaveFrom) _p(date('d/m/Y',  strtotime($leave->MedicalCertLeaveFrom)));?></td>
                                        <td width="29" valign="top"><?php if($leave->MedicalCertLeaveTo) _p(date('d/m/Y',  strtotime($leave->MedicalCertLeaveTo)));?></td>
                                        <td width="27" valign="top"><?php _p($leave->TotalMedicalLeaves);?></td>
                                        <td width="29" valign="top"><?php if($leave->FullPayLeavesFrom) _p(date('d/m/Y',  strtotime($leave->FullPayLeavesFrom)));?></td>
                                        <td width="22" valign="top"><?php if($leave->FullPayLeavesTo) _p(date('d/m/Y',  strtotime($leave->FullPayLeavesTo)));?></td>
                                        <td width="27" valign="top"><?php _p($leave->TotalFullPayLeaves);?></td>
                                        <td width="46" valign="top"><?php _p($leave->CommutedHalfPayLeaves);?></td>
                                        <td width="48" valign="top"><?php if($leave->NonMedicalLeaveFrom) _p(date('d/m/Y',  strtotime($leave->NonMedicalLeaveFrom)));?></td>
                                        <td width="39" valign="top"><?php if($leave->NonMedicalLeaveTo) _p(date('d/m/Y',  strtotime($leave->NonMedicalLeaveTo)));?></td>
                                        <td width="28" valign="top"><?php _p($leave->TotalNonMedicalLeave); ?></td>
                                        <td width="31" valign="top"><?php _p($leave->TotalHalfPayLeaveTaken); ?></td>
                                        <td width="37" valign="top"><?php _p($leave->BalanceReturnLeave); ?></td>
                                        <td width="39" valign="top"><?php _p($leave->Remarks); ?></td>
                                      </tr>
                                      <?php }}}}?>
                                    </table>
                                  </div>
                                </div>
                            </div>
                            
                            <div class="tab-pane <?php if(isset($_GET['tab']) && $_GET['tab'] == 27){ ?>active<?php } ?>" id="27">
                                <div style="clear: both;"></div>
                                <div class="pull-left" style="width: 10%">
                                    <a href="javascript:Clickheretoprint('print8')">
                                        <img src="<?php _p(__VIRTUAL_DIRECTORY__. __IMAGE_ASSETS__.'/print.png'); ?>" width="40" height="40" />
                                    </a>
                                </div>
                                <div id="print8" class="form-controls">
                                  <p>RECORD OF VERIFICATION OF SERVICE – Service verified from  pay bills, acquittance rolls and similar records specified below.</p>
                                  <table border="1" cellspacing="0" cellpadding="0" class="datagrid">
                                    <tr>
                                      <th width="78" valign="top">
                                        From </th>
                                      <th width="78" valign="top"><p>To</p></th>
                                      <th width="78" valign="top"><p>Other record, if any, from which the service is verified</p></th>
                                      <th width="78" valign="top"><p>Signature and designation of the Head of Office</p></th>
                                      <th width="78" valign="top"><p>From</p></th>
                                      <th width="78" valign="top"><p>To</p></th>
                                      <th width="78" valign="top"><p>Other record if any from which he service is verified</p></th>
                                      <th width="78" valign="top"><p>Signature and designation of the Head of Office</p></th>
                                    </tr>
                                    <tr>
                                      <td width="78" valign="top"><p>&nbsp;</p></td>
                                      <td width="78" valign="top"><p>&nbsp;</p></td>
                                      <td width="78" valign="top"><p>&nbsp;</p></td>
                                      <td width="78" valign="top"><p>&nbsp;</p></td>
                                      <td width="78" valign="top"><p>&nbsp;</p></td>
                                      <td width="78" valign="top"><p>&nbsp;</p></td>
                                      <td width="78" valign="top"><p>&nbsp;</p></td>
                                      <td width="78" valign="top"><p>&nbsp;</p></td>
                                    </tr>
                                  </table>
                                </div>
                            </div>
                            <div class="tab-pane <?php if(isset($_GET['tab']) && $_GET['tab'] == 26){ ?>active<?php } ?>" id="26">
                                <div class="form-controls"></div>
                            </div>
                                    </div>
                                </div>
                        </div>    
                    </div>
                            
                    <div class="tab-pane <?php if(isset($_GET['tab']) && $_GET['tab'] == 3){ ?>active<?php } ?>" id="3">
                        <div class="form-controls">
                         <?php $this->txtUserName->RenderWithName(); ?>
                         <?php $this->txtPassword->RenderWithName(); ?>   
                         <?php $this->txtConfirm->RenderWithName(); ?>
                             <?php $this->chkIsEnabled->RenderWithName();?>
                           <div class="form-actions">
                                <div class="form-save"><?php $this->btnLogin->Render(); ?></div>
                                <div class="form-delete"><?php //$this->btnRemove->Render(); ?></div>
                            </div>   
                        </div>
                    </div> 
                    
                     
                    <div class="tab-pane <?php if(isset($_GET['tab']) && $_GET['tab'] == 5){ ?>active<?php } ?>" id="5">                        
                        <?php   $this->lblViewiframe->Render();    ?>
                    </div> 
                    <div class="tab-pane <?php if(isset($_GET['tab']) && $_GET['tab'] == 5){ ?>active<?php } ?>" id="5">                        
                     
                    </div>         
                    <div class="tab-pane <?php if(isset($_GET['tab']) && $_GET['tab'] == 7){ ?>active<?php } ?>" id="7">                        
                        <?php   $this->lblViewLeaveiframe->Render();    ?>
                    </div>
                     <div class="tab-pane <?php if(isset($_GET['tab']) && $_GET['tab'] == 6){ ?>active<?php } ?>" id="6">
                            <div class="form-controls">
                               <?php $this->dtgRewards->Render(); ?>
                             <div class="form-actions">
                                <div class="pull-left" style="margin-left: 10px;"><?php $this->txtrewards->Render(); ?></div>
                                <div class="pull-left" style="margin-left: 15px;"><?php $this->txtdetails->Render(); ?></div>                                
                                <div class="pull-left" style="margin-left: 55px;"><?php $this->btnRewordSave->Render(); ?></div>                                
                                <div class="pull-right" style="margin-left: 15px;"><?php $this->btnRewordDelete->Render(); ?></div>                                                                
                                <div style="clear: both;"></div>
                            </div>   
                            <div style="clear: both;"></div>
                            </div>
                            
                    </div>        
                            
                </div>
        </div>
    </div>
</div>
            <?php } ?>

	<?php $this->RenderEnd() ?>

<?php require(__CONFIGURATION__ .'/footer.inc.php'); ?>