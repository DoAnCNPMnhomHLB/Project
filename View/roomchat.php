<?php 
    include('php_user.php');
    $id = $_GET['id'];
    $showInfoUser = new xuly();
    $infoUser = $showInfoUser->infoUser($id);
    $user = $infoUser['user'];
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

                </div>
                <div class="row inputmess">
                    <div class="container-2">
                        <textarea name="inputchat" id="chat" rows="1" placeholder="Nhập tin nhắn..."></textarea>
                        <a href="#"><i class="far fa-image"></i></a>
                        <a href="#"><i class="fas fa-grin-alt"></i></a>
                    </div>
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
</body>
</html>