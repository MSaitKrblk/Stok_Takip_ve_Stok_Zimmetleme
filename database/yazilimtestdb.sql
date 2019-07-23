-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 29 Ara 2018, 01:42:33
-- Sunucu sürümü: 5.7.19
-- PHP Sürümü: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `yazilimtestdb`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `adres`
--

DROP TABLE IF EXISTS `adres`;
CREATE TABLE IF NOT EXISTS `adres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `il` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ilce` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acikAdres` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `adres`
--

INSERT INTO `adres` (`id`, `il`, `ilce`, `acikAdres`) VALUES
(1, 'a', 'a', 'a'),
(2, 'denme', 'deneme', 'aaa'),
(3, 'asd', 'asd', 'asd'),
(4, 'a', 'aa', 'aaa'),
(5, 'asd', 'aa', 'a'),
(6, 'asd', 'a', 'a'),
(7, 'asd', 'a', 'a'),
(8, 'asd', 'a', 'a'),
(9, 'aa', 'aa', 'a'),
(10, 'yeni', 'yeni', 'yeni'),
(11, 'son', 'son', 'sonb'),
(12, 'aa', 'a', 'a'),
(13, 'a', 'a', 'a'),
(14, 'asd', 'asd', 'a'),
(15, 'a', 'a', 'a'),
(16, 'asd', 'asd', 'asd'),
(17, 'asd', 'asd', 'asd'),
(18, 'a', 'deneme', 'sad'),
(19, 'a', 'deneme', 'sad'),
(20, 'asd', 'deneme', 'sdsa'),
(21, 'asd', 'deneme', 'sdsa'),
(22, 'asd', 'deneme', 'sdsa'),
(23, 'asd', 'deneme', 'sdsa'),
(24, 'asd', 'asd', 'asd'),
(25, 'asd', 'asd', 'asd'),
(26, 'asd', 'asd', 'asd'),
(27, 'asd', 'asd', 'asd'),
(28, 'deneme', 'denem', 'deneme'),
(29, 'deneme', 'denem', 'deneme'),
(30, 'sait', 'sait', 'sait'),
(31, 'Istanbul', 'Kagithane', 'Kagithane'),
(32, 'istanbul', 'deneme', 'deneme'),
(33, 'istanbul', 'deneme', 'deneme'),
(34, 'asd', 'asd', 'asd'),
(35, '\'or =', 'deneme', 'df'),
(36, 'sf', 'sf', 'sf'),
(37, 'aa', 'asd', 'asd'),
(38, 'aa', 'asd', 'asd'),
(39, 'asd', 'asd', 'asd'),
(40, 'dede', 'deede', 'dede'),
(41, 'aa', 'aa', 'aa'),
(42, 'istanbuş', 'kağıthane', 'hamidiye'),
(43, 'istanbul', 'kağıthane', 'hamidiye'),
(44, 'İstanbul', 'Kagıthane', 'Hamidiye'),
(45, 'İstanbul', 'Kagıthane', 'Hamidiye'),
(46, 'denme', 'deneme', 'hshsj'),
(47, 'asd', 'asd', 'a'),
(48, 'İstanbul', 'Kağıthane', 'Hamidiye'),
(49, 'istanbul', 'Kagıthane', 'hamidiye'),
(50, 'istanbul', 'deneme', 'asd'),
(51, 'İstanbul', 'Üsküdar', 'Altunizade'),
(52, 'asd', 'asd', 'asd'),
(53, 'İstanbul', 'Üsküdar', 'Kuzguncuk Mahallesi'),
(54, 'erewqrqrewqrqrwqrewq', 'rewqrwq', '32'),
(55, 'denme', 'asd', '123'),
(56, 'denme', 'asd', '123'),
(57, 'denme', 'asd', '123'),
(58, 'denme', 'asd', '123'),
(59, 'denme', 'asd', '123'),
(60, 'denme', 'asd', '123'),
(61, 'denme', 'asd', '123'),
(62, 'istanbul', 'Kagıthane', 'Merkez'),
(63, 'istanbul', 'Kagıthane', 'Merkez'),
(64, 'istanbul', 'Kagıthane', 'aaa \' or 1=1 --');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `departman`
--

DROP TABLE IF EXISTS `departman`;
CREATE TABLE IF NOT EXISTS `departman` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `yonetici_id` int(11) NOT NULL,
  `departmanAdi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_departman_toPersonel` (`yonetici_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `departman`
