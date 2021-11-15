<!doctype html>
<html>
<head>
	
</head>
<body>
	<?php
		// $level = $_POST['level'];
		$u = isset($_POST['username']) ? $_POST['username'] : "";
		$p = isset($_POST['password']) ? $_POST['password'] : "";

		$conn = mysqli_connect("localhost","root","","blog");

		mysqli_query($conn,"SET danguitar 'utf8'");
	    	$sql1 = "insert into users(username,password,level) values('$u', '$p', '0') ";

	    	$kq1 = mysqli_query($conn, $sql1);
		// require '../../Model/dangnhap.php';
		$kn=new DangNhap;
		$kq1= $kn->logup($u, $p);
			if( $kq1)
			{
				header("location: ../../View/client/login.php");
			}else
			{ header("location: ../../View/client/index.php");
		}
	?>
</body>
</html>