<?php 
    include('php_user.php');
    $id = $_GET['id'];
    $showInfoUser = new xuly();
    $infoUser = $showInfoUser->infoUser($id);
    $user = $infoUser['user'];

    // ini_set("display_errors",1);
    // include("../vendor/autoload.php");

    // use ElephantIO\Client;
    // use ElephantIO\Engine\SocketIO\Version2X;

    // if(isset($_POST['btnGuiTinNhan'])) {
    //     $formdata = array("mess"=>$_POST['inputchat']);

    //     // if(!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
    //     //     $port_num = 3000;
    //     // } else {
    //     //     $port_num = 3001;
    //     // }

    //     $version = new Version2X("http://localhost:3001");
    //     $client = new Client($version);
    //     $client->initialize();
    //     $client->emit("new_order", $formdata);
    //     $client->close();
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Talknow</title>
    <link rel="stylesheet" href="fontawesome-free-5.5.0-web/css/all.css" type="text/css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/index.css" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.7.3/socket.io.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <?php include('left_bar.php');?>
            <div class="col-md-9 rightbar">
                <div class="row titlebar">
                    <div class="col-1">
                        <img id="avatarOfFriend" src="<?=$user->image?>" alt="This is avatar">
                    </div>
                    <div class="col-9">
                        <h5><?=$user->username?></h5>
                        <p class="statusactive">Trạng thái hoạt động</p>
                    </div>
                    <div class="col-2 functionchat">
                        <a href="#"><i class="fas fa-phone fa-flip-horizontal"></i></a>
                        <a href="#"><i class="fas fa-video"></i></a>
                        <a href="#"><i class="fas fa-list"></i></a>
                    </div>
                </div>
                <div class="row allmess">
                    <div id="messages">
                        <div class="msg"><span>Hòa: Xin chào các bạn</span></div>
                        <div class="msg"><span>Hòa: Xin chào các bạn</span></div>
                        <div class="mymsg"><span>Hòa: Xin chào các bạn</span></div>
                        <div class="msg"><span>Hòa: Xin chào các bạn sadfsdfsafko ko osak<br>dfo ko sakdofk kasodk osadkfo ksdokf oskfo aksof kos</span></div>
                        <div class="mymsg"><span>Hòa: Xin chào các bạn</span></div>
                    </div>
                </div>
                <div class="row inputmess">
                    <form action="" method='post'>
                        <div class="container-2">
                            <input type="text" name="inputchat" id="inputchat" placeholder="Nhập tin nhắn..." autocomplete="off">
                            <a href="#"><i class="far fa-image"></i></a>
                            <a href="#"><i class="fas fa-grin-alt"></i></a>
                            <button type="submit" name="btnGuiTinNhan" id="btnGuiTinNhan">Gửi tin nhắn</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
    include ('modal.php');
?>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="js/index.js"></script>
    <script>
        var socket = io.connect("http://localhost:3001");

        $("#btnGuiTinNhan").click(function(){
            socket.emit("new_order", $('#inputchat').val());
                $('#inputchat').val('');
                return false;
        });

        socket.on("new_order", function(data) {
            $("#messages").append('<div class="msg"><span>' + data + '</span></div>');
        });
    </script>
</body>
</html>