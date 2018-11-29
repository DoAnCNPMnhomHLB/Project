    <!-- <div class="row filtermess">
        <a href="#">Tin nhắn <i class="fas fa-caret-down"></i></a>
    </div> -->
    <?php
        include('../Controller/controller_talknow_user.php');
        $c_timkiembanbe = new xuly();
        if(isset($_POST['tukhoa'])){
            $key_name = $_POST['tukhoa'];
            $banbe = $c_timkiembanbe->timkiem($key_name);
        }
        // echo '<pre>';
        // print_r($banbe);
        // echo '</pre>';
        // die();
        foreach($banbe as $bb){
            ?>
                <div class="row yourfriend">
                    <div class="col-3">
                    <a href="roomchat.php?id=<?=$bb->id?>">
                        <img src="<?=$bb->image?>" alt="This is avatar a fr" />
                    </a>
                    </div>
                    <div class="col-9">
                        <a href="roomchat.php?id=<?=$bb->id?>">
                            <p class="friendname"><?=$bb->username?></p>
                            <p class="shownewestchat">Bạn: Đây là đoạn chat mới...</p>
                            <a href="#"><i class="fas fa-cog"></i></a>
                            <span class="statustime">24 phút</span>
                        </a>
                    </div>
                </div>  
            <?php
        }
    ?>
