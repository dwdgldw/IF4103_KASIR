

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
    </style>

  <div class="col-md-9"> 
    <div class="panel panel-default" id="Isi2">
      <div class="panel-body">
        <?php echo form_open('Kasir/addBarang'); ?>
        <form class="form-horizontal"method="post"> <br>
          <div class="col-md-8">
            <div class="atas">
                <div class="form-group">
                  <label class="control-label col-md-3" >Id Barang :</label>
                  <div class="col-md-8">
                    <input name="id" id="id" type="text" class="form-control reset" placeholder="Masukan id barang" required="" >
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3"><br>Nama Barang :</label>
                  <div class="col-md-8  "><br>
                    <input name="NamaBarang"  id="NamaBarang"  type="text" class="form-control reset" placeholder="Masukan nama barang" required="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3" ><br>Harga (Rp) :</label>
                  <div class="col-md-8"><br>
                    <input name="Harga" id="Harga" type="number"  class="form-control reset" required=""  placeholder="Masukan harga">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3"><br>Jenis Barang :</label>
                  <div class="col-md-8"><br>
                    <input name="JenisBarang" id="JenisBarang" class="form-control reset" type="text" required="" placeholder="Masukan jenis barang">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3"><br>Merk</label>
                  <div class="col-md-8"><br>
                    <input name="Merk"  id="Merk" type="text" class="form-control reset" required="" placeholder="Masukan merk barang">
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3"><br>Jumlah Barang</label>
                  <div class="col-md-8"><br>
                    <input name="stok_barang"  id="stok_barang" type="text" class="form-control reset" required="" placeholder="Masukan jumlah barang">
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-md-offset-3 col-md-3"><br>
                      <button type="button submit" name="submit" class="btn btn-primary btn-md" >
                        <i class="fa fa-cart-plus"></i > Tambah</button>
                  </div>
                </div>
            </div>
          </div>
        </form>
        <?php echo form_close(); ?>
      </div>
    </div>
  </div>


