<?php
	//Gọi file connection.php
	require_once("connection.php");
	// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
	if (isset($_POST["btn_submit"])) {
		// lấy thông tin người dùng
		$pupilname = $_POST["pupilname"];
		$pupilpass = $_POST["pupilpass"];
		//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
		//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
		$pupilname = strip_tags($pupilname);
		$pupilname = addslashes($pupilname);
		$pupilpass = strip_tags($pupilpass);
		$pupilpass = addslashes($pupilpass);
		if ($pupilname == "" || $pupilpass =="") {
			echo "username hoặc password bạn không được để trống!";
		}else{
			$sql = "select * from hocvien where pupilname = '$pupilname' and pupilpass = '$pupilpass' ";
			$query = mysqli_query($conn,$sql);
			$num_rows = mysqli_num_rows($query);
			if ($num_rows==0) {
				echo "tên đăng nhập hoặc mật khẩu không đúng !";
			}else{
				//tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
				$_SESSION['pupilname'] = $pupilname;
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
                header('Location: index.php');
			}
		}
	}
?>