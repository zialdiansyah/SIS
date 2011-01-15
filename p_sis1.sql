-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 12, 2011 at 11:26 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sis1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bimbingan`
--

CREATE TABLE IF NOT EXISTS `tbl_bimbingan` (
  `id_bimbingan` int(11) NOT NULL AUTO_INCREMENT,
  `id_p_s_prasidang` int(11) unsigned NOT NULL,
  `tgl_bimbingan` date NOT NULL,
  `komen_bimbingan` longtext NOT NULL,
  PRIMARY KEY (`id_bimbingan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Tabel Bimbingan Mahasiswa' AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_bimbingan`
--

INSERT INTO `tbl_bimbingan` (`id_bimbingan`, `id_p_s_prasidang`, `tgl_bimbingan`, `komen_bimbingan`) VALUES
(1, 1, '0000-00-00', 'lol'),
(2, 1, '0000-00-00', 'gsdfsgdfsgfds');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_prasidang`
--

CREATE TABLE IF NOT EXISTS `tbl_detail_prasidang` (
  `id_detail_prasidang` int(11) NOT NULL AUTO_INCREMENT,
  `pembimbing_1` int(11) NOT NULL,
  `penguji_1` int(11) NOT NULL,
  `penguji_2` int(11) NOT NULL,
  `tgl_prasidang` date NOT NULL,
  `ruangan` varchar(10) NOT NULL,
  PRIMARY KEY (`id_detail_prasidang`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Tabel Detai Prasidang' AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_detail_prasidang`
--

