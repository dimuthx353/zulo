-- MySQL dump 10.13  Distrib 8.0.38, for Win64 (x86_64)
--
-- Host: localhost    Database: zulo
-- ------------------------------------------------------
-- Server version	8.0.39

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
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cart` (
  `cart_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int DEFAULT '1',
  `added_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`cart_id`),
  KEY `user_id` (`user_id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE,
  CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cart`
--

LOCK TABLES `cart` WRITE;
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
INSERT INTO `cart` VALUES (1,2,80,3,'2024-10-05 14:09:07'),(2,2,78,1,'2024-10-05 14:10:23'),(3,2,68,2,'2024-10-05 14:11:02'),(4,4,80,1,'2024-10-05 15:10:12'),(5,2,76,1,'2024-10-06 03:14:01'),(6,3,65,1,'2024-10-06 06:12:09'),(7,3,64,1,'2024-10-06 06:12:21');
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `maincategories`
--

DROP TABLE IF EXISTS `maincategories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `maincategories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `main_category_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `main_category_name` (`main_category_name`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `maincategories`
--

LOCK TABLES `maincategories` WRITE;
/*!40000 ALTER TABLE `maincategories` DISABLE KEYS */;
INSERT INTO `maincategories` VALUES (1,'men','2024-09-26 18:02:09'),(2,'women','2024-09-26 18:02:12'),(19,'hello','2024-10-04 17:01:26'),(26,'test','2024-10-04 17:02:56');
/*!40000 ALTER TABLE `maincategories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orderitems`
--

DROP TABLE IF EXISTS `orderitems`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orderitems` (
  `order_item_id` int NOT NULL AUTO_INCREMENT,
  `order_id` int DEFAULT NULL,
  `product_id` int DEFAULT NULL,
  `size_id` int DEFAULT NULL,
  `color_id` int DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `price_at_purchase` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`order_item_id`),
  KEY `order_id` (`order_id`),
  KEY `product_id` (`product_id`),
  KEY `size_id` (`size_id`),
  KEY `color_id` (`color_id`),
  CONSTRAINT `orderitems_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  CONSTRAINT `orderitems_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  CONSTRAINT `orderitems_ibfk_3` FOREIGN KEY (`size_id`) REFERENCES `productsizes` (`size_id`),
  CONSTRAINT `orderitems_ibfk_4` FOREIGN KEY (`color_id`) REFERENCES `productcolors` (`color_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orderitems`
--

LOCK TABLES `orderitems` WRITE;
/*!40000 ALTER TABLE `orderitems` DISABLE KEYS */;
/*!40000 ALTER TABLE `orderitems` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `order_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `total_amount` decimal(10,2) DEFAULT NULL,
  `shipping_address` text,
  `payment_status` varchar(20) DEFAULT NULL,
  `order_status` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`order_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `payments` (
  `payment_id` int NOT NULL AUTO_INCREMENT,
  `order_id` int DEFAULT NULL,
  `payment_method` varchar(50) DEFAULT NULL,
  `payment_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `amount_paid` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`payment_id`),
  KEY `order_id` (`order_id`),
  CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payments`
--

LOCK TABLES `payments` WRITE;
/*!40000 ALTER TABLE `payments` DISABLE KEYS */;
/*!40000 ALTER TABLE `payments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productcolors`
--

DROP TABLE IF EXISTS `productcolors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `productcolors` (
  `color_id` int NOT NULL AUTO_INCREMENT,
  `product_id` int DEFAULT NULL,
  `color_name` varchar(50) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `stock_quantity` int DEFAULT NULL,
  PRIMARY KEY (`color_id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `productcolors_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productcolors`
--

LOCK TABLES `productcolors` WRITE;
/*!40000 ALTER TABLE `productcolors` DISABLE KEYS */;
/*!40000 ALTER TABLE `productcolors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `product_id` int NOT NULL AUTO_INCREMENT,
  `category_id` int DEFAULT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `description` text,
  `price` decimal(10,2) DEFAULT NULL,
  `stock_quantity` int DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `sku` varchar(100) NOT NULL,
  `subCategory` varchar(45) NOT NULL,
  PRIMARY KEY (`product_id`),
  UNIQUE KEY `sku_UNIQUE` (`sku`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (35,2,'Waist Less Panel Denim Princess Line Dress','Product Specific (Avg. Measurement - Inches)\r\n\r\nChest: Xs - 29 , S -31  , M -33  , L -35  , Xl -37  , Xxl -39\r\n\r\nLength:  Xs-37,S-37.5,M-38,L-38.5,Xl-39,Xxl-395\r\n\r\nMaterial: Denim\r\nColor: Denim Blue\r\n\r\nFit Type: Regular Fit\r\n\r\nStretch: Stretch\r\nStyle: Princess line dress, Waistless, Sleeveless, Round neck\r\n\r\nAccessories: N/A\r\nModel Size: S\r\n\r\nWash & Care: Normal Wash\r\n\r\n\r\nNote: Product Colour May Slightly Vary Due To Photographic Lighting Sources Or Your Monitor Setting.',6990.00,10,'womenDenims/wd01.webp','2024-09-27 05:46:42','XEZZ80001-S','Denims W'),(36,2,'Mid Waist Blue Jean','Product Specific (Avg. Measurement - Inches)\r\n\r\nWaist:  28 -27.5  , 30 - 29 , 32 -30.5  , 34 -32.5  , 36 - 34.5\r\nLength:  28-37.25,30-37.625,32-38,34-38.5,36-39\r\n\r\nMaterial: Denim\r\nColor: Blue\r\n\r\nFit Type: Tight Fit\r\n\r\nStretch: Stretch\r\nStyle: Single button, Mid waist\r\n\r\nAccessories: Zipper/Button\r\nModel Size: S\r\n\r\nWash & Care: Normal Wash\r\n\r\n\r\nNote: Product Colour May Slightly Vary Due To Photographic Lighting Sources Or Your Monitor Setting.',6990.00,12,'womenDenims/wd02.webp','2024-09-27 05:57:46','XEZZ80022-32','Denims W'),(37,2,'Mid Waist Black Jean','Product Specific (Avg. Measurement - Inches)\r\n\r\nWaist:  28 -27.5  , 30 - 29 , 32 -30.5  , 34 -32.5  , 36 - 34.5\r\nLength:  28-37.25,30-37.625,32-38,34-38.5,36-39\r\n\r\nMaterial: Denim\r\nColor: Black\r\n\r\nFit Type: Tight Fit\r\n\r\nStretch: Stretch\r\nStyle: Single button, Mid waist\r\n\r\nAccessories: Zipper/Button\r\nModel Size: S\r\n\r\nWash & Care: Normal Wash\r\n\r\n\r\nNote: Product Colour May Slightly Vary Due To Photographic Lighting Sources Or Your Monitor Setting.',6990.00,11,'womenDenims/wd03.webp','2024-09-27 06:01:05','XEZZ80021-28','Denims W'),(38,2,'High Waist Blue Jean','Material: Denim\r\nColor: Blue\r\nStyle: High waist, 3 buttons, Jean\r\n\r\nAccessories: Button/Zipper\r\nModel Size: 30\r\nAverage Length (Inches):  28-36.5\'\',30-37,32-37.5\'\',34-38\'\',36-38.5\'\'\r\n\r\nWaist  Top Edge   28- 23, 30- 24.5, 32- 26, 34-28, 36-30\r\n\r\n \r\nWash & Care: Hand Wash, Cold Water: Wash Inside Out: Dark Colours Separately\r\n\r\nNote: Product Colour May Slightly Vary Due To Photographic Lighting Sources Or Your Monitor Setting.',7120.00,12,'womenDenims/wd04.webp','2024-09-27 06:04:28','XEZZ80024-30','Denims W'),(39,2,'High Waist Blue Jean','Material: Denim\r\nColor: Blue\r\nStyle: High waist, 3 buttons, Jean\r\n\r\nAccessories: Button/Zipper\r\nModel Size: 30\r\nAverage Length (Inches):  28-36.5\'\',30-37,32-37.5\'\',34-38\'\',36-38.5\'\'\r\n\r\nWaist  Top Edge   28- 23, 30- 24.5, 32- 26, 34-28, 36-30\r\n\r\n \r\nWash & Care: Hand Wash, Cold Water: Wash Inside Out: Dark Colours Separately\r\n\r\nNote: Product Colour May Slightly Vary Due To Photographic Lighting Sources Or Your Monitor Setting.',7190.00,1,'womenDenims/wd05.webp','2024-09-27 06:05:13','XEZZ80023-30','Denims W'),(44,2,'Light Wash Denim Bustier Bodycon Dress','Product Specific (Avg. Measurement - Inches)\r\n\r\nChest: Xs - 31.5 , S -33  , M -35  , L -37  , Xl -39  , Xxl -41\r\n\r\nWaist: Xs -31  , S -27  , M -34.5  , L -36.5  , Xl - 38.5 , Xxl - 40.5\r\nLength:  Xs-24.75,S-25,M-25.25,L-25.5,Xl-25.75,Xxl-26\r\n\r\nMaterial: Denim\r\nColor: Denim Light Blue\r\n\r\nFit Type: Tight Fit\r\n\r\nStretch: Stretch\r\nStyle: Bustier dress, Bodycon, Shoulder straps, Deep wide Vneck\r\n\r\nAccessories: Zipper\r\nModel Size: S\r\n\r\nWash & Care: Normal Wash\r\n\r\n\r\nNote: Product Colour May Slightly Vary Due To Photographic Lighting Sources Or Your Monitor Setting.',4193.00,3,'womenDenims/wd06.webp','2024-09-27 06:09:36','XEZZ09833-S','Denims W'),(45,2,'Ripped Denim Short','Product Specific (Avg. Measurement - Inches)\r\n\r\nWaist: 26 -25.5  , 28 - 27 , 30 -29  , 32 -31  , 34 -33  , 36 - 35\r\nLength:  26-12.5,28-13,30-13.5,32-14,34-14.5,36-15\r\n\r\nMaterial: Denim\r\nColor: Denim Blue\r\n\r\nFit Type: Regular\r\n\r\nStretch: Non Stretch\r\nStyle: Mid Waist, Single button, Ripped denim design\r\n\r\nAccessories: Zipper/Button\r\nModel Size: S\r\n\r\nWash & Care: Normal Wash\r\n\r\n\r\nNote: Product Colour May Slightly Vary Due To Photographic Lighting Sources Or Your Monitor Setting.',3493.00,2,'womenDenims/wd07.webp','2024-09-27 06:10:46','XEZZ09711-26','Denims W'),(46,2,'High-Rise Frayed Blue Short','Product Specific (Avg. Measurement - Inches)\r\n\r\nWaist: 26 -25.5  , 28 -27  , 30 - 29 , 32 -31  , 34 -33  , 36 - 35\r\nLength:  26-11.25,28-11.75,30-12.25,32-12.75,34-13.25,36-13.75\r\n\r\nMaterial: Denim\r\nColor: Blue\r\n\r\nFit Type: Tight Fit\r\n\r\nStretch: Stretch\r\nStyle: Fray hem, High rise waist, single button\r\n\r\nAccessories: Zipper/Button\r\nModel Size: S\r\n\r\nWash & Care: Normal Wash\r\n\r\n\r\nNote: Product Colour May Slightly Vary Due To Photographic Lighting Sources Or Your Monitor Setting.',3493.00,6,'womenDenims/wd08.webp','2024-09-27 06:11:39','XEZZ09807-28','Denims W'),(47,2,'Fray Hem Denim Short','Product Specific (Avg. Measurement - Inches)\r\n\r\nWaist: 26 -25.5  , 28 -27  , 30 - 29 , 32 -31  , 34 -33  , 36 - 35\r\nLength:  26-11.25,28-11.75,30-12.25,32-12.75,34-13.25,36-13.75\r\n\r\nMaterial: Denim\r\nColor: Light Blue\r\n\r\nFit Type: Tight Fit\r\n\r\nStretch: Stretch\r\nStyle: Fray Hem, Single button\r\n\r\nAccessories: Zipper/Button\r\nModel Size: S\r\n\r\nWash & Care: Normal Wash\r\n\r\n\r\nNote: Product Colour May Slightly Vary Due To Photographic Lighting Sources Or Your Monitor Setting.\r\n\r\n',3493.00,5,'womenDenims/wd09.webp','2024-09-27 06:13:15','XEZZ09916-26','Denims W'),(48,2,'Fraying Denim Blue Shorts','Material: Denim\r\nColor: Light Blue\r\n\r\nFit Type: Tight Fit\r\n\r\nStretch: Stretch\r\nStyle:  Frayed short, High Waist, Single button\r\n\r\nAccessories: Button/Zipper\r\nModel Size: 30\r\nAverage Length (Inches):  26-12.75,28-13.25,30-13.75,32-14.25,34-14.75,36-15.25\r\n\r\n \r\nWash & Care: Mid Wash\r\n\r\nNote: Product Colour May Slightly Vary Due To Photographic Lighting Sources Or Your Monitor Setting.',3493.00,9,'womenDenims/wd10.webp','2024-09-27 06:15:08','XEZZ09211-26','Denims W'),(49,2,'Embroidered Black Denim Skirt','Material: Denim\r\nColor: Black\r\n\r\nFit Type: Regular Fit\r\n\r\nStretch: Stretch\r\nStyle: Embroidery Front, Mid Waist, Short skirt\r\n\r\nAccessories: Zipper\r\nModel Size: 30\r\nAverage Length (Inches):  26-17.625,28-18,30-18.375,-32-18.75,34-19.125,36-19.5\r\n\r\n \r\nWash & Care: Mid Wash\r\n\r\nNote: Product Colour May Slightly Vary Due To Photographic Lighting Sources Or Your Monitor Setting.\r\n\r\n',3983.00,19,'womenDenims/wd11.webp','2024-09-27 06:20:03','XEZZ09217-26','Denims W'),(50,1,'Men Slim fit Formal Shirt','Fit closely to the body, with a more tapered waist and narrower chest compared to regular fitting formal shirts. It has a skinny silhouette and is typically made of high-quality fabric.',4075.00,13,'menShirts/ms01.webp','2024-09-27 08:21:14','ms01','Shirts M'),(51,1,' Men Formal Full Sleeve Plain Shirt','The image shows wearing a bright red, long-sleeved button-down shirt made of a solid material like cotton or poplin. The clothing gives off a smart casual or business casual vibe that could be appropriate for an office or professional setting while still being fairly relaxed.',3695.00,22,'menShirts/ms02.webp','2024-09-27 08:22:51','ms02','Shirts M'),(52,1,'BLUEFORT Formal Shirt','you\'re stepping into a world of polished style and sophistication. Whether you\'re attending a business meeting or a formal event, this shirt is sure to leave a lasting impression with its understated beauty and impeccable craftsmanship. Model Size : 15 1/2 (L) (Height - 5.8\") Fabric Used : PolyesterMaterial: Polyester (65%), Cotton (35%)',3895.00,3,'menShirts/ms03.webp','2024-09-27 08:23:24','ms03','Shirts M'),(58,1,'Men Solid High Neck Sweater','Wrap yourself in the warmth and comfort of this exquisite For Men Solid High Neck Sweater. Crafted from the finest materials, this stylish sweater is designed to keep you cozy and stylish throughout the year. The high-neck design provides a sleek and sophisticated silhouette, while the solid color palette adds a touch of elegance to any outfit.',4995.00,1,'menTshirts/mts01.webp','2024-09-27 09:27:44','mts01','Tshirts M'),(61,1,'Solid Henley Neck Cotton T-Shirt','The bold red hue of the main body contrasts strikingly with the navy blue accents on the sleeves and shoulder panels. This color-blocking effect creates a modern, sporty aesthetic. The vivid red shade has a rich, almost crimson tone that really pops against the person\'s skin tone. Meanwhile, the deep navy blue provides a nice grounding contrast that keeps the look from feeling too loud or overwhelming.',2395.00,7,'menTshirts/mts02.webp','2024-09-27 09:35:32','mts02','Tshirts M'),(62,1,'Solid Round Neck Orange T-Shirt','The fabric appears to have a subtly textured waffle knit pattern, giving it a tactile, dimensional quality. The boxy, oversized fit creates an effortlessly cool and relaxed silhouette. While the cut is simple, the bold coral hue elevates the basic tee, infusing it with a warm, lively pop of color reminiscent of a radiant summer sunset. The slightly sheer, lightweight knit seems ideal for warm weather layering or as a standalone casual top.',1995.00,5,'menTshirts/mts03.webp','2024-09-27 09:42:54','mts03','Tshirts M'),(63,1,'DKDC Printed Skinny','This modern take on the classic skinny fit pant features a bold, eye-catching print that\'s sure to turn heads. From vibrant stripes to bold geometric patterns, every design is carefully crafted to add a touch of personality to your everyday look. The printed fabric is soft and lightweight, with a subtle stretch for maximum comfort and mobility.',2195.00,6,'menTshirts/mts04.webp','2024-09-27 09:45:09','mts04','Tshirts M'),(64,1,'Long-Sleeved DKDC Curved T-Shirt','Long-sleeved navy blue t-shirt or top. It has a straightforward, casual design with a small logo on the front left chest area. The cotton or jersey knit fabric looks soft and comfortable for everyday wear. While the t-shirt itself is quite simple and minimalist in style, the rich navy blue color has an elegant depth that can lend a sophisticated touch to any casual outfit. The dark hue provides a nice contrast against the person\'s warm skin tone.',2495.00,5,'menTshirts/mts05.webp','2024-09-27 09:45:09','mts05','Tshirts M'),(65,1,'Solid Cotton Round Neck T Shirt','The soft, pastel color has a soothing, serene quality that reminds one of calm ocean waters or a hazy spring sky. The knit texture gives the sweater an inviting look and feel that seems both cozy and stylish. The relaxed, slightly oversized fit creates an effortless, laid-back vibe that feels modern and youthful. The ribbing along the cuffs, collar, and hem provides subtle definition and shape.',1950.00,9,'menTshirts/mts06.webp','2024-09-27 09:45:59','mts06','Tshirts M'),(66,1,'Men\'s Casual Long Sleeve T Shirts','It has a textured knit pattern in shades of gray, giving it a warm, casual look perfect for cooler weather. Without being too thick or bulky, the knit seems soft and lightweight, making it an ideal layering piece.',1695.00,12,'menTshirts/mts07.webp','2024-09-27 09:47:05','mts07','Tshirts M'),(67,1,'Men White Slim Fit T-Shirt','A men\'s white slim fit t-shirt is a masterclass in modern elegance. The crisp white color is a blank canvas, awaiting the perfect combination of accessories and bottoms to create a stylish outfit. The slim fit design is tailored to perfection, skimming the body with a sleek and streamlined silhouette. The fabric is soft and breathable, draping effortlessly across the chest and shoulders.',3195.00,22,'menTshirts/mts08.webp','2024-09-27 09:48:27','mts08','Tshirts M'),(68,1,'White Print Cotton Shirt','This shirt features a timeless white base color, perfectly complemented by a beautiful print design that adds a touch of sophistication and whimsy. The print is carefully crafted to create a unique visual narrative that is both striking and understated, making it perfect for everyday wear or as a stylish addition to your formal attire.',3760.00,21,'menCasualShirts/mcs01.webp','2024-09-27 11:01:10','mcs01','casualShirts M'),(76,1,'In-Formal Full Sleeve Casual Shirts','These shirts strike a balance between formal and casual, making them suitable for a variety of occasions. The collar adds a touch of formality to the shirt. The cuffs are often barrel cuffs, which give the shirt a slightly casual vibe.',4995.00,6,'menCasualShirts/mcs02.webp','2024-09-27 11:15:03','mcs02','casualShirts M'),(78,1,'Men\'s Double Pocket Long Sleeve Shirt','The shirt worn by the individual is a bright red button-down casual shirt. It appears to be made of a lightweight cotton or linen material and has two pockets on the front. The shirt has long sleeves and a collar, giving it a casual yet put-together look.',3660.00,30,'menCasualShirts/mcs03.webp','2024-09-27 11:19:44','mcs03','casualShirts M'),(80,1,'Navy Red Checked Flannel Shirt','This Shirt shows a man wearing a red and navy blue plaid flannel shirt with long sleeves and a button-front closure. The outfit has a casual yet put-together vibe that could work for both relaxed settings or dressier casual office environments.',3195.00,1,'menCasualShirts/mcs04.webp','2024-09-27 11:23:03','mcs04','casualShirts M');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productsizes`
--

DROP TABLE IF EXISTS `productsizes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `productsizes` (
  `size_id` int NOT NULL AUTO_INCREMENT,
  `product_id` int DEFAULT NULL,
  `size` varchar(10) DEFAULT NULL,
  `stock_quantity` int DEFAULT NULL,
  PRIMARY KEY (`size_id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `productsizes_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productsizes`
--

LOCK TABLES `productsizes` WRITE;
/*!40000 ALTER TABLE `productsizes` DISABLE KEYS */;
/*!40000 ALTER TABLE `productsizes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reviews` (
  `review_id` int NOT NULL AUTO_INCREMENT,
  `product_id` int DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `rating` int DEFAULT NULL,
  `review_text` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`review_id`),
  KEY `product_id` (`product_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  CONSTRAINT `reviews_chk_1` CHECK ((`rating` between 1 and 5))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reviews`
--

LOCK TABLES `reviews` WRITE;
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;
/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shoppingcart`
--

DROP TABLE IF EXISTS `shoppingcart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `shoppingcart` (
  `cart_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `product_id` int DEFAULT NULL,
  `size_id` int DEFAULT NULL,
  `color_id` int DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `added_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`cart_id`),
  KEY `user_id` (`user_id`),
  KEY `product_id` (`product_id`),
  KEY `size_id` (`size_id`),
  KEY `color_id` (`color_id`),
  CONSTRAINT `shoppingcart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  CONSTRAINT `shoppingcart_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  CONSTRAINT `shoppingcart_ibfk_3` FOREIGN KEY (`size_id`) REFERENCES `productsizes` (`size_id`),
  CONSTRAINT `shoppingcart_ibfk_4` FOREIGN KEY (`color_id`) REFERENCES `productcolors` (`color_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shoppingcart`
--

LOCK TABLES `shoppingcart` WRITE;
/*!40000 ALTER TABLE `shoppingcart` DISABLE KEYS */;
/*!40000 ALTER TABLE `shoppingcart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subcategories`
--

DROP TABLE IF EXISTS `subcategories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `subcategories` (
  `category_id` int NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) NOT NULL,
  `category_imgUrl` varchar(45) DEFAULT NULL,
  `subCategoryName` varchar(45) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subcategories`
--

LOCK TABLES `subcategories` WRITE;
/*!40000 ALTER TABLE `subcategories` DISABLE KEYS */;
INSERT INTO `subcategories` VALUES (16,'women','categories/cwDresses','Dresses W','Dresses'),(17,'women','categories/cwTshirts','Tshirts W','Tshirts'),(18,'women','categories/cwTops','Tops W','Tops'),(19,'women','categories/cwDenims','Denims W','Denims'),(24,'men','categories/cmcasualShirts','casualShirts M','casualShirts'),(25,'men','categories/cmshirts','Shirts M','Shirts'),(26,'men','categories/cmTshirts','Tshirts M','Tshirts');
/*!40000 ALTER TABLE `subcategories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  `address` text,
  `city` varchar(100) DEFAULT NULL,
  `postal_code` varchar(20) DEFAULT NULL,
  `country` varchar(50) DEFAULT 'Sri Lanka',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `account_status` tinyint(1) NOT NULL DEFAULT '1',
  `province` varchar(45) DEFAULT NULL,
  `roll` varchar(45) DEFAULT 'user',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (2,'waruni','laksika','waruni@gmail.com','$2y$10$uhMa6HWvfAumiTfMBVe8DO29p1iOEWviuEJJon0INSA9ONkpcwsS.','0775969520','91/3','990kegalle','71000','Sri Lanka','2024-09-29 08:13:46',1,'western','user'),(3,'thauka','marasinghe','tharuka@gmail.com','$2y$10$uWUOWQ4JXwqO6mJ1hgjGKe0IfnRBb6Su9JYO79KziEif0RCeibIGO','72224252','abc','abc','71000','Sri Lanka','2024-09-29 12:55:29',1,'sabaragamuwa','user'),(4,'Dimuth','Adithya','dimuth@gmail.com','$2y$10$hdt2EUnASobzQuAPECsWM.dbJUGfqyQBjtOAoVHUUDY0oZoGrwgIm','0772442599','314','kegalle','71000','Sri Lanka','2024-10-04 15:24:27',1,'sabaragamuwa','admin');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wishlist`
--

DROP TABLE IF EXISTS `wishlist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `wishlist` (
  `wishlist_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `product_id` int NOT NULL,
  `added_date` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`wishlist_id`),
  KEY `user_id` (`user_id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wishlist`
--

LOCK TABLES `wishlist` WRITE;
/*!40000 ALTER TABLE `wishlist` DISABLE KEYS */;
INSERT INTO `wishlist` VALUES (20,2,78,'2024-10-06 09:47:48'),(21,3,64,'2024-10-06 11:42:01'),(22,3,65,'2024-10-06 11:42:05');
/*!40000 ALTER TABLE `wishlist` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-10-06 11:44:06
