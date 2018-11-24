<?php
    ini_set("display_errors",1);
    include("vendor/autoload.php");

    use ElephantIO\Client;
    use ElephantIO\Engine\SocketIO\Version2X;

    if(isset($_POST['btnGuiTinNhan'])) {
        $formdata = array("mess"=>$_POST['inputchat']);

        // if(!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
        //     $port_num = 3000;
        // } else {
        //     $port_num = 3001;
        // }

        $version = new Version2X("http://localhost:3001");
        $client = new Client($version);
        $client->initialize();
        $client->emit("new_order", $formdata);
        $client->close();
        header("location: view/roomchat.php");
    }
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gửi dữ liệu</title>
</head>
<body>
    <div class="container-fluid">
        <form action="#" method='post'>
            Họ tên: <input type="text" name="hoten" id="hoten"><br>
            Mật khẩu: <input type="text" name="matkhau" id="matkhau"><br>
            Địa chỉ: <input type="text" name="diachi" id="diachi"><br>
            <button type="submit" name="btnSend">Send</button>
        </form>
    </div>
</body>
</html> -->