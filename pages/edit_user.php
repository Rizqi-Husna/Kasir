<?php
	$id = $fg->get("id");
	if(!empty($id)){
		$sel = $db->query("select * from user where id_user='$id'");
		if($sel->rowCount()>0){
			$row = $sel->fetch();
		}
	}else{
		extract($_POST);
		if(!empty($pass1)){
			if($pass1==$pass2){
				$password = md5($pass1);
				$up = $db->query("update user set username='$username',password='$password',user_level='$level' where id_user='$id'");
				if($up){
					echo "<script>alert('simpan berhasil');</script>";
					echo "<script>location.href='?hal=user';</script>";
				}
			}else{
				echo "<script>alert('simpan gagal');</script>";
				echo "<script>location.href='?hal=user';</script>";
			}
		}else{
			$up = $db->query("update user set username='$username',user_level='$level' where id_user='$id'");
			if($up){
				echo "<script>alert('simpan berhasil');</script>";
				echo "<script>location.href='?hal=user';</script>";
			}
		}
	}
?>
<div class="card-header bg-success">Edit User</div>
<div class="card-body">
	<form method="post" action="?hal=edit_user">
		<div class="form-group">
			<label>Username</label>
			<input type="hidden" name="id" value="<?=$id?>">
			<input type="text" name="username" placeholder="Username" class="form-control" required value="<?=$row['username']?>">
		</div>
		<div class="form-group">
			<label>Password<p class="text-danger">*Kosongkan Jika Tidak Ingin Ganti Password</p></label>
			<input type="password" name="pass1" placeholder="Password" class="form-control">
		</div>
		<div class="form-group">
			<label>Ulangi Password<p class="text-danger">*Kosongkan Jika Tidak Ingin Ganti Password</p></label>
			<input type="password" name="pass2" placeholder="Ulangi Password" class="form-control">
		</div>
		<div class="form-group">
			<label>User Level</label>
			<select class="form-control" name="level" required>
				<option value="">==pilih level==</option>
				<option value="1" <?=$row['user_level']==1?"selected":""?>>Adminstrator</option>
			</select>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-success">Simpan</button>
			<button type="reset" class="btn btn-warning">Reset</button>
		</div>
	</form>
</div>