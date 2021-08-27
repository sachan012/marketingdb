<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2021-08-18 10:21:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:21:54 --> No URI present. Default controller set.
DEBUG - 2021-08-18 10:21:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:21:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:21:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:21:55 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 10:21:55 --> Form_validation class already loaded. Second attempt ignored.
QUERY - 2021-08-18 10:21:55 --> 0.2633 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 10:21:55 --> Total execution time: 0.5214
DEBUG - 2021-08-18 10:21:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:21:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:21:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:21:58 --> No URI present. Default controller set.
DEBUG - 2021-08-18 10:21:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:21:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:21:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:21:58 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 10:21:58 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:21:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:21:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:21:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:21:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:21:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:22:06 --> 3.4324 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-18 10:22:06 --> 1.1379 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-18 10:22:06 --> 3.0615 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-18 10:22:06 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 10:22:06 --> 0.0263 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:22:06 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:22:06 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:22:06 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 10:22:06 --> Total execution time: 7.7404
DEBUG - 2021-08-18 10:22:06 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:22:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:22:06 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:22:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:22:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:22:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:22:06 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 10:22:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:22:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:22:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:22:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:22:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:22:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:22:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:22:07 --> Global POST, GET and COOKIE data sanitized
QUERY - 2021-08-18 10:22:10 --> 3.8057 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-18 10:22:10 --> Total execution time: 3.9039
DEBUG - 2021-08-18 10:22:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:22:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:22:11 --> 0.2966 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `campaign_name` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-18 10:22:11 --> Total execution time: 4.1061
DEBUG - 2021-08-18 10:22:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:22:11 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 10:22:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:22:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:22:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-18 10:22:41 --> 29.8981 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
DEBUG - 2021-08-18 10:22:41 --> Total execution time: 34.0562
DEBUG - 2021-08-18 10:22:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:22:41 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 10:22:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:22:41 --> No URI present. Default controller set.
DEBUG - 2021-08-18 10:22:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:22:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:22:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:22:41 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 10:22:41 --> Form_validation class already loaded. Second attempt ignored.
QUERY - 2021-08-18 10:22:41 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 10:22:41 --> Total execution time: 0.0655
DEBUG - 2021-08-18 10:22:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:22:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:22:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:22:48 --> No URI present. Default controller set.
DEBUG - 2021-08-18 10:22:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:22:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:22:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:22:48 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 10:22:48 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:22:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:22:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:22:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:22:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:22:48 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 10:22:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:22:50 --> No URI present. Default controller set.
DEBUG - 2021-08-18 10:22:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:22:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-18 10:22:57 --> 3.4945 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-18 10:22:57 --> 2.2386 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-18 10:22:57 --> 2.4217 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-18 10:22:57 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 10:22:57 --> 0.0084 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-18 10:22:57 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-18 10:22:57 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-18 10:22:57 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 10:22:57 --> Total execution time: 8.2376
DEBUG - 2021-08-18 10:22:57 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:22:57 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 10:22:57 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:22:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:22:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:22:57 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:22:57 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:23:04 --> 2.6557 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-18 10:23:04 --> 1.4222 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-18 10:23:04 --> 2.7924 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-18 10:23:04 --> 0.0007 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 10:23:04 --> 0.0137 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-18 10:23:04 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-18 10:23:04 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-18 10:23:04 --> 0.0006 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 10:23:04 --> Total execution time: 6.9577
DEBUG - 2021-08-18 10:23:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:23:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:23:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:23:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:23:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:23:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:23:04 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 10:23:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:23:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:23:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:23:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:23:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:23:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:23:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:23:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-18 10:23:07 --> 3.3414 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-18 10:23:07 --> Total execution time: 3.4427
DEBUG - 2021-08-18 10:23:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:23:07 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 10:23:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:23:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:23:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-18 10:23:41 --> 33.66 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
DEBUG - 2021-08-18 10:23:41 --> Total execution time: 36.9716
DEBUG - 2021-08-18 10:23:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:23:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:23:41 --> 0.1395 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `campaign_name` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-18 10:23:41 --> Total execution time: 37.0696
DEBUG - 2021-08-18 10:23:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:23:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:23:41 --> 0.0322 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-18 10:23:41 --> 0.0175 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 10:23:41 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 10:23:41 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-18 10:23:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-18 10:23:41 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 10:23:41 --> Total execution time: 20.3415
DEBUG - 2021-08-18 10:24:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:24:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:24:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:24:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:24:05 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:24:05 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-18 10:24:05 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 10:24:05 --> Total execution time: 0.0814
DEBUG - 2021-08-18 10:24:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:24:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:24:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:24:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:24:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:24:26 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-18 10:24:26 --> 0.0005 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 10:24:26 --> Total execution time: 0.0731
DEBUG - 2021-08-18 10:24:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:24:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:24:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:24:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:24:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:24:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-18 10:24:46 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 10:24:46 --> Total execution time: 0.0892
DEBUG - 2021-08-18 10:24:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:24:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:24:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:24:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:24:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:24:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-18 10:24:58 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 10:24:58 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 10:24:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-18 10:24:58 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-18 10:24:58 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 10:24:58 --> Total execution time: 0.1884
DEBUG - 2021-08-18 10:25:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:25:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:25:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:25:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:25:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:25:00 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-18 10:25:00 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 10:25:00 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 10:25:00 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-18 10:25:00 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-18 10:25:00 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 10:25:00 --> Total execution time: 0.0702
DEBUG - 2021-08-18 10:25:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:25:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:25:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:25:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:25:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:25:21 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-18 10:25:21 --> 0.0005 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 10:25:21 --> Total execution time: 0.0804
DEBUG - 2021-08-18 10:25:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:25:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:25:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:25:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:25:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:25:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-18 10:25:41 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 10:25:41 --> Total execution time: 0.0863
DEBUG - 2021-08-18 10:26:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:26:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:26:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:26:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:26:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:26:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-18 10:26:01 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 10:26:01 --> Total execution time: 0.0634
DEBUG - 2021-08-18 10:26:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:26:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:26:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:26:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:26:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:26:21 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-18 10:26:21 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 10:26:21 --> Total execution time: 0.0927
DEBUG - 2021-08-18 10:26:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:26:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:26:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:26:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:26:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:26:41 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-18 10:26:41 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 10:26:41 --> Total execution time: 0.0732
DEBUG - 2021-08-18 10:26:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:26:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:26:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:26:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:26:52 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:26:52 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-18 10:26:52 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 10:26:52 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 10:26:52 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-18 10:26:52 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-18 10:26:52 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 10:26:52 --> Total execution time: 0.0695
DEBUG - 2021-08-18 10:27:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:27:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:27:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:27:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:27:13 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 10:27:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:27:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:27:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:27:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:27:33 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 10:27:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:27:33 --> No URI present. Default controller set.
DEBUG - 2021-08-18 10:27:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:27:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:27:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:27:33 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 10:27:33 --> Form_validation class already loaded. Second attempt ignored.
QUERY - 2021-08-18 10:27:33 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 10:27:33 --> Total execution time: 0.0663
DEBUG - 2021-08-18 10:27:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:27:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:27:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:27:38 --> No URI present. Default controller set.
DEBUG - 2021-08-18 10:27:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:27:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:27:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:27:38 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 10:27:38 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:27:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:27:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:27:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:27:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:27:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:27:45 --> 2.7464 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-18 10:27:45 --> 1.0806 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-18 10:27:45 --> 3.0305 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-18 10:27:45 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 10:27:45 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:27:45 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:27:45 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:27:45 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 10:27:45 --> Total execution time: 6.9225
DEBUG - 2021-08-18 10:27:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:27:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:27:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:27:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:27:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:27:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:27:46 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 10:27:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:27:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:27:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:27:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:27:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:27:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:27:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:27:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-18 10:27:50 --> 4.1025 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-18 10:27:50 --> Total execution time: 4.1803
DEBUG - 2021-08-18 10:27:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:27:50 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 10:27:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:27:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:27:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-18 10:28:19 --> 29.0937 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
DEBUG - 2021-08-18 10:28:19 --> Total execution time: 33.1867
DEBUG - 2021-08-18 10:28:19 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:28:19 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:28:19 --> 0.0662 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `campaign_name` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-18 10:28:19 --> Total execution time: 33.2913
DEBUG - 2021-08-18 10:28:19 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:28:19 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:28:19 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:28:19 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 10:28:19 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 10:28:19 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:28:19 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:28:19 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 10:28:19 --> Total execution time: 24.4768
DEBUG - 2021-08-18 10:28:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:28:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:28:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:28:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:28:39 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 10:29:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:29:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:29:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:29:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:29:00 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 10:29:19 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:29:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:29:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:29:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:29:20 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 10:29:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:29:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:29:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:29:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:29:39 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 10:30:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:30:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:30:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:30:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:30:00 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 10:30:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:30:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:30:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:30:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:30:20 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 10:30:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:30:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:30:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:30:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:30:40 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 10:31:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:31:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:31:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:31:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:31:00 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 10:31:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:31:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:31:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:31:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:31:20 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 10:31:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:31:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:31:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:31:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:31:40 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 10:32:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:32:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:32:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:32:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:32:00 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 10:32:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:32:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:32:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:32:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:32:20 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 10:32:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:32:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:32:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:32:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:32:40 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 10:33:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:33:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:33:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:33:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:33:00 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 10:33:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:33:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:33:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:33:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:33:20 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 10:33:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:33:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:33:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:33:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:33:40 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 10:34:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:34:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:34:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:34:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:34:00 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 10:34:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:34:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:34:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:34:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:34:05 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:34:05 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:34:05 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 10:34:05 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 10:34:05 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:34:05 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:34:05 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 10:34:05 --> Total execution time: 0.0754
DEBUG - 2021-08-18 10:34:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:34:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:34:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:34:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:34:26 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 10:34:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:34:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:34:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:34:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:34:47 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 10:35:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:35:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:35:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:35:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:35:07 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 10:35:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:35:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:35:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:35:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:35:27 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 10:35:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:35:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:35:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:35:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:35:47 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 10:36:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:36:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:36:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:36:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:36:07 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 10:36:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:36:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:36:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:36:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:36:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:36:21 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:36:21 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 10:36:21 --> 0.001 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 10:36:21 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:36:21 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:36:21 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 10:36:21 --> Total execution time: 0.0710
DEBUG - 2021-08-18 10:36:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:36:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:36:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:36:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:36:41 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 10:37:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:37:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:37:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:37:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:37:01 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 10:37:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:37:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:37:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:37:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:37:22 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 10:37:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:37:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:37:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:37:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:37:42 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 10:38:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:38:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:38:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:38:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:38:02 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 10:38:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:38:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:38:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:38:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:38:22 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 10:38:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:38:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:38:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:38:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:38:42 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 10:39:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:39:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:39:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:39:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:39:02 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 10:39:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:39:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:39:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:39:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:39:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:39:15 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:39:15 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 10:39:15 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 10:39:15 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:39:15 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:39:15 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 10:39:15 --> Total execution time: 0.0806
DEBUG - 2021-08-18 10:39:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:39:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:39:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:39:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:39:36 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:39:36 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:39:36 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 10:39:36 --> Total execution time: 0.0764
DEBUG - 2021-08-18 10:39:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:39:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:39:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:39:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:39:39 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 10:39:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:39:39 --> No URI present. Default controller set.
DEBUG - 2021-08-18 10:39:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:39:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:39:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:39:39 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 10:39:39 --> Form_validation class already loaded. Second attempt ignored.
QUERY - 2021-08-18 10:39:39 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 10:39:39 --> Total execution time: 0.0608
DEBUG - 2021-08-18 10:39:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:39:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:39:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:39:52 --> No URI present. Default controller set.
DEBUG - 2021-08-18 10:39:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:39:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:39:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:39:52 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 10:39:52 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:39:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:39:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:39:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:39:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:39:52 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:39:58 --> 2.8213 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-18 10:39:58 --> 0.8034 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-18 10:39:58 --> 2.3185 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-18 10:39:58 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 10:39:58 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-18 10:39:58 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-18 10:39:58 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-18 10:39:58 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 10:39:58 --> Total execution time: 6.0191
DEBUG - 2021-08-18 10:39:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:39:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:39:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:39:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:39:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:39:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:39:59 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 10:39:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:39:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:39:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:39:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:39:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:39:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:39:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:39:59 --> Global POST, GET and COOKIE data sanitized
QUERY - 2021-08-18 10:40:01 --> 2.8016 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-18 10:40:01 --> Total execution time: 2.9140
DEBUG - 2021-08-18 10:40:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:40:01 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 10:40:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:40:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:40:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-18 10:40:33 --> 31.2798 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
DEBUG - 2021-08-18 10:40:33 --> Total execution time: 34.0611
DEBUG - 2021-08-18 10:40:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:40:33 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:40:33 --> 0.0528 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `campaign_name` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-18 10:40:33 --> Total execution time: 34.1332
DEBUG - 2021-08-18 10:40:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:40:33 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:40:33 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-18 10:40:33 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 10:40:33 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 10:40:33 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-18 10:40:33 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-18 10:40:33 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 10:40:33 --> Total execution time: 29.0758
DEBUG - 2021-08-18 10:40:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:40:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:40:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:40:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:40:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:40:53 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-18 10:40:53 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 10:40:53 --> Total execution time: 0.0820
DEBUG - 2021-08-18 10:41:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:41:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:41:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:41:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:41:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:41:14 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-18 10:41:14 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 10:41:14 --> Total execution time: 0.1059
DEBUG - 2021-08-18 10:41:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:41:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:41:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:41:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:41:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:41:34 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-18 10:41:34 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 10:41:34 --> Total execution time: 0.0835
DEBUG - 2021-08-18 10:41:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:41:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:41:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:41:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:41:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:41:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-18 10:41:54 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 10:41:54 --> Total execution time: 0.1087
DEBUG - 2021-08-18 10:42:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:42:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:42:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:42:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:42:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:42:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-18 10:42:14 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 10:42:14 --> Total execution time: 0.0826
DEBUG - 2021-08-18 10:42:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:42:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:42:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:42:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:42:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:42:34 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-18 10:42:34 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 10:42:34 --> Total execution time: 0.0668
DEBUG - 2021-08-18 10:42:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:42:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:42:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:42:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:42:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:42:54 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-18 10:42:54 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 10:42:54 --> Total execution time: 0.0986
DEBUG - 2021-08-18 10:43:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:43:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:43:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:43:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:43:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:43:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-18 10:43:14 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 10:43:14 --> Total execution time: 0.0725
DEBUG - 2021-08-18 10:43:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:43:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:43:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:43:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:43:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:43:34 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-18 10:43:34 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 10:43:34 --> Total execution time: 0.0636
DEBUG - 2021-08-18 10:43:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:43:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:43:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:43:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:43:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:43:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-18 10:43:54 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 10:43:54 --> Total execution time: 0.0837
DEBUG - 2021-08-18 10:44:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:44:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:44:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:44:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:44:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:44:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-18 10:44:14 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 10:44:14 --> Total execution time: 0.0915
DEBUG - 2021-08-18 10:44:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:44:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:44:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:44:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:44:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:44:34 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-18 10:44:34 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 10:44:34 --> Total execution time: 0.0721
DEBUG - 2021-08-18 10:44:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:44:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:44:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:44:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:44:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:44:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-18 10:44:54 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 10:44:54 --> Total execution time: 0.0864
DEBUG - 2021-08-18 10:45:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:45:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:45:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:45:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:45:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:45:14 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-18 10:45:14 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 10:45:14 --> Total execution time: 0.0693
DEBUG - 2021-08-18 10:45:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:45:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:45:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:45:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:45:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:45:34 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-18 10:45:34 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 10:45:34 --> Total execution time: 0.0761
DEBUG - 2021-08-18 10:45:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:45:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:45:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:45:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:45:47 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:45:47 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-18 10:45:47 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 10:45:47 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 10:45:47 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-18 10:45:47 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-18 10:45:47 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 10:45:47 --> Total execution time: 0.0882
DEBUG - 2021-08-18 10:45:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:45:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:45:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:45:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:45:54 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 10:45:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:45:54 --> No URI present. Default controller set.
DEBUG - 2021-08-18 10:45:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:45:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:45:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:45:54 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 10:45:54 --> Form_validation class already loaded. Second attempt ignored.
QUERY - 2021-08-18 10:45:54 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 10:45:54 --> Total execution time: 0.0620
DEBUG - 2021-08-18 10:45:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:45:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:45:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:45:56 --> No URI present. Default controller set.
DEBUG - 2021-08-18 10:45:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:45:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:45:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:45:56 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 10:45:56 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:45:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:45:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:45:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:45:57 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:45:57 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:46:05 --> 3.5878 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-18 10:46:05 --> 1.2471 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-18 10:46:05 --> 3.5077 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-18 10:46:05 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 10:46:05 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:46:05 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:46:05 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:46:05 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 10:46:05 --> Total execution time: 8.4162
DEBUG - 2021-08-18 10:46:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:46:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:46:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:46:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:46:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:46:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:46:05 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 10:46:06 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:46:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:46:06 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:46:06 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:46:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:46:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:46:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:46:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-18 10:46:09 --> 4.009 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-18 10:46:09 --> Total execution time: 4.0871
DEBUG - 2021-08-18 10:46:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:46:09 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 10:46:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:46:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:46:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-18 10:46:38 --> 28.9709 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
DEBUG - 2021-08-18 10:46:38 --> Total execution time: 32.9403
DEBUG - 2021-08-18 10:46:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:46:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:46:39 --> 0.0548 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `campaign_name` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-18 10:46:39 --> Total execution time: 32.9967
DEBUG - 2021-08-18 10:46:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:46:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:46:39 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:46:39 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 10:46:39 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 10:46:39 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:46:39 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:46:39 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 10:46:39 --> Total execution time: 24.0402
DEBUG - 2021-08-18 10:47:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:47:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:47:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:47:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:47:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:47:00 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:47:00 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 10:47:00 --> Total execution time: 0.0625
DEBUG - 2021-08-18 10:47:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:47:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:47:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:47:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:47:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:47:20 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:47:20 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 10:47:20 --> Total execution time: 0.0663
DEBUG - 2021-08-18 10:47:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:47:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:47:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:47:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:47:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:47:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:47:40 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 10:47:40 --> Total execution time: 0.0848
DEBUG - 2021-08-18 10:48:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:48:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:48:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:48:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:48:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:48:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:48:00 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 10:48:00 --> Total execution time: 0.0675
DEBUG - 2021-08-18 10:48:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:48:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:48:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:48:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:48:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:48:20 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:48:20 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 10:48:20 --> Total execution time: 0.0763
DEBUG - 2021-08-18 10:48:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:48:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:48:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:48:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:48:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:48:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:48:40 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 10:48:40 --> Total execution time: 0.0743
DEBUG - 2021-08-18 10:48:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:48:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:48:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:48:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:48:48 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:48:48 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:48:48 --> 0.0006 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 10:48:48 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 10:48:48 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:48:48 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:48:48 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 10:48:48 --> Total execution time: 0.0810
DEBUG - 2021-08-18 10:49:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:49:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:49:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:49:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:49:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:49:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:49:10 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 10:49:10 --> Total execution time: 0.0861
DEBUG - 2021-08-18 10:49:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:49:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:49:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:49:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:49:30 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:49:30 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:49:30 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 10:49:30 --> Total execution time: 0.0799
DEBUG - 2021-08-18 10:49:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:49:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:49:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:49:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:49:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:49:35 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:49:35 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 10:49:35 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 10:49:35 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:49:35 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:49:35 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 10:49:35 --> Total execution time: 0.0716
DEBUG - 2021-08-18 10:49:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:49:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:49:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:49:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:49:36 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:49:36 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:49:36 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 10:49:36 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 10:49:36 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:49:36 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:49:36 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 10:49:36 --> Total execution time: 0.0742
DEBUG - 2021-08-18 10:49:57 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:49:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:49:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:49:57 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:49:57 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:49:57 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:49:57 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 10:49:57 --> Total execution time: 0.0848
DEBUG - 2021-08-18 10:50:17 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:50:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:50:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:50:17 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:50:17 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:50:17 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:50:17 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 10:50:17 --> Total execution time: 0.0690
DEBUG - 2021-08-18 10:50:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:50:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:50:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:50:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:50:37 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:50:37 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:50:37 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 10:50:37 --> Total execution time: 0.0898
DEBUG - 2021-08-18 10:50:57 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:50:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:50:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:50:57 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:50:57 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:50:57 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:50:57 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 10:50:57 --> Total execution time: 0.0729
DEBUG - 2021-08-18 10:51:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:51:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:51:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:51:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:51:12 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:51:12 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:51:12 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 10:51:12 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 10:51:12 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:51:12 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:51:12 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 10:51:12 --> Total execution time: 0.0810
DEBUG - 2021-08-18 10:51:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:51:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:51:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:51:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:51:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:51:27 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:51:27 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 10:51:27 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 10:51:27 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:51:27 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:51:27 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 10:51:27 --> Total execution time: 0.0678
DEBUG - 2021-08-18 10:51:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:51:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:51:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:51:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:51:47 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:51:47 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:51:47 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 10:51:47 --> Total execution time: 0.0724
DEBUG - 2021-08-18 10:52:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:52:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:52:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:52:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:52:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:52:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:52:08 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 10:52:08 --> Total execution time: 0.0832
DEBUG - 2021-08-18 10:52:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:52:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:52:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:52:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:52:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:52:23 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:52:23 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 10:52:23 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 10:52:23 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:52:23 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:52:23 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 10:52:23 --> Total execution time: 0.0853
DEBUG - 2021-08-18 10:52:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:52:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:52:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:52:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:52:37 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:52:37 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:52:37 --> 0.0944 | DELETE FROM `csvimportlog` WHERE `id` IN('2', '1')
DEBUG - 2021-08-18 10:52:37 --> Total execution time: 0.1744
DEBUG - 2021-08-18 10:52:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:52:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:52:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:52:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:52:37 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:52:37 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:52:37 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 10:52:37 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 10:52:37 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:52:37 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:52:37 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 10:52:37 --> Total execution time: 0.0829
DEBUG - 2021-08-18 10:52:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:52:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:52:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:52:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:52:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:52:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:52:58 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 10:52:58 --> Total execution time: 0.0774
DEBUG - 2021-08-18 10:53:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:53:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:53:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:53:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:53:18 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:53:18 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:53:18 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 10:53:18 --> Total execution time: 0.0740
DEBUG - 2021-08-18 10:53:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:53:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:53:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:53:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:53:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:53:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:53:38 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 10:53:38 --> Total execution time: 0.0826
DEBUG - 2021-08-18 10:53:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:53:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:53:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:53:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:53:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:53:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:53:58 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 10:53:58 --> Total execution time: 0.0885
DEBUG - 2021-08-18 10:54:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:54:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:54:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:54:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:54:18 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:54:18 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:54:18 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 10:54:18 --> Total execution time: 0.0830
DEBUG - 2021-08-18 10:54:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:54:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:54:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:54:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:54:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:54:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:54:38 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 10:54:38 --> Total execution time: 0.0731
DEBUG - 2021-08-18 10:54:57 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:54:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:54:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:54:57 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:54:57 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:54:57 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:54:57 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 10:54:57 --> Total execution time: 0.0800
DEBUG - 2021-08-18 10:54:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:54:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:54:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:54:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:54:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:54:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:54:59 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 10:54:59 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 10:54:59 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:54:59 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:54:59 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 10:54:59 --> Total execution time: 0.0696
DEBUG - 2021-08-18 10:55:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:55:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:55:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:55:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:55:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:55:20 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:55:20 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 10:55:20 --> Total execution time: 0.0690
DEBUG - 2021-08-18 10:55:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:55:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:55:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:55:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:55:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:55:39 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:55:39 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 10:55:39 --> Total execution time: 0.1108
DEBUG - 2021-08-18 10:56:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:56:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:56:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:56:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:56:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:56:00 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:56:00 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 10:56:00 --> Total execution time: 0.0797
DEBUG - 2021-08-18 10:56:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:56:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:56:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:56:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:56:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:56:20 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:56:20 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 10:56:20 --> Total execution time: 0.0843
DEBUG - 2021-08-18 10:56:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:56:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:56:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:56:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:56:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:56:39 --> 0.0008 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:56:39 --> 0.0006 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 10:56:39 --> Total execution time: 0.1098
DEBUG - 2021-08-18 10:57:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:57:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:57:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:57:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:57:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:57:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:57:00 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 10:57:00 --> Total execution time: 0.0778
DEBUG - 2021-08-18 10:57:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:57:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:57:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:57:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:57:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:57:20 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:57:20 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 10:57:20 --> Total execution time: 0.0754
DEBUG - 2021-08-18 10:57:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:57:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:57:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:57:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:57:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:57:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:57:25 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 10:57:25 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 10:57:25 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:57:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:57:25 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 10:57:25 --> Total execution time: 0.0832
DEBUG - 2021-08-18 10:57:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:57:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:57:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:57:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:57:47 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:57:47 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:57:47 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 10:57:47 --> Total execution time: 0.0912
DEBUG - 2021-08-18 10:58:06 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:58:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:58:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:58:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:58:06 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:58:06 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:58:06 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 10:58:06 --> Total execution time: 0.0804
DEBUG - 2021-08-18 10:58:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:58:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:58:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:58:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:58:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:58:27 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:58:27 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 10:58:27 --> Total execution time: 0.0832
DEBUG - 2021-08-18 10:58:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:58:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:58:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:58:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:58:47 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:58:47 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:58:47 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 10:58:47 --> Total execution time: 0.1214
DEBUG - 2021-08-18 10:59:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:59:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:59:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:59:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:59:07 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:59:07 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:59:07 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 10:59:07 --> Total execution time: 0.0824
DEBUG - 2021-08-18 10:59:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:59:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:59:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:59:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:59:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:59:27 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:59:27 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 10:59:27 --> Total execution time: 0.0671
DEBUG - 2021-08-18 10:59:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 10:59:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 10:59:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 10:59:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 10:59:47 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 10:59:47 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 10:59:47 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 10:59:47 --> Total execution time: 0.0986
DEBUG - 2021-08-18 11:00:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:00:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:00:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:00:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:00:07 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:00:07 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:00:07 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:00:07 --> Total execution time: 0.0669
DEBUG - 2021-08-18 11:00:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:00:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:00:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:00:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:00:11 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:00:11 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:00:11 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 11:00:11 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 11:00:11 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:00:11 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:00:11 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 11:00:11 --> Total execution time: 0.0718
DEBUG - 2021-08-18 11:00:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:00:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:00:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:00:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:00:14 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 11:02:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:02:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:02:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:02:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:02:48 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:02:48 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:02:48 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 11:02:48 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 11:02:48 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:02:48 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:02:48 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 11:02:48 --> Total execution time: 0.0860
DEBUG - 2021-08-18 11:02:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:02:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:02:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:02:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:02:50 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:02:50 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:02:50 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 11:02:50 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 11:02:50 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:02:50 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:02:50 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 11:02:50 --> Total execution time: 0.0684
DEBUG - 2021-08-18 11:03:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:03:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:03:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:03:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:03:02 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:03:02 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:03:02 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 11:03:02 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 11:03:02 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:03:02 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:03:02 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 11:03:02 --> Total execution time: 0.0724
DEBUG - 2021-08-18 11:03:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:03:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:03:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:03:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:03:04 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:03:04 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:03:04 --> 0.0052 | SELECT * FROM `gpi_data` ORDER BY `id`  LIMIT 1000
DEBUG - 2021-08-18 11:03:04 --> Total execution time: 0.1720
DEBUG - 2021-08-18 11:03:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:03:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:03:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:03:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:03:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:03:22 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:03:22 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 11:03:22 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 11:03:22 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:03:22 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:03:22 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 11:03:22 --> Total execution time: 0.0729
DEBUG - 2021-08-18 11:03:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:03:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:03:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:03:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:03:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:03:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:03:24 --> 0.0107 | SELECT * FROM `gpi_data` ORDER BY `id`  LIMIT 1000
DEBUG - 2021-08-18 11:03:24 --> Total execution time: 0.1579
DEBUG - 2021-08-18 11:03:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:03:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:03:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:03:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:03:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:03:43 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:03:43 --> 0.0013 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:03:43 --> Total execution time: 0.1396
DEBUG - 2021-08-18 11:04:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:04:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:04:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:04:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:04:03 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:04:03 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:04:03 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:04:03 --> Total execution time: 0.0682
DEBUG - 2021-08-18 11:04:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:04:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:04:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:04:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:04:05 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:04:05 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:04:05 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 11:04:05 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 11:04:05 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:04:05 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:04:05 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 11:04:05 --> Total execution time: 0.0862
DEBUG - 2021-08-18 11:04:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:04:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:04:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:04:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:04:07 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:04:07 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:04:07 --> 0.0058 | SELECT * FROM `gpi_data` ORDER BY `id`  LIMIT 1000
DEBUG - 2021-08-18 11:04:07 --> Total execution time: 0.1785
DEBUG - 2021-08-18 11:04:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:04:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:04:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:04:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:04:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:04:26 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:04:26 --> 0.0005 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:04:26 --> Total execution time: 0.1042
DEBUG - 2021-08-18 11:04:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:04:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:04:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:04:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:04:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:04:46 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:04:46 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:04:46 --> Total execution time: 0.0663
DEBUG - 2021-08-18 11:04:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:04:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:04:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:04:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:04:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:04:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:04:59 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 11:04:59 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 11:04:59 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:04:59 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:04:59 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 11:04:59 --> Total execution time: 0.0815
DEBUG - 2021-08-18 11:05:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:05:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:05:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:05:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:05:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:05:01 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:05:01 --> 0.007 | SELECT * FROM `gpi_data` ORDER BY `id`  LIMIT 1000
DEBUG - 2021-08-18 11:05:01 --> Total execution time: 0.1518
DEBUG - 2021-08-18 11:05:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:05:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:05:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:05:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:05:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:05:20 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:05:20 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:05:20 --> Total execution time: 0.0757
DEBUG - 2021-08-18 11:05:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:05:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:05:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:05:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:05:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:05:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:05:40 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:05:40 --> Total execution time: 0.0671
DEBUG - 2021-08-18 11:06:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:06:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:06:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:06:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:06:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:06:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:06:00 --> 0.0008 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:06:00 --> Total execution time: 0.0907
DEBUG - 2021-08-18 11:06:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:06:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:06:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:06:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:06:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:06:20 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:06:20 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:06:20 --> Total execution time: 0.0775
DEBUG - 2021-08-18 11:06:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:06:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:06:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:06:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:06:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:06:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:06:40 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:06:40 --> Total execution time: 0.0914
DEBUG - 2021-08-18 11:07:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:07:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:07:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:07:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:07:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:07:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:07:00 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:07:00 --> Total execution time: 0.0704
DEBUG - 2021-08-18 11:07:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:07:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:07:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:07:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:07:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:07:20 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:07:20 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:07:20 --> Total execution time: 0.0850
DEBUG - 2021-08-18 11:07:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:07:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:07:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:07:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:07:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:07:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:07:40 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:07:40 --> Total execution time: 0.0688
DEBUG - 2021-08-18 11:08:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:08:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:08:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:08:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:08:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:08:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:08:00 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:08:00 --> Total execution time: 0.0799
DEBUG - 2021-08-18 11:08:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:08:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:08:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:08:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:08:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:08:20 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:08:20 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:08:20 --> Total execution time: 0.1007
DEBUG - 2021-08-18 11:08:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:08:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:08:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:08:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:08:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:08:40 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:08:40 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:08:40 --> Total execution time: 0.0883
DEBUG - 2021-08-18 11:09:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:09:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:09:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:09:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:09:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:09:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:09:00 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:09:00 --> Total execution time: 0.0788
DEBUG - 2021-08-18 11:09:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:09:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:09:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:09:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:09:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:09:20 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:09:20 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:09:20 --> Total execution time: 0.0734
DEBUG - 2021-08-18 11:09:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:09:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:09:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:09:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:09:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:09:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:09:40 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:09:40 --> Total execution time: 0.0899
DEBUG - 2021-08-18 11:10:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:10:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:10:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:10:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:10:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:10:00 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:10:00 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:10:00 --> Total execution time: 0.0777
DEBUG - 2021-08-18 11:10:19 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:10:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:10:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:10:19 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:10:19 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:10:19 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:10:19 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:10:19 --> Total execution time: 0.0616
DEBUG - 2021-08-18 11:10:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:10:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:10:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:10:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:10:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:10:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:10:40 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:10:40 --> Total execution time: 0.0676
DEBUG - 2021-08-18 11:11:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:11:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:11:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:11:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:11:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:11:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:11:00 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:11:00 --> Total execution time: 0.0722
DEBUG - 2021-08-18 11:11:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:11:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:11:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:11:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:11:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:11:20 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:11:20 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:11:20 --> Total execution time: 0.0777
DEBUG - 2021-08-18 11:11:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:11:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:11:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:11:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:11:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:11:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:11:40 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:11:40 --> Total execution time: 0.0753
DEBUG - 2021-08-18 11:12:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:12:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:12:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:12:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:12:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:12:00 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:12:00 --> 0.0025 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:12:00 --> Total execution time: 0.0779
DEBUG - 2021-08-18 11:12:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:12:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:12:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:12:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:12:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:12:20 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:12:20 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:12:20 --> Total execution time: 0.0858
DEBUG - 2021-08-18 11:12:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:12:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:12:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:12:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:12:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:12:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:12:40 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:12:40 --> Total execution time: 0.0739
DEBUG - 2021-08-18 11:13:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:13:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:13:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:13:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:13:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:13:00 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:13:00 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:13:00 --> Total execution time: 0.0656
DEBUG - 2021-08-18 11:13:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:13:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:13:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:13:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:13:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:13:20 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:13:20 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:13:20 --> Total execution time: 0.0703
DEBUG - 2021-08-18 11:13:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:13:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:13:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:13:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:13:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:13:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:13:40 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:13:40 --> Total execution time: 0.0667
DEBUG - 2021-08-18 11:14:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:14:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:14:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:14:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:14:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:14:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:14:00 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:14:00 --> Total execution time: 0.0708
DEBUG - 2021-08-18 11:14:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:14:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:14:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:14:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:14:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:14:20 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:14:20 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:14:20 --> Total execution time: 0.0922
DEBUG - 2021-08-18 11:14:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:14:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:14:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:14:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:14:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:14:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:14:40 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:14:40 --> Total execution time: 0.0632
DEBUG - 2021-08-18 11:15:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:15:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:15:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:15:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:15:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:15:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:15:00 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:15:00 --> Total execution time: 0.0625
DEBUG - 2021-08-18 11:15:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:15:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:15:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:15:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:15:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:15:20 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:15:20 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:15:20 --> Total execution time: 0.0778
DEBUG - 2021-08-18 11:15:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:15:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:15:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:15:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:15:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:15:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:15:40 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:15:40 --> Total execution time: 0.0645
DEBUG - 2021-08-18 11:16:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:16:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:16:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:16:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:16:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:16:00 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:16:00 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:16:00 --> Total execution time: 0.0793
DEBUG - 2021-08-18 11:16:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:16:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:16:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:16:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:16:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:16:20 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:16:20 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:16:20 --> Total execution time: 0.0805
DEBUG - 2021-08-18 11:16:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:16:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:16:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:16:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:16:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:16:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:16:40 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:16:40 --> Total execution time: 0.0655
DEBUG - 2021-08-18 11:17:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:17:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:17:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:17:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:17:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:17:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:17:00 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:17:00 --> Total execution time: 0.0736
DEBUG - 2021-08-18 11:17:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:17:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:17:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:17:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:17:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:17:20 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:17:20 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:17:20 --> Total execution time: 0.0805
DEBUG - 2021-08-18 11:17:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:17:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:17:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:17:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:17:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:17:40 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:17:40 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:17:40 --> Total execution time: 0.0679
DEBUG - 2021-08-18 11:18:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:18:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:18:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:18:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:18:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:18:00 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:18:00 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:18:00 --> Total execution time: 0.0718
DEBUG - 2021-08-18 11:18:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:18:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:18:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:18:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:18:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:18:20 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:18:20 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:18:20 --> Total execution time: 0.0700
DEBUG - 2021-08-18 11:18:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:18:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:18:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:18:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:18:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:18:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:18:40 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:18:40 --> Total execution time: 0.0749
DEBUG - 2021-08-18 11:19:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:19:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:19:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:19:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:19:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:19:00 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:19:00 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:19:00 --> Total execution time: 0.0741
DEBUG - 2021-08-18 11:19:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:19:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:19:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:19:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:19:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:19:20 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:19:20 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:19:20 --> Total execution time: 0.1221
DEBUG - 2021-08-18 11:19:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:19:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:19:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:19:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:19:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:19:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:19:40 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:19:40 --> Total execution time: 0.0803
DEBUG - 2021-08-18 11:20:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:20:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:20:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:20:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:20:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:20:00 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:20:00 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:20:00 --> Total execution time: 0.1081
DEBUG - 2021-08-18 11:20:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:20:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:20:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:20:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:20:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:20:20 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:20:20 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:20:20 --> Total execution time: 0.0631
DEBUG - 2021-08-18 11:20:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:20:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:20:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:20:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:20:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:20:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:20:40 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:20:40 --> Total execution time: 0.0817
DEBUG - 2021-08-18 11:20:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:20:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:20:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:20:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:20:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:20:59 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:20:59 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 11:20:59 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 11:20:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:20:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:20:59 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 11:20:59 --> Total execution time: 0.0873
DEBUG - 2021-08-18 11:21:19 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:21:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:21:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:21:19 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:21:19 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:21:19 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:21:19 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:21:19 --> Total execution time: 0.1172
DEBUG - 2021-08-18 11:21:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:21:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:21:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:21:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:21:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:21:20 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:21:20 --> 0.0005 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 11:21:20 --> 0.0007 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 11:21:20 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:21:20 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:21:20 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 11:21:20 --> Total execution time: 0.0992
DEBUG - 2021-08-18 11:21:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:21:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:21:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:21:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:21:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:21:23 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:21:23 --> 0.0054 | SELECT * FROM `gpi_data` ORDER BY `id`  LIMIT 1000
DEBUG - 2021-08-18 11:21:23 --> Total execution time: 1.3910
DEBUG - 2021-08-18 11:21:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:21:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:21:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:21:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:21:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:21:41 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:21:41 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:21:41 --> Total execution time: 0.0801
DEBUG - 2021-08-18 11:22:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:22:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:22:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:22:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:22:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:22:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:22:01 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:22:01 --> Total execution time: 0.0909
DEBUG - 2021-08-18 11:22:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:22:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:22:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:22:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:22:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:22:21 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:22:21 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:22:21 --> Total execution time: 0.0916
DEBUG - 2021-08-18 11:22:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:22:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:22:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:22:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:22:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:22:41 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:22:41 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:22:41 --> Total execution time: 0.0736
DEBUG - 2021-08-18 11:23:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:23:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:23:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:23:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:23:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:23:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:23:01 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:23:01 --> Total execution time: 0.1094
DEBUG - 2021-08-18 11:23:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:23:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:23:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:23:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:23:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:23:21 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:23:21 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:23:21 --> Total execution time: 0.0851
DEBUG - 2021-08-18 11:23:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:23:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:23:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:23:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:23:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:23:41 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:23:41 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:23:41 --> Total execution time: 0.0659
DEBUG - 2021-08-18 11:24:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:24:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:24:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:24:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:24:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:24:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:24:01 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:24:01 --> Total execution time: 0.0827
DEBUG - 2021-08-18 11:24:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:24:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:24:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:24:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:24:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:24:21 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:24:21 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:24:21 --> Total execution time: 0.1029
DEBUG - 2021-08-18 11:24:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:24:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:24:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:24:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:24:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:24:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:24:41 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:24:41 --> Total execution time: 0.0790
DEBUG - 2021-08-18 11:25:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:25:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:25:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:25:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:25:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:25:01 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:25:01 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:25:01 --> Total execution time: 0.0798
DEBUG - 2021-08-18 11:25:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:25:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:25:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:25:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:25:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:25:21 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:25:21 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:25:21 --> Total execution time: 0.0817
DEBUG - 2021-08-18 11:25:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:25:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:25:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:25:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:25:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:25:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:25:41 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:25:41 --> Total execution time: 0.0714
DEBUG - 2021-08-18 11:26:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:26:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:26:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:26:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:26:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:26:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:26:01 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:26:01 --> Total execution time: 0.0914
DEBUG - 2021-08-18 11:26:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:26:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:26:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:26:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:26:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:26:21 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:26:21 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:26:21 --> Total execution time: 0.0850
DEBUG - 2021-08-18 11:26:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:26:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:26:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:26:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:26:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:26:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:26:41 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:26:41 --> Total execution time: 0.0705
DEBUG - 2021-08-18 11:27:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:27:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:27:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:27:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:27:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:27:01 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:27:01 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:27:01 --> Total execution time: 0.1008
DEBUG - 2021-08-18 11:27:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:27:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:27:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:27:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:27:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:27:21 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:27:21 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:27:21 --> Total execution time: 0.0712
DEBUG - 2021-08-18 11:27:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:27:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:27:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:27:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:27:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:27:41 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:27:41 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:27:41 --> Total execution time: 0.0735
DEBUG - 2021-08-18 11:28:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:28:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:28:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:28:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:28:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:28:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:28:01 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:28:01 --> Total execution time: 0.0995
DEBUG - 2021-08-18 11:28:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:28:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:28:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:28:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:28:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:28:21 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:28:21 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:28:21 --> Total execution time: 0.0939
DEBUG - 2021-08-18 11:29:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:29:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:29:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:29:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:29:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:29:22 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:29:22 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:29:22 --> Total execution time: 0.0703
DEBUG - 2021-08-18 11:30:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:30:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:30:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:30:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:30:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:30:23 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:30:23 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:30:23 --> Total execution time: 0.0731
DEBUG - 2021-08-18 11:31:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:31:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:31:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:31:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:31:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:31:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:31:24 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:31:24 --> Total execution time: 0.0745
DEBUG - 2021-08-18 11:32:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:32:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:32:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:32:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:32:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:32:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:32:25 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:32:25 --> Total execution time: 0.0860
DEBUG - 2021-08-18 11:33:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:33:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:33:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:33:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:33:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:33:26 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:33:26 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:33:26 --> Total execution time: 0.0771
DEBUG - 2021-08-18 11:34:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:34:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:34:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:34:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:34:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:34:27 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:34:27 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:34:27 --> Total execution time: 0.0732
DEBUG - 2021-08-18 11:35:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:35:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:35:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:35:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:35:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:35:27 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:35:27 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:35:27 --> Total execution time: 0.0633
DEBUG - 2021-08-18 11:36:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:36:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:36:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:36:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:36:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:36:27 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:36:27 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:36:27 --> Total execution time: 0.0692
DEBUG - 2021-08-18 11:37:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:37:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:37:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:37:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:37:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:37:27 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:37:27 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:37:27 --> Total execution time: 0.0715
DEBUG - 2021-08-18 11:38:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:38:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:38:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:38:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:38:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:38:27 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:38:27 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:38:27 --> Total execution time: 0.0797
DEBUG - 2021-08-18 11:39:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:39:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:39:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:39:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:39:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:39:27 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:39:27 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:39:27 --> Total execution time: 0.0809
DEBUG - 2021-08-18 11:40:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:40:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:40:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:40:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:40:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:40:27 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:40:27 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:40:27 --> Total execution time: 0.0796
DEBUG - 2021-08-18 11:41:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:41:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:41:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:41:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:41:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:41:27 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:41:27 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:41:27 --> Total execution time: 0.0802
DEBUG - 2021-08-18 11:42:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:42:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:42:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:42:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:42:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:42:27 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:42:27 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:42:27 --> Total execution time: 0.0869
DEBUG - 2021-08-18 11:43:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:43:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:43:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:43:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:43:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:43:27 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:43:27 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:43:27 --> Total execution time: 0.0922
DEBUG - 2021-08-18 11:44:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:44:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:44:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:44:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:44:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:44:27 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:44:27 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:44:27 --> Total execution time: 0.0723
DEBUG - 2021-08-18 11:45:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:45:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:45:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:45:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:45:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:45:27 --> 0.0073 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:45:27 --> 0.0006 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:45:27 --> Total execution time: 0.1649
DEBUG - 2021-08-18 11:46:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:46:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:46:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:46:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:46:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:46:27 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:46:27 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:46:27 --> Total execution time: 0.0925
DEBUG - 2021-08-18 11:47:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:47:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:47:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:47:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:47:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:47:27 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:47:27 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:47:27 --> Total execution time: 0.0941
DEBUG - 2021-08-18 11:48:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:48:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:48:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:48:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:48:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:48:27 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:48:27 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:48:27 --> Total execution time: 0.0711
DEBUG - 2021-08-18 11:49:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:49:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:49:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:49:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:49:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:49:27 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:49:27 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:49:27 --> Total execution time: 0.0712
DEBUG - 2021-08-18 11:50:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:50:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:50:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:50:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:50:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:50:27 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:50:27 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:50:27 --> Total execution time: 0.0707
DEBUG - 2021-08-18 11:51:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:51:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:51:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:51:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:51:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:51:27 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:51:27 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:51:27 --> Total execution time: 0.0720
DEBUG - 2021-08-18 11:52:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:52:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:52:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:52:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:52:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:52:27 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:52:27 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:52:27 --> Total execution time: 0.0771
DEBUG - 2021-08-18 11:53:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:53:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:53:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:53:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:53:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:53:27 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:53:27 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:53:27 --> Total execution time: 0.0713
DEBUG - 2021-08-18 11:54:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:54:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:54:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:54:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:54:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:54:27 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:54:27 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:54:27 --> Total execution time: 0.0682
DEBUG - 2021-08-18 11:55:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:55:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:55:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:55:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:55:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:55:27 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:55:27 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:55:27 --> Total execution time: 0.0980
DEBUG - 2021-08-18 11:56:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:56:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:56:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:56:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:56:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:56:27 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:56:27 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:56:27 --> Total execution time: 0.0766
DEBUG - 2021-08-18 11:57:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:57:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:57:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:57:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:57:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:57:27 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:57:27 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:57:27 --> Total execution time: 0.0778
DEBUG - 2021-08-18 11:58:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:58:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:58:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:58:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:58:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:58:27 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:58:27 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:58:27 --> Total execution time: 0.0812
DEBUG - 2021-08-18 11:59:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 11:59:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 11:59:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 11:59:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 11:59:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 11:59:27 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 11:59:27 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 11:59:27 --> Total execution time: 0.0893
DEBUG - 2021-08-18 12:00:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:00:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:00:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:00:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:00:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:00:27 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:00:27 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:00:27 --> Total execution time: 0.0685
DEBUG - 2021-08-18 12:01:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:01:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:01:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:01:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:01:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:01:27 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:01:27 --> 0.0008 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:01:27 --> Total execution time: 0.0832
DEBUG - 2021-08-18 12:02:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:02:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:02:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:02:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:02:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:02:27 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:02:27 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:02:27 --> Total execution time: 0.0777
DEBUG - 2021-08-18 12:03:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:03:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:03:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:03:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:03:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:03:27 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:03:27 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:03:27 --> Total execution time: 0.0827
DEBUG - 2021-08-18 12:04:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:04:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:04:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:04:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:04:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:04:27 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:04:27 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:04:27 --> Total execution time: 0.0747
DEBUG - 2021-08-18 12:05:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:05:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:05:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:05:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:05:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:05:27 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:05:27 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:05:27 --> Total execution time: 0.0660
DEBUG - 2021-08-18 12:06:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:06:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:06:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:06:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:06:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:06:27 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:06:27 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:06:27 --> Total execution time: 0.0788
DEBUG - 2021-08-18 12:07:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:07:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:07:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:07:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:07:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:07:27 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:07:27 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:07:27 --> Total execution time: 0.1304
DEBUG - 2021-08-18 12:08:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:08:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:08:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:08:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:08:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:08:27 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:08:27 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:08:27 --> Total execution time: 0.1172
DEBUG - 2021-08-18 12:08:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:08:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:08:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:08:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:08:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:08:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:08:41 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:08:41 --> Total execution time: 0.0871
DEBUG - 2021-08-18 12:09:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:09:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:09:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:09:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:09:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:09:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:09:01 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:09:01 --> Total execution time: 0.0814
DEBUG - 2021-08-18 12:09:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:09:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:09:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:09:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:09:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:09:21 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:09:21 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:09:21 --> Total execution time: 0.0740
DEBUG - 2021-08-18 12:09:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:09:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:09:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:09:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:09:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:09:41 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:09:41 --> 0.0007 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:09:41 --> Total execution time: 0.1044
DEBUG - 2021-08-18 12:10:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:10:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:10:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:10:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:10:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:10:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:10:01 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:10:01 --> Total execution time: 0.0806
DEBUG - 2021-08-18 12:10:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:10:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:10:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:10:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:10:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:10:21 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:10:21 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:10:21 --> Total execution time: 0.0736
DEBUG - 2021-08-18 12:10:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:10:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:10:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:10:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:10:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:10:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:10:41 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:10:41 --> Total execution time: 0.0892
DEBUG - 2021-08-18 12:11:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:11:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:11:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:11:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:11:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:11:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:11:01 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:11:01 --> Total execution time: 0.0780
DEBUG - 2021-08-18 12:11:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:11:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:11:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:11:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:11:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:11:21 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:11:21 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:11:21 --> Total execution time: 0.0774
DEBUG - 2021-08-18 12:11:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:11:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:11:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:11:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:11:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:11:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:11:41 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:11:41 --> Total execution time: 0.0779
DEBUG - 2021-08-18 12:12:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:12:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:12:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:12:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:12:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:12:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:12:01 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:12:01 --> Total execution time: 0.0722
DEBUG - 2021-08-18 12:12:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:12:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:12:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:12:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:12:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:12:21 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:12:21 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:12:21 --> Total execution time: 0.0821
DEBUG - 2021-08-18 12:12:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:12:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:12:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:12:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:12:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:12:41 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:12:41 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:12:41 --> Total execution time: 0.0916
DEBUG - 2021-08-18 12:13:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:13:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:13:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:13:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:13:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:13:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:13:01 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:13:01 --> Total execution time: 0.0683
DEBUG - 2021-08-18 12:13:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:13:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:13:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:13:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:13:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:13:21 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:13:21 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:13:21 --> Total execution time: 0.0803
DEBUG - 2021-08-18 12:13:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:13:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:13:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:13:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:13:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:13:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:13:41 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:13:41 --> Total execution time: 0.0905
DEBUG - 2021-08-18 12:14:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:14:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:14:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:14:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:14:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:14:01 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:14:01 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:14:01 --> Total execution time: 0.0775
DEBUG - 2021-08-18 12:14:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:14:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:14:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:14:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:14:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:14:21 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:14:21 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:14:21 --> Total execution time: 0.0595
DEBUG - 2021-08-18 12:14:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:14:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:14:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:14:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:14:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:14:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:14:41 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:14:41 --> Total execution time: 0.0887
DEBUG - 2021-08-18 12:15:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:15:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:15:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:15:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:15:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:15:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:15:01 --> 0.0013 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:15:01 --> Total execution time: 0.0849
DEBUG - 2021-08-18 12:15:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:15:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:15:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:15:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:15:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:15:21 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:15:21 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:15:21 --> Total execution time: 0.0743
DEBUG - 2021-08-18 12:15:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:15:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:15:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:15:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:15:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:15:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:15:41 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:15:41 --> Total execution time: 0.0832
DEBUG - 2021-08-18 12:16:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:16:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:16:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:16:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:16:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:16:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:16:01 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:16:01 --> Total execution time: 0.0898
DEBUG - 2021-08-18 12:16:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:16:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:16:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:16:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:16:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:16:21 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:16:21 --> 0.0005 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:16:21 --> Total execution time: 0.1642
DEBUG - 2021-08-18 12:17:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:17:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:17:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:17:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:17:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:17:22 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:17:22 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:17:22 --> Total execution time: 0.0894
DEBUG - 2021-08-18 12:18:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:18:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:18:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:18:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:18:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:18:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:18:23 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:18:23 --> Total execution time: 0.0773
DEBUG - 2021-08-18 12:19:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:19:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:19:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:19:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:19:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:19:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:19:24 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:19:24 --> Total execution time: 0.0792
DEBUG - 2021-08-18 12:20:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:20:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:20:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:20:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:20:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:20:25 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:20:25 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:20:25 --> Total execution time: 0.1035
DEBUG - 2021-08-18 12:21:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:21:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:21:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:21:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:21:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:21:26 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:21:26 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:21:26 --> Total execution time: 0.0740
DEBUG - 2021-08-18 12:22:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:22:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:22:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:22:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:22:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:22:27 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:22:27 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:22:27 --> Total execution time: 0.0795
DEBUG - 2021-08-18 12:23:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:23:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:23:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:23:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:23:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:23:27 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:23:27 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:23:27 --> Total execution time: 0.0715
DEBUG - 2021-08-18 12:24:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:24:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:24:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:24:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:24:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:24:27 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:24:27 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:24:27 --> Total execution time: 0.0796
DEBUG - 2021-08-18 12:25:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:25:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:25:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:25:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:25:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:25:21 --> 0.001 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:25:21 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:25:21 --> Total execution time: 0.1074
DEBUG - 2021-08-18 12:25:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:25:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:25:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:25:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:25:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:25:23 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:25:23 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 12:25:23 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 12:25:23 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:25:23 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:25:23 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 12:25:23 --> Total execution time: 0.0967
DEBUG - 2021-08-18 12:25:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:25:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:25:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:25:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:25:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:25:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:25:28 --> 0.0054 | SELECT * FROM `gpi_data` ORDER BY `id`  LIMIT 1000
DEBUG - 2021-08-18 12:25:28 --> Total execution time: 1.1641
DEBUG - 2021-08-18 12:25:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:25:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:25:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:25:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:25:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:25:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:25:44 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:25:44 --> Total execution time: 0.0746
DEBUG - 2021-08-18 12:26:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:26:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:26:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:26:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:26:04 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:26:04 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:26:04 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:26:04 --> Total execution time: 0.0834
DEBUG - 2021-08-18 12:26:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:26:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:26:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:26:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:26:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:26:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:26:24 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:26:24 --> Total execution time: 0.0758
DEBUG - 2021-08-18 12:26:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:26:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:26:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:26:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:26:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:26:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:26:44 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:26:44 --> Total execution time: 0.0768
DEBUG - 2021-08-18 12:27:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:27:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:27:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:27:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:27:04 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:27:04 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:27:04 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:27:04 --> Total execution time: 0.0751
DEBUG - 2021-08-18 12:27:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:27:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:27:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:27:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:27:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:27:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:27:24 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:27:24 --> Total execution time: 0.0785
DEBUG - 2021-08-18 12:27:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:27:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:27:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:27:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:27:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:27:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:27:44 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:27:44 --> Total execution time: 0.1271
DEBUG - 2021-08-18 12:28:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:28:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:28:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:28:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:28:03 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:28:03 --> 0.0009 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:28:03 --> 0.0005 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:28:03 --> Total execution time: 0.1119
DEBUG - 2021-08-18 12:28:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:28:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:28:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:28:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:28:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:28:24 --> 0.0018 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:28:24 --> 0.002 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:28:24 --> Total execution time: 0.1644
DEBUG - 2021-08-18 12:28:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:28:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:28:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:28:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:28:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:28:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:28:44 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:28:44 --> Total execution time: 0.0767
DEBUG - 2021-08-18 12:29:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:29:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:29:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:29:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:29:03 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:29:03 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:29:03 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:29:03 --> Total execution time: 0.0992
DEBUG - 2021-08-18 12:29:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:29:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:29:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:29:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:29:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:29:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:29:23 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:29:23 --> Total execution time: 0.0996
DEBUG - 2021-08-18 12:29:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:29:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:29:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:29:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:29:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:29:43 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:29:43 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:29:43 --> Total execution time: 0.0850
DEBUG - 2021-08-18 12:30:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:30:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:30:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:30:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:30:04 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:30:04 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:30:04 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:30:04 --> Total execution time: 0.0787
DEBUG - 2021-08-18 12:30:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:30:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:30:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:30:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:30:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:30:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:30:24 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:30:24 --> Total execution time: 0.0750
DEBUG - 2021-08-18 12:30:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:30:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:30:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:30:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:30:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:30:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:30:44 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:30:44 --> Total execution time: 0.0706
DEBUG - 2021-08-18 12:31:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:31:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:31:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:31:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:31:04 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:31:04 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:31:04 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:31:04 --> Total execution time: 0.0745
DEBUG - 2021-08-18 12:31:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:31:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:31:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:31:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:31:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:31:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:31:24 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:31:24 --> Total execution time: 0.0806
DEBUG - 2021-08-18 12:31:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:31:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:31:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:31:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:31:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:31:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:31:44 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:31:44 --> Total execution time: 0.0834
DEBUG - 2021-08-18 12:32:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:32:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:32:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:32:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:32:04 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:32:04 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:32:04 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:32:04 --> Total execution time: 0.0722
DEBUG - 2021-08-18 12:32:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:32:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:32:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:32:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:32:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:32:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:32:24 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:32:24 --> Total execution time: 0.0829
DEBUG - 2021-08-18 12:32:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:32:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:32:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:32:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:32:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:32:44 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:32:44 --> 0.0008 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:32:44 --> Total execution time: 0.1121
DEBUG - 2021-08-18 12:33:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:33:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:33:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:33:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:33:03 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:33:03 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:33:03 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:33:03 --> Total execution time: 0.0652
DEBUG - 2021-08-18 12:33:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:33:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:33:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:33:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:33:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:33:23 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:33:23 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:33:23 --> Total execution time: 0.0598
DEBUG - 2021-08-18 12:33:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:33:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:33:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:33:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:33:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:33:44 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:33:44 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:33:44 --> Total execution time: 0.0850
DEBUG - 2021-08-18 12:34:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:34:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:34:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:34:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:34:04 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:34:04 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:34:04 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:34:04 --> Total execution time: 0.0753
DEBUG - 2021-08-18 12:34:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:34:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:34:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:34:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:34:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:34:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:34:24 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:34:24 --> Total execution time: 0.0724
DEBUG - 2021-08-18 12:34:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:34:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:34:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:34:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:34:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:34:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:34:44 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:34:44 --> Total execution time: 0.0766
DEBUG - 2021-08-18 12:35:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:35:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:35:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:35:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:35:04 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:35:04 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:35:04 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:35:04 --> Total execution time: 0.0731
DEBUG - 2021-08-18 12:35:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:35:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:35:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:35:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:35:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:35:24 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:35:24 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:35:24 --> Total execution time: 0.0851
DEBUG - 2021-08-18 12:35:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:35:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:35:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:35:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:35:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:35:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:35:44 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:35:44 --> Total execution time: 0.1170
DEBUG - 2021-08-18 12:36:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:36:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:36:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:36:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:36:04 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:36:04 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:36:04 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:36:04 --> Total execution time: 0.0942
DEBUG - 2021-08-18 12:36:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:36:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:36:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:36:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:36:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:36:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:36:24 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:36:24 --> Total execution time: 0.0826
DEBUG - 2021-08-18 12:36:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:36:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:36:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:36:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:36:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:36:44 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:36:44 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:36:44 --> Total execution time: 0.1255
DEBUG - 2021-08-18 12:37:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:37:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:37:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:37:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:37:04 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:37:04 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:37:04 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:37:04 --> Total execution time: 0.0719
DEBUG - 2021-08-18 12:37:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:37:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:37:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:37:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:37:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:37:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:37:24 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:37:24 --> Total execution time: 0.0771
DEBUG - 2021-08-18 12:37:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:37:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:37:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:37:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:37:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:37:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:37:44 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:37:44 --> Total execution time: 0.0829
DEBUG - 2021-08-18 12:38:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:38:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:38:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:38:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:38:04 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:38:04 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:38:04 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:38:04 --> Total execution time: 0.0955
DEBUG - 2021-08-18 12:38:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:38:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:38:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:38:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:38:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:38:24 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:38:24 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:38:24 --> Total execution time: 0.0890
DEBUG - 2021-08-18 12:38:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:38:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:38:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:38:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:38:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:38:44 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:38:44 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:38:44 --> Total execution time: 0.0706
DEBUG - 2021-08-18 12:39:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:39:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:39:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:39:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:39:04 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:39:04 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:39:04 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:39:04 --> Total execution time: 0.0713
DEBUG - 2021-08-18 12:39:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:39:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:39:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:39:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:39:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:39:24 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:39:24 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:39:24 --> Total execution time: 0.0759
DEBUG - 2021-08-18 12:39:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:39:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:39:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:39:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:39:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:39:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:39:44 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:39:44 --> Total execution time: 0.1040
DEBUG - 2021-08-18 12:40:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:40:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:40:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:40:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:40:04 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:40:04 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:40:04 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:40:04 --> Total execution time: 0.0698
DEBUG - 2021-08-18 12:40:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:40:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:40:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:40:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:40:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:40:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:40:24 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:40:24 --> Total execution time: 0.0816
DEBUG - 2021-08-18 12:40:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:40:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:40:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:40:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:40:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:40:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:40:44 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:40:44 --> Total execution time: 0.0868
DEBUG - 2021-08-18 12:41:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:41:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:41:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:41:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:41:04 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:41:04 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:41:04 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:41:04 --> Total execution time: 0.0803
DEBUG - 2021-08-18 12:41:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:41:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:41:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:41:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:41:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:41:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:41:24 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:41:24 --> Total execution time: 0.0770
DEBUG - 2021-08-18 12:41:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:41:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:41:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:41:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:41:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:41:44 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:41:44 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:41:44 --> Total execution time: 0.0956
DEBUG - 2021-08-18 12:42:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:42:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:42:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:42:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:42:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:42:27 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:42:27 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:42:27 --> Total execution time: 0.0758
DEBUG - 2021-08-18 12:43:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:43:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:43:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:43:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:43:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:43:27 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:43:27 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:43:27 --> Total execution time: 0.0733
DEBUG - 2021-08-18 12:44:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:44:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:44:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:44:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:44:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:44:26 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:44:26 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:44:26 --> Total execution time: 0.1073
DEBUG - 2021-08-18 12:44:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:44:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:44:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:44:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:44:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:44:44 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:44:44 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:44:44 --> Total execution time: 0.0952
DEBUG - 2021-08-18 12:45:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:45:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:45:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:45:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:45:04 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:45:04 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:45:04 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:45:04 --> Total execution time: 0.0689
DEBUG - 2021-08-18 12:45:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:45:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:45:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:45:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:45:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:45:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:45:24 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:45:24 --> Total execution time: 0.0763
DEBUG - 2021-08-18 12:45:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:45:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:45:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:45:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:45:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:45:44 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:45:44 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:45:44 --> Total execution time: 0.0646
DEBUG - 2021-08-18 12:46:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:46:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:46:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:46:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:46:03 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:46:03 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:46:03 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:46:03 --> Total execution time: 0.0635
DEBUG - 2021-08-18 12:46:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:46:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:46:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:46:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:46:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:46:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:46:24 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:46:24 --> Total execution time: 0.0859
DEBUG - 2021-08-18 12:46:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:46:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:46:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:46:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:46:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:46:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:46:44 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:46:44 --> Total execution time: 0.0842
DEBUG - 2021-08-18 12:47:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:47:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:47:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:47:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:47:04 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:47:04 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:47:04 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:47:04 --> Total execution time: 0.0820
DEBUG - 2021-08-18 12:47:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:47:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:47:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:47:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:47:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:47:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:47:24 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:47:24 --> Total execution time: 0.0841
DEBUG - 2021-08-18 12:47:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:47:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:47:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:47:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:47:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:47:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:47:44 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:47:44 --> Total execution time: 0.0743
DEBUG - 2021-08-18 12:48:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:48:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:48:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:48:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:48:04 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:48:04 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:48:04 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:48:04 --> Total execution time: 0.0762
DEBUG - 2021-08-18 12:48:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:48:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:48:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:48:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:48:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:48:24 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:48:24 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:48:24 --> Total execution time: 0.0786
DEBUG - 2021-08-18 12:48:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:48:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:48:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:48:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:48:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:48:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:48:44 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:48:44 --> Total execution time: 0.0814
DEBUG - 2021-08-18 12:49:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:49:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:49:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:49:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:49:04 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:49:04 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:49:04 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:49:04 --> Total execution time: 0.0652
DEBUG - 2021-08-18 12:49:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:49:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:49:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:49:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:49:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:49:24 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:49:24 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:49:24 --> Total execution time: 0.0725
DEBUG - 2021-08-18 12:49:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:49:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:49:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:49:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:49:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:49:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:49:44 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:49:44 --> Total execution time: 0.0733
DEBUG - 2021-08-18 12:50:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:50:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:50:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:50:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:50:04 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:50:04 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:50:04 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:50:04 --> Total execution time: 0.0752
DEBUG - 2021-08-18 12:50:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:50:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:50:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:50:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:50:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:50:24 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:50:24 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:50:24 --> Total execution time: 0.0770
DEBUG - 2021-08-18 12:50:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:50:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:50:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:50:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:50:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:50:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:50:44 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:50:44 --> Total execution time: 0.0794
DEBUG - 2021-08-18 12:51:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:51:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:51:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:51:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:51:04 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:51:04 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:51:04 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:51:04 --> Total execution time: 0.0786
DEBUG - 2021-08-18 12:51:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:51:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:51:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:51:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:51:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:51:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:51:24 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:51:24 --> Total execution time: 0.0700
DEBUG - 2021-08-18 12:51:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:51:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:51:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:51:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:51:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:51:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:51:44 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:51:44 --> Total execution time: 0.0823
DEBUG - 2021-08-18 12:52:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:52:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:52:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:52:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:52:03 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:52:03 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:52:03 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:52:03 --> Total execution time: 0.0779
DEBUG - 2021-08-18 12:52:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:52:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:52:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:52:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:52:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:52:24 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:52:24 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:52:24 --> Total execution time: 0.0735
DEBUG - 2021-08-18 12:52:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:52:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:52:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:52:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:52:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:52:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:52:44 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:52:44 --> Total execution time: 0.1091
DEBUG - 2021-08-18 12:53:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:53:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:53:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:53:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:53:04 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:53:04 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:53:04 --> 0.0002 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:53:04 --> Total execution time: 0.0912
DEBUG - 2021-08-18 12:53:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:53:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:53:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:53:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:53:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:53:24 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:53:24 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:53:24 --> Total execution time: 0.0759
DEBUG - 2021-08-18 12:53:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:53:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:53:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:53:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:53:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:53:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:53:44 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:53:44 --> Total execution time: 0.0756
DEBUG - 2021-08-18 12:54:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:54:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:54:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:54:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:54:04 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:54:04 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:54:04 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:54:04 --> Total execution time: 0.0720
DEBUG - 2021-08-18 12:54:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:54:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:54:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:54:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:54:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:54:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:54:24 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:54:24 --> Total execution time: 0.0633
DEBUG - 2021-08-18 12:54:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:54:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:54:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:54:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:54:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:54:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:54:44 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:54:44 --> Total execution time: 0.0773
DEBUG - 2021-08-18 12:55:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:55:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:55:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:55:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:55:04 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:55:04 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:55:04 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:55:04 --> Total execution time: 0.0774
DEBUG - 2021-08-18 12:55:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:55:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:55:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:55:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:55:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:55:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:55:24 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:55:24 --> Total execution time: 0.0815
DEBUG - 2021-08-18 12:55:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:55:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:55:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:55:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:55:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:55:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:55:44 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:55:44 --> Total execution time: 0.0859
DEBUG - 2021-08-18 12:56:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:56:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:56:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:56:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:56:04 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:56:04 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:56:04 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:56:04 --> Total execution time: 0.0709
DEBUG - 2021-08-18 12:56:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:56:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:56:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:56:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:56:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:56:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:56:24 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:56:24 --> Total execution time: 0.0670
DEBUG - 2021-08-18 12:56:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:56:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:56:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:56:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:56:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:56:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:56:44 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:56:44 --> Total execution time: 0.0739
DEBUG - 2021-08-18 12:57:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:57:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:57:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:57:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:57:04 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:57:04 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:57:04 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:57:04 --> Total execution time: 0.0793
DEBUG - 2021-08-18 12:57:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:57:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:57:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:57:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:57:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:57:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:57:24 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:57:24 --> Total execution time: 0.0913
DEBUG - 2021-08-18 12:57:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:57:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:57:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:57:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:57:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:57:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:57:44 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:57:44 --> Total execution time: 0.0708
DEBUG - 2021-08-18 12:58:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:58:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:58:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:58:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:58:04 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:58:04 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:58:04 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:58:04 --> Total execution time: 0.0765
DEBUG - 2021-08-18 12:58:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:58:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:58:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:58:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:58:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:58:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:58:24 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:58:24 --> Total execution time: 0.0742
DEBUG - 2021-08-18 12:59:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 12:59:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 12:59:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 12:59:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 12:59:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 12:59:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 12:59:25 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 12:59:25 --> Total execution time: 0.0965
DEBUG - 2021-08-18 13:00:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 13:00:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 13:00:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 13:00:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 13:00:03 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 13:00:03 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 13:00:03 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 13:00:03 --> Total execution time: 0.1258
DEBUG - 2021-08-18 13:00:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 13:00:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 13:00:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 13:00:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 13:00:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 13:00:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 13:00:24 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 13:00:24 --> Total execution time: 0.0762
DEBUG - 2021-08-18 13:00:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 13:00:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 13:00:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 13:00:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 13:00:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 13:00:44 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 13:00:44 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 13:00:44 --> Total execution time: 0.0844
DEBUG - 2021-08-18 13:01:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 13:01:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 13:01:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 13:01:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 13:01:03 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 13:01:03 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 13:01:03 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 13:01:03 --> Total execution time: 0.0725
DEBUG - 2021-08-18 13:01:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 13:01:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 13:01:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 13:01:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 13:01:04 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 13:01:04 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 13:01:04 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 13:01:04 --> 0.0009 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 13:01:04 --> 0.0008 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 13:01:04 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 13:01:04 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 13:01:04 --> Total execution time: 0.1054
DEBUG - 2021-08-18 13:01:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 13:01:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 13:01:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 13:01:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 13:01:07 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 13:01:08 --> 0.001 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 13:01:08 --> 0.0056 | SELECT * FROM `gpi_data` ORDER BY `id` ASC  LIMIT 1000
DEBUG - 2021-08-18 13:01:08 --> Total execution time: 1.1859
DEBUG - 2021-08-18 13:01:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 13:01:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 13:01:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 13:01:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 13:01:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 13:01:26 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 13:01:26 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 13:01:26 --> Total execution time: 0.0645
DEBUG - 2021-08-18 13:01:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 13:01:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 13:01:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 13:01:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 13:01:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 13:01:34 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 13:01:34 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 13:01:34 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 13:01:34 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 13:01:34 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 13:01:34 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 13:01:34 --> Total execution time: 0.0889
DEBUG - 2021-08-18 13:01:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 13:01:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 13:01:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 13:01:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 13:01:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 13:01:44 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 13:01:44 --> 0.089 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 1000
DEBUG - 2021-08-18 13:01:44 --> Total execution time: 1.4076
DEBUG - 2021-08-18 13:01:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 13:01:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 13:01:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 13:01:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 13:01:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 13:01:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 13:01:54 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 13:01:54 --> Total execution time: 0.0747
DEBUG - 2021-08-18 13:02:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 13:02:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 13:02:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 13:02:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 13:02:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 13:02:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 13:02:14 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 13:02:14 --> Total execution time: 0.0878
DEBUG - 2021-08-18 13:02:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 13:02:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 13:02:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 13:02:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 13:02:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 13:02:34 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 13:02:34 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 13:02:34 --> Total execution time: 0.0787
DEBUG - 2021-08-18 13:02:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 13:02:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 13:02:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 13:02:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 13:02:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 13:02:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 13:02:54 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 13:02:54 --> Total execution time: 0.0675
DEBUG - 2021-08-18 13:03:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 13:03:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 13:03:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 13:03:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 13:03:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 13:03:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 13:03:14 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 13:03:14 --> Total execution time: 0.0737
DEBUG - 2021-08-18 13:03:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 13:03:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 13:03:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 13:03:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 13:03:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 13:03:34 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 13:03:34 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 13:03:34 --> Total execution time: 0.0737
DEBUG - 2021-08-18 13:03:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 13:03:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 13:03:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 13:03:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 13:03:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 13:03:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 13:03:54 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 13:03:54 --> Total execution time: 0.0795
DEBUG - 2021-08-18 13:04:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 13:04:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 13:04:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 13:04:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 13:04:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 13:04:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 13:04:14 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 13:04:14 --> Total execution time: 0.0740
DEBUG - 2021-08-18 13:04:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 13:04:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 13:04:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 13:04:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 13:04:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 13:04:34 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 13:04:34 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 13:04:34 --> Total execution time: 0.0896
DEBUG - 2021-08-18 13:04:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 13:04:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 13:04:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 13:04:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 13:04:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 13:04:54 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 13:04:54 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 13:04:54 --> Total execution time: 0.0842
DEBUG - 2021-08-18 13:05:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 13:05:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 13:05:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 13:05:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 13:05:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 13:05:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 13:05:14 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 13:05:14 --> Total execution time: 0.0802
DEBUG - 2021-08-18 13:05:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 13:05:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 13:05:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 13:05:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 13:05:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 13:05:34 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 13:05:34 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 13:05:34 --> Total execution time: 0.1196
DEBUG - 2021-08-18 13:05:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 13:05:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 13:05:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 13:05:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 13:05:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 13:05:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 13:05:54 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 13:05:54 --> Total execution time: 0.0969
DEBUG - 2021-08-18 13:06:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 13:06:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 13:06:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 13:06:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 13:06:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 13:06:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 13:06:14 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 13:06:14 --> Total execution time: 0.0814
DEBUG - 2021-08-18 13:06:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 13:06:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 13:06:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 13:06:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 13:06:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 13:06:34 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 13:06:34 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 13:06:34 --> Total execution time: 0.0629
DEBUG - 2021-08-18 13:06:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 13:06:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 13:06:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 13:06:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 13:06:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 13:06:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 13:06:55 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 13:06:55 --> Total execution time: 0.0810
DEBUG - 2021-08-18 13:07:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 13:07:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 13:07:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 13:07:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 13:07:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 13:07:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 13:07:15 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 13:07:15 --> Total execution time: 0.0827
DEBUG - 2021-08-18 13:07:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 13:07:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 13:07:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 13:07:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 13:07:36 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 13:07:36 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 13:07:36 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 13:07:36 --> Total execution time: 0.0698
DEBUG - 2021-08-18 13:07:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 13:07:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 13:07:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 13:07:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 13:07:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 13:07:56 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 13:07:56 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 13:07:56 --> Total execution time: 0.0793
DEBUG - 2021-08-18 13:08:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 13:08:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 13:08:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 13:08:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 13:08:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 13:08:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 13:08:16 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 13:08:16 --> Total execution time: 0.0776
DEBUG - 2021-08-18 13:08:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 13:08:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 13:08:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 13:08:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 13:08:36 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 13:08:36 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 13:08:36 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 13:08:36 --> Total execution time: 0.0650
DEBUG - 2021-08-18 13:08:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 13:08:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 13:08:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 13:08:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 13:08:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 13:08:56 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 13:08:56 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 13:08:56 --> Total execution time: 0.0673
DEBUG - 2021-08-18 13:08:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 13:08:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 13:08:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 13:08:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 13:08:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 13:08:58 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 13:08:58 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 13:08:58 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 13:08:58 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 13:08:58 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 13:08:58 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 13:08:58 --> Total execution time: 0.0746
DEBUG - 2021-08-18 13:09:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 13:09:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 13:09:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 13:09:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 13:09:00 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 13:09:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 13:09:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 13:09:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 13:09:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 13:09:00 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 13:11:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 13:11:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 13:11:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 13:11:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 13:11:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 13:11:47 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 13:11:47 --> 0.0082 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 1000
DEBUG - 2021-08-18 13:11:47 --> Total execution time: 1.2250
DEBUG - 2021-08-18 13:12:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 13:12:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 13:12:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 13:12:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 13:12:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 13:12:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 13:12:10 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 13:12:10 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 13:12:10 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 13:12:10 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 13:12:10 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 13:12:10 --> Total execution time: 0.0795
DEBUG - 2021-08-18 13:12:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 13:12:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 13:12:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 13:12:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 13:12:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 13:12:13 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 13:12:13 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 13:12:13 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 13:12:13 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 13:12:13 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 13:12:13 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 13:12:13 --> Total execution time: 0.0714
DEBUG - 2021-08-18 13:12:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 13:12:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 13:12:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 13:12:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 13:12:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 13:12:34 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 13:12:34 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 13:12:34 --> Total execution time: 0.0667
DEBUG - 2021-08-18 13:12:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 13:12:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 13:12:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 13:12:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 13:12:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 13:12:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 13:12:54 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 13:12:54 --> Total execution time: 0.0777
DEBUG - 2021-08-18 13:13:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 13:13:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 13:13:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 13:13:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 13:13:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 13:13:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 13:13:14 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 13:13:14 --> Total execution time: 0.0896
DEBUG - 2021-08-18 13:13:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 13:13:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 13:13:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 13:13:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 13:13:33 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 13:13:33 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 13:13:33 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 13:13:33 --> Total execution time: 0.0831
DEBUG - 2021-08-18 13:13:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 13:13:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 13:13:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 13:13:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 13:13:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 13:13:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 13:13:54 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 13:13:54 --> Total execution time: 0.0779
DEBUG - 2021-08-18 13:14:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 13:14:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 13:14:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 13:14:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 13:14:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 13:14:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 13:14:14 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 13:14:14 --> Total execution time: 0.0819
DEBUG - 2021-08-18 13:14:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 13:14:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 13:14:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 13:14:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 13:14:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 13:14:34 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 13:14:34 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 13:14:34 --> Total execution time: 0.0738
DEBUG - 2021-08-18 13:14:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 13:14:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 13:14:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 13:14:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 13:14:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 13:14:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 13:14:54 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 13:14:54 --> Total execution time: 0.0729
DEBUG - 2021-08-18 13:15:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 13:15:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 13:15:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 13:15:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 13:15:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 13:15:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 13:15:14 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 13:15:14 --> Total execution time: 0.0683
DEBUG - 2021-08-18 13:15:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 13:15:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 13:15:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 13:15:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 13:15:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 13:15:34 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 13:15:34 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 13:15:34 --> Total execution time: 0.0831
DEBUG - 2021-08-18 13:15:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 13:15:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 13:15:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 13:15:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 13:15:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 13:15:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 13:15:54 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 13:15:54 --> Total execution time: 0.0795
DEBUG - 2021-08-18 13:16:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 13:16:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 13:16:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 13:16:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 13:16:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 13:16:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 13:16:14 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 13:16:14 --> Total execution time: 0.0897
DEBUG - 2021-08-18 15:59:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 15:59:39 --> No URI present. Default controller set.
DEBUG - 2021-08-18 15:59:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 15:59:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 15:59:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 15:59:39 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 15:59:39 --> Form_validation class already loaded. Second attempt ignored.
QUERY - 2021-08-18 15:59:40 --> 0.0019 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 15:59:40 --> Total execution time: 0.4079
DEBUG - 2021-08-18 15:59:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 15:59:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 15:59:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 15:59:43 --> No URI present. Default controller set.
DEBUG - 2021-08-18 15:59:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 15:59:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 15:59:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 15:59:43 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 15:59:43 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 15:59:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 15:59:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 15:59:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 15:59:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 15:59:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 15:59:51 --> 2.9516 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-18 15:59:51 --> 1.076 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-18 15:59:51 --> 3.6198 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-18 15:59:51 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 15:59:51 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 15:59:51 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 15:59:51 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 15:59:51 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 15:59:51 --> Total execution time: 7.9732
DEBUG - 2021-08-18 15:59:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 15:59:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 15:59:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 15:59:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 15:59:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 15:59:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 15:59:52 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 15:59:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 15:59:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 15:59:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 15:59:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 15:59:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 15:59:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 15:59:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 15:59:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-18 15:59:55 --> 3.0242 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-18 15:59:55 --> Total execution time: 3.1400
DEBUG - 2021-08-18 15:59:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 15:59:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:00:23 --> 28.1112 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
DEBUG - 2021-08-18 16:00:23 --> Total execution time: 31.1288
DEBUG - 2021-08-18 16:00:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:00:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:00:23 --> 0.121 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `campaign_name` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-18 16:00:23 --> Total execution time: 31.2670
DEBUG - 2021-08-18 16:01:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:01:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:01:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:01:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:01:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:01:27 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:01:27 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 16:01:27 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 16:01:27 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:01:27 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:01:27 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 16:01:27 --> Total execution time: 0.1908
DEBUG - 2021-08-18 16:01:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:01:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:01:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:01:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:01:33 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:01:34 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:01:34 --> 0.0087 | SELECT * FROM `gpi_data` ORDER BY `id`  LIMIT 1000
DEBUG - 2021-08-18 16:01:34 --> Total execution time: 1.4774
DEBUG - 2021-08-18 16:01:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:01:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:01:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:01:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:01:36 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:01:36 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:01:36 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 16:01:36 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 16:01:36 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:01:36 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:01:36 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 16:01:36 --> Total execution time: 0.0732
DEBUG - 2021-08-18 16:01:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:01:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:01:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:01:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:01:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:01:39 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:01:39 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 16:01:39 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 16:01:39 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:01:39 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:01:39 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 16:01:39 --> Total execution time: 0.0701
DEBUG - 2021-08-18 16:02:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:02:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:02:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:02:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:02:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:02:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:02:00 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:02:00 --> Total execution time: 0.1024
DEBUG - 2021-08-18 16:02:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:02:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:02:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:02:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:02:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:02:20 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:02:20 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:02:20 --> Total execution time: 0.0932
DEBUG - 2021-08-18 16:02:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:02:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:02:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:02:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:02:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:02:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:02:40 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:02:40 --> Total execution time: 0.0780
DEBUG - 2021-08-18 16:03:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:03:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:03:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:03:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:03:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:03:00 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:03:00 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:03:00 --> Total execution time: 0.0554
DEBUG - 2021-08-18 16:03:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:03:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:03:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:03:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:03:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:03:20 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:03:20 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:03:20 --> Total execution time: 0.0700
DEBUG - 2021-08-18 16:03:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:03:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:03:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:03:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:03:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:03:40 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:03:40 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:03:40 --> Total execution time: 0.0751
DEBUG - 2021-08-18 16:04:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:04:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:04:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:04:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:04:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:04:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:04:00 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:04:00 --> Total execution time: 0.0652
DEBUG - 2021-08-18 16:04:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:04:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:04:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:04:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:04:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:04:20 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:04:20 --> 0.0016 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:04:20 --> Total execution time: 0.1665
DEBUG - 2021-08-18 16:04:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:04:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:04:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:04:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:04:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:04:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:04:40 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:04:40 --> Total execution time: 0.0890
DEBUG - 2021-08-18 16:05:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:05:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:05:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:05:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:05:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:05:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:05:00 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:05:00 --> Total execution time: 0.0960
DEBUG - 2021-08-18 16:05:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:05:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:05:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:05:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:05:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:05:20 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:05:20 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:05:20 --> Total execution time: 0.0912
DEBUG - 2021-08-18 16:05:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:05:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:05:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:05:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:05:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:05:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:05:40 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:05:40 --> Total execution time: 0.0868
DEBUG - 2021-08-18 16:06:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:06:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:06:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:06:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:06:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:06:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:06:00 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:06:00 --> Total execution time: 0.0671
DEBUG - 2021-08-18 16:06:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:06:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:06:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:06:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:06:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:06:20 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:06:20 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:06:20 --> Total execution time: 0.0961
DEBUG - 2021-08-18 16:06:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:06:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:06:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:06:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:06:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:06:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:06:40 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:06:40 --> Total execution time: 0.0869
DEBUG - 2021-08-18 16:07:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:07:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:07:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:07:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:07:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:07:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:07:00 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:07:00 --> Total execution time: 0.0724
DEBUG - 2021-08-18 16:07:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:07:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:07:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:07:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:07:04 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:07:04 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:07:04 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 16:07:04 --> 0.0006 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 16:07:04 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:07:04 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:07:04 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 16:07:04 --> Total execution time: 0.0707
DEBUG - 2021-08-18 16:07:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:07:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:07:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:07:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:07:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:07:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:07:25 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:07:25 --> Total execution time: 0.0789
DEBUG - 2021-08-18 16:07:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:07:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:07:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:07:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:07:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:07:45 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:07:45 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:07:45 --> Total execution time: 0.0650
DEBUG - 2021-08-18 16:08:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:08:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:08:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:08:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:08:05 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:08:05 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:08:05 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:08:05 --> Total execution time: 0.0892
DEBUG - 2021-08-18 16:08:17 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:08:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:08:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:08:17 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:08:17 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:08:17 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:08:17 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 16:08:17 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 16:08:17 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:08:17 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:08:17 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 16:08:17 --> Total execution time: 0.0778
DEBUG - 2021-08-18 16:08:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:08:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:08:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:08:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:08:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:08:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:08:38 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:08:38 --> Total execution time: 0.0874
DEBUG - 2021-08-18 16:08:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:08:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:08:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:08:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:08:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:08:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:08:58 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:08:58 --> Total execution time: 0.0839
DEBUG - 2021-08-18 16:09:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:09:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:09:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:09:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:09:18 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:09:18 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:09:18 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:09:18 --> Total execution time: 0.0677
DEBUG - 2021-08-18 16:09:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:09:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:09:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:09:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:09:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:09:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:09:38 --> 0.0005 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:09:38 --> Total execution time: 0.0801
DEBUG - 2021-08-18 16:09:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:09:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:09:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:09:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:09:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:09:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:09:58 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:09:58 --> Total execution time: 0.0834
DEBUG - 2021-08-18 16:10:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:10:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:10:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:10:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:10:18 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:10:18 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:10:18 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:10:18 --> Total execution time: 0.0699
DEBUG - 2021-08-18 16:10:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:10:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:10:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:10:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:10:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:10:38 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:10:38 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:10:38 --> Total execution time: 0.0743
DEBUG - 2021-08-18 16:10:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:10:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:10:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:10:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:10:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:10:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:10:58 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:10:58 --> Total execution time: 0.0722
DEBUG - 2021-08-18 16:23:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:23:54 --> No URI present. Default controller set.
DEBUG - 2021-08-18 16:23:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:23:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:23:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:23:54 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 16:23:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:23:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:23:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:23:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:23:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:24:05 --> 5.1812 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-18 16:24:05 --> 1.6286 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-18 16:24:05 --> 3.8431 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-18 16:24:05 --> 0.0007 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 16:24:05 --> 0.0032 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:24:05 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:24:05 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:24:05 --> 0.0006 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 16:24:05 --> Total execution time: 10.7456
DEBUG - 2021-08-18 16:24:06 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:24:06 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:24:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:24:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:24:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:24:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:24:06 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 16:24:06 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:24:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:24:06 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:24:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:24:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:24:06 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:24:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:24:06 --> Global POST, GET and COOKIE data sanitized
QUERY - 2021-08-18 16:24:09 --> 2.8667 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-18 16:24:09 --> Total execution time: 2.9516
DEBUG - 2021-08-18 16:24:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:24:09 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 16:24:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:24:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:24:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-18 16:24:39 --> 29.8492 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
DEBUG - 2021-08-18 16:24:39 --> Total execution time: 32.7393
DEBUG - 2021-08-18 16:24:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:24:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:24:39 --> 0.381 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `campaign_name` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-18 16:24:39 --> Total execution time: 33.1552
DEBUG - 2021-08-18 16:24:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:24:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:24:39 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:24:39 --> 0.0005 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 16:24:39 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 16:24:39 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:24:39 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:24:39 --> 0.0008 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 16:24:39 --> Total execution time: 11.6418
DEBUG - 2021-08-18 16:24:49 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:24:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:24:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:24:49 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:24:49 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:24:50 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:24:50 --> 0.0106 | SELECT * FROM `gpi_data` ORDER BY `id`  LIMIT 1000
DEBUG - 2021-08-18 16:24:50 --> Total execution time: 0.6738
DEBUG - 2021-08-18 16:25:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:25:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:25:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:25:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:25:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:25:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:25:00 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:25:00 --> Total execution time: 0.0675
DEBUG - 2021-08-18 16:25:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:25:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:25:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:25:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:25:10 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 16:25:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:25:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:25:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-18 16:25:17 --> 2.7653 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-18 16:25:17 --> 0.7995 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-18 16:25:17 --> 2.5773 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-18 16:25:17 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 16:25:17 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:25:17 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:25:17 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:25:17 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 16:25:17 --> Total execution time: 6.2487
DEBUG - 2021-08-18 16:25:17 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:25:17 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 16:25:17 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:25:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:25:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:25:17 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:25:17 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:25:17 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:25:17 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 16:25:17 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 16:25:17 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:25:17 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:25:17 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 16:25:17 --> Total execution time: 0.0838
DEBUG - 2021-08-18 16:25:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:25:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:25:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:25:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:25:37 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:25:37 --> 0.0216 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:25:37 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:25:37 --> Total execution time: 0.1129
DEBUG - 2021-08-18 16:25:57 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:25:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:25:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:25:57 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:25:57 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:25:57 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:25:57 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:25:57 --> Total execution time: 0.0731
DEBUG - 2021-08-18 16:26:17 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:26:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:26:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:26:17 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:26:17 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:26:17 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:26:17 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:26:17 --> Total execution time: 0.0749
DEBUG - 2021-08-18 16:26:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:26:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:26:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:26:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:26:37 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:26:37 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:26:37 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:26:37 --> Total execution time: 0.0692
DEBUG - 2021-08-18 16:26:57 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:26:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:26:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:26:57 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:26:57 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:26:57 --> 0.001 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:26:57 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:26:57 --> Total execution time: 0.2155
DEBUG - 2021-08-18 16:27:17 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:27:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:27:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:27:17 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:27:17 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:27:17 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:27:17 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:27:17 --> Total execution time: 0.0860
DEBUG - 2021-08-18 16:27:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:27:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:27:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:27:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:27:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:27:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:27:38 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:27:38 --> Total execution time: 0.0830
DEBUG - 2021-08-18 16:27:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:27:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:27:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:27:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:27:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:27:58 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:27:58 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:27:58 --> Total execution time: 0.0799
DEBUG - 2021-08-18 16:28:17 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:28:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:28:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:28:17 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:28:17 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:28:17 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:28:17 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:28:17 --> Total execution time: 0.0792
DEBUG - 2021-08-18 16:28:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:28:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:28:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:28:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:28:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:28:20 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:28:20 --> 0.0005 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 16:28:20 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 16:28:20 --> 0.0019 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:28:20 --> 0.0013 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:28:20 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 16:28:20 --> Total execution time: 0.0953
DEBUG - 2021-08-18 16:28:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:28:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:28:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:28:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:28:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:28:42 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:28:42 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:28:42 --> Total execution time: 0.0897
DEBUG - 2021-08-18 16:29:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:29:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:29:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:29:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:29:02 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:29:02 --> 0.006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:29:02 --> 0.0064 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:29:02 --> Total execution time: 0.2597
DEBUG - 2021-08-18 16:29:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:29:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:29:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:29:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:29:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:29:22 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:29:22 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:29:22 --> Total execution time: 0.0837
DEBUG - 2021-08-18 16:29:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:29:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:29:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:29:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:29:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:29:42 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:29:42 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:29:42 --> Total execution time: 0.0690
DEBUG - 2021-08-18 16:30:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:30:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:30:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:30:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:30:02 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:30:02 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:30:02 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:30:02 --> Total execution time: 0.0786
DEBUG - 2021-08-18 16:30:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:30:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:30:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:30:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:30:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:30:21 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:30:21 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:30:21 --> Total execution time: 0.0785
DEBUG - 2021-08-18 16:30:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:30:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:30:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:30:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:30:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:30:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:30:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:30:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:30:41 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:30:41 --> Total execution time: 0.0907
DEBUG - 2021-08-18 16:31:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:31:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:31:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:31:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:31:02 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:31:02 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:31:02 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:31:02 --> Total execution time: 0.0863
DEBUG - 2021-08-18 16:31:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:31:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:31:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:31:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:31:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:31:22 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:31:22 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:31:22 --> Total execution time: 0.0877
DEBUG - 2021-08-18 16:31:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:31:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:31:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:31:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:31:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:31:42 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:31:42 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:31:42 --> Total execution time: 0.0854
DEBUG - 2021-08-18 16:32:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:32:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:32:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:32:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:32:02 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:32:02 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:32:02 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:32:02 --> Total execution time: 0.0874
DEBUG - 2021-08-18 16:32:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:32:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:32:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:32:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:32:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:32:22 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:32:22 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:32:22 --> Total execution time: 0.0764
DEBUG - 2021-08-18 16:32:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:32:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:32:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:32:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:32:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:32:42 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:32:42 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:32:42 --> Total execution time: 0.0837
DEBUG - 2021-08-18 16:33:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:33:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:33:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:33:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:33:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:33:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:33:01 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:33:01 --> Total execution time: 0.0690
DEBUG - 2021-08-18 16:33:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:33:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:33:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:33:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:33:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:33:22 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:33:22 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:33:22 --> Total execution time: 0.0743
DEBUG - 2021-08-18 16:33:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:33:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:33:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:33:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:33:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:33:42 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:33:42 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:33:42 --> Total execution time: 0.0692
DEBUG - 2021-08-18 16:34:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:34:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:34:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:34:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:34:02 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:34:02 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:34:02 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:34:02 --> Total execution time: 0.0598
DEBUG - 2021-08-18 16:34:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:34:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:34:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:34:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:34:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:34:22 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:34:22 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:34:22 --> Total execution time: 0.0707
DEBUG - 2021-08-18 16:34:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:34:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:34:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:34:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:34:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:34:42 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:34:42 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:34:42 --> Total execution time: 0.0910
DEBUG - 2021-08-18 16:35:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:35:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:35:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:35:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:35:02 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:35:02 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:35:02 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:35:02 --> Total execution time: 0.0787
DEBUG - 2021-08-18 16:35:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:35:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:35:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:35:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:35:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:35:22 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:35:22 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:35:22 --> Total execution time: 0.0685
DEBUG - 2021-08-18 16:35:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:35:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:35:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:35:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:35:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:35:42 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:35:42 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:35:42 --> Total execution time: 0.0854
DEBUG - 2021-08-18 16:36:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:36:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:36:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:36:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:36:02 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:36:02 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:36:02 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:36:02 --> Total execution time: 0.0838
DEBUG - 2021-08-18 16:36:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:36:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:36:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:36:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:36:11 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 16:36:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:36:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:36:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:36:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:36:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:36:21 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:36:21 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 16:36:21 --> Total execution time: 0.1168
QUERY - 2021-08-18 16:36:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:36:25 --> 2.3976 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-18 16:36:25 --> 0.026 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-18 16:36:25 --> 2.8182 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-18 16:36:25 --> 2.7432 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-18 16:36:25 --> 2.844 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-18 16:36:25 --> 0.0376 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-18 16:36:25 --> 2.6295 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-18 16:36:25 --> 0.0081 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 16:36:25 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 16:36:25 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:36:25 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:36:25 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 16:36:25 --> 0.026 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 16:36:25 --> Total execution time: 13.7337
DEBUG - 2021-08-18 16:36:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:36:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:36:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:36:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:36:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:36:29 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:36:29 --> 0.0405 | INSERT INTO `csvexportlog` (`export_status`, `filter_col`, `created_datetime`) VALUES (0, 'null', '2021-08-18 16:36:29')
DEBUG - 2021-08-18 16:36:29 --> Total execution time: 0.1374
DEBUG - 2021-08-18 16:36:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:36:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:36:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:36:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:36:29 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 16:36:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:36:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:36:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-18 16:36:43 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:36:43 --> 2.9546 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-18 16:36:43 --> 0.0279 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-18 16:36:43 --> 2.6728 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-18 16:36:43 --> 2.5994 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-18 16:36:43 --> 3.5226 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-18 16:36:43 --> 0.0363 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-18 16:36:43 --> 2.6751 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-18 16:36:43 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 16:36:43 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 16:36:43 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:36:43 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:36:43 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 16:36:43 --> 0.0131 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 16:36:43 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 16:36:43 --> Total execution time: 14.5753
DEBUG - 2021-08-18 16:36:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:36:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:36:43 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:36:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 16:36:43 --> 0.0024 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 16:36:43 --> 0.0033 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 16:36:43 --> Total execution time: 2.4118
DEBUG - 2021-08-18 16:36:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:36:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:36:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:36:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:36:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:36:59 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:36:59 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 16:36:59 --> 0.0137 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 16:36:59 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 16:36:59 --> Total execution time: 0.0979
DEBUG - 2021-08-18 16:37:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:37:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:37:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:37:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:37:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:37:14 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:37:14 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 16:37:14 --> 0.0195 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 16:37:14 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 16:37:14 --> Total execution time: 0.1332
DEBUG - 2021-08-18 16:37:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:37:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:37:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:37:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:37:36 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:37:36 --> 0.0485 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:37:36 --> 0.0116 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 16:37:36 --> 0.0006 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 16:37:36 --> 0.0015 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 16:37:36 --> Total execution time: 5.0803
DEBUG - 2021-08-18 16:37:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:37:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:37:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:37:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:37:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:37:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:37:44 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 16:37:44 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 16:37:44 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 16:37:44 --> Total execution time: 0.0733
DEBUG - 2021-08-18 16:37:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:37:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:37:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:37:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:37:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:37:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:37:59 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 16:37:59 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 16:37:59 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 16:37:59 --> Total execution time: 0.0947
DEBUG - 2021-08-18 16:38:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:38:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:38:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:38:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:38:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:38:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:38:14 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 16:38:14 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 16:38:14 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 16:38:14 --> Total execution time: 0.1669
DEBUG - 2021-08-18 16:38:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:38:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:38:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:38:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:38:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:38:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:38:29 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 16:38:29 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 16:38:29 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 16:38:29 --> Total execution time: 0.0821
DEBUG - 2021-08-18 16:38:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:38:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:38:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:38:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:38:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:38:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:38:44 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 16:38:44 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 16:38:44 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 16:38:44 --> Total execution time: 0.0692
DEBUG - 2021-08-18 16:38:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:38:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:38:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:38:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:38:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:38:59 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:38:59 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 16:38:59 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 16:38:59 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 16:38:59 --> Total execution time: 0.0628
DEBUG - 2021-08-18 16:39:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:39:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:39:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:39:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:39:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:39:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:39:14 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 16:39:14 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 16:39:14 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 16:39:14 --> Total execution time: 0.0828
DEBUG - 2021-08-18 16:39:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:39:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:39:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:39:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:39:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:39:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:39:29 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 16:39:29 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 16:39:29 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 16:39:29 --> Total execution time: 0.0750
DEBUG - 2021-08-18 16:39:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:39:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:39:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:39:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:39:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:39:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:39:44 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 16:39:44 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 16:39:44 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 16:39:44 --> Total execution time: 0.0811
DEBUG - 2021-08-18 16:40:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:40:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:40:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:40:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:40:02 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:40:02 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:40:02 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 16:40:02 --> 0.0007 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 16:40:02 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 16:40:02 --> Total execution time: 0.1133
DEBUG - 2021-08-18 16:40:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:40:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:40:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:40:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:40:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:40:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:40:14 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 16:40:14 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 16:40:14 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 16:40:14 --> Total execution time: 0.0888
DEBUG - 2021-08-18 16:40:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:40:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:40:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:40:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:40:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:40:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:40:29 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 16:40:29 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 16:40:29 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 16:40:29 --> Total execution time: 0.0638
DEBUG - 2021-08-18 16:40:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:40:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:40:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:40:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:40:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:40:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:40:44 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 16:40:44 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 16:40:44 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 16:40:44 --> Total execution time: 0.0696
DEBUG - 2021-08-18 16:40:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:40:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:40:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:40:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:40:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:40:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:40:59 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 16:40:59 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 16:40:59 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 16:40:59 --> Total execution time: 0.0768
DEBUG - 2021-08-18 16:41:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:41:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:41:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:41:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:41:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:41:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:41:14 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 16:41:14 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 16:41:14 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 16:41:14 --> Total execution time: 0.0889
DEBUG - 2021-08-18 16:41:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:41:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:41:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:41:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:41:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:41:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:41:29 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 16:41:29 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 16:41:29 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 16:41:29 --> Total execution time: 0.1077
DEBUG - 2021-08-18 16:54:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:54:36 --> No URI present. Default controller set.
DEBUG - 2021-08-18 16:54:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:54:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:54:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:54:36 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 16:54:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:54:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:54:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:54:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:54:37 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:54:43 --> 2.6606 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-18 16:54:43 --> 0.8984 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-18 16:54:43 --> 2.4479 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-18 16:54:43 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 16:54:43 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:54:43 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:54:43 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:54:43 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 16:54:43 --> Total execution time: 6.0935
DEBUG - 2021-08-18 16:54:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:54:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:54:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:54:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:54:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:54:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:54:44 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 16:54:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:54:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:54:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:54:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:54:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:54:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:54:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:54:44 --> Global POST, GET and COOKIE data sanitized
QUERY - 2021-08-18 16:54:47 --> 3.0921 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-18 16:54:47 --> Total execution time: 3.1857
DEBUG - 2021-08-18 16:54:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:54:47 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:54:47 --> 0.0411 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `campaign_name` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-18 16:54:47 --> Total execution time: 3.0712
DEBUG - 2021-08-18 16:54:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:54:47 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 16:54:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:54:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:54:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-18 16:55:16 --> 29.2852 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
DEBUG - 2021-08-18 16:55:16 --> Total execution time: 32.3915
DEBUG - 2021-08-18 16:55:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:55:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:55:29 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:55:29 --> 2.3742 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-18 16:55:29 --> 0.028 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-18 16:55:29 --> 2.5505 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-18 16:55:29 --> 3.0329 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-18 16:55:29 --> 2.4218 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-18 16:55:29 --> 0.0374 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-18 16:55:29 --> 2.5432 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-18 16:55:29 --> 0.0007 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 16:55:29 --> 0.001 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 16:55:29 --> 0.0008 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:55:29 --> 0.0008 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:55:29 --> 0.0013 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 16:55:29 --> 0.0007 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 16:55:29 --> 0.0007 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 16:55:29 --> Total execution time: 39.5197
DEBUG - 2021-08-18 16:55:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:55:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:55:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:55:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:55:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:55:45 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:55:45 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 16:55:45 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 16:55:45 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 16:55:45 --> Total execution time: 0.0886
DEBUG - 2021-08-18 16:56:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:56:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:56:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:56:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:56:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:56:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:56:00 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 16:56:00 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 16:56:00 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 16:56:00 --> Total execution time: 0.0678
DEBUG - 2021-08-18 16:56:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:56:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:56:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:56:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:56:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:56:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:56:15 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 16:56:15 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 16:56:15 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 16:56:15 --> Total execution time: 0.0960
DEBUG - 2021-08-18 16:56:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:56:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:56:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:56:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:56:30 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:56:30 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:56:30 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 16:56:30 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 16:56:30 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 16:56:30 --> Total execution time: 0.0891
DEBUG - 2021-08-18 16:56:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:56:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:56:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:56:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:56:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:56:45 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:56:45 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 16:56:45 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 16:56:45 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 16:56:45 --> Total execution time: 0.0889
DEBUG - 2021-08-18 16:57:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:57:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:57:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:57:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:57:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:57:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:57:00 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 16:57:00 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 16:57:00 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 16:57:00 --> Total execution time: 0.0800
DEBUG - 2021-08-18 16:57:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:57:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:57:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:57:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:57:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:57:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:57:15 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 16:57:15 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 16:57:15 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 16:57:15 --> Total execution time: 0.0873
DEBUG - 2021-08-18 16:57:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:57:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:57:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:57:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:57:30 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:57:30 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:57:30 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 16:57:30 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 16:57:30 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 16:57:30 --> Total execution time: 0.0686
DEBUG - 2021-08-18 16:57:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:57:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:57:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:57:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:57:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:57:45 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:57:45 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 16:57:45 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 16:57:45 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 16:57:45 --> Total execution time: 0.0807
DEBUG - 2021-08-18 16:58:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 16:58:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 16:58:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 16:58:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 16:58:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 16:58:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 16:58:00 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 16:58:00 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 16:58:00 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 16:58:00 --> Total execution time: 0.0814
DEBUG - 2021-08-18 17:01:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:01:04 --> No URI present. Default controller set.
DEBUG - 2021-08-18 17:01:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:01:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:01:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:01:04 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 17:01:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:01:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:01:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:01:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:01:04 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:01:12 --> 2.9067 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-18 17:01:12 --> 1.8279 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-18 17:01:12 --> 2.8143 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-18 17:01:12 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 17:01:12 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:01:12 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:01:12 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:01:12 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 17:01:12 --> Total execution time: 7.6472
DEBUG - 2021-08-18 17:01:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:01:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:01:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:01:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:01:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:01:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:01:13 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 17:01:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:01:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:01:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:01:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:01:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:01:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:01:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:01:13 --> Global POST, GET and COOKIE data sanitized
QUERY - 2021-08-18 17:01:15 --> 2.4661 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-18 17:01:15 --> Total execution time: 2.5500
DEBUG - 2021-08-18 17:01:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:01:15 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 17:01:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:01:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:01:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-18 17:01:45 --> 29.5006 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
DEBUG - 2021-08-18 17:01:45 --> Total execution time: 31.9615
DEBUG - 2021-08-18 17:01:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:01:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:01:45 --> 0.0526 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `campaign_name` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-18 17:01:45 --> Total execution time: 32.0378
DEBUG - 2021-08-18 17:01:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:01:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:01:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:01:58 --> 2.5818 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-18 17:01:58 --> 0.0279 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-18 17:01:58 --> 2.4611 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-18 17:01:58 --> 2.2782 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-18 17:01:58 --> 2.5568 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-18 17:01:58 --> 0.0352 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-18 17:01:58 --> 3.252 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-18 17:01:58 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:01:58 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 17:01:58 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:01:58 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:01:58 --> 0.0002 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 17:01:58 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 17:01:58 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 17:01:58 --> Total execution time: 28.5280
DEBUG - 2021-08-18 17:02:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:02:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:02:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:02:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:02:03 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:02:03 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:02:03 --> 0.0864 | INSERT INTO `csvexportlog` (`export_status`, `filter_col`, `created_datetime`) VALUES (0, 'null', '2021-08-18 17:02:03')
DEBUG - 2021-08-18 17:02:03 --> Total execution time: 0.1516
DEBUG - 2021-08-18 17:02:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:02:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:02:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:02:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:02:03 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 17:02:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:02:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:02:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-18 17:02:18 --> 0.0008 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:02:18 --> 2.8166 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-18 17:02:18 --> 0.0275 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-18 17:02:18 --> 3.0073 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-18 17:02:18 --> 2.8549 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-18 17:02:18 --> 3.183 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-18 17:02:18 --> 0.0309 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-18 17:02:18 --> 2.712 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-18 17:02:18 --> 0.0007 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:02:18 --> 0.0008 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 17:02:18 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:02:18 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:02:18 --> 0.0007 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 17:02:18 --> 0.0006 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '3'
QUERY - 2021-08-18 17:02:18 --> 0.0006 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 17:02:18 --> 0.0009 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 17:02:18 --> Total execution time: 14.7278
DEBUG - 2021-08-18 17:02:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:02:18 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:02:18 --> 0.0033 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:02:18 --> 0.0043 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:02:18 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '3'
QUERY - 2021-08-18 17:02:18 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 17:02:18 --> 0.0006 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 17:02:18 --> Total execution time: 4.9776
DEBUG - 2021-08-18 17:02:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:02:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:02:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:02:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:02:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:02:34 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:02:34 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:02:34 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '3'
QUERY - 2021-08-18 17:02:34 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 17:02:34 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 17:02:34 --> Total execution time: 0.0796
DEBUG - 2021-08-18 17:02:49 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:02:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:02:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:02:49 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:02:49 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:02:49 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:02:49 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:02:49 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '3'
QUERY - 2021-08-18 17:02:49 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 17:02:49 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 17:02:49 --> Total execution time: 0.0863
DEBUG - 2021-08-18 17:02:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:02:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:02:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:02:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:02:54 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 17:03:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:03:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:03:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-18 17:03:09 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:03:09 --> 2.5576 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-18 17:03:09 --> 0.0278 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-18 17:03:09 --> 2.4507 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-18 17:03:09 --> 3.2697 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-18 17:03:09 --> 4.1562 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-18 17:03:09 --> 0.0549 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-18 17:03:09 --> 3.3303 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-18 17:03:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:03:09 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 17:03:09 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:03:09 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:03:09 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 17:03:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '3'
QUERY - 2021-08-18 17:03:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 17:03:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 17:03:09 --> Total execution time: 15.9327
DEBUG - 2021-08-18 17:03:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:03:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:03:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:03:09 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:03:09 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '3'
QUERY - 2021-08-18 17:03:09 --> 0.0006 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 17:03:09 --> 0.0136 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 17:03:09 --> Total execution time: 5.9881
DEBUG - 2021-08-18 17:03:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:03:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:03:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:03:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:03:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:03:25 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:03:25 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:03:25 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '3'
QUERY - 2021-08-18 17:03:25 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 17:03:25 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 17:03:25 --> Total execution time: 0.0740
DEBUG - 2021-08-18 17:03:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:03:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:03:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:03:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:03:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:03:40 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:03:40 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:03:40 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '3'
QUERY - 2021-08-18 17:03:40 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 17:03:40 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 17:03:40 --> Total execution time: 0.3233
DEBUG - 2021-08-18 17:03:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:03:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:03:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:03:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:03:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:03:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:03:55 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:03:55 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '3'
QUERY - 2021-08-18 17:03:55 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 17:03:55 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 17:03:55 --> Total execution time: 0.0796
DEBUG - 2021-08-18 17:04:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:04:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:04:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:04:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:04:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:04:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:04:10 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:04:10 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '3'
QUERY - 2021-08-18 17:04:10 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 17:04:10 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 17:04:10 --> Total execution time: 0.0595
DEBUG - 2021-08-18 17:04:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:04:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:04:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:04:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:04:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:04:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:04:25 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:04:25 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '3'
QUERY - 2021-08-18 17:04:25 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 17:04:25 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 17:04:25 --> Total execution time: 0.0918
DEBUG - 2021-08-18 17:04:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:04:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:04:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:04:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:04:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:04:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:04:40 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:04:40 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '3'
QUERY - 2021-08-18 17:04:40 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 17:04:40 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 17:04:40 --> Total execution time: 0.0730
DEBUG - 2021-08-18 17:04:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:04:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:04:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:04:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:04:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:04:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:04:55 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:04:55 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '3'
QUERY - 2021-08-18 17:04:55 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 17:04:55 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 17:04:55 --> Total execution time: 0.0846
DEBUG - 2021-08-18 17:05:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:05:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:05:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:05:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:05:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:05:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:05:10 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:05:10 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '3'
QUERY - 2021-08-18 17:05:10 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 17:05:10 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 17:05:10 --> Total execution time: 0.0720
DEBUG - 2021-08-18 17:05:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:05:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:05:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:05:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:05:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:05:25 --> 0.0008 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:05:25 --> 0.001 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:05:25 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '3'
QUERY - 2021-08-18 17:05:25 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 17:05:25 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 17:05:25 --> Total execution time: 0.0870
DEBUG - 2021-08-18 17:05:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:05:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:05:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:05:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:05:33 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 17:05:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:05:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:05:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-18 17:05:43 --> 3.4266 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-18 17:05:43 --> 1.8063 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-18 17:05:43 --> 4.644 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-18 17:05:43 --> 0.0006 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 17:05:43 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:05:43 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:05:43 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:05:43 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 17:05:43 --> Total execution time: 9.9610
DEBUG - 2021-08-18 17:05:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:05:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:05:43 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:05:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:05:43 --> 0.002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '3'
QUERY - 2021-08-18 17:05:43 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 17:05:43 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 17:05:43 --> Total execution time: 3.5815
DEBUG - 2021-08-18 17:05:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:05:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:05:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:05:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:05:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:05:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:05:44 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 17:05:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:05:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:05:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:05:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:05:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:05:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:05:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:05:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-18 17:05:49 --> 4.6429 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-18 17:05:49 --> Total execution time: 4.7522
DEBUG - 2021-08-18 17:05:49 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:05:49 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 17:05:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:05:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:05:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:06:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:06:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:06:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-18 17:06:21 --> 32.5791 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
DEBUG - 2021-08-18 17:06:21 --> Total execution time: 37.1729
DEBUG - 2021-08-18 17:06:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:06:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:06:22 --> 0.0676 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `campaign_name` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-18 17:06:22 --> Total execution time: 37.2595
DEBUG - 2021-08-18 17:06:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:06:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:06:22 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:06:22 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:06:22 --> 0.0005 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '3'
QUERY - 2021-08-18 17:06:22 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 17:06:22 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 17:06:22 --> Total execution time: 26.8446
DEBUG - 2021-08-18 17:06:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:06:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:06:22 --> 0.0069 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:06:22 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:06:22 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '3'
QUERY - 2021-08-18 17:06:22 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 17:06:22 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 17:06:22 --> Total execution time: 11.8209
DEBUG - 2021-08-18 17:06:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:06:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:06:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:06:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:06:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:06:25 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:06:25 --> 0.0009 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:06:25 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '3'
QUERY - 2021-08-18 17:06:25 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 17:06:25 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 17:06:25 --> Total execution time: 0.0830
DEBUG - 2021-08-18 17:06:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:06:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:06:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:06:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:06:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:06:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:06:40 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:06:40 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '3'
QUERY - 2021-08-18 17:06:40 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 17:06:40 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 17:06:40 --> Total execution time: 0.0851
DEBUG - 2021-08-18 17:06:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:06:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:06:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:06:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:06:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:06:55 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:06:55 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:06:55 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '3'
QUERY - 2021-08-18 17:06:55 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 17:06:55 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 17:06:55 --> Total execution time: 0.0977
DEBUG - 2021-08-18 17:07:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:07:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:07:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:07:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:07:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:07:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:07:10 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:07:10 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '3'
QUERY - 2021-08-18 17:07:10 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 17:07:10 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 17:07:10 --> Total execution time: 0.0790
DEBUG - 2021-08-18 17:07:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:07:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:07:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:07:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:07:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:07:25 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:07:25 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:07:25 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '3'
QUERY - 2021-08-18 17:07:25 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 17:07:25 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 17:07:25 --> Total execution time: 0.0688
DEBUG - 2021-08-18 17:07:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:07:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:07:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:07:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:07:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:07:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:07:40 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:07:40 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '3'
QUERY - 2021-08-18 17:07:40 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 17:07:40 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 17:07:40 --> Total execution time: 0.0877
DEBUG - 2021-08-18 17:07:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:07:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:07:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:07:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:07:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:07:55 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:07:55 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:07:55 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '3'
QUERY - 2021-08-18 17:07:55 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 17:07:55 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 17:07:55 --> Total execution time: 0.0759
DEBUG - 2021-08-18 17:08:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:08:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:08:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:08:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:08:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:08:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:08:10 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:08:10 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '3'
QUERY - 2021-08-18 17:08:10 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 17:08:10 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 17:08:10 --> Total execution time: 0.0846
DEBUG - 2021-08-18 17:08:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:08:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:08:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:08:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:08:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:08:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:08:25 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:08:25 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '3'
QUERY - 2021-08-18 17:08:25 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 17:08:25 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 17:08:25 --> Total execution time: 0.0734
DEBUG - 2021-08-18 17:08:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:08:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:08:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:08:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:08:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:08:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:08:40 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:08:40 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '3'
QUERY - 2021-08-18 17:08:40 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 17:08:40 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 17:08:40 --> Total execution time: 0.0724
DEBUG - 2021-08-18 17:08:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:08:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:08:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:08:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:08:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:08:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:08:55 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:08:55 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '3'
QUERY - 2021-08-18 17:08:55 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 17:08:55 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 17:08:55 --> Total execution time: 0.0861
DEBUG - 2021-08-18 17:09:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:09:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:09:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:09:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:09:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:09:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:09:10 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:09:10 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '3'
QUERY - 2021-08-18 17:09:10 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 17:09:10 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 17:09:10 --> Total execution time: 0.0984
DEBUG - 2021-08-18 17:09:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:09:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:09:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:09:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:09:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:09:25 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:09:25 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:09:25 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '3'
QUERY - 2021-08-18 17:09:25 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 17:09:25 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 17:09:25 --> Total execution time: 0.0806
DEBUG - 2021-08-18 17:09:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:09:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:09:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:09:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:09:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:09:40 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:09:40 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:09:40 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '3'
QUERY - 2021-08-18 17:09:40 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 17:09:40 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 17:09:40 --> Total execution time: 0.0760
DEBUG - 2021-08-18 17:09:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:09:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:09:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:09:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:09:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:09:55 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:09:55 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:09:55 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '3'
QUERY - 2021-08-18 17:09:55 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 17:09:55 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 17:09:55 --> Total execution time: 0.1029
DEBUG - 2021-08-18 17:10:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:10:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:10:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:10:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:10:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:10:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:10:10 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:10:10 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '3'
QUERY - 2021-08-18 17:10:10 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 17:10:10 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 17:10:10 --> Total execution time: 0.0822
DEBUG - 2021-08-18 17:10:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:10:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:10:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:10:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:10:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:10:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:10:25 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:10:25 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '3'
QUERY - 2021-08-18 17:10:25 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 17:10:25 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 17:10:25 --> Total execution time: 0.0676
DEBUG - 2021-08-18 17:10:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:10:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:10:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:10:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:10:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:10:40 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:10:40 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:10:40 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '3'
QUERY - 2021-08-18 17:10:40 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 17:10:40 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 17:10:40 --> Total execution time: 0.0821
DEBUG - 2021-08-18 17:10:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:10:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:10:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:10:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:10:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:10:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:10:55 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:10:55 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '3'
QUERY - 2021-08-18 17:10:55 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 17:10:55 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 17:10:55 --> Total execution time: 0.0697
DEBUG - 2021-08-18 17:11:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:11:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:11:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:11:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:11:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:11:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:11:10 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:11:10 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '3'
QUERY - 2021-08-18 17:11:10 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 17:11:10 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 17:11:10 --> Total execution time: 0.0746
DEBUG - 2021-08-18 17:11:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:11:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:11:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:11:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:11:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:11:25 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:11:25 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:11:25 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '3'
QUERY - 2021-08-18 17:11:25 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 17:11:25 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 17:11:25 --> Total execution time: 0.0835
DEBUG - 2021-08-18 17:11:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:11:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:11:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:11:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:11:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:11:40 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:11:40 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:11:40 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '3'
QUERY - 2021-08-18 17:11:40 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 17:11:40 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 17:11:40 --> Total execution time: 0.0960
DEBUG - 2021-08-18 17:11:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:11:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:11:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:11:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:11:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:11:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:11:55 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:11:55 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '3'
QUERY - 2021-08-18 17:11:55 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 17:11:55 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 17:11:55 --> Total execution time: 0.0991
DEBUG - 2021-08-18 17:12:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:12:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:12:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:12:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:12:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:12:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:12:10 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:12:10 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '3'
QUERY - 2021-08-18 17:12:10 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 17:12:10 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 17:12:10 --> Total execution time: 0.0662
DEBUG - 2021-08-18 17:12:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:12:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:12:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:12:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:12:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:12:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:12:25 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:12:25 --> 0.0005 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '3'
QUERY - 2021-08-18 17:12:25 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 17:12:25 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 17:12:25 --> Total execution time: 0.0713
DEBUG - 2021-08-18 17:12:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:12:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:12:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:12:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:12:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:12:40 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:12:40 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:12:40 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '3'
QUERY - 2021-08-18 17:12:40 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 17:12:40 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 17:12:40 --> Total execution time: 0.0865
DEBUG - 2021-08-18 17:12:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:12:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:12:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:12:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:12:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:12:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:12:55 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:12:55 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '3'
QUERY - 2021-08-18 17:12:55 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 17:12:55 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 17:12:55 --> Total execution time: 0.0872
DEBUG - 2021-08-18 17:13:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:13:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:13:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:13:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:13:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:13:10 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:13:10 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:13:10 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '3'
QUERY - 2021-08-18 17:13:10 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 17:13:10 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 17:13:10 --> Total execution time: 0.0759
DEBUG - 2021-08-18 17:13:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:13:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:13:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:13:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:13:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:13:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:13:25 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:13:25 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '3'
QUERY - 2021-08-18 17:13:25 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 17:13:25 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 17:13:25 --> Total execution time: 0.0739
DEBUG - 2021-08-18 17:13:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:13:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:13:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:13:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:13:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:13:40 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:13:40 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:13:40 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '3'
QUERY - 2021-08-18 17:13:40 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 17:13:40 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 17:13:40 --> Total execution time: 0.0796
DEBUG - 2021-08-18 17:13:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:13:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:13:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:13:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:13:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:13:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:13:55 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:13:55 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '3'
QUERY - 2021-08-18 17:13:55 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 17:13:55 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 17:13:55 --> Total execution time: 0.1097
DEBUG - 2021-08-18 17:14:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:14:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:14:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:14:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:14:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:14:10 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:14:10 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:14:10 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '3'
QUERY - 2021-08-18 17:14:10 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 17:14:10 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 17:14:10 --> Total execution time: 0.0785
DEBUG - 2021-08-18 17:14:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:14:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:14:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:14:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:14:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:14:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:14:25 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:14:25 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '3'
QUERY - 2021-08-18 17:14:25 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-18 17:14:25 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-18 17:14:25 --> Total execution time: 0.0702
DEBUG - 2021-08-18 17:36:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:36:36 --> No URI present. Default controller set.
DEBUG - 2021-08-18 17:36:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:36:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:36:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:36:36 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 17:36:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:36:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:36:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:36:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:36:36 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:36:42 --> 2.7071 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-18 17:36:42 --> 0.7743 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-18 17:36:42 --> 2.6467 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-18 17:36:42 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 17:36:42 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:36:42 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:36:42 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:36:42 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 17:36:42 --> Total execution time: 6.2228
DEBUG - 2021-08-18 17:36:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:36:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:36:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:36:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:36:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:36:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:36:43 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 17:36:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:36:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:36:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:36:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:36:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:36:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:36:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:36:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-18 17:36:45 --> 2.6422 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-18 17:36:45 --> Total execution time: 2.7223
DEBUG - 2021-08-18 17:36:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:36:45 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 17:36:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:36:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:36:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-18 17:37:40 --> 54.5249 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
DEBUG - 2021-08-18 17:37:40 --> Total execution time: 57.1892
DEBUG - 2021-08-18 17:37:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:37:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:37:40 --> 0.0286 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `campaign_name` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-18 17:37:40 --> Total execution time: 57.2192
DEBUG - 2021-08-18 17:37:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:37:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:37:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:37:40 --> 0.0006 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:37:40 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 17:37:40 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:37:40 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:37:40 --> 0.0002 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 17:37:40 --> Total execution time: 42.4689
DEBUG - 2021-08-18 17:38:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:38:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:38:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:38:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:38:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:38:01 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:38:01 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 17:38:01 --> Total execution time: 0.0799
DEBUG - 2021-08-18 17:38:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:38:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:38:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:38:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:38:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:38:21 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:38:21 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 17:38:21 --> Total execution time: 0.0683
DEBUG - 2021-08-18 17:38:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:38:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:38:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:38:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:38:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:38:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:38:41 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 17:38:41 --> Total execution time: 0.0855
DEBUG - 2021-08-18 17:39:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:39:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:39:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:39:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:39:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:39:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:39:01 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 17:39:01 --> Total execution time: 0.0825
DEBUG - 2021-08-18 17:39:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:39:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:39:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:39:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:39:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:39:21 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:39:21 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 17:39:21 --> Total execution time: 0.0778
DEBUG - 2021-08-18 17:39:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:39:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:39:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:39:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:39:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:39:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:39:41 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 17:39:41 --> Total execution time: 0.0798
DEBUG - 2021-08-18 17:40:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:40:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:40:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:40:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:40:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:40:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:40:01 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 17:40:01 --> Total execution time: 0.0899
DEBUG - 2021-08-18 17:40:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:40:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:40:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:40:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:40:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:40:21 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:40:21 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 17:40:21 --> Total execution time: 0.0753
DEBUG - 2021-08-18 17:40:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:40:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:40:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:40:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:40:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:40:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:40:41 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 17:40:41 --> Total execution time: 0.0703
DEBUG - 2021-08-18 17:41:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:41:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:41:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:41:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:41:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:41:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:41:01 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 17:41:01 --> Total execution time: 0.0788
DEBUG - 2021-08-18 17:41:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:41:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:41:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:41:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:41:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:41:21 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:41:21 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 17:41:21 --> Total execution time: 0.0725
DEBUG - 2021-08-18 17:41:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:41:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:41:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:41:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:41:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:41:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:41:41 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 17:41:41 --> Total execution time: 0.0733
DEBUG - 2021-08-18 17:42:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:42:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:42:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:42:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:42:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:42:01 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:42:01 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 17:42:01 --> Total execution time: 0.0759
DEBUG - 2021-08-18 17:42:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:42:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:42:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:42:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:42:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:42:21 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:42:21 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 17:42:21 --> Total execution time: 0.0710
DEBUG - 2021-08-18 17:42:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:42:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:42:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:42:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:42:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:42:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:42:41 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 17:42:41 --> Total execution time: 0.0824
DEBUG - 2021-08-18 17:43:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:43:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:43:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:43:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:43:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:43:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:43:01 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 17:43:01 --> Total execution time: 0.0754
DEBUG - 2021-08-18 17:43:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:43:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:43:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:43:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:43:02 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:43:02 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:43:02 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:43:02 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 17:43:02 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:43:02 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:43:02 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 17:43:02 --> Total execution time: 0.0910
DEBUG - 2021-08-18 17:43:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:43:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:43:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:43:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:43:09 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 17:43:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:43:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:43:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:43:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:43:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:43:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:43:09 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:43:09 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 17:43:09 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:43:09 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:43:09 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 17:43:09 --> Total execution time: 0.0800
DEBUG - 2021-08-18 17:43:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:43:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:43:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:43:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:43:30 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:43:30 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:43:30 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 17:43:30 --> Total execution time: 0.0635
DEBUG - 2021-08-18 17:43:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:43:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:43:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:43:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:43:47 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 17:43:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:43:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:43:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:43:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:43:47 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:43:47 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:43:47 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:43:47 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 17:43:47 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:43:47 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:43:47 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 17:43:47 --> Total execution time: 0.0762
DEBUG - 2021-08-18 17:44:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:44:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:44:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:44:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:44:05 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 17:44:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:44:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:44:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:44:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:44:05 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:44:05 --> 0.0077 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:44:05 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:44:05 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 17:44:05 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:44:05 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:44:05 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 17:44:05 --> Total execution time: 0.1050
DEBUG - 2021-08-18 17:44:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:44:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:44:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:44:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:44:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:44:26 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:44:26 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 17:44:26 --> Total execution time: 0.0797
DEBUG - 2021-08-18 17:44:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:44:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:44:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:44:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:44:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:44:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:44:46 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 17:44:46 --> Total execution time: 0.0855
DEBUG - 2021-08-18 17:45:06 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:45:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:45:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:45:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:45:06 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:45:06 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:45:06 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 17:45:06 --> Total execution time: 0.0673
DEBUG - 2021-08-18 17:45:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:45:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:45:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:45:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:45:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:45:10 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:45:10 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:45:10 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 17:45:10 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:45:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:45:10 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 17:45:10 --> Total execution time: 0.0841
DEBUG - 2021-08-18 17:45:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:45:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:45:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:45:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:45:16 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 17:45:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:45:16 --> Global POST, GET and COOKIE data sanitized
QUERY - 2021-08-18 17:45:16 --> 0.0065 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:45:16 --> 0.0012 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:45:16 --> 0.005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 17:45:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:45:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:45:16 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 17:45:16 --> Total execution time: 0.1810
DEBUG - 2021-08-18 17:45:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:45:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:45:16 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 17:45:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:45:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:45:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:45:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:45:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:45:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:45:16 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:45:16 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 17:45:16 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:45:16 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:45:16 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 17:45:16 --> Total execution time: 0.0872
DEBUG - 2021-08-18 17:45:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:45:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:45:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:45:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:45:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:45:21 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:45:21 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:45:21 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 17:45:21 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:45:21 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:45:21 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 17:45:21 --> Total execution time: 0.0878
DEBUG - 2021-08-18 17:45:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:45:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:45:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:45:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:45:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:45:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:45:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:45:34 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:45:34 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:45:34 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 17:45:34 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:45:34 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:45:34 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 17:45:34 --> Total execution time: 0.1121
DEBUG - 2021-08-18 17:45:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:45:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:45:34 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 17:45:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:45:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:45:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:45:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:45:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:45:34 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:45:34 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:45:34 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 17:45:34 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:45:34 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:45:34 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 17:45:34 --> Total execution time: 0.0867
DEBUG - 2021-08-18 17:45:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:45:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:45:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:45:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:45:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:45:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:45:55 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 17:45:55 --> Total execution time: 0.0731
DEBUG - 2021-08-18 17:46:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:46:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:46:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:46:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:46:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:46:15 --> 0.001 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:46:15 --> 0.0005 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 17:46:15 --> Total execution time: 0.1007
DEBUG - 2021-08-18 17:46:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:46:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:46:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:46:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:46:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:46:21 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:46:21 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:46:21 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 17:46:21 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:46:21 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:46:21 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 17:46:21 --> Total execution time: 0.0839
DEBUG - 2021-08-18 17:46:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:46:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:46:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:46:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:46:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:46:25 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:46:25 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:46:25 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 17:46:25 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:46:25 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:46:25 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 17:46:25 --> Total execution time: 0.0904
DEBUG - 2021-08-18 17:46:32 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:46:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:46:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:46:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:46:32 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 17:46:32 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:46:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:46:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:46:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:46:32 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:46:32 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:46:32 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:46:32 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 17:46:32 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:46:32 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:46:32 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 17:46:32 --> Total execution time: 0.0858
DEBUG - 2021-08-18 17:46:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:46:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:46:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:46:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:46:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:46:53 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:46:53 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 17:46:53 --> Total execution time: 0.1161
DEBUG - 2021-08-18 17:47:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:47:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:47:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:47:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:47:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:47:13 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:47:13 --> 0.0006 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 17:47:13 --> Total execution time: 0.0744
DEBUG - 2021-08-18 17:47:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:47:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:47:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:47:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:47:33 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:47:33 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:47:33 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 17:47:33 --> Total execution time: 0.0698
DEBUG - 2021-08-18 17:47:49 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:47:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:47:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:47:49 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:47:49 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:47:49 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:47:49 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:47:49 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 17:47:49 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:47:49 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:47:49 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 17:47:49 --> Total execution time: 0.0869
DEBUG - 2021-08-18 17:47:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:47:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:47:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:47:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:47:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:47:53 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:47:53 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:47:53 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 17:47:53 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:47:53 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:47:53 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 17:47:53 --> Total execution time: 0.0857
DEBUG - 2021-08-18 17:48:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:48:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:48:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:48:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:48:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:48:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:48:14 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 17:48:14 --> Total execution time: 0.0938
DEBUG - 2021-08-18 17:48:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:48:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:48:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:48:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:48:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:48:24 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:48:24 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:48:24 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 17:48:24 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:48:24 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:48:24 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 17:48:24 --> Total execution time: 0.1019
DEBUG - 2021-08-18 17:48:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:48:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:48:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:48:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:48:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:48:45 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:48:45 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 17:48:45 --> Total execution time: 0.0879
DEBUG - 2021-08-18 17:49:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:49:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:49:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:49:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:49:05 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:49:05 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:49:05 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 17:49:05 --> Total execution time: 0.0803
DEBUG - 2021-08-18 17:49:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:49:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:49:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:49:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:49:12 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:49:12 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:49:12 --> 0.0006 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:49:12 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 17:49:12 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:49:12 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:49:12 --> 0.0002 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 17:49:12 --> Total execution time: 0.0963
DEBUG - 2021-08-18 17:49:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:49:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:49:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:49:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:49:33 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:49:33 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:49:33 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 17:49:33 --> Total execution time: 0.0700
DEBUG - 2021-08-18 17:49:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:49:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:49:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:49:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:49:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:49:53 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:49:53 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 17:49:53 --> Total execution time: 0.0890
DEBUG - 2021-08-18 17:50:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:50:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:50:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:50:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:50:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:50:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:50:13 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 17:50:13 --> Total execution time: 0.0726
DEBUG - 2021-08-18 17:50:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:50:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:50:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:50:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:50:33 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:50:33 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:50:33 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 17:50:33 --> Total execution time: 0.0958
DEBUG - 2021-08-18 17:50:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:50:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:50:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:50:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:50:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:50:53 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:50:53 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 17:50:53 --> Total execution time: 0.0709
DEBUG - 2021-08-18 17:51:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:51:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:51:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:51:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:51:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:51:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:51:13 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 17:51:13 --> Total execution time: 0.0814
DEBUG - 2021-08-18 17:51:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:51:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:51:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:51:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:51:33 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:51:33 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:51:33 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 17:51:33 --> Total execution time: 0.0689
DEBUG - 2021-08-18 17:51:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:51:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:51:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:51:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:51:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:51:53 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:51:53 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 17:51:53 --> Total execution time: 0.0989
DEBUG - 2021-08-18 17:51:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:51:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:51:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:51:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:51:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:51:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:51:55 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:51:55 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 17:51:55 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:51:55 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:51:55 --> 0.0002 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 17:51:55 --> Total execution time: 0.0783
DEBUG - 2021-08-18 17:52:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:52:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:52:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:52:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:52:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:52:16 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:52:16 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 17:52:16 --> Total execution time: 0.0621
DEBUG - 2021-08-18 17:52:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:52:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:52:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:52:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:52:36 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:52:36 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:52:36 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 17:52:36 --> Total execution time: 0.0695
DEBUG - 2021-08-18 17:52:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:52:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:52:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:52:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:52:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:52:56 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:52:56 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 17:52:56 --> Total execution time: 0.0895
DEBUG - 2021-08-18 17:53:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:53:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:53:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:53:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:53:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:53:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:53:16 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 17:53:16 --> Total execution time: 0.0708
DEBUG - 2021-08-18 17:53:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:53:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:53:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:53:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:53:36 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:53:36 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:53:36 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 17:53:36 --> Total execution time: 0.0648
DEBUG - 2021-08-18 17:53:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:53:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:53:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:53:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:53:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:53:56 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:53:56 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 17:53:56 --> Total execution time: 0.1254
DEBUG - 2021-08-18 17:54:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:54:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:54:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:54:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:54:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:54:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:54:16 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 17:54:16 --> Total execution time: 0.0750
DEBUG - 2021-08-18 17:54:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:54:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:54:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:54:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:54:36 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:54:36 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:54:36 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 17:54:36 --> Total execution time: 0.0838
DEBUG - 2021-08-18 17:54:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:54:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:54:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:54:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:54:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:54:56 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:54:56 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 17:54:56 --> Total execution time: 0.0998
DEBUG - 2021-08-18 17:55:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:55:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:55:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:55:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:55:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:55:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:55:16 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 17:55:16 --> Total execution time: 0.0751
DEBUG - 2021-08-18 17:55:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:55:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:55:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:55:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:55:36 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:55:36 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:55:36 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 17:55:36 --> Total execution time: 0.0815
DEBUG - 2021-08-18 17:55:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:55:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:55:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:55:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:55:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:55:56 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:55:56 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 17:55:56 --> Total execution time: 0.0670
DEBUG - 2021-08-18 17:56:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:56:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:56:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:56:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:56:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:56:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:56:16 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 17:56:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:56:16 --> Session class already loaded. Second attempt ignored.
QUERY - 2021-08-18 17:56:16 --> 0.0023 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:56:16 --> 0.0007 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 17:56:16 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 17:56:16 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:56:16 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:56:16 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 17:56:16 --> Total execution time: 0.1084
DEBUG - 2021-08-18 17:56:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:56:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:56:16 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 17:56:16 --> Total execution time: 0.0900
DEBUG - 2021-08-18 17:56:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:56:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:56:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:56:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:56:36 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:56:36 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:56:36 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 17:56:36 --> Total execution time: 0.0833
DEBUG - 2021-08-18 17:56:57 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:56:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:56:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:56:57 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:56:57 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:56:57 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:56:57 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 17:56:57 --> Total execution time: 0.0786
DEBUG - 2021-08-18 17:57:17 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:57:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:57:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:57:17 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:57:17 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:57:17 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:57:17 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 17:57:17 --> Total execution time: 0.0816
DEBUG - 2021-08-18 17:57:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:57:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:57:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:57:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:57:37 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:57:37 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:57:37 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 17:57:37 --> Total execution time: 0.0752
DEBUG - 2021-08-18 17:57:57 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:57:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:57:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:57:57 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:57:57 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:57:57 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:57:57 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 17:57:57 --> Total execution time: 0.0711
DEBUG - 2021-08-18 17:58:17 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:58:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:58:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:58:17 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:58:17 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:58:17 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:58:17 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 17:58:17 --> Total execution time: 0.0934
DEBUG - 2021-08-18 17:58:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:58:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:58:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:58:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:58:37 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:58:37 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:58:37 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 17:58:37 --> Total execution time: 0.0869
DEBUG - 2021-08-18 17:58:57 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:58:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:58:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:58:57 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:58:57 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:58:57 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:58:57 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 17:58:57 --> Total execution time: 0.0781
DEBUG - 2021-08-18 17:59:17 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:59:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:59:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:59:17 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:59:17 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:59:17 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:59:17 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 17:59:17 --> Total execution time: 0.0729
DEBUG - 2021-08-18 17:59:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:59:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:59:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:59:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:59:37 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:59:37 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:59:37 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 17:59:37 --> Total execution time: 0.0722
DEBUG - 2021-08-18 17:59:57 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 17:59:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 17:59:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 17:59:57 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 17:59:57 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 17:59:57 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 17:59:57 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 17:59:57 --> Total execution time: 0.0992
DEBUG - 2021-08-18 18:00:17 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:00:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:00:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:00:17 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:00:17 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:00:17 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:00:17 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:00:17 --> Total execution time: 0.0632
DEBUG - 2021-08-18 18:00:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:00:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:00:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:00:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:00:37 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:00:37 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:00:37 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:00:37 --> Total execution time: 0.0777
DEBUG - 2021-08-18 18:00:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:00:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:00:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:00:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:00:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:00:56 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:00:56 --> 0.0005 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:00:56 --> Total execution time: 0.0799
DEBUG - 2021-08-18 18:01:17 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:01:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:01:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:01:17 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:01:17 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:01:17 --> 0.0008 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:01:17 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:01:17 --> Total execution time: 0.1113
DEBUG - 2021-08-18 18:01:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:01:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:01:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:01:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:01:37 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:01:37 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:01:37 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:01:37 --> Total execution time: 0.0790
DEBUG - 2021-08-18 18:01:57 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:01:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:01:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:01:57 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:01:57 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:01:57 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:01:57 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:01:57 --> Total execution time: 0.0991
DEBUG - 2021-08-18 18:02:17 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:02:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:02:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:02:17 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:02:17 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:02:17 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:02:17 --> 0.0005 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:02:17 --> Total execution time: 0.0907
DEBUG - 2021-08-18 18:02:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:02:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:02:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:02:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:02:37 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:02:37 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:02:37 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:02:37 --> Total execution time: 0.0809
DEBUG - 2021-08-18 18:02:57 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:02:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:02:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:02:57 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:02:57 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:02:57 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:02:57 --> 0.0005 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:02:57 --> Total execution time: 0.0963
DEBUG - 2021-08-18 18:03:17 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:03:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:03:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:03:17 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:03:17 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:03:17 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:03:17 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:03:17 --> Total execution time: 0.0839
DEBUG - 2021-08-18 18:03:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:03:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:03:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:03:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:03:37 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:03:37 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:03:37 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:03:37 --> Total execution time: 0.0740
DEBUG - 2021-08-18 18:03:57 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:03:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:03:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:03:57 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:03:57 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:03:57 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:03:57 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:03:57 --> Total execution time: 0.1008
DEBUG - 2021-08-18 18:04:17 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:04:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:04:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:04:17 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:04:17 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:04:17 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:04:17 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:04:17 --> Total execution time: 0.0743
DEBUG - 2021-08-18 18:04:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:04:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:04:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:04:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:04:37 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:04:37 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:04:37 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:04:37 --> Total execution time: 0.0897
DEBUG - 2021-08-18 18:04:57 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:04:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:04:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:04:57 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:04:57 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:04:57 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:04:57 --> 0.0017 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:04:57 --> Total execution time: 0.1022
DEBUG - 2021-08-18 18:05:17 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:05:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:05:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:05:17 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:05:17 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:05:17 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:05:17 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:05:17 --> Total execution time: 0.0951
DEBUG - 2021-08-18 18:05:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:05:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:05:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:05:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:05:37 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:05:37 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:05:37 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:05:37 --> Total execution time: 0.0823
DEBUG - 2021-08-18 18:05:57 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:05:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:05:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:05:57 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:05:57 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:05:57 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:05:57 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:05:57 --> Total execution time: 0.0706
DEBUG - 2021-08-18 18:06:17 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:06:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:06:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:06:17 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:06:17 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:06:17 --> 0.0009 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:06:17 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:06:17 --> Total execution time: 0.0788
DEBUG - 2021-08-18 18:06:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:06:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:06:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:06:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:06:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:06:35 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:06:35 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 18:06:35 --> 0.0009 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 18:06:35 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:06:35 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:06:35 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 18:06:35 --> Total execution time: 0.0802
DEBUG - 2021-08-18 18:06:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:06:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:06:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:06:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:06:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:06:56 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:06:56 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:06:56 --> Total execution time: 0.0745
DEBUG - 2021-08-18 18:07:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:07:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:07:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:07:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:07:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:07:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:07:16 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:07:16 --> Total execution time: 0.0765
DEBUG - 2021-08-18 18:07:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:07:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:07:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:07:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:07:36 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:07:36 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:07:36 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:07:36 --> Total execution time: 0.0865
DEBUG - 2021-08-18 18:07:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:07:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:07:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:07:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:07:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:07:56 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:07:56 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:07:56 --> Total execution time: 0.0728
DEBUG - 2021-08-18 18:08:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:08:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:08:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:08:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:08:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:08:16 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:08:16 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:08:16 --> Total execution time: 0.0881
DEBUG - 2021-08-18 18:08:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:08:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:08:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:08:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:08:36 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:08:36 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:08:36 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:08:36 --> Total execution time: 0.0802
DEBUG - 2021-08-18 18:08:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:08:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:08:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:08:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:08:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:08:39 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:08:39 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 18:08:39 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 18:08:39 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:08:39 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:08:39 --> 0.0002 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 18:08:39 --> Total execution time: 0.0853
DEBUG - 2021-08-18 18:08:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:08:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:08:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:08:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:08:44 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 18:08:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:08:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:08:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:08:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:08:51 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 18:09:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:09:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:09:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:09:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:09:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:09:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:09:00 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:09:00 --> Total execution time: 0.0819
DEBUG - 2021-08-18 18:09:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:09:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:09:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:09:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:09:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:09:20 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:09:20 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:09:20 --> Total execution time: 0.0626
DEBUG - 2021-08-18 18:09:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:09:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:09:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:09:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:09:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:09:39 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:09:39 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:09:39 --> Total execution time: 0.0998
DEBUG - 2021-08-18 18:09:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:09:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:09:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:09:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:09:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:09:42 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:09:42 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 18:09:42 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 18:09:42 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:09:42 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:09:42 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 18:09:42 --> Total execution time: 0.0759
DEBUG - 2021-08-18 18:09:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:09:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:09:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:09:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:09:48 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 18:10:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:10:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:10:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:10:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:10:03 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:10:03 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:10:03 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:10:03 --> Total execution time: 0.1267
DEBUG - 2021-08-18 18:10:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:10:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:10:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:10:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:10:16 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 18:10:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:10:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:10:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:10:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:10:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:10:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:10:23 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:10:23 --> Total execution time: 0.0678
DEBUG - 2021-08-18 18:10:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:10:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:10:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:10:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:10:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:10:43 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:10:43 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:10:43 --> Total execution time: 0.0771
DEBUG - 2021-08-18 18:11:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:11:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:11:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:11:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:11:03 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:11:03 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:11:03 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:11:03 --> Total execution time: 0.0828
DEBUG - 2021-08-18 18:11:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:11:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:11:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:11:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:11:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:11:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:11:23 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:11:23 --> Total execution time: 0.0826
DEBUG - 2021-08-18 18:11:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:11:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:11:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:11:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:11:30 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:11:30 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:11:30 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 18:11:30 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 18:11:30 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:11:30 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:11:30 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 18:11:30 --> Total execution time: 0.0850
DEBUG - 2021-08-18 18:11:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:11:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:11:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:11:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:11:52 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:11:52 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:11:52 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:11:52 --> Total execution time: 0.0800
DEBUG - 2021-08-18 18:12:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:12:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:12:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:12:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:12:12 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:12:12 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:12:12 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:12:12 --> Total execution time: 0.0832
DEBUG - 2021-08-18 18:12:32 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:12:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:12:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:12:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:12:32 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:12:32 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:12:32 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:12:32 --> Total execution time: 0.0726
DEBUG - 2021-08-18 18:12:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:12:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:12:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:12:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:12:52 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:12:52 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:12:52 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:12:52 --> Total execution time: 0.0602
DEBUG - 2021-08-18 18:13:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:13:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:13:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:13:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:13:12 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:13:12 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:13:12 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:13:12 --> Total execution time: 0.1103
DEBUG - 2021-08-18 18:13:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:13:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:13:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:13:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:13:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:13:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:13:13 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 18:13:13 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 18:13:13 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:13:13 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:13:13 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 18:13:13 --> Total execution time: 0.0943
DEBUG - 2021-08-18 18:13:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:13:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:13:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:13:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:13:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:13:35 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:13:35 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:13:35 --> Total execution time: 0.0760
DEBUG - 2021-08-18 18:13:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:13:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:13:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:13:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:13:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:13:44 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:13:44 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 18:13:44 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 18:13:44 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:13:44 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:13:44 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 18:13:44 --> Total execution time: 0.0706
DEBUG - 2021-08-18 18:13:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:13:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:13:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:13:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:13:48 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 18:14:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:14:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:14:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:14:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:14:05 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:14:05 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:14:05 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:14:05 --> Total execution time: 0.0724
DEBUG - 2021-08-18 18:14:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:14:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:14:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:14:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:14:12 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:14:12 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:14:12 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 18:14:12 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 18:14:12 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:14:12 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:14:12 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 18:14:12 --> Total execution time: 0.0793
DEBUG - 2021-08-18 18:14:17 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:14:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:14:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:14:17 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:14:17 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 18:14:17 --> You did not select a file to upload.
QUERY - 2021-08-18 18:14:17 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
DEBUG - 2021-08-18 18:14:17 --> Total execution time: 0.0755
DEBUG - 2021-08-18 18:14:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:14:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:14:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:14:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:14:28 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 18:14:28 --> You did not select a file to upload.
QUERY - 2021-08-18 18:14:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
DEBUG - 2021-08-18 18:14:28 --> Total execution time: 0.0751
DEBUG - 2021-08-18 18:14:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:14:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:14:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:14:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:14:33 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:14:33 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:14:33 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:14:33 --> Total execution time: 0.2278
DEBUG - 2021-08-18 18:14:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:14:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:14:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:14:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:14:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:14:53 --> 0.0008 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:14:53 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:14:53 --> Total execution time: 0.1358
DEBUG - 2021-08-18 18:15:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:15:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:15:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:15:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:15:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:15:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:15:13 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:15:13 --> Total execution time: 0.0849
DEBUG - 2021-08-18 18:15:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:15:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:15:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:15:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:15:33 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:15:33 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:15:33 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:15:33 --> Total execution time: 0.0931
DEBUG - 2021-08-18 18:15:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:15:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:15:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:15:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:15:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:15:53 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:15:53 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:15:53 --> Total execution time: 0.0719
DEBUG - 2021-08-18 18:16:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:16:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:16:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:16:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:16:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:16:13 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:16:13 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:16:13 --> Total execution time: 0.0790
DEBUG - 2021-08-18 18:16:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:16:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:16:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:16:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:16:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:16:27 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:16:27 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 18:16:27 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 18:16:27 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:16:27 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:16:27 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 18:16:27 --> Total execution time: 0.0863
DEBUG - 2021-08-18 18:16:32 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:16:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:16:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:16:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:16:32 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 18:16:32 --> You did not select a file to upload.
QUERY - 2021-08-18 18:16:32 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
DEBUG - 2021-08-18 18:16:32 --> Total execution time: 0.0807
DEBUG - 2021-08-18 18:16:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:16:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:16:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:16:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:16:45 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 18:16:45 --> You did not select a file to upload.
QUERY - 2021-08-18 18:16:45 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
DEBUG - 2021-08-18 18:16:45 --> Total execution time: 0.0764
DEBUG - 2021-08-18 18:16:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:16:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:16:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:16:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:16:48 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:16:48 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:16:48 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:16:48 --> Total execution time: 0.0781
DEBUG - 2021-08-18 18:17:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:17:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:17:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:17:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:17:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:17:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:17:08 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:17:08 --> Total execution time: 0.0689
DEBUG - 2021-08-18 18:17:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:17:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:17:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:17:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:17:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:17:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:17:28 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:17:28 --> Total execution time: 0.0842
DEBUG - 2021-08-18 18:17:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:17:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:17:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:17:49 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:17:49 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:17:49 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:17:49 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:17:49 --> Total execution time: 0.0745
DEBUG - 2021-08-18 18:18:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:18:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:18:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:18:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:18:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:18:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:18:08 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:18:08 --> Total execution time: 0.0788
DEBUG - 2021-08-18 18:18:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:18:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:18:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:18:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:18:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:18:08 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:18:08 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 18:18:08 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 18:18:08 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:18:08 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:18:08 --> 0.0002 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 18:18:08 --> Total execution time: 0.0827
DEBUG - 2021-08-18 18:18:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:18:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:18:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:18:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:18:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:18:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:18:29 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:18:29 --> Total execution time: 0.0667
DEBUG - 2021-08-18 18:18:49 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:18:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:18:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:18:49 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:18:49 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:18:49 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:18:49 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:18:49 --> Total execution time: 0.0737
DEBUG - 2021-08-18 18:19:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:19:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:19:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:19:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:19:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:19:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:19:09 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:19:09 --> Total execution time: 0.0944
DEBUG - 2021-08-18 18:19:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:19:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:19:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:19:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:19:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:19:29 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:19:29 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:19:29 --> Total execution time: 0.0716
DEBUG - 2021-08-18 18:19:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:19:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:19:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:19:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:19:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:19:44 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:19:44 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 18:19:44 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 18:19:44 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:19:44 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:19:44 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 18:19:44 --> Total execution time: 0.0848
DEBUG - 2021-08-18 18:19:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:19:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:19:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:19:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:19:50 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 18:20:06 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:20:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:20:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:20:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:20:06 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:20:06 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:20:06 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:20:06 --> Total execution time: 0.0721
DEBUG - 2021-08-18 18:20:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:20:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:20:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:20:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:20:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:20:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:20:25 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:20:25 --> Total execution time: 0.0806
DEBUG - 2021-08-18 18:20:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:20:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:20:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:20:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:20:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:20:26 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:20:26 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 18:20:26 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 18:20:26 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:20:26 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:20:26 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 18:20:26 --> Total execution time: 0.0749
DEBUG - 2021-08-18 18:20:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:20:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:20:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:20:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:20:31 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 18:20:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:20:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:20:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:20:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:20:47 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:20:47 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:20:47 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:20:47 --> Total execution time: 0.0731
DEBUG - 2021-08-18 18:21:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:21:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:21:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:21:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:21:07 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:21:07 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:21:07 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:21:07 --> Total execution time: 0.0789
DEBUG - 2021-08-18 18:21:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:21:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:21:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:21:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:21:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:21:27 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:21:27 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:21:27 --> Total execution time: 0.0700
DEBUG - 2021-08-18 18:21:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:21:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:21:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:21:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:21:47 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:21:47 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:21:47 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:21:47 --> Total execution time: 0.0808
DEBUG - 2021-08-18 18:21:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:21:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:21:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:21:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:21:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:21:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:21:59 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 18:21:59 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 18:21:59 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:21:59 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:21:59 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 18:21:59 --> Total execution time: 0.0773
DEBUG - 2021-08-18 18:22:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:22:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:22:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:22:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:22:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:22:20 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:22:20 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:22:20 --> Total execution time: 0.0759
DEBUG - 2021-08-18 18:22:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:22:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:22:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:22:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:22:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:22:40 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:22:40 --> 0.0005 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:22:40 --> Total execution time: 0.1219
DEBUG - 2021-08-18 18:23:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:23:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:23:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:23:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:23:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:23:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:23:00 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:23:00 --> Total execution time: 0.0972
DEBUG - 2021-08-18 18:23:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:23:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:23:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:23:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:23:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:23:20 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:23:20 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:23:20 --> Total execution time: 0.0785
DEBUG - 2021-08-18 18:23:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:23:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:23:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:23:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:23:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:23:40 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:23:40 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:23:40 --> Total execution time: 0.0803
DEBUG - 2021-08-18 18:23:49 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:23:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:23:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:23:49 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:23:49 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:23:49 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:23:49 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 18:23:49 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 18:23:49 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:23:49 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:23:49 --> 0.0002 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 18:23:49 --> Total execution time: 0.0674
DEBUG - 2021-08-18 18:23:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:23:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:23:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:23:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:23:56 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 18:24:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:24:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:24:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:24:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:24:11 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:24:11 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:24:11 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:24:11 --> Total execution time: 0.0900
DEBUG - 2021-08-18 18:24:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:24:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:24:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:24:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:24:18 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:24:18 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:24:18 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 18:24:18 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 18:24:18 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:24:18 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:24:18 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 18:24:18 --> Total execution time: 0.0767
DEBUG - 2021-08-18 18:24:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:24:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:24:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:24:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:24:28 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 18:24:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:24:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:24:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:24:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:24:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:24:39 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:24:39 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:24:39 --> Total execution time: 0.0890
DEBUG - 2021-08-18 18:24:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:24:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:24:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:24:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:24:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:24:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:24:59 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:24:59 --> Total execution time: 0.0741
DEBUG - 2021-08-18 18:25:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:25:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:25:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:25:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:25:07 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:25:07 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:25:07 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 18:25:07 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 18:25:07 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:25:07 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:25:07 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 18:25:07 --> Total execution time: 0.0852
DEBUG - 2021-08-18 18:25:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:25:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:25:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:25:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:25:14 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 18:25:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:25:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:25:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:25:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:25:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:25:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:25:29 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:25:29 --> Total execution time: 0.0685
DEBUG - 2021-08-18 18:25:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:25:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:25:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:25:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:25:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:25:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:25:31 --> 0.0005 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 18:25:31 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 18:25:31 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:25:31 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:25:31 --> 0.0002 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 18:25:31 --> Total execution time: 0.0816
DEBUG - 2021-08-18 18:25:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:25:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:25:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:25:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:25:37 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 18:25:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:25:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:25:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:25:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:25:52 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:25:52 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:25:52 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:25:52 --> Total execution time: 0.0696
DEBUG - 2021-08-18 18:26:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:26:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:26:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:26:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:26:12 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:26:12 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:26:12 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:26:12 --> Total execution time: 0.0806
DEBUG - 2021-08-18 18:26:32 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:26:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:26:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:26:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:26:32 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:26:32 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:26:32 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:26:32 --> Total execution time: 0.1053
DEBUG - 2021-08-18 18:26:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:26:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:26:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:26:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:26:52 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:26:52 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:26:52 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:26:52 --> Total execution time: 0.0789
DEBUG - 2021-08-18 18:27:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:27:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:27:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:27:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:27:12 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:27:12 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:27:12 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:27:12 --> Total execution time: 0.0666
DEBUG - 2021-08-18 18:27:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:27:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:27:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:27:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:27:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:27:27 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:27:27 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 18:27:27 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 18:27:27 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:27:27 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:27:27 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 18:27:27 --> Total execution time: 0.0813
DEBUG - 2021-08-18 18:27:32 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:27:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:27:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:27:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:27:32 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 18:27:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:27:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:27:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:27:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:27:48 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:27:48 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:27:48 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:27:48 --> Total execution time: 0.0831
DEBUG - 2021-08-18 18:27:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:27:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:27:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:27:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:27:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:27:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:27:55 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 18:27:55 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 18:27:55 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:27:55 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:27:55 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 18:27:55 --> Total execution time: 0.0799
DEBUG - 2021-08-18 18:28:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:28:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:28:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:28:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:28:00 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 18:28:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:28:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:28:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:28:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:28:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:28:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:28:16 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:28:16 --> Total execution time: 0.0804
DEBUG - 2021-08-18 18:28:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:28:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:28:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:28:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:28:36 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:28:36 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:28:36 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:28:36 --> Total execution time: 0.0873
DEBUG - 2021-08-18 18:28:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:28:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:28:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:28:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:28:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:28:56 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:28:56 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:28:56 --> Total execution time: 0.0783
DEBUG - 2021-08-18 18:29:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:29:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:29:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:29:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:29:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:29:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:29:16 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:29:16 --> Total execution time: 0.0620
DEBUG - 2021-08-18 18:29:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:29:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:29:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:29:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:29:36 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:29:36 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:29:36 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:29:36 --> Total execution time: 0.1346
DEBUG - 2021-08-18 18:29:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:29:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:29:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:29:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:29:51 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:29:51 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:29:51 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 18:29:51 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 18:29:51 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:29:51 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:29:51 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 18:29:51 --> Total execution time: 0.0927
DEBUG - 2021-08-18 18:29:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:29:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:29:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:29:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:29:56 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 18:30:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:30:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:30:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:30:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:30:12 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:30:12 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:30:12 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:30:12 --> Total execution time: 0.0761
DEBUG - 2021-08-18 18:30:32 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:30:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:30:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:30:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:30:32 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:30:32 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:30:32 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:30:32 --> Total execution time: 0.0761
DEBUG - 2021-08-18 18:30:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:30:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:30:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:30:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:30:36 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 18:31:17 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:31:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:31:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:31:17 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:31:17 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:31:17 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:31:17 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:31:17 --> Total execution time: 0.0731
DEBUG - 2021-08-18 18:31:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:31:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:31:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:31:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:31:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:31:20 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:31:20 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 18:31:20 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 18:31:20 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:31:20 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:31:20 --> 0.0002 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 18:31:20 --> Total execution time: 0.0834
DEBUG - 2021-08-18 18:31:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:31:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:31:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:31:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:31:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:31:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
DEBUG - 2021-08-18 18:31:25 --> Total execution time: 0.1186
DEBUG - 2021-08-18 18:31:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:31:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:31:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:31:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:31:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:31:41 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:31:41 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:31:41 --> Total execution time: 0.0768
DEBUG - 2021-08-18 18:32:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:32:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:32:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:32:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:32:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:32:01 --> 0.0008 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:32:01 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:32:01 --> Total execution time: 0.1878
DEBUG - 2021-08-18 18:32:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:32:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:32:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:32:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:32:03 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:32:03 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:32:03 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 18:32:03 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 18:32:03 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:32:03 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:32:03 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 18:32:03 --> Total execution time: 0.0791
DEBUG - 2021-08-18 18:32:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:32:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:32:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:32:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:32:09 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 18:32:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:32:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:32:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:32:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:32:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:32:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:32:24 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:32:24 --> Total execution time: 0.0731
DEBUG - 2021-08-18 18:32:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:32:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:32:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:32:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:32:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:32:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:32:44 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:32:44 --> Total execution time: 0.0777
DEBUG - 2021-08-18 18:33:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:33:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:33:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:33:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:33:04 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:33:04 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:33:04 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:33:04 --> Total execution time: 0.0699
DEBUG - 2021-08-18 18:33:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:33:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:33:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:33:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:33:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:33:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:33:24 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:33:24 --> Total execution time: 0.0612
DEBUG - 2021-08-18 18:33:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:33:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:33:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:33:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:33:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:33:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:33:29 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 18:33:29 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 18:33:29 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:33:29 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:33:29 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 18:33:29 --> Total execution time: 0.0712
DEBUG - 2021-08-18 18:33:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:33:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:33:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:33:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:33:34 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 18:33:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:33:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:33:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:33:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:33:50 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:33:50 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:33:50 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:33:50 --> Total execution time: 0.0664
DEBUG - 2021-08-18 18:34:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:34:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:34:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:34:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:34:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:34:10 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:34:10 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:34:10 --> Total execution time: 0.0757
DEBUG - 2021-08-18 18:34:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:34:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:34:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:34:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:34:30 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:34:30 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:34:30 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:34:30 --> Total execution time: 0.0952
DEBUG - 2021-08-18 18:34:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:34:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:34:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:34:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:34:50 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:34:50 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:34:50 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:34:50 --> Total execution time: 0.0801
DEBUG - 2021-08-18 18:35:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:35:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:35:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:35:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:35:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:35:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:35:10 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:35:10 --> Total execution time: 0.1089
DEBUG - 2021-08-18 18:35:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:35:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:35:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:35:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:35:30 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:35:30 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:35:30 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:35:30 --> Total execution time: 0.0936
DEBUG - 2021-08-18 18:35:49 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:35:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:35:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:35:49 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:35:49 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:35:49 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:35:49 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 18:35:49 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 18:35:49 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:35:49 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:35:49 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 18:35:49 --> Total execution time: 0.0781
DEBUG - 2021-08-18 18:35:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:35:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:35:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:35:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:35:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:35:54 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
DEBUG - 2021-08-18 18:35:54 --> Total execution time: 0.1201
DEBUG - 2021-08-18 18:36:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:36:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:36:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:36:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:36:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:36:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:36:10 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:36:10 --> Total execution time: 0.0671
DEBUG - 2021-08-18 18:36:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:36:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:36:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:36:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:36:30 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:36:30 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:36:30 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:36:30 --> Total execution time: 0.0659
DEBUG - 2021-08-18 18:36:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:36:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:36:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:36:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:36:50 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:36:50 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:36:50 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:36:50 --> Total execution time: 0.0902
DEBUG - 2021-08-18 18:37:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:37:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:37:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:37:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:37:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:37:10 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:37:10 --> 0.0006 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:37:10 --> Total execution time: 0.1238
DEBUG - 2021-08-18 18:37:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:37:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:37:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:37:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:37:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:37:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:37:14 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 18:37:14 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 18:37:14 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:37:14 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:37:14 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 18:37:14 --> Total execution time: 0.0758
DEBUG - 2021-08-18 18:37:19 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:37:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:37:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:37:19 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:37:19 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:37:19 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
DEBUG - 2021-08-18 18:37:19 --> Total execution time: 0.1095
DEBUG - 2021-08-18 18:37:19 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:37:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:37:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:37:19 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:37:19 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:37:19 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:37:19 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 18:37:19 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 18:37:19 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:37:19 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:37:19 --> 0.0002 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 18:37:19 --> Total execution time: 0.0674
DEBUG - 2021-08-18 18:37:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:37:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:37:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:37:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:37:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:37:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:37:40 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:37:40 --> Total execution time: 0.0768
DEBUG - 2021-08-18 18:38:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:38:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:38:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:38:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:38:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:38:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:38:00 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:38:00 --> Total execution time: 0.0883
DEBUG - 2021-08-18 18:38:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:38:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:38:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:38:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:38:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:38:20 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:38:20 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:38:20 --> Total execution time: 0.0817
DEBUG - 2021-08-18 18:38:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:38:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:38:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:38:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:38:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:38:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:38:40 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:38:40 --> Total execution time: 0.0814
DEBUG - 2021-08-18 18:39:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:39:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:39:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:39:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:39:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:39:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:39:00 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:39:00 --> Total execution time: 0.0696
DEBUG - 2021-08-18 18:39:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:39:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:39:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:39:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:39:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:39:20 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:39:20 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:39:20 --> Total execution time: 0.0887
DEBUG - 2021-08-18 18:39:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:39:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:39:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:39:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:39:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:39:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:39:40 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:39:40 --> Total execution time: 0.0982
DEBUG - 2021-08-18 18:40:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:40:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:40:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:40:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:40:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:40:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:40:00 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:40:00 --> Total execution time: 0.0649
DEBUG - 2021-08-18 18:40:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:40:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:40:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:40:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:40:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:40:20 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:40:20 --> 0.0063 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:40:20 --> Total execution time: 0.2115
DEBUG - 2021-08-18 18:40:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:40:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:40:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:40:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:40:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:40:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:40:40 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:40:40 --> Total execution time: 0.0878
DEBUG - 2021-08-18 18:41:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:41:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:41:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:41:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:41:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:41:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:41:00 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:41:00 --> Total execution time: 0.0931
DEBUG - 2021-08-18 18:41:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:41:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:41:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:41:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:41:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:41:20 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:41:20 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:41:20 --> Total execution time: 0.0759
DEBUG - 2021-08-18 18:41:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:41:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:41:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:41:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:41:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:41:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:41:40 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:41:40 --> Total execution time: 0.1008
DEBUG - 2021-08-18 18:42:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:42:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:42:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:42:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:42:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:42:00 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:42:00 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:42:00 --> Total execution time: 0.0783
DEBUG - 2021-08-18 18:42:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:42:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:42:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:42:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:42:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:42:20 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:42:20 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:42:20 --> Total execution time: 0.1714
DEBUG - 2021-08-18 18:42:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:42:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:42:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:42:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:42:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:42:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:42:40 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:42:40 --> Total execution time: 0.0909
DEBUG - 2021-08-18 18:43:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:43:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:43:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:43:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:43:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:43:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:43:00 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:43:00 --> Total execution time: 0.0878
DEBUG - 2021-08-18 18:43:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:43:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:43:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:43:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:43:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:43:20 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:43:20 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:43:20 --> Total execution time: 0.0990
DEBUG - 2021-08-18 18:43:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:43:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:43:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:43:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:43:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:43:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:43:40 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:43:40 --> Total execution time: 0.0918
DEBUG - 2021-08-18 18:44:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:44:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:44:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:44:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:44:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:44:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:44:00 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:44:00 --> Total execution time: 0.0721
DEBUG - 2021-08-18 18:44:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:44:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:44:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:44:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:44:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:44:20 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:44:20 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:44:20 --> Total execution time: 0.0752
DEBUG - 2021-08-18 18:44:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:44:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:44:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:44:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:44:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:44:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:44:40 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 18:44:40 --> Total execution time: 0.0720
DEBUG - 2021-08-18 18:59:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:59:00 --> No URI present. Default controller set.
DEBUG - 2021-08-18 18:59:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:59:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:59:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:59:00 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 18:59:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:59:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:59:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:59:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:59:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:59:06 --> 2.8254 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-18 18:59:06 --> 0.7728 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-18 18:59:06 --> 2.5595 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-18 18:59:06 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 18:59:06 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:59:06 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:59:06 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:59:06 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 18:59:06 --> Total execution time: 6.2478
DEBUG - 2021-08-18 18:59:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:59:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:59:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:59:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:59:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:59:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:59:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:59:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:59:07 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 18:59:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:59:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:59:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:59:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:59:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:59:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-18 18:59:09 --> 2.5746 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-18 18:59:09 --> Total execution time: 2.6709
DEBUG - 2021-08-18 18:59:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:59:09 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 18:59:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:59:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:59:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-18 18:59:40 --> 30.3778 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
DEBUG - 2021-08-18 18:59:40 --> Total execution time: 32.9624
DEBUG - 2021-08-18 18:59:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:59:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:59:40 --> 0.0216 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `campaign_name` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-18 18:59:40 --> Total execution time: 32.9770
DEBUG - 2021-08-18 18:59:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:59:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:59:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:59:40 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 18:59:40 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 18:59:40 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:59:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:59:40 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 18:59:40 --> Total execution time: 28.5304
DEBUG - 2021-08-18 18:59:49 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:59:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:59:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:59:49 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:59:49 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 18:59:49 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 18:59:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 18:59:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 18:59:49 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 18:59:49 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 18:59:49 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:59:49 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 18:59:49 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 18:59:49 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:59:49 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 18:59:49 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 18:59:49 --> Total execution time: 0.0736
DEBUG - 2021-08-18 19:00:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 19:00:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 19:00:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 19:00:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 19:00:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 19:00:10 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:00:10 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 19:00:10 --> Total execution time: 0.0759
DEBUG - 2021-08-18 19:00:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 19:00:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 19:00:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 19:00:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 19:00:30 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 19:00:30 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:00:30 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 19:00:30 --> Total execution time: 0.0614
DEBUG - 2021-08-18 19:00:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 19:00:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 19:00:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 19:00:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 19:00:50 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 19:00:50 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:00:50 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 19:00:50 --> Total execution time: 0.1319
DEBUG - 2021-08-18 19:00:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 19:00:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 19:00:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 19:00:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 19:00:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 19:00:56 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:00:56 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 19:00:56 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 19:00:56 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:00:56 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:00:56 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 19:00:56 --> Total execution time: 0.0689
DEBUG - 2021-08-18 19:01:17 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 19:01:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 19:01:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 19:01:17 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 19:01:17 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 19:01:17 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:01:17 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 19:01:17 --> Total execution time: 0.0907
DEBUG - 2021-08-18 19:01:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 19:01:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 19:01:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 19:01:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 19:01:37 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 19:01:37 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:01:37 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 19:01:37 --> Total execution time: 0.0921
DEBUG - 2021-08-18 19:01:57 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 19:01:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 19:01:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 19:01:57 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 19:01:57 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 19:01:57 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:01:57 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 19:01:57 --> Total execution time: 0.0798
DEBUG - 2021-08-18 19:02:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 19:02:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 19:02:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 19:02:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 19:02:18 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 19:02:18 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:02:18 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 19:02:18 --> Total execution time: 0.0892
DEBUG - 2021-08-18 19:02:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 19:02:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 19:02:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 19:02:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 19:02:36 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 19:02:36 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:02:36 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 19:02:36 --> Total execution time: 0.0750
DEBUG - 2021-08-18 19:02:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 19:02:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 19:02:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 19:02:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 19:02:37 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 19:02:37 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:02:37 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 19:02:37 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 19:02:37 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:02:37 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:02:37 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 19:02:37 --> Total execution time: 0.0765
DEBUG - 2021-08-18 19:02:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 19:02:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 19:02:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 19:02:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 19:02:52 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 19:02:52 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:02:52 --> 0.0005 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 19:02:52 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 19:02:52 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:02:52 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:02:52 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 19:02:52 --> Total execution time: 0.0800
DEBUG - 2021-08-18 19:02:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 19:02:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 19:02:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 19:02:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 19:02:55 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 19:02:55 --> You did not select a file to upload.
QUERY - 2021-08-18 19:02:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
DEBUG - 2021-08-18 19:02:55 --> Total execution time: 0.0730
DEBUG - 2021-08-18 19:02:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 19:02:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 19:02:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 19:02:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 19:02:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 19:02:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:02:55 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 19:02:55 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 19:02:55 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:02:55 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:02:55 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 19:02:55 --> Total execution time: 0.0678
DEBUG - 2021-08-18 19:03:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 19:03:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 19:03:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 19:03:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 19:03:12 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 19:03:12 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:03:12 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 19:03:12 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 19:03:12 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:03:12 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:03:12 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 19:03:12 --> Total execution time: 0.0728
DEBUG - 2021-08-18 19:03:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 19:03:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 19:03:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 19:03:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 19:03:15 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-18 19:03:15 --> You did not select a file to upload.
QUERY - 2021-08-18 19:03:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
DEBUG - 2021-08-18 19:03:15 --> Total execution time: 0.0875
DEBUG - 2021-08-18 19:03:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 19:03:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 19:03:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 19:03:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 19:03:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 19:03:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:03:15 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 19:03:15 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 19:03:15 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:03:15 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:03:15 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 19:03:15 --> Total execution time: 0.0750
DEBUG - 2021-08-18 19:03:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 19:03:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 19:03:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 19:03:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 19:03:36 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 19:03:36 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:03:36 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 19:03:36 --> Total execution time: 0.0636
DEBUG - 2021-08-18 19:03:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 19:03:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 19:03:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 19:03:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 19:03:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 19:03:56 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:03:56 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 19:03:56 --> Total execution time: 0.0738
DEBUG - 2021-08-18 19:04:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 19:04:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 19:04:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 19:04:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 19:04:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 19:04:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:04:16 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 19:04:16 --> Total execution time: 0.0736
DEBUG - 2021-08-18 19:04:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 19:04:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 19:04:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 19:04:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 19:04:36 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 19:04:36 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:04:36 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 19:04:36 --> Total execution time: 0.0702
DEBUG - 2021-08-18 19:04:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 19:04:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 19:04:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 19:04:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 19:04:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 19:04:56 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:04:56 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 19:04:56 --> Total execution time: 0.0811
DEBUG - 2021-08-18 19:05:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 19:05:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 19:05:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 19:05:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 19:05:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 19:05:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:05:16 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 19:05:16 --> Total execution time: 0.0835
DEBUG - 2021-08-18 19:05:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 19:05:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 19:05:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 19:05:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 19:05:36 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 19:05:36 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:05:36 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 19:05:36 --> Total execution time: 0.0955
DEBUG - 2021-08-18 19:05:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 19:05:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 19:05:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 19:05:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 19:05:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 19:05:56 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:05:56 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 19:05:56 --> Total execution time: 0.0938
DEBUG - 2021-08-18 19:06:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 19:06:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 19:06:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 19:06:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 19:06:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 19:06:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:06:16 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 19:06:16 --> Total execution time: 0.0862
DEBUG - 2021-08-18 19:06:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 19:06:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 19:06:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 19:06:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 19:06:36 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 19:06:36 --> 0.0016 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:06:36 --> 0.0013 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 19:06:36 --> Total execution time: 0.1476
DEBUG - 2021-08-18 19:06:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 19:06:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 19:06:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 19:06:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 19:06:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 19:06:56 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:06:56 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 19:06:56 --> Total execution time: 0.0684
DEBUG - 2021-08-18 19:07:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 19:07:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 19:07:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 19:07:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 19:07:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 19:07:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:07:16 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 19:07:16 --> Total execution time: 0.0716
DEBUG - 2021-08-18 19:07:32 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 19:07:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 19:07:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 19:07:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 19:07:32 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 19:07:32 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:07:32 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 19:07:32 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 19:07:32 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:07:32 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:07:32 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 19:07:32 --> Total execution time: 0.0895
DEBUG - 2021-08-18 19:07:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 19:07:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 19:07:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 19:07:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 19:07:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 19:07:45 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
DEBUG - 2021-08-18 19:07:45 --> Total execution time: 0.1290
DEBUG - 2021-08-18 19:07:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 19:07:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 19:07:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 19:07:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 19:07:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 19:07:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:07:46 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-18 19:07:46 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-18 19:07:46 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:07:46 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:07:46 --> 0.0002 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-18 19:07:46 --> Total execution time: 0.0777
DEBUG - 2021-08-18 19:08:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 19:08:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 19:08:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 19:08:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 19:08:07 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 19:08:07 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:08:07 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 19:08:07 --> Total execution time: 0.0727
DEBUG - 2021-08-18 19:08:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 19:08:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 19:08:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 19:08:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 19:08:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 19:08:27 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:08:27 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 19:08:27 --> Total execution time: 0.0871
DEBUG - 2021-08-18 19:08:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 19:08:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 19:08:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 19:08:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 19:08:47 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 19:08:47 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:08:47 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 19:08:47 --> Total execution time: 0.0783
DEBUG - 2021-08-18 19:09:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 19:09:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 19:09:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 19:09:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 19:09:07 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 19:09:07 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:09:07 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 19:09:07 --> Total execution time: 0.0734
DEBUG - 2021-08-18 19:09:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 19:09:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 19:09:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 19:09:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 19:09:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 19:09:27 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:09:27 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 19:09:27 --> Total execution time: 0.0790
DEBUG - 2021-08-18 19:09:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 19:09:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 19:09:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 19:09:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 19:09:47 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 19:09:47 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:09:47 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 19:09:47 --> Total execution time: 0.1844
DEBUG - 2021-08-18 19:10:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 19:10:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 19:10:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 19:10:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 19:10:07 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 19:10:07 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:10:07 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 19:10:07 --> Total execution time: 0.0774
DEBUG - 2021-08-18 19:10:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 19:10:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 19:10:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 19:10:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 19:10:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 19:10:27 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:10:27 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 19:10:27 --> Total execution time: 0.0841
DEBUG - 2021-08-18 19:10:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 19:10:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 19:10:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 19:10:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 19:10:47 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 19:10:47 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:10:47 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 19:10:47 --> Total execution time: 0.0840
DEBUG - 2021-08-18 19:11:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 19:11:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 19:11:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 19:11:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 19:11:07 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 19:11:07 --> 0.0023 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:11:07 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 19:11:07 --> Total execution time: 0.1069
DEBUG - 2021-08-18 19:11:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 19:11:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 19:11:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 19:11:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 19:11:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 19:11:27 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:11:27 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 19:11:27 --> Total execution time: 0.0749
DEBUG - 2021-08-18 19:11:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 19:11:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 19:11:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 19:11:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 19:11:47 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 19:11:47 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:11:47 --> 0.0005 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 19:11:47 --> Total execution time: 0.0762
DEBUG - 2021-08-18 19:12:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 19:12:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 19:12:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 19:12:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 19:12:07 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 19:12:07 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:12:07 --> 0.0005 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 19:12:07 --> Total execution time: 0.0864
DEBUG - 2021-08-18 19:12:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 19:12:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 19:12:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 19:12:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 19:12:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 19:12:27 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:12:27 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 19:12:27 --> Total execution time: 0.0721
DEBUG - 2021-08-18 19:12:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 19:12:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 19:12:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 19:12:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 19:12:47 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 19:12:47 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:12:47 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 19:12:47 --> Total execution time: 0.0811
DEBUG - 2021-08-18 19:13:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 19:13:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 19:13:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 19:13:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 19:13:07 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 19:13:07 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:13:07 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 19:13:07 --> Total execution time: 0.0845
DEBUG - 2021-08-18 19:13:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 19:13:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 19:13:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 19:13:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 19:13:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 19:13:27 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:13:27 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 19:13:27 --> Total execution time: 0.0869
DEBUG - 2021-08-18 19:13:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 19:13:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 19:13:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 19:13:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 19:13:47 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 19:13:47 --> 0.001 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:13:47 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 19:13:47 --> Total execution time: 0.0852
DEBUG - 2021-08-18 19:14:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 19:14:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 19:14:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 19:14:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 19:14:07 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 19:14:07 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:14:07 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 19:14:07 --> Total execution time: 0.0706
DEBUG - 2021-08-18 19:14:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 19:14:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 19:14:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 19:14:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 19:14:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 19:14:27 --> 0.0009 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:14:27 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 19:14:27 --> Total execution time: 0.0797
DEBUG - 2021-08-18 19:14:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 19:14:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 19:14:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 19:14:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 19:14:47 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 19:14:47 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:14:47 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 19:14:47 --> Total execution time: 0.0760
DEBUG - 2021-08-18 19:15:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 19:15:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 19:15:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 19:15:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 19:15:07 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 19:15:07 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:15:07 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 19:15:07 --> Total execution time: 0.0735
DEBUG - 2021-08-18 19:15:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 19:15:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 19:15:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 19:15:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 19:15:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 19:15:27 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:15:27 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 19:15:27 --> Total execution time: 0.0745
DEBUG - 2021-08-18 19:15:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 19:15:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 19:15:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 19:15:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 19:15:47 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 19:15:47 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:15:47 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 19:15:47 --> Total execution time: 0.0693
DEBUG - 2021-08-18 19:16:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-18 19:16:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-18 19:16:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-18 19:16:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-18 19:16:07 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-18 19:16:07 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-18 19:16:07 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-18 19:16:07 --> Total execution time: 0.0707
