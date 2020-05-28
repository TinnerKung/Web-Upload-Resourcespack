<?php
if (!empty($_POST["pass"]) && $_POST["pass"] === "Sycer" && $_FILES["img"]["error"] == 0) {
  $name = substr((uniqid()),0,10);
  $ext = pathinfo($_FILES["img"]["name"], PATHINFO_EXTENSION);
  $filename = $name.".".$ext;
  move_uploaded_file ($_FILES["img"]["tmp_name"], "page/resources_pack/".$filename);
  ?>
  <center style="margin-top: 90px;">
  <p>อัปโหลดสำเร็จชือไฟล์ที่ได้รับ <strong><?php echo $_FILES["img"]["name"]; ?></strong></p>
  <p>ชือไฟล์ที่ได้ <strong><?php echo $filename ?></strong></p>
  <p>ลิงค์โหลด <strong>https://sycerclub.tk/page/resources_pack/<?php echo $filename ?></strong></p>
  <p>เอาเข้า server.properties <strong>resource-pack=https\://sycerclub.tk/page/resources_pack/<?php echo $filename ?></strong></p>
  <a type='button' href='https://sycerclub.tk/?page=resourcespack_view&sp=page/resources_pack/<?php echo $filename ?>' class='btn btn-indigo btn-sm m-0'>ไปหน้า VIEW</a>
  </center>
  <?php
}
 ?>
<center>
<form style="margin-top: 90px;" action="" enctype="multipart/form-data" method="post">
<hr>
  <input type="file" name="img" accept=".zip,.rar,.7zip">
  <input type="password" placeholder="password" name="pass">
  <button type="submit">อัปโหลด</button>
</form>
</center>