<html lang="th">
 <head>
   <meta charset="utf-8">
<title>Sycer Server</title>
<link rel="icon" href="favicon.png">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->
<link href="https://fonts.googleapis.com/css?family=Sriracha&display=swap" rel="stylesheet">
<link rel="stylesheet" href="mdb/css/mdb.min.css">
<link rel="stylesheet" href="mdb/css/bootstrap.min.css">
<link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@3/dark.css" rel="stylesheet">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
<style>
* {
    font-family: 'Sriracha', cursive;
}
</style>
</head>
<body>
<?php
include "config.php";
if (!empty($_POST["pass"]) && $_POST["pass"] === "password" && $_FILES["img"]["error"] == 0) {
  $name = substr((uniqid()),0,10);
  $ext = pathinfo($_FILES["img"]["name"], PATHINFO_EXTENSION);
  $filename = $name.".".$ext;
  move_uploaded_file ($_FILES["img"]["tmp_name"], "page/resources_pack/".$filename);
  ?>
  <center>
  <p>อัปโหลดสำเร็จชือไฟล์ที่ได้รับ <strong><?php echo $_FILES["img"]["name"]; ?></strong></p>
  <p>ชือไฟล์ที่ได้ <strong><?php echo $filename ?></strong></p>
  <p>ลิงค์โหลด <strong><?php echo $resourcespack_admin ?><?php echo $filename ?></strong></p>
  <p>เอาเข้า server.properties <strong>resource-pack=<?php echo $serverminecraftresourcespacklink_admin ?><?php echo $filename ?></strong></p>
  <a type='button' href='<?php echo $gotoview_admin ?><?php echo $filename ?>' class='btn btn-indigo btn-sm m-0'>ไปหน้า VIEW</a>
  </center>
  <?php
}
 ?>
<center>
<form action="" enctype="multipart/form-data" method="post">
<hr>
  <input type="file" name="img" accept=".zip,.rar,.7zip">
  <input type="password" placeholder="password" name="pass">
  <button type="submit">อัปโหลด</button>
</form>
</center>
</body>
