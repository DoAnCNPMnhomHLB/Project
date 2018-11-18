
<!--modal ở dưới đây-->
    <!--modal đổi mật khẩu-->
    <div class="modal fade" id="modal-doimatkhau" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Đổi mật khẩu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-5">
                                <label for="current-password">Mật khẩu hiện tại: </label>
                            </div>
                            <div class="col-7">
                                <input type="password" name="current-password" id="current-password" value="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5">
                                <label for="new-password">Mật khẩu mới: </label>
                            </div>
                            <div class="col-7">
                                <input type="password" name="new-password" id="new-password" value="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5">
                                <label for="comfirm-password">Nhập lại mật khẩu mới: </label>
                            </div>
                            <div class="col-7">
                                <input type="password" name="comfirm-password" id="comfirm-password" value="">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-primary mybtn">Lưu</button>
                </div>
            </div>
        </div>
    </div>

    <!--modal cập nhật thông tin-->
    <?php include("set_info_pdo.php") ?>
    <div class="modal fade" id="modal-updateinfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cập nhật thông tin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                        <div class="row">
                            <div class="col-4">
                                <img src="<?php echo $hung_image;?>" alt="avatar">
                            </div>
                            <div class="col-8">
                                <input type="file" name="inputanh" id="inputanh" class="inputfile">
                                <label for="inputanh" id="lb-loadanh">Sửa ảnh đại diện</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <label for="username">Tên hiển thị: </label>
                            </div>
                            <div class="col-8">
                                <input type="text" name="username" id="username" value="<?php echo $hung_username; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <label for="sex">Giới tính: </label>
                            </div>
                            <div class="col-8">
                                <select id="sex" name="sex">
                                    <option value="Nam">Nam</option>
                                    <option value="Nu">Nữ</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <label for="ngaysinh">Ngày sinh: </label>
                            </div>
                            <div class="col-8">
                                <input type="date" name="ngaysinh" id="ngaysinh" value="<?php echo $hung_birthday; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <label for="email">Email: </label>
                            </div>
                            <div class="col-8">
                                <input type="text" name="email" id="email" value="<?php echo $hung_email; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <label for="sdt">Số điện thoại: </label>
                            </div>
                            <div class="col-8">
                                <input type="text" name="sdt" id="sdt" value="0<?php echo $hung_phone; ?>">
                            </div>
                        </div>
                        
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                    <input type="submit" class="btn btn-primary mybtn" value="Cập nhật" name="btn_update"/>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!--modal tạo nhóm-->
    <div class="modal fade" id="modaltaonhom" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tạo nhóm trò chuyện</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="input-tennhom" class="col-form-label"><b>Đặt tên nhóm:</b></label>
                            <input type="text" class="form-control" id="input-tennhom">
                        </div>
                        <div class="form-group">
                            <label for="SoLuongNguoi" class="col-form-label">Số lượng thành viên:</label>
                            <select class="form-control" id="SoLuongNguoi">
                                <option>Không giới hạn</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="textarea-mota" class="col-form-label">Mô tả nhóm:</label>
                            <textarea class="form-control" id="textarea-mota"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="input-tenban" class="col-form-label">Mời thêm bạn vào trò chuyện:</label>
                            <input type="text" class="form-control" id="input-tenban">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-primary" id="btnok">Tạo nhóm</button>
                </div>
            </div>
        </div>
    </div>

    <!--modal upload file-->
    <div class="modal fade" id="modalUploadFile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Đăng tài liệu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1" class="col-form-label">Phân loại tài liệu:</label>
                            <select class="form-control" id="exampleFormControlSelect1" name = "post_document">
                                <option value = "ielts">Tài liệu IELTS</option>
                                <option value = "toiec">Tài liệu TOEIC</option>
                                <option value = "av1">Anh Văn 1</option>
                                <option value = "av2">Anh Văn 2</option>
                                <option value = "av3">Anh Văn 3</option>
                                <option value = "others">Tài liệu khác</option>
                            </select>
                        </div>
                        <div>
                        <?php // Xử Lý Upload
                            //Connect database
                            $sv_host = 'localhost';
                            $sv_user = 'root';
                            $sv_password = '';
                            $sv_database = 'talknow';
                            $conn = mysqli_connect($sv_host,$sv_user,$sv_password,$sv_database) or die ('Khong ket noi duoc database');
                            mysqli_query($conn,"SET NAMES 'UTF8'");
                            $file_part = 'Undenfi';
                            
                            if (isset($_POST['btn_ok'])) {
                                $post_document = $_POST['post_document'];
                                $nameDoc = $_POST['nameDoc'];
                                $file_part = $_FILES['file']['name'];
                                $author = $_SESSION['username'];
                                if ($post_document == "" || $nameDoc == "") {
                                    echo '<script language="javascript">alert("Bạn vui lòng nhập đầy đủ thông tin!")</script>';
                                } else {

                                            move_uploaded_file($_FILES['file']['tmp_name'],'images/'.$file_part); 
                                            //di chuyển file vào folder images/
                                            //thực hiện việc lưu trữ dữ liệu vào db
                                            $file_part_sql = 'images/'.$file_part;
                                            $sql = "INSERT INTO library(documentId,kind_of_document,documentName,file, author) VALUES (null,'$post_document','$nameDoc','$file_part_sql','$author')";
                                                // thực thi câu $sql với biến conn lấy từ file connection.php
                                                mysqli_query($conn,$sql);
                                                
                                }
                            }
                        ?>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Đặt tên cho tài liệu:</label>
                            <input type="text" class="form-control" id="message-text" name = "nameDoc">
                        </div>
                        <input type="file" class="form-control-file inputfile" id="inputfile" name = "file">
                        <label for="inputfile"><i class="fas fa-upload"></i> <span id="labelFileUpload">Tải tệp lên</span></label>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                        <input type="submit" class="btn btn-warning" id="btn_ok" name="btn_ok" value="OK"/>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--modal phản hồi-->

    <div class="modal fade" id="modalfeedback" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Gửi phản hồi / Báo lỗi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="POST">
                <div class="modal-body">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Tiêu đề:</label>
                            <input type="text" class="form-control" id="recipient_name" name = "recipient_name">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Nội dung:</label>
                            <textarea class="form-control" id="message_text" name = "message_text"></textarea>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    <input type="submit" name="btnok" value="Gửi">
                </div>
                </div>
            </div>
        </div>
    </div>
    <!--modal giới thiệu-->
    <div class="modal fade" id="modalgioithieu" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="container-fluid">
                        <div class="row">
                            <h4 class="modal-title" id="exampleModalLongTitle">Talknow Web</h4>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <span class="span-version"><br>Phiên bản 1.0.0</span>
                            </div>
                            <div class="col-6">
                                <img src="images/Logo.png" alt="logo">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-6">
                                Phát triển bởi <br>
                                __ <br>
                                <b>Linh Hòa Bình Team</b><br><br>
                                Lớp 04_DHCNTT_1<br>
                                Trường Đại học Tài nguyên và Môi trường TP. Hồ Chí Minh
                            </div>
                            <div class="col-6">
                                Liên hệ <br>
                                __ <br>
                                <b>Tổng đài:</b>123456789<br><br>
                                <b>Email:</b>chuaco@gmail.com<br>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
            </div>
        </div>
    </div>

    