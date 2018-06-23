<?php 
$app = Application::LoadByIdapplication($_GET['id']);
$name = explode(" ", $app->ApplicantObject->Title);
$verb = $noun = NULL;
if($name[0] == "Mr" || $name[0] == 'Master')
 $verb = "Son Of ".$app->ApplicantObject->Web;
elseif($name[0] == "Miss" )
    $verb = "Daughter Of ".$app->ApplicantObject->Web;
elseif($name[0] == "Mrs" )
    $verb = "Daughter Of ".$app->ApplicantObject->Web.' Wife of'.$app->ApplicantObject->CstNo;

//
if($name[0] == "Mr" || $name[0] == 'Master')
    $noun = "His ";
else
    $noun = "Her ";
//
     $seq = 1;
    $remarks = AppDocs::QueryArray(
                    QQ::AndCondition(
                    QQ::Equal(QQN::AppDocs()->Application, $app->Idapplication),
                    QQ::Equal(QQN::AppDocs()->OnCertificate, TRUE)
                    ),  QQ::OrderBy(QQN::AppDocs()->Seq)
            ); 
    $view = 0;
    if(isset($_GET['print'])) $view = 1;

//sign patch
$logins = LoginHasRole::LoadArrayByLoginIdlogin($app->DataEntryBy);
foreach ($logins as $login){}
$adddress = Address::LoadArrayByRoll($login->Company);
foreach ($adddress as $adddres){}

