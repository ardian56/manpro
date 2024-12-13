<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pariwisata</title>
    <!-- Required meta tags always come first -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Album - Photo Collection Template , Responsive Bootstrap 4 template , bootstrap 4 starter template, bootstrap4 template, Album template, Photography Template">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" lang="en" content="Simple Bootstrap 4 Photography template , Responsive and Modern HTML5 Template made from bootstrap 4.">
    <meta name="keywords" lang="en" content="photography template, bootstrap 4 template,bootstrap 4 album template, responsive bootstrap 4 template, bootstrap 4, bootstraping, bootstrap4, oribitthemes, othemes">
    <meta name="robots" content="index, follow">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <meta name="description" content="">
    <!--Font Awesome-->
    <link rel="stylesheet" href="dist/font-awesome/css/font-awesome.min.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/main.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
    <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
    <link href="asset/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="asset/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="asset/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="asset/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="asset/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <!--[if IE]>
      <link href="https://cdn.jsdelivr.net/gh/coliff/bootstrap-ie8/css/bootstrap-ie9.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/g/html5shiv@3.7.3"></script>
    <![endif]-->
    <!--[if lt IE 9]>
      <link href="https://cdn.jsdelivr.net/gh/coliff/bootstrap-ie8/css/bootstrap-ie8.min.css" rel="stylesheet">
    <![endif]-->
</head>

<body>
    
<!-- Modal Login -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><img src="asset/gambar/icon/icon kunci.png" width="30px"> Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <form role="form" action="admin/cek_login.php" method="POST" name="login">
                <div class="form-group">
                  <label for="username"><img src="asset/gambar/icon/icon login.png" width="20px"> Username</label>
                  <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
                </div>
                <div class="form-group">
                  <label for="password"><img src="asset/gambar/icon/icon password.png" width="20px"> Password</label>
                  <input type="text" class="form-control" id="password" placeholder="Enter password" name="password">
                </div>
                <div class="checkbox">
                  <label><input type="checkbox" value="" checked>Remember me</label>
                </div>
                  <button type="submit" class="btn btn-success btn-block" value="login"><img src="asset/gambar/icon/icon masuk.png" width="20px"> Login</button>
              </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">Register</button>
          </div>
        </div>
      </div>
    </div>
<!-- Modal Login -->

<!-- Modal Register -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><img src="asset/gambar/icon/icon kunci.png" width="30px"> Register</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <form role="form" method="post" action="admin/aksi_register.php">
                    <div class="form-group">
                      <label for="nama"><img src="asset/gambar/icon/icon login.png" width="20px"> Nama</label>
                      <input type="text" class="form-control" id="nama" placeholder="Enter nama" name="nama">
                    </div>
                    <div class="form-group">
                      <label for="username"><img src="asset/gambar/icon/icon login.png" width="20px"> Username</label>
                      <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="password"><img src="asset/gambar/icon/icon password.png" width="20px"> Password</label>
                        <input type="text" class="form-control" id="password" placeholder="Enter password" name="password">
                      </div>
                    <div class="form-group">
                      <label for="email"><img src="asset/gambar/icon/email.png" width="20px"> Email</label>
                      <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
                    </div>
                    <div class="form-group">
                      <label for="nomer"><img src="asset/gambar/icon/telp.png" width="20px"> Nomer Hp</label>
                      <input type="text" class="form-control" id="nomer" placeholder="Enter Nomer HP" name="nomer">
                    </div>
                    <div class="form-group">
                      <label for="alamat"><img src="asset/gambar/icon/icon login.png" width="20px"> Alamat</label>
                      <input type="text" class="form-control" id="alamat" placeholder="Enter Alamat" name="alamat">
                    </div>
                      <button type="submit" name="register" class="btn btn-success btn-block"><img src="asset/gambar/icon/icon masuk.png" width="20px"> Register</button>
              </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
<!-- Modal Register-->
<!-- Navbar -->
<section id="nav">
  <nav class="navbar navbar-expand-lg bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand text-light" href="#">Pariwisata</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <form class="d-flex" role="search">
              <a href="keranjang.php"><button class="btn btn-outline-danger" type="button" ><i class="bi bi-cart"></i></button></a>
            </form>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Account
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" data-toggle="modal" data-target="#exampleModal">Login</a></li>
              <li><a class="dropdown-item" data-toggle="modal" data-target="#exampleModal1">Register</a></li>
            </ul>
          </li>
          <!--  <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li>-->
        </ul>
    </div>
  </div>
  </nav>
  <!-- Navbar -->
  <!-- Slider -->
