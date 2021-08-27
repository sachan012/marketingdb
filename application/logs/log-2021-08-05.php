<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2021-08-05 10:21:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 10:21:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 10:21:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 10:21:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 10:21:14 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 10:21:51 --> Total execution time: 37.1245
DEBUG - 2021-08-05 10:21:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 10:21:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 10:21:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 10:21:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 10:23:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 10:23:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 10:23:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 10:23:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 10:23:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 10:23:46 --> 28.4895 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-05 10:23:46 --> 2.475 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-05 10:23:46 --> 0.769 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-05 10:23:46 --> 2.5087 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-05 10:23:46 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 10:23:46 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 10:23:46 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 10:23:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 10:23:46 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 10:23:46 --> 0.0482 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `campaign_name` FROM `gpi_data` ) CI_count_all_results
QUERY - 2021-08-05 10:23:46 --> 2.6694 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-05 10:23:46 --> Total execution time: 37.0440
DEBUG - 2021-08-05 10:23:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 10:23:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 10:23:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 10:23:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 10:33:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 10:33:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 10:33:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 10:33:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 10:33:11 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 10:33:24 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 10:33:24 --> 2.3768 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 10:33:24 --> 0.0519 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 10:33:24 --> 2.5256 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 10:33:24 --> 2.4667 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 10:33:24 --> 2.5993 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 10:33:24 --> 0.0415 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 10:33:24 --> 3.4812 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 10:33:24 --> 0.0133 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 10:33:24 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 10:33:24 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 10:33:24 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 10:33:24 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 10:33:24 --> Total execution time: 13.6641
DEBUG - 2021-08-05 10:33:32 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 10:33:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 10:33:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 10:33:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 10:33:32 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 10:33:32 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 10:33:32 --> 0.0948 | INSERT INTO `csvexportlog` (`export_status`, `filter_col`, `created_datetime`) VALUES (0, '{\"circle\":\"GUJARAT\"}', '2021-08-05 10:33:32')
DEBUG - 2021-08-05 10:33:32 --> Total execution time: 0.1678
DEBUG - 2021-08-05 10:33:32 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 10:33:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 10:33:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 10:33:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 10:33:32 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 10:33:47 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 10:33:47 --> 3.8115 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 10:33:47 --> 0.0498 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 10:33:47 --> 2.9039 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 10:33:47 --> 2.5341 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 10:33:47 --> 2.8601 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 10:33:47 --> 0.1684 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 10:33:47 --> 2.6156 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 10:33:47 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 10:33:47 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 10:33:47 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 10:33:47 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 10:33:47 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 10:33:47 --> Total execution time: 15.0201
DEBUG - 2021-08-05 10:41:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 10:41:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 10:41:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 10:41:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 10:41:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 10:42:08 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 10:42:08 --> 2.7687 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 10:42:08 --> 0.052 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 10:42:08 --> 2.6479 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 10:42:08 --> 2.5664 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 10:42:08 --> 3.6555 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 10:42:08 --> 0.052 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 10:42:08 --> 2.3479 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 10:42:08 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 10:42:08 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 10:42:08 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 10:42:08 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 10:42:08 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 10:42:08 --> Total execution time: 14.1864
DEBUG - 2021-08-05 10:42:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 10:42:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 10:42:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 10:42:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 10:42:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 10:42:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 10:42:23 --> 0.0861 | INSERT INTO `csvexportlog` (`export_status`, `filter_col`, `created_datetime`) VALUES (0, 'null', '2021-08-05 10:42:23')
DEBUG - 2021-08-05 10:42:23 --> Total execution time: 0.1907
DEBUG - 2021-08-05 10:42:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 10:42:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 10:42:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 10:42:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 10:42:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 10:42:38 --> 0.0414 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 10:42:38 --> 3.1004 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 10:42:38 --> 0.0519 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 10:42:38 --> 2.6994 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 10:42:38 --> 2.6037 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 10:42:38 --> 2.9889 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 10:42:38 --> 0.0524 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 10:42:38 --> 2.98 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 10:42:38 --> 0.0012 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 10:42:38 --> 0.0006 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 10:42:38 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 10:42:38 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 10:42:38 --> 0.0006 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 10:42:38 --> Total execution time: 14.6203
DEBUG - 2021-08-05 10:50:32 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 10:50:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 10:50:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 10:50:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 10:50:32 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 10:50:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 10:50:46 --> 2.4942 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 10:50:46 --> 0.052 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 10:50:46 --> 3.5925 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 10:50:46 --> 2.6218 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 10:50:46 --> 2.6 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 10:50:46 --> 0.0521 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 10:50:46 --> 2.4922 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 10:50:46 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 10:50:46 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 10:50:46 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 10:50:46 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 10:50:46 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 10:50:46 --> Total execution time: 13.9848
DEBUG - 2021-08-05 10:50:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 10:50:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 10:50:49 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 10:50:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 10:50:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 10:50:49 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 10:50:50 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 10:51:03 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 10:51:03 --> 3.1563 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 10:51:03 --> 0.0519 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 10:51:03 --> 2.9035 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 10:51:03 --> 2.5444 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 10:51:03 --> 2.5123 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 10:51:03 --> 0.0504 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 10:51:03 --> 2.3705 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 10:51:03 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 10:51:03 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 10:51:03 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 10:51:03 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 10:51:03 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 10:51:03 --> Total execution time: 13.6699
DEBUG - 2021-08-05 10:51:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 10:51:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 10:51:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 10:51:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 10:51:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 10:51:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 10:51:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 10:51:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 10:51:40 --> 2.6065 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 10:51:40 --> 0.0456 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 10:51:40 --> 2.672 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 10:51:40 --> 2.6547 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 10:51:40 --> 2.6219 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 10:51:40 --> 0.0504 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 10:51:40 --> 2.4485 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 10:51:40 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 10:51:40 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 10:51:40 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 10:51:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 10:51:40 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 10:51:40 --> Total execution time: 13.1817
DEBUG - 2021-08-05 10:51:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 10:51:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 10:51:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 10:51:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 10:51:40 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 10:51:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 10:51:40 --> Global POST, GET and COOKIE data sanitized
QUERY - 2021-08-05 10:51:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 10:51:55 --> 3.8221 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 10:51:55 --> 0.0504 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 10:51:55 --> 2.3816 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 10:51:55 --> 2.5999 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 10:51:55 --> 2.7 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 10:51:55 --> 0.0519 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 10:51:55 --> 3.0592 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 10:51:55 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 10:51:55 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 10:51:55 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 10:51:55 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 10:51:55 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 10:51:55 --> Total execution time: 14.7814
DEBUG - 2021-08-05 10:53:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 10:53:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 10:53:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 10:53:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 10:53:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 10:53:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 10:53:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 10:54:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 10:54:08 --> 3.6023 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 10:54:08 --> 0.0538 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 10:54:08 --> 2.5013 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 10:54:08 --> 2.466 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 10:54:08 --> 2.8118 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 10:54:08 --> 0.0513 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 10:54:08 --> 2.2922 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 10:54:08 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 10:54:08 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 10:54:08 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 10:54:08 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 10:54:08 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 10:54:08 --> Total execution time: 13.8508
DEBUG - 2021-08-05 10:54:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 10:54:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 11:07:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 11:07:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 11:07:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 11:07:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 11:07:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 11:07:52 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:07:52 --> 2.4247 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 11:07:52 --> 0.0513 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 11:07:52 --> 2.3702 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 11:07:52 --> 3.1667 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 11:07:52 --> 2.8119 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 11:07:52 --> 0.0511 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 11:07:52 --> 2.5594 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 11:07:52 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 11:07:52 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 11:07:52 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:07:52 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:07:52 --> 0.0007 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 11:07:52 --> Total execution time: 13.5204
DEBUG - 2021-08-05 11:07:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 11:07:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 11:08:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 11:08:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 11:08:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 11:08:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 11:08:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 11:08:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:08:24 --> 3.3604 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 11:08:24 --> 0.0478 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 11:08:24 --> 2.5702 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 11:08:24 --> 2.6111 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 11:08:24 --> 2.6555 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 11:08:24 --> 0.0518 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 11:08:24 --> 2.8705 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 11:08:24 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 11:08:24 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 11:08:24 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:08:24 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:08:24 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 11:08:24 --> Total execution time: 14.2490
DEBUG - 2021-08-05 11:08:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 11:08:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 11:09:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 11:09:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 11:09:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 11:09:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 11:09:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 11:09:41 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:09:41 --> 0.064 | INSERT INTO `csvexportlog` (`export_status`, `filter_col`, `created_datetime`) VALUES (0, 'null', '2021-08-05 11:09:41')
DEBUG - 2021-08-05 11:09:41 --> Total execution time: 0.1337
DEBUG - 2021-08-05 11:09:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 11:09:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 11:09:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 11:09:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 11:09:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 11:09:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:09:55 --> 2.9361 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 11:09:55 --> 0.0514 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 11:09:55 --> 2.5482 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 11:09:55 --> 3.6 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 11:09:55 --> 2.523 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 11:09:55 --> 0.0507 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 11:09:55 --> 2.6597 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 11:09:55 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 11:09:55 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 11:09:55 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:09:55 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:09:55 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 11:09:55 --> Total execution time: 14.4399
DEBUG - 2021-08-05 11:09:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 11:09:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 11:12:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 11:12:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 11:12:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 11:12:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 11:12:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 11:13:07 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:13:07 --> 2.938 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 11:13:07 --> 0.0523 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 11:13:07 --> 2.4919 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 11:13:07 --> 2.4333 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 11:13:07 --> 2.6667 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 11:13:07 --> 0.0531 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 11:13:07 --> 3.6355 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 11:13:07 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 11:13:07 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 11:13:07 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:13:07 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:13:07 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 11:13:07 --> Total execution time: 14.3713
DEBUG - 2021-08-05 11:13:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 11:13:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 11:13:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 11:13:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 11:13:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 11:13:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 11:13:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 11:13:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:13:10 --> 0.0688 | INSERT INTO `csvexportlog` (`export_status`, `filter_col`, `created_datetime`) VALUES (0, 'null', '2021-08-05 11:13:10')
DEBUG - 2021-08-05 11:13:10 --> Total execution time: 0.1389
DEBUG - 2021-08-05 11:13:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 11:13:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 11:13:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 11:13:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 11:13:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 11:13:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 11:13:10 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 11:13:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 11:13:25 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:13:25 --> 2.8712 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 11:13:25 --> 0.0519 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 11:13:25 --> 3.1923 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 11:13:25 --> 2.4666 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 11:13:25 --> 3.3335 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 11:13:25 --> 0.0965 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 11:13:25 --> 2.5808 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 11:13:25 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 11:13:25 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 11:13:25 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:13:25 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:13:25 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 11:13:25 --> Total execution time: 14.6878
DEBUG - 2021-08-05 11:13:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 11:13:25 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 11:13:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 11:13:25 --> Global POST, GET and COOKIE data sanitized
QUERY - 2021-08-05 11:13:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:13:25 --> 0.1216 | INSERT INTO `csvexportlog` (`export_status`, `filter_col`, `created_datetime`) VALUES (0, 'null', '2021-08-05 11:13:25')
DEBUG - 2021-08-05 11:13:25 --> Total execution time: 14.7928
DEBUG - 2021-08-05 11:14:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 11:14:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 11:14:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 11:14:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 11:14:36 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 11:14:49 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:14:49 --> 2.5669 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 11:14:49 --> 0.0569 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 11:14:49 --> 2.3806 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 11:14:49 --> 3.1777 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 11:14:49 --> 2.7557 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 11:14:49 --> 0.0524 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 11:14:49 --> 2.4698 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 11:14:49 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 11:14:49 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 11:14:49 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:14:49 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:14:49 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 11:14:49 --> Total execution time: 13.5341
DEBUG - 2021-08-05 11:14:49 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 11:14:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 11:14:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 11:14:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 11:14:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 11:14:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 11:14:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 11:14:54 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:14:54 --> 0.0748 | INSERT INTO `csvexportlog` (`export_status`, `filter_col`, `created_datetime`) VALUES (0, 'null', '2021-08-05 11:14:53')
DEBUG - 2021-08-05 11:14:54 --> Total execution time: 0.1490
DEBUG - 2021-08-05 11:14:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 11:14:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 11:14:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 11:14:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 11:14:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 11:15:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:15:08 --> 2.6186 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 11:15:08 --> 0.1854 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 11:15:08 --> 2.3587 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 11:15:08 --> 3.5797 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 11:15:08 --> 3.2579 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 11:15:08 --> 0.0473 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 11:15:08 --> 2.5935 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 11:15:08 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 11:15:08 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 11:15:08 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:15:08 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:15:08 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 11:15:08 --> Total execution time: 14.7194
DEBUG - 2021-08-05 11:15:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 11:15:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 11:25:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 11:25:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 11:25:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 11:25:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 11:25:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 11:25:36 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:25:36 --> 2.4779 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 11:25:36 --> 0.052 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 11:25:36 --> 2.4699 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 11:25:36 --> 3.2456 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 11:25:36 --> 2.5765 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 11:25:36 --> 0.0515 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 11:25:36 --> 2.426 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 11:25:36 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 11:25:36 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 11:25:36 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:25:36 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:25:36 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 11:25:36 --> Total execution time: 13.3817
DEBUG - 2021-08-05 11:25:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 11:25:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 11:25:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 11:25:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 11:25:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 11:25:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 11:25:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 11:25:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 11:25:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 11:25:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 11:25:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 11:25:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:25:40 --> 0.0941 | INSERT INTO `csvexportlog` (`export_status`, `filter_col`, `created_datetime`) VALUES (0, 'null', '2021-08-05 11:25:40')
DEBUG - 2021-08-05 11:25:40 --> Total execution time: 0.1762
DEBUG - 2021-08-05 11:25:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 11:25:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 11:25:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 11:25:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 11:25:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 11:25:55 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:25:55 --> 2.9049 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 11:25:55 --> 0.052 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 11:25:55 --> 3.1144 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 11:25:55 --> 3.0778 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 11:25:55 --> 2.5225 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 11:25:55 --> 0.0522 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 11:25:55 --> 2.5806 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 11:25:55 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 11:25:55 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 11:25:55 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:25:55 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:25:55 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 11:25:55 --> Total execution time: 14.4025
DEBUG - 2021-08-05 11:25:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 11:25:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 11:25:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 11:25:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 11:25:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 11:25:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 11:29:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 11:29:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 11:29:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 11:29:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 11:29:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 11:30:07 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:30:07 --> 2.3181 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 11:30:07 --> 0.052 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 11:30:07 --> 2.4589 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 11:30:07 --> 2.5999 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 11:30:07 --> 3.3494 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 11:30:07 --> 0.0467 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 11:30:07 --> 2.4928 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 11:30:07 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 11:30:07 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 11:30:07 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:30:07 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:30:07 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 11:30:07 --> Total execution time: 13.3865
DEBUG - 2021-08-05 11:30:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 11:30:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 11:30:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 11:30:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 11:30:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 11:30:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 11:30:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 11:30:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 11:30:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 11:30:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 11:30:11 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 11:30:11 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:30:11 --> 0.0691 | INSERT INTO `csvexportlog` (`export_status`, `filter_col`, `created_datetime`) VALUES (0, 'null', '2021-08-05 11:30:11')
DEBUG - 2021-08-05 11:30:11 --> Total execution time: 0.1534
DEBUG - 2021-08-05 11:30:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 11:30:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 11:30:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 11:30:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 11:30:11 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 11:30:26 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:30:26 --> 2.707 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 11:30:26 --> 0.0519 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 11:30:26 --> 2.4923 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 11:30:26 --> 3.0498 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 11:30:26 --> 3.8502 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 11:30:26 --> 0.0529 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 11:30:26 --> 2.4247 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 11:30:26 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 11:30:26 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 11:30:26 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:30:26 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:30:26 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 11:30:26 --> Total execution time: 14.7063
DEBUG - 2021-08-05 11:30:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 11:30:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 11:30:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 11:30:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 11:30:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 11:30:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 11:34:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 11:34:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 11:34:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 11:34:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 11:34:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 11:34:21 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:34:21 --> 2.5588 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 11:34:21 --> 0.0518 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 11:34:21 --> 2.3702 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 11:34:21 --> 2.4888 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 11:34:21 --> 2.7787 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 11:34:21 --> 0.0982 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 11:34:21 --> 3.2783 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 11:34:21 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 11:34:21 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 11:34:21 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:34:21 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:34:21 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 11:34:21 --> Total execution time: 13.7074
DEBUG - 2021-08-05 11:34:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 11:34:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 11:34:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 11:34:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 11:34:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 11:34:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:34:25 --> 0.0855 | INSERT INTO `csvexportlog` (`export_status`, `filter_col`, `created_datetime`) VALUES (0, 'null', '2021-08-05 11:34:25')
DEBUG - 2021-08-05 11:34:25 --> Total execution time: 0.1570
DEBUG - 2021-08-05 11:34:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 11:34:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 11:34:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 11:34:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 11:34:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 11:34:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:34:40 --> 3.2659 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 11:34:40 --> 0.0521 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 11:34:40 --> 2.4256 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 11:34:40 --> 3.0999 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 11:34:40 --> 3.6337 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 11:34:40 --> 0.0514 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 11:34:40 --> 2.5589 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 11:34:40 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 11:34:40 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 11:34:40 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:34:40 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:34:40 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 11:34:40 --> Total execution time: 15.1667
DEBUG - 2021-08-05 11:34:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 11:34:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 11:34:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 11:34:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 11:34:51 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 11:35:05 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:35:05 --> 3.2033 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 11:35:05 --> 0.0521 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 11:35:05 --> 2.5708 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 11:35:05 --> 2.4546 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 11:35:05 --> 2.6 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 11:35:05 --> 0.0523 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 11:35:05 --> 2.503 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 11:35:05 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 11:35:05 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 11:35:05 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:35:05 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:35:05 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 11:35:05 --> Total execution time: 13.5142
DEBUG - 2021-08-05 11:35:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 11:35:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 11:35:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 11:35:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 11:35:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 11:35:20 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:35:20 --> 0.0861 | INSERT INTO `csvexportlog` (`export_status`, `filter_col`, `created_datetime`) VALUES (0, 'null', '2021-08-05 11:35:20')
DEBUG - 2021-08-05 11:35:20 --> Total execution time: 0.1564
DEBUG - 2021-08-05 11:35:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 11:35:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 11:35:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 11:35:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 11:35:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 11:35:35 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:35:35 --> 2.8549 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 11:35:35 --> 0.0511 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 11:35:35 --> 3.7037 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 11:35:35 --> 2.7111 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 11:35:35 --> 2.7669 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 11:35:35 --> 0.0516 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 11:35:35 --> 2.8259 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 11:35:35 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 11:35:35 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 11:35:35 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:35:35 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:35:35 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 11:35:35 --> Total execution time: 15.0561
DEBUG - 2021-08-05 11:35:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 11:35:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 11:35:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 11:35:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 11:35:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 11:36:12 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:36:12 --> 2.5255 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 11:36:12 --> 0.052 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 11:36:12 --> 2.6366 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 11:36:12 --> 3.2667 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 11:36:12 --> 3.095 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 11:36:12 --> 0.046 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 11:36:12 --> 2.5251 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 11:36:12 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 11:36:12 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 11:36:12 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:36:12 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:36:12 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 11:36:12 --> Total execution time: 14.2224
DEBUG - 2021-08-05 11:36:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 11:36:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 11:36:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 11:36:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 11:36:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 11:36:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:36:15 --> 0.1011 | INSERT INTO `csvexportlog` (`export_status`, `filter_col`, `created_datetime`) VALUES (0, 'null', '2021-08-05 11:36:15')
DEBUG - 2021-08-05 11:36:15 --> Total execution time: 0.1873
DEBUG - 2021-08-05 11:36:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 11:36:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 11:36:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 11:36:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 11:36:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 11:36:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:36:29 --> 3.0474 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 11:36:29 --> 0.0516 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 11:36:29 --> 2.4707 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 11:36:29 --> 2.9442 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 11:36:29 --> 3.0222 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 11:36:29 --> 0.0519 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 11:36:29 --> 2.4814 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 11:36:29 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 11:36:29 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 11:36:29 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:36:29 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:36:29 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 11:36:29 --> Total execution time: 14.1424
DEBUG - 2021-08-05 11:54:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 11:54:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 11:54:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 11:54:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 11:54:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 11:54:36 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:54:36 --> 3.0979 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 11:54:36 --> 0.0517 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 11:54:36 --> 2.5149 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 11:54:36 --> 2.4555 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 11:54:36 --> 2.7111 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 11:54:36 --> 0.0522 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 11:54:36 --> 2.3476 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 11:54:36 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 11:54:36 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 11:54:36 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:54:36 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:54:36 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 11:54:36 --> Total execution time: 13.3209
DEBUG - 2021-08-05 11:54:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 11:54:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 11:54:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 11:54:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 11:54:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 11:54:56 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:54:56 --> 2.8148 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 11:54:56 --> 0.052 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 11:54:56 --> 2.7699 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 11:54:56 --> 2.8222 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 11:54:56 --> 3.0778 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 11:54:56 --> 0.0522 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 11:54:56 --> 2.3365 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 11:54:56 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 11:54:56 --> 0.001 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 11:54:56 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:54:56 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:54:56 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 11:54:56 --> Total execution time: 14.0016
DEBUG - 2021-08-05 11:55:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 11:55:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 11:55:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 11:55:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 11:55:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 11:55:43 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:55:43 --> 2.6317 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 11:55:43 --> 0.0518 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 11:55:43 --> 2.4702 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 11:55:43 --> 2.3 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 11:55:43 --> 2.7232 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 11:55:43 --> 0.051 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 11:55:43 --> 2.3366 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 11:55:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 11:55:43 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 11:55:43 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:55:43 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:55:43 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 11:55:43 --> Total execution time: 12.6493
DEBUG - 2021-08-05 11:55:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 11:55:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 11:55:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 11:55:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 11:55:50 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 11:55:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 11:55:50 --> Global POST, GET and COOKIE data sanitized
QUERY - 2021-08-05 11:55:50 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:55:50 --> 0.0286 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 11:55:50 --> 0.0009 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 11:55:50 --> 0.0008 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:55:50 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:55:50 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 11:55:50 --> Total execution time: 0.1070
DEBUG - 2021-08-05 11:55:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 11:55:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 11:55:50 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 11:55:50 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:55:50 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 11:55:50 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 11:55:50 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:55:50 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:55:50 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 11:55:50 --> Total execution time: 0.0849
DEBUG - 2021-08-05 11:55:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 11:55:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 11:55:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 11:55:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 11:55:56 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 11:56:24 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-05 11:56:37 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:56:37 --> 28.11 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-05 11:56:37 --> 0.0336 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-05 11:56:37 --> 2.6308 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 11:56:37 --> 0.052 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 11:56:37 --> 2.4588 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 11:56:37 --> 2.4889 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 11:56:37 --> 2.555 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 11:56:37 --> 0.0525 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 11:56:37 --> 2.7032 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 11:56:37 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 11:56:37 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:56:37 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 11:56:37 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 11:56:37 --> Total execution time: 41.1673
DEBUG - 2021-08-05 12:01:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 12:01:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 12:01:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 12:01:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 12:01:22 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 12:01:50 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-05 12:02:03 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:02:03 --> 27.9799 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-05 12:02:03 --> 0.0329 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-05 12:02:03 --> 2.4848 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 12:02:03 --> 0.0514 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 12:02:03 --> 2.4835 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 12:02:03 --> 2.8094 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:02:03 --> 2.3666 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:02:03 --> 0.0521 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 12:02:03 --> 2.7363 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 12:02:03 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 12:02:03 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:02:03 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:02:03 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 12:02:03 --> Total execution time: 41.0984
DEBUG - 2021-08-05 12:02:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 12:02:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 12:02:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 12:02:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 12:02:07 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 12:02:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 12:02:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 12:02:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 12:02:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 12:02:07 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 12:02:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 12:02:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 12:02:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 12:02:10 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-05 12:02:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:02:25 --> 2.7111 | SELECT COUNT(*) AS `numrows` FROM `gpi_data` WHERE `consumer_number` LIKE '%%' ESCAPE '!' AND  `circle` LIKE '%%' ESCAPE '!' AND  `year` LIKE '%%' ESCAPE '!' AND  `state` LIKE '%%' ESCAPE '!' AND  `franchise_brand` LIKE '%%' ESCAPE '!' AND  `acting_brand` LIKE '%%' ESCAPE '!' AND  `campaign_name` LIKE '%%' ESCAPE '!'
QUERY - 2021-08-05 12:02:25 --> 0.0229 | SELECT * FROM `gpi_data` WHERE `consumer_number` LIKE '%%' ESCAPE '!' AND  `circle` LIKE '%%' ESCAPE '!' AND  `year` LIKE '%%' ESCAPE '!' AND  `state` LIKE '%%' ESCAPE '!' AND  `franchise_brand` LIKE '%%' ESCAPE '!' AND  `acting_brand` LIKE '%%' ESCAPE '!' AND  `campaign_name` LIKE '%%' ESCAPE '!' ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-05 12:02:25 --> 2.7519 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 12:02:25 --> 0.0738 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 12:02:25 --> 3.6707 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 12:02:25 --> 3.4111 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:02:25 --> 2.4 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:02:25 --> 0.0523 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 12:02:25 --> 2.7475 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 12:02:25 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 12:02:25 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:02:25 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:02:25 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 12:02:25 --> Total execution time: 17.9185
DEBUG - 2021-08-05 12:02:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 12:02:25 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 12:02:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 12:02:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 12:02:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 12:02:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 12:02:25 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 12:02:28 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-05 12:02:42 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:02:42 --> 2.9029 | SELECT COUNT(*) AS `numrows` FROM `gpi_data` WHERE `consumer_number` LIKE '%%' ESCAPE '!' AND  `circle` LIKE '%%' ESCAPE '!' AND  `year` LIKE '%%' ESCAPE '!' AND  `state` LIKE '%%' ESCAPE '!' AND  `franchise_brand` LIKE '%%' ESCAPE '!' AND  `acting_brand` LIKE '%%' ESCAPE '!' AND  `campaign_name` LIKE '%%' ESCAPE '!'
QUERY - 2021-08-05 12:02:42 --> 0.0532 | SELECT * FROM `gpi_data` WHERE `consumer_number` LIKE '%%' ESCAPE '!' AND  `circle` LIKE '%%' ESCAPE '!' AND  `year` LIKE '%%' ESCAPE '!' AND  `state` LIKE '%%' ESCAPE '!' AND  `franchise_brand` LIKE '%%' ESCAPE '!' AND  `acting_brand` LIKE '%%' ESCAPE '!' AND  `campaign_name` LIKE '%%' ESCAPE '!' ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-05 12:02:42 --> 3.4726 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 12:02:42 --> 0.0519 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 12:02:42 --> 2.7702 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 12:02:42 --> 2.411 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:02:42 --> 2.3778 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:02:42 --> 0.0519 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 12:02:42 --> 2.4145 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 12:02:42 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 12:02:42 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:02:42 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:02:42 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 12:02:42 --> Total execution time: 16.5932
DEBUG - 2021-08-05 12:07:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 12:07:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 12:07:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 12:07:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 12:07:55 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 12:08:24 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-05 12:08:42 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:08:42 --> 29.2529 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-05 12:08:42 --> 0.0339 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-05 12:08:42 --> 3.9532 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 12:08:42 --> 0.0491 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 12:08:42 --> 3.1905 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 12:08:42 --> 4.2525 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:08:42 --> 3.6868 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:08:42 --> 0.0593 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 12:08:42 --> 3.0038 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 12:08:42 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 12:08:42 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:08:42 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:08:42 --> 0.0006 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 12:08:42 --> Total execution time: 47.5668
DEBUG - 2021-08-05 12:11:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 12:11:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 12:11:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 12:11:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 12:11:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 12:11:10 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:11:10 --> 0.0247 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 12:11:10 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 12:11:10 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:11:10 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:11:10 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 12:11:10 --> Total execution time: 0.0963
DEBUG - 2021-08-05 12:11:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 12:11:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 12:11:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 12:11:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 12:11:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 12:11:10 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:11:10 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 12:11:10 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 12:11:10 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:11:10 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:11:10 --> 0.0002 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 12:11:10 --> Total execution time: 0.0675
DEBUG - 2021-08-05 12:11:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 12:11:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 12:11:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 12:11:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 12:11:11 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 12:11:25 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:11:25 --> 2.5023 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 12:11:25 --> 0.0513 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 12:11:25 --> 3.3052 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 12:11:25 --> 2.8025 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:11:25 --> 3.0628 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:11:25 --> 0.0523 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 12:11:25 --> 2.3921 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 12:11:25 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 12:11:25 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 12:11:25 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:11:25 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:11:25 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 12:11:25 --> Total execution time: 14.2422
DEBUG - 2021-08-05 12:12:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 12:12:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 12:12:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 12:12:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 12:12:12 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 12:12:12 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:12:12 --> 0.0237 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 12:12:12 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 12:12:12 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:12:12 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:12:12 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 12:12:12 --> Total execution time: 0.1014
DEBUG - 2021-08-05 12:12:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 12:12:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 12:12:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 12:12:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 12:12:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 12:12:28 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:12:28 --> 2.3885 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 12:12:28 --> 0.0518 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 12:12:28 --> 2.7255 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 12:12:28 --> 2.7665 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:12:28 --> 3.0334 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:12:28 --> 0.0525 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 12:12:28 --> 2.5472 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 12:12:28 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 12:12:28 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 12:12:28 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:12:28 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:12:28 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 12:12:28 --> Total execution time: 13.6445
DEBUG - 2021-08-05 12:16:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 12:16:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 12:16:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 12:16:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 12:16:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 12:16:42 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:16:42 --> 2.4093 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 12:16:42 --> 0.0519 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 12:16:42 --> 2.6033 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 12:16:42 --> 2.3666 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:16:42 --> 2.8803 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:16:42 --> 0.0496 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 12:16:42 --> 2.3364 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 12:16:42 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 12:16:42 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 12:16:42 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:16:42 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:16:42 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 12:16:42 --> Total execution time: 12.7785
DEBUG - 2021-08-05 12:16:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 12:16:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 12:16:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 12:16:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 12:16:47 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 12:16:47 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:16:47 --> 0.0432 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 12:16:47 --> 0.0012 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 12:16:47 --> 0.0009 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:16:47 --> 0.001 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:16:47 --> 0.0011 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 12:16:47 --> Total execution time: 0.1435
DEBUG - 2021-08-05 12:16:49 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 12:16:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 12:16:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 12:16:49 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 12:16:49 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 12:17:18 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-05 12:17:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:17:31 --> 28.9085 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-05 12:17:31 --> 0.0233 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-05 12:17:31 --> 2.7102 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 12:17:31 --> 0.0515 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 12:17:31 --> 2.304 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 12:17:31 --> 2.5111 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:17:31 --> 2.3786 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:17:31 --> 0.0508 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 12:17:31 --> 2.7927 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 12:17:31 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 12:17:31 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:17:31 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:17:31 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 12:17:31 --> Total execution time: 41.8018
DEBUG - 2021-08-05 12:19:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 12:19:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 12:19:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 12:19:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 12:19:03 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 12:19:30 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-05 12:19:43 --> 0.0008 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:19:43 --> 27.5354 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-05 12:19:43 --> 0.034 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-05 12:19:43 --> 2.4297 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 12:19:43 --> 0.0522 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 12:19:43 --> 2.5254 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 12:19:43 --> 2.3668 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:19:43 --> 2.3442 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:19:43 --> 0.0524 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 12:19:43 --> 2.7029 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 12:19:43 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 12:19:43 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:19:43 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:19:43 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 12:19:43 --> Total execution time: 40.1309
DEBUG - 2021-08-05 12:19:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 12:19:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 12:19:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 12:19:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 12:19:46 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 12:20:16 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-05 12:20:30 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:20:30 --> 29.6513 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-05 12:20:30 --> 0.0338 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-05 12:20:30 --> 3.6074 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 12:20:30 --> 0.0519 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 12:20:30 --> 2.559 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 12:20:30 --> 2.4333 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:20:30 --> 2.5889 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:20:30 --> 0.0522 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 12:20:30 --> 2.4586 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 12:20:30 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 12:20:30 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:20:30 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:20:30 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 12:20:30 --> Total execution time: 43.5253
DEBUG - 2021-08-05 12:20:32 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 12:20:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 12:20:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 12:20:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 12:20:32 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 12:20:32 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:20:32 --> 0.0394 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 12:20:32 --> 0.0012 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 12:20:32 --> 0.0011 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:20:32 --> 0.001 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:20:32 --> 0.0014 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 12:20:32 --> Total execution time: 0.1325
DEBUG - 2021-08-05 12:20:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 12:20:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 12:20:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 12:20:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 12:20:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 12:20:49 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:20:49 --> 3.0952 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 12:20:49 --> 0.0514 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 12:20:49 --> 2.8063 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 12:20:49 --> 3.1198 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:20:49 --> 2.8111 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:20:49 --> 0.0524 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 12:20:49 --> 3.7063 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 12:20:49 --> 0.0011 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 12:20:49 --> 0.0011 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 12:20:49 --> 0.001 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:20:49 --> 0.0009 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:20:49 --> 0.0009 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 12:20:49 --> Total execution time: 15.7425
DEBUG - 2021-08-05 12:20:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 12:20:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 12:20:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 12:20:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 12:20:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 12:20:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:20:58 --> 0.0309 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 12:20:58 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 12:20:58 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:20:58 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:20:58 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 12:20:58 --> Total execution time: 0.1006
DEBUG - 2021-08-05 12:21:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 12:21:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 12:21:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 12:21:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 12:21:00 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 12:21:29 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-05 12:21:42 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:21:42 --> 28.4241 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-05 12:21:42 --> 0.0337 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-05 12:21:42 --> 2.5188 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 12:21:42 --> 0.1073 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 12:21:42 --> 2.5144 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 12:21:42 --> 2.4446 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:21:42 --> 2.7775 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:21:42 --> 0.0523 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 12:21:42 --> 2.692 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 12:21:42 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 12:21:42 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:21:42 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:21:42 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 12:21:42 --> Total execution time: 41.6401
DEBUG - 2021-08-05 12:21:49 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 12:21:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 12:21:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 12:21:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 12:21:50 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 12:21:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 12:21:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 12:21:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 12:21:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 12:21:50 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 12:21:53 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-05 12:22:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:22:08 --> 3.0953 | SELECT COUNT(*) AS `numrows` FROM `gpi_data` WHERE `consumer_number` LIKE '%%' ESCAPE '!' AND  `circle` LIKE '%%' ESCAPE '!' AND  `year` LIKE '%%' ESCAPE '!' AND  `state` LIKE '%%' ESCAPE '!' AND  `franchise_brand` LIKE '%%' ESCAPE '!' AND  `acting_brand` LIKE '%%' ESCAPE '!' AND  `campaign_name` LIKE '%%' ESCAPE '!'
QUERY - 2021-08-05 12:22:08 --> 0.0196 | SELECT * FROM `gpi_data` WHERE `consumer_number` LIKE '%%' ESCAPE '!' AND  `circle` LIKE '%%' ESCAPE '!' AND  `year` LIKE '%%' ESCAPE '!' AND  `state` LIKE '%%' ESCAPE '!' AND  `franchise_brand` LIKE '%%' ESCAPE '!' AND  `acting_brand` LIKE '%%' ESCAPE '!' AND  `campaign_name` LIKE '%%' ESCAPE '!' ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-05 12:22:08 --> 3.2852 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 12:22:08 --> 0.0521 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 12:22:08 --> 2.6365 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 12:22:08 --> 2.5221 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:22:08 --> 3.1134 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:22:08 --> 0.0493 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 12:22:08 --> 3.1491 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 12:22:08 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 12:22:08 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:22:08 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:22:08 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 12:22:08 --> Total execution time: 18.0266
DEBUG - 2021-08-05 12:22:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 12:22:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 12:22:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 12:22:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 12:22:13 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 12:22:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 12:22:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 12:22:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 12:22:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 12:22:13 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 12:22:16 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-05 12:22:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:22:31 --> 3.5442 | SELECT COUNT(*) AS `numrows` FROM `gpi_data` WHERE `consumer_number` LIKE '%%' ESCAPE '!' AND  `circle` LIKE '%%' ESCAPE '!' AND  `year` LIKE '%%' ESCAPE '!' AND  `state` LIKE '%%' ESCAPE '!' AND  `franchise_brand` LIKE '%%' ESCAPE '!' AND  `acting_brand` LIKE '%%' ESCAPE '!' AND  `campaign_name` LIKE '%%' ESCAPE '!'
QUERY - 2021-08-05 12:22:31 --> 0.0179 | SELECT * FROM `gpi_data` WHERE `consumer_number` LIKE '%%' ESCAPE '!' AND  `circle` LIKE '%%' ESCAPE '!' AND  `year` LIKE '%%' ESCAPE '!' AND  `state` LIKE '%%' ESCAPE '!' AND  `franchise_brand` LIKE '%%' ESCAPE '!' AND  `acting_brand` LIKE '%%' ESCAPE '!' AND  `campaign_name` LIKE '%%' ESCAPE '!' ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-05 12:22:31 --> 3.0187 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 12:22:31 --> 0.0515 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 12:22:31 --> 2.7157 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 12:22:31 --> 2.7272 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:22:31 --> 2.5388 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:22:31 --> 0.0517 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 12:22:31 --> 3.2149 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 12:22:31 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 12:22:31 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:22:31 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:22:31 --> 0.0002 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 12:22:31 --> Total execution time: 17.9601
DEBUG - 2021-08-05 12:24:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 12:24:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 12:24:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 12:24:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 12:24:38 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 12:24:41 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-05 12:24:55 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:24:55 --> 3.2899 | SELECT COUNT(*) AS `numrows` FROM `gpi_data` WHERE `consumer_number` LIKE '%%' ESCAPE '!' AND  `circle` LIKE '%%' ESCAPE '!' AND  `year` LIKE '%%' ESCAPE '!' AND  `state` LIKE '%%' ESCAPE '!' AND  `franchise_brand` LIKE '%%' ESCAPE '!' AND  `acting_brand` LIKE '%%' ESCAPE '!' AND  `campaign_name` LIKE '%%' ESCAPE '!'
QUERY - 2021-08-05 12:24:55 --> 0.0205 | SELECT * FROM `gpi_data` WHERE `consumer_number` LIKE '%%' ESCAPE '!' AND  `circle` LIKE '%%' ESCAPE '!' AND  `year` LIKE '%%' ESCAPE '!' AND  `state` LIKE '%%' ESCAPE '!' AND  `franchise_brand` LIKE '%%' ESCAPE '!' AND  `acting_brand` LIKE '%%' ESCAPE '!' AND  `campaign_name` LIKE '%%' ESCAPE '!' ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-05 12:24:55 --> 2.5642 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 12:24:55 --> 0.0504 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 12:24:55 --> 2.6262 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 12:24:55 --> 2.9225 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:24:55 --> 2.6554 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:24:55 --> 0.0522 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 12:24:55 --> 2.6808 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 12:24:55 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 12:24:55 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:24:55 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:24:55 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 12:24:55 --> Total execution time: 16.9432
DEBUG - 2021-08-05 12:24:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 12:24:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 12:24:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 12:24:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 12:24:58 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 12:24:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 12:24:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 12:24:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 12:24:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 12:24:58 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 12:25:01 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-05 12:25:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:25:15 --> 2.8674 | SELECT COUNT(*) AS `numrows` FROM `gpi_data` WHERE `consumer_number` LIKE '%%' ESCAPE '!' AND  `circle` LIKE '%%' ESCAPE '!' AND  `year` LIKE '%%' ESCAPE '!' AND  `state` LIKE '%%' ESCAPE '!' AND  `franchise_brand` LIKE '%%' ESCAPE '!' AND  `acting_brand` LIKE '%%' ESCAPE '!' AND  `campaign_name` LIKE '%%' ESCAPE '!'
QUERY - 2021-08-05 12:25:15 --> 0.0212 | SELECT * FROM `gpi_data` WHERE `consumer_number` LIKE '%%' ESCAPE '!' AND  `circle` LIKE '%%' ESCAPE '!' AND  `year` LIKE '%%' ESCAPE '!' AND  `state` LIKE '%%' ESCAPE '!' AND  `franchise_brand` LIKE '%%' ESCAPE '!' AND  `acting_brand` LIKE '%%' ESCAPE '!' AND  `campaign_name` LIKE '%%' ESCAPE '!' ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-05 12:25:15 --> 2.7988 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 12:25:15 --> 0.0489 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 12:25:15 --> 3.1605 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 12:25:15 --> 2.5783 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:25:15 --> 2.3763 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:25:15 --> 0.0517 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 12:25:15 --> 3.0282 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 12:25:15 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 12:25:15 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:25:15 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:25:15 --> 0.0002 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 12:25:15 --> Total execution time: 17.0111
DEBUG - 2021-08-05 12:26:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 12:26:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 12:26:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 12:26:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 12:26:38 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 12:26:41 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-05 12:26:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:26:54 --> 2.8265 | SELECT COUNT(*) AS `numrows` FROM `gpi_data` WHERE `consumer_number` LIKE '%%' ESCAPE '!' AND  `circle` LIKE '%%' ESCAPE '!' AND  `year` LIKE '%%' ESCAPE '!' AND  `state` LIKE '%%' ESCAPE '!' AND  `franchise_brand` LIKE '%%' ESCAPE '!' AND  `acting_brand` LIKE '%%' ESCAPE '!' AND  `campaign_name` LIKE '%%' ESCAPE '!'
QUERY - 2021-08-05 12:26:54 --> 0.0194 | SELECT * FROM `gpi_data` WHERE `consumer_number` LIKE '%%' ESCAPE '!' AND  `circle` LIKE '%%' ESCAPE '!' AND  `year` LIKE '%%' ESCAPE '!' AND  `state` LIKE '%%' ESCAPE '!' AND  `franchise_brand` LIKE '%%' ESCAPE '!' AND  `acting_brand` LIKE '%%' ESCAPE '!' AND  `campaign_name` LIKE '%%' ESCAPE '!' ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-05 12:26:54 --> 2.4208 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 12:26:54 --> 0.0496 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 12:26:54 --> 2.4507 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 12:26:54 --> 2.5973 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:26:54 --> 2.4445 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:26:54 --> 0.0525 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 12:26:54 --> 3.2696 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 12:26:54 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 12:26:54 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:26:54 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:26:54 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 12:26:54 --> Total execution time: 16.2156
DEBUG - 2021-08-05 12:27:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 12:27:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 12:27:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 12:27:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 12:27:05 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 12:27:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 12:27:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 12:27:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 12:27:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 12:27:05 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 12:27:09 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-05 12:27:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:27:24 --> 4.1432 | SELECT COUNT(*) AS `numrows` FROM `gpi_data` WHERE `consumer_number` LIKE '%%' ESCAPE '!' AND  `circle` LIKE '%%' ESCAPE '!' AND  `year` LIKE '%%' ESCAPE '!' AND  `state` LIKE '%%' ESCAPE '!' AND  `franchise_brand` LIKE '%%' ESCAPE '!' AND  `acting_brand` LIKE '%%' ESCAPE '!' AND  `campaign_name` LIKE '%%' ESCAPE '!'
QUERY - 2021-08-05 12:27:24 --> 0.0212 | SELECT * FROM `gpi_data` WHERE `consumer_number` LIKE '%%' ESCAPE '!' AND  `circle` LIKE '%%' ESCAPE '!' AND  `year` LIKE '%%' ESCAPE '!' AND  `state` LIKE '%%' ESCAPE '!' AND  `franchise_brand` LIKE '%%' ESCAPE '!' AND  `acting_brand` LIKE '%%' ESCAPE '!' AND  `campaign_name` LIKE '%%' ESCAPE '!' ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-05 12:27:24 --> 3.5848 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 12:27:24 --> 0.0535 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 12:27:24 --> 3.0273 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 12:27:24 --> 2.3865 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:27:24 --> 2.3541 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:27:24 --> 0.0521 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 12:27:24 --> 2.6699 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 12:27:24 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 12:27:24 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:27:24 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:27:24 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 12:27:24 --> Total execution time: 18.3905
DEBUG - 2021-08-05 12:28:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 12:28:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 12:28:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 12:28:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 12:28:45 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 12:28:48 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-05 12:29:01 --> 0.001 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:29:01 --> 3.1996 | SELECT COUNT(*) AS `numrows` FROM `gpi_data` WHERE `consumer_number` LIKE '%%' ESCAPE '!' AND  `circle` LIKE '%%' ESCAPE '!' AND  `year` LIKE '%%' ESCAPE '!' AND  `state` LIKE '%%' ESCAPE '!' AND  `franchise_brand` LIKE '%%' ESCAPE '!' AND  `acting_brand` LIKE '%%' ESCAPE '!' AND  `campaign_name` LIKE '%%' ESCAPE '!'
QUERY - 2021-08-05 12:29:01 --> 0.0203 | SELECT * FROM `gpi_data` WHERE `consumer_number` LIKE '%%' ESCAPE '!' AND  `circle` LIKE '%%' ESCAPE '!' AND  `year` LIKE '%%' ESCAPE '!' AND  `state` LIKE '%%' ESCAPE '!' AND  `franchise_brand` LIKE '%%' ESCAPE '!' AND  `acting_brand` LIKE '%%' ESCAPE '!' AND  `campaign_name` LIKE '%%' ESCAPE '!' ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-05 12:29:01 --> 2.3293 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 12:29:01 --> 0.0515 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 12:29:01 --> 2.5595 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 12:29:01 --> 2.8555 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:29:01 --> 2.8334 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:29:01 --> 0.0523 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 12:29:01 --> 2.6254 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 12:29:01 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 12:29:01 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:29:01 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:29:01 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 12:29:01 --> Total execution time: 16.6034
DEBUG - 2021-08-05 12:31:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 12:31:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 12:31:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 12:31:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 12:31:33 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 12:31:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 12:31:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 12:31:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 12:31:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 12:31:33 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 12:31:37 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-05 12:31:49 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:31:49 --> 3.0739 | SELECT COUNT(*) AS `numrows` FROM `gpi_data` WHERE `consumer_number` LIKE '%%' ESCAPE '!' AND  `circle` LIKE '%%' ESCAPE '!' AND  `year` LIKE '%%' ESCAPE '!' AND  `state` LIKE '%%' ESCAPE '!' AND  `franchise_brand` LIKE '%%' ESCAPE '!' AND  `acting_brand` LIKE '%%' ESCAPE '!' AND  `campaign_name` LIKE '%%' ESCAPE '!'
QUERY - 2021-08-05 12:31:49 --> 0.0231 | SELECT * FROM `gpi_data` WHERE `consumer_number` LIKE '%%' ESCAPE '!' AND  `circle` LIKE '%%' ESCAPE '!' AND  `year` LIKE '%%' ESCAPE '!' AND  `state` LIKE '%%' ESCAPE '!' AND  `franchise_brand` LIKE '%%' ESCAPE '!' AND  `acting_brand` LIKE '%%' ESCAPE '!' AND  `campaign_name` LIKE '%%' ESCAPE '!' ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-05 12:31:49 --> 2.3739 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 12:31:49 --> 0.0515 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 12:31:49 --> 2.4595 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 12:31:49 --> 3.1666 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:31:49 --> 2.3445 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:31:49 --> 0.0522 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 12:31:49 --> 2.371 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 12:31:49 --> 0.0021 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 12:31:49 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:31:49 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:31:49 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 12:31:49 --> Total execution time: 16.0060
DEBUG - 2021-08-05 12:32:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 12:32:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 12:32:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 12:32:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 12:32:14 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 12:32:18 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-05 12:32:30 --> 0.0008 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:32:30 --> 3.9788 | SELECT COUNT(*) AS `numrows` FROM `gpi_data` WHERE `consumer_number` LIKE '%%' ESCAPE '!' AND  `circle` LIKE '%%' ESCAPE '!' AND  `year` LIKE '%%' ESCAPE '!' AND  `state` LIKE '%%' ESCAPE '!' AND  `franchise_brand` LIKE '%%' ESCAPE '!' AND  `acting_brand` LIKE '%%' ESCAPE '!' AND  `campaign_name` LIKE '%%' ESCAPE '!'
QUERY - 2021-08-05 12:32:30 --> 0.0233 | SELECT * FROM `gpi_data` WHERE `consumer_number` LIKE '%%' ESCAPE '!' AND  `circle` LIKE '%%' ESCAPE '!' AND  `year` LIKE '%%' ESCAPE '!' AND  `state` LIKE '%%' ESCAPE '!' AND  `franchise_brand` LIKE '%%' ESCAPE '!' AND  `acting_brand` LIKE '%%' ESCAPE '!' AND  `campaign_name` LIKE '%%' ESCAPE '!' ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-05 12:32:30 --> 2.3185 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 12:32:30 --> 0.0517 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 12:32:30 --> 2.5815 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 12:32:30 --> 2.49 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:32:30 --> 2.3877 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:32:30 --> 0.0518 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 12:32:30 --> 2.3814 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 12:32:30 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 12:32:30 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:32:30 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:32:30 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 12:32:30 --> Total execution time: 16.3672
DEBUG - 2021-08-05 12:34:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 12:34:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 12:34:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 12:34:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 12:34:21 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 12:34:47 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-05 12:35:00 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:35:00 --> 25.8161 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-05 12:35:00 --> 0.0335 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-05 12:35:00 --> 3.0098 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 12:35:00 --> 0.0516 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 12:35:00 --> 2.5149 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 12:35:00 --> 2.4889 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:35:00 --> 2.2888 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:35:00 --> 0.0524 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 12:35:00 --> 2.4361 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 12:35:00 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 12:35:00 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:35:00 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:35:00 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 12:35:00 --> Total execution time: 38.7918
DEBUG - 2021-08-05 12:36:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 12:36:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 12:36:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 12:36:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 12:36:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 12:36:46 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:36:46 --> 0.0237 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 12:36:46 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 12:36:46 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:36:46 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:36:46 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 12:36:46 --> Total execution time: 0.0991
DEBUG - 2021-08-05 12:36:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 12:36:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 12:36:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 12:36:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 12:36:48 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 12:37:03 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:37:03 --> 2.6602 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 12:37:03 --> 0.0512 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 12:37:03 --> 2.9598 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 12:37:03 --> 2.8665 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:37:03 --> 2.5891 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:37:03 --> 0.0514 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 12:37:03 --> 3.5506 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 12:37:03 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 12:37:03 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 12:37:03 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:37:03 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:37:03 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 12:37:03 --> Total execution time: 14.8080
DEBUG - 2021-08-05 12:38:49 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 12:38:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 12:38:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 12:38:49 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 12:38:49 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 12:38:49 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:38:49 --> 0.0927 | INSERT INTO `csvexportlog` (`export_status`, `filter_col`, `created_datetime`) VALUES (0, 'null', '2021-08-05 12:38:49')
DEBUG - 2021-08-05 12:38:49 --> Total execution time: 0.1930
DEBUG - 2021-08-05 12:38:49 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 12:38:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 12:38:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 12:38:49 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 12:38:49 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 12:39:02 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:39:02 --> 2.5376 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 12:39:02 --> 0.052 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 12:39:02 --> 2.6033 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 12:39:02 --> 2.4333 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:39:02 --> 2.8778 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:39:02 --> 0.0517 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 12:39:02 --> 2.3815 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 12:39:02 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 12:39:02 --> 0.0007 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 12:39:02 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:39:02 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:39:02 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 12:39:02 --> Total execution time: 13.0283
DEBUG - 2021-08-05 12:39:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 12:39:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 12:39:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 12:39:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 12:39:48 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 12:39:48 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:39:48 --> 0.0156 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 12:39:48 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 12:39:48 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:39:48 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:39:48 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 12:39:48 --> Total execution time: 0.1018
DEBUG - 2021-08-05 12:42:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 12:42:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 12:42:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 12:42:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 12:42:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 12:42:28 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:42:28 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 12:42:28 --> 0.0007 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 12:42:28 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:42:28 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:42:28 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 12:42:28 --> Total execution time: 0.0917
DEBUG - 2021-08-05 12:42:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 12:42:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 12:42:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 12:42:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 12:42:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 12:42:45 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:42:45 --> 2.3696 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 12:42:45 --> 0.05 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 12:42:45 --> 2.8259 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 12:42:45 --> 2.6333 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:42:45 --> 2.5666 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:42:45 --> 0.0521 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 12:42:45 --> 2.5816 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 12:42:45 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 12:42:45 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 12:42:45 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:42:45 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:42:45 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 12:42:45 --> Total execution time: 13.1695
DEBUG - 2021-08-05 12:42:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 12:42:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 12:42:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 12:42:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 12:42:48 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 12:42:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 12:42:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 12:42:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 12:43:15 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-05 12:43:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:43:28 --> 27.3191 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-05 12:43:28 --> 0.0338 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-05 12:43:28 --> 2.4199 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 12:43:28 --> 0.0516 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 12:43:28 --> 2.8595 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 12:43:28 --> 2.2888 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:43:28 --> 2.4111 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:43:28 --> 0.0517 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 12:43:28 --> 2.6371 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 12:43:28 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 12:43:28 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:43:28 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:43:28 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 12:43:28 --> Total execution time: 40.1547
DEBUG - 2021-08-05 12:43:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 12:43:28 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 12:43:55 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-05 12:44:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:44:10 --> 27.2164 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-05 12:44:10 --> 0.0233 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-05 12:44:10 --> 2.7449 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 12:44:10 --> 0.0491 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 12:44:10 --> 3.1154 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 12:44:10 --> 2.5442 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:44:10 --> 2.6222 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:44:10 --> 0.052 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 12:44:10 --> 3.3145 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 12:44:10 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 12:44:10 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:44:10 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:44:10 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 12:44:10 --> Total execution time: 81.6706
DEBUG - 2021-08-05 12:44:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 12:44:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 12:44:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 12:44:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 12:44:13 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 12:44:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 12:44:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 12:44:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 12:44:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 12:44:13 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 12:44:17 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-05 12:44:30 --> 0.002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:44:30 --> 3.0028 | SELECT COUNT(*) AS `numrows` FROM `gpi_data` WHERE `consumer_number` LIKE '%%' ESCAPE '!' AND  `circle` LIKE '%%' ESCAPE '!' AND  `year` LIKE '%%' ESCAPE '!' AND  `state` LIKE '%%' ESCAPE '!' AND  `franchise_brand` LIKE '%%' ESCAPE '!' AND  `acting_brand` LIKE '%%' ESCAPE '!' AND  `campaign_name` LIKE '%%' ESCAPE '!'
QUERY - 2021-08-05 12:44:30 --> 0.023 | SELECT * FROM `gpi_data` WHERE `consumer_number` LIKE '%%' ESCAPE '!' AND  `circle` LIKE '%%' ESCAPE '!' AND  `year` LIKE '%%' ESCAPE '!' AND  `state` LIKE '%%' ESCAPE '!' AND  `franchise_brand` LIKE '%%' ESCAPE '!' AND  `acting_brand` LIKE '%%' ESCAPE '!' AND  `campaign_name` LIKE '%%' ESCAPE '!' ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-05 12:44:30 --> 2.3188 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 12:44:30 --> 0.0511 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 12:44:30 --> 2.6488 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 12:44:30 --> 2.3329 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:44:30 --> 3.3224 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:44:30 --> 0.0516 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 12:44:30 --> 2.7391 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 12:44:30 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 12:44:30 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:44:30 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:44:30 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 12:44:30 --> Total execution time: 16.5890
DEBUG - 2021-08-05 12:45:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 12:45:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 12:45:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 12:45:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 12:45:53 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 12:45:56 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-05 12:46:11 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:46:11 --> 3.2625 | SELECT COUNT(*) AS `numrows` FROM `gpi_data` WHERE `consumer_number` LIKE '%%' ESCAPE '!' AND  `circle` LIKE '%%' ESCAPE '!' AND  `year` LIKE '%%' ESCAPE '!' AND  `state` LIKE '%%' ESCAPE '!' AND  `franchise_brand` LIKE '%%' ESCAPE '!' AND  `acting_brand` LIKE '%%' ESCAPE '!' AND  `campaign_name` LIKE '%%' ESCAPE '!'
QUERY - 2021-08-05 12:46:11 --> 0.0185 | SELECT * FROM `gpi_data` WHERE `consumer_number` LIKE '%%' ESCAPE '!' AND  `circle` LIKE '%%' ESCAPE '!' AND  `year` LIKE '%%' ESCAPE '!' AND  `state` LIKE '%%' ESCAPE '!' AND  `franchise_brand` LIKE '%%' ESCAPE '!' AND  `acting_brand` LIKE '%%' ESCAPE '!' AND  `campaign_name` LIKE '%%' ESCAPE '!' ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-05 12:46:11 --> 2.43 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 12:46:11 --> 0.0514 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 12:46:11 --> 2.3488 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 12:46:11 --> 2.833 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:46:11 --> 3.1637 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:46:11 --> 0.044 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 12:46:11 --> 3.4922 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 12:46:11 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 12:46:11 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:46:11 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:46:11 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 12:46:11 --> Total execution time: 17.7319
DEBUG - 2021-08-05 12:49:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 12:49:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 12:49:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 12:49:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 12:49:23 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 12:49:26 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-05 12:49:40 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:49:40 --> 3.2426 | SELECT COUNT(*) AS `numrows` FROM `gpi_data` WHERE `consumer_number` LIKE '%%' ESCAPE '!' AND  `circle` LIKE '%%' ESCAPE '!' AND  `year` LIKE '%%' ESCAPE '!' AND  `state` LIKE '%%' ESCAPE '!' AND  `franchise_brand` LIKE '%%' ESCAPE '!' AND  `acting_brand` LIKE '%%' ESCAPE '!' AND  `campaign_name` LIKE '%%' ESCAPE '!'
QUERY - 2021-08-05 12:49:40 --> 0.024 | SELECT * FROM `gpi_data` WHERE `consumer_number` LIKE '%%' ESCAPE '!' AND  `circle` LIKE '%%' ESCAPE '!' AND  `year` LIKE '%%' ESCAPE '!' AND  `state` LIKE '%%' ESCAPE '!' AND  `franchise_brand` LIKE '%%' ESCAPE '!' AND  `acting_brand` LIKE '%%' ESCAPE '!' AND  `campaign_name` LIKE '%%' ESCAPE '!' ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-05 12:49:40 --> 2.5186 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 12:49:40 --> 0.0515 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 12:49:40 --> 2.8266 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 12:49:40 --> 3.233 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:49:40 --> 2.5238 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:49:40 --> 0.0501 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 12:49:40 --> 2.6752 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 12:49:40 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 12:49:40 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:49:40 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:49:40 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 12:49:40 --> Total execution time: 17.2624
DEBUG - 2021-08-05 12:51:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 12:51:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 12:51:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 12:51:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 12:51:44 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 12:51:47 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-05 12:52:00 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:52:00 --> 2.838 | SELECT COUNT(*) AS `numrows` FROM `gpi_data` WHERE `consumer_number` LIKE '%%' ESCAPE '!' AND  `circle` LIKE '%%' ESCAPE '!' AND  `year` LIKE '%%' ESCAPE '!' AND  `state` LIKE '%%' ESCAPE '!' AND  `franchise_brand` LIKE '%%' ESCAPE '!' AND  `acting_brand` LIKE '%%' ESCAPE '!' AND  `campaign_name` LIKE '%%' ESCAPE '!'
QUERY - 2021-08-05 12:52:00 --> 0.019 | SELECT * FROM `gpi_data` WHERE `consumer_number` LIKE '%%' ESCAPE '!' AND  `circle` LIKE '%%' ESCAPE '!' AND  `year` LIKE '%%' ESCAPE '!' AND  `state` LIKE '%%' ESCAPE '!' AND  `franchise_brand` LIKE '%%' ESCAPE '!' AND  `acting_brand` LIKE '%%' ESCAPE '!' AND  `campaign_name` LIKE '%%' ESCAPE '!' ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-05 12:52:00 --> 2.708 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 12:52:00 --> 0.051 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 12:52:00 --> 2.6719 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 12:52:00 --> 2.566 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:52:00 --> 2.2883 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:52:00 --> 0.0517 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 12:52:00 --> 3.3047 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 12:52:00 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 12:52:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:52:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:52:00 --> 0.0006 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 12:52:00 --> Total execution time: 16.5879
DEBUG - 2021-08-05 12:54:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 12:54:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 12:54:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 12:54:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 12:54:00 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 12:54:03 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-05 12:54:17 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:54:17 --> 2.895 | SELECT COUNT(*) AS `numrows` FROM `gpi_data` WHERE `consumer_number` LIKE '%%' ESCAPE '!' AND  `circle` LIKE '%%' ESCAPE '!' AND  `year` LIKE '%%' ESCAPE '!' AND  `state` LIKE '%%' ESCAPE '!' AND  `franchise_brand` LIKE '%%' ESCAPE '!' AND  `acting_brand` LIKE '%%' ESCAPE '!' AND  `campaign_name` LIKE '%%' ESCAPE '!'
QUERY - 2021-08-05 12:54:17 --> 0.0185 | SELECT * FROM `gpi_data` WHERE `consumer_number` LIKE '%%' ESCAPE '!' AND  `circle` LIKE '%%' ESCAPE '!' AND  `year` LIKE '%%' ESCAPE '!' AND  `state` LIKE '%%' ESCAPE '!' AND  `franchise_brand` LIKE '%%' ESCAPE '!' AND  `acting_brand` LIKE '%%' ESCAPE '!' AND  `campaign_name` LIKE '%%' ESCAPE '!' ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-05 12:54:17 --> 2.7631 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 12:54:17 --> 0.0959 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 12:54:17 --> 2.7818 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 12:54:17 --> 3.2888 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:54:17 --> 3.3 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:54:17 --> 0.0518 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 12:54:17 --> 2.3038 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 12:54:17 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 12:54:17 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:54:17 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:54:17 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 12:54:17 --> Total execution time: 17.5865
DEBUG - 2021-08-05 12:58:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 12:58:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 12:58:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 12:58:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 12:58:05 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 12:58:19 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:58:19 --> 3.2319 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 12:58:19 --> 0.0514 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 12:58:19 --> 2.3375 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 12:58:19 --> 2.4109 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:58:19 --> 2.2888 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 12:58:19 --> 0.0516 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 12:58:19 --> 3.0154 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 12:58:19 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 12:58:19 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 12:58:19 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:58:19 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 12:58:19 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 12:58:19 --> Total execution time: 13.4863
DEBUG - 2021-08-05 13:17:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 13:17:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 13:17:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 13:17:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 13:17:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 13:17:58 --> 0.0008 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 13:17:58 --> 2.5165 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 13:17:58 --> 0.0514 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 13:17:58 --> 2.8278 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 13:17:58 --> 2.9763 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 13:17:58 --> 2.723 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 13:17:58 --> 0.051 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 13:17:58 --> 2.4272 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 13:17:58 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 13:17:58 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 13:17:58 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 13:17:58 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 13:17:58 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 13:17:58 --> Total execution time: 13.6641
DEBUG - 2021-08-05 13:23:57 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 13:23:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 13:23:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 13:23:57 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 13:23:57 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 13:24:11 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 13:24:11 --> 2.7338 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 13:24:11 --> 0.0497 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 13:24:11 --> 3.0836 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 13:24:11 --> 2.9429 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 13:24:11 --> 2.8115 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 13:24:11 --> 0.0513 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 13:24:11 --> 2.4258 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 13:24:11 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 13:24:11 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 13:24:11 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 13:24:11 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 13:24:11 --> 0.0006 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 13:24:11 --> Total execution time: 14.1980
DEBUG - 2021-08-05 14:56:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 14:56:12 --> No URI present. Default controller set.
DEBUG - 2021-08-05 14:56:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 14:56:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 14:56:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 14:56:12 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 14:56:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 14:56:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 14:56:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 14:56:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 14:56:12 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 14:56:49 --> 28.3247 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-05 14:56:49 --> 3.005 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-05 14:56:49 --> 0.768 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-05 14:56:49 --> 2.6541 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-05 14:56:49 --> 0.0007 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 14:56:49 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 14:56:49 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 14:56:49 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 14:56:49 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 14:56:49 --> 0.0473 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `campaign_name` FROM `gpi_data` ) CI_count_all_results
QUERY - 2021-08-05 14:56:49 --> 2.4702 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-05 14:56:49 --> Total execution time: 37.3519
DEBUG - 2021-08-05 14:56:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 14:56:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 14:56:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 14:56:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 14:57:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 14:57:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 14:57:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 14:57:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 14:57:03 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 14:57:03 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 14:57:03 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 14:57:03 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 14:57:03 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 14:57:03 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 14:57:03 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 14:57:03 --> Total execution time: 0.0940
DEBUG - 2021-08-05 14:58:17 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 14:58:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 14:58:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 14:58:17 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 14:58:17 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 14:58:17 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 14:58:17 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 14:58:17 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 14:58:17 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 14:58:17 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 14:58:17 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 14:58:17 --> Total execution time: 0.0846
DEBUG - 2021-08-05 14:58:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 14:58:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 14:58:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 14:58:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 14:58:31 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 14:58:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 14:58:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 14:58:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 14:58:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 14:58:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 14:58:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 14:58:31 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 14:58:31 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 14:58:31 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 14:58:31 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 14:58:31 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 14:58:31 --> Total execution time: 0.0846
DEBUG - 2021-08-05 14:59:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 14:59:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 14:59:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 14:59:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 14:59:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 14:59:20 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 14:59:20 --> 0.0006 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 14:59:20 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 14:59:20 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 14:59:20 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 14:59:20 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 14:59:20 --> Total execution time: 0.0862
DEBUG - 2021-08-05 14:59:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 14:59:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 14:59:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 14:59:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 14:59:22 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 14:59:51 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-05 15:00:06 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 15:00:06 --> 29.1907 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-05 15:00:06 --> 0.0232 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-05 15:00:06 --> 2.9899 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 15:00:06 --> 0.0497 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 15:00:06 --> 2.8485 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 15:00:06 --> 3.5013 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 15:00:06 --> 3.2203 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 15:00:06 --> 0.0525 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 15:00:06 --> 2.2805 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 15:00:06 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 15:00:06 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 15:00:06 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 15:00:06 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 15:00:06 --> Total execution time: 44.2276
DEBUG - 2021-08-05 15:00:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 15:00:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 15:00:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 15:00:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 15:00:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 15:00:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 15:00:09 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 15:00:09 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 15:00:09 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 15:00:09 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 15:00:09 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 15:00:09 --> Total execution time: 0.0809
DEBUG - 2021-08-05 15:06:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 15:06:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 15:06:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 15:06:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 15:06:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 15:06:09 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 15:06:09 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 15:06:09 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 15:06:09 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 15:06:09 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 15:06:09 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 15:06:09 --> Total execution time: 0.0808
DEBUG - 2021-08-05 15:06:19 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 15:06:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 15:06:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 15:06:19 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 15:06:19 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 15:06:33 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 15:06:33 --> 3.2302 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 15:06:33 --> 0.0292 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 15:06:33 --> 2.5041 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 15:06:33 --> 2.3111 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 15:06:33 --> 2.6445 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 15:06:33 --> 0.0184 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 15:06:33 --> 2.9259 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 15:06:33 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 15:06:33 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 15:06:33 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 15:06:33 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 15:06:33 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 15:06:33 --> Total execution time: 13.7322
DEBUG - 2021-08-05 15:09:49 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 15:09:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 15:09:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 15:09:49 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 15:09:49 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 15:10:02 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 15:10:02 --> 3.1458 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 15:10:02 --> 0.0291 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 15:10:02 --> 3.0708 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 15:10:02 --> 2.3889 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 15:10:02 --> 2.5888 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 15:10:02 --> 0.0185 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 15:10:02 --> 2.3814 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 15:10:02 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 15:10:02 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 15:10:02 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 15:10:02 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 15:10:02 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 15:10:02 --> Total execution time: 13.6962
DEBUG - 2021-08-05 15:10:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 15:10:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 15:10:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 15:10:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 15:10:11 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 15:10:11 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 15:10:11 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 15:10:11 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 15:10:11 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 15:10:11 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 15:10:11 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 15:10:11 --> Total execution time: 0.0929
DEBUG - 2021-08-05 15:10:17 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 15:10:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 15:10:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 15:10:17 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 15:10:17 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 15:10:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 15:10:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 15:10:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 15:10:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 15:10:18 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 15:10:18 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 15:10:18 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 15:10:18 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 15:10:18 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 15:10:18 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 15:10:18 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 15:10:18 --> Total execution time: 0.0798
DEBUG - 2021-08-05 15:30:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 15:30:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 15:30:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 15:30:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 15:30:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 15:30:50 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 15:30:50 --> 2.4266 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 15:30:50 --> 0.0292 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 15:30:50 --> 2.7417 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 15:30:50 --> 2.2623 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 15:30:50 --> 2.3331 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 15:30:50 --> 0.0187 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 15:30:50 --> 2.6591 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 15:30:50 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 15:30:50 --> 0.0093 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 15:30:50 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 15:30:50 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 15:30:50 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 15:30:50 --> Total execution time: 12.5700
DEBUG - 2021-08-05 15:31:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 15:31:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 15:31:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 15:31:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 15:31:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 15:31:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 15:31:14 --> 0.0991 | INSERT INTO `csvexportlog` (`export_status`, `filter_col`, `created_datetime`) VALUES (0, '{\"circle\":\"UP(EAST)\"}', '2021-08-05 15:31:14')
DEBUG - 2021-08-05 15:31:14 --> Total execution time: 0.1714
DEBUG - 2021-08-05 15:31:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 15:31:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 15:31:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 15:31:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 15:31:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 15:31:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 15:31:28 --> 3.1695 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 15:31:28 --> 0.0284 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 15:31:28 --> 2.3934 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 15:31:28 --> 2.6778 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 15:31:28 --> 2.3889 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 15:31:28 --> 0.0184 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 15:31:28 --> 2.6705 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 15:31:28 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 15:31:28 --> 0.0094 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 15:31:28 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 15:31:28 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 15:31:28 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 15:31:28 --> Total execution time: 13.4560
DEBUG - 2021-08-05 15:36:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 15:36:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 15:36:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 15:36:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 15:36:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 15:36:48 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 15:36:48 --> 2.4884 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 15:36:48 --> 0.0287 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 15:36:48 --> 2.304 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 15:36:48 --> 2.3999 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 15:36:48 --> 2.489 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 15:36:48 --> 0.0294 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 15:36:48 --> 2.9299 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 15:36:48 --> 0.0009 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 15:36:48 --> 0.0142 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 15:36:48 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 15:36:48 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 15:36:48 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 15:36:48 --> Total execution time: 12.7628
DEBUG - 2021-08-05 16:08:57 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:08:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:08:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 16:08:57 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:08:57 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 16:09:10 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:09:10 --> 2.3632 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:09:10 --> 0.0286 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:09:10 --> 2.5268 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:09:10 --> 2.5787 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:09:10 --> 2.3878 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:09:10 --> 0.0184 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:09:10 --> 3.8152 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:09:10 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:09:10 --> 0.009 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:09:10 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:09:10 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:09:10 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:09:10 --> Total execution time: 13.8310
DEBUG - 2021-08-05 16:09:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:09:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:09:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 16:09:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:09:21 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:09:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:09:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:09:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 16:09:34 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:09:34 --> 2.5852 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:09:34 --> 0.0291 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:09:34 --> 2.9152 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:09:34 --> 2.5 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:09:34 --> 2.5557 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:09:34 --> 0.018 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:09:34 --> 2.4872 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:09:34 --> 0.0009 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:09:34 --> 0.0131 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:09:34 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:09:34 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:09:34 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:09:34 --> Total execution time: 13.1924
DEBUG - 2021-08-05 16:09:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:09:34 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:09:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:09:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:09:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 16:09:47 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:09:47 --> 2.25 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:09:47 --> 0.0286 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:09:47 --> 2.9489 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:09:47 --> 2.8891 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:09:47 --> 2.4775 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:09:47 --> 0.0183 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:09:47 --> 2.3041 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:09:47 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:09:47 --> 0.0094 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:09:47 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:09:47 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:09:47 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:09:47 --> Total execution time: 16.1727
DEBUG - 2021-08-05 16:09:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:09:47 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:09:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:09:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:09:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 16:10:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:10:00 --> 2.3855 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:10:00 --> 0.0294 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:10:00 --> 2.3546 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:10:00 --> 2.5378 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:10:00 --> 2.5 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:10:00 --> 0.0184 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:10:00 --> 2.7372 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:10:00 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:10:00 --> 0.0095 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:10:00 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:10:00 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:10:00 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:10:00 --> Total execution time: 18.7787
DEBUG - 2021-08-05 16:10:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:10:00 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:10:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:10:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:10:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 16:10:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:10:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:10:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 16:10:12 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:10:12 --> 2.2645 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:10:12 --> 0.0289 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:10:12 --> 2.4851 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:10:12 --> 2.2636 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:10:12 --> 2.3349 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:10:12 --> 0.017 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:10:12 --> 2.4709 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:10:12 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:10:12 --> 0.0084 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:10:12 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:10:12 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:10:12 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:10:12 --> Total execution time: 20.6773
DEBUG - 2021-08-05 16:10:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:10:12 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:10:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:10:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:10:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 16:10:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:10:25 --> 2.8312 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:10:25 --> 0.0806 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:10:25 --> 2.4821 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:10:25 --> 2.6111 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:10:25 --> 2.4778 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:10:25 --> 0.0182 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:10:25 --> 2.4151 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:10:25 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:10:25 --> 0.0096 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:10:25 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:10:25 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:10:25 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:10:25 --> Total execution time: 23.6329
DEBUG - 2021-08-05 16:10:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:10:25 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:10:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:10:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:10:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 16:10:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:10:38 --> 2.3762 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:10:38 --> 0.0289 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:10:38 --> 2.86 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:10:38 --> 3.2111 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:10:38 --> 2.4889 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:10:38 --> 0.0183 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:10:38 --> 2.2816 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:10:38 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:10:38 --> 0.0096 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:10:38 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:10:38 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:10:38 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:10:38 --> Total execution time: 26.9341
DEBUG - 2021-08-05 16:10:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:10:38 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:10:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:10:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:10:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 16:10:52 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:10:52 --> 2.7206 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:10:52 --> 0.0278 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:10:52 --> 2.4935 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:10:52 --> 2.5777 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:10:52 --> 2.778 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:10:52 --> 0.0182 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:10:52 --> 3.0816 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:10:52 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:10:52 --> 0.0081 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:10:52 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:10:52 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:10:52 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:10:52 --> Total execution time: 30.1807
DEBUG - 2021-08-05 16:10:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:10:52 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:10:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:10:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:10:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 16:11:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:11:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:11:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 16:11:07 --> 0.0047 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:11:07 --> 3.617 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:11:07 --> 0.0287 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:11:07 --> 2.7046 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:11:07 --> 2.8891 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:11:07 --> 3.647 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:11:07 --> 0.0158 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:11:07 --> 2.3147 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:11:07 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:11:07 --> 0.0094 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:11:07 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:11:07 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:11:07 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:11:07 --> Total execution time: 35.9318
DEBUG - 2021-08-05 16:11:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:11:07 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:11:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:11:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:11:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 16:11:21 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:11:21 --> 2.2571 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:11:21 --> 0.0283 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:11:21 --> 2.8417 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:11:21 --> 2.3071 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:11:21 --> 2.4778 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:11:21 --> 0.0187 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:11:21 --> 4.1035 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:11:21 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:11:21 --> 0.1101 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:11:21 --> 0.0016 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:11:21 --> 0.0011 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:11:21 --> 0.0017 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:11:21 --> Total execution time: 39.3561
DEBUG - 2021-08-05 16:11:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:11:21 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:11:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:11:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:11:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 16:11:32 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:11:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:11:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 16:11:38 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:11:38 --> 3.3541 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:11:38 --> 0.0287 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:11:38 --> 3.56 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:11:38 --> 2.8112 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:11:38 --> 3.2946 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:11:38 --> 0.0351 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:11:38 --> 4.2003 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:11:38 --> 0.0006 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:11:38 --> 0.0218 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:11:38 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:11:38 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:11:38 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:11:38 --> Total execution time: 46.6916
DEBUG - 2021-08-05 16:11:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:11:38 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:11:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:11:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:11:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 16:11:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:11:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:11:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 16:11:57 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:11:57 --> 3.0424 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:11:57 --> 0.0289 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:11:57 --> 3.6601 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:11:57 --> 3.4408 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:11:57 --> 3.6816 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:11:57 --> 0.0182 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:11:57 --> 4.5948 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:11:57 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:11:57 --> 0.0071 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:11:57 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:11:57 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:11:57 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:11:57 --> Total execution time: 55.9652
DEBUG - 2021-08-05 16:11:57 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:11:57 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:12:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:12:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:12:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 16:12:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:12:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:12:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 16:12:12 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:12:12 --> 3.0102 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:12:12 --> 0.0292 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:12:12 --> 3.2932 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:12:12 --> 2.6605 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:12:12 --> 3.0726 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:12:12 --> 0.0181 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:12:12 --> 3.2927 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:12:12 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:12:12 --> 0.0095 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:12:12 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:12:12 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:12:12 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:12:12 --> Total execution time: 61.3804
DEBUG - 2021-08-05 16:12:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:12:12 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:12:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:12:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:12:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 16:12:30 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:12:30 --> 3.5067 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:12:30 --> 0.0284 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:12:30 --> 2.8267 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:12:30 --> 2.5237 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:12:30 --> 3.4207 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:12:30 --> 0.0182 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:12:30 --> 5.1187 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:12:30 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:12:30 --> 0.0052 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:12:30 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:12:30 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:12:30 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:12:30 --> Total execution time: 68.1063
DEBUG - 2021-08-05 16:12:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:12:30 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:12:32 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:12:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:12:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 16:12:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:12:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:12:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 16:12:48 --> 0.0116 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:12:48 --> 3.9097 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:12:48 --> 0.0292 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:12:48 --> 2.8487 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:12:48 --> 3.9552 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:12:48 --> 4.6447 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:12:48 --> 0.0183 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:12:48 --> 2.7534 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:12:48 --> 0.0008 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:12:48 --> 0.0139 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:12:48 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:12:48 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:12:48 --> 0.0006 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:12:48 --> Total execution time: 76.3089
DEBUG - 2021-08-05 16:12:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:12:48 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:12:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:12:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:12:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 16:13:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:13:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:13:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 16:13:03 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:13:03 --> 3.5578 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:13:03 --> 0.0289 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:13:03 --> 3.5499 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:13:03 --> 2.8101 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:13:03 --> 2.4335 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:13:03 --> 0.0179 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:13:03 --> 2.2374 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:13:03 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:13:03 --> 0.0093 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:13:03 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:13:03 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:13:03 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:13:03 --> Total execution time: 81.7551
DEBUG - 2021-08-05 16:13:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:13:03 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:13:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:13:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:13:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 16:13:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:13:16 --> 2.5304 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:13:16 --> 0.0288 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:13:16 --> 2.5265 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:13:16 --> 2.2666 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:13:16 --> 2.6 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:13:16 --> 0.0184 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:13:16 --> 3.2149 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:13:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:13:16 --> 0.0097 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:13:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:13:16 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:13:16 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:13:16 --> Total execution time: 84.2377
DEBUG - 2021-08-05 16:13:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:13:16 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:13:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:13:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:13:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 16:13:30 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:13:30 --> 2.5769 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:13:30 --> 0.0293 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:13:30 --> 2.8485 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:13:30 --> 3.2001 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:13:30 --> 2.5691 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:13:30 --> 0.0155 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:13:30 --> 2.337 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:13:30 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:13:30 --> 0.0094 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:13:30 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:13:30 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:13:30 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:13:30 --> Total execution time: 87.8375
DEBUG - 2021-08-05 16:13:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:13:30 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:13:32 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:13:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:13:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 16:13:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:13:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:13:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 16:13:44 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:13:44 --> 2.7531 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:13:44 --> 0.0288 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:13:44 --> 2.965 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:13:44 --> 2.3504 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:13:44 --> 3.1568 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:13:44 --> 0.017 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:13:44 --> 2.6595 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:13:44 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:13:44 --> 0.0094 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:13:44 --> 0.0011 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:13:44 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:13:44 --> 0.0007 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:13:44 --> Total execution time: 91.8193
DEBUG - 2021-08-05 16:13:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:13:44 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:13:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:13:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:13:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 16:14:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:14:00 --> 2.3282 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:14:00 --> 0.0286 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:14:00 --> 2.3934 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:14:00 --> 2.4353 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:14:00 --> 4.7314 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:14:00 --> 0.0183 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:14:00 --> 4.2151 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:14:00 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:14:00 --> 0.0422 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:14:00 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:14:00 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:14:00 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:14:00 --> Total execution time: 98.0401
DEBUG - 2021-08-05 16:14:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:14:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:14:00 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:14:00 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:14:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:14:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:14:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 16:14:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:14:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:14:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 16:14:15 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:14:15 --> 3.1026 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:14:15 --> 0.0283 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:14:15 --> 2.6457 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:14:15 --> 2.9033 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:14:15 --> 3.7232 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:14:15 --> 0.0175 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:14:15 --> 2.4926 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:14:15 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:14:15 --> 0.0093 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:14:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:14:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:14:15 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:14:15 --> Total execution time: 102.9191
QUERY - 2021-08-05 16:14:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:14:15 --> 3.1065 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:14:15 --> 0.0284 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:14:15 --> 2.6444 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:14:15 --> 2.9046 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:14:15 --> 3.7232 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:14:15 --> 0.0175 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:14:15 --> 2.4927 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:14:15 --> 0.0243 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:14:15 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:14:15 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:14:15 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:14:15 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:14:15 --> Total execution time: 92.9888
DEBUG - 2021-08-05 16:14:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:14:15 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:14:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:14:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:14:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 16:14:28 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:14:28 --> 2.8376 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:14:28 --> 0.0273 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:14:28 --> 2.2412 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:14:28 --> 2.6295 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:14:28 --> 2.3122 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:14:28 --> 0.0172 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:14:28 --> 3.0601 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:14:28 --> 0.001 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:14:28 --> 0.0064 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:14:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:14:28 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:14:28 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:14:28 --> Total execution time: 96.1434
DEBUG - 2021-08-05 16:14:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:14:28 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:14:32 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:14:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:14:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 16:14:40 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:14:40 --> 2.4064 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:14:40 --> 0.0288 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:14:40 --> 2.5063 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:14:40 --> 2.2426 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:14:40 --> 2.6113 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:14:40 --> 0.0181 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:14:40 --> 2.5817 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:14:40 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:14:40 --> 0.0088 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:14:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:14:40 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:14:40 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:14:40 --> Total execution time: 98.6088
DEBUG - 2021-08-05 16:14:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:14:40 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:14:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:14:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:14:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 16:14:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:14:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:14:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 16:14:56 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:14:56 --> 3.2399 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:14:56 --> 0.0291 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:14:56 --> 2.8819 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:14:56 --> 2.667 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:14:56 --> 2.7562 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:14:56 --> 0.0394 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:14:56 --> 3.6929 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:14:56 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:14:56 --> 0.0097 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:14:56 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:14:56 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:14:56 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:14:56 --> Total execution time: 103.9541
DEBUG - 2021-08-05 16:14:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:14:56 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:15:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:15:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:15:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 16:15:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:15:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:15:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 16:15:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:15:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:15:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 16:15:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:15:25 --> 3.2876 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:15:25 --> 0.0501 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:15:25 --> 4.1158 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:15:25 --> 5.0075 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:15:25 --> 8.7815 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:15:25 --> 0.0183 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:15:25 --> 7.8176 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:15:25 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:15:25 --> 0.0603 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:15:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:15:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:15:25 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:15:25 --> Total execution time: 123.1098
DEBUG - 2021-08-05 16:15:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:15:25 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:15:32 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:15:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:15:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 16:15:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:15:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:15:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 16:15:49 --> 0.0036 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:15:49 --> 5.2468 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:15:49 --> 0.0287 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:15:49 --> 5.2951 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:15:49 --> 3.8796 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:15:49 --> 4.3632 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:15:49 --> 0.0184 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:15:49 --> 5.1212 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:15:49 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:15:49 --> 0.1256 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:15:49 --> 0.0009 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:15:49 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:15:49 --> 0.0007 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:15:49 --> Total execution time: 137.2368
DEBUG - 2021-08-05 16:15:49 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:15:49 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:15:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:15:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:15:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 16:16:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:16:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:16:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 16:16:06 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:16:06 --> 3.195 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:16:06 --> 0.028 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:16:06 --> 3.5052 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:16:06 --> 3.2885 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:16:06 --> 2.9635 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:16:06 --> 0.0326 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:16:06 --> 3.7501 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:16:06 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:16:06 --> 0.0077 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:16:06 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:16:06 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:16:06 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:16:06 --> Total execution time: 144.0534
DEBUG - 2021-08-05 16:16:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:16:06 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:16:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:16:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:16:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 16:16:17 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:16:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:16:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 16:16:22 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:16:22 --> 3.0824 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:16:22 --> 0.0286 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:16:22 --> 3.5156 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:16:22 --> 2.7679 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:16:22 --> 3.1877 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:16:22 --> 0.0184 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:16:22 --> 3.0593 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:16:22 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:16:22 --> 0.009 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:16:22 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:16:22 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:16:22 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:16:22 --> Total execution time: 149.7508
DEBUG - 2021-08-05 16:16:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:16:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 16:16:35 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:16:35 --> 2.9883 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:16:35 --> 0.0288 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:16:35 --> 2.6601 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:16:35 --> 2.6998 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:16:35 --> 2.3198 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:16:35 --> 0.0211 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:16:35 --> 2.6395 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:16:35 --> 0.0007 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:16:35 --> 0.0148 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:16:35 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:16:35 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:16:35 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:16:35 --> Total execution time: 153.1575
DEBUG - 2021-08-05 16:16:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:16:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 16:16:48 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:16:48 --> 2.399 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:16:48 --> 0.0292 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:16:48 --> 2.5261 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:16:48 --> 2.3555 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:16:48 --> 2.9778 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:16:48 --> 0.0183 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:16:48 --> 2.915 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:16:48 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:16:48 --> 0.0095 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:16:48 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:16:48 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:16:48 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:16:48 --> Total execution time: 156.3867
DEBUG - 2021-08-05 16:16:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:16:48 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 16:17:01 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:17:01 --> 2.4398 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:17:01 --> 0.0292 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:17:01 --> 2.5949 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:17:01 --> 3.0419 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:17:01 --> 2.3667 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:17:01 --> 0.0184 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:17:01 --> 2.4708 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:17:01 --> 0.0006 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:17:01 --> 0.0084 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:17:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:17:01 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:17:01 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:17:01 --> Total execution time: 159.4044
DEBUG - 2021-08-05 16:17:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:17:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 16:17:14 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:17:14 --> 2.7557 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:17:14 --> 0.0951 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:17:14 --> 2.9375 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:17:14 --> 2.3997 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:17:14 --> 2.4888 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:17:14 --> 0.0183 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:17:14 --> 2.4595 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:17:14 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:17:14 --> 0.0096 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:17:14 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:17:14 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:17:14 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:17:14 --> Total execution time: 162.5974
DEBUG - 2021-08-05 16:17:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:17:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 16:17:28 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:17:28 --> 2.6425 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:17:28 --> 0.029 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:17:28 --> 2.8599 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:17:28 --> 2.4777 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:17:28 --> 2.6617 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:17:28 --> 0.0235 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:17:28 --> 2.66 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:17:28 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:17:28 --> 0.0083 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:17:28 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:17:28 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:17:28 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:17:28 --> Total execution time: 165.9807
DEBUG - 2021-08-05 16:17:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:17:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 16:17:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:17:41 --> 2.4718 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:17:41 --> 0.0284 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:17:41 --> 2.404 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:17:41 --> 3.201 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:17:41 --> 2.3214 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:17:41 --> 0.0182 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:17:41 --> 2.9704 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:17:41 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:17:41 --> 0.0096 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:17:41 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:17:41 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:17:41 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:17:41 --> Total execution time: 169.4273
DEBUG - 2021-08-05 16:17:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:17:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 16:17:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:17:54 --> 2.2495 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:17:54 --> 0.0288 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:17:54 --> 2.3676 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:17:54 --> 2.3471 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:17:54 --> 2.8798 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:17:54 --> 0.0165 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:17:54 --> 2.7846 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:17:54 --> 0.0011 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:17:54 --> 0.0624 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:17:54 --> 0.0017 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:17:54 --> 0.001 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:17:54 --> 0.0011 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:17:54 --> Total execution time: 172.2325
DEBUG - 2021-08-05 16:17:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:17:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 16:18:07 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:18:07 --> 2.5009 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:18:07 --> 0.0294 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:18:07 --> 2.2928 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:18:07 --> 2.2332 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:18:07 --> 2.3222 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:18:07 --> 0.0186 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:18:07 --> 3.1498 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:18:07 --> 0.0006 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:18:07 --> 0.0069 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:18:07 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:18:07 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:18:07 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:18:07 --> Total execution time: 174.5733
DEBUG - 2021-08-05 16:18:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:18:07 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 16:18:22 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:18:22 --> 4.2802 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:18:22 --> 0.0287 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:18:22 --> 2.4498 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:18:22 --> 3.2126 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:18:22 --> 3.0087 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:18:22 --> 0.0184 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:18:22 --> 2.66 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:18:22 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:18:22 --> 0.0082 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:18:22 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:18:22 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:18:22 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:18:22 --> Total execution time: 179.6025
DEBUG - 2021-08-05 16:18:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:18:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 16:18:36 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:18:36 --> 2.7405 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:18:36 --> 0.0288 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:18:36 --> 2.7608 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:18:36 --> 2.8358 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:18:36 --> 2.4413 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:18:36 --> 0.0183 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:18:36 --> 2.8372 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:18:36 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:18:36 --> 0.0089 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:18:36 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:18:36 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:18:36 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:18:36 --> Total execution time: 184.2385
DEBUG - 2021-08-05 16:18:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:18:36 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 16:18:49 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:18:49 --> 2.4209 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:18:49 --> 0.0287 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:18:49 --> 3.4713 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:18:49 --> 2.3668 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:18:49 --> 2.2832 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:18:49 --> 0.0242 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:18:49 --> 2.3699 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:18:49 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:18:49 --> 0.0091 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:18:49 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:18:49 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:18:49 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:18:49 --> Total execution time: 187.2362
DEBUG - 2021-08-05 16:18:49 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:18:49 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 16:19:02 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:19:02 --> 2.2855 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:19:02 --> 0.0289 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:19:02 --> 2.7267 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:19:02 --> 2.2776 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:19:02 --> 3.0334 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:19:02 --> 0.0182 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:19:02 --> 2.393 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:19:02 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:19:02 --> 0.0095 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:19:02 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:19:02 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:19:02 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:19:02 --> Total execution time: 190.0440
DEBUG - 2021-08-05 16:19:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:19:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:19:02 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:19:02 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 16:19:16 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:19:16 --> 3.1247 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:19:16 --> 0.0288 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:19:16 --> 2.7165 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:19:16 --> 2.856 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:19:16 --> 2.3677 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:19:16 --> 0.0383 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:19:16 --> 3.1482 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:19:16 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:19:16 --> 0.0089 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:19:16 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:19:16 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:19:16 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:19:16 --> 0.0019 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:19:16 --> 3.1237 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:19:16 --> 0.0288 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:19:16 --> 2.7162 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:19:16 --> 2.8549 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:19:16 --> 2.3708 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:19:16 --> 0.0361 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:19:16 --> 3.1482 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:19:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:19:16 --> 0.0089 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:19:16 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:19:16 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:19:16 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:19:16 --> Total execution time: 184.3404
DEBUG - 2021-08-05 16:19:16 --> Total execution time: 194.3578
DEBUG - 2021-08-05 16:19:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:19:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 16:19:29 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:19:29 --> 2.6726 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:19:29 --> 0.0391 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:19:29 --> 2.5266 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:19:29 --> 2.3889 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:19:29 --> 2.5371 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:19:29 --> 0.0257 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:19:29 --> 2.6259 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:19:29 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:19:29 --> 0.0094 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:19:29 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:19:29 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:19:29 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:19:29 --> Total execution time: 191.5253
DEBUG - 2021-08-05 16:23:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:23:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:23:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 16:23:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:23:03 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 16:23:16 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:23:16 --> 2.4992 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:23:16 --> 0.0289 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:23:16 --> 2.4822 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:23:16 --> 2.2224 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:23:16 --> 3.2553 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:23:16 --> 0.0181 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:23:16 --> 2.3377 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:23:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:23:16 --> 0.009 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:23:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:23:16 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:23:16 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:23:16 --> Total execution time: 12.9277
DEBUG - 2021-08-05 16:23:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:23:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:23:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 16:23:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:23:26 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:23:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:23:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:23:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 16:23:39 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:23:39 --> 2.5693 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:23:39 --> 0.0288 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:23:39 --> 2.7825 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:23:39 --> 2.4333 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:23:39 --> 2.4776 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:23:39 --> 0.0184 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:23:39 --> 2.8482 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:23:39 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:23:39 --> 0.0094 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:23:39 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:23:39 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:23:39 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:23:39 --> Total execution time: 13.2518
DEBUG - 2021-08-05 16:23:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:23:39 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:23:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:23:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:23:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 16:23:52 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:23:52 --> 2.2428 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:23:52 --> 0.0285 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:23:52 --> 2.4492 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:23:52 --> 2.8331 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:23:52 --> 2.3678 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:23:52 --> 0.017 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:23:52 --> 2.3155 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:23:52 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:23:52 --> 0.0087 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:23:52 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:23:52 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:23:52 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:23:52 --> Total execution time: 15.5493
DEBUG - 2021-08-05 16:23:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:23:52 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:23:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:23:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:23:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 16:24:04 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:24:04 --> 2.3081 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:24:04 --> 0.0289 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:24:04 --> 2.3159 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:24:04 --> 2.3329 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:24:04 --> 3.1 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:24:04 --> 0.0182 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:24:04 --> 2.3723 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:24:04 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:24:04 --> 0.0067 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:24:04 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:24:04 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:24:04 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:24:04 --> Total execution time: 18.0656
DEBUG - 2021-08-05 16:24:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:24:04 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:24:06 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:24:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:24:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 16:24:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:24:06 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:24:17 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:24:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:24:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 16:24:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:24:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:24:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 16:24:33 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:24:33 --> 2.8591 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:24:33 --> 0.0822 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:24:33 --> 7.2713 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:24:33 --> 6.4988 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:24:33 --> 5.7607 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:24:33 --> 0.0592 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:24:33 --> 6.0625 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:24:33 --> 0.0009 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:24:33 --> 0.0437 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:24:33 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:24:33 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:24:33 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:24:33 --> Total execution time: 36.7329
QUERY - 2021-08-05 16:24:35 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:24:35 --> 5.0249 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:24:35 --> 0.055 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:24:35 --> 6.5272 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:24:35 --> 6.2089 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:24:35 --> 5.7536 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:24:35 --> 0.0444 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:24:35 --> 4.8928 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:24:35 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:24:35 --> 0.0092 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:24:35 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:24:35 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:24:35 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:24:35 --> Total execution time: 28.5961
DEBUG - 2021-08-05 16:24:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:24:35 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:24:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:24:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:24:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 16:24:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:24:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:24:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 16:24:47 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:24:47 --> 2.5888 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:24:47 --> 0.0287 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:24:47 --> 2.2938 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:24:47 --> 2.444 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:24:47 --> 2.8221 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:24:47 --> 0.0183 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:24:47 --> 2.4151 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:24:47 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:24:47 --> 0.0095 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:24:47 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:24:47 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:24:47 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:24:47 --> Total execution time: 30.5185
DEBUG - 2021-08-05 16:24:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:24:47 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:24:57 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:24:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:24:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 16:25:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:25:00 --> 2.8881 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:25:00 --> 0.0513 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:25:00 --> 2.6041 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:25:00 --> 2.2557 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:25:00 --> 2.2552 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:25:00 --> 0.0183 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:25:00 --> 2.3372 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:25:00 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:25:00 --> 0.0096 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:25:00 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:25:00 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:25:00 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:25:00 --> Total execution time: 32.9464
DEBUG - 2021-08-05 16:25:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:25:00 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:25:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:25:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:25:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 16:25:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:25:13 --> 2.2862 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:25:13 --> 0.0291 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:25:13 --> 2.5598 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:25:13 --> 3.1113 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:25:13 --> 2.5109 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:25:13 --> 0.0184 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:25:13 --> 2.2815 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:25:13 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:25:13 --> 0.0095 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:25:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:25:13 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:25:13 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:25:13 --> Total execution time: 35.7963
DEBUG - 2021-08-05 16:25:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:25:13 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:25:17 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:25:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:25:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 16:25:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:25:25 --> 2.3399 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:25:25 --> 0.0291 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:25:25 --> 2.4375 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:25:25 --> 2.5443 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:25:25 --> 2.407 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:25:25 --> 0.0223 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:25:25 --> 2.848 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:25:25 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:25:25 --> 0.009 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:25:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:25:25 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:25:25 --> 0.0002 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:25:25 --> Total execution time: 38.4655
DEBUG - 2021-08-05 16:25:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:25:25 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:25:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:25:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:25:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 16:25:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:25:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:25:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 16:25:37 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:25:37 --> 2.4688 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:25:37 --> 0.0288 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:25:37 --> 2.3712 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:25:37 --> 2.2887 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:25:37 --> 2.361 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:25:37 --> 0.0239 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:25:37 --> 2.382 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:25:37 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:25:37 --> 0.0093 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:25:37 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:25:37 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:25:37 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:25:37 --> Total execution time: 40.4333
DEBUG - 2021-08-05 16:25:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:25:37 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:25:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:25:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:25:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 16:25:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:25:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:25:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 16:25:50 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:25:50 --> 2.9547 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:25:50 --> 0.0285 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:25:50 --> 2.4045 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:25:50 --> 2.3563 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:25:50 --> 2.39 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:25:50 --> 0.0163 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:25:50 --> 2.5161 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:25:50 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:25:50 --> 0.0078 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:25:50 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:25:50 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:25:50 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:25:50 --> Total execution time: 43.1435
DEBUG - 2021-08-05 16:25:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:25:50 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:25:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:25:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:25:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 16:26:03 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:26:03 --> 2.305 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:26:03 --> 0.0264 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:26:03 --> 3.1729 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:26:03 --> 2.5205 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:26:03 --> 2.8789 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:26:03 --> 0.017 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:26:03 --> 2.4514 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:26:03 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:26:03 --> 0.0058 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:26:03 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:26:03 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:26:03 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:26:03 --> Total execution time: 46.5572
DEBUG - 2021-08-05 16:26:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:26:03 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:26:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:26:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:26:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 16:26:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:26:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:26:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 16:26:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:26:24 --> 4.8934 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:26:24 --> 0.0286 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:26:24 --> 4.7941 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:26:24 --> 3.5331 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:26:24 --> 3.3219 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:26:24 --> 0.0185 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:26:24 --> 3.6482 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:26:24 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:26:24 --> 0.0318 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:26:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:26:24 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:26:24 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:26:24 --> Total execution time: 57.3888
DEBUG - 2021-08-05 16:26:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:26:24 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:26:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:26:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:26:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 16:26:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:26:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:26:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 16:26:42 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:26:42 --> 3.3059 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:26:42 --> 0.0278 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:26:42 --> 4.256 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:26:42 --> 4.1603 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:26:42 --> 4.1671 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:26:42 --> 0.0173 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:26:42 --> 2.7952 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:26:42 --> 0.0006 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:26:42 --> 0.0063 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:26:42 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:26:42 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:26:42 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:26:42 --> Total execution time: 66.3445
DEBUG - 2021-08-05 16:26:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:26:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 16:26:43 --> 0.0025 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:26:43 --> 0.1029 | INSERT INTO `csvexportlog` (`export_status`, `filter_col`, `created_datetime`) VALUES (0, '{\"circle\":\"MUMBAI\"}', '2021-08-05 16:26:42')
DEBUG - 2021-08-05 16:26:43 --> Total execution time: 64.2609
DEBUG - 2021-08-05 16:26:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:26:43 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:26:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:26:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:26:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 16:26:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:26:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:26:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 16:26:56 --> 0.0215 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:26:56 --> 3.9852 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:26:56 --> 0.0288 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:26:56 --> 2.2491 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:26:56 --> 2.2444 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:26:56 --> 2.3886 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:26:56 --> 0.0183 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:26:56 --> 2.4818 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:26:56 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:26:56 --> 0.0094 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:26:56 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:26:56 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:26:56 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:26:56 --> Total execution time: 69.9386
DEBUG - 2021-08-05 16:26:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:26:56 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:26:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:26:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:26:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 16:27:06 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:27:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:27:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 16:27:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:27:09 --> 2.33 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:27:09 --> 0.0288 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:27:09 --> 3.0712 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:27:09 --> 2.6223 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:27:09 --> 2.3665 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:27:09 --> 0.0184 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:27:09 --> 2.526 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:27:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:27:09 --> 0.0093 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:27:09 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:27:09 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:27:09 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:27:09 --> Total execution time: 72.9461
DEBUG - 2021-08-05 16:27:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:27:09 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:27:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:27:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:27:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 16:27:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:27:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:27:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 16:27:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:27:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:27:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 16:27:22 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:27:22 --> 2.3423 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:27:22 --> 0.0292 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:27:22 --> 2.3934 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:27:22 --> 2.3328 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:27:22 --> 3.1221 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:27:22 --> 0.0183 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:27:22 --> 2.2706 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:27:22 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:27:22 --> 0.0087 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:27:22 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:27:22 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:27:22 --> 0.0006 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:27:22 --> Total execution time: 72.3477
DEBUG - 2021-08-05 16:27:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:27:22 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:27:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:27:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:27:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 16:27:34 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:27:34 --> 2.3195 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:27:34 --> 0.0287 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:27:34 --> 2.3604 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:27:34 --> 2.322 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:27:34 --> 2.2443 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:27:34 --> 0.0183 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:27:34 --> 2.7484 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:27:34 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:27:34 --> 0.0089 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:27:34 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:27:34 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:27:34 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:27:34 --> Total execution time: 77.5721
DEBUG - 2021-08-05 16:27:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:27:34 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:27:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:27:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:27:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 16:27:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:27:46 --> 2.3772 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:27:46 --> 0.0287 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:27:46 --> 2.5824 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:27:46 --> 2.2331 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:27:46 --> 2.2556 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:27:46 --> 0.0183 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:27:46 --> 2.3372 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:27:46 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:27:46 --> 0.0092 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:27:46 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:27:46 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:27:46 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:27:46 --> Total execution time: 79.4341
DEBUG - 2021-08-05 16:27:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:27:46 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:27:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:27:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:27:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 16:27:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:27:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:27:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 16:27:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:27:58 --> 2.2952 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:27:58 --> 0.0287 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:27:58 --> 3.4379 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:27:58 --> 2.3554 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:27:58 --> 2.2445 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:27:58 --> 0.0183 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:27:58 --> 2.226 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:27:58 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:27:58 --> 0.0096 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:27:58 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:27:58 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:27:58 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:27:58 --> Total execution time: 82.0795
DEBUG - 2021-08-05 16:27:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:27:58 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:28:06 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:28:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:28:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 16:28:11 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:28:11 --> 2.3188 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:28:11 --> 0.0282 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:28:11 --> 2.2381 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:28:11 --> 2.8687 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:28:11 --> 2.8976 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:28:11 --> 0.0182 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:28:11 --> 2.6038 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:28:11 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:28:11 --> 0.0094 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:28:11 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:28:11 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:28:11 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:28:11 --> Total execution time: 88.5544
DEBUG - 2021-08-05 16:28:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:28:11 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:28:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:28:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:28:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 16:28:19 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:28:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:28:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 16:28:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:28:23 --> 2.2435 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:28:23 --> 0.0288 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:28:23 --> 2.3715 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:28:23 --> 2.2439 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:28:23 --> 2.3666 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:28:23 --> 0.0184 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:28:23 --> 2.7594 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:28:23 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:28:23 --> 0.009 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:28:23 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:28:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:28:23 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:28:23 --> Total execution time: 97.1382
DEBUG - 2021-08-05 16:28:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:28:23 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:28:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:28:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:28:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 16:28:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:28:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:28:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 16:28:36 --> 0.0015 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:28:36 --> 3.096 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:28:36 --> 0.026 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:28:36 --> 2.4154 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:28:36 --> 2.3776 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:28:36 --> 2.3333 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:28:36 --> 0.0184 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:28:36 --> 2.6149 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:28:36 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:28:36 --> 0.0085 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:28:36 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:28:36 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:28:36 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:28:36 --> Total execution time: 100.0817
DEBUG - 2021-08-05 16:28:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:28:36 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:28:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:28:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:28:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 16:28:49 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:28:49 --> 2.829 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:28:49 --> 0.0289 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:28:49 --> 2.5822 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:28:49 --> 2.5333 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:28:49 --> 2.4332 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:28:49 --> 0.0185 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:28:49 --> 2.2814 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:28:49 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:28:49 --> 0.0094 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:28:49 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:28:49 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:28:49 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:28:49 --> Total execution time: 102.8281
DEBUG - 2021-08-05 16:28:49 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:28:49 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:28:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:28:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:28:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 16:29:03 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:29:03 --> 2.7538 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:29:03 --> 0.0289 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:29:03 --> 2.4045 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:29:03 --> 3.2126 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:29:03 --> 2.5761 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:29:03 --> 0.0182 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:29:03 --> 2.6931 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:29:03 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:29:03 --> 0.0092 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:29:03 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:29:03 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:29:03 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:29:03 --> Total execution time: 110.6809
DEBUG - 2021-08-05 16:29:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:29:03 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:29:06 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:29:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:29:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 16:29:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:29:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:29:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 16:29:20 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:29:20 --> 2.4421 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:29:20 --> 0.0291 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:29:20 --> 2.5038 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:29:20 --> 2.5556 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:29:20 --> 5.8124 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:29:20 --> 0.0168 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:29:20 --> 4.2048 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:29:20 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:29:20 --> 0.0072 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:29:20 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:29:20 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:29:20 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:29:20 --> Total execution time: 126.1365
DEBUG - 2021-08-05 16:29:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:29:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:29:20 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:29:20 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:29:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:29:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:29:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 16:29:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:29:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:29:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 16:29:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:29:38 --> 2.7612 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:29:38 --> 0.0278 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:29:38 --> 3.6267 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:29:38 --> 4.6062 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:29:38 --> 3.3744 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:29:38 --> 0.0264 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:29:38 --> 3.3928 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:29:38 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:29:38 --> 0.0085 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:29:38 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:29:38 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:29:38 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:29:38 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:29:38 --> 2.7572 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:29:38 --> 0.027 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:29:38 --> 3.6269 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:29:38 --> 4.6057 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:29:38 --> 3.375 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:29:38 --> 0.0262 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:29:38 --> 3.3931 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:29:38 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:29:38 --> 0.0088 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:29:38 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:29:38 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:29:38 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:29:38 --> Total execution time: 132.0078
DEBUG - 2021-08-05 16:29:38 --> Total execution time: 142.0053
DEBUG - 2021-08-05 16:29:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:29:38 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:29:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:29:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:29:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 16:29:53 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:29:53 --> 2.5331 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:29:53 --> 0.0243 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:29:53 --> 2.9266 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:29:53 --> 3.9997 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:29:53 --> 2.8889 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:29:53 --> 0.0184 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:29:53 --> 2.2371 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:29:53 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:29:53 --> 0.0093 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:29:53 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:29:53 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:29:53 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:29:53 --> Total execution time: 136.6743
DEBUG - 2021-08-05 16:29:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:29:53 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:29:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:29:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:29:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 16:30:06 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:30:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:30:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 16:30:07 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:30:07 --> 2.4771 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:30:07 --> 0.0293 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:30:07 --> 2.4927 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:30:07 --> 2.4777 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:30:07 --> 3.9445 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:30:07 --> 0.0184 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:30:07 --> 2.464 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:30:07 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:30:07 --> 0.0045 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:30:07 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:30:07 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:30:07 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:30:07 --> Total execution time: 140.5970
DEBUG - 2021-08-05 16:30:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:30:07 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:30:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:30:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:30:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 16:30:20 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:30:20 --> 2.45 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:30:20 --> 0.029 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:30:20 --> 2.3712 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:30:20 --> 3.011 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:30:20 --> 2.4499 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:30:20 --> 0.0354 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:30:20 --> 2.9873 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:30:20 --> 0.0009 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:30:20 --> 0.0122 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:30:20 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:30:20 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:30:20 --> 0.0006 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:30:20 --> Total execution time: 143.9910
DEBUG - 2021-08-05 16:30:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:30:20 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:30:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:30:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:30:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 16:30:32 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:30:32 --> 2.2943 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:30:32 --> 0.0287 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:30:32 --> 2.4266 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:30:32 --> 2.4839 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:30:32 --> 2.3996 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:30:32 --> 0.0238 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:30:32 --> 2.3154 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:30:32 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:30:32 --> 0.0088 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:30:32 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:30:32 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:30:32 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:30:32 --> Total execution time: 145.9803
DEBUG - 2021-08-05 16:30:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:30:32 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:30:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:30:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:30:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 16:30:45 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:30:45 --> 2.8652 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:30:45 --> 0.0291 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:30:45 --> 2.4154 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:30:45 --> 2.4999 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:30:45 --> 2.4889 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:30:45 --> 0.0184 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:30:45 --> 2.2817 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:30:45 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:30:45 --> 0.0092 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:30:45 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:30:45 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:30:45 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:30:45 --> Total execution time: 148.6381
DEBUG - 2021-08-05 16:30:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:30:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 16:30:45 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:30:45 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:30:45 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:30:45 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:30:45 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:30:45 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:30:45 --> Total execution time: 145.2729
DEBUG - 2021-08-05 16:30:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:30:45 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:30:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:30:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:30:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 16:30:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:30:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:30:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 16:30:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:30:58 --> 2.5985 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:30:58 --> 0.0273 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:30:58 --> 2.8631 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:30:58 --> 2.9633 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:30:58 --> 2.4778 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:30:58 --> 0.0184 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:30:58 --> 2.6037 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:30:58 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:30:58 --> 0.0097 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:30:58 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:30:58 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:30:58 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:30:58 --> Total execution time: 152.2519
DEBUG - 2021-08-05 16:30:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:30:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 16:31:12 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:31:12 --> 2.4069 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:31:12 --> 0.029 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:31:12 --> 2.3046 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:31:12 --> 2.722 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:31:12 --> 3.3667 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:31:12 --> 0.0185 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:31:12 --> 2.537 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:31:12 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:31:12 --> 0.0092 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:31:12 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:31:12 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:31:12 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:31:12 --> Total execution time: 155.6754
DEBUG - 2021-08-05 16:31:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:31:12 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 16:31:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:31:24 --> 2.3879 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:31:24 --> 0.0289 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:31:24 --> 2.7265 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:31:24 --> 2.2777 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:31:24 --> 2.4 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:31:24 --> 0.0185 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:31:24 --> 2.5593 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:31:24 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:31:24 --> 0.0094 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:31:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:31:24 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:31:24 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:31:24 --> Total execution time: 158.1078
DEBUG - 2021-08-05 16:31:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:31:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 16:31:36 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:31:36 --> 2.635 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:31:36 --> 0.0265 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:31:36 --> 2.3379 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:31:36 --> 2.4004 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:31:36 --> 2.3328 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:31:36 --> 0.018 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:31:36 --> 2.2928 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:31:36 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:31:36 --> 0.0096 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:31:36 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:31:36 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:31:36 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:31:36 --> Total execution time: 160.1836
DEBUG - 2021-08-05 16:31:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:31:36 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 16:31:49 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:31:49 --> 2.5656 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:31:49 --> 0.0397 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:31:49 --> 2.5158 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:31:49 --> 2.457 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:31:49 --> 2.3097 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:31:49 --> 0.0181 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:31:49 --> 2.3371 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:31:49 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:31:49 --> 0.0097 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:31:49 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:31:49 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:31:49 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:31:49 --> Total execution time: 162.4671
DEBUG - 2021-08-05 16:31:49 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:31:49 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 16:32:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:32:01 --> 2.4353 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:32:01 --> 0.0266 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:32:01 --> 2.4376 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:32:01 --> 2.5333 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:32:01 --> 2.5111 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:32:01 --> 0.0185 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:32:01 --> 2.3037 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:32:01 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:32:01 --> 0.0096 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:32:01 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:32:01 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:32:01 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:32:01 --> Total execution time: 164.7584
DEBUG - 2021-08-05 16:32:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:32:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 16:32:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:32:15 --> 2.385 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:32:15 --> 0.0286 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:32:15 --> 2.5046 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:32:15 --> 2.728 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:32:15 --> 2.5723 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:32:15 --> 0.018 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:32:15 --> 3.8278 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:32:15 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:32:15 --> 0.0075 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:32:15 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:32:15 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:32:15 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:32:15 --> Total execution time: 168.8654
DEBUG - 2021-08-05 16:32:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:32:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 16:32:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:32:28 --> 2.4246 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:32:28 --> 0.0288 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:32:28 --> 2.4045 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:32:28 --> 2.2444 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:32:28 --> 2.8334 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:32:28 --> 0.0182 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:32:28 --> 2.8152 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:32:28 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:32:28 --> 0.0647 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:32:28 --> 0.0015 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:32:28 --> 0.0013 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:32:28 --> 0.0012 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:32:28 --> Total execution time: 171.2529
DEBUG - 2021-08-05 16:32:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:32:28 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:32:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:32:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:32:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-05 16:32:50 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:32:50 --> 4.3116 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:32:50 --> 0.0833 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:32:50 --> 3.0157 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:32:50 --> 5.9615 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:32:50 --> 5.6397 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:32:50 --> 0.0172 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:32:50 --> 3.1377 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:32:50 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:32:50 --> 0.0081 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:32:50 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:32:50 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:32:50 --> 0.0002 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:32:50 --> Total execution time: 183.9674
DEBUG - 2021-08-05 16:32:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:32:50 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 16:33:04 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:33:04 --> 3.1498 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:33:04 --> 0.0286 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:33:04 --> 3.1047 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:33:04 --> 2.6999 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:33:04 --> 2.7444 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:33:04 --> 0.0184 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:33:04 --> 2.5722 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:33:04 --> 0.001 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:33:04 --> 0.0065 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:33:04 --> 0.0009 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:33:04 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:33:04 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:33:04 --> Total execution time: 188.3465
DEBUG - 2021-08-05 16:33:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:33:04 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 16:33:21 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:33:21 --> 2.7185 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:33:21 --> 0.0291 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:33:21 --> 3.9936 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:33:21 --> 2.7661 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:33:21 --> 4.0222 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:33:21 --> 0.0183 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:33:21 --> 3.2374 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:33:21 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:33:21 --> 0.0095 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:33:21 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:33:21 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:33:21 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:33:21 --> Total execution time: 195.1599
DEBUG - 2021-08-05 16:33:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:33:21 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:33:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:33:36 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:33:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:33:36 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:33:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:33:36 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:33:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:33:36 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:33:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:33:36 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-05 16:35:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:35:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:35:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-05 16:35:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-05 16:35:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-05 16:35:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-05 16:35:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-05 16:36:13 --> 0.2568 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:36:13 --> 3.033 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-05 16:36:13 --> 0.0429 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-05 16:36:13 --> 2.9908 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-05 16:36:13 --> 5.1571 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:36:13 --> 3.7208 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-05 16:36:13 --> 0.0426 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-05 16:36:13 --> 3.8686 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-05 16:36:13 --> 0.0205 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-05 16:36:13 --> 0.0615 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-05 16:36:13 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:36:13 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-05 16:36:13 --> 0.0008 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-05 16:36:13 --> Total execution time: 19.3159
