-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th4 15, 2024 lúc 03:42 AM
-- Phiên bản máy phục vụ: 8.0.30
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `laravel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `id` bigint UNSIGNED NOT NULL,
  `roleId` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isDeleted` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`id`, `roleId`, `name`, `email`, `phoneNumber`, `avatar`, `password`, `isDeleted`, `created_at`, `updated_at`) VALUES
(1, 1, 'Nguyen Trong Quy - v1', 'ntq1@gmail.com', '05340349956', 'https://firebasestorage.googleapis.com/v0/b/fir-v1-3a26a.appspot.com/o/userAvatar%2Fuser_nkhp0FBnD7f0D3mZlGliCML2jHf1.jpg?alt=media&token=f318f695-94e4-469a-bee2-174bdd3d015c', '$2y$12$KIyBE8k92PkDLbpOYF292eSctI1U5PjQv3fseDc6tySm39GcRLTXC', 1, NULL, NULL),
(2, 2, 'Huỳnh Phước Đạt', 'dathuynh@gmail.com', '05340349956', 'https://firebasestorage.googleapis.com/v0/b/fir-v1-3a26a.appspot.com/o/userAvatar%2Fuser_8WYkqAcePfPlg33TbgALonTxnyP2.jpg?alt=media&token=b461bc5d-2186-4c49-89f9-4df3afb18980', '$2y$12$JVL4QgKlFQgy2zTSK.9kkOfVBc0oqfnqR03iwxyiErNmm2UCNkZZS', 1, NULL, NULL),
(4, 2, 'Nhật', 'nhat@gmail.com', '0987654321', 'https://placebeard.it/250/250', '$2y$12$KIdzCQnNlVAfg2nmdaVmt./wfsoO4rJAaxjtvEO6e1tbw1OGUy..K', 1, NULL, NULL),
(5, 2, 'nhanminhta', 'nhanta@gmail.com', '0987654321', 'https://placebeard.it/250/250', '$2y$12$22Z0VBbYTfSTy4U535sM0uZILNi1xKxlbaXuycAzvNO9TiM4nOyOW', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` bigint UNSIGNED NOT NULL,
  `accountId` bigint UNSIGNED NOT NULL,
  `courseId` bigint UNSIGNED NOT NULL,
  `amount` decimal(8,2) NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `accountId`, `courseId`, `amount`, `note`, `created_at`, `updated_at`) VALUES
(9, 2, 1, 2000.00, 'Pending', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` bigint UNSIGNED NOT NULL,
  `categoryName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isDeleted` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `categoryName`, `isDeleted`) VALUES
