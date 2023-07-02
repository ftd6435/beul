-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2023 at 05:44 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grafikart`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Informatique', '2023-06-04 02:26:30', '2023-06-04 02:26:30', NULL),
(2, 'Sport', '2023-06-04 02:26:30', '2023-06-04 02:26:30', NULL),
(3, 'Politique', '2023-06-04 02:26:30', '2023-06-04 02:26:30', NULL),
(4, 'Business', '2023-06-04 02:26:30', '2023-06-04 02:26:30', NULL),
(5, 'Entreprenariat', '2023-06-04 02:26:30', '2023-06-18 23:22:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `fullname`, `email`, `website`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Dasia Hackett', 'chickle@hills.com', 'http://wiza.com/', 'images/user.jpg', '2023-06-04 02:26:30', '2023-06-04 02:26:30'),
(2, 'Tiffany Jacobs', 'wehner.cordelia@boyer.com', 'http://bradtke.com/', 'images/user.jpg', '2023-06-04 02:26:30', '2023-06-04 02:26:30'),
(3, 'Chauncey Hickle PhD', 'qokuneva@yahoo.com', 'http://zboncak.net/amet-et-sit-saepe-sint', 'images/user.jpg', '2023-06-04 02:26:30', '2023-06-04 02:26:30'),
(4, 'Demetrius Heller', 'elnora.kuvalis@gmail.com', 'https://bergstrom.com/rerum-dolor-illum-voluptas-nostrum.html', 'images/user.jpg', '2023-06-04 02:26:30', '2023-06-04 02:26:30'),
(5, 'Dr. Kennith Carroll DVM', 'harris.jimmie@hill.com', 'https://heathcote.biz/aut-ex-voluptas-in-doloremque.html', 'images/user.jpg', '2023-06-04 02:26:30', '2023-06-04 02:26:30'),
(6, 'Crystel King', 'marjorie.wunsch@ritchie.com', 'http://www.mcglynn.com/saepe-sit-cupiditate-et-nemo-ratione-aspernatur', 'images/user.jpg', '2023-06-04 02:26:30', '2023-06-04 02:26:30'),
(7, 'Randy King', 'gwehner@hahn.com', 'http://crona.com/', 'images/user.jpg', '2023-06-04 02:26:30', '2023-06-04 02:26:30'),
(8, 'Royce Bartell', 'stehr.kelton@tromp.com', 'http://www.pagac.info/optio-ea-perspiciatis-optio-voluptatum-dolorum-laborum.html', 'images/user.jpg', '2023-06-04 02:26:30', '2023-06-04 02:26:30'),
(9, 'Mrs. Megane Shanahan IV', 'dschneider@hotmail.com', 'https://www.satterfield.com/sunt-autem-aliquid-quas-illum-consequuntur', 'images/user.jpg', '2023-06-04 02:26:30', '2023-06-04 02:26:30'),
(10, 'Josephine Olson', 'mckenzie.alessandro@jenkins.org', 'http://steuber.com/qui-autem-incidunt-enim-natus-aut-et', 'images/user.jpg', '2023-06-04 02:26:30', '2023-06-04 02:26:30');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `content`, `created_at`, `updated_at`, `post_id`, `client_id`) VALUES
(1, 'Facere dolorum saepe ut. Et non sed repudiandae illo sequi rerum et. Qui earum magni adipisci deleniti sit dicta. Nihil possimus et id qui architecto.', '2023-06-04 02:26:30', '2023-06-04 02:26:30', 27, 1),
(2, 'Ut rerum officia exercitationem aliquid. Aut inventore incidunt occaecati suscipit ipsum. Et eum et et impedit. Deleniti commodi laudantium ratione qui. Laudantium placeat exercitationem voluptatum reprehenderit.', '2023-06-04 02:26:30', '2023-06-04 02:26:30', 27, 1),
(3, 'Dolorem labore est expedita quia perspiciatis sapiente fugit. Id nam a qui esse nesciunt. Et qui quaerat incidunt asperiores deleniti vel ratione quod.', '2023-06-04 02:26:30', '2023-06-04 02:26:30', 27, 1),
(4, 'Qui in adipisci vel inventore voluptatibus illum praesentium. Qui dolorem ut veniam sint. Aliquid autem nulla ipsa dolores quia. Ut dolores mollitia dolores ea saepe qui rerum. Est officiis quia laudantium in nulla.', '2023-06-04 02:26:30', '2023-06-04 02:26:30', 26, 2),
(5, 'Omnis quaerat esse omnis dolorem. Rerum similique nostrum magnam. Adipisci in ut explicabo ad hic et eaque qui. Consequatur est voluptatum beatae qui quia quia et sunt.', '2023-06-04 02:26:30', '2023-06-04 02:26:30', 26, 2),
(6, 'Quos suscipit necessitatibus vel qui quas est sed enim. Quia nisi voluptate fugiat rerum. Ad suscipit laudantium a dolorem facilis aut. Dolores qui omnis temporibus veniam aut quis.', '2023-06-04 02:26:30', '2023-06-04 02:26:30', 26, 2),
(7, 'Est et occaecati itaque quam. Qui non repellat magnam. Sunt vel dolores quas numquam velit quis corporis.', '2023-06-04 02:26:30', '2023-06-04 02:26:30', 31, 3),
(8, 'Doloremque eum rerum delectus. Veniam facilis quisquam vitae nihil. At sed nemo beatae qui.', '2023-06-04 02:26:30', '2023-06-04 02:26:30', 31, 3),
(9, 'Ut non harum dolores dolor sit consequatur. Vel accusamus quo aperiam dolores. Est sunt ab incidunt provident maxime molestiae voluptas. Debitis et rerum repellendus et quia.', '2023-06-04 02:26:30', '2023-06-04 02:26:30', 31, 3),
(10, 'Maiores beatae adipisci cupiditate fuga et atque quasi. Illum tempore aspernatur sint est odit ex eum labore. In velit hic praesentium inventore.', '2023-06-04 02:26:30', '2023-06-04 02:26:30', 4, 4),
(11, 'Numquam quia expedita laudantium autem nostrum quis asperiores. Consequatur quas voluptatem nihil qui. Numquam autem sequi voluptatum minus amet.', '2023-06-04 02:26:30', '2023-06-04 02:26:30', 4, 4),
(12, 'Odit error laboriosam possimus itaque ullam ut optio. Nihil temporibus dolore ipsam voluptatem. Omnis dolorem incidunt provident aut. Veritatis nobis sit ut rerum rem recusandae. Quidem harum deleniti culpa consequatur sed doloremque ab.', '2023-06-04 02:26:30', '2023-06-04 02:26:30', 4, 4),
(13, 'Rerum ullam autem provident itaque sapiente nulla. Natus quas fuga ipsa nobis recusandae.', '2023-06-04 02:26:30', '2023-06-04 02:26:30', 18, 5),
(14, 'Et veritatis aut aut id nam voluptatem. Quaerat explicabo voluptatem dolores. Et odio velit culpa voluptatem distinctio aut et. Id at aliquam et.', '2023-06-04 02:26:30', '2023-06-04 02:26:30', 18, 5),
(15, 'Sint sed ducimus ex qui aut. Quidem ipsum earum enim quae necessitatibus quo. Adipisci porro dignissimos sit illum aspernatur sequi voluptates. Dolore vitae maxime et voluptatem ut.', '2023-06-04 02:26:30', '2023-06-04 02:26:30', 18, 5),
(16, 'A labore molestiae nemo saepe perspiciatis similique atque ratione. Iusto nemo voluptatem enim incidunt earum. Deserunt corporis excepturi nostrum ut et dignissimos aut. Eos praesentium blanditiis aliquam incidunt.', '2023-06-04 02:26:30', '2023-06-04 02:26:30', 23, 6),
(17, 'Qui exercitationem voluptates incidunt sed provident sit ut. Officia sit accusantium veritatis architecto eveniet enim.', '2023-06-04 02:26:30', '2023-06-04 02:26:30', 23, 6),
(18, 'Quia ut odit sed sed. Nemo mollitia qui cum ullam impedit nesciunt. Minima molestiae aut magni quibusdam et voluptatem.', '2023-06-04 02:26:30', '2023-06-04 02:26:30', 23, 6),
(19, 'Voluptatem consequatur fuga sit perferendis error alias qui. Omnis vel autem nemo possimus fuga. Hic hic repellat ut sapiente consequatur eius. Quis sapiente ut similique sit.', '2023-06-04 02:26:31', '2023-06-04 02:26:31', 11, 7),
(20, 'Qui harum maxime numquam qui est deserunt itaque. Nobis consequatur molestias ipsa iusto aut.', '2023-06-04 02:26:31', '2023-06-04 02:26:31', 11, 7),
(21, 'Dolor quasi vel harum voluptas. At velit enim pariatur natus. Cumque cum minus quibusdam id voluptatem asperiores consequatur. Dolorem quod voluptas quos repellat accusantium corrupti autem.', '2023-06-04 02:26:31', '2023-06-04 02:26:31', 11, 7),
(22, 'Molestiae asperiores voluptas quisquam doloremque. Voluptas repudiandae ut eaque. Animi eos earum est ut asperiores.', '2023-06-04 02:26:31', '2023-06-04 02:26:31', 33, 8),
(23, 'Eos ea molestias placeat autem consequatur itaque. Quaerat reprehenderit officia porro similique molestias modi. Aut dolorem autem itaque voluptatibus nihil est nobis. Ut occaecati nostrum ut recusandae optio architecto.', '2023-06-04 02:26:31', '2023-06-04 02:26:31', 33, 8),
(24, 'Laborum asperiores aliquam placeat quis est magnam. Optio rerum nulla dolores sunt voluptatibus ad.', '2023-06-04 02:26:31', '2023-06-04 02:26:31', 33, 8),
(25, 'Perferendis voluptates in expedita dignissimos id. Veniam tempora tempore ad tenetur harum expedita sed. Rerum dolorem vitae autem eum pariatur ut inventore.', '2023-06-04 02:26:31', '2023-06-04 02:26:31', 30, 9),
(26, 'Tenetur qui aliquam molestiae hic. Voluptatibus veritatis non et ab quia officia. Aut blanditiis dolores quasi et rerum veniam maxime.', '2023-06-04 02:26:31', '2023-06-04 02:26:31', 30, 9),
(27, 'Fugit et ab eum minima blanditiis sit. Ea minima explicabo ut et voluptas amet. Beatae voluptas nesciunt unde sit fuga laudantium non.', '2023-06-04 02:26:31', '2023-06-04 02:26:31', 30, 9),
(28, 'Eveniet iste aspernatur dignissimos. Exercitationem a beatae beatae. Consequatur distinctio dolorem velit. Similique laborum ex magnam eos autem et.', '2023-06-04 02:26:31', '2023-06-04 02:26:31', 18, 10),
(29, 'Modi consequatur temporibus asperiores similique ipsum. Nesciunt rerum eum cupiditate doloribus totam nihil.', '2023-06-04 02:26:31', '2023-06-04 02:26:31', 18, 10),
(30, 'Qui consequuntur amet tempora dicta quibusdam id iste. Sint tempora dolor totam suscipit beatae quia cum. Reprehenderit ut impedit veritatis facilis enim molestias. Veritatis eius distinctio consectetur dicta.', '2023-06-04 02:26:31', '2023-06-04 02:26:31', 18, 10);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `fullname`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'ergetb', 'dhaudab4@gmail.com', 'ergrhu-e (yyrh-è tyju--nt t', '2023-06-06 14:28:05', '2023-06-06 14:28:05');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_13_220350_create_post_table', 1),
(6, '2023_05_13_230702_create_category_table', 1),
(7, '2023_06_02_135920_create_clients_table', 1),
(8, '2023_06_02_140333_create_comments_table', 1),
(9, '2023_06_02_141101_create_tags_table', 1),
(10, '2023_06_02_141447_create_newsletters_table', 1),
(11, '2023_06_02_141653_create_contacts_table', 1),
(12, '2023_06_17_044054_add_userid_to_tags', 2),
(13, '2023_06_17_055812_add_role_to_tags', 3),
(14, '2023_06_18_001651_add_deleted_at_to_posts', 4),
(15, '2023_06_18_223337_add_deleted_at_to_categories', 5),
(16, '2023_06_19_032301_add_deleted_at_to_tags', 6),
(17, '2023_06_29_021005_add_status_to_posts', 7);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'pk8diallo@gmail.com', '2023-06-28 23:50:15', '2023-06-28 23:50:15');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `status` enum('En attente','Poster','Rejeter') NOT NULL DEFAULT 'En attente'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `content`, `image`, `created_at`, `updated_at`, `user_id`, `category_id`, `deleted_at`, `status`) VALUES
(1, 'Pariatur sint autem exercitationem.', 'pariatur-sint-autem-exercitationem', 'Voluptates eius autem tenetur placeat atque. Fugit pariatur ut reiciendis et repellendus aut. Qui dolorem suscipit omnis voluptatem delectus quibusdam. Est quia ipsa magni tempore. Vel et dicta consectetur consequatur. Laborum qui tempora omnis est qui illo. Quasi at quaerat dignissimos enim. Ullam id voluptatem beatae totam consequatur voluptate saepe. Natus culpa numquam saepe et consequatur. Perferendis sapiente dolorem optio iusto. Suscipit aperiam totam impedit quas quia labore fugit. Distinctio placeat eos possimus est aut delectus. Qui voluptatibus tempora vel ducimus quasi in eos. Rerum suscipit eum sequi adipisci. Molestiae eius alias expedita aspernatur aut placeat nihil. Inventore iusto aliquam earum praesentium iste aliquam adipisci.', 'images/news-700x435-4.jpg', '2023-06-04 02:26:30', '2023-06-04 03:18:51', 1, 1, NULL, 'En attente'),
(2, 'A beatae perspiciatis quasi laboriosam cupiditate quasi.', 'a-beatae-perspiciatis-quasi-laboriosam-cupiditate-quasi', 'Quo voluptatum molestiae quis excepturi maxime blanditiis. Eos dolores in cumque accusamus qui odio odit possimus. Sequi est autem totam architecto vel. Excepturi laborum perferendis voluptatem odit accusantium laboriosam. Aspernatur laborum exercitationem et ut. Ad aut numquam voluptatem quod esse. Aut non architecto repellat quaerat occaecati sequi. Esse et ut saepe voluptas ad vel animi nam. Aliquid ut expedita dolor quisquam adipisci consequatur provident quam. Sint recusandae praesentium provident corporis quibusdam sed ut. Nesciunt laboriosam quo ut quo non illum voluptatibus. Distinctio vel quo cumque illum architecto quia. Placeat voluptatum voluptatem ut quo exercitationem.', 'images/news-700x435-4.jpg', '2023-06-04 02:26:30', '2023-06-04 03:19:14', 3, 1, NULL, 'En attente'),
(3, 'Adipisci et dolores officiis quis porro earum.', 'adipisci-et-dolores-officiis-quis-porro-earum', 'Voluptatum voluptatem magni repellendus laborum non. Illo aut ut molestiae quia est. Dolorem non tempora voluptatem laborum provident laborum sed. Enim nam laudantium laborum odio quos in. Rerum qui qui dolore harum quis. Quod sed voluptas aut adipisci. Odio suscipit vel nulla impedit eius deserunt. Rerum ipsum possimus est. Esse consequuntur dicta cumque praesentium suscipit nostrum. Ipsum delectus quis a animi impedit ab occaecati. Maxime dolorem quos ad dignissimos. Quam sit nihil accusantium aut ratione ratione. Amet et consequatur voluptatem autem qui. Ipsa mollitia est quasi dolor natus voluptatum. Sit id impedit accusamus qui molestias aperiam.', 'images/news-700x435-4.jpg', '2023-06-04 02:26:30', '2023-06-04 03:19:28', 1, 1, NULL, 'En attente'),
(4, 'Quia nam perspiciatis sint dignissimos e...', 'quia-nam-perspiciatis-sint-dignissimos-e', 'Perspiciatis quisquam sapiente dolore dolorum qui tempore dolores ea. Voluptas quae molestias perspiciatis et illum eius. Et neque expedita rerum consequatur ut vitae sed nostrum. Cumque harum quis soluta. Corrupti et et ea alias voluptas. Libero et odio aut rerum molestiae. Tempora vitae incidunt pariatur modi ab aspernatur. Rerum praesentium aut quia assumenda eveniet veniam. Vitae accusamus beatae in beatae rerum iure doloremque. Tenetur velit sit labore soluta enim doloremque. Et aliquam aperiam quo quia nisi voluptas. Beatae est aut aliquid deleniti eligendi. Facilis aut doloribus ratione sit delectus sit autem libero. Et cum quasi et eaque tempora repellendus sunt.', 'images/news-700x435-4.jpg', '2023-06-04 02:26:30', '2023-06-29 03:17:57', 1, 1, NULL, 'Rejeter'),
(5, 'Optio necessitatibus quaerat vel et.', 'optio-necessitatibus-quaerat-vel-et', 'Veritatis ipsam impedit et velit reiciendis ullam. At dignissimos modi non a repellendus. Nam aliquam suscipit fugit cupiditate aut alias. Placeat quam enim quia id. Aut deserunt nostrum maxime ut beatae similique. Ea aut tempore ab voluptas. Sunt doloremque illum temporibus doloribus eos ut. Et quis est et vel architecto tenetur quo corrupti. Quam ratione voluptatem tempore enim. Non debitis rerum odit inventore doloremque. Et id nam quas et. Aut et ipsam enim voluptatem. Autem quis maiores eos ut repellendus magni repellat. Id praesentium sit perspiciatis quo nulla. Est ipsum omnis vel. Ut non beatae minus. Minima repellat sunt et dicta. Esse quia expedita corporis est magni. Et unde aspernatur nesciunt ut alias doloremque. Doloremque dolorem ipsum et nemo.', 'images/news-700x435-4.jpg', '2023-06-04 02:26:30', '2023-06-04 03:19:46', 1, 1, NULL, 'En attente'),
(6, 'Delectus alias minima hic temporibus quia veniam.', 'delectus-alias-minima-hic-temporibus-quia-veniam', 'Blanditiis est nam repellendus saepe quia illo maiores nesciunt. Sapiente sit ut sapiente qui autem quisquam. Soluta nemo aspernatur veritatis quidem nihil voluptatibus ea. Neque consequatur id ea dolorem rem soluta. Praesentium fugiat quaerat sunt ducimus sapiente. Veniam aut voluptas quisquam beatae mollitia aut. Eum repudiandae in consectetur voluptatibus alias cupiditate. Mollitia soluta vitae libero aut delectus totam. Molestiae eum cumque vel architecto et et. Ipsum delectus cumque dignissimos necessitatibus ut aut. Ut accusantium aut dolorem similique qui. Distinctio quisquam dolor ratione hic corrupti omnis. Et consequatur in et. Commodi provident ducimus nostrum ab. Vero tempore dolore et. Non autem odit impedit temporibus et et.', 'images/news-700x435-4.jpg', '2023-06-04 02:26:30', '2023-06-04 03:19:53', 3, 1, NULL, 'En attente'),
(7, 'Ipsam in excepturi quibusdam.', 'ipsam-in-excepturi-quibusdam', 'Soluta et sapiente quia iusto. Rem alias corrupti et totam nam. Non necessitatibus ea adipisci ut qui ex. Dolores in qui dolorem. Ipsa dolorem laborum maiores nihil animi. Minus harum eum est animi. Sit aspernatur veritatis consectetur sapiente hic dolorum rerum ducimus. Magni dolore facere nisi et. Dignissimos minima aspernatur impedit tempora amet tenetur architecto. Qui impedit corrupti officiis commodi aut dicta. Mollitia qui odio ut ipsa magnam. Fugit quis fuga incidunt. Aperiam quisquam id dicta neque. Quia quis error hic. Et tempora repellendus nemo necessitatibus pariatur. Similique adipisci rerum laboriosam sequi tenetur. Perspiciatis aliquid et alias similique impedit asperiores. Quibusdam deleniti eos alias quas. Qui fuga corrupti ipsum voluptatem.', 'images/news-700x435-4.jpg', '2023-06-04 02:26:30', '2023-06-04 03:20:08', 1, 1, NULL, 'En attente'),
(8, 'Libero quia itaque vel et officia dolores et.', 'libero-quia-itaque-vel-et-officia-dolores-et', 'Molestiae temporibus sunt eos. Minima qui esse modi enim recusandae eius. Dicta sit qui doloremque pariatur qui. Consequatur fugit id odit porro. Aut cum voluptas repudiandae molestias vitae quia. Omnis vitae quos ut saepe et asperiores vel modi. Exercitationem iste voluptatem accusamus perspiciatis rerum quia harum. Officia consequuntur et doloribus aut consectetur iusto nulla voluptatem. Labore rerum magni fugiat sunt. Natus voluptatem labore officia. Aut quos aperiam distinctio. In illum qui nulla delectus voluptatem in at. Nisi repudiandae est reiciendis esse eligendi sequi. Quia enim qui tenetur eum dolores. Voluptatibus facere aliquid qui. Officia autem aut veritatis accusantium et non. Doloremque quam repellat laboriosam velit saepe reiciendis.', 'images/news-700x435-4.jpg', '2023-06-04 02:26:30', '2023-06-04 03:20:25', 3, 2, NULL, 'En attente'),
(9, 'Vitae odio vitae ducimus tempore ipsam.', 'nesciunt-ea-placeat-magni-illum-quam-est-et', 'A molestias est dolor explicabo fuga commodi. Incidunt corrupti nostrum molestiae aut dolores. Aut minus asperiores quam debitis vel consequuntur adipisci sunt. Delectus culpa voluptas aut officia quisquam. Adipisci unde voluptatem accusantium et non. Aut aliquam consequatur modi sint praesentium officiis. Aut nulla nihil veniam molestiae rem enim repudiandae. Aut nesciunt eos eveniet possimus. Qui illum enim animi labore laudantium. Quas doloribus voluptas eum vitae autem id. Corrupti dolores quia vel facilis necessitatibus velit repellat. Qui recusandae rerum beatae adipisci qui voluptas. Consectetur accusamus enim ratione corrupti laboriosam modi. Aperiam in est repellat magni.', 'images/news-700x435-4.jpg', '2023-06-04 02:26:30', '2023-06-04 02:26:30', 1, 2, NULL, 'En attente'),
(10, 'Facere quam voluptas qui fugiat ad delectus eligendi.', 'facere-quam-voluptas-qui-fugiat-ad-delectus-eligendi', 'Possimus et rerum possimus quaerat placeat ut. Dolorum eum nesciunt voluptas sed. Repellat consequatur eos rerum natus distinctio odit beatae voluptatem. Consequatur cum et laudantium et voluptatem maiores. Enim praesentium iure ut facere pariatur. Quaerat quia modi est fugiat mollitia unde quia. Nihil ut sed corporis deserunt in sed et. Sit sunt harum eum quidem. Reiciendis quia officiis dignissimos. Vel soluta unde odio. Praesentium aut temporibus minus quia laboriosam aliquam. Sapiente ad veritatis illum sequi non doloremque rerum. Et et enim sapiente sunt. Ab quis ratione sunt. Illo et eos et nulla iste. Quasi illo ut eum accusantium rerum. Sit tempore enim excepturi qui qui quia. Hic eos dolor omnis. Et id qui hic ea itaque. Voluptatibus a praesentium earum voluptatem vel placeat.', 'images/news-700x435-4.jpg', '2023-06-04 02:26:30', '2023-06-04 03:21:14', 3, 2, NULL, 'En attente'),
(11, 'Asperiores est incidunt eos fugiat eaque aut debitis.', 'asperiores-est-incidunt-eos-fugiat-eaque-aut-debitis', 'Consectetur et tenetur quia ad. Nihil consectetur magni est quaerat minima est eum ab. Saepe sint aliquam blanditiis nemo est. Pariatur adipisci sed sunt sed debitis. Corrupti vero dolores perspiciatis id ipsum adipisci rerum fugiat. Odit assumenda ipsam laborum cumque autem et sed repellat. At laudantium et sed sapiente non et at. Quos assumenda possimus ipsa. Atque est quibusdam eum iusto natus facere. Laboriosam eos ipsa voluptatum optio atque blanditiis minima. Et consequatur inventore voluptas consequuntur perspiciatis. Ea esse aut occaecati praesentium vero tempore perferendis id. Velit nisi impedit totam voluptatem. Voluptatibus possimus consequatur aut voluptas corrupti. Sed ut est est repudiandae magni voluptatem. Ut dicta nisi provident reprehenderit sequi ut.', 'images/news-700x435-4.jpg', '2023-06-04 02:26:30', '2023-06-04 03:21:25', 1, 2, NULL, 'En attente'),
(12, 'Sit esse itaque qui cum atque nulla beatae.', 'sit-esse-itaque-qui-cum-atque-nulla-beatae', 'Consequatur voluptatem dolorem dicta ut facilis voluptate assumenda. Consequuntur voluptatibus facere rerum commodi ad molestiae ducimus. Voluptas eius nisi qui et delectus. Est iste aliquam magni facilis architecto quia qui. Reiciendis sed temporibus nihil et doloremque rerum totam. Omnis velit quod consequatur magni asperiores quo in. Aut dolore ut est sint rem error quidem. Fuga aliquam dolores in animi repellat est. Dolor commodi non quasi consectetur minima eligendi aliquam. Voluptas enim qui architecto eos accusantium ex tempore. Expedita beatae perspiciatis cumque ut. Magni adipisci et inventore et. Ad neque et est placeat laboriosam architecto iste. Et cupiditate velit fugit reiciendis. Qui magni animi minima numquam exercitationem.', 'images/news-700x435-4.jpg', '2023-06-04 02:26:30', '2023-06-04 03:21:41', 3, 2, NULL, 'En attente'),
(13, 'Possimus quis cum velit atque ea porro.', 'possimus-quis-cum-velit-atque-ea-porro', 'Nemo impedit minima sequi. Laboriosam tempora magni recusandae fugit. Iusto maiores nemo nam et cumque. Eos quos vel consectetur repudiandae veniam. Porro modi et est earum quae aut. Natus dolores enim et ut vitae. Explicabo culpa voluptatibus ducimus dolores ipsum hic ipsum. Alias maxime aut tempore corrupti. Et sunt eligendi tempora cum quo enim reprehenderit. Nihil autem optio quia dolor ea consectetur. Quia odio qui cumque aut occaecati aut. Id consectetur quod doloribus sint dolorum incidunt recusandae. Blanditiis temporibus maxime et non aliquam nihil quo. Tempore voluptatem aut voluptatem necessitatibus ad. Et aut iusto corrupti at quis dolor.', 'images/news-700x435-4.jpg', '2023-06-04 02:26:30', '2023-06-04 03:21:59', 1, 2, NULL, 'En attente'),
(14, 'In vero odio et tenetur.', 'in-vero-odio-et-tenetur', 'Et iusto impedit et est cum voluptatem voluptatem. Ut voluptas praesentium dignissimos velit. Laborum quia ratione at error et. Quas est aut aperiam. Sit sit tenetur qui. Sed cum et deserunt reiciendis quis. Aliquid maiores voluptas repellat qui in quia. Delectus voluptatem nostrum deserunt accusantium dolorem porro dolor et. Maxime est et exercitationem pariatur. Eum illum non id blanditiis et et aut incidunt. Hic fugiat totam harum. Voluptate nam est unde eum a possimus. Vero fugit blanditiis enim et. Laudantium ea dolorem est ut perferendis nulla illum. Laboriosam nihil assumenda nulla quia perspiciatis qui doloribus. Quia et quas id assumenda. Omnis unde id occaecati quia ipsam saepe vel. Labore odio laborum corrupti.', 'images/news-700x435-4.jpg', '2023-06-04 02:26:30', '2023-06-04 03:22:16', 3, 2, NULL, 'En attente'),
(15, 'Veniam sapiente eos odit laborum inventore doloribus.', 'veniam-sapiente-eos-odit-laborum-inventore-doloribus', 'Excepturi deserunt officia voluptatem voluptas. Autem incidunt quia hic esse amet debitis vel. Qui ratione voluptas dolore ullam voluptas quo tempore. Quisquam accusantium qui excepturi. Minima excepturi dolorem consequatur qui ratione expedita officia. Ut ipsum sed voluptas aspernatur blanditiis. Reiciendis accusamus aut eos sequi vero fugit vero minus. Aut hic est distinctio consectetur rem sint. Quis corporis dolores quod eum quia dolorem quidem. Pariatur rerum repellat nisi commodi eum. Perferendis dolore iure est expedita quaerat nulla. Voluptatem voluptas enim alias in possimus eos incidunt. Qui et eos qui sit veritatis magni. Iusto veritatis consequatur et perspiciatis sit ea id.', 'images/news-700x435-4.jpg', '2023-06-04 02:26:30', '2023-06-04 03:22:40', 1, 5, NULL, 'En attente'),
(16, 'A magni dolorum sint accusantium.', 'a-magni-dolorum-sint-accusantium', 'Nostrum vitae nulla eum iste itaque consequatur necessitatibus. Quia libero ea rerum consectetur aliquid ullam atque. Quam repellat sunt consequuntur velit atque numquam rerum. Quaerat et placeat sed ipsum. Sunt hic voluptate voluptas soluta placeat rerum. Expedita doloremque fugit recusandae suscipit porro molestiae. Vitae quo id accusamus mollitia. Sequi incidunt nihil dolorem et. Voluptates in nesciunt quis quia consequuntur a ea. Possimus nostrum sequi ducimus accusamus. Nisi aperiam dignissimos veniam temporibus sit. Fugiat sit mollitia aut quae laudantium. Eos labore nihil debitis illum sunt inventore vel voluptate. Deleniti ullam quas sit natus est quae. Voluptatem architecto ab quisquam voluptas nihil reprehenderit. Provident velit sint perferendis numquam est mollitia.', 'images/news-700x435-4.jpg', '2023-06-04 02:26:30', '2023-06-04 03:22:54', 3, 5, NULL, 'En attente'),
(17, 'Quis doloribus numquam quia sed quaerat dicta ut.', 'quis-doloribus-numquam-quia-sed-quaerat-dicta-ut', 'Quo temporibus quia dolor voluptatem voluptas omnis voluptates. Error architecto iure minima illum quis nobis quibusdam modi. Est ullam consectetur aut impedit aut. Qui quas exercitationem maxime eos at quas. Libero molestiae voluptatem delectus commodi adipisci deserunt voluptas. Consequatur eum quaerat placeat optio est a quasi. In architecto corrupti numquam architecto nisi. Tempore accusantium voluptatem vero ex non. Iure molestiae voluptatibus dolor itaque. Consequuntur soluta occaecati iure ut est quo. Voluptatum et ex voluptates enim. Et sit quibusdam inventore ratione totam quidem tenetur. Similique perferendis illo enim sit iste dolorum. Eos odit et et dignissimos minus aut eos eius. Sint aut exercitationem ut fuga. Accusamus aut molestiae repudiandae.', 'images/news-700x435-4.jpg', '2023-06-04 02:26:30', '2023-06-04 03:23:09', 1, 5, NULL, 'En attente'),
(18, 'Animi perferendis placeat consequatur.', 'animi-perferendis-placeat-consequatur', 'Exercitationem provident unde cupiditate consectetur. Rem consequuntur ut dolores ex voluptatum tempore. Molestiae maxime vitae vel cum. Nisi ut velit eum quas animi. Dolorem temporibus modi voluptatem laboriosam. Sequi magni voluptas consectetur. Laborum molestias doloribus laborum voluptatibus veritatis ea. Fuga voluptate explicabo sit qui eum. Repudiandae voluptas ipsa harum earum sit aut necessitatibus. Omnis dolore sint odio laborum. Quo illum dolore dolor et et reiciendis. In doloremque non possimus blanditiis dolor aliquid. Ipsam officia esse facilis esse a error delectus expedita. Soluta ut non vero iusto ipsum non. Error sequi sit quae velit. Eveniet reprehenderit odit numquam in consequatur a impedit. Dignissimos sed nihil modi molestiae autem laudantium.', 'images/news-700x435-4.jpg', '2023-06-04 02:26:30', '2023-06-04 03:23:17', 3, 5, NULL, 'En attente'),
(19, 'Et blanditiis magni maxime voluptatum sint ut pariatur eum.', 'et-blanditiis-magni-maxime-voluptatum-sint-ut-pariatur-eum', 'Reprehenderit est eaque iste error eum natus reiciendis. Aut qui distinctio inventore sed mollitia quod. Non ratione soluta quibusdam nemo et consequatur suscipit. Dolor voluptatum ut alias repellat. Quibusdam et soluta et ut aut. Nesciunt minus voluptas placeat magni. Totam laborum quibusdam dignissimos. Et quasi fuga totam perferendis cum. Voluptatem sed et facilis voluptatibus voluptates assumenda. Rem ut deleniti blanditiis doloribus. Illum quos molestiae asperiores assumenda consequatur ducimus quas autem. Omnis similique voluptatum sint adipisci. Qui totam dolore velit facere eveniet suscipit. Non quod omnis adipisci sunt deleniti sit qui. Laborum accusantium rerum commodi perferendis ut ipsam. Placeat excepturi ut corrupti similique molestias.', 'images/news-700x435-4.jpg', '2023-06-04 02:26:30', '2023-06-04 03:23:26', 1, 5, NULL, 'En attente'),
(20, 'Excepturi a quia aut fugiat amet non assumenda maxime.', 'excepturi-a-quia-aut-fugiat-amet-non-assumenda-maxime', 'Provident mollitia aut rerum quia ut ut ut. Consequatur officia nihil molestiae voluptate. Aut in et quis eum aut. Mollitia tenetur et maiores voluptas nostrum aliquam magni. Molestiae iste quas repellat sunt qui fugit molestiae. Consectetur nesciunt dolor corporis velit architecto qui et. Maxime veritatis itaque qui sit quia nemo beatae quis. Natus nesciunt ipsam sapiente ipsam fugiat. Quibusdam nulla est fugiat aspernatur asperiores alias. Quo et autem necessitatibus incidunt corrupti. Et facere sed magni et sed. Et ullam eveniet natus earum. Omnis in dignissimos fugit dicta omnis delectus odit consequatur. Saepe qui quos ipsum aut non. Quis amet sed amet velit dolorem quo. Excepturi eum et rem asperiores. Beatae quis recusandae cupiditate repudiandae.', 'images/news-700x435-4.jpg', '2023-06-04 02:26:30', '2023-06-04 03:23:35', 3, 5, NULL, 'En attente'),
(21, 'Voluptatum velit temporibus a pariatur totam.', 'voluptatum-velit-temporibus-a-pariatur-totam', 'Sit eligendi voluptatem doloremque. Sint ea soluta voluptates accusantium. Aut voluptatem quod pariatur. Et placeat porro corrupti maxime officiis. Veniam optio doloribus laborum distinctio laudantium quis. Impedit qui odit reiciendis hic qui vel. Repudiandae rem dolorem ut magni numquam dolores. Nihil atque deserunt quis. Cumque sit impedit et consequatur facere eligendi. Possimus iure reiciendis et voluptatem non. Nostrum dolore earum ea voluptate et. Quia et reprehenderit ipsam repellat ut. Ut aut dolore repellat dolorem. Est facilis eveniet vero. Quia saepe ea omnis quia aut. Rerum voluptate vel nam quasi quia. Eveniet ullam voluptatem suscipit ut error. Ullam et voluptas qui. Voluptatem autem excepturi sunt esse magnam explicabo sit. Fugiat deserunt repellat vitae provident eaque.', 'images/news-700x435-4.jpg', '2023-06-04 02:26:30', '2023-06-04 03:23:44', 1, 5, NULL, 'En attente'),
(22, 'Voluptatem nemo incidunt ea provident cupiditate.', 'voluptatem-nemo-incidunt-ea-provident-cupiditate', 'Omnis expedita omnis impedit et neque. Labore rerum qui at quis. Molestias consequuntur sit odit enim cum. Eligendi quia dolores modi ut. Perspiciatis totam aut est architecto. Deserunt sit rerum dignissimos voluptatibus qui. Quia perferendis aliquid velit sed et voluptatem quia dolores. Inventore quam maxime maiores. Dolore laborum sunt vero ut quae autem voluptatum. Voluptatem neque et minima fugiat. Molestiae consectetur sed impedit libero quas aut. Sequi deleniti magnam rerum sed non qui. Autem est rerum enim ea sint accusamus natus. Voluptatem tempora et iste minus voluptatem ullam. Quam quia eveniet corporis quo quia fuga. Ipsam ratione eius velit veniam natus magnam corporis. Officia id velit sunt voluptatibus expedita sed id.', 'images/news-700x435-4.jpg', '2023-06-04 02:26:30', '2023-06-04 03:23:56', 3, 3, NULL, 'En attente'),
(23, 'Velit tenetur reiciendis voluptatem.', 'velit-tenetur-reiciendis-voluptatem', 'Exercitationem ut quos praesentium aut non. Est unde eligendi ipsum. Voluptatem dolores enim praesentium fugit dolorem quibusdam architecto. Dolores tenetur saepe aspernatur sed ut. Excepturi voluptatem ea quia laborum consequatur. Aut vel non ut dolores distinctio qui illo. Id et eos et porro. Voluptatibus et ipsa odit doloremque dignissimos. Eum voluptatem tenetur in cum. Enim qui consequatur molestias architecto. Laboriosam perspiciatis vel rerum magni. Maxime corrupti nam similique non sint. Dolorum omnis natus quisquam libero quod adipisci. Et eos vel dolores et molestiae rem quidem. Culpa quis illum ex quis quod ad voluptatibus recusandae. Quam et recusandae quia sunt. Velit dicta sed molestias et. Quod sit dolor sunt voluptatem sed. Eveniet quaerat dolore inventore.', 'images/news-700x435-4.jpg', '2023-06-04 02:26:30', '2023-06-04 03:24:05', 1, 3, NULL, 'En attente'),
(24, 'Alias nisi exercitationem debitis ducimus rem qui.', 'alias-nisi-exercitationem-debitis-ducimus-rem-qui', 'Recusandae sequi non aut pariatur corrupti. Et veritatis accusantium ipsa sint. Dicta quidem dolores rerum. Et dicta repellat dolorum labore iusto ut nobis. Ullam aspernatur vitae placeat consequatur eum voluptatum sit et. Nostrum maxime suscipit voluptas rerum earum. Rem sunt reiciendis alias aut ea veniam. Consequatur aliquam itaque amet ipsum. Suscipit mollitia quas doloribus suscipit. Necessitatibus velit labore culpa autem qui qui consequuntur. Consequatur omnis optio rerum commodi error et id nemo. Laborum tempora voluptatem voluptas voluptatem temporibus quia at. Ratione nesciunt ut non rem voluptas nam. Sed repudiandae nostrum sit ullam repellendus ipsa. Dolorem sint dolores consequatur aut hic veniam et. Vitae ea aut sunt deleniti quia. Sequi ea illum et voluptas.', 'images/news-700x435-4.jpg', '2023-06-04 02:26:30', '2023-06-04 03:24:15', 3, 3, NULL, 'En attente'),
(25, 'Et eveniet non molestiae doloremque voluptatem praesentium quia.', 'et-eveniet-non-molestiae-doloremque-voluptatem-praesentium-quia', 'Est numquam quasi laborum exercitationem sequi veniam qui quia. Recusandae accusantium repellat aperiam eos. Qui non dolorem dignissimos aut non. Tenetur voluptas perspiciatis porro quia autem ex architecto. Doloribus eos nihil et molestiae occaecati doloremque. Voluptas aut quos molestias accusamus velit odit enim. Sequi ad veniam architecto molestiae modi. Dolores qui qui quo ducimus sunt ab inventore. Molestias pariatur eius non aut. Voluptatem et quae quidem est. Labore sunt excepturi ut iure placeat. Hic ut blanditiis qui quasi et possimus. Quidem perspiciatis laudantium voluptatibus esse error. Corporis tempora officia laborum iure.', 'images/news-700x435-4.jpg', '2023-06-04 02:26:30', '2023-06-04 03:24:30', 1, 3, NULL, 'En attente'),
(26, 'Soluta aut quo est enim omnis.', 'soluta-aut-quo-est-enim-omnis', 'Molestiae minima ut dignissimos laudantium perspiciatis vel alias quo. Itaque est dolorem itaque iure in ipsum tenetur ut. Ab quidem recusandae cum at reprehenderit ut sequi. Voluptatibus ex esse et accusantium sit sint inventore. Sapiente earum ducimus accusamus natus earum. Et est facere aspernatur reiciendis. Quia saepe modi nulla illo. Qui inventore ad qui assumenda eius aliquam. Vel illum nisi necessitatibus fugit necessitatibus dolores aliquid. Aut laborum aperiam dolores pariatur. Enim unde quas molestias consectetur in. Quia veritatis voluptas impedit aperiam fugit. Enim omnis fuga nam rerum laudantium occaecati ipsa corporis.', 'images/news-700x435-4.jpg', '2023-06-04 02:26:30', '2023-06-04 03:24:41', 1, 3, NULL, 'En attente'),
(27, 'Vero vel non sed explicabo facilis in.', 'vero-vel-non-sed-explicabo-facilis-in', 'Est tempora magni doloribus temporibus eius eum et vero. Officiis rerum itaque officia recusandae. Mollitia nulla et omnis enim. Impedit odio itaque temporibus sed qui maiores sed. Nemo dolore non aut eveniet. Qui sed odit asperiores. Quibusdam nobis deleniti qui quod sit. Fuga reiciendis eius at et et nulla. Cupiditate sed dicta et enim ipsum architecto. Incidunt et excepturi earum unde accusantium voluptatem deserunt. Maiores cupiditate quia excepturi nobis blanditiis ut. Assumenda aut ex atque quasi omnis. Architecto aliquid quo minima molestias cupiditate tenetur qui. Eum dolores accusamus dignissimos ut dolore non. Odit nihil mollitia ea dolore eum reiciendis quos sunt. Doloribus perferendis labore alias deserunt doloribus. Dignissimos iusto tempore cum sint neque.', 'images/news-700x435-4.jpg', '2023-06-04 02:26:30', '2023-06-04 03:24:51', 1, 3, NULL, 'En attente'),
(28, 'Ut explicabo corrupti sunt.', 'ut-explicabo-corrupti-sunt', 'Sequi delectus eligendi voluptas ut et. Deleniti enim non ex voluptatem quos aperiam. Ipsum vel nulla quidem accusamus provident rerum. Excepturi possimus perspiciatis minus enim libero. Unde et odio architecto sunt doloremque rem dolores. Aliquam debitis sed id vel sunt. Dolore eum beatae reiciendis odio quidem voluptatem earum. Nesciunt est sequi modi odio deserunt ipsam fuga corporis. Vitae quis et id nemo eum. Velit delectus omnis animi rerum ipsa nulla repellat. Et reiciendis cum quia dolorem voluptatibus possimus omnis. Illum commodi at eligendi rerum velit. Nihil cupiditate error sapiente. Harum asperiores deleniti quasi.', 'images/news-700x435-4.jpg', '2023-06-04 02:26:30', '2023-06-04 03:25:01', 1, 3, NULL, 'En attente'),
(29, 'Quas illum ducimus distinctio itaque consequatur.', 'quas-illum-ducimus-distinctio-itaque-consequatur', 'Accusantium aspernatur quis adipisci ut in porro quo. Consequuntur culpa quia ut consequatur aut. Consequatur maiores cupiditate quis. Voluptas voluptatem nihil repudiandae reprehenderit similique culpa. Saepe sapiente voluptate accusantium voluptatum architecto voluptates explicabo. Facere voluptatem aut illo et non nihil. Tenetur esse nemo asperiores excepturi nostrum dolor voluptas. Aspernatur quod et nulla velit voluptatem sed. Dolorem velit suscipit accusantium quisquam doloribus consectetur qui. Nemo non sint commodi harum. Id accusamus ut et facere quaerat alias iure doloribus. Et qui debitis quia laboriosam inventore sed. Sit a sint praesentium iste in sequi sed.', 'images/news-700x435-4.jpg', '2023-06-04 02:26:30', '2023-06-04 03:25:22', 1, 4, NULL, 'En attente'),
(30, 'Molestiae nesciunt molestiae eos nulla nulla ut dicta.', 'molestiae-nesciunt-molestiae-eos-nulla-nulla-ut-dicta', 'Ab consequatur reprehenderit cum atque autem labore non. Et ratione distinctio est nulla omnis. Doloremque neque non et ab sed. Recusandae voluptas quae nisi et. Ea quasi autem non veniam nemo. Eum sapiente molestiae ullam nostrum nostrum. Eos et quisquam iure debitis aut eius voluptatem culpa. Quod debitis voluptatem vero ducimus voluptate. Est recusandae consectetur fugit et. Et et nesciunt et expedita sunt. Voluptatem debitis saepe cum maiores cupiditate. Veritatis ea ut ut tempora facere ut magni voluptatibus. Quasi harum quasi et autem. Accusamus suscipit sit eligendi. Tempora et accusantium voluptatem nisi velit earum. Odit excepturi ut voluptatum est. Voluptas provident voluptas sequi et praesentium.', 'images/news-700x435-4.jpg', '2023-06-04 02:26:30', '2023-06-04 03:25:31', 1, 4, NULL, 'En attente'),
(31, 'Velit sequi eaque itaque ea possimus corrupti autem.', 'velit-sequi-eaque-itaque-ea-possimus-corrupti-autem', 'Earum velit est minus ut voluptas labore est. Numquam illo aperiam aut repellendus. Nemo iste rerum optio rem ratione quae quibusdam quaerat. Odio sint quia nemo praesentium. Eos cumque consequatur harum et omnis qui ut quia. Cupiditate sit ad eos explicabo atque similique incidunt. Ut nesciunt labore est perspiciatis perspiciatis ducimus laudantium. Nam beatae ut et rerum sint sint eius. In ratione cumque provident. Fugiat sequi ut excepturi mollitia. Dolor excepturi maiores et ut non nostrum pariatur eius. Dicta et sit ullam itaque quam ut. Quia reiciendis et culpa fugit soluta architecto. Dicta doloribus fugiat voluptates maxime quaerat fugiat necessitatibus. Eum impedit alias quia enim rerum. Quisquam eum officia quae omnis. Aut ab esse totam exercitationem ut.', 'images/news-700x435-4.jpg', '2023-06-04 02:26:30', '2023-06-04 03:25:57', 1, 4, NULL, 'En attente'),
(32, 'Voluptatibus ipsa beatae et aut earum dicta velit.', 'voluptatibus-ipsa-beatae-et-aut-earum-dicta-velit', 'Aut a ea est qui ipsum nam. Qui dignissimos impedit voluptatem architecto odio ut quis molestiae. Quos nihil doloribus eum molestiae quas et voluptatum. Et exercitationem sapiente at eligendi dolorem quia ipsa. Temporibus sit velit et. Veniam ea hic ex et magnam totam. Occaecati nulla a impedit voluptate corrupti magni. Voluptas velit et recusandae et ullam. Consequatur repudiandae eligendi expedita quisquam. Officiis quidem alias et quas. Aperiam nam ea labore ut. Fugit voluptate quia ipsa deserunt. Modi consequatur aut rerum in est quia laboriosam. Facilis quia recusandae dicta deleniti. Excepturi ipsa odit est autem minus tempore suscipit perferendis. Et cumque numquam voluptatibus tempora vel minima sit sed. Aut quae non vitae molestiae ex soluta. Doloribus ad sed maxime.', 'images/news-700x435-4.jpg', '2023-06-04 02:26:30', '2023-06-04 03:26:11', 1, 4, NULL, 'En attente'),
(33, 'Magnam et a sed sit eveniet.', 'magnam-et-a-sed-sit-eveniet', 'Qui dolor error deserunt sint laudantium in. Et excepturi perferendis voluptatem possimus. Nihil consequatur odit commodi odio ea praesentium. Unde assumenda earum maiores eveniet. Id eum voluptatem hic aliquam enim. Nobis quos dolores asperiores aut. Delectus praesentium similique praesentium ducimus. Cupiditate iste qui ea aut ullam repellat repellendus unde. Ut quis aut quas dignissimos dolor quia quasi. Voluptatem ipsum est quia et odit atque. Accusantium sit et adipisci odio. Laudantium ut distinctio autem labore sed non. Dignissimos voluptatem voluptas quae saepe quidem nesciunt laudantium. Consectetur rem sunt rerum.', 'images/news-700x435-4.jpg', '2023-06-04 02:26:30', '2023-06-04 03:26:31', 1, 4, NULL, 'En attente'),
(34, 'Dolorem modi suscipit sit adipisci.', 'dolorem-modi-suscipit-sit-adipisci', 'Quae qui quo commodi ea. Exercitationem mollitia ratione ut ut. Exercitationem amet possimus qui sit in quidem. Eligendi et nobis cumque sint et numquam veniam. Est itaque ab vitae ea. Quisquam nostrum nisi qui soluta expedita. Et autem a reprehenderit repudiandae et et qui veniam. Quidem quis necessitatibus quisquam eos sed. Magnam nesciunt hic voluptate et natus sunt adipisci. Labore unde labore ut aspernatur quas. Laboriosam qui adipisci qui omnis occaecati iure. Corrupti error voluptas quibusdam ex. Placeat reiciendis impedit est esse sit beatae. Ipsa in mollitia nemo consectetur et incidunt. Explicabo sed non illo assumenda reprehenderit dolorem perferendis. Quia sunt in illum omnis molestias.', 'images/news-700x435-4.jpg', '2023-06-04 02:26:30', '2023-06-04 03:26:42', 1, 4, NULL, 'En attente'),
(35, 'Est voluptatem et totam quod pariatur non quam et.', 'est-voluptatem-et-totam-quod-pariatur-non-quam-et', 'Qui optio vel aut cumque maiores. Architecto quibusdam maiores exercitationem dolores odio. Et consequatur rem nulla quasi. Dolorem at ea molestiae eum. Illum cupiditate et deserunt. Quibusdam est facere ex aut magnam consequuntur architecto. Aliquid quia illo consequuntur qui consequatur. Minima corrupti autem voluptatem quia odio. Quo minus voluptas quia sed esse quae modi. Perferendis consequatur est cumque voluptate consequuntur. Mollitia asperiores dolores ullam non soluta et nemo. Nisi qui quam id quisquam. Iste necessitatibus provident dicta ratione ut eaque. Rerum possimus et maxime rerum qui odio aut. Quo esse et adipisci. Laborum quas et veritatis et vel. Quisquam qui ut facilis odio sed. Voluptas eaque et ducimus sint ipsum error sed.', 'images/news-700x435-4.jpg', '2023-06-04 02:26:30', '2023-06-18 06:24:19', 1, 4, NULL, 'En attente'),
(37, 'Gate policy security test editor', 'gate-policy-security-test-editor', 'Any subject is related at least to one specific issue in our life. Knowing that, I would choose network engineering. There are actually multiple reasons and one remarkable thing is the network issue in my country. Provided that there is no mobile phone and network, how could we talk to a close person who has travelled?\r\nActually, life is unimaginable without mobile phones, network and internet. Thanks to these things people can hear from their family while being everywhere in this world. It does not only serve in cellphone communication, but also helps people to have access to information on time and easily through blog and social media. I have been using them for many years so far. However, I am so curious, I would like to know the ins and outs about how they have been created and work than only using them. Sometimes, when I am having an issue with my network I automatically get mad at the service provider and start gossiping “if only I could create one network and make it more efficient”. Moreover, life have become difficult when it comes to having to buy data bundle in order to go online and surfer over the worldwide, the more the service providers increase the fee the less the data bundle last. For instance, when you buy 185.000GNF data bundle, normally it is supposed to last 30 days but within 15 it is finished. Not long time ago, Guinean people stood against this traffic by going on strike so as to put the brakes on data bundle consumption. However, it led them to nothing because the network service provider was brash because of lack of concurrency.\r\nTo end up with this kind of situation, I would definitely study network engineering in order to fix all those issues, to create a network, make it accessible to everyone regarding their financial situation.', 'images/1686972321-news-700x435-1.jpg', '2023-06-17 03:25:21', '2023-06-29 03:15:26', 1, 2, NULL, 'Poster');

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE `post_tag` (
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_tag`
--

