-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 20, 2017 at 06:09 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id2812576_ppsb`
--

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
  `sekolah_asal` varchar(100) NOT NULL,
  `tahun_lulus` char(4) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `status` enum('Daftar','Diterima','Cadangan','Ditolak') NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`no_pendaftaran`, `kd_kelas`, `nik`, `nama`, `jkelamin`, `agama`, `gdarah`, `telepon`, `email`, `alamat`, `tgl_lahir`, `tmpt_lahir`, `ayah_nama`, `ayah_pekerjaan`, `ibu_nama`, `ibu_pekerjaan`, `penghasilan`, `sekolah_asal`, `tahun_lulus`, `tgl_daftar`, `status`, `foto`) VALUES
('170001', 'K001', '3175020212091003', 'Abdurrahman Dibaj Axelle', 'L', 'Islam', 'A', '085715086218', 'tes.aja@yahoo.com', 'Jl. Cipinang Kebembem RT13 RW 12', '2009-12-02', 'Jakarta', 'Presly Todoan Andreas', 'Karyawan', 'Nofida Syahfril', 'Karyawan', ' > 4000000', 'Taman Kanak-Kanak', '2015', '2017-09-04', 'Diterima', '170001.images.jpg'),
('170002', 'K001', '3175022710091003', 'Ade Putra Arifin', 'L', 'Islam', 'A', '089520469132', 'tes.aja@yahoo.com', 'Jl. Pisangan Lama III/17 RT 5 RW 4', '2009-10-27', 'Jakarta', 'Mohamad Arifin', 'Karyawan', 'Sri Mulyati', 'Ibu Rumah Tangga (IRT)', '1000000 - 2500000', 'Taman Kanak-Kanak', '2016', '2017-09-04', 'Diterima', '170002.images.jpg'),
('170003', 'K001', '3175020503100001', 'Aditya Almer Dwi Candra', 'L', 'Islam', 'A', '081318735450', 'tes.aja@yahoo.com', 'Jl. Pisangan Lama III RT 5 RW 11', '2010-03-05', 'Jakarta', 'Dedi Priyono', 'Pegawai Negri Sipil (PNS)', 'Komariah', 'Karyawan', '2500000 - 4000000', 'Taman Kanak-Kanak', '2016', '2017-09-04', 'Diterima', '170003.images.jpg'),
('170004', 'K001', '3175021401100001', 'Afian Fico Pratama', 'L', 'Islam', 'O', '081317489118', 'tes.aja@yahoo.com', 'Jl. Pisangan Lama I RT 5 RW 1', '2010-01-14', 'Jakarta', 'Andri Wahyu Amriyanto', 'Karyawan', 'Fitriyani', 'Karyawan', '2500000 - 4000000', 'Taman Kanak-Kanak', '2016', '2017-09-04', 'Diterima', '170004.images.jpg'),
('170005', 'K001', '3175022905090001', 'Ahmad Adira Manjaya', 'L', 'Islam', 'B', '087823797579', 'tes.aja@yahoo.com', 'Jl. Pisangan Lama I RT 2 RW 5', '2009-05-29', 'Jakarta', 'Nadir', 'Karyawan', 'Ayu Nurul Madinah', 'Karyawan', '2500000 - 4000000', 'Taman Kanak-Kanak', '2016', '2017-09-04', 'Daftar', '170005.images.jpg'),
('170006', 'K001', '3171082408090004', 'Ahmad Furqon Al-Farizi', 'L', 'Islam', 'O', '081288022348', 'tes.aja@yahoo.com', 'Jl. Pisangan Lama I Ujung RT 1 RW 5', '2009-08-24', 'Jakarta', 'Abu Zamil', 'Wiraswasta', 'Desrianti', 'Ibu Rumah Tangga (IRT)', '1000000 - 2500000', 'Taman Kanak-Kanak', '2016', '2017-09-04', 'Daftar', '170006.images.jpg'),
('170007', 'K001', '3175020207090004', 'Ahmad Maaturidi', 'L', 'Islam', 'O', '081285715691', 'tes.aja@yahoo.com', 'Jl Pisangan Timur  No. 07 RT 2RW 12', '2009-07-02', 'Jakarta', 'Ir. Muhammad Yunus', 'Karyawan', 'Euis Maryam', 'Lainnya', '2500000 - 4000000', 'Taman Kanak-Kanak', '2016', '2017-09-04', 'Daftar', '170007.images.jpg'),
('170008', 'K001', '3175021909091001', 'Ahmad Thoriq Badriansyah', 'L', 'Islam', 'A', '08123456789', 'tes.aja@yahoo.com', 'Jl. Pisangan Lama III RT 3 RW 8', '2009-09-19', 'Jakarta', 'Tjachyudi', 'Karyawan', 'Siti Rofikah', 'Ibu Rumah Tangga (IRT)', '1000000 - 2500000', 'Taman Kanak-Kanak', '2016', '2017-09-04', 'Diterima', '170008.images.jpg'),
('170009', 'K001', '3175024309091004', 'Aira Eka Putri', 'P', 'Islam', 'B', '085714142782', 'tes.aja@yahoo.com', 'Jl. Pisangan Lama III RT 9 RW 7', '2009-09-03', 'Jakarta', 'Slamet', 'Karyawan', 'Siti Aminah', 'Ibu Rumah Tangga (IRT)', '1000000 - 2500000', 'Taman Kanak-Kanak', '2016', '2017-09-04', 'Diterima', '170009.images.jpg'),
('170010', 'K001', '3175022109091002', 'Akhdan Septa Pradhitya', 'L', 'Islam', 'B', '081288889387', 'tes.aja@yahoo.com', 'Jl. Pisangan Lama III RT 3 RW 11', '2009-09-21', 'Jakarta', 'Panca Andika Okta Yudha', 'Karyawan', 'Rika Puspita Sari', 'Karyawan', '2500000 - 4000000', 'Taman Kanak-Kanak', '2016', '2017-09-04', 'Daftar', '170010.images.jpg'),
('170011', 'K001', '3175021009091006', 'Al Fathir Satria Utama', 'L', 'Islam', 'A', '08123456789', 'tes.aja@yahoo.com', 'Jl. PORI V', '2009-09-10', 'Batu', 'Budi Utomo', 'Karyawan', 'Ninik Suparmi', 'Ibu Rumah Tangga (IRT)', '1000000 - 2500000', 'Taman Kanak-Kanak', '2016', '2017-09-04', 'Daftar', '170011.images.jpg'),
('170012', 'K001', '3171072206081001', 'Aldy Wallady', 'L', 'Islam', 'O', '089520469132', 'tes.aja@yahoo.com', 'Jl. Dukuh Pinggir I RT 4 RW 5', '2009-06-22', 'Jakarta', 'Alwi Sugiarjo', 'Lainnya', 'Endah Anggraini', 'Ibu Rumah Tangga (IRT)', '1000000 - 2500000', 'Taman Kanak-Kanak', '2016', '2017-09-04', 'Daftar', '170012.images.jpg'),
('170013', 'K001', '3175024610091003', 'Alfira Khairina Lathifah', 'P', 'Islam', 'O', '081294277087', 'tes.aja@yahoo.com', 'Jl. Pisangan Lama III RT 9 RW 7', '2009-10-06', 'Purbalingga', 'Tofa ', 'Karyawan', 'Darkiyah', 'Ibu Rumah Tangga (IRT)', '1000000 - 2500000', 'Taman Kanak-Kanak', '2016', '2017-09-04', 'Daftar', '170013.images.jpg'),
('170014', 'K001', '3175027001101003', 'Anatasya Aulia Putri', 'P', 'Islam', 'O', '083805119667', 'tes.aja@yahoo.com', 'JL.CIPINANG LONTAR  RT 4 RW 3', '2010-01-30', 'Jakarta', 'RUSLANY', 'Karyawan', 'EVI KOMALASARI', 'Ibu Rumah Tangga (IRT)', '1000000 - 2500000', 'Taman Kanak-Kanak', '2016', '2017-09-04', 'Daftar', '170014.images.jpg'),
('170015', 'K001', '3302126403080004', 'Andini Putri Lestari', 'P', 'Islam', 'B', '081210795650', 'tes.aja@yahoo.com', 'Patikraja RT 3 RW 3', '2008-03-24', 'Jakarta', 'Eko Purnomo', 'Karyawan', 'Supriyanti', 'Ibu Rumah Tangga (IRT)', '1000000 - 2500000', 'Taman Kanak-Kanak', '2016', '2017-09-04', 'Daftar', '170015.images.jpg'),
('170016', 'K001', '3522105507080001', 'Anindya Permatasari', 'P', 'Islam', 'A', '085218254900', 'tes.aja@yahoo.com', 'Jl. PORI IV RT 7 RW 12', '2009-07-15', 'Bojonegoro', 'Ahmad Rhondi', 'Lainnya', 'Siti Kholifah', 'Ibu Rumah Tangga (IRT)', '0 - 1000000', 'Taman Kanak-Kanak', '2016', '2017-09-04', 'Daftar', '170016.images.jpg'),
('170017', 'K001', '3175025410090002', 'Anisa Oktaviani', 'P', 'Islam', 'O', '08123456789', 'tes.aja@yahoo.com', 'Jl. Pisangan Lama I RT 10 RW 1', '2009-10-14', 'Jakarta', 'Achmad Irham Fibriyanto', 'Karyawan', 'Fitri Hikmawati', 'Ibu Rumah Tangga (IRT)', '1000000 - 2500000', 'Taman Kanak-Kanak', '2016', '2017-09-04', 'Daftar', '170017.images.jpg'),
('170018', 'K001', '3175025910090002', 'Annisa Fadhillah', 'P', 'Islam', 'A', '085289601204', 'tes.aja@yahoo.com', 'Jl. Pisangan Lama II No. 39 C RT 4 RW 3', '2009-10-19', 'Jakarta', 'Paino', 'Lainnya', 'Sri Sujami', 'Ibu Rumah Tangga (IRT)', '0 - 1000000', 'Taman Kanak-Kanak', '2016', '2017-09-04', 'Daftar', '170018.images.jpg'),
('170019', 'K001', '3175020104100002', 'Anwar Musyaffa', 'L', 'Islam', 'B', '082132781044', 'tes.aja@yahoo.com', 'Jl. Pisangan Lama III RT 4 RW 3', '2010-04-01', 'Jakarta', 'Heri Haerul Anwar', 'Karyawan', 'Ika Sartika', 'Ibu Rumah Tangga (IRT)', '1000000 - 2500000', 'Taman Kanak-Kanak', '2016', '2017-09-04', 'Daftar', '170019.images.jpg'),
('170020', 'K001', '3213221312080001', 'Ardiansah', 'L', 'Islam', 'B', '081382989502', 'tes.aja@yahoo.com', 'Dsn Ciawitali RT 20 RW 5', '2008-12-13', 'Subang', 'Udin', 'Wiraswasta', 'Warsiti', 'Ibu Rumah Tangga (IRT)', '1000000 - 2500000', 'Taman Kanak-Kanak', '2016', '2017-09-04', 'Diterima', '170020.images.jpg'),
('170021', 'K001', '3175021008091003', 'Arya Riady', 'L', 'Islam', 'A', '02129834583', 'tes.aja@yahoo.com', 'Jl. Cipinang Kebembem RT 12 RW 12', '2009-08-10', 'Jakarta', 'Panca Aditya', 'Karyawan', 'Turinah', 'Ibu Rumah Tangga (IRT)', '1000000 - 2500000', 'Taman Kanak-Kanak', '2016', '2017-09-04', 'Daftar', '170021.images.jpg'),
('170022', 'K001', '3174032909090001', 'Ashraf Fachreza', 'L', 'Islam', 'O', '081280214851', 'tes.aja@yahoo.com', 'Jl. Mampang Prapatan I No. 33 RT 6 RW 6', '2009-09-29', 'Jakarta', 'Farmisal', 'Wiraswasta', 'Maryulis', 'Karyawan', '2500000 - 4000000', 'Taman Kanak-Kanak', '2016', '2017-09-04', 'Diterima', '170022.images.jpg'),
('170023', 'K001', '3175025302100001', 'Asyifa  Zahrah', 'P', 'Islam', 'B', '081317532867', 'tes.aja@yahoo.com', 'JL.PORI V RT 7 RW 2', '2010-02-13', 'Jakarta', 'MUHAMMAD YUNUS ', 'Karyawan', 'MARNITA', 'Ibu Rumah Tangga (IRT)', '1000000 - 2500000', 'Taman Kanak-Kanak', '2016', '2017-09-04', 'Diterima', '170023.images.jpg'),
('170024', 'K001', '3175027103100001', 'Atqia Azucenna Arifin', 'P', 'Islam', 'B', '08999374807', 'tes.aja@yahoo.com', 'Jl. Pisangan Lama III RT 5 RW 11', '2010-03-31', 'Jakarta', 'Zaenal Arifin', 'Wiraswasta', 'Charmi', 'Karyawan', '2500000 - 4000000', 'Taman Kanak-Kanak', '2016', '2017-09-04', 'Diterima', '170024.images.jpg'),
('170025', 'K001', '3175026309090001', 'Awaliyah Nur Hanafi', 'P', 'Islam', 'O', '085711808712', 'tes.aja@yahoo.com', 'Jl. Pisangan Lama RT 10 RW 5', '2009-09-23', 'Jakarta', 'Marta', 'Karyawan', 'Uswatun Hasanah', 'Pegawai Negri Sipil (PNS)', ' > 4000000', 'Taman Kanak-Kanak', '2016', '2017-09-04', 'Diterima', '170025.images.jpg'),
('170026', 'K001', '3175023103100004', 'Aziz Al Akbar', 'L', 'Islam', 'B', '08123456789', 'tes.aja@yahoo.com', 'Jl. Pisangan Lama I RT 10 RW 1', '2010-03-31', 'Jakarta', 'Mujiono', 'Karyawan', 'Lisa Umami', 'Ibu Rumah Tangga (IRT)', '1000000 - 2500000', 'Taman Kanak-Kanak', '2016', '2017-09-04', 'Diterima', '170026.images.jpg'),
('170027', 'K001', '3175024407091002', 'Azka Azkia Pardini', 'P', 'Islam', 'A', '081210464465', 'tes.aja@yahoo.com', 'Jl. Cipinang Kebembem', '2009-07-04', 'Jakarta', 'Drs. Suparno', 'Lainnya', 'Dian Diniati', 'Ibu Rumah Tangga (IRT)', '1000000 - 2500000', 'Taman Kanak-Kanak', '2016', '2017-09-04', 'Diterima', '170027.images.jpg'),
('170028', 'K001', '3175024810090002', 'Azra Aira Syawalia', 'P', 'Islam', 'A', '081282049521', 'tes.aja@yahoo.com', 'Jl. Pisangan Lama  RT 3 RW 11', '2009-10-08', 'Jakarta', 'Rohmani', 'Karyawan', 'Aisyah', 'Ibu Rumah Tangga (IRT)', '1000000 - 2500000', 'Taman Kanak-Kanak', '2016', '2017-09-04', 'Diterima', '170028.images.jpg'),
('170029', 'K001', '3175020205091004', 'Dany Nurfauzan Putra', 'L', 'Islam', 'A', '081219616361', 'tes.aja@yahoo.com', 'Jl. Pisangan Lama II No.27 RT 2 RW 4', '2009-05-02', 'Jakarta', 'Solihin Nurhidayat', 'Wiraswasta', 'Ike Yuniarti', 'Karyawan', '2500000 - 4000000', 'Taman Kanak-Kanak', '2016', '2017-09-04', 'Diterima', '170029.images.jpg'),
('170030', 'K001', '3175020403101004', 'Darren Kandarto Adiutomo', 'L', 'Islam', 'O', '085777008864', 'tes.aja@yahoo.com', 'Jl. Cipinang Lontar RT 3 RW 8', '2010-03-04', 'Jakarta', 'Pardi', 'Karyawan', 'Sumiyati', 'Lainnya', '1000000 - 2500000', 'Taman Kanak-Kanak', '2016', '2017-09-04', 'Daftar', '170030.images.jpg'),
('170031', 'K001', '3175024412091002', 'Feivel gavrila', 'P', 'Islam', 'B', '085229549525', 'tes.aja@yahoo.com', 'CIPINANG TIMUR RT 7 RW 8', '2009-12-04', 'Jakarta', 'WINDY JUNIARDY', 'Karyawan', 'EKA RATNA WATI', 'Ibu Rumah Tangga (IRT)', '1000000 - 2500000', 'Taman Kanak-Kanak', '2016', '2017-09-06', 'Daftar', '170031.images.jpg'),
('170032', 'K001', '3175020401101003', 'Fierlyal Junior Alif', 'L', 'Islam', 'A', '08567181751', 'tes.aja@yahoo.com', 'Jl. Psangan Lama III RT 2 RW 11', '2010-01-04', 'Jakarta', 'Ruddy Cahyadi', 'Karyawan', 'Supriyanti', 'Ibu Rumah Tangga (IRT)', '1000000 - 2500000', 'Taman Kanak-Kanak', '2016', '2017-09-06', 'Daftar', '170032.images.jpg'),
('170033', 'K001', '3175024110091004', 'Fitri Oktaviana', 'P', 'Islam', 'O', '088213478947', 'tes.aja@yahoo.com', 'Jl. Pisangan Lama No. 8 RT 4 RW 2', '2009-10-10', 'Jakarta', 'Slamet', 'Wiraswasta', 'Ratmi', 'Ibu Rumah Tangga (IRT)', '1000000 - 2500000', 'Taman Kanak-Kanak', '2016', '2017-09-06', 'Diterima', '170033.images.jpg'),
('170034', 'K001', '3175072910091005', 'Hadaya Ibnu Rawi', 'L', 'Islam', 'O', '081210395866', 'tes.aja@yahoo.com', 'Jl. Kapitan No. 8 RT 14 RW 4', '2009-10-29', 'Ponorogo', 'Rahmanto', 'Pegawai Negri Sipil (PNS)', 'Wiwik Anggraini', 'Pegawai Negri Sipil (PNS)', '2500000 - 4000000', 'Taman Kanak-Kanak', '2016', '2017-09-06', 'Diterima', '170034.images.jpg'),
('170035', 'K001', '3175024903100004', 'Hafidzah Nur Laila', 'P', 'Islam', 'B', '087877577985', 'tes.aja@yahoo.com', 'Jl. Pisangan Lama III RT 4 RW 5', '2009-03-09', 'Jakarta', 'Zaenal Abidin', 'Karyawan', 'Fifi Afianti', 'Lainnya', '2500000 - 4000000', 'Taman Kanak-Kanak', '2016', '2017-09-06', 'Daftar', '170035.images.jpg'),
('170036', 'K001', '3175020812090004', 'Haikal Rajeshwara Prabowo', 'L', 'Islam', 'O', '08151607259', 'tes.aja@yahoo.com', 'JL.gading raya gg I NO.32 RT 4 RW 5', '2009-12-08', 'Jakarta', 'Heru cahya prabowo ', 'Karyawan', 'heni suryaningsih ', 'Ibu Rumah Tangga (IRT)', '1000000 - 2500000', 'Taman Kanak-Kanak', '2016', '2017-09-06', 'Daftar', '170036.images.jpg'),
('170037', 'K001', '3175021305091001', 'Hud Putra Yulianriza', 'L', 'Islam', 'O', '081282362649', 'tes.aja@yahoo.com', 'Jl. Pori Raya No. 6 RT 3 RW 11', '2009-05-13', 'Jakarta', 'Afrizal Effendi', 'Karyawan', 'Yuli Yanti', 'Ibu Rumah Tangga (IRT)', '1000000 - 2500000', 'Taman Kanak-Kanak', '2016', '2017-09-06', 'Diterima', '170037.images.jpg'),
('170038', 'K001', '3175022908090005', 'Ilham Ramdhani', 'L', 'Islam', 'O', '081253973984', 'tes.aja@yahoo.com', 'Jl. Cipinang Kebembem', '2009-08-29', 'Jakarta', 'Toegiman', 'Karyawan', 'Rufiah', 'Ibu Rumah Tangga (IRT)', '1000000 - 2500000', 'Taman Kanak-Kanak', '2016', '2017-09-06', 'Daftar', '170038.images.jpg'),
('170039', 'K001', '3175025809090006', 'Indah Silviani Al - Fitri', 'P', 'Islam', 'O', '089648747538', 'tes.aja@yahoo.com', 'Jl. Pisangan Lama III RT 10 RW 11', '2009-09-18', 'Jakarta', 'Wasta', 'Karyawan', 'Salamah', 'Ibu Rumah Tangga (IRT)', '1000000 - 2500000', 'Taman Kanak-Kanak', '2016', '2017-09-06', 'Daftar', '170039.images.jpg'),
('170040', 'K001', '3175024304101004', 'Izzati Java Pasai', 'P', 'Islam', 'O', '083878004670', 'tes.aja@yahoo.com', 'Jl. Gading Raya I RT 10 RW 14', '2010-04-03', 'Jakarta', 'Herry Ananta', 'Wiraswasta', 'Rozana agustina', 'Ibu Rumah Tangga (IRT)', '1000000 - 2500000', 'Taman Kanak-Kanak', '2016', '2017-09-06', 'Daftar', '170040.images.jpg'),
('170041', 'K001', '3175021001100003', 'Januar Sabillah', 'L', 'Islam', 'A', '08123456789', 'tes.aja@yahoo.com', 'Jl. Pisangan Lama II RT 8 RW 2', '2010-01-10', 'Jakarta', 'Achmad Salamun', 'Buruh', 'Nurul Yolanda', 'Ibu Rumah Tangga (IRT)', '1000000 - 2500000', 'Taman Kanak-Kanak', '2016', '2017-09-06', 'Daftar', '170041.images.jpg'),
('170042', 'K001', '3522094411090001', 'Karina Zahra Fatia Nisa', 'P', 'Islam', 'B', '08999374807', 'tes.aja@yahoo.com', 'Jl. H. Mugeni I No. 20 RT 6 RW 4', '2009-11-04', 'Bojonegoro', 'Abdul Mutholib', 'Karyawan', 'Qomariyah', 'Ibu Rumah Tangga (IRT)', '1000000 - 2500000', 'Taman Kanak-Kanak', '2016', '2017-09-06', 'Daftar', '170042.images.jpg'),
('170043', 'K001', '3175022202091003', 'Kevin Febrian Anwar', 'L', 'Islam', 'O', '081905596626', 'tes.aja@yahoo.com', 'Jl. Pisangan Lama III RT 8 RW 11', '2009-02-22', 'Jakarta', 'Anwar Sadat', 'Karyawan', 'Lucia Eka Kristiana', 'Ibu Rumah Tangga (IRT)', '1000000 - 2500000', 'Taman Kanak-Kanak', '2016', '2017-09-06', 'Daftar', '170043.images.jpg'),
('170044', 'K001', '3175024304100003', 'Keysha Noor Annashr', 'P', 'Islam', 'A', '081288148439', 'tes.aja@yahoo.com', 'Jl. Pisangan Lama II RT 3 RW 3', '2010-04-03', 'Jakarta', 'Sukirno', 'Karyawan', 'Partini', 'Ibu Rumah Tangga (IRT)', '1000000 - 2500000', 'Taman Kanak-Kanak', '2016', '2017-09-06', 'Daftar', '170044.images.jpg'),
('170045', 'K001', '3175020211090001', 'Mohammad Daffa Al Fatih', 'L', 'Islam', 'A', '081513163044', 'tes.aja@yahoo.com', 'Jl. Pisangan Lama III RT 3 RW 8', '2009-11-02', 'Jakarta', 'Bachtiar', 'Wiraswasta', 'Rubiyanti', 'Ibu Rumah Tangga (IRT)', '1000000 - 2500000', 'Taman Kanak-Kanak', '2016', '2017-09-06', 'Diterima', '170045.images.jpg'),
('170046', 'K001', '3314114103100002', 'Marcella Putri Calista', 'P', 'Islam', 'B', '085781044011', 'tes.aja@yahoo.com', 'Jl. Pisangan Lama III RT 7 RW 3', '2010-03-01', 'Sragen ', 'Eko Mujiono', 'Wiraswasta', 'Jumiyati', 'Wiraswasta', '2500000 - 4000000', 'Taman Kanak-Kanak', '2016', '2017-09-06', 'Diterima', '170046.images.jpg'),
('170047', 'K001', '3175037103091003', 'Maura Aufilani Mumtaz', 'P', 'Islam', 'B', '08123456789', 'tes.aja@yahoo.com', 'Jl. DI. Panjaitan RT 1 RW 3', '2009-03-31', 'Jakarta', 'Hendrik', 'Lainnya', 'Denok Hastuti', 'Lainnya', '1000000 - 2500000', 'Taman Kanak-Kanak', '2016', '2017-09-06', 'Daftar', '170047.images.jpg'),
('170048', 'K001', '3175024606091002', 'Mila Raisya', 'P', 'Islam', 'O', '02147022331', 'tes.aja@yahoo.com', 'Jl. Pisangan Lama  RT 3 RW 8', '2009-06-06', 'Jakarta', 'Zulkarnain Sam', 'Wiraswasta', 'Nurlela', 'Ibu Rumah Tangga (IRT)', '1000000 - 2500000', 'Taman Kanak-Kanak', '2016', '2017-09-06', 'Daftar', '170048.images.jpg'),
('170049', 'K001', '3175022911091006', 'Mirza Daffa Fayyadh', 'L', 'Islam', 'A', '0812236879938', 'tes.aja@yahoo.com', 'Jl. Gading Raya XI No. 46 RT 12 RW 14', '2009-11-29', 'Jakarta', 'Dikki Fathoni', 'Karyawan', 'Susilowati', 'Ibu Rumah Tangga (IRT)', '1000000 - 2500000', 'Taman Kanak-Kanak', '2016', '2017-09-06', 'Daftar', '170049.images.jpg'),
('170050', 'K001', '3175021205101001', 'Mochamad Farhan Fahlevy', 'L', 'Islam', 'O', '081297558279', 'tes.aja@yahoo.com', 'Jl. Pisangan Lama RT 8 RW 7', '2010-05-12', 'Jakarta', 'Dikdik Sadikin', 'Karyawan', 'Ida Farida', 'Ibu Rumah Tangga (IRT)', '1000000 - 2500000', 'Taman Kanak-Kanak', '2016', '2017-09-06', 'Daftar', '170050.images.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`no_pendaftaran`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
