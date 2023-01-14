<?php
	$aksi = $fg->get("act");
	if($aksi=="del"){
		$id = $fg->get("id");
		$del = $db->query("delete from user where id_user='$id'");
		if($del){
			$fg->redirect("?hal=user");
		}
	}

?>

<div class="card-header bg-success"> <b> Data User </b></div>
<div class="card-body">
	<a href="?hal=frm_user" class="btn btn-primary pull-right"><i class= "fa fa-plus"></i>Tambah data</a>
	<table class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>No</th>
				<th>Username</th>
				<th>Password</th>
				<th>Level</th>
				<th>Edit</th>
				<th>Hapus</th>
			</tr>
		</thead>
		<tbody>
	<?php
		$no =0;
		$query = $db->select("user");
		while($row=$query->fetch()){
			$no++;
			?>
			<tr>
				<td><?=$no?></td>
				<td><?=$row['username']?></td>
				<td><?=$row['password']?></td>
				<td>
					<?php
						switch ($row['user_level']){
							case 1:
								#code...
								echo "administrator";
								break;
					
						}
					?>
				</td>
				<td><a class="btn btn-warning" href="?hal=edit_user&act=edit&id=<?=$row['id_user']?>">Edit</a></td>
				<td><a class="btn btn-danger" href="?hal=user&id=<?=$row['id_user']?>&act=del" onclick="return confirm('Yakin akan menghapus data?')">Hapus</a></td>
			</tr>
			<?php
		}
	?>
	</tbody>
</table>
</div>