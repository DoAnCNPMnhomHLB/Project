<?php
include('../Database/database.php');
class m_feedback extends database{
	//function lấy dữ liệu để đổ ra trang xử lý phản hồi
	function set_feedback()
	{
		$sql = "SELECT * FROM feedback";
		$this->setQuery($sql);
		return $this->loadAllRows(); 
	}
	//function 
}
?>