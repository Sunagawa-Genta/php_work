-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2023-01-04 16:30:14
-- サーバのバージョン： 10.4.27-MariaDB
-- PHP のバージョン: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gs_work`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `form_table`
--

CREATE TABLE `form_table` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `hospital` varchar(128) NOT NULL,
  `money` int(10) NOT NULL,
  `enjoy` int(10) NOT NULL,
  `enjoy2` int(10) NOT NULL,
  `enjoy3` int(10) NOT NULL,
  `enjoy4` int(10) NOT NULL,
  `enjoy5` int(10) NOT NULL,
  `enjoy6` int(10) NOT NULL,
  `enjoy7` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- テーブルのデータのダンプ `form_table`
--

INSERT INTO `form_table` (`id`, `name`, `hospital`, `money`, `enjoy`, `enjoy2`, `enjoy3`, `enjoy4`, `enjoy5`, `enjoy6`, `enjoy7`) VALUES
(5, 'aaa', '山口大学医学部附属病院', 100, 5, 5, 5, 5, 5, 5, 5),
(6, 'aaa', '山口大学医学部附属病院', 100, 3, 3, 3, 3, 3, 3, 3);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `form_table`
--
ALTER TABLE `form_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `form_table`
--
ALTER TABLE `form_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
