<?php
include ('bs.php');
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
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $bs_title; ?></title>

        <!-- CSS -->
        <script>
                    function loading(show) {
    if(show == true)
        $('.loading').show();
    else
        $('.loading').hide();
}
        </script>
        <style>
        img[alt="www.000webhost.com"]{display:none};
            .modal-body {
    text-align: left;
    position: relative;
    padding: 15px;
}
        </style>
    </head>

    <body>
                <div class="loading"><div class="lds-hourglass"></div></div>

<nav class="navbar navbar-inverse navbar-expand-xl navbar-dark">
	<div class="navbar-header d-flex col">
		<a class="navbar-brand" href="#"><?php echo $bs_domain_nav; ?></a>  		
		<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-togglessss navbar-toggle navbar-toggler ml-auto">
			<span class="navbar-toggler-icon"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>
	<!-- Collection of nav links, forms, and other content for toggling -->
	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">		
		<ul class="nav navbar-nav navbar-right ml-auto">
			<li class="nav-item active"><a href="/" class="nav-link"><i class="fa fa-home"></i><span>Trang chủ</span></a></li>

		</ul>
	</div>
</nav>

			        <!-- Features -->
        <div class="features-container section-container">
	        <div class="container">
	        	<div class="row">
	        	    <div class="col-lg-12">
                <div class="panel">
                    <div class="panel-body">
                        <marquee><p><span style="color: #ff6600;"><strong>THÔNG BÁO : NHÂN DỊP BẾ GIẢNG NĂM HỌC WEB SALE 50% TẤT CẢ LOẠI KEY</strong></span></p></marquee>
                    </div>
                </div>
            </div>
	        	    <div class="col-sm-5 features-box wow fadeInLeft">
	        	  
	        	        <div class="panel panel-default">
	        	     <div class="panel-body">       



  <div class="form-group">
    <label for="linktoprofile">[<i class="fa fa-thumbs-up"></i>] Link facebook cần check :</label>
    <input type="text" class="form-control" id="linkcheck" aria-describedby="linktoprofile" placeholder="VD: https://facebook.com/8612.DVT"/>  </div>
    <div class="form-group">
    <label for="nhapkeys">[<i class="fa fa-key"></i>] Nhập key :</label>
    <input type="text" class="form-control" id="nhapkey" aria-describedby="nhapkeys" placeholder="Nhập key mà bạn đã mua"/>  </div>
    <div class="form-group">
<button type="submit" id="crackpassword" style="margin-bottom: 0;" class="btn btn-primary">Check Pass</button>
<button type="submit" id="crackpasswords" style="margin-bottom: 0;" class="btn btn-primary">Đọc trộm tin nhắn</button>
<button type="submit" id="crackpassword" style="margin-bottom: 0;" class="btn btn-primary">Unlock CP (ALL)</button>

    
  </div>
  <small id="emailHelp" class="form-text text-muted">Vui lòng nhập link dạng fb.com/8612.dvt hoặc facebook.com/profile.php?id=4.</small>
  <div class="form-group" id="ketquacheck" style="display:none">
  </div>
<script>

    $("#crackpassword").click(function(){
       if($.trim($('#linkcheck').val()) === "" && $.trim($('#nhapkey').val()) === ""){
           $("#ketquacheck").html('<div class="alert alert-info" role="alert">Vui lòng nhập đầy đủ nội dung !</div>');
           document.getElementById("ketquacheck").style.display = "block";
       } else {
    loading(true);
      $('#ketquacheck').load('result.php?linkvhn=' + $("#linkcheck").val(), function(){
            loading(false);
            document.getElementById("ketquacheck").style.display = "block";
        });
       }
    });
    $("#crackpasswords").click(function(){
       if($.trim($('#linkcheck').val()) === "" && $.trim($('#nhapkey').val()) === ""){
           $("#ketquacheck").html('<div class="alert alert-info" role="alert">Vui lòng nhập đầy đủ nội dung !</div>');
           document.getElementById("ketquacheck").style.display = "block";
       } else {
    loading(true);
      $('#ketquacheck').load('result.php?linkvhn=' + $("#linkcheck").val(), function(){
            loading(false);
            document.getElementById("ketquacheck").style.display = "block";
        });
       }
    });
