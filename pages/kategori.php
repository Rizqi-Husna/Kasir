<?php
	$aksi = $fg->get("act");
	if($aksi=="del"){
		$id = $fg->get("id");
		$del = $db->query("delete from kategori where id_kategori='$id'");
		if($del){
			$fg->redirect("?hal=kategori");
		}
	}
	
?>
<div class="card-header bg-success"> <b> Data Kategori <b> </div>
<div class="card-body">
	<a href="?hal=frm-kategori" class="btn btn-primary pull-right"><i class= "fa fa-plus"></i>Tambah Data</a>
	<table class="table table-bordered table-striped">
		<tr>
			<th>No</th>
			<th>Nama Kategori</th>
			<th colspan="2">Opsi</th>
		</tr>
	<?php
		$no = 0;
		$query = $db->select("kategori");
		while($row=$query->fetch()){
			$no++;
			?>
			<tr>
				<td><?=$no?></td>
				<td><?=$row['nama_kategori']?></td>
				<td><a class="btn btn-warning" href="?hal=edit_kategori&id=<?=$row['id_kategori']?>">Edit</a></td>
				<td><a class="btn btn-danger" href="?hal=kategori&id=<?=$row['id_kategori']?>&act=del" onclick="return confirm('Yakin akan menghapus data?')">Hapus</a></td>
			</tr>
			<?php
		}
	?>
</table>
</div>