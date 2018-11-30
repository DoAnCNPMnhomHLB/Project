<?php 
    include('php_user.php');
    $theShowUser = new xuly();

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
    <link rel="stylesheet" href="css/ketban.css" type="text/css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <?php include('left_bar.php');?>
            <div class="col-md-9 rightbar">
                <div class="row titlebar">
                    <h5>Thêm bạn bè</h5>
                </div>
                <div class="div-themban">
                    <div class="row div-timtheoten justify-content-center">
                        <div class="col-10">
                            <form>
                                <div class="row">
                                    <div class="col-9">
                                        <div class="form-group">
                                            <label for="myInputName">Tìm theo tên</label>
                                            <input type="text" class="form-control" id="myInputName" aria-describedby="emailHelp"
                                                placeholder="Nhập tên bạn bè">
                                            <small id="emailHelp" class="form-text text-muted">Bạn có thể tìm kiếm bạn
                                                bè
                                                bằng địa chỉ email đăng ký của người đó. <a href="#" id="a-timtheoemail"
                                                    style="text-decoration:none;">Tìm
                                                    theo email</a></small>
                                        </div>
                                    </div>

                                    <div class="col-3">
                                        <button type="submit" class="btn btn-primary btnthemban">Gửi lời mời</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row div-timtheoemail justify-content-center">
                        <div class="col-10">
                            <form>
                                <div class="row">
                                    <div class="col-9">
                                        <div class="form-group">
                                            <label for="myInputEmail">Tìm theo Email</label>
                                            <input type="email" class="form-control" id="myInputEmail" aria-describedby="emailHelp"
                                                placeholder="Nhập tên địa chỉ email">
                                        </div>
                                    </div>

                                    <div class="col-3">
                                        <button type="submit" class="btn btn-primary btnthemban">Gửi lời mời</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row div-titlebandenghi">
                    <h5>Bạn đề nghị</h5>
                </div>
                <div class="row div-bandenghi">
                    <div class="row">
                        <div class="col friend-item">
                            <div class="row">
                                <div class="col-3">
                                    <img src="images/avatar-men.png" alt="avatar">
                                </div>
                                <div class="col-9">
                                    <form action="" method="post">
                                        <h5 id="h5-namefriend">Friend's Name</h5>
                                        <input type="text" name="inputfriendname" value="Nga" style="display:none">
                                        <span class="form-text text-muted">Giới tính: Nam</span>
                                        <div class="row">
                                            <button class="btn btn-primary" name="btnGioiThieu">Giới thiệu</button>
                                            <button class="btn btn-success" name="btnKetBan">Kết bạn</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col friend-item">
                            <div class="row">
                                <div class="col-3">
                                    <img src="images/avatar-men.png" alt="avatar">
                                </div>
                                <div class="col-9">
                                    <h5 id="h5-namefriend">Friend's Name</h5>
                                    <span class="form-text text-muted">Giới tính: Nam</span>
                                    <div class="row">
                                        <button class="btn btn-primary">Giới thiệu</button>
                                        <button class="btn btn-success">Kết bạn</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col friend-item">
                            <div class="row">
                                <div class="col-3">
                                    <img src="images/avatar-men.png" alt="avatar">
                                </div>
                                <div class="col-9">
                                    <h5 id="h5-namefriend">Friend's Name</h5>
                                    <span class="form-text text-muted">Giới tính: Nam</span>
                                    <div class="row">
                                        <button class="btn btn-primary">Giới thiệu</button>
                                        <button class="btn btn-success">Kết bạn</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col friend-item">
                            <div class="row">
                                <div class="col-3">
                                    <img src="images/avatar-men.png" alt="avatar">
                                </div>
                                <div class="col-9">
                                    <h5 id="h5-namefriend">Friend's Name</h5>
                                    <span class="form-text text-muted">Giới tính: Nam</span>
                                    <div class="row">
                                        <button class="btn btn-primary">Giới thiệu</button>
                                        <button class="btn btn-success">Kết bạn</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col friend-item">
                            <div class="row">
                                <div class="col-3">
                                    <img src="images/avatar-men.png" alt="avatar">
                                </div>
                                <div class="col-9">
                                    <h5 id="h5-namefriend">Friend's Name</h5>
                                    <span class="form-text text-muted">Giới tính: Nam</span>
                                    <div class="row">
                                        <button class="btn btn-primary">Giới thiệu</button>
                                        <button class="btn btn-success">Kết bạn</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col friend-item">
                            <div class="row">
                                <div class="col-3">
                                    <img src="images/avatar-men.png" alt="avatar">
                                </div>
                                <div class="col-9">
                                    <h5 id="h5-namefriend">Friend's Name</h5>
                                    <span class="form-text text-muted">Giới tính: Nam</span>
                                    <div class="row">
                                        <button class="btn btn-primary">Giới thiệu</button>
                                        <button class="btn btn-success">Kết bạn</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include ('modal.php');?>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="js/index.js"></script>
</body>

</html>