?>
<div id="bg">
<div align="center"><img src="<!--?php _p(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__) ?-->/inword/barcode.php?barcode=<!--?php _p($app->Code); ?-->&width=450&height=30" /></div>
<table id="mtable" align="center" >
  <tr>
    <td>
        <table id="stable" align="center">
  <tr>
    <td width="673"><div style="font-size:18px; margin-left:50px; margin-right:50px; font-weight:bold" align="center">
      ऐपतदार ( सॉल्व्हंट )  असयाबाद्दलच्या ( म्हणजे आपले कर्जबाब वगैरे फेडण्यास समर्थ असल्याबद्दलच्या  दाखल्याच्या दाखल्याचा नमूना 
      </div></td>
  </tr>
  <tr>
    <td height="337"><div align="justify" style="font-size:14px; line-height:20px; margin-left:20px; margin-right:20px">
      <p><br>
        <div align="center">( एक  महिन्याहून अधिक असा कोणताही ऐपतदार असल्याबद्दलचा दाखला स्वीकारण्यांत येणार नाही )</div> 
        <div style="float:left; width:70%;">१) नांव: 
        <strong><?php _p($app->ApplicantObject->TinSalesTaxNo); ?> </strong>
        <br>
        २) वडिलांचे/पतीचे नांव :   <strong><?php _p($app->ApplicantObject->Web); ?></strong>  <br>
        ३) राहण्याचे ठिकाण : <b>
        <?php _P($app->ApplicantObject->AddressLine1); ?>
        </b><br>
        ४) वय - <b>
            <?php 
              $age = 0;
              if($app->ApplicantObject->Dob){  
                 $dob = date("Y", strtotime($app->ApplicantObject->Dob));
                 $age = QDateTime::Now()->Year - $dob;
                _p($age);
            } 
            ?>
          </b><br>
        ५) धंदा -
        <b><?php 
        $docs = AppDocs::QueryArray(
        QQ::AndCondition(
        QQ::Equal(QQN::AppDocs()->Application, $_GET['id']),
        QQ::Equal(QQN::AppDocs()->Document, 284)
                )
                );
        if($docs){
        foreach ($docs as $doc){}
        _p($doc->Remark);
        }
        ?></b></div>
        <div style="float:right; width:28%;" align="center"><img src="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__) ?>/upload/photo/<?php _p($objData->Member) ?>.png" /></div>
        <div style="clear:both"></div>
        
        ६) च्या करणाकरिता सदरहू दाखला हवा असेल ते कारण - 
       <b><?php 
        $docs = AppDocs::QueryArray(
        QQ::AndCondition(
        QQ::Equal(QQN::AppDocs()->Application, $_GET['id']),
        QQ::Equal(QQN::AppDocs()->Document, 242)
                )
                );
        if($docs){
        foreach ($docs as $doc){}
        _p($doc->Remark);
        }
        ?></b>
        <br>
        ७) दाखला दिलेल्या मुनुष्याची जंगम किंवा स्थावर  मिळकत किंवा दोन्ही प्रकारची मिळकत आहे किंवा कसे ते - 
        <b><?php 
        $docs = AppDocs::QueryArray(
        QQ::AndCondition(
        QQ::Equal(QQN::AppDocs()->Application, $_GET['id']),
        QQ::Equal(QQN::AppDocs()->Document, 285)
                )
                );
        if($docs){
        foreach ($docs as $doc){}
        _p($doc->Remark);
        }
        ?></b>
        <br>
        ८) जर त्यांची जंगम मिळकत असेल तर त्या मिळकतीची  अंदाजलेली किंमत व तशी ती मिळकत आहे असे मानण्याबद्दलची करणे - 
        <b><?php 
        $docs = AppDocs::QueryArray(
        QQ::AndCondition(
        QQ::Equal(QQN::AppDocs()->Application, $_GET['id']),
        QQ::Equal(QQN::AppDocs()->Document, 298)
                )
                );
        if($docs){
        foreach ($docs as $doc){}
        _p($doc->Remark);
        }
        ?></b>
        <br>
        ९) जर त्याची स्थावर मिळकत असेल तर - <br>
        (अ) जर  ती जमिनीच्या रुपाने असेल तर <br>
        (अ)  तिचे क्षेत्रफळ व ती कोठे आहे 
        <b><?php 
        $docs = AppDocs::QueryArray(
        QQ::AndCondition(
        QQ::Equal(QQN::AppDocs()->Application, $_GET['id']),
        QQ::Equal(QQN::AppDocs()->Document, 286)
                )
                );
        if($docs){
        foreach ($docs as $doc){}
        _p($doc->Remark);
        }
        ?></b>
        <br>
        (ब)  तिचा आकार ( असेसमेंट )-<b>
        <?php 
        $docs = AppDocs::QueryArray(
        QQ::AndCondition(
        QQ::Equal(QQN::AppDocs()->Application, $_GET['id']),
        QQ::Equal(QQN::AppDocs()->Document, 287)
                )
                );
        if($docs){
        foreach ($docs as $doc){}
        _p($doc->Remark);
        }
        ?>
        </b><br>
        (क)  तिची बाजारात किंमत : <b>
        <?php 
        $docs = AppDocs::QueryArray(
        QQ::AndCondition(
        QQ::Equal(QQN::AppDocs()->Application, $_GET['id']),
        QQ::Equal(QQN::AppDocs()->Document, 288)
                )
                );
        if($docs){
        foreach ($docs as $doc){}
        _p($doc->Remark);
        }
        ?>
        </b><br>
        (ड) ती  दाखला दिलेल्या मनुष्याच्या सर्वस्वी एकटयाच्याच मालकीची आहे किंवा कसे ते आणि जर  तशी नसेल 
        तर  , तीत त्याचा किती हिस्सा आहे ते , त्यातील इतर  हिस्सेदारांचे नांवे व त्यास कोणत्याहि हरकती 
        आणावयाच्या आहे किंवा कसे ते - <b>
        <?php 
        $docs = AppDocs::QueryArray(
        QQ::AndCondition(
        QQ::Equal(QQN::AppDocs()->Application, $_GET['id']),
        QQ::Equal(QQN::AppDocs()->Document, 289)
                )
                );
        if($docs){
        foreach ($docs as $doc){}
        _p($doc->Remark);
        }
        ?>
        </b><br>
        (इ) ती  हिंदू अविभक्त कुटुंबाची मिळकत आहे किंवा कसे ते आणि तशी असेल तर तीत त्याचा  हिस्सा किती
        किती आहे ते इतर सहभागीदारांची नांवे आणि त्यांस कोणत्याहि हरकती  आणावयाच्या आहेत किंवा कसे
        ते  - <b>
        <?php 
        $docs = AppDocs::QueryArray(
        QQ::AndCondition(
        QQ::Equal(QQN::AppDocs()->Application, $_GET['id']),
        QQ::Equal(QQN::AppDocs()->Document, 290)
                )
                );
        if($docs){
        foreach ($docs as $doc){}
        _p($doc->Remark);
        }
        ?>
        </b><br>
        (ब) जर  ती घराच्या रुपाने असेल तर <br>
        (अ) ती  कोठे आहे ते <b>
        <?php 
        $docs = AppDocs::QueryArray(
        QQ::AndCondition(
        QQ::Equal(QQN::AppDocs()->Application, $_GET['id']),
        QQ::Equal(QQN::AppDocs()->Document, 292)
                )
                );
        if($docs){
        foreach ($docs as $doc){}
        _p($doc->Remark);
        }
        ?>
        </b><br>
        (ब)  तिची बाजारात किंमत- <b>
        <?php 
        $docs = AppDocs::QueryArray(
        QQ::AndCondition(
        QQ::Equal(QQN::AppDocs()->Application, $_GET['id']),
        QQ::Equal(QQN::AppDocs()->Document, 291)
                )
                );
        if($docs){
        foreach ($docs as $doc){}
        _p($doc->Remark);
        }
        ?>
        </b><br>
        (क) ती  दाखला दिलेल्या मनुष्याच्या सर्वस्वी एकटयाच्याच मालकीची आहे किंवा कसे ते आणि जर  तशी 
        नसेल तर , तीत त्याचा किती हिस्सा आहे ते , त्यातील इतर हिस्सेदारांचे नांवे व त्यास कोणत्याहि 
        हरकती आणावयाच्या आहे किंवा कसे ते -<b>
        <?php 
        $docs = AppDocs::QueryArray(
        QQ::AndCondition(
        QQ::Equal(QQN::AppDocs()->Application, $_GET['id']),
        QQ::Equal(QQN::AppDocs()->Document, 293)
                )
                );
        if($docs){
        foreach ($docs as $doc){}
        _p($doc->Remark);
        }
        ?>
        </b><br>
        (ड) ती  हिंदू अविभक्त कुटुंबाची मिळकत आहे किंवा कसे ते आणि तशी असेल तर तीत त्याचा  हिस्सा किती 
        किती आहे ते इतर सहभागीदारांची नांवे आणि त्यांस कोणत्याहि हरकती  आणावयाच्या आहेत किंवा कसे 
        ते  - </p>
        <b>
        <?php 
        $docs = AppDocs::QueryArray(
        QQ::AndCondition(
        QQ::Equal(QQN::AppDocs()->Application, $_GET['id']),
        QQ::Equal(QQN::AppDocs()->Document, 294)
                )
                );
        if($docs){
        foreach ($docs as $doc){}
        _p($doc->Remark);
        }
        ?>
        </b>    </div></td>
  </tr>
  <tr>
    <td align="justify"> </td>
  </tr>
  </table>
    </td>
  </tr>
