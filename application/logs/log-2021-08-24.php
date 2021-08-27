<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2021-08-24 12:00:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 12:00:11 --> No URI present. Default controller set.
DEBUG - 2021-08-24 12:00:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 12:00:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 12:00:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 12:00:12 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-24 12:00:12 --> Form_validation class already loaded. Second attempt ignored.
QUERY - 2021-08-24 12:00:12 --> 0.0261 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-24 12:00:12 --> Total execution time: 1.4202
DEBUG - 2021-08-24 12:00:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 12:00:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 12:00:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 12:00:15 --> No URI present. Default controller set.
DEBUG - 2021-08-24 12:00:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 12:00:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 12:00:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 12:00:15 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-24 12:00:15 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 12:00:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 12:00:15 --> No URI present. Default controller set.
DEBUG - 2021-08-24 12:00:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 12:00:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 12:00:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 12:00:15 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-24 12:00:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 12:00:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 12:00:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 12:00:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 12:00:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 12:00:31 --> 6.4843 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-24 12:00:31 --> 2.6867 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-24 12:00:31 --> 6.434 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-24 12:00:31 --> 0.0169 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-24 12:00:31 --> 0.0049 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 12:00:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 12:00:31 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 12:00:31 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-24 12:00:31 --> Total execution time: 15.9798
DEBUG - 2021-08-24 12:00:32 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 12:00:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 12:00:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 12:00:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 12:00:32 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-24 12:00:32 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 12:00:32 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 12:00:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 12:00:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 12:00:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 12:00:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-24 12:00:40 --> 7.836 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-24 12:00:40 --> Total execution time: 7.9255
DEBUG - 2021-08-24 12:00:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 12:00:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 12:00:40 --> 0.0544 | select count(distinct(campaign_name)) as total from gpi_data
DEBUG - 2021-08-24 12:00:40 --> Total execution time: 7.9033
DEBUG - 2021-08-24 12:00:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 12:00:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 12:00:41 --> 1.2663 | select count(id) as total from gpi_data
DEBUG - 2021-08-24 12:00:41 --> Total execution time: 9.1832
DEBUG - 2021-08-24 13:10:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 13:10:13 --> No URI present. Default controller set.
DEBUG - 2021-08-24 13:10:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 13:10:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 13:10:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 13:10:13 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-24 13:10:13 --> Form_validation class already loaded. Second attempt ignored.
QUERY - 2021-08-24 13:10:13 --> 0.0793 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-24 13:10:13 --> Total execution time: 0.1624
DEBUG - 2021-08-24 13:10:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 13:10:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 13:10:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 13:10:15 --> No URI present. Default controller set.
DEBUG - 2021-08-24 13:10:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 13:10:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 13:10:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 13:10:15 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-24 13:10:15 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 13:10:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 13:10:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 13:10:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 13:10:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 13:10:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 13:10:30 --> 6.5637 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-24 13:10:30 --> 1.8195 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-24 13:10:30 --> 6.4793 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-24 13:10:30 --> 0.0077 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-24 13:10:30 --> 0.001 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 13:10:30 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 13:10:30 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 13:10:30 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-24 13:10:30 --> Total execution time: 14.9509
DEBUG - 2021-08-24 13:10:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 13:10:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 13:10:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 13:10:31 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 13:10:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 13:10:31 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-24 13:10:31 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 13:10:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 13:10:31 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 13:10:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 13:10:31 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-24 13:10:38 --> 7.538 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-24 13:10:38 --> Total execution time: 7.6248
DEBUG - 2021-08-24 13:10:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 13:10:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 13:10:39 --> 1.1845 | select count(id) as total from gpi_data
DEBUG - 2021-08-24 13:10:39 --> Total execution time: 8.7656
DEBUG - 2021-08-24 13:10:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 13:10:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 13:10:39 --> 0.0723 | select count(distinct(campaign_name)) as total from gpi_data
DEBUG - 2021-08-24 13:10:39 --> Total execution time: 8.8720
DEBUG - 2021-08-24 13:15:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 13:15:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 13:15:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 13:15:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 13:15:11 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-24 13:15:12 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-24 13:15:41 --> 0.0642 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 13:15:41 --> 1.0818 | select count(id) as totalrows from gpi_data;
QUERY - 2021-08-24 13:15:41 --> 0.0005 | select * from gpi_data LIMIT 10,10;
QUERY - 2021-08-24 13:15:41 --> 5.8942 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-24 13:15:41 --> 0.0507 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-24 13:15:41 --> 5.3377 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-24 13:15:41 --> 5.9115 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-24 13:15:41 --> 5.4667 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-24 13:15:41 --> 0.0407 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-24 13:15:41 --> 5.4588 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-24 13:15:41 --> 0.0073 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-24 13:15:41 --> 0.0009 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 13:15:41 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 13:15:41 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-24 13:15:41 --> Total execution time: 29.4027
DEBUG - 2021-08-24 13:16:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 13:16:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 13:16:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 13:16:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 13:16:01 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-24 13:16:02 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-24 13:16:33 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 13:16:33 --> 1.2176 | select count(id) as totalrows from gpi_data;
QUERY - 2021-08-24 13:16:33 --> 0.0005 | select * from gpi_data LIMIT 10,10;
QUERY - 2021-08-24 13:16:33 --> 5.7164 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-24 13:16:33 --> 0.0517 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-24 13:16:33 --> 6.2703 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-24 13:16:33 --> 6.9443 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-24 13:16:33 --> 5.6741 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-24 13:16:33 --> 0.044 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-24 13:16:33 --> 6.1924 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-24 13:16:33 --> 0.0172 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-24 13:16:33 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 13:16:33 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 13:16:33 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-24 13:16:33 --> Total execution time: 32.2025
DEBUG - 2021-08-24 13:17:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 13:17:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 13:17:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 13:17:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 13:17:22 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-24 13:17:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 13:17:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 13:17:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 13:17:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 13:17:23 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-24 13:17:49 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 13:17:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 13:17:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 13:17:49 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 13:17:49 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-24 13:19:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 13:19:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 13:19:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 13:19:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 13:19:00 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-24 13:19:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 13:19:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 13:19:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 13:19:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 13:19:00 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-24 13:19:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 13:19:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 13:19:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 13:19:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 13:19:26 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-24 13:19:47 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 13:19:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 13:19:47 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 13:19:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 13:19:47 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-24 13:20:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 13:20:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 13:20:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 13:20:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 13:20:21 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-24 13:20:35 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-24 13:21:08 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 13:21:08 --> 6.3018 | select count(id) as totalrows from gpi_data where year ='2019' AND state ='CHENNAI';
QUERY - 2021-08-24 13:21:08 --> 7.7642 | select * from gpi_data where year ='2019' AND state ='CHENNAI' LIMIT 10,10;
QUERY - 2021-08-24 13:21:08 --> 6.3241 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-24 13:21:08 --> 0.0515 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-24 13:21:08 --> 5.5039 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-24 13:21:08 --> 5.3328 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-24 13:21:08 --> 9.0318 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-24 13:21:08 --> 0.0422 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-24 13:21:08 --> 6.5789 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-24 13:21:08 --> 0.0104 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-24 13:21:08 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 13:21:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 13:21:08 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-24 13:21:08 --> Total execution time: 47.0242
DEBUG - 2021-08-24 13:21:26 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 13:21:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 13:21:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 13:21:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 13:21:26 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-24 13:21:28 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-24 13:21:57 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 13:21:57 --> 1.4649 | select count(id) as totalrows from gpi_data;
QUERY - 2021-08-24 13:21:57 --> 0.0005 | select * from gpi_data LIMIT 10,10;
QUERY - 2021-08-24 13:21:57 --> 5.9725 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-24 13:21:57 --> 0.0507 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-24 13:21:57 --> 5.5048 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-24 13:21:57 --> 6.5187 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-24 13:21:57 --> 5.7591 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-24 13:21:57 --> 0.04 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-24 13:21:57 --> 5.4933 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-24 13:21:57 --> 0.0071 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-24 13:21:57 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 13:21:57 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 13:21:57 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-24 13:21:57 --> Total execution time: 30.9031
DEBUG - 2021-08-24 13:22:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 13:22:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 13:22:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 13:22:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 13:22:04 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-24 13:22:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 13:22:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 13:22:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 13:22:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 13:22:04 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-24 13:22:27 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 13:22:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 13:22:27 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 13:22:27 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 13:22:27 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-24 13:41:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 13:41:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 13:41:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 13:41:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 13:41:20 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-24 13:41:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 13:41:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 13:41:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 13:41:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 13:41:41 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-24 14:10:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 14:10:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 14:10:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 14:10:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 14:10:29 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-24 14:28:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 14:28:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 14:28:52 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 14:28:52 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 14:28:52 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-24 14:28:52 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-24 14:28:58 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 14:28:58 --> 0.0721 | select count(id) as totalrows from gpi_data;
QUERY - 2021-08-24 14:28:58 --> 0.0007 | select `consumer_number`, `circle_check`, `flag`, `status`, `consumer_name`, `age`, `gender`, `occupation`, `marital_status`, `circle`, `franchise_brand`, `acting_brand`, `moub`, `previous_moub`, `purchase_pattern`, `intensity`, `regular_shop`, `date`, `year`, `quarter`, `month`, `day_of_the_week`, `time`, `duration`, `gratification`, `big_gratification`, `campaign_name`, `productive`, `productive_type`, `trail_type`, `product_feedback`, `state`, `city`, `source`, `campaign_type`, `retailer_number`, `retailer_code`, `se_mobileno`, `tl_mobileno`, `pincode_entered`, `coupon_code_entered`, `wd`, `geolocationlat`, `geolocationlong`,`created_date` from gpi_data Order by id DESC LIMIT 10,10;
QUERY - 2021-08-24 14:28:58 --> 1.4817 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-24 14:28:58 --> 0.0005 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-24 14:28:58 --> 1.1615 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-24 14:28:58 --> 0.9979 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-24 14:28:58 --> 1.0242 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-24 14:28:58 --> 0.0003 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-24 14:28:58 --> 1.1937 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-24 14:28:58 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-24 14:28:58 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 14:28:58 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 14:28:58 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-24 14:28:58 --> Total execution time: 6.0215
DEBUG - 2021-08-24 14:29:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 14:29:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 14:29:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 14:29:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 14:29:10 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-24 14:29:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 14:29:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 14:29:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 14:29:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 14:29:10 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-24 14:29:26 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-24 14:29:32 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 14:29:32 --> 0.8959 | select count(id) as totalrows from gpi_data where year ='2021';
QUERY - 2021-08-24 14:29:32 --> 14.427 | select `consumer_number`, `circle_check`, `flag`, `status`, `consumer_name`, `age`, `gender`, `occupation`, `marital_status`, `circle`, `franchise_brand`, `acting_brand`, `moub`, `previous_moub`, `purchase_pattern`, `intensity`, `regular_shop`, `date`, `year`, `quarter`, `month`, `day_of_the_week`, `time`, `duration`, `gratification`, `big_gratification`, `campaign_name`, `productive`, `productive_type`, `trail_type`, `product_feedback`, `state`, `city`, `source`, `campaign_type`, `retailer_number`, `retailer_code`, `se_mobileno`, `tl_mobileno`, `pincode_entered`, `coupon_code_entered`, `wd`, `geolocationlat`, `geolocationlong`,`created_date` from gpi_data where year ='2021' Order by id DESC LIMIT 10,10 ;
QUERY - 2021-08-24 14:29:32 --> 1.1491 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-24 14:29:32 --> 0.0004 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-24 14:29:32 --> 1.375 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-24 14:29:32 --> 1.1954 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-24 14:29:32 --> 1.0945 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-24 14:29:32 --> 0.0003 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-24 14:29:32 --> 1.3606 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-24 14:29:32 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-24 14:29:32 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 14:29:32 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 14:29:32 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-24 14:29:32 --> Total execution time: 21.5710
DEBUG - 2021-08-24 14:29:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 14:29:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 14:29:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 14:29:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 14:29:42 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-24 14:29:42 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-24 14:29:48 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 14:29:48 --> 0.0004 | select count(id) as totalrows from gpi_data;
QUERY - 2021-08-24 14:29:48 --> 0.001 | select `consumer_number`, `circle_check`, `flag`, `status`, `consumer_name`, `age`, `gender`, `occupation`, `marital_status`, `circle`, `franchise_brand`, `acting_brand`, `moub`, `previous_moub`, `purchase_pattern`, `intensity`, `regular_shop`, `date`, `year`, `quarter`, `month`, `day_of_the_week`, `time`, `duration`, `gratification`, `big_gratification`, `campaign_name`, `productive`, `productive_type`, `trail_type`, `product_feedback`, `state`, `city`, `source`, `campaign_type`, `retailer_number`, `retailer_code`, `se_mobileno`, `tl_mobileno`, `pincode_entered`, `coupon_code_entered`, `wd`, `geolocationlat`, `geolocationlong`,`created_date` from gpi_data Order by id DESC LIMIT 10,10;
QUERY - 2021-08-24 14:29:48 --> 1.1431 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-24 14:29:48 --> 0.0004 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-24 14:29:48 --> 1.2038 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-24 14:29:48 --> 1.0782 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-24 14:29:48 --> 1.077 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-24 14:29:48 --> 0.0003 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-24 14:29:48 --> 1.2787 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-24 14:29:48 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-24 14:29:48 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 14:29:48 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 14:29:48 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-24 14:29:48 --> Total execution time: 5.8606
DEBUG - 2021-08-24 14:41:00 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 14:41:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 14:41:00 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 14:41:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 14:41:00 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 14:41:07 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 14:41:07 --> 1.3382 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-24 14:41:07 --> 0.0004 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-24 14:41:07 --> 1.4939 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-24 14:41:07 --> 1.2196 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-24 14:41:07 --> 1.1915 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-24 14:41:07 --> 0.0003 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-24 14:41:07 --> 1.2131 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-24 14:41:07 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 14:41:07 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-24 14:41:07 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 14:41:07 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 14:41:07 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-24 14:41:07 --> Total execution time: 6.5366
DEBUG - 2021-08-24 14:41:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 14:41:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 14:41:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 14:41:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 14:41:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 14:41:09 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 14:41:09 --> 0.0003 | SELECT * FROM `csv_import` ORDER BY `id` DESC
QUERY - 2021-08-24 14:41:09 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-24 14:41:09 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 14:41:09 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 14:41:09 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-24 14:41:09 --> Total execution time: 0.0675
DEBUG - 2021-08-24 14:41:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 14:41:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 14:41:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 14:41:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 14:41:12 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 14:41:18 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 14:41:18 --> 1.1751 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-24 14:41:18 --> 0.0007 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-24 14:41:18 --> 1.379 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-24 14:41:18 --> 1.28 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-24 14:41:18 --> 1.1627 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-24 14:41:18 --> 0.0003 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-24 14:41:18 --> 1.2883 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-24 14:41:18 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 14:41:18 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-24 14:41:18 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 14:41:18 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 14:41:18 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-24 14:41:18 --> Total execution time: 6.3624
DEBUG - 2021-08-24 14:41:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 14:41:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 14:41:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 14:41:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 14:41:33 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 14:41:33 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 14:41:33 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 14:41:33 --> Total execution time: 0.0736
DEBUG - 2021-08-24 14:41:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 14:41:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 14:41:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 14:41:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 14:41:48 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 14:41:48 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 14:41:48 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 14:41:48 --> Total execution time: 0.0649
DEBUG - 2021-08-24 14:42:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 14:42:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 14:42:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 14:42:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 14:42:03 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 14:42:03 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 14:42:03 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 14:42:03 --> Total execution time: 0.0855
DEBUG - 2021-08-24 14:42:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 14:42:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 14:42:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 14:42:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 14:42:18 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 14:42:18 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 14:42:18 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 14:42:18 --> Total execution time: 0.0738
DEBUG - 2021-08-24 14:42:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 14:42:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 14:42:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 14:42:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 14:42:33 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 14:42:33 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 14:42:33 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 14:42:33 --> Total execution time: 0.0783
DEBUG - 2021-08-24 14:42:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 14:42:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 14:42:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 14:42:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 14:42:48 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 14:42:48 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 14:42:48 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 14:42:48 --> Total execution time: 0.1237
DEBUG - 2021-08-24 14:43:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 14:43:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 14:43:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 14:43:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 14:43:03 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 14:43:03 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 14:43:03 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 14:43:03 --> Total execution time: 0.1070
DEBUG - 2021-08-24 14:43:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 14:43:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 14:43:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 14:43:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 14:43:18 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 14:43:18 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 14:43:18 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 14:43:18 --> Total execution time: 0.0768
DEBUG - 2021-08-24 14:43:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 14:43:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 14:43:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 14:43:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 14:43:33 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 14:43:33 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 14:43:33 --> 0.0005 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 14:43:33 --> Total execution time: 0.0852
DEBUG - 2021-08-24 14:43:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 14:43:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 14:43:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 14:43:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 14:43:48 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 14:43:48 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 14:43:48 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 14:43:48 --> Total execution time: 0.0974
DEBUG - 2021-08-24 14:44:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 14:44:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 14:44:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 14:44:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 14:44:03 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 14:44:03 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 14:44:03 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 14:44:03 --> Total execution time: 0.1002
DEBUG - 2021-08-24 14:44:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 14:44:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 14:44:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 14:44:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 14:44:18 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 14:44:18 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 14:44:18 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 14:44:18 --> Total execution time: 0.0960
DEBUG - 2021-08-24 14:44:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 14:44:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 14:44:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 14:44:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 14:44:33 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 14:44:33 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 14:44:33 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 14:44:33 --> Total execution time: 0.0835
DEBUG - 2021-08-24 14:44:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 14:44:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 14:44:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 14:44:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 14:44:48 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 14:44:48 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 14:44:48 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 14:44:48 --> Total execution time: 0.0739
DEBUG - 2021-08-24 14:45:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 14:45:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 14:45:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 14:45:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 14:45:03 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 14:45:03 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 14:45:03 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 14:45:03 --> Total execution time: 0.0878
DEBUG - 2021-08-24 14:45:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 14:45:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 14:45:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 14:45:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 14:45:18 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 14:45:18 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 14:45:18 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 14:45:18 --> Total execution time: 0.0905
DEBUG - 2021-08-24 14:45:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 14:45:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 14:45:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 14:45:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 14:45:33 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 14:45:33 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 14:45:33 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 14:45:33 --> Total execution time: 0.0711
DEBUG - 2021-08-24 14:45:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 14:45:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 14:45:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 14:45:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 14:45:48 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 14:45:48 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 14:45:48 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 14:45:48 --> Total execution time: 0.0759
DEBUG - 2021-08-24 14:46:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 14:46:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 14:46:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 14:46:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 14:46:03 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 14:46:03 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 14:46:03 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 14:46:03 --> Total execution time: 0.0744
DEBUG - 2021-08-24 14:46:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 14:46:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 14:46:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 14:46:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 14:46:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 14:46:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 14:46:38 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 14:46:38 --> Total execution time: 0.0801
DEBUG - 2021-08-24 14:47:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 14:47:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 14:47:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 14:47:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 14:47:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 14:47:38 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 14:47:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 14:47:38 --> Total execution time: 0.0765
DEBUG - 2021-08-24 14:48:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 14:48:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 14:48:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 14:48:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 14:48:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 14:48:38 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 14:48:38 --> 0.0002 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 14:48:38 --> Total execution time: 0.0767
DEBUG - 2021-08-24 14:49:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 14:49:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 14:49:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 14:49:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 14:49:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 14:49:38 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 14:49:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 14:49:38 --> Total execution time: 0.0690
DEBUG - 2021-08-24 14:50:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 14:50:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 14:50:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 14:50:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 14:50:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 14:50:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 14:50:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 14:50:38 --> Total execution time: 0.0587
DEBUG - 2021-08-24 14:51:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 14:51:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 14:51:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 14:51:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 14:51:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 14:51:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 14:51:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 14:51:38 --> Total execution time: 0.0663
DEBUG - 2021-08-24 14:52:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 14:52:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 14:52:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 14:52:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 14:52:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 14:52:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 14:52:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 14:52:38 --> Total execution time: 0.0749
DEBUG - 2021-08-24 14:53:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 14:53:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 14:53:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 14:53:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 14:53:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 14:53:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 14:53:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 14:53:38 --> Total execution time: 0.0830
DEBUG - 2021-08-24 14:54:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 14:54:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 14:54:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 14:54:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 14:54:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 14:54:38 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 14:54:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 14:54:38 --> Total execution time: 0.0758
DEBUG - 2021-08-24 14:55:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 14:55:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 14:55:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 14:55:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 14:55:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 14:55:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 14:55:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 14:55:38 --> Total execution time: 0.0762
DEBUG - 2021-08-24 14:56:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 14:56:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 14:56:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 14:56:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 14:56:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 14:56:38 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 14:56:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 14:56:38 --> Total execution time: 0.0638
DEBUG - 2021-08-24 14:57:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 14:57:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 14:57:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 14:57:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 14:57:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 14:57:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 14:57:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 14:57:38 --> Total execution time: 0.0790
DEBUG - 2021-08-24 14:58:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 14:58:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 14:58:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 14:58:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 14:58:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 14:58:38 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 14:58:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 14:58:38 --> Total execution time: 0.0647
DEBUG - 2021-08-24 14:59:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 14:59:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 14:59:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 14:59:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 14:59:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 14:59:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 14:59:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 14:59:38 --> Total execution time: 0.0636
DEBUG - 2021-08-24 15:00:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:00:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:00:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:00:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:00:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:00:38 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:00:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:00:38 --> Total execution time: 0.0936
DEBUG - 2021-08-24 15:01:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:01:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:01:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:01:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:01:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:01:22 --> 0.0016 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:01:22 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:01:22 --> Total execution time: 0.1232
DEBUG - 2021-08-24 15:01:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:01:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:01:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:01:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:01:33 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:01:33 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:01:33 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:01:33 --> Total execution time: 0.0977
DEBUG - 2021-08-24 15:01:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:01:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:01:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:01:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:01:48 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:01:48 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:01:48 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:01:48 --> Total execution time: 0.0696
DEBUG - 2021-08-24 15:02:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:02:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:02:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:02:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:02:03 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:02:03 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:02:03 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:02:03 --> Total execution time: 0.0924
DEBUG - 2021-08-24 15:02:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:02:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:02:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:02:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:02:18 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:02:18 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:02:18 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:02:18 --> Total execution time: 0.0893
DEBUG - 2021-08-24 15:02:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:02:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:02:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:02:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:02:33 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:02:33 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:02:33 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:02:33 --> Total execution time: 0.0804
DEBUG - 2021-08-24 15:02:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:02:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:02:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:02:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:02:48 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:02:48 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:02:48 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:02:48 --> Total execution time: 0.0925
DEBUG - 2021-08-24 15:03:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:03:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:03:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:03:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:03:03 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:03:03 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:03:03 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:03:03 --> Total execution time: 0.0724
DEBUG - 2021-08-24 15:03:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:03:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:03:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:03:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:03:18 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:03:18 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:03:18 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:03:18 --> Total execution time: 0.0726
DEBUG - 2021-08-24 15:03:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:03:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:03:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:03:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:03:33 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:03:33 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:03:33 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:03:33 --> Total execution time: 0.0797
DEBUG - 2021-08-24 15:03:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:03:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:03:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:03:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:03:48 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:03:48 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:03:48 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:03:48 --> Total execution time: 0.0772
DEBUG - 2021-08-24 15:04:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:04:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:04:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:04:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:04:03 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:04:03 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:04:03 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:04:03 --> Total execution time: 0.0792
DEBUG - 2021-08-24 15:04:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:04:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:04:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:04:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:04:18 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:04:18 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:04:18 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:04:18 --> Total execution time: 0.0812
DEBUG - 2021-08-24 15:04:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:04:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:04:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:04:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:04:33 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:04:33 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:04:33 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:04:33 --> Total execution time: 0.0645
DEBUG - 2021-08-24 15:04:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:04:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:04:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:04:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:04:48 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:04:48 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:04:48 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:04:48 --> Total execution time: 0.0804
DEBUG - 2021-08-24 15:05:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:05:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:05:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:05:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:05:03 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:05:03 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:05:03 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:05:03 --> Total execution time: 0.0588
DEBUG - 2021-08-24 15:05:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:05:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:05:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:05:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:05:18 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:05:18 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:05:18 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:05:18 --> Total execution time: 0.0825
DEBUG - 2021-08-24 15:05:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:05:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:05:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:05:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:05:33 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:05:33 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:05:33 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:05:33 --> Total execution time: 0.0688
DEBUG - 2021-08-24 15:05:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:05:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:05:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:05:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:05:48 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:05:48 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:05:48 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:05:48 --> Total execution time: 0.0844
DEBUG - 2021-08-24 15:06:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:06:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:06:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:06:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:06:03 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:06:03 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:06:03 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:06:03 --> Total execution time: 0.0942
DEBUG - 2021-08-24 15:06:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:06:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:06:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:06:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:06:18 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:06:18 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:06:18 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:06:18 --> Total execution time: 0.0816
DEBUG - 2021-08-24 15:06:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:06:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:06:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:06:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:06:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:06:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:06:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:06:38 --> Total execution time: 0.0697
DEBUG - 2021-08-24 15:07:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:07:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:07:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:07:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:07:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:07:21 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:07:21 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:07:21 --> Total execution time: 0.0880
DEBUG - 2021-08-24 15:07:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:07:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:07:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:07:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:07:33 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:07:33 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:07:33 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:07:33 --> Total execution time: 0.0692
DEBUG - 2021-08-24 15:07:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:07:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:07:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:07:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:07:48 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:07:48 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:07:48 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:07:48 --> Total execution time: 0.0602
DEBUG - 2021-08-24 15:08:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:08:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:08:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:08:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:08:03 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:08:03 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:08:03 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:08:03 --> Total execution time: 0.0883
DEBUG - 2021-08-24 15:08:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:08:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:08:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:08:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:08:18 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:08:18 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:08:18 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:08:18 --> Total execution time: 0.0825
DEBUG - 2021-08-24 15:08:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:08:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:08:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:08:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:08:33 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:08:33 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:08:33 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:08:33 --> Total execution time: 0.0880
DEBUG - 2021-08-24 15:08:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:08:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:08:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:08:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:08:48 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:08:48 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:08:48 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:08:48 --> Total execution time: 0.0891
DEBUG - 2021-08-24 15:09:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:09:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:09:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:09:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:09:03 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:09:03 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:09:03 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:09:03 --> Total execution time: 0.0776
DEBUG - 2021-08-24 15:09:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:09:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:09:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:09:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:09:18 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:09:18 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:09:18 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:09:18 --> Total execution time: 0.0894
DEBUG - 2021-08-24 15:09:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:09:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:09:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:09:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:09:33 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:09:33 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:09:33 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:09:33 --> Total execution time: 0.0878
DEBUG - 2021-08-24 15:09:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:09:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:09:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:09:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:09:48 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:09:48 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:09:48 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:09:48 --> Total execution time: 0.0866
DEBUG - 2021-08-24 15:10:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:10:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:10:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:10:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:10:03 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:10:03 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:10:03 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:10:03 --> Total execution time: 0.0923
DEBUG - 2021-08-24 15:10:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:10:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:10:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:10:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:10:18 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:10:18 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:10:18 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:10:18 --> Total execution time: 0.0698
DEBUG - 2021-08-24 15:10:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:10:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:10:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:10:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:10:33 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:10:33 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:10:33 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:10:33 --> Total execution time: 0.0755
DEBUG - 2021-08-24 15:10:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:10:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:10:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:10:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:10:48 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:10:48 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:10:48 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:10:48 --> Total execution time: 0.0764
DEBUG - 2021-08-24 15:11:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:11:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:11:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:11:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:11:03 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:11:03 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:11:03 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:11:03 --> Total execution time: 0.1066
DEBUG - 2021-08-24 15:11:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:11:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:11:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:11:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:11:18 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:11:18 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:11:18 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:11:18 --> Total execution time: 0.0724
DEBUG - 2021-08-24 15:11:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:11:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:11:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:11:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:11:33 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:11:33 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:11:33 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:11:33 --> Total execution time: 0.0770
DEBUG - 2021-08-24 15:11:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:11:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:11:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:11:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:11:48 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:11:48 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:11:48 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:11:48 --> Total execution time: 0.0692
DEBUG - 2021-08-24 15:12:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:12:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:12:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:12:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:12:03 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:12:03 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:12:03 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:12:03 --> Total execution time: 0.0694
DEBUG - 2021-08-24 15:12:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:12:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:12:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:12:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:12:18 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:12:18 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:12:18 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:12:18 --> Total execution time: 0.0829
DEBUG - 2021-08-24 15:12:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:12:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:12:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:12:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:12:33 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:12:33 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:12:33 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:12:33 --> Total execution time: 0.0724
DEBUG - 2021-08-24 15:12:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:12:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:12:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:12:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:12:48 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:12:48 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:12:48 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:12:48 --> Total execution time: 0.0836
DEBUG - 2021-08-24 15:13:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:13:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:13:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:13:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:13:03 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:13:03 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:13:03 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:13:03 --> Total execution time: 0.0977
DEBUG - 2021-08-24 15:13:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:13:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:13:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:13:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:13:18 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:13:18 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:13:18 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:13:18 --> Total execution time: 0.0817
DEBUG - 2021-08-24 15:13:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:13:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:13:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:13:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:13:33 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:13:33 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:13:33 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:13:33 --> Total execution time: 0.0723
DEBUG - 2021-08-24 15:13:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:13:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:13:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:13:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:13:48 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:13:48 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:13:48 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:13:48 --> Total execution time: 0.0724
DEBUG - 2021-08-24 15:14:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:14:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:14:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:14:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:14:03 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:14:03 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:14:03 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:14:03 --> Total execution time: 0.0912
DEBUG - 2021-08-24 15:14:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:14:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:14:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:14:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:14:18 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:14:18 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:14:18 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:14:18 --> Total execution time: 0.0710
DEBUG - 2021-08-24 15:14:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:14:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:14:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:14:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:14:33 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:14:33 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:14:33 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:14:33 --> Total execution time: 0.1158
DEBUG - 2021-08-24 15:14:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:14:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:14:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:14:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:14:48 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:14:48 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:14:48 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:14:48 --> Total execution time: 0.0821
DEBUG - 2021-08-24 15:15:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:15:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:15:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:15:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:15:03 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:15:03 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:15:03 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:15:03 --> Total execution time: 0.0722
DEBUG - 2021-08-24 15:15:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:15:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:15:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:15:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:15:18 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:15:18 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:15:18 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:15:18 --> Total execution time: 0.0961
DEBUG - 2021-08-24 15:15:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:15:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:15:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:15:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:15:33 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:15:33 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:15:33 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:15:33 --> Total execution time: 0.0762
DEBUG - 2021-08-24 15:15:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:15:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:15:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:15:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:15:48 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:15:48 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:15:48 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:15:48 --> Total execution time: 0.0810
DEBUG - 2021-08-24 15:16:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:16:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:16:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:16:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:16:03 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:16:03 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:16:03 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:16:03 --> Total execution time: 0.0844
DEBUG - 2021-08-24 15:16:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:16:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:16:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:16:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:16:18 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:16:18 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:16:18 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:16:18 --> Total execution time: 0.0823
DEBUG - 2021-08-24 15:16:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:16:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:16:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:16:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:16:33 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:16:33 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:16:33 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:16:33 --> Total execution time: 0.0721
DEBUG - 2021-08-24 15:17:39 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:17:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:17:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:17:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:17:40 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:17:40 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:17:40 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:17:40 --> Total execution time: 1.5429
DEBUG - 2021-08-24 15:18:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:18:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:18:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:18:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:18:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:18:24 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:18:24 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:18:24 --> Total execution time: 0.1099
DEBUG - 2021-08-24 15:18:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:18:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:18:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:18:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:18:33 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:18:33 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:18:33 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:18:33 --> Total execution time: 0.0746
DEBUG - 2021-08-24 15:18:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:18:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:18:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:18:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:18:48 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:18:48 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:18:48 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:18:48 --> Total execution time: 0.0767
DEBUG - 2021-08-24 15:19:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:19:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:19:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:19:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:19:03 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:19:03 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:19:03 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:19:03 --> Total execution time: 0.0825
DEBUG - 2021-08-24 15:19:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:19:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:19:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:19:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:19:18 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:19:18 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:19:18 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:19:18 --> Total execution time: 0.0759
DEBUG - 2021-08-24 15:19:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:19:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:19:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:19:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:19:33 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:19:33 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:19:33 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:19:33 --> Total execution time: 0.0766
DEBUG - 2021-08-24 15:19:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:19:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:19:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:19:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:19:48 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:19:48 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:19:48 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:19:48 --> Total execution time: 0.0774
DEBUG - 2021-08-24 15:20:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:20:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:20:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:20:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:20:03 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:20:03 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:20:03 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:20:03 --> Total execution time: 0.0767
DEBUG - 2021-08-24 15:20:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:20:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:20:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:20:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:20:18 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:20:18 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:20:18 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:20:18 --> Total execution time: 0.0847
DEBUG - 2021-08-24 15:20:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:20:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:20:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:20:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:20:33 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:20:33 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:20:33 --> 0.0005 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:20:33 --> Total execution time: 0.0763
DEBUG - 2021-08-24 15:20:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:20:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:20:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:20:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:20:48 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:20:48 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:20:48 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:20:48 --> Total execution time: 0.0715
DEBUG - 2021-08-24 15:21:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:21:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:21:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:21:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:21:03 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:21:03 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:21:03 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:21:03 --> Total execution time: 0.0790
DEBUG - 2021-08-24 15:21:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:21:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:21:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:21:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:21:18 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:21:18 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:21:18 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:21:18 --> Total execution time: 0.0693
DEBUG - 2021-08-24 15:21:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:21:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:21:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:21:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:21:33 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:21:33 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:21:33 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:21:33 --> Total execution time: 0.0823
DEBUG - 2021-08-24 15:21:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:21:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:21:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:21:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:21:48 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:21:48 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:21:48 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:21:48 --> Total execution time: 0.0783
DEBUG - 2021-08-24 15:22:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:22:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:22:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:22:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:22:03 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:22:03 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:22:03 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:22:03 --> Total execution time: 0.1159
DEBUG - 2021-08-24 15:22:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:22:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:22:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:22:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:22:18 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:22:18 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:22:18 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:22:18 --> Total execution time: 0.0775
DEBUG - 2021-08-24 15:22:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:22:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:22:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:22:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:22:33 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:22:33 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:22:33 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:22:33 --> Total execution time: 0.0849
DEBUG - 2021-08-24 15:22:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:22:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:22:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:22:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:22:48 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:22:48 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:22:48 --> 0.0022 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:22:48 --> Total execution time: 0.0944
DEBUG - 2021-08-24 15:23:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:23:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:23:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:23:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:23:03 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:23:03 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:23:03 --> 0.0005 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:23:03 --> Total execution time: 0.0859
DEBUG - 2021-08-24 15:23:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:23:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:23:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:23:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:23:18 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:23:18 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:23:18 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:23:18 --> Total execution time: 0.0955
DEBUG - 2021-08-24 15:23:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:23:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:23:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:23:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:23:33 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:23:33 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:23:33 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:23:33 --> Total execution time: 0.0889
DEBUG - 2021-08-24 15:23:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:23:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:23:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:23:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:23:48 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:23:48 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:23:48 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:23:48 --> Total execution time: 0.0785
DEBUG - 2021-08-24 15:24:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:24:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:24:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:24:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:24:03 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:24:03 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:24:03 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:24:03 --> Total execution time: 0.0836
DEBUG - 2021-08-24 15:24:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:24:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:24:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:24:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:24:18 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:24:18 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:24:18 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:24:18 --> Total execution time: 0.0679
DEBUG - 2021-08-24 15:24:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:24:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:24:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:24:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:24:33 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:24:33 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:24:33 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:24:33 --> Total execution time: 0.0779
DEBUG - 2021-08-24 15:24:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:24:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:24:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:24:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:24:48 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:24:48 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:24:48 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:24:48 --> Total execution time: 0.0796
DEBUG - 2021-08-24 15:25:03 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:25:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:25:03 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:25:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:25:03 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:25:03 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:25:03 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:25:03 --> Total execution time: 0.0743
DEBUG - 2021-08-24 15:25:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:25:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:25:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:25:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:25:18 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:25:18 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:25:18 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:25:18 --> Total execution time: 0.0797
DEBUG - 2021-08-24 15:25:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:25:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:25:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:25:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:25:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:25:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:25:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:25:38 --> Total execution time: 0.0932
DEBUG - 2021-08-24 15:26:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:26:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:26:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:26:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:26:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:26:38 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:26:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:26:38 --> Total execution time: 0.0823
DEBUG - 2021-08-24 15:27:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:27:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:27:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:27:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:27:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:27:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:27:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:27:38 --> Total execution time: 0.0796
DEBUG - 2021-08-24 15:28:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:28:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:28:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:28:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:28:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:28:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:28:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:28:38 --> Total execution time: 0.0778
DEBUG - 2021-08-24 15:29:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:29:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:29:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:29:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:29:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:29:38 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:29:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:29:38 --> Total execution time: 0.0609
DEBUG - 2021-08-24 15:30:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:30:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:30:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:30:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:30:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:30:20 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:30:20 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
DEBUG - 2021-08-24 15:30:20 --> Total execution time: 0.0685
DEBUG - 2021-08-24 15:30:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:30:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:30:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:30:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:30:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:30:30 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:30:30 --> 1.1916 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-24 15:30:30 --> 0.0004 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-24 15:30:30 --> 1.2427 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-24 15:30:30 --> 1.1083 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-24 15:30:30 --> 1.0756 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-24 15:30:30 --> 0.0003 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-24 15:30:30 --> 1.2436 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-24 15:30:30 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:30:30 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-24 15:30:30 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:30:30 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:30:30 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-24 15:30:30 --> Total execution time: 6.2988
DEBUG - 2021-08-24 15:30:32 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:30:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:30:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:30:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:30:32 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:30:32 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:30:32 --> 0.0855 | INSERT INTO `csv_export` (`export_status`, `filter_col`, `created_datetime`) VALUES (0, 'null', '2021-08-24 15:30:32')
DEBUG - 2021-08-24 15:30:32 --> Total execution time: 0.2198
DEBUG - 2021-08-24 15:30:32 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:30:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:30:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:30:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:30:32 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:30:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:30:38 --> 1.0627 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-24 15:30:38 --> 0.0004 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-24 15:30:38 --> 1.188 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-24 15:30:38 --> 1.1062 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-24 15:30:38 --> 1.1292 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-24 15:30:38 --> 0.0003 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-24 15:30:38 --> 1.2435 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-24 15:30:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:30:38 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-24 15:30:38 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:30:38 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:30:38 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-24 15:30:38 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:30:38 --> Total execution time: 5.8058
DEBUG - 2021-08-24 15:30:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:30:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:30:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:30:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:30:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:30:53 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:30:53 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:30:53 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:30:53 --> Total execution time: 0.0652
DEBUG - 2021-08-24 15:31:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:31:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:31:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:31:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:31:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:31:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:31:08 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:31:08 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:31:08 --> Total execution time: 0.0690
DEBUG - 2021-08-24 15:31:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:31:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:31:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:31:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:31:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:31:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:31:23 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:31:23 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:31:23 --> Total execution time: 0.0779
DEBUG - 2021-08-24 15:31:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:31:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:31:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:31:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:31:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:31:38 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:31:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:31:38 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:31:38 --> Total execution time: 0.0682
DEBUG - 2021-08-24 15:31:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:31:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:31:54 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:31:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:31:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:31:54 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:31:54 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:31:54 --> 0.1559 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:31:54 --> Total execution time: 0.7806
DEBUG - 2021-08-24 15:32:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:32:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:32:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:32:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:32:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:32:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:32:08 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:32:08 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:32:08 --> Total execution time: 0.1285
DEBUG - 2021-08-24 15:32:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:32:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:32:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:32:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:32:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:32:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:32:23 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:32:23 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:32:23 --> Total execution time: 0.0764
DEBUG - 2021-08-24 15:32:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:32:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:32:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:32:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:32:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:32:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:32:38 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:32:38 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:32:38 --> Total execution time: 0.0873
DEBUG - 2021-08-24 15:32:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:32:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:32:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:32:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:32:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:32:53 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:32:53 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:32:53 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:32:53 --> Total execution time: 0.0633
DEBUG - 2021-08-24 15:33:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:33:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:33:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:33:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:33:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:33:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:33:08 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:33:08 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:33:08 --> Total execution time: 0.0642
DEBUG - 2021-08-24 15:33:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:33:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:33:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:33:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:33:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:33:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:33:23 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:33:23 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:33:23 --> Total execution time: 0.0749
DEBUG - 2021-08-24 15:33:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:33:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:33:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:33:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:33:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:33:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:33:38 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:33:38 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:33:38 --> Total execution time: 0.0669
DEBUG - 2021-08-24 15:33:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:33:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:33:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:33:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:33:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:33:53 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:33:53 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:33:53 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:33:53 --> Total execution time: 0.0909
DEBUG - 2021-08-24 15:34:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:34:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:34:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:34:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:34:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:34:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:34:08 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:34:08 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:34:08 --> Total execution time: 0.0690
DEBUG - 2021-08-24 15:34:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:34:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:34:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:34:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:34:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:34:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:34:23 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:34:23 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:34:23 --> Total execution time: 0.0766
DEBUG - 2021-08-24 15:34:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:34:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:34:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:34:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:34:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:34:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:34:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:34:38 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:34:38 --> Total execution time: 0.0768
DEBUG - 2021-08-24 15:34:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:34:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:34:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:34:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:34:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:34:53 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:34:53 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:34:53 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:34:53 --> Total execution time: 0.0917
DEBUG - 2021-08-24 15:35:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:35:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:35:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:35:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:35:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:35:08 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:35:08 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:35:08 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:35:08 --> Total execution time: 0.0761
DEBUG - 2021-08-24 15:35:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:35:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:35:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:35:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:35:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:35:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:35:23 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:35:23 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:35:23 --> Total execution time: 0.0686
DEBUG - 2021-08-24 15:35:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:35:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:35:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:35:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:35:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:35:38 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:35:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:35:38 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:35:38 --> Total execution time: 0.0803
DEBUG - 2021-08-24 15:35:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:35:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:35:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:35:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:35:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:35:53 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:35:53 --> 0.0016 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:35:53 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:35:53 --> Total execution time: 0.1121
DEBUG - 2021-08-24 15:36:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:36:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:36:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:36:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:36:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:36:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:36:08 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:36:08 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:36:08 --> Total execution time: 0.0713
DEBUG - 2021-08-24 15:36:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:36:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:36:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:36:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:36:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:36:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:36:23 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:36:23 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:36:23 --> Total execution time: 0.0747
DEBUG - 2021-08-24 15:36:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:36:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:36:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:36:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:36:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:36:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:36:38 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:36:38 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:36:38 --> Total execution time: 0.0913
DEBUG - 2021-08-24 15:36:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:36:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:36:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:36:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:36:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:36:53 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:36:53 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:36:53 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:36:53 --> Total execution time: 0.0898
DEBUG - 2021-08-24 15:37:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:37:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:37:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:37:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:37:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:37:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:37:08 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:37:08 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:37:08 --> Total execution time: 0.0786
DEBUG - 2021-08-24 15:37:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:37:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:37:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:37:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:37:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:37:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:37:23 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:37:23 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:37:23 --> Total execution time: 0.0931
DEBUG - 2021-08-24 15:37:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:37:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:37:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:37:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:37:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:37:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:37:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:37:38 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:37:38 --> Total execution time: 0.0779
DEBUG - 2021-08-24 15:37:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:37:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:37:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:37:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:37:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:37:53 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:37:53 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:37:53 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:37:53 --> Total execution time: 0.0796
DEBUG - 2021-08-24 15:38:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:38:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:38:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:38:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:38:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:38:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:38:08 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:38:08 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:38:08 --> Total execution time: 0.0813
DEBUG - 2021-08-24 15:38:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:38:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:38:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:38:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:38:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:38:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:38:23 --> 0.0007 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:38:23 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:38:23 --> Total execution time: 0.0867
DEBUG - 2021-08-24 15:38:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:38:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:38:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:38:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:38:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:38:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:38:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:38:38 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:38:38 --> Total execution time: 0.0727
DEBUG - 2021-08-24 15:38:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:38:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:38:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:38:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:38:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:38:53 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:38:53 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:38:53 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:38:53 --> Total execution time: 0.0753
DEBUG - 2021-08-24 15:39:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:39:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:39:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:39:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:39:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:39:08 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:39:08 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:39:08 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:39:08 --> Total execution time: 0.0818
DEBUG - 2021-08-24 15:39:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:39:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:39:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:39:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:39:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:39:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:39:23 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:39:23 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:39:23 --> Total execution time: 0.0785
DEBUG - 2021-08-24 15:39:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:39:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:39:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:39:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:39:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:39:38 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:39:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:39:38 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:39:38 --> Total execution time: 0.0832
DEBUG - 2021-08-24 15:39:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:39:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:39:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:39:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:39:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:39:53 --> 0.0014 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:39:53 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:39:53 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:39:53 --> Total execution time: 0.0966
DEBUG - 2021-08-24 15:40:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:40:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:40:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:40:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:40:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:40:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:40:08 --> 0.0005 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:40:08 --> 0.0005 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:40:08 --> Total execution time: 0.0970
DEBUG - 2021-08-24 15:40:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:40:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:40:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:40:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:40:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:40:23 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:40:23 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:40:23 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:40:23 --> Total execution time: 0.0879
DEBUG - 2021-08-24 15:40:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:40:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:40:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:40:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:40:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:40:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:40:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:40:38 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:40:38 --> Total execution time: 0.1084
DEBUG - 2021-08-24 15:40:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:40:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:40:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:40:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:40:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:40:53 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:40:53 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:40:53 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:40:53 --> Total execution time: 0.0961
DEBUG - 2021-08-24 15:41:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:41:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:41:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:41:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:41:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:41:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:41:08 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:41:08 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:41:08 --> Total execution time: 0.0841
DEBUG - 2021-08-24 15:41:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:41:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:41:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:41:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:41:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:41:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:41:23 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:41:23 --> 0.0005 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:41:23 --> Total execution time: 0.0735
DEBUG - 2021-08-24 15:41:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:41:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:41:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:41:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:41:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:41:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:41:38 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:41:38 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:41:38 --> Total execution time: 0.0862
DEBUG - 2021-08-24 15:41:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:41:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:41:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:41:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:41:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:41:53 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:41:53 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:41:53 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:41:53 --> Total execution time: 0.0822
DEBUG - 2021-08-24 15:42:30 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:42:30 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:42:30 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:42:30 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:42:30 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:42:30 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:42:30 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:42:30 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:42:30 --> Total execution time: 0.0736
DEBUG - 2021-08-24 15:42:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:42:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:42:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:42:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:42:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:42:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:42:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:42:38 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:42:38 --> Total execution time: 0.0907
DEBUG - 2021-08-24 15:42:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:42:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:42:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:42:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:42:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:42:53 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:42:53 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:42:53 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:42:53 --> Total execution time: 0.0798
DEBUG - 2021-08-24 15:43:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:43:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:43:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:43:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:43:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:43:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:43:08 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:43:08 --> 0.0006 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:43:08 --> Total execution time: 0.0830
DEBUG - 2021-08-24 15:43:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:43:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:43:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:43:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:43:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:43:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:43:23 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:43:23 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:43:23 --> Total execution time: 0.0810
DEBUG - 2021-08-24 15:43:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:43:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:43:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:43:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:43:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:43:38 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:43:38 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:43:38 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:43:38 --> Total execution time: 0.0941
DEBUG - 2021-08-24 15:43:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:43:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:43:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:43:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:43:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:43:53 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:43:53 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:43:53 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:43:53 --> Total execution time: 0.1148
DEBUG - 2021-08-24 15:44:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:44:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:44:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:44:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:44:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:44:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:44:08 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:44:08 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:44:08 --> Total execution time: 0.0695
DEBUG - 2021-08-24 15:44:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:44:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:44:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:44:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:44:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:44:23 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:44:23 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:44:23 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:44:23 --> Total execution time: 0.0760
DEBUG - 2021-08-24 15:44:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:44:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:44:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:44:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:44:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:44:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:44:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:44:38 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:44:38 --> Total execution time: 0.0765
DEBUG - 2021-08-24 15:44:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:44:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:44:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:44:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:44:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:44:53 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:44:53 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:44:53 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:44:53 --> Total execution time: 0.0737
DEBUG - 2021-08-24 15:45:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:45:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:45:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:45:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:45:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:45:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:45:08 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:45:08 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:45:08 --> Total execution time: 0.0769
DEBUG - 2021-08-24 15:45:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:45:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:45:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:45:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:45:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:45:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:45:23 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:45:23 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:45:23 --> Total execution time: 0.0849
DEBUG - 2021-08-24 15:45:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:45:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:45:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:45:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:45:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:45:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:45:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:45:38 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:45:38 --> Total execution time: 0.0725
DEBUG - 2021-08-24 15:45:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:45:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:45:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:45:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:45:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:45:53 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:45:53 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:45:53 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:45:53 --> Total execution time: 0.0874
DEBUG - 2021-08-24 15:46:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:46:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:46:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:46:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:46:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:46:08 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:46:08 --> 0.0007 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:46:08 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:46:08 --> Total execution time: 0.0741
DEBUG - 2021-08-24 15:46:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:46:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:46:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:46:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:46:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:46:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:46:23 --> 0.0005 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:46:23 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:46:23 --> Total execution time: 0.0838
DEBUG - 2021-08-24 15:46:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:46:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:46:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:46:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:46:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:46:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:46:38 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:46:38 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:46:38 --> Total execution time: 0.0938
DEBUG - 2021-08-24 15:46:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:46:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:46:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:46:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:46:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:46:53 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:46:53 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:46:53 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:46:53 --> Total execution time: 0.0853
DEBUG - 2021-08-24 15:47:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:47:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:47:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:47:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:47:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:47:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:47:08 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:47:08 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:47:08 --> Total execution time: 0.0675
DEBUG - 2021-08-24 15:47:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:47:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:47:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:47:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:47:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:47:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:47:23 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:47:23 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:47:23 --> Total execution time: 0.0773
DEBUG - 2021-08-24 15:47:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:47:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:47:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:47:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:47:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:47:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:47:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:47:38 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:47:38 --> Total execution time: 0.0807
DEBUG - 2021-08-24 15:48:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:48:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:48:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:48:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:48:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:48:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:48:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:48:38 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:48:38 --> Total execution time: 0.0615
DEBUG - 2021-08-24 15:49:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:49:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:49:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:49:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:49:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:49:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:49:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:49:38 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:49:38 --> Total execution time: 0.0739
DEBUG - 2021-08-24 15:50:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:50:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:50:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:50:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:50:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:50:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:50:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:50:38 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:50:38 --> Total execution time: 0.0907
DEBUG - 2021-08-24 15:51:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:51:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:51:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:51:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:51:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:51:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:51:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:51:38 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:51:38 --> Total execution time: 0.0748
DEBUG - 2021-08-24 15:52:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:52:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:52:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:52:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:52:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:52:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:52:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:52:38 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:52:38 --> Total execution time: 0.0847
DEBUG - 2021-08-24 15:53:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:53:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:53:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:53:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:53:11 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:53:11 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:53:11 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:53:11 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:53:11 --> Total execution time: 0.0989
DEBUG - 2021-08-24 15:53:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:53:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:53:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:53:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:53:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:53:23 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:53:23 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:53:23 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:53:23 --> Total execution time: 0.0663
DEBUG - 2021-08-24 15:53:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:53:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:53:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:53:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:53:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:53:38 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:53:38 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:53:38 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:53:38 --> Total execution time: 0.0702
DEBUG - 2021-08-24 15:53:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:53:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:53:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:53:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:53:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:53:53 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:53:53 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:53:53 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:53:53 --> Total execution time: 0.0708
DEBUG - 2021-08-24 15:54:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:54:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:54:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:54:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:54:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:54:08 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:54:08 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:54:08 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:54:08 --> Total execution time: 0.1021
DEBUG - 2021-08-24 15:54:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:54:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:54:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:54:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:54:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:54:23 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:54:23 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:54:23 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:54:23 --> Total execution time: 0.0956
DEBUG - 2021-08-24 15:54:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:54:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:54:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:54:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:54:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:54:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:54:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:54:38 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:54:38 --> Total execution time: 0.0752
DEBUG - 2021-08-24 15:54:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:54:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:54:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:54:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:54:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:54:53 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:54:53 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:54:53 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:54:53 --> Total execution time: 0.0908
DEBUG - 2021-08-24 15:55:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:55:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:55:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:55:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:55:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:55:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:55:08 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:55:08 --> 0.0007 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:55:08 --> Total execution time: 0.0717
DEBUG - 2021-08-24 15:55:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:55:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:55:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:55:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:55:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:55:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:55:23 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:55:23 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:55:23 --> Total execution time: 0.0751
DEBUG - 2021-08-24 15:55:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:55:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:55:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:55:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:55:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:55:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:55:38 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:55:38 --> 0.0008 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:55:38 --> Total execution time: 0.0804
DEBUG - 2021-08-24 15:55:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:55:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:55:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:55:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:55:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:55:53 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:55:53 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:55:53 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:55:53 --> Total execution time: 0.0970
DEBUG - 2021-08-24 15:56:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:56:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:56:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:56:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:56:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:56:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:56:08 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:56:08 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:56:08 --> Total execution time: 0.0887
DEBUG - 2021-08-24 15:56:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:56:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:56:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:56:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:56:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:56:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:56:23 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:56:23 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:56:23 --> Total execution time: 0.0689
DEBUG - 2021-08-24 15:56:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:56:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:56:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:56:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:56:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:56:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:56:38 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:56:38 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:56:38 --> Total execution time: 0.0738
DEBUG - 2021-08-24 15:56:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:56:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:56:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:56:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:56:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:56:53 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:56:53 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:56:53 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:56:53 --> Total execution time: 0.0801
DEBUG - 2021-08-24 15:57:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:57:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:57:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:57:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:57:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:57:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:57:08 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:57:08 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:57:08 --> Total execution time: 0.0720
DEBUG - 2021-08-24 15:57:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:57:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:57:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:57:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:57:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:57:23 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:57:23 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:57:23 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:57:23 --> Total execution time: 0.0835
DEBUG - 2021-08-24 15:57:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:57:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:57:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:57:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:57:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:57:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:57:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:57:38 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:57:38 --> Total execution time: 0.0698
DEBUG - 2021-08-24 15:57:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:57:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:57:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:57:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:57:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:57:53 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:57:53 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:57:53 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:57:53 --> Total execution time: 0.0642
DEBUG - 2021-08-24 15:58:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:58:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:58:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:58:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:58:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:58:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:58:08 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:58:08 --> 0.0005 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:58:08 --> Total execution time: 0.0909
DEBUG - 2021-08-24 15:58:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:58:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:58:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:58:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:58:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:58:23 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:58:23 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:58:23 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:58:23 --> Total execution time: 0.0832
DEBUG - 2021-08-24 15:58:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:58:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:58:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:58:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:58:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:58:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:58:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:58:38 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:58:38 --> Total execution time: 0.0782
DEBUG - 2021-08-24 15:58:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:58:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:58:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:58:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:58:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:58:53 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:58:53 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:58:53 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:58:53 --> Total execution time: 0.0690
DEBUG - 2021-08-24 15:59:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:59:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:59:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:59:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:59:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:59:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:59:08 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:59:08 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:59:08 --> Total execution time: 0.0842
DEBUG - 2021-08-24 15:59:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:59:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:59:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:59:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:59:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:59:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:59:23 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:59:23 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:59:23 --> Total execution time: 0.0954
DEBUG - 2021-08-24 15:59:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:59:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:59:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:59:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:59:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:59:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:59:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:59:38 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:59:38 --> Total execution time: 0.0752
DEBUG - 2021-08-24 15:59:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 15:59:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 15:59:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 15:59:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 15:59:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 15:59:53 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 15:59:53 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 15:59:53 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 15:59:53 --> Total execution time: 0.0851
DEBUG - 2021-08-24 16:00:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:00:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:00:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:00:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:00:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:00:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:00:08 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:00:08 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:00:08 --> Total execution time: 0.0780
DEBUG - 2021-08-24 16:00:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:00:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:00:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:00:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:00:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:00:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:00:23 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:00:23 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:00:23 --> Total execution time: 0.0932
DEBUG - 2021-08-24 16:00:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:00:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:00:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:00:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:00:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:00:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:00:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:00:38 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:00:38 --> Total execution time: 0.0794
DEBUG - 2021-08-24 16:00:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:00:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:00:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:00:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:00:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:00:53 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:00:53 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:00:53 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:00:53 --> Total execution time: 0.0814
DEBUG - 2021-08-24 16:01:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:01:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:01:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:01:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:01:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:01:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:01:08 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:01:08 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:01:08 --> Total execution time: 0.0769
DEBUG - 2021-08-24 16:01:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:01:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:01:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:01:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:01:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:01:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:01:23 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:01:23 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:01:23 --> Total execution time: 0.0733
DEBUG - 2021-08-24 16:01:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:01:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:01:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:01:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:01:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:01:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:01:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:01:38 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:01:38 --> Total execution time: 0.0913
DEBUG - 2021-08-24 16:01:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:01:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:01:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:01:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:01:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:01:53 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:01:53 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:01:53 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:01:53 --> Total execution time: 0.0729
DEBUG - 2021-08-24 16:02:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:02:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:02:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:02:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:02:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:02:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:02:08 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:02:08 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:02:08 --> Total execution time: 0.0904
DEBUG - 2021-08-24 16:02:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:02:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:02:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:02:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:02:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:02:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:02:23 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:02:23 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:02:23 --> Total execution time: 0.0824
DEBUG - 2021-08-24 16:02:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:02:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:02:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:02:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:02:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:02:38 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:02:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:02:38 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:02:38 --> Total execution time: 0.0772
DEBUG - 2021-08-24 16:02:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:02:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:02:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:02:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:02:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:02:53 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:02:53 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:02:53 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:02:53 --> Total execution time: 0.0616
DEBUG - 2021-08-24 16:03:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:03:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:03:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:03:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:03:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:03:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:03:08 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:03:08 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:03:08 --> Total execution time: 0.0819
DEBUG - 2021-08-24 16:03:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:03:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:03:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:03:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:03:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:03:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:03:23 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:03:23 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:03:23 --> Total execution time: 0.0814
DEBUG - 2021-08-24 16:03:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:03:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:03:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:03:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:03:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:03:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:03:38 --> 0.0005 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:03:38 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:03:38 --> Total execution time: 0.0797
DEBUG - 2021-08-24 16:03:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:03:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:03:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:03:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:03:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:03:53 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:03:53 --> 0.0005 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:03:53 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:03:53 --> Total execution time: 0.0926
DEBUG - 2021-08-24 16:04:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:04:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:04:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:04:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:04:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:04:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:04:08 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:04:08 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:04:08 --> Total execution time: 0.0719
DEBUG - 2021-08-24 16:04:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:04:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:04:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:04:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:04:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:04:23 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:04:23 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:04:23 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:04:23 --> Total execution time: 0.1212
DEBUG - 2021-08-24 16:04:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:04:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:04:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:04:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:04:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:04:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:04:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:04:38 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:04:38 --> Total execution time: 0.0681
DEBUG - 2021-08-24 16:04:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:04:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:04:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:04:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:04:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:04:53 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:04:53 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:04:53 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:04:53 --> Total execution time: 0.0879
DEBUG - 2021-08-24 16:05:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:05:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:05:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:05:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:05:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:05:08 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:05:08 --> 0.0006 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:05:08 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:05:08 --> Total execution time: 0.0845
DEBUG - 2021-08-24 16:05:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:05:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:05:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:05:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:05:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:05:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:05:23 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:05:23 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:05:23 --> Total execution time: 0.0807
DEBUG - 2021-08-24 16:05:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:05:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:05:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:05:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:05:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:05:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:05:38 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:05:38 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:05:38 --> Total execution time: 0.0780
DEBUG - 2021-08-24 16:05:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:05:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:05:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:05:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:05:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:05:53 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:05:53 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:05:53 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:05:53 --> Total execution time: 0.1138
DEBUG - 2021-08-24 16:06:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:06:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:06:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:06:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:06:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:06:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:06:08 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:06:08 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:06:08 --> Total execution time: 0.0794
DEBUG - 2021-08-24 16:06:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:06:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:06:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:06:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:06:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:06:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:06:23 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:06:23 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:06:23 --> Total execution time: 0.0778
DEBUG - 2021-08-24 16:06:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:06:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:06:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:06:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:06:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:06:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:06:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:06:38 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:06:38 --> Total execution time: 0.0841
DEBUG - 2021-08-24 16:06:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:06:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:06:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:06:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:06:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:06:53 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:06:53 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:06:53 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:06:53 --> Total execution time: 0.1085
DEBUG - 2021-08-24 16:07:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:07:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:07:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:07:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:07:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:07:08 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:07:08 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:07:08 --> 0.0006 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:07:08 --> Total execution time: 0.0703
DEBUG - 2021-08-24 16:07:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:07:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:07:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:07:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:07:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:07:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:07:23 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:07:23 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:07:23 --> Total execution time: 0.0765
DEBUG - 2021-08-24 16:07:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:07:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:07:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:07:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:07:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:07:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:07:38 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:07:38 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:07:38 --> Total execution time: 0.0699
DEBUG - 2021-08-24 16:07:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:07:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:07:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:07:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:07:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:07:53 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:07:53 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:07:53 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:07:53 --> Total execution time: 0.0690
DEBUG - 2021-08-24 16:08:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:08:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:08:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:08:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:08:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:08:08 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:08:08 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:08:08 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:08:08 --> Total execution time: 0.0780
DEBUG - 2021-08-24 16:08:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:08:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:08:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:08:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:08:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:08:23 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:08:23 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:08:23 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:08:23 --> Total execution time: 0.0888
DEBUG - 2021-08-24 16:08:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:08:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:08:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:08:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:08:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:08:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:08:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:08:38 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:08:38 --> Total execution time: 0.0774
DEBUG - 2021-08-24 16:08:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:08:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:08:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:08:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:08:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:08:53 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:08:53 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:08:53 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:08:53 --> Total execution time: 0.0836
DEBUG - 2021-08-24 16:09:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:09:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:09:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:09:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:09:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:09:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:09:08 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:09:08 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:09:08 --> Total execution time: 0.0709
DEBUG - 2021-08-24 16:09:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:09:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:09:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:09:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:09:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:09:23 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:09:23 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:09:23 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:09:23 --> Total execution time: 0.0691
DEBUG - 2021-08-24 16:09:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:09:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:09:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:09:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:09:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:09:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:09:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:09:38 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:09:38 --> Total execution time: 0.0698
DEBUG - 2021-08-24 16:09:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:09:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:09:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:09:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:09:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:09:53 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:09:53 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:09:53 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:09:53 --> Total execution time: 0.0606
DEBUG - 2021-08-24 16:10:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:10:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:10:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:10:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:10:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:10:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:10:08 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:10:08 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:10:08 --> Total execution time: 0.0820
DEBUG - 2021-08-24 16:10:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:10:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:10:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:10:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:10:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:10:23 --> 0.001 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:10:23 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:10:23 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:10:23 --> Total execution time: 0.0916
DEBUG - 2021-08-24 16:10:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:10:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:10:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:10:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:10:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:10:38 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:10:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:10:38 --> 0.0002 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:10:38 --> Total execution time: 0.0732
DEBUG - 2021-08-24 16:10:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:10:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:10:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:10:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:10:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:10:53 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:10:53 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:10:53 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:10:53 --> Total execution time: 0.0700
DEBUG - 2021-08-24 16:11:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:11:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:11:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:11:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:11:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:11:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:11:08 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:11:08 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:11:08 --> Total execution time: 0.0703
DEBUG - 2021-08-24 16:11:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:11:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:11:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:11:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:11:23 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:11:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:11:23 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:11:23 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:11:23 --> Total execution time: 0.0811
DEBUG - 2021-08-24 16:11:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:11:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:11:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:11:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:11:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:11:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:11:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:11:38 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:11:38 --> Total execution time: 0.0737
DEBUG - 2021-08-24 16:12:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:12:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:12:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:12:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:12:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:12:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:12:38 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:12:38 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:12:38 --> Total execution time: 0.0744
DEBUG - 2021-08-24 16:13:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:13:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:13:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:13:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:13:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:13:38 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:13:38 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:13:38 --> 0.0007 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:13:38 --> Total execution time: 0.1067
DEBUG - 2021-08-24 16:14:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:14:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:14:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:14:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:14:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:14:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:14:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:14:38 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:14:38 --> Total execution time: 0.0951
DEBUG - 2021-08-24 16:15:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:15:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:15:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:15:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:15:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:15:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:15:38 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:15:38 --> 0.0006 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:15:38 --> Total execution time: 0.0916
DEBUG - 2021-08-24 16:16:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:16:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:16:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:16:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:16:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:16:39 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:16:39 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:16:39 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:16:39 --> Total execution time: 0.2082
DEBUG - 2021-08-24 16:17:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:17:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:17:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:17:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:17:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:17:38 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:17:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:17:38 --> 0.0015 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:17:38 --> Total execution time: 0.0761
DEBUG - 2021-08-24 16:18:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:18:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:18:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:18:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:18:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:18:38 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:18:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:18:38 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:18:38 --> Total execution time: 0.0639
DEBUG - 2021-08-24 16:19:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:19:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:19:39 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:19:39 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:19:39 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:19:39 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:19:39 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:19:39 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:19:39 --> Total execution time: 0.1151
DEBUG - 2021-08-24 16:20:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:20:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:20:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:20:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:20:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:20:38 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:20:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:20:38 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:20:38 --> Total execution time: 0.0796
DEBUG - 2021-08-24 16:21:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:21:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:21:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:21:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:21:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:21:38 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:21:38 --> 0.0006 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:21:38 --> 0.0005 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:21:38 --> Total execution time: 0.0850
DEBUG - 2021-08-24 16:22:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:22:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:22:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:22:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:22:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:22:38 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:22:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:22:38 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:22:38 --> Total execution time: 0.0619
DEBUG - 2021-08-24 16:23:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:23:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:23:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:23:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:23:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:23:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:23:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:23:38 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:23:38 --> Total execution time: 0.0890
DEBUG - 2021-08-24 16:24:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:24:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:24:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:24:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:24:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:24:38 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:24:38 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:24:38 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:24:38 --> Total execution time: 0.0762
DEBUG - 2021-08-24 16:25:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:25:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:25:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:25:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:25:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:25:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:25:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:25:38 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:25:38 --> Total execution time: 0.0827
DEBUG - 2021-08-24 16:26:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:26:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:26:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:26:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:26:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:26:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:26:38 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:26:38 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:26:38 --> Total execution time: 0.0726
DEBUG - 2021-08-24 16:27:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:27:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:27:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:27:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:27:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:27:38 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:27:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:27:38 --> 0.0006 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:27:38 --> Total execution time: 0.0893
DEBUG - 2021-08-24 16:28:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:28:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:28:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:28:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:28:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:28:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:28:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:28:38 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:28:38 --> Total execution time: 0.0885
DEBUG - 2021-08-24 16:29:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:29:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:29:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:29:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:29:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 16:29:38 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:29:38 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 16:29:38 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 16:29:38 --> Total execution time: 0.0986
DEBUG - 2021-08-24 16:29:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:29:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:29:40 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:29:40 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:29:40 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-24 16:29:40 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-24 16:29:40 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:29:40 --> 0.0194 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-24 16:29:40 --> 0.0004 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-24 16:29:40 --> 0.0006 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-24 16:29:40 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:29:40 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:29:40 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-24 16:29:40 --> Total execution time: 0.3428
DEBUG - 2021-08-24 16:29:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 16:29:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 16:29:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 16:29:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 16:29:41 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-24 16:29:41 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-24 16:29:48 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:29:48 --> 0.0003 | select count(id) as totalrows from gpi_data;
QUERY - 2021-08-24 16:29:48 --> 0.0009 | select `consumer_number`, `circle_check`, `flag`, `status`, `consumer_name`, `age`, `gender`, `occupation`, `marital_status`, `circle`, `franchise_brand`, `acting_brand`, `moub`, `previous_moub`, `purchase_pattern`, `intensity`, `regular_shop`, `date`, `year`, `quarter`, `month`, `day_of_the_week`, `time`, `duration`, `gratification`, `big_gratification`, `campaign_name`, `productive`, `productive_type`, `trail_type`, `product_feedback`, `state`, `city`, `source`, `campaign_type`, `retailer_number`, `retailer_code`, `se_mobileno`, `tl_mobileno`, `pincode_entered`, `coupon_code_entered`, `wd`, `geolocationlat`, `geolocationlong`,`created_date` from gpi_data Order by id DESC LIMIT 10,10;
QUERY - 2021-08-24 16:29:48 --> 1.131 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-24 16:29:48 --> 0.0004 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-24 16:29:48 --> 1.2619 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-24 16:29:48 --> 1.1236 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-24 16:29:48 --> 1.1295 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-24 16:29:48 --> 0.0009 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-24 16:29:48 --> 1.5338 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-24 16:29:48 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-24 16:29:48 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:29:48 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 16:29:48 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-24 16:29:48 --> Total execution time: 6.6357
DEBUG - 2021-08-24 18:33:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:33:08 --> No URI present. Default controller set.
DEBUG - 2021-08-24 18:33:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:33:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:33:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:33:08 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-24 18:33:08 --> Form_validation class already loaded. Second attempt ignored.
QUERY - 2021-08-24 18:33:09 --> 0.0673 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-24 18:33:09 --> Total execution time: 0.2370
DEBUG - 2021-08-24 18:33:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:33:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:33:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:33:13 --> No URI present. Default controller set.
DEBUG - 2021-08-24 18:33:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:33:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:33:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:33:13 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-24 18:33:13 --> Form_validation class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:33:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:33:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:33:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:33:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:33:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:33:17 --> 1.4687 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-24 18:33:17 --> 1.22 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-24 18:33:17 --> 1.2239 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-24 18:33:17 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-24 18:33:17 --> 0.0526 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:33:17 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:33:17 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:33:17 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-24 18:33:17 --> Total execution time: 4.0251
DEBUG - 2021-08-24 18:33:17 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:33:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:33:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:33:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:33:18 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-24 18:33:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:33:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:33:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:33:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:33:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:33:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-24 18:33:19 --> 1.5034 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-24 18:33:19 --> Total execution time: 1.6085
DEBUG - 2021-08-24 18:33:19 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:33:19 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:33:19 --> 0.0004 | select count(id) as total from gpi_data
DEBUG - 2021-08-24 18:33:19 --> Total execution time: 1.4732
DEBUG - 2021-08-24 18:33:19 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:33:19 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:33:19 --> 0.053 | select count(distinct(campaign_name)) as total from gpi_data
DEBUG - 2021-08-24 18:33:19 --> Total execution time: 1.5242
DEBUG - 2021-08-24 18:33:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:33:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:33:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:33:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:33:23 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-24 18:33:23 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-24 18:33:23 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:33:23 --> 0.0004 | SELECT COUNT(*) AS `numrows` FROM `admins` WHERE `role_type` = 2
QUERY - 2021-08-24 18:33:23 --> 0.0004 | SELECT * FROM `admins` WHERE `role_type` = 2 ORDER BY `id` DESC  LIMIT 10
QUERY - 2021-08-24 18:33:23 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-24 18:33:23 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:33:23 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:33:23 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-24 18:33:23 --> Total execution time: 0.0825
DEBUG - 2021-08-24 18:33:24 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:33:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:33:24 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:33:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:33:24 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-24 18:33:24 --> Pagination class already loaded. Second attempt ignored.
QUERY - 2021-08-24 18:33:30 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:33:30 --> 0.0003 | select count(id) as totalrows from gpi_data;
QUERY - 2021-08-24 18:33:30 --> 0.0263 | select `consumer_number`, `circle_check`, `flag`, `status`, `consumer_name`, `age`, `gender`, `occupation`, `marital_status`, `circle`, `franchise_brand`, `acting_brand`, `moub`, `previous_moub`, `purchase_pattern`, `intensity`, `regular_shop`, `date`, `year`, `quarter`, `month`, `day_of_the_week`, `time`, `duration`, `gratification`, `big_gratification`, `campaign_name`, `productive`, `productive_type`, `trail_type`, `product_feedback`, `state`, `city`, `source`, `campaign_type`, `retailer_number`, `retailer_code`, `se_mobileno`, `tl_mobileno`, `pincode_entered`, `coupon_code_entered`, `wd`, `geolocationlat`, `geolocationlong`,`created_date` from gpi_data Order by id DESC LIMIT 10,10;
QUERY - 2021-08-24 18:33:30 --> 1.0487 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-24 18:33:30 --> 0.0004 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-24 18:33:30 --> 1.1823 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-24 18:33:30 --> 1.0398 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-24 18:33:30 --> 1.1835 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-24 18:33:30 --> 0.0197 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-24 18:33:30 --> 1.2351 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-24 18:33:30 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-24 18:33:30 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:33:30 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:33:30 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-24 18:33:30 --> Total execution time: 5.8054
DEBUG - 2021-08-24 18:34:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:34:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:34:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:34:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:34:04 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:34:10 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:34:10 --> 1.053 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-24 18:34:10 --> 0.0004 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-24 18:34:10 --> 1.2006 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-24 18:34:10 --> 0.9514 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-24 18:34:10 --> 1.0335 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-24 18:34:10 --> 0.0003 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-24 18:34:10 --> 1.2095 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-24 18:34:10 --> 0.1003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:34:10 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-24 18:34:10 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:34:10 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:34:10 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-24 18:34:10 --> 0.0328 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:34:10 --> Total execution time: 5.6986
DEBUG - 2021-08-24 18:34:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:34:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:34:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:34:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:34:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:34:26 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:34:26 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:34:26 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:34:26 --> Total execution time: 0.0774
DEBUG - 2021-08-24 18:34:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:34:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:34:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:34:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:34:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:34:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:34:41 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:34:41 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:34:41 --> Total execution time: 0.0740
DEBUG - 2021-08-24 18:34:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:34:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:34:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:34:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:34:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:34:56 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:34:56 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:34:56 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:34:56 --> Total execution time: 0.0866
DEBUG - 2021-08-24 18:35:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:35:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:35:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:35:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:35:11 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:35:11 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:35:11 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:35:11 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:35:11 --> Total execution time: 0.0811
DEBUG - 2021-08-24 18:35:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:35:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:35:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:35:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:35:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:35:26 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:35:26 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:35:26 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:35:26 --> Total execution time: 0.0735
DEBUG - 2021-08-24 18:35:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:35:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:35:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:35:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:35:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:35:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:35:41 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:35:41 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:35:41 --> Total execution time: 0.0867
DEBUG - 2021-08-24 18:35:55 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:35:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:35:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:35:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:35:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:35:56 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:35:56 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:35:56 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:35:56 --> Total execution time: 0.0620
DEBUG - 2021-08-24 18:36:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:36:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:36:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:36:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:36:11 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:36:11 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:36:11 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:36:11 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:36:11 --> Total execution time: 0.0815
DEBUG - 2021-08-24 18:36:25 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:36:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:36:26 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:36:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:36:26 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:36:26 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:36:26 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:36:26 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:36:26 --> Total execution time: 0.0760
DEBUG - 2021-08-24 18:36:40 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:36:40 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:36:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:36:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:36:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:36:41 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:36:41 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:36:41 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:36:41 --> Total execution time: 0.0630
DEBUG - 2021-08-24 18:36:56 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:36:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:36:56 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:36:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:36:56 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:36:56 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:36:56 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:36:56 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:36:56 --> Total execution time: 0.0738
DEBUG - 2021-08-24 18:37:10 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:37:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:37:10 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:37:10 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:37:10 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:37:10 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:37:10 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:37:10 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:37:10 --> Total execution time: 0.1005
DEBUG - 2021-08-24 18:37:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:37:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:37:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:37:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:37:12 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:37:18 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:37:18 --> 1.1149 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-24 18:37:18 --> 0.0004 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-24 18:37:18 --> 1.1499 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-24 18:37:18 --> 1.0125 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-24 18:37:18 --> 1.0534 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-24 18:37:18 --> 0.0003 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-24 18:37:18 --> 1.2803 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-24 18:37:18 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:37:18 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-24 18:37:18 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:37:18 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:37:18 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-24 18:37:18 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:37:18 --> Total execution time: 5.6941
DEBUG - 2021-08-24 18:37:33 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:37:33 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:37:33 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:37:33 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:37:33 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:37:33 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:37:33 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:37:33 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:37:33 --> Total execution time: 0.0741
DEBUG - 2021-08-24 18:37:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:37:49 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:37:49 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:37:49 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:37:49 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:37:49 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:37:49 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:37:49 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:37:49 --> Total execution time: 0.0837
DEBUG - 2021-08-24 18:38:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:38:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:38:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:38:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:38:04 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:38:04 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:38:04 --> 0.0006 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:38:04 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:38:04 --> Total execution time: 0.0778
DEBUG - 2021-08-24 18:38:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:38:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:38:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:38:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:38:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:38:13 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:38:13 --> 1.0708 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-24 18:38:13 --> 0.0004 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-24 18:38:13 --> 1.1966 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-24 18:38:13 --> 1.0506 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-24 18:38:13 --> 1.0478 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-24 18:38:13 --> 0.0003 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-24 18:38:13 --> 1.1147 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-24 18:38:13 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:38:13 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-24 18:38:13 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:38:13 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:38:13 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-24 18:38:13 --> 0.0005 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:38:13 --> Total execution time: 5.5537
DEBUG - 2021-08-24 18:38:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:38:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:38:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:38:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:38:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:38:29 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:38:29 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:38:29 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:38:29 --> Total execution time: 0.0753
DEBUG - 2021-08-24 18:38:29 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:38:29 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:38:29 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:38:29 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:38:29 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:38:35 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:38:35 --> 1.1218 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-24 18:38:35 --> 0.0004 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-24 18:38:35 --> 1.1774 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-24 18:38:35 --> 1.1572 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-24 18:38:35 --> 1.0462 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-24 18:38:35 --> 0.0003 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-24 18:38:35 --> 1.2361 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-24 18:38:35 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:38:35 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-24 18:38:35 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:38:35 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:38:35 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-24 18:38:35 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:38:35 --> Total execution time: 5.8167
DEBUG - 2021-08-24 18:38:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:38:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:38:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:38:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:38:50 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:38:50 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:38:50 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:38:50 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:38:50 --> Total execution time: 0.0726
DEBUG - 2021-08-24 18:39:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:39:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:39:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:39:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:39:06 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:39:06 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:39:06 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:39:06 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:39:06 --> Total execution time: 0.0737
DEBUG - 2021-08-24 18:39:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:39:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:39:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:39:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:39:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:39:21 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:39:21 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:39:21 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:39:21 --> Total execution time: 0.0660
DEBUG - 2021-08-24 18:39:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:39:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:39:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:39:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:39:36 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:39:36 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:39:36 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:39:36 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:39:36 --> Total execution time: 0.0785
DEBUG - 2021-08-24 18:39:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:39:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:39:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:39:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:39:51 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:39:51 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:39:51 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:39:51 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:39:51 --> Total execution time: 0.0833
DEBUG - 2021-08-24 18:40:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:40:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:40:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:40:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:40:06 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:40:06 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:40:06 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:40:06 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:40:06 --> Total execution time: 0.0944
DEBUG - 2021-08-24 18:40:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:40:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:40:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:40:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:40:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:40:21 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:40:21 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:40:21 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:40:21 --> Total execution time: 0.0728
DEBUG - 2021-08-24 18:40:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:40:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:40:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:40:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:40:36 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:40:36 --> 0.0096 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:40:36 --> 0.0008 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:40:36 --> 0.0005 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:40:36 --> Total execution time: 0.1509
DEBUG - 2021-08-24 18:40:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:40:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:40:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:40:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:40:51 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:40:51 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:40:51 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:40:51 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:40:51 --> Total execution time: 0.0659
DEBUG - 2021-08-24 18:41:06 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:41:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:41:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:41:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:41:06 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:41:06 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:41:06 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:41:06 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:41:06 --> Total execution time: 0.0778
DEBUG - 2021-08-24 18:41:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:41:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:41:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:41:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:41:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:41:21 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:41:21 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:41:21 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:41:21 --> Total execution time: 0.0698
DEBUG - 2021-08-24 18:41:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:41:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:41:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:41:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:41:36 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:41:36 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:41:36 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:41:36 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:41:36 --> Total execution time: 0.0754
DEBUG - 2021-08-24 18:41:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:41:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:41:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:41:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:41:51 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:41:51 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:41:51 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:41:51 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:41:51 --> Total execution time: 0.0793
DEBUG - 2021-08-24 18:42:06 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:42:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:42:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:42:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:42:06 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:42:06 --> 0.0007 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:42:06 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:42:06 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:42:06 --> Total execution time: 0.1050
DEBUG - 2021-08-24 18:42:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:42:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:42:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:42:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:42:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:42:21 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:42:21 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:42:21 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:42:21 --> Total execution time: 0.0838
DEBUG - 2021-08-24 18:42:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:42:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:42:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:42:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:42:36 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:42:36 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:42:36 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:42:36 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:42:36 --> Total execution time: 0.0988
DEBUG - 2021-08-24 18:42:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:42:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:42:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:42:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:42:51 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:42:51 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:42:51 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:42:51 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:42:51 --> Total execution time: 0.0829
DEBUG - 2021-08-24 18:43:06 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:43:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:43:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:43:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:43:06 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:43:06 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:43:06 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:43:06 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:43:06 --> Total execution time: 0.0834
DEBUG - 2021-08-24 18:43:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:43:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:43:22 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:43:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:43:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:43:22 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:43:22 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:43:22 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:43:22 --> Total execution time: 0.1055
DEBUG - 2021-08-24 18:43:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:43:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:43:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:43:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:43:36 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:43:36 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:43:36 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:43:36 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:43:36 --> Total execution time: 0.0910
DEBUG - 2021-08-24 18:43:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:43:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:43:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:43:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:43:51 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:43:51 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:43:51 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:43:51 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:43:51 --> Total execution time: 0.0715
DEBUG - 2021-08-24 18:44:06 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:44:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:44:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:44:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:44:06 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:44:06 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:44:06 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:44:06 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:44:06 --> Total execution time: 0.0825
DEBUG - 2021-08-24 18:44:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:44:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:44:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:44:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:44:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:44:21 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:44:21 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:44:21 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:44:21 --> Total execution time: 0.0804
DEBUG - 2021-08-24 18:44:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:44:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:44:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:44:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:44:36 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:44:36 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:44:36 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:44:36 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:44:36 --> Total execution time: 0.0835
DEBUG - 2021-08-24 18:44:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:44:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:44:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:44:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:44:51 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:44:51 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:44:51 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:44:51 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:44:51 --> Total execution time: 0.0863
DEBUG - 2021-08-24 18:45:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:45:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:45:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:45:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:45:06 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:45:06 --> 0.0019 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:45:06 --> 0.0005 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:45:06 --> 0.0009 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:45:06 --> Total execution time: 0.0863
DEBUG - 2021-08-24 18:45:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:45:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:45:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:45:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:45:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:45:21 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:45:21 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:45:21 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:45:21 --> Total execution time: 0.0870
DEBUG - 2021-08-24 18:45:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:45:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:45:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:45:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:45:36 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:45:36 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:45:36 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:45:36 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:45:36 --> Total execution time: 0.0778
DEBUG - 2021-08-24 18:45:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:45:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:45:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:45:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:45:51 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:45:51 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:45:51 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:45:51 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:45:51 --> Total execution time: 0.0689
DEBUG - 2021-08-24 18:46:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:46:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:46:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:46:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:46:06 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:46:06 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:46:06 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:46:06 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:46:06 --> Total execution time: 0.0771
DEBUG - 2021-08-24 18:46:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:46:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:46:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:46:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:46:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:46:21 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:46:21 --> 0.009 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:46:21 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:46:21 --> Total execution time: 0.0974
DEBUG - 2021-08-24 18:46:38 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:46:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:46:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:46:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:46:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:46:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:46:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:46:38 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:46:38 --> Total execution time: 0.0741
DEBUG - 2021-08-24 18:46:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:46:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:46:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:46:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:46:51 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:46:51 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:46:51 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:46:51 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:46:51 --> Total execution time: 0.0836
DEBUG - 2021-08-24 18:47:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:47:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:47:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:47:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:47:06 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:47:06 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:47:06 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:47:06 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:47:06 --> Total execution time: 0.0732
DEBUG - 2021-08-24 18:47:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:47:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:47:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:47:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:47:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:47:21 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:47:21 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:47:21 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:47:21 --> Total execution time: 0.0900
DEBUG - 2021-08-24 18:47:36 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:47:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:47:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:47:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:47:36 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:47:36 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:47:36 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:47:36 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:47:36 --> Total execution time: 0.0867
DEBUG - 2021-08-24 18:47:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:47:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:47:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:47:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:47:51 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:47:51 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:47:51 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:47:51 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:47:51 --> Total execution time: 0.0943
DEBUG - 2021-08-24 18:48:06 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:48:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:48:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:48:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:48:06 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:48:06 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:48:06 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:48:06 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:48:06 --> Total execution time: 0.0758
DEBUG - 2021-08-24 18:48:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:48:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:48:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:48:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:48:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:48:21 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:48:21 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:48:21 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:48:21 --> Total execution time: 0.0632
DEBUG - 2021-08-24 18:48:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:48:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:48:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:48:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:48:36 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:48:36 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:48:36 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:48:36 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:48:36 --> Total execution time: 0.0876
DEBUG - 2021-08-24 18:48:51 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:48:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:48:51 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:48:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:48:51 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:48:51 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:48:51 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:48:51 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:48:51 --> Total execution time: 0.0833
DEBUG - 2021-08-24 18:49:05 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:49:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:49:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:49:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:49:06 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:49:06 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:49:06 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:49:06 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:49:06 --> Total execution time: 0.0632
DEBUG - 2021-08-24 18:49:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:49:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:49:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:49:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:49:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:49:21 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:49:21 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:49:21 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:49:21 --> Total execution time: 0.0837
DEBUG - 2021-08-24 18:49:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:49:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:49:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:49:36 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:49:36 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:49:36 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:49:36 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:49:36 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:49:36 --> Total execution time: 0.0877
DEBUG - 2021-08-24 18:49:50 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:49:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:49:50 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:49:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:49:50 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:49:50 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:49:50 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:49:50 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:49:50 --> Total execution time: 0.0870
DEBUG - 2021-08-24 18:50:06 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:50:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:50:06 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:50:06 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:50:06 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:50:06 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:50:06 --> 0.0004 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:50:06 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:50:06 --> Total execution time: 0.0907
DEBUG - 2021-08-24 18:50:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:50:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:50:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:50:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:50:15 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-24 18:50:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:50:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:50:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:50:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:50:20 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:50:20 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:50:20 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:50:20 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:50:20 --> Total execution time: 0.0913
QUERY - 2021-08-24 18:50:21 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:50:21 --> 1.0927 | SELECT DISTINCT `year` FROM `gpi_data` ORDER BY `year` ASC
QUERY - 2021-08-24 18:50:21 --> 0.0004 | SELECT DISTINCT `campaign_name` FROM `gpi_data` ORDER BY `campaign_name` ASC
QUERY - 2021-08-24 18:50:21 --> 1.3353 | SELECT DISTINCT `circle` FROM `gpi_data` ORDER BY `circle` ASC
QUERY - 2021-08-24 18:50:21 --> 1.2265 | SELECT DISTINCT `franchise_brand` FROM `gpi_data` ORDER BY `franchise_brand` ASC
QUERY - 2021-08-24 18:50:21 --> 1.0503 | SELECT DISTINCT `acting_brand` FROM `gpi_data` ORDER BY `acting_brand` ASC
QUERY - 2021-08-24 18:50:21 --> 0.0003 | SELECT DISTINCT `city` FROM `gpi_data` ORDER BY `city` ASC
QUERY - 2021-08-24 18:50:21 --> 1.2365 | SELECT DISTINCT `state` FROM `gpi_data` ORDER BY `state` ASC
QUERY - 2021-08-24 18:50:21 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:50:21 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-24 18:50:21 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:50:21 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:50:21 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-24 18:50:21 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:50:21 --> Total execution time: 6.0104
DEBUG - 2021-08-24 18:50:37 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:50:38 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:50:38 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:50:38 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:50:38 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:50:38 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:50:38 --> 0.0003 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:50:38 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:50:38 --> Total execution time: 0.0668
DEBUG - 2021-08-24 18:50:52 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:50:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:50:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:50:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:50:53 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:50:53 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:50:53 --> 0.0012 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:50:53 --> 0.0004 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:50:53 --> Total execution time: 0.0918
DEBUG - 2021-08-24 18:51:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:51:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:51:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:51:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:51:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:51:08 --> 0.0004 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:51:08 --> 0.0006 | SELECT * FROM `csv_export` ORDER BY `id` DESC
QUERY - 2021-08-24 18:51:08 --> 0.0003 | SELECT * FROM `csv_export_meta` WHERE `fileid` = '1'
DEBUG - 2021-08-24 18:51:08 --> Total execution time: 0.0788
DEBUG - 2021-08-24 18:51:16 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:51:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:51:16 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:51:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:51:16 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:51:20 --> 1.1745 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-24 18:51:20 --> 1.3649 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-24 18:51:20 --> 1.3023 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-24 18:51:20 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-24 18:51:20 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:51:20 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:51:20 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:51:20 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-24 18:51:20 --> Total execution time: 3.9059
DEBUG - 2021-08-24 18:51:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:51:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:51:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:51:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:51:20 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-24 18:51:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:51:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:51:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:51:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:51:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:51:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-24 18:51:21 --> 1.2228 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-24 18:51:21 --> Total execution time: 1.3120
DEBUG - 2021-08-24 18:51:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:51:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:51:21 --> 0.0003 | select count(id) as total from gpi_data
DEBUG - 2021-08-24 18:51:21 --> Total execution time: 1.2412
DEBUG - 2021-08-24 18:51:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:51:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:51:21 --> 0.0005 | select count(distinct(campaign_name)) as total from gpi_data
DEBUG - 2021-08-24 18:51:21 --> Total execution time: 1.2504
DEBUG - 2021-08-24 18:52:42 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:52:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:52:42 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:52:42 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:52:42 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:52:46 --> 1.0517 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-24 18:52:46 --> 1.2807 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-24 18:52:46 --> 1.4354 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-24 18:52:46 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-24 18:52:46 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:52:46 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:52:46 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:52:46 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-24 18:52:46 --> Total execution time: 3.8331
DEBUG - 2021-08-24 18:52:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:52:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:52:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:52:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:52:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:52:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:52:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:52:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:52:46 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-24 18:52:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:52:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-24 18:52:48 --> 1.4998 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-24 18:52:48 --> Total execution time: 1.5905
DEBUG - 2021-08-24 18:52:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:52:48 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:52:48 --> 0.0004 | select count(id) as total from gpi_data
DEBUG - 2021-08-24 18:52:48 --> Total execution time: 1.5936
DEBUG - 2021-08-24 18:52:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:52:48 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:52:48 --> 0.001 | select count(distinct(campaign_name)) as total from gpi_data
DEBUG - 2021-08-24 18:52:48 --> Total execution time: 1.5968
DEBUG - 2021-08-24 18:55:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:55:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:55:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:55:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:55:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:55:32 --> 1.2312 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-24 18:55:32 --> 1.2435 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-24 18:55:32 --> 1.2709 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-24 18:55:32 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-24 18:55:32 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:55:32 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:55:32 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:55:32 --> 0.0002 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-24 18:55:32 --> Total execution time: 3.8234
DEBUG - 2021-08-24 18:55:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:55:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:55:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:55:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:55:35 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-24 18:55:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:55:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:55:35 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:55:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:55:35 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:55:36 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-24 18:55:37 --> 1.3457 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-24 18:55:37 --> Total execution time: 1.4346
DEBUG - 2021-08-24 18:55:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:55:37 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:55:37 --> 0.0003 | select count(id) as total from gpi_data
DEBUG - 2021-08-24 18:55:37 --> Total execution time: 1.3653
DEBUG - 2021-08-24 18:55:37 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:55:37 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:55:37 --> 0.0004 | select count(distinct(campaign_name)) as total from gpi_data
DEBUG - 2021-08-24 18:55:37 --> Total execution time: 1.3554
DEBUG - 2021-08-24 18:56:07 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:56:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:56:07 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:56:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:56:07 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:56:11 --> 1.0814 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-24 18:56:11 --> 1.2708 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-24 18:56:11 --> 1.2258 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-24 18:56:11 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-24 18:56:11 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:56:11 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:56:11 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:56:11 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-24 18:56:11 --> Total execution time: 3.6441
DEBUG - 2021-08-24 18:56:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:56:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:56:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:56:11 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:56:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:56:11 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:56:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:56:11 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-24 18:56:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:56:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:56:11 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-24 18:56:13 --> 1.2735 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-24 18:56:13 --> Total execution time: 1.3663
DEBUG - 2021-08-24 18:56:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:56:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:56:13 --> 0.0003 | select count(id) as total from gpi_data
DEBUG - 2021-08-24 18:56:13 --> Total execution time: 1.3250
DEBUG - 2021-08-24 18:56:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:56:13 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:56:13 --> 0.0007 | select count(distinct(campaign_name)) as total from gpi_data
DEBUG - 2021-08-24 18:56:13 --> Total execution time: 1.3429
DEBUG - 2021-08-24 18:57:09 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:57:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:57:09 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:57:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:57:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:57:12 --> 1.0315 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-24 18:57:12 --> 1.2056 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-24 18:57:12 --> 1.3214 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-24 18:57:12 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-24 18:57:12 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:57:12 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:57:12 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 18:57:12 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-24 18:57:12 --> Total execution time: 3.6304
DEBUG - 2021-08-24 18:57:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:57:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:57:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:57:12 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 18:57:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:57:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 18:57:12 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:57:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:57:12 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-24 18:57:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 18:57:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-24 18:57:14 --> 1.3113 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-24 18:57:14 --> Total execution time: 1.4207
DEBUG - 2021-08-24 18:57:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:57:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:57:14 --> 0.0015 | select count(id) as total from gpi_data
DEBUG - 2021-08-24 18:57:14 --> Total execution time: 1.3873
DEBUG - 2021-08-24 18:57:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 18:57:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 18:57:14 --> 0.0006 | select count(distinct(campaign_name)) as total from gpi_data
DEBUG - 2021-08-24 18:57:14 --> Total execution time: 1.3990
DEBUG - 2021-08-24 19:01:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 19:01:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 19:01:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 19:01:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 19:01:08 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 19:01:12 --> 1.1469 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-24 19:01:12 --> 1.3049 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-24 19:01:12 --> 1.3492 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-24 19:01:12 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-24 19:01:12 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 19:01:12 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 19:01:12 --> 0.0006 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 19:01:12 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-24 19:01:12 --> Total execution time: 3.8777
DEBUG - 2021-08-24 19:01:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 19:01:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 19:01:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 19:01:13 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 19:01:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 19:01:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 19:01:13 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 19:01:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 19:01:13 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-24 19:01:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 19:01:13 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-24 19:01:14 --> 1.3349 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-24 19:01:14 --> Total execution time: 1.4274
DEBUG - 2021-08-24 19:01:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 19:01:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 19:01:14 --> 0.0003 | select count(id) as total from gpi_data
DEBUG - 2021-08-24 19:01:14 --> Total execution time: 1.3914
DEBUG - 2021-08-24 19:01:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 19:01:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 19:01:14 --> 0.0005 | select count(distinct(campaign_name)) as total from gpi_data
DEBUG - 2021-08-24 19:01:14 --> Total execution time: 1.4066
DEBUG - 2021-08-24 19:05:15 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 19:05:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 19:05:15 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 19:05:15 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 19:05:15 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 19:05:19 --> 1.005 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-24 19:05:19 --> 1.214 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-24 19:05:19 --> 1.2483 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-24 19:05:19 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-24 19:05:19 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 19:05:19 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 19:05:19 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 19:05:19 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-24 19:05:19 --> Total execution time: 3.5438
DEBUG - 2021-08-24 19:05:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 19:05:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 19:05:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 19:05:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 19:05:20 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 19:05:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 19:05:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 19:05:20 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 19:05:20 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-24 19:05:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 19:05:20 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-24 19:05:21 --> 1.3489 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-24 19:05:21 --> Total execution time: 1.4693
DEBUG - 2021-08-24 19:05:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 19:05:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 19:05:21 --> 0.0003 | select count(id) as total from gpi_data
DEBUG - 2021-08-24 19:05:21 --> Total execution time: 1.4383
DEBUG - 2021-08-24 19:05:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 19:05:21 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 19:05:21 --> 0.0006 | select count(distinct(campaign_name)) as total from gpi_data
DEBUG - 2021-08-24 19:05:21 --> Total execution time: 1.4530
DEBUG - 2021-08-24 19:08:41 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 19:08:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 19:08:41 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 19:08:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 19:08:41 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 19:08:45 --> 1.1038 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-24 19:08:45 --> 1.2848 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-24 19:08:45 --> 1.3313 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-24 19:08:45 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-24 19:08:45 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 19:08:45 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 19:08:45 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 19:08:45 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-24 19:08:45 --> Total execution time: 3.7979
DEBUG - 2021-08-24 19:08:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 19:08:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 19:08:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 19:08:46 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 19:08:46 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-24 19:08:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 19:08:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 19:08:46 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 19:08:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 19:08:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 19:08:46 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-24 19:08:48 --> 1.7112 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-24 19:08:48 --> Total execution time: 1.7958
DEBUG - 2021-08-24 19:08:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 19:08:48 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 19:08:48 --> 0.0004 | select count(id) as total from gpi_data
DEBUG - 2021-08-24 19:08:48 --> Total execution time: 1.7335
DEBUG - 2021-08-24 19:08:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 19:08:48 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 19:08:48 --> 0.0007 | select count(distinct(campaign_name)) as total from gpi_data
DEBUG - 2021-08-24 19:08:48 --> Total execution time: 1.7172
DEBUG - 2021-08-24 19:09:14 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 19:09:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 19:09:14 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 19:09:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 19:09:14 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 19:09:18 --> 1.0343 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-24 19:09:18 --> 1.1644 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-24 19:09:18 --> 1.2046 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-24 19:09:18 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-24 19:09:18 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 19:09:18 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 19:09:18 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 19:09:18 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-24 19:09:18 --> Total execution time: 3.4645
DEBUG - 2021-08-24 19:09:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 19:09:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 19:09:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 19:09:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 19:09:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 19:09:18 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-24 19:09:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 19:09:18 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 19:09:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 19:09:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 19:09:18 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-24 19:09:19 --> 1.3528 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-24 19:09:19 --> Total execution time: 1.4395
DEBUG - 2021-08-24 19:09:19 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 19:09:19 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 19:09:19 --> 0.0003 | select count(id) as total from gpi_data
DEBUG - 2021-08-24 19:09:19 --> Total execution time: 1.3946
DEBUG - 2021-08-24 19:09:19 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 19:09:19 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 19:09:19 --> 0.0006 | select count(distinct(campaign_name)) as total from gpi_data
DEBUG - 2021-08-24 19:09:19 --> Total execution time: 1.3878
DEBUG - 2021-08-24 19:14:28 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 19:14:28 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 19:14:28 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 19:14:28 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 19:14:28 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 19:14:32 --> 1.0386 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year` DESC
QUERY - 2021-08-24 19:14:32 --> 1.2072 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-24 19:14:32 --> 1.2487 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-24 19:14:32 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-24 19:14:32 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 19:14:32 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 19:14:32 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 19:14:32 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-24 19:14:32 --> Total execution time: 3.5841
DEBUG - 2021-08-24 19:14:32 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 19:14:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 19:14:32 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 19:14:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 19:14:32 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 19:14:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 19:14:32 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 19:14:32 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 19:14:32 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-24 19:14:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 19:14:32 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-24 19:14:34 --> 1.2615 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-24 19:14:34 --> Total execution time: 1.3714
DEBUG - 2021-08-24 19:14:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 19:14:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 19:14:34 --> 0.0004 | select count(id) as total from gpi_data
DEBUG - 2021-08-24 19:14:34 --> Total execution time: 1.3307
DEBUG - 2021-08-24 19:14:34 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 19:14:34 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 19:14:34 --> 0.0005 | select count(distinct(campaign_name)) as total from gpi_data
DEBUG - 2021-08-24 19:14:34 --> Total execution time: 1.3422
DEBUG - 2021-08-24 19:20:48 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 19:20:48 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 19:20:48 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 19:20:48 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 19:20:48 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 19:20:52 --> 1.0277 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year`
QUERY - 2021-08-24 19:20:52 --> 1.2327 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-24 19:20:52 --> 1.2962 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-24 19:20:52 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-24 19:20:52 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 19:20:52 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 19:20:52 --> 0.0002 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 19:20:52 --> 0.0002 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-24 19:20:52 --> Total execution time: 3.6895
DEBUG - 2021-08-24 19:20:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 19:20:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 19:20:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 19:20:53 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 19:20:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 19:20:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 19:20:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 19:20:53 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 19:20:53 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-24 19:20:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 19:20:53 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-24 19:20:54 --> 1.2062 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-24 19:20:54 --> Total execution time: 1.3021
DEBUG - 2021-08-24 19:20:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 19:20:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 19:20:54 --> 0.0004 | select count(id) as total from gpi_data
DEBUG - 2021-08-24 19:20:54 --> Total execution time: 1.2694
DEBUG - 2021-08-24 19:20:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 19:20:54 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 19:20:54 --> 0.0006 | select count(distinct(campaign_name)) as total from gpi_data
DEBUG - 2021-08-24 19:20:54 --> Total execution time: 1.2833
DEBUG - 2021-08-24 19:22:57 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 19:22:57 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 19:22:57 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 19:22:57 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 19:22:57 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 19:23:01 --> 0.9949 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `Year`
QUERY - 2021-08-24 19:23:01 --> 1.1872 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-24 19:23:01 --> 1.212 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-24 19:23:01 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-24 19:23:01 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 19:23:01 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 19:23:01 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 19:23:01 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-24 19:23:01 --> Total execution time: 3.4647
DEBUG - 2021-08-24 19:23:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 19:23:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 19:23:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 19:23:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 19:23:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 19:23:01 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 19:23:01 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 19:23:01 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-24 19:23:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 19:23:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 19:23:01 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-24 19:23:03 --> 1.3233 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-24 19:23:03 --> Total execution time: 1.4130
DEBUG - 2021-08-24 19:23:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 19:23:03 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 19:23:03 --> 0.0004 | select count(id) as total from gpi_data
DEBUG - 2021-08-24 19:23:03 --> Total execution time: 1.3765
DEBUG - 2021-08-24 19:23:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 19:23:03 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 19:23:03 --> 0.0005 | select count(distinct(campaign_name)) as total from gpi_data
DEBUG - 2021-08-24 19:23:03 --> Total execution time: 1.3852
DEBUG - 2021-08-24 19:23:04 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 19:23:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 19:23:04 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 19:23:04 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 19:23:04 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 19:23:08 --> 1.0464 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `Year`
QUERY - 2021-08-24 19:23:08 --> 1.4456 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name`
QUERY - 2021-08-24 19:23:08 --> 1.2758 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle`
QUERY - 2021-08-24 19:23:08 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-24 19:23:08 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 19:23:08 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 19:23:08 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 19:23:08 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-24 19:23:08 --> Total execution time: 3.8371
DEBUG - 2021-08-24 19:23:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 19:23:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 19:23:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 19:23:08 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 19:23:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 19:23:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 19:23:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 19:23:08 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 19:23:08 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-24 19:23:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 19:23:08 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-24 19:23:09 --> 1.4026 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-24 19:23:09 --> Total execution time: 1.4933
DEBUG - 2021-08-24 19:23:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 19:23:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 19:23:09 --> 0.0003 | select count(id) as total from gpi_data
DEBUG - 2021-08-24 19:23:09 --> Total execution time: 1.4624
DEBUG - 2021-08-24 19:23:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 19:23:09 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 19:23:09 --> 0.0006 | select count(distinct(campaign_name)) as total from gpi_data
DEBUG - 2021-08-24 19:23:09 --> Total execution time: 1.4764
DEBUG - 2021-08-24 19:24:19 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 19:24:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 19:24:19 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 19:24:19 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 19:24:19 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 19:24:22 --> 1.0783 | SELECT `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `year`
QUERY - 2021-08-24 19:24:22 --> 1.1848 | SELECT DISTINCT `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name` ORDER BY `campaign_name`
QUERY - 2021-08-24 19:24:22 --> 1.1918 | SELECT DISTINCT `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle` ORDER BY `circle`
QUERY - 2021-08-24 19:24:22 --> 0.0005 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-24 19:24:22 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 19:24:22 --> 0.0005 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 19:24:22 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 19:24:22 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-24 19:24:22 --> Total execution time: 3.5319
DEBUG - 2021-08-24 19:24:22 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 19:24:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 19:24:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 19:24:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 19:24:23 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 19:24:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 19:24:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 19:24:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 19:24:23 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-24 19:24:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 19:24:23 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-24 19:24:24 --> 1.2203 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-24 19:24:24 --> Total execution time: 1.3302
DEBUG - 2021-08-24 19:24:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 19:24:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 19:24:24 --> 0.0007 | select count(id) as total from gpi_data
DEBUG - 2021-08-24 19:24:24 --> Total execution time: 1.3020
DEBUG - 2021-08-24 19:24:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 19:24:24 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 19:24:24 --> 0.0004 | select count(distinct(campaign_name)) as total from gpi_data
DEBUG - 2021-08-24 19:24:24 --> Total execution time: 1.3079
DEBUG - 2021-08-24 19:25:17 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 19:25:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 19:25:17 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 19:25:17 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 19:25:17 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 19:25:21 --> 1.0052 | SELECT `id`, `year`, COUNT(id) as total FROM `gpi_data` GROUP BY `year` ORDER BY `id`
QUERY - 2021-08-24 19:25:21 --> 1.1976 | SELECT DISTINCT `id`, `campaign_name`, COUNT(id) AS total FROM `gpi_data` GROUP BY `campaign_name` ORDER BY `id`
QUERY - 2021-08-24 19:25:21 --> 1.2537 | SELECT DISTINCT `id`, `circle`, COUNT(id) AS total FROM `gpi_data` GROUP BY `circle` ORDER BY `id`
QUERY - 2021-08-24 19:25:21 --> 0.0004 | SELECT * FROM `settings` WHERE `id` = 1
QUERY - 2021-08-24 19:25:21 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 19:25:21 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 19:25:21 --> 0.0003 | SELECT role_id, roll_name FROM roles WHERE role_id =1
QUERY - 2021-08-24 19:25:21 --> 0.0003 | SELECT * FROM `settings` WHERE `id` = 1
DEBUG - 2021-08-24 19:25:21 --> Total execution time: 3.5330
DEBUG - 2021-08-24 19:25:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 19:25:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 19:25:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 19:25:21 --> UTF-8 Support Enabled
DEBUG - 2021-08-24 19:25:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 19:25:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2021-08-24 19:25:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 19:25:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 19:25:21 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2021-08-24 19:25:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
DEBUG - 2021-08-24 19:25:21 --> Session: "sess_save_path" is empty; using "session.save_path" value from php.ini.
QUERY - 2021-08-24 19:25:22 --> 1.308 | SELECT COUNT(*) AS `numrows` FROM ( SELECT DISTINCT `circle` FROM `gpi_data` ) CI_count_all_results
DEBUG - 2021-08-24 19:25:22 --> Total execution time: 1.4153
DEBUG - 2021-08-24 19:25:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 19:25:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 19:25:22 --> 0.0003 | select count(id) as total from gpi_data
DEBUG - 2021-08-24 19:25:22 --> Total execution time: 1.3756
DEBUG - 2021-08-24 19:25:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2021-08-24 19:25:22 --> Encryption: Auto-configured driver 'openssl'.
QUERY - 2021-08-24 19:25:22 --> 0.0007 | select count(distinct(campaign_name)) as total from gpi_data
DEBUG - 2021-08-24 19:25:22 --> Total execution time: 1.3901
