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
         <!-- about -->
      <div class="about">
            <!-- Left Image -->
            <section class="left-image">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6">
                    <img src="pic1.jpg" alt="">
                  </div>
                  <div class="col-md-6">
                    <div class="right-content">
                      <h4>Experience</h4>
                      <p>Ada begitu banyak pengalaman yang saya dapat selma 3 semester ini, salah satunya adalah pemrograman web, dengan adanya mata kuliah pemrograman web saya mengerti tentang komponen-komponen yang ada pada web serta apa saja yang di perlukan untuk membangun sebuah web</p>
                      <div class="primary-button">
                        <a href="#" class="btn">Read More</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            <!-- Right Image -->
            <section class="right-image">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6">
                    <div class="left-content">
                      <h4>Reason</h4>
                      <p>Alasan saya masuk program studi Teknik Informatika sallah satunya yaitu melihat perkembangan teknologi saat ini dimana banyak sekali sektor-sektor usaha yang memanfaatkan teknologi informasi.</p>
                      <div class="primary-button">
                        <a href="#">Read More</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <img src="pic1.jpg" alt="">
                  </div>
                </div>
              </div>
            </section>

          </div>
        </div>
    </section>
    </div>
<!-- akhir about -->
        </div>
      </div>
      
    </div>
      
    
</body>
</html>