INSERT INTO `post_tag` (`post_id`, `tag_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 1),
(2, 2),
(2, 3),
(3, 1),
(3, 2),
(3, 3),
(4, 1),
(4, 2),
(4, 3),
(5, 1),
(5, 2),
(5, 3),
(6, 1),
(6, 2),
(6, 3),
(7, 1),
(7, 2),
(7, 3),
(8, 4),
(8, 5),
(10, 4),
(10, 5),
(11, 4),
(11, 5),
(12, 4),
(12, 5),
(13, 4),
(13, 5),
(14, 4),
(14, 5),
(15, 7),
(16, 7),
(17, 7),
(18, 7),
(19, 7),
(20, 7),
(21, 7),
(22, 8),
(22, 9),
(23, 8),
(23, 9),
(24, 8),
(24, 9),
(25, 8),
(25, 9),
(26, 8),
(26, 9),
(27, 8),
(27, 9),
(28, 8),
(28, 9),
(29, 7),
(30, 7),
(31, 6),
(32, 6),
(32, 7),
(33, 6),
(33, 7),
(34, 6),
(34, 7),
(35, 6),
(35, 7),
(37, 4),
(37, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`, `role`, `deleted_at`) VALUES
(1, 'HTML', '2023-06-04 02:26:30', '2023-06-04 02:26:30', 1, NULL),
(2, 'CSS', '2023-06-04 02:26:30', '2023-06-04 02:26:30', 1, NULL),
(3, 'JAVASCRIPT', '2023-06-04 02:26:30', '2023-06-04 02:26:30', 1, NULL),
(4, 'FOOTBALL', '2023-06-04 02:26:30', '2023-06-04 02:26:30', 1, NULL),
(5, 'BASKETBALL', '2023-06-04 02:26:30', '2023-06-04 02:26:30', 1, NULL),
(6, 'AGRICULTURE', '2023-06-04 02:26:30', '2023-06-04 02:26:30', 1, NULL),
(7, 'INVESTISEMENT', '2023-06-04 02:26:30', '2023-06-04 02:26:30', 1, NULL),
(8, 'MANIFESTATION', '2023-06-04 02:26:30', '2023-06-04 02:26:30', 1, NULL),
(9, 'CNRD', '2023-06-04 02:26:30', '2023-06-04 02:26:30', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `role` enum('admin','user','editor') NOT NULL DEFAULT 'user',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `image`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin PK', 'admin@gmail.com', 'images/user.jpg', 'admin', '2023-06-04 02:26:30', '$2y$10$V1v7J1lTCvMWZZcMjASLB.4Jjd1ebDOwGuKX1ShIS0yloQIkC8wtK', 'XE6TPvBhCaS2XW3qbyeI2QqpotEIsR4Q3xrnYkHpfMiUtkrFIrzsZilcKvha', '2023-06-04 02:26:30', '2023-06-11 06:12:18'),
(2, 'User PK', 'user@gmail.com', 'images/user.jpg', 'user', '2023-06-04 02:26:30', '$2y$10$C258/hFN6idj19udOfGOROOz1N6EDpk8me.aQgPETMkgaluXrFxE.', 'qe9AoafUrkeQiVzWG9MWAgC3gpPe0gbJmpjGRjlpyhDmNEkl2LULTHBvSxTh', '2023-06-04 02:26:30', '2023-06-14 02:59:43'),
(3, 'Editor PK', 'editor@gmail.com', 'images/user.jpg', 'editor', '2023-06-04 02:26:30', '$2y$10$Ju2gy4Vf.iijHVuGoN7ojOXnfXwFoL3Addu5kTL3Fo21PRN/ES2Km', 'yT3FZ5mKplGbzae53X72fqvZQowNPdztc75Mdidm5MbfirLIQgRNdrkOki8m', '2023-06-04 02:26:30', '2023-06-04 02:26:30'),
(4, 'jean', 'jean3@gmail.com', NULL, 'user', '2023-06-11 06:45:17', '$2y$10$/wgidFXZfHPBrMLYNGUMCOwUVCQFOCCXRlqmSmTdoXelN2Pfk9erG', NULL, '2023-06-11 06:28:29', '2023-06-11 06:45:17'),
(5, 'PathéPK', 'pk8diallo@gmail.com', NULL, 'user', NULL, '$2y$10$EjHjkRDhyXGAg3eay24vnOcGpZjuddTdaAyefm.BrscBkcL/TxQ8e', NULL, '2023-06-11 06:51:57', '2023-06-11 06:51:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_post_id_foreign` (`post_id`),
  ADD KEY `comments_client_id_foreign` (`client_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`post_id`,`tag_id`),
  ADD KEY `post_tag_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD CONSTRAINT `post_tag_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `post_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
