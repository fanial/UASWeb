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
         <li><a href="<?php echo $back ?>">Dosen</a></li>
        <li class="active"><?php echo $button ?> Dosen</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">        
        <div class="box-body">
		
		<!-- Tampil Data Dosen -->  
		<legend><?php echo $button ?> Dosen</legend>		
		<!-- Button untuk melakukan update -->
		<a href="<?php echo site_url('dosen/update/'.$id_dosen) ?>" class="btn btn-primary">Update</a>
		<!-- Button cancel untuk kembali ke halaman dosen list --> 
		<a href="<?php echo site_url('dosen') ?>" class="btn btn-warning">Cancel</a>
		<p></p> 
		 <!-- Menampilkan data dosen secara detail -->
        <table class="table table-striped table-bordered">
	    <tr><td>Photo</td><td><img src="../../../images/dosen/<?php echo $photo; ?>"</td></tr>
	    <tr><td>NIDN</td><td><?php echo $nidn; ?></td></tr>
	    <tr><td>Nama Dosen</td><td><?php echo $nama_dosen; ?></td></tr>
	    <tr><td>Alamat</td><td><?php echo $alamat; ?></td></tr>
	    <tr><td>Jenis Kelamin</td><td><?php echo $jenis_kelamin; ?></td></tr>
	    <tr><td>Email</td><td><?php echo $email; ?></td></tr>
	    <tr><td>Telp</td><td><?php echo $telp; ?></td></tr>	    
	    <tr><td></td><td><a href="<?php echo site_url('dosen') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
      