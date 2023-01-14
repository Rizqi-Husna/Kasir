<?php
	$aksi = $fg->get("act");
	if($aksi=="del"){
		$id = $ff->get("id");
		$del = $db->query("delete from member where id_member='$id'");
		if($del){
			$ff->redirect("?hal=member");
		}
	}
	
?>

<div class="card-header bg-success"><b>Data Member </b></div>
<div class="card-body">
	<a href="?hal=frm-member" class="btn btn-primary pull-right"><i class= "fa fa-plus"></i>Tambah Data</a>
	<table class="table table-bordered table-striped">
		<tr>
			<th>No</th>
			<th>Nama Member</th>
			<th>Alamat</th>
			<th>No Hp</th>
			<th colspan="2">Opsi</th>
		</tr>
	<?php
		$no = 0;
		$query = $db->select("member");
		while($row=$query->fetch()){
			$no++;
			?>
			<tr>
				<td><?=$no?></td>
				<td><?=$row['nama_member']?></td>
				<td><?=$row['alamat']?></td>
				<td><?=$row['no_hp']?></td>
				<td><a class="btn btn-warning" href="?hal=edit_member&id=<?=$row['id_member']?>">Edit</a></td>
				<td><a class="btn btn-danger" href="?hal=member&id=<?=$row['id_member']?>&act=del" onclick="return confirm('Yakin akan menghapus data?')">Hapus</a></td>
			</tr>
			<?php
		}
	?>
</table>
</div>