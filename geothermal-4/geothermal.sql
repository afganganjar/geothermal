-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 17 Nov 2013 pada 14.14
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `geothermal`
--
CREATE DATABASE `geothermal` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `geothermal`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_data_geokimia_geofisika`
--

CREATE TABLE IF NOT EXISTS `t_data_geokimia_geofisika` (
  `id_data_geokimia` int(11) NOT NULL AUTO_INCREMENT,
  `id_wkp` int(11) NOT NULL,
  `tahun_rilis` year(4) NOT NULL,
  `jenis_analisa` varchar(100) NOT NULL,
  `nama_pembuat` varchar(100) NOT NULL,
  `sumber_data` varchar(255) NOT NULL,
  `gambar` text,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id_data_geokimia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data untuk tabel `t_data_geokimia_geofisika`
--

INSERT INTO `t_data_geokimia_geofisika` (`id_data_geokimia`, `id_wkp`, `tahun_rilis`, `jenis_analisa`, `nama_pembuat`, `sumber_data`, `gambar`, `status`) VALUES
(1, 20, 2005, 'Geokimia Air', 'PT Geoservices', 'Bedugul Geothermal Prospect and Development', NULL, 1),
(2, 20, 2005, 'Geokimia Gas', 'PT Geoservices', 'Bedugul Geothermal Prospect and Developments', NULL, 1),
(4, 2, 1996, 'Geokimia Gas', 'Supranto,Sudjatmiko,Budianto Toha,Djoko Wintolo,Idrus Alhamid', 'Proposed Empirical Gas Geothermometer Using Multidimensional Approach', NULL, 1),
(5, 12, 2007, 'Geokimia Air', 'James Stimac,Gregg Nordquist,Aquardi Suminar,Lutfhie Sirad-Azwar', 'An Overview of the Awibengkok Geothermal System, Indonesia', NULL, 1),
(6, 38, 2010, 'Geokimia Air', 'Geologi ITB', 'Characteristics of Surface Manifestation, Cisolok, Sukabumi, West Java: With Relation to Cisolok Geothermal System', NULL, 1),
(7, 9, 2010, 'Kompilasi', 'Mulyanto,A. Nani. Agus A.Zuhro, Y. Ahmad', 'Surface Thermal Manifestation Monitoring of Kamojang Geothermal Field', NULL, 1),
(8, 11, 2002, 'Geokimia Air', 'J.N.Moore,B.W.Christenson,P.R.L.Browne,S.J.Lutz', 'The Mineralogic Consequences and Behavior of Descending Acid-Sulfate Waters: An Example from the Karaha-Telaga Bodas Geothermal System, Indonesia', NULL, 1),
(9, 12, 2007, 'Anomali Tahanan Jenis', 'James Stimac,Gregg Nordquist,Aquardi Suminar,Lutfhie Sirad-Azwar', 'An Overview of the Awibengkok Geothermal System, Indonesia', NULL, 0),
(10, 12, 2008, 'Anomali Tahanan Jenis', 'James Stimac,Gregg Nordquist,Aquardi Suminar,Lutfhie Sirad-Azwar', 'An Overview of the Awibengkok Geothermal System, Indonesia', NULL, 0),
(11, 10, 2010, 'Anomali Tahanan Jenis', 'Sri Rejeki,Dave Rohrs,Gregg Nordquist,Agus Fitriyanto', 'Geologic Conceptual Model Update of the Darajat Geothermal Field, Indonesia', NULL, 0),
(12, 10, 2010, 'Anomali Tahanan Jenis', 'Sri Rejeki,Dave Rohrs,Gregg Nordquist,Agus Fitriyanto', 'Geologic Conceptual Model Update of the Darajat Geothermal Field, Indonesia', NULL, 0),
(13, 10, 2010, 'Anomali Gaya Berat', 'Sri Rejeki,Dave Rohrs,Gregg Nordquist,Agus Fitriyanto', 'Geologic Conceptual Model Update of the Darajat Geothermal Field, Indonesia', NULL, 0),
(14, 9, 2000, 'Anomali Gaya Berat', 'PPPTMGB LEMIGAS', 'MISE-A-LA-MASSE and Gravity Data Surveys at the Kamojang Geothermal Field', NULL, 0),
(15, 9, 2004, 'Anomali Tahanan Jenis', 'Agus Aromaharmuzi Zuhro', 'Numerical Modelling of the Kamojang Geothermal System, Indonesia', NULL, 0),
(16, 8, 2010, 'Anomali Gaya Magnet', 'Geotermal ITB', 'Laporan Patuha Kelompok', NULL, 0),
(17, 8, 2010, 'Anomali Gaya Magnet', 'Geotermal ITB', 'Laporan Patuha Kelompok', NULL, 0),
(18, 15, 2000, 'Geokimia Air', 'VSL', 'Crater lakes of Java: Dieng, Kelud and Ijen', NULL, 1),
(19, 15, 2000, 'Geokimia Gas', 'VSL', 'Crater lakes of Java: Dieng, Kelud and Ijen', NULL, 1),
(20, 15, 2000, 'Geokimia Gas', 'CCVG-IAVCEI', 'Crater lakes of Java: Dieng, Kelud and Ijen', NULL, 1),
(21, 15, 2000, 'Lokasi Manifestasi', 'Manfred J.Van Bergen,Alain Bernard,Sri Sumarti,Terry Sriwarna,Kastiman Sitorus', 'Crater lakes of Java: Dieng,Kelud and Ijen', NULL, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_data_geologi`
--

