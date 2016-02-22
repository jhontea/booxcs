-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 22 Feb 2016 pada 05.06
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `booxcs`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
`id_comment` int(12) NOT NULL,
  `comment` text NOT NULL,
  `read` int(2) NOT NULL,
  `unread_c` int(2) NOT NULL,
  `created` date NOT NULL,
  `message_id` int(12) NOT NULL,
  `user_id` int(12) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `comment`
--

INSERT INTO `comment` (`id_comment`, `comment`, `read`, `unread_c`, `created`, `message_id`, `user_id`) VALUES
(1, 'balas', 1, 0, '2016-02-21', 1, 1),
(3, 'ngomong apa yaaa', 1, 0, '2016-02-21', 1, 2),
(4, 'I overdose', 1, 0, '2016-02-21', 8, 2),
(5, 'we dont talk anymore', 1, 0, '2016-02-21', 8, 2),
(6, 'Ada lagi apa?', 1, 0, '2016-02-21', 5, 1),
(7, 'Lagi denger lagu', 1, 1, '2016-02-21', 5, 2),
(8, 'Masuk', 0, 0, '2016-02-21', 4, 1),
(9, 'Apa aja', 1, 0, '2016-02-21', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_session`
--

CREATE TABLE IF NOT EXISTS `login_session` (
`uid` int(12) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('admin','member') NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `login_session`
--

INSERT INTO `login_session` (`uid`, `username`, `password`, `level`, `nama`, `email`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'Administrator', 'admin@admin'),
(2, 'member', 'aa08769cdcb26674c6706093503ff0a3', 'member', 'Ahmad Hafizh', 'hafizhipb49@gmail.com'),
(3, 'jhontea', '113b977474e4425fa4589cc3b0eb5573', 'member', 'Jhon', 'jhontea@gmail.com'),
(4, 'ahmdhafizh  ', '113b977474e4425fa4589cc3b0eb5573', 'member', 'Brodo  ', 'bro@do.co.id  ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `message`
--

CREATE TABLE IF NOT EXISTS `message` (
`id_message` int(12) NOT NULL,
  `date` date NOT NULL,
  `message` text NOT NULL,
  `status` enum('open','close') NOT NULL,
  `unread` int(2) NOT NULL,
  `id_user` int(12) NOT NULL,
  `subject` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `message`
--

INSERT INTO `message` (`id_message`, `date`, `message`, `status`, `unread`, `id_user`, `subject`) VALUES
(1, '2016-02-20', 'COba aja', 'open', 0, 2, 'Coba'),
(3, '2016-02-20', 'Hari ini bagian member jadi', 'close', 0, 2, 'Coba'),
(4, '2016-02-20', 'Coba deh ada yang baru, masuk apa enggak?', 'open', 0, 2, 'Ini baru'),
(5, '2016-02-20', 'Tes ahhh', 'open', 0, 2, 'Ada Lagi'),
(8, '2016-02-21', 'Run of time', 'open', 0, 2, 'So much to do'),
(10, '2016-02-21', 'Dont keep me waiting, you make me suffer', 'open', 1, 3, 'Suffer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
 ADD PRIMARY KEY (`id_comment`);

--
-- Indexes for table `login_session`
--
ALTER TABLE `login_session`
 ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
 ADD PRIMARY KEY (`id_message`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
MODIFY `id_comment` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `login_session`
--
ALTER TABLE `login_session`
MODIFY `uid` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
MODIFY `id_message` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
