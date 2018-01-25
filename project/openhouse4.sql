-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 01, 2017 at 01:38 PM
-- Server version: 5.7.20-0ubuntu0.17.04.1
-- PHP Version: 7.0.22-0ubuntu0.17.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `openhouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `forum_id` int(10) UNSIGNED NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `forum_id`, `content`, `author`, `created_at`, `updated_at`) VALUES
(36, 16, 'hello', 'Brey Gandaganda', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(37, 16, 'hala ganern masaya', 'Brey Gandaganda', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(38, 16, 'huyyyyyyyy', 'Brey Gandaganda', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(39, 16, 'Ganda ganda gud.', 'James Michael Kuizon', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(40, 17, 'OH NO!', 'Jhunn Margallo', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(41, 17, 'OH NO!', 'Jhunn Margallo', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(42, 17, 'Huli ka Tingson!', 'Francis Molina', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(43, 17, 'OH NO!', 'Jhunn Margallo', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(44, 17, 'OH NO!', 'Jhunn Margallo', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(45, 16, 'Pikat ka man', 'Francis Molina', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(46, 17, 'Iba gud.', 'James Michael Kuizon', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(47, 18, 'para ha mga nagsasayop pagtitle hin Forum', 'VladJamir Tingson', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(48, 16, 'Hacked', 'James Michael Kuizon', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(49, 17, 'promoted from VP to PRES', 'Albuen Rosello', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(50, 19, 'No title', 'VladJamir Tingson', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(51, 17, 'mayo na sinta ko', 'Albuen Rosello', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(52, 17, 'Ikaw na it CEO?\r\n', 'Jhunn Margallo', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(53, 17, 'hanap hanap kita', 'VladJamir Tingson', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(54, 17, 'test for many messages', 'VladJamir Tingson', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(55, 17, 'test for many messages', 'VladJamir Tingson', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(56, 17, 'test for many messages', 'VladJamir Tingson', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(57, 17, 'test for many messages', 'VladJamir Tingson', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(58, 17, 'test for many messages', 'VladJamir Tingson', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(59, 17, 'test for many messages', 'VladJamir Tingson', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(60, 17, 'KOPI KREMAAAAAAAA', 'VladJamir Tingson', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(61, 17, 'kopi krememes', 'VladJamir Tingson', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(62, 20, 'PLEASE REPORT BUGS IF FOUND', 'VladJamir Tingson', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(63, 21, 'Present!', 'Francis Molina', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(64, 21, 'please post\r\nSCHEDULE\r\nLOCATION\r\nCONTRIBUTION\r\nfor the next walwalan sesh', 'VladJamir Tingson', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(65, 20, 'Nandadara la ghap an mga account last year. Ig-flush it database', 'Francis Molina', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(66, 22, 'ANO IT MORNING JOKE HIT CHICKEN?\r\njoke joke joke jojokeeeeee ', 'VladJamir Tingson', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(67, 23, 'alams na...', 'VladJamir Tingson', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(68, 24, 'Free for All', 'Francis Molina', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(69, 24, 'may TEKKEN 7, NARUTO STORM 4, STREET FIGHTER ngan NBA 2K18', 'VladJamir Tingson', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(70, 17, 'Di na napigilan ang pinang gigilan', 'Francis Molina', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(71, 22, '+5 tokens it best joke (daily basis)', 'VladJamir Tingson', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(72, 21, 'Komsai SportsFest Afterparty', 'Francis Molina', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(73, 17, 'bigla na lang siyang lumabas', 'Albuen Rosello', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(74, 20, 'cascade dapat after profile edit!!!', 'Mayonatics President', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(75, 20, 'nawawara an Forum Nav after profile edit', 'VladJamir Tingson', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(76, 18, 'waray karag delete forum', 'Albuen Rosello', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(77, 20, 'titleless forum should not be possible', 'VladJamir Tingson', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(78, 26, 'AMAZING IT OPENHAUS 2017', 'VladJamir Tingson', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(79, 20, 'dre naiban tokens kun naggames', 'VladJamir Tingson', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(80, 26, 'ig lock niyo an firefox', 'Albuen Rosello', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(81, 20, 'JOKE ^^^^^^', 'VladJamir Tingson', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(82, 20, 'Fixed na po ang nawawala ang forum nav after profile edit', 'Juan(John) Gawin(Doe)', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(83, 20, 'Maraming salamat po VladJamir Tingson sa pagreport :D', 'Juan(John) Gawin(Doe)', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(84, 20, 'HTML page title kay 2016 la gihap', 'Noel Garcia', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(85, 26, 'Nakalock na po. Salamat po sa suggestion. :D', 'Juan(John) Gawin(Doe)', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(86, 22, 'Question: Ano na geometric shape it immortal?\r\nAnswer: Juan (Cone)ce Enrile', 'Juan(John) Gawin(Doe)', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(87, 22, 'Q: Paano man maggreet an mga cone? A: (Cone)ichiwa', 'Juan(John) Gawin(Doe)', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(88, 20, 'Naedit na po. Salamat po Noel Garcia :D', 'Juan(John) Gawin(Doe)', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(89, 20, 'Fixed na po ang titleless forum bug. Salamat po VladJamir Tingson.', 'Juan(John) Gawin(Doe)', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(90, 22, 'Q: Ano man na parte hit lawas an fake news? A: Mocha Puson', 'Juan(John) Gawin(Doe)', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(91, 23, 'Kobe Alcober', 'Lodi Petmalu', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(92, 21, 'I heard po na meron this saturday at Ken Seco Residence', 'Lodi Petmalu', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(93, 16, 'hello\r\n', 'Coleen Gail Jomadiao', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(94, 16, 'send nukes', 'Coleen Gail Jomadiao', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(95, 17, 'asdasd', 'Jethro Albano', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(96, 16, 'hacked\r\n', 'Coleen Gail Jomadiao', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(97, 16, 'sorryy', 'Coleen Gail Jomadiao', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(98, 22, 'Ikaw', 'Coleen Gail Jomadiao', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(99, 27, 'Guys, pwede po kamo magsuggest dinhi hin features na iyo gusto maimplement. :)', 'Juan(John) Gawin(Doe)', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(100, 24, 'Hello mic test... mic test... (Sana naglogout nalang ako)', 'JUDE BAGUINANG', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(101, 24, 'para hindi ako mahacked\r\n', 'JUDE BAGUINANG', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(102, 24, 'huhuhaha', 'JUDE BAGUINANG', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(103, 27, 'Delete forum daw. HAHAHAHHA', 'James Michael Kuizon', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(104, 23, 'Darwin Gompad', 'Kyah Pembarya', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(105, 23, 'Jay Nuevo <3', 'J Nuevo', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(106, 27, 'Dire po hiya pwede ha forums. HAHAHAHHA', 'Juan(John) Gawin(Doe)', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(107, 23, 'Noel Garcia <3', 'J   >:( Nuevo', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(108, 17, 'HUGOT!\r\n', 'Carlo Valleramos', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(109, 17, 'party? big crowd? ayoko niyan', 'Carlo Valleramos', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(110, 24, 'Mamulay ak basta diri mamulay hi onii-chan', 'Mao Zedong', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(111, 23, 'Vladimir Lenin', 'Mao Zedong', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(112, 21, 'Maupod', 'Mao Zedong', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(113, 27, 'Snacks as prizes ha CS Activities', 'Mao Zedong', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(114, 16, 'Are you here often? ;)\r\n', 'Lady Angela Robles', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(115, 16, 'Musta kayo dito?\r\n', 'Lady Angela Robles', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(116, 16, 'not really :) ', 'Coleen Gail Jomadiao', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(117, 16, 'HI guys\r\n', 'Lady Angela Robles', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(118, 16, 'coleen fyt me', 'Lady Angela Robles', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(119, 16, 'cashmeouside howboudah?\\\r\n', 'Lady Angela Robles', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(120, 16, 'yooo', 'Poor Chigga', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(121, 23, 'Coleen <3', 'Poor Chigga', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(122, 23, 'Katrina G <3', 'Zander Ford', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(123, 16, 'KAMUSTA KAYOO', 'Zander Ford', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(124, 30, 'ULOL, X hindi Z', 'Xander Ford', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(125, 16, 'hellooo, pinipig o ako?', 'Xander Ford', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(126, 23, 'OLIVER MEJICA p rin mga ****', 'abnkkbsnplk ', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(127, 23, 'Breschia V. <3 ', 'Xander Ford', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(128, 23, 'GO COLEEN!\r\n', 'Richard Redil', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(129, 23, 'COLEEN SHAME!!!!!\r\n', 'Richard Redil', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(130, 23, 'Breshia*', 'Xander Ford', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(131, 23, 'Breschia*', 'Xander Ford', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(132, 23, '*Brescia po.', 'Zaivy Mae Villanobos', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(133, 23, 'Bash nala', 'Xander Ford', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(134, 23, 'Rodrigo Muterte <3', 'Zaivy Mae Villanobos', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(135, 23, 'FUCK YOU COLEEN\r\n', 'Richard Redil', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(136, 23, 'RICHARD REDIL <3 ', 'Shaira Lee', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(137, 23, 'RICHARD REDIL PA RIN! -Richard\r\n\r\n', 'Richard Redil', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(138, 30, 'FAKE NEWS!!!', 'abnkkbsnplk ', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(139, 30, 'AHHAHAHAHAHHAHAHA', 'Shaira Lee', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(140, 21, 'WHEN?', 'Shaira Lee', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(141, 23, 'Aweeee. SELF LOVE\r\n', 'DO Kyungsoo', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(142, 22, ':(', 'DO Kyungsoo', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(143, 22, 'Tak grades :(((', 'Shaira Lee', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(144, 23, 'RICHARD REDIL bakit ka fafa?', 'abnkkbsnplk ', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(145, 23, 'Si Dean?', 'DO Kyungsoo', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(146, 23, 'Hello, ako crushable ', 'Virgildo Sabalo', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(147, 31, 'Hello, kamusta kayo :) kamusta acads? WALWAL PA MORE', 'Virgildo Sabalo', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(148, 23, 'Excuse me?', 'JBPCabs _FishLover', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(149, 21, 'Upaya gud na makagraduate kamo', 'Virgildo Sabalo', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(150, 22, '5k ng ched', 'Virgildo Sabalo', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(151, 21, 'I believe in the capabilities of the students.', 'JBPCabs _FishLover', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(152, 23, 'Huh? Adi hi Dean?', 'Juan(John) Gawin(Doe)', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(153, 23, 'MAYONA ALCALA\r\n', 'Juan(John) Gawin(Doe)', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(154, 23, 'CLARK LAJARCA', 'Juan(John) Gawin(Doe)', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(155, 23, 'Hi Dean. ', 'JBPCabs _FishLover', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(156, 23, 'Cheers', 'JBPCabs _FishLover', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(157, 23, 'Nathalie Legion', 'Mc Colleine Gadores', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(158, 20, '100 nak starter tokens hahah then pag login ko the next day 105 :) thank you hahahaha', 'Coleen Jomadiao', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(159, 21, 'Kakayanin sir para GRUMADUATE', 'Joseph Stalin', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(160, 30, 'ez\r\nbashed af', 'Joseph Stalin', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(161, 20, 'idk tho if considered hiya na \"bug\" hahaha if not then nsl', 'Coleen Jomadiao', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(162, 21, 'Mamaya man daw?', 'Nikko Gabriel Aquino', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(163, 23, 'Karl Marx', 'Nikko Gabriel Aquino', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(164, 32, 'Maraot pa iyo buot kay tungod nag-gate crash kami?', 'Earth Kingdom', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(165, 26, 'First time so amazing.', 'Earth Kingdom', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(166, 26, 'WARAY APP PARA MAGBILING JOWA?\r\n', 'Earth Kingdom', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(167, 17, 'oh! ang kwek-kweh mo', 'Albuen Rosello', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(168, 32, 'Gulag', 'Joseph Stalin', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(169, 32, 'paano man kun waray gate?', 'Albuen Rosello', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(170, 21, 'Alagad iton ^ walwal pa more', 'Joseph Stalin', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(171, 23, 'Me', 'Joseph Stalin', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(172, 23, 'KIM JUNG CLARK', 'Albuen Rosello', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(173, 20, 'Actually nakalimutan ko na di ko nachange from 100 to 50 ang starting tokens mo', 'Juan(John) Gawin(Doe)', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(174, 20, ' then you got +5 para han activity cguro kakulop na imo na accomplish haha', 'Juan(John) Gawin(Doe)', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(175, 33, 'Ask and you shall receive', 'Kim Jong Un', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(176, 26, 'Try Tinder po', 'Juan(John) Gawin(Doe)', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(177, 32, 'Nagcrash kam ha gate?', 'Juan(John) Gawin(Doe)', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(178, 32, 'kun hi ehemmmmm gate, nagkacrash na ak ha iya', 'VladJamir Tingson', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(179, 23, 'VAL JAMIR TINGSON para libre komsai pasalida tas token #hackerman', 'VladJamir Tingson', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(180, 22, 'ano na cake it dre ginhahatag? -an cake han nagsurprise knina', 'VladJamir Tingson', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(181, 22, 'Lurong baadaw it nga comment ha igbaw^', 'Kim Jong Un', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(182, 22, 'joke la poehwzzz', 'VladJamir Tingson', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(183, 22, 'di na kam makakautro kay waray kam maghatag cake', 'Albuen Rosello', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(184, 34, 'ENUMERATE THE QUALITIES YOU ARE LOOKING FOR IN A JOWA', 'VladJamir Tingson', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(185, 34, 'it iya ngaran kay ....', 'VladJamir Tingson', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(186, 34, 'bis ano basta DAKO', 'Kim Jong Un', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(187, 23, 'april padrigano // gin force la po ak pagsurat haha', 'VladJamir Tingson', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(188, 34, 'pakyu albuen gamit pa tak account', 'Kim Jong Un', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(189, 34, 'clark lajarca po ini', 'Kim Jong Un', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(190, 27, 'SUNOD IT MABIRTHDAY MAPAKAON IT IRA DARA NA CAKE', 'basher org', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(191, 21, 'TARA IRIGNOM', 'basher org', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(192, 21, 'WEAKSHIT LIWAT KUNO HI CLARK KAY NASASAMAD', 'basher org', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(193, 34, 'ako pat ginsala', 'Albuen Rosello', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(194, 27, 'DI NA PAPASAKBON IT DIRI NAHATAG CAKE', 'Albuen Rosello', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(195, 35, 'Legit?\r\n', 'Juan(John) Gawin(Doe)', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(196, 32, 'Hino na ehemmmmm?\r\n', 'Juan(John) Gawin(Doe)', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(197, 34, 'eroy ka la', 'Kim Jong Un', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(198, 23, 'kailangan pa bang imemorize yan?', 'Anez Baekhyun', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(199, 34, 'pogi', 'Ken Seco', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(200, 36, 'adi ha balay', 'Ken Seco', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(201, 20, 'okok thanksss haahaaha', 'Coleen Jomadiao', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(202, 36, 'ada tim <3', 'J  >:(  ', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(203, 37, 'Cancelled', 'Nelbert Binongo', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(204, 37, 'Rakkk!!', 'Clark Lajarca', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(205, 17, 'LOVE YOU MAYONAA!!!\r\nSAGOTA NA AKO PLEEEEEAAASSEEEE!!!!', 'Clark Lajarca', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(206, 23, 'MAYONAAA T_T', 'Clark Lajarca', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(207, 21, 'EDI WOWW!!!!', 'Clark Lajarca', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(208, 27, 'I SUGGEST _ FOR ME', 'Clark Lajarca', '2017-11-14 06:29:41', '2017-11-15 07:38:29'),
(209, 51, 'Uhmmm...', 'Juan(John) Gawin(Doe)', '2017-11-19 15:06:56', '2017-11-19 15:06:56'),
(215, 51, 'Yeah...', 'Juan(John) Gawin(Doe)', '2017-11-19 15:17:21', '2017-11-19 15:17:21'),
(216, 52, 'I\'ve heard you like VueJS. Do you?', 'Juan(John) Gawin(Doe)', '2017-11-19 15:19:26', '2017-11-19 15:19:26'),
(222, 16, 'das', 'Juan(John) Gawin(Doe)', '2017-11-28 06:01:05', '2017-11-28 06:01:05'),
(223, 16, 'yas', 'Juan(John) Gawin(Doe)', '2017-11-30 06:59:42', '2017-11-30 06:59:42'),
(225, 16, 'gas', 'Juan(John) Gawin(Doe)', '2017-11-30 07:19:56', '2017-11-30 07:19:56'),
(226, 17, 'yo', 'Juan(John) Gawin(Doe)', '2017-11-29 23:21:00', '2017-11-29 23:21:00');

-- --------------------------------------------------------

--
-- Table structure for table `forums`
--

CREATE TABLE `forums` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tag_id` int(11) NOT NULL DEFAULT '1',
  `num_comments` int(11) NOT NULL DEFAULT '0',
  `color` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '#66ccff',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `forums`
--

