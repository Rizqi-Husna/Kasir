<?php
	$id=$fg->get("id");
	if(! empty($id)){
		$sel = $db->query("select * from kategori where id_kategori='$id'");
		if($sel->rowCount()>0){
			$row=$sel->fetch();
		}
	}else{
		extract($_POST);
		$up = $db->query("update kategori set nama_kategori='$nama_kategori',isParent='$parent' where id_kategori='$id_kategori'");
		if($up){
			$fg->alert("update sukses");
			$fg->redirect("?hal=kategori");
		}
	}
?>
<div class="card-header bg-success">Edit Kategori</div>
<div class="card-body">
	<a href="?hal=kategori" class="btn btn-primary">Lihat Data</a>
	<form method="post" action="?hal=edit_kategori">
		<div class="form-group">
			<input type="hidden" name="id_kategori" value="<?=$id?>">
			<label>Nama Kategori</label>
			<input type="text" class="form-control" name="nama_kategori" placeholder="nama kategori" required="required" value="<?=$row['nama_kategori']?>">
		</div>
		<div class="form-group">
			<label>Parent</label>
			<select class="form-control" name="parent" required="required">
				<option value="0">Tidak Ada</option>
				<?php
					$sel = $db->select("kategori where id_kategori <> '$id'");
					while($k = $sel->fetch()){
						if($row['isParent']==$k['id_kategori']){
						echo "<option value='$k[id_kategori]' selected='selected'>$k[nama_kategori]</option>";
						}else{
							echo "<option value='$k[id_kategori]'>$k[nama_kategori]</option>";
						}
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