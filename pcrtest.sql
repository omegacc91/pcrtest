create database testdb default character set utf8 ;


DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `uid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) NOT NULL,
  `dorm` varchar(100) NOT NULL,
  `college` varchar(18) NOT NULL,
  `telephone` varchar(18) NOT NULL,
  `class` varchar(50) NOT NULL,
  `counseller` varchar(50) NOT NULL,
  `test_date` datetime NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `aid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

INSERT INTO `tbl_admin` (`aid`,  `username`, `password`) VALUES
(12,  'admin', 'e10adc3949ba59abbe56e057f20f883e');