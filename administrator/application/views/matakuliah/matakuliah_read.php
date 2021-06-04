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
         <li><a href="<?php echo $back ?>">Matakuliah</a></li>
        <li class="active"><?php echo $button ?> Matakuliah</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">        
        <div class="box-body">
		
			<!-- Tampil Data Matakuliah -->   
			<legend><?php echo $button ?> Matakuliah</legend>
			<!-- Button untuk melakukan update -->
			<a href="<?php echo site_url('matakuliah/update/'.$kode_matakuliah) ?>" class="btn btn-primary">Update</a>
			<!-- Button cancel untuk kembali ke halaman mahasiswa list -->
			<a href="<?php echo site_url('matakuliah') ?>" class="btn btn-warning">Cancel</a>
			<p></p>
			<table class="table table-striped table-bordered">
				<tr><td>Kode Matakuliah</td><td><?php echo $kode_matakuliah; ?></td></tr>
				<tr><td>Nama Matakuliah</td><td><?php echo $nama_matakuliah; ?></td></tr>
				<tr><td>Sks</td><td><?php echo $sks; ?></td></tr>
				<tr><td>Semester</td><td><?php echo $semester; ?></td></tr>
				<tr>
					<td>Jenis</td>
					<td>
						<?php 
							if($jenis =="U"){
								echo "Umum";
							}
							elseif($jenis =="W"){
								echo "Wajib";
							}
							else{
								echo "Pilihan";
							}
						?>
					</td>
				</tr>
				<tr>
					<td>Program Studi</td>
					<td><?php echo $nama_prodi; ?></td>
				</tr>
					<tr><td></td><td><a href="<?php echo site_url('matakuliah') ?>" class="btn btn-default">Cancel</a></td></tr>
			</table>
			<!--// Tampil Data Matakuliah -->  