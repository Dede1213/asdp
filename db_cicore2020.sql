-- Adminer 4.2.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `m_menu`;
CREATE TABLE `m_menu` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `menu` varchar(200) NOT NULL DEFAULT '',
  `menu_order` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `icon` varchar(50) NOT NULL,
  `link` varchar(255) NOT NULL DEFAULT '',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

INSERT INTO `m_menu` (`id`, `parent_id`, `menu`, `menu_order`, `icon`, `link`, `created`) VALUES
(37,	0,	'Setting Menu',	8,	'fas fa-cogs',	'menu',	'2020-02-21 22:50:47'),
(38,	0,	'Setting User',	9,	'fas fa-cogs',	'user',	'2020-02-22 00:13:10'),
(58,	0,	'Home',	1,	'fa fa-home',	'home',	'2020-02-22 01:11:18');

DROP TABLE IF EXISTS `m_menu_user`;
CREATE TABLE `m_menu_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_menu` varchar(50) NOT NULL,
  `id_user` varchar(50) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `m_menu_user` (`id`, `id_menu`, `id_user`, `created`) VALUES
(334,	'37',	'1',	'2020-02-22 01:11:29'),
(335,	'38',	'1',	'2020-02-22 01:11:29'),
(336,	'58',	'1',	'2020-02-22 01:11:29');

DROP TABLE IF EXISTS `m_user`;
CREATE TABLE `m_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `m_user` (`id`, `nama`, `username`, `password`, `created`) VALUES
(1,	'Super Admin',	'admin',	'240be518fabd2724ddb6f04eeb1da5967448d7e831c08c8fa822809f74c720a9',	'2018-04-28 15:01:18');

-- 2020-02-22 02:05:28
