-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2018 at 08:52 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siakad_uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(15) NOT NULL,
  `nidn` varchar(100) NOT NULL,
  `nama_dosen` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telp` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nidn`, `nama_dosen`, `alamat`, `jenis_kelamin`, `email`, `telp`, `photo`) VALUES
(1, '0620066031', 'Badiyanto', 'Jl. Raya Janti No. 143 Karangjambe, Yogyakarta', 'laki-laki', 'badi@akakom.ac.id', '-', '0620066031.jpg'),
(2, '0512038101', 'Yosef Murya', 'Gondangan RT.002 RW.044 Sardonoharjo Ngaglik Sleman Yogyakarta', 'laki-laki', 'yosefmurya@gmail.com', '08562555665', '0512038101.jpg'),
(4, '0512345678', 'Daru Dita Wideatni', 'Gondangan No. 48 Sardonoharjo Ngaglik Sleman', 'perempuan', 'darudita@gmail.com', '08567891011', '0512345678.jpg'),
(6, '0612345678', 'Arif Riyadi', 'Jl. Bantul no 13 Yogyakarta', 'laki-laki', 'arifriyadi@ugm.ac.id', '08123456789', '0612345678.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasilitas` int(15) NOT NULL,
  `nama_fasilitas` varchar(100) NOT NULL,
  `icon_fasilitas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `nama_fasilitas`, `icon_fasilitas`) VALUES
(1, 'Perpustakaan Yang Lengkap', 'fa fa-book'),
(3, 'Dosen Yang Berkompeten', 'fa fa-user'),
(4, 'Laboratorium Komputer', 'fa fa-desktop'),
(5, 'Ruang Kuliah Yang Nyaman', 'fa fa-institution');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id_gallery` int(15) NOT NULL,
  `judul_gallery` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `aktif` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `judul_gallery`, `gambar`, `aktif`) VALUES