CREATE TABLE IF NOT EXISTS `t_data_geologi` (
  `id_data_geologi` int(11) NOT NULL AUTO_INCREMENT,
  `id_wkp` int(11) NOT NULL,
  `tahun_rilis` year(4) NOT NULL,
  `jenis_gambar` varchar(50) NOT NULL,
  `sumber_data` varchar(255) NOT NULL,
  `gambar` longblob,
  PRIMARY KEY (`id_data_geologi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `t_data_geologi`
--

INSERT INTO `t_data_geologi` (`id_data_geologi`, `id_wkp`, `tahun_rilis`, `jenis_gambar`, `sumber_data`, `gambar`) VALUES
(1, 12, 2010, 'Peta Struktur', 'Integration of Surface and Well Data to Determine Structural Controls on Permeability at Salak (Awibengkok), Indonesia', NULL),
(2, 12, 2007, 'Peta Geologi', 'An Overview of the Awibengkok geothermal system, Indonesia', NULL),
(3, 12, 2000, 'Litologi Batuan', 'The Awibengkok Core Research Program, pt. II - Stratigraphy Volcanic Facies, and Hydrothermal Alteration', NULL),
(4, 12, 2000, 'Peta Geologi', 'The Awi 1-2 Core Research Program: Part I, Geologic Overview of the Awibengkok Geothermal Field, Indonesia', NULL),
(5, 12, 1995, 'Litologi Batuan', 'The Awibengkok, Indonesia, Geothermal Research Project', NULL),
(6, 38, 2007, 'Mineral', 'Geologi ITB', NULL),
(7, 10, 2010, 'Litologi Batuan', 'Sri Rejeki,Dave Rohrs,Gregg Nordquist,Agus Fitriyanto', NULL),
(8, 9, 2003, 'Peta Struktur', 'Penanggulangan Problem Geologi dalam Operasi Pemboran Sumur di Blok Timur Area Geothermal Kamojang Jawa Barat Indonesia', NULL),
(9, 8, 2010, 'Peta Geologi', 'Laporan Patuha Kelompokku', NULL),
(10, 8, 2010, 'Peta Geologi', 'Laporan Patuha Kelompokku', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_dominasi_uap`
--

CREATE TABLE IF NOT EXISTS `t_dominasi_uap` (
  `id_dominasi_uap` int(11) NOT NULL AUTO_INCREMENT,
  `id_wkp` int(11) NOT NULL,
  `batas_bawah` varchar(20) DEFAULT NULL,
  `batas_atas` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_dominasi_uap`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_model_konseptual`
--

CREATE TABLE IF NOT EXISTS `t_model_konseptual` (
  `id_model_konseptual` int(11) NOT NULL AUTO_INCREMENT,
  `id_wkp` int(11) NOT NULL,
  `tahun_publikasi` year(4) NOT NULL,
  `nama_pembuat` varchar(100) NOT NULL,
  `sumber_literatur` varchar(100) NOT NULL,
  `gambar` longtext,
  PRIMARY KEY (`id_model_konseptual`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data untuk tabel `t_model_konseptual`
--

INSERT INTO `t_model_konseptual` (`id_model_konseptual`, `id_wkp`, `tahun_publikasi`, `nama_pembuat`, `sumber_literatur`, `gambar`) VALUES
(1, 20, 2005, 'A. Mulyadi, Edwin J. Joenoes, Ni Made Widiasari', 'Bedugul Geothermal Prospect and Developments', NULL),
(2, 3, 1995, 'Mulyadi', 'Interpretation of Geoelectric Structure at Hululais Prospect Area, South Sumatra', NULL),
(3, 12, 2008, 'J. Stimac,G. Nordquist,A. Suminar,L. Sirad-Azwar', 'An Overview of the Awibengkok Geothermal System, Indonesia', NULL),
(4, 12, 2010, 'J. Stimac,M. Baroek,A. Suminar,B. Sagala', 'Integration of Surface and Well Data to Determine Structural Controls on Permeability at Salak (Awib', NULL),
(5, 12, 2012, 'Geotermal ITB', 'Kajian Prospek Panas Bumi di Daerah Jawa dan Bali -unpublished', NULL),
(6, 12, 1998, 'Jeffrey B. Hulen dan Timothy D. Anderson', 'The Awibengkok, Indonesia, Geothermal Research Project', NULL),
(7, 38, 2008, 'Suryatini', 'Laporan Potensi Energi Panas Bumi Cisolok-Cisukarame -unpublished', NULL),
(8, 38, 2010, 'Wulandari Mandradewi dan Niniek Rina Herdianita', 'Characteristics of Surface Manifestation, Cisolok, Sukabumi, West Java : With Relation to Cisolok Ge', NULL),
(9, 38, 2008, 'Suryantini', 'Laporan Potensi Energi Panas Bumi Cisolok-Cisukarame -unpublished', NULL),
(10, 38, 2012, 'Geotermal ITB', 'Kajian Prospek Panas Bumi di Daerah Jawa dan Bali -unpublished', NULL),
(11, 38, 2012, 'Geotermal ITB', 'Kajian Prospek Panas Bumi di Daerah Jawa dan Bali -unpublished', NULL),
(12, 38, 2009, 'UPN', 'Potensi Energi Panas Bumi Daerah Cisolok-Cisukarame  (Jawa Barat) -unpublished', NULL),
(13, 38, 2008, 'Geotermal ITB', 'Laporan Potensi Energi Panas Bumi Cisolok-Cisukarame -unpublished', NULL),
(14, 10, 2000, 'Arias Sugandhi dan Jeffrey Roberts', '''Gas Breakthrough'' During Drilling at Darajat and Implications for Steam Field Management', NULL),
(15, 10, 2010, 'S. Rejeki, D.Rohrs, G. Nordquist, A. Fitriyanto', 'Geologic Conceptual Model Update of the Darajat Geothermal Field', NULL),
(16, 10, 2012, 'Geotermal ITB', 'Kajian Prospek Panas Bumi di Daerah Jawa dan Bali -unpublished', NULL),
(17, 9, 2012, 'Geotermal ITB dan PGE', 'Sustainable Development of the Kamojang Geothermal Field', NULL),
(18, 9, 2004, 'Agus Aromaharmuzi Zuhro', 'Numerical Modelling of The Kamojang Geothermal System, Indonesia', NULL),
(19, 11, 2002, 'Allis dkk', 'Gravity Modelling of the Karaha - Telaga Bodas Geothermal System Indonesia', NULL),
(20, 15, 1995, 'R.Pudjianto,M.Suroto,M.Higashihara,M.Fukuda,Akhadiana,J.Ong', 'Hydrocarbons in Soil Gas as Pathfinders in Geothermal Resource Surveys in Indonesia', NULL),
(21, 15, 2006, 'JBIC', 'Feasibility Study for Dieng Nos.4, 5 and 6 Units Geothermal Power Development -unpublished', NULL),
(22, 15, 2006, 'JBIC', 'Feasibility Study for Dieng Nos.4, 5 and 6 Units Geothermal Power Development -unpublished', NULL),
(23, 15, 2000, 'Manfred J.V.B,A. Bernard,S.Sumarti,T. Sriwarna,K.Sitorus', 'Crater lakes of Java: Dieng, Kelud and Ijen', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_perusahaan_pengembang`
--

CREATE TABLE IF NOT EXISTS `t_perusahaan_pengembang` (
  `id_perusahaan_pengembang` int(11) NOT NULL,
  `nama_perusahaan` varchar(100) DEFAULT NULL,
  `alamat1` varchar(255) DEFAULT NULL,
  `alamat2` varchar(255) DEFAULT NULL,
  `telp` varchar(30) DEFAULT NULL,
  `fax` varchar(30) DEFAULT NULL,
  `website` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_perusahaan_pengembang`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_perusahaan_pengembang`
--

INSERT INTO `t_perusahaan_pengembang` (`id_perusahaan_pengembang`, `nama_perusahaan`, `alamat1`, `alamat2`, `telp`, `fax`, `website`) VALUES
(4, 'Pemerintah(lelang/persiapan lelang)', '!!Tolong jangan dihapus!!', '!!Tolong jangan dihapus!!', '', '', ''),
(5, 'PT.Pertamina Geothermal Energy', 'Gedung Menara Cakrawala/Skyline Building Lt.8, Jl MH Thamrin No.9 Jakarta 10340', '', '021-3983 3222', '021-383 3230', 'www.pgeindonesia.com'),
(6, 'PT.Chevron Geothermal', 'Menara Kantor Sentral Senayan-I Lt. 11, Jl. Asia Afrika No.8 Jakarta', '', '021-5798 4141', '021-5798 4295', 'www.chevronindonesia.com'),
(7, 'PT.Yala Tekno Geothermal', 'Jl Parkit I No. 10 Bintaro Jaya Sektor 2, Jakarta Selatan', 'Jl Praja Dalam D No.3 Kebayoran Lama, Jakarta Selatan', '021-7297 868', '021-7238 515', ''),
(8, 'PT.Wahana Sambadhasakti', 'Wisma Eka Karma, Jl. Kapten P. Tendean No.15, Jakarta', '', '021-7942 714', '021-7942 715', ''),
(9, 'PT.Geo Dipa Energi', 'Recapital Building Lt.8, Jl. Aditiawarman Kav.55 Jakarta Selatan 12160', '', '021-7245 673', '021-7247 539', 'www.geodipa.co.id'),
(10, 'PT.Bali Energy Limited', 'Jl Ridwan 1 No.4 Gorgol Utara, Jakarta Selatan 12210', '', '021-5790 1066', '021-5790 1018', ''),
(11, 'PT.PLN (Persero)', 'Jl. Trunojoyo Blok M 1/135 Kebayoran Baru, Jakarta Selatan 12160', '', '021-725 5185', '021-726 1122', 'www.pln.co.id'),
(13, 'PT.Sabang Geothermal Energy', 'Gedung Menara Kuningan Jl. HR Rasuna Said Blok X-7 Kav. 5 Jakarta Selatan 12940', '', '021-3001 5973', '021-3001 5972', ''),
(14, 'PT.Sorik Merapi Geothermal Power', 'Cyber 2 Lt.17 Floor. Jl.H. R. Rasuna Said Blok X-5, Jakarta 12950', '', '021-5799 8200', '021-5799 8201', ''),
(15, 'PT.Supreme Energy', 'Indonesia Stock Exchange Tower 1, Lt.29, Jl. Jendral Sudirman Kav. 52-53, Jakarta 12910', '', '021-5155 222', '021-5155 333', 'www.supreme-energy.com'),
(16, 'PT.Sintesa Banten Geothermal', 'Menara Duta Building Lt.3, Jl. H.R. Rasuna Said Kav. B9, Jakarta Pusat 12910', '', '021-5225 080', '021-5229 572', 'www.sintesageothermal.com'),
(17, 'PT.Jabar Rekind Geothermal', 'Jl. Kalibata Timur No.36, Jakarta Selatan', '', '021-7988 700', '021-7918 0913', 'www.rekayasa.com'),
(18, 'PT.Wijaya Karya Jabar Power', 'Jl.Adipati Kertabumi No.21, Bandung', '', '022-4220 251', '022-4265 158', 'www.wika.co.id'),
(19, 'PT.Giri Indah Sejahtera', 'Menara Rajawali Lt.19, Jl. Mega Kuningan Plot 3.1, Jakarta Selatan', '', '021-5763 073', '021-5761 735', ''),
(20, 'PT.Sejahtera Alam Energy', 'Wisma Ekakarma, Jl. Kapten Tendean No. 15 Jakarta', '', '021-7942 715', '021-7942 714', 'www.saegeothermal.co.id'),
(21, 'PT.Spring Energy Sentosa', 'Komplek Perkantoran Jurnatan B 28, Semarang', '', '024-3545 842', '024-3543 145', 'www.gucigeothermal.com'),
(22, 'PT.Medco Cahaya Geothermal', 'Jl. Mirinda C-7 No. 11, Jakarta Barat 11820', '', '021-5595 4328', '021-5595 2088', ''),
(23, 'PT.Bakrie Darmakarya Energi', 'Menara Duta  Lt.2, Jl. H. R. Rasuna Said Kav. B-9, Jakarta', '', '021-5800 861', '021-5257 922', ''),
(24, 'PT.Pacific Geo Energy', 'Arthaloka Building Lt.16, Jl. Jendral Sudirman Kav. 2, Jakarta Pusat 10220', '', '021-2511 522', '021-2511 378', ''),
(25, 'PT.Sokoria Geothermal Indonesia', 'Menara Duta Building Lt.2, Jl. Rasuna Said Kav. B-9, Jakarta 12910', '', '021-5200 861', '021-5257 922', ''),
(26, 'PT.Westindo Utama Karya', 'Patra Office Tower Lt.8 Room 807F, Jl. Jendral Gatot Subroto Kav. 32-34, Jakarta 12950', '', '021-5290 0017', '021-5290 0647', ''),
(27, 'PT.Star Energy Geothermal', 'Wisma Barito Pasific Star Energy Tower Lt.8-11, Jl. Jendral S. Parman Kav. 62-63, Jakarta 11410', '', '021-5325 828', '021-5307 928', 'www.starenergy.co.id'),
(28, 'PT.Sarulla Operation Limited', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_provinsi`
--

CREATE TABLE IF NOT EXISTS `t_provinsi` (
  `id_provinsi` int(11) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `id_pulau` int(11) NOT NULL,
  PRIMARY KEY (`id_provinsi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_provinsi`
--

INSERT INTO `t_provinsi` (`id_provinsi`, `provinsi`, `id_pulau`) VALUES
(1, 'Bangka Belitung', 6),
(2, 'Bengkulu', 6),
(3, 'Jambi', 6),
(4, 'Kepulauan Riau', 6),
(5, 'Lampung', 6),
(6, 'Nanggroe Aceh Darrussalam', 6),
(7, 'Riau', 6),
(8, 'Sumatera Barat', 6),
(9, 'Sumatera Selatan', 6),
(10, 'Sumatera Utara', 6),
(11, 'Banten', 1),
(12, 'DI Yogyakarta', 1),
(13, 'DKI Jakarta', 1),
(14, 'Jawa Barat', 1),
(15, 'Jawa Tengah', 1),
(16, 'Jawa Timur', 1),
(17, 'Kalimantan Barat', 2),
(18, 'Kalimantan Tengah', 2),
(19, 'Kalimantan Selatan', 2),
(20, 'Kalimantan Timur', 2),
(21, 'Gorontalo', 5),
(22, 'Sulawesi Barat', 5),
(23, 'Sulawesi Selatan', 5),
(24, 'Sulawesi Tengah', 5),
(25, 'Sulawesi Tenggara', 5),
(26, 'Sulawesi Utara', 5),
(27, 'Bali', 4),
(28, 'Nusa Tenggara Barat', 4),
(29, 'Nusa Tenggara Timur', 4),
(30, 'Maluku', 3),
(31, 'Maluku Utara', 3),
(32, 'Papua Barat', 3),
(33, 'Papua Barat', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pulau`
--

CREATE TABLE IF NOT EXISTS `t_pulau` (
  `id_pulau` int(11) NOT NULL,
  `pulau` varchar(30) NOT NULL,
  PRIMARY KEY (`id_pulau`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_pulau`
--

INSERT INTO `t_pulau` (`id_pulau`, `pulau`) VALUES
(1, 'Jawa'),
(2, 'Kalimantan'),
(3, 'Maluku dan Papua'),
(4, 'Nusa Tenggara dan Bali'),
(5, 'Sulawesi'),
(6, 'Sumatera');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_tahapan_wkp`
--

CREATE TABLE IF NOT EXISTS `t_tahapan_wkp` (
  `id_tahapan_wkp` int(11) NOT NULL AUTO_INCREMENT,
  `id_wkp` int(11) DEFAULT NULL,
  `tahap` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_tahapan_wkp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_tipegunungapi`
--

CREATE TABLE IF NOT EXISTS `t_tipegunungapi` (
  `id_tipe_gunung` int(11) NOT NULL,
  `tipe_gunung_api` varchar(20) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  PRIMARY KEY (`id_tipe_gunung`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_tipegunungapi`
--

INSERT INTO `t_tipegunungapi` (`id_tipe_gunung`, `tipe_gunung_api`, `keterangan`) VALUES
(1, 'Tipe A', 'Erupsi min 1x stlh tahun 1600'),
(2, 'Tipe B', 'Tdk ada erupsi stlh tahun 1600 namun masih aktif'),
(3, 'Tipe C', 'Tdk ada sejarah erupsi namun masih masih aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_unit`
--

CREATE TABLE IF NOT EXISTS `t_unit` (
  `id_unit` int(11) NOT NULL,
  `status_produksi_unit1` tinyint(1) DEFAULT NULL,
  `status_produksi_unit2` tinyint(1) DEFAULT NULL,
  `status_produksi_unit3` tinyint(1) DEFAULT NULL,
  `status_produksi_unit4` tinyint(1) DEFAULT NULL,
  `status_produksi_unit5` tinyint(1) DEFAULT NULL,
  `status_produksi_unit6` tinyint(1) DEFAULT NULL,
  `daya_unit1` float DEFAULT NULL,
  `daya_unit2` float DEFAULT NULL,
  `daya_unit3` float DEFAULT NULL,
  `daya_unit4` float DEFAULT NULL,
  `daya_unit5` float DEFAULT NULL,
  `daya_unit6` float DEFAULT NULL,
  `harga_unit1` float DEFAULT NULL,
  `harga_unit2` float DEFAULT NULL,
  `harga_unit3` float DEFAULT NULL,
  `harga_unit4` float DEFAULT NULL,
  `harga_unit5` float DEFAULT NULL,
  `harga_unit6` float DEFAULT NULL,
  PRIMARY KEY (`id_unit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_unit`
--

INSERT INTO `t_unit` (`id_unit`, `status_produksi_unit1`, `status_produksi_unit2`, `status_produksi_unit3`, `status_produksi_unit4`, `status_produksi_unit5`, `status_produksi_unit6`, `daya_unit1`, `daya_unit2`, `daya_unit3`, `daya_unit4`, `daya_unit5`, `daya_unit6`, `harga_unit1`, `harga_unit2`, `harga_unit3`, `harga_unit4`, `harga_unit5`, `harga_unit6`) VALUES
(1, 1, 0, 0, 0, 0, 0, 2, 5, 5, 0, 0, 0, 0.1147, 0.016, 0.016, 0, 0, 0),
(2, 0, 0, 0, 0, 0, 0, 110, 110, 110, 0, 0, 0, 0.0679, 0.0679, 0.0679, 0, 0, 0),
(3, 0, 0, 0, 0, 0, 0, 110, 110, 0, 0, 0, 0, 0.043, 0.043, 0, 0, 0, 0),
(4, 0, 0, 0, 0, 0, 0, 55, 55, 55, 55, 0, 0, 0.0753, 0.0753, 0.0753, 0.0753, 0, 0),
(5, 0, 0, 0, 0, 0, 0, 55, 55, 0, 0, 0, 0, 0.043, 0.043, 0, 0, 0, 0),
(6, 0, 0, 0, 0, 0, 0, 55, 55, 55, 55, 0, 0, 0.042, 0.042, 0.042, 0.042, 0, 0),
(7, 1, 1, 0, 0, 0, 0, 110, 117, 0, 0, 0, 0, 0.0564, 0.0564, 0, 0, 0, 0),
(8, 0, 0, 0, 0, 0, 0, 55, 55, 55, 0, 0, 0, 0.068, 0.068, 0.068, 0, 0, 0),
(9, 1, 1, 1, 1, 0, 0, 30, 55, 55, 60, 30, 0, 0.0365, 0.0941, 0.0941, 0.0443, 0.0825, 0),
(10, 1, 1, 1, 0, 0, 0, 55, 90, 110, 0, 0, 0, 0.0433, 0.0591, 0.0621, 0, 0, 0),
(11, 0, 0, 0, 0, 0, 0, 30, 30, 0, 0, 0, 0, 0.0825, 0.0825, 0, 0, 0, 0),
(12, 0, 0, 0, 0, 0, 0, 60, 60, 60, 65.6, 65.6, 65.6, 0.0566, 0.0566, 0.0566, 0.0661, 0.0661, 0.0661),
(13, 0, 0, 0, 0, 0, 0, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 0, 0, 0, 0, 0, 0, 30, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 1, 0, 0, 0, 0, 0, 60, 0, 0, 0, 0, 0, 0.0495, 0, 0, 0, 0, 0),
(16, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, 0, 0, 0, 0, 0, 0, 20, 20, 20, 20, 0, 0, 0.043, 0.043, 0.043, 0.043, 0, 0),
(18, 1, 1, 1, 1, 0, 0, 20, 20, 20, 20, 20, 20, 0.0173, 0.0176, 0.0216, 0.043, 0.0825, 0.0825),
(19, 0, 0, 0, 0, 0, 0, 2.5, 2.5, 2.5, 2.5, 0, 0, 0, 0, 0, 0, 0, 0),
(20, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, 0, 0, 0, 0, 0, 0, 10, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22, 0, 0, 0, 0, 0, 0, 5, 5, 0, 0, 0, 0, 0.1705, 0.1705, 0, 0, 0, 0),
(23, 0, 0, 0, 0, 0, 0, 55, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(24, 0, 0, 0, 0, 0, 0, 80, 80, 80, 0, 0, 0, 0.081, 0.081, 0.081, 0, 0, 0),
(25, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(26, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(27, 0, 0, 0, 0, 0, 0, 110, 110, 0, 0, 0, 0, 0.094, 0.094, 0, 0, 0, 0),
(28, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(29, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(30, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(31, 0, 0, 0, 0, 0, 0, 110, 110, 0, 0, 0, 0, 0.0886, 0.0086, 0, 0, 0, 0),
(32, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(33, 0, 0, 0, 0, 0, 0, 110, 110, 0, 0, 0, 0, 0.095, 0.095, 0, 0, 0, 0),
(34, 0, 0, 0, 0, 0, 0, 110, 110, 0, 0, 0, 0, 0.069, 0.069, 0, 0, 0, 0),
(35, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(36, 0, 0, 0, 0, 0, 0, 110, 0, 0, 0, 0, 0, 0.0839, 0, 0, 0, 0, 0),
(37, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(38, 0, 0, 0, 0, 0, 0, 40, 0, 0, 0, 0, 0, 0.063, 0, 0, 0, 0, 0),
(39, 0, 0, 0, 0, 0, 0, 30, 0, 0, 0, 0, 0, 0.058, 0, 0, 0, 0, 0),
(40, 0, 0, 0, 0, 0, 0, 45, 0, 0, 0, 0, 0, 0.0598, 0, 0, 0, 0, 0),
(41, 0, 0, 0, 0, 0, 0, 55, 55, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(42, 0, 0, 0, 0, 0, 0, 55, 55, 0, 0, 0, 0, 0.0809, 0.0809, 0, 0, 0, 0),
(43, 0, 0, 0, 0, 0, 0, 110, 110, 0, 0, 0, 0, 0.0947, 0.0947, 0, 0, 0, 0),
(44, 0, 0, 0, 0, 0, 0, 55, 0, 0, 0, 0, 0, 0.0909, 0, 0, 0, 0, 0),
(45, 0, 0, 0, 0, 0, 0, 55, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(46, 0, 0, 0, 0, 0, 0, 55, 55, 0, 0, 0, 0, 0.0858, 0.0858, 0, 0, 0, 0),
(47, 0, 0, 0, 0, 0, 0, 55, 55, 55, 0, 0, 0, 0.0755, 0.0755, 0.0755, 0, 0, 0),
(48, 0, 0, 0, 0, 0, 0, 10, 10, 0, 0, 0, 0, 0.0965, 0.0965, 0, 0, 0, 0),
(49, 0, 0, 0, 0, 0, 0, 5, 5, 5, 5, 0, 0, 0.1251, 0.1251, 0.1251, 0.1251, 0, 0),
(50, 0, 0, 0, 0, 0, 0, 2.5, 2.5, 0, 0, 0, 0, 0.095, 0.095, 0, 0, 0, 0),
(51, 0, 0, 0, 0, 0, 0, 2.5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(52, 0, 0, 0, 0, 0, 0, 10, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(53, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(54, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(55, 0, 0, 0, 0, 0, 0, 5, 5, 0, 0, 0, 0, 0.1728, 0.1728, 0, 0, 0, 0),
(56, 0, 0, 0, 0, 0, 0, 55, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_wkp`
--

CREATE TABLE IF NOT EXISTS `t_wkp` (
  `id_wkp` int(11) NOT NULL,
  `wkp` varchar(50) DEFAULT NULL,
  `id_prov` int(11) DEFAULT NULL,
  `kabupaten` varchar(50) DEFAULT NULL,
  `luas` float DEFAULT NULL,
  `lintang(a)` float DEFAULT NULL,
  `lintang(z)` float DEFAULT NULL,
  `bujur(a)` float DEFAULT NULL,
  `bujur(z)` float DEFAULT NULL,
  `id_tipe_gunung` int(11) DEFAULT NULL,
  `tgl_penetapan` date DEFAULT NULL,
  `per_penetapan` varchar(255) DEFAULT NULL,
  `tot_daya_mungkin` float DEFAULT NULL,
  `tot_daya_terduga` float DEFAULT NULL,
  `tot_daya_terbukti` float DEFAULT NULL,
  `kws_hutan_lindung` tinyint(1) DEFAULT NULL,
  `id_perusahaan_pengembang` int(11) DEFAULT NULL,
  `id_unit` int(11) NOT NULL,
  `jml_sumur` int(11) DEFAULT NULL,
  `estimasi_potensi` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_wkp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_wkp`
--

INSERT INTO `t_wkp` (`id_wkp`, `wkp`, `id_prov`, `kabupaten`, `luas`, `lintang(a)`, `lintang(z)`, `bujur(a)`, `bujur(z)`, `id_tipe_gunung`, `tgl_penetapan`, `per_penetapan`, `tot_daya_mungkin`, `tot_daya_terduga`, `tot_daya_terbukti`, `kws_hutan_lindung`, `id_perusahaan_pengembang`, `id_unit`, `jml_sumur`, `estimasi_potensi`) VALUES
(1, 'Sibanyak - Sinabung', 10, 'Karo', 618.35, 0, 0, 0, 0, 2, '1990-10-30', 'SK Menteri ESDM No. 1521 K/034/M.PE/1990', 130, 0, 40, 1, 5, 1, 0, NULL),
(2, 'Sibual - Buali', 10, 'Tapanuli Utara - Selatan', 1808.95, 0, 0, 0, 0, 2, '1990-10-30', 'SK Menteri ESDM No. 1521 K/034/M.PE/1990', 750, 0, 130, 1, 28, 2, 0, NULL),
(3, 'Hululais', 2, 'Lebong', 466.63, 0, 0, 0, 0, 2, '1996-01-26', 'SK Menteri ESDM No. 58/DMP/1996', 600, 0, 0, 1, 5, 3, 0, NULL),
(4, 'Lumut Balai - Margabayur', 9, 'Ogan Komering Ulu', 914.59, 0, 0, 0, 0, 2, '1993-02-27', 'SK Menteri Pertambangan & Energi No. 1268 K/020/M.PE/1993', 600, 0, 0, 1, 5, 4, 0, NULL),
(5, 'Sungai Penuh', 3, 'Kerinci, Pesisir Selatan, Mukomuko, Kota S.Penuh', 331.3, 0, 0, 0, 0, 2, '1993-02-27', 'SK Menteri ESDM No. 1268 K/020/M.PE/1993', 0, 70, 0, 0, 5, 5, 0, NULL),
(6, 'Gunung Waypanas', 5, 'Tanggamus', 361.3, 0, 0, 0, 0, 2, '1990-10-30', 'SK Menteri Pertambangan & Energi No. 1521 K/034/M.PE/1990', 380, 0, 0, 1, 5, 6, 0, NULL),
(7, 'Pangalengan (Wayang Windu)', 14, 'Bandung', 616.34, 0, 0, 0, 0, 2, '1989-01-25', 'SK Menteri Pertambangan & Energi No. 76/034/M.PE/1989', 1333, 0, 0, 1, 27, 7, 0, NULL),
(8, 'Pangalengan (Patuha)', 14, 'Bandung', 616.34, 0, 0, 0, 0, 2, '1989-01-25', 'SK Menteri Pertambangan & Energi No. 76/034/M.PE/1989', 1333, 0, 0, 1, 5, 8, 0, NULL),
(9, 'Kamojang - Darajat (Kamojang)', 14, 'Bandung, Garut', 624.5, -7, -7.33333, 107.625, 108, 2, '1974-08-10', 'SK Menteri Pertambangan No. 446/KPTS/M.Pertamb/1974', 1238, 0, 0, 1, 5, 9, 0, NULL),
(10, 'Kamojang - Darajat (Darajat)', 14, 'Bandung, Garut', 624.5, -7.18583, -7.26111, 107.698, 107.761, 2, '1974-08-10', 'SK Menteri Pertambangan No. 466/KPTS/M.Pertamb/1974', 1238, 0, 0, 1, 6, 10, 0, NULL),
(11, 'Karaha Cakrabuana', 14, 'Garut, Tasikmalaya', 261.06, 0, 0, 0, 0, 2, '1989-01-25', 'SK Menteri Pertambangan No. 76/034/M.PE/1989', 700, 0, 0, 1, 5, 11, 0, NULL),
(12, 'Cibeureum Parabakti', 14, 'Bogor, Sukabumi', 413.58, 0, 0, 0, 0, 2, '1974-03-10', 'SK Menteri ESDM No. 467/Kpts/M.Pertamb/1974', 0, 160, 0, 1, 6, 12, 0, NULL),
(13, 'Cibuni', 14, 'Bandung', 3.86, 0, 0, 0, 0, 2, '1988-02-29', 'SK Menteri Pertambangan & Energi No. 1298/33/M.DJM/1988', 140, 0, 0, 0, 7, 13, 0, NULL),
(14, 'Ciater', 14, 'Subang', 9.75, 0, 0, 0, 0, 2, '1997-10-23', 'SK Menteri Pertambangan & Energi No. 3970/30/M.DJM/1997', 60, 0, 0, 0, 8, 14, 0, NULL),
(15, 'Dataran Tinggi Dieng', 15, 'Wonosobo, Banjarnegara', 458.91, 0, 0, 0, 0, 2, '1974-08-20', 'SK Menteri Pertambangan No. 491/KPTS/M.Pertamb/1974', 897, 0, 0, 1, 9, 15, 0, NULL),
(16, 'Gunung Iyang Argopuro', 16, 'Jember, Probolinggo, Bondowoso, Situbondo', 430.99, 0, 0, 0, 0, 2, '1990-10-30', 'SK Menteri Pertambangan & Energi No. 1521.K/034/M.PE/1990', 295, 0, 0, 0, 4, 16, 0, NULL),
(17, 'Kotamobagu', 26, 'Bolaang Mongondow, Minahasa Selatan', 454.46, 0, 0, 0, 0, 2, '1990-10-30', 'SK Menteri Pertambangan & Energi No. 1521 K/034/M.PE/1990', 100, 0, 0, 0, 5, 17, 2, NULL),
(18, 'Lahendong', 26, 'Minahasa, Tomohon', 429.97, 0, 0, 0, 0, 2, '1987-07-20', 'SK Menteri Pertambangan & Energi No. 560 K/30/M.PE/1987', 130, 95, 80, 0, 5, 18, 0, NULL),
(19, 'Ulumbu', 29, 'Manggarai', 4.05, 0, 0, 0, 0, 2, '2009-10-28', 'SK Surat Dirjen Minerbapabum No. 3042/33/DJB/2009', 188, 0, 13, 0, 11, 19, 0, NULL),
(20, 'Tabanan', 27, 'Tabanan, Buleleng', 422.89, 0, 0, 0, 0, 2, '1974-04-10', 'SK Menteri Pertambangan No. 465/KPTS/M.Pertamb/1974', 0, 276, 0, 1, 10, 20, 3, NULL),
(21, 'Tulehu', 30, 'Kota Ambon', 7.77, 0, 0, 0, 0, 2, '1997-09-11', 'SK Menteri Pertambangan & Energi No. 3362/30/M.DJM/1997', 100, 0, 0, 0, 11, 21, 0, NULL),
(22, 'Jaboi', 6, 'Kotamadya Sabang', 28.12, 0, 0, 0, 0, 2, '2008-04-09', 'SK Menteri ESDM No. 1514 K/30/MEM/2008', 50, 0, 0, 1, 13, 22, 0, NULL),
(23, 'Seulawah Agam', 6, 'Aceh Besar', 182.11, 0, 0, 0, 0, 2, '2007-05-23', 'SK Menteri ESDM No.1786 K/33/MEM/2007', 160, 0, 0, 0, 5, 23, 0, NULL),
(24, 'Sorik Marapi - Roburan - Sampuraga', 10, 'Mandailing Natal', 254.55, 0, 0, 0, 0, 2, '2008-12-30', 'SK Menteri ESDM No. 2963/30/MEM/2008', 0, 0, 0, 1, 14, 24, 0, NULL),
(25, 'Simbolon - Samosir', 10, 'Samosir,Toba Samosir,Tapanuli Utara,Humbang,Dairi', 683.11, 0, 0, 0, 0, 2, '2012-04-30', 'SK Menteri ESDM No. 1827 K/30/MEM/2012', 225, 0, 0, 0, 4, 25, 0, NULL),
(26, 'Sipoholon Ria - Ria', 10, 'Tapanuli Utara', 139.25, 0, 0, 0, 0, 2, '2008-12-30', 'SK Menteri ESDM No. 2961 K/30/MEM/2008', 75, 0, 0, 1, 4, 26, 0, NULL),
(27, 'Liki Pinangawan Muaralaboh', 8, 'Solok Selatan', 252.12, 0, 0, 0, 0, 2, '2009-03-30', 'SK Menteri ESDM No. 1086 K/30/MEM/2009', 400, 0, 0, 1, 15, 27, 3, NULL),
(28, 'Bukit Kili', 8, 'Solok,Kota Solok', 137.23, 0, 0, 0, 0, 2, '2008-12-30', 'SK Menteri ESDM No. 2962 K/30/MEM/2008', 83, 0, 0, 1, 4, 28, 0, NULL),
(29, 'Gunung Talang', 8, 'Solok', 133.87, 0, 0, 0, 0, 2, '2008-10-22', 'SK Menteri ESDM No. 2471 K/30/MEM/2008', 36, 0, 0, 1, 4, 29, 0, NULL),
(30, 'Bonjol', 8, 'Pasaman', 40.87, 0, 0, 0, 0, 2, '2011-04-21', 'SK Menteri ESDM No. 1150 K/30/MEM/2011', 0, 0, 0, 1, 4, 30, 0, NULL),
(31, 'Rantau Dedap', 9, 'Muara Enim,Lahat,Kota Pagar Alam', 143.5, 0, 0, 0, 0, 2, '2010-01-15', 'SK Menteri ESDM No. 0155 K/30/MEM/2010', 106, 0, 0, 1, 15, 31, 0, NULL),
(32, 'Danau Ranau', 9, 'Ogan Komering Ulu Selatan,Lampung Barat', 34.65, 0, 0, 0, 0, 2, '2011-04-21', 'SK Menteri ESDM No. 1151 K/30/MEM/2011', 210, 0, 0, 1, 4, 32, 0, NULL),
(33, 'Rajabasa', 5, 'Lampung Selatan', 78.99, 0, 0, 0, 0, 2, '2009-02-18', 'SK Menteri ESDM No. 0211 K/30/MEM/2009', 91, 0, 0, 1, 15, 33, 0, NULL),
(34, 'Suoh Sekincau', 5, 'Lampung Barat', 134.89, 0, 0, 0, 0, 2, '2009-12-01', 'SK Menteri ESDM No. 2478 K/30/MEM/2009', 230, 0, 0, 0, 6, 34, 0, NULL),
(35, 'Way Ratai', 5, 'Solok Selatan', 286.15, 0, 0, 0, 0, 2, '2012-04-30', 'SK Menteri ESDM No. 1825 K/30/MEM/2012', 0, 105, 0, 0, 4, 35, 0, NULL),
(36, 'Danau Banten', 11, 'Serang - Pandeglang', 421.68, 0, 0, 0, 0, 2, '2009-01-15', 'SK Menteri ESDM No. 0026 K/30/MEM/2009', 115, 0, 0, 0, 16, 36, 0, NULL),
(37, 'Gunung Endut', 11, 'Lebak', 103.88, 0, 0, 0, 0, 2, '2011-04-21', 'SK Menteri ESDM No. 1154 K/30/MEM/2011', 80, 0, 0, 0, 4, 37, 0, NULL),
(38, 'Cisolok Cisukarame', 14, 'Sukabumi', 63.05, 0, 0, 0, 0, 1, '2007-07-09', 'SK Menteri ESDM No. 1937.K/30/MEM/2007', 45, 0, 0, 0, 17, 38, 1, NULL),
(39, 'Gunung Tangkuban Parahu', 14, 'Subang,Bandung,Purwakarta', 200.08, 0, 0, 0, 0, 2, '2007-12-27', 'SK Menteri ESDM No. 2995 K/30/MEM/2007', 0, 90, 0, 0, 8, 39, 0, NULL),
(40, 'Gunung Tampomas', 14, 'Sumedang,Subang', 109.31, 0, 0, 0, 0, 2, '2007-05-23', 'SK Menteri ESDM No. 1790 K/33/MEM/2007', 20, 0, 0, 1, 18, 40, 0, NULL),
(41, 'Gunung Ciremai', 14, 'Kuningan,Majalengka', 98.46, 0, 0, 0, 0, 2, '2011-04-21', 'SK Menteri ESDM No. 1153 K/30/MEM/2011', 0, 150, 0, 0, 4, 41, 0, NULL),
(42, 'Gunung Ungaran', 15, 'Semarang,Kendal', 120.59, 0, 0, 0, 0, 2, '2007-05-23', 'SK Menteri ESDM No. 1789.K/33/MEM/2007', 0, 100, 0, 1, 19, 42, 0, NULL),
(43, 'Baturraden', 15, 'Banyumas,Tegal,Brebes,Purbalingga,Pamalang', 99.79, 0, 0, 0, 0, 2, '2010-04-08', 'SK Menteri ESDM No. 1557 K/30/MEM/2010', 0, 175, 0, 1, 20, 43, 0, NULL),
(44, 'Guci', 15, 'Tegal,Brebes,Pemalang', 58.19, 0, 0, 0, 0, 2, '2010-04-09', 'SK Menteri ESDM No. 1566 K/30/MEM/2010', 0, 79, 0, 1, 21, 44, 0, NULL),
(45, 'Candi Umbul Telomoyo', 15, 'Magelang,Semarang,Boyolali,Temanggung, Salatiga', 145.89, 0, 0, 0, 0, 2, '2012-04-30', 'SK Menteri ESDM No. 1826.K/30/MEM 2012', 0, 120, 0, 1, 4, 45, 0, NULL),
(46, 'Blawan Ijen', 16, 'Bondowoso,Banyuwangi,Situbondo', 253.41, 0, 0, 0, 0, 2, '2008-10-22', 'SK Menteri ESDM No. 2472 K/30/MEM/2008', 0, 270, 0, 1, 22, 46, 0, NULL),
(47, 'Telaga Ngebel', 16, 'Ponorogo,Madiun', 129.01, 0, 0, 0, 0, 2, '2007-05-23', 'SK Menteri ESDM No. 1788 K/33/MEM/2007', 0, 120, 0, 0, 23, 47, 0, NULL),
(48, 'Hu''u Daha', 29, 'Dompu', 78.14, 0, 0, 0, 0, 2, '2008-10-22', 'SK Menteri ESDM No. 2473 K/30/MEM/2008', 65, 0, 0, 1, 24, 48, 0, NULL),
(49, 'Sokoria', 29, 'Ende', 172.27, 0, 0, 0, 0, 2, '2008-04-14', 'SK Menteri ESDM No. 0539 K/30/MEM/2012', 30, 0, 0, 0, 25, 49, 0, NULL),
(50, 'Atadei', 29, 'Lembata', 126.26, 0, 0, 0, 0, 2, '2008-12-30', 'SK Menteri ESDM No. 2966 K/30/MEM/2008', 40, 0, 0, 1, 23, 50, 0, NULL),
(51, 'Mataloko', 29, 'Ngada', 0.01, 0, 0, 0, 0, 2, '2011-04-21', 'SK Menteri ESDM No. 1152 K/30/MEM/2011', 63, 0, 0, 0, 4, 51, 6, NULL),
(52, 'Marana', 24, 'Donggala', 195.46, 0, 0, 0, 0, 2, '2008-12-30', 'SK Menteri ESDM No. 2964 K/30/MEM/2008', 36, 0, 0, 1, 4, 52, 0, NULL),
(53, 'Bora Pulu', 24, 'Sigi,Kota Pulu', 322.74, 0, 0, 0, 0, 2, '2012-04-30', 'SK Menteri ESDM No. 1828 K/30/MEM/2012', 123, 0, 0, 1, 4, 53, 0, NULL),
(54, 'Suwawa', 21, 'Bone Bolango,Kota Gorontalo', 146.13, 0, 0, 0, 0, 2, '2009-01-15', 'SK Menteri ESDM 0025 K/30/MEM/2009', 110, 0, 0, 1, 4, 54, 0, NULL),
(55, 'Jailolo', 31, 'Halmahera Barat', 54.96, 0, 0, 0, 0, 2, '2007-05-23', 'SK Menteri ESDM No. 1787 K/33/MEM/2007', 75, 0, 0, 0, 27, 55, 0, NULL),
(56, 'Wayaua', 31, 'Halmahera Selatan', 172.15, 0, 0, 0, 0, 2, '2008-12-30', 'SK Menteri ESDM No. 2965 K/30/MEM/2008', 140, 0, 0, 1, 4, 56, 0, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
