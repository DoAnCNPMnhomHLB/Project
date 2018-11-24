
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Talknow</title>
    <link rel="stylesheet" href="fontawesome-free-5.5.0-web/css/all.css" type="text/css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/1.7.3/socket.io.min.js"></script>
</head>

<body>
    <table>
        <tr>
            <th>Họ tên</th>
            <th>Mật khẩu</th>
            <th>Địa chỉ</th>
        </tr>

    </table>
   
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script>
        var socket = io.connect("http://localhost:3001");

        socket.on("new_order", function(data) {
            $("table").append("<tr> <td>" + data.hoten + "</td> <td>" + data.matkhau + "</td> <td>" + data.diachi + "</td> </tr>");
        });
    </script>
</body>
</html>