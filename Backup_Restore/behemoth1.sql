-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2020 at 11:00 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `behemoth`
--

-- --------------------------------------------------------

--
-- Table structure for table `autobiography`
--

CREATE TABLE `autobiography` (
  `identity` int(250) NOT NULL,
  `url_code` varchar(250) NOT NULL,
  `autobio_email` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `autobio_name` varchar(250) NOT NULL,
  `autobio_pages` int(250) NOT NULL,
  `executed_date` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `autobiography_content`
--

CREATE TABLE `autobiography_content` (
  `identity` int(250) NOT NULL,
  `autobiography_identity` int(250) NOT NULL,
  `page_content` varchar(250) DEFAULT NULL,
  `executed_page` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `class_tracks`
--

CREATE TABLE `class_tracks` (
  `identity` int(250) NOT NULL,
  `class_identity` varchar(250) NOT NULL,
  `student_identity` int(250) NOT NULL,
  `live` varchar(10) NOT NULL,
  `created_on` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `identity` int(250) NOT NULL,
  `class_identity` int(250) NOT NULL,
  `course_name` varchar(250) NOT NULL,
  `course_img` varchar(250) NOT NULL,
  `course_desc` varchar(250) NOT NULL,
  `course_instruction` varchar(250) NOT NULL,
  `level` varchar(250) NOT NULL,
  `lessons_count` varchar(250) NOT NULL,
  `live` varchar(10) NOT NULL,
  `date_created` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course_content`
--

CREATE TABLE `course_content` (
  `identity` int(250) NOT NULL,
  `course_identity` varchar(250) NOT NULL,
  `course_content` varchar(250) NOT NULL,
  `created_on` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `identity` int(250) NOT NULL,
  `department_name` varchar(250) NOT NULL,
  `department_img` varchar(250) NOT NULL,
  `department_desc` varchar(250) NOT NULL,
  `department_course_count` int(250) NOT NULL,
  `created_on` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`identity`, `department_name`, `department_img`, `department_desc`, `department_course_count`, `created_on`) VALUES
(1, 'Obscurity', 'obscurity.webp', 'Department that act in all action and stand nowhere, Each and every person in this department can be visible evrywhere', 0, '2020-07-02 07:23:00'),
(2, 'software development', 'sotware_development.jpg', 'This qualification provides the skills,\r\nknowledge and attitudes for a learner to be\r\ncompetent in a range of routine tasks and\r\nactivities that require the application of a\r\nlimited range of basic practical skills in a\r\ndefined context', 11, '18/06/2020');

-- --------------------------------------------------------

--
-- Table structure for table `history_post`
--

CREATE TABLE `history_post` (
  `identity` int(250) NOT NULL,
  `user_identity` int(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `media` varchar(250) NOT NULL,
  `media_type` varchar(250) NOT NULL,
  `history_section` varchar(250) NOT NULL COMMENT 'history based on...',
  `history_title` varchar(250) DEFAULT NULL,
  `history_sub_title` varchar(250) NOT NULL,
  `history_full_body` varchar(250) DEFAULT NULL,
  `history_side` varchar(250) DEFAULT NULL,
  `status_view` varchar(250) DEFAULT NULL,
  `own_status` varchar(250) DEFAULT NULL,
  `created_on` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `history_post_likes`
--

CREATE TABLE `history_post_likes` (
  `identity` int(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `post_identity` int(250) NOT NULL,
  `status_like` int(20) NOT NULL,
  `liked_on` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `intelligent_users`
--

CREATE TABLE `intelligent_users` (
  `identity` int(250) NOT NULL,
  `url_identity` varchar(250) NOT NULL,
  `firstName` varchar(250) NOT NULL,
  `lastName` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `verification_Code` int(250) NOT NULL,
  `log_Session` varchar(250) NOT NULL,
  `Verified` varchar(250) NOT NULL,
  `created_on` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `identity` int(250) NOT NULL,
  `sender_email` varchar(250) NOT NULL,
  `reciever_email` varchar(250) NOT NULL,
  `message` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL COMMENT 'message between users',
  `message_read` varchar(10) NOT NULL,
  `message_visibility` varchar(10) NOT NULL,
  `message_display` varchar(250) NOT NULL,
  `created_on` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `more_account_info`
--

CREATE TABLE `more_account_info` (
  `identity` int(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `School` varchar(250) NOT NULL,
  `Department` varchar(250) NOT NULL,
  `level` varchar(250) NOT NULL,
  `contact` varchar(250) NOT NULL,
  `location` varchar(250) NOT NULL,
  `location_visible` varchar(250) DEFAULT NULL,
  `date_of_birth` varchar(250) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `created_on` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `identity` int(250) NOT NULL,
  `notification_from_email` varchar(250) NOT NULL,
  `notification_to_email` varchar(250) NOT NULL,
  `notification` varchar(250) NOT NULL,
  `notification_type` varchar(250) NOT NULL,
  `notification_read_status` varchar(250) NOT NULL,
  `notification_visibility` varchar(250) NOT NULL,
  `notification_quite` varchar(250) NOT NULL,
  `created_on` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notification_settings`
--

CREATE TABLE `notification_settings` (
  `identity` int(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `badge` varchar(30) NOT NULL,
  `follow_board` varchar(30) NOT NULL,
  `like_comment` varchar(30) NOT NULL,
  `posts` varchar(30) NOT NULL,
  `noti_email` varchar(30) NOT NULL,
  `created_on` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post_views`
--

CREATE TABLE `post_views` (
  `identity` int(250) NOT NULL,
  `post_identity` varchar(250) NOT NULL,
  `view` varchar(250) NOT NULL,
  `created_on` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shared_contents`
--

CREATE TABLE `shared_contents` (
  `identity` int(240) NOT NULL,
  `user_email_from` varchar(250) CHARACTER SET latin1 NOT NULL,
  `user_email_to` varchar(250) CHARACTER SET latin1 NOT NULL,
  `file_shared` varchar(250) CHARACTER SET latin1 DEFAULT NULL,
  `file_type` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `caption` varchar(250) COLLATE utf8mb4_bin DEFAULT NULL,
  `created_on` varchar(250) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin COMMENT='Shared stuff between members  ';

-- --------------------------------------------------------

--
-- Table structure for table `trainer_class`
--

CREATE TABLE `trainer_class` (
  `identity` int(250) NOT NULL,
  `department_identity` int(250) NOT NULL,
  `user_identity` varchar(250) NOT NULL,
  `class_url` varchar(250) NOT NULL,
  `class_name` varchar(250) NOT NULL,
  `class_profile_image` varchar(250) NOT NULL,
  `class_desc` varchar(250) NOT NULL,
  `Live` varchar(10) NOT NULL,
  `created_on` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_answer`
--

CREATE TABLE `user_answer` (
  `identity` int(250) NOT NULL,
  `user_identity` int(250) NOT NULL,
  `question_identity` varchar(250) NOT NULL,
  `answer` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `created_on` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_auto_detection`
--

CREATE TABLE `user_auto_detection` (
  `identity` int(250) NOT NULL,
  `firstName` varchar(250) NOT NULL,
  `lastName` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `location` varchar(250) DEFAULT NULL,
  `type_of_browser` varchar(250) DEFAULT NULL,
  `ip_address` varchar(250) DEFAULT NULL,
  `operating_system` varchar(250) DEFAULT NULL,
  `created_on` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_bio`
--

CREATE TABLE `user_bio` (
  `identity` int(250) NOT NULL,
  `user_identity` int(250) NOT NULL,
  `firstName` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `bio` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `bio_status` varchar(250) NOT NULL,
  `create_on` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_challenge`
--

CREATE TABLE `user_challenge` (
  `identity` int(250) NOT NULL,
  `challenge_url` varchar(250) NOT NULL,
  `host_user_identity` varchar(250) NOT NULL,
  `defender_user_identity` varchar(250) NOT NULL,
  `created_on` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_challenge_comment`
--

CREATE TABLE `user_challenge_comment` (
  `identity` int(250) NOT NULL,
  `user_identity` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `post_identity` varchar(250) NOT NULL,
  `comment` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `comment_read` varchar(250) NOT NULL,
  `created_on` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_challenge_comment_like`
--

CREATE TABLE `user_challenge_comment_like` (
  `identity` int(250) NOT NULL,
  `user_identity` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `comment_identity` varchar(250) NOT NULL,
  `comment_read` varchar(250) NOT NULL,
  `status_like` varchar(250) NOT NULL,
  `created_on` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_challenge_comment_reply`
--

CREATE TABLE `user_challenge_comment_reply` (
  `identity` int(250) NOT NULL,
  `user_identity` int(250) NOT NULL,
  `comment_identity` varchar(250) NOT NULL,
  `reply` varchar(250) NOT NULL,
  `date_created` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_challenge_like`
--

CREATE TABLE `user_challenge_like` (
  `identity` int(250) NOT NULL,
  `user_identity` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `post_identity` varchar(250) NOT NULL,
  `status_like` varchar(250) NOT NULL,
  `created_on` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_challenge_posts`
--

CREATE TABLE `user_challenge_posts` (
  `identity` int(250) NOT NULL,
  `challenge_url` varchar(250) NOT NULL,
  `user_identity` varchar(250) NOT NULL,
  `media` varchar(250) NOT NULL,
  `media_type` varchar(250) NOT NULL,
  `caption` varchar(250) DEFAULT NULL,
  `post_status` varchar(30) NOT NULL,
  `created_on` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_common_comment_like`
--

CREATE TABLE `user_common_comment_like` (
  `identity` int(250) NOT NULL,
  `user_identity` int(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `comment_identity` varchar(250) NOT NULL,
  `status_like` varchar(250) NOT NULL,
  `created_on` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_common_comment_reply`
--

CREATE TABLE `user_common_comment_reply` (
  `identity` int(250) NOT NULL,
  `user_identity` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `comment_identity` varchar(250) NOT NULL,
  `reply` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `created_on` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_common_news`
--

CREATE TABLE `user_common_news` (
  `identity` int(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `news_title` varchar(250) DEFAULT NULL,
  `news_media` varchar(250) DEFAULT NULL,
  `news_description` varchar(250) DEFAULT NULL,
  `news_independent` varchar(250) DEFAULT NULL,
  `executed_date` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_common_news_comments`
--

CREATE TABLE `user_common_news_comments` (
  `identity` int(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `news_identity` varchar(250) NOT NULL,
  `comment` varchar(250) NOT NULL,
  `comment_read_status` varchar(250) NOT NULL,
  `execute_date` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_common_post`
--

CREATE TABLE `user_common_post` (
  `identity` int(250) NOT NULL,
  `poster_identity` int(250) NOT NULL,
  `poster_email` varchar(250) NOT NULL,
  `media_posted` varchar(250) DEFAULT NULL,
  `media_type` varchar(250) DEFAULT NULL,
  `media_caption` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `post_type` varchar(250) DEFAULT NULL,
  `status_view` varchar(250) DEFAULT NULL,
  `created_on` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_common_post_comments`
--

CREATE TABLE `user_common_post_comments` (
  `identity` int(250) NOT NULL,
  `user_identity` int(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `post_identity` int(250) NOT NULL,
  `post_type` varchar(250) NOT NULL,
  `comment` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `created_on` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_common_post_likes`
--

CREATE TABLE `user_common_post_likes` (
  `identity` int(250) NOT NULL,
  `user_identity` int(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `post_identity` int(250) NOT NULL,
  `post_type` varchar(250) NOT NULL,
  `status_like` int(250) NOT NULL,
  `created_on` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_follow_board`
--

CREATE TABLE `user_follow_board` (
  `identity` int(250) NOT NULL,
  `host_identity` int(250) NOT NULL,
  `host_email` varchar(250) NOT NULL,
  `host_title` varchar(20) NOT NULL,
  `reciever_identity` int(250) NOT NULL,
  `reciever_email` varchar(250) NOT NULL,
  `reciever_title` varchar(20) NOT NULL,
  `created_on` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_groups`
--

CREATE TABLE `user_groups` (
  `identity` int(250) NOT NULL,
  `url_encode` varchar(250) NOT NULL,
  `user_identity` int(250) NOT NULL,
  `firstName` varchar(250) NOT NULL,
  `lastName` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `group_name` varchar(250) NOT NULL,
  `group_profile_image` varchar(250) NOT NULL,
  `group_bio` varchar(250) DEFAULT NULL,
  `group_privacy` varchar(250) NOT NULL,
  `group_member_count` int(250) NOT NULL,
  `group_chalenges_count` int(250) NOT NULL,
  `created_on` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_group_member`
--

CREATE TABLE `user_group_member` (
  `identity` int(250) NOT NULL,
  `user_identity` int(250) NOT NULL,
  `User_email` varchar(250) NOT NULL,
  `user_title` varchar(250) NOT NULL,
  `group_name` varchar(250) NOT NULL,
  `group_identity` varchar(250) NOT NULL,
  `approval` varchar(250) NOT NULL,
  `joined_on` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_group_post`
--

CREATE TABLE `user_group_post` (
  `identity` int(250) NOT NULL,
  `group_name` varchar(250) NOT NULL,
  `group_identity` varchar(250) NOT NULL,
  `user_poster_identity` varchar(250) NOT NULL,
  `poster_email` varchar(250) NOT NULL,
  `media_posted` varchar(250) NOT NULL,
  `media_type` varchar(250) NOT NULL,
  `media_caption` varchar(250) NOT NULL,
  `post_type` varchar(250) NOT NULL,
  `created_on` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_group_post_comment`
--

CREATE TABLE `user_group_post_comment` (
  `identity` int(250) NOT NULL,
  `user_identity` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `post_identity` varchar(250) NOT NULL,
  `comment` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `comment_read_status` varchar(250) NOT NULL,
  `created_on` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_group_post_comment_like`
--

CREATE TABLE `user_group_post_comment_like` (
  `identity` int(250) NOT NULL,
  `user_identity` int(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `comment_identity` varchar(250) NOT NULL,
  `comment_status_like` varchar(250) NOT NULL,
  `status_read` varchar(250) NOT NULL,
  `created_on` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_group_post_comment_reply`
--

CREATE TABLE `user_group_post_comment_reply` (
  `identity` int(250) NOT NULL,
  `user_identity` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `comment_identity` varchar(250) NOT NULL,
  `reply` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `comment_read_status` varchar(250) NOT NULL,
  `created_on` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_group_post_like`
--

CREATE TABLE `user_group_post_like` (
  `identity` int(250) NOT NULL,
  `user_identity` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `post_identity` varchar(250) NOT NULL,
  `status_like` varchar(250) NOT NULL,
  `created_on` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_profile_background_image`
--

CREATE TABLE `user_profile_background_image` (
  `identity` int(250) NOT NULL,
  `user_identity` int(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `background_image` varchar(250) NOT NULL,
  `background_status` varchar(20) NOT NULL,
  `created_on` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_profile_image`
--

CREATE TABLE `user_profile_image` (
  `identity` int(250) NOT NULL,
  `user_identity` varchar(250) DEFAULT NULL,
  `firstName` varchar(250) DEFAULT NULL,
  `usr_email` varchar(250) NOT NULL,
  `profile_image` varchar(250) DEFAULT NULL,
  `status_image` varchar(250) DEFAULT NULL,
  `created_on` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_question`
--

CREATE TABLE `user_question` (
  `identity` int(250) NOT NULL,
  `user_email_owner` varchar(250) NOT NULL,
  `user_email_to` varchar(250) DEFAULT NULL,
  `question_depend` varchar(250) NOT NULL,
  `media_support` varchar(250) DEFAULT NULL,
  `question` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `question_refreshed` varchar(250) NOT NULL,
  `created_on` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_question_likes`
--

CREATE TABLE `user_question_likes` (
  `identity` int(250) NOT NULL,
  `user_identity` int(250) NOT NULL,
  `question_identity` int(250) NOT NULL,
  `status_like` varchar(250) NOT NULL,
  `created_on` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_religion_post`
--

CREATE TABLE `user_religion_post` (
  `identity` int(250) NOT NULL,
  `religion_email` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `media_posted` varchar(250) NOT NULL,
  `media_type` varchar(250) NOT NULL,
  `caption_title` varchar(250) NOT NULL,
  `caption_sub_title` varchar(250) NOT NULL,
  `media_caption` varchar(250) NOT NULL,
  `media_section` varchar(250) NOT NULL,
  `media_continet` varchar(250) NOT NULL,
  `media_side` varchar(250) NOT NULL,
  `post_status_read` varchar(250) NOT NULL,
  `created_on` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_religion_post_comment`
--

CREATE TABLE `user_religion_post_comment` (
  `identity` int(250) NOT NULL,
  `user_identity` varchar(250) NOT NULL,
  `post_identity` varchar(250) NOT NULL,
  `comment` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `comment_status_read` varchar(250) NOT NULL,
  `created_on` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_religion_post_comment_like`
--

CREATE TABLE `user_religion_post_comment_like` (
  `identity` int(250) NOT NULL,
  `user_identity` varchar(250) NOT NULL,
  `comment_identity` varchar(250) NOT NULL,
  `status_like` varchar(250) NOT NULL,
  `status_read` varchar(250) NOT NULL,
  `create_on` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_religion_post_like`
--

CREATE TABLE `user_religion_post_like` (
  `identity` int(250) NOT NULL,
  `user_identity` int(250) NOT NULL,
  `post_identity` int(250) NOT NULL,
  `status_like` int(20) NOT NULL,
  `read_like` varchar(250) NOT NULL,
  `created_on` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_topics`
--

CREATE TABLE `user_topics` (
  `id` int(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `topic` varchar(250) NOT NULL,
  `top_sub_title` varchar(250) NOT NULL,
  `topic_media` varchar(250) DEFAULT NULL,
  `topic_description` varchar(250) DEFAULT NULL,
  `topic_area` varchar(250) NOT NULL,
  `executed_date` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_topic_ideas`
--

CREATE TABLE `user_topic_ideas` (
  `identity` int(250) NOT NULL,
  `topic_identity` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `ideas` varchar(250) NOT NULL,
  `ideas_on` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `autobiography`
--
ALTER TABLE `autobiography`
  ADD PRIMARY KEY (`identity`);

--
-- Indexes for table `autobiography_content`
--
ALTER TABLE `autobiography_content`
  ADD PRIMARY KEY (`identity`);

--
-- Indexes for table `class_tracks`
--
ALTER TABLE `class_tracks`
  ADD PRIMARY KEY (`identity`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`identity`);

--
-- Indexes for table `course_content`
--
ALTER TABLE `course_content`
  ADD PRIMARY KEY (`identity`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`identity`);

--
-- Indexes for table `history_post`
--
ALTER TABLE `history_post`
  ADD PRIMARY KEY (`identity`);

--
-- Indexes for table `history_post_likes`
--
ALTER TABLE `history_post_likes`
  ADD PRIMARY KEY (`identity`);

--
-- Indexes for table `intelligent_users`
--
ALTER TABLE `intelligent_users`
  ADD PRIMARY KEY (`identity`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`identity`);

--
-- Indexes for table `more_account_info`
--
ALTER TABLE `more_account_info`
  ADD PRIMARY KEY (`identity`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`identity`);

--
-- Indexes for table `notification_settings`
--
ALTER TABLE `notification_settings`
  ADD PRIMARY KEY (`identity`);

--
-- Indexes for table `post_views`
--
ALTER TABLE `post_views`
  ADD PRIMARY KEY (`identity`);

--
-- Indexes for table `shared_contents`
--
ALTER TABLE `shared_contents`
  ADD PRIMARY KEY (`identity`);

--
-- Indexes for table `trainer_class`
--
ALTER TABLE `trainer_class`
  ADD PRIMARY KEY (`identity`);

--
-- Indexes for table `user_answer`
--
ALTER TABLE `user_answer`
  ADD PRIMARY KEY (`identity`);

--
-- Indexes for table `user_auto_detection`
--
ALTER TABLE `user_auto_detection`
  ADD PRIMARY KEY (`identity`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_bio`
--
ALTER TABLE `user_bio`
  ADD PRIMARY KEY (`identity`);

--
-- Indexes for table `user_challenge`
--
ALTER TABLE `user_challenge`
  ADD PRIMARY KEY (`identity`);

--
-- Indexes for table `user_challenge_comment`
--
ALTER TABLE `user_challenge_comment`
  ADD PRIMARY KEY (`identity`);

--
-- Indexes for table `user_challenge_comment_like`
--
ALTER TABLE `user_challenge_comment_like`
  ADD PRIMARY KEY (`identity`);

--
-- Indexes for table `user_challenge_comment_reply`
--
ALTER TABLE `user_challenge_comment_reply`
  ADD PRIMARY KEY (`identity`);

--
-- Indexes for table `user_challenge_like`
--
ALTER TABLE `user_challenge_like`
  ADD PRIMARY KEY (`identity`);

--
-- Indexes for table `user_challenge_posts`
--
ALTER TABLE `user_challenge_posts`
  ADD PRIMARY KEY (`identity`);

--
-- Indexes for table `user_common_comment_like`
--
ALTER TABLE `user_common_comment_like`
  ADD PRIMARY KEY (`identity`);

--
-- Indexes for table `user_common_comment_reply`
--
ALTER TABLE `user_common_comment_reply`
  ADD PRIMARY KEY (`identity`);

--
-- Indexes for table `user_common_news`
--
ALTER TABLE `user_common_news`
  ADD PRIMARY KEY (`identity`);

--
-- Indexes for table `user_common_news_comments`
--
ALTER TABLE `user_common_news_comments`
  ADD PRIMARY KEY (`identity`);

--
-- Indexes for table `user_common_post`
--
ALTER TABLE `user_common_post`
  ADD PRIMARY KEY (`identity`);

--
-- Indexes for table `user_common_post_comments`
--
ALTER TABLE `user_common_post_comments`
  ADD PRIMARY KEY (`identity`);

--
-- Indexes for table `user_common_post_likes`
--
ALTER TABLE `user_common_post_likes`
  ADD PRIMARY KEY (`identity`);

--
-- Indexes for table `user_follow_board`
--
ALTER TABLE `user_follow_board`
  ADD PRIMARY KEY (`identity`);

--
-- Indexes for table `user_groups`
--
ALTER TABLE `user_groups`
  ADD PRIMARY KEY (`identity`);

--
-- Indexes for table `user_group_member`
--
ALTER TABLE `user_group_member`
  ADD PRIMARY KEY (`identity`);

--
-- Indexes for table `user_group_post`
--
ALTER TABLE `user_group_post`
  ADD PRIMARY KEY (`identity`);

--
-- Indexes for table `user_group_post_comment`
--
ALTER TABLE `user_group_post_comment`
  ADD PRIMARY KEY (`identity`);

--
-- Indexes for table `user_group_post_comment_like`
--
ALTER TABLE `user_group_post_comment_like`
  ADD PRIMARY KEY (`identity`);

--
-- Indexes for table `user_group_post_comment_reply`
--
ALTER TABLE `user_group_post_comment_reply`
  ADD PRIMARY KEY (`identity`);

--
-- Indexes for table `user_group_post_like`
--
ALTER TABLE `user_group_post_like`
  ADD PRIMARY KEY (`identity`);

--
-- Indexes for table `user_profile_background_image`
--
ALTER TABLE `user_profile_background_image`
  ADD PRIMARY KEY (`identity`);

--
-- Indexes for table `user_profile_image`
--
ALTER TABLE `user_profile_image`
  ADD PRIMARY KEY (`identity`);

--
-- Indexes for table `user_question`
--
ALTER TABLE `user_question`
  ADD PRIMARY KEY (`identity`);

--
-- Indexes for table `user_question_likes`
--
ALTER TABLE `user_question_likes`
  ADD PRIMARY KEY (`identity`);

--
-- Indexes for table `user_religion_post`
--
ALTER TABLE `user_religion_post`
  ADD PRIMARY KEY (`identity`);

--
-- Indexes for table `user_religion_post_comment`
--
ALTER TABLE `user_religion_post_comment`
  ADD PRIMARY KEY (`identity`);

--
-- Indexes for table `user_religion_post_comment_like`
--
ALTER TABLE `user_religion_post_comment_like`
  ADD PRIMARY KEY (`identity`);

--
-- Indexes for table `user_religion_post_like`
--
ALTER TABLE `user_religion_post_like`
  ADD PRIMARY KEY (`identity`);

--
-- Indexes for table `user_topics`
--
ALTER TABLE `user_topics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_topic_ideas`
--
ALTER TABLE `user_topic_ideas`
  ADD PRIMARY KEY (`identity`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `autobiography`
--
ALTER TABLE `autobiography`
  MODIFY `identity` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `autobiography_content`
--
ALTER TABLE `autobiography_content`
  MODIFY `identity` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class_tracks`
--
ALTER TABLE `class_tracks`
  MODIFY `identity` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `identity` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course_content`
--
ALTER TABLE `course_content`
  MODIFY `identity` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `identity` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `history_post`
--
ALTER TABLE `history_post`
  MODIFY `identity` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history_post_likes`
--
ALTER TABLE `history_post_likes`
  MODIFY `identity` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `intelligent_users`
--
ALTER TABLE `intelligent_users`
  MODIFY `identity` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `identity` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `more_account_info`
--
ALTER TABLE `more_account_info`
  MODIFY `identity` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `identity` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notification_settings`
--
ALTER TABLE `notification_settings`
  MODIFY `identity` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_views`
--
ALTER TABLE `post_views`
  MODIFY `identity` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shared_contents`
--
ALTER TABLE `shared_contents`
  MODIFY `identity` int(240) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trainer_class`
--
ALTER TABLE `trainer_class`
  MODIFY `identity` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_answer`
--
ALTER TABLE `user_answer`
  MODIFY `identity` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_auto_detection`
--
ALTER TABLE `user_auto_detection`
  MODIFY `identity` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_bio`
--
ALTER TABLE `user_bio`
  MODIFY `identity` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_challenge`
--
ALTER TABLE `user_challenge`
  MODIFY `identity` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_challenge_comment`
--
ALTER TABLE `user_challenge_comment`
  MODIFY `identity` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_challenge_comment_like`
--
ALTER TABLE `user_challenge_comment_like`
  MODIFY `identity` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_challenge_comment_reply`
--
ALTER TABLE `user_challenge_comment_reply`
  MODIFY `identity` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_challenge_like`
--
ALTER TABLE `user_challenge_like`
  MODIFY `identity` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_challenge_posts`
--
ALTER TABLE `user_challenge_posts`
  MODIFY `identity` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_common_comment_like`
--
ALTER TABLE `user_common_comment_like`
  MODIFY `identity` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_common_comment_reply`
--
ALTER TABLE `user_common_comment_reply`
  MODIFY `identity` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_common_news`
--
ALTER TABLE `user_common_news`
  MODIFY `identity` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_common_news_comments`
--
ALTER TABLE `user_common_news_comments`
  MODIFY `identity` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_common_post`
--
ALTER TABLE `user_common_post`
  MODIFY `identity` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_common_post_comments`
--
ALTER TABLE `user_common_post_comments`
  MODIFY `identity` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_common_post_likes`
--
ALTER TABLE `user_common_post_likes`
  MODIFY `identity` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_follow_board`
--
ALTER TABLE `user_follow_board`
  MODIFY `identity` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_groups`
--
ALTER TABLE `user_groups`
  MODIFY `identity` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_group_member`
--
ALTER TABLE `user_group_member`
  MODIFY `identity` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_group_post`
--
ALTER TABLE `user_group_post`
  MODIFY `identity` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_group_post_comment`
--
ALTER TABLE `user_group_post_comment`
  MODIFY `identity` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_group_post_comment_like`
--
ALTER TABLE `user_group_post_comment_like`
  MODIFY `identity` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_group_post_comment_reply`
--
ALTER TABLE `user_group_post_comment_reply`
  MODIFY `identity` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_group_post_like`
--
ALTER TABLE `user_group_post_like`
  MODIFY `identity` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_profile_background_image`
--
ALTER TABLE `user_profile_background_image`
  MODIFY `identity` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_profile_image`
--
ALTER TABLE `user_profile_image`
  MODIFY `identity` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_question`
--
ALTER TABLE `user_question`
  MODIFY `identity` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_question_likes`
--
ALTER TABLE `user_question_likes`
  MODIFY `identity` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_religion_post`
--
ALTER TABLE `user_religion_post`
  MODIFY `identity` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_religion_post_comment`
--
ALTER TABLE `user_religion_post_comment`
  MODIFY `identity` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_religion_post_comment_like`
--
ALTER TABLE `user_religion_post_comment_like`
  MODIFY `identity` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_religion_post_like`
--
ALTER TABLE `user_religion_post_like`
  MODIFY `identity` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_topics`
--
ALTER TABLE `user_topics`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_topic_ideas`
--
ALTER TABLE `user_topic_ideas`
  MODIFY `identity` int(250) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
