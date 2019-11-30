
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Kasir</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="<?= base_url('assets/bootstrap-3.3.5/css/bootstrap.min.css') ?>">
  	<link rel="stylesheet" href="<?= base_url('assets/font-awesome/css/font-awesome.min.css') ?>">
  	<link rel="stylesheet" href="<?= base_url('assets/datatables/css/dataTables.bootstrap.css') ?>">

  	<script src="<?= base_url('assets/jquery-2.1.4.min.js') ?>"></script>
  	<script src="<?= base_url('assets/bootstrap-3.3.5/js/bootstrap.min.js') ?>"></script>
	<script src="<?= base_url('assets/datatables/js/jquery.dataTables.min.js') ?>"></script>
	<script src="<?= base_url('assets/datatables/js/dataTables.bootstrap.js') ?>"></script>
  	<script src="<?= base_url('assets/maskMoney/jquery.maskMoney.min.js') ?>"></script>
  	<style type="text/css">
	  	#header,#footer{
	  		background-color: #337ab7;
	  		color: #fff;
	  		text-align: center;
	  	}
	  	#header{
	  		margin-bottom: 30px;
	  	}
	  	#header h1{
	  		margin: 0;
	  		padding: 15px;
	  	}
	  	#footer{
	  		padding: 3px;
	  	}
	  	.btn{
			border-radius: 2px;
		}
		.btn-kecil{
			padding: 0 6px 0 6px;
		}
		.form-control[disabled], .form-control[readonly], 
		fieldset[disabled] .form-control{
			background-color: #EBF2F8;
		}
		.besar{
			font-size: 20px;
			font-weight: 300;
		}
		table th,table td{
			text-align: center;
		}
		form{
			margin-top: 20px;
		}
		.mb{
			margin-bottom: 30px;
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
</head>
<div class="col-md-9"> 
    <div class="panel panel-default" id="Isi2">
      <div class="panel-body">
        <?php echo form_open('Kasir/insertPenjualan'); ?>
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
                  <label class="control-label col-md-3"><br>Jumlah Barang</label>
                  <div class="col-md-8"><br>
                    <input name="jml_barang"  id="jml_barang" type="text" class="form-control reset" required="" placeholder="Masukan jumlah barang">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3"><br>Tanggal Barang</label>
                  <div class="col-md-8"><br>
                    <input name="tgl_transaksi"  id="tgl_transaksi" type="date" class="form-control reset" required="" >
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
<div class="col-md-9"> 
	<?php foreach ($get as $data) { ?>
	    <div class="panel panel-default" id="Isi2">
	      <div class="panel-body">
	        <div class="form-group">
	        </div>
	        <div class="form-group">
	          <label class="control-label col-md-3"><br>Nama Barang</label>
	          <div class="col-md-8"><br>
	            <input name="JumlahBarang"  id="stok_barang" type="text" class="form-control reset" required="" value="<?= $data['NamaBarang']; ?>">
	          </div>
	        </div>
	        <div class="form-group">
	          <label class="control-label col-md-3"><br>Jenis Barang</label>
	          <div class="col-md-8"><br>
	            <input name="JumlahBarang"  id="stok_barang" type="text" class="form-control reset" required="" value="<?= $data['JenisBarang']; ?>">
	          </div>
	        </div>
	        <div class="form-group">
	          <label class="control-label col-md-3"><br>Merk</label>
	          <div class="col-md-8"><br>
	            <input name="JumlahBarang"  id="stok_barang" type="text" class="form-control reset" required="" value="<?= $data['Merk']; ?>">
	          </div>
	        </div>
	        <div class="form-group">
	          <label class="control-label col-md-3"><br>Harga</label>
	          <div class="col-md-8"><br>
	            <input name="JumlahBarang"  id="stok_barang" type="text" class="form-control reset" required="" value="<?= $data['Harga']; ?>">
	          </div>
	        </div>
	        <div class="form-group">
	          <label class="control-label col-md-3"><br>Total Harga</label>
	          <div class="col-md-8"><br>
	            <input name="JumlahBarang"  id="stok_barang" type="text" class="form-control reset" required="" value="<?php print_r($tot)?>">
	          </div>
	        </div>
	      </div>
	      <style type="text/css">
			        .form-group a{
			          color: white;
			          list-style: none;
			        }
			        .button12 {
			        	margin-left: 30px;
			        }
			      </style>
	     <div class="form-group button12">
	        <div class="col-md-offset-0 col-md-0">
	            <button type="button" class="btn btn-primary" 
	            id="tambah" >
	              <a href="<?= base_url(); ?>Kasir/cetakPenjualan"><i class="fa fa-print "></i> Cetak Struck</a></button>
	        </div>
	      </div>
	    </div>
	 <?php }?>
</div>
</html>