<?php
	$aksi = $fg->get("act");
	if($aksi=="checkout"){
		if(isset($_SESSION['cart'])){
			foreach ($_SESSION['cart'] as $key => $val){
				# code...
				$sel = $db->select("barang where id_barang='$key'");
				$row = $sel->fetch();
				if($_SESSION['member']['']=="umum"){
					$id_member = 0;
					$harga = $row['harga_jual'];
				}else{
					$id_member = $_SESSION['member']['id'];
					$harga = $row['harga_member'];
				}
				$ins = $db->query("insert into transaksi(date_time,id_user,id_member) values(now(),'".$_SESSION['userId']."','$id_member')");
				$id = $db->lastInsert();
				$insdetail = $db->query("insert into detail_transaksi(id_transaksi,id_barang,jumlah,harga) values('$id','$row[id_barang]','$val','$harga')");
				unset($_SESSION['cart'][$key]);
			}
			unset($_SESSION['member']['id']);
			unset($_SESSION['member']['nama']);
			echo "<script>alert('Transaksi Berhasil')</script>";
			$fg->redirect("?hal=transaksi");
		}else{
			$fg->alert("transaksi tidak bisa diproses");
		}
	}
?>