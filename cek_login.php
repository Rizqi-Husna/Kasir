<?php
session_start();
include "lib/Class-DB.php";
include "lib/Class_fungsi.php";

$user = $fg->post("username");
$pass = $fg->post("password");
if(!empty($user)){
	$password = md5($pass);
	$sel = $db->query("select * from user where username = '$user' and password = '$password'");
	if($sel->rowCount()>0){
		$row = $sel-> fetch();
		$_SESSION['userId']=$row['id_user'];
		?>
			<script type="text/javascript">
				location.href='index.php';
			</script>
			<?php
		}else{
			?>
			<script type="text/javascript">
				alert("login gagal");
				location.href ='login.php';
			</script>
			<?php
		}
	}
?>