INSERT INTO `tbl_detail_prasidang` (`id_detail_prasidang`, `pembimbing_1`, `penguji_1`, `penguji_2`, `tgl_prasidang`, `ruangan`) VALUES
(1, 2, 7, 4, '0000-00-00', 'IK202');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_p_proposal`
--

CREATE TABLE IF NOT EXISTS `tbl_detail_p_proposal` (
  `id_detail` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_uji` date NOT NULL,
  `ruangan` varchar(50) NOT NULL,
  PRIMARY KEY (`id_detail`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_detail_p_proposal`
--

INSERT INTO `tbl_detail_p_proposal` (`id_detail`, `tgl_uji`, `ruangan`) VALUES
(1, '0000-00-00', 'IK204'),
(2, '0000-00-00', ''),
(3, '0000-00-00', '0'),
(4, '0000-00-00', 'IK202');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_sidang`
--

CREATE TABLE IF NOT EXISTS `tbl_detail_sidang` (
  `id_detail_sidang` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_sidang` date NOT NULL,
  `ruangan` varchar(10) NOT NULL,
  PRIMARY KEY (`id_detail_sidang`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_detail_sidang`
--

INSERT INTO `tbl_detail_sidang` (`id_detail_sidang`, `tgl_sidang`, `ruangan`) VALUES
(1, '0000-00-00', 'IK205');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dosen`
--

CREATE TABLE IF NOT EXISTS `tbl_dosen` (
  `id_dosen` int(11) NOT NULL AUTO_INCREMENT,
  `kode_dosen` varchar(25) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  PRIMARY KEY (`id_dosen`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Tabel Dosen' AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_dosen`
--

INSERT INTO `tbl_dosen` (`id_dosen`, `kode_dosen`, `nama`, `email`, `username`) VALUES
(1, '2231', 'YUDI WIBISONO, MT', '', 'yudi'),
(2, '0720', 'DRS. HERI SUTARNO, MT', '', 'heri'),
(3, '2400', 'Rasim, M.T', '', ''),
(4, '1713', 'Dr. Enjang Ali Nurdin M. Kom', '', ''),
(5, '2591', 'Herbert, M.T', '', ''),
(6, '2399', 'M. Nursalman, M.T', '', ''),
(7, '2585', 'Lala Septem Riza, M.T', '', ''),
(8, '1718', 'Dr. Wawan Setiawan M.Kom', '', ''),
(9, '2401', 'Rizki Rahman S. P. M.Kom', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_file_skripsi`
--

CREATE TABLE IF NOT EXISTS `tbl_file_skripsi` (
  `id_file` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `ukuran_file` int(100) NOT NULL,
  `direktori` varchar(100) NOT NULL,
  PRIMARY KEY (`id_file`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_file_skripsi`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_komentar_s_sidang`
--

CREATE TABLE IF NOT EXISTS `tbl_komentar_s_sidang` (
  `id_komen_sidang` int(11) NOT NULL AUTO_INCREMENT,
  `komen_sidang` text NOT NULL,
  PRIMARY KEY (`id_komen_sidang`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_komentar_s_sidang`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_komen_prasidang`
--

CREATE TABLE IF NOT EXISTS `tbl_komen_prasidang` (
  `id_komen_s_prasidang` int(11) NOT NULL AUTO_INCREMENT,
  `komen_skripsi_pra` text NOT NULL,
  PRIMARY KEY (`id_komen_s_prasidang`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Tabel Komentar Prasidang' AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_komen_prasidang`
--

INSERT INTO `tbl_komen_prasidang` (`id_komen_s_prasidang`, `komen_skripsi_pra`) VALUES
(1, 'ekekekekdadasdadadas');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_list_topik`
--

CREATE TABLE IF NOT EXISTS `tbl_list_topik` (
  `id_topik` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `abstrak` text NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id_topik`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Tabel Liast Topik' AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_list_topik`
--

INSERT INTO `tbl_list_topik` (`id_topik`, `judul`, `abstrak`, `keterangan`) VALUES
(1, 'coba 2', 'can dieusian jang...????', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mahasiswa`
--

CREATE TABLE IF NOT EXISTS `tbl_mahasiswa` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `angkatan` year(4) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  PRIMARY KEY (`nim`),
  UNIQUE KEY `nim` (`nim`),
  UNIQUE KEY `nim_2` (`nim`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Tabel Mahasiswa';

--
-- Dumping data for table `tbl_mahasiswa`
--

INSERT INTO `tbl_mahasiswa` (`nim`, `nama`, `angkatan`, `email`, `username`) VALUES
('0900901', 'test', 2008, 'bbb@bbb.com', 'asu'),
('0902018', 'Khalifa Esha', 2009, 'khaesha19@gmail.com', 'eshas');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengguna`
--

CREATE TABLE IF NOT EXISTS `tbl_pengguna` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Tabel Pengguna';

--
-- Dumping data for table `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`username`, `password`, `status`) VALUES
('Admin', '1234567', 'admin'),
('asu', 'cobacobacoba', 'mahasiswa'),
('eshas', '0902018', 'mahasiswa'),
('heri', '0720', 'ketua prodi'),
('yudi', '2231', 'kordinator skripsi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_progres_skripsi`
--

CREATE TABLE IF NOT EXISTS `tbl_progres_skripsi` (
  `id_p_s_prasidang` int(11) NOT NULL AUTO_INCREMENT,
  `id_p_proposal` int(11) NOT NULL,
  `pembimbing_1` int(11) NOT NULL,
  `pembimbing_2` int(11) NOT NULL,
  `stat_1` int(11) NOT NULL,
  `stat_2` int(11) NOT NULL,
  `id_komen_s_prasidang` int(11) unsigned NOT NULL,
  `id_detail_prasidang` int(11) unsigned NOT NULL,
  `id_bimbingan` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id_p_s_prasidang`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_progres_skripsi`
--

INSERT INTO `tbl_progres_skripsi` (`id_p_s_prasidang`, `id_p_proposal`, `pembimbing_1`, `pembimbing_2`, `stat_1`, `stat_2`, `id_komen_s_prasidang`, `id_detail_prasidang`, `id_bimbingan`) VALUES
(1, 1, 2, 1, 1, 1, 1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_p_proposal`
--

CREATE TABLE IF NOT EXISTS `tbl_p_proposal` (
  `id_p_proposal` int(11) NOT NULL AUTO_INCREMENT,
  `id_p_topik` int(11) NOT NULL,
  `tgl_upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `penguji_1` int(11) NOT NULL,
  `penguji_2` int(11) NOT NULL,
  `status_proposal` int(11) NOT NULL,
  `id_detail` int(10) unsigned NOT NULL,
  `komen` longtext NOT NULL,
  `id_file` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id_p_proposal`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Tabel Pengajuan Proposal' AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_p_proposal`
--

INSERT INTO `tbl_p_proposal` (`id_p_proposal`, `id_p_topik`, `tgl_upload`, `penguji_1`, `penguji_2`, `status_proposal`, `id_detail`, `komen`, `id_file`) VALUES
(1, 1, '0000-00-00 00:00:00', 1, 2, 1, 4, 'fdasfdsafdsafasfas', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_p_topik`
--

CREATE TABLE IF NOT EXISTS `tbl_p_topik` (
  `id_p_topik` int(11) NOT NULL AUTO_INCREMENT,
  `nim` varchar(10) NOT NULL,
  `judul` text NOT NULL,
  `abstrak` longtext NOT NULL,
  `tanggal` varchar(25) NOT NULL,
  `status` int(10) unsigned NOT NULL,
  `komen` longtext NOT NULL,
  PRIMARY KEY (`id_p_topik`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Tabel Pengajuan Topik' AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_p_topik`
--

INSERT INTO `tbl_p_topik` (`id_p_topik`, `nim`, `judul`, `abstrak`, `tanggal`, `status`, `komen`) VALUES
(1, '0900901', 'afdsa', 'gsdgfsgfsgfsdgfs', '2011-01-04 02:19:40', 1, 'alalalalla......');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sidang`
--

CREATE TABLE IF NOT EXISTS `tbl_sidang` (
  `id_p_sidang` int(11) NOT NULL AUTO_INCREMENT,
  `id_p_s_prasidang` int(11) NOT NULL,
  `penguji_1` int(10) unsigned NOT NULL,
  `penguji_2` int(11) unsigned NOT NULL,
  `penguji_3` int(10) unsigned NOT NULL,
  `stat_sidang` int(11) unsigned NOT NULL,
  `nilai` int(11) NOT NULL,
  `hasil` longtext NOT NULL,
  `id_detail_sidang` int(11) NOT NULL,
  PRIMARY KEY (`id_p_sidang`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Tabel Sidang Mahasiswa' AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_sidang`
--

INSERT INTO `tbl_sidang` (`id_p_sidang`, `id_p_s_prasidang`, `penguji_1`, `penguji_2`, `penguji_3`, `stat_sidang`, `nilai`, `hasil`, `id_detail_sidang`) VALUES
(1, 1, 1, 6, 3, 0, 0, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_upload_proposal`
--

CREATE TABLE IF NOT EXISTS `tbl_upload_proposal` (
  `id_file` int(11) NOT NULL AUTO_INCREMENT,
  `nama_file` varchar(100) NOT NULL,
  `ukuran_file` int(100) NOT NULL,
  `direktori` varchar(100) NOT NULL,
  PRIMARY KEY (`id_file`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='Table File Proposal' AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_upload_proposal`
--

INSERT INTO `tbl_upload_proposal` (`id_file`, `nama_file`, `ukuran_file`, `direktori`) VALUES
(1, 'Apa itu sisDig.docx', 16661, '../upload/file1/Apa itu sisDig.docx');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
