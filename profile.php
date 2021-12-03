<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>uas</title>
    <link id="bootstrap-css" rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>


</head>
<body>
<div id="wrapper" class="active">
      
      <!-- Sidebar -->
           
      <div id="sidebar-wrapper">
      <ul id="sidebar_menu" class="sidebar-nav">
           <li class="sidebar-brand"><a id="menu-toggle" href="#">Menu<span id="main_icon" class="glyphicon glyphicon-align-justify"></span></a></li>
      </ul>
        <ul class="sidebar-nav" id="sidebar">     
          <li><a href="index.php">Beranda<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
          <li><a href="#">Lain-Lain<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
          <li><a href="#">Logout<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
        </ul>
      </div>
      <script> 
        $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
        });
    </script>
      <!-- Halaman Konten -->
<div id="page-content-wrapper">
        <!-- Buat seluruh isi konten berada dalam class="page-content inset" -->
        <div class="page-content inset">
          <div class="row">
              <div class="col-md-12">
            <header>
                <div class="header-left">
                <a href="index.php"> <img class="logo" src="pic13.png" style="height:70px; width:70px;"></a>
                </div>
                <!-- Tambahkan ikon menu disini -->
                 <div class="header-right">
                <a href="profile.php">Profile</a>
                <a href="about.php">About Us</a>
                <a href="contact.php" >Contact Us</a>
                <a href="porto.php">Portofolio</a>
                </div>
            </header>
               </div>
          </div>
         <!-- jumbotron -->
   <div class="jumbotron text-center">
      <img src="pic4.jpg" class="img-circle">
      <h1>Lia Lusita</h1>
      <p>Mahasiswi | Teknik Informatika | 2019</p>
    </div>
    <!-- akhir jumbotron --> 
     <!-- about -->
     <section class="about" id="about">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center">MY PROFILE</h2>
            <hr>
          </div> 
        </div>

        <div class="row">
          <div class="col-sm-4">
              <H4>Profile</H4>
            <p>Nama:Lia Lusita <br>Nick name:Ita <br> Nim:20119123 <br>Daerah asal: Kendal <br> Tempat Tanggal Lahir: Batang, 10 Januari 1996 <br>Agama: Islam <br>Pekerjaan: Karyawan Swasta</p>
          </div>
          <div class="col-sm-4">
              <h4>Find me on</h4>
            <p>Instagram:@ita_lia <br> Facebook:Li_lusita <br> Email:lialusita@gmail.com <br> whatsup: <br> No telp: </p>
          </div>
          <div class="col-sm-4">
              <h4>Others</h4>
            <p>Hobi: Listening To Music <br> Mata Kuliah Yang disukai: Pemrograman Basisdata <br> Teman Dekat: <br>- Vivi <br> - Dewi <br>- Septin</p>
          </div>
        </div>
      </div>
    </section>
<!-- akhir about -->
        </div>
      </div>
      
    </div>
      
 
</body>
</html>