(1, 'Mahasiswa Belajar Pemrograman Mobile Dengan Android Studio', 'Mahasiswa-Belajar-Pemrograman-Mobile-Dengan-Android-Studio.jpg', 'Y'),
(2, 'Ruang Kelas di Universitas Langit Inspirasi', 'Ruang-Kelas-di-Universitas-Langit-Inspirasi.jpg', 'Y'),
(3, 'Lingkungan Kampus Yang Humanis', 'Lingkungan-Kampus-Yang-Humanis.jpg', 'Y'),
(4, 'Setiap Sudut Kampus Asyik Untuk Belajar', 'Setiap-Sudut-Kampus-Asyik-Untuk-Belajar.jpg', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `identitas`
--

CREATE TABLE `identitas` (
  `id_identitas` int(11) NOT NULL,
  `nama_pemilik` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `judul_website` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `url` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `meta_deskripsi` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `meta_keyword` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `alamat` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `telp` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `facebook` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `twitter` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `twitter_widget` text COLLATE latin1_general_ci NOT NULL,
  `google_map` text COLLATE latin1_general_ci NOT NULL,
  `favicon` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `identitas`
--

INSERT INTO `identitas` (`id_identitas`, `nama_pemilik`, `judul_website`, `url`, `meta_deskripsi`, `meta_keyword`, `alamat`, `email`, `telp`, `facebook`, `twitter`, `twitter_widget`, `google_map`, `favicon`) VALUES
(2, 'Langit Inspirasi', 'Universitas Langit Inspirasi', 'langitinspirasi.co.id', 'Penerbit Buku, Penerbit Buku Komputer', 'Penerbit Buku, Penerbit Buku Komputer', 'Gondangan RT.002 RW.044 Sardonoharjo Ngaglik Sleman Yogyakarta', 'admin@langitinspirasi.co.id', '08562555665', 'facebook.com/langit.inspirasi', 'twitter.com/langit.inspirasi', '-', '-', 'CV-Langit-Inspirasi.png');

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id_informasi` int(15) NOT NULL,
  `id_kategori` int(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `judul_informasi` varchar(100) NOT NULL,
  `judul_seo` varchar(100) NOT NULL,
  `isi_informasi` text NOT NULL,
  `tanggal` date NOT NULL,
  `hari` varchar(25) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `aktif` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id_informasi`, `id_kategori`, `username`, `judul_informasi`, `judul_seo`, `isi_informasi`, `tanggal`, `hari`, `gambar`, `aktif`) VALUES
(1, 8, 'admin', 'Kampus Memberikan Tempat Belajar Yang Nyaman', 'kampus-memberikan-tempat-belajar-yang-nyaman', 'Universitas Langit Inspirasi memberikan ruang atau tempat bagi mahasiswa-mahasiswi untuk melakukan riset atau belajar di ruang kelas atau laboratorium komputer. Hal ini diharapkan agar para mahasiswa dapat mengembangkan ilmu pengetahuannya dalam bidang komputer dan pemrograman.', '2018-04-20', 'Jumat', '01.jpg', 'Y'),
(2, 9, 'admin', 'Jadwal Input KRS Semester Ganjil 2017/2018', 'jadwal-input-krs-semester-ganjil-20172018', 'Bagi seluruh mahasiswa diumumkan bahwa KRS Semester Ganjil 2017/2018 dimulai pada tanggal 01 Mei 2018 sampai dengan 15 Mei 2018, dengan syarat sudah membayar SPP tetap.', '2018-04-25', 'Rabu', 'Jadwal-Input-KRS-Semester-Ganjil-20172018.jpg', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(10) NOT NULL,
  `kode_jurusan` varchar(10) NOT NULL,
  `nama_jurusan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `kode_jurusan`, `nama_jurusan`) VALUES
(1, 'IK', 'Ilmu Komputer'),
(2, 'ST', 'Sains dan Teknologi'),
(3, 'ES', 'Ekonomi dan Sosial');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(15) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL,
  `kategori_seo` varchar(100) NOT NULL,
  `aktif` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `kategori_seo`, `aktif`) VALUES
(8, 'Informasi Kampus', 'informasi-kampus', 'Y'),
(9, 'Pengumuman Kampus', 'pengumuman-kampus', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(15) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telp` varchar(100) NOT NULL,
  `pesan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `nama`, `email`, `telp`, `pesan`) VALUES
(0, 'Yosef Murya', 'yosefmurya@gmail.com', '08562555665', 'Mohon informasi PMB untuk tahun 2019 dimulai kapan ya??');

-- --------------------------------------------------------

--
-- Table structure for table `krs`
--

CREATE TABLE `krs` (
  `id_krs` int(10) NOT NULL,
  `id_thn_akad` int(10) NOT NULL,
  `nim` char(15) NOT NULL,
  `kode_matakuliah` varchar(10) NOT NULL,
  `nilai` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `krs`
--

INSERT INTO `krs` (`id_krs`, `id_thn_akad`, `nim`, `kode_matakuliah`, `nilai`) VALUES
(1, 14, '2017010012', 'FKB3001', 'A'),
(2, 14, '2017010012', 'FKB3003', 'B'),
(3, 14, '2017010012', 'FKB4012', 'B'),
(4, 14, '2017010012', 'UPK200X', 'B'),
(5, 14, '2017010003', 'FKB3001', 'A'),
(6, 14, '2017010003', 'FKB3003', 'A'),
(7, 14, '2017010003', 'FKB4004', ''),
(8, 14, '2017010003', 'FKB4012', 'B'),
(9, 14, '2017010003', 'PKK1003', '');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` char(15) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `nama_panggilan` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `agama` varchar(10) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `id_prodi` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama_lengkap`, `nama_panggilan`, `alamat`, `email`, `telp`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `photo`, `id_prodi`) VALUES
('2017010001', 'Daru Dita', 'Dita', 'Badran JT I/884 Yogyakarta', 'dita@gmail.com', '08562555665', 'Yogyakarta', '1982-09-18', 'P', 'Katholik', '20170100012.jpg', 2),
('2017010002', 'Yosef Murya Kusuma Ardhana', 'Yosef', 'Jl. Kaliurang KM 10 Yogyakarta', 'yosefmurya@gmail.com', '08562943232', 'Surabaya', '1981-03-12', 'L', 'Katholik', '', 1),
('2017010003', 'Badiyanto', 'Badi', 'Bantul', 'badi@akakom.ac.id', '081223232323', 'Pati', '1965-05-30', 'L', 'Islam', '', 2),
('2017010004', 'Eka Bayu Purnama', 'Eka', 'Semarang', 'eka@yahoo.com', '0816343434', 'Semarang', '1970-01-01', 'L', 'Protestan', '', 1),
('2017010005', 'Ida Bagus Perdana', 'Ida', 'Denpasar', 'idab@gmail.com', '081329443434', 'Denpasar', '1970-01-15', 'L', 'Hindu', '', 2),
('2017010012', 'Veronica Daru Dita Widieatni', 'Dita', 'Gondangan No. 48 Sardonoharjo Ngaglik Sleman', 'darudita@gmail.com', '08562943232', 'Yogyakarta', '1982-09-18', 'P', 'Katholik', '2017010012.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `kode_matakuliah` varchar(10) NOT NULL,
  `nama_matakuliah` varchar(100) NOT NULL,
  `sks` int(5) NOT NULL,
  `semester` int(10) NOT NULL,
  `jenis` enum('U','W','P') NOT NULL,
  `id_prodi` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`kode_matakuliah`, `nama_matakuliah`, `sks`, `semester`, `jenis`, `id_prodi`) VALUES
('FKB1001', 'SISTEM DIGITAL', 3, 1, 'W', 2),
('FKB3001', 'PEMROGRAMAN WEB', 3, 3, 'U', 1),
('FKB3002', 'PEMROGRAMAN JAVA DESKTOP', 3, 3, 'W', 2),
('FKB3003', 'PEMROGRAMAN FRAMEWORK', 3, 3, 'W', 1),
('FKB4004', 'JARINGAN KOMPUTER', 3, 3, 'W', 2),
('FKB4012', 'PEMROGRAMAN WEB LANJUT', 3, 3, 'P', 2),
('FKK1001', 'KALKULUS 1', 3, 1, 'W', 2),
('FKK1002', 'ALGORITMA PEMROGRAMAN', 3, 1, 'W', 2),
('FPB1001', 'PRAKTIKUM ALGORITMA PEMROGRAMAN', 1, 1, 'W', 2),
('PKK1003', 'SISTEM BASIS DATA', 3, 3, 'W', 1),
('UKK1004', 'PENGANTAR TEKNOLOGI INFORMASI', 2, 1, 'U', 8),
('UPK1002', 'FISIKA DASAR', 3, 1, 'U', 1),
('UPK1006', 'PANCASILA', 2, 1, 'U', 2),
('UPK1010', 'BAHASA INGGRIS 1', 2, 1, 'U', 2),
('UPK200X', 'PENDIDIKAN AGAMA', 2, 2, 'U', 1);

-- --------------------------------------------------------

--
-- Table structure for table `materi_perkuliahan`
--

CREATE TABLE `materi_perkuliahan` (
  `id_materiperkuliahan` int(15) NOT NULL,
  `judul_materiperkuliahan` varchar(100) NOT NULL,
  `isi_materiperkuliahan` varchar(255) NOT NULL,
  `icon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materi_perkuliahan`
--

INSERT INTO `materi_perkuliahan` (`id_materiperkuliahan`, `judul_materiperkuliahan`, `isi_materiperkuliahan`, `icon`) VALUES
(1, 'Character Building', 'Pembentukan karakter mahasiswa agar memiliki watak, sifat kejiwaan, akhlak (budi pekerti), insan manusia (masyarakat) yang baik', 'fa fa-industry'),
(2, 'Religiusitas', 'Pendalaman akan makna agama dan beragama, mendeteksi dinamika Wahyu Tuhan dan iman, dan memahami relasi dengan Tuhan dan sesama.', 'fa fa-moon-o'),
(3, 'Pemrograman Web', 'Pengetahuan dan praktikum pembuatan website dinamis dengan bahasa pemrogaman HTML, PHP dan database MySQL', 'fa fa-desktop'),
(4, 'Pemrograman Berbasis Mobile', 'Pengetahuan dan praktikum pembuatan aplikasi mobile menggunakan Android Studio yang menggunakan bahasa pemrograman java dan XML', 'fa fa-mobile'),
(5, 'Pemrograman Web Mobile', 'Pengetahuan dan praktikum pembuatan web mobile dinamis dengan IONIC Framework, SQLite dan MySQL', 'fa fa-tablet'),
(6, 'Pemrograman Web Lanjut', 'Pengetahuan dan praktikum pembuatan website dinamis dengan Framework Langit Inspirasi dengan konsep MVC', 'fa fa-laptop');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `main_menu` varchar(11) NOT NULL,
  `level` enum('admin','user') NOT NULL DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `link`, `icon`, `main_menu`, `level`) VALUES
(0, 'Menu Utama', '#', '', '0', 'admin'),
(1, 'Jurusan', 'jurusan', 'fa fa-university', '12', 'admin'),
(2, 'Program Studi', 'prodi', 'fa fa-graduation-cap', '12', 'admin'),
(3, 'Matakuliah', 'Matakuliah', 'fa fa-bookmark-o', '12', 'user'),
(4, 'Mahasiswa', 'mahasiswa', 'fa fa-users', '12', 'user'),
(5, 'Tahun Akademik', 'Thn_akad_semester', 'fa fa-ellipsis-v', '12', 'admin'),
(6, 'KRS', 'krs', 'fa fa-edit', '12', 'user'),
(7, 'Input Nilai', 'nilai/inputNilai', 'fa fa-sort-numeric-asc', '12', 'admin'),
(8, 'KHS', 'nilai', 'fa fa-file-text-o', '12', 'user'),
(9, 'Cetak Transkrip', 'nilai/buatTranskrip', 'fa fa-pencil-square-o', '12', 'user'),
(10, 'User', 'users', 'fa fa-user', '13', 'user'),
(11, 'Menu', 'menu', 'fa fa-eye', '13', 'admin'),
(12, 'SIAKAD', '#', 'fa fa-graduation-cap', '0', 'admin'),
(13, 'SETING', '#', 'fa fa-gear', '0', 'admin'),
(14, 'INFO KAMPUS', '#', 'fa fa-globe', '0', 'admin'),
(15, 'Identitas', 'identitas', 'fa fa-vcard-o', '14', 'admin'),
(16, 'Kategori', 'kategori', 'fa fa-server', '14', 'admin'),
(17, 'Informasi Kampus', 'informasi', 'fa fa-newspaper-o', '14', 'admin'),
(18, 'Dosen', 'dosen', 'fa fa-group', '12', 'admin'),
(19, 'Tentang Kampus', 'tentang_kampus', 'fa fa-info', '14', 'admin'),
(20, 'Fasilitas', 'fasilitas', 'fa fa-suitcase', '14', 'admin'),
(21, 'Materi Perkuliahan', 'materi_perkuliahan', 'fa fa-file-code-o', '14', 'admin'),
(22, 'Gallery', 'gallery', 'fa fa-photo', '14', 'admin'),
(23, 'Kontak', 'kontak', 'fa fa-volume-control-phone', '14', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` int(10) NOT NULL,
  `kode_prodi` varchar(10) NOT NULL,
  `nama_prodi` varchar(30) NOT NULL,
  `id_jurusan` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `kode_prodi`, `nama_prodi`, `id_jurusan`) VALUES
(1, 'SI', 'Sistem Informasi', 1),
(2, 'TI', 'Teknologi Informasi', 1),
(6, 'IK', 'Ilmu Komunikasi', 3),
(7, 'TKJ', 'Teknik Komputer Jaringan', 1),
(8, 'KA', 'Kompeterisasi Akuntasi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tentang_kampus`
--

CREATE TABLE `tentang_kampus` (
  `id_tentangkampus` int(15) NOT NULL,
  `judul_tentangkampus` varchar(100) NOT NULL,
  `isi_tentangkampus` varchar(255) NOT NULL,
  `keterangan_tambahan` varchar(255) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `aktif` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tentang_kampus`
--

INSERT INTO `tentang_kampus` (`id_tentangkampus`, `judul_tentangkampus`, `isi_tentangkampus`, `keterangan_tambahan`, `gambar`, `aktif`) VALUES
(3, 'Kampus Berbasis Teknologi Modern', 'Universitas Langit Inspirasi merupakan kampus berbasis teknologi modern yang telah mendapatkan berbagai awards baik Internasional maupun nasional.', 'Saat ini Universitas Langit Inspirasi telah menggunakan kurikulum pelajarannya dari Google, sehingga para lulusan dapat bekerja di dalam negeri maupun luar negeri.', 'Kampus-Berbasis-Teknologi-Modern.jpg', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `thn_akad_semester`
--

CREATE TABLE `thn_akad_semester` (
  `id_thn_akad` int(10) NOT NULL,
  `thn_akad` varchar(9) NOT NULL,
  `semester` varchar(5) NOT NULL,
  `aktif` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thn_akad_semester`
--

INSERT INTO `thn_akad_semester` (`id_thn_akad`, `thn_akad`, `semester`, `aktif`) VALUES
(1, '2014/2015', '1', 'N'),
(2, '2014/2015', '2', 'N'),
(3, '2015/2016', '1', 'N'),
(4, '2015/2016', '2', 'N'),
(5, '2016/2017', '1', 'N'),
(7, '2016/2017', '2', 'N'),
(8, '2018/2019', '1', 'N'),
(9, '2018/2019', '2', 'N'),
(13, '2019/2020', '1', 'N'),
(14, '2019/2020', '2', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `transkrip`
--

CREATE TABLE `transkrip` (
  `id_transkrip` int(10) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `kode_matakuliah` varchar(10) NOT NULL,
  `nilai` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transkrip`
--

INSERT INTO `transkrip` (`id_transkrip`, `nim`, `kode_matakuliah`, `nilai`) VALUES
(0, '2017010012', 'FKB3001', 'A'),
(0, '2017010012', 'FKB3003', 'B'),
(0, '2017010012', 'FKB4012', 'B'),
(0, '2017010012', 'UPK200X', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `level` enum('admin','user') NOT NULL DEFAULT 'user',
  `blokir` enum('N','Y') NOT NULL DEFAULT 'N',
  `id_sessions` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `email`, `level`, `blokir`, `id_sessions`) VALUES
('2017010001', 'e10adc3949ba59abbe56e057f20f883e', 'bima@gmail.com', 'user', 'N', 'e10adc3949ba59abbe56e057f20f883e'),
('2017010012', 'fcea920f7412b5da7be0cf42b8c93759', '', 'user', 'N', 'fcea920f7412b5da7be0cf42b8c93759'),
('admin', '21232f297a57a5a743894a0e4a801fc3', 'yosefmurya@gmail.com', 'admin', 'N', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `krs`
--
ALTER TABLE `krs`
  ADD PRIMARY KEY (`id_krs`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `krs`
--
ALTER TABLE `krs`
  MODIFY `id_krs` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
