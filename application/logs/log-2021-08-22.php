<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2021-08-22 00:00:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:00:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:00:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 00:00:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:00:33 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 00:00:40 --> 3.2003 | select year,count(id) as total from gpi_data GROUP BY year order by year DESC
QUERY - 2021-08-22 00:00:40 --> 1.1633 | select distinct('campaign_name'),count('id') as total from gpi_data GROUP BY campaign_name
QUERY - 2021-08-22 00:00:40 --> 2.5313 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-22 00:00:40 --> 0.0173 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-22 00:00:40 --> 0.0095 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 00:00:40 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 00:00:40 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 00:00:40 --> 0.0006 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-22 00:00:40 --> Total execution time: 6.9989
DEBUG - 2021-08-22 00:00:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:00:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:00:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 00:00:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:00:41 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-22 00:00:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:00:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:00:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:00:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:00:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 00:00:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-22 00:00:44 --> 2.993 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-22 00:00:44 --> Total execution time: 3.0764
DEBUG - 2021-08-22 00:00:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:00:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 00:01:06 --> 22.241 | select count(id) as total from gpi_data
DEBUG - 2021-08-22 00:01:06 --> Total execution time: 25.2783
DEBUG - 2021-08-22 00:01:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:01:06 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 00:01:06 --> 0.0517 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `campaign_name` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-22 00:01:06 --> Total execution time: 25.3675
DEBUG - 2021-08-22 00:02:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:02:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:02:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 00:02:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:02:37 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-22 00:04:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:04:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:04:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 00:04:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:04:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 00:04:47 --> 2.478 | select year,count(id) as total from gpi_data GROUP BY year order by year DESC
QUERY - 2021-08-22 00:04:47 --> 1.3634 | select distinct('campaign_name'),count('id') as total from gpi_data GROUP BY campaign_name
QUERY - 2021-08-22 00:04:47 --> 2.7246 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-22 00:04:47 --> 0.014 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-22 00:04:47 --> 0.0102 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 00:04:47 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 00:04:47 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 00:04:47 --> 0.0002 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-22 00:04:47 --> Total execution time: 6.6645
DEBUG - 2021-08-22 00:04:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:04:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:04:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 00:04:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:04:48 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-22 00:04:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:04:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:04:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:04:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:04:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 00:04:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-22 00:04:51 --> 3.4379 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-22 00:04:51 --> Total execution time: 3.5180
DEBUG - 2021-08-22 00:04:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:04:51 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 00:05:13 --> 22.1428 | select count(id) as total from gpi_data
DEBUG - 2021-08-22 00:05:13 --> Total execution time: 25.5864
DEBUG - 2021-08-22 00:05:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:05:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 00:05:14 --> 0.0986 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `campaign_name` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-22 00:05:14 --> Total execution time: 25.7213
DEBUG - 2021-08-22 00:17:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:17:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:17:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 00:17:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:17:11 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 00:17:20 --> 2.732 | select year,count(id) as total from gpi_data GROUP BY year order by year DESC
QUERY - 2021-08-22 00:17:20 --> 1.4066 | select distinct('campaign_name'),count('id') as total from gpi_data GROUP BY campaign_name
QUERY - 2021-08-22 00:17:20 --> 4.2027 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-22 00:17:20 --> 0.0137 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-22 00:17:20 --> 0.01 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 00:17:20 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 00:17:20 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 00:17:20 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-22 00:17:20 --> Total execution time: 8.4371
DEBUG - 2021-08-22 00:17:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:17:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:17:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 00:17:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:17:20 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-22 00:17:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:17:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:17:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:17:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:17:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 00:17:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-22 00:17:23 --> 3.1004 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-22 00:17:23 --> Total execution time: 3.1767
DEBUG - 2021-08-22 00:17:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:17:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 00:17:47 --> 23.3558 | select count(id) as total from gpi_data
DEBUG - 2021-08-22 00:17:47 --> Total execution time: 26.4777
DEBUG - 2021-08-22 00:17:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:17:47 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 00:17:47 --> 0.0381 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `campaign_name` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-22 00:17:47 --> Total execution time: 26.5568
DEBUG - 2021-08-22 00:18:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:18:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:18:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 00:18:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:18:45 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 00:18:51 --> 2.4088 | select year,count(id) as total from gpi_data GROUP BY year order by year DESC
QUERY - 2021-08-22 00:18:51 --> 1.2842 | select distinct('campaign_name'),count('id') as total from gpi_data GROUP BY campaign_name
QUERY - 2021-08-22 00:18:51 --> 2.4483 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-22 00:18:51 --> 0.0133 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-22 00:18:51 --> 0.0103 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 00:18:51 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 00:18:51 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 00:18:51 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-22 00:18:51 --> Total execution time: 6.2386
DEBUG - 2021-08-22 00:18:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:18:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:18:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 00:18:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:18:51 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-22 00:18:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:18:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:18:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:18:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:18:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 00:18:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-22 00:18:54 --> 3.1875 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-22 00:18:54 --> Total execution time: 3.2679
DEBUG - 2021-08-22 00:18:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:18:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 00:19:17 --> 22.6644 | select count(id) as total from gpi_data
DEBUG - 2021-08-22 00:19:17 --> Total execution time: 25.8895
DEBUG - 2021-08-22 00:19:17 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:19:17 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 00:19:17 --> 0.0523 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `campaign_name` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-22 00:19:17 --> Total execution time: 25.9438
DEBUG - 2021-08-22 00:22:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:22:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:22:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 00:22:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:22:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 00:22:23 --> 3.2215 | select year,count(id) as total from gpi_data GROUP BY year order by year DESC
QUERY - 2021-08-22 00:22:23 --> 1.1743 | select distinct('campaign_name'),count('id') as total from gpi_data GROUP BY campaign_name
QUERY - 2021-08-22 00:22:23 --> 2.4585 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-22 00:22:23 --> 0.0141 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-22 00:22:23 --> 0.0102 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 00:22:23 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 00:22:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 00:22:23 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-22 00:22:23 --> Total execution time: 6.9609
DEBUG - 2021-08-22 00:22:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:22:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:22:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 00:22:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:22:24 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-22 00:22:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:22:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:22:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:22:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:22:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 00:22:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-22 00:22:27 --> 2.9055 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-22 00:22:27 --> Total execution time: 2.9852
DEBUG - 2021-08-22 00:22:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:22:27 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 00:22:50 --> 22.8226 | select count(id) as total from gpi_data
DEBUG - 2021-08-22 00:22:50 --> Total execution time: 25.7438
DEBUG - 2021-08-22 00:22:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:22:50 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 00:23:12 --> 22.5885 | select count(distinct('campaign_name')) as total from gpi_data
DEBUG - 2021-08-22 00:23:12 --> Total execution time: 48.3846
DEBUG - 2021-08-22 00:23:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:23:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:23:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 00:23:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:23:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 00:23:46 --> 2.5817 | select year,count(id) as total from gpi_data GROUP BY year order by year DESC
QUERY - 2021-08-22 00:23:46 --> 1.1279 | select distinct('campaign_name'),count('id') as total from gpi_data GROUP BY campaign_name
QUERY - 2021-08-22 00:23:46 --> 2.5031 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-22 00:23:46 --> 0.0138 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-22 00:23:46 --> 0.0103 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 00:23:46 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 00:23:46 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 00:23:46 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-22 00:23:46 --> Total execution time: 6.3035
DEBUG - 2021-08-22 00:23:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:23:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:23:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 00:23:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:23:46 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-22 00:23:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:23:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:23:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:23:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:23:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 00:23:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-22 00:23:50 --> 3.4628 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-22 00:23:50 --> Total execution time: 3.5696
DEBUG - 2021-08-22 00:23:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:23:50 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 00:24:12 --> 22.2382 | select count(id) as total from gpi_data
DEBUG - 2021-08-22 00:24:12 --> Total execution time: 25.7172
DEBUG - 2021-08-22 00:24:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:24:12 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 00:24:35 --> 22.6287 | select count(distinct('campaign_name')) as total from gpi_data
DEBUG - 2021-08-22 00:24:35 --> Total execution time: 48.3572
DEBUG - 2021-08-22 00:26:44 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:26:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:26:44 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 00:26:44 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:26:44 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 00:26:50 --> 2.4804 | select year,count(id) as total from gpi_data GROUP BY year order by year DESC
QUERY - 2021-08-22 00:26:50 --> 1.2967 | select distinct('campaign_name'),count('id') as total from gpi_data GROUP BY campaign_name
QUERY - 2021-08-22 00:26:50 --> 2.4356 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-22 00:26:50 --> 0.0141 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-22 00:26:50 --> 0.0101 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 00:26:50 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 00:26:50 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 00:26:50 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-22 00:26:50 --> Total execution time: 6.2996
DEBUG - 2021-08-22 00:26:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:26:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:26:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 00:26:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:26:51 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-22 00:26:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:26:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:26:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:26:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:26:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 00:26:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-22 00:26:54 --> 2.9435 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-22 00:26:54 --> Total execution time: 3.0276
DEBUG - 2021-08-22 00:26:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:26:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 00:27:17 --> 23.4282 | select count(id) as total from gpi_data
DEBUG - 2021-08-22 00:27:17 --> Total execution time: 26.4068
DEBUG - 2021-08-22 00:27:17 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:27:17 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-22 00:30:34 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:30:34 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:30:34 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 00:30:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:30:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 00:30:41 --> 2.5637 | select year,count(id) as total from gpi_data GROUP BY year order by year DESC
QUERY - 2021-08-22 00:30:41 --> 1.1514 | select distinct('campaign_name'),count('id') as total from gpi_data GROUP BY campaign_name
QUERY - 2021-08-22 00:30:41 --> 2.4353 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-22 00:30:41 --> 0.0041 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-22 00:30:41 --> 0.0096 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 00:30:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 00:30:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 00:30:41 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-22 00:30:41 --> Total execution time: 6.2304
DEBUG - 2021-08-22 00:30:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:30:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:30:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 00:30:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:30:41 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-22 00:30:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:30:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:30:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:30:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:30:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 00:30:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-22 00:30:45 --> 3.6233 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-22 00:30:45 --> Total execution time: 3.6935
DEBUG - 2021-08-22 00:30:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:30:45 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-22 00:30:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:30:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:30:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-22 00:31:08 --> 23.2202 | select count(id) as total from gpi_data
DEBUG - 2021-08-22 00:31:08 --> Total execution time: 26.7064
DEBUG - 2021-08-22 00:31:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:31:08 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-22 00:31:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:31:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 00:31:16 --> 2.4672 | select year,count(id) as total from gpi_data GROUP BY year order by year DESC
QUERY - 2021-08-22 00:31:16 --> 1.2179 | select distinct('campaign_name'),count('id') as total from gpi_data GROUP BY campaign_name
QUERY - 2021-08-22 00:31:16 --> 2.3812 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-22 00:31:16 --> 0.0135 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-22 00:31:16 --> 0.0104 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 00:31:16 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 00:31:16 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 00:31:16 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-22 00:31:16 --> Total execution time: 25.2598
DEBUG - 2021-08-22 00:31:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:31:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:31:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 00:31:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:31:16 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-22 00:31:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:31:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:31:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:31:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 00:31:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:31:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-22 00:31:19 --> 2.6754 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-22 00:31:19 --> Total execution time: 2.7607
DEBUG - 2021-08-22 00:31:19 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:31:19 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 00:31:43 --> 23.9166 | select count(id) as total from gpi_data
DEBUG - 2021-08-22 00:31:43 --> Total execution time: 26.6097
DEBUG - 2021-08-22 00:31:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:31:43 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 00:31:44 --> 1.5178 | select distinct(campaign_name),count(id) as total from gpi_data
DEBUG - 2021-08-22 00:31:44 --> Total execution time: 28.1282
DEBUG - 2021-08-22 00:32:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:32:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:32:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 00:32:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:32:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 00:32:17 --> 3.1933 | select year,count(id) as total from gpi_data GROUP BY year order by year DESC
QUERY - 2021-08-22 00:32:17 --> 1.0823 | select distinct('campaign_name'),count('id') as total from gpi_data GROUP BY campaign_name
QUERY - 2021-08-22 00:32:17 --> 2.6475 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-22 00:32:17 --> 0.0136 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-22 00:32:17 --> 0.0104 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 00:32:17 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 00:32:17 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 00:32:17 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-22 00:32:17 --> Total execution time: 7.0145
DEBUG - 2021-08-22 00:32:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:32:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:32:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 00:32:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:32:18 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-22 00:32:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:32:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:32:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:32:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:32:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 00:32:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-22 00:32:21 --> 3.1119 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-22 00:32:21 --> Total execution time: 3.1993
DEBUG - 2021-08-22 00:32:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:32:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 00:32:21 --> 0.0487 | select distinct(campaign_name) as total from gpi_data
DEBUG - 2021-08-22 00:32:21 --> Total execution time: 3.1498
DEBUG - 2021-08-22 00:32:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:32:21 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-22 00:32:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:32:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:32:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-22 00:32:46 --> 25.2736 | select count(id) as total from gpi_data
DEBUG - 2021-08-22 00:32:46 --> Total execution time: 28.4615
DEBUG - 2021-08-22 00:32:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:32:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 00:32:54 --> 3.1015 | select year,count(id) as total from gpi_data GROUP BY year order by year DESC
QUERY - 2021-08-22 00:32:54 --> 1.219 | select distinct('campaign_name'),count('id') as total from gpi_data GROUP BY campaign_name
QUERY - 2021-08-22 00:32:54 --> 3.3013 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-22 00:32:54 --> 0.0041 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-22 00:32:54 --> 0.0096 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 00:32:54 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 00:32:54 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 00:32:54 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-22 00:32:54 --> Total execution time: 8.5104
DEBUG - 2021-08-22 00:32:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:32:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:32:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:32:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:32:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:32:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:32:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 00:32:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:32:55 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-22 00:32:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 00:32:55 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-22 00:32:58 --> 3.2243 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-22 00:32:58 --> Total execution time: 3.3048
DEBUG - 2021-08-22 00:32:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:32:58 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 00:33:23 --> 24.6454 | select count(id) as total from gpi_data
DEBUG - 2021-08-22 00:33:23 --> Total execution time: 27.9528
DEBUG - 2021-08-22 00:33:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:33:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 00:33:23 --> 0.0378 | select count(distinct(campaign_name)) as total from gpi_data
DEBUG - 2021-08-22 00:33:23 --> Total execution time: 28.0155
DEBUG - 2021-08-22 00:33:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:33:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:33:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 00:33:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:33:30 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 00:33:37 --> 2.4563 | select year,count(id) as total from gpi_data GROUP BY year order by year DESC
QUERY - 2021-08-22 00:33:37 --> 1.1515 | select distinct('campaign_name'),count('id') as total from gpi_data GROUP BY campaign_name
QUERY - 2021-08-22 00:33:37 --> 3.2472 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-22 00:33:37 --> 0.0139 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-22 00:33:37 --> 0.0103 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 00:33:37 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 00:33:37 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 00:33:37 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-22 00:33:37 --> Total execution time: 6.9492
DEBUG - 2021-08-22 00:33:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:33:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:33:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 00:33:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:33:37 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-22 00:33:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:33:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:33:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:33:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:33:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 00:33:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-22 00:33:41 --> 3.9708 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-22 00:33:41 --> Total execution time: 4.0433
DEBUG - 2021-08-22 00:33:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:33:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 00:33:41 --> 0.0355 | select count(distinct(campaign_name)) as total from gpi_data
DEBUG - 2021-08-22 00:33:41 --> Total execution time: 4.0069
DEBUG - 2021-08-22 00:33:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:33:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 00:34:04 --> 22.4761 | select count(id) as total from gpi_data
DEBUG - 2021-08-22 00:34:04 --> Total execution time: 26.5062
DEBUG - 2021-08-22 00:34:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:34:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:34:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 00:34:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:34:30 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 00:34:37 --> 2.4185 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-22 00:34:37 --> 0.7949 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-22 00:34:37 --> 2.8574 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-22 00:34:37 --> 0.0049 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-22 00:34:37 --> 0.0095 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 00:34:37 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 00:34:37 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 00:34:37 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-22 00:34:37 --> Total execution time: 6.1463
DEBUG - 2021-08-22 00:34:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:34:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:34:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:34:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:34:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 00:34:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:34:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:34:37 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-22 00:34:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:34:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 00:34:37 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-22 00:34:39 --> 2.5265 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-22 00:34:39 --> Total execution time: 2.6169
DEBUG - 2021-08-22 00:34:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:34:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 00:35:04 --> 24.1997 | select count(id) as total from gpi_data
DEBUG - 2021-08-22 00:35:04 --> Total execution time: 26.7917
DEBUG - 2021-08-22 00:35:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:35:04 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 00:35:04 --> 0.0349 | select count(distinct(campaign_name)) as total from gpi_data
DEBUG - 2021-08-22 00:35:04 --> Total execution time: 26.8596
DEBUG - 2021-08-22 00:55:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:55:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:55:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 00:55:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:55:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 00:56:08 --> 0.0318 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 00:56:08 --> 2.816 | SELECT DISTINCT `year` FROM `gpi_data`
QUERY - 2021-08-22 00:56:08 --> 0.0352 | SELECT DISTINCT `campaign_name` FROM `gpi_data`
QUERY - 2021-08-22 00:56:08 --> 2.5876 | SELECT DISTINCT `circle` FROM `gpi_data`
QUERY - 2021-08-22 00:56:08 --> 2.5217 | SELECT DISTINCT `franchise_brand` FROM `gpi_data`
QUERY - 2021-08-22 00:56:08 --> 2.4775 | SELECT DISTINCT `acting_brand` FROM `gpi_data`
QUERY - 2021-08-22 00:56:08 --> 0.0459 | SELECT DISTINCT `city` FROM `gpi_data`
QUERY - 2021-08-22 00:56:08 --> 2.5198 | SELECT DISTINCT `state` FROM `gpi_data`
QUERY - 2021-08-22 00:56:08 --> 0.0145 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-22 00:56:08 --> 0.0119 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-22 00:56:08 --> 0.0093 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 00:56:08 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 00:56:08 --> 0.0006 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-22 00:56:08 --> 0.0151 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-22 00:56:08 --> Total execution time: 13.1818
DEBUG - 2021-08-22 00:56:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:56:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:56:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 00:56:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:56:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 00:56:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 00:56:24 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-22 00:56:24 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-22 00:56:24 --> Total execution time: 0.0670
DEBUG - 2021-08-22 00:56:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:56:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:56:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 00:56:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:56:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 00:56:39 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 00:56:39 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-22 00:56:39 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-22 00:56:39 --> Total execution time: 0.0754
DEBUG - 2021-08-22 00:56:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:56:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:56:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 00:56:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:56:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 00:56:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 00:56:54 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-22 00:56:54 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-22 00:56:54 --> Total execution time: 0.0842
DEBUG - 2021-08-22 00:57:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:57:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:57:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 00:57:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:57:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 00:57:09 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 00:57:09 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-22 00:57:09 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-22 00:57:09 --> Total execution time: 0.0981
DEBUG - 2021-08-22 00:57:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:57:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:57:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 00:57:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:57:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 00:57:24 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 00:57:24 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-22 00:57:24 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-22 00:57:24 --> Total execution time: 0.0683
DEBUG - 2021-08-22 00:57:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:57:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:57:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 00:57:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:57:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 00:57:39 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 00:57:39 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-22 00:57:39 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-22 00:57:39 --> Total execution time: 0.0821
DEBUG - 2021-08-22 00:57:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:57:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:57:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 00:57:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:57:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 00:57:54 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 00:57:54 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-22 00:57:54 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-22 00:57:54 --> Total execution time: 0.0889
DEBUG - 2021-08-22 00:58:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:58:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:58:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 00:58:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:58:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 00:58:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 00:58:09 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-22 00:58:09 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-22 00:58:09 --> Total execution time: 0.0811
DEBUG - 2021-08-22 00:58:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:58:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:58:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 00:58:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:58:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 00:58:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 00:58:24 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-22 00:58:24 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-22 00:58:24 --> Total execution time: 0.0786
DEBUG - 2021-08-22 00:58:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:58:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:58:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 00:58:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:58:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 00:58:39 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 00:58:39 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-22 00:58:39 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-22 00:58:39 --> Total execution time: 0.0685
DEBUG - 2021-08-22 00:58:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:58:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:58:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 00:58:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:58:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 00:58:54 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 00:58:54 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-22 00:58:54 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-22 00:58:54 --> Total execution time: 0.0862
DEBUG - 2021-08-22 00:59:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:59:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:59:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 00:59:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:59:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 00:59:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 00:59:09 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-22 00:59:09 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-22 00:59:09 --> Total execution time: 0.0759
DEBUG - 2021-08-22 00:59:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:59:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:59:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 00:59:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:59:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 00:59:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 00:59:24 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-22 00:59:24 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-22 00:59:24 --> Total execution time: 0.0814
DEBUG - 2021-08-22 00:59:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:59:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:59:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 00:59:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:59:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 00:59:39 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 00:59:39 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-22 00:59:39 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-22 00:59:39 --> Total execution time: 0.0887
DEBUG - 2021-08-22 00:59:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 00:59:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 00:59:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 00:59:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 00:59:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 00:59:54 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 00:59:54 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-22 00:59:54 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-22 00:59:54 --> Total execution time: 0.0834
DEBUG - 2021-08-22 01:00:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 01:00:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 01:00:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 01:00:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 01:00:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 01:00:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 01:00:09 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-22 01:00:09 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-22 01:00:09 --> Total execution time: 0.0865
DEBUG - 2021-08-22 01:00:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 01:00:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 01:00:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 01:00:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 01:00:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 01:00:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 01:00:24 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-22 01:00:24 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-22 01:00:24 --> Total execution time: 0.0838
DEBUG - 2021-08-22 01:00:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 01:00:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 01:00:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 01:00:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 01:00:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 01:00:39 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 01:00:39 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-22 01:00:39 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-22 01:00:39 --> Total execution time: 0.0730
DEBUG - 2021-08-22 01:00:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 01:00:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 01:00:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 01:00:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 01:00:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 01:00:54 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 01:00:54 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-22 01:00:54 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-22 01:00:54 --> Total execution time: 0.0927
DEBUG - 2021-08-22 01:01:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 01:01:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 01:01:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 01:01:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 01:01:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 01:01:09 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 01:01:09 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-22 01:01:09 --> 0.0005 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-22 01:01:09 --> Total execution time: 0.0799
DEBUG - 2021-08-22 01:01:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 01:01:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 01:01:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 01:01:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 01:01:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 01:01:24 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 01:01:24 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-22 01:01:24 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-22 01:01:24 --> Total execution time: 0.0865
DEBUG - 2021-08-22 01:02:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 01:02:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 01:02:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 01:02:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 01:02:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 01:02:00 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 01:02:00 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-22 01:02:00 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-22 01:02:00 --> Total execution time: 0.0900
DEBUG - 2021-08-22 01:02:45 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 01:02:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 01:02:45 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 01:02:45 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 01:02:46 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 01:02:46 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 01:02:46 --> 0.002 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-22 01:02:46 --> 0.0006 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-22 01:02:46 --> Total execution time: 0.1000
DEBUG - 2021-08-22 01:02:54 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 01:02:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 01:02:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 01:02:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 01:02:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 01:02:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 01:02:54 --> 0.001 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-22 01:02:54 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-22 01:02:54 --> Total execution time: 0.0722
DEBUG - 2021-08-22 01:03:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-22 01:03:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-22 01:03:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-22 01:03:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-22 01:03:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-22 01:03:09 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-22 01:03:09 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-22 01:03:09 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-22 01:03:09 --> Total execution time: 0.0784
