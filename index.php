<?php
	session_start();
	include "lib/Class-DB.php";
	$hal=isset($_GET['hal'])?$_GET['hal']:"home";
 	$aksi=$fg->get('aksi');
  	$id=$fg->get('id');
  	$user=$fg->ses("username");
?>
<!doctype html>
<html>
	<head>
		<title>APLIKASI KASIR ALAT TULIS</title>
		    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" crossorigin="anonymous">
		    <link rel="stylesheet" type="text/css" href="plugins/datepicker/datepicker3.css" crossorigin="anonymous">
		    <link rel="stylesheet" type="text/css" href="plugins/datatables/jquery.datatables.css" crossorigin="anonymous">
		    <link rel="stylesheet" type="text/css" href="plugins/datatables/datatables.bootstrap.css" crossorigin="anonymous">
		    <link rel="stylesheet" type="text/css" href="plugins/select2/select2.min.css" crossorigin="anonymous">
		    <link rel="stylesheet" type="text/css" href="plugins/font-awesome/css/font-awesome.min.css" crossorigin="anonymous">

		    <link rel="stylesheet" type="text/css" href="plugins/datatables/datatables.min.css">
		    <link rel="stylesheet" type="text/css" href="plugins/datatables/dataTables.bootstrap.css">
		    <link rel="stylesheet" type="text/css" href="plugins/datatables/jquery.dataTables.min.css">
		<style type="text/css">
			.wrapper{
				width: 100%;
				height: 100%;
			}
		</style>
	</head>
	<body>
		<div class="wrapper">
			<nav class="navbar navbar-dark bg-dark">
				<a class="navbar-brand" href="#">
					<img src="image/alat.jpg" width="50" height="50">
				</a>
				<form class="form-inline">
					<input type="text" name="cari" class="form-control" placeholder="Search">
					<button type="submit" class="btn btn-outline-success">Cari</button>
				</form>
			</nav>
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-4 col-md-2">
						<?php
							include "main/sidebar.php";
						?>
					</div>
						<div class="col-md-10">
								<div class="card" style="min-height: 50%">
								<?php
									$hal = $fg->get("hal");
									if(!empty($hal)){
										include "pages/$hal.php";
									}
								?>
									<div class="class-header"></div>
									<div class="card-body"></div>
						</div>
					</div>
			</div>
		</div>
		<nav class="navbar fixed-bottom navbar-dark bg-dark">
			&copy;2022
		</nav>
	</div>
</body>
</html>
<script type="text/javascript" src="jquery/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(function(){
		$("#bayar").keyup(function(){
			var total = $("#total").val();
			var bayar = $("#bayar").val();
			var kembali = bayar-total;
			if(kembali>=0){
				$("#kembali").val(bayar-total);
				$("#kembali").removeAttr("class");
				$("#kembali").attr("class", "bg-success");
				$("#simpan").removeAttr("disabled");
			}else{
				$("#kembali").val(bayar-total);
				$("#kembali").removeAttr("class");
				$("#kembali").attr("class", "bg-danger");
				$("#simpan").attr("disabled");
			}
		});
	})
</script>