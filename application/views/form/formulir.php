<!-- Validasi Form -->
<!-- <?php echo validation_errors(); ?>

<?php echo form_open_multipart('form/create'); ?> -->
<!-- Membuat Form Group -->
			<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Form Data</h3>
						</div>
					</div>
						<div class="col-lg-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Form Masukkan <small>Mohon diisi dengan bijak</small></h2>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form action="<?= base_url('form/create');?>" method="post" class="form-horizontal form-label-left">
										<div class="form-group row">
											<label class="control-label col-md-3 col-sm-3 ">NIK</label>
											<div class="col-md-9 col-sm-9 ">
												<input type="text" name="nik" class="form-control" placeholder="NIK Sesuai KTP" />
											</div>
										</div>
										<div class="form-group row ">
											<label class="control-label col-md-3 col-sm-3 ">Nama</label>
											<div class="col-md-9 col-sm-9 ">
												<input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
											</div>
										</div>
										<div class="form-group row ">
											<label class="control-label col-md-3 col-sm-3 ">Alamat</label>
											<div class="col-md-9 col-sm-9 ">
												<input type="text" name="alamat" class="form-control" placeholder="Alamat">
											</div>
										</div>
										<div class="form-group row">
											<label class="control-label col-md-3 col-sm-3 ">Jenis Layanan Surat</label>
											<div class="col-md-9 col-sm-9 ">
												<select class="select2_single form-control", name="jenis_pelayanan" tabindex="-1">
													<option></option>
													<option value="keterangan usaha">Surat Keterangan Usaha</option>
													<option value="belum menikah">Surat Keterangan Belum Menikah</option>
													<option value="belum memiliki rumah">Surat Keterangan Belum Memiliki Rumah</option>
													<option value="belum bekerja">Surat Keterangan Belum Bekerja</option>
													<option value="menikah">Surat Keterangan Menikah / NA</option>
													<option value="berkelakuan baik">Surat Keterangan Berkelakuan Baik / SKCK</option>
													<option value="domisili">Surat Keterangan Domisili</option>
													<option value="pindah">Surat Keterangan Pindah</option>
													<option value="kematian">Surat Keterangan Kematian </option>
													<option value="ahli waris">Surat Keterangan Ahli Waris</option>
													<option value="izin usaha">Surat Keterangan Izin Usaha / IUMK</option>
													<option value="situ">Surat Pengantar Izin Tempat Usaha</option>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-md-3 col-sm-3  control-label">Tingkat Kepuasan</label>
											<div class="col-md-9 col-sm-9 ">
												<div class="radio">
													<label>
														<input type="radio" class="flat" name="kepuasan"> Sangat Puas
													</label>
												</div>
												<div class="radio">
													<label>
														<input type="radio" class="flat" name="kepuasan"> Cukup Puas
													</label>
												</div>
												<div class="radio">
													<label>
														<input type="radio" class="flat" name="kepuasan"> Tidak Puas
													</label>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label class="control-label col-md-3 col-sm-3 ">Komentar, Saran, dan Masukan</label>
											<div class="col-md-9 col-sm-9 ">
												<textarea class="form-control" rows="3" name="komentar" placeholder="Date Of Birth"></textarea>
											</div>
										</div>
										<div class="ln_solid"></div>
										<div class="form-group">
											<div class="col-md-12 col-sm-12  offset-md-12" align="center">
												<button type="submit" class="btn btn-success">Submit</button>
											</div>
										</div>

									</form>
								</div>
							</div>
						</div>
			<!-- /page content -->