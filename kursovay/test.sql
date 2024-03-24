-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               10.4.32-MariaDB - mariadb.org binary distribution
-- Операционная система:         Win64
-- HeidiSQL Версия:              12.3.0.6589
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Дамп данных таблицы test1.users: ~8 rows (приблизительно)
INSERT INTO `users` (`id`, `name`, `family`, `psw`) VALUES
	(22, 'Глеб', 'Беломытцев', '202cb962ac59075b964b07152d234b70'),
	(23, 'Глеб', '123', '202cb962ac59075b964b07152d234b70'),
	(24, 'Глеб', 'Бел', '202cb962ac59075b964b07152d234b70'),
	(25, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
	(26, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
	(27, 'Глеб', 'вав', '123'),
	(28, 'Глеб', 'пр', '202cb962ac59075b964b07152d234b70'),
	(29, '007', 'вав', '202cb962ac59075b964b07152d234b70');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

CREATE TABLE users (
    id INT PRIMARY KEY,
    name VARCHAR(50),
    family VARCHAR(20) UNIQUE,
    psw VARCHAR(100)
);

