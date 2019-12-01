  

  <link rel="stylesheet" href="assets/bootstrap-3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/font-awesome/css/font-awesome.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/datatables/css/dataTables.bootstrap.css') ?>">
  <style type="text/css">
          #Isi2{
            margin-right:-10px;
          }
          .menu {
            margin: auto;
            width: 50%; 
          }
          .menu ul {
            list-style: none;
            width: 100%;
            display: inline-table;
          }
          .menu ul li {float: left;}
          .menu ul .satu {
            margin-left: -40px;
          }
        </style>
  <div class="col-md-9"> 
   <div class="panel panel-default" id="Isi2">
      <div class="bawah"><br>
          <div class="menu">
            <ul>
              <li class="satu">
                <a href="<?= base_url(); ?>Kasir/TambahBarang" class="btn btn-md btn-success">Tambah Barang</a><br><br>
              </li>
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
          <!-- ====================== -->
          <?php if ($this->session->flashdata('success')) : ?>
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="alert alert-success alert-dismissible show" role="alert">
                        Data Barang <strong>berhasil</strong> <?= $this->session->flashdata('success'); ?>.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>

            <?php endif; ?>
            <?php if ($this->session->flashdata('update')) : ?>
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="alert alert-success alert-dismissible show" role="alert">
                        Data Barang <strong>berhasil</strong> <?= $this->session->flashdata('update'); ?>.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            <?php if ($this->session->flashdata('hapus')) : ?>
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="alert alert-success alert-dismissible show" role="alert">
                        Data Barang <strong>berhasil</strong> <?= $this->session->flashdata('hapus'); ?>.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
            <?php endif; ?>

          <!-- ======================== -->
             <?php if (empty($barang_db)) : ?>
            <div class="alert alert-danger" role="alert">
                Data tidak ditemukan
            </div>
            <?php endif; ?>
            <div class="table-responsive ">
              <table class="table table-striped table-bordered table-hover">
                  <thead>
                      <tr>
                          <th class="text-center" >Id Barang</th>
                          <th class="text-center" >Nama Barang</th>
                          <th class="text-center" >Harga</th>
                          <th class="text-center" >Jenis Barang</th>
                          <th class="text-center" >Merk</th>
                          <th class="text-center" >Stok Barang</th>
                          <th class="text-center" >Options</th>

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

                          <td class="text-center">
                              <a href="<?= base_url(); ?>Kasir/editBarang/<?= $barang['id'] ?>" class="btn btn-sm btn-success" ?>Edit</a>
                              <a href="<?= base_url(); ?>Kasir/deleteBarang/<?= $barang['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');" ?>Delete</a>
                          </td>
                      </tr>
                      <?php endforeach ?>
                  </tbody>
              </table>
            </div>
        </div>
      </div>
    </div>