<?php 
	$aksi=$fg->get("act");
	if($aksi=="save"){
		extract($_POST);
		$ins = $db->query("insert into barang(nama_barang,Last_Update) values('$nama_barang','$Last_Update')");
		if($ins){
			$ff->alert("Simpan berhasil");
			$ff->redirect("?hal=barang");
		}
	}
?>
<div class="card-header bg-success">Data barang</div>
<div class="card-body">
	<form method="post" action="?hal=frm_barang&act=save">
		<div class="form-group">
			<label>ID Kategori</label>
			<input type="text" class="form-control" name="id_kategori" placeholder="ID Kategori" required="required">
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
			<input type="text" class="form-control" name="nama_jual" placeholder="Harga Jual" required="required">
		</div>
		<div class="form-group">
			<label>Harga Member</label>
			<input type="text" class="form-control" name="harga_member" placeholder="Harga Member" required="required">
		</div>
		<div class="form-group">
			<label>Harga Diskon</label>
			<input type="text" class="form-control" name="nama_diskon" placeholder="Harga Diskon" required="required">
		</div>
		<div class="form-group">
			<label>Last_update</label>
			<select class="form-control" name="Last update" required="required">
				<option value="0">Tidak Ada</option>
				<?php
					$sel = $db->select("barang");
					while($k = $sel->fetch()){
						echo "<option value='$k[id_barang]'>$k[nama_barang]</option>";
					}
				?>
			</select>
		</div>
		<div class="form-group">
			<button type="Submit" name="Simpan" class="btn btn-success">Simpan</button>
			<button type="Reset" name="Reset" class="btn btn-dafault">Reset</button>
		</div>
	</form>
</div>