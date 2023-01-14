<?php
	$aksi=$fg->get("act");
	if($aksi=="save"){
		extract($_POST);
		$ins = $db->query("insert into barang(kategori,barcode,nama_barang,nama_pd,stok,harga_pokok,harga_jual,harga_member,harga_diskon, id_user) values('$kategori','$barcode','$nama_barang','$nama_pd','$stok','$harga_pokok','$harga_jual',$harga_member','$harga_diskon'')");
		if($ins){
			$fg->alert("Simpan berhasil");
			$fg->redirect("?hal=barang");
		}
	}
?>
<div class="card-header bg-success">Data Barang</div>
<div class="card-body">
	<form method="post" action="?hal=frm_barang&act=save">
		<div class="form-group">
			<label>Kategori</label>
			<input type="text" class="form-control" name="kategori" placeholder="Kategori" required="required">
		</div>
		<div class="form-group">
			<label>Barcode</label>
			<input type="text" class="form-control" name="barcode" placeholder="Barcode" required="required">
		</div>
		<div class="form-group">
			<label>Nama Barang</label>
			<input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang" required="required">
		</div>
		<div class="form-group">
			<label>Nama Produk</label>
			<input type="text" class="form-control" name="nama_pd" placeholder="Nama Produk" required="required">
		</div>
		<div class="form-group">
			<label>Stok</label>
			<input type="text" class="form-control" name="stok" placeholder="Stok" required="required">
		</div>
		<div class="form-group">
			<label>Harga Pokok</label>
			<input type="text" class="form-control" name="harga_pokok" placeholder="Harga Pokok" required="required">
		</div>
		<div class="form-group">
			<label>Harga Jual</label>
			<input type="text" class="form-control" name="harga_jual" placeholder="Harga Jual" required="required">
		</div>
		<div class="form-group">
			<label>Harga Member</label>
			<input type="text" class="form-control" name="harga_member" placeholder="Harga Member" required="required">
		</div>
		<div class="form-group">
			<label>Harga Diskon</label>
			<input type="text" class="form-control" name="harga_diskon" placeholder="Harga Diskon" required="required">
		</div>
		<div class="form-group">
			<button type="submit" name="simpan" class="btn btn-success">Simpan</button>
			<button type="reset" name="reset" class="btn btn-default">Reset</button>
		</div>
	</form>
<div>