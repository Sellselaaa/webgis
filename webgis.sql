-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17 Jun 2022 pada 04.34
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webgis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'kepala', '123'),
(3, 'petugas', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(5) NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(55) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `konten` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `tanggal`, `gambar`, `judul`, `konten`) VALUES
(1, '2021-11-04', 'Acer_Wallpaper_01_5000x2814.jpg', 'Dalam Dua Pekan, Banyumas Dilanda 27 Bencana Alam', 'bencana'),
(2, '2021-11-21', 'bencana.webp', 'Hujan Disertai Angin Kencang, 3 Pohon Tumbang di Kota Purwokerto, di Somagede dan Ajibarang Timpa Rumah', 'Hujan disertai angin kencang yang terjadi pada siang menjelang sore hari tadi yang terjadi di Kota Purwokerto, sebabkan 3 pohon tumbang. Adapun di Desa Plana Kecamatan Somagede dan Desa Kracak Kecamatan Ajibarang, pohon tumbang menimpa rumah warga.\r\n\r\nTidak ada korban jiwa dalam kejadian tersebut. Namun di Desa Plana sebabkan kabel listrik terputus di RT 04 RW 03 dan RT 05 RW 05. Kemudian Di Desa Kracak Ajibarang kerugian ditaksir kurang lebih Rp 20.000.000.\r\n'),
(3, '2022-04-27', 'Acer_Wallpaper_01_5000x2814.jpg', 'Angin Kencang', 'ghjj');

-- --------------------------------------------------------

--
-- Struktur dari tabel `databencana`
--

