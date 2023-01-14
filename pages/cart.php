<?php
	$aksi = $fg->get("act");
	$id = $fg->get("id");
	switch ($aksi) {
		case 'add':
			# code...
			extract($_POST);
			if(isset($_SESSION['cart'][$id_brg])){
				$_SESSION['cart'][$id_brg] += $jumlah;
			}else{
				$_SESSION['cart'][$id_brg] = $jumlah;
			}
			if(empty($_SESSION['member']['id'])){
					if(!empty($member)){
						$q = $db->select("member where id_member = '$member'");
						$m = $q->fetch();
						$_SESSION['member']['id'] = $member;
						$_SESSION['member']['nama'] = $m['nama_member'];
					}else{
						$_SESSION['member']['nama'] = "umum";
					}
				}
				break;
			case 'del':
				# code...
				unset($_SESSION['cart']['$id']);
				break;
			case 'batal':
				# code...
					unset($_SESSION['cart']);
					unset($_SESSION['member']);
				break;
			default:
				# code...
				break;
		}
?>
<script type="text/javascript">
	location.href='?hal=transaksi';
</script>
				