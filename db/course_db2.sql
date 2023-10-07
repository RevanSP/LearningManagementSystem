-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2023 at 12:58 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `course_db2`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookmark`
--

CREATE TABLE `bookmark` (
  `user_id` varchar(20) NOT NULL,
  `playlist_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` varchar(20) NOT NULL,
  `content_id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `tutor_id` varchar(20) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` int(10) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `number`, `message`) VALUES
('Bayu', 'revanspstudy29@gmail.com', 1234124, '123'),
('Tasya', 'tasya@gmail.com', 2147483647, 'Perkenalkan Nama Saya Tasya Fadillah Z, Saya Ingin Bertanya Berapa Jam Waktu Pembelajaran Dalam Program 3 Bulan ?');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` varchar(20) NOT NULL,
  `tutor_id` varchar(20) NOT NULL,
  `playlist_id` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `video` varchar(100) NOT NULL,
  `thumb` varchar(100) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `status` varchar(20) NOT NULL DEFAULT 'deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `tutor_id`, `playlist_id`, `title`, `description`, `video`, `thumb`, `date`, `status`) VALUES
('UgK0Iv4LmwAvfTx5pYUD', 'xjr6dc8datEqhBV6tzF5', 'EpIklyLyYCVKY5YFvznY', 'MENGGUNAKAN PERALATAN PERIPHERAL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'w1VZ8RDhomKRmx8c2zB0.mp4', 'vHAey48g0DsxnGvd1m6H.jpg', '2023-07-19', 'active'),
('b7H9O6AgjPQfrj0spqED', 'xjr6dc8datEqhBV6tzF5', 'EpIklyLyYCVKY5YFvznY', 'MENGIDENTIFIKASI ASPEK KEAMANAN INFORMASI PENGGUNA', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'sKrsYCd5gQcZjBDfzsjD.mp4', 'x5zpypdhDxrbZSdD2RRu.jpg', '2023-07-19', 'active'),
('SkvrsVXYdEvluZGjNczf', 'xjr6dc8datEqhBV6tzF5', 'EpIklyLyYCVKY5YFvznY', 'MENGGUNAKAN SISTEM OPERASI', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'EdqtfFw3F5qVKMxWU6vI.mp4', 'EJrE9d4mRr3n0pq91YA5.jpg', '2023-07-19', 'active'),
('jQ2X9xZgpUqJzmmV20pF', 'xjr6dc8datEqhBV6tzF5', 'EpIklyLyYCVKY5YFvznY', 'MENGGUNAKAN PERANGKAT LUNAK PENGOLAH KATA - TINGKAT DASAR', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'xKeCxO9vMwpvYAcmbB5n.mp4', 'PiwUBAYCS3bxikg9e4NV.jpg', '2023-07-19', 'active'),
('vGdmlR1Dmn7PfeDLLze9', 'xjr6dc8datEqhBV6tzF5', 'EpIklyLyYCVKY5YFvznY', 'MENGGUNAKAN PERANGKAT LUNAK LEMBAR KERJA - TINGKAT DASAR', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'H4yAI6SgA5QHJtG1eZqO.mp4', 'ucFoMfIHXWoD4n2MUrB9.jpg', '2023-07-19', 'active'),
('qDSXbOFMETiTiHzgxS9Z', 'xjr6dc8datEqhBV6tzF5', 'EpIklyLyYCVKY5YFvznY', 'MENGGUNAKAN PERANGKAT LUNAK PRESENTASI - TINGKAT DASAR', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'XDU937qM6if8cs9essKN.mp4', 'tm5F2Q8pSvcHEjd4LZSp.jpg', '2023-07-19', 'active'),
('4r2JfKMi4RC3Sqmpm0mV', 'xjr6dc8datEqhBV6tzF5', 'ryhoFNMvuSMCLqJ7ooAd', 'MENGGUNAKAN SISTEM OPERASI', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'xev039rC5difEL4sHpgF.mp4', '078SnpykWyN4JwyFsL6F.jpg', '2023-07-19', 'active'),
('ZWT8otnloE3l7R9iUNEs', 'xjr6dc8datEqhBV6tzF5', 'ryhoFNMvuSMCLqJ7ooAd', 'MENGGUNAKAN PERALATAN PERIPHERAL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'CudOavrIUb6NcKRl1Itt.mp4', 'nmciGT89scrHENhGE3dd.jpg', '2023-07-19', 'active'),
('JGihlVemxP4gismHyK6O', 'xjr6dc8datEqhBV6tzF5', 'ryhoFNMvuSMCLqJ7ooAd', 'MENGGUNAKAN PERANGKAT PENGOLAH KATA - TINGKAT DASAR', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'OTasYlFYrnjyftGmCQ2G.mp4', '3OlatDybMcsgvfgrDWMb.jpg', '2023-07-19', 'active'),
('G1LyCsCLKIYrIulaqXEP', 'xjr6dc8datEqhBV6tzF5', 'ryhoFNMvuSMCLqJ7ooAd', 'MENGGUNAKAN PERANGKAT LUNAK PRESENTASI - TINGKAT DASAR', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'e6Z4DIPIphKQDg6XMHJ9.mp4', 'aHqMf3gjCBJ5oj25RHYh.jpg', '2023-07-19', 'active'),
('uxZeoM7N7DLCEjdPCDQj', 'xjr6dc8datEqhBV6tzF5', 'ryhoFNMvuSMCLqJ7ooAd', 'MENGGUNAKAN PERANGKAT LUNAK LEMBAR KERJA - TINGKAT LANJUT', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'iAENjznIM6hfruqDF42a.mp4', 'APTguaOcDEZA5frjhnt0.jpg', '2023-07-19', 'active'),
('fG9pVGxNXRFeI7f6tFae', 'xjr6dc8datEqhBV6tzF5', 'ryhoFNMvuSMCLqJ7ooAd', 'MELAKUKAN PEMASUKAN DATA', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'tqktaLr4n0G0LiUa2CLx.mp4', 'TZWyL4i9RutK1ltsgoqI.jpg', '2023-07-19', 'active'),
('2B3tja0rmB5l6fll2UCY', 'xjr6dc8datEqhBV6tzF5', 'ryhoFNMvuSMCLqJ7ooAd', 'MENGIDENTIFIKASI ASPEK KEAMANAN INFORMASI PENGGUNA', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'lovg5qxgOkEQpmVqk2SB.mp4', 'FbPGqyiYLHyPQEG7m634.jpg', '2023-07-19', 'active'),
('Gclv1EnXyfc1S3EScDQk', 'xjr6dc8datEqhBV6tzF5', 'ryhoFNMvuSMCLqJ7ooAd', 'MEMASTIKAN KEAMANAN INFORMASI PENGGUNA', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'g9tPbICvaN58uuHi7eCV.mp4', 'nlLMePmsj4kbRPcAyZZy.jpg', '2023-07-19', 'active'),
('LCfVH0mZTOPZOWhKEmbg', 'xjr6dc8datEqhBV6tzF5', 'xeW9UVBAijhEBkLFT0Xa', 'MENERAPKAN PRINSIP DASAR KOMUNIKASI', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'jflbOZ992VdEG1MUwa9d.mp4', 'qJr8dV3tdINddosUWwEw.jpg', '2023-07-19', 'active'),
('AoaQplLoHyv4hvoA4ftK', 'xjr6dc8datEqhBV6tzF5', 'xeW9UVBAijhEBkLFT0Xa', 'MENERAPKAN DESIGN BRIEF', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Jw2S3DV74dv0esr44osT.mp4', 'KaQCZCzB8JHspf1RhgEw.jpg', '2023-07-19', 'active'),
('6JIxNiV29WwR0fWisL6s', 'xjr6dc8datEqhBV6tzF5', 'c9MUcWCmXMpLvtAY2GXY', 'MENGIDENTIFIKASI ELEMEN PEMASARAN PERUSAHAAN', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'VVN6ne4KcwsnQmp0L3Wm.mp4', 'iN6kuYej7uqfhdQbTrYT.jpg', '2023-07-19', 'active'),
('fAj9FQp4f3HEQO8OijC6', 'xjr6dc8datEqhBV6tzF5', 'c9MUcWCmXMpLvtAY2GXY', 'MENGGUNAKAN PERANGKAT KOMPUTER', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'JDohBS1D1CeVmAkT2JUO.mp4', 'nIEDQJVw1v5ZYHMt6SCp.jpg', '2023-07-19', 'active'),
('rDEMKxAf34WfC81Cup3K', 'xjr6dc8datEqhBV6tzF5', 'c9MUcWCmXMpLvtAY2GXY', 'MENGGUNAKAN APLIKASI SOSIAL MEDIA', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'B1tvasvQzmjqE4LJvFbh.mp4', '4kfCbmqSksOBhxIxZGBp.jpg', '2023-07-19', 'active'),
('BAXeEcXZUQdcZpkNaUWO', 'xjr6dc8datEqhBV6tzF5', 'c9MUcWCmXMpLvtAY2GXY', 'MENGGUNAKAN PENELUSUR SITUS WEB', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'O0Y5VD7U6vcmmlHyGKP7.mp4', 'KGH8fN9XBBuFuvA8xULA.jpg', '2023-07-19', 'active'),
('lFRmZrN6JPfvpJ13hA75', 'xjr6dc8datEqhBV6tzF5', 'c9MUcWCmXMpLvtAY2GXY', 'MELAKUKAN PENDEKATAN KEPADA CALON PELANGGAN', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '1ND6qJstqoI0wWeZRFag.mp4', 'tjl3H8rMrVPGABpUECm1.jpg', '2023-07-19', 'active'),
('mUiuIIm835OXChqZ56Km', 'xjr6dc8datEqhBV6tzF5', 'c9MUcWCmXMpLvtAY2GXY', 'MEMBUAT PERENCANAAN PERIKLANAN', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'v7BArUU35ZqERy7AAytJ.mp4', 'wmtoyz9IEKKIkqOPfn54.jpg', '2023-07-19', 'active'),
('QF5xcrBHbBh4zSIymaub', 'xjr6dc8datEqhBV6tzF5', 'c9MUcWCmXMpLvtAY2GXY', 'MERANCANG STRATEGI KREATIF DAN PEMBUATAN IKLAN', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'yQtllt1CW4aiOrOqDog6.mp4', 'pD9E5Zqg8NpL6geCoJsy.jpg', '2023-07-19', 'active'),
('A3zLP42KAybdpRbPRODx', 'xjr6dc8datEqhBV6tzF5', 'c9MUcWCmXMpLvtAY2GXY', 'MERANCANG STRATEGI DAN PEMBELIAN MEDIA', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'oePwwSylN4bMp4ry8OO6.mp4', 'SK2nn49DQdVmsYTtnyNs.jpg', '2023-07-19', 'active'),
('1Kc0miVBzKGHMKOXyWGW', 'xjr6dc8datEqhBV6tzF5', 'c9MUcWCmXMpLvtAY2GXY', 'MENYUSUN RENCANA AKTIFITAS PENJUALAN', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'I4lTqOJ6bYdwQMOoqT46.mp4', 'PebjlVXigl2VBVNCEdFr.jpg', '2023-07-19', 'active'),
('oP2y9QdM7oo8cjeMz3h2', 'xjr6dc8datEqhBV6tzF5', 'c9MUcWCmXMpLvtAY2GXY', 'MELAKSANAKAN KETERAMPILAN PENJUALAN', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'ESYnks39klOE9jdHBAWS.mp4', 'uOFjrKloEjLhP9woEVFh.jpg', '2023-07-19', 'active'),
('L1SED2pPID9Ja4vkbNfp', 'xjr6dc8datEqhBV6tzF5', 'ZPCHKdG9E4FMfF6Iv0HA', 'MENERAPKAN PERINTAH EKSEKUSI BAHASA PEMROGRAMAN BERBASIS TEXT, GRAFIK, DAN MULTIMEDIA', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'KXml86QALdLaiyq8zfEg.mp4', '5tN6z0Mt2IKTHoNnoeqJ.jpg', '2023-07-19', 'active'),
('7bCjUqLfOQ7BA1mbzMso', 'xjr6dc8datEqhBV6tzF5', 'ZPCHKdG9E4FMfF6Iv0HA', 'MENGGUNAKAN LIBRARY ATAU KOMPONEN PRE-EXISTING', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'A3dRAUteGudRkQZqubhM.mp4', 'Vyp5srqRy35rZ5WNu8oh.jpg', '2023-07-19', 'active'),
('n1EYRNgQDoADDWwBIXVg', 'xjr6dc8datEqhBV6tzF5', 'ZPCHKdG9E4FMfF6Iv0HA', 'MENGIMPLEMENTASIKAN PEROMGRAMAN TERSTRUKTUR', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Vi7akgjekcn4sNGD5kiv.mp4', 'lrH91DhMrxknWNAroV6D.jpg', '2023-07-19', 'active'),
('JlrCUhB6nvUREctxrATu', 'xjr6dc8datEqhBV6tzF5', 'ZPCHKdG9E4FMfF6Iv0HA', 'MENGIMPLEMENTASIKAN USER INTERFACE', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'BURVMmZlsDOfn80wD1To.mp4', 'CflDr6ezDmyUWXNLoUSm.jpg', '2023-07-19', 'active'),
('4NzYC3dF12puIyeIH894', 'xjr6dc8datEqhBV6tzF5', 'ZPCHKdG9E4FMfF6Iv0HA', 'MENYUSUN FUNGSI, FILE ATAU SUMBER DAYA PEMROGRAMAN YANG LAIN DALAM ORGANISASI YANG RAPI', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'EsvZAQpFwgApQVy2uyqZ.mp4', '66rzYBpn45KqqwfBvmiJ.jpg', '2023-07-19', 'active'),
('HLKsAUinzX5ir6p2plYW', 'xjr6dc8datEqhBV6tzF5', 'ZPCHKdG9E4FMfF6Iv0HA', 'MENULIS KODE DENGAN PRINSIP SESUAI GUIDELINES DAN BEST PRACTICES', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'ceukRqDydK73B3VZR5SS.mp4', 'eyVqNikQKRvAmDt4atuS.jpg', '2023-07-19', 'active'),
('PUssSIYLdtTbeC8vPnu6', 'xjr6dc8datEqhBV6tzF5', 'YvDcUm5Mu8ABDl5OPKIt', 'MENGGUNAKAN STRUKTUR DATA', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'tJPfshVT3zF1ObM6KbbU.mp4', 'mvaSktlttRkvsdewCeeY.jpg', '2023-07-19', 'active'),
('c9GHEct6JjRZgpoO00IG', 'xjr6dc8datEqhBV6tzF5', 'YvDcUm5Mu8ABDl5OPKIt', 'MENGIMPLEMENTASIKAN USER INTERFACE', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'TNQLNVRVpLJUuKZ3jNo4.mp4', 'NWM76dhlrJnKciBbXlLH.jpg', '2023-07-19', 'active'),
('P56gsfVttHFrstG5D97y', 'xjr6dc8datEqhBV6tzF5', 'YvDcUm5Mu8ABDl5OPKIt', 'MENULIS KODE DENGAN PRINSIP SESUAI GUIDELINES DAN BEST PRACTICES', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'JJX8tNgPjv3iuRX9Vp2e.mp4', 'CNe3TrmgmbHKUfEnfoPz.jpg', '2023-07-19', 'active'),
('nii49J0RKmW2w8b5rZUC', 'xjr6dc8datEqhBV6tzF5', 'YvDcUm5Mu8ABDl5OPKIt', 'MENGIMPLEMENTASIKAN PEROMGRAMAN TERSTRUKTUR', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'maXMQ7DqMxIh1mxjh5xi.mp4', 'M34lDfoMNffOPzEg1Ch5.jpg', '2023-07-19', 'active'),
('By0bRJ93Cbr1ZGsTWS3c', 'xjr6dc8datEqhBV6tzF5', 'YvDcUm5Mu8ABDl5OPKIt', 'MENGGUNAKAN LIBRARY ATAU KOMPONEN PRE-EXISTING', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'oOmQpdlWTIzL2w1QDyLh.mp4', 'Ye1jGEqZ34bOnYgybp0N.jpg', '2023-07-19', 'active'),
('0Z8cK3taedj5zQZHpwFa', 'xjr6dc8datEqhBV6tzF5', 'YvDcUm5Mu8ABDl5OPKIt', 'MELAKUKAN DEBUGGING', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'NxIgTGyj6nBY2FvGCAV1.mp4', 'jtlQyeukCLK4rmpbfYH8.jpg', '2023-07-19', 'active'),
('wUEnsv0czEumlEHckLpd', 'xjr6dc8datEqhBV6tzF5', 'YvDcUm5Mu8ABDl5OPKIt', 'MELAKUKAN INSTALASI SOFTWARE TOOLS PEMROGRAMAN', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'SUywOix9AkQUSlgSwRei.mp4', 'xv0dlNMFYOb6ZCCda1Bb.jpg', '2023-07-19', 'active'),
('rFqfSpYudkARmCiKbyhe', 'xjr6dc8datEqhBV6tzF5', 'YvDcUm5Mu8ABDl5OPKIt', 'MEMBUAT DOKUMEN KODE PROGRAM', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'A8bXXyMrE4fv61eCGBB6.mp4', '26GmM0SnxDVOtTRMUvHU.jpg', '2023-07-19', 'active'),
('erqH7Hm9gMzP70YU65Fx', 'xjr6dc8datEqhBV6tzF5', 'pXp4y0Q7AMtav2AAbTBz', 'MERANCANG DATABASE DAN PERSISTANCE PADA MOBILE DATA', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'JQUA64rpwIZKZznhrr6D.mp4', 'HNrkcghqhU865tl1Ujun.jpg', '2023-07-19', 'active'),
('dAJiKJb9CkJ6HgiDI4cL', 'xjr6dc8datEqhBV6tzF5', 'pXp4y0Q7AMtav2AAbTBz', 'MERANCANG MOBILE INTERFACE', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'd9hGmvqyypwybobZXGnc.mp4', 'hBmx774UoQ3R4HCmlyPf.jpg', '2023-07-19', 'active'),
('Zi5jHJKvACi7dEu6MyHz', 'xjr6dc8datEqhBV6tzF5', 'pXp4y0Q7AMtav2AAbTBz', 'MENYUSUN MOBILE LOCATION BASEDSERVICE, GPS DAN MOBILE NAVIGATION', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'lGOai81k8W1Y8DYiCH1m.mp4', 'RVXfUe4sVD9GEJNdTuOC.jpg', '2023-07-19', 'active'),
('bD0HQAiBsH3AYC2idccS', 'xjr6dc8datEqhBV6tzF5', 'pXp4y0Q7AMtav2AAbTBz', 'MENUNJUKKAN PLATFORM OPERATING SYSTEM DAN BAHASA PEMROGRAMAN DI DALAM PERANGKAT LUNAK', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'gXxyzrZiBOZwCuZ3lF9N.mp4', 'xB0PUl7DlehqJFZmQyjt.jpg', '2023-07-19', 'active'),
('zFECZEhgxYxtPQDexwer', 'xjr6dc8datEqhBV6tzF5', 'pXp4y0Q7AMtav2AAbTBz', 'MENJELASKAN DASAR - DASAR MOBILE SECURITY', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'yrSUjBYwgIlP5c231flV.mp4', 'hbS94eF7uh3qnkzScFFV.jpg', '2023-07-19', 'active'),
('gsu9Vb73fddpxo77XanA', 'xjr6dc8datEqhBV6tzF5', 'pXp4y0Q7AMtav2AAbTBz', 'MENENTUKAN MOBILE SELULER NETWORK', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'V5GQapbs05ODjB3ze7hW.mp4', 'ZntZUX30Cb7MpUUKLiXb.jpg', '2023-07-19', 'active'),
('FbO2zpLXEcBM7bic2Iyr', 'xjr6dc8datEqhBV6tzF5', 'pXp4y0Q7AMtav2AAbTBz', 'MENJELASKAN MOBILE SENSOR DAN SPESIFIKASI TEKNISNYA UNTUK MOBILE COMPUTING', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'dy4b005Q9ym37JzrsbIN.mp4', 'kOYSdu7QMRbAprIrEg8I.jpg', '2023-07-19', 'active'),
('RMhLtGYRBUB9vojh0rvD', 'xjr6dc8datEqhBV6tzF5', '02hBhPqMwpnbUBMd5F8z', 'APPLY PROBLEM-SOLVING TECHNIQUES TO ROUTINE IT MALFUNCTIONS', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '6RKjJ8oGXJtZoyV7PHO1.mp4', 'rxIquN1miSxps27xY2QJ.jpg', '2023-07-19', 'active'),
('0oDLPtVrslQ6cKrTlSpR', 'xjr6dc8datEqhBV6tzF5', '02hBhPqMwpnbUBMd5F8z', 'PROVIDE FIRST-LEVEL REMOTE HELP-DESK SUPPORT', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '56hugNdNOzJJIfhjacNs.mp4', 'PEv8dNSq3IGEPLicjJuA.jpg', '2023-07-19', 'active'),
('uS8iIO2dIKK4mXs77kzV', 'xjr6dc8datEqhBV6tzF5', '02hBhPqMwpnbUBMd5F8z', 'SUPPORT USERS AND TROUBLESHOOT DESKTOP APPLICATIONS', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'dfCPPkNPf067wL657Mpr.mp4', 'RCAesDON4oPjrjVhtZ6f.jpg', '2023-07-19', 'active'),
('1rfW6rkZhjTUwfqYQVzV', 'xjr6dc8datEqhBV6tzF5', '02hBhPqMwpnbUBMd5F8z', 'MENGIDENTIFIKASI PERANGKAT PENYUSUN KOMPUTER', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'KRya8l6BhFjSeFSjOzky.mp4', 'e92bsxAJdzK3VB65T9JK.jpg', '2023-07-19', 'active'),
('c5KaenUn8nywvyip9oJs', 'xjr6dc8datEqhBV6tzF5', '02hBhPqMwpnbUBMd5F8z', 'MELAKUKAN INVENTARISASI HARDWARE', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'Bn6YfVkpYzUZmEpQ7IRW.mp4', '550fdm7Kd4OA4IdycyGB.jpg', '2023-07-19', 'active'),
('4JlKwloJXggVrKaZVEUm', 'xjr6dc8datEqhBV6tzF5', '02hBhPqMwpnbUBMd5F8z', 'MELAKUKAN INVENTARISASI SOFTWARE', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'QPUs1pDm0E1GNCrO2pbB.mp4', 'x0bA8Vvw6C6zNK9OD4Sp.jpg', '2023-07-19', 'active'),
('e9d25BHWqf7RouNCWT1B', 'xjr6dc8datEqhBV6tzF5', '02hBhPqMwpnbUBMd5F8z', 'MEMASANG INTERFACE CARD', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'lxONz2PHiVhb7bpe2lYw.mp4', 'pBOjQ2LRNwGbiQv1mdki.jpg', '2023-07-19', 'active'),
('xIDz7HWIRlbiODE3cG8k', 'xjr6dc8datEqhBV6tzF5', '02hBhPqMwpnbUBMd5F8z', 'MEMASANG HARD DISK', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'JF2GdEEBhwPyW029k2jI.mp4', 'UrDoF1unmbtUjc5blWom.jpg', '2023-07-19', 'active'),
('lKVv3ZXdPJuObba2TB73', 'xjr6dc8datEqhBV6tzF5', '02hBhPqMwpnbUBMd5F8z', 'MEMASANG MOTHERBOARD', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '6TO4p2iBmuMB2UBluqGB.mp4', 'WEDq4jql9xL1rLqNRoX5.jpg', '2023-07-19', 'active'),
('rkLguHbLQfJU6aEmqXWb', 'xjr6dc8datEqhBV6tzF5', '02hBhPqMwpnbUBMd5F8z', 'MEMASANG MEMORY', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'APsAfpkhkzoZ4YvITy7M.mp4', 'P6IMY7DbWs99jtPGwD3U.jpg', '2023-07-19', 'active'),
('7bvHUOFQo07Aou0vClS1', 'xjr6dc8datEqhBV6tzF5', '02hBhPqMwpnbUBMd5F8z', 'MEMASANG PROSESOR', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'tNS41EpLlLiTwRIKDeEJ.mp4', 'amozVo11Xb2OHvDqpsdD.jpg', '2023-07-19', 'active'),
('WoLRbM2ExoK5hS8fp9li', 'xjr6dc8datEqhBV6tzF5', '02hBhPqMwpnbUBMd5F8z', 'MEMASANG OPTICAL DRIVE', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'ydzmUEDCgOkZ8STmOQPu.mp4', 'UvkkKi96bj8tySwpXZCu.jpg', '2023-07-19', 'active'),
('dUNNumpnJK4XdhDd0PPd', 'xjr6dc8datEqhBV6tzF5', '02hBhPqMwpnbUBMd5F8z', 'MERAWAT CPU', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'd4KAuMFMEnsKXrSsf5gA.mp4', 'DJA7ZxLFJ8qE1Wqv2jPM.jpg', '2023-07-19', 'active'),
('EUnPsUS7ZuRh34dhX7UO', 'xjr6dc8datEqhBV6tzF5', '02hBhPqMwpnbUBMd5F8z', 'MELAKUKAN INSTALASI SOFTWARE APLIKASI', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'TyeSwkUF2yKPTCqVGoB3.mp4', 'B3LpfqRPmCOUmNsP61Fu.jpg', '2023-07-19', 'active'),
('mRwtvnZdcHr0cvolCIAs', 'xjr6dc8datEqhBV6tzF5', '02hBhPqMwpnbUBMd5F8z', 'MENCEGAH KOMPUTER DARI SERANGAN BERBAGAI JENIS VIRUS', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '6DewjVfdSRlGC92KLF9y.mp4', 'PpfDEEZA3mJl7mYoiXUW.jpg', '2023-07-19', 'active'),
('PxYN6vvAJop1oB3t1aXX', 'xjr6dc8datEqhBV6tzF5', '02hBhPqMwpnbUBMd5F8z', 'MEMPERBAIKI KOMPUTER YANG TERINFEKSI VIRUS', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'MLNMnCXo77hQTuVrGYMs.mp4', 'lfN9YBxTTNDiFrIqkDLg.jpg', '2023-07-19', 'active'),
('h1gKSFzjsg7LzMm1Kjcn', 'xjr6dc8datEqhBV6tzF5', 'xeW9UVBAijhEBkLFT0Xa', 'MENCIPTAKAN KARYA DESAIN', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'DlcaZSvaNlNxAgYjlhem.mp4', 't0ofjpCBqiQ9YXr1c2Hk.jpg', '2023-07-19', 'active'),
('rWE1PiDq69S1c0Wb0TKy', 'xjr6dc8datEqhBV6tzF5', 'xeW9UVBAijhEBkLFT0Xa', 'MENGAPLIKASIKAN PRINSIP DASAR DESAIN', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 't1MrlDDlSVvMd23C67qN.mp4', 'o1HUXMzZopt4iGgOsc2A.jpg', '2023-07-19', 'active'),
('Lb3SQoGttJHtV3huoHhB', 'xjr6dc8datEqhBV6tzF5', 'xeW9UVBAijhEBkLFT0Xa', 'MENGOPERASIKAN PERANGKAT LUNAK DESAIN', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '0qB1Hs5vvVkw4QjhXpPa.mp4', 'CNiZ32y0ZXQEbIqrdxOT.jpg', '2023-07-19', 'active'),
('GLlx97ZQB0HpUqsX7ffq', 'xjr6dc8datEqhBV6tzF5', 'L6ptDhvK5O7V7dum9tjB', 'MENGAPLIKASIKAN PRINSIP DASAR DESAIN', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'IKCo8Sv1pZN28okZvZNr.mp4', 'cQijaiG8upo5qiw0CYhJ.jpg', '2023-07-19', 'active'),
('Tq2EFTTZNqwBggsVoas9', 'xjr6dc8datEqhBV6tzF5', 'L6ptDhvK5O7V7dum9tjB', 'MENERAPKAN PRINSIP DASAR KOMUNIKASI', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'cnnyzqIvci825IQUzDzD.mp4', 'hVL6R5VzFEEahl3VOF2J.jpg', '2023-07-19', 'active'),
('47uNvOmvlIJIZn366UhH', 'xjr6dc8datEqhBV6tzF5', 'L6ptDhvK5O7V7dum9tjB', 'MENERAPKAN DESIGN BRIEF', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'X9WoDKzjEOMhlBPVkKsY.mp4', '3v3dDd14jHOt49QhbSe3.jpg', '2023-07-19', 'active'),
('JfXSdbLI3NQUJruEYWgs', 'xjr6dc8datEqhBV6tzF5', 'L6ptDhvK5O7V7dum9tjB', 'MENGOPERASIKAN PERANGKAT LUNAK DESAIN', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'uMPfwNYwJMyg0lmF2Bbd.mp4', 'AxUoc2WYDUuuzOvrUMi3.jpg', '2023-07-19', 'active'),
('BE3NESCbIiuhDGu20V6m', 'xjr6dc8datEqhBV6tzF5', 'L6ptDhvK5O7V7dum9tjB', 'MENCIPTAKAN KARYA DESAIN', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'K5rIeFiQYHWYZNYAiwFz.mp4', 'IGQd3hfFLozbumsyKksv.jpg', '2023-07-19', 'active'),
('FBnF6PDtvSjpZnysg1El', 'xjr6dc8datEqhBV6tzF5', 'L6ptDhvK5O7V7dum9tjB', 'MENETAPKAN STRATEGI DESAIN', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'uqkEwb3yGUjYT1laTcVA.mp4', 'lMn8UrNTdFLX66coG1TG.jpg', '2023-07-19', 'active'),
('am5cQyzGlYM1XrQg4Wx4', 'xjr6dc8datEqhBV6tzF5', 'L6ptDhvK5O7V7dum9tjB', 'MENETAPKAN KONSEP DESAIN', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'MDwfjdJ7KSFMn87sidMj.mp4', 'spUK8Z4o82GPKYRrFzjn.jpg', '2023-07-19', 'active'),
('nilcxYo54LUomJI7osap', 'xjr6dc8datEqhBV6tzF5', 'L6ptDhvK5O7V7dum9tjB', 'MEMPERSENTASIKAN KARYA DESAIN', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'oTcK8rHZC5qfczGxjv6F.mp4', 'yuLdnRonDLOixzm6e7Bl.jpg', '2023-07-19', 'active'),
('J6sI4thBaOPbwY4hFxhf', 'xjr6dc8datEqhBV6tzF5', 'FqF23uMNZsWTXOmKQP1d', 'HTML Dasar', 'Source YT : Web Programming UNPAS', 'zN2wEBe3afSzxGNrZJk5.mp4', 'QlWYf70L2PCXQY2ONycd.jpg', '2023-09-19', 'deactive'),
('csPuPVPziPAMrtAq4thE', 'xjr6dc8datEqhBV6tzF5', 'EpIklyLyYCVKY5YFvznY', 'HTML', 'sdasd', 'wWLZ74DCb4grnMtwduXX.mp4', 'Y28kmy7HsbUG1jUfblAh.jpg', '2023-09-20', 'active'),
('uS0fOKEwVHjYeULRRaXs', 'xjr6dc8datEqhBV6tzF5', 'AZs2X52iSKURLfZwEm8U', 'HTML', 'WETWET', 'QUZrEal7wsQWlbfK7mip.mp4', 'FUtjxmnTG8GgoL5tlOFP.jpg', '2023-09-20', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `user_id` varchar(20) NOT NULL,
  `tutor_id` varchar(20) NOT NULL,
  `content_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `playlist`
--

CREATE TABLE `playlist` (
  `id` varchar(20) NOT NULL,
  `tutor_id` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `thumb` varchar(100) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `status` varchar(20) NOT NULL DEFAULT 'deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `playlist`
--

INSERT INTO `playlist` (`id`, `tutor_id`, `title`, `description`, `thumb`, `date`, `status`) VALUES
('FqF23uMNZsWTXOmKQP1d', 'xjr6dc8datEqhBV6tzF5', 'HTML', 'Video Dari YT : Web Programming UNPAS', 'iGrLWYKcx5aWDz2Lfi3t.jpg', '2023-07-18', 'deactive'),
('EpIklyLyYCVKY5YFvznY', 'xjr6dc8datEqhBV6tzF5', 'OPERATOR KOMPUTER MUDA', '1. Menggunakan peralatan peripheral\r\n2. Mengidentifikasi aspek keamanan informasi pengguna\r\n3. Menggunakan sistem operasi\r\n4. Menggunakan perangkat lunak pengolah kata – tingkat dasar\r\n5. Menggunakan perangkat lunak lembar kerja – tingkat dasar\r\n6. Menggunakan perangkat lunak presentasi – tingkat dasar', 'oK3K5UNbOqpSAkrQyzKn.jpg', '2023-07-18', 'active'),
('ryhoFNMvuSMCLqJ7ooAd', 'xjr6dc8datEqhBV6tzF5', 'OPERATOR KOMPUTER MADYA', '1. Menggunakan sistem operasi\r\n2. Menggunakan peralatan peripheral\r\n3. Menggunakan perangkat lunak pengolah kata – tingkat dasar\r\n4. Menggunakan perangkat lunak presentasi - tingkat dasar\r\n5. Menggunakan perangkat lunak lembar kerja – tingkat lanjut\r\n6. Melakukan pemasukan data\r\n7. Mengidentifikasi aspek keamanan informasi pengguna\r\n8. Memastikan keamanan informasi pengguna', '5V6D1z50Ssh1bWcodg7W.jpg', '2023-07-18', 'active'),
('xeW9UVBAijhEBkLFT0Xa', 'xjr6dc8datEqhBV6tzF5', 'DESIGN GRAFIS MUDA', '1. Menerapkan Prinsip Dasar Komunikasi\r\n2. Menerapkan Design Brief\r\n3. Menciptakan Karya Desain\r\n4. Mengaplikasikan Prinsip Dasar Desain\r\n5. Mengoperasikan Perangkat Lunak Desain', 'tSHduWPojjGQy6310t7K.jpg', '2023-07-18', 'active'),
('L6ptDhvK5O7V7dum9tjB', 'xjr6dc8datEqhBV6tzF5', 'DESIGN GRAFIS MADYA', '1. Mengaplikasikan prinsip dasar desain\r\n2. Menerapkan prinsip dasar komunikasi\r\n3. Menerapkan design brief\r\n4. Mengoperasikan perangkat lunak desain\r\n5. Menciptakan karya desain\r\n6. Menetapkan strategi desain\r\n7. Menetapkan konsep desain\r\n8. Mempersentasikan karya desain', 'nGpRJifj91H3j0QgeOrL.jpg', '2023-07-18', 'active'),
('c9MUcWCmXMpLvtAY2GXY', 'xjr6dc8datEqhBV6tzF5', 'DIGITAL  MARKETING', '1. Mengidentifikasi Elemen Pemasaran Perusahaan\r\n2. Menggunakan Perangkat Komputer\r\n3. Menggunakan Aplikasi Media Sosial\r\n4. Menggunakan Penelusur Situs Web\r\n5. Melakukan Pendekatan Kepada Calon Pelanggan\r\n6. Membuat Perencanaan Periklanan\r\n7. Merancang Strategi Kreatif dan Pembuatan Iklan\r\n8. Merancang Strategi dan Pembelian Media\r\n9. Menyusun Rencana Aktifitas Penjualan\r\n10. Melaksanakan Keterampilan Penjualan', 'z92RM0vAZetEBJz9losO.jpg', '2023-07-18', 'active'),
('ZPCHKdG9E4FMfF6Iv0HA', 'xjr6dc8datEqhBV6tzF5', 'JUNIOR WEB DEVELOPER', '1. Menerapkan perintah eksekusi bahasa pemrograman berbasis text, grafik, dan multimedia\r\n2. Menggunakan Library atau Komponen Pre- Existing\r\n3. Mengimplementasikan Pemrograman Terstruktur\r\n4. Mengimplementasikan User Interface\r\n5. Menyusun Fungsi, File atau Sumber Daya Pemrograman yang Lain dalam Organisasi yang Rapi\r\n6. Menulis Kode dengan Prinsip Sesuai Guidelines dan Best Practices', 'FgJd2xbHLLoovgHQ1A9V.jpg', '2023-07-18', 'active'),
('YvDcUm5Mu8ABDl5OPKIt', 'xjr6dc8datEqhBV6tzF5', 'JUNIOR WEB PROGRAMMER', '1. Menggunakan struktur data\r\n2. Mengimplementasikan User Interface\r\n3. Menulis Kode dengan Prinsip Sesuai Guidelines dan Best Practices\r\n4. Mengimplementasikan Pemrograman Terstruktur\r\n5. Menggunakan Library atau Komponen Pre- Existing\r\n6. Melakukan debugging\r\n7. Melakukan Instalasi Software Tools Pemrograman\r\n8. Membuat Dokumen Kode Program', '71CJ5h5BXg0vgqLOUPh6.jpg', '2023-07-18', 'active'),
('pXp4y0Q7AMtav2AAbTBz', 'xjr6dc8datEqhBV6tzF5', 'JUNIOR MOBILE PROGRAMMER', '1. Merancang database dan data persistence pada mobile data\r\n2. Merancang mobile interface\r\n3. Menyusun mobile location basedservice, GPS dan mobile navigation\r\n4. Menunjukkan platform operating system dan bahasa pemrograman di dalam perangkat lunak\r\n5. Menjelaskan dasar-dasar mobile security\r\n6. Menentukan mobile seluler network\r\n7. Menjelaskan mobile sensor dan spesifikasi teknisnya untuk mobile computing', 'yBqxM9ilBZDsWR8SCfZj.jpg', '2023-07-18', 'active'),
('02hBhPqMwpnbUBMd5F8z', 'xjr6dc8datEqhBV6tzF5', 'JUNIOR COMPUTER TECHNICIAN', '1. Apply problem-solving techniques to routine IT malfunctions \r\n2. Provide first-level remote help-desk support \r\n3. Support users and troubleshoot desktop applications \r\n4. Mengidentikasi perangkat penyusun komputer \r\n5. Melakukan inventarisasi hardware\r\n6. Melakukan inventarisasi software \r\n7. Memasang interface card \r\n8. Memasang hard disk\r\n9. Memasang motherboard \r\n10. Memasang memory \r\n11. Memasang prosesor \r\n12. Memasang optical drive \r\n13. Merawat CPU \r\n14. Melakukan instalasi software aplikasi \r\n15. Mencegah komputer dari serangan berbagai jenis virus \r\n16. Memperbaiki komputer yang terinfeksi virus', 'iDEQKb7ccJ5gZYAProGY.jpg', '2023-07-18', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tutors`
--

CREATE TABLE `tutors` (
  `id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `profession` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutors`
--

INSERT INTO `tutors` (`id`, `name`, `profession`, `email`, `password`, `image`) VALUES
('xjr6dc8datEqhBV6tzF5', 'SITI FATIMAH RAP PUTRI', 'Pimpinan', 'yysn.cpp@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'gTgvCHZ7IC5gWjVTbBz6.jpg'),
('z64t83Z2TiGYkOJFXnsz', 'GATOT PRAYOGA', 'Pimpinan', 'lpkkanira@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'GKa3wx27i53AKN4FicAC.png'),
('98PQ0pFdSNaqFjNcLqEi', 'SITI JUARIAH', 'Bendahara', 'lpkkanira1@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'ZKMTeeRb2rsyhqR6OfyJ.png'),
('eQ3vFKHsqtZfdAMAvDrr', 'ERISKA', 'Instruktur Tidak Tetap', 'lpkkanira2@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Zi14RA7reVo8gpM5BQOV.png'),
('85FNbVuTxIPKQdA72GQ6', 'ERI KRISNAHADI', 'Instruktur Tidak Tetap', 'lpkkanira3@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '82xl5z69tmxu9gL2NoXT.png'),
('WTt4Evm5u4QDTgirJYGF', 'ABAS MULYANA', 'Instruktur Tidak Tetap', 'lpkkanira4@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'HcUqi9n5oIzU7pNluBf5.png'),
('PAgEpfHuiQjqreMFfrjE', 'TSALTSA NURUSSALAMAH', 'Pimpinan', 'lpkkanira5@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'F1qAlENVDnlAOMDkPStT.png'),
('afeIXSs9OBxFYHZy8CeY', 'SITI KRANI AMBALAN P.P', 'Instruktur Tetap', 'lpkkanira6@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'vUFBm6c4zJ0uCvmfjtgF.png'),
('Z8H2FMHASYVXMHnQRv1s', 'LUKMAN HAKIM', 'Instruktur Tetap', 'lpkkanira7@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'yXaYK6yxS3r8NrJ1dcBD.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `image`) VALUES
('5n1QP2szFssMfvfBxYV2', 'Revan SP', 'revanspstudy28@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '8kP8igp1IpgAg5oDoC8V.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
