-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2017 at 02:54 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppsb`
--

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `kd_kelas` char(4) NOT NULL,
  `nm_kelas` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`kd_kelas`, `nm_kelas`) VALUES
('K001', 'A'),
('K002', 'B'),
('K003', 'PG');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `no_pendaftaran` char(6) NOT NULL,
  `kd_kelas` char(10) NOT NULL,
  `nik` varchar(60) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jkelamin` enum('P','L') NOT NULL,
  `agama` enum('Islam','Kristen','Katolik','Hindu','Budha','Lainnya') NOT NULL,
  `gdarah` enum('AB','A','B','O') NOT NULL,
  `telepon` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tmpt_lahir` varchar(100) NOT NULL,
  `ayah_nama` varchar(100) NOT NULL,
  `ayah_pekerjaan` varchar(100) NOT NULL,
  `ibu_nama` varchar(100) NOT NULL,
  `ibu_pekerjaan` varchar(100) NOT NULL,
  `penghasilan` varchar(100) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `status` enum('Daftar','Diterima','Cadangan','Ditolak') NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`no_pendaftaran`, `kd_kelas`, `nik`, `nama`, `jkelamin`, `agama`, `gdarah`, `telepon`, `email`, `alamat`, `tgl_lahir`, `tmpt_lahir`, `ayah_nama`, `ayah_pekerjaan`, `ibu_nama`, `ibu_pekerjaan`, `penghasilan`, `tgl_daftar`, `status`, `foto`) VALUES
('170035', 'K001', '12345678', 'Isham Faris Darari', 'L', 'Islam', 'B', '08131921685', 'isham.faris@yahoo.co.id', 'BDP jatisari jatiasih bekasi', '1997-07-23', 'Jakarta', 'Agus Royadi', 'Karyawan', 'Nur Diana', 'Lainnya', ' > 4000000', '2017-10-09', 'Diterima', '170035.wila.jpg'),
('170036', 'K001', '123', 'tes', 'P', 'Islam', 'A', 'tes', 'tes', 'tes', '1997-01-01', 'tes', 'tes', 'Pegawai Negri Sipil (PNS)', 'tes', 'Pegawai Negri Sipil (PNS)', '0 - 1000000', '2017-10-10', 'Ditolak', '170036.kresna.jpg'),
('170037', 'K001', '123', 'sam', 'P', 'Islam', 'A', 'asd', 'asd', 'asd', '1997-01-01', 'asd', 'ads', 'Pegawai Negri Sipil (PNS)', 'asd', 'Pegawai Negri Sipil (PNS)', '0 - 1000000', '2017-10-10', 'Diterima', ''),
('170038', 'K002', '12345678', 'Lia Fitriani', 'P', 'Islam', 'B', '081291384', 'tes', 'tes', '2012-03-03', 'tes', 'tes', 'Pegawai Negri Sipil (PNS)', 'asd', 'Lainnya', '0 - 1000000', '2017-10-12', 'Diterima', '170038.fotosiswa.png'),
('170039', 'K001', 'coba', 'coba', 'P', 'Islam', 'A', 'coba', 'coba', 'coba', '1997-01-01', 'coba', 'coba', 'Pegawai Negri Sipil (PNS)', 'coba', 'Pegawai Negri Sipil (PNS)', '0 - 1000000', '2017-10-12', 'Daftar', '170039.fotosiswa.png'),
('170040', 'K002', 'coba2', 'coba2', 'P', 'Islam', 'A', 'coba2', 'coba2', 'coba2', '1997-01-01', 'coba2', 'coba2', 'Pegawai Negri Sipil (PNS)', 'coba2', 'Pegawai Negri Sipil (PNS)', '0 - 1000000', '2017-10-12', 'Daftar', '170040.fotosiswa.png'),
('170041', 'K001', 'coba3', 'coba3', 'P', 'Islam', 'A', 'coba3', 'coba3', 'coba3', '1997-01-01', 'coba3', 'coba3', 'Pegawai Negri Sipil (PNS)', 'coba3', 'Pegawai Negri Sipil (PNS)', '0 - 1000000', '2017-10-12', 'Daftar', '170041.fotosiswa.png'),
('170042', 'K001', 'coba4', 'coba4', 'L', 'Islam', 'B', 'coba4', 'coba4', 'coba4', '1997-01-01', 'coba4', 'coba4', 'Pegawai Negri Sipil (PNS)', 'coba4', 'Pegawai Negri Sipil (PNS)', '0 - 1000000', '2017-10-12', 'Daftar', '170042.fotosiswa.png'),
('170043', 'K002', 'coba5', 'coba5', 'L', 'Islam', 'AB', 'coba5', 'coba5', 'coba5', '0000-00-00', 'coba5', 'coba5', 'Pegawai Negri Sipil (PNS)', 'coba5', 'Pegawai Negri Sipil (PNS)', '1000000 - 2500000', '2017-10-12', 'Daftar', ''),
('170044', 'K002', 'coba6', 'coba6', 'P', 'Islam', 'AB', 'coba5', 'coba6', 'coba6', '1997-02-02', 'coba6', 'coba6', 'Pegawai Negri Sipil (PNS)', 'coba6', 'Pegawai Negri Sipil (PNS)', '1000000 - 2500000', '2017-10-12', 'Daftar', '170044.fotosiswa.png'),
('170045', 'K002', '1234', 'Agus', 'L', 'Islam', 'B', 'a', 'a', 'a', '1997-01-01', 'a', 'a', 'Pegawai Negri Sipil (PNS)', 'a', 'Pegawai Negri Sipil (PNS)', '0 - 1000000', '2017-10-12', 'Diterima', '170045.fotosiswa.png'),
('170046', 'K002', '1234', 'Putri', 'P', 'Islam', 'B', 'a', 'a', 'a', '1997-04-01', 'a', 'a', 'Pegawai Negri Sipil (PNS)', 'a', 'Pegawai Negri Sipil (PNS)', '0 - 1000000', '2017-10-12', 'Diterima', '170046.fotosiswa.png'),
('170047', 'K002', '123', 'Fara Farisa ', 'P', 'Islam', 'AB', '0912831', 'asdasd', 'asdasdasd', '2003-05-03', 'asdasd', 'adas', 'Pegawai Negri Sipil (PNS)', 'asdasd', 'Pegawai Negri Sipil (PNS)', '2500000 - 4000000', '2017-10-13', 'Diterima', '170047.fotosiswa.png'),
('170048', 'K003', '123', 'Alviyan Pante Rahmat', 'L', 'Islam', 'O', '0912481125', 'alvianpante@yahoo.com', 'mars', '2006-06-19', 'Alinda', 'asdasd', 'Pegawai Negri Sipil (PNS)', 'asdasd', 'Pegawai Negri Sipil (PNS)', ' > 4000000', '2017-10-16', 'Diterima', '170048.jokes.jpg'),
('170049', 'K003', '123', 'Nitha Tiara', 'P', 'Islam', 'B', 'tes', 'sd', 'd', '2001-01-01', 'd', 'adasd', 'Pegawai Negri Sipil (PNS)', 'asd', 'Pegawai Negri Sipil (PNS)', '0 - 1000000', '2017-10-16', 'Daftar', '170049.jokes.jpg'),
('170050', 'K003', '123', 'Hafiz elgia', 'L', 'Islam', 'B', 'aadsad', 'asdas', 'asdas', '2001-01-01', 'adads', 'asdasd', 'Pegawai Negri Sipil (PNS)', 'asdasd', 'Pegawai Negri Sipil (PNS)', '0 - 1000000', '2017-10-16', 'Diterima', '170050.jokes.jpg'),
('170051', 'K001', '1231', 'ada', 'P', 'Islam', 'A', 'asd', 'asd', 'asd', '2001-01-17', 'asd', 'asd', 'Pegawai Negri Sipil (PNS)', 'ada', 'Pegawai Negri Sipil (PNS)', '0 - 1000000', '2017-10-16', 'Diterima', '170051.jokes.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `no_siswa` char(6) NOT NULL,
  `tahun_angkatan` char(4) NOT NULL,
  `kd_kelas` char(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jkelamin` enum('P','L') NOT NULL,
  `agama` enum('Islam','Kristen','Katolik','Hindu','Budha','Lainnya') NOT NULL,
  `gdarah` enum('AB','A','B','O') NOT NULL,
  `telepon` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tmpt_lahir` varchar(100) NOT NULL,
  `ayah_nama` varchar(100) NOT NULL,
  `ayah_pekerjaan` varchar(100) NOT NULL,
  `ibu_nama` varchar(100) NOT NULL,
  `ibu_pekerjaan` varchar(100) NOT NULL,
  `penghasilan` varchar(100) NOT NULL,
  `tgl_daftar` date DEFAULT NULL,
  `foto` varchar(100) NOT NULL,
  `no_pendaftaran` char(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`no_siswa`, `tahun_angkatan`, `kd_kelas`, `nama`, `jkelamin`, `agama`, `gdarah`, `telepon`, `email`, `alamat`, `tgl_lahir`, `tmpt_lahir`, `ayah_nama`, `ayah_pekerjaan`, `ibu_nama`, `ibu_pekerjaan`, `penghasilan`, `tgl_daftar`, `foto`, `no_pendaftaran`) VALUES
('170003', '2017', 'K001', 'Isham Faris Darari', 'L', 'Islam', 'B', '08131921685', 'isham.faris@yahoo.co.id', 'BDP jatisari jatiasih bekasi', '2012-02-17', 'Jakarta', 'Agus Royadi', 'Karyawan', 'Nur Diana', 'Pegawai Negri Sipil (PNS)', '1000000 - 2500000', NULL, '170035.wila.jpg', '170035'),
('170007', '2017', 'K002', 'Lia Fitriani Sabila', 'P', 'Islam', 'B', '081291384', 'tes', 'tes', '2012-02-03', 'tes', 'tes', 'Pegawai Negri Sipil (PNS)', 'asd', 'Karyawan', '2500000 - 4000000', NULL, '170038.fotosiswa.png', '170038'),
('170008', '2017', 'K002', 'Agus', 'L', 'Islam', 'B', 'a', 'a', 'a', '1997-01-01', 'a', 'a', 'Pegawai Negri Sipil (PNS)', 'a', 'Pegawai Negri Sipil (PNS)', '0 - 1000000', NULL, '170045.fotosiswa.png', '170045'),
('170010', '2017', 'K002', 'Fara Farisa ', 'P', 'Islam', 'AB', '0912831', 'asdasd', 'asdasdasd', '2003-05-03', 'asdasd', 'adas', 'Pegawai Negri Sipil (PNS)', 'asdasd', 'Pegawai Negri Sipil (PNS)', '2500000 - 4000000', NULL, '170047.fotosiswa.png', '170047'),
('170011', '2017', 'K001', 'Adam Hawarin', 'L', 'Islam', 'A', 'asd', 'asd', 'asd', '2001-01-17', 'asd', 'asd', 'Pegawai Negri Sipil (PNS)', 'ada', 'Pegawai Negri Sipil (PNS)', '2500000 - 4000000', NULL, '170051.jokes.jpg', '170051'),
('170012', '2017', 'K003', 'Alviyan Rahmat', 'L', 'Islam', 'O', '0912481125', 'alvianpante@yahoo.com', 'mars', '2006-02-19', 'Alinda', 'asdasd', 'Pegawai Negri Sipil (PNS)', 'asdasd', 'Pegawai Negri Sipil (PNS)', '1000000 - 2500000', NULL, '170048.jokes.jpg', '170048'),
('170013', '2017', 'K001', 'Abdul Qohar', 'L', 'Islam', 'A', '085715086218', 'tes.aja@yahoo.com', 'Jl. Cipinang Kebembem RT13 RW 12', '2009-12-02', 'Jakarta', 'Presly Todoan Andreas', 'Karyawan', 'Nofida Syahfril', 'Karyawan', ' > 4000000', NULL, '170001.fotosiswa.png', '170001'),
('170014', '2017', 'K003', 'Hafiz elgia', 'L', 'Islam', 'B', 'aadsad', 'asdas', 'asdas', '2001-01-01', 'adads', 'asdasd', 'Pegawai Negri Sipil (PNS)', 'asdasd', 'Pegawai Negri Sipil (PNS)', '0 - 1000000', NULL, '170050.jokes.jpg', '170050'),
('170015', '2017', 'K001', 'sam', 'P', 'Islam', 'A', 'asd', 'asd', 'asd', '1997-01-01', 'asd', 'ads', 'Pegawai Negri Sipil (PNS)', 'asd', 'Pegawai Negri Sipil (PNS)', '0 - 1000000', NULL, '', '170037');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `kode_user` char(4) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`kode_user`, `nama_user`, `username`, `password`) VALUES
('U002', 'faris', 'faris', '7d77e825b80cff62a72e680c1c81424f'),
('U001', 'isham', 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kd_kelas`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`no_pendaftaran`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`no_siswa`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`kode_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
