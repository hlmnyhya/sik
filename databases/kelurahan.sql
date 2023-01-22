-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 03, 2021 at 02:34 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kelurahan2`
--

-- --------------------------------------------------------

--
-- Table structure for table `imb`
--

CREATE TABLE `imb` (
  `id` int(11) NOT NULL,
  `pemohon_id` int(11) NOT NULL,
  `lokasi` text NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `jenis_bangunan` varchar(50) NOT NULL,
  `jumlah_lantai` char(2) NOT NULL,
  `ukuran` varchar(50) NOT NULL,
  `kelengkapan_administrasi` enum('Lengkap','Belum Lengkap') NOT NULL,
  `ket` text NOT NULL,
  `tanggal` date NOT NULL,
  `file` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imb`
--

INSERT INTO `imb` (`id`, `pemohon_id`, `lokasi`, `kelurahan`, `kecamatan`, `jenis_bangunan`, `jumlah_lantai`, `ukuran`, `kelengkapan_administrasi`, `ket`, `tanggal`, `file`) VALUES
(1, 2, '<p>\n	ajksdadjkskjasdjk</p>\n', 'asjkd', 'akdsj', 'asjkd', 'ak', 'jkasd', '', '<p>\n	asdkj</p>\n', '2020-08-28', 'e6909-screenshot-2021-10-31-144544.png');

-- --------------------------------------------------------

--
-- Table structure for table `kelahiran`
--

