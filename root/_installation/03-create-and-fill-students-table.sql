CREATE TABLE IF NOT EXISTS `login`.`students` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing student_id of each user, unique index',
  `student_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'student''s name, unique',
  `student_email` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'student''s email, unique',
  PRIMARY KEY (`student_id`),
  UNIQUE KEY `student_name` (`student_name`),
  UNIQUE KEY `student_email` (`student_email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='student data';
