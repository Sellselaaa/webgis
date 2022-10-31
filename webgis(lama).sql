-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2017 at 06:48 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webgis`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id_admin` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `namalengkap` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id_admin`, `username`, `password`, `namalengkap`, `email`) VALUES
(5, 'baswara', '12345', 'baswara moeh', 'baswara@gmail.com'),
(2, 'gede', '123', 'gede bali', 'gedebali@email.com'),
(14, 't', 't', 't', 't'),
(13, 'b', 'b', 'b', 'b'),
(12, 't', 't', 't', 't');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(5) NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(55) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `konten` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `tanggal`, `gambar`, `judul`, `konten`) VALUES
(4, '2017-05-05', 'nasi ayam.jpg', 'Nasi Ayam Kedewatan Ibu Mangku', 'Bali memang salah satu surganya kuliner makanan lokal. Jalan-jalan ke Ubud tentu tidak lengkap kalau belum mencicipi Nasi Ayam Kedewatan. Sebenarnya banyak warung-warung yang menjual Nasi Ayam di jalan Kedewatan, Ubud, namun menurut informasi orang lokal warung Nasi Ayam Kedewatan yang paling ramai dikunjungi adalah Nasi Ayam Kedewatan Ibu Mangku. \r\n\r\nSepiring Nasi Ayam Kedewatan Ibu Mangku dihargai Rp 17.000,- dan untuk minuman es lemon teh harganya hanya Rp 5.000,-. Nasi Ayam Kedewatan Ibu Mangku ini berlokasi di Jalan Raya Kedewatan No. 18, Ubud, Gianyar, Bali. No Telepon: 0361-974795. Warung Nasi ini buka dari jam 08.00 â€“ 18.00. Tempatnya cukup besar, ada meja biasa dan ada juga meja dengan model lesehan.');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(3) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `komentar` varchar(250) NOT NULL,
  `date` datetime NOT NULL,
  `art_id` int(3) NOT NULL,
  `art_url` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id_comment`, `nama`, `email`, `website`, `komentar`, `date`, `art_id`, `art_url`) VALUES
(4, 'moeh', 'moeh@gmail.com', 'www.moeh.com', 'sangat membantu, terimakasih gan ðŸ˜€', '2017-05-14 21:29:31', 1, 'komentar.php');

-- --------------------------------------------------------

--
-- Table structure for table `datakota`
--