</section>
    <div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
      <li data-target="#demo" data-slide-to="4"></li>
    </ul>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="asset/gambar/RajaAmpat.jpg" alt="Raja Ampat" width="100%" height="760">
        <div class="carousel-caption">
          <h3><strong>Raja Ampat</strong></h3>
        </div>   
      </div>
      <div class="carousel-item">
        <img src="asset/gambar/Borobudur.jpg" alt="Borobudur" width="100%" height="760">
        <div class="carousel-caption">
          <h3><strong>Candi Borobudur</strong></h3>
        </div>   
      </div>
      <div class="carousel-item">
        <img src="asset/gambar/bali.jpg" alt="Bali" width="100%" height="760">
        <div class="carousel-caption">
          <h3><strong>Bali</strong></h3>
        </div>   
      </div>
      <div class="carousel-item">
        <img src="asset/gambar/KarimunJawa.jpg" alt="Karimun Jawa" width="100%" height="760">
        <div class="carousel-caption">
          <h3><strong>Karimun Jawa</strong></h3>
        </div>   
      </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
  <!-- Slider -->
  <!-- Produk -->
  <div class="container px-5 my-5 px-5">
            <div class="text-center mb-5">
              <br>
                <h2 class="fw-bolder">Produk</h2>
                </div>
    </div>
    <!-- Filter -->
<ul class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active btn btn-outline-primary mr-1">Semua</li>
          <li data-filter=".filter-laut" class="btn  btn-outline-primary mr-1">Laut</li>
          <li data-filter=".filter-candi" class="btn btn-outline-primary mr-1">Candi</li>
          <li data-filter=".filter-gunung" class="btn  btn-outline-primary mr-1">Pegunungan</li>
        </ul>
    <!-- Filter -->
<!-- 
        

                <div class="col">
                    <div class="col-md-3">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top" src="admin/foto produk/<?php echo $perproduk['foto'];?>" >
                            <div class="card-body">
                                <h3><?php echo $perproduk['nama'];?></h3>
                                <p class="card-text"><?php echo $perproduk['jenis'];?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">12 mins</small>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          
                        </div>
                      </div>
        

                      
  </div>
            </div> -->
    <div id="isi3">
    <div class="container">
    <div class="row">

      <?php
      include ('admin/confiq.php');

      $query = mysqli_query($db, "SELECT * FROM barang");

        while($perproduk = mysqli_fetch_array($query)){ ?>
        
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 card text-center mr-2 mb-1 row justify-content-center">
          <div class="thumbnail"><img src="admin/foto produk/<?php echo $perproduk['foto'];?>" alt="" width="150px">
            <div class="caption">
              <h3><?php echo $perproduk['nama'];?></h3> <!-- judul produk -->
              <p><?php echo $perproduk['jenis'];?></p> <!-- deskripsi singkat-->
                <div class="btn-group">
                  <a href="produk.php">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Lebih Lengkap</button>
                  </a>
                </div>
          </div>
          </div>
        </div>
        <?php }?>

      </div>
    </div>
  </div>
  <!-- Produk -->
        </div>
        <a href="#" class="btn btn-primary scrollUp">
            <i class="fa fa-arrow-circle-o-up"></i>
        </a>
    </main>
    <!-- Footer -->
    <footer id="footer">
        <p class="copyright">Pariwisata
            <span id="currentYear"></span> All Rights Reserved.
        </p>
        <div class="social">
            <a traget="_blank" href="#" title="facebook">
                <i class="fa fa-facebook"></i>
            </a>
            <a traget="_blank" href="#" title="twitter">
                <i class="fa fa-twitter"></i>
            </a>
            <a traget="_blank" href="#" title="instagram">
                <i class="fa fa-instagram"></i>
            </a>
        </div>
    </footer>
    <!-- jQuery first, then Bootstrap JS. -->
    <script src="dist/jquery/jquery.min.js"></script>
    <script src="dist/popper/popper.min.js" integrity=""></script>
    <script src="dist/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/main.min.js"></script>
</body>

</html>