<html>
<head>
	<title>Đăng ký </title>
</head>
<body>
<?php
        require_once("connection.php");
		if (isset($_POST["btn_submit"])) {
  			//lấy thông tin từ các form bằng phương thức POST
  			$pupilname = $_POST["pupilname"];
  			$pupilpass = $_POST["pupilpass"];
 			$hovaten_hv = $_POST["hovaten_hv"];
              $email = $_POST["email"];
              $diachi = $_POST["diachi"]
  			//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
			  if ($pupilname == "" || $pupilpass == "" || $hovaten_hv == "" || $email == ""||$diachi=="") {
				   echo "bạn vui lòng nhập đầy đủ thông tin";
  			}else{
  					// Kiểm tra tài khoản đã tồn tại chưa
  					$sql="select * from hocvien where pupilname='$pupilname'";
					$kt=mysqli_query($conn, $sql);
 
					if(mysqli_num_rows($kt)  > 0){
						echo "Tài khoản đã tồn tại";
					}else{
						//thực hiện việc lưu trữ dữ liệu vào db
	    				$sql = "INSERT INTO hocvien(
	    					pupilname,
	    					pupilpass,
	    					hovaten_hv,
						    email,
                            diachi
	    					) VALUES (
	    					'$pupilname',
	    					'$pupilpass',
						    '$hovaten_hv',
	    					'$email',
                            '$diachi'
	    					)";
					    // thực thi câu $sql với biến conn lấy từ file connection.php
   						mysqli_query($conn,$sql);
				   		echo "chúc mừng bạn đã đăng ký thành công";
					}
									    
					
			  }
	}
	?>
	<form action="dangky.php" method="post">
		<table>
			<tr>
				<td colspan="2">Đăng ký học viên</td>
			</tr>	
			<tr>
				<td>Tài khoản :</td>
				<td><input type="text" id="pupilname" name="pupilname"></td>
			</tr>
			<tr>
				<td>Mật khẩu:</td>
				<td><input type="pupilpass" id="pupilpass" name="pupilpass"></td>
			</tr>
			<tr>
				<td>Họ và tên :</td>
				<td><input type="text" id="hovaten_hv" name="hovaten_hv"></td>
			</tr>
			<tr>
				<td>Email :</td>
				<td><input type="text" id="email" name="email"></td>
            </tr>
            <tr>
				<td>Địa chỉ :</td>
				<td><input type="text" id="diachi" name="diachi"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="btn_submit" value="Đăng ký"></td>
			</tr>
 
		</table>
		
	</form>
</body>
</html>