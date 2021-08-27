<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2021-08-12 09:54:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 09:54:13 --> No URI present. Default controller set.
DEBUG - 2021-08-12 09:54:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 09:54:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 09:54:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 09:54:13 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 09:54:13 --> Form_validation class already loaded. Second attempt ignored.
QUERY - 2021-08-12 09:54:13 --> 0.0761 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-12 09:54:13 --> Total execution time: 0.2613
DEBUG - 2021-08-12 09:54:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 09:54:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 09:54:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 09:54:35 --> No URI present. Default controller set.
DEBUG - 2021-08-12 09:54:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 09:54:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 09:54:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 09:54:35 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 09:54:35 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 09:54:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 09:54:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 09:54:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 09:54:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 09:54:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 09:54:43 --> 3.466 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-12 09:54:43 --> 1.1875 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-12 09:54:43 --> 2.9222 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-12 09:54:43 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 09:54:43 --> 0.037 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 09:54:43 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 09:54:43 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 09:54:43 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-12 09:54:43 --> Total execution time: 7.6999
DEBUG - 2021-08-12 09:54:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 09:54:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 09:54:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 09:54:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 09:54:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 09:54:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 09:54:44 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 09:54:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 09:54:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 09:54:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 09:54:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 09:54:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 09:54:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-12 09:54:47 --> 2.9054 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-12 09:54:47 --> Total execution time: 3.0085
DEBUG - 2021-08-12 09:54:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 09:54:47 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 09:54:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 09:54:47 --> Global POST, GET and COOKIE data sanitized
QUERY - 2021-08-12 09:55:17 --> 30.3483 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
DEBUG - 2021-08-12 09:55:17 --> Total execution time: 33.2434
DEBUG - 2021-08-12 09:55:17 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 09:55:17 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 09:55:17 --> 0.265 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `campaign_name` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-12 09:55:17 --> Total execution time: 33.5099
DEBUG - 2021-08-12 09:56:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 09:56:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 09:56:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 09:56:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 09:56:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 09:56:43 --> 0.0185 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 09:56:43 --> 3.4456 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-12 09:56:43 --> 0.0818 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-12 09:56:43 --> 3.6523 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-12 09:56:43 --> 2.9007 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-12 09:56:43 --> 2.5323 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-12 09:56:43 --> 0.0591 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-12 09:56:43 --> 2.6308 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-12 09:56:43 --> 0.0563 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 09:56:43 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 09:56:43 --> 0.0128 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 09:56:43 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 09:56:43 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-12 09:56:43 --> Total execution time: 15.4647
DEBUG - 2021-08-12 09:56:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 09:56:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 09:56:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 09:56:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 09:56:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 09:56:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 09:56:58 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 09:56:58 --> Total execution time: 0.0693
DEBUG - 2021-08-12 09:57:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 09:57:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 09:57:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 09:57:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 09:57:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 09:57:14 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 09:57:14 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 09:57:14 --> Total execution time: 0.0694
DEBUG - 2021-08-12 09:57:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 09:57:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 09:57:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 09:57:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 09:57:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 09:57:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 09:57:29 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 09:57:29 --> Total execution time: 0.0656
DEBUG - 2021-08-12 09:57:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 09:57:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 09:57:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 09:57:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 09:57:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 09:57:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 09:57:44 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 09:57:44 --> Total execution time: 0.0842
DEBUG - 2021-08-12 09:57:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 09:57:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 09:57:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 09:57:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 09:57:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 09:57:59 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 09:57:59 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 09:57:59 --> Total execution time: 0.0824
DEBUG - 2021-08-12 09:58:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 09:58:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 09:58:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 09:58:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 09:58:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 09:58:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 09:58:14 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 09:58:14 --> Total execution time: 0.0796
DEBUG - 2021-08-12 09:58:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 09:58:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 09:58:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 09:58:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 09:58:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 09:58:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 09:58:29 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 09:58:29 --> Total execution time: 0.0815
DEBUG - 2021-08-12 09:58:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 09:58:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 09:58:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 09:58:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 09:58:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 09:58:44 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 09:58:44 --> 0.0012 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 09:58:44 --> Total execution time: 0.1427
DEBUG - 2021-08-12 09:58:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 09:58:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 09:58:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 09:58:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 09:58:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 09:58:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 09:58:59 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 09:58:59 --> Total execution time: 0.0834
DEBUG - 2021-08-12 09:59:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 09:59:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 09:59:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 09:59:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 09:59:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 09:59:14 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 09:59:14 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 09:59:14 --> Total execution time: 0.0790
DEBUG - 2021-08-12 09:59:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 09:59:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 09:59:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 09:59:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 09:59:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 09:59:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 09:59:29 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 09:59:29 --> Total execution time: 0.0785
DEBUG - 2021-08-12 09:59:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 09:59:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 09:59:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 09:59:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 09:59:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 09:59:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 09:59:44 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 09:59:44 --> Total execution time: 0.0786
DEBUG - 2021-08-12 09:59:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 09:59:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 09:59:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 09:59:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 09:59:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 09:59:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 09:59:59 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 09:59:59 --> Total execution time: 0.0730
DEBUG - 2021-08-12 10:00:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:00:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:00:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:00:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:00:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:00:14 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:00:14 --> 0.0008 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:00:14 --> Total execution time: 0.0835
DEBUG - 2021-08-12 10:00:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:00:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:00:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:00:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:00:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:00:29 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:00:29 --> 0.0007 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:00:29 --> Total execution time: 0.0839
DEBUG - 2021-08-12 10:00:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:00:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:00:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:00:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:00:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:00:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:00:44 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:00:44 --> Total execution time: 0.0828
DEBUG - 2021-08-12 10:00:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:00:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:00:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:00:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:00:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:00:59 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:00:59 --> 0.0007 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:00:59 --> Total execution time: 0.0920
DEBUG - 2021-08-12 10:01:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:01:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:01:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:01:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:01:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:01:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:01:14 --> 0.0007 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:01:14 --> Total execution time: 0.0960
DEBUG - 2021-08-12 10:01:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:01:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:01:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:01:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:01:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:01:29 --> 0.001 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:01:29 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:01:29 --> Total execution time: 0.1153
DEBUG - 2021-08-12 10:01:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:01:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:01:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:01:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:01:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:01:45 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:01:45 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:01:45 --> Total execution time: 1.6470
DEBUG - 2021-08-12 10:01:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:01:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:01:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:01:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:01:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:01:59 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:01:59 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:01:59 --> Total execution time: 0.4940
DEBUG - 2021-08-12 10:02:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:02:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:02:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:02:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:02:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:02:26 --> 0.0014 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:02:26 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:02:26 --> Total execution time: 10.1139
DEBUG - 2021-08-12 10:02:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:02:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:02:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:02:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:02:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:02:29 --> 0.0013 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:02:29 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:02:29 --> Total execution time: 0.0746
DEBUG - 2021-08-12 10:02:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:02:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:02:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:02:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:02:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:02:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:02:44 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:02:44 --> Total execution time: 0.0673
DEBUG - 2021-08-12 10:02:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:02:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:02:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:02:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:02:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:02:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:02:59 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:02:59 --> Total execution time: 0.0894
DEBUG - 2021-08-12 10:03:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:03:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:03:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:03:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:03:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:03:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:03:14 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:03:14 --> Total execution time: 0.0728
DEBUG - 2021-08-12 10:03:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:03:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:03:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:03:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:03:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:03:29 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:03:29 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:03:29 --> Total execution time: 0.0916
DEBUG - 2021-08-12 10:03:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:03:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:03:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:03:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:03:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:03:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:03:44 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:03:44 --> Total execution time: 0.0744
DEBUG - 2021-08-12 10:03:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:03:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:03:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:03:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:03:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:03:59 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:03:59 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:03:59 --> Total execution time: 0.0635
DEBUG - 2021-08-12 10:04:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:04:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:04:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:04:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:04:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:04:14 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:04:14 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:04:14 --> Total execution time: 0.1032
DEBUG - 2021-08-12 10:04:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:04:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:04:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:04:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:04:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:04:29 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:04:29 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:04:29 --> Total execution time: 0.0748
DEBUG - 2021-08-12 10:04:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:04:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:04:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:04:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:04:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:04:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:04:44 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:04:44 --> Total execution time: 0.0841
DEBUG - 2021-08-12 10:04:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:04:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:04:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:04:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:04:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:04:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:04:59 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:04:59 --> Total execution time: 0.0904
DEBUG - 2021-08-12 10:05:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:05:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:05:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:05:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:05:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:05:14 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:05:14 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:05:14 --> Total execution time: 0.0848
DEBUG - 2021-08-12 10:05:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:05:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:05:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:05:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:05:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:05:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:05:29 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:05:29 --> Total execution time: 0.0676
DEBUG - 2021-08-12 10:05:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:05:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:05:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:05:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:05:33 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:05:33 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:05:33 --> 0.0961 | INSERT INTO `csvexportlog` (`export_status`, `filter_col`, `created_datetime`) VALUES (0, 'null', '2021-08-12 10:05:33')
DEBUG - 2021-08-12 10:05:33 --> Total execution time: 0.1721
DEBUG - 2021-08-12 10:05:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:05:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:05:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:05:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:05:33 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 10:05:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:05:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:05:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:05:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:05:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:05:44 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:05:44 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:05:44 --> Total execution time: 0.0872
QUERY - 2021-08-12 10:05:47 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:05:47 --> 3.1017 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-12 10:05:47 --> 0.0469 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-12 10:05:47 --> 2.6636 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-12 10:05:47 --> 2.5098 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-12 10:05:47 --> 2.779 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-12 10:05:47 --> 0.0476 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-12 10:05:47 --> 2.3964 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-12 10:05:47 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 10:05:47 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 10:05:47 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:05:47 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:05:47 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-12 10:05:47 --> Total execution time: 13.6563
DEBUG - 2021-08-12 10:05:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:05:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:05:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:05:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:05:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:05:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:05:55 --> 0.0885 | INSERT INTO `csvexportlog` (`export_status`, `filter_col`, `created_datetime`) VALUES (0, 'null', '2021-08-12 10:05:55')
DEBUG - 2021-08-12 10:05:55 --> Total execution time: 0.1745
DEBUG - 2021-08-12 10:05:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:05:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:05:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:05:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:05:55 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 10:06:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:06:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:06:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-12 10:06:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:06:09 --> 3.1 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-12 10:06:09 --> 0.048 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-12 10:06:09 --> 3.1516 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-12 10:06:09 --> 2.355 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-12 10:06:09 --> 2.5385 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-12 10:06:09 --> 0.0658 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-12 10:06:09 --> 2.8511 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-12 10:06:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 10:06:09 --> 0.001 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 10:06:09 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:06:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:06:09 --> 0.0006 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-12 10:06:09 --> Total execution time: 14.1945
DEBUG - 2021-08-12 10:06:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:06:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:06:09 --> 0.0024 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:06:09 --> 0.0032 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:06:09 --> Total execution time: 6.7865
DEBUG - 2021-08-12 10:06:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:06:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:06:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:06:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:06:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:06:25 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:06:25 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:06:25 --> Total execution time: 0.0885
DEBUG - 2021-08-12 10:06:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:06:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:06:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:06:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:06:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:06:41 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:06:41 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:06:41 --> Total execution time: 0.7803
DEBUG - 2021-08-12 10:06:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:06:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:06:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:06:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:06:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:06:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:06:55 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:06:55 --> Total execution time: 0.1553
DEBUG - 2021-08-12 10:07:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:07:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:07:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:07:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:07:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:07:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:07:10 --> 0.0007 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:07:10 --> Total execution time: 0.1087
DEBUG - 2021-08-12 10:07:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:07:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:07:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:07:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:07:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:07:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:07:25 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:07:25 --> Total execution time: 0.1089
DEBUG - 2021-08-12 10:07:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:07:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:07:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:07:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:07:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:07:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:07:40 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:07:40 --> Total execution time: 0.0893
DEBUG - 2021-08-12 10:07:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:07:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:07:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:07:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:07:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:07:55 --> 0.009 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:07:55 --> 0.0009 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:07:55 --> Total execution time: 0.2003
DEBUG - 2021-08-12 10:08:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:08:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:08:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:08:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:08:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:08:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:08:10 --> 0.0006 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:08:10 --> Total execution time: 0.0853
DEBUG - 2021-08-12 10:08:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:08:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:08:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:08:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:08:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:08:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:08:25 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:08:25 --> Total execution time: 0.0756
DEBUG - 2021-08-12 10:08:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:08:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:08:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:08:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:08:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:08:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:08:40 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:08:40 --> Total execution time: 0.0809
DEBUG - 2021-08-12 10:08:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:08:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:08:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:08:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:08:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:08:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:08:55 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:08:55 --> Total execution time: 0.0708
DEBUG - 2021-08-12 10:09:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:09:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:09:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:09:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:09:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:09:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:09:10 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:09:10 --> Total execution time: 0.0722
DEBUG - 2021-08-12 10:09:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:09:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:09:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:09:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:09:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:09:25 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:09:25 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:09:25 --> Total execution time: 0.0999
DEBUG - 2021-08-12 10:09:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:09:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:09:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:09:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:09:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:09:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:09:40 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:09:40 --> Total execution time: 0.0749
DEBUG - 2021-08-12 10:09:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:09:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:09:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:09:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:09:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:09:55 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:09:55 --> 0.0012 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:09:55 --> Total execution time: 0.1069
DEBUG - 2021-08-12 10:10:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:10:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:10:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:10:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:10:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:10:10 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:10:10 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:10:10 --> Total execution time: 0.0998
DEBUG - 2021-08-12 10:10:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:10:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:10:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:10:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:10:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:10:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:10:25 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:10:25 --> Total execution time: 0.0665
DEBUG - 2021-08-12 10:10:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:10:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:10:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:10:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:10:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:10:40 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:10:40 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:10:40 --> Total execution time: 0.0718
DEBUG - 2021-08-12 10:10:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:10:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:10:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:10:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:10:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:10:55 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:10:55 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:10:55 --> Total execution time: 0.0940
DEBUG - 2021-08-12 10:11:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:11:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:11:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:11:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:11:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:11:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:11:10 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:11:10 --> Total execution time: 0.0842
DEBUG - 2021-08-12 10:11:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:11:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:11:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:11:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:11:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:11:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:11:25 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:11:25 --> Total execution time: 0.0671
DEBUG - 2021-08-12 10:11:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:11:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:11:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:11:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:11:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:11:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:11:40 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:11:40 --> Total execution time: 0.0964
DEBUG - 2021-08-12 10:11:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:11:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:11:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:11:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:11:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:11:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:11:55 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:11:55 --> Total execution time: 0.0858
DEBUG - 2021-08-12 10:12:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:12:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:12:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:12:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:12:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:12:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:12:10 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:12:10 --> Total execution time: 0.0993
DEBUG - 2021-08-12 10:12:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:12:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:12:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:12:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:12:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:12:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:12:25 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:12:25 --> Total execution time: 0.1217
DEBUG - 2021-08-12 10:12:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:12:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:12:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:12:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:12:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:12:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:12:40 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:12:40 --> Total execution time: 0.0795
DEBUG - 2021-08-12 10:12:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:12:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:12:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:12:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:12:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:12:55 --> 0.0009 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:12:55 --> 0.0006 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:12:55 --> Total execution time: 0.0709
DEBUG - 2021-08-12 10:13:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:13:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:13:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:13:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:13:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:13:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:13:10 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:13:10 --> Total execution time: 0.0722
DEBUG - 2021-08-12 10:13:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:13:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:13:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:13:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:13:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:13:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:13:25 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:13:25 --> Total execution time: 0.0757
DEBUG - 2021-08-12 10:13:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:13:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:13:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:13:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:13:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:13:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:13:40 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:13:40 --> Total execution time: 0.0704
DEBUG - 2021-08-12 10:13:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:13:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:13:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:13:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:13:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:13:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:13:55 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:13:55 --> Total execution time: 0.0803
DEBUG - 2021-08-12 10:14:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:14:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:14:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:14:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:14:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:14:10 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:14:10 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:14:10 --> Total execution time: 0.0665
DEBUG - 2021-08-12 10:14:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:14:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:14:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:14:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:14:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:14:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:14:25 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:14:25 --> Total execution time: 0.0731
DEBUG - 2021-08-12 10:14:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:14:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:14:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:14:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:14:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:14:40 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:14:40 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:14:40 --> Total execution time: 0.0737
DEBUG - 2021-08-12 10:14:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:14:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:14:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:14:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:14:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:14:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:14:55 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:14:55 --> Total execution time: 0.0865
DEBUG - 2021-08-12 10:15:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:15:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:15:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:15:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:15:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:15:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:15:10 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:15:10 --> Total execution time: 0.0771
DEBUG - 2021-08-12 10:15:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:15:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:15:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:15:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:15:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:15:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:15:25 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:15:25 --> Total execution time: 0.0575
DEBUG - 2021-08-12 10:15:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:15:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:15:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:15:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:15:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:15:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:15:40 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:15:40 --> Total execution time: 0.1077
DEBUG - 2021-08-12 10:15:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:15:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:15:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:15:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:15:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:15:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:15:55 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:15:55 --> Total execution time: 0.0773
DEBUG - 2021-08-12 10:16:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:16:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:16:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:16:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:16:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:16:10 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:16:10 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:16:10 --> Total execution time: 0.0810
DEBUG - 2021-08-12 10:16:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:16:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:16:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:16:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:16:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:16:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:16:25 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:16:25 --> Total execution time: 0.0776
DEBUG - 2021-08-12 10:16:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:16:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:16:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:16:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:16:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:16:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:16:40 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:16:40 --> Total execution time: 0.0868
DEBUG - 2021-08-12 10:16:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:16:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:16:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:16:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:16:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:16:55 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:16:55 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:16:55 --> Total execution time: 0.1283
DEBUG - 2021-08-12 10:17:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:17:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:17:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:17:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:17:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:17:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:17:10 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:17:10 --> Total execution time: 0.0815
DEBUG - 2021-08-12 10:17:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:17:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:17:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:17:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:17:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:17:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:17:25 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:17:25 --> Total execution time: 0.1820
DEBUG - 2021-08-12 10:18:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:18:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:18:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:18:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:18:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:18:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:18:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:18:09 --> Total execution time: 0.0940
DEBUG - 2021-08-12 10:19:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:19:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:19:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:19:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:19:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:19:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:19:10 --> 0.4481 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:19:10 --> Total execution time: 0.7977
DEBUG - 2021-08-12 10:20:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:20:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:20:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:20:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:20:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:20:09 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:20:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:20:09 --> Total execution time: 0.0822
DEBUG - 2021-08-12 10:21:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:21:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:21:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:21:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:21:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:21:09 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:21:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:21:09 --> Total execution time: 0.0625
DEBUG - 2021-08-12 10:22:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:22:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:22:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:22:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:22:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:22:09 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:22:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:22:09 --> Total execution time: 0.0733
DEBUG - 2021-08-12 10:23:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:23:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:23:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:23:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:23:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:23:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:23:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:23:09 --> Total execution time: 0.0656
DEBUG - 2021-08-12 10:23:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:23:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:23:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:23:19 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:23:19 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:23:19 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:23:19 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:23:19 --> Total execution time: 0.1070
DEBUG - 2021-08-12 10:23:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:23:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:23:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:23:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:23:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:23:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:23:25 --> 0.0006 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:23:25 --> Total execution time: 0.0639
DEBUG - 2021-08-12 10:23:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:23:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:23:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:23:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:23:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:23:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:23:40 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:23:40 --> Total execution time: 0.0972
DEBUG - 2021-08-12 10:23:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:23:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:23:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:23:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:23:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:23:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:23:55 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:23:55 --> Total execution time: 0.0771
DEBUG - 2021-08-12 10:24:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:24:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:24:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:24:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:24:03 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:24:04 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:24:04 --> 0.0747 | INSERT INTO `csvexportlog` (`export_status`, `filter_col`, `created_datetime`) VALUES (0, 'null', '2021-08-12 10:24:03')
DEBUG - 2021-08-12 10:24:04 --> Total execution time: 0.1548
DEBUG - 2021-08-12 10:24:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:24:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:24:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:24:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:24:04 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 10:24:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:24:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:24:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:24:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:24:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:24:10 --> 0.0629 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:24:10 --> 0.0293 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:24:10 --> Total execution time: 0.1674
QUERY - 2021-08-12 10:24:25 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:24:25 --> 3.0724 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-12 10:24:25 --> 0.0523 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-12 10:24:25 --> 4.4917 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-12 10:24:25 --> 2.5372 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-12 10:24:25 --> 7.8326 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-12 10:24:25 --> 0.2265 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-12 10:24:25 --> 2.943 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-12 10:24:25 --> 0.0135 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 10:24:25 --> 0.0134 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 10:24:25 --> 0.0084 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:24:25 --> 0.0008 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:24:25 --> 0.0008 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-12 10:24:25 --> Total execution time: 21.2701
DEBUG - 2021-08-12 10:26:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:26:02 --> No URI present. Default controller set.
DEBUG - 2021-08-12 10:26:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:26:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:26:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:26:02 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 10:26:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:26:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:26:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:26:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:26:02 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:26:13 --> 3.6101 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-12 10:26:13 --> 1.4752 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-12 10:26:13 --> 5.3212 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-12 10:26:13 --> 0.0087 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 10:26:13 --> 0.0097 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:26:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:26:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:26:13 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-12 10:26:13 --> Total execution time: 10.5136
DEBUG - 2021-08-12 10:26:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:26:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:26:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:26:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:26:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:26:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:26:14 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 10:26:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:26:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:26:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:26:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:26:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:26:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:26:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:26:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:26:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:26:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:26:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-12 10:26:17 --> 3.1909 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-12 10:26:17 --> Total execution time: 3.2761
DEBUG - 2021-08-12 10:26:17 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:26:17 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:26:51 --> 33.8532 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
DEBUG - 2021-08-12 10:26:51 --> Total execution time: 37.0692
DEBUG - 2021-08-12 10:26:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:26:51 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:26:51 --> 0.0977 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `campaign_name` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-12 10:26:51 --> Total execution time: 37.1520
DEBUG - 2021-08-12 10:26:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:26:51 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:27:14 --> 0.0225 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:27:14 --> 5.7592 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-12 10:27:14 --> 0.0672 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-12 10:27:14 --> 5.2301 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-12 10:27:14 --> 3.4366 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-12 10:27:14 --> 3.53 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-12 10:27:14 --> 0.0586 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-12 10:27:14 --> 4.988 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-12 10:27:14 --> 0.0126 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 10:27:14 --> 0.0113 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 10:27:14 --> 0.009 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:27:14 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:27:14 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-12 10:27:14 --> Total execution time: 57.7203
DEBUG - 2021-08-12 10:27:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:27:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:27:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:27:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:27:30 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:27:30 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:27:30 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:27:30 --> Total execution time: 0.3470
DEBUG - 2021-08-12 10:27:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:27:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:27:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:27:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:27:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:27:45 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:27:45 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:27:45 --> Total execution time: 0.2034
DEBUG - 2021-08-12 10:28:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:28:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:28:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:28:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:28:04 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:28:05 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:28:05 --> 0.0006 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:28:05 --> Total execution time: 4.1406
DEBUG - 2021-08-12 10:28:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:28:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:28:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:28:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:28:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:28:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:28:15 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:28:15 --> Total execution time: 0.0673
DEBUG - 2021-08-12 10:28:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:28:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:28:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:28:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:28:30 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:28:30 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:28:30 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:28:30 --> Total execution time: 0.0800
DEBUG - 2021-08-12 10:28:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:28:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:28:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:28:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:28:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:28:45 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:28:45 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:28:45 --> Total execution time: 0.0770
DEBUG - 2021-08-12 10:29:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:29:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:29:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:29:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:29:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:29:00 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:29:00 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:29:00 --> Total execution time: 0.0801
DEBUG - 2021-08-12 10:29:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:29:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:29:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:29:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:29:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:29:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:29:15 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:29:15 --> Total execution time: 0.0715
DEBUG - 2021-08-12 10:29:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:29:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:29:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:29:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:29:30 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:29:30 --> 0.001 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:29:30 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:29:30 --> Total execution time: 0.0839
DEBUG - 2021-08-12 10:29:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:29:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:29:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:29:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:29:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:29:45 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:29:45 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:29:45 --> Total execution time: 0.0750
DEBUG - 2021-08-12 10:30:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:30:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:30:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:30:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:30:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:30:00 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:30:00 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:30:00 --> Total execution time: 0.0719
DEBUG - 2021-08-12 10:30:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:30:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:30:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:30:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:30:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:30:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:30:15 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:30:15 --> Total execution time: 0.0859
DEBUG - 2021-08-12 10:30:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:30:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:30:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:30:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:30:30 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:30:30 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:30:30 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:30:30 --> Total execution time: 0.0916
DEBUG - 2021-08-12 10:30:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:30:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:30:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:30:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:30:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:30:45 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:30:45 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:30:45 --> Total execution time: 0.0747
DEBUG - 2021-08-12 10:31:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:31:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:31:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:31:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:31:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:31:00 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:31:00 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:31:00 --> Total execution time: 0.0838
DEBUG - 2021-08-12 10:31:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:31:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:31:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:31:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:31:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:31:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:31:15 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:31:15 --> Total execution time: 0.0934
DEBUG - 2021-08-12 10:31:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:31:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:31:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:31:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:31:30 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:31:30 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:31:30 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:31:30 --> Total execution time: 0.0737
DEBUG - 2021-08-12 10:31:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:31:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:31:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:31:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:31:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:31:45 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:31:45 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:31:45 --> Total execution time: 0.0755
DEBUG - 2021-08-12 10:32:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:32:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:32:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:32:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:32:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:32:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:32:00 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:32:00 --> Total execution time: 0.0828
DEBUG - 2021-08-12 10:32:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:32:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:32:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:32:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:32:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:32:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:32:15 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:32:15 --> Total execution time: 0.0751
DEBUG - 2021-08-12 10:32:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:32:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:32:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:32:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:32:30 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:32:30 --> 0.0029 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:32:30 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:32:30 --> Total execution time: 0.0889
DEBUG - 2021-08-12 10:32:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:32:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:32:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:32:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:32:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:32:45 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:32:45 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:32:45 --> Total execution time: 0.0696
DEBUG - 2021-08-12 10:33:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:33:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:33:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:33:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:33:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:33:00 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:33:00 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:33:00 --> Total execution time: 0.0714
DEBUG - 2021-08-12 10:33:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:33:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:33:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:33:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:33:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:33:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:33:15 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:33:15 --> Total execution time: 0.0786
DEBUG - 2021-08-12 10:33:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:33:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:33:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:33:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:33:30 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:33:30 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:33:30 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:33:30 --> Total execution time: 0.0745
DEBUG - 2021-08-12 10:33:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:33:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:33:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:33:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:33:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:33:45 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:33:45 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:33:45 --> Total execution time: 0.0795
DEBUG - 2021-08-12 10:34:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:34:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:34:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:34:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:34:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:34:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:34:00 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:34:00 --> Total execution time: 0.0909
DEBUG - 2021-08-12 10:35:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:35:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:35:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:35:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:35:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:35:09 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:35:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:35:09 --> Total execution time: 0.0784
DEBUG - 2021-08-12 10:36:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:36:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:36:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:36:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:36:04 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:36:05 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:36:05 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:36:05 --> Total execution time: 0.0904
DEBUG - 2021-08-12 10:36:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:36:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:36:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:36:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:36:07 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:36:07 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:36:07 --> 0.3551 | INSERT INTO `csvexportlog` (`export_status`, `filter_col`, `created_datetime`) VALUES (0, 'null', '2021-08-12 10:36:07')
DEBUG - 2021-08-12 10:36:07 --> Total execution time: 0.4314
DEBUG - 2021-08-12 10:36:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:36:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:36:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:36:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:36:08 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 10:36:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:36:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:36:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:36:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:36:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:36:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:36:14 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:36:14 --> Total execution time: 0.0837
QUERY - 2021-08-12 10:36:22 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:36:22 --> 3.508 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-12 10:36:22 --> 0.0591 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-12 10:36:22 --> 2.9066 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-12 10:36:22 --> 2.5678 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-12 10:36:22 --> 2.6775 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-12 10:36:22 --> 0.048 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-12 10:36:22 --> 2.8518 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-12 10:36:22 --> 0.0016 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 10:36:22 --> 0.0144 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 10:36:22 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:36:22 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:36:22 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-12 10:36:22 --> Total execution time: 14.7163
DEBUG - 2021-08-12 10:36:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:36:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:36:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:36:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:36:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:36:39 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:36:39 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:36:39 --> Total execution time: 0.0751
DEBUG - 2021-08-12 10:36:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:36:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:36:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:36:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:36:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:36:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:36:54 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:36:54 --> Total execution time: 0.0755
DEBUG - 2021-08-12 10:37:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:37:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:37:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:37:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:37:08 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 10:37:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:37:08 --> Global POST, GET and COOKIE data sanitized
QUERY - 2021-08-12 10:37:08 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:37:08 --> 0.1185 | INSERT INTO `csvexportlog` (`export_status`, `filter_col`, `created_datetime`) VALUES (0, 'null', '2021-08-12 10:37:08')
DEBUG - 2021-08-12 10:37:08 --> Total execution time: 0.1961
DEBUG - 2021-08-12 10:37:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:37:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:37:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:37:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:37:08 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 10:37:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-12 10:37:08 --> 0.0011 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:37:08 --> 0.1174 | INSERT INTO `csvexportlog` (`export_status`, `filter_col`, `created_datetime`) VALUES (0, 'null', '2021-08-12 10:37:08')
DEBUG - 2021-08-12 10:37:08 --> Total execution time: 0.2126
DEBUG - 2021-08-12 10:37:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:37:08 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 10:37:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:37:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:37:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:37:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:37:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:37:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:37:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:37:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:37:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-12 10:37:24 --> 0.0014 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:37:24 --> 3.2407 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-12 10:37:24 --> 0.0487 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-12 10:37:24 --> 3.2412 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-12 10:37:24 --> 2.3437 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-12 10:37:24 --> 3.0552 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-12 10:37:24 --> 0.0486 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-12 10:37:24 --> 3.6782 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-12 10:37:24 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 10:37:24 --> 0.0128 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 10:37:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:37:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:37:24 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-12 10:37:24 --> Total execution time: 15.8685
DEBUG - 2021-08-12 10:37:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:37:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:37:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:37:24 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:37:24 --> Total execution time: 15.7170
DEBUG - 2021-08-12 10:37:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:37:24 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 10:37:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:37:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:37:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-12 10:37:43 --> 0.0008 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:37:43 --> 3.2206 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-12 10:37:43 --> 0.0485 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-12 10:37:43 --> 3.132 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-12 10:37:43 --> 4.3903 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-12 10:37:43 --> 3.6292 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-12 10:37:43 --> 0.0595 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-12 10:37:43 --> 4.1772 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-12 10:37:43 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 10:37:43 --> 0.0123 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 10:37:43 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:37:43 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:37:43 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-12 10:37:43 --> Total execution time: 34.3941
DEBUG - 2021-08-12 10:37:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:37:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:37:43 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:37:43 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:37:43 --> Total execution time: 19.4281
DEBUG - 2021-08-12 10:37:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:37:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:37:43 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:37:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:37:43 --> Total execution time: 3.8830
DEBUG - 2021-08-12 10:37:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:37:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:37:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:37:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:37:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:37:59 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:37:59 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:37:59 --> Total execution time: 0.2105
DEBUG - 2021-08-12 10:38:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:38:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:38:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:38:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:38:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:38:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:38:13 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:38:13 --> Total execution time: 0.0791
DEBUG - 2021-08-12 10:38:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:38:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:38:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:38:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:38:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:38:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:38:29 --> 0.0006 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:38:29 --> Total execution time: 0.1633
DEBUG - 2021-08-12 10:38:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:38:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:38:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:38:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:38:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:38:44 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:38:44 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:38:44 --> Total execution time: 0.2311
DEBUG - 2021-08-12 10:38:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:38:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:38:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:38:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:38:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:38:59 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:38:59 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:38:59 --> Total execution time: 0.1000
DEBUG - 2021-08-12 10:39:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:39:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:39:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:39:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:39:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:39:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:39:14 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:39:14 --> Total execution time: 0.0878
DEBUG - 2021-08-12 10:39:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:39:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:39:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:39:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:39:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:39:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:39:29 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:39:29 --> Total execution time: 0.1028
DEBUG - 2021-08-12 10:39:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:39:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:39:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:39:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:39:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:39:44 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:39:44 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:39:44 --> Total execution time: 0.0714
DEBUG - 2021-08-12 10:39:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:39:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:39:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:39:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:39:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:39:59 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:39:59 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:39:59 --> Total execution time: 0.0798
DEBUG - 2021-08-12 10:40:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:40:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:40:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:40:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:40:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:40:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:40:14 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:40:14 --> Total execution time: 0.0821
DEBUG - 2021-08-12 10:40:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:40:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:40:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:40:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:40:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:40:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:40:29 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:40:29 --> Total execution time: 0.0813
DEBUG - 2021-08-12 10:40:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:40:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:40:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:40:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:40:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:40:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:40:44 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:40:44 --> Total execution time: 0.1057
DEBUG - 2021-08-12 10:40:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:40:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:40:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:40:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:40:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:40:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:40:59 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:40:59 --> Total execution time: 0.0841
DEBUG - 2021-08-12 10:41:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:41:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:41:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:41:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:41:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:41:14 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:41:14 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:41:14 --> Total execution time: 0.0715
DEBUG - 2021-08-12 10:41:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:41:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:41:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:41:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:41:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:41:29 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:41:29 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:41:29 --> Total execution time: 0.0716
DEBUG - 2021-08-12 10:41:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:41:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:41:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:41:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:41:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:41:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:41:44 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:41:44 --> Total execution time: 0.0914
DEBUG - 2021-08-12 10:41:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:41:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:41:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:41:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:41:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:41:59 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:41:59 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:41:59 --> Total execution time: 0.0707
DEBUG - 2021-08-12 10:42:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:42:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:42:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:42:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:42:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:42:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:42:14 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:42:14 --> Total execution time: 0.0827
DEBUG - 2021-08-12 10:42:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:42:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:42:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:42:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:42:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:42:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:42:29 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:42:29 --> Total execution time: 0.0743
DEBUG - 2021-08-12 10:42:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:42:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:42:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:42:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:42:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:42:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:42:44 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:42:44 --> Total execution time: 0.0737
DEBUG - 2021-08-12 10:42:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:42:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:42:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:42:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:42:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:42:59 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:42:59 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:42:59 --> Total execution time: 0.0884
DEBUG - 2021-08-12 10:43:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:43:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:43:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:43:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:43:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:43:14 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:43:14 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:43:14 --> Total execution time: 0.0716
DEBUG - 2021-08-12 10:43:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:43:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:43:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:43:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:43:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:43:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:43:29 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:43:29 --> Total execution time: 0.0723
DEBUG - 2021-08-12 10:43:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:43:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:43:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:43:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:43:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:43:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:43:44 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:43:44 --> Total execution time: 0.0742
DEBUG - 2021-08-12 10:43:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:43:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:43:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:43:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:43:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:43:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:43:59 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:43:59 --> Total execution time: 0.0818
DEBUG - 2021-08-12 10:45:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:45:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:45:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:45:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:45:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:45:09 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:45:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:45:09 --> Total execution time: 0.0774
DEBUG - 2021-08-12 10:46:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:46:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:46:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:46:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:46:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:46:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:46:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:46:09 --> Total execution time: 0.0889
DEBUG - 2021-08-12 10:47:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:47:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:47:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:47:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:47:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:47:09 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:47:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:47:09 --> Total execution time: 0.0860
DEBUG - 2021-08-12 10:48:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:48:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:48:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:48:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:48:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:48:10 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:48:10 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:48:10 --> Total execution time: 0.4837
DEBUG - 2021-08-12 10:49:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:49:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:49:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:49:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:49:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:49:10 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:49:10 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:49:10 --> Total execution time: 0.9690
DEBUG - 2021-08-12 10:50:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:50:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:50:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:50:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:50:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:50:09 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:50:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:50:09 --> Total execution time: 0.0755
DEBUG - 2021-08-12 10:51:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:51:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:51:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:51:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:51:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:51:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:51:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:51:09 --> Total execution time: 0.0813
DEBUG - 2021-08-12 10:52:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:52:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:52:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:52:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:52:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:52:09 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:52:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:52:09 --> Total execution time: 0.0899
DEBUG - 2021-08-12 10:52:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:52:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:52:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:52:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:52:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:52:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:52:13 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:52:13 --> Total execution time: 0.0815
DEBUG - 2021-08-12 10:52:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:52:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:52:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:52:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:52:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:52:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:52:15 --> 0.0791 | INSERT INTO `csvexportlog` (`export_status`, `filter_col`, `created_datetime`) VALUES (0, 'null', '2021-08-12 10:52:15')
DEBUG - 2021-08-12 10:52:15 --> Total execution time: 0.1565
DEBUG - 2021-08-12 10:52:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:52:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:52:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:52:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:52:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:52:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:52:28 --> 3.0766 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-12 10:52:28 --> 0.0481 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-12 10:52:28 --> 2.6849 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-12 10:52:28 --> 2.2553 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-12 10:52:28 --> 2.5451 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-12 10:52:28 --> 0.0479 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-12 10:52:28 --> 2.5524 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-12 10:52:28 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 10:52:28 --> 0.0147 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 10:52:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:52:28 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:52:28 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-12 10:52:28 --> Total execution time: 13.3310
DEBUG - 2021-08-12 10:52:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:52:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:52:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:52:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:52:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:52:45 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:52:45 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:52:45 --> Total execution time: 0.0715
DEBUG - 2021-08-12 10:53:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:53:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:53:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:53:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:53:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:53:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:53:00 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:53:00 --> Total execution time: 0.0772
DEBUG - 2021-08-12 10:53:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:53:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:53:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:53:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:53:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:53:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:53:15 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:53:15 --> Total execution time: 0.0671
DEBUG - 2021-08-12 10:53:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:53:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:53:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:53:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:53:30 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:53:30 --> 0.0012 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:53:30 --> 0.0006 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:53:30 --> Total execution time: 0.1713
DEBUG - 2021-08-12 10:53:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:53:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:53:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:53:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:53:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:53:45 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:53:45 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:53:45 --> Total execution time: 0.0710
DEBUG - 2021-08-12 10:54:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:54:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:54:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:54:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:54:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:54:00 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:54:00 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:54:00 --> Total execution time: 0.0785
DEBUG - 2021-08-12 10:54:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:54:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:54:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:54:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:54:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:54:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:54:15 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:54:15 --> Total execution time: 0.0877
DEBUG - 2021-08-12 10:54:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:54:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:54:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:54:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:54:30 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:54:30 --> 0.0019 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:54:30 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:54:30 --> Total execution time: 0.1756
DEBUG - 2021-08-12 10:54:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:54:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:54:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:54:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:54:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:54:45 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:54:45 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:54:45 --> Total execution time: 0.2133
DEBUG - 2021-08-12 10:55:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:55:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:55:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:55:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:55:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:55:00 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:55:00 --> 0.001 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:55:00 --> Total execution time: 0.1443
DEBUG - 2021-08-12 10:55:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:55:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:55:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:55:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:55:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:55:15 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:55:15 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:55:15 --> Total execution time: 0.0832
DEBUG - 2021-08-12 10:55:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:55:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:55:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:55:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:55:30 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:55:30 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:55:30 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:55:30 --> Total execution time: 0.1493
DEBUG - 2021-08-12 10:55:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:55:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:55:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:55:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:55:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:55:45 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:55:45 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:55:45 --> Total execution time: 0.0683
DEBUG - 2021-08-12 10:56:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:56:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:56:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:56:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:56:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:56:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:56:00 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:56:00 --> Total execution time: 0.0695
DEBUG - 2021-08-12 10:56:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:56:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:56:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:56:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:56:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:56:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:56:15 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:56:15 --> Total execution time: 0.0716
DEBUG - 2021-08-12 10:56:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:56:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:56:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:56:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:56:30 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:56:30 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:56:30 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:56:30 --> Total execution time: 0.0809
DEBUG - 2021-08-12 10:56:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:56:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:56:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:56:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:56:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:56:45 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:56:45 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:56:45 --> Total execution time: 0.0696
DEBUG - 2021-08-12 10:57:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:57:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:57:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:57:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:57:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:57:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:57:00 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:57:00 --> Total execution time: 0.0761
DEBUG - 2021-08-12 10:57:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:57:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:57:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:57:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:57:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:57:15 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:57:15 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:57:15 --> Total execution time: 0.0866
DEBUG - 2021-08-12 10:57:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:57:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:57:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:57:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:57:30 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:57:30 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:57:30 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:57:30 --> Total execution time: 0.0814
DEBUG - 2021-08-12 10:57:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:57:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:57:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:57:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:57:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:57:45 --> 0.0017 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:57:45 --> 0.0035 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:57:45 --> Total execution time: 0.0924
DEBUG - 2021-08-12 10:58:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:58:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:58:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:58:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:58:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:58:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:58:00 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:58:00 --> Total execution time: 0.0679
DEBUG - 2021-08-12 10:58:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:58:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:58:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:58:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:58:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:58:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:58:15 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:58:15 --> Total execution time: 0.0698
DEBUG - 2021-08-12 10:58:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:58:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:58:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:58:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:58:30 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:58:30 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:58:30 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:58:30 --> Total execution time: 0.0839
DEBUG - 2021-08-12 10:59:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 10:59:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 10:59:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 10:59:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 10:59:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 10:59:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 10:59:09 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 10:59:09 --> Total execution time: 0.0702
DEBUG - 2021-08-12 11:00:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:00:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:00:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:00:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:00:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:00:09 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:00:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:00:09 --> Total execution time: 0.0766
DEBUG - 2021-08-12 11:01:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:01:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:01:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:01:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:01:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:01:09 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:01:09 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:01:09 --> Total execution time: 0.0736
DEBUG - 2021-08-12 11:02:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:02:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:02:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:02:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:02:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:02:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:02:09 --> 0.0006 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:02:09 --> Total execution time: 0.0855
DEBUG - 2021-08-12 11:02:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:02:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:02:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:02:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:02:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:02:39 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:02:39 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:02:39 --> Total execution time: 0.1103
DEBUG - 2021-08-12 11:02:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:02:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:02:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:02:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:02:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:02:45 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:02:45 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:02:45 --> Total execution time: 0.0703
DEBUG - 2021-08-12 11:03:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:03:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:03:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:03:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:03:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:03:00 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:03:00 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:03:00 --> Total execution time: 0.0792
DEBUG - 2021-08-12 11:03:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:03:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:03:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:03:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:03:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:03:15 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:03:15 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:03:15 --> Total execution time: 0.0779
DEBUG - 2021-08-12 11:03:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:03:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:03:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:03:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:03:30 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:03:30 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:03:30 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:03:30 --> Total execution time: 0.0836
DEBUG - 2021-08-12 11:03:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:03:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:03:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:03:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:03:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:03:45 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:03:45 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:03:45 --> Total execution time: 0.0733
DEBUG - 2021-08-12 11:04:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:04:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:04:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:04:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:04:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:04:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:04:00 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:04:00 --> Total execution time: 0.0726
DEBUG - 2021-08-12 11:04:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:04:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:04:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:04:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:04:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:04:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:04:15 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:04:15 --> Total execution time: 0.0731
DEBUG - 2021-08-12 11:04:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:04:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:04:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:04:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:04:30 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:04:30 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:04:30 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:04:30 --> Total execution time: 0.0766
DEBUG - 2021-08-12 11:04:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:04:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:04:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:04:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:04:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:04:45 --> 0.0016 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:04:45 --> 0.0014 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:04:45 --> Total execution time: 0.1319
DEBUG - 2021-08-12 11:05:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:05:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:05:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:05:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:05:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:05:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:05:00 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:05:00 --> Total execution time: 0.0821
DEBUG - 2021-08-12 11:05:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:05:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:05:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:05:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:05:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:05:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:05:15 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:05:15 --> Total execution time: 0.0783
DEBUG - 2021-08-12 11:05:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:05:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:05:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:05:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:05:30 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:05:30 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:05:30 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:05:30 --> Total execution time: 0.0882
DEBUG - 2021-08-12 11:05:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:05:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:05:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:05:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:05:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:05:45 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:05:45 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:05:45 --> Total execution time: 0.0752
DEBUG - 2021-08-12 11:06:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:06:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:06:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:06:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:06:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:06:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:06:00 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:06:00 --> Total execution time: 0.0787
DEBUG - 2021-08-12 11:06:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:06:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:06:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:06:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:06:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:06:15 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:06:15 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:06:15 --> Total execution time: 0.0732
DEBUG - 2021-08-12 11:06:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:06:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:06:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:06:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:06:30 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:06:30 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:06:30 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:06:30 --> Total execution time: 0.0785
DEBUG - 2021-08-12 11:06:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:06:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:06:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:06:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:06:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:06:45 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:06:45 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:06:45 --> Total execution time: 0.0760
DEBUG - 2021-08-12 11:07:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:07:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:07:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:07:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:07:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:07:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:07:00 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:07:00 --> Total execution time: 0.0694
DEBUG - 2021-08-12 11:07:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:07:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:07:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:07:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:07:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:07:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:07:15 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:07:15 --> Total execution time: 0.0751
DEBUG - 2021-08-12 11:07:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:07:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:07:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:07:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:07:30 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:07:30 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:07:30 --> 0.0006 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:07:30 --> Total execution time: 0.0804
DEBUG - 2021-08-12 11:07:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:07:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:07:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:07:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:07:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:07:45 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:07:45 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:07:45 --> Total execution time: 0.0955
DEBUG - 2021-08-12 11:07:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:07:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:07:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:07:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:07:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:07:57 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:07:57 --> 0.0834 | INSERT INTO `csvexportlog` (`export_status`, `filter_col`, `created_datetime`) VALUES (0, 'null', '2021-08-12 11:07:56')
DEBUG - 2021-08-12 11:07:57 --> Total execution time: 0.1624
DEBUG - 2021-08-12 11:07:57 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:07:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:07:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:07:57 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:07:57 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 11:07:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:07:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:07:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:07:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:07:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:08:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:08:00 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:08:00 --> Total execution time: 0.0858
QUERY - 2021-08-12 11:08:10 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:08:10 --> 2.746 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-12 11:08:10 --> 0.1369 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-12 11:08:10 --> 2.5079 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-12 11:08:10 --> 2.4791 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-12 11:08:10 --> 2.7884 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-12 11:08:10 --> 0.0468 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-12 11:08:10 --> 2.3201 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-12 11:08:10 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 11:08:10 --> 0.0138 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 11:08:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:08:10 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:08:10 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-12 11:08:10 --> Total execution time: 13.1364
DEBUG - 2021-08-12 11:08:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:08:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:08:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:08:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:08:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:08:26 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:08:26 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:08:26 --> Total execution time: 0.0915
DEBUG - 2021-08-12 11:08:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:08:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:08:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:08:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:08:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:08:41 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:08:41 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:08:41 --> Total execution time: 0.0906
DEBUG - 2021-08-12 11:08:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:08:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:08:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:08:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:08:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:08:56 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:08:56 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:08:56 --> Total execution time: 0.2554
DEBUG - 2021-08-12 11:09:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:09:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:09:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:09:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:09:11 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:09:11 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:09:11 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:09:11 --> Total execution time: 0.0744
DEBUG - 2021-08-12 11:09:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:09:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:09:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:09:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:09:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:09:26 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:09:26 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:09:26 --> Total execution time: 0.0786
DEBUG - 2021-08-12 11:09:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:09:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:09:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:09:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:09:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:09:41 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:09:41 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:09:41 --> Total execution time: 0.1154
DEBUG - 2021-08-12 11:09:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:09:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:09:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:09:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:09:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:09:56 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:09:56 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:09:56 --> Total execution time: 0.0820
DEBUG - 2021-08-12 11:10:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:10:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:10:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:10:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:10:11 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:10:11 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:10:11 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:10:11 --> Total execution time: 0.0880
DEBUG - 2021-08-12 11:10:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:10:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:10:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:10:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:10:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:10:26 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:10:26 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:10:26 --> Total execution time: 0.0795
DEBUG - 2021-08-12 11:10:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:10:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:10:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:10:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:10:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:10:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:10:41 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:10:41 --> Total execution time: 0.0776
DEBUG - 2021-08-12 11:10:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:10:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:10:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:10:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:10:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:10:56 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:10:56 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:10:56 --> Total execution time: 0.0813
DEBUG - 2021-08-12 11:11:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:11:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:11:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:11:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:11:11 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:11:11 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:11:11 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:11:11 --> Total execution time: 0.0763
DEBUG - 2021-08-12 11:11:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:11:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:11:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:11:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:11:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:11:26 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:11:26 --> 0.0019 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:11:26 --> Total execution time: 0.0997
DEBUG - 2021-08-12 11:11:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:11:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:11:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:11:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:11:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:11:27 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:11:27 --> 0.0888 | INSERT INTO `csvexportlog` (`export_status`, `filter_col`, `created_datetime`) VALUES (0, 'null', '2021-08-12 11:11:27')
DEBUG - 2021-08-12 11:11:27 --> Total execution time: 0.1711
DEBUG - 2021-08-12 11:11:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:11:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:11:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:11:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:11:27 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 11:11:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:11:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:11:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-12 11:11:45 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:11:45 --> 3.5433 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-12 11:11:45 --> 0.0485 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-12 11:11:45 --> 3.3737 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-12 11:11:45 --> 3.5893 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-12 11:11:45 --> 3.8109 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-12 11:11:45 --> 0.0482 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-12 11:11:45 --> 3.3418 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-12 11:11:45 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 11:11:45 --> 0.0372 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 11:11:45 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:11:45 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:11:45 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-12 11:11:45 --> Total execution time: 17.8916
DEBUG - 2021-08-12 11:11:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:11:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:11:45 --> 0.0083 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:11:45 --> 0.0035 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:11:45 --> Total execution time: 4.0848
DEBUG - 2021-08-12 11:12:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:12:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:12:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:12:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:12:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:12:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:12:00 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:12:00 --> Total execution time: 0.0906
DEBUG - 2021-08-12 11:12:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:12:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:12:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:12:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:12:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:12:16 --> 0.0063 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:12:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:12:16 --> Total execution time: 0.1112
DEBUG - 2021-08-12 11:12:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:12:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:12:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:12:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:12:32 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:12:32 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:12:32 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:12:33 --> Total execution time: 2.4291
DEBUG - 2021-08-12 11:12:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:12:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:12:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:12:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:12:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:12:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:12:46 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:12:46 --> Total execution time: 0.3569
DEBUG - 2021-08-12 11:13:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:13:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:13:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:13:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:13:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:13:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:13:01 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:13:01 --> Total execution time: 0.0969
DEBUG - 2021-08-12 11:13:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:13:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:13:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:13:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:13:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:13:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:13:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:13:16 --> Total execution time: 0.0869
DEBUG - 2021-08-12 11:13:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:13:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:13:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:13:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:13:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:13:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:13:31 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:13:31 --> Total execution time: 0.0809
DEBUG - 2021-08-12 11:13:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:13:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:13:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:13:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:13:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:13:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:13:46 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:13:46 --> Total execution time: 0.0890
DEBUG - 2021-08-12 11:14:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:14:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:14:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:14:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:14:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:14:01 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:14:01 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:14:01 --> Total execution time: 0.0742
DEBUG - 2021-08-12 11:14:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:14:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:14:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:14:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:14:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:14:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:14:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:14:16 --> Total execution time: 0.0842
DEBUG - 2021-08-12 11:14:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:14:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:14:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:14:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:14:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:14:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:14:31 --> 0.0007 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:14:31 --> Total execution time: 0.0788
DEBUG - 2021-08-12 11:14:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:14:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:14:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:14:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:14:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:14:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:14:46 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:14:46 --> Total execution time: 0.0708
DEBUG - 2021-08-12 11:15:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:15:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:15:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:15:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:15:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:15:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:15:01 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:15:01 --> Total execution time: 0.0701
DEBUG - 2021-08-12 11:15:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:15:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:15:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:15:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:15:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:15:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:15:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:15:16 --> Total execution time: 0.0639
DEBUG - 2021-08-12 11:15:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:15:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:15:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:15:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:15:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:15:31 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:15:31 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:15:31 --> Total execution time: 0.0989
DEBUG - 2021-08-12 11:15:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:15:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:15:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:15:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:15:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:15:46 --> 0.0013 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:15:46 --> 0.0008 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:15:46 --> Total execution time: 0.0890
DEBUG - 2021-08-12 11:16:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:16:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:16:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:16:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:16:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:16:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:16:01 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:16:01 --> Total execution time: 0.0867
DEBUG - 2021-08-12 11:16:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:16:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:16:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:16:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:16:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:16:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:16:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:16:16 --> Total execution time: 0.0737
DEBUG - 2021-08-12 11:16:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:16:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:16:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:16:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:16:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:16:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:16:31 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:16:31 --> Total execution time: 0.0736
DEBUG - 2021-08-12 11:16:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:16:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:16:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:16:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:16:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:16:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:16:46 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:16:46 --> Total execution time: 0.0751
DEBUG - 2021-08-12 11:17:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:17:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:17:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:17:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:17:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:17:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:17:01 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:17:01 --> Total execution time: 0.0806
DEBUG - 2021-08-12 11:17:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:17:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:17:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:17:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:17:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:17:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:17:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:17:16 --> Total execution time: 0.0700
DEBUG - 2021-08-12 11:17:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:17:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:17:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:17:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:17:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:17:31 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:17:31 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:17:31 --> Total execution time: 0.0863
DEBUG - 2021-08-12 11:17:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:17:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:17:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:17:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:17:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:17:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:17:46 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:17:46 --> Total execution time: 0.0619
DEBUG - 2021-08-12 11:18:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:18:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:18:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:18:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:18:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:18:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:18:01 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:18:01 --> Total execution time: 0.0847
DEBUG - 2021-08-12 11:18:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:18:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:18:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:18:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:18:08 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 11:18:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:18:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:18:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:18:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:18:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:18:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:18:16 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:18:16 --> Total execution time: 0.0946
DEBUG - 2021-08-12 11:18:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:18:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:18:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:18:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:18:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:18:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:18:23 --> 0.1564 | INSERT INTO `csvexportlog` (`export_status`, `filter_col`, `created_datetime`) VALUES (0, 'null', '2021-08-12 11:18:23')
DEBUG - 2021-08-12 11:18:23 --> Total execution time: 0.2480
DEBUG - 2021-08-12 11:18:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:18:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:18:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:18:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:18:24 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 11:18:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:18:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:18:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-12 11:18:33 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:18:33 --> 3.3411 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-12 11:18:33 --> 0.0485 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-12 11:18:33 --> 6.7628 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-12 11:18:33 --> 3.0554 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-12 11:18:33 --> 3.9566 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-12 11:18:33 --> 0.0697 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-12 11:18:33 --> 7.2181 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-12 11:18:33 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 11:18:33 --> 0.0398 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 11:18:33 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:18:33 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:18:33 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-12 11:18:33 --> Total execution time: 24.5862
QUERY - 2021-08-12 11:18:46 --> 0.0545 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:18:46 --> 6.1364 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-12 11:18:46 --> 0.1824 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-12 11:18:46 --> 7.2189 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-12 11:18:46 --> 2.6119 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-12 11:18:46 --> 2.343 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-12 11:18:46 --> 0.0482 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-12 11:18:46 --> 3.2852 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-12 11:18:46 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 11:18:46 --> 0.0044 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 11:18:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:18:46 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:18:46 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-12 11:18:46 --> Total execution time: 22.1901
DEBUG - 2021-08-12 11:18:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:18:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:18:46 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:18:46 --> 0.0006 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:18:46 --> Total execution time: 15.3970
DEBUG - 2021-08-12 11:19:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:19:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:19:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:19:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:19:02 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:19:02 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:19:02 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:19:02 --> Total execution time: 0.0824
DEBUG - 2021-08-12 11:19:17 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:19:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:19:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:19:17 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:19:17 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:19:17 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:19:17 --> 0.0011 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:19:17 --> Total execution time: 0.0789
DEBUG - 2021-08-12 11:19:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:19:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:19:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:19:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:19:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:19:41 --> 0.0008 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:19:41 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:19:41 --> Total execution time: 2.3990
DEBUG - 2021-08-12 11:19:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:19:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:19:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:19:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:19:47 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:19:47 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:19:47 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:19:47 --> Total execution time: 0.2421
DEBUG - 2021-08-12 11:20:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:20:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:20:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:20:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:20:02 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:20:02 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:20:02 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:20:02 --> Total execution time: 0.0856
DEBUG - 2021-08-12 11:20:17 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:20:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:20:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:20:17 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:20:17 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:20:17 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:20:17 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:20:17 --> Total execution time: 0.0840
DEBUG - 2021-08-12 11:20:32 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:20:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:20:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:20:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:20:32 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:20:32 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:20:32 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:20:32 --> Total execution time: 0.1000
DEBUG - 2021-08-12 11:20:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:20:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:20:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:20:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:20:47 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:20:47 --> 0.0011 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:20:47 --> 0.0012 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:20:47 --> Total execution time: 0.0935
DEBUG - 2021-08-12 11:21:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:21:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:21:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:21:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:21:02 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:21:02 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:21:02 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:21:02 --> Total execution time: 0.0832
DEBUG - 2021-08-12 11:21:17 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:21:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:21:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:21:17 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:21:17 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:21:17 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:21:17 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:21:17 --> Total execution time: 0.0761
DEBUG - 2021-08-12 11:21:32 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:21:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:21:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:21:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:21:32 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:21:32 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:21:32 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:21:32 --> Total execution time: 0.0831
DEBUG - 2021-08-12 11:21:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:21:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:21:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:21:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:21:47 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:21:47 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:21:47 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:21:47 --> Total execution time: 0.0925
DEBUG - 2021-08-12 11:22:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:22:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:22:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:22:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:22:02 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:22:02 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:22:02 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:22:02 --> Total execution time: 0.0821
DEBUG - 2021-08-12 11:22:17 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:22:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:22:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:22:17 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:22:17 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:22:17 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:22:17 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:22:17 --> Total execution time: 0.0720
DEBUG - 2021-08-12 11:22:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:22:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:22:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:22:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:22:30 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:22:30 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:22:30 --> 0.0766 | INSERT INTO `csvexportlog` (`export_status`, `filter_col`, `created_datetime`) VALUES (0, 'null', '2021-08-12 11:22:30')
DEBUG - 2021-08-12 11:22:30 --> Total execution time: 0.1553
DEBUG - 2021-08-12 11:22:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:22:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:22:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:22:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:22:30 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 11:22:32 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:22:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:22:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:22:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:22:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:22:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-12 11:22:49 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:22:49 --> 3.458 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-12 11:22:49 --> 0.0441 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-12 11:22:49 --> 3.3086 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-12 11:22:49 --> 3.8883 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-12 11:22:49 --> 3.6434 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-12 11:22:49 --> 0.0481 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-12 11:22:49 --> 4.0889 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-12 11:22:49 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 11:22:49 --> 0.0127 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 11:22:49 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:22:49 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:22:49 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-12 11:22:49 --> Total execution time: 18.5936
DEBUG - 2021-08-12 11:22:49 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:22:49 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:22:49 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:22:49 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:22:49 --> Total execution time: 17.0686
DEBUG - 2021-08-12 11:22:49 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:22:49 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:22:49 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:22:49 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:22:49 --> Total execution time: 1.8502
DEBUG - 2021-08-12 11:23:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:23:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:23:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:23:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:23:04 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:23:04 --> 0.0033 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:23:04 --> 0.002 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:23:04 --> Total execution time: 0.1439
DEBUG - 2021-08-12 11:23:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:23:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:23:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:23:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:23:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:23:20 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:23:20 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:23:20 --> Total execution time: 0.0825
DEBUG - 2021-08-12 11:23:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:23:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:23:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:23:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:23:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:23:35 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:23:35 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:23:35 --> Total execution time: 0.0790
DEBUG - 2021-08-12 11:23:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:23:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:23:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:23:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:23:50 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:23:50 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:23:50 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:23:50 --> Total execution time: 0.0714
DEBUG - 2021-08-12 11:24:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:24:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:24:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:24:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:24:05 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:24:05 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:24:05 --> 0.0012 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:24:05 --> Total execution time: 0.0963
DEBUG - 2021-08-12 11:24:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:24:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:24:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:24:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:24:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:24:20 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:24:20 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:24:20 --> Total execution time: 0.0794
DEBUG - 2021-08-12 11:24:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:24:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:24:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:24:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:24:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:24:35 --> 0.0113 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:24:35 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:24:35 --> Total execution time: 0.1124
DEBUG - 2021-08-12 11:24:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:24:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:24:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:24:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:24:51 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:24:51 --> 0.0008 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:24:51 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:24:51 --> Total execution time: 0.4133
DEBUG - 2021-08-12 11:25:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:25:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:25:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:25:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:25:05 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:25:05 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:25:05 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:25:05 --> Total execution time: 0.0728
DEBUG - 2021-08-12 11:25:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:25:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:25:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:25:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:25:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:25:20 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:25:20 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:25:20 --> Total execution time: 0.1054
DEBUG - 2021-08-12 11:25:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:25:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:25:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:25:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:25:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:25:35 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:25:35 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:25:35 --> Total execution time: 0.0676
DEBUG - 2021-08-12 11:25:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:25:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:25:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:25:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:25:50 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:25:50 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:25:50 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:25:50 --> Total execution time: 0.0749
DEBUG - 2021-08-12 11:26:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:26:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:26:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:26:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:26:05 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:26:05 --> 0.0181 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:26:05 --> 0.0141 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:26:05 --> Total execution time: 0.1331
DEBUG - 2021-08-12 11:26:19 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:26:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:26:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:26:19 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:26:19 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:26:19 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:26:19 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:26:19 --> Total execution time: 0.1216
DEBUG - 2021-08-12 11:26:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:26:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:26:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:26:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:26:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:26:35 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:26:35 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:26:35 --> Total execution time: 0.0852
DEBUG - 2021-08-12 11:26:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:26:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:26:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:26:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:26:50 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:26:50 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:26:50 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:26:50 --> Total execution time: 0.0816
DEBUG - 2021-08-12 11:27:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:27:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:27:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:27:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:27:05 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:27:05 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:27:05 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:27:05 --> Total execution time: 0.0861
DEBUG - 2021-08-12 11:27:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:27:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:27:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:27:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:27:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:27:35 --> 0.1151 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:27:35 --> 0.0409 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:27:35 --> Total execution time: 0.3175
DEBUG - 2021-08-12 11:27:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:27:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:27:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:27:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:27:50 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:27:50 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:27:50 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:27:50 --> Total execution time: 0.0629
DEBUG - 2021-08-12 11:28:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:28:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:28:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:28:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:28:05 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:28:05 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:28:05 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:28:05 --> Total execution time: 0.0743
DEBUG - 2021-08-12 11:28:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:28:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:28:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:28:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:28:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:28:20 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:28:20 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:28:20 --> Total execution time: 0.0720
DEBUG - 2021-08-12 11:28:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:28:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:28:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:28:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:28:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:28:35 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:28:35 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:28:35 --> Total execution time: 0.0722
DEBUG - 2021-08-12 11:28:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:28:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:28:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:28:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:28:50 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:28:50 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:28:50 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:28:50 --> Total execution time: 0.1526
DEBUG - 2021-08-12 11:29:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:29:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:29:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:29:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:29:05 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:29:05 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:29:05 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:29:05 --> Total execution time: 0.0882
DEBUG - 2021-08-12 11:29:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:29:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:29:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:29:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:29:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:29:20 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:29:20 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:29:20 --> Total execution time: 0.0831
DEBUG - 2021-08-12 11:29:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:29:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:29:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:29:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:29:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:29:35 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:29:35 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:29:35 --> Total execution time: 0.0729
DEBUG - 2021-08-12 11:29:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:29:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:29:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:29:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:29:50 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:29:50 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:29:50 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:29:50 --> Total execution time: 0.0740
DEBUG - 2021-08-12 11:30:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:30:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:30:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:30:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:30:05 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:30:05 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:30:05 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:30:05 --> Total execution time: 0.0662
DEBUG - 2021-08-12 11:30:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:30:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:30:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:30:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:30:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:30:20 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:30:20 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:30:20 --> Total execution time: 0.0770
DEBUG - 2021-08-12 11:30:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:30:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:30:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:30:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:30:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:30:35 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:30:35 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:30:35 --> Total execution time: 0.0808
DEBUG - 2021-08-12 11:30:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:30:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:30:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:30:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:30:50 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:30:50 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:30:50 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:30:50 --> Total execution time: 0.0992
DEBUG - 2021-08-12 11:31:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:31:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:31:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:31:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:31:05 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:31:05 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:31:05 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:31:05 --> Total execution time: 0.0844
DEBUG - 2021-08-12 11:31:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:31:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:31:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:31:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:31:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:31:20 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:31:20 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:31:20 --> Total execution time: 0.0893
DEBUG - 2021-08-12 11:31:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:31:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:31:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:31:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:31:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:31:35 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:31:35 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:31:35 --> Total execution time: 0.0911
DEBUG - 2021-08-12 11:31:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:31:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:31:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:31:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:31:50 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:31:50 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:31:50 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:31:50 --> Total execution time: 0.0753
DEBUG - 2021-08-12 11:32:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:32:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:32:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:32:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:32:05 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:32:05 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:32:05 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:32:05 --> Total execution time: 0.1032
DEBUG - 2021-08-12 11:32:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:32:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:32:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:32:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:32:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:32:20 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:32:20 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:32:20 --> Total execution time: 0.0661
DEBUG - 2021-08-12 11:32:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:32:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:32:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:32:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:32:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:32:35 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:32:35 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:32:35 --> Total execution time: 0.0946
DEBUG - 2021-08-12 11:32:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:32:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:32:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:32:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:32:50 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:32:50 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:32:50 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:32:50 --> Total execution time: 0.0881
DEBUG - 2021-08-12 11:33:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:33:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:33:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:33:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:33:05 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:33:05 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:33:05 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:33:05 --> Total execution time: 0.0909
DEBUG - 2021-08-12 11:33:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:33:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:33:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:33:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:33:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:33:20 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:33:20 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:33:20 --> Total execution time: 0.0720
DEBUG - 2021-08-12 11:33:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:33:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:33:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:33:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:33:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:33:35 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:33:35 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:33:35 --> Total execution time: 0.0836
DEBUG - 2021-08-12 11:33:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:33:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:33:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:33:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:33:50 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:33:50 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:33:50 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:33:50 --> Total execution time: 0.0796
DEBUG - 2021-08-12 11:34:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:34:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:34:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:34:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:34:05 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:34:05 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:34:05 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:34:05 --> Total execution time: 0.0738
DEBUG - 2021-08-12 11:34:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:34:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:34:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:34:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:34:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:34:20 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:34:20 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:34:20 --> Total execution time: 0.0795
DEBUG - 2021-08-12 11:34:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:34:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:34:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:34:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:34:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:34:35 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:34:35 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:34:35 --> Total execution time: 0.0667
DEBUG - 2021-08-12 11:34:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:34:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:34:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:34:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:34:50 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:34:50 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:34:50 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:34:50 --> Total execution time: 0.0775
DEBUG - 2021-08-12 11:35:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:35:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:35:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:35:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:35:05 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:35:05 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:35:05 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:35:05 --> Total execution time: 0.0829
DEBUG - 2021-08-12 11:35:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:35:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:35:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:35:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:35:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:35:20 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:35:20 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:35:20 --> Total execution time: 0.0767
DEBUG - 2021-08-12 11:35:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:35:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:35:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:35:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:35:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:35:35 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:35:35 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:35:35 --> Total execution time: 0.0905
DEBUG - 2021-08-12 11:35:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:35:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:35:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:35:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:35:50 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:35:50 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:35:50 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:35:50 --> Total execution time: 0.0707
DEBUG - 2021-08-12 11:36:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:36:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:36:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:36:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:36:05 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:36:05 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:36:05 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:36:05 --> Total execution time: 0.1167
DEBUG - 2021-08-12 11:36:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:36:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:36:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:36:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:36:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:36:20 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:36:20 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:36:20 --> Total execution time: 0.0665
DEBUG - 2021-08-12 11:36:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:36:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:36:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:36:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:36:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:36:35 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:36:35 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:36:35 --> Total execution time: 0.1024
DEBUG - 2021-08-12 11:36:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:36:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:36:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:36:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:36:50 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:36:50 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:36:50 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:36:50 --> Total execution time: 0.0783
DEBUG - 2021-08-12 11:37:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:37:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:37:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:37:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:37:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:37:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:37:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:37:09 --> Total execution time: 0.0774
DEBUG - 2021-08-12 11:38:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:38:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:38:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:38:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:38:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:38:09 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:38:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:38:09 --> Total execution time: 0.0918
DEBUG - 2021-08-12 11:38:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:38:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:38:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:38:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:38:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:38:26 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:38:26 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:38:26 --> Total execution time: 0.1033
DEBUG - 2021-08-12 11:38:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:38:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:38:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:38:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:38:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:38:35 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:38:35 --> 0.0006 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:38:35 --> Total execution time: 0.0937
DEBUG - 2021-08-12 11:38:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:38:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:38:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:38:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:38:50 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:38:50 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:38:50 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:38:50 --> Total execution time: 0.0751
DEBUG - 2021-08-12 11:39:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:39:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:39:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:39:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:39:05 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:39:05 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:39:05 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:39:05 --> Total execution time: 0.0748
DEBUG - 2021-08-12 11:39:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:39:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:39:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:39:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:39:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:39:20 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:39:20 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:39:20 --> Total execution time: 0.0665
DEBUG - 2021-08-12 11:39:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:39:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:39:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:39:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:39:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:39:35 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:39:35 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:39:35 --> Total execution time: 0.0704
DEBUG - 2021-08-12 11:39:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:39:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:39:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:39:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:39:47 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:39:48 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:39:48 --> 0.1995 | INSERT INTO `csvexportlog` (`export_status`, `filter_col`, `created_datetime`) VALUES (0, 'null', '2021-08-12 11:39:47')
DEBUG - 2021-08-12 11:39:48 --> Total execution time: 0.2751
DEBUG - 2021-08-12 11:39:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:39:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:39:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:39:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:39:48 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 11:39:49 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:39:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:39:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:39:49 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:39:49 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:39:49 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:39:49 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:39:49 --> Total execution time: 0.0790
QUERY - 2021-08-12 11:40:03 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:40:03 --> 3.4302 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-12 11:40:03 --> 0.1601 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-12 11:40:03 --> 3.1806 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-12 11:40:03 --> 2.989 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-12 11:40:03 --> 2.8895 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-12 11:40:03 --> 0.0524 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-12 11:40:03 --> 2.3027 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-12 11:40:03 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 11:40:03 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 11:40:03 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:40:03 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:40:03 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-12 11:40:03 --> Total execution time: 15.0908
DEBUG - 2021-08-12 11:40:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:40:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:40:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:40:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:40:18 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:40:18 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:40:18 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:40:18 --> Total execution time: 0.0775
DEBUG - 2021-08-12 11:40:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:40:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:40:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:40:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:40:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:40:35 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:40:35 --> 0.0018 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:40:35 --> Total execution time: 1.9953
DEBUG - 2021-08-12 11:40:49 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:40:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:40:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:40:49 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:40:49 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:40:49 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:40:49 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:40:49 --> Total execution time: 0.0573
DEBUG - 2021-08-12 11:41:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:41:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:41:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:41:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:41:04 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:41:04 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:41:04 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:41:04 --> Total execution time: 0.0609
DEBUG - 2021-08-12 11:41:19 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:41:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:41:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:41:19 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:41:19 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:41:19 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:41:19 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:41:19 --> Total execution time: 0.0765
DEBUG - 2021-08-12 11:41:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:41:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:41:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:41:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:41:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:41:34 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:41:34 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:41:34 --> Total execution time: 0.0711
DEBUG - 2021-08-12 11:41:49 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:41:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:41:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:41:49 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:41:49 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:41:49 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:41:49 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:41:49 --> Total execution time: 0.0776
DEBUG - 2021-08-12 11:42:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:42:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:42:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:42:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:42:03 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:42:04 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:42:04 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:42:04 --> Total execution time: 0.0897
DEBUG - 2021-08-12 11:42:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:42:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:42:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:42:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:42:18 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:42:18 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:42:18 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:42:18 --> Total execution time: 0.0804
DEBUG - 2021-08-12 11:42:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:42:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:42:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:42:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:42:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:42:34 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:42:34 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:42:34 --> Total execution time: 0.0769
DEBUG - 2021-08-12 11:42:49 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:42:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:42:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:42:49 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:42:49 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:42:49 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:42:49 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:42:49 --> Total execution time: 0.0688
DEBUG - 2021-08-12 11:43:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:43:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:43:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:43:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:43:04 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:43:04 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:43:04 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:43:04 --> Total execution time: 0.1186
DEBUG - 2021-08-12 11:43:19 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:43:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:43:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:43:19 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:43:19 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:43:19 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:43:19 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:43:19 --> Total execution time: 0.0984
DEBUG - 2021-08-12 11:43:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:43:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:43:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:43:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:43:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:43:34 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:43:34 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:43:34 --> Total execution time: 0.0847
DEBUG - 2021-08-12 11:43:49 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:43:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:43:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:43:49 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:43:49 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:43:49 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:43:49 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:43:49 --> Total execution time: 0.0781
DEBUG - 2021-08-12 11:44:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:44:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:44:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:44:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:44:04 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:44:04 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:44:04 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:44:04 --> Total execution time: 0.0903
DEBUG - 2021-08-12 11:44:19 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:44:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:44:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:44:19 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:44:19 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:44:19 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:44:19 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:44:19 --> Total execution time: 0.0812
DEBUG - 2021-08-12 11:44:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:44:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:44:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:44:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:44:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:44:34 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:44:34 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:44:34 --> Total execution time: 0.0945
DEBUG - 2021-08-12 11:44:49 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:44:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:44:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:44:49 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:44:49 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:44:49 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:44:49 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:44:49 --> Total execution time: 0.0756
DEBUG - 2021-08-12 11:45:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:45:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:45:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:45:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:45:04 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:45:04 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:45:04 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:45:04 --> Total execution time: 0.0720
DEBUG - 2021-08-12 11:45:19 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:45:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:45:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:45:19 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:45:19 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:45:19 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:45:19 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:45:19 --> Total execution time: 0.0756
DEBUG - 2021-08-12 11:45:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:45:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:45:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:45:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:45:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:45:34 --> 0.2709 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:45:34 --> 0.0009 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:45:34 --> Total execution time: 0.3780
DEBUG - 2021-08-12 11:45:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:45:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:45:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:45:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:45:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:45:42 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:45:42 --> 0.1024 | INSERT INTO `csvexportlog` (`export_status`, `filter_col`, `created_datetime`) VALUES (0, 'null', '2021-08-12 11:45:42')
DEBUG - 2021-08-12 11:45:42 --> Total execution time: 0.1811
DEBUG - 2021-08-12 11:45:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:45:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:45:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:45:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:45:42 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 11:45:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:45:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:45:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:45:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:45:48 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:45:49 --> 0.0146 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:45:49 --> 0.0477 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:45:49 --> Total execution time: 0.1374
QUERY - 2021-08-12 11:45:57 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:45:57 --> 3.4472 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-12 11:45:57 --> 0.2069 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-12 11:45:57 --> 2.5149 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-12 11:45:57 --> 2.6332 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-12 11:45:57 --> 2.6338 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-12 11:45:57 --> 0.0513 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-12 11:45:57 --> 3.3734 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-12 11:45:57 --> 0.0123 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 11:45:57 --> 0.0165 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 11:45:57 --> 0.0077 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:45:57 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:45:57 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-12 11:45:57 --> Total execution time: 14.9883
DEBUG - 2021-08-12 11:46:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:46:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:46:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:46:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:46:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:46:13 --> 0.0061 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:46:13 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:46:13 --> Total execution time: 0.0737
DEBUG - 2021-08-12 11:46:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:46:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:46:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:46:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:46:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:46:30 --> 0.5968 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:46:30 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:46:31 --> Total execution time: 2.6572
DEBUG - 2021-08-12 11:46:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:46:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:46:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:46:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:46:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:46:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:46:44 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:46:44 --> Total execution time: 0.0783
DEBUG - 2021-08-12 11:46:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:46:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:46:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:46:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:46:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:46:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:46:58 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:46:58 --> Total execution time: 0.0665
DEBUG - 2021-08-12 11:47:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:47:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:47:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:47:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:47:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:47:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:47:13 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:47:13 --> Total execution time: 0.1368
DEBUG - 2021-08-12 11:47:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:47:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:47:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:47:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:47:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:47:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:47:28 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:47:28 --> Total execution time: 0.0690
DEBUG - 2021-08-12 11:47:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:47:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:47:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:47:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:47:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:47:43 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:47:43 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:47:43 --> Total execution time: 0.0683
DEBUG - 2021-08-12 11:47:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:47:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:47:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:47:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:47:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:47:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:47:58 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:47:58 --> Total execution time: 0.0809
DEBUG - 2021-08-12 11:48:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:48:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:48:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:48:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:48:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:48:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:48:13 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:48:13 --> Total execution time: 0.0663
DEBUG - 2021-08-12 11:48:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:48:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:48:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:48:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:48:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:48:28 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:48:28 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:48:28 --> Total execution time: 0.0717
DEBUG - 2021-08-12 11:48:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:48:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:48:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:48:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:48:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:48:43 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:48:43 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:48:43 --> Total execution time: 0.0821
DEBUG - 2021-08-12 11:48:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:48:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:48:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:48:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:48:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:48:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:48:58 --> 0.0006 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:48:58 --> Total execution time: 0.0908
DEBUG - 2021-08-12 11:49:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:49:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:49:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:49:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:49:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:49:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:49:13 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:49:13 --> Total execution time: 0.0665
DEBUG - 2021-08-12 11:49:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:49:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:49:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:49:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:49:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:49:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:49:28 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:49:28 --> Total execution time: 0.0810
DEBUG - 2021-08-12 11:49:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:49:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:49:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:49:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:49:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:49:43 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:49:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:49:43 --> Total execution time: 0.0641
DEBUG - 2021-08-12 11:49:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:49:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:49:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:49:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:49:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:49:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:49:44 --> 0.0851 | INSERT INTO `csvexportlog` (`export_status`, `filter_col`, `created_datetime`) VALUES (0, 'null', '2021-08-12 11:49:44')
DEBUG - 2021-08-12 11:49:44 --> Total execution time: 0.1517
DEBUG - 2021-08-12 11:49:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:49:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:49:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:49:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:49:44 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 11:49:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:49:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:49:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-12 11:50:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:50:08 --> 4.6691 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-12 11:50:08 --> 0.0488 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-12 11:50:08 --> 5.9736 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-12 11:50:08 --> 4.9222 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-12 11:50:08 --> 4.1105 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-12 11:50:08 --> 0.049 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-12 11:50:08 --> 4.0284 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-12 11:50:08 --> 0.0116 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 11:50:08 --> 0.0171 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 11:50:08 --> 0.0091 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:50:08 --> 0.0014 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:50:08 --> 0.001 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-12 11:50:08 --> Total execution time: 23.9311
DEBUG - 2021-08-12 11:50:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:50:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:50:08 --> 0.0008 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:50:08 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:50:08 --> Total execution time: 10.5496
DEBUG - 2021-08-12 11:50:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:50:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:50:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:50:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:50:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:50:24 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:50:24 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:50:24 --> Total execution time: 0.0799
DEBUG - 2021-08-12 11:50:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:50:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:50:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:50:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:50:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:50:39 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:50:39 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:50:39 --> Total execution time: 0.0768
DEBUG - 2021-08-12 11:50:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:50:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:50:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:50:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:50:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:50:55 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:50:55 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:50:55 --> Total execution time: 0.9677
DEBUG - 2021-08-12 11:51:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:51:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:51:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:51:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:51:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:51:09 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:51:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:51:09 --> Total execution time: 0.0723
DEBUG - 2021-08-12 11:51:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:51:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:51:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:51:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:51:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:51:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:51:24 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:51:24 --> Total execution time: 0.0739
DEBUG - 2021-08-12 11:51:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:51:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:51:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:51:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:51:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:51:39 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:51:39 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:51:39 --> Total execution time: 0.0635
DEBUG - 2021-08-12 11:51:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:51:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:51:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:51:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:51:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:51:54 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:51:54 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:51:54 --> Total execution time: 0.0944
DEBUG - 2021-08-12 11:52:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:52:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:52:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:52:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:52:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:52:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:52:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:52:09 --> Total execution time: 0.0931
DEBUG - 2021-08-12 11:52:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:52:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:52:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:52:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:52:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:52:24 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:52:24 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:52:24 --> Total execution time: 0.0834
DEBUG - 2021-08-12 11:52:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:52:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:52:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:52:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:52:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:52:39 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:52:39 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:52:39 --> Total execution time: 0.0751
DEBUG - 2021-08-12 11:52:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:52:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:52:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:52:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:52:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:52:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:52:54 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:52:54 --> Total execution time: 0.0902
DEBUG - 2021-08-12 11:53:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:53:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:53:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:53:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:53:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:53:09 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:53:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:53:09 --> Total execution time: 0.0850
DEBUG - 2021-08-12 11:53:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:53:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:53:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:53:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:53:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:53:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:53:24 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:53:24 --> Total execution time: 0.0852
DEBUG - 2021-08-12 11:53:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:53:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:53:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:53:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:53:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:53:39 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:53:39 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:53:39 --> Total execution time: 0.0906
DEBUG - 2021-08-12 11:53:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:53:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:53:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:53:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:53:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:53:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:53:54 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:53:54 --> Total execution time: 0.0621
DEBUG - 2021-08-12 11:54:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:54:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:54:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:54:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:54:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:54:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:54:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:54:09 --> Total execution time: 0.0768
DEBUG - 2021-08-12 11:54:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:54:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:54:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:54:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:54:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:54:24 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:54:24 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:54:24 --> Total execution time: 0.0715
DEBUG - 2021-08-12 11:54:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:54:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:54:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:54:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:54:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:54:39 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:54:39 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:54:39 --> Total execution time: 0.0626
DEBUG - 2021-08-12 11:54:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:54:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:54:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:54:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:54:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:54:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:54:54 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:54:54 --> Total execution time: 0.0762
DEBUG - 2021-08-12 11:55:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:55:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:55:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:55:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:55:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:55:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:55:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:55:09 --> Total execution time: 0.0696
DEBUG - 2021-08-12 11:55:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:55:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:55:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:55:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:55:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:55:24 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:55:24 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:55:24 --> Total execution time: 0.1505
DEBUG - 2021-08-12 11:55:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:55:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:55:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:55:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:55:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:55:39 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:55:39 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:55:39 --> Total execution time: 0.0740
DEBUG - 2021-08-12 11:55:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:55:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:55:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:55:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:55:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:55:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:55:54 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:55:54 --> Total execution time: 0.0826
DEBUG - 2021-08-12 11:56:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:56:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:56:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:56:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:56:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:56:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:56:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:56:09 --> Total execution time: 0.0885
DEBUG - 2021-08-12 11:56:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:56:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:56:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:56:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:56:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:56:24 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:56:24 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:56:24 --> Total execution time: 0.0704
DEBUG - 2021-08-12 11:56:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:56:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:56:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:56:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:56:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:56:39 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:56:39 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:56:39 --> Total execution time: 0.0895
DEBUG - 2021-08-12 11:56:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:56:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:56:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:56:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:56:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:56:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:56:54 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:56:54 --> Total execution time: 0.0872
DEBUG - 2021-08-12 11:57:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:57:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:57:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:57:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:57:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:57:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:57:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:57:09 --> Total execution time: 0.1463
DEBUG - 2021-08-12 11:57:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:57:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:57:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:57:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:57:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:57:24 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:57:24 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:57:24 --> Total execution time: 0.1085
DEBUG - 2021-08-12 11:57:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:57:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:57:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:57:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:57:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:57:39 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:57:39 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:57:39 --> Total execution time: 0.0829
DEBUG - 2021-08-12 11:57:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:57:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:57:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:57:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:57:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:57:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:57:54 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:57:54 --> Total execution time: 0.0652
DEBUG - 2021-08-12 11:58:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:58:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:58:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:58:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:58:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:58:09 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:58:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:58:09 --> Total execution time: 0.0665
DEBUG - 2021-08-12 11:58:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:58:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:58:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:58:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:58:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:58:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:58:24 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:58:24 --> Total execution time: 0.0831
DEBUG - 2021-08-12 11:58:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:58:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:58:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:58:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:58:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:58:39 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:58:39 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:58:39 --> Total execution time: 0.0880
DEBUG - 2021-08-12 11:58:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:58:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:58:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:58:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:58:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:58:54 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:58:54 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:58:54 --> Total execution time: 0.0757
DEBUG - 2021-08-12 11:59:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:59:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:59:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:59:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:59:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:59:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:59:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:59:09 --> Total execution time: 0.0849
DEBUG - 2021-08-12 11:59:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:59:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:59:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:59:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:59:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:59:24 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:59:24 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:59:24 --> Total execution time: 0.0720
DEBUG - 2021-08-12 11:59:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:59:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:59:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:59:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:59:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:59:39 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:59:39 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:59:39 --> Total execution time: 0.0758
DEBUG - 2021-08-12 11:59:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 11:59:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 11:59:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 11:59:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 11:59:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 11:59:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 11:59:54 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 11:59:54 --> Total execution time: 0.0892
DEBUG - 2021-08-12 12:00:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:00:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:00:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:00:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:00:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:00:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:00:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 12:00:09 --> Total execution time: 0.0712
DEBUG - 2021-08-12 12:00:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:00:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:00:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:00:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:00:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:00:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:00:24 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 12:00:24 --> Total execution time: 0.0739
DEBUG - 2021-08-12 12:00:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:00:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:00:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:00:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:00:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:00:39 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:00:39 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 12:00:39 --> Total execution time: 0.1689
DEBUG - 2021-08-12 12:00:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:00:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:00:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:00:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:00:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:00:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:00:54 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 12:00:54 --> Total execution time: 0.0872
DEBUG - 2021-08-12 12:01:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:01:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:01:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:01:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:01:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:01:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:01:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 12:01:09 --> Total execution time: 0.0804
DEBUG - 2021-08-12 12:01:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:01:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:01:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:01:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:01:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:01:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:01:24 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 12:01:24 --> Total execution time: 0.0902
DEBUG - 2021-08-12 12:01:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:01:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:01:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:01:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:01:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:01:39 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:01:39 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 12:01:39 --> Total execution time: 0.0894
DEBUG - 2021-08-12 12:01:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:01:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:01:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:01:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:01:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:01:54 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:01:54 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 12:01:54 --> Total execution time: 0.0791
DEBUG - 2021-08-12 12:02:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:02:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:02:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:02:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:02:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:02:09 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:02:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 12:02:09 --> Total execution time: 0.0911
DEBUG - 2021-08-12 12:02:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:02:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:02:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:02:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:02:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:02:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:02:24 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 12:02:24 --> Total execution time: 0.0807
DEBUG - 2021-08-12 12:02:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:02:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:02:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:02:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:02:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:02:39 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:02:39 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 12:02:39 --> Total execution time: 0.0714
DEBUG - 2021-08-12 12:02:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:02:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:02:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:02:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:02:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:02:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:02:54 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 12:02:54 --> Total execution time: 0.0793
DEBUG - 2021-08-12 12:03:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:03:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:03:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:03:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:03:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:03:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:03:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 12:03:09 --> Total execution time: 0.0826
DEBUG - 2021-08-12 12:03:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:03:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:03:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:03:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:03:21 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 12:03:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:03:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:03:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:03:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:03:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:03:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:03:24 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 12:03:24 --> Total execution time: 0.0773
DEBUG - 2021-08-12 12:08:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:08:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:08:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:08:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:08:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:08:38 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:08:38 --> 2.6224 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-12 12:08:38 --> 0.0492 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-12 12:08:38 --> 2.4729 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-12 12:08:38 --> 3.2007 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-12 12:08:38 --> 2.9659 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-12 12:08:38 --> 0.0495 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-12 12:08:38 --> 2.8171 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-12 12:08:38 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 12:08:38 --> 0.0067 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 12:08:38 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:08:38 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:08:38 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 12:08:38 --> 0.0003 | SELECT `filepath` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 12:08:38 --> Total execution time: 14.2735
DEBUG - 2021-08-12 12:12:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:12:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:12:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:12:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:12:51 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 12:16:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:16:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:16:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:16:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:16:48 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 12:18:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:18:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:18:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:18:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:18:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:18:27 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:18:27 --> 2.5679 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-12 12:18:27 --> 0.0487 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-12 12:18:27 --> 2.4504 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-12 12:18:27 --> 2.6788 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-12 12:18:27 --> 3.4433 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-12 12:18:27 --> 0.0494 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-12 12:18:27 --> 3.4623 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-12 12:18:27 --> 0.0006 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 12:18:27 --> 0.0147 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 12:18:27 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:18:27 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:18:27 --> 0.0011 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 12:18:27 --> 0.0007 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 12:18:27 --> Total execution time: 14.8134
DEBUG - 2021-08-12 12:18:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:18:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:18:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:18:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:18:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:18:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:18:44 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 12:18:44 --> Total execution time: 0.0707
DEBUG - 2021-08-12 12:18:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:18:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:18:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:18:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:18:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:18:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:18:59 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 12:18:59 --> Total execution time: 0.0761
DEBUG - 2021-08-12 12:19:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:19:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:19:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:19:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:19:12 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 12:19:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:19:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:19:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-12 12:19:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:19:25 --> 2.6928 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-12 12:19:25 --> 0.0486 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-12 12:19:25 --> 2.817 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-12 12:19:25 --> 2.3664 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-12 12:19:25 --> 2.7003 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-12 12:19:25 --> 0.0488 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-12 12:19:25 --> 2.4953 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-12 12:19:25 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 12:19:25 --> 0.0069 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 12:19:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:19:25 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:19:25 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 12:19:25 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 12:19:25 --> Total execution time: 13.2448
DEBUG - 2021-08-12 12:19:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:19:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:19:26 --> 0.0008 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:19:26 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 12:19:26 --> Total execution time: 12.3052
DEBUG - 2021-08-12 12:19:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:19:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:19:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:19:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:19:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:19:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:19:40 --> 0.034 | SELECT `filepath` FROM `csvexportfile_meta` WHERE `fileid` IS NULL
DEBUG - 2021-08-12 12:19:40 --> Total execution time: 0.1223
DEBUG - 2021-08-12 12:19:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:19:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:19:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:19:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:19:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:19:41 --> 0.0385 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:19:41 --> 0.0062 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 12:19:41 --> Total execution time: 0.1726
DEBUG - 2021-08-12 12:19:57 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:19:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:19:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:19:57 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:19:57 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:19:57 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:19:57 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 12:19:57 --> Total execution time: 0.0694
DEBUG - 2021-08-12 12:20:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:20:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:20:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:20:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:20:12 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:20:12 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:20:12 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 12:20:12 --> Total execution time: 0.0741
DEBUG - 2021-08-12 12:20:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:20:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:20:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:20:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:20:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:20:27 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:20:27 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 12:20:27 --> Total execution time: 0.0707
DEBUG - 2021-08-12 12:20:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:20:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:20:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:20:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:20:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:20:42 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:20:42 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 12:20:42 --> Total execution time: 0.0765
DEBUG - 2021-08-12 12:20:57 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:20:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:20:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:20:57 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:20:57 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:20:57 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:20:57 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 12:20:57 --> Total execution time: 0.0867
DEBUG - 2021-08-12 12:21:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:21:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:21:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:21:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:21:12 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:21:12 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:21:12 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 12:21:12 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 12:21:12 --> Total execution time: 0.0870
DEBUG - 2021-08-12 12:21:17 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:21:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:21:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:21:17 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:21:17 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 12:21:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:21:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:21:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-12 12:21:31 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:21:31 --> 2.4114 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-12 12:21:31 --> 0.0498 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-12 12:21:31 --> 3.4498 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-12 12:21:31 --> 2.5995 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-12 12:21:31 --> 2.7779 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-12 12:21:31 --> 0.0495 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-12 12:21:31 --> 2.5057 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-12 12:21:31 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 12:21:31 --> 0.0071 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 12:21:31 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:21:31 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:21:31 --> 0.0006 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 12:21:31 --> 0.0007 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 12:21:31 --> Total execution time: 13.9307
DEBUG - 2021-08-12 12:21:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:21:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:21:31 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:21:31 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 12:21:31 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 12:21:31 --> Total execution time: 5.2071
DEBUG - 2021-08-12 12:21:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:21:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:21:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:21:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:21:47 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:21:47 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:21:47 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 12:21:47 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 12:21:47 --> Total execution time: 0.0729
DEBUG - 2021-08-12 12:22:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:22:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:22:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:22:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:22:02 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:22:02 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:22:02 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 12:22:02 --> 0.0002 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 12:22:02 --> Total execution time: 0.0887
DEBUG - 2021-08-12 12:22:17 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:22:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:22:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:22:17 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:22:17 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:22:17 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:22:17 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 12:22:17 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 12:22:17 --> Total execution time: 0.0595
DEBUG - 2021-08-12 12:22:32 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:22:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:22:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:22:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:22:32 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:22:32 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:22:32 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 12:22:32 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 12:22:32 --> Total execution time: 0.0983
DEBUG - 2021-08-12 12:22:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:22:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:22:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:22:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:22:47 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:22:47 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:22:47 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 12:22:47 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 12:22:47 --> Total execution time: 0.0902
DEBUG - 2021-08-12 12:23:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:23:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:23:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:23:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:23:02 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:23:02 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:23:02 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 12:23:02 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 12:23:02 --> Total execution time: 0.0665
DEBUG - 2021-08-12 12:23:17 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:23:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:23:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:23:17 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:23:17 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:23:17 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:23:17 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 12:23:17 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 12:23:17 --> Total execution time: 0.0753
DEBUG - 2021-08-12 12:23:32 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:23:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:23:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:23:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:23:32 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:23:32 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:23:32 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 12:23:32 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 12:23:32 --> Total execution time: 0.0843
DEBUG - 2021-08-12 12:23:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:23:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:23:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:23:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:23:47 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:23:47 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:23:47 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 12:23:47 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 12:23:47 --> Total execution time: 0.0800
DEBUG - 2021-08-12 12:24:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:24:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:24:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:24:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:24:02 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:24:02 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:24:02 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 12:24:02 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 12:24:02 --> Total execution time: 0.1117
DEBUG - 2021-08-12 12:24:17 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:24:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:24:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:24:17 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:24:17 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:24:17 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:24:17 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 12:24:17 --> 0.0002 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 12:24:17 --> Total execution time: 0.0819
DEBUG - 2021-08-12 12:24:32 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:24:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:24:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:24:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:24:32 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:24:32 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:24:32 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 12:24:32 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 12:24:32 --> Total execution time: 0.0679
DEBUG - 2021-08-12 12:24:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:24:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:24:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:24:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:24:47 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:24:47 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:24:47 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 12:24:47 --> 0.0004 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 12:24:47 --> Total execution time: 0.0959
DEBUG - 2021-08-12 12:25:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:25:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:25:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:25:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:25:02 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:25:02 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:25:02 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 12:25:02 --> 0.0004 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 12:25:02 --> Total execution time: 0.0830
DEBUG - 2021-08-12 12:25:17 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:25:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:25:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:25:17 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:25:17 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:25:17 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:25:17 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 12:25:17 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 12:25:17 --> Total execution time: 0.0791
DEBUG - 2021-08-12 12:25:32 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:25:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:25:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:25:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:25:32 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:25:32 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:25:32 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 12:25:32 --> 0.0002 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 12:25:32 --> Total execution time: 0.0799
DEBUG - 2021-08-12 12:25:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:25:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:25:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:25:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:25:47 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:25:47 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:25:47 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 12:25:47 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 12:25:47 --> Total execution time: 0.0888
DEBUG - 2021-08-12 12:26:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:26:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:26:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:26:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:26:02 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:26:02 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:26:02 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 12:26:02 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 12:26:02 --> Total execution time: 0.0884
DEBUG - 2021-08-12 12:26:17 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:26:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:26:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:26:17 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:26:17 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:26:17 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:26:17 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 12:26:17 --> 0.0002 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 12:26:17 --> Total execution time: 0.0798
DEBUG - 2021-08-12 12:26:32 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:26:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:26:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:26:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:26:32 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:26:32 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:26:32 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 12:26:32 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 12:26:32 --> Total execution time: 0.0841
DEBUG - 2021-08-12 12:26:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:26:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:26:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:26:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:26:47 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:26:47 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:26:47 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 12:26:47 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 12:26:47 --> Total execution time: 0.0858
DEBUG - 2021-08-12 12:27:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:27:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:27:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:27:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:27:02 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:27:02 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:27:02 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 12:27:02 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 12:27:02 --> Total execution time: 0.0993
DEBUG - 2021-08-12 12:27:17 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:27:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:27:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:27:17 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:27:17 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:27:17 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:27:17 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 12:27:17 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 12:27:17 --> Total execution time: 0.0706
DEBUG - 2021-08-12 12:27:32 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:27:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:27:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:27:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:27:32 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:27:32 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:27:32 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 12:27:32 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 12:27:32 --> Total execution time: 0.0826
DEBUG - 2021-08-12 12:28:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:28:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:28:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:28:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:28:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:28:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:28:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 12:28:09 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 12:28:09 --> Total execution time: 0.0741
DEBUG - 2021-08-12 12:29:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:29:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:29:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:29:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:29:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:29:09 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:29:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 12:29:09 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 12:29:09 --> Total execution time: 0.0787
DEBUG - 2021-08-12 12:30:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:30:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:30:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:30:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:30:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:30:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:30:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 12:30:09 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 12:30:09 --> Total execution time: 0.0804
DEBUG - 2021-08-12 12:31:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:31:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:31:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:31:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:31:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:31:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:31:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 12:31:09 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 12:31:09 --> Total execution time: 0.0795
DEBUG - 2021-08-12 12:32:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:32:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:32:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:32:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:32:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:32:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:32:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 12:32:09 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 12:32:09 --> Total execution time: 0.0737
DEBUG - 2021-08-12 12:33:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:33:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:33:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:33:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:33:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:33:09 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:33:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 12:33:09 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 12:33:09 --> Total execution time: 0.0720
DEBUG - 2021-08-12 12:34:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:34:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:34:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:34:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:34:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:34:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:34:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 12:34:09 --> 0.0004 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 12:34:09 --> Total execution time: 0.0680
DEBUG - 2021-08-12 12:35:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:35:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:35:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:35:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:35:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:35:09 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:35:09 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 12:35:09 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 12:35:09 --> Total execution time: 0.0795
DEBUG - 2021-08-12 12:36:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:36:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:36:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:36:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:36:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:36:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:36:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 12:36:09 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 12:36:09 --> Total execution time: 0.0799
DEBUG - 2021-08-12 12:36:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:36:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:36:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:36:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:36:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:36:45 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:36:45 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 12:36:45 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 12:36:45 --> Total execution time: 0.0931
DEBUG - 2021-08-12 12:36:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:36:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:36:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:36:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:36:46 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 12:36:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:36:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:36:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:36:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:36:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:36:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:36:46 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 12:36:46 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 12:36:46 --> Total execution time: 0.0752
QUERY - 2021-08-12 12:37:00 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:37:00 --> 2.4495 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-12 12:37:00 --> 0.0494 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-12 12:37:00 --> 3.3617 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-12 12:37:00 --> 2.3665 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-12 12:37:00 --> 2.6333 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-12 12:37:00 --> 0.0494 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-12 12:37:00 --> 2.9636 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-12 12:37:00 --> 0.001 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 12:37:00 --> 0.0325 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 12:37:00 --> 0.001 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:37:00 --> 0.0009 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:37:00 --> 0.001 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 12:37:00 --> 0.0009 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 12:37:00 --> Total execution time: 14.0004
DEBUG - 2021-08-12 12:37:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:37:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:37:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:37:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:37:04 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 12:38:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:38:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:38:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:38:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:38:10 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 12:40:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:40:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:40:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:40:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:40:14 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 12:42:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:42:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:42:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:42:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:42:14 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 12:42:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:42:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:42:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:42:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:42:42 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 12:43:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:43:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:43:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:43:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:43:16 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 12:44:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:44:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:44:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:44:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:44:04 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 12:44:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:44:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:44:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:44:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:44:34 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 12:44:49 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:44:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:44:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:44:49 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:44:49 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 12:45:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:45:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:45:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:45:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:45:00 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 12:45:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:45:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:45:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:45:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:45:16 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 12:45:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:45:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:45:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-12 12:45:30 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:45:30 --> 3.2077 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-12 12:45:30 --> 0.0494 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-12 12:45:30 --> 2.5392 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-12 12:45:30 --> 2.733 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-12 12:45:30 --> 2.5002 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-12 12:45:30 --> 0.0491 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-12 12:45:30 --> 2.6394 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-12 12:45:30 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 12:45:30 --> 0.0068 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 12:45:30 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:45:30 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:45:30 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 12:45:30 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 12:45:30 --> Total execution time: 13.7954
DEBUG - 2021-08-12 12:45:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:45:30 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 12:48:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:48:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:48:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:48:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:48:48 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 12:49:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:49:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:49:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:49:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:49:22 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 12:52:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:52:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:52:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:52:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:52:48 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 12:52:48 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 12:52:48 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 12:52:48 --> Total execution time: 0.0729
DEBUG - 2021-08-12 12:54:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:54:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:54:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:54:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:54:12 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 12:59:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:59:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:59:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:59:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:59:00 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 12:59:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 12:59:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 12:59:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 12:59:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 12:59:43 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 13:06:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:06:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:06:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:06:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:06:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:06:39 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:06:39 --> 3.4736 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-12 13:06:39 --> 0.05 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-12 13:06:39 --> 2.5387 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-12 13:06:39 --> 2.6 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-12 13:06:39 --> 2.7443 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-12 13:06:39 --> 0.0495 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-12 13:06:39 --> 2.329 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-12 13:06:39 --> 0.0006 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:06:39 --> 0.0143 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 13:06:39 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:06:39 --> 0.0008 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:06:39 --> 0.0008 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 13:06:39 --> 0.0006 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:06:39 --> Total execution time: 13.9209
DEBUG - 2021-08-12 13:06:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:06:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:06:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:06:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:06:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:06:56 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:06:56 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:06:56 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:06:56 --> Total execution time: 0.0841
DEBUG - 2021-08-12 13:07:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:07:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:07:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:07:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:07:11 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:07:11 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:07:11 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:07:11 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:07:11 --> Total execution time: 0.0755
DEBUG - 2021-08-12 13:07:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:07:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:07:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:07:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:07:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:07:26 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:07:26 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:07:26 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:07:26 --> Total execution time: 0.0692
DEBUG - 2021-08-12 13:07:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:07:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:07:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:07:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:07:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:07:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:07:41 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:07:41 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:07:41 --> Total execution time: 0.1044
DEBUG - 2021-08-12 13:07:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:07:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:07:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:07:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:07:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:07:56 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:07:56 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:07:56 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:07:56 --> Total execution time: 0.0681
DEBUG - 2021-08-12 13:08:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:08:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:08:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:08:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:08:11 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:08:11 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:08:11 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:08:11 --> 0.0002 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:08:11 --> Total execution time: 0.0830
DEBUG - 2021-08-12 13:08:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:08:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:08:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:08:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:08:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:08:26 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:08:26 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:08:26 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:08:26 --> Total execution time: 0.0751
DEBUG - 2021-08-12 13:08:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:08:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:08:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:08:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:08:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:08:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:08:41 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:08:41 --> 0.0002 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:08:41 --> Total execution time: 0.0755
DEBUG - 2021-08-12 13:08:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:08:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:08:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:08:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:08:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:08:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:08:55 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:08:55 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:08:55 --> Total execution time: 0.0759
DEBUG - 2021-08-12 13:09:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:09:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:09:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:09:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:09:11 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:09:11 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:09:11 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:09:11 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:09:11 --> Total execution time: 0.0878
DEBUG - 2021-08-12 13:09:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:09:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:09:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:09:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:09:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:09:26 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:09:26 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:09:26 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:09:26 --> Total execution time: 0.0786
DEBUG - 2021-08-12 13:09:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:09:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:09:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:09:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:09:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:09:41 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:09:41 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:09:41 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:09:41 --> Total execution time: 0.0868
DEBUG - 2021-08-12 13:09:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:09:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:09:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:09:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:09:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:09:56 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:09:56 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:09:56 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:09:56 --> Total execution time: 0.0652
DEBUG - 2021-08-12 13:10:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:10:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:10:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:10:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:10:11 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:10:11 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:10:11 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:10:11 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:10:11 --> Total execution time: 0.0790
DEBUG - 2021-08-12 13:10:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:10:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:10:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:10:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:10:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:10:26 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:10:26 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:10:26 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:10:26 --> Total execution time: 0.0861
DEBUG - 2021-08-12 13:10:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:10:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:10:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:10:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:10:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:10:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:10:41 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:10:41 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:10:41 --> Total execution time: 0.0785
DEBUG - 2021-08-12 13:10:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:10:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:10:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:10:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:10:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:10:56 --> 0.0009 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:10:56 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:10:56 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:10:56 --> Total execution time: 0.0804
DEBUG - 2021-08-12 13:11:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:11:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:11:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:11:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:11:11 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:11:11 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:11:11 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:11:11 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:11:11 --> Total execution time: 0.0708
DEBUG - 2021-08-12 13:11:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:11:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:11:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:11:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:11:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:11:26 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:11:26 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:11:26 --> 0.0002 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:11:26 --> Total execution time: 0.0932
DEBUG - 2021-08-12 13:11:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:11:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:11:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:11:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:11:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:11:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:11:41 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:11:41 --> 0.0002 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:11:41 --> Total execution time: 0.0776
DEBUG - 2021-08-12 13:11:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:11:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:11:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:11:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:11:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:11:56 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:11:56 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:11:56 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:11:56 --> Total execution time: 0.0694
DEBUG - 2021-08-12 13:12:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:12:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:12:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:12:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:12:11 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:12:11 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:12:11 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:12:11 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:12:11 --> Total execution time: 0.0836
DEBUG - 2021-08-12 13:12:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:12:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:12:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:12:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:12:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:12:26 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:12:26 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:12:26 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:12:26 --> Total execution time: 0.0767
DEBUG - 2021-08-12 13:12:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:12:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:12:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:12:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:12:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:12:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:12:41 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:12:41 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:12:41 --> Total execution time: 0.0729
DEBUG - 2021-08-12 13:12:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:12:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:12:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:12:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:12:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:12:56 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:12:56 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:12:56 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:12:56 --> Total execution time: 0.0730
DEBUG - 2021-08-12 13:13:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:13:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:13:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:13:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:13:11 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:13:11 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:13:11 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:13:11 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:13:11 --> Total execution time: 0.0672
DEBUG - 2021-08-12 13:13:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:13:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:13:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:13:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:13:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:13:26 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:13:26 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:13:26 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:13:26 --> Total execution time: 0.0626
DEBUG - 2021-08-12 13:13:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:13:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:13:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:13:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:13:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:13:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:13:41 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:13:41 --> 0.0004 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:13:41 --> Total execution time: 0.0794
DEBUG - 2021-08-12 13:13:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:13:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:13:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:13:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:13:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:13:56 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:13:56 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:13:56 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:13:56 --> Total execution time: 0.0737
DEBUG - 2021-08-12 13:14:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:14:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:14:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:14:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:14:11 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:14:11 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:14:11 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:14:11 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:14:11 --> Total execution time: 0.0899
DEBUG - 2021-08-12 13:14:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:14:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:14:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:14:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:14:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:14:26 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:14:26 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:14:26 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:14:26 --> Total execution time: 0.0636
DEBUG - 2021-08-12 13:14:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:14:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:14:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:14:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:14:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:14:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:14:41 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:14:41 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:14:41 --> Total execution time: 0.0630
DEBUG - 2021-08-12 13:14:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:14:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:14:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:14:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:14:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:14:56 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:14:56 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:14:56 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:14:56 --> Total execution time: 0.0694
DEBUG - 2021-08-12 13:15:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:15:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:15:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:15:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:15:11 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:15:11 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:15:11 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:15:11 --> 0.0002 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:15:11 --> Total execution time: 0.0802
DEBUG - 2021-08-12 13:15:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:15:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:15:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:15:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:15:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:15:26 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:15:26 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:15:26 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:15:26 --> Total execution time: 0.0816
DEBUG - 2021-08-12 13:15:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:15:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:15:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:15:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:15:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:15:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:15:41 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:15:41 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:15:41 --> Total execution time: 0.1186
DEBUG - 2021-08-12 13:15:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:15:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:15:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:15:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:15:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:15:56 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:15:56 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:15:56 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:15:56 --> Total execution time: 0.0811
DEBUG - 2021-08-12 13:16:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:16:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:16:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:16:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:16:11 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:16:11 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:16:11 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:16:11 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:16:11 --> Total execution time: 0.0733
DEBUG - 2021-08-12 13:16:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:16:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:16:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:16:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:16:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:16:26 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:16:26 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:16:26 --> 0.0002 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:16:26 --> Total execution time: 0.0798
DEBUG - 2021-08-12 13:16:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:16:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:16:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:16:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:16:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:16:41 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:16:41 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:16:41 --> 0.0002 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:16:41 --> Total execution time: 0.0739
DEBUG - 2021-08-12 13:16:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:16:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:16:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:16:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:16:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:16:56 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:16:56 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:16:56 --> 0.0002 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:16:56 --> Total execution time: 0.0723
DEBUG - 2021-08-12 13:17:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:17:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:17:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:17:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:17:11 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:17:11 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:17:11 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:17:11 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:17:11 --> Total execution time: 0.0730
DEBUG - 2021-08-12 13:17:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:17:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:17:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:17:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:17:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:17:26 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:17:26 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:17:26 --> 0.0002 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:17:26 --> Total execution time: 0.0695
DEBUG - 2021-08-12 13:17:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:17:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:17:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:17:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:17:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:17:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:17:41 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:17:41 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:17:41 --> Total execution time: 0.0893
DEBUG - 2021-08-12 13:17:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:17:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:17:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:17:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:17:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:17:56 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:17:56 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:17:56 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:17:56 --> Total execution time: 0.0978
DEBUG - 2021-08-12 13:18:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:18:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:18:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:18:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:18:11 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:18:11 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:18:11 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:18:11 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:18:11 --> Total execution time: 0.0846
DEBUG - 2021-08-12 13:18:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:18:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:18:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:18:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:18:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:18:26 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:18:26 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:18:26 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:18:26 --> Total execution time: 0.0677
DEBUG - 2021-08-12 13:18:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:18:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:18:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:18:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:18:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:18:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:18:41 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:18:41 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:18:41 --> Total execution time: 0.0822
DEBUG - 2021-08-12 13:18:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:18:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:18:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:18:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:18:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:18:56 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:18:56 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:18:56 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:18:56 --> Total execution time: 0.0612
DEBUG - 2021-08-12 13:19:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:19:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:19:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:19:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:19:11 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:19:11 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:19:11 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:19:11 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:19:11 --> Total execution time: 0.0850
DEBUG - 2021-08-12 13:19:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:19:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:19:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:19:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:19:24 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 13:19:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:19:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:19:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:19:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:19:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:19:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:19:25 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:19:25 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:19:25 --> Total execution time: 0.0699
QUERY - 2021-08-12 13:19:38 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:19:38 --> 3.3684 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-12 13:19:38 --> 0.1374 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-12 13:19:38 --> 2.6725 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-12 13:19:38 --> 2.5445 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-12 13:19:38 --> 2.7444 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-12 13:19:38 --> 0.0489 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-12 13:19:38 --> 2.4514 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-12 13:19:38 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:19:38 --> 0.0064 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 13:19:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:19:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:19:38 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 13:19:38 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:19:38 --> Total execution time: 14.0562
DEBUG - 2021-08-12 13:19:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:19:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:19:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:19:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:19:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:19:54 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:19:54 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:19:54 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:19:54 --> Total execution time: 0.0703
DEBUG - 2021-08-12 13:20:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:20:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:20:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:20:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:20:07 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 13:20:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:20:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:20:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:20:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:20:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:20:08 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:20:08 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:20:08 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:20:08 --> Total execution time: 0.0786
DEBUG - 2021-08-12 13:20:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:20:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:20:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:20:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:20:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:20:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:20:24 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:20:24 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:20:24 --> Total execution time: 0.0878
DEBUG - 2021-08-12 13:20:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:20:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:20:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:20:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:20:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:20:39 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:20:39 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:20:39 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:20:39 --> Total execution time: 0.0862
DEBUG - 2021-08-12 13:20:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:20:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:20:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:20:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:20:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:20:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:20:54 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:20:54 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:20:54 --> Total execution time: 0.0738
DEBUG - 2021-08-12 13:21:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:21:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:21:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:21:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:21:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:21:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:21:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:21:09 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:21:09 --> Total execution time: 0.0751
DEBUG - 2021-08-12 13:21:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:21:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:21:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:21:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:21:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:21:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:21:24 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:21:24 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:21:24 --> Total execution time: 0.0651
DEBUG - 2021-08-12 13:21:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:21:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:21:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:21:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:21:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:21:39 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:21:39 --> 0.0006 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:21:39 --> 0.0004 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:21:39 --> Total execution time: 0.0651
DEBUG - 2021-08-12 13:21:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:21:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:21:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:21:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:21:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:21:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:21:54 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:21:54 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:21:54 --> Total execution time: 0.0587
DEBUG - 2021-08-12 13:22:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:22:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:22:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:22:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:22:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:22:09 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:22:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:22:09 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:22:09 --> Total execution time: 0.0825
DEBUG - 2021-08-12 13:22:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:22:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:22:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:22:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:22:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:22:24 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:22:24 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:22:24 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:22:24 --> Total execution time: 0.0842
DEBUG - 2021-08-12 13:22:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:22:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:22:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:22:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:22:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:22:39 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:22:39 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:22:39 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:22:39 --> Total execution time: 0.0712
DEBUG - 2021-08-12 13:22:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:22:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:22:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:22:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:22:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:22:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:22:54 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:22:54 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:22:54 --> Total execution time: 0.0737
DEBUG - 2021-08-12 13:22:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:22:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:22:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:22:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:22:58 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 13:23:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:23:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:23:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:23:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:23:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:23:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:23:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:23:09 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:23:09 --> Total execution time: 0.0694
DEBUG - 2021-08-12 13:23:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:23:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:23:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:23:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:23:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:23:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:23:24 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:23:24 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:23:24 --> Total execution time: 0.0700
DEBUG - 2021-08-12 13:23:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:23:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:23:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:23:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:23:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:23:39 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:23:39 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:23:39 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:23:39 --> Total execution time: 0.0753
DEBUG - 2021-08-12 13:23:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:23:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:23:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:23:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:23:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:23:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:23:54 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:23:54 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:23:54 --> Total execution time: 0.0727
DEBUG - 2021-08-12 13:24:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:24:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:24:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:24:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:24:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:24:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:24:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:24:09 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:24:09 --> Total execution time: 0.0811
DEBUG - 2021-08-12 13:24:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:24:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:24:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:24:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:24:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:24:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:24:24 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:24:24 --> 0.0004 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:24:24 --> Total execution time: 0.1084
DEBUG - 2021-08-12 13:24:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:24:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:24:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:24:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:24:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:24:39 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:24:39 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:24:39 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:24:39 --> Total execution time: 0.0595
DEBUG - 2021-08-12 13:24:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:24:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:24:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:24:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:24:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:24:54 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:24:54 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:24:54 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:24:54 --> Total execution time: 0.0671
DEBUG - 2021-08-12 13:25:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:25:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:25:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:25:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:25:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:25:09 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:25:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:25:09 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:25:09 --> Total execution time: 0.0646
DEBUG - 2021-08-12 13:25:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:25:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:25:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:25:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:25:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:25:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:25:24 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:25:24 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:25:24 --> Total execution time: 0.0719
DEBUG - 2021-08-12 13:25:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:25:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:25:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:25:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:25:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:25:39 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:25:39 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:25:39 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:25:39 --> Total execution time: 0.0715
DEBUG - 2021-08-12 13:25:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:25:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:25:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:25:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:25:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:25:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:25:54 --> 0.0006 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:25:54 --> 0.0004 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:25:54 --> Total execution time: 0.0856
DEBUG - 2021-08-12 13:26:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:26:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:26:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:26:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:26:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:26:09 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:26:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:26:09 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:26:09 --> Total execution time: 0.0634
DEBUG - 2021-08-12 13:26:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:26:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:26:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:26:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:26:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:26:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:26:24 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:26:24 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:26:24 --> Total execution time: 0.0947
DEBUG - 2021-08-12 13:26:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:26:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:26:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:26:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:26:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:26:39 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:26:39 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:26:39 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:26:39 --> Total execution time: 0.0618
DEBUG - 2021-08-12 13:26:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:26:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:26:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:26:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:26:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:26:54 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:26:54 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:26:54 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:26:54 --> Total execution time: 0.0681
DEBUG - 2021-08-12 13:27:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:27:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:27:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:27:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:27:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:27:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:27:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:27:09 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:27:09 --> Total execution time: 0.0824
DEBUG - 2021-08-12 13:27:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:27:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:27:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:27:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:27:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:27:24 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:27:24 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:27:24 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:27:24 --> Total execution time: 0.0685
DEBUG - 2021-08-12 13:27:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:27:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:27:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:27:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:27:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:27:39 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:27:39 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:27:39 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:27:39 --> Total execution time: 0.0764
DEBUG - 2021-08-12 13:27:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:27:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:27:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:27:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:27:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:27:54 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:27:54 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:27:54 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:27:54 --> Total execution time: 0.0704
DEBUG - 2021-08-12 13:28:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:28:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:28:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:28:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:28:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:28:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:28:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:28:09 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:28:09 --> Total execution time: 0.0633
DEBUG - 2021-08-12 13:28:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:28:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:28:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:28:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:28:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:28:24 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:28:24 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:28:24 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:28:24 --> Total execution time: 0.0710
DEBUG - 2021-08-12 13:28:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:28:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:28:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:28:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:28:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:28:39 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:28:39 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:28:39 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:28:39 --> Total execution time: 0.0725
DEBUG - 2021-08-12 13:28:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:28:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:28:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:28:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:28:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:28:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:28:54 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:28:54 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:28:54 --> Total execution time: 0.0639
DEBUG - 2021-08-12 13:29:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:29:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:29:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:29:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:29:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:29:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:29:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:29:09 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:29:09 --> Total execution time: 0.0828
DEBUG - 2021-08-12 13:29:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:29:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:29:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:29:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:29:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:29:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:29:24 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:29:24 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:29:24 --> Total execution time: 0.0926
DEBUG - 2021-08-12 13:29:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:29:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:29:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:29:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:29:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:29:39 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:29:39 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:29:39 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:29:39 --> Total execution time: 0.0783
DEBUG - 2021-08-12 13:29:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:29:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:29:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:29:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:29:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:29:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:29:54 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:29:54 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:29:54 --> Total execution time: 0.0860
DEBUG - 2021-08-12 13:30:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:30:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:30:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:30:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:30:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:30:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:30:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:30:09 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:30:09 --> Total execution time: 0.0811
DEBUG - 2021-08-12 13:30:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:30:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:30:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:30:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:30:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:30:24 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:30:24 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:30:24 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:30:24 --> Total execution time: 0.0723
DEBUG - 2021-08-12 13:30:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:30:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:30:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:30:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:30:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:30:39 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:30:39 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:30:39 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:30:39 --> Total execution time: 0.0930
DEBUG - 2021-08-12 13:30:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:30:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:30:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:30:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:30:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:30:54 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:30:54 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:30:54 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:30:54 --> Total execution time: 0.1026
DEBUG - 2021-08-12 13:31:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:31:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:31:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:31:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:31:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:31:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:31:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:31:09 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:31:09 --> Total execution time: 0.0871
DEBUG - 2021-08-12 13:31:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:31:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:31:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:31:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:31:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:31:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:31:24 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:31:24 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:31:24 --> Total execution time: 0.0791
DEBUG - 2021-08-12 13:31:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:31:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:31:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:31:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:31:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:31:39 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:31:39 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:31:39 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:31:39 --> Total execution time: 0.0767
DEBUG - 2021-08-12 13:31:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:31:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:31:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:31:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:31:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:31:54 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:31:54 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:31:54 --> 0.0004 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:31:54 --> Total execution time: 0.0690
DEBUG - 2021-08-12 13:32:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:32:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:32:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:32:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:32:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:32:09 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:32:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:32:09 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:32:09 --> Total execution time: 0.0803
DEBUG - 2021-08-12 13:32:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:32:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:32:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:32:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:32:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:32:24 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:32:24 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:32:24 --> 0.0004 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:32:24 --> Total execution time: 0.2779
DEBUG - 2021-08-12 13:32:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:32:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:32:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:32:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:32:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:32:39 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:32:39 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:32:39 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:32:39 --> Total execution time: 0.0807
DEBUG - 2021-08-12 13:32:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:32:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:32:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:32:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:32:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:32:53 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:32:53 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:32:53 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:32:53 --> Total execution time: 0.0941
DEBUG - 2021-08-12 13:33:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:33:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:33:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:33:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:33:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:33:09 --> 0.0015 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:33:09 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:33:09 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:33:09 --> Total execution time: 0.1236
DEBUG - 2021-08-12 13:33:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:33:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:33:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:33:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:33:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:33:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:33:24 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:33:24 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:33:24 --> Total execution time: 0.0740
DEBUG - 2021-08-12 13:33:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:33:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:33:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:33:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:33:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:33:39 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:33:39 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:33:39 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:33:39 --> Total execution time: 0.0796
DEBUG - 2021-08-12 13:33:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:33:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:33:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:33:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:33:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:33:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:33:54 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:33:54 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:33:54 --> Total execution time: 0.0726
DEBUG - 2021-08-12 13:34:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:34:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:34:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:34:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:34:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:34:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:34:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:34:09 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:34:09 --> Total execution time: 0.0808
DEBUG - 2021-08-12 13:34:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:34:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:34:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:34:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:34:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:34:24 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:34:24 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:34:24 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:34:24 --> Total execution time: 0.0806
DEBUG - 2021-08-12 13:34:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:34:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:34:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:34:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:34:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:34:39 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:34:39 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:34:39 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:34:39 --> Total execution time: 0.0692
DEBUG - 2021-08-12 13:34:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:34:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:34:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:34:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:34:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:34:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:34:54 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:34:54 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:34:54 --> Total execution time: 0.0899
DEBUG - 2021-08-12 13:35:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:35:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:35:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:35:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:35:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:35:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:35:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:35:09 --> 0.0004 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:35:09 --> Total execution time: 0.0851
DEBUG - 2021-08-12 13:35:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:35:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:35:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:35:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:35:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:35:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:35:24 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:35:24 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:35:24 --> Total execution time: 0.0771
DEBUG - 2021-08-12 13:35:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:35:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:35:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:35:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:35:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:35:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:35:38 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:35:38 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:35:38 --> Total execution time: 0.0784
DEBUG - 2021-08-12 13:35:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:35:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:35:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:35:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:35:47 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 13:35:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:35:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:35:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:35:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:35:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:35:53 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:35:53 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:35:53 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:35:53 --> Total execution time: 0.0825
DEBUG - 2021-08-12 13:36:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:36:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:36:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:36:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:36:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:36:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:36:09 --> 0.0007 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:36:09 --> 0.0005 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:36:09 --> Total execution time: 0.0808
DEBUG - 2021-08-12 13:36:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:36:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:36:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:36:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:36:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:36:23 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:36:23 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:36:23 --> 0.0004 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:36:23 --> Total execution time: 0.0909
DEBUG - 2021-08-12 13:36:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:36:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:36:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:36:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:36:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:36:39 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:36:39 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:36:39 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:36:39 --> Total execution time: 0.0754
DEBUG - 2021-08-12 13:36:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:36:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:36:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:36:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:36:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:36:53 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:36:53 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:36:53 --> 0.0005 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:36:53 --> Total execution time: 0.0796
DEBUG - 2021-08-12 13:37:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:37:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:37:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:37:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:37:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:37:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:37:09 --> 0.0006 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:37:09 --> 0.0005 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:37:09 --> Total execution time: 0.0972
DEBUG - 2021-08-12 13:37:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:37:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:37:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:37:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:37:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:37:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:37:24 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 13:37:24 --> 0.0003 | SELECT `fileid` FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 13:37:24 --> Total execution time: 0.0796
DEBUG - 2021-08-12 13:37:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:37:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:37:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:37:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:37:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:37:39 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:37:39 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 13:37:39 --> Total execution time: 0.0803
DEBUG - 2021-08-12 13:37:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:37:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:37:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:37:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:37:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:37:54 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:37:54 --> 0.0027 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 13:37:54 --> Total execution time: 0.0872
DEBUG - 2021-08-12 13:38:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:38:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:38:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:38:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:38:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:38:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:38:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 13:38:09 --> Total execution time: 0.0671
DEBUG - 2021-08-12 13:38:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:38:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:38:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:38:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:38:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:38:23 --> 0.0132 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:38:23 --> 0.0025 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 13:38:23 --> Total execution time: 0.1340
DEBUG - 2021-08-12 13:38:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:38:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:38:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:38:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:38:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:38:39 --> 0.0008 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:38:39 --> 0.0008 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 13:38:39 --> Total execution time: 0.1355
DEBUG - 2021-08-12 13:38:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:38:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:38:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:38:57 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:38:57 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:38:58 --> 0.0046 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:38:58 --> 0.0011 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 13:38:58 --> Total execution time: 3.5224
DEBUG - 2021-08-12 13:39:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:39:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:39:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:39:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:39:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:39:09 --> 0.0035 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:39:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 13:39:09 --> Total execution time: 0.1998
DEBUG - 2021-08-12 13:39:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:39:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:39:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:39:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:39:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:39:24 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:39:24 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 13:39:24 --> Total execution time: 0.1104
DEBUG - 2021-08-12 13:39:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:39:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:39:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:39:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:39:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:39:39 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:39:39 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 13:39:39 --> Total execution time: 0.0917
DEBUG - 2021-08-12 13:39:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:39:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:39:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:39:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:39:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:39:54 --> 0.0149 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:39:54 --> 0.0007 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 13:39:54 --> Total execution time: 0.1488
DEBUG - 2021-08-12 13:40:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:40:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:40:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:40:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:40:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:40:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:40:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 13:40:09 --> Total execution time: 0.0968
DEBUG - 2021-08-12 13:40:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:40:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:40:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:40:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:40:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:40:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:40:24 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 13:40:24 --> Total execution time: 0.0679
DEBUG - 2021-08-12 13:40:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:40:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:40:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:40:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:40:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:40:39 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:40:39 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 13:40:39 --> Total execution time: 0.0867
DEBUG - 2021-08-12 13:40:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:40:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:40:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:40:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:40:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:40:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:40:54 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 13:40:54 --> Total execution time: 0.0814
DEBUG - 2021-08-12 13:41:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:41:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:41:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:41:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:41:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:41:09 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:41:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 13:41:09 --> Total execution time: 0.0805
DEBUG - 2021-08-12 13:41:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:41:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:41:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:41:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:41:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:41:24 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:41:24 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 13:41:24 --> Total execution time: 0.0849
DEBUG - 2021-08-12 13:41:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:41:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:41:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:41:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:41:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:41:39 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:41:39 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 13:41:39 --> Total execution time: 0.0713
DEBUG - 2021-08-12 13:41:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:41:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:41:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:41:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:41:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:41:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:41:54 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 13:41:54 --> Total execution time: 0.0806
DEBUG - 2021-08-12 13:42:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:42:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:42:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:42:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:42:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:42:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:42:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 13:42:09 --> Total execution time: 0.0967
DEBUG - 2021-08-12 13:42:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:42:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:42:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:42:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:42:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:42:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:42:24 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 13:42:24 --> Total execution time: 0.1058
DEBUG - 2021-08-12 13:42:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:42:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:42:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:42:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:42:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:42:39 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:42:39 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 13:42:39 --> Total execution time: 0.0668
DEBUG - 2021-08-12 13:42:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:42:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:42:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:42:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:42:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:42:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:42:54 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 13:42:54 --> Total execution time: 0.0840
DEBUG - 2021-08-12 13:43:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:43:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:43:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:43:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:43:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:43:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:43:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 13:43:09 --> Total execution time: 0.0758
DEBUG - 2021-08-12 13:43:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:43:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:43:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:43:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:43:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:43:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:43:24 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 13:43:24 --> Total execution time: 0.0693
DEBUG - 2021-08-12 13:44:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:44:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:44:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:44:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:44:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:44:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:44:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 13:44:09 --> Total execution time: 0.0860
DEBUG - 2021-08-12 13:44:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:44:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:44:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:44:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:44:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:44:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:44:38 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 13:44:38 --> Total execution time: 0.0948
DEBUG - 2021-08-12 13:44:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:44:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:44:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:44:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:44:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:44:38 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:44:38 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 13:44:38 --> Total execution time: 0.0741
DEBUG - 2021-08-12 13:44:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:44:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:44:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:44:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:44:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:44:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:44:54 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 13:44:54 --> Total execution time: 0.0825
DEBUG - 2021-08-12 13:45:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:45:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:45:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:45:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:45:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:45:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:45:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 13:45:09 --> Total execution time: 0.0876
DEBUG - 2021-08-12 13:45:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:45:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:45:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:45:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:45:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:45:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:45:24 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 13:45:24 --> Total execution time: 0.0732
DEBUG - 2021-08-12 13:45:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:45:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:45:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:45:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:45:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:45:39 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:45:39 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 13:45:39 --> Total execution time: 0.0720
DEBUG - 2021-08-12 13:45:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:45:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:45:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:45:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:45:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:45:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:45:54 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 13:45:54 --> Total execution time: 0.0874
DEBUG - 2021-08-12 13:46:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:46:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:46:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:46:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:46:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:46:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:46:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 13:46:09 --> Total execution time: 0.0650
DEBUG - 2021-08-12 13:46:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:46:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:46:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:46:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:46:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:46:24 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:46:24 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 13:46:24 --> Total execution time: 0.0745
DEBUG - 2021-08-12 13:46:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:46:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:46:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:46:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:46:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:46:39 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:46:39 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 13:46:39 --> Total execution time: 0.0642
DEBUG - 2021-08-12 13:46:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:46:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:46:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:46:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:46:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:46:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:46:54 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 13:46:54 --> Total execution time: 0.0657
DEBUG - 2021-08-12 13:47:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:47:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:47:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:47:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:47:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:47:09 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:47:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 13:47:09 --> Total execution time: 0.0648
DEBUG - 2021-08-12 13:47:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:47:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:47:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:47:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:47:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:47:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:47:24 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 13:47:24 --> Total execution time: 0.0731
DEBUG - 2021-08-12 13:47:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:47:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:47:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:47:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:47:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:47:39 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:47:39 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 13:47:39 --> Total execution time: 0.0822
DEBUG - 2021-08-12 13:47:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:47:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:47:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:47:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:47:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:47:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:47:54 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 13:47:54 --> Total execution time: 0.0721
DEBUG - 2021-08-12 13:48:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:48:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:48:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:48:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:48:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:48:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:48:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 13:48:09 --> Total execution time: 0.0582
DEBUG - 2021-08-12 13:48:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:48:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:48:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:48:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:48:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:48:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:48:24 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 13:48:24 --> Total execution time: 0.0862
DEBUG - 2021-08-12 13:48:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:48:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:48:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:48:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:48:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:48:39 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:48:39 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 13:48:39 --> Total execution time: 0.0689
DEBUG - 2021-08-12 13:48:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:48:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:48:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:48:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:48:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:48:54 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:48:54 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 13:48:54 --> Total execution time: 0.0869
DEBUG - 2021-08-12 13:49:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:49:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:49:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:49:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:49:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:49:09 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:49:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 13:49:09 --> Total execution time: 0.1738
DEBUG - 2021-08-12 13:49:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:49:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:49:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:49:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:49:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:49:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:49:24 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 13:49:24 --> Total execution time: 0.0723
DEBUG - 2021-08-12 13:49:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:49:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:49:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:49:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:49:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:49:39 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:49:39 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 13:49:39 --> Total execution time: 0.0727
DEBUG - 2021-08-12 13:50:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:50:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:50:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:50:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:50:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:50:09 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:50:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 13:50:09 --> Total execution time: 0.0753
DEBUG - 2021-08-12 13:51:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:51:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:51:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:51:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:51:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:51:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:51:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 13:51:09 --> Total execution time: 0.0820
DEBUG - 2021-08-12 13:52:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:52:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:52:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:52:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:52:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:52:09 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:52:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 13:52:09 --> Total execution time: 0.0635
DEBUG - 2021-08-12 13:53:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:53:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:53:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:53:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:53:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:53:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:53:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 13:53:09 --> Total execution time: 0.0706
DEBUG - 2021-08-12 13:54:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:54:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:54:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:54:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:54:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:54:09 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:54:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 13:54:09 --> Total execution time: 0.0853
DEBUG - 2021-08-12 13:55:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:55:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:55:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:55:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:55:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:55:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:55:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 13:55:09 --> Total execution time: 0.5221
DEBUG - 2021-08-12 13:56:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:56:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:56:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:56:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:56:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:56:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:56:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 13:56:09 --> Total execution time: 0.2773
DEBUG - 2021-08-12 13:57:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:57:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:57:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:57:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:57:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:57:09 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:57:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 13:57:09 --> Total execution time: 0.1708
DEBUG - 2021-08-12 13:58:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:58:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:58:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:58:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:58:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:58:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:58:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 13:58:09 --> Total execution time: 0.1870
DEBUG - 2021-08-12 13:59:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 13:59:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 13:59:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 13:59:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 13:59:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 13:59:09 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 13:59:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 13:59:09 --> Total execution time: 0.1322
DEBUG - 2021-08-12 14:00:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:00:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:00:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:00:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:00:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:00:09 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:00:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 14:00:09 --> Total execution time: 0.0748
DEBUG - 2021-08-12 14:01:06 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:01:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:01:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:01:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:01:06 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:01:06 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:01:06 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 14:01:06 --> Total execution time: 0.0683
DEBUG - 2021-08-12 14:01:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:01:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:01:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:01:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:01:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:01:09 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:01:09 --> 0.0029 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 14:01:09 --> Total execution time: 0.1153
DEBUG - 2021-08-12 14:01:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:01:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:01:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:01:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:01:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:01:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:01:24 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 14:01:24 --> Total execution time: 0.0783
DEBUG - 2021-08-12 14:01:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:01:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:01:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:01:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:01:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:01:39 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:01:39 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 14:01:39 --> Total execution time: 0.0891
DEBUG - 2021-08-12 14:01:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:01:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:01:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:01:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:01:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:01:54 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:01:54 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 14:01:54 --> Total execution time: 0.0680
DEBUG - 2021-08-12 14:02:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:02:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:02:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:02:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:02:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:02:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:02:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 14:02:09 --> Total execution time: 0.0708
DEBUG - 2021-08-12 14:02:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:02:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:02:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:02:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:02:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:02:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:02:24 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 14:02:24 --> Total execution time: 0.0864
DEBUG - 2021-08-12 14:02:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:02:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:02:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:02:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:02:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:02:39 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:02:39 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 14:02:39 --> Total execution time: 0.0661
DEBUG - 2021-08-12 14:02:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:02:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:02:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:02:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:02:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:02:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:02:54 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 14:02:54 --> Total execution time: 0.0676
DEBUG - 2021-08-12 14:03:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:03:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:03:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:03:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:03:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:03:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:03:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 14:03:09 --> Total execution time: 0.0749
DEBUG - 2021-08-12 14:03:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:03:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:03:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:03:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:03:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:03:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:03:24 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 14:03:24 --> Total execution time: 0.0672
DEBUG - 2021-08-12 14:03:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:03:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:03:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:03:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:03:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:03:39 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:03:39 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 14:03:39 --> Total execution time: 0.0883
DEBUG - 2021-08-12 14:03:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:03:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:03:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:03:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:03:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:03:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:03:54 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 14:03:54 --> Total execution time: 0.0850
DEBUG - 2021-08-12 14:04:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:04:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:04:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:04:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:04:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:04:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:04:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 14:04:09 --> Total execution time: 0.0749
DEBUG - 2021-08-12 14:04:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:04:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:04:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:04:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:04:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:04:24 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:04:24 --> 0.0007 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 14:04:24 --> Total execution time: 0.0925
DEBUG - 2021-08-12 14:04:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:04:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:04:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:04:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:04:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:04:39 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:04:39 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 14:04:39 --> Total execution time: 0.0829
DEBUG - 2021-08-12 14:04:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:04:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:04:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:04:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:04:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:04:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:04:54 --> 0.0008 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 14:04:54 --> Total execution time: 0.1318
DEBUG - 2021-08-12 14:05:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:05:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:05:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:05:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:05:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:05:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:05:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 14:05:09 --> Total execution time: 0.0756
DEBUG - 2021-08-12 14:05:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:05:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:05:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:05:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:05:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:05:24 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:05:24 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 14:05:24 --> Total execution time: 0.0781
DEBUG - 2021-08-12 14:05:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:05:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:05:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:05:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:05:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:05:39 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:05:39 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 14:05:39 --> Total execution time: 0.0740
DEBUG - 2021-08-12 14:05:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:05:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:05:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:05:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:05:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:05:54 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:05:54 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 14:05:54 --> Total execution time: 0.0845
DEBUG - 2021-08-12 14:06:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:06:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:06:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:06:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:06:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:06:09 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:06:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 14:06:09 --> Total execution time: 0.1076
DEBUG - 2021-08-12 14:06:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:06:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:06:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:06:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:06:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:06:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:06:24 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 14:06:24 --> Total execution time: 0.0590
DEBUG - 2021-08-12 14:06:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:06:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:06:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:06:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:06:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:06:39 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:06:39 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 14:06:39 --> Total execution time: 0.0811
DEBUG - 2021-08-12 14:06:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:06:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:06:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:06:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:06:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:06:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:06:54 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 14:06:54 --> Total execution time: 0.0770
DEBUG - 2021-08-12 14:07:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:07:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:07:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:07:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:07:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:07:09 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:07:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 14:07:09 --> Total execution time: 0.0629
DEBUG - 2021-08-12 14:07:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:07:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:07:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:07:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:07:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:07:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:07:24 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 14:07:24 --> Total execution time: 0.0753
DEBUG - 2021-08-12 14:07:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:07:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:07:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:07:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:07:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:07:39 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:07:39 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 14:07:39 --> Total execution time: 0.0563
DEBUG - 2021-08-12 14:07:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:07:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:07:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:07:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:07:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:07:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:07:54 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 14:07:54 --> Total execution time: 0.1038
DEBUG - 2021-08-12 14:08:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:08:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:08:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:08:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:08:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:08:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:08:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 14:08:09 --> Total execution time: 0.0755
DEBUG - 2021-08-12 14:08:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:08:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:08:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:08:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:08:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:08:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:08:24 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 14:08:24 --> Total execution time: 0.0806
DEBUG - 2021-08-12 14:08:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:08:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:08:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:08:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:08:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:08:39 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:08:39 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 14:08:39 --> Total execution time: 0.0840
DEBUG - 2021-08-12 14:08:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:08:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:08:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:08:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:08:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:08:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:08:54 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 14:08:54 --> Total execution time: 0.0710
DEBUG - 2021-08-12 14:09:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:09:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:09:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:09:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:09:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:09:09 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:09:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 14:09:09 --> Total execution time: 0.0873
DEBUG - 2021-08-12 14:09:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:09:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:09:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:09:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:09:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:09:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:09:24 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 14:09:24 --> Total execution time: 0.0944
DEBUG - 2021-08-12 14:09:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:09:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:09:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:09:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:09:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:09:39 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:09:39 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 14:09:39 --> Total execution time: 0.0779
DEBUG - 2021-08-12 14:09:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:09:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:09:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:09:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:09:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:09:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:09:54 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 14:09:54 --> Total execution time: 0.0696
DEBUG - 2021-08-12 14:10:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:10:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:10:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:10:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:10:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:10:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:10:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 14:10:09 --> Total execution time: 0.0883
DEBUG - 2021-08-12 14:10:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:10:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:10:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:10:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:10:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:10:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:10:24 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 14:10:24 --> Total execution time: 0.0937
DEBUG - 2021-08-12 14:10:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:10:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:10:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:10:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:10:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:10:39 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:10:39 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 14:10:39 --> Total execution time: 0.0732
DEBUG - 2021-08-12 14:10:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:10:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:10:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:10:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:10:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:10:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:10:54 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 14:10:54 --> Total execution time: 0.0727
DEBUG - 2021-08-12 14:11:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:11:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:11:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:11:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:11:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:11:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:11:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 14:11:09 --> Total execution time: 0.0563
DEBUG - 2021-08-12 14:11:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:11:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:11:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:11:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:11:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:11:24 --> 0.0102 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:11:24 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:11:24 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:11:24 --> Total execution time: 0.3112
DEBUG - 2021-08-12 14:11:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:11:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:11:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:11:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:11:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:11:39 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:11:39 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:11:39 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:11:39 --> Total execution time: 0.0655
DEBUG - 2021-08-12 14:11:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:11:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:11:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:11:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:11:50 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 14:11:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:11:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:11:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:11:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:11:54 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 14:13:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:13:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:13:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:13:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:13:02 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:13:16 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:13:16 --> 2.5307 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-12 14:13:16 --> 0.1691 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-12 14:13:16 --> 3.2835 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-12 14:13:16 --> 2.6332 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-12 14:13:16 --> 2.8223 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-12 14:13:16 --> 0.049 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-12 14:13:16 --> 2.5953 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-12 14:13:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:13:16 --> 0.0067 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 14:13:16 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:13:16 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:13:16 --> 0.0006 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 14:13:16 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:13:16 --> Total execution time: 14.2902
DEBUG - 2021-08-12 14:13:32 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:13:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:13:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:13:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:13:32 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:13:32 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:13:32 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:13:32 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:13:32 --> Total execution time: 0.0977
DEBUG - 2021-08-12 14:13:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:13:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:13:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:13:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:13:47 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:13:47 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:13:47 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:13:47 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:13:47 --> Total execution time: 0.0832
DEBUG - 2021-08-12 14:14:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:14:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:14:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:14:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:14:02 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:14:02 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:14:02 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:14:02 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:14:02 --> Total execution time: 0.0819
DEBUG - 2021-08-12 14:14:17 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:14:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:14:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:14:17 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:14:17 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:14:17 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:14:17 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:14:17 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:14:17 --> Total execution time: 0.0885
DEBUG - 2021-08-12 14:14:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:14:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:14:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:14:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:14:26 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 14:14:32 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:14:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:14:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-12 14:14:39 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:14:39 --> 2.6603 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-12 14:14:39 --> 0.0489 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-12 14:14:39 --> 3.0252 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-12 14:14:39 --> 2.3925 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-12 14:14:39 --> 2.7111 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-12 14:14:39 --> 0.0495 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-12 14:14:39 --> 2.4951 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-12 14:14:39 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:14:39 --> 0.0063 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 14:14:39 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:14:39 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:14:39 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 14:14:39 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:14:39 --> Total execution time: 13.4605
DEBUG - 2021-08-12 14:14:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:14:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:14:39 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:14:39 --> 0.0007 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:14:39 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:14:39 --> Total execution time: 7.5762
DEBUG - 2021-08-12 14:14:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:14:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:14:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:14:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:14:45 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 14:14:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:14:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:14:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-12 14:14:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:14:59 --> 2.7212 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-12 14:14:59 --> 0.0501 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-12 14:14:59 --> 2.8056 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-12 14:14:59 --> 2.4336 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-12 14:14:59 --> 2.8881 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-12 14:14:59 --> 0.0491 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-12 14:14:59 --> 2.8756 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-12 14:14:59 --> 0.001 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:14:59 --> 0.0231 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 14:14:59 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:14:59 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:14:59 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 14:14:59 --> 0.0006 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:14:59 --> Total execution time: 13.9293
DEBUG - 2021-08-12 14:14:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:14:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:14:59 --> 0.0025 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:14:59 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:14:59 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:14:59 --> Total execution time: 4.2578
DEBUG - 2021-08-12 14:15:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:15:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:15:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:15:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:15:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:15:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:15:15 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:15:15 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:15:15 --> Total execution time: 0.0818
DEBUG - 2021-08-12 14:15:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:15:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:15:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:15:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:15:30 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:15:30 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:15:30 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:15:30 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:15:30 --> Total execution time: 0.0619
DEBUG - 2021-08-12 14:15:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:15:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:15:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:15:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:15:42 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 14:15:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:15:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:15:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:15:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:15:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:15:56 --> 0.0008 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:15:56 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:15:56 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:15:56 --> Total execution time: 11.8655
DEBUG - 2021-08-12 14:16:32 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:16:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:16:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:16:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:16:32 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 14:18:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:18:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:18:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:18:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:18:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:18:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:18:38 --> 2.6439 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-12 14:18:38 --> 0.0494 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-12 14:18:38 --> 2.3836 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-12 14:18:38 --> 2.6891 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-12 14:18:38 --> 3.9553 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-12 14:18:38 --> 0.0495 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-12 14:18:38 --> 2.6686 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-12 14:18:38 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:18:38 --> 0.0101 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 14:18:38 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:18:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:18:38 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 14:18:38 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:18:38 --> Total execution time: 14.5394
DEBUG - 2021-08-12 14:18:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:18:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:18:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:18:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:18:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:18:55 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:18:55 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:18:55 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:18:55 --> Total execution time: 0.0784
DEBUG - 2021-08-12 14:19:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:19:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:19:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:19:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:19:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:19:10 --> 0.019 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:19:10 --> 0.0116 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:19:10 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:19:10 --> Total execution time: 0.1515
DEBUG - 2021-08-12 14:19:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:19:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:19:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:19:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:19:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:19:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:19:25 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:19:25 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:19:25 --> Total execution time: 0.0778
DEBUG - 2021-08-12 14:19:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:19:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:19:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:19:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:19:33 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 14:19:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:19:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:19:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-12 14:19:47 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:19:47 --> 2.4636 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-12 14:19:47 --> 0.0493 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-12 14:19:47 --> 2.3622 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-12 14:19:47 --> 3.3217 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-12 14:19:47 --> 3.3664 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-12 14:19:47 --> 0.0493 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-12 14:19:47 --> 3.0617 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-12 14:19:47 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:19:47 --> 0.0068 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 14:19:47 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:19:47 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:19:47 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 14:19:47 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:19:47 --> Total execution time: 14.7558
DEBUG - 2021-08-12 14:19:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:19:47 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:19:47 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:19:47 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:19:47 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:19:47 --> Total execution time: 8.5631
DEBUG - 2021-08-12 14:20:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:20:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:20:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:20:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:20:00 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 14:20:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:20:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:20:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-12 14:20:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:20:15 --> 2.5779 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-12 14:20:15 --> 0.0489 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-12 14:20:15 --> 2.4844 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-12 14:20:15 --> 2.3664 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-12 14:20:15 --> 3.3675 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-12 14:20:15 --> 0.0487 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-12 14:20:15 --> 3.4059 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-12 14:20:15 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:20:15 --> 0.0068 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 14:20:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:20:15 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:20:15 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 14:20:15 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:20:15 --> Total execution time: 14.3821
DEBUG - 2021-08-12 14:20:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:20:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:20:15 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:20:15 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:20:15 --> 0.0007 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:20:15 --> Total execution time: 12.0983
DEBUG - 2021-08-12 14:20:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:20:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:20:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:20:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:20:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:20:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:20:31 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:20:31 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:20:31 --> Total execution time: 0.0779
DEBUG - 2021-08-12 14:20:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:20:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:20:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:20:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:20:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:20:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:20:46 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:20:46 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:20:46 --> Total execution time: 0.0774
DEBUG - 2021-08-12 14:20:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:20:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:20:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:20:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:20:52 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 14:21:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:21:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:21:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:21:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:21:05 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:21:05 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:21:05 --> 0.0033 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:21:05 --> 0.001 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:21:05 --> Total execution time: 5.3138
DEBUG - 2021-08-12 14:21:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:21:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:21:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:21:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:21:22 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 14:21:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:21:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:21:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:21:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:21:45 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 14:22:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:22:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:22:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:22:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:22:28 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 14:23:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:23:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:23:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:23:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:23:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:24:11 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:24:11 --> 2.4916 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-12 14:24:11 --> 0.0496 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-12 14:24:11 --> 3.2392 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-12 14:24:11 --> 2.7887 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-12 14:24:11 --> 2.7116 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-12 14:24:11 --> 0.0491 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-12 14:24:11 --> 2.4725 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-12 14:24:11 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:24:11 --> 0.0069 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 14:24:11 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:24:11 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:24:11 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 14:24:11 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:24:11 --> Total execution time: 13.9141
DEBUG - 2021-08-12 14:24:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:24:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:24:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:24:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:24:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:24:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:24:28 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:24:28 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:24:28 --> Total execution time: 0.0865
DEBUG - 2021-08-12 14:24:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:24:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:24:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:24:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:24:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:24:43 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:24:43 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:24:43 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:24:43 --> Total execution time: 0.0858
DEBUG - 2021-08-12 14:24:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:24:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:24:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:24:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:24:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:24:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:24:58 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:24:58 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:24:58 --> Total execution time: 0.0805
DEBUG - 2021-08-12 14:25:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:25:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:25:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:25:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:25:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:25:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:25:13 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:25:13 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:25:13 --> Total execution time: 0.0849
DEBUG - 2021-08-12 14:25:19 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:25:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:25:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:25:19 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:25:19 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 14:25:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:25:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:25:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-12 14:25:33 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:25:33 --> 2.9908 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-12 14:25:33 --> 0.0501 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-12 14:25:33 --> 3.2939 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-12 14:25:33 --> 2.5779 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-12 14:25:33 --> 2.5777 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-12 14:25:33 --> 0.0497 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-12 14:25:33 --> 2.6271 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-12 14:25:33 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:25:33 --> 0.007 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 14:25:33 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:25:33 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:25:33 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 14:25:33 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:25:33 --> Total execution time: 14.2496
DEBUG - 2021-08-12 14:25:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:25:33 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:25:33 --> 0.0014 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:25:33 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:25:33 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:25:33 --> Total execution time: 5.7706
DEBUG - 2021-08-12 14:25:49 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:25:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:25:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:25:49 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:25:49 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:25:49 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:25:49 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:25:49 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:25:49 --> Total execution time: 0.0715
DEBUG - 2021-08-12 14:26:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:26:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:26:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:26:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:26:04 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:26:04 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:26:04 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:26:04 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:26:04 --> Total execution time: 0.0923
DEBUG - 2021-08-12 14:26:19 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:26:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:26:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:26:19 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:26:19 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:26:19 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:26:19 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:26:19 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:26:19 --> Total execution time: 0.0945
DEBUG - 2021-08-12 14:26:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:26:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:26:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:26:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:26:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:26:34 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:26:34 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:26:34 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:26:34 --> Total execution time: 0.0839
DEBUG - 2021-08-12 14:26:49 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:26:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:26:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:26:49 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:26:49 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:26:49 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:26:49 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:26:49 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:26:49 --> Total execution time: 0.1112
DEBUG - 2021-08-12 14:27:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:27:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:27:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:27:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:27:04 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:27:04 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:27:04 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:27:04 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:27:04 --> Total execution time: 0.0771
DEBUG - 2021-08-12 14:27:19 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:27:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:27:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:27:19 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:27:19 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:27:19 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:27:19 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:27:19 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:27:19 --> Total execution time: 0.0685
DEBUG - 2021-08-12 14:27:32 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:27:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:27:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:27:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:27:32 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 14:27:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:27:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:27:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:27:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:27:47 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:27:47 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:27:47 --> 0.0007 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:27:47 --> 0.0007 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:27:47 --> Total execution time: 13.1370
DEBUG - 2021-08-12 14:28:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:28:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:28:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:28:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:28:24 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 14:29:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:29:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:29:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:29:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:29:55 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 14:31:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:31:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:31:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:31:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:31:01 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 14:31:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:31:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:31:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:31:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:31:54 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 14:33:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:33:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:33:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:33:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:33:37 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 14:34:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:34:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:34:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:34:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:34:01 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 14:37:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:37:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:37:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:37:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:37:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:37:38 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:37:38 --> 2.4165 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-12 14:37:38 --> 0.0493 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-12 14:37:38 --> 2.4727 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-12 14:37:38 --> 2.3334 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-12 14:37:38 --> 3.1555 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-12 14:37:38 --> 0.0496 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-12 14:37:38 --> 2.3677 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-12 14:37:38 --> 0.0007 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:37:38 --> 0.009 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 14:37:38 --> 0.0009 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:37:38 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:37:38 --> 0.0006 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 14:37:38 --> 0.0006 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:37:38 --> Total execution time: 12.9463
DEBUG - 2021-08-12 14:37:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:37:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:37:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:37:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:37:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:37:54 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:37:54 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:37:54 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:37:54 --> Total execution time: 0.1330
DEBUG - 2021-08-12 14:38:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:38:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:38:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:38:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:38:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:38:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:38:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:38:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:38:09 --> Total execution time: 0.0701
DEBUG - 2021-08-12 14:38:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:38:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:38:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:38:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:38:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:38:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:38:24 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:38:24 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:38:24 --> Total execution time: 0.0842
DEBUG - 2021-08-12 14:38:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:38:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:38:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:38:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:38:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:38:39 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:38:39 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:38:39 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:38:39 --> Total execution time: 0.0764
DEBUG - 2021-08-12 14:38:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:38:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:38:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:38:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:38:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:38:54 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:38:54 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:38:54 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:38:54 --> Total execution time: 0.0686
DEBUG - 2021-08-12 14:39:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:39:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:39:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:39:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:39:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:39:09 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:39:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:39:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:39:09 --> Total execution time: 0.0765
DEBUG - 2021-08-12 14:39:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:39:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:39:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:39:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:39:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:39:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:39:24 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:39:24 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:39:24 --> Total execution time: 0.0741
DEBUG - 2021-08-12 14:39:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:39:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:39:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:39:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:39:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:39:39 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:39:39 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:39:39 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:39:39 --> Total execution time: 0.0687
DEBUG - 2021-08-12 14:39:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:39:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:39:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:39:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:39:44 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 14:39:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:39:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:39:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-12 14:39:57 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:39:57 --> 2.5997 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-12 14:39:57 --> 0.0495 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-12 14:39:57 --> 2.4389 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-12 14:39:57 --> 2.4343 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-12 14:39:57 --> 2.3881 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-12 14:39:57 --> 0.2466 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-12 14:39:57 --> 2.7083 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-12 14:39:57 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:39:57 --> 0.007 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 14:39:57 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:39:57 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:39:57 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 14:39:57 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:39:57 --> Total execution time: 12.9447
DEBUG - 2021-08-12 14:39:57 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:39:57 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:39:57 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:39:57 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:39:57 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:39:57 --> Total execution time: 3.0934
DEBUG - 2021-08-12 14:40:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:40:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:40:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:40:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:40:12 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:40:12 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:40:12 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:40:12 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:40:12 --> Total execution time: 0.0829
DEBUG - 2021-08-12 14:40:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:40:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:40:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:40:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:40:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:40:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:40:28 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:40:28 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:40:28 --> Total execution time: 0.0638
DEBUG - 2021-08-12 14:40:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:40:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:40:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:40:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:40:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:40:43 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:40:43 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:40:43 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:40:43 --> Total execution time: 0.0742
DEBUG - 2021-08-12 14:40:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:40:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:40:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:40:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:40:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:40:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:40:58 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:40:58 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:40:58 --> Total execution time: 0.0746
DEBUG - 2021-08-12 14:41:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:41:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:41:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:41:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:41:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:41:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:41:13 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:41:13 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:41:13 --> Total execution time: 0.0769
DEBUG - 2021-08-12 14:41:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:41:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:41:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:41:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:41:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:41:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:41:28 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:41:28 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:41:28 --> Total execution time: 0.0913
DEBUG - 2021-08-12 14:41:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:41:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:41:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:41:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:41:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:41:43 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:41:43 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:41:43 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:41:43 --> Total execution time: 0.0720
DEBUG - 2021-08-12 14:41:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:41:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:41:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:41:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:41:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:41:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:41:58 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:41:58 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:41:58 --> Total execution time: 0.0728
DEBUG - 2021-08-12 14:42:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:42:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:42:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:42:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:42:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:42:13 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:42:13 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:42:13 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:42:13 --> Total execution time: 0.0784
DEBUG - 2021-08-12 14:42:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:42:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:42:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:42:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:42:24 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 14:42:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:42:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:42:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-12 14:42:37 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:42:37 --> 2.7523 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-12 14:42:37 --> 0.049 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-12 14:42:37 --> 3.4846 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-12 14:42:37 --> 2.3439 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-12 14:42:37 --> 2.6332 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-12 14:42:37 --> 0.0494 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-12 14:42:37 --> 2.3395 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-12 14:42:37 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:42:37 --> 0.0065 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 14:42:37 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:42:37 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:42:37 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 14:42:37 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:42:37 --> Total execution time: 13.7427
DEBUG - 2021-08-12 14:42:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:42:37 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:42:37 --> 0.0015 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:42:37 --> 0.0009 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:42:37 --> 0.0007 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:42:37 --> Total execution time: 10.3717
DEBUG - 2021-08-12 14:42:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:42:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:42:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:42:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:42:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:42:53 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:42:53 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:42:53 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:42:53 --> Total execution time: 0.0891
DEBUG - 2021-08-12 14:43:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:43:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:43:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:43:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:43:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:43:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:43:08 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:43:08 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:43:08 --> Total execution time: 0.0681
DEBUG - 2021-08-12 14:43:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:43:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:43:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:43:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:43:14 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 14:43:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:43:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:43:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:43:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:43:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:43:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:43:23 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:43:23 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:43:23 --> Total execution time: 0.0672
QUERY - 2021-08-12 14:43:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:43:28 --> 3.1497 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-12 14:43:28 --> 0.0493 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-12 14:43:28 --> 2.5506 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-12 14:43:28 --> 2.4442 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-12 14:43:28 --> 2.9111 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-12 14:43:28 --> 0.0489 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-12 14:43:28 --> 2.7287 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-12 14:43:28 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:43:28 --> 0.0059 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 14:43:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:43:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:43:28 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 14:43:28 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:43:28 --> Total execution time: 13.9763
DEBUG - 2021-08-12 14:43:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:43:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:43:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:43:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:43:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:43:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:43:44 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:43:44 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:43:44 --> Total execution time: 0.0799
DEBUG - 2021-08-12 14:43:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:43:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:43:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:43:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:43:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:43:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:43:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:43:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:43:59 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:43:59 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:43:59 --> Total execution time: 0.1204
DEBUG - 2021-08-12 14:44:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:44:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:44:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:44:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:44:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:44:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:44:14 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:44:14 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:44:14 --> Total execution time: 0.0863
DEBUG - 2021-08-12 14:44:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:44:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:44:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:44:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:44:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:44:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:44:29 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:44:29 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:44:29 --> Total execution time: 0.0783
DEBUG - 2021-08-12 14:44:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:44:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:44:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:44:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:44:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:44:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:44:44 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:44:44 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:44:44 --> Total execution time: 0.0878
DEBUG - 2021-08-12 14:44:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:44:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:44:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:44:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:44:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:44:59 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:44:59 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:44:59 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:44:59 --> Total execution time: 0.0812
DEBUG - 2021-08-12 14:45:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:45:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:45:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:45:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:45:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:45:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:45:14 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:45:14 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:45:14 --> Total execution time: 0.0745
DEBUG - 2021-08-12 14:45:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:45:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:45:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:45:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:45:30 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:45:30 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:45:30 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:45:30 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:45:30 --> Total execution time: 0.0735
DEBUG - 2021-08-12 14:45:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:45:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:45:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:45:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:45:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:45:45 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:45:45 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:45:45 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:45:45 --> Total execution time: 0.0732
DEBUG - 2021-08-12 14:46:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:46:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:46:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:46:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:46:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:46:00 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:46:00 --> 0.0006 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:46:00 --> 0.0005 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:46:00 --> Total execution time: 0.0794
DEBUG - 2021-08-12 14:46:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:46:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:46:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:46:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:46:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:46:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:46:15 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:46:15 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:46:15 --> Total execution time: 0.0819
DEBUG - 2021-08-12 14:46:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:46:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:46:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:46:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:46:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:46:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:46:29 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:46:29 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:46:29 --> Total execution time: 0.0768
DEBUG - 2021-08-12 14:46:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:46:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:46:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:46:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:46:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:46:45 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:46:45 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:46:45 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:46:45 --> Total execution time: 0.0708
DEBUG - 2021-08-12 14:46:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:46:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:46:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:46:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:46:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:46:55 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:46:55 --> 0.1121 | INSERT INTO `csvexportlog` (`export_status`, `filter_col`, `created_datetime`) VALUES (0, 'null', '2021-08-12 14:46:54')
DEBUG - 2021-08-12 14:46:55 --> Total execution time: 0.1811
DEBUG - 2021-08-12 14:46:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:46:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:46:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:46:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:46:55 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 14:47:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:47:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:47:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-12 14:47:13 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:47:13 --> 3.2776 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-12 14:47:13 --> 0.0491 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-12 14:47:13 --> 2.8176 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-12 14:47:13 --> 2.4554 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-12 14:47:13 --> 6.0143 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-12 14:47:13 --> 0.0902 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-12 14:47:13 --> 3.5717 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-12 14:47:13 --> 0.0134 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:47:13 --> 0.0165 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 14:47:13 --> 0.0099 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:47:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:47:13 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 14:47:13 --> 0.0008 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-12 14:47:13 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:47:13 --> Total execution time: 18.3986
DEBUG - 2021-08-12 14:47:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:47:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:47:13 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:47:13 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:47:13 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '2'
QUERY - 2021-08-12 14:47:13 --> 0.0005 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:47:13 --> Total execution time: 13.3590
DEBUG - 2021-08-12 14:47:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:47:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:47:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:47:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:47:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:47:29 --> 0.0239 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:47:29 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 14:47:29 --> Total execution time: 0.1121
DEBUG - 2021-08-12 14:47:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:47:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:47:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:47:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:47:36 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:47:36 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:47:36 --> 0.0826 | INSERT INTO `csvexportlog` (`export_status`, `filter_col`, `created_datetime`) VALUES (0, 'null', '2021-08-12 14:47:36')
DEBUG - 2021-08-12 14:47:36 --> Total execution time: 0.1662
DEBUG - 2021-08-12 14:47:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:47:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:47:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:47:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:47:36 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 14:47:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:47:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:47:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-12 14:47:50 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:47:50 --> 3.6046 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-12 14:47:50 --> 0.0412 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-12 14:47:50 --> 2.4815 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-12 14:47:50 --> 2.4613 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-12 14:47:50 --> 2.5708 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-12 14:47:50 --> 0.0418 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-12 14:47:50 --> 2.5029 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-12 14:47:50 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:47:50 --> 0.01 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 14:47:50 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:47:50 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:47:50 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 14:47:50 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:47:50 --> Total execution time: 13.7963
DEBUG - 2021-08-12 14:47:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:47:50 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:47:50 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:47:50 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:47:50 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:47:50 --> Total execution time: 6.8238
DEBUG - 2021-08-12 14:48:06 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:48:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:48:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:48:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:48:06 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:48:06 --> 0.0029 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:48:06 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:48:06 --> 0.0012 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:48:06 --> Total execution time: 0.1069
DEBUG - 2021-08-12 14:48:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:48:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:48:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:48:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:48:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:48:21 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:48:21 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:48:21 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:48:21 --> Total execution time: 0.1249
DEBUG - 2021-08-12 14:48:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:48:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:48:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:48:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:48:36 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:48:36 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:48:36 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:48:36 --> 0.0006 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:48:36 --> Total execution time: 0.4360
DEBUG - 2021-08-12 14:48:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:48:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:48:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:48:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:48:51 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:48:51 --> 0.001 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:48:51 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:48:51 --> 0.0005 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:48:51 --> Total execution time: 0.5446
DEBUG - 2021-08-12 14:49:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:49:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:49:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:49:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:49:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:49:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:49:06 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:49:06 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:49:06 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:49:06 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:49:06 --> Total execution time: 0.0908
DEBUG - 2021-08-12 14:49:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:49:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:49:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:49:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:49:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:49:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:49:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:49:21 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:49:21 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:49:21 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:49:21 --> Total execution time: 0.0771
DEBUG - 2021-08-12 14:49:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:49:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:49:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:49:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:49:36 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:49:36 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:49:36 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:49:36 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:49:36 --> Total execution time: 0.0865
DEBUG - 2021-08-12 14:49:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:49:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:49:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:49:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:49:51 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:49:51 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:49:51 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:49:51 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:49:51 --> Total execution time: 0.1375
DEBUG - 2021-08-12 14:49:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:49:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:49:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:49:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:49:56 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 14:50:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:50:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:50:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:50:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:50:06 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:50:06 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:50:06 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:50:06 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:50:06 --> Total execution time: 0.0854
DEBUG - 2021-08-12 14:50:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:50:18 --> Global POST, GET and COOKIE data sanitized
QUERY - 2021-08-12 14:50:21 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:50:21 --> 4.8601 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-12 14:50:21 --> 0.0462 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-12 14:50:21 --> 3.8178 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-12 14:50:21 --> 5.7667 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-12 14:50:21 --> 3.9111 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-12 14:50:21 --> 0.0935 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-12 14:50:21 --> 5.9419 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-12 14:50:21 --> 0.0006 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:50:21 --> 0.0139 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 14:50:21 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:50:21 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:50:21 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 14:50:21 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:50:21 --> Total execution time: 24.5373
DEBUG - 2021-08-12 14:50:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:50:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:50:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:50:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:50:37 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:50:37 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:50:37 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:50:37 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:50:37 --> Total execution time: 0.0819
DEBUG - 2021-08-12 14:50:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:50:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:50:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:50:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:50:52 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:50:52 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:50:52 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:50:52 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:50:52 --> Total execution time: 0.0992
DEBUG - 2021-08-12 14:51:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:51:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:51:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:51:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:51:07 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:51:07 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:51:07 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:51:07 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:51:07 --> Total execution time: 0.0702
DEBUG - 2021-08-12 14:51:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:51:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:51:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:51:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:51:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:51:22 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:51:22 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:51:22 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:51:22 --> Total execution time: 0.0718
DEBUG - 2021-08-12 14:51:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:51:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:51:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:51:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:51:37 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:51:37 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:51:37 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:51:37 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:51:37 --> Total execution time: 0.0734
DEBUG - 2021-08-12 14:51:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:51:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:51:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:51:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:51:52 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:51:52 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:51:52 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 14:51:52 --> Total execution time: 0.0754
DEBUG - 2021-08-12 14:51:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:51:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:51:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:51:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:51:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:51:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:51:58 --> 0.0797 | INSERT INTO `csvexportlog` (`export_status`, `filter_col`, `created_datetime`) VALUES (0, 'null', '2021-08-12 14:51:58')
DEBUG - 2021-08-12 14:51:58 --> Total execution time: 0.1569
DEBUG - 2021-08-12 14:51:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:51:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:51:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:51:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:51:59 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 14:52:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:52:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:52:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-12 14:52:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:52:13 --> 3.3551 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-12 14:52:13 --> 0.0527 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-12 14:52:13 --> 2.7802 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-12 14:52:13 --> 2.3229 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-12 14:52:13 --> 2.7442 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-12 14:52:13 --> 0.0751 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-12 14:52:13 --> 2.8132 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-12 14:52:13 --> 0.0069 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:52:13 --> 0.0137 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 14:52:13 --> 0.009 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:52:13 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:52:13 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 14:52:13 --> 0.0143 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:52:13 --> Total execution time: 14.2564
DEBUG - 2021-08-12 14:52:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:52:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:52:13 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:52:13 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:52:13 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:52:13 --> Total execution time: 6.0502
DEBUG - 2021-08-12 14:52:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:52:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:52:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:52:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:52:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:52:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:52:29 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:52:29 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:52:29 --> Total execution time: 0.0643
DEBUG - 2021-08-12 14:52:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:52:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:52:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:52:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:52:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:52:44 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:52:44 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:52:44 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:52:44 --> Total execution time: 0.0849
DEBUG - 2021-08-12 14:52:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:52:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:52:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:52:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:52:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:52:59 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:52:59 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:52:59 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:52:59 --> Total execution time: 0.0730
DEBUG - 2021-08-12 14:53:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:53:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:53:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:53:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:53:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:53:14 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:53:14 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:53:14 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:53:14 --> Total execution time: 0.0585
DEBUG - 2021-08-12 14:53:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:53:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:53:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:53:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:53:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:53:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:53:29 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:53:29 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:53:29 --> Total execution time: 0.0685
DEBUG - 2021-08-12 14:53:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:53:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:53:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:53:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:53:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:53:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:53:44 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:53:44 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:53:44 --> Total execution time: 0.0760
DEBUG - 2021-08-12 14:53:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:53:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:53:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:53:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:53:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:53:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:53:59 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:53:59 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:53:59 --> Total execution time: 0.0953
DEBUG - 2021-08-12 14:54:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:54:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:54:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:54:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:54:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:54:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:54:14 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:54:14 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:54:14 --> Total execution time: 0.0807
DEBUG - 2021-08-12 14:54:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:54:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:54:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:54:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:54:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:54:29 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:54:29 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:54:29 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:54:29 --> Total execution time: 0.0763
DEBUG - 2021-08-12 14:54:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:54:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:54:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:54:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:54:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:54:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:54:44 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:54:44 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:54:44 --> Total execution time: 0.0815
DEBUG - 2021-08-12 14:54:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:54:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:54:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:54:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:54:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:54:59 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:54:59 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:54:59 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:54:59 --> Total execution time: 0.0853
DEBUG - 2021-08-12 14:55:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:55:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:55:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:55:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:55:12 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 14:55:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:55:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:55:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:55:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:55:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:55:13 --> 0.0292 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:55:13 --> 0.0362 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 14:55:13 --> Total execution time: 0.1493
DEBUG - 2021-08-12 14:55:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:55:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:55:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:55:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:55:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:55:28 --> 0.04 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:55:28 --> 0.0598 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 14:55:28 --> Total execution time: 0.1662
DEBUG - 2021-08-12 14:55:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:55:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:55:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:55:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:55:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:55:38 --> 0.0503 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:55:38 --> 0.3029 | INSERT INTO `csvexportlog` (`export_status`, `filter_col`, `created_datetime`) VALUES (0, 'null', '2021-08-12 14:55:38')
DEBUG - 2021-08-12 14:55:38 --> Total execution time: 0.4407
DEBUG - 2021-08-12 14:55:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:55:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:55:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:55:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:55:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:55:42 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:55:42 --> 4.611 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-12 14:55:42 --> 0.0491 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-12 14:55:42 --> 8.1733 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-12 14:55:42 --> 3.9555 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-12 14:55:42 --> 6.6004 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-12 14:55:42 --> 0.0493 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-12 14:55:42 --> 5.8888 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-12 14:55:42 --> 0.1159 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:55:42 --> 0.1196 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 14:55:42 --> 0.0558 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:55:42 --> 0.001 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:55:42 --> 0.002 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 14:55:42 --> 0.0229 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:55:42 --> Total execution time: 29.7468
DEBUG - 2021-08-12 14:55:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:55:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:55:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:55:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:55:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:55:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:56:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:56:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:56:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-12 14:56:19 --> 0.1618 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:56:19 --> 6.4967 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-12 14:56:19 --> 0.0539 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-12 14:56:19 --> 8.0618 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-12 14:56:19 --> 4.7011 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-12 14:56:19 --> 14.8238 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-12 14:56:19 --> 0.0798 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-12 14:56:19 --> 6.0838 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-12 14:56:19 --> 0.0107 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:56:19 --> 0.0078 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 14:56:19 --> 0.0312 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:56:19 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:56:19 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 14:56:19 --> 0.0115 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:56:19 --> Total execution time: 40.6063
DEBUG - 2021-08-12 14:56:19 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:56:19 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:56:19 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:56:19 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:56:19 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:56:19 --> Total execution time: 35.6579
DEBUG - 2021-08-12 14:56:19 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:56:19 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:56:19 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:56:19 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:56:19 --> 0.0005 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:56:19 --> Total execution time: 20.7014
DEBUG - 2021-08-12 14:56:19 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:56:19 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:56:19 --> 0.0009 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:56:19 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:56:19 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:56:19 --> Total execution time: 5.6569
DEBUG - 2021-08-12 14:56:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:56:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:56:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:56:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:56:37 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:56:37 --> 0.0205 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:56:37 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:56:37 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:56:37 --> Total execution time: 0.0895
DEBUG - 2021-08-12 14:56:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:56:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:56:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:56:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:56:52 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:56:52 --> 0.0178 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:56:52 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:56:52 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:56:52 --> Total execution time: 0.1006
DEBUG - 2021-08-12 14:57:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:57:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:57:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:57:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:57:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:57:09 --> 0.3701 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:57:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:57:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:57:09 --> Total execution time: 1.9784
DEBUG - 2021-08-12 14:57:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:57:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:57:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:57:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:57:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:57:22 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:57:22 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:57:22 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:57:22 --> Total execution time: 0.0830
DEBUG - 2021-08-12 14:57:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:57:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:57:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:57:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:57:36 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:57:36 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:57:36 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:57:36 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:57:36 --> Total execution time: 0.0780
DEBUG - 2021-08-12 14:57:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:57:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:57:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:57:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:57:51 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:57:51 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:57:51 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:57:51 --> 0.0005 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:57:51 --> Total execution time: 0.0726
DEBUG - 2021-08-12 14:58:06 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:58:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:58:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:58:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:58:06 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:58:06 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:58:06 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:58:06 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:58:06 --> Total execution time: 0.0887
DEBUG - 2021-08-12 14:58:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:58:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:58:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:58:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:58:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:58:22 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:58:22 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:58:22 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:58:22 --> Total execution time: 0.0795
DEBUG - 2021-08-12 14:58:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:58:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:58:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:58:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:58:37 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:58:37 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:58:37 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:58:37 --> 0.0005 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:58:37 --> Total execution time: 0.0731
DEBUG - 2021-08-12 14:58:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:58:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:58:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:58:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:58:42 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 14:58:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:58:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:58:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:59:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:59:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:59:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-12 14:59:12 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:59:12 --> 10.1254 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-12 14:59:12 --> 0.3122 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-12 14:59:12 --> 6.9288 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-12 14:59:12 --> 3.7999 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-12 14:59:12 --> 3.3554 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-12 14:59:12 --> 0.0492 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-12 14:59:12 --> 6.1868 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-12 14:59:12 --> 0.0011 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:59:12 --> 0.0786 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 14:59:12 --> 0.0013 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:59:12 --> 0.001 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:59:12 --> 0.0012 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 14:59:12 --> 0.0011 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:59:12 --> Total execution time: 30.9300
DEBUG - 2021-08-12 14:59:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:59:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:59:13 --> 0.0011 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:59:13 --> 0.0006 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:59:13 --> 0.004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:59:13 --> Total execution time: 21.6692
DEBUG - 2021-08-12 14:59:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:59:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:59:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:59:13 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:59:13 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:59:13 --> Total execution time: 5.8025
DEBUG - 2021-08-12 14:59:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:59:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:59:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:59:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:59:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:59:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:59:28 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:59:28 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:59:28 --> Total execution time: 0.0779
DEBUG - 2021-08-12 14:59:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:59:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:59:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:59:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:59:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:59:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:59:44 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:59:44 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:59:44 --> Total execution time: 0.0840
DEBUG - 2021-08-12 14:59:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 14:59:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 14:59:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 14:59:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 14:59:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 14:59:59 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 14:59:59 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 14:59:59 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 14:59:59 --> Total execution time: 0.0767
DEBUG - 2021-08-12 15:00:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:00:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:00:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:00:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:00:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:00:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:00:14 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:00:14 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:00:14 --> Total execution time: 0.0763
DEBUG - 2021-08-12 15:00:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:00:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:00:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:00:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:00:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:00:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:00:29 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:00:29 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:00:29 --> Total execution time: 0.0816
DEBUG - 2021-08-12 15:00:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:00:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:00:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:00:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:00:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:00:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:00:44 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:00:44 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:00:44 --> Total execution time: 0.0753
DEBUG - 2021-08-12 15:00:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:00:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:00:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:00:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:00:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:00:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:00:59 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:00:59 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:00:59 --> Total execution time: 0.0926
DEBUG - 2021-08-12 15:01:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:01:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:01:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:01:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:01:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:01:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:01:14 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:01:14 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:01:14 --> Total execution time: 0.0808
DEBUG - 2021-08-12 15:01:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:01:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:01:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:01:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:01:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:01:29 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:01:29 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:01:29 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:01:29 --> Total execution time: 0.0857
DEBUG - 2021-08-12 15:01:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:01:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:01:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:01:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:01:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:01:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:01:44 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:01:44 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:01:44 --> Total execution time: 0.0771
DEBUG - 2021-08-12 15:01:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:01:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:01:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:01:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:01:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:01:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:01:59 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:01:59 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:01:59 --> Total execution time: 0.0818
DEBUG - 2021-08-12 15:02:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:02:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:02:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:02:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:02:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:02:14 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:02:14 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:02:14 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:02:14 --> Total execution time: 0.0742
DEBUG - 2021-08-12 15:02:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:02:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:02:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:02:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:02:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:02:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:02:29 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:02:29 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:02:29 --> Total execution time: 0.1357
DEBUG - 2021-08-12 15:02:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:02:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:02:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:02:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:02:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:02:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:02:44 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:02:44 --> 0.0005 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:02:44 --> Total execution time: 0.0787
DEBUG - 2021-08-12 15:02:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:02:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:02:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:02:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:02:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:02:59 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:02:59 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:02:59 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:02:59 --> Total execution time: 0.0752
DEBUG - 2021-08-12 15:03:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:03:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:03:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:03:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:03:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:03:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:03:14 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:03:14 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:03:14 --> Total execution time: 0.0878
DEBUG - 2021-08-12 15:03:19 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:03:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:03:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:03:19 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:03:19 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 15:03:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:03:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:03:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:03:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:03:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:03:29 --> 0.0216 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:03:29 --> 0.0843 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:03:29 --> 0.1294 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:03:29 --> Total execution time: 0.3341
QUERY - 2021-08-12 15:03:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:03:38 --> 3.136 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-12 15:03:38 --> 0.0409 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-12 15:03:38 --> 2.3831 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-12 15:03:38 --> 2.9892 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-12 15:03:38 --> 4.5566 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-12 15:03:38 --> 0.2601 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-12 15:03:38 --> 4.751 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-12 15:03:38 --> 0.01 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:03:38 --> 0.0073 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 15:03:38 --> 0.0093 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:03:38 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:03:38 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-12 15:03:38 --> Total execution time: 18.2254
DEBUG - 2021-08-12 15:03:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:03:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:03:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:03:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:03:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:03:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:03:40 --> 0.1445 | INSERT INTO `csvexportlog` (`export_status`, `filter_col`, `created_datetime`) VALUES (0, 'null', '2021-08-12 15:03:40')
DEBUG - 2021-08-12 15:03:40 --> Total execution time: 0.2236
DEBUG - 2021-08-12 15:03:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:03:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:03:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:03:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:03:40 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 15:03:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:03:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:03:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-12 15:03:54 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:03:54 --> 3.1047 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-12 15:03:54 --> 0.0484 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-12 15:03:54 --> 2.5403 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-12 15:03:54 --> 2.6666 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-12 15:03:54 --> 2.8998 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-12 15:03:54 --> 0.0491 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-12 15:03:54 --> 2.4286 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-12 15:03:54 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:03:54 --> 0.0063 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 15:03:54 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:03:54 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:03:54 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 15:03:54 --> 0.0094 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:03:54 --> Total execution time: 13.8255
DEBUG - 2021-08-12 15:03:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:03:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:03:54 --> 0.0011 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:03:54 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:03:54 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:03:54 --> Total execution time: 1.0320
DEBUG - 2021-08-12 15:04:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:04:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:04:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:04:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:04:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:04:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:04:10 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:04:10 --> 0.0141 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:04:10 --> Total execution time: 0.0987
DEBUG - 2021-08-12 15:04:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:04:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:04:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:04:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:04:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:04:25 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:04:25 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:04:25 --> 0.0741 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:04:25 --> Total execution time: 0.3059
DEBUG - 2021-08-12 15:04:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:04:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:04:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:04:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:04:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:04:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:04:40 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:04:40 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:04:40 --> Total execution time: 0.0791
DEBUG - 2021-08-12 15:04:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:04:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:04:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:04:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:04:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:04:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:04:55 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:04:55 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:04:55 --> Total execution time: 0.0817
DEBUG - 2021-08-12 15:05:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:05:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:05:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:05:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:05:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:05:10 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:05:10 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:05:10 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:05:10 --> Total execution time: 0.0743
DEBUG - 2021-08-12 15:05:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:05:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:05:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:05:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:05:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:05:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:05:25 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:05:25 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:05:25 --> Total execution time: 0.0821
DEBUG - 2021-08-12 15:05:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:05:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:05:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:05:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:05:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:05:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:05:40 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:05:40 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:05:40 --> Total execution time: 0.1200
DEBUG - 2021-08-12 15:05:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:05:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:05:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:05:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:05:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:05:55 --> 0.0065 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:05:55 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:05:55 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:05:55 --> Total execution time: 0.1138
DEBUG - 2021-08-12 15:06:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:06:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:06:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:06:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:06:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:06:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:06:10 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:06:10 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:06:10 --> Total execution time: 0.0742
DEBUG - 2021-08-12 15:06:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:06:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:06:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:06:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:06:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:06:25 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:06:25 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:06:25 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:06:25 --> Total execution time: 0.0719
DEBUG - 2021-08-12 15:06:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:06:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:06:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:06:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:06:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:06:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:06:40 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:06:40 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:06:40 --> Total execution time: 0.0769
DEBUG - 2021-08-12 15:06:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:06:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:06:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:06:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:06:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:06:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:06:55 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:06:55 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:06:55 --> Total execution time: 0.0846
DEBUG - 2021-08-12 15:07:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:07:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:07:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:07:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:07:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:07:10 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:07:10 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:07:10 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:07:10 --> Total execution time: 0.0867
DEBUG - 2021-08-12 15:07:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:07:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:07:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:07:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:07:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:07:25 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:07:25 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:07:25 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:07:25 --> Total execution time: 0.0754
DEBUG - 2021-08-12 15:07:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:07:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:07:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:07:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:07:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:07:40 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:07:40 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:07:40 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:07:40 --> Total execution time: 0.0836
DEBUG - 2021-08-12 15:07:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:07:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:07:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:07:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:07:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:07:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:07:55 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:07:55 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:07:55 --> Total execution time: 0.0751
DEBUG - 2021-08-12 15:08:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:08:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:08:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:08:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:08:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:08:10 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:08:10 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:08:10 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:08:10 --> Total execution time: 0.0757
DEBUG - 2021-08-12 15:08:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:08:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:08:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:08:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:08:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:08:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:08:25 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:08:25 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:08:25 --> Total execution time: 0.0762
DEBUG - 2021-08-12 15:08:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:08:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:08:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:08:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:08:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:08:40 --> 0.0013 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:08:40 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:08:40 --> 0.0007 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:08:40 --> Total execution time: 0.0958
DEBUG - 2021-08-12 15:08:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:08:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:08:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:08:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:08:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:08:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:08:55 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:08:55 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:08:55 --> Total execution time: 0.0835
DEBUG - 2021-08-12 15:09:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:09:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:09:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:09:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:09:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:09:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:09:10 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:09:10 --> 0.0008 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:09:10 --> Total execution time: 0.0810
DEBUG - 2021-08-12 15:09:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:09:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:09:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:09:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:09:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:09:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:09:25 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:09:25 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:09:25 --> Total execution time: 0.0780
DEBUG - 2021-08-12 15:09:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:09:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:09:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:09:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:09:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:09:40 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:09:40 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:09:40 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:09:40 --> Total execution time: 0.0751
DEBUG - 2021-08-12 15:09:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:09:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:09:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:09:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:09:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:09:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:09:55 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:09:55 --> 0.0005 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:09:55 --> Total execution time: 0.1159
DEBUG - 2021-08-12 15:10:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:10:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:10:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:10:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:10:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:10:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:10:10 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:10:10 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:10:10 --> Total execution time: 0.0764
DEBUG - 2021-08-12 15:10:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:10:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:10:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:10:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:10:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:10:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:10:25 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:10:25 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:10:25 --> Total execution time: 0.0807
DEBUG - 2021-08-12 15:10:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:10:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:10:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:10:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:10:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:10:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:10:40 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:10:40 --> 0.001 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:10:40 --> Total execution time: 0.0915
DEBUG - 2021-08-12 15:10:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:10:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:10:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:10:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:10:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:10:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:10:55 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:10:55 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:10:55 --> Total execution time: 0.0855
DEBUG - 2021-08-12 15:11:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:11:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:11:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:11:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:11:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:11:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:11:10 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:11:10 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:11:10 --> Total execution time: 0.0805
DEBUG - 2021-08-12 15:11:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:11:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:11:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:11:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:11:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:11:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:11:25 --> 0.0008 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:11:25 --> 0.0005 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:11:25 --> Total execution time: 0.0939
DEBUG - 2021-08-12 15:11:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:11:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:11:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:11:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:11:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:11:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:11:40 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:11:40 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:11:40 --> Total execution time: 0.0874
DEBUG - 2021-08-12 15:11:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:11:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:11:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:11:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:11:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:11:55 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:11:55 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:11:55 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:11:55 --> Total execution time: 0.0689
DEBUG - 2021-08-12 15:12:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:12:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:12:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:12:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:12:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:12:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:12:10 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:12:10 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:12:10 --> Total execution time: 0.0825
DEBUG - 2021-08-12 15:12:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:12:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:12:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:12:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:12:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:12:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:12:25 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:12:25 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:12:25 --> Total execution time: 0.0738
DEBUG - 2021-08-12 15:12:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:12:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:12:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:12:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:12:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:12:40 --> 0.001 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:12:40 --> 0.0011 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:12:40 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:12:40 --> Total execution time: 0.1013
DEBUG - 2021-08-12 15:12:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:12:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:12:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:12:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:12:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:12:55 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:12:55 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:12:55 --> 0.0006 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:12:55 --> Total execution time: 0.0846
DEBUG - 2021-08-12 15:13:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:13:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:13:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:13:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:13:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:13:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:13:10 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:13:10 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:13:10 --> Total execution time: 0.0841
DEBUG - 2021-08-12 15:13:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:13:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:13:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:13:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:13:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:13:25 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:13:25 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:13:25 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:13:25 --> Total execution time: 0.0889
DEBUG - 2021-08-12 15:13:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:13:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:13:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:13:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:13:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:13:40 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:13:40 --> 0.0017 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:13:40 --> 0.0006 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:13:40 --> Total execution time: 0.0862
DEBUG - 2021-08-12 15:13:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:13:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:13:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:13:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:13:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:13:55 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:13:55 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:13:55 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:13:55 --> Total execution time: 0.0826
DEBUG - 2021-08-12 15:14:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:14:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:14:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:14:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:14:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:14:10 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:14:10 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:14:10 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:14:10 --> Total execution time: 0.0951
DEBUG - 2021-08-12 15:14:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:14:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:14:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:14:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:14:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:14:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:14:25 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:14:25 --> 0.0008 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:14:25 --> Total execution time: 0.0897
DEBUG - 2021-08-12 15:14:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:14:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:14:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:14:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:14:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:14:40 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:14:40 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:14:40 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:14:40 --> Total execution time: 0.0843
DEBUG - 2021-08-12 15:14:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:14:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:14:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:14:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:14:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:14:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:14:55 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:14:55 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:14:55 --> Total execution time: 0.0738
DEBUG - 2021-08-12 15:15:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:15:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:15:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:15:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:15:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:15:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:15:10 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:15:10 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:15:10 --> Total execution time: 0.0825
DEBUG - 2021-08-12 15:15:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:15:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:15:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:15:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:15:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:15:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:15:25 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:15:25 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:15:25 --> Total execution time: 0.0812
DEBUG - 2021-08-12 15:15:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:15:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:15:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:15:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:15:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:15:40 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:15:40 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:15:40 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:15:40 --> Total execution time: 0.0716
DEBUG - 2021-08-12 15:15:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:15:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:15:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:15:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:15:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:15:55 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:15:55 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:15:55 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:15:55 --> Total execution time: 0.0799
DEBUG - 2021-08-12 15:16:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:16:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:16:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:16:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:16:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:16:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:16:10 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:16:10 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:16:10 --> Total execution time: 0.0846
DEBUG - 2021-08-12 15:16:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:16:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:16:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:16:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:16:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:16:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:16:25 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:16:25 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:16:25 --> Total execution time: 0.0768
DEBUG - 2021-08-12 15:16:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:16:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:16:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:16:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:16:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:16:40 --> 0.0183 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:16:40 --> 0.0007 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:16:40 --> 0.0012 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:16:40 --> Total execution time: 0.1492
DEBUG - 2021-08-12 15:16:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:16:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:16:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:16:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:16:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:16:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:16:55 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:16:55 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:16:55 --> Total execution time: 0.0717
DEBUG - 2021-08-12 15:17:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:17:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:17:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:17:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:17:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:17:10 --> 0.0034 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:17:10 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:17:10 --> 0.0017 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:17:10 --> Total execution time: 0.1051
DEBUG - 2021-08-12 15:17:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:17:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:17:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:17:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:17:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:17:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:17:25 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:17:25 --> 0.0006 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:17:25 --> Total execution time: 0.1019
DEBUG - 2021-08-12 15:17:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:17:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:17:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:17:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:17:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:17:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:17:40 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:17:40 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:17:40 --> Total execution time: 0.0720
DEBUG - 2021-08-12 15:17:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:17:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:17:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:17:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:17:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:17:55 --> 0.0015 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:17:55 --> 0.0019 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:17:55 --> 0.0035 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:17:55 --> Total execution time: 0.1036
DEBUG - 2021-08-12 15:18:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:18:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:18:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:18:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:18:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:18:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:18:10 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:18:10 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:18:10 --> Total execution time: 0.0709
DEBUG - 2021-08-12 15:18:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:18:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:18:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:18:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:18:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:18:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:18:25 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:18:25 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:18:25 --> Total execution time: 0.0601
DEBUG - 2021-08-12 15:18:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:18:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:18:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:18:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:18:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:18:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:18:40 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:18:40 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:18:40 --> Total execution time: 0.0774
DEBUG - 2021-08-12 15:18:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:18:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:18:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:18:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:18:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:18:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:18:55 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:18:55 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:18:55 --> Total execution time: 0.0719
DEBUG - 2021-08-12 15:19:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:19:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:19:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:19:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:19:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:19:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:19:10 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:19:10 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:19:10 --> Total execution time: 0.0860
DEBUG - 2021-08-12 15:19:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:19:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:19:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:19:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:19:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:19:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:19:25 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:19:25 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:19:25 --> Total execution time: 0.0702
DEBUG - 2021-08-12 15:19:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:19:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:19:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:19:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:19:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:19:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:19:40 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:19:40 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:19:40 --> Total execution time: 0.0668
DEBUG - 2021-08-12 15:19:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:19:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:19:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:19:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:19:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:19:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:19:55 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:19:55 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:19:55 --> Total execution time: 0.0833
DEBUG - 2021-08-12 15:20:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:20:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:20:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:20:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:20:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:20:10 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:20:10 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:20:10 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:20:10 --> Total execution time: 0.0714
DEBUG - 2021-08-12 15:20:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:20:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:20:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:20:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:20:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:20:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:20:25 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:20:25 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:20:25 --> Total execution time: 0.0744
DEBUG - 2021-08-12 15:20:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:20:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:20:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:20:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:20:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:20:40 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:20:40 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:20:40 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:20:40 --> Total execution time: 0.0850
DEBUG - 2021-08-12 15:20:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:20:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:20:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:20:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:20:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:20:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:20:55 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:20:55 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:20:55 --> Total execution time: 0.0753
DEBUG - 2021-08-12 15:21:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:21:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:21:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:21:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:21:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:21:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:21:10 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:21:10 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:21:10 --> Total execution time: 0.0684
DEBUG - 2021-08-12 15:21:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:21:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:21:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:21:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:21:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:21:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:21:25 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:21:25 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:21:25 --> Total execution time: 0.0863
DEBUG - 2021-08-12 15:21:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:21:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:21:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:21:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:21:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:21:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:21:40 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:21:40 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:21:40 --> Total execution time: 0.0876
DEBUG - 2021-08-12 15:21:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:21:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:21:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:21:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:21:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:21:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:21:55 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:21:55 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:21:55 --> Total execution time: 0.0745
DEBUG - 2021-08-12 15:22:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:22:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:22:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:22:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:22:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:22:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:22:10 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:22:10 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:22:10 --> Total execution time: 0.0753
DEBUG - 2021-08-12 15:22:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:22:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:22:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:22:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:22:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:22:25 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:22:25 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:22:25 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:22:25 --> Total execution time: 0.0788
DEBUG - 2021-08-12 15:22:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:22:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:22:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:22:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:22:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:22:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:22:40 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:22:40 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:22:40 --> Total execution time: 0.0741
DEBUG - 2021-08-12 15:22:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:22:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:22:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:22:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:22:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:22:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:22:55 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:22:55 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:22:55 --> Total execution time: 0.0754
DEBUG - 2021-08-12 15:23:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:23:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:23:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:23:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:23:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:23:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:23:10 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:23:10 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:23:10 --> Total execution time: 0.0873
DEBUG - 2021-08-12 15:23:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:23:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:23:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:23:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:23:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:23:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:23:25 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:23:25 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:23:25 --> Total execution time: 0.0875
DEBUG - 2021-08-12 15:23:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:23:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:23:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:23:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:23:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:23:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:23:40 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:23:40 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:23:40 --> Total execution time: 0.0854
DEBUG - 2021-08-12 15:23:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:23:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:23:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:23:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:23:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:23:55 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:23:55 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:23:55 --> 0.0006 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:23:55 --> Total execution time: 0.0885
DEBUG - 2021-08-12 15:24:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:24:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:24:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:24:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:24:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:24:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:24:10 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:24:10 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:24:10 --> Total execution time: 0.0782
DEBUG - 2021-08-12 15:24:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:24:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:24:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:24:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:24:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:24:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:24:25 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:24:25 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:24:25 --> Total execution time: 0.0860
DEBUG - 2021-08-12 15:24:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:24:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:24:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:24:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:24:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:24:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:24:40 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:24:40 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:24:40 --> Total execution time: 0.0911
DEBUG - 2021-08-12 15:24:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:24:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:24:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:24:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:24:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:24:55 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:24:55 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:24:55 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:24:55 --> Total execution time: 0.1091
DEBUG - 2021-08-12 15:25:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:25:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:25:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:25:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:25:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:25:10 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:25:10 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:25:10 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:25:10 --> Total execution time: 0.0802
DEBUG - 2021-08-12 15:25:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:25:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:25:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:25:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:25:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:25:25 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:25:25 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:25:25 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:25:25 --> Total execution time: 0.0843
DEBUG - 2021-08-12 15:25:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:25:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:25:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:25:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:25:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:25:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:25:40 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:25:40 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:25:40 --> Total execution time: 0.0936
DEBUG - 2021-08-12 15:25:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:25:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:25:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:25:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:25:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:25:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:25:55 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:25:55 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:25:55 --> Total execution time: 0.0663
DEBUG - 2021-08-12 15:26:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:26:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:26:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:26:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:26:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:26:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:26:10 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:26:10 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:26:10 --> Total execution time: 0.0762
DEBUG - 2021-08-12 15:26:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:26:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:26:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:26:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:26:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:26:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:26:25 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:26:25 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:26:25 --> Total execution time: 0.0649
DEBUG - 2021-08-12 15:26:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:26:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:26:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:26:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:26:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:26:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:26:40 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:26:40 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:26:40 --> Total execution time: 0.0839
DEBUG - 2021-08-12 15:26:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:26:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:26:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:26:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:26:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:26:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:26:55 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:26:55 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:26:55 --> Total execution time: 0.0815
DEBUG - 2021-08-12 15:27:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:27:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:27:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:27:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:27:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:27:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:27:10 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:27:10 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:27:10 --> Total execution time: 0.0831
DEBUG - 2021-08-12 15:27:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:27:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:27:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:27:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:27:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:27:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:27:25 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:27:25 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:27:25 --> Total execution time: 0.0689
DEBUG - 2021-08-12 15:27:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:27:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:27:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:27:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:27:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:27:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:27:40 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:27:40 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:27:40 --> Total execution time: 0.0666
DEBUG - 2021-08-12 15:27:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:27:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:27:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:27:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:27:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:27:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:27:55 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:27:55 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:27:55 --> Total execution time: 0.0749
DEBUG - 2021-08-12 15:28:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:28:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:28:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:28:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:28:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:28:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:28:10 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:28:10 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:28:10 --> Total execution time: 0.0732
DEBUG - 2021-08-12 15:28:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:28:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:28:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:28:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:28:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:28:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:28:25 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:28:25 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:28:25 --> Total execution time: 0.0638
DEBUG - 2021-08-12 15:28:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:28:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:28:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:28:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:28:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:28:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:28:40 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:28:40 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:28:40 --> Total execution time: 0.0842
DEBUG - 2021-08-12 15:28:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:28:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:28:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:28:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:28:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:28:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:28:55 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:28:55 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:28:55 --> Total execution time: 0.0741
DEBUG - 2021-08-12 15:29:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:29:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:29:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:29:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:29:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:29:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:29:10 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:29:10 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:29:10 --> Total execution time: 0.0737
DEBUG - 2021-08-12 15:29:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:29:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:29:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:29:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:29:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:29:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:29:25 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:29:25 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:29:25 --> Total execution time: 0.0950
DEBUG - 2021-08-12 15:29:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:29:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:29:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:29:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:29:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:29:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:29:40 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:29:40 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:29:40 --> Total execution time: 0.0755
DEBUG - 2021-08-12 15:29:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:29:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:29:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:29:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:29:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:29:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:29:55 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:29:55 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:29:55 --> Total execution time: 0.0854
DEBUG - 2021-08-12 15:30:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:30:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:30:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:30:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:30:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:30:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:30:10 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:30:10 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:30:10 --> Total execution time: 0.0812
DEBUG - 2021-08-12 15:30:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:30:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:30:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:30:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:30:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:30:25 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:30:25 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:30:25 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:30:25 --> Total execution time: 0.0799
DEBUG - 2021-08-12 15:30:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:30:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:30:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:30:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:30:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:30:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:30:40 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:30:40 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:30:40 --> Total execution time: 0.0759
DEBUG - 2021-08-12 15:30:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:30:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:30:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:30:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:30:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:30:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:30:55 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:30:55 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:30:55 --> Total execution time: 0.0777
DEBUG - 2021-08-12 15:31:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:31:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:31:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:31:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:31:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:31:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:31:10 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:31:10 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:31:10 --> Total execution time: 0.0761
DEBUG - 2021-08-12 15:31:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:31:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:31:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:31:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:31:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:31:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:31:25 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:31:25 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:31:25 --> Total execution time: 0.0751
DEBUG - 2021-08-12 15:32:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:32:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:32:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:32:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:32:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:32:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:32:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:32:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:32:09 --> Total execution time: 0.0881
DEBUG - 2021-08-12 15:33:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:33:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:33:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:33:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:33:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:33:09 --> 0.0009 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:33:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:33:09 --> 0.0005 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:33:09 --> Total execution time: 0.1617
DEBUG - 2021-08-12 15:34:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:34:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:34:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:34:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:34:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:34:09 --> 0.0008 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:34:09 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:34:09 --> 0.0005 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:34:09 --> Total execution time: 0.1745
DEBUG - 2021-08-12 15:35:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:35:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:35:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:35:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:35:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:35:09 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:35:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:35:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:35:09 --> Total execution time: 0.0752
DEBUG - 2021-08-12 15:36:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:36:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:36:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:36:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:36:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:36:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:36:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:36:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:36:09 --> Total execution time: 0.0701
DEBUG - 2021-08-12 15:37:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:37:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:37:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:37:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:37:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:37:09 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:37:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:37:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:37:09 --> Total execution time: 0.0762
DEBUG - 2021-08-12 15:38:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:38:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:38:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:38:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:38:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:38:09 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:38:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:38:09 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:38:09 --> Total execution time: 0.0694
DEBUG - 2021-08-12 15:39:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:39:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:39:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:39:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:39:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:39:09 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:39:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:39:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:39:09 --> Total execution time: 0.0645
DEBUG - 2021-08-12 15:40:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:40:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:40:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:40:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:40:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:40:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:40:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:40:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:40:09 --> Total execution time: 0.0661
DEBUG - 2021-08-12 15:41:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:41:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:41:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:41:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:41:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:41:09 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:41:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:41:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:41:09 --> Total execution time: 0.0651
DEBUG - 2021-08-12 15:42:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:42:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:42:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:42:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:42:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:42:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:42:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:42:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:42:09 --> Total execution time: 0.0710
DEBUG - 2021-08-12 15:43:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:43:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:43:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:43:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:43:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:43:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:43:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:43:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:43:09 --> Total execution time: 0.0659
DEBUG - 2021-08-12 15:43:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:43:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:43:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:43:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:43:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:43:22 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:43:22 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:43:22 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:43:23 --> Total execution time: 0.0822
DEBUG - 2021-08-12 15:43:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:43:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:43:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:43:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:43:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:43:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:43:25 --> 0.0011 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:43:25 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:43:25 --> Total execution time: 0.1015
DEBUG - 2021-08-12 15:43:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:43:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:43:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:43:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:43:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:43:40 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:43:40 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:43:40 --> 0.0021 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:43:40 --> Total execution time: 0.1002
DEBUG - 2021-08-12 15:43:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:43:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:43:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:43:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:43:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:43:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:43:55 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:43:55 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:43:55 --> Total execution time: 0.0991
DEBUG - 2021-08-12 15:44:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:44:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:44:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:44:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:44:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:44:10 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:44:10 --> 0.0006 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:44:10 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:44:10 --> Total execution time: 0.1068
DEBUG - 2021-08-12 15:44:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:44:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:44:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:44:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:44:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:44:25 --> 0.0016 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:44:25 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:44:25 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:44:25 --> Total execution time: 0.0973
DEBUG - 2021-08-12 15:44:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:44:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:44:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:44:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:44:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:44:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:44:40 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:44:40 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:44:40 --> Total execution time: 0.0853
DEBUG - 2021-08-12 15:44:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:44:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:44:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:44:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:44:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:44:55 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:44:55 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:44:55 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:44:55 --> Total execution time: 0.0765
DEBUG - 2021-08-12 15:45:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:45:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:45:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:45:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:45:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:45:10 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:45:10 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:45:10 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:45:10 --> Total execution time: 0.0812
DEBUG - 2021-08-12 15:45:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:45:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:45:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:45:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:45:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:45:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:45:25 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:45:25 --> 0.0006 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:45:25 --> Total execution time: 0.0915
DEBUG - 2021-08-12 15:45:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:45:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:45:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:45:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:45:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:45:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:45:40 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:45:40 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:45:40 --> Total execution time: 0.0807
DEBUG - 2021-08-12 15:45:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:45:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:45:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:45:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:45:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:45:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:45:55 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:45:55 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:45:55 --> Total execution time: 0.0907
DEBUG - 2021-08-12 15:46:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:46:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:46:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:46:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:46:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:46:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:46:10 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:46:10 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:46:10 --> Total execution time: 0.0803
DEBUG - 2021-08-12 15:46:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:46:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:46:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:46:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:46:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:46:25 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:46:25 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:46:25 --> 0.0005 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:46:25 --> Total execution time: 0.0828
DEBUG - 2021-08-12 15:46:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:46:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:46:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:46:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:46:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:46:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:46:40 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:46:40 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:46:40 --> Total execution time: 0.0918
DEBUG - 2021-08-12 15:46:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:46:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:46:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:46:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:46:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:46:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:46:55 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:46:55 --> 0.0002 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:46:55 --> Total execution time: 0.0928
DEBUG - 2021-08-12 15:47:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:47:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:47:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:47:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:47:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:47:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:47:10 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:47:10 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:47:10 --> Total execution time: 0.0749
DEBUG - 2021-08-12 15:47:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:47:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:47:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:47:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:47:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:47:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:47:25 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:47:25 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:47:25 --> Total execution time: 0.0880
DEBUG - 2021-08-12 15:47:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:47:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:47:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:47:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:47:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:47:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:47:40 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:47:40 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:47:40 --> Total execution time: 0.0779
DEBUG - 2021-08-12 15:47:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:47:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:47:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:47:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:47:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:47:55 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:47:55 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:47:55 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:47:55 --> Total execution time: 0.0881
DEBUG - 2021-08-12 15:48:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:48:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:48:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:48:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:48:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:48:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:48:10 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:48:10 --> 0.0005 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:48:10 --> Total execution time: 0.0992
DEBUG - 2021-08-12 15:48:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:48:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:48:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:48:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:48:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:48:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:48:25 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:48:25 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:48:25 --> Total execution time: 0.0850
DEBUG - 2021-08-12 15:48:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:48:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:48:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:48:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:48:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:48:40 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:48:40 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:48:40 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:48:40 --> Total execution time: 0.0912
DEBUG - 2021-08-12 15:48:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:48:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:48:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:48:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:48:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:48:55 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:48:55 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:48:55 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:48:55 --> Total execution time: 0.0965
DEBUG - 2021-08-12 15:50:06 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:50:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:50:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:50:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:50:06 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:50:06 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:50:06 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:50:06 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:50:06 --> Total execution time: 0.1057
DEBUG - 2021-08-12 15:50:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:50:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:50:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:50:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:50:32 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:50:32 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:50:32 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:50:32 --> 0.0005 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:50:32 --> Total execution time: 0.1300
DEBUG - 2021-08-12 15:50:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:50:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:50:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:50:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:50:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:50:40 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:50:40 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:50:40 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:50:40 --> Total execution time: 0.0933
DEBUG - 2021-08-12 15:50:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:50:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:50:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:50:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:50:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:50:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:50:55 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:50:55 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:50:55 --> Total execution time: 0.0969
DEBUG - 2021-08-12 15:51:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:51:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:51:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:51:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:51:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:51:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:51:10 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:51:10 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:51:10 --> Total execution time: 0.0673
DEBUG - 2021-08-12 15:51:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:51:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:51:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:51:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:51:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:51:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:51:25 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:51:25 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:51:25 --> Total execution time: 0.0852
DEBUG - 2021-08-12 15:51:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:51:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:51:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:51:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:51:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:51:40 --> 0.001 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:51:40 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:51:40 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:51:40 --> Total execution time: 0.1249
DEBUG - 2021-08-12 15:51:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:51:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:51:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:51:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:51:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:51:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:51:55 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:51:55 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:51:55 --> Total execution time: 0.0913
DEBUG - 2021-08-12 15:52:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:52:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:52:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:52:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:52:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:52:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:52:10 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:52:10 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:52:10 --> Total execution time: 0.1109
DEBUG - 2021-08-12 15:52:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:52:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:52:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:52:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:52:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:52:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:52:25 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:52:25 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:52:25 --> Total execution time: 0.0733
DEBUG - 2021-08-12 15:52:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:52:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:52:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:52:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:52:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:52:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:52:40 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:52:40 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:52:40 --> Total execution time: 0.0837
DEBUG - 2021-08-12 15:52:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:52:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:52:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:52:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:52:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:52:55 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:52:55 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:52:55 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:52:55 --> Total execution time: 0.0807
DEBUG - 2021-08-12 15:53:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:53:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:53:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:53:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:53:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:53:10 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:53:10 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:53:10 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:53:10 --> Total execution time: 0.0722
DEBUG - 2021-08-12 15:53:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:53:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:53:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:53:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:53:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:53:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:53:25 --> 0.0006 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:53:25 --> 0.0029 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:53:25 --> Total execution time: 0.0843
DEBUG - 2021-08-12 15:53:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:53:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:53:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:53:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:53:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:53:40 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:53:40 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:53:40 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:53:40 --> Total execution time: 0.0887
DEBUG - 2021-08-12 15:53:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:53:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:53:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:53:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:53:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:53:55 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:53:55 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:53:55 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:53:55 --> Total execution time: 0.0902
DEBUG - 2021-08-12 15:54:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:54:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:54:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:54:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:54:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:54:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:54:10 --> 0.0006 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:54:10 --> 0.0008 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:54:10 --> Total execution time: 0.0855
DEBUG - 2021-08-12 15:54:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:54:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:54:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:54:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:54:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:54:25 --> 0.0016 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:54:25 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:54:25 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:54:25 --> Total execution time: 0.0869
DEBUG - 2021-08-12 15:54:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:54:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:54:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:54:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:54:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:54:40 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:54:40 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:54:40 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:54:40 --> Total execution time: 0.0966
DEBUG - 2021-08-12 15:54:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:54:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:54:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:54:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:54:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:54:55 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:54:55 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:54:55 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:54:55 --> Total execution time: 0.0815
DEBUG - 2021-08-12 15:55:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:55:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:55:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:55:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:55:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:55:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:55:10 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:55:10 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:55:10 --> Total execution time: 0.0884
DEBUG - 2021-08-12 15:55:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:55:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:55:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:55:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:55:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:55:25 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:55:25 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:55:25 --> 0.0005 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:55:25 --> Total execution time: 0.0741
DEBUG - 2021-08-12 15:56:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:56:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:56:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:56:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:56:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:56:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:56:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:56:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:56:09 --> Total execution time: 0.0923
DEBUG - 2021-08-12 15:57:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:57:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:57:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:57:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:57:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:57:09 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:57:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:57:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:57:09 --> Total execution time: 0.0780
DEBUG - 2021-08-12 15:58:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:58:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:58:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:58:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:58:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:58:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:58:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:58:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:58:09 --> Total execution time: 0.0797
DEBUG - 2021-08-12 15:59:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 15:59:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 15:59:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 15:59:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 15:59:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 15:59:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 15:59:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 15:59:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 15:59:09 --> Total execution time: 0.0823
DEBUG - 2021-08-12 16:00:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:00:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:00:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:00:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:00:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:00:09 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:00:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:00:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:00:09 --> Total execution time: 0.0668
DEBUG - 2021-08-12 16:01:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:01:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:01:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:01:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:01:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:01:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:01:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:01:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:01:09 --> Total execution time: 0.0668
DEBUG - 2021-08-12 16:02:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:02:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:02:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:02:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:02:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:02:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:02:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:02:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:02:09 --> Total execution time: 0.0856
DEBUG - 2021-08-12 16:03:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:03:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:03:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:03:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:03:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:03:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:03:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:03:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:03:09 --> Total execution time: 0.1066
DEBUG - 2021-08-12 16:04:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:04:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:04:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:04:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:04:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:04:09 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:04:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:04:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:04:09 --> Total execution time: 0.0856
DEBUG - 2021-08-12 16:05:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:05:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:05:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:05:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:05:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:05:09 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:05:09 --> 0.0014 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:05:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:05:09 --> Total execution time: 0.0946
DEBUG - 2021-08-12 16:06:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:06:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:06:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:06:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:06:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:06:09 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:06:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:06:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:06:09 --> Total execution time: 0.0762
DEBUG - 2021-08-12 16:07:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:07:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:07:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:07:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:07:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:07:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:07:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:07:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:07:09 --> Total execution time: 0.0795
DEBUG - 2021-08-12 16:08:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:08:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:08:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:08:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:08:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:08:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:08:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:08:09 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:08:09 --> Total execution time: 0.0950
DEBUG - 2021-08-12 16:09:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:09:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:09:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:09:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:09:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:09:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:09:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:09:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:09:09 --> Total execution time: 0.0843
DEBUG - 2021-08-12 16:10:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:10:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:10:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:10:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:10:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:10:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:10:09 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:10:09 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:10:09 --> Total execution time: 0.0797
DEBUG - 2021-08-12 16:11:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:11:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:11:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:11:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:11:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:11:09 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:11:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:11:09 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:11:09 --> Total execution time: 0.0915
DEBUG - 2021-08-12 16:12:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:12:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:12:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:12:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:12:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:12:09 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:12:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:12:09 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:12:09 --> Total execution time: 0.0819
DEBUG - 2021-08-12 16:13:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:13:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:13:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:13:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:13:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:13:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:13:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:13:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:13:09 --> Total execution time: 0.0857
DEBUG - 2021-08-12 16:14:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:14:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:14:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:14:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:14:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:14:09 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:14:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:14:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:14:09 --> Total execution time: 0.0658
DEBUG - 2021-08-12 16:15:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:15:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:15:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:15:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:15:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:15:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:15:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:15:09 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:15:09 --> Total execution time: 0.0785
DEBUG - 2021-08-12 16:16:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:16:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:16:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:16:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:16:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:16:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:16:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:16:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:16:09 --> Total execution time: 0.0811
DEBUG - 2021-08-12 16:17:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:17:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:17:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:17:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:17:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:17:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:17:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:17:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:17:09 --> Total execution time: 0.0742
DEBUG - 2021-08-12 16:18:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:18:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:18:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:18:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:18:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:18:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:18:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:18:09 --> 0.0006 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:18:09 --> Total execution time: 0.0932
DEBUG - 2021-08-12 16:19:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:19:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:19:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:19:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:19:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:19:09 --> 0.0022 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:19:09 --> 0.0021 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:19:09 --> 0.004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:19:09 --> Total execution time: 0.1060
DEBUG - 2021-08-12 16:20:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:20:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:20:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:20:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:20:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:20:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:20:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:20:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:20:09 --> Total execution time: 0.0904
DEBUG - 2021-08-12 16:21:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:21:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:21:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:21:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:21:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:21:09 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:21:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:21:09 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:21:09 --> Total execution time: 0.1077
DEBUG - 2021-08-12 16:22:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:22:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:22:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:22:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:22:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:22:09 --> 0.0011 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:22:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:22:09 --> 0.0005 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:22:09 --> Total execution time: 0.0809
DEBUG - 2021-08-12 16:23:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:23:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:23:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:23:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:23:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:23:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:23:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:23:09 --> 0.0005 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:23:09 --> Total execution time: 0.0945
DEBUG - 2021-08-12 16:24:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:24:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:24:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:24:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:24:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:24:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:24:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:24:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:24:09 --> Total execution time: 0.0816
DEBUG - 2021-08-12 16:25:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:25:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:25:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:25:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:25:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:25:09 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:25:09 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:25:09 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:25:09 --> Total execution time: 0.0881
DEBUG - 2021-08-12 16:26:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:26:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:26:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:26:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:26:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:26:09 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:26:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:26:09 --> 0.0007 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:26:09 --> Total execution time: 0.1116
DEBUG - 2021-08-12 16:27:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:27:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:27:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:27:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:27:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:27:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:27:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:27:09 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:27:09 --> Total execution time: 0.0803
DEBUG - 2021-08-12 16:28:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:28:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:28:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:28:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:28:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:28:09 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:28:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:28:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:28:09 --> Total execution time: 0.0722
DEBUG - 2021-08-12 16:29:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:29:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:29:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:29:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:29:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:29:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:29:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:29:09 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:29:09 --> Total execution time: 0.0768
DEBUG - 2021-08-12 16:30:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:30:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:30:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:30:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:30:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:30:09 --> 0.0009 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:30:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:30:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:30:09 --> Total execution time: 0.0945
DEBUG - 2021-08-12 16:31:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:31:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:31:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:31:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:31:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:31:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:31:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:31:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:31:09 --> Total execution time: 0.0709
DEBUG - 2021-08-12 16:32:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:32:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:32:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:32:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:32:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:32:09 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:32:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:32:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:32:09 --> Total execution time: 0.0819
DEBUG - 2021-08-12 16:33:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:33:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:33:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:33:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:33:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:33:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:33:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:33:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:33:09 --> Total execution time: 0.0653
DEBUG - 2021-08-12 16:34:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:34:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:34:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:34:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:34:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:34:09 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:34:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:34:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:34:09 --> Total execution time: 0.0945
DEBUG - 2021-08-12 16:35:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:35:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:35:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:35:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:35:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:35:09 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:35:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:35:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:35:09 --> Total execution time: 0.1235
DEBUG - 2021-08-12 16:35:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:35:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:35:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:35:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:35:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:35:41 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:35:41 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:35:41 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:35:41 --> Total execution time: 0.1023
DEBUG - 2021-08-12 16:35:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:35:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:35:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:35:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:35:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:35:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:35:55 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:35:55 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:35:55 --> Total execution time: 0.0895
DEBUG - 2021-08-12 16:36:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:36:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:36:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:36:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:36:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:36:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:36:10 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:36:10 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:36:10 --> Total execution time: 0.0768
DEBUG - 2021-08-12 16:36:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:36:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:36:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:36:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:36:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:36:25 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:36:25 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:36:25 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:36:25 --> Total execution time: 0.0795
DEBUG - 2021-08-12 16:36:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:36:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:36:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:36:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:36:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:36:40 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:36:40 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:36:40 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:36:40 --> Total execution time: 0.0693
DEBUG - 2021-08-12 16:36:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:36:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:36:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:36:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:36:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:36:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:36:55 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:36:55 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:36:55 --> Total execution time: 0.0817
DEBUG - 2021-08-12 16:37:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:37:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:37:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:37:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:37:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:37:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:37:10 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:37:10 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:37:10 --> Total execution time: 0.0815
DEBUG - 2021-08-12 16:37:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:37:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:37:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:37:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:37:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:37:25 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:37:25 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:37:25 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:37:25 --> Total execution time: 0.0883
DEBUG - 2021-08-12 16:37:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:37:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:37:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:37:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:37:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:37:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:37:40 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:37:40 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:37:40 --> Total execution time: 0.0774
DEBUG - 2021-08-12 16:37:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:37:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:37:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:37:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:37:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:37:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:37:55 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:37:55 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:37:55 --> Total execution time: 0.0733
DEBUG - 2021-08-12 16:38:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:38:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:38:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:38:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:38:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:38:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:38:10 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:38:10 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:38:10 --> Total execution time: 0.0731
DEBUG - 2021-08-12 16:38:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:38:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:38:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:38:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:38:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:38:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:38:25 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:38:25 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:38:25 --> Total execution time: 0.0873
DEBUG - 2021-08-12 16:38:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:38:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:38:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:38:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:38:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:38:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:38:40 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:38:40 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:38:40 --> Total execution time: 0.0704
DEBUG - 2021-08-12 16:38:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:38:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:38:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:38:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:38:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:38:55 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:38:55 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:38:55 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:38:55 --> Total execution time: 0.0826
DEBUG - 2021-08-12 16:39:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:39:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:39:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:39:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:39:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:39:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:39:10 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:39:10 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:39:10 --> Total execution time: 0.0881
DEBUG - 2021-08-12 16:39:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:39:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:39:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:39:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:39:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:39:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:39:25 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:39:25 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:39:25 --> Total execution time: 0.0917
DEBUG - 2021-08-12 16:39:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:39:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:39:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:39:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:39:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:39:40 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:39:40 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:39:40 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:39:40 --> Total execution time: 0.0887
DEBUG - 2021-08-12 16:39:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:39:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:39:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:39:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:39:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:39:55 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:39:55 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:39:55 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:39:55 --> Total execution time: 0.0967
DEBUG - 2021-08-12 16:40:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:40:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:40:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:40:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:40:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:40:10 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:40:10 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:40:10 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:40:10 --> Total execution time: 0.0757
DEBUG - 2021-08-12 16:40:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:40:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:40:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:40:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:40:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:40:25 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:40:25 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:40:25 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:40:25 --> Total execution time: 0.0759
DEBUG - 2021-08-12 16:40:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:40:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:40:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:40:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:40:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:40:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:40:40 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:40:40 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:40:40 --> Total execution time: 0.1073
DEBUG - 2021-08-12 16:41:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:41:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:41:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:41:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:41:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:41:09 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:41:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:41:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:41:09 --> Total execution time: 0.0933
DEBUG - 2021-08-12 16:42:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:42:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:42:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:42:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:42:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:42:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:42:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:42:09 --> 0.0005 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:42:09 --> Total execution time: 0.0679
DEBUG - 2021-08-12 16:43:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:43:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:43:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:43:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:43:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:43:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:43:09 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:43:09 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:43:09 --> Total execution time: 0.0652
DEBUG - 2021-08-12 16:44:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:44:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:44:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:44:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:44:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:44:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:44:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:44:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:44:09 --> Total execution time: 0.0732
DEBUG - 2021-08-12 16:45:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:45:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:45:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:45:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:45:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:45:09 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:45:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:45:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:45:09 --> Total execution time: 0.0868
DEBUG - 2021-08-12 16:46:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:46:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:46:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:46:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:46:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:46:09 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:46:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:46:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:46:09 --> Total execution time: 0.0661
DEBUG - 2021-08-12 16:47:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:47:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:47:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:47:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:47:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:47:09 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:47:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:47:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:47:09 --> Total execution time: 0.0918
DEBUG - 2021-08-12 16:48:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:48:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:48:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:48:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:48:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:48:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:48:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:48:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:48:09 --> Total execution time: 0.0672
DEBUG - 2021-08-12 16:49:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:49:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:49:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:49:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:49:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:49:09 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:49:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:49:09 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:49:09 --> Total execution time: 0.0828
DEBUG - 2021-08-12 16:50:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:50:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:50:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:50:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:50:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:50:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:50:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:50:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:50:09 --> Total execution time: 0.0629
DEBUG - 2021-08-12 16:51:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:51:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:51:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:51:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:51:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:51:09 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:51:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:51:09 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:51:09 --> Total execution time: 0.0689
DEBUG - 2021-08-12 16:52:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:52:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:52:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:52:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:52:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:52:09 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:52:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:52:09 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:52:09 --> Total execution time: 0.0875
DEBUG - 2021-08-12 16:53:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:53:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:53:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:53:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:53:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:53:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:53:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:53:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:53:09 --> Total execution time: 0.0719
DEBUG - 2021-08-12 16:54:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:54:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:54:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:54:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:54:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:54:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:54:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:54:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:54:09 --> Total execution time: 0.0810
DEBUG - 2021-08-12 16:55:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:55:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:55:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:55:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:55:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:55:09 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:55:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:55:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:55:09 --> Total execution time: 0.0643
DEBUG - 2021-08-12 16:56:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:56:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:56:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:56:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:56:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:56:09 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:56:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:56:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:56:09 --> Total execution time: 0.0791
DEBUG - 2021-08-12 16:57:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:57:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:57:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:57:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:57:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:57:09 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:57:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:57:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:57:09 --> Total execution time: 0.0757
DEBUG - 2021-08-12 16:58:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:58:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:58:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:58:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:58:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:58:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:58:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:58:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:58:09 --> Total execution time: 0.0744
DEBUG - 2021-08-12 16:59:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 16:59:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 16:59:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 16:59:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 16:59:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 16:59:09 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 16:59:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 16:59:09 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 16:59:09 --> Total execution time: 0.0648
DEBUG - 2021-08-12 17:00:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 17:00:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 17:00:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 17:00:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 17:00:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 17:00:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 17:00:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 17:00:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 17:00:09 --> Total execution time: 0.0726
DEBUG - 2021-08-12 17:01:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 17:01:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 17:01:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 17:01:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 17:01:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 17:01:09 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 17:01:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 17:01:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 17:01:09 --> Total execution time: 0.0705
DEBUG - 2021-08-12 17:02:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 17:02:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 17:02:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 17:02:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 17:02:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 17:02:09 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 17:02:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 17:02:09 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 17:02:09 --> Total execution time: 0.0935
DEBUG - 2021-08-12 17:03:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 17:03:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 17:03:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 17:03:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 17:03:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 17:03:09 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 17:03:09 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 17:03:09 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 17:03:09 --> Total execution time: 0.0838
DEBUG - 2021-08-12 17:04:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 17:04:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 17:04:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 17:04:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 17:04:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 17:04:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 17:04:09 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 17:04:09 --> 0.0005 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 17:04:09 --> Total execution time: 0.0658
DEBUG - 2021-08-12 17:05:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 17:05:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 17:05:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 17:05:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 17:05:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 17:05:09 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 17:05:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 17:05:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 17:05:09 --> Total execution time: 0.0923
DEBUG - 2021-08-12 17:06:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 17:06:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 17:06:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 17:06:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 17:06:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 17:06:09 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 17:06:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 17:06:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 17:06:09 --> Total execution time: 0.0698
DEBUG - 2021-08-12 17:07:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 17:07:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 17:07:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 17:07:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 17:07:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 17:07:09 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 17:07:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 17:07:09 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 17:07:09 --> Total execution time: 0.0645
DEBUG - 2021-08-12 17:08:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 17:08:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 17:08:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 17:08:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 17:08:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 17:08:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 17:08:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 17:08:09 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 17:08:09 --> Total execution time: 0.0731
DEBUG - 2021-08-12 17:09:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 17:09:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 17:09:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 17:09:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 17:09:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 17:09:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 17:09:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 17:09:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 17:09:09 --> Total execution time: 0.0819
DEBUG - 2021-08-12 17:10:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 17:10:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 17:10:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 17:10:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 17:10:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 17:10:09 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 17:10:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 17:10:09 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 17:10:09 --> Total execution time: 0.0710
DEBUG - 2021-08-12 17:11:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 17:11:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 17:11:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 17:11:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 17:11:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 17:11:09 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 17:11:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 17:11:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 17:11:09 --> Total execution time: 0.0778
DEBUG - 2021-08-12 17:12:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 17:12:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 17:12:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 17:12:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 17:12:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 17:12:09 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 17:12:09 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 17:12:09 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 17:12:09 --> Total execution time: 0.1171
DEBUG - 2021-08-12 17:13:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 17:13:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 17:13:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 17:13:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 17:13:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 17:13:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 17:13:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 17:13:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 17:13:09 --> Total execution time: 0.0673
DEBUG - 2021-08-12 17:14:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 17:14:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 17:14:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 17:14:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 17:14:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 17:14:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 17:14:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 17:14:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 17:14:09 --> Total execution time: 0.0749
DEBUG - 2021-08-12 17:15:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 17:15:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 17:15:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 17:15:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 17:15:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 17:15:09 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 17:15:09 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 17:15:09 --> 0.0005 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 17:15:09 --> Total execution time: 0.0787
DEBUG - 2021-08-12 17:16:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 17:16:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 17:16:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 17:16:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 17:16:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 17:16:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 17:16:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 17:16:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 17:16:09 --> Total execution time: 0.0769
DEBUG - 2021-08-12 17:17:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 17:17:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 17:17:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 17:17:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 17:17:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 17:17:09 --> 0.0011 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 17:17:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 17:17:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 17:17:09 --> Total execution time: 0.0951
DEBUG - 2021-08-12 17:18:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 17:18:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 17:18:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 17:18:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 17:18:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 17:18:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 17:18:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 17:18:09 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 17:18:09 --> Total execution time: 0.0993
DEBUG - 2021-08-12 17:19:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 17:19:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 17:19:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 17:19:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 17:19:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 17:19:09 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 17:19:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 17:19:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 17:19:09 --> Total execution time: 0.0749
DEBUG - 2021-08-12 17:20:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 17:20:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 17:20:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 17:20:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 17:20:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 17:20:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 17:20:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 17:20:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 17:20:09 --> Total execution time: 0.0849
DEBUG - 2021-08-12 17:21:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 17:21:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 17:21:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 17:21:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 17:21:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 17:21:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 17:21:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 17:21:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 17:21:09 --> Total execution time: 0.0801
DEBUG - 2021-08-12 17:22:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 17:22:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 17:22:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 17:22:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 17:22:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 17:22:09 --> 0.0076 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 17:22:09 --> 0.0148 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 17:22:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 17:22:09 --> Total execution time: 0.1349
DEBUG - 2021-08-12 17:23:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 17:23:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 17:23:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 17:23:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 17:23:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 17:23:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 17:23:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 17:23:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 17:23:09 --> Total execution time: 0.0793
DEBUG - 2021-08-12 17:24:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 17:24:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 17:24:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 17:24:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 17:24:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 17:24:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 17:24:09 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 17:24:09 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 17:24:09 --> Total execution time: 0.0890
DEBUG - 2021-08-12 17:25:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 17:25:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 17:25:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 17:25:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 17:25:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 17:25:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 17:25:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 17:25:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 17:25:09 --> Total execution time: 0.0727
DEBUG - 2021-08-12 17:26:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 17:26:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 17:26:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 17:26:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 17:26:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 17:26:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 17:26:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 17:26:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 17:26:09 --> Total execution time: 0.0812
DEBUG - 2021-08-12 17:27:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 17:27:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 17:27:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 17:27:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 17:27:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 17:27:09 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 17:27:09 --> 0.0006 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 17:27:09 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 17:27:09 --> Total execution time: 0.0707
DEBUG - 2021-08-12 17:28:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 17:28:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 17:28:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 17:28:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 17:28:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 17:28:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 17:28:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 17:28:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 17:28:09 --> Total execution time: 0.0738
DEBUG - 2021-08-12 17:29:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 17:29:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 17:29:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 17:29:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 17:29:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 17:29:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 17:29:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 17:29:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 17:29:09 --> Total execution time: 0.0841
DEBUG - 2021-08-12 17:30:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 17:30:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 17:30:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 17:30:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 17:30:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 17:30:09 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 17:30:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 17:30:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 17:30:09 --> Total execution time: 0.0635
DEBUG - 2021-08-12 17:31:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 17:31:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 17:31:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 17:31:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 17:31:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 17:31:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 17:31:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 17:31:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 17:31:09 --> Total execution time: 0.0691
DEBUG - 2021-08-12 17:32:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 17:32:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 17:32:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 17:32:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 17:32:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 17:32:09 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 17:32:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 17:32:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 17:32:09 --> Total execution time: 0.0712
DEBUG - 2021-08-12 17:33:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 17:33:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 17:33:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 17:33:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 17:33:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 17:33:09 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 17:33:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 17:33:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 17:33:09 --> Total execution time: 0.0882
DEBUG - 2021-08-12 17:34:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 17:34:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 17:34:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 17:34:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 17:34:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 17:34:09 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 17:34:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 17:34:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 17:34:09 --> Total execution time: 0.0857
DEBUG - 2021-08-12 17:35:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 17:35:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 17:35:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 17:35:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 17:35:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 17:35:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 17:35:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 17:35:09 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 17:35:09 --> Total execution time: 0.0855
DEBUG - 2021-08-12 17:36:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 17:36:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 17:36:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 17:36:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 17:36:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 17:36:09 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 17:36:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 17:36:09 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 17:36:09 --> Total execution time: 0.0923
DEBUG - 2021-08-12 17:37:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 17:37:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 17:37:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 17:37:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 17:37:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 17:37:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 17:37:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 17:37:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 17:37:09 --> Total execution time: 0.0813
DEBUG - 2021-08-12 17:38:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 17:38:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 17:38:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 17:38:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 17:38:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 17:38:09 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 17:38:09 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 17:38:09 --> 0.0005 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 17:38:09 --> Total execution time: 0.0858
DEBUG - 2021-08-12 17:39:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 17:39:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 17:39:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 17:39:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 17:39:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 17:39:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 17:39:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 17:39:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 17:39:09 --> Total execution time: 0.0809
DEBUG - 2021-08-12 17:40:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 17:40:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 17:40:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 17:40:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 17:40:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 17:40:09 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 17:40:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 17:40:09 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 17:40:09 --> Total execution time: 0.0869
DEBUG - 2021-08-12 17:41:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 17:41:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 17:41:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 17:41:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 17:41:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 17:41:09 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 17:41:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 17:41:09 --> 0.0005 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 17:41:09 --> Total execution time: 0.0988
DEBUG - 2021-08-12 17:42:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 17:42:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 17:42:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 17:42:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 17:42:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 17:42:09 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 17:42:09 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 17:42:09 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 17:42:09 --> Total execution time: 0.1199
DEBUG - 2021-08-12 17:42:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 17:42:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 17:42:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 17:42:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 17:42:36 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 17:42:36 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 17:42:36 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 17:42:36 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-12 17:42:36 --> Total execution time: 0.1170
DEBUG - 2021-08-12 18:40:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:40:55 --> No URI present. Default controller set.
DEBUG - 2021-08-12 18:40:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:40:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 18:40:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 18:40:55 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 18:40:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:40:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:40:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 18:40:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 18:40:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 18:41:02 --> 2.8635 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-12 18:41:02 --> 1.0067 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-12 18:41:02 --> 2.816 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-12 18:41:02 --> 0.0599 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 18:41:02 --> 0.0143 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 18:41:02 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 18:41:02 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-12 18:41:02 --> 0.0008 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-12 18:41:02 --> Total execution time: 6.8562
DEBUG - 2021-08-12 18:41:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:41:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:41:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:41:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:41:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 18:41:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 18:41:03 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 18:41:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:41:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:41:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:41:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:41:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 18:41:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 18:41:06 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:41:06 --> Global POST, GET and COOKIE data sanitized
QUERY - 2021-08-12 18:41:06 --> 3.1344 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-12 18:41:06 --> Total execution time: 3.2285
DEBUG - 2021-08-12 18:41:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 18:41:06 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 18:41:06 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:41:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:41:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-12 18:41:37 --> 30.6897 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
DEBUG - 2021-08-12 18:41:37 --> Total execution time: 33.8315
DEBUG - 2021-08-12 18:41:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 18:41:37 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 18:41:37 --> 0.1655 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `campaign_name` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-12 18:41:37 --> Total execution time: 34.0246
DEBUG - 2021-08-12 18:41:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 18:41:37 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 18:41:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:41:37 --> No URI present. Default controller set.
DEBUG - 2021-08-12 18:41:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:41:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 18:41:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 18:41:37 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 18:41:37 --> Form_validation class already loaded. Second attempt ignored.
QUERY - 2021-08-12 18:41:37 --> 0.0171 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-12 18:41:37 --> Total execution time: 0.0957
DEBUG - 2021-08-12 18:41:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:41:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:41:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:41:50 --> No URI present. Default controller set.
DEBUG - 2021-08-12 18:41:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:41:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 18:41:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 18:41:50 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 18:41:50 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 18:41:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:41:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:41:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 18:41:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 18:41:50 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 18:41:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:41:52 --> No URI present. Default controller set.
DEBUG - 2021-08-12 18:41:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:41:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-12 18:41:57 --> 3.094 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-12 18:41:57 --> 1.8335 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-12 18:41:57 --> 2.232 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-12 18:41:57 --> 0.0074 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 18:41:57 --> 0.0097 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 18:41:57 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 18:41:57 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 18:41:57 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-12 18:41:57 --> Total execution time: 7.2502
DEBUG - 2021-08-12 18:41:57 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 18:41:57 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 18:41:57 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:41:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:41:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 18:41:57 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 18:41:57 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 18:42:03 --> 2.5442 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-12 18:42:03 --> 0.8252 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-12 18:42:03 --> 2.2982 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-12 18:42:03 --> 0.0066 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 18:42:03 --> 0.0094 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 18:42:03 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 18:42:03 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 18:42:03 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-12 18:42:03 --> Total execution time: 5.7527
DEBUG - 2021-08-12 18:42:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:42:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:42:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:42:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:42:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 18:42:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 18:42:03 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 18:42:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:42:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:42:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:42:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:42:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:42:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 18:42:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:42:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-12 18:42:06 --> 2.7696 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-12 18:42:06 --> Total execution time: 2.8702
DEBUG - 2021-08-12 18:42:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 18:42:06 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 18:42:37 --> 30.8017 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
DEBUG - 2021-08-12 18:42:37 --> Total execution time: 33.5375
DEBUG - 2021-08-12 18:42:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 18:42:37 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 18:42:37 --> 0.1341 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `campaign_name` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-12 18:42:37 --> Total execution time: 33.7011
DEBUG - 2021-08-12 18:46:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:46:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:46:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 18:46:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 18:46:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 18:46:22 --> 2.3914 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-12 18:46:22 --> 0.9772 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-12 18:46:22 --> 2.8548 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-12 18:46:22 --> 0.0074 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 18:46:22 --> 0.0096 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 18:46:22 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 18:46:22 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 18:46:22 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-12 18:46:22 --> Total execution time: 6.3246
DEBUG - 2021-08-12 18:46:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:46:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:46:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:46:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:46:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 18:46:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 18:46:22 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 18:46:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:46:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:46:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:46:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:46:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:46:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:46:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 18:46:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-12 18:46:26 --> 4.2429 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-12 18:46:26 --> Total execution time: 4.3286
DEBUG - 2021-08-12 18:46:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 18:46:26 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 18:46:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:46:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:46:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-12 18:46:56 --> 29.2804 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
DEBUG - 2021-08-12 18:46:56 --> Total execution time: 33.5435
DEBUG - 2021-08-12 18:46:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 18:46:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 18:46:56 --> 0.0465 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `campaign_name` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-12 18:46:56 --> Total execution time: 33.5979
DEBUG - 2021-08-12 18:46:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 18:46:56 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 18:46:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:46:56 --> No URI present. Default controller set.
DEBUG - 2021-08-12 18:46:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:46:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 18:46:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 18:46:56 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 18:46:56 --> Form_validation class already loaded. Second attempt ignored.
QUERY - 2021-08-12 18:46:56 --> 0.0195 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-12 18:46:56 --> Total execution time: 0.0834
DEBUG - 2021-08-12 18:46:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:46:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:47:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:47:05 --> No URI present. Default controller set.
DEBUG - 2021-08-12 18:47:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:47:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 18:47:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 18:47:05 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 18:47:05 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 18:47:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:47:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:47:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 18:47:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 18:47:05 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 18:47:14 --> 5.8569 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-12 18:47:14 --> 0.7985 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-12 18:47:14 --> 2.4894 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-12 18:47:14 --> 0.0069 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 18:47:14 --> 0.0095 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 18:47:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 18:47:14 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 18:47:14 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-12 18:47:14 --> Total execution time: 9.2312
DEBUG - 2021-08-12 18:47:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:47:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:47:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:47:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:47:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 18:47:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 18:47:14 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 18:47:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:47:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:47:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:47:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:47:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:47:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:47:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 18:47:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-12 18:47:18 --> 3.1808 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-12 18:47:18 --> Total execution time: 3.2822
DEBUG - 2021-08-12 18:47:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 18:47:18 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 18:47:47 --> 29.3355 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
DEBUG - 2021-08-12 18:47:47 --> Total execution time: 32.5091
DEBUG - 2021-08-12 18:47:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 18:47:47 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 18:47:47 --> 0.1064 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `campaign_name` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-12 18:47:47 --> Total execution time: 32.6427
DEBUG - 2021-08-12 18:51:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:51:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:51:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 18:51:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 18:51:47 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 18:51:52 --> 2.4759 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-12 18:51:52 --> 0.765 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-12 18:51:52 --> 2.2338 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-12 18:51:52 --> 0.0073 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 18:51:52 --> 0.0097 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 18:51:52 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 18:51:52 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 18:51:52 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-12 18:51:52 --> Total execution time: 5.5717
DEBUG - 2021-08-12 18:51:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:51:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:51:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:51:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:51:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 18:51:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 18:51:52 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 18:51:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:51:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:51:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:51:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 18:51:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:51:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:51:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:51:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-12 18:51:56 --> 3.5316 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-12 18:51:56 --> Total execution time: 3.6117
DEBUG - 2021-08-12 18:51:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 18:51:56 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 18:52:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:52:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:52:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-12 18:52:25 --> 28.9805 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
DEBUG - 2021-08-12 18:52:25 --> Total execution time: 32.5181
DEBUG - 2021-08-12 18:52:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 18:52:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 18:52:25 --> 0.046 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `campaign_name` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-12 18:52:25 --> Total execution time: 32.5314
DEBUG - 2021-08-12 18:52:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 18:52:25 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 18:52:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:52:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:52:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 18:52:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 18:52:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 18:52:31 --> 2.7592 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-12 18:52:31 --> 0.9404 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-12 18:52:31 --> 2.377 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-12 18:52:31 --> 0.0074 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 18:52:31 --> 0.0096 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 18:52:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 18:52:31 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 18:52:31 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-12 18:52:31 --> Total execution time: 6.1578
DEBUG - 2021-08-12 18:52:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:52:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:52:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:52:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:52:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 18:52:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 18:52:32 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 18:52:32 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:52:32 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:52:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:52:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:52:32 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:52:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:52:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 18:52:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-12 18:52:34 --> 2.7804 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-12 18:52:34 --> Total execution time: 2.8642
DEBUG - 2021-08-12 18:52:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 18:52:34 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 18:52:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:52:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:52:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-12 18:53:03 --> 28.9583 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
DEBUG - 2021-08-12 18:53:03 --> Total execution time: 31.7371
DEBUG - 2021-08-12 18:53:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 18:53:03 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 18:53:03 --> 0.0853 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `campaign_name` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-12 18:53:03 --> Total execution time: 31.8550
DEBUG - 2021-08-12 18:53:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 18:53:03 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 18:53:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:53:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:53:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 18:53:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 18:53:04 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 18:53:10 --> 2.3825 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-12 18:53:10 --> 0.9767 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-12 18:53:10 --> 2.6441 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-12 18:53:10 --> 0.0071 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 18:53:10 --> 0.0096 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 18:53:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 18:53:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 18:53:10 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-12 18:53:10 --> Total execution time: 6.0923
DEBUG - 2021-08-12 18:53:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:53:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:53:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:53:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:53:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 18:53:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 18:53:10 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 18:53:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:53:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:53:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:53:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:53:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:53:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 18:53:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:53:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-12 18:53:13 --> 3.3751 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-12 18:53:13 --> Total execution time: 3.4487
DEBUG - 2021-08-12 18:53:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 18:53:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 18:53:44 --> 30.7793 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
DEBUG - 2021-08-12 18:53:44 --> Total execution time: 34.1472
DEBUG - 2021-08-12 18:53:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 18:53:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 18:53:44 --> 0.0671 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `campaign_name` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-12 18:53:44 --> Total execution time: 34.2344
DEBUG - 2021-08-12 18:58:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:58:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:58:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 18:58:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 18:58:38 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 18:58:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:58:38 --> No URI present. Default controller set.
DEBUG - 2021-08-12 18:58:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:58:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 18:58:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 18:58:38 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 18:58:38 --> Form_validation class already loaded. Second attempt ignored.
QUERY - 2021-08-12 18:58:38 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-12 18:58:38 --> Total execution time: 0.0607
DEBUG - 2021-08-12 18:58:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:58:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:58:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:58:45 --> No URI present. Default controller set.
DEBUG - 2021-08-12 18:58:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:58:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 18:58:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 18:58:45 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 18:58:45 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 18:58:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:58:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:58:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 18:58:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 18:58:45 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 18:58:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:58:46 --> No URI present. Default controller set.
DEBUG - 2021-08-12 18:58:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:58:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-12 18:58:53 --> 3.8999 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-12 18:58:53 --> 1.0694 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-12 18:58:53 --> 2.4629 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-12 18:58:53 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 18:58:53 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 18:58:53 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 18:58:53 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 18:58:53 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-12 18:58:53 --> Total execution time: 7.5161
DEBUG - 2021-08-12 18:58:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 18:58:53 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 18:58:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:58:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:58:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 18:58:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 18:58:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 18:58:59 --> 2.7256 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-12 18:58:59 --> 0.8764 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-12 18:58:59 --> 2.6445 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-12 18:58:59 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 18:58:59 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 18:58:59 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 18:58:59 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 18:58:59 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-12 18:58:59 --> Total execution time: 6.3083
DEBUG - 2021-08-12 18:59:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:59:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:59:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:59:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:59:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 18:59:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 18:59:00 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 18:59:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:59:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:59:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:59:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:59:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 18:59:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:59:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 18:59:00 --> Global POST, GET and COOKIE data sanitized
QUERY - 2021-08-12 18:59:03 --> 3.1309 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-12 18:59:03 --> Total execution time: 3.2129
DEBUG - 2021-08-12 18:59:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 18:59:03 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 18:59:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:59:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:59:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-12 18:59:33 --> 30.2342 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
DEBUG - 2021-08-12 18:59:33 --> Total execution time: 33.3893
DEBUG - 2021-08-12 18:59:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 18:59:33 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 18:59:33 --> 0.0539 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `campaign_name` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-12 18:59:33 --> Total execution time: 33.4753
DEBUG - 2021-08-12 18:59:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 18:59:33 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 18:59:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:59:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:59:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 18:59:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 18:59:33 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 18:59:40 --> 2.9349 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-12 18:59:40 --> 1.1361 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-12 18:59:40 --> 2.2778 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-12 18:59:40 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 18:59:40 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 18:59:40 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 18:59:40 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 18:59:40 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-12 18:59:40 --> Total execution time: 6.4191
DEBUG - 2021-08-12 18:59:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:59:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:59:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:59:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:59:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 18:59:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 18:59:40 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 18:59:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:59:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:59:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:59:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:59:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 18:59:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 18:59:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 18:59:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-12 18:59:43 --> 2.9773 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-12 18:59:43 --> Total execution time: 3.0655
DEBUG - 2021-08-12 18:59:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 18:59:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 19:00:11 --> 28.4681 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
DEBUG - 2021-08-12 19:00:11 --> Total execution time: 31.4569
DEBUG - 2021-08-12 19:00:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 19:00:12 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 19:00:12 --> 0.1552 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `campaign_name` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-12 19:00:12 --> Total execution time: 31.6186
DEBUG - 2021-08-12 19:02:49 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 19:02:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 19:02:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 19:02:49 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 19:02:49 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 19:02:49 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 19:02:49 --> 0.0216 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 19:02:49 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 19:02:49 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 19:02:49 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 19:02:49 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-12 19:02:49 --> Total execution time: 0.0940
DEBUG - 2021-08-12 19:02:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 19:02:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 19:02:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 19:02:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 19:02:51 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 19:02:51 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 19:02:51 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 19:02:51 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 19:02:51 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 19:02:51 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 19:02:51 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-12 19:02:51 --> Total execution time: 0.0749
DEBUG - 2021-08-12 19:02:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 19:02:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 19:02:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 19:02:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 19:02:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 19:03:01 --> 4.2387 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-12 19:03:01 --> 0.9315 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-12 19:03:01 --> 2.6 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-12 19:03:01 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 19:03:01 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 19:03:01 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 19:03:01 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 19:03:01 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-12 19:03:01 --> Total execution time: 7.8481
DEBUG - 2021-08-12 19:03:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 19:03:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 19:03:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 19:03:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 19:03:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 19:03:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 19:03:01 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 19:03:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 19:03:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 19:03:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 19:03:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 19:03:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 19:03:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 19:03:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 19:03:01 --> Global POST, GET and COOKIE data sanitized
QUERY - 2021-08-12 19:03:04 --> 3.2655 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-12 19:03:04 --> Total execution time: 3.3712
DEBUG - 2021-08-12 19:03:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 19:03:04 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 19:03:04 --> 0.0478 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `campaign_name` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-12 19:03:04 --> Total execution time: 3.2648
DEBUG - 2021-08-12 19:03:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 19:03:04 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 19:03:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 19:03:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 19:03:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-12 19:03:35 --> 30.6703 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
DEBUG - 2021-08-12 19:03:35 --> Total execution time: 33.9679
DEBUG - 2021-08-12 19:03:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 19:03:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 19:03:35 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 19:03:35 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 19:03:35 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 19:03:35 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 19:03:35 --> 0.001 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 19:03:35 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-12 19:03:35 --> Total execution time: 29.7381
DEBUG - 2021-08-12 19:03:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 19:03:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 19:03:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 19:03:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 19:03:53 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 19:03:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 19:03:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 19:03:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 19:03:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 19:03:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 19:03:56 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 19:03:56 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-12 19:03:56 --> Total execution time: 0.1636
QUERY - 2021-08-12 19:04:00 --> 2.9228 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-12 19:04:00 --> 1.0402 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-12 19:04:00 --> 3.2704 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-12 19:04:00 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 19:04:00 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 19:04:00 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 19:04:00 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 19:04:00 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-12 19:04:00 --> Total execution time: 7.3139
DEBUG - 2021-08-12 19:04:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 19:04:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 19:04:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 19:04:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 19:04:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 19:04:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 19:04:01 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 19:04:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 19:04:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 19:04:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 19:04:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 19:04:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 19:04:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 19:04:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 19:04:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-12 19:04:03 --> 2.7771 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-12 19:04:03 --> Total execution time: 2.8724
DEBUG - 2021-08-12 19:04:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 19:04:03 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 19:04:32 --> 28.1263 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
DEBUG - 2021-08-12 19:04:32 --> Total execution time: 30.9168
DEBUG - 2021-08-12 19:04:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 19:04:32 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 19:04:32 --> 0.0635 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `campaign_name` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-12 19:04:32 --> Total execution time: 30.9908
DEBUG - 2021-08-12 19:06:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 19:06:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 19:06:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 19:06:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 19:06:48 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 19:06:55 --> 2.6227 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-12 19:06:55 --> 0.9542 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-12 19:06:55 --> 3.2777 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-12 19:06:55 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 19:06:55 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 19:06:55 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 19:06:55 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 19:06:55 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-12 19:06:55 --> Total execution time: 6.9449
DEBUG - 2021-08-12 19:06:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 19:06:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 19:06:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 19:06:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 19:06:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 19:06:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 19:06:55 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 19:06:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 19:06:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 19:06:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 19:06:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 19:06:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 19:06:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 19:06:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 19:06:55 --> Global POST, GET and COOKIE data sanitized
QUERY - 2021-08-12 19:06:58 --> 3.2699 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-12 19:06:58 --> Total execution time: 3.3548
DEBUG - 2021-08-12 19:06:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 19:06:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 19:07:27 --> 28.2645 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
DEBUG - 2021-08-12 19:07:27 --> Total execution time: 31.5647
DEBUG - 2021-08-12 19:07:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 19:07:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 19:07:27 --> 0.1416 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `campaign_name` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-12 19:07:27 --> Total execution time: 31.7405
DEBUG - 2021-08-12 19:10:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 19:10:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 19:10:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 19:10:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 19:10:03 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 19:10:03 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 19:10:03 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 19:10:03 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 19:10:03 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 19:10:03 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 19:10:03 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-12 19:10:03 --> Total execution time: 0.1355
DEBUG - 2021-08-12 19:10:06 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 19:10:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 19:10:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 19:10:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 19:10:06 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 19:10:11 --> 2.4878 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-12 19:10:11 --> 0.8784 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-12 19:10:11 --> 2.3539 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-12 19:10:11 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 19:10:11 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 19:10:11 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 19:10:11 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 19:10:11 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-12 19:10:11 --> Total execution time: 5.8054
DEBUG - 2021-08-12 19:10:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 19:10:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 19:10:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 19:10:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 19:10:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 19:10:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 19:10:12 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 19:10:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 19:10:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 19:10:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 19:10:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 19:10:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 19:10:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 19:10:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 19:10:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-12 19:10:15 --> 3.0108 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-12 19:10:15 --> Total execution time: 3.1170
DEBUG - 2021-08-12 19:10:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 19:10:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 19:10:42 --> 27.4891 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
DEBUG - 2021-08-12 19:10:42 --> Total execution time: 30.4549
DEBUG - 2021-08-12 19:10:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 19:10:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 19:10:43 --> 0.1853 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `campaign_name` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-12 19:10:43 --> Total execution time: 30.6326
DEBUG - 2021-08-12 19:12:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 19:12:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 19:12:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 19:12:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 19:12:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 19:12:27 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 19:12:27 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-12 19:12:27 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 19:12:27 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 19:12:27 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 19:12:27 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-12 19:12:27 --> Total execution time: 0.0810
DEBUG - 2021-08-12 19:12:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 19:12:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 19:12:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 19:12:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 19:12:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 19:12:34 --> 2.3801 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-12 19:12:34 --> 0.896 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-12 19:12:34 --> 2.2137 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-12 19:12:34 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 19:12:34 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 19:12:34 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 19:12:34 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 19:12:34 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-12 19:12:34 --> Total execution time: 5.5591
DEBUG - 2021-08-12 19:12:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 19:12:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 19:12:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 19:12:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 19:12:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 19:12:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 19:12:34 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 19:12:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 19:12:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 19:12:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 19:12:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 19:12:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 19:12:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 19:12:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 19:12:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-12 19:12:38 --> 3.6525 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-12 19:12:38 --> Total execution time: 3.7708
DEBUG - 2021-08-12 19:12:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 19:12:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 19:13:09 --> 31.0066 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
DEBUG - 2021-08-12 19:13:09 --> Total execution time: 34.6012
DEBUG - 2021-08-12 19:13:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 19:13:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 19:13:09 --> 0.1267 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `campaign_name` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-12 19:13:09 --> Total execution time: 34.7059
DEBUG - 2021-08-12 19:15:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 19:15:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 19:15:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 19:15:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 19:15:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 19:15:52 --> 3.4534 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-12 19:15:52 --> 0.8438 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-12 19:15:52 --> 2.2782 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-12 19:15:52 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 19:15:52 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 19:15:52 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 19:15:52 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 19:15:52 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-12 19:15:52 --> Total execution time: 6.6536
DEBUG - 2021-08-12 19:15:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 19:15:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 19:15:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 19:15:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 19:15:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 19:15:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 19:15:53 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 19:15:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 19:15:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 19:15:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 19:15:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 19:15:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 19:15:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 19:15:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 19:15:53 --> Global POST, GET and COOKIE data sanitized
QUERY - 2021-08-12 19:15:56 --> 2.7346 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-12 19:15:56 --> Total execution time: 2.8273
DEBUG - 2021-08-12 19:15:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 19:15:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 19:16:24 --> 27.7596 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
DEBUG - 2021-08-12 19:16:24 --> Total execution time: 30.4814
DEBUG - 2021-08-12 19:16:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 19:16:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 19:16:24 --> 0.22 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `campaign_name` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-12 19:16:24 --> Total execution time: 30.7370
DEBUG - 2021-08-12 19:27:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 19:27:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 19:27:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 19:27:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 19:27:51 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 19:27:59 --> 3.0971 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-12 19:27:59 --> 2.007 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-12 19:27:59 --> 2.566 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-12 19:27:59 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 19:27:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 19:27:59 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 19:27:59 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 19:27:59 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-12 19:27:59 --> Total execution time: 7.7611
DEBUG - 2021-08-12 19:28:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 19:28:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 19:28:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 19:28:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 19:28:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 19:28:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 19:28:00 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 19:28:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 19:28:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 19:28:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 19:28:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 19:28:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 19:28:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-12 19:28:03 --> 2.7207 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-12 19:28:03 --> Total execution time: 2.8052
DEBUG - 2021-08-12 19:28:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 19:28:03 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 19:28:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 19:28:03 --> Global POST, GET and COOKIE data sanitized
QUERY - 2021-08-12 19:28:31 --> 28.1567 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
DEBUG - 2021-08-12 19:28:31 --> Total execution time: 30.8865
DEBUG - 2021-08-12 19:28:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 19:28:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 19:28:31 --> 0.1718 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `campaign_name` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-12 19:28:31 --> Total execution time: 31.0819
DEBUG - 2021-08-12 19:31:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 19:31:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 19:31:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 19:31:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 19:31:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 19:31:28 --> 2.6447 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-12 19:31:28 --> 1.3987 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-12 19:31:28 --> 2.6662 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-12 19:31:28 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 19:31:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 19:31:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 19:31:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 19:31:28 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-12 19:31:28 --> Total execution time: 6.7831
DEBUG - 2021-08-12 19:31:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 19:31:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 19:31:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 19:31:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 19:31:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 19:31:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 19:31:29 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 19:31:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 19:31:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 19:31:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 19:31:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 19:31:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 19:31:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 19:31:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 19:31:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-12 19:31:32 --> 3.1782 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-12 19:31:32 --> Total execution time: 3.2703
DEBUG - 2021-08-12 19:31:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 19:31:32 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 19:32:02 --> 29.9252 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
DEBUG - 2021-08-12 19:32:02 --> Total execution time: 33.1224
DEBUG - 2021-08-12 19:32:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 19:32:02 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 19:32:02 --> 0.0621 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `campaign_name` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-12 19:32:02 --> Total execution time: 33.1760
DEBUG - 2021-08-12 19:32:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 19:32:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 19:32:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 19:32:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 19:32:07 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-12 19:32:15 --> 2.4468 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-12 19:32:15 --> 0.8753 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-12 19:32:15 --> 3.9005 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-12 19:32:15 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-12 19:32:15 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 19:32:15 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 19:32:15 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =2
QUERY - 2021-08-12 19:32:15 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-12 19:32:15 --> Total execution time: 7.2892
DEBUG - 2021-08-12 19:32:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 19:32:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 19:32:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 19:32:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 19:32:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 19:32:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 19:32:15 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-12 19:32:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 19:32:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 19:32:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 19:32:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 19:32:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-12 19:32:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-12 19:32:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-12 19:32:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-12 19:32:19 --> 3.5686 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-12 19:32:19 --> Total execution time: 3.6578
DEBUG - 2021-08-12 19:32:19 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-12 19:32:19 --> Encryption: Auto-configured driver 'openssl'.
