<!-------------------------------------------------------*/
/* Copyright   : Yosef Murya & Badiyanto                 */
/* Publish     : Penerbit Langit Inspirasi               */
/*-------------------------------------------------------->
<section class="content-header">
<h1>
	  STMIK Mardira Indonesia
      </h1>
      <ol class="breadcrumb">
        <li><a href="admin"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Kartu Hasil Studi Mahasiswa</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">        
        <div class="box-body">
		
			<!-- Form Input Nilai Permatakuliah Akhir -->
			<legend>Kartu Hasil Studi Mahasiswa</legend>	
			<form action="<?php echo $action; ?>" method="post">
				<?php echo validation_errors(); ?>
					
				<div class="form-group">
					<label for="char">Nim <?php echo form_error('nim') ?></label>
					<input type="text" class="form-control" name="nim" id="nim" placeholder="NIM" value="<?php echo $nim; ?>" />
				</div>		
				<div class="form-group">
					<label for="int">Tahun Akademik/Semester <?php echo form_error('id_thn_akad') ?></label>
					<?php 
						  // Query untuk menampilkan data tahun akademik semester
						  $query = $this->db->query('SELECT id_thn_akad, semester, 
													 CONCAT(thn_akad,"/") AS ta_sem 
													 FROM thn_akad_semester
													 ORDER BY id_thn_akad DESC');
													 
						  $dropdowns = $query->result();
						  
						  // Menampilkan data tahun akademik semester
						  foreach($dropdowns as $dropdown) {
							  
							// Jika data semester = 1 maka akan dimunculkan "Ganjil"
							if($dropdown->semester == 1){
										
								$tampilSemester = "Ganjil";
							}
							// Jika data semester = 2 atau selain 1 maka akan dimunculkan "Genap"
							else{
										
								$tampilSemester =  "Genap";
							}
							// Data tahun akademik semester ditampilkan dalam bentuk dropdown
							$dropDownList[$dropdown->id_thn_akad] = $dropdown->ta_sem ." ".$tampilSemester;
						  }
						
						echo  form_dropdown('id_thn_akad',$dropDownList,'','class="form-control" id="id_thn_akad"'); 
					?>		
						
				</div>
					
				<button type="submit" class="btn btn-primary">Proses</button> 
				   
			</form>
    