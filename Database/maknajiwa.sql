/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100414
 Source Host           : localhost:3306
 Source Schema         : maknajiwa

 Target Server Type    : MySQL
 Target Server Version : 100414
 File Encoding         : 65001

 Date: 10/12/2021 20:06:34
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for artikel
-- ----------------------------
DROP TABLE IF EXISTS `artikel`;
CREATE TABLE `artikel`  (
  `id_artikel` int(11) NOT NULL AUTO_INCREMENT,
  `judul_artikel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_terbit` timestamp(0) NOT NULL DEFAULT current_timestamp(0),
  `penulis` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi_singkat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_artikel`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of artikel
-- ----------------------------
INSERT INTO `artikel` VALUES (1, 'Faktor Risiko OCD\r\n', 'Faktor risiko OCD meliputi faktor keturunan, struktur otak dan fungsinya (masih belum jelas), serta lingkungan hidup. Namun, hal yang paling memengaruhi adalah lingkungan hidup yang tidak mendukung perkembangan psikis pengidap sewaktu kecil, yaitu ketika ', 'https://image-cdn.medkomtek.com/sl-BjXmEziuG1UB0dCnWzbGGbco=/640x640/smart/klikdokter-media-buckets/medias/2327192/original/008572400_1636352942-Gangguan-Mental-OCD.jpg', '2021-12-09 20:10:11', 'Dwi', 'Faktor risiko OCD');
INSERT INTO `artikel` VALUES (2, 'Pengertian OCD', 'Obsessive-Compulsive Disorder (OCD) adalah sejenis gangguan mental. Orang dengan OCD memiliki pikiran dan dorongan yang tidak dapat dikendalikan dan berulang (obsesi), serta perilaku (paksaan) kompulsif. Contoh perilaku kompulsif adalah mencuci tangan 7 k', 'https://image-cdn.medkomtek.com/sl-BjXmEziuG1UB0dCnWzbGGbco=/640x640/smart/klikdokter-media-buckets/medias/2327192/original/008572400_1636352942-Gangguan-Mental-OCD.jpg', '2021-12-09 20:09:57', 'Farrel', 'Obsessive-Compulsive Disorder (OCD) adalah sejenis gangguan mental.');
INSERT INTO `artikel` VALUES (3, 'Penyebab', 'OCD adalah gangguan umum yang menyerang orang dewasa, remaja, dan anak-anak di seluruh dunia. Kebanyakan orang didiagnosis pada usia 19 tahun, biasanya dalam usia dini pada anak laki-laki daripada anak perempuan.\r\n\r\n', 'https://image-cdn.medkomtek.com/sl-BjXmEziuG1UB0dCnWzbGGbco=/640x640/smart/klikdokter-media-buckets/medias/2327192/original/008572400_1636352942-Gangguan-Mental-OCD.jpg', '2021-12-09 20:11:36', 'Ageng', 'OCD adalah gangguan umum yang menyerang orang dewasa, remaja, dan anak-anak di seluruh dunia.');
INSERT INTO `artikel` VALUES (5, 'TESA 2', 'Ini artikel tentang tesa 2', 'https://image-cdn.medkomtek.com/sl-BjXmEziuG1UB0dCnWzbGGbco=/640x640/smart/klikdokter-media-buckets/medias/2327192/original/008572400_1636352942-Gangguan-Mental-OCD.jpg', '2021-12-09 20:45:32', 'TESA 3', 'Ini artikel tentang tesa 2');

-- ----------------------------
-- Table structure for kategori
-- ----------------------------
DROP TABLE IF EXISTS `kategori`;
CREATE TABLE `kategori`  (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_kategori`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kategori
-- ----------------------------
INSERT INTO `kategori` VALUES (1, 'Kecemasan', 'Tes Kecemasan');
INSERT INTO `kategori` VALUES (2, 'Depresi', 'Tes Depresi');
INSERT INTO `kategori` VALUES (3, 'Stress', 'Tes Stress');
INSERT INTO `kategori` VALUES (4, 'Bipolar/Mood Swing', 'Tes Bipolar');
INSERT INTO `kategori` VALUES (5, 'PTSD/Gangguan Stress', 'Tes PTSD');
INSERT INTO `kategori` VALUES (6, 'OCD/Overthinking', 'Tes OCD');
INSERT INTO `kategori` VALUES (7, 'ADHD/Gejala Hiperaktif', 'Tes ADHD');
INSERT INTO `kategori` VALUES (8, 'tes', 'tes');
INSERT INTO `kategori` VALUES (10, 'Kegilaan', 'Tes ini berisi kegilaan');
INSERT INTO `kategori` VALUES (11, 'Update coba', 'Update coba');
INSERT INTO `kategori` VALUES (13, 'Cinta Buta', 'Cinta Buta');

-- ----------------------------
-- Table structure for soal
-- ----------------------------
DROP TABLE IF EXISTS `soal`;
CREATE TABLE `soal`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `no_soal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `soal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `opsi_a` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `opsi_b` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `opsi_c` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `opsi_d` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `opsi_e` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 44 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of soal
-- ----------------------------
INSERT INTO `soal` VALUES (1, '1', '1', 'Saya merasa sangat sulit untuk bersantai, bersantai atau duduk diam\r\n\r\nSaya merasa sangat sulit untuk bersantai, bersantai atau duduk diam', 'Tidak Pernah', 'Pernah', 'Kadang-kadang', 'Sering', 'Sangat sering');
INSERT INTO `soal` VALUES (2, '1', '2', 'Saya memiliki masalah perut, seperti merasa sakit atau kram perut', 'Tidak Pernah', 'Pernah', 'Kadang-kadang', 'Sering', 'Sangat sering');
INSERT INTO `soal` VALUES (3, '1', '3', 'Saya mudah tersinggung dan mudah tersinggung', 'Tidak pernah', 'Pernah', 'Kadang-kadang', 'Sering', 'Sangat sering');
INSERT INTO `soal` VALUES (4, '1', '4', 'Saya pernah mengalami sesak nafas', 'Tidak pernah', 'Pernah', 'Kadang-kadang', 'Sering', 'Sangat sering');
INSERT INTO `soal` VALUES (5, '1', '5', 'Saya terkadang merasa pusing dan goyah', 'Tidak pernah', 'Pernah', 'Kadang-kadang', 'Sering', 'Sangat sering');
INSERT INTO `soal` VALUES (6, '1', '6', 'Saya mengalami kesulitan tidur (termasuk bangun lebih awal, sulit untuk tidur)', 'Tidak pernah', 'Pernah', 'Kadang-kadang', 'Sering', 'Sangat sering');
INSERT INTO `soal` VALUES (7, '1', '7', 'Saya merasa panik dan kewalahan oleh hal-hal dalam hidup saya', 'Tidak pernah', 'Pernah', 'Kadang-kadang', 'Sering', 'Sangat sering');
INSERT INTO `soal` VALUES (8, '1', '8', 'Saya merasa gugup dan gelisah', 'Tidak pernah', 'Pernah', 'Kadang-kadang', 'Sering', 'Sangat sering');
INSERT INTO `soal` VALUES (9, '1', '9', 'Saya memiliki tangan gemetar', 'Tidak pernah', 'Pernah', 'Kadang-kadang', 'Sering', 'Sangat sering');
INSERT INTO `soal` VALUES (10, '1', '10', 'Sepertinya saya terus-menerus mengkhawatirkan banyak hal', 'Tidak pernah', 'Pernah', 'Kadang-kadang', 'Sering', 'Sangat sering');
INSERT INTO `soal` VALUES (12, '2', '1', 'Saya merasa sangat sedih kadang-kadang\r\n\r\n', 'Sangat tidak setuju', 'Tidak setuju', 'Agak setuju', 'Sangat setuju', '');
INSERT INTO `soal` VALUES (13, '2', '2', 'Ketika saya memikirkan masa depan saya merasa putus asa\r\n\r\n', 'Sangat tidak setuju', 'Tidak setuju', 'Agak setuju', 'Sangat setuju', '');
INSERT INTO `soal` VALUES (14, '2', '3', 'Saya merasa gagal total\r\n\r\n', 'Sangat tidak setuju', 'Tidak setuju', 'Agak setuju', 'Sangat setuju', '');
INSERT INTO `soal` VALUES (15, '2', '4', 'Saya mendapatkan banyak kepuasan/kegembiraan dari melakukan sesuatu\r\n\r\n', 'Sangat tidak setuju', 'Tidak setuju', 'Agak setuju', 'Sangat setuju', '');
INSERT INTO `soal` VALUES (16, '2', '5', 'Saya sering merasa bersalah tentang sesuatu\r\n\r\n', 'Sangat tidak setuju', 'Tidak setuju', 'Agak setuju', 'Sangat setuju', '');
INSERT INTO `soal` VALUES (17, '2', '6', 'Saya merasa seperti sedang dihukum\r\n\r\n', 'Sangat tidak setuju', 'Tidak setuju', 'Agak setuju', 'Sangat setuju', '');
INSERT INTO `soal` VALUES (18, '2', '7', 'Saya merasa kecewa (bahkan jijik) dengan diri saya sendiri\r\n\r\n', 'Sangat tidak setuju', 'Tidak setuju', 'Agak setuju', 'Sangat setuju', '');
INSERT INTO `soal` VALUES (19, '2', '8', 'Hal-hal buruk dalam hidupku bukan sepenuhnya salahku\r\n\r\n', 'Sangat tidak setuju', 'Tidak setuju', 'Agak setuju', 'Sangat setuju', '');
INSERT INTO `soal` VALUES (20, '2', '9', 'Saya sering di ambang air mata atau menangis\r\n\r\n', 'Sangat tidak setuju', 'Tidak setuju', 'Agak setuju', 'Sangat setuju', '');
INSERT INTO `soal` VALUES (21, '2', '10', 'Saya merasa jengkel dan terganggu oleh hal-hal dalam hidup saya\r\n\r\n', 'Sangat tidak setuju', 'Tidak setuju', 'Agak setuju', 'Sangat setuju', '');
INSERT INTO `soal` VALUES (22, '2', '11', 'Saya sangat tertarik dengan kehidupan orang lain dan suka mendengarkan mereka\r\n\r\n', 'Sangat tidak setuju', 'Tidak setuju', 'Agak setuju', 'Sangat setuju', '');
INSERT INTO `soal` VALUES (23, '2', '12', 'Saya merasa mudah untuk membuat keputusan, besar dan kecil\r\n\r\n', 'Sangat tidak setuju', 'Tidak setuju', 'Agak setuju', 'Sangat setuju', '');
INSERT INTO `soal` VALUES (24, '2', '13', 'Saya pikir saya tidak menarik atau jelek\r\n\r\n', 'Sangat tidak setuju', 'Tidak setuju', 'Agak setuju', 'Sangat setuju', '');
INSERT INTO `soal` VALUES (25, '2', '14', 'Saya merasa sangat sulit untuk melakukan apa pun, terutama pekerjaan\r\n\r\n', 'Sangat tidak setuju', 'Tidak setuju', 'Agak setuju', 'Sangat setuju', '');
INSERT INTO `soal` VALUES (26, '2', '15', 'Pola tidurku benar-benar terganggu\r\n\r\n', 'Sangat tidak setuju', 'Tidak setuju', 'Agak setuju', 'Sangat setuju', '');
INSERT INTO `soal` VALUES (27, '2', '16', 'Saya sangat lelah saya tidak punya energi untuk melakukan apa pun\r\n\r\n', 'Sangat tidak setuju', 'Tidak setuju', 'Agak setuju', 'Sangat setuju', '');
INSERT INTO `soal` VALUES (28, '2', '17', 'Nafsu makan saya telah banyak berubah\r\n\r\n', 'Sangat tidak setuju', 'Tidak setuju', 'Agak setuju', 'Sangat setuju', '');
INSERT INTO `soal` VALUES (29, '2', '18', 'Saya telah kehilangan banyak berat badan\r\n\r\n', 'Sangat tidak setuju', 'Tidak setuju', 'Agak setuju', 'Sangat setuju', '');
INSERT INTO `soal` VALUES (30, '2', '19', 'Saya sangat prihatin, bahkan sibuk, dengan kesehatan fisik saya\r\n\r\n', 'Sangat tidak setuju', 'Tidak setuju', 'Agak setuju', 'Sangat setuju', '');
INSERT INTO `soal` VALUES (31, '2', '20', 'Saya sama sekali tidak tertarik dengan hubungan seksual\r\n\r\n', 'Sangat tidak setuju', 'Tidak setuju', 'Agak setuju', 'Sangat setuju', '');
INSERT INTO `soal` VALUES (32, '2', '21', 'Saya telah berpikir untuk mengakhiri hidup saya\r\n\r\n', 'Sangat tidak setuju', 'Tidak setuju', 'Agak setuju', 'Sangat setuju', '');
INSERT INTO `soal` VALUES (33, '3', '1', 'Tes', 'Tidak pernah', 'Pernah', 'Kadang-kadang', 'Sering', 'Sangat sering');
INSERT INTO `soal` VALUES (35, '3', '2', 'Tes 2', 'Tidak pernah', 'Pernah', 'Kadang-kadang', 'Sering', 'Sangat sering');
INSERT INTO `soal` VALUES (36, '4', '1', 'Tes', 'Tidak pernah', 'Pernah', 'Kadang-kadang', 'Sering', 'Sangat sering');
INSERT INTO `soal` VALUES (37, '4', '2', 'Tes 2', 'Tidak pernah', 'Pernah', 'Kadang-kadang', 'Sering', 'Sangat sering');
INSERT INTO `soal` VALUES (42, '5', '1', 'Apakah kamu cinta dia?', 'Sangat tidak setuju', 'Tidak setuju', 'Agak setuju', 'Sangat setuju', '');
INSERT INTO `soal` VALUES (43, '6', '1', 'Di jatuh cinta ke orang lain?', 'Sangat tidak setuju', 'Tidak setuju', 'Agak setuju', 'Sangat setuju', '');

-- ----------------------------
-- Table structure for solusi
-- ----------------------------
DROP TABLE IF EXISTS `solusi`;
CREATE TABLE `solusi`  (
  `id_solusi` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `solusi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `hasil` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_solusi`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of solusi
-- ----------------------------
INSERT INTO `solusi` VALUES (1, '1', 'Sebaiknya kamu begini...', '20');
INSERT INTO `solusi` VALUES (2, '1', 'Sebaiknya kamu begini ', '30');

-- ----------------------------
-- Table structure for tes_hasil
-- ----------------------------
DROP TABLE IF EXISTS `tes_hasil`;
CREATE TABLE `tes_hasil`  (
  `id_tes` int(11) NOT NULL AUTO_INCREMENT,
  `total_nilai` int(11) NOT NULL,
  `id_kategori` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_tes`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tes_hasil
-- ----------------------------
INSERT INTO `tes_hasil` VALUES (1, 20, '1');

-- ----------------------------
-- View structure for view_hasil
-- ----------------------------
DROP VIEW IF EXISTS `view_hasil`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `view_hasil` AS SELECT
	id_tes, 
	total_nilai,
	CASE 
	WHEN total_nilai <= 20 THEN
		"Tidak Mengalami"
	WHEN total_nilai > 20 && total_nilai < 29 THEN
		"Kadang-kadang"
	WHEN total_nilai >= 30 THEN
		"Mengalamai"
	END AS hasil,
	id_kategori
FROM
	tes_hasil ;

-- ----------------------------
-- Triggers structure for table tes_hasil
-- ----------------------------
DROP TRIGGER IF EXISTS `hasil`;
delimiter ;;
CREATE TRIGGER `hasil` AFTER INSERT ON `tes_hasil` FOR EACH ROW BEGIN
	UPDATE tes_hasil SET hasil = "Mengalami" WHERE id_kategori = NEW.id_kategori;
END
;;
delimiter ;

SET FOREIGN_KEY_CHECKS = 1;
