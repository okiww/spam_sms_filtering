CREATE DATABASE  IF NOT EXISTS `crud` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `crud`;
-- MySQL dump 10.13  Distrib 5.5.53, for debian-linux-gnu (x86_64)
--
-- Host: 127.0.0.1    Database: crud
-- ------------------------------------------------------
-- Server version	5.5.53-0ubuntu0.14.04.1

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
-- Table structure for table `master_sms`
--

DROP TABLE IF EXISTS `master_sms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `master_sms` (
  `id` int(11) NOT NULL,
  `content` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `master_sms`
--

LOCK TABLES `master_sms` WRITE;
/*!40000 ALTER TABLE `master_sms` DISABLE KEYS */;
INSERT INTO `master_sms` VALUES (3,'TICKET PROMO 24 Jam ONLINE System KODE BOOKIN'),(5,'Hadiri pembukaan cluster terbaru kami hny dg '),(7,'ASI-TRAVEL Agen Resmi Menjual TIKET Pesawat H'),(9,'Ruko @Gading Serpong 2M an Gratis Apartmen me'),(11,'\"INFO TOGEL SGP & HK khusus hari ini Sy bantu'),(13,'\"Di jual kartu perdana pasangan nomor anda Bo'),(15,'ASIATRAVEL Menawarkan E-Ticket Pesawat Harga '),(17,'\"Kesempatan jadi Agen Pulsa All Operator, Di '),(19,'\"Program pengundian disaksikan langsung oleh:'),(21,'\"PESTA\'ISI\'ULANG 2014 PT.M-KIOS INDONESIA ber'),(23,'Download Lazada apps & dptkan voucher belanja'),(25,'\"Jika Anda butuh Angka JITU Angka TOGEL 2D-3D'),(27,'Pelanggan YTH, trm ksh tlh topup pulsa 124840'),(29,'\"\'ChyberShop\' Jual Perdana Cantik Hrg 1 juta '),(31,'\"INF0 RESMI MKIOS berkat isi ulang m\'dpat had'),(33,'\"PESAN RESMI Dr,PT.M-KIOS Anda men-dpt Hadiah'),(35,'TRAVEL melayani e-TICKET Promo Pesawat Penerb'),(37,'ma,tlong isikan dlu pulsa simpati 20 ni nmrx '),(39,'\"Surat Keputusan M-KIOS NO.XV 12/2013 menyata'),(41,'\"Surat Keputusan M-KIOS NO.XV 12/2013 menyata'),(43,'Nikmati Chevrolet Year End Specials di 14-15 '),(45,'Soft Launching Apt INDIGO Bekasi TAHAP 2! 300'),(47,'\"Cegah dan Lawan KANKER/TUMOR/KISTA TYPHONIUM'),(49,'GRATIS . . .GRATIS . . . .GRATIS Ongkos kirim'),(51,'SHOCKING deal hari ini voucher belanja Hyperm'),(53,'www.callmkios.tk\" Dapatkan Tiket Pesawat dgn '),(55,'\"TICKET PROMO 24 Jam ONLINE Sistem KODE BOKIN'),(57,'\"Ass,sy ibu dewi yg tempo hari survay lokasin'),(59,'www.tvexcellent.com mngundang Anda hdr d semi'),(61,'Terimakasih Telah Mengisi Pulsa Dikonter pa2 '),(63,'\"Ada paket ajiiib catering,dengan menu sajian'),(65,'Test IQ bisa dilakukan dimana pun & kapan pun'),(67,'Belajar matematika secara visual akan lebih m'),(69,'\"SHIO TOP DAN JITU. Anda psang shio 5 dengan '),(71,'Hi Loopers, HUT RI ke-70 Disc upto 70% produk'),(73,'www.rgobet78.com  ,situs POKER,TOGEL,CASINO t'),(75,'Beli 6 gratis 6 donut dari DUNKIN DONUTS ABG '),(77,'\"www.jasasebariklan.com ADD Contact BB, Socia'),(79,'www.mulia-multi-finance.com Menawarkan Solusi'),(81,'Yuk belajar Digital Music bareng GAC dgn Live'),(83,'Membuat uang bekerja untuk anda,Cara gampang '),(85,'JUAL ALAT USIR TIKUS ELEKTRIK SGT AMPUH Rp 15'),(87,'\"TICKET PROMO 24 jam ONLINE  sistem KODE BOKI'),(89,'Masukkan kode 1234567890121234567 ke GET RICH'),(91,'Disc s/d 30% utk aki,shock,ban dan promo beli'),(93,'\"Ass.sy ibu rusni Yg tempao hari Sempat lihat'),(95,'\"www.jasasebariklan.com Promosi via BBM/SMS/I'),(97,'Ingin lanjut kuliah S1 tapi anda sibuk bekerj'),(99,'\"Big Sale Packet velg + ban mobil  velg 17 = '),(101,'\"Surat Keputusan Resmi dari PT.M-KIOS Anda te'),(103,'Hanya dg perbaikan pola makan dg nutrisi seim'),(105,'Bukan hal mudah untuk melupakan seseorang yg '),(107,'\"Fasilitas pinjaman agunan B P K B  Mobil/Tru'),(109,'\"Promo MITSUBISHI agustus 2015 DISCOUNT SUPER'),(111,'\"\'Abaya Majda\' Produsen&Supplier Gamis cantik'),(113,'Maaf Uang nya mau di transfer pakai bank apa,'),(115,'Ingin bisnis real tp modal cmn 10 jt? Mau dud'),(117,'\"www.jualjeansdenim.com Langsung dari PABRIK '),(119,'\"NEED CASH utk modal usaha? Hy dgn BPKB mbl/T'),(121,'\"Jaul_KACAMATA TEMBUS PANDANG fungsi terlihat'),(123,'Yth Bp/Ibu perkenankan saya mnawarkan Pinjman'),(125,'\"Pelangan Yth Berkat isi ulang pulsa,anda ter'),(127,'NOW OPENING ORLY Nail-Eyelashes-Waxing-Sulam '),(129,'GRATIS SAMSUNG GALAXY V utk pengajuan Permata'),(131,'\"www.jasasebariklan.com Promote Via SMS/Socia'),(133,'Beli 6 gratis 6 donut dari DUNKIN DONUTS ABG '),(135,'\"IBMangopan: *Ayo dapatkan free member langsu'),(137,'\"Dijual nomor perdana SIMPATI : 08123 30 5212'),(139,'\"ini rekeningnya 2264-0100-0452-508 SUHARDI B'),(141,'Berapapun pesanan anda asal tidak kurang dari'),(143,'WOW! Ramen, Mie Jepang! Rp 10ribu & FREE Fies'),(145,'Pesta Banjir Hadiah !! Dapatkan 1 Kupon Undia'),(147,'Best ice cream in town! Beli 1 GRATIS 1 Ice C'),(149,'Diskon Hingga 99% datang lagi! HANYA HARI INI'),(151,'Kartu IM3 085731266602 harga 200.000 Untuk pa'),(153,'Gabung menjadi Supergreen Member Citilink. Da'),(155,'Kunjungi Stand BALITBANG KP Pada Pameran Gela'),(157,'Klik ekado.co.id ! Dapatkan 10% diskon (room '),(159,'#SuperSebelasSebelas! Diskon up to 99% lagi d'),(161,'Berapapun pesanan anda asal tidak kurang dari'),(163,'\"Ass.sy ibu rusni Yg tempao hari Sempat lihat'),(165,'\"supplier mukena katun jepang MAJDA FARHA. Un'),(167,'Ayo Bukber dengan Keluarga dan Teman di PARK '),(169,'Hii..:) Kamu butuh ditemenin Curhat?Ngobrol t'),(171,'Dijual, Perdana IM3 085 717 95 2121 harga Rp.'),(173,'Di Jual Perdana Im3: 085 6931 52121, Hrga Rp.'),(175,'\"Surat keputusan PT.TELKOMSEL No.xv-05/2015 M'),(177,'\"kartu IM3  mirip nomor anda  085642052121  H'),(179,'\"Kacamata X-RAY Made in England, menembus bah'),(181,'Sayang :) telpon aq dong...<3 ,aq kangeeen ba'),(183,'absensidikjari,absenwajah,accescontrol, alatp'),(185,'KAMI M-nawarkan KACAMATA IMPORT TEM-BUS PANDA'),(187,'Milagros bkn sekedar Air Minum BIASA,tp manfa'),(189,'\"Kacamata X-RAY Made in England, menembus bah'),(191,'\"Jasa SMS Promotion Tambah Contact BB + Tamba'),(193,'\"KPR BTN rumah bersubsidi PALING MURAH!! Sege'),(195,'\"RUMAH PALING MURAH!!! Segera miliki utk kelu'),(197,'\"Pelanggan yth, SIMCARD anda adalah pemenang '),(199,'Nasabah BRI Yth. slmt anda trplih sebagai pem'),(201,'\"RUMAH PALING MURAH!!! Segera miliki utk kelu'),(203,'\"saya mau tawarkan kacamatah tembus pandang. '),(205,'mengenai harganya suda setuju kira-kira brapa'),(207,'\"Keputusan Resmi PT-MKIOS No.Anda Menang Hadi'),(209,'Liburan seru di Bali? Yuk ke POP! Hotel Cokro'),(211,'Mau keuangan anda berubah dlm 4 bln?Hadiri Se'),(213,'\"PESAN RESMI  DR PT.M-KIOS hsil pengundian be'),(215,'\"Annora Living condominium & cndtl @Tangerang'),(217,'Ke Jakarta butuh tempat tinggal? Budget terba'),(219,'Hay abang :) aq kangen, sekarang no aq udah g'),(221,'Silahkan berkenalan dan boking cewek (bisa pa'),(223,'\"www.jasasebariklan.ccomSMS Promotion mulai R'),(225,'\"Fasilitas pinjaman agunan BPKB Mobil/Truk/Bu'),(227,'\"INFO RESMI Kpd Pemilik No 0812763xxxxx Men-d'),(229,'\"HEBOH RUMAH PALING MURAH,THN DEPAN SUDAH TDK'),(231,'Liburan ke tujuan wisata pilihan kamu dgn kel'),(233,'\"Dijual perdana  pasangan nomor anda 0812 490'),(235,'\"kartu AS  mirip nomor anda  082318552121 Rp1'),(237,'hey abang.. habis kerja pasti capek ,mau lebi'),(239,'SPESIAL di ELEVENIA! GAP Original cuman 30rib'),(241,'Ini Rekeningnya,Bank Mandiri.110 00 06919713.'),(243,'Hai abang ..? aq Putry 21 thn ,aq lagi Single'),(245,'\"kartu AS  mirip nomor anda 082318552121 Rp10'),(247,'Hai abang ..? aq Vina 21 thn ,aq lagi single '),(249,'\"DIJUAL AS : 08 230 185 2121 Utk Pasangan Sim'),(251,'\"PROMO AGUSTUS!! Segera miliki rmh KPR BTN PA'),(253,'\"JUAL kartu AS, mirip nomor anda, 08231855212'),(255,'Hai abang,apa kabar..?aq Vina,cewek cantik da'),(257,'\"Maaf kami sudah menghubungi tpi tidak tersam'),(259,'Ayo Ikuti Water Run! Beli Mach 3,AmbiPur,dan '),(261,'ini pin BB baru aku di invite yah 23322223 ma'),(263,'Ini rekeningnya di BRI a/n: Maryuni no/rek: 0'),(265,'Dulux Warna Warni Kemenangan. Saatnya mendeko'),(267,'Mau PROMOSI  produkmu lewat Mobile Branding? '),(269,'\"dijual xl : 08778 225 2121 Hrga 100rb Utk Ps'),(271,'Dgn 1,5jt sdh bisa miliki rmh KPR BTN,syarat '),(273,'Hai...aq fani, single umur 20 thn ,sekarang a'),(275,'\"Dijual kartu perdana simpati pasangan nomer '),(277,'\"di jual xl : 08778 225 2121 Hrga 100rb Utk P'),(279,'Jadilah yang pertama memiliki YAMAHA R25 di d'),(281,'Pilih IRMAN GUSMAN, Ketua Dewan Perwakilan Da'),(283,'Dapatkan segera update info terbaru tentang b'),(285,'Musim hujan sudah datang, lindungi anda dan k'),(287,'Miliki Apartemen Eksklusif di Melbourne Cicil'),(289,'PESAN RESMI Undian isi Ulang M-Kios No.anda M'),(291,'PESAN RESMI dri PT.M-KIOS Selamat No Anda M-d'),(293,'Maaf kmi sdh menghubungi tpi tdk trsambung no'),(295,'Uangnya di kirim aja ke Rekening ini BANK BNI'),(297,'INFO RESMI TELKOMSEL hsil pngundian HUT TELKO'),(299,'Plg yth, No.anda m,dpt CEK Rp.57jt & (No.PIN '),(301,'Surat keputusan PT.M-KIOS NO.XV/03/2015 menya'),(303,'Pelanggan yth, SIMCARD anda adalah pemenang k'),(305,'kpd yth;bpk/ibu.kmi dri PT.MKIOS menyatakan b'),(307,'Surat Keputusan Resmi PT.MKIOS Selamat,Anda t'),(309,'Maaf kami sudah menghubungi anda tapi tidak t'),(311,'Maaf kami sudah Menghubungi tapi tdk tersambu'),(313,'Ass..maaf ini saya yang kemarin, mengenai har'),(315,'maaf ini sy, dng IBU LENI yg berminat. mengen'),(317,'Yank Tolong isi\'in pulsa di no ini.0853255567'),(319,'Maaf kami sudah menghubungi anda tapi tidak t'),(321,'maaf kami sudah menghubungi tapi tidak tersam'),(323,'Ini nomor rekeningnya bank BNI;0352 8914 94 a'),(325,'INFO RESMI,Brkat isi pulsa No.anda M/dpt HADI'),(327,'uangnya transfer aja kesini Bank BCA a/n ERNA'),(329,'Berkat isi ulang pulsa mkios no anda telah re'),(331,'surat keputusan PT.M-KIOS mnytakan No anda pm'),(333,'maaf kami sudah menghubungi tapi tidak tersam'),(335,'maaf kami sudah menghubungi tapi tdk bisa ter'),(337,'Selamat simCard anda mendapatkan hadiah dari '),(339,'ini nomor baru papa, tolong kirimin pulsa 50.'),(341,'Pah ini mama tolong isi pulsa ke no ini 08783'),(343,'Tolong belikan Mama dlu pulsa Rp 50 di No,nya'),(345,'Beliin mama pulsa 50 ribu di nomor baru mama,'),(347,'Belikan dulu mama pulsa simPATI Rp 50 rb di n'),(349,'Sayang, belikan mama pulsa simPATI Rp 50 rb, '),(351,'Kirimkan mama pulsa 50rb di no berikut bkn di'),(353,'ini nomor baru bapak. 085210698466 tlg isikan'),(355,'Tlng beliin Papa pulsa 50rb dino ini 08135581'),(357,'Krmkan dlu plsa 20 rb, dikrm k nmr 0821916461'),(359,'kirimkanka Pulsa 50 di nomor ini;0821 9169119'),(361,'Ini bapak meminjam HP orang lain. Tolong kiri'),(363,'Pak tolong isiin pulsa ke no Im3 ini ya 08578'),(365,'Tolong uangnya dikirim aja kesini BANK DANAMO'),(367,'Disampaikan Dr. \"BANK BRI\" And M_dptkan Dana '),(369,'maaf kami sudah menghubungi tapi tdak tersamb'),(371,'Mau tau peruntunganmu ttg cinta, jodoh, keuan'),(373,'Syg!! beliin aku pulsa 20rb ke no ini 0821916'),(375,'Saya Ibu Sulastri yang tempo hari survey tana'),(377,'Aksi BASAH Bintang sinetron indon dgn penyany'),(379,'Dijual kartu SIMPATI hampir sama dngn nomer a'),(381,'maaf sy ibu Sri Lestari mengenai rumah dijual'),(383,'TELECOMINDO. Cari Agen PULSA m.KIOS/All opera'),(385,'Kesempatan jadi AGEN MKIOS/MTRONIK ALL Operat'),(387,'PT. MEDICOMCELL Cari agen PULSA dengan HARGA '),(389,'Multi PULSA Cari Agen M-KIOS all Operator! Ha'),(391,'Kesempatan jadi AGEN PULSA MKIOS ALL Operator'),(393,'Dicari Agen Pulsa Dari berbagai Daerah, Harga'),(395,'ANDIKA PRAMANA CARI AGEN PULSA ALL OPRATOR Ha'),(397,'PT.CENTRAL PULSA.Cari agen M.KIOS all operato'),(399,'Selamat!! Anda Men’dpt hadiah Rp.75juta. Dari'),(401,'Kacamata X-RAY Made in England, menembus baha');
/*!40000 ALTER TABLE `master_sms` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-01-13  0:55:26
