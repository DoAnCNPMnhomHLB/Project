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
	function setFriend($username){
		$sql = "SELECT room_id FROM roomdetail WHERE user_id = (SELECT id FROM `user` WHERE username = '$username') ";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	function setFriendFromRoomID($id){
		$sql = "SELECT room_name FROM chat_room WHERE room_id = $id ";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	function selectOneUser($username) {
		$sql = "SELECT * FROM user WHERE username = '$username'; ";
		$this->setQuery($sql);
		return $this->loadRow();
	}

	function insertNewFriend($username , $friendname) {
		$sql = "INSERT INTO chat_room (room_name, uid, uid2) SELECT '$username$friendname', x.id, y.id FROM `user` AS x CROSS JOIN `user` AS y WHERE x.`username` = '$username' AND y.`username` = '$friendname'";
		$this->setQuery($sql);
		$this->_cursor = $this->_dbh->prepare($this->_sql);
		$this->_cursor->execute();
		$sql = "INSERT INTO roomdetail(room_id, user_id) SELECT cr.room_id, ur.id FROM chat_room AS cr CROSS JOIN `user` AS ur WHERE  cr.room_name = '$username$friendname' AND ur.username = '$username' ";
		$this->setQuery($sql);
		$this->_cursor = $this->_dbh->prepare($this->_sql);
		$this->_cursor->execute();
		$sql = "INSERT INTO roomdetail(room_id, user_id) SELECT cr.room_id, ur.id FROM chat_room AS cr CROSS JOIN `user` AS ur WHERE  cr.room_name = '$username$friendname' AND ur.username = '$friendname' ";
		$this->setQuery($sql);
		$this->_cursor = $this->_dbh->prepare($this->_sql);
		$this->_cursor->execute();
	}

	function insertMessage($msg, $roomid, $sender) {
        $sql = "INSERT INTO message(content, room_id, sender) SELECT '$msg' , $roomid, ur.id FROM `user` AS ur WHERE ur.username = '$sender' ";
        $this->setQuery($sql);
		$this->_cursor = $this->_dbh->prepare($this->_sql);
		$this->_cursor->execute();
    }
	
	function selectMess($roomid) {
		$sql = "SELECT * FROM `message` WHERE room_id = $roomid";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	// function tìm kiếm bạn bè
	function m_timkiembanbe($key_name){
		$sql = "SELECT * FROM user WHERE username like '$key_name%' ";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	function searchInListFriend($key,$sessionname) {
		$sql = "SELECT * FROM `chat_room` WHERE room_name like '%$key%' AND (uid = (SELECT id FROM `user` WHERE username = '$sessionname') OR uid2 = (SELECT id FROM `user` WHERE username = '$sessionname'))";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	function searchFriendInDB($key, $sessionname) {
		$sql = "SELECT * FROM `user` WHERE username <> '$sessionname' AND username LIKE '%$key%'";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}

	function changePass($username, $newpass) {
		$sql = "UPDATE `user` SET `password` = '$newpass' WHERE `username` = '$username'";
		$this->setQuery($sql);
		$this->execute();
	}

}
 ?>