<?php
   //function đổ dữ liệu th
    
   $pdo = new PDO("mysql:host=localhost;dbname=talknow","root","");
   $ses = $_SESSION['username'];
   $sql = "SELECT username, email, sex, birthday, phone, role, image FROM user WHERE user.username='$ses';";
   $stmt = $pdo->prepare($sql);
   $stmt->execute();
   $result = $stmt->fetch();
   $hung_username = $result["username"];
   $hung_email = $result["email"];
   $hung_sex = $result["sex"];
   $hung_birthday = $result["birthday"];
   $hung_phone = $result["phone"];
   $hung_image = $result["image"];
   $hung_role = $result["role"];
?>