CREATE TABLE `kelahiran` (
  `id` int(11) NOT NULL,
  `ayah_id` int(11) NOT NULL,
  `ibu_id` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama_lengkap_bayi` varchar(100) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `tempat_kepengurusan` enum('Rumah Sakit','Puskesmas','Bidan','Kelurahan','Dinas Kependudukan Dan Catatan Sipil') NOT NULL,
  `tempat_dilahirkan` enum('Rumah Sakit','Puskesmas','Bidan','Poliklinik','Rumah','Lainnya') NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jam_lahir` time NOT NULL,
  `jenis_kelahiran` enum('Tunggal','Kembar 2','Kembar 3','Kembar 4','Kembar Banyak') NOT NULL,
  `kelahiran_ke` char(1) NOT NULL,
  `penolong_kelahiran` enum('Dokter','Bidan','Dukun','Lainnya') NOT NULL,
  `berat_bayi` char(2) NOT NULL,
  `panjang_bayi` char(3) NOT NULL,
  `file` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelahiran`
--

INSERT INTO `kelahiran` (`id`, `ayah_id`, `ibu_id`, `nik`, `nama_lengkap_bayi`, `jenis_kelamin`, `tempat_kepengurusan`, `tempat_dilahirkan`, `tempat_lahir`, `tanggal_lahir`, `jam_lahir`, `jenis_kelahiran`, `kelahiran_ke`, `penolong_kelahiran`, `berat_bayi`, `panjang_bayi`, `file`) VALUES
(1, 1, 2, '6371035308750004', 'asdjk', 'Perempuan', 'Rumah Sakit', 'Rumah Sakit', 'Banjarmasin', '2019-10-31', '00:00:20', 'Kembar 2', '1', 'Dokter', '10', '20', '3fdf3-dokumenserahterima.pdf'),
(2, 2, 1, '2873211', 'zzxczczx', 'Perempuan', 'Rumah Sakit', 'Rumah Sakit', 'Banjarmasin', '2019-10-31', '00:00:20', 'Kembar 2', '1', 'Dokter', '10', '20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kematian`
--

CREATE TABLE `kematian` (
  `id` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal_kematian` date NOT NULL,
  `jam_kematian` time NOT NULL,
  `sebab_kematian` enum('Sakit biasa/tua','Wabah penyakit','Kecelakaan','Kriminalitas','Bunuh Diri','Lainnya') NOT NULL,
  `tempat_kematian` varchar(50) NOT NULL,
  `yang_menerangkan` enum('Dokter','Tenaga Kesehatan','Kepolisian','Lainnya') NOT NULL,
  `nama_pelapor` varchar(100) NOT NULL,
  `file` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kematian`
--

INSERT INTO `kematian` (`id`, `nik`, `nama`, `tanggal_kematian`, `jam_kematian`, `sebab_kematian`, `tempat_kematian`, `yang_menerangkan`, `nama_pelapor`, `file`) VALUES
(1, '89', 'jasd', '2020-02-19', '00:00:20', 'Wabah penyakit', '-', 'Tenaga Kesehatan', 'em', NULL),
(2, '9889', 'ashj', '2020-08-31', '00:00:01', 'Sakit biasa/tua', '-', 'Dokter', 'CIE', 'ca207-thumb.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `nip` varchar(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `email` varchar(40) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nip`, `nama`, `jenis_kelamin`, `no_hp`, `email`, `alamat`) VALUES
(1, '91822138', 'asdkja', 'Laki-Laki', '123189', 'saidrpl3@gmail.com', 'asdk');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `id` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `alamat` text NOT NULL,
  `agama` enum('Islam','Kristen','Hindu','Budha') NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `status` enum('Hidup','Meninggal') NOT NULL DEFAULT 'Hidup',
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`id`, `nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `agama`, `pekerjaan`, `status`, `username`, `password`) VALUES
(1, '12312', 'said', 'banjarmasin', '2020-02-07', 'Laki-Laki', 'asdkasd', 'Islam', '-', 'Hidup', '', ''),
(2, '123123', 'adkjasd', 'aksdkasj', '2020-01-01', 'Laki-Laki', 'adadadasdad', 'Hindu', 'asdadad', 'Hidup', '123', '202cb962ac59075b964b07152d234b70'),
(3, 'akjskajks', 'nono', 'pelaihari', '2020-09-16', 'Laki-Laki', '', 'Islam', 'buruj', 'Hidup', '123', '202cb962ac59075b964b07152d234b70'),
(4, '2y3823628', 'tika', 'bjm', '2020-09-29', 'Perempuan', '', 'Islam', 'buruj', 'Hidup', 'tika', '123456'),
(5, 'shdjhahd', 'aji', 'bjm', '2020-09-15', 'Laki-Laki', '', 'Islam', 'bs', 'Hidup', 'aji', '202cb962ac59075b964b07152d234b70'),
(7, '6301032309980002', 'Rahmad Hidayat', 'Pelaihari', '1998-09-23', 'Laki-Laki', 'Jl. Pintu Air RT 24 RW 07 Kel Angsau Kec Pelaihari', 'Islam', 'Wiraswasta', 'Hidup', '123', '123'),
(8, '6301032309980012', 'Rahmad Hidayat', 'Pelaihari', '1998-09-23', 'Laki-Laki', 'Jl. Pintu Air RT 24 RW 07 Kel Angsau Kec Pelaihari', 'Islam', 'Wiraswasta', 'Hidup', 'mantap', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `pernikahan`
--

CREATE TABLE `pernikahan` (
  `id` int(11) NOT NULL,
  `suami_id` int(11) NOT NULL,
  `istri_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` text NOT NULL,
  `file` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pernikahan`
--

INSERT INTO `pernikahan` (`id`, `suami_id`, `istri_id`, `tanggal`, `keterangan`, `file`) VALUES
(1, 1, 2, '2020-02-29', 'sdaskjd', '5ea12-thumb.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rab`
--

CREATE TABLE `rab` (
  `id` int(11) NOT NULL,
  `bidang` varchar(50) NOT NULL,
  `kegiatan` varchar(50) NOT NULL,
  `waktu_pelaksanaan` varchar(50) NOT NULL,
  `sumber_dana` varchar(50) NOT NULL,
  `output` varchar(50) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `jenis_belanja` enum('Belanja Pegawai','Belanja Barang dan Jasa') NOT NULL,
  `kategori_uraian` varchar(50) NOT NULL,
  `isi_uraian` varchar(100) NOT NULL,
  `volume` char(3) NOT NULL,
  `tipe_volume` char(10) NOT NULL,
  `harga_satuan` varchar(50) NOT NULL,
  `jumlah` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `file` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rab`
--

INSERT INTO `rab` (`id`, `bidang`, `kegiatan`, `waktu_pelaksanaan`, `sumber_dana`, `output`, `kode`, `jenis_belanja`, `kategori_uraian`, `isi_uraian`, `volume`, `tipe_volume`, `harga_satuan`, `jumlah`, `tanggal`, `file`) VALUES
(1, 'Bidang Penyelenggaran Pemerintah Desa', 'Pembayaran Penghasilan Tetap dan Tunjangan', '1 tahun', 'ADD, PAD', 'Meningkatnya Kesejahteraan Kades dan Perangkat Des', '5.1.1.01', 'Belanja Pegawai', 'Penghasilan Tetap Kepala Desa dan Perangkat Desa', 'Kamituwo Dukuh 1', '12', 'Bln', '1306000', '15672000', '2020-05-08', '64962-ivip45197114.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tidak_mampu`
--

CREATE TABLE `tidak_mampu` (
  `id` int(11) NOT NULL,
  `pemohon_id` int(11) NOT NULL,
  `walipemohon_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `file` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tidak_mampu`
--

INSERT INTO `tidak_mampu` (`id`, `pemohon_id`, `walipemohon_id`, `tanggal`, `file`) VALUES
(1, 5, 5, '2021-11-03', '3142b-thumb.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tidak_memiliki_rumah`
--

CREATE TABLE `tidak_memiliki_rumah` (
  `id` int(11) NOT NULL,
  `pemohon_id` int(11) NOT NULL,
  `ket_rt` text NOT NULL,
  `no_surat_pengantar_rt` varchar(20) NOT NULL,
  `keperluan` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `file` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tidak_memiliki_rumah`
--

INSERT INTO `tidak_memiliki_rumah` (`id`, `pemohon_id`, `ket_rt`, `no_surat_pengantar_rt`, `keperluan`, `tanggal`, `file`) VALUES
(1, 5, '<p>\n	dfdfdf</p>\n', 'dfdf', 'dfdfdf', '2021-11-03', '9e808-thumb.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('admin','pimpinan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'pimpinan', 'pimpinan', '90973652b88fe07d05a4304f0a945de8', 'pimpinan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `imb`
--
ALTER TABLE `imb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pemohon_id` (`pemohon_id`);

--
-- Indexes for table `kelahiran`
--
ALTER TABLE `kelahiran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ayah_id` (`ayah_id`),
  ADD KEY `ibu_id` (`ibu_id`),
  ADD KEY `ayah_id_2` (`ayah_id`),
  ADD KEY `ibu_id_2` (`ibu_id`);

--
-- Indexes for table `kematian`
--
ALTER TABLE `kematian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `penduduk_id` (`nama`),
  ADD KEY `penduduk_id_2` (`nama`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pernikahan`
--
ALTER TABLE `pernikahan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `suami_id` (`suami_id`),
  ADD KEY `istri_id` (`istri_id`);

--
-- Indexes for table `rab`
--
ALTER TABLE `rab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tidak_mampu`
--
ALTER TABLE `tidak_mampu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pemohon_id` (`pemohon_id`),
  ADD KEY `walipemohon_id` (`walipemohon_id`);

--
-- Indexes for table `tidak_memiliki_rumah`
--
ALTER TABLE `tidak_memiliki_rumah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pemohon_id` (`pemohon_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `imb`
--
ALTER TABLE `imb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kelahiran`
--
ALTER TABLE `kelahiran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kematian`
--
ALTER TABLE `kematian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pernikahan`
--
ALTER TABLE `pernikahan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rab`
--
ALTER TABLE `rab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tidak_mampu`
--
ALTER TABLE `tidak_mampu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tidak_memiliki_rumah`
--
ALTER TABLE `tidak_memiliki_rumah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `imb`
--
ALTER TABLE `imb`
  ADD CONSTRAINT `imb_ibfk_1` FOREIGN KEY (`pemohon_id`) REFERENCES `penduduk` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `kelahiran`
--
ALTER TABLE `kelahiran`
  ADD CONSTRAINT `kelahiran_ibfk_1` FOREIGN KEY (`ayah_id`) REFERENCES `penduduk` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `kelahiran_ibfk_2` FOREIGN KEY (`ibu_id`) REFERENCES `penduduk` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `pernikahan`
--
ALTER TABLE `pernikahan`
  ADD CONSTRAINT `pernikahan_ibfk_1` FOREIGN KEY (`suami_id`) REFERENCES `penduduk` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `pernikahan_ibfk_2` FOREIGN KEY (`istri_id`) REFERENCES `penduduk` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `tidak_mampu`
--
ALTER TABLE `tidak_mampu`
  ADD CONSTRAINT `tidak_mampu_ibfk_1` FOREIGN KEY (`pemohon_id`) REFERENCES `penduduk` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `tidak_memiliki_rumah`
--
ALTER TABLE `tidak_memiliki_rumah`
  ADD CONSTRAINT `tidak_memiliki_rumah_ibfk_1` FOREIGN KEY (`pemohon_id`) REFERENCES `penduduk` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
