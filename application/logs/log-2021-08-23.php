<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2021-08-23 11:01:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:01:37 --> No URI present. Default controller set.
DEBUG - 2021-08-23 11:01:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:01:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:01:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:01:37 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 11:01:37 --> Form_validation class already loaded. Second attempt ignored.
QUERY - 2021-08-23 11:01:38 --> 0.1853 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 11:01:38 --> Total execution time: 0.3295
DEBUG - 2021-08-23 11:01:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:01:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:01:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:01:40 --> No URI present. Default controller set.
DEBUG - 2021-08-23 11:01:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:01:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:01:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:01:40 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 11:01:40 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:01:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:01:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:01:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:01:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:01:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:01:48 --> 2.8466 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-23 11:01:48 --> 0.8974 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-23 11:01:48 --> 4.0256 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-23 11:01:48 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 11:01:48 --> 0.0243 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:01:48 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:01:48 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:01:48 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 11:01:48 --> Total execution time: 7.8724
DEBUG - 2021-08-23 11:01:49 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:01:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:01:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:01:49 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:01:49 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 11:01:49 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:01:49 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:01:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:01:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:01:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:01:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-23 11:01:53 --> 4.4332 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-23 11:01:53 --> Total execution time: 4.5295
DEBUG - 2021-08-23 11:01:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:01:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:02:23 --> 29.525 | select count(id) as total from gpi_data
DEBUG - 2021-08-23 11:02:23 --> Total execution time: 33.9635
DEBUG - 2021-08-23 11:02:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:02:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:02:23 --> 0.0742 | select count(distinct(campaign_name)) as total from gpi_data
DEBUG - 2021-08-23 11:02:23 --> Total execution time: 34.0777
DEBUG - 2021-08-23 11:02:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:02:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:02:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:02:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:02:51 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:02:58 --> 2.8775 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-23 11:02:58 --> 0.8494 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-23 11:02:58 --> 2.8597 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-23 11:02:58 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 11:02:58 --> 0.0192 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:02:58 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:02:58 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:02:58 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 11:02:58 --> Total execution time: 6.8723
DEBUG - 2021-08-23 11:02:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:02:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:02:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:02:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:02:58 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 11:02:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:02:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:02:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:02:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:02:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:02:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-23 11:03:02 --> 3.3701 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-23 11:03:02 --> Total execution time: 3.4577
DEBUG - 2021-08-23 11:03:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:03:02 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 11:03:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:03:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:03:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-23 11:03:32 --> 29.7754 | select count(id) as total from gpi_data
DEBUG - 2021-08-23 11:03:32 --> Total execution time: 33.1777
DEBUG - 2021-08-23 11:03:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:03:32 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:03:32 --> 0.0806 | select count(distinct(campaign_name)) as total from gpi_data
DEBUG - 2021-08-23 11:03:32 --> Total execution time: 33.2904
DEBUG - 2021-08-23 11:03:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:03:32 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 11:03:32 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 11:03:32 --> 0.0686 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:03:32 --> 0.0013 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-23 11:03:32 --> 0.0029 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-23 11:03:32 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 11:03:32 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:03:32 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:03:32 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 11:03:32 --> Total execution time: 11.0953
DEBUG - 2021-08-23 11:03:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:03:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:03:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:03:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:03:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:03:48 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:03:48 --> 2.5914 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 11:03:48 --> 0.0575 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 11:03:48 --> 2.6121 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 11:03:48 --> 2.7333 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 11:03:48 --> 2.6221 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 11:03:48 --> 0.0433 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 11:03:48 --> 2.8448 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 11:03:48 --> 0.1111 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:03:48 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 11:03:48 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:03:48 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:03:48 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 11:03:48 --> 0.1171 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:03:48 --> Total execution time: 13.9446
DEBUG - 2021-08-23 11:04:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:04:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:04:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:04:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:04:05 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:04:05 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:04:05 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:04:05 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:04:05 --> Total execution time: 0.1311
DEBUG - 2021-08-23 11:04:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:04:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:04:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:04:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:04:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:04:20 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:04:20 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:04:20 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:04:20 --> Total execution time: 0.0791
DEBUG - 2021-08-23 11:04:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:04:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:04:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:04:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:04:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:04:35 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:04:35 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:04:35 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:04:35 --> Total execution time: 0.0835
DEBUG - 2021-08-23 11:04:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:04:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:04:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:04:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:04:50 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:04:50 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:04:50 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:04:50 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:04:50 --> Total execution time: 0.0941
DEBUG - 2021-08-23 11:05:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:05:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:05:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:05:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:05:05 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:05:05 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:05:05 --> 0.0006 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:05:05 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:05:05 --> Total execution time: 0.0928
DEBUG - 2021-08-23 11:05:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:05:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:05:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:05:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:05:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:05:21 --> 0.0009 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:05:21 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:05:21 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:05:21 --> Total execution time: 0.1350
DEBUG - 2021-08-23 11:05:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:05:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:05:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:05:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:05:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:05:35 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:05:35 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:05:35 --> 0.0005 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:05:35 --> Total execution time: 0.1082
DEBUG - 2021-08-23 11:05:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:05:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:05:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:05:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:05:50 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:05:50 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:05:50 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:05:50 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:05:50 --> Total execution time: 0.0829
DEBUG - 2021-08-23 11:06:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:06:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:06:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:06:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:06:05 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:06:05 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:06:05 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:06:05 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:06:05 --> Total execution time: 0.0758
DEBUG - 2021-08-23 11:06:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:06:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:06:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:06:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:06:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:06:20 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:06:20 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:06:20 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:06:20 --> Total execution time: 0.0841
DEBUG - 2021-08-23 11:06:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:06:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:06:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:06:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:06:26 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 11:06:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:06:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:06:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-23 11:06:38 --> 0.001 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:06:38 --> 2.4459 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 11:06:38 --> 0.0559 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 11:06:38 --> 2.4878 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 11:06:38 --> 2.467 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 11:06:38 --> 2.3778 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 11:06:38 --> 0.0449 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 11:06:38 --> 2.8657 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 11:06:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:06:38 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 11:06:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:06:38 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:06:38 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 11:06:38 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:06:38 --> Total execution time: 12.8310
DEBUG - 2021-08-23 11:06:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:06:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:06:38 --> 0.0051 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:06:38 --> 0.0007 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:06:38 --> 0.0019 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:06:38 --> Total execution time: 4.0511
DEBUG - 2021-08-23 11:06:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:06:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:06:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:06:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:06:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:06:42 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:06:42 --> 0.0675 | SELECT * FROM `csv_import` ORDER BY `id` DESC
QUERY - 2021-08-23 11:06:42 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 11:06:42 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:06:42 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:06:42 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 11:06:42 --> Total execution time: 0.1661
DEBUG - 2021-08-23 11:06:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:06:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:06:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:06:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:06:43 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 11:07:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:07:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:07:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:07:10 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:07:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:07:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:07:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-23 11:07:24 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:07:24 --> 26.4371 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 11:07:24 --> 0.0301 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-23 11:07:24 --> 2.9549 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 11:07:24 --> 0.0557 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 11:07:24 --> 3.6548 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 11:07:24 --> 2.633 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 11:07:24 --> 2.3121 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 11:07:24 --> 0.0441 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 11:07:24 --> 2.7657 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 11:07:24 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 11:07:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:07:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:07:24 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 11:07:24 --> Total execution time: 40.9706
DEBUG - 2021-08-23 11:07:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:07:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:07:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:07:24 --> 0.0188 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-23 11:07:24 --> Total execution time: 21.2015
DEBUG - 2021-08-23 11:07:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:07:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:07:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:07:24 --> 0.0004 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-23 11:07:24 --> Total execution time: 1.2269
DEBUG - 2021-08-23 11:07:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:07:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:07:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:07:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:07:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:07:43 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:07:43 --> 3.3932 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 11:07:43 --> 0.0683 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 11:07:43 --> 2.7558 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 11:07:43 --> 2.3767 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 11:07:43 --> 2.8009 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 11:07:43 --> 0.044 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 11:07:43 --> 2.6889 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 11:07:43 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:07:43 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 11:07:43 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:07:43 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:07:43 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 11:07:43 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:07:43 --> Total execution time: 14.2162
DEBUG - 2021-08-23 11:07:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:07:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:07:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:07:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:07:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:07:45 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:07:45 --> 0.1447 | INSERT INTO `csv_export` (`export_status`, `filter_col`, `created_datetime`) VALUES (0, 'null', '2021-08-23 11:07:44')
DEBUG - 2021-08-23 11:07:45 --> Total execution time: 0.2188
DEBUG - 2021-08-23 11:07:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:07:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:07:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:07:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:07:45 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 11:07:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:07:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:07:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-23 11:08:00 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:08:00 --> 3.8989 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 11:08:00 --> 0.1887 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 11:08:00 --> 2.9104 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 11:08:00 --> 2.9014 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 11:08:00 --> 2.4322 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 11:08:00 --> 0.0451 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 11:08:00 --> 3.0335 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 11:08:00 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:08:00 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 11:08:00 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:08:00 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:08:00 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 11:08:00 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '2'
QUERY - 2021-08-23 11:08:00 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:08:00 --> Total execution time: 15.4992
DEBUG - 2021-08-23 11:08:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:08:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:08:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:08:00 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:08:00 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '2'
QUERY - 2021-08-23 11:08:00 --> 0.0014 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:08:00 --> Total execution time: 2.0455
DEBUG - 2021-08-23 11:08:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:08:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:08:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:08:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:08:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:08:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:08:16 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:08:16 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '2'
QUERY - 2021-08-23 11:08:16 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:08:16 --> Total execution time: 0.0750
DEBUG - 2021-08-23 11:08:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:08:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:08:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:08:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:08:30 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:08:30 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:08:30 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:08:30 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '2'
QUERY - 2021-08-23 11:08:30 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:08:30 --> Total execution time: 0.0745
DEBUG - 2021-08-23 11:08:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:08:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:08:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:08:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:08:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:08:45 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:08:45 --> 2.661 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 11:08:45 --> 0.0539 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 11:08:45 --> 3.2531 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 11:08:45 --> 2.4253 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 11:08:45 --> 2.5668 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 11:08:45 --> 0.043 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 11:08:45 --> 2.4559 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 11:08:45 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:08:45 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 11:08:45 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:08:45 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:08:45 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 11:08:45 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '2'
QUERY - 2021-08-23 11:08:45 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:08:45 --> Total execution time: 13.5288
DEBUG - 2021-08-23 11:08:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:08:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:08:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:08:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:08:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:08:47 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:08:47 --> 0.1246 | INSERT INTO `csv_export` (`export_status`, `filter_col`, `created_datetime`) VALUES (0, 'null', '2021-08-23 11:08:46')
DEBUG - 2021-08-23 11:08:47 --> Total execution time: 0.1899
DEBUG - 2021-08-23 11:08:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:08:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:08:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:08:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:08:47 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 11:09:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:09:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:09:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-23 11:09:01 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:09:01 --> 3.0472 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 11:09:01 --> 0.0764 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 11:09:01 --> 3.421 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 11:09:01 --> 3.1359 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 11:09:01 --> 2.555 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 11:09:01 --> 0.0426 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 11:09:01 --> 2.3444 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 11:09:01 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:09:01 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 11:09:01 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:09:01 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:09:01 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 11:09:01 --> 0.0002 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '3'
QUERY - 2021-08-23 11:09:01 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '2'
QUERY - 2021-08-23 11:09:01 --> 0.0002 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:09:01 --> Total execution time: 14.7287
DEBUG - 2021-08-23 11:09:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:09:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:09:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:09:01 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:09:01 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '3'
QUERY - 2021-08-23 11:09:01 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '2'
QUERY - 2021-08-23 11:09:01 --> 0.0002 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:09:01 --> Total execution time: 1.2677
DEBUG - 2021-08-23 11:09:17 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:09:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:09:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:09:17 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:09:17 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:09:17 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:09:17 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:09:17 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '3'
QUERY - 2021-08-23 11:09:17 --> 0.0008 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '2'
QUERY - 2021-08-23 11:09:17 --> 0.0006 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:09:17 --> Total execution time: 0.1003
DEBUG - 2021-08-23 11:09:32 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:09:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:09:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:09:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:09:32 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:09:32 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:09:32 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:09:32 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '3'
QUERY - 2021-08-23 11:09:32 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '2'
QUERY - 2021-08-23 11:09:32 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:09:32 --> Total execution time: 0.0712
DEBUG - 2021-08-23 11:09:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:09:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:09:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:09:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:09:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:09:38 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:09:38 --> 0.0943 | INSERT INTO `csv_export` (`export_status`, `filter_col`, `created_datetime`) VALUES (0, 'null', '2021-08-23 11:09:38')
DEBUG - 2021-08-23 11:09:38 --> Total execution time: 0.1585
DEBUG - 2021-08-23 11:09:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:09:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:09:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:09:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:09:39 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 11:09:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:09:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:09:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-23 11:09:53 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:09:53 --> 2.7901 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 11:09:53 --> 0.055 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 11:09:53 --> 3.2222 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 11:09:53 --> 2.7894 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 11:09:53 --> 2.5776 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 11:09:53 --> 0.0432 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 11:09:53 --> 2.5675 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 11:09:53 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:09:53 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 11:09:53 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:09:53 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:09:53 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 11:09:53 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '4'
QUERY - 2021-08-23 11:09:53 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '3'
QUERY - 2021-08-23 11:09:53 --> 0.0002 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '2'
QUERY - 2021-08-23 11:09:53 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:09:53 --> Total execution time: 14.1214
DEBUG - 2021-08-23 11:09:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:09:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:09:53 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:09:53 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:09:53 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '4'
QUERY - 2021-08-23 11:09:53 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '3'
QUERY - 2021-08-23 11:09:53 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '2'
QUERY - 2021-08-23 11:09:53 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:09:53 --> Total execution time: 5.5027
DEBUG - 2021-08-23 11:10:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:10:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:10:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:10:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:10:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:10:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:10:08 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:10:08 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '4'
QUERY - 2021-08-23 11:10:08 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '3'
QUERY - 2021-08-23 11:10:08 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '2'
QUERY - 2021-08-23 11:10:08 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:10:08 --> Total execution time: 0.0760
DEBUG - 2021-08-23 11:10:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:10:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:10:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:10:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:10:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:10:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:10:23 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:10:23 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '4'
QUERY - 2021-08-23 11:10:23 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '3'
QUERY - 2021-08-23 11:10:23 --> 0.0002 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '2'
QUERY - 2021-08-23 11:10:23 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:10:23 --> Total execution time: 0.0707
DEBUG - 2021-08-23 11:10:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:10:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:10:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:10:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:10:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:10:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:10:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:10:38 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '4'
QUERY - 2021-08-23 11:10:38 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '3'
QUERY - 2021-08-23 11:10:38 --> 0.0002 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '2'
QUERY - 2021-08-23 11:10:38 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:10:38 --> Total execution time: 0.0836
DEBUG - 2021-08-23 11:10:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:10:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:10:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:10:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:10:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:10:53 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:10:53 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:10:53 --> 0.0005 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '4'
QUERY - 2021-08-23 11:10:53 --> 0.001 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '3'
QUERY - 2021-08-23 11:10:53 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '2'
QUERY - 2021-08-23 11:10:53 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:10:53 --> Total execution time: 0.1339
DEBUG - 2021-08-23 11:11:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:11:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:11:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:11:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:11:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:11:08 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:11:08 --> 0.0006 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:11:08 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '4'
QUERY - 2021-08-23 11:11:08 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '3'
QUERY - 2021-08-23 11:11:08 --> 0.0002 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '2'
QUERY - 2021-08-23 11:11:08 --> 0.0002 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:11:08 --> Total execution time: 0.1123
DEBUG - 2021-08-23 11:11:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:11:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:11:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:11:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:11:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:11:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:11:23 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:11:23 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '4'
QUERY - 2021-08-23 11:11:23 --> 0.0002 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '3'
QUERY - 2021-08-23 11:11:23 --> 0.0002 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '2'
QUERY - 2021-08-23 11:11:23 --> 0.0002 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:11:23 --> Total execution time: 0.0842
DEBUG - 2021-08-23 11:11:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:11:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:11:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:11:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:11:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:11:38 --> 0.0027 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:11:38 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:11:38 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '4'
QUERY - 2021-08-23 11:11:38 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '3'
QUERY - 2021-08-23 11:11:38 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '2'
QUERY - 2021-08-23 11:11:38 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:11:38 --> Total execution time: 0.0804
DEBUG - 2021-08-23 11:11:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:11:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:11:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:11:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:11:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:11:53 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:11:53 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:11:53 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '4'
QUERY - 2021-08-23 11:11:53 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '3'
QUERY - 2021-08-23 11:11:53 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '2'
QUERY - 2021-08-23 11:11:53 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:11:53 --> Total execution time: 0.0886
DEBUG - 2021-08-23 11:12:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:12:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:12:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:12:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:12:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:12:08 --> 0.0011 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:12:08 --> 0.0005 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:12:08 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '4'
QUERY - 2021-08-23 11:12:08 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '3'
QUERY - 2021-08-23 11:12:08 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '2'
QUERY - 2021-08-23 11:12:08 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:12:08 --> Total execution time: 0.0842
DEBUG - 2021-08-23 11:12:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:12:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:12:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:12:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:12:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:12:23 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:12:23 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:12:23 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '4'
QUERY - 2021-08-23 11:12:23 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '3'
QUERY - 2021-08-23 11:12:23 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '2'
QUERY - 2021-08-23 11:12:23 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:12:23 --> Total execution time: 0.0701
DEBUG - 2021-08-23 11:12:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:12:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:12:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:12:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:12:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:12:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:12:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:12:38 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '4'
QUERY - 2021-08-23 11:12:38 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '3'
QUERY - 2021-08-23 11:12:38 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '2'
QUERY - 2021-08-23 11:12:38 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:12:38 --> Total execution time: 0.0804
DEBUG - 2021-08-23 11:12:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:12:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:12:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:12:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:12:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:12:53 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:12:53 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:12:53 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '4'
QUERY - 2021-08-23 11:12:53 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '3'
QUERY - 2021-08-23 11:12:53 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '2'
QUERY - 2021-08-23 11:12:53 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:12:53 --> Total execution time: 0.0965
DEBUG - 2021-08-23 11:13:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:13:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:13:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:13:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:13:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:13:08 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:13:08 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:13:08 --> 0.0005 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '4'
QUERY - 2021-08-23 11:13:08 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '3'
QUERY - 2021-08-23 11:13:08 --> 0.0002 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '2'
QUERY - 2021-08-23 11:13:08 --> 0.0002 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:13:08 --> Total execution time: 0.0810
DEBUG - 2021-08-23 11:13:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:13:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:13:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:13:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:13:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:13:23 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:13:23 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:13:23 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '4'
QUERY - 2021-08-23 11:13:23 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '3'
QUERY - 2021-08-23 11:13:23 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '2'
QUERY - 2021-08-23 11:13:23 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:13:23 --> Total execution time: 0.0875
DEBUG - 2021-08-23 11:13:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:13:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:13:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:13:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:13:25 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 11:13:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:13:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:13:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:13:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:13:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:13:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:13:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:13:38 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '4'
QUERY - 2021-08-23 11:13:38 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '3'
QUERY - 2021-08-23 11:13:38 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '2'
QUERY - 2021-08-23 11:13:38 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:13:38 --> Total execution time: 0.0851
QUERY - 2021-08-23 11:13:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:13:40 --> 2.5553 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 11:13:40 --> 0.0881 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 11:13:40 --> 3.5673 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 11:13:40 --> 2.3773 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 11:13:40 --> 2.8552 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 11:13:40 --> 0.0442 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 11:13:40 --> 2.6231 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 11:13:40 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:13:40 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 11:13:40 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:13:40 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:13:40 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 11:13:40 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '4'
QUERY - 2021-08-23 11:13:40 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '3'
QUERY - 2021-08-23 11:13:40 --> 0.0002 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '2'
QUERY - 2021-08-23 11:13:40 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:13:40 --> Total execution time: 14.2011
DEBUG - 2021-08-23 11:13:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:13:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:13:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:13:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:13:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:13:56 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:13:56 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:13:56 --> 0.0005 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '4'
QUERY - 2021-08-23 11:13:56 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '3'
QUERY - 2021-08-23 11:13:56 --> 0.0002 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '2'
QUERY - 2021-08-23 11:13:56 --> 0.0002 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:13:56 --> Total execution time: 0.0888
DEBUG - 2021-08-23 11:14:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:14:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:14:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:14:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:14:11 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:14:11 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:14:11 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:14:11 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '4'
QUERY - 2021-08-23 11:14:11 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '3'
QUERY - 2021-08-23 11:14:11 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '2'
QUERY - 2021-08-23 11:14:11 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:14:11 --> Total execution time: 0.0806
DEBUG - 2021-08-23 11:14:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:14:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:14:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:14:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:14:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:14:26 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:14:26 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:14:26 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '4'
QUERY - 2021-08-23 11:14:26 --> 0.0002 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '3'
QUERY - 2021-08-23 11:14:26 --> 0.0002 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '2'
QUERY - 2021-08-23 11:14:26 --> 0.0002 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:14:26 --> Total execution time: 0.0822
DEBUG - 2021-08-23 11:14:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:14:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:14:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:14:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:14:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:14:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:14:41 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:14:41 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '4'
QUERY - 2021-08-23 11:14:41 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '3'
QUERY - 2021-08-23 11:14:41 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '2'
QUERY - 2021-08-23 11:14:41 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:14:41 --> Total execution time: 0.0757
DEBUG - 2021-08-23 11:14:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:14:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:14:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:14:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:14:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:14:56 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:14:56 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:14:56 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '4'
QUERY - 2021-08-23 11:14:56 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '3'
QUERY - 2021-08-23 11:14:56 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '2'
QUERY - 2021-08-23 11:14:56 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:14:56 --> Total execution time: 0.0729
DEBUG - 2021-08-23 11:15:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:15:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:15:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:15:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:15:11 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:15:11 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:15:11 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:15:11 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '4'
QUERY - 2021-08-23 11:15:11 --> 0.0002 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '3'
QUERY - 2021-08-23 11:15:11 --> 0.0002 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '2'
QUERY - 2021-08-23 11:15:11 --> 0.0002 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:15:11 --> Total execution time: 0.0814
DEBUG - 2021-08-23 11:15:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:15:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:15:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:15:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:15:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:15:26 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:15:26 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:15:26 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '4'
QUERY - 2021-08-23 11:15:26 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '3'
QUERY - 2021-08-23 11:15:26 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '2'
QUERY - 2021-08-23 11:15:26 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:15:26 --> Total execution time: 0.0872
DEBUG - 2021-08-23 11:15:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:15:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:15:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:15:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:15:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:15:41 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:15:41 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:15:41 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '4'
QUERY - 2021-08-23 11:15:41 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '3'
QUERY - 2021-08-23 11:15:41 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '2'
QUERY - 2021-08-23 11:15:41 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:15:41 --> Total execution time: 0.0761
DEBUG - 2021-08-23 11:15:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:15:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:15:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:15:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:15:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:15:56 --> 0.0011 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:15:56 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:15:56 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '4'
QUERY - 2021-08-23 11:15:56 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '3'
QUERY - 2021-08-23 11:15:56 --> 0.0002 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '2'
QUERY - 2021-08-23 11:15:56 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:15:56 --> Total execution time: 0.0933
DEBUG - 2021-08-23 11:15:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:15:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:15:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:15:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:15:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:15:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:15:58 --> 0.06 | SELECT * FROM `csv_import` ORDER BY `id` DESC
QUERY - 2021-08-23 11:15:58 --> 0.0016 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 11:15:58 --> 0.0011 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:15:58 --> 0.0013 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:15:58 --> 0.0012 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 11:15:58 --> Total execution time: 0.1468
DEBUG - 2021-08-23 11:16:19 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:16:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:16:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:16:19 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:16:19 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:16:19 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:16:19 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-23 11:16:19 --> Total execution time: 0.0779
DEBUG - 2021-08-23 11:16:32 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:16:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:16:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:16:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:16:32 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 11:16:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:16:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:16:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-23 11:16:44 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:16:44 --> 2.8867 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 11:16:44 --> 0.0606 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 11:16:44 --> 2.4007 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 11:16:44 --> 2.4806 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 11:16:44 --> 2.4738 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 11:16:44 --> 0.0441 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 11:16:44 --> 2.5056 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 11:16:44 --> 0.0007 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:16:44 --> 0.0008 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 11:16:44 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:16:44 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:16:44 --> 0.0007 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 11:16:44 --> 0.0007 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '4'
QUERY - 2021-08-23 11:16:44 --> 0.0005 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '3'
QUERY - 2021-08-23 11:16:44 --> 0.0005 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '2'
QUERY - 2021-08-23 11:16:44 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:16:44 --> Total execution time: 12.9394
DEBUG - 2021-08-23 11:16:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:16:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:16:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:16:44 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-23 11:16:44 --> Total execution time: 5.7626
DEBUG - 2021-08-23 11:16:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:16:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:16:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:16:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:16:48 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 11:17:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:17:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:17:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-23 11:17:04 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:17:04 --> 2.5845 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 11:17:04 --> 0.055 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 11:17:04 --> 2.467 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 11:17:04 --> 2.5755 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 11:17:04 --> 2.7009 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 11:17:04 --> 0.0428 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 11:17:04 --> 5.1578 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 11:17:04 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:17:04 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 11:17:04 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:17:04 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:17:04 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 11:17:04 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '4'
QUERY - 2021-08-23 11:17:04 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '3'
QUERY - 2021-08-23 11:17:04 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '2'
QUERY - 2021-08-23 11:17:04 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:17:04 --> Total execution time: 15.6565
DEBUG - 2021-08-23 11:17:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:17:04 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:17:04 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:17:04 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:17:04 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '4'
QUERY - 2021-08-23 11:17:04 --> 0.0002 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '3'
QUERY - 2021-08-23 11:17:04 --> 0.0002 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '2'
QUERY - 2021-08-23 11:17:04 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:17:04 --> Total execution time: 3.5980
DEBUG - 2021-08-23 11:17:06 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:17:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:17:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:17:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:17:06 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:17:06 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:17:06 --> 0.1432 | INSERT INTO `csv_export` (`export_status`, `filter_col`, `created_datetime`) VALUES (0, 'null', '2021-08-23 11:17:06')
DEBUG - 2021-08-23 11:17:06 --> Total execution time: 0.2132
DEBUG - 2021-08-23 11:17:06 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:17:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:17:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:17:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:17:06 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 11:17:19 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:17:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:17:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-23 11:17:22 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:17:22 --> 3.0109 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 11:17:22 --> 0.054 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 11:17:22 --> 2.6796 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 11:17:22 --> 3.3304 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 11:17:22 --> 3.3888 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 11:17:22 --> 0.0449 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 11:17:22 --> 2.594 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 11:17:22 --> 0.0008 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:17:22 --> 0.0009 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 11:17:22 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:17:22 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:17:22 --> 0.0007 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 11:17:22 --> 0.0006 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '5'
QUERY - 2021-08-23 11:17:22 --> 0.0006 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '4'
QUERY - 2021-08-23 11:17:22 --> 0.0005 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '3'
QUERY - 2021-08-23 11:17:22 --> 0.0011 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '2'
QUERY - 2021-08-23 11:17:22 --> 0.0018 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:17:22 --> Total execution time: 15.1946
DEBUG - 2021-08-23 11:17:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:17:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:17:22 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:17:22 --> 0.0009 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:17:22 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '5'
QUERY - 2021-08-23 11:17:22 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '4'
QUERY - 2021-08-23 11:17:22 --> 0.0002 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '3'
QUERY - 2021-08-23 11:17:22 --> 0.0002 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '2'
QUERY - 2021-08-23 11:17:22 --> 0.0002 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:17:22 --> Total execution time: 2.7109
DEBUG - 2021-08-23 11:17:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:17:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:17:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:17:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:17:37 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:17:37 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:17:37 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:17:37 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '5'
QUERY - 2021-08-23 11:17:37 --> 0.0002 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '4'
QUERY - 2021-08-23 11:17:37 --> 0.0002 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '3'
QUERY - 2021-08-23 11:17:37 --> 0.0002 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '2'
QUERY - 2021-08-23 11:17:37 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:17:37 --> Total execution time: 0.0758
DEBUG - 2021-08-23 11:17:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:17:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:17:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:17:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:17:52 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:17:52 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:17:52 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:17:52 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '5'
QUERY - 2021-08-23 11:17:52 --> 0.0002 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '4'
QUERY - 2021-08-23 11:17:52 --> 0.0002 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '3'
QUERY - 2021-08-23 11:17:52 --> 0.0002 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '2'
QUERY - 2021-08-23 11:17:52 --> 0.0002 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:17:52 --> Total execution time: 0.0676
DEBUG - 2021-08-23 11:18:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:18:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:18:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:18:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:18:07 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:18:07 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:18:07 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:18:07 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '5'
QUERY - 2021-08-23 11:18:07 --> 0.0002 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '4'
QUERY - 2021-08-23 11:18:07 --> 0.0002 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '3'
QUERY - 2021-08-23 11:18:07 --> 0.0002 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '2'
QUERY - 2021-08-23 11:18:07 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:18:07 --> Total execution time: 0.0722
DEBUG - 2021-08-23 11:18:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:18:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:18:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:18:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:18:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:18:22 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:18:22 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:18:22 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '5'
QUERY - 2021-08-23 11:18:22 --> 0.0002 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '4'
QUERY - 2021-08-23 11:18:22 --> 0.0002 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '3'
QUERY - 2021-08-23 11:18:22 --> 0.0002 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '2'
QUERY - 2021-08-23 11:18:22 --> 0.0002 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:18:22 --> Total execution time: 0.0713
DEBUG - 2021-08-23 11:18:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:18:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:18:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:18:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:18:37 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:18:37 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:18:37 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:18:37 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '5'
QUERY - 2021-08-23 11:18:37 --> 0.0002 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '4'
QUERY - 2021-08-23 11:18:37 --> 0.0002 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '3'
QUERY - 2021-08-23 11:18:37 --> 0.0002 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '2'
QUERY - 2021-08-23 11:18:37 --> 0.0002 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:18:37 --> Total execution time: 0.0825
DEBUG - 2021-08-23 11:18:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:18:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:18:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:18:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:18:52 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:18:52 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:18:52 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:18:52 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '5'
QUERY - 2021-08-23 11:18:52 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '4'
QUERY - 2021-08-23 11:18:52 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '3'
QUERY - 2021-08-23 11:18:52 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '2'
QUERY - 2021-08-23 11:18:52 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:18:52 --> Total execution time: 0.0687
DEBUG - 2021-08-23 11:19:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:19:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:19:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:19:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:19:02 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 11:19:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:19:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:19:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:19:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:19:07 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:19:07 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:19:07 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:19:07 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '5'
QUERY - 2021-08-23 11:19:07 --> 0.0002 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '4'
QUERY - 2021-08-23 11:19:07 --> 0.0002 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '3'
QUERY - 2021-08-23 11:19:07 --> 0.0002 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '2'
QUERY - 2021-08-23 11:19:07 --> 0.0002 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:19:07 --> Total execution time: 0.0802
QUERY - 2021-08-23 11:19:16 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:19:16 --> 2.4498 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 11:19:16 --> 0.0546 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 11:19:16 --> 2.5548 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 11:19:16 --> 2.7786 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 11:19:16 --> 3.3423 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 11:19:16 --> 0.0449 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 11:19:16 --> 2.4971 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 11:19:16 --> 0.0013 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:19:16 --> 0.0008 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 11:19:16 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:19:16 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:19:16 --> 0.0006 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 11:19:16 --> 0.001 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '5'
QUERY - 2021-08-23 11:19:16 --> 0.0007 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '4'
QUERY - 2021-08-23 11:19:16 --> 0.0006 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '3'
QUERY - 2021-08-23 11:19:16 --> 0.0005 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '2'
QUERY - 2021-08-23 11:19:16 --> 0.0008 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:19:16 --> Total execution time: 13.8204
DEBUG - 2021-08-23 11:19:32 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:19:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:19:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:19:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:19:32 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:19:32 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:19:32 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:19:32 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '5'
QUERY - 2021-08-23 11:19:32 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '4'
QUERY - 2021-08-23 11:19:32 --> 0.0002 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '3'
QUERY - 2021-08-23 11:19:32 --> 0.0002 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '2'
QUERY - 2021-08-23 11:19:32 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:19:32 --> Total execution time: 0.0788
DEBUG - 2021-08-23 11:19:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:19:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:19:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:19:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:19:47 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:19:47 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:19:47 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:19:47 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '5'
QUERY - 2021-08-23 11:19:47 --> 0.0002 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '4'
QUERY - 2021-08-23 11:19:47 --> 0.0002 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '3'
QUERY - 2021-08-23 11:19:47 --> 0.0002 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '2'
QUERY - 2021-08-23 11:19:47 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:19:47 --> Total execution time: 0.0697
DEBUG - 2021-08-23 11:20:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:20:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:20:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:20:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:20:02 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:20:02 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:20:02 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 11:20:02 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '5'
QUERY - 2021-08-23 11:20:02 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '4'
QUERY - 2021-08-23 11:20:02 --> 0.0002 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '3'
QUERY - 2021-08-23 11:20:02 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '2'
QUERY - 2021-08-23 11:20:02 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-23 11:20:02 --> Total execution time: 0.1203
DEBUG - 2021-08-23 11:20:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:20:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:20:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:20:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:20:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 11:20:16 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:20:16 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-23 11:20:16 --> Total execution time: 0.0820
DEBUG - 2021-08-23 11:20:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:20:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:20:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:20:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:20:18 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 11:20:18 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 11:20:18 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:20:18 --> 0.0074 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-23 11:20:18 --> 0.0004 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-23 11:20:18 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 11:20:18 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:20:18 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:20:18 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 11:20:18 --> Total execution time: 0.0838
DEBUG - 2021-08-23 11:20:19 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:20:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:20:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:20:19 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:20:19 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 11:20:50 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 11:21:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:21:09 --> 30.9721 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 11:21:09 --> 0.0974 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-23 11:21:09 --> 2.6172 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 11:21:09 --> 0.055 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 11:21:09 --> 3.1386 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 11:21:09 --> 3.7418 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 11:21:09 --> 2.8775 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 11:21:09 --> 0.1307 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 11:21:09 --> 6.3572 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 11:21:09 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 11:21:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:21:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:21:09 --> 0.0011 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 11:21:09 --> Total execution time: 50.0800
DEBUG - 2021-08-23 11:23:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:23:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:23:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:23:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:23:55 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 11:24:17 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 11:24:31 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:24:31 --> 21.9906 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 11:24:31 --> 0.0384 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-23 11:24:31 --> 2.7785 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 11:24:31 --> 0.0546 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 11:24:31 --> 2.9791 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 11:24:31 --> 2.9447 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 11:24:31 --> 2.4087 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 11:24:31 --> 0.0452 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 11:24:31 --> 2.8791 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 11:24:31 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 11:24:31 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:24:31 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:24:31 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 11:24:31 --> Total execution time: 36.2042
DEBUG - 2021-08-23 11:29:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:29:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:29:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:29:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:29:51 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 11:30:13 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 11:30:25 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:30:25 --> 21.6919 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 11:30:25 --> 0.0371 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-23 11:30:25 --> 2.3225 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 11:30:25 --> 0.099 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 11:30:25 --> 2.4463 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 11:30:25 --> 2.3546 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 11:30:25 --> 3.0321 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 11:30:25 --> 0.0441 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 11:30:25 --> 2.3455 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 11:30:25 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 11:30:25 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:30:25 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:30:25 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 11:30:25 --> Total execution time: 34.4642
DEBUG - 2021-08-23 11:30:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:30:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:30:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:30:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:30:56 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 11:31:18 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 11:31:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:31:31 --> 21.8142 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 11:31:31 --> 0.0392 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-23 11:31:31 --> 2.4113 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 11:31:31 --> 0.0543 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 11:31:31 --> 2.4768 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 11:31:31 --> 2.3228 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 11:31:31 --> 2.6227 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 11:31:31 --> 0.0436 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 11:31:31 --> 2.6344 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 11:31:31 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 11:31:31 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:31:31 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:31:31 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 11:31:31 --> Total execution time: 34.4899
DEBUG - 2021-08-23 11:41:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:41:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:41:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:41:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:41:13 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 11:41:35 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 11:41:48 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:41:48 --> 21.5392 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 11:41:48 --> 0.0384 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-23 11:41:48 --> 2.3664 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 11:41:48 --> 0.0554 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 11:41:48 --> 3.0229 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 11:41:48 --> 2.5428 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 11:41:48 --> 2.4565 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 11:41:48 --> 0.044 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 11:41:48 --> 2.5276 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 11:41:48 --> 0.0009 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 11:41:48 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:41:48 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:41:48 --> 0.0007 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 11:41:48 --> Total execution time: 34.6878
DEBUG - 2021-08-23 11:42:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:42:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:42:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:42:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:42:03 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 11:42:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:42:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:42:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:42:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:42:15 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 11:42:39 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 11:42:53 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:42:53 --> 23.8425 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 11:42:53 --> 0.0395 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-23 11:42:53 --> 2.4317 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 11:42:53 --> 0.055 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 11:42:53 --> 2.8718 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 11:42:53 --> 2.8247 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 11:42:53 --> 3.2338 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 11:42:53 --> 0.0459 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 11:42:53 --> 2.5573 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 11:42:53 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 11:42:53 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:42:53 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:42:53 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 11:42:53 --> Total execution time: 37.9932
DEBUG - 2021-08-23 11:43:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:43:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:43:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:43:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:43:13 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 11:43:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:43:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:43:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:43:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:43:13 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 11:44:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:44:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:44:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:44:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:44:41 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 11:44:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:44:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:44:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:44:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:44:55 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 11:45:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:45:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:45:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:45:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:45:13 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 11:48:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:48:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:48:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:48:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:48:24 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 11:48:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:48:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:48:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:48:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:48:34 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 11:48:44 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 11:48:57 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:48:57 --> 2.7019 | SELECT COUNT(*) AS `numrows` FROM `gpi_data` WHERE `circle` LIKE '%CHENNAI%' ESCAPE '!' AND  `year` LIKE '%2019%' ESCAPE '!'
QUERY - 2021-08-23 11:48:57 --> 6.9321 | SELECT * FROM `gpi_data` WHERE `circle` LIKE '%CHENNAI%' ESCAPE '!' AND  `year` LIKE '%2019%' ESCAPE '!' ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-23 11:48:57 --> 2.8696 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 11:48:57 --> 0.0633 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 11:48:57 --> 2.7447 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 11:48:57 --> 2.4221 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 11:48:57 --> 2.6107 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 11:48:57 --> 0.0437 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 11:48:57 --> 2.4679 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 11:48:57 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 11:48:57 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:48:57 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:48:57 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 11:48:57 --> Total execution time: 22.9441
DEBUG - 2021-08-23 11:49:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:49:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:49:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:49:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:49:03 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 11:49:26 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 11:49:42 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:49:42 --> 23.2018 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 11:49:42 --> 0.0391 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-23 11:49:42 --> 2.6997 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 11:49:42 --> 0.0552 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 11:49:42 --> 3.4808 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 11:49:42 --> 2.648 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 11:49:42 --> 4.4935 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 11:49:42 --> 0.0438 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 11:49:42 --> 3.0568 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 11:49:42 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 11:49:42 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:49:42 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:49:42 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 11:49:42 --> Total execution time: 39.7913
DEBUG - 2021-08-23 11:51:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:51:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:51:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:51:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:51:29 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 11:51:52 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:52:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:52:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:52:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:52:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:52:12 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 11:52:34 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:53:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:53:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:53:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:53:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:53:40 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 11:54:03 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 11:54:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:54:16 --> 23.1334 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 11:54:16 --> 0.0388 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-23 11:54:16 --> 2.6431 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 11:54:16 --> 0.0553 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 11:54:16 --> 2.3559 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 11:54:16 --> 2.4554 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 11:54:16 --> 2.3886 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 11:54:16 --> 0.0436 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 11:54:16 --> 3.2792 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 11:54:16 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 11:54:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:54:16 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:54:16 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 11:54:16 --> Total execution time: 36.4787
DEBUG - 2021-08-23 11:54:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:54:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:54:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:54:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:54:33 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 11:54:56 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:55:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 11:55:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 11:55:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 11:55:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 11:55:38 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 11:56:05 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 11:56:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:56:31 --> 27.57 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 11:56:31 --> 0.0277 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-23 11:56:31 --> 7.1706 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 11:56:31 --> 0.1319 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 11:56:31 --> 4.647 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 11:56:31 --> 6.0085 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 11:56:31 --> 3.4665 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 11:56:31 --> 0.0436 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 11:56:31 --> 4.0777 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 11:56:31 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 11:56:31 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:56:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 11:56:31 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 11:56:31 --> Total execution time: 53.2290
DEBUG - 2021-08-23 12:05:19 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 12:05:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 12:05:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 12:05:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 12:05:20 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 12:05:42 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 12:05:55 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:05:55 --> 22.4324 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 12:05:55 --> 0.038 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-23 12:05:55 --> 2.6793 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 12:05:55 --> 0.055 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 12:05:55 --> 2.5349 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 12:05:55 --> 2.5872 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 12:05:55 --> 2.4334 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 12:05:55 --> 0.0433 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 12:05:55 --> 2.7901 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 12:05:55 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 12:05:55 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:05:55 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:05:55 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 12:05:55 --> Total execution time: 35.6807
DEBUG - 2021-08-23 12:05:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 12:05:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 12:11:49 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 12:11:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 12:11:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 12:11:49 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 12:11:49 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 12:12:11 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 12:12:24 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:12:24 --> 21.3389 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 12:12:24 --> 0.0387 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-23 12:12:24 --> 2.7779 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 12:12:24 --> 0.0549 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 12:12:24 --> 2.7792 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 12:12:24 --> 2.512 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 12:12:24 --> 3.0445 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 12:12:24 --> 0.0424 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 12:12:24 --> 2.6457 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 12:12:24 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 12:12:24 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:12:24 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:12:24 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 12:12:24 --> Total execution time: 35.3168
DEBUG - 2021-08-23 12:14:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 12:14:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 12:14:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 12:14:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 12:14:11 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 12:14:33 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 12:14:46 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:14:46 --> 21.785 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 12:14:46 --> 0.0379 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-23 12:14:46 --> 2.4225 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 12:14:46 --> 0.0553 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 12:14:46 --> 2.3891 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 12:14:46 --> 2.5886 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 12:14:46 --> 2.4658 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 12:14:46 --> 0.0447 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 12:14:46 --> 2.5344 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 12:14:46 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 12:14:46 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:14:46 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:14:46 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 12:14:46 --> Total execution time: 34.4193
DEBUG - 2021-08-23 12:14:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 12:14:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 12:14:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 12:14:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 12:14:52 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 12:14:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 12:14:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 12:14:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 12:14:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 12:14:53 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 12:15:00 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 12:15:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:15:13 --> 0.8193 | SELECT COUNT(*) AS `numrows` FROM `gpi_data` WHERE `campaign_name` LIKE '%GPI-OIAMP 3%' ESCAPE '!'
QUERY - 2021-08-23 12:15:13 --> 6.8226 | SELECT * FROM `gpi_data` WHERE `campaign_name` LIKE '%GPI-OIAMP 3%' ESCAPE '!' ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-23 12:15:13 --> 2.7053 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 12:15:13 --> 0.119 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 12:15:13 --> 2.5905 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 12:15:13 --> 2.4881 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 12:15:13 --> 2.4113 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 12:15:13 --> 0.0436 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 12:15:13 --> 2.4894 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 12:15:13 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 12:15:13 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:15:13 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:15:13 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 12:15:13 --> Total execution time: 20.5714
DEBUG - 2021-08-23 12:15:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 12:15:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 12:15:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 12:15:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 12:15:24 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 12:15:46 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 12:15:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:15:58 --> 22.2031 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 12:15:58 --> 0.0386 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-23 12:15:58 --> 2.4013 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 12:15:58 --> 0.055 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 12:15:58 --> 2.3671 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 12:15:58 --> 2.7886 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 12:15:58 --> 2.3105 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 12:15:58 --> 0.044 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 12:15:58 --> 2.5234 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 12:15:58 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 12:15:58 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:15:58 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:15:58 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 12:15:58 --> Total execution time: 34.8012
DEBUG - 2021-08-23 12:26:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 12:26:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 12:26:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 12:26:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 12:26:52 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 12:27:14 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 12:27:27 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:27:27 --> 22.671 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 12:27:27 --> 0.0385 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-23 12:27:27 --> 2.4886 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 12:27:27 --> 0.0539 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 12:27:27 --> 2.4354 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 12:27:27 --> 2.5219 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 12:27:27 --> 3.0661 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 12:27:27 --> 0.0433 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 12:27:27 --> 2.3571 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 12:27:27 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 12:27:27 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:27:27 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:27:27 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 12:27:27 --> Total execution time: 35.7637
DEBUG - 2021-08-23 12:29:49 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 12:29:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 12:29:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 12:29:49 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 12:29:49 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 12:30:10 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 12:30:23 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:30:23 --> 21.2781 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 12:30:23 --> 0.0378 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-23 12:30:23 --> 2.5432 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 12:30:23 --> 0.0558 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 12:30:23 --> 3.1541 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 12:30:23 --> 2.5789 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 12:30:23 --> 2.3336 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 12:30:23 --> 0.0435 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 12:30:23 --> 2.5227 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 12:30:23 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 12:30:23 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:30:23 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:30:23 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 12:30:23 --> Total execution time: 34.6286
DEBUG - 2021-08-23 12:30:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 12:30:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 12:30:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 12:30:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 12:30:26 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 12:30:49 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 12:31:02 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:31:02 --> 23.0028 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 12:31:02 --> 0.0391 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-23 12:31:02 --> 3.2319 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 12:31:02 --> 0.0553 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 12:31:02 --> 2.489 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 12:31:02 --> 2.4225 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 12:31:02 --> 2.3659 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 12:31:02 --> 0.044 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 12:31:02 --> 2.345 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 12:31:02 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 12:31:02 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:31:02 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:31:02 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 12:31:02 --> Total execution time: 36.0699
DEBUG - 2021-08-23 12:31:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 12:31:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 12:31:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 12:31:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 12:31:29 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 12:31:51 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 12:32:04 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:32:04 --> 22.2836 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 12:32:04 --> 0.0385 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-23 12:32:04 --> 3.1776 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 12:32:04 --> 0.0555 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 12:32:04 --> 2.4781 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 12:32:04 --> 2.3117 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 12:32:04 --> 2.4103 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 12:32:04 --> 0.0436 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 12:32:04 --> 2.4119 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 12:32:04 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 12:32:04 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:32:04 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:32:04 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 12:32:04 --> Total execution time: 35.2968
DEBUG - 2021-08-23 12:34:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 12:34:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 12:34:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 12:34:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 12:34:22 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 12:34:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 12:34:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 12:34:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 12:34:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 12:34:25 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 12:34:25 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 12:34:25 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:34:25 --> 0.0007 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-23 12:34:25 --> 0.0004 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-23 12:34:25 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 12:34:25 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:34:25 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:34:25 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 12:34:25 --> Total execution time: 0.0864
DEBUG - 2021-08-23 12:34:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 12:34:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 12:34:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 12:34:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 12:34:28 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 12:34:53 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 12:35:07 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 12:35:25 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:35:25 --> 30.7892 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 12:35:25 --> 0.0513 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-23 12:35:25 --> 4.8848 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 12:35:25 --> 0.0794 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 12:35:25 --> 6.5349 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 12:35:25 --> 5.3802 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 12:35:25 --> 6.5492 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 12:35:25 --> 0.1235 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 12:35:25 --> 8.4976 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 12:35:25 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 12:35:25 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:35:25 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:35:25 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 12:35:25 --> Total execution time: 62.9926
QUERY - 2021-08-23 12:35:35 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:35:35 --> 39.4804 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 12:35:35 --> 0.0716 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-23 12:35:35 --> 6.0803 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 12:35:35 --> 0.2274 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 12:35:35 --> 7.5499 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 12:35:35 --> 6.9673 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 12:35:35 --> 3.2769 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 12:35:35 --> 0.0442 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 12:35:35 --> 3.4027 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 12:35:35 --> 0.001 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 12:35:35 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:35:35 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:35:35 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 12:35:35 --> Total execution time: 67.1793
DEBUG - 2021-08-23 12:42:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 12:42:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 12:42:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 12:42:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 12:42:13 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 12:42:35 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 12:42:49 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:42:49 --> 21.9472 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 12:42:49 --> 0.0384 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-23 12:42:49 --> 3.0014 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 12:42:49 --> 0.0538 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 12:42:49 --> 2.4899 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 12:42:49 --> 2.5975 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 12:42:49 --> 2.3464 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 12:42:49 --> 0.0433 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 12:42:49 --> 2.8788 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 12:42:49 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 12:42:49 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:42:49 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:42:49 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 12:42:49 --> Total execution time: 35.4906
DEBUG - 2021-08-23 12:42:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 12:42:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 12:42:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 12:42:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 12:42:53 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 12:43:15 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 12:43:17 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 12:43:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 12:43:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 12:43:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 12:43:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 12:43:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 12:43:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 12:43:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 12:43:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-23 12:43:29 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:43:29 --> 22.1708 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 12:43:29 --> 0.0605 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10, 10
QUERY - 2021-08-23 12:43:29 --> 3.0236 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 12:43:29 --> 0.0534 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 12:43:29 --> 3.3121 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 12:43:29 --> 2.5665 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 12:43:29 --> 2.3799 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 12:43:29 --> 0.0521 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 12:43:29 --> 2.7022 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 12:43:29 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 12:43:29 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:43:29 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:43:29 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 12:43:29 --> Total execution time: 36.3940
DEBUG - 2021-08-23 12:43:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 12:43:29 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 12:43:52 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 12:44:06 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:44:06 --> 22.2858 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 12:44:06 --> 0.0386 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10, 10
QUERY - 2021-08-23 12:44:06 --> 3.7015 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 12:44:06 --> 0.0536 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 12:44:06 --> 2.5128 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 12:44:06 --> 2.5326 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 12:44:06 --> 2.4997 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 12:44:06 --> 0.0427 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 12:44:06 --> 2.5432 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 12:44:06 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 12:44:06 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:44:06 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:44:06 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 12:44:06 --> Total execution time: 48.4755
DEBUG - 2021-08-23 12:44:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 12:44:06 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 12:44:28 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 12:44:42 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:44:42 --> 22.1106 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 12:44:42 --> 0.0508 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10, 10
QUERY - 2021-08-23 12:44:42 --> 2.753 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 12:44:42 --> 0.0571 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 12:44:42 --> 2.612 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 12:44:42 --> 2.8895 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 12:44:42 --> 3.0184 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 12:44:42 --> 0.1351 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 12:44:42 --> 2.9563 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 12:44:42 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 12:44:42 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:44:42 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:44:42 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 12:44:42 --> Total execution time: 78.2381
DEBUG - 2021-08-23 12:44:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 12:44:42 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 12:45:03 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 12:45:17 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:45:17 --> 20.9291 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 12:45:17 --> 0.0381 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10, 10
QUERY - 2021-08-23 12:45:17 --> 2.702 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 12:45:17 --> 0.0554 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 12:45:17 --> 2.6678 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 12:45:17 --> 2.4636 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 12:45:17 --> 3.2469 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 12:45:17 --> 0.0427 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 12:45:17 --> 2.8348 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 12:45:17 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 12:45:17 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:45:17 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:45:17 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 12:45:17 --> Total execution time: 111.6621
DEBUG - 2021-08-23 12:47:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 12:47:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 12:47:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 12:47:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 12:47:52 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 12:48:14 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 12:48:28 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:48:28 --> 22.0503 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 12:48:28 --> 0.0389 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-23 12:48:28 --> 3.4115 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 12:48:28 --> 0.0539 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 12:48:28 --> 2.7122 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 12:48:28 --> 2.311 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 12:48:28 --> 2.6225 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 12:48:28 --> 0.0428 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 12:48:28 --> 2.535 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 12:48:28 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 12:48:28 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:48:28 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:48:28 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 12:48:28 --> Total execution time: 35.8646
DEBUG - 2021-08-23 12:48:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 12:48:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 12:48:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 12:48:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 12:48:35 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 12:48:57 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 12:48:57 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 12:48:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 12:48:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-23 12:49:10 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:49:10 --> 22.1548 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 12:49:10 --> 0.0372 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10, 10
QUERY - 2021-08-23 12:49:10 --> 2.3473 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 12:49:10 --> 0.0543 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 12:49:10 --> 2.5237 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 12:49:10 --> 2.8212 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 12:49:10 --> 2.5108 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 12:49:10 --> 0.0434 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 12:49:10 --> 2.4689 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 12:49:10 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 12:49:10 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:49:10 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:49:10 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 12:49:10 --> Total execution time: 35.0538
DEBUG - 2021-08-23 12:49:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 12:49:10 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 12:49:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 12:49:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 12:49:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 12:49:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 12:49:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 12:49:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 12:49:32 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 12:49:45 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:49:45 --> 22.1743 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 12:49:45 --> 0.0386 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 20, 10
QUERY - 2021-08-23 12:49:45 --> 2.5546 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 12:49:45 --> 0.0547 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 12:49:45 --> 3.2241 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 12:49:45 --> 2.3552 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 12:49:45 --> 2.4894 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 12:49:45 --> 0.0426 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 12:49:45 --> 2.3795 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 12:49:45 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 12:49:45 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:49:45 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:49:45 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 12:49:45 --> Total execution time: 48.1306
DEBUG - 2021-08-23 12:49:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 12:49:45 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 12:50:06 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 12:50:20 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:50:20 --> 21.2404 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 12:50:20 --> 0.0386 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10, 10
QUERY - 2021-08-23 12:50:20 --> 2.7594 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 12:50:20 --> 0.0861 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 12:50:20 --> 3.0556 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 12:50:20 --> 2.411 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 12:50:20 --> 2.4442 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 12:50:20 --> 0.0441 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 12:50:20 --> 2.412 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 12:50:20 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 12:50:20 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:50:20 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:50:20 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 12:50:20 --> Total execution time: 69.8533
DEBUG - 2021-08-23 12:50:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 12:50:20 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 12:50:41 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 12:50:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:50:55 --> 21.8766 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 12:50:55 --> 0.0389 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-23 12:50:55 --> 3.2661 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 12:50:55 --> 0.0567 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 12:50:55 --> 2.3904 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 12:50:55 --> 2.333 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 12:50:55 --> 2.4889 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 12:50:55 --> 0.0428 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 12:50:55 --> 2.457 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 12:50:55 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 12:50:55 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:50:55 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:50:55 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 12:50:55 --> Total execution time: 90.9290
DEBUG - 2021-08-23 12:51:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 12:51:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 12:51:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 12:51:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 12:51:01 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 12:51:24 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 12:51:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 12:51:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 12:51:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-23 12:51:40 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:51:40 --> 22.8764 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 12:51:40 --> 0.0388 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10, 10
QUERY - 2021-08-23 12:51:40 --> 3.2542 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 12:51:40 --> 0.0564 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 12:51:40 --> 3.0132 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 12:51:40 --> 3.9547 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 12:51:40 --> 2.4228 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 12:51:40 --> 0.0426 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 12:51:40 --> 2.5126 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 12:51:40 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 12:51:40 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:51:40 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:51:40 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 12:51:40 --> Total execution time: 38.2501
DEBUG - 2021-08-23 12:51:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 12:51:40 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 12:52:03 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 12:52:18 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:52:18 --> 23.1851 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 12:52:18 --> 0.0385 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-23 12:52:18 --> 3.16 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 12:52:18 --> 0.0737 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 12:52:18 --> 3.1315 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 12:52:18 --> 3.0255 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 12:52:18 --> 2.4 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 12:52:18 --> 0.0423 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 12:52:18 --> 3.5994 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 12:52:18 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 12:52:18 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:52:18 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:52:18 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 12:52:18 --> Total execution time: 47.1736
DEBUG - 2021-08-23 12:52:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 12:52:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 12:52:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 12:52:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 12:52:47 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 12:53:08 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 12:53:22 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:53:22 --> 21.3409 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 12:53:22 --> 0.0388 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-23 12:53:22 --> 3.9663 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 12:53:22 --> 0.1776 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 12:53:22 --> 2.4775 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 12:53:22 --> 2.4008 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 12:53:22 --> 2.51 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 12:53:22 --> 0.0443 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 12:53:22 --> 2.4443 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 12:53:22 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 12:53:22 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:53:22 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:53:22 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 12:53:22 --> Total execution time: 35.4825
DEBUG - 2021-08-23 12:53:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 12:53:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 12:53:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 12:53:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 12:53:25 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 12:53:48 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 12:54:02 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:54:02 --> 23.2835 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 12:54:02 --> 0.0376 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10, 10
QUERY - 2021-08-23 12:54:02 --> 3.0226 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 12:54:02 --> 0.0545 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 12:54:02 --> 2.666 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 12:54:02 --> 2.6677 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 12:54:02 --> 3.0197 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 12:54:02 --> 0.0457 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 12:54:02 --> 2.4788 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 12:54:02 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 12:54:02 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:54:02 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:54:02 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 12:54:02 --> Total execution time: 37.3520
DEBUG - 2021-08-23 12:54:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 12:54:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 12:54:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 12:54:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 12:54:02 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 12:54:24 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 12:54:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 12:54:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 12:54:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-23 12:54:37 --> 0.0011 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:54:37 --> 21.5637 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 12:54:37 --> 0.0365 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10, 10
QUERY - 2021-08-23 12:54:37 --> 2.6246 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 12:54:37 --> 0.055 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 12:54:37 --> 2.5456 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 12:54:37 --> 2.5876 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 12:54:37 --> 2.7666 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 12:54:37 --> 0.0437 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 12:54:37 --> 2.3902 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 12:54:37 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 12:54:37 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:54:37 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:54:37 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 12:54:37 --> Total execution time: 34.7071
DEBUG - 2021-08-23 12:54:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 12:54:37 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 12:54:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 12:54:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 12:54:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 12:54:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 12:54:39 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 12:54:59 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 12:54:59 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 12:55:11 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:55:11 --> 19.5385 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 12:55:11 --> 0.0393 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10, 10
QUERY - 2021-08-23 12:55:11 --> 2.3748 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 12:55:11 --> 0.0563 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 12:55:11 --> 2.3549 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 12:55:11 --> 2.6336 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 12:55:11 --> 2.5109 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 12:55:11 --> 0.0446 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 12:55:11 --> 2.4323 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 12:55:11 --> 0.0132 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 12:55:11 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:55:11 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:55:11 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 12:55:11 --> Total execution time: 32.0827
QUERY - 2021-08-23 12:55:11 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:55:11 --> 21.9393 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 12:55:11 --> 0.0388 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10, 10
QUERY - 2021-08-23 12:55:11 --> 2.3749 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 12:55:11 --> 0.0563 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 12:55:11 --> 2.3549 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 12:55:11 --> 2.6336 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 12:55:11 --> 2.5109 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 12:55:11 --> 0.0446 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 12:55:11 --> 2.4322 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 12:55:11 --> 0.0138 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 12:55:11 --> 0.0015 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:55:11 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:55:11 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 12:55:11 --> Total execution time: 47.1984
DEBUG - 2021-08-23 12:56:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 12:56:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 12:56:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 12:56:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 12:56:33 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 12:56:53 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 12:57:07 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:57:07 --> 20.5181 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 12:57:07 --> 0.0279 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10, 10
QUERY - 2021-08-23 12:57:07 --> 2.4365 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 12:57:07 --> 0.0546 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 12:57:07 --> 3.0459 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 12:57:07 --> 3.2109 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 12:57:07 --> 2.4558 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 12:57:07 --> 0.0422 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 12:57:07 --> 2.3354 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 12:57:07 --> 0.0105 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 12:57:07 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:57:07 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:57:07 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 12:57:07 --> Total execution time: 34.2169
DEBUG - 2021-08-23 12:57:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 12:57:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 12:57:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 12:57:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 12:57:10 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 12:57:31 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 12:57:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:57:44 --> 20.9905 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 12:57:44 --> 0.0385 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 20, 10
QUERY - 2021-08-23 12:57:44 --> 2.8237 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 12:57:44 --> 0.0636 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 12:57:44 --> 2.323 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 12:57:44 --> 2.3 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 12:57:44 --> 2.344 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 12:57:44 --> 0.0432 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 12:57:44 --> 2.3439 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 12:57:44 --> 0.0132 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 12:57:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:57:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:57:44 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 12:57:44 --> Total execution time: 33.3853
DEBUG - 2021-08-23 12:57:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 12:57:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 12:57:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 12:57:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 12:57:44 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 12:58:04 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 12:58:20 --> 0.0009 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:58:20 --> 20.5132 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 12:58:20 --> 0.0279 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 20, 10
QUERY - 2021-08-23 12:58:20 --> 3.2703 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 12:58:20 --> 0.0539 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 12:58:20 --> 3.2573 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 12:58:20 --> 2.4664 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 12:58:20 --> 3.1334 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 12:58:20 --> 0.0536 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 12:58:20 --> 3.4791 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 12:58:20 --> 0.0104 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 12:58:20 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:58:20 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 12:58:20 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 12:58:20 --> Total execution time: 36.3460
DEBUG - 2021-08-23 12:59:49 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 12:59:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 12:59:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 12:59:49 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 12:59:49 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 13:00:12 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 13:00:26 --> 0.0008 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:00:26 --> 23.5392 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 13:00:26 --> 0.0381 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 20, 10
QUERY - 2021-08-23 13:00:26 --> 2.5951 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 13:00:26 --> 0.1174 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 13:00:26 --> 3.0202 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 13:00:26 --> 2.5358 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 13:00:26 --> 2.433 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 13:00:26 --> 0.0431 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 13:00:26 --> 2.6761 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 13:00:26 --> 0.014 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 13:00:26 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:00:26 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:00:26 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 13:00:26 --> Total execution time: 37.0994
DEBUG - 2021-08-23 13:03:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 13:03:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 13:03:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 13:03:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 13:03:21 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 13:03:42 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 13:03:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 13:03:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 13:03:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-23 13:03:56 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:03:56 --> 21.4746 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 13:03:56 --> 0.0409 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 30, 10
QUERY - 2021-08-23 13:03:56 --> 3.7756 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 13:03:56 --> 0.1116 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 13:03:56 --> 2.9665 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 13:03:56 --> 2.3898 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 13:03:56 --> 2.3 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 13:03:56 --> 0.0427 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 13:03:56 --> 2.5349 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 13:03:56 --> 0.0113 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 13:03:56 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:03:56 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:03:56 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 13:03:56 --> Total execution time: 35.7251
DEBUG - 2021-08-23 13:03:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 13:03:56 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 13:04:18 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 13:04:30 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:04:30 --> 21.6132 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 13:04:30 --> 0.0379 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 20, 10
QUERY - 2021-08-23 13:04:30 --> 2.3442 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 13:04:30 --> 0.0555 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 13:04:30 --> 2.355 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 13:04:30 --> 2.6646 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 13:04:30 --> 2.3245 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 13:04:30 --> 0.0442 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 13:04:30 --> 2.434 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 13:04:30 --> 0.0117 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 13:04:30 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:04:30 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:04:30 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 13:04:30 --> Total execution time: 34.6414
DEBUG - 2021-08-23 13:04:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 13:04:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 13:04:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 13:04:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 13:04:33 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 13:04:55 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 13:05:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:05:08 --> 21.5511 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 13:05:08 --> 0.039 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 30, 10
QUERY - 2021-08-23 13:05:08 --> 2.3008 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 13:05:08 --> 0.0562 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 13:05:08 --> 2.5119 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 13:05:08 --> 2.2991 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 13:05:08 --> 2.4343 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 13:05:08 --> 0.0433 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 13:05:08 --> 3.1784 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 13:05:08 --> 0.0117 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 13:05:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:05:08 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:05:08 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 13:05:08 --> Total execution time: 34.5117
DEBUG - 2021-08-23 13:05:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 13:05:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 13:05:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 13:05:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 13:05:08 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 13:05:29 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 13:05:42 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:05:42 --> 21.0167 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 13:05:42 --> 0.0282 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 30, 10
QUERY - 2021-08-23 13:05:42 --> 2.6025 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 13:05:42 --> 0.055 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 13:05:42 --> 2.3875 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 13:05:42 --> 2.5122 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 13:05:42 --> 3.1674 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 13:05:42 --> 0.0435 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 13:05:42 --> 2.5561 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 13:05:42 --> 0.0122 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 13:05:42 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:05:42 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:05:42 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 13:05:42 --> Total execution time: 34.4587
DEBUG - 2021-08-23 13:05:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 13:05:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 13:05:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 13:05:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 13:05:46 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 13:06:08 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 13:06:22 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:06:22 --> 21.4345 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 13:06:22 --> 0.0389 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 30, 10
QUERY - 2021-08-23 13:06:22 --> 2.3861 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 13:06:22 --> 0.0552 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 13:06:22 --> 3.778 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 13:06:22 --> 2.7761 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 13:06:22 --> 2.4125 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 13:06:22 --> 0.0437 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 13:06:22 --> 2.3216 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 13:06:22 --> 0.0131 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 13:06:22 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:06:22 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:06:22 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 13:06:22 --> Total execution time: 35.3366
DEBUG - 2021-08-23 13:06:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 13:06:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 13:06:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 13:06:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 13:06:26 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 13:06:48 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 13:07:02 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:07:02 --> 22.2422 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 13:07:02 --> 0.038 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 40, 10
QUERY - 2021-08-23 13:07:02 --> 3.5876 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 13:07:02 --> 0.0561 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 13:07:02 --> 2.3893 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 13:07:02 --> 2.6539 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 13:07:02 --> 2.4459 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 13:07:02 --> 0.0437 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 13:07:02 --> 3.3236 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 13:07:02 --> 0.0117 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 13:07:02 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:07:02 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:07:02 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 13:07:02 --> Total execution time: 36.8635
DEBUG - 2021-08-23 13:09:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 13:09:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 13:09:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 13:09:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 13:09:05 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 13:09:27 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 13:09:42 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:09:42 --> 22.7608 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 13:09:42 --> 0.05 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 40, 10
QUERY - 2021-08-23 13:09:42 --> 2.6656 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 13:09:42 --> 0.0564 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 13:09:42 --> 3.3904 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 13:09:42 --> 2.6762 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 13:09:42 --> 2.6579 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 13:09:42 --> 0.0421 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 13:09:42 --> 2.7319 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 13:09:42 --> 0.0247 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 13:09:42 --> 0.0009 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:09:42 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:09:42 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 13:09:42 --> Total execution time: 37.1470
DEBUG - 2021-08-23 13:09:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 13:09:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 13:09:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 13:09:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 13:09:44 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 13:09:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 13:09:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 13:09:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 13:10:07 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 13:10:21 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:10:21 --> 22.935 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 13:10:21 --> 0.0387 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 50, 10
QUERY - 2021-08-23 13:10:21 --> 3.6804 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 13:10:21 --> 0.0553 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 13:10:21 --> 2.3894 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 13:10:21 --> 2.5441 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 13:10:21 --> 2.5214 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 13:10:21 --> 0.0442 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 13:10:21 --> 2.5563 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 13:10:21 --> 0.0115 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 13:10:21 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:10:21 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:10:21 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 13:10:21 --> Total execution time: 36.8584
DEBUG - 2021-08-23 13:10:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 13:10:21 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 13:10:44 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 13:10:58 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:10:58 --> 22.6618 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 13:10:58 --> 0.04 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 50, 10
QUERY - 2021-08-23 13:10:58 --> 3.0756 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 13:10:58 --> 0.0547 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 13:10:58 --> 2.511 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 13:10:58 --> 2.4013 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 13:10:58 --> 2.4085 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 13:10:58 --> 0.0459 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 13:10:58 --> 3.4685 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 13:10:58 --> 0.0111 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 13:10:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:10:58 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:10:58 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 13:10:58 --> Total execution time: 73.4238
DEBUG - 2021-08-23 13:11:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 13:11:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 13:11:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 13:11:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 13:11:01 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 13:11:22 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 13:11:36 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:11:36 --> 20.658 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 13:11:36 --> 0.0384 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 60, 10
QUERY - 2021-08-23 13:11:36 --> 2.4991 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 13:11:36 --> 0.0575 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 13:11:36 --> 2.5876 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 13:11:36 --> 2.6917 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 13:11:36 --> 3.5 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 13:11:36 --> 0.0425 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 13:11:36 --> 2.9785 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 13:11:36 --> 0.0119 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 13:11:36 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:11:36 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:11:36 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 13:11:36 --> Total execution time: 35.1541
DEBUG - 2021-08-23 13:11:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 13:11:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 13:11:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 13:11:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 13:11:37 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 13:11:57 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 13:12:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:12:10 --> 20.5447 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 13:12:10 --> 0.0398 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 60, 10
QUERY - 2021-08-23 13:12:10 --> 2.4186 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 13:12:10 --> 0.0559 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 13:12:10 --> 2.3027 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 13:12:10 --> 2.5095 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 13:12:10 --> 2.5452 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 13:12:10 --> 0.0426 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 13:12:10 --> 2.6243 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 13:12:10 --> 0.0113 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 13:12:10 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:12:10 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:12:10 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 13:12:10 --> Total execution time: 33.1791
DEBUG - 2021-08-23 13:12:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 13:12:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 13:12:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 13:12:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 13:12:12 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 13:12:33 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 13:12:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:12:46 --> 20.8327 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 13:12:46 --> 0.0402 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 70, 10
QUERY - 2021-08-23 13:12:46 --> 2.4089 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 13:12:46 --> 0.0541 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 13:12:46 --> 2.7127 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 13:12:46 --> 2.588 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 13:12:46 --> 2.3561 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 13:12:46 --> 0.0423 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 13:12:46 --> 2.3912 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 13:12:46 --> 0.011 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 13:12:46 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:12:46 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:12:46 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 13:12:46 --> Total execution time: 33.5256
DEBUG - 2021-08-23 13:12:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 13:12:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 13:12:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 13:12:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 13:12:46 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 13:13:06 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 13:13:19 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:13:19 --> 20.1655 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 13:13:19 --> 0.04 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 70, 10
QUERY - 2021-08-23 13:13:19 --> 2.3652 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 13:13:19 --> 0.0543 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 13:13:19 --> 2.8457 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 13:13:19 --> 2.3084 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 13:13:19 --> 2.7242 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 13:13:19 --> 0.0435 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 13:13:19 --> 2.4015 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 13:13:19 --> 0.0113 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 13:13:19 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:13:19 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:13:19 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 13:13:19 --> Total execution time: 33.0391
DEBUG - 2021-08-23 13:38:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 13:38:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 13:38:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 13:38:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 13:38:12 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 13:38:53 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 13:39:22 --> 0.1634 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:39:22 --> 41.4031 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 13:39:22 --> 0.1248 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 80, 10
QUERY - 2021-08-23 13:39:22 --> 4.1042 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 13:39:22 --> 0.1624 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 13:39:22 --> 3.8663 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 13:39:22 --> 8.4631 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 13:39:22 --> 6.2034 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 13:39:22 --> 0.048 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 13:39:22 --> 5.2643 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 13:39:22 --> 0.0144 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 13:39:22 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:39:22 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:39:22 --> 0.0006 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 13:39:22 --> Total execution time: 71.9556
DEBUG - 2021-08-23 13:39:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 13:39:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 13:39:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 13:39:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 13:39:22 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 13:39:51 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 13:40:18 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:40:18 --> 29.1209 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 13:40:18 --> 0.0283 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 80, 10
QUERY - 2021-08-23 13:40:18 --> 5.8682 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 13:40:18 --> 0.078 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 13:40:18 --> 5.9125 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 13:40:18 --> 4.4135 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 13:40:18 --> 6.6302 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 13:40:18 --> 0.047 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 13:40:18 --> 3.798 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 13:40:18 --> 0.0263 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 13:40:18 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:40:18 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:40:18 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 13:40:18 --> Total execution time: 56.0696
DEBUG - 2021-08-23 13:42:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 13:42:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 13:42:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 13:42:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 13:42:26 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 13:42:47 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 13:43:02 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:43:02 --> 20.8457 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 13:43:02 --> 0.0399 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 80, 10
QUERY - 2021-08-23 13:43:02 --> 2.7761 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 13:43:02 --> 0.0763 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 13:43:02 --> 3.6419 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 13:43:02 --> 2.8256 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 13:43:02 --> 2.4777 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 13:43:02 --> 0.0469 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 13:43:02 --> 2.6974 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 13:43:02 --> 0.0151 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 13:43:02 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:43:02 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:43:02 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 13:43:02 --> Total execution time: 35.5416
DEBUG - 2021-08-23 13:43:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 13:43:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 13:43:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 13:43:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 13:43:14 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 13:43:37 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 13:43:52 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:43:52 --> 22.7415 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 13:43:52 --> 0.0278 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 80, 10
QUERY - 2021-08-23 13:43:52 --> 2.5107 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 13:43:52 --> 0.0761 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 13:43:52 --> 3.0884 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 13:43:52 --> 4.3352 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 13:43:52 --> 2.7223 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 13:43:52 --> 0.0466 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 13:43:52 --> 2.642 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 13:43:52 --> 0.0152 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 13:43:52 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:43:52 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:43:52 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 13:43:52 --> Total execution time: 38.2800
DEBUG - 2021-08-23 13:44:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 13:44:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 13:44:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 13:44:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 13:44:58 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 13:45:19 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 13:45:32 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:45:32 --> 20.6905 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 13:45:32 --> 0.0281 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 90, 10
QUERY - 2021-08-23 13:45:32 --> 2.6216 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 13:45:32 --> 0.2098 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 13:45:32 --> 2.6794 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 13:45:32 --> 2.5994 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 13:45:32 --> 2.6428 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 13:45:32 --> 0.049 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 13:45:32 --> 2.3524 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 13:45:32 --> 0.0146 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 13:45:32 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:45:32 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:45:32 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 13:45:32 --> Total execution time: 33.9845
DEBUG - 2021-08-23 13:45:32 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 13:45:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 13:45:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 13:45:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 13:45:32 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 13:45:53 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 13:46:06 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:46:06 --> 20.7584 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 13:46:06 --> 0.0291 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 90, 10
QUERY - 2021-08-23 13:46:06 --> 2.7664 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 13:46:06 --> 0.076 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 13:46:06 --> 2.573 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 13:46:06 --> 2.4838 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 13:46:06 --> 2.5554 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 13:46:06 --> 0.0469 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 13:46:06 --> 2.4412 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 13:46:06 --> 0.0151 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 13:46:06 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:46:06 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:46:06 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 13:46:06 --> Total execution time: 33.8251
DEBUG - 2021-08-23 13:46:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 13:46:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 13:46:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 13:46:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 13:46:09 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 13:46:31 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 13:46:45 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:46:45 --> 21.8144 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 13:46:45 --> 0.16 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 100, 10
QUERY - 2021-08-23 13:46:45 --> 2.6558 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 13:46:45 --> 0.068 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 13:46:45 --> 2.7211 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 13:46:45 --> 2.7141 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 13:46:45 --> 2.5106 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 13:46:45 --> 0.0468 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 13:46:45 --> 3.1009 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 13:46:45 --> 0.0108 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 13:46:45 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:46:45 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:46:45 --> 0.0006 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 13:46:45 --> Total execution time: 35.8942
DEBUG - 2021-08-23 13:46:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 13:46:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 13:46:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 13:46:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 13:46:45 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 13:47:07 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 13:47:27 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:47:27 --> 21.4287 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 13:47:27 --> 0.0402 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 100, 10
QUERY - 2021-08-23 13:47:27 --> 5.4974 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 13:47:27 --> 0.0654 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 13:47:27 --> 3.3989 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 13:47:27 --> 3.6231 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 13:47:27 --> 3.4909 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 13:47:27 --> 0.0465 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 13:47:27 --> 3.9874 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 13:47:27 --> 0.0146 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 13:47:27 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:47:27 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:47:27 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 13:47:27 --> Total execution time: 41.6782
DEBUG - 2021-08-23 13:47:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 13:47:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 13:47:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 13:47:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 13:47:30 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 13:47:54 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 13:48:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:48:13 --> 23.7302 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 13:48:13 --> 0.0297 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 110, 10
QUERY - 2021-08-23 13:48:13 --> 5.2734 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 13:48:13 --> 0.1333 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 13:48:13 --> 2.8571 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 13:48:13 --> 4.2881 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 13:48:13 --> 3.4336 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 13:48:13 --> 0.0578 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 13:48:13 --> 3.2205 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 13:48:13 --> 0.0149 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 13:48:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:48:13 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:48:13 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 13:48:13 --> Total execution time: 43.1142
DEBUG - 2021-08-23 13:51:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 13:51:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 13:51:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 13:51:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 13:51:46 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 13:52:09 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 13:52:23 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:52:23 --> 22.8256 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 13:52:23 --> 0.0511 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 120, 10
QUERY - 2021-08-23 13:52:23 --> 3.2328 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 13:52:23 --> 0.1004 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 13:52:23 --> 2.8672 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 13:52:23 --> 2.5436 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 13:52:23 --> 2.5123 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 13:52:23 --> 0.0473 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 13:52:23 --> 2.4411 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 13:52:23 --> 0.0158 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 13:52:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:52:23 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 13:52:23 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 13:52:23 --> Total execution time: 36.7761
DEBUG - 2021-08-23 14:00:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 14:00:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 14:00:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 14:00:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 14:00:29 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 14:00:50 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 14:01:11 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 14:01:11 --> 20.3635 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 14:01:11 --> 0.0305 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 120, 10
QUERY - 2021-08-23 14:01:11 --> 2.509 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 14:01:11 --> 0.0764 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 14:01:11 --> 2.8128 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 14:01:11 --> 2.6023 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 14:01:11 --> 4.6028 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 14:01:11 --> 0.1078 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 14:01:11 --> 8.9078 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 14:01:11 --> 0.0151 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 14:01:11 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 14:01:11 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 14:01:11 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 14:01:11 --> Total execution time: 42.1944
DEBUG - 2021-08-23 14:01:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 14:01:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 14:01:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 14:01:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 14:01:18 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 14:01:42 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 14:01:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 14:01:59 --> 24.756 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 14:01:59 --> 0.0877 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 130, 10
QUERY - 2021-08-23 14:01:59 --> 4.5473 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 14:01:59 --> 0.0731 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 14:01:59 --> 3.2127 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 14:01:59 --> 3.1537 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 14:01:59 --> 2.4114 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 14:01:59 --> 0.0469 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 14:01:59 --> 2.5537 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 14:01:59 --> 0.0143 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 14:01:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 14:01:59 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 14:01:59 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 14:01:59 --> Total execution time: 40.9367
DEBUG - 2021-08-23 14:02:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 14:02:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 14:02:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 14:02:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 14:02:02 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 14:02:24 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 14:02:36 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 14:02:36 --> 22.0919 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 14:02:36 --> 0.0319 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 140, 10
QUERY - 2021-08-23 14:02:36 --> 2.7089 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 14:02:36 --> 0.0649 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 14:02:36 --> 2.4793 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 14:02:36 --> 2.3103 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 14:02:36 --> 2.3551 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 14:02:36 --> 0.0474 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 14:02:36 --> 2.3198 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 14:02:36 --> 0.0155 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 14:02:36 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 14:02:36 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 14:02:36 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 14:02:36 --> Total execution time: 34.5119
DEBUG - 2021-08-23 14:02:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 14:02:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 14:02:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 14:02:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 14:02:40 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 14:03:06 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 14:03:26 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 14:03:26 --> 25.8649 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 14:03:26 --> 0.0306 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 150, 10
QUERY - 2021-08-23 14:03:26 --> 2.7299 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 14:03:26 --> 0.2665 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 14:03:26 --> 5.9282 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 14:03:26 --> 6.3408 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 14:03:26 --> 2.6322 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 14:03:26 --> 0.0461 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 14:03:26 --> 2.7987 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 14:03:26 --> 0.0256 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 14:03:26 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 14:03:26 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 14:03:26 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 14:03:26 --> Total execution time: 46.7544
DEBUG - 2021-08-23 14:26:06 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 14:26:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 14:26:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 14:26:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 14:26:06 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 14:26:27 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 14:26:41 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 14:26:41 --> 21.3493 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 14:26:41 --> 0.0303 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 150, 10
QUERY - 2021-08-23 14:26:41 --> 2.3539 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 14:26:41 --> 0.0653 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 14:26:41 --> 3.5453 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 14:26:41 --> 2.6972 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 14:26:41 --> 2.3893 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 14:26:41 --> 0.0494 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 14:26:41 --> 2.4282 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 14:26:41 --> 0.0157 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 14:26:41 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 14:26:41 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 14:26:41 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 14:26:41 --> Total execution time: 35.0381
DEBUG - 2021-08-23 14:26:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 14:26:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 14:26:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 14:26:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 14:26:46 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 14:27:08 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 14:27:27 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 14:27:27 --> 21.6064 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 14:27:27 --> 0.0288 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 140, 10
QUERY - 2021-08-23 14:27:27 --> 3.3025 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 14:27:27 --> 0.0639 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 14:27:27 --> 4.8097 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 14:27:27 --> 3.0769 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 14:27:27 --> 4.8906 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 14:27:27 --> 0.048 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 14:27:27 --> 2.6644 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 14:27:27 --> 0.0147 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 14:27:27 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 14:27:27 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 14:27:27 --> 0.0007 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 14:27:27 --> Total execution time: 40.5920
DEBUG - 2021-08-23 14:59:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 14:59:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 14:59:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 14:59:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 14:59:53 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 14:59:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 14:59:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 14:59:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 14:59:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 14:59:53 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 15:00:03 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 15:00:17 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:00:17 --> 3.2209 | SELECT COUNT(*) AS `numrows` FROM `gpi_data` WHERE `year` LIKE '%2019%' ESCAPE '!'
QUERY - 2021-08-23 15:00:17 --> 7.0135 | SELECT * FROM `gpi_data` WHERE `year` LIKE '%2019%' ESCAPE '!' ORDER BY `id` DESC  LIMIT 140, 10
QUERY - 2021-08-23 15:00:17 --> 2.3408 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 15:00:17 --> 0.0658 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 15:00:17 --> 2.7334 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 15:00:17 --> 2.6443 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 15:00:17 --> 3.0665 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 15:00:17 --> 0.0478 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 15:00:17 --> 2.896 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 15:00:17 --> 0.0268 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 15:00:17 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:00:17 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:00:17 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 15:00:17 --> Total execution time: 24.1300
DEBUG - 2021-08-23 15:00:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:00:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:00:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:00:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:00:20 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 15:00:59 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 15:01:20 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:01:20 --> 39.6248 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 15:01:20 --> 0.0272 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-23 15:01:20 --> 4.1365 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 15:01:20 --> 0.0657 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 15:01:20 --> 4.4722 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 15:01:20 --> 4.7369 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 15:01:20 --> 3.6957 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 15:01:20 --> 0.0662 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 15:01:20 --> 3.801 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 15:01:20 --> 0.0318 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 15:01:20 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:01:20 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:01:20 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 15:01:20 --> Total execution time: 60.7346
DEBUG - 2021-08-23 15:07:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:07:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:07:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:07:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:07:05 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 15:07:05 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:07:05 --> 0.009 | SELECT * FROM `csv_import` ORDER BY `id` DESC
QUERY - 2021-08-23 15:07:05 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 15:07:05 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:07:05 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:07:05 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 15:07:05 --> Total execution time: 0.1005
DEBUG - 2021-08-23 15:07:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:07:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:07:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:07:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:07:07 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 15:07:21 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:07:21 --> 2.6413 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 15:07:21 --> 0.0663 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 15:07:21 --> 2.3893 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 15:07:21 --> 2.4763 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 15:07:21 --> 2.5677 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 15:07:21 --> 0.0476 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 15:07:21 --> 3.8524 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 15:07:21 --> 0.0164 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 15:07:21 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 15:07:21 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:07:21 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:07:21 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 15:07:21 --> Total execution time: 14.1271
DEBUG - 2021-08-23 15:07:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:07:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:07:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:07:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:07:23 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 15:07:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:07:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:07:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:07:48 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:07:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:07:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:07:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-23 15:08:06 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:08:06 --> 25.0158 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 15:08:06 --> 0.0277 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-23 15:08:06 --> 4.5593 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 15:08:06 --> 0.1424 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 15:08:06 --> 5.0875 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 15:08:06 --> 2.6688 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 15:08:06 --> 2.5445 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 15:08:06 --> 0.0466 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 15:08:06 --> 3.0061 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 15:08:06 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 15:08:06 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:08:06 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:08:06 --> 0.0002 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 15:08:06 --> Total execution time: 43.1838
DEBUG - 2021-08-23 15:08:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:08:06 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 15:08:06 --> 0.0086 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:08:06 --> 0.0278 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-23 15:08:06 --> Total execution time: 29.2184
DEBUG - 2021-08-23 15:08:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:08:06 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 15:08:06 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:08:06 --> 0.001 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-23 15:08:06 --> Total execution time: 14.2267
DEBUG - 2021-08-23 15:21:06 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:21:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:21:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:21:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:21:06 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 15:21:06 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:21:06 --> 0.027 | SELECT * FROM `csv_import` ORDER BY `id` DESC
QUERY - 2021-08-23 15:21:06 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 15:21:06 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:21:06 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:21:06 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 15:21:06 --> Total execution time: 0.1108
DEBUG - 2021-08-23 15:21:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:21:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:21:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:21:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:21:08 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 15:21:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:21:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:21:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:21:30 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 15:21:44 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:21:44 --> 22.0884 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 15:21:44 --> 0.0274 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-23 15:21:44 --> 2.6466 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 15:21:44 --> 0.0652 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 15:21:44 --> 3.0691 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 15:21:44 --> 2.5872 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 15:21:44 --> 2.5784 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 15:21:44 --> 0.0468 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 15:21:44 --> 2.9181 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 15:21:44 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 15:21:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:21:44 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:21:44 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 15:21:44 --> Total execution time: 36.1004
DEBUG - 2021-08-23 15:21:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:21:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 15:21:44 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:21:44 --> 0.0229 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-23 15:21:44 --> Total execution time: 17.0281
DEBUG - 2021-08-23 15:32:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:32:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:32:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:32:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:32:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 15:32:56 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:32:56 --> 0.0004 | SELECT * FROM `csv_import` ORDER BY `id` DESC
QUERY - 2021-08-23 15:32:56 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 15:32:56 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:32:56 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:32:56 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 15:32:56 --> Total execution time: 0.0996
DEBUG - 2021-08-23 15:32:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:32:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:32:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:32:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:32:58 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 15:33:57 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:33:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:33:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:33:57 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:33:57 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 15:34:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:34:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:34:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-23 15:34:12 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:34:12 --> 2.7556 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 15:34:12 --> 0.0926 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 15:34:12 --> 3.5131 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 15:34:12 --> 2.5326 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 15:34:12 --> 2.5855 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 15:34:12 --> 0.0498 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 15:34:12 --> 2.5765 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 15:34:12 --> 0.0152 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 15:34:12 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 15:34:12 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:34:12 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:34:12 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 15:34:12 --> Total execution time: 14.4071
DEBUG - 2021-08-23 15:34:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:34:12 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 15:34:12 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:34:12 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
QUERY - 2021-08-23 15:34:12 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 15:34:12 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:34:12 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:34:12 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 15:34:12 --> Total execution time: 4.4141
DEBUG - 2021-08-23 15:34:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:34:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:34:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:34:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:34:13 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 15:34:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:34:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:34:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:34:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:34:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:34:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:34:37 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 15:34:52 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:34:52 --> 23.8475 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 15:34:52 --> 0.0272 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-23 15:34:52 --> 3.1894 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 15:34:52 --> 0.0655 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 15:34:52 --> 2.612 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 15:34:52 --> 2.5428 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 15:34:52 --> 3.1791 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 15:34:52 --> 0.0476 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 15:34:52 --> 3.0857 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 15:34:52 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 15:34:52 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:34:52 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:34:52 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 15:34:52 --> Total execution time: 38.8529
DEBUG - 2021-08-23 15:34:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:34:52 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 15:34:52 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:34:52 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
QUERY - 2021-08-23 15:34:52 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 15:34:52 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:34:52 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:34:52 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 15:34:52 --> Total execution time: 31.7224
DEBUG - 2021-08-23 15:34:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:34:52 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 15:34:52 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:34:52 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-23 15:34:52 --> Total execution time: 19.3659
DEBUG - 2021-08-23 15:35:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:35:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:35:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:35:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:35:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 15:35:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:35:14 --> 0.0004 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-23 15:35:14 --> Total execution time: 0.0909
DEBUG - 2021-08-23 15:35:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:35:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:35:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:35:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:35:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 15:35:34 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:35:34 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-23 15:35:34 --> Total execution time: 0.0887
DEBUG - 2021-08-23 15:35:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:35:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:35:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:35:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:35:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 15:35:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:35:54 --> 0.0004 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-23 15:35:54 --> Total execution time: 0.0935
DEBUG - 2021-08-23 15:36:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:36:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:36:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:36:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:36:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 15:36:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:36:14 --> 0.0004 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-23 15:36:14 --> Total execution time: 0.0761
DEBUG - 2021-08-23 15:36:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:36:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:36:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:36:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:36:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 15:36:34 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:36:34 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-23 15:36:34 --> Total execution time: 0.0769
DEBUG - 2021-08-23 15:36:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:36:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:36:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:36:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:36:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 15:36:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:36:54 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-23 15:36:54 --> Total execution time: 0.0720
DEBUG - 2021-08-23 15:37:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:37:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:37:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:37:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:37:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 15:37:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:37:14 --> 0.0004 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-23 15:37:14 --> Total execution time: 0.0635
DEBUG - 2021-08-23 15:37:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:37:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:37:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:37:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:37:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 15:37:34 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:37:34 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-23 15:37:34 --> Total execution time: 0.0915
DEBUG - 2021-08-23 15:37:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:37:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:37:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:37:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:37:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 15:37:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:37:54 --> 0.0004 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-23 15:37:54 --> Total execution time: 0.1045
DEBUG - 2021-08-23 15:38:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:38:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:38:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:38:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:38:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 15:38:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:38:14 --> 0.0004 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-23 15:38:14 --> Total execution time: 0.0695
DEBUG - 2021-08-23 15:38:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:38:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:38:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:38:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:38:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 15:38:34 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:38:34 --> 0.0004 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-23 15:38:34 --> Total execution time: 0.0811
DEBUG - 2021-08-23 15:38:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:38:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:38:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:38:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:38:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 15:38:54 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:38:54 --> 0.0004 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-23 15:38:54 --> Total execution time: 0.0673
DEBUG - 2021-08-23 15:39:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:39:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:39:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:39:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:39:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 15:39:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:39:14 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-23 15:39:14 --> Total execution time: 0.0778
DEBUG - 2021-08-23 15:39:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:39:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:39:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:39:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:39:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 15:39:34 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:39:34 --> 0.0005 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-23 15:39:34 --> Total execution time: 0.0722
DEBUG - 2021-08-23 15:39:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:39:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:39:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:39:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:39:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 15:39:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:39:54 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-23 15:39:54 --> Total execution time: 0.0689
DEBUG - 2021-08-23 15:40:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:40:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:40:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:40:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:40:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 15:40:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:40:14 --> 0.0004 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-23 15:40:14 --> Total execution time: 0.0657
DEBUG - 2021-08-23 15:40:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:40:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:40:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:40:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:40:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 15:40:34 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:40:34 --> 0.0004 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-23 15:40:34 --> Total execution time: 0.0777
DEBUG - 2021-08-23 15:40:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:40:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:40:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:40:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:40:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 15:40:54 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:40:54 --> 0.0004 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-23 15:40:54 --> Total execution time: 0.0940
DEBUG - 2021-08-23 15:41:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:41:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:41:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:41:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:41:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 15:41:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:41:14 --> 0.0004 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-23 15:41:14 --> Total execution time: 0.0936
DEBUG - 2021-08-23 15:41:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:41:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:41:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:41:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:41:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 15:41:34 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:41:34 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-23 15:41:34 --> Total execution time: 0.0706
DEBUG - 2021-08-23 15:41:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:41:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:41:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:41:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:41:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 15:41:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:41:54 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-23 15:41:54 --> Total execution time: 0.1030
DEBUG - 2021-08-23 15:42:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:42:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:42:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:42:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:42:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 15:42:14 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:42:14 --> 0.0004 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-23 15:42:14 --> Total execution time: 0.0992
DEBUG - 2021-08-23 15:42:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:42:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:42:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:42:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:42:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 15:42:34 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:42:34 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-23 15:42:34 --> Total execution time: 0.0762
DEBUG - 2021-08-23 15:43:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:43:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:43:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:43:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:43:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 15:43:46 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:43:46 --> 0.0004 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-23 15:43:46 --> Total execution time: 0.0593
DEBUG - 2021-08-23 15:44:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:44:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:44:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:44:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:44:33 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 15:44:33 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:44:33 --> 0.0005 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-23 15:44:33 --> Total execution time: 0.0935
DEBUG - 2021-08-23 15:44:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:44:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:44:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:44:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:44:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 15:44:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:44:54 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-23 15:44:54 --> Total execution time: 0.0665
DEBUG - 2021-08-23 15:45:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:45:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:45:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:45:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:45:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 15:45:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:45:14 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-23 15:45:14 --> Total execution time: 0.0615
DEBUG - 2021-08-23 15:45:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:45:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:45:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:45:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:45:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 15:45:34 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:45:34 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-23 15:45:34 --> Total execution time: 0.0709
DEBUG - 2021-08-23 15:45:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:45:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:45:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:45:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:45:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 15:45:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:45:54 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-23 15:45:54 --> Total execution time: 0.0691
DEBUG - 2021-08-23 15:46:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:46:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:46:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:46:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:46:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 15:46:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:46:14 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-23 15:46:14 --> Total execution time: 0.0648
DEBUG - 2021-08-23 15:46:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:46:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:46:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:46:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:46:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 15:46:34 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:46:34 --> 0.0004 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-23 15:46:34 --> Total execution time: 0.0680
DEBUG - 2021-08-23 15:46:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:46:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:46:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:46:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:46:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 15:46:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:46:54 --> 0.0004 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-23 15:46:54 --> Total execution time: 0.0866
DEBUG - 2021-08-23 15:47:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:47:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:47:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:47:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:47:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 15:47:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:47:14 --> 0.0004 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-23 15:47:14 --> Total execution time: 0.0705
DEBUG - 2021-08-23 15:47:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:47:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:47:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:47:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:47:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 15:47:34 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:47:34 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-23 15:47:34 --> Total execution time: 0.0738
DEBUG - 2021-08-23 15:47:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:47:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:47:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:47:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:47:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 15:47:54 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:47:54 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-23 15:47:54 --> Total execution time: 0.0806
DEBUG - 2021-08-23 15:48:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:48:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:48:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:48:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:48:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 15:48:14 --> 0.0044 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:48:14 --> 0.0008 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-23 15:48:14 --> Total execution time: 0.1144
DEBUG - 2021-08-23 15:48:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:48:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:48:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:48:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:48:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 15:48:34 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:48:34 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-23 15:48:34 --> Total execution time: 0.0722
DEBUG - 2021-08-23 15:48:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:48:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:48:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:48:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:48:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 15:48:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:48:54 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-23 15:48:54 --> Total execution time: 0.0860
DEBUG - 2021-08-23 15:49:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:49:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:49:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:49:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:49:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 15:49:14 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:49:14 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-23 15:49:14 --> Total execution time: 0.0866
DEBUG - 2021-08-23 15:49:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:49:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:49:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:49:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:49:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 15:49:34 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:49:34 --> 0.0004 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-23 15:49:34 --> Total execution time: 0.0761
DEBUG - 2021-08-23 15:50:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:50:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:50:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:50:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:50:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 15:50:46 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:50:46 --> 0.0004 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-23 15:50:46 --> Total execution time: 0.0766
DEBUG - 2021-08-23 15:51:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:51:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:51:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:51:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:51:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 15:51:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:51:46 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-23 15:51:46 --> Total execution time: 0.0641
DEBUG - 2021-08-23 15:52:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:52:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:52:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:52:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:52:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 15:52:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:52:24 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-23 15:52:24 --> Total execution time: 0.0870
DEBUG - 2021-08-23 15:52:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:52:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:52:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:52:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:52:25 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 15:52:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:52:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:52:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:52:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:52:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 15:52:34 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:52:34 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-23 15:52:34 --> Total execution time: 0.0744
DEBUG - 2021-08-23 15:52:46 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:52:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:52:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:52:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:52:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:52:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 15:52:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:52:54 --> 0.0004 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-23 15:52:54 --> Total execution time: 0.0835
QUERY - 2021-08-23 15:53:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:53:01 --> 21.1839 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 15:53:01 --> 0.0277 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-23 15:53:01 --> 3.0261 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 15:53:01 --> 0.0649 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 15:53:01 --> 3.5763 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 15:53:01 --> 2.4916 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 15:53:01 --> 2.3998 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 15:53:01 --> 0.0475 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 15:53:01 --> 2.8504 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 15:53:01 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 15:53:01 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:53:01 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:53:01 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 15:53:01 --> Total execution time: 35.7410
DEBUG - 2021-08-23 15:58:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:58:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:58:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:58:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:58:13 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 15:58:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:58:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:58:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:58:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:58:13 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 15:58:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:58:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:58:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:58:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:58:50 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 15:59:01 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 15:59:16 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:59:16 --> 3.0356 | SELECT COUNT(*) AS `numrows` FROM `gpi_data` WHERE `circle` LIKE '%BIHAR%' ESCAPE '!' AND  `year` LIKE '%2019%' ESCAPE '!' AND  `state` LIKE '%DELHI%' ESCAPE '!'
QUERY - 2021-08-23 15:59:16 --> 7.5396 | SELECT * FROM `gpi_data` WHERE `circle` LIKE '%BIHAR%' ESCAPE '!' AND  `year` LIKE '%2019%' ESCAPE '!' AND  `state` LIKE '%DELHI%' ESCAPE '!' ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-23 15:59:16 --> 2.5375 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 15:59:16 --> 0.0775 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 15:59:16 --> 2.5883 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 15:59:16 --> 3.7104 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 15:59:16 --> 3.6892 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 15:59:16 --> 0.0493 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 15:59:16 --> 2.5734 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 15:59:16 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 15:59:16 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:59:16 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:59:16 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 15:59:16 --> Total execution time: 25.8988
DEBUG - 2021-08-23 15:59:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 15:59:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 15:59:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 15:59:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 15:59:20 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 15:59:40 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 15:59:53 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:59:53 --> 20.003 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 15:59:53 --> 0.0275 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-23 15:59:53 --> 2.2782 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 15:59:53 --> 0.0682 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 15:59:53 --> 2.7996 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 15:59:53 --> 2.5214 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 15:59:53 --> 2.4221 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 15:59:53 --> 0.0494 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 15:59:53 --> 2.3618 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 15:59:53 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 15:59:53 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:59:53 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 15:59:53 --> 0.0002 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 15:59:53 --> Total execution time: 32.6155
DEBUG - 2021-08-23 16:01:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 16:01:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 16:01:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 16:01:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 16:01:21 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 16:01:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 16:01:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 16:01:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 16:01:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 16:01:21 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 16:01:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 16:01:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 16:01:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 16:01:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 16:01:34 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 16:01:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 16:01:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 16:01:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 16:01:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 16:01:42 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 16:01:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 16:01:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 16:01:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 16:01:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 16:01:59 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 16:02:11 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 16:02:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 16:02:24 --> 3.7982 | SELECT COUNT(*) AS `numrows` FROM `gpi_data` WHERE `year` LIKE '%2019%' ESCAPE '!'
QUERY - 2021-08-23 16:02:24 --> 7.651 | SELECT * FROM `gpi_data` WHERE `year` LIKE '%2019%' ESCAPE '!' ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-23 16:02:24 --> 2.4047 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 16:02:24 --> 0.0662 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 16:02:24 --> 2.7336 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 16:02:24 --> 3.1324 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 16:02:24 --> 2.5453 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 16:02:24 --> 0.0478 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 16:02:24 --> 2.3634 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 16:02:24 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 16:02:24 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 16:02:24 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 16:02:24 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 16:02:24 --> Total execution time: 24.8277
DEBUG - 2021-08-23 16:03:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 16:03:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 16:03:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 16:03:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 16:03:04 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 16:03:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 16:03:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 16:03:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 16:03:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 16:03:04 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 16:03:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 16:03:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 16:03:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 16:03:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 16:03:53 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 16:03:56 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 16:04:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 16:04:09 --> 2.4593 | SELECT COUNT(*) AS `numrows` FROM `gpi_data` WHERE `circle` LIKE '%ASSAM%' ESCAPE '!'
QUERY - 2021-08-23 16:04:09 --> 0.6913 | SELECT * FROM `gpi_data` WHERE `circle` LIKE '%ASSAM%' ESCAPE '!' ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-23 16:04:09 --> 2.8296 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 16:04:09 --> 0.0666 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 16:04:09 --> 2.3558 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 16:04:09 --> 2.7653 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 16:04:09 --> 2.5008 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 16:04:09 --> 0.0483 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 16:04:09 --> 2.4299 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 16:04:09 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 16:04:09 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 16:04:09 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 16:04:09 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 16:04:09 --> Total execution time: 16.2303
DEBUG - 2021-08-23 16:04:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 16:04:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 16:04:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 16:04:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 16:04:36 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 16:04:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 16:04:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 16:04:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 16:04:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 16:04:36 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 16:04:39 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 16:04:52 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 16:04:52 --> 2.4906 | SELECT COUNT(*) AS `numrows` FROM `gpi_data` WHERE `circle` LIKE '%ASSAM%' ESCAPE '!'
QUERY - 2021-08-23 16:04:52 --> 0.3766 | SELECT * FROM `gpi_data` WHERE `circle` LIKE '%ASSAM%' ESCAPE '!' ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-23 16:04:52 --> 2.5009 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 16:04:52 --> 0.0665 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 16:04:52 --> 2.8881 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 16:04:52 --> 3.2114 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 16:04:52 --> 2.4669 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 16:04:52 --> 0.0476 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 16:04:52 --> 2.3721 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 16:04:52 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 16:04:52 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 16:04:52 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 16:04:52 --> 0.0002 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 16:04:52 --> Total execution time: 16.5084
DEBUG - 2021-08-23 16:06:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 16:06:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 16:06:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 16:06:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 16:06:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 16:06:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 16:06:23 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
QUERY - 2021-08-23 16:06:23 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 16:06:23 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 16:06:23 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 16:06:23 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 16:06:23 --> Total execution time: 0.0872
DEBUG - 2021-08-23 16:06:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 16:06:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 16:06:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 16:06:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 16:06:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 16:06:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 16:06:38 --> 3.0045 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 16:06:38 --> 0.066 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 16:06:38 --> 2.5123 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 16:06:38 --> 2.3551 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 16:06:38 --> 2.6664 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 16:06:38 --> 0.0483 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 16:06:38 --> 2.4633 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 16:06:38 --> 0.0162 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-23 16:06:38 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 16:06:38 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 16:06:38 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 16:06:38 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 16:06:38 --> Total execution time: 13.2121
DEBUG - 2021-08-23 16:06:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 16:06:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 16:06:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 16:06:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 16:06:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 16:06:54 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 16:06:54 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-23 16:06:54 --> Total execution time: 0.0684
DEBUG - 2021-08-23 16:07:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 16:07:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 16:07:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 16:07:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 16:07:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 16:07:09 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 16:07:09 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-23 16:07:09 --> Total execution time: 0.0738
DEBUG - 2021-08-23 16:07:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 16:07:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 16:07:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 16:07:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 16:07:13 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 16:07:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 16:07:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 16:07:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 16:07:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 16:07:16 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 16:07:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 16:07:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 16:07:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 16:07:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 16:07:30 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 16:07:52 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 16:08:06 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 16:08:06 --> 21.743 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 16:08:06 --> 0.0274 | SELECT * FROM `gpi_data` ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-23 16:08:06 --> 2.3559 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 16:08:06 --> 0.0773 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 16:08:06 --> 2.7896 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 16:08:06 --> 2.6217 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 16:08:06 --> 2.8893 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 16:08:06 --> 0.0473 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 16:08:06 --> 2.6295 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 16:08:06 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 16:08:06 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 16:08:06 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 16:08:06 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 16:08:06 --> Total execution time: 35.2530
DEBUG - 2021-08-23 16:09:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 16:09:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 16:09:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 16:09:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 16:09:08 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 16:09:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 16:09:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 16:09:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 16:09:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 16:09:08 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 16:10:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 16:10:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 16:10:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 16:10:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 16:10:31 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 16:16:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 16:16:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 16:16:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 16:16:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 16:16:39 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 16:17:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 16:17:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 16:17:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 16:17:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 16:17:24 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 16:17:27 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 16:17:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 16:17:40 --> 2.6307 | SELECT COUNT(*) AS `numrows` FROM `gpi_data` WHERE `year` LIKE '%2019%' ESCAPE '!'
QUERY - 2021-08-23 16:17:40 --> 0.0227 | SELECT * FROM `gpi_data`  LIMIT 10
QUERY - 2021-08-23 16:17:40 --> 2.432 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 16:17:40 --> 0.0661 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 16:17:40 --> 2.9559 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 16:17:40 --> 2.5329 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 16:17:40 --> 2.5221 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 16:17:40 --> 0.0473 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 16:17:40 --> 2.6527 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 16:17:40 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 16:17:40 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 16:17:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 16:17:40 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 16:17:40 --> Total execution time: 15.9340
DEBUG - 2021-08-23 16:17:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 16:17:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 16:17:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 16:17:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 16:17:59 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 16:18:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 16:18:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 16:18:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 16:18:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 16:18:00 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 16:19:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 16:19:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 16:19:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 16:19:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 16:19:37 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 16:19:49 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 16:19:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 16:19:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 16:19:49 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 16:19:49 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 16:20:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 16:20:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 16:20:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 16:20:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 16:20:08 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 16:24:17 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 16:24:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 16:24:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 16:24:17 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 16:24:17 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 16:25:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 16:25:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 16:25:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 16:25:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 16:25:18 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 16:27:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 16:27:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 16:27:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 16:27:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 16:27:25 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 16:28:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 16:28:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 16:28:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 16:28:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 16:28:05 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 16:28:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 16:28:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 16:28:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 16:28:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 16:28:40 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 16:31:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 16:31:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 16:31:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 16:31:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 16:31:29 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 16:32:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 16:32:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 16:32:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 16:32:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 16:32:56 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 16:33:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 16:33:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 16:33:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 16:33:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 16:33:31 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 16:33:39 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 16:33:52 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 16:33:52 --> 2.5596 | SELECT COUNT(*) AS `numrows` FROM `gpi_data` WHERE `circle` LIKE '%ANDHRAPRADESH%' ESCAPE '!' AND  `year` LIKE '%2019%' ESCAPE '!' AND  `state` LIKE '%ASSAM%' ESCAPE '!' AND  `city` LIKE '%Pan India%' ESCAPE '!'
QUERY - 2021-08-23 16:33:52 --> 4.8026 | select * from gpi_data where circle like '%ANDHRAPRADESH%' AND year like '%2019%' AND state like '%ASSAM%' AND city like '%Pan India%' LIMIT 10,10;
QUERY - 2021-08-23 16:33:52 --> 3.2858 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 16:33:52 --> 0.0665 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 16:33:52 --> 2.7999 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 16:33:52 --> 2.4693 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 16:33:52 --> 2.5528 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 16:33:52 --> 0.0475 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 16:33:52 --> 2.5294 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 16:33:52 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 16:33:52 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 16:33:52 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 16:33:52 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 16:33:52 --> Total execution time: 21.1968
DEBUG - 2021-08-23 16:33:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 16:33:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 16:33:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 16:33:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 16:33:55 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 16:36:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 16:36:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 16:36:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 16:36:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 16:36:37 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 16:36:59 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 16:37:11 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 16:37:11 --> 21.5338 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 16:37:11 --> 0.0221 | select * from gpi_data LIMIT 10,10;
QUERY - 2021-08-23 16:37:11 --> 2.4945 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 16:37:11 --> 0.0661 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 16:37:11 --> 2.3559 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 16:37:11 --> 2.4999 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 16:37:11 --> 2.5446 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 16:37:11 --> 0.0477 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 16:37:11 --> 2.4936 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 16:37:11 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 16:37:11 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 16:37:11 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 16:37:11 --> 0.0002 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 16:37:11 --> Total execution time: 34.1511
DEBUG - 2021-08-23 16:37:17 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 16:37:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 16:37:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 16:37:17 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 16:37:17 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 16:37:39 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 16:37:52 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 16:37:52 --> 21.8204 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 16:37:52 --> 0.0222 | select * from gpi_data LIMIT 10,10;
QUERY - 2021-08-23 16:37:52 --> 2.5047 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 16:37:52 --> 0.0661 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 16:37:52 --> 2.7225 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 16:37:52 --> 3.2222 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 16:37:52 --> 2.4445 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 16:37:52 --> 0.048 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 16:37:52 --> 2.6183 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 16:37:52 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 16:37:52 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 16:37:52 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 16:37:52 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 16:37:52 --> Total execution time: 35.5416
DEBUG - 2021-08-23 16:38:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 16:38:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 16:38:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 16:38:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 16:38:08 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 16:40:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 16:40:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 16:40:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 16:40:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 16:40:21 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 16:42:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 16:42:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 16:42:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 16:42:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 16:42:50 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 16:43:11 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 16:43:24 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 16:43:24 --> 21.2709 | SELECT COUNT(*) AS `numrows` FROM `gpi_data`
QUERY - 2021-08-23 16:43:24 --> 0.0217 | select * from gpi_data LIMIT 10,10;
QUERY - 2021-08-23 16:43:24 --> 2.3397 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 16:43:24 --> 0.0656 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 16:43:24 --> 2.4446 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 16:43:24 --> 2.5114 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 16:43:24 --> 2.9882 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 16:43:24 --> 0.0483 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 16:43:24 --> 2.4961 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 16:43:24 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 16:43:24 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 16:43:24 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 16:43:24 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 16:43:24 --> Total execution time: 34.2659
DEBUG - 2021-08-23 16:46:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 16:46:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 16:46:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 16:46:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 16:46:51 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 16:47:57 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 16:47:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 16:47:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 16:47:57 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 16:47:57 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 16:48:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 16:48:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 16:48:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 16:48:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 16:48:43 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 16:49:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 16:49:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 16:49:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 16:49:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 16:49:40 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 16:52:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 16:52:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 16:52:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 16:52:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 16:52:21 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 16:53:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 16:53:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 16:53:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 16:53:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 16:53:04 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 16:53:26 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 16:53:47 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 16:53:47 --> 22.4163 | select count(id) as totalrows from gpi_data;
QUERY - 2021-08-23 16:53:47 --> 0.0219 | select * from gpi_data LIMIT 10,10;
QUERY - 2021-08-23 16:53:47 --> 3.2256 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 16:53:47 --> 0.0664 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 16:53:47 --> 7.0221 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 16:53:47 --> 4.1997 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 16:53:47 --> 3.7107 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 16:53:47 --> 0.0489 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 16:53:47 --> 2.3741 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 16:53:47 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 16:53:47 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 16:53:47 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 16:53:47 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 16:53:47 --> Total execution time: 43.1731
DEBUG - 2021-08-23 16:54:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 16:54:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 16:54:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 16:54:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 16:54:38 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 16:54:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 16:54:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 16:54:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 16:54:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 16:54:38 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 16:54:46 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-23 16:55:11 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 16:55:11 --> 2.8204 | select count(id) as totalrows from gpi_data where year like '%2020%';
QUERY - 2021-08-23 16:55:11 --> 5.6385 | select * from gpi_data where year like '%2020%' LIMIT 10,10;
QUERY - 2021-08-23 16:55:11 --> 4.4168 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-23 16:55:11 --> 0.0666 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-23 16:55:11 --> 4.4 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-23 16:55:11 --> 3.4335 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-23 16:55:11 --> 3.5871 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-23 16:55:11 --> 0.0486 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-23 16:55:11 --> 8.3969 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-23 16:55:11 --> 0.0013 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 16:55:11 --> 0.0009 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 16:55:11 --> 0.0015 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 16:55:11 --> 0.0023 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 16:55:11 --> Total execution time: 32.9293
DEBUG - 2021-08-23 17:22:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 17:22:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 17:22:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 17:22:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 17:22:05 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 17:22:11 --> 2.727 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-23 17:22:11 --> 0.8826 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-23 17:22:11 --> 2.4504 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-23 17:22:11 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-23 17:22:11 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 17:22:11 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 17:22:11 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-23 17:22:11 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-23 17:22:11 --> Total execution time: 6.1323
DEBUG - 2021-08-23 17:22:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 17:22:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 17:22:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 17:22:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 17:22:12 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-23 17:22:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 17:22:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-23 17:22:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 17:22:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-23 17:22:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-23 17:22:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-23 17:22:15 --> 2.492 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-23 17:22:15 --> Total execution time: 2.5800
DEBUG - 2021-08-23 17:22:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 17:22:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 17:22:38 --> 23.3394 | select count(id) as total from gpi_data
DEBUG - 2021-08-23 17:22:38 --> Total execution time: 25.8516
DEBUG - 2021-08-23 17:22:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-23 17:22:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-23 17:22:38 --> 0.0771 | select count(distinct(campaign_name)) as total from gpi_data
DEBUG - 2021-08-23 17:22:38 --> Total execution time: 25.9641
