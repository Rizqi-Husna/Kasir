<div class="card">
		<div class="card-header">
			<b> PENGADUAN </b>
			<a href="?hal=frm_pegawai&aksi=baru" class="btn pull-right" style="background-color: #a6a6a6"><i class="fa fa-plus"></i></a>
		</div>
		<div class="card-body">
			<table class="table table-bordered table-stripped table-data">
				<thead>
					<tr>
						<th> No </th>
						<th> Tanggal Pengaduan </th>
						<th> NIK </th>
						<th> Isi Laporan </th>
						<th> Foto </th>
						<th> Status </th>
					</tr>
				</thead>
	if (!empty($hal)) {
						
	include_once "pages/$hal.php";