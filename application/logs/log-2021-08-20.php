<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2021-08-20 13:03:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-20 13:03:16 --> No URI present. Default controller set.
DEBUG - 2021-08-20 13:03:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-20 13:03:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-20 13:03:17 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-20 13:03:17 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-20 13:03:17 --> Form_validation class already loaded. Second attempt ignored.
QUERY - 2021-08-20 13:03:18 --> 0.2639 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-20 13:03:18 --> Total execution time: 2.0942
DEBUG - 2021-08-20 13:03:19 --> UTF-8 Support Enabled
DEBUG - 2021-08-20 13:03:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-20 13:03:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-20 13:03:21 --> No URI present. Default controller set.
DEBUG - 2021-08-20 13:03:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-20 13:03:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-20 13:03:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-20 13:03:21 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-20 13:03:21 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2021-08-20 13:03:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-20 13:03:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-20 13:03:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-20 13:03:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-20 13:03:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-20 13:03:29 --> 3.1217 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-20 13:03:29 --> 1.3554 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-20 13:03:29 --> 2.6322 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-20 13:03:29 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-20 13:03:29 --> 0.0556 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-20 13:03:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-20 13:03:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-20 13:03:29 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-20 13:03:29 --> Total execution time: 7.4984
DEBUG - 2021-08-20 13:03:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-20 13:03:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-20 13:03:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-20 13:03:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-20 13:03:29 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-20 13:03:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-20 13:03:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-20 13:03:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-20 13:03:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-20 13:03:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-20 13:03:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-20 13:03:33 --> 3.3048 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-20 13:03:33 --> Total execution time: 3.3915
DEBUG - 2021-08-20 13:03:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-20 13:03:33 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-20 13:03:33 --> 0.2489 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `campaign_name` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-20 13:03:33 --> Total execution time: 3.5687
DEBUG - 2021-08-20 13:03:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-20 13:03:33 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-20 13:04:03 --> 29.8846 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
DEBUG - 2021-08-20 13:04:03 --> Total execution time: 33.4854
DEBUG - 2021-08-20 13:04:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-20 13:04:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-20 13:04:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-20 13:04:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-20 13:04:04 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-20 13:04:04 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-20 13:04:05 --> 0.0344 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-20 13:04:05 --> 0.0005 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-20 13:04:05 --> 0.0004 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-20 13:04:05 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-20 13:04:05 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-20 13:04:05 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-20 13:04:05 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-20 13:04:05 --> Total execution time: 0.3544
DEBUG - 2021-08-20 13:04:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-20 13:04:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-20 13:04:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-20 13:04:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-20 13:04:07 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-20 13:04:37 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-20 13:04:51 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-20 13:04:51 --> 30.1085 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-20 13:04:51 --> 0.0596 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-20 13:04:51 --> 3.0853 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-20 13:04:51 --> 0.0592 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-20 13:04:51 --> 3.0625 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-20 13:04:51 --> 2.2887 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-20 13:04:51 --> 2.289 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-20 13:04:51 --> 0.0471 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-20 13:04:51 --> 2.7975 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-20 13:04:51 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-20 13:04:51 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-20 13:04:51 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-20 13:04:51 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-20 13:04:51 --> Total execution time: 44.1844
DEBUG - 2021-08-20 13:23:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-20 13:23:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-20 13:23:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-20 13:23:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-20 13:23:18 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-20 13:23:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-20 13:23:43 --> No URI present. Default controller set.
DEBUG - 2021-08-20 13:23:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-20 13:23:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-20 13:23:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-20 13:23:43 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-20 13:23:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-20 13:23:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-20 13:23:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-20 13:23:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-20 13:23:43 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-20 13:23:52 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-20 13:23:54 --> 5.0453 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-20 13:23:54 --> 1.4699 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-20 13:23:54 --> 5.1856 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-20 13:23:54 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-20 13:23:54 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-20 13:23:54 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-20 13:23:54 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-20 13:23:54 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-20 13:23:54 --> Total execution time: 11.7743
DEBUG - 2021-08-20 13:23:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-20 13:23:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-20 13:23:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-20 13:23:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-20 13:23:55 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-20 13:23:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-20 13:23:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-20 13:23:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-20 13:23:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-20 13:23:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-20 13:23:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-20 13:24:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-20 13:24:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-20 13:24:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-20 13:24:02 --> 6.5311 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-20 13:24:02 --> Total execution time: 6.6020
DEBUG - 2021-08-20 13:24:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-20 13:24:02 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-20 13:24:21 --> 0.0008 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-20 13:24:21 --> 34.3314 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-20 13:24:21 --> 0.048 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-20 13:24:21 --> 6.495 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-20 13:24:21 --> 0.2187 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-20 13:24:21 --> 6.3866 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-20 13:24:21 --> 5.3678 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-20 13:24:21 --> 5.1996 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-20 13:24:21 --> 0.0574 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-20 13:24:21 --> 5.0666 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-20 13:24:21 --> 0.0008 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-20 13:24:21 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-20 13:24:21 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-20 13:24:21 --> 0.0006 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-20 13:24:21 --> Total execution time: 63.2754
QUERY - 2021-08-20 13:24:41 --> 38.8898 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
DEBUG - 2021-08-20 13:24:41 --> Total execution time: 45.4379
DEBUG - 2021-08-20 13:24:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-20 13:24:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-20 13:24:41 --> 0.0918 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `campaign_name` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-20 13:24:41 --> Total execution time: 45.5731
DEBUG - 2021-08-20 13:24:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-20 13:24:41 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-20 13:24:41 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-20 13:24:41 --> 0.0008 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-20 13:24:41 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-20 13:24:41 --> 0.0004 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-20 13:24:41 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-20 13:24:41 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-20 13:24:41 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-20 13:24:41 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-20 13:24:41 --> Total execution time: 40.7527
DEBUG - 2021-08-20 13:24:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-20 13:24:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-20 13:24:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-20 13:24:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-20 13:24:44 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-20 13:25:20 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2021-08-20 13:25:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-20 13:25:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-20 13:25:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-20 13:25:52 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-20 13:25:52 --> 36.8029 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-20 13:25:52 --> 0.0477 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-20 13:25:52 --> 5.9758 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-20 13:25:52 --> 0.1034 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-20 13:25:52 --> 8.23 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-20 13:25:52 --> 7.3129 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-20 13:25:52 --> 7.3427 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-20 13:25:52 --> 0.0478 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-20 13:25:52 --> 2.7977 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-20 13:25:52 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-20 13:25:52 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-20 13:25:52 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-20 13:25:52 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-20 13:25:52 --> Total execution time: 68.7507
DEBUG - 2021-08-20 13:25:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-20 13:25:52 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-20 13:26:20 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-20 13:26:35 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-20 13:26:35 --> 27.8615 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-20 13:26:35 --> 0.0264 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-20 13:26:35 --> 2.5309 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-20 13:26:35 --> 0.0578 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-20 13:26:35 --> 3.1408 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-20 13:26:35 --> 2.7558 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-20 13:26:35 --> 3.4563 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-20 13:26:35 --> 0.0477 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-20 13:26:35 --> 2.9855 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-20 13:26:35 --> 0.0014 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-20 13:26:35 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-20 13:26:35 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-20 13:26:35 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-20 13:26:35 --> Total execution time: 43.1735
DEBUG - 2021-08-20 15:30:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-20 15:30:54 --> No URI present. Default controller set.
DEBUG - 2021-08-20 15:30:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-20 15:30:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-20 15:30:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-20 15:30:54 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-20 15:30:54 --> Form_validation class already loaded. Second attempt ignored.
QUERY - 2021-08-20 15:30:54 --> 0.0019 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-20 15:30:54 --> Total execution time: 0.0976
