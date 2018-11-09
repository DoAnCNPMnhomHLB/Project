<?php
include('../Model/model_talknow_library.php');
//function nhận dữ liệu từ upload tài liệu
class xuly{
	function xulyTailieu($documentId, $kind, $name, $file_part_sql, $author){
		$truyvan = new truyvan();
		$doc = $truyvan->getDocument($documentId, $$documentId, $kind, $name, $file_part_sql, $author, $name, $file_part_sql, $author);
		if($doc->kind == "" || $doc->name = "" || $doc->file_part_sql = "")
		{
			echo '<script language="javascript">alert("Bạn vui lòng nhập đầy đủ thông tin!")</script>';
		}
		else {
			$ktTailieu = $truyvan->kiemtraTailieu($documentName);
			if($ktTailieu == true)
			{
				echo '<script language="javascript">alert("Tên tài liệu đã bị trùng. Hãy đặt tên lại cho tài liệu!")</script>';
			}
			else
			{
				if($doc->rowCount()>0)
				{
					echo '<script language="javascript">alert("Tài liệu đã được thêm vào thư viện.")</script>';
				}
				else
				{
					print "<a href='javascript:history.go(-1)'><center><B>Không thành công, vui lòng kiểm tra lại.</center></B></a>";
				}
			}
		}
    }
}
?>