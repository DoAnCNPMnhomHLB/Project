<?php
    session_start();
?>
<?php
include('../Controller/controller_talknow_user.php');
$xuly = new xuly();
if(isset($_POST['btn_login']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	$user = $xuly->dangnhapTK($username,$password);
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Đăng nhập</title>
    <link rel="icon" href="images/logo.ico">
    <link rel="stylesheet" type="text/css" href="css/style-signin.css" />
    <link rel="stylesheet" href="fontawesome-free-5.5.0-web/css/all.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Pacifico|Varela+Round" rel="stylesheet">
</head>

<body>
    <div class="main">
        <div class="title-box">
            <div class="chuyen-title">
                <p class="title-login">We will accompany you!</p>
                <p class="title-login">Đăng ký tài khoản Talknow thật dễ dàng</p>
            </div>
        </div>
        <div class="box-login">
            <div class="in-to-up">
                <div class="login">
                    <img src="images/Logo.png">
                    <form action="" method="POST">
                        <p>Đăng nhập</p>
                        <input type="text" id="username" placeholder="Username" name="username">
                        <br>
                        <input type="password" id="password" placeholder="Password" name="password">
                        <br>
                        <div class="remember">
                            <input type="checkbox" name="remember" value="remember"><span> Ghi nhớ tôi</span>
                        </div>
                        <br>
                        <button href="#" class="button-login" name="btn_login">Đăng nhập <i class="fas fa-sign-in-alt"></i></button>
                        <br>
                        <a href="forgotpass.html" class="forgot-pass" title="Hỗ trợ lấy lại mật khẩu">Quên mật khẩu?</a>
                        <hr />
                    </form>
                    <!-- <div class="login-with">
                        <span>Hoặc đăng nhập với &nbsp;</span>
                        <a href="#" class="login-fb"><i class="fab fa-facebook-f fa-2x"></i></a>
                        <a href="#" class="login-gg"><i class="fab fa-google-plus-g fa-2x"></i></a>
                    </div> -->
                    <p class="go-register">Bạn chưa có tài khoản? <a href="#" title="Tạo tài khoản mới" onclick="Signup();">Đăng ký</a> ngay</p>
                </div>
                <div class="background">
                    <p id="p1">Welcome</p>
                    <p id="p2">Talknow giúp bạn kết nối và chia sẻ với mọi người trong cuộc sống của bạn.</p>
                </div>
                <div class="register">
                    <form action="" method="POST">
                        <p id="p-dangky">Đăng ký</p>
                        <div class="div-text">
                            <p>Tên người dùng</p>
                            <p>Email đăng ký</p>
                            <p>Mật khẩu</p>
                            <p>Xác nhận mật khẩu</p>
                        </div>
                        <div class="div-form">                    
                                <input type="text" placeholder="Họ và tên" id="ho" name="username_signin">
                                <br>
                                <input type="email" placeholder="example@email.com*" id="email" name="email">
                                <br>
                                <input type="password" placeholder="Password*" id="pass" name="password_signin">
                                <br>
                                <p class="p-pass">Tối thiểu 6 ký tự</p>
                                <input type="password" placeholder="Comfirm Password*" id="c-pass" name="cpassword">
                        </div>
                        <div class="div-xacnhan">
                                <!-- <input type="checkbox" name="privacy" value="accept">
                                <span>Tôi đã đọc và chấp nhận <a href="policy.html" id="privacy-policy" title="Xem điều khoản bảo mật" target="_blank">Điều khoản bảo mật</a> từ website</span>
                                <br> -->
                                <button href="#" class="button-signup" name="btn_signin">Đăng ký</button>
                                <p class="go-login">Tôi đã có tài khoản! <a href="#" title="Đăng nhập" onclick="Signin();">Đăng nhập</a> ngay</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- <a href="credit.html" title="Giới thiệu về 2 tác giả" class="credit">Giới thiệu tác giả</a> -->
    </div>

    <script type="text/javascript" src="js/signup.js"></script>
</body>
<!-- InstanceEnd -->

</html>
<?php
$c_talknow = new xuly();   
if(isset($_POST['btn_signin']))
{
	$username_signin 			   = $_POST['username_signin'];
    $password_signin		   	   = $_POST['password_signin'];
    $comfirmpassword               = $_POST['cpassword']; 
    $email 				 		   = $_POST['email'];
    if($password_signin === $comfirmpassword) 
    {
        $signin = $c_talknow->signin(null, $username_signin, $password_signin, 1, $email );	
    } 
    else 
    {
        echo $comfirmpassword.$password_signin;
        echo '<script>alert("Mật khẩu xác nhận không khớp.")</script>';
    }
		
}
?> 