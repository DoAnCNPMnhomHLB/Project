
<?php
include('../Model/model_talknow_user.php');
class xuly{
	//FUNCTION ĐĂNG NHẬP
	public function dangnhapTK($username, $md5_password)
	{
		$truyvan = new truyvan();
		$user = $truyvan->dangnhap($username, $md5_password);
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
			echo '<script language="javascript">alert("Tài khoản đã tồn tại! Hãy đăng nhập..")</script>';
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
	//function đăng xuất
	function logout(){
		session_start();
		session_destroy();
		header("location:signin.php");
	}
	//function gửi phản hồi
	function get_Feedback($feedback_id ,$nameFeedback, $feedback, $sender){
		$truyvan = new truyvan();
		$add_feedback = $truyvan->getFeedback($feedback_id, $nameFeedback, $feedback, $sender);
		if($add_feedback->rowCount()>0)
		{
			echo '<script language="javascript">alert("Gửi phản hồi / báo lỗi thành công. Cảm ơn bạn đã góp ý!")</script>';
		}
		else
		{
			print "<a href='javascript:history.go(-1)'><center><B>Không thành công, vui lòng kiểm tra lại.</center></B></a>";
		}
	}
	//function update thông tin
	function updateInfo($username, $email, $sex, $ngaysinh, $sdt, $file_part_sql, $ses){
		$truyvan_update = new truyvan();
		$info = $truyvan_update->update_info($username, $email, $sex, $ngaysinh, $sdt, $file_part_sql, $ses);
	}

	//function điều hướng lấy user làm danh sách bạn bè
	function c_setFriend(){
		$truyvan = new truyvan();
		$friends = $truyvan->setFriend();
		return array('friends'=>$friends);
	}

	//function chọn 1 user
	function infoUser($id) {
		$truyvan = new truyvan();
		$user = $truyvan->selectOneUser($id);
		return array('user'=>$user);
	}
}

?>