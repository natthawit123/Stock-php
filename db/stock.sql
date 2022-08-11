-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2020 at 10:16 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `from`
--

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `idproducts` varchar(11) DEFAULT NULL,
  `unit` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `unit2` varchar(255) NOT NULL,
  `type2` varchar(255) NOT NULL,
  `piece` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `pack` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `size2` varchar(255) NOT NULL,
  `box` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `format` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `name`, `idproducts`, `unit`, `type`, `unit2`, `type2`, `piece`, `weight`, `pack`, `size`, `size2`, `box`, `detail`, `format`, `photo`) VALUES
(84, 'ถุงฟอยก้นตั้งหน้าใสหลังเงิน', '001', '56', 'เเพ็ค', '', '', '50', '', '1', '5 × 7 ', 'นิ้ว', '1', '-', 'กล่อง', 'messageImage_1605321217654.jpg'),
(85, 'ถุงซิปใสก้นตั้ง ', '002', '7', 'เเพ็ค', '', '', '50', '', '1', '4.5 × 8', 'นิ้ว', '1', '-', 'กล่อง', 'messageImage_1605321224656.jpg'),
(86, 'ถุงซิปคราฟก้นตั้ง ', '003', '3', 'เเพ็ค', '29', 'ชิ้น', '50', '', '1', '6 × 8.75', 'นิ้ว', '1', '-', 'กล่อง', 'messageImage_1605321230175.jpg'),
(87, 'ถุงซิปคราฟก้นตั้ง ', '004', '1', 'เเพ็ค', '', '', '50', '', '1', '6.75 × 9.5', 'นิ้ว', '1', '-', 'กล่อง', 'messageImage_1605321230175.jpg'),
(88, 'ถุงซิปคราฟก้นตั้ง ', '005', '28', 'ชิ้น', '', '', '50', '', '1', '7 × 11', 'นิ้ว', '1', '-', 'กล่อง', 'messageImage_1605321230175.jpg'),
(89, 'ถุงฟอยก้นตั้งหน้าใสหลังเงิน ', '006', '5', 'เเพ็ค', '23', 'ชิ้น', '50', '', '1', '4.5 × 8', 'นิ้ว', '2', '-', 'กล่อง', 'messageImage_1605321239036.jpg'),
(90, 'ถุงแวคคั่ม', '007', '2', 'เเพ็ค', '', '', '100', '', '1', '8 × 12', 'นิ้ว', '2', '-', 'กล่อง', 'messageImage_1605321246448.jpg'),
(91, 'ถุงแก้ว ', '008', '1', 'เเพ็ค', '', '', '1', 'กิโลกรัม', '1', '9 × 14', 'นิ้ว', '2', '-', 'กล่อง', 'messageImage_1605321251187.jpg'),
(92, 'ถุงจีบ ', '009', '11', 'เเพ็ค', '39', 'ชิ้น', '500', 'กรัม', '1', '7 × 11', 'นิ้ว', '2', '-', 'กล่อง', 'messageImage_1605321255677.jpg'),
(93, 'ถุงจีบ', '010', '4', 'เเพ็ค', '', '', '500', 'กรัม', '1', '6 × 9', 'นิ้ว', '2', '-', 'กล่อง', 'messageImage_1605321255677.jpg'),
(94, 'ถุงซิปคราฟก้นตั้ง ', '011', '3', 'เเพ็ค', '', '', '50', '', '1', '6 × 8.75', 'นิ้ว', '2', '-', 'กล่อง', 'messageImage_1605321230175.jpg'),
(95, 'กระปุกเซฟตี้เหลี่ยม ', '012', '1', 'เเพ็ค', '', '', '25', '', '1', '120', 'ml.', '2', '-', 'กล่อง', 'messageImage_1605321271413.jpg'),
(96, 'ถุงซิปใสก้นตั้ง', '013', '4', 'เเพ็ค', '', '', '50', '', '1', '6 × 10', 'นิ้ว', '2', '-', 'กล่อง', 'messageImage_1605321276289.jpg'),
(97, 'ถ้วยน้้าดื่มฝาโดม ', '014', '9', 'เเพ็ค', '', '', '50', '', '1', '32', 'oz.', '3', '-', 'กล่อง', 'messageImage_1605321280727.jpg'),
(98, 'ฝาโดมไม่เจาะรู ', '015', '9', 'เเพ็ค', '25', 'ชิ้น', '50', '', '1', '116', 'mm.', '3', '-', 'กล่อง', 'messageImage_1605321285850.jpg'),
(99, 'ถุงกระดาษสีน้้าตาลหูเกลียว ', '016', '6', 'เเพ็ค', '', '', '50', '', '1', '32×11×42', 'cm.', '4', '-', 'กล่อง', 'messageImage_1605321289483.jpg'),
(100, 'ถุงกระดาษสีน้้าตาลหูเกลียว', '017', '3', 'เเพ็ค', '', '', '50', '', '1', '26×10×35', 'cm.', '5', '-', 'กล่อง', 'messageImage_1605321289483.jpg'),
(101, 'ถุงกระดาษสีน้้าตาลหูเกลียว ', '018', '31', 'ชิ้น', '', '', '50', '', '1', '32×11×42', 'cm.', '5', '-', 'กล่อง', 'messageImage_1605321289483.jpg'),
(102, 'ถุงกระดาษสีขาว ', '019', '1', 'เเพ็ค', '', '', '50', '', '1', '', '', '6', '-', 'กล่อง', 'messageImage_1605321294338.jpg'),
(103, 'ถุงกระดาษสีน้้าตาลหูเกลียว ', '020', '3', 'เเพ็ค', '40', 'ชิ้น', '50', '', '1', '26×10×35', 'cm.', '5', '-', 'กล่อง', 'messageImage_1605321289483.jpg'),
(104, 'ถุงกระดาษสีน้้าตาลหูเกลียว ', '021', '5', 'เเพ็ค', '22', 'ชิ้น', '50', '', '1', '32×11×24', 'cm.', '7', '-', 'กล่อง', 'messageImage_1605321289483.jpg'),
(105, 'ถุงกระดาษสีน้้าตาลหูเกลียว ', '022', '4', 'เเพ็ค', '', '', '50', '', '1', '26×10×35', 'cm.', '8', '-', 'กล่อง', 'messageImage_1605321289483.jpg'),
(106, 'ถุงกระดาษสีน้้าตาลหูเกลียว', '023', '1', 'เเพ็ค', '', '', '50', '', '1', '21×11×29', 'cm.', '9', '-', 'กล่อง', 'messageImage_1605321289483.jpg'),
(107, 'ถุงกระดาษสีน้้าตาลหูเกลียว', '024', '1', 'เเพ็ค', '', '', '50', '', '1', '19×13×21', 'cm.', '9', '-', 'กล่อง', 'messageImage_1605321289483.jpg'),
(108, 'ถุงกระดาษสีน้้าตาลหูเกลียว', '025', '1', 'เเพ็ค', '', '', '50', '', '1', '15×6.8×12.5', 'cm.', '9', '-', 'กล่อง', 'messageImage_1605321289483.jpg'),
(109, 'ถุงใส่ขวดไวน์สีน้้าตาล ', '026', '1', 'เเพ็ค', '', '', '10', '', '', '', '', '9', '-', 'กล่อง', '125476474_841568953338179_3095963503145158148_n.png'),
(110, 'กล่องหูหิ้ว', '027', '1', 'เเพ็ค', '', '', '20', '', '1', '7.5', 'นิ้ว', '9', '-', 'กล่อง', 'messageImage_1605321326581.jpg'),
(111, 'ถุงกระดาษสีน้้าตาลหูเกลียว', '028', '4', 'เเพ็ค', '', '', '50', '', '1', '26×1035', 'cm.', '10', '-', 'กล่อง', 'messageImage_1605321289483.jpg'),
(112, 'ถุงกระดาษสีขาว ', '029', '1', 'เเพ็ค', '', '', '50', '', '1', '', '', '11', '-', 'กล่อง', 'messageImage_1605321294338.jpg'),
(113, 'ถุงกระดาษสีฟ้า ', '030', '41', 'เเพ็ค', '', '', '50', '', '1', '', '', '11', '-', 'กล่อง', 'messageImage_1605321341829.jpg'),
(114, 'ถุงกระดาษสีเขียว ', '031', '3', 'เเพ็ค', '', '', '50', '', '1', '', '', '', '-', 'กระสอบ', 'messageImage_1605321346604.jpg'),
(115, 'กระปุกน้้าพริก BNO 111 ฝาใส ', '032', '24', 'เเพ็ค', '', '', '12', '', '', '', '', '12', '-', 'กล่อง', 'messageImage_1605321350560.jpg'),
(116, 'ถุงฟอยหนาใสหลังทอง ', '033', '9', 'เเพ็ค', '10', 'ใบ', '50', '', '1', '6 × 10', 'นิ้ว', '13', '-', 'กล่อง', 'messageImage_1605321355443.jpg'),
(117, 'ถุงหดรีดโค้ง', '034', '1', 'เเพ็ค', '', '', '1', 'กิโลกรัม', '1', '', '', '13', '-', 'กล่อง', 'messageImage_1605321359641.jpg'),
(118, 'ถุงหดรีดโค้ง', '035', '1', 'เเพ็ค', '', '', '1', 'กิโลกรัม', '1', '4.5 × 10', 'นิ้ว', '13', '-', 'กล่อง', 'messageImage_1605321363756.jpg'),
(119, 'ถุงร้อน ', '036', '1', 'เเพ็ค', '', '', '', '', '', '6 × 11', 'นิ้ว', '13', '-', 'กล่อง', 'messageImage_1605321369762.jpg'),
(120, 'ถุงแก้ว ', '037', '1', 'เเพ็ค', '', '', '', '', '', '6 × 11', 'นิ้ว', '13', '-', 'กล่อง', 'messageImage_1605321373212.jpg'),
(121, 'ถุงจีบ ', '038', '1', 'เเพ็ค', '', '', '', '', '', '9 × 14', 'นิ้ว', '13', '-', 'กล่อง', 'messageImage_1605321255677.jpg'),
(122, 'ซองฟอยเงิน ', '039', '1', 'เเพ็ค', '', '', '100', '', '1', '8 × 12', 'cm.', '13', '-', 'กล่อง', 'messageImage_1605321390381.jpg'),
(123, 'ถุงคุกกี้ลายกระบองเพชรเล็ก ', '040', '1', 'เเพ็ค', '', '', '50', '', '1', '', '', '13', '', 'กล่อง', 'messageImage_1605321394005.jpg'),
(124, 'ถุงจีบลายการ์ตูน ', '041', '1', 'เเพ็ค', '', '', '50', '', '1', '', '', '13', '-', 'กล่อง', 'messageImage_1605321398362.jpg'),
(125, 'ซองพระอาทิตย์ ', '042', '1', 'เเพ็ค', '', '', '100', '', '1', '5 × 9.5', 'นิ้ว', '13', '-', 'กล่อง', 'messageImage_1605321404204.jpg'),
(126, 'ซองชาเยื่อ ', '043', '10', 'เเพ็ค', '', '', '100', '', '1', '5 × 7', 'cm.', '13', '-', 'กล่อง', 'messageImage_1605321408951.jpg'),
(127, 'ถุงแก้ว ', '044', '1', 'เเพ็ค', '', '', '1', 'กิโลกรัม', '1', '5 × 8', 'cm.', '13', '-', 'กล่อง', 'messageImage_1605321412985.jpg'),
(128, 'กล่องใส่อาหาร E-20 ', '045', '20', 'เเพ็ค', '22', 'ชิ้น', '50', '', '1', '', '', '14', '-', 'กล่อง', 'messageImage_1605321418503.jpg'),
(129, 'กล่องเค้กหูหิ้ว', '046', '15', 'เเพ็ค', '', '', '25', '', '1', '', '', '15', '-', 'กล่อง', 'messageImage_1605321423301.jpg'),
(130, 'ขวดแก้ว ', '047', '40', 'ขวด', '', '', '', '', '', '', '', '16', '-', 'กล่อง', 'messageImage_1605321427566.jpg'),
(131, 'กล่องอาหาร E133 ', '048', '1', 'เเพ็ค', '37', 'ชิ้น', '50', '', '1', '', '', '17', '-', 'กล่อง', 'messageImage_1605321435457.jpg'),
(132, 'กระปุกเต้าฮวยเหลี่ยมฝาเซฟตี้หูหิ้ว ', '049', '9', 'ชิ้น', '', '', '', '', '', '', '', '17', '-', 'กล่อง', 'messageImage_1605321438612.jpg'),
(133, 'กล่องใสใส่อาหาร', '050', '40', 'ชิ้น', '', '', '', '', '', '', '', '17', '-', 'กล่อง', 'messageImage_1605321443066.jpg'),
(134, 'ถาดผักกลาง', '051', '93', 'ชิ้น', '', '', '', '', '', '', '', '17', '-', 'กล่อง', 'messageImage_1605321447690.jpg'),
(135, 'ขวดน้้ายาล้างจาน ', '052', '5', 'ขวด', '', '', '', '', '', '500', 'ml.', '18', '-', 'กล่อง', 'messageImage_1605321451167.jpg'),
(136, 'ขวดน้ยาล้างจาน ', '053', '14', 'ขวด', '', '', '', '', '', '250', 'ml.', '18', '-', 'กล่อง', 'messageImage_1605321451167.jpg'),
(137, 'เ ชื อ ก ท อ เ สื่อ ', '054', '6', 'ม้วน', '', '', '', '', '', '', '', '19', '-', 'กล่อง', 'messageImage_1605321456708.jpg'),
(138, 'เ ชื อ ก ข า ว ', '055', '3', 'มัด', '', '', '', '', '', '', '', '19', '-', 'กล่อง', 'messageImage_1605321460633.jpg'),
(139, 'เ ชื อ ก ไ น ล่อ น เ ขี ย ว ', '056', '25', 'มัด', '', '', '', '', '', '', '', '19', '-', 'กล่อง', 'messageImage_1605321465727.jpg'),
(140, 'ข ว ด แ ช ม พู แ บ น ข า ว ขุ่น', '057', '47', 'ใบ', '', '', '', '', '', '', '', '', '-', 'ถุงใส', 'messageImage_1605321470416.jpg'),
(141, 'ข ว ด ห ย ด น้้า ', '058', '117', 'ใบ', '', '', '', '', '', '330', 'ml.', '', '-', 'ถุงใส', 'messageImage_1605321473596.jpg'),
(142, 'ข ว ด ก ล ม เ รี ย บ', '059', '86', 'ใบ', '', '', '', '', '', '350', 'ml.', '', '-', 'ถุงใส', 'messageImage_1605321477312.jpg'),
(143, 'ข ว ด โ บ ลิ่ง ฝ า น้้า ป ล า', '060', '86', 'ใบ', '', '', '', '', '', '350', 'ml.', '', '-', 'ถุงใส', 'messageImage_1605321482503.jpg'),
(146, 'ขวดจรวด', '061', '134', 'ใบ', '', '', '', '', '', '270', 'ml.', '', '-', 'ถุงใส', 'messageImage_1605321487245.jpg'),
(147, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
