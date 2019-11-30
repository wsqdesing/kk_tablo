-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 30 Kas 2019, 02:53:40
-- Sunucu sürümü: 10.1.26-MariaDB
-- PHP Sürümü: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `sub_category`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `category`
--

INSERT INTO `category` (`id`, `title`, `parent_id`) VALUES
(1, 'Meslek', 0),
(2, 'Ev Elektroniği', 0),
(3, 'Giyim', 0),
(4, 'Mobilya', 0),
(5, 'Evcil Hayvan', 0),
(6, 'Bilgisayar', 1),
(7, 'Telefon', 1),
(8, 'Erkek', 3),
(9, 'Kadın', 3),
(10, 'Mutfak', 4),
(12, 'Kedi', 5),
(13, 'Köpek', 5),
(14, 'İç Giyim', 8),
(15, 'Aksesuar', 9),
(16, 'Teknik Servis', 6),
(17, 'Yazılım', 6),
(18, 'Apple', 7),
(19, 'Samsung', 7),
(20, 'Iphone', 18),
(21, '6S', 20),
(23, 'Küpe', 15),
(24, 'NOTE 7', 19);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
