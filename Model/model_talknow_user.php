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
}
 ?>