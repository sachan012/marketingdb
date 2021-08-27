<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2021-08-11 10:46:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 10:46:39 --> No URI present. Default controller set.
DEBUG - 2021-08-11 10:46:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 10:46:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 10:46:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 10:46:40 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-11 10:46:40 --> Form_validation class already loaded. Second attempt ignored.
QUERY - 2021-08-11 10:46:41 --> 0.223 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-11 10:46:41 --> Total execution time: 1.7521
DEBUG - 2021-08-11 10:46:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 10:46:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 10:47:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 10:47:03 --> No URI present. Default controller set.
DEBUG - 2021-08-11 10:47:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 10:47:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 10:47:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 10:47:03 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-11 10:47:03 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 10:47:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 10:47:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 10:47:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 10:47:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 10:47:04 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 10:47:16 --> 5.2713 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-11 10:47:16 --> 1.5864 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-11 10:47:16 --> 5.1143 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-11 10:47:16 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-11 10:47:16 --> 0.1179 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 10:47:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 10:47:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 10:47:16 --> 0.0006 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-11 10:47:16 --> Total execution time: 12.3927
DEBUG - 2021-08-11 10:47:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 10:47:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 10:47:17 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 10:47:17 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 10:47:17 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 10:47:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 10:47:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 10:47:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 10:47:17 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 10:47:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 10:47:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 10:47:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 10:47:17 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 10:47:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 10:47:17 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-11 10:47:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 10:47:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 10:47:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-11 10:47:48 --> 31.6177 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
DEBUG - 2021-08-11 10:47:48 --> Total execution time: 31.7258
DEBUG - 2021-08-11 10:47:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 10:47:48 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 10:47:53 --> 4.2164 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-11 10:47:53 --> Total execution time: 35.9666
DEBUG - 2021-08-11 10:47:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 10:47:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 10:47:53 --> 0.0518 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `campaign_name` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-11 10:47:53 --> Total execution time: 36.0228
DEBUG - 2021-08-11 10:47:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 10:47:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 10:48:15 --> 0.0344 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 10:48:15 --> 3.6413 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-11 10:48:15 --> 0.0476 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-11 10:48:15 --> 4.0969 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-11 10:48:15 --> 3.4106 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-11 10:48:15 --> 5.3771 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-11 10:48:15 --> 0.0599 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-11 10:48:15 --> 4.8184 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-11 10:48:15 --> 0.0797 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-11 10:48:15 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-11 10:48:15 --> 0.1072 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 10:48:15 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 10:48:15 --> 0.0007 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-11 10:48:15 --> Total execution time: 39.4829
DEBUG - 2021-08-11 10:48:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 10:48:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 10:48:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 10:48:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 10:48:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 10:48:31 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 10:48:31 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 10:48:31 --> Total execution time: 0.1288
DEBUG - 2021-08-11 10:48:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 10:48:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 10:48:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 10:48:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 10:48:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 10:48:46 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 10:48:46 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 10:48:46 --> Total execution time: 0.0796
DEBUG - 2021-08-11 10:49:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 10:49:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 10:49:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 10:49:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 10:49:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 10:49:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 10:49:01 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 10:49:01 --> Total execution time: 0.0789
DEBUG - 2021-08-11 10:49:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 10:49:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 10:49:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 10:49:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 10:49:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 10:49:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 10:49:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 10:49:16 --> Total execution time: 0.0814
DEBUG - 2021-08-11 10:49:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 10:49:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 10:49:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 10:49:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 10:49:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 10:49:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 10:49:31 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 10:49:31 --> Total execution time: 0.0670
DEBUG - 2021-08-11 10:49:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 10:49:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 10:49:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 10:49:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 10:49:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 10:49:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 10:49:46 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 10:49:46 --> Total execution time: 0.0819
DEBUG - 2021-08-11 10:50:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 10:50:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 10:50:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 10:50:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 10:50:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 10:50:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 10:50:01 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 10:50:01 --> Total execution time: 0.0673
DEBUG - 2021-08-11 10:50:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 10:50:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 10:50:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 10:50:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 10:50:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 10:50:16 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 10:50:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 10:50:16 --> Total execution time: 0.0670
DEBUG - 2021-08-11 10:50:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 10:50:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 10:50:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 10:50:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 10:50:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 10:50:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 10:50:31 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 10:50:31 --> Total execution time: 0.0697
DEBUG - 2021-08-11 10:50:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 10:50:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 10:50:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 10:50:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 10:50:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 10:50:46 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 10:50:46 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 10:50:46 --> Total execution time: 0.0740
DEBUG - 2021-08-11 10:51:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 10:51:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 10:51:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 10:51:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 10:51:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 10:51:01 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 10:51:01 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 10:51:01 --> Total execution time: 0.0746
DEBUG - 2021-08-11 10:51:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 10:51:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 10:51:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 10:51:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 10:51:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 10:51:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 10:51:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 10:51:16 --> Total execution time: 0.0807
DEBUG - 2021-08-11 10:51:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 10:51:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 10:51:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 10:51:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 10:51:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 10:51:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 10:51:31 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 10:51:31 --> Total execution time: 0.0663
DEBUG - 2021-08-11 10:51:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 10:51:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 10:51:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 10:51:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 10:51:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 10:51:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 10:51:46 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 10:51:46 --> Total execution time: 0.0692
DEBUG - 2021-08-11 10:52:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 10:52:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 10:52:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 10:52:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 10:52:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 10:52:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 10:52:01 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 10:52:01 --> Total execution time: 0.0870
DEBUG - 2021-08-11 10:52:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 10:52:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 10:52:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 10:52:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 10:52:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 10:52:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 10:52:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 10:52:16 --> Total execution time: 0.0759
DEBUG - 2021-08-11 10:52:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 10:52:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 10:52:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 10:52:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 10:52:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 10:52:31 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 10:52:31 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 10:52:31 --> Total execution time: 0.0779
DEBUG - 2021-08-11 10:52:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 10:52:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 10:52:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 10:52:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 10:52:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 10:52:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 10:52:46 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 10:52:46 --> Total execution time: 0.0697
DEBUG - 2021-08-11 10:53:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 10:53:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 10:53:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 10:53:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 10:53:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 10:53:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 10:53:01 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 10:53:01 --> Total execution time: 0.0678
DEBUG - 2021-08-11 10:53:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 10:53:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 10:53:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 10:53:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 10:53:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 10:53:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 10:53:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 10:53:16 --> Total execution time: 0.0773
DEBUG - 2021-08-11 10:53:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 10:53:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 10:53:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 10:53:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 10:53:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 10:53:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 10:53:31 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 10:53:31 --> Total execution time: 0.0810
DEBUG - 2021-08-11 10:53:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 10:53:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 10:53:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 10:53:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 10:53:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 10:53:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 10:53:46 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 10:53:46 --> Total execution time: 0.0873
DEBUG - 2021-08-11 10:54:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 10:54:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 10:54:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 10:54:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 10:54:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 10:54:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 10:54:01 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 10:54:01 --> Total execution time: 0.0899
DEBUG - 2021-08-11 10:54:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 10:54:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 10:54:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 10:54:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 10:54:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 10:54:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 10:54:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 10:54:16 --> Total execution time: 0.0820
DEBUG - 2021-08-11 10:54:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 10:54:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 10:54:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 10:54:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 10:54:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 10:54:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 10:54:31 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 10:54:31 --> Total execution time: 0.0806
DEBUG - 2021-08-11 10:54:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 10:54:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 10:54:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 10:54:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 10:54:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 10:54:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 10:54:46 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 10:54:46 --> Total execution time: 0.0823
DEBUG - 2021-08-11 10:55:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 10:55:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 10:55:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 10:55:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 10:55:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 10:55:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 10:55:01 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 10:55:01 --> Total execution time: 0.0906
DEBUG - 2021-08-11 10:55:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 10:55:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 10:55:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 10:55:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 10:55:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 10:55:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 10:55:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 10:55:16 --> Total execution time: 0.0800
DEBUG - 2021-08-11 10:55:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 10:55:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 10:55:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 10:55:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 10:55:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 10:55:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 10:55:31 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 10:55:31 --> Total execution time: 0.0857
DEBUG - 2021-08-11 10:55:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 10:55:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 10:55:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 10:55:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 10:55:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 10:55:46 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 10:55:46 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 10:55:46 --> Total execution time: 0.0819
DEBUG - 2021-08-11 10:56:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 10:56:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 10:56:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 10:56:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 10:56:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 10:56:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 10:56:01 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 10:56:01 --> Total execution time: 0.0892
DEBUG - 2021-08-11 10:56:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 10:56:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 10:56:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 10:56:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 10:56:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 10:56:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 10:56:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 10:56:16 --> Total execution time: 0.0698
DEBUG - 2021-08-11 10:56:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 10:56:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 10:56:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 10:56:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 10:56:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 10:56:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 10:56:31 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 10:56:31 --> Total execution time: 0.0779
DEBUG - 2021-08-11 10:56:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 10:56:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 10:56:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 10:56:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 10:56:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 10:56:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 10:56:46 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 10:56:46 --> Total execution time: 0.0695
DEBUG - 2021-08-11 10:57:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 10:57:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 10:57:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 10:57:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 10:57:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 10:57:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 10:57:01 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 10:57:01 --> Total execution time: 0.0713
DEBUG - 2021-08-11 10:57:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 10:57:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 10:57:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 10:57:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 10:57:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 10:57:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 10:57:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 10:57:16 --> Total execution time: 0.0717
DEBUG - 2021-08-11 10:57:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 10:57:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 10:57:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 10:57:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 10:57:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 10:57:31 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 10:57:31 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 10:57:31 --> Total execution time: 0.0701
DEBUG - 2021-08-11 10:58:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 10:58:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 10:58:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 10:58:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 10:58:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 10:58:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 10:58:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 10:58:16 --> Total execution time: 0.0676
DEBUG - 2021-08-11 10:59:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 10:59:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 10:59:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 10:59:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 10:59:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 10:59:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 10:59:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 10:59:16 --> Total execution time: 0.0802
DEBUG - 2021-08-11 11:00:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:00:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:00:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:00:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:00:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:00:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:00:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:00:16 --> Total execution time: 0.0832
DEBUG - 2021-08-11 11:01:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:01:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:01:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:01:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:01:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:01:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:01:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:01:16 --> Total execution time: 0.0707
DEBUG - 2021-08-11 11:02:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:02:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:02:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:02:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:02:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:02:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:02:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:02:16 --> Total execution time: 0.0665
DEBUG - 2021-08-11 11:03:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:03:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:03:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:03:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:03:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:03:16 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:03:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:03:16 --> Total execution time: 0.0715
DEBUG - 2021-08-11 11:04:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:04:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:04:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:04:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:04:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:04:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:04:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:04:16 --> Total execution time: 0.0797
DEBUG - 2021-08-11 11:05:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:05:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:05:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:05:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:05:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:05:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:05:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:05:16 --> Total execution time: 0.0784
DEBUG - 2021-08-11 11:06:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:06:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:06:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:06:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:06:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:06:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:06:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:06:16 --> Total execution time: 0.0597
DEBUG - 2021-08-11 11:07:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:07:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:07:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:07:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:07:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:07:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:07:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:07:16 --> Total execution time: 0.0760
DEBUG - 2021-08-11 11:08:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:08:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:08:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:08:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:08:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:08:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:08:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:08:16 --> Total execution time: 0.0725
DEBUG - 2021-08-11 11:09:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:09:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:09:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:09:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:09:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:09:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:09:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:09:16 --> Total execution time: 0.0726
DEBUG - 2021-08-11 11:10:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:10:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:10:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:10:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:10:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:10:16 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:10:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:10:16 --> Total execution time: 0.0889
DEBUG - 2021-08-11 11:11:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:11:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:11:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:11:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:11:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:11:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:11:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:11:16 --> Total execution time: 0.0663
DEBUG - 2021-08-11 11:12:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:12:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:12:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:12:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:12:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:12:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:12:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:12:16 --> Total execution time: 0.0720
DEBUG - 2021-08-11 11:13:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:13:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:13:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:13:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:13:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:13:16 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:13:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:13:16 --> Total execution time: 0.0919
DEBUG - 2021-08-11 11:13:49 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:13:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:13:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:13:49 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:13:49 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:13:49 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:13:49 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:13:49 --> Total execution time: 0.0845
DEBUG - 2021-08-11 11:14:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:14:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:14:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:14:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:14:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:14:01 --> 0.0028 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:14:01 --> 0.0011 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:14:01 --> Total execution time: 0.0965
DEBUG - 2021-08-11 11:14:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:14:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:14:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:14:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:14:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:14:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:14:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:14:16 --> Total execution time: 0.0736
DEBUG - 2021-08-11 11:14:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:14:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:14:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:14:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:14:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:14:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:14:31 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:14:31 --> Total execution time: 0.0873
DEBUG - 2021-08-11 11:14:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:14:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:14:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:14:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:14:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:14:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:14:46 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:14:46 --> Total execution time: 0.0972
DEBUG - 2021-08-11 11:15:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:15:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:15:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:15:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:15:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:15:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:15:01 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:15:01 --> Total execution time: 0.0741
DEBUG - 2021-08-11 11:15:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:15:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:15:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:15:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:15:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:15:16 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:15:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:15:16 --> Total execution time: 0.0740
DEBUG - 2021-08-11 11:15:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:15:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:15:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:15:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:15:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:15:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:15:31 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:15:31 --> Total execution time: 0.0831
DEBUG - 2021-08-11 11:15:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:15:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:15:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:15:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:15:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:15:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:15:46 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:15:46 --> Total execution time: 0.0896
DEBUG - 2021-08-11 11:16:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:16:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:16:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:16:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:16:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:16:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:16:01 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:16:01 --> Total execution time: 0.0731
DEBUG - 2021-08-11 11:16:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:16:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:16:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:16:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:16:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:16:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:16:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:16:16 --> Total execution time: 0.0781
DEBUG - 2021-08-11 11:16:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:16:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:16:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:16:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:16:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:16:31 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:16:31 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:16:31 --> Total execution time: 0.0919
DEBUG - 2021-08-11 11:16:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:16:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:16:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:16:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:16:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:16:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:16:46 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:16:46 --> Total execution time: 0.0802
DEBUG - 2021-08-11 11:17:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:17:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:17:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:17:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:17:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:17:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:17:01 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:17:01 --> Total execution time: 0.0847
DEBUG - 2021-08-11 11:17:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:17:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:17:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:17:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:17:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:17:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:17:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:17:16 --> Total execution time: 0.0806
DEBUG - 2021-08-11 11:17:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:17:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:17:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:17:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:17:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:17:31 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:17:31 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:17:31 --> Total execution time: 0.0785
DEBUG - 2021-08-11 11:17:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:17:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:17:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:17:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:17:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:17:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:17:46 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:17:46 --> Total execution time: 0.0923
DEBUG - 2021-08-11 11:18:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:18:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:18:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:18:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:18:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:18:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:18:01 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:18:01 --> Total execution time: 0.0782
DEBUG - 2021-08-11 11:18:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:18:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:18:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:18:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:18:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:18:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:18:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:18:16 --> Total execution time: 0.0714
DEBUG - 2021-08-11 11:18:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:18:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:18:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:18:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:18:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:18:31 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:18:31 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:18:31 --> Total execution time: 0.0870
DEBUG - 2021-08-11 11:18:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:18:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:18:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:18:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:18:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:18:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:18:46 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:18:46 --> Total execution time: 0.0762
DEBUG - 2021-08-11 11:19:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:19:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:19:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:19:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:19:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:19:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:19:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:19:16 --> Total execution time: 0.0767
DEBUG - 2021-08-11 11:20:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:20:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:20:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:20:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:20:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:20:16 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:20:16 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:20:16 --> Total execution time: 0.0850
DEBUG - 2021-08-11 11:21:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:21:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:21:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:21:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:21:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:21:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:21:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:21:16 --> Total execution time: 0.0801
DEBUG - 2021-08-11 11:22:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:22:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:22:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:22:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:22:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:22:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:22:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:22:16 --> Total execution time: 0.0662
DEBUG - 2021-08-11 11:23:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:23:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:23:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:23:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:23:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:23:16 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:23:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:23:16 --> Total execution time: 0.0821
DEBUG - 2021-08-11 11:24:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:24:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:24:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:24:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:24:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:24:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:24:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:24:16 --> Total execution time: 0.1023
DEBUG - 2021-08-11 11:25:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:25:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:25:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:25:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:25:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:25:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:25:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:25:16 --> Total execution time: 0.0967
DEBUG - 2021-08-11 11:26:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:26:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:26:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:26:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:26:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:26:16 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:26:16 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:26:16 --> Total execution time: 0.1052
DEBUG - 2021-08-11 11:27:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:27:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:27:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:27:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:27:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:27:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:27:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:27:16 --> Total execution time: 0.0746
DEBUG - 2021-08-11 11:28:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:28:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:28:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:28:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:28:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:28:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:28:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:28:16 --> Total execution time: 0.0749
DEBUG - 2021-08-11 11:28:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:28:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:28:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:28:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:28:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:28:53 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:28:53 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:28:53 --> Total execution time: 0.0979
DEBUG - 2021-08-11 11:29:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:29:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:29:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:29:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:29:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:29:01 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:29:01 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:29:01 --> Total execution time: 0.0751
DEBUG - 2021-08-11 11:29:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:29:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:29:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:29:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:29:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:29:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:29:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:29:16 --> Total execution time: 0.0877
DEBUG - 2021-08-11 11:29:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:29:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:29:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:29:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:29:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:29:31 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:29:31 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:29:31 --> Total execution time: 0.0726
DEBUG - 2021-08-11 11:29:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:29:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:29:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:29:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:29:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:29:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:29:46 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:29:46 --> Total execution time: 0.0830
DEBUG - 2021-08-11 11:30:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:30:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:30:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:30:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:30:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:30:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:30:01 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:30:01 --> Total execution time: 0.0788
DEBUG - 2021-08-11 11:30:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:30:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:30:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:30:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:30:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:30:16 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:30:16 --> 0.0007 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:30:16 --> Total execution time: 0.1917
DEBUG - 2021-08-11 11:30:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:30:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:30:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:30:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:30:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:30:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:30:31 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:30:31 --> Total execution time: 0.0637
DEBUG - 2021-08-11 11:30:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:30:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:30:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:30:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:30:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:30:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:30:46 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:30:46 --> Total execution time: 0.0828
DEBUG - 2021-08-11 11:31:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:31:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:31:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:31:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:31:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:31:01 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:31:01 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:31:01 --> Total execution time: 0.0819
DEBUG - 2021-08-11 11:31:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:31:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:31:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:31:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:31:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:31:16 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:31:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:31:16 --> Total execution time: 0.0834
DEBUG - 2021-08-11 11:31:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:31:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:31:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:31:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:31:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:31:31 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:31:31 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:31:31 --> Total execution time: 0.0768
DEBUG - 2021-08-11 11:31:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:31:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:31:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:31:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:31:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:31:46 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:31:46 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:31:46 --> Total execution time: 0.0840
DEBUG - 2021-08-11 11:32:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:32:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:32:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:32:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:32:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:32:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:32:01 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:32:01 --> Total execution time: 0.0730
DEBUG - 2021-08-11 11:32:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:32:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:32:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:32:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:32:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:32:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:32:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:32:16 --> Total execution time: 0.0896
DEBUG - 2021-08-11 11:32:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:32:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:32:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:32:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:32:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:32:31 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:32:31 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:32:31 --> Total execution time: 0.0724
DEBUG - 2021-08-11 11:32:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:32:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:32:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:32:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:32:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:32:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:32:46 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:32:46 --> Total execution time: 0.0657
DEBUG - 2021-08-11 11:33:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:33:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:33:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:33:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:33:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:33:01 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:33:01 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:33:01 --> Total execution time: 0.0942
DEBUG - 2021-08-11 11:33:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:33:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:33:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:33:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:33:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:33:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:33:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:33:16 --> Total execution time: 0.0902
DEBUG - 2021-08-11 11:33:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:33:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:33:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:33:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:33:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:33:31 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:33:31 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:33:31 --> Total execution time: 0.0731
DEBUG - 2021-08-11 11:33:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:33:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:33:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:33:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:33:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:33:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:33:46 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:33:46 --> Total execution time: 0.0648
DEBUG - 2021-08-11 11:34:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:34:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:34:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:34:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:34:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:34:01 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:34:01 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:34:01 --> Total execution time: 0.0613
DEBUG - 2021-08-11 11:34:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:34:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:34:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:34:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:34:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:34:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:34:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:34:16 --> Total execution time: 0.0802
DEBUG - 2021-08-11 11:34:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:34:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:34:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:34:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:34:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:34:31 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:34:31 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:34:31 --> Total execution time: 0.0718
DEBUG - 2021-08-11 11:34:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:34:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:34:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:34:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:34:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:34:46 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:34:46 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:34:46 --> Total execution time: 0.0852
DEBUG - 2021-08-11 11:35:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:35:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:35:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:35:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:35:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:35:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:35:01 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:35:01 --> Total execution time: 0.0714
DEBUG - 2021-08-11 11:35:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:35:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:35:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:35:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:35:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:35:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:35:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:35:16 --> Total execution time: 0.0974
DEBUG - 2021-08-11 11:35:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:35:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:35:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:35:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:35:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:35:31 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:35:31 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:35:31 --> Total execution time: 0.0918
DEBUG - 2021-08-11 11:35:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:35:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:35:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:35:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:35:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:35:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:35:46 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:35:46 --> Total execution time: 0.0776
DEBUG - 2021-08-11 11:36:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:36:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:36:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:36:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:36:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:36:01 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:36:01 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:36:01 --> Total execution time: 0.0697
DEBUG - 2021-08-11 11:36:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:36:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:36:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:36:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:36:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:36:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:36:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:36:16 --> Total execution time: 0.0876
DEBUG - 2021-08-11 11:36:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:36:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:36:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:36:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:36:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:36:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:36:31 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:36:31 --> Total execution time: 0.0927
DEBUG - 2021-08-11 11:36:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:36:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:36:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:36:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:36:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:36:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:36:46 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:36:46 --> Total execution time: 0.0777
DEBUG - 2021-08-11 11:37:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:37:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:37:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:37:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:37:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:37:01 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:37:01 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:37:01 --> Total execution time: 0.0730
DEBUG - 2021-08-11 11:37:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:37:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:37:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:37:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:37:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:37:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:37:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:37:16 --> Total execution time: 0.0874
DEBUG - 2021-08-11 11:37:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:37:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:37:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:37:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:37:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:37:31 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:37:31 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:37:31 --> Total execution time: 0.0900
DEBUG - 2021-08-11 11:37:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:37:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:37:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:37:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:37:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:37:46 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:37:46 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:37:46 --> Total execution time: 0.0761
DEBUG - 2021-08-11 11:38:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:38:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:38:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:38:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:38:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:38:01 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:38:01 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:38:01 --> Total execution time: 0.1122
DEBUG - 2021-08-11 11:38:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:38:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:38:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:38:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:38:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:38:16 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:38:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:38:16 --> Total execution time: 0.0574
DEBUG - 2021-08-11 11:38:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:38:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:38:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:38:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:38:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:38:31 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:38:31 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:38:31 --> Total execution time: 0.0810
DEBUG - 2021-08-11 11:39:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:39:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:39:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:39:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:39:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:39:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:39:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:39:16 --> Total execution time: 0.0754
DEBUG - 2021-08-11 11:40:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:40:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:40:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:40:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:40:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:40:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:40:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:40:16 --> Total execution time: 0.0617
DEBUG - 2021-08-11 11:41:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:41:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:41:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:41:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:41:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:41:16 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:41:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:41:16 --> Total execution time: 0.0712
DEBUG - 2021-08-11 11:42:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:42:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:42:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:42:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:42:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:42:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:42:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:42:16 --> Total execution time: 0.0710
DEBUG - 2021-08-11 11:43:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:43:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:43:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:43:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:43:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:43:16 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:43:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:43:16 --> Total execution time: 0.0780
DEBUG - 2021-08-11 11:44:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:44:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:44:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:44:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:44:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:44:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:44:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:44:16 --> Total execution time: 0.0614
DEBUG - 2021-08-11 11:45:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:45:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:45:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:45:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:45:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:45:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:45:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:45:16 --> Total execution time: 0.0848
DEBUG - 2021-08-11 11:46:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:46:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:46:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:46:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:46:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:46:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:46:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:46:16 --> Total execution time: 0.0719
DEBUG - 2021-08-11 11:47:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:47:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:47:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:47:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:47:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:47:16 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:47:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:47:16 --> Total execution time: 0.0681
DEBUG - 2021-08-11 11:48:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:48:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:48:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:48:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:48:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:48:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:48:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:48:16 --> Total execution time: 0.0788
DEBUG - 2021-08-11 11:49:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:49:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:49:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:49:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:49:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:49:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:49:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:49:16 --> Total execution time: 0.0666
DEBUG - 2021-08-11 11:50:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:50:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:50:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:50:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:50:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:50:16 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:50:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:50:16 --> Total execution time: 0.0661
DEBUG - 2021-08-11 11:51:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:51:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:51:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:51:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:51:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:51:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:51:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:51:16 --> Total execution time: 0.0824
DEBUG - 2021-08-11 11:52:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:52:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:52:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:52:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:52:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:52:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:52:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:52:16 --> Total execution time: 0.0808
DEBUG - 2021-08-11 11:53:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:53:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:53:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:53:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:53:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:53:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:53:16 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:53:16 --> Total execution time: 0.0932
DEBUG - 2021-08-11 11:54:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:54:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:54:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:54:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:54:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:54:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:54:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:54:16 --> Total execution time: 0.0875
DEBUG - 2021-08-11 11:55:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:55:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:55:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:55:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:55:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:55:16 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:55:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:55:16 --> Total execution time: 0.0813
DEBUG - 2021-08-11 11:56:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:56:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:56:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:56:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:56:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:56:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:56:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:56:16 --> Total execution time: 0.0917
DEBUG - 2021-08-11 11:57:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:57:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:57:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:57:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:57:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:57:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:57:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:57:16 --> Total execution time: 0.0845
DEBUG - 2021-08-11 11:58:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:58:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:58:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:58:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:58:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:58:16 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:58:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:58:16 --> Total execution time: 0.0633
DEBUG - 2021-08-11 11:59:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:59:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:59:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:59:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:59:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:59:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:59:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:59:16 --> Total execution time: 0.0750
DEBUG - 2021-08-11 11:59:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:59:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:59:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:59:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:59:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:59:43 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:59:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:59:43 --> Total execution time: 0.0828
DEBUG - 2021-08-11 11:59:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 11:59:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 11:59:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 11:59:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 11:59:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 11:59:45 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 11:59:45 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 11:59:45 --> Total execution time: 0.0683
DEBUG - 2021-08-11 12:00:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:00:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:00:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:00:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:00:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:00:01 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:00:01 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:00:01 --> Total execution time: 0.0752
DEBUG - 2021-08-11 12:00:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:00:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:00:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:00:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:00:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:00:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:00:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:00:16 --> Total execution time: 0.0825
DEBUG - 2021-08-11 12:00:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:00:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:00:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:00:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:00:30 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:00:30 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:00:30 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:00:30 --> Total execution time: 0.0722
DEBUG - 2021-08-11 12:00:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:00:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:00:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:00:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:00:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:00:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:00:46 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:00:46 --> Total execution time: 0.0639
DEBUG - 2021-08-11 12:01:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:01:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:01:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:01:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:01:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:01:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:01:01 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:01:01 --> Total execution time: 0.0740
DEBUG - 2021-08-11 12:01:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:01:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:01:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:01:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:01:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:01:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:01:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:01:16 --> Total execution time: 0.0829
DEBUG - 2021-08-11 12:01:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:01:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:01:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:01:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:01:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:01:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:01:31 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:01:31 --> Total execution time: 0.0724
DEBUG - 2021-08-11 12:01:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:01:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:01:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:01:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:01:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:01:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:01:46 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:01:46 --> Total execution time: 0.0793
DEBUG - 2021-08-11 12:02:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:02:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:02:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:02:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:02:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:02:01 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:02:01 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:02:01 --> Total execution time: 0.0867
DEBUG - 2021-08-11 12:02:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:02:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:02:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:02:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:02:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:02:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:02:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:02:16 --> Total execution time: 0.0656
DEBUG - 2021-08-11 12:02:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:02:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:02:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:02:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:02:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:02:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:02:31 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:02:31 --> Total execution time: 0.0800
DEBUG - 2021-08-11 12:02:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:02:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:02:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:02:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:02:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:02:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:02:46 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:02:46 --> Total execution time: 0.0854
DEBUG - 2021-08-11 12:03:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:03:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:03:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:03:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:03:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:03:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:03:01 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:03:01 --> Total execution time: 0.0862
DEBUG - 2021-08-11 12:03:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:03:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:03:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:03:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:03:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:03:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:03:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:03:16 --> Total execution time: 0.0695
DEBUG - 2021-08-11 12:03:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:03:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:03:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:03:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:03:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:03:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:03:31 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:03:31 --> Total execution time: 0.0793
DEBUG - 2021-08-11 12:03:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:03:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:03:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:03:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:03:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:03:46 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:03:46 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:03:46 --> Total execution time: 0.0836
DEBUG - 2021-08-11 12:04:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:04:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:04:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:04:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:04:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:04:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:04:01 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:04:01 --> Total execution time: 0.0700
DEBUG - 2021-08-11 12:04:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:04:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:04:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:04:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:04:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:04:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:04:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:04:16 --> Total execution time: 0.0797
DEBUG - 2021-08-11 12:04:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:04:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:04:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:04:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:04:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:04:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:04:31 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:04:31 --> Total execution time: 0.0683
DEBUG - 2021-08-11 12:04:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:04:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:04:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:04:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:04:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:04:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:04:46 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:04:46 --> Total execution time: 0.0814
DEBUG - 2021-08-11 12:05:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:05:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:05:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:05:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:05:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:05:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:05:01 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:05:01 --> Total execution time: 0.0933
DEBUG - 2021-08-11 12:05:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:05:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:05:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:05:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:05:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:05:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:05:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:05:16 --> Total execution time: 0.0796
DEBUG - 2021-08-11 12:05:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:05:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:05:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:05:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:05:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:05:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:05:31 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:05:31 --> Total execution time: 0.0829
DEBUG - 2021-08-11 12:05:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:05:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:05:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:05:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:05:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:05:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:05:46 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:05:46 --> Total execution time: 0.0726
DEBUG - 2021-08-11 12:06:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:06:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:06:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:06:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:06:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:06:01 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:06:01 --> 0.0006 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:06:01 --> Total execution time: 0.0819
DEBUG - 2021-08-11 12:06:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:06:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:06:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:06:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:06:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:06:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:06:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:06:16 --> Total execution time: 0.0974
DEBUG - 2021-08-11 12:06:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:06:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:06:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:06:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:06:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:06:31 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:06:31 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:06:31 --> Total execution time: 0.0696
DEBUG - 2021-08-11 12:06:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:06:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:06:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:06:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:06:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:06:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:06:46 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:06:46 --> Total execution time: 0.0937
DEBUG - 2021-08-11 12:07:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:07:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:07:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:07:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:07:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:07:01 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:07:01 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:07:01 --> Total execution time: 0.0787
DEBUG - 2021-08-11 12:07:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:07:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:07:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:07:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:07:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:07:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:07:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:07:16 --> Total execution time: 0.0669
DEBUG - 2021-08-11 12:07:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:07:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:07:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:07:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:07:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:07:31 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:07:31 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:07:31 --> Total execution time: 0.0875
DEBUG - 2021-08-11 12:07:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:07:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:07:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:07:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:07:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:07:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:07:46 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:07:46 --> Total execution time: 0.0744
DEBUG - 2021-08-11 12:08:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:08:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:08:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:08:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:08:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:08:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:08:01 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:08:01 --> Total execution time: 0.0694
DEBUG - 2021-08-11 12:08:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:08:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:08:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:08:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:08:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:08:16 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:08:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:08:16 --> Total execution time: 0.0813
DEBUG - 2021-08-11 12:08:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:08:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:08:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:08:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:08:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:08:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:08:31 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:08:31 --> Total execution time: 0.0859
DEBUG - 2021-08-11 12:08:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:08:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:08:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:08:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:08:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:08:46 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:08:46 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:08:46 --> Total execution time: 0.0875
DEBUG - 2021-08-11 12:09:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:09:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:09:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:09:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:09:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:09:01 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:09:01 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:09:01 --> Total execution time: 0.0863
DEBUG - 2021-08-11 12:09:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:09:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:09:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:09:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:09:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:09:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:09:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:09:16 --> Total execution time: 0.0729
DEBUG - 2021-08-11 12:09:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:09:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:09:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:09:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:09:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:09:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:09:31 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:09:31 --> Total execution time: 0.0674
DEBUG - 2021-08-11 12:09:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:09:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:09:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:09:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:09:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:09:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:09:46 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:09:46 --> Total execution time: 0.0677
DEBUG - 2021-08-11 12:10:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:10:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:10:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:10:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:10:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:10:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:10:01 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:10:01 --> Total execution time: 0.0649
DEBUG - 2021-08-11 12:10:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:10:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:10:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:10:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:10:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:10:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:10:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:10:16 --> Total execution time: 0.0793
DEBUG - 2021-08-11 12:10:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:10:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:10:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:10:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:10:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:10:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:10:31 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:10:31 --> Total execution time: 0.0816
DEBUG - 2021-08-11 12:10:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:10:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:10:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:10:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:10:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:10:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:10:46 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:10:46 --> Total execution time: 0.0910
DEBUG - 2021-08-11 12:11:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:11:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:11:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:11:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:11:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:11:01 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:11:01 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:11:01 --> Total execution time: 0.0933
DEBUG - 2021-08-11 12:11:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:11:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:11:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:11:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:11:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:11:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:11:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:11:16 --> Total execution time: 0.0711
DEBUG - 2021-08-11 12:11:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:11:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:11:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:11:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:11:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:11:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:11:31 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:11:31 --> Total execution time: 0.0618
DEBUG - 2021-08-11 12:11:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:11:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:11:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:11:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:11:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:11:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:11:46 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:11:46 --> Total execution time: 0.0804
DEBUG - 2021-08-11 12:12:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:12:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:12:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:12:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:12:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:12:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:12:01 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:12:01 --> Total execution time: 0.0704
DEBUG - 2021-08-11 12:12:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:12:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:12:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:12:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:12:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:12:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:12:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:12:16 --> Total execution time: 0.0825
DEBUG - 2021-08-11 12:12:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:12:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:12:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:12:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:12:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:12:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:12:31 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:12:31 --> Total execution time: 0.0794
DEBUG - 2021-08-11 12:12:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:12:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:12:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:12:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:12:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:12:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:12:46 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:12:46 --> Total execution time: 0.0703
DEBUG - 2021-08-11 12:13:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:13:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:13:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:13:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:13:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:13:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:13:01 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:13:01 --> Total execution time: 0.0699
DEBUG - 2021-08-11 12:13:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:13:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:13:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:13:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:13:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:13:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:13:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:13:16 --> Total execution time: 0.0657
DEBUG - 2021-08-11 12:13:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:13:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:13:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:13:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:13:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:13:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:13:31 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:13:31 --> Total execution time: 0.0789
DEBUG - 2021-08-11 12:13:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:13:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:13:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:13:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:13:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:13:46 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:13:46 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:13:46 --> Total execution time: 0.0786
DEBUG - 2021-08-11 12:14:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:14:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:14:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:14:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:14:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:14:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:14:01 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:14:01 --> Total execution time: 0.0962
DEBUG - 2021-08-11 12:14:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:14:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:14:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:14:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:14:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:14:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:14:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:14:16 --> Total execution time: 0.0968
DEBUG - 2021-08-11 12:14:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:14:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:14:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:14:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:14:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:14:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:14:31 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:14:31 --> Total execution time: 0.0737
DEBUG - 2021-08-11 12:14:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:14:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:14:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:14:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:14:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:14:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:14:46 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:14:46 --> Total execution time: 0.0760
DEBUG - 2021-08-11 12:15:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:15:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:15:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:15:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:15:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:15:01 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:15:01 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:15:01 --> Total execution time: 0.0766
DEBUG - 2021-08-11 12:15:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:15:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:15:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:15:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:15:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:15:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:15:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:15:16 --> Total execution time: 0.0864
DEBUG - 2021-08-11 12:15:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:15:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:15:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:15:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:15:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:15:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:15:31 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:15:31 --> Total execution time: 0.0797
DEBUG - 2021-08-11 12:15:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:15:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:15:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:15:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:15:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:15:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:15:46 --> 0.0008 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:15:46 --> Total execution time: 0.0868
DEBUG - 2021-08-11 12:16:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:16:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:16:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:16:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:16:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:16:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:16:01 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:16:01 --> Total execution time: 0.0847
DEBUG - 2021-08-11 12:16:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:16:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:16:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:16:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:16:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:16:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:16:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:16:16 --> Total execution time: 0.0799
DEBUG - 2021-08-11 12:16:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:16:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:16:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:16:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:16:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:16:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:16:31 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:16:31 --> Total execution time: 0.0820
DEBUG - 2021-08-11 12:16:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:16:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:16:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:16:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:16:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:16:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:16:46 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:16:46 --> Total execution time: 0.0718
DEBUG - 2021-08-11 12:17:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:17:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:17:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:17:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:17:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:17:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:17:01 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:17:01 --> Total execution time: 0.0863
DEBUG - 2021-08-11 12:17:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:17:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:17:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:17:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:17:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:17:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:17:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:17:16 --> Total execution time: 0.0759
DEBUG - 2021-08-11 12:17:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:17:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:17:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:17:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:17:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:17:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:17:31 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:17:31 --> Total execution time: 0.0898
DEBUG - 2021-08-11 12:17:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:17:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:17:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:17:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:17:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:17:46 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:17:46 --> 0.0016 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:17:46 --> Total execution time: 0.1110
DEBUG - 2021-08-11 12:18:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:18:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:18:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:18:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:18:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:18:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:18:01 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:18:01 --> Total execution time: 0.0843
DEBUG - 2021-08-11 12:18:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:18:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:18:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:18:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:18:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:18:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:18:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:18:16 --> Total execution time: 0.0688
DEBUG - 2021-08-11 12:19:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:19:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:19:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:19:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:19:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:19:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:19:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:19:16 --> Total execution time: 0.0812
DEBUG - 2021-08-11 12:20:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:20:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:20:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:20:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:20:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:20:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:20:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:20:16 --> Total execution time: 0.0966
DEBUG - 2021-08-11 12:21:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:21:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:21:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:21:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:21:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:21:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:21:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:21:16 --> Total execution time: 0.0838
DEBUG - 2021-08-11 12:22:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:22:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:22:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:22:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:22:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:22:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:22:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:22:16 --> Total execution time: 0.0614
DEBUG - 2021-08-11 12:23:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:23:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:23:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:23:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:23:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:23:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:23:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:23:16 --> Total execution time: 0.0808
DEBUG - 2021-08-11 12:24:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:24:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:24:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:24:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:24:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:24:16 --> 0.0088 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:24:16 --> 0.0006 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:24:16 --> Total execution time: 0.1672
DEBUG - 2021-08-11 12:25:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:25:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:25:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:25:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:25:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:25:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:25:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:25:16 --> Total execution time: 0.0810
DEBUG - 2021-08-11 12:26:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:26:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:26:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:26:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:26:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:26:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:26:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:26:16 --> Total execution time: 0.0799
DEBUG - 2021-08-11 12:27:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:27:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:27:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:27:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:27:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:27:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:27:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:27:16 --> Total execution time: 0.0761
DEBUG - 2021-08-11 12:28:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:28:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:28:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:28:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:28:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:28:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:28:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:28:16 --> Total execution time: 0.0677
DEBUG - 2021-08-11 12:29:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:29:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:29:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:29:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:29:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:29:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:29:16 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:29:16 --> Total execution time: 0.0841
DEBUG - 2021-08-11 12:30:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:30:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:30:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:30:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:30:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:30:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:30:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:30:16 --> Total execution time: 0.0690
DEBUG - 2021-08-11 12:31:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:31:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:31:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:31:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:31:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:31:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:31:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:31:16 --> Total execution time: 0.0855
DEBUG - 2021-08-11 12:32:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:32:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:32:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:32:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:32:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:32:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:32:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:32:16 --> Total execution time: 0.0843
DEBUG - 2021-08-11 12:33:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:33:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:33:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:33:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:33:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:33:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:33:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:33:16 --> Total execution time: 0.0595
DEBUG - 2021-08-11 12:34:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:34:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:34:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:34:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:34:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:34:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:34:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:34:16 --> Total execution time: 0.0871
DEBUG - 2021-08-11 12:35:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:35:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:35:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:35:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:35:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:35:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:35:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:35:16 --> Total execution time: 0.0684
DEBUG - 2021-08-11 12:35:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:35:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:35:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:35:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:35:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:35:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:35:59 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:35:59 --> Total execution time: 0.0790
DEBUG - 2021-08-11 12:36:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:36:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:36:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:36:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:36:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:36:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:36:00 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:36:00 --> Total execution time: 0.0762
DEBUG - 2021-08-11 12:36:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:36:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:36:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:36:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:36:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:36:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:36:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:36:16 --> Total execution time: 0.0723
DEBUG - 2021-08-11 12:36:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:36:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:36:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:36:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:36:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:36:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:36:31 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:36:31 --> Total execution time: 0.0761
DEBUG - 2021-08-11 12:36:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:36:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:36:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:36:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:36:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:36:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:36:46 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:36:46 --> Total execution time: 0.0689
DEBUG - 2021-08-11 12:36:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:36:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:36:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:36:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:36:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:37:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:37:00 --> 0.0785 | INSERT INTO `csvexportlog` (`export_status`, `filter_col`, `created_datetime`) VALUES (0, 'null', '2021-08-11 12:36:59')
DEBUG - 2021-08-11 12:37:00 --> Total execution time: 0.1638
DEBUG - 2021-08-11 12:37:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:37:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:37:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:37:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:37:00 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-11 12:37:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:37:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:37:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:37:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:37:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:37:00 --> 0.0688 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:37:00 --> 0.0511 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:37:00 --> Total execution time: 0.2054
QUERY - 2021-08-11 12:37:13 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:37:13 --> 3.3689 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-11 12:37:13 --> 0.042 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-11 12:37:13 --> 2.6251 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-11 12:37:13 --> 2.4353 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-11 12:37:13 --> 2.499 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-11 12:37:13 --> 0.0514 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-11 12:37:13 --> 2.3917 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-11 12:37:13 --> 0.0125 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-11 12:37:13 --> 0.0093 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-11 12:37:13 --> 0.0084 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:37:13 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:37:13 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-11 12:37:13 --> Total execution time: 13.5378
DEBUG - 2021-08-11 12:37:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:37:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:37:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:37:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:37:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:37:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:37:29 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:37:29 --> Total execution time: 0.0825
DEBUG - 2021-08-11 12:37:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:37:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:37:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:37:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:37:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:37:45 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:37:45 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:37:45 --> Total execution time: 0.0824
DEBUG - 2021-08-11 12:38:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:38:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:38:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:38:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:38:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:38:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:38:00 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:38:00 --> Total execution time: 0.0728
DEBUG - 2021-08-11 12:38:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:38:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:38:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:38:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:38:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:38:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:38:15 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:38:15 --> Total execution time: 0.0746
DEBUG - 2021-08-11 12:38:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:38:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:38:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:38:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:38:30 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:38:30 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:38:30 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:38:30 --> Total execution time: 0.1264
DEBUG - 2021-08-11 12:38:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:38:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:38:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:38:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:38:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:38:45 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:38:45 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:38:45 --> Total execution time: 0.0587
DEBUG - 2021-08-11 12:39:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:39:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:39:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:39:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:39:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:39:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:39:00 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:39:00 --> Total execution time: 0.0762
DEBUG - 2021-08-11 12:39:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:39:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:39:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:39:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:39:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:39:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:39:15 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:39:15 --> Total execution time: 0.0694
DEBUG - 2021-08-11 12:39:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:39:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:39:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:39:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:39:30 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:39:30 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:39:30 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:39:30 --> Total execution time: 0.0703
DEBUG - 2021-08-11 12:39:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:39:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:39:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:39:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:39:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:39:45 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:39:45 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:39:45 --> Total execution time: 0.0771
DEBUG - 2021-08-11 12:40:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:40:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:40:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:40:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:40:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:40:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:40:00 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:40:00 --> Total execution time: 0.0844
DEBUG - 2021-08-11 12:40:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:40:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:40:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:40:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:40:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:40:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:40:15 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:40:15 --> Total execution time: 0.0716
DEBUG - 2021-08-11 12:40:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:40:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:40:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:40:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:40:30 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:40:30 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:40:30 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:40:30 --> Total execution time: 0.0626
DEBUG - 2021-08-11 12:40:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:40:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:40:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:40:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:40:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:40:45 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:40:45 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:40:45 --> Total execution time: 0.0817
DEBUG - 2021-08-11 12:41:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:41:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:41:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:41:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:41:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:41:00 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:41:00 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:41:00 --> Total execution time: 0.0714
DEBUG - 2021-08-11 12:41:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:41:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:41:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:41:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:41:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:41:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:41:15 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:41:15 --> Total execution time: 0.0903
DEBUG - 2021-08-11 12:41:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:41:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:41:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:41:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:41:30 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:41:30 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:41:30 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:41:30 --> Total execution time: 0.0876
DEBUG - 2021-08-11 12:41:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:41:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:41:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:41:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:41:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:41:45 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:41:45 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:41:45 --> Total execution time: 0.0832
DEBUG - 2021-08-11 12:42:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:42:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:42:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:42:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:42:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:42:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:42:00 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:42:00 --> Total execution time: 0.0744
DEBUG - 2021-08-11 12:42:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:42:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:42:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:42:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:42:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:42:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:42:15 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:42:15 --> Total execution time: 0.0854
DEBUG - 2021-08-11 12:42:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:42:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:42:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:42:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:42:30 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:42:30 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:42:30 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:42:30 --> Total execution time: 0.0807
DEBUG - 2021-08-11 12:43:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:43:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:43:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:43:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:43:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:43:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:43:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:43:16 --> Total execution time: 0.0727
DEBUG - 2021-08-11 12:44:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:44:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:44:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:44:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:44:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:44:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:44:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:44:16 --> Total execution time: 0.0800
DEBUG - 2021-08-11 12:45:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:45:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:45:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:45:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:45:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:45:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:45:16 --> 0.0009 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:45:16 --> Total execution time: 0.0723
DEBUG - 2021-08-11 12:46:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:46:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:46:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:46:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:46:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:46:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:46:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:46:16 --> Total execution time: 0.0852
DEBUG - 2021-08-11 12:47:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:47:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:47:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:47:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:47:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:47:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:47:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:47:16 --> Total execution time: 0.0730
DEBUG - 2021-08-11 12:48:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:48:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:48:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:48:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:48:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:48:16 --> 0.0008 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:48:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:48:16 --> Total execution time: 0.0874
DEBUG - 2021-08-11 12:49:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:49:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:49:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:49:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:49:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:49:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:49:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:49:16 --> Total execution time: 0.0767
DEBUG - 2021-08-11 12:49:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:49:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:49:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:49:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:49:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:49:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:49:41 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:49:41 --> Total execution time: 0.0931
DEBUG - 2021-08-11 12:49:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:49:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:49:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:49:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:49:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:49:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:49:44 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:49:44 --> Total execution time: 0.0795
DEBUG - 2021-08-11 12:50:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:50:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:50:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:50:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:50:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:50:00 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:50:00 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:50:00 --> Total execution time: 0.0713
DEBUG - 2021-08-11 12:50:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:50:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:50:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:50:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:50:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:50:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:50:15 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:50:15 --> Total execution time: 0.1123
DEBUG - 2021-08-11 12:50:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:50:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:50:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:50:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:50:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:50:25 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:50:25 --> 0.0923 | SELECT * FROM `csvimportlog` ORDER BY `id` DESC
QUERY - 2021-08-11 12:50:25 --> 0.0347 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-11 12:50:25 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:50:25 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:50:25 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-11 12:50:25 --> Total execution time: 0.2046
DEBUG - 2021-08-11 12:50:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:50:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:50:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:50:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:50:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:50:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:50:41 --> 3.2119 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-11 12:50:41 --> 0.0447 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-11 12:50:41 --> 3.0948 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-11 12:50:41 --> 2.3552 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-11 12:50:41 --> 3.1017 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-11 12:50:41 --> 0.0478 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-11 12:50:41 --> 2.5949 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-11 12:50:41 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-11 12:50:41 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-11 12:50:41 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:50:41 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:50:41 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-11 12:50:41 --> Total execution time: 14.5243
DEBUG - 2021-08-11 12:50:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:50:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:50:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:50:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:50:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:50:44 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:50:44 --> 0.0572 | INSERT INTO `csvexportlog` (`export_status`, `filter_col`, `created_datetime`) VALUES (0, 'null', '2021-08-11 12:50:44')
DEBUG - 2021-08-11 12:50:44 --> Total execution time: 0.1390
DEBUG - 2021-08-11 12:50:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:50:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:50:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:50:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:50:44 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-11 12:50:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:50:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:50:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-11 12:50:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:50:58 --> 2.7957 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-11 12:50:58 --> 0.0495 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-11 12:50:58 --> 2.5725 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-11 12:50:58 --> 2.6334 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-11 12:50:58 --> 3.4556 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-11 12:50:58 --> 0.0496 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-11 12:50:58 --> 2.5612 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-11 12:50:58 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-11 12:50:58 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-11 12:50:58 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:50:58 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:50:58 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-11 12:50:58 --> Total execution time: 14.1832
DEBUG - 2021-08-11 12:50:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:50:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:50:58 --> 0.001 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:50:58 --> 0.0007 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:50:58 --> Total execution time: 1.5951
DEBUG - 2021-08-11 12:51:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:51:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:51:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:51:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:51:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:51:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:51:13 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:51:13 --> Total execution time: 0.0674
DEBUG - 2021-08-11 12:51:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:51:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:51:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:51:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:51:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:51:29 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:51:29 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:51:29 --> Total execution time: 0.0810
DEBUG - 2021-08-11 12:51:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:51:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:51:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:51:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:51:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:51:44 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:51:44 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:51:44 --> Total execution time: 0.0785
DEBUG - 2021-08-11 12:51:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:51:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:51:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:51:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:51:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:51:59 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:51:59 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:51:59 --> Total execution time: 0.0785
DEBUG - 2021-08-11 12:52:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:52:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:52:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:52:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:52:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:52:14 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:52:14 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:52:14 --> Total execution time: 0.0748
DEBUG - 2021-08-11 12:52:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:52:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:52:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:52:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:52:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:52:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:52:29 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:52:29 --> Total execution time: 0.0709
DEBUG - 2021-08-11 12:52:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:52:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:52:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:52:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:52:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:52:44 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:52:44 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:52:44 --> Total execution time: 0.0812
DEBUG - 2021-08-11 12:52:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:52:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:52:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:52:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:52:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:52:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:52:59 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:52:59 --> Total execution time: 0.0950
DEBUG - 2021-08-11 12:53:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:53:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:53:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:53:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:53:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:53:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:53:14 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:53:14 --> Total execution time: 0.0770
DEBUG - 2021-08-11 12:53:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:53:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:53:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:53:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:53:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:53:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:53:29 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:53:29 --> Total execution time: 0.0691
DEBUG - 2021-08-11 12:53:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:53:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:53:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:53:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:53:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:53:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:53:44 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:53:44 --> Total execution time: 0.0802
DEBUG - 2021-08-11 12:53:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:53:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:53:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:53:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:53:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:53:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:53:59 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:53:59 --> Total execution time: 0.0763
DEBUG - 2021-08-11 12:54:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:54:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:54:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:54:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:54:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:54:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:54:14 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:54:14 --> Total execution time: 0.0876
DEBUG - 2021-08-11 12:54:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:54:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:54:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:54:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:54:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:54:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:54:29 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:54:29 --> Total execution time: 0.0715
DEBUG - 2021-08-11 12:54:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:54:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:54:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:54:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:54:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:54:43 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:54:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:54:43 --> Total execution time: 0.0698
DEBUG - 2021-08-11 12:54:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:54:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:54:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:54:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:54:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:54:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:54:59 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:54:59 --> Total execution time: 0.1249
DEBUG - 2021-08-11 12:55:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:55:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:55:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:55:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:55:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:55:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:55:14 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:55:14 --> Total execution time: 0.1599
DEBUG - 2021-08-11 12:55:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:55:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:55:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:55:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:55:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:55:29 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:55:29 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:55:29 --> Total execution time: 0.1291
DEBUG - 2021-08-11 12:55:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:55:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:55:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:55:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:55:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:55:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:55:44 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:55:44 --> Total execution time: 0.1017
DEBUG - 2021-08-11 12:55:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:55:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:55:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:55:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:55:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:55:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:55:58 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:55:58 --> Total execution time: 0.0980
DEBUG - 2021-08-11 12:56:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:56:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:56:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:56:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:56:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:56:14 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:56:14 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:56:14 --> Total execution time: 0.1217
DEBUG - 2021-08-11 12:56:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:56:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:56:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:56:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:56:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:56:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:56:29 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:56:29 --> Total execution time: 0.1282
DEBUG - 2021-08-11 12:56:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:56:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:56:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:56:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:56:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:56:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:56:44 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:56:44 --> Total execution time: 0.1121
DEBUG - 2021-08-11 12:56:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:56:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:56:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:56:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:56:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:56:59 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:56:59 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:56:59 --> Total execution time: 0.1565
DEBUG - 2021-08-11 12:57:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:57:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:57:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:57:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:57:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:57:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:57:14 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:57:14 --> Total execution time: 0.0736
DEBUG - 2021-08-11 12:57:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:57:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:57:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:57:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:57:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:57:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:57:29 --> 0.0006 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:57:29 --> Total execution time: 0.0918
DEBUG - 2021-08-11 12:57:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:57:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:57:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:57:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:57:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:57:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:57:44 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:57:44 --> Total execution time: 0.1250
DEBUG - 2021-08-11 12:57:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:57:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:57:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:57:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:57:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:57:59 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:57:59 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:57:59 --> Total execution time: 0.5683
DEBUG - 2021-08-11 12:58:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:58:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:58:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:58:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:58:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:58:14 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:58:14 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:58:14 --> Total execution time: 0.1000
DEBUG - 2021-08-11 12:58:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:58:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:58:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:58:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:58:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:58:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:58:29 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:58:29 --> Total execution time: 0.0957
DEBUG - 2021-08-11 12:58:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:58:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:58:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:58:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:58:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:58:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:58:44 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:58:44 --> Total execution time: 0.0830
DEBUG - 2021-08-11 12:58:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:58:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:58:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:58:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:58:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:58:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:58:59 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:58:59 --> Total execution time: 0.1053
DEBUG - 2021-08-11 12:59:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:59:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:59:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:59:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:59:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:59:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:59:14 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:59:14 --> Total execution time: 0.1626
DEBUG - 2021-08-11 12:59:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:59:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:59:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:59:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:59:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:59:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:59:29 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:59:29 --> Total execution time: 0.1048
DEBUG - 2021-08-11 12:59:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:59:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:59:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:59:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:59:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:59:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:59:44 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:59:44 --> Total execution time: 0.2224
DEBUG - 2021-08-11 12:59:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 12:59:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 12:59:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 12:59:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 12:59:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 12:59:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 12:59:59 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 12:59:59 --> Total execution time: 0.0713
DEBUG - 2021-08-11 13:00:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:00:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:00:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:00:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:00:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:00:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:00:14 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:00:14 --> Total execution time: 0.0855
DEBUG - 2021-08-11 13:00:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:00:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:00:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:00:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:00:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:00:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:00:29 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:00:29 --> Total execution time: 0.0918
DEBUG - 2021-08-11 13:00:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:00:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:00:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:00:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:00:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:00:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:00:44 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:00:44 --> Total execution time: 0.0837
DEBUG - 2021-08-11 13:00:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:00:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:00:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:00:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:00:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:00:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:00:59 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:00:59 --> Total execution time: 0.1337
DEBUG - 2021-08-11 13:01:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:01:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:01:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:01:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:01:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:01:14 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:01:14 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:01:14 --> Total execution time: 0.2027
DEBUG - 2021-08-11 13:01:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:01:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:01:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:01:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:01:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:01:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:01:29 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:01:29 --> Total execution time: 0.0833
DEBUG - 2021-08-11 13:01:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:01:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:01:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:01:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:01:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:01:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:01:44 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:01:44 --> Total execution time: 0.1119
DEBUG - 2021-08-11 13:01:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:01:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:01:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:01:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:01:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:01:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:01:59 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:01:59 --> Total execution time: 0.2462
DEBUG - 2021-08-11 13:02:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:02:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:02:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:02:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:02:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:02:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:02:14 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:02:14 --> Total execution time: 0.0772
DEBUG - 2021-08-11 13:02:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:02:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:02:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:02:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:02:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:02:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:02:29 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:02:29 --> Total execution time: 0.0936
DEBUG - 2021-08-11 13:02:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:02:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:02:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:02:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:02:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:02:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:02:44 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:02:44 --> Total execution time: 0.0812
DEBUG - 2021-08-11 13:02:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:02:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:02:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:02:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:02:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:02:59 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:02:59 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:02:59 --> Total execution time: 0.0830
DEBUG - 2021-08-11 13:03:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:03:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:03:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:03:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:03:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:03:14 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:03:14 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:03:14 --> Total execution time: 0.0813
DEBUG - 2021-08-11 13:03:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:03:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:03:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:03:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:03:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:03:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:03:29 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:03:29 --> Total execution time: 0.0747
DEBUG - 2021-08-11 13:03:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:03:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:03:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:03:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:03:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:03:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:03:44 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:03:44 --> Total execution time: 0.0949
DEBUG - 2021-08-11 13:03:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:03:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:03:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:03:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:03:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:03:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:03:59 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:03:59 --> Total execution time: 0.0844
DEBUG - 2021-08-11 13:04:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:04:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:04:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:04:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:04:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:04:14 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:04:14 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:04:14 --> Total execution time: 0.0859
DEBUG - 2021-08-11 13:04:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:04:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:04:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:04:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:04:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:04:29 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:04:29 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:04:29 --> Total execution time: 0.0683
DEBUG - 2021-08-11 13:04:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:04:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:04:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:04:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:04:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:04:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:04:44 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:04:44 --> Total execution time: 0.0681
DEBUG - 2021-08-11 13:04:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:04:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:04:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:04:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:04:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:04:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:04:59 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:04:59 --> Total execution time: 0.0681
DEBUG - 2021-08-11 13:05:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:05:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:05:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:05:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:05:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:05:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:05:14 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:05:14 --> Total execution time: 0.0701
DEBUG - 2021-08-11 13:05:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:05:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:05:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:05:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:05:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:05:29 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:05:29 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:05:29 --> Total execution time: 0.0744
DEBUG - 2021-08-11 13:05:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:05:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:05:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:05:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:05:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:05:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:05:44 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:05:44 --> Total execution time: 0.0733
DEBUG - 2021-08-11 13:05:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:05:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:05:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:05:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:05:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:05:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:05:59 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:05:59 --> Total execution time: 0.0827
DEBUG - 2021-08-11 13:06:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:06:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:06:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:06:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:06:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:06:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:06:14 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:06:14 --> Total execution time: 0.1548
DEBUG - 2021-08-11 13:06:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:06:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:06:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:06:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:06:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:06:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:06:29 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:06:29 --> Total execution time: 0.0959
DEBUG - 2021-08-11 13:06:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:06:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:06:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:06:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:06:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:06:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:06:44 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:06:44 --> Total execution time: 0.0789
DEBUG - 2021-08-11 13:06:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:06:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:06:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:06:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:06:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:06:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:06:59 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:06:59 --> Total execution time: 0.0785
DEBUG - 2021-08-11 13:07:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:07:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:07:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:07:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:07:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:07:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:07:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:07:16 --> Total execution time: 0.0659
DEBUG - 2021-08-11 13:08:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:08:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:08:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:08:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:08:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:08:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:08:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:08:16 --> Total execution time: 0.0789
DEBUG - 2021-08-11 13:09:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:09:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:09:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:09:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:09:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:09:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:09:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:09:16 --> Total execution time: 0.0753
DEBUG - 2021-08-11 13:09:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:09:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:09:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:09:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:09:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:09:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:09:29 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:09:29 --> Total execution time: 0.0917
DEBUG - 2021-08-11 13:09:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:09:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:09:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:09:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:09:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:09:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:09:44 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:09:44 --> Total execution time: 0.0842
DEBUG - 2021-08-11 13:09:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:09:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:09:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:09:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:09:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:09:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:09:59 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:09:59 --> Total execution time: 0.0886
DEBUG - 2021-08-11 13:10:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:10:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:10:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:10:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:10:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:10:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:10:14 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:10:14 --> Total execution time: 0.0758
DEBUG - 2021-08-11 13:10:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:10:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:10:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:10:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:10:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:10:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:10:29 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:10:29 --> Total execution time: 0.0792
DEBUG - 2021-08-11 13:10:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:10:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:10:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:10:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:10:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:10:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:10:44 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:10:44 --> Total execution time: 0.0838
DEBUG - 2021-08-11 13:10:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:10:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:10:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:10:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:10:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:10:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:10:59 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:10:59 --> Total execution time: 0.0862
DEBUG - 2021-08-11 13:11:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:11:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:11:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:11:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:11:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:11:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:11:14 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:11:14 --> Total execution time: 0.0766
DEBUG - 2021-08-11 13:11:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:11:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:11:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:11:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:11:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:11:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:11:29 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:11:29 --> Total execution time: 0.0772
DEBUG - 2021-08-11 13:11:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:11:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:11:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:11:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:11:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:11:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:11:44 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:11:44 --> Total execution time: 0.0840
DEBUG - 2021-08-11 13:11:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:11:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:11:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:11:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:11:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:11:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:11:59 --> 0.044 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:11:59 --> Total execution time: 0.1103
DEBUG - 2021-08-11 13:12:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:12:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:12:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:12:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:12:10 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-11 13:12:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:12:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:12:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:12:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:12:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:12:13 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:12:13 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:12:13 --> Total execution time: 0.0740
QUERY - 2021-08-11 13:12:27 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:12:27 --> 3.0417 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-11 13:12:27 --> 0.0751 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-11 13:12:27 --> 5.0829 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-11 13:12:27 --> 2.7532 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-11 13:12:27 --> 2.5313 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-11 13:12:27 --> 0.1325 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-11 13:12:27 --> 2.9286 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-11 13:12:27 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-11 13:12:27 --> 0.0164 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-11 13:12:27 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:12:27 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:12:27 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-11 13:12:27 --> Total execution time: 16.7278
DEBUG - 2021-08-11 13:12:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:12:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:12:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:12:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:12:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:12:44 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:12:44 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:12:44 --> Total execution time: 0.0877
DEBUG - 2021-08-11 13:12:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:12:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:12:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:12:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:12:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:12:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:12:59 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:12:59 --> Total execution time: 0.0796
DEBUG - 2021-08-11 13:13:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:13:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:13:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:13:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:13:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:13:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:13:00 --> 0.062 | INSERT INTO `csvexportlog` (`export_status`, `filter_col`, `created_datetime`) VALUES (0, 'null', '2021-08-11 13:13:00')
DEBUG - 2021-08-11 13:13:00 --> Total execution time: 0.1717
DEBUG - 2021-08-11 13:13:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:13:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:13:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:13:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:13:00 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-11 13:13:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:13:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:13:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-11 13:13:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:13:15 --> 2.8693 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-11 13:13:15 --> 0.051 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-11 13:13:15 --> 2.8246 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-11 13:13:15 --> 2.6017 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-11 13:13:15 --> 2.5648 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-11 13:13:15 --> 0.108 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-11 13:13:15 --> 3.1827 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-11 13:13:15 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-11 13:13:15 --> 0.0078 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-11 13:13:15 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:13:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:13:15 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-11 13:13:15 --> Total execution time: 14.2851
DEBUG - 2021-08-11 13:13:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:13:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:13:15 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:13:15 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:13:15 --> Total execution time: 1.5738
DEBUG - 2021-08-11 13:13:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:13:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:13:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:13:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:13:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:13:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:13:31 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:13:31 --> Total execution time: 0.0860
DEBUG - 2021-08-11 13:13:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:13:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:13:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:13:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:13:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:13:46 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:13:46 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:13:46 --> Total execution time: 0.0857
DEBUG - 2021-08-11 13:14:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:14:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:14:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:14:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:14:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:14:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:14:01 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:14:01 --> Total execution time: 0.0769
DEBUG - 2021-08-11 13:14:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:14:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:14:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:14:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:14:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:14:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:14:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:14:16 --> Total execution time: 0.1104
DEBUG - 2021-08-11 13:14:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:14:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:14:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:14:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:14:30 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:14:30 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:14:30 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:14:30 --> Total execution time: 0.0872
DEBUG - 2021-08-11 13:14:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:14:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:14:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:14:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:14:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:14:31 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:14:31 --> 0.0467 | INSERT INTO `csvexportlog` (`export_status`, `filter_col`, `created_datetime`) VALUES (0, 'null', '2021-08-11 13:14:31')
DEBUG - 2021-08-11 13:14:31 --> Total execution time: 0.1151
DEBUG - 2021-08-11 13:14:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:14:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:14:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:14:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:14:32 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:14:44 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:14:44 --> 2.8417 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-11 13:14:44 --> 0.0526 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-11 13:14:44 --> 2.5581 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-11 13:14:44 --> 2.2776 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-11 13:14:44 --> 2.5366 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-11 13:14:44 --> 0.0492 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-11 13:14:44 --> 2.5034 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-11 13:14:44 --> 0.0071 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-11 13:14:44 --> 0.0142 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-11 13:14:44 --> 0.0089 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:14:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:14:44 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-11 13:14:44 --> Total execution time: 12.9156
DEBUG - 2021-08-11 13:15:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:15:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:15:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:15:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:15:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:15:01 --> 0.0158 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:15:01 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:15:01 --> Total execution time: 0.1091
DEBUG - 2021-08-11 13:15:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:15:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:15:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:15:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:15:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:15:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:15:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:15:16 --> Total execution time: 0.0739
DEBUG - 2021-08-11 13:15:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:15:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:15:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:15:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:15:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:15:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:15:31 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:15:31 --> Total execution time: 0.0725
DEBUG - 2021-08-11 13:15:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:15:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:15:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:15:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:15:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:15:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:15:46 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:15:46 --> Total execution time: 0.0719
DEBUG - 2021-08-11 13:16:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:16:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:16:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:16:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:16:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:16:01 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:16:01 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:16:01 --> Total execution time: 0.0762
DEBUG - 2021-08-11 13:16:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:16:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:16:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:16:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:16:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:16:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:16:16 --> 0.0007 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:16:16 --> Total execution time: 0.0718
DEBUG - 2021-08-11 13:16:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:16:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:16:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:16:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:16:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:16:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:16:31 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:16:31 --> Total execution time: 0.0673
DEBUG - 2021-08-11 13:16:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:16:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:16:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:16:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:16:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:16:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:16:46 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:16:46 --> Total execution time: 0.0757
DEBUG - 2021-08-11 13:17:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:17:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:17:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:17:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:17:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:17:01 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:17:01 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:17:01 --> Total execution time: 0.4704
DEBUG - 2021-08-11 13:17:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:17:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:17:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:17:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:17:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:17:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:17:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:17:16 --> Total execution time: 0.0821
DEBUG - 2021-08-11 13:17:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:17:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:17:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:17:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:17:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:17:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:17:31 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:17:31 --> Total execution time: 0.0840
DEBUG - 2021-08-11 13:17:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:17:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:17:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:17:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:17:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:17:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:17:46 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:17:46 --> Total execution time: 0.0851
DEBUG - 2021-08-11 13:18:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:18:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:18:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:18:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:18:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:18:01 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:18:01 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:18:01 --> Total execution time: 0.2288
DEBUG - 2021-08-11 13:18:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:18:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:18:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:18:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:18:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:18:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:18:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:18:16 --> Total execution time: 0.2317
DEBUG - 2021-08-11 13:18:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:18:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:18:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:18:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:18:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:18:31 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:18:31 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:18:31 --> Total execution time: 0.1156
DEBUG - 2021-08-11 13:18:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:18:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:18:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:18:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:18:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:18:45 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:18:45 --> 0.0006 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:18:45 --> Total execution time: 0.4172
DEBUG - 2021-08-11 13:19:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:19:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:19:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:19:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:19:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:19:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:19:01 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:19:01 --> Total execution time: 0.1775
DEBUG - 2021-08-11 13:19:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:19:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:19:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:19:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:19:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:19:17 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:19:17 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:19:17 --> Total execution time: 1.3520
DEBUG - 2021-08-11 13:19:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:19:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:19:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:19:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:19:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:19:31 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:19:31 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:19:31 --> Total execution time: 0.1594
DEBUG - 2021-08-11 13:19:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:19:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:19:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:19:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:19:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:19:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:19:46 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:19:46 --> Total execution time: 0.0788
DEBUG - 2021-08-11 13:20:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:20:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:20:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:20:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:20:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:20:01 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:20:01 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:20:01 --> Total execution time: 0.1172
DEBUG - 2021-08-11 13:20:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:20:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:20:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:20:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:20:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:20:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:20:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:20:16 --> Total execution time: 0.0820
DEBUG - 2021-08-11 13:20:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:20:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:20:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:20:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:20:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:20:31 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:20:31 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:20:31 --> Total execution time: 0.0791
DEBUG - 2021-08-11 13:20:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:20:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:20:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:20:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:20:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:20:46 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:20:46 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:20:46 --> Total execution time: 0.0957
DEBUG - 2021-08-11 13:21:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:21:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:21:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:21:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:21:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:21:01 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:21:01 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:21:01 --> Total execution time: 0.0751
DEBUG - 2021-08-11 13:21:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:21:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:21:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:21:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:21:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:21:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:21:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:21:16 --> Total execution time: 0.0806
DEBUG - 2021-08-11 13:21:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:21:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:21:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:21:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:21:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:21:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:21:31 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:21:31 --> Total execution time: 0.0915
DEBUG - 2021-08-11 13:21:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:21:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:21:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:21:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:21:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:21:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:21:46 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:21:46 --> Total execution time: 0.0755
DEBUG - 2021-08-11 13:22:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:22:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:22:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:22:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:22:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:22:01 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:22:01 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:22:01 --> Total execution time: 0.0754
DEBUG - 2021-08-11 13:22:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:22:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:22:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:22:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:22:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:22:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:22:16 --> 0.0006 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:22:16 --> Total execution time: 0.0658
DEBUG - 2021-08-11 13:22:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:22:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:22:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:22:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:22:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:22:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:22:31 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:22:31 --> Total execution time: 0.0927
DEBUG - 2021-08-11 13:22:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:22:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:22:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:22:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:22:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:22:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:22:46 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:22:46 --> Total execution time: 0.0812
DEBUG - 2021-08-11 13:23:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:23:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:23:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:23:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:23:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:23:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:23:01 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:23:01 --> Total execution time: 0.0703
DEBUG - 2021-08-11 13:23:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:23:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:23:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:23:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:23:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:23:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:23:15 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:23:15 --> Total execution time: 0.0795
DEBUG - 2021-08-11 13:23:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:23:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:23:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:23:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:23:30 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:23:30 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:23:30 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:23:30 --> Total execution time: 0.0992
DEBUG - 2021-08-11 13:23:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:23:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:23:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:23:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:23:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:23:45 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:23:45 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:23:45 --> Total execution time: 0.0856
DEBUG - 2021-08-11 13:24:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:24:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:24:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:24:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:24:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:24:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:24:01 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:24:01 --> Total execution time: 0.0769
DEBUG - 2021-08-11 13:24:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:24:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:24:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:24:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:24:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:24:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:24:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:24:16 --> Total execution time: 0.0791
DEBUG - 2021-08-11 13:24:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:24:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:24:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:24:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:24:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:24:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:24:31 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:24:31 --> Total execution time: 0.0866
DEBUG - 2021-08-11 13:24:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:24:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:24:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:24:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:24:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:24:45 --> 0.0083 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:24:45 --> 0.008 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:24:45 --> Total execution time: 0.1380
DEBUG - 2021-08-11 13:25:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:25:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:25:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:25:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:25:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:25:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:25:00 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:25:00 --> Total execution time: 0.0752
DEBUG - 2021-08-11 13:25:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:25:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:25:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:25:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:25:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:25:16 --> 0.0011 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:25:16 --> 0.0009 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:25:16 --> Total execution time: 0.2893
DEBUG - 2021-08-11 13:25:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:25:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:25:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:25:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:25:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:25:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:25:31 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:25:31 --> Total execution time: 0.0669
DEBUG - 2021-08-11 13:25:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:25:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:25:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:25:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:25:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:25:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:25:46 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:25:46 --> Total execution time: 0.0901
DEBUG - 2021-08-11 13:26:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:26:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:26:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:26:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:26:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:26:01 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:26:01 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:26:01 --> Total execution time: 0.0940
DEBUG - 2021-08-11 13:26:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:26:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:26:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:26:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:26:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:26:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:26:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:26:16 --> Total execution time: 0.0731
DEBUG - 2021-08-11 13:26:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:26:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:26:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:26:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:26:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:26:31 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:26:31 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:26:31 --> Total execution time: 0.0694
DEBUG - 2021-08-11 13:26:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:26:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:26:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:26:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:26:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:26:46 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:26:46 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:26:46 --> Total execution time: 0.5962
DEBUG - 2021-08-11 13:27:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:27:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:27:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:27:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:27:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:27:01 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:27:01 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:27:01 --> Total execution time: 0.0674
DEBUG - 2021-08-11 13:27:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:27:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:27:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:27:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:27:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:27:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:27:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:27:16 --> Total execution time: 0.1172
DEBUG - 2021-08-11 13:27:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:27:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:27:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:27:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:27:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:27:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:27:31 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:27:31 --> Total execution time: 0.0830
DEBUG - 2021-08-11 13:27:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:27:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:27:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:27:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:27:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:27:46 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:27:46 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:27:46 --> Total execution time: 0.0868
DEBUG - 2021-08-11 13:28:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:28:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:28:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:28:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:28:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:28:01 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:28:01 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:28:01 --> Total execution time: 0.0735
DEBUG - 2021-08-11 13:28:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:28:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:28:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:28:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:28:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:28:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:28:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:28:16 --> Total execution time: 0.0688
DEBUG - 2021-08-11 13:28:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:28:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:28:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:28:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:28:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:28:31 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:28:31 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:28:31 --> Total execution time: 0.1602
DEBUG - 2021-08-11 13:28:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:28:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:28:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:28:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:28:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:28:46 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:28:46 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:28:46 --> Total execution time: 0.0878
DEBUG - 2021-08-11 13:29:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:29:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:29:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:29:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:29:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:29:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:29:01 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:29:01 --> Total execution time: 0.1161
DEBUG - 2021-08-11 13:29:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:29:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:29:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:29:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:29:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:29:16 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:29:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:29:16 --> Total execution time: 0.0678
DEBUG - 2021-08-11 13:29:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:29:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:29:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:29:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:29:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:29:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:29:31 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:29:31 --> Total execution time: 0.0849
DEBUG - 2021-08-11 13:29:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:29:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:29:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:29:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:29:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:29:46 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:29:46 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:29:46 --> Total execution time: 0.0944
DEBUG - 2021-08-11 13:30:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:30:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:30:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:30:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:30:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:30:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:30:01 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:30:01 --> Total execution time: 0.0613
DEBUG - 2021-08-11 13:30:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:30:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:30:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:30:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:30:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:30:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:30:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:30:16 --> Total execution time: 0.0713
DEBUG - 2021-08-11 13:31:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:31:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:31:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:31:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:31:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:31:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:31:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:31:16 --> Total execution time: 0.3296
DEBUG - 2021-08-11 13:32:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:32:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:32:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:32:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:32:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:32:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:32:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:32:16 --> Total execution time: 0.4589
DEBUG - 2021-08-11 13:33:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:33:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:33:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:33:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:33:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:33:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:33:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:33:16 --> Total execution time: 0.1566
DEBUG - 2021-08-11 13:34:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:34:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:34:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:34:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:34:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:34:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:34:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:34:16 --> Total execution time: 0.3873
DEBUG - 2021-08-11 13:35:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:35:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:35:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:35:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:35:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:35:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:35:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:35:16 --> Total execution time: 0.0784
DEBUG - 2021-08-11 13:36:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:36:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:36:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:36:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:36:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:36:09 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:36:09 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:36:09 --> Total execution time: 0.1056
DEBUG - 2021-08-11 13:36:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:36:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:36:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:36:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:36:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:36:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:36:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:36:16 --> Total execution time: 0.0769
DEBUG - 2021-08-11 13:36:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:36:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:36:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:36:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:36:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:36:31 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:36:31 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:36:31 --> Total execution time: 0.1287
DEBUG - 2021-08-11 13:36:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:36:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:36:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:36:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:36:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:36:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:36:46 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:36:46 --> Total execution time: 0.0917
DEBUG - 2021-08-11 13:37:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:37:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:37:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:37:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:37:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:37:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:37:00 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:37:00 --> Total execution time: 0.0950
DEBUG - 2021-08-11 13:37:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:37:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:37:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:37:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:37:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:37:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:37:00 --> 0.1051 | INSERT INTO `csvexportlog` (`export_status`, `filter_col`, `created_datetime`) VALUES (0, 'null', '2021-08-11 13:37:00')
DEBUG - 2021-08-11 13:37:00 --> Total execution time: 0.1802
DEBUG - 2021-08-11 13:37:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:37:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:37:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:37:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:37:00 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-11 13:37:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:37:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:37:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:37:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:37:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:37:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:37:15 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:37:15 --> Total execution time: 0.0656
QUERY - 2021-08-11 13:37:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:37:24 --> 3.6133 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-11 13:37:24 --> 0.2493 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-11 13:37:24 --> 5.4904 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-11 13:37:24 --> 5.4272 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-11 13:37:24 --> 4.5022 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-11 13:37:24 --> 0.0467 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-11 13:37:24 --> 4.7171 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-11 13:37:24 --> 0.0006 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-11 13:37:24 --> 0.0159 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-11 13:37:24 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:37:24 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:37:24 --> 0.0006 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-11 13:37:24 --> Total execution time: 24.1463
DEBUG - 2021-08-11 13:37:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:37:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:37:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:37:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:37:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:37:41 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:37:41 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:37:41 --> Total execution time: 0.7060
DEBUG - 2021-08-11 13:37:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:37:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:37:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:37:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:37:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:37:55 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:37:55 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:37:55 --> Total execution time: 0.3614
DEBUG - 2021-08-11 13:38:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:38:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:38:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:38:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:38:11 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:38:11 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:38:11 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:38:11 --> Total execution time: 0.3212
DEBUG - 2021-08-11 13:38:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:38:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:38:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:38:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:38:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:38:26 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:38:26 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:38:26 --> Total execution time: 0.3262
DEBUG - 2021-08-11 13:38:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:38:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:38:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:38:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:38:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:38:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:38:41 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:38:41 --> Total execution time: 0.0820
DEBUG - 2021-08-11 13:38:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:38:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:38:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:38:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:38:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:38:56 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:38:56 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:38:56 --> Total execution time: 0.0839
DEBUG - 2021-08-11 13:39:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:39:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:39:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:39:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:39:11 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:39:11 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:39:11 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:39:11 --> Total execution time: 0.0852
DEBUG - 2021-08-11 13:39:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:39:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:39:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:39:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:39:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:39:26 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:39:26 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:39:26 --> Total execution time: 0.0911
DEBUG - 2021-08-11 13:39:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:39:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:39:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:39:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:39:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:39:41 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:39:41 --> 0.0007 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:39:41 --> Total execution time: 0.0859
DEBUG - 2021-08-11 13:39:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:39:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:39:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:39:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:39:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:39:56 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:39:56 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:39:56 --> Total execution time: 0.0758
DEBUG - 2021-08-11 13:40:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:40:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:40:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:40:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:40:11 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:40:11 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:40:11 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:40:11 --> Total execution time: 0.0718
DEBUG - 2021-08-11 13:40:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:40:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:40:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:40:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:40:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:40:26 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:40:26 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:40:26 --> Total execution time: 0.0719
DEBUG - 2021-08-11 13:40:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:40:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:40:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:40:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:40:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:40:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:40:41 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:40:41 --> Total execution time: 0.0720
DEBUG - 2021-08-11 13:40:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:40:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:40:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:40:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:40:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:40:56 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:40:56 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:40:56 --> Total execution time: 0.0699
DEBUG - 2021-08-11 13:41:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:41:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:41:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:41:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:41:11 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:41:11 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:41:11 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:41:11 --> Total execution time: 0.0768
DEBUG - 2021-08-11 13:41:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:41:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:41:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:41:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:41:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:41:26 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:41:26 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:41:26 --> Total execution time: 0.0724
DEBUG - 2021-08-11 13:41:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:41:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:41:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:41:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:41:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:41:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:41:41 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:41:41 --> Total execution time: 0.0798
DEBUG - 2021-08-11 13:41:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:41:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:41:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:41:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:41:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:41:56 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:41:56 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:41:56 --> Total execution time: 0.0697
DEBUG - 2021-08-11 13:42:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:42:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:42:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:42:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:42:11 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:42:11 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:42:11 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:42:11 --> Total execution time: 0.0833
DEBUG - 2021-08-11 13:42:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:42:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:42:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:42:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:42:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:42:26 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:42:26 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:42:26 --> Total execution time: 0.0901
DEBUG - 2021-08-11 13:42:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:42:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:42:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:42:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:42:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:42:41 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:42:41 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:42:41 --> Total execution time: 0.0721
DEBUG - 2021-08-11 13:42:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:42:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:42:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:42:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:42:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:42:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:42:55 --> 0.001 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:42:55 --> Total execution time: 0.1038
DEBUG - 2021-08-11 13:43:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:43:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:43:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:43:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:43:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:43:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:43:10 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:43:10 --> Total execution time: 0.0814
DEBUG - 2021-08-11 13:43:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:43:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:43:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:43:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:43:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:43:26 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:43:26 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:43:26 --> Total execution time: 0.0694
DEBUG - 2021-08-11 13:43:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:43:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:43:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:43:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:43:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:43:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:43:41 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:43:41 --> Total execution time: 0.0757
DEBUG - 2021-08-11 13:43:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:43:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:43:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:43:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:43:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:43:56 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:43:56 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:43:56 --> Total execution time: 0.0649
DEBUG - 2021-08-11 13:44:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:44:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:44:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:44:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:44:11 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:44:11 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:44:11 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:44:11 --> Total execution time: 0.0796
DEBUG - 2021-08-11 13:44:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:44:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:44:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:44:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:44:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:44:26 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:44:26 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:44:26 --> Total execution time: 0.0690
DEBUG - 2021-08-11 13:44:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:44:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:44:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:44:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:44:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:44:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:44:41 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:44:41 --> Total execution time: 0.0840
DEBUG - 2021-08-11 13:44:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:44:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:44:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:44:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:44:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:44:56 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:44:56 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:44:56 --> Total execution time: 0.0964
DEBUG - 2021-08-11 13:45:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:45:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:45:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:45:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:45:11 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:45:11 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:45:11 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:45:11 --> Total execution time: 0.0782
DEBUG - 2021-08-11 13:45:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:45:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:45:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:45:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:45:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:45:26 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:45:26 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:45:26 --> Total execution time: 0.0632
DEBUG - 2021-08-11 13:45:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:45:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:45:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:45:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:45:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:45:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:45:41 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:45:41 --> Total execution time: 0.0625
DEBUG - 2021-08-11 13:45:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:45:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:45:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:45:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:45:50 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:45:50 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:45:50 --> 0.107 | INSERT INTO `csvexportlog` (`export_status`, `filter_col`, `created_datetime`) VALUES (0, 'null', '2021-08-11 13:45:50')
DEBUG - 2021-08-11 13:45:50 --> Total execution time: 0.1771
DEBUG - 2021-08-11 13:45:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:45:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:45:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:45:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:45:50 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-11 13:45:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:45:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:45:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:45:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:45:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:45:55 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:45:55 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:45:55 --> Total execution time: 0.0935
QUERY - 2021-08-11 13:46:04 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:46:04 --> 3.4626 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-11 13:46:04 --> 0.0597 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-11 13:46:04 --> 2.9282 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-11 13:46:04 --> 2.5331 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-11 13:46:04 --> 2.589 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-11 13:46:04 --> 0.0495 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-11 13:46:04 --> 2.3171 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-11 13:46:04 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-11 13:46:04 --> 0.085 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-11 13:46:04 --> 0.0009 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:46:04 --> 0.0008 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:46:04 --> 0.0009 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-11 13:46:04 --> Total execution time: 14.1022
DEBUG - 2021-08-11 13:46:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:46:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:46:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:46:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:46:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:46:21 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:46:21 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:46:21 --> Total execution time: 0.0780
DEBUG - 2021-08-11 13:46:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:46:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:46:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:46:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:46:36 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:46:36 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:46:36 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:46:36 --> Total execution time: 0.1201
DEBUG - 2021-08-11 13:46:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:46:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:46:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:46:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:46:51 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:46:51 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:46:51 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:46:51 --> Total execution time: 0.0747
DEBUG - 2021-08-11 13:47:06 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:47:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:47:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:47:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:47:06 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:47:06 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:47:06 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:47:06 --> Total execution time: 0.0791
DEBUG - 2021-08-11 13:47:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:47:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:47:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:47:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:47:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:47:21 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:47:21 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:47:21 --> Total execution time: 0.1003
DEBUG - 2021-08-11 13:47:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:47:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:47:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:47:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:47:36 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:47:36 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:47:36 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:47:36 --> Total execution time: 0.0807
DEBUG - 2021-08-11 13:47:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:47:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:47:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:47:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:47:51 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:47:51 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:47:51 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:47:51 --> Total execution time: 0.0794
DEBUG - 2021-08-11 13:48:06 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:48:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:48:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:48:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:48:06 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:48:06 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:48:06 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:48:06 --> Total execution time: 0.0668
DEBUG - 2021-08-11 13:48:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:48:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:48:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:48:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:48:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:48:21 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:48:21 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:48:21 --> Total execution time: 0.0862
DEBUG - 2021-08-11 13:48:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:48:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:48:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:48:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:48:36 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:48:36 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:48:36 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:48:36 --> Total execution time: 0.0696
DEBUG - 2021-08-11 13:48:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:48:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:48:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:48:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:48:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:48:42 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:48:42 --> 0.0911 | INSERT INTO `csvexportlog` (`export_status`, `filter_col`, `created_datetime`) VALUES (0, 'null', '2021-08-11 13:48:42')
DEBUG - 2021-08-11 13:48:42 --> Total execution time: 0.1615
DEBUG - 2021-08-11 13:48:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:48:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:48:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:48:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:48:42 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-11 13:48:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:48:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:48:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:49:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:49:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:49:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-11 13:49:05 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:49:05 --> 4.0896 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-11 13:49:05 --> 0.0491 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-11 13:49:05 --> 4.9648 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-11 13:49:05 --> 4.8223 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-11 13:49:05 --> 4.0746 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-11 13:49:05 --> 0.0495 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-11 13:49:05 --> 4.2394 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-11 13:49:05 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-11 13:49:05 --> 0.0387 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-11 13:49:05 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:49:05 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:49:05 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-11 13:49:05 --> Total execution time: 22.4151
DEBUG - 2021-08-11 13:49:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:49:05 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:49:05 --> 0.0017 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:49:05 --> 0.0017 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:49:05 --> Total execution time: 15.1876
DEBUG - 2021-08-11 13:49:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:49:05 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:49:05 --> 0.0055 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:49:05 --> 0.0014 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:49:05 --> Total execution time: 0.1936
DEBUG - 2021-08-11 13:49:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:49:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:49:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:49:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:49:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:49:21 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:49:21 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:49:21 --> Total execution time: 0.0816
DEBUG - 2021-08-11 13:49:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:49:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:49:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:49:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:49:36 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:49:36 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:49:36 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:49:36 --> Total execution time: 0.1475
DEBUG - 2021-08-11 13:49:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:49:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:49:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:49:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:49:51 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:49:51 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:49:51 --> 0.0006 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:49:51 --> Total execution time: 0.4109
DEBUG - 2021-08-11 13:50:06 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:50:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:50:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:50:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:50:06 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:50:06 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:50:06 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:50:06 --> Total execution time: 0.0713
DEBUG - 2021-08-11 13:50:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:50:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:50:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:50:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:50:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:50:21 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:50:21 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:50:21 --> Total execution time: 0.0727
DEBUG - 2021-08-11 13:50:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:50:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:50:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:50:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:50:36 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:50:36 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:50:36 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:50:36 --> Total execution time: 0.0976
DEBUG - 2021-08-11 13:50:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:50:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:50:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:50:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:50:50 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:50:50 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:50:50 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:50:50 --> Total execution time: 0.1031
DEBUG - 2021-08-11 13:50:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:50:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:50:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:50:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:50:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:50:53 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:50:53 --> 0.1197 | INSERT INTO `csvexportlog` (`export_status`, `filter_col`, `created_datetime`) VALUES (0, '{\"circle\":\"ANDHRAPRADESH\"}', '2021-08-11 13:50:53')
DEBUG - 2021-08-11 13:50:53 --> Total execution time: 0.1939
DEBUG - 2021-08-11 13:50:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:50:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:50:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:50:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:50:53 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-11 13:51:06 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:51:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:51:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:51:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:51:06 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:51:06 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:51:06 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:51:06 --> Total execution time: 0.0656
QUERY - 2021-08-11 13:51:13 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:51:13 --> 4.3531 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-11 13:51:13 --> 0.0494 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-11 13:51:13 --> 4.3835 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-11 13:51:13 --> 3.7217 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-11 13:51:13 --> 3.4458 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-11 13:51:13 --> 0.0702 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-11 13:51:13 --> 3.9501 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-11 13:51:13 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-11 13:51:13 --> 0.0071 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-11 13:51:13 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:51:13 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:51:13 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-11 13:51:13 --> Total execution time: 20.0726
DEBUG - 2021-08-11 13:51:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:51:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:51:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:51:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:51:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:51:29 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:51:29 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:51:29 --> Total execution time: 0.1534
DEBUG - 2021-08-11 13:51:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:51:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:51:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:51:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:51:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:51:45 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:51:45 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:51:45 --> Total execution time: 0.0675
DEBUG - 2021-08-11 13:52:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:52:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:52:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:52:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:52:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:52:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:52:00 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:52:00 --> Total execution time: 0.0850
DEBUG - 2021-08-11 13:52:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:52:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:52:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:52:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:52:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:52:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:52:15 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:52:15 --> Total execution time: 0.0829
DEBUG - 2021-08-11 13:52:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:52:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:52:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:52:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:52:30 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:52:30 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:52:30 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:52:30 --> Total execution time: 0.0649
DEBUG - 2021-08-11 13:52:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:52:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:52:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:52:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:52:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:52:44 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:52:44 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:52:44 --> Total execution time: 0.0745
DEBUG - 2021-08-11 13:53:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:53:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:53:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:53:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:53:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:53:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:53:00 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:53:00 --> Total execution time: 0.0717
DEBUG - 2021-08-11 13:53:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:53:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:53:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:53:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:53:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:53:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:53:15 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:53:15 --> Total execution time: 0.0785
DEBUG - 2021-08-11 13:53:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:53:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:53:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:53:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:53:30 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:53:30 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:53:30 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:53:30 --> Total execution time: 0.0923
DEBUG - 2021-08-11 13:53:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:53:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:53:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:53:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:53:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:53:45 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:53:45 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:53:45 --> Total execution time: 0.0729
DEBUG - 2021-08-11 13:54:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:54:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:54:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:54:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:54:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:54:00 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:54:00 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:54:00 --> Total execution time: 0.0751
DEBUG - 2021-08-11 13:54:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:54:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:54:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:54:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:54:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:54:15 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:54:15 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:54:15 --> Total execution time: 0.0906
DEBUG - 2021-08-11 13:54:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:54:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:54:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:54:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:54:30 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:54:30 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:54:30 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:54:30 --> Total execution time: 0.1086
DEBUG - 2021-08-11 13:54:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:54:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:54:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:54:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:54:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:54:45 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:54:45 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:54:45 --> Total execution time: 0.0818
DEBUG - 2021-08-11 13:55:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:55:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:55:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:55:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:55:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:55:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:55:00 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:55:00 --> Total execution time: 0.0772
DEBUG - 2021-08-11 13:55:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:55:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:55:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:55:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:55:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:55:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:55:15 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:55:15 --> Total execution time: 0.0882
DEBUG - 2021-08-11 13:55:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:55:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:55:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:55:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:55:30 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:55:30 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:55:30 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:55:30 --> Total execution time: 0.0785
DEBUG - 2021-08-11 13:55:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:55:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:55:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:55:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:55:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:55:45 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:55:45 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:55:45 --> Total execution time: 0.0810
DEBUG - 2021-08-11 13:56:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:56:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:56:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:56:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:56:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:56:00 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:56:00 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:56:00 --> Total execution time: 0.0824
DEBUG - 2021-08-11 13:56:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:56:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:56:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:56:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:56:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:56:15 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:56:15 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:56:15 --> Total execution time: 0.0684
DEBUG - 2021-08-11 13:56:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:56:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:56:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:56:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:56:30 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:56:30 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:56:30 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:56:30 --> Total execution time: 0.0787
DEBUG - 2021-08-11 13:56:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:56:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:56:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:56:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:56:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:56:45 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:56:45 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:56:45 --> Total execution time: 0.0834
DEBUG - 2021-08-11 13:57:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:57:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:57:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:57:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:57:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:57:00 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:57:00 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:57:00 --> Total execution time: 0.0802
DEBUG - 2021-08-11 13:57:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:57:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:57:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:57:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:57:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:57:15 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:57:15 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:57:15 --> Total execution time: 0.0685
DEBUG - 2021-08-11 13:57:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:57:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:57:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:57:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:57:30 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:57:30 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:57:30 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:57:30 --> Total execution time: 0.1060
DEBUG - 2021-08-11 13:57:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:57:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:57:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:57:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:57:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:57:45 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:57:45 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:57:45 --> Total execution time: 0.1146
DEBUG - 2021-08-11 13:58:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:58:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:58:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:58:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:58:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:58:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:58:00 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:58:00 --> Total execution time: 0.0818
DEBUG - 2021-08-11 13:58:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:58:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:58:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:58:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:58:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:58:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:58:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:58:16 --> Total execution time: 0.0864
DEBUG - 2021-08-11 13:59:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 13:59:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 13:59:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 13:59:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 13:59:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 13:59:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 13:59:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 13:59:16 --> Total execution time: 0.0772
DEBUG - 2021-08-11 14:00:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:00:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:00:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:00:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:00:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:00:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:00:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:00:16 --> Total execution time: 0.1172
DEBUG - 2021-08-11 14:01:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:01:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:01:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:01:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:01:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:01:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:01:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:01:16 --> Total execution time: 0.0713
DEBUG - 2021-08-11 14:02:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:02:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:02:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:02:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:02:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:02:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:02:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:02:16 --> Total execution time: 0.0848
DEBUG - 2021-08-11 14:03:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:03:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:03:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:03:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:03:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:03:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:03:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:03:16 --> Total execution time: 0.0819
DEBUG - 2021-08-11 14:04:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:04:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:04:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:04:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:04:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:04:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:04:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:04:16 --> Total execution time: 0.0753
DEBUG - 2021-08-11 14:05:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:05:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:05:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:05:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:05:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:05:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:05:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:05:16 --> Total execution time: 0.1047
DEBUG - 2021-08-11 14:06:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:06:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:06:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:06:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:06:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:06:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:06:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:06:16 --> Total execution time: 0.0807
DEBUG - 2021-08-11 14:07:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:07:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:07:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:07:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:07:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:07:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:07:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:07:16 --> Total execution time: 0.0675
DEBUG - 2021-08-11 14:08:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:08:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:08:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:08:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:08:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:08:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:08:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:08:16 --> Total execution time: 0.0872
DEBUG - 2021-08-11 14:09:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:09:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:09:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:09:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:09:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:09:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:09:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:09:16 --> Total execution time: 0.0680
DEBUG - 2021-08-11 14:10:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:10:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:10:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:10:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:10:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:10:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:10:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:10:16 --> Total execution time: 0.0793
DEBUG - 2021-08-11 14:11:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:11:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:11:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:11:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:11:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:11:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:11:08 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:11:08 --> Total execution time: 0.1033
DEBUG - 2021-08-11 14:11:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:11:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:11:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:11:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:11:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:11:15 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:11:15 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:11:15 --> Total execution time: 0.0862
DEBUG - 2021-08-11 14:11:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:11:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:11:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:11:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:11:30 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:11:30 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:11:30 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:11:30 --> Total execution time: 0.0867
DEBUG - 2021-08-11 14:11:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:11:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:11:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:11:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:11:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:11:45 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:11:45 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:11:45 --> Total execution time: 0.1223
DEBUG - 2021-08-11 14:12:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:12:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:12:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:12:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:12:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:12:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:12:00 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:12:00 --> Total execution time: 0.1113
DEBUG - 2021-08-11 14:12:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:12:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:12:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:12:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:12:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:12:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:12:15 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:12:15 --> Total execution time: 0.0882
DEBUG - 2021-08-11 14:12:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:12:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:12:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:12:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:12:30 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:12:30 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:12:30 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:12:30 --> Total execution time: 0.0701
DEBUG - 2021-08-11 14:12:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:12:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:12:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:12:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:12:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:12:45 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:12:45 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:12:45 --> Total execution time: 0.0927
DEBUG - 2021-08-11 14:13:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:13:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:13:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:13:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:13:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:13:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:13:00 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:13:00 --> Total execution time: 0.0719
DEBUG - 2021-08-11 14:13:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:13:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:13:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:13:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:13:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:13:15 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:13:15 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:13:15 --> Total execution time: 0.0763
DEBUG - 2021-08-11 14:13:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:13:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:13:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:13:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:13:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:13:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:13:29 --> 0.0745 | INSERT INTO `csvexportlog` (`export_status`, `filter_col`, `created_datetime`) VALUES (0, 'null', '2021-08-11 14:13:29')
DEBUG - 2021-08-11 14:13:29 --> Total execution time: 0.1455
DEBUG - 2021-08-11 14:13:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:13:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:13:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:13:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:13:29 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-11 14:13:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:13:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:13:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:13:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:13:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:13:29 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:13:29 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:13:29 --> Total execution time: 0.0776
QUERY - 2021-08-11 14:13:43 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:13:43 --> 3.1479 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-11 14:13:43 --> 0.0495 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-11 14:13:43 --> 2.5738 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-11 14:13:43 --> 2.721 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-11 14:13:43 --> 2.7556 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-11 14:13:43 --> 0.0492 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-11 14:13:43 --> 2.4617 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-11 14:13:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-11 14:13:43 --> 0.007 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-11 14:13:43 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:13:43 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:13:43 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-11 14:13:43 --> Total execution time: 13.8352
DEBUG - 2021-08-11 14:13:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:13:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:13:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:13:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:13:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:13:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:13:59 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:13:59 --> Total execution time: 0.0821
DEBUG - 2021-08-11 14:14:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:14:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:14:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:14:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:14:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:14:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:14:14 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:14:14 --> Total execution time: 0.0678
DEBUG - 2021-08-11 14:14:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:14:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:14:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:14:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:14:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:14:29 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:14:29 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:14:29 --> Total execution time: 0.0658
DEBUG - 2021-08-11 14:14:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:14:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:14:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:14:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:14:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:14:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:14:44 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:14:44 --> Total execution time: 0.0787
DEBUG - 2021-08-11 14:14:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:14:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:14:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:14:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:14:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:14:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:14:59 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:14:59 --> Total execution time: 0.0815
DEBUG - 2021-08-11 14:15:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:15:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:15:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:15:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:15:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:15:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:15:14 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:15:14 --> Total execution time: 0.0646
DEBUG - 2021-08-11 14:15:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:15:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:15:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:15:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:15:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:15:29 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:15:29 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:15:29 --> Total execution time: 0.0657
DEBUG - 2021-08-11 14:15:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:15:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:15:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:15:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:15:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:15:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:15:44 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:15:44 --> Total execution time: 0.0903
DEBUG - 2021-08-11 14:15:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:15:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:15:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:15:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:15:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:15:59 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:15:59 --> 0.0009 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:15:59 --> Total execution time: 0.1172
DEBUG - 2021-08-11 14:16:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:16:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:16:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:16:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:16:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:16:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:16:14 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:16:14 --> Total execution time: 0.1080
DEBUG - 2021-08-11 14:16:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:16:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:16:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:16:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:16:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:16:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:16:28 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:16:28 --> Total execution time: 0.0721
DEBUG - 2021-08-11 14:16:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:16:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:16:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:16:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:16:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:16:43 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:16:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:16:43 --> Total execution time: 0.0897
DEBUG - 2021-08-11 14:16:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:16:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:16:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:16:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:16:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:16:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:16:58 --> 0.0006 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:16:58 --> Total execution time: 0.0685
DEBUG - 2021-08-11 14:17:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:17:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:17:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:17:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:17:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:17:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:17:13 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:17:13 --> Total execution time: 0.0846
DEBUG - 2021-08-11 14:17:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:17:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:17:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:17:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:17:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:17:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:17:28 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:17:28 --> Total execution time: 0.0854
DEBUG - 2021-08-11 14:17:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:17:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:17:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:17:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:17:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:17:43 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:17:43 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:17:43 --> Total execution time: 0.0800
DEBUG - 2021-08-11 14:17:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:17:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:17:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:17:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:17:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:17:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:17:58 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:17:58 --> Total execution time: 0.0883
DEBUG - 2021-08-11 14:18:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:18:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:18:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:18:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:18:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:18:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:18:14 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:18:14 --> Total execution time: 0.1012
DEBUG - 2021-08-11 14:18:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:18:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:18:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:18:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:18:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:18:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:18:29 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:18:29 --> Total execution time: 0.0862
DEBUG - 2021-08-11 14:18:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:18:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:18:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:18:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:18:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:18:44 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:18:44 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:18:44 --> Total execution time: 0.0866
DEBUG - 2021-08-11 14:18:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:18:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:18:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:18:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:18:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:18:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:18:58 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:18:58 --> Total execution time: 0.0893
DEBUG - 2021-08-11 14:19:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:19:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:19:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:19:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:19:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:19:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:19:14 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:19:14 --> Total execution time: 0.0695
DEBUG - 2021-08-11 14:19:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:19:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:19:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:19:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:19:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:19:29 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:19:29 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:19:29 --> Total execution time: 0.0630
DEBUG - 2021-08-11 14:19:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:19:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:19:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:19:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:19:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:19:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:19:44 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:19:44 --> Total execution time: 0.0702
DEBUG - 2021-08-11 14:19:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:19:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:19:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:19:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:19:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:19:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:19:59 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:19:59 --> Total execution time: 0.0635
DEBUG - 2021-08-11 14:20:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:20:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:20:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:20:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:20:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:20:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:20:14 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:20:14 --> Total execution time: 0.0674
DEBUG - 2021-08-11 14:20:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:20:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:20:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:20:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:20:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:20:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:20:29 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:20:29 --> Total execution time: 0.0826
DEBUG - 2021-08-11 14:20:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:20:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:20:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:20:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:20:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:20:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:20:44 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:20:44 --> Total execution time: 0.0626
DEBUG - 2021-08-11 14:20:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:20:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:20:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:20:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:20:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:20:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:20:59 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:20:59 --> Total execution time: 0.0637
DEBUG - 2021-08-11 14:21:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:21:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:21:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:21:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:21:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:21:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:21:14 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:21:14 --> Total execution time: 0.0705
DEBUG - 2021-08-11 14:21:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:21:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:21:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:21:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:21:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:21:29 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:21:29 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:21:29 --> Total execution time: 0.0683
DEBUG - 2021-08-11 14:21:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:21:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:21:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:21:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:21:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:21:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:21:44 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:21:44 --> Total execution time: 0.0740
DEBUG - 2021-08-11 14:21:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:21:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:21:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:21:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:21:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:21:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:21:59 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:21:59 --> Total execution time: 0.0885
DEBUG - 2021-08-11 14:22:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:22:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:22:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:22:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:22:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:22:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:22:14 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:22:14 --> Total execution time: 0.0816
DEBUG - 2021-08-11 14:22:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:22:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:22:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:22:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:22:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:22:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:22:29 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:22:29 --> Total execution time: 0.0689
DEBUG - 2021-08-11 14:22:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:22:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:22:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:22:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:22:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:22:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:22:44 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:22:44 --> Total execution time: 0.0780
DEBUG - 2021-08-11 14:22:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:22:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:22:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:22:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:22:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:22:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:22:59 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:22:59 --> Total execution time: 0.0763
DEBUG - 2021-08-11 14:23:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:23:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:23:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:23:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:23:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:23:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:23:14 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:23:14 --> Total execution time: 0.0804
DEBUG - 2021-08-11 14:23:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:23:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:23:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:23:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:23:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:23:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:23:29 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:23:29 --> Total execution time: 0.0828
DEBUG - 2021-08-11 14:23:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:23:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:23:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:23:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:23:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:23:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:23:44 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:23:44 --> Total execution time: 0.0780
DEBUG - 2021-08-11 14:23:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:23:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:23:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:23:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:23:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:23:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:23:59 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:23:59 --> Total execution time: 0.0895
DEBUG - 2021-08-11 14:24:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:24:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:24:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:24:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:24:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:24:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:24:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:24:16 --> Total execution time: 0.0729
DEBUG - 2021-08-11 14:25:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:25:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:25:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:25:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:25:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:25:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:25:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:25:16 --> Total execution time: 0.0852
DEBUG - 2021-08-11 14:26:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:26:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:26:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:26:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:26:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:26:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:26:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:26:16 --> Total execution time: 0.0774
DEBUG - 2021-08-11 14:27:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:27:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:27:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:27:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:27:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:27:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:27:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:27:16 --> Total execution time: 0.0698
DEBUG - 2021-08-11 14:28:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:28:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:28:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:28:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:28:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:28:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:28:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:28:16 --> Total execution time: 0.0733
DEBUG - 2021-08-11 14:29:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:29:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:29:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:29:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:29:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:29:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:29:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:29:16 --> Total execution time: 0.0896
DEBUG - 2021-08-11 14:30:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:30:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:30:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:30:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:30:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:30:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:30:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:30:16 --> Total execution time: 0.0765
DEBUG - 2021-08-11 14:31:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:31:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:31:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:31:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:31:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:31:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:31:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:31:16 --> Total execution time: 0.0772
DEBUG - 2021-08-11 14:32:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:32:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:32:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:32:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:32:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:32:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:32:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:32:16 --> Total execution time: 0.0877
DEBUG - 2021-08-11 14:32:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:32:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:32:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:32:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:32:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:32:42 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:32:42 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:32:42 --> Total execution time: 0.1116
DEBUG - 2021-08-11 14:32:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:32:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:32:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:32:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:32:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:32:43 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:32:43 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:32:43 --> Total execution time: 0.0826
DEBUG - 2021-08-11 14:32:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:32:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:32:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:32:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:32:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:32:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:32:58 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:32:58 --> Total execution time: 0.0809
DEBUG - 2021-08-11 14:33:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:33:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:33:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:33:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:33:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:33:14 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:33:14 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:33:14 --> Total execution time: 0.0686
DEBUG - 2021-08-11 14:33:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:33:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:33:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:33:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:33:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:33:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:33:29 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:33:29 --> Total execution time: 0.0717
DEBUG - 2021-08-11 14:33:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:33:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:33:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:33:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:33:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:33:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:33:44 --> 0.0012 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:33:44 --> Total execution time: 0.0672
DEBUG - 2021-08-11 14:33:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:33:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:33:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:33:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:33:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:33:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:33:59 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:33:59 --> Total execution time: 0.0804
DEBUG - 2021-08-11 14:34:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:34:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:34:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:34:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:34:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:34:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:34:14 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:34:14 --> Total execution time: 0.0825
DEBUG - 2021-08-11 14:34:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:34:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:34:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:34:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:34:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:34:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:34:29 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:34:29 --> Total execution time: 0.0862
DEBUG - 2021-08-11 14:34:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:34:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:34:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:34:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:34:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:34:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:34:44 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:34:44 --> Total execution time: 0.0823
DEBUG - 2021-08-11 14:34:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:34:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:34:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:34:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:34:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:34:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:34:59 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:34:59 --> Total execution time: 0.0738
DEBUG - 2021-08-11 14:35:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:35:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:35:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:35:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:35:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:35:15 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:35:15 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:35:15 --> Total execution time: 1.3578
DEBUG - 2021-08-11 14:35:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:35:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:35:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:35:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:35:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:35:29 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:35:29 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:35:29 --> Total execution time: 0.0904
DEBUG - 2021-08-11 14:35:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:35:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:35:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:35:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:35:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:35:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:35:44 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:35:44 --> Total execution time: 0.0761
DEBUG - 2021-08-11 14:35:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:35:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:35:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:35:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:35:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:35:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:35:59 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:35:59 --> Total execution time: 0.0798
DEBUG - 2021-08-11 14:36:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:36:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:36:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:36:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:36:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:36:14 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:36:14 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:36:14 --> Total execution time: 0.0720
DEBUG - 2021-08-11 14:36:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:36:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:36:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:36:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:36:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:36:29 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:36:29 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:36:29 --> Total execution time: 0.0657
DEBUG - 2021-08-11 14:36:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:36:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:36:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:36:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:36:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:36:44 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:36:44 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:36:44 --> Total execution time: 0.0593
DEBUG - 2021-08-11 14:36:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:36:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:36:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:36:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:36:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:36:59 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:36:59 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:36:59 --> Total execution time: 0.0925
DEBUG - 2021-08-11 14:37:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:37:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:37:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:37:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:37:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:37:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:37:14 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:37:14 --> Total execution time: 0.0735
DEBUG - 2021-08-11 14:37:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:37:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:37:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:37:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:37:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:37:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:37:29 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:37:29 --> Total execution time: 0.0803
DEBUG - 2021-08-11 14:37:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:37:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:37:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:37:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:37:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:37:44 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:37:44 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:37:44 --> Total execution time: 0.0762
DEBUG - 2021-08-11 14:37:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:37:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:37:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:37:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:37:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:37:59 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:37:59 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:37:59 --> Total execution time: 0.3397
DEBUG - 2021-08-11 14:38:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:38:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:38:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:38:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:38:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:38:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:38:14 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:38:14 --> Total execution time: 0.0768
DEBUG - 2021-08-11 14:38:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:38:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:38:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:38:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:38:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:38:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:38:29 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:38:29 --> Total execution time: 0.0686
DEBUG - 2021-08-11 14:38:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:38:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:38:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:38:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:38:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:38:44 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:38:44 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:38:44 --> Total execution time: 0.0871
DEBUG - 2021-08-11 14:38:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:38:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:38:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:38:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:38:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:38:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:38:59 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:38:59 --> Total execution time: 0.0760
DEBUG - 2021-08-11 14:39:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:39:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:39:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:39:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:39:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:39:14 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:39:14 --> 0.0006 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:39:14 --> Total execution time: 0.1773
DEBUG - 2021-08-11 14:39:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:39:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:39:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:39:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:39:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:39:29 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:39:29 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:39:29 --> Total execution time: 0.0865
DEBUG - 2021-08-11 14:39:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:39:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:39:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:39:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:39:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:39:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:39:44 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:39:44 --> Total execution time: 0.0740
DEBUG - 2021-08-11 14:39:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:39:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:39:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:39:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:39:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:39:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:39:59 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:39:59 --> Total execution time: 0.0889
DEBUG - 2021-08-11 14:40:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:40:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:40:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:40:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:40:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:40:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:40:14 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:40:14 --> Total execution time: 0.0756
DEBUG - 2021-08-11 14:40:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:40:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:40:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:40:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:40:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:40:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:40:29 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:40:29 --> Total execution time: 0.0835
DEBUG - 2021-08-11 14:40:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:40:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:40:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:40:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:40:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:40:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:40:44 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:40:44 --> Total execution time: 0.0769
DEBUG - 2021-08-11 14:40:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:40:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:40:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:40:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:40:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:40:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:40:59 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:40:59 --> Total execution time: 0.0741
DEBUG - 2021-08-11 14:41:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:41:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:41:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:41:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:41:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:41:14 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:41:14 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:41:14 --> Total execution time: 0.0688
DEBUG - 2021-08-11 14:41:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:41:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:41:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:41:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:41:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:41:29 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:41:29 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:41:29 --> Total execution time: 0.0766
DEBUG - 2021-08-11 14:41:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:41:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:41:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:41:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:41:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:41:44 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:41:44 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:41:44 --> Total execution time: 0.0902
DEBUG - 2021-08-11 14:41:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:41:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:41:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:41:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:41:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:41:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:41:59 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:41:59 --> Total execution time: 0.0897
DEBUG - 2021-08-11 14:42:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:42:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:42:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:42:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:42:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:42:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:42:14 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:42:14 --> Total execution time: 0.0688
DEBUG - 2021-08-11 14:42:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:42:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:42:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:42:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:42:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:42:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:42:29 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:42:29 --> Total execution time: 0.1616
DEBUG - 2021-08-11 14:42:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:42:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:42:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:42:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:42:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:42:44 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:42:44 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:42:44 --> Total execution time: 0.0698
DEBUG - 2021-08-11 14:42:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:42:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:42:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:42:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:42:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:42:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:42:59 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:42:59 --> Total execution time: 0.0931
DEBUG - 2021-08-11 14:43:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:43:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:43:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:43:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:43:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:43:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:43:14 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:43:14 --> Total execution time: 0.0893
DEBUG - 2021-08-11 14:43:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:43:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:43:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:43:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:43:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:43:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:43:29 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:43:29 --> Total execution time: 0.0735
DEBUG - 2021-08-11 14:43:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:43:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:43:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:43:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:43:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:43:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:43:44 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:43:44 --> Total execution time: 0.0962
DEBUG - 2021-08-11 14:43:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:43:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:43:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:43:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:43:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:43:59 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:43:59 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:43:59 --> Total execution time: 0.0847
DEBUG - 2021-08-11 14:44:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:44:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:44:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:44:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:44:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:44:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:44:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:44:16 --> Total execution time: 0.1071
DEBUG - 2021-08-11 14:45:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:45:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:45:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:45:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:45:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:45:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:45:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:45:16 --> Total execution time: 0.0671
DEBUG - 2021-08-11 14:46:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:46:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:46:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:46:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:46:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:46:16 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:46:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:46:16 --> Total execution time: 0.0700
DEBUG - 2021-08-11 14:47:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:47:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:47:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:47:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:47:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:47:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:47:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:47:16 --> Total execution time: 0.0671
DEBUG - 2021-08-11 14:47:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:47:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:47:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:47:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:47:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:47:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:47:41 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:47:41 --> Total execution time: 0.0927
DEBUG - 2021-08-11 14:47:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:47:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:47:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:47:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:47:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:47:44 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:47:44 --> 0.0011 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:47:44 --> Total execution time: 0.0956
DEBUG - 2021-08-11 14:47:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:47:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:47:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:47:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:47:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:47:59 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:47:59 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:47:59 --> Total execution time: 0.0605
DEBUG - 2021-08-11 14:48:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:48:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:48:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:48:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:48:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:48:13 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:48:13 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:48:13 --> Total execution time: 0.0890
DEBUG - 2021-08-11 14:48:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:48:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:48:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:48:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:48:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:48:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:48:29 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:48:29 --> Total execution time: 0.0792
DEBUG - 2021-08-11 14:48:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:48:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:48:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:48:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:48:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:48:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:48:44 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:48:44 --> Total execution time: 0.0675
DEBUG - 2021-08-11 14:48:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:48:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:48:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:48:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:48:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:48:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:48:59 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:48:59 --> Total execution time: 0.0854
DEBUG - 2021-08-11 14:49:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:49:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:49:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:49:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:49:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:49:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:49:14 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:49:14 --> Total execution time: 0.0741
DEBUG - 2021-08-11 14:49:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:49:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:49:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:49:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:49:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:49:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:49:29 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:49:29 --> Total execution time: 0.0877
DEBUG - 2021-08-11 14:49:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:49:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:49:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:49:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:49:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:49:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:49:44 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:49:44 --> Total execution time: 0.0855
DEBUG - 2021-08-11 14:49:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:49:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:49:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:49:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:49:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:49:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:49:59 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:49:59 --> Total execution time: 0.0859
DEBUG - 2021-08-11 14:50:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:50:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:50:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:50:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:50:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:50:14 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:50:14 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:50:14 --> Total execution time: 0.0748
DEBUG - 2021-08-11 14:50:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:50:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:50:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:50:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:50:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:50:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:50:29 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:50:29 --> Total execution time: 0.0822
DEBUG - 2021-08-11 14:50:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:50:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:50:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:50:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:50:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:50:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:50:44 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:50:44 --> Total execution time: 0.0860
DEBUG - 2021-08-11 14:50:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:50:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:50:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:50:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:50:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:50:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:50:59 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:50:59 --> Total execution time: 0.0810
DEBUG - 2021-08-11 14:51:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:51:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:51:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:51:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:51:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:51:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:51:14 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:51:14 --> Total execution time: 0.0734
DEBUG - 2021-08-11 14:51:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:51:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:51:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:51:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:51:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:51:29 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:51:29 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:51:29 --> Total execution time: 0.0749
DEBUG - 2021-08-11 14:51:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:51:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:51:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:51:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:51:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:51:44 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:51:44 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:51:44 --> Total execution time: 0.0818
DEBUG - 2021-08-11 14:51:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:51:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:51:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:51:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:51:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:51:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:51:59 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:51:59 --> Total execution time: 0.0803
DEBUG - 2021-08-11 14:52:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:52:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:52:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:52:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:52:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:52:14 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:52:14 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:52:14 --> Total execution time: 0.0822
DEBUG - 2021-08-11 14:52:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:52:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:52:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:52:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:52:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:52:29 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:52:29 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:52:29 --> Total execution time: 0.0742
DEBUG - 2021-08-11 14:52:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:52:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:52:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:52:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:52:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:52:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:52:44 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:52:44 --> Total execution time: 0.0716
DEBUG - 2021-08-11 14:52:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:52:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:52:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:52:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:52:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:52:59 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:52:59 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:52:59 --> Total execution time: 0.0657
DEBUG - 2021-08-11 14:53:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:53:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:53:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:53:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:53:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:53:14 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:53:14 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:53:14 --> Total execution time: 0.0714
DEBUG - 2021-08-11 14:53:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:53:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:53:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:53:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:53:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:53:29 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:53:29 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:53:29 --> Total execution time: 0.0714
DEBUG - 2021-08-11 14:53:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:53:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:53:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:53:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:53:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:53:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:53:44 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:53:44 --> Total execution time: 0.0733
DEBUG - 2021-08-11 14:53:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:53:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:53:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:53:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:53:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:53:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:53:59 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:53:59 --> Total execution time: 0.0729
DEBUG - 2021-08-11 14:54:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:54:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:54:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:54:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:54:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:54:14 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:54:14 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:54:14 --> Total execution time: 0.0931
DEBUG - 2021-08-11 14:54:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:54:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:54:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:54:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:54:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:54:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:54:29 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:54:29 --> Total execution time: 0.0830
DEBUG - 2021-08-11 14:54:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:54:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:54:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:54:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:54:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:54:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:54:44 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:54:44 --> Total execution time: 0.0767
DEBUG - 2021-08-11 14:54:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:54:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:54:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:54:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:54:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:54:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:54:59 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:54:59 --> Total execution time: 0.0973
DEBUG - 2021-08-11 14:55:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:55:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:55:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:55:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:55:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:55:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:55:14 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:55:14 --> Total execution time: 0.0691
DEBUG - 2021-08-11 14:56:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:56:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:56:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:56:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:56:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:56:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:56:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:56:16 --> Total execution time: 0.0720
DEBUG - 2021-08-11 14:57:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:57:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:57:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:57:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:57:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:57:16 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:57:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:57:16 --> Total execution time: 0.1035
DEBUG - 2021-08-11 14:58:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:58:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:58:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:58:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:58:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:58:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:58:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:58:16 --> Total execution time: 0.0872
DEBUG - 2021-08-11 14:59:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 14:59:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 14:59:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 14:59:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 14:59:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 14:59:16 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 14:59:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 14:59:16 --> Total execution time: 0.0793
DEBUG - 2021-08-11 15:00:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:00:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:00:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:00:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:00:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:00:16 --> 0.001 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:00:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:00:16 --> Total execution time: 0.0703
DEBUG - 2021-08-11 15:01:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:01:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:01:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:01:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:01:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:01:16 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:01:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:01:16 --> Total execution time: 0.0811
DEBUG - 2021-08-11 15:02:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:02:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:02:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:02:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:02:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:02:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:02:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:02:16 --> Total execution time: 0.0809
DEBUG - 2021-08-11 15:03:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:03:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:03:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:03:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:03:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:03:16 --> 0.0009 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:03:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:03:16 --> Total execution time: 0.0808
DEBUG - 2021-08-11 15:04:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:04:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:04:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:04:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:04:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:04:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:04:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:04:16 --> Total execution time: 0.0762
DEBUG - 2021-08-11 15:05:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:05:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:05:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:05:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:05:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:05:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:05:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:05:16 --> Total execution time: 0.0842
DEBUG - 2021-08-11 15:06:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:06:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:06:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:06:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:06:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:06:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:06:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:06:16 --> Total execution time: 0.0832
DEBUG - 2021-08-11 15:07:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:07:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:07:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:07:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:07:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:07:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:07:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:07:16 --> Total execution time: 0.0750
DEBUG - 2021-08-11 15:08:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:08:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:08:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:08:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:08:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:08:16 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:08:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:08:16 --> Total execution time: 0.0689
DEBUG - 2021-08-11 15:09:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:09:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:09:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:09:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:09:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:09:16 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:09:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:09:16 --> Total execution time: 0.0684
DEBUG - 2021-08-11 15:10:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:10:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:10:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:10:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:10:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:10:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:10:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:10:16 --> Total execution time: 0.0661
DEBUG - 2021-08-11 15:11:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:11:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:11:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:11:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:11:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:11:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:11:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:11:16 --> Total execution time: 0.0701
DEBUG - 2021-08-11 15:12:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:12:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:12:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:12:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:12:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:12:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:12:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:12:16 --> Total execution time: 0.0789
DEBUG - 2021-08-11 15:13:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:13:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:13:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:13:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:13:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:13:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:13:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:13:16 --> Total execution time: 0.0832
DEBUG - 2021-08-11 15:14:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:14:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:14:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:14:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:14:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:14:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:14:16 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:14:16 --> Total execution time: 0.0693
DEBUG - 2021-08-11 15:15:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:15:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:15:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:15:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:15:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:15:16 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:15:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:15:16 --> Total execution time: 0.0713
DEBUG - 2021-08-11 15:16:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:16:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:16:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:16:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:16:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:16:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:16:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:16:16 --> Total execution time: 0.0681
DEBUG - 2021-08-11 15:17:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:17:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:17:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:17:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:17:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:17:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:17:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:17:16 --> Total execution time: 0.0841
DEBUG - 2021-08-11 15:18:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:18:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:18:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:18:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:18:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:18:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:18:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:18:16 --> Total execution time: 0.0732
DEBUG - 2021-08-11 15:18:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:18:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:18:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:18:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:18:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:18:34 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:18:34 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:18:34 --> Total execution time: 0.1380
DEBUG - 2021-08-11 15:18:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:18:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:18:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:18:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:18:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:18:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:18:44 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:18:44 --> Total execution time: 0.0658
DEBUG - 2021-08-11 15:18:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:18:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:18:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:18:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:18:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:18:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:18:59 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:18:59 --> Total execution time: 0.0784
DEBUG - 2021-08-11 15:19:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:19:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:19:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:19:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:19:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:19:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:19:14 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:19:14 --> Total execution time: 0.0662
DEBUG - 2021-08-11 15:19:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:19:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:19:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:19:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:19:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:19:29 --> 0.0104 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:19:29 --> 0.0084 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:19:29 --> Total execution time: 0.1529
DEBUG - 2021-08-11 15:19:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:19:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:19:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:19:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:19:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:19:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:19:44 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:19:44 --> Total execution time: 0.0679
DEBUG - 2021-08-11 15:19:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:19:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:19:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:19:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:19:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:19:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:19:59 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:19:59 --> Total execution time: 0.0853
DEBUG - 2021-08-11 15:20:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:20:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:20:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:20:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:20:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:20:14 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:20:14 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:20:14 --> Total execution time: 0.0858
DEBUG - 2021-08-11 15:20:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:20:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:20:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:20:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:20:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:20:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:20:29 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:20:29 --> Total execution time: 0.0842
DEBUG - 2021-08-11 15:20:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:20:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:20:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:20:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:20:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:20:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:20:44 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:20:44 --> Total execution time: 0.0852
DEBUG - 2021-08-11 15:20:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:20:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:20:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:20:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:20:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:20:59 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:20:59 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:20:59 --> Total execution time: 0.0781
DEBUG - 2021-08-11 15:21:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:21:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:21:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:21:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:21:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:21:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:21:14 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:21:14 --> Total execution time: 0.0820
DEBUG - 2021-08-11 15:21:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:21:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:21:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:21:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:21:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:21:29 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:21:29 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:21:29 --> Total execution time: 0.0737
DEBUG - 2021-08-11 15:21:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:21:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:21:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:21:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:21:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:21:44 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:21:44 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:21:44 --> Total execution time: 0.0709
DEBUG - 2021-08-11 15:21:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:21:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:21:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:21:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:21:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:21:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:21:59 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:21:59 --> Total execution time: 0.0849
DEBUG - 2021-08-11 15:22:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:22:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:22:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:22:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:22:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:22:14 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:22:14 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:22:14 --> Total execution time: 0.1202
DEBUG - 2021-08-11 15:22:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:22:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:22:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:22:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:22:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:22:29 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:22:29 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:22:29 --> Total execution time: 0.0759
DEBUG - 2021-08-11 15:22:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:22:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:22:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:22:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:22:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:22:44 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:22:44 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:22:44 --> Total execution time: 0.0771
DEBUG - 2021-08-11 15:22:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:22:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:22:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:22:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:22:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:22:59 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:22:59 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:22:59 --> Total execution time: 0.0712
DEBUG - 2021-08-11 15:23:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:23:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:23:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:23:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:23:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:23:14 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:23:14 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:23:14 --> Total execution time: 0.0908
DEBUG - 2021-08-11 15:23:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:23:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:23:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:23:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:23:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:23:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:23:29 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:23:29 --> Total execution time: 0.0869
DEBUG - 2021-08-11 15:23:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:23:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:23:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:23:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:23:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:23:44 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:23:44 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:23:44 --> Total execution time: 0.0899
DEBUG - 2021-08-11 15:23:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:23:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:23:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:23:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:23:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:23:59 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:23:59 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:23:59 --> Total execution time: 0.0769
DEBUG - 2021-08-11 15:24:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:24:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:24:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:24:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:24:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:24:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:24:14 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:24:14 --> Total execution time: 0.0976
DEBUG - 2021-08-11 15:24:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:24:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:24:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:24:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:24:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:24:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:24:29 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:24:29 --> Total execution time: 0.0788
DEBUG - 2021-08-11 15:24:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:24:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:24:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:24:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:24:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:24:44 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:24:44 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:24:44 --> Total execution time: 0.0809
DEBUG - 2021-08-11 15:24:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:24:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:24:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:24:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:24:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:24:59 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:24:59 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:24:59 --> Total execution time: 0.0839
DEBUG - 2021-08-11 15:25:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:25:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:25:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:25:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:25:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:25:14 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:25:14 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:25:14 --> Total execution time: 0.0775
DEBUG - 2021-08-11 15:25:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:25:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:25:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:25:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:25:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:25:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:25:29 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:25:29 --> Total execution time: 0.0777
DEBUG - 2021-08-11 15:25:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:25:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:25:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:25:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:25:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:25:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:25:44 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:25:44 --> Total execution time: 0.0692
DEBUG - 2021-08-11 15:25:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:25:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:25:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:25:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:25:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:25:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:25:59 --> 0.0007 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:25:59 --> Total execution time: 0.0722
DEBUG - 2021-08-11 15:26:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:26:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:26:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:26:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:26:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:26:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:26:14 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:26:14 --> Total execution time: 0.0804
DEBUG - 2021-08-11 15:26:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:26:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:26:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:26:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:26:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:26:29 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:26:29 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:26:29 --> Total execution time: 0.0740
DEBUG - 2021-08-11 15:26:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:26:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:26:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:26:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:26:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:26:44 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:26:44 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:26:44 --> Total execution time: 0.0976
DEBUG - 2021-08-11 15:26:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:26:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:26:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:26:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:26:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:26:59 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:26:59 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:26:59 --> Total execution time: 0.0798
DEBUG - 2021-08-11 15:27:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:27:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:27:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:27:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:27:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:27:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:27:14 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:27:14 --> Total execution time: 0.0880
DEBUG - 2021-08-11 15:27:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:27:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:27:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:27:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:27:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:27:29 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:27:29 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:27:29 --> Total execution time: 0.0821
DEBUG - 2021-08-11 15:28:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:28:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:28:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:28:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:28:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:28:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:28:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:28:16 --> Total execution time: 0.0763
DEBUG - 2021-08-11 15:29:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:29:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:29:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:29:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:29:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:29:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:29:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:29:16 --> Total execution time: 0.0871
DEBUG - 2021-08-11 15:30:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:30:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:30:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:30:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:30:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:30:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:30:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:30:16 --> Total execution time: 0.0776
DEBUG - 2021-08-11 15:31:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:31:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:31:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:31:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:31:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:31:16 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:31:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:31:16 --> Total execution time: 0.0751
DEBUG - 2021-08-11 15:32:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:32:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:32:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:32:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:32:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:32:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:32:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:32:16 --> Total execution time: 0.0713
DEBUG - 2021-08-11 15:33:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:33:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:33:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:33:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:33:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:33:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:33:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:33:16 --> Total execution time: 0.0809
DEBUG - 2021-08-11 15:34:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:34:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:34:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:34:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:34:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:34:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:34:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:34:16 --> Total execution time: 0.0755
DEBUG - 2021-08-11 15:35:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:35:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:35:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:35:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:35:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:35:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:35:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:35:16 --> Total execution time: 0.0847
DEBUG - 2021-08-11 15:36:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:36:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:36:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:36:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:36:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:36:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:36:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:36:16 --> Total execution time: 0.0712
DEBUG - 2021-08-11 15:37:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:37:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:37:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:37:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:37:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:37:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:37:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:37:16 --> Total execution time: 0.0764
DEBUG - 2021-08-11 15:38:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:38:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:38:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:38:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:38:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:38:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:38:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:38:16 --> Total execution time: 0.0654
DEBUG - 2021-08-11 15:39:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:39:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:39:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:39:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:39:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:39:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:39:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:39:16 --> Total execution time: 0.0633
DEBUG - 2021-08-11 15:40:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:40:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:40:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:40:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:40:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:40:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:40:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:40:16 --> Total execution time: 0.0731
DEBUG - 2021-08-11 15:41:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:41:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:41:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:41:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:41:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:41:16 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:41:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:41:16 --> Total execution time: 0.0701
DEBUG - 2021-08-11 15:42:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:42:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:42:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:42:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:42:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:42:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:42:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:42:16 --> Total execution time: 0.0667
DEBUG - 2021-08-11 15:43:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:43:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:43:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:43:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:43:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:43:16 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:43:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:43:16 --> Total execution time: 0.0828
DEBUG - 2021-08-11 15:44:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:44:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:44:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:44:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:44:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:44:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:44:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:44:16 --> Total execution time: 0.0722
DEBUG - 2021-08-11 15:45:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:45:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:45:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:45:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:45:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:45:16 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:45:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:45:16 --> Total execution time: 0.0823
DEBUG - 2021-08-11 15:46:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:46:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:46:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:46:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:46:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:46:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:46:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:46:16 --> Total execution time: 0.0591
DEBUG - 2021-08-11 15:47:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:47:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:47:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:47:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:47:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:47:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:47:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:47:16 --> Total execution time: 0.0816
DEBUG - 2021-08-11 15:48:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:48:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:48:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:48:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:48:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:48:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:48:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:48:16 --> Total execution time: 0.0762
DEBUG - 2021-08-11 15:49:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:49:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:49:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:49:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:49:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:49:16 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:49:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:49:16 --> Total execution time: 0.0828
DEBUG - 2021-08-11 15:50:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:50:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:50:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:50:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:50:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:50:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:50:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:50:16 --> Total execution time: 0.0768
DEBUG - 2021-08-11 15:51:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:51:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:51:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:51:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:51:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:51:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:51:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:51:16 --> Total execution time: 0.0797
DEBUG - 2021-08-11 15:52:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:52:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:52:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:52:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:52:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:52:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:52:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:52:16 --> Total execution time: 0.0752
DEBUG - 2021-08-11 15:53:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:53:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:53:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:53:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:53:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:53:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:53:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:53:16 --> Total execution time: 0.0693
DEBUG - 2021-08-11 15:54:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:54:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:54:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:54:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:54:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:54:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:54:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:54:16 --> Total execution time: 0.0738
DEBUG - 2021-08-11 15:55:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:55:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:55:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:55:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:55:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:55:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:55:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:55:16 --> Total execution time: 0.0621
DEBUG - 2021-08-11 15:56:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:56:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:56:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:56:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:56:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:56:16 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:56:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:56:16 --> Total execution time: 0.0791
DEBUG - 2021-08-11 15:57:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:57:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:57:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:57:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:57:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:57:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:57:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:57:16 --> Total execution time: 0.0701
DEBUG - 2021-08-11 15:58:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:58:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:58:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:58:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:58:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:58:16 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:58:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:58:16 --> Total execution time: 0.0751
DEBUG - 2021-08-11 15:59:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 15:59:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 15:59:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 15:59:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 15:59:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 15:59:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 15:59:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 15:59:16 --> Total execution time: 0.0757
DEBUG - 2021-08-11 16:00:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 16:00:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 16:00:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 16:00:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 16:00:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 16:00:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 16:00:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 16:00:16 --> Total execution time: 0.0723
DEBUG - 2021-08-11 16:41:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 16:41:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 16:41:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 16:41:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 16:41:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 16:41:31 --> 0.0775 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 16:41:31 --> 0.0372 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 16:41:31 --> Total execution time: 0.4598
DEBUG - 2021-08-11 16:42:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 16:42:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 16:42:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 16:42:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 16:42:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 16:42:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 16:42:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 16:42:16 --> Total execution time: 0.0916
DEBUG - 2021-08-11 16:43:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 16:43:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 16:43:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 16:43:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 16:43:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 16:43:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 16:43:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 16:43:16 --> Total execution time: 0.0658
DEBUG - 2021-08-11 16:44:19 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 16:44:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 16:44:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 16:44:19 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 16:44:19 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 16:44:19 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 16:44:19 --> 0.0018 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 16:44:19 --> Total execution time: 0.0883
DEBUG - 2021-08-11 16:44:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 16:44:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 16:44:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 16:44:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 16:44:30 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 16:44:30 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 16:44:30 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 16:44:30 --> Total execution time: 0.0721
DEBUG - 2021-08-11 16:44:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 16:44:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 16:44:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 16:44:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 16:44:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 16:44:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 16:44:44 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 16:44:44 --> Total execution time: 0.0805
DEBUG - 2021-08-11 16:44:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 16:44:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 16:44:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 16:44:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 16:44:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 16:44:59 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 16:44:59 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 16:44:59 --> Total execution time: 0.0791
DEBUG - 2021-08-11 16:45:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 16:45:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 16:45:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 16:45:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 16:45:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 16:45:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 16:45:14 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 16:45:14 --> Total execution time: 0.0872
DEBUG - 2021-08-11 16:45:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 16:45:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 16:45:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 16:45:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 16:45:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 16:45:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 16:45:29 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 16:45:29 --> Total execution time: 0.0840
DEBUG - 2021-08-11 16:45:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 16:45:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 16:45:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 16:45:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 16:45:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 16:45:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 16:45:44 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 16:45:44 --> Total execution time: 0.0853
DEBUG - 2021-08-11 16:45:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 16:45:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 16:45:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 16:45:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 16:45:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 16:45:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 16:45:59 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 16:45:59 --> Total execution time: 0.0809
DEBUG - 2021-08-11 16:46:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 16:46:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 16:46:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 16:46:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 16:46:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 16:46:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 16:46:14 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 16:46:14 --> Total execution time: 0.0724
DEBUG - 2021-08-11 16:46:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 16:46:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 16:46:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 16:46:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 16:46:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 16:46:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 16:46:29 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 16:46:29 --> Total execution time: 0.0776
DEBUG - 2021-08-11 16:46:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 16:46:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 16:46:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 16:46:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 16:46:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 16:46:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 16:46:44 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 16:46:44 --> Total execution time: 0.0750
DEBUG - 2021-08-11 16:46:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 16:46:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 16:46:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 16:46:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 16:46:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 16:46:59 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 16:46:59 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 16:46:59 --> Total execution time: 0.0749
DEBUG - 2021-08-11 16:47:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 16:47:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 16:47:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 16:47:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 16:47:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 16:47:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 16:47:14 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 16:47:14 --> Total execution time: 0.0824
DEBUG - 2021-08-11 16:47:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 16:47:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 16:47:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 16:47:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 16:47:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 16:47:29 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 16:47:29 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 16:47:29 --> Total execution time: 0.0661
DEBUG - 2021-08-11 16:47:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 16:47:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 16:47:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 16:47:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 16:47:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 16:47:44 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 16:47:44 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 16:47:44 --> Total execution time: 0.0807
DEBUG - 2021-08-11 16:47:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 16:47:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 16:47:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 16:47:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 16:47:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 16:47:59 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 16:47:59 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 16:47:59 --> Total execution time: 0.0668
DEBUG - 2021-08-11 16:48:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 16:48:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 16:48:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 16:48:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 16:48:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 16:48:14 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 16:48:14 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 16:48:14 --> Total execution time: 0.0961
DEBUG - 2021-08-11 16:48:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 16:48:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 16:48:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 16:48:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 16:48:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 16:48:29 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 16:48:29 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 16:48:29 --> Total execution time: 0.0776
DEBUG - 2021-08-11 16:48:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 16:48:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 16:48:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 16:48:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 16:48:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 16:48:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 16:48:44 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 16:48:44 --> Total execution time: 0.0970
DEBUG - 2021-08-11 16:48:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 16:48:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 16:48:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 16:48:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 16:48:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 16:48:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 16:48:59 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 16:48:59 --> Total execution time: 0.0809
DEBUG - 2021-08-11 16:49:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 16:49:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 16:49:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 16:49:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 16:49:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 16:49:14 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 16:49:14 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 16:49:14 --> Total execution time: 0.0694
DEBUG - 2021-08-11 16:49:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 16:49:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 16:49:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 16:49:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 16:49:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 16:49:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 16:49:29 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 16:49:29 --> Total execution time: 0.0758
DEBUG - 2021-08-11 16:49:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 16:49:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 16:49:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 16:49:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 16:49:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 16:49:44 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 16:49:44 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 16:49:44 --> Total execution time: 0.0668
DEBUG - 2021-08-11 16:49:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 16:49:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 16:49:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 16:49:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 16:49:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 16:49:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 16:49:59 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 16:49:59 --> Total execution time: 0.0771
DEBUG - 2021-08-11 16:50:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 16:50:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 16:50:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 16:50:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 16:50:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 16:50:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 16:50:14 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 16:50:14 --> Total execution time: 0.0843
DEBUG - 2021-08-11 16:50:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 16:50:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 16:50:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 16:50:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 16:50:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 16:50:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 16:50:29 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 16:50:29 --> Total execution time: 0.0835
DEBUG - 2021-08-11 16:50:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 16:50:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 16:50:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 16:50:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 16:50:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 16:50:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 16:50:44 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 16:50:44 --> Total execution time: 0.0711
DEBUG - 2021-08-11 16:50:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 16:50:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 16:50:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 16:50:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 16:50:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 16:50:59 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 16:50:59 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 16:50:59 --> Total execution time: 0.0655
DEBUG - 2021-08-11 16:51:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 16:51:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 16:51:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 16:51:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 16:51:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 16:51:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 16:51:14 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 16:51:14 --> Total execution time: 0.0625
DEBUG - 2021-08-11 16:51:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 16:51:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 16:51:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 16:51:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 16:51:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 16:51:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 16:51:29 --> 0.0009 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 16:51:29 --> Total execution time: 0.1094
DEBUG - 2021-08-11 16:52:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 16:52:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 16:52:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 16:52:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 16:52:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 16:52:16 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 16:52:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 16:52:16 --> Total execution time: 0.0826
DEBUG - 2021-08-11 16:53:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 16:53:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 16:53:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 16:53:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 16:53:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 16:53:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 16:53:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 16:53:16 --> Total execution time: 0.0777
DEBUG - 2021-08-11 16:54:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 16:54:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 16:54:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 16:54:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 16:54:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 16:54:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 16:54:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 16:54:16 --> Total execution time: 0.0748
DEBUG - 2021-08-11 16:55:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 16:55:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 16:55:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 16:55:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 16:55:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 16:55:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 16:55:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 16:55:16 --> Total execution time: 0.0672
DEBUG - 2021-08-11 16:56:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 16:56:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 16:56:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 16:56:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 16:56:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 16:56:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 16:56:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 16:56:16 --> Total execution time: 0.0668
DEBUG - 2021-08-11 16:57:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 16:57:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 16:57:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 16:57:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 16:57:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 16:57:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 16:57:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 16:57:16 --> Total execution time: 0.0618
DEBUG - 2021-08-11 16:58:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 16:58:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 16:58:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 16:58:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 16:58:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 16:58:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 16:58:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 16:58:16 --> Total execution time: 0.0873
DEBUG - 2021-08-11 16:59:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 16:59:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 16:59:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 16:59:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 16:59:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 16:59:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 16:59:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 16:59:16 --> Total execution time: 0.0783
DEBUG - 2021-08-11 17:00:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:00:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:00:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:00:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:00:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:00:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:00:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:00:16 --> Total execution time: 0.0757
DEBUG - 2021-08-11 17:00:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:00:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:00:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:00:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:00:48 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:00:48 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:00:48 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:00:48 --> Total execution time: 0.0940
DEBUG - 2021-08-11 17:00:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:00:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:00:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:00:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:00:51 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:00:51 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:00:51 --> 0.1278 | INSERT INTO `csvexportlog` (`export_status`, `filter_col`, `created_datetime`) VALUES (0, 'null', '2021-08-11 17:00:51')
DEBUG - 2021-08-11 17:00:51 --> Total execution time: 0.1887
DEBUG - 2021-08-11 17:00:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:00:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:00:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:00:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:00:51 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-11 17:00:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:00:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:00:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:00:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:00:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:00:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:00:58 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:00:58 --> Total execution time: 0.0828
QUERY - 2021-08-11 17:01:05 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:01:05 --> 3.4601 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-11 17:01:05 --> 0.0476 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-11 17:01:05 --> 2.6848 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-11 17:01:05 --> 2.3327 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-11 17:01:05 --> 2.7672 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-11 17:01:05 --> 0.0478 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-11 17:01:05 --> 2.6071 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-11 17:01:05 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-11 17:01:05 --> 0.0061 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-11 17:01:05 --> 0.0011 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:01:05 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:01:05 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-11 17:01:05 --> Total execution time: 14.0351
DEBUG - 2021-08-11 17:01:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:01:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:01:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:01:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:01:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:01:21 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:01:21 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:01:21 --> Total execution time: 0.0886
DEBUG - 2021-08-11 17:01:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:01:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:01:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:01:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:01:36 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:01:36 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:01:36 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:01:36 --> Total execution time: 0.1015
DEBUG - 2021-08-11 17:01:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:01:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:01:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:01:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:01:51 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:01:51 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:01:51 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:01:51 --> Total execution time: 0.0794
DEBUG - 2021-08-11 17:02:06 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:02:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:02:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:02:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:02:06 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:02:06 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:02:06 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:02:06 --> Total execution time: 0.0790
DEBUG - 2021-08-11 17:02:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:02:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:02:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:02:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:02:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:02:21 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:02:21 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:02:21 --> Total execution time: 0.0734
DEBUG - 2021-08-11 17:02:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:02:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:02:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:02:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:02:36 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:02:36 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:02:36 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:02:36 --> Total execution time: 0.0771
DEBUG - 2021-08-11 17:02:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:02:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:02:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:02:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:02:51 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:02:51 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:02:51 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:02:51 --> Total execution time: 0.0983
DEBUG - 2021-08-11 17:03:06 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:03:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:03:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:03:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:03:06 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:03:06 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:03:06 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:03:06 --> Total execution time: 0.0789
DEBUG - 2021-08-11 17:03:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:03:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:03:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:03:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:03:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:03:21 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:03:21 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:03:21 --> Total execution time: 0.0945
DEBUG - 2021-08-11 17:03:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:03:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:03:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:03:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:03:36 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:03:36 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:03:36 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:03:36 --> Total execution time: 0.0770
DEBUG - 2021-08-11 17:03:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:03:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:03:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:03:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:03:51 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:03:51 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:03:51 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:03:51 --> Total execution time: 0.0914
DEBUG - 2021-08-11 17:04:06 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:04:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:04:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:04:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:04:06 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:04:06 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:04:06 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:04:06 --> Total execution time: 0.0757
DEBUG - 2021-08-11 17:04:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:04:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:04:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:04:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:04:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:04:21 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:04:21 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:04:21 --> Total execution time: 0.0855
DEBUG - 2021-08-11 17:04:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:04:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:04:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:04:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:04:36 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:04:36 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:04:36 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:04:36 --> Total execution time: 0.0747
DEBUG - 2021-08-11 17:04:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:04:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:04:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:04:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:04:51 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:04:51 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:04:51 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:04:51 --> Total execution time: 0.0713
DEBUG - 2021-08-11 17:05:06 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:05:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:05:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:05:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:05:06 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:05:06 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:05:06 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:05:06 --> Total execution time: 0.0789
DEBUG - 2021-08-11 17:05:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:05:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:05:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:05:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:05:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:05:21 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:05:21 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:05:21 --> Total execution time: 0.0849
DEBUG - 2021-08-11 17:05:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:05:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:05:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:05:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:05:36 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:05:36 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:05:36 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:05:36 --> Total execution time: 0.0950
DEBUG - 2021-08-11 17:05:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:05:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:05:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:05:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:05:51 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:05:51 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:05:51 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:05:51 --> Total execution time: 0.0744
DEBUG - 2021-08-11 17:06:06 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:06:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:06:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:06:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:06:06 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:06:06 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:06:06 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:06:06 --> Total execution time: 0.0642
DEBUG - 2021-08-11 17:06:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:06:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:06:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:06:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:06:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:06:21 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:06:21 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:06:21 --> Total execution time: 0.0640
DEBUG - 2021-08-11 17:06:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:06:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:06:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:06:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:06:36 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:06:36 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:06:36 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:06:36 --> Total execution time: 0.0764
DEBUG - 2021-08-11 17:07:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:07:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:07:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:07:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:07:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:07:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:07:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:07:16 --> Total execution time: 0.0704
DEBUG - 2021-08-11 17:08:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:08:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:08:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:08:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:08:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:08:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:08:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:08:16 --> Total execution time: 0.0649
DEBUG - 2021-08-11 17:09:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:09:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:09:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:09:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:09:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:09:16 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:09:16 --> 0.0006 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:09:16 --> Total execution time: 0.0812
DEBUG - 2021-08-11 17:09:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:09:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:09:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:09:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:09:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:09:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:09:44 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:09:44 --> Total execution time: 0.1152
DEBUG - 2021-08-11 17:09:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:09:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:09:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:09:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:09:51 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:09:51 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:09:51 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:09:51 --> Total execution time: 0.1036
DEBUG - 2021-08-11 17:10:06 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:10:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:10:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:10:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:10:06 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:10:06 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:10:06 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:10:06 --> Total execution time: 0.0656
DEBUG - 2021-08-11 17:10:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:10:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:10:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:10:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:10:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:10:21 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:10:21 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:10:21 --> Total execution time: 0.1068
DEBUG - 2021-08-11 17:10:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:10:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:10:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:10:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:10:36 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:10:36 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:10:36 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:10:36 --> Total execution time: 0.0891
DEBUG - 2021-08-11 17:10:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:10:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:10:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:10:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:10:51 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:10:51 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:10:51 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:10:51 --> Total execution time: 0.0736
DEBUG - 2021-08-11 17:11:06 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:11:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:11:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:11:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:11:06 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:11:06 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:11:06 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:11:06 --> Total execution time: 0.0843
DEBUG - 2021-08-11 17:11:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:11:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:11:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:11:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:11:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:11:21 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:11:21 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:11:21 --> Total execution time: 0.0809
DEBUG - 2021-08-11 17:11:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:11:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:11:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:11:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:11:36 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:11:36 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:11:36 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:11:36 --> Total execution time: 0.0824
DEBUG - 2021-08-11 17:11:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:11:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:11:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:11:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:11:51 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:11:51 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:11:51 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:11:51 --> Total execution time: 0.0876
DEBUG - 2021-08-11 17:11:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:11:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:11:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:11:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:11:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:11:53 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:11:53 --> 0.0694 | INSERT INTO `csvexportlog` (`export_status`, `filter_col`, `created_datetime`) VALUES (0, 'null', '2021-08-11 17:11:53')
DEBUG - 2021-08-11 17:11:53 --> Total execution time: 0.1440
DEBUG - 2021-08-11 17:11:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:11:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:11:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:11:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:11:53 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-11 17:12:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:12:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:12:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:12:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:12:05 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:12:05 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:12:05 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:12:05 --> Total execution time: 0.0737
QUERY - 2021-08-11 17:12:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:12:08 --> 2.9891 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-11 17:12:08 --> 0.0494 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-11 17:12:08 --> 2.5281 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-11 17:12:08 --> 2.5338 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-11 17:12:08 --> 2.6325 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-11 17:12:08 --> 0.0494 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-11 17:12:08 --> 3.4393 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-11 17:12:08 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-11 17:12:08 --> 0.0064 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-11 17:12:08 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:12:08 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:12:08 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-11 17:12:08 --> Total execution time: 14.2980
DEBUG - 2021-08-11 17:12:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:12:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:12:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:12:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:12:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:12:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:12:23 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:12:23 --> Total execution time: 0.1037
DEBUG - 2021-08-11 17:12:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:12:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:12:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:12:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:12:27 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-11 17:12:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:12:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:12:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-11 17:12:42 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:12:42 --> 2.9098 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-11 17:12:42 --> 0.0489 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-11 17:12:42 --> 2.9623 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-11 17:12:42 --> 2.5998 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-11 17:12:42 --> 3.6558 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-11 17:12:42 --> 0.0491 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-11 17:12:42 --> 2.7617 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-11 17:12:42 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-11 17:12:42 --> 0.0065 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-11 17:12:42 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:12:42 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:12:42 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-11 17:12:42 --> Total execution time: 15.0646
DEBUG - 2021-08-11 17:12:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:12:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:12:42 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:12:42 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:12:42 --> Total execution time: 3.5856
DEBUG - 2021-08-11 17:12:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:12:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:12:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:12:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:12:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:12:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:12:58 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:12:58 --> Total execution time: 0.1047
DEBUG - 2021-08-11 17:13:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:13:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:13:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:13:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:13:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:13:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:13:13 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:13:13 --> Total execution time: 0.0641
DEBUG - 2021-08-11 17:13:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:13:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:13:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:13:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:13:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:13:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:13:28 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:13:28 --> Total execution time: 0.0631
DEBUG - 2021-08-11 17:13:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:13:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:13:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:13:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:13:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:13:43 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:13:43 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:13:43 --> Total execution time: 0.0702
DEBUG - 2021-08-11 17:13:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:13:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:13:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:13:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:13:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:13:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:13:58 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:13:58 --> Total execution time: 0.0748
DEBUG - 2021-08-11 17:14:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:14:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:14:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:14:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:14:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:14:13 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:14:13 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:14:13 --> Total execution time: 0.0751
DEBUG - 2021-08-11 17:14:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:14:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:14:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:14:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:14:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:14:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:14:28 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:14:28 --> Total execution time: 0.0716
DEBUG - 2021-08-11 17:14:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:14:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:14:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:14:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:14:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:14:43 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:14:43 --> 0.0017 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:14:43 --> Total execution time: 0.0788
DEBUG - 2021-08-11 17:14:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:14:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:14:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:14:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:14:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:14:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:14:58 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:14:58 --> Total execution time: 0.0899
DEBUG - 2021-08-11 17:15:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:15:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:15:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:15:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:15:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:15:13 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:15:13 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:15:13 --> Total execution time: 0.0881
DEBUG - 2021-08-11 17:15:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:15:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:15:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:15:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:15:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:15:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:15:28 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:15:28 --> Total execution time: 0.0828
DEBUG - 2021-08-11 17:15:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:15:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:15:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:15:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:15:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:15:43 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:15:43 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:15:43 --> Total execution time: 0.0688
DEBUG - 2021-08-11 17:15:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:15:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:15:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:15:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:15:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:15:58 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:15:58 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:15:58 --> Total execution time: 0.0666
DEBUG - 2021-08-11 17:16:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:16:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:16:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:16:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:16:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:16:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:16:13 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:16:13 --> Total execution time: 0.0756
DEBUG - 2021-08-11 17:16:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:16:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:16:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:16:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:16:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:16:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:16:28 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:16:28 --> Total execution time: 0.0778
DEBUG - 2021-08-11 17:16:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:16:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:16:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:16:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:16:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:16:43 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:16:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:16:43 --> Total execution time: 0.0772
DEBUG - 2021-08-11 17:16:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:16:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:16:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:16:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:16:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:16:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:16:58 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:16:58 --> Total execution time: 0.0729
DEBUG - 2021-08-11 17:17:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:17:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:17:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:17:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:17:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:17:13 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:17:13 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:17:13 --> Total execution time: 0.0750
DEBUG - 2021-08-11 17:17:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:17:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:17:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:17:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:17:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:17:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:17:28 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:17:28 --> Total execution time: 0.0737
DEBUG - 2021-08-11 17:17:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:17:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:17:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:17:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:17:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:17:43 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:17:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:17:43 --> Total execution time: 0.0766
DEBUG - 2021-08-11 17:17:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:17:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:17:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:17:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:17:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:17:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:17:58 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:17:58 --> Total execution time: 0.0684
DEBUG - 2021-08-11 17:18:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:18:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:18:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:18:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:18:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:18:13 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:18:13 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:18:13 --> Total execution time: 0.0915
DEBUG - 2021-08-11 17:18:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:18:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:18:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:18:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:18:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:18:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:18:28 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:18:28 --> Total execution time: 0.0768
DEBUG - 2021-08-11 17:18:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:18:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:18:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:18:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:18:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:18:43 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:18:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:18:43 --> Total execution time: 0.0672
DEBUG - 2021-08-11 17:18:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:18:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:18:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:18:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:18:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:18:58 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:18:58 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:18:58 --> Total execution time: 0.0666
DEBUG - 2021-08-11 17:19:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:19:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:19:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:19:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:19:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:19:13 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:19:13 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:19:13 --> Total execution time: 0.1106
DEBUG - 2021-08-11 17:19:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:19:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:19:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:19:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:19:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:19:28 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:19:28 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:19:28 --> Total execution time: 0.0748
DEBUG - 2021-08-11 17:19:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:19:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:19:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:19:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:19:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:19:43 --> 0.0101 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:19:43 --> 0.0006 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:19:43 --> Total execution time: 0.1391
DEBUG - 2021-08-11 17:19:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:19:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:19:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:19:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:19:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:19:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:19:58 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:19:58 --> Total execution time: 0.0882
DEBUG - 2021-08-11 17:20:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:20:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:20:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:20:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:20:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:20:13 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:20:13 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:20:13 --> Total execution time: 0.0881
DEBUG - 2021-08-11 17:20:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:20:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:20:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:20:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:20:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:20:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:20:28 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:20:28 --> Total execution time: 0.0851
DEBUG - 2021-08-11 17:20:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:20:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:20:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:20:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:20:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:20:43 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:20:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:20:43 --> Total execution time: 0.5660
DEBUG - 2021-08-11 17:20:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:20:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:20:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:20:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:20:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:20:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:20:58 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:20:58 --> Total execution time: 0.0775
DEBUG - 2021-08-11 17:21:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:21:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:21:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:21:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:21:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:21:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:21:13 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:21:13 --> Total execution time: 0.0677
DEBUG - 2021-08-11 17:21:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:21:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:21:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:21:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:21:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:21:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:21:28 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:21:28 --> Total execution time: 0.0711
DEBUG - 2021-08-11 17:21:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:21:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:21:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:21:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:21:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:21:43 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:21:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:21:43 --> Total execution time: 0.0875
DEBUG - 2021-08-11 17:21:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:21:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:21:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:21:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:21:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:21:58 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:21:58 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:21:58 --> Total execution time: 0.4673
DEBUG - 2021-08-11 17:22:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:22:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:22:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:22:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:22:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:22:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:22:13 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:22:13 --> Total execution time: 0.0862
DEBUG - 2021-08-11 17:22:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:22:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:22:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:22:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:22:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:22:28 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:22:28 --> 0.0028 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:22:28 --> Total execution time: 0.0925
DEBUG - 2021-08-11 17:22:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:22:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:22:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:22:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:22:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:22:43 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:22:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:22:43 --> Total execution time: 0.2425
DEBUG - 2021-08-11 17:23:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:23:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:23:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:23:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:23:02 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:23:02 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:23:02 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:23:02 --> Total execution time: 2.6470
DEBUG - 2021-08-11 17:23:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:23:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:23:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:23:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:23:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:23:13 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:23:13 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:23:13 --> Total execution time: 0.4712
DEBUG - 2021-08-11 17:24:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:24:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:24:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:24:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:24:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:24:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:24:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:24:16 --> Total execution time: 0.0944
DEBUG - 2021-08-11 17:25:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:25:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:25:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:25:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:25:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:25:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:25:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:25:16 --> Total execution time: 0.1022
DEBUG - 2021-08-11 17:26:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:26:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:26:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:26:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:26:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:26:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:26:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:26:16 --> Total execution time: 0.0739
DEBUG - 2021-08-11 17:26:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:26:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:26:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:26:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:26:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:26:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:26:28 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:26:28 --> Total execution time: 0.0904
DEBUG - 2021-08-11 17:26:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:26:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:26:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:26:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:26:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:26:43 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:26:43 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:26:43 --> Total execution time: 0.1688
DEBUG - 2021-08-11 17:26:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:26:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:26:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:26:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:26:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:26:58 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:26:58 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:26:58 --> Total execution time: 0.0827
DEBUG - 2021-08-11 17:27:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:27:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:27:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:27:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:27:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:27:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:27:13 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:27:13 --> Total execution time: 0.0776
DEBUG - 2021-08-11 17:27:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:27:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:27:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:27:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:27:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:27:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:27:28 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:27:28 --> Total execution time: 0.0853
DEBUG - 2021-08-11 17:27:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:27:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:27:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:27:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:27:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:27:43 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:27:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:27:43 --> Total execution time: 0.0864
DEBUG - 2021-08-11 17:27:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:27:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:27:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:27:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:27:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:27:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:27:58 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:27:58 --> Total execution time: 0.0726
DEBUG - 2021-08-11 17:28:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:28:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:28:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:28:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:28:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:28:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:28:13 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:28:13 --> Total execution time: 0.0787
DEBUG - 2021-08-11 17:28:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:28:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:28:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:28:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:28:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:28:28 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:28:28 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:28:28 --> Total execution time: 0.0642
DEBUG - 2021-08-11 17:28:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:28:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:28:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:28:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:28:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:28:43 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:28:43 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:28:43 --> Total execution time: 0.0849
DEBUG - 2021-08-11 17:28:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:28:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:28:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:28:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:28:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:28:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:28:58 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:28:58 --> Total execution time: 0.1102
DEBUG - 2021-08-11 17:29:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:29:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:29:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:29:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:29:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:29:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:29:13 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:29:13 --> Total execution time: 0.0699
DEBUG - 2021-08-11 17:29:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:29:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:29:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:29:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:29:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:29:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:29:28 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:29:28 --> Total execution time: 0.0876
DEBUG - 2021-08-11 17:29:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:29:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:29:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:29:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:29:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:29:43 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:29:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:29:43 --> Total execution time: 0.0747
DEBUG - 2021-08-11 17:29:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:29:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:29:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:29:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:29:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:29:58 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:29:58 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:29:58 --> Total execution time: 0.1145
DEBUG - 2021-08-11 17:30:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:30:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:30:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:30:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:30:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:30:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:30:13 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:30:13 --> Total execution time: 0.0711
DEBUG - 2021-08-11 17:30:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:30:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:30:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:30:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:30:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:30:28 --> 0.0023 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:30:28 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:30:28 --> Total execution time: 0.1022
DEBUG - 2021-08-11 17:30:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:30:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:30:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:30:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:30:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:30:43 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:30:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:30:43 --> Total execution time: 0.0819
DEBUG - 2021-08-11 17:30:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:30:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:30:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:30:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:30:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:30:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:30:58 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:30:58 --> Total execution time: 0.0795
DEBUG - 2021-08-11 17:31:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:31:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:31:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:31:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:31:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:31:13 --> 0.0014 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:31:13 --> 0.0015 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:31:13 --> Total execution time: 0.1228
DEBUG - 2021-08-11 17:31:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:31:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:31:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:31:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:31:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:31:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:31:28 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:31:28 --> Total execution time: 0.0934
DEBUG - 2021-08-11 17:31:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:31:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:31:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:31:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:31:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:31:28 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:31:28 --> 0.1427 | INSERT INTO `csvexportlog` (`export_status`, `filter_col`, `created_datetime`) VALUES (0, 'null', '2021-08-11 17:31:28')
DEBUG - 2021-08-11 17:31:28 --> Total execution time: 0.2285
DEBUG - 2021-08-11 17:31:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:31:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:31:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:31:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:31:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:31:42 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:31:42 --> 2.7129 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-11 17:31:42 --> 0.0489 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-11 17:31:42 --> 2.8178 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-11 17:31:42 --> 2.4341 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-11 17:31:42 --> 2.8435 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-11 17:31:42 --> 0.0489 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-11 17:31:42 --> 2.5401 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-11 17:31:42 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
QUERY - 2021-08-11 17:31:42 --> 0.0249 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-11 17:31:42 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:31:42 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:31:42 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-11 17:31:42 --> Total execution time: 13.5985
DEBUG - 2021-08-11 17:31:57 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:31:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:31:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:31:57 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:31:57 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:31:57 --> 0.0012 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:31:57 --> 0.001 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:31:57 --> Total execution time: 0.1330
DEBUG - 2021-08-11 17:32:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:32:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:32:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:32:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:32:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:32:13 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:32:13 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:32:13 --> Total execution time: 0.1288
DEBUG - 2021-08-11 17:32:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:32:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:32:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:32:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:32:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:32:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:32:28 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:32:28 --> Total execution time: 0.0860
DEBUG - 2021-08-11 17:32:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:32:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:32:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:32:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:32:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:32:43 --> 0.0119 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:32:43 --> 0.0179 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:32:43 --> Total execution time: 0.1473
DEBUG - 2021-08-11 17:32:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:32:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:32:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:32:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:32:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:32:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:32:58 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:32:58 --> Total execution time: 0.0823
DEBUG - 2021-08-11 17:33:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:33:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:33:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:33:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:33:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:33:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:33:13 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:33:13 --> Total execution time: 0.0796
DEBUG - 2021-08-11 17:33:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:33:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:33:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:33:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:33:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:33:27 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:33:27 --> 0.0009 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:33:27 --> Total execution time: 0.0809
DEBUG - 2021-08-11 17:33:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:33:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:33:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:33:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:33:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:33:43 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:33:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:33:43 --> Total execution time: 0.0918
DEBUG - 2021-08-11 17:33:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:33:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:33:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:33:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:33:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:33:58 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:33:58 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:33:58 --> Total execution time: 0.1063
DEBUG - 2021-08-11 17:34:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:34:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:34:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:34:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:34:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:34:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:34:13 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:34:13 --> Total execution time: 0.0881
DEBUG - 2021-08-11 17:34:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:34:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:34:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:34:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:34:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:34:28 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:34:28 --> 0.0008 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:34:28 --> Total execution time: 0.1093
DEBUG - 2021-08-11 17:34:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:34:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:34:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:34:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:34:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:34:43 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:34:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:34:43 --> Total execution time: 0.0821
DEBUG - 2021-08-11 17:34:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:34:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:34:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:34:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:34:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:34:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:34:58 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:34:58 --> Total execution time: 0.0768
DEBUG - 2021-08-11 17:35:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:35:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:35:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:35:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:35:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:35:13 --> 0.0009 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:35:13 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:35:13 --> Total execution time: 0.1082
DEBUG - 2021-08-11 17:35:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:35:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:35:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:35:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:35:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:35:28 --> 0.0018 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:35:28 --> 0.0011 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:35:28 --> Total execution time: 0.0925
DEBUG - 2021-08-11 17:35:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:35:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:35:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:35:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:35:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:35:43 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:35:43 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:35:43 --> Total execution time: 0.0858
DEBUG - 2021-08-11 17:35:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:35:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:35:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:35:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:35:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:35:58 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:35:58 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:35:58 --> Total execution time: 0.0885
DEBUG - 2021-08-11 17:36:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:36:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:36:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:36:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:36:12 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:36:12 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:36:12 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:36:12 --> Total execution time: 0.0899
DEBUG - 2021-08-11 17:36:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:36:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:36:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:36:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:36:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:36:28 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:36:28 --> 0.0008 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:36:28 --> Total execution time: 0.1123
DEBUG - 2021-08-11 17:36:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:36:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:36:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:36:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:36:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:36:43 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:36:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:36:43 --> Total execution time: 0.0747
DEBUG - 2021-08-11 17:36:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:36:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:36:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:36:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:36:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:36:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:36:58 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:36:58 --> Total execution time: 0.0798
DEBUG - 2021-08-11 17:37:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:37:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:37:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:37:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:37:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:37:13 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:37:13 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:37:13 --> Total execution time: 0.0810
DEBUG - 2021-08-11 17:37:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:37:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:37:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:37:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:37:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:37:28 --> 0.0012 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:37:28 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:37:28 --> Total execution time: 0.1025
DEBUG - 2021-08-11 17:37:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:37:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:37:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:37:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:37:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:37:43 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:37:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:37:43 --> Total execution time: 0.0883
DEBUG - 2021-08-11 17:37:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:37:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:37:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:37:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:37:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:37:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:37:58 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:37:58 --> Total execution time: 0.0755
DEBUG - 2021-08-11 17:38:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:38:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:38:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:38:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:38:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:38:13 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:38:13 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:38:13 --> Total execution time: 0.0848
DEBUG - 2021-08-11 17:38:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:38:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:38:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:38:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:38:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:38:28 --> 0.0011 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:38:28 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:38:28 --> Total execution time: 0.0890
DEBUG - 2021-08-11 17:38:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:38:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:38:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:38:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:38:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:38:43 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:38:43 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:38:43 --> Total execution time: 0.0866
DEBUG - 2021-08-11 17:38:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:38:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:38:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:38:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:38:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:38:58 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:38:58 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:38:58 --> Total execution time: 0.0812
DEBUG - 2021-08-11 17:39:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:39:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:39:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:39:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:39:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:39:13 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:39:13 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:39:13 --> Total execution time: 0.0923
DEBUG - 2021-08-11 17:39:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:39:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:39:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:39:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:39:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:39:28 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:39:28 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:39:28 --> Total execution time: 0.0975
DEBUG - 2021-08-11 17:39:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:39:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:39:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:39:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:39:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:39:43 --> 0.003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:39:43 --> 0.0032 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:39:43 --> Total execution time: 0.1429
DEBUG - 2021-08-11 17:39:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:39:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:39:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:39:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:39:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:39:58 --> 0.0022 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:39:58 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:39:58 --> Total execution time: 0.0939
DEBUG - 2021-08-11 17:40:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:40:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:40:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:40:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:40:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:40:13 --> 0.0018 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:40:13 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:40:13 --> Total execution time: 0.0933
DEBUG - 2021-08-11 17:40:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:40:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:40:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:40:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:40:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:40:28 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:40:28 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:40:28 --> Total execution time: 0.0843
DEBUG - 2021-08-11 17:40:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:40:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:40:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:40:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:40:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:40:43 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:40:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:40:43 --> Total execution time: 0.0858
DEBUG - 2021-08-11 17:40:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:40:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:40:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:40:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:40:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:40:58 --> 0.0039 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:40:58 --> 0.0006 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:40:58 --> Total execution time: 0.1169
DEBUG - 2021-08-11 17:41:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:41:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:41:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:41:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:41:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:41:13 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:41:13 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:41:13 --> Total execution time: 0.0830
DEBUG - 2021-08-11 17:41:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:41:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:41:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:41:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:41:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:41:28 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:41:28 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:41:28 --> Total execution time: 0.0904
DEBUG - 2021-08-11 17:41:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:41:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:41:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:41:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:41:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:41:43 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:41:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:41:43 --> Total execution time: 0.0869
DEBUG - 2021-08-11 17:41:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:41:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:41:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:41:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:41:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:41:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:41:58 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:41:58 --> Total execution time: 0.0785
DEBUG - 2021-08-11 17:42:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:42:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:42:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:42:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:42:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:42:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:42:13 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:42:13 --> Total execution time: 0.0862
DEBUG - 2021-08-11 17:42:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:42:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:42:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:42:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:42:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:42:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:42:28 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:42:28 --> Total execution time: 0.0811
DEBUG - 2021-08-11 17:42:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:42:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:42:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:42:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:42:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:42:43 --> 0.0334 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:42:43 --> 0.0149 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:42:43 --> Total execution time: 0.1561
DEBUG - 2021-08-11 17:42:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:42:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:42:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:42:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:42:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:42:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:42:58 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:42:58 --> Total execution time: 0.0806
DEBUG - 2021-08-11 17:43:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:43:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:43:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:43:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:43:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:43:13 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:43:13 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:43:13 --> Total execution time: 0.0915
DEBUG - 2021-08-11 17:43:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:43:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:43:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:43:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:43:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:43:28 --> 0.0052 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:43:28 --> 0.0006 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:43:28 --> Total execution time: 0.0878
DEBUG - 2021-08-11 17:43:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:43:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:43:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:43:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:43:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:43:43 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:43:43 --> 0.0008 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:43:43 --> Total execution time: 0.0824
DEBUG - 2021-08-11 17:43:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:43:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:43:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:43:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:43:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:43:58 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:43:58 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:43:58 --> Total execution time: 0.1052
DEBUG - 2021-08-11 17:44:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:44:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:44:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:44:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:44:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:44:16 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:44:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:44:16 --> Total execution time: 0.0785
DEBUG - 2021-08-11 17:44:57 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:44:57 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:44:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:44:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:44:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:44:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:44:57 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:44:57 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:44:57 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:44:57 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:44:57 --> Total execution time: 0.0950
DEBUG - 2021-08-11 17:44:57 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:44:57 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:44:57 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:44:57 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:44:57 --> Total execution time: 0.1257
DEBUG - 2021-08-11 17:45:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:45:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:45:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:45:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:45:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:45:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:45:13 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:45:13 --> Total execution time: 0.0732
DEBUG - 2021-08-11 17:45:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:45:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:45:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:45:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:45:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:45:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:45:28 --> 0.0007 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:45:28 --> Total execution time: 0.0763
DEBUG - 2021-08-11 17:45:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:45:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:45:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:45:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:45:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:45:43 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:45:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:45:43 --> Total execution time: 0.0737
DEBUG - 2021-08-11 17:45:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:45:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:45:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:45:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:45:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:45:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:45:58 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:45:58 --> Total execution time: 0.0853
DEBUG - 2021-08-11 17:46:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:46:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:46:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:46:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:46:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:46:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:46:13 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:46:13 --> Total execution time: 0.0954
DEBUG - 2021-08-11 17:46:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:46:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:46:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:46:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:46:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:46:28 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:46:28 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:46:28 --> Total execution time: 0.0809
DEBUG - 2021-08-11 17:46:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:46:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:46:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:46:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:46:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:46:43 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:46:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:46:43 --> Total execution time: 0.0683
DEBUG - 2021-08-11 17:46:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:46:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:46:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:46:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:46:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:46:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:46:58 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:46:58 --> Total execution time: 0.0685
DEBUG - 2021-08-11 17:47:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:47:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:47:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:47:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:47:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:47:13 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:47:13 --> 0.0007 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:47:13 --> Total execution time: 0.1017
DEBUG - 2021-08-11 17:47:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:47:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:47:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:47:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:47:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:47:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:47:28 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:47:28 --> Total execution time: 0.0746
DEBUG - 2021-08-11 17:47:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:47:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:47:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:47:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:47:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:47:43 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:47:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:47:43 --> Total execution time: 0.0833
DEBUG - 2021-08-11 17:47:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:47:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:47:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:47:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:47:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:47:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:47:58 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:47:58 --> Total execution time: 0.0873
DEBUG - 2021-08-11 17:48:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:48:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:48:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:48:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:48:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:48:13 --> 0.0075 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:48:13 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:48:13 --> Total execution time: 0.1475
DEBUG - 2021-08-11 17:48:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:48:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:48:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:48:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:48:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:48:28 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:48:28 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:48:28 --> Total execution time: 0.0809
DEBUG - 2021-08-11 17:48:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:48:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:48:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:48:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:48:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:48:43 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:48:43 --> 0.0019 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:48:43 --> Total execution time: 0.0866
DEBUG - 2021-08-11 17:48:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:48:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:48:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:48:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:48:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:48:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:48:58 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:48:58 --> Total execution time: 0.0931
DEBUG - 2021-08-11 17:49:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:49:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:49:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:49:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:49:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:49:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:49:13 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:49:13 --> Total execution time: 0.0800
DEBUG - 2021-08-11 17:49:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:49:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:49:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:49:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:49:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:49:28 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:49:28 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:49:28 --> Total execution time: 0.0834
DEBUG - 2021-08-11 17:49:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:49:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:49:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:49:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:49:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:49:43 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:49:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:49:43 --> Total execution time: 0.0816
DEBUG - 2021-08-11 17:49:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:49:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:49:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:49:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:49:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:49:58 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:49:58 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:49:58 --> Total execution time: 0.0763
DEBUG - 2021-08-11 17:50:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:50:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:50:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:50:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:50:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:50:13 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:50:13 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:50:13 --> Total execution time: 0.0803
DEBUG - 2021-08-11 17:50:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:50:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:50:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:50:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:50:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:50:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:50:28 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:50:28 --> Total execution time: 0.0786
DEBUG - 2021-08-11 17:50:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:50:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:50:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:50:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:50:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:50:43 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:50:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:50:43 --> Total execution time: 0.0769
DEBUG - 2021-08-11 17:50:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:50:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:50:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:50:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:50:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:50:58 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:50:58 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:50:58 --> Total execution time: 0.0789
DEBUG - 2021-08-11 17:51:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:51:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:51:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:51:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:51:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:51:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:51:13 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:51:13 --> Total execution time: 0.0932
DEBUG - 2021-08-11 17:51:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:51:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:51:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:51:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:51:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:51:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:51:28 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:51:28 --> Total execution time: 0.0800
DEBUG - 2021-08-11 17:51:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:51:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:51:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:51:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:51:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:51:42 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:51:42 --> 0.0006 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:51:42 --> Total execution time: 0.0981
DEBUG - 2021-08-11 17:51:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:51:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:51:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:51:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:51:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:51:58 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:51:58 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:51:58 --> Total execution time: 0.0824
DEBUG - 2021-08-11 17:52:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:52:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:52:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:52:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:52:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:52:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:52:13 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:52:13 --> Total execution time: 0.0709
DEBUG - 2021-08-11 17:52:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:52:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:52:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:52:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:52:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:52:28 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:52:28 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:52:28 --> Total execution time: 0.0773
DEBUG - 2021-08-11 17:52:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:52:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:52:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:52:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:52:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:52:43 --> 0.0042 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:52:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:52:43 --> Total execution time: 0.0808
DEBUG - 2021-08-11 17:52:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:52:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:52:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:52:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:52:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:52:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:52:58 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:52:58 --> Total execution time: 0.0853
DEBUG - 2021-08-11 17:53:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:53:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:53:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:53:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:53:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:53:13 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:53:13 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:53:13 --> Total execution time: 0.0794
DEBUG - 2021-08-11 17:53:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:53:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:53:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:53:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:53:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:53:28 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:53:28 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:53:28 --> Total execution time: 0.0761
DEBUG - 2021-08-11 17:53:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:53:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:53:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:53:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:53:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:53:43 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:53:43 --> 0.0006 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:53:43 --> Total execution time: 0.1114
DEBUG - 2021-08-11 17:53:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:53:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:53:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:53:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:53:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:53:58 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:53:58 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:53:58 --> Total execution time: 0.0873
DEBUG - 2021-08-11 17:54:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:54:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:54:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:54:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:54:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:54:13 --> 0.002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:54:13 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:54:13 --> Total execution time: 0.1011
DEBUG - 2021-08-11 17:54:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:54:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:54:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:54:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:54:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:54:28 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:54:28 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:54:28 --> Total execution time: 0.0787
DEBUG - 2021-08-11 17:54:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:54:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:54:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:54:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:54:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:54:43 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:54:43 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:54:43 --> Total execution time: 0.0780
DEBUG - 2021-08-11 17:54:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:54:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:54:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:54:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:54:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:54:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:54:58 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:54:58 --> Total execution time: 0.0773
DEBUG - 2021-08-11 17:55:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:55:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:55:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:55:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:55:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:55:13 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:55:13 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:55:13 --> Total execution time: 0.0783
DEBUG - 2021-08-11 17:55:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:55:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:55:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:55:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:55:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:55:28 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:55:28 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:55:28 --> Total execution time: 0.0845
DEBUG - 2021-08-11 17:55:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:55:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:55:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:55:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:55:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:55:43 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:55:43 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:55:43 --> Total execution time: 0.1212
DEBUG - 2021-08-11 17:55:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:55:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:55:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:55:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:55:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:55:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:55:58 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:55:58 --> Total execution time: 0.1179
DEBUG - 2021-08-11 17:56:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:56:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:56:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:56:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:56:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:56:13 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:56:13 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:56:13 --> Total execution time: 0.0838
DEBUG - 2021-08-11 17:56:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:56:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:56:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:56:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:56:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:56:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:56:28 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:56:28 --> Total execution time: 0.0779
DEBUG - 2021-08-11 17:57:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:57:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:57:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:57:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:57:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:57:16 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:57:16 --> 0.001 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:57:16 --> Total execution time: 0.0995
DEBUG - 2021-08-11 17:57:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:57:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:57:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:57:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:57:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:57:45 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:57:45 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:57:45 --> Total execution time: 0.0976
DEBUG - 2021-08-11 17:57:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:57:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:57:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:57:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:57:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:57:58 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:57:58 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:57:58 --> Total execution time: 0.0788
DEBUG - 2021-08-11 17:58:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:58:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:58:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:58:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:58:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:58:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:58:13 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:58:13 --> Total execution time: 0.0850
DEBUG - 2021-08-11 17:58:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:58:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:58:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:58:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:58:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:58:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:58:28 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:58:28 --> Total execution time: 0.0764
DEBUG - 2021-08-11 17:58:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:58:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:58:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:58:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:58:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:58:43 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:58:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:58:43 --> Total execution time: 0.0840
DEBUG - 2021-08-11 17:58:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:58:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:58:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:58:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:58:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:58:58 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:58:58 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:58:58 --> Total execution time: 0.0842
DEBUG - 2021-08-11 17:59:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:59:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:59:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:59:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:59:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:59:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:59:13 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:59:13 --> Total execution time: 0.0786
DEBUG - 2021-08-11 17:59:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:59:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:59:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:59:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:59:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:59:28 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:59:28 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:59:28 --> Total execution time: 0.0794
DEBUG - 2021-08-11 17:59:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:59:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:59:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:59:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:59:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:59:43 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:59:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:59:43 --> Total execution time: 0.0791
DEBUG - 2021-08-11 17:59:57 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 17:59:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 17:59:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 17:59:57 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 17:59:57 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 17:59:57 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 17:59:57 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 17:59:57 --> Total execution time: 0.0763
DEBUG - 2021-08-11 18:00:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:00:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:00:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:00:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:00:12 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:00:12 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:00:12 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:00:12 --> Total execution time: 0.0778
DEBUG - 2021-08-11 18:00:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:00:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:00:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:00:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:00:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:00:27 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:00:27 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:00:27 --> Total execution time: 0.0816
DEBUG - 2021-08-11 18:00:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:00:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:00:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:00:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:00:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:00:42 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:00:42 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:00:42 --> Total execution time: 0.0766
DEBUG - 2021-08-11 18:00:57 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:00:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:00:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:00:57 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:00:57 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:00:57 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:00:57 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:00:57 --> Total execution time: 0.0801
DEBUG - 2021-08-11 18:01:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:01:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:01:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:01:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:01:12 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:01:12 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:01:12 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:01:12 --> Total execution time: 0.0714
DEBUG - 2021-08-11 18:01:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:01:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:01:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:01:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:01:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:01:27 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:01:27 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:01:27 --> Total execution time: 0.0788
DEBUG - 2021-08-11 18:01:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:01:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:01:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:01:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:01:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:01:42 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:01:42 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:01:42 --> Total execution time: 0.0773
DEBUG - 2021-08-11 18:01:57 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:01:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:01:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:01:57 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:01:57 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:01:57 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:01:57 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:01:57 --> Total execution time: 0.0881
DEBUG - 2021-08-11 18:02:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:02:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:02:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:02:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:02:12 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:02:12 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:02:12 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:02:12 --> Total execution time: 0.0826
DEBUG - 2021-08-11 18:02:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:02:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:02:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:02:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:02:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:02:27 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:02:27 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:02:27 --> Total execution time: 0.0840
DEBUG - 2021-08-11 18:02:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:02:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:02:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:02:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:02:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:02:42 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:02:42 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:02:42 --> Total execution time: 0.0834
DEBUG - 2021-08-11 18:02:57 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:02:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:02:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:02:57 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:02:57 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:02:57 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:02:57 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:02:57 --> Total execution time: 0.1010
DEBUG - 2021-08-11 18:03:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:03:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:03:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:03:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:03:12 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:03:12 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:03:12 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:03:12 --> Total execution time: 0.0933
DEBUG - 2021-08-11 18:03:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:03:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:03:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:03:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:03:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:03:27 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:03:27 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:03:27 --> Total execution time: 0.0801
DEBUG - 2021-08-11 18:03:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:03:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:03:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:03:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:03:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:03:42 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:03:42 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:03:42 --> Total execution time: 0.0730
DEBUG - 2021-08-11 18:03:57 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:03:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:03:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:03:57 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:03:57 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:03:57 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:03:57 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:03:57 --> Total execution time: 0.0888
DEBUG - 2021-08-11 18:04:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:04:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:04:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:04:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:04:12 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:04:12 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:04:12 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:04:12 --> Total execution time: 0.0898
DEBUG - 2021-08-11 18:04:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:04:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:04:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:04:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:04:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:04:27 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:04:27 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:04:27 --> Total execution time: 0.0796
DEBUG - 2021-08-11 18:04:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:04:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:04:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:04:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:04:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:04:42 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:04:42 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:04:42 --> Total execution time: 0.0785
DEBUG - 2021-08-11 18:04:57 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:04:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:04:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:04:57 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:04:57 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:04:57 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:04:57 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:04:57 --> Total execution time: 0.0801
DEBUG - 2021-08-11 18:05:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:05:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:05:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:05:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:05:12 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:05:12 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:05:12 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:05:12 --> Total execution time: 0.0811
DEBUG - 2021-08-11 18:05:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:05:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:05:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:05:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:05:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:05:27 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:05:27 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:05:27 --> Total execution time: 0.0868
DEBUG - 2021-08-11 18:05:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:05:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:05:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:05:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:05:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:05:42 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:05:42 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:05:42 --> Total execution time: 0.0853
DEBUG - 2021-08-11 18:05:57 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:05:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:05:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:05:57 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:05:57 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:05:57 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:05:57 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:05:57 --> Total execution time: 0.0962
DEBUG - 2021-08-11 18:06:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:06:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:06:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:06:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:06:12 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:06:12 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:06:12 --> 0.0007 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:06:12 --> Total execution time: 0.0844
DEBUG - 2021-08-11 18:06:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:06:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:06:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:06:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:06:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:06:27 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:06:27 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:06:27 --> Total execution time: 0.0944
DEBUG - 2021-08-11 18:06:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:06:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:06:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:06:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:06:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:06:42 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:06:42 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:06:42 --> Total execution time: 0.0839
DEBUG - 2021-08-11 18:06:57 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:06:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:06:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:06:57 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:06:57 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:06:57 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:06:57 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:06:57 --> Total execution time: 0.0831
DEBUG - 2021-08-11 18:07:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:07:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:07:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:07:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:07:12 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:07:12 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:07:12 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:07:12 --> Total execution time: 0.0829
DEBUG - 2021-08-11 18:07:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:07:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:07:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:07:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:07:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:07:27 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:07:27 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:07:27 --> Total execution time: 0.0861
DEBUG - 2021-08-11 18:07:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:07:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:07:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:07:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:07:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:07:42 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:07:42 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:07:42 --> Total execution time: 0.0849
DEBUG - 2021-08-11 18:07:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:07:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:07:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:07:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:07:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:07:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:07:58 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:07:58 --> Total execution time: 0.0710
DEBUG - 2021-08-11 18:08:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:08:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:08:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:08:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:08:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:08:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:08:13 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:08:13 --> Total execution time: 0.0692
DEBUG - 2021-08-11 18:08:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:08:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:08:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:08:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:08:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:08:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:08:28 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:08:28 --> Total execution time: 0.0841
DEBUG - 2021-08-11 18:08:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:08:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:08:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:08:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:08:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:08:43 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:08:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:08:43 --> Total execution time: 0.0835
DEBUG - 2021-08-11 18:08:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:08:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:08:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:08:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:08:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:08:58 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:08:58 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:08:58 --> Total execution time: 0.0780
DEBUG - 2021-08-11 18:09:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:09:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:09:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:09:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:09:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:09:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:09:13 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:09:13 --> Total execution time: 0.0722
DEBUG - 2021-08-11 18:09:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:09:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:09:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:09:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:09:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:09:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:09:28 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:09:28 --> Total execution time: 0.0726
DEBUG - 2021-08-11 18:09:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:09:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:09:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:09:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:09:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:09:43 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:09:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:09:43 --> Total execution time: 0.0816
DEBUG - 2021-08-11 18:09:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:09:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:09:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:09:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:09:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:09:58 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:09:58 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:09:58 --> Total execution time: 0.0827
DEBUG - 2021-08-11 18:10:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:10:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:10:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:10:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:10:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:10:13 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:10:13 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:10:13 --> Total execution time: 0.0828
DEBUG - 2021-08-11 18:10:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:10:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:10:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:10:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:10:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:10:28 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:10:28 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:10:28 --> Total execution time: 0.0857
DEBUG - 2021-08-11 18:10:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:10:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:10:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:10:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:10:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:10:43 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:10:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:10:43 --> Total execution time: 0.0708
DEBUG - 2021-08-11 18:10:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:10:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:10:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:10:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:10:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:10:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:10:58 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:10:58 --> Total execution time: 0.0851
DEBUG - 2021-08-11 18:11:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:11:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:11:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:11:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:11:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:11:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:11:13 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:11:13 --> Total execution time: 0.0684
DEBUG - 2021-08-11 18:11:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:11:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:11:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:11:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:11:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:11:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:11:28 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:11:28 --> Total execution time: 0.0838
DEBUG - 2021-08-11 18:11:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:11:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:11:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:11:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:11:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:11:43 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:11:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:11:43 --> Total execution time: 0.0779
DEBUG - 2021-08-11 18:11:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:11:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:11:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:11:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:11:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:11:58 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:11:58 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:11:58 --> Total execution time: 0.0790
DEBUG - 2021-08-11 18:12:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:12:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:12:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:12:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:12:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:12:13 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:12:13 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:12:13 --> Total execution time: 0.0763
DEBUG - 2021-08-11 18:12:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:12:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:12:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:12:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:12:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:12:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:12:28 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:12:28 --> Total execution time: 0.0763
DEBUG - 2021-08-11 18:12:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:12:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:12:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:12:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:12:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:12:43 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:12:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:12:43 --> Total execution time: 0.0839
DEBUG - 2021-08-11 18:13:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:13:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:13:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:13:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:13:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:13:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:13:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:13:16 --> Total execution time: 0.0974
DEBUG - 2021-08-11 18:14:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:14:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:14:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:14:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:14:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:14:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:14:16 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:14:16 --> Total execution time: 0.0774
DEBUG - 2021-08-11 18:15:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:15:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:15:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:15:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:15:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:15:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:15:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:15:16 --> Total execution time: 0.0865
DEBUG - 2021-08-11 18:16:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:16:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:16:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:16:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:16:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:16:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:16:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:16:16 --> Total execution time: 0.0750
DEBUG - 2021-08-11 18:17:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:17:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:17:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:17:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:17:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:17:16 --> 0.0009 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:17:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:17:16 --> Total execution time: 0.1037
DEBUG - 2021-08-11 18:18:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:18:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:18:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:18:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:18:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:18:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:18:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:18:16 --> Total execution time: 0.0920
DEBUG - 2021-08-11 18:19:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:19:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:19:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:19:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:19:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:19:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:19:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:19:16 --> Total execution time: 0.0823
DEBUG - 2021-08-11 18:20:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:20:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:20:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:20:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:20:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:20:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:20:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:20:16 --> Total execution time: 0.0675
DEBUG - 2021-08-11 18:21:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:21:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:21:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:21:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:21:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:21:16 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:21:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:21:16 --> Total execution time: 0.1181
DEBUG - 2021-08-11 18:21:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:21:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:21:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:21:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:21:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:21:54 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:21:54 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:21:54 --> Total execution time: 0.1124
DEBUG - 2021-08-11 18:21:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:21:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:21:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:21:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:21:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:21:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:21:58 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:21:58 --> Total execution time: 0.0722
DEBUG - 2021-08-11 18:22:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:22:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:22:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:22:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:22:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:22:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:22:13 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:22:13 --> Total execution time: 0.0756
DEBUG - 2021-08-11 18:22:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:22:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:22:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:22:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:22:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:22:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:22:28 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:22:28 --> Total execution time: 0.0888
DEBUG - 2021-08-11 18:22:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:22:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:22:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:22:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:22:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:22:43 --> 0.0012 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:22:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:22:43 --> Total execution time: 0.0860
DEBUG - 2021-08-11 18:22:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:22:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:22:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:22:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:22:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:22:58 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:22:58 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:22:58 --> Total execution time: 0.0855
DEBUG - 2021-08-11 18:23:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:23:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:23:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:23:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:23:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:23:13 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:23:13 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:23:13 --> Total execution time: 0.0792
DEBUG - 2021-08-11 18:23:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:23:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:23:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:23:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:23:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:23:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:23:28 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:23:28 --> Total execution time: 0.0810
DEBUG - 2021-08-11 18:23:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:23:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:23:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:23:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:23:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:23:43 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:23:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:23:43 --> Total execution time: 0.1032
DEBUG - 2021-08-11 18:23:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:23:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:23:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:23:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:23:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:23:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:23:58 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:23:58 --> Total execution time: 0.1109
DEBUG - 2021-08-11 18:24:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:24:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:24:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:24:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:24:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:24:13 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:24:13 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:24:13 --> Total execution time: 0.0795
DEBUG - 2021-08-11 18:24:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:24:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:24:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:24:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:24:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:24:28 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:24:28 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:24:28 --> Total execution time: 0.1109
DEBUG - 2021-08-11 18:24:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:24:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:24:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:24:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:24:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:24:43 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:24:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:24:43 --> Total execution time: 0.0745
DEBUG - 2021-08-11 18:24:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:24:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:24:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:24:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:24:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:24:58 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:24:58 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:24:58 --> Total execution time: 0.0766
DEBUG - 2021-08-11 18:25:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:25:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:25:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:25:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:25:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:25:13 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:25:13 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:25:13 --> Total execution time: 0.0675
DEBUG - 2021-08-11 18:25:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:25:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:25:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:25:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:25:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:25:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:25:28 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:25:28 --> Total execution time: 0.0847
DEBUG - 2021-08-11 18:25:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:25:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:25:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:25:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:25:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:25:43 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:25:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:25:43 --> Total execution time: 0.0756
DEBUG - 2021-08-11 18:25:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:25:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:25:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:25:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:25:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:25:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:25:58 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:25:58 --> Total execution time: 0.0763
DEBUG - 2021-08-11 18:26:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:26:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:26:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:26:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:26:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:26:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:26:13 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:26:13 --> Total execution time: 0.0771
DEBUG - 2021-08-11 18:26:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:26:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:26:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:26:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:26:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:26:28 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:26:28 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:26:28 --> Total execution time: 0.0674
DEBUG - 2021-08-11 18:26:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:26:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:26:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:26:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:26:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:26:43 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:26:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:26:43 --> Total execution time: 0.0839
DEBUG - 2021-08-11 18:26:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:26:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:26:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:26:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:26:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:26:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:26:58 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:26:58 --> Total execution time: 0.0869
DEBUG - 2021-08-11 18:27:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:27:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:27:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:27:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:27:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:27:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:27:13 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:27:13 --> Total execution time: 0.0854
DEBUG - 2021-08-11 18:27:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:27:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:27:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:27:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:27:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:27:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:27:28 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:27:28 --> Total execution time: 0.0859
DEBUG - 2021-08-11 18:27:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:27:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:27:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:27:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:27:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:27:43 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:27:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:27:43 --> Total execution time: 0.0861
DEBUG - 2021-08-11 18:28:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:28:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:28:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:28:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:28:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:28:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:28:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:28:16 --> Total execution time: 0.0793
DEBUG - 2021-08-11 18:29:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:29:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:29:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:29:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:29:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:29:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:29:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:29:16 --> Total execution time: 0.0829
DEBUG - 2021-08-11 18:30:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:30:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:30:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:30:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:30:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:30:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:30:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:30:16 --> Total execution time: 0.0773
DEBUG - 2021-08-11 18:31:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:31:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:31:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:31:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:31:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:31:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:31:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:31:16 --> Total execution time: 0.0834
DEBUG - 2021-08-11 18:32:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:32:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:32:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:32:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:32:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:32:16 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:32:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:32:16 --> Total execution time: 0.0843
DEBUG - 2021-08-11 18:33:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:33:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:33:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:33:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:33:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:33:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:33:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:33:16 --> Total execution time: 0.0689
DEBUG - 2021-08-11 18:34:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:34:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:34:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:34:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:34:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:34:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:34:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:34:16 --> Total execution time: 0.0782
DEBUG - 2021-08-11 18:35:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:35:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:35:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:35:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:35:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:35:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:35:16 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:35:16 --> Total execution time: 0.0756
DEBUG - 2021-08-11 18:36:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:36:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:36:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:36:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:36:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:36:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:36:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:36:16 --> Total execution time: 0.0678
DEBUG - 2021-08-11 18:37:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:37:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:37:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:37:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:37:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:37:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:37:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:37:16 --> Total execution time: 0.0847
DEBUG - 2021-08-11 18:37:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:37:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:37:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:37:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:37:51 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:37:51 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:37:51 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:37:51 --> Total execution time: 0.0994
DEBUG - 2021-08-11 18:37:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:37:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:37:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:37:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:37:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:37:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:37:58 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:37:58 --> Total execution time: 0.0723
DEBUG - 2021-08-11 18:38:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:38:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:38:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:38:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:38:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:38:13 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:38:13 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:38:13 --> Total execution time: 0.0778
DEBUG - 2021-08-11 18:38:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:38:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:38:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:38:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:38:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:38:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:38:28 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:38:28 --> Total execution time: 0.0742
DEBUG - 2021-08-11 18:38:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:38:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:38:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:38:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:38:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:38:43 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:38:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:38:43 --> Total execution time: 0.0872
DEBUG - 2021-08-11 18:38:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:38:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:38:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:38:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:38:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:38:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:38:58 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:38:58 --> Total execution time: 0.0734
DEBUG - 2021-08-11 18:39:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:39:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:39:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:39:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:39:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:39:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:39:13 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:39:13 --> Total execution time: 0.0788
DEBUG - 2021-08-11 18:39:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:39:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:39:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:39:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:39:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:39:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:39:28 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:39:28 --> Total execution time: 0.0745
DEBUG - 2021-08-11 18:39:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:39:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:39:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:39:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:39:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:39:43 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:39:43 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:39:43 --> Total execution time: 0.0871
DEBUG - 2021-08-11 18:39:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:39:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:39:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:39:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:39:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:39:58 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:39:58 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:39:58 --> Total execution time: 0.0766
DEBUG - 2021-08-11 18:40:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:40:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:40:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:40:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:40:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:40:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:40:13 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:40:13 --> Total execution time: 0.0835
DEBUG - 2021-08-11 18:40:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:40:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:40:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:40:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:40:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:40:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:40:28 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:40:28 --> Total execution time: 0.1060
DEBUG - 2021-08-11 18:40:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:40:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:40:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:40:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:40:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:40:43 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:40:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:40:43 --> Total execution time: 0.0717
DEBUG - 2021-08-11 18:40:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:40:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:40:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:40:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:40:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:40:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:40:58 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:40:58 --> Total execution time: 0.0866
DEBUG - 2021-08-11 18:41:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:41:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:41:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:41:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:41:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:41:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:41:13 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:41:13 --> Total execution time: 0.0830
DEBUG - 2021-08-11 18:41:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:41:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:41:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:41:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:41:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:41:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:41:28 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:41:28 --> Total execution time: 0.0861
DEBUG - 2021-08-11 18:41:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:41:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:41:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:41:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:41:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:41:43 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:41:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:41:43 --> Total execution time: 0.0726
DEBUG - 2021-08-11 18:41:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:41:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:41:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:41:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:41:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:41:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:41:58 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:41:58 --> Total execution time: 0.0640
DEBUG - 2021-08-11 18:42:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:42:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:42:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:42:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:42:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:42:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:42:13 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:42:13 --> Total execution time: 0.0662
DEBUG - 2021-08-11 18:42:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:42:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:42:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:42:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:42:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:42:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:42:28 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:42:28 --> Total execution time: 0.0779
DEBUG - 2021-08-11 18:42:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:42:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:42:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:42:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:42:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:42:43 --> 0.0068 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:42:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:42:43 --> Total execution time: 0.3176
DEBUG - 2021-08-11 18:42:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:42:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:42:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:42:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:42:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:42:58 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:42:58 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:42:58 --> Total execution time: 0.0735
DEBUG - 2021-08-11 18:43:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:43:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:43:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:43:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:43:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:43:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:43:13 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:43:13 --> Total execution time: 0.0710
DEBUG - 2021-08-11 18:43:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:43:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:43:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:43:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:43:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:43:28 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:43:28 --> 0.0175 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:43:28 --> Total execution time: 0.1042
DEBUG - 2021-08-11 18:43:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:43:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:43:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:43:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:43:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:43:43 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:43:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:43:43 --> Total execution time: 0.0757
DEBUG - 2021-08-11 18:43:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:43:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:43:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:43:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:43:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:43:58 --> 0.0089 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:43:58 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:43:58 --> Total execution time: 0.0902
DEBUG - 2021-08-11 18:44:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:44:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:44:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:44:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:44:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:44:13 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:44:13 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:44:13 --> Total execution time: 0.0876
DEBUG - 2021-08-11 18:44:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:44:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:44:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:44:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:44:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:44:28 --> 0.0034 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:44:28 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:44:28 --> Total execution time: 0.0824
DEBUG - 2021-08-11 18:44:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:44:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:44:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:44:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:44:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:44:43 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:44:43 --> 0.0015 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:44:43 --> Total execution time: 0.0907
DEBUG - 2021-08-11 18:44:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:44:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:44:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:44:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:44:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:44:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:44:58 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:44:58 --> Total execution time: 0.0762
DEBUG - 2021-08-11 18:45:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:45:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:45:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:45:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:45:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:45:13 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:45:13 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:45:13 --> Total execution time: 0.0832
DEBUG - 2021-08-11 18:45:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:45:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:45:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:45:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:45:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:45:28 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:45:28 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:45:28 --> Total execution time: 0.0728
DEBUG - 2021-08-11 18:45:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:45:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:45:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:45:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:45:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:45:43 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:45:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:45:43 --> Total execution time: 0.0810
DEBUG - 2021-08-11 18:45:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:45:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:45:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:45:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:45:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:45:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:45:58 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:45:58 --> Total execution time: 0.0634
DEBUG - 2021-08-11 18:46:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:46:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:46:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:46:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:46:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:46:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:46:13 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:46:13 --> Total execution time: 0.0751
DEBUG - 2021-08-11 18:46:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:46:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:46:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:46:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:46:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:46:28 --> 0.0009 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:46:28 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:46:28 --> Total execution time: 0.0810
DEBUG - 2021-08-11 18:46:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:46:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:46:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:46:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:46:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:46:43 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:46:43 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:46:43 --> Total execution time: 0.0787
DEBUG - 2021-08-11 18:46:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:46:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:46:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:46:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:46:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:46:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:46:58 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:46:58 --> Total execution time: 0.0790
DEBUG - 2021-08-11 18:47:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:47:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:47:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:47:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:47:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:47:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:47:13 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:47:13 --> Total execution time: 0.0737
DEBUG - 2021-08-11 18:47:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:47:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:47:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:47:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:47:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:47:28 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:47:28 --> 0.0006 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:47:28 --> Total execution time: 0.0814
DEBUG - 2021-08-11 18:47:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:47:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:47:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:47:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:47:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:47:43 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:47:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:47:43 --> Total execution time: 0.0759
DEBUG - 2021-08-11 18:48:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:48:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:48:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:48:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:48:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:48:16 --> 0.0058 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:48:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:48:16 --> Total execution time: 0.0993
DEBUG - 2021-08-11 18:49:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:49:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:49:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:49:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:49:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:49:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:49:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:49:16 --> Total execution time: 0.0803
DEBUG - 2021-08-11 18:50:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:50:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:50:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:50:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:50:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:50:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:50:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:50:16 --> Total execution time: 0.0829
DEBUG - 2021-08-11 18:51:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:51:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:51:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:51:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:51:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:51:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:51:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:51:16 --> Total execution time: 0.0749
DEBUG - 2021-08-11 18:52:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:52:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:52:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:52:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:52:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:52:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:52:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:52:16 --> Total execution time: 0.0853
DEBUG - 2021-08-11 18:53:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:53:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:53:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:53:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:53:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:53:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:53:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:53:16 --> Total execution time: 0.0846
DEBUG - 2021-08-11 18:54:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:54:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:54:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:54:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:54:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:54:16 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:54:16 --> 0.0007 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:54:16 --> Total execution time: 0.0977
DEBUG - 2021-08-11 18:55:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:55:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:55:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:55:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:55:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:55:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:55:16 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:55:16 --> Total execution time: 0.0879
DEBUG - 2021-08-11 18:56:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:56:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:56:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:56:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:56:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:56:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:56:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:56:16 --> Total execution time: 0.0870
DEBUG - 2021-08-11 18:57:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:57:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:57:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:57:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:57:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:57:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:57:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:57:16 --> Total execution time: 0.1057
DEBUG - 2021-08-11 18:58:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:58:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:58:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:58:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:58:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:58:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:58:01 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:58:01 --> Total execution time: 0.0982
DEBUG - 2021-08-11 18:58:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:58:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:58:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:58:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:58:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:58:13 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:58:13 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:58:13 --> Total execution time: 0.0853
DEBUG - 2021-08-11 18:58:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:58:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:58:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:58:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:58:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:58:28 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:58:28 --> 0.0007 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:58:28 --> Total execution time: 0.0822
DEBUG - 2021-08-11 18:58:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:58:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:58:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:58:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:58:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:58:43 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:58:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:58:43 --> Total execution time: 0.0896
DEBUG - 2021-08-11 18:58:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:58:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:58:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:58:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:58:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:58:58 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:58:58 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:58:58 --> Total execution time: 0.0964
DEBUG - 2021-08-11 18:59:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:59:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:59:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:59:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:59:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:59:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:59:13 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:59:13 --> Total execution time: 0.0912
DEBUG - 2021-08-11 18:59:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:59:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:59:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:59:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:59:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:59:28 --> 0.0013 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:59:28 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:59:28 --> Total execution time: 0.1160
DEBUG - 2021-08-11 18:59:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:59:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:59:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:59:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:59:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:59:43 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:59:43 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:59:43 --> Total execution time: 0.1229
DEBUG - 2021-08-11 18:59:57 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 18:59:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 18:59:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 18:59:57 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 18:59:57 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 18:59:57 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 18:59:57 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 18:59:57 --> Total execution time: 0.0772
DEBUG - 2021-08-11 19:00:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:00:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:00:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:00:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:00:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:00:13 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:00:13 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:00:13 --> Total execution time: 0.0785
DEBUG - 2021-08-11 19:00:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:00:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:00:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:00:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:00:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:00:28 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:00:28 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:00:28 --> Total execution time: 0.0776
DEBUG - 2021-08-11 19:00:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:00:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:00:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:00:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:00:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:00:43 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:00:43 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:00:43 --> Total execution time: 0.0875
DEBUG - 2021-08-11 19:00:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:00:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:00:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:00:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:00:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:00:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:00:58 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:00:58 --> Total execution time: 0.0815
DEBUG - 2021-08-11 19:01:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:01:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:01:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:01:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:01:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:01:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:01:13 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:01:13 --> Total execution time: 0.0718
DEBUG - 2021-08-11 19:01:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:01:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:01:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:01:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:01:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:01:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:01:28 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:01:28 --> Total execution time: 0.0741
DEBUG - 2021-08-11 19:01:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:01:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:01:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:01:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:01:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:01:43 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:01:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:01:43 --> Total execution time: 0.0848
DEBUG - 2021-08-11 19:01:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:01:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:01:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:01:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:01:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:01:58 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:01:58 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:01:58 --> Total execution time: 0.1052
DEBUG - 2021-08-11 19:02:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:02:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:02:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:02:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:02:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:02:13 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:02:13 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:02:13 --> Total execution time: 0.0875
DEBUG - 2021-08-11 19:02:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:02:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:02:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:02:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:02:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:02:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:02:28 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:02:28 --> Total execution time: 0.0894
DEBUG - 2021-08-11 19:02:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:02:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:02:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:02:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:02:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:02:43 --> 0.0022 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:02:43 --> 0.0024 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:02:43 --> Total execution time: 0.1068
DEBUG - 2021-08-11 19:02:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:02:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:02:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:02:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:02:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:02:58 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:02:58 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:02:58 --> Total execution time: 0.0845
DEBUG - 2021-08-11 19:03:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:03:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:03:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:03:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:03:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:03:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:03:13 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:03:13 --> Total execution time: 0.0783
DEBUG - 2021-08-11 19:03:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:03:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:03:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:03:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:03:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:03:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:03:28 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:03:28 --> Total execution time: 0.1016
DEBUG - 2021-08-11 19:03:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:03:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:03:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:03:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:03:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:03:43 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:03:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:03:43 --> Total execution time: 0.0848
DEBUG - 2021-08-11 19:03:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:03:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:03:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:03:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:03:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:03:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:03:58 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:03:58 --> Total execution time: 0.0887
DEBUG - 2021-08-11 19:04:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:04:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:04:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:04:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:04:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:04:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:04:13 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:04:13 --> Total execution time: 0.1100
DEBUG - 2021-08-11 19:04:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:04:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:04:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:04:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:04:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:04:28 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:04:28 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:04:28 --> Total execution time: 0.0999
DEBUG - 2021-08-11 19:04:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:04:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:04:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:04:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:04:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:04:43 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:04:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:04:43 --> Total execution time: 0.0845
DEBUG - 2021-08-11 19:04:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:04:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:04:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:04:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:04:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:04:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:04:58 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:04:58 --> Total execution time: 0.0885
DEBUG - 2021-08-11 19:05:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:05:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:05:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:05:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:05:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:05:13 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:05:13 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:05:13 --> Total execution time: 0.0895
DEBUG - 2021-08-11 19:05:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:05:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:05:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:05:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:05:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:05:28 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:05:28 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:05:28 --> Total execution time: 0.0860
DEBUG - 2021-08-11 19:05:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:05:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:05:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:05:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:05:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:05:43 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:05:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:05:43 --> Total execution time: 0.0935
DEBUG - 2021-08-11 19:05:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:05:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:05:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:05:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:05:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:05:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:05:58 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:05:58 --> Total execution time: 0.0899
DEBUG - 2021-08-11 19:06:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:06:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:06:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:06:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:06:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:06:13 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:06:13 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:06:13 --> Total execution time: 0.0902
DEBUG - 2021-08-11 19:06:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:06:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:06:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:06:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:06:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:06:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:06:28 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:06:28 --> Total execution time: 0.0905
DEBUG - 2021-08-11 19:06:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:06:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:06:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:06:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:06:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:06:43 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:06:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:06:43 --> Total execution time: 0.0958
DEBUG - 2021-08-11 19:06:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:06:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:06:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:06:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:06:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:06:58 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:06:58 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:06:58 --> Total execution time: 0.0940
DEBUG - 2021-08-11 19:07:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:07:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:07:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:07:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:07:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:07:13 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:07:13 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:07:13 --> Total execution time: 0.0986
DEBUG - 2021-08-11 19:07:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:07:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:07:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:07:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:07:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:07:28 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:07:28 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:07:28 --> Total execution time: 0.1070
DEBUG - 2021-08-11 19:07:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:07:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:07:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:07:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:07:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:07:43 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:07:43 --> 0.0007 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:07:43 --> Total execution time: 0.1182
DEBUG - 2021-08-11 19:07:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:07:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:07:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:07:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:07:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:07:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:07:58 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:07:58 --> Total execution time: 0.0987
DEBUG - 2021-08-11 19:08:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:08:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:08:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:08:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:08:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:08:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:08:13 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:08:13 --> Total execution time: 0.1156
DEBUG - 2021-08-11 19:08:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:08:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:08:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:08:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:08:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:08:28 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:08:28 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:08:28 --> Total execution time: 0.0952
DEBUG - 2021-08-11 19:08:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:08:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:08:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:08:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:08:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:08:43 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:08:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:08:43 --> Total execution time: 0.0878
DEBUG - 2021-08-11 19:08:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:08:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:08:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:08:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:08:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:08:58 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:08:58 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:08:58 --> Total execution time: 0.0943
DEBUG - 2021-08-11 19:09:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:09:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:09:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:09:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:09:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:09:13 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:09:13 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:09:13 --> Total execution time: 0.0984
DEBUG - 2021-08-11 19:09:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:09:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:09:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:09:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:09:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:09:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:09:28 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:09:28 --> Total execution time: 0.1062
DEBUG - 2021-08-11 19:09:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:09:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:09:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:09:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:09:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:09:43 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:09:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:09:43 --> Total execution time: 0.0941
DEBUG - 2021-08-11 19:09:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:09:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:09:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:09:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:09:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:09:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:09:58 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:09:58 --> Total execution time: 0.0911
DEBUG - 2021-08-11 19:10:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:10:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:10:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:10:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:10:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:10:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:10:13 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:10:13 --> Total execution time: 0.1019
DEBUG - 2021-08-11 19:10:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:10:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:10:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:10:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:10:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:10:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:10:28 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:10:28 --> Total execution time: 0.0904
DEBUG - 2021-08-11 19:11:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:11:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:11:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:11:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:11:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:11:16 --> 0.0011 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:11:16 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:11:16 --> Total execution time: 0.1063
DEBUG - 2021-08-11 19:12:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:12:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:12:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:12:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:12:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:12:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:12:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:12:16 --> Total execution time: 0.1078
DEBUG - 2021-08-11 19:13:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:13:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:13:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:13:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:13:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:13:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:13:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:13:16 --> Total execution time: 0.0866
DEBUG - 2021-08-11 19:14:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:14:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:14:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:14:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:14:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:14:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:14:16 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:14:16 --> Total execution time: 0.1063
DEBUG - 2021-08-11 19:15:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:15:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:15:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:15:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:15:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:15:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:15:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:15:16 --> Total execution time: 0.0909
DEBUG - 2021-08-11 19:16:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:16:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:16:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:16:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:16:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:16:16 --> 0.0022 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:16:16 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:16:16 --> Total execution time: 0.1052
DEBUG - 2021-08-11 19:17:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:17:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:17:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:17:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:17:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:17:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:17:16 --> 0.0008 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:17:16 --> Total execution time: 0.0932
DEBUG - 2021-08-11 19:18:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:18:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:18:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:18:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:18:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:18:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:18:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:18:16 --> Total execution time: 0.1113
DEBUG - 2021-08-11 19:19:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:19:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:19:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:19:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:19:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:19:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:19:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:19:16 --> Total execution time: 0.1111
DEBUG - 2021-08-11 19:20:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:20:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:20:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:20:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:20:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:20:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:20:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:20:16 --> Total execution time: 0.1188
DEBUG - 2021-08-11 19:21:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:21:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:21:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:21:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:21:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:21:16 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:21:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:21:16 --> Total execution time: 0.0872
DEBUG - 2021-08-11 19:22:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:22:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:22:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:22:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:22:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:22:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:22:16 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:22:16 --> Total execution time: 0.0780
DEBUG - 2021-08-11 19:23:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:23:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:23:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:23:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:23:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:23:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:23:16 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:23:16 --> Total execution time: 0.0808
DEBUG - 2021-08-11 19:24:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:24:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:24:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:24:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:24:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:24:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:24:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:24:16 --> Total execution time: 0.0801
DEBUG - 2021-08-11 19:25:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:25:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:25:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:25:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:25:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:25:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:25:16 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:25:16 --> Total execution time: 0.0896
DEBUG - 2021-08-11 19:26:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:26:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:26:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:26:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:26:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:26:16 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:26:16 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:26:16 --> Total execution time: 0.0827
DEBUG - 2021-08-11 19:27:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:27:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:27:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:27:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:27:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:27:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:27:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:27:16 --> Total execution time: 0.1054
DEBUG - 2021-08-11 19:28:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:28:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:28:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:28:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:28:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:28:13 --> 0.0008 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:28:13 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:28:13 --> Total execution time: 0.1093
DEBUG - 2021-08-11 19:28:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:28:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:28:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:28:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:28:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:28:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:28:28 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:28:28 --> Total execution time: 0.0806
DEBUG - 2021-08-11 19:28:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:28:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:28:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:28:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:28:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:28:43 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:28:43 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:28:43 --> Total execution time: 0.0738
DEBUG - 2021-08-11 19:28:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:28:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:28:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:28:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:28:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:28:58 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:28:58 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:28:58 --> Total execution time: 0.0749
DEBUG - 2021-08-11 19:29:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:29:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:29:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:29:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:29:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:29:13 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:29:13 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:29:13 --> Total execution time: 0.0862
DEBUG - 2021-08-11 19:29:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:29:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:29:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:29:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:29:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:29:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:29:28 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:29:28 --> Total execution time: 0.0754
DEBUG - 2021-08-11 19:29:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:29:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:29:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:29:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:29:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:29:43 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:29:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:29:43 --> Total execution time: 0.0699
DEBUG - 2021-08-11 19:29:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:29:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:29:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:29:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:29:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:29:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:29:58 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:29:58 --> Total execution time: 0.0757
DEBUG - 2021-08-11 19:30:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:30:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:30:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:30:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:30:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:30:13 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:30:13 --> 0.0009 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:30:13 --> Total execution time: 0.0722
DEBUG - 2021-08-11 19:30:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:30:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:30:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:30:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:30:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:30:28 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:30:28 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:30:28 --> Total execution time: 0.0777
DEBUG - 2021-08-11 19:30:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:30:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:30:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:30:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:30:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:30:43 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:30:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:30:43 --> Total execution time: 0.0827
DEBUG - 2021-08-11 19:30:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:30:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:30:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:30:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:30:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:30:58 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:30:58 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:30:58 --> Total execution time: 0.0852
DEBUG - 2021-08-11 19:31:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:31:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:31:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:31:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:31:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:31:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:31:13 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:31:13 --> Total execution time: 0.0741
DEBUG - 2021-08-11 19:31:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:31:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:31:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:31:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:31:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:31:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:31:28 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:31:28 --> Total execution time: 0.0772
DEBUG - 2021-08-11 19:31:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:31:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:31:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:31:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:31:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:31:43 --> 0.0012 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:31:43 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:31:43 --> Total execution time: 0.0790
DEBUG - 2021-08-11 19:31:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:31:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:31:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:31:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:31:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:31:58 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:31:58 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:31:58 --> Total execution time: 0.0740
DEBUG - 2021-08-11 19:32:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:32:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:32:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:32:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:32:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:32:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:32:13 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:32:13 --> Total execution time: 0.1036
DEBUG - 2021-08-11 19:32:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:32:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:32:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:32:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:32:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:32:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:32:28 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:32:28 --> Total execution time: 0.0812
DEBUG - 2021-08-11 19:32:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:32:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:32:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:32:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:32:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:32:43 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:32:43 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:32:43 --> Total execution time: 0.0879
DEBUG - 2021-08-11 19:32:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:32:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:32:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:32:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:32:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:32:58 --> 0.0288 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:32:58 --> 0.0173 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:32:58 --> Total execution time: 0.1281
DEBUG - 2021-08-11 19:33:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:33:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:33:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:33:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:33:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:33:13 --> 0.0858 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:33:13 --> 0.1064 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:33:13 --> Total execution time: 0.3840
DEBUG - 2021-08-11 19:34:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:34:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:34:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:34:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:34:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:34:16 --> 0.0154 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:34:16 --> 0.0499 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:34:16 --> Total execution time: 2.0137
DEBUG - 2021-08-11 19:36:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:36:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:36:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:36:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:36:04 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:36:04 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:36:04 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:36:04 --> Total execution time: 0.0681
DEBUG - 2021-08-11 19:36:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:36:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:36:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:36:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:36:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:36:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:36:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:36:16 --> Total execution time: 0.0842
DEBUG - 2021-08-11 19:37:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:37:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:37:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:37:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:37:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:37:16 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:37:16 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:37:16 --> Total execution time: 0.0820
DEBUG - 2021-08-11 19:38:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:38:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:38:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:38:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:38:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:38:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:38:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:38:16 --> Total execution time: 0.0880
DEBUG - 2021-08-11 19:39:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:39:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:39:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:39:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:39:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:39:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:39:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:39:16 --> Total execution time: 0.0782
DEBUG - 2021-08-11 19:40:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:40:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:40:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:40:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:40:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:40:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:40:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:40:16 --> Total execution time: 0.0756
DEBUG - 2021-08-11 19:41:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:41:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:41:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:41:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:41:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:41:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:41:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:41:16 --> Total execution time: 0.0867
DEBUG - 2021-08-11 19:42:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:42:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:42:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:42:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:42:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:42:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:42:16 --> 0.0003 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:42:16 --> Total execution time: 0.0740
DEBUG - 2021-08-11 19:43:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:43:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:43:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:43:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:43:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:43:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:43:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:43:16 --> Total execution time: 0.0724
DEBUG - 2021-08-11 19:44:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:44:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:44:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:44:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:44:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:44:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:44:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:44:16 --> Total execution time: 0.0849
DEBUG - 2021-08-11 19:45:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:45:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:45:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:45:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:45:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:45:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:45:16 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:45:16 --> Total execution time: 0.0916
DEBUG - 2021-08-11 19:46:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:46:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:46:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:46:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:46:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:46:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:46:16 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:46:16 --> Total execution time: 0.0894
DEBUG - 2021-08-11 19:47:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:47:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:47:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:47:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:47:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:47:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:47:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:47:16 --> Total execution time: 0.0833
DEBUG - 2021-08-11 19:48:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:48:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:48:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:48:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:48:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:48:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:48:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:48:16 --> Total execution time: 0.0861
DEBUG - 2021-08-11 19:49:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:49:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:49:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:49:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:49:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:49:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:49:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:49:16 --> Total execution time: 0.0977
DEBUG - 2021-08-11 19:50:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:50:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:50:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:50:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:50:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:50:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:50:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:50:16 --> Total execution time: 0.0847
DEBUG - 2021-08-11 19:51:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:51:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:51:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:51:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:51:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:51:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:51:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:51:16 --> Total execution time: 0.0696
DEBUG - 2021-08-11 19:52:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:52:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:52:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:52:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:52:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:52:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:52:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:52:16 --> Total execution time: 0.0831
DEBUG - 2021-08-11 19:53:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:53:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:53:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:53:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:53:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:53:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:53:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:53:16 --> Total execution time: 0.0853
DEBUG - 2021-08-11 19:54:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:54:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:54:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:54:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:54:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:54:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:54:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:54:16 --> Total execution time: 0.0853
DEBUG - 2021-08-11 19:55:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:55:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:55:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:55:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:55:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:55:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:55:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:55:16 --> Total execution time: 0.0723
DEBUG - 2021-08-11 19:56:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:56:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:56:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:56:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:56:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:56:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:56:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:56:16 --> Total execution time: 0.0936
DEBUG - 2021-08-11 19:57:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:57:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:57:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:57:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:57:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:57:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:57:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:57:16 --> Total execution time: 0.0693
DEBUG - 2021-08-11 19:58:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:58:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:58:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:58:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:58:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:58:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:58:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:58:16 --> Total execution time: 0.0764
DEBUG - 2021-08-11 19:59:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 19:59:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 19:59:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 19:59:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 19:59:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 19:59:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 19:59:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 19:59:16 --> Total execution time: 0.0747
DEBUG - 2021-08-11 20:00:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 20:00:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 20:00:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 20:00:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 20:00:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 20:00:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 20:00:16 --> 0.0005 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 20:00:16 --> Total execution time: 0.0956
DEBUG - 2021-08-11 20:01:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 20:01:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 20:01:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 20:01:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 20:01:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 20:01:16 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 20:01:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 20:01:16 --> Total execution time: 0.0721
DEBUG - 2021-08-11 20:02:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 20:02:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 20:02:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 20:02:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 20:02:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 20:02:16 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 20:02:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 20:02:16 --> Total execution time: 0.0849
DEBUG - 2021-08-11 20:03:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 20:03:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 20:03:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 20:03:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 20:03:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 20:03:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 20:03:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 20:03:16 --> Total execution time: 0.0731
DEBUG - 2021-08-11 20:04:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 20:04:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 20:04:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 20:04:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 20:04:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 20:04:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 20:04:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 20:04:16 --> Total execution time: 0.0820
DEBUG - 2021-08-11 20:05:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 20:05:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 20:05:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 20:05:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 20:05:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-11 20:05:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-11 20:05:16 --> 0.0004 | SELECT * FROM `csvexportlog` ORDER BY `id` DESC
DEBUG - 2021-08-11 20:05:16 --> Total execution time: 0.0850
DEBUG - 2021-08-11 22:28:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 22:28:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 22:28:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 22:28:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 22:28:14 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-11 22:28:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-11 22:28:14 --> No URI present. Default controller set.
DEBUG - 2021-08-11 22:28:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-11 22:28:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-11 22:28:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-11 22:28:14 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-11 22:28:14 --> Form_validation class already loaded. Second attempt ignored.
QUERY - 2021-08-11 22:28:14 --> 0.03 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-11 22:28:14 --> Total execution time: 0.1604