(1, 'Web Development', 0),
(2, 'Mobile Development', 0),
(3, 'Data Science', 0),
(4, 'Cybersecurity', 0),
(5, 'Artificial Intelligence', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `course`
--

CREATE TABLE `course` (
  `id` bigint UNSIGNED NOT NULL,
  `categoryId` bigint UNSIGNED NOT NULL,
  `teacherId` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `startDate` date NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `imageURL` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `demoVideo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isDeleted` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `course`
--

INSERT INTO `course` (`id`, `categoryId`, `teacherId`, `title`, `description`, `startDate`, `price`, `imageURL`, `demoVideo`, `note`, `isDeleted`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Introduction to Web Development', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed commodo felis vel diam.', '2023-06-01', 99.99, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSLKhSj3O6YRB5TrCFJMEzDoOfs4NsmHKckW139U8b-Og&s', '933963936', 'Suitable for beginners.', 0, '2024-04-13 00:37:52', '2024-04-13 00:37:52'),
(2, 1, 1, 'Build responsesive website with Laravel', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed commodo felis vel diam.', '2023-07-15', 149.99, 'https://fiverr-res.cloudinary.com/images/q_auto,f_auto/gigs/281413359/original/e32e34427ed8e5c4d67dfae4b994714092557d81/make-a-responsive-website-using-laravel.png', '933334527', 'Prerequisite: Basic knowledge of Python.', 0, '2024-04-13 00:37:53', '2024-04-13 00:37:53'),
(3, 2, 2, 'Advanced Kotlin', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed commodo felis vel diam.', '2023-07-15', 149.99, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTmSG9f9nZ1khltuUzw4cdi9IdA4obItRj6GhLt7VDTog&s', '933334495', 'Prerequisite: Basic knowledge of Python.', 0, '2024-04-13 00:37:53', '2024-04-13 00:37:53'),
(4, 2, 2, 'Flutter the next generation', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed commodo felis vel diam.', '2023-07-15', 149.99, 'https://rentindiancoders.com/wp-content/uploads/2021/02/Why-Flutter-1200x600.png', '933963972', 'Prerequisite: Basic knowledge of Python.', 0, '2024-04-13 00:37:53', '2024-04-13 00:37:53'),
(5, 3, 3, 'SQL basic', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed commodo felis vel diam.', '2023-07-15', 149.99, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSkZ5IKwZvQrFGDd0WTC2MN58s8c2qzNgWcTidxqwEDnw&s', '933964272', 'Prerequisite: Basic knowledge of Python.', 0, '2024-04-13 00:37:53', '2024-04-13 00:37:53'),
(6, 3, 3, 'NumPy', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed commodo felis vel diam.', '2023-07-15', 149.99, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRHztEMrJLOHQSRESE418gS5nxOU86jtfVDjM6GPWDglA&s', '933334389', 'Prerequisite: Basic knowledge of Python.', 0, '2024-04-13 00:37:53', '2024-04-13 00:37:53'),
(7, 4, 4, 'CSRF attack', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed commodo felis vel diam.', '2023-07-15', 149.99, 'https://www.imperva.com/learn/wp-content/uploads/sites/13/2019/01/csrf-cross-site-request-forgery.png', '932096478', 'Prerequisite: Basic knowledge of Python.', 0, '2024-04-13 00:37:53', '2024-04-13 00:37:53'),
(8, 4, 4, 'XSS attack', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed commodo felis vel diam.', '2023-07-15', 149.99, 'https://media.geeksforgeeks.org/wp-content/uploads/20190516152959/Cross-Site-ScriptingXSS.png', '933964532', 'Prerequisite: Basic knowledge of Python.', 0, '2024-04-13 00:37:53', '2024-04-13 00:37:53'),
(9, 5, 5, 'ChatGPT', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed commodo felis vel diam.', '2023-07-15', 149.99, 'https://www.unimedia.tech/wp-content/uploads/2023/12/openAI-chat-gpt-1-4.jpg', '932094467', 'Prerequisite: Basic knowledge of Python.', 0, '2024-04-13 00:37:53', '2024-04-13 00:37:53'),
(10, 5, 5, 'SoraAI', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed commodo felis vel diam.', '2023-07-15', 149.99, 'https://cdn.fastcare.vn/uploads/2024/04/sora-ai-la-gi-tat-tan-tat-tinh-nang-cua-sora-ai.jpg', '932094467', 'Prerequisite: Basic knowledge of Python.', 0, '2024-04-13 00:37:53', '2024-04-13 00:37:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lesson`
--

CREATE TABLE `lesson` (
  `id` bigint UNSIGNED NOT NULL,
  `courseId` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `videoURL` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isDeleted` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lesson`
--

INSERT INTO `lesson` (`id`, `courseId`, `name`, `content`, `videoURL`, `isDeleted`, `created_at`, `updated_at`) VALUES
(16, 1, 'Introduction to Web Development', 'In this lesson, we will cover the basics of web development, including HTML, CSS, and JavaScript.', 'https://example.com/video1.mp4', 1, '2024-04-14 02:55:09', '2024-04-14 02:55:09'),
(17, 1, 'Building a Simple Website', 'In this lesson, we will build a simple website using the knowledge from the previous lesson.', 'https://example.com/video2.mp4', 1, '2024-04-14 02:55:09', '2024-04-14 02:55:09'),
(18, 1, 'Advanced HTML and CSS Techniques', 'This lesson will explore more advanced HTML and CSS techniques for creating modern web pages.', 'https://example.com/video3.mp4', 1, '2024-04-14 02:55:09', '2024-04-14 02:55:09'),
(19, 2, 'Introduction to Laravel', 'In this lesson, we will explore the fundamentals of the Laravel framework and how to set up a new project.', 'https://example.com/video4.mp4', 1, '2024-04-14 02:55:09', '2024-04-14 02:55:09'),
(20, 2, 'Routing and Controllers in Laravel', 'In this lesson, we will dive into the routing system and controller structure in Laravel.', 'https://example.com/video5.mp4', 1, '2024-04-14 02:55:09', '2024-04-14 02:55:09'),
(21, 2, 'Database Migrations and Models in Laravel', 'This lesson will cover how to work with databases and models in the Laravel framework.', 'https://example.com/video6.mp4', 1, '2024-04-14 02:55:09', '2024-04-14 02:55:09'),
(22, 3, 'Kotlin Basics', 'This lesson will cover the basic syntax and features of the Kotlin programming language.', 'https://example.com/video7.mp4', 1, '2024-04-14 02:55:09', '2024-04-14 02:55:09'),
(23, 3, 'Kotlin for Android Development', 'In this lesson, we will explore how to use Kotlin for building Android applications.', 'https://example.com/video8.mp4', 1, '2024-04-14 02:55:09', '2024-04-14 02:55:09'),
(24, 3, 'Kotlin Advanced Features', 'This lesson will cover more advanced Kotlin features, such as extension functions and lambda expressions.', 'https://example.com/video9.mp4', 1, '2024-04-14 02:55:09', '2024-04-14 02:55:09'),
(25, 4, 'Flutter Introduction', 'This lesson will provide an introduction to the Flutter framework and its features.', 'https://example.com/video10.mp4', 1, '2024-04-14 02:55:09', '2024-04-14 02:55:09'),
(26, 4, 'Building a Flutter App', 'In this lesson, we will create a simple Flutter application from scratch.', 'https://example.com/video11.mp4', 1, '2024-04-14 02:55:09', '2024-04-14 02:55:09'),
(27, 4, 'Flutter State Management', 'This lesson will explore different state management approaches in Flutter.', 'https://example.com/video12.mp4', 1, '2024-04-14 02:55:09', '2024-04-14 02:55:09'),
(28, 5, 'SQL Basics', 'This lesson will cover the fundamental concepts of SQL, including SELECT, INSERT, UPDATE, and DELETE statements.', 'https://example.com/video13.mp4', 1, '2024-04-14 02:55:09', '2024-04-14 02:55:09'),
(29, 5, 'SQL Joins', 'In this lesson, we will learn about different types of SQL joins and how to use them.', 'https://example.com/video14.mp4', 1, '2024-04-14 02:55:09', '2024-04-14 02:55:09'),
(30, 5, 'SQL Subqueries and Aggregates', 'This lesson will cover advanced SQL topics, such as subqueries and aggregate functions.', 'https://example.com/video15.mp4', 1, '2024-04-14 02:55:09', '2024-04-14 02:55:09'),
(31, 6, 'Introduction to NumPy', 'This lesson will provide an overview of the NumPy library and its core features.', 'https://example.com/video16.mp4', 1, '2024-04-14 02:55:09', '2024-04-14 02:55:09'),
(32, 6, 'NumPy Arrays and Operations', 'In this lesson, we will dive into working with NumPy arrays and performing various operations on them.', 'https://example.com/video17.mp4', 1, '2024-04-14 02:55:09', '2024-04-14 02:55:09'),
(33, 6, 'Advanced NumPy Techniques', 'This lesson will cover more advanced NumPy features and techniques, such as broadcasting and vectorization.', 'https://example.com/video18.mp4', 1, '2024-04-14 02:55:09', '2024-04-14 02:55:09'),
(34, 7, 'Understanding CSRF Attacks', 'This lesson will explain the concept of CSRF attacks and how they work.', 'https://example.com/video19.mp4', 1, '2024-04-14 02:55:09', '2024-04-14 02:55:09'),
(35, 7, 'Protecting against CSRF Attacks', 'In this lesson, we will learn about different techniques to protect against CSRF attacks.', 'https://example.com/video20.mp4', 1, '2024-04-14 02:55:09', '2024-04-14 02:55:09'),
(36, 7, 'CSRF Attacks in Web Frameworks', 'This lesson will cover how CSRF attacks can manifest in popular web frameworks and how to mitigate them.', 'https://example.com/video21.mp4', 1, '2024-04-14 02:55:09', '2024-04-14 02:55:09'),
(37, 8, 'Introduction to XSS Attacks', 'This lesson will provide an overview of Cross-Site Scripting (XSS) attacks and how they work.', 'https://example.com/video22.mp4', 1, '2024-04-14 02:55:09', '2024-04-14 02:55:09'),
(38, 8, 'Mitigating XSS Attacks', 'In this lesson, we will explore various methods to prevent and mitigate XSS attacks.', 'https://example.com/video23.mp4', 1, '2024-04-14 02:55:09', '2024-04-14 02:55:09'),
(39, 8, 'XSS Attacks in Modern Web Applications', 'This lesson will cover how XSS attacks can manifest in modern web applications and advanced mitigation techniques.', 'https://example.com/video24.mp4', 1, '2024-04-14 02:55:09', '2024-04-14 02:55:09'),
(40, 9, 'ChatGPT Basics', 'This lesson will cover the fundamentals of ChatGPT and its capabilities.', 'https://example.com/video25.mp4', 1, '2024-04-14 02:55:09', '2024-04-14 02:55:09'),
(41, 9, 'Advanced ChatGPT Prompting', 'In this lesson, we will learn about advanced prompting techniques to get the most out of ChatGPT.', 'https://example.com/video26.mp4', 1, '2024-04-14 02:55:09', '2024-04-14 02:55:09'),
(42, 9, 'ChatGPT in Real-World Applications', 'This lesson will explore practical use cases and applications of ChatGPT in various domains.', 'https://example.com/video27.mp4', 1, '2024-04-14 02:55:09', '2024-04-14 02:55:09'),
(43, 10, 'Introducing SoraAI', 'This lesson will provide an introduction to the SoraAI platform and its features.', 'https://example.com/video28.mp4', 1, '2024-04-14 02:55:09', '2024-04-14 02:55:09'),
(44, 10, 'Integrating SoraAI into Your Projects', 'In this lesson, we will explore how to integrate SoraAI into your own projects and applications.', 'https://example.com/video29.mp4', 1, '2024-04-14 02:55:09', '2024-04-14 02:55:09'),
(45, 10, 'Advanced SoraAI Capabilities', 'This lesson will cover more advanced features and use cases of the SoraAI platform.', 'https://example.com/video30.mp4', 1, '2024-04-14 02:55:09', '2024-04-14 02:55:09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2024_03_29_062720_create_teacher_table', 1),
(2, '2024_03_29_065113_create_category_table', 1),
(3, '2024_03_29_065125_create_course_table', 1),
(4, '2024_03_30_062732_create_role_table', 1),
(5, '2024_03_30_064415_create_account_table', 1),
(6, '2024_03_30_065303_create_cart_table', 1),
(7, '2024_03_30_065426_create_registration_table', 1),
(8, '2024_03_30_071647_create_lesson_table', 1),
(9, '2024_03_30_071730_create_review_table', 1),
(10, '2024_04_04_071804_create_sessions_table', 1),
(11, '2024_04_08_122248_create_cache_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `registration`
--

CREATE TABLE `registration` (
  `id` bigint UNSIGNED NOT NULL,
  `accountId` bigint UNSIGNED NOT NULL,
  `courseId` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `review`
--

CREATE TABLE `review` (
  `id` bigint UNSIGNED NOT NULL,
  `courseId` bigint UNSIGNED NOT NULL,
  `accountId` bigint UNSIGNED NOT NULL,
  `rating` decimal(8,2) NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isDeleted` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `id` bigint UNSIGNED NOT NULL,
  `roleName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isDeleted` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`id`, `roleName`, `isDeleted`) VALUES
(1, 'Admin', 0),
(2, 'Teacher', 0),
(3, 'Student', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('VXkZtc4w6lgkrhrDTlkKcvN6rJxiM4h7nMKhQKgF', NULL, '127.0.0.1', 'PostmanRuntime/7.37.3', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMHF3TTlGQm9YbnA1WW5TMzA4Zkp0aWhXTEhQUFI4b0tmUjIzd2hnRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1713148249);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `teacher`
--

CREATE TABLE `teacher` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isDeleted` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `phoneNumber`, `email`, `avatar`, `gender`, `isDeleted`, `created_at`, `updated_at`) VALUES
(1, 'John Doe', '1234567890', 'john@example.com', 'avatar.jpg', 'Male', 1, '2024-04-13 07:37:44', '2024-04-13 07:37:44'),
(2, 'Jane Smith', '9876543210', 'jane@example.com', 'avatar.jpg', 'Female', 1, '2024-04-13 07:37:44', '2024-04-13 07:37:44'),
(3, 'David Johnson', '5555555555', 'david@example.com', 'avatar.jpg', 'Male', 1, '2024-04-13 07:37:44', '2024-04-13 07:37:44'),
(4, 'Emily Wilson', '1111111111', 'emily@example.com', 'avatar.jpg', 'Female', 1, '2024-04-13 07:37:44', '2024-04-13 07:37:44'),
(5, 'Michael Brown', '2222222222', 'michael@example.com', 'avatar.jpg', 'Male', 1, '2024-04-13 07:37:44', '2024-04-13 07:37:44');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`),
  ADD KEY `account_roleid_foreign` (`roleId`);

--
-- Chỉ mục cho bảng `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Chỉ mục cho bảng `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_accountid_foreign` (`accountId`),
  ADD KEY `cart_courseid_foreign` (`courseId`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_categoryid_foreign` (`categoryId`),
  ADD KEY `course_teacherid_foreign` (`teacherId`);

--
-- Chỉ mục cho bảng `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lesson_courseid_foreign` (`courseId`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD KEY `registration_accountid_foreign` (`accountId`),
  ADD KEY `registration_courseid_foreign` (`courseId`);

--
-- Chỉ mục cho bảng `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `review_courseid_foreign` (`courseId`),
  ADD KEY `review_accountid_foreign` (`accountId`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Chỉ mục cho bảng `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `course`
--
ALTER TABLE `course`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `lesson`
--
ALTER TABLE `lesson`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `registration`
--
ALTER TABLE `registration`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `review`
--
ALTER TABLE `review`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `account_roleid_foreign` FOREIGN KEY (`roleId`) REFERENCES `role` (`id`);

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_accountid_foreign` FOREIGN KEY (`accountId`) REFERENCES `account` (`id`),
  ADD CONSTRAINT `cart_courseid_foreign` FOREIGN KEY (`courseId`) REFERENCES `course` (`id`);

--
-- Các ràng buộc cho bảng `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_categoryid_foreign` FOREIGN KEY (`categoryId`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `course_teacherid_foreign` FOREIGN KEY (`teacherId`) REFERENCES `teacher` (`id`);

--
-- Các ràng buộc cho bảng `lesson`
--
ALTER TABLE `lesson`
  ADD CONSTRAINT `lesson_courseid_foreign` FOREIGN KEY (`courseId`) REFERENCES `course` (`id`);

--
-- Các ràng buộc cho bảng `registration`
--
ALTER TABLE `registration`
  ADD CONSTRAINT `registration_accountid_foreign` FOREIGN KEY (`accountId`) REFERENCES `account` (`id`),
  ADD CONSTRAINT `registration_courseid_foreign` FOREIGN KEY (`courseId`) REFERENCES `course` (`id`);

--
-- Các ràng buộc cho bảng `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_accountid_foreign` FOREIGN KEY (`accountId`) REFERENCES `account` (`id`),
  ADD CONSTRAINT `review_courseid_foreign` FOREIGN KEY (`courseId`) REFERENCES `course` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
