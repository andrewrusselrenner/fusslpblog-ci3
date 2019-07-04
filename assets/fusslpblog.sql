-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 04 Jul 2019 pada 04.27
-- Versi server: 5.7.26
-- Versi PHP: 7.2.18

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fusslpblog`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `author`
--
-- Pembuatan: 28 Jun 2019 pada 02.59
--

DROP TABLE IF EXISTS `author`;
CREATE TABLE IF NOT EXISTS `author` (
  `AuthorId` int(8) NOT NULL,
  `Nama` varchar(155) NOT NULL,
  `Email` varchar(85) NOT NULL,
  `Password` varchar(125) NOT NULL,
  `Title` varchar(155) DEFAULT NULL,
  `Tentang` text,
  `HakAkses` varchar(7) NOT NULL DEFAULT 'user',
  PRIMARY KEY (`AuthorId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `author`
--

INSERT INTO `author` (`AuthorId`, `Nama`, `Email`, `Password`, `Title`, `Tentang`, `HakAkses`) VALUES
(12, 'Fahmi', 'fahmi@fusslp.com', 'b93939873fd4923043b9dec975811f66', 'Web Developer', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae lorem eleifend, iaculis libero ac, ornare dui. Fusce quis sollicitudin tortor, id vestibulum lectus. Curabitur in enim mauris. Sed rhoncus iaculis libero, at varius mauris faucibus ac. Praesent pellentesque metus ut purus sodales viverra. Sed mi risus, lobortis eget nisi auctor, pulvinar viverra lectus. Fusce ac lorem finibus, facilisis arcu quis, vestibulum dui. Pellentesque lorem quam, euismod vitae odio et, accumsan facilisis velit. Vivamus erat lorem, posuere ac mauris eget, euismod malesuada nunc. Donec purus est, vehicula eget sagittis eget, aliquam a elit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam eu consectetur dolor, sed porttitor metus. Mauris id sapien in lacus pharetra vehicula. Fusce lobortis id turpis eget vestibulum. Mauris finibus nisl eget placerat finibus. Aenean pharetra feugiat nulla in tempus.</p>\r\n\r\n<p>Integer gravida metus massa, sit amet fermentum odio lacinia efficitur. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac massa at neque facilisis efficitur. Cras sapien nibh, pretium et ligula dignissim, commodo accumsan tellus. Praesent congue efficitur dui ac tincidunt. Donec eu risus ultricies, fermentum risus eget, ornare tortor. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam tristique at erat sed finibus. Mauris venenatis interdum tortor, a tempus dui commodo sit amet. Sed quis mi ante. Fusce quis velit porta quam vestibulum sollicitudin dictum ac leo. Sed porttitor enim purus, ut auctor dolor rhoncus non. In aliquet venenatis mauris vitae finibus. Donec condimentum nec velit et dapibus. Quisque non purus vitae lorem gravida consectetur eget non leo.</p>', 'penulis'),
(15, 'Vanila', 'vanila@fusslp.com', 'b93939873fd4923043b9dec975811f66', 'Es Krim', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae lorem eleifend, iaculis libero ac, ornare dui. Fusce quis sollicitudin tortor, id vestibulum lectus. Curabitur in enim mauris. Sed rhoncus iaculis libero, at varius mauris faucibus ac. Praesent pellentesque metus ut purus sodales viverra. Sed mi risus, lobortis eget nisi auctor, pulvinar viverra lectus. Fusce ac lorem finibus, facilisis arcu quis, vestibulum dui. Pellentesque lorem quam, euismod vitae odio et, accumsan facilisis velit. Vivamus erat lorem, posuere ac mauris eget, euismod malesuada nunc. Donec purus est, vehicula eget sagittis eget, aliquam a elit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam eu consectetur dolor, sed porttitor metus. Mauris id sapien in lacus pharetra vehicula. Fusce lobortis id turpis eget vestibulum. Mauris finibus nisl eget placerat finibus. Aenean pharetra feugiat nulla in tempus.</p>\r\n\r\n<p>Integer gravida metus massa, sit amet fermentum odio lacinia efficitur. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac massa at neque facilisis efficitur. Cras sapien nibh, pretium et ligula dignissim, commodo accumsan tellus. Praesent congue efficitur dui ac tincidunt. Donec eu risus ultricies, fermentum risus eget, ornare tortor. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam tristique at erat sed finibus. Mauris venenatis interdum tortor, a tempus dui commodo sit amet. Sed quis mi ante. Fusce quis velit porta quam vestibulum sollicitudin dictum ac leo. Sed porttitor enim purus, ut auctor dolor rhoncus non. In aliquet venenatis mauris vitae finibus. Donec condimentum nec velit et dapibus. Quisque non purus vitae lorem gravida consectetur eget non leo.</p>', 'user'),
(20, 'Alya', 'alya@mail.com', 'b93939873fd4923043b9dec975811f66', 'Bocil', 'suka main ff', 'penulis'),
(21, 'Wahyu', 'wahyu@mail.com', 'b93939873fd4923043b9dec975811f66', 'Musisi', 'suka main musik', 'penulis');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bukutamu`
--
-- Pembuatan: 28 Jun 2019 pada 02.59
--

DROP TABLE IF EXISTS `bukutamu`;
CREATE TABLE IF NOT EXISTS `bukutamu` (
  `Id` int(255) NOT NULL AUTO_INCREMENT,
  `NamaPenulis` varchar(155) NOT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Pesan` text NOT NULL,
  `Ava` varchar(255) NOT NULL DEFAULT 'uid.jpg',
  `Tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `bukutamu`
--

INSERT INTO `bukutamu` (`Id`, `NamaPenulis`, `Email`, `Pesan`, `Ava`, `Tanggal`) VALUES
(1, 'Iqbal', 'iqbal@contoh.com', '<p>fbksjdbkfbdskjf ksdb fs dh vksd fkhbsdk vfsdb fjk sdjb fkjsdjk fbijsd kfv sdhkfiugewpajfpqojfpin jaozxvazpvmqonbuaorwipjnc k dasfvicnsd vhbopajnzsfh9poasnm vbsdpojzxv bosdhn cvvlosdbofpnsd bfoibdsknf oqwhpajpofnjosdblhgpjsiphgpins k vnipnspvsdipvnpdsn;v pdsidnvpnwdpfipn</p>', '4.jpg', '2019-05-31 15:06:51'),
(2, 'Abiyyu', 'abiyyu@contoh.com', '<p>fbksjdbkfbdskjf ksdb fs dh vksd fkhbsdk vfsdb fjk sdjb fkjsdjk fbijsd kfv sdhkfiugewpajfpqojfpin jaozxvazpvmqonbuaorwipjnc k dasfvicnsd vhbopajnzsfh9poasnm vbsdpojzxv bosdhn cvvlosdbofpnsd bfoibdsknf oqwhpajpofnjosdblhgpjsiphgpins k vnipnspvsdipvnpdsn;v pdsidnvpnwdpfipn</p>', '3.jpg', '2019-05-31 16:43:59'),
(3, 'Ayaa', 'ayaa@contoh.com', 'vbhjkbjhvcycfgc', 'uid.jpg', '2019-06-27 08:52:38'),
(4, 'Jake', 'poli@poli.co', 'nfdsjibnfjinskfnljsdbl', 'uid.jpg', '2019-06-27 08:55:20'),
(12, 'Adam', 'adam@mail.com', 'ndiua dahuid jabidajk dswde', 'uid.jpg', '2019-06-27 09:50:50'),
(13, 'Adam', 'adam@mail.com', 'ndiua dahuid jabidajk dswde', 'uid.jpg', '2019-06-27 09:50:50'),
(14, 'Melinda', 'melinda@mail.com', 'njbjsa ljdbiab djkajdbaj jfk aobfobaj fjabdfbjka', 'uid.jpg', '2019-06-27 09:54:51'),
(16, 'Tara', 'tara@mail.com', 'ndsjkbdfjk lfb dao dfj ak dfj al kf a df ', 'uid.jpg', '2019-06-27 10:01:04'),
(20, 'Michale', 'michael@example.com', 'mdkasold asj ojd a jsd kashivdkabld', 'uid.jpg', '2019-06-27 10:17:41'),
(21, 'Haekal', 'haekal@gmail.com', 'kdnsjabkd lassd ajs ldbasjkldl a', 'uid.jpg', '2019-06-27 10:21:57'),
(22, 'Kleen', 'kleen@mail.com', 'nfsdablf a fans dfaj sd as jfoaondfl adfs a', 'uid.jpg', '2019-06-27 10:22:48'),
(23, 'Hendra', 'hendra@mail.com', 'ndjlnlasl dmabdojas ,dm asbdlsal d a dl al dlasjodbjal', 'uid.jpg', '2019-06-27 10:36:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `post`
--
-- Pembuatan: 28 Jun 2019 pada 02.59
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `PostId` int(8) NOT NULL AUTO_INCREMENT,
  `Judul` varchar(155) NOT NULL,
  `Slug` varchar(65) NOT NULL,
  `Isi` text NOT NULL,
  `Kategori` varchar(50) DEFAULT NULL,
  `Author` varchar(155) NOT NULL,
  `Tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Tags` text,
  `GbrHeader` text,
  PRIMARY KEY (`PostId`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `post`
--

INSERT INTO `post` (`PostId`, `Judul`, `Slug`, `Isi`, `Kategori`, `Author`, `Tanggal`, `Tags`, `GbrHeader`) VALUES
(1, 'Kebuntuan Yang Merajalela, Sudah Mengambil Alih Dunia. Saatnya Kita Butuh Thanos!!', 'paling-buntu', '<p>Hiyahiyahiya dan lain sebagainya sudah <span style=\"text-decoration: underline;\">mengambil alih</span> dunia kita yang kita kenal selama ini. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>\r\n                    <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac lacus. <strong>Ut vehicula rhoncus</strong> elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit <em>pulvinar dict</em> vel in justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>\r\n                    <h2>Anak orang ilang!!! </h2>\r\n                    <p>Masih berlanjut dengan kasus teraneh, sekarang memakan korban lebih banyak gaesss!!!. Vivamus ac sem lac. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>', 'Random', 'Fahmi', '2019-05-25 15:30:51', NULL, 'pak putra.jpeg'),
(3, 'Kids Jaman Now Suka Ngedrug', 'kids-jaman-now-suka-ngedrug', '<p>Sekarang pada jamannya ngelem dan ngefly, apalagi addicted pubji, yang bikin <span style=\"text-decoration: underline;\">anak jaman now bego</span> dan tidak tau apa yang diomongkannya. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>\r\n                    <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac lacus. <strong>Ut vehicula rhoncus</strong> elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit <em>pulvinar dict</em> vel in justo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>', 'Random', 'Fahmi', '2019-05-25 15:30:51', NULL, 'kids jaman now.jpg'),
(15, 'Buku Favorit Di Perpustakaan', 'buku-favorit-di-perpustakaan', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque placerat facilisis mauris quis tincidunt. In sodales nunc nec congue maximus. Sed commodo mauris eu purus semper mattis. Duis a aliquam dolor. Maecenas nec nisi risus. Curabitur ultrices dapibus augue id dictum. Integer mollis vitae mi id lacinia. Proin a imperdiet turpis. Curabitur quis semper nibh. Aliquam in lacinia lorem. Aliquam vulputate eget leo non finibus. Maecenas vehicula, odio venenatis maximus elementum, metus nibh pellentesque dui, sed blandit nulla dolor sit amet massa.</p><p style=\"text-align: center;\"><img src=\"http://localhost/classroom/./assets/img/28bb3a1372459b3b9d46be4f6bc32e2c.jpg\" style=\"width: 300px;\" class=\"fr-fic fr-dib\"></p><p>Aenean ac eros in metus facilisis aliquet auctor eu sapien. Curabitur eu sapien laoreet, iaculis arcu non, auctor ante. Praesent orci felis, porttitor et dui a, fringilla tempus massa. Aliquam erat volutpat. Nullam viverra nunc posuere, venenatis nisl eget, laoreet nulla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed a est lectus. Nam eu lacus sed nisl pulvinar congue. In sodales, lorem ac laoreet aliquam, leo nulla feugiat odio, sed ullamcorper lorem enim in arcu. In dapibus ipsum eu velit convallis vestibulum. Sed pharetra mauris nec bibendum pharetra. Vestibulum nisi erat, dignissim non nunc vestibulum, tempor posuere dolor. Quisque volutpat at tortor vitae tincidunt. In dictum non risus et sodales. Integer bibendum turpis sed felis aliquet imperdiet. Proin eu augue rhoncus, interdum tortor venenatis, suscipit eros.</p><p style=\"text-align: center;\"><img src=\"http://localhost/classroom/./assets/img/a7535ee05ef946a83731622e5ed9e694.jpg\" style=\"width: 300px;\" class=\"fr-fic fr-dib\"></p><p style=\"text-align: left;\">Yep, that\'s the recap</p>', 'Random', 'Alya', '2019-05-27 07:08:29', NULL, 'f34fafdf61982519ad857b4672fcc994.jpg'),
(16, 'Ketemu Akun Sasha Lewat Instagram', 'ketemu-akun-sasha-lewat-instagram', '<p>Microsoft launched the first IntelliMouse 23 years ago in 1996 (a year before &ldquo;Twister&rdquo; was the first DVD released in the United States). That first IntelliMouse was a game changer, and each subsequent update has brought additional performance. The last major update came in 2017 with the Classic IntelliMouse, a fantastic everyday desk mouse, which brought a faster tracking sensor, improvements to the feel of the buttons, and the return of the iconic tail light.</p><p>There was still room to do more, however, and the upgrades to the Pro IntelliMouse make it not only great for work, but also a best-in-class, gaming-ready mouse. It has an upgraded tracking sensor to capture everything from the smallest flicks to the largest gestures with greater speed. In a nod to modern gaming, there are subtle design updates inspired by the shadow and gradients that are popular on Xbox accessories. It features improved key actuation, a textured finish and a braided cable to stand up to the most demanding users. Its buttons feel more responsive and are more reliable than ever and are easy to customize in the Windows Mouse and Keyboard Center*. You can even customize the color of the taillight to match your mood, your surroundings, or your custom setup.</p><p style=\"text-align: center;\"><img src=\"/assets/img/1d03b7ed945c1f27916b7e56d1548592.jpg\" style=\"width: 300px;\" class=\"fr-fic fr-dib\"></p><p style=\"text-align: left;\">The fundamentals of the IntelliMouse all remain. You&rsquo;ll appreciate the ergonomic design that has been a vital part of every IntelliMouse. With its wired design, you&rsquo;ll never wait for it to pair or need to search for a dongle before getting down to work or play. The Pro IntelliMouse is easy to maneuver, with carefully calculated weight, stability and control. The longevity and influence of this iconic mouse have outlived most of the products launched when the first version appeared, and we&rsquo;re excited to bring these latest innovations to a proven design. </p><p data-f-id=\"pbf\" style=\"text-align: center; font-size: 14px; margin-top: 30px; opacity: 0.65; font-family: sans-serif;\">Powered by <a href=\"https://www.froala.com/wysiwyg-editor?pb=1\" title=\"Froala Editor\">Froala Editor</a></p>', 'Random', 'Wahyu', '2019-05-30 10:01:36', NULL, '943b538202d0fe0b698e4ee07d9dc000.jpg'),
(19, 'Fix You', 'fix-you', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac libero in mauris lacinia posuere. Nullam ullamcorper ligula sit amet neque sodales finibus. Suspendisse in ante risus. Sed rutrum vitae turpis eu sodales. Vestibulum at eros erat. Nulla magna tortor, rhoncus non tortor vel, vulputate molestie metus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Mauris eleifend tortor non leo auctor, sit amet luctus felis gravida.</p><p>Donec laoreet sem arcu, ut porttitor metus blandit ut. Donec eget sem vel nisi ullamcorper vulputate at eu ipsum. Ut facilisis condimentum tempor. Integer eget sem dapibus, ornare nunc vitae, porta odio. Vivamus in leo viverra, egestas quam non, congue quam. Nulla fermentum egestas ex, sed viverra ex tristique sed. Duis vestibulum facilisis urna, nec mattis erat malesuada quis. Nam sem lorem, ultricies vel egestas vitae, dictum ac nisi. Nullam dignissim diam non neque rhoncus, at mattis dui rutrum. Nam aliquet tristique ligula ut malesuada. Cras et urna aliquet leo luctus vulputate. Mauris quis bibendum libero. Quisque sed sapien sed magna gravida suscipit. Vestibulum suscipit lacus eget eros ultrices, nec vehicula enim tempus. Donec a volutpat mauris.</p><p>In hac habitasse platea dictumst. Duis vel justo tellus. Nunc blandit odio risus. Mauris convallis enim viverra facilisis molestie. Donec molestie orci vel justo commodo sodales. Nullam quis porttitor enim. Vestibulum ut ante nunc. Sed eu tristique odio. Aenean sit amet nulla sed erat sodales iaculis vel at sapien. Integer eget mauris ullamcorper, egestas sem id, cursus enim. Donec lobortis odio lacus, vestibulum mattis dui iaculis nec. Vivamus quis fermentum elit. Nulla sodales libero est, at varius quam mattis ac. Vestibulum mi ipsum, mattis congue risus eu, laoreet pellentesque enim. Donec vitae neque eget ante dignissim ultricies quis aliquet mauris. Vestibulum dui ipsum, sodales id orci sit amet, mattis congue purus.</p><p>In eu est sollicitudin massa tincidunt feugiat quis sit amet lectus. Maecenas in pharetra nulla, a dictum elit. Proin lobortis, neque ut blandit imperdiet, ligula turpis blandit purus, et volutpat purus libero eget arcu. Aenean bibendum risus eget nibh ultricies elementum. Donec non odio lectus. Donec molestie ornare nibh ut vehicula. Etiam nec dapibus felis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p><p>Sed ex justo, ultricies a metus et, porta ornare neque. Donec dapibus justo quis ultrices congue. Nulla dictum vel sapien ac pellentesque. Sed vulputate, dui a dictum pretium, elit felis elementum velit, eu hendrerit tellus urna eu sapien. Quisque nisl eros, gravida nec fringilla vitae, egestas sed lorem. Aenean nec tristique sem. Integer at velit suscipit, efficitur ligula quis, varius urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin vitae lacinia massa, id gravida turpis. Aliquam pulvinar ligula ut sem suscipit semper. Aenean tincidunt lacus quis tristique sodales. Donec urna erat, molestie eget ullamcorper a, ultrices vel odio. In hac habitasse platea dictumst. Nam consectetur lacus magna, id vulputate ipsum sagittis sed.</p><p>Sed risus tellus, consequat quis tincidunt ac, pharetra vitae tortor. Vivamus cursus venenatis turpis at consequat. In hac habitasse platea dictumst. Integer aliquam, nisl ut pretium mattis, lacus felis facilisis diam, eget fringilla urna mi porta arcu. Morbi vehicula eros purus, eget vulputate nisl ullamcorper et. Suspendisse viverra justo dui, non porttitor urna tempus eu. Nunc viverra blandit porttitor. Aenean venenatis varius mi. Nam at lectus a felis viverra gravida. Fusce sodales facilisis mauris eu varius. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut fringilla fermentum iaculis. Nulla nec velit maximus, gravida diam a, rutrum sem. Ut sollicitudin ultrices orci, vel iaculis metus mollis a. Integer vitae tristique orci.</p><p style=\"text-align: center;\"><img src=\"/assets/img/1d03b7ed945c1f27916b7e56d1548592.jpg\" style=\"width: 300px;\" class=\"fr-fic fr-dib\"></p><p data-f-id=\"pbf\" style=\"text-align: center; font-size: 14px; margin-top: 30px; opacity: 0.65; font-family: sans-serif;\">Powered by <a href=\"https://www.froala.com/wysiwyg-editor?pb=1\" title=\"Froala Editor\">Froala Editor</a></p>', 'Random', 'Wahyu', '2019-05-30 16:56:30', NULL, 'ed64bb9a7c47afe8732e9f67a7c1d554.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testable`
--
-- Pembuatan: 28 Jun 2019 pada 02.59
--

DROP TABLE IF EXISTS `testable`;
CREATE TABLE IF NOT EXISTS `testable` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `namadata` varchar(150) NOT NULL,
  `data` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `testable`
--

INSERT INTO `testable` (`id`, `namadata`, `data`) VALUES
(1, 'coba', '{\"name\":\"jack\",\"school\":\"colorado state\",\"state\":\"NJ\",\"gender\":\"male\"}'),
(2, 'lagi coba', '{\"name\":\"dominick\",\"school\":\"manhattan state\",\"state\":\"NY\",\"gender\":\"male\"}'),
(3, 'hiyyaa coba lagi', '{\"name\":\"john\",\"school\":\"dallas state\",\"state\":\"CL\",\"gender\":\"male\",\"status\":\"single wkwkwk\"}'),
(4, 'hiyyaa coba lagi', '{\"name\":\"john\",\"school\":\"dallas state\",\"state\":\"CL\",\"gender\":\"male\",\"status\":\"single wkwkwk\"}');
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
