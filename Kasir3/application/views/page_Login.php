<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap-3.3.5/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/font-awesome/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/datatables/css/dataTables.bootstrap.css') ?>">
    <script src="assets/bootstrap-3.3.5/js/jquery-3.3.1.min.js"></script>
    
    <style type="text/css">
      .Judul{
        background: linear-gradient(#000046, #1cb5e0);  
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
      #Isi1 a{
        text-align: center;
      }
      .fa-user {
        font-size: 17px;
        margin-left: 18px;
        padding-bottom: 10px;
      }
      .fa-key{
        font-size: 17px;
        margin-left: 18px;
        padding-bottom: 10px;
      }
      .nav .up button{
        padding-left: 120px;
        margin-left: 15px;
        padding-right: 120px;

      }
      .nav .bot{
        padding-left: 50px;
      }
      .garis{
        border: 0;
        height: 1px;
        background-image: -webkit-linear-gradient(left, #dadada, #333, #dadada);
        background-image:    -moz-linear-gradient(left, #dadada, #333, #dadada);
        background-image:     -ms-linear-gradient(left, #dadada, #333, #dadada);
        background-image:      -o-linear-gradient(left, #dadada, #333, #dadada);
      }
    </style>
</head>
<body>
  <div class="Judul">
    <h3> Aplikasi Kasir</h3> 
  </div>
  <div class="col-md-3" >
    <div class="panel panel-default" id="Isi1">
      <div class="panel-body" id="Isi11">
        <form action="<?= site_url('Akun/SigninEmployee')?>" id="form_login" name="form_login" method="post" class="form-horizontal"> 
        <ul class="nav nav-pills nav-stacked">   
          <li>
            <div class="form-group">
              <h2 align="center ">Silahkan Login</h2>
              <hr class="garis">  
            </div>
            <!-- ================ -->
            <?php if ($this->session->flashdata('alert')) : ?>
            <div class="row mt-6">
                <div class="col-md-12">
                    <div class="alert alert-danger alert-dismissible show" role="alert">
                        Maaf <strong>Password atau Username</strong> <?= $this->session->flashdata('alert'); ?>.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
          <?php endif;?>
            <!-- ============ -->
            <div class="form-group">
                <label class="control-label fa fa-user" > <b> Username:</b></label>
                <div class="col-md-12">
                  <input name="Username" type="text" class="form-control " placeholder="Masukan username">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label fa fa-key" ><b> Password:</b></label>
                <div class="col-md-12">
                  <input name="Password" type="password" class="form-control form-password " placeholder="Masukan password">
                </div>
            </div>
            <div class="form-group">
              <div class="col-md-12">
                <input type="checkbox" class="form-checkbox"> Show password
              </div>
            </div>
            <div class="form-group up">
              <div class="up">
                <button type="button submit" name="submit" class="btn btn-primary btn-md " >
                    <i class="fa fa-sign-in" ></i> Login</button>
              </div>
            </div>
<!--             <div class="form-group bot">
              <div class="col-md-9" >
                    <p align="center">Don't have an account yet?<a href="<?= base_url(); ?>Akun/Regristrasi"> Create an account</a></p>
              </div>
            </div> -->
          </li>
        </ul>
      </form>
      </div>
    </div>
  </div>
  <div class="col-md-9">
    <div class="panel panel-default" id="Isi2">
      <marquee><h4>Welcome to Aplikasi Kasir</h4></marquee>
      <img src="<?= base_url();?>assets/img/Planet.gif">
    </div>
  </div>
</body>

<script type="text/javascript">
  $(document).ready(function(){   
    $('.form-checkbox').click(function(){
      if($(this).is(':checked')){
        $('.form-password').attr('type','text');
      }else{
        $('.form-password').attr('type','password');
      }
    });
  }) 
</script>
</html>