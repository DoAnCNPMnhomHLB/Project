<?php
include('../Model/model_talknow_user.php');
class xuly{
	//FUNCTION ĐĂNG NHẬP
	public function dangnhapTK($username, $md5_password)
	{
		$truyvan = new truyvan();
		$user = $truyvan->dangnhap($username, $md5_password);
		session_start();
		if($user==true)
		{
			if (($user->role)==0)
			{
				$_SESSION['username'] = $username;
				header("LOCATION:index_admin.php");
			}
			else
			{
				
				$_SESSION['username'] = $username;
				header("LOCATION:index_user.php");
			}
		}
		else
		{
			echo '<script language="javascript">alert("Sai thông tin đăng nhập.")</script>';
		}
	}
	
	//FUNCTION ĐĂNG KÝ
	function signin($id, $username, $password, $role, $email)
	{
		$truyvan = new truyvan();
		$ktDangky = $truyvan->kiemtraDangky($username);
		if($ktDangky==true)
		{
			echo '<script language="javascript">alert("Tài khoản đã tồn tại!")</script>';
		}
		else
		{
			$them = $truyvan->signin($id, $username, $password, $role, $email);
			if($them->rowCount()>0)
			{
				echo '<script language="javascript">alert("Đăng ký thành công")</script>';
			}
			else
			{
				print "<a href='javascript:history.go(-1)'><center><B>Không thành công, vui lòng kiểm tra lại.</center></B></a>";
			}
		}

	}

}

?>