<?php
    include('../Controller/controller_talknow_library.php');
    $c_library = new c_library();
    $content = $c_library->xulyTailieu();
    $table_materials = $content['materials'];
    //print_r($table_materials);
    if(isset($_POST['btn_deleteDoc'])){
        $matl = $_POST['matl'];
        $tl = $c_library->deleteDoc($matl);
        print_r($tl);
    }

    if(isset($_POST['btnSuaTaiLieu'])){
        $documentName = $_POST['tentailieu'];
        $matailieu = $_POST['matailieu'];
        $doc = $c_library->c_updateTailieu($documentName, $matailieu);
    }
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

<body conload = "window.print();">
    <div class="container-fluid">
    <div>
        <?php
            echo $c_library->thongbao;
        ?>
    </div>
        <div class="row">
            <table id="table-phanhoi" class="table">
                <thead>
                    <tr class="d-flex">
                        <th class="col-2">Người gửi</th>
                        <th class="col-3">Tên tài liệu</th>
                        <th class="col-5">File tải về</th>
                        <th class="col-2">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach($table_materials as $tm){
                        ?>
                            <tr class="d-flex">
                                <td class="col-2"><?=$tm->author?></td>
                                <td class="col-3"><?=$tm->documentName?></td>
                                <td class="col-5"><a href="<?=$tm->file?>" download="<?=$tm->file?>"><?=$tm->file?></a></td>
                                <td class="col-1">
                                    <button class="btn btn-success" id="btn_updateDoc" data-toggle="modal" data-target="#modal_updateDoc<?php echo $tm->documentId;?>">Sửa</button>
                                </td>
                                <form action="" method="POST" onsubmit="return confirm('Bạn muốn xóa tài liệu này?');">
                                <td class="col-1">
                                    <input type="text" name="matl" value="<?php echo $tm->documentId; ?>" style="display:none;">  
                                    <button type="submit" class="btn btn-danger" name="btn_deleteDoc">Xóa</button>
                                </td>
                                </form>
                            </tr>
                            <div class="modal fade" id="modal_updateDoc<?php echo $tm->documentId;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Sửa tài liệu</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="" method="POST" id="formSuaTaiLieu">
                                        <div class="modal-body">
                                                <div class="row">
                                                    <input type="text" name="matailieu" value="<?php echo $tm->documentId;?>" style="display:none;">
                                                </div>
                                                <div class="row">
                                                    <div class="col-5">
                                                        <label for="tentailieucu">Tên tài liệu cũ: </label>
                                                    </div>
                                                    <div class="col-7">
                                                        <input type="text" class="form-control" name="tentailieucu" id="tentailieucu" value = "<?php echo $tm->documentName;?>">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-5">
                                                        <label for="tentailieu">Tên tài liệu mới: </label>
                                                    </div>
                                                    <div class="col-7">
                                                        <input type="text" class="form-control" name="tentailieu" id="tentailieu">
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                                            <input type="submit" class="btn btn-warning" name="btnSuaTaiLieu" id="btnSuaTaiLieu" value="Lưu">
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php
                    }
                ?>
                </tbody>
            </table>
        </div>
        <div class="row">
        </div>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <!-- <script src="js/index.js"></script> -->
    <!-- <script type="text/javascript">
        $(document).on('click', '#btnSuaTaiLieu', function(){
        //    alert(1111);
           location.reload();
        });
    </script> -->
</body>

</html>