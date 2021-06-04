<!-------------------------------------------------------*/
/* Copyright   : Yosef Murya & Badiyanto                 */
/* Publish     : Penerbit Langit Inspirasi               */
/*-------------------------------------------------------->
<section class="content-header">
      <h1>
        Universitas Langit Inspirasi
        <small>code your life with your style</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="admin"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo $back ?>">Program Studi</a></li>
        <li class="active"><?php echo $button ?> Program Studi</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">        
        <div class="box-body">
		
			<!-- Form input atau edit Prodi-->
			<legend><?php echo $button ?> Program Studi</legend>	
			<form action="<?php echo $action; ?>" method="post">
				<div class="form-group">
					<label for="varchar">Kode Prodi <?php echo form_error('kode_prodi') ?></label>
					<input type="text" class="form-control" name="kode_prodi" id="kode_prodi" placeholder="Kode Prodi" value="<?php echo $kode_prodi; ?>" />
				</div>
				<div class="form-group">
					<label for="varchar">Nama Prodi <?php echo form_error('nama_prodi') ?></label>
					<input type="text" class="form-control" name="nama_prodi" id="nama_prodi" placeholder="Nama Prodi" value="<?php echo $nama_prodi; ?>" />
				</div>
				<div class="form-group">
					<label for="int">Jurusan <?php echo form_error('id_jurusan') ?></label>
					<?php 
						echo combobox('id_jurusan','jurusan','nama_jurusan','id_jurusan', $id_jurusan);
					?>            
				</div>
				<input type="hidden" name="id_prodi" value="<?php echo $id_prodi; ?>" /> 
				<button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
				<a href="<?php echo site_url('prodi') ?>" class="btn btn-default">Cancel</a>
			</form>
			<!--// Form Prodi-->