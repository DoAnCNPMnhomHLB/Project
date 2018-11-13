<?php
include('../config/config.php');
class database
{
	 var $_dbh='';
	 var $_sql='';
	 var $_cursor=NULL;
	 
	 public function database()
	 {
		 $this-> _dbh = new PDO("mysql:host=".HOST.";dbname=".DB,USER,PASS);
		 $this-> _dbh->query('set names "utf8"');
	 }
	 
	 //function truy vấn
	 public function setQuery($sql)
	 {
		 $this->_sql = $sql;
	 }
	 
	 //function thực thi database
	  public function execute ($options=array())
	  {
		  $this->_cursor = $this->_dbh->prepare($this->_sql);
		  if($options)
		  {
			  for($i=0; $i<count($options);$i++)
			  {
				  $this->_cursor->bindParam($i+1, $options[$i]);
			  }
		  }
		  $this->_cursor->execute();
		  return $this->_cursor;
	  }
	  
	  //function load dữ liệu trong bảng
	  public function loadAllRows($options = array())
	  {
		  if($options)
		  {
			  if(!$result = $this->execute())
			  return false;
		  }
		  else
		  {
		  	if(!$result=$this->execute($options))
				return false;
		  }
		  return $result->fetchAll(PDO::FETCH_OBJ);
	  }
	  
	  //function load 1 cột trong bảng
	  public function loadRow($option=array())
	  {
		  if(!$option)
		  {
			  if(!$result = $this->execute())
				return false;  
		  }
		  else
		  {
			  if(!$result = $this->execute($option))
			  return false;
		  }
		  return $result->fetch(PDO::FETCH_OBJ);
	  }
	  
	  //function đếm record trong bảng
	  public function loadRecord($option=array())
	  {
		  if(!$option)
		  {
				if(!$result=$this->execute())
				return false;
		  }
		  else
		  {
			  	if(!$result = $this->execute($option))
			  	return false;
		  }
		  return $result->fetch(PDO::FETCH_OBJ);
	  }

}
 ?>