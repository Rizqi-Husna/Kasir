<?php
	$aksi=$fg->get("act");
	if($aksi=="save"){
		extract($_POST);
		$ins = $db->query("insert into kategori(nama_kategori,isParent) values('$nama_kategori','$parent')");
		if($ins){
			$fg->alert("Simpan berhasil");
			$fg->redirect("?hal=kategori");
		}
	}
?>
<div class="card-header bg-success">Data Kategori</div>
<div class="card-body">
	<form method="post" action="?hal=frm-kategori&act=save">
		<div class="form-group">
			<label>Nama Kategori</label>
			<input type="text" class="form-control" name="nama_kategori" placeholder="Nama kategori" required="required">
		</div>
		<div class="form-group">
			<label>Parent</label>
			<select class="form-control" name="parent" required="required">
				<option value="0">Tidak Ada</option>
				<?php
					$sel = $db->select("kategori");
					while($k = $sel->fetch()){
						echo "<option value='$k[id_kategori]'>$k[nama_kategori]</option>";
					}
				?>
			</select>
		</div>
		<div class="form-group">
			<button type="submit" name="simpan" class="btn btn-success">Simpan</button>
			<button type="reset" name="reset" class="btn btn-default">Reset</button>
		</div>
	</form>
</div>