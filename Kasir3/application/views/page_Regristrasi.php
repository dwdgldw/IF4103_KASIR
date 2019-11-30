

    <link rel="stylesheet" href="<?= base_url('assets/bootstrap-3.3.5/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/font-awesome/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/datatables/css/dataTables.bootstrap.css') ?>">


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
        #Isi2{
          margin-right:-330px;
          margin-left: 330px;
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
        #bot a{
          margin-left: 215px;
        }
        #bot{
          margin-top: 30px;
        }
    </style>

   <div class="Judul ">
    <h3> APLIKASI KASIR</h3>
  </div>
  <div class="col-md-6"> 
    <div class="panel panel-default" id="Isi2">
      <div class="panel-body">
        <!-- ============== -->
        <?php if ($this->session->flashdata('success')) : ?>
            <div class="row mt-6">
                <div class="col-md-12">
                    <div class="alert alert-success alert-dismissible show" role="alert">
                        Regristrasi <strong>Berhasil</strong> <?= $this->session->flashdata('success'); ?>.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
          <?php endif;?>

        <?php echo form_open('Akun/TambahEmployee'); ?>
        <form class="form-horizontal"method="post"> <br>
          <div class="col-md-12">
            <div class="atas">
                <div class="form-group">
                  <label class="control-label col-md-3" >Nama Depan :</label>
                  <div class="col-md-8">
                    <input name="Nama_depan" id="Nama_depan" class="form-control reset" placeholder="Masukan nama depan" >
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3"><br>Nama Belakang :</label>
                  <div class="col-md-8  "><br>
                    <input name="Nama_belakang"  id="Nama_belakang"  class="form-control reset" placeholder="Masukan nama belakang">
                  </div>
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
                    <input name="Password" id="Password" type="password" class="form-control reset" placeholder="Masukan password">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3"><br>Tanggal Lahir  :</label>
                  <div class="col-md-8"><br>
                    <input name="Tanggal_lahir"  id="Tanggal_lahir" type="date" class="form-control reset" placeholder="Masukan tanggal lahir">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3"><br>Email :</label>
                  <div class="col-md-8"><br>
                    <input name="Email" id="Email" class="form-control reset" placeholder="Masukan email" >
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-offset-3 col-md-3"><br>
                      <button type="button submit" name="submit" class="btn btn-primary btn-md" >
                        <i class="fa fa-registered"></i > Regristrasi</button>
                  </div>
                  <div class="col-md-offset-0 col-md-1"><br>
                    <button type=" reset" class="btn btn-md btn-primary">
                        <i class="fa fa-refresh"></i> reset</button>
                  </div>
                </div>
                <div class="form-group ">
                  <div class="col-md-9" id="bot" >
                      <a href="<?= base_url(); ?>Akun/awal"> have an account?</a>
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