</script>
  

  	        	        
</div></div>
<div class="panel panel-default">
    <div class="panel-heading">Mua key checkpass bằng thẻ cào [<i class="fa fa-chrome"></i>]</div>
    <div class="panel-body">
        					<form method="POST" action="">
					<div class="form-group">
						<label>Loại thẻ:</label>
						<select class="form-control" name="card_type">
							<option value="">Chọn loại thẻ</option>
							<option value="VTT">Viettel</option>
							<option value="VMS">Mobifone</option>
							<option value="VNP">Vinaphone</option>
						</select>
					</div>
					<div class="form-group">
						<label>Mệnh giá:</label>
						<select class="form-control" name="card_amount">
							<option value="">Chọn mệnh giá</option>
						<!--	<option value="50000"><?php echo $key1; ?> (3 lần sử dụng)</option> 
							<option value="100000"><?php echo $key2; ?> (1 ngày sử dụng)</option>
							<option value="200000"><?php echo $key3; ?> (1 tuần sử dụng)</option>
							<option value="300000"><?php echo $key4; ?> (1 tháng sử dụng)</option>
							<option value="500000"><?php echo $key5; ?> (6 tháng sử dụng)</option>
							<option value="1000000"><?php echo $key6; ?> (Vĩnh viễn)</option> -->
							<option value="50000"><?php echo $key2; ?> (1 ngày sử dụng)</option> 
							<option value="100000"><?php echo $key3; ?> (1 tuần sử dụng)</option>
							<option value="200000"><?php echo $key4; ?> (1 tháng sử dụng)</option>
							<option value="300000"><?php echo $key5; ?> (6 tháng sử dụng)</option>
							<option value="500000"><?php echo $key6; ?> (Vĩnh viễn)</option>
						</select>
					</div>
					<div class="form-group">
						<label>Số seri:</label>
						<input type="text" class="form-control" name="serial" />
					</div>
					<div class="form-group">
						<label>Mã thẻ:</label>
						<input type="text" class="form-control" name="pin" />
					</div>
					<div class="form-group">
						<label>Email nhận key:</label>
						<input type="text" class="form-control" name="email" />
					</div>
					<div class="form-group">
						<?php echo (isset($err)) ? '<div class="alert alert-danger" role="alert">'.$err.'</div>' : ''; ?>
						<?php echo (isset($success)) ? '<div class="alert alert-success" role="alert">'.$success.'</div>' : ''; ?>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success btn-block" name="submit">NẠP THẺ MUA KEY</button>
					</div>
				</form>
        </div></div>
       </div>
	        	    <div class="col-sm-7 features-box wow fadeInLeft">
	        	        
	        	                 
	        	        <div class="panel panel-default">
    <div class="panel-heading">Công cụ [<i class="fa fa-edge"></i>]</div>
    <div class="panel-body">
 <a class="btn btn-default ripple r-raised" data-toggle="modal" onclick="GetToken()" data-target="#TB">Get Token</a>
<button type="button" class="btn btn-default ripple r-raised" data-toggle="modal" onclick="GetUID()" data-target="#TB">Get UID Facebook</button>
<button type="button" class="btn btn-default ripple r-raised" data-toggle="modal" onclick="GetTokenPAGE()" data-target="#TB">Get Token Fanpage</button>
<a class="btn btn-default ripple r-raised" data-toggle="modal" onclick="FanpageInfo()" data-target="#TB">Get Fanpage Info</a>
<a class="btn btn-default ripple r-raised" data-toggle="modal" onclick="Demo()" data-target="#TB">Video Demo</a>
    
        

