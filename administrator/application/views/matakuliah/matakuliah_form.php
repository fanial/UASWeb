	<section class="content-header">
      <h1>
	  	STMIK Mardira Indonesia
      </h1>
      <ol class="breadcrumb">
        <li><a href="admin"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo $back ?>">Matakuliah</a></li>
        <li class="active"><?php echo $button ?> Matakuliah</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">        
        <div class="box-body">
		
		   <!-- Form input dan edit Matakuliah-->
		   <legend><?php echo $button ?> Matakuliah</legend>	
			<form action="<?php echo $action; ?>" method="post">
			<div class="form-group">
				<label for="varchar">Kode Matakuliah <?php echo form_error('kode_matakuliah') ?></label>
				<input type="text" class="form-control" name="kode_matakuliah" id="kode_matakuliah" placeholder="Kode Matakuliah" value="<?php echo $kode_matakuliah; ?>" />
			</div>
			<div class="form-group">
				<label for="varchar">Nama Matakuliah <?php echo form_error('nama_matakuliah') ?></label>
				<input type="text" class="form-control" name="nama_matakuliah" id="nama_matakuliah" placeholder="Nama Matakuliah" value="<?php echo $nama_matakuliah; ?>" />
			</div>
			<div class="form-group">
				<label for="enum">SKS <?php echo form_error('sks'); ?></label>
				<?php 
					$pilihan = array("" => "-- Pilihan --",
											 "1" => "1",
											 "2" => "2",
											 "3" => "3",
											 "4" => "4",
											 "5" => "5",
											 "6" => "6");
				   echo  form_dropdown('sks', $pilihan,$sks, 'class="form-control" id="sks"'); ?>
			</div>
			
			<div class="form-group">            
				<div class="form-group">
				<label for="enum">Semester <?php echo form_error('semester'); ?></label>
				<?php 
					$pilihan = array("" => "-- Pilihan --",
											 "1" => "1",
											 "2" => "2",
											 "3" => "3",
											 "4" => "4",
											 "5" => "5",
											 "6" => "6",
											 "7" => "7",
											 "8" => "8",);
				   echo  form_dropdown('semester', $pilihan,$semester, 'class="form-control" id="semester"'); ?>
				</div>
			</div>
			
			<div class="form-group">
				<label for="enum">Jenis <?php echo form_error('jenis'); ?></label>
				<?php $piljenis = array("" => "-- Pilihan --","W" =>"Wajib","U"=>"Umum","P"=>"Pilihan");
				   echo  form_dropdown('jenis', $piljenis,$jenis, 'class="form-control" id="jenis"'); ?>
			</div>
			
			<div class="form-group">
				<label for="int">Prodi <?php echo form_error('id_prodi') ?></label>			
				<?php 
					echo combobox('id_prodi','prodi','nama_prodi','id_prodi', $id_prodi);
				?> 	
			</div>
			
			 <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
			<a href="<?php echo site_url('matakuliah') ?>" class="btn btn-default">Cancel</a>
		</form>
		<!--// Form Matakuliah-->