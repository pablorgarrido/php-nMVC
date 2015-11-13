
CREATE TABLE IF NOT EXISTS `nmvc_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing user_id of each user, unique index',
  `user_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s name, unique',
  `user_password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s password in salted and hashed format',
  `user_email` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s email, unique',
  `user_role` double NOT NULL DEFAULT '1',
  `user_active` double NOT NULL DEFAULT '1',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name` (`user_name`),
  UNIQUE KEY `user_email` (`user_email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user data' AUTO_INCREMENT=4 ;



INSERT INTO `nmvc_users` (`user_id`, `user_name`, `user_password_hash`, `user_email`, `user_role`, `user_active`) VALUES
(2, 'admin', '$2y$10$WRmnWaQIhzhWxgTPlfH3PemyjZekuaidYaR2y5r00csJLDIiovZRm', 'admin@admin.xx', 0, 1),
(3, 'user', '$2y$10$pxStNJT4j5A5Bw7gl2ugYedIjmvRB9AhmHsS2cbiKSVM9NuA9wP7S', 'user@admin.xx', 1, 1);

-- users: admin, user pwd: 123456