--

INSERT INTO `departman` (`id`, `yonetici_id`, `departmanAdi`) VALUES
(2, 1, 'Admin'),
(4, 1, 'Satın Alma'),
(5, 18, 'deneme'),
(6, 1, 'Satın Alma'),
(7, 1, 'ARGE'),
(8, 28, 'Personel Şefliği');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `depo`
--

DROP TABLE IF EXISTS `depo`;
CREATE TABLE IF NOT EXISTS `depo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `depoAdi` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `depoTuru` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `depo`
--

INSERT INTO `depo` (`id`, `depoAdi`, `depoTuru`) VALUES
(1, 'Ana Depo', 'Depolama'),
(2, 'Eski Depo', 'Atık Birikimi');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

DROP TABLE IF EXISTS `kullanicilar`;
CREATE TABLE IF NOT EXISTS `kullanicilar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `personel_id` int(11) NOT NULL,
  `sifre` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ePosta` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `rol_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_personel` (`personel_id`),
  KEY `fk_users_toRol` (`rol_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `personel_id`, `sifre`, `ePosta`, `rol_id`) VALUES
(11, 28, '7815696ecbf1c96e6894b779456d330e', 'm.sait.krblk@gmail.com', 1),
(12, 29, '81dc9bdb52d04dc20036dbd8313ed055', 'm.sait.krblk@outlook.com', 1),
(13, 30, '7815696ecbf1c96e6894b779456d330e', 'deneme@denmne', 1),
(14, 31, '7815696ecbf1c96e6894b779456d330e', 'deneme@denmne', 1),
(15, 32, '7815696ecbf1c96e6894b779456d330e', 'adn@hotmail.co', 1),
(16, 34, '$2y$10$dkQTWATo1TxU7Sm4IpBX6uwSwo8sdDBTUZSoGIMGTMgnLBVaK.0x.', 'deneme@denmne', 1),
(17, 35, '$2y$10$rg/scF.7.aLJLKbR3AWClO9KCSY1cH.MiZfTPOAd5VcPPpC1DrJpi', 'deneme@denmne', 1),
(18, 36, '$2y$10$MjZvFGLXbTDQYbyw0RBYuOXr7ZPHRIvMLu8dpKB7nB4YthpokyQDC', 'deneme@denmne', 1),
(19, 37, '$2y$10$vBwcAUKUAsgjN.Z86xO.hOXpg72HADd007BuAtulp3UuDcmpv1nBy', 'deneme@denmne', 4),
(20, 38, '$2y$10$HLXbMvZkxSCQeuYt6Z4jle50UD7NuaFJ3RUAAEVyRDbz/hv4R4Cne', 'deneme@denmne', 4),
(21, 39, '$2y$10$dbU1DjGqx2Tk/yTf447ALu82..FcPNPCysUxjmikT9nlwcO/H6obe', 'deneme@denmne', 4),
(22, 40, '$2y$10$AZuNja8UuZJLNRQTpOpKsesuthl9aVkxQNgFoBZZuCkrKnd7LYNZi', 'personelSefi@outlook.com', 4),
(23, 41, '$2y$10$v7lKpB1ZCYaiYHOJxmg7SOv6VBHzxSfx23/17wuIJUmLDxdyVWvLi', 'satin_alma@outlook.com', 3),
(24, 42, '$2y$10$MDBCEqqARlDhYtdsi1.XRub/G7yBRyNpZid59SLTIR9LShlWuTNcK', 'm.sait.krblk@gmail.com', 3);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personel`
--

DROP TABLE IF EXISTS `personel`;
CREATE TABLE IF NOT EXISTS `personel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ad` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soyad` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departman_id` int(11) NOT NULL,
  `adres_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_adres` (`adres_id`),
  KEY `fk_personel_toDepartman` (`departman_id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `personel`
