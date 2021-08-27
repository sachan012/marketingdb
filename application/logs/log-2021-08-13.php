<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2021-08-13 12:54:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 12:54:38 --> No URI present. Default controller set.
DEBUG - 2021-08-13 12:54:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 12:54:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 12:54:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 12:54:38 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 12:54:38 --> Form_validation class already loaded. Second attempt ignored.
QUERY - 2021-08-13 12:54:38 --> 0.0658 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 12:54:38 --> Total execution time: 0.2069
DEBUG - 2021-08-13 12:54:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 12:54:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 12:54:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 12:54:40 --> No URI present. Default controller set.
DEBUG - 2021-08-13 12:54:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 12:54:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 12:54:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 12:54:40 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 12:54:40 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 12:54:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 12:54:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 12:54:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 12:54:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 12:54:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 12:54:49 --> 3.9849 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-13 12:54:49 --> 0.8561 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-13 12:54:49 --> 3.5753 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-13 12:54:49 --> 0.0093 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 12:54:49 --> 0.0285 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 12:54:49 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 12:54:49 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 12:54:49 --> 0.0009 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 12:54:49 --> Total execution time: 8.5322
DEBUG - 2021-08-13 12:54:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 12:54:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 12:54:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 12:54:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 12:54:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 12:54:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 12:54:50 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 12:54:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 12:54:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 12:54:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 12:54:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 12:54:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 12:54:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 12:54:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 12:54:50 --> Global POST, GET and COOKIE data sanitized
QUERY - 2021-08-13 12:54:53 --> 3.4159 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-13 12:54:53 --> Total execution time: 3.5060
DEBUG - 2021-08-13 12:54:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 12:54:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 12:55:24 --> 30.537 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
DEBUG - 2021-08-13 12:55:24 --> Total execution time: 33.9650
DEBUG - 2021-08-13 12:55:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 12:55:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 12:55:24 --> 0.0582 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `campaign_name` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-13 12:55:24 --> Total execution time: 34.0652
DEBUG - 2021-08-13 12:57:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 12:57:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 12:57:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 12:57:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 12:57:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 12:57:20 --> 2.4423 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-13 12:57:20 --> 1.0133 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-13 12:57:20 --> 2.4087 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-13 12:57:20 --> 0.0092 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 12:57:20 --> 0.0099 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 12:57:20 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 12:57:20 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 12:57:20 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 12:57:20 --> Total execution time: 5.9494
DEBUG - 2021-08-13 12:57:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 12:57:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 12:57:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 12:57:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 12:57:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 12:57:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 12:57:20 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 12:57:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 12:57:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 12:57:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 12:57:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 12:57:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 12:57:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 12:57:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 12:57:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-13 12:57:23 --> 3.4094 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-13 12:57:23 --> Total execution time: 3.5158
DEBUG - 2021-08-13 12:57:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 12:57:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 12:57:54 --> 30.306 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
DEBUG - 2021-08-13 12:57:54 --> Total execution time: 33.6537
DEBUG - 2021-08-13 12:57:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 12:57:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 12:57:54 --> 0.074 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `campaign_name` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-13 12:57:54 --> Total execution time: 33.6767
DEBUG - 2021-08-13 12:58:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 12:58:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 12:58:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 12:58:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 12:58:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 12:58:47 --> 2.5616 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-13 12:58:47 --> 0.9542 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-13 12:58:47 --> 2.4894 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-13 12:58:47 --> 0.01 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 12:58:47 --> 0.0099 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 12:58:47 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 12:58:47 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 12:58:47 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 12:58:47 --> Total execution time: 6.0978
DEBUG - 2021-08-13 12:58:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 12:58:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 12:58:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 12:58:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 12:58:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 12:58:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 12:58:48 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 12:58:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 12:58:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 12:58:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 12:58:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 12:58:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 12:58:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 12:58:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 12:58:48 --> Global POST, GET and COOKIE data sanitized
QUERY - 2021-08-13 12:58:51 --> 2.9044 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-13 12:58:51 --> Total execution time: 2.9881
DEBUG - 2021-08-13 12:58:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 12:58:51 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 12:58:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 12:58:51 --> Global POST, GET and COOKIE data sanitized
QUERY - 2021-08-13 12:59:20 --> 29.6624 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
DEBUG - 2021-08-13 12:59:20 --> Total execution time: 32.5908
DEBUG - 2021-08-13 12:59:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 12:59:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 12:59:20 --> 0.1025 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `campaign_name` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-13 12:59:20 --> Total execution time: 32.7245
DEBUG - 2021-08-13 12:59:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 12:59:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 12:59:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 12:59:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 12:59:28 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 12:59:28 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 13:00:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 13:00:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 13:00:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 13:00:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 13:00:03 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 13:00:03 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 13:00:03 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 13:00:03 --> 0.0003 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 13:00:03 --> 0.0003 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 13:00:03 --> 0.0342 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 13:00:03 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 13:00:03 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 13:00:03 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 13:00:03 --> Total execution time: 0.1117
DEBUG - 2021-08-13 13:00:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 13:00:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 13:00:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 13:00:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 13:00:09 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 13:00:09 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 13:00:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 13:00:09 --> 0.0003 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 13:00:09 --> 0.0003 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 13:00:09 --> 0.0006 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 13:00:09 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 13:00:09 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 13:00:09 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 13:00:09 --> Total execution time: 0.0690
DEBUG - 2021-08-13 13:00:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 13:00:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 13:00:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 13:00:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 13:00:10 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 13:00:10 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 13:00:10 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 13:00:10 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 13:00:10 --> 0.0003 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 13:00:10 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 13:00:10 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 13:00:10 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 13:00:10 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 13:00:10 --> Total execution time: 0.0724
DEBUG - 2021-08-13 14:10:49 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 14:10:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 14:10:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 14:10:49 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 14:10:49 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 14:10:49 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 14:10:49 --> 0.015 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 14:10:49 --> 0.0021 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 14:10:49 --> 0.0004 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 14:10:49 --> 0.001 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 14:10:49 --> 0.0008 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 14:10:49 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 14:10:49 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 14:10:49 --> Total execution time: 0.1233
DEBUG - 2021-08-13 14:11:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 14:11:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 14:11:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 14:11:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 14:11:02 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 14:11:02 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 14:11:02 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 14:11:02 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 14:11:02 --> 0.0004 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 14:11:02 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 14:11:02 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 14:11:02 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 14:11:02 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 14:11:02 --> Total execution time: 0.0835
DEBUG - 2021-08-13 14:11:06 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 14:11:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 14:11:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 14:11:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 14:11:06 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 14:11:06 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 14:11:06 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 14:11:06 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 14:11:06 --> 0.0004 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 14:11:06 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 14:11:06 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 14:11:06 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 14:11:06 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 14:11:06 --> Total execution time: 0.0694
DEBUG - 2021-08-13 14:12:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 14:12:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 14:12:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 14:12:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 14:12:16 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 14:12:16 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 14:12:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 14:12:16 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 14:12:16 --> 0.0003 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 14:12:16 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 14:12:16 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 14:12:16 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 14:12:16 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 14:12:16 --> Total execution time: 0.0779
DEBUG - 2021-08-13 14:12:17 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 14:12:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 14:12:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 14:12:17 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 14:12:17 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 14:12:17 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 14:12:17 --> 0.0008 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 14:12:17 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 14:12:17 --> 0.0004 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 14:12:17 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 14:12:17 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 14:12:17 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 14:12:17 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 14:12:17 --> Total execution time: 0.0737
DEBUG - 2021-08-13 14:12:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 14:12:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 14:12:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 14:12:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 14:12:40 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 14:13:08 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 14:13:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 14:13:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 14:13:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-13 14:13:22 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 14:13:22 --> 28.0788 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-13 14:13:22 --> 0.0299 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 14:13:22 --> 3.1936 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-13 14:13:22 --> 0.0502 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-13 14:13:22 --> 2.6479 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-13 14:13:22 --> 2.4109 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-13 14:13:22 --> 2.4781 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-13 14:13:22 --> 0.0526 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-13 14:13:22 --> 2.3146 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-13 14:13:22 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 14:13:22 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 14:13:22 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 14:13:22 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 14:13:22 --> Total execution time: 41.3330
DEBUG - 2021-08-13 14:13:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 14:13:22 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 14:13:22 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 14:13:22 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 14:13:22 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 14:13:22 --> 0.0003 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 14:13:22 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 14:13:22 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 14:13:22 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 14:13:22 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 14:13:22 --> Total execution time: 5.8200
DEBUG - 2021-08-13 14:13:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 14:13:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 14:13:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 14:13:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 14:13:55 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 14:13:55 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 14:13:55 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 14:13:55 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 14:13:55 --> 0.0003 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 14:13:55 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 14:13:55 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 14:13:55 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 14:13:55 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 14:13:55 --> Total execution time: 0.0930
DEBUG - 2021-08-13 14:14:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 14:14:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 14:14:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 14:14:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 14:14:44 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 14:14:44 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 14:14:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 14:14:44 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 14:14:44 --> 0.0003 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 14:14:44 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 14:14:44 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 14:14:44 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 14:14:44 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 14:14:44 --> Total execution time: 0.0740
DEBUG - 2021-08-13 15:30:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 15:30:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 15:30:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 15:30:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 15:30:47 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 15:30:48 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 15:30:48 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:30:48 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 15:30:48 --> 0.0003 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 15:30:48 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 15:30:48 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:30:48 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:30:48 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 15:30:48 --> Total execution time: 1.7134
DEBUG - 2021-08-13 15:38:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 15:38:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 15:38:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 15:38:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 15:38:15 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 15:38:15 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 15:38:15 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:38:15 --> 0.0008 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 15:38:15 --> 0.0005 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 15:38:15 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 15:38:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:38:15 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:38:15 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 15:38:15 --> Total execution time: 0.0861
DEBUG - 2021-08-13 15:38:17 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 15:38:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 15:38:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 15:38:17 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 15:38:17 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 15:38:17 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 15:38:18 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:38:18 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 15:38:18 --> 0.0003 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 15:38:18 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 15:38:18 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:38:18 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:38:18 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 15:38:18 --> Total execution time: 0.0983
DEBUG - 2021-08-13 15:38:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 15:38:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 15:38:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 15:38:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 15:38:58 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 15:38:58 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 15:38:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:38:58 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 15:38:58 --> 0.0004 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 15:38:58 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 15:38:58 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:38:58 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:38:58 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 15:38:58 --> Total execution time: 0.0742
DEBUG - 2021-08-13 15:41:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 15:41:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 15:41:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 15:41:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 15:41:23 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 15:41:23 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 15:41:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:41:23 --> 0.0005 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 15:41:23 --> 0.0006 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 15:41:23 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 15:41:23 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:41:23 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:41:23 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 15:41:23 --> Total execution time: 0.0677
DEBUG - 2021-08-13 15:41:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 15:41:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 15:41:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 15:41:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 15:41:43 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 15:41:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 15:41:43 --> No URI present. Default controller set.
DEBUG - 2021-08-13 15:41:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 15:41:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 15:41:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 15:41:43 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 15:41:43 --> Form_validation class already loaded. Second attempt ignored.
QUERY - 2021-08-13 15:41:44 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 15:41:44 --> Total execution time: 0.1340
DEBUG - 2021-08-13 15:41:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 15:41:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 15:42:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 15:42:01 --> No URI present. Default controller set.
DEBUG - 2021-08-13 15:42:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 15:42:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 15:42:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 15:42:01 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 15:42:01 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 15:42:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 15:42:01 --> No URI present. Default controller set.
DEBUG - 2021-08-13 15:42:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 15:42:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 15:42:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 15:42:01 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 15:42:01 --> Form_validation class already loaded. Second attempt ignored.
QUERY - 2021-08-13 15:42:01 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 15:42:01 --> Total execution time: 0.0670
DEBUG - 2021-08-13 15:42:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 15:42:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 15:42:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 15:42:22 --> No URI present. Default controller set.
DEBUG - 2021-08-13 15:42:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 15:42:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 15:42:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 15:42:22 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 15:42:22 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 15:42:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 15:42:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 15:42:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 15:42:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 15:42:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 15:42:28 --> 2.9319 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-13 15:42:28 --> 0.8423 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-13 15:42:28 --> 2.4773 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-13 15:42:28 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 15:42:28 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:42:28 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:42:28 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:42:28 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 15:42:28 --> Total execution time: 6.5891
DEBUG - 2021-08-13 15:42:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 15:42:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 15:42:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 15:42:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 15:42:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 15:42:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 15:42:29 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 15:42:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 15:42:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 15:42:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 15:42:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 15:42:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 15:42:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 15:42:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 15:42:29 --> Global POST, GET and COOKIE data sanitized
QUERY - 2021-08-13 15:42:32 --> 3.3825 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-13 15:42:32 --> Total execution time: 3.4797
DEBUG - 2021-08-13 15:42:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 15:42:32 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 15:42:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 15:42:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 15:42:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-13 15:43:03 --> 30.4254 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
DEBUG - 2021-08-13 15:43:03 --> Total execution time: 33.8240
DEBUG - 2021-08-13 15:43:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 15:43:03 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 15:43:03 --> 0.0495 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `campaign_name` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-13 15:43:03 --> Total execution time: 33.8984
DEBUG - 2021-08-13 15:43:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 15:43:03 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 15:43:03 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 15:43:03 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:43:03 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 15:43:03 --> 0.0004 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 15:43:03 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 15:43:03 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:43:03 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:43:03 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 15:43:03 --> Total execution time: 27.3921
DEBUG - 2021-08-13 15:52:06 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 15:52:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 15:52:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 15:52:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 15:52:06 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 15:52:06 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 15:52:06 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:52:06 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 15:52:06 --> 0.0003 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 15:52:06 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 15:52:06 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:52:06 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:52:06 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 15:52:06 --> Total execution time: 0.0812
DEBUG - 2021-08-13 15:52:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 15:52:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 15:52:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 15:52:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 15:52:48 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 15:52:48 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 15:52:48 --> 0.0009 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:52:48 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 15:52:48 --> 0.0003 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 15:52:48 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 15:52:48 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:52:48 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:52:48 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 15:52:48 --> Total execution time: 0.0693
DEBUG - 2021-08-13 15:53:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 15:53:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 15:53:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 15:53:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 15:53:51 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 15:53:51 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 15:53:51 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:53:51 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 15:53:51 --> 0.0003 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 15:53:51 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 15:53:51 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:53:51 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:53:51 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 15:53:51 --> Total execution time: 0.0802
DEBUG - 2021-08-13 15:54:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 15:54:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 15:54:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 15:54:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 15:54:15 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 15:54:15 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 15:54:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:54:15 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 15:54:15 --> 0.0003 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 15:54:15 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 15:54:15 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:54:15 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:54:15 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 15:54:15 --> Total execution time: 0.0811
DEBUG - 2021-08-13 15:54:19 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 15:54:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 15:54:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 15:54:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 15:54:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 15:54:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 15:54:23 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 15:54:23 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 15:54:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:54:23 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 15:54:23 --> 0.0003 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 15:54:23 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 15:54:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:54:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:54:23 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 15:54:23 --> Total execution time: 0.0810
DEBUG - 2021-08-13 15:54:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 15:54:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 15:54:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 15:54:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 15:54:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 15:54:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 15:54:26 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 15:54:26 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 15:54:26 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:54:26 --> 0.0003 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 15:54:26 --> 0.0003 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 15:54:26 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 15:54:26 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:54:26 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:54:26 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 15:54:26 --> Total execution time: 0.0839
DEBUG - 2021-08-13 15:55:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 15:55:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 15:55:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 15:55:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 15:55:58 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 15:55:58 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 15:55:58 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:55:58 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 15:55:58 --> 0.0003 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 15:55:58 --> 0.0007 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 15:55:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:55:58 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:55:58 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 15:55:58 --> Total execution time: 0.0809
DEBUG - 2021-08-13 15:56:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 15:56:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 15:56:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 15:56:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 15:56:30 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 15:56:30 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 15:56:30 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:56:30 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 15:56:30 --> 0.0003 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 15:56:30 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 15:56:30 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:56:30 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:56:30 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 15:56:30 --> Total execution time: 0.0735
DEBUG - 2021-08-13 15:56:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 15:56:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 15:56:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 15:56:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 15:56:45 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 15:56:45 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 15:56:45 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:56:45 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 15:56:45 --> 0.0004 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 15:56:45 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 15:56:45 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:56:45 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:56:45 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 15:56:45 --> Total execution time: 0.0844
DEBUG - 2021-08-13 15:56:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 15:56:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 15:57:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 15:57:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 15:57:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 15:57:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 15:57:15 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 15:57:15 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 15:57:15 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:57:15 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 15:57:15 --> 0.0003 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 15:57:15 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 15:57:15 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:57:15 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:57:15 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 15:57:15 --> Total execution time: 0.0738
DEBUG - 2021-08-13 15:57:17 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 15:57:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 15:57:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 15:57:17 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 15:57:17 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 15:57:17 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 15:57:17 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:57:17 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 15:57:17 --> 0.0003 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 15:57:17 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 15:57:17 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:57:17 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:57:17 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 15:57:17 --> Total execution time: 0.0662
DEBUG - 2021-08-13 15:57:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 15:57:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 15:57:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 15:57:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 15:57:18 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 15:57:19 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:57:19 --> 0.0713 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 15:57:19 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 15:57:19 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:57:19 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:57:19 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 15:57:19 --> Total execution time: 0.3527
DEBUG - 2021-08-13 15:57:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 15:57:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 15:58:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 15:58:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 15:58:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 15:58:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 15:58:02 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 15:58:02 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:58:02 --> 0.0004 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 15:58:02 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 15:58:02 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:58:02 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:58:02 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 15:58:02 --> Total execution time: 0.0763
DEBUG - 2021-08-13 15:58:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 15:58:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 15:58:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 15:58:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 15:58:03 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 15:58:03 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:58:03 --> 0.0004 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 15:58:03 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 15:58:03 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:58:03 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:58:03 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 15:58:03 --> Total execution time: 0.0660
DEBUG - 2021-08-13 15:58:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 15:58:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 15:58:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 15:58:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 15:58:04 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 15:58:04 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 15:58:04 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:58:04 --> 0.0005 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 15:58:04 --> 0.0005 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 15:58:04 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 15:58:04 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:58:04 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:58:04 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 15:58:04 --> Total execution time: 0.0861
DEBUG - 2021-08-13 15:58:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 15:58:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 15:58:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 15:58:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 15:58:07 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 15:58:07 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 15:58:07 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:58:07 --> 0.0003 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 15:58:07 --> 0.0003 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 15:58:07 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 15:58:07 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:58:07 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:58:07 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 15:58:07 --> Total execution time: 0.0793
DEBUG - 2021-08-13 15:58:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 15:58:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 15:58:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 15:58:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 15:58:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 15:58:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:58:09 --> 0.0004 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 15:58:09 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 15:58:09 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:58:09 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:58:09 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 15:58:09 --> Total execution time: 0.0711
DEBUG - 2021-08-13 15:59:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 15:59:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 15:59:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 15:59:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 15:59:02 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 15:59:02 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:59:02 --> 0.0005 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 15:59:02 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 15:59:02 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:59:02 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 15:59:02 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 15:59:02 --> Total execution time: 0.0691
DEBUG - 2021-08-13 16:00:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:00:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:00:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 16:00:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 16:00:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 16:00:39 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:00:39 --> 0.0005 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 16:00:39 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 16:00:39 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:00:39 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:00:39 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 16:00:39 --> Total execution time: 0.0702
DEBUG - 2021-08-13 16:01:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:01:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:01:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 16:01:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 16:01:02 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 16:01:02 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:01:02 --> 0.0005 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 16:01:02 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 16:01:02 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:01:02 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:01:02 --> 0.0002 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 16:01:02 --> Total execution time: 0.0675
DEBUG - 2021-08-13 16:01:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:01:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:01:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 16:01:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 16:01:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 16:01:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:01:13 --> 0.0004 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 16:01:13 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 16:01:13 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:01:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:01:13 --> 0.0006 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 16:01:13 --> Total execution time: 0.0717
DEBUG - 2021-08-13 16:02:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:02:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:02:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 16:02:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 16:02:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 16:02:10 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:02:10 --> 0.0005 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 16:02:10 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 16:02:10 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:02:10 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:02:10 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 16:02:10 --> Total execution time: 0.0757
DEBUG - 2021-08-13 16:04:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:04:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:04:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 16:04:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 16:04:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 16:04:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:04:13 --> 0.0005 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 16:04:13 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 16:04:13 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:04:13 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:04:13 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 16:04:13 --> Total execution time: 0.0679
DEBUG - 2021-08-13 16:05:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:05:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:05:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 16:05:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 16:05:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 16:05:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:05:08 --> 0.0007 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 16:05:08 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 16:05:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:05:08 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:05:08 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 16:05:08 --> Total execution time: 0.0720
DEBUG - 2021-08-13 16:07:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:07:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:07:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 16:07:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 16:07:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 16:07:58 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:07:58 --> 0.0005 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 16:07:58 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 16:07:58 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:07:58 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:07:58 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 16:07:58 --> Total execution time: 0.0753
DEBUG - 2021-08-13 16:08:19 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:08:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:08:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 16:08:19 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 16:08:19 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 16:08:19 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:08:19 --> 0.0005 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 16:08:19 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 16:08:19 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:08:19 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:08:19 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 16:08:19 --> Total execution time: 0.0627
DEBUG - 2021-08-13 16:08:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:08:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:08:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 16:08:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 16:08:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 16:08:35 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:08:35 --> 0.0005 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 16:08:35 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 16:08:35 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:08:35 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:08:35 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 16:08:35 --> Total execution time: 0.0741
DEBUG - 2021-08-13 16:10:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:10:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:10:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 16:10:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 16:10:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 16:10:01 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:10:01 --> 0.0005 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 16:10:01 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 16:10:01 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:10:01 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:10:01 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 16:10:01 --> Total execution time: 0.0795
DEBUG - 2021-08-13 16:10:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:10:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:10:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 16:10:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 16:10:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 16:10:21 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:10:21 --> 0.0005 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 16:10:21 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 16:10:21 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:10:21 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:10:21 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 16:10:21 --> Total execution time: 0.0684
DEBUG - 2021-08-13 16:13:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:13:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:13:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 16:13:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 16:13:04 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 16:13:04 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:13:04 --> 0.0005 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 16:13:04 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 16:13:04 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:13:04 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:13:04 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 16:13:04 --> Total execution time: 0.0722
DEBUG - 2021-08-13 16:13:06 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:13:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:13:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 16:13:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 16:13:06 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 16:13:06 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:13:06 --> 0.0004 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 16:13:06 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 16:13:06 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:13:06 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:13:06 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 16:13:06 --> Total execution time: 0.0773
DEBUG - 2021-08-13 16:13:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:13:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:13:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 16:13:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 16:13:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 16:13:38 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:13:38 --> 0.0004 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 16:13:38 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 16:13:38 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:13:38 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:13:38 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 16:13:38 --> Total execution time: 0.0754
DEBUG - 2021-08-13 16:13:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:13:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:13:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 16:13:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 16:13:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 16:13:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:13:55 --> 0.0004 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 16:13:55 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 16:13:55 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:13:55 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:13:55 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 16:13:55 --> Total execution time: 0.0700
DEBUG - 2021-08-13 16:15:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:15:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:15:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 16:15:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 16:15:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 16:15:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:15:01 --> 0.0004 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 16:15:01 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 16:15:01 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:15:01 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:15:01 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 16:15:01 --> Total execution time: 0.0801
DEBUG - 2021-08-13 16:15:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:15:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:15:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 16:15:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 16:15:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 16:15:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:15:15 --> 0.0004 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 16:15:15 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 16:15:15 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:15:15 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:15:15 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 16:15:15 --> Total execution time: 0.1032
DEBUG - 2021-08-13 16:16:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:16:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:16:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 16:16:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 16:16:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 16:16:26 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:16:26 --> 0.0004 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 16:16:26 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 16:16:26 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:16:26 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:16:26 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 16:16:26 --> Total execution time: 0.0642
DEBUG - 2021-08-13 16:17:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:17:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:17:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 16:17:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 16:17:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 16:17:44 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:17:44 --> 0.0005 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 16:17:44 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 16:17:44 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:17:44 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:17:44 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 16:17:44 --> Total execution time: 0.0800
DEBUG - 2021-08-13 16:17:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:17:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:17:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 16:17:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 16:17:48 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 16:17:48 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 16:17:48 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:17:48 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 16:17:48 --> 0.0003 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 16:17:48 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 16:17:48 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:17:48 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:17:48 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 16:17:48 --> Total execution time: 0.0802
DEBUG - 2021-08-13 16:18:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:18:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:18:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 16:18:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 16:18:14 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 16:18:14 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 16:18:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:18:14 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 16:18:14 --> 0.0003 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 16:18:14 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 16:18:14 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:18:14 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:18:14 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 16:18:14 --> Total execution time: 0.0789
DEBUG - 2021-08-13 16:18:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:18:20 --> No URI present. Default controller set.
DEBUG - 2021-08-13 16:18:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:18:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 16:18:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 16:18:20 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 16:18:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:18:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:18:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 16:18:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 16:18:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 16:18:27 --> 2.3713 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-13 16:18:27 --> 0.8298 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-13 16:18:27 --> 2.9668 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-13 16:18:27 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 16:18:27 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:18:27 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:18:27 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:18:27 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 16:18:27 --> Total execution time: 6.2383
DEBUG - 2021-08-13 16:18:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:18:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:18:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:18:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:18:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 16:18:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 16:18:27 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 16:18:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:18:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:18:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:18:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:18:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:18:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:18:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 16:18:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 16:18:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:18:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:18:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-13 16:18:30 --> 2.6339 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-13 16:18:30 --> Total execution time: 2.7289
DEBUG - 2021-08-13 16:18:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 16:18:30 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 16:18:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:18:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:18:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-13 16:18:59 --> 29.5245 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
DEBUG - 2021-08-13 16:18:59 --> Total execution time: 32.1644
DEBUG - 2021-08-13 16:18:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 16:18:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 16:18:59 --> 0.0497 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `campaign_name` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-13 16:18:59 --> Total execution time: 32.2275
DEBUG - 2021-08-13 16:18:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 16:18:59 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 16:19:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:19:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:19:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 16:19:28 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 16:19:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:19:41 --> 28.3884 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-13 16:19:41 --> 0.0259 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 16:19:41 --> 2.6971 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-13 16:19:41 --> 0.0481 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-13 16:19:41 --> 2.542 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-13 16:19:41 --> 2.475 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-13 16:19:41 --> 2.4223 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-13 16:19:41 --> 0.0493 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-13 16:19:41 --> 2.3836 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-13 16:19:41 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 16:19:41 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:19:41 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:19:41 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 16:19:41 --> Total execution time: 72.2392
DEBUG - 2021-08-13 16:19:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 16:19:41 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 16:19:41 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 16:19:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:19:41 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 16:19:41 --> 0.0003 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 16:19:41 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 16:19:41 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:19:41 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:19:41 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 16:19:41 --> Total execution time: 63.7958
DEBUG - 2021-08-13 16:19:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 16:19:41 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 16:19:41 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 16:19:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:19:41 --> 0.0003 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 16:19:41 --> 0.0003 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 16:19:41 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 16:19:41 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:19:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:19:41 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 16:19:41 --> Total execution time: 29.0831
DEBUG - 2021-08-13 16:20:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:20:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:20:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 16:20:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 16:20:02 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 16:20:02 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 16:20:02 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:20:02 --> 0.0003 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 16:20:02 --> 0.0003 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 16:20:02 --> 0.0007 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 16:20:02 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:20:02 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:20:02 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 16:20:02 --> Total execution time: 0.0746
DEBUG - 2021-08-13 16:21:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:21:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:21:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 16:21:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 16:21:23 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 16:21:23 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 16:21:23 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:21:23 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 16:21:23 --> 0.0003 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 16:21:23 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 16:21:23 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:21:23 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:21:23 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 16:21:23 --> Total execution time: 0.0759
DEBUG - 2021-08-13 16:24:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:24:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:24:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 16:24:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 16:24:24 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 16:24:24 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 16:24:24 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:24:24 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 16:24:24 --> 0.0003 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 16:24:24 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 16:24:24 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:24:24 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:24:24 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 16:24:24 --> Total execution time: 0.0878
DEBUG - 2021-08-13 16:24:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:24:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:24:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 16:24:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 16:24:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 16:24:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:24:31 --> 0.0005 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 16:24:31 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 16:24:31 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:24:31 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:24:31 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 16:24:31 --> Total execution time: 0.0676
DEBUG - 2021-08-13 16:24:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:24:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:24:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 16:24:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 16:24:33 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 16:24:33 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 16:24:33 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:24:33 --> 0.0003 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 16:24:33 --> 0.0003 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 16:24:33 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 16:24:33 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:24:33 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:24:33 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 16:24:33 --> Total execution time: 0.0730
DEBUG - 2021-08-13 16:26:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:26:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:26:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 16:26:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 16:26:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 16:26:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:26:10 --> 0.0005 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 16:26:10 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 16:26:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:26:10 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:26:10 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 16:26:10 --> Total execution time: 0.0725
DEBUG - 2021-08-13 16:38:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:38:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:38:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 16:38:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 16:38:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 16:38:14 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:38:14 --> 0.0005 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 16:38:14 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 16:38:14 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:38:14 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:38:14 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 16:38:14 --> Total execution time: 0.1254
DEBUG - 2021-08-13 16:38:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:38:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:38:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 16:38:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 16:38:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 16:38:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:38:31 --> 0.0005 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 16:38:31 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 16:38:31 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:38:31 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:38:31 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 16:38:32 --> Total execution time: 0.0762
DEBUG - 2021-08-13 16:39:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:39:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:39:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 16:39:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 16:39:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 16:39:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:39:08 --> 0.0004 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 16:39:08 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 16:39:08 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:39:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:39:08 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 16:39:08 --> Total execution time: 0.0674
DEBUG - 2021-08-13 16:40:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:40:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:40:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 16:40:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 16:40:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 16:40:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:40:10 --> 0.0007 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 16:40:10 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 16:40:10 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:40:10 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:40:10 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 16:40:10 --> Total execution time: 0.0789
DEBUG - 2021-08-13 16:41:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:41:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:41:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 16:41:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 16:41:31 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 16:41:31 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 16:41:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:41:31 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 16:41:31 --> 0.0003 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 16:41:31 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 16:41:31 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:41:31 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:41:31 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 16:41:31 --> Total execution time: 0.0834
DEBUG - 2021-08-13 16:42:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:42:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:42:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 16:42:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 16:42:18 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 16:42:18 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:42:18 --> 0.0005 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 16:42:18 --> 0.0002 | SELECT * FROM roles
QUERY - 2021-08-13 16:42:18 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 16:42:18 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:42:18 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:42:18 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 16:42:18 --> Total execution time: 0.1219
DEBUG - 2021-08-13 16:46:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:46:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:46:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 16:46:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 16:46:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 16:46:10 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:46:10 --> 0.0005 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 16:46:10 --> 0.0002 | SELECT * FROM roles
QUERY - 2021-08-13 16:46:10 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 16:46:10 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:46:10 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:46:10 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 16:46:10 --> Total execution time: 0.0820
DEBUG - 2021-08-13 16:46:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:46:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:46:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 16:46:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 16:46:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 16:46:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:46:31 --> 0.0004 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 16:46:31 --> 0.0002 | SELECT * FROM roles
QUERY - 2021-08-13 16:46:31 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 16:46:31 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:46:31 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:46:31 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 16:46:31 --> Total execution time: 0.0770
DEBUG - 2021-08-13 16:47:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:47:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:47:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 16:47:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 16:47:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 16:47:39 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:47:39 --> 0.0004 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 16:47:39 --> 0.0002 | SELECT * FROM roles
QUERY - 2021-08-13 16:47:39 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 16:47:39 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:47:39 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:47:39 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 16:47:39 --> Total execution time: 0.0676
DEBUG - 2021-08-13 16:48:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:48:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:48:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 16:48:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 16:48:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 16:48:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:48:01 --> 0.0005 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 16:48:01 --> 0.0002 | SELECT * FROM roles
QUERY - 2021-08-13 16:48:01 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 16:48:01 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:48:01 --> 0.0008 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:48:01 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 16:48:01 --> Total execution time: 0.0678
DEBUG - 2021-08-13 16:49:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:49:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:49:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 16:49:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 16:49:51 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 16:49:51 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:49:51 --> 0.0005 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 16:49:51 --> 0.0002 | SELECT * FROM roles
QUERY - 2021-08-13 16:49:51 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 16:49:51 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:49:51 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:49:51 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 16:49:51 --> Total execution time: 0.0808
DEBUG - 2021-08-13 16:50:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:50:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:50:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 16:50:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 16:50:18 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 16:50:18 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:50:18 --> 0.0005 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 16:50:18 --> 0.0002 | SELECT * FROM roles
QUERY - 2021-08-13 16:50:18 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 16:50:18 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:50:18 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:50:18 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 16:50:18 --> Total execution time: 0.0713
DEBUG - 2021-08-13 16:51:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:51:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:51:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 16:51:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 16:51:08 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 16:51:08 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 16:51:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:51:08 --> 0.0003 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 16:51:08 --> 0.0003 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 16:51:08 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 16:51:08 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:51:08 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:51:08 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 16:51:08 --> Total execution time: 0.0711
DEBUG - 2021-08-13 16:51:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:51:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:51:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 16:51:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 16:51:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 16:51:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:51:15 --> 0.0005 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 16:51:15 --> 0.0002 | SELECT * FROM roles
QUERY - 2021-08-13 16:51:15 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 16:51:15 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:51:15 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:51:15 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 16:51:15 --> Total execution time: 0.0843
DEBUG - 2021-08-13 16:51:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:51:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:51:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 16:51:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 16:51:20 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 16:51:20 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 16:51:20 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:51:20 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 16:51:20 --> 0.0003 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 16:51:20 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 16:51:20 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:51:20 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:51:20 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 16:51:20 --> Total execution time: 0.0834
DEBUG - 2021-08-13 16:51:49 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:51:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:51:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:51:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:51:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 16:51:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 16:51:51 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 16:51:51 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 16:51:51 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:51:51 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 16:51:51 --> 0.0003 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 16:51:51 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 16:51:51 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:51:51 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:51:51 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 16:51:51 --> Total execution time: 0.0854
DEBUG - 2021-08-13 16:51:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:51:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:51:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 16:51:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 16:51:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 16:51:54 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:51:54 --> 0.0005 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 16:51:54 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 16:51:54 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:51:54 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:51:54 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 16:51:54 --> Total execution time: 0.0696
DEBUG - 2021-08-13 16:51:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:51:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:51:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 16:51:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 16:51:55 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 16:51:55 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 16:51:55 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:51:55 --> 0.0003 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 16:51:55 --> 0.0003 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 16:51:55 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 16:51:55 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:51:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:51:55 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 16:51:55 --> Total execution time: 0.0815
DEBUG - 2021-08-13 16:52:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:52:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:52:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 16:52:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 16:52:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 16:52:20 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:52:20 --> 0.0004 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 16:52:20 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 16:52:20 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:52:20 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:52:20 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 16:52:20 --> Total execution time: 0.0740
DEBUG - 2021-08-13 16:52:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:52:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:52:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 16:52:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 16:52:22 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 16:52:22 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 16:52:22 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:52:22 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 16:52:22 --> 0.0003 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 16:52:22 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 16:52:22 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:52:22 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:52:22 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 16:52:22 --> Total execution time: 0.0727
DEBUG - 2021-08-13 16:52:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:52:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:52:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 16:52:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 16:52:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 16:52:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:52:23 --> 0.0006 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 16:52:23 --> 0.0006 | SELECT * FROM roles
QUERY - 2021-08-13 16:52:23 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 16:52:23 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:52:23 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:52:23 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 16:52:23 --> Total execution time: 0.0693
DEBUG - 2021-08-13 16:53:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:53:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:53:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 16:53:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 16:53:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 16:53:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:53:40 --> 0.0005 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 16:53:40 --> 0.0002 | SELECT * FROM roles
QUERY - 2021-08-13 16:53:40 --> 0.0006 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 16:53:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:53:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:53:40 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 16:53:40 --> Total execution time: 0.0736
DEBUG - 2021-08-13 16:57:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 16:57:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 16:57:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 16:57:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 16:57:51 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 16:57:51 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:57:51 --> 0.0005 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 16:57:51 --> 0.0002 | SELECT * FROM roles
QUERY - 2021-08-13 16:57:51 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 16:57:51 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:57:51 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 16:57:51 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 16:57:51 --> Total execution time: 0.0832
DEBUG - 2021-08-13 17:00:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:00:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:00:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:00:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:00:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 17:00:27 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:00:27 --> 0.0006 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 17:00:27 --> 0.0002 | SELECT * FROM roles
QUERY - 2021-08-13 17:00:27 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:00:27 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:00:27 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:00:27 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:00:27 --> Total execution time: 0.0870
DEBUG - 2021-08-13 17:00:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:00:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:00:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:00:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:00:30 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 17:00:30 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:00:30 --> 0.0005 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 17:00:30 --> 0.0002 | SELECT * FROM roles
QUERY - 2021-08-13 17:00:30 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:00:30 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:00:30 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:00:30 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:00:30 --> Total execution time: 0.0721
DEBUG - 2021-08-13 17:01:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:01:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:01:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:01:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:01:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 17:01:38 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:01:38 --> 0.0007 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 17:01:38 --> 0.0004 | SELECT * FROM roles
QUERY - 2021-08-13 17:01:38 --> 0.0007 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:01:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:01:38 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:01:38 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:01:38 --> Total execution time: 0.0976
DEBUG - 2021-08-13 17:02:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:02:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:02:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:02:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:02:33 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 17:02:33 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:02:33 --> 0.0005 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 17:02:33 --> 0.0002 | SELECT * FROM roles
QUERY - 2021-08-13 17:02:33 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:02:33 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:02:33 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:02:33 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:02:33 --> Total execution time: 0.0787
DEBUG - 2021-08-13 17:03:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:03:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:03:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:03:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:03:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 17:03:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:03:14 --> 0.0004 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 17:03:14 --> 0.0002 | SELECT * FROM roles
QUERY - 2021-08-13 17:03:14 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:03:14 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:03:14 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:03:14 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:03:14 --> Total execution time: 0.0848
DEBUG - 2021-08-13 17:03:17 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:03:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:03:32 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:03:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:03:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:03:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:03:32 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 17:03:32 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:03:32 --> 0.0005 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 17:03:32 --> 0.0004 | SELECT * FROM roles
QUERY - 2021-08-13 17:03:32 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:03:32 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:03:32 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:03:32 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:03:32 --> Total execution time: 0.0682
DEBUG - 2021-08-13 17:03:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:03:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:03:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:03:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:03:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 17:03:34 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:03:34 --> 0.0007 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 17:03:34 --> 0.0003 | SELECT * FROM roles
QUERY - 2021-08-13 17:03:34 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:03:34 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:03:34 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:03:34 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:03:34 --> Total execution time: 0.0797
DEBUG - 2021-08-13 17:03:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:03:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:03:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:03:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:03:35 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 17:03:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:03:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:04:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:04:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:04:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:04:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:04:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 17:04:20 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:04:20 --> 0.0005 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 17:04:20 --> 0.0003 | SELECT * FROM roles
QUERY - 2021-08-13 17:04:20 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:04:20 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:04:20 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:04:20 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:04:20 --> Total execution time: 0.0677
DEBUG - 2021-08-13 17:04:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:04:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:04:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:04:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:04:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 17:04:23 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:04:23 --> 0.0005 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 17:04:23 --> 0.0002 | SELECT * FROM roles
QUERY - 2021-08-13 17:04:23 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:04:23 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:04:23 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:04:23 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:04:23 --> Total execution time: 0.0743
DEBUG - 2021-08-13 17:04:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:04:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:04:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:04:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:04:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 17:04:24 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:04:24 --> 0.0006 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 17:04:24 --> 0.0004 | SELECT * FROM roles
QUERY - 2021-08-13 17:04:24 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:04:24 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:04:24 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:04:24 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:04:24 --> Total execution time: 0.0736
DEBUG - 2021-08-13 17:04:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:04:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:04:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:04:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:04:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:04:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 17:04:53 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:04:53 --> 0.0006 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 17:04:53 --> 0.0003 | SELECT * FROM roles
QUERY - 2021-08-13 17:04:53 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:04:53 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:04:53 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:04:53 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:04:53 --> Total execution time: 0.0767
DEBUG - 2021-08-13 17:04:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:04:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:04:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:04:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:04:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 17:04:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:04:55 --> 0.0005 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 17:04:55 --> 0.0003 | SELECT * FROM roles
QUERY - 2021-08-13 17:04:55 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:04:55 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:04:55 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:04:55 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:04:55 --> Total execution time: 0.0719
DEBUG - 2021-08-13 17:04:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:04:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:04:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:04:57 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:04:57 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 17:04:57 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:04:57 --> 0.0006 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 17:04:57 --> 0.0002 | SELECT * FROM roles
QUERY - 2021-08-13 17:04:57 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:04:57 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:04:57 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:04:57 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:04:57 --> Total execution time: 0.0699
DEBUG - 2021-08-13 17:04:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:04:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:04:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:04:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:04:58 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 17:04:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:04:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:06:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:06:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:06:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:06:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:06:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 17:06:14 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:06:14 --> 0.0004 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 17:06:14 --> 0.0002 | SELECT * FROM roles
QUERY - 2021-08-13 17:06:14 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:06:14 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:06:14 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:06:14 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:06:14 --> Total execution time: 0.0721
DEBUG - 2021-08-13 17:06:17 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:06:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:06:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:06:17 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:06:17 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 17:06:17 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:06:17 --> 0.0005 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 17:06:17 --> 0.0002 | SELECT * FROM roles
QUERY - 2021-08-13 17:06:17 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:06:17 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:06:17 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:06:17 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:06:17 --> Total execution time: 0.0825
DEBUG - 2021-08-13 17:06:19 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:06:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:06:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:06:19 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:06:19 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 17:06:19 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:06:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:06:32 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:06:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:06:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:06:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:06:32 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 17:06:33 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:06:33 --> 0.0005 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 17:06:33 --> 0.0002 | SELECT * FROM roles
QUERY - 2021-08-13 17:06:33 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:06:33 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:06:33 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:06:33 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:06:33 --> Total execution time: 0.0806
DEBUG - 2021-08-13 17:06:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:06:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:06:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:06:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:06:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 17:06:34 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:06:34 --> 0.0005 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 17:06:34 --> 0.0002 | SELECT * FROM roles
QUERY - 2021-08-13 17:06:34 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:06:34 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:06:34 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:06:34 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:06:34 --> Total execution time: 0.0785
DEBUG - 2021-08-13 17:06:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:06:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:06:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:06:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:06:36 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 17:06:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:06:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:06:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:06:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:06:36 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 17:06:36 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:06:36 --> 0.0004 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 17:06:36 --> 0.0002 | SELECT * FROM roles
QUERY - 2021-08-13 17:06:36 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:06:36 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:06:36 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:06:36 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:06:36 --> Total execution time: 0.0680
DEBUG - 2021-08-13 17:07:06 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:07:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:07:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:07:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:07:06 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 17:07:06 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:07:06 --> 0.0004 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 17:07:06 --> 0.0002 | SELECT * FROM roles
QUERY - 2021-08-13 17:07:06 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:07:06 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:07:06 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:07:06 --> 0.0002 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:07:06 --> Total execution time: 0.0757
DEBUG - 2021-08-13 17:07:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:07:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:07:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:07:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:07:07 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 17:07:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:07:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:07:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:07:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:07:07 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 17:07:07 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:07:07 --> 0.0004 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 17:07:07 --> 0.0002 | SELECT * FROM roles
QUERY - 2021-08-13 17:07:07 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:07:07 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:07:07 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:07:07 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:07:07 --> Total execution time: 0.0691
DEBUG - 2021-08-13 17:09:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:09:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:09:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:09:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:09:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 17:09:20 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:09:20 --> 0.0005 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 17:09:20 --> 0.0002 | SELECT * FROM roles
QUERY - 2021-08-13 17:09:20 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:09:20 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:09:20 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:09:20 --> 0.0002 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:09:20 --> Total execution time: 0.0845
DEBUG - 2021-08-13 17:13:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:13:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:13:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:13:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:13:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 17:13:26 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:13:26 --> 0.0005 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 17:13:26 --> 0.0002 | SELECT * FROM roles
QUERY - 2021-08-13 17:13:26 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:13:26 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:13:26 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:13:26 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:13:26 --> Total execution time: 0.0829
DEBUG - 2021-08-13 17:14:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:14:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:14:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:14:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:14:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 17:14:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:14:01 --> 0.0005 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 17:14:01 --> 0.0002 | SELECT * FROM roles
QUERY - 2021-08-13 17:14:01 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:14:01 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:14:01 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:14:01 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:14:01 --> Total execution time: 0.0690
DEBUG - 2021-08-13 17:14:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:14:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:14:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:14:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:14:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 17:14:20 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:14:20 --> 0.0005 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 17:14:20 --> 0.0002 | SELECT * FROM roles
QUERY - 2021-08-13 17:14:20 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:14:20 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:14:20 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:14:20 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:14:20 --> Total execution time: 0.0809
DEBUG - 2021-08-13 17:14:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:14:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:14:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:14:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:14:45 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 17:14:45 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 17:14:45 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:14:45 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 17:14:45 --> 0.0003 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 17:14:45 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:14:45 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:14:45 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:14:45 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:14:45 --> Total execution time: 0.1305
DEBUG - 2021-08-13 17:14:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:14:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:14:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:14:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:14:47 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 17:14:47 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:14:47 --> 0.0009 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 17:14:47 --> 0.0004 | SELECT * FROM roles
QUERY - 2021-08-13 17:14:47 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:14:47 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:14:47 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:14:47 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:14:47 --> Total execution time: 0.0819
DEBUG - 2021-08-13 17:14:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:14:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:14:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:14:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:14:50 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 17:14:50 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 17:14:50 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:14:50 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 17:14:50 --> 0.0004 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 17:14:50 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:14:50 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:14:50 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:14:50 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:14:50 --> Total execution time: 0.0828
DEBUG - 2021-08-13 17:15:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:15:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:15:06 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:15:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:15:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:15:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:15:06 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 17:15:06 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 17:15:06 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:15:06 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 17:15:06 --> 0.0013 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 17:15:06 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:15:06 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:15:06 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:15:06 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:15:06 --> Total execution time: 0.0739
DEBUG - 2021-08-13 17:16:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:16:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:16:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:16:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:16:51 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 17:16:51 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 17:16:51 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:16:51 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 17:16:51 --> 0.0003 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 17:16:51 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:16:51 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:16:51 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:16:51 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:16:51 --> Total execution time: 0.0747
DEBUG - 2021-08-13 17:16:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:16:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:16:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:16:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:16:52 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 17:16:52 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 17:16:52 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:16:52 --> 0.0003 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 17:16:52 --> 0.0003 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 17:16:52 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:16:52 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:16:52 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:16:52 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:16:52 --> Total execution time: 0.0777
DEBUG - 2021-08-13 17:16:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:16:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:16:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:16:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:16:53 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 17:16:53 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 17:16:53 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:16:53 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 17:16:53 --> 0.0003 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 17:16:53 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:16:53 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:16:53 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:16:53 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:16:53 --> Total execution time: 0.0763
DEBUG - 2021-08-13 17:16:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:16:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:16:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:16:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:16:54 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 17:16:54 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 17:16:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:16:54 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 17:16:54 --> 0.0003 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 17:16:54 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:16:54 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:16:54 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:16:54 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:16:54 --> Total execution time: 0.0697
DEBUG - 2021-08-13 17:16:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:16:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:16:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:16:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:16:55 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 17:16:55 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 17:16:55 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:16:55 --> 0.0003 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 17:16:55 --> 0.0003 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 17:16:55 --> 0.0006 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:16:55 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:16:55 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:16:55 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:16:55 --> Total execution time: 0.0804
DEBUG - 2021-08-13 17:17:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:17:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:17:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:17:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:17:29 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 17:17:29 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 17:17:29 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:17:29 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 17:17:29 --> 0.0004 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 17:17:29 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:17:29 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:17:29 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:17:29 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:17:29 --> Total execution time: 0.0820
DEBUG - 2021-08-13 17:17:32 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:17:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:17:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:17:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:17:32 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 17:17:32 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:17:32 --> 0.0005 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 17:17:32 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:17:32 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:17:32 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:17:32 --> 0.0002 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:17:32 --> Total execution time: 0.0709
DEBUG - 2021-08-13 17:17:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:17:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:17:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:17:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:17:33 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 17:17:33 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 17:17:33 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:17:33 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 17:17:33 --> 0.0003 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 17:17:33 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:17:33 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:17:33 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:17:33 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:17:33 --> Total execution time: 0.0757
DEBUG - 2021-08-13 17:17:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:17:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:17:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:17:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:17:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 17:17:34 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:17:34 --> 0.0005 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 17:17:34 --> 0.0006 | SELECT * FROM roles
QUERY - 2021-08-13 17:17:34 --> 0.0008 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:17:34 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:17:34 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:17:34 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:17:34 --> Total execution time: 0.0686
DEBUG - 2021-08-13 17:17:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:17:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:17:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:17:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:17:36 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 17:17:36 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 17:17:36 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:17:36 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 17:17:36 --> 0.0003 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 17:17:36 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:17:36 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:17:36 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:17:36 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:17:36 --> Total execution time: 0.0892
DEBUG - 2021-08-13 17:17:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:17:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:17:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:17:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:17:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 17:17:39 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:17:39 --> 0.0009 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 17:17:39 --> 0.0009 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:17:39 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:17:39 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:17:39 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:17:39 --> Total execution time: 0.0696
DEBUG - 2021-08-13 17:17:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:17:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:17:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:17:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:17:40 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 17:17:40 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 17:17:40 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:17:40 --> 0.0005 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 17:17:40 --> 0.0003 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 17:17:40 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:17:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:17:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:17:40 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:17:40 --> Total execution time: 0.0834
DEBUG - 2021-08-13 17:17:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:17:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:17:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:17:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:17:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 17:17:42 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:17:42 --> 0.0005 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 17:17:42 --> 0.0002 | SELECT * FROM roles
QUERY - 2021-08-13 17:17:42 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:17:42 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:17:42 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:17:42 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:17:42 --> Total execution time: 0.0719
DEBUG - 2021-08-13 17:17:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:17:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:17:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:17:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:17:58 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 17:17:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:17:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:17:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:17:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:17:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 17:17:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:17:58 --> 0.0006 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 17:17:58 --> 0.0002 | SELECT * FROM roles
QUERY - 2021-08-13 17:17:58 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:17:58 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:17:58 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:17:58 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:17:58 --> Total execution time: 0.0726
DEBUG - 2021-08-13 17:18:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:18:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:18:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:18:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:18:37 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 17:18:37 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 17:18:37 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:18:37 --> 0.0006 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 17:18:37 --> 0.0004 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 17:18:37 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:18:37 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:18:37 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:18:37 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:18:37 --> Total execution time: 0.0784
DEBUG - 2021-08-13 17:19:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:19:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:19:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:19:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:19:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 17:19:08 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:19:08 --> 0.0003 | SELECT * FROM roles
QUERY - 2021-08-13 17:19:08 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:19:08 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:19:08 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:19:08 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:19:08 --> Total execution time: 0.1205
DEBUG - 2021-08-13 17:20:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:20:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:20:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:20:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:20:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 17:20:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:20:28 --> 0.0007 | SELECT * FROM roles
QUERY - 2021-08-13 17:20:28 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:20:28 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:20:28 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:20:28 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:20:28 --> Total execution time: 0.0767
DEBUG - 2021-08-13 17:20:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:20:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:20:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:20:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:20:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 17:20:31 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:20:31 --> 0.0003 | SELECT * FROM roles
QUERY - 2021-08-13 17:20:31 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:20:31 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:20:31 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:20:31 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:20:31 --> Total execution time: 0.0773
DEBUG - 2021-08-13 17:21:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:21:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:21:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:21:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:21:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 17:21:20 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:21:20 --> 0.0003 | SELECT * FROM roles
QUERY - 2021-08-13 17:21:20 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:21:20 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:21:20 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:21:20 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:21:20 --> Total execution time: 0.0747
DEBUG - 2021-08-13 17:22:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:22:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:22:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:22:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:22:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 17:22:22 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:22:22 --> 0.0003 | SELECT * FROM roles
QUERY - 2021-08-13 17:22:22 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:22:22 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:22:22 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:22:22 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:22:22 --> Total execution time: 0.0772
DEBUG - 2021-08-13 17:22:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:22:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:22:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:22:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:22:37 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 17:22:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:22:37 --> No URI present. Default controller set.
DEBUG - 2021-08-13 17:22:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:22:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:22:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:22:37 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 17:22:37 --> Form_validation class already loaded. Second attempt ignored.
QUERY - 2021-08-13 17:22:37 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:22:38 --> Total execution time: 0.0651
DEBUG - 2021-08-13 17:22:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:22:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:23:06 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:23:06 --> No URI present. Default controller set.
DEBUG - 2021-08-13 17:23:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:23:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:23:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:23:06 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 17:23:06 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:23:06 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:23:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:23:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:23:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:23:06 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 17:23:13 --> 3.1094 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-13 17:23:13 --> 0.778 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-13 17:23:13 --> 2.2987 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-13 17:23:13 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:23:13 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 17:23:13 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 17:23:13 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 17:23:13 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:23:13 --> Total execution time: 6.2695
DEBUG - 2021-08-13 17:23:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:23:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:23:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:23:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:23:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:23:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:23:13 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 17:23:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:23:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:23:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:23:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:23:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:23:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:23:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:23:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-13 17:23:17 --> 3.4411 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-13 17:23:17 --> Total execution time: 3.5468
DEBUG - 2021-08-13 17:23:17 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:23:17 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 17:23:45 --> 28.7019 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
DEBUG - 2021-08-13 17:23:45 --> Total execution time: 32.1475
DEBUG - 2021-08-13 17:23:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:23:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 17:23:45 --> 0.0576 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `campaign_name` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-13 17:23:45 --> Total execution time: 32.2335
DEBUG - 2021-08-13 17:23:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:23:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:23:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:23:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:23:47 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 17:23:47 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 17:23:47 --> 0.1023 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-13 17:23:47 --> 0.0007 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:23:47 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 17:23:47 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 17:23:47 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:23:47 --> Total execution time: 0.7585
DEBUG - 2021-08-13 17:23:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:23:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:23:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:23:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:23:51 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 17:23:56 --> 2.5377 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-13 17:23:56 --> 0.8641 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-13 17:23:56 --> 2.2781 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-13 17:23:56 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:23:56 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 17:23:56 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 17:23:56 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 17:23:56 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:23:56 --> Total execution time: 5.7517
DEBUG - 2021-08-13 17:23:57 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:23:57 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:23:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:23:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:23:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:23:57 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:23:57 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 17:23:57 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:23:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:23:57 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:23:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:23:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:23:57 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:23:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:23:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-13 17:23:59 --> 2.7925 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-13 17:23:59 --> Total execution time: 2.8880
DEBUG - 2021-08-13 17:23:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:23:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 17:24:29 --> 29.3236 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
DEBUG - 2021-08-13 17:24:29 --> Total execution time: 32.1007
DEBUG - 2021-08-13 17:24:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:24:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 17:24:29 --> 0.0659 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `campaign_name` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-13 17:24:29 --> Total execution time: 32.1780
DEBUG - 2021-08-13 17:24:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:24:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:24:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:24:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:24:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 17:24:31 --> 0.0006 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 17:24:31 --> 0.0005 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 17:24:31 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:24:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 17:24:31 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 17:24:31 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:24:31 --> Total execution time: 0.1787
DEBUG - 2021-08-13 17:24:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:24:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:24:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:24:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:24:37 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 17:24:37 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:24:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:24:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:24:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:24:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:24:37 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 17:24:37 --> 0.0009 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 17:24:37 --> 0.0005 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 2
QUERY - 2021-08-13 17:24:37 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:24:37 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 17:24:37 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 17:24:37 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:24:37 --> Total execution time: 0.0852
DEBUG - 2021-08-13 17:24:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:24:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:24:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:24:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:24:44 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 17:24:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:24:44 --> No URI present. Default controller set.
DEBUG - 2021-08-13 17:24:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:24:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:24:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:24:44 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 17:24:44 --> Form_validation class already loaded. Second attempt ignored.
QUERY - 2021-08-13 17:24:44 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:24:44 --> Total execution time: 0.0690
DEBUG - 2021-08-13 17:24:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:24:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:24:49 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:24:49 --> No URI present. Default controller set.
DEBUG - 2021-08-13 17:24:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:24:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:24:49 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:24:49 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 17:24:49 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:24:49 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:24:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:24:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:24:49 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:24:49 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 17:24:57 --> 2.736 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-13 17:24:57 --> 1.1022 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-13 17:24:57 --> 3.7408 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-13 17:24:57 --> 0.0006 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:24:57 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:24:57 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:24:57 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:24:57 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:24:57 --> Total execution time: 7.6526
DEBUG - 2021-08-13 17:24:57 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:24:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:24:57 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:24:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:24:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:24:57 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:24:57 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 17:24:57 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:24:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:24:57 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:24:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:24:57 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:24:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:24:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:24:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-13 17:25:01 --> 3.5836 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-13 17:25:01 --> Total execution time: 3.6928
DEBUG - 2021-08-13 17:25:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:25:01 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 17:25:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:25:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:25:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-13 17:25:30 --> 28.8549 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
DEBUG - 2021-08-13 17:25:30 --> Total execution time: 32.4270
DEBUG - 2021-08-13 17:25:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:25:30 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 17:25:30 --> 0.0413 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `campaign_name` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-13 17:25:30 --> Total execution time: 32.4876
DEBUG - 2021-08-13 17:25:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:25:30 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 17:25:30 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 17:25:30 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:25:30 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 17:25:30 --> 0.0011 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 17:25:30 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:25:30 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:25:30 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:25:30 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:25:30 --> Total execution time: 17.4373
DEBUG - 2021-08-13 17:25:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:25:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:25:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:25:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:25:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 17:25:34 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:25:34 --> 0.0003 | SELECT * FROM roles
QUERY - 2021-08-13 17:25:34 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:25:34 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:25:34 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:25:34 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:25:34 --> Total execution time: 0.0790
DEBUG - 2021-08-13 17:30:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:30:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:30:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:30:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:30:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 17:30:08 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:30:08 --> 0.0003 | SELECT * FROM roles
QUERY - 2021-08-13 17:30:08 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:30:08 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:30:08 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:30:08 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:30:08 --> Total execution time: 0.0811
DEBUG - 2021-08-13 17:30:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:30:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:30:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:30:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:30:48 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 17:30:48 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:30:48 --> 0.0005 | SELECT * FROM roles
QUERY - 2021-08-13 17:30:48 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:30:48 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:30:48 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:30:48 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:30:48 --> Total execution time: 0.1017
DEBUG - 2021-08-13 17:32:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:32:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:32:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:32:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:32:04 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 17:32:04 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:32:04 --> 0.0003 | SELECT * FROM roles
QUERY - 2021-08-13 17:32:04 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:32:04 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:32:04 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:32:04 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:32:04 --> Total execution time: 0.0754
DEBUG - 2021-08-13 17:32:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:32:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:32:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:32:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:32:48 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 17:32:48 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:32:48 --> 0.0003 | SELECT * FROM roles
QUERY - 2021-08-13 17:32:48 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:32:48 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:32:48 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:32:48 --> 0.0009 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:32:48 --> Total execution time: 0.0821
DEBUG - 2021-08-13 17:35:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:35:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:35:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:35:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:35:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 17:35:27 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:35:27 --> 0.0003 | SELECT * FROM roles
QUERY - 2021-08-13 17:35:27 --> 0.0006 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:35:27 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:35:27 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:35:27 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:35:27 --> Total execution time: 0.0819
DEBUG - 2021-08-13 17:36:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:36:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:36:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:36:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:36:05 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 17:36:05 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:36:05 --> 0.0003 | SELECT * FROM roles
QUERY - 2021-08-13 17:36:05 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:36:05 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:36:05 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:36:05 --> 0.0006 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:36:05 --> Total execution time: 0.0926
DEBUG - 2021-08-13 17:39:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:39:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:39:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:39:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:39:37 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 17:39:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:39:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:39:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:39:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:39:37 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 17:39:37 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:39:37 --> 0.0003 | SELECT * FROM roles
QUERY - 2021-08-13 17:39:37 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:39:37 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:39:37 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:39:37 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:39:37 --> Total execution time: 0.0710
DEBUG - 2021-08-13 17:39:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:39:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:39:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:39:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:39:45 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 17:39:45 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 17:39:45 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:39:45 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 17:39:45 --> 0.0003 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 17:39:45 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:39:45 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:39:45 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:39:45 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:39:45 --> Total execution time: 0.0685
DEBUG - 2021-08-13 17:39:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:39:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:39:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:39:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:39:51 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 17:39:51 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 17:39:51 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:39:51 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 17:39:51 --> 0.0004 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 17:39:51 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:39:51 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:39:51 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:39:51 --> 0.0007 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:39:51 --> Total execution time: 0.0829
DEBUG - 2021-08-13 17:48:49 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:48:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:48:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:48:49 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:48:49 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 17:48:49 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:48:49 --> 0.0016 | SELECT * FROM roles
QUERY - 2021-08-13 17:48:49 --> 0.0006 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:48:49 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:48:49 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:48:49 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:48:49 --> Total execution time: 0.0870
DEBUG - 2021-08-13 17:48:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:48:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:48:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:48:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:48:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 17:48:54 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:48:54 --> 0.0003 | SELECT * FROM roles
QUERY - 2021-08-13 17:48:54 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:48:54 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:48:54 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:48:54 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:48:54 --> Total execution time: 0.0789
DEBUG - 2021-08-13 17:48:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 17:48:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 17:48:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 17:48:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 17:48:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 17:48:55 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:48:55 --> 0.0004 | SELECT * FROM roles
QUERY - 2021-08-13 17:48:55 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 17:48:55 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:48:55 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 17:48:55 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 17:48:55 --> Total execution time: 0.0741
DEBUG - 2021-08-13 18:07:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 18:07:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 18:07:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 18:07:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 18:07:37 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 18:07:37 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:07:37 --> 0.0003 | SELECT * FROM roles
QUERY - 2021-08-13 18:07:37 --> 0.0032 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 18:07:37 --> 0.0023 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:07:37 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:07:37 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 18:07:37 --> Total execution time: 0.1000
DEBUG - 2021-08-13 18:07:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 18:07:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 18:07:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 18:07:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 18:07:51 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 18:07:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 18:07:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 18:07:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 18:07:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 18:07:51 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 18:07:51 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:07:51 --> 0.0002 | SELECT * FROM roles
QUERY - 2021-08-13 18:07:51 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 18:07:51 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:07:51 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:07:51 --> 0.0002 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 18:07:51 --> Total execution time: 0.0809
DEBUG - 2021-08-13 18:08:57 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 18:08:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 18:08:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 18:08:57 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 18:08:57 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 18:08:57 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:08:57 --> 0.0004 | SELECT * FROM roles
QUERY - 2021-08-13 18:08:57 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 18:08:57 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:08:57 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:08:57 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 18:08:57 --> Total execution time: 0.0909
DEBUG - 2021-08-13 18:09:06 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 18:09:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 18:09:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 18:09:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 18:09:06 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 18:09:06 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:09:06 --> 0.0004 | SELECT * FROM `admins` WHERE `email` = 'sachanprashant223@gmail.com'  LIMIT 1
QUERY - 2021-08-13 18:09:06 --> 0.0003 | SELECT * FROM `admins` WHERE `username` = 'admin@gmail.com'  LIMIT 1
QUERY - 2021-08-13 18:09:06 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 18:09:06 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:09:06 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:09:06 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 18:09:06 --> 0.0004 | SELECT * FROM roles
QUERY - 2021-08-13 18:09:06 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 18:09:06 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:09:06 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:09:06 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 18:09:06 --> Total execution time: 0.0933
DEBUG - 2021-08-13 18:09:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 18:09:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 18:09:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 18:09:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 18:09:51 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 18:09:51 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:09:51 --> 0.0004 | SELECT * FROM `admins` WHERE `email` = 'sachanprashant223@gmail.com'  LIMIT 1
QUERY - 2021-08-13 18:09:51 --> 0.0003 | SELECT * FROM `admins` WHERE `username` = 'admin@gmail.com'  LIMIT 1
QUERY - 2021-08-13 18:09:51 --> 0.0005 | SELECT * FROM roles
QUERY - 2021-08-13 18:09:51 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 18:09:51 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:09:51 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:09:51 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 18:09:51 --> 0.0003 | SELECT * FROM roles
QUERY - 2021-08-13 18:09:51 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 18:09:51 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:09:51 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:09:51 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 18:09:51 --> Total execution time: 0.0770
DEBUG - 2021-08-13 18:10:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 18:10:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 18:10:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 18:10:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 18:10:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 18:10:58 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:10:58 --> 0.0003 | SELECT * FROM roles
QUERY - 2021-08-13 18:10:58 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 18:10:58 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:10:58 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:10:58 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 18:10:58 --> Total execution time: 0.0732
DEBUG - 2021-08-13 18:11:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 18:11:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 18:11:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 18:11:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 18:11:11 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 18:11:11 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:11:11 --> 0.0004 | SELECT * FROM `admins` WHERE `email` = 'sachanprashant223@gmail.com'  LIMIT 1
QUERY - 2021-08-13 18:11:11 --> 0.0003 | SELECT * FROM `admins` WHERE `username` = 'admin@gmail.com'  LIMIT 1
QUERY - 2021-08-13 18:11:11 --> 0.0003 | SELECT * FROM roles
QUERY - 2021-08-13 18:11:11 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 18:11:11 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:11:11 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:11:11 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 18:11:11 --> 0.0003 | SELECT * FROM roles
QUERY - 2021-08-13 18:11:11 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 18:11:11 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:11:11 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:11:11 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 18:11:11 --> Total execution time: 0.0951
DEBUG - 2021-08-13 18:13:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 18:13:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 18:13:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 18:13:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 18:13:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 18:13:58 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:13:58 --> 0.0004 | SELECT * FROM roles
QUERY - 2021-08-13 18:13:58 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 18:13:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:13:58 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:13:58 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 18:13:58 --> Total execution time: 0.0780
DEBUG - 2021-08-13 18:14:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 18:14:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 18:14:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 18:14:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 18:14:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 18:14:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:14:08 --> 0.0004 | SELECT * FROM `admins` WHERE `email` = 'sachanprashant223@gmail.com'  LIMIT 1
QUERY - 2021-08-13 18:14:08 --> 0.0003 | SELECT * FROM `admins` WHERE `username` = 'admin@gmail.com'  LIMIT 1
QUERY - 2021-08-13 18:14:08 --> 0.0002 | SELECT * FROM roles
QUERY - 2021-08-13 18:14:08 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 18:14:08 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:14:08 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:14:08 --> 0.0002 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 18:14:08 --> 0.0004 | SELECT * FROM roles
QUERY - 2021-08-13 18:14:08 --> 0.0007 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 18:14:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:14:08 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:14:08 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 18:14:08 --> Total execution time: 0.0858
DEBUG - 2021-08-13 18:16:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 18:16:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 18:16:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 18:16:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 18:16:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 18:16:35 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:16:35 --> 0.0003 | SELECT * FROM roles
QUERY - 2021-08-13 18:16:35 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 18:16:35 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:16:35 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:16:35 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 18:16:35 --> Total execution time: 0.0744
DEBUG - 2021-08-13 18:16:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 18:16:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 18:16:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 18:16:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 18:16:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 18:16:45 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:16:45 --> 0.0004 | SELECT * FROM `admins` WHERE `email` = 'sachanprashant223@gmail.com'  LIMIT 1
QUERY - 2021-08-13 18:16:45 --> 0.0003 | SELECT * FROM `admins` WHERE `username` = 'admin@gmail.com'  LIMIT 1
QUERY - 2021-08-13 18:16:45 --> 0.0002 | SELECT * FROM roles
QUERY - 2021-08-13 18:16:45 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 18:16:45 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:16:45 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:16:45 --> 0.0002 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 18:16:45 --> 0.0003 | SELECT * FROM roles
QUERY - 2021-08-13 18:16:45 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 18:16:45 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:16:45 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:16:45 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 18:16:45 --> Total execution time: 0.0756
DEBUG - 2021-08-13 18:17:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 18:17:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 18:17:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 18:17:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 18:17:03 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 18:17:03 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:17:03 --> 0.0004 | SELECT * FROM roles
QUERY - 2021-08-13 18:17:03 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 18:17:03 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:17:03 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:17:03 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 18:17:03 --> Total execution time: 0.0641
DEBUG - 2021-08-13 18:17:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 18:17:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 18:17:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 18:17:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 18:17:15 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 18:17:42 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 18:17:54 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:17:54 --> 27.0208 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-13 18:17:54 --> 0.0256 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 18:17:54 --> 2.5981 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-13 18:17:54 --> 0.0489 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-13 18:17:54 --> 2.562 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-13 18:17:54 --> 2.2889 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-13 18:17:54 --> 2.3 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-13 18:17:54 --> 0.0487 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-13 18:17:54 --> 2.4513 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-13 18:17:54 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 18:17:54 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:17:54 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:17:54 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 18:17:54 --> Total execution time: 39.4375
DEBUG - 2021-08-13 18:17:57 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 18:17:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 18:17:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 18:17:57 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 18:17:57 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 18:17:57 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 18:17:57 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:17:57 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 18:17:57 --> 0.0003 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 18:17:57 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 18:17:57 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:17:57 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:17:57 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 18:17:57 --> Total execution time: 0.0685
DEBUG - 2021-08-13 18:18:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 18:18:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 18:18:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 18:18:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 18:18:05 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 18:18:05 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:18:05 --> 0.0004 | SELECT * FROM roles
QUERY - 2021-08-13 18:18:05 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 18:18:05 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:18:05 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:18:05 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 18:18:05 --> Total execution time: 0.0770
DEBUG - 2021-08-13 18:18:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 18:18:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 18:18:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 18:18:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 18:18:34 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 18:18:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 18:18:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 18:18:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 18:18:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 18:18:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 18:18:34 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:18:34 --> 0.0003 | SELECT * FROM roles
QUERY - 2021-08-13 18:18:34 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 18:18:34 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:18:34 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:18:34 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 18:18:34 --> Total execution time: 0.0768
DEBUG - 2021-08-13 18:18:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 18:18:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 18:18:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 18:18:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 18:18:39 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 18:18:39 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 18:18:39 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:18:39 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 18:18:39 --> 0.0003 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 18:18:39 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 18:18:39 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:18:39 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:18:39 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 18:18:39 --> Total execution time: 0.0692
DEBUG - 2021-08-13 18:18:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 18:18:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 18:18:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 18:18:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 18:18:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 18:18:45 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:18:45 --> 0.0005 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 3
QUERY - 2021-08-13 18:18:45 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 18:18:45 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:18:45 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:18:45 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 18:18:45 --> Total execution time: 0.0702
DEBUG - 2021-08-13 18:18:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 18:18:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 18:18:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 18:18:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 18:18:50 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 18:18:50 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 18:18:50 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:18:50 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 18:18:50 --> 0.0003 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 18:18:50 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 18:18:50 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:18:50 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:18:50 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 18:18:50 --> Total execution time: 0.0827
DEBUG - 2021-08-13 18:44:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 18:44:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 18:44:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 18:44:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 18:44:16 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 18:44:16 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 18:44:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:44:16 --> 0.0006 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 18:44:16 --> 0.0008 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 18:44:16 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 18:44:16 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:44:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:44:16 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 18:44:16 --> Total execution time: 0.0895
DEBUG - 2021-08-13 18:44:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 18:44:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 18:44:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 18:44:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 18:44:23 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 18:44:23 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 18:44:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:44:23 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 18:44:23 --> 0.0003 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 18:44:23 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 18:44:23 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:44:23 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:44:23 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 18:44:23 --> Total execution time: 0.0733
DEBUG - 2021-08-13 18:44:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 18:44:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 18:44:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 18:44:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 18:44:25 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 18:44:25 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 18:44:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:44:25 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 18:44:25 --> 0.0003 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 18:44:25 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 18:44:25 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:44:25 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:44:25 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 18:44:25 --> Total execution time: 0.0762
DEBUG - 2021-08-13 18:44:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 18:44:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 18:44:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 18:44:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 18:44:26 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 18:44:26 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 18:44:26 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:44:26 --> 0.0005 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 18:44:26 --> 0.0004 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 18:44:26 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 18:44:26 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:44:26 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:44:26 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 18:44:26 --> Total execution time: 0.0761
DEBUG - 2021-08-13 18:44:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 18:44:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 18:44:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 18:44:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 18:44:27 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 18:44:27 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 18:44:27 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:44:27 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 18:44:27 --> 0.0004 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 18:44:27 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 18:44:27 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:44:27 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:44:27 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 18:44:27 --> Total execution time: 0.0883
DEBUG - 2021-08-13 18:44:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 18:44:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 18:44:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 18:44:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 18:44:56 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 18:44:56 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 18:44:56 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:44:56 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 18:44:56 --> 0.0003 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 18:44:56 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 18:44:56 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:44:56 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:44:56 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 18:44:56 --> Total execution time: 0.0736
DEBUG - 2021-08-13 18:45:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 18:45:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 18:45:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 18:45:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 18:45:00 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 18:45:00 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 18:45:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:45:00 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 18:45:00 --> 0.0005 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 18:45:00 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 18:45:00 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:45:00 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:45:00 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 18:45:00 --> Total execution time: 0.0854
DEBUG - 2021-08-13 18:45:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 18:45:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 18:45:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 18:45:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 18:45:01 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 18:45:01 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 18:45:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:45:01 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 18:45:01 --> 0.0003 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 18:45:01 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 18:45:01 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:45:01 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:45:01 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 18:45:01 --> Total execution time: 0.0785
DEBUG - 2021-08-13 18:45:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 18:45:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 18:45:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 18:45:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 18:45:02 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 18:45:02 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 18:45:02 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:45:02 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 18:45:02 --> 0.0003 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 18:45:02 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 18:45:02 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:45:02 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:45:02 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 18:45:02 --> Total execution time: 0.0758
DEBUG - 2021-08-13 18:45:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 18:45:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 18:45:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 18:45:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 18:45:28 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 18:45:28 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 18:45:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:45:28 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 18:45:28 --> 0.0004 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 18:45:28 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 18:45:28 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:45:28 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:45:28 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 18:45:28 --> Total execution time: 0.0772
DEBUG - 2021-08-13 18:46:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 18:46:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 18:46:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 18:46:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 18:46:37 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 18:46:37 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 18:46:37 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:46:37 --> 0.0003 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 18:46:37 --> 0.0004 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 18:46:37 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 18:46:37 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:46:37 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:46:37 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 18:46:37 --> Total execution time: 0.0814
DEBUG - 2021-08-13 18:47:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 18:47:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 18:47:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 18:47:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 18:47:24 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 18:47:24 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 18:47:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:47:24 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 18:47:24 --> 0.0003 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 18:47:24 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 18:47:24 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:47:24 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:47:24 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 18:47:24 --> Total execution time: 0.0800
DEBUG - 2021-08-13 18:48:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 18:48:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 18:48:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 18:48:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 18:48:33 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 18:48:33 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 18:48:33 --> 0.0008 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:48:33 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 18:48:33 --> 0.0004 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 18:48:33 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 18:48:33 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:48:33 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 18:48:33 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 18:48:33 --> Total execution time: 0.0792
DEBUG - 2021-08-13 19:04:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:04:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:04:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 19:04:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:04:14 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 19:04:14 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 19:04:14 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 19:04:14 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 19:04:14 --> 0.0003 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 19:04:14 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 19:04:14 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 19:04:14 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 19:04:14 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 19:04:14 --> Total execution time: 0.0821
DEBUG - 2021-08-13 19:11:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:11:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:11:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 19:11:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:11:51 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 19:11:51 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 19:11:51 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 19:11:51 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 19:11:51 --> 0.0004 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 19:11:51 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 19:11:51 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 19:11:51 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 19:11:51 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 19:11:51 --> Total execution time: 0.0908
DEBUG - 2021-08-13 19:11:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:11:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:11:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 19:11:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:11:56 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 19:11:56 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 19:11:56 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 19:11:56 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 19:11:56 --> 0.0004 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 19:11:56 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 19:11:56 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 19:11:56 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 19:11:56 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 19:11:56 --> Total execution time: 0.0921
DEBUG - 2021-08-13 19:12:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:12:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:12:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 19:12:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:12:31 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 19:12:31 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 19:12:31 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 19:12:31 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 19:12:31 --> 0.0003 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 19:12:31 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 19:12:31 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 19:12:31 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 19:12:31 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 19:12:31 --> Total execution time: 0.0796
DEBUG - 2021-08-13 19:12:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:12:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:12:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 19:12:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:12:33 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 19:12:33 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 19:12:33 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 19:12:33 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 19:12:33 --> 0.0003 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 19:12:33 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 19:12:33 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 19:12:33 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 19:12:33 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 19:12:33 --> Total execution time: 0.0850
DEBUG - 2021-08-13 19:12:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:12:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:12:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 19:12:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:12:53 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 19:12:53 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 19:12:53 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 19:12:53 --> 0.0003 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 19:12:53 --> 0.0003 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 19:12:53 --> 0.0021 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 19:12:53 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 19:12:53 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 19:12:53 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 19:12:53 --> Total execution time: 0.0738
DEBUG - 2021-08-13 19:13:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:13:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:13:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 19:13:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:13:37 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 19:13:37 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 19:13:37 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 19:13:37 --> 0.0005 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 19:13:37 --> 0.0004 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 19:13:37 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 19:13:37 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 19:13:37 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 19:13:37 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 19:13:37 --> Total execution time: 0.1005
DEBUG - 2021-08-13 19:13:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:13:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:13:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 19:13:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:13:39 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 19:13:39 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 19:13:39 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 19:13:39 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 19:13:39 --> 0.0003 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 19:13:39 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 19:13:39 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 19:13:39 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 19:13:39 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 19:13:39 --> Total execution time: 0.0752
DEBUG - 2021-08-13 19:37:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:37:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:37:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 19:37:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:37:54 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 19:37:54 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 19:37:54 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 19:37:54 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 19:37:54 --> 0.0003 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 19:37:54 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 19:37:54 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 19:37:54 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 19:37:54 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 19:37:54 --> Total execution time: 0.0856
DEBUG - 2021-08-13 19:38:57 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:38:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:38:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 19:38:57 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:38:57 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 19:38:57 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-13 19:38:57 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 19:38:57 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-13 19:38:57 --> 0.0003 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-13 19:38:57 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 19:38:57 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 19:38:57 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-13 19:38:57 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 19:38:57 --> Total execution time: 0.0748
DEBUG - 2021-08-13 19:39:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:39:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:39:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 19:39:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:39:04 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 19:39:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:39:04 --> No URI present. Default controller set.
DEBUG - 2021-08-13 19:39:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:39:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 19:39:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:39:04 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 19:39:04 --> Form_validation class already loaded. Second attempt ignored.
QUERY - 2021-08-13 19:39:04 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 19:39:04 --> Total execution time: 0.0641
DEBUG - 2021-08-13 19:39:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:39:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:39:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:39:11 --> No URI present. Default controller set.
DEBUG - 2021-08-13 19:39:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:39:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 19:39:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:39:11 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 19:39:11 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:39:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:39:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:39:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 19:39:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:39:11 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 19:39:17 --> 2.9579 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-13 19:39:17 --> 0.8873 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-13 19:39:17 --> 2.4236 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-13 19:39:17 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 19:39:17 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:39:17 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:39:17 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:39:17 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 19:39:17 --> Total execution time: 6.3530
DEBUG - 2021-08-13 19:39:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:39:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:39:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:39:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:39:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 19:39:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:39:18 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 19:39:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:39:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:39:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:39:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:39:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:39:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 19:39:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:39:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-13 19:39:20 --> 2.8738 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-13 19:39:20 --> Total execution time: 2.9735
DEBUG - 2021-08-13 19:39:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:39:21 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 19:39:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:39:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:39:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-13 19:39:50 --> 29.5339 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
DEBUG - 2021-08-13 19:39:50 --> Total execution time: 32.3797
DEBUG - 2021-08-13 19:39:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:39:50 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 19:39:50 --> 0.1791 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `campaign_name` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-13 19:39:50 --> Total execution time: 32.5363
DEBUG - 2021-08-13 19:39:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:39:50 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 19:39:50 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:39:50 --> 0.0006 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-13 19:39:50 --> 0.0006 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 19:39:50 --> 0.0008 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:39:50 --> 0.0008 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:39:50 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 19:39:50 --> Total execution time: 22.2975
DEBUG - 2021-08-13 19:40:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:40:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:40:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 19:40:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:40:11 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 19:40:11 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:40:11 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-13 19:40:11 --> Total execution time: 0.0889
DEBUG - 2021-08-13 19:40:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:40:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:40:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 19:40:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:40:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 19:40:27 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:40:27 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-13 19:40:27 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 19:40:27 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:40:27 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:40:27 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 19:40:27 --> Total execution time: 0.0690
DEBUG - 2021-08-13 19:40:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:40:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:40:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 19:40:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:40:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 19:40:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:40:31 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-13 19:40:31 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 19:40:31 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:40:31 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:40:31 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 19:40:31 --> Total execution time: 0.0752
DEBUG - 2021-08-13 19:40:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:40:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:40:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 19:40:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:40:51 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 19:40:51 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:40:51 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-13 19:40:51 --> Total execution time: 0.0870
DEBUG - 2021-08-13 19:41:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:41:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:41:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 19:41:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:41:11 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 19:41:11 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:41:11 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-13 19:41:11 --> Total execution time: 0.0967
DEBUG - 2021-08-13 19:41:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:41:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:41:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 19:41:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:41:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 19:41:31 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:41:31 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-13 19:41:31 --> Total execution time: 0.0773
DEBUG - 2021-08-13 19:41:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:41:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:41:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 19:41:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:41:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 19:41:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:41:46 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-13 19:41:46 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 19:41:46 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:41:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:41:46 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 19:41:46 --> Total execution time: 0.0677
DEBUG - 2021-08-13 19:41:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:41:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:41:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 19:41:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:41:50 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 19:41:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:41:50 --> No URI present. Default controller set.
DEBUG - 2021-08-13 19:41:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:41:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 19:41:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:41:50 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 19:41:50 --> Form_validation class already loaded. Second attempt ignored.
QUERY - 2021-08-13 19:41:50 --> 0.0006 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 19:41:50 --> Total execution time: 0.0665
DEBUG - 2021-08-13 19:41:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:41:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:42:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:42:00 --> No URI present. Default controller set.
DEBUG - 2021-08-13 19:42:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:42:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 19:42:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:42:00 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 19:42:00 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:42:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:42:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:42:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 19:42:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:42:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 19:42:07 --> 2.7893 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-13 19:42:07 --> 0.9002 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-13 19:42:07 --> 2.4764 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-13 19:42:07 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 19:42:07 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:42:07 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:42:07 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:42:07 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 19:42:07 --> Total execution time: 6.2500
DEBUG - 2021-08-13 19:42:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:42:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:42:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:42:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:42:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 19:42:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:42:07 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 19:42:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:42:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:42:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:42:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:42:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 19:42:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:42:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:42:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-13 19:42:10 --> 3.0062 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-13 19:42:10 --> Total execution time: 3.1010
DEBUG - 2021-08-13 19:42:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:42:10 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-13 19:42:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:42:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:42:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-13 19:42:39 --> 29.288 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
DEBUG - 2021-08-13 19:42:39 --> Total execution time: 32.2817
DEBUG - 2021-08-13 19:42:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:42:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 19:42:39 --> 0.0564 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `campaign_name` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-13 19:42:39 --> Total execution time: 32.3268
DEBUG - 2021-08-13 19:42:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:42:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 19:42:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:42:40 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-13 19:42:40 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 19:42:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:42:40 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:42:40 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 19:42:40 --> Total execution time: 27.7887
DEBUG - 2021-08-13 19:43:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:43:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:43:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 19:43:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:43:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 19:43:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:43:00 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-13 19:43:00 --> Total execution time: 0.0876
DEBUG - 2021-08-13 19:43:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:43:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:43:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 19:43:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:43:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 19:43:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:43:08 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-13 19:43:08 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 19:43:08 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:43:08 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:43:08 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 19:43:08 --> Total execution time: 0.0753
DEBUG - 2021-08-13 19:43:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:43:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:43:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 19:43:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:43:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 19:43:29 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:43:29 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-13 19:43:29 --> Total execution time: 0.0638
DEBUG - 2021-08-13 19:43:49 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:43:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:43:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 19:43:49 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:43:49 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 19:43:49 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:43:49 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-13 19:43:49 --> Total execution time: 0.0713
DEBUG - 2021-08-13 19:44:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:44:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:44:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 19:44:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:44:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 19:44:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:44:09 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-13 19:44:09 --> Total execution time: 0.0721
DEBUG - 2021-08-13 19:44:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:44:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:44:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 19:44:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:44:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 19:44:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:44:29 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-13 19:44:29 --> Total execution time: 0.0768
DEBUG - 2021-08-13 19:44:49 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:44:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:44:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 19:44:49 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:44:49 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 19:44:49 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:44:49 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-13 19:44:49 --> Total execution time: 0.0816
DEBUG - 2021-08-13 19:45:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:45:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:45:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 19:45:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:45:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 19:45:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:45:09 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-13 19:45:09 --> Total execution time: 0.0814
DEBUG - 2021-08-13 19:45:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:45:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:45:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 19:45:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:45:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 19:45:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:45:09 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-13 19:45:09 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 19:45:09 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:45:09 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:45:09 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 19:45:09 --> Total execution time: 0.0722
DEBUG - 2021-08-13 19:45:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:45:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:45:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 19:45:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:45:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 19:45:10 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:45:10 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-13 19:45:10 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 19:45:10 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:45:10 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:45:10 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 19:45:10 --> Total execution time: 0.0771
DEBUG - 2021-08-13 19:45:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:45:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:45:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 19:45:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:45:11 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 19:45:11 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:45:11 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-13 19:45:11 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 19:45:11 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:45:11 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:45:11 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 19:45:11 --> Total execution time: 0.0696
DEBUG - 2021-08-13 19:45:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:45:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:45:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 19:45:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:45:12 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 19:45:12 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:45:12 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-13 19:45:12 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 19:45:12 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:45:12 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:45:12 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 19:45:12 --> Total execution time: 0.0698
DEBUG - 2021-08-13 19:45:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:45:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:45:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 19:45:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:45:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 19:45:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:45:13 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-13 19:45:13 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 19:45:13 --> 0.0009 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:45:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:45:13 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 19:45:13 --> Total execution time: 0.0755
DEBUG - 2021-08-13 19:45:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:45:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:45:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 19:45:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:45:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 19:45:34 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:45:34 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-13 19:45:34 --> Total execution time: 0.0681
DEBUG - 2021-08-13 19:45:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:45:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:45:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 19:45:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:45:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 19:45:54 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:45:54 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-13 19:45:54 --> Total execution time: 0.0751
DEBUG - 2021-08-13 19:46:06 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:46:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:46:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 19:46:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:46:06 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 19:46:06 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:46:06 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-13 19:46:06 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 19:46:06 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:46:06 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:46:06 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 19:46:06 --> Total execution time: 0.0676
DEBUG - 2021-08-13 19:46:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:46:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:46:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 19:46:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:46:07 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 19:46:08 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:46:08 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-13 19:46:08 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 19:46:08 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:46:08 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:46:08 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 19:46:08 --> Total execution time: 0.0815
DEBUG - 2021-08-13 19:46:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:46:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:46:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 19:46:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:46:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 19:46:28 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:46:28 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-13 19:46:28 --> Total execution time: 0.0690
DEBUG - 2021-08-13 19:46:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:46:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:46:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 19:46:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:46:48 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 19:46:48 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:46:48 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-13 19:46:48 --> Total execution time: 0.0940
DEBUG - 2021-08-13 19:46:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:46:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:46:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 19:46:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:46:51 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 19:46:51 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:46:51 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-13 19:46:51 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 19:46:51 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:46:51 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:46:51 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 19:46:51 --> Total execution time: 0.0819
DEBUG - 2021-08-13 19:46:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:46:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:46:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 19:46:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:46:52 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 19:46:52 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:46:52 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-13 19:46:52 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 19:46:52 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:46:52 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:46:52 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 19:46:52 --> Total execution time: 0.0839
DEBUG - 2021-08-13 19:47:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:47:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:47:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 19:47:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:47:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 19:47:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:47:13 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-13 19:47:13 --> Total execution time: 0.0747
DEBUG - 2021-08-13 19:47:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:47:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:47:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 19:47:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:47:33 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 19:47:33 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:47:33 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-13 19:47:33 --> Total execution time: 0.0790
DEBUG - 2021-08-13 19:47:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:47:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:47:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 19:47:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:47:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 19:47:53 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:47:53 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-13 19:47:53 --> Total execution time: 0.0890
DEBUG - 2021-08-13 19:48:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:48:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:48:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 19:48:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:48:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 19:48:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:48:00 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-13 19:48:00 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 19:48:00 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:48:00 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:48:00 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 19:48:00 --> Total execution time: 0.0808
DEBUG - 2021-08-13 19:48:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:48:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:48:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 19:48:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:48:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 19:48:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:48:01 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-13 19:48:01 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-13 19:48:01 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:48:01 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:48:01 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-13 19:48:01 --> Total execution time: 0.0726
DEBUG - 2021-08-13 19:48:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:48:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:48:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 19:48:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:48:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 19:48:22 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:48:22 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-13 19:48:22 --> Total execution time: 0.0592
DEBUG - 2021-08-13 19:48:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:48:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:48:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 19:48:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:48:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 19:48:42 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:48:42 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-13 19:48:42 --> Total execution time: 0.0719
DEBUG - 2021-08-13 19:49:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:49:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:49:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 19:49:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:49:02 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 19:49:02 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:49:02 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-13 19:49:02 --> Total execution time: 0.0820
DEBUG - 2021-08-13 19:49:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:49:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:49:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 19:49:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:49:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 19:49:22 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:49:22 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-13 19:49:22 --> Total execution time: 0.0861
DEBUG - 2021-08-13 19:49:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-13 19:49:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-13 19:49:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-13 19:49:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-13 19:49:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-13 19:49:42 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-13 19:49:42 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-13 19:49:42 --> Total execution time: 0.0762
