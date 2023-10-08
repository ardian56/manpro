
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Pariwisata</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- Custom styles for this template -->
    <link href="album.css" rel="stylesheet">
  </head>

  <body>

<!-- Modal Login -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-lock"></i> Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <form role="form" action="admin/cek_login.php" method="POST" name="login">
                <div class="form-group">
                  <label for="username"><i class="bi bi-person"></i> Username</label>
                  <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
                </div>
                <div class="form-group">
                  <label for="password"><i class="bi bi-key-fill"></i> Password</label>
                  <input type="text" class="form-control" id="password" placeholder="Enter password" name="password">
                </div>
                <div class="checkbox">
                  <label><input type="checkbox" value="" checked>Remember me</label>
                </div>
                  <button type="submit" class="btn btn-success btn-block" value="login"><i class="bi bi-unlock"></i>Login</button>
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
            <h5 class="modal-title" id="exampleModalLabel"><i class="bi bi-lock"></i> Register</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <form role="form" method="post" action="admin/aksi_register.php">
                    <div class="form-group">
                      <label for="nama"><i class="bi bi-person"></i> Nama</label>
                      <input type="text" class="form-control" id="nama" placeholder="Enter nama" name="nama">
                    </div>
                    <div class="form-group">
                      <label for="username"><i class="bi bi-person"></i> Username</label>
                      <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="password"><i class="bi bi-key"></i> Password</label>
                        <input type="text" class="form-control" id="password" placeholder="Enter password" name="password">
                      </div>
                    <div class="form-group">
                      <label for="email"><i class="bi bi-envelope"></i> Email</label>
                      <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
                    </div>
                    <div class="form-group">
                      <label for="nomer"><i class="bi bi-phone"></i> Nomer Hp</label>
                      <input type="text" class="form-control" id="nomer" placeholder="Enter Nomer HP" name="nomer">
                    </div>
                    <div class="form-group">
                      <label for="alamat"><i class="bi bi-house-fill"></i> Alamat</label>
                      <input type="text" class="form-control" id="alamat" placeholder="Enter Alamat" name="alamat">
                    </div>
                      <button type="submit" name="register" class="btn btn-success btn-block"><i class="bi bi-unlock"></i> Register</button>
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
    <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">Tentang Kita</h4>
              <p class="text-muted">Kita adalah website untuk memesan paket liburan bagi masyarakat yang ingin melakukan pariwisata. </p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Contact</h4>
              <ul class="list-unstyled">
                <li><a href="#" class="text-white"><i class="bi bi-facebook"> Facebook</i></a></li>
                <li><a href="#" class="text-white"><i class="bi bi-twitter"> Twitter</i></a></li>
                <li><a href="#" class="text-white"><i class="bi bi-instagram"> Instagram</i></a></li>
                <li><a href="#" class="text-white"><i class="bi bi-envelope"> Email</i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex ">
          <a href="index.php" class="navbar-brand d-flex align-items-center">
            <i class="bi bi-house-fill"> <strong>Pariwisata</strong></i>
          </div>
            <!-- home -->
            <!-- <a href="index.php"><button class="btn btn-outline-primary" type="button" ><i class="bi bi-house"></i></button></a> -->
            <!-- keranjang -->
            <a href="keranjang.php"><button class="btn btn-outline-warning mr-2" type="button" ><i class="bi bi-cart"></i></button></a>
            <!-- account -->
            <div class="dropdown">
              <button class="btn btn-outline-danger dropdown-toggle mr-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="bi bi-person"></i> Account
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" data-toggle="modal" data-target="#exampleModal">Login</a>
                <a class="dropdown-item" data-toggle="modal" data-target="#exampleModal1">Register</a>
              </div>
            </div>
          </a>
          
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      </div>
    </header>

   
    <main role="main">
      


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/vendor/holder.min.js"></script>
  </body>
</html>
