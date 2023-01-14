<?php
	$aksi=$fg->get("act");
	if($aksi=="save"){
		extract($_POST);
		$ins = $db->query("insert into member(nama_member,alamat,no_hp) values('$nama_member','$alamat','$no_hp')");
		if($ins){
			$ff->alert("Simpan berhasil");
			$ff->redirect("?hal=member");
		}
	}
?>
<div class="card-header bg-success">Data Kategori</div>
<div class="card-body">
	<form method="post" action="?hal=frm-member&act=save">
		<div class="form-group">
			<label>Nama Member</label>
			<input type="text" class="form-control" name="nama_member" placeholder="Nama Member" required="required">
		</div>
		<div class="form-group">
			<label>Alamat</label>
			<input type="text" class="form-control" name="alamat" placeholder="Alamat" required="required">
		</div>
		<div class="form-group">
			<label>No Hp</label>
			<input type="text" class="form-control" name="no_hp" placeholder="No Hp" required="required">
		</div>
		<div class="form-group">
			<button type="submit" name="simpan" class="btn btn-success">Simpan</button>
			<button type="reset" name="reset" class="btn btn-default">Reset</button>
		</div>
	</form>
</div>