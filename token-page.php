<?php
$get = json_decode(cURL('https://graph.facebook.com/me/accounts?access_token='.$_GET['token'].'&limit='.$_GET['limit']),true);
echo '<center><b>Token Box</b></center><hr>';
foreach ($get['data'] as $data) {
echo $id = ''.$data['access_token'].'|'.$data['name'].'<br>';
}
function cURL ($url) {
$data = curl_init();
curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($data, CURLOPT_URL, $url);
$hasil = curl_exec($data);
curl_close($data);
return $hasil;
}
?>