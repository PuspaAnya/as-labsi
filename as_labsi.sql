-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2020 at 02:36 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `as_labsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `kalender_akademik`
--

CREATE TABLE `kalender_akademik` (
  `id` int(11) NOT NULL,
  `kegiatan` varchar(255) NOT NULL,
  `tanggal` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kalender_akademik`
--

INSERT INTO `kalender_akademik` (`id`, `kegiatan`, `tanggal`) VALUES
(1, 'Praktikum Online Analisis & Perancangan Sistem Informasi*/**', '30 Maret - 27 April 2020'),
(2, 'Praktikum Online Sistem Operasi**', '27 April - 6 Juli 2020'),
(3, 'Praktikum Online Sistem Basis Data 2*/**', '1 April - 29 April 2020'),
(4, 'Praktikum Online Pengantar Grafik Komputer*/**', '23 April - 8 Juli 2020'),
(5, 'Praktikum Online Praktikum Bhs Pemrograman', '4 April - 29 Juni 2020'),
(6, 'Praktikum Online Aplikasi Manajemen & Perkantoran', '4 April - 29 Juni 2020');

-- --------------------------------------------------------

--
-- Table structure for table `periode`
--

CREATE TABLE `periode` (
  `id` int(11) NOT NULL,
  `tahun_periode` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `periode`
--

INSERT INTO `periode` (`id`, `tahun_periode`) VALUES
(1, 'ATA 2019/2020'),
(2, 'ATA 2019/2021'),
(3, 'ATA 2019/2023'),
(4, 'ATA 2019/2022'),
(5, 'ATA 2019/2022'),
(6, 'ATA 2019/2029');

-- --------------------------------------------------------

--
-- Table structure for table `tb_berkas`
--

CREATE TABLE `tb_berkas` (
  `kd_berkas` int(11) NOT NULL,
  `nama_berkas` varchar(255) NOT NULL,
  `keterangan_berkas` varchar(255) NOT NULL,
  `tipe_berkas` varchar(100) NOT NULL,
  `ukuran_berkas` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_berkas`
--

INSERT INTO `tb_berkas` (`kd_berkas`, `nama_berkas`, `keterangan_berkas`, `tipe_berkas`, `ukuran_berkas`) VALUES
(22, 'App_Inventor.pdf', '[Dasar] App Inventor', '.pdf', 1498.64),
(23, 'PPT_SCILAB_TRAINING.pdf', '[Menengah Lanjut] SCILAB - MATLAN', '.pdf', 1977.92),
(26, 'Open_Office1.pptx', '[Dasar] Open Office', '.pptx', 1561.12),
(27, 'ORACLE.pptx', '[Menengah Lanjut] ORACLE', '.pptx', 1432.87),
(28, 'PPT_UML1.pptx', '[Menengah Lanjut] UML', '.pptx', 1077.54),
(29, 'TRAINNING_LINUX_WITH_C_KULIAX_61.pptx', '[Menengah Lanjut] LINUX with C', '.pptx', 1193.96),
(30, 'VB_NET.pptx', '[Dasar] VB.NET', '.pptx', 1808.18),
(31, 'Pemrograman_Berbasis_Web_(PHP).pptx', '[Menengah Lanjut] PHP - Pemrograman Berbasis Web', '.pptx', 501.81),
(32, 'PROLOG1.pptx', '[Menengah Lanjut] PROLOG - SBP', '.pptx', 1196.41);

-- --------------------------------------------------------

--
-- Table structure for table `tb_contact`
--

CREATE TABLE `tb_contact` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pesan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_contact`
--

INSERT INTO `tb_contact` (`id`, `nama`, `email`, `pesan`) VALUES
(3, 'Puspa Anyatamara', 'anya.tamarapuspa@gmail.com', '<p>Pemeriksaan laporan harap diperhatikan lebih detail</p>'),
(11, 'Oksavira', 'ocaa@gmail.com', '<p>Bagaimana kalau kartu praktikum saya hilang?</p>'),
(12, 'Ilham Muhammad', 'ilhamsk8@gmail.com', '<p>Penyampaian materi oleh tutor sulit untuk dipahami</p>'),
(13, 'Namuu', 'namu@gmail.com', '<p>Bagaimana kalo saya tidak dapat mengikuti ujian?</p>'),
(14, 'Vernon', 'vernon@gmail.com', '<p>Praktikum berjalan dengan lancar selama ini, asistennya ramah</p>'),
(15, 'Puspa', 'anya@gmail.com', '<p>Praktikum LABSI sangat menyenangkan</p>'),
(16, 'Puspa Anya', 'tamara@gmail.com', '<p>Labsi Ceria</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tb_faq`
--

CREATE TABLE `tb_faq` (
  `id` int(11) NOT NULL,
  `pertanyaan` varchar(255) NOT NULL,
  `jawaban` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_faq`
--

INSERT INTO `tb_faq` (`id`, `pertanyaan`, `jawaban`) VALUES
(6, 'Apakah yang dimaksud dengan Laboratorium Sistem Informasi (LABSI)?', 'Laboratorium Sistem Informasi (LABSI) merupakan salah satu laboratorium di Universitas Gunadarma. LABSI menjadi salah satu laboratorium yang berada di bawah naungan Fakultas Ilmu Komputer dan Teknologi Informasi. LABSI memiliki dua bagian dalam kegiatan praktikum yaitu Laboratorium Dasar dan Menengah Lanjut. Laboratorium Dasar untuk praktikum tingkat 1 dan 2, sedangkan Laboratorium Menengah Lanjut untuk praktikum tingkat 3 dan 4. '),
(7, 'Mengapa harus mengikuti praktikum LABSI?', 'Praktikum LABSI wajib diikuti oleh seluruh mahasiswa Fakultas Ilmu Komputer dan Teknologi Informasi karena laboratorium ini merupakan laboratorium reguler yang menjadi nilai praktikum sebagai perhitungan di nilai akhir perkuliahan.'),
(8, 'Jurusan apa sajakah yang dapat mengikuti praktikum LABSI?', 'Praktikum LABSI diperuntukan untuk  mahasiswa Universitas Gunadarma untuk program studi S1 jurusan Sistem Informasi dan Sistem Komputer, Manajemen, Akuntansi, Psikolog, Sastra Inggris dan program studi D3 jurusan Manajemen Informatika, Teknik Komputer, Manajemen Pemasaran, Manajemen Keuangan, Akuntansi Komputer'),
(9, 'Materi apa saja yang disediakan LABSI?', 'dsd'),
(10, 'Dimana saja lokasi praktikum LABSI?', 'Praktikum LABSI dilaksanakan di Kampus E Kelapa Dua, Kampus H');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal_jaga`
--

CREATE TABLE `tb_jadwal_jaga` (
  `kd_berkas` int(11) NOT NULL,
  `nama_berkas` varchar(255) NOT NULL,
  `keterangan_berkas` varchar(255) NOT NULL,
  `tipe_berkas` varchar(100) NOT NULL,
  `ukuran_berkas` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jadwal_jaga`
--

INSERT INTO `tb_jadwal_jaga` (`kd_berkas`, `nama_berkas`, `keterangan_berkas`, `tipe_berkas`, `ukuran_berkas`) VALUES
(15, 'Jadwal_Asisten_lab_reguler_di_kampus_E53_PTA_2019_-_2020_01_Okt_193.xlsx', 'Lab Reguler - Kampus E531 (PTA 2019-2020)', '.xlsx', 37.23),
(16, 'JADWAL_ASISTEN_LAB_REGULER_KAMPUS_H_LANTAI_4_PTA_2019-2020_01_Okt_193.xlsx', 'Lab Reguler - Kampus H4045 (PTA 2019-2020)', '.xlsx', 39.65),
(17, 'Jadwal_Asisten_E533_PTA_1920.pdf', 'Lab Reguler - Kampus E533 (PTA 2019-2020)', '.pdf', 78.89),
(18, 'Jadwal_Asisten_E532_PTA_1920.pdf', 'Lab Reguler - Kampus E532 (PTA 2019-2020)', '.pdf', 70.57),
(19, 'JADWAL_ASISTEN_LAB_REGULER_KAMPUS_H_LANTAI_403.pdf', 'Lab Reguler - Kampus H403 (PTA 2019-2020)', '.pdf', 62.79),
(20, 'JADWAL_ASISTEN_LAB_REGULER_KAMPUS_H406.pdf', 'Lab Reguler - Kampus H406 (PTA 2019-2020)', '.pdf', 70.85),
(21, 'JADWAL_ASISTEN_LAB_REGULER_KAMPUS_H407.pdf', 'Lab Reguler - Kampus H407 (PTA 2019-2020)', '.pdf', 71.08),
(22, 'Jadwal_Asisten_Karawaci_ATA_1819.xls', 'Lab Karawaci-Cengkareng (ATA 2018-2019)', '.xls', 86),
(23, 'Revisi_JADWAL_ASISTEN_LAB_REGULER_KAMPUS_H_LANTAI_4_ATA_2018-2019_06_Maret_2019.xlsx', 'Lab Reguler - Kampus H4 (ATA 2018-2019)', '.xlsx', 21.34),
(24, 'Revisi_Jadwal_Asisten_Praktikum_Lab__Reguler_di_Kampus_E53_ATA1819_06_Maret_2019.xlsx', 'Lab Reguler - Kampus E53 (ATA 2018-2019)', '.xlsx', 30.46);

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal_praktikum`
--

CREATE TABLE `tb_jadwal_praktikum` (
  `kd_berkas` int(11) NOT NULL,
  `nama_berkas` varchar(255) NOT NULL,
  `keterangan_berkas` varchar(255) NOT NULL,
  `tipe_berkas` varchar(100) NOT NULL,
  `ukuran_berkas` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jadwal_praktikum`
--

INSERT INTO `tb_jadwal_praktikum` (`kd_berkas`, `nama_berkas`, `keterangan_berkas`, `tipe_berkas`, `ukuran_berkas`) VALUES
(5, 'jdwl_praklab_ML_Karawaci-CGK_ATA1819.xlsx', '[Menengah Lanjut] Karawaci-Cengkareng ATA 2018-2019', '.xlsx', 17.09),
(6, 'Jdwl_praktlab_Dasar_Karawaci-Cgk_ATA18-19_rev1.xlsx', '[Dasar] Karawaci-Cengkareng ATA 2018-2019', '.xlsx', 21.01),
(7, 'Update27Maret__Jadwal_Reguler_labsi_Kelapa_Dua_Ata19-20_xls.pdf', '[Dasar-Menengah Lanjut] Lab Reguler - Kampus E ATA 2019-2020', '.pdf', 170.76),
(8, 'Copy_of_Jadwal_praktikum_lab_reguler_di_kampus_E53_PTA_2019_-_2020_01_Okt_19.xlsx', '[Dasar-Menengah Lanjut] Lab Reguler - Kampus E PTA2019-2020', '.xlsx', 33.94),
(9, 'Copy_of_Jadwal_praktikum_lab_reguler_di_kampus_E53_PTA_2019_-_2020_01_Okt_191.xlsx', '[Dasar-Menengah Lanjut] Lab Reguler - Kampus E PTA 2019-2020', '.xlsx', 33.94),
(10, 'Copy_of_JADWAL_LAB_REGULER_KAMPUS_H_LANTAI_4_PTA_2019-2020_01_Okt_19.xlsx', '[Dasar-Menengah Lanjut] Lab Reguler - Kampus H PTA 2019-2020', '.xlsx', 44.53);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengumuman`
--

CREATE TABLE `tb_pengumuman` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(128) NOT NULL,
  `pengumuman` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengumuman`
--

INSERT INTO `tb_pengumuman` (`id`, `tanggal`, `pengumuman`) VALUES
(18, '30-07-2020', '<h2>What is Lorem Ipsum?</h2>\r\n\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containi</p>'),
(20, '18-06-2020', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more'),
(21, '01-07-2020', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus B'),
(25, '30-06-2020', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus B</p>\r\n\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de F'),
(27, '14-07-2020', '<p><strong>PENGUMUMAN PENGUNDURAN PELAKSANAAN KURSUS LEPKOM MANDIRI BERBASIS VIRTUAL PERIODE ATA 2019/2020</strong><br>\r\n </p>\r\n\r\n<p>Kepada<br>\r\nSeluruh Mahasiswa Program D3 dan S1 Universitas Gunadarma</p>\r\n\r\n<p>Sebagai tindak lanjut dari :</p>\r\n\r\n<ul>\r\n <li>Surat Keputusan Rektor Nomor : 084/SK/REK/UG/2020 tanggal 12 Maret 2020, tentang Pencegahan Penyebaran Corona Virus Disease (COVID-l9) di Lingkungan Universitas Gunadarma yang merujuk kepada Surat Edaran Mendikbud Nomor 3 Tahun 2020 tentang Pencegahan Corona Virus Disease (COVID-19) pada Satuan Pendidikan tanggal 9 Maret 2020.</li>\r\n <li>Surat Sekretaris Jenderal Kementerian Pendidikan dan Kebudayaan Nomor 35492/A.A5/HK/2020 Perihal Pencegahan Penyebaran Corona Virus Disease (COVID-19) di Kementerian Pendidikan dan Kebudayaaan tanggal 12 Maret 2020.</li>\r\n <li>Instruksi Gubernur Daerah Khusus Ibukota Jakarta Nomor 16 Tahun 2020 tentang Peningkatan Kewaspadaan terhadap Risiko Penularan Infeksi Corona Virus Disease (COVID-19) tangga</li>\r\n</ul>'),
(28, '08-07-2020', '<p><strong>[PERUBAHAN] 1</strong></p>\r\n\r\n<p><strong>PENGUMUMAN PENGUNDURAN PELAKSANAAN KURSUS LEPKOM MANDIRI BERBASIS VIRTUAL PERIODE ATA 2019/2020</strong><br>\r\n </p>\r\n\r\n<p>Kepada<br>\r\nSeluruh Mahasiswa Program D3 dan S1 Universitas Gunadarma</p>\r\n\r\n<p>Sebagai tindak lanjut dari :</p>\r\n\r\n<ul>\r\n <li>Surat Keputusan Rektor Nomor : 084/SK/REK/UG/2020 tanggal 12 Maret 2020, tentang Pencegahan Penyebaran Corona Virus Disease (COVID-l9) di Lingkungan Universitas Gunadarma yang merujuk kepada Surat Edaran Mendikbud Nomor 3 Tahun 2020 tentang Pencegahan Corona Virus Disease (COVID-19) pada Satuan Pendidikan tanggal 9 Maret 2020.</li>\r\n <li>Surat Sekretaris Jenderal Kementerian Pendidikan dan Kebudayaan Nomor 35492/A.A5/HK/2020 Perihal Pencegahan Penyebaran Corona Virus Disease (COVID-19) di Kementerian Pendidikan dan Kebudayaaan tanggal 12 Maret 2020.</li>\r\n <li>Instruksi Gubernur Daerah Khusus Ibukota Jakarta Nomor 16 Tahun 2020 tentang Peningkatan Kewaspadaan terhadap Risiko Penularan Infeksi Corona Virus Disease (COVID-19) tanggal 25 Februari 2020.</li>\r\n</ul>\r\n\r\n<p>maka Universitas Gunadarma mengumumkan hal-hal sebagai berikut:</p>\r\n\r\n<ol>\r\n <li>Seluruh kegiatan kursus /workshop/pembekalan untuk mahasiswa program D3 dan S1 yang sudah terjadwal pada periode <strong>16 Maret – 18 April 2020 ditunda</strong> atau sampai ada pemberitahuan lebih lanjut.</li>\r\n <li>Kegiatan yang tak terhindarkan sehingga tetap harus dilaksanakan di lingkungan kampus, Universitas Gunadarma tetap memberikan layanan di beberapa unit akademik dan satuan kerja dengan tetap menerapkan protokol pencegahan penyebaran COVID-19.</li>\r\n <li>Selama penundaan berbagai kegiatan akademik tersebut, mahasiswa diharapkan tetap memantau pengumuman atau informasi di studentsite, website BAAK, Website Program Studi, atau media informasi lainnya.</li>\r\n</ol>\r\n\r\n<p>Demikianlah pengumuman ini disampaikan. Terima kasih atas perhatian dan kerjasamanya.<br>\r\n </p>\r\n\r\n<p><strong>Jakarta, 14 Maret 2020</strong></p>\r\n\r\n<p><strong>Kepala Lembaga Pengembangan Universitas Gunadarma</strong></p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>Dr. Karmilasari</strong></p>'),
(33, '28-03-2020', '<p><strong>[PENGUMUMAN PRAKTIKUM ONLINE LABORATORIUM SISTEM INFORMASI ATA 2019/2020]</strong></p>\r\n\r\n<p>Kami perwakilan dari Asisten Laboratorium Sistem Informasi ingin menyampaikan bahwa Praktikum Reguler Online untuk kelas kalian akan dimulai pada: <br>\r\n <br>\r\nPraktikum Analisis Pemrograman Sistem Informasi <br>\r\nPertemuan 1:</p>\r\n\r\n<p>Waktu Akses Dibuka :<br>\r\nSenin, 30 Maret 2020, pukul 08.00 WIB</p>\r\n\r\n<p>Waktu Akses Ditutup :<br>\r\nMinggu, 5 April 2020, pukul 08.00 WIB </p>\r\n\r\n<p>Praktikum dapat diakses melalui :<br>\r\npraktikum.ug</p>\r\n\r\n<p>Hal-hal yang perlu diperhatikan :</p>\r\n\r\n<ol>\r\n <li>Log in menggunakan akun Ilab.</li>\r\n <li>Batas pengerjaan praktikum adalah 1 minggu.</li>\r\n <li>Praktikum akan dilakukan sebanyak 4x pertemuan, 1 pertemuan 1 minggu.</li>\r\n <li>Apabila tidak mengerjakan praktikum sebanyak 2x maka dianggap delete. </li>\r\n</ol>\r\n\r\n<p>Mohon untuk memberitahukan kepada anggota kelas yang lain. Jika ada pertanyaan silakan dikoordinasikan oleh ketua kelas dan bisa disampaikan ke ketua praktikum.</p>\r\n\r\n<p>Terimakasih.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sop2`
--

CREATE TABLE `tb_sop2` (
  `id` int(11) NOT NULL,
  `nama_file` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `tipe` varchar(100) NOT NULL,
  `ukuran` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sop2`
--

INSERT INTO `tb_sop2` (`id`, `nama_file`, `keterangan`, `tipe`, `ukuran`) VALUES
(5, 'asisten_labsi3.pdf', 'Tata Tertib Praktikum LABSI', '.pdf', 149.88),
(6, 'asisten_labsi4.pdf', 'Format Penulisan Laporan Akhir (LA)', '.pdf', 149.88),
(7, 'asisten_labsi5.pdf', 'Format Penulisan Laporan Pendahuluan (LP)', '.pdf', 149.88);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `npm` int(10) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  `initial_name` varchar(100) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `loc_jaga` varchar(50) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `npm`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`, `initial_name`, `no_hp`, `kelas`, `loc_jaga`, `jabatan`, `status`) VALUES
(3, 'Puspa Anyatamara Pranowo', 15116814, 'anya.tamarapuspa@gmail.com', 'DSC_6222_-_edit.JPG', '$2y$10$XnhAr1UXu8bhZhESJj9kQetftO4v12Hk6dp/REOHwIwzJmLke2Imu', 1, 1, 1588833439, '', '08965658204', '4KA01', 'Kelapa Dua, Depok', 'Ketua', 'Aktif'),
(4, 'Oksavira Nabila', 15116816, 'namnambun@gmail.com', 'WhatsApp_Image_2020-08-10_at_20_23_57.jpeg', '$2y$10$lMoi8eg/yNMGoz1/cRl64Oi7kDZZXb0eZf1/sblR/Gcv5ez9eyTmy', 2, 1, 1588833456, 'np', '089651253304', '4KA01', 'Cengkareng', 'Penanggung Jawab (PJ)', 'Aktif'),
(5, 'Ilham Muhammad', 15116815, 'ilhamsk8@gmail.com', 'DSC_0003-min.JPG', '$2y$10$XEWkRBAmNWWdq/IxaaXJyOFT3xF7n8rnJukbp0tEMeWD2GbqQxyYi', 2, 1, 1594869506, '', '089654658202', '4KA06', 'Karawaci', 'Asisten', 'Aktif'),
(13, 'Vernon Chwe', 15116819, 'vernon@gmail.com', 'dp_vernon.png', '$2y$10$wLL44o2dfZOJHw7FhCtXVuYieOsmWj0.0duEocMhfxhk6H/URzFmO', 2, 1, 1595412957, '', '089654658204', '4KA01', 'Depok', 'Asisten', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kalender_akademik`
--
ALTER TABLE `kalender_akademik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `periode`
--
ALTER TABLE `periode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_berkas`
--
ALTER TABLE `tb_berkas`
  ADD PRIMARY KEY (`kd_berkas`);

--
-- Indexes for table `tb_contact`
--
ALTER TABLE `tb_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_faq`
--
ALTER TABLE `tb_faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_jadwal_jaga`
--
ALTER TABLE `tb_jadwal_jaga`
  ADD PRIMARY KEY (`kd_berkas`);

--
-- Indexes for table `tb_jadwal_praktikum`
--
ALTER TABLE `tb_jadwal_praktikum`
  ADD PRIMARY KEY (`kd_berkas`);

--
-- Indexes for table `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_sop2`
--
ALTER TABLE `tb_sop2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kalender_akademik`
--
ALTER TABLE `kalender_akademik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `periode`
--
ALTER TABLE `periode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_berkas`
--
ALTER TABLE `tb_berkas`
  MODIFY `kd_berkas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tb_contact`
--
ALTER TABLE `tb_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_faq`
--
ALTER TABLE `tb_faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_jadwal_jaga`
--
ALTER TABLE `tb_jadwal_jaga`
  MODIFY `kd_berkas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tb_jadwal_praktikum`
--
ALTER TABLE `tb_jadwal_praktikum`
  MODIFY `kd_berkas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_pengumuman`
--
ALTER TABLE `tb_pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tb_sop2`
--
ALTER TABLE `tb_sop2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
