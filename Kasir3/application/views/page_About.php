
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap-3.3.5/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/font-awesome/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/datatables/css/dataTables.bootstrap.css') ?>">
     <style type="text/css">
        #Isi2{
          margin-right:-10px;
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
        .footer{
          list-style-type: none;
          margin-left: 300px;   
        }
        .footer a{
          margin: 10px;
        }
        .garis{
          border: 0px;
          height: 1px;
          background-image: -webkit-linear-gradient(left, #dadada, #333, #dadada);
          background-image:    -moz-linear-gradient(left, #dadada, #333, #dadada);
          background-image:     -ms-linear-gradient(left, #dadada, #333, #dadada);
          background-image:      -o-linear-gradient(left, #dadada, #333, #dadada);
        }
        .content{
          margin:20px;
        }
        .mt-3 .ATAS{
          margin-left: 100px;
        }
        .mt-3 .tengah{
          margin-left: 100px;
        }
        .mt-3 .BAWAH{
          margin-left: 100px;
        }
        .footer .garis2{
          margin-left: -340px;
          border: 0px;
          height: 1px;
          background-image: -webkit-linear-gradient(left, #dadada, #333, #dadada);
          background-image:    -moz-linear-gradient(left, #dadada, #333, #dadada);
          background-image:     -ms-linear-gradient(left, #dadada, #333, #dadada);
          background-image:      -o-linear-gradient(left, #dadada, #333, #dadada);
        }
        .mt-3 img{
          width: 120px;
          margin-left: 0px;
        }
    </style>  

  <div class="col-md-9">
    <!-- ================================== -->
    <div class="panel panel-default" id="Isi2">
     <div class="panel-body">
      <div class="table-responsive">
        <div class="content">
          <h3 align="center">About Us</h3>
          <hr class="garis"> 
          <p> Aplikasi kasir ini merupakan program kasir yang berbasis Web untuk membantu proses transaksi penjualan bisnis Anda. Menggantikan posisi mesin kasir konvensional, fungsi utama dari aplikasi kasir ini adalah membantu proses pembayaran menjadi terintegrasi.</p>
        </div>  
        <hr class="garis"> 
      </div>
      <!-- =================================== -->
      <div class="mt-3">
        <h2 align="center">Our Team</h2><br>
        <div class="tab-content ATAS">
          <div class="col-sm-5">
              <div class="card">
                <img class="card-img-top" src="<?= base_url();?>assets/img/1.png" alt="Card image">
                <div class="card-body">
                  <p class="card-text" >1301170273</p>
                  <h4 class="card-title">Bangkit Prasetyo</h4>
                  <p class="card-text">IF-41-03</p>
                  <p class="card-text">======================</p>
                </div>
              </div>
          </div>
          <div class="col-sm-5 tengah">
              <div class="card">
                <img class="card-img-top" src="<?= base_url();?>assets/img/1.png" alt="Card image">
                <div class="card-body">
                  <p class="card-text" >1301170005</p>
                  <h4 class="card-title"> Haikal Limansah</h4>
                  <p class="card-text">IF-41-03</p>
                  <p class="card-text">======================</p>
                </div>
              </div>
          </div>
        </div>
        <div class="tab-content BAWAH">
          <div class="col-sm-5">
              <div class="card">
                <img class="card-img-top" src="<?= base_url();?>assets/img/1.png" alt="Card image">
                <div class="card-body">
                  <p class="card-text" >1301174340</p>
                  <h4 class="card-title"> Aswin Zulfi R</h4>
                  <p class="card-text">IF-41-03</p>
                  <p class="card-text">======================</p>
                </div>
              </div>
          </div>
          <div class="col-sm-5 tengah">
              <div class="card">
                <img class="card-img-top" src="<?= base_url();?>assets/img/1.png" alt="Card image">
                <div class="card-body">
                  <p class="card-text" >1301174156</p>
                  <h4 class="card-title">Dewangga G.A </h4>
                  <p class="card-text">IF-41-03</p>
                  <p class="card-text">======================</p>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ================================== -->
      <ul class="footer">
          <hr class="garis2">
          <li>
            <a href="" class="fa fa-facebook-square fa-2x"></a>
            <a href="" class="fa fa-google-plus-square fa-2x"></a>
            <a href="" class="fa fa-twitter-square fa-2x"></a>
            <a href="" class="fa fa-youtube-square fa-2x"></a>
            <a href="" class="fa fa-instagram fa-2x"></a>
            <a href="" class="fa fa-linkedin-square fa-2x"></a>
          </li>
      </ul>
  </div>
  
