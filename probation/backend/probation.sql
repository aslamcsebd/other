-- Adminer 5.3.0 MySQL 8.4.8 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `employees`;
CREATE TABLE `employees` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `position` varchar(100) DEFAULT NULL,
  `status` enum('probation','active','terminated') DEFAULT 'probation',
  `start_date` date DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `manager_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `employees` (`id`, `name`, `department`, `position`, `status`, `start_date`, `email`, `manager_id`) VALUES
(1,	'Priya Sharma',	'Engineering',	'Software Engineer',	'probation',	'2025-01-15',	'priya@example.com',	9),
(2,	'James Okafor',	'Marketing',	'Marketing Analyst',	'probation',	'2025-02-01',	'james@example.com',	10),
(3,	'Sarah Mitchell',	'HR',	'HR Coordinator',	'probation',	'2025-01-20',	'sarah@example.com',	NULL),
(4,	'Tom Nguyen',	'Sales',	'Sales Executive',	'probation',	'2025-03-01',	'tom@example.com',	NULL),
(5,	'Aisha Patel',	'Finance',	'Financial Analyst',	'probation',	'2025-02-15',	'aisha@example.com',	NULL),
(6,	'Carlos Rivera',	'Engineering',	'DevOps Engineer',	'active',	'2024-06-01',	'carlos@example.com',	9),
(7,	'Emily Chen',	'Marketing',	'Content Manager',	'active',	'2024-07-01',	'emily@example.com',	10),
(8,	'David Kim',	'Engineering',	'Backend Developer',	'active',	'2024-08-01',	'david@example.com',	9),
(9,	'James Parker',	'Engineering',	'Engineering Manager',	'active',	'2023-01-01',	'james.parker@example.com',	NULL),
(10,	'Lisa Wong',	'Marketing',	'Marketing Manager',	'active',	'2023-03-01',	'lisa.wong@example.com',	NULL);

DROP TABLE IF EXISTS `feedback_360_cycles`;
CREATE TABLE `feedback_360_cycles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `subject_id` int NOT NULL,
  `status` enum('collecting','active','completed') DEFAULT 'collecting',
  `due_date` date DEFAULT NULL,
  `total_reviewers` int DEFAULT '0',
  `completed_reviewers` int DEFAULT '0',
  `self_assessment` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `subject_id` (`subject_id`),
  CONSTRAINT `feedback_360_cycles_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `employees` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `feedback_360_cycles` (`id`, `subject_id`, `status`, `due_date`, `total_reviewers`, `completed_reviewers`, `self_assessment`) VALUES
(1,	9,	'collecting',	'2026-04-30',	5,	4,	1),
(2,	10,	'active',	'2026-04-30',	4,	3,	1),
(3,	1,	'completed',	'2026-03-31',	3,	3,	1);

DROP TABLE IF EXISTS `feedback_360_ratings`;
CREATE TABLE `feedback_360_ratings` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cycle_id` int NOT NULL,
  `innovation` decimal(3,1) DEFAULT NULL,
  `communication` decimal(3,1) DEFAULT NULL,
  `technical_skills` decimal(3,1) DEFAULT NULL,
  `collaboration` decimal(3,1) DEFAULT NULL,
  `leadership` decimal(3,1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cycle_id` (`cycle_id`),
  CONSTRAINT `feedback_360_ratings_ibfk_1` FOREIGN KEY (`cycle_id`) REFERENCES `feedback_360_cycles` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `feedback_360_ratings` (`id`, `cycle_id`, `innovation`, `communication`, `technical_skills`, `collaboration`, `leadership`) VALUES
(1,	1,	3.8,	4.3,	4.8,	4.2,	4.0),
(2,	3,	4.2,	4.7,	4.0,	4.5,	3.5);

DROP TABLE IF EXISTS `objectives`;
CREATE TABLE `objectives` (
  `id` int NOT NULL AUTO_INCREMENT,
  `employee_id` int NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text,
  `score` tinyint DEFAULT NULL,
  `created_at` date DEFAULT (curdate()),
  `self_score` tinyint DEFAULT NULL,
  `category` varchar(50) DEFAULT 'custom',
  `weight` int DEFAULT '20',
  `target_date` date DEFAULT NULL,
  `review_type` varchar(50) DEFAULT 'mid probation',
  PRIMARY KEY (`id`),
  KEY `employee_id` (`employee_id`),
  CONSTRAINT `objectives_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `objectives` (`id`, `employee_id`, `title`, `description`, `score`, `created_at`, `self_score`, `category`, `weight`, `target_date`, `review_type`) VALUES
(7,	3,	'Improve HR documentation',	'Update all HR templates',	3,	'2026-04-19',	5,	'skills',	30,	'2026-04-09',	'mid probation'),
(8,	3,	'Onboard 2 new employees',	'Guide new hires through process',	NULL,	'2026-04-19',	4,	'custom',	25,	'2026-04-15',	'mid probation'),
(9,	1,	'Complete onboarding documentation',	'Thoroughly document all onboarding steps',	4,	'2026-04-19',	5,	'skills',	30,	'2026-04-09',	'mid probation'),
(10,	1,	'Deliver first sprint independently',	'Complete sprint tasks without manager help',	NULL,	'2026-04-19',	4,	'custom',	25,	'2026-04-15',	'mid probation'),
(11,	3,	'Improve HR documentation',	'Update all HR templates',	3,	'2026-04-19',	5,	'skills',	30,	'2026-04-09',	'mid probation'),
(12,	3,	'Onboard 2 new employees',	'Guide new hires through process',	NULL,	'2026-04-19',	4,	'custom',	25,	'2026-04-15',	'mid probation'),
(13,	4,	'sd',	'fgfg',	NULL,	'2026-04-20',	NULL,	'performance',	30,	'2026-04-15',	'Mid-Probation'),
(14,	4,	'sdsd',	'sdsd',	NULL,	'2026-04-20',	NULL,	'team',	30,	'2026-04-16',	'Mid-Probation');

DROP TABLE IF EXISTS `probation_reviews`;
CREATE TABLE `probation_reviews` (
  `id` int NOT NULL AUTO_INCREMENT,
  `employee_id` int NOT NULL,
  `review_type` varchar(50) DEFAULT NULL,
  `review_date` date DEFAULT NULL,
  `outcome` enum('passed','extended','failed') DEFAULT NULL,
  `signed` tinyint(1) DEFAULT '0',
  `notes` text,
  PRIMARY KEY (`id`),
  KEY `employee_id` (`employee_id`),
  CONSTRAINT `probation_reviews_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `probation_reviews` (`id`, `employee_id`, `review_type`, `review_date`, `outcome`, `signed`, `notes`) VALUES
(1,	1,	'Mid-Probation',	'2026-04-19',	NULL,	0,	'Scheduled review'),
(2,	2,	'Mid-Probation',	'2026-04-26',	NULL,	0,	'Upcoming'),
(3,	3,	'End-Probation',	'2026-05-02',	NULL,	0,	'Upcoming'),
(4,	4,	'Mid-Probation',	'2026-05-11',	NULL,	0,	'Upcoming'),
(5,	5,	'End-Probation',	'2026-05-21',	NULL,	0,	'Upcoming'),
(6,	6,	'End-Probation',	'2024-12-01',	'passed',	1,	'Excellent performance'),
(7,	7,	'End-Probation',	'2025-01-01',	'passed',	1,	'Good work'),
(8,	8,	'Mid-Probation',	'2025-01-15',	'extended',	0,	'Needs improvement'),
(9,	6,	'Mid-Probation',	'2024-09-01',	'passed',	1,	'On track'),
(10,	7,	'Mid-Probation',	'2024-10-01',	'passed',	1,	'Great'),
(11,	8,	'End-Probation',	'2025-03-01',	'passed',	1,	'Improved'),
(12,	1,	'Initial',	'2025-02-15',	'passed',	1,	'Good start'),
(13,	2,	'Initial',	'2025-03-01',	'passed',	1,	'Promising');

DROP TABLE IF EXISTS `upward_feedback`;
CREATE TABLE `upward_feedback` (
  `id` int NOT NULL AUTO_INCREMENT,
  `manager_id` int NOT NULL,
  `reviewer_id` int NOT NULL,
  `communication_rating` tinyint DEFAULT NULL,
  `leadership_rating` tinyint DEFAULT NULL,
  `support_rating` tinyint DEFAULT NULL,
  `fairness_rating` tinyint DEFAULT NULL,
  `overall_rating` decimal(3,1) DEFAULT NULL,
  `comments` text,
  `submitted_at` date DEFAULT (curdate()),
  PRIMARY KEY (`id`),
  KEY `manager_id` (`manager_id`),
  KEY `reviewer_id` (`reviewer_id`),
  CONSTRAINT `upward_feedback_ibfk_1` FOREIGN KEY (`manager_id`) REFERENCES `employees` (`id`),
  CONSTRAINT `upward_feedback_ibfk_2` FOREIGN KEY (`reviewer_id`) REFERENCES `employees` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `upward_feedback` (`id`, `manager_id`, `reviewer_id`, `communication_rating`, `leadership_rating`, `support_rating`, `fairness_rating`, `overall_rating`, `comments`, `submitted_at`) VALUES
(1,	9,	1,	4,	4,	4,	4,	4.0,	'Good communicator, very supportive.',	'2025-03-10'),
(2,	9,	6,	5,	4,	4,	4,	4.3,	'Strong technical leader.',	'2025-03-11'),
(3,	9,	8,	4,	3,	4,	4,	3.8,	'Could improve on feedback frequency.',	'2025-03-12'),
(4,	10,	2,	5,	5,	4,	5,	4.8,	'Excellent manager, very fair.',	'2025-03-10'),
(5,	10,	7,	4,	4,	5,	4,	4.3,	'Great support and clear direction.',	'2025-03-11');

-- 2026-04-20 05:45:11 UTC
