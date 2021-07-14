<section class="content-header">
	<h1>
		STMIK Mardira Indonesia
	</h1>
	<ol class="breadcrumb">
		<li><a href="admin"><i class="fa fa-dashboard"></i> Home</a></li>
		<li><a href="<?php echo $back ?>">Jurusan</a></li>
		<li class="active"><?php echo $button ?> Jurusan</li>
	</ol>
</section>
<!-- Main content -->
<section class="content">

	<!-- Default box -->
	<div class="box">
		<div class="box-body">

			<!-- Form input dan edit Jurusan -->
			<legend><?php echo $button ?> Jurusan</legend>
			<form action="<?php echo $action; ?>" method="post">
				<div class="form-group">
					<label for="varchar">Kode Jurusan <?php echo form_error('kode_jurusan') ?></label>
					<input type="text" class="form-control" name="kode_jurusan" id="kode_jurusan" placeholder="Kode Jurusan" value="<?php echo $kode_jurusan; ?>" />
				</div>
				<div class="form-group">
					<label for="varchar">Nama Jurusan <?php echo form_error('nama_jurusan') ?></label>
					<input type="text" class="form-control" name="nama_jurusan" id="nama_jurusan" placeholder="Nama Jurusan" value="<?php echo $nama_jurusan; ?>" />
				</div>
				<input type="hidden" name="id_jurusan" value="<?php echo $id_jurusan; ?>" />
				<button type="submit" class="btn btn-primary"><?php echo $button ?></button>
				<a href="<?php echo site_url('jurusan') ?>" class="btn btn-default">Cancel</a>
			</form>
			<!--// Form Jurusan -->