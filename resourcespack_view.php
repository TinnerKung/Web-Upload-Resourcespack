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
body {
	background-color: black;
}
.top-nav-collapse {
      background-color: #954242 !important;
    }

    .navbar:not(.top-nav-collapse) {
      background: black !important;
    }

    @media (max-width: 991px) {
      .navbar:not(.top-nav-collapse) {
        background: #954242 !important;
      }
    }
    .img {
  position: relative;
  padding-bottom: 56.2%;
}

.img img {
  position: absolute;
  object-fit: cover;
  width: 100%;
  height: 100%;
}

    @media screen and (min-width: 1224px) {
    .wrapper {
        width: 90%;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        grid-gap: 20px;
    }
    .searchbar {
        width: 1000px;
    }
}

@media screen and (min-width: 1044px) and (max-width: 1224px) {
    .wrapper {
        width: 90%;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        grid-gap: 20px;
    }
    .searchbar {
        width: 750px;
    }
}

@media screen and (min-width: 845px) and (max-width: 1044px) {
    .wrapper {
        width: 90%;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-gap: 20px;
    }
    .searchbar {
        width: 600px;
    }
}

@media screen and (max-width: 844px) {
    .wrapper {
        width: 90%;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1fr;
        grid-gap: 20px;
    }
    .searchbar {
        width: 500px;
    }
}

</style>

<style>
#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)}
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)}
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
</style>
</head>
<body>
<header>
  <br>
  <main style="" id="about">
    <div class="container">
<center><font color="white">
<section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text" style="margin-top: 4em">
    <h2 class="font-weight-bold text-center h1 my-5">Upload Resources Pack</h2>
    <p class="text-center grey-text mb-5 mx-auto w-responsive">บริการอัปโหลด Resources Pack เพือการเล่นในเซิฟเวอร์</p>
</section>
</font></center>
<font color="white">
<hr>
<center>
<?php $resources_pack = isset($_GET['sp']) ? $_GET['sp'] : "page/404.html" ;
include "config.php";
?>
<p>อย่าลืมสนับสนุนพวกเราเพืออยู่รอด</p>
<img src="https://gifimage.net/wp-content/uploads/2017/10/cirno-gif-8.gif">
<p>วอเลท&พร้อมเพลย์ 0652366373</p>
<hr>
<p>ลิงค์โหลด <strong><?php echo $resourcespack_view ?><?php echo $resources_pack ?></strong></p>
<p>เอาเข้า server.properties <strong>resource-pack=<?php echo $serverminecraftresourcespacklink_view ?><?php echo $resources_pack ?></strong></p>
<a type='button' href='<?php echo $resources_pack ?>' class='btn btn-indigo btn-sm m-0'>Download</a>
<br>
</font>
</center>
</header>
<br><br>
