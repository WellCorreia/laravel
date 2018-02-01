-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01-Fev-2018 às 18:39
-- Versão do servidor: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `horizon`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cargos`
--

CREATE TABLE `cargos` (
  `id` int(10) UNSIGNED NOT NULL,
  `cargo_nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `cargos`
--

INSERT INTO `cargos` (`id`, `cargo_nome`, `created_at`, `updated_at`) VALUES
(1, 'DBA 2', '2018-02-01 05:57:52', '2018-02-01 08:02:54'),
(3, 'Engenheiro de Software', '2018-02-01 05:59:00', '2018-02-01 05:59:00'),
(4, 'DBA', '2018-02-01 07:59:01', '2018-02-01 07:59:01');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `fun_nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fun_salario` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `fun_da_nascimento` date NOT NULL,
  `fun_da_contratacao` date NOT NULL,
  `cargo_id` int(11) NOT NULL,
  `setor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`id`, `fun_nome`, `fun_salario`, `created_at`, `updated_at`, `fun_da_nascimento`, `fun_da_contratacao`, `cargo_id`, `setor_id`) VALUES
(1, 'Wellington', '100.54', '2018-02-01 10:11:56', '2018-02-01 14:13:57', '2018-02-01', '2018-02-01', 0, 0),
(3, '3000', '255.00', '2018-02-01 10:46:48', '2018-02-01 10:46:48', '2018-02-01', '2018-02-01', 0, 0),
(4, '3000', '255.00', '2018-02-01 10:49:17', '2018-02-01 10:49:17', '2018-02-01', '2018-02-01', 0, 0),
(5, 'Alguém', '2000.00', '2018-02-01 10:50:57', '2018-02-01 10:50:57', '2018-02-01', '2018-02-01', 1, 1),
(6, 'Fernanda', '1549.65', '2018-02-01 16:11:11', '2018-02-01 16:11:11', '2018-02-01', '2018-02-01', 3, 3),
(7, 'Fernanda', '1549.65', '2018-02-01 16:13:31', '2018-02-01 16:13:31', '2018-02-01', '2018-02-01', 3, 3),
(8, 'Uiler', '451.35', '2018-02-01 16:16:57', '2018-02-01 16:16:57', '2018-02-01', '2018-02-01', 3, 4),
(9, 'Uiler', '451.35', '2018-02-01 16:18:50', '2018-02-01 16:18:50', '2018-02-01', '2018-02-01', 3, 4),
(10, 'Algum Teste', '2001.58', '2018-02-01 16:19:26', '2018-02-01 16:19:26', '2018-02-01', '2018-02-01', 1, 3),
(11, 'Algum Teste', '2001.58', '2018-02-01 16:20:08', '2018-02-01 16:20:08', '2018-02-01', '2018-02-01', 1, 3),
(12, 'novo', '10.10', '2018-02-01 19:56:18', '2018-02-01 19:56:18', '2017-12-30', '2017-01-31', 4, 4),
(13, 'dois', '100.54', '2018-02-01 19:57:25', '2018-02-01 19:57:25', '2015-11-23', '2015-12-30', 4, 2),
(14, 'três', '405.00', '2018-02-01 20:01:35', '2018-02-01 20:01:35', '2015-01-31', '2017-12-29', 4, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_01_31_210039_create_funcionarios_table', 2),
(4, '2018_01_31_210706_create_cargos_table', 2),
(5, '2018_01_31_210743_create_setor_table', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `setors`
--

CREATE TABLE `setors` (
  `id` int(10) UNSIGNED NOT NULL,
  `setor_nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `setors`
--

INSERT INTO `setors` (`id`, `setor_nome`, `created_at`, `updated_at`) VALUES
(2, 'RH', '2018-02-01 05:48:08', '2018-02-01 05:48:08'),
(3, 'Cafezinho', '2018-02-01 05:48:31', '2018-02-01 05:48:31'),
(4, 'Almoxarifado', '2018-02-01 10:49:57', '2018-02-01 10:49:57');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'wellington', 'wellington.correia02@gmail.com', '$2y$10$Jxosm3FAc6pJ5twy.fvMcOuDPEcdJYPeQzSA7re4ekzZq.3sypqDG', 'HdYxcawlGlDnCJKAIPDuVFB992JuD4ipFNouzBJ6qor88R7g6joHFMSR5pVx', '2018-02-01 05:46:58', '2018-02-01 05:46:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setors`
--
ALTER TABLE `setors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cargos`
--
ALTER TABLE `cargos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `setors`
--
ALTER TABLE `setors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
