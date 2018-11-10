<?php
include('../Database/database.php');
class truyvan extends database{
	//function nhận dữ kiệu vào database
	function getDocument($documentId, $kind, $name, $file_part_sql, $author)
	{

		$sql = "INSERT INTO `library` (`documentId`, `kind_of_document`, `documentName`, `file`, `author`)
		VALUES(?, ?, ?, ?, ?)";
		$this->setQuery($sql);
		return $this->execute(array($documentId, $kind, $name, $file_part_sql, $author));
	}
	//function kiểm tra trùng tên tài li?u
	function kiemtraTailieu($documentName)
	{
		$sql = "SELECT * FROM library WHERE documentName = '$documentName'";
		$this->setQuery($sql);
		return $this->loadRow(array($documentName)); 
	}
}
?>