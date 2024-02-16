-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 16 2024 г., 12:15
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `diplom`
--

-- --------------------------------------------------------

--
-- Структура таблицы `documents`
--

CREATE TABLE `documents` (
  `id` bigint UNSIGNED NOT NULL,
  `doc` tinyint(1) NOT NULL DEFAULT '0',
  `doc_maked` date DEFAULT NULL,
  `doc_arrived` date DEFAULT NULL,
  `student_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `documents`
--

INSERT INTO `documents` (`id`, `doc`, `doc_maked`, `doc_arrived`, `student_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2023-12-17', '2023-12-18', 1, NULL, NULL),
(2, 1, '2023-12-13', '2023-12-14', 2, NULL, NULL),
(3, 0, '2022-11-08', '2022-11-09', 8, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `groups`
--

CREATE TABLE `groups` (
  `id` bigint UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `supervisor_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `groups`
--

INSERT INTO `groups` (`id`, `title`, `supervisor_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Ис-11', 2, NULL, NULL, NULL),
(2, 'Ис-12', 3, NULL, NULL, NULL),
(3, 'Ис-31', 2, NULL, NULL, NULL),
(4, 'Ис-41', 1, NULL, NULL, NULL),
(12, 'adgysuhjkl;', 3, '2024-01-31 05:08:20', '2024-01-31 05:08:20', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2023_12_15_061056_create_supervisors_table', 1),
(5, '2023_12_15_061057_create_groups_table', 1),
(6, '2023_12_15_061103_create_students_table', 1),
(7, '2023_12_15_061141_create_documents_table', 1),
(8, '2023_12_22_113821_create_stipends_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `stipends`
--

CREATE TABLE `stipends` (
  `id` bigint UNSIGNED NOT NULL,
  `stipend` tinyint(1) NOT NULL DEFAULT '0',
  `stipend_maked` date DEFAULT NULL,
  `stipend_arrived` date DEFAULT NULL,
  `student_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `stipends`
--

INSERT INTO `stipends` (`id`, `stipend`, `stipend_maked`, `stipend_arrived`, `student_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2023-12-04', '2023-12-05', 1, NULL, NULL),
(2, 1, '2022-11-07', '2022-11-08', 2, NULL, NULL),
(3, 1, '2023-12-04', '2023-12-05', 3, NULL, NULL),
(4, 1, '2023-12-07', '2023-12-08', 4, NULL, NULL),
(5, 1, '2023-12-04', '2023-12-05', 7, NULL, NULL),
(6, 1, '2023-12-07', '2023-12-08', 6, NULL, NULL),
(7, 0, NULL, NULL, 9, NULL, NULL),
(8, 1, '2023-12-07', '2023-12-08', 8, NULL, NULL),
(9, 0, NULL, NULL, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `students`
--

CREATE TABLE `students` (
  `id` bigint UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `patronymic` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `students`
--

INSERT INTO `students` (`id`, `name`, `surname`, `patronymic`, `group_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Генрих', 'Кратц', 'Александрович', 4, NULL, NULL, NULL),
(2, 'Сергей', 'Шмалько', 'Валерьевич', 4, NULL, NULL, NULL),
(3, 'Дима', 'Смирнов', 'Александрович', 4, NULL, NULL, NULL),
(4, 'Данил', 'Антипов', 'Сергеевич', 4, NULL, NULL, NULL),
(5, 'Валентин', 'Смирнов', 'Александрович', 3, NULL, NULL, NULL),
(6, 'Ярослав', 'Макеенков', 'Александрович', 4, NULL, NULL, NULL),
(7, 'Данил', 'Дмитренко', 'Сергеевич', 3, NULL, NULL, NULL),
(8, 'Георгий', 'Систейкин', 'Сергеевич', 4, NULL, NULL, NULL),
(9, 'Дмитрий', 'Замуйлов', 'Александрович', 3, NULL, NULL, NULL),
(10, 'Ярослав', 'Гулкин', 'Александрович', 3, NULL, NULL, NULL),
(11, 'Данил', 'Зионов', 'Сергеевич', 3, NULL, NULL, NULL),
(12, 'Георгий', 'Суков', 'Сергеевич', 3, NULL, NULL, NULL),
(13, 'Акакий', 'Замуйлов', 'Александрович', 2, NULL, NULL, NULL),
(14, 'Сергей', 'Гулкин', 'Александрович', 2, NULL, NULL, NULL),
(15, 'Федор', 'Зионов', 'Сергеевич', 2, NULL, NULL, NULL),
(16, 'Дмитрий', 'Суков', 'Сергеевич', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `supervisors`
--

CREATE TABLE `supervisors` (
  `id` bigint UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `patronymic` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `supervisors`
--

INSERT INTO `supervisors` (`id`, `name`, `surname`, `patronymic`, `telephone`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Анна', 'Горяшина', 'Аннатольевна', '79042286635', NULL, NULL, NULL),
(2, 'Евгения', 'Клочева', 'Аллександровна', '79042232145', NULL, NULL, NULL),
(3, 'Елена', 'Борисова', 'Михайловна', '79042232145', NULL, NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id_idx` (`student_id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `group_supervisor_idx` (`supervisor_id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `stipends`
--
ALTER TABLE `stipends`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id_idx` (`student_id`);

--
-- Индексы таблицы `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `group_id_idx` (`group_id`);

--
-- Индексы таблицы `supervisors`
--
ALTER TABLE `supervisors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `groups`
--
ALTER TABLE `groups`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `stipends`
--
ALTER TABLE `stipends`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `supervisors`
--
ALTER TABLE `supervisors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `student_id_fk` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `groups`
--
ALTER TABLE `groups`
  ADD CONSTRAINT `group_supervisor_fk` FOREIGN KEY (`supervisor_id`) REFERENCES `supervisors` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `stipends`
--
ALTER TABLE `stipends`
  ADD CONSTRAINT `student_id_fk2` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `group_id_fk` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
