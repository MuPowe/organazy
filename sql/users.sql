CREATE TABLE IF NOT EXISTS `users_table` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `regdate` int(11) unsigned NOT NULL DEFAULT '0',
  `user_name` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `f_name` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `l_name` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `password` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `email` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT '',
  `birthday` varchar(10) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1;
