<?php
include('../Model/model_talknow_library.php');
//function nhận dữ liệu từ upload tài liệu
class c_library{
	var $thongbao = "";
	var $error = "";
	//function control lấy dữ liệu để đổ ra trang quản lý tài liệu
	function xulyTailieu(){
		$m_library = new m_library();
		$materials = $m_library->set_document();
		return array('materials'=> $materials);
	}
	//function control tra cứu tài liệu
	function tracuu($key){
		$m_library = new m_library();
		$tailieu = $m_library->search($key);
		return $tailieu;
	}
	//function control delete
	function deleteDoc($documentId){
		$m_library = new m_library();
		$tailieu = $m_library->m_deleteDoc($documentId);
	}
	//function update tên tài liệu
	function c_updateTailieu($documentName, $matailieu){
		if($documentName == ""){
			$this->thongbao = "Bạn phải nhập tên tài liệu!";
			$this->error = $this->thongbao;
		}
		else{
			$m_library = new m_library();
			$doc = $m_library->update_Tailieu($documentName, $matailieu);
		}
	}
}
?>