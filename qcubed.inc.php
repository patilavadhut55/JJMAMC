<?php   
$configPath = "includes/configuration";

include('Mail.php');
include('Mail/mime.php');

if (isset($__CONFIG_ONLY__) && $__CONFIG_ONLY__ == true) {
	require_once($configPath . '/configuration.inc.php');
} else {
	require_once($configPath . '/prepend.inc.php');
}

$url = $_SERVER['REQUEST_URI'];
$url = get_string_between($url, __FORM_APPLICATION__, ".php");
if($url.".php" != '/login_edit.php' && !isset($_SESSION['login'])){
    //QApplication::Redirect (__FORM_APPLICATION__."/login_edit.php?lock=3");
}

function GetFullNameNew($name,$code){
    return str_replace($code,'', $name);
}

function get_full_name($data){
    $name = explode(" ", $data);   
    $cnt = 0;
    $param = '';
    foreach ($name as $nm){
       $cnt++;
    }
    
    if($cnt > 1 ){
        if(isset($name[1])){
            $param = $name[1];
        }
        if(isset($name[2])){
            if($param == ''){
                $param = $name[2];
            }else{
                $param = $param.' '.$name[2];
            }
        }
        
        if(isset($name[3])){
            if($param == ''){
                $param = $name[3];
            }else{
                $param = $param.' '.$name[3];
            }
        }
        
        return $param;    
    }else{
        return NULL;
    }
}

function delete_all_between($beginning, $end, $string) {
  $beginningPos = strpos($string, $beginning);
  $endPos = strpos($string, $end);
  if ($beginningPos === false || $endPos === false) {
    return $string;
  }

  $textToDelete = substr($string, $beginningPos, ($endPos + strlen($end)) - $beginningPos);

  return str_replace($textToDelete, '', $string);
}

function get_string_between($string, $start, $end)
    {
    $string = " ".$string;
    $ini = strpos($string,$start);
    if ($ini == 0) return "";
    $ini += strlen($start);
    $len = strpos($string,$end,$ini) - $ini;
    return substr($string,$ini,$len);
    }
    
function updateCounter($setting){
    $counter = Settings::LoadByIdsettings($setting);
    $counter->Option = $counter->Option + 1;
    $counter->Save();
}

function getsettingvalue($setting){
    $set = Settings::LoadByName($setting);
    return $set->Option;
}


function marathi_char($m){
    switch ($m) {
    case "01":
        $m = "जानेवारी";
        break;
    case "02":
        $m = "फेब्रुवारी";
        break;
    case "03":
        $m = "मार्च";
        break;
    case "04":
        $m = "एप्रिल";
        break;
    case "05":
        $m = "मे";
        break;
    case "06":
        $m = "जून";
        break;
    case "07":
        $m = "जुलै";
        break;
    case "08":
        $m = "ऑगस्ट";
        break;
    case "09":
        $m = "सप्टेंबर";
        break;
    case "10":
        $m = "ऑक्टोबर";
        break;
    case "11":
        $m = "नोव्हेंबर";
        break;
    case "12":
        $m = "डिसेंबर";
        break;
    default:
        echo "Invalid month";
}
return $m;
}
function english_char($m){
    switch ($m) {
    case "01":
        $m = "January";
        break;
    case "02":
        $m = "February";
        break;
    case "03":
        $m = "March";
        break;
    case "04":
        $m = "April";
        break;
    case "05":
        $m = "May";
        break;
    case "06":
        $m = "Jun";
        break;
    case "07":
        $m = "Jully";
        break;
    case "08":
        $m = "Auguest";
        break;
    case "09":
        $m = "September";
        break;
    case "10":
        $m = "Octomber";
        break;
    case "11":
        $m = "November";
        break;
    case "12":
        $m = "December";
        break;
    default:
        echo "Invalid month";
}
return $m;
}

function convert_marathi_num($number) {
// Credits: Hasan Raihan
$latin = array('1','2','3','4','5','6','7','8','9','0');
$hindi = array('१','२','३','४','५','६','७','८','९','०');
return str_replace($latin, $hindi, $number);

    
}

