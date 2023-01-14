<?php
	$aksi = $fg->get("act");
	if($aksi=="add"){
		$bar = $fg->post("barcode");
		$member = $fg->post("member");
		$sel = $db->query("select * from barang where barcode='$bar'");
		if($sel->rowCount()>0){
			$row = $sel->fetch();
			?>
				<div class="card-header"></div>
				<div class="card-body">
					<form action="?hal=cart&act=add" method="post">
						<div class="form-group row">
							<input type="hidden" name="id_brg"  value="<?=$row['id_barang']?>">
							<input type="hidden" name="member" value="<?=$member?>">
							<div class="col-sm-2 col-form-label">
								<label>Barcode</label>
							</div>
							<div class="col-sm-10">
									<input type="text" name="barcode" readonly class="form-control-plaintext" value="<?=$bar?>">
							</div>
									
						</div>
						<div class="form-group row">
							<div class="col-sm-2 col-form-label">
								<label>Nama Barang</label>
							</div>
							<div class="col-sm-10">
								<input type="text" name="nama_barang" readonly class="form-control-plaintext" value="<?=$row['nama_barang']?>">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-2 col-form-label">
								<label>Jumlah</label>
							</div>
							<div class="col-sm-10">
								<input type="text" name="jumlah" class="form-control" autofocus required>
							</div>
						</div>
							<div class="form-group">
								<button class="btn btn-success" type="submit">Tambahkan</button>
							</div>
						</form>
					</div>
				<?php
			}else{
				echo "<script>alert('data tidak ditemukan'); location.href='?hal=transaksi';</script>";
			}
	}
?>