<div class="card-header bg-success"><b>Transaksi Penjualan</b></div>
<div class="card-body">
	<form method="post" action="?hal=proses_trans&act=add">
		<div class="card">
		<div class="card-header">
			<label>ID Member</label>
			<?php
				if(isset($_SESSION['member']['nama'])){
					echo "<input type='text' class='form-control' name='member' value='".$_SESSION['member']['nama']."' readonly'>";
				}else{
					echo "<input type='text' class='form-control' name='member'>";
				}
			?>
		</div>
		<div class="card">
		<div class="card-header">
			<label>Barcode</label>
			<input type="text" name="barcode" placeholder="Barcode" class="form-control" autofocus required>
		</div>
		<div class="card">
		<div class="card-header">
			<button type="submit" name="proses" class="btn btn-success">Proses</button>
			<a href="?hal=cart&act=batal" class="btn btn-danger" onclick="return confirm('Ingin Membatalkan Transaksi?');">Batalkan Transaksi</a>
		</div>
	</form>
</div>
<table class="table table-bordered table-striped">
	<tr>
		<td>No</td>
		<td>Nama Barang</td>
		<td>Jumlah</td>
		<td>Harga Satuan</td>
		<td>Sub Total</td>
	</tr>
<?php
	if(isset($_SESSION['cart'])){
		$no = 0;
		$total = 0;
		foreach ($_SESSION['cart'] as $key => $value) {
			$no++;
			# code...
			$sel = $db->select("barang where id_barang='$key'");
			$row = $sel->fetch();
			if(isset($_SESSION['member']['id'])){
				$harga_jual = $row['harga_member'];
			}else{
				$harga_jual = $row['harga_jual'];
			}
			$total += $value*$harga_jual;
			?>
			<tr>
				<td><?=$no?></td>
				<td><?=$row['nama_barang']?></td>
				<td><?=$value?></td>
				<td><?=$harga_jual?></td>
				<td><?=$value*$harga_jual?></td>
			</tr>
			<?php
			
		}
	}
?>
	<form method="post" action="?hal=selesai&act=checkout">
	<tr>
		<td colspan="4">Total</td>
		<td><input type="text" name="total" id="total" value="<?=isset($total)?$total:0?>" readonly></td>
	</tr>
	<tr>
		<td colspan="4">Dibayar</td>
		<td><input type="text" name="bayar" id="bayar" value="0"></td>
	</tr>
	<tr>
		<td colspan="4">Kembali</td>
		<td><input type="text" name="kembali" id="kembali" readonly></td>
	</tr>
	<tr>
		<td><button type="submit" id="simpan" class="btn btn-primary" disabled>Selesai</button></td>
	</tr>
	</form>
</table>