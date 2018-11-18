<?php
include('../Database/database.php');
class m_library extends database{
	//function lấy dữ liệu để đổ ra trang quản lý tài liệu
	function set_document()
	{
		$sql = "SELECT * FROM library";
		$this->setQuery($sql);
		return $this->loadAllRows(); 
	}

	//function tra cứu tài liệu
	function search($key){
		$sql = "SELECT * FROM library WHERE documentName like '$key' or kind_of_document like '$key'";
		$this->setQuery($sql);
		return $this->loadAllRows(array($key)); 
	}
	//function delete tài liệu
	function m_deleteDoc($documentId){
		$sql = "DELETE FROM library WHERE documentId = '$documentId';";
		$this->setQuery($sql);
		return $this->loadAllRows($documentId); 

	}
	//function update tên tài liệu
	function update_Tailieu($documentName, $matailieu){
		$sql = "UPDATE library SET documentName = '$documentName' WHERE documentId = '$matailieu';";
		$this->setQuery($sql);
		return $this->loadAllRows($documentName, $matailieu); 
	}
}
?>