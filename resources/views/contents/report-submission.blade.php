@extends('layouts.layout-report')

@section('sub-content')
	<!-- NOTE : YANG ADA IF NYA LINE = 6, 106, 117, 121, 211 -->

	@if(session()->get('nama_jabatan') == "Kepala Sekolah" || session()->get('nama_jabatan') == "Kepala Keuangan") 
	<!-- Jabatan = Kepsek, Ka. Keuangan-->
	<div class="content">
		<div class="back">
			<a href="/report"><i class="fa fa-arrow-left" title="Back to Report"></i></a>
		</div>
		<div class="header_report">
			<h4>Laporan Pengajuan</h4>
		</div> <br>

		<div class="box1 box-info">
			<div class="box-header with-border">
				<h3 class="box-title">Tabel Pengajuan</h3>

				<div class="right">
				<form class="form-inline" method="post">
					<div class="form-group">
						<input type="text" name="" placeholder="Search" class="form-control search"> <!-- PERLU BACKEND -->
						<button type="submit" class="btn btn-info"><i class="fa fa-search"></i></button>
					</div>
				</form>
				</div>
			</div>
			<div class="box-info">
				<div class="table-responsive">
					<table class="table">
					<tr>
						<th>Pengajuan</th>
						<th>Pengaju</th>
						<th>Tanggal</th>
						<th>Status</th>
						<th>Detail Pengajuan</th>
					</tr>
					@foreach ($report->all() as $r)
						<tr>
							<td>{{ $r->judul }}</td> <!-- PERLU BACKEND -->
							<td>{{ $r->nama }}{{ $r->nama_jurusan? '/'.$r->nama_jurusan : '' }}</td> <!-- PERLU BACKEND -->
							<td>{{ $r->updated_at }}</td> <!-- PERLU BACKEND -->
							<td>{{ $r->status }}</td> <!-- PERLU BACKEND -->
							<td><button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#detail">Lihat Detail</button></td>

					<!-- Modal -->
					<div class="modal" id="detail">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								
								<!-- Header --->
								<div class="modal-header">
									<h4 class="modal-title">{{ $r->judul }}</h4> <!-- DI GET DARI DATA PENGAJU -->
									<button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>

									<!-- Body -->
									<div class="modal-body top"> <!-- DI GET DARI DATA PENGAJU --> <!-- DESKRIPSI -->
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

										<div class="modal-body bottom">
											<label><b>File Lampiran</b></label>
												<!-- CANTUMKAN FILE LAMPIRAN -->
										</div>
										<div class="modal-body bottom">
											<label><b>Status : </b></label>
											<label>-</label> <!-- CANTUMKAN STATUS -->
										</div>
										<div class="modal-body bottom">
											<label><b>Id Transaksi : </b></label>
											<label>-</label> <!-- MUNCUL JIKA PENGAJUAN DITERIMA/ACC -->
										</div>
										<div class="modal-body bottom">
											<label><b>Pengaju : </b></label>
											<label>Nama Pengaju</label> <!-- CANTUMKAN NAMA PENGAJU -->
										</div>
										<div class="modal-body bottom">
											<label><b>Tanggal Diajukan : </b></label>
											<label>12-12-20 </label> <!-- CANTUMKAN TAANGGAL DIAJUKAN -->
										</div>
										<div class="modal-body bottom">
											<img src="../img/icon/stm.png" class="ava" alt="">&nbsp; <!-- GET AVATAR PENGOMENTAR-->
											<label>Nama Pengomentar</label> <br><br> <!-- GET NAMA PENGOMENTAR-->
											<textarea disabled="" class="form-control"></textarea> <!-- GET KOMENTAR-->
										</div>
									</div>

									<!-- Footer -->
									<div class="modal-footer">
										<button type="button" class="btn btn-success" data-dismiss="modal">OK</button>
									</div>
								</div>
							</div>
						</div>
						</tr>
					@endforeach
					
					</table>
				</div>
			</div>
		</div>

	</div>
	@endif

	@if(session()->get('nama_jabatan') == "Staf APBD" || session()->get('nama_jabatan') == "Staf BOS") 
	<!-- Jabatan = Staf APBD, Staf BOS-->
	<div class="content">
		<div class="back">
			<a href="/report"><i class="fa fa-arrow-left" title="Back to Report"></i></a>
		</div>
		<div class="header_report">
			<h4>Laporan Pengajuan</h4>
		</div> <br>

		<div class="box1 box-info">
			<div class="box-header with-border">
			@if(session()->get('nama_jabatan') == "Staf APBD") <!--Jabatan = Staf APBD-->
				<h3 class="box-title">Tabel Pengajuan APBD</h3>
			@endif

			@if(session()->get('nama_jabatan') == "Staf BOS") <!--Jabatan = Staf BOS-->
				<h3 class="box-title">Tabel Pengajuan BOS</h3>
			@endif
				<div class="right">
				<form class="form-inline" method="post">
					<div class="form-group">
						<input type="text" name="" placeholder="Search" class="form-control search"> <!-- PERLU BACKEND -->
						<button type="submit" class="btn btn-info"><i class="fa fa-search"></i></button>
					</div>
				</form>
				</div>
			</div>
			<div class="box-info">
				<div class="table-responsive">
				<!-- TAMPILKAN SESUAI JENIS DANA, JIKA STAF APBD = HANYA TAMPILKAN APBD, JIKA BOS = HANYA TAMPILKAN BOS-->
					<table class="table">
					<tr>
						<th>Pengajuan</th>
						<th>Pengaju</th>
						<th>Jumlah</th>
						<th>Tanggal</th>
						<th>Status</th>
						<th>Detail Pengajuan</th>
					</tr>
					<tr>
						<td>Judul Pengajuan</td> <!-- PERLU BACKEND -->
						<td>Nama Pengaju/Jurusan</td> <!-- PERLU BACKEND -->
						<td>Rp. 1.000.000</td> <!-- PERLU BACKEND -->
						<td>20-10-20</td> <!-- PERLU BACKEND -->
						<td>-</td> <!-- PERLU BACKEND -->
						<td><button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#detail">Lihat Detail</button></td>

					<!-- Modal -->
					<div class="modal" id="detail">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								
								<!-- Header --->
								<div class="modal-header">
									<h4 class="modal-title">Judul Pengajuan</h4> <!-- DI GET DARI DATA PENGAJU -->
									<button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>

								<!-- Body -->
								<div class="modal-body top"> <!-- DI GET DARI DATA PENGAJU --> <!-- DESKRIPSI -->
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

									<div class="modal-body bottom">
										<label><b>File Lampiran</b></label>
											<!-- CANTUMKAN FILE LAMPIRAN -->
									</div>
									<div class="modal-body bottom">
										<label><b>Status : </b></label>
										<label>-</label> <!-- CANTUMKAN STATUS -->
									</div>
									<div class="modal-body bottom">
										<label><b>Id Transaksi : </b></label>
										<label>-</label> <!-- MUNCUL JIKA PENGAJUAN DITERIMA/ACC -->
									</div>
									<div class="modal-body bottom">
										<label><b>Pengaju : </b></label>
										<label>Nama Pengaju</label> <!-- CANTUMKAN NAMA PENGAJU -->
									</div>
									<div class="modal-body bottom">
										<label><b>Tanggal Diajukan : </b></label>
										<label>12-12-20 </label> <!-- CANTUMKAN TAANGGAL DIAJUKAN -->
									</div>
									<div class="modal-body bottom">
										<img src="../img/icon/stm.png" class="ava" alt="">&nbsp; <!-- GET AVATAR PENGOMENTAR-->
										<label>Nama Pengomentar</label> <br><br> <!-- GET NAMA PENGOMENTAR-->
										<textarea disabled="" class="form-control"></textarea> <!-- GET KOMENTAR-->
									</div>
								</div>

								<!-- Footer -->
								<div class="modal-footer">
									<button type="button" class="btn btn-success" data-dismiss="modal">OK</button>
								</div>
							</div>
						</div>
					</div>
					</tr>
					</table>
				</div>
			</div>
		</div>

	</div>
	@endif

	@if(session()->get('nama_jabatan') == "Kaprog") <!-- Jabatan = Kaprog-->
	<div class="content">
		<div class="header_report">
			<h4>Laporan Pengajuan</h4>
		</div> <br>

		<div class="box1 box-info">
			<div class="box-header with-border">
				<h3 class="box-title">Tabel Pengajuan</h3>

				<div class="right">
				<form class="form-inline" method="post">
					<div class="form-group">
						<input type="text" name="" placeholder="Search" class="form-control search"> <!-- PERLU BACKEND -->
						<button type="submit" class="btn btn-info"><i class="fa fa-search"></i></button>
					</div>
				</form>
				</div>
			</div>
			<div class="box-info">
				<div class="table-responsive">
					<table class="table">
					<tr>
						<th>Pengajuan</th>
						<th>Pengaju</th>
						<th>Jumlah</th>
						<th>Jenis Dana</th>
						<th>Tanggal</th>
						<th>Status</th>
						<th>Detail Pengajuan</th>
					</tr>
					<tr>
						<td>Judul Pengajuan</td> <!-- PERLU BACKEND -->
						<td>Nama Pengaju/Jurusan</td> <!-- PERLU BACKEND -->
						<td>Rp. 1.000.000</td> <!-- PERLU BACKEND -->
						<td>APBD/BOS</td> <!-- PERLU BACKEND -->
						<td>20-10-20</td> <!-- PERLU BACKEND -->
						<td>Ditolak/Diterima</td> <!-- PERLU BACKEND -->
						<td><button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#detail">Lihat Detail</button></td>

					<!-- Modal -->
					<div class="modal" id="detail">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								
								<!-- Header --->
								<div class="modal-header">
									<h4 class="modal-title">Judul Pengajuan</h4> <!-- DI GET DARI DATA PENGAJU -->
									<button type="button" class="close" data-dismiss="modal">&times;</button>
								</div>

								<!-- Body -->
								<div class="modal-body top"> <!-- DI GET DARI DATA PENGAJU --> <!-- DESKRIPSI -->
									Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

									<div class="modal-body bottom">
										<label><b>File Lampiran</b></label>
											<!-- CANTUMKAN FILE LAMPIRAN -->
									</div>
									<div class="modal-body bottom">
										<label><b>Status : </b></label>
										<label>-</label> <!-- CANTUMKAN STATUS -->
									</div>
									<div class="modal-body bottom">
										<label><b>Id Transaksi : </b></label>
										<label>-</label> <!-- MUNCUL JIKA PENGAJUAN DITERIMA/ACC -->
									</div>
									<div class="modal-body bottom">
										<label><b>Pengaju : </b></label>
										<label>Nama Pengaju</label> <!-- CANTUMKAN NAMA PENGAJU -->
									</div>
									<div class="modal-body bottom">
										<label><b>Tanggal Diajukan : </b></label>
										<label>12-12-20 </label> <!-- CANTUMKAN TAANGGAL DIAJUKAN -->
									</div>
									<div class="modal-body bottom">
										<img src="../img/icon/stm.png" class="ava" alt="">&nbsp; <!-- GET AVATAR PENGOMENTAR-->
										<label>Nama Pengomentar</label> <br><br> <!-- GET NAMA PENGOMENTAR-->
										<textarea disabled="" class="form-control"></textarea> <!-- GET KOMENTAR-->
									</div>
								</div>

								<!-- Footer -->
								<div class="modal-footer">
									<button type="button" class="btn btn-success" data-dismiss="modal">OK</button>
								</div>
							</div>
						</div>
					</div>
					</tr>
					</table>
				</div>
			</div>
		</div>

	</div>
	@endif
@endsection