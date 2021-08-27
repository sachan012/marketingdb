<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2021-08-16 15:38:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 15:38:54 --> No URI present. Default controller set.
DEBUG - 2021-08-16 15:38:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 15:38:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 15:38:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 15:38:54 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-16 15:38:54 --> Form_validation class already loaded. Second attempt ignored.
QUERY - 2021-08-16 15:38:55 --> 1.065 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-16 15:38:55 --> Total execution time: 1.2123
DEBUG - 2021-08-16 15:38:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 15:38:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 15:39:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 15:39:05 --> No URI present. Default controller set.
DEBUG - 2021-08-16 15:39:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 15:39:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 15:39:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 15:39:05 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-16 15:39:06 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 15:39:06 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 15:39:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 15:39:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 15:39:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 15:39:06 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 15:39:15 --> 3.8284 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-16 15:39:15 --> 1.1133 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-16 15:39:15 --> 3.5864 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-16 15:39:15 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 15:39:15 --> 0.0377 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 15:39:15 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 15:39:15 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 15:39:15 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-16 15:39:15 --> Total execution time: 8.6790
DEBUG - 2021-08-16 15:39:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 15:39:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 15:39:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 15:39:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 15:39:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 15:39:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 15:39:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 15:39:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 15:39:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 15:39:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 15:39:16 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-16 15:39:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 15:39:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 15:39:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 15:39:16 --> Global POST, GET and COOKIE data sanitized
QUERY - 2021-08-16 15:39:20 --> 4.306 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-16 15:39:20 --> Total execution time: 4.4271
DEBUG - 2021-08-16 15:39:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 15:39:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 15:39:51 --> 31.46 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
DEBUG - 2021-08-16 15:39:51 --> Total execution time: 35.8505
DEBUG - 2021-08-16 15:39:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 15:39:51 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 15:39:52 --> 0.0726 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `campaign_name` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-16 15:39:52 --> Total execution time: 35.9566
DEBUG - 2021-08-16 17:08:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:08:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:08:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:08:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:08:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:08:17 --> 0.0101 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:08:17 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 17:08:17 --> 0.0006 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 17:08:17 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:08:17 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:08:17 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-16 17:08:17 --> Total execution time: 0.1307
DEBUG - 2021-08-16 17:08:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:08:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:08:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:08:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:08:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:08:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:08:23 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 17:08:23 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 17:08:23 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:08:23 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:08:23 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-16 17:08:23 --> Total execution time: 0.1170
DEBUG - 2021-08-16 17:08:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:08:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:08:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:08:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:08:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:08:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:08:46 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:08:46 --> Total execution time: 0.0839
DEBUG - 2021-08-16 17:09:06 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:09:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:09:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:09:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:09:06 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:09:06 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:09:06 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:09:06 --> Total execution time: 0.0761
DEBUG - 2021-08-16 17:09:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:09:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:09:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:09:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:09:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:09:26 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:09:26 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:09:26 --> Total execution time: 0.0939
DEBUG - 2021-08-16 17:09:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:09:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:09:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:09:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:09:34 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-16 17:09:34 --> The filetype you are attempting to upload is not allowed.
DEBUG - 2021-08-16 17:09:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:09:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:09:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:09:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:09:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:09:34 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:09:34 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 17:09:34 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 17:09:34 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:09:34 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:09:34 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-16 17:09:34 --> Total execution time: 0.0736
DEBUG - 2021-08-16 17:09:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:09:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:09:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:09:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:09:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:09:55 --> 0.0154 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:09:55 --> 0.0017 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:09:55 --> Total execution time: 0.1312
DEBUG - 2021-08-16 17:10:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:10:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:10:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:10:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:10:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:10:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:10:15 --> 0.0006 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:10:15 --> Total execution time: 0.0747
DEBUG - 2021-08-16 17:10:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:10:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:10:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:10:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:10:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:10:35 --> 0.0046 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:10:35 --> 0.0011 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:10:35 --> Total execution time: 0.0891
DEBUG - 2021-08-16 17:10:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:10:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:10:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:10:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:10:54 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-16 17:10:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:10:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:10:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:10:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:10:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:10:54 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:10:54 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 17:10:54 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 17:10:54 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:10:54 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:10:54 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-16 17:10:54 --> Total execution time: 0.0753
DEBUG - 2021-08-16 17:11:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:11:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:11:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:11:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:11:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:11:14 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:11:14 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:11:14 --> Total execution time: 0.0716
DEBUG - 2021-08-16 17:11:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:11:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:11:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:11:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:11:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:11:35 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:11:35 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:11:35 --> Total execution time: 0.0700
DEBUG - 2021-08-16 17:11:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:11:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:11:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:11:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:11:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:11:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:11:55 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:11:55 --> Total execution time: 0.0901
DEBUG - 2021-08-16 17:12:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:12:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:12:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:12:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:12:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:12:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:12:15 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:12:15 --> Total execution time: 0.0769
DEBUG - 2021-08-16 17:12:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:12:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:12:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:12:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:12:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:12:35 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:12:35 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:12:35 --> Total execution time: 0.0969
DEBUG - 2021-08-16 17:12:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:12:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:12:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:12:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:12:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:12:55 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:12:55 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:12:55 --> Total execution time: 0.1204
DEBUG - 2021-08-16 17:13:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:13:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:13:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:13:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:13:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:13:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:13:15 --> 0.0024 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:13:15 --> Total execution time: 0.1423
DEBUG - 2021-08-16 17:13:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:13:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:13:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:13:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:13:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:13:35 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:13:35 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:13:35 --> Total execution time: 0.0772
DEBUG - 2021-08-16 17:13:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:13:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:13:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:13:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:13:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:13:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:13:55 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:13:55 --> Total execution time: 0.0890
DEBUG - 2021-08-16 17:14:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:14:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:14:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:14:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:14:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:14:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:14:15 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:14:15 --> Total execution time: 0.0838
DEBUG - 2021-08-16 17:14:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:14:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:14:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:14:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:14:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:14:35 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:14:35 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:14:35 --> Total execution time: 0.0716
DEBUG - 2021-08-16 17:14:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:14:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:14:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:14:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:14:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:14:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:14:55 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:14:55 --> Total execution time: 0.0754
DEBUG - 2021-08-16 17:15:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:15:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:15:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:15:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:15:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:15:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:15:15 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:15:15 --> Total execution time: 0.0877
DEBUG - 2021-08-16 17:15:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:15:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:15:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:15:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:15:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:15:35 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:15:35 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:15:35 --> Total execution time: 0.0748
DEBUG - 2021-08-16 17:15:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:15:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:15:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:15:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:15:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:15:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:15:55 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:15:55 --> Total execution time: 0.0826
DEBUG - 2021-08-16 17:16:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:16:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:16:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:16:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:16:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:16:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:16:15 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:16:15 --> Total execution time: 0.0816
DEBUG - 2021-08-16 17:16:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:16:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:16:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:16:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:16:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:16:35 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:16:35 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:16:35 --> Total execution time: 0.0799
DEBUG - 2021-08-16 17:16:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:16:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:16:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:16:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:16:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:16:55 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:16:55 --> 0.0005 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:16:55 --> Total execution time: 0.0857
DEBUG - 2021-08-16 17:17:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:17:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:17:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:17:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:17:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:17:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:17:15 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:17:15 --> Total execution time: 0.0797
DEBUG - 2021-08-16 17:17:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:17:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:17:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:17:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:17:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:17:35 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:17:35 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:17:35 --> Total execution time: 0.0787
DEBUG - 2021-08-16 17:17:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:17:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:17:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:17:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:17:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:17:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:17:55 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:17:55 --> Total execution time: 0.0830
DEBUG - 2021-08-16 17:18:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:18:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:18:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:18:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:18:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:18:15 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:18:15 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:18:15 --> Total execution time: 0.0648
DEBUG - 2021-08-16 17:18:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:18:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:18:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:18:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:18:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:18:35 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:18:35 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:18:35 --> Total execution time: 0.0834
DEBUG - 2021-08-16 17:18:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:18:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:18:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:18:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:18:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:18:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:18:55 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:18:55 --> Total execution time: 0.0811
DEBUG - 2021-08-16 17:19:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:19:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:19:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:19:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:19:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:19:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:19:15 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:19:15 --> Total execution time: 0.0739
DEBUG - 2021-08-16 17:19:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:19:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:19:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:19:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:19:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:19:35 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:19:35 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:19:35 --> Total execution time: 0.0753
DEBUG - 2021-08-16 17:20:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:20:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:20:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:20:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:20:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:20:34 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:20:34 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:20:34 --> Total execution time: 0.0680
DEBUG - 2021-08-16 17:21:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:21:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:21:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:21:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:21:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:21:34 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:21:34 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:21:34 --> Total execution time: 0.0750
DEBUG - 2021-08-16 17:22:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:22:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:22:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:22:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:22:30 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:22:30 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:22:30 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:22:30 --> Total execution time: 0.0993
DEBUG - 2021-08-16 17:22:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:22:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:22:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:22:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:22:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:22:35 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:22:35 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:22:35 --> Total execution time: 0.0812
DEBUG - 2021-08-16 17:22:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:22:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:22:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:22:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:22:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:22:55 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:22:55 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:22:55 --> Total execution time: 0.0731
DEBUG - 2021-08-16 17:23:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:23:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:23:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:23:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:23:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:23:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:23:15 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:23:15 --> Total execution time: 0.0753
DEBUG - 2021-08-16 17:23:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:23:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:23:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:23:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:23:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:23:35 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:23:35 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:23:35 --> Total execution time: 0.0753
DEBUG - 2021-08-16 17:23:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:23:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:23:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:23:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:23:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:23:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:23:55 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:23:55 --> Total execution time: 0.0829
DEBUG - 2021-08-16 17:24:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:24:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:24:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:24:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:24:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:24:15 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:24:15 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:24:15 --> Total execution time: 0.0796
DEBUG - 2021-08-16 17:24:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:24:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:24:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:24:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:24:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:24:35 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:24:35 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:24:35 --> Total execution time: 0.0704
DEBUG - 2021-08-16 17:24:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:24:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:24:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:24:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:24:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:24:55 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:24:55 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:24:55 --> Total execution time: 0.0802
DEBUG - 2021-08-16 17:25:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:25:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:25:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:25:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:25:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:25:15 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:25:15 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:25:15 --> Total execution time: 0.0673
DEBUG - 2021-08-16 17:25:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:25:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:25:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:25:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:25:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:25:35 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:25:35 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:25:35 --> Total execution time: 0.0776
DEBUG - 2021-08-16 17:25:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:25:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:25:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:25:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:25:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:25:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:25:55 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:25:55 --> Total execution time: 0.0694
DEBUG - 2021-08-16 17:26:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:26:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:26:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:26:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:26:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:26:15 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:26:15 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:26:15 --> Total execution time: 0.1038
DEBUG - 2021-08-16 17:26:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:26:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:26:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:26:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:26:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:26:35 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:26:35 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:26:35 --> Total execution time: 0.0934
DEBUG - 2021-08-16 17:26:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:26:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:26:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:26:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:26:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:26:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:26:55 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:26:55 --> Total execution time: 0.0780
DEBUG - 2021-08-16 17:27:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:27:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:27:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:27:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:27:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:27:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:27:15 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:27:15 --> Total execution time: 0.0944
DEBUG - 2021-08-16 17:28:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:28:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:28:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:28:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:28:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:28:26 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:28:26 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:28:26 --> Total execution time: 0.0728
DEBUG - 2021-08-16 17:29:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:29:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:29:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:29:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:29:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:29:27 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:29:27 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:29:27 --> Total execution time: 0.0732
DEBUG - 2021-08-16 17:30:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:30:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:30:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:30:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:30:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:30:26 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:30:26 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:30:26 --> Total execution time: 0.1128
DEBUG - 2021-08-16 17:30:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:30:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:30:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:30:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:30:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:30:35 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:30:35 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:30:35 --> Total execution time: 0.0836
DEBUG - 2021-08-16 17:30:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:30:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:30:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:30:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:30:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:30:55 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:30:55 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:30:55 --> Total execution time: 0.0685
DEBUG - 2021-08-16 17:31:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:31:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:31:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:31:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:31:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:31:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:31:15 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:31:15 --> Total execution time: 0.0736
DEBUG - 2021-08-16 17:31:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:31:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:31:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:31:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:31:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:31:35 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:31:35 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:31:35 --> Total execution time: 0.0732
DEBUG - 2021-08-16 17:31:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:31:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:31:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:31:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:31:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:31:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:31:55 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:31:55 --> Total execution time: 0.0820
DEBUG - 2021-08-16 17:32:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:32:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:32:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:32:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:32:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:32:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:32:15 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:32:15 --> Total execution time: 0.0754
DEBUG - 2021-08-16 17:32:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:32:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:32:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:32:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:32:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:32:35 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:32:35 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:32:35 --> Total execution time: 0.0744
DEBUG - 2021-08-16 17:32:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:32:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:32:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:32:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:32:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:32:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:32:55 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:32:55 --> Total execution time: 0.0771
DEBUG - 2021-08-16 17:33:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:33:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:33:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:33:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:33:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:33:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:33:15 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:33:15 --> Total execution time: 0.0872
DEBUG - 2021-08-16 17:33:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:33:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:33:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:33:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:33:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:33:35 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:33:35 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:33:35 --> Total execution time: 0.0770
DEBUG - 2021-08-16 17:33:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:33:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:33:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:33:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:33:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:33:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:33:55 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:33:55 --> Total execution time: 0.0718
DEBUG - 2021-08-16 17:34:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:34:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:34:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:34:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:34:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:34:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:34:15 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:34:15 --> Total execution time: 0.0830
DEBUG - 2021-08-16 17:34:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:34:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:34:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:34:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:34:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:34:35 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:34:35 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:34:35 --> Total execution time: 0.0736
DEBUG - 2021-08-16 17:34:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:34:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:34:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:34:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:34:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:34:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:34:55 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:34:55 --> Total execution time: 0.0626
DEBUG - 2021-08-16 17:35:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:35:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:35:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:35:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:35:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:35:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:35:15 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:35:15 --> Total execution time: 0.0595
DEBUG - 2021-08-16 17:36:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:36:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:36:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:36:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:36:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:36:26 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:36:26 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:36:26 --> Total execution time: 0.0640
DEBUG - 2021-08-16 17:37:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:37:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:37:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:37:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:37:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:37:27 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:37:27 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:37:27 --> Total execution time: 0.0738
DEBUG - 2021-08-16 17:38:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:38:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:38:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:38:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:38:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:38:28 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:38:28 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:38:28 --> Total execution time: 0.0812
DEBUG - 2021-08-16 17:39:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:39:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:39:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:39:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:39:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:39:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:39:29 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:39:29 --> Total execution time: 0.0712
DEBUG - 2021-08-16 17:40:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:40:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:40:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:40:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:40:30 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:40:30 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:40:30 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:40:30 --> Total execution time: 0.0790
DEBUG - 2021-08-16 17:41:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:41:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:41:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:41:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:41:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:41:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:41:31 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:41:31 --> Total execution time: 0.0866
DEBUG - 2021-08-16 17:42:32 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:42:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:42:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:42:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:42:32 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:42:32 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:42:32 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:42:32 --> Total execution time: 0.0711
DEBUG - 2021-08-16 17:43:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:43:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:43:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:43:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:43:33 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:43:33 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:43:33 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:43:33 --> Total execution time: 0.0836
DEBUG - 2021-08-16 17:44:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:44:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:44:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:44:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:44:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:44:34 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:44:34 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:44:34 --> Total execution time: 0.0783
DEBUG - 2021-08-16 17:45:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:45:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:45:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:45:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:45:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:45:34 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:45:34 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:45:34 --> Total execution time: 0.0675
DEBUG - 2021-08-16 17:46:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:46:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:46:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:46:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:46:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:46:34 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:46:34 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:46:34 --> Total execution time: 0.0767
DEBUG - 2021-08-16 17:47:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:47:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:47:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:47:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:47:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:47:34 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:47:34 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:47:34 --> Total execution time: 0.0755
DEBUG - 2021-08-16 17:48:32 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:48:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:48:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:48:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:48:32 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:48:32 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:48:32 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:48:32 --> Total execution time: 0.0926
DEBUG - 2021-08-16 17:48:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:48:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:48:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:48:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:48:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:48:35 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:48:35 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:48:35 --> Total execution time: 0.0958
DEBUG - 2021-08-16 17:48:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:48:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:48:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:48:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:48:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:48:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:48:55 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:48:55 --> Total execution time: 0.0681
DEBUG - 2021-08-16 17:49:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:49:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:49:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:49:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:49:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:49:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:49:15 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:49:15 --> Total execution time: 0.0626
DEBUG - 2021-08-16 17:49:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:49:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:49:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:49:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:49:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:49:35 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:49:35 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:49:35 --> Total execution time: 0.0737
DEBUG - 2021-08-16 17:49:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:49:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:49:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:49:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:49:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:49:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:49:55 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:49:55 --> Total execution time: 0.0815
DEBUG - 2021-08-16 17:50:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:50:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:50:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:50:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:50:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:50:15 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:50:15 --> 0.0005 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:50:15 --> Total execution time: 0.0787
DEBUG - 2021-08-16 17:50:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:50:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:50:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:50:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:50:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:50:35 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:50:35 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:50:35 --> Total execution time: 0.0747
DEBUG - 2021-08-16 17:50:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:50:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:50:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:50:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:50:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:50:55 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:50:55 --> 0.0009 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:50:55 --> Total execution time: 0.0764
DEBUG - 2021-08-16 17:51:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:51:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:51:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:51:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:51:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:51:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:51:15 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:51:15 --> Total execution time: 0.0740
DEBUG - 2021-08-16 17:51:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:51:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:51:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:51:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:51:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:51:35 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:51:35 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:51:35 --> Total execution time: 0.0766
DEBUG - 2021-08-16 17:51:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:51:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:51:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:51:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:51:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:51:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:51:55 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:51:55 --> Total execution time: 0.0777
DEBUG - 2021-08-16 17:52:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:52:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:52:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:52:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:52:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:52:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:52:15 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:52:15 --> Total execution time: 0.0761
DEBUG - 2021-08-16 17:52:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:52:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:52:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:52:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:52:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:52:35 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:52:35 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:52:35 --> Total execution time: 0.0736
DEBUG - 2021-08-16 17:52:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:52:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:52:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:52:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:52:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:52:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:52:55 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:52:55 --> Total execution time: 0.0697
DEBUG - 2021-08-16 17:53:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:53:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:53:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:53:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:53:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:53:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:53:15 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:53:15 --> Total execution time: 0.0802
DEBUG - 2021-08-16 17:53:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:53:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:53:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:53:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:53:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:53:35 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:53:35 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:53:35 --> Total execution time: 0.0708
DEBUG - 2021-08-16 17:53:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:53:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:53:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:53:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:53:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:53:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:53:55 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:53:55 --> Total execution time: 0.0841
DEBUG - 2021-08-16 17:54:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:54:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:54:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:54:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:54:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:54:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:54:15 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:54:15 --> Total execution time: 0.0780
DEBUG - 2021-08-16 17:54:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:54:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:54:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:54:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:54:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:54:35 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:54:35 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:54:35 --> Total execution time: 0.0730
DEBUG - 2021-08-16 17:54:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:54:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:54:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:54:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:54:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:54:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:54:55 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:54:55 --> Total execution time: 0.0657
DEBUG - 2021-08-16 17:55:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:55:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:55:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:55:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:55:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:55:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:55:15 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:55:15 --> Total execution time: 0.0803
DEBUG - 2021-08-16 17:55:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:55:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:55:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:55:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:55:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:55:35 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:55:35 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:55:35 --> Total execution time: 0.0832
DEBUG - 2021-08-16 17:55:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:55:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:55:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:55:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:55:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:55:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:55:55 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:55:55 --> Total execution time: 0.0807
DEBUG - 2021-08-16 17:56:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:56:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:56:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:56:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:56:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:56:34 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:56:34 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:56:34 --> Total execution time: 0.0719
DEBUG - 2021-08-16 17:57:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:57:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:57:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:57:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:57:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:57:34 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:57:34 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:57:34 --> Total execution time: 0.0816
DEBUG - 2021-08-16 17:58:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:58:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:58:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:58:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:58:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:58:34 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:58:34 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:58:34 --> Total execution time: 0.0770
DEBUG - 2021-08-16 17:59:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 17:59:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 17:59:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 17:59:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 17:59:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 17:59:34 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 17:59:34 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 17:59:34 --> Total execution time: 0.0744
DEBUG - 2021-08-16 18:00:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:00:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:00:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:00:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:00:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:00:34 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:00:34 --> 0.0007 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:00:34 --> Total execution time: 0.0777
DEBUG - 2021-08-16 18:01:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:01:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:01:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:01:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:01:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:01:34 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:01:34 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:01:34 --> Total execution time: 0.1001
DEBUG - 2021-08-16 18:02:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:02:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:02:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:02:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:02:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:02:13 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:02:13 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:02:13 --> Total execution time: 0.1060
DEBUG - 2021-08-16 18:02:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:02:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:02:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:02:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:02:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:02:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:02:15 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:02:15 --> Total execution time: 0.0776
DEBUG - 2021-08-16 18:02:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:02:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:02:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:02:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:02:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:02:35 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:02:35 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:02:35 --> Total execution time: 0.0834
DEBUG - 2021-08-16 18:02:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:02:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:02:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:02:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:02:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:02:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:02:54 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:02:54 --> Total execution time: 0.0689
DEBUG - 2021-08-16 18:03:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:03:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:03:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:03:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:03:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:03:14 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:03:14 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:03:14 --> Total execution time: 0.0731
DEBUG - 2021-08-16 18:03:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:03:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:03:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:03:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:03:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:03:34 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:03:34 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:03:34 --> Total execution time: 0.0677
DEBUG - 2021-08-16 18:03:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:03:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:03:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:03:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:03:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:03:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:03:55 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:03:55 --> Total execution time: 0.0773
DEBUG - 2021-08-16 18:04:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:04:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:04:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:04:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:04:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:04:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:04:15 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:04:15 --> Total execution time: 0.0881
DEBUG - 2021-08-16 18:04:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:04:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:04:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:04:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:04:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:04:35 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:04:35 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:04:35 --> Total execution time: 0.0659
DEBUG - 2021-08-16 18:04:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:04:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:04:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:04:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:04:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:04:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:04:55 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:04:55 --> Total execution time: 0.0748
DEBUG - 2021-08-16 18:05:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:05:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:05:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:05:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:05:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:05:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:05:15 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:05:15 --> Total execution time: 0.0668
DEBUG - 2021-08-16 18:05:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:05:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:05:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:05:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:05:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:05:35 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:05:35 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:05:35 --> Total execution time: 0.0716
DEBUG - 2021-08-16 18:05:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:05:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:05:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:05:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:05:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:05:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:05:55 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:05:55 --> Total execution time: 0.0770
DEBUG - 2021-08-16 18:06:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:06:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:06:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:06:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:06:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:06:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:06:14 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:06:14 --> Total execution time: 0.0659
DEBUG - 2021-08-16 18:06:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:06:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:06:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:06:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:06:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:06:34 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:06:34 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:06:34 --> Total execution time: 0.0702
DEBUG - 2021-08-16 18:06:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:06:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:06:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:06:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:06:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:06:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:06:54 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:06:54 --> Total execution time: 0.0636
DEBUG - 2021-08-16 18:07:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:07:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:07:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:07:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:07:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:07:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:07:14 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:07:14 --> Total execution time: 0.0590
DEBUG - 2021-08-16 18:07:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:07:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:07:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:07:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:07:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:07:34 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:07:34 --> 0.0007 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:07:34 --> Total execution time: 0.0743
DEBUG - 2021-08-16 18:07:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:07:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:07:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:07:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:07:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:07:54 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:07:54 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:07:54 --> Total execution time: 0.0810
DEBUG - 2021-08-16 18:08:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:08:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:08:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:08:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:08:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:08:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:08:14 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:08:14 --> Total execution time: 0.0662
DEBUG - 2021-08-16 18:08:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:08:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:08:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:08:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:08:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:08:34 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:08:34 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:08:34 --> Total execution time: 0.0753
DEBUG - 2021-08-16 18:08:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:08:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:08:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:08:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:08:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:08:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:08:54 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:08:54 --> Total execution time: 0.0822
DEBUG - 2021-08-16 18:09:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:09:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:09:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:09:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:09:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:09:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:09:14 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:09:14 --> Total execution time: 0.0700
DEBUG - 2021-08-16 18:09:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:09:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:09:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:09:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:09:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:09:34 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:09:34 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:09:34 --> Total execution time: 0.0829
DEBUG - 2021-08-16 18:09:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:09:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:09:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:09:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:09:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:09:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:09:54 --> 0.0005 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:09:54 --> Total execution time: 0.0901
DEBUG - 2021-08-16 18:10:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:10:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:10:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:10:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:10:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:10:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:10:14 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:10:14 --> Total execution time: 0.0698
DEBUG - 2021-08-16 18:10:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:10:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:10:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:10:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:10:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:10:34 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:10:34 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:10:34 --> Total execution time: 0.0725
DEBUG - 2021-08-16 18:10:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:10:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:10:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:10:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:10:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:10:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:10:54 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:10:54 --> Total execution time: 0.0720
DEBUG - 2021-08-16 18:11:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:11:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:11:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:11:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:11:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:11:14 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:11:14 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:11:14 --> Total execution time: 0.0689
DEBUG - 2021-08-16 18:11:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:11:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:11:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:11:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:11:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:11:34 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:11:34 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:11:34 --> Total execution time: 0.0720
DEBUG - 2021-08-16 18:11:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:11:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:11:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:11:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:11:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:11:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:11:54 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:11:54 --> Total execution time: 0.0720
DEBUG - 2021-08-16 18:12:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:12:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:12:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:12:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:12:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:12:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:12:14 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:12:14 --> Total execution time: 0.0637
DEBUG - 2021-08-16 18:12:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:12:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:12:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:12:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:12:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:12:34 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:12:34 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:12:34 --> Total execution time: 0.0699
DEBUG - 2021-08-16 18:12:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:12:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:12:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:12:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:12:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:12:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:12:54 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:12:54 --> Total execution time: 0.0826
DEBUG - 2021-08-16 18:13:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:13:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:13:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:13:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:13:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:13:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:13:14 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:13:14 --> Total execution time: 0.0806
DEBUG - 2021-08-16 18:13:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:13:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:13:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:13:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:13:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:13:34 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:13:34 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:13:34 --> Total execution time: 0.0874
DEBUG - 2021-08-16 18:13:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:13:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:13:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:13:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:13:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:13:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:13:54 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:13:54 --> Total execution time: 0.0748
DEBUG - 2021-08-16 18:14:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:14:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:14:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:14:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:14:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:14:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:14:14 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:14:14 --> Total execution time: 0.0793
DEBUG - 2021-08-16 18:14:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:14:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:14:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:14:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:14:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:14:34 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:14:34 --> 0.0007 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:14:34 --> Total execution time: 0.0839
DEBUG - 2021-08-16 18:14:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:14:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:14:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:14:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:14:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:14:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:14:54 --> 0.0008 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:14:54 --> Total execution time: 0.0763
DEBUG - 2021-08-16 18:15:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:15:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:15:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:15:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:15:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:15:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:15:14 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:15:14 --> Total execution time: 0.0725
DEBUG - 2021-08-16 18:15:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:15:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:15:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:15:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:15:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:15:34 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:15:34 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:15:34 --> Total execution time: 0.0699
DEBUG - 2021-08-16 18:15:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:15:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:15:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:15:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:15:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:15:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:15:54 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:15:54 --> Total execution time: 0.0755
DEBUG - 2021-08-16 18:16:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:16:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:16:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:16:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:16:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:16:15 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:16:15 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:16:15 --> Total execution time: 0.0833
DEBUG - 2021-08-16 18:16:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:16:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:16:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:16:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:16:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:16:35 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:16:35 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:16:35 --> Total execution time: 0.0645
DEBUG - 2021-08-16 18:16:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:16:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:16:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:16:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:16:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:16:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:16:55 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:16:55 --> Total execution time: 0.0814
DEBUG - 2021-08-16 18:17:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:17:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:17:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:17:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:17:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:17:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:17:15 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:17:15 --> Total execution time: 0.0908
DEBUG - 2021-08-16 18:17:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:17:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:17:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:17:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:17:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:17:35 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:17:35 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:17:35 --> Total execution time: 0.0656
DEBUG - 2021-08-16 18:17:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:17:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:17:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:17:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:17:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:17:55 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:17:55 --> 0.0005 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:17:55 --> Total execution time: 0.1026
DEBUG - 2021-08-16 18:18:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:18:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:18:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:18:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:18:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:18:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:18:15 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:18:15 --> Total execution time: 0.0659
DEBUG - 2021-08-16 18:18:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:18:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:18:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:18:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:18:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:18:35 --> 0.0008 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:18:35 --> 0.0005 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:18:35 --> Total execution time: 0.0789
DEBUG - 2021-08-16 18:18:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:18:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:18:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:18:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:18:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:18:55 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:18:55 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:18:55 --> Total execution time: 0.0750
DEBUG - 2021-08-16 18:19:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:19:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:19:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:19:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:19:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:19:15 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:19:15 --> 0.0006 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:19:15 --> Total execution time: 0.1096
DEBUG - 2021-08-16 18:19:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:19:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:19:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:19:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:19:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:19:35 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:19:35 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:19:35 --> Total execution time: 0.0746
DEBUG - 2021-08-16 18:19:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:19:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:19:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:19:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:19:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:19:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:19:55 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:19:55 --> Total execution time: 0.0745
DEBUG - 2021-08-16 18:20:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:20:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:20:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:20:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:20:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:20:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:20:15 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:20:15 --> Total execution time: 0.0708
DEBUG - 2021-08-16 18:20:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:20:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:20:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:20:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:20:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:20:35 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:20:35 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:20:35 --> Total execution time: 0.0808
DEBUG - 2021-08-16 18:20:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:20:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:20:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:20:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:20:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:20:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:20:55 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:20:55 --> Total execution time: 0.0709
DEBUG - 2021-08-16 18:21:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:21:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:21:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:21:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:21:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:21:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:21:15 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:21:15 --> Total execution time: 0.0703
DEBUG - 2021-08-16 18:21:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:21:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:21:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:21:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:21:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:21:35 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:21:35 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:21:35 --> Total execution time: 0.0739
DEBUG - 2021-08-16 18:21:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:21:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:21:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:21:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:21:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:21:55 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:21:55 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:21:55 --> Total execution time: 0.0830
DEBUG - 2021-08-16 18:22:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:22:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:22:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:22:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:22:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:22:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:22:15 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:22:15 --> Total execution time: 0.0700
DEBUG - 2021-08-16 18:22:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:22:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:22:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:22:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:22:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:22:35 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:22:35 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:22:35 --> Total execution time: 0.0777
DEBUG - 2021-08-16 18:22:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:22:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:22:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:22:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:22:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:22:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:22:55 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:22:55 --> Total execution time: 0.0737
DEBUG - 2021-08-16 18:23:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:23:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:23:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:23:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:23:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:23:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:23:15 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:23:15 --> Total execution time: 0.0872
DEBUG - 2021-08-16 18:23:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:23:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:23:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:23:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:23:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:23:35 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:23:35 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:23:35 --> Total execution time: 0.0729
DEBUG - 2021-08-16 18:23:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:23:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:23:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:23:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:23:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:23:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:23:55 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:23:55 --> Total execution time: 0.0866
DEBUG - 2021-08-16 18:24:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:24:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:24:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:24:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:24:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:24:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:24:15 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:24:15 --> Total execution time: 0.0634
DEBUG - 2021-08-16 18:24:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:24:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:24:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:24:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:24:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:24:35 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:24:35 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:24:35 --> Total execution time: 0.0789
DEBUG - 2021-08-16 18:24:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:24:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:24:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:24:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:24:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:24:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:24:55 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:24:55 --> Total execution time: 0.0709
DEBUG - 2021-08-16 18:25:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:25:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:25:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:25:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:25:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:25:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:25:15 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:25:15 --> Total execution time: 0.0802
DEBUG - 2021-08-16 18:25:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:25:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:25:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:25:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:25:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:25:35 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:25:35 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:25:35 --> Total execution time: 0.0656
DEBUG - 2021-08-16 18:25:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:25:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:25:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:25:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:25:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:25:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:25:55 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:25:55 --> Total execution time: 0.0697
DEBUG - 2021-08-16 18:26:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:26:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:26:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:26:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:26:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:26:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:26:15 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:26:15 --> Total execution time: 0.0743
DEBUG - 2021-08-16 18:27:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:27:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:27:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:27:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:27:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:27:34 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:27:34 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:27:34 --> Total execution time: 0.0765
DEBUG - 2021-08-16 18:28:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:28:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:28:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:28:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:28:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:28:34 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:28:34 --> 0.0005 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:28:34 --> Total execution time: 0.0806
DEBUG - 2021-08-16 18:29:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:29:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:29:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:29:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:29:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:29:34 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:29:34 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:29:34 --> Total execution time: 0.0683
DEBUG - 2021-08-16 18:30:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:30:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:30:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:30:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:30:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:30:34 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:30:34 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:30:34 --> Total execution time: 0.0696
DEBUG - 2021-08-16 18:31:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:31:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:31:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:31:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:31:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:31:34 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:31:34 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:31:34 --> Total execution time: 0.0792
DEBUG - 2021-08-16 18:31:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:31:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:31:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:31:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:31:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:31:40 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:31:40 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:31:40 --> Total execution time: 0.0826
DEBUG - 2021-08-16 18:31:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:31:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:31:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:31:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:31:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:31:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:31:55 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:31:55 --> Total execution time: 0.0729
DEBUG - 2021-08-16 18:32:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:32:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:32:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:32:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:32:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:32:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:32:15 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:32:15 --> Total execution time: 0.0810
DEBUG - 2021-08-16 18:32:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:32:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:32:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:32:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:32:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:32:34 --> 0.004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:32:34 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:32:34 --> Total execution time: 0.1102
DEBUG - 2021-08-16 18:32:49 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:32:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:32:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:32:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:32:50 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:32:50 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:32:50 --> 0.0005 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 18:32:50 --> 0.0009 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 18:32:50 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:32:50 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:32:50 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-16 18:32:50 --> Total execution time: 0.1120
DEBUG - 2021-08-16 18:33:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:33:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:33:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:33:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:33:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:33:01 --> 0.0009 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:33:01 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 18:33:01 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 18:33:01 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:33:01 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:33:01 --> 0.0002 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-16 18:33:01 --> Total execution time: 0.0911
DEBUG - 2021-08-16 18:33:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:33:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:33:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:33:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:33:04 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:33:04 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:33:04 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 18:33:04 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 18:33:04 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:33:04 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:33:04 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-16 18:33:04 --> Total execution time: 0.0817
DEBUG - 2021-08-16 18:33:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:33:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:33:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:33:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:33:07 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-16 18:33:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:33:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:33:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:33:34 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:33:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:33:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:33:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-16 18:33:51 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:33:51 --> 27.3279 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-16 18:33:51 --> 0.0259 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-16 18:33:51 --> 4.3556 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-16 18:33:51 --> 0.0922 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-16 18:33:51 --> 3.0889 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-16 18:33:51 --> 3.018 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-16 18:33:51 --> 3.0001 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-16 18:33:51 --> 0.0484 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-16 18:33:51 --> 3.6177 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-16 18:33:51 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 18:33:51 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:33:51 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:33:51 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-16 18:33:51 --> Total execution time: 44.7062
DEBUG - 2021-08-16 18:33:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:33:51 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:33:51 --> 0.0019 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:33:51 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:33:51 --> Total execution time: 26.9550
DEBUG - 2021-08-16 18:33:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:33:51 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:33:51 --> 0.0376 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:33:51 --> 0.001 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:33:51 --> Total execution time: 6.4155
DEBUG - 2021-08-16 18:43:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:43:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:43:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:43:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:43:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:44:54 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:44:54 --> 19.6406 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-16 18:44:54 --> 0.1374 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-16 18:44:54 --> 8.5629 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-16 18:44:54 --> 13.2001 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-16 18:44:54 --> 7.7555 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-16 18:44:54 --> 0.0704 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-16 18:44:54 --> 11.3983 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-16 18:44:54 --> 0.195 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 18:44:54 --> 0.0014 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 18:44:54 --> 0.001 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:44:54 --> 0.001 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:44:54 --> 0.0013 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 18:44:54 --> 0.0548 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-16 18:44:54 --> Total execution time: 61.1897
DEBUG - 2021-08-16 18:45:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:45:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:45:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:45:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:45:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:45:10 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:45:10 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 18:45:10 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-16 18:45:10 --> Total execution time: 0.1255
DEBUG - 2021-08-16 18:45:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:45:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:45:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:45:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:45:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:45:25 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:45:25 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 18:45:25 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-16 18:45:25 --> Total execution time: 0.1006
DEBUG - 2021-08-16 18:45:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:45:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:45:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:45:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:45:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:45:40 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:45:40 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 18:45:40 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-16 18:45:40 --> Total execution time: 0.0898
DEBUG - 2021-08-16 18:45:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:45:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:45:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:45:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:45:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:45:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:45:55 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 18:45:55 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-16 18:45:55 --> Total execution time: 0.0647
DEBUG - 2021-08-16 18:46:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:46:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:46:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:46:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:46:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:46:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:46:10 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 18:46:10 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-16 18:46:10 --> Total execution time: 0.0823
DEBUG - 2021-08-16 18:46:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:46:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:46:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:46:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:46:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:46:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:46:25 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 18:46:25 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-16 18:46:25 --> Total execution time: 0.1171
DEBUG - 2021-08-16 18:46:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:46:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:46:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:46:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:46:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:46:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:46:40 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 18:46:40 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-16 18:46:40 --> Total execution time: 0.0725
DEBUG - 2021-08-16 18:46:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:46:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:46:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:46:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:46:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:46:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:46:55 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 18:46:55 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-16 18:46:55 --> Total execution time: 0.0768
DEBUG - 2021-08-16 18:47:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:47:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:47:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:47:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:47:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:47:10 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:47:10 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 18:47:10 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-16 18:47:10 --> Total execution time: 0.4244
DEBUG - 2021-08-16 18:47:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:47:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:47:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:47:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:47:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:47:26 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:47:26 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 18:47:26 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-16 18:47:26 --> Total execution time: 0.4349
DEBUG - 2021-08-16 18:47:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:47:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:47:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:47:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:47:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:47:40 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:47:40 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 18:47:40 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-16 18:47:40 --> Total execution time: 0.0763
DEBUG - 2021-08-16 18:47:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:47:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:47:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:47:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:47:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:47:55 --> 0.0017 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:47:55 --> 0.0013 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 18:47:55 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-16 18:47:55 --> Total execution time: 0.0916
DEBUG - 2021-08-16 18:48:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:48:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:48:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:48:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:48:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:48:10 --> 0.0098 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:48:10 --> 0.0007 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 18:48:10 --> 0.0023 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-16 18:48:10 --> Total execution time: 0.1345
DEBUG - 2021-08-16 18:48:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:48:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:48:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:48:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:48:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:48:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:48:25 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 18:48:25 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-16 18:48:25 --> Total execution time: 0.0711
DEBUG - 2021-08-16 18:48:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:48:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:48:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:48:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:48:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:48:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:48:40 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 18:48:40 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-16 18:48:40 --> Total execution time: 0.0903
DEBUG - 2021-08-16 18:48:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:48:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:48:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:48:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:48:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:48:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:48:55 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 18:48:55 --> 0.001 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-16 18:48:55 --> Total execution time: 0.3621
DEBUG - 2021-08-16 18:49:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:49:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:49:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:49:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:49:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:49:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:49:10 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 18:49:10 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-16 18:49:10 --> Total execution time: 0.0884
DEBUG - 2021-08-16 18:49:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:49:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:49:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:49:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:49:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:49:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:49:25 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 18:49:25 --> 0.0004 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-16 18:49:25 --> Total execution time: 0.2141
DEBUG - 2021-08-16 18:49:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:49:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:49:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:49:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:49:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:49:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:49:40 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 18:49:40 --> 0.0003 | SELECT * FROM `csvexportfile_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-16 18:49:40 --> Total execution time: 0.0805
DEBUG - 2021-08-16 18:49:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:49:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:49:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:49:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:49:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:49:45 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:49:45 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 18:49:45 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 18:49:45 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:49:45 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:49:45 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-16 18:49:45 --> Total execution time: 0.0864
DEBUG - 2021-08-16 18:50:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:50:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:50:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:50:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:50:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:50:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:50:00 --> 0.002 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 18:50:00 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 18:50:00 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:50:00 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:50:00 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-16 18:50:00 --> Total execution time: 0.0929
DEBUG - 2021-08-16 18:50:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:50:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:50:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:50:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:50:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:50:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:50:23 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:50:23 --> Total execution time: 0.0824
DEBUG - 2021-08-16 18:50:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:50:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:50:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:50:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:50:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:50:43 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:50:43 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:50:43 --> Total execution time: 0.0976
DEBUG - 2021-08-16 18:51:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:51:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:51:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:51:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:51:03 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:51:03 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:51:03 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:51:03 --> Total execution time: 0.0719
DEBUG - 2021-08-16 18:51:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:51:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:51:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:51:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:51:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:51:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:51:23 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:51:23 --> Total execution time: 0.0645
DEBUG - 2021-08-16 18:51:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:51:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:51:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:51:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:51:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:51:43 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:51:43 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:51:43 --> Total execution time: 0.0707
DEBUG - 2021-08-16 18:52:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:52:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:52:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:52:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:52:03 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:52:03 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:52:03 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:52:03 --> Total execution time: 0.0797
DEBUG - 2021-08-16 18:52:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:52:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:52:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:52:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:52:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:52:23 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:52:23 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:52:23 --> Total execution time: 0.0820
DEBUG - 2021-08-16 18:52:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:52:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:52:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:52:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:52:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:52:27 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:52:27 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 18:52:27 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 18:52:27 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:52:27 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:52:27 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-16 18:52:27 --> Total execution time: 0.0887
DEBUG - 2021-08-16 18:52:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:52:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:52:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:52:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:52:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:52:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:52:40 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 18:52:40 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 18:52:40 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:52:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:52:40 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-16 18:52:40 --> Total execution time: 0.0810
DEBUG - 2021-08-16 18:53:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:53:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:53:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:53:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:53:03 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:53:03 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:53:03 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:53:03 --> Total execution time: 0.0801
DEBUG - 2021-08-16 18:53:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:53:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:53:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:53:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:53:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:53:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:53:23 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:53:23 --> Total execution time: 0.0674
DEBUG - 2021-08-16 18:53:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:53:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:53:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:53:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:53:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:53:43 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:53:43 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:53:43 --> Total execution time: 0.0690
DEBUG - 2021-08-16 18:53:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:53:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:53:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:53:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:53:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:53:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:53:46 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 18:53:46 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 18:53:46 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:53:46 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:53:46 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-16 18:53:46 --> Total execution time: 0.0748
DEBUG - 2021-08-16 18:53:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:53:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:53:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:53:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:53:52 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:53:52 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:53:52 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 18:53:52 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 18:53:52 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:53:52 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:53:52 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-16 18:53:52 --> Total execution time: 0.0874
DEBUG - 2021-08-16 18:54:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:54:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:54:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:54:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:54:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:54:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:54:15 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:54:15 --> Total execution time: 0.0884
DEBUG - 2021-08-16 18:54:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:54:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:54:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:54:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:54:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:54:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:54:29 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 18:54:29 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 18:54:29 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:54:29 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:54:29 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-16 18:54:29 --> Total execution time: 0.0804
DEBUG - 2021-08-16 18:54:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:54:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:54:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:54:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:54:36 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:54:36 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:54:36 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 18:54:36 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 18:54:36 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:54:36 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:54:36 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-16 18:54:36 --> Total execution time: 0.0949
DEBUG - 2021-08-16 18:54:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:54:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:54:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:54:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:54:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:54:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:54:59 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:54:59 --> Total execution time: 0.0660
DEBUG - 2021-08-16 18:55:19 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:55:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:55:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:55:19 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:55:19 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:55:19 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:55:19 --> 0.0007 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:55:19 --> Total execution time: 0.0942
DEBUG - 2021-08-16 18:55:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:55:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:55:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:55:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:55:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:55:39 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:55:39 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:55:39 --> Total execution time: 0.0650
DEBUG - 2021-08-16 18:55:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:55:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:55:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:55:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:55:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:55:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:55:59 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:55:59 --> Total execution time: 0.0708
DEBUG - 2021-08-16 18:56:19 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:56:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:56:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:56:19 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:56:19 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:56:19 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:56:19 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:56:19 --> Total execution time: 0.0679
DEBUG - 2021-08-16 18:56:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:56:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:56:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:56:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:56:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:56:39 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:56:39 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:56:39 --> Total execution time: 0.0818
DEBUG - 2021-08-16 18:56:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:56:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:56:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:56:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:56:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:56:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:56:46 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 18:56:46 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 18:56:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:56:46 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:56:46 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-16 18:56:46 --> Total execution time: 0.0890
DEBUG - 2021-08-16 18:56:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:56:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:56:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:56:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:56:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:56:56 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:56:56 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 18:56:56 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 18:56:56 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:56:56 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:56:56 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-16 18:56:56 --> Total execution time: 0.0849
DEBUG - 2021-08-16 18:57:19 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:57:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:57:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:57:19 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:57:19 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:57:19 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:57:19 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:57:19 --> Total execution time: 0.0746
DEBUG - 2021-08-16 18:57:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:57:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:57:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:57:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:57:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:57:39 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:57:39 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:57:39 --> Total execution time: 0.0674
DEBUG - 2021-08-16 18:57:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:57:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:57:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:57:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:57:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:57:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:57:59 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:57:59 --> Total execution time: 0.0728
DEBUG - 2021-08-16 18:58:19 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:58:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:58:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:58:19 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:58:19 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:58:19 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:58:19 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:58:19 --> Total execution time: 0.0779
DEBUG - 2021-08-16 18:58:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:58:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:58:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:58:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:58:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:58:23 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:58:23 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 18:58:23 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 18:58:23 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:58:23 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:58:23 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-16 18:58:23 --> Total execution time: 0.0717
DEBUG - 2021-08-16 18:58:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:58:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:58:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:58:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:58:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:58:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:58:31 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 18:58:31 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 18:58:31 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:58:31 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:58:31 --> 0.0002 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-16 18:58:31 --> Total execution time: 0.0845
DEBUG - 2021-08-16 18:58:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:58:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:58:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:58:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:58:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:58:34 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:58:34 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 18:58:34 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 18:58:34 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:58:34 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:58:34 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-16 18:58:34 --> Total execution time: 0.0780
DEBUG - 2021-08-16 18:58:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:58:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:58:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:58:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:58:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:58:40 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:58:40 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 18:58:40 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 18:58:40 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:58:40 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:58:40 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-16 18:58:40 --> Total execution time: 0.0820
DEBUG - 2021-08-16 18:59:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:59:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:59:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:59:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:59:02 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:59:02 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:59:02 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:59:02 --> Total execution time: 0.0611
DEBUG - 2021-08-16 18:59:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:59:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:59:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:59:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:59:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:59:22 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:59:22 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:59:22 --> Total execution time: 0.0782
DEBUG - 2021-08-16 18:59:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 18:59:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 18:59:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 18:59:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 18:59:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 18:59:42 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 18:59:42 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 18:59:42 --> Total execution time: 0.0773
DEBUG - 2021-08-16 19:00:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:00:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:00:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:00:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:00:02 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:00:02 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:00:02 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:00:02 --> Total execution time: 0.0778
DEBUG - 2021-08-16 19:00:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:00:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:00:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:00:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:00:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:00:22 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:00:22 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:00:22 --> Total execution time: 0.0743
DEBUG - 2021-08-16 19:00:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:00:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:00:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:00:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:00:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:00:42 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:00:42 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:00:42 --> Total execution time: 0.0634
DEBUG - 2021-08-16 19:01:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:01:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:01:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:01:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:01:02 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:01:02 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:01:02 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:01:02 --> Total execution time: 0.0847
DEBUG - 2021-08-16 19:01:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:01:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:01:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:01:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:01:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:01:22 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:01:22 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:01:22 --> Total execution time: 0.0834
DEBUG - 2021-08-16 19:01:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:01:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:01:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:01:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:01:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:01:42 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:01:42 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:01:42 --> Total execution time: 0.0754
DEBUG - 2021-08-16 19:02:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:02:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:02:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:02:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:02:02 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:02:02 --> 0.0021 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:02:02 --> 0.0015 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:02:02 --> Total execution time: 0.1036
DEBUG - 2021-08-16 19:02:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:02:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:02:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:02:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:02:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:02:22 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:02:22 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:02:22 --> Total execution time: 0.0685
DEBUG - 2021-08-16 19:02:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:02:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:02:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:02:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:02:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:02:42 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:02:42 --> 0.0009 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:02:42 --> Total execution time: 0.0910
DEBUG - 2021-08-16 19:03:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:03:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:03:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:03:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:03:02 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:03:02 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:03:02 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:03:02 --> Total execution time: 0.0850
DEBUG - 2021-08-16 19:03:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:03:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:03:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:03:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:03:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:03:22 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:03:22 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:03:22 --> Total execution time: 0.0918
DEBUG - 2021-08-16 19:03:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:03:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:03:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:03:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:03:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:03:42 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:03:42 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:03:42 --> Total execution time: 0.0700
DEBUG - 2021-08-16 19:04:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:04:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:04:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:04:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:04:02 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:04:02 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:04:02 --> 0.0006 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:04:02 --> Total execution time: 0.1232
DEBUG - 2021-08-16 19:04:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:04:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:04:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:04:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:04:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:04:22 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:04:22 --> 0.0013 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:04:22 --> Total execution time: 0.1070
DEBUG - 2021-08-16 19:04:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:04:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:04:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:04:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:04:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:04:42 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:04:42 --> 0.0014 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:04:42 --> Total execution time: 0.0961
DEBUG - 2021-08-16 19:05:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:05:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:05:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:05:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:05:02 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:05:02 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:05:02 --> 0.0006 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:05:02 --> Total execution time: 0.1023
DEBUG - 2021-08-16 19:05:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:05:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:05:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:05:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:05:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:05:22 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:05:22 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:05:22 --> Total execution time: 0.1049
DEBUG - 2021-08-16 19:05:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:05:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:05:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:05:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:05:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:05:42 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:05:42 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:05:42 --> Total execution time: 0.0821
DEBUG - 2021-08-16 19:06:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:06:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:06:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:06:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:06:02 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:06:02 --> 0.0019 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:06:02 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:06:02 --> Total execution time: 0.0890
DEBUG - 2021-08-16 19:06:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:06:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:06:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:06:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:06:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:06:22 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:06:22 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:06:22 --> Total execution time: 0.0903
DEBUG - 2021-08-16 19:06:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:06:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:06:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:06:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:06:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:06:42 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:06:42 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:06:42 --> Total execution time: 0.0839
DEBUG - 2021-08-16 19:07:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:07:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:07:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:07:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:07:02 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:07:02 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:07:02 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:07:02 --> Total execution time: 0.0951
DEBUG - 2021-08-16 19:07:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:07:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:07:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:07:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:07:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:07:22 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:07:22 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:07:22 --> Total execution time: 0.0735
DEBUG - 2021-08-16 19:07:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:07:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:07:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:07:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:07:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:07:42 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:07:42 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:07:42 --> Total execution time: 0.0845
DEBUG - 2021-08-16 19:08:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:08:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:08:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:08:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:08:02 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:08:02 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:08:02 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:08:02 --> Total execution time: 0.0898
DEBUG - 2021-08-16 19:08:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:08:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:08:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:08:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:08:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:08:22 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:08:22 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:08:22 --> Total execution time: 0.0711
DEBUG - 2021-08-16 19:08:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:08:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:08:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:08:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:08:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:08:42 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:08:42 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:08:42 --> Total execution time: 0.0870
DEBUG - 2021-08-16 19:09:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:09:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:09:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:09:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:09:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:09:34 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:09:34 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:09:34 --> Total execution time: 0.0901
DEBUG - 2021-08-16 19:10:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:10:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:10:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:10:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:10:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:10:34 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:10:34 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:10:34 --> Total execution time: 0.0921
DEBUG - 2021-08-16 19:11:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:11:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:11:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:11:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:11:05 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:11:05 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:11:05 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:11:05 --> Total execution time: 0.0984
DEBUG - 2021-08-16 19:11:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:11:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:11:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:11:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:11:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:11:22 --> 0.0028 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:11:22 --> 0.0021 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:11:22 --> Total execution time: 0.0983
DEBUG - 2021-08-16 19:11:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:11:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:11:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:11:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:11:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:11:42 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:11:42 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:11:42 --> Total execution time: 0.0769
DEBUG - 2021-08-16 19:12:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:12:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:12:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:12:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:12:02 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:12:02 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:12:02 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:12:02 --> Total execution time: 0.0728
DEBUG - 2021-08-16 19:12:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:12:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:12:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:12:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:12:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:12:22 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:12:22 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:12:22 --> Total execution time: 0.0808
DEBUG - 2021-08-16 19:12:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:12:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:12:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:12:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:12:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:12:42 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:12:42 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:12:42 --> Total execution time: 0.0757
DEBUG - 2021-08-16 19:13:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:13:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:13:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:13:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:13:02 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:13:02 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:13:02 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:13:02 --> Total execution time: 0.0822
DEBUG - 2021-08-16 19:13:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:13:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:13:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:13:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:13:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:13:22 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:13:22 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:13:22 --> Total execution time: 0.0805
DEBUG - 2021-08-16 19:13:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:13:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:13:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:13:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:13:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:13:42 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:13:42 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:13:42 --> Total execution time: 0.0754
DEBUG - 2021-08-16 19:14:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:14:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:14:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:14:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:14:02 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:14:02 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:14:02 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:14:02 --> Total execution time: 0.0685
DEBUG - 2021-08-16 19:14:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:14:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:14:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:14:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:14:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:14:22 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:14:22 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:14:22 --> Total execution time: 0.0717
DEBUG - 2021-08-16 19:14:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:14:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:14:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:14:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:14:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:14:42 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:14:42 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:14:42 --> Total execution time: 0.0936
DEBUG - 2021-08-16 19:15:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:15:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:15:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:15:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:15:02 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:15:02 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:15:02 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:15:02 --> Total execution time: 0.0796
DEBUG - 2021-08-16 19:15:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:15:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:15:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:15:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:15:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:15:22 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:15:22 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:15:22 --> Total execution time: 0.0706
DEBUG - 2021-08-16 19:15:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:15:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:15:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:15:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:15:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:15:42 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:15:42 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:15:42 --> Total execution time: 0.0759
DEBUG - 2021-08-16 19:16:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:16:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:16:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:16:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:16:02 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:16:02 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:16:02 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:16:02 --> Total execution time: 0.0701
DEBUG - 2021-08-16 19:16:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:16:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:16:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:16:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:16:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:16:22 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:16:22 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:16:22 --> Total execution time: 0.0809
DEBUG - 2021-08-16 19:16:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:16:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:16:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:16:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:16:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:16:42 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:16:42 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:16:42 --> Total execution time: 0.0974
DEBUG - 2021-08-16 19:17:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:17:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:17:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:17:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:17:02 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:17:02 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:17:02 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:17:02 --> Total execution time: 0.0783
DEBUG - 2021-08-16 19:17:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:17:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:17:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:17:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:17:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:17:22 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:17:22 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:17:22 --> Total execution time: 0.0899
DEBUG - 2021-08-16 19:17:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:17:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:17:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:17:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:17:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:17:42 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:17:42 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:17:42 --> Total execution time: 0.0924
DEBUG - 2021-08-16 19:18:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:18:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:18:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:18:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:18:02 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:18:02 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:18:02 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:18:02 --> Total execution time: 0.0757
DEBUG - 2021-08-16 19:18:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:18:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:18:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:18:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:18:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:18:22 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:18:22 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:18:22 --> Total execution time: 0.0764
DEBUG - 2021-08-16 19:18:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:18:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:18:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:18:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:18:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:18:42 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:18:42 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:18:42 --> Total execution time: 0.0996
DEBUG - 2021-08-16 19:19:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:19:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:19:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:19:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:19:02 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:19:02 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:19:02 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:19:02 --> Total execution time: 0.0850
DEBUG - 2021-08-16 19:19:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:19:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:19:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:19:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:19:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:19:22 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:19:22 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:19:22 --> Total execution time: 0.0875
DEBUG - 2021-08-16 19:19:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:19:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:19:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:19:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:19:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:19:42 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:19:42 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:19:42 --> Total execution time: 0.0687
DEBUG - 2021-08-16 19:20:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:20:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:20:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:20:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:20:02 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:20:02 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:20:02 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:20:02 --> Total execution time: 0.0680
DEBUG - 2021-08-16 19:20:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:20:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:20:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:20:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:20:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:20:22 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:20:22 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:20:22 --> Total execution time: 0.0797
DEBUG - 2021-08-16 19:20:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:20:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:20:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:20:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:20:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:20:42 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:20:42 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:20:42 --> Total execution time: 0.0822
DEBUG - 2021-08-16 19:21:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:21:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:21:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:21:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:21:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:21:34 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:21:34 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:21:34 --> Total execution time: 0.0800
DEBUG - 2021-08-16 19:21:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:21:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:21:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:21:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:21:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:21:56 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:21:56 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:21:56 --> Total execution time: 0.1095
DEBUG - 2021-08-16 19:22:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:22:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:22:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:22:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:22:02 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:22:02 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:22:02 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:22:02 --> Total execution time: 0.0752
DEBUG - 2021-08-16 19:22:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:22:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:22:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:22:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:22:03 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:22:03 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:22:03 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 19:22:03 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 19:22:03 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:22:03 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:22:03 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-16 19:22:03 --> Total execution time: 0.0728
DEBUG - 2021-08-16 19:22:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:22:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:22:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:22:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:22:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:22:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:22:14 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 19:22:14 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 19:22:14 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:22:14 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:22:14 --> 0.0002 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-16 19:22:14 --> Total execution time: 0.0777
DEBUG - 2021-08-16 19:22:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:22:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:22:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:22:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:22:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:22:35 --> 0.0034 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:22:35 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:22:35 --> Total execution time: 0.1162
DEBUG - 2021-08-16 19:22:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:22:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:22:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:22:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:22:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:22:56 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:22:56 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:22:56 --> Total execution time: 0.0861
DEBUG - 2021-08-16 19:23:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:23:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:23:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:23:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:23:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:23:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:23:16 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:23:16 --> Total execution time: 0.0892
DEBUG - 2021-08-16 19:23:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:23:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:23:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:23:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:23:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:23:35 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:23:35 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:23:35 --> Total execution time: 0.0996
DEBUG - 2021-08-16 19:23:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:23:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:23:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:23:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:23:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:23:56 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:23:56 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:23:56 --> Total execution time: 0.0919
DEBUG - 2021-08-16 19:24:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:24:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:24:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:24:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:24:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:24:16 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:24:16 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:24:16 --> Total execution time: 0.0834
DEBUG - 2021-08-16 19:24:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:24:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:24:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:24:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:24:36 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:24:36 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:24:36 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:24:36 --> Total execution time: 0.0802
DEBUG - 2021-08-16 19:24:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:24:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:24:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:24:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:24:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:24:56 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:24:56 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:24:56 --> Total execution time: 0.0721
DEBUG - 2021-08-16 19:25:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:25:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:25:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:25:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:25:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:25:16 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:25:16 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:25:16 --> Total execution time: 0.0756
DEBUG - 2021-08-16 19:25:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:25:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:25:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:25:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:25:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:25:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:25:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:25:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:25:48 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:25:49 --> 0.1769 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:25:49 --> 0.028 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 19:25:49 --> 0.1669 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 19:25:49 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:25:49 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:25:49 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-16 19:25:49 --> Total execution time: 0.4544
DEBUG - 2021-08-16 19:25:57 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:25:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:25:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:25:57 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:25:57 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:25:57 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:25:57 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 19:25:57 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 19:25:57 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:25:57 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:25:57 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-16 19:25:57 --> Total execution time: 0.0743
DEBUG - 2021-08-16 19:26:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:26:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:26:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:26:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:26:18 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:26:18 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:26:18 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:26:18 --> Total execution time: 0.0906
DEBUG - 2021-08-16 19:26:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:26:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:26:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:26:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:26:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:26:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:26:38 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:26:38 --> Total execution time: 0.0792
DEBUG - 2021-08-16 19:26:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:26:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:26:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:26:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:26:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:26:58 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:26:58 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:26:58 --> Total execution time: 0.0889
DEBUG - 2021-08-16 19:27:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:27:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:27:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:27:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:27:18 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:27:18 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:27:18 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:27:18 --> Total execution time: 0.0891
DEBUG - 2021-08-16 19:27:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:27:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:27:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:27:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:27:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:27:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:27:38 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:27:38 --> Total execution time: 0.1146
DEBUG - 2021-08-16 19:27:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:27:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:27:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:27:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:27:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:27:58 --> 0.0833 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:27:58 --> 0.0281 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:27:58 --> Total execution time: 0.1891
DEBUG - 2021-08-16 19:28:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:28:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:28:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:28:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:28:18 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:28:18 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:28:18 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:28:18 --> Total execution time: 0.0833
DEBUG - 2021-08-16 19:28:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:28:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:28:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:28:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:28:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:28:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:28:38 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:28:38 --> Total execution time: 0.0898
DEBUG - 2021-08-16 19:28:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:28:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:28:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:28:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:28:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:28:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:28:41 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 19:28:41 --> 0.0402 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 19:28:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:28:41 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:28:41 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-16 19:28:41 --> Total execution time: 0.1180
DEBUG - 2021-08-16 19:28:49 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:28:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:28:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:28:49 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:28:49 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-16 19:29:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:29:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:29:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:29:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:29:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:29:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:29:40 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 19:29:40 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 19:29:40 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:29:40 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:29:40 --> 0.0002 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-16 19:29:40 --> Total execution time: 0.0807
DEBUG - 2021-08-16 19:29:49 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:29:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:29:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:29:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:29:50 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-16 19:29:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:29:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:29:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:29:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:29:50 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:29:50 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:29:50 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 19:29:50 --> 0.0009 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 19:29:50 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:29:50 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:29:50 --> 0.0002 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-16 19:29:50 --> Total execution time: 0.0723
DEBUG - 2021-08-16 19:30:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:30:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:30:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:30:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:30:11 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:30:11 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:30:11 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:30:11 --> Total execution time: 0.0773
DEBUG - 2021-08-16 19:30:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:30:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:30:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:30:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:30:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:30:31 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:30:31 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:30:31 --> Total execution time: 0.0800
DEBUG - 2021-08-16 19:30:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:30:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:30:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:30:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:30:51 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:30:51 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:30:51 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:30:51 --> Total execution time: 0.0667
DEBUG - 2021-08-16 19:31:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:31:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:31:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:31:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:31:11 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:31:11 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:31:11 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:31:11 --> Total execution time: 0.0663
DEBUG - 2021-08-16 19:31:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:31:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:31:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:31:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:31:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:31:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:31:31 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:31:31 --> Total execution time: 0.0630
DEBUG - 2021-08-16 19:31:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:31:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:31:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:31:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:31:51 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:31:51 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:31:51 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:31:51 --> Total execution time: 0.0724
DEBUG - 2021-08-16 19:32:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:32:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:32:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:32:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:32:11 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:32:11 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:32:11 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:32:11 --> Total execution time: 0.0718
DEBUG - 2021-08-16 19:32:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:32:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:32:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:32:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:32:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:32:31 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:32:31 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:32:31 --> Total execution time: 0.0810
DEBUG - 2021-08-16 19:32:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:32:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:32:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:32:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:32:41 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-16 19:32:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:32:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:32:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:32:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:32:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:32:42 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:32:42 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 19:32:42 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 19:32:42 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:32:42 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:32:42 --> 0.0002 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-16 19:32:42 --> Total execution time: 0.0752
DEBUG - 2021-08-16 19:32:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:32:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:32:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:32:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:32:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:32:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:32:44 --> 0.0005 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 19:32:44 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 19:32:44 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:32:44 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:32:44 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-16 19:32:44 --> Total execution time: 0.0787
DEBUG - 2021-08-16 19:32:49 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:32:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:32:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:32:49 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:32:49 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:32:49 --> 0.0015 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:32:49 --> 0.0028 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 19:32:49 --> 0.0037 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 19:32:49 --> 0.0059 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:32:49 --> 0.0028 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:32:49 --> 0.0008 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-16 19:32:49 --> Total execution time: 0.1047
DEBUG - 2021-08-16 19:32:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:32:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:32:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:32:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:32:59 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-16 19:32:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:32:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:32:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:32:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:32:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:32:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:32:59 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 19:32:59 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 19:32:59 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:32:59 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:32:59 --> 0.0002 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-16 19:32:59 --> Total execution time: 0.0714
DEBUG - 2021-08-16 19:33:19 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:33:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:33:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:33:19 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:33:19 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:33:19 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:33:19 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 19:33:19 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 19:33:19 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:33:19 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:33:19 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-16 19:33:19 --> Total execution time: 0.0782
DEBUG - 2021-08-16 19:33:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:33:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:33:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:33:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:33:26 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-16 19:33:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:33:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:33:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:33:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:33:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:33:26 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:33:26 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 19:33:26 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 19:33:26 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:33:26 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:33:26 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-16 19:33:26 --> Total execution time: 0.0830
DEBUG - 2021-08-16 19:33:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:33:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:33:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:33:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:33:47 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:33:47 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:33:47 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:33:47 --> Total execution time: 0.0829
DEBUG - 2021-08-16 19:33:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:33:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:33:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:33:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:33:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:33:56 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:33:56 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 19:33:56 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 19:33:56 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:33:56 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:33:56 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-16 19:33:56 --> Total execution time: 0.0718
DEBUG - 2021-08-16 19:34:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:34:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:34:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:34:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:34:04 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-16 19:36:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:36:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:36:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:36:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:36:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:36:21 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:36:21 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 19:36:21 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 19:36:21 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:36:21 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:36:21 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-16 19:36:21 --> Total execution time: 0.0845
DEBUG - 2021-08-16 19:36:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:36:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:36:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:36:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:36:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:36:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:36:23 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 19:36:23 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 19:36:23 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:36:23 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:36:23 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-16 19:36:23 --> Total execution time: 0.0690
DEBUG - 2021-08-16 19:36:32 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:36:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:36:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:36:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:36:32 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-16 19:36:32 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:36:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:36:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:36:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:36:32 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:36:32 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:36:32 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 19:36:32 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 19:36:32 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:36:32 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:36:32 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-16 19:36:32 --> Total execution time: 0.0691
DEBUG - 2021-08-16 19:36:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:36:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:36:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:36:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:36:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:36:53 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:36:53 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:36:53 --> Total execution time: 0.0837
DEBUG - 2021-08-16 19:37:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:37:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:37:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:37:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:37:03 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:37:03 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:37:03 --> 0.0006 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 19:37:03 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 19:37:03 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:37:03 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:37:03 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-16 19:37:03 --> Total execution time: 0.0765
DEBUG - 2021-08-16 19:37:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:37:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:37:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:37:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:37:11 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-16 19:37:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:37:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:37:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:37:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:37:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:37:25 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:37:25 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 19:37:25 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 19:37:25 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:37:25 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:37:25 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-16 19:37:25 --> Total execution time: 0.0708
DEBUG - 2021-08-16 19:37:32 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:37:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:37:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:37:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:37:32 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-16 19:37:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:37:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:37:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:37:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:37:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:37:34 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:37:34 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 19:37:34 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 19:37:34 --> 0.0012 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:37:34 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:37:34 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-16 19:37:34 --> Total execution time: 0.0744
DEBUG - 2021-08-16 19:37:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:37:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:37:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:37:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:37:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:37:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:37:54 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:37:54 --> Total execution time: 0.2672
DEBUG - 2021-08-16 19:38:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:38:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:38:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:38:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:38:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:38:14 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:38:14 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:38:14 --> Total execution time: 0.0732
DEBUG - 2021-08-16 19:38:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:38:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:38:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:38:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:38:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:38:34 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:38:34 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:38:34 --> Total execution time: 0.0658
DEBUG - 2021-08-16 19:38:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:38:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:38:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:38:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:38:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:38:54 --> 0.011 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:38:54 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:38:54 --> Total execution time: 0.1275
DEBUG - 2021-08-16 19:39:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:39:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:39:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:39:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:39:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:39:14 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:39:14 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:39:14 --> Total execution time: 0.0701
DEBUG - 2021-08-16 19:39:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:39:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:39:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:39:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:39:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:39:34 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:39:34 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:39:34 --> Total execution time: 0.0748
DEBUG - 2021-08-16 19:39:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:39:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:39:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:39:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:39:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:39:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:39:54 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:39:54 --> Total execution time: 0.0650
DEBUG - 2021-08-16 19:40:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:40:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:40:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:40:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:40:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:40:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:40:14 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:40:14 --> Total execution time: 0.0638
DEBUG - 2021-08-16 19:40:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:40:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:40:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:40:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:40:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:40:34 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:40:34 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:40:34 --> Total execution time: 0.0642
DEBUG - 2021-08-16 19:40:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:40:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:40:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:40:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:40:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:40:54 --> 0.0008 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:40:54 --> 0.0006 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:40:54 --> Total execution time: 0.2876
DEBUG - 2021-08-16 19:41:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:41:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:41:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:41:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:41:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:41:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:41:14 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:41:14 --> Total execution time: 0.0792
DEBUG - 2021-08-16 19:41:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:41:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:41:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:41:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:41:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:41:34 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:41:34 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:41:34 --> Total execution time: 0.3575
DEBUG - 2021-08-16 19:41:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:41:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:41:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:41:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:41:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:41:54 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:41:54 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:41:54 --> Total execution time: 0.0698
DEBUG - 2021-08-16 19:42:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:42:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:42:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:42:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:42:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:42:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:42:14 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:42:14 --> Total execution time: 0.0736
DEBUG - 2021-08-16 19:42:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:42:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:42:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:42:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:42:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:42:34 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:42:34 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:42:34 --> Total execution time: 0.0831
DEBUG - 2021-08-16 19:42:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:42:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:42:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:42:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:42:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:42:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:42:54 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:42:54 --> Total execution time: 0.0713
DEBUG - 2021-08-16 19:43:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:43:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:43:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:43:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:43:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:43:34 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:43:34 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:43:34 --> Total execution time: 0.0788
DEBUG - 2021-08-16 19:44:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:44:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:44:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:44:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:44:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:44:34 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:44:34 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:44:34 --> Total execution time: 0.0707
DEBUG - 2021-08-16 19:45:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:45:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:45:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:45:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:45:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:45:34 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:45:34 --> 0.0005 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:45:34 --> Total execution time: 0.1439
DEBUG - 2021-08-16 19:46:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:46:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:46:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:46:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:46:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:46:34 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:46:34 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:46:34 --> Total execution time: 0.0746
DEBUG - 2021-08-16 19:47:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:47:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:47:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:47:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:47:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:47:34 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:47:34 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:47:34 --> Total execution time: 0.0624
DEBUG - 2021-08-16 19:48:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:48:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:48:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:48:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:48:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:48:27 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:48:27 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 19:48:27 --> Total execution time: 0.1043
DEBUG - 2021-08-16 19:48:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:48:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:48:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:48:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:48:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:48:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:48:29 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 19:48:29 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 19:48:29 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:48:29 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:48:29 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-16 19:48:29 --> Total execution time: 0.1162
DEBUG - 2021-08-16 19:48:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:48:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:48:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:48:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:48:37 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-16 19:49:06 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:49:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:49:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:49:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:49:06 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:49:06 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:49:06 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 19:49:06 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 19:49:06 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:49:06 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:49:06 --> 0.0002 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-16 19:49:06 --> Total execution time: 0.0790
DEBUG - 2021-08-16 19:49:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:49:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:49:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:49:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:49:14 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-16 19:49:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:49:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:49:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:49:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:49:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:49:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:49:38 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 19:49:38 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 19:49:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:49:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:49:38 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-16 19:49:38 --> Total execution time: 0.2505
DEBUG - 2021-08-16 19:49:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:49:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:49:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:49:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:49:46 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-16 19:49:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:49:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:49:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:49:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:49:52 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:49:52 --> 0.0008 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:49:52 --> 0.0005 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 19:49:52 --> 0.0006 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 19:49:52 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:49:52 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:49:52 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-16 19:49:52 --> Total execution time: 0.3914
DEBUG - 2021-08-16 19:49:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:49:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:49:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:49:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:49:59 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-16 19:50:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:50:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:50:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:50:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:50:05 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:50:05 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:50:05 --> 0.0005 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 19:50:05 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 19:50:05 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:50:05 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:50:05 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-16 19:50:05 --> Total execution time: 0.1750
DEBUG - 2021-08-16 19:50:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:50:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:50:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:50:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:50:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:50:21 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:50:21 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 19:50:21 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 19:50:21 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:50:21 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:50:21 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-16 19:50:21 --> Total execution time: 0.0894
DEBUG - 2021-08-16 19:50:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:50:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:50:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:50:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:50:31 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-16 19:50:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:50:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:50:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:50:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:50:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:50:55 --> 0.0008 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:50:55 --> 0.0005 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 19:50:55 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 19:50:55 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:50:55 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:50:55 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-16 19:50:55 --> Total execution time: 0.2190
DEBUG - 2021-08-16 19:51:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:51:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:51:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:51:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:51:04 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-16 19:51:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:51:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:51:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:51:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:51:24 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-16 19:52:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:52:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:52:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:52:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:52:13 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-16 19:52:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:52:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:52:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:52:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:52:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:52:25 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:52:25 --> 0.0005 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 19:52:25 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 19:52:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:52:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:52:25 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-16 19:52:25 --> Total execution time: 0.1727
DEBUG - 2021-08-16 19:52:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:52:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:52:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:52:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:52:36 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-16 19:53:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:53:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:53:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:53:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:53:01 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-16 19:53:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:53:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:53:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:53:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:53:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:53:55 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:53:55 --> 0.0005 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 19:53:55 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 19:53:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:53:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:53:55 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-16 19:53:55 --> Total execution time: 0.2175
DEBUG - 2021-08-16 19:54:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:54:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:54:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:54:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:54:03 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-16 19:54:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:54:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:54:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:54:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:54:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 19:54:08 --> 0.0021 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:54:08 --> 0.0006 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 19:54:08 --> 0.0006 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 19:54:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:54:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 19:54:08 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-16 19:54:08 --> Total execution time: 0.3303
DEBUG - 2021-08-16 19:54:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:54:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:54:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:54:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:54:24 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-16 19:56:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:56:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:56:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:56:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:56:34 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-16 19:57:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:57:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:57:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:57:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:57:43 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-16 19:57:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:57:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:57:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 19:57:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 19:57:55 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-16 19:58:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 19:58:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 19:58:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 20:04:19 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 20:04:22 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-16 20:05:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 20:05:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 20:06:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 20:06:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 20:06:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 20:06:04 --> 1.5508 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 20:06:04 --> 0.058 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 20:06:04 --> 0.145 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 20:06:04 --> 0.0012 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 20:06:04 --> 0.0011 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 20:06:04 --> 0.0011 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-16 20:06:04 --> Total execution time: 7.8634
DEBUG - 2021-08-16 20:06:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 20:06:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 20:06:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 20:06:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 20:06:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 20:06:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 20:06:28 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 20:06:28 --> Total execution time: 0.1402
DEBUG - 2021-08-16 20:06:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 20:06:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 20:06:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 20:06:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 20:06:46 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-16 20:06:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 20:06:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 20:06:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 20:07:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 20:07:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 20:07:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 20:07:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 20:07:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 20:07:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 20:07:49 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 20:07:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 20:07:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 20:08:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 20:08:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 20:08:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 20:11:19 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 20:11:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 20:11:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 20:11:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 20:11:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 20:11:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 20:11:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 20:11:30 --> 0.2992 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 20:11:30 --> 0.0386 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 20:11:30 --> 0.033 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 20:11:30 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 20:11:30 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 20:11:30 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-16 20:11:30 --> Total execution time: 1.9776
DEBUG - 2021-08-16 20:11:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 20:11:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 20:11:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 20:11:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 20:11:51 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 20:11:52 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 20:11:52 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 20:11:52 --> Total execution time: 0.1503
DEBUG - 2021-08-16 20:11:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 20:11:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 20:11:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 20:11:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 20:11:54 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-16 20:12:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 20:12:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 20:12:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 20:12:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 20:12:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 20:12:34 --> 0.0008 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 20:12:34 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 20:12:34 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 20:12:34 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 20:12:34 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 20:12:34 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-16 20:12:34 --> Total execution time: 0.0895
DEBUG - 2021-08-16 20:12:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 20:12:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 20:12:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 20:12:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 20:12:41 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-16 20:46:19 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 20:46:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 20:46:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 20:46:19 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 20:46:19 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 20:46:19 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 20:46:19 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 20:46:19 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 20:46:19 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 20:46:19 --> 0.0013 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 20:46:19 --> 0.0008 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-16 20:46:19 --> Total execution time: 0.0875
DEBUG - 2021-08-16 20:46:32 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 20:46:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 20:46:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 20:46:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 20:46:32 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 20:46:32 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 20:46:32 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 20:46:32 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 20:46:32 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 20:46:32 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 20:46:32 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-16 20:46:32 --> Total execution time: 0.0722
DEBUG - 2021-08-16 20:46:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 20:46:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 20:46:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 20:46:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 20:46:40 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-16 20:46:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 20:46:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 20:46:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 20:46:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 20:46:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 20:46:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 20:46:41 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-16 20:46:41 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-16 20:46:41 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 20:46:41 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 20:46:41 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-16 20:46:41 --> Total execution time: 0.0770
DEBUG - 2021-08-16 20:47:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 20:47:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 20:47:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 20:47:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 20:47:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 20:47:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 20:47:01 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 20:47:01 --> Total execution time: 0.1040
DEBUG - 2021-08-16 20:47:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 20:47:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 20:47:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 20:47:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 20:47:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 20:47:21 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 20:47:21 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 20:47:21 --> Total execution time: 0.0816
DEBUG - 2021-08-16 20:47:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 20:47:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 20:47:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 20:47:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 20:47:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 20:47:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 20:47:41 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 20:47:41 --> Total execution time: 0.0767
DEBUG - 2021-08-16 20:48:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 20:48:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 20:48:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 20:48:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 20:48:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 20:48:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 20:48:01 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 20:48:01 --> Total execution time: 0.0815
DEBUG - 2021-08-16 20:48:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 20:48:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 20:48:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 20:48:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 20:48:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 20:48:21 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 20:48:21 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 20:48:21 --> Total execution time: 0.0821
DEBUG - 2021-08-16 20:48:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 20:48:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 20:48:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 20:48:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 20:48:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 20:48:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 20:48:41 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 20:48:41 --> Total execution time: 0.0756
DEBUG - 2021-08-16 20:49:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 20:49:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 20:49:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 20:49:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 20:49:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 20:49:01 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 20:49:01 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 20:49:01 --> Total execution time: 0.0676
DEBUG - 2021-08-16 20:49:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 20:49:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 20:49:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 20:49:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 20:49:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 20:49:21 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 20:49:21 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 20:49:21 --> Total execution time: 0.0762
DEBUG - 2021-08-16 20:49:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 20:49:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 20:49:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 20:49:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 20:49:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 20:49:42 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 20:49:42 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 20:49:42 --> Total execution time: 0.0730
DEBUG - 2021-08-16 20:50:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 20:50:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 20:50:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 20:50:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 20:50:02 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 20:50:02 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 20:50:02 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 20:50:02 --> Total execution time: 0.0702
DEBUG - 2021-08-16 20:50:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 20:50:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 20:50:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 20:50:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 20:50:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 20:50:22 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 20:50:22 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 20:50:22 --> Total execution time: 0.0799
DEBUG - 2021-08-16 20:50:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 20:50:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 20:50:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 20:50:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 20:50:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 20:50:42 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 20:50:42 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 20:50:42 --> Total execution time: 0.0732
DEBUG - 2021-08-16 20:51:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 20:51:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 20:51:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 20:51:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 20:51:02 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 20:51:02 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 20:51:02 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 20:51:02 --> Total execution time: 0.0750
DEBUG - 2021-08-16 20:51:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 20:51:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 20:51:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 20:51:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 20:51:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 20:51:22 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 20:51:22 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 20:51:22 --> Total execution time: 0.0721
DEBUG - 2021-08-16 20:51:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 20:51:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 20:51:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 20:51:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 20:51:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 20:51:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 20:51:41 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 20:51:41 --> Total execution time: 0.0800
DEBUG - 2021-08-16 20:52:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 20:52:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 20:52:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 20:52:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 20:52:02 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 20:52:02 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 20:52:02 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 20:52:02 --> Total execution time: 0.0757
DEBUG - 2021-08-16 20:52:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 20:52:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 20:52:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 20:52:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 20:52:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 20:52:22 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 20:52:22 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 20:52:22 --> Total execution time: 0.0754
DEBUG - 2021-08-16 20:52:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 20:52:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 20:52:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 20:52:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 20:52:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 20:52:42 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 20:52:42 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 20:52:42 --> Total execution time: 0.0819
DEBUG - 2021-08-16 20:53:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 20:53:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 20:53:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 20:53:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 20:53:02 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 20:53:02 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 20:53:02 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 20:53:02 --> Total execution time: 0.0890
DEBUG - 2021-08-16 20:53:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 20:53:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 20:53:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 20:53:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 20:53:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 20:53:22 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 20:53:22 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 20:53:22 --> Total execution time: 0.0847
DEBUG - 2021-08-16 20:53:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 20:53:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 20:53:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 20:53:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 20:53:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 20:53:42 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 20:53:42 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 20:53:42 --> Total execution time: 0.0782
DEBUG - 2021-08-16 20:54:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 20:54:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 20:54:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 20:54:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 20:54:02 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 20:54:02 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 20:54:02 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 20:54:02 --> Total execution time: 0.0861
DEBUG - 2021-08-16 20:54:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 20:54:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 20:54:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 20:54:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 20:54:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 20:54:22 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 20:54:22 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 20:54:22 --> Total execution time: 0.0851
DEBUG - 2021-08-16 20:54:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 20:54:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 20:54:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 20:54:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 20:54:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 20:54:42 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 20:54:42 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 20:54:42 --> Total execution time: 0.0738
DEBUG - 2021-08-16 20:55:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 20:55:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 20:55:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 20:55:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 20:55:02 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 20:55:02 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 20:55:02 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 20:55:02 --> Total execution time: 0.0649
DEBUG - 2021-08-16 20:55:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 20:55:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 20:55:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 20:55:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 20:55:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 20:55:22 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 20:55:22 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 20:55:22 --> Total execution time: 0.0708
DEBUG - 2021-08-16 20:55:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 20:55:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 20:55:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 20:55:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 20:55:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 20:55:42 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 20:55:42 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 20:55:42 --> Total execution time: 0.0911
DEBUG - 2021-08-16 20:56:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 20:56:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 20:56:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 20:56:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 20:56:02 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 20:56:02 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 20:56:02 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 20:56:02 --> Total execution time: 0.0809
DEBUG - 2021-08-16 20:56:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 20:56:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 20:56:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 20:56:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 20:56:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 20:56:22 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 20:56:22 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 20:56:22 --> Total execution time: 0.0862
DEBUG - 2021-08-16 20:56:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 20:56:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 20:56:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 20:56:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 20:56:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 20:56:42 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 20:56:42 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 20:56:42 --> Total execution time: 0.0871
DEBUG - 2021-08-16 20:57:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 20:57:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 20:57:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 20:57:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 20:57:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 20:57:34 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 20:57:34 --> 0.0004 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 20:57:34 --> Total execution time: 0.0823
DEBUG - 2021-08-16 20:58:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 20:58:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 20:58:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 20:58:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 20:58:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 20:58:34 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 20:58:34 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 20:58:34 --> Total execution time: 0.0720
DEBUG - 2021-08-16 20:59:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 20:59:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 20:59:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 20:59:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 20:59:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 20:59:34 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 20:59:34 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 20:59:34 --> Total execution time: 0.0839
DEBUG - 2021-08-16 21:00:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-16 21:00:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-16 21:00:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-16 21:00:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-16 21:00:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-16 21:00:13 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-16 21:00:13 --> 0.0003 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
DEBUG - 2021-08-16 21:00:13 --> Total execution time: 0.0834
