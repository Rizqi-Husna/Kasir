<?php
$id=$fg->get("id");
if(!empty($id)){
	$sel = $db->query("select * from barang where id_barang='$id'");
	if($sel->rowCount()>0){
		$row=$sel->fetch();
	}
}else{
	extract($_POST);
	$up = $db->query("update barang set kategori='$kategori',barcode='$barcode',nama_barang='$nama_barang',nama_pd='$nama_pd',stok='$stok',harga_pokok='$harga_pokok',harga_jual='$harga_jual',harga_member='$harga_member',harga_diskon='$harga_diskon'");
	if($up){
		$fg->alert("update sukses");
		$fg->redirect("?hal=barang");
	}
}
?>
<div class="card-header bg-success">Edit Barang</div>
<div class="card-body">
	<a href="?hal=barang" class="btn btn-primary">Lihat Data</a>
	<form method="post" action="?hal=edit_barang">
		<div class="form-group">
			<input type="hidden" name="id_barang" value="<?=$id?>">
			<label>Kategori</label>
			<input type="text" class="form-control" name="kategori" placeholder="Kategori" required="required" value="<?=$row['kategori']?>">
		</div>
		<div class="form-group">
			<input type="hidden" name="id_barang" value="<?=$id?>">
			<label>Barcode</label>
			<input type="text" class="form-control" name="barcode" placeholder="Barcode" required="required" value="<?=$row['barcode']?>">
		</div>
		<div class="form-group">
			<input type="hidden" name="id_barang" value="<?=$id?>">
			<label>Nama Barang</label>
			<input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang" required="required" value="<?=$row['nama_barang']?>">
		</div>
		<div class="form-group">
			<input type="hidden" name="id_barang" value="<?=$id?>">
			<label>Nama Produk</label>
			<input type="text" class="form-control" name="nama_pd" placeholder="Nama Produk" required="required" value="<?=$row['nama_pd']?>">
		</div>
		<div class="form-group">
			<input type="hidden" name="id_barang" value="<?=$id?>">
			<label>Stok</label>
			<input type="text" class="form-control" name="stok" placeholder="Stok" required="required" value="<?=$row['stok']?>">
		</div>
		<div class="form-group">
			<input type="hidden" name="id_barang" value="<?=$id?>">
			<label>Harga Pokok</label>
			<input type="text" class="form-control" name="harga_pokok" placeholder="Harga Pokok" required="required" value="<?=$row['harga_pokok']?>">
		</div>
		<div class="form-group">
			<input type="hidden" name="id_barang" value="<?=$id?>">
			<label>Harga Jual</label>
			<input type="text" class="form-control" name="harga_jual" placeholder="Harga Jual" required="required" value="<?=$row['harga_jual']?>">
		</div>
		<div class="form-group">
			<input type="hidden" name="id_barang" value="<?=$id?>">
			<label>Harga Member</label>
			<input type="text" class="form-control" name="harga_member" placeholder="Harga Member" required="required" value="<?=$row['harga_member']?>">
		</div>
		<div class="form-group">
			<input type="hidden" name="id_barang" value="<?=$id?>">
			<label>Harga Diskon</label>
			<input type="text" class="form-control" name="harga_diskon" placeholder="Harga Diskon" required="required" value="<?=$row['harga_diskon']?>">
		</div>
	<div class="form-group">
		<button type="submit" name="simpan" class="btn btn-success">Simpan</button>
		<button type="reset" name="reset" class="btn btn-default">Reset</button>
	</div>
	</form>
</div>