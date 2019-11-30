

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
        <form class="form-horizontal"method="post"> <br>
          <div class="col-md-8">
            <div class="atas">
                <div class="form-group">
                  <label class="control-label col-md-3" >Id Barang :</label>
                  <div class="col-md-7">
                    <input name="id" id="id" class="form-control reset" value="<?= $barang['id']; ?>">
                    <small class="form-text text-danger"><?= form_error('id') ?>.</small>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3">Nama Barang :</label>
                  <div class="col-md-7  ">
                    <input name="NamaBarang"  id="NamaBarang"  type="text" class="form-control reset" required="" value="<?= $barang['NamaBarang']; ?>">
                    <small class="form-text text-danger"><?= form_error('NamaBarang') ?>.</small>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3" >Harga (Rp) :</label>
                  <div class="col-md-7">
                    <input name="Harga" id="Harga"  class="form-control reset" required="" value="<?= $barang['Harga']; ?>">
                    <small class="form-text text-danger"><?= form_error('Harga') ?>.</small>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3">Jenis Barang :</label>
                  <div class="col-md-7">
                    <input name="JenisBarang" id="JenisBarang" class="form-control reset" type="text" required=""value="<?= $barang['JenisBarang']; ?>">
                    <small class="form-text text-danger"><?= form_error('JenisBarang') ?>.</small>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3">Merk</label>
                  <div class="col-md-7">
                    <input name="Merk"  id="Merk" type="text" class="form-control reset" required="" value="<?= $barang['Merk']; ?>">
                    <small class="form-text text-danger"><?= form_error('Merk') ?>.</small>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3">Jumlah Barang</label>
                  <div class="col-md-7">
                    <input name="stok_barang"  id="JumlahBarang" type="text" class="form-control reset" required="" value="<?= $barang['stok_barang']; ?>">
                    <small class="form-text text-danger"><?= form_error('stok_barang') ?>.</small>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-offset-3 col-md-3">
                      <button type="submit" name="submit" class="btn btn-primary btn-md" >
                        <i class=""></i > Update Data</button>
                  </div>
                  </div>
                </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
