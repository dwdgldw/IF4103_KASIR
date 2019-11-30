
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
        .menu {
          margin-top: 20px; 
        }
  
    </style>  

  <div class="col-md-9">
    <div class="panel panel-default" id="Isi2">
      <div class="menu">
            <ul>
              <li class="dua">
                  <form method="post">
                    <label class="control-label col-md-3"></label>
                    <div class="col-md-5">
                      <input type="text" name="keyword" class="form-control" placeholder="Search" >
                    </div>
                    <div class="col-md-1 ">
                      <a href="#" class="btn btn-primary ">
                        <i type="submit" name="search_submit" class="fa fa-search"></i>
                      </a>
                    </div>
                  </form>
              </li>
            </ul>
          </div>
     <div class="panel-body">
     <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th class="text-center" >Id Barang</th>
                    <th class="text-center" >Nama Barang</th>
                    <th class="text-center" >Harga</th>
                    <th class="text-center" >Jenis Barang</th>
                    <th class="text-center" >Merk</th>
                    <th class="text-center" >Stok barang</th>

                </tr>
            </thead>
            <tbody>
                <tr><?php foreach ($barang_db as $barang) : ?>
                    <td class="text-center"><?= $barang['id']; ?></td>
                    <td class="text-center"><?= $barang['NamaBarang']; ?></td>
                    <td class="text-center"><?= $barang['Harga']; ?></td>
                    <td class="text-center"><?= $barang['JenisBarang']; ?></td>
                    <td class="text-center"><?= $barang['Merk']; ?></td>
                    <td class="text-center"><?= $barang['stok_barang']; ?></td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
      </div>
      <!-- ------------------- -->
    </div>
  </div>