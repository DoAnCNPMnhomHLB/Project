    <!-- <div class="row filtermess">
        <a href="#">Tin nhắn <i class="fas fa-caret-down"></i></a>
    </div> -->
    <?php
        include('../Controller/controller_talknow_user.php');
        $c_timkiembanbe = new xuly();
        $sesionname = $_POST['sessionname'];
        // $xuly = new xuly();
        // $c_setFriend = $xuly->c_setFriend($username);
        // $friends = $c_setFriend['friends'];
        if(isset($_POST['tukhoa'])){
            $key_name = $_POST['tukhoa'];
            $friends = $c_timkiembanbe->timTrongList($key_name,$sesionname);
        }
        // echo '<pre>';
        // print_r($banbe);
        // echo '</pre>';
        // die();
        foreach($friends as $fr){
            ?>
                <div class="row yourfriend">
                    <?php
                        $xuly = new xuly();
                        $c_setFriendname = $xuly->c_setFriendname($fr->room_id);
                        $friendsname = $c_setFriendname['friendsname'];
                        foreach($friendsname as $frn) {
                            $lastFN = str_replace($sesionname, '', $frn->room_name);
                        }
                        $c_getInfoFriend = $xuly->infoUser($lastFN);
                        $infoFriend = $c_getInfoFriend['user'];
                        
                    ?>
                    <div class="col-3">
                        <div class="divavatarfr" style="background-image: url(<?= $infoFriend->image ?>);"></div>
                        <a href="roomchat.php?frname=<?=$lastFN?>&roomid=<?=$fr->room_id?>"></a>
                    </div>
                    <div class="col-9">
                        <p class="friendname"><?=$lastFN?></p>
                        <p class="shownewestchat">Bạn: Đây là đoạn chat mới...</p>
                        <a href="#"><i class="fas fa-cog"></i></a>
                        <span class="statustime">24 phút</span>
                        <script>
                            //SCRIPT CLICK INTO DIV WILL GO TO LINK OF A TAG
                            $(".yourfriend").click(function() {
                                window.location = $(this).find("a").attr("href"); 
                                return false;
                            });
                        </script>
                    </div>
                </div>
            <?php
        }
    ?>
