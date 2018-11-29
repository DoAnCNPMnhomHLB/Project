<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header('location:./signin.php');
    }
?>
<?php
    include('../Controller/controller_talknow_user.php');
    //lấy feedback
    $c_feedback = new xuly();   
    if(isset($_POST['btnok'])){
        $nameFeedback 			   = $_POST['recipient_name'];
        $feedback		   	       = $_POST['message_text'];
        $sender = $_SESSION['username'];
        $fb = $c_feedback->get_Feedback(null, $nameFeedback, $feedback, $sender);		
    }  
    //update thông tin
    $c_updateInfo = new xuly(); 
    $file_img = null; 
    if (isset($_POST['btn_update'])) {
        $username           = $_POST['username'];
        $sex                = $_POST['sex'];
        $ngaysinh           = $_POST['ngaysinh'];
        $email              = $_POST['email'];
        $sdt                = $_POST['sdt'];
        $file_avatar        = $_FILES['inputanh']['name'];
        $ses                = $_SESSION['username'];
        move_uploaded_file($_FILES['inputanh']['tmp_name'],'images/'.$file_avatar); 
        $file_part_sql = 'images/'.$file_avatar;
        $ud = $c_updateInfo->updateInfo($username, $email, $sex, $ngaysinh, $sdt, $file_part_sql, $ses);
        $_SESSION['username'] = $username;                
    }

    //module kết bạn
    $theUserController  = new xuly();
    if(isset($_POST['btnKetBan'])) {
        $friendname = $_POST['inputfriendname'];
        $username = $_SESSION['username'];
        $theUserController->themBanBe($username, $friendname);
    }

    
    ?>