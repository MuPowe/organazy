CREATE TABLE `notes` (
  `id` int(9) NOT NULL,
  `usr_id` int(9) NOT NULL,
  `note` varchar(2048) NOT NULL,
  `type` int(2) NOT NULL,
  `created` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `expired` datetime NOT NULL,
  `project_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