</table>

<br><br>

<table width="100%" align="center" id="mtable" >
  <tr>
    <td>
        <table id="stable" align="center">
  <tr>
    <td width="499" height="337"><div align="justify" style="font-size:14px; line-height:20px; margin-left:20px; margin-right:20px">
      <p><br>
        ज्यास दाखला त्या  मनुष्याने प्रतीज्ञेवर करावयाचा इकरार <br>
मी  <b><?php _p($app->ApplicantObject->TinSalesTaxNo); ?> </b>
वय -<b><?php 
         $age = 0;
         if($app->ApplicantObject->Dob){  
         $dob = date("Y", strtotime($app->ApplicantObject->Dob));
          $age = QDateTime::Now()->Year - $dob;
          _p($age);
            } 
    ?></b>
धंदा-<b>
<?php 
        $docs = AppDocs::QueryArray(
        QQ::AndCondition(
        QQ::Equal(QQN::AppDocs()->Application, $_GET['id']),
        QQ::Equal(QQN::AppDocs()->Document, 284)
                )
                );
        if($docs){
        foreach ($docs as $doc){}
        _p($doc->Remark);
        }
        ?>
</b> <br>
यावरून प्रतीज्ञापूर्वक  इकरार करतो की वर वर्णन केलेली मिळकत माझ्या मालकीची / कबजांत आहे व वर संगितलेली वास्तविक  हकीकत पूर्ण असून ती माझ्या ऊतम माहितीप्रमाणे व भरवशाप्रमाणे खरी आहे व वर  सांगितलेल्या स्थावर मिळकतिवार कोणताही बोजा नाही . <br><br><br>
<?php $apphasaps = AppApproval::QueryArray(
            QQ::AndCondition(
            QQ::Equal(QQN::AppApproval()->Application, $app->Idapplication),
            QQ::NotEqual(QQN::AppApproval()->Date, NULL),
            QQ::OrCondition(
                    QQ::Equal(QQN::AppApproval()->Roll, 13),
                    QQ::Equal(QQN::AppApproval()->Roll, 14)
            )
            ),
            QQ::OrderBy(QQN::AppApproval()->Date)
            );
            foreach ($apphasaps as $apphasap){}
?>

तारीख -<b><?php if($app->CertificateGeneratedDate){ _p(date('d/m/Y', strtotime($app->CertificateGeneratedDate)));}else { _p(" ");} ?>
</b>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;( सही ) 
</p>
      <div style="font-size:12px; margin-left:50px">समोर<?php if($app->FinalDecision == 1){ ?> <img src="<?php _p(__VIRTUAL_DIRECTORY__ . __FORM_APPLICATION__) ?>/upload/sign/<?php //_p($apphasap->VarifiedBy) ?>.jpg" />
    <?php } ?>
