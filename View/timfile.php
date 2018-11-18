<?php 
    include('php_user.php');
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
    <link rel="stylesheet" href="css/timfile.css" type="text/css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <?php include('left_bar.php');?>
            <div class="col-md-9 rightbar">
                <div class="row titlebar">
                    <h5>Tra cứu tài liệu</h5>
                </div>
                <div class="row div-nhaptentailieu justify-content-center">
                    <div class="col-10">
                        <form action="" method="POST"> 
                            <!-- <div class="form-group">
                                <label for="phanloai" class="col-form-label">Phân loại tài liệu: </label>
                                <select class="form-control" id="phanloai">
                                    <option>Tài liệu IELTS</option>
                                    <option>Tài liệu TOEIC</option>
                                    <option>Anh Văn 1</option>
                                    <option>Anh Văn 2</option>
                                    <option>Anh Văn 3</option>
                                    <option>Tài liệu khác</option>
                                </select>
                            </div> -->
                            <div class="form-group">
                                <label for="input-tentailieu" class="col-form-label">Nhập tên tài liệu cần tìm:</label>
                                <input type="text" class="form-control" id="input-tentailieu" placeholder="Nhập tên tài liệu">
                            </div>
                            <button type="button" class="btn mybtn" id="btn_search">Tìm kiếm</button>
                        </form>
                    </div>
                </div>
                <div class="row div-titleketqua">
                    <h5>Kết quả tìm kiếm</h5>
                </div>
                <div id="data_search">

                </div>
            </div>
        </div>
    </div>
    <?php
        include 'modal.php';
    ?>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="js/index.js"></script>
    <script>
        $(document).ready(function(){
            $("#btn_search").click(function(){
                var keyword = $('#input-tentailieu').val();
                $.post("A_tracuutailieu.php", {tukhoa: keyword}, function(data){
                    $('#data_search').html(data);
                })
            })
        })
    </script>
</body>
</html>