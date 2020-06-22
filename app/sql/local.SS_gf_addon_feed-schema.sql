/*!40101 SET NAMES binary*/;
/*!40014 SET FOREIGN_KEY_CHECKS=0*/;

CREATE TABLE `SS_gf_addon_feed` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `form_id` mediumint(8) unsigned NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `feed_order` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `meta` longtext COLLATE utf8mb4_unicode_520_ci,
  `addon_slug` varchar(50) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `event_type` varchar(20) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `addon_form` (`addon_slug`,`form_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
