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
						<li><i class="fa fa-laptop"></i>Daftar Admin</li>						  	
					</ol>
				</div>
			</div>              
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                          
                        <table class="table table-striped table-advance table-hover">
                            <tbody>
                                <tr>
                                    <th>No</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Nama</th>
                                    <th>Nomer</th>
                                    <th>Email</th>
                                    <th>Alamat</th>
                                    <th>Aksi</th>
                                </tr>
                                <?php

        $no=1;
        $query = mysqli_query($db, "SELECT * FROM admin");

        while($admin = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$no++."</td>";
            echo "<td>".$admin['username']."</td>";
            echo "<td>".$admin['password']."</td>";
            echo "<td>".$admin['nama']."</td>";
            echo "<td>".$admin['nomer']."</td>";
            echo "<td>".$admin['email']."</td>";
            echo "<td>".$admin['alamat']."</td>";

            echo "<td>";
            echo "<a class='btn btn-danger' href='hapus.php?id=".$admin['id']."' data-toggle='tooltip' title='Hapus!'>"."<i class='icon_close_alt2'></i>"."</a>";
            echo "</td>";
            echo "</tr>";
        }
        ?>
   

</tbody>
</table>
<header class="panel-heading">Total Admin yang Terdaftar: <?php echo mysqli_num_rows($query) ?></header>
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
