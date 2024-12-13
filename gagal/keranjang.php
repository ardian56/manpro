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
        <h3>Keranjang Belanjaan</h3>
        <br><br>
        <table class="table table-responsive">
        <thead>
            <tr>
                <th>No</th>
                <th style="padding-right:70px;">Nama Produk</th>
                <th style="padding-right:70px;">Harga Produk</th>
                <th style="padding-right:50px;">Jumlah Produk</th>
                <th style="padding-right:90px;">Total Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
          <?php
           $nomor = 1;
           $total = 0;
            if (isset($_SESSION['keranjang']) && !empty($_SESSION['keranjang'])) {
             
          
              foreach ($_SESSION['keranjang'] as $id => $jumlah) {
                  // Dapatkan informasi barang dari database (ganti dengan kode Anda)
                  $ambil = mysqli_query($db, "SELECT * FROM barang WHERE id='$id'");
                  $pecah = mysqli_fetch_assoc($ambil);
                  
                  // Hitung subharga
                  $subharga = $pecah['harga'] * $jumlah;
                  $total += $subharga;
          
                  // Tampilkan item dalam tabel
                  echo '<tr>';
                  echo '<td>' . $nomor . '</td>';
                  echo '<td>' . $pecah['nama'] . '</td>';
                  echo '<td>Rp. ' . number_format($pecah['harga']) . '</td>';
                  echo '<td>' . $jumlah . '</td>';
                  echo '<td>Rp. ' . number_format($subharga) . '</td>';
                  echo '<td><a href="hapus_keranjang.php?id=$pecah[nama] class="btn btn-danger btn-ss"> Hapus </a></td>';
                  echo '</tr>';
          
                  $nomor++;
              }
          } else {
              echo 'Keranjang belanja kosong.';
          }
           
           ?>
         
            </tbody>
            </table>
            </div>
            <div class="container">
                </p>Total Harga Pembelanjaan adalah : Rp. <?php echo number_format($total);?></p>
              
                    <a href="index.php" class="btn btn-success"> Lanjut Berbelanja</a>
                    <a href="beli.php" class="btn btn-primary">Beli</a>
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
    <footer id="footer" class="fixed-bottom">
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