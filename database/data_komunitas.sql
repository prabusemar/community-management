-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 03, 2023 at 08:22 PM
-- Server version: 5.7.41-0ubuntu0.18.04.1
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `komunitas`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_komunitas`
--

CREATE TABLE `data_komunitas` (
  `id` int(25) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` text,
  `alamat` varchar(225) NOT NULL,
  `gambar` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_komunitas`
--

INSERT INTO `data_komunitas` (`id`, `nama`, `deskripsi`, `alamat`, `gambar`) VALUES
(1, 'Lanah Thifan Po Khan Banjar', '<p>Thifan Po Khan merupakan perpaduan dari berbagai macam beladiri dari suku &ndash; suku muslim di dataran saldsyuk(seljuk) Cina. Pada saat islam mulai menyebar ke kawasan Asia Selatan, Asia Timur dan Asia Tenggara, kaum muslimin di daerah ini mempelajari beladiri masyarakat setempat.</p>\r\n<p>Pada waktu itu, seorang bangsawan dari suku Tayli yang bernama Je&rsquo;nan menghimpun berbagai macam ilmu beladiri yang tersebar dari taran Saldsyuk sampai dataran Cina. Bersamaan dengan para pendekar muslim lainnya yang memiliki berbagai keahlian beladiri seperti gulat Mogul, Tatar, Saldsyuk, silat Kittan, Tayli, lalu mereka membentuk sebuah aliran baru yang bernama Shurul Khan.</p>\r\n<p>Dari beladiri bernama Shurul Khan ini lalu terbentuk lagi berbagai aliran seperti: Naimanka, Kraiddsyu, Suyi, Syirugrul, Namsuit, Bahroiy, Tae Fatan, Orluq dan Payuq. Ke 9 aliran tersebut lalu diteliti dan diolah sehingga akhirnya menjadi cikal bakal lahirnya Thifan Po Khan.</p>', 'Pamarican, No. 198', 'assets/logo/thifan.png'),
(2, 'OSIS SMKN 1 Banjar', '<p>OSIS (Organisasi Siswa Intra Sekolah) adalah lembaga di tingkat sekolah yang dibentuk oleh siswa-siswa untuk mengembangkan diri, membantu memajukan sekolah, serta mewakili siswa dalam berbagai hal.</p>\r\n<p>SMKN 1 Banjar merupakan salah satu sekolah menengah kejuruan di Banjar, Jawa Barat. OSIS di SMKN 1 Banjar bertugas sebagai wadah siswa untuk berpartisipasi aktif dalam kegiatan sekolah dan mengembangkan diri dalam bidang kepemimpinan dan sosial.</p>\r\n<p>Tugas-tugas yang diemban oleh OSIS SMKN 1 Banjar antara lain mengadakan berbagai kegiatan ekstrakurikuler, seperti lomba dan festival, serta mengorganisir kegiatan sosial, seperti kegiatan bakti sosial. OSIS juga berperan dalam menyampaikan aspirasi siswa kepada pihak sekolah dan berkoordinasi dengan pihak sekolah dalam menyelenggarakan kegiatan yang berkaitan dengan siswa.</p>', 'Jl. KH. Mustofa Lingk. Parunglesang, RT.05/RW.10, Banjar, Kec. Banjar, Kota Banjar, Jawa Barat 46311', 'assets/logo/smk.png'),
(3, 'BKC Dojo Banjar', '<p>BKC merupakan salah satu club dari Bandung yang didirikan oleh Iwa Rahadian Arsanata. Sekolah BKC ini terletak di kota Bandung yang memiliki cabang di seluruh Indonesia. BKC ini bertujuan untuk dapat mempertemukan anak-anak muda yang memiliki passion dalam pencak silat. Sumber dari beladiri BKC ini sebenarnya bersumber dari Tuntunan ajaran Jalaksana yang merupakan sebuah ilmu teturunan dari pendiri perguruan tersebut. Dasar pendidikan yaitu dengan fisik, keterampilan, kedisiplinan, pendidikan dan banyak lagi.</p>\r\n<p>Teknik pelajaran yang berdasarkan kepada tuntunan ajaran tersebut dengan menerapkan sebuah ilmu dari pendiri BKC. Pada prinsipnya yaitu tidak bersifat Jepang minded. Meningkatkan mutu yang prestasi dalam bidang kekuatan, fisik, teknis dan juga mental. Selain itu juga menjali kerjasama dengan perguruan, saling menghormati. BKC ini tidak bernaung dalam sebuah organisasi sejenis yang telah ditetapkan oleh berbagai pemerintah.</p>', 'Banjar Kolot, No. 190', 'assets/logo/Logo BKC.png'),
(4, 'Taekwondo Banjar', '<p>Dalam&nbsp;bahasa Korea,&nbsp;Hanja&nbsp;untuk kata&nbsp;<em>Tae</em>&nbsp;berarti \"menendang atau menghancurkan dengan kaki\";&nbsp;<em>Kwon</em>&nbsp;berarti \"tinju\"; dan&nbsp;<em>Do</em>&nbsp;berarti \"jalan\" atau \"seni\". Jadi, Taekwondo dapat diartikan sebagai \"seni tangan dan kaki\" atau \"cara kaki dan kepalan\". Kepopuleran Taekwondo telah menyebabkan seni ini berkembang dalam berbagai bentuk. Seperti banyak seni bela diri lainnya, Taekwondo adalah gabungan dari teknik perkelahian,&nbsp;bela diri,&nbsp;olahraga,&nbsp;hiburan, dan&nbsp;filsafat. Biasanya para&nbsp;<em>Taekwondoin</em>&nbsp;menyapa seseorang di media sosial dengan sebutan&nbsp;<em>Kyongrye</em>.</p>', 'Cibulan, No. 155', 'assets/logo/LOGO+TAEKWONDO-1479589411');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_komunitas`
--
ALTER TABLE `data_komunitas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_komunitas`
--
ALTER TABLE `data_komunitas`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
