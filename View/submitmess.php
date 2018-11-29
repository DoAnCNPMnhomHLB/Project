<?php
    include("../Controller/controller_talknow_user.php");
    $xulyMess = new xuly();
    $msg = $_POST['msg'];
    $roomid = $_POST['roomid'];
    $sender = $_POST['sender'];

    $xulyMess->themMessage($msg, $roomid, $sender);
    echo "==============================<br />";
    echo "All Data Submitted Successfully!";
?>