<?php
	$aksi =$fg->get("act");
	if($aksi== "save"){
		extract($_POST);
		if($pass1==$pass2){
			$password = md5($pass1);
			$ins = $db->query("insert into user(username,password,user_level) values('$username','$password','$level')");
			if($ins){
				echo "<script>alert('simpan berhasil');</script>";
				echo "<script>location.href='?hal=user';</script>";
			}else{
				echo "<script>alert('simpan gagal');</script>";
				echo "<script>location.href='?hal=frm_user';</script>";
			}
		}else{
			echo "<script>alert('password tidak cocok');</script>";
			echo "<script>location.href='?hal=frm_user';</script>";
		}
	}
?>

<div class="card-header bg-success">Input User</div>
<div class="card-body">
	<form method="post" action="?hal=frm_user&act=save">
		<div class="form-group">
			<label>Username</label>
			<input type="text" name="username" placeholder="Username" class="form-control" required>
		</div>
		<div class="form-group">
			<label>Password</label>
			<input type="password" name="pass1" placeholder="Password" class="form-control" required>
		</div>
		<div class="form-group">
			<label>Ulangi Password</label>
			<input type="password" name="pass2" placeholder="Ulangi Password" class="form-control" required>
		</div>
		<div class="form-group">
			<label>User Level</label>
			<select class="form-control" name="level" required>
				<option value="">Pilih Level</option>
				<option value="1">Administrator</option>
			</select>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-success">Simpan</button>
			<button type="reset" class="btn btn-warning">Reset</button>
		</div>
	</form>
</div>