CREATE TABLE `databencana` (
  `Id_bencana` int(10) NOT NULL,
  `namabencana` varchar(50) DEFAULT NULL,
  `tanggal` date NOT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `wilayah` varchar(50) DEFAULT NULL,
  `keterangan` varchar(500) DEFAULT NULL,
  `luka` int(100) DEFAULT NULL,
  `meninggal` int(100) DEFAULT NULL,
  `lat` varchar(50) DEFAULT NULL,
  `lng` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `databencana`
--

INSERT INTO `databencana` (`Id_bencana`, `namabencana`, `tanggal`, `alamat`, `wilayah`, `keterangan`, `luka`, `meninggal`, `lat`, `lng`) VALUES
(1, 'Angin Kencang', '0000-00-00', 'Desa Ajibarang', 'Ajibarang', 'Hujan dengan intensitas sedang sehingga mengakibatkan pohon pete berada di tebing belakang rumah Bp. Muklas roboh menimpa rumah bagian tengah milik Bp. Muklas', 1, 2, '-7.411752407123764', '109.06337403203125'),
(2, 'Longsor', '0000-00-00', 'Jalan Kabupaten Kadus 3 Desa Cikembulan Kec. Pekuncen', 'Pakuncen', 'hujan deras Cimbulan  mengakibatkan jalan penghubung Desa Cikembulan dan Kalisari mengalami amblas kedalaman 2m', 0, 0, '-7.381685020966988', '109.12030123616333'),
(3, 'Kebakaran', '0000-00-00', 'Baturraden', 'Baturraden', 'kebakaran dapur rumah milik pak warta,kejadian disebabkan oleh kompor gas yang lupa tidak dimatikan saat masak lalu ditinggal kerja,api dengan cepat merambat dinding yang terbuat dari kayu.', 1, 3, '-7.418561438420704', '109.24052857304687'),
(7, 'Angin Kencang', '2022-03-23', 'ch122b', 'h1h', 'gh', 1, 3, '-7.396772167869964', '109.32155274296875'),
(4, 'Angin Kencang', '0000-00-00', 'Desa Bogangin Kec. Sumpiuh', 'Bogangin', 'Desa Cikembulan mengalami hujan deras,mengakibatkan jalan penghubung Desa Cikembulan dan Desa Kalisari mengalami amblas kedalaman 2 m', 0, 0, '-7.447158218238088', '109.28722046757812'),
(5, 'tsunami', '0000-00-00', 'Baturraden', 'Baturraden', 'kebakaran dapur rumah bapak warta, disebabkan kompor gas lupa tidak dimatikan saat memasak lalu ditinggal pemiliknya kerja.Api berhasil dipadamkan dengan menggunakan alat seadanya oleh warga.', 0, 0, '-7.295982846662773', '109.21306275273437'),
(6, 'tsunami', '2022-01-06', 'Petanahan, Kebumen', 'Kebumen', 'gtw', 2, 2, '-7.673142729164578', '109.66350220585937'),
(8, 'Kebakaran', '2022-04-04', 'Baturraden', 'Baturraden', 'sdfghjkl;;', 1, 2, '-7.3000693438736555', '109.21718262578125'),
(9, 'angin ', '2022-04-26', 'sumpiuh rt 02 rw 01 ', 'sumpiuh', 'hujan besar', 0, 0, '-7.425370364357866', '109.38335083867187');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datakecamatan`
--

CREATE TABLE `datakecamatan` (
  `Id_kecamatan` int(5) NOT NULL,
  `namakecamatan` varchar(50) DEFAULT NULL,
  `luas` varchar(500) NOT NULL,
  `kodepos` varchar(10) DEFAULT NULL,
  `deskripsi` varchar(500) DEFAULT NULL,
  `total` varchar(100) DEFAULT NULL,
  `lat` varchar(50) DEFAULT NULL,
  `lng` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `datakecamatan`
--

INSERT INTO `datakecamatan` (`Id_kecamatan`, `namakecamatan`, `luas`, `kodepos`, `deskripsi`, `total`, `lat`, `lng`) VALUES
(1, 'Lumbir', '9.948,54 kmÂ²', '53177', 'Kecamatan Lumbir merupakan bagian dari wilayah Kabupaten Banyumas Provinsi Jawa Tengah dengan luas 9.948,54 kmÂ­Â² dan berada pada ketinggian 35 â€“ 40 m dari permukaan laut dengan curah hujan 2.227 mm/tahun.', '46', '-7.528852999999984', '109.23297547246094'),
(46, 'Sumpiuh', '60,01 km2', '53195', 'Jalan utama lintas selatan Jawa yang menghubungkan Kabupaten Banyumas dan Kebumen.Di jalan ini sering terjadi kemacetan karena Pasar dan perlintasan kereta api.Untuk itu,dibangunlah Jalan Lingkar Sumpiuh sebagai pengalihan jalur.', '2', '-7.601003925868075', '109.357258309375'),
(47, 'Sumpiuh', '10.000m2', '53195', 'fhjklghj', '2', '-7.601003925868075', '109.357258309375'),
(48, 'Binangun', '60,01 km2', '53194', 'fhjklghj', '20', '-7.664976684235922', '109.25700806523437'),
(57, 'Lebeng', '1000', '53195', 'lebeng adalah', '2', '-7.617338305486138', '109.05925415898437');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporbencana`
--

CREATE TABLE `laporbencana` (
  `Id_lapor` int(3) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `lapor` varchar(250) NOT NULL,
  `date` datetime NOT NULL,
  `art_id` int(3) NOT NULL,
  `art_url` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laporbencana`
--

INSERT INTO `laporbencana` (`Id_lapor`, `nama`, `email`, `website`, `lapor`, `date`, `art_id`, `art_url`) VALUES
(1, 'moeh', 'moeh@gmail.com', 'www.moeh.com', 'sangat membantu, terimakasih gan ðŸ˜€', '2017-05-14 21:29:31', 1, 'komentar.php'),
(1906, 'Graciela Ayudia Roseria', 'graciela.roseria@mhs.unsoed.ac', 'www', 'ghjklkj', '2022-01-24 09:25:56', 1, 'komentar.php'),
(1905, 'Graciela Ayudia Roseria', 'graciela.roseria@mhs.unsoed.ac', 'www', 'ghjklkj', '2022-01-24 09:25:31', 1, 'komentar.php'),
(1904, 'Graciela Ayudia Roseria', 'graciela.roseria@mhs.unsoed.ac', 'www', 'ghjklkj', '2022-01-24 09:23:50', 1, 'komentar.php'),
(1903, 'Graciela Ayudia Roseria', 'graciela.roseria@mhs.unsoed.ac', 'www', 'ghjklkj', '2022-01-24 09:23:43', 1, 'komentar.php'),
(1902, 'Graciela Ayudia Roseria', 'graciela.roseria@mhs.unsoed.ac', 'www', 'ghjklkj', '2022-01-24 09:20:12', 1, 'komentar.php'),
(1901, 'Graciela Ayudia Roseria', 'graciela.roseria@mhs.unsoed.ac', 'www', 'ghjklkj', '2022-01-24 09:19:01', 1, 'komentar.php'),
(1900, 'Graciela Ayudia Roseria', 'siraheraka@gmail.com', 'oih', 'khjukuh', '2022-01-23 03:02:07', 1, 'komentar.php'),
(1899, 'Graciela Ayudia Roseria', 'siraheraka@gmail.com', 'oih', 'khjukuh', '2022-01-23 03:01:02', 1, 'komentar.php'),
(1898, 'Graciela Ayudia Roseria', 'siraheraka@gmail.com', 'gfgn', 'jhgjhg', '2022-01-23 02:56:55', 1, 'komentar.php'),
(1897, 'Graciela Ayudia Roseria', 'siraheraka@gmail.com', 'hgkjh', ',jhkjh', '2022-01-23 02:56:00', 1, 'komentar.php'),
(1896, 'Graciela Ayudia Roseria', 'siraheraka@gmail.com', 'hgkjh', ',jhkjh', '2022-01-23 02:48:44', 1, 'komentar.php'),
(1895, 'Graciela Ayudia Roseria', 'siraheraka@gmail.com', 'www', 'jjjl', '2022-01-23 02:47:48', 1, 'komentar.php'),
(1894, 'Graciela Ayudia Roseria', 'siraheraka@gmail.com', 'www', 'jajal', '2022-01-23 02:38:22', 1, 'komentar.php'),
(1893, 'Graciela Ayudia Roseria', 'siraheraka@gmail.com', 'hhhaha', 'percobaan', '2022-01-23 02:12:12', 1, 'komentar.php'),
(1964, 'lala', 'ladangasoka@gmail.com', 'www.instagram.com/sellselaaa__', 'hay', '2022-03-17 03:31:27', 1, 'komentar.php'),
(1963, 'ACI', 'ladangasoka@gmail.com', 'www.instagram.com/sellselaaa__', 'vn', '2022-03-17 02:33:48', 1, 'komentar.php'),
(1962, 'ACI', 'ladangasoka@gmail.com', 'www.instagram.com/sellselaaa__', 'vn', '2022-03-17 02:21:40', 1, 'komentar.php'),
(1961, 'ACI', 'ladangasoka@gmail.com', 'www.instagram.com/sellselaaa__', 'vn', '2022-03-17 02:21:37', 1, 'komentar.php'),
(1960, 'ACI', 'ladangasoka@gmail.com', 'www.instagram.com/sellselaaa__', 'vn', '2022-03-17 02:20:52', 1, 'komentar.php'),
(1959, 'ACI', 'ladangasoka@gmail.com', 'www.instagram.com/sellselaaa__', 'vn', '2022-03-17 02:00:34', 1, 'komentar.php'),
(1958, 'ACI', 'ladangasoka@gmail.com', 'www.instagram.com/sellselaaa__', 'vn', '2022-03-17 01:49:44', 1, 'komentar.php'),
(1957, 'ACI', 'ladangasoka@gmail.com', 'www.instagram.com/sellselaaa__', 'vn', '2022-03-17 01:47:06', 1, 'komentar.php'),
(1956, 'Graciela Ayudia Roseria', 'graciela.roseria@mhs.unsoed.ac', 'www', 'hyy', '2022-03-17 01:42:48', 1, 'komentar.php'),
(1955, 'Graciela Ayudia Roseria', 'graciela.roseria@mhs.unsoed.ac', 'www', 'hyy', '2022-03-17 01:40:42', 1, 'komentar.php'),
(1954, 'Graciela Ayudia Roseria', 'graciela.roseria@mhs.unsoed.ac', 'www', 'hyy', '2022-03-17 01:31:23', 1, 'komentar.php'),
(1953, 'Graciela Ayudia Roseria', 'graciela.roseria@mhs.unsoed.ac', 'www', 'hyy', '2022-03-17 01:28:44', 1, 'komentar.php'),
(1952, 'Graciela Ayudia Roseria', 'graciela.roseria@mhs.unsoed.ac', 'www', 'hyy', '2022-03-17 01:11:18', 1, 'komentar.php'),
(1951, 'sela', 'ernawatisusiloningsih@gmail.co', 'www.instagram.com/sellselaaa__', 'he', '2022-03-17 08:00:05', 1, 'komentar.php'),
(1950, 'sela', 'ladangasoka@gmail.com', 'www.instagram.com/sellselaaa__', 'he', '2022-03-17 07:55:43', 1, 'komentar.php'),
(1949, 'sel', 'ladangasoka@gmail.com', 'www.instagram.com/sellselaaa__', 'Sell', '2022-03-17 05:52:12', 1, 'komentar.php'),
(1946, 'Aci', 'ladangasoka@gmail.com', 'www.instagram.com/sellselaaa__', 'hellow', '2022-03-17 05:36:18', 1, 'komentar.php'),
(1945, 'Aci', 'ladangasoka@gmail.com', 'www.instagram.com/sellselaaa__', 'hellow', '2022-03-17 05:30:18', 1, 'komentar.php'),
(1947, 'Aci', 'ladangasoka@gmail.com', 'www.instagram.com/sellselaaa__', 'hellow', '2022-03-17 05:38:46', 1, 'komentar.php'),
(1948, 'Aci', 'ladangasoka@gmail.com', 'www.instagram.com/sellselaaa__', 'hellow', '2022-03-17 05:42:49', 1, 'komentar.php'),
(1943, 'ACI', 'graciela.roseria@mhs.unsoed.ac', 'y', 'fgh12', '2022-03-16 05:48:12', 1, 'komentar.php'),
(1942, 'Graciela Ayudia Roseria', 'ladangasoka@gmail.com', 'hhhaha', 'fghj', '2022-03-16 05:43:50', 1, 'komentar.php'),
(1941, 'sel', 'ladangasoka@gmail.com', 'www', 'hyy', '2022-03-16 05:34:15', 1, 'komentar.php'),
(1940, 'sel', 'ladangasoka@gmail.com', 'www', 'hyy', '2022-03-16 05:30:21', 1, 'komentar.php'),
(1939, 'sel', 'ladangasoka@gmail.com', 'www', 'ya', '2022-03-16 05:27:10', 1, 'komentar.php'),
(1938, 'Graciela Ayudia Roseria', 'ladangasoka@gmail.com', 'jhj', 'dfg', '2022-03-16 05:26:06', 1, 'komentar.php'),
(1937, 'Graciela Ayudia Roseria', 'ladangasoka@gmail.com', 'jhj', 'dfg', '2022-03-16 05:24:34', 1, 'komentar.php'),
(1936, 'Graciela Ayudia Roseria', 'ladangasoka@gmail.com', 'hhhaha', 'dfgh1', '2022-03-16 05:23:49', 1, 'komentar.php'),
(1935, 'Graciela Ayudia Roseria', 'ladangasoka@gmail.com', '-', 'fgh1', '2022-03-16 05:22:34', 1, 'komentar.php'),
(1934, 'Graciela Ayudia Roseria', 'ladangasoka@gmail.com', '-', 'fgh1', '2022-03-16 05:17:50', 1, 'komentar.php'),
(1933, 'Graciela Ayudia Roseria', 'ladangasoka@gmail.com', 'www', 'heeew', '2022-03-16 05:15:56', 1, 'komentar.php'),
(1932, 'Graciela Ayudia Roseria', 'graciela.roseria@mhs.unsoed.ac', 'www', 'heee', '2022-03-16 05:14:52', 1, 'komentar.php'),
(1931, 'Graciela Ayudia Roseria', 'graciela.roseria@mhs.unsoed.ac', 'www', 'heee', '2022-03-16 05:07:00', 1, 'komentar.php'),
(1930, 'Graciela Ayudia Roseria', 'ladangasoka@gmail.com', '-', 'vn', '2022-01-26 05:47:01', 1, 'komentar.php'),
(1929, 'Graciela Ayudia Roseria', 'ladangasoka@gmail.com', '-', 'vn', '2022-01-26 05:44:57', 1, 'komentar.php'),
(1928, 'Graciela Ayudia Roseria', 'ladangasoka@gmail.com', '-', 'vn', '2022-01-26 05:31:33', 1, 'komentar.php'),
(1927, 'sel', 'ladangasoka@gmail.com', 'gh', 'gh121hg', '2022-01-26 04:49:50', 1, 'komentar.php'),
(1926, 'sel', 'ladangasoka@gmail.com', 'hhhaha', 'fgh12', '2022-01-26 04:39:00', 1, 'komentar.php'),
(1925, 'sel', 'ladangasoka@gmail.com', 'hhhaha', 'fgh12', '2022-01-26 04:37:16', 1, 'komentar.php'),
(1892, 'Graciela Ayudia Roseria', 'riasela988@gmail.com', 'hhhaha', 'lnklk', '2022-01-23 02:08:39', 1, 'komentar.php'),
(1924, 'sel', 'ladangasoka@gmail.com', 'hhhaha', 'fgh12', '2022-01-26 04:35:51', 1, 'komentar.php'),
(1923, 'sel', 'ladangasoka@gmail.com', 'hhhaha', 'fgh12', '2022-01-26 04:35:03', 1, 'komentar.php'),
(1922, 'sel', 'ladangasoka@gmail.com', 'hhhaha', 'fgh12', '2022-01-26 04:33:57', 1, 'komentar.php'),
(1921, 'sel', 'ladangasoka@gmail.com', 'hhhaha', 'fgh12', '2022-01-26 04:32:53', 1, 'komentar.php'),
(1920, 'sel', 'ladangasoka@gmail.com', 'hhhaha', 'fgh12', '2022-01-26 04:31:48', 1, 'komentar.php'),
(1919, 'sel', 'ladangasoka@gmail.com', 'hhhaha', 'fgh12', '2022-01-26 04:30:48', 1, 'komentar.php'),
(1918, 'sel', 'ladangasoka@gmail.com', 'hhhaha', 'fgh12', '2022-01-26 04:30:23', 1, 'komentar.php'),
(1917, 'sel', 'ladangasoka@gmail.com', 'hhhaha', 'fgh12', '2022-01-26 04:29:58', 1, 'komentar.php'),
(1916, 'sel', 'ladangasoka@gmail.com', 'hhhaha', 'fgh12', '2022-01-26 04:28:49', 1, 'komentar.php'),
(1915, 'sel', 'ladangasoka@gmail.com', 'hhhaha', 'fgh12', '2022-01-26 04:25:12', 1, 'komentar.php'),
(1914, 'sel', 'ladangasoka@gmail.com', 'hhhaha', 'fgh12', '2022-01-26 04:23:38', 1, 'komentar.php'),
(1912, 'sel', 'ladangasoka@gmail.com', 'hhhaha', 'fgh12', '2022-01-26 04:20:10', 1, 'komentar.php'),
(1913, 'sel', 'ladangasoka@gmail.com', 'hhhaha', 'fgh12', '2022-01-26 04:22:10', 1, 'komentar.php'),
(1909, 'sel', 'ladangasoka@gmail.com', 'hhhaha', 'fgh12', '2022-01-26 04:13:19', 1, 'komentar.php'),
(1910, 'sel', 'ladangasoka@gmail.com', 'hhhaha', 'fgh12', '2022-01-26 04:15:39', 1, 'komentar.php'),
(1911, 'sel', 'ladangasoka@gmail.com', 'hhhaha', 'fgh12', '2022-01-26 04:16:48', 1, 'komentar.php'),
(1965, '', '', '', '', '0000-00-00 00:00:00', 0, ''),
(1966, '', '', '', '', '0000-00-00 00:00:00', 0, ''),
(1967, '', '', '', '', '0000-00-00 00:00:00', 0, ''),
(1968, 'Graciela Ayudia Roseria', 'riasela988@gmail.com', 'www.instagram.com/sellselaaa__', 'sdfghjb', '2022-04-26 08:07:07', 1, 'lapor.php'),
(1969, 'veli', 'sandrinavelivia@gmail.com', 'www.instagram.com/sellselaaa__', 'ghjk', '2022-04-26 08:23:19', 1, 'lapor.php'),
(1970, 'veli', 'sandrinavelivia@gmail.com', 'www.instagram.com/sellselaaa__', 'ghjk', '2022-04-26 08:29:48', 1, 'lapor.php'),
(1971, 'veli', 'sandrinavelivia@gmail.com', 'www.instagram.com/sellselaaa__', 'ghjk', '2022-04-26 08:31:13', 1, 'lapor.php'),
(1972, 'veli', 'sandrinavelivia@gmail.com', 'www.instagram.com/sellselaaa__', 'ghjk', '2022-04-26 08:32:27', 1, 'lapor.php'),
(1973, 'veli', 'ladangasoka@gmail.com', 'www.instagram.com/sellselaaa__', 'ghjk', '2022-04-26 08:33:48', 1, 'lapor.php'),
(1974, 'veli', 'ladangasoka@gmail.com', 'www.instagram.com/sellselaaa__', 'ghjk', '2022-04-26 08:45:57', 1, 'lapor.php'),
(1975, 'veli', 'ladangasoka@gmail.com', 'www.instagram.com/sellselaaa__', 'ghjk', '2022-04-26 08:47:26', 1, 'lapor.php'),
(1976, 'veli', 'ladangasoka@gmail.com', 'www.instagram.com/sellselaaa__', 'ghjk', '2022-04-26 08:49:11', 1, 'lapor.php'),
(1977, 'veli', 'ladangasoka@gmail.com', 'www.instagram.com/sellselaaa__', 'ghjk', '2022-04-26 08:51:19', 1, 'lapor.php'),
(1978, 'vely', 'ladangasoka@gmail.com', 'www.instagram.com/sellselaaa__', 'ghjk', '2022-04-26 08:51:47', 1, 'lapor.php'),
(1979, 'vely', 'ladangasoka@gmail.com', 'www.instagram.com/sellselaaa__', 'ghjk', '2022-04-26 08:52:47', 1, 'lapor.php'),
(1980, 'vely', 'ladangasoka@gmail.com', 'www.instagram.com/sellselaaa__', 'ghjk', '2022-04-26 08:57:58', 1, 'lapor.php'),
(1981, 'veli', 'gracielaroseria@gmail.com', '-', 'cjhg', '2022-04-26 08:59:48', 1, 'lapor.php'),
(1982, 'veli', 'gracielaroseria@gmail.com', '-', 'cjhg', '2022-04-26 09:00:25', 1, 'lapor.php'),
(1983, 'veli', 'gracielaroseria@gmail.com', '-', 'cjhg', '2022-04-26 09:00:35', 1, 'lapor.php'),
(1984, 'sela', 'ladangasoka@gmail.com', 'hei', 'yak', '2022-04-26 12:12:35', 1, 'lapor.php'),
(1985, 'sela', 'ladangasoka@gmail.com', 'hei', 'helo', '2022-04-27 09:42:51', 1, 'lapor.php');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `databencana`
--
ALTER TABLE `databencana`
  ADD PRIMARY KEY (`Id_bencana`);

--
-- Indexes for table `datakecamatan`
--
ALTER TABLE `datakecamatan`
  ADD PRIMARY KEY (`Id_kecamatan`);

--
-- Indexes for table `laporbencana`
--
ALTER TABLE `laporbencana`
  ADD PRIMARY KEY (`Id_lapor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `databencana`
--
ALTER TABLE `databencana`
  MODIFY `Id_bencana` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `datakecamatan`
--
ALTER TABLE `datakecamatan`
  MODIFY `Id_kecamatan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `laporbencana`
--
ALTER TABLE `laporbencana`
  MODIFY `Id_lapor` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1986;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
