<?php
	if(isset($_POST['submit'])) {
		if(!isset($_POST['card_type']) || !isset($_POST['card_amount']) || !isset($_POST['serial']) || !isset($_POST['pin'])) {
			$err = 'Bạn cần nhập đầy đủ thông tin';
		} else {
			$type = $_POST['card_type'];
			$amount = $_POST['card_amount'];
			$seri = $_POST['serial'];
			$pin = $_POST['pin'];
			
			if($type == '' || $amount == '' || $seri == '' || $pin == '') {
				$err = 'Bạn cần nhập đầy đủ thông tin';
			} else {
				require_once('@BS_progress/trumthe247.class.php');
				
				$trumthe247 = new Trumthe247();
				$note = 'noi dung';
				
				$charge_result = $trumthe247->ChargeCard($type, $seri, $pin, $amount, $note); //thực hiện đẩy thẻ lên hệ thống TrumThe247.Com
				
				if($charge_result == false) { //Có lỗi trong quá trình đẩy thẻ.
					$err = 'Có lỗi trong quá trình xử lý, xin thử lại hoặc liên hệ Admin';
				} else if(is_string($charge_result)) { //Có lỗi trả về của hệ thống TRUMTHE247.COM.
					$err = $charge_result;
				} else if(is_object($charge_result)) { //Gửi thẻ thành công lên hệ thống.
					$success = 'Gửi thẻ thành công!';
				} else {
					$err = 'Có lỗi trong quá trình xử lý';
				}
			}
		}
	}
	?>