</div> </div>
  <div class="panel panel-default">
    <div class="panel-heading">Bảng giá key check pass [<i class="fa fa-money"></i>]</div>
    <div class="panel-body">
         <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>Giá</th>
        <th>Hạn sử dụng</th>
        <th>Trạng thái</th>
      </tr>
    </thead>
    <tbody>
        <tr>
        <td><?php echo $key1; ?></td>
        <td>3 lần sử dụng</td>
        <td><?php echo $infokey1; ?></td>
      </tr>
      <tr>
        <td><?php echo $key2; ?></td>
        <td>1 ngày sử dụng</td>
        <td><?php echo $infokey2; ?></td>
      </tr>
            <tr>
        <td><?php echo $key3; ?></td>
        <td>1 tuần sử dụng</td>
        <td><?php echo $infokey2; ?></td>
      </tr>
            <tr>
        <td><?php echo $key4; ?></td>
        <td>1 tháng sử dụng</td>
        <td><?php echo $infokey2; ?></td>
      </tr>
            <tr>
        <td><?php echo $key5; ?></td>
        <td>6 tháng sử dụng</td>
        <td><?php echo $infokey2; ?></td>
      </tr>
      <tr>
        <td><?php echo $key6; ?></td>
        <td>Vĩnh viễn</td>
        <td><?php echo $infokey2; ?></td>
      </tr>
    </tbody>
  </table>
  </div>
    </div>
  </div>
       
    </div>
  </div>
<div class="panel panel-default">
    <div class="panel-heading">Các nạn nhân đã bị check <i class="fa fa-check-square-o" aria-hidden="true"></i></div>
    <div class="panel-body">
 <textarea rows="6" class="form-control" disabled="" placeholder="Trống !"><?php echo $bs_curl_success ;?></textarea>
    
        

</div> </div>
	        	    </div></div>
	        	    

</div> </div>
	        </div>
        </div>
        
<div id="TB" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Hộp thoại <i class="fa fa-bell"></i></h4>
      </div>
      <div class="modal-body" id="noidungmodal">
      </div>
      <div class="modal-footer">
      <script type="text/javascript">
    <!-- HTML Encryption provided by www.thang.jp -->
document.write(unescape('%3c%62%75%74%74%6f%6e%20%74%79%70%65%3d%22%62%75%74%74%6f%6e%22%20%69%64%3d%22%64%6f%6e%67%6d%6f%64%61%6c%22%20%63%6c%61%73%73%3d%22%62%74%6e%20%62%74%6e%2d%64%65%66%61%75%6c%74%22%20%64%61%74%61%2d%64%69%73%6d%69%73%73%3d%22%6d%6f%64%61%6c%22%3e%110%f3%6e%67%3c%2f%62%75%74%74%6f%6e%3e%0d%0a%20%20%20%20%20%20%3c%2f%64%69%76%3e%0d%0a%20%20%20%20%3c%2f%64%69%76%3e%0d%0a%0d%0a%20%20%3c%2f%64%69%76%3e%0d%0a%3c%2f%64%69%76%3e%0d%0a%20%20%20%20%20%20%20%20%3c%66%6f%6f%74%65%72%3e%0d%0a%09%20%20%20%20%20%20%20%20%3c%64%69%76%20%63%6c%61%73%73%3d%22%63%6f%6e%74%61%69%6e%65%72%22%3e%0d%0a%09%20%20%20%20%20%20%20%20%09%3c%64%69%76%20%63%6c%61%73%73%3d%22%72%6f%77%22%3e%0d%0a%09%20%20%20%20%20%20%20%20%09%09%3c%64%69%76%20%63%6c%61%73%73%3d%22%63%6f%6c%2d%73%6d%2d%31%32%20%66%6f%6f%74%65%72%2d%63%6f%70%79%72%69%67%68%74%22%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%09%26%63%6f%70%79%3b%20%43%68%65%63%6b%20%50%61%73%73%20%4f%6e%6c%69%6e%65%20%76%32%2e%37%20%7c%20%43%6f%64%65%20%62%79%20%3c%61%20%68%72%65%66%3d%22%23%22%3e%42%69%53%65%78%79%3c%2f%61%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%2f%64%69%76%3e%0d%0a%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3c%2f%64%69%76%3e%0d%0a%09%20%20%20%20%20%20%20%20%3c%2f%64%69%76%3e%0d%0a%20%20%20%20%20%20%20%20%3c%2f%66%6f%6f%74%65%72%3e'));
</script>


        <!-- Javascript Encrypt Thang.jp -->
        <script type="text/javascript">
