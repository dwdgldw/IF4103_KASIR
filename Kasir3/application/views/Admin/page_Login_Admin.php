

    <link rel="stylesheet" href="<?= base_url('assets/bootstrap-3.3.5/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/font-awesome/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/datatables/css/dataTables.bootstrap.css') ?>">


     <style type="text/css">
        #Isi2{
          margin-right:0px;
          margin-left: 0px;
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
        .garis{
          border: 0;
          height: 1px;
          background-image: -webkit-linear-gradient(left, #dadada, #333, #dadada);
          background-image:    -moz-linear-gradient(left, #dadada, #333, #dadada);
          background-image:     -ms-linear-gradient(left, #dadada, #333, #dadada);
          background-image:      -o-linear-gradient(left, #dadada, #333, #dadada);
        }
    </style>
  <div class="col-md-6"> 
    <div class="panel panel-default" id="Isi2">
      <div class="panel-body">
        <?php echo form_open('Akun/SigninAdmin'); ?>
        <form class="form-horizontal"method="post"> <br>
          <div class="col-md-12">
            <div class="atas">
                <div class="form-group">
                  <h2 align="center">Silahkan Login dulu</h2>
                  <hr class="garis">  
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3" ><br>Username :</label>
                  <div class="col-md-8"><br>
                    <input name="Username" id="Username"  class="form-control reset" placeholder="Masukan username" >
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3"><br>Password :</label>
                  <div class="col-md-8"><br>
                    <input name="Password" id="Password" type="password" class="form-control reset " placeholder="Masukan password">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-offset-3 col-md-3"><br>
                      <button type="button submit" name="submit" class="btn btn-primary btn-md" >
                        <i class="fa fa-sign-in"></i > Login</button>
                  </div>
                  <div class="col-md-offset-0 col-md-1"><br>
                    <button type="button reset" class="btn btn-md btn-primary">
                        <i class="fa fa-refresh"></i> reset</button>
                  </div>
                </div>
            </div>
            </div>
          </div>
        </form>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>