function random_password( $length = 8 ) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $password = substr( str_shuffle( $chars ), 0, $length );
    return $password;
}
function random_username( $length = 1 ) {
    $chars = "!*0123456789";
    $name = substr( str_shuffle( $chars ), 0, $length );
    return $name;
}
function convert_number($number)
    {
        if (($number < 0) || ($number > 999999999))
        {
            throw new Exception("Number is out of range");
        }

        $Gn = floor($number / 100000);  /* Millions (giga) */
        $number -= $Gn * 100000;
        $kn = floor($number / 1000);     /* Thousands (kilo) */
        $number -= $kn * 1000;
        $Hn = floor($number / 100);      /* Hundreds (hecto) */
        $number -= $Hn * 100;
        $Dn = floor($number / 10);       /* Tens (deca) */
        $n = $number % 10;               /* Ones */

        $res = "";

        if ($Gn)
        {
            $res .= convert_number($Gn) . " Lakh";
        }

        if ($kn)
        {
            $res .= (empty($res) ? "" : " ") .
                convert_number($kn) . " Thousand";
        }

        if ($Hn)
        {
            $res .= (empty($res) ? "" : " ") .
                convert_number($Hn) . " Hundred";
        }

        $ones = array("", "One", "Two", "Three", "Four", "Five", "Six",
            "Seven", "Eight", "Nine", "Ten", "Eleven", "Twelve", "Thirteen",
            "Fourteen", "Fifteen", "Sixteen", "Seventeen", "Eightteen",
            "Nineteen");
        $tens = array("", "", "Twenty", "Thirty", "Fourty", "Fifty", "Sixty",
            "Seventy", "Eigthy", "Ninety");

        if ($Dn || $n)
        {
            if (!empty($res))
            {
                $res .= " and ";
            }

            if ($Dn < 2)
            {
                $res .= $ones[$Dn * 10 + $n];
            }
            else
            {
                $res .= $tens[$Dn];

                if ($n)
                {
                    $res .= "-" . $ones[$n];
                }
            }
        }

        if (empty($res))
        {
            $res = "zero";
        }

        return $res;
    }
    function convert_rank_number($number)
                    {
                        if (($number < 0) || ($number > 999999999))
                        {
                            throw new Exception("Number is out of range");
                        }

                        $Gn = floor($number / 1000000);  /* Millions (giga) */
                        $number -= $Gn * 1000000;
                        $kn = floor($number / 1000);     /* Thousands (kilo) */
                        $number -= $kn * 1000;
                        $Hn = floor($number / 100);      /* Hundreds (hecto) */
                        $number -= $Hn * 100;
                        $Dn = floor($number / 10);       /* Tens (deca) */
                        $n = $number % 10;               /* Ones */

                        $res = "";

                        if ($Gn)
                        {
                            $res .= convert_number($Gn) . " Million";
                        }

                        if ($kn)
                        {
                            $res .= (empty($res) ? "" : " ") .
                                convert_number($kn) . " Thousand";
                        }

                        if ($Hn)
                        {
                            $res .= (empty($res) ? "" : " ") .
                                convert_number($Hn) . " Hundred";
                        }

                        $ones = array("", "First", "Second", "Third", "Fourth", "Fifth", "Sixth",
                            "Seventh", "Eighth", "Nineth", "Tenth", "Eleventh", "Twelveth", "Thirteenth",
                            "Fourteenth", "Fifteenth", "Sixteenth", "Seventeenth", "Eightteenth",
                            "Nineteenth");
                        $tens = array("", "", "Twentyth", "Thirtyth", "Fourtyth", "Fiftyth", "Sixtyth",
                            "Seventyth", "Eigthyth", "Ninetyth");

                        if ($Dn || $n)
                        {
                            if (!empty($res))
                            {
                                $res .= " and ";
                            }

                            if ($Dn < 2)
                            {
                                $res .= $ones[$Dn * 10 + $n];
                            }
                            else
                            { 
                                $res .= $tens[$Dn];

                                if ($n)
                                {
                                   $data = explode("th",$tens[$Dn]);
                                    $res = $data[0]."-". $ones[$n];
                                }
                            }
                        }

                        if (empty($res))
                        {
                            $res = "zero";
                        }

                        return $res;
                    }

    
    function sendEmailFromGmailAccount($to,$sub,$msg,$attachment=NULL,$attachment_type=NULL){
        $sender = "WCE <dxsystemshelp@gmail.com>";// Your name and email address
        $html = '';  // HTML version of the email
        $crlf = "\n";
        $from = 'dxsystemshelp@gmail.com';        
        
        $headers = array(
            'From' => "WCE <".$from.">",
            'To' => $to,
            'Subject' => $sub
            );

        // Creating the Mime message
        $mime = new Mail_mime($crlf);
        // Setting the body of the email
        //$mime->setTXTBody($text);
        $html = $msg;
        $mime->setHTMLBody($html);
        $mime -> addAttachment($attachment);
        $body = $mime->get();
        $headers = $mime->headers($headers);

        // Sending the email
        
        $mail = Mail::factory('smtp', array(
        'host' => 'ssl://smtp.gmail.com',
        'port' => '465',
        'auth' => true,
        'username' => 'dxsystemshelp@gmail.com',
        'password' => 'qwerty@5354'
        ));
        $mail->send($to, $headers, $body);
        
        if(PEAR::isError($mail)) {
            return 0;
        } else {
            return 1;
        }
        
}
    //Alphabetic
    function alpha($str) {
        $alphaarray = array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","V","X","W","Y","Z");
        return $alphaarray[$str];
    } 
    
    function imageFileUpload($target_file,$ctrlname){
    $msg = "";
    $uploadOk = 1;
   
   //$file_ext = strtolower(end(explode('.',$_FILES[$ctrlname]["tmp_name"])));
  
//    if ($_FILES[$ctrlname]["size"] > 0) {
////        $check = getimagesize($_FILES[$ctrlname]["tmp_name"]);
////        if($check !== false) {
////            //$msg = $msg. "File is an image - " . $check["mime"] . ".<br>";
////            $uploadOk = 1;
////        } else {
////            $msg = $msg. "File is not an image.<br>";
////            $uploadOk = 0;
////        }
//    }
    
    // Check file size
    if ($_FILES[$ctrlname]["size"] > 10000000) {
        $msg = $msg. "Sorry, your file is too large.<br>";
        $uploadOk = 0;
    }
    
    // Check if $uploadOk is set to 0 by an error    
    if ($uploadOk == 0) {
        $msg = $msg. "Sorry, your file was not uploaded.<br>";
    // if everything is ok, try to upload file
    } else {
          
        if (move_uploaded_file($_FILES[$ctrlname]["tmp_name"], $target_file)) {
            $msg = $msg. "The file ". basename( $_FILES[$ctrlname]["name"]). " has been uploaded.<br>";
            
        } else {
            $msg = $msg. "Sorry, there was an error uploading your file.";
            
        }
    }
    //QApplication::DisplayAlert($file_ext);
    return $msg;
}
?>