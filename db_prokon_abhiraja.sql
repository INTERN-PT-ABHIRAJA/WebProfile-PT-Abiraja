-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: ballast.proxy.rlwy.net    Database: railway
-- ------------------------------------------------------
-- Server version	9.3.0

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `anak_perusahaan`
--

DROP TABLE IF EXISTS `anak_perusahaan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `anak_perusahaan` (
  `id_anak_perusahaan` int unsigned NOT NULL AUTO_INCREMENT,
  `id_user` int unsigned NOT NULL,
  `id_kategori` int unsigned DEFAULT NULL,
  `nama_perusahaan` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `alamat` text COLLATE utf8mb4_unicode_ci,
  `telepon` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `berdiri_sejak` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_anak_perusahaan`),
  KEY `anak_perusahaan_id_user_foreign` (`id_user`),
  KEY `anak_perusahaan_id_kategori_foreign` (`id_kategori`),
  CONSTRAINT `anak_perusahaan_id_kategori_foreign` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE SET NULL,
  CONSTRAINT `anak_perusahaan_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `anak_perusahaan`
--

LOCK TABLES `anak_perusahaan` WRITE;
/*!40000 ALTER TABLE `anak_perusahaan` DISABLE KEYS */;
INSERT INTO `anak_perusahaan` VALUES (4,1,1,'DOKTER KONTEN INDONESIA','Dr Konten Indonesia adalah perusahaan\r\nyang bergerak di bidang layanan digital\r\ndan administrasi bisnis, membantu UMKM\r\ndan perusahaan dalam mengelola aspek\r\npenting usaha mereka. Dengan tim\r\nprofesional dan berpengalaman, kami\r\nmenghadirkan solusi komprehensif untuk\r\nmeningkatkan brand awareness,\r\nketeraturan administrasi, serta\r\nkepatuhan terhadap regulasi bisnis.','Bandung','+62 851-5620-9325','perusahaan/foto/cUy8HHlj3XYh8ZE7tDYyUQffw6pqEh5FD1I4Mw6T.png',NULL,'2025-05-08','2025-06-16 03:23:37','2025-06-16 03:23:37'),(5,1,3,'In The Kost Catering','Layanan katering yang menyediakan makanan sehat, lezat, dan beergizi langsung ke depan puntu rumah pelanggan.','Bandung','+62 851-5620-9325','perusahaan/foto/Nl1uFyZ0JJA8O51kbeZQ9tBQIAkNQvi7EOBkPt76.jpg',NULL,'2020-07-16','2025-06-16 03:27:01','2025-06-16 03:27:01'),(6,1,10,'Qitna Fashion','Qitna Fashion adalah merek busana yang mengusung konsep keberlanjutan melaluoi pemanfaatan kain perca menjadi pakaian modis dan unik. Qitna Fashion juga berfokus pada pembuataon outwer limited edition. Kami menawarkan pengalaman eksklusif bagi para klien dengan desain inovatif dan berkualitas.','Bandung','+62 851-5620-9325','perusahaan/foto/JR4hFGgvelokyBcS5vRvIn5CGxXN42oUkumbIgTn.png',NULL,'2021-03-16','2025-06-16 03:58:25','2025-06-16 03:58:25'),(7,1,1,'NETSKILLS','Perusahaan jasa untuk menjadi content creator','Jakarta Bandung','+62 851-5620-9325','perusahaan/foto/3O4SfI8xqG9HXoDiBP4AWtHvUZFOqFDsPOC9fFKP.jpg',NULL,'2025-06-16','2025-06-16 04:01:52','2025-06-16 04:01:52'),(8,1,13,'Art Wood Studio','Artwood Studio adalah penyedia jasa pembuatan mebel custom berkualitas tinggi yang menggabungkan seni, fungsionalitas, dan ketahanan. Kami menghadirkan furnitur yang dirancang khusus sesuai kebutuhan dan gaya hidup Anda, dengan sentuhan estetika yang elegan dan material pilihan.','Bandung','+62 851-5620-9325','perusahaan/foto/1750060247_XpMyikl3ts.png',NULL,'2025-06-15','2025-06-16 07:50:47','2025-06-16 07:50:47');
/*!40000 ALTER TABLE `anak_perusahaan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `benefits`
--

