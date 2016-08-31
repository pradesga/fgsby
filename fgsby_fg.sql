-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Aug 31, 2016 at 09:27 PM
-- Server version: 5.5.50-cll
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fgsby_fg`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hp` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kota` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kode` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tgl` datetime NOT NULL,
  `tglbayar` datetime DEFAULT NULL,
  `email_confirm` int(11) NOT NULL DEFAULT '0',
  `konfirm` int(11) NOT NULL DEFAULT '0',
  `tglkonfirm` datetime DEFAULT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=236 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `nama`, `alamat`, `hp`, `email`, `kota`, `kode`, `tgl`, `tglbayar`, `email_confirm`, `konfirm`, `tglkonfirm`) VALUES
(19, 'Fika Ridaul Maulayya', 'Gajah, Demak, Jawa Tengah Indonesia', '085785852224', 'ridaulmaulayya@gmail.com', 'Demak', 'FGJNS7', '2016-06-27 08:18:45', '2016-06-28 19:12:46', 1, 5, NULL),
(24, 'Ahmad Hadliq Luthfi', 'jln. Demak-Purwodadi Km.4 Rt/Rw. 01/04 Desa Wonosalam Kecamatan Wonosalam Kab Demak', '085607663912', 'fidamattahdziby28@gmail.com', 'Demak', 'AFHN78', '2016-06-27 08:54:06', NULL, 1, 2, NULL),
(23, 'Ahmad Hadliq Luthfi', 'jln. Demak-Purwodadi Km.4 Rt/Rw. 01/04 Desa Wonosalam Kecamatan Wonosalam Kab Demak', '085607663912', 'hadliqluthfi@gmail.com', 'Demak', 'CEQU06', '2016-06-27 08:49:54', '2016-07-03 15:45:29', 1, 5, NULL),
(15, 'Dany Purno Yuwono', 'RT 06 RW 02 Desa Malasan Kecamatan Durenan Kabupaten Trenggalek Provinsi Jawa Timur', '085708094363', 'dany.webedu@gmail.com', 'Trenggalek', 'HITY27', '2016-06-27 04:24:35', '2016-07-11 14:35:23', 1, 1, NULL),
(20, 'Farida ', 'Graha Asri Sukodono Cluster Kencana CP 14,Sukodono Sidoarjo ', '085646013899 ', 'farida@itats.ac.id', 'Sidoarjo ', 'EISV45', '2016-06-27 08:19:37', '2016-08-10 14:49:27', 1, 1, NULL),
(25, 'mundir muzaini', 'bubutan surabaya', '085852952367', 'mundinkcoy@gmail.com', 'surabaya', 'FGMNR8', '2016-06-27 09:02:11', '2016-06-28 22:01:48', 1, 5, NULL),
(26, 'Muhammad Nafis Billah ', 'Wonosari wetan 1 Nusa/36', '082335616777', 'nafisbillah@gmail.com', 'Surabaya', 'KLP246', '2016-06-27 09:13:10', '2016-06-28 22:01:26', 1, 5, NULL),
(173, 'M. Zahran Rahadian. P', 'Semolowaru Elok AN/18', '087852724114', 'zahranrahadian@yahoo.co.id', 'Surabaya', 'ATXZ19', '2016-08-20 09:58:58', '2016-08-21 16:47:29', 0, 5, NULL),
(28, 'Mochammad Alvi Romadhon', 'jl jelidro rt 5 rw 1 no: 50', '089617744779', 'm.alvi.romadhon@gmail.com', 'surabaya', 'IKQ379', '2016-06-27 09:38:29', '2016-07-11 09:00:00', 1, 5, NULL),
(29, 'Muhammad Zidni Mubarrok', 'Peterongan, Jombang, Jawa Timur', '085852024269', 'elshultan.zdn13@gmail.com', 'Jombang', 'ADIK58', '2016-06-27 09:50:14', '2016-07-14 16:47:21', 1, 5, NULL),
(30, 'Aditya Darmawan', 'Ngelom 6/104 RT 3 RW 3 Taman Sidoarjo', '081234822890', 'addaraquthny@gmail.com', 'Sidoarjo', 'HM0126', '2016-06-27 10:30:37', '2016-06-28 19:00:48', 1, 5, NULL),
(174, 'Firda Gumelar Putra Pradana', 'Jl. Karimun 1 / 17 GKB', '085785664813', 'mabukawan@gmail.com', 'Gresik', 'AKU016', '2016-08-20 11:46:55', '2016-08-24 11:52:24', 0, 5, NULL),
(32, 'dimas aldi pratama', 'cemeng bakalan rt20 rw 05', '+6287702403498', 'dhymazz.ar@gmail.com', 'sidoarjo', 'LPQ378', '2016-06-27 10:41:15', '2016-06-28 22:08:31', 1, 5, NULL),
(34, 'Moh Humam Mukti', 'Bendul Merisi Selatan IV / 72', '+6281333521003', 'humam.alhuda@gmail.com', 'Surabaya', 'ACGR05', '2016-06-27 11:34:50', '2016-07-11 23:04:19', 1, 5, NULL),
(171, 'Indra Yoga Nugroho', 'Perum GDR Jl. Alamanda 2-11', '081233851990', 'manaofkhemia@gmail.com', 'Sidoarjo', 'CKNZ04', '2016-08-19 05:14:26', '2016-08-25 21:39:36', 0, 5, NULL),
(36, 'Misbahul Munir', 'Desa Canditunggal Kec. Kalitengah', '085648822336', 'misbahuldmunir@gmail.com', 'Lamongan', 'FLQRSU', '2016-06-27 12:18:47', '2016-06-28 19:09:57', 1, 1, NULL),
(170, 'Esha Ganiyan Muhammad Pillaridha', 'Desa Slawe, Kec. Watulimo, Kab. Trenggalek, Jawa Timur', '085735634717', 'eshaesha1152@gmail.com', 'Trenggalek', 'AGMQW0', '2016-08-18 13:43:39', NULL, 0, 0, NULL),
(169, 'Ibnu Sutantiara', 'Perum. permata alam permai blok g4-23', '085730673788', 'ibnusta@gmail.com', 'Sidoarjo', 'AENU02', '2016-08-18 11:16:09', NULL, 0, 0, NULL),
(168, 'Firda Gumelar Putra Pradana', 'Jl. Karimun 1 / 17 GKB', '085785664813', 'firdzz11@gmail.com', 'Gresik', 'AILNR0', '2016-08-18 09:36:18', NULL, 0, 0, NULL),
(41, 'Citra Ayu Maulidia', 'Wonocolo Rt. 2 Rw. 1 Sepanjang Taman Sidoarjo', '089622402447', 'citra.absifa@gmail.com', 'Sidoarjo', 'AHKTY8', '2016-06-27 13:35:47', '2016-08-11 13:01:08', 1, 5, NULL),
(42, 'irham syah', 'babatan pratama XVIII Blok AA no.37', '087851384072', 'irhamp12@gmail.com', 'Surabaya', 'FKY269', '2016-06-27 14:16:00', '2016-06-28 19:52:22', 1, 5, NULL),
(166, 'Muhammad Irsano Maldini', 'Taman Suko Asri blok E-30 Desa Suko Kecamatan Sukodono', '085748164852', 'maldini.irsano86@gmail.com', 'SIDOARJO,KAB.SIDOARJO', 'KTZ127', '2016-08-18 06:45:23', NULL, 0, 0, NULL),
(44, 'muhamad rifai', 'perum graha permata sidorejo y 32 krian sidoardjo', '085731841285', 'phaysetya@gmail.com', 'krian', 'FMVX56', '2016-06-27 15:29:49', '2016-08-09 18:30:28', 1, 5, NULL),
(165, 'Moch.alfi syahrin', 'Ponorogo', '081331594323', 'syahrien@unida.gontor.ac.id', 'Ponorogo', 'HMTWZ7', '2016-08-18 02:31:45', NULL, 0, 0, NULL),
(47, 'Benedict E. Pranata', 'Jl. Jambangan tama 52-54', '085749518656', 'cyb3rwine@gmail.com', 'Surabaya', 'IKST49', '2016-06-27 23:50:02', '2016-08-10 21:09:20', 1, 5, NULL),
(48, 'Ilham Safiudin', 'Jl Sutorejo 220', '082139196314', 'ilhamsafiudin@gmail.com', 'Surabaya', 'CDLNXZ', '2016-06-28 01:03:16', '2016-06-30 13:47:18', 1, 5, NULL),
(49, 'Singgih Pranowo', 'Cipinang Muara Jakarta', '087803625088', 'vizualshi@live.com', 'Jakarta', 'CKLNV1', '2016-06-28 02:40:06', '2016-06-28 19:09:35', 1, 1, NULL),
(50, 'Deory Pandu Putra W', 'Jl Embong Kenongo 79a', '085646765265', 'deoryzpandu@gmail.com', 'Surabaya', 'AKQUZ2', '2016-06-28 09:25:44', '2016-06-28 19:14:07', 1, 5, NULL),
(51, 'Yussyafrida Choiriizzati Rochmana', 'perum.GKGA k/13 kedanyang Gresik', '085732009237', 'yussyafrida02@yahoo.com', 'Gresik', 'JOQRS9', '2016-06-28 11:11:23', '2016-07-13 12:14:18', 1, 5, NULL),
(52, 'Nur Fadilah', 'Tales Langgar 73 A', '081938270919', 'nfadilah144@gmail.com', 'Surabaya', 'HMO234', '2016-06-28 11:12:52', '2016-07-13 13:14:24', 1, 5, NULL),
(53, 'Katsrur Rizqi Aviva', 'Padar lor kesamben ngoro Jombang', '083856712897', 'rizqiaviva@gmail.com', 'Jombang', 'AFGOPR', '2016-06-28 11:15:09', '2016-07-13 12:15:26', 1, 5, NULL),
(54, 'lintar febriyanto', 'simopomahan baru barat 1b no15', '085655090510', 'lintar007@gmail.com', 'surabaya', 'CHN459', '2016-06-28 11:37:33', '2016-06-28 19:09:11', 1, 5, NULL),
(163, 'Akbar Widiantri Ramadan', 'Manukan Mulyo 6H/5', '083830876711', 'ian.ramadhan97@yahoo.com', 'Surabaya', 'DFHL05', '2016-08-17 18:13:38', '2016-08-23 23:30:58', 0, 5, NULL),
(60, 'Faridatus Shofiyah', 'Dukuh pakis gg lebar 67 a', '081938083305', 'faridatusshofiyah29@gmail.com', 'surabaya', 'JKU347', '2016-06-28 16:57:03', '2016-06-28 19:10:14', 1, 5, NULL),
(162, 'akhmad noer affandy', 'sidoarjo', '08983532278', 'akhmad.affandy@ymail.com', 'sidoarjo', 'KLQRYZ', '2016-08-17 12:46:21', NULL, 0, 0, NULL),
(160, 'firman adetia putra', 'dukuh menanggal 8, gg klomprojoyo no 39', '081216571843', 'fadetia@gmail.com', 'surabaya', 'TUWZ23', '2016-08-15 08:22:17', '2016-08-18 10:59:49', 0, 5, NULL),
(75, 'Widya Satria Utama', 'Jalan Semampir Tengah 1 No 15 A Medokan Semampir Sukolilo', '085748413792', 'jiksunpark@gmail.com', 'Surabaya', 'AOTW78', '2016-06-30 07:49:57', '2016-07-11 23:03:41', 1, 5, NULL),
(71, 'Antony Afandy', 'Jl. Bogen 3 No 1A', '08175065350', 'qlixess@gmail.com', 'Surabaya', 'KOW049', '2016-06-28 19:20:54', '2016-07-02 20:39:04', 1, 1, NULL),
(159, 'agi lobita japtara martadinata', 'Jl.Kendal sari Gg.1 No.65D', '085791953193', 'dinataagi@gmail.com', 'Surabaya', 'CLNT26', '2016-08-14 20:00:00', '2016-08-26 18:44:00', 0, 5, NULL),
(156, 'Rachman Arief', 'Rungkut Tengah', '085731102722', 'ramanarif@gmail.com', 'Surabaya', 'AVXYZ6', '2016-08-14 13:31:36', NULL, 0, 0, NULL),
(158, 'Adiyono', 'Ds.KeboanAnom RT.01 RW.07', '085646083283', 'adi.akhi94@gmail.com', 'Sidoarjo', 'IKNXZ8', '2016-08-14 16:14:05', '2016-08-17 11:12:51', 0, 5, NULL),
(157, 'Unsa Rokhtiti', 'Jalan Keputih Gang III C NO 22 Surabaya', '082138579808', 'unsanakagawa@gmail.com', 'Surabaya', 'DPUVZ4', '2016-08-14 14:58:54', '2016-08-25 21:38:05', 0, 5, NULL),
(155, 'Nanang Fakhrur Rozi', 'Sidosermo', '085103886639', 'nfrozy@gmail.com', 'Surabaya', 'JLQSV6', '2016-08-14 13:27:36', NULL, 0, 0, NULL),
(195, 'thoriq aziz asuroh', 'jl.nyamplungan 6 no 51', '6281334197245', 'elsuroh@gmail.com', 'surabaya', 'HMQV36', '2016-08-22 12:29:44', '2016-08-24 15:26:11', 0, 5, NULL),
(89, 'yanuar kristian', 'Tanjung Arum Gang II RT 01 RW 01 ', '085649768668', 'bless.god34@yahoo.co.id', 'Sukorejo', 'EFG678', '2016-07-13 19:28:35', '2016-08-10 13:00:54', 1, 5, NULL),
(154, 'Erlangga Dwi Pratama', 'Pabean Asri blok I No 1', '087810427243', 'adikaraerlangga@gmail.com', 'Sidoarjo', 'IMQX38', '2016-08-14 12:46:32', '2016-08-20 20:56:32', 0, 5, NULL),
(152, 'Ahmad Dhani', 'Jln. Jeruk No 310 Lakarsantri, Surabaya.', '083854410173', 'slundupan.team@gmail.com', 'Surabaya', 'ACLSW6', '2016-08-13 19:50:27', '2016-08-26 18:42:55', 0, 5, NULL),
(150, 'Ferdy Ardyansyah', 'Mrutu Kalianyar 2 buntu no 50b', '082234076773', 'sindrawafersy@gmail.com', 'Surabaya', 'AOUV35', '2016-08-13 17:22:10', NULL, 0, 0, NULL),
(98, 'Faisal Mahadi', 'Tambakberas rt03 rw04', '081939146388', 'faisalmahadi126@gmail.com', 'jombang', 'GP0245', '2016-07-23 18:26:26', '2016-07-26 10:46:40', 1, 5, NULL),
(100, 'MARIANUS FRANS SISKUS KOTA', 'Jalan Tropodo 1 Waru-Sidoarjo', '089608429325', 'marianuskota@gmail.com', 'Sidoarjo', 'DGOQU4', '2016-08-03 18:48:19', NULL, 0, 0, NULL),
(101, 'Fanny Leonita Felysia', 'Gayungan', '081227097717', 'fannyleonitafelysia@gmail.com', 'Surabaya', 'OR0256', '2016-08-04 13:52:59', '2016-08-17 19:54:14', 1, 5, NULL),
(102, 'Muchammad Sholechuddin Hadi', 'jl.merpati no 26 desa punggul ', '085784454699', 'udinhadi@gmail.com', 'sidoarjo', 'CHIQ29', '2016-08-04 19:07:21', '2016-08-17 19:57:27', 0, 5, NULL),
(103, 'Eduardo Darma Widjaja', 'Wonorejo Permai Utara VI/16', '082257144689', 'edwdarma@gmail.com', 'Surabaya', 'AEFMU3', '2016-08-04 23:03:23', '2016-08-25 21:52:08', 0, 1, NULL),
(104, 'Mochamad Nor Fadillah', 'Griya Candi Asri', '089688070298', 'mochamadfadilah88@gmail.com', 'Sidoarjo', 'GMQW23', '2016-08-07 12:56:15', '2016-08-10 13:03:04', 0, 5, NULL),
(105, 'Rifardi Taufiq', 'kupang krajan kulon 4 no.15', '082225245631', 'rifardity@gmail.com', 'Surabaya', 'PV6789', '2016-08-07 14:21:44', '2016-08-25 17:25:25', 0, 5, NULL),
(108, 'zainal arifin', 'pucangan 3/45-b', '085 733 919651', 'zainul_arifin73@yahoo.com', 'surabaya', 'DFJNR0', '2016-08-08 23:01:42', NULL, 0, 0, NULL),
(107, 'Dody Andrianto', 'Wadungasih', '081939186240', 'yellowminion46@gmail.com', 'Sidoarjo', 'CIPY07', '2016-08-08 20:29:09', NULL, 0, 0, NULL),
(109, 'Andri Wicaksono', 'Kejawan Putih Tambak, Sukolilo, Surabaya ', '085358888864', 'andri.wicaksono6@gmail.com', 'Surabaya', 'ENVY13', '2016-08-09 00:23:05', '2016-08-19 16:39:46', 0, 5, NULL),
(110, 'Dody Andrianto', 'Wadungasih', '081939186240', 'dodyfcb.da@gmail.com', 'Sidoarjo', 'AEQX19', '2016-08-09 06:03:46', '2016-08-25 21:38:32', 0, 5, NULL),
(111, 'arivian nauval aualdi', 'Jl. Mastrip sumbermulyo No. 113 Rt 3/2', '082219279320', 'arivianauval@gmail.com', 'Lamongan', 'DHNVZ6', '2016-08-09 11:02:42', NULL, 0, 0, NULL),
(112, 'Sandy Prayogi', 'Jln. raung 2 No. 6 Wates', '082131076071', 'prayogi.sandy@gmail.com', 'Mojokerto', 'CNV058', '2016-08-10 00:52:21', '2016-08-11 13:01:30', 0, 1, NULL),
(113, 'Meigire Triassunu', 'Sidosermo Indah 3/25', '08175264041', 'm.tsunu@yahoo.com', 'Surabaya', 'IKLQ57', '2016-08-10 12:31:07', NULL, 0, 0, NULL),
(114, 'Syaifuddin Hadi Ichwanto', 'Perum. GKGA Blok AB no. 4', '082335048489', 'syaifudinhadi8@gmail.com', 'Gresik', 'ALOU26', '2016-08-10 17:12:33', '2016-08-20 20:58:53', 0, 5, NULL),
(115, 'Titus Kristanto', 'Tandes', '+6285730370856', 'tintus.chris@gmail.com', 'Surabaya', 'GHKTW3', '2016-08-11 00:47:00', NULL, 0, 0, NULL),
(116, 'Siti Biraza', 'Tenggilis Mejoyo Utara blok AC-15', '085246861863', 's.biraza@gmail.com', 'Surabaya', 'GHI048', '2016-08-11 00:58:08', NULL, 0, 0, NULL),
(117, 'H. Elfrianto Soleh', 'THR', '085655009393', 'gue.elfrianto@gmail.com', 'surabaya', 'CMSUZ9', '2016-08-11 06:54:57', NULL, 0, 0, NULL),
(118, 'Wira Syahputra', 'Perum Gading Fajar 1 blok b1 no 17', '+628179242629', 'wirasyahputra@gmail.com', 'Surabaya', 'ACMUX5', '2016-08-11 07:35:33', NULL, 0, 0, NULL),
(119, 'Rolan Oktafian', 'Pondok Benowo Indah - Blok DF/07', '08978388801', 'rolan.twin@gmail.com', 'Surabaya', 'DVZ367', '2016-08-11 07:44:05', NULL, 0, 0, NULL),
(121, 'Ivan V. Yasir', 'Sidoarjo', '085646022246', 'ivanyasir59@gmail.com', 'Surabaya', 'LNOPW7', '2016-08-11 09:54:45', NULL, 0, 0, NULL),
(126, 'Willis Yudhatama', 'Terusan 13/02, Gedeg', '085736061031', 'yudha.will.stay@gmail.com', 'Mojokerto', 'AFW159', '2016-08-11 14:27:41', '2016-08-11 20:35:36', 0, 5, NULL),
(229, 'Riand Pratama Putra', 'Jl.Gajah Magersari', '083857000613', 'riandpratama4570@gmail.com', 'Sidoarjo', 'AEKP09', '2016-08-25 19:19:23', NULL, 0, 0, NULL),
(124, 'Rahadian Bisma', 'Lidah Wetan IIa/3, Lakarsantri', '+6281234546374', 'djiebrats@gmail.com', 'Surabaya', 'AEFHLX', '2016-08-11 11:44:48', NULL, 0, 0, NULL),
(125, 'Achmad Andi Yulianto', 'Jalan Kapas Baru V/1', '08993490234', 'achmad.andiyulianto@gmail.com', 'Surabaya', 'DFG038', '2016-08-11 13:56:14', NULL, 0, 0, NULL),
(127, 'Maul Banyu Sugiarto', 'Jl Cimanuk 9', '085735232705', 'maul.sugiarto@gmail.com', 'Malang', 'EGKLQ3', '2016-08-11 14:31:36', '2016-08-11 20:34:28', 0, 5, NULL),
(230, 'Narendra Yogha Prathama', 'Jl. Tegal Mulyorejo Baru', '082243496396', 'masterthiefwtf@gmail.com', 'Surabaya', 'KMP359', '2016-08-25 21:35:35', '2016-08-25 22:23:51', 0, 5, NULL),
(129, 'Ar Firman Syahputra', 'JL. Amal Mulia no 6b', '081275498849', 'ar.firman.syahputra@gmail.com', 'Pekanbaru', 'FIRTV4', '2016-08-11 16:52:44', NULL, 0, 0, NULL),
(130, 'Eko Suhariyadi', 'Desa Sambungrejo RT.19 RW.08 No.25, Kec. Sukodono', '085646021202', 'eko.suhariyadi@gmail.com', 'Sidoarjo', 'KSZ149', '2016-08-11 17:20:51', '2016-08-12 15:08:23', 0, 5, NULL),
(131, 'Frenavit Putra', 'Banyuurip Wetan 3', '085648506364', 'mail@frenavit.com', 'Surabaya', 'DSVWX6', '2016-08-11 18:23:33', NULL, 0, 0, NULL),
(132, 'mochammad fakhrul islam', 'karang rejo timur gg buntu no. 2', '089682544722', 'fakhrulislam379@gmail.com', 'surabaya', 'LM0567', '2016-08-11 18:34:19', NULL, 0, 0, NULL),
(133, 'Harun Nur Rosyid', 'Dsn. Tanggul Wetan RT 04 RW 02 Tanggul Wonoayu', '085648191014', 'harunnurrosyid@gmail.com', 'Sidoarjo', 'AFIJN7', '2016-08-11 18:38:37', NULL, 0, 0, NULL),
(134, 'Indah Yulia Prafitaning Tiyas', 'Jojoran 1 Blok K, Kav. 30', '08815000055', 'indahyulia78@gmail.com', 'Surabaya', 'IJMRX5', '2016-08-11 19:08:36', NULL, 0, 0, NULL),
(135, 'Miftahul Huda', 'Tanah Merah 3c', '082331020093', 'capungtampan@gmail.com', 'Surabaya', 'ALMT06', '2016-08-11 19:27:39', NULL, 0, 0, NULL),
(136, 'Arif Ragil Pamungkas', 'Pandaan', '089623199126', 'arphiyour@gmail.com', 'Pasuruan', 'CDG357', '2016-08-11 22:59:23', NULL, 0, 0, NULL),
(137, 'yoga agung', 'jl kalianak timur lebar 173', '083856454459', 'yogaspenma48@gmail.com', 'surabaya', 'EL2346', '2016-08-12 06:22:57', '2016-08-19 15:55:00', 0, 5, NULL),
(138, 'M Isnaini Nur', 'Bulak rukem timur 2a/31a', '085230454900', 'gantengardian32@gmail.com', 'surabaya', 'LPQU17', '2016-08-12 09:15:34', NULL, 0, 0, NULL),
(139, 'Moch. Nur Fauzan W', 'Kapas Madya 3i No. 4', '0859-3136-0428', 'fauzan.widyanto7@gmail.com', 'Surabaya', 'ACEFNZ', '2016-08-12 09:16:51', NULL, 0, 0, NULL),
(140, 'janjam siswantoro', 'simo mulyo baru 06 F no 11', '082143014477', 'jsiswantoro2010@gmail.com', 'surabaya', 'FGUW89', '2016-08-12 10:18:46', '2016-08-25 09:18:50', 0, 5, NULL),
(141, 'Rizal Kurnia Pratama', 'Jl. Kayu 8B No. 9 RT 01 / RW 07 Kel. Suci Kec. manyar', '083831576466', 'rkurniapratama@gmail.com', 'Gresik', 'FHKMWZ', '2016-08-12 13:47:40', '2016-08-20 21:00:55', 0, 5, NULL),
(143, 'Heni Prasetyorini', 'Perumahan Graha Mitra Asri blok I nomer 04, jl. jugrug rejosari, kecamatan sambikerep, Surabaya, Jawa Timur', '087851781356', 'heni.prasetyorini@gmail.com', 'surabaya', 'EFNQ17', '2016-08-12 17:18:47', '2016-08-16 20:17:01', 0, 5, NULL),
(144, 'Petrus Budi Ekoprasetiyo', 'Perum Tegal Besar Permai Blok V no 11a', '081249170005', 'petrus.budi.ekoprasetiyo@gmail.com', 'Jember', 'DOUY49', '2016-08-12 17:31:11', '2016-08-25 11:29:18', 0, 5, NULL),
(145, 'NOVAN ARIBAWA', 'JL. BUNGUR X/26 JEMBER', '081914752525', 'jayawijaya2014@gmail.com', 'JEMBER', 'EGHIQ0', '2016-08-13 07:22:22', NULL, 0, 0, NULL),
(149, 'anis maulana', 'jalan simo hilir raya no 12', '08123431987', 'izammizer@gmail.com', 'surabaya', 'CHY345', '2016-08-13 15:10:53', NULL, 0, 0, NULL),
(147, 'Riyan Satria', 'Bumiarjo', '085321450680', 'riyan@kancaku.net', 'Surabaya', 'CDPTWZ', '2016-08-13 11:14:10', NULL, 0, 0, NULL),
(175, 'Muhammad Fathul Aziz', 'Jln.Pemuda No.68', '082227679937', 'adibrojab@gmail.com', 'Rembang', 'EUYZ59', '2016-08-20 20:17:13', NULL, 0, 0, NULL),
(176, 'Lukman Yassir Amali', 'Jalan Jatisari Besar 71B Pepelegi Waru', '083856058558', 'lukmanamali@gmail.com', 'Sidoarjo', 'FHKPTY', '2016-08-20 21:13:15', '2016-08-21 19:28:26', 0, 5, NULL),
(177, 'Noval Nauw', 'Barata Jaya 18 No.43 Surabaya', '082230881021', 'novalsmith69@gmail.com', 'Surabaya', 'FY1389', '2016-08-21 01:34:28', NULL, 0, 0, NULL),
(178, 'EMILIANO AMARAL', 'jl.klampis harapan', '082230360841', 'emiliano_amaral@yahoo.com', 'surabaya', 'AFQV28', '2016-08-21 01:47:05', NULL, 0, 0, NULL),
(179, 'Ahmad Fajar Magsyar', 'Talon Permai Blok D No 04 RT 02 RW 07', '082132796472', 'ahmadfajar1247@gmail.com', 'Bangkalan', 'AELRX7', '2016-08-21 07:40:23', NULL, 0, 0, NULL),
(180, 'Gamaria Mandar', 'Jl.ngangel', '0985213333911', 'gamariamandar20@gmail.com', 'Surabaya', 'KP4578', '2016-08-21 12:52:33', '2016-08-21 20:59:57', 0, 5, NULL),
(181, 'Dino Puguh Putro Sembodo', 'Munung Jatikalen', '082231487188', 'puguhmunung16@gmail.com', 'Nganjuk', 'INRTZ3', '2016-08-21 14:37:21', NULL, 0, 0, NULL),
(182, 'M Beny Pangestu', 'Jl, Gebang Wetan No.23-B Gebang Putih, Sukolilo, Surabaya', '082334901664', 'mbenypangestu@gmail.com', 'Surabaya', 'CFK789', '2016-08-21 15:45:49', '2016-08-25 22:20:29', 0, 5, NULL),
(183, 'Husni Alhamdani', 'Geger Bangkalan Madura 69152', '+6283853097075', 'dhanielluis@gmail.com', 'Bangkalan', 'KPSY39', '2016-08-21 15:46:36', NULL, 0, 0, NULL),
(184, 'Aries setiyawan', 'Sidokare asri blok bi no 6', '081330486884', 'aries.setiyawan@gmail.com', 'Sidoarjo', 'GMV789', '2016-08-21 16:00:43', NULL, 0, 0, NULL),
(185, 'ibnu fajar', 'jl. sawo 1a/2', '083854560095', 'ibnudrift@gmail.com', 'Kota Surabaya', 'PWY056', '2016-08-21 16:04:27', NULL, 0, 0, NULL),
(186, 'Kenny Everest K', 'Asrama Putra Kampus C, UNAIR', '082339081041', 'kennykarnama@gmail.com', 'Surabaya', 'AILTZ8', '2016-08-21 16:11:36', NULL, 0, 0, NULL),
(187, 'Muhammad Ibrahim', 'Jl. Raya Siman Km. 6 Ponorogo', '089630451450', 'islahboim@gmail.com', 'Ponorogo', 'ADHKSV', '2016-08-21 17:09:36', '2016-08-23 10:33:10', 0, 5, NULL),
(188, 'Iwan Hidayat', 'Jln. Siman, Km, 6 Universitas Darussalam Gontor', '085791674139', 'iwanhidayat196@gmail.com', 'Ponorogo', 'AKLMV0', '2016-08-21 17:16:11', '2016-08-22 10:26:37', 0, 5, NULL),
(189, 'achmad zainul falakh', 'dusun nglungu desa tambakrejo', '081515513154', 'kesatrianglungupertama@gmail.com', 'jombang', 'AQW059', '2016-08-21 17:44:16', NULL, 0, 0, NULL),
(190, 'Abdul Aziz', 'ds bulang kulon rt 01 rw 05 benjeng gresik', '085607774850', 'azizfrvr@gmail.com', 'gresik', 'HJR134', '2016-08-21 18:41:50', '2016-08-25 21:46:06', 0, 1, NULL),
(191, 'Deyana Kusuma Wardani', 'JL. Mangga V No H/52 Pondok Candra Indah, Waru', '082234577279', 'kusumadey@gmail.com', 'Sidoarjo', 'HTVY08', '2016-08-21 20:54:28', NULL, 0, 0, NULL),
(192, 'Satria Mulya Insanilah', 'Desa Kleco, RT 04, RW 01, Kec. Bendo, Kab. Magetan', '085708557952', 'satria.insanilah@gmail.com', 'Magetan', 'KQW149', '2016-08-21 21:30:43', '2016-08-25 21:45:48', 0, 5, NULL),
(193, 'hartanto', 'rungkut', '085730002090', 'hartanto.natan@yahoo.com', 'surabaya', 'HIMWX4', '2016-08-22 00:19:30', '2016-08-26 17:19:08', 0, 5, NULL),
(194, 'Wahyu Wicaksono', 'Jl. Tambak Medokan Ayu 1D No. 23', '087855584477', 'wahyu.moron@gmail.com', 'Surabaya', 'EIR178', '2016-08-22 09:31:48', NULL, 0, 0, NULL),
(196, 'Luqmanul Hakim', 'jl. Gresik ppi 7/31', '081235718945', 'umberela21@gmail.com', 'Surabaya', 'GMOPQT', '2016-08-22 12:45:34', '2016-08-24 11:28:33', 0, 5, NULL),
(197, 'Prayogi Wijaya', 'Kendung Jaya Gg 15 no. 5', '083831015598', 'prayogiwijaya@hotmail.com', 'Surabaya', 'DJLYZ0', '2016-08-22 13:05:34', '2016-08-24 15:29:38', 0, 5, NULL),
(198, 'Rianul Abrol', 'Srengganan Kidul 15a', '83830096403', 'honestly@protonmail.com', 'Surabaya', 'IMVW06', '2016-08-22 13:37:04', '2016-08-24 15:30:22', 0, 5, NULL),
(206, 'Kamal Adi Saputra', 'Jl. Mojo V No. 8a', '081349725766', 'kmael37@gmail.com', 'Surabaya', 'EIJPS4', '2016-08-22 21:55:15', '2016-08-23 23:28:28', 0, 5, NULL),
(207, 'Imanuel Ronaldo', 'Jl. Sutorejo selatan XI no 18', '082257549125', 'imanuelronaldo@gmail.com', 'Surabaya', 'DKY167', '2016-08-22 22:09:44', NULL, 0, 0, NULL),
(202, 'M Nur Firdaus Izrullah', 'jemur andayani x no.15-17', '08113322518', 'izrullah.firdaus@gmail.com', 'surabaya', 'DRV235', '2016-08-22 18:08:08', '2016-08-22 22:01:50', 0, 5, NULL),
(204, 'Joko Priyono', 'Greges Barat 2/24', '085706026689', 'muhjecky10@gmail.com', 'surabaya', 'FJLSY6', '2016-08-22 18:18:45', '2016-08-24 15:28:18', 0, 5, NULL),
(208, 'Damon Zhanuarista', 'Kedungdoro Gg VIII/24D RT 008/RW 011 Kel. Sawahan Kec. Sawahan', '085855619556', 'sandynicko@windowslive.com', 'Surabaya', 'GMPSW7', '2016-08-22 23:15:42', '2016-08-25 21:46:23', 0, 1, NULL),
(209, 'Jefry Dewangga', 'Candipari 07/03 Porong', '085645323695', 'jefrydco@gmail.com', 'Sidoarjo', 'ACKR47', '2016-08-23 04:59:10', '2016-08-23 18:33:40', 0, 5, NULL),
(210, 'Vincent Edy Hartono', 'Legian I/ H3-16', '082140755015', 'ehartono2009@gmail.com', 'Surabaya', 'DMNT36', '2016-08-23 05:03:23', '2016-08-23 13:19:32', 0, 5, NULL),
(211, 'Fatah Ahmad Fadholi', 'Jalan Jemurwonosari gg. Masjid no 39', '089679323241', 'fatah.ahmad.fadholi@gmail.com', 'Surabaya', 'CT3479', '2016-08-23 05:26:19', '2016-08-25 12:11:55', 0, 5, NULL),
(212, 'Muhammad Lajuwardi Nugraha  ', 'Jln.  Siman,  km.  6, universitas darussalam Ponorogo ', '081332627424', 'nugrahalazuardim@gmail.com', 'Ponorogo ', 'QSZ489', '2016-08-23 10:48:11', '2016-08-25 14:01:51', 0, 5, NULL),
(213, 'Mochamad muchlisun', 'Jl menganti babatan 2 gang 2', '081358477595', 'Xherdanshaqiri61@gmail.com', 'Surabaya', 'GJQX23', '2016-08-23 14:24:31', NULL, 0, 0, NULL),
(214, 'Reyhan Alphard Savero', 'PONDOK SIDOKARE ASRI HH 14', '085852000360', 'newrey9227@gmail.com', 'SIDOARJO', 'NQSX18', '2016-08-23 20:20:01', NULL, 0, 0, NULL),
(215, 'Soleh Elfrianto Hardiyono', 'NGAGLIK I ', '085655009393', 'disawatsandal@gmail.com', 'Surabaya', 'CJPRV2', '2016-08-23 21:03:39', NULL, 0, 0, NULL),
(216, 'Aflah Taqiu Sondha', 'Rt 03 rw 01 kajar tengguli prambon', '085745736411', 'aflahtaqiusondha@gmail.com', 'Sidoarjo', 'EILM48', '2016-08-23 22:14:24', '2016-08-24 23:15:57', 0, 5, NULL),
(217, 'Agus Setyawan ', 'Kertajaya', '081336000652', 'cakagussetyawan@gmail.com', 'Surabaya', 'UV0235', '2016-08-24 06:10:59', NULL, 0, 0, NULL),
(218, 'Lona Putri Rikasasi', 'Kramat Jegu RT/RW 004/005', '085732327930', 'rikasasi@gmail.com', 'Sidoarjo', 'AKL045', '2016-08-24 09:50:17', '2016-08-24 16:25:02', 0, 1, NULL),
(219, 'Sigit Wisnu Ibrahim', 'Jl. Golf 6 No 45 ', '085645119007', 'sigitwi257@gmail.com', 'Surabaya', 'DGJKLR', '2016-08-24 09:56:14', '2016-08-24 16:25:34', 0, 1, NULL),
(220, 'Dedik Sugiharto', 'Bejagung, Semanding', '085730353220', 'tsimpleplain@gmail.com', 'Tuban', 'CIKM59', '2016-08-25 05:19:39', NULL, 0, 0, NULL),
(221, 'Yudhistira Patrick Piter', 'Jl. Tenggilis Mejoyo 150', '085252212221', 'yudhistira.patrick@gmail.com', 'Surabaya', 'NQTWY1', '2016-08-25 10:01:28', '2016-08-25 21:52:27', 0, 1, NULL),
(222, 'Andaru Ismu Wicaksono', 'Kapas Madya 1F no. 24', '082244787644', 'andaruismuwicaksono@yahoo.co.id', 'Surabaya', 'EFQUY7', '2016-08-25 10:40:03', '2016-08-25 21:51:40', 0, 5, NULL),
(223, 'Ahmed Iswandi Mirad', 'Jl. Tambak Wedi Tengah Gang 7 No.24', '08114163713', 'ahmediswandi@gmail.com', 'Surabaya', 'CGU049', '2016-08-25 11:43:46', '2016-08-25 12:13:59', 0, 5, NULL),
(224, 'Syahrul Arifuddin', 'Gebang Wetan 23B', '081357871917', 'sayamanusia2000@gmail.com', 'Surabaya', 'HJNRY7', '2016-08-25 11:44:33', '2016-08-25 21:37:45', 0, 5, NULL),
(226, 'ika rahma', 'jl.raya kludan 21 tanggulangin sidoarjo', '089658414241', 'ikaharuki@gmail.com', 'sidoarjo', 'DHUX49', '2016-08-25 13:12:29', NULL, 0, 0, NULL),
(227, 'Nur Hakim Ramadhan', 'Jl Kusuma Bangsa No 03', '089622399250', 'nicaputri14@gmail.com', 'Bangkalan', 'FGRWY3', '2016-08-25 14:31:18', NULL, 0, 0, NULL),
(228, 'Wahyudi Andrian', 'Jl. Gunung Ringgit No. 11 Klakah Lumajang', '085231099854', 'whydandrian@gmail.com', 'Lumajang', 'DEGSY6', '2016-08-25 14:32:39', NULL, 0, 0, NULL),
(231, 'Soleh Elfrianto Hardiyono', 'NGAGLIK I', '085655009393', 'ngaglikgallery@gmail.com', 'Surabaya', 'FHLV58', '2016-08-25 21:47:37', '2016-08-25 22:17:40', 0, 5, NULL),
(232, 'Rachmad Syarul Hidayat', 'Ds. Janti 13/03 Kec. Tarik', '085854083864', 'rachmad.eepis@gmail.com', 'Sidoarjo', 'CKOP17', '2016-08-25 21:49:43', '2016-08-26 15:52:21', 0, 5, NULL),
(233, 'Dwi Priwandani', 'Jalan Pumpungan III/No.19, Sukolilo, Surabaya', '081913843777', 'priwandanidwi@gmail.com', 'Indonesia ', 'NPT679', '2016-08-25 22:37:49', NULL, 0, 0, NULL),
(234, 'Eldosan Wira Gessa', 'Taman Puspa Raya c3/1', '087853170424', 'eldosanwiragessa@gmail.com', 'Surabaya', 'DHSX26', '2016-08-28 09:28:47', NULL, 0, 0, NULL),
(235, 'Eldosan Wira Gessa', 'Taman Puspa Raya c3/1', '087853170424', 'eldosanwiragessa@gmail.com', 'Surabaya', 'AKOT35', '2016-08-28 09:30:53', NULL, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `value` text NOT NULL,
  `autoload` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`, `autoload`) VALUES
