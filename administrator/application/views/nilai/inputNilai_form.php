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
        <li><a href="../admin"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo $back ?>">Nilai Permatakuliah</a></li>
        <li class="active"><?php echo $button ?> Nilai Permatakuliah</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">        
        <div class="box-body">
		
			<!-- Form Input Nilai Permatakuliah -->
			<legend>Input Nilai Permatakuliah</legend>	
			<form action="<?php echo $action; ?>" method="post">
			<?php echo validation_errors(); ?>
				<div class="form-group">
					<label for="int">Tahun Akademik (Semester <?php echo form_error('id_thn_akad') ?> )</label>
					<?php 
					    // Query untuk menampilkan data tahun akademik dan semester
						$query = $this->db->query('SELECT id_thn_akad, semester, 
						                           CONCAT(thn_akad,"/") as ta_sem 
												   FROM thn_akad_semester ORDER BY id_thn_akad DESC');
						$dropdowns = $query->result();
						  
						  foreach($dropdowns as $dropdown) {
									// Menampilkan data semester dalam bentuk string
									if($dropdown->semester == 1){
										$tampilSemester = "Ganjil";
									}
									else{
										$tampilSemester = "Genap";
									}
										
									// Menampilkan data semester dalam bentuk dropdown
									$dropDownList[$dropdown->id_thn_akad] = $dropdown->ta_sem ." ".$tampilSemester;
						  }
						  echo  form_dropdown('id_thn_akad',$dropDownList,'','class="form-control" id="id_thn_akad"'); ?>		
						
						<div class="form-group">
							<label for="char">Kode Matakuliah <?php echo form_error('kode_matakuliah') ?></label>
							<input type="text" class="form-control" name="kode_matakuliah" id="kode_matakuliah" placeholder="Kode Matakuliah" value="<?php echo $kode_matakuliah; ?>" />
						</div>   
				</div>
					
				<button type="submit" class="btn btn-primary">Proses</button> 	   
			</form>
			<!--// Form Input Nilai Permatakuliah -->