<!DOCTYPE html>
<html lang="en">
 <head>
    <title>Cetak</title>
</head>
	<style type="text/css">
	 td {
	  padding: 20px;
    font-size: 15px;
	 }

</style>
	<body  style="font-family:Times New Roman;font-size:12px">
      <table align="center" border="1">
        <h2 align="center">Cetak Penjualan</h2>
          <thead>
              <tr>
                  <th class="text-center" >Id</th>
                  <th class="text-center" >id barang</th>
                  <th class="text-center" >jumlah Barang</th>
                  <th class="text-center" >tanggal transaksi</th>
                  <th class="text-center" >Nama Barang</th>
                  <th class="text-center" >Jenis Barang</th>
                  <th class="text-center" >Merk</th>
                  <th class="text-center" >Harga</th>
                  <th class="text-center" >Total Harga</th>
              </tr>
          </thead>
          <tbody>
              <tr><?php foreach ($laporan as $barang) : ?>
                  <td class="text-center"><?= $barang['id']; ?></td>
                  <td class="text-center"><?= $barang['id_penjualan']; ?></td>
                  <td class="text-center"><?= $barang['jml_barang']; ?></td>
                  <td class="text-center"><?= $barang['tgl_transaksi']; ?></td>
                  <td class="text-center"><?= $barang['NamaBarang']; ?></td>
                  <td class="text-center"><?= $barang['JenisBarang']; ?></td>
                  <td class="text-center"><?= $barang['Merk']; ?></td>
                  <td class="text-center"><?= $barang['Harga']; ?></td>
                  <td><?php print_r($tot)?></td>
              </tr>
              <?php endforeach ?>
          </tbody>
      </table>
	</body>
</html>