<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header('location:./signin.php');
    }
?>


<table id="table-phanhoi" class="table">
    <thead>
        <tr class="d-flex">
            <th class="col-3">Tên tài liệu</th>
            <th class="col-3">Người gửi</th>
            <th class="col-6">File tải về</th>
        </tr>
    </thead>
    <tbody>
    <?php
        include('../Controller/controller_talknow_library.php');
        $c_library = new c_library();
        if(isset($_POST['tukhoa'])){
            $key = $_POST['tukhoa'];
            $tailieu = $c_library->tracuu($key);
        }
        
        foreach($tailieu as $tl){
            ?>
                <tr class="d-flex">
                    <td class="col-3"><?=$tl->documentName?></td>
                    <td class="col-3"><?=$tl->author?></td>
                    <td class="col-6"><a href="<?=$tl->file?>" download="<?=$tl->file?>"><?=$tl->file?></a></td>
                </tr>
            <?php
        }

    ?>
    </tbody>
</table>



