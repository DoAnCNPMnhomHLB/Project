
<?php
include('../Model/model_talknow_user.php');
class xuly{
	//FUNCTION ĐĂNG NHẬP
	public function dangnhapTK($username, $md5_password)
	{
		if($username == "" || $md5_password == "")
		{
			echo '<script language="javascript">alert("Không được để trống thông tin đăng nhập.")</script>';
		}
		else
		{
			$truyvan = new truyvan();
			$user = $truyvan->dangnhap($username, md5($md5_password));
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
	}
	
	//FUNCTION ĐĂNG KÝ
	function signin($id, $username, $password, $role, $email)
	{
		if($username == "" || $password == "" || $email =="")
		{
			echo '<script language="javascript">alert("Không được để trống thông tin đăng ký.")</script>';
		}
		else if(strlen($password) < 6)
		{	
			echo '<script language="javascript">alert("Mật khẩu không được ít hơn 6 ký tự.")</script>';
		}
		else
		{
			{
				$truyvan = new truyvan();
				$ktDangky = $truyvan->kiemtraDangky($username);
				if($ktDangky==true)
				{
					echo '<script language="javascript">alert("Tài khoản đã tồn tại! Hãy đăng nhập..")</script>';
				}
				else
				{
					$them = $truyvan->signin($id, $username, md5($password), $role, $email);
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
	function c_setFriend($username){
		$truyvan = new truyvan();
		$friends = $truyvan->setFriend($username);
		return array('friends'=>$friends);
	}

	function c_setFriendname($id){
		$truyvan = new truyvan();
		$friendsname = $truyvan->setFriendFromRoomID($id);
		return array('friendsname'=>$friendsname);
	}

	//function chọn 1 user
	function infoUser($username) {
		$truyvan1 = new truyvan();
		$user = $truyvan1->selectOneUser($username);
		return array('user'=>$user);
	}

	function themBanBe($username, $friendname) {
		$truyvan = new truyvan();
		$truyvan->insertNewFriend($username, $friendname);
	}

	function themMessage($msg, $roomid, $sender) {
        $truyvanms = new truyvan();
        $truyvanms->insertMessage($msg, $roomid, $sender);
	}
	
	function showMessageHistory($roomid) {
		$truyvanms = new truyvan();
		$chatHistory = $truyvanms->selectMess($roomid);
		return array('chatHistory'=>$chatHistory);
	}

	function timkiem($key_name){
		$m_timkiembanbe = new truyvan();
		$banbe = $m_timkiembanbe->m_timkiembanbe($key_name);
		return $banbe;
	}

	function timTrongList($keyname,$sessionname) {
		$truyvanuser = new truyvan();
		$result = $truyvanuser->searchInListFriend($keyname,$sessionname);
		return $result;
	}

	function timTrongDB($key,$sessionname) {
		$truyvanuser = new truyvan();
		$result =$truyvanuser->searchFriendInDB($key, $sessionname);
		return $result;
	}

	public function checkPass($username, $md5_password,	$md5_newpass, $cpass)
	{
		$truyvan = new truyvan();
		if (strlen($md5_newpass) < 6) {
			echo '<script language="javascript">alert("Mật khẩu không được ít hơn 6 ký tự.")</script>';
		} else if ($md5_newpass != $cpass) {
			echo '<script language="javascript">alert("Mật khẩu xác nhận không khớp!")</script>';
		} else {
			$user = $truyvan->dangnhap($username, md5($md5_password));
			if($user==true)
			{
				$truyvan->changePass($username, md5($md5_newpass));
				echo "<script>	alert(\"Đổi mật khẩu thành công!\");</script>";
			}
			else
			{
				echo "<script>	alert(\"Mật khẩu nhập sai!\");</script>";
			}
		}
		
	}
 }

?>