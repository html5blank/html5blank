-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 15, 2018 at 10:13 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `smakk_test_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `wp_commentmeta`
--

CREATE TABLE `wp_commentmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wp_comments`
--

CREATE TABLE `wp_comments` (
  `comment_ID` bigint(20) UNSIGNED NOT NULL,
  `comment_post_ID` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `comment_author` tinytext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `comment_author_email` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_author_url` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_author_IP` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_content` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `comment_karma` int(11) NOT NULL DEFAULT '0',
  `comment_approved` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '1',
  `comment_agent` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_type` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_comments`
--

INSERT INTO `wp_comments` (`comment_ID`, `comment_post_ID`, `comment_author`, `comment_author_email`, `comment_author_url`, `comment_author_IP`, `comment_date`, `comment_date_gmt`, `comment_content`, `comment_karma`, `comment_approved`, `comment_agent`, `comment_type`, `comment_parent`, `user_id`) VALUES
(1, 1, 'A WordPress Commenter', 'wapuu@wordpress.example', 'https://wpengine.com/', '', '2017-11-16 14:47:09', '2017-11-16 14:47:09', 'Hi, this is a comment.\nTo get started with moderating, editing, and deleting comments, please visit the Comments screen in the dashboard.\nCommenter avatars come from <a href=\"https://gravatar.com\">Gravatar</a>.', 0, '1', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_links`
--

CREATE TABLE `wp_links` (
  `link_id` bigint(20) UNSIGNED NOT NULL,
  `link_url` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_image` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_target` varchar(25) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_description` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_visible` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'Y',
  `link_owner` bigint(20) UNSIGNED NOT NULL DEFAULT '1',
  `link_rating` int(11) NOT NULL DEFAULT '0',
  `link_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `link_rel` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `link_notes` mediumtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `link_rss` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wp_options`
--

CREATE TABLE `wp_options` (
  `option_id` bigint(20) UNSIGNED NOT NULL,
  `option_name` varchar(191) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `option_value` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `autoload` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_options`
--

INSERT INTO `wp_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(1, 'siteurl', 'http://localhost:8888/', 'yes'),
(2, 'home', 'http://localhost:8888/', 'yes'),
(3, 'blogname', 'Mary Ellis Blog', 'yes'),
(4, 'blogdescription', 'Your SUPER-powered WP Engine Blog', 'yes'),
(5, 'users_can_register', '0', 'yes'),
(6, 'admin_email', 'mary@smkkstudios.com', 'yes'),
(7, 'start_of_week', '1', 'yes'),
(8, 'use_balanceTags', '0', 'yes'),
(9, 'use_smilies', '1', 'yes'),
(10, 'require_name_email', '1', 'yes'),
(11, 'comments_notify', '1', 'yes'),
(12, 'posts_per_rss', '10', 'yes'),
(13, 'rss_use_excerpt', '0', 'yes'),
(14, 'mailserver_url', 'mail.example.com', 'yes'),
(15, 'mailserver_login', 'login@example.com', 'yes'),
(16, 'mailserver_pass', 'password', 'yes'),
(17, 'mailserver_port', '110', 'yes'),
(18, 'default_category', '1', 'yes'),
(19, 'default_comment_status', 'open', 'yes'),
(20, 'default_ping_status', 'open', 'yes'),
(21, 'default_pingback_flag', '0', 'yes'),
(22, 'posts_per_page', '10', 'yes'),
(23, 'date_format', 'F j, Y', 'yes'),
(24, 'time_format', 'g:i a', 'yes'),
(25, 'links_updated_date_format', 'F j, Y g:i a', 'yes'),
(26, 'comment_moderation', '0', 'yes'),
(27, 'moderation_notify', '1', 'yes'),
(28, 'permalink_structure', '/%postname%/', 'yes'),
(29, 'rewrite_rules', 'a:111:{s:8:\"smakk/?$\";s:25:\"index.php?post_type=smakk\";s:38:\"smakk/feed/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?post_type=smakk&feed=$matches[1]\";s:33:\"smakk/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?post_type=smakk&feed=$matches[1]\";s:25:\"smakk/page/([0-9]{1,})/?$\";s:43:\"index.php?post_type=smakk&paged=$matches[1]\";s:11:\"^wp-json/?$\";s:22:\"index.php?rest_route=/\";s:14:\"^wp-json/(.*)?\";s:33:\"index.php?rest_route=/$matches[1]\";s:21:\"^index.php/wp-json/?$\";s:22:\"index.php?rest_route=/\";s:24:\"^index.php/wp-json/(.*)?\";s:33:\"index.php?rest_route=/$matches[1]\";s:47:\"category/(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:52:\"index.php?category_name=$matches[1]&feed=$matches[2]\";s:42:\"category/(.+?)/(feed|rdf|rss|rss2|atom)/?$\";s:52:\"index.php?category_name=$matches[1]&feed=$matches[2]\";s:23:\"category/(.+?)/embed/?$\";s:46:\"index.php?category_name=$matches[1]&embed=true\";s:35:\"category/(.+?)/page/?([0-9]{1,})/?$\";s:53:\"index.php?category_name=$matches[1]&paged=$matches[2]\";s:17:\"category/(.+?)/?$\";s:35:\"index.php?category_name=$matches[1]\";s:44:\"tag/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?tag=$matches[1]&feed=$matches[2]\";s:39:\"tag/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?tag=$matches[1]&feed=$matches[2]\";s:20:\"tag/([^/]+)/embed/?$\";s:36:\"index.php?tag=$matches[1]&embed=true\";s:32:\"tag/([^/]+)/page/?([0-9]{1,})/?$\";s:43:\"index.php?tag=$matches[1]&paged=$matches[2]\";s:14:\"tag/([^/]+)/?$\";s:25:\"index.php?tag=$matches[1]\";s:45:\"type/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?post_format=$matches[1]&feed=$matches[2]\";s:40:\"type/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?post_format=$matches[1]&feed=$matches[2]\";s:21:\"type/([^/]+)/embed/?$\";s:44:\"index.php?post_format=$matches[1]&embed=true\";s:33:\"type/([^/]+)/page/?([0-9]{1,})/?$\";s:51:\"index.php?post_format=$matches[1]&paged=$matches[2]\";s:15:\"type/([^/]+)/?$\";s:33:\"index.php?post_format=$matches[1]\";s:33:\"smakk/[^/]+/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:43:\"smakk/[^/]+/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:63:\"smakk/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:58:\"smakk/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:58:\"smakk/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:39:\"smakk/[^/]+/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:22:\"smakk/([^/]+)/embed/?$\";s:38:\"index.php?smakk=$matches[1]&embed=true\";s:26:\"smakk/([^/]+)/trackback/?$\";s:32:\"index.php?smakk=$matches[1]&tb=1\";s:46:\"smakk/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:44:\"index.php?smakk=$matches[1]&feed=$matches[2]\";s:41:\"smakk/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:44:\"index.php?smakk=$matches[1]&feed=$matches[2]\";s:34:\"smakk/([^/]+)/page/?([0-9]{1,})/?$\";s:45:\"index.php?smakk=$matches[1]&paged=$matches[2]\";s:41:\"smakk/([^/]+)/comment-page-([0-9]{1,})/?$\";s:45:\"index.php?smakk=$matches[1]&cpage=$matches[2]\";s:30:\"smakk/([^/]+)(?:/([0-9]+))?/?$\";s:44:\"index.php?smakk=$matches[1]&page=$matches[2]\";s:22:\"smakk/[^/]+/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:32:\"smakk/[^/]+/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:52:\"smakk/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:47:\"smakk/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:47:\"smakk/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:28:\"smakk/[^/]+/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:12:\"robots\\.txt$\";s:18:\"index.php?robots=1\";s:48:\".*wp-(atom|rdf|rss|rss2|feed|commentsrss2)\\.php$\";s:18:\"index.php?feed=old\";s:20:\".*wp-app\\.php(/.*)?$\";s:19:\"index.php?error=403\";s:18:\".*wp-register.php$\";s:23:\"index.php?register=true\";s:32:\"feed/(feed|rdf|rss|rss2|atom)/?$\";s:27:\"index.php?&feed=$matches[1]\";s:27:\"(feed|rdf|rss|rss2|atom)/?$\";s:27:\"index.php?&feed=$matches[1]\";s:8:\"embed/?$\";s:21:\"index.php?&embed=true\";s:20:\"page/?([0-9]{1,})/?$\";s:28:\"index.php?&paged=$matches[1]\";s:27:\"comment-page-([0-9]{1,})/?$\";s:38:\"index.php?&page_id=8&cpage=$matches[1]\";s:41:\"comments/feed/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?&feed=$matches[1]&withcomments=1\";s:36:\"comments/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?&feed=$matches[1]&withcomments=1\";s:17:\"comments/embed/?$\";s:21:\"index.php?&embed=true\";s:44:\"search/(.+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:40:\"index.php?s=$matches[1]&feed=$matches[2]\";s:39:\"search/(.+)/(feed|rdf|rss|rss2|atom)/?$\";s:40:\"index.php?s=$matches[1]&feed=$matches[2]\";s:20:\"search/(.+)/embed/?$\";s:34:\"index.php?s=$matches[1]&embed=true\";s:32:\"search/(.+)/page/?([0-9]{1,})/?$\";s:41:\"index.php?s=$matches[1]&paged=$matches[2]\";s:14:\"search/(.+)/?$\";s:23:\"index.php?s=$matches[1]\";s:47:\"author/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?author_name=$matches[1]&feed=$matches[2]\";s:42:\"author/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?author_name=$matches[1]&feed=$matches[2]\";s:23:\"author/([^/]+)/embed/?$\";s:44:\"index.php?author_name=$matches[1]&embed=true\";s:35:\"author/([^/]+)/page/?([0-9]{1,})/?$\";s:51:\"index.php?author_name=$matches[1]&paged=$matches[2]\";s:17:\"author/([^/]+)/?$\";s:33:\"index.php?author_name=$matches[1]\";s:69:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:80:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]\";s:64:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$\";s:80:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]\";s:45:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/embed/?$\";s:74:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&embed=true\";s:57:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/page/?([0-9]{1,})/?$\";s:81:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&paged=$matches[4]\";s:39:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/?$\";s:63:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]\";s:56:\"([0-9]{4})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:64:\"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]\";s:51:\"([0-9]{4})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$\";s:64:\"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]\";s:32:\"([0-9]{4})/([0-9]{1,2})/embed/?$\";s:58:\"index.php?year=$matches[1]&monthnum=$matches[2]&embed=true\";s:44:\"([0-9]{4})/([0-9]{1,2})/page/?([0-9]{1,})/?$\";s:65:\"index.php?year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]\";s:26:\"([0-9]{4})/([0-9]{1,2})/?$\";s:47:\"index.php?year=$matches[1]&monthnum=$matches[2]\";s:43:\"([0-9]{4})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?year=$matches[1]&feed=$matches[2]\";s:38:\"([0-9]{4})/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?year=$matches[1]&feed=$matches[2]\";s:19:\"([0-9]{4})/embed/?$\";s:37:\"index.php?year=$matches[1]&embed=true\";s:31:\"([0-9]{4})/page/?([0-9]{1,})/?$\";s:44:\"index.php?year=$matches[1]&paged=$matches[2]\";s:13:\"([0-9]{4})/?$\";s:26:\"index.php?year=$matches[1]\";s:27:\".?.+?/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:37:\".?.+?/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:57:\".?.+?/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\".?.+?/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\".?.+?/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:33:\".?.+?/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:16:\"(.?.+?)/embed/?$\";s:41:\"index.php?pagename=$matches[1]&embed=true\";s:20:\"(.?.+?)/trackback/?$\";s:35:\"index.php?pagename=$matches[1]&tb=1\";s:40:\"(.?.+?)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:47:\"index.php?pagename=$matches[1]&feed=$matches[2]\";s:35:\"(.?.+?)/(feed|rdf|rss|rss2|atom)/?$\";s:47:\"index.php?pagename=$matches[1]&feed=$matches[2]\";s:28:\"(.?.+?)/page/?([0-9]{1,})/?$\";s:48:\"index.php?pagename=$matches[1]&paged=$matches[2]\";s:35:\"(.?.+?)/comment-page-([0-9]{1,})/?$\";s:48:\"index.php?pagename=$matches[1]&cpage=$matches[2]\";s:24:\"(.?.+?)(?:/([0-9]+))?/?$\";s:47:\"index.php?pagename=$matches[1]&page=$matches[2]\";s:27:\"[^/]+/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:37:\"[^/]+/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:57:\"[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\"[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\"[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:33:\"[^/]+/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:16:\"([^/]+)/embed/?$\";s:37:\"index.php?name=$matches[1]&embed=true\";s:20:\"([^/]+)/trackback/?$\";s:31:\"index.php?name=$matches[1]&tb=1\";s:40:\"([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?name=$matches[1]&feed=$matches[2]\";s:35:\"([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?name=$matches[1]&feed=$matches[2]\";s:28:\"([^/]+)/page/?([0-9]{1,})/?$\";s:44:\"index.php?name=$matches[1]&paged=$matches[2]\";s:35:\"([^/]+)/comment-page-([0-9]{1,})/?$\";s:44:\"index.php?name=$matches[1]&cpage=$matches[2]\";s:24:\"([^/]+)(?:/([0-9]+))?/?$\";s:43:\"index.php?name=$matches[1]&page=$matches[2]\";s:16:\"[^/]+/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:26:\"[^/]+/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:46:\"[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:41:\"[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:41:\"[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:22:\"[^/]+/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";}', 'yes'),
(30, 'hack_file', '0', 'yes'),
(31, 'blog_charset', 'UTF-8', 'yes'),
(32, 'moderation_keys', '', 'no'),
(33, 'active_plugins', 'a:1:{i:0;s:34:\"advanced-custom-fields-pro/acf.php\";}', 'yes'),
(34, 'category_base', '', 'yes'),
(35, 'ping_sites', 'http://rpc.pingomatic.com/', 'yes'),
(36, 'comment_max_links', '2', 'yes'),
(37, 'gmt_offset', '0', 'yes'),
(38, 'default_email_category', '1', 'yes'),
(39, 'recently_edited', '', 'no'),
(40, 'template', 'html5blank/src', 'yes'),
(41, 'stylesheet', 'html5blank/src', 'yes'),
(42, 'comment_whitelist', '1', 'yes'),
(43, 'blacklist_keys', '', 'no'),
(44, 'comment_registration', '0', 'yes'),
(45, 'html_type', 'text/html', 'yes'),
(46, 'use_trackback', '0', 'yes'),
(47, 'default_role', 'subscriber', 'yes'),
(48, 'db_version', '38590', 'yes'),
(49, 'uploads_use_yearmonth_folders', '1', 'yes'),
(50, 'upload_path', '', 'yes'),
(51, 'blog_public', '0', 'yes'),
(52, 'default_link_category', '2', 'yes'),
(53, 'show_on_front', 'page', 'yes'),
(54, 'tag_base', '', 'yes'),
(55, 'show_avatars', '1', 'yes'),
(56, 'avatar_rating', 'G', 'yes'),
(57, 'upload_url_path', '', 'yes'),
(58, 'thumbnail_size_w', '150', 'yes'),
(59, 'thumbnail_size_h', '150', 'yes'),
(60, 'thumbnail_crop', '1', 'yes'),
(61, 'medium_size_w', '300', 'yes'),
(62, 'medium_size_h', '300', 'yes'),
(63, 'avatar_default', 'mystery', 'yes'),
(64, 'large_size_w', '1024', 'yes'),
(65, 'large_size_h', '1024', 'yes'),
(66, 'image_default_link_type', 'none', 'yes'),
(67, 'image_default_size', '', 'yes'),
(68, 'image_default_align', '', 'yes'),
(69, 'close_comments_for_old_posts', '0', 'yes'),
(70, 'close_comments_days_old', '14', 'yes'),
(71, 'thread_comments', '1', 'yes'),
(72, 'thread_comments_depth', '5', 'yes'),
(73, 'page_comments', '0', 'yes'),
(74, 'comments_per_page', '50', 'yes'),
(75, 'default_comments_page', 'newest', 'yes'),
(76, 'comment_order', 'asc', 'yes'),
(77, 'sticky_posts', 'a:0:{}', 'yes'),
(78, 'widget_categories', 'a:2:{i:2;a:4:{s:5:\"title\";s:0:\"\";s:5:\"count\";i:0;s:12:\"hierarchical\";i:0;s:8:\"dropdown\";i:0;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(79, 'widget_text', 'a:2:{i:1;a:0:{}s:12:\"_multiwidget\";i:1;}', 'yes'),
(80, 'widget_rss', 'a:2:{i:1;a:0:{}s:12:\"_multiwidget\";i:1;}', 'yes'),
(81, 'uninstall_plugins', 'a:0:{}', 'no'),
(82, 'timezone_string', '', 'yes'),
(83, 'page_for_posts', '0', 'yes'),
(84, 'page_on_front', '8', 'yes'),
(85, 'default_post_format', '0', 'yes'),
(86, 'link_manager_enabled', '0', 'yes'),
(87, 'finished_splitting_shared_terms', '1', 'yes'),
(88, 'site_icon', '0', 'yes'),
(89, 'medium_large_size_w', '768', 'yes'),
(90, 'medium_large_size_h', '0', 'yes'),
(91, 'initial_db_version', '38590', 'yes'),
(92, 'wp_user_roles', 'a:5:{s:13:\"administrator\";a:2:{s:4:\"name\";s:13:\"Administrator\";s:12:\"capabilities\";a:61:{s:13:\"switch_themes\";b:1;s:11:\"edit_themes\";b:1;s:16:\"activate_plugins\";b:1;s:12:\"edit_plugins\";b:1;s:10:\"edit_users\";b:1;s:10:\"edit_files\";b:1;s:14:\"manage_options\";b:1;s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:6:\"import\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:8:\"level_10\";b:1;s:7:\"level_9\";b:1;s:7:\"level_8\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;s:12:\"delete_users\";b:1;s:12:\"create_users\";b:1;s:17:\"unfiltered_upload\";b:1;s:14:\"edit_dashboard\";b:1;s:14:\"update_plugins\";b:1;s:14:\"delete_plugins\";b:1;s:15:\"install_plugins\";b:1;s:13:\"update_themes\";b:1;s:14:\"install_themes\";b:1;s:11:\"update_core\";b:1;s:10:\"list_users\";b:1;s:12:\"remove_users\";b:1;s:13:\"promote_users\";b:1;s:18:\"edit_theme_options\";b:1;s:13:\"delete_themes\";b:1;s:6:\"export\";b:1;}}s:6:\"editor\";a:2:{s:4:\"name\";s:6:\"Editor\";s:12:\"capabilities\";a:34:{s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;}}s:6:\"author\";a:2:{s:4:\"name\";s:6:\"Author\";s:12:\"capabilities\";a:10:{s:12:\"upload_files\";b:1;s:10:\"edit_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;s:22:\"delete_published_posts\";b:1;}}s:11:\"contributor\";a:2:{s:4:\"name\";s:11:\"Contributor\";s:12:\"capabilities\";a:5:{s:10:\"edit_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;}}s:10:\"subscriber\";a:2:{s:4:\"name\";s:10:\"Subscriber\";s:12:\"capabilities\";a:2:{s:4:\"read\";b:1;s:7:\"level_0\";b:1;}}}', 'yes'),
(93, 'fresh_site', '0', 'yes'),
(94, 'widget_search', 'a:2:{i:2;a:1:{s:5:\"title\";s:0:\"\";}s:12:\"_multiwidget\";i:1;}', 'yes'),
(95, 'widget_recent-posts', 'a:2:{i:2;a:2:{s:5:\"title\";s:0:\"\";s:6:\"number\";i:5;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(96, 'widget_recent-comments', 'a:2:{i:2;a:2:{s:5:\"title\";s:0:\"\";s:6:\"number\";i:5;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(97, 'widget_archives', 'a:2:{i:2;a:3:{s:5:\"title\";s:0:\"\";s:5:\"count\";i:0;s:8:\"dropdown\";i:0;}s:12:\"_multiwidget\";i:1;}', 'yes'),
(98, 'widget_meta', 'a:2:{i:2;a:1:{s:5:\"title\";s:0:\"\";}s:12:\"_multiwidget\";i:1;}', 'yes'),
(99, 'sidebars_widgets', 'a:2:{s:19:\"wp_inactive_widgets\";a:6:{i:0;s:8:\"search-2\";i:1;s:14:\"recent-posts-2\";i:2;s:17:\"recent-comments-2\";i:3;s:10:\"archives-2\";i:4;s:12:\"categories-2\";i:5;s:6:\"meta-2\";}s:13:\"array_version\";i:3;}', 'yes'),
(100, 'widget_pages', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(101, 'widget_calendar', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(102, 'widget_media_audio', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(103, 'widget_media_image', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(104, 'widget_media_gallery', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(105, 'widget_media_video', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(106, 'widget_tag_cloud', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(107, 'widget_nav_menu', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(108, 'widget_custom_html', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(109, 'cron', 'a:4:{i:1516070830;a:3:{s:16:\"wp_version_check\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:17:\"wp_update_plugins\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}s:16:\"wp_update_themes\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}}i:1516115631;a:2:{s:19:\"wp_scheduled_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}s:25:\"delete_expired_transients\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1516116157;a:1:{s:30:\"wp_scheduled_auto_draft_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}s:7:\"version\";i:2;}', 'yes'),
(111, 'widget_wpe_powered_by_widget', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'yes'),
(113, 'theme_mods_twentyseventeen', 'a:3:{s:18:\"custom_css_post_id\";i:-1;s:16:\"sidebars_widgets\";a:2:{s:4:\"time\";i:1515603424;s:4:\"data\";a:4:{s:19:\"wp_inactive_widgets\";a:0:{}s:9:\"sidebar-1\";a:6:{i:0;s:8:\"search-2\";i:1;s:14:\"recent-posts-2\";i:2;s:17:\"recent-comments-2\";i:3;s:10:\"archives-2\";i:4;s:12:\"categories-2\";i:5;s:6:\"meta-2\";}s:9:\"sidebar-2\";a:0:{}s:9:\"sidebar-3\";a:0:{}}}s:18:\"nav_menu_locations\";a:0:{}}', 'yes'),
(114, 'wpe_notices', 'a:1:{s:4:\"read\";s:0:\"\";}', 'yes'),
(115, 'wpe_notices_ttl', '1515627987', 'yes'),
(116, 'can_compress_scripts', '0', 'no'),
(117, 'recently_activated', 'a:0:{}', 'yes'),
(118, 'acf_version', '5.6.7', 'yes'),
(119, 'category_children', 'a:0:{}', 'yes'),
(120, 'current_theme', 'HTML5 Blank', 'yes'),
(121, 'theme_mods_html5blank/src', 'a:4:{i:0;b:0;s:18:\"nav_menu_locations\";a:0:{}s:18:\"custom_css_post_id\";i:-1;s:16:\"sidebars_widgets\";a:2:{s:4:\"time\";i:1515986652;s:4:\"data\";a:1:{s:19:\"wp_inactive_widgets\";a:6:{i:0;s:8:\"search-2\";i:1;s:14:\"recent-posts-2\";i:2;s:17:\"recent-comments-2\";i:3;s:10:\"archives-2\";i:4;s:12:\"categories-2\";i:5;s:6:\"meta-2\";}}}}', 'yes'),
(122, 'theme_switched', '', 'yes'),
(128, 'theme_mods_dist', 'a:3:{i:0;b:0;s:18:\"nav_menu_locations\";a:0:{}s:16:\"sidebars_widgets\";a:2:{s:4:\"time\";i:1515624609;s:4:\"data\";a:3:{s:19:\"wp_inactive_widgets\";a:6:{i:0;s:8:\"search-2\";i:1;s:14:\"recent-posts-2\";i:2;s:17:\"recent-comments-2\";i:3;s:10:\"archives-2\";i:4;s:12:\"categories-2\";i:5;s:6:\"meta-2\";}s:13:\"widget-area-1\";a:0:{}s:13:\"widget-area-2\";a:0:{}}}}', 'yes'),
(131, 'theme_mods_src', 'a:3:{i:0;b:0;s:18:\"nav_menu_locations\";a:0:{}s:16:\"sidebars_widgets\";a:2:{s:4:\"time\";i:1515624886;s:4:\"data\";a:1:{s:19:\"wp_inactive_widgets\";a:6:{i:0;s:8:\"search-2\";i:1;s:14:\"recent-posts-2\";i:2;s:17:\"recent-comments-2\";i:3;s:10:\"archives-2\";i:4;s:12:\"categories-2\";i:5;s:6:\"meta-2\";}}}}', 'yes'),
(134, 'nonce_key', 'A/*)C3(Ac23(fuE1u::,/:sifTk}w;M {ns@pT1_U=LJwGd$R{kyYsb  8j<m:wI', 'no'),
(135, 'nonce_salt', '|c:`CMlkvI!_s7ZT{~i%E?5be99Gs%4{;S#Dx)!4U4%@bN{kuU 5)_94d|%3;Ak-', 'no'),
(136, '_site_transient_update_core', 'O:8:\"stdClass\":4:{s:7:\"updates\";a:1:{i:0;O:8:\"stdClass\":10:{s:8:\"response\";s:6:\"latest\";s:8:\"download\";s:59:\"https://downloads.wordpress.org/release/wordpress-4.9.1.zip\";s:6:\"locale\";s:5:\"en_US\";s:8:\"packages\";O:8:\"stdClass\":5:{s:4:\"full\";s:59:\"https://downloads.wordpress.org/release/wordpress-4.9.1.zip\";s:10:\"no_content\";s:70:\"https://downloads.wordpress.org/release/wordpress-4.9.1-no-content.zip\";s:11:\"new_bundled\";s:71:\"https://downloads.wordpress.org/release/wordpress-4.9.1-new-bundled.zip\";s:7:\"partial\";b:0;s:8:\"rollback\";b:0;}s:7:\"current\";s:5:\"4.9.1\";s:7:\"version\";s:5:\"4.9.1\";s:11:\"php_version\";s:5:\"5.2.4\";s:13:\"mysql_version\";s:3:\"5.0\";s:11:\"new_bundled\";s:3:\"4.7\";s:15:\"partial_version\";s:0:\"\";}}s:12:\"last_checked\";i:1516031210;s:15:\"version_checked\";s:5:\"4.9.1\";s:12:\"translations\";a:0:{}}', 'no'),
(141, '_site_transient_update_themes', 'O:8:\"stdClass\":4:{s:12:\"last_checked\";i:1516044384;s:7:\"checked\";a:1:{s:14:\"html5blank/src\";s:5:\"1.5.0\";}s:8:\"response\";a:0:{}s:12:\"translations\";a:0:{}}', 'no'),
(143, 'auth_key', 'g!L+aGxc1BUr$+Ekomc^g6a-lr2F|}pD}=ca]fpi]m!:PwG;sGv=FgBG:}PB1;k%', 'no'),
(144, 'auth_salt', 'Uj9i+9TWO{h^i?Z]L?if||w;K15J?~jv6}(4;L=b82fT wO,J&?*4-=Lem/&Z#{S', 'no'),
(145, 'logged_in_key', 'HomjlK5!aL)@i=u`dpXZ6@%K.3x@oHKQPPJ+E^Rmz-M^x~0xzNIlgQ6~{6H^W-(-', 'no'),
(146, 'logged_in_salt', '|#Q<XK:%)%HSB%k}i1HqZ@UNseK+Oy$u,`?:Lk*96v<Ba<1_EojPL:M=`B1^](30', 'no'),
(147, '_site_transient_timeout_browser_cd4046f6c735c2fc11f5f060bc7f711c', '1516453268', 'no'),
(148, '_site_transient_browser_cd4046f6c735c2fc11f5f060bc7f711c', 'a:10:{s:4:\"name\";s:6:\"Chrome\";s:7:\"version\";s:12:\"63.0.3239.84\";s:8:\"platform\";s:9:\"Macintosh\";s:10:\"update_url\";s:29:\"https://www.google.com/chrome\";s:7:\"img_src\";s:43:\"http://s.w.org/images/browsers/chrome.png?1\";s:11:\"img_src_ssl\";s:44:\"https://s.w.org/images/browsers/chrome.png?1\";s:15:\"current_version\";s:2:\"18\";s:7:\"upgrade\";b:0;s:8:\"insecure\";b:0;s:6:\"mobile\";b:0;}', 'no'),
(174, '_transient_timeout_plugin_slugs', '1516073560', 'no'),
(175, '_transient_plugin_slugs', 'a:2:{i:0;s:34:\"advanced-custom-fields-pro/acf.php\";i:1;s:19:\"akismet/akismet.php\";}', 'no'),
(188, 'theme_mods_html5blank/dist', 'a:3:{i:0;b:0;s:18:\"nav_menu_locations\";a:0:{}s:16:\"sidebars_widgets\";a:2:{s:4:\"time\";i:1515986657;s:4:\"data\";a:1:{s:19:\"wp_inactive_widgets\";a:6:{i:0;s:8:\"search-2\";i:1;s:14:\"recent-posts-2\";i:2;s:17:\"recent-comments-2\";i:3;s:10:\"archives-2\";i:4;s:12:\"categories-2\";i:5;s:6:\"meta-2\";}}}}', 'yes'),
(198, '_site_transient_update_plugins', 'O:8:\"stdClass\":4:{s:12:\"last_checked\";i:1516031222;s:8:\"response\";a:1:{s:19:\"akismet/akismet.php\";O:8:\"stdClass\":11:{s:2:\"id\";s:21:\"w.org/plugins/akismet\";s:4:\"slug\";s:7:\"akismet\";s:6:\"plugin\";s:19:\"akismet/akismet.php\";s:11:\"new_version\";s:5:\"4.0.2\";s:3:\"url\";s:38:\"https://wordpress.org/plugins/akismet/\";s:7:\"package\";s:56:\"https://downloads.wordpress.org/plugin/akismet.4.0.2.zip\";s:5:\"icons\";a:3:{s:2:\"1x\";s:59:\"https://ps.w.org/akismet/assets/icon-128x128.png?rev=969272\";s:2:\"2x\";s:59:\"https://ps.w.org/akismet/assets/icon-256x256.png?rev=969272\";s:7:\"default\";s:59:\"https://ps.w.org/akismet/assets/icon-256x256.png?rev=969272\";}s:7:\"banners\";a:2:{s:2:\"1x\";s:61:\"https://ps.w.org/akismet/assets/banner-772x250.jpg?rev=479904\";s:7:\"default\";s:61:\"https://ps.w.org/akismet/assets/banner-772x250.jpg?rev=479904\";}s:11:\"banners_rtl\";a:0:{}s:6:\"tested\";s:5:\"4.9.1\";s:13:\"compatibility\";O:8:\"stdClass\":0:{}}}s:12:\"translations\";a:0:{}s:9:\"no_update\";a:0:{}}', 'no'),
(199, '_site_transient_timeout_theme_roots', '1516046184', 'no'),
(200, '_site_transient_theme_roots', 'a:1:{s:14:\"html5blank/src\";s:7:\"/themes\";}', 'no'),
(201, 'nav_menu_options', 'a:1:{s:8:\"auto_add\";a:1:{i:0;i:2;}}', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `wp_postmeta`
--

CREATE TABLE `wp_postmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_postmeta`
--

INSERT INTO `wp_postmeta` (`meta_id`, `post_id`, `meta_key`, `meta_value`) VALUES
(1, 2, '_wp_page_template', 'default'),
(8, 7, '_edit_lock', '1515597759:2'),
(9, 2, '_wp_trash_meta_status', 'publish'),
(10, 2, '_wp_trash_meta_time', '1515597761'),
(11, 2, '_wp_desired_post_slug', 'sample-page'),
(12, 8, '_edit_last', '4'),
(13, 8, '_edit_lock', '1516050725:4'),
(14, 9, '_edit_lock', '1516043438:4'),
(15, 9, '_edit_last', '4'),
(16, 18, '_wp_attached_file', '2018/01/photo-1486692957922-ea51ea8472bc.jpeg'),
(17, 18, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:1546;s:6:\"height\";i:1000;s:4:\"file\";s:45:\"2018/01/photo-1486692957922-ea51ea8472bc.jpeg\";s:5:\"sizes\";a:5:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:45:\"photo-1486692957922-ea51ea8472bc-150x150.jpeg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:45:\"photo-1486692957922-ea51ea8472bc-300x194.jpeg\";s:5:\"width\";i:300;s:6:\"height\";i:194;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:45:\"photo-1486692957922-ea51ea8472bc-768x497.jpeg\";s:5:\"width\";i:768;s:6:\"height\";i:497;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:5:\"large\";a:4:{s:4:\"file\";s:46:\"photo-1486692957922-ea51ea8472bc-1024x662.jpeg\";s:5:\"width\";i:1024;s:6:\"height\";i:662;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:32:\"twentyseventeen-thumbnail-avatar\";a:4:{s:4:\"file\";s:45:\"photo-1486692957922-ea51ea8472bc-100x100.jpeg\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(18, 19, '_wp_attached_file', '2018/01/photo-1486746290722-483e8f1e44d2.jpeg'),
(19, 19, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:1201;s:6:\"height\";i:1000;s:4:\"file\";s:45:\"2018/01/photo-1486746290722-483e8f1e44d2.jpeg\";s:5:\"sizes\";a:5:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:45:\"photo-1486746290722-483e8f1e44d2-150x150.jpeg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:45:\"photo-1486746290722-483e8f1e44d2-300x250.jpeg\";s:5:\"width\";i:300;s:6:\"height\";i:250;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:45:\"photo-1486746290722-483e8f1e44d2-768x639.jpeg\";s:5:\"width\";i:768;s:6:\"height\";i:639;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:5:\"large\";a:4:{s:4:\"file\";s:46:\"photo-1486746290722-483e8f1e44d2-1024x853.jpeg\";s:5:\"width\";i:1024;s:6:\"height\";i:853;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:32:\"twentyseventeen-thumbnail-avatar\";a:4:{s:4:\"file\";s:45:\"photo-1486746290722-483e8f1e44d2-100x100.jpeg\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(20, 20, '_wp_attached_file', '2018/01/wi9yf7kTQxCNeY72cCY6_Images-of-Jenny-Lace-Plasticity-Publish-4-of-25.jpg'),
(21, 20, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:1650;s:6:\"height\";i:1101;s:4:\"file\";s:80:\"2018/01/wi9yf7kTQxCNeY72cCY6_Images-of-Jenny-Lace-Plasticity-Publish-4-of-25.jpg\";s:5:\"sizes\";a:5:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:80:\"wi9yf7kTQxCNeY72cCY6_Images-of-Jenny-Lace-Plasticity-Publish-4-of-25-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:80:\"wi9yf7kTQxCNeY72cCY6_Images-of-Jenny-Lace-Plasticity-Publish-4-of-25-300x200.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:200;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:80:\"wi9yf7kTQxCNeY72cCY6_Images-of-Jenny-Lace-Plasticity-Publish-4-of-25-768x512.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:512;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:5:\"large\";a:4:{s:4:\"file\";s:81:\"wi9yf7kTQxCNeY72cCY6_Images-of-Jenny-Lace-Plasticity-Publish-4-of-25-1024x683.jpg\";s:5:\"width\";i:1024;s:6:\"height\";i:683;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:32:\"twentyseventeen-thumbnail-avatar\";a:4:{s:4:\"file\";s:80:\"wi9yf7kTQxCNeY72cCY6_Images-of-Jenny-Lace-Plasticity-Publish-4-of-25-100x100.jpg\";s:5:\"width\";i:100;s:6:\"height\";i:100;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(22, 8, 'gallery_0_image', '18'),
(23, 8, '_gallery_0_image', 'field_5a56300609f0f'),
(24, 8, 'gallery_0_caption', 'This is a camera'),
(25, 8, '_gallery_0_caption', 'field_5a56301209f10'),
(26, 8, 'gallery_1_image', '19'),
(27, 8, '_gallery_1_image', 'field_5a56300609f0f'),
(28, 8, 'gallery_1_caption', 'This Is A Hand'),
(29, 8, '_gallery_1_caption', 'field_5a56301209f10'),
(30, 8, 'gallery_2_image', '20'),
(31, 8, '_gallery_2_image', 'field_5a56300609f0f'),
(32, 8, 'gallery_2_caption', 'This is A finger'),
(33, 8, '_gallery_2_caption', 'field_5a56301209f10'),
(34, 8, 'gallery', '3'),
(35, 8, '_gallery', 'field_5a562fe209f0e'),
(36, 8, 'page_content_0_text_area', '<strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(37, 8, '_page_content_0_text_area', 'field_5a56303709f12'),
(38, 8, 'page_content_1_full_width_image', '35'),
(39, 8, '_page_content_1_full_width_image', 'field_5a56307109f14'),
(40, 8, 'page_content_1_caption', 'Hero Image'),
(41, 8, '_page_content_1_caption', 'field_5a56309109f16'),
(48, 8, 'page_content', 'a:5:{i:0;s:9:\"text_area\";i:1;s:10:\"hero_image\";i:2;s:3:\"cta\";i:3;s:9:\"text_area\";i:4;s:3:\"cta\";}'),
(49, 8, '_page_content', 'field_5a56302809f11'),
(56, 24, '_edit_last', '2'),
(57, 24, '_edit_lock', '1516045244:4'),
(58, 25, '_edit_last', '2'),
(59, 25, '_edit_lock', '1515624495:2'),
(60, 26, '_edit_lock', '1515983950:4'),
(61, 26, '_edit_last', '2'),
(62, 32, '_edit_last', '4'),
(63, 32, '_wp_page_template', 'default'),
(64, 32, '_edit_lock', '1515985500:4'),
(65, 32, '_wp_trash_meta_status', 'publish'),
(66, 32, '_wp_trash_meta_time', '1515985647'),
(67, 32, '_wp_desired_post_slug', 'test'),
(68, 8, '_wp_page_template', 'dev-templates/template-home-page.php'),
(69, 34, 'gallery_0_image', '18'),
(70, 34, '_gallery_0_image', 'field_5a56300609f0f'),
(71, 34, 'gallery_0_caption', 'This is a camera'),
(72, 34, '_gallery_0_caption', 'field_5a56301209f10'),
(73, 34, 'gallery_1_image', '19'),
(74, 34, '_gallery_1_image', 'field_5a56300609f0f'),
(75, 34, 'gallery_1_caption', 'This Is A Hand'),
(76, 34, '_gallery_1_caption', 'field_5a56301209f10'),
(77, 34, 'gallery_2_image', '20'),
(78, 34, '_gallery_2_image', 'field_5a56300609f0f'),
(79, 34, 'gallery_2_caption', 'This is A finger'),
(80, 34, '_gallery_2_caption', 'field_5a56301209f10'),
(81, 34, 'gallery', '3'),
(82, 34, '_gallery', 'field_5a562fe209f0e'),
(83, 34, 'page_content_0_text_area', '<strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(84, 34, '_page_content_0_text_area', 'field_5a56303709f12'),
(85, 34, 'page_content_1_full_width_image', '18'),
(86, 34, '_page_content_1_full_width_image', 'field_5a56307109f14'),
(87, 34, 'page_content_1_caption', 'Hero Image'),
(88, 34, '_page_content_1_caption', 'field_5a56309109f16'),
(89, 34, 'page_content_2_cta_link', 'a:3:{s:5:\"title\";s:6:\"Google\";s:3:\"url\";s:17:\"http://google.com\";s:6:\"target\";s:6:\"_blank\";}'),
(90, 34, '_page_content_2_cta_link', 'field_5a5630c009f17'),
(91, 34, 'page_content_3_text_area', '<strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(92, 34, '_page_content_3_text_area', 'field_5a56303709f12'),
(93, 34, 'page_content_4_cta_link', 'a:3:{s:5:\"title\";s:9:\"Home Page\";s:3:\"url\";s:38:\"http://smktest.wpengine.com/?page_id=8\";s:6:\"target\";s:0:\"\";}'),
(94, 34, '_page_content_4_cta_link', 'field_5a5630c009f17'),
(95, 34, 'page_content', 'a:5:{i:0;s:9:\"text_area\";i:1;s:10:\"hero_image\";i:2;s:3:\"cta\";i:3;s:9:\"text_area\";i:4;s:3:\"cta\";}'),
(96, 34, '_page_content', 'field_5a56302809f11'),
(97, 35, '_wp_attached_file', '2018/01/19574793176_036318cd36_k.jpg'),
(98, 35, '_wp_attachment_metadata', 'a:5:{s:5:\"width\";i:2048;s:6:\"height\";i:1356;s:4:\"file\";s:36:\"2018/01/19574793176_036318cd36_k.jpg\";s:5:\"sizes\";a:6:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:36:\"19574793176_036318cd36_k-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:36:\"19574793176_036318cd36_k-250x166.jpg\";s:5:\"width\";i:250;s:6:\"height\";i:166;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"medium_large\";a:4:{s:4:\"file\";s:36:\"19574793176_036318cd36_k-768x509.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:509;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:5:\"large\";a:4:{s:4:\"file\";s:36:\"19574793176_036318cd36_k-700x463.jpg\";s:5:\"width\";i:700;s:6:\"height\";i:463;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:5:\"small\";a:4:{s:4:\"file\";s:35:\"19574793176_036318cd36_k-120x79.jpg\";s:5:\"width\";i:120;s:6:\"height\";i:79;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:11:\"custom-size\";a:4:{s:4:\"file\";s:36:\"19574793176_036318cd36_k-700x200.jpg\";s:5:\"width\";i:700;s:6:\"height\";i:200;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(109, 36, 'gallery_0_image', '18'),
(110, 36, '_gallery_0_image', 'field_5a56300609f0f'),
(111, 36, 'gallery_0_caption', 'This is a camera'),
(112, 36, '_gallery_0_caption', 'field_5a56301209f10'),
(113, 36, 'gallery_1_image', '19'),
(114, 36, '_gallery_1_image', 'field_5a56300609f0f'),
(115, 36, 'gallery_1_caption', 'This Is A Hand'),
(116, 36, '_gallery_1_caption', 'field_5a56301209f10'),
(117, 36, 'gallery_2_image', '20'),
(118, 36, '_gallery_2_image', 'field_5a56300609f0f'),
(119, 36, 'gallery_2_caption', 'This is A finger'),
(120, 36, '_gallery_2_caption', 'field_5a56301209f10'),
(121, 36, 'gallery', '3'),
(122, 36, '_gallery', 'field_5a562fe209f0e'),
(123, 36, 'page_content_0_text_area', '<strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(124, 36, '_page_content_0_text_area', 'field_5a56303709f12'),
(125, 36, 'page_content_1_full_width_image', '35'),
(126, 36, '_page_content_1_full_width_image', 'field_5a56307109f14'),
(127, 36, 'page_content_1_caption', 'Testing '),
(128, 36, '_page_content_1_caption', 'field_5a56309109f16'),
(129, 36, 'page_content', 'a:6:{i:0;s:9:\"text_area\";i:1;s:10:\"hero_image\";i:2;s:10:\"hero_image\";i:3;s:3:\"cta\";i:4;s:9:\"text_area\";i:5;s:3:\"cta\";}'),
(130, 36, '_page_content', 'field_5a56302809f11'),
(131, 36, 'page_content_2_full_width_image', '18'),
(132, 36, '_page_content_2_full_width_image', 'field_5a56307109f14'),
(133, 36, 'page_content_2_caption', 'Hero Image'),
(134, 36, '_page_content_2_caption', 'field_5a56309109f16'),
(135, 36, 'page_content_3_cta_link', 'a:3:{s:5:\"title\";s:6:\"Google\";s:3:\"url\";s:17:\"http://google.com\";s:6:\"target\";s:6:\"_blank\";}'),
(136, 36, '_page_content_3_cta_link', 'field_5a5630c009f17'),
(137, 36, 'page_content_4_text_area', '<strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(138, 36, '_page_content_4_text_area', 'field_5a56303709f12'),
(139, 36, 'page_content_5_cta_link', 'a:3:{s:5:\"title\";s:9:\"Home Page\";s:3:\"url\";s:38:\"http://smktest.wpengine.com/?page_id=8\";s:6:\"target\";s:0:\"\";}'),
(140, 36, '_page_content_5_cta_link', 'field_5a5630c009f17'),
(141, 1, '_edit_lock', '1516045522:4'),
(142, 38, '_menu_item_type', 'post_type_archive'),
(143, 38, '_menu_item_menu_item_parent', '0'),
(144, 38, '_menu_item_object_id', '0'),
(145, 38, '_menu_item_object', 'smakk'),
(146, 38, '_menu_item_target', ''),
(147, 38, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(148, 38, '_menu_item_xfn', 'posts'),
(149, 38, '_menu_item_url', ''),
(150, 37, '_wp_trash_meta_status', 'publish'),
(151, 37, '_wp_trash_meta_time', '1516044485'),
(152, 39, '_wp_trash_meta_status', 'publish'),
(153, 39, '_wp_trash_meta_time', '1516044491'),
(154, 40, '_wp_trash_meta_status', 'publish'),
(155, 40, '_wp_trash_meta_time', '1516044720'),
(156, 41, '_edit_lock', '1516045421:4'),
(157, 41, '_edit_last', '4'),
(158, 42, '_edit_lock', '1516050557:4'),
(159, 42, '_edit_last', '4'),
(160, 42, '_wp_page_template', 'archive-smakk-posts.php'),
(161, 43, '_menu_item_type', 'post_type'),
(162, 43, '_menu_item_menu_item_parent', '0'),
(163, 43, '_menu_item_object_id', '42'),
(164, 43, '_menu_item_object', 'page'),
(165, 43, '_menu_item_target', ''),
(166, 43, '_menu_item_classes', 'a:1:{i:0;s:0:\"\";}'),
(167, 43, '_menu_item_xfn', ''),
(168, 43, '_menu_item_url', ''),
(169, 8, 'page_content_2_cta_link', 'a:3:{s:5:\"title\";s:6:\"Google\";s:3:\"url\";s:17:\"http://google.com\";s:6:\"target\";s:6:\"_blank\";}'),
(170, 8, '_page_content_2_cta_link', 'field_5a5630c009f17'),
(171, 8, 'page_content_3_text_area', '<strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(172, 8, '_page_content_3_text_area', 'field_5a56303709f12'),
(173, 8, 'page_content_4_cta_link', 'a:3:{s:5:\"title\";s:9:\"Home Page\";s:3:\"url\";s:38:\"http://smktest.wpengine.com/?page_id=8\";s:6:\"target\";s:0:\"\";}'),
(174, 8, '_page_content_4_cta_link', 'field_5a5630c009f17'),
(175, 45, 'gallery_0_image', '18'),
(176, 45, '_gallery_0_image', 'field_5a56300609f0f'),
(177, 45, 'gallery_0_caption', 'This is a camera'),
(178, 45, '_gallery_0_caption', 'field_5a56301209f10'),
(179, 45, 'gallery_1_image', '19'),
(180, 45, '_gallery_1_image', 'field_5a56300609f0f'),
(181, 45, 'gallery_1_caption', 'This Is A Hand'),
(182, 45, '_gallery_1_caption', 'field_5a56301209f10'),
(183, 45, 'gallery_2_image', '20'),
(184, 45, '_gallery_2_image', 'field_5a56300609f0f'),
(185, 45, 'gallery_2_caption', 'This is A finger'),
(186, 45, '_gallery_2_caption', 'field_5a56301209f10'),
(187, 45, 'gallery', '3'),
(188, 45, '_gallery', 'field_5a562fe209f0e'),
(189, 45, 'page_content_0_text_area', '<strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(190, 45, '_page_content_0_text_area', 'field_5a56303709f12'),
(191, 45, 'page_content_1_full_width_image', '18'),
(192, 45, '_page_content_1_full_width_image', 'field_5a56307109f14'),
(193, 45, 'page_content_1_caption', 'Hero Image'),
(194, 45, '_page_content_1_caption', 'field_5a56309109f16'),
(195, 45, 'page_content', 'a:5:{i:0;s:9:\"text_area\";i:1;s:10:\"hero_image\";i:2;s:3:\"cta\";i:3;s:9:\"text_area\";i:4;s:3:\"cta\";}'),
(196, 45, '_page_content', 'field_5a56302809f11'),
(197, 45, 'page_content_2_cta_link', 'a:3:{s:5:\"title\";s:6:\"Google\";s:3:\"url\";s:17:\"http://google.com\";s:6:\"target\";s:6:\"_blank\";}'),
(198, 45, '_page_content_2_cta_link', 'field_5a5630c009f17'),
(199, 45, 'page_content_3_text_area', '<strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(200, 45, '_page_content_3_text_area', 'field_5a56303709f12'),
(201, 45, 'page_content_4_cta_link', 'a:3:{s:5:\"title\";s:9:\"Home Page\";s:3:\"url\";s:38:\"http://smktest.wpengine.com/?page_id=8\";s:6:\"target\";s:0:\"\";}'),
(202, 45, '_page_content_4_cta_link', 'field_5a5630c009f17'),
(203, 46, 'gallery_0_image', '18'),
(204, 46, '_gallery_0_image', 'field_5a56300609f0f'),
(205, 46, 'gallery_0_caption', 'This is a camera'),
(206, 46, '_gallery_0_caption', 'field_5a56301209f10'),
(207, 46, 'gallery_1_image', '19'),
(208, 46, '_gallery_1_image', 'field_5a56300609f0f'),
(209, 46, 'gallery_1_caption', 'This Is A Hand'),
(210, 46, '_gallery_1_caption', 'field_5a56301209f10'),
(211, 46, 'gallery_2_image', '20'),
(212, 46, '_gallery_2_image', 'field_5a56300609f0f'),
(213, 46, 'gallery_2_caption', 'This is A finger'),
(214, 46, '_gallery_2_caption', 'field_5a56301209f10'),
(215, 46, 'gallery', '3'),
(216, 46, '_gallery', 'field_5a562fe209f0e'),
(217, 46, 'page_content_0_text_area', '<strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(218, 46, '_page_content_0_text_area', 'field_5a56303709f12'),
(219, 46, 'page_content_1_full_width_image', '35'),
(220, 46, '_page_content_1_full_width_image', 'field_5a56307109f14'),
(221, 46, 'page_content_1_caption', 'Hero Image'),
(222, 46, '_page_content_1_caption', 'field_5a56309109f16'),
(223, 46, 'page_content', 'a:5:{i:0;s:9:\"text_area\";i:1;s:10:\"hero_image\";i:2;s:3:\"cta\";i:3;s:9:\"text_area\";i:4;s:3:\"cta\";}'),
(224, 46, '_page_content', 'field_5a56302809f11'),
(225, 46, 'page_content_2_cta_link', 'a:3:{s:5:\"title\";s:6:\"Google\";s:3:\"url\";s:17:\"http://google.com\";s:6:\"target\";s:6:\"_blank\";}'),
(226, 46, '_page_content_2_cta_link', 'field_5a5630c009f17'),
(227, 46, 'page_content_3_text_area', '<strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(228, 46, '_page_content_3_text_area', 'field_5a56303709f12'),
(229, 46, 'page_content_4_cta_link', 'a:3:{s:5:\"title\";s:9:\"Home Page\";s:3:\"url\";s:38:\"http://smktest.wpengine.com/?page_id=8\";s:6:\"target\";s:0:\"\";}'),
(230, 46, '_page_content_4_cta_link', 'field_5a5630c009f17');

-- --------------------------------------------------------

--
-- Table structure for table `wp_posts`
--

CREATE TABLE `wp_posts` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `post_author` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_title` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_excerpt` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_status` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'publish',
  `comment_status` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'open',
  `ping_status` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'open',
  `post_password` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `post_name` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `to_ping` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `pinged` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content_filtered` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `post_parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `guid` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `menu_order` int(11) NOT NULL DEFAULT '0',
  `post_type` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT 'post',
  `post_mime_type` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `comment_count` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_posts`
--

INSERT INTO `wp_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(1, 1, '2017-11-16 14:47:09', '2017-11-16 14:47:09', 'Welcome to WordPress. This is your first post. Edit or delete it, then start writing!', 'Hello world!', '', 'publish', 'open', 'open', '', 'hello-world', '', '', '2017-11-16 14:47:09', '2017-11-16 14:47:09', '', 0, 'http://wpengine.com9/?p=1', 0, 'post', '', 1),
(2, 1, '2017-11-16 14:47:09', '2017-11-16 14:47:09', 'This is an example page. It\'s different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this:\n\n<blockquote>Hi there! I\'m a bike messenger by day, aspiring actor by night, and this is my website. I live in Los Angeles, have a great dog named Jack, and I like pi&#241;a coladas. (And gettin\' caught in the rain.)</blockquote>\n\n...or something like this:\n\n<blockquote>The XYZ Doohickey Company was founded in 1971, and has been providing quality doohickeys to the public ever since. Located in Gotham City, XYZ employs over 2,000 people and does all kinds of awesome things for the Gotham community.</blockquote>\n\nAs a new WordPress user, you should go to <a href=\"http://wpengine.com9/wp-admin/\">your dashboard</a> to delete this page and create new pages for your content. Have fun!', 'Sample Page', '', 'trash', 'closed', 'open', '', 'sample-page__trashed', '', '', '2018-01-10 15:22:41', '2018-01-10 15:22:41', '', 0, 'http://wpengine.com9/?page_id=2', 0, 'page', '', 0),
(3, 2, '2018-01-10 15:13:51', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'open', 'open', '', '', '', '', '2018-01-10 15:13:51', '0000-00-00 00:00:00', '', 0, 'http://smktest.wpengine.com/?p=3', 0, 'post', '', 0),
(7, 2, '2018-01-10 15:22:37', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2018-01-10 15:22:37', '0000-00-00 00:00:00', '', 0, 'http://smktest.wpengine.com/?post_type=acf-field-group&p=7', 0, 'acf-field-group', '', 0),
(8, 2, '2018-01-10 15:22:47', '2018-01-10 15:22:47', '', 'Home Page', '', 'publish', 'closed', 'closed', '', 'home-page', '', '', '2018-01-15 20:51:13', '2018-01-15 20:51:13', '', 0, 'http://smktest.wpengine.com/?page_id=8', 0, 'page', '', 0),
(9, 2, '2018-01-10 15:23:09', '2018-01-10 15:23:09', 'a:7:{s:8:\"location\";a:1:{i:0;a:1:{i:0;a:3:{s:5:\"param\";s:4:\"page\";s:8:\"operator\";s:2:\"==\";s:5:\"value\";s:1:\"8\";}}}s:8:\"position\";s:6:\"normal\";s:5:\"style\";s:7:\"default\";s:15:\"label_placement\";s:3:\"top\";s:21:\"instruction_placement\";s:5:\"label\";s:14:\"hide_on_screen\";a:15:{i:0;s:9:\"permalink\";i:1;s:11:\"the_content\";i:2;s:7:\"excerpt\";i:3;s:13:\"custom_fields\";i:4;s:10:\"discussion\";i:5;s:8:\"comments\";i:6;s:9:\"revisions\";i:7;s:4:\"slug\";i:8;s:6:\"author\";i:9;s:6:\"format\";i:10;s:15:\"page_attributes\";i:11;s:14:\"featured_image\";i:12;s:10:\"categories\";i:13;s:4:\"tags\";i:14;s:15:\"send-trackbacks\";}s:11:\"description\";s:0:\"\";}', 'Home Page', 'home-page', 'publish', 'closed', 'closed', '', 'group_5a562fce58b85', '', '', '2018-01-15 18:26:50', '2018-01-15 18:26:50', '', 0, 'http://smktest.wpengine.com/?post_type=acf-field-group&#038;p=9', 0, 'acf-field-group', '', 0),
(10, 2, '2018-01-10 15:27:34', '2018-01-10 15:27:34', 'a:10:{s:4:\"type\";s:8:\"repeater\";s:12:\"instructions\";s:42:\"Repeater that builds a gallery with images\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:9:\"collapsed\";s:0:\"\";s:3:\"min\";s:0:\"\";s:3:\"max\";i:0;s:6:\"layout\";s:5:\"block\";s:12:\"button_label\";s:9:\"Add Image\";}', 'Gallery', 'gallery', 'publish', 'closed', 'closed', '', 'field_5a562fe209f0e', '', '', '2018-01-15 18:26:50', '2018-01-15 18:26:50', '', 9, 'http://smktest.wpengine.com/?post_type=acf-field&#038;p=10', 0, 'acf-field', '', 0),
(11, 2, '2018-01-10 15:27:34', '2018-01-10 15:27:34', 'a:15:{s:4:\"type\";s:5:\"image\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"return_format\";s:3:\"url\";s:12:\"preview_size\";s:9:\"thumbnail\";s:7:\"library\";s:3:\"all\";s:9:\"min_width\";s:0:\"\";s:10:\"min_height\";s:0:\"\";s:8:\"min_size\";s:0:\"\";s:9:\"max_width\";s:0:\"\";s:10:\"max_height\";s:0:\"\";s:8:\"max_size\";s:0:\"\";s:10:\"mime_types\";s:0:\"\";}', 'Image', 'image', 'publish', 'closed', 'closed', '', 'field_5a56300609f0f', '', '', '2018-01-10 15:27:34', '2018-01-10 15:27:34', '', 10, 'http://smktest.wpengine.com/?post_type=acf-field&p=11', 0, 'acf-field', '', 0),
(12, 2, '2018-01-10 15:27:34', '2018-01-10 15:27:34', 'a:10:{s:4:\"type\";s:4:\"text\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"default_value\";s:0:\"\";s:11:\"placeholder\";s:0:\"\";s:7:\"prepend\";s:0:\"\";s:6:\"append\";s:0:\"\";s:9:\"maxlength\";s:0:\"\";}', 'Caption', 'caption', 'publish', 'closed', 'closed', '', 'field_5a56301209f10', '', '', '2018-01-10 15:27:34', '2018-01-10 15:27:34', '', 10, 'http://smktest.wpengine.com/?post_type=acf-field&p=12', 1, 'acf-field', '', 0),
(13, 2, '2018-01-10 15:27:34', '2018-01-10 15:27:34', 'a:9:{s:4:\"type\";s:16:\"flexible_content\";s:12:\"instructions\";s:39:\"Flexible Content Area With Three Blocks\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:7:\"layouts\";a:3:{s:13:\"5a56302abbd10\";a:6:{s:3:\"key\";s:13:\"5a56302abbd10\";s:5:\"label\";s:9:\"Text Area\";s:4:\"name\";s:9:\"text_area\";s:7:\"display\";s:5:\"block\";s:3:\"min\";s:0:\"\";s:3:\"max\";s:0:\"\";}s:13:\"5a56306109f13\";a:6:{s:3:\"key\";s:13:\"5a56306109f13\";s:5:\"label\";s:10:\"Hero Image\";s:4:\"name\";s:10:\"hero_image\";s:7:\"display\";s:5:\"block\";s:3:\"min\";s:0:\"\";s:3:\"max\";s:0:\"\";}s:13:\"5a56308709f15\";a:6:{s:3:\"key\";s:13:\"5a56308709f15\";s:5:\"label\";s:3:\"CTA\";s:4:\"name\";s:3:\"cta\";s:7:\"display\";s:5:\"block\";s:3:\"min\";s:0:\"\";s:3:\"max\";s:0:\"\";}}s:12:\"button_label\";s:7:\"Add Row\";s:3:\"min\";s:0:\"\";s:3:\"max\";s:0:\"\";}', 'Page Content', 'page_content', 'publish', 'closed', 'closed', '', 'field_5a56302809f11', '', '', '2018-01-10 15:27:34', '2018-01-10 15:27:34', '', 9, 'http://smktest.wpengine.com/?post_type=acf-field&p=13', 1, 'acf-field', '', 0),
(14, 2, '2018-01-10 15:27:34', '2018-01-10 15:27:34', 'a:11:{s:4:\"type\";s:7:\"wysiwyg\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"parent_layout\";s:13:\"5a56302abbd10\";s:13:\"default_value\";s:0:\"\";s:4:\"tabs\";s:3:\"all\";s:7:\"toolbar\";s:4:\"full\";s:12:\"media_upload\";i:0;s:5:\"delay\";i:0;}', 'Text Area', 'text_area', 'publish', 'closed', 'closed', '', 'field_5a56303709f12', '', '', '2018-01-10 15:27:34', '2018-01-10 15:27:34', '', 13, 'http://smktest.wpengine.com/?post_type=acf-field&p=14', 0, 'acf-field', '', 0),
(15, 2, '2018-01-10 15:27:34', '2018-01-10 15:27:34', 'a:16:{s:4:\"type\";s:5:\"image\";s:12:\"instructions\";s:20:\"add full width image\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"parent_layout\";s:13:\"5a56306109f13\";s:13:\"return_format\";s:3:\"url\";s:12:\"preview_size\";s:9:\"thumbnail\";s:7:\"library\";s:3:\"all\";s:9:\"min_width\";s:0:\"\";s:10:\"min_height\";s:0:\"\";s:8:\"min_size\";s:0:\"\";s:9:\"max_width\";s:0:\"\";s:10:\"max_height\";s:0:\"\";s:8:\"max_size\";s:0:\"\";s:10:\"mime_types\";s:0:\"\";}', 'Full Width Image', 'full_width_image', 'publish', 'closed', 'closed', '', 'field_5a56307109f14', '', '', '2018-01-10 15:27:34', '2018-01-10 15:27:34', '', 13, 'http://smktest.wpengine.com/?post_type=acf-field&p=15', 0, 'acf-field', '', 0),
(16, 2, '2018-01-10 15:27:34', '2018-01-10 15:27:34', 'a:11:{s:4:\"type\";s:4:\"text\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"parent_layout\";s:13:\"5a56306109f13\";s:13:\"default_value\";s:0:\"\";s:11:\"placeholder\";s:0:\"\";s:7:\"prepend\";s:0:\"\";s:6:\"append\";s:0:\"\";s:9:\"maxlength\";s:0:\"\";}', 'Caption', 'caption', 'publish', 'closed', 'closed', '', 'field_5a56309109f16', '', '', '2018-01-10 15:27:34', '2018-01-10 15:27:34', '', 13, 'http://smktest.wpengine.com/?post_type=acf-field&p=16', 1, 'acf-field', '', 0),
(17, 2, '2018-01-10 15:27:34', '2018-01-10 15:27:34', 'a:7:{s:4:\"type\";s:4:\"link\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"parent_layout\";s:13:\"5a56308709f15\";s:13:\"return_format\";s:5:\"array\";}', 'CTA Link', 'cta_link', 'publish', 'closed', 'closed', '', 'field_5a5630c009f17', '', '', '2018-01-10 15:27:34', '2018-01-10 15:27:34', '', 13, 'http://smktest.wpengine.com/?post_type=acf-field&p=17', 0, 'acf-field', '', 0),
(18, 2, '2018-01-10 15:29:29', '2018-01-10 15:29:29', '', 'photo-1486692957922-ea51ea8472bc', '', 'inherit', 'open', 'closed', '', 'photo-1486692957922-ea51ea8472bc', '', '', '2018-01-10 15:30:19', '2018-01-10 15:30:19', '', 8, 'http://smktest.wpengine.com/wp-content/uploads/2018/01/photo-1486692957922-ea51ea8472bc.jpeg', 0, 'attachment', 'image/jpeg', 0),
(19, 2, '2018-01-10 15:29:31', '2018-01-10 15:29:31', '', 'photo-1486746290722-483e8f1e44d2', '', 'inherit', 'open', 'closed', '', 'photo-1486746290722-483e8f1e44d2', '', '', '2018-01-10 15:29:31', '2018-01-10 15:29:31', '', 8, 'http://smktest.wpengine.com/wp-content/uploads/2018/01/photo-1486746290722-483e8f1e44d2.jpeg', 0, 'attachment', 'image/jpeg', 0),
(20, 2, '2018-01-10 15:29:32', '2018-01-10 15:29:32', '', 'wi9yf7kTQxCNeY72cCY6_Images of Jenny Lace Plasticity Publish (4 of 25)', '', 'inherit', 'open', 'closed', '', 'wi9yf7ktqxcney72ccy6_images-of-jenny-lace-plasticity-publish-4-of-25', '', '', '2018-01-10 15:29:32', '2018-01-10 15:29:32', '', 8, 'http://smktest.wpengine.com/wp-content/uploads/2018/01/wi9yf7kTQxCNeY72cCY6_Images-of-Jenny-Lace-Plasticity-Publish-4-of-25.jpg', 0, 'attachment', 'image/jpeg', 0),
(24, 2, '2018-01-10 22:50:29', '2018-01-10 22:50:29', '', 'Smakk Post One', '', 'publish', 'closed', 'closed', '', 'smakk-post-one', '', '', '2018-01-10 22:50:29', '2018-01-10 22:50:29', '', 0, 'http://smktest.wpengine.com/?post_type=smakk&#038;p=24', 0, 'smakk', '', 0),
(25, 2, '2018-01-10 22:50:38', '2018-01-10 22:50:38', '', 'Smakk Post Two', '', 'publish', 'closed', 'closed', '', 'smakk-post-two', '', '', '2018-01-10 22:50:38', '2018-01-10 22:50:38', '', 0, 'http://smktest.wpengine.com/?post_type=smakk&#038;p=25', 0, 'smakk', '', 0),
(26, 2, '2018-01-10 22:50:50', '2018-01-10 22:50:50', '', 'Smakk Post Three', '', 'publish', 'closed', 'closed', '', 'smakk-post-three', '', '', '2018-01-10 22:50:50', '2018-01-10 22:50:50', '', 0, 'http://smktest.wpengine.com/?post_type=smakk&#038;p=26', 0, 'smakk', '', 0),
(27, 4, '2018-01-13 13:01:08', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'open', 'open', '', '', '', '', '2018-01-13 13:01:08', '0000-00-00 00:00:00', '', 0, 'http://localhost:8888/?p=27', 0, 'post', '', 0),
(28, 4, '2018-01-15 01:44:03', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'open', 'open', '', '', '', '', '2018-01-15 01:44:03', '0000-00-00 00:00:00', '', 0, 'http://localhost:8888/?p=28', 0, 'post', '', 0),
(29, 4, '2018-01-15 02:36:03', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2018-01-15 02:36:03', '0000-00-00 00:00:00', '', 0, 'http://localhost:8888/?post_type=smakk&p=29', 0, 'smakk', '', 0),
(30, 4, '2018-01-15 02:36:07', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2018-01-15 02:36:07', '0000-00-00 00:00:00', '', 0, 'http://localhost:8888/?page_id=30', 0, 'page', '', 0),
(31, 4, '2018-01-15 02:41:47', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2018-01-15 02:41:47', '0000-00-00 00:00:00', '', 0, 'http://localhost:8888/?page_id=31', 0, 'page', '', 0),
(32, 4, '2018-01-15 03:07:16', '2018-01-15 03:07:16', '', 'Test', '', 'trash', 'closed', 'closed', '', 'test__trashed', '', '', '2018-01-15 03:07:27', '2018-01-15 03:07:27', '', 0, 'http://localhost:8888/?page_id=32', 0, 'page', '', 0),
(33, 4, '2018-01-15 03:07:16', '2018-01-15 03:07:16', '', 'Test', '', 'inherit', 'closed', 'closed', '', '32-revision-v1', '', '', '2018-01-15 03:07:16', '2018-01-15 03:07:16', '', 32, 'http://localhost:8888/?p=33', 0, 'revision', '', 0),
(34, 4, '2018-01-15 03:46:46', '2018-01-15 03:46:46', '', 'Home Page', '', 'inherit', 'closed', 'closed', '', '8-revision-v1', '', '', '2018-01-15 03:46:46', '2018-01-15 03:46:46', '', 8, 'http://localhost:8888/?p=34', 0, 'revision', '', 0),
(35, 4, '2018-01-15 18:55:08', '2018-01-15 18:55:08', '', '19574793176_036318cd36_k', '', 'inherit', 'open', 'closed', '', '19574793176_036318cd36_k', '', '', '2018-01-15 20:51:08', '2018-01-15 20:51:08', '', 8, 'http://localhost:8888/wp-content/uploads/2018/01/19574793176_036318cd36_k.jpg', 0, 'attachment', 'image/jpeg', 0),
(36, 4, '2018-01-15 18:55:22', '2018-01-15 18:55:22', '', 'Home Page', '', 'inherit', 'closed', 'closed', '', '8-revision-v1', '', '', '2018-01-15 18:55:22', '2018-01-15 18:55:22', '', 8, 'http://localhost:8888/?p=36', 0, 'revision', '', 0),
(37, 4, '2018-01-15 19:28:05', '2018-01-15 19:28:05', '{\n    \"nav_menu[-1020748768745717800]\": {\n        \"value\": {\n            \"name\": \"SMAKK posts\",\n            \"description\": \"\",\n            \"parent\": 0,\n            \"auto_add\": false\n        },\n        \"type\": \"nav_menu\",\n        \"user_id\": 4,\n        \"date_modified_gmt\": \"2018-01-15 19:28:05\"\n    },\n    \"nav_menu_item[-6611132991494613000]\": {\n        \"value\": {\n            \"object_id\": 0,\n            \"object\": \"smakk\",\n            \"menu_item_parent\": 0,\n            \"position\": 1,\n            \"type\": \"post_type_archive\",\n            \"title\": \"SMAKK Archives\",\n            \"url\": \"http://localhost:8888/?post_type=smakk\",\n            \"target\": \"\",\n            \"attr_title\": \"\",\n            \"description\": \"\",\n            \"classes\": \"\",\n            \"xfn\": \"\",\n            \"status\": \"publish\",\n            \"original_title\": \"SMAKK Archives\",\n            \"nav_menu_term_id\": -1020748768745717800,\n            \"_invalid\": false,\n            \"type_label\": \"Post Type Archive\"\n        },\n        \"type\": \"nav_menu_item\",\n        \"user_id\": 4,\n        \"date_modified_gmt\": \"2018-01-15 19:28:05\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', 'e54aef8f-0cff-4fbe-8978-906c7b44dab6', '', '', '2018-01-15 19:28:05', '2018-01-15 19:28:05', '', 0, 'http://localhost:8888/?p=37', 0, 'customize_changeset', '', 0),
(38, 4, '2018-01-15 19:28:05', '2018-01-15 19:28:05', ' ', '', '', 'publish', 'closed', 'closed', '', '38', '', '', '2018-01-15 19:32:00', '2018-01-15 19:32:00', '', 0, 'http://localhost:8888/?p=38', 1, 'nav_menu_item', '', 0),
(39, 4, '2018-01-15 19:28:11', '2018-01-15 19:28:11', '{\n    \"nav_menu[2]\": {\n        \"value\": {\n            \"name\": \"SMAKK posts\",\n            \"description\": \"\",\n            \"parent\": 0,\n            \"auto_add\": true\n        },\n        \"type\": \"nav_menu\",\n        \"user_id\": 4,\n        \"date_modified_gmt\": \"2018-01-15 19:28:11\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', '47bb66a6-d1c0-49ac-880a-ecbca601c168', '', '', '2018-01-15 19:28:11', '2018-01-15 19:28:11', '', 0, 'http://localhost:8888/?p=39', 0, 'customize_changeset', '', 0),
(40, 4, '2018-01-15 19:32:00', '2018-01-15 19:32:00', '{\n    \"nav_menu_item[38]\": {\n        \"value\": {\n            \"menu_item_parent\": 0,\n            \"object_id\": 0,\n            \"object\": \"smakk\",\n            \"type\": \"post_type_archive\",\n            \"title\": \"\",\n            \"type_label\": \"Post Type Archive\",\n            \"url\": \"http://localhost:8888/?post_type=smakk\",\n            \"target\": \"\",\n            \"attr_title\": \"\",\n            \"description\": \"\",\n            \"classes\": \"\",\n            \"xfn\": \"posts\",\n            \"nav_menu_term_id\": 2,\n            \"position\": 1,\n            \"status\": \"publish\",\n            \"original_title\": \"SMAKK Archives\",\n            \"_invalid\": false\n        },\n        \"type\": \"nav_menu_item\",\n        \"user_id\": 4,\n        \"date_modified_gmt\": \"2018-01-15 19:32:00\"\n    }\n}', '', '', 'trash', 'closed', 'closed', '', 'e58bd380-2d69-443f-a0df-afe7a2c06850', '', '', '2018-01-15 19:32:00', '2018-01-15 19:32:00', '', 0, 'http://localhost:8888/?p=40', 0, 'customize_changeset', '', 0),
(41, 4, '2018-01-15 19:43:41', '0000-00-00 00:00:00', '', 'Smakk Posts Archive', '', 'draft', 'closed', 'closed', '', '', '', '', '2018-01-15 19:43:41', '2018-01-15 19:43:41', '', 0, 'http://localhost:8888/?post_type=smakk&#038;p=41', 0, 'smakk', '', 0),
(42, 4, '2018-01-15 19:52:44', '2018-01-15 19:52:44', '', 'Archive Smakk Posts', '', 'publish', 'closed', 'closed', '', 'archive-smakk-posts', '', '', '2018-01-15 19:52:44', '2018-01-15 19:52:44', '', 0, 'http://localhost:8888/?page_id=42', 0, 'page', '', 0),
(43, 4, '2018-01-15 19:52:44', '2018-01-15 19:52:44', ' ', '', '', 'publish', 'closed', 'closed', '', '43', '', '', '2018-01-15 19:52:44', '2018-01-15 19:52:44', '', 0, 'http://localhost:8888/43/', 2, 'nav_menu_item', '', 0),
(44, 4, '2018-01-15 19:52:44', '2018-01-15 19:52:44', '', 'Archive Smakk Posts', '', 'inherit', 'closed', 'closed', '', '42-revision-v1', '', '', '2018-01-15 19:52:44', '2018-01-15 19:52:44', '', 42, 'http://localhost:8888/42-revision-v1/', 0, 'revision', '', 0),
(45, 4, '2018-01-15 20:37:33', '2018-01-15 20:37:33', '', 'Home Page', '', 'inherit', 'closed', 'closed', '', '8-revision-v1', '', '', '2018-01-15 20:37:33', '2018-01-15 20:37:33', '', 8, 'http://localhost:8888/8-revision-v1/', 0, 'revision', '', 0),
(46, 4, '2018-01-15 20:51:13', '2018-01-15 20:51:13', '', 'Home Page', '', 'inherit', 'closed', 'closed', '', '8-revision-v1', '', '', '2018-01-15 20:51:13', '2018-01-15 20:51:13', '', 8, 'http://localhost:8888/8-revision-v1/', 0, 'revision', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_termmeta`
--

CREATE TABLE `wp_termmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wp_terms`
--

CREATE TABLE `wp_terms` (
  `term_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `slug` varchar(200) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `term_group` bigint(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_terms`
--

INSERT INTO `wp_terms` (`term_id`, `name`, `slug`, `term_group`) VALUES
(1, 'Uncategorized', 'uncategorized', 0),
(2, 'SMAKK posts', 'smakk-posts', 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_term_relationships`
--

CREATE TABLE `wp_term_relationships` (
  `object_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `term_order` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_term_relationships`
--

INSERT INTO `wp_term_relationships` (`object_id`, `term_taxonomy_id`, `term_order`) VALUES
(1, 1, 0),
(38, 2, 0),
(43, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_term_taxonomy`
--

CREATE TABLE `wp_term_taxonomy` (
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `taxonomy` varchar(32) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `description` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `count` bigint(20) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_term_taxonomy`
--

INSERT INTO `wp_term_taxonomy` (`term_taxonomy_id`, `term_id`, `taxonomy`, `description`, `parent`, `count`) VALUES
(1, 1, 'category', '', 0, 1),
(2, 2, 'nav_menu', '', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `wp_usermeta`
--

CREATE TABLE `wp_usermeta` (
  `umeta_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_usermeta`
--

INSERT INTO `wp_usermeta` (`umeta_id`, `user_id`, `meta_key`, `meta_value`) VALUES
(1, 1, 'nickname', 'wpengine'),
(2, 1, 'first_name', ''),
(3, 1, 'last_name', ''),
(4, 1, 'description', 'This is the \"wpengine\" admin user that our staff uses to gain access to your admin area to provide support and troubleshooting. It can only be accessed by a button in our secure log that auto generates a password and dumps that password after the staff member has logged in. We have taken extreme measures to ensure that our own user is not going to be misused to harm any of our clients sites.'),
(5, 1, 'rich_editing', 'true'),
(6, 1, 'syntax_highlighting', 'true'),
(7, 1, 'comment_shortcuts', 'false'),
(8, 1, 'admin_color', 'fresh'),
(9, 1, 'use_ssl', '0'),
(10, 1, 'show_admin_bar_front', 'true'),
(11, 1, 'locale', ''),
(12, 1, 'wp_capabilities', 'a:1:{s:13:\"administrator\";b:1;}'),
(13, 1, 'wp_user_level', '10'),
(14, 1, 'dismissed_wp_pointers', ''),
(15, 1, 'show_welcome_panel', '1'),
(16, 2, 'nickname', 'smktest'),
(17, 2, 'first_name', ''),
(18, 2, 'last_name', ''),
(19, 2, 'description', ''),
(20, 2, 'rich_editing', 'true'),
(21, 2, 'syntax_highlighting', 'true'),
(22, 2, 'comment_shortcuts', 'false'),
(23, 2, 'admin_color', 'fresh'),
(24, 2, 'use_ssl', '0'),
(25, 2, 'show_admin_bar_front', 'true'),
(26, 2, 'locale', ''),
(27, 2, 'wp_capabilities', 'a:1:{s:13:\"administrator\";b:1;}'),
(28, 2, 'wp_user_level', '10'),
(29, 2, 'session_tokens', 'a:1:{s:64:\"3b3db6f964257e078f81164ee0fc053254b2c94d54016ea5c72c6ac72ba2181d\";a:4:{s:10:\"expiration\";i:1515770030;s:2:\"ip\";s:12:\"67.244.96.95\";s:2:\"ua\";s:120:\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36\";s:5:\"login\";i:1515597230;}}'),
(30, 2, 'wp_dashboard_quick_press_last_post_id', '3'),
(31, 2, 'community-events-location', 'a:1:{s:2:\"ip\";s:11:\"67.244.96.0\";}'),
(32, 2, 'acf_user_settings', 'a:0:{}'),
(33, 2, 'wp_user-settings', 'libraryContent=browse'),
(34, 2, 'wp_user-settings-time', '1515598258'),
(35, 3, 'nickname', 'gabyhernandezlebron@gmail.com'),
(36, 3, 'first_name', ''),
(37, 3, 'last_name', ''),
(38, 3, 'description', ''),
(39, 3, 'rich_editing', 'true'),
(40, 3, 'syntax_highlighting', 'true'),
(41, 3, 'comment_shortcuts', 'false'),
(42, 3, 'admin_color', 'fresh'),
(43, 3, 'use_ssl', '0'),
(44, 3, 'show_admin_bar_front', 'true'),
(45, 3, 'locale', ''),
(46, 3, 'wp_capabilities', 'a:1:{s:13:\"administrator\";b:1;}'),
(47, 3, 'wp_user_level', '10'),
(48, 3, 'dismissed_wp_pointers', ''),
(49, 4, 'wp_capabilities', 'a:1:{s:13:\"administrator\";s:1:\"1\";}'),
(50, 4, 'session_tokens', 'a:2:{s:64:\"c02ecd6f96a19eb21d074a1494ab8b237a1ac18071748f217326c64df9e39aba\";a:4:{s:10:\"expiration\";i:1516205531;s:2:\"ip\";s:3:\"::1\";s:2:\"ua\";s:120:\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36\";s:5:\"login\";i:1516032731;}s:64:\"b1d13d9d91bc3ab612e16dd30820383949919caa51daa7fc875395ec32e52342\";a:4:{s:10:\"expiration\";i:1516206197;s:2:\"ip\";s:3:\"::1\";s:2:\"ua\";s:120:\"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36\";s:5:\"login\";i:1516033397;}}'),
(51, 4, 'wp_dashboard_quick_press_last_post_id', '27'),
(52, 4, 'community-events-location', 'a:1:{s:2:\"ip\";s:2:\"::\";}'),
(53, 4, 'acf_user_settings', 'a:1:{s:29:\"collapsed_field_5a56302809f11\";s:1:\"0\";}'),
(54, 4, 'closedpostboxes_page', 'a:0:{}'),
(55, 4, 'metaboxhidden_page', 'a:4:{i:0;s:12:\"postimagediv\";i:1;s:23:\"acf-group_5a562fce58b85\";i:2;s:16:\"commentstatusdiv\";i:3;s:9:\"authordiv\";}'),
(56, 4, 'closedpostboxes_smakk', 'a:0:{}'),
(57, 4, 'metaboxhidden_smakk', 'a:1:{i:0;s:23:\"acf-group_5a562fce58b85\";}'),
(58, 4, 'meta-box-order_page', 'a:4:{s:15:\"acf_after_title\";s:0:\"\";s:4:\"side\";s:36:\"submitdiv,pageparentdiv,postimagediv\";s:6:\"normal\";s:70:\"acf-group_5a562fce58b85,commentstatusdiv,commentsdiv,slugdiv,authordiv\";s:8:\"advanced\";s:0:\"\";}'),
(59, 4, 'screen_layout_page', '2'),
(60, 4, 'wp_user-settings', 'editor_expand=off&libraryContent=browse'),
(61, 4, 'wp_user-settings-time', '1516042518'),
(62, 4, 'closedpostboxes_post', 'a:1:{i:0;s:11:\"categorydiv\";}'),
(63, 4, 'metaboxhidden_post', 'a:3:{i:0;s:23:\"acf-group_5a562fce58b85\";i:1;s:7:\"slugdiv\";i:2;s:9:\"authordiv\";}'),
(64, 4, 'meta-box-order_smakk', 'a:4:{s:15:\"acf_after_title\";s:0:\"\";s:4:\"side\";s:22:\"submitdiv,postimagediv\";s:6:\"normal\";s:31:\"acf-group_5a562fce58b85,slugdiv\";s:8:\"advanced\";s:0:\"\";}'),
(65, 4, 'screen_layout_smakk', '2');

-- --------------------------------------------------------

--
-- Table structure for table `wp_users`
--

CREATE TABLE `wp_users` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `user_login` varchar(60) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_pass` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_nicename` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_email` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_url` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_registered` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_activation_key` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `user_status` int(11) NOT NULL DEFAULT '0',
  `display_name` varchar(250) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_users`
--

INSERT INTO `wp_users` (`ID`, `user_login`, `user_pass`, `user_nicename`, `user_email`, `user_url`, `user_registered`, `user_activation_key`, `user_status`, `display_name`) VALUES
(1, 'wpengine', '$P$BxIG9daqNKYxr0WxiHdKB5uy2VlQyZ.', 'wpengine', 'bitbucket@wpengine.com', 'http://wpengine.com', '2017-11-16 14:47:09', '', 0, 'wpengine'),
(2, 'isaac@smkkstudios.com', '$P$BPrkzEFzDMOS1FCw6qvE7kHatdYisM1', 'smktest', 'isaac@smkkstudios.com', 'http://smktest.wpengine.com', '2018-01-10 14:53:52', '', 0, 'smktest'),
(3, 'gabyhernandezlebron@gmail.com', '$P$BZxv1KvDY1nC2AguJXj2MiFunEXuYq/', 'gabyhernandezlebrongmail-com', 'gabyhernandezlebron@gmail.com', '', '2018-01-10 16:51:20', '1515820079:$P$BtO6iKEOVz4hCo1sW5iq6Oewtqd2Wb.', 0, 'gabyhernandezlebron@gmail.com'),
(4, 'gaby', '$P$BpREyKz0gom7mQpYAV0YBNBqPqjAPA0', '', 'gabyhernandezlebron@gmail.com', '', '2018-01-13 00:00:00', '', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wp_commentmeta`
--
ALTER TABLE `wp_commentmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `comment_id` (`comment_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `wp_comments`
--
ALTER TABLE `wp_comments`
  ADD PRIMARY KEY (`comment_ID`),
  ADD KEY `comment_post_ID` (`comment_post_ID`),
  ADD KEY `comment_approved_date_gmt` (`comment_approved`,`comment_date_gmt`),
  ADD KEY `comment_date_gmt` (`comment_date_gmt`),
  ADD KEY `comment_parent` (`comment_parent`),
  ADD KEY `comment_author_email` (`comment_author_email`(10));

--
-- Indexes for table `wp_links`
--
ALTER TABLE `wp_links`
  ADD PRIMARY KEY (`link_id`),
  ADD KEY `link_visible` (`link_visible`);

--
-- Indexes for table `wp_options`
--
ALTER TABLE `wp_options`
  ADD PRIMARY KEY (`option_id`),
  ADD UNIQUE KEY `option_name` (`option_name`);

--
-- Indexes for table `wp_postmeta`
--
ALTER TABLE `wp_postmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `wp_posts`
--
ALTER TABLE `wp_posts`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `post_name` (`post_name`(191)),
  ADD KEY `type_status_date` (`post_type`,`post_status`,`post_date`,`ID`),
  ADD KEY `post_parent` (`post_parent`),
  ADD KEY `post_author` (`post_author`);

--
-- Indexes for table `wp_termmeta`
--
ALTER TABLE `wp_termmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `term_id` (`term_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `wp_terms`
--
ALTER TABLE `wp_terms`
  ADD PRIMARY KEY (`term_id`),
  ADD KEY `slug` (`slug`(191)),
  ADD KEY `name` (`name`(191));

--
-- Indexes for table `wp_term_relationships`
--
ALTER TABLE `wp_term_relationships`
  ADD PRIMARY KEY (`object_id`,`term_taxonomy_id`),
  ADD KEY `term_taxonomy_id` (`term_taxonomy_id`);

--
-- Indexes for table `wp_term_taxonomy`
--
ALTER TABLE `wp_term_taxonomy`
  ADD PRIMARY KEY (`term_taxonomy_id`),
  ADD UNIQUE KEY `term_id_taxonomy` (`term_id`,`taxonomy`),
  ADD KEY `taxonomy` (`taxonomy`);

--
-- Indexes for table `wp_usermeta`
--
ALTER TABLE `wp_usermeta`
  ADD PRIMARY KEY (`umeta_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `wp_users`
--
ALTER TABLE `wp_users`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user_login_key` (`user_login`),
  ADD KEY `user_nicename` (`user_nicename`),
  ADD KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wp_commentmeta`
--
ALTER TABLE `wp_commentmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wp_comments`
--
ALTER TABLE `wp_comments`
  MODIFY `comment_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `wp_links`
--
ALTER TABLE `wp_links`
  MODIFY `link_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wp_options`
--
ALTER TABLE `wp_options`
  MODIFY `option_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;
--
-- AUTO_INCREMENT for table `wp_postmeta`
--
ALTER TABLE `wp_postmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=231;
--
-- AUTO_INCREMENT for table `wp_posts`
--
ALTER TABLE `wp_posts`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `wp_termmeta`
--
ALTER TABLE `wp_termmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wp_terms`
--
ALTER TABLE `wp_terms`
  MODIFY `term_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `wp_term_taxonomy`
--
ALTER TABLE `wp_term_taxonomy`
  MODIFY `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `wp_usermeta`
--
ALTER TABLE `wp_usermeta`
  MODIFY `umeta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `wp_users`
--
ALTER TABLE `wp_users`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