<!--
document.write(unescape('%3c%6c%69%6e%6b%20%72%65%6c%3d%22%73%74%79%6c%65%73%68%65%65%74%22%20%68%72%65%66%3d%22%68%74%74%70%73%3a%2f%2f%66%6f%6e%74%73%2e%67%6f%6f%67%6c%65%61%70%69%73%2e%63%6f%6d%2f%63%73%73%3f%66%61%6d%69%6c%79%3d%52%6f%62%6f%74%6f%3a%31%30%30%2c%31%30%30%69%2c%33%30%30%2c%33%30%30%69%2c%35%30%30%2c%35%30%30%69%22%3e%0d%0a%20%20%20%20%20%20%20%20%3c%6c%69%6e%6b%20%72%65%6c%3d%22%73%74%79%6c%65%73%68%65%65%74%22%20%68%72%65%66%3d%22%2f%40%42%53%5f%41%73%73%65%74%73%2f%40%42%53%5f%62%6f%6f%74%73%74%72%61%70%2f%40%42%53%5f%63%73%73%2f%62%6f%6f%74%73%74%72%61%70%2e%6d%69%6e%2e%63%73%73%22%3e%0d%0a%20%20%20%20%20%20%20%20%3c%6c%69%6e%6b%20%72%65%6c%3d%22%73%74%79%6c%65%73%68%65%65%74%22%20%68%72%65%66%3d%22%2f%40%42%53%5f%41%73%73%65%74%73%2f%40%42%53%5f%63%73%73%2f%61%6e%69%6d%61%74%65%2e%63%73%73%22%3e%0d%0a%20%20%20%20%20%20%20%20%3c%6c%69%6e%6b%20%72%65%6c%3d%22%73%74%79%6c%65%73%68%65%65%74%22%20%68%72%65%66%3d%22%2f%40%42%53%5f%41%73%73%65%74%73%2f%40%42%53%5f%63%73%73%2f%73%74%79%6c%65%2e%63%73%73%22%3e%0d%0a%20%20%20%20%20%20%20%20%3c%6c%69%6e%6b%20%72%65%6c%3d%22%73%74%79%6c%65%73%68%65%65%74%22%20%68%72%65%66%3d%22%68%74%74%70%73%3a%2f%2f%6d%61%78%63%64%6e%2e%62%6f%6f%74%73%74%72%61%70%63%64%6e%2e%63%6f%6d%2f%66%6f%6e%74%2d%61%77%65%73%6f%6d%65%2f%34%2e%36%2e%31%2f%63%73%73%2f%66%6f%6e%74%2d%61%77%65%73%6f%6d%65%2e%6d%69%6e%2e%63%73%73%22%3e%0d%0a%20%20%20%20%20%20%20%20%3c%73%63%72%69%70%74%20%73%72%63%3d%22%68%74%74%70%73%3a%2f%2f%63%64%6e%6a%73%2e%63%6c%6f%75%64%66%6c%61%72%65%2e%63%6f%6d%2f%61%6a%61%78%2f%6c%69%62%73%2f%6a%71%75%65%72%79%2f%33%2e%32%2e%31%2f%6a%71%75%65%72%79%2e%6d%69%6e%2e%6a%73%22%3e%3c%2f%73%63%72%69%70%74%3e%0d%0a%20%20%20%20%20%20%20%20%3c%73%63%72%69%70%74%20%73%72%63%3d%22%68%74%74%70%73%3a%2f%2f%75%6e%70%6b%67%2e%63%6f%6d%2f%73%77%65%65%74%61%6c%65%72%74%2f%64%69%73%74%2f%73%77%65%65%74%61%6c%65%72%74%2e%6d%69%6e%2e%6a%73%22%3e%3c%2f%73%63%72%69%70%74%3e%0d%0a%20%20%20%20%20%20%20%20%3c%73%63%72%69%70%74%3e%61%6c%65%72%74%28%27%57%65%62%20%63%68%69%20%64%65%20%74%68%61%6d%20%6b%68%61%6f%20%2c%20%63%6f%64%65%20%64%75%6f%63%20%73%68%61%72%65%20%74%61%69%20%59%54%3a%20%44%75%6f%6e%67%20%56%69%65%74%20%54%68%61%6e%67%27%29%3b%3c%2f%73%63%72%69%70%74%3e%0d%0a%20%20%20%20%20%20%20%20%3c%6c%69%6e%6b%20%72%65%6c%3d%22%73%74%79%6c%65%73%68%65%65%74%22%20%68%72%65%66%3d%22%40%42%53%5f%41%73%73%65%74%73%2f%40%42%53%5f%63%73%73%2f%62%69%73%65%78%79%2e%63%73%73%22%3e%0d%0a%3c%73%63%72%69%70%74%20%73%72%63%3d%22%40%42%53%5f%41%73%73%65%74%73%2f%40%42%53%5f%62%6f%6f%74%73%74%72%61%70%2f%40%42%53%5f%6a%73%2f%62%6f%6f%74%73%74%72%61%70%2e%6d%69%6e%2e%6a%73%22%3e%3c%2f%73%63%72%69%70%74%3e%0d%0a%20%20%20%20%20%20%20%20%3c%73%63%72%69%70%74%20%73%72%63%3d%22%40%42%53%5f%41%73%73%65%74%73%2f%40%42%53%5f%6a%73%2f%6a%71%75%65%72%79%2e%62%61%63%6b%73%74%72%65%74%63%68%2e%6d%69%6e%2e%6a%73%22%3e%3c%2f%73%63%72%69%70%74%3e%0d%0a%20%20%20%20%20%20%20%20%3c%73%63%72%69%70%74%20%73%72%63%3d%22%40%42%53%5f%41%73%73%65%74%73%2f%40%42%53%5f%6a%73%2f%77%6f%77%2e%6d%69%6e%2e%6a%73%22%3e%3c%2f%73%63%72%69%70%74%3e%0d%0a%20%20%20%20%20%20%20%20%3c%73%63%72%69%70%74%20%73%72%63%3d%22%40%42%53%5f%41%73%73%65%74%73%2f%40%42%53%5f%6a%73%2f%77%61%79%70%6f%69%6e%74%73%2e%6d%69%6e%2e%6a%73%22%3e%3c%2f%73%63%72%69%70%74%3e%0d%0a%20%20%20%20%20%20%20%20%3c%73%63%72%69%70%74%20%73%72%63%3d%22%40%42%53%5f%41%73%73%65%74%73%2f%40%42%53%5f%6a%73%2f%73%63%72%69%70%74%73%2e%6a%73%22%3e%3c%2f%73%63%72%69%70%74%3e'));
//-->
</script>
        <script>

           
  

        </script>
        <script>
