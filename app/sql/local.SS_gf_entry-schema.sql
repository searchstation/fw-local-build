/*!40101 SET NAMES binary*/;
/*!40014 SET FOREIGN_KEY_CHECKS=0*/;

CREATE TABLE `SS_gf_entry` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `form_id` mediumint(8) unsigned NOT NULL,
  `post_id` bigint(20) unsigned DEFAULT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime DEFAULT NULL,
  `is_starred` tinyint(1) NOT NULL DEFAULT '0',
  `is_read` tinyint(1) NOT NULL DEFAULT '0',
  `ip` varchar(39) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `source_url` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_agent` varchar(250) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `currency` varchar(5) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `payment_status` varchar(15) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `payment_date` datetime DEFAULT NULL,
  `payment_amount` decimal(19,2) DEFAULT NULL,
  `payment_method` varchar(30) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `transaction_id` varchar(50) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `is_fulfilled` tinyint(1) DEFAULT NULL,
  `created_by` bigint(20) unsigned DEFAULT NULL,
  `transaction_type` tinyint(1) DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'active',
  PRIMARY KEY (`id`),
  KEY `form_id` (`form_id`),
  KEY `form_id_status` (`form_id`,`status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
