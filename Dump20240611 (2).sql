-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: mew
-- ------------------------------------------------------
-- Server version	8.3.0

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `blog_comments`
--

DROP TABLE IF EXISTS `blog_comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `blog_comments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `blog_id` int unsigned NOT NULL,
  `user_id` int unsigned DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `messages` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_comments`
--

LOCK TABLES `blog_comments` WRITE;
/*!40000 ALTER TABLE `blog_comments` DISABLE KEYS */;
INSERT INTO `blog_comments` VALUES (1,1,1,'user1@example.com','User 1','Great article!','2024-03-30 08:00:02','2024-03-30 08:00:02'),(2,1,2,'user2@example.com','User 2','Very informative!','2024-03-30 08:00:02','2024-03-30 08:00:02'),(3,2,3,'user3@example.com','User 3','I learned a lot, thanks!','2024-03-30 08:00:02','2024-03-30 08:00:02'),(4,2,4,'user4@example.com','User 4','This is awesome!','2024-03-30 08:00:02','2024-03-30 08:00:02'),(5,3,5,'user5@example.com','User 5','Looking forward to more content!','2024-03-30 08:00:02','2024-03-30 08:00:02'),(6,3,6,'user6@example.com','User 6','Keep up the good work!','2024-03-30 08:00:02','2024-03-30 08:00:02'),(7,4,7,'user7@example.com','User 7','This helped me a lot!','2024-03-30 08:00:02','2024-03-30 08:00:02'),(8,4,8,'user8@example.com','User 8','I have a question...','2024-03-30 08:00:02','2024-03-30 08:00:02'),(9,5,9,'user9@example.com','User 9','Nice article!','2024-03-30 08:00:02','2024-03-30 08:00:02'),(10,5,10,'user10@example.com','User 10','I enjoyed reading this.','2024-03-30 08:00:02','2024-03-30 08:00:02');
/*!40000 ALTER TABLE `blog_comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `blogs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` VALUES (1,1,'10 Best Cat Foods for Your Feline Friend','A comprehensive guide to choosing the right food for your cat','cat_food_image.jpg','Pet Nutrition','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nec urna scelerisque, consectetur enim in, consequat libero. Donec vel justo fermentum, efficitur est sed, hendrerit leo. Duis sit amet erat nec turpis viverra vulputate. Donec sollicitudin odio sed ex gravida, nec egestas nisi dictum. In nec commodo odio. Suspendisse potenti. Sed vel sollicitudin sapien. Vivamus id ullamcorper risus. Proin aliquam euismod diam, vitae sodales est consectetur id. Donec convallis risus vel dolor vehicula, ac malesuada elit accumsan. Integer sit amet mauris in libero aliquam accumsan nec quis quam.','2024-03-30 08:00:11','2024-03-30 08:00:11'),(2,2,'The Importance of High-Quality Ingredients in Cat Food','Learn why the quality of ingredients matters for your cat\'s health','cat_ingredients.jpg','Pet Nutrition','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nec urna scelerisque, consectetur enim in, consequat libero. Donec vel justo fermentum, efficitur est sed, hendrerit leo. Duis sit amet erat nec turpis viverra vulputate. Donec sollicitudin odio sed ex gravida, nec egestas nisi dictum. In nec commodo odio. Suspendisse potenti. Sed vel sollicitudin sapien. Vivamus id ullamcorper risus. Proin aliquam euismod diam, vitae sodales est consectetur id. Donec convallis risus vel dolor vehicula, ac malesuada elit accumsan. Integer sit amet mauris in libero aliquam accumsan nec quis quam.','2024-03-30 08:00:11','2024-03-30 08:00:11'),(3,3,'Tips for Transitioning Your Cat to a New Food','Make the switch to a new cat food stress-free with these helpful tips','transitioning_cat_food.jpg','Pet Nutrition','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nec urna scelerisque, consectetur enim in, consequat libero. Donec vel justo fermentum, efficitur est sed, hendrerit leo. Duis sit amet erat nec turpis viverra vulputate. Donec sollicitudin odio sed ex gravida, nec egestas nisi dictum. In nec commodo odio. Suspendisse potenti. Sed vel sollicitudin sapien. Vivamus id ullamcorper risus. Proin aliquam euismod diam, vitae sodales est consectetur id. Donec convallis risus vel dolor vehicula, ac malesuada elit accumsan. Integer sit amet mauris in libero aliquam accumsan nec quis quam.','2024-03-30 08:00:11','2024-03-30 08:00:11'),(4,4,'Common Cat Food Allergens and How to Avoid Them','Learn about common allergens in cat food and how to keep your cat safe','cat_allergens.jpg','Pet Nutrition','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nec urna scelerisque, consectetur enim in, consequat libero. Donec vel justo fermentum, efficitur est sed, hendrerit leo. Duis sit amet erat nec turpis viverra vulputate. Donec sollicitudin odio sed ex gravida, nec egestas nisi dictum. In nec commodo odio. Suspendisse potenti. Sed vel sollicitudin sapien. Vivamus id ullamcorper risus. Proin aliquam euismod diam, vitae sodales est consectetur id. Donec convallis risus vel dolor vehicula, ac malesuada elit accumsan. Integer sit amet mauris in libero aliquam accumsan nec quis quam.','2024-03-30 08:00:11','2024-03-30 08:00:11'),(5,5,'How Much Should You Feed Your Cat?','Find out the correct portion sizes and feeding schedule for your cat','cat_feeding.jpg','Pet Nutrition','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nec urna scelerisque, consectetur enim in, consequat libero. Donec vel justo fermentum, efficitur est sed, hendrerit leo. Duis sit amet erat nec turpis viverra vulputate. Donec sollicitudin odio sed ex gravida, nec egestas nisi dictum. In nec commodo odio. Suspendisse potenti. Sed vel sollicitudin sapien. Vivamus id ullamcorper risus. Proin aliquam euismod diam, vitae sodales est consectetur id. Donec convallis risus vel dolor vehicula, ac malesuada elit accumsan. Integer sit amet mauris in libero aliquam accumsan nec quis quam.','2024-03-30 08:00:11','2024-03-30 08:00:11'),(6,6,'The Best Treats for Your Cat','Discover tasty and nutritious treats that your cat will love','cat_treats.jpg','Pet Nutrition','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nec urna scelerisque, consectetur enim in, consequat libero. Donec vel justo fermentum, efficitur est sed, hendrerit leo. Duis sit amet erat nec turpis viverra vulputate. Donec sollicitudin odio sed ex gravida, nec egestas nisi dictum. In nec commodo odio. Suspendisse potenti. Sed vel sollicitudin sapien. Vivamus id ullamcorper risus. Proin aliquam euismod diam, vitae sodales est consectetur id. Donec convallis risus vel dolor vehicula, ac malesuada elit accumsan. Integer sit amet mauris in libero aliquam accumsan nec quis quam.','2024-03-30 08:00:11','2024-03-30 08:00:11'),(7,7,'Cat Dental Health: Tips for Keeping Your Cat\'s Teeth Clean','Learn how to care for your cat\'s teeth and maintain good oral hygiene','cat_dental.jpg','Pet Health','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nec urna scelerisque, consectetur enim in, consequat libero. Donec vel justo fermentum, efficitur est sed, hendrerit leo. Duis sit amet erat nec turpis viverra vulputate. Donec sollicitudin odio sed ex gravida, nec egestas nisi dictum. In nec commodo odio. Suspendisse potenti. Sed vel sollicitudin sapien. Vivamus id ullamcorper risus. Proin aliquam euismod diam, vitae sodales est consectetur id. Donec convallis risus vel dolor vehicula, ac malesuada elit accumsan. Integer sit amet mauris in libero aliquam accumsan nec quis quam.','2024-03-30 08:00:11','2024-03-30 08:00:11'),(8,8,'How to Choose the Right Cat Food for Your Senior Cat','Find the perfect diet to support your senior cat\'s health and vitality','senior_cat_food.jpg','Pet Nutrition','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nec urna scelerisque, consectetur enim in, consequat libero. Donec vel justo fermentum, efficitur est sed, hendrerit leo. Duis sit amet erat nec turpis viverra vulputate. Donec sollicitudin odio sed ex gravida, nec egestas nisi dictum. In nec commodo odio. Suspendisse potenti. Sed vel sollicitudin sapien. Vivamus id ullamcorper risus. Proin aliquam euismod diam, vitae sodales est consectetur id. Donec convallis risus vel dolor vehicula, ac malesuada elit accumsan. Integer sit amet mauris in libero aliquam accumsan nec quis quam.','2024-03-30 08:00:11','2024-03-30 08:00:11'),(9,9,'Understanding Cat Food Labels','Decode cat food labels and make informed choices for your cat\'s nutrition','cat_food_labels.jpg','Pet Nutrition','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nec urna scelerisque, consectetur enim in, consequat libero. Donec vel justo fermentum, efficitur est sed, hendrerit leo. Duis sit amet erat nec turpis viverra vulputate. Donec sollicitudin odio sed ex gravida, nec egestas nisi dictum. In nec commodo odio. Suspendisse potenti. Sed vel sollicitudin sapien. Vivamus id ullamcorper risus. Proin aliquam euismod diam, vitae sodales est consectetur id. Donec convallis risus vel dolor vehicula, ac malesuada elit accumsan. Integer sit amet mauris in libero aliquam accumsan nec quis quam.','2024-03-30 08:00:11','2024-03-30 08:00:11'),(10,10,'Caring for Cats with Special Dietary Needs','Learn how to provide the best nutrition for cats with specific health conditions','special_diet_cat.jpg','Pet Nutrition','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nec urna scelerisque, consectetur enim in, consequat libero. Donec vel justo fermentum, efficitur est sed, hendrerit leo. Duis sit amet erat nec turpis viverra vulputate. Donec sollicitudin odio sed ex gravida, nec egestas nisi dictum. In nec commodo odio. Suspendisse potenti. Sed vel sollicitudin sapien. Vivamus id ullamcorper risus. Proin aliquam euismod diam, vitae sodales est consectetur id. Donec convallis risus vel dolor vehicula, ac malesuada elit accumsan. Integer sit amet mauris in libero aliquam accumsan nec quis quam.','2024-03-30 08:00:11','2024-03-30 08:00:11');
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `brands` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brands`
--

LOCK TABLES `brands` WRITE;
/*!40000 ALTER TABLE `brands` DISABLE KEYS */;
INSERT INTO `brands` VALUES (1,'Brand A','2024-03-30 08:00:18','2024-03-30 08:00:18'),(2,'Brand B','2024-03-30 08:00:18','2024-03-30 08:00:18'),(3,'Brand C','2024-03-30 08:00:18','2024-03-30 08:00:18'),(4,'Brand D','2024-03-30 08:00:18','2024-03-30 08:00:18'),(5,'Brand E','2024-03-30 08:00:18','2024-03-30 08:00:18'),(6,'Brand F','2024-03-30 08:00:18','2024-03-30 08:00:18'),(7,'Brand G','2024-03-30 08:00:18','2024-03-30 08:00:18'),(8,'Brand H','2024-03-30 08:00:18','2024-03-30 08:00:18'),(9,'Brand I','2024-03-30 08:00:18','2024-03-30 08:00:18'),(10,'Brand J','2024-03-30 08:00:18','2024-03-30 08:00:18');
/*!40000 ALTER TABLE `brands` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cart` (
  `cart_id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `product_id` bigint unsigned NOT NULL,
  `quantity` int NOT NULL,
  PRIMARY KEY (`cart_id`),
  KEY `user_id` (`user_id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cart`
--

LOCK TABLES `cart` WRITE;
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `donhang`
--

DROP TABLE IF EXISTS `donhang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `donhang` (
  `order_id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `tong_gia` double NOT NULL,
  `ngay_dat_hang` datetime NOT NULL,
  `trang_thai` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`order_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `donhang`
--

LOCK TABLES `donhang` WRITE;
/*!40000 ALTER TABLE `donhang` DISABLE KEYS */;
INSERT INTO `donhang` VALUES (9,11,253000,'2024-06-09 03:41:04','Chưa xử lý'),(10,11,850000,'2024-06-09 03:41:40','Chưa xử lý'),(12,11,46000,'2024-06-10 09:07:02','Chưa xử lý'),(13,11,1203000,'2024-06-10 09:07:23','Chưa xử lý'),(16,16,150000,'2024-06-08 03:46:42','Chưa xử lý'),(17,16,175000,'2024-06-11 10:08:14','Chưa xử lý'),(18,16,1000000,'2024-06-11 10:08:37','Chưa xử lý'),(19,16,0,'2024-06-11 10:08:40','Chưa xử lý'),(20,16,0,'2024-06-11 10:08:55','Chưa xử lý'),(21,11,39.98,'2023-06-11 00:00:00','Chưa xử lý'),(22,16,630000,'2024-06-11 11:21:38','Chưa xử lý');
/*!40000 ALTER TABLE `donhang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
INSERT INTO `failed_jobs` VALUES (1,'uuid_value_1','connection_value_1','queue_value_1','payload_value_1','exception_value_1','2024-03-30 08:00:25'),(2,'uuid_value_2','connection_value_2','queue_value_2','payload_value_2','exception_value_2','2024-03-30 08:00:25'),(3,'uuid_value_3','connection_value_3','queue_value_3','payload_value_3','exception_value_3','2024-03-30 08:00:25'),(4,'uuid_value_4','connection_value_4','queue_value_4','payload_value_4','exception_value_4','2024-03-30 08:00:25'),(5,'uuid_value_5','connection_value_5','queue_value_5','payload_value_5','exception_value_5','2024-03-30 08:00:25'),(6,'uuid_value_6','connection_value_6','queue_value_6','payload_value_6','exception_value_6','2024-03-30 08:00:25'),(7,'uuid_value_7','connection_value_7','queue_value_7','payload_value_7','exception_value_7','2024-03-30 08:00:25'),(8,'uuid_value_8','connection_value_8','queue_value_8','payload_value_8','exception_value_8','2024-03-30 08:00:25'),(9,'uuid_value_9','connection_value_9','queue_value_9','payload_value_9','exception_value_9','2024-03-30 08:00:25'),(10,'uuid_value_10','connection_value_10','queue_value_10','payload_value_10','exception_value_10','2024-03-30 08:00:25');
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `loaisanpham`
--

DROP TABLE IF EXISTS `loaisanpham`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `loaisanpham` (
  `type_id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `ten_loai_san_pham` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `anh` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `loaisanpham`
--

LOCK TABLES `loaisanpham` WRITE;
/*!40000 ALTER TABLE `loaisanpham` DISABLE KEYS */;
INSERT INTO `loaisanpham` VALUES (1,'Thức ăn','1713863925.png'),(2,'Cát vệ sinh','1713863941.png'),(3,'Chăm sóc ý tế','1713864051.png'),(4,'Vật dụng ăn uống','1713864338.png'),(5,'Đồ chơi','1713864412.png'),(6,'Vật cổ, dây dắt','1713864579.png'),(7,'Chuồng, giường, nhà','1713864652.png'),(8,'Quần áo','1713864693.png'),(9,'Loại sản phẩm A',NULL),(10,'Loại sản phẩm B',NULL),(11,'Loại sản phẩm C',NULL),(12,'Loại sản phẩm A',NULL),(13,'Loại sản phẩm B',NULL);
/*!40000 ALTER TABLE `loaisanpham` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (14,'2024_03_30_054915_create_sessions_table',1),(15,'2014_10_12_000000_create_users_table',2),(16,'2014_10_12_100000_create_password_resets_table',2),(17,'2019_08_19_000000_create_failed_jobs_table',2),(18,'2020_12_09_085528_create_orders_table',2),(19,'2020_12_09_085832_create_order_details_table',2),(20,'2020_12_09_085936_create_products_table',2),(21,'2020_12_09_090029_create_brands_table',2),(22,'2020_12_09_090110_create_product_categories_table',2),(23,'2020_12_09_090148_create_product_images_table',2),(24,'2020_12_09_090228_create_product_details_table',2),(25,'2020_12_09_090308_create_product_comments_table',2),(26,'2020_12_09_090355_create_blogs_table',2),(27,'2020_12_09_090437_create_blog_comments_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_details`
--

DROP TABLE IF EXISTS `order_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `order_details` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int unsigned NOT NULL,
  `product_id` int unsigned NOT NULL,
  `qty` int NOT NULL,
  `amount` double NOT NULL,
  `total` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_details`
--

LOCK TABLES `order_details` WRITE;
/*!40000 ALTER TABLE `order_details` DISABLE KEYS */;
INSERT INTO `order_details` VALUES (1,1,1,2,9.99,19.98,'2024-03-30 08:00:32','2024-03-30 08:00:32'),(2,2,3,1,8.99,8.99,'2024-03-30 08:00:32','2024-03-30 08:00:32'),(3,3,2,3,11.99,35.97,'2024-03-30 08:00:32','2024-03-30 08:00:32'),(4,4,5,1,13.99,13.99,'2024-03-30 08:00:32','2024-03-30 08:00:32'),(5,5,4,2,10.49,20.98,'2024-03-30 08:00:32','2024-03-30 08:00:32'),(6,6,7,1,10.99,10.99,'2024-03-30 08:00:32','2024-03-30 08:00:32'),(7,7,9,2,9.49,18.98,'2024-03-30 08:00:32','2024-03-30 08:00:32'),(8,8,6,1,12.99,12.99,'2024-03-30 08:00:32','2024-03-30 08:00:32'),(9,9,8,3,11.49,34.47,'2024-03-30 08:00:32','2024-03-30 08:00:32'),(10,10,10,2,12.49,24.98,'2024-03-30 08:00:32','2024-03-30 08:00:32');
/*!40000 ALTER TABLE `order_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_product`
--

DROP TABLE IF EXISTS `order_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `order_product` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `order_id` bigint unsigned NOT NULL,
  `product_id` bigint unsigned NOT NULL,
  `quantity` int NOT NULL,
  `price` double NOT NULL,
  PRIMARY KEY (`id`),
  KEY `order_id` (`order_id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `order_product_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `donhang` (`order_id`) ON DELETE CASCADE,
  CONSTRAINT `order_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_product`
--

LOCK TABLES `order_product` WRITE;
/*!40000 ALTER TABLE `order_product` DISABLE KEYS */;
INSERT INTO `order_product` VALUES (15,10,3,1,15.75),(16,10,12,1,34.99),(17,10,16,1,14.99),(18,10,17,1,19.99),(22,12,3,2,15.75),(25,16,3,1,150000),(26,17,5,1,25000),(27,17,3,1,150000),(28,17,13,1,19.99),(29,22,13,1,50000),(30,22,14,1,390000),(31,22,17,1,190000);
/*!40000 ALTER TABLE `order_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `street_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `postcode_zip` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `town_city` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,'John','Doe','ABC Company','United States','123 Main Street','10001','New York','john@example.com','+1234567890','2024-03-30 08:00:38','2024-03-30 08:00:38'),(2,'Alice','Smith','XYZ Corporation','Canada','456 Elm Street','V6A 1A1','Vancouver','alice@example.com','+0987654321','2024-03-30 08:00:38','2024-03-30 08:00:38'),(3,'Michael','Johnson','LMN Inc.','United Kingdom','789 Oak Avenue','SW1A 2AA','London','michael@example.com','+1122334455','2024-03-30 08:00:38','2024-03-30 08:00:38'),(4,'Emily','Brown','PQR Ltd.','Australia','101 Pine Road','3000','Melbourne','emily@example.com','+5544332211','2024-03-30 08:00:38','2024-03-30 08:00:38'),(5,'David','Wilson','STU Enterprises','Germany','246 Cedar Lane','10115','Berlin','david@example.com','+6677889900','2024-03-30 08:00:38','2024-03-30 08:00:38'),(6,'Sophia','Anderson','JKL Co.','France','369 Maple Street','75001','Paris','sophia@example.com','+1122334455','2024-03-30 08:00:38','2024-03-30 08:00:38'),(7,'James','Taylor','OPQ Group','Spain','789 Pine Avenue','28001','Madrid','james@example.com','+9900112233','2024-03-30 08:00:38','2024-03-30 08:00:38'),(8,'Emma','Martinez','RST Ltd.','Italy','101 Oak Lane','00184','Rome','emma@example.com','+6655443322','2024-03-30 08:00:38','2024-03-30 08:00:38'),(9,'Oliver','Garcia','UVW Corp.','Japan','456 Cedar Road','100-0001','Tokyo','oliver@example.com','+1122334455','2024-03-30 08:00:38','2024-03-30 08:00:38'),(10,'Charlotte','Hernandez','MNO Solutions','Brazil','789 Elm Avenue','20000-000','Rio de Janeiro','charlotte@example.com','+5544332211','2024-03-30 08:00:38','2024-03-30 08:00:38');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` VALUES ('email_value_1','token_value_1','2024-03-30 08:00:47'),('email_value_2','token_value_2','2024-03-30 08:00:47'),('email_value_3','token_value_3','2024-03-30 08:00:47'),('email_value_4','token_value_4','2024-03-30 08:00:47'),('email_value_5','token_value_5','2024-03-30 08:00:47'),('email_value_6','token_value_6','2024-03-30 08:00:47'),('email_value_7','token_value_7','2024-03-30 08:00:47'),('email_value_8','token_value_8','2024-03-30 08:00:47'),('email_value_9','token_value_9','2024-03-30 08:00:47'),('email_value_10','token_value_10','2024-03-30 08:00:47');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_categories`
--

DROP TABLE IF EXISTS `product_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product_categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_categories`
--

LOCK TABLES `product_categories` WRITE;
/*!40000 ALTER TABLE `product_categories` DISABLE KEYS */;
INSERT INTO `product_categories` VALUES (1,'Dry Food','2024-03-30 08:00:53','2024-03-30 08:00:53'),(2,'Wet Food','2024-03-30 08:00:53','2024-03-30 08:00:53'),(3,'Kitten Food','2024-03-30 08:00:53','2024-03-30 08:00:53'),(4,'Senior Food','2024-03-30 08:00:53','2024-03-30 08:00:53'),(5,'Grain-Free Food','2024-03-30 08:00:53','2024-03-30 08:00:53'),(6,'Weight Control Food','2024-03-30 08:00:53','2024-03-30 08:00:53'),(7,'Sensitive Stomach Food','2024-03-30 08:00:53','2024-03-30 08:00:53'),(8,'Natural Food','2024-03-30 08:00:53','2024-03-30 08:00:53'),(9,'Seafood Food','2024-03-30 08:00:53','2024-03-30 08:00:53'),(10,'Organic Food','2024-03-30 08:00:53','2024-03-30 08:00:53');
/*!40000 ALTER TABLE `product_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_comments`
--

DROP TABLE IF EXISTS `product_comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product_comments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int unsigned NOT NULL,
  `user_id` int unsigned DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `messages` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_comments`
--

LOCK TABLES `product_comments` WRITE;
/*!40000 ALTER TABLE `product_comments` DISABLE KEYS */;
INSERT INTO `product_comments` VALUES (1,1,1,'user1@example.com','User 1','This cat food is great!',5,'2024-03-30 08:00:59','2024-03-30 08:00:59'),(2,2,2,'user2@example.com','User 2','My cat loves this food!',4,'2024-03-30 08:00:59','2024-03-30 08:00:59'),(3,3,3,'user3@example.com','User 3','Average quality, but affordable.',3,'2024-03-30 08:00:59','2024-03-30 08:00:59'),(4,4,4,'user4@example.com','User 4','Not suitable for my cat.',2,'2024-03-30 08:00:59','2024-03-30 08:00:59'),(5,5,5,'user5@example.com','User 5','Excellent product!',5,'2024-03-30 08:00:59','2024-03-30 08:00:59'),(6,6,6,'user6@example.com','User 6','My cat refuses to eat it.',1,'2024-03-30 08:00:59','2024-03-30 08:00:59'),(7,7,7,'user7@example.com','User 7','Decent quality for the price.',4,'2024-03-30 08:00:59','2024-03-30 08:00:59'),(8,8,8,'user8@example.com','User 8','Fast delivery, thank you!',5,'2024-03-30 08:00:59','2024-03-30 08:00:59'),(9,9,9,'user9@example.com','User 9','My cat seems to like it.',4,'2024-03-30 08:00:59','2024-03-30 08:00:59'),(10,10,10,'user10@example.com','User 10','Best cat food ever!',5,'2024-03-30 08:00:59','2024-03-30 08:00:59');
/*!40000 ALTER TABLE `product_comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_details`
--

DROP TABLE IF EXISTS `product_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product_details` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int unsigned NOT NULL,
  `color` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_details`
--

LOCK TABLES `product_details` WRITE;
/*!40000 ALTER TABLE `product_details` DISABLE KEYS */;
INSERT INTO `product_details` VALUES (1,1,'Red','Medium',20,'2024-03-30 08:01:06','2024-03-30 08:01:06'),(2,2,'Blue','Large',15,'2024-03-30 08:01:06','2024-03-30 08:01:06'),(3,3,'Green','Small',30,'2024-03-30 08:01:06','2024-03-30 08:01:06'),(4,4,'Yellow','Medium',25,'2024-03-30 08:01:06','2024-03-30 08:01:06'),(5,5,'Orange','Small',18,'2024-03-30 08:01:06','2024-03-30 08:01:06'),(6,6,'Black','Large',22,'2024-03-30 08:01:06','2024-03-30 08:01:06'),(7,7,'White','Medium',28,'2024-03-30 08:01:06','2024-03-30 08:01:06'),(8,8,'Brown','Small',16,'2024-03-30 08:01:06','2024-03-30 08:01:06'),(9,9,'Pink','Large',21,'2024-03-30 08:01:06','2024-03-30 08:01:06'),(10,10,'Purple','Medium',23,'2024-03-30 08:01:06','2024-03-30 08:01:06');
/*!40000 ALTER TABLE `product_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_images`
--

DROP TABLE IF EXISTS `product_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product_images` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int unsigned NOT NULL,
  `path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_images`
--

LOCK TABLES `product_images` WRITE;
/*!40000 ALTER TABLE `product_images` DISABLE KEYS */;
INSERT INTO `product_images` VALUES (1,1,'path/to/image1.jpg','2024-03-30 08:02:42','2024-03-30 08:02:42'),(2,1,'path/to/image2.jpg','2024-03-30 08:02:42','2024-03-30 08:02:42'),(3,2,'path/to/image3.jpg','2024-03-30 08:02:42','2024-03-30 08:02:42'),(4,2,'path/to/image4.jpg','2024-03-30 08:02:42','2024-03-30 08:02:42'),(5,3,'path/to/image5.jpg','2024-03-30 08:02:42','2024-03-30 08:02:42'),(6,3,'path/to/image6.jpg','2024-03-30 08:02:42','2024-03-30 08:02:42'),(7,4,'path/to/image7.jpg','2024-03-30 08:02:42','2024-03-30 08:02:42'),(8,4,'path/to/image8.jpg','2024-03-30 08:02:42','2024-03-30 08:02:42'),(9,5,'path/to/image9.jpg','2024-03-30 08:02:42','2024-03-30 08:02:42'),(10,5,'path/to/image10.jpg','2024-03-30 08:02:42','2024-03-30 08:02:42');
/*!40000 ALTER TABLE `product_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `product_id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `ten_san_pham` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `loai_id` bigint unsigned DEFAULT NULL,
  `mo_ta` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `gia` double DEFAULT NULL,
  `hinh_anh` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `khoi_luong` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `so_luong` int DEFAULT NULL,
  PRIMARY KEY (`product_id`),
  KEY `loai_id` (`loai_id`),
  CONSTRAINT `products_ibfk_1` FOREIGN KEY (`loai_id`) REFERENCES `loaisanpham` (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Product Name',1,'Product Description',19.99,'img/2skXauQS1ekNqPhO2EpZg2LyQFPJFzz0ukYwoqyE.png','0.5',100),(3,'Me-O Thức Ăn Mèo Loại C',1,'Thức ăn giàu protein và taurine giúp mèo phát triển và duy trì sức khỏe của hệ thống tim mạch và thị lực. Hướng dẫn sử dụng: Cung cấp mỗi bữa ăn theo lượng khuyến nghị cho trọng lượng cơ thể của mèo.',150000,'img/YNoQDhwSSK92dOwmOxssi5em2CJ4wNxfQLjUsQJB.png','150g',75),(4,'Whiskas Thức Ăn Mèo Loại D',1,'Thức ăn hỗ trợ sự phát triển của xương và răng mèo. Chứa các vitamin và khoáng chất cần thiết để duy trì sức khỏe của hệ xương và răng. Hướng dẫn sử dụng: Dùng hàng ngày cho mèo trưởng thành.',80000,'img/5nwEVPWOOFn1rpNaOd1kUL2FrwGPSAgMCiQ3MSeF.png','120g',60),(5,'Hill\'s Science Diet Thức Ăn Mèo Loại E',1,'Thức ăn cao cấp chứa chất chống oxi hóa giúp bảo vệ tế bào và hỗ trợ sự phát triển của hệ miễn dịch. Hướng dẫn sử dụng: Cung cấp hàng ngày theo liều lượng khuyến nghị trên bao bì.',25000,'img/ktcdVMi6W5IBsLZZxamV1trkdMziGlf62zMuq23G.png','180g',90),(6,'Cát vệ sinh Fresh Scent',2,'Cát vệ sinh với hương thơm dễ chịu, giữ cho hộp cát của mèo luôn sạch sẽ và thơm mát.',90000,'img/4kiocK4W0hGEEXrRXlUKm5P2g1dMtW9IUp1CL5If.png','10kg',100),(7,'Cát vệ sinh Premium Clumping',2,'Cát vệ sinh chống đông tốt, dễ dàng làm sạch và thay thế.',120000,'img/0j1ISKNCmb7uOlJR4IDicruZSLcNkeIGweiEfL08.png','8kg',80),(8,'Cát vệ sinh Natural Pine',2,'Cát vệ sinh làm từ gỗ thông tự nhiên, không mùi và không gây kích ứng cho mèo.',140000,'img/m6OFxlBq54keWig27DfU87RjyF8qlJ09QPYaYdCC.png','12kg',120),(9,'Cát vệ sinh Unscented',2,'Cát vệ sinh không mùi, phù hợp cho mèo nhạy cảm với mùi hương.',500000,'img/jVPjUcZwWaZe8se77jiEeVttNLgAp7wlp6m3dzEp.png','15kg',150),(10,'Cát vệ sinh Dust-Free',2,'Cát vệ sinh không bụi, giúp giảm vi khuẩn và bảo vệ sức khỏe của mèo.',40000,'img/03BjMZHD6vbKghSs6htz8xlSxnlVegECc4cKP5FG.png','2kg',200),(12,'Royal Canin Hair & Skin Care',1,'Thức ăn cho mèo giúp nuôi dưỡng da và lông cho mèo.',390000,'img/3uKvJqMhykqqVm3zTCgVUdR3IJdWplfaMn51iXQO.png','10kg',80),(13,'Hill\'s Science Diet Indoor Dry Cat Food',1,'Thức ăn cho mèo sống trong nhà giúp duy trì sức khỏe đường ruột.',50000,'img/yX7gyKI3XEHDRk9y7Xkqhu5P0CMJpaHo1gtOoAgh.png','5kg',120),(14,'Blue Buffalo Wilderness Grain-Free Dry Cat Food',1,'Thức ăn cho mèo không chứa ngũ cốc giúp hỗ trợ hệ thống miễn dịch.',390000,'img/XwLnTq8PSOBAKwYJryYonHD9q4CerbaSxftwWWjc.png','6.5kg',90),(15,'Iams Proactive Health Adult Dry Cat Food',1,'Thức ăn cho mèo người lớn giúp duy trì sức khỏe cơ thể.',220000,'img/WLsESr6LvLduK8KljuPjqHAmaynp1JaQi6lxWYgR.png','8kg',110),(16,'Meow Mix Original Choice Dry Cat Food',1,'Thức ăn cho mèo với hương vị hấp dẫn.',140000,'img/rnOwlQaoCjW8nOdlF915KVDGSFoMpUTerSpssR5i.png','9kg',150),(17,'Purina Fancy Feast Gravy Wet Cat Food Variety Pack',1,'Thức ăn ướt cho mèo với nhiều hương vị khác nhau.',190000,'img/P8t3jJ4zQXKFbYtl4T9sobs9xnhPwEe08wOxHwtq.png','12kg',80),(18,'Sheba Perfect Portions Pate Wet Cat Food Tray Variety Packs',1,'Thức ăn ướt cho mèo trong hộp đơn vị giúp tiết kiệm và dễ dàng chế biến.',170000,'img/RgeBdHW73dIfo03LHy0ed927wL16WR5UNiPjCDc0.png','15kg',70),(19,'Temptations Classic Crunchy and Soft Cat Treats',1,'Bánh thưởng cho mèo giúp làm sạch răng và nuôi dưỡng lông.',50000,'img/Q6m9m9aXOWD5sBHihqZWAua5IJFsN8cu8SkYgBau.png','500g',200),(22,'Royal Canin Thức Ăn Mèo',1,'Thức ăn dinh dưỡng cao cấp dành cho mèo trưởng thành. Được chế biến từ các thành phần tự nhiên, giúp cân bằng dinh dưỡng và tăng cường hệ miễn dịch. Hướng dẫn sử dụng: Cung cấp hàng ngày theo liều lượng khuyến nghị trên bao bì.',25000,'img/pv0LD2tBDzgGigWeUwwScENqPU4XwZXqh0C082QW.png','400g',50),(23,'Purina Pro Plan Sensitive Skin & Stomach',1,'Thức ăn cho mèo với da nhạy cảm và dạ dày nhạy cảm.',10000,'img/nHmtL3mrsU72LOgUaHkZQVif55ayFpLEGBXuHpGc.png','400g',40),(24,'Product Name',1,'Product Description',19.99,'path/to/image.jpg','0.5',100),(25,'Cát vệ sinh mèo NATURAL WORLD, ONE CAT thấm hút, vón cục nhanh, ít bụi, khử mùi, diệt khuẩn, thơm, rẻ',2,'* Cát vệ sinh mèo Natural world 9L , One cat 8L siêu thấm hút, vón cục nhanh, ít bụi, khử mùi tốt, diệt khuẩn, thơm dịu, giá rẻ  9L(4 kg) \r\nĐây là dòng sản phẩm cát vệ sinh mèo  mới rất được ưa thích và bán rất chạy,  KHÔNG BỤI,VÓN TỐT,SIÊU TIẾT KIỆM\r\nThông tin sản phẩm cát vệ sinh mèo Natural world 9L\r\n- Trọng lượng: Túi 9L (nặng 4 kg)\r\n Cát vệ sinh mèo Natural world hiện có 6 mùi hương như sau:\r\n	- Hương táo-màu xanh lá\r\n	- Hương chanh - màu vàng\r\n	- Hương Lavender (oải hương) - màu tím\r\n	- Hương cafe -màu nâu\r\n        - Hương trà xanh - màu xanh lục\r\n	- Hương than hoạt tính  - màu đen\r\n\r\nThông tin sản phẩm cát vệ sinh mèo One cat 8L\r\n- Trọng lượng: Túi 8L (nặng 3.5 kg) hiện có 5 mùi hương như sau:\r\n	- Hương táo-màu xanh lá\r\n	- Hương chanh - màu vàng\r\n	- Hương Lavender (oải hương) - màu tím\r\n	- Hương cafe -màu nâu\r\n        - Hương phấn baby - màu xanh dương\r\n\r\nCông dụng: \r\n	- Vón cục nhanh và cứng nên dọn dẹp rất nhanh và rất tiết kiệm thời gian\r\n	- Hút mùi và khử mùi chất thải của mèo rất tốt\r\n	- Giữ cho khay vệ sinh luôn khô ráo và sạch sẽ\r\nĐặc điểm: \r\n	- Cát không dính chân mèo và không dính vào khay .\r\n	- Lượng bụi trong cát thấp không ảnh hưởng đến mèo, thân thiện với môi trường\r\n	- Siêu thấm hút nước, vón và đông cứng nhanh, không bết đáy, ít hao, dễ dọn dẹp, lau chùi\r\n	- Hương thơm dịu nhẹ nhàng dễ chịu\r\n	- Giá hợp lý \r\n	- Được sản xuất từ 100% nguồn bentonite tự nhiên \r\n	- Thấm hút nhanh, khử mùi tuyệt đối, kháng khuẩn vượt trội\r\nChọn mùi hương: Cát vệ sinh mèo chất lượng cao Natural World hương cà phê khử mùi rất tốt, như các bạn đã biết cà phê có khả năng khử mùi rất tốt cho nên cát hương cà phê khử mùi tốt nhất trong các mùi còn lại . Tuy nhiên nếu các sen nuôi ít mèo thì có thể lựa chọn các mùi khác, tuy mùi thơm nhẹ hơn nhưng khử mùi vẫn rất dễ chịu, trong nhà lúc nào cũng có mùi thơm nhẹ.',390000,'img/NCx7G84hLxEa15HdvoDdDgUnmqgViWmtLoYJcj1V.png','2 kg',70),(26,'Hàng chính hãng - Cát vệ sinh mèo Cat Nhật - 9L',2,'Huấn luyện mèo đi vệ sinh vào đúng khay vệ sinh là 1 chuyện. Nhưng để việc dọn dẹp vệ sinh cho mèo dễ dàng hơn thì phải cần có cát vệ sinh. Các sản phẩm cát vệ sinh hiện nay đã có thể ngăn mùi hiệu quả, thậm chí còn đem lại hương thơm dễ chịu. 1 trong số đó chính là sản phẩm Cát vệ sinh cho mèo\r\n\r\nMô Tả Sản Phẩm Cát vệ sinh cho mèo\r\nCát vệ sinh cho mèo, làm 100% đất sét tự nhiên\r\n- thấm hút nhanh\r\n- vón cục tốt\r\n- ít bụi, mùi thơm đa dạng : cafe\r\nGiá siêu rẻ\r\nCát vệ sinh cho mèo 8l  cân nặng 4kg là sản phẩm cát vệ sinh cho mèo rất an toàn, dược làm từ thành phần tự nhiên, không độc hại cho mèo, đảm bảo an toàn vệ sinh. Với nguồn gốc, xuất xứ rõ ràng, được nhiều \"sen\" lựa chọn, sản phẩm này giúp việc dọn vệ sinh cho mèo dễ dàng hơn.\r\n\r\nCát vệ sinh cho mèo cũng ngăn ngừa sự phát triển của vi khuẩn. Khiến ngôi nhà của bạn luôn sạch sẽ, thơm tho, đảm bảo không có mùi chất thải cuả mèo.\r\n\r\nCát Vệ Sinh cho mèo Cat like có sẵn và được bán giá siêu tốt tại siêu thị thú cưng .\r\n\r\n\r\nSản phẩm Cát vệ sinh cho mèo được nhập khẩu từ . Với các chứng nhận, kiểm định chặt chẽ, nghiêm khắc, đảm bảo sản phẩm này rất an toàn cho mèo. Sản phẩm có nguồn gốc, xuất xứ rõ ràng, vì thế bạn không cần quá lo lắng về chất lượng của chúng!\r\n\r\nĐặc Điểm Cát vệ sinh cho mèo\r\nCát vệ sinh cho mèo là một trong số những loại cát vệ sinh cho mèo chất lượng và giá cả hợp lý nhất trên thị trường hiện nay. Ưu điểm nổi bật của sản phẩm này nằm ở độ thấm hút nhanh và hương thơm bền lâu.\r\n\r\nVới hương  cafe thơm mát, sản phẩm này sẽ giúp khử mùi tối ưu. Đem lại hương thơm cho khu vực vệ sinh của mèo. Đồng thời cũng ngăn ngừa được vi khuẩn, tạo môi trường hợp vệ sinh.\r\n\r\nThêm vào đó, sản phẩm được đóng gói khá kỹ càng và đẹp mắt giúp cho việc vận chuyển vô cùng dễ dàng. Với tay xách tiện lợi, bạn có thể mang cát theo mèo đi bất cứ đâu.\r\n\r\n\r\nCát Vệ Sinh cat LIKE vô cùng dễ sử dụng. Bạn chỉ cần đổ một lượng cát vừa đủ ra khay vệ sinh. Khi chú mèo có dấu hiệu muốn đi vệ sinh, hãy thả mèo vào trong khay.\r\n\r\nCát vệ sinh cho mèo sẽ nhanh chóng thấm hút mọi chất thải của mèo. Sau đó tự động cát và phân mèo sẽ vón cục lại. Sau khi mèo đi vệ sinh, ta dùng xẻng có lỗ để xúc bỏ viên cát vón cục.\r\n\r\nChất thải vón lại có thể tiêu huỷ trong toilet gia đình hoặc dùng làm phân bón. Chính vì vậy rất an toàn cho môi trường sống của bạn. Thậm chí còn tiện lợi cho cây trồng!\r\n\r\n\r\nLưu Ý Khi Dùng Sản Phẩm\r\nKhông nên đổ quá nhiều cát vào khay vệ sinh. Mỗi lần mèo đi vệ sinh chỉ dùng một lượng cát rất ít. Vì thế, chỉ nên rải cát vừa đủ, tránh lãng phí.',50000,'img/I7WbLQshQf3DnlRP9pCT0hTjavgCmc9YtRb3VbT3.png','9 g',100),(27,'Cát mèo Citycat 8l 4kg - Cát đất sét khử mùi ít bụi',2,'CHÍNH SÁCH BẢO HÀNH\r\n\r\n- Bảo hành đổi trả hàng trong 7 ngày với bất cứ lí do gì khiến bạn không hài lòng.\r\n- Hoàn tiền nếu sản phẩm không giống với mô tả.\r\n- Cam kết về chất lượng sản phẩm, hoàn tiền 100% nếu hàng không đạt yêu cầu, kém chất lượng\r\n- Quy trình làm việc chuyên nghiệp\r\n- Cam kết Bảo Hành được đổi trả hàng trong vòng 7 ngày.\r\n- Bảo hành khi lỗi do nhà sản xuất\r\n\r\n\"Tất cả những người nuôi mèo chú ý! Bạn có mệt mỏi với việc sử dụng cát vệ sinh truyền thống và để lại một mớ hỗn độn cũng như mùi chất thải khó chịu không? \r\n\r\nĐã đến lúc thử dùng cát vệ sinh CITYCAT! Được làm từ 100% đất sét bentonite tự nhiên, loại cát vệ sinh này có khả năng thấm hút cao và khóa ẩm cũng như mùi hôi , để lại ngôi nhà của bạn có mùi thơm mát và sạch sẽ.\r\n\r\nCát vệ sinh cho mèo Bentonite không chỉ tốt cho ngôi nhà của bạn mà còn thân thiện với môi trường. Không giống như các loại cát khác làm từ silica gel hoặc các vật liệu tổng hợp khác, bentonite có thể phân hủy sinh học và an toàn để xử lý tại các bãi chôn lấp.\r\n\r\nVà trên hết, người bạn mèo của bạn sẽ thích nó! CITYCAT vón thành những cục chặt dễ xúc, giúp cho việc vệ sinh và bảo trì trở nên dễ dàng. Ngoài ra, việc sử dụng tỉ lệ vàng trong kích thước cát đã tạo ra 1 chất lượng cát không dính thành chậu, ko bết đáy dễ dàng dọn dẹp hơn, khiến nó trở thành lựa chọn tuyệt vời cho mọi con Sen khi dọn dẹp.\r\n\r\nChuyển sang cát vệ sinh cho mèo CITYCAT ngay hôm nay và trải nghiệm sự khác biệt! Nhà của bạn và con mèo của bạn sẽ cảm ơn bạn!\"',38000,'img/Q1TN6EO5CEZcC8nSlUkTcH4iQOUKlI512gSriqF4.png','4 kg',50),(28,'Cát mèo liti Zaka 5kg khử mùi và vón cục hiệu quả',2,'Thêm 5k/5kg nữa thôi mùi hôi sẽ không còn làm phiền bạn nữa ! Hãy cùng trải nghiệm phiên bản Siêu Thơm x3 lần hương của ZAKA PETSHOP nhé.\r\n\r\n+ Sản phẩm sản xuất bởi Zaka tại Việt Nam\r\n\r\n+ Công nghệ cải tiến giúp cát thơm lâu và khử mùi hiệu quả\r\n\r\n+ Tuổi thọ hương : 3-4 ngày - bề mặt (Nói không với gian dối)\r\n\r\n+ Hỗ trợ giá và ship khi đặt trực tiếp - 0828378011 (ZL) - (Bao gồm giao tỉnh)\r\n\r\n+ Cần gấp hoặc hỗ trợ nhanh vui lòng nhắn Zalo: 0828378011\r\n\r\n+ Cát đóng gói theo túi 5kg --> Dễ vận chuyển, tiện lợi cho mỗi lần sử dụng, lưu hương tốt hơn các loại túi 10kg, chuyên nghiệp hơn , sạch sẽ hơn.\r\n\r\n*** Lưu ý ***: Không đổ quá mỏng, độ dày tối thiểu 8cm (Hơn 3 đốt tay trỏ), thay cát mới sau khi đã sử 3-4 túi 5kg giúp cát sạch sẽ và khử mùi tốt hơn !\r\n\r\nKhi sản phẩm của Zaka đến tay người dùng. Bạn sẽ yên tâm khi mọi điều Zaka nói là không gian dối. (Nếu có sơ sót vui lòng liên hệ cho Zaka để được hỗ trợ kịp thời) .\r\n\r\n Chúng tôi cảm ơn các bạn đã đồng hành và ủng hộ !',35000,'img/N3wYVB3ZYGB3c8X4HirMWyt8MXLpcEPOnp4IvbOw.png','4 kg',100),(29,'Cát Vệ Sinh Mèo Khử Mùi, Thơm Lâu và Siêu Vón 1kg (túi đựng trắng hoặc xanh)',2,'Công dụng:\r\n- Không còn nỗi lo mùi khắp phòng, nhà toàn mùi khó chịu nơi vệ sinh của boss\r\n- Không còn phải đi tìm nhiều hay thay nhiều loại cát nào hợp với Boss.\r\n- Các hạt khử mùi đóng vai trò hấp phụ mùi, hấp thụ một phần nước tiểu, khóa nước tiểu và do đó làm giảm mùi hôi.',8000,'img/kocLC0AtIxUIhZT52hwJI6tcIjoIdibGRPgAlomE.png','1 kg',1000),(30,'CÁT MÈO 10KG 75K GIÁ RẺ',2,'cát mèo Hoàng Đình\r\nthấm hút cực nhanh, hương lavender dễ chịu.\r\nbao 5kg. \r\ncó bán sĩ từ 20 gói.',35000,'img/fMbwKBrTZeWvfPc4aEl1OG5Tk5Ifm4KJrlkwWS1W.png','5 kg',100),(31,'Cát Vệ Sinh Mèo MEOW Hương Cà phê - 8L, Cát Bentonite Đất Sét Mèo Yêu Thích, Không Đau Chân, Thấm Hút Tốt Catko',2,'Đóng gói: Bao 8L\r\n\r\n-----------------------------------------------------------------------\r\n-----------------------------------------------------------------------\r\n##CHÍNH SÁCH ĐỔI HÀNG/XỬ LÝ KHIẾU NẠI\r\n Khi nhận hàng, quý khách vui lòng quay lại video mở hàng\r\n(Video rõ nét, rõ mã vận đơn & gói hàng còn nguyên seal tất cả các mặt trước khi mở)\r\nShop chỉ giải quyết khuyếu nại khi khách có video mở hàng để đảm bảo tính đúng đắn của các bên, rất mong quý khách hợp tác cùng shop',55000,'img/7QFdAyPJ8LoxXpEZjjjCmuuRBCJ1xqi7EXypPzCd.png','8 kg',200);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('qEYnKutcvr90EOGi1J45XxLODjifTG6vJbsnw3Tq',16,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWDFHTGk2UEtqRDZNc2ZZVUNReDlvbVI5bU5GcFYwejdGRFFMek9veiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9wcm9kdWN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTY7fQ==',1718109658);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `phone_number` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `role` enum('user','employee','admin') CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT 'user',
  `remember_token` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'John Doe','john.doe@example.com','hashed_password','1234567890','123 Main St','user','random_token','path/to/avatar.jpg'),(9,'Ngô Quang Minh','minh12345.hy@gmail.com','$2y$12$Okewo6LLYIgiUBH6RGfsU.FTTLm3dLUe8Jew0CACg7KHDbthILpN6','0904329044','hưng yên','admin',NULL,'img/PpfooehwsEN4gTxVCQPVnWs8GWZp2WCpz4elnFN1.jpg'),(10,'Chiến sẽ','sss@gmail.com','$2y$12$0kx8mLRifqLOoreUXQ0WaetKp3l21g.QE3l6gkH.tNAwNtQ9QQx7u','696966969','210','employee',NULL,'img/B87FiDcpKYUlSm3M3sP5hWXKKdlLPzxT4FNIjB3u.jpg'),(11,'abc','hh3@gmail.com','$2y$12$CRzbYFprfaqC3nzxmiKvhOn2/IU1A2.wgwtlf1Ue9gGt9ahM4xCdC','00000000008','ddddd','user',NULL,'img/c3yXK60wLxU3BF5QccYItQt49iOW8FaOXQFxVLmX.jpg'),(12,'ffff','sss44@gmail.com','$2y$12$hWl8CT3R7uX3R6PMOR1o6uD7LsQuazJCLn9Dmf3DA/lZ3a2BLgQ4S','00000000008','sssssssssss','user',NULL,NULL),(16,'asdfgh','assddddd@gmail.com','$2y$12$.3Ig5is9DqenQK3u2X/4GeXXOvB0H.DDzclxeL98gHHoOQ.Zy/viu','00000000008','sssssssssss','user',NULL,NULL);
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

-- Dump completed on 2024-06-11 22:31:42
