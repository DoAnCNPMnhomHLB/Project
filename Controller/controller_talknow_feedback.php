<?php
include('../Model/model_talknow_feedback.php');
//function nhận dữ liệu từ upload tài liệu
class c_feedback{
	//function control lấy dữ liệu để đổ ra trang quản lý tài liệu
	function xulyPhanhoi(){
		$m_feedback = new m_feedback();
		$feedback = $m_feedback->set_feedback();
		return array('feedback'=> $feedback);
	}
}
?>