<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2021-08-25 12:53:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 12:53:38 --> No URI present. Default controller set.
DEBUG - 2021-08-25 12:53:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 12:53:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 12:53:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 12:53:38 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 12:53:38 --> Form_validation class already loaded. Second attempt ignored.
QUERY - 2021-08-25 12:53:38 --> 0.3337 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-25 12:53:38 --> Total execution time: 0.4359
DEBUG - 2021-08-25 12:53:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 12:53:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 12:53:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 12:53:40 --> No URI present. Default controller set.
DEBUG - 2021-08-25 12:53:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 12:53:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 12:53:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 12:53:41 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 12:53:41 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 12:53:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 12:53:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 12:53:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 12:53:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 12:53:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 12:53:47 --> 2.9678 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-25 12:53:47 --> 1.6462 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-25 12:53:47 --> 1.9265 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-25 12:53:47 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-25 12:53:47 --> 0.042 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 12:53:47 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 12:53:47 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 12:53:47 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-25 12:53:47 --> Total execution time: 6.6540
DEBUG - 2021-08-25 12:53:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 12:53:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 12:53:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 12:53:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 12:53:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 12:53:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 12:53:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 12:53:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 12:53:48 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 12:53:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 12:53:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-25 12:53:50 --> 1.4703 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-25 12:53:50 --> Total execution time: 1.5772
DEBUG - 2021-08-25 12:53:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 12:53:50 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 12:53:50 --> 0.0004 | select count(id) as total from gpi_data
DEBUG - 2021-08-25 12:53:50 --> Total execution time: 1.5456
DEBUG - 2021-08-25 12:53:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 12:53:50 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 12:53:50 --> 0.052 | select count(distinct(campaign_name)) as total from gpi_data
DEBUG - 2021-08-25 12:53:50 --> Total execution time: 1.6187
DEBUG - 2021-08-25 13:10:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:10:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:10:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:10:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:10:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:10:35 --> 0.0006 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-25 13:10:35 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:10:35 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:10:35 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:10:35 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-25 13:10:35 --> Total execution time: 0.0779
DEBUG - 2021-08-25 13:10:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:10:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:10:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:10:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:10:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:10:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:10:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:10:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:10:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:10:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:10:36 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:10:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:10:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:10:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:10:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:10:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:10:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:10:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:10:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:10:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:10:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:10:37 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:10:39 --> 1.229 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-25 13:10:39 --> Total execution time: 2.6454
DEBUG - 2021-08-25 13:10:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:10:39 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:10:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:10:40 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:10:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:10:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:10:41 --> 0.0003 | select count(id) as total from gpi_data
DEBUG - 2021-08-25 13:10:41 --> Total execution time: 4.8248
DEBUG - 2021-08-25 13:10:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:10:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:10:41 --> 0.0008 | select count(distinct(campaign_name)) as total from gpi_data
DEBUG - 2021-08-25 13:10:41 --> Total execution time: 4.8477
DEBUG - 2021-08-25 13:13:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:13:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:13:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:13:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:13:31 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:13:31 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-25 13:13:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:13:31 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:13:31 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:13:31 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-25 13:13:31 --> Total execution time: 0.0764
DEBUG - 2021-08-25 13:13:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:13:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:13:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:13:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:13:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:13:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:13:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:13:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:13:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:13:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:13:31 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:13:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:13:32 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:13:32 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:13:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:13:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:13:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:13:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:13:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:13:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:13:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:13:33 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:13:34 --> 1.2618 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-25 13:13:34 --> Total execution time: 2.8312
DEBUG - 2021-08-25 13:13:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:13:34 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:13:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:13:36 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:13:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:13:37 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:13:37 --> 0.0004 | select count(distinct(campaign_name)) as total from gpi_data
DEBUG - 2021-08-25 13:13:37 --> Total execution time: 5.0730
DEBUG - 2021-08-25 13:13:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:13:37 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:13:37 --> 0.0003 | select count(id) as total from gpi_data
DEBUG - 2021-08-25 13:13:37 --> Total execution time: 5.0929
DEBUG - 2021-08-25 13:13:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:13:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:13:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:13:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:13:41 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:13:41 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-25 13:13:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:13:41 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-25 13:13:41 --> 0.0004 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-25 13:13:41 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-25 13:13:41 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:13:41 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:13:41 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-25 13:13:41 --> Total execution time: 0.0760
DEBUG - 2021-08-25 13:13:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:13:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:13:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:13:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:13:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:13:42 --> 0.0007 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-25 13:13:42 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:13:42 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:13:42 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:13:42 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-25 13:13:42 --> Total execution time: 0.1275
DEBUG - 2021-08-25 13:13:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:13:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:13:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:13:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:13:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:13:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:13:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:13:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:13:43 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:13:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:13:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:13:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:13:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:13:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:13:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:13:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:13:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:13:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:13:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:13:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:13:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:13:44 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:13:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:13:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:13:46 --> 1.2163 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-25 13:13:46 --> Total execution time: 3.7588
DEBUG - 2021-08-25 13:13:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:13:46 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:13:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:13:48 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:13:48 --> 0.0003 | select count(id) as total from gpi_data
DEBUG - 2021-08-25 13:13:48 --> Total execution time: 4.9469
DEBUG - 2021-08-25 13:13:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:13:48 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:13:48 --> 0.0005 | select count(distinct(campaign_name)) as total from gpi_data
DEBUG - 2021-08-25 13:13:48 --> Total execution time: 4.9647
DEBUG - 2021-08-25 13:14:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:14:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:14:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:14:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:14:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:14:16 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-25 13:14:16 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:14:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:14:16 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:14:16 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-25 13:14:16 --> Total execution time: 0.0637
DEBUG - 2021-08-25 13:14:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:14:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:14:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:14:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:14:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:14:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:14:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:14:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:14:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:14:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:14:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:14:16 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:14:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:14:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:14:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:14:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:14:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:14:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:14:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:14:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-25 13:14:18 --> 1.4214 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-25 13:14:18 --> Total execution time: 1.5004
DEBUG - 2021-08-25 13:14:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:14:18 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:14:19 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:14:19 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:14:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:14:20 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:14:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:14:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:14:22 --> 0.0006 | select count(distinct(campaign_name)) as total from gpi_data
DEBUG - 2021-08-25 13:14:22 --> Total execution time: 6.0985
DEBUG - 2021-08-25 13:14:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:14:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:14:22 --> 0.0029 | select count(id) as total from gpi_data
DEBUG - 2021-08-25 13:14:22 --> Total execution time: 6.1220
DEBUG - 2021-08-25 13:15:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:15:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:15:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:15:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:15:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:15:00 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-25 13:15:00 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:15:00 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:15:00 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:15:00 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-25 13:15:00 --> Total execution time: 0.0692
DEBUG - 2021-08-25 13:15:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:15:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:15:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:15:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:15:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:15:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:15:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:15:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:15:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:15:00 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:15:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:15:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:15:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:15:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:15:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:15:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:15:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:15:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:15:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:15:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:15:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:15:02 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:15:04 --> 1.4056 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-25 13:15:04 --> Total execution time: 3.1955
DEBUG - 2021-08-25 13:15:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:15:04 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:15:04 --> 0.0003 | select count(id) as total from gpi_data
DEBUG - 2021-08-25 13:15:04 --> Total execution time: 3.0507
DEBUG - 2021-08-25 13:15:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:15:04 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:15:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:15:05 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:15:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:15:06 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:15:06 --> 0.0006 | select count(distinct(campaign_name)) as total from gpi_data
DEBUG - 2021-08-25 13:15:06 --> Total execution time: 5.3765
DEBUG - 2021-08-25 13:15:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:15:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:15:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:15:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:15:47 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:15:47 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-25 13:15:47 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:15:47 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:15:47 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:15:47 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-25 13:15:47 --> Total execution time: 0.0700
DEBUG - 2021-08-25 13:15:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:15:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:15:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:15:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:15:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:15:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:15:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:15:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:15:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:15:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:15:47 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:15:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:15:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:15:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:15:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:15:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:15:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:15:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:15:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:15:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:15:49 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:15:49 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:15:50 --> 1.2405 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-25 13:15:50 --> Total execution time: 2.7794
DEBUG - 2021-08-25 13:15:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:15:50 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:15:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:15:52 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:15:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:15:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:15:54 --> 0.0003 | select count(id) as total from gpi_data
DEBUG - 2021-08-25 13:15:54 --> Total execution time: 6.4319
DEBUG - 2021-08-25 13:15:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:15:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:15:54 --> 0.0007 | select count(distinct(campaign_name)) as total from gpi_data
DEBUG - 2021-08-25 13:15:54 --> Total execution time: 6.4538
DEBUG - 2021-08-25 13:18:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:18:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:18:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:18:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:18:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:18:21 --> 0.0008 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-25 13:18:21 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:18:21 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:18:21 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:18:21 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-25 13:18:21 --> Total execution time: 0.0780
DEBUG - 2021-08-25 13:18:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:18:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:18:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:18:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:18:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:18:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:18:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:18:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:18:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:18:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:18:21 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:18:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:18:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:18:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:18:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:18:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:18:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:18:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:18:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:18:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-25 13:18:23 --> 1.3816 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-25 13:18:23 --> Total execution time: 1.4805
DEBUG - 2021-08-25 13:18:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:18:23 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:18:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:18:24 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:18:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:18:25 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:18:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:18:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:18:26 --> 0.0003 | select count(id) as total from gpi_data
DEBUG - 2021-08-25 13:18:26 --> Total execution time: 4.9333
DEBUG - 2021-08-25 13:18:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:18:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:18:26 --> 0.0008 | select count(distinct(campaign_name)) as total from gpi_data
DEBUG - 2021-08-25 13:18:26 --> Total execution time: 4.9507
DEBUG - 2021-08-25 13:19:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:19:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:19:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:19:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:19:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:19:22 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-25 13:19:22 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:19:22 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:19:22 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:19:22 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-25 13:19:22 --> Total execution time: 0.0755
DEBUG - 2021-08-25 13:19:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:19:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:19:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:19:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:19:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:19:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:19:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:19:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:19:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:19:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:19:23 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:19:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:19:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:19:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:19:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:19:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:19:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:19:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:19:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:19:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-25 13:19:24 --> 1.3631 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-25 13:19:24 --> Total execution time: 1.4857
DEBUG - 2021-08-25 13:19:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:19:24 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:19:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:19:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:19:25 --> 0.0007 | select count(distinct(campaign_name)) as total from gpi_data
DEBUG - 2021-08-25 13:19:25 --> Total execution time: 2.6134
DEBUG - 2021-08-25 13:19:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:19:25 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:19:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:19:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:19:27 --> 0.0003 | select count(id) as total from gpi_data
DEBUG - 2021-08-25 13:19:27 --> Total execution time: 3.8312
DEBUG - 2021-08-25 13:19:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:19:27 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:20:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:20:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:20:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:20:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:20:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:20:41 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-25 13:20:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:20:41 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:20:41 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:20:41 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-25 13:20:41 --> Total execution time: 0.0687
DEBUG - 2021-08-25 13:20:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:20:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:20:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:20:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:20:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:20:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:20:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:20:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:20:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:20:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:20:42 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:20:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:20:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:20:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:20:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:20:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:20:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:20:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:20:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:20:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-25 13:20:43 --> 1.444 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-25 13:20:43 --> Total execution time: 1.5455
DEBUG - 2021-08-25 13:20:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:20:43 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:20:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:20:44 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:20:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:20:46 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:20:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:20:47 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:20:47 --> 0.0003 | select count(id) as total from gpi_data
DEBUG - 2021-08-25 13:20:47 --> Total execution time: 4.9092
DEBUG - 2021-08-25 13:20:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:20:47 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:20:47 --> 0.0157 | select count(distinct(campaign_name)) as total from gpi_data
DEBUG - 2021-08-25 13:20:47 --> Total execution time: 4.9229
DEBUG - 2021-08-25 13:21:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:21:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:21:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:21:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:21:52 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:21:52 --> 0.0006 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-25 13:21:52 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:21:52 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:21:52 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:21:52 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-25 13:21:52 --> Total execution time: 0.0684
DEBUG - 2021-08-25 13:21:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:21:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:21:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:21:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:21:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:21:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:21:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:21:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:21:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:21:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:21:52 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:21:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:21:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:21:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:21:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:21:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:21:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:21:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:21:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:21:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:21:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:21:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:21:55 --> 1.1774 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-25 13:21:55 --> Total execution time: 2.8415
DEBUG - 2021-08-25 13:21:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:21:55 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:21:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:21:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:21:56 --> 0.0005 | select count(id) as total from gpi_data
DEBUG - 2021-08-25 13:21:56 --> Total execution time: 3.7657
DEBUG - 2021-08-25 13:21:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:21:56 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:21:57 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:21:57 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:21:57 --> 0.0006 | select count(distinct(campaign_name)) as total from gpi_data
DEBUG - 2021-08-25 13:21:57 --> Total execution time: 4.9357
DEBUG - 2021-08-25 13:22:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:22:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:22:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:22:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:22:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:22:15 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-25 13:22:15 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:22:15 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:22:15 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:22:15 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-25 13:22:15 --> Total execution time: 0.0780
DEBUG - 2021-08-25 13:22:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:22:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:22:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:22:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:22:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:22:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:22:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:22:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:22:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:22:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:22:15 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:22:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:22:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:22:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:22:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:22:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:22:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:22:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:22:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:22:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:22:17 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:22:17 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:22:18 --> 1.1606 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-25 13:22:18 --> Total execution time: 2.8470
DEBUG - 2021-08-25 13:22:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:22:18 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:22:19 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:22:19 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:22:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:22:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:22:20 --> 0.0004 | select count(id) as total from gpi_data
DEBUG - 2021-08-25 13:22:20 --> Total execution time: 4.8968
DEBUG - 2021-08-25 13:22:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:22:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:22:20 --> 0.0092 | select count(distinct(campaign_name)) as total from gpi_data
DEBUG - 2021-08-25 13:22:20 --> Total execution time: 4.9212
DEBUG - 2021-08-25 13:22:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:22:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:22:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:22:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:22:55 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:22:55 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-25 13:22:55 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:22:55 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:22:55 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:22:55 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-25 13:22:55 --> Total execution time: 0.0783
DEBUG - 2021-08-25 13:22:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:22:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:22:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:22:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:22:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:22:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:22:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:22:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:22:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:22:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:22:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:22:56 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:22:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:22:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:22:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:22:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:22:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:22:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:22:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:22:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:22:57 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:22:57 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:22:58 --> 1.1977 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-25 13:22:58 --> Total execution time: 2.8573
DEBUG - 2021-08-25 13:22:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:22:58 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:23:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:23:00 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:23:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:23:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:23:01 --> 0.0006 | select count(distinct(campaign_name)) as total from gpi_data
DEBUG - 2021-08-25 13:23:01 --> Total execution time: 5.2243
DEBUG - 2021-08-25 13:23:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:23:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:23:01 --> 0.0003 | select count(id) as total from gpi_data
DEBUG - 2021-08-25 13:23:01 --> Total execution time: 5.2409
DEBUG - 2021-08-25 13:24:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:24:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:24:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:24:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:24:01 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:24:01 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-25 13:24:01 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:24:01 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:24:01 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:24:01 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-25 13:24:01 --> Total execution time: 0.0815
DEBUG - 2021-08-25 13:24:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:24:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:24:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:24:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:24:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:24:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:24:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:24:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:24:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:24:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:24:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:24:02 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:24:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:24:02 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:24:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:24:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:24:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:24:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:24:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:24:02 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-25 13:24:03 --> 1.4067 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-25 13:24:03 --> Total execution time: 1.5129
DEBUG - 2021-08-25 13:24:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:24:03 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:24:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:24:05 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:24:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:24:06 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:24:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:24:07 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:24:07 --> 0.0014 | select count(id) as total from gpi_data
DEBUG - 2021-08-25 13:24:07 --> Total execution time: 4.8798
DEBUG - 2021-08-25 13:24:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:24:07 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:24:07 --> 0.0006 | select count(distinct(campaign_name)) as total from gpi_data
DEBUG - 2021-08-25 13:24:07 --> Total execution time: 4.8854
DEBUG - 2021-08-25 13:24:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:24:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:24:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:24:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:24:50 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:24:50 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-25 13:24:50 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:24:50 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:24:50 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:24:50 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-25 13:24:50 --> Total execution time: 0.0702
DEBUG - 2021-08-25 13:24:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:24:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:24:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:24:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:24:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:24:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:24:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:24:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:24:51 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:24:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:24:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:24:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:24:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:24:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:24:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:24:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:24:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:24:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:24:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:24:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:24:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:24:52 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:24:53 --> 1.1901 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-25 13:24:53 --> Total execution time: 2.6218
DEBUG - 2021-08-25 13:24:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:24:53 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:24:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:24:55 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:24:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:24:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:24:56 --> 0.0006 | select count(distinct(campaign_name)) as total from gpi_data
DEBUG - 2021-08-25 13:24:56 --> Total execution time: 4.8399
DEBUG - 2021-08-25 13:24:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:24:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:24:56 --> 0.0003 | select count(id) as total from gpi_data
DEBUG - 2021-08-25 13:24:56 --> Total execution time: 4.8570
DEBUG - 2021-08-25 13:25:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:25:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:25:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:25:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:25:11 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:25:11 --> 0.0008 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-25 13:25:11 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:25:11 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:25:11 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:25:11 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-25 13:25:11 --> Total execution time: 0.0685
DEBUG - 2021-08-25 13:25:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:25:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:25:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:25:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:25:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:25:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:25:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:25:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:25:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:25:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:25:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:25:12 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:25:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:25:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:25:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:25:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:25:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:25:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:25:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:25:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:25:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:25:13 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:25:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:25:15 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:25:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:25:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:25:17 --> 1.2188 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-25 13:25:17 --> Total execution time: 5.2170
DEBUG - 2021-08-25 13:25:17 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:25:17 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:25:17 --> 0.0003 | select count(id) as total from gpi_data
DEBUG - 2021-08-25 13:25:17 --> Total execution time: 5.0659
DEBUG - 2021-08-25 13:25:17 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:25:17 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:25:17 --> 0.0004 | select count(distinct(campaign_name)) as total from gpi_data
DEBUG - 2021-08-25 13:25:17 --> Total execution time: 5.0512
DEBUG - 2021-08-25 13:26:32 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:26:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:26:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:26:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:26:32 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:26:32 --> 0.0006 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-25 13:26:32 --> 0.0008 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:26:32 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:26:32 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:26:32 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-25 13:26:32 --> Total execution time: 0.0816
DEBUG - 2021-08-25 13:26:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:26:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:26:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:26:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:26:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:26:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:26:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:26:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:26:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:26:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:26:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:26:33 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:26:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:26:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:26:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:26:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:26:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:26:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:26:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:26:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:26:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:26:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:26:35 --> 1.1381 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-25 13:26:35 --> Total execution time: 2.9243
DEBUG - 2021-08-25 13:26:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:26:35 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:26:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:26:37 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:26:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:26:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:26:38 --> 0.0006 | select count(distinct(campaign_name)) as total from gpi_data
DEBUG - 2021-08-25 13:26:38 --> Total execution time: 5.1151
DEBUG - 2021-08-25 13:26:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:26:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:26:38 --> 0.0003 | select count(id) as total from gpi_data
DEBUG - 2021-08-25 13:26:38 --> Total execution time: 5.1145
DEBUG - 2021-08-25 13:30:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:30:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:30:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:30:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:30:59 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:30:59 --> 0.0014 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-25 13:30:59 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:30:59 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:30:59 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:30:59 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-25 13:30:59 --> Total execution time: 0.0828
DEBUG - 2021-08-25 13:31:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:31:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:31:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:31:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:31:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:31:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:31:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:31:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:31:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:31:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:31:00 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:31:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:31:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:31:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:31:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:31:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:31:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:31:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:31:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:31:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-25 13:31:01 --> 1.2909 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-25 13:31:01 --> Total execution time: 1.3940
DEBUG - 2021-08-25 13:31:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:31:01 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:31:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:31:02 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:31:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:31:03 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:31:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:31:05 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:31:05 --> 0.0009 | select count(distinct(campaign_name)) as total from gpi_data
DEBUG - 2021-08-25 13:31:05 --> Total execution time: 5.0230
DEBUG - 2021-08-25 13:31:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:31:05 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:31:05 --> 0.0003 | select count(id) as total from gpi_data
DEBUG - 2021-08-25 13:31:05 --> Total execution time: 5.0470
DEBUG - 2021-08-25 13:31:17 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:31:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:31:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:31:17 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:31:17 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:31:17 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-25 13:31:17 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:31:17 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:31:17 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:31:17 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-25 13:31:17 --> Total execution time: 0.0611
DEBUG - 2021-08-25 13:31:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:31:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:31:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:31:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:31:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:31:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:31:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:31:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:31:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:31:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:31:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:31:18 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:31:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:31:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:31:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:31:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:31:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:31:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:31:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:31:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:31:19 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:31:19 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:31:19 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:31:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:31:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-25 13:31:21 --> 1.2353 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-25 13:31:21 --> Total execution time: 2.8226
DEBUG - 2021-08-25 13:31:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:31:21 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:31:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:31:22 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:31:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:31:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:31:23 --> 0.0004 | select count(distinct(campaign_name)) as total from gpi_data
DEBUG - 2021-08-25 13:31:23 --> Total execution time: 5.0391
DEBUG - 2021-08-25 13:31:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:31:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:31:23 --> 0.0007 | select count(id) as total from gpi_data
DEBUG - 2021-08-25 13:31:23 --> Total execution time: 5.0481
DEBUG - 2021-08-25 13:31:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:31:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:31:23 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-25 13:31:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:31:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:31:23 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:31:23 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-25 13:31:23 --> Total execution time: 3.6370
DEBUG - 2021-08-25 13:31:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:31:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:31:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:31:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:31:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:31:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:31:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:31:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:31:23 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:31:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:31:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:31:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:31:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:31:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:31:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:31:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:31:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:31:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:31:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:31:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:31:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:31:25 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:31:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:31:26 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:31:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:31:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:31:28 --> 1.1045 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-25 13:31:28 --> Total execution time: 5.1394
DEBUG - 2021-08-25 13:31:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:31:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:31:28 --> 0.0004 | select count(id) as total from gpi_data
DEBUG - 2021-08-25 13:31:28 --> Total execution time: 5.0725
DEBUG - 2021-08-25 13:31:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:31:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:31:28 --> 0.0007 | select count(distinct(campaign_name)) as total from gpi_data
DEBUG - 2021-08-25 13:31:28 --> Total execution time: 5.0890
DEBUG - 2021-08-25 13:36:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:36:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:36:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:36:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:36:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:36:08 --> 0.0006 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-25 13:36:08 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:36:08 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:36:08 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:36:08 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-25 13:36:08 --> Total execution time: 0.0747
DEBUG - 2021-08-25 13:36:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:36:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:36:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:36:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:36:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:36:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:36:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:36:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:36:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:36:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:36:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:36:09 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:36:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:36:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:36:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:36:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:36:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:36:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:36:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:36:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:36:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:36:10 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:36:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:36:12 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:36:13 --> 1.3005 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-25 13:36:13 --> Total execution time: 4.3167
DEBUG - 2021-08-25 13:36:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:36:13 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:36:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:36:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:36:14 --> 0.0005 | select count(distinct(campaign_name)) as total from gpi_data
DEBUG - 2021-08-25 13:36:14 --> Total execution time: 5.3377
DEBUG - 2021-08-25 13:36:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:36:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:36:14 --> 0.0003 | select count(id) as total from gpi_data
DEBUG - 2021-08-25 13:36:14 --> Total execution time: 5.3689
DEBUG - 2021-08-25 13:41:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:41:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:41:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:41:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:41:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:41:38 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-25 13:41:38 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:41:38 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:41:38 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:41:38 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-25 13:41:38 --> Total execution time: 0.0718
DEBUG - 2021-08-25 13:41:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:41:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:41:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:41:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:41:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:41:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:41:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:41:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:41:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:41:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:41:39 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:41:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:41:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:41:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:41:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:41:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:41:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:41:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:41:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:41:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:41:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:41:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:41:41 --> 1.2601 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-25 13:41:41 --> Total execution time: 2.7396
DEBUG - 2021-08-25 13:41:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:41:41 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:41:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:41:42 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:41:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:41:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:41:44 --> 0.0003 | select count(id) as total from gpi_data
DEBUG - 2021-08-25 13:41:44 --> Total execution time: 4.9804
DEBUG - 2021-08-25 13:41:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:41:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:41:44 --> 0.0007 | select count(distinct(campaign_name)) as total from gpi_data
DEBUG - 2021-08-25 13:41:44 --> Total execution time: 4.9967
DEBUG - 2021-08-25 13:42:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:42:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:42:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:42:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:42:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:42:26 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-25 13:42:26 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:42:26 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:42:26 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:42:26 --> 0.0007 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-25 13:42:26 --> Total execution time: 0.0650
DEBUG - 2021-08-25 13:42:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:42:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:42:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:42:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:42:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:42:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:42:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:42:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:42:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:42:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:42:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:42:27 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:42:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:42:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:42:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:42:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:42:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:42:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:42:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:42:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-25 13:42:28 --> 1.3224 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-25 13:42:28 --> Total execution time: 1.4202
DEBUG - 2021-08-25 13:42:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:42:28 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:42:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:42:29 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:42:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:42:30 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:42:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:42:32 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:42:32 --> 0.0003 | select count(id) as total from gpi_data
DEBUG - 2021-08-25 13:42:32 --> Total execution time: 4.9512
DEBUG - 2021-08-25 13:42:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:42:32 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:42:32 --> 0.0007 | select count(distinct(campaign_name)) as total from gpi_data
DEBUG - 2021-08-25 13:42:32 --> Total execution time: 4.9665
DEBUG - 2021-08-25 13:49:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:49:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:49:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:49:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:49:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:49:29 --> 0.0006 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-25 13:49:29 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:49:29 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:49:29 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:49:29 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-25 13:49:29 --> Total execution time: 0.0707
DEBUG - 2021-08-25 13:49:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:49:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:49:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:49:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:49:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:49:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:49:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:49:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:49:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:49:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:49:29 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:49:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:49:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:49:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:49:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:49:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:49:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:49:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:49:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:49:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-25 13:49:31 --> 1.3124 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-25 13:49:31 --> Total execution time: 1.3952
DEBUG - 2021-08-25 13:49:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:49:31 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:49:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:49:32 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:49:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:49:33 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:49:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:49:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:49:35 --> 0.0005 | select count(distinct(campaign_name)) as total from gpi_data
DEBUG - 2021-08-25 13:49:35 --> Total execution time: 5.1458
DEBUG - 2021-08-25 13:49:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:49:35 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:49:35 --> 0.0003 | select count(id) as total from gpi_data
DEBUG - 2021-08-25 13:49:35 --> Total execution time: 5.1343
DEBUG - 2021-08-25 13:49:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:49:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:49:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:49:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:49:36 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:49:36 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-25 13:49:36 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:49:36 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:49:36 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 13:49:36 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-25 13:49:36 --> Total execution time: 0.0688
DEBUG - 2021-08-25 13:49:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:49:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:49:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:49:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:49:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:49:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:49:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:49:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:49:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:49:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:49:36 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:49:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:49:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:49:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:49:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 13:49:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:49:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 13:49:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:49:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:49:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 13:49:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:49:38 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:49:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:49:39 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 13:49:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:49:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:49:41 --> 1.3565 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-25 13:49:41 --> Total execution time: 5.3829
DEBUG - 2021-08-25 13:49:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:49:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:49:41 --> 0.0003 | select count(id) as total from gpi_data
DEBUG - 2021-08-25 13:49:41 --> Total execution time: 5.2957
DEBUG - 2021-08-25 13:49:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 13:49:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 13:49:41 --> 0.0004 | select count(distinct(campaign_name)) as total from gpi_data
DEBUG - 2021-08-25 13:49:41 --> Total execution time: 5.3148
DEBUG - 2021-08-25 14:07:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:07:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:07:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 14:07:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:07:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 14:07:42 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-25 14:07:42 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 14:07:42 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 14:07:42 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 14:07:42 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-25 14:07:42 --> Total execution time: 0.0760
DEBUG - 2021-08-25 14:07:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:07:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:07:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:07:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:07:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:07:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:07:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:07:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:07:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 14:07:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:07:43 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 14:07:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 14:07:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 14:07:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 14:07:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:07:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:07:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:07:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:07:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 14:07:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-25 14:07:44 --> 1.3166 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-25 14:07:44 --> Total execution time: 1.4067
DEBUG - 2021-08-25 14:07:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:07:44 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 14:07:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:07:46 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 14:07:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:07:47 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 14:07:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:07:48 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 14:07:48 --> 0.0007 | select count(distinct(campaign_name)) as total from gpi_data
DEBUG - 2021-08-25 14:07:48 --> Total execution time: 5.0025
DEBUG - 2021-08-25 14:07:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:07:48 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 14:07:48 --> 0.0003 | select count(id) as total from gpi_data
DEBUG - 2021-08-25 14:07:48 --> Total execution time: 5.0141
DEBUG - 2021-08-25 14:07:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:07:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:07:58 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 14:07:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:07:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 14:07:58 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-25 14:07:58 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 14:07:58 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 14:07:58 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 14:07:58 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-25 14:07:58 --> Total execution time: 0.0675
DEBUG - 2021-08-25 14:07:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:07:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:07:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:07:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:07:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:07:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:07:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:07:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:07:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 14:07:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:07:59 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 14:07:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 14:07:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:07:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:07:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:07:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:07:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 14:07:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 14:07:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 14:07:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-25 14:08:00 --> 1.2848 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-25 14:08:00 --> Total execution time: 1.3846
DEBUG - 2021-08-25 14:08:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:08:00 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 14:08:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:08:01 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 14:08:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:08:02 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 14:08:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:08:04 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 14:08:04 --> 0.0003 | select count(id) as total from gpi_data
DEBUG - 2021-08-25 14:08:04 --> Total execution time: 4.9522
DEBUG - 2021-08-25 14:08:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:08:04 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 14:08:04 --> 0.0005 | select count(distinct(campaign_name)) as total from gpi_data
DEBUG - 2021-08-25 14:08:04 --> Total execution time: 4.9753
DEBUG - 2021-08-25 14:08:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:08:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:08:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 14:08:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:08:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 14:08:34 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-25 14:08:34 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 14:08:34 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 14:08:34 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 14:08:34 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-25 14:08:34 --> Total execution time: 0.0678
DEBUG - 2021-08-25 14:08:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:08:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:08:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:08:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:08:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:08:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:08:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:08:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:08:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 14:08:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:08:34 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 14:08:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 14:08:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:08:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:08:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:08:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:08:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 14:08:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 14:08:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 14:08:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 14:08:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:08:36 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 14:08:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:08:37 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 14:08:38 --> 1.1446 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-25 14:08:38 --> Total execution time: 3.7480
DEBUG - 2021-08-25 14:08:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:08:38 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 14:08:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:08:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 14:08:39 --> 0.0004 | select count(id) as total from gpi_data
DEBUG - 2021-08-25 14:08:39 --> Total execution time: 4.9150
DEBUG - 2021-08-25 14:08:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:08:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 14:08:39 --> 0.0006 | select count(distinct(campaign_name)) as total from gpi_data
DEBUG - 2021-08-25 14:08:39 --> Total execution time: 4.9250
DEBUG - 2021-08-25 14:09:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:09:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:09:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 14:09:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:09:05 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 14:09:05 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-25 14:09:05 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 14:09:05 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 14:09:05 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 14:09:05 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-25 14:09:05 --> Total execution time: 0.0699
DEBUG - 2021-08-25 14:09:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:09:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:09:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:09:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:09:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:09:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:09:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:09:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:09:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 14:09:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:09:05 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 14:09:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 14:09:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:09:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:09:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:09:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:09:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 14:09:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 14:09:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 14:09:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 14:09:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:09:07 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 14:09:08 --> 1.2844 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-25 14:09:08 --> Total execution time: 2.8076
DEBUG - 2021-08-25 14:09:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:09:08 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 14:09:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:09:09 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 14:09:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:09:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 14:09:10 --> 0.0003 | select count(id) as total from gpi_data
DEBUG - 2021-08-25 14:09:10 --> Total execution time: 5.0236
DEBUG - 2021-08-25 14:09:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:09:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 14:09:10 --> 0.0006 | select count(distinct(campaign_name)) as total from gpi_data
DEBUG - 2021-08-25 14:09:10 --> Total execution time: 5.0263
DEBUG - 2021-08-25 14:11:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:11:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:11:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 14:11:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:11:52 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 14:11:52 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-25 14:11:52 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 14:11:52 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 14:11:52 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 14:11:52 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-25 14:11:52 --> Total execution time: 0.0778
DEBUG - 2021-08-25 14:11:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:11:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:11:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:11:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:11:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:11:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:11:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:11:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:11:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:11:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:11:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 14:11:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 14:11:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:11:53 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 14:11:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 14:11:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:11:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:11:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 14:11:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 14:11:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-25 14:11:54 --> 1.3046 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-25 14:11:54 --> Total execution time: 1.4236
DEBUG - 2021-08-25 14:11:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:11:54 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 14:11:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:11:55 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 14:11:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:11:56 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 14:11:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:11:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 14:11:58 --> 0.0003 | select count(id) as total from gpi_data
DEBUG - 2021-08-25 14:11:58 --> Total execution time: 4.9573
DEBUG - 2021-08-25 14:11:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:11:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 14:11:58 --> 0.0022 | select count(distinct(campaign_name)) as total from gpi_data
DEBUG - 2021-08-25 14:11:58 --> Total execution time: 4.9214
DEBUG - 2021-08-25 14:19:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:19:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:19:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 14:19:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:19:07 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 14:19:07 --> 0.0007 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-25 14:19:07 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 14:19:07 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 14:19:07 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 14:19:07 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-25 14:19:07 --> Total execution time: 0.0736
DEBUG - 2021-08-25 14:19:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:19:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:19:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:19:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:19:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:19:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:19:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 14:19:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:19:07 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 14:19:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:19:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:19:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 14:19:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:19:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 14:19:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:19:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:19:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:19:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 14:19:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 14:19:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 14:19:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:19:09 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 14:19:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:19:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 14:19:11 --> 1.1323 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-25 14:19:11 --> Total execution time: 3.6657
DEBUG - 2021-08-25 14:19:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:19:11 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 14:19:11 --> 0.0003 | select count(id) as total from gpi_data
DEBUG - 2021-08-25 14:19:11 --> Total execution time: 3.5925
DEBUG - 2021-08-25 14:19:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:19:11 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 14:19:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:19:12 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 14:19:12 --> 0.0006 | select count(distinct(campaign_name)) as total from gpi_data
DEBUG - 2021-08-25 14:19:12 --> Total execution time: 4.1664
DEBUG - 2021-08-25 14:50:57 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:50:57 --> No URI present. Default controller set.
DEBUG - 2021-08-25 14:50:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:50:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 14:50:57 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:50:57 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 14:50:57 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:50:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:50:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 14:50:57 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:50:57 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 14:50:58 --> 0.0006 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-25 14:50:58 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 14:50:58 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 14:50:58 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 14:50:58 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-25 14:50:58 --> Total execution time: 0.2904
DEBUG - 2021-08-25 14:50:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:50:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:50:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:50:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:50:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:50:58 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:50:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:50:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:50:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 14:50:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 14:50:59 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:50:59 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 14:50:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:50:59 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:50:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:50:59 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:50:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 14:50:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 14:50:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 14:50:59 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-25 14:51:00 --> 1.3089 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-25 14:51:00 --> Total execution time: 1.4577
DEBUG - 2021-08-25 14:51:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:51:00 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 14:51:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:51:01 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 14:51:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:51:02 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 14:51:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:51:03 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 14:51:03 --> 0.0003 | select count(id) as total from gpi_data
DEBUG - 2021-08-25 14:51:03 --> Total execution time: 4.0700
DEBUG - 2021-08-25 14:51:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:51:03 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 14:51:03 --> 0.0006 | select count(distinct(campaign_name)) as total from gpi_data
DEBUG - 2021-08-25 14:51:03 --> Total execution time: 4.0833
DEBUG - 2021-08-25 14:51:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:51:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:51:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 14:51:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:51:13 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 14:51:13 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-25 14:51:13 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 14:51:13 --> 0.0007 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-25 14:51:13 --> 0.0005 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-25 14:51:13 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-25 14:51:13 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 14:51:13 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 14:51:13 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-25 14:51:13 --> Total execution time: 0.2006
DEBUG - 2021-08-25 14:51:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:51:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:51:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 14:51:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:51:14 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 14:51:14 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-25 14:51:20 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 14:51:20 --> 0.0003 | select count(id) as totalrows from gpi_data;
QUERY - 2021-08-25 14:51:20 --> 0.034 | select `consumer_number`, `circle_check`, `flag`, `status`, `consumer_name`, `age`, `gender`, `occupation`, `marital_status`, `circle`, `franchise_brand`, `acting_brand`, `moub`, `previous_moub`, `purchase_pattern`, `intensity`, `regular_shop`, `date`, `year`, `quarter`, `month`, `day_of_the_week`, `time`, `duration`, `gratification`, `big_gratification`, `campaign_name`, `productive`, `productive_type`, `trail_type`, `product_feedback`, `state`, `city`, `source`, `campaign_type`, `retailer_number`, `retailer_code`, `se_mobileno`, `tl_mobileno`, `pincode_entered`, `coupon_code_entered`, `wd`, `geolocationlat`, `geolocationlong`,`created_date` from gpi_data Order by id DESC LIMIT 10,10;
QUERY - 2021-08-25 14:51:20 --> 1.063 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-25 14:51:20 --> 0.0004 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-25 14:51:20 --> 1.1808 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-25 14:51:20 --> 1.1842 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-25 14:51:20 --> 1.1158 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-25 14:51:20 --> 0.0187 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-25 14:51:20 --> 1.3103 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-25 14:51:20 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-25 14:51:20 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 14:51:20 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 14:51:20 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-25 14:51:20 --> Total execution time: 6.2094
DEBUG - 2021-08-25 14:55:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:55:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:55:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 14:55:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:55:35 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 14:55:35 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-25 14:55:40 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 14:55:40 --> 0.0003 | select count(id) as totalrows from gpi_data;
QUERY - 2021-08-25 14:55:40 --> 0.0009 | select `consumer_number`, `circle_check`, `flag`, `status`, `consumer_name`, `age`, `gender`, `occupation`, `marital_status`, `circle`, `franchise_brand`, `acting_brand`, `moub`, `previous_moub`, `purchase_pattern`, `intensity`, `regular_shop`, `date`, `year`, `quarter`, `month`, `day_of_the_week`, `time`, `duration`, `gratification`, `big_gratification`, `campaign_name`, `productive`, `productive_type`, `trail_type`, `product_feedback`, `state`, `city`, `source`, `campaign_type`, `retailer_number`, `retailer_code`, `se_mobileno`, `tl_mobileno`, `pincode_entered`, `coupon_code_entered`, `wd`, `geolocationlat`, `geolocationlong`,`created_date` from gpi_data Order by id DESC LIMIT 10,10;
QUERY - 2021-08-25 14:55:40 --> 1.0688 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-25 14:55:40 --> 0.0004 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-25 14:55:40 --> 1.1296 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-25 14:55:40 --> 1.0528 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-25 14:55:40 --> 1.0417 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-25 14:55:40 --> 0.0003 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-25 14:55:40 --> 1.2273 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-25 14:55:40 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-25 14:55:40 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 14:55:40 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 14:55:40 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-25 14:55:40 --> Total execution time: 5.6034
DEBUG - 2021-08-25 14:56:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:56:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:56:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 14:56:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:56:47 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 14:57:01 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-25 14:57:07 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 14:57:07 --> 0.0003 | select count(id) as totalrows from gpi_data;
QUERY - 2021-08-25 14:57:07 --> 14.4986 | select `consumer_number`, `circle_check`, `flag`, `status`, `consumer_name`, `age`, `gender`, `occupation`, `marital_status`, `circle`, `franchise_brand`, `acting_brand`, `moub`, `previous_moub`, `purchase_pattern`, `intensity`, `regular_shop`, `date`, `year`, `quarter`, `month`, `day_of_the_week`, `time`, `duration`, `gratification`, `big_gratification`, `campaign_name`, `productive`, `productive_type`, `trail_type`, `product_feedback`, `state`, `city`, `source`, `campaign_type`, `retailer_number`, `retailer_code`, `se_mobileno`, `tl_mobileno`, `pincode_entered`, `coupon_code_entered`, `wd`, `geolocationlat`, `geolocationlong`,`created_date` from gpi_data Order by id DESC LIMIT 1000000000000,1000000000000;
QUERY - 2021-08-25 14:57:07 --> 1.0857 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-25 14:57:07 --> 0.0004 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-25 14:57:07 --> 1.1617 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-25 14:57:07 --> 1.0192 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-25 14:57:07 --> 1.023 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-25 14:57:07 --> 0.0003 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-25 14:57:07 --> 1.1911 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-25 14:57:07 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-25 14:57:07 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 14:57:07 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 14:57:07 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-25 14:57:07 --> Total execution time: 20.0560
DEBUG - 2021-08-25 14:57:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:57:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:57:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 14:57:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:57:23 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 14:57:23 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-25 14:57:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 14:57:29 --> 0.0003 | select count(id) as totalrows from gpi_data;
QUERY - 2021-08-25 14:57:29 --> 0.3259 | select `consumer_number`, `circle_check`, `flag`, `status`, `consumer_name`, `age`, `gender`, `occupation`, `marital_status`, `circle`, `franchise_brand`, `acting_brand`, `moub`, `previous_moub`, `purchase_pattern`, `intensity`, `regular_shop`, `date`, `year`, `quarter`, `month`, `day_of_the_week`, `time`, `duration`, `gratification`, `big_gratification`, `campaign_name`, `productive`, `productive_type`, `trail_type`, `product_feedback`, `state`, `city`, `source`, `campaign_type`, `retailer_number`, `retailer_code`, `se_mobileno`, `tl_mobileno`, `pincode_entered`, `coupon_code_entered`, `wd`, `geolocationlat`, `geolocationlong`,`created_date` from gpi_data Order by id DESC LIMIT 10000,10000;
QUERY - 2021-08-25 14:57:29 --> 1.0439 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-25 14:57:29 --> 0.0004 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-25 14:57:29 --> 1.156 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-25 14:57:29 --> 0.9937 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-25 14:57:29 --> 1.0073 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-25 14:57:29 --> 0.0003 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-25 14:57:29 --> 1.17 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-25 14:57:29 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-25 14:57:29 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 14:57:29 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 14:57:29 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-25 14:57:29 --> Total execution time: 6.0018
DEBUG - 2021-08-25 14:58:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:58:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:58:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 14:58:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:58:27 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 14:58:27 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-25 14:58:36 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 14:58:36 --> 0.0003 | select count(id) as totalrows from gpi_data;
QUERY - 2021-08-25 14:58:36 --> 0.001 | select `consumer_number`, `circle_check`, `flag`, `status`, `consumer_name`, `age`, `gender`, `occupation`, `marital_status`, `circle`, `franchise_brand`, `acting_brand`, `moub`, `previous_moub`, `purchase_pattern`, `intensity`, `regular_shop`, `date`, `year`, `quarter`, `month`, `day_of_the_week`, `time`, `duration`, `gratification`, `big_gratification`, `campaign_name`, `productive`, `productive_type`, `trail_type`, `product_feedback`, `state`, `city`, `source`, `campaign_type`, `retailer_number`, `retailer_code`, `se_mobileno`, `tl_mobileno`, `pincode_entered`, `coupon_code_entered`, `wd`, `geolocationlat`, `geolocationlong`,`created_date` from gpi_data Order by id DESC LIMIT 10,10;
QUERY - 2021-08-25 14:58:36 --> 1.5144 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-25 14:58:36 --> 0.0004 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-25 14:58:36 --> 1.6405 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-25 14:58:36 --> 1.7328 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-25 14:58:36 --> 1.7052 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-25 14:58:36 --> 0.0003 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-25 14:58:36 --> 2.1944 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-25 14:58:36 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-25 14:58:36 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 14:58:36 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 14:58:36 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-25 14:58:36 --> Total execution time: 8.8727
DEBUG - 2021-08-25 14:59:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:59:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:59:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 14:59:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:59:22 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 14:59:22 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-25 14:59:28 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 14:59:28 --> 0.0003 | select count(id) as totalrows from gpi_data;
QUERY - 2021-08-25 14:59:28 --> 0.0006 | select `consumer_number`, `circle_check`, `flag`, `status`, `consumer_name`, `age`, `gender`, `occupation`, `marital_status`, `circle`, `franchise_brand`, `acting_brand`, `moub`, `previous_moub`, `purchase_pattern`, `intensity`, `regular_shop`, `date`, `year`, `quarter`, `month`, `day_of_the_week`, `time`, `duration`, `gratification`, `big_gratification`, `campaign_name`, `productive`, `productive_type`, `trail_type`, `product_feedback`, `state`, `city`, `source`, `campaign_type`, `retailer_number`, `retailer_code`, `se_mobileno`, `tl_mobileno`, `pincode_entered`, `coupon_code_entered`, `wd`, `geolocationlat`, `geolocationlong`,`created_date` from gpi_data Order by id DESC LIMIT 10,10;
QUERY - 2021-08-25 14:59:28 --> 1.0691 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-25 14:59:28 --> 0.0004 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-25 14:59:28 --> 1.0768 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-25 14:59:28 --> 1.0126 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-25 14:59:28 --> 1.0441 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-25 14:59:28 --> 0.0003 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-25 14:59:28 --> 1.1841 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-25 14:59:28 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-25 14:59:28 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 14:59:28 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 14:59:28 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-25 14:59:28 --> Total execution time: 5.4646
DEBUG - 2021-08-25 14:59:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:59:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:59:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 14:59:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:59:30 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 14:59:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:59:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:59:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 14:59:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:59:30 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 14:59:30 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-25 14:59:35 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 14:59:35 --> 0.0326 | select count(id) as totalrows from gpi_data where consumer_number ='' AND circle ='' AND year ='' AND state ='' AND city ='' AND franchise_brand ='' AND acting_brand ='' AND campaign_name ='';
QUERY - 2021-08-25 14:59:35 --> 0.0007 | select `consumer_number`, `circle_check`, `flag`, `status`, `consumer_name`, `age`, `gender`, `occupation`, `marital_status`, `circle`, `franchise_brand`, `acting_brand`, `moub`, `previous_moub`, `purchase_pattern`, `intensity`, `regular_shop`, `date`, `year`, `quarter`, `month`, `day_of_the_week`, `time`, `duration`, `gratification`, `big_gratification`, `campaign_name`, `productive`, `productive_type`, `trail_type`, `product_feedback`, `state`, `city`, `source`, `campaign_type`, `retailer_number`, `retailer_code`, `se_mobileno`, `tl_mobileno`, `pincode_entered`, `coupon_code_entered`, `wd`, `geolocationlat`, `geolocationlong`,`created_date` from gpi_data where consumer_number ='' AND circle ='' AND year ='' AND state ='' AND city ='' AND franchise_brand ='' AND acting_brand ='' AND campaign_name ='' Order by id DESC LIMIT 10,10 ;
QUERY - 2021-08-25 14:59:35 --> 1.0083 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-25 14:59:35 --> 0.0004 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-25 14:59:35 --> 1.1919 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-25 14:59:35 --> 1.0108 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-25 14:59:35 --> 1.031 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-25 14:59:35 --> 0.0003 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-25 14:59:35 --> 1.3262 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-25 14:59:35 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-25 14:59:35 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 14:59:35 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 14:59:35 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-25 14:59:35 --> Total execution time: 5.6786
DEBUG - 2021-08-25 14:59:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:59:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:59:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 14:59:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:59:37 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 14:59:37 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-25 14:59:43 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 14:59:43 --> 0.0003 | select count(id) as totalrows from gpi_data;
QUERY - 2021-08-25 14:59:43 --> 0.0008 | select `consumer_number`, `circle_check`, `flag`, `status`, `consumer_name`, `age`, `gender`, `occupation`, `marital_status`, `circle`, `franchise_brand`, `acting_brand`, `moub`, `previous_moub`, `purchase_pattern`, `intensity`, `regular_shop`, `date`, `year`, `quarter`, `month`, `day_of_the_week`, `time`, `duration`, `gratification`, `big_gratification`, `campaign_name`, `productive`, `productive_type`, `trail_type`, `product_feedback`, `state`, `city`, `source`, `campaign_type`, `retailer_number`, `retailer_code`, `se_mobileno`, `tl_mobileno`, `pincode_entered`, `coupon_code_entered`, `wd`, `geolocationlat`, `geolocationlong`,`created_date` from gpi_data Order by id DESC LIMIT 10,10;
QUERY - 2021-08-25 14:59:43 --> 1.118 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-25 14:59:43 --> 0.0004 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-25 14:59:43 --> 1.2062 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-25 14:59:43 --> 1.0124 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-25 14:59:43 --> 1.0604 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-25 14:59:43 --> 0.0003 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-25 14:59:43 --> 1.1638 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-25 14:59:43 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-25 14:59:43 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 14:59:43 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 14:59:43 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-25 14:59:43 --> Total execution time: 5.6476
DEBUG - 2021-08-25 14:59:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:59:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:59:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 14:59:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:59:50 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 14:59:50 --> Pagination class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:59:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 14:59:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 14:59:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-25 14:59:57 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 14:59:57 --> 0.0003 | select count(id) as totalrows from gpi_data;
QUERY - 2021-08-25 14:59:57 --> 0.0007 | select `consumer_number`, `circle_check`, `flag`, `status`, `consumer_name`, `age`, `gender`, `occupation`, `marital_status`, `circle`, `franchise_brand`, `acting_brand`, `moub`, `previous_moub`, `purchase_pattern`, `intensity`, `regular_shop`, `date`, `year`, `quarter`, `month`, `day_of_the_week`, `time`, `duration`, `gratification`, `big_gratification`, `campaign_name`, `productive`, `productive_type`, `trail_type`, `product_feedback`, `state`, `city`, `source`, `campaign_type`, `retailer_number`, `retailer_code`, `se_mobileno`, `tl_mobileno`, `pincode_entered`, `coupon_code_entered`, `wd`, `geolocationlat`, `geolocationlong`,`created_date` from gpi_data Order by id DESC LIMIT 10,10;
QUERY - 2021-08-25 14:59:57 --> 1.5382 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-25 14:59:57 --> 0.0004 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-25 14:59:57 --> 1.5392 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-25 14:59:57 --> 1.0578 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-25 14:59:57 --> 1.13 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-25 14:59:57 --> 0.0003 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-25 14:59:57 --> 1.4291 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-25 14:59:57 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-25 14:59:57 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 14:59:57 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 14:59:57 --> 0.0002 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-25 14:59:57 --> Total execution time: 6.7748
DEBUG - 2021-08-25 14:59:57 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 14:59:57 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 15:01:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:01:41 --> No URI present. Default controller set.
DEBUG - 2021-08-25 15:01:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:01:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:01:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:01:41 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 15:01:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:01:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:01:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:01:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:01:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:01:41 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-25 15:01:41 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:01:41 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:01:41 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:01:41 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-25 15:01:41 --> Total execution time: 0.0759
DEBUG - 2021-08-25 15:01:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:01:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:01:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:01:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:01:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:01:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:01:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:01:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:01:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:01:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:01:42 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 15:01:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:01:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:01:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:01:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:01:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:01:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:01:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:01:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:01:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:01:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:01:43 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 15:01:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:01:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:01:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-25 15:01:45 --> 1.2266 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-25 15:01:45 --> Total execution time: 2.7947
DEBUG - 2021-08-25 15:01:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:01:45 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 15:01:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:01:46 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 15:01:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:01:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:01:46 --> 0.0005 | select count(distinct(campaign_name)) as total from gpi_data
DEBUG - 2021-08-25 15:01:46 --> Total execution time: 4.3131
DEBUG - 2021-08-25 15:01:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:01:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:01:46 --> 0.0003 | select count(id) as total from gpi_data
DEBUG - 2021-08-25 15:01:46 --> Total execution time: 4.3217
DEBUG - 2021-08-25 15:01:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:01:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:01:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:01:46 --> 0.001 | SELECT * FROM `csv_import` ORDER BY `id` DESC
QUERY - 2021-08-25 15:01:46 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-25 15:01:46 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:01:46 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:01:46 --> 0.0002 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-25 15:01:46 --> Total execution time: 2.1201
DEBUG - 2021-08-25 15:02:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:02:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:02:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:02:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:02:07 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:02:07 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:02:07 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:02:07 --> Total execution time: 0.0994
DEBUG - 2021-08-25 15:02:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:02:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:02:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:02:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:02:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:02:27 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:02:27 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:02:27 --> Total execution time: 0.1034
DEBUG - 2021-08-25 15:02:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:02:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:02:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:02:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:02:47 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:02:47 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:02:47 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:02:47 --> Total execution time: 0.0811
DEBUG - 2021-08-25 15:03:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:03:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:03:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:03:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:03:07 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:03:07 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:03:07 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:03:07 --> Total execution time: 0.0795
DEBUG - 2021-08-25 15:03:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:03:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:03:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:03:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:03:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:03:27 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:03:27 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:03:27 --> Total execution time: 0.0744
DEBUG - 2021-08-25 15:03:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:03:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:03:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:03:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:03:47 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:03:47 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:03:47 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:03:47 --> Total execution time: 0.0773
DEBUG - 2021-08-25 15:04:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:04:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:04:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:04:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:04:07 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:04:07 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:04:07 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:04:07 --> Total execution time: 0.0692
DEBUG - 2021-08-25 15:04:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:04:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:04:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:04:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:04:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:04:27 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:04:27 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:04:27 --> Total execution time: 0.0782
DEBUG - 2021-08-25 15:04:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:04:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:04:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:04:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:04:47 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:04:47 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:04:47 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:04:47 --> Total execution time: 0.0667
DEBUG - 2021-08-25 15:05:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:05:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:05:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:05:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:05:07 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:05:07 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:05:07 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:05:07 --> Total execution time: 0.0678
DEBUG - 2021-08-25 15:05:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:05:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:05:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:05:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:05:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:05:27 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:05:27 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:05:27 --> Total execution time: 0.0857
DEBUG - 2021-08-25 15:05:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:05:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:05:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:05:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:05:47 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:05:47 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:05:47 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:05:47 --> Total execution time: 0.0791
DEBUG - 2021-08-25 15:06:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:06:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:06:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:06:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:06:07 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:06:07 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:06:07 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:06:07 --> Total execution time: 0.0894
DEBUG - 2021-08-25 15:06:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:06:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:06:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:06:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:06:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:06:27 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:06:27 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:06:27 --> Total execution time: 0.0695
DEBUG - 2021-08-25 15:06:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:06:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:06:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:06:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:06:47 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:06:47 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:06:47 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:06:47 --> Total execution time: 0.1098
DEBUG - 2021-08-25 15:07:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:07:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:07:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:07:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:07:07 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:07:07 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:07:07 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:07:07 --> Total execution time: 0.0857
DEBUG - 2021-08-25 15:07:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:07:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:07:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:07:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:07:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:07:27 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:07:27 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:07:27 --> Total execution time: 0.0786
DEBUG - 2021-08-25 15:07:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:07:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:07:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:07:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:07:47 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:07:47 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:07:47 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:07:47 --> Total execution time: 0.0701
DEBUG - 2021-08-25 15:08:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:08:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:08:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:08:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:08:07 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:08:07 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:08:07 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:08:07 --> Total execution time: 0.0765
DEBUG - 2021-08-25 15:08:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:08:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:08:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:08:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:08:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:08:27 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:08:27 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:08:27 --> Total execution time: 0.0701
DEBUG - 2021-08-25 15:08:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:08:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:08:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:08:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:08:47 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:08:47 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:08:47 --> 0.0006 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:08:47 --> Total execution time: 0.1405
DEBUG - 2021-08-25 15:09:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:09:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:09:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:09:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:09:07 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:09:07 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:09:07 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:09:07 --> Total execution time: 0.0793
DEBUG - 2021-08-25 15:09:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:09:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:09:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:09:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:09:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:09:27 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:09:27 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:09:27 --> Total execution time: 0.0655
DEBUG - 2021-08-25 15:09:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:09:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:09:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:09:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:09:47 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:09:47 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:09:47 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:09:47 --> Total execution time: 0.0861
DEBUG - 2021-08-25 15:10:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:10:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:10:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:10:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:10:07 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:10:07 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:10:07 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:10:07 --> Total execution time: 0.0870
DEBUG - 2021-08-25 15:10:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:10:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:10:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:10:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:10:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:10:27 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:10:27 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:10:27 --> Total execution time: 0.0762
DEBUG - 2021-08-25 15:10:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:10:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:10:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:10:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:10:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:10:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:10:29 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
QUERY - 2021-08-25 15:10:29 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-25 15:10:29 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:10:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:10:29 --> 0.0006 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-25 15:10:29 --> Total execution time: 0.0762
DEBUG - 2021-08-25 15:10:32 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:10:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:10:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:10:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:10:32 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:10:32 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:10:32 --> 0.045 | SELECT * FROM `gpi_data` ORDER BY `id`  LIMIT 1000
DEBUG - 2021-08-25 15:10:32 --> Total execution time: 0.2513
DEBUG - 2021-08-25 15:10:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:10:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:10:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:10:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:10:50 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:10:50 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:10:50 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:10:50 --> Total execution time: 0.0943
DEBUG - 2021-08-25 15:11:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:11:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:11:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:11:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:11:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:11:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:11:10 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:11:10 --> Total execution time: 0.0686
DEBUG - 2021-08-25 15:11:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:11:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:11:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:11:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:11:30 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:11:30 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:11:30 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:11:30 --> Total execution time: 0.0888
DEBUG - 2021-08-25 15:11:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:11:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:11:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:11:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:11:50 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:11:50 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:11:50 --> 0.0005 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:11:50 --> Total execution time: 0.0781
DEBUG - 2021-08-25 15:12:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:12:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:12:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:12:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:12:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:12:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:12:10 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:12:10 --> Total execution time: 0.1146
DEBUG - 2021-08-25 15:12:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:12:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:12:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:12:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:12:12 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:12:12 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:12:12 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
QUERY - 2021-08-25 15:12:12 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-25 15:12:12 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:12:12 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:12:12 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-25 15:12:12 --> Total execution time: 0.0858
DEBUG - 2021-08-25 15:12:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:12:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:12:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:12:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:12:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:12:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:12:24 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
QUERY - 2021-08-25 15:12:24 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-25 15:12:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:12:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:12:24 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-25 15:12:24 --> Total execution time: 0.0793
DEBUG - 2021-08-25 15:12:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:12:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:12:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:12:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:12:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:12:26 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:12:26 --> 0.0165 | SELECT * FROM `gpi_data` ORDER BY `id`  LIMIT 1000
DEBUG - 2021-08-25 15:12:26 --> Total execution time: 0.7170
DEBUG - 2021-08-25 15:12:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:12:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:12:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:12:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:12:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:12:45 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:12:45 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:12:45 --> Total execution time: 0.0755
DEBUG - 2021-08-25 15:13:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:13:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:13:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:13:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:13:05 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:13:05 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:13:05 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:13:05 --> Total execution time: 0.0832
DEBUG - 2021-08-25 15:13:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:13:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:13:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:13:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:13:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:13:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:13:25 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:13:25 --> Total execution time: 0.0856
DEBUG - 2021-08-25 15:13:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:13:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:13:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:13:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:13:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:13:45 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:13:45 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:13:45 --> Total execution time: 0.0867
DEBUG - 2021-08-25 15:14:06 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:14:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:14:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:14:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:14:06 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:14:06 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:14:06 --> 0.0012 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:14:06 --> Total execution time: 0.0848
DEBUG - 2021-08-25 15:14:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:14:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:14:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:14:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:14:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:14:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:14:25 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:14:25 --> Total execution time: 0.0741
DEBUG - 2021-08-25 15:14:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:14:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:14:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:14:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:14:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:14:45 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:14:45 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:14:45 --> Total execution time: 0.0890
DEBUG - 2021-08-25 15:15:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:15:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:15:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:15:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:15:05 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:15:05 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:15:05 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:15:05 --> Total execution time: 0.0901
DEBUG - 2021-08-25 15:15:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:15:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:15:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:15:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:15:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:15:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:15:25 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:15:25 --> Total execution time: 0.1112
DEBUG - 2021-08-25 15:15:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:15:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:15:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:15:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:15:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:15:45 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:15:45 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:15:45 --> Total execution time: 0.0700
DEBUG - 2021-08-25 15:16:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:16:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:16:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:16:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:16:05 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:16:05 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:16:05 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:16:05 --> Total execution time: 0.0858
DEBUG - 2021-08-25 15:16:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:16:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:16:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:16:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:16:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:16:25 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:16:25 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:16:25 --> Total execution time: 0.0776
DEBUG - 2021-08-25 15:16:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:16:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:16:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:16:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:16:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:16:45 --> 0.0011 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:16:45 --> 0.0021 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:16:45 --> Total execution time: 0.0876
DEBUG - 2021-08-25 15:17:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:17:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:17:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:17:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:17:05 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:17:05 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:17:05 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:17:05 --> Total execution time: 0.0768
DEBUG - 2021-08-25 15:17:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:17:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:17:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:17:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:17:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:17:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:17:25 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:17:25 --> Total execution time: 0.0731
DEBUG - 2021-08-25 15:17:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:17:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:17:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:17:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:17:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:17:45 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:17:45 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:17:45 --> Total execution time: 0.0657
DEBUG - 2021-08-25 15:18:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:18:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:18:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:18:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:18:05 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:18:05 --> 0.0013 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:18:05 --> 0.0009 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:18:05 --> Total execution time: 0.1256
DEBUG - 2021-08-25 15:18:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:18:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:18:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:18:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:18:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:18:25 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:18:25 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:18:25 --> Total execution time: 0.0830
DEBUG - 2021-08-25 15:18:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:18:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:18:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:18:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:18:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:18:45 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:18:45 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:18:45 --> Total execution time: 0.0804
DEBUG - 2021-08-25 15:19:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:19:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:19:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:19:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:19:05 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:19:05 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:19:05 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:19:05 --> Total execution time: 0.0808
DEBUG - 2021-08-25 15:19:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:19:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:19:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:19:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:19:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:19:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:19:46 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:19:46 --> Total execution time: 0.0886
DEBUG - 2021-08-25 15:20:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:20:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:20:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:20:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:20:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:20:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:20:46 --> 0.0005 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:20:46 --> Total execution time: 0.1114
DEBUG - 2021-08-25 15:21:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:21:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:21:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:21:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:21:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:21:46 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:21:46 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:21:46 --> Total execution time: 0.0822
DEBUG - 2021-08-25 15:22:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:22:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:22:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:22:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:22:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:22:46 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:22:46 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:22:46 --> Total execution time: 0.0581
DEBUG - 2021-08-25 15:23:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:23:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:23:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:23:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:23:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:23:46 --> 0.0008 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:23:46 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:23:46 --> Total execution time: 0.0721
DEBUG - 2021-08-25 15:24:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:24:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:24:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:24:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:24:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:24:46 --> 0.001 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:24:46 --> 0.0004 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:24:46 --> Total execution time: 0.1419
DEBUG - 2021-08-25 15:25:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:25:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:25:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:25:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:25:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:25:46 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:25:46 --> 0.0004 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:25:46 --> Total execution time: 0.0695
DEBUG - 2021-08-25 15:26:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:26:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:26:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:26:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:26:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:26:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:26:46 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:26:46 --> Total execution time: 0.0839
DEBUG - 2021-08-25 15:27:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:27:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:27:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:27:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:27:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:27:46 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:27:46 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:27:46 --> Total execution time: 0.0656
DEBUG - 2021-08-25 15:28:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:28:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:28:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:28:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:28:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:28:46 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:28:46 --> 0.0006 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:28:46 --> Total execution time: 0.1120
DEBUG - 2021-08-25 15:29:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:29:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:29:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:29:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:29:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:29:46 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:29:46 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:29:46 --> Total execution time: 0.0683
DEBUG - 2021-08-25 15:30:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:30:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:30:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:30:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:30:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:30:46 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:30:46 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:30:46 --> Total execution time: 0.0805
DEBUG - 2021-08-25 15:31:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:31:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:31:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:31:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:31:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:31:26 --> 0.0016 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:31:26 --> 0.0005 | SELECT * FROM `csv_import` ORDER BY `id` DESC
DEBUG - 2021-08-25 15:31:26 --> Total execution time: 0.1101
DEBUG - 2021-08-25 15:32:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:32:04 --> No URI present. Default controller set.
DEBUG - 2021-08-25 15:32:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:32:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:32:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:32:04 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 15:32:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:32:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:32:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:32:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:32:04 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:32:05 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-25 15:32:05 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:32:05 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:32:05 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:32:05 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-25 15:32:05 --> Total execution time: 0.1971
DEBUG - 2021-08-25 15:32:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:32:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:32:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:32:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:32:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:32:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:32:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:32:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:32:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:32:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:32:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:32:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:32:05 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 15:32:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:32:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:32:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:32:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:32:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:32:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:32:05 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-25 15:32:07 --> 1.3141 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-25 15:32:07 --> Total execution time: 1.4531
DEBUG - 2021-08-25 15:32:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:32:07 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 15:32:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:32:07 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 15:32:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:32:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:32:08 --> 0.0003 | select count(id) as total from gpi_data
DEBUG - 2021-08-25 15:32:08 --> Total execution time: 3.0717
DEBUG - 2021-08-25 15:32:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:32:08 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 15:32:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:32:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:32:09 --> 0.0005 | select count(distinct(campaign_name)) as total from gpi_data
DEBUG - 2021-08-25 15:32:09 --> Total execution time: 4.1040
DEBUG - 2021-08-25 15:32:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:32:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:32:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:32:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:32:12 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 15:32:12 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-25 15:32:12 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:32:12 --> 0.0005 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-25 15:32:12 --> 0.0004 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-25 15:32:12 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-25 15:32:12 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:32:12 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:32:12 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-25 15:32:12 --> Total execution time: 0.1511
DEBUG - 2021-08-25 15:32:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:32:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:32:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:32:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:32:14 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 15:32:14 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-25 15:32:20 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:32:20 --> 0.0003 | select count(id) as totalrows from gpi_data;
QUERY - 2021-08-25 15:32:20 --> 0.0008 | select `consumer_number`, `circle_check`, `flag`, `status`, `consumer_name`, `age`, `gender`, `occupation`, `marital_status`, `circle`, `franchise_brand`, `acting_brand`, `moub`, `previous_moub`, `purchase_pattern`, `intensity`, `regular_shop`, `date`, `year`, `quarter`, `month`, `day_of_the_week`, `time`, `duration`, `gratification`, `big_gratification`, `campaign_name`, `productive`, `productive_type`, `trail_type`, `product_feedback`, `state`, `city`, `source`, `campaign_type`, `retailer_number`, `retailer_code`, `se_mobileno`, `tl_mobileno`, `pincode_entered`, `coupon_code_entered`, `wd`, `geolocationlat`, `geolocationlong`,`created_date` from gpi_data Order by id DESC LIMIT 10,10;
QUERY - 2021-08-25 15:32:20 --> 1.0975 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-25 15:32:20 --> 0.0004 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-25 15:32:20 --> 1.1836 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-25 15:32:20 --> 1.1273 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-25 15:32:20 --> 1.0664 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-25 15:32:20 --> 0.0003 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-25 15:32:20 --> 1.2975 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-25 15:32:20 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-25 15:32:20 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:32:20 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:32:20 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-25 15:32:20 --> Total execution time: 6.0086
DEBUG - 2021-08-25 15:32:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:32:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:32:25 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:32:25 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:32:25 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:32:25 --> 0.001 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 1
QUERY - 2021-08-25 15:32:25 --> 0.0005 | select admins.id, admins.name, admins.email, admins.phone, admins.address, admins.status, admins.role_type, admins.created_at, admins.profileicon, admins.username, admins.last_login, admins.ip_address, roles.roll_name from admins left join roles on admins.role_type = roles.role_id where admins.id = 1
QUERY - 2021-08-25 15:32:25 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-25 15:32:25 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:32:25 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:32:25 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-25 15:32:25 --> Total execution time: 0.1555
DEBUG - 2021-08-25 15:32:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:32:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:32:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:32:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:32:28 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 15:32:28 --> Form_validation class already loaded. Second attempt ignored.
QUERY - 2021-08-25 15:32:28 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-25 15:32:28 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:32:28 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:32:28 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-25 15:32:28 --> Total execution time: 0.1168
DEBUG - 2021-08-25 15:32:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:32:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:32:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:32:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:32:34 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 15:32:34 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-25 15:32:34 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:32:34 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-25 15:32:34 --> 0.0004 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-25 15:32:34 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-25 15:32:34 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:32:34 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:32:34 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-25 15:32:34 --> Total execution time: 0.0767
DEBUG - 2021-08-25 15:32:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:32:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:32:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:32:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:32:35 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 15:32:35 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-25 15:32:41 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:32:41 --> 0.0002 | select count(id) as totalrows from gpi_data;
QUERY - 2021-08-25 15:32:41 --> 0.0006 | select `consumer_number`, `circle_check`, `flag`, `status`, `consumer_name`, `age`, `gender`, `occupation`, `marital_status`, `circle`, `franchise_brand`, `acting_brand`, `moub`, `previous_moub`, `purchase_pattern`, `intensity`, `regular_shop`, `date`, `year`, `quarter`, `month`, `day_of_the_week`, `time`, `duration`, `gratification`, `big_gratification`, `campaign_name`, `productive`, `productive_type`, `trail_type`, `product_feedback`, `state`, `city`, `source`, `campaign_type`, `retailer_number`, `retailer_code`, `se_mobileno`, `tl_mobileno`, `pincode_entered`, `coupon_code_entered`, `wd`, `geolocationlat`, `geolocationlong`,`created_date` from gpi_data Order by id DESC LIMIT 10,10;
QUERY - 2021-08-25 15:32:41 --> 1.0318 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-25 15:32:41 --> 0.0004 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-25 15:32:41 --> 1.189 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-25 15:32:41 --> 0.973 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-25 15:32:41 --> 1.0157 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-25 15:32:41 --> 0.0003 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-25 15:32:41 --> 1.1978 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-25 15:32:41 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-25 15:32:41 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:32:41 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:32:41 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-25 15:32:41 --> Total execution time: 5.4861
DEBUG - 2021-08-25 15:32:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:32:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:32:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:32:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:32:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-25 15:32:42 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:32:42 --> 0.0004 | SELECT * FROM `csv_import` ORDER BY `id` DESC
QUERY - 2021-08-25 15:32:42 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-25 15:32:42 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:32:42 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:32:42 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-25 15:32:42 --> Total execution time: 0.1856
DEBUG - 2021-08-25 15:32:43 --> UTF-8 Support Enabled
DEBUG - 2021-08-25 15:32:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-25 15:32:43 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-25 15:32:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-25 15:32:43 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-25 15:32:43 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-25 15:32:50 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:32:50 --> 0.0002 | select count(id) as totalrows from gpi_data;
QUERY - 2021-08-25 15:32:50 --> 0.0006 | select `consumer_number`, `circle_check`, `flag`, `status`, `consumer_name`, `age`, `gender`, `occupation`, `marital_status`, `circle`, `franchise_brand`, `acting_brand`, `moub`, `previous_moub`, `purchase_pattern`, `intensity`, `regular_shop`, `date`, `year`, `quarter`, `month`, `day_of_the_week`, `time`, `duration`, `gratification`, `big_gratification`, `campaign_name`, `productive`, `productive_type`, `trail_type`, `product_feedback`, `state`, `city`, `source`, `campaign_type`, `retailer_number`, `retailer_code`, `se_mobileno`, `tl_mobileno`, `pincode_entered`, `coupon_code_entered`, `wd`, `geolocationlat`, `geolocationlong`,`created_date` from gpi_data Order by id DESC LIMIT 10,10;
QUERY - 2021-08-25 15:32:50 --> 1.0569 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-25 15:32:50 --> 0.0004 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-25 15:32:50 --> 1.1613 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-25 15:32:50 --> 1.2685 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-25 15:32:50 --> 1.4622 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-25 15:32:50 --> 0.0003 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-25 15:32:50 --> 1.4636 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-25 15:32:50 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-25 15:32:50 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:32:50 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-25 15:32:50 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-25 15:32:50 --> Total execution time: 6.4898