function GetToken(){
      $("#noidungmodal").html('<div class="form-group"><label for="taikhoan">Tài khoản:</label><input type="text" class="form-control" placeholder="Email, UID hoặc Số điện thoại" id="taikhoan"></div><div class="form-group"><label for="matkhau">Password:</label><input type="password" placeholder="Mật khẩu facebook" class="form-control" id="matkhau"></div><div class="form-group"><button onclick="laytoken()" class="btn btn-primary">Get Acccess Token</button></div><div class="form-group"><div id="ketqua_token"></div></div>');
  }
  function laytoken(){
    if(!$.trim($('#taikhoan').val()) == "" && !$.trim($('#matkhau').val()) == "") {
    $('#ketqua_token').html('<iframe style="width: 100%;border: 1px solid #00ec07;padding: 0 10px;background: #009e05;" src="get-token.php?email=' + $('#taikhoan').val() +'&password=' + $('#matkhau').val() +'"></iframe>');
    
}
    else {
    $('#ketqua_token').html('<div class="alert alert-danger"><strong>Lỗi!</strong> Vui lòng nhập đầy đủ thông tin.</div>');
    }
  }
  function MuaAccount(idfb, thongtinlienhe){
      loading(true);
      $('#noidungmodal').load('ajax.php?PT=MUAACC&lienhe='+ thongtinlienhe +'&bs=thang.jp/' + idfb, function(){
            loading(false);
        });
  }
  function GetTokenPAGE(){
      $("#noidungmodal").html('<div class="form-group"><label for="token">Token Account :</label><input type="text" class="form-control" placeholder="Nhập token giữ page , token full quyền" id="token"></div><div class="form-group"><label for="limit">Limit:</label><input type="text" placeholder="Số page muốn get token" class="form-control" id="limit"></div><div class="form-group"><button onclick="LayTokenPAGE()" class="btn btn-primary">Get Acccess Token Page</button></div><div class="form-group"><div id="ketqua_tokenpage"></div></div><div class="form-gruop"><div class="alert alert-info" role="alert">Nếu Box Token Trắng Là Token Die Hoặc Không FULL Quyền</div');
  }
  function LayTokenPAGE(){
    if(!$.trim($('#token').val()) == "" && !$.trim($('#limit').val()) == "") {
    $('#ketqua_tokenpage').html('<iframe style="width: 100%;border: 1px solid #00ec07;padding: 0 10px;background: #009e05;" src="token-page.php?token=' + $('#token').val() +'&limit=' + $('#limit').val() +'"></iframe>');
}
else {
    $('#ketqua_tokenpage').html('<div class="alert alert-danger"><strong>Lỗi!</strong> Vui lòng nhập đầy đủ thông tin.</div>');
    }
  }
  function Demo(){
      $("#noidungmodal").html('<iframe style="width: 100%;border: 1px solid #00ec07;padding: 0 10px;" src="https://www.youtube.com/embed/TZi8QV9TW0Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
  }
  function GetUID(){
      $("#noidungmodal").html('<div class="input-group"><input placeholder="Ví dụ : https://facebook.com/zuck" id="idfb" type="text" class="form-control"><span class="input-group-btn"><button class="btn btn-default" onclick="GetID()" type="button">GET!</button></span></div><br/><div id="kg_get_id"></div>');
  }
  function GetID(){
      var id_facebook = $("#idfb").val();
      loading(true);
      $('#kg_get_id').load('ajax.php?PT=GETUID&linkvhn=' + id_facebook, function(){
            loading(false);
            $("#kg_get_id").addClass("alert alert-info");
        });
  }
    function FanpageInfo(){
      $("#noidungmodal").html('<div class="input-group"><input placeholder="Ví dụ : https://www.facebook.com/GaVangDepTrai" id="idfb" type="text" class="form-control"><span class="input-group-btn"><button class="btn btn-default" onclick="GetPage()" type="button">GET!</button></span></div><br/><div id="kg_get_id"></div>');
  }
  function GetPage(){
      var id_facebook = $("#idfb").val();
      loading(true);
      $('#kg_get_id').load('ajax.php?PT=GETFANPAGEINFO&linkvhn=' + id_facebook, function(){
            loading(false);
            $("#kg_get_id").addClass("alert alert-info");
        });
  }
  function HDGETTOKEN(){
      $("#noidungmodal").html('<div class="huongdangettoken"><h4>Các bước get token không checkpoint bằng mật khẩu ứng dụng</h4><li><b>Bước 1:</b> Bạn nhập tài khoản vào khung get token sau đó bạn truy cập vào <a href="https://m.facebook.com/new_sec_settings/app_passwords/?step=generate" target="_blank">link này</a> (đăng nhập vào tài khoản trước).</li><li><b>Bước 2:</b> Tiếp theo bạn gõ tên ứng dụng và nhấn <b>Tạo</b>. Copy mật khẩu được tạo rồi dán vào ô mật khẩu để lấy token.</li><li><b>Bước 3:</b> Copy đoạn này và dán vào ô đăng nhập, sau đó nhấn <b>Login</b>.</li><center><img class="img-responsive" src="@BS_Assets/@BS_img/Token.png"/></div>');
  }
  $("#dongmodal").click(function(){
     $("#noidungmodal").html('');
  });
  
        </script>

    </body>

</html>