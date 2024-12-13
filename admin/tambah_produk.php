<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-theme.css" rel="stylesheet">
    <link href="assets/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />    
    <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet" />
  </head>

  <body>
  <section id="container" class="">
     
      
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>
            <a href="index.php" class="logo"><span class="lite">Admin</span></a>

          
            </div>

            <div class="top-nav notification-row">                
                <ul class="nav pull-right top-menu">
                   
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                         <span class="username"><?php echo $_SESSION['username']?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li>
                                <a href="logout.php"> Log Out</a>
                            </li>
                        </ul>
                    </li>
                
                </ul>
            </div>
      </header>      
      
      <!-- sidebar-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <ul class="sidebar-menu">                
                  <li class="active">
                      <a class="" href="index.php">
                          <i class="icon_house_alt"></i>
                          <span>Home</span>
                      </a>
                  </li>
				  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_book"></i>
                          <span>Transaksi</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                        <li><a href="list_produk.php">Daftar Produk</a></li>
                        <li><a href="tambah_produk.php">Tambah Produk</a></li>
                        <li><a href="admin_tamu.php">Daftar Pesan</a></li>
                      </ul>
                  </li> 
					<li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_group"></i>
                          <span>User</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                      <li><a href="admin.php">Daftar Admin</a></li>                      </ul>
                  </li> 				  
                  
              </ul>
              <!-- sidebar-->
          </div>
      </aside>

<!-- isi -->
	   <section id="main-content">
          <section class="wrapper"> 
            <?php include "confiq.php";  ?>
            <div class="row">
                <div class="col-lg-12">
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="fa fa-laptop"></i>Tambah Produk</li>						  	
					</ol>
				</div>
			</div>              
            <form action="simpan_produk.php" method="post" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama Produk</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Likin Store" name="nama" id="nama">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jenis" class="col-sm-2 col-form-label">Jenis Produk</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Elektronika/Makanan Ringan" name="jenis" id="jenis">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kondisi" class="col-sm-2 col-form-label">Kondisi Produk</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Baru/Bekas" name="kondisi" id="kondisi">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="harga" class="col-sm-2 col-form-label">Harga Produk (Rp)</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" placeholder="Rp. xxx" name="harga"  id="harga">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="stok" class="col-sm-2 col-form-label">Stok Produk</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" placeholder="masukan jumlah" name="stok"  id="stok">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ukuran" class="col-sm-2 col-form-label">Ukuran Produk</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Masukan Ukuran/Besar" name="ukuran"  id="ukuran">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="warna" class="col-sm-2 col-form-label">Warna Produk</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Masukan Warna Produk" name="warna"  id="warna">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="foto" class="col-sm-2 col-form-label">Foto Produk</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control-file" name="foto"  id="foto">
                        </div>
                    </div>
        
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" name="save" class="btn btn-danger">Simpan</button>
                        </div>
                    </div>
                </form>

</section>
</div>
</div>
</section>
    </section>
<!-- isi -->
  </section>


  <script src="assets/js/jquery.js"></script>
	<script src="assets/js/jquery-ui-1.10.4.min.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.customSelect.min.js" ></script>
    <script src="assets/js/scripts.js"></script>
	<script src="assets/js/jquery.autosize.min.js"></script>
	<script src="assets/js/jquery.placeholder.min.js"></script>
  

  </body>
</html>
