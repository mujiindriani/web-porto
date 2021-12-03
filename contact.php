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
          <li><a href="#">Beranda<span class="sub_icon glyphicon glyphicon-link"></span></a></li>
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
        <!-- contact -->
<section class="contact" id="contact">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h2>Contact Us</h2>
            <hr>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6 col-sm-offset-3">
            <form>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="" id="nama" class="form-control" placeholder="nama anda">
              </div>

              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="" id="email" class="form-control" placeholder="email aktif anda">
              </div>

              <div class="form-group">
                <label for="pesan">Pesan</label>
                <textarea class="form-control" id="pesan" rows="10" placeholder="ketikkan pesan anda"></textarea>
              </div>

              <button type="submit" class="btn btn-info"><i class="glyphicon glyphicon-send"></i> Kirim Pesan</button>
            </form>
          </div>
        </div>
      </div>
    </section>
<!-- akhir contact --> 
        </div>
      </div>
      
    </div>
      
  
</body>
</html>