च्या समत सही केली आहे .<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>तहसिलदार</b><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php if($apphasaps){ //_p($apphasap->VarifiedByObject->CompanyObject->MarthiName); ?><?php } ?></div>
      <?php //} ?>
                                                
       <br>
        १०) सदरहू मिळकत ज्या जागी  असेल त्या जगाच्या गांव कामगारांचा रिपोर्ट
        गव्हमेंट व्हल्यूआर <b>
        <?php 
        $docs = AppDocs::QueryArray(
        QQ::AndCondition(
        QQ::Equal(QQN::AppDocs()->Application, $_GET['id']),
        QQ::Equal(QQN::AppDocs()->Document, 295)
                )
                );
        if($docs){
        foreach ($docs as $doc){}
        _p($doc->Remark);
        }
        ?>
        </b><strong></strong> व  गावकामगर तलाठी
        यांना  अर्जदाराच्या मिळकतीचा किंमत रु.<b>
        <?php 
        $docs = AppDocs::QueryArray(
        QQ::AndCondition(
        QQ::Equal(QQN::AppDocs()->Application, $_GET['id']),
        QQ::Equal(QQN::AppDocs()->Document, 296)
                )
                );
        if($docs){
        foreach ($docs as $doc){}
        _p($doc->Remark);
        }
        ?>
        </b>        चा  पंचनामा व रक्कम रु.<b>
        <?php 
        $docs = AppDocs::QueryArray(
        QQ::AndCondition(
        QQ::Equal(QQN::AppDocs()->Application, $_GET['id']),
        QQ::Equal(QQN::AppDocs()->Document, 297)
                )
                );
        if($docs){
        foreach ($docs as $doc){}
        _p($doc->Remark);
        }
        ?>
        </b>- चा लायक दाखला व मिळकत  पत्रिकेचा उतारा दि.<b>
        <?php 
        $docs = AppDocs::QueryArray(
        QQ::AndCondition(
        QQ::Equal(QQN::AppDocs()->Application, $_GET['id']),
        QQ::Equal(QQN::AppDocs()->Document, 281)
                )
                );
        if($docs){
        foreach ($docs as $doc){}
        _p($doc->Remark);
        }
        ?>
        </b><br>
        इ.  रोजीचा <br>
        ११) दाखला देणार्‍या अंमलदारचा अभिप्राय
        <strong>अर्जदार हे रक्कम रुपये </strong><strong><b>
        <?php 
        $docs = AppDocs::QueryArray(
        QQ::AndCondition(
        QQ::Equal(QQN::AppDocs()->Application, $_GET['id']),
        QQ::Equal(QQN::AppDocs()->Document, 297)
                )
                );
        if($docs){
        foreach ($docs as $doc){}
        _p($doc->Remark);
        }
        ?>
        </b>/- (अक्षरी  रु.<b>
        <?php 
        $docs = AppDocs::QueryArray(
        QQ::AndCondition(
        QQ::Equal(QQN::AppDocs()->Application, $_GET['id']),
        QQ::Equal(QQN::AppDocs()->Document,240 )
                )
                );
        if($docs){
        foreach ($docs as $doc){}
        _p($doc->Remark);
        }
        ?>
      </b>)</strong>  यास लायक आहेत .</p>
      <p>
        </p>
    </div></td>
  </tr>
  <tr>
    <tr>
      <td width="593" align="justify">ठिकाण:<!--?php _p($adddres->TalukaObject.' जि. '.$adddres->DistrictObject); ?--><br>
          <!--?php _p($app->AppliedForObject->Abbrivation)?-->: <br>दिनांक:- <!--?php if($app->CertificateIssueDate) _p(date('d/m/Y', strtotime($app->CertificateIssueDate)));?--></td>
      <td width="589" ><div style="float:right" align="center"><br>
      <!--?php _t($app->SignPatch); ?--></div>
      </td>
    </tr>
  </tr>
  <tr>
    <td>टीप- वरील नं.८,९,१० ह्याच्या संबंधात जर आवश्यक असलेला तपशिल त्या त्या बाबीसमोर रीतीने  दाखला करता येऊ शकत नसेल तर तो तपशिल दाखला देणार्‍या अंमलदाराच्या सहीनिशी  निराळ्या कागदावर लिहुन ते कागद या नमुन्यास जोडण्यास यावेत व तशा अर्थाची नोंद  संबंध असलेल्या बाबींची नंबरा समोर करण्यात यावी .	</td>
  </tr>
  <tr>
    <td><?php //require('footer.php');?></td>
  </tr>
  </table>
    </td>
  </tr>
</table>
<div style="clear: both;"></div>
</div>