INSERT INTO `forums` (`id`, `title`, `author`, `tag_id`, `num_comments`, `color`, `created_at`, `updated_at`) VALUES
(16, 'Hi\r\n', 'James Michael Kuizon', 1, 22, '#00cdfa', '2017-10-23 05:44:18', '2017-11-29 23:19:56'),
(17, 'Mayonatics Fan Club', 'VladJamir Tingson', 1, 26, '#6a5477', '2017-10-23 05:52:26', '2017-11-29 23:21:01'),
(18, 'DAPAT NADEDELETE IT FORUM', 'VladJamir Tingson', 1, 2, '#151512', '2017-10-23 05:47:26', '2017-11-15 07:39:24'),
(20, 'REPORT BUGS', 'VladJamir Tingson', 1, 17, '#fa4412', '2017-10-23 05:50:43', '2017-11-15 07:39:24'),
(21, 'WALWALAN FORUM #OneUP', 'VladJamir Tingson', 1, 14, '#010203', '2017-10-23 05:47:33', '2017-11-15 07:39:24'),
(22, 'JOKES SECTION', 'VladJamir Tingson', 1, 13, '#999900', '2017-10-23 05:49:27', '2017-11-15 07:39:24'),
(23, 'CRUSHABLES in UP', 'VladJamir Tingson', 1, 38, '#abcdef', '2017-10-23 06:08:26', '2017-11-15 07:39:24'),
(24, 'ARCADE TOURNAMENT somewhere ha CS LAB 3 pamakiana nala', 'VladJamir Tingson', 1, 6, '#fedcba', '2017-10-23 06:17:09', '2017-11-15 07:39:24'),
(26, 'COMMEND SECTION', 'VladJamir Tingson', 1, 6, '#123456', '2017-10-23 05:47:37', '2017-11-15 07:39:24'),
(27, 'SUGGESTIONS BOX', 'Juan(John) Gawin(Doe)', 1, 7, '#654321', '2017-10-23 09:43:12', '2017-11-15 07:39:24'),
(28, 'TEST FORUM', 'VladJamir Tingson', 1, 0, '#ab5487', '2017-10-24 04:24:35', '2017-11-15 07:39:24'),
(29, 'Papa Mao', 'Mao Zedong', 1, 0, '#fd54a3', '2017-10-24 07:39:22', '2017-11-15 07:39:24'),
(30, 'ZANDERNATICS!!!', 'Zander Ford', 1, 4, '#12adbb', '2017-10-24 08:36:47', '2017-11-15 07:39:24'),
(31, 'Kamusta Scholars!!!', 'Virgildo Sabalo', 1, 1, '#bcbccb', '2017-10-24 08:45:41', '2017-11-15 07:39:24'),
(32, 'GATE CRASH', 'Earth Kingdom', 1, 6, '#981256', '2017-10-24 09:29:36', '2017-11-15 07:39:24'),
(33, 'SEND NUKES', 'Albuen Rosello', 1, 1, '#cccccc', '2017-10-24 09:35:19', '2017-11-15 07:39:24'),
(34, 'FINDING JOWA', 'VladJamir Tingson', 1, 8, '#6512ff', '2017-10-24 09:45:35', '2017-11-15 07:39:24'),
(35, 'ANNOUNCEMENT', 'John Ultra', 1, 1, '#abc123', '2017-10-24 09:59:00', '2017-11-15 07:39:24'),
(36, 'Hain ba tak crush?', 'Anez Baekhyun', 1, 2, '#bbbccc', '2017-10-26 03:32:06', '2017-11-15 07:39:24'),
(37, '#OneUP', 'Anez Baekhyun', 1, 2, '#423902', '2017-10-26 03:32:41', '2017-11-15 07:39:24'),
(38, 'KOMSAI WARS', 'ENTREL B', 1, 0, '#981723', '2017-10-27 03:03:37', '2017-11-15 07:39:24'),
(50, '#OneUP Tambayan', 'Juan(John) Gawin(Doe)', 2, 0, '#412904', '2017-11-17 19:44:58', '2017-11-17 19:44:58'),
(51, 'Mic Test', 'Juan(John) Gawin(Doe)', 3, 2, '#940782', '2017-11-19 15:05:28', '2017-11-19 15:05:28'),
(52, 'Let\'s talk about frameworks :)', 'Juan(John) Gawin(Doe)', 3, 1, '#fbc123', '2017-11-19 15:18:45', '2017-11-19 15:18:45'),
(53, 'knock knock jokes section', 'Juan(John) Gawin(Doe)', 4, 0, '#afcbaa', '2017-11-19 19:55:09', '2017-11-19 19:55:09'),
(54, 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into', 'Juan(John) Gawin(Doe)', 3, 0, '#66ccff', '2017-11-30 00:57:24', '2017-11-30 00:57:24'),
(55, 'Random stuffs', 'Juan(John) Gawin(Doe)', 1, 0, '#ff0a0a', '2017-11-30 01:22:36', '2017-11-30 01:22:36'),
(56, 'Startup Ideas', 'Juan(John) Gawin(Doe)', 3, 0, '#56e236', '2017-11-30 06:13:51', '2017-11-30 06:13:51');

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `gameID` int(10) UNSIGNED NOT NULL,
  `gameName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gameDesc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `scoreID` int(11) NOT NULL,
  `gameURL` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fthumbnail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `className` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `isJar` tinyint(1) NOT NULL,
  `width` int(11) NOT NULL,
  `height` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`gameID`, `gameName`, `gameDesc`, `scoreID`, `gameURL`, `thumbnail`, `fthumbnail`, `className`, `isJar`, `width`, `height`) VALUES
(1, 'anime_fighting_jam_wing', 'Anime Fight', 0, 'games/anime_fighting_jam_wing/anime_fighting_jam_wing.swf', 'images/Games/animeFightingJam.png', 'images/Featured Games/killerCubes.png', 'NONE', 0, 714, 714),
(2, 'avatar_arena', 'Arena Avatar', 0, 'games/avatar_arena/avatar_arena.swf', 'images/Games/avatarArena.png', 'images/Featured Games/4Square.png', 'NONE', 0, 800, 600),
(3, 'avatar_fortress_fight_2', 'Avatar', 0, 'games/avatar_fortress_fight_2/avatar_fortress_fight_2.swf', 'images/Games/avatar-fortress-fight2.png', 'images/Featured Games/DotsTrix.png', 'NONE', 0, 800, 600),
(4, 'box_head_2_play', 'pew pew', 0, 'games/box_head_2_play/box_head_2play.swf', 'images/Games/boxHead.png', 'images/Featured Games/Feature2.png', 'NONE', 0, 800, 600),
(5, 'catch_the_ball', 'ball', 0, 'games/catch_the_ball/catch_the_ball.swf', 'images/Games/catchTheBall.png', 'images/Featured Games/.png', 'NONE', 0, 800, 600),
(7, 'combat_tournament_legends', '', 0, 'games/combat_tournament_legends/combat_tournament_legends.swf', 'images/Games/combatTournament.png', 'images/Featured Games/.png', 'NONE', 0, 800, 600),
(10, 'detonate2', '', 0, 'games/detonate2/detonate2.swf', 'images/Games/detonate2.png', 'images/Featured Games/Feature2.png', 'NONE', 0, 450, 550),
(13, 'fireboy_and_watergirl_2', '', 0, 'games/fireboy_and_watergirl_2/fireboy_and_watergirl_2.swf', 'images/Games/fireboyWatergirl2.png', 'images/Featured Games/fireboy&watergirl2.png', 'NONE', 0, 800, 600),
(14, 'football_legends_2016', '', 0, 'games/football_legends_2016/football_legends_2016.swf', 'images/Games/football.png', 'images/Featured Games/.png', 'NONE', 0, 800, 450),
(16, 'governor_of_poker', '', 0, 'games/governor_of_poker/governor_of_poker.swf', 'images/Games/governorOfPoker.png', 'images/Featured Games/.png', 'NONE', 0, 800, 600),
(17, 'gun_mayhem', '', 0, 'games/gun_mayhem/gun_mayhem.swf', 'images/Games/gunMayhem.png', 'images/Featured Games/.png', 'NONE', 0, 800, 600),
(19, 'king_of_fighters_wing_1.8', '', 0, 'games/king_of_fighters_wing_1.8/kof-wing-1.8-2.swf', 'images/Games/theKingOfFighter.png', 'images/Featured Games/.png', 'NONE', 0, 800, 600),
(22, 'pandemic2', '', 0, 'games/pandemic2/pandemic2.swf', 'images/Games/pandemic2.png', 'images/Featured Games/.png', 'NONE', 0, 700, 500),
(24, 'playing_with_fire_2', '', 0, 'games/playing_with_fire_2/playing_with_fire_2.swf', 'images/Games/playingWithFire2.png', 'images/Featured Games/.png', 'NONE', 0, 800, 600),
(25, 'plumber_game', '', 0, 'games/plumber_game/plumber_game.swf', 'images/Games/plumber.png', 'images/Featured Games/.png', 'NONE', 0, 800, 600),
(26, 'political_duel', '', 0, 'games/political_duel/political_duel.swf', 'images/Games/politicalduel.png', 'images/Featured Games/.png', 'NONE', 0, 800, 600),
(27, 'road_of_the_dead_2', '', 0, 'games/road_of_the_dead_2/road_of_the_deads_2.swf', 'images/Games/Road-of-the-Dead.png', 'images/Featured Games/.png', 'NONE', 0, 800, 600),
(28, 'scary_maze', '', 0, 'games/scary_maze/Scary_Maze_Game.swf', 'images/Games/scarygame.png', 'images/Featured Games/.png', 'NONE', 0, 800, 600),
(31, 'swords_and_sandals_2', '', 0, 'games/swords_and_sandals_2/swords_and_sandals_2.swf', 'images/Games/swords_and_sandals2.png', 'images/Featured Games/.png', 'NONE', 0, 800, 600),
(35, 'colorball2', '', 0, 'games/colorball2/colorball2.swf', 'images/Games/colorball2.png', 'images/Featured Games/.png', 'NONE', 0, 550, 400),
(36, 'crazyflasher4', '', 0, 'games/crazyflasher4/crazyflasher4.swf', 'images/Games/crazyflasher.png', 'images/Featured Games/.png', 'NONE', 0, 480, 480),
(37, 'hungryfish', '', 0, 'games/hungryfish/hungryfish.swf', 'images/Games/hungryfish.png', 'images/Featured Games/.png', 'NONE', 0, 640, 480),
(39, 'linkaball', '', 0, 'games/linkaball/linkaball.swf', 'images/Games/Linkaball.png', 'images/Featured Games/.png', 'NONE', 0, 500, 500),
(40, 'neon2', '', 0, 'games/neon2/neon2.swf', 'images/Games/neonRace.png', 'images/Featured Games/.png', 'NONE', 0, 550, 550),
(41, 'planktonlife2', '', 0, 'games/planktonlife2/planktonlife2.swf', 'images/Games/planktonLife.png', 'images/Featured Games/.png', 'NONE', 0, 550, 400),
(42, 'poink', '', 0, 'games/poink/poink.swf', 'images/Games/poink.png', 'images/Featured Games/.png', 'NONE', 0, 400, 500),
(43, 'quibeland', '', 0, 'games/quibeland/quibeland.swf', 'images/Games/quibeLand.png', 'images/Featured Games/.png', 'NONE', 0, 575, 300),
(44, 'raidenx', '', 0, 'games/raidenx/raidenx.swf', 'images/Games/raidenX.png', 'images/Featured Games/.png', 'NONE', 0, 550, 400),
(45, 'ratmaze2', '', 0, 'games/ratmaze2/ratmaze2.swf', 'images/Games/ratMaza.png', 'images/Featured Games/.png', 'NONE', 0, 527, 513),
(46, 'ratmaze2', '', 0, 'games/ratmaze2/ratmaze2.swf', 'images/Games/ratMaza.png', 'images/Featured Games/.png', 'NONE', 0, 527, 513),
(47, 'ratmaze2', '', 0, 'games/ratmaze2/ratmaze2.swf', 'images/Games/ratMaza.png', 'images/Featured Games/.png', 'NONE', 0, 527, 513),
(48, 'rebounce', '', 0, 'games/rebounce/rebounce.swf', 'images/Games/rebounce.png', 'images/Featured Games/.png', 'NONE', 0, 650, 500),
(49, 'skillstack', '', 0, 'games/skillstack/skillstack.swf', 'images/Games/skillStack.png', 'images/Featured Games/.png', 'NONE', 0, 270, 600),
(50, 'swarm2', '', 0, 'games/swarm2/swarm2.swf', 'images/Games/swarm2.png', 'images/Featured Games/.png', 'NONE', 0, 600, 600),
(51, 'tacticalassassin2', '', 0, 'games/tacticalassassin2/tacticalassassin2.swf', 'images/Games/tacticalAssasin.png', 'images/Featured Games/.png', 'NONE', 0, 690, 430),
(52, 'thing-thing4', '', 0, 'games/thing-thing4/thing-thing4.swf', 'images/Games/thingthing4.png', 'images/Featured Games/.png', 'NONE', 0, 550, 400),
(53, 'xrunning', '', 0, 'games/xrunning/xrunning.swf', 'images/Games/xRunning.png', 'images/Featured Games/.png', 'NONE', 0, 600, 350);

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `genreID` int(10) UNSIGNED NOT NULL,
  `genreName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `genreDesc` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`genreID`, `genreName`, `genreDesc`) VALUES
(1, 'Anime', 'Japanese Animation'),
(2, 'Featured Content', 'Content that is featured'),
(3, 'K-Drama', 'Korean Drama'),
(4, 'Action', 'Series of challenges'),
(5, 'Strategy', 'Think'),
(6, 'Board Games', 'Games in the board'),
(7, 'Anime', 'Anime'),
(8, 'Anime', 'Anime'),
(9, 'Anime', 'Anime');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `imageID` int(10) UNSIGNED NOT NULL,
  `imageURL` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_10_01_045816_create_games_table', 1),
