
<?php
    session_start();
?>
<?php
    include('../Controller/controller_talknow_feedback.php');
    $c_feedback = new c_feedback();
    $content = $c_feedback->xulyPhanhoi();
    $table_feedback = $content['feedback'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="fontawesome-free-5.5.0-web/css/all.css" type="text/css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/xulyphanhoi.css" type="text/css">
</head>
<body>
    <?php
        include('modal.php');
    ?>

    <div class="container-fluid">
        <div class="row">
            <table id="table-phanhoi" class="table">
                <thead>
                    <tr class="d-flex">
                        <th class="col-2">Người gửi</th>
                        <th class="col-4">Tiêu đề</th>
                        <th class="col-3">Thời gian gửi</th>
                        <th class="col-3">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach($table_feedback as $tf){
                        ?>
                            <tr class="d-flex">
                                <td class="col-2"><?=$tf->sender?></td>
                                <td class="col-4"><?=$tf->nameFeedback?></td>
                                <td class="col-3"><?=$tf->time?></td>
                                <td class="col-3">
                                    <button class="btn btn-outline-warning btn_show" data-toggle="modal" data-target="#modal-showfeedback<?php echo $tf->feedback_id;?>">Xem</button>
                                </td>
                            </tr>
                            <!--modal xem thông tin phản hồi-->
                            <div class="modal fade" id="modal-showfeedback<?php echo $tf->feedback_id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #fbc000;">
                                            <h5 class="modal-title" id="exampleModalLabel">Thông tin phản hồi</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="" method="POST" enctype="multipart/form-data">
                                        <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-4">
                                                        <label for="sender">Người gửi:</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <input type="text" class="form-control" name="sender" id="sender" value="<?php echo $tf->sender;?>">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <label for="nameFeedback">Tiêu đề:</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <input type="text" class="form-control" name="nameFeedback" id="nameFeedback" value="<?php echo $tf->nameFeedback;?>">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <label for="time">Thời gian gửi: </label>
                                                    </div>
                                                    <div class="col-8">
                                                        <input type="text" class="form-control" name="time" id="time" value="<?php echo $tf->time;?>">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <label for="noidung">Nội dung phản hồi </label>
                                                    </div>
                                                    <div class="col-8">
                                                        <textarea id="noidung" class="form-control"><?php echo $tf->feedback;?></textarea>
                                                    </div>
                                                </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- end modal xem thông tin phản hồi-->
                        <?php
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div>



    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="js/index.js"></script>     

</body>
</html>