<?php
include('../Database/database.php');
class truyvan extends database{
	//function đăng nhập
	function dangnhap($username, $md5_password)
	{
		$sql = "SELECT * FROM user WHERE username = '$username' and password = '$md5_password'";
		$this->setQuery($sql);
		return $this->loadRow(array($username, $md5_password));
	}
	//function kiểm tra trùng tên đăng ký
	function kiemtraDangky($username)
	{
		$sql = "SELECT * FROM user WHERE username = '$username'";
		$this->setQuery($sql);
		return $this->loadRow(array($username)); 
	}
	//function đăng ký
	function signin($id ,$username, $password, $role, $email)
	{
		$sql = "INSERT INTO `user` (`id`, `username`, `password`, `role`, `email`) 
		VALUES(?, ?, ?, ?, ?)";
		$this->setQuery($sql);
		return $this->execute(array($id, $username, $password, $role, $email));
	}
	//function gửi phản hồi
	function getFeedback($feedback_id, $nameFeedback, $feedback, $sender){
		$sql = "INSERT INTO `feedback` (`feedback_id`, `nameFeedback`, `feedback`, `sender`) 
		VALUES(?, ?, ?, ?)";
		$this->setQuery($sql);
		return $this->execute(array($feedback_id, $nameFeedback, $feedback, $sender));
	}
	//function cập nhật thông tin
	function update_info($username, $email, $sex, $birthday, $phone, $image, $ses)
	{	
		$data = [
			'username' => $username,
			'email' => $email,
			'birthday' => $birthday,
			'sex' => $sex,
			'phone' => $phone,
			'image' => $image,
			'session' => $ses,
		];
		$sql = "UPDATE user SET username=:username, email=:email, birthday=:birthday, sex=:sex, phone=:phone, image=:image WHERE user.username=:session";
		$stmt= $this->_dbh->prepare($sql);
		$stmt->execute($data);
		return 1;
	}
	//function truy xuất tên người dùng làm danh sách bạn bè
	function setFriend(){
		$sql = "SELECT * FROM user";
		$this->setQuery($sql);
		return $this->loadAllRows();

	}

	function selectOneUser($id) {
		$sql = "SELECT * FROM user WHERE id = '$id'; ";
		$this->setQuery($sql);
		return $this->loadRow();
	}
	

}
 ?>