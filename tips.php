<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="asset/css/styleku.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <script type="text/javascript" src="assets/script.js"></script>
    <title>Pariwisata</title>
</head>

<style>
    #atas button:hover{
        background-color: rgb(255, 255, 255);
        color: rgb(0, 0, 0);
    }

    #atas button{
        background-color: black;
        color: rgb(255, 254, 254);
    }
  </style>

<body>
  <!-- Navbar Atas -->
    <div class="container-fluid" id="atas">
        <br>
        <div class="row justify-content-between">
          <div class="col-6">
              <h3>Pariwisata</h3>
              <p>Tempat untuk mencari referensi tempat wisata terbaik</p>
          </div>
        </div>  
    </div>
  <!-- Navbar Atas -->

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
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container-xl">
        <a class="navbar-brand" href="index.php">Pariwisata</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Beranda<span class="sr-only">(current)</span></a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="kategori.php">kategori</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="produk.php">Produk</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="tamu.php">Buku Tamu</a>
          </li> -->
          <li class="nav-item active">
            <a class="nav-link" href="tips.php">Tips Berwisata</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tentang.php">Tentang Kami</a>
          </li>
          <li class="nav-item active"> 
          <a class="nav-link btn btn-danger" data-toggle="modal" data-target="#exampleModal">Login</a>
          </li>
          <p>|</p>
          </li>
          <li class="nav-item active">           
          <a class="nav-link btn btn-danger" data-toggle="modal" data-target="#exampleModal1">Register</a>
          </li>
        </ul>
        <!-- <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> -->
      </div>
    </div>
  </nav>
<!-- Navbar -->

<!-- Corousel -->
  <div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
      <li data-target="#demo" data-slide-to="4"></li>
    </ul>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="asset/gambar/RajaAmpat.jpg" alt="Raja Ampat" width="100%" height="500">
        <div class="carousel-caption">
          <h3><strong>Bahari</strong></h3>
        </div>   
      </div>
      <div class="carousel-item">
        <img src="asset/gambar/Borobudur.jpg" alt="Borobudur" width="100%" height="500">
        <div class="carousel-caption">
          <h3><strong>Budaya</strong></h3>
        </div>   
      </div>
      <div class="carousel-item">
        <img src="asset/gambar/Teh.jpg" alt="Kebun Teh Jogja" width="100%" height="500">
        <div class="carousel-caption">
          <h3><strong>Agrowisata</strong></h3>
        </div>   
      </div>
      <div class="carousel-item">
        <img src="asset/gambar/icon/alam.jpg" alt="Cagar Alam Pangandaran" width="100%" height="500">
        <div class="carousel-caption">
          <h3><strong>Cagar Alam</strong></h3>
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
<!-- Corousel -->

<!-- Isi -->
  <div id="isi">
    <div class="container">
    <h3>9 Tips Liburan Aman dan Nyaman</h3><br>
			<p><b>1. Tidak Melebihi Kapasitas</b></p>
			<p>Agar nyaman dan selamat, hindari mengangkut penumpang dan barang melebih kapasitas kendaraan. Jika kelebihan beban, maka keselamatan penumpang yang menjadi taruhan.<br>
			<p><b>2. Bawa Uang Tunai yang Cukup</b></p>
			<p>Selama perjalanan, kita tidak akan tahu apakah akan bertemu ATM atau tidak di sepanjang jalan. Sebab itu, siapakan uang tunai, karena tidak semua toko menyediakan mesin debit dan kartu kredit.<br>
			<p><b>3. Bawa Makanan & Minuman Cukup</b></p>
			<p>Membawa makanan dan minuman cukup selama perjalanan juga penting. Sebab, kita belum tentu menemukan minimart, sehingga disarankan untuk menyiapkan makanan ringan hingga makanan agak berat seperti roti.<br>
			<p><b>4. Aplikasi GPS/Peta Mudik</b></p>
			<p>GPS di smartphone kita juga penting untuk mengecek kemacetan hingga jalan alternatif lainnya.<br>
			<p><b>5. Baterai & Pulsa</b></p>
			<p>Pastikan baterai dan pulsa telepon seluler Anda dalam kondisi penuh. Jangan sampai terjadi, dalam keadaan darurat telepon tidak bisa digunakan.<br>
			<p><b>6. Kondisi Tubuh</b></p>
			<p>Ini yang terpenting dan wajib disiapkan sebelum keberangkatan, kondisi badan juga perlu mendapat perhatian. Perjalanan panjang membutuhkan kondisi badan yang prima. Pastikan Anda dalam kondisi fit sebelum memulai perjalanan jauh.<br>
      <p><b>7. Istirahat Sebentar Jika Lelah</b></p>
			<p>Perjalanan yang jauh dan macet sudah pasti akan membuat kita kelelahan menyetir, maka jangan memaksakan. Istirahat sejenak di rest area atau pom bensin terdekat. Mengantuk dapat membahayakan diri sendiri dan orang lain juga.<br>
      <p><b>8. Hiburan</b></p>
			<p>Macet adalah rintangan utama yang tidak mungkin Anda hindari dalam perjalanan mudik. Ada baiknya Anda mempertimbangkan untuk membawa barang-barang yang sekiranya dapat menghibur dari kebosanan. Koleksi kaset, CD, MP3, atau buku biasanya menjadi teman setia dalam perjalanan.<br>
      <p><b>9. Periksa Kondisi Kendaraan</b></p>
			<p>Hal pertama yang perlu kita lakukan adalah mengecek kondisi kendaraan. Umumnya sebelum berpergian jauh, sudah banyak orang yang mengecek mobilnya ke bengkel. Periksa bagian mobil pada mesin, rem, oli, roda, dan air bag sebelum berangkat.<br>
    </div>
  </div>
<!-- Isi -->

<!-- about -->
<div id="about">
    <div class="container footer">
      <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-left">
        <h1>Pariwisata</h1>
        <h2>About Us</h2>
        <a href="#"><i class="fab fa-facebook" style='font-size:36px'></i></a>
        <a href="#"><i class="fab fa-instagram" style='font-size:36px'></i></a>
        <a href="#"><i class="fa fa-envelope" style='font-size:36px'></i></a>
        <a href="#"><i class="fa fa-phone" style='font-size:36px'></i></a>
        <th></th>

        <!-- <p><img src="asset/gambar/icon/telp.png" width="20px"> : 082322577960</p>
        <p><img src="asset/gambar/icon/email.png" width="20px"> : ElectronicStore@gmail.com</p>
        <p><img src="asset/gambar/icon/fb.png" width="20px"> Faceboook : Electronic Store</p>
        <p><img  src="asset/gambar/icon/ig.jpg" width="20px"> Instagram : @electronicStore</p>  -->
      <!-- </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          
            <form action="admin/aksi_tamu.php" method="post">
              <div class="from-grub">
                  <label for="nama">Name</label>
                  <input type="text" class="form-control" id="nama" placeholder="your name" name="nama">
              </div>
              <div class="from-grub">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" placeholder="your email" name="email">
              </div>
              <div class="from-grub">
                  <label for="pesan">Comment</label>
                  <textarea class="form-control" rows="5" id="pesan" name="pesan"></textarea>
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
      </div> -->
    </div>
  </div>
  <!-- about -->

  <!-- kaki -->
  <div id="kaki">
    <!-- <div class="container"> -->
      <h5 class="text-center">Pariwisata.COM © 2023</h5>
    <!-- </div> -->
  </div>
  <!-- kaki -->
    
</body>
</html>