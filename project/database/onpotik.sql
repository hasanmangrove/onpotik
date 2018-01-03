-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: onpotik
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.19-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `apotik`
--

DROP TABLE IF EXISTS `apotik`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `apotik` (
  `id_website` int(1) DEFAULT NULL,
  `nama_website` varchar(64) DEFAULT NULL,
  `nama_rekening1` varchar(45) DEFAULT NULL,
  `nama_rekening2` varchar(45) DEFAULT NULL,
  `rekening1` varchar(45) DEFAULT NULL,
  `rekening2` varchar(45) DEFAULT NULL,
  `bank_rekening1` varchar(10) DEFAULT NULL,
  `bank_rekening2` varchar(10) DEFAULT NULL,
  `deskripsi_website` varchar(45) DEFAULT NULL,
  `alamat_website` mediumtext,
  `kontak_website` varchar(16) DEFAULT NULL,
  `email_website` varchar(64) DEFAULT NULL,
  `long_website` varchar(45) DEFAULT NULL,
  `lat_website` varchar(45) DEFAULT NULL,
  `tagline_website` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `apotik`
--

LOCK TABLES `apotik` WRITE;
/*!40000 ALTER TABLE `apotik` DISABLE KEYS */;
INSERT INTO `apotik` VALUES (1,'Onpotik','Hasan','Mangrove','123','456','MANDIRI','FIESTA','Toko obat termutha','Jl. Maju mundur','08657571747','onpotik@gmail.com','7112745','8724','Jaya Apotik Online');
/*!40000 ALTER TABLE `apotik` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detail_transaksi`
--

DROP TABLE IF EXISTS `detail_transaksi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detail_transaksi` (
  `id_detail_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `id_transaksi` int(11) DEFAULT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `dibuat` datetime DEFAULT CURRENT_TIMESTAMP,
  `diedit` datetime DEFAULT NULL,
  PRIMARY KEY (`id_detail_transaksi`),
  KEY `fk_id_detail_transaksi_idx` (`id_transaksi`),
  KEY `fk_id_produk_idx` (`id_produk`),
  KEY `fk_id_user_detail_transaksi_idx` (`id_user`),
  CONSTRAINT `fk_id_detail_transaksi` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_produk` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_user_detail_transaksi` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detail_transaksi`
--

LOCK TABLES `detail_transaksi` WRITE;
/*!40000 ALTER TABLE `detail_transaksi` DISABLE KEYS */;
/*!40000 ALTER TABLE `detail_transaksi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `komentar`
--

DROP TABLE IF EXISTS `komentar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL AUTO_INCREMENT,
  `id_produk` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nama` varchar(65) DEFAULT NULL,
  `isi` mediumtext,
  `diverikasi` tinyint(1) DEFAULT '0',
  `dibuat` datetime DEFAULT NULL,
  PRIMARY KEY (`id_komentar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `komentar`
--

LOCK TABLES `komentar` WRITE;
/*!40000 ALTER TABLE `komentar` DISABLE KEYS */;
/*!40000 ALTER TABLE `komentar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produk`
--

DROP TABLE IF EXISTS `produk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(125) DEFAULT NULL,
  `harga` int(11) DEFAULT '0',
  `stok` int(11) DEFAULT '0',
  `jenis_produk` varchar(64) DEFAULT '0',
  `tag` tinytext,
  `deskripsi` longtext,
  `gambar` varchar(255) DEFAULT NULL,
  `dibuat` datetime DEFAULT CURRENT_TIMESTAMP,
  `diedit` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_produk`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produk`
--

LOCK TABLES `produk` WRITE;
/*!40000 ALTER TABLE `produk` DISABLE KEYS */;
INSERT INTO `produk` VALUES (1,'PARACETAMOL KIMIA FARMA 500MG',1833,500,'obat','Sakit kepala , sakit gigi , demam , nyeri haid , sakit pada otot , obat generik','PARACETAMOL KIMIA FARMA 500MG merupakan sediaan tablet yang didistribusikan oleh PT. Kimia Farma. Paracetamol merupakan salah satu obat yang masuk ke dalam golongan analgesik (pereda nyeri) dan antipiretik (penurun demam). Obat ini dipakai untuk meredakan rasa sakit ringan hingga menengah seperti sakit kepala, sakit gigi dan, mialgia serta menurunkan demam. ','para.jpg',NULL,NULL),(2,'OBH COMBI BATUK BERDAHAK RASA MINT 100ML',11666,50,'obat','batuk berdahak , flu , demam , mengencerkan dahak','obat batuk berdahak','obh.jpg',NULL,NULL),(3,'ASAM MEFENAMAT BERNO 500MG',413,100,'obat','sakit gigi , sakit kepala , dismenore , nyeri , nyeri otot , generik','merupakan kelompok anti inflamasi nonsteroid yang mempunyai efek analgesik, anti inflamasi dan antipiretik.','asam.jpg',NULL,NULL),(4,'VITAMIN C IPI',4200,120,'suplemen_vitamin','vitamin C , vitamin , suplemen , daya tahan tubuh , kekebalan tubuh','vitamin C untuk meningkatkan daya tahan tubuh','cipi.jpg',NULL,NULL),(5,'HEPAMAX CAP',335966,10,'suplemen_vitamin','suplemen hati , hepatitis , fungsi hati , liver , sakit kuning','suplemen pemelihara fungsi hati','cap.jpg',NULL,NULL),(6,'PYNOCARE CAP 30S',128876,10,'suplemen_vitamin','suplemen , vitamin kulit , vitamin e , flek hitam','suplemen untuk kesehatan kulit','py.jpg',NULL,NULL),(7,'NESCO CHECK GLUCOSE STRIP 25\'S',4975,20,'alat_kesehatan','gula darah , tes kadar gula , test glucose','Nesco Glucose Strip merupakan alat kesehatan dengan fungsi mengukur kadar gula, sangat mudah dan praktis untuk digunakan.','nesco.jpg',NULL,NULL),(8,'TERUMO INFUSET DEWASA',23091,30,'alat_kesehatan','infuset , selang infus , alat infus , alat kesehatan','Terumo infuset dewasa merupakan alat kesehatan yang digunakan untuk keperluan infus pada pasien dewasa. Terumo infuset dewasa steril, non pyrogenic, tidak mengandung DEHP, dan tidak mengandung LATEX sehingga aman untuk digunakan. Segera digunakan setelah kemasan dibuka untuk menghindari risiko terjadinya infeksi. Digunakan untuk sekali pemakaian.','infus.jpg',NULL,NULL),(9,'NEUROLOGICAL REFLEX HAMMERS GENERAL CARE',40529,15,'alat_kesehatan','reflex hammer , alkes , alat kesehatan , general care , neurological','Neurologiacal reflex hammer merupakan alat kesehatan yang digunakan untuk oleh praktisi kesehatan untuk memeriksa reflex tendon, refleks bagian terpenting dari sistem neurologic untuk mendeteksi adanya ketidak normalan pada sistem saraf pusat atau sitem saraf peripheral.','hammer.jpg',NULL,NULL);
/*!40000 ALTER TABLE `produk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transaksi`
--

DROP TABLE IF EXISTS `transaksi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `dibuat` datetime DEFAULT CURRENT_TIMESTAMP,
  `diedit` datetime DEFAULT NULL,
  `total_beli` int(11) DEFAULT NULL,
  `kode` varchar(6) DEFAULT NULL,
  `metode_pengiriman` varchar(45) DEFAULT NULL,
  `ongkir` int(11) DEFAULT NULL,
  `total_transaksi` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`),
  KEY `fk_id_user_transaksi_idx` (`id_user`),
  CONSTRAINT `fk_id_user_transaksi` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transaksi`
--

LOCK TABLES `transaksi` WRITE;
/*!40000 ALTER TABLE `transaksi` DISABLE KEYS */;
/*!40000 ALTER TABLE `transaksi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(125) DEFAULT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(90) NOT NULL,
  `level` enum('admin','customer') DEFAULT NULL,
  `kode_verifikasi` varchar(90) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `reset_pass` tinyint(1) DEFAULT '0',
  `kode_reset_pass` varchar(5) DEFAULT NULL,
  `nama_depan` varchar(45) DEFAULT NULL,
  `nama_belakang` varchar(45) DEFAULT NULL,
  `alamat` mediumtext,
  `tgl_lahir` date DEFAULT NULL,
  `kontak` varchar(16) DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `dibuat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `diedit` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'admin@onpotik.co.id','admin','$2a$12$ZcfmUbHGttlyU6CmytpbDOl15ph.IR7IFUbU2rD7pViW1.c/XOV..','admin',NULL,1,NULL,NULL,'Hasan','Mangrove','Jalan Terus Jadian Enggak','2017-11-27','','L','2017-12-11 18:58:36','2017-12-11 18:58:36'),(2,'customer@gmail.com','customer','$2a$12$JUmoVObHkKFxkPXIRgkdT.2Vk4xIArK3jT.zKOoA9g6L1x2z3EW.S','customer',NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-12-11 18:58:36','2017-12-11 18:58:36');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-01-03 21:25:51
