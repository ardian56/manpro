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
    <link rel="stylesheet" href="css/style.css">
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

<section id="nav">
  <nav class="navbar navbar-expand-lg bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand text-light" href="#">Pariwisata</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="mr-1">
              <a href="index.php"><button class="btn btn-outline-primary" type="button" ><i class="bi bi-house-fill"></i></button></a>
            </li>
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
</section>

<!-- isi -->

<div id="isi3">
    <div class="container">
    <div class="row">
  <div class="col-sm-9">
    <div class="card">
      <div class="card-body">
        <img class="card-img-top" src="asset/gambar/RajaAmpat.jpg" height="400px" width="100%"> <!-- foto produk -->
        <h5 class="card-title">Raja Ampat</h5>    <!-- nama produk -->
        <p class="card-text">Wisata adalah kegiatan yang melibatkan perjalanan atau kunjungan ke tempat-tempat menarik untuk tujuan rekreasi, hiburan, atau penjelajahan. </p>      <!-- deskripsi produk -->
        <h4 class="card-text">Rp 1.000.000</h4>      <!-- harga produk -->
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Tertarik?</h5>
        <p class="card-text">Silahkan Memesan</p>      
        <a href="beli.php?id=<?php echo  $perproduk['id']; ?>">
        <button type="submit" class="btn btn-primary">Tambahkan ke Keranjang</button></a> <!-- Tambah Keranjang -->    
      </div>
    </div>
  </div>
</div>
    </div>
  </div>

<!-- isi -->
  </div>
            </div>
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