('2016_10_01_050107_create_videos_table', 1),
('2016_10_01_050238_create_genres_table', 1),
('2016_10_01_050452_create_gameGenres_table', 1),
('2016_10_01_050615_create_videosGenres_table', 1),
('2016_10_01_050738_create_images_table', 1),
('2016_10_01_050914_create_scores_table', 1),
('2016_10_10_132422_create_tokens_table', 1),
('2016_10_10_132519_create_userVideos_table', 1),
('2016_10_11_122431_create_series_table', 1),
('2016_10_12_054121_create_seriesVideos_table', 1),
('2016_10_12_113833_create_seriesGenres_table', 1),
('2016_10_14_160417_user_time', 1),
('2016_10_15_054307_create_userGames_table', 1),
('2016_10_16_041855_create_userTimes_table', 1),
('2016_10_16_061100_create_videoTime', 1),
('2016_10_16_061836_create_gamerTimer', 1),
('2016_10_16_154656_create_VidTimer', 2),
('2016_11_14_015436_add_column_to_users', 3),
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_10_01_045816_create_games_table', 1),
('2016_10_01_050107_create_videos_table', 1),
('2016_10_01_050238_create_genres_table', 1),
('2016_10_01_050452_create_gameGenres_table', 1),
('2016_10_01_050615_create_videosGenres_table', 1),
('2016_10_01_050738_create_images_table', 1),
('2016_10_01_050914_create_scores_table', 1),
('2016_10_10_132422_create_tokens_table', 1),
('2016_10_10_132519_create_userVideos_table', 1),
('2016_10_11_122431_create_series_table', 1),
('2016_10_12_054121_create_seriesVideos_table', 1),
('2016_10_12_113833_create_seriesGenres_table', 1),
('2016_10_14_160417_user_time', 1),
('2016_10_15_054307_create_userGames_table', 1),
('2016_10_16_041855_create_userTimes_table', 1),
('2016_10_16_061100_create_videoTime', 1),
('2016_10_16_061836_create_gamerTimer', 1),
('2016_10_16_154656_create_VidTimer', 2),
('2016_11_14_015436_add_column_to_users', 3),
('2014_05_19_151759_create_forum_table_categories', 4),
('2014_05_19_152425_create_forum_table_threads', 4),
('2014_05_19_152611_create_forum_table_posts', 4),
('2015_04_14_180344_create_forum_table_threads_read', 4),
('2015_07_22_181406_update_forum_table_categories', 4),
('2015_07_22_181409_update_forum_table_threads', 4),
('2015_07_22_181417_update_forum_table_posts', 4),
('2016_05_24_114302_add_defaults_to_forum_table_threads_columns', 4),
('2016_07_09_111441_add_counts_to_categories_table', 4),
('2016_07_09_122706_add_counts_to_threads_table', 4),
('2016_07_10_134700_add_sequence_to_posts_table', 4),
('2016_07_29_171118_create_chatter_categories_table', 4),
('2016_07_29_171118_create_chatter_discussion_table', 4),
('2016_07_29_171118_create_chatter_post_table', 4),
('2016_07_29_171128_create_foreign_keys', 4),
('2016_08_02_183143_add_slug_field_for_discussions', 4),
('2016_08_03_121747_add_color_row_to_chatter_discussions', 4),
('2017_01_16_121747_add_markdown_and_lock_to_chatter_posts', 4),
('2017_01_16_121747_create_chatter_user_discussion_pivot_table', 4),
('2017_10_21_062303_create_forums_table', 5),
('2017_10_21_063401_create_comments_table', 6),
('2017_10_21_065615_create_forums_table', 7),
('2017_10_21_180123_add_author_to_forums', 8),
('2017_10_21_180130_add_author_to_comments', 8),
('2017_10_22_003748_add_starts_ends_table', 9),
('2017_10_22_005318_add_total_time_table', 1),
('2017_10_22_050853_add_time_start_table', 10),
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_10_01_045816_create_games_table', 1),
('2016_10_01_050107_create_videos_table', 1),
('2016_10_01_050238_create_genres_table', 1),
('2016_10_01_050452_create_gameGenres_table', 1),
('2016_10_01_050615_create_videosGenres_table', 1),
('2016_10_01_050738_create_images_table', 1),
('2016_10_01_050914_create_scores_table', 1),
('2016_10_10_132422_create_tokens_table', 1),
('2016_10_10_132519_create_userVideos_table', 1),
('2016_10_11_122431_create_series_table', 1),
('2016_10_12_054121_create_seriesVideos_table', 1),
('2016_10_12_113833_create_seriesGenres_table', 1),
('2016_10_14_160417_user_time', 1),
('2016_10_15_054307_create_userGames_table', 1),
('2016_10_16_041855_create_userTimes_table', 1),
('2016_10_16_061100_create_videoTime', 1),
('2016_10_16_061836_create_gamerTimer', 1),
('2016_10_16_154656_create_VidTimer', 2),
('2016_11_14_015436_add_column_to_users', 3),
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_10_01_045816_create_games_table', 1),
('2016_10_01_050107_create_videos_table', 1),
('2016_10_01_050238_create_genres_table', 1),
('2016_10_01_050452_create_gameGenres_table', 1),
('2016_10_01_050615_create_videosGenres_table', 1),
('2016_10_01_050738_create_images_table', 1),
('2016_10_01_050914_create_scores_table', 1),
('2016_10_10_132422_create_tokens_table', 1),
('2016_10_10_132519_create_userVideos_table', 1),
('2016_10_11_122431_create_series_table', 1),
('2016_10_12_054121_create_seriesVideos_table', 1),
('2016_10_12_113833_create_seriesGenres_table', 1),
('2016_10_14_160417_user_time', 1),
('2016_10_15_054307_create_userGames_table', 1),
('2016_10_16_041855_create_userTimes_table', 1),
('2016_10_16_061100_create_videoTime', 1),
('2016_10_16_061836_create_gamerTimer', 1),
('2016_10_16_154656_create_VidTimer', 2),
('2016_11_14_015436_add_column_to_users', 3),
('2014_05_19_151759_create_forum_table_categories', 4),
('2014_05_19_152425_create_forum_table_threads', 4),
('2014_05_19_152611_create_forum_table_posts', 4),
('2015_04_14_180344_create_forum_table_threads_read', 4),
('2015_07_22_181406_update_forum_table_categories', 4),
('2015_07_22_181409_update_forum_table_threads', 4),
('2015_07_22_181417_update_forum_table_posts', 4),
('2016_05_24_114302_add_defaults_to_forum_table_threads_columns', 4),
('2016_07_09_111441_add_counts_to_categories_table', 4),
('2016_07_09_122706_add_counts_to_threads_table', 4),
('2016_07_10_134700_add_sequence_to_posts_table', 4),
('2016_07_29_171118_create_chatter_categories_table', 4),
('2016_07_29_171118_create_chatter_discussion_table', 4),
('2016_07_29_171118_create_chatter_post_table', 4),
('2016_07_29_171128_create_foreign_keys', 4),
('2016_08_02_183143_add_slug_field_for_discussions', 4),
('2016_08_03_121747_add_color_row_to_chatter_discussions', 4),
('2017_01_16_121747_add_markdown_and_lock_to_chatter_posts', 4),
('2017_01_16_121747_create_chatter_user_discussion_pivot_table', 4),
('2017_10_21_062303_create_forums_table', 5),
('2017_10_21_063401_create_comments_table', 6),
('2017_10_21_065615_create_forums_table', 7),
('2017_10_21_180123_add_author_to_forums', 8),
('2017_10_21_180130_add_author_to_comments', 8),
('2017_10_22_003748_add_starts_ends_table', 9),
('2017_10_22_005318_add_total_time_table', 1),
('2017_10_22_050853_add_time_start_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

CREATE TABLE `scores` (
  `scoreID` int(10) UNSIGNED NOT NULL,
  `gameID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `series`
--

CREATE TABLE `series` (
  `seriesID` int(10) UNSIGNED NOT NULL,
  `seriesName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `seriesDesc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fthumbnail` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `series`
--

INSERT INTO `series` (`seriesID`, `seriesName`, `seriesDesc`, `thumbnail`, `fthumbnail`) VALUES
(1, 'Kokoro Connect', 'Connection Story', 'Kokoro Connect', 'Kokoro Connect 950'),
(2, 'D-Frag!', 'Delinquent comedy', 'D-Frag!', 'D-Frag! 950'),
(3, 'Assassination Classroom', 'Assassination of an octopus', 'Assassination Classroom', 'Assassination Classroom 950'),
(4, 'One Punch Man', 'Extremely OP MC', 'One Punch Man', 'One Punch Man 950'),
(5, 'Pinocchio', 'Korean Pinocchio', 'Pinocchio', 'Pinocchio 950'),
(6, 'White Album 2', 'Winter \"Romance\" story', 'White Album 2', 'White Album 2 950'),
(8, 'She Was Pretty', 'Beautiful Korean', 'She Was Pretty', 'She Was Pretty 950'),
(9, 'KHR', 'The manga is about a young boy, Tsunayoshi Sawada, who discovers that he is next in line to become boss of the Vongola family, a powerful Mafia organization. The Vongolas\' most powerful hitman, a gun-toting infant named Reborn, is sent to teach Tsuna how ', 'khr 250x250', 'khr 250x250 950'),
(10, 'KHR', 'Reborn!, known in Japan as Katekyō Hitman Reborn! (Japanese: 家庭教師ヒットマンリボーン! Hepburn: Katekyō Hittoman Ribōn!?, Katekyō, a portmanteau of Katei Kyōshi, means \"home tutor\"), is a Japanese manga written and illustrated by Akira Amano. The manga is about a yo', 'khr', 'khr 950'),
(11, 'Kiseijuu sei no kakuritsu', 'Parasyte (Japanese: 寄生獣 Hepburn: Kiseijū?, lit. \"Parasitic Beasts\") is a science fiction horror manga series written and illustrated by Hitoshi Iwaaki, and published in Kodansha\'s Afternoon magazine from 1988 to 1995. The manga was published in North Amer', 'parasyte', 'parasyte 950'),
(12, 'Magi Kingdom of Magic', 'Magi: The Labyrinth of Magic (Japanese: マギ Hepburn: Magi?) is a Japanese fantasy action adventure manga series written and illustrated by Shinobu Ohtaka. It has been serialized in Weekly Shōnen Sunday since June 2009, with the individual chapters collecte', 'magi', 'magi 950'),
(13, 'Seven Deadly Sins', 'The Seven Deadly Sins (Japanese: 七つの大罪 Hepburn: Nanatsu no Taizai?) is a Japanese fantasy manga series written and illustrated by Nakaba Suzuki. It has been serialized in Kodansha\'s Weekly Shōnen Magazine since October 2012, with the chapters collected in', '7 deadly sins', '7 deadly sins 950'),
(14, 'Tokyo Ghoul S1', 'Tokyo Ghoul is an anime television series by Studio Pierrot aired on Tokyo MX between July and September 2014 with a second season titled Tokyo Ghoul √A that aired January 8, 2015, to March 26, 2015. Studio Pierrot also did an OVA for Tokyo Ghoul: JACK al', 'tokyo ghoul', 'tokyo ghoul 950'),
(15, 'Tokyo Ghoul S2', 'Tokyo Ghoul is an anime television series by Studio Pierrot aired on Tokyo MX between July and September 2014 with a second season titled Tokyo Ghoul √A that aired January 8, 2015, to March 26, 2015. Studio Pierrot also did an OVA for Tokyo Ghoul: JACK al', 'tokyo ghoulS2', 'tokyo ghoulS2 950'),
(18, 'Cheese in the Trap', 'depicts the delicate relationship between female university student Hong Seol (Kim Go-Eun) and her senior Yoo Jung (Park Hae-Jin). Hong-Seol works part-time due to her family\'s poor background. Yoo Jung is good looking, gets good grades, athletic and has ', 'Cheese In The Trap', 'Cheese In The Trap 950');

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE `tokens` (
  `tokenID` int(10) UNSIGNED NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  `tokenName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tokenValue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tokens`
--

INSERT INTO `tokens` (`tokenID`, `isActive`, `tokenName`, `tokenValue`) VALUES
(1, 0, 'wEQp4nwM', 55),
(2, 0, '5Z1oglgn', 50),
(3, 0, 'afcpybGN', 25),
(4, 0, 'McxUgzAz', 25),
(5, 0, 'apbhNZjK', 25),
(6, 0, 'M5Z7K5HY', 25),
(7, 1, 'o7gDCWkZ', 25),
(8, 1, 'q0oGfDkc', 25),
(9, 1, '4L1mEacz', 25),
(10, 1, 'un18eBVd', 25),
(11, 1, 'vZPi9sN4', 25),
(12, 1, '1t7BUIp5', 25),
(13, 1, 'QpH2I72e', 25),
(14, 1, 'XcByWLUH', 25),
(15, 1, 'QmYC0EHM', 25),
(16, 1, '2JVxcpyz', 25),
(17, 1, 'zB5iAyaa', 25),
(18, 0, 'ooIXzT8w', 25),
(19, 1, 'faijx28k', 25),
(20, 1, 'rlyOBOYv', 25),
(21, 0, 'R2vBlJpn', 25),
(22, 1, 'wEQl4nwM', 25),
(23, 0, '5Z1oglgn', 25),
(24, 0, 'afcpybGN', 25),
(25, 0, 'McxUgzAz', 25),
(26, 0, 'apbhNZjK', 25),
(27, 0, 'M5Z7K5HY', 25),
(28, 1, 'o7gDCWkZ', 25),
(29, 1, 'q0oGfDkc', 25),
(30, 1, '4L1mEacz', 25),
(31, 1, 'un18eBVd', 25),
(32, 1, 'vZPi9sN4', 25),
(33, 1, '1t7BUIp5', 25),
(34, 1, 'QpH2I72e', 25),
(35, 1, 'XcByWLUH', 25),
(36, 1, 'QmYC0EHM', 25),
(37, 1, '2JVxcpyz', 25),
(38, 1, 'zB5iAyaa', 25),
(39, 0, 'ooIXzT8w', 25),
(40, 1, 'faijx28k', 25),
(41, 1, 'rlyOBOYv', 25),
(42, 0, 'R2vBlJpn', 25),
(43, 1, 'vQEIiVK6', 20),
(44, 1, '7yMZDUHB', 20),
(45, 1, 'akk1aENP', 20),
(46, 1, '75QfIMLw', 20),
(47, 1, 'YPVFgLMr', 20),
(48, 0, 'LVd2yJsc', 20),
(49, 1, '18QU9J2o', 20),
(50, 1, 'bpyMY2Ct', 20),
(51, 0, 'vgnYULkC', 20),
(52, 1, 'MFtsAgvg', 20),
(53, 1, 'rcnP2wqe', 20),
(54, 1, 'Vsgoo6Fl', 20),
(55, 1, 'rD5T4TZl', 20),
(56, 1, 'FSK3G5y6', 20),
(57, 1, 'uJOMpKgN', 20),
(58, 1, 'z5VGGlne', 20),
(59, 1, 'vQEIiVK6', 20),
(60, 1, '7yMZDUHB', 20),
(61, 1, 'akk1aENP', 20),
(62, 1, '75QfIMLw', 20),
(63, 1, 'YPVFgLMr', 20),
(64, 0, 'LVd2yJsc', 20),
(65, 1, '18QU9J2o', 20),
(66, 1, 'bpyMY2Ct', 20),
(67, 0, 'vgnYULkC', 20),
(68, 1, 'MFtsAgvg', 20),
(69, 1, 'rcnP2wqe', 20),
(70, 1, 'Vsgoo6Fl', 20),
(71, 1, 'rD5T4TZl', 20),
(72, 1, 'FSK3G5y6', 20),
(73, 1, 'uJOMpKgN', 20),
(74, 1, 'z5VGGlne', 20),
(75, 1, 'OodUcDzq', 3),
(76, 1, 'rbYE8vDE', 3),
(77, 0, 'v2E5FgQw', 3),
(78, 1, 'OodUcDzq', 3),
(79, 1, 'rbYE8vDE', 3),
(80, 0, 'v2E5FgQw', 3),
(81, 0, 'nbCarASp', 1000),
(82, 0, 'ADNe9u19', 1000),
(83, 0, 'nbCarASp', 1000),
(84, 0, 'ADNe9u19', 1000),
(85, 0, 'ylnkoreo', 999),
(86, 0, 'zASjqMh4', 999),
(87, 0, 'ylnkoreo', 999),
(88, 0, 'zASjqMh4', 999),
(89, 0, '3Cmw6sEA', 1000),
(90, 0, 'TAXQJ9fu', 1000),
(91, 0, 'OxMBxrqN', 1000),
(92, 0, '3Cmw6sEA', 1000),
(93, 0, 'TAXQJ9fu', 1000),
(94, 0, 'OxMBxrqN', 1000),
(95, 1, 'f596DkvB', 1),
(96, 1, '7795OrP5', 1),
(97, 1, 're5LBshd', 1),
(98, 1, '5pVLdELc', 1),
(99, 1, 'L3FTXE86', 1),
(100, 1, 'S4cWCrMF', 1),
(101, 1, 'HUlqQdHG', 1),
(102, 1, 'MWO8bM9I', 1),
(103, 1, 'sx2qFkzW', 1),
(104, 1, 'liG7XGKh', 1),
(105, 1, 'GJROMI5e', 1),
(106, 1, 'f596DkvB', 1),
(107, 1, '7795OrP5', 1),
(108, 1, 're5LBshd', 1),
(109, 1, '5pVLdELc', 1),
(110, 1, 'L3FTXE86', 1),
(111, 1, 'S4cWCrMF', 1),
(112, 1, 'HUlqQdHG', 1),
(113, 1, 'MWO8bM9I', 1),
(114, 1, 'sx2qFkzW', 1),
(115, 1, 'liG7XGKh', 1),
(116, 1, 'GJROMI5e', 1),
(117, 0, 'ahO9En1E', 1000),
(118, 1, '4OzWBCRX', 1000),
(119, 0, 'ahO9En1E', 1000),
(120, 1, '4OzWBCRX', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `student_number` int(11) NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_ID` int(11) NOT NULL,
  `rand_num` int(11) NOT NULL,
  `token` int(11) NOT NULL,
  `image_ID` int(11) NOT NULL,
  `numOfHours` double(8,2) NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `student_number`, `password`, `remember_token`, `created_at`, `updated_at`, `user_ID`, `rand_num`, `token`, `image_ID`, `numOfHours`, `avatar`) VALUES
(1, 'Jeff', 'Lucanas', 201353033, '$2y$10$6hpCq8kst6Hb2UeR4K7AE.lzqIM5tduANHoDyZzdT3ji4Og/PYEdy', NULL, '2016-10-16 12:08:19', '2016-10-16 12:08:19', 0, 0, 50, 0, 0.00, ''),
(2, 'Khalile Karl', 'Pujante', 201339978, '$2y$10$CHTptySoLAdzIpz5.u7HcuIrlkbCxLplNRw2Qfuc3n7bI1NzRz1D2', 'Oh2vmXonBM2TXwSo9mQysNKQ3TJNYwg5RQIhY8OEoFIBkFZ7ygG8Y1BAL4my', '2016-10-17 07:01:01', '2016-11-13 17:43:14', 0, 0, 50, 0, 0.00, ''),
(3, 'James', 'Babalcon', 201352797, '$2y$10$GAstvn8atrp/8r2T3/SBgell.FU8kjKWY63IEw1IGU/xf39Med0NW', 'kVPWLNBumpQh5P2uOtrLvfPMWBUDWVXQVBHGbKOQoBG7fdmHixMm4odV7Um2', '2016-10-17 07:01:32', '2016-10-19 20:05:28', 0, 0, 50, 0, 0.00, ''),
(4, 'Rex', 'Olis', 201247036, '$2y$10$yJhauVi5cFk0crpk.3y1QeXdVNNLRETa6VuDzMj5E//XtEzgEMddW', NULL, '2016-10-17 07:18:34', '2016-10-17 07:18:34', 0, 0, 50, 0, 0.00, ''),
(5, 'Carlo', 'Valleramos', 201344347, '$2y$10$ZJyAxxd4nr.fX98APbMe1Om/67yHoXJcZ63/xXwH13iXr2rp73QAq', 'xuLsheD2KyR2AuXJSyEFHKPoILwAde3pf6aRPl6fpYJH0wdI1S8l0szWg5Di', '2016-10-17 07:28:18', '2017-10-24 21:16:27', 0, 0, 20, 0, 0.00, ''),
(6, 'Quennie', 'Zalavarria', 201352786, '$2y$10$AOjvK56/7Gro23aw.tvDF.olCekRC94z7NGdCkFE1zJfZEffJsM2S', NULL, '2016-10-17 07:34:56', '2016-10-17 07:34:56', 0, 0, 50, 0, 0.00, ''),
(7, 'James Michael', 'Kuizon', 201352703, '$2y$10$Dl5xDPoZTgfyzE6RNo6k0Ockgloec8x4dWkH949uJ2m9T0yAZ/QSS', 'oMBGeZw9E2bXxNGbUuYDT7eTN20BswHReyM1ttE4CzDXChsBgSZKNoR2RcOR', '2016-10-17 08:03:21', '2017-10-24 04:12:41', 0, 0, 45, 0, 0.00, ''),
(8, 'Albuen', 'Rosello', 201338192, '$2y$10$AkesK.joiXQwCV5b8d6q7OBraJ1VBLvaC1Ol6cYczqzjfjESlhqTa', 'TeySKiYDMzH3JjozihwpbyUAF6VxI1TwYpUcSZ60uHeq1FPY9udZITG7xi6F', '2016-10-17 14:14:00', '2017-10-25 22:47:52', 0, 0, 50, 0, 0.00, ''),
(9, 'Arni Maxine', 'Hilvano', 201352706, '$2y$10$i8yMPxUVXIRXijdq8goA8OaR1xiYjQnkWFdHS7IR1W9ChvtRq/hVe', '8sf1beWMihgZFYN6tlXL5I3809chv8n5d1EtxlzMqotiuqqXdXF3Vl81eukr', '2016-10-17 14:56:17', '2016-10-17 16:04:30', 0, 0, 50, 0, 0.00, ''),
(10, 'zyraphyl', 'penaranda', 201338978, '$2y$10$4IU0kjWh1JIEpnIxwgvr2OckbsATv4x12Gyz5vOPjQuTHyYSXf4mW', 'JPLTr7YecTld3tNEEAmbdCvERpArkkRZnrCT4GHhNwjei5BbPBLkw074Hho4', '2016-10-17 15:45:43', '2016-10-19 19:49:01', 0, 0, 50, 0, 0.00, ''),
(12, 'Rayl', 'Misu', 201334613, '$2y$10$//XL7d7RePuqDLYe0UQsd.rR6xGOPv28XTfpFfFVFlOlVEZtwGYru', 'hI64VeAelEFlocw7aikGllAMsX6wb0LMXqHmYCTydh0wbkQy0Ezt41gJ2Fp4', '2016-10-17 16:33:27', '2016-10-17 21:58:33', 0, 0, 50, 0, 0.00, ''),
(13, 'Fatima Grace', 'Abad', 201343275, '$2y$10$oFYJoVJQEn8CisGzKAsAx.mXV1ShBgL37dedbUfv9Eu9koNnm/rN.', 'skzIOeA172iAg1tabtk0mDXrhl0NldP0YuKOmf9dRBW8i1lmk19PIjynoygy', '2016-10-17 16:41:30', '2016-10-17 16:43:06', 0, 0, 50, 0, 0.00, ''),
(14, 'Annabelle', 'Caamod', 201208532, '$2y$10$gwf2vXRInH1gYKyxVe9EAumMNsvMjmh3PiUm5nXkzIncvev3b1OrK', 'Vf6DkbdbH6xlbGeLah0Cektf1jGJXHUOzfqX1JaXdhPqKVGzCDPY1t3jyjyY', '2016-10-17 18:07:17', '2016-10-18 21:58:21', 0, 0, 50, 0, 0.00, ''),
(15, 'Danne Marie', 'Cortez', 20174513, '$2y$10$/JcazuHKFV1HQvsjXYF1AuGyYoZMgty2qGz15BO4dcjkyCiKDkjNq', 'hhgqcj9uLcVR1n1HGDpShfO9aMKiyqS5a5GuUzqeF53NfMoR2Tb3Eb6jJIVw', '2016-10-17 18:07:55', '2016-10-17 18:15:12', 0, 0, 50, 0, 0.00, ''),
(16, 'Daniel', 'Hizon', 201480161, '$2y$10$CmQB96vn6TQVNaoSTXtT5Oe.L7P5bpKquKlwtvXq.99vwMlIi29j2', 'F3giTAHdm9Fe5JdJXzjPfaDxVRoh0ufc03dSJ3Kbh0Suk4CEFrPuthJmpvPp', '2016-10-17 18:08:48', '2016-10-18 04:06:36', 0, 0, 50, 0, 0.00, ''),
(17, 'Wancho', 'Das', 201243900, '$2y$10$brGxr/uW1y2RM0KxjYhtEuGoOiGcgcLRI1Ul8J4YQ96TV5SIyoIPe', 'RizkFnDokXa1js24bHKelZvNCqaVSdQokvlVZ4i49iiXogMmdVi1QefWWojA', '2016-10-17 18:11:24', '2016-10-17 18:37:53', 0, 0, 50, 0, 0.00, ''),
(19, 'Karl Brandon', 'Ocfemia', 201512233, '$2y$10$Atd4Uw8ztP1at9CWMWcug.AmdTZhfuwal/9LtRYX3LyPd8oTNvXJ6', 'WrSVDNjCOXX8GZRuG78ydXdz4bg2ueKIVcqYMxrWwWGWSwU4Wb5emtj3LSrg', '2016-10-17 18:12:22', '2016-10-17 18:14:32', 0, 0, 50, 0, 0.00, ''),
(20, 'Jovan Francis', 'Paner', 201212345, '$2y$10$UsKisFGlvIAIDRPlNINzfO9fHK4IWbSdcqZQ910Xmhzx1ayNfSwj6', 'VluX9OaZRCGJf73XOz35aBJK84QIoHIAud6egn4FddiVEzJdeSNwMK7rvWkY', '2016-10-17 18:15:10', '2016-10-17 18:16:59', 0, 0, 50, 0, 0.00, ''),
(21, 'Charlotte', 'Sacmar', 201209347, '$2y$10$b7iLoihR6h27glAUNIp6OubYcPoR5HmwTj3ikzNwvpCENoF5nfcIe', 'dIHOWPt5yHYwJm1CKd2I7vFLgYt8EOPNcpWmjkxTm8RPA1xcNvKhYfAw07cL', '2016-10-17 18:17:52', '2016-10-19 20:10:12', 0, 0, 50, 0, 0.00, ''),
(22, 'Danne Marie', 'Cortez', 201754513, '$2y$10$.sXFeINeAH3BiiNwkLPFiOW4SnSbWZf02HMAYzs2OMr8p4U4n4DF6', 'aatm87Ff0a6mQttRAXD9nR0gdoFfS3lSPjO9DDoZvystebnkGHuFEehcMiYm', '2016-10-17 18:19:39', '2016-10-17 18:28:59', 0, 0, 50, 0, 0.00, ''),
(23, 'April', 'Padrigano', 201464813, '$2y$10$eBalqbU6G90Lf84C/subLelf43ixo8Vpk9d5.qqS34dxwd.L1r1m2', '5kB9rnMGgXLVpn1FJiQke7CGK9upOf56sLlRTRxn3lOiMblpCQhQ5DPI9425', '2016-10-17 18:23:17', '2016-10-17 18:28:56', 0, 0, 50, 0, 0.00, ''),
(24, 'Erikson', 'Leguarda', 201424468, '$2y$10$XCaJF1M1WsYkvX.cIB5cr.ikv9Fn8F/Qml5.NFQ11YdrEeo/CnHoq', 'oa9diJzorCrbjQCsDyHEQeyXLBWOwFzo0KwnUObMPAXaKRz2PYdM32bYyLyX', '2016-10-17 18:26:46', '2016-10-18 23:17:47', 0, 0, 50, 0, 0.00, ''),
(25, 'Ervin', 'Margallo', 201366209, '$2y$10$cdeT2OigQYnJBD50Aj0JvO16N9Mh6sMOTdZX36UbDvCAAszAT3exm', 'dLZNSeUG7B0aVVohN20dsHa8lS2uKUdo9k7LJL6sfevXlxYRUMnmQn204j4k', '2016-10-17 18:33:08', '2016-10-20 22:03:28', 0, 0, 50, 0, 0.00, ''),
(27, 'Nyx', 'Villamor', 201344633, '$2y$10$QxJuGMUZ4zdzc35Rk4hsmedI/AbqF9nB3RI4nlGTHm9aocmoSOVAK', 'TyZ7u2mypiow94uSj7LhCNwGgfQx08FbQLItIeLmDJIoyOwr7laFdMslfZ39', '2016-10-17 18:35:00', '2016-10-17 20:39:37', 0, 0, 50, 0, 0.00, ''),
(29, 'Mar Augustine Chloey', 'Lee', 201354085, '$2y$10$OLI0zleHCpf0.kv4WMp/ve3Scn3q5kmOk4hLh1zEejDO.wvi1YApe', 'SWlxB2xmraEhkAtRTds3TCKuknASIon6mGTz4X2GHlppgdvRgKvnLn8dPdDS', '2016-10-17 19:29:18', '2016-10-17 20:36:14', 0, 0, 50, 0, 0.00, ''),
(30, 'Faye', 'Silvestrece', 201354111, '$2y$10$RMKhOBpW5j4nXwVn2V6/cuC3qvYw.DqCSCyn3LIqiY6w8AoyfUJZS', 'xzMnwAQdG9HnN6ZhCCuQYJ9pQgoUU7ngU3rUKZnktZmCpu3MAhAqB4bfGwZ4', '2016-10-17 19:33:41', '2016-10-17 19:46:03', 0, 0, 50, 0, 0.00, ''),
(31, 'Kenneth', 'Tamayo', 201345789, '$2y$10$8LxOUuMdyWDRvQVmBPYCXu2d.iKpaWzfq8fIS4KB26GC0FXCJzsVu', 'uHQI6F0q3nog0Ed0GqmcrinYpNsHOht44Rfhspg3DbfuiNCPVUWyNn1tbgwf', '2016-10-17 19:33:44', '2016-10-17 19:57:50', 0, 0, 50, 0, 0.00, ''),
(32, 'Nathalie Claire', 'Villasin', 201341300, '$2y$10$2pkzFCVkhusjERKEZEYhUuPuokw2Sl2s7c9p/ZZSt9aEdcuEbs.0i', '9gDuD74HuSfnQSrAIZCmCJQvJQjz8TBqSRXJrbwTMZPo6gmmPqKcpQzAZCJQ', '2016-10-17 19:34:20', '2016-10-17 20:37:36', 0, 0, 50, 0, 0.00, ''),
(33, 'Roger', 'Sablad', 201369904, '$2y$10$VfD6IB4L0KzXVd1p7RwbDenGMr6OnIEciFjGa7jdK1yZq8e9LkLVe', 'Kx7GlnSuaKhkdSOnPT3Z6ek7sGAeKutHY4Mr6rNHI5mCD3rATcEaiXWfJmSk', '2016-10-17 19:34:50', '2016-10-17 20:38:33', 0, 0, 50, 0, 0.00, ''),
(37, 'Jay', 'Carcellar', 201367501, '$2y$10$.lnLM8Y6qpxDgnW2zbwZ0eO6YfVh3ZAXSA.fjawkqHk1.NjuytQUO', 'z6dZgNREyuUK7acZ4N77NIvHvv3ANpa1F4C9XtDoyCCU4N3vAXk9GYLPRvm3', '2016-10-17 20:10:59', '2016-11-13 17:42:42', 0, 0, 50, 0, 0.00, ''),
(38, 'Rodney', 'Dublin', 201506397, '$2y$10$KStLnrNy9htiUKsB9E48HOJWkyaC5aDjeKbRnvqNlxsU75KPnP5B6', 'YFPXPiJTmAypIGJgT7pCazr0ljawzIE5yy9obMuDwer6vpCMnzOhfB5C7s8Y', '2016-10-17 20:12:06', '2016-10-17 20:35:46', 0, 0, 50, 0, 0.00, ''),
(39, 'Edcel', 'Balite', 201504320, '$2y$10$qSz/Z/TAL8eYX3zYf55MXu1xnQUAwt552xZztZSBRP.wqq9kOHB3u', 'u5w7oK3RWTLwfRPnckynChnP6ngmxC1O6jA62F5cTKmNtLJ7TkxXupuKdR6b', '2016-10-17 20:12:56', '2016-10-19 01:00:52', 0, 0, 50, 0, 0.00, ''),
(40, 'Kenneth Matthew', 'Lanante', 201512658, '$2y$10$QFr1j/nYxtG2XwMdBU.vZOvFwWbuMB1Y6kEGBcBe2ICFAznHkXqme', '8VyT9S1GOW7cr4qEnjF73fJ3czeqlcRLHZySkpwf9bBH5n0koa2WCbgqlCWL', '2016-10-17 20:13:15', '2016-10-18 18:55:33', 0, 0, 50, 0, 0.00, ''),
(41, 'CYRIL KAYE', 'POL', 201510777, '$2y$10$EqlY3lH/Mdc.krPzOil/Y.08W3kaEkhaYhNzsypPhJCBndet1/dFa', 'no4i9HOXsHS2PPfA9BNCLPFBYFe1idoxRDHgB2QuJu5loCoe5tt8FXTSH9vX', '2016-10-17 20:13:48', '2016-10-17 20:16:07', 0, 0, 50, 0, 0.00, ''),
(42, 'karyl', 'bardelas', 201354080, '$2y$10$4vjSe1NXru9CuLoSz.RdN.cWzavk1djFgmw77qZh3bsH7yiZfhhYm', 'L3yfn7VXluOmMd76ZGwLfZUBSbHnfugBVok6R1zvkRwQ2xyClPK1Qf1HwLKD', '2016-10-17 20:39:39', '2016-10-20 20:19:31', 0, 0, 50, 0, 0.00, ''),
(43, 'Kenneth', 'Tamayo', 201369687, '$2y$10$dQm7rulVpQlbkyWJHk8dG.qKTJIVXvhOUmPP.lZE81kqvpEoVAiuO', 'zU8paRzQToZ4kWrQWeuyCWOEYpHHzMPUh0uFq9MHX7l9M8nkjSzryxkYA8Ip', '2016-10-17 20:43:44', '2016-10-17 20:50:44', 0, 0, 50, 0, 0.00, ''),
(44, 'Francis', 'Molina', 201352618, '$2y$10$kx1nhVcWy0Y1VZXFyHijX.9whGA.Fh7vrTjZoZnzdGEb0ABZm4fpS', 'VF1ooWcuKRvDk7UXwGbqicMfXp6jcYpSQvxZ8rmZ90TA3qo4yiumq5xFtOyR', '2016-10-17 20:52:07', '2017-10-26 23:20:27', 0, 0, 45, 0, 0.00, ''),
(45, 'VladJamir', 'Tingson', 201362775, '$2y$10$mc0Rt6BDq2fkoOfLhbR7pegTc7LpG5exlysHlE9oj3UPTcOx31ytC', 'zuVVLyjBowOXVHgJJuzBthnLxsE3WUZDbnjIeCLoTMDU9ukh3xzpWUTHCUR8', '2016-10-17 20:54:36', '2017-10-26 02:41:35', 0, 0, 45, 0, 0.00, ''),
(46, 'Leonard', 'Inciso', 201334612, '$2y$10$brSQeMP8FkkkYP51l/Bih.SL/QXuVO7.0f6WEslD1LMSP2gu8PxGa', 'M1lmYuEzULtLOzJWdZQO3DQAT3YDzjZ0JruAK01yjN9h0qJaTkb26ys7vSLi', '2016-10-17 21:54:36', '2016-10-18 05:05:35', 0, 0, 50, 0, 0.00, ''),
(47, 'Joshua Renzo', 'Dorado', 201343294, '$2y$10$dkL6sZqB/LCPvOz5dUPqi.UJOMI2GsZ/T66rjWwPhCzUkRtkMPYbm', 'Vh5vfIhBFRumkBmqQJLgwzGejkv2r80fdMLMm9yXlewf7CAfPhwgmJw2mJvu', '2016-10-17 22:33:17', '2016-10-20 02:18:29', 0, 0, 50, 0, 0.00, ''),
(48, 'Jm', 'Astorga', 201351835, '$2y$10$V1e6pgROQrwrLm5H6BhYPuQM0jADAR98/sOersD95VxMU.5F9hTCG', 'PMZWRbkVA8MNhtXmNuQxL1sbcnGxGRWMGmx2cd6A6R3U2JzEhvfFm6PtioBl', '2016-10-17 22:44:55', '2017-10-23 00:03:18', 0, 0, 40, 0, 0.00, ''),
(49, 'Lester', 'Barrands', 201356789, '$2y$10$x8g.iptgWTRAlizemHTPAeMbTGINW6pBrbGpb2xVTXQe7RCSpEpO.', 'S5uCHbFZr9s1Z8axLdgsEaJ6avoi5ARpr4U9H5x3g8oxDt8qyBFowF7xMzQn', '2016-10-17 22:48:39', '2016-10-18 00:01:24', 0, 0, 50, 0, 0.00, ''),
(50, 'Jo Jeremy Just', 'Lim', 201504676, '$2y$10$epzFdoPpx4X.CN/02LPTleU8emd5Yjqi2B6C72e6GOIqXyUhoChCa', 'y8NTMhzN7dtyeH3memhrbKuASsufX8brWyPDlR9qrdQDlYh0m1986uqc8XJN', '2016-10-17 22:51:15', '2016-10-18 01:23:36', 0, 0, 50, 0, 0.00, ''),
(51, 'lester', 'arnado', 201512243, '$2y$10$J9SDCpjWAtzQdIVtsyoUXO36MTo0B.8aBzxRRv.9QXqbX040p1tp.', 'kaWGByVSX57tBJMB2aBegKD6ROoEB1t6dQOEsE0T5pTSvi8fM0I5JJ139qjN', '2016-10-17 22:51:20', '2016-10-17 23:55:21', 0, 0, 50, 0, 0.00, ''),
(52, 'Bea', 'Santiago', 201503335, '$2y$10$skLzadOy0TWuSxJXmQ7l4eR0DnHFnrnqlXW1nY9fN9xIMfNKhjogy', 'OgD2PgcpCMSoy8FfQlAZNWAtly54OiN06k5lmkgen6qoPLpIU25RBm6RCdjb', '2016-10-17 23:07:26', '2016-10-18 03:09:48', 0, 0, 50, 0, 0.00, ''),
(55, 'carlo', 'valleramos', 20131111, '$2y$10$hyxtxJQeK4PdTaqqdyOzr.fBr4wQaaJ4clXm90PNed89J4LMzwMs.', 'g1ia7hIr8rQpCL2weFNvyn2S02hVrEDHWn56OWvYAwhhi8VIlqPj8Ywucej8', '2016-10-18 00:03:21', '2016-10-18 01:12:28', 0, 0, 50, 0, 0.00, ''),
(56, 'Kiibiin', 'Awesome', 201481026, '$2y$10$84y/rgcirhcrg8r9.5c9rOIayqt9ls4cnI8cM2PC1t9L/MYsMuije', 'iicVst7yikpynceQsMkQuxRpUDErqYG0z24TWiupoDpb6aRMpDBZfvnjYICK', '2016-10-18 00:32:28', '2016-10-18 00:48:36', 0, 0, 50, 0, 0.00, ''),
(57, 'JUDE', 'BAGUINANG', 201475355, '$2y$10$aJZu5fqwN50VqIdtJsWO8OumYOPj3BCrS7ajUHKNxRq4xwxFwas4K', '8CGPwbCoChA8SRA5gvIXG2ujQE2DaUPKEJoga0ei2jTLWHciRNCi9qMGkCav', '2016-10-18 00:32:57', '2017-10-24 22:53:32', 0, 0, 45, 0, 0.00, ''),
(58, 'Gwapo', 'Amistoso', 201473648, '$2y$10$lSBDxlqpO0jZGn0sp8X3mumR.ejUKoBgDsKwEvmjG0DTHGw8fZ2FO', '0hXtiOH5dS6tQUvtsKTIJG7OzZoKn3bs3SKfUvXjoUxDp1VJ8IcredIxLQ7b', '2016-10-18 00:34:14', '2016-10-18 01:23:58', 0, 0, 50, 0, 0.00, ''),
(59, 'Glyncel Joy', 'Alejandre', 201254887, '$2y$10$uCZGbMBxf/O9ev0yc1NyDOpk03zT2hE1Uz2GAK3HVcLSN/tvFyxuy', 'utuesCB5K9OVuL5J19ZUlZ7FWK2XzrcpXIJTWLeoM2pFVRWEIs7WQ4poVjIG', '2016-10-18 00:34:24', '2016-10-18 01:02:13', 0, 0, 50, 0, 0.00, ''),
(60, 'Jomar', 'Tomines', 201362055, '$2y$10$2yXACd7o74yRbT.90i9w7O8yxNMYDu4tXMbCxKbNG9j83iwl3PLTm', '54Pd0S5Rc9cli9M9DKha6CZwvMxUF3IH6nKjmR4X7M6CRDw95uPnEPqSVvlk', '2016-10-18 00:35:35', '2016-10-19 02:59:03', 0, 0, 50, 0, 0.00, ''),
(61, 'Nissi Praise', 'Espejo', 201334453, '$2y$10$fpxJt1YG52qt1g8IXix3B.99G5kG0PGtRQuGIcDdPg6uDThSaJv.e', '9lD8uFbRfTypbEsXiEhHHfatwkn6r0P9KI5u73GdiWchSKMasi0oOaWOWzoQ', '2016-10-18 01:28:55', '2016-10-18 01:36:54', 0, 0, 50, 0, 0.00, ''),
(62, 'Ralph', 'Devaras', 201233333, '$2y$10$RhR5UPjfrXC2uiQQXR3XCuWxQ7Bq3nZ4NrmSBNec1R4gLR2iIUqQe', 'GrhtPCmE5r5nkw7g5Es1e8UIeKyZOTHpX6ZVbScDfLQkW8sXldBm16IR2HWd', '2016-10-18 01:50:25', '2016-10-18 23:43:26', 0, 0, 50, 0, 0.00, ''),
(63, 'Bart', 'Monton', 201338339, '$2y$10$fqvkVr3IbBxxSkuzufuB9ecp9B3Pjb9FlBuhxLp74SuJJxNnMjLBa', 'FmaXp8TRObasnc7dfpAtaBps5glCFFCenuMA2KsbMyA02AuvlFaJFj2T03RA', '2016-10-18 02:02:31', '2016-10-18 03:02:57', 0, 0, 50, 0, 0.00, ''),
(64, 'JEff', 'Lucanas', 201353034, '$2y$10$nYtfw6L7GYd6FqEfcQG/A.0ciyA3C5R458GhBJmkvz2WfWZPpufli', 'XkCWfqbGmK9tLDKdtNfFMmtGfzIOKFCX6W1Q77Ss8EbKiSKXP9ioyQJALxDU', '2016-10-18 02:18:37', '2016-10-20 20:37:05', 0, 0, 50, 0, 0.00, ''),
(65, 'Saaaayuri', 'Maaaatsumoto', 201464319, '$2y$10$.s6hGtLMpGy7mGAP23.H6.jwixm8mMHvPgcp.2KwXiQiguvJip0lC', 'BU5ZhAPfIeco6WtKTLiViRZeUyhPJahZUSB3C6iATKXRRQlAhCjNOk3lO8C3', '2016-10-18 02:39:57', '2017-10-24 21:15:43', 0, 0, 40, 0, 0.00, ''),
(66, 'Ivan', 'Puayap', 201511645, '$2y$10$6bmM3FCF9rVc8gDcyzLsfOdNbGLcHJkUTkd99.ZRhlSi1YwvUFJFK', '483RbUYfv99c15Vcikhfx5RuEsRNeKXKOXn79Zf4xlEGWLzTyVu6mZQ4xahI', '2016-10-18 02:40:33', '2016-10-18 21:32:26', 0, 0, 50, 0, 0.00, ''),
(67, 'John', 'Ultra', 200854521, '$2y$10$kXepGwGW5x/76LreUv/7CeR2eAL7wk3O3KfQB3.ozmQm4kF5.IWmi', 'RU5BzTTIl2jBJRQ17vO5IBwTnmYaKkgCRhCpaTYkowOX6ba0LnC6nRTPEtoG', '2016-10-18 02:46:53', '2017-10-24 02:00:20', 0, 0, 40, 0, 0.00, ''),
(68, 'Faith', 'Cerena', 201503617, '$2y$10$gOYWFsr0zRh3V9BBlbGanekGHabnjG772JGHVkPYfiHNfJu4VmSoi', 'Xjtx7p4xm0HEwStELNyMvpslhs6xQ3dUzleBU3wZ0aWCic7qAjliVEfwkGWy', '2016-10-18 03:01:53', '2016-10-18 20:19:20', 0, 0, 50, 0, 0.00, ''),
(69, 'Babes Ivy', 'Ngoho', 201506761, '$2y$10$1SkuoSQyrh0C68FaLwxL8ew2ZHuPhSZsSIB8etwC2i37PgNQ9n2/K', 'vEdphpQZq1IIBvuABNvTJvclL5QK9ifKaMUGkeTtDmbRFqJBrDosYXLB34om', '2016-10-18 03:05:38', '2016-10-20 23:41:12', 0, 0, 50, 0, 0.00, ''),
(70, 'rj', 'goera', 201473647, '$2y$10$4hUhlQIaGzKADvKr9W97yesjNxBzsi.zZ7FGM4wkTLd9wb1CtgLCe', 'awHC5nguWwhrXuxHSTtRqeIjtUq7WvDWd2icDxuLm8E4QsTgTQENwqwfHzOf', '2016-10-18 03:05:45', '2016-10-18 03:06:07', 0, 0, 50, 0, 0.00, ''),
(74, 'Keanu', 'Go', 2011233, '$2y$10$JF18tzAdaHmpnJ.fqJWvQOmg54MwcK3dF9nGM0LFKK/MKcWWCc98m', 'xzkxbhVmxL6CAMBX5iJSKkV6SmEiYyxJ9qrMkTiikNE8EIx6IuCPlsYTI09U', '2016-10-18 03:20:21', '2016-10-18 03:36:47', 0, 0, 50, 0, 0.00, ''),
(75, 'Jethro', 'Albano', 201503609, '$2y$10$uG5TvBU1NwJnzNUzy4qp0OQO/j7XwUwrjRTqcwwsSRWY2h5eiDpRe', 'cVjYXDAHQZVp25ckCtF3K4apYbKQ13DgCaeyuU4a0hARFhN7jNQPKyedfTag', '2016-10-18 03:21:47', '2017-10-23 01:25:41', 0, 0, 50, 0, 0.00, ''),
(76, 'Nano', 'Leaf', 201400000, '$2y$10$mfwDq474z/siOmIqcaoqm.YDDuNopOmVX1pfpBCvphSbUojFSTlge', 'lEJkGNQNudWrTBbYkwEXRmrbmJrXF06ABX6sJDlj8VEsmiBsTsVyDvP9nFbj', '2016-10-18 03:25:45', '2016-10-18 05:07:59', 0, 0, 50, 0, 0.00, ''),
(77, 'Neil', 'Aurelia', 201481810, '$2y$10$AGHT.4QQ7TWrPlgxJxJfD.eZlF.CekKiwZMmxNJuGMgnP.PYJQ/ni', 'cHvDkEhFFhiX3mpTR1i7ZkNruLFJHp8KFQHVci6xojxIjGmnIcmT8kIK2Y60', '2016-10-18 03:34:36', '2016-10-18 04:19:00', 0, 0, 50, 0, 0.00, ''),
(78, 'Tin', 'Mantua', 201476512, '$2y$10$QZoPL8gJtK/AQLALwWScBeldLo7//UeMmqBPsBuwxHTYn0/UViFay', 'BWutrAm465ijviQ7DV9skZiRpnBNKbDPPbGNnY0IYX8ClUWhhJro3xm4dboZ', '2016-10-18 03:47:09', '2016-10-18 03:48:48', 0, 0, 50, 0, 0.00, ''),
(79, 'Krizzy', 'Urmeneta', 201469019, '$2y$10$cWHc7YX2yG0Y.qPJpNS07u6pIvbusdHVTUhxS45QW9HbmlZ85D7Xa', 'roSasbBtk7NIFS8rw9rsYqA9XvOQWcc2fbVb8Z7BEa5AgN8uFfgwOqM4YdNf', '2016-10-18 04:06:11', '2016-10-20 03:05:30', 0, 0, 50, 0, 0.00, ''),
(80, 'Kimberly', 'Lluz', 201473650, '$2y$10$OK0vJJyRDkLjbWmZVJBWgu/1CDd.6Q/ibmEmuuWcwtiX1mvMM/5J6', 'Be3mKzhJthPwlifJavwVwguWYeK3SQd7n804rBOc25Xp47pIBSm1AYXF9MXs', '2016-10-18 04:20:04', '2017-10-23 01:42:50', 0, 0, 50, 0, 0.00, ''),
(82, 'jovan', 'paner', 201269829, '$2y$10$J8dudSGzwLQTHhFq7PtWbuuWWzaaiaP7u9SjiTqLmw7VHqKrNj26m', 'vEVk5UJqTg4cgFjugeKemheWqJwG2OwkCnHa0r0AOM9RbPU7EXDUMZcVyRWL', '2016-10-18 17:39:22', '2016-10-18 18:43:39', 0, 0, 50, 0, 0.00, ''),
(84, 'Brandon Ian', 'Dela Cruz', 201506461, '$2y$10$/dSKQ9AERokmX62eEkEbIudV7sLP93j57BGSq0xfLJqAaA3vvz1/S', 'wMsmxvmfBXVZJE0j6VZIvE9CbTtCuMYzxK1ABC7cc842CZnovSoDlcibbdYa', '2016-10-18 17:46:17', '2016-10-18 18:15:13', 0, 0, 50, 0, 0.00, ''),
(85, 'Gerard Alain', 'Aclan', 201334952, '$2y$10$CDPkq/7Hi/2QB9I5mEGSvuCtZnUxELjO98NmdEmXyAG5ktos7mk/.', 'Lg818V3f1KbFNTEqOYYK0NZRBXbwI9uxXKC9GYXguSoY82QggdFYUIWV5CWk', '2016-10-18 17:46:23', '2016-10-19 20:57:59', 0, 0, 50, 0, 0.00, ''),
(86, 'Joemar', 'Codilla', 201338016, '$2y$10$GKwYw6EyH9vN0PZ91N8j3.XuZXAZnYd/g9PdV0tC/anS6NcuPDVmi', 'HxlCrZts28koLOe4RhXna0MHLNdwUbDtHToGxZYfiXY7jfXLkHeznWSQahgo', '2016-10-18 17:49:00', '2016-10-19 20:59:36', 0, 0, 50, 0, 0.00, ''),
(88, 'Benessa Mae', 'Gabrito', 201344596, '$2y$10$3KY5IuDUUNrPo9R.9N8SqOLsI6F0yrNtib9laF0gFSwVskHaltzZG', 'gFn1l7f54wY3c9GBtQoFzuBisYcVdXZlAAL4GOONp4LfhiX9cV9z7kgYTr0d', '2016-10-18 19:19:12', '2016-10-18 20:19:32', 0, 0, 50, 0, 0.00, ''),
(89, 'Melanie', 'Ladica', 201506849, '$2y$10$6/ayRQP4K1QeSYEletZkauDqi6kGJzwQtqvyLvRSLyu1UPq5Y/nJ.', 'T6V86mZH4adNOTh3LHExwmVmoRlsgL6MrQAAjrOo3Zc6MuR8aiiWC3dIbvLc', '2016-10-18 19:25:44', '2016-10-18 19:57:21', 0, 0, 50, 0, 0.00, ''),
(90, 'jemima ', 'roche', 201364563, '$2y$10$SkBHW.rq0LnaIH8tb65s/OKT5sIlK97G40MUN316TQd82q6QK6T5W', NULL, '2016-10-18 19:36:17', '2016-10-18 19:36:17', 0, 0, 50, 0, 0.00, ''),
(91, 'Kena', 'Soo', 201354107, '$2y$10$otSsJ6hmNLz8Q4tLLgBqqOgW1v2.SYcBwv2TUkQ8MYqAfh6Uri9xy', '3aeUAyK0rAfXg1Wr4UKChz9hcvYQN9qgg5jvtqpPA5GGw2R1YNBNupWz3Hbh', '2016-10-18 19:58:04', '2016-10-19 18:21:10', 0, 0, 50, 0, 0.00, ''),
(94, 'carlo', 'valleramos', 201244347, '$2y$10$1/sQ6KzCxfqQz3MUh0ZF.uojBONV5.H8RkWi5ZNoLgI1aGGJnody6', 'q3XX4P1RltVReGMlRUitm4ORHR84nnoQyIjNdcmCgecESas3yRXh7hWrsHBt', '2016-10-18 20:47:16', '2016-10-19 03:05:48', 0, 0, 50, 0, 0.00, ''),
(95, 'Jemuel Kirby', 'Gacita', 201480304, '$2y$10$D1jq0Rl57L2IOc9YoMF8TOgNEclC1BTUI.LHy/j6MpaocxyG9KsdW', 'GQE6M8L7zEPmTo1ELl2Jlfm4GA2UiyjGO2MuXz10CktHz2m86JTvFkE8lwRE', '2016-10-18 20:56:29', '2016-10-18 20:58:46', 0, 0, 50, 0, 0.00, ''),
(96, 'Kenneth', 'Tamayo', 201398868, '$2y$10$2g0/4dx0PDLc8Y3afGhQD.QNMQgfF5CuSW3i7dtUGZJSv7cMxjuOW', '1y4i1KP4iClMdSYlsBWw3llQtlqf5foUX1kQolAIJiDmFLw049FDXKBPDFkF', '2016-10-18 20:57:11', '2016-10-18 21:04:17', 0, 0, 50, 0, 0.00, ''),
(97, 'Kenn', 'Pulma', 201504604, '$2y$10$1OQqXWtkLyL5H.XFduwjUeb0GcEuJh5iHhsBW3NXST0w39jeJFMBG', 'ztwTlwocR1goqDs6BKRXQAieIOyDNUMSQPaFE2zS7YfwhzQM6YBpkgQXVkwY', '2016-10-18 21:19:06', '2016-10-20 23:40:06', 0, 0, 50, 0, 0.00, ''),
(98, 'Ken', 'Seco', 201239436, '$2y$10$bEKeQfYrkyt/NzddN3zIv.XkS6YE9fiRL2Z8C/h1CZuHolTPGx8yC', 'xxHKN2y8R2ZRE956j9vldOt285QoQBJrLuCqic2AGxpRvYqbtubUd4FDtfW2', '2016-10-18 22:04:27', '2017-10-25 22:18:40', 0, 0, 45, 0, 0.00, ''),
(99, 'Brey', 'Gandaganda', 201353025, '$2y$10$p5PAZseX0b.3b7g3fufLWewkpsWRsDahM5PfGYJJR7PoQDu9/7rma', 'YrVWYEBezvdxCgVCN8kCaD0it4Iwf33WVMdTKmhrXwyWvk2dVf0Sk61epqQF', '2016-10-18 22:04:35', '2017-10-24 04:22:56', 0, 0, 50, 0, 0.00, ''),
(100, 'Paul', 'Pedere', 201553009, '$2y$10$EgGLqc9qy2oB/zCtmNth1.y7WDHGZKQtFL8HrJCqJPXQgu2pwPwgu', 'H7awq7wbNzUiHtGtc9lsZD06M0T3qWBpsOEeblvrjX6yP29jHdZJiIltHSB8', '2016-10-18 22:14:44', '2016-10-18 23:06:16', 0, 0, 50, 0, 0.00, ''),
(101, 'mands', 'XD', 201473639, '$2y$10$TlNaNdaDhoel7hxTfO4cWOMiNAjItoXC1etZr8arqsJYaEvGJYIeO', 'YK92ukMzw1GX9Nyzs7OOe8OvFJJ5ykaA27w6P83uUmr8Qnh1UV98rzutLI4h', '2016-10-18 22:28:29', '2017-10-24 19:51:54', 0, 0, 15, 0, 0.00, ''),
(103, 'jasper', 'abesamis', 201476944, '$2y$10$Ril6IsoLx069Omr2/iFNjOCyjqB7sFfcmfBhm.4AfzyF0/nqM2Mx6', 'CWf8OPwTSlKmgzqqBaTJwFVu7117tO0Fj1kx8aFwmJwD9cOaqPwGK2aUMddS', '2016-10-18 22:59:06', '2016-10-18 23:20:01', 0, 0, 50, 0, 0.00, ''),
(104, 'Anonymous', 'sdf', 201184363, '$2y$10$7Jqf/XrbDRsAcLkuA9QzNupm6RVgmBmtT2/x9xkqCujZBkajr1LXq', 'XBAjahSwOgFX1KWleNjDOMddXhhWCNvKVVqvh63EEjpZWbcjcm5URR31NKKm', '2016-10-18 22:59:13', '2016-10-18 23:05:32', 0, 0, 50, 0, 0.00, ''),
(105, 'Dodo', 'Juan', 123, '$2y$10$bQoj1Xntn8O7jZT/Bw82g.ei6A9aBLGv8IXJ1GxelJxPSQROJwj5W', 'gDr4glleW38E9UST8URbqYtHXzS52aoflBzsMKuZ1KnU3Ek6S8kE0l8UWV4S', '2016-10-18 23:01:15', '2016-10-20 19:18:59', 0, 0, 50, 0, 0.00, ''),
(106, 'jas', 'abesamis', 20176944, '$2y$10$4gdxd8ogrGkMAt6WU8Sqpu3chHKSVnQ9QyAWBvdbiqeQXdO36s6IG', 'XmgYzauJa9fdGmmbTVtAbJnUEZDk1BuZGft0G6hw2GB3AVYBxDJJz1aMgRxg', '2016-10-18 23:03:11', '2016-10-18 23:24:51', 0, 0, 50, 0, 0.00, ''),
(107, 'Keanu', 'Go', 201511362, '$2y$10$GAwTB.XLhIoiTyb2..4GbevG6VwEPkSq5iphvUnodQJFnqNN4tnBW', 'kseGdbfQMjwGUH9AmaAvaY7Rex55qMlWlDdGT8gMyM6OYrrn8YHSkSJGOuJk', '2016-10-18 23:05:00', '2016-10-18 23:35:14', 0, 0, 50, 0, 0.00, ''),
(109, 'Jude Clrance', 'Gaguinang', 201581810, '$2y$10$ontFwiTpGA02gvwMoHcryO5gWEwzaHJVMbMNZiqmf.zwNApOHt8jS', 'GEXtZEOa2sGf8mbpOUHgPzABAkFrxKXOYc9OXhpYIBdluEekVLo2fMQXvogK', '2016-10-18 23:14:45', '2016-10-19 00:22:20', 0, 0, 50, 0, 0.00, ''),
(112, 'jairus', 'aurelia', 201334312, '$2y$10$J7qkhi8mhp/dPZeDqQm1PO/p8Z00yfIYAkp4rBMuag3gFdcGLx00W', 'P07ua84iXUZOs6lB0ZEn1amDgATV3zy8QyI71M3Avhyh1H6vJ7LCSRhUjtcJ', '2016-10-18 23:18:59', '2016-10-19 00:46:39', 0, 0, 50, 0, 0.00, ''),
(116, 'Aira', 'Casino', 999999999, '$2y$10$vw75XoWKl5r38djuFHAHL.6J74pvTDI4DbEjielB9pgpvNBkbCoUa', '6MqEBrcW3O8gdPc7Tb5hwyhUEPtlSwibURQSEfvtWdEbvZnVEzYV4UQe5s3u', '2016-10-18 23:41:34', '2016-10-19 03:26:13', 0, 0, 50, 0, 0.00, ''),
(117, 'Hannah Rose', 'Corcilles', 201139372, '$2y$10$in6fjWuJTwig4rm0hjLws.llQ6T21TR0goYlDAp40ALl2go5IWTCW', 'cxmJzXH6ICBqmIHqUljY0yjVkKDsk5ViWLo37WndwLk4aNORRDNGzyCV0JOp', '2016-10-18 23:50:15', '2016-10-19 01:43:45', 0, 0, 50, 0, 0.00, ''),
(120, 'raul', 'montes', 201103229, '$2y$10$2Zh1SMvKER5nTVE7l9p8a.EuJGkxzq1jMK4sDsocIGGADnIJ2iLUa', 'AD8pvGvgNdxeIsoKu2S2EP1DSw37iwKbtpjGPLo04lrBOWXDDwhMcdRgoPkP', '2016-10-19 00:07:19', '2016-10-19 00:14:13', 0, 0, 50, 0, 0.00, ''),
(121, 'mark', 'dacles', 201124779, '$2y$10$/szykjSzlrthIlui8ldWEuqZyb9CIUMGfqT6rREJhdE.Lrtd6/5Py', 'fTDaSv3ncedPuairEvcjSSRIIVTltNfN0EtxOHxOoKej78tCMuZaD6ZKUNm2', '2016-10-19 00:16:23', '2016-10-19 00:20:29', 0, 0, 50, 0, 0.00, ''),
(123, 'Carlos', 'Decenilla', 201506724, '$2y$10$LupOxwXOV6k/UiWYmk0exu.RuTZ35nTa4kMatXqYSYSF6J/ZqQiw.', 'BVhXHb67ab6JqBrXNGFxHDDpvHR3MMimcCvHgJkaOHyoLTqMbc87jypDhWYl', '2016-10-19 00:22:09', '2016-10-19 00:25:43', 0, 0, 50, 0, 0.00, ''),
(127, 'Amiel', 'Cabus', 201481814, '$2y$10$oWGeULZYBEutcLJ1QK46d.4TRzm4l2prLptziViR1Wn/21lTAvlIm', 'NI09aZJ951Vm57pwBzhGMJ45NM495StgD3u2Wl9wDYUDcqYW1rlPfVD7Zuzh', '2016-10-19 03:05:35', '2016-10-19 03:07:55', 0, 0, 50, 0, 0.00, ''),
(129, 'Darryl', 'Vidad', 201257492, '$2y$10$h23dMxEvyAo2gTUixaEX7.jdN0STjh6vAq3zvF7PQsdGgV6AwAnf6', 'SetAnniWyAOpqgyj8Yive04qVMa1Z4Rwwf51T0Uk8xa2nNf9tGPtkrbJXqwb', '2016-10-19 17:58:46', '2016-10-20 01:25:49', 0, 0, 50, 0, 0.00, ''),
(130, 'Carlo', 'Valleramos', 201344349, '$2y$10$olpbXFzI0ObpvnbNn8QL7e4Fy3vi9nu2LVF4eADqf/gVg7vBotiIS', 'UFFl0or3iKL0whoBzGjpP5aH6r9nQ4784OiWJeGN20AvmmC5xzbth3WVBGa0', '2016-10-19 18:12:04', '2016-10-19 18:32:07', 0, 0, 50, 0, 0.00, ''),
(131, 'Roro', 'Maojud', 201411111, '$2y$10$.E2wWintKXQ/8dna5LuGXuxre9.lvShDP28nvkk.W5ctN44owuZTm', 'SmpqlqTEScZc5lV4sZXQTdRRHwW55CIgBlcWJKlzkW1z1oHZSaD9qmT26J1c', '2016-10-19 18:17:28', '2016-10-19 18:45:23', 0, 0, 50, 0, 0.00, ''),
(132, 'Ferlie Mae', 'Penido', 201437650, '$2y$10$90troEUIkxn.qu9QayE43.1JULTgRioIBYaNqGr8LD5/wqkSh5She', 'WXxBQCCA8RYqWEQ1szRXYADzwAENkIR6L1WBpBHmjOfsRO4GEl0J5DnHBhtV', '2016-10-19 18:19:40', '2016-10-19 18:35:26', 0, 0, 50, 0, 0.00, ''),
(133, 'Minard John', 'Nombrado', 201458585, '$2y$10$FteBIJXWifNgxVO/hPc6cO0kTfryvdcxA6rmfDqENTA.M12rkCLd2', 'C3iYX3mHp24j0FArvj5j9YCXp1SoluG6PlsM2ofLwaX2ZJD9PwLUOlXhl3B1', '2016-10-19 18:19:57', '2016-10-19 19:16:07', 0, 0, 50, 0, 0.00, ''),
(135, 'Shaishai', 'Yoon', 201356107, '$2y$10$4yKhc7QW2oypJm3oOcXvqu3CdCEDs65h8z9G2jj0TcUGdllbwO3Uq', 'I1uX4t5C355mTJDlNfHczMv3nXfk6DHQaBWciq1XLthRVWy2uCHwyyvQLHbM', '2016-10-19 18:28:39', '2016-10-20 22:27:06', 0, 0, 50, 0, 0.00, ''),
(136, 'open ', 'haus', 201399999, '$2y$10$hjEV8bCfKerDMzODxjcAleZfGYEEWKjvH9a3lD3xY4ziBOPzkufC.', 'ivwGiofA0NEfDXglM8HRX6hWfOI1pCJSwEC6bNbHEGymieCTb9tNfKCOybhf', '2016-10-19 18:29:58', '2016-10-19 18:41:45', 0, 0, 50, 0, 0.00, ''),
(138, 'Caster', 'Misagal', 201473627, '$2y$10$oNrn3q0FAhiNgoCaqNX0h.osAYSrNnhRhbhsyi3IoAw9Kctv4Z/Nu', 'H8FSJKcsUOeDlVY4Epqh602JwBzUtDX18804DbUmbiZaD6VgAQqEXgT2tz9a', '2016-10-19 18:38:22', '2016-10-19 22:32:37', 0, 0, 50, 0, 0.00, ''),
(139, 'Benjoe', 'Barrio', 201473620, '$2y$10$IXpYxehXtVx2Hf2BIDh6UevA5kfOKYRt2qKvh7ZauY5wzucABmP9e', 'nqmLbMvyEvMjfjR9nKDP6dQcaZtpfTU6NkPSc7balEPWN7FH65XQpxQl4w9d', '2016-10-19 18:54:12', '2016-10-19 18:54:48', 0, 0, 50, 0, 0.00, ''),
(141, 'joy', 'abesamis', 123456789, '$2y$10$arGOgfmNPTe/1Q4E5QFPsuGbt.ZuvF2ZdFoV5jQqAPNmwmLv6qgiG', 'gMwbkfm0WnbiGOJ689Pfaif23FBqDT9HUBFYp2QsEBtJo8fQ25AqTORJHGgY', '2016-10-19 19:26:12', '2016-10-19 21:26:08', 0, 0, 50, 0, 0.00, ''),
(145, 'Jace-on', 'Quijano', 2147483647, '$2y$10$MlBJe5Ihl7bb2xPF/7C/tOzxgi51XIANa/petM8.g0kjN44t4HIee', 'S2FHGBAg5FItJeNmQnguld3ERGvvXImhBYaAL1Ka2OueR1H9MPKjNzFxSEfp', '2016-10-19 22:33:55', '2016-10-20 00:01:41', 0, 0, 50, 0, 0.00, ''),
(146, 'Sean', 'Ballais', 201504562, '$2y$10$C67x.vemhFe95V/JhWJoweZpup8zXXbsPypKvGlj7sEa4M6AI9hxe', 'PuRyfp07MLNVQ7gufqHRO9agvARtO98o8TX3QkYRNGyXc898gnB1KYe6hP2E', '2016-10-20 17:41:45', '2016-10-20 19:56:40', 0, 0, 50, 0, 0.00, ''),
(147, 'Joamir', 'Perpiñan', 201511348, '$2y$10$MxdOVW83708qOWCOVmBuFuNjY4/OijK7aXCqdR4W/4kHOZ5jNstVG', 'AP3td9vqbyGjk0g1va6pFRygN3YGb9rIhsKicQKHl9fHS3G3hojzaLNVq0Ev', '2016-10-20 18:13:46', '2016-10-20 20:01:48', 0, 0, 50, 0, 0.00, ''),
(148, 'Cleto', 'Reyes', 201506376, '$2y$10$SaEdP4rgGq4Y3WRpKDLxEuH1cLOe/xIOmcYwUwcK548NyzRwyD9d6', 'Qrmsbxdv9WOQpuGXQnsYm86sJhctiGOFDtAK32l8rGlyJsNKPrzissv3p8Xo', '2016-10-20 19:07:38', '2016-10-20 22:15:20', 0, 0, 50, 0, 0.00, ''),
(149, 'bug', 'gub', 200500000, '$2y$10$DkVJzmGA5EVgnXbFIiciGuqZk5NEGlyynx2e30f7z07Jk9C3hFVx2', '9dxS7pf9i4MCPELNPgx6Z1SXStZe6Gun2YDjpOrIS9cCLWbktjgwURKYXB2n', '2016-10-20 19:16:02', '2016-10-20 21:04:54', 0, 0, 50, 0, 0.00, ''),
(150, 'Restituto', 'Singaw', 111, '$2y$10$lmsB8Z4Xi1Y5b2lH.N.pvO4dd9gQZF0bsEzMLiP2FvDMRzRCuPeBa', 'rUEQpVrU9KuzqH2zE57dudp5lCNh0mkf3pTkaVGXK0aluD8L78vN2AN2Om6V', '2016-10-20 19:20:47', '2016-10-20 23:33:40', 0, 0, 50, 0, 0.00, ''),
(151, 'Kyell', 'Jeff', 201503613, '$2y$10$3CyDtnJtaCqZDXOpib.sXuQSLyoc5L4n0/OFo9VCOAYFSPJQLPm5i', '8S8ivFSODFpnJzE0VXjRBUbCKzE5CDpinptlbwleGjLWgMNFIpG43Lqt54S0', '2016-10-20 19:39:41', '2016-10-20 20:51:40', 0, 0, 50, 0, 0.00, ''),
(152, 'Jem', 'Hivano', 201355555, '$2y$10$k7KpEewTGP8PVlBtqZQJjuhMV2D4LtqIwpkQ522hQBmonloNnGYWO', '5q3MCRxGjla1RvbbbmL19dLxsemcjRDibCA9cHV2G6WwEAZuXp00n5Hy1TI5', '2016-10-20 19:55:21', '2016-10-20 20:01:57', 0, 0, 50, 0, 0.00, ''),
(153, 'Pao', 'Lim', 201354081, '$2y$10$OxRF6UGsQq2hT1w9Dd1BTeFKC3ji5qE3800zVcr9joShmxRKtWBFq', NULL, '2016-10-20 20:20:17', '2016-10-20 20:20:17', 0, 0, 50, 0, 0.00, ''),
(154, 'samantha dawn', 'candaza', 201504954, '$2y$10$oO81jp6PIaK/HKKWdp2UxeIUPtOxs9qebhZwN4.Nz5AL8vJqUXEAm', 'rNxNXiyWcXwIB5Ka3HRRLCh92PKh5OGWSIaQbfEdmm8UHaXJ5iL8vxaKIh1f', '2016-10-20 20:32:26', '2016-10-21 00:51:16', 0, 0, 50, 0, 0.00, ''),
(155, 'hihii', 'hiih', 200112344, '$2y$10$3qPXi4TDeI0BvzeBn1164.02OToFcjvMDC4HjPzcS8FbsLjEvvOX.', 'eevxqq0nJuqKPFo4mkcqU1uXOOM7mChcK7YxqYGfCSEv4VJPZV4HGgBLyfzZ', '2016-10-20 20:51:19', '2016-10-20 21:56:59', 0, 0, 50, 0, 0.00, ''),
(156, '23123', '12312', 201476252, '$2y$10$oeHVtf8vhr7JhUr.A6gpreBkYSEe7enSwCt7mvZC3DJLDw0zTancW', 'pl34ZyL41jpkQ7J6LOaIpMfobihEz3uWmWUaCBQopY2QkKlVQ81xCi9XcqGE', '2016-10-20 20:53:48', '2016-10-20 22:11:34', 0, 0, 50, 0, 0.00, ''),
(157, 'jo', 'talbo', 201343007, '$2y$10$nxKJcJu4cUp2bUtnsGA/bOfPhEK2892qB64CeDxly1JNO7uIfQhJm', 'JDQMcCNsSU3v70Rwn9f8ojPtZqTJBPL9TfG4F8B7QywcjzE8KOPWXnXoVRsk', '2016-10-20 21:35:12', '2016-10-20 22:16:18', 0, 0, 50, 0, 0.00, ''),
(158, 'nino glenn', 'jazmin', 201511316, '$2y$10$xSlMkkkATpuHXsoLye7Y8eiNSxe3jpKkgo1ae46ka52r5GkQRO52O', 'ROPtSp2wtXnM1ShWtmwhenNztn6v7vxF8i7Sz9rkNCffNqwbw99SZ4vqdI2m', '2016-10-20 21:47:51', '2016-10-20 21:54:45', 0, 0, 50, 0, 0.00, ''),
(159, 'Indira Dimna', 'Apa', 201512355, '$2y$10$XQI67fsXYiZsFdZBWnwARehSH7Nr9UpF5/hrZy0NeNQ3wfTBa0NVq', 'Li95B8nis4xJSZjbTVlZs8UHqAstAOvMGRIo2zlcFhoKm58bVeksNTJsXThJ', '2016-10-20 22:14:50', '2017-10-27 01:49:46', 0, 0, 25, 0, 0.00, ''),
(160, 'Venus', 'Go', 201486232, '$2y$10$EYSfQGRb28NC/vjy70U2QugKCi8mOvbJnCcGLTEympwSICYRvsPMS', 'ka0D0fYlsXmhQpwf7hZUSpLMjJf7u9Dj0SBn9M6gAGWLs3pm8FIzMkNNO9ae', '2016-10-20 22:53:13', '2016-10-21 00:45:43', 0, 0, 50, 0, 0.00, ''),
(162, 'Allan', 'Sarsoza', 201513839, '$2y$10$SD91bMYajbEEud34yMUBBOcALmStUdj68X2mEoBelnO0KCK0A.JB2', '4sKk8Ydzbkxt0SekZ8m6hoyO9Jz0Dr5ZPIDskcPqvtbb8PxZC4tBds41ucgg', '2016-10-20 23:40:10', '2016-10-21 00:45:57', 0, 0, 50, 0, 0.00, ''),
(163, 'John', 'Snow', 201354044, '$2y$10$/m9X9vQ.FGGCgy3VTAx0LOX8SX1acWIFHmqxk4DzJ51Yv5mMhZuGO', 'vPUdXZ8qFrSc7zA8QF06mm2QhhFmtcgYCUeSWWTuX6YMWJlaG4CcUivpKlyg', '2016-11-09 17:10:51', '2016-11-09 17:21:54', 0, 0, 9980, 0, 0.00, ''),
(164, 'Xander', 'Ayala', 201467074, '$2y$10$Hg4zVM.Eve6vsFUM6BtlLuMnq7dnw9BCwx0qp.OZl1Waa/ZBcWpmK', 'me6XDBPCsrk3Hrt9fm7qiPWjpOm3UQHAqL7HVgiFGJruBwTO357jDnFdIuxS', '2017-10-17 20:08:21', '2017-10-22 22:21:51', 0, 0, 50, 0, 0.00, ''),
(165, 'Juan(John)', 'Gawin(Doe)', 201412345, '$2y$10$fHkuHNnfelUKVIkFtiQBruVLMTH/iQojVRiX8T0iGSNShbYgsHTTy', 'KoCQUOHjhwUgNBbIEndAF2u33pAh4ieLnFSsq3QD3VF15brwFDixJSN9UK9j', '2017-10-17 23:37:50', '2017-11-30 11:04:15', 0, 0, 1000, 0, 0.00, ''),
(166, 'Jane', 'Doe', 201454321, '$2y$10$JjxdHuiHmCg/jLsJpRL2TuLh0gsasXEVk1YZIeBTDO0doxUjyMOMy', NULL, '2017-10-21 18:22:15', '2017-10-21 18:22:15', 0, 0, 20, 0, 0.00, ''),
(167, 'Gary', 'Kasparov', 201712345, '$2y$10$FhPDiXuvjKr9nVN6dM7YyebyuSVh/E26qRFp5BCNoWY9XIl5VYGZq', '9wzMgYD3ZXW2wuXcej7L1kZxT46KlBAxCg2QP1UDwnW15tf3RJyFfvgnXbbR', '2017-10-22 05:17:46', '2017-11-30 11:04:42', 0, 0, 50, 0, 0.00, ''),
(168, 'Jhunn', 'Margallo', 201406429, '$2y$10$56Tmxqc5wNVxtCAaLG0D3efrl.3NfpBLVt5kfrek4bd2JHxkvFT/6', 'KuivVXNKiYVvDhOqnu4WsqXCIiS2ORNCWV1WzksKnIiQPe6yfNAiKJ6gn1SG', '2017-10-22 18:44:01', '2017-10-22 22:51:00', 0, 0, 50, 0, 0.00, ''),
(169, 'jim', 'data', 201120800, '$2y$10$H4XhEMSqXAVdhTYEncPKj.dIYZET0YDciZ5dVgA.q03qPtgv1ckZ2', 'pR4jBHAgfHSSKiMLfwvgF6rgjHiGH16nJmXxAhlIP7MQzFgUwRZLSMhzJxrz', '2017-10-22 19:02:59', '2017-10-22 19:19:07', 0, 0, 50, 0, 0.00, ''),
(170, 'Tsin', 'Tao', 201417345, '$2y$10$51tPEg/V8uEdTfFAyhEDVO22bFKd2gQKWlXVlp5OFShwP3lenJ9bq', 'gl7OcTjjQMDFL6Kmb8JgPoGUtGM83tmKRZqAfE2lcfHeagsir7bIWvpGlMNY', '2017-10-22 19:20:49', '2017-10-27 00:56:45', 0, 0, 25, 0, 0.00, ''),
(171, 'JM', 'Est', 201349850, '$2y$10$PwQrlFyukCrzavL31sD50erBUE4hUT.n.jqjmWJsqc.AlMQdMD5QK', '30LPdXZ9zkve1R2AGDjr64aenweGGAPILQk7s7j8Kb5PFd2DFYqFMp487x0J', '2017-10-22 21:03:55', '2017-10-22 22:18:45', 0, 0, 50, 0, 0.00, ''),
(172, 'Ryan', 'M', 200626355, '$2y$10$XOwpvDDIvt.fC2LeSB0Cw.OfIof9tDiYGsEkaoR4EuGNAHxm0VQKK', '6UoWHu7sDvpjeLVA6yOex3I2207m9duX11Fp19RChN7uEnXe1QGvPwsJzReU', '2017-10-22 21:20:51', '2017-10-22 21:22:45', 0, 0, 50, 0, 0.00, ''),
(173, 'Kariel', 'Baylon', 201255885, '$2y$10$k2xm7hWO4kUc19PHcMDaOeVNKqXjHuY1eYZ3bX/nfyrV/TNsDX4c.', 'YMGm7701cYdy0Dqu9WDsJKR1t0wg4JL2yfbcuqhTaavmuwQoHZ67wLT9DpkE', '2017-10-22 21:36:00', '2017-10-22 21:36:39', 0, 0, 50, 0, 0.00, ''),
(174, 'aldous', 'abesamis', 201479944, '$2y$10$IwdA8JywXsDdkCqTM9COJOPjiY5AVzVFvBZlFwiyvDmFn/TsjrVRS', 'IOfzP123SY7y9HwnBpYgNEaRmGrI9ZwT2jamfgflo04hzTZ5zWqfx3e8pxfJ', '2017-10-22 23:06:01', '2017-10-22 23:37:16', 0, 0, 75, 0, 0.00, ''),
(175, 'Aura', 'Naval', 201506464, '$2y$10$TdGFhA/WhJE7DUil.T0m6.tO3/1x6XVXQBDTHH5XLL3LifYFKu9iG', 'iED1u1IQUwk3jXIwEdhjIAOCYxuZx8lrGHy2KLFz5CDxnVWsjZSvfHfl7mzj', '2017-10-22 23:35:02', '2017-10-26 02:43:56', 0, 0, 60, 0, 0.00, ''),
(176, 'Lodi', 'Petmalu', 201469696, '$2y$10$VkpV7Z6KXhyxlfNk4qOCXOJ7DSjQBKix/KQRZQteD3tptbDB7sLnK', 'FfKLSa4IUphxkkscNeM2jSDnWt7RfL2hNLLJn3ReF4JYp9zw7ppYccL6110l', '2017-10-23 00:42:06', '2017-10-23 00:44:05', 0, 0, 100, 0, 0.00, ''),
(177, 'J  >:(', ' ', 201473631, '$2y$10$DBqC7ixbsOcVOdr.4lgYBubgNf9O5znP2tKYs2fMiTkq89SV8W/ja', 'EjRVTD7eDkYmmwJWnHnFiatXW3pZJCA8v1Ns2191wXUbbGCA4uswnlx6jhf0', '2017-10-23 00:51:22', '2017-10-26 20:18:26', 0, 0, 35, 0, 0.00, ''),
(178, 'Ninja', 'Saga', 201503111, '$2y$10$eKhCf2g4nc247JDwJLI9H.BOGc796ej0kftFgeCwcnzbpjb0ySI1q', 'zTIAYx3LQzqz3fRHeGKsy2dXosqm3cRE3b168Z9G4Jl5WWnLCV6ZUko7bpdb', '2017-10-23 01:16:27', '2017-10-23 01:17:18', 0, 0, 95, 0, 0.00, ''),
(179, 'Coleen', 'Jomadiao', 201481827, '$2y$10$RjCtxu6jEwWaWLtVIxYr9OQ9dQ22a8qGNCSXrVZhsroNatVNamr/C', 'bCy6W8edkGE2ZHGgSBC15IQWjYSyZJCmC2gZH2qOlJCVnpeGrN9pFPR0vg1g', '2017-10-23 01:23:44', '2017-10-25 23:50:45', 0, 0, 85, 0, 0.00, ''),
(180, 'Juan(1)', 'Cinco(5)', 201812345, '$2y$10$Q.fWm4tHTHwVVMluF1sZGeJxvnALya66ZzNCEXESGviKfwJBAyI1S', '6ThnkzfGEBK26cz6yYvbY7HpEkEB0yoaRUfad6vxo1f80xTaASbi7NmpYGPL', '2017-10-23 01:26:37', '2017-10-23 01:27:32', 0, 0, 50, 0, 0.00, ''),
(181, 'Richard', 'Balena', 201437629, '$2y$10$jvU7pXpbvCNeoty6a0Gx0euOKSDDnBi97t3.PFvZ1i9ha1b4a1Vtq', 'aIFsjgGiv0YTqNX96QGTOR1rP4xlW1fNrCuhadtVJt7F55TcXvDNwNRHIvYr', '2017-10-23 01:31:05', '2017-10-25 01:40:14', 0, 0, 40, 0, 0.00, ''),
(182, 'Daniel', 'Hizon', 2014801611, '$2y$10$mnqRwq7mxFXZ/7ZbRbOuU.VT6Sou2MtXt/hFP352wexqLIE3fhgJW', 'GoG9NBtNNf7Uh1yqSUkthpwhmCMuwWf2xvhLCuu0cn18ESSPvlGq6xgCLumO', '2017-10-23 19:06:51', '2017-10-23 19:11:23', 0, 0, 35, 0, 0.00, ''),
(183, 'Kyah', 'Pembarya', 201341499, '$2y$10$T5Pu6U3YGpc9xvT1ahALju3vaIwxVM3jP8LVCCjCIEkrxPPnzed1a', 'A9JsNKY4wNB7VfiKY4mNRum5hfxdZxyE3YlREWs1dBRNKnKtTexhvXCDCrev', '2017-10-23 19:10:10', '2017-10-23 19:10:30', 0, 0, 50, 0, 0.00, ''),
(184, 'Oneen Repsaj', 'Escanuela', 201473625, '$2y$10$68RqSIT0YuPtWuNycP7sPeoR9WR/lEhUpsH0msdA9YmAli4jEELPK', 'uijeKQrfBxjpSpXvWKxEsFZY2lT1rq3kWVSQmhsEAfp3lllqsjn10i1LY2yH', '2017-10-23 20:42:27', '2017-10-24 01:14:43', 0, 0, 35, 0, 0.00, ''),
(185, 'huan', 'delacruz', 201410101, '$2y$10$8NN1nkgt0unGbjsOxxpgGe2Ckc/X0XTT4MuEjKY47bXaYjuHfP9rG', '5lGe2JUjAPo9aWAKsQ3QUtzTpuOGwCOS14964pLGOKwv7jbTzm3Y2sdu9ofd', '2017-10-23 21:47:12', '2017-10-24 02:50:33', 0, 0, 40, 0, 0.00, ''),
(186, 'Kim Jong', 'Un', 201481022, '$2y$10$kYDtl2zRPAvuNnbUQ/WWo.5eEAH0/SGXADD8DlldLXxEfw2LsYyMW', 'PrIwKvaK5J61nHFt2wxU55JQyxPV4ZU2ygxZuYUiAzoq0vdiccWZs3STRFSP', '2017-10-23 23:37:52', '2017-10-25 22:36:48', 0, 0, 5, 0, 0.00, ''),
(187, 'Hans Joshua', 'Ygrubay', 201436361, '$2y$10$U7Yx0U0fG/4v9YceplV8HuWlnnkEqRlpij8JVWrBSYvN7D7IGJpuC', 'EhZXdcDGqu483lQd6pZj87PoZXfSSGUzxMObjm9lj70cCgsCN5uyXGNH71xk', '2017-10-24 00:25:47', '2017-10-24 01:22:38', 0, 0, 25, 0, 0.00, ''),
(188, 'JBPCabs', '_FishLover', 2014, '$2y$10$4l.MsU8O/7tsqC3OVlm.luist2NCdTzNSRJCt0YLzxGOPH.Qhefhq', 'xIpRx8NcdP4JETekgj1mEudEIJVuFVTWbxSapCmdxsl59fL1exe4Y3oQ65vP', '2017-10-24 00:25:52', '2017-10-24 01:16:25', 0, 0, 5, 0, 0.00, ''),
(189, 'Richard', 'Redil', 201436450, '$2y$10$YLHRVAN5zEo6en2mve246udKiWKTfqMZeEZt41X1/5Fc9fzEQwjRW', 'QqhWUb3obiaq43gECUSpDQWBqTW3aMwzGIDj4o4sMkVctqd4FErZSYJs1pNQ', '2017-10-24 00:26:00', '2017-10-24 01:24:16', 0, 0, 30, 0, 0.00, ''),
(190, 'You', 'Watanabe', 201465654, '$2y$10$qbRu59dGA.2c/F.Gz8.PROyR4TYh/xf0.cSjhGOAIFPIaJw4YFpOm', 'c89vTEKtxAwk5tg6XzxkRvrvYIQvfYouLQRn4ynT6BiFoPzzGVBe9g3pecGB', '2017-10-24 00:26:24', '2017-10-24 01:17:15', 0, 0, 0, 0, 0.00, ''),
(191, 'abnkkbsnplk', '', 0, '$2y$10$P9dBUoK5JbGxlnSYVV1HFuv/nuJRdjnLH7bJc6vX1TeiGLFpWfKFu', 'Eaoj1K5nOjDnAcTY6hqelkDlZKdnCAhaUAvtpfKBMOgUvqLBdnmSQr8HcKvM', '2017-10-24 00:27:02', '2017-10-24 01:39:59', 0, 0, 30, 0, 0.00, ''),
(192, 'Katrin', 'Garcia', 201464509, '$2y$10$Ver7HsF7kP5unh/oGTLZGe/JeUgc0GrVODGYcOhbKK2QIfX.5ry2W', NULL, '2017-10-24 00:34:23', '2017-10-24 00:34:23', 0, 0, 50, 0, 0.00, ''),
(193, 'Mc Colleine', 'Gadores', 201436986, '$2y$10$r5/tdCBYMB5UQA1JMnDAIOo/SnH4YLnDz0FVVTN4EtRqfd5YqrXVK', 'YgdRzOsiASyYMewalX3pXr4SEmZj5ixlj88j9NkY2k9NDV7zWwBDsuZ9taSi', '2017-10-24 01:19:22', '2017-10-24 01:35:02', 0, 0, 30, 0, 0.00, ''),
(194, 'Earth', 'Kingdom', 201300001, '$2y$10$PwHeLHAz36NNe55kLuXmD.zWI8Io7fsQ/S2JaMUOp9bXs.U4PpBQm', 'DYEiFJgPNQlCA9hThoaAe1KRjEWFpQQXsKwIey1YoO0R9XpSG713hCQdQYJx', '2017-10-24 01:24:58', '2017-10-24 02:51:22', 0, 0, 20, 0, 0.00, ''),
(195, 'Noel', 'G', 201481823, '$2y$10$RUxHdvzthYvdjVVqg3E2c.geCj8WDvdBItMPwtWiMD9k.It2wbFc2', 'HLnMScb0fTUPWLEnsva8P8BfxOXprorL525uajE5Ug0JqawUaFDTfGiBQel2', '2017-10-24 02:00:53', '2017-10-24 02:05:59', 0, 0, 50, 0, 0.00, ''),
(196, 'van', 'pan', 201269828, '$2y$10$tfHLjsG2eCS7HJ6wzll3r.GQkIjxRUkzA.3/qFk/TXWtyeAR0nEri', 'Y4F72byytb4FOxQI1O058sD42w3YkxgmAgtGpBZcepjKqfHlSdQlb6dMHNJH', '2017-10-24 18:10:49', '2017-10-24 18:50:22', 0, 0, 45, 0, 0.00, ''),
(197, 'ENTREL', 'B', 201459068, '$2y$10$lE2.v/cG.wKNxIt.e8xHXedKwWL8g0G6n.hNyovqZNVUSZyLZcqzS', 'BR02yQ98iBI8SXQpUVxnzKfSZhEJ9IbQ4MYIsRjM1kaVrqE9ytfcGmiNdYf5', '2017-10-24 23:01:31', '2017-10-26 19:11:48', 0, 0, 45, 0, 0.00, ''),
(198, 'Julia', 'Eder', 201475048, '$2y$10$AEpXjmXsaszhvPAzYyDT0O77DZBJhyago5aSi1ZMnHF64Mlcbmxj6', 'NjgGEnqs28vCN2q4PzdiKPikJbIHFQxIb16X0m3ZINPdFGtDDWAKePZbUEH9', '2017-10-24 23:32:42', '2017-10-24 23:38:41', 0, 0, 50, 0, 0.00, ''),
(199, 'Ricah Amor', 'Cabalhin', 201416445, '$2y$10$1oN.eeS8SIJqKdAnAK.r/eXMIBchq49TkDv0rTS6AV1Q.zrzMf6ky', NULL, '2017-10-24 23:32:51', '2017-10-24 23:32:51', 0, 0, 50, 0, 0.00, ''),
(200, 'Anez', 'Baekhyun', 201473618, '$2y$10$M9CuZYwFjtP9juIu6kNqH.ESFkW9Y3XHGQuoB6tVZ8ZScYVlpWjGW', 'S4a85OH8fnGKeQaAqxeP5Z8ZCAMNFhvSIz8FwyVbUbytHmsxZLoQgLsQ0G76', '2017-10-25 19:29:28', '2017-10-25 20:10:08', 0, 0, 50, 0, 0.00, ''),
(201, 'Vanessa', 'Tagoctoc', 201469020, '$2y$10$2/h6LzbNt./KdTnVL/sHbuiAZnuH/I6W8heIwjR5SZKk0m1G8sZ2y', 'EkLdiikeIt82pvTiHhqGjjZpVsbjEApyUuecIWeFuHlRqQdXiIkeJxJBy5NA', '2017-10-25 19:39:48', '2017-10-25 20:28:16', 0, 0, 10, 0, 0.00, ''),
(202, 'Alnor', 'Realino', 201416457, '$2y$10$7/FjbeIc4.a00R.I/P07oOehKEvsK1nHItqW43fgNqXD4S7cAoyia', 'RnZNJjbHepjehsY97yXV30MPdUupSFkCdvHYQ0AhmujEglKbsurq8h6lUU8J', '2017-10-25 22:06:38', '2017-10-25 22:39:16', 0, 0, 15, 0, 0.00, ''),
(203, 'Loise', 'Borja', 201464491, '$2y$10$RAxCK0.Fqnzj/X8qbGqFguYevj7rKa050eww2VYCf9tPP3PXN63ai', 'ZVUvtyellMiw40raeAUgG0Mx3Vuy50M8roYF15YbaHZLkqmjSG8xPdxAUzXg', '2017-10-25 22:07:30', '2017-10-25 22:39:30', 0, 0, 35, 0, 0.00, ''),
(204, 'Joyce', 'Sabar', 201439428, '$2y$10$8iyWQ8yLj60Xw0WGSsrmwe4AdmZDqYeBX.NUfSRaqByFo9JqZhZo.', 'WZ4LFYnV5T0f9irwqgDDXm7BgzQ1Cs2YelcmwB2cOFg97nZmfgoWrAiV3jLw', '2017-10-26 01:23:48', '2017-10-26 02:14:56', 0, 0, 30, 0, 0.00, ''),
(205, 'K', 'A', 201475354, '$2y$10$loJFypNry.kH/FewoJBjeecc5bYLjAHQrL9vGwh3PmABxMqaw6MaG', '9CkgPTGVipHGIGqWiSwenCCIOWBwl2DNjxJiVQFVvYGOLtzhGCA5jrFHIWfA', '2017-10-26 02:08:46', '2017-10-26 02:09:55', 0, 0, 50, 0, 0.00, ''),
(206, 'B', 'C', 201455555, '$2y$10$BrnaANKMHE3AODGXpU/hSuGDxmtZV5a3L9DlNKIssLbGUMnyZhtF6', 'pbGr66JBz63r5jqKVMRa5M8lTBYnWukTLgzDqqCnRBPHExJHtX0sNI5Eadhf', '2017-10-26 02:16:29', '2017-10-26 02:16:40', 0, 0, 50, 0, 0.00, ''),
(207, 'kristel mae', 'bernaldo', 201439432, '$2y$10$H4ofcVKqQ1.gWebp88Dn3epEOdleIbBczKd/VjSROLgHdcJ37ENrS', 'qCjwizydpk5ftYpsIMybFQEV6YMmK0Q56CfKEOHIoS13GDAO7jtJCWVMP2bK', '2017-10-26 02:39:54', '2017-10-26 02:40:59', 0, 0, 50, 0, 0.00, ''),
(208, 'jes', 'marcos', 201512317, '$2y$10$nqSkf9qp.ITvsxpChLGhuuw3kZfBIxloPM4c7TadN4kOB5Mxk26Sa', 'Pm18aGGUcRulZbaYSfbfMXsRh4JOWgMh3NyCorY9Gu42LsejDxUtLj6YqdxI', '2017-10-26 20:20:08', '2017-10-26 20:45:17', 0, 0, 25, 0, 0.00, ''),
(209, 'Annie', 'Batumbakal', 201353364, '$2y$10$P4Xs8BRjb5FHtCtYn0ELWuAz7h.NHG0fvCiLWZh5F5nwFAZGARMX2', '5tJ5OjDZHxF6fpBssdNrA27mRVJzW3LM58NvfEzK2ehTRpuEhIF9Cdlzmtnm', '2017-10-27 01:02:46', '2017-10-27 01:04:22', 0, 0, 50, 0, 0.00, '');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `videoID` int(10) UNSIGNED NOT NULL,
  `videoName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `videoDesc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `videoURL` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `genre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`videoID`, `videoName`, `videoDesc`, `videoURL`, `genre`) VALUES
(1, 'Kokoro Connect Episode 1', 'Episode 1 of the series:Kokoro Connect', 'vids/Kokoro Connect/1.flv', 0),
(2, 'Kokoro Connect Episode 2', 'Episode 2 of the series:Kokoro Connect', 'vids/Kokoro Connect/2.flv', 0),
(3, 'Kokoro Connect Episode 3', 'Episode 3 of the series:Kokoro Connect', 'vids/Kokoro Connect/3.flv', 0),
(4, 'Kokoro Connect Episode 4', 'Episode 4 of the series:Kokoro Connect', 'vids/Kokoro Connect/4.flv', 0),
(5, 'Kokoro Connect Episode 5', 'Episode 5 of the series:Kokoro Connect', 'vids/Kokoro Connect/5.flv', 0),
(6, 'Kokoro Connect Episode 6', 'Episode 6 of the series:Kokoro Connect', 'vids/Kokoro Connect/6.flv', 0),
(7, 'Kokoro Connect Episode 7', 'Episode 7 of the series:Kokoro Connect', 'vids/Kokoro Connect/7.flv', 0),
(8, 'Kokoro Connect Episode 8', 'Episode 8 of the series:Kokoro Connect', 'vids/Kokoro Connect/8.flv', 0),
(9, 'Kokoro Connect Episode 9', 'Episode 9 of the series:Kokoro Connect', 'vids/Kokoro Connect/9.flv', 0),
(10, 'Kokoro Connect Episode 10', 'Episode 10 of the series:Kokoro Connect', 'vids/Kokoro Connect/A10.flv', 0),
(11, 'Kokoro Connect Episode 11', 'Episode 11 of the series:Kokoro Connect', 'vids/Kokoro Connect/A11.flv', 0),
(12, 'Kokoro Connect Episode 12', 'Episode 12 of the series:Kokoro Connect', 'vids/Kokoro Connect/A12.flv', 0),
(13, 'Kokoro Connect Episode 13', 'Episode 13 of the series:Kokoro Connect', 'vids/Kokoro Connect/A13.flv', 0),
(14, 'Kokoro Connect Episode 14', 'Episode 14 of the series:Kokoro Connect', 'vids/Kokoro Connect/A14.flv', 0),
(15, 'Kokoro Connect Episode 15', 'Episode 15 of the series:Kokoro Connect', 'vids/Kokoro Connect/A15.flv', 0),
(16, 'Kokoro Connect Episode 16', 'Episode 16 of the series:Kokoro Connect', 'vids/Kokoro Connect/A16.flv', 0),
(17, 'Kokoro Connect Episode 17', 'Episode 17 of the series:Kokoro Connect', 'vids/Kokoro Connect/A17.flv', 0),
(18, 'D-Frag! Episode 1', 'Episode 1 of the series:D-Frag!', 'vids/D-Frag!/1.mp4', 0),
(19, 'D-Frag! Episode 2', 'Episode 2 of the series:D-Frag!', 'vids/D-Frag!/2.mp4', 0),
(20, 'D-Frag! Episode 3', 'Episode 3 of the series:D-Frag!', 'vids/D-Frag!/3.mp4', 0),
(21, 'D-Frag! Episode 4', 'Episode 4 of the series:D-Frag!', 'vids/D-Frag!/4.mp4', 0),
(22, 'D-Frag! Episode 5', 'Episode 5 of the series:D-Frag!', 'vids/D-Frag!/5.mp4', 0),
(23, 'D-Frag! Episode 6', 'Episode 6 of the series:D-Frag!', 'vids/D-Frag!/6.mp4', 0),
(24, 'D-Frag! Episode 7', 'Episode 7 of the series:D-Frag!', 'vids/D-Frag!/7.mp4', 0),
(25, 'D-Frag! Episode 8', 'Episode 8 of the series:D-Frag!', 'vids/D-Frag!/8.mp4', 0),
(26, 'D-Frag! Episode 9', 'Episode 9 of the series:D-Frag!', 'vids/D-Frag!/9.mp4', 0),
(27, 'D-Frag! Episode 10', 'Episode 10 of the series:D-Frag!', 'vids/D-Frag!/A10.mp4', 0),
(28, 'D-Frag! Episode 11', 'Episode 11 of the series:D-Frag!', 'vids/D-Frag!/A11.mp4', 0),
(29, 'D-Frag! Episode 12', 'Episode 12 of the series:D-Frag!', 'vids/D-Frag!/A12.mp4', 0),
(30, 'Assassination Classroom Episode 1', 'Episode 1 of the series:Assassination Classroom', 'vids/Assassination Classroom/1.mp4', 0),
(31, 'Assassination Classroom Episode 2', 'Episode 2 of the series:Assassination Classroom', 'vids/Assassination Classroom/2.mp4', 0),
(32, 'Assassination Classroom Episode 3', 'Episode 3 of the series:Assassination Classroom', 'vids/Assassination Classroom/3.mp4', 0),
(33, 'Assassination Classroom Episode 4', 'Episode 4 of the series:Assassination Classroom', 'vids/Assassination Classroom/4.mp4', 0),
(34, 'Assassination Classroom Episode 5', 'Episode 5 of the series:Assassination Classroom', 'vids/Assassination Classroom/5.mp4', 0),
(35, 'Assassination Classroom Episode 6', 'Episode 6 of the series:Assassination Classroom', 'vids/Assassination Classroom/6.mp4', 0),
(36, 'Assassination Classroom Episode 7', 'Episode 7 of the series:Assassination Classroom', 'vids/Assassination Classroom/7.mp4', 0),
(37, 'Assassination Classroom Episode 8', 'Episode 8 of the series:Assassination Classroom', 'vids/Assassination Classroom/8.mp4', 0),
(38, 'Assassination Classroom Episode 9', 'Episode 9 of the series:Assassination Classroom', 'vids/Assassination Classroom/9.mp4', 0),
(39, 'Assassination Classroom Episode 10', 'Episode 10 of the series:Assassination Classroom', 'vids/Assassination Classroom/10.mp4', 0),
(40, 'Assassination Classroom Episode 11', 'Episode 11 of the series:Assassination Classroom', 'vids/Assassination Classroom/A11.mp4', 0),
(41, 'Assassination Classroom Episode 12', 'Episode 12 of the series:Assassination Classroom', 'vids/Assassination Classroom/A12.mp4', 0),
(42, 'Assassination Classroom Episode 13', 'Episode 13 of the series:Assassination Classroom', 'vids/Assassination Classroom/A13.mp4', 0),
(43, 'Assassination Classroom Episode 14', 'Episode 14 of the series:Assassination Classroom', 'vids/Assassination Classroom/A14.mp4', 0),
(44, 'Assassination Classroom Episode 15', 'Episode 15 of the series:Assassination Classroom', 'vids/Assassination Classroom/A15.mp4', 0),
(45, 'Assassination Classroom Episode 16', 'Episode 16 of the series:Assassination Classroom', 'vids/Assassination Classroom/A16.mp4', 0),
(46, 'Assassination Classroom Episode 17', 'Episode 17 of the series:Assassination Classroom', 'vids/Assassination Classroom/A17.mp4', 0),
(47, 'Assassination Classroom Episode 18', 'Episode 18 of the series:Assassination Classroom', 'vids/Assassination Classroom/A18.mp4', 0),
(48, 'Assassination Classroom Episode 19', 'Episode 19 of the series:Assassination Classroom', 'vids/Assassination Classroom/A19.mp4', 0),
(49, 'Assassination Classroom Episode 20', 'Episode 20 of the series:Assassination Classroom', 'vids/Assassination Classroom/A20.mp4', 0),
(50, 'Assassination Classroom Episode 21', 'Episode 21 of the series:Assassination Classroom', 'vids/Assassination Classroom/A21.mp4', 0),
(51, 'Assassination Classroom Episode 22', 'Episode 22 of the series:Assassination Classroom', 'vids/Assassination Classroom/A22.mp4', 0),
(52, 'Assassination Classroom Episode 23', 'Episode 23 of the series:Assassination Classroom', 'vids/Assassination Classroom/A23.mp4', 0),
(53, 'One Punch Man Episode 1', 'Episode 1 of the series:One Punch Man', 'vids/One Punch Man/1.mp4', 0),
(54, 'One Punch Man Episode 2', 'Episode 2 of the series:One Punch Man', 'vids/One Punch Man/2.mp4', 0),
(55, 'One Punch Man Episode 3', 'Episode 3 of the series:One Punch Man', 'vids/One Punch Man/3.mp4', 0),
(56, 'One Punch Man Episode 4', 'Episode 4 of the series:One Punch Man', 'vids/One Punch Man/4.mp4', 0),
(57, 'One Punch Man Episode 5', 'Episode 5 of the series:One Punch Man', 'vids/One Punch Man/5.mp4', 0),
(58, 'One Punch Man Episode 6', 'Episode 6 of the series:One Punch Man', 'vids/One Punch Man/6.mp4', 0),
(59, 'One Punch Man Episode 7', 'Episode 7 of the series:One Punch Man', 'vids/One Punch Man/7.mp4', 0),
(60, 'One Punch Man Episode 8', 'Episode 8 of the series:One Punch Man', 'vids/One Punch Man/8.mp4', 0),
(61, 'One Punch Man Episode 9', 'Episode 9 of the series:One Punch Man', 'vids/One Punch Man/9.mp4', 0),
(62, 'One Punch Man Episode 10', 'Episode 10 of the series:One Punch Man', 'vids/One Punch Man/A10.mp4', 0),
(63, 'One Punch Man Episode 11', 'Episode 11 of the series:One Punch Man', 'vids/One Punch Man/A11.mp4', 0),
(64, 'One Punch Man Episode 12', 'Episode 12 of the series:One Punch Man', 'vids/One Punch Man/A12.mp4', 0),
(65, 'Pinocchio Episode 1', 'Episode 1 of the series:Pinocchio', 'vids/Pinocchio/Episode 1.mp4', 1),
(66, 'Pinocchio Episode 2', 'Episode 2 of the series:Pinocchio', 'vids/Pinocchio/Episode 2.mp4', 1),
(67, 'Pinocchio Episode 3', 'Episode 3 of the series:Pinocchio', 'vids/Pinocchio/Episode 3.mp4', 1),
(68, 'Pinocchio Episode 4', 'Episode 4 of the series:Pinocchio', 'vids/Pinocchio/Episode 4.mp4', 1),
(69, 'Pinocchio Episode 5', 'Episode 5 of the series:Pinocchio', 'vids/Pinocchio/Episode 5.mp4', 1),
(70, 'Pinocchio Episode 6', 'Episode 6 of the series:Pinocchio', 'vids/Pinocchio/Episode 6.mp4', 1),
(71, 'Pinocchio Episode 7', 'Episode 7 of the series:Pinocchio', 'vids/Pinocchio/Episode 7.mp4', 1),
(72, 'Pinocchio Episode 8', 'Episode 8 of the series:Pinocchio', 'vids/Pinocchio/Episode 8.mp4', 1),
(73, 'Pinocchio Episode 9', 'Episode 9 of the series:Pinocchio', 'vids/Pinocchio/Episode 9.mp4', 1),
(74, 'Pinocchio Episode 10', 'Episode 10 of the series:Pinocchio', 'vids/Pinocchio/Episode 10.mp4', 1),
(75, 'Pinocchio Episode 11', 'Episode 11 of the series:Pinocchio', 'vids/Pinocchio/Episode 11.mp4', 1),
(76, 'Pinocchio Episode 12', 'Episode 12 of the series:Pinocchio', 'vids/Pinocchio/Episode 12.mp4', 1),
(77, 'Pinocchio Episode 13', 'Episode 13 of the series:Pinocchio', 'vids/Pinocchio/Episode 13.mp4', 1),
(78, 'Pinocchio Episode 14', 'Episode 14 of the series:Pinocchio', 'vids/Pinocchio/Episode 14.mp4', 1),
(79, 'Pinocchio Episode 15', 'Episode 15 of the series:Pinocchio', 'vids/Pinocchio/Episode 15.mp4', 1),
(80, 'Pinocchio Episode 16', 'Episode 16 of the series:Pinocchio', 'vids/Pinocchio/Episode 16.mp4', 1),
(81, 'Pinocchio Episode 17', 'Episode 17 of the series:Pinocchio', 'vids/Pinocchio/Episode 17.mp4', 1),
(82, 'Pinocchio Episode 18', 'Episode 18 of the series:Pinocchio', 'vids/Pinocchio/Episode 18.mp4', 1),
(83, 'Pinocchio Episode 19', 'Episode 19 of the series:Pinocchio', 'vids/Pinocchio/Episode 19.mp4', 1),
(84, 'Pinocchio Episode 20', 'Episode 20 of the series:Pinocchio', 'vids/Pinocchio/Episode 20.mp4', 1),
(85, 'White Album 2 Episode 1', 'Episode 1 of the series:White Album 2', 'vids/White Album 2/1.mp4', 1),
(86, 'White Album 2 Episode 2', 'Episode 2 of the series:White Album 2', 'vids/White Album 2/2.mp4', 1),
(87, 'White Album 2 Episode 3', 'Episode 3 of the series:White Album 2', 'vids/White Album 2/3.mp4', 1),
(88, 'White Album 2 Episode 4', 'Episode 4 of the series:White Album 2', 'vids/White Album 2/4.mp4', 1),
(89, 'White Album 2 Episode 5', 'Episode 5 of the series:White Album 2', 'vids/White Album 2/5.mp4', 1),
(90, 'White Album 2 Episode 6', 'Episode 6 of the series:White Album 2', 'vids/White Album 2/6.mp4', 1),
(91, 'White Album 2 Episode 7', 'Episode 7 of the series:White Album 2', 'vids/White Album 2/7.mp4', 1),
(92, 'White Album 2 Episode 8', 'Episode 8 of the series:White Album 2', 'vids/White Album 2/8.mp4', 1),
(93, 'White Album 2 Episode 9', 'Episode 9 of the series:White Album 2', 'vids/White Album 2/9.mp4', 1),
(94, 'White Album 2 Episode 10', 'Episode 10 of the series:White Album 2', 'vids/White Album 2/A10.mp4', 1),
(95, 'White Album 2 Episode 11', 'Episode 11 of the series:White Album 2', 'vids/White Album 2/A11.mp4', 1),
(96, 'White Album 2 Episode 12', 'Episode 12 of the series:White Album 2', 'vids/White Album 2/A12.mp4', 1),
(97, 'White Album 2 Episode 13', 'Episode 13 of the series:White Album 2', 'vids/White Album 2/A13.mp4', 1),
(143, 'She Was Pretty Episode 1', 'Episode 1 of the series:She Was Pretty', 'vids/She Was Pretty/01.mp4', 1),
(144, 'She Was Pretty Episode 2', 'Episode 2 of the series:She Was Pretty', 'vids/She Was Pretty/02.mp4', 1),
(145, 'She Was Pretty Episode 3', 'Episode 3 of the series:She Was Pretty', 'vids/She Was Pretty/04.mp4', 1),
(146, 'She Was Pretty Episode 4', 'Episode 4 of the series:She Was Pretty', 'vids/She Was Pretty/05.mp4', 1),
(147, 'She Was Pretty Episode 5', 'Episode 5 of the series:She Was Pretty', 'vids/She Was Pretty/06.mp4', 1),
(148, 'She Was Pretty Episode 6', 'Episode 6 of the series:She Was Pretty', 'vids/She Was Pretty/07.mp4', 1),
(149, 'She Was Pretty Episode 7', 'Episode 7 of the series:She Was Pretty', 'vids/She Was Pretty/08.mp4', 1),
(150, 'She Was Pretty Episode 8', 'Episode 8 of the series:She Was Pretty', 'vids/She Was Pretty/09.mp4', 1),
(151, 'She Was Pretty Episode 9', 'Episode 9 of the series:She Was Pretty', 'vids/She Was Pretty/10.mp4', 1),
(152, 'She Was Pretty Episode 10', 'Episode 10 of the series:She Was Pretty', 'vids/She Was Pretty/11.mp4', 1),
(153, 'She Was Pretty Episode 11', 'Episode 11 of the series:She Was Pretty', 'vids/She Was Pretty/12.mp4', 1),
(154, 'She Was Pretty Episode 12', 'Episode 12 of the series:She Was Pretty', 'vids/She Was Pretty/13.mp4', 1),
(155, 'She Was Pretty Episode 13', 'Episode 13 of the series:She Was Pretty', 'vids/She Was Pretty/14.mp4', 1),
(156, 'She Was Pretty Episode 14', 'Episode 14 of the series:She Was Pretty', 'vids/She Was Pretty/15.mp4', 1),
(157, 'She Was Pretty Episode 15', 'Episode 15 of the series:She Was Pretty', 'vids/She Was Pretty/16.mp4', 1),
(158, 'KHR Episode 1', 'Episode 1 of the series:KHR', 'vids/KHR/Episode 020.mp4', 1),
(159, 'KHR Episode 2', 'Episode 2 of the series:KHR', 'vids/KHR/Episode 021.mp4', 1),
(160, 'KHR Episode 3', 'Episode 3 of the series:KHR', 'vids/KHR/Episode 066.mp4', 1),
(161, 'KHR Episode 1', 'Episode 1 of the series:KHR', 'vids/KHR/Episode 020.mp4', 1),
(162, 'KHR Episode 2', 'Episode 2 of the series:KHR', 'vids/KHR/Episode 021.mp4', 1),
(163, 'KHR Episode 3', 'Episode 3 of the series:KHR', 'vids/KHR/Episode 066.mp4', 1),
(164, 'Kiseijuu sei no kakuritsu Episode 1', 'Episode 1 of the series:Kiseijuu sei no kakuritsu', 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_01.mp4', 0),
(165, 'Kiseijuu sei no kakuritsu Episode 2', 'Episode 2 of the series:Kiseijuu sei no kakuritsu', 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_02.mp4', 0),
(166, 'Kiseijuu sei no kakuritsu Episode 3', 'Episode 3 of the series:Kiseijuu sei no kakuritsu', 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_03.mp4', 0),
(167, 'Kiseijuu sei no kakuritsu Episode 4', 'Episode 4 of the series:Kiseijuu sei no kakuritsu', 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_04_2.mp4', 0),
(168, 'Kiseijuu sei no kakuritsu Episode 5', 'Episode 5 of the series:Kiseijuu sei no kakuritsu', 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_05.mp4', 0),
(169, 'Kiseijuu sei no kakuritsu Episode 6', 'Episode 6 of the series:Kiseijuu sei no kakuritsu', 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_06.mp4', 0),
(170, 'Kiseijuu sei no kakuritsu Episode 7', 'Episode 7 of the series:Kiseijuu sei no kakuritsu', 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_07.mp4', 0),
(171, 'Kiseijuu sei no kakuritsu Episode 8', 'Episode 8 of the series:Kiseijuu sei no kakuritsu', 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_08.mp4', 0),
(172, 'Kiseijuu sei no kakuritsu Episode 9', 'Episode 9 of the series:Kiseijuu sei no kakuritsu', 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_09.mp4', 0),
(173, 'Kiseijuu sei no kakuritsu Episode 10', 'Episode 10 of the series:Kiseijuu sei no kakuritsu', 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_10.mp4', 0),
(174, 'Kiseijuu sei no kakuritsu Episode 11', 'Episode 11 of the series:Kiseijuu sei no kakuritsu', 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_11.mp4', 0),
(175, 'Kiseijuu sei no kakuritsu Episode 12', 'Episode 12 of the series:Kiseijuu sei no kakuritsu', 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_12.mp4', 0),
(176, 'Kiseijuu sei no kakuritsu Episode 13', 'Episode 13 of the series:Kiseijuu sei no kakuritsu', 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_13_2.mp4', 0),
(177, 'Kiseijuu sei no kakuritsu Episode 14', 'Episode 14 of the series:Kiseijuu sei no kakuritsu', 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_14.mp4', 0),
(178, 'Kiseijuu sei no kakuritsu Episode 15', 'Episode 15 of the series:Kiseijuu sei no kakuritsu', 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_15.mp4', 0),
(179, 'Kiseijuu sei no kakuritsu Episode 16', 'Episode 16 of the series:Kiseijuu sei no kakuritsu', 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_16.mp4', 0),
(180, 'Kiseijuu sei no kakuritsu Episode 17', 'Episode 17 of the series:Kiseijuu sei no kakuritsu', 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_17.mp4', 0),
(181, 'Kiseijuu sei no kakuritsu Episode 18', 'Episode 18 of the series:Kiseijuu sei no kakuritsu', 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_18.mp4', 0),
(182, 'Kiseijuu sei no kakuritsu Episode 19', 'Episode 19 of the series:Kiseijuu sei no kakuritsu', 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_19.mp4', 0),
(183, 'Kiseijuu sei no kakuritsu Episode 20', 'Episode 20 of the series:Kiseijuu sei no kakuritsu', 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_20.mp4', 0),
(184, 'Kiseijuu sei no kakuritsu Episode 21', 'Episode 21 of the series:Kiseijuu sei no kakuritsu', 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_21.mp4', 0),
(185, 'Kiseijuu sei no kakuritsu Episode 22', 'Episode 22 of the series:Kiseijuu sei no kakuritsu', 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_22.mp4', 0),
(186, 'Kiseijuu sei no kakuritsu Episode 23', 'Episode 23 of the series:Kiseijuu sei no kakuritsu', 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_23.mp4', 0),
(187, 'Kiseijuu sei no kakuritsu Episode 24', 'Episode 24 of the series:Kiseijuu sei no kakuritsu', 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_24.mp4', 0),
(188, 'Magi Kingdom of Magic Episode 1', 'Episode 1 of the series:Magi Kingdom of Magic', 'vids/Magi Kingdom of Magic/Magi  The Kingdom Of Magic Episode 07 Sub - Watch Magi  The Kingdom Of Magic 7 Online   AnimeSeason.com.mp4', 0),
(189, 'Seven Deadly Sins Episode 1', 'Episode 1 of the series:Seven Deadly Sins', 'vids/Seven Deadly Sins/1.mp4', 0),
(190, 'Seven Deadly Sins Episode 2', 'Episode 2 of the series:Seven Deadly Sins', 'vids/Seven Deadly Sins/2.mp4', 0),
(191, 'Seven Deadly Sins Episode 3', 'Episode 3 of the series:Seven Deadly Sins', 'vids/Seven Deadly Sins/3.mp4', 0),
(192, 'Seven Deadly Sins Episode 4', 'Episode 4 of the series:Seven Deadly Sins', 'vids/Seven Deadly Sins/4.mp4', 0),
(193, 'Seven Deadly Sins Episode 5', 'Episode 5 of the series:Seven Deadly Sins', 'vids/Seven Deadly Sins/5.mp4', 0),
(194, 'Seven Deadly Sins Episode 6', 'Episode 6 of the series:Seven Deadly Sins', 'vids/Seven Deadly Sins/6.mp4', 0),
(195, 'Seven Deadly Sins Episode 7', 'Episode 7 of the series:Seven Deadly Sins', 'vids/Seven Deadly Sins/7.mp4', 0),
(196, 'Seven Deadly Sins Episode 8', 'Episode 8 of the series:Seven Deadly Sins', 'vids/Seven Deadly Sins/8.mp4', 0),
(197, 'Seven Deadly Sins Episode 9', 'Episode 9 of the series:Seven Deadly Sins', 'vids/Seven Deadly Sins/9.mp4', 0),
(198, 'Seven Deadly Sins Episode 10', 'Episode 10 of the series:Seven Deadly Sins', 'vids/Seven Deadly Sins/10.mp4', 0),
(199, 'Seven Deadly Sins Episode 11', 'Episode 11 of the series:Seven Deadly Sins', 'vids/Seven Deadly Sins/A11.mp4', 0),
(200, 'Seven Deadly Sins Episode 12', 'Episode 12 of the series:Seven Deadly Sins', 'vids/Seven Deadly Sins/A12.mp4', 0),
(201, 'Seven Deadly Sins Episode 13', 'Episode 13 of the series:Seven Deadly Sins', 'vids/Seven Deadly Sins/A13.mp4', 0),
(202, 'Seven Deadly Sins Episode 14', 'Episode 14 of the series:Seven Deadly Sins', 'vids/Seven Deadly Sins/A14.mp4', 0),
(203, 'Seven Deadly Sins Episode 15', 'Episode 15 of the series:Seven Deadly Sins', 'vids/Seven Deadly Sins/A15.mp4', 0),
(204, 'Seven Deadly Sins Episode 16', 'Episode 16 of the series:Seven Deadly Sins', 'vids/Seven Deadly Sins/A16.mp4', 0),
(205, 'Seven Deadly Sins Episode 17', 'Episode 17 of the series:Seven Deadly Sins', 'vids/Seven Deadly Sins/A17.mp4', 0),
(206, 'Seven Deadly Sins Episode 18', 'Episode 18 of the series:Seven Deadly Sins', 'vids/Seven Deadly Sins/A18.mp4', 0),
(207, 'Seven Deadly Sins Episode 19', 'Episode 19 of the series:Seven Deadly Sins', 'vids/Seven Deadly Sins/A19.mp4', 0),
(208, 'Seven Deadly Sins Episode 20', 'Episode 20 of the series:Seven Deadly Sins', 'vids/Seven Deadly Sins/A20.mp4', 0),
(209, 'Seven Deadly Sins Episode 21', 'Episode 21 of the series:Seven Deadly Sins', 'vids/Seven Deadly Sins/A21.mp4', 0),
(210, 'Seven Deadly Sins Episode 22', 'Episode 22 of the series:Seven Deadly Sins', 'vids/Seven Deadly Sins/A22.mp4', 0),
(211, 'Seven Deadly Sins Episode 23', 'Episode 23 of the series:Seven Deadly Sins', 'vids/Seven Deadly Sins/A23.mp4', 0),
(212, 'Seven Deadly Sins Episode 24', 'Episode 24 of the series:Seven Deadly Sins', 'vids/Seven Deadly Sins/A24.mp4', 0),
(213, 'Tokyo Ghoul S1 Episode 1', 'Episode 1 of the series:Tokyo Ghoul S1', 'vids/Tokyo Ghoul S1/episode 1.mp4', 0),
(214, 'Tokyo Ghoul S1 Episode 2', 'Episode 2 of the series:Tokyo Ghoul S1', 'vids/Tokyo Ghoul S1/episode 2.mp4', 0),
(215, 'Tokyo Ghoul S1 Episode 3', 'Episode 3 of the series:Tokyo Ghoul S1', 'vids/Tokyo Ghoul S1/episode 3.mp4', 0),
(216, 'Tokyo Ghoul S1 Episode 4', 'Episode 4 of the series:Tokyo Ghoul S1', 'vids/Tokyo Ghoul S1/episode 4.mp4', 0),
(217, 'Tokyo Ghoul S1 Episode 5', 'Episode 5 of the series:Tokyo Ghoul S1', 'vids/Tokyo Ghoul S1/episode 5.mp4', 0),
(218, 'Tokyo Ghoul S1 Episode 6', 'Episode 6 of the series:Tokyo Ghoul S1', 'vids/Tokyo Ghoul S1/episode 6.mp4', 0),
(219, 'Tokyo Ghoul S1 Episode 7', 'Episode 7 of the series:Tokyo Ghoul S1', 'vids/Tokyo Ghoul S1/episode 7.mp4', 0),
(220, 'Tokyo Ghoul S1 Episode 8', 'Episode 8 of the series:Tokyo Ghoul S1', 'vids/Tokyo Ghoul S1/episode 8.mp4', 0),
(221, 'Tokyo Ghoul S1 Episode 9', 'Episode 9 of the series:Tokyo Ghoul S1', 'vids/Tokyo Ghoul S1/episode 9.mp4', 0),
(222, 'Tokyo Ghoul S1 Episode 10', 'Episode 10 of the series:Tokyo Ghoul S1', 'vids/Tokyo Ghoul S1/episode A10.mp4', 0),
(223, 'Tokyo Ghoul S1 Episode 11', 'Episode 11 of the series:Tokyo Ghoul S1', 'vids/Tokyo Ghoul S1/episode A11.mp4', 0),
(224, 'Tokyo Ghoul S1 Episode 12', 'Episode 12 of the series:Tokyo Ghoul S1', 'vids/Tokyo Ghoul S1/episode A12.mp4', 0),
(225, 'Tokyo Ghoul S2 Episode 1', 'Episode 1 of the series:Tokyo Ghoul S2', 'vids/Tokyo Ghoul S2/TG s2 ep1.mp4', 0),
(226, 'Tokyo Ghoul S2 Episode 2', 'Episode 2 of the series:Tokyo Ghoul S2', 'vids/Tokyo Ghoul S2/TG s2 ep2.mp4', 0),
(227, 'Tokyo Ghoul S2 Episode 3', 'Episode 3 of the series:Tokyo Ghoul S2', 'vids/Tokyo Ghoul S2/TG s2 ep3.mp4', 0),
(228, 'Tokyo Ghoul S2 Episode 4', 'Episode 4 of the series:Tokyo Ghoul S2', 'vids/Tokyo Ghoul S2/TG s2 ep4.mp4', 0),
(229, 'Tokyo Ghoul S2 Episode 5', 'Episode 5 of the series:Tokyo Ghoul S2', 'vids/Tokyo Ghoul S2/TG s2 ep5.mp4', 0),
(230, 'Tokyo Ghoul S2 Episode 6', 'Episode 6 of the series:Tokyo Ghoul S2', 'vids/Tokyo Ghoul S2/TG s2 ep6.mp4', 0),
(231, 'Tokyo Ghoul S2 Episode 7', 'Episode 7 of the series:Tokyo Ghoul S2', 'vids/Tokyo Ghoul S2/TG s2 ep7.mp4', 0),
(232, 'Tokyo Ghoul S2 Episode 8', 'Episode 8 of the series:Tokyo Ghoul S2', 'vids/Tokyo Ghoul S2/TG s2 ep8.mp4', 0),
(233, 'Tokyo Ghoul S2 Episode 9', 'Episode 9 of the series:Tokyo Ghoul S2', 'vids/Tokyo Ghoul S2/TG s2 ep9.mp4', 0),
(234, 'Tokyo Ghoul S2 Episode 10', 'Episode 10 of the series:Tokyo Ghoul S2', 'vids/Tokyo Ghoul S2/TG s2 epA10.mp4', 0),
(235, 'Tokyo Ghoul S2 Episode 11', 'Episode 11 of the series:Tokyo Ghoul S2', 'vids/Tokyo Ghoul S2/TG s2 epA11.mp4', 0),
(236, 'Tokyo Ghoul S2 Episode 12', 'Episode 12 of the series:Tokyo Ghoul S2', 'vids/Tokyo Ghoul S2/TG s2 epA12.mp4', 0),
(248, 'Cheese in the Trap Episode 1', 'Episode 1 of the series:Cheese in the Trap', 'vids/Cheese in the Trap/Cheese in the Trap episode 1.mp4', 1),
(249, 'Cheese in the Trap Episode 2', 'Episode 2 of the series:Cheese in the Trap', 'vids/Cheese in the Trap/Cheese in the Trap episode 10.mp4', 1),
(250, 'Cheese in the Trap Episode 3', 'Episode 3 of the series:Cheese in the Trap', 'vids/Cheese in the Trap/Cheese in the Trap episode 11.mp4', 1),
(251, 'Cheese in the Trap Episode 4', 'Episode 4 of the series:Cheese in the Trap', 'vids/Cheese in the Trap/Cheese in the Trap episode 12.mp4', 1),
(252, 'Cheese in the Trap Episode 5', 'Episode 5 of the series:Cheese in the Trap', 'vids/Cheese in the Trap/Cheese in the Trap episode 13.mp4', 1),
(253, 'Cheese in the Trap Episode 6', 'Episode 6 of the series:Cheese in the Trap', 'vids/Cheese in the Trap/Cheese in the Trap episode 14.mp4', 1),
(254, 'Cheese in the Trap Episode 7', 'Episode 7 of the series:Cheese in the Trap', 'vids/Cheese in the Trap/Cheese in the Trap episode 15.mp4', 1),
(255, 'Cheese in the Trap Episode 8', 'Episode 8 of the series:Cheese in the Trap', 'vids/Cheese in the Trap/Cheese in the Trap episode 16.mp4', 1),
(256, 'Cheese in the Trap Episode 9', 'Episode 9 of the series:Cheese in the Trap', 'vids/Cheese in the Trap/Cheese in the Trap episode 2.mp4', 1),
(257, 'Cheese in the Trap Episode 10', 'Episode 10 of the series:Cheese in the Trap', 'vids/Cheese in the Trap/Cheese in the Trap episode 3.mp4', 1),
(258, 'Cheese in the Trap Episode 11', 'Episode 11 of the series:Cheese in the Trap', 'vids/Cheese in the Trap/Cheese in the Trap episode 4.mp4', 1),
(259, 'Cheese in the Trap Episode 12', 'Episode 12 of the series:Cheese in the Trap', 'vids/Cheese in the Trap/Cheese in the Trap episode 5.mp4', 1),
(260, 'Cheese in the Trap Episode 13', 'Episode 13 of the series:Cheese in the Trap', 'vids/Cheese in the Trap/Cheese in the Trap episode 6.mp4', 1),
(261, 'Cheese in the Trap Episode 14', 'Episode 14 of the series:Cheese in the Trap', 'vids/Cheese in the Trap/Cheese in the Trap episode 7.mp4', 1),
(262, 'Cheese in the Trap Episode 15', 'Episode 15 of the series:Cheese in the Trap', 'vids/Cheese in the Trap/Cheese in the Trap episode 8.mp4', 1),
(263, 'Cheese in the Trap Episode 16', 'Episode 16 of the series:Cheese in the Trap', 'vids/Cheese in the Trap/Cheese in the Trap episode 9.mp4', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forums`
--
ALTER TABLE `forums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`gameID`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`genreID`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`imageID`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `scores`
--
ALTER TABLE `scores`
  ADD PRIMARY KEY (`scoreID`);

--
-- Indexes for table `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`seriesID`);

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`tokenID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_student_number_unique` (`student_number`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`videoID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=227;
--
-- AUTO_INCREMENT for table `forums`
--
ALTER TABLE `forums`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `gameID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `genreID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `imageID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `scores`
--
ALTER TABLE `scores`
  MODIFY `scoreID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `series`
--
ALTER TABLE `series`
  MODIFY `seriesID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `tokenID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=210;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `videoID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=264;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
