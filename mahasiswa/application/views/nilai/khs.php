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
        <li><a href="<?php echo $back ?>">Kartu Hasil Studi Mahasiswa</a></li>
        <li class="active"><?php echo $button ?> Kartu Hasil Studi Mahasiswa</li>
		
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">        
        <div class="box-body">
		
			<!-- Form Kartu Hasil Studi Mahasiswa -->
			<?php
			$ci = get_instance(); // Memanggil object utama
			$ci->load->helper('my_function'); // Memanggil fungsi pada helper dengan nama my_function
			?>
			<!-- Menampilkan Kartu Hasil Studi -->
			<center>
					<legend>KARTU HASIL STUDI</strong></legend>
					<table>
					   <tr>
							<td><strong>NIM </strong></td><td> : <?php echo $mhs_nim; ?></td>
					   </tr>
					   <tr>
							<td><strong>Nama</strong></td><td> :  <?php echo $mhs_nama; ?></td>
					   </tr>
					   <tr>
							<td><strong>Program Studi</strong></td><td> :  <?php echo $mhs_prodi; ?></td>
					   </tr>
					   <tr>
							<td><strong>Tahun akademik (semester)</strong></td><td>&nbsp;:  <?php echo $thn_akad; ?></td>
					   </tr>
					</table>
					<br />
					<table  class="table table-bordered table table-striped">
						<tr>
							<td>NO</td>
							<td>KODE</td>
							<td>MATAKULIAH</td>
							<td>SKS</td>
							<td>NILAI</td> 
							<td>SKOR</td>
						</tr>
						<?php
							$no   	=	0; // Nomor urut dalam menampilkan data 
							$jSks 	=	0; // Jumlah SKS awal yaitu 0
							$jSkor	=	0; // Jumlah Skor awal yaitu 0
						
						// Menampilkan data KHS
						foreach ($mhs_data as $row){  
						 $no++;	
						?>
						   <tr>
								<td> <?php echo $no; ?></td>
								<td> <?php echo $row->kode_matakuliah; ?></td>
								<td> <?php echo $row->nama_matakuliah; ?></td>
								<td align="right"> <?php echo $row->sks; ?></td>
								<td align="center"> <?php echo $row->nilai; ?></td>
								<td align="right"> <?php echo skorNilai($row->nilai,$row->sks); ?></td>
								<?php
								$jSks+=$row->sks;
								$jSkor+=skorNilai($row->nilai,$row->sks);
								?>
						   </tr>  
						<?php
						}
						?>
						<tr>
								<td colspan="3">Jumlah </td> 
								<td align="right"> <?php echo $jSks; ?></td>
								<td>&nbsp;</td>
								<td align="right"> <?php echo $jSkor; ?></td>
						</tr>
					</table>
						Indeks Prestasi :  <?php echo number_format($jSkor/$jSks,2); ?>
			</center>
			 