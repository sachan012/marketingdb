<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2021-08-10 06:40:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 06:40:45 --> No URI present. Default controller set.
DEBUG - 2021-08-10 06:40:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 06:40:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 06:40:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 06:40:46 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-10 06:40:47 --> Form_validation class already loaded. Second attempt ignored.
QUERY - 2021-08-10 06:40:48 --> 0.7171 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-10 06:40:48 --> Total execution time: 3.3382
DEBUG - 2021-08-10 06:40:49 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 06:40:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 06:40:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 06:40:50 --> No URI present. Default controller set.
DEBUG - 2021-08-10 06:40:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 06:40:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 06:40:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 06:40:50 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-10 06:40:50 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 06:40:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 06:40:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 06:40:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 06:40:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 06:40:51 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 06:41:01 --> 3.7889 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-10 06:41:01 --> 1.5195 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-10 06:41:01 --> 4.2677 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-10 06:41:01 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-10 06:41:01 --> 0.0691 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 06:41:01 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 06:41:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 06:41:01 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-10 06:41:01 --> Total execution time: 10.0485
DEBUG - 2021-08-10 06:41:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 06:41:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 06:41:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 06:41:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 06:41:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 06:41:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 06:41:02 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-10 06:41:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 06:41:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 06:41:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 06:41:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 06:41:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 06:41:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 06:41:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 06:41:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-10 06:41:08 --> 5.3455 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-10 06:41:08 --> Total execution time: 5.4570
DEBUG - 2021-08-10 06:41:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 06:41:08 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-10 06:41:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 06:41:37 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 06:41:38 --> 0.1137 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `campaign_name` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-10 06:41:38 --> Total execution time: 35.3543
DEBUG - 2021-08-10 06:42:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 06:42:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 06:42:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 06:42:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 06:42:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 06:42:34 --> 4.9935 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-10 06:42:34 --> 2.0163 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-10 06:42:34 --> 6.1454 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-10 06:42:34 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-10 06:42:34 --> 0.0044 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 06:42:34 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 06:42:34 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 06:42:34 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-10 06:42:34 --> Total execution time: 13.2358
DEBUG - 2021-08-10 06:42:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 06:42:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 06:42:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 06:42:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 06:42:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 06:42:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 06:42:35 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-10 06:42:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 06:42:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 06:42:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 06:42:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 06:42:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 06:42:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 06:42:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 06:42:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-10 06:42:40 --> 5.0768 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-10 06:42:40 --> Total execution time: 5.1805
DEBUG - 2021-08-10 06:42:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 06:42:40 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-10 06:43:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 06:43:11 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 06:43:11 --> 0.0567 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `campaign_name` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-10 06:43:11 --> Total execution time: 36.6330
DEBUG - 2021-08-10 06:43:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 06:43:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 06:43:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 06:43:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 06:43:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 06:44:03 --> 3.2041 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-10 06:44:03 --> 1.1512 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-10 06:44:03 --> 2.7137 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-10 06:44:03 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-10 06:44:03 --> 0.0047 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 06:44:03 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 06:44:03 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 06:44:03 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-10 06:44:03 --> Total execution time: 7.1552
DEBUG - 2021-08-10 06:44:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 06:44:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 06:44:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 06:44:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 06:44:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 06:44:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 06:44:04 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-10 06:44:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 06:44:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 06:44:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 06:44:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 06:44:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 06:44:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 06:44:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 06:44:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-10 06:44:08 --> 3.8326 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-10 06:44:08 --> Total execution time: 3.9313
DEBUG - 2021-08-10 06:44:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 06:44:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 06:44:36 --> 28.5471 | select count(id) from gpi_data
DEBUG - 2021-08-10 06:44:36 --> Total execution time: 32.3595
DEBUG - 2021-08-10 06:44:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 06:44:36 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 06:44:36 --> 0.1368 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `campaign_name` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-10 06:44:36 --> Total execution time: 32.4622
DEBUG - 2021-08-10 06:45:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 06:45:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 06:45:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 06:45:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 06:45:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 06:45:30 --> 2.991 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-10 06:45:30 --> 1.9191 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-10 06:45:30 --> 3.3402 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-10 06:45:30 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-10 06:45:30 --> 0.0101 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 06:45:30 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 06:45:30 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 06:45:30 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-10 06:45:30 --> Total execution time: 8.3613
DEBUG - 2021-08-10 06:45:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 06:45:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 06:45:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 06:45:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 06:45:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 06:45:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 06:45:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 06:45:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 06:45:31 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-10 06:45:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 06:45:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 06:45:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 06:45:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 06:45:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 06:45:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-10 06:45:35 --> 4.3891 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-10 06:45:35 --> Total execution time: 4.4798
DEBUG - 2021-08-10 06:45:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 06:45:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 06:46:03 --> 27.8311 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
DEBUG - 2021-08-10 06:46:03 --> Total execution time: 32.1214
DEBUG - 2021-08-10 06:46:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 06:46:03 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 06:46:03 --> 0.1669 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `campaign_name` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-10 06:46:03 --> Total execution time: 32.2974
DEBUG - 2021-08-10 17:56:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 17:56:13 --> No URI present. Default controller set.
DEBUG - 2021-08-10 17:56:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 17:56:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 17:56:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 17:56:14 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-10 17:56:14 --> Form_validation class already loaded. Second attempt ignored.
QUERY - 2021-08-10 17:56:14 --> 0.0033 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-10 17:56:14 --> Total execution time: 0.1584
DEBUG - 2021-08-10 17:56:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 17:56:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:03:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:03:59 --> No URI present. Default controller set.
DEBUG - 2021-08-10 18:03:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:03:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:03:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:03:59 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-10 18:03:59 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:03:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:03:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:03:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:03:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:03:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:04:06 --> 2.7279 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-10 18:04:06 --> 1.3116 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-10 18:04:06 --> 2.9689 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-10 18:04:06 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-10 18:04:06 --> 0.0051 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:04:06 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:04:06 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:04:06 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-10 18:04:06 --> Total execution time: 7.1018
DEBUG - 2021-08-10 18:04:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:04:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:04:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:04:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:04:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:04:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:04:07 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-10 18:04:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:04:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:04:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:04:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:04:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:04:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:04:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:04:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-10 18:04:11 --> 3.6069 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-10 18:04:11 --> Total execution time: 3.6964
DEBUG - 2021-08-10 18:04:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:04:11 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:04:41 --> 30.1132 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
DEBUG - 2021-08-10 18:04:41 --> Total execution time: 33.7192
DEBUG - 2021-08-10 18:04:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:04:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:04:41 --> 0.0602 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `campaign_name` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-10 18:04:41 --> Total execution time: 33.8063
DEBUG - 2021-08-10 18:06:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:06:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:06:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:06:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:06:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:07:10 --> 0.0228 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:07:10 --> 2.6453 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-10 18:07:10 --> 0.0494 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-10 18:07:10 --> 2.4725 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-10 18:07:10 --> 2.411 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-10 18:07:10 --> 2.5222 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-10 18:07:10 --> 0.0493 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-10 18:07:10 --> 3.2065 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-10 18:07:10 --> 0.0704 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-10 18:07:10 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-10 18:07:10 --> 0.0119 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:07:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:07:10 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-10 18:07:10 --> Total execution time: 13.5521
DEBUG - 2021-08-10 18:07:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:07:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:07:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:07:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:07:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:07:25 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:07:25 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:07:25 --> Total execution time: 0.0801
DEBUG - 2021-08-10 18:07:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:07:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:07:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:07:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:07:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:07:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:07:40 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:07:40 --> Total execution time: 0.0699
DEBUG - 2021-08-10 18:07:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:07:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:07:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:07:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:07:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:07:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:07:46 --> 0.1307 | INSERT INTO `csvexportlog` (`export_status`, `filter_col`, `created_datetime`) VALUES (0, '{\"circle\":\"KERALA\"}', '2021-08-10 18:07:45')
DEBUG - 2021-08-10 18:07:46 --> Total execution time: 0.1984
DEBUG - 2021-08-10 18:07:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:07:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:07:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:07:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:07:46 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-10 18:07:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:07:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:07:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-10 18:07:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:07:59 --> 2.787 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-10 18:07:59 --> 0.0492 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-10 18:07:59 --> 2.3394 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-10 18:07:59 --> 2.3777 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-10 18:07:59 --> 2.3 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-10 18:07:59 --> 0.0494 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-10 18:07:59 --> 3.3171 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-10 18:07:59 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-10 18:07:59 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-10 18:07:59 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:07:59 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:07:59 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-10 18:07:59 --> Total execution time: 13.2981
DEBUG - 2021-08-10 18:07:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:07:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:07:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:07:59 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:07:59 --> Total execution time: 4.0136
DEBUG - 2021-08-10 18:08:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:08:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:08:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:08:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:08:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:08:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:08:15 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:08:15 --> Total execution time: 0.0781
DEBUG - 2021-08-10 18:08:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:08:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:08:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:08:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:08:30 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:08:30 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:08:30 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:08:30 --> Total execution time: 0.0686
DEBUG - 2021-08-10 18:08:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:08:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:08:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:08:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:08:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:08:45 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:08:45 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:08:45 --> Total execution time: 0.0841
DEBUG - 2021-08-10 18:09:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:09:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:09:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:09:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:09:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:09:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:09:00 --> 0.0006 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:09:00 --> Total execution time: 0.0885
DEBUG - 2021-08-10 18:09:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:09:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:09:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:09:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:09:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:09:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:09:15 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:09:15 --> Total execution time: 0.0879
DEBUG - 2021-08-10 18:09:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:09:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:09:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:09:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:09:30 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:09:30 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:09:30 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:09:30 --> Total execution time: 0.0632
DEBUG - 2021-08-10 18:09:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:09:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:09:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:09:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:09:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:09:45 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:09:45 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:09:45 --> Total execution time: 0.1215
DEBUG - 2021-08-10 18:09:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:09:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:09:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:09:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:09:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:09:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:09:59 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:09:59 --> Total execution time: 0.0614
DEBUG - 2021-08-10 18:10:06 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:10:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:10:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:10:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:10:06 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:10:07 --> 0.0015 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:10:07 --> 0.0696 | INSERT INTO `csvexportlog` (`export_status`, `filter_col`, `created_datetime`) VALUES (0, 'null', '2021-08-10 18:10:06')
DEBUG - 2021-08-10 18:10:07 --> Total execution time: 0.1435
DEBUG - 2021-08-10 18:10:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:10:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:10:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:10:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:10:07 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-10 18:10:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:10:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:10:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:10:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:10:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:10:14 --> 0.0278 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:10:14 --> 0.0341 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:10:14 --> Total execution time: 0.1377
QUERY - 2021-08-10 18:10:22 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:10:22 --> 3.3145 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-10 18:10:22 --> 0.0419 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-10 18:10:22 --> 2.6587 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-10 18:10:22 --> 2.3442 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-10 18:10:22 --> 2.7552 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-10 18:10:22 --> 0.0416 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-10 18:10:22 --> 3.6586 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-10 18:10:22 --> 0.0129 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-10 18:10:22 --> 0.0085 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-10 18:10:22 --> 0.0093 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:10:22 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:10:22 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-10 18:10:22 --> Total execution time: 14.9302
DEBUG - 2021-08-10 18:10:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:10:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:10:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:10:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:10:37 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:10:37 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:10:37 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:10:37 --> Total execution time: 0.0661
DEBUG - 2021-08-10 18:10:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:10:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:10:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:10:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:10:52 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:10:52 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:10:52 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:10:52 --> Total execution time: 0.0796
DEBUG - 2021-08-10 18:11:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:11:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:11:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:11:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:11:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:11:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:11:08 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:11:08 --> Total execution time: 0.0864
DEBUG - 2021-08-10 18:11:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:11:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:11:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:11:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:11:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:11:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:11:23 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:11:23 --> Total execution time: 0.0911
DEBUG - 2021-08-10 18:11:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:11:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:11:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:11:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:11:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:11:38 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:11:38 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:11:38 --> Total execution time: 0.0766
DEBUG - 2021-08-10 18:11:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:11:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:11:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:11:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:11:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:11:53 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:11:53 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:11:53 --> Total execution time: 0.0774
DEBUG - 2021-08-10 18:12:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:12:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:12:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:12:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:12:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:12:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:12:08 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:12:08 --> Total execution time: 0.0874
DEBUG - 2021-08-10 18:12:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:12:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:12:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:12:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:12:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:12:23 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:12:23 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:12:23 --> Total execution time: 0.0789
DEBUG - 2021-08-10 18:12:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:12:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:12:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:12:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:12:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:12:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:12:38 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:12:38 --> Total execution time: 0.0747
DEBUG - 2021-08-10 18:12:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:12:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:12:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:12:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:12:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:12:53 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:12:53 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:12:53 --> Total execution time: 0.0794
DEBUG - 2021-08-10 18:13:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:13:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:13:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:13:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:13:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:13:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:13:08 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:13:08 --> Total execution time: 0.0722
DEBUG - 2021-08-10 18:13:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:13:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:13:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:13:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:13:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:13:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:13:23 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:13:23 --> Total execution time: 0.0802
DEBUG - 2021-08-10 18:13:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:13:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:13:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:13:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:13:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:13:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:13:38 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:13:38 --> Total execution time: 0.0728
DEBUG - 2021-08-10 18:13:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:13:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:13:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:13:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:13:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:13:53 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:13:53 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:13:53 --> Total execution time: 0.0621
DEBUG - 2021-08-10 18:14:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:14:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:14:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:14:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:14:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:14:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:14:08 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:14:08 --> Total execution time: 0.0649
DEBUG - 2021-08-10 18:14:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:14:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:14:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:14:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:14:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:14:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:14:23 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:14:23 --> Total execution time: 0.0642
DEBUG - 2021-08-10 18:14:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:14:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:14:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:14:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:14:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:14:38 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:14:38 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:14:38 --> Total execution time: 0.0688
DEBUG - 2021-08-10 18:14:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:14:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:14:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:14:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:14:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:14:53 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:14:53 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:14:53 --> Total execution time: 0.0724
DEBUG - 2021-08-10 18:15:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:15:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:15:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:15:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:15:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:15:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:15:08 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:15:08 --> Total execution time: 0.0783
DEBUG - 2021-08-10 18:15:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:15:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:15:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:15:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:15:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:15:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:15:23 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:15:23 --> Total execution time: 0.0732
DEBUG - 2021-08-10 18:15:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:15:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:15:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:15:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:15:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:15:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:15:38 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:15:38 --> Total execution time: 0.0615
DEBUG - 2021-08-10 18:15:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:15:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:15:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:15:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:15:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:15:53 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:15:53 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:15:53 --> Total execution time: 0.0739
DEBUG - 2021-08-10 18:16:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:16:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:16:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:16:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:16:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:16:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:16:08 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:16:08 --> Total execution time: 0.0815
DEBUG - 2021-08-10 18:16:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:16:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:16:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:16:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:16:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:16:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:16:23 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:16:23 --> Total execution time: 0.0827
DEBUG - 2021-08-10 18:16:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:16:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:16:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:16:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:16:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:16:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:16:38 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:16:38 --> Total execution time: 0.0852
DEBUG - 2021-08-10 18:16:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:16:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:16:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:16:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:16:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:16:53 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:16:53 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:16:53 --> Total execution time: 0.0909
DEBUG - 2021-08-10 18:17:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:17:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:17:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:17:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:17:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:17:08 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:17:08 --> 0.0007 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:17:08 --> Total execution time: 0.1454
DEBUG - 2021-08-10 18:17:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:17:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:17:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:17:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:17:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:17:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:17:23 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:17:23 --> Total execution time: 0.0777
DEBUG - 2021-08-10 18:17:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:17:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:17:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:17:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:17:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:17:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:17:38 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:17:38 --> Total execution time: 0.0717
DEBUG - 2021-08-10 18:17:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:17:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:17:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:17:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:17:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:17:53 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:17:53 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:17:53 --> Total execution time: 0.0677
DEBUG - 2021-08-10 18:18:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:18:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:18:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:18:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:18:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:18:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:18:08 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:18:08 --> Total execution time: 0.0758
DEBUG - 2021-08-10 18:18:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:18:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:18:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:18:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:18:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:18:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:18:23 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:18:23 --> Total execution time: 0.0723
DEBUG - 2021-08-10 18:18:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:18:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:18:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:18:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:18:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:18:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:18:38 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:18:38 --> Total execution time: 0.0821
DEBUG - 2021-08-10 18:18:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:18:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:18:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:18:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:18:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:18:53 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:18:53 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:18:53 --> Total execution time: 0.0851
DEBUG - 2021-08-10 18:19:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:19:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:19:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:19:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:19:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:19:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:19:08 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:19:08 --> Total execution time: 0.0804
DEBUG - 2021-08-10 18:19:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:19:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:19:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:19:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:19:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:19:23 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:19:23 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:19:23 --> Total execution time: 0.0843
DEBUG - 2021-08-10 18:19:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:19:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:19:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:19:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:19:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:19:38 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:19:38 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:19:38 --> Total execution time: 0.0663
DEBUG - 2021-08-10 18:20:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:20:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:20:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:20:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:20:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:20:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:20:23 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:20:23 --> Total execution time: 0.0785
DEBUG - 2021-08-10 18:21:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:21:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:21:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:21:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:21:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:21:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:21:23 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:21:23 --> Total execution time: 0.0802
DEBUG - 2021-08-10 18:22:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:22:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:22:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:22:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:22:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:22:23 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:22:23 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:22:23 --> Total execution time: 0.0671
DEBUG - 2021-08-10 18:23:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:23:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:23:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:23:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:23:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:23:23 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:23:23 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:23:23 --> Total execution time: 0.0732
DEBUG - 2021-08-10 18:24:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:24:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:24:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:24:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:24:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:24:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:24:23 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:24:23 --> Total execution time: 0.0652
DEBUG - 2021-08-10 18:25:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:25:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:25:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:25:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:25:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:25:23 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:25:23 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:25:23 --> Total execution time: 0.0777
DEBUG - 2021-08-10 18:26:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:26:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:26:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:26:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:26:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:26:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:26:23 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:26:23 --> Total execution time: 0.0762
DEBUG - 2021-08-10 18:27:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:27:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:27:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:27:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:27:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:27:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:27:23 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:27:23 --> Total execution time: 0.0896
DEBUG - 2021-08-10 18:28:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:28:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:28:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:28:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:28:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:28:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:28:23 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:28:23 --> Total execution time: 0.0635
DEBUG - 2021-08-10 18:29:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:29:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:29:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:29:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:29:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:29:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:29:23 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:29:23 --> Total execution time: 0.0706
DEBUG - 2021-08-10 18:30:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:30:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:30:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:30:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:30:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:30:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:30:23 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:30:23 --> Total execution time: 0.0777
DEBUG - 2021-08-10 18:31:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:31:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:31:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:31:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:31:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:31:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:31:23 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:31:23 --> Total execution time: 0.0602
DEBUG - 2021-08-10 18:32:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:32:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:32:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:32:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:32:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:32:23 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:32:23 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:32:23 --> Total execution time: 0.0797
DEBUG - 2021-08-10 18:33:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:33:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:33:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:33:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:33:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:33:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:33:23 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:33:23 --> Total execution time: 0.0920
DEBUG - 2021-08-10 18:34:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:34:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:34:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:34:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:34:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:34:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:34:23 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:34:23 --> Total execution time: 0.1244
DEBUG - 2021-08-10 18:35:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:35:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:35:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:35:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:35:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:35:23 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:35:23 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:35:23 --> Total execution time: 0.0721
DEBUG - 2021-08-10 18:36:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:36:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:36:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:36:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:36:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:36:23 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:36:23 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:36:23 --> Total execution time: 0.0817
DEBUG - 2021-08-10 18:37:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:37:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:37:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:37:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:37:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:37:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:37:23 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:37:23 --> Total execution time: 0.0731
DEBUG - 2021-08-10 18:38:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:38:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:38:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:38:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:38:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:38:23 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:38:23 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:38:23 --> Total execution time: 0.0734
DEBUG - 2021-08-10 18:39:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:39:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:39:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:39:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:39:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:39:23 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:39:23 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:39:23 --> Total execution time: 0.0819
DEBUG - 2021-08-10 18:40:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:40:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:40:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:40:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:40:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:40:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:40:23 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:40:23 --> Total execution time: 0.0792
DEBUG - 2021-08-10 18:41:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:41:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:41:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:41:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:41:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:41:23 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:41:23 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:41:23 --> Total execution time: 0.0762
DEBUG - 2021-08-10 18:42:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:42:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:42:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:42:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:42:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:42:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:42:23 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:42:23 --> Total execution time: 0.0811
DEBUG - 2021-08-10 18:43:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:43:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:43:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:43:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:43:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:43:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:43:23 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:43:23 --> Total execution time: 0.0719
DEBUG - 2021-08-10 18:44:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:44:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:44:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:44:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:44:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:44:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:44:23 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:44:23 --> Total execution time: 0.0656
DEBUG - 2021-08-10 18:44:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:44:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:44:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:44:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:44:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:44:38 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:44:38 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:44:38 --> Total execution time: 0.0816
DEBUG - 2021-08-10 18:44:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:44:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:44:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:44:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:44:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:44:53 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:44:53 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:44:53 --> Total execution time: 0.0746
DEBUG - 2021-08-10 18:45:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:45:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:45:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:45:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:45:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:45:08 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:45:08 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:45:08 --> Total execution time: 0.0822
DEBUG - 2021-08-10 18:45:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:45:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:45:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:45:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:45:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:45:23 --> 0.0036 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:45:23 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:45:23 --> Total execution time: 0.0801
DEBUG - 2021-08-10 18:45:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:45:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:45:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:45:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:45:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:45:38 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:45:38 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:45:38 --> Total execution time: 0.0690
DEBUG - 2021-08-10 18:45:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:45:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:45:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:45:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:45:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:45:53 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:45:53 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:45:53 --> Total execution time: 0.0743
DEBUG - 2021-08-10 18:46:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:46:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:46:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:46:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:46:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:46:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:46:08 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:46:08 --> Total execution time: 0.0745
DEBUG - 2021-08-10 18:46:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:46:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:46:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:46:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:46:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:46:23 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:46:23 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:46:23 --> Total execution time: 0.0762
DEBUG - 2021-08-10 18:46:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:46:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:46:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:46:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:46:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:46:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:46:38 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:46:38 --> Total execution time: 0.0811
DEBUG - 2021-08-10 18:46:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:46:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:46:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:46:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:46:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:46:53 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:46:53 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:46:53 --> Total execution time: 0.0802
DEBUG - 2021-08-10 18:47:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:47:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:47:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:47:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:47:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:47:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:47:08 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:47:08 --> Total execution time: 0.0752
DEBUG - 2021-08-10 18:47:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:47:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:47:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:47:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:47:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:47:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:47:23 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:47:23 --> Total execution time: 0.0694
DEBUG - 2021-08-10 18:47:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:47:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:47:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:47:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:47:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:47:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:47:38 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:47:38 --> Total execution time: 0.0779
DEBUG - 2021-08-10 18:47:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:47:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:47:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:47:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:47:52 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:47:52 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:47:52 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:47:52 --> Total execution time: 0.0734
DEBUG - 2021-08-10 18:48:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:48:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:48:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:48:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:48:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:48:08 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:48:08 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:48:08 --> Total execution time: 0.0684
DEBUG - 2021-08-10 18:48:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:48:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:48:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:48:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:48:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:48:23 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:48:23 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:48:23 --> Total execution time: 0.0632
DEBUG - 2021-08-10 18:48:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:48:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:48:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:48:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:48:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:48:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:48:38 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:48:38 --> Total execution time: 0.0866
DEBUG - 2021-08-10 18:48:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:48:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:48:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:48:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:48:52 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:48:52 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:48:52 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:48:52 --> Total execution time: 0.0588
DEBUG - 2021-08-10 18:48:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:48:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:48:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:48:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:48:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:48:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:48:55 --> 0.0723 | INSERT INTO `csvexportlog` (`export_status`, `filter_col`, `created_datetime`) VALUES (0, 'null', '2021-08-10 18:48:55')
DEBUG - 2021-08-10 18:48:55 --> Total execution time: 0.1362
DEBUG - 2021-08-10 18:48:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:48:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:48:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:48:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:48:55 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-10 18:49:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:49:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:49:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:49:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:49:07 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:49:07 --> 0.0771 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:49:07 --> 0.0837 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:49:07 --> Total execution time: 0.2340
QUERY - 2021-08-10 18:49:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:49:09 --> 3.1831 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-10 18:49:09 --> 0.0491 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-10 18:49:09 --> 2.9176 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-10 18:49:09 --> 2.3439 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-10 18:49:09 --> 2.8222 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-10 18:49:09 --> 0.0497 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-10 18:49:09 --> 2.7061 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-10 18:49:09 --> 0.0139 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-10 18:49:09 --> 0.0139 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-10 18:49:09 --> 0.0097 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:49:09 --> 0.001 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:49:09 --> 0.0011 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-10 18:49:09 --> Total execution time: 14.1957
DEBUG - 2021-08-10 18:49:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:49:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:49:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:49:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:49:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:49:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:49:25 --> 0.0011 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:49:25 --> Total execution time: 0.0861
DEBUG - 2021-08-10 18:49:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:49:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:49:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:49:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:49:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:49:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:49:40 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:49:40 --> Total execution time: 0.0783
DEBUG - 2021-08-10 18:49:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:49:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:49:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:49:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:49:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:49:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:49:55 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:49:55 --> Total execution time: 0.0704
DEBUG - 2021-08-10 18:50:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:50:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:50:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:50:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:50:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:50:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:50:10 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:50:10 --> Total execution time: 0.0677
DEBUG - 2021-08-10 18:50:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:50:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:50:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:50:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:50:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:50:25 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:50:25 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:50:25 --> Total execution time: 0.0786
DEBUG - 2021-08-10 18:50:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:50:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:50:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:50:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:50:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:50:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:50:40 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:50:40 --> Total execution time: 0.0795
DEBUG - 2021-08-10 18:50:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:50:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:50:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:50:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:50:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:50:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:50:55 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:50:55 --> Total execution time: 0.0951
DEBUG - 2021-08-10 18:51:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:51:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:51:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:51:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:51:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:51:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:51:10 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:51:10 --> Total execution time: 0.0800
DEBUG - 2021-08-10 18:51:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:51:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:51:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:51:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:51:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:51:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:51:25 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:51:25 --> Total execution time: 0.0764
DEBUG - 2021-08-10 18:51:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:51:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:51:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:51:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:51:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:51:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:51:40 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:51:40 --> Total execution time: 0.0820
DEBUG - 2021-08-10 18:51:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:51:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:51:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:51:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:51:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:51:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:51:55 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:51:55 --> Total execution time: 0.0918
DEBUG - 2021-08-10 18:52:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:52:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:52:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:52:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:52:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:52:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:52:10 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:52:10 --> Total execution time: 0.0835
DEBUG - 2021-08-10 18:52:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:52:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:52:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:52:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:52:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:52:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:52:25 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:52:25 --> Total execution time: 0.0790
DEBUG - 2021-08-10 18:52:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:52:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:52:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:52:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:52:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:52:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:52:40 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:52:40 --> Total execution time: 0.0824
DEBUG - 2021-08-10 18:52:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:52:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:52:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:52:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:52:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:52:55 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:52:55 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:52:55 --> Total execution time: 0.0801
DEBUG - 2021-08-10 18:53:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:53:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:53:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:53:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:53:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:53:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:53:10 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:53:10 --> Total execution time: 0.0691
DEBUG - 2021-08-10 18:53:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:53:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:53:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:53:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:53:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:53:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:53:25 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:53:25 --> Total execution time: 0.0828
DEBUG - 2021-08-10 18:53:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:53:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:53:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:53:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:53:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:53:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:53:40 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:53:40 --> Total execution time: 0.0783
DEBUG - 2021-08-10 18:53:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:53:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:53:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:53:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:53:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:53:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:53:55 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:53:55 --> Total execution time: 0.0837
DEBUG - 2021-08-10 18:54:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:54:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:54:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:54:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:54:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:54:10 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:54:10 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:54:10 --> Total execution time: 0.0809
DEBUG - 2021-08-10 18:54:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:54:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:54:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:54:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:54:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:54:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:54:25 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:54:25 --> Total execution time: 0.0778
DEBUG - 2021-08-10 18:54:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:54:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:54:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:54:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:54:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:54:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:54:40 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:54:40 --> Total execution time: 0.0836
DEBUG - 2021-08-10 18:54:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:54:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:54:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:54:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:54:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:54:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:54:55 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:54:55 --> Total execution time: 0.0826
DEBUG - 2021-08-10 18:55:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:55:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:55:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:55:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:55:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:55:10 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:55:10 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:55:10 --> Total execution time: 0.0729
DEBUG - 2021-08-10 18:55:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:55:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:55:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:55:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:55:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:55:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:55:25 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:55:25 --> Total execution time: 0.0752
DEBUG - 2021-08-10 18:55:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:55:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:55:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:55:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:55:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:55:40 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:55:40 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:55:40 --> Total execution time: 0.0789
DEBUG - 2021-08-10 18:55:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:55:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:55:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:55:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:55:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:55:55 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:55:55 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:55:55 --> Total execution time: 0.0837
DEBUG - 2021-08-10 18:56:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:56:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:56:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:56:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:56:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:56:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:56:10 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:56:10 --> Total execution time: 0.0924
DEBUG - 2021-08-10 18:56:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:56:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:56:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:56:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:56:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:56:25 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:56:25 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:56:25 --> Total execution time: 0.0803
DEBUG - 2021-08-10 18:56:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:56:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:56:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:56:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:56:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:56:40 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:56:40 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:56:40 --> Total execution time: 0.0747
DEBUG - 2021-08-10 18:56:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:56:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:56:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:56:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:56:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:56:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:56:55 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:56:55 --> Total execution time: 0.0689
DEBUG - 2021-08-10 18:57:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:57:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:57:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:57:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:57:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:57:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:57:23 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:57:23 --> Total execution time: 0.0700
DEBUG - 2021-08-10 18:58:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:58:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:58:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:58:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:58:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:58:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:58:23 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:58:23 --> Total execution time: 0.0658
DEBUG - 2021-08-10 18:59:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 18:59:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 18:59:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 18:59:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 18:59:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 18:59:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 18:59:23 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 18:59:23 --> Total execution time: 0.0808
DEBUG - 2021-08-10 19:00:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:00:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:00:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:00:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:00:04 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:00:04 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:00:04 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:00:04 --> Total execution time: 0.0866
DEBUG - 2021-08-10 19:00:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:00:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:00:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:00:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:00:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:00:10 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:00:10 --> 0.0009 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:00:10 --> Total execution time: 0.0990
DEBUG - 2021-08-10 19:00:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:00:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:00:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:00:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:00:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:00:25 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:00:25 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:00:25 --> Total execution time: 0.0815
DEBUG - 2021-08-10 19:00:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:00:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:00:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:00:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:00:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:00:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:00:40 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:00:40 --> Total execution time: 0.0712
DEBUG - 2021-08-10 19:00:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:00:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:00:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:00:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:00:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:00:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:00:55 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:00:55 --> Total execution time: 0.0739
DEBUG - 2021-08-10 19:00:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:00:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:00:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:00:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:00:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:00:56 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:00:56 --> 0.0523 | INSERT INTO `csvexportlog` (`export_status`, `filter_col`, `created_datetime`) VALUES (0, 'null', '2021-08-10 19:00:56')
DEBUG - 2021-08-10 19:00:56 --> Total execution time: 0.1222
DEBUG - 2021-08-10 19:00:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:00:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:00:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:00:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:00:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:00:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:00:56 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-10 19:00:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:00:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:00:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:00:56 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:00:56 --> 0.1804 | INSERT INTO `csvexportlog` (`export_status`, `filter_col`, `created_datetime`) VALUES (0, 'null', '2021-08-10 19:00:56')
DEBUG - 2021-08-10 19:00:56 --> Total execution time: 0.2716
DEBUG - 2021-08-10 19:00:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:00:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:00:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:00:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:00:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:01:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:01:10 --> 2.8255 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-10 19:01:10 --> 0.0604 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-10 19:01:10 --> 2.9281 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-10 19:01:10 --> 2.5776 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-10 19:01:10 --> 2.4669 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-10 19:01:10 --> 0.0491 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-10 19:01:10 --> 2.852 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-10 19:01:10 --> 0.0273 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-10 19:01:10 --> 0.0331 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-10 19:01:10 --> 0.0311 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:01:10 --> 0.0035 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:01:10 --> 0.0012 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-10 19:01:10 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:01:10 --> 3.1684 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-10 19:01:10 --> 0.0608 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-10 19:01:10 --> 2.928 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-10 19:01:10 --> 2.5776 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-10 19:01:10 --> 2.467 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-10 19:01:10 --> 0.0491 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-10 19:01:10 --> 2.8518 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-10 19:01:10 --> 0.0274 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-10 19:01:10 --> 0.0329 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-10 19:01:10 --> 0.0312 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:01:10 --> 0.0035 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:01:10 --> 0.0021 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-10 19:01:10 --> Total execution time: 13.9640
DEBUG - 2021-08-10 19:01:10 --> Total execution time: 14.3154
DEBUG - 2021-08-10 19:01:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:01:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:01:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:01:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:01:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:01:10 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:01:10 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:01:10 --> Total execution time: 0.1219
DEBUG - 2021-08-10 19:01:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:01:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:01:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:01:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:01:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:01:26 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:01:26 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:01:26 --> Total execution time: 0.0849
DEBUG - 2021-08-10 19:01:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:01:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:01:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:01:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:01:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:01:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:01:41 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:01:41 --> Total execution time: 0.0644
DEBUG - 2021-08-10 19:01:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:01:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:01:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:01:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:01:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:01:56 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:01:56 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:01:56 --> Total execution time: 0.0675
DEBUG - 2021-08-10 19:02:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:02:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:02:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:02:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:02:11 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:02:11 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:02:11 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:02:11 --> Total execution time: 0.0753
DEBUG - 2021-08-10 19:02:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:02:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:02:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:02:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:02:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:02:26 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:02:26 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:02:26 --> Total execution time: 0.0747
DEBUG - 2021-08-10 19:02:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:02:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:02:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:02:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:02:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:02:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:02:41 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:02:41 --> Total execution time: 0.0723
DEBUG - 2021-08-10 19:02:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:02:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:02:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:02:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:02:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:02:56 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:02:56 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:02:56 --> Total execution time: 0.0806
DEBUG - 2021-08-10 19:03:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:03:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:03:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:03:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:03:11 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:03:11 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:03:11 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:03:11 --> Total execution time: 0.0598
DEBUG - 2021-08-10 19:03:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:03:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:03:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:03:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:03:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:03:26 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:03:26 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:03:26 --> Total execution time: 0.0605
DEBUG - 2021-08-10 19:03:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:03:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:03:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:03:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:03:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:03:42 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:03:42 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:03:42 --> Total execution time: 0.0938
DEBUG - 2021-08-10 19:03:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:03:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:03:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:03:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:03:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:03:56 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:03:56 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:03:56 --> Total execution time: 0.0653
DEBUG - 2021-08-10 19:04:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:04:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:04:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:04:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:04:11 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:04:11 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:04:11 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:04:11 --> Total execution time: 0.0668
DEBUG - 2021-08-10 19:04:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:04:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:04:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:04:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:04:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:04:26 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:04:26 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:04:26 --> Total execution time: 0.0794
DEBUG - 2021-08-10 19:04:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:04:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:04:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:04:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:04:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:04:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:04:41 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:04:41 --> Total execution time: 0.0725
DEBUG - 2021-08-10 19:04:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:04:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:04:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:04:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:04:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:04:56 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:04:56 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:04:56 --> Total execution time: 0.0724
DEBUG - 2021-08-10 19:05:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:05:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:05:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:05:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:05:11 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:05:11 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:05:11 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:05:11 --> Total execution time: 0.0687
DEBUG - 2021-08-10 19:05:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:05:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:05:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:05:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:05:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:05:26 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:05:26 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:05:26 --> Total execution time: 0.0778
DEBUG - 2021-08-10 19:05:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:05:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:05:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:05:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:05:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:05:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:05:41 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:05:41 --> Total execution time: 0.0818
DEBUG - 2021-08-10 19:05:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:05:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:05:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:05:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:05:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:05:56 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:05:56 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:05:56 --> Total execution time: 0.0808
DEBUG - 2021-08-10 19:06:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:06:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:06:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:06:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:06:11 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:06:11 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:06:11 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:06:11 --> Total execution time: 0.0847
DEBUG - 2021-08-10 19:07:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:07:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:07:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:07:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:07:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:07:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:07:23 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:07:23 --> Total execution time: 0.0660
DEBUG - 2021-08-10 19:08:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:08:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:08:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:08:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:08:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:08:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:08:23 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:08:23 --> Total execution time: 0.0754
DEBUG - 2021-08-10 19:09:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:09:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:09:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:09:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:09:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:09:23 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:09:23 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:09:23 --> Total execution time: 0.0869
DEBUG - 2021-08-10 19:10:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:10:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:10:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:10:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:10:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:10:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:10:23 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:10:23 --> Total execution time: 0.0860
DEBUG - 2021-08-10 19:11:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:11:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:11:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:11:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:11:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:11:23 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:11:23 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:11:23 --> Total execution time: 0.0663
DEBUG - 2021-08-10 19:12:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:12:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:12:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:12:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:12:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:12:23 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:12:23 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:12:23 --> Total execution time: 0.0676
DEBUG - 2021-08-10 19:13:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:13:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:13:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:13:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:13:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:13:23 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:13:23 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:13:23 --> Total execution time: 0.0717
DEBUG - 2021-08-10 19:14:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:14:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:14:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:14:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:14:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:14:23 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:14:23 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:14:23 --> Total execution time: 0.0705
DEBUG - 2021-08-10 19:15:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:15:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:15:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:15:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:15:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:15:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:15:23 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:15:23 --> Total execution time: 0.0726
DEBUG - 2021-08-10 19:16:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:16:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:16:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:16:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:16:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:16:23 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:16:23 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:16:23 --> Total execution time: 0.0877
DEBUG - 2021-08-10 19:17:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:17:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:17:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:17:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:17:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:17:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:17:23 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:17:23 --> Total execution time: 0.1072
DEBUG - 2021-08-10 19:17:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:17:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:17:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:17:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:17:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:17:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:17:28 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:17:28 --> Total execution time: 0.0957
DEBUG - 2021-08-10 19:17:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:17:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:17:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:17:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:17:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:17:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:17:41 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:17:41 --> Total execution time: 0.0874
DEBUG - 2021-08-10 19:17:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:17:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:17:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:17:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:17:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:17:56 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:17:56 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:17:56 --> Total execution time: 0.0928
DEBUG - 2021-08-10 19:18:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:18:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:18:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:18:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:18:11 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:18:11 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:18:11 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:18:11 --> Total execution time: 0.0853
DEBUG - 2021-08-10 19:18:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:18:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:18:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:18:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:18:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:18:26 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:18:26 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:18:26 --> Total execution time: 0.0787
DEBUG - 2021-08-10 19:18:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:18:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:18:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:18:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:18:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:18:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:18:41 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:18:41 --> Total execution time: 0.0839
DEBUG - 2021-08-10 19:18:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:18:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:18:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:18:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:18:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:18:56 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:18:56 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:18:56 --> Total execution time: 0.0659
DEBUG - 2021-08-10 19:19:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:19:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:19:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:19:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:19:11 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:19:11 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:19:11 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:19:11 --> Total execution time: 0.0782
DEBUG - 2021-08-10 19:19:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:19:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:19:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:19:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:19:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:19:26 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:19:26 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:19:26 --> Total execution time: 0.0737
DEBUG - 2021-08-10 19:19:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:19:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:19:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:19:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:19:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:19:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:19:41 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:19:41 --> Total execution time: 0.0794
DEBUG - 2021-08-10 19:19:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:19:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:19:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:19:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:19:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:19:56 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:19:56 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:19:56 --> Total execution time: 0.0824
DEBUG - 2021-08-10 19:20:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:20:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:20:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:20:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:20:11 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:20:11 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:20:11 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:20:11 --> Total execution time: 0.0813
DEBUG - 2021-08-10 19:20:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:20:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:20:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:20:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:20:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:20:26 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:20:26 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:20:26 --> Total execution time: 0.0835
DEBUG - 2021-08-10 19:20:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:20:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:20:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:20:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:20:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:20:41 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:20:41 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:20:41 --> Total execution time: 0.0772
DEBUG - 2021-08-10 19:20:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:20:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:20:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:20:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:20:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:20:56 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:20:56 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:20:56 --> Total execution time: 0.0799
DEBUG - 2021-08-10 19:21:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:21:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:21:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:21:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:21:08 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-10 19:21:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:21:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:21:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:21:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:21:11 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:21:11 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:21:11 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:21:11 --> Total execution time: 0.0866
QUERY - 2021-08-10 19:21:21 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:21:21 --> 2.3928 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-10 19:21:21 --> 0.0476 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-10 19:21:21 --> 2.4735 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-10 19:21:21 --> 2.545 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-10 19:21:21 --> 2.4109 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-10 19:21:21 --> 0.0546 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-10 19:21:21 --> 3.5338 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-10 19:21:21 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-10 19:21:21 --> 0.0065 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-10 19:21:21 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:21:21 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:21:21 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-10 19:21:21 --> Total execution time: 13.5508
DEBUG - 2021-08-10 19:21:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:21:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:21:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:21:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:21:37 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:21:37 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:21:37 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:21:37 --> Total execution time: 0.0908
DEBUG - 2021-08-10 19:21:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:21:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:21:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:21:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:21:52 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:21:52 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:21:52 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:21:52 --> Total execution time: 0.0699
DEBUG - 2021-08-10 19:22:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:22:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:22:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:22:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:22:07 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:22:07 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:22:07 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:22:07 --> Total execution time: 0.0768
DEBUG - 2021-08-10 19:22:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:22:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:22:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:22:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:22:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:22:22 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:22:22 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:22:22 --> Total execution time: 0.0790
DEBUG - 2021-08-10 19:22:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:22:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:22:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:22:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:22:37 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:22:37 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:22:37 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:22:37 --> Total execution time: 0.0700
DEBUG - 2021-08-10 19:22:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:22:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:22:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:22:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:22:52 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:22:52 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:22:52 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:22:52 --> Total execution time: 0.0901
DEBUG - 2021-08-10 19:23:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:23:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:23:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:23:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:23:07 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:23:07 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:23:07 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:23:07 --> Total execution time: 0.0937
DEBUG - 2021-08-10 19:23:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:23:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:23:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:23:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:23:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:23:22 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:23:22 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:23:22 --> Total execution time: 0.0833
DEBUG - 2021-08-10 19:23:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:23:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:23:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:23:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:23:37 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:23:37 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:23:37 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:23:37 --> Total execution time: 0.0848
DEBUG - 2021-08-10 19:23:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:23:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:23:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:23:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:23:52 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:23:52 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:23:52 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:23:52 --> Total execution time: 0.0786
DEBUG - 2021-08-10 19:24:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:24:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:24:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:24:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:24:07 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:24:07 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:24:07 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:24:07 --> Total execution time: 0.0688
DEBUG - 2021-08-10 19:24:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:24:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:24:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:24:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:24:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:24:22 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:24:22 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:24:22 --> Total execution time: 0.0818
DEBUG - 2021-08-10 19:24:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:24:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:24:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:24:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:24:37 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:24:37 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:24:37 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:24:37 --> Total execution time: 0.0941
DEBUG - 2021-08-10 19:24:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:24:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:24:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:24:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:24:52 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:24:52 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:24:52 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:24:52 --> Total execution time: 0.0856
DEBUG - 2021-08-10 19:25:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:25:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:25:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:25:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:25:07 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:25:07 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:25:07 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:25:07 --> Total execution time: 0.1101
DEBUG - 2021-08-10 19:25:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:25:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:25:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:25:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:25:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:25:22 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:25:22 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:25:22 --> Total execution time: 0.0764
DEBUG - 2021-08-10 19:25:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:25:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:25:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:25:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:25:37 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:25:37 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:25:37 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:25:37 --> Total execution time: 0.0730
DEBUG - 2021-08-10 19:25:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:25:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:25:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:25:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:25:52 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:25:52 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:25:52 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:25:52 --> Total execution time: 0.0738
DEBUG - 2021-08-10 19:26:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:26:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:26:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:26:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:26:07 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:26:07 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:26:07 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:26:07 --> Total execution time: 0.0890
DEBUG - 2021-08-10 19:26:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:26:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:26:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:26:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:26:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:26:22 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:26:22 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:26:22 --> Total execution time: 0.0857
DEBUG - 2021-08-10 19:26:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:26:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:26:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:26:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:26:37 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:26:37 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:26:37 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:26:37 --> Total execution time: 0.0761
DEBUG - 2021-08-10 19:27:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:27:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:27:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:27:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:27:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:27:23 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:27:23 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:27:23 --> Total execution time: 0.0795
DEBUG - 2021-08-10 19:28:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:28:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:28:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:28:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:28:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:28:23 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:28:23 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:28:23 --> Total execution time: 0.0914
DEBUG - 2021-08-10 19:29:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:29:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:29:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:29:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:29:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:29:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:29:23 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:29:23 --> Total execution time: 0.1051
DEBUG - 2021-08-10 19:30:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:30:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:30:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:30:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:30:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:30:23 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:30:23 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:30:23 --> Total execution time: 0.0788
DEBUG - 2021-08-10 19:31:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:31:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:31:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:31:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:31:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:31:20 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:31:20 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:31:20 --> Total execution time: 0.1139
DEBUG - 2021-08-10 19:31:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:31:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:31:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:31:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:31:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:31:22 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:31:22 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:31:22 --> Total execution time: 0.0831
DEBUG - 2021-08-10 19:31:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:31:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:31:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:31:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:31:37 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:31:37 --> 0.0019 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:31:37 --> 0.0009 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:31:37 --> Total execution time: 0.0894
DEBUG - 2021-08-10 19:31:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:31:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:31:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:31:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:31:52 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:31:52 --> 0.001 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:31:52 --> 0.0014 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:31:52 --> Total execution time: 0.1350
DEBUG - 2021-08-10 19:32:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:32:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:32:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:32:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:32:07 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:32:07 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:32:07 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:32:07 --> Total execution time: 0.0879
DEBUG - 2021-08-10 19:32:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:32:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:32:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:32:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:32:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:32:22 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:32:22 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:32:22 --> Total execution time: 0.0700
DEBUG - 2021-08-10 19:32:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:32:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:32:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:32:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:32:37 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:32:37 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:32:37 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:32:37 --> Total execution time: 0.0739
DEBUG - 2021-08-10 19:32:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:32:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:32:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:32:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:32:52 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:32:52 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:32:52 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:32:52 --> Total execution time: 0.1075
DEBUG - 2021-08-10 19:33:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:33:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:33:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:33:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:33:07 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:33:07 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:33:07 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:33:07 --> Total execution time: 0.0956
DEBUG - 2021-08-10 19:33:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:33:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:33:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:33:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:33:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:33:22 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:33:22 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:33:22 --> Total execution time: 0.0852
DEBUG - 2021-08-10 19:33:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:33:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:33:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:33:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:33:37 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:33:37 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:33:37 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:33:37 --> Total execution time: 0.0821
DEBUG - 2021-08-10 19:33:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:33:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:33:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:33:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:33:52 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:33:52 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:33:52 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:33:52 --> Total execution time: 0.0815
DEBUG - 2021-08-10 19:34:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:34:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:34:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:34:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:34:07 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:34:07 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:34:07 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:34:07 --> Total execution time: 0.0748
DEBUG - 2021-08-10 19:34:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:34:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:34:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:34:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:34:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:34:22 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:34:22 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:34:22 --> Total execution time: 0.0813
DEBUG - 2021-08-10 19:34:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:34:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:34:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:34:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:34:37 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:34:37 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:34:37 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:34:37 --> Total execution time: 0.0663
DEBUG - 2021-08-10 19:34:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:34:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:34:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:34:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:34:52 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:34:52 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:34:52 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:34:52 --> Total execution time: 0.0760
DEBUG - 2021-08-10 19:35:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:35:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:35:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:35:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:35:07 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:35:07 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:35:07 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:35:07 --> Total execution time: 0.0938
DEBUG - 2021-08-10 19:35:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:35:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:35:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:35:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:35:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:35:22 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:35:22 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:35:22 --> Total execution time: 0.2526
DEBUG - 2021-08-10 19:35:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:35:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:35:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:35:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:35:37 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:35:37 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:35:37 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:35:37 --> Total execution time: 0.0807
DEBUG - 2021-08-10 19:35:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:35:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:35:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:35:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:35:52 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:35:52 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:35:52 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:35:52 --> Total execution time: 0.0826
DEBUG - 2021-08-10 19:36:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:36:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:36:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:36:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:36:07 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:36:07 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:36:07 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:36:07 --> Total execution time: 0.0806
DEBUG - 2021-08-10 19:36:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:36:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:36:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:36:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:36:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:36:22 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:36:22 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:36:22 --> Total execution time: 0.0683
DEBUG - 2021-08-10 19:36:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:36:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:36:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:36:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:36:37 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:36:37 --> 0.0008 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:36:37 --> 0.0009 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:36:37 --> Total execution time: 0.0750
DEBUG - 2021-08-10 19:36:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:36:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:36:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:36:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:36:52 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:36:52 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:36:52 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:36:52 --> Total execution time: 0.0699
DEBUG - 2021-08-10 19:37:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:37:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:37:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:37:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:37:07 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:37:07 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:37:07 --> 0.0006 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:37:07 --> Total execution time: 0.0923
DEBUG - 2021-08-10 19:37:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:37:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:37:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:37:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:37:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:37:22 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:37:22 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:37:22 --> Total execution time: 0.0715
DEBUG - 2021-08-10 19:37:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:37:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:37:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:37:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:37:37 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:37:37 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:37:37 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:37:37 --> Total execution time: 0.0774
DEBUG - 2021-08-10 19:37:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:37:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:37:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:37:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:37:52 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:37:52 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:37:52 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:37:52 --> Total execution time: 0.0790
DEBUG - 2021-08-10 19:38:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:38:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:38:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:38:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:38:07 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:38:07 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:38:07 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:38:07 --> Total execution time: 0.0941
DEBUG - 2021-08-10 19:38:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:38:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:38:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:38:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:38:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:38:22 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:38:22 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:38:22 --> Total execution time: 0.0916
DEBUG - 2021-08-10 19:38:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:38:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:38:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:38:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:38:37 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:38:37 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:38:37 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:38:37 --> Total execution time: 0.0636
DEBUG - 2021-08-10 19:38:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:38:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:38:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:38:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:38:52 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:38:52 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:38:52 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:38:52 --> Total execution time: 0.0731
DEBUG - 2021-08-10 19:39:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:39:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:39:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:39:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:39:07 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:39:07 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:39:07 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:39:07 --> Total execution time: 0.0794
DEBUG - 2021-08-10 19:39:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:39:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:39:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:39:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:39:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:39:22 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:39:22 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:39:22 --> Total execution time: 0.0853
DEBUG - 2021-08-10 19:39:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:39:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:39:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:39:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:39:37 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:39:37 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:39:37 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:39:37 --> Total execution time: 0.0723
DEBUG - 2021-08-10 19:39:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:39:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:39:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:39:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:39:52 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:39:52 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:39:52 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:39:52 --> Total execution time: 0.0876
DEBUG - 2021-08-10 19:40:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:40:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:40:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:40:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:40:07 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:40:07 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:40:07 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:40:07 --> Total execution time: 0.0827
DEBUG - 2021-08-10 19:40:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:40:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:40:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:40:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:40:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:40:22 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:40:22 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:40:22 --> Total execution time: 0.0728
DEBUG - 2021-08-10 19:40:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:40:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:40:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:40:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:40:37 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:40:37 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:40:37 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:40:37 --> Total execution time: 0.0873
DEBUG - 2021-08-10 19:40:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:40:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:40:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:40:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:40:52 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:40:52 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:40:52 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:40:52 --> Total execution time: 0.0702
DEBUG - 2021-08-10 19:41:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:41:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:41:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:41:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:41:07 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:41:07 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:41:07 --> 0.001 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:41:07 --> Total execution time: 0.0763
DEBUG - 2021-08-10 19:41:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:41:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:41:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:41:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:41:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:41:22 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:41:22 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:41:22 --> Total execution time: 0.0742
DEBUG - 2021-08-10 19:41:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:41:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:41:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:41:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:41:37 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:41:37 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:41:37 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:41:37 --> Total execution time: 0.1114
DEBUG - 2021-08-10 19:41:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:41:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:41:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:41:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:41:52 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:41:52 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:41:52 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:41:52 --> Total execution time: 0.0802
DEBUG - 2021-08-10 19:42:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:42:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:42:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:42:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:42:07 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:42:07 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:42:07 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:42:07 --> Total execution time: 0.0971
DEBUG - 2021-08-10 19:42:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:42:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:42:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:42:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:42:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:42:22 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:42:22 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:42:22 --> Total execution time: 0.0796
DEBUG - 2021-08-10 19:42:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:42:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:42:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:42:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:42:37 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:42:37 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:42:37 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:42:37 --> Total execution time: 0.0818
DEBUG - 2021-08-10 19:42:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:42:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:42:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:42:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:42:52 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:42:52 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:42:52 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:42:52 --> Total execution time: 0.0780
DEBUG - 2021-08-10 19:43:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:43:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:43:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:43:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:43:07 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:43:07 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:43:07 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:43:07 --> Total execution time: 0.0693
DEBUG - 2021-08-10 19:43:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:43:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:43:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:43:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:43:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:43:22 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:43:22 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:43:22 --> Total execution time: 0.0775
DEBUG - 2021-08-10 19:43:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:43:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:43:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:43:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:43:37 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:43:37 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:43:37 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:43:37 --> Total execution time: 0.0655
DEBUG - 2021-08-10 19:43:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:43:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:43:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:43:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:43:52 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:43:52 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:43:52 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:43:52 --> Total execution time: 0.0848
DEBUG - 2021-08-10 19:44:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:44:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:44:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:44:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:44:07 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:44:07 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:44:07 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:44:07 --> Total execution time: 0.0706
DEBUG - 2021-08-10 19:44:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:44:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:44:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:44:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:44:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:44:22 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:44:22 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:44:22 --> Total execution time: 0.0873
DEBUG - 2021-08-10 19:44:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:44:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:44:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:44:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:44:37 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:44:37 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:44:37 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:44:37 --> Total execution time: 0.0822
DEBUG - 2021-08-10 19:44:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:44:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:44:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:44:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:44:52 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:44:52 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:44:52 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:44:52 --> Total execution time: 0.0901
DEBUG - 2021-08-10 19:45:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:45:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:45:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:45:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:45:07 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:45:07 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:45:07 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:45:07 --> Total execution time: 0.0803
DEBUG - 2021-08-10 19:45:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:45:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:45:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:45:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:45:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:45:22 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:45:22 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:45:22 --> Total execution time: 0.0756
DEBUG - 2021-08-10 19:45:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:45:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:45:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:45:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:45:37 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:45:37 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:45:37 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:45:37 --> Total execution time: 0.0705
DEBUG - 2021-08-10 19:45:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:45:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:45:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:45:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:45:52 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:45:52 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:45:52 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:45:52 --> Total execution time: 0.0770
DEBUG - 2021-08-10 19:46:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:46:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:46:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:46:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:46:07 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:46:07 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:46:07 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:46:07 --> Total execution time: 0.0695
DEBUG - 2021-08-10 19:46:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:46:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:46:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:46:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:46:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:46:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:46:23 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:46:23 --> Total execution time: 0.0861
DEBUG - 2021-08-10 19:47:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:47:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:47:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:47:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:47:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:47:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:47:23 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:47:23 --> Total execution time: 0.0843
DEBUG - 2021-08-10 19:48:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:48:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:48:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:48:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:48:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:48:26 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:48:26 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:48:26 --> Total execution time: 0.0614
DEBUG - 2021-08-10 19:49:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:49:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:49:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:49:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:49:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:49:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:49:23 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:49:23 --> Total execution time: 0.0803
DEBUG - 2021-08-10 19:50:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:50:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:50:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:50:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:50:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:50:23 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:50:23 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:50:23 --> Total execution time: 0.0591
DEBUG - 2021-08-10 19:51:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:51:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:51:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:51:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:51:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:51:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:51:23 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:51:23 --> Total execution time: 0.0859
DEBUG - 2021-08-10 19:52:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:52:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:52:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:52:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:52:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:52:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:52:23 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:52:23 --> Total execution time: 0.0686
DEBUG - 2021-08-10 19:53:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:53:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:53:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:53:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:53:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:53:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:53:23 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:53:23 --> Total execution time: 0.0608
DEBUG - 2021-08-10 19:54:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:54:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:54:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:54:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:54:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:54:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:54:23 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:54:23 --> Total execution time: 0.0852
DEBUG - 2021-08-10 19:55:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:55:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:55:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:55:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:55:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:55:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:55:23 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:55:23 --> Total execution time: 0.0665
DEBUG - 2021-08-10 19:56:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:56:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:56:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:56:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:56:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:56:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:56:23 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:56:23 --> Total execution time: 0.0649
DEBUG - 2021-08-10 19:57:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:57:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:57:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:57:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:57:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:57:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:57:23 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:57:23 --> Total execution time: 0.0658
DEBUG - 2021-08-10 19:58:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:58:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:58:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:58:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:58:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:58:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:58:23 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:58:23 --> Total execution time: 0.0754
DEBUG - 2021-08-10 19:59:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 19:59:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 19:59:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 19:59:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 19:59:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 19:59:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 19:59:23 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 19:59:23 --> Total execution time: 0.0713
DEBUG - 2021-08-10 20:00:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 20:00:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 20:00:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 20:00:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 20:00:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 20:00:23 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 20:00:23 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 20:00:23 --> Total execution time: 0.0748
DEBUG - 2021-08-10 20:01:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 20:01:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 20:01:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 20:01:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 20:01:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 20:01:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 20:01:23 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 20:01:23 --> Total execution time: 0.0799
DEBUG - 2021-08-10 20:02:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 20:02:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 20:02:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 20:02:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 20:02:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 20:02:23 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 20:02:23 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 20:02:23 --> Total execution time: 0.0625
DEBUG - 2021-08-10 20:03:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 20:03:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 20:03:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 20:03:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 20:03:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 20:03:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 20:03:23 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 20:03:23 --> Total execution time: 0.0703
DEBUG - 2021-08-10 20:04:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 20:04:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 20:04:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 20:04:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 20:04:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 20:04:23 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 20:04:23 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 20:04:23 --> Total execution time: 0.0663
DEBUG - 2021-08-10 20:05:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 20:05:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 20:05:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 20:05:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 20:05:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 20:05:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 20:05:23 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 20:05:23 --> Total execution time: 0.0663
DEBUG - 2021-08-10 20:06:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 20:06:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 20:06:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 20:06:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 20:06:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 20:06:23 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 20:06:23 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 20:06:23 --> Total execution time: 0.0815
DEBUG - 2021-08-10 20:07:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 20:07:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 20:07:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 20:07:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 20:07:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 20:07:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 20:07:23 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 20:07:23 --> Total execution time: 0.0729
DEBUG - 2021-08-10 20:07:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-10 20:07:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-10 20:07:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-10 20:07:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-10 20:07:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-10 20:07:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-10 20:07:38 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-10 20:07:38 --> Total execution time: 0.1053
