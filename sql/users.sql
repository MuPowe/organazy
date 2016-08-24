CREATE TABLE IF NOT EXISTS `users_table` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `regdate` int(11) unsigned NOT NULL DEFAULT '0',
  `user_name` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `password` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `email` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT ''
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1;

//24.08
ALTER TABLE `users_table` ADD `type_1` INT(1) NOT NULL AFTER `birthday`, ADD `type_2` INT(1) NOT NULL AFTER `type_1`, ADD `type_3` INT(1) NOT NULL AFTER `type_2`, ADD `type_4` INT(1) NOT NULL AFTER `type_3`, ADD `type_5` INT(1) NOT NULL AFTER `type_4`;

