<?php
        include('../Controller/controller_talknow_user.php');
        $c_timkiembanbe = new xuly();
        $sesionname = $_POST['sessionname'];
        // $xuly = new xuly();
        // $c_setFriend = $xuly->c_setFriend($username);
        // $friends = $c_setFriend['friends'];
        if(isset($_POST['tukhoa'])){
            $key_name = $_POST['tukhoa'];
            $friends = $c_timkiembanbe->timTrongDB($key_name,$sesionname);
        }
        // echo '<pre>';
        // print_r($banbe);
        // echo '</pre>';
        // die();
        foreach($friends as $fr){
            ?>
                <div class="col-4 friend-item">
                    <div class="row">
                        <div class="col-3">
                            <img src="<?=$fr->image?>" alt="avatar">
                        </div>
                        <div class="col-9">
                            <form action="" method="post">
                                <h5 id="h5-namefriend"><?=$fr->username?></h5>
                                <input type="text" name="inputfriendname" value="<?=$fr->username?>" style="display:none">
                                <span class="form-text text-muted">Giới tính: <?=$fr->sex?></span>
                                <div class="row">
                                    <button class="btn btn-primary" name="btnGioiThieu">Giới thiệu</button>
                                    <button class="btn btn-success" name="btnKetBan">Kết bạn</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php
        }
    ?>