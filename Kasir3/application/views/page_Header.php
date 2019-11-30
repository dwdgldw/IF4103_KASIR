<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kasir</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="">
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap-3.3.5/css/bootstrap.min.css') ?>">
    <script src="assets/bootstrap-3.3.5/js/jquery-3.3.1.min.js"></script>
    <style type="text/css">
      .Judul{
        background: linear-gradient(#000046, #1cb5e0);  
        /*background-color: #337ab7;*/
        padding: 10px;
        margin:5px;
        border-radius: 7px;
      }
      .Judul h3{
        color: white;
        margin-left: 600px;
      }
      .nav ul li{
        list-style: none;
      }
      .nav ul{
        padding-left: 20px;
        
      }
      .nav ul li a{
        text-decoration: none;
        display: block;
        padding: 4px;
        margin: 3px;
      }
      .nav ul li a:hover{
        text-decoration: none;
        color: #fff;
        background-color: #337ab7;
        border-radius: 2px;
      }
      .nav>li>a:hover{
        background-color: #337ab7;
        color: #fff;
      }
      .nav ul .active{
        background-color: #337ab7;
        border-radius: 2px;
      }
      .nav ul .active a{
        color: #fff;
      }
      .nav li a:active,.nav li a:focus{
        background-color: #337ab7;
        border-radius: 2px;
        color: #fff;
      }
      #Isi1{
        margin-left: -10px;
      }
    </style>
</head>
  <div class="Judul">
    <h3> APLIKASI KASIR</h3>
  </div>
  <div class="col-md-3" >
    <div class="panel panel-default" id="Isi1">
      <div class="panel-body" id="Isi11">
      <ul class="nav nav-pills nav-stacked">
        <li class="">
          <a href="<?= base_url(); ?>Kasir/Home"><i class="fa fa-home"></i> Home</a>
        </li>
        <li>
          <a href="#"><i class="fa fa-shopping-cart"></i> Penjualan</a>
            <div id="collapse1" class="panel-collapse collapse in">
              <ul>
                <li ><a href="<?= base_url(); ?>Kasir/Penjualan"><i class="fa fa-cart-plus"></i>
                  Tambah Penjualan</a></li>
                <li><a href="<?= base_url(); ?>Kasir/ListPenjualan"><i class="fa fa-list-ul"></i>
                  List Data Penjualan</a></li>
              </ul>
            </div>
          </li>
<!--         <li><a href="#collapse2"><i class="fa fa-cubes"></i> Barang</a>
            <div>
                <ul>
                <li><a href="<?= base_url(); ?>Kasir/TambahBarang"><i class="fa fa-plus"></i>
                  Tambah Barang</a></li>
                <li><a href="<?= base_url(); ?>Kasir/ListBarang"><i class="fa fa-list-ul"></i>
                  List Data Barang</a></li>
              </ul>
              </div>  
        </li> -->
        <li class="">
          <a href="<?= base_url(); ?>Kasir/ListBarang"><i class="fa fa-check"></i> Cek Stok</a>
        </li>
        <li class="">
          <a href="<?= base_url(); ?>Akun/LoginAdmin"><i class="fa fa-book"></i> Laporan</a>
        </li>
        <li class="">
          <a href="<?= base_url(); ?>Kasir/About"><i class="fa fa-info-circle"></i> About Us</a>
        </li>
        <li class="">
          <a href="<?= base_url(); ?>Akun/Logout"><i class="fa fa-sign-out "></i> Log Out</a>
        </li>
      </ul>
      </div>
    </div>
  </div>
</html>