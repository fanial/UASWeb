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
        <li><a href="<?php echo $back ?>">KRS Mahasiswa</a></li>
        <li class="active"><?php echo $button ?> KRS Mahasiswa</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">        
        <div class="box-body">
		
			<!-- Form KRS Mahasiswa-->
			<legend>Kartu Rencana Studi Mahasiswa</legend>	
			<form action="<?php echo $action; ?>" method="post">
				<?php echo validation_errors(); ?>					
				<div class="form-group">
					<label for="char">Nomor Mahasiswa <?php echo form_error('nim') ?></label>
					<input type="text" class="form-control" name="nim" id="nim" placeholder="Nomor mahasiswa" value="<?php echo $nim; ?>" />
				</div>		
				<div class="form-group">
					<label for="int">
						Tahun Akademik/Semester 
						<?php echo form_error('id_thn_akad') ?>
					</label>
					<?php 		
						// Query untuk menampilkan data tahun akademik	
						$query = $this->db->query('SELECT id_thn_akad, semester, 
											       CONCAT(thn_akad,"/") 
												   AS thn_sememester 
												   FROM thn_akad_semester ORDER BY id_thn_akad DESC');
						$dropdowns = $query->result();
						
							foreach($dropdowns AS $dropdown) {	
									
								if($dropdown->semester == 1){										
									$tampilSemester = "Ganjil";
								}
								else{										
									$tampilSemester =  "Genap";
								}
									
								$dropDownList[$dropdown->id_thn_akad] = $dropdown->thn_sememester . " ".$tampilSemester;
								  
							}
							echo  form_dropdown('id_thn_akad',$dropDownList,'', 'class="form-control" id="id_thn_akad"'); 
						?>					
				</div>		
				<button type="submit" class="btn btn-primary">Proses</button>	   
			 </form>