DROP TABLE IF EXISTS `benefits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `benefits` (
  `id_benefit` int unsigned NOT NULL AUTO_INCREMENT,
  `id_produk` int unsigned NOT NULL,
  `nama_benefit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_benefit`),
  KEY `benefits_id_produk_foreign` (`id_produk`),
  CONSTRAINT `benefits_id_produk_foreign` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `benefits`
--

LOCK TABLES `benefits` WRITE;
/*!40000 ALTER TABLE `benefits` DISABLE KEYS */;
INSERT INTO `benefits` VALUES (4,3,'Manajemen akun sosial media','2025-06-16 04:05:41','2025-06-16 04:05:41'),(5,3,'Pembuatan konten kreatif dan menarik','2025-06-16 04:05:41','2025-06-16 04:05:41'),(6,3,'Strategi pemasaran digital untuk meningkatkan engagement','2025-06-16 04:05:41','2025-06-16 04:05:41'),(7,4,'Pembuatan dan pengurusan izin usaha','2025-06-16 04:08:43','2025-06-16 04:08:43'),(8,4,'Pendaftaran merek dagang dan Hak Kekayaan Intelektual (HKI)','2025-06-16 04:08:43','2025-06-16 04:08:43'),(9,4,'Konsultasi hukum bisnis','2025-06-16 04:08:43','2025-06-16 04:08:43'),(10,5,'Foto produk berkualitas tinggi untuk e-commerce dan katalog','2025-06-16 04:11:15','2025-06-16 04:11:15'),(11,5,'Pengeditan gambar profesional agar produk lebih menarik','2025-06-16 04:11:15','2025-06-16 04:11:15'),(12,5,'Pembuatan video pendek untuk promosi','2025-06-16 04:11:15','2025-06-16 04:11:15'),(13,6,'Penyusunan laporan keuangan bulanan dan tahunan','2025-06-16 04:13:34','2025-06-16 04:13:34'),(14,6,'Konsultasi dan perencanaan pajak','2025-06-16 04:13:34','2025-06-16 04:13:34'),(15,6,'Pelaporan pajak secara tepat waktu dan sesuai regulasi','2025-06-16 04:13:34','2025-06-16 04:13:34'),(16,7,'Pembuatan logo bisnis yang unik dan menarik','2025-06-16 04:16:37','2025-06-16 04:16:37'),(17,7,'Desain kemasan produk yang fungsional dan estetis','2025-06-16 04:16:37','2025-06-16 04:16:37'),(18,7,'Desain banner, spanduk , brosur , dan materi promosi lainnya','2025-06-16 04:16:37','2025-06-16 04:16:37'),(19,8,'Menu Fleksibel: Konsumen bisa memilih dan menyesuaikan menu sesuai selera dan kebutuhan acara.','2025-06-16 05:22:14','2025-06-16 05:22:14'),(20,8,'Porsi Terukur: Setiap rice box disiapkan dengan porsi ideal, menghindari pemborosan.','2025-06-16 05:22:14','2025-06-16 05:22:14'),(21,8,'Bahan Berkualitas: Menggunakan bahan segar dan higienis untuk menjaga cita rasa dan kesehatan.','2025-06-16 05:22:14','2025-06-16 05:22:14'),(22,8,'Tepat Waktu: Pengantaran selalu on-time, menjaga kelancaran acara.','2025-06-16 05:22:14','2025-06-16 05:22:14'),(23,9,'Meningkatkan Penampilan Instan','2025-06-16 08:05:34','2025-06-16 08:05:34'),(24,9,'Mudah Dipadupadankan (Mix & Match Friendly)','2025-06-16 08:05:34','2025-06-16 08:05:34'),(25,9,'Cocok untuk Berbagai Acara','2025-06-16 08:05:34','2025-06-16 08:05:34'),(26,10,'Desain Longgar dan Nyaman','2025-06-16 08:14:20','2025-06-16 08:14:20'),(27,10,'Tampilan Chic dengan Usaha Minimal','2025-06-16 08:14:20','2025-06-16 08:14:20'),(28,10,'Cocok untuk Layering di Berbagai Suhu','2025-06-16 08:14:20','2025-06-16 08:14:20'),(29,11,'Tampilan Estetik dan Natural','2025-06-16 08:21:13','2025-06-16 08:21:13'),(30,11,'Cocok untuk Berbagai Gaya Interior','2025-06-16 08:21:13','2025-06-16 08:21:13'),(31,11,'Ramah Lingkungan','2025-06-16 08:21:13','2025-06-16 08:21:13'),(32,12,'Desain Kemasan Eksklusif & Bisa Custom','2025-06-16 08:25:53','2025-06-16 08:25:53'),(33,12,'Praktis dan Siap Saji','2025-06-16 08:25:53','2025-06-16 08:25:53'),(34,12,'Pilihan Menu Variatif','2025-06-16 08:25:53','2025-06-16 08:25:53'),(35,12,'Cocok untuk Berbagai Jenis Acara','2025-06-16 08:25:53','2025-06-16 08:25:53');
/*!40000 ALTER TABLE `benefits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detail_foto_produk`
--

DROP TABLE IF EXISTS `detail_foto_produk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `detail_foto_produk` (
  `id_foto` int unsigned NOT NULL AUTO_INCREMENT,
  `id_produk` int unsigned NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_foto`),
  KEY `detail_foto_produk_id_produk_foreign` (`id_produk`),
  CONSTRAINT `detail_foto_produk_id_produk_foreign` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detail_foto_produk`
--

LOCK TABLES `detail_foto_produk` WRITE;
/*!40000 ALTER TABLE `detail_foto_produk` DISABLE KEYS */;
INSERT INTO `detail_foto_produk` VALUES (3,3,'produk/detail_foto/d3Jct7HskyyRIQqssFgH0vAFUsqwomqMBlwpwPOt.png','2025-06-16 04:05:41','2025-06-16 04:05:41'),(4,7,'produk/detail_foto/TTCLVonYV3xYM1ade38VDXhZxfsmIUQFA96pAeMq.png','2025-06-16 04:16:37','2025-06-16 04:16:37'),(5,7,'produk/detail_foto/iPu1ipmmP8fOaExf9DouSNrM2xC4F63CS1isDLQy.png','2025-06-16 04:16:37','2025-06-16 04:16:37'),(6,7,'produk/detail_foto/ONffJh3g3WiM7g5PCsPdjM0gsZG7jiIytbTZGdui.png','2025-06-16 04:16:37','2025-06-16 04:16:37'),(7,8,'produk/detail_foto/1750051334_BI2D9IHMpa.png','2025-06-16 05:22:14','2025-06-16 05:22:14'),(8,9,'produk/detail_foto/1750061134_ZtHTzkDH29.png','2025-06-16 08:05:34','2025-06-16 08:05:34'),(9,9,'produk/detail_foto/1750061134_e9noDoT0Tz.png','2025-06-16 08:05:34','2025-06-16 08:05:34'),(10,10,'produk/detail_foto/1750061660_D0tsU4Bwb4.png','2025-06-16 08:14:20','2025-06-16 08:14:20'),(11,11,'produk/detail_foto/1750062073_eAhCmnlLe9.png','2025-06-16 08:21:13','2025-06-16 08:21:13'),(12,12,'produk/detail_foto/1750062353_wPnfsv5own.png','2025-06-16 08:25:53','2025-06-16 08:25:53');
/*!40000 ALTER TABLE `detail_foto_produk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kategori`
--

DROP TABLE IF EXISTS `kategori`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kategori` (
  `id_kategori` int unsigned NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_kategori` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori`
--

LOCK TABLES `kategori` WRITE;
/*!40000 ALTER TABLE `kategori` DISABLE KEYS */;
INSERT INTO `kategori` VALUES (1,'content','Perusahaan untuk membuat atau manage content di social media',NULL,NULL),(3,'Catering','Perusahaan yang menyediakan jasa makanan dan minuman untuk acara, instansi, atau perorangan.',NULL,NULL),(4,'Pendidikan','Lembaga atau badan usaha yang menyediakan layanan pendidikan formal maupun non-formal.',NULL,NULL),(5,'Retail','Usaha yang menjual barang secara langsung kepada konsumen, baik online maupun offline.',NULL,NULL),(6,'Keuangan','Perusahaan di bidang perbankan, fintech, asuransi, atau investasi.',NULL,NULL),(7,'Properti','Perusahaan yang menyediakan jasa konsultasi profesional di bidang bisnis, hukum, atau keuangan.',NULL,NULL),(8,'Agrikultur','Perusahaan yang bergerak di bidang pertanian, peternakan, atau perikanan.',NULL,NULL),(9,'Energi','Perusahaan yang menyediakan sumber daya energi seperti listrik, bahan bakar, atau energi terbarukan.',NULL,NULL),(10,'Fashion','Perusahaan yang bergerak di bidang pakaian, aksesoris, dan produk gaya hidup seperti butik, brand pakaian, atau produsen sepatu.',NULL,NULL),(11,'Edukasi','Perusahaan di bidang edukasi yang bertujauan untuk pemberian ilmu yang bermanfaat',NULL,NULL),(12,'Branding',NULL,NULL,NULL),(13,'Kerajinan',NULL,NULL,NULL);
/*!40000 ALTER TABLE `kategori` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `media`
--

DROP TABLE IF EXISTS `media`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `media` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `file_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `media`
--

LOCK TABLES `media` WRITE;
/*!40000 ALTER TABLE `media` DISABLE KEYS */;
/*!40000 ALTER TABLE `media` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2025_05_10_151838_update_users_table',1),(6,'2025_05_10_151840_create_kategori_table',1),(7,'2025_05_10_151845_create_anak_perusahaan_table',1),(8,'2025_05_10_151853_create_produk_table',1),(9,'2025_05_24_071414_create_notifications_table',2),(10,'2025_05_10_153715_create_media_table',3),(11,'2025_06_13_123651_drop_and_recreate_benefits_table',4),(12,'2025_06_13_124014_create_detail_foto_produk_table',5),(13,'2025_06_13_124556_add_rating_to_produk_table',6),(14,'2025_06_13_125335_remove_columns_from_produk_table',7);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint unsigned NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notifications`
--

LOCK TABLES `notifications` WRITE;
/*!40000 ALTER TABLE `notifications` DISABLE KEYS */;
/*!40000 ALTER TABLE `notifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produk`
--

DROP TABLE IF EXISTS `produk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `produk` (
  `id_produk` int unsigned NOT NULL AUTO_INCREMENT,
  `id_anak_perusahaan` int unsigned NOT NULL,
  `nama_produk` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_produk` text COLLATE utf8mb4_unicode_ci,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rating` decimal(3,2) DEFAULT '0.00',
  PRIMARY KEY (`id_produk`),
  KEY `produk_id_anak_perusahaan_foreign` (`id_anak_perusahaan`),
  CONSTRAINT `produk_id_anak_perusahaan_foreign` FOREIGN KEY (`id_anak_perusahaan`) REFERENCES `anak_perusahaan` (`id_anak_perusahaan`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produk`
--

LOCK TABLES `produk` WRITE;
/*!40000 ALTER TABLE `produk` DISABLE KEYS */;
INSERT INTO `produk` VALUES (3,4,'Pengelolaan Media Sosial','Penelolaan Media sosial untuk memaksimalkan pemasaran digital dan peningkatan engagement.','produk/foto/xQ079pAgZZPll4LHsz7iMUucJp9kxSCSNP4LLi5a.png','2025-06-16 04:05:41','2025-06-16 04:05:41',5.00),(4,4,'Legalitas Usaha','Pembuatan legalitas usaha  seperti Hak Kekayaan Intelektual (HKI)','produk/foto/4tAPzqQx1RevKFv5x6lzAqvMv0G35HkQMxnNQJUi.png','2025-06-16 04:08:43','2025-06-16 04:09:05',5.00),(5,4,'Fotografi Produk','Jasa untuk fogorafi produk berkualitas tinggi untuk e-commerce dan katalog','produk/foto/jfyxvayzMqDA9xQ1h76y2ZvALaZSDfFYDWW92mor.png','2025-06-16 04:11:15','2025-06-16 04:11:31',5.00),(6,4,'Laporan Keuangan dan Pajak','Pembuatan laporan keuangan baik tahunan maupun bulanan dan perencanaan pajak','produk/foto/1750060526_cT8t9guOIV.png','2025-06-16 04:13:34','2025-06-16 07:55:26',5.00),(7,4,'Desain Grafis Profesional','Pembuatan desain grafis profesional untuk bisnis dan promosi lainnya','produk/foto/BZ6COO9Ahly3pumplusTWF46zE6F8gRX9qIbS2oU.png','2025-06-16 04:16:37','2025-06-16 04:16:37',5.00),(8,5,'Custom Rice Box','Pembuatan makanan box dengan kostumisasi konsumen','produk/foto/1750051334_PC4CJ4GCKc.png','2025-06-16 05:22:14','2025-06-16 05:22:14',5.00),(9,6,'Outer Dress',NULL,'produk/foto/1750061134_RauaVkxGa8.png','2025-06-16 08:05:34','2025-06-16 08:05:34',5.00),(10,6,'Outer Cardigan Kimono','Potongan kimono yang loose cocok untuk semua bentuk tubuh dan memberi ruang gerak yang leluasa.','produk/foto/1750061660_M6fWAKrWAu.png','2025-06-16 08:14:20','2025-06-16 08:14:20',5.00),(11,8,'Kerajinan dekorasi berbahan kayu','Kerajinan kayu yang elegan dengan kualitas kayu yang terbaik.','produk/foto/1750062073_M6rhAsK0cm.png','2025-06-16 08:21:13','2025-06-16 08:21:13',5.00),(12,5,'Custom Scanckbox','Kostum SnackBox adalah kemasan makanan ringan berbentuk box yang dirancang secara khusus dengan tampilan menarik dan desain custom sesuai kebutuhan acara atau branding. Dikemas rapi dan higienis, SnackBox ini cocok untuk berbagai acara seperti seminar, ulang tahun, rapat, syukuran, dan event lainnya.','produk/foto/1750062353_1ZYTSs70N8.png','2025-06-16 08:25:53','2025-06-16 08:25:53',5.00);
/*!40000 ALTER TABLE `produk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id_user` int unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','owner','customer') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'customer',
  `alamat` text COLLATE utf8mb4_unicode_ci,
  `telepon` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','admin@example.com',NULL,'$2y$12$IXPAEPbTE7vjUYTpQnCXZu5MviK7WTOBIhjaIgdInDw8KR47Tv7T2','admin',NULL,NULL,NULL,'2025-05-24 00:11:18','2025-05-24 00:11:18'),(2,'Raffi Adzril','ravdzril@abhiraja.com',NULL,'$2y$12$MrB3JgJF6jTQCWxVd34qPeexvqniV5ImFhI/6MhDmQNmBnLtxaz6C','admin',NULL,NULL,NULL,'2025-05-24 22:21:26','2025-06-16 12:15:22');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-06-16 19:32:18
