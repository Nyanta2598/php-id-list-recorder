-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2022 at 05:17 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id_records`
--

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `id` int(11) NOT NULL,
  `received` int(1) DEFAULT NULL,
  `card_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`id`, `received`, `card_date`) VALUES
(91, 121, '2022-11-14'),
(98, 122, '2022-11-14');

-- --------------------------------------------------------

--
-- Table structure for table `cased`
--

CREATE TABLE `cased` (
  `id` int(11) NOT NULL,
  `received` int(11) DEFAULT NULL,
  `case_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cased`
--

INSERT INTO `cased` (`id`, `received`, `case_date`) VALUES
(6, 121, '2022-11-14'),
(14, 122, '2022-11-14');

-- --------------------------------------------------------

--
-- Table structure for table `lace`
--

CREATE TABLE `lace` (
  `id` int(11) NOT NULL,
  `received` int(1) DEFAULT NULL,
  `lace_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lace`
--

INSERT INTO `lace` (`id`, `received`, `lace_date`) VALUES
(3, 121, '2022-11-14'),
(9, 122, '2022-11-14');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `course` varchar(191) NOT NULL,
  `year` varchar(3) NOT NULL,
  `card_id` int(1) NOT NULL,
  `lace_id` int(1) NOT NULL,
  `case_id` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `course`, `year`, `card_id`, `lace_id`, `case_id`) VALUES
(121, 'TABAREZ CHE-CHE T.', 'BSIT', '1ST', 1, 1, 1),
(122, 'PAGADORA CARLA JOY A.', 'BSHM', '1ST', 1, 1, 1),
(123, 'BOLAÑO RONALYN B.', 'BS CRIM', '2ND', 0, 0, 0),
(124, 'ISLETA ANGELOU JULIETT C.', 'BSIT', '3RD', 0, 0, 0),
(125, 'LAGRADANTE IVY ROSE D.', 'BSHM', '2ND', 0, 0, 0),
(126, 'FELIX JUSTINE NICOLE D.', 'BS CRIM', '4TH', 0, 0, 0),
(127, 'SILLA KRISTHINE JOYCE', 'BSIT', '3RD', 0, 0, 0),
(128, 'MARCE MA. SUZETTE R.', 'BSHM', '2ND', 0, 0, 0),
(129, 'CRUZ HILARY AUDREY S.', 'BS CRIM', '3RD', 0, 0, 0),
(130, 'DELA CRUZ ERICA ANN A.', 'BSIT', '4TH', 0, 0, 0),
(131, ' MANIMTIM CAMILA JOY C.', 'BSHM', '1ST', 0, 0, 0),
(132, ' VILLA JONH RICK B.', 'BS CRIM', '2ND', 0, 0, 0),
(133, 'LIPATA JOHN PETER', 'BSIT', '3RD', 0, 0, 0),
(134, ' JAMIN ERIC S.', 'BSHM', '1ST', 0, 0, 0),
(135, 'CANZA RENZ IVAN D', 'BS CRIM', '3RD', 0, 0, 0),
(136, 'MANLAPAS BABY ANN A.', 'BSIT', '4TH', 0, 0, 0),
(137, 'SANIPA BOBBY', 'BSHM', '1ST', 0, 0, 0),
(138, 'CORDOVALES VERDINN DAVE C.', 'BS CRIM', '2ND', 0, 0, 0),
(139, 'CABRERA JAY M.', 'BSIT', '1ST', 0, 0, 0),
(140, 'CABRERA PRINCESS M.', 'BSHM', '3RD', 0, 0, 0),
(141, 'MALLARI FELIX ADRIAN D.', 'BS CRIM', '4TH', 0, 0, 0),
(142, 'ASUNCION CHARLES WILLIAM', 'BSIT', '1ST', 0, 0, 0),
(143, 'LACSON BIANCA LORRAINE C.', 'BSHM', '2ND', 0, 0, 0),
(144, 'PARAWAN AIJELOU PIEL G.', 'BS CRIM', '1ST', 0, 0, 0),
(145, 'MANJARES ASHEIRA SYLLEMIALE', 'BSHM', '3RD', 0, 0, 0),
(146, 'DECINELLA III AMADOR C.', 'BS CRIM', '2ND', 0, 0, 0),
(147, 'TAROMA MA. CRISTHEL M.', 'BSIT', '4TH', 0, 0, 0),
(148, 'MABULAY HOMER JOSHUA I.', 'BSHM', '3RD', 0, 0, 0),
(149, 'RESOSO SHYNA ANGELA E.', 'BS CRIM', '2ND', 0, 0, 0),
(150, 'SECRETARIO JAZIEL R.', 'BSIT', '3RD', 0, 0, 0),
(151, 'TAPIA JANELENE L.', 'BSHM', '4TH', 0, 0, 0),
(152, 'BANDAY ANGELO MALEX D.', 'BS CRIM', '1ST', 0, 0, 0),
(153, 'CALUNURAN JOHN ARON V.', 'BSIT', '2ND', 0, 0, 0),
(154, 'BAGAPORO ARIAN KYLE S.', 'BSHM', '3RD', 0, 0, 0),
(155, 'SARTO JINKY M.', 'BS CRIM', '1ST', 0, 0, 0),
(156, 'DADOR JOHN MARCO B.', 'BSHM', '3RD', 0, 0, 0),
(157, 'BARRIO JHON RUIZ A.', 'BS CRIM', '4TH', 0, 0, 0),
(158, 'CARTAS MATHEW E.', 'BSIT', '1ST', 0, 0, 0),
(159, 'TAMPUS ALLEN BENEDICT', 'BSHM', '2ND', 0, 0, 0),
(160, 'DELA ROSA ANGELICA C.', 'BS CRIM', '1ST', 0, 0, 0),
(161, 'RAMILO JERRY CO N.', 'BSIT', '3RD', 0, 0, 0),
(162, 'ANTONIO JAN MARI DAVE G.', 'BSHM', '4TH', 0, 0, 0),
(163, 'SANTIDAD JANUS A.', 'BS CRIM', '1ST', 0, 0, 0),
(164, 'ENDAYA KAREN A', 'BSIT', '2ND', 0, 0, 0),
(165, 'ESTRELLADO MA. CLARISE', 'BSHM', '1ST', 0, 0, 0),
(166, 'SILAO JOANALY MAE E.', 'BS CRIM', '4TH', 0, 0, 0),
(167, 'BINAMIRA MARIANE E.', 'BS CRIM', '4TH', 0, 0, 0),
(168, 'TABAREZ CHE-CHE T.', 'BSIT', '1ST', 0, 0, 0),
(169, 'PAGADORA CARLA JOY A.', 'BSHM', '1ST', 0, 0, 0),
(170, 'BOLAÑO RONALYN B.', 'BS CRIM', '2ND', 0, 0, 0),
(171, 'ISLETA ANGELOU JULIETT C.', 'BSIT', '3RD', 0, 0, 0),
(172, 'LAGRADANTE IVY ROSE D.', 'BSHM', '2ND', 0, 0, 0),
(173, 'FELIX JUSTINE NICOLE D.', 'BS CRIM', '4TH', 0, 0, 0),
(174, 'SILLA KRISTHINE JOYCE', 'BSIT', '3RD', 0, 0, 0),
(175, 'MARCE MA. SUZETTE R.', 'BSHM', '2ND', 0, 0, 0),
(176, 'CRUZ HILARY AUDREY S.', 'BS CRIM', '3RD', 0, 0, 0),
(177, 'DELA CRUZ ERICA ANN A.', 'BSIT', '4TH', 0, 0, 0),
(178, ' MANIMTIM CAMILA JOY C.', 'BSHM', '1ST', 0, 0, 0),
(179, ' VILLA JONH RICK B.', 'BS CRIM', '2ND', 0, 0, 0),
(180, 'LIPATA JOHN PETER', 'BSIT', '3RD', 0, 0, 0),
(181, ' JAMIN ERIC S.', 'BSHM', '1ST', 0, 0, 0),
(182, 'CANZA RENZ IVAN D', 'BS CRIM', '3RD', 0, 0, 0),
(183, 'MANLAPAS BABY ANN A.', 'BSIT', '4TH', 0, 0, 0),
(184, 'SANIPA BOBBY', 'BSHM', '1ST', 0, 0, 0),
(185, 'CORDOVALES VERDINN DAVE C.', 'BS CRIM', '2ND', 0, 0, 0),
(186, 'CABRERA JAY M.', 'BSIT', '1ST', 0, 0, 0),
(187, 'CABRERA PRINCESS M.', 'BSHM', '3RD', 0, 0, 0),
(188, 'MALLARI FELIX ADRIAN D.', 'BS CRIM', '4TH', 0, 0, 0),
(189, 'ASUNCION CHARLES WILLIAM', 'BSIT', '1ST', 0, 0, 0),
(190, 'LACSON BIANCA LORRAINE C.', 'BSHM', '2ND', 0, 0, 0),
(191, 'PARAWAN AIJELOU PIEL G.', 'BS CRIM', '1ST', 0, 0, 0),
(192, 'MANJARES ASHEIRA SYLLEMIALE', 'BSHM', '3RD', 0, 0, 0),
(193, 'DECINELLA III AMADOR C.', 'BS CRIM', '2ND', 0, 0, 0),
(194, 'TAROMA MA. CRISTHEL M.', 'BSIT', '4TH', 0, 0, 0),
(195, 'MABULAY HOMER JOSHUA I.', 'BSHM', '3RD', 0, 0, 0),
(196, 'RESOSO SHYNA ANGELA E.', 'BS CRIM', '2ND', 0, 0, 0),
(197, 'SECRETARIO JAZIEL R.', 'BSIT', '3RD', 0, 0, 0),
(198, 'TAPIA JANELENE L.', 'BSHM', '4TH', 0, 0, 0),
(199, 'BANDAY ANGELO MALEX D.', 'BS CRIM', '1ST', 0, 0, 0),
(200, 'CALUNURAN JOHN ARON V.', 'BSIT', '2ND', 0, 0, 0),
(201, 'BAGAPORO ARIAN KYLE S.', 'BSHM', '3RD', 0, 0, 0),
(202, 'SARTO JINKY M.', 'BS CRIM', '1ST', 0, 0, 0),
(203, 'DADOR JOHN MARCO B.', 'BSHM', '3RD', 0, 0, 0),
(204, 'BARRIO JHON RUIZ A.', 'BS CRIM', '4TH', 0, 0, 0),
(205, 'CARTAS MATHEW E.', 'BSIT', '1ST', 0, 0, 0),
(206, 'TAMPUS ALLEN BENEDICT', 'BSHM', '2ND', 0, 0, 0),
(207, 'DELA ROSA ANGELICA C.', 'BS CRIM', '1ST', 0, 0, 0),
(208, 'RAMILO JERRY CO N.', 'BSIT', '3RD', 0, 0, 0),
(209, 'ANTONIO JAN MARI DAVE G.', 'BSHM', '4TH', 0, 0, 0),
(210, 'SANTIDAD JANUS A.', 'BS CRIM', '1ST', 0, 0, 0),
(211, 'ENDAYA KAREN A', 'BSIT', '2ND', 0, 0, 0),
(212, 'ESTRELLADO MA. CLARISE', 'BSHM', '1ST', 0, 0, 0),
(213, 'SILAO JOANALY MAE E.', 'BS CRIM', '4TH', 0, 0, 0),
(214, 'BINAMIRA MARIANE E.', 'BS CRIM', '4TH', 0, 0, 0),
(215, 'TABAREZ CHE-CHE T.', 'BSIT', '1ST', 0, 0, 0),
(216, 'PAGADORA CARLA JOY A.', 'BSHM', '1ST', 0, 0, 0),
(217, 'BOLAÑO RONALYN B.', 'BS CRIM', '2ND', 0, 0, 0),
(218, 'ISLETA ANGELOU JULIETT C.', 'BSIT', '3RD', 0, 0, 0),
(219, 'LAGRADANTE IVY ROSE D.', 'BSHM', '2ND', 0, 0, 0),
(220, 'FELIX JUSTINE NICOLE D.', 'BS CRIM', '4TH', 0, 0, 0),
(221, 'SILLA KRISTHINE JOYCE', 'BSIT', '3RD', 0, 0, 0),
(222, 'MARCE MA. SUZETTE R.', 'BSHM', '2ND', 0, 0, 0),
(223, 'CRUZ HILARY AUDREY S.', 'BS CRIM', '3RD', 0, 0, 0),
(224, 'DELA CRUZ ERICA ANN A.', 'BSIT', '4TH', 0, 0, 0),
(225, ' MANIMTIM CAMILA JOY C.', 'BSHM', '1ST', 0, 0, 0),
(226, ' VILLA JONH RICK B.', 'BS CRIM', '2ND', 0, 0, 0),
(227, 'LIPATA JOHN PETER', 'BSIT', '3RD', 0, 0, 0),
(228, ' JAMIN ERIC S.', 'BSHM', '1ST', 0, 0, 0),
(229, 'CANZA RENZ IVAN D', 'BS CRIM', '3RD', 0, 0, 0),
(230, 'MANLAPAS BABY ANN A.', 'BSIT', '4TH', 0, 0, 0),
(231, 'SANIPA BOBBY', 'BSHM', '1ST', 0, 0, 0),
(232, 'CORDOVALES VERDINN DAVE C.', 'BS CRIM', '2ND', 0, 0, 0),
(233, 'CABRERA JAY M.', 'BSIT', '1ST', 0, 0, 0),
(234, 'CABRERA PRINCESS M.', 'BSHM', '3RD', 0, 0, 0),
(235, 'MALLARI FELIX ADRIAN D.', 'BS CRIM', '4TH', 0, 0, 0),
(236, 'ASUNCION CHARLES WILLIAM', 'BSIT', '1ST', 0, 0, 0),
(237, 'LACSON BIANCA LORRAINE C.', 'BSHM', '2ND', 0, 0, 0),
(238, 'PARAWAN AIJELOU PIEL G.', 'BS CRIM', '1ST', 0, 0, 0),
(239, 'MANJARES ASHEIRA SYLLEMIALE', 'BSHM', '3RD', 0, 0, 0),
(240, 'DECINELLA III AMADOR C.', 'BS CRIM', '2ND', 0, 0, 0),
(241, 'TAROMA MA. CRISTHEL M.', 'BSIT', '4TH', 0, 0, 0),
(242, 'MABULAY HOMER JOSHUA I.', 'BSHM', '3RD', 0, 0, 0),
(243, 'RESOSO SHYNA ANGELA E.', 'BS CRIM', '2ND', 0, 0, 0),
(244, 'SECRETARIO JAZIEL R.', 'BSIT', '3RD', 0, 0, 0),
(245, 'TAPIA JANELENE L.', 'BSHM', '4TH', 0, 0, 0),
(246, 'BANDAY ANGELO MALEX D.', 'BS CRIM', '1ST', 0, 0, 0),
(247, 'CALUNURAN JOHN ARON V.', 'BSIT', '2ND', 0, 0, 0),
(248, 'BAGAPORO ARIAN KYLE S.', 'BSHM', '3RD', 0, 0, 0),
(249, 'SARTO JINKY M.', 'BS CRIM', '1ST', 0, 0, 0),
(250, 'DADOR JOHN MARCO B.', 'BSHM', '3RD', 0, 0, 0),
(251, 'BARRIO JHON RUIZ A.', 'BS CRIM', '4TH', 0, 0, 0),
(252, 'CARTAS MATHEW E.', 'BSIT', '1ST', 0, 0, 0),
(253, 'TAMPUS ALLEN BENEDICT', 'BSHM', '2ND', 0, 0, 0),
(254, 'DELA ROSA ANGELICA C.', 'BS CRIM', '1ST', 0, 0, 0),
(255, 'RAMILO JERRY CO N.', 'BSIT', '3RD', 0, 0, 0),
(256, 'ANTONIO JAN MARI DAVE G.', 'BSHM', '4TH', 0, 0, 0),
(257, 'SANTIDAD JANUS A.', 'BS CRIM', '1ST', 0, 0, 0),
(258, 'ENDAYA KAREN A', 'BSIT', '2ND', 0, 0, 0),
(259, 'ESTRELLADO MA. CLARISE', 'BSHM', '1ST', 0, 0, 0),
(260, 'SILAO JOANALY MAE E.', 'BS CRIM', '4TH', 0, 0, 0),
(261, 'BINAMIRA MARIANE E.', 'BS CRIM', '4TH', 0, 0, 0),
(262, 'TABAREZ CHE-CHE T.', 'BSIT', '1ST', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cased`
--
ALTER TABLE `cased`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lace`
--
ALTER TABLE `lace`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `cased`
--
ALTER TABLE `cased`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `lace`
--
ALTER TABLE `lace`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=263;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