CREATE TABLE `datakota` (
  `Id_kota` int(5) NOT NULL,
  `namakota` varchar(50) DEFAULT NULL,
  `provinsi` varchar(20) DEFAULT NULL,
  `kabupaten` varchar(30) DEFAULT NULL,
  `kodepos` varchar(10) DEFAULT NULL,
  `deskripsi` varchar(500) DEFAULT NULL,
  `lat` varchar(50) DEFAULT NULL,
  `lng` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datakota`
--

INSERT INTO `datakota` (`Id_kota`, `namakota`, `provinsi`, `kabupaten`, `kodepos`, `deskripsi`, `lat`, `lng`) VALUES
(26, 'Kuta', 'Bali', 'Badung', '80361', 'Kecamatan Kuta adalah sebuah Kecamatan di Kabupaten Badung, Bali, Indonesia yang memiliki luas 17,52 kmÂ². Wilayah ini memiliki salah satu tempat tujuan pariwisata di Indonesia yang terkenal hingga ke manca negara, yaitu pantai Kuta, terutama bagi penggemar olahraga selancar. Selain itu, kawasan ini juga penuh dengan berbagai hotel berbintang, restoran, villa, mall, dan sebagainya.', '-8.725519995920072', '115.17746135039056');

-- --------------------------------------------------------

--
-- Table structure for table `datarestoran`
--

CREATE TABLE `datarestoran` (
  `Id_restoran` int(10) NOT NULL,
  `namarestoran` varchar(50) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `kota` varchar(30) DEFAULT NULL,
  `wilayah` varchar(50) DEFAULT NULL,
  `no_telp` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `cluster` varchar(25) DEFAULT NULL,
  `pemandangan` varchar(25) DEFAULT NULL,
  `fasilitas` varchar(25) DEFAULT NULL,
  `harga_rata` varchar(25) DEFAULT NULL,
  `jam_layanan` varchar(30) DEFAULT NULL,
  `menu` varchar(40) DEFAULT NULL,
  `lat` varchar(50) DEFAULT NULL,
  `lng` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datarestoran`
--

INSERT INTO `datarestoran` (`Id_restoran`, `namarestoran`, `alamat`, `kota`, `wilayah`, `no_telp`, `email`, `website`, `cluster`, `pemandangan`, `fasilitas`, `harga_rata`, `jam_layanan`, `menu`, `lat`, `lng`) VALUES
(44, 'Sweet Orange Warung', 'jalan Subak Juwuk Manis', 'Ubud', 'Gianyar', '081338778689', 'putu@sweetorangewarung.com', 'sweetorangewarung.com', 'Cluster Formal', 'Pemandangan Alam', 'Wifi', 'Harga Murah', 'Makan Pagi', 'Masakan Cepat Saji', '-8.500565', '115.2578154'),
(45, 'Warung Garasi', 'Jalan Monkey Forest', 'Ubud', 'Gianyar', '03617811106', '-', '-', 'Cluster Informal', 'Pemandangan Kota', 'Wifi', 'Harga Murah', 'Makan Pagi', 'Masakan Cepat Saji', '-8.515446596968626', '115.26011630339349'),
(46, 'Fussy Bird Bali', 'Jalan Tirta Tawar No. 32', 'Ubud', 'Gianyar', '03614792356', 'fussybirdbali@gmail.com', 'fussybirdbali.weebly.com', 'Cluster Informal', 'Pemandangan Alam', 'Wifi', 'Harga Murah', 'Makan Siang', 'Masakan Cepat Saji', '-8.506660951522871', '115.26878520292962'),
(47, 'Dapur Bunda', 'Jalan Sriwedari', 'Ubud', 'Gianyar', '082236093308', '-', '-', 'Cluster Informal', 'Pemandangan Kota', 'Wifi', 'Harga Murah', 'Makan Siang', 'Masakan Cepat Saji', '-8.505642312924483', '115.26560946745599'),
(48, 'Le Moulin', 'Jalan Pengosekan', 'Ubud', 'Gianyar', '03619080028', '-', '-', 'Restoran Informal', 'Pemandangan Kota', 'Wifi', 'Harga Murah', 'Makan Pagi', 'Masakan Cepat Saji', '-8.523722745135327', '115.26354953093255'),
(49, 'Black Pearl', 'Jalan Bisma No. 45', 'Ubud', 'Gianyar', '03619081013', '-', '-', 'Restoran Informal', 'Pemandangan Alam', 'Wifi', 'Harga Murah', 'Makan Siang', 'Masakan Cepat Saji', '-8.511244791690924', '115.25831385893548'),
(50, 'Cafe Wayan', 'Jalan Monkey Forest', 'Ubud', 'Gianyar', '0361975447', 'cafewayanbali@gmail.com', 'cafewayanbali.com', 'Restoran Formal', 'Pemandangan Kota', 'Reservasi', 'Harga Sedang', 'Makan Siang', 'Masakan Eropa Populer', '-8.511329677102491', '115.26174708647454'),
(51, 'Kismet Restoran', 'Jalan Goutama Selatan No. 27x', 'Ubud', 'Gianyar', '03619080702', 'info@kismetbali.com', 'kismetbali.com', 'Restoran Formal', 'Pemandangan Kota', 'Reservasi', 'Harga Sedang', 'Makan Siang', 'Masakan Eropa Populer', '-8.508846771039057', '115.2642790917846'),
(52, 'Mudra', 'Jalan Goutama Selatan No. 22', 'Ubud', 'Gianyar', '08573850883', 'reservation@mudrabali.com', 'mudrabali.com', 'Restoran Formal', 'Pemandangan Kota', 'Reservasi', 'Harga Sedang', 'Makan Siang', 'Masakan Eropa Populer', '-8.508783106569334', '115.2642790917846'),
(53, 'Luxe Barbeque', 'Jalan Kajeng', 'Ubud', 'Gianyar', '03614792099', '-', 'luxevillasbali.com', 'Restoran Formal', 'Pemandangan Alam', 'Reservasi', 'Harga Sedang', 'Makan Malam', 'Masakan Eropa Populer', '-8.504941997317005', '115.26211186690057'),
(54, 'Locavore Restoran', 'Jalan Dewi Sita', 'Ubud', 'Gianyar', '0361 977733', '-', 'www.locavore.co.id', 'Restoran Formal', 'Pemandangan Alam', 'Reservasi', 'Harga Sedang', 'Makan Malam', 'Masakan Eropa Populer', '-8.509674408182377', '115.26249810499871'),
(55, 'Uma Cucina', 'Jalan Raya Sanggingan', 'Ubud', 'Gianyar', '0361 972448', 'dining.uma.ubud@comohotels.com', 'www.comohotels.com', 'Restoran Formal', 'Pemandangan Alam', 'Reservasi', 'Harga Sedang', 'Makan Siang', 'Masakan Eropa Populer', '-8.503774801793401', '115.25312110228265'),
(56, 'Kubu at Mandapa', 'Jalan Kedewatan', 'Ubud', 'Gianyar', '0361 4792777', '-', 'www.ritzcarlton.com', 'Restoran Khusus', 'Pemandangan Alam', 'Musik', 'Harga Mewah', 'Makan Malam', 'Masakan Italia', '-8.497577995120135', '115.23496791166986'),
(57, 'Blanco par Mandif', 'Jalan Campuhan', 'Ubud', 'Gianyar', '081277773000', 'info@blancoparmandif.com', 'www.blancoparmandif.com', 'Restoran Khusus', 'Pemandangan Kota', 'Musik', 'Harga Mewah', 'Makan Siang', 'Masakan Italia', '-8.503859688860459', '115.25324984831536'),
(58, 'Cascades Restoran', 'Jalan Lanahan, Br. Nagi', 'Ubud', 'Gianyar', '0361 972111', 'res@cascadesbali.com', 'www.cascadesbali.com', 'Restoran Khusus', 'Pemandangan Alam', 'Musik', 'Harga Mewah', 'Makan Siang', 'Masakan Italia', '-8.49524355567682', '115.27586623472894'),
(59, 'Bridges Bali', 'Jalan Raya Campuhan', 'Ubud', 'Gianyar', '0361 970095', 'info@bridgesbali.com', 'bridgesbali.com', 'Restoran Khusus', 'Pemandangan Kota', 'Musik', 'Harga Mewah', 'Makan Malam', 'Masakan Italia', '-8.50462367161771', '115.2549664620849'),
(60, 'Mozaic Restoran', 'Jalan Raya Sanggingan', 'Ubud', 'Gianyar', '0361 975768', 'info@mozaic-bali.com', 'www.mozaic-bali.com', 'Restoran Khusus', 'Pemandangan Alam', 'Musik', 'Harga Mewah', 'Makan Malam', 'Masakan Italia', '-8.491805537175031', '115.25367900175775'),
(61, 'Sawah Terrace', 'Jalan Kedewatan , Banjar Kedewatan', 'Ubud', 'Gianyar', '0361 4792777', '-', 'www.ritzcarlton.com', 'Restoran Khusus', 'Pemandangan Alam', 'Musik', 'Harga Mewah', 'Makan Malam', 'Masakan Italia', '-8.49899987399932', '115.23425980848992'),
(62, 'Jebak (Jejak Bali Kuliner)', 'Jalan Teuku Umar', 'Denpasar', 'Denpasar', '0361 9382111', '-', '-', 'Restoran Informal', 'Pemandangan Kota', 'Wifi', 'Harga Murah', 'Makan Siang', 'Masakan Cepat Saji', '-8.680044427712765', '115.20346804899896'),
(63, 'Bakso Buka Baju', 'Jl. Teuku Umar Barat No. 79', 'Denpasar', 'Denpasar', '0361 2020144', '-', '-', 'Restoran Informal', 'Pemandangan Kota', 'Wifi', 'Harga Murah', 'Makan Siang', 'Masakan Cepat Saji', '-8.681232292617931', '115.19441291136468'),
(64, 'Selera Kalimantan Denpasar', 'Jl. Glogor Carik, Gang Saliya Family', 'Denpasar', 'Denpasar', '0812 5390874', '-', '-', 'Restoran Informal', 'Pemandangan Kota', 'Wifi', 'Harga Murah', 'Makan Pagi', 'Masakan Cepat Saji', '-8.697225678737913', '115.1917521600219'),
(65, 'White Canny Bali', 'Jl. Tukad Gangga No. 16A, Renon', 'Denpasar', 'Denpasar', '0361 256108', '-', '-', 'Restoran Informal', 'Pemandangan Kota', 'Wifi', 'Harga Murah', 'Makan Pagi', 'Masakan Cepat Saji', '-8.673086857783737', '115.22466822905267'),
(66, 'Richeese Factory', 'Jl. Gatot Subroto No. 449', 'Denpasar', 'Denpasar', '0361 1500220', '-', '-', 'Restoran Informal', 'Pemandangan Kota', 'Wifi', 'Harga Murah', 'Makan Pagi', 'Masakan Cepat Saji', '-8.639145646414445', '115.20278140349114'),
(67, 'Warung Cobek Bebek Jawara', 'Jl. Tukad Pakerisan No. 95X', 'Denpasar', 'Denpasar', '0819 99462491', '-', '-', 'Restoran Informal', 'Pemandangan Kota', 'Wifi', 'Harga Murah', 'Makan Siang', 'Masakan Cepat Saji', '-8.688189711535356', '115.22655650419915'),
(68, 'Warung Gosha', 'Jl. Tukad Gangga 28', 'Denpasar', 'Denpasar', '0361 8011553', '-', '-', 'Restoran Formal', 'Pemandangan Kota', 'Wifi', 'Harga Sedang', 'Makan Siang', 'Masakan Eropa Populer', '-8.676395961998574', '115.22827311796868'),
(69, 'Rumahan Bistro', 'Jl. Teuku Umar No. 143', 'Denpasar', 'Denpasar', '0361 4748265', '-', '-', 'Restoran Formal', 'Pemandangan Kota', 'Wifi', 'Harga Sedang', 'Makan Siang', 'Masakan Eropa Populer', '-8.66994742427167', '115.2104632501098'),
(70, 'Kayu Manis', 'Jln. Tandakan 6, Sindu, Sanur', 'Denpasar', 'Denpasar', '0361 289410', '-', '-', 'Restoran Formal', 'Pemandangan Pantai', 'Reservasi', 'Harga Sedang', 'Makan Malam', 'Masakan Eropa Populer', '-8.692898623038248', '115.26520177168572'),
(71, 'The Glass House', 'Jl. Danau Tamblingan no. 25A', 'Denpasar', 'Denpasar', '0361 288696', '-', '-', 'Restoran Formal', 'Pemandangan Pantai', 'Reservasi', 'Harga Sedang', 'Makan Malam', 'Masakan Eropa Populer', '-8.69328042408072', '115.26363536162103'),
(72, 'Charming', 'Jln. Danau Tamblingan No. 97', 'Denpasar', 'Denpasar', '0361 61288029', '-', '-', 'Restoran Formal', 'Pemandangan Pantai', 'Reservasi', 'Harga Sedang', 'Makan Malam', 'Masakan Eropa Populer', '-8.694977312896091', '115.26380702299798'),
(73, 'The Porch Cafe', 'Jalan Danau Tamblingan 110, Sanur', 'Denpasar', 'Denpasar', '0361 281682', 'bungalows@flashbacks-chb.com', 'ww.flashbacks-chb.com', 'Restoran Formal', 'Pemandangan Pantai', 'Reservasi', 'Harga Sedang', 'Makan Siang', 'Masakan Eropa Populer', '-8.696928725532292', '115.2651803140136'),
(74, 'Mezzanine Bar & Restaurant', 'Jl. Cemara 35, Sanur', 'Denpasar', 'Denpasar', '0361 288009', 'purisantrian@santrian.com', 'www.santrian.com', 'Restoran Khusus', 'Pemandangan Pantai', 'Musik', 'Harga Mewah', 'Makan Malam', 'Masakan Italia', '-8.707364368319341', '115.25848552031243'),
(75, 'Three Monkeys Sanur', 'Jl. Danau Tamblingan, Sanur', 'Denpasar', 'Denpasar', '0361 286002', '-', 'threemonkeyscafebali.com/', 'Restoran Khusus', 'Pemandangan Pantai', 'Musik', 'Harga Mewah', 'Makan Malam', 'Masakan Italia', '-8.69328042408072', '115.26397868437493'),
(76, 'The Onion Bar & Restaurant', 'Jl. Cemara No. 29', 'Denpasar', 'Denpasar', '081246403264', '-', 'theonionbali.com', 'Restoran Khusus', 'Pemandangan Pantai', 'Musik', 'Harga Mewah', 'Makan Siang', 'Masakan Italia', '-8.706940160871621', '115.25848552031243'),
(77, 'Grocer and Grind, Sanur', 'Jl. Danau Tamblingan 152, Sanur', 'Denpasar', 'Denpasar', '0361 270635', 'info@groserandgrind.com', 'groserandgrind.com', 'Restoran Khusus', 'Pemandangan Pantai', 'Musik', 'Harga Mewah', 'Makan Siang', 'Masakan Italia', '-8.695825754421742', '115.26415034575189'),
(78, 'La Playa Cafe', 'Jl Duyung, Sanur', 'Denpasar', 'Denpasar', '082147944514', '-', '-', 'Restoran Khusus', 'Pemandangan Pantai', 'Musik', 'Harga Mewah', 'Makan Siang', 'Masakan Italia', '-8.703207114593734', '115.26273413939202'),
(79, 'Tree Bar at Maya Sanur', 'Jl. Danau Tamblingan 89M', 'Denpasar', 'Denpasar', '361 8497800', ' info@mayasanur.com', 'mayaresorts.com', 'Restoran Khusus', 'Pemandangan Pantai', 'Musik', 'Harga Mewah', 'Makan Malam', 'Masakan Italia', '-8.692601666402933', '115.26621028227532'),
(80, 'Black House Burgers', 'Jl. Patimura Blok 4 no. 1', 'Kuta', 'Badung', '081547233775', 'reservation@blackhouseburgers.com', 'blackhouseburgers.com', 'Restoran Informal', 'Pemandangan Kota', 'Wifi', 'Harga Murah', 'Makan Pagi', 'Masakan Cepat Saji', '-8.717121006810835', '115.17542287153924'),
(81, 'Johnny Tacos', 'Jl. Kartika Plaza no. 21', 'Kuta', 'Badung', '0821-4466-6232', '-', '-', 'Restoran Informal', 'Pemandangan Kota', 'Wifi', 'Harga Murah', 'Makan Siang', 'Masakan Cepat Saji', '-8.733590058711476', '115.16729041380609'),
(82, 'Pronto Pizza', 'Jl. Popies I', 'Kuta', 'Badung', '0361 3007020', '-', '-', 'Restoran Informal', 'Pemandangan Pantai', 'Wifi', 'Harga Murah', 'Makan Pagi', 'Masakan Cepat Saji', '-8.72023883541568', '115.17095967573846'),
(83, 'Warung Nikmat', 'Jl. Bakungsari GG Biduri no. 6', 'Kuta', 'Badung', '0361 764678', '-', '-', 'Restoran Informal', 'Pemandangan Kota', 'Wifi', 'Harga Murah', 'Makan Pagi', 'Masakan Cepat Saji', '-8.724459527916522', '115.17374917311395'),
(84, 'Deliziosa Pizza & Pasta', 'Jl. Poppies II no. 46', 'Kuta', 'Badung', '0878-6200-7505', '-', '-', 'Restoran Informal', 'Pemandangan Pantai', 'Wifi', 'Harga Murah', 'Makan Siang', 'Masakan Cepat Saji', '-8.717099797003337', '115.17143174452508'),
(85, 'Envy Bali', 'Jl. Wana Segara 33', 'Kuta', 'Badung', '0361 61752527', '-', '-', 'Restoran Informal', 'Pemandangan Pantai', 'Wifi', 'Harga Murah', 'Makan Siang', 'Masakan Cepat Saji', '-8.73676077148438', '115.1648442391845'),
(86, 'Kori Restaurant & Bar', 'Jalan Legian, Gang Poppies', 'Kuta', 'Badung', '0361 758605', 'info@korirestaurant.co.id', 'www.korirestaurant.co.id', 'Restoran Formal', 'Pemandangan Kota', 'Reservasi', 'Harga Sedang', 'Makan Siang', 'Masakan Eropa Populer', '-8.721256896263384', '115.17398520750726'),
(87, 'Kafe Batan Waru', 'Jalan Kartika Plaza Kuta', 'Kuta', 'Badung', '0361 8978074', 'info@baligoodfood.com', 'www.batanwaru.com', 'Restoran Formal', 'Pemandangan Pantai', 'Reservasi', 'Harga Sedang', 'Makan Siang', 'Masakan Eropa Populer', '-8.7298466741525', '115.16801997465814'),
(88, 'Boardwalk Restaurant & Lounge', 'Jl. Kartika Plaza', 'Kuta', 'Badung', '0361 752725', 'info@boardwalk-restaurant.com', 'www.boardwalk-restaurant.com', 'Restoran Formal', 'Pemandangan Pantai', 'Reservasi', 'Harga Sedang', 'Makan Malam', 'Masakan Eropa Populer', '-8.732391755560807', '115.1674191598388'),
(89, 'Colosseum Restaurant', 'Jl. Raya Pantai Kuta 10/11', 'Kuta', 'Badung', '0361 4752169', 'colosseumbali@gmail.com', 'www.colosseumbali.com', 'Restoran Formal', 'Pemandangan Pantai', 'Reservasi', 'Harga Sedang', 'Makan Siang', 'Masakan Eropa Populer', '-8.719241981480442', '115.1688782815429'),
(90, 'Bamboo Bar & Grill', 'Jl.Kartika Plaza,', 'Kuta', 'Badung', '0361 758128', '-', '-', 'Restoran Formal', 'Pemandangan Pantai', 'Reservasi', 'Harga Sedang', 'Makan Malam', 'Masakan Eropa Populer', '-8.727386412289553', '115.16973658842767'),
(91, 'Cafe Sardinia', 'Jl Pantai Kuta', 'Kuta', 'Badung', '0361 8464966', 'media@cafesardinia.com', 'cafesardinia.com', 'Restoran Formal', 'Pemandangan Pantai', 'Reservasi', 'Harga Sedang', 'Makan Siang', 'Masakan Eropa Populer', '-8.718732948657802', '115.16913577360833'),
(92, 'Bali Pearl Restaurant', 'Jl. Arjuna Double Six', 'Kuta', 'Badung', '0819-3433-4060', 'balipearlrestaurant@gmail.com', 'www.pearl-bali.com', 'Restoran Khusus', 'Pemandangan Pantai', 'Musik', 'Harga Mewah', 'Makan Malam', 'Masakan Italia', '-8.697013569329354', '115.16649647993768'),
(93, 'Teatro Gastroteque', 'Jl. Kayu Aya', 'Kuta', 'Badung', '0851-0170-0078', 'reservation@teatrobali.com', 'teatrobali.com', 'Restoran Khusus', 'Pemandangan Pantai', 'Musik', 'Harga Mewah', 'Makan Malam', 'Masakan Italia', '-8.68377770475216', '115.16175433439935'),
(94, 'Breeze at The Samaya Seminyak', 'Jl. Laksmana, Seminyak Beach', 'Kuta', 'Badung', '0361 731149', 'info@thesamayabali.com', 'seminyak.thesamayabali.com', 'Restoran Khusus', 'Pemandangan Pantai', 'Musik', 'Harga Mewah', 'Makan Malam', 'Masakan Italia', '-8.685135250828777', '115.15480204863275'),
(95, 'Sarong Restaurant', 'Jalan Petingenget no 19X', 'Kuta', 'Badung', '0361 4737809', 'reservation@sarongbali.com', 'www.sarongbali.com', 'Restoran Khusus', 'Pemandangan Pantai', 'Musik', 'Harga Mewah', 'Makan Malam', 'Masakan Italia', '-8.672747460831081', '115.14621897978509'),
(96, 'Mejekawi', 'Jalan Kayu Aya No.9 ', 'Kuta', 'Badung', '0361 736969', '-', '-', 'Restoran Khusus', 'Pemandangan Pantai', 'Musik', 'Harga Mewah', 'Makan Siang', 'Masakan Italia', '-8.685262520521563', '115.15355750364984'),
(97, 'Kudeta', 'Jl. Kayu Aya no.9', 'Kuta', 'Badung', '0361 736969', 'reservations@kudeta.com', 'www.kudeta.com', 'Restoran Khusus', 'Pemandangan Pantai', 'Musik', 'Harga Mewah', 'Makan Siang', 'Masakan Italia', '-8.685304943742889', '115.15317126555169');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id_admin`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`);

--
-- Indexes for table `datakota`
--
ALTER TABLE `datakota`
  ADD PRIMARY KEY (`Id_kota`);

--
-- Indexes for table `datarestoran`
--
ALTER TABLE `datarestoran`
  ADD PRIMARY KEY (`Id_restoran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `datakota`
--
ALTER TABLE `datakota`
  MODIFY `Id_kota` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `datarestoran`
--
ALTER TABLE `datarestoran`
  MODIFY `Id_restoran` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
