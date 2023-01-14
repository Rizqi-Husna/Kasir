<?php
	$aksi = $fg->get("act");
	if($aksi=="del"){
		$id = $fg->get("id");
		$del = $db->query("delete from barang where id_barang='$id'");
		if($del){
			$fg->redirect("?hal=barang");
		}
	}
?>
<div class="card-header bg-success"> <b> Data Barang <b> </div>
<div class="card-body">
	<a href="?hal=frm_barang" class="btn btn-primary pull-right"><i class= "fa fa-plus"></i> Tambah Data</a>
	<b/>
	<table class="table table-bordered table-striped">
		<tr>
			<th>No</th>
			<th>Kategori</th>
			<th>Barcode</th>
			<th>Nama Barang</th>
			<th>Nama Produk</th>
			<th>Stok</th>
			<th>Harga Pokok</th>
			<th>Harga Jual</th>
			<th>Harga Member</th>
			<th>Harga Diskon</th>
			<th colspan="2">Opsi</th>
		</tr>
	<?php
		$no = 0;
		$query = $db->select("barang");
		while($row=$query->fetch()){
			$no++;
			?>
			<tr>
				<td><?=$no?></td>
				<td><?=$row['kategori']?></td>
				<td><?=$row['barcode']?></td>
				<td><?=$row['nama_barang']?></td>
				<td><?=$row['nama_pd']?></td>
				<td><?=$row['stok']?></td>
				<td><?=$row['harga_pokok']?></td>
				<td><?=$row['harga_jual']?></td>
				<td><?=$row['harga_member']?></td>
				<td><?=$row['harga_diskon']?></td>
				<td><a class="btn btn-warning" href="?hal=edit_barang&id=<?=$row['id_barang']?>">Edit</a></td>
				<td><a class="btn btn-danger" href="?hal=barang&id=<?=$row['id_barang']?>&act=del" onclick="return confirm('Yakin akan menghapus data?')">Hapus</a></td>
			</tr>
			<?php
		}
	?>
</table>
</div>