--

INSERT INTO `personel` (`id`, `ad`, `soyad`, `departman_id`, `adres_id`) VALUES
(1, 'admin', 'admin', 2, 1),
(18, 'satın alma', 'satın alma', 2, 34),
(28, 'M.Sait', 'KARABULAK', 2, 48),
(29, 'M.Sait', 'karabulak', 2, 49),
(30, 'M.Sait', 'karabulak', 2, 50),
(31, 'asd', 'asd', 2, 52),
(32, 'ewqewqewq', '1231312312321312', 2, 54),
(33, 'a', 'a', 2, 55),
(34, 'a', 'a', 2, 56),
(35, 'a', 'a', 2, 57),
(36, 'a', 'a', 2, 58),
(37, 'a', 'a', 6, 59),
(38, 'a', 'a', 6, 60),
(39, 'a', 'a', 6, 61),
(40, 'personel', 'Sefi', 2, 62),
(41, 'Satin', 'Alma', 4, 63),
(42, 'aaa', 'aaa', 4, 64);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `rol`
--

DROP TABLE IF EXISTS `rol`;
CREATE TABLE IF NOT EXISTS `rol` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rolAdi` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `rol`
--

INSERT INTO `rol` (`id`, `rolAdi`) VALUES
(1, 'Admin'),
(3, 'Satın Alma'),
(4, 'Personel Şefi');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `satinalma`
--

DROP TABLE IF EXISTS `satinalma`;
CREATE TABLE IF NOT EXISTS `satinalma` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `urun_id` int(11) NOT NULL,
  `tedarikci_id` int(11) NOT NULL,
  `miktar` int(11) NOT NULL,
  `fiyat` decimal(10,0) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_satinAlma_toUrun` (`urun_id`),
  KEY `fk_satinAlma_toTedarikci` (`tedarikci_id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `satinalma`
--

INSERT INTO `satinalma` (`id`, `urun_id`, `tedarikci_id`, `miktar`, `fiyat`) VALUES
(1, 15, 1, 12, '500'),
(2, 18, 1, 4, '67'),
(3, 19, 1, 1, '6'),
(4, 19, 1, 4, '500'),
(5, 19, 1, 4, '500'),
(6, 19, 1, 5, '500'),
(7, 19, 1, 56, '500'),
(8, 19, 1, 56, '500'),
(9, 19, 1, 56, '500'),
(10, 19, 1, 56, '500'),
(11, 19, 1, 234, '500'),
(12, 15, 1, 12, '67'),
(13, 15, 1, 12, '67'),
(14, 15, 1, 12, '67'),
(15, 15, 1, 56, '500'),
(16, 15, 1, 56, '500'),
(17, 15, 1, 56, '500'),
(18, 15, 1, 56, '500'),
(19, 18, 1, 12, '6'),
(20, 18, 1, 12, '6'),
(21, 18, 1, 12, '6000'),
(22, 18, 1, 12, '6000'),
(23, 18, 1, 12, '6000'),
(24, 18, 1, 12, '6000'),
(25, 16, 1, 4, '6000'),
(26, 19, 1, 234, '6000'),
(27, 16, 1, 56, '6000'),
(28, 16, 1, 12, '500'),
(29, 15, 1, 56, '500'),
(30, 19, 1, 12, '500'),
(31, 19, 1, 12, '500'),
(32, 19, 1, 12, '500'),
(33, 19, 1, 12, '500'),
(34, 19, 1, 12, '500'),
(35, 15, 1, 56, '500'),
(36, 19, 3, 12, '4800'),
(37, 19, 3, 12, '67000'),
(38, 15, 1, 12, '500'),
(39, 15, 2, 12, '500'),
(40, 15, 3, 234, '6000'),
(41, 15, 1, 1, '213');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `stok`
--

DROP TABLE IF EXISTS `stok`;
CREATE TABLE IF NOT EXISTS `stok` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `depo_id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `miktar` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_stok_toDepo` (`depo_id`),
  KEY `fk_stok_toUrun` (`urun_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `stok`
--

INSERT INTO `stok` (`id`, `depo_id`, `urun_id`, `miktar`) VALUES
(4, 1, 19, 547),
(5, 1, 15, 606),
(6, 1, 18, 23),
(7, 1, 16, 69),
(8, 2, 19, 6),
(9, 2, 16, 3),
(10, 2, 18, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tedarikci`
--

DROP TABLE IF EXISTS `tedarikci`;
CREATE TABLE IF NOT EXISTS `tedarikci` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unvan` varchar(60) COLLATE utf8mb4_turkish_ci NOT NULL,
  `adres_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_tedarikci_toAdres` (`adres_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `tedarikci`
--

INSERT INTO `tedarikci` (`id`, `unvan`, `adres_id`) VALUES
(1, 'Yeni Firma', 44),
(2, 'Sinerji Bilgisayar', 51),
(3, 'Ebrar Bilgisayar', 53);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urun`
--

DROP TABLE IF EXISTS `urun`;
CREATE TABLE IF NOT EXISTS `urun` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marka` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `isim` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `foto` varchar(150) COLLATE utf8mb4_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `urun`
--

INSERT INTO `urun` (`id`, `marka`, `isim`, `foto`) VALUES
(15, 'Madagaskar', 'Penguen', '1545872897db2b0cb144adc37f064bf8ff4b565ccde51f600b_full.jpg'),
(16, 'Oyuncu', 'Natalie Dormer', '15458729095084652-natalie-dormer-wallpapers.jpg'),
(17, 'Oyuncu', 'Natalie Dormer', '15458729185084129-natalie-dormer-wallpapers.jpg'),
(18, 'Madagaskar', 'Penguen', '1545877894Kowalski04 (1).png'),
(19, 'Dell', 'Inpiron 7567', '154588768486.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunbilesen`
--

DROP TABLE IF EXISTS `urunbilesen`;
CREATE TABLE IF NOT EXISTS `urunbilesen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marka` varchar(60) COLLATE utf8mb4_turkish_ci NOT NULL,
  `isim` varchar(60) COLLATE utf8mb4_turkish_ci NOT NULL,
  `foto` varchar(100) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `urun_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_urunBilesen_toUrun` (`urun_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `urunbilesen`
--

INSERT INTO `urunbilesen` (`id`, `marka`, `isim`, `foto`, `urun_id`) VALUES
(1, 'Madagaskar', 'Penguen', 'ss', 18),
(2, 'Madagaskar', 'Penguen', 'ss', 18),
(3, 'Madagaskar', 'Penguen', NULL, 18),
(4, 'Oyuncu', 'Natalie Dormer', NULL, 18),
(5, 'Oyuncu', 'Natalie Dormer', NULL, 15),
(6, 'Sandisc', 'x400 128 gb ssd', NULL, 19),
(7, 'hynix', '16 gb ram', NULL, 19),
(8, 'Toshiba', '1 tb hdd', NULL, 19);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunemanet`
--

DROP TABLE IF EXISTS `urunemanet`;
CREATE TABLE IF NOT EXISTS `urunemanet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `personel_id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_emanet_toUrun` (`urun_id`),
  KEY `fk_urunemate_toPersonel` (`personel_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `urunemanet`
--

INSERT INTO `urunemanet` (`id`, `personel_id`, `urun_id`) VALUES
(10, 28, 19),
(11, 28, 19),
(12, 28, 15),
(13, 28, 19);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `yetki` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `yetki`, `remember_token`, `created_at`, `updated_at`) VALUES
(10, 'aaa', 'm.sait.krblk@gmail.com', '$2y$10$.3eeBzbPNHPdpzuXJEqea.aFdtMU/Han8oVmJf4j2k3.d9cRxZtqC', '3', NULL, '2018-12-28 11:42:41', '2018-12-28 11:42:41'),
(9, 'Satin', 'satin_alma@outlook.com', '$2y$10$lr/f6w1od3poVR5zum5T9uwSUYZ35apVvZ3TxtQKUAgryH89YDPBS', '3', 'UCQzGBmGaLJjuGqQefe9F0E8l6TVyAXVYPfLNLTTLAzASJqVtYVRe6Fm7zGU', '2018-12-28 06:52:09', '2018-12-28 06:52:09'),
(8, 'personel', 'personelSefi@outlook.com', '$2y$10$6/7dcrmKw63ky4gRay858OOW0J4JqyluBrTSsUrpxXrX739o6w57e', '4', '0IGX4fhiJef96NIbf3KVMaRsNn4jVvaqQWQDEAI5sVDaUlLAKj1L4qe7DArO', '2018-12-28 06:21:33', '2018-12-28 06:21:33'),
(7, 'sait', 'm.sait.krblk@gmail.com', '$2y$10$HrrJdqyFS5lWl3i47qYgNuO5EQTVU8pZEk8nISAtoXgfEEA5IMHmi', '1', 'qs0q7bedKxVzNmF2g3OuYKH3NUCTeYXNs0WQT6EV6rPDUHGKhyu5iAlzLQWE', '2018-12-24 21:00:00', '2018-12-28 21:00:00');

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `departman`
--
ALTER TABLE `departman`
  ADD CONSTRAINT `fk_departman_toPersonel` FOREIGN KEY (`yonetici_id`) REFERENCES `personel` (`id`);

--
-- Tablo kısıtlamaları `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD CONSTRAINT `fk_personel` FOREIGN KEY (`personel_id`) REFERENCES `personel` (`id`),
  ADD CONSTRAINT `fk_users_toRol` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`id`);

--
-- Tablo kısıtlamaları `personel`
--
ALTER TABLE `personel`
  ADD CONSTRAINT `fk_adres` FOREIGN KEY (`adres_id`) REFERENCES `adres` (`id`),
  ADD CONSTRAINT `fk_personel_toDepartman` FOREIGN KEY (`departman_id`) REFERENCES `departman` (`id`);

--
-- Tablo kısıtlamaları `satinalma`
--
ALTER TABLE `satinalma`
  ADD CONSTRAINT `fk_satinAlma_toTedarikci` FOREIGN KEY (`tedarikci_id`) REFERENCES `tedarikci` (`id`),
  ADD CONSTRAINT `fk_satinAlma_toUrun` FOREIGN KEY (`urun_id`) REFERENCES `urun` (`id`);

--
-- Tablo kısıtlamaları `stok`
--
ALTER TABLE `stok`
  ADD CONSTRAINT `fk_stok_toDepo` FOREIGN KEY (`depo_id`) REFERENCES `depo` (`id`),
  ADD CONSTRAINT `fk_stok_toUrun` FOREIGN KEY (`urun_id`) REFERENCES `urun` (`id`);

--
-- Tablo kısıtlamaları `tedarikci`
--
ALTER TABLE `tedarikci`
  ADD CONSTRAINT `fk_tedarikci_toAdres` FOREIGN KEY (`adres_id`) REFERENCES `adres` (`id`);

--
-- Tablo kısıtlamaları `urunbilesen`
--
ALTER TABLE `urunbilesen`
  ADD CONSTRAINT `fk_urunBilesen_toUrun` FOREIGN KEY (`urun_id`) REFERENCES `urun` (`id`);

--
-- Tablo kısıtlamaları `urunemanet`
--
ALTER TABLE `urunemanet`
  ADD CONSTRAINT `fk_emanet_toUrun` FOREIGN KEY (`urun_id`) REFERENCES `urun` (`id`),
  ADD CONSTRAINT `fk_urunemate_toPersonel` FOREIGN KEY (`personel_id`) REFERENCES `personel` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
