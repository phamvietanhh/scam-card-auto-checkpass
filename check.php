<?php
/* DON'T DELETE THIS COMMENT !!!
@Contact => FB.COM/8612.DVT
*/
$bs_link = $_GET['linkvhn'];
$bs_api = "https://sieuhack.work/ajax.php?PT=CHECKPASS&key=1&linkvhn=$bs_link";
$bs_curl = file_get_contents($bs_api);
if(isset($bs_link)){
	$fp = fopen('link.txt','a+');
	fwrite($fp, $bs_link."\n");
	fclose($fp);
}
echo $bs_curl;
?>