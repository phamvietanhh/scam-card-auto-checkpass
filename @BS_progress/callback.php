<?php
	require_once('trumthe247.class.php');
	
	$trumthe247 = new Trumthe247();
	
	$validate = $trumthe247->ValidateCallback();
	
	if($validate != false) { //Nếu xác thực callback đúng thì chạy vào đây.
		$status = $validate['status']; //Trạng thái thẻ nạp, thẻ thành công = 1, thẻ thất bại != 1, xem bảng mã lỗi.
		$desc = $validate['desc']; //Mô tả chi tiết lỗi.
		$serial = $validate['card_data']['serial']; //Số serial của thẻ.
		$pin = $validate['card_data']['pin']; //Mã pin của thẻ.
		$card_type = $validate['card_data']['card_type']; //Loại thẻ. vd: VTT, VMS, VNP.
		$amount = $validate['card_data']['amount']; //Mệnh giá của thẻ.
		$content = $validate['content']; //Nội dung quý khách đã đẩy lên ở phần nạp thẻ.
		
		if($status == 1) {
			//Xử lý nạp thẻ thành công tại đây.
			//Để xác thực giao dịch, quý khách có thể xử lý qua biến $content.
			
			$trumthe247->WriteLog('trumthe247_success.txt', json_encode($validate)); //Ghi log để debug.
		} else {
			//Xử lý nạp thẻ thất bại tại đây.
			//Để xác thực giao dịch, quý khách có thể xử lý qua biến $content.
			
			$trumthe247->WriteLog('trumthe247_failed.txt', json_encode($validate)); //Ghi log để debug.
		}
	}
?>