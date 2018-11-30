<?php  include("set_info_pdo.php");  ?>
<?php 
        // include('../Controller/controller_talknow_user.php');
        $username = $_SESSION['username'];
        $xuly = new xuly();
        $c_setFriend = $xuly->c_setFriend($username);
        $friends = $c_setFriend['friends'];
?>
<div class="col-md-3 leftbar">
                <div class="row userbar">
                    <div class="col-3 avatar">
                        <a href="#" data-toggle="modal" data-target="#modal-updateinfo">
                        <div class="divavatar" style="background-image: url(<?= $hung_image ?>);"></div>
                        </a>
                    </div>
                    <div class="col-9">
                        <h6><a href="#" class="username" data-toggle="modal" data-target="#modal-updateinfo"><?php echo $_SESSION['username']; ?></a></h6>
                        <div class="box">
                            <div class="container-1">
                                <a href="#" class="icon"><i class="fa fa-search"></i></a>
                                <input type="search" id="search" placeholder="Tìm kiếm bạn bè" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row belowuserbar">
                    <div class="col-3 menubar">
                        <div class="row menu-active">
                            <a href="<?php if($hung_role==0) { echo "index_admin.php";} else { echo "index_user.php";}?>" data-tooltip="true" data-placement="right" title="Trang chủ"><i class="fas fa-home"></i></a>
                        </div>
                        <hr>
                        <div class="row menu-item">
                            <a href="#" data-toggle="modal" data-target="#modaltaonhom" data-tooltip="true"
                                data-placement="right" title="Tạo nhóm chat"><i class="fas fa-plus-circle"></i></a>
                        </div>
                        <div class="row menu-item">
                            <a href="ketban.php" data-tooltip="true" data-placement="right" title="Thêm bạn"><i class="fas fa-user-plus"></i></a>
                        </div>
                        <div class="row menu-item">
                            <a href="#" data-toggle="modal" data-target="#modalUploadFile" data-whatever="@mdo"
                                data-tooltip="true" data-placement="right" title="Upload File"><i class="fas fa-file-upload"></i></a>
                        </div>
                        <div class="row menu-item">
                            <a href="timfile.php" data-tooltip="true" data-placement="right" title="Tra cứu tài liệu"><i
                                    class="fas fa-file"></i></a>
                        </div>
                        <div class="row menu-item">

                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" data-tooltip="true" data-placement="right" title="Cài đặt"><i
                                    class="fas fa-cog"></i></a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">Cài đặt</a>
                                <a href="#" class="dropdown-item" data-toggle="modal" data-target="#modal-doimatkhau">Đổi
                                    mật khẩu</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item" data-toggle="modal" data-target="#modalgioithieu">Giới
                                    thiệu</a>
                                <a href="#" class="dropdown-item" data-toggle="modal" data-target="#modalfeedback"
                                    data-whatever="@mdo">Phản hồi/Báo lỗi</a>
                                <div class="dropdown-divider"></div>
                                <a href="logout.php" class="dropdown-item">Đăng xuất</a>
                            </div>

                        </div>
                    </div>
                    <div class="col-9 listfriendbar">
                        <div class="row filtermess">
                            <a href="#">Tin nhắn <i class="fas fa-caret-down"></i></a>
                        </div>
                        <div id="datasearch">
                            <?php
                                foreach($friends as $fr){
                                    ?>
                                        <div class="row yourfriend">
                                            <?php
                                                $xuly = new xuly();
                                                $c_setFriendname = $xuly->c_setFriendname($fr->room_id);
                                                $friendsname = $c_setFriendname['friendsname'];
                                                foreach($friendsname as $frn) {
                                                    $strtemp = $frn->room_name;
                                                    $lastFN = str_replace($_SESSION['username'], '', $frn->room_name);
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
                                                <span class="statustime"><i class="fas fa-circle" style="font-size:7pt;color:#1cff2b;"></i></span>
                                            </div>
                                        </div>
                                    <?php
                                }
                            ?>
                        </div>

                    </div>
                </div>
                <script src="js/jquery-3.3.1.min.js"></script>
                <script>
                    $(document).ready(function(){
                        $("#search").keyup(function(){
                            var keyword = $('#search').val();
                            var sessionname = <?php echo json_encode($username)?>;
                            $.post("A_timkiembanbe.php", {tukhoa: keyword, sessionname : sessionname}, function(data){
                                // $('#datasearch').empty();
                                $('#datasearch').html(data);
                            })
                        })
                    })
                </script>
</div>