(1, 'email-from', 'info@femalegeek-sby.dev.php.or.id', 1),
(2, 'email-subject-registration', 'Konfirmasi Registrasi FemaleGeek Surabaya', 1),
(3, 'email-template-registration', 'Hi [nama],\r\nPendaftaran anda berhasil, dengan data sebagai berikut\r\nNama: [nama]\r\nEmail: [email]\r\nAlamat: [alamat]\r\nKota: [kota]\r\nNomor Handphone: [hp]\r\nKode Registrasi: [kode]\r\n\r\n===================================\r\nFee akan terbagi menjadi dua kategori :\r\nPelajar / Mahasiswa : IDR 50,000\r\nNon Pelajar / Non Mahasiswa : IDR 75,000\r\n\r\nSilahkan melakukan pembayaran melalui nomor rekening sebagai berikut :\r\nNomor Rekening: BCA 325 1222 400 an. Kiki Indah Novitasari\r\nSertakan kode registrasi di keterangan transfer\r\n===================================\r\n\r\nSetelah melakukan pembayaran silahkan melakukan konfirmasi dengan menyertakan bukti pembayaran dan kartu pelajar jika masih pelajar dengan menghubungi nomor telepon atau Line sebagai berikut :\r\nIlla 085810187939 / line @illarhs / Email : illa@femalegeek-sby.dev.php.or.id\r\nKiki 081289846568 / line @ivonesarii / Email : kiki@femalegeek-sby.dev.php.or.id\r\n===================================\r\n\r\nPanitia Event FemaleGeek Surabaya', 1),
(4, 'sms-template-registration', 'Hi [nama], registrasi anda telah berhasil dengan kode regsitrasi [kode]. \r\nInfo untuk pembayaran cek email atau di folder spam email anda\r\nTerima kasih\r\nPanitia Event FemaleGeek Surabaya', 1),
(5, 'email-subject-invitation', 'FemaleGeek Surabaya Invitation', 1),
(6, 'email-template-invitation', 'Hi [nama],\r\nBerikut adalah dokumen undangan untuk event FemaleGeek Surabaya\r\n[urlundangan]\r\n\r\n===================================\r\nPanitia Event FemaleGeek Surabaya', 1),
(7, 'sms-template-invitation', 'Hi [nama], dokumen undangan anda sudah siap silahkan download di sini [urlundangan]\r\nPanitia Event FemaleGeek Surabaya', 1),
(8, 'email-subject-pembayaran-berhasil', 'Konfirmasi Pembayaran', 1),
(9, 'email-template-pembayaran-berhasil', 'Hi [nama],\r\nPembayaran registrasi event FemaleGeek Surabaya Anda telah berhasil.\r\nBerikut adalah dokumen undangan untuk event FemaleGeek Surabaya\r\n[urlundangan]\r\nTerima kasih\r\n\r\n===================================\r\nPanitia Event FemaleGeek Surabaya', 1),
(10, 'sms-template-pembayaran-berhasil', 'Hi [nama], pembayaran registrasi anda berhasil. Terima kasih.\r\nPanitia FemaleGeek Surabaya', 1),
(11, 'email-subject-pembayaran-gagal', 'Konfirmas Pembayaran', 1),
(12, 'email-template-pembayaran-gagal', 'Hi [nama],\r\nPembayaran Anda gagal, pastikan pembayaran anda benar \r\nTerima kasih\r\n\r\n===================================\r\nPanitia Event FemaleGeek Surabaya', 1),
(13, 'sms-template-pembayaran-gagal', 'Hi [nama], pembayaran Anda gagal, silahkan mencoba lagi. Terima kasih.\r\nPanitia Event FemaleGeek Surabaya', 1),
(14, 'email-subject-konfirmasi-kehadiran', 'Konfirmasi Kehadiran', 1),
(15, 'email-template-konfirmasi-hadir', 'Hi [nama],\r\nUntuk memastikan kehadiran Anda silahkan klik url address dibawah\r\n[linkkonfirmasi]\r\nuntuk konfirmasi tidak hadir silahkan klik url dibawah\r\n[linkunkonfirmasi]\r\nterima kasih\r\n\r\n===================================\r\nPanitia Event FemaleGeek Surabaya', 1),
(16, 'sms-template-konfirmasi-hadir', 'Hi [nama], silahkan melakukan konfirmasi kehadiran dengan membuka link ini [linkkonfirmasi] atau konfirmasi tidak hadir di link ini [linkunkonfirmasi]\r\nPanitia Event FemaleGeek Surabaya', 1),
(17, 'mailer-username', 'femalegeeksurabaya@gmail.com', 1),
(18, 'mailer-password', 'icha200677', 1),
(19, 'zenziva-userkey', '9kpaeh', 1),
(20, 'zenziva-passkey', 'icha200677', 1),
(21, 'nama-from', 'Panitia FemaleGeek Surabaya', 1);

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE IF NOT EXISTS `userlogin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` text NOT NULL,
  `email` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`id`, `username`, `password`, `email`) VALUES
(1, 'admin', '$2y$11$xj2oH9meY6j7GnXgN0JBpuuZpyZV2lTeu46WBqQXiz0GUPb1PXmEm', 'admin@domain.tld');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
