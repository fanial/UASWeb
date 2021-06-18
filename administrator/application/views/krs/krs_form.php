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
        <li><a href="<?php echo $back ?>"> Data Kartu Rencana Studi</a></li>
        <li class="active"><?php echo $judul ?> Data Kartu Rencana Studi</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">        
        <div class="box-body">
		
			<!-- Form input dan edit data KRS-->
			<legend><?php echo $judul;?> Data Kartu Rencana Studi </legend>

			<form action="<?php echo $action; ?>" method="post">
			 <div class="form-group">
				<label for="int">Tahun Akademik <?php echo form_error('id_thn_akad') ?></label>
				<input type="text" class="form-control" name="thn_akad_smt" value="<?php echo $thn_akad_smt.'/'.$semester; ?>" readonly />
				<input type="hidden" class="form-control" name="id_thn_akad" id="id_thn_akad" value="<?php echo $id_thn_akad; ?>" />					
				<input type="hidden" class="form-control" name="id_krs" id="id_krs" value="<?php echo $id_krs; ?>" />		
			 </div>
			 <div class="form-group">
				<label for="char">Nomor Mahasiswa <?php echo form_error('nim') ?></label>
				<input type="text" class="form-control" name="nim" id="nim" placeholder="Nim" value="<?php echo $nim; ?>" readonly />
			 </div>
			 <div class="form-group">
				<label for="int">Matakuliah <?php echo form_error('kode_matakuliah') ?></label>
				    <?php $query = $this->db->query('SELECT kode_matakuliah,nama_matakuliah FROM matakuliah');
					 	  $dropdowns = $query->result();
						  foreach($dropdowns as $dropdown) {
						     $dropDownList[$dropdown->kode_matakuliah] = $dropdown->nama_matakuliah;
						  }							 
						  echo  form_dropdown('kode_matakuliah',$dropDownList,$kode_matakuliah, 'class="form-control" id="kode_matakuliah"'); 
				    ?>						
			 </div>
			 <button type="submit" class="btn btn-primary">Simpan</button> 
					<a href="<?php echo site_url('krs') ?>" class="btn btn-default">Cancel</a>
			</form>
   