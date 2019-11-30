
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="assets/bootstrap-3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/font-awesome/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/datatables/css/dataTables.bootstrap.css') ?>">
</head>
<body>
  <div class="col-md-9">
      <div class="panel panel-default" id="Isi2">
        <div class="panel-body">
          <div>
            <h2 align="center">Laporan Hasil Penjualan Hari ini</h2><br>
          </div>
          <div class="table-responsive ">
              <table class="table table-striped table-bordered table-hover">
                  <thead>
                          <tr>
                              <th class="text-center" >id penjualan</th>
                              <th class="text-center" >jumlah Barang</th>
                              <th class="text-center" >tanggal transaksi</th>
                              <th class="text-center" >Nama Barang</th>
                              <th class="text-center" >Harga</th>
                              <th class="text-center" >Jenis Barang</th>
                              <th class="text-center" >Merk</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr><?php foreach ($penjualan as $barang) : ?>
                              <td class="text-center"><?= $barang['id_penjualan']; ?></td>
                              <td class="text-center"><?= $barang['jml_barang']; ?></td>
                              <td class="text-center"><?= $barang['tgl_transaksi']; ?></td>
                              <td class="text-center"><?= $barang['NamaBarang']; ?></td>
                              <td class="text-center"><?= $barang['Harga']; ?></td>
                              <td class="text-center"><?= $barang['JenisBarang']; ?></td>
                              <td class="text-center"><?= $barang['Merk']; ?></td>
                          </tr>
                          <?php endforeach ?>
                      </tbody>
              </table>
          </div>
        </div>
      </div>
  </div>     
</body>
</html>