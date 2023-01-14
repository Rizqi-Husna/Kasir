<?php
	$id=$fg->get("id");
	if(! empty($id)){
		$sel = $db->query("select * from member where id_member='$id'");
		if($sel->rowCount()>0){
			$row=$sel->fetch();
		}
	}else{
		extract($_POST);
		$up = $db->query("update member set nama_member='$nama_member', alamat='$alamat', no_hp='$no_hp' where id_member='$id_member'");
		if($up){
			$ff->alert("update sukses");
			$ff->redirect("?hal=member");
		}
	}
?>
<div class="card-header bg-success">Edit Member</div>
<div class="card-body">
	<a href="?hal=kategori" class="btn btn-primary">Lihat Data</a>
	<form method="post" action="?hal=edit_member">
		<div class="form-group">
			<input type="hidden" name="id_member" value="<?=$id?>">
			<label>Nama Member</label>
			<input type="text" class="form-control" name="nama_member" placeholder="Nama Member" required="required" value="<?=$row['nama_member']?>">
		</div>
		<div class="form-group">
			<input type="hidden" name="id_member" value="<?=$id?>">
			<label>Alamat</label>
			<input type="text" class="form-control" name="alamat" placeholder="Alamat" required="required" value="<?=$row['alamat']?>">
		</div>
		<div class="form-group">
			<input type="hidden" name="id_member" value="<?=$id?>">
			<label>No Hp</label>
			<input type="text" class="form-control" name="no_hp" placeholder="No Hp" required="required" value="<?=$row['no_hp']?>">
		</div>
		<div class="form-group">
			<button type="submit" name="simpan" class="btn btn-success">Simpan</button>
			<button type="reset" name="reset" class="btn btn-default">Reset</button>
		</div>
	</form>
</div>