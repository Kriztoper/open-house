-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2017 at 09:46 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

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
-- Table structure for table `gamegenres`
--

CREATE TABLE `gamegenres` (
  `gameGenresID` int(10) UNSIGNED NOT NULL,
  `gameID` int(11) NOT NULL,
  `genreID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gamegenres`
--

INSERT INTO `gamegenres` (`gameGenresID`, `gameID`, `genreID`) VALUES
(1, 1, 4),
(2, 2, 4),
(3, 3, 5),
(4, 4, 2),
(5, 4, 4),
(6, 5, 5),
(7, 7, 4),
(8, 10, 5),
(9, 13, 5),
(10, 14, 4),
(11, 16, 5),
(12, 17, 4),
(13, 19, 4),
(14, 20, 5),
(15, 22, 5),
(17, 24, 5),
(18, 25, 5),
(19, 26, 4),
(20, 27, 4),
(21, 28, 5),
(22, 29, 4),
(24, 29, 5),
(25, 31, 4),
(26, 32, 4),
(27, 15, 2),
(28, 15, 6),
(30, 6, 6),
(33, 9, 2),
(34, 9, 6),
(35, 11, 2),
(36, 11, 6),
(37, 12, 2),
(38, 12, 6),
(39, 21, 2),
(40, 21, 5),
(45, 33, 5),
(47, 35, 5),
(48, 36, 4),
(49, 37, 5),
(51, 39, 5),
(52, 40, 4),
(53, 41, 5),
(54, 42, 4),
(55, 43, 5),
(56, 44, 4),
(57, 45, 5),
(58, 48, 4),
(59, 49, 5),
(60, 50, 4),
(61, 51, 4),
(62, 53, 5);

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
(6, 'chainReaction', 'chain', 0, 'games/chainReaction/chainReaction.jar', 'images/Games/chainReaction.png', 'images/Featured Games/chainReaction.png', 'game.ChainReaction.class', 1, 800, 600),
(7, 'combat_tournament_legends', '', 0, 'games/combat_tournament_legends/combat_tournament_legends.swf', 'images/Games/combatTournament.png', 'images/Featured Games/.png', 'NONE', 0, 800, 600),
(9, 'Coraline', '', 0, 'games/Coraline/coraline.jar', 'images/Games/coraline.png', 'images/Featured Games/coralineQuest.png', 'controller.GameFrame.class', 1, 850, 600),
(10, 'detonate2', '', 0, 'games/detonate2/detonate2.swf', 'images/Games/detonate2.png', 'images/Featured Games/Feature2.png', 'NONE', 0, 450, 550),
(11, 'Domineering', '', 0, 'games/Domineering/domineering.jar', 'images/Games/domineering.png', 'images/Featured Games/domineering.png', 'main.Main.class', 1, 1000, 700),
(12, 'DotsTrix', '', 0, 'games/DotsTrix/dotsTrix.jar', 'images/Games/dotsTrix.png', 'images/Featured Games/DotsTrix.png', 'model.GameFrame.class', 1, 565, 650),
(13, 'fireboy_and_watergirl_2', '', 0, 'games/fireboy_and_watergirl_2/fireboy_and_watergirl_2.swf', 'images/Games/fireboyWatergirl2.png', 'images/Featured Games/fireboy&watergirl2.png', 'NONE', 0, 800, 600),
(14, 'football_legends_2016', '', 0, 'games/football_legends_2016/football_legends_2016.swf', 'images/Games/football.png', 'images/Featured Games/.png', 'NONE', 0, 800, 450),
(15, 'fourSquare', '', 0, 'games/fourSquare/fourSquare.jar', 'images/Games/4square.png', 'images/Featured Games/4Square.png', 'Main.FourSquare.class', 1, 714, 714),
(16, 'governor_of_poker', '', 0, 'games/governor_of_poker/governor_of_poker.swf', 'images/Games/governorOfPoker.png', 'images/Featured Games/.png', 'NONE', 0, 800, 600),
(17, 'gun_mayhem', '', 0, 'games/gun_mayhem/gun_mayhem.swf', 'images/Games/gunMayhem.png', 'images/Featured Games/.png', 'NONE', 0, 800, 600),
(19, 'king_of_fighters_wing_1.8', '', 0, 'games/king_of_fighters_wing_1.8/kof-wing-1.8-2.swf', 'images/Games/theKingOfFighter.png', 'images/Featured Games/.png', 'NONE', 0, 800, 600),
(21, 'mancala', '', 0, 'games/mancala/Mancala.jar', 'images/Games/mancala.png', 'images/Featured Games/mancala.png', 'mp03v7.MancalaTestClass', 1, 1100, 700),
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
-- Table structure for table `gametime`
--

CREATE TABLE `gametime` (
  `studentNumber` int(11) NOT NULL,
  `timeStart` int(11) NOT NULL,
  `timeOut` int(11) NOT NULL,
  `totalTime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gametime`
--

INSERT INTO `gametime` (`studentNumber`, `timeStart`, `timeOut`, `totalTime`) VALUES
(201354044, 0, 0, 14),
(201467074, 1508299794, 0, 21);

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
('2016_11_14_015436_add_column_to_users', 3);

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
(6, 'White Album 2', 'Winter "Romance" story', 'White Album 2', 'White Album 2 950'),
(7, '#Reply 1997', 'Korean reply', 'Reply 1997', 'Reply 1997 950'),
(8, 'She Was Pretty', 'Beautiful Korean', 'She Was Pretty', 'She Was Pretty 950'),
(9, 'KHR', 'The manga is about a young boy, Tsunayoshi Sawada, who discovers that he is next in line to become boss of the Vongola family, a powerful Mafia organization. The Vongolas'' most powerful hitman, a gun-toting infant named Reborn, is sent to teach Tsuna how ', 'khr 250x250', 'khr 250x250 950'),
(10, 'KHR', 'Reborn!, known in Japan as Katekyō Hitman Reborn! (Japanese: 家庭教師ヒットマンリボーン! Hepburn: Katekyō Hittoman Ribōn!?, Katekyō, a portmanteau of Katei Kyōshi, means "home tutor"), is a Japanese manga written and illustrated by Akira Amano. The manga is about a yo', 'khr', 'khr 950'),
(11, 'Kiseijuu sei no kakuritsu', 'Parasyte (Japanese: 寄生獣 Hepburn: Kiseijū?, lit. "Parasitic Beasts") is a science fiction horror manga series written and illustrated by Hitoshi Iwaaki, and published in Kodansha''s Afternoon magazine from 1988 to 1995. The manga was published in North Amer', 'parasyte', 'parasyte 950'),
(12, 'Magi Kingdom of Magic', 'Magi: The Labyrinth of Magic (Japanese: マギ Hepburn: Magi?) is a Japanese fantasy action adventure manga series written and illustrated by Shinobu Ohtaka. It has been serialized in Weekly Shōnen Sunday since June 2009, with the individual chapters collecte', 'magi', 'magi 950'),
(13, 'Seven Deadly Sins', 'The Seven Deadly Sins (Japanese: 七つの大罪 Hepburn: Nanatsu no Taizai?) is a Japanese fantasy manga series written and illustrated by Nakaba Suzuki. It has been serialized in Kodansha''s Weekly Shōnen Magazine since October 2012, with the chapters collected in', '7 deadly sins', '7 deadly sins 950'),
(14, 'Tokyo Ghoul S1', 'Tokyo Ghoul is an anime television series by Studio Pierrot aired on Tokyo MX between July and September 2014 with a second season titled Tokyo Ghoul √A that aired January 8, 2015, to March 26, 2015. Studio Pierrot also did an OVA for Tokyo Ghoul: JACK al', 'tokyo ghoul', 'tokyo ghoul 950'),
(15, 'Tokyo Ghoul S2', 'Tokyo Ghoul is an anime television series by Studio Pierrot aired on Tokyo MX between July and September 2014 with a second season titled Tokyo Ghoul √A that aired January 8, 2015, to March 26, 2015. Studio Pierrot also did an OVA for Tokyo Ghoul: JACK al', 'tokyo ghoulS2', 'tokyo ghoulS2 950'),
(17, 'Good Doctor', 'Doctor story huhu', 'gooddoctor', 'gooddoctor 950'),
(18, 'Cheese in the Trap', 'depicts the delicate relationship between female university student Hong Seol (Kim Go-Eun) and her senior Yoo Jung (Park Hae-Jin). Hong-Seol works part-time due to her family''s poor background. Yoo Jung is good looking, gets good grades, athletic and has ', 'Cheese In The Trap', 'Cheese In The Trap 950');

-- --------------------------------------------------------

--
-- Table structure for table `seriesgenres`
--

CREATE TABLE `seriesgenres` (
  `seriesGenresID` int(10) UNSIGNED NOT NULL,
  `videoID` int(11) NOT NULL,
  `genreID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `seriesgenres`
--

INSERT INTO `seriesgenres` (`seriesGenresID`, `videoID`, `genreID`) VALUES
(1, 2, 1),
(2, 2, 2),
(4, 3, 1),
(5, 3, 2),
(6, 4, 1),
(7, 4, 2),
(8, 5, 2),
(9, 5, 3),
(10, 6, 1),
(11, 6, 2),
(12, 8, 2),
(13, 8, 3),
(14, 7, 3),
(17, 11, 1),
(19, 14, 1),
(20, 14, 2),
(21, 15, 1),
(22, 13, 1),
(24, 17, 3),
(25, 18, 3);

-- --------------------------------------------------------

--
-- Table structure for table `seriesvideo`
--

CREATE TABLE `seriesvideo` (
  `seriesVideoID` int(10) UNSIGNED NOT NULL,
  `seriesID` int(11) NOT NULL,
  `videoID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `seriesvideo`
--

INSERT INTO `seriesvideo` (`seriesVideoID`, `seriesID`, `videoID`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 1, 7),
(8, 1, 8),
(9, 1, 9),
(10, 1, 10),
(11, 1, 11),
(12, 1, 12),
(13, 1, 13),
(14, 1, 14),
(15, 1, 15),
(16, 1, 16),
(17, 1, 17),
(18, 2, 18),
(19, 2, 19),
(20, 2, 20),
(21, 2, 21),
(22, 2, 22),
(23, 2, 23),
(24, 2, 24),
(25, 2, 25),
(26, 2, 26),
(27, 2, 27),
(28, 2, 28),
(29, 2, 29),
(30, 3, 30),
(31, 3, 31),
(32, 3, 32),
(33, 3, 33),
(34, 3, 34),
(35, 3, 35),
(36, 3, 36),
(37, 3, 37),
(38, 3, 38),
(39, 3, 39),
(40, 3, 40),
(41, 3, 41),
(42, 3, 42),
(43, 3, 43),
(44, 3, 44),
(45, 3, 45),
(46, 3, 46),
(47, 3, 47),
(48, 3, 48),
(49, 3, 49),
(50, 3, 50),
(51, 3, 51),
(52, 3, 52),
(53, 4, 53),
(54, 4, 54),
(55, 4, 55),
(56, 4, 56),
(57, 4, 57),
(58, 4, 58),
(59, 4, 59),
(60, 4, 60),
(61, 4, 61),
(62, 4, 62),
(63, 4, 63),
(64, 4, 64),
(65, 5, 65),
(66, 5, 66),
(67, 5, 67),
(68, 5, 68),
(69, 5, 69),
(70, 5, 70),
(71, 5, 71),
(72, 5, 72),
(73, 5, 73),
(74, 5, 74),
(75, 5, 75),
(76, 5, 76),
(77, 5, 77),
(78, 5, 78),
(79, 5, 79),
(80, 5, 80),
(81, 5, 81),
(82, 5, 82),
(83, 5, 83),
(84, 5, 84),
(85, 6, 85),
(86, 6, 86),
(87, 6, 87),
(88, 6, 88),
(89, 6, 89),
(90, 6, 90),
(91, 6, 91),
(92, 6, 92),
(93, 6, 93),
(94, 6, 94),
(95, 6, 95),
(96, 6, 96),
(97, 6, 97),
(98, 7, 98),
(99, 7, 99),
(100, 7, 100),
(101, 7, 101),
(102, 7, 102),
(103, 7, 103),
(104, 7, 104),
(105, 7, 105),
(106, 7, 106),
(107, 7, 107),
(108, 7, 108),
(109, 7, 109),
(110, 7, 110),
(111, 7, 111),
(112, 7, 112),
(113, 7, 113),
(114, 7, 114),
(115, 7, 115),
(116, 7, 116),
(117, 7, 117),
(118, 7, 118),
(119, 7, 119),
(120, 7, 120),
(121, 7, 121),
(122, 7, 122),
(123, 7, 123),
(124, 7, 124),
(125, 7, 125),
(126, 7, 126),
(127, 7, 127),
(128, 7, 128),
(129, 7, 129),
(130, 7, 130),
(131, 7, 131),
(132, 7, 132),
(133, 7, 133),
(134, 7, 134),
(135, 7, 135),
(136, 7, 136),
(137, 7, 137),
(138, 7, 138),
(139, 7, 139),
(140, 7, 140),
(141, 7, 141),
(142, 7, 142),
(143, 8, 143),
(144, 8, 144),
(145, 8, 145),
(146, 8, 146),
(147, 8, 147),
(148, 8, 148),
(149, 8, 149),
(150, 8, 150),
(151, 8, 151),
(152, 8, 152),
(153, 8, 153),
(154, 8, 154),
(155, 8, 155),
(156, 8, 156),
(157, 8, 157),
(158, 9, 158),
(159, 9, 159),
(160, 9, 160),
(161, 10, 161),
(162, 10, 162),
(163, 10, 163),
(164, 11, 164),
(165, 11, 165),
(166, 11, 166),
(167, 11, 167),
(168, 11, 168),
(169, 11, 169),
(170, 11, 170),
(171, 11, 171),
(172, 11, 172),
(173, 11, 173),
(174, 11, 174),
(175, 11, 175),
(176, 11, 176),
(177, 11, 177),
(178, 11, 178),
(179, 11, 179),
(180, 11, 180),
(181, 11, 181),
(182, 11, 182),
(183, 11, 183),
(184, 11, 184),
(185, 11, 185),
(186, 11, 186),
(187, 11, 187),
(188, 12, 188),
(189, 13, 189),
(190, 13, 190),
(191, 13, 191),
(192, 13, 192),
(193, 13, 193),
(194, 13, 194),
(195, 13, 195),
(196, 13, 196),
(197, 13, 197),
(198, 13, 198),
(199, 13, 199),
(200, 13, 200),
(201, 13, 201),
(202, 13, 202),
(203, 13, 203),
(204, 13, 204),
(205, 13, 205),
(206, 13, 206),
(207, 13, 207),
(208, 13, 208),
(209, 13, 209),
(210, 13, 210),
(211, 13, 211),
(212, 13, 212),
(213, 14, 213),
(214, 14, 214),
(215, 14, 215),
(216, 14, 216),
(217, 14, 217),
(218, 14, 218),
(219, 14, 219),
(220, 14, 220),
(221, 14, 221),
(222, 14, 222),
(223, 14, 223),
(224, 14, 224),
(225, 15, 225),
(226, 15, 226),
(227, 15, 227),
(228, 15, 228),
(229, 15, 229),
(230, 15, 230),
(231, 15, 231),
(232, 15, 232),
(233, 15, 233),
(234, 15, 234),
(235, 15, 235),
(236, 15, 236),
(237, 17, 237),
(238, 17, 238),
(239, 17, 239),
(240, 17, 240),
(241, 17, 241),
(242, 17, 242),
(243, 17, 243),
(244, 17, 244),
(245, 17, 245),
(246, 17, 246),
(247, 17, 247),
(248, 18, 248),
(249, 18, 249),
(250, 18, 250),
(251, 18, 251),
(252, 18, 252),
(253, 18, 253),
(254, 18, 254),
(255, 18, 255),
(256, 18, 256),
(257, 18, 257),
(258, 18, 258),
(259, 18, 259),
(260, 18, 260),
(261, 18, 261),
(262, 18, 262),
(263, 18, 263);

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
(48, 1, 'LVd2yJsc', 20),
(49, 1, '18QU9J2o', 20),
(50, 1, 'bpyMY2Ct', 20),
(51, 1, 'vgnYULkC', 20),
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
(64, 1, 'LVd2yJsc', 20),
(65, 1, '18QU9J2o', 20),
(66, 1, 'bpyMY2Ct', 20),
(67, 1, 'vgnYULkC', 20),
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
(116, 1, 'GJROMI5e', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usergames`
--

CREATE TABLE `usergames` (
  `userID` int(11) NOT NULL,
  `gameID` int(11) NOT NULL,
  `numOfHours` double(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `usergames`
--

INSERT INTO `usergames` (`userID`, `gameID`, `numOfHours`) VALUES
(201247036, 3, 0.00),
(201247036, 5, 0.00),
(201247036, 25, 0.00),
(201247036, 2, 0.00),
(201339978, 2, 0.00),
(201339978, 3, 0.00),
(201352703, 2, 0.00),
(201352703, 3, 0.00),
(201352703, 29, 0.00),
(201352703, 5, 0.00),
(201352703, 20, 0.00),
(201339978, 30, 0.00),
(201352703, 23, 0.00),
(201352703, 32, 0.00),
(201352703, 30, 0.00),
(201352703, 11, 0.00),
(201352703, 9, 0.00),
(201338192, 29, 0.00),
(201338192, 33, 0.00),
(201338192, 20, 0.00),
(201338192, 11, 0.00),
(201338192, 32, 0.00),
(201352706, 9, 0.00),
(201352706, 18, 0.00),
(201338192, 4, 0.00),
(201338192, 18, 0.00),
(201338978, 10, 0.00),
(201338978, 1, 0.00),
(201338978, 18, 0.00),
(201338978, 4, 0.00),
(201352703, 6, 0.00),
(201352703, 8, 0.00),
(201352703, 12, 0.00),
(201352703, 18, 0.00),
(201338192, 8, 0.00),
(201352706, 8, 0.00),
(201338192, 34, 0.00),
(201352703, 34, 0.00),
(201338192, 36, 0.00),
(201352703, 36, 0.00),
(201338192, 35, 0.00),
(201338192, 37, 0.00),
(201334613, 4, 0.00),
(201343275, 35, 0.00),
(201338978, 30, 0.00),
(201208532, 4, 0.00),
(201480161, 21, 0.00),
(20174513, 9, 0.00),
(201512233, 9, 0.00),
(201243900, 1, 0.00),
(201754513, 11, 0.00),
(201208532, 15, 0.00),
(201754513, 15, 0.00),
(201464813, 11, 0.00),
(201754513, 12, 0.00),
(201464813, 21, 0.00),
(201208532, 16, 0.00),
(201464813, 4, 0.00),
(201754513, 21, 0.00),
(201424468, 4, 0.00),
(201339978, 14, 0.00),
(201366209, 12, 0.00),
(201366209, 11, 0.00),
(201352792, 31, 0.00),
(201344633, 1, 0.00),
(201481022, 22, 0.00),
(201366209, 9, 0.00),
(201366209, 2, 0.00),
(201339978, 45, 0.00),
(201481022, 30, 0.00),
(201481022, 31, 0.00),
(201481022, 40, 0.00),
(201424468, 1, 0.00),
(201352792, 30, 0.00),
(201354085, 19, 0.00),
(201344633, 27, 0.00),
(201352792, 17, 0.00),
(201345789, 27, 0.00),
(201341300, 38, 0.00),
(201354111, 33, 0.00),
(201354111, 37, 0.00),
(201369904, 9, 0.00),
(201354085, 38, 0.00),
(201352792, 36, 0.00),
(201345789, 30, 0.00),
(201354111, 35, 0.00),
(201369904, 4, 0.00),
(201339978, 36, 0.00),
(201345789, 16, 0.00),
(201339978, 26, 0.00),
(201344633, 19, 0.00),
(201367501, 10, 0.00),
(201506397, 2, 0.00),
(201367501, 1, 0.00),
(201504320, 1, 0.00),
(201510777, 15, 0.00),
(201367501, 2, 0.00),
(201512658, 30, 0.00),
(201367501, 4, 0.00),
(201512658, 15, 0.00),
(201506397, 30, 0.00),
(201512658, 9, 0.00),
(201506397, 48, 0.00),
(201506397, 19, 0.00),
(201512658, 19, 0.00),
(201354080, 9, 0.00),
(201334613, 3, 0.00),
(201354080, 31, 0.00),
(201369687, 12, 0.00),
(201369687, 9, 0.00),
(201352618, 14, 0.00),
(201334613, 2, 0.00),
(201338978, 40, 0.00),
(201338978, 42, 0.00),
(201362775, 11, 0.00),
(201481022, 28, 0.00),
(201352618, 36, 0.00),
(201352618, 31, 0.00),
(201481022, 19, 0.00),
(201354080, 2, 0.00),
(201481022, 17, 0.00),
(201334613, 1, 0.00),
(201481022, 39, 0.00),
(201354080, 4, 0.00),
(201352618, 53, 0.00),
(201366209, 38, 0.00),
(201366209, 40, 0.00),
(201334612, 32, 0.00),
(201334612, 31, 0.00),
(201352797, 31, 0.00),
(201351835, 31, 0.00),
(201356789, 4, 0.00),
(201512243, 9, 0.00),
(201504676, 30, 0.00),
(201512243, 30, 0.00),
(201512243, 19, 0.00),
(201504676, 31, 0.00),
(201504676, 53, 0.00),
(201351835, 50, 0.00),
(201504676, 13, 0.00),
(201352797, 32, 0.00),
(201351835, 11, 0.00),
(201503335, 15, 0.00),
(201351835, 37, 0.00),
(201504676, 1, 0.00),
(201512243, 4, 0.00),
(201343294, 1, 0.00),
(201356789, 41, 0.00),
(201353482, 9, 0.00),
(201356789, 16, 0.00),
(201353482, 11, 0.00),
(201334851, 32, 0.00),
(201334851, 11, 0.00),
(201353482, 12, 0.00),
(201356789, 48, 0.00),
(201338192, 42, 0.00),
(201338192, 30, 0.00),
(201338192, 38, 0.00),
(20131111, 13, 0.00),
(20131111, 19, 0.00),
(201481026, 4, 0.00),
(201475355, 32, 0.00),
(201473648, 2, 0.00),
(201475355, 4, 0.00),
(201481026, 2, 0.00),
(201254887, 17, 0.00),
(201473648, 3, 0.00),
(201481026, 27, 0.00),
(201473648, 50, 0.00),
(201481026, 17, 0.00),
(201362055, 33, 0.00),
(201254887, 1, 0.00),
(201362055, 51, 0.00),
(201362055, 51, 0.00),
(20131111, 4, 0.00),
(201362775, 24, 0.00),
(201334453, 4, 0.00),
(201362775, 15, 0.00),
(201334453, 15, 0.00),
(201233333, 33, 0.00),
(201233333, 30, 0.00),
(201233333, 38, 0.00),
(201233333, 32, 0.00),
(201233333, 14, 0.00),
(201233333, 17, 0.00),
(201338192, 39, 0.00),
(201338192, 24, 0.00),
(201233333, 28, 0.00),
(201233333, 7, 0.00),
(201353034, 27, 0.00),
(201338192, 27, 0.00),
(201353034, 53, 0.00),
(201339978, 27, 0.00),
(201233333, 40, 0.00),
(201353034, 43, 0.00),
(201233333, 48, 0.00),
(201233333, 16, 0.00),
(201362775, 16, 0.00),
(201338192, 21, 0.00),
(201339978, 33, 0.00),
(201352618, 49, 0.00),
(201362775, 26, 0.00),
(201233333, 5, 0.00),
(201233333, 49, 0.00),
(201233333, 53, 0.00),
(201352618, 16, 0.00),
(201362775, 28, 0.00),
(201511645, 50, 0.00),
(201362775, 5, 0.00),
(201362775, 31, 0.00),
(201464319, 4, 0.00),
(201511645, 11, 0.00),
(201338192, 28, 0.00),
(201511645, 3, 0.00),
(201338192, 31, 0.00),
(201511645, 1, 0.00),
(201481823, 15, 0.00),
(201362775, 45, 0.00),
(201481823, 9, 0.00),
(201338339, 7, 0.00),
(201362775, 44, 0.00),
(201352618, 32, 0.00),
(201352618, 4, 0.00),
(201503335, 40, 0.00),
(201352618, 37, 0.00),
(201503617, 33, 0.00),
(201352618, 3, 0.00),
(201503617, 40, 0.00),
(201352618, 19, 0.00),
(201503617, 4, 0.00),
(201338192, 1, 0.00),
(201352618, 33, 0.00),
(201506761, 11, 0.00),
(201503335, 12, 0.00),
(201503335, 37, 0.00),
(201352618, 17, 0.00),
(201473618, 37, 0.00),
(201338192, 3, 0.00),
(201717344, 6, 0.00),
(201717344, 35, 0.00),
(201717344, 42, 0.00),
(201717344, 28, 0.00),
(201506761, 6, 0.00),
(201506761, 51, 0.00),
(201857539, 53, 0.00),
(201857539, 14, 0.00),
(2011233, 17, 0.00),
(201503609, 35, 0.00),
(201338192, 19, 0.00),
(201352797, 17, 0.00),
(201352618, 5, 0.00),
(201464319, 11, 0.00),
(201503609, 42, 0.00),
(201503609, 32, 0.00),
(201464319, 13, 0.00),
(201503609, 25, 0.00),
(201503617, 32, 0.00),
(201481810, 21, 0.00),
(201481810, 26, 0.00),
(2011233, 11, 0.00),
(201338192, 26, 0.00),
(201481810, 32, 0.00),
(201476512, 6, 0.00),
(201481810, 6, 0.00),
(201857539, 49, 0.00),
(201857539, 48, 0.00),
(201352618, 40, 0.00),
(201469019, 24, 0.00),
(201338192, 2, 0.00),
(201338192, 14, 0.00),
(201473650, 21, 0.00),
(201473650, 4, 0.00),
(201473650, 15, 0.00),
(201473650, 9, 0.00),
(201339978, 1, 0.00),
(201269829, 9, 0.00),
(201269829, 1, 0.00),
(201506461, 4, 0.00),
(201334952, 4, 0.00),
(201506461, 3, 0.00),
(201334952, 15, 0.00),
(201338016, 37, 0.00),
(201352703, 37, 0.00),
(201269829, 36, 0.00),
(201269829, 31, 0.00),
(201338016, 32, 0.00),
(201344596, 25, 0.00),
(201344596, 27, 0.00),
(201504320, 9, 0.00),
(201504320, 50, 0.00),
(201506849, 14, 0.00),
(201504320, 4, 0.00),
(201364563, 9, 0.00),
(201364563, 11, 0.00),
(201364563, 21, 0.00),
(201352703, 4, 0.00),
(201354107, 6, 0.00),
(201354107, 12, 0.00),
(201354107, 1, 0.00),
(201352703, 33, 0.00),
(201352703, 16, 0.00),
(201354107, 15, 0.00),
(201338016, 16, 0.00),
(201352703, 19, 0.00),
(201338192, 48, 0.00),
(201338016, 25, 0.00),
(201352703, 40, 0.00),
(201398868, 1, 0.00),
(201480304, 27, 0.00),
(201398868, 4, 0.00),
(201239436, 12, 0.00),
(201239436, 11, 0.00),
(201353025, 11, 0.00),
(201239436, 4, 0.00),
(201239436, 15, 0.00),
(201553009, 32, 0.00),
(201553009, 7, 0.00),
(201553009, 28, 0.00),
(201473639, 1, 0.00),
(201553009, 4, 0.00),
(201473639, 6, 0.00),
(201473639, 4, 0.00),
(201418531, 42, 0.00),
(201418531, 36, 0.00),
(201418531, 1, 0.00),
(201418531, 7, 0.00),
(123, 6, 0.00),
(123, 27, 0.00),
(123, 5, 0.00),
(201511362, 17, 0.00),
(123, 17, 0.00),
(201312345, 44, 0.00),
(201429434, 1, 0.00),
(201312345, 4, 0.00),
(201512951, 19, 0.00),
(201429434, 26, 0.00),
(201353025, 4, 0.00),
(201234437, 7, 0.00),
(201429434, 32, 0.00),
(201233333, 19, 0.00),
(201367501, 16, 0.00),
(201429434, 24, 0.00),
(201869486, 1, 0.00),
(201233333, 11, 0.00),
(201234437, 4, 0.00),
(201367501, 5, 0.00),
(201234437, 1, 0.00),
(201367501, 31, 0.00),
(201233333, 15, 0.00),
(201233333, 6, 0.00),
(201456789, 19, 0.00),
(201233333, 1, 0.00),
(201466666, 7, 0.00),
(201312345, 15, 0.00),
(201312345, 33, 0.00),
(201312345, 9, 0.00),
(201312345, 17, 0.00),
(201466666, 6, 0.00),
(201466666, 36, 0.00),
(201103229, 21, 0.00),
(201103229, 4, 0.00),
(201103229, 15, 0.00),
(201103229, 9, 0.00),
(201353025, 9, 0.00),
(201124779, 12, 0.00),
(201353025, 27, 0.00),
(201506724, 4, 0.00),
(201506724, 11, 0.00),
(201466666, 15, 0.00),
(201366209, 36, 0.00),
(201352618, 51, 0.00),
(201353034, 3, 0.00),
(201144347, 4, 0.00),
(201362775, 4, 0.00),
(201353034, 50, 0.00),
(201353034, 17, 0.00),
(201833222, 26, 0.00),
(201833222, 40, 0.00),
(201833222, 17, 0.00),
(201833222, 15, 0.00),
(201362055, 4, 0.00),
(222311111, 4, 0.00),
(201144347, 6, 0.00),
(201244347, 40, 0.00),
(201481814, 11, 0.00),
(201481814, 9, 0.00),
(201481814, 12, 0.00),
(201481814, 15, 0.00),
(201244347, 48, 0.00),
(222311111, 2, 0.00),
(222311111, 7, 0.00),
(201469019, 17, 0.00),
(201352797, 13, 0.00),
(201352797, 7, 0.00),
(201367501, 36, 0.00),
(201367501, 40, 0.00),
(201345107, 15, 0.00),
(201367501, 26, 0.00),
(201464319, 31, 0.00),
(201345107, 9, 0.00),
(201257492, 15, 0.00),
(201257492, 12, 0.00),
(201257492, 33, 0.00),
(201257492, 2, 0.00),
(201345107, 11, 0.00),
(201344349, 4, 0.00),
(201344349, 31, 0.00),
(201437650, 21, 0.00),
(201458585, 32, 0.00),
(201458585, 27, 0.00),
(200812345, 36, 0.00),
(201367501, 50, 0.00),
(201458585, 15, 0.00),
(201437650, 5, 0.00),
(201367501, 42, 0.00),
(201437650, 50, 0.00),
(201399999, 49, 0.00),
(201437650, 24, 0.00),
(201367501, 7, 0.00),
(201399999, 11, 0.00),
(201399999, 7, 0.00),
(201473627, 4, 0.00),
(201367501, 14, 0.00),
(201473627, 9, 0.00),
(201473627, 21, 0.00),
(201473627, 36, 0.00),
(201473620, 4, 0.00),
(201367501, 44, 0.00),
(201367501, 41, 0.00),
(201367501, 37, 0.00),
(201469019, 10, 0.00),
(201367501, 49, 0.00),
(201367501, 45, 0.00),
(201367501, 24, 0.00),
(201506464, 4, 0.00),
(201334952, 9, 0.00),
(201334952, 11, 0.00),
(201506464, 5, 0.00),
(201352618, 7, 0.00),
(201506464, 2, 0.00),
(201506464, 27, 0.00),
(2147483647, 9, 0.00),
(201338192, 25, 0.00),
(201338192, 5, 0.00),
(201481022, 7, 0.00),
(201481022, 50, 0.00),
(210241244, 26, 0.00),
(201421342, 19, 0.00),
(201421342, 3, 0.00),
(201421342, 14, 0.00),
(201421342, 45, 0.00),
(201353034, 19, 0.00),
(201353034, 1, 0.00),
(201464319, 50, 0.00),
(201464319, 42, 0.00),
(201464319, 9, 0.00),
(201464319, 49, 0.00),
(201469019, 48, 0.00),
(201504562, 17, 0.00),
(201511348, 4, 0.00),
(201504604, 31, 0.00),
(201511348, 19, 0.00),
(201511348, 24, 0.00),
(201506376, 9, 0.00),
(201504562, 2, 0.00),
(201506376, 4, 0.00),
(200500000, 14, 0.00),
(111, 4, 0.00),
(201506376, 2, 0.00),
(201511348, 2, 0.00),
(111, 6, 0.00),
(111, 27, 0.00),
(201503613, 40, 0.00),
(201504562, 31, 0.00),
(201503613, 26, 0.00),
(201503613, 31, 0.00),
(201353034, 31, 0.00),
(201338192, 15, 0.00),
(201354081, 31, 0.00),
(200500000, 26, 0.00),
(201353034, 49, 0.00),
(201353034, 36, 0.00),
(200500000, 27, 0.00),
(201353034, 48, 0.00),
(201504954, 16, 0.00),
(201366209, 19, 0.00),
(201366209, 25, 0.00),
(200500000, 50, 0.00),
(111, 2, 0.00),
(201476252, 2, 0.00),
(201476252, 31, 0.00),
(201504954, 4, 0.00),
(201343007, 42, 0.00),
(200112344, 44, 0.00),
(200112344, 45, 0.00),
(201343007, 4, 0.00),
(201464319, 45, 0.00),
(201511316, 9, 0.00),
(201511316, 4, 0.00),
(200112344, 51, 0.00),
(201464319, 10, 0.00),
(201366209, 3, 0.00),
(201464319, 21, 0.00),
(201366209, 16, 0.00),
(201464319, 43, 0.00),
(201476252, 17, 0.00),
(201512355, 6, 0.00),
(201504604, 4, 0.00),
(201504604, 36, 0.00),
(201486232, 27, 0.00),
(201418532, 9, 0.00),
(201418532, 4, 0.00),
(201513839, 31, 0.00),
(201504954, 24, 0.00),
(201504954, 9, 0.00),
(201339978, 16, 0.00),
(201367501, 48, 0.00),
(201354044, 5, 0.00),
(201354044, 42, 0.00),
(201354044, 1, 0.00),
(201354044, 27, 0.00),
(201354044, 4, 0.00),
(201354044, 31, 0.00),
(201467074, 21, 0.00),
(201467074, 24, 0.00);

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
(1, 'Jeff', 'Lucanas', 201353033, '$2y$10$6hpCq8kst6Hb2UeR4K7AE.lzqIM5tduANHoDyZzdT3ji4Og/PYEdy', NULL, '2016-10-16 12:08:19', '2016-10-16 12:08:19', 0, 0, 0, 0, 0.00, ''),
(2, 'Khalile Karl', 'Pujante', 201339978, '$2y$10$CHTptySoLAdzIpz5.u7HcuIrlkbCxLplNRw2Qfuc3n7bI1NzRz1D2', 'Oh2vmXonBM2TXwSo9mQysNKQ3TJNYwg5RQIhY8OEoFIBkFZ7ygG8Y1BAL4my', '2016-10-17 07:01:01', '2016-11-13 17:43:14', 0, 0, 40, 0, 0.00, ''),
(3, 'James', 'Babalcon', 201352797, '$2y$10$GAstvn8atrp/8r2T3/SBgell.FU8kjKWY63IEw1IGU/xf39Med0NW', 'kVPWLNBumpQh5P2uOtrLvfPMWBUDWVXQVBHGbKOQoBG7fdmHixMm4odV7Um2', '2016-10-17 07:01:32', '2016-10-19 20:05:28', 0, 0, 50, 0, 0.00, ''),
(4, 'Rex', 'Olis', 201247036, '$2y$10$yJhauVi5cFk0crpk.3y1QeXdVNNLRETa6VuDzMj5E//XtEzgEMddW', NULL, '2016-10-17 07:18:34', '2016-10-17 07:18:34', 0, 0, 50, 0, 0.00, ''),
(5, 'Carlo', 'Valleramos', 201344347, '$2y$10$ZJyAxxd4nr.fX98APbMe1Om/67yHoXJcZ63/xXwH13iXr2rp73QAq', 'tRoOahFuunrXUP30ye4Tuj5ViOvi5oKmdW5CjqmiOrqlvlN8gYOT3NREEfZ9', '2016-10-17 07:28:18', '2016-10-19 18:11:37', 0, 0, 0, 0, 0.00, ''),
(6, 'Quennie', 'Zalavarria', 201352786, '$2y$10$AOjvK56/7Gro23aw.tvDF.olCekRC94z7NGdCkFE1zJfZEffJsM2S', NULL, '2016-10-17 07:34:56', '2016-10-17 07:34:56', 0, 0, 0, 0, 0.00, ''),
(7, 'James Michael', 'Kuizon', 201352703, '$2y$10$luBb82W8nQ34pWWD2KQ8vev8E1kOMmicXdt6mb37zJIPRc6UQuYOa', 'W9JOwEY9DlOd97kIkSsbQpGZUCUX4VNNllmVvN7eCPRL3iZb4TV1p99RlS1H', '2016-10-17 08:03:21', '2016-11-09 17:23:43', 0, 0, 99995, 0, 0.00, ''),
(8, 'Albuen', 'Rosello', 201338192, '$2y$10$ErbgAJpkepo8Yw4rtGSUAuH1YCE.AQC6ywxuUC02IykTv.AuAinV6', 'FtTgiyrxobXRxkHg0GVNhALsbZ0n7Xc9648BLCWKxqWR9YPg6As9IVWpz16u', '2016-10-17 14:14:00', '2016-11-09 17:05:16', 0, 0, 100000, 0, 0.00, ''),
(9, 'Arni Maxine', 'Hilvano', 201352706, '$2y$10$i8yMPxUVXIRXijdq8goA8OaR1xiYjQnkWFdHS7IR1W9ChvtRq/hVe', '8sf1beWMihgZFYN6tlXL5I3809chv8n5d1EtxlzMqotiuqqXdXF3Vl81eukr', '2016-10-17 14:56:17', '2016-10-17 16:04:30', 0, 0, 50, 0, 0.00, ''),
(10, 'zyraphyl', 'penaranda', 201338978, '$2y$10$4IU0kjWh1JIEpnIxwgvr2OckbsATv4x12Gyz5vOPjQuTHyYSXf4mW', 'JPLTr7YecTld3tNEEAmbdCvERpArkkRZnrCT4GHhNwjei5BbPBLkw074Hho4', '2016-10-17 15:45:43', '2016-10-19 19:49:01', 0, 0, 35, 0, 0.00, ''),
(12, 'Rayl', 'Misu', 201334613, '$2y$10$//XL7d7RePuqDLYe0UQsd.rR6xGOPv28XTfpFfFVFlOlVEZtwGYru', 'hI64VeAelEFlocw7aikGllAMsX6wb0LMXqHmYCTydh0wbkQy0Ezt41gJ2Fp4', '2016-10-17 16:33:27', '2016-10-17 21:58:33', 0, 0, 25, 0, 0.00, ''),
(13, 'Fatima Grace', 'Abad', 201343275, '$2y$10$oFYJoVJQEn8CisGzKAsAx.mXV1ShBgL37dedbUfv9Eu9koNnm/rN.', 'skzIOeA172iAg1tabtk0mDXrhl0NldP0YuKOmf9dRBW8i1lmk19PIjynoygy', '2016-10-17 16:41:30', '2016-10-17 16:43:06', 0, 0, 15, 0, 0.00, ''),
(14, 'Annabelle', 'Caamod', 201208532, '$2y$10$gwf2vXRInH1gYKyxVe9EAumMNsvMjmh3PiUm5nXkzIncvev3b1OrK', 'Vf6DkbdbH6xlbGeLah0Cektf1jGJXHUOzfqX1JaXdhPqKVGzCDPY1t3jyjyY', '2016-10-17 18:07:17', '2016-10-18 21:58:21', 0, 0, 0, 0, 0.00, ''),
(15, 'Danne Marie', 'Cortez', 20174513, '$2y$10$/JcazuHKFV1HQvsjXYF1AuGyYoZMgty2qGz15BO4dcjkyCiKDkjNq', 'hhgqcj9uLcVR1n1HGDpShfO9aMKiyqS5a5GuUzqeF53NfMoR2Tb3Eb6jJIVw', '2016-10-17 18:07:55', '2016-10-17 18:15:12', 0, 0, 15, 0, 0.00, ''),
(16, 'Daniel', 'Hizon', 201480161, '$2y$10$CmQB96vn6TQVNaoSTXtT5Oe.L7P5bpKquKlwtvXq.99vwMlIi29j2', 'F3giTAHdm9Fe5JdJXzjPfaDxVRoh0ufc03dSJ3Kbh0Suk4CEFrPuthJmpvPp', '2016-10-17 18:08:48', '2016-10-18 04:06:36', 0, 0, 15, 0, 0.00, ''),
(17, 'Wancho', 'Das', 201243900, '$2y$10$brGxr/uW1y2RM0KxjYhtEuGoOiGcgcLRI1Ul8J4YQ96TV5SIyoIPe', 'RizkFnDokXa1js24bHKelZvNCqaVSdQokvlVZ4i49iiXogMmdVi1QefWWojA', '2016-10-17 18:11:24', '2016-10-17 18:37:53', 0, 0, 15, 0, 0.00, ''),
(19, 'Karl Brandon', 'Ocfemia', 201512233, '$2y$10$Atd4Uw8ztP1at9CWMWcug.AmdTZhfuwal/9LtRYX3LyPd8oTNvXJ6', 'WrSVDNjCOXX8GZRuG78ydXdz4bg2ueKIVcqYMxrWwWGWSwU4Wb5emtj3LSrg', '2016-10-17 18:12:22', '2016-10-17 18:14:32', 0, 0, 15, 0, 0.00, ''),
(20, 'Jovan Francis', 'Paner', 201212345, '$2y$10$UsKisFGlvIAIDRPlNINzfO9fHK4IWbSdcqZQ910Xmhzx1ayNfSwj6', 'VluX9OaZRCGJf73XOz35aBJK84QIoHIAud6egn4FddiVEzJdeSNwMK7rvWkY', '2016-10-17 18:15:10', '2016-10-17 18:16:59', 0, 0, 20, 0, 0.00, ''),
(21, 'Charlotte', 'Sacmar', 201209347, '$2y$10$b7iLoihR6h27glAUNIp6OubYcPoR5HmwTj3ikzNwvpCENoF5nfcIe', 'dIHOWPt5yHYwJm1CKd2I7vFLgYt8EOPNcpWmjkxTm8RPA1xcNvKhYfAw07cL', '2016-10-17 18:17:52', '2016-10-19 20:10:12', 0, 0, 5, 0, 0.00, ''),
(22, 'Danne Marie', 'Cortez', 201754513, '$2y$10$.sXFeINeAH3BiiNwkLPFiOW4SnSbWZf02HMAYzs2OMr8p4U4n4DF6', 'aatm87Ff0a6mQttRAXD9nR0gdoFfS3lSPjO9DDoZvystebnkGHuFEehcMiYm', '2016-10-17 18:19:39', '2016-10-17 18:28:59', 0, 0, 0, 0, 0.00, ''),
(23, 'April', 'Padrigano', 201464813, '$2y$10$eBalqbU6G90Lf84C/subLelf43ixo8Vpk9d5.qqS34dxwd.L1r1m2', '5kB9rnMGgXLVpn1FJiQke7CGK9upOf56sLlRTRxn3lOiMblpCQhQ5DPI9425', '2016-10-17 18:23:17', '2016-10-17 18:28:56', 0, 0, 5, 0, 0.00, ''),
(24, 'Erikson', 'Leguarda', 201424468, '$2y$10$XCaJF1M1WsYkvX.cIB5cr.ikv9Fn8F/Qml5.NFQ11YdrEeo/CnHoq', 'oa9diJzorCrbjQCsDyHEQeyXLBWOwFzo0KwnUObMPAXaKRz2PYdM32bYyLyX', '2016-10-17 18:26:46', '2016-10-18 23:17:47', 0, 0, 0, 0, 0.00, ''),
(25, 'Ervin', 'Margallo', 201366209, '$2y$10$cdeT2OigQYnJBD50Aj0JvO16N9Mh6sMOTdZX36UbDvCAAszAT3exm', 'dLZNSeUG7B0aVVohN20dsHa8lS2uKUdo9k7LJL6sfevXlxYRUMnmQn204j4k', '2016-10-17 18:33:08', '2016-10-20 22:03:28', 0, 0, 15, 0, 0.00, ''),
(26, 'Clark', 'Lajarca', 201481022, '$2y$10$E914Mloa.yBGg2eks.vpKOYs7CmMDqycLudz8suJnQdt4JdaqTzJK', 'aaZOmM3zukzoRHqpakTdBb18KvKT1gh9PFV5DnLgM35H0yZnmNMemLjXA5Kn', '2016-10-17 18:33:24', '2016-10-20 01:40:14', 0, 0, 0, 0, 0.00, ''),
(27, 'Nyx', 'Villamor', 201344633, '$2y$10$QxJuGMUZ4zdzc35Rk4hsmedI/AbqF9nB3RI4nlGTHm9aocmoSOVAK', 'TyZ7u2mypiow94uSj7LhCNwGgfQx08FbQLItIeLmDJIoyOwr7laFdMslfZ39', '2016-10-17 18:35:00', '2016-10-17 20:39:37', 0, 0, 5, 0, 0.00, ''),
(29, 'Mar Augustine Chloey', 'Lee', 201354085, '$2y$10$OLI0zleHCpf0.kv4WMp/ve3Scn3q5kmOk4hLh1zEejDO.wvi1YApe', 'SWlxB2xmraEhkAtRTds3TCKuknASIon6mGTz4X2GHlppgdvRgKvnLn8dPdDS', '2016-10-17 19:29:18', '2016-10-17 20:36:14', 0, 0, 5, 0, 0.00, ''),
(30, 'Faye', 'Silvestrece', 201354111, '$2y$10$RMKhOBpW5j4nXwVn2V6/cuC3qvYw.DqCSCyn3LIqiY6w8AoyfUJZS', 'xzMnwAQdG9HnN6ZhCCuQYJ9pQgoUU7ngU3rUKZnktZmCpu3MAhAqB4bfGwZ4', '2016-10-17 19:33:41', '2016-10-17 19:46:03', 0, 0, 5, 0, 0.00, ''),
(31, 'Kenneth', 'Tamayo', 201345789, '$2y$10$8LxOUuMdyWDRvQVmBPYCXu2d.iKpaWzfq8fIS4KB26GC0FXCJzsVu', 'uHQI6F0q3nog0Ed0GqmcrinYpNsHOht44Rfhspg3DbfuiNCPVUWyNn1tbgwf', '2016-10-17 19:33:44', '2016-10-17 19:57:50', 0, 0, 5, 0, 0.00, ''),
(32, 'Nathalie Claire', 'Villasin', 201341300, '$2y$10$2pkzFCVkhusjERKEZEYhUuPuokw2Sl2s7c9p/ZZSt9aEdcuEbs.0i', '9gDuD74HuSfnQSrAIZCmCJQvJQjz8TBqSRXJrbwTMZPo6gmmPqKcpQzAZCJQ', '2016-10-17 19:34:20', '2016-10-17 20:37:36', 0, 0, 15, 0, 0.00, ''),
(33, 'Roger', 'Sablad', 201369904, '$2y$10$VfD6IB4L0KzXVd1p7RwbDenGMr6OnIEciFjGa7jdK1yZq8e9LkLVe', 'Kx7GlnSuaKhkdSOnPT3Z6ek7sGAeKutHY4Mr6rNHI5mCD3rATcEaiXWfJmSk', '2016-10-17 19:34:50', '2016-10-17 20:38:33', 0, 0, 10, 0, 0.00, ''),
(37, 'Jay', 'Carcellar', 201367501, '$2y$10$.lnLM8Y6qpxDgnW2zbwZ0eO6YfVh3ZAXSA.fjawkqHk1.NjuytQUO', 'z6dZgNREyuUK7acZ4N77NIvHvv3ANpa1F4C9XtDoyCCU4N3vAXk9GYLPRvm3', '2016-10-17 20:10:59', '2016-11-13 17:42:42', 0, 0, 100043, 0, 0.00, ''),
(38, 'Rodney', 'Dublin', 201506397, '$2y$10$KStLnrNy9htiUKsB9E48HOJWkyaC5aDjeKbRnvqNlxsU75KPnP5B6', 'YFPXPiJTmAypIGJgT7pCazr0ljawzIE5yy9obMuDwer6vpCMnzOhfB5C7s8Y', '2016-10-17 20:12:06', '2016-10-17 20:35:46', 0, 0, 0, 0, 0.00, ''),
(39, 'Edcel', 'Balite', 201504320, '$2y$10$qSz/Z/TAL8eYX3zYf55MXu1xnQUAwt552xZztZSBRP.wqq9kOHB3u', 'u5w7oK3RWTLwfRPnckynChnP6ngmxC1O6jA62F5cTKmNtLJ7TkxXupuKdR6b', '2016-10-17 20:12:56', '2016-10-19 01:00:52', 0, 0, 0, 0, 0.00, ''),
(40, 'Kenneth Matthew', 'Lanante', 201512658, '$2y$10$QFr1j/nYxtG2XwMdBU.vZOvFwWbuMB1Y6kEGBcBe2ICFAznHkXqme', '8VyT9S1GOW7cr4qEnjF73fJ3czeqlcRLHZySkpwf9bBH5n0koa2WCbgqlCWL', '2016-10-17 20:13:15', '2016-10-18 18:55:33', 0, 0, 0, 0, 0.00, ''),
(41, 'CYRIL KAYE', 'POL', 201510777, '$2y$10$EqlY3lH/Mdc.krPzOil/Y.08W3kaEkhaYhNzsypPhJCBndet1/dFa', 'no4i9HOXsHS2PPfA9BNCLPFBYFe1idoxRDHgB2QuJu5loCoe5tt8FXTSH9vX', '2016-10-17 20:13:48', '2016-10-17 20:16:07', 0, 0, 15, 0, 0.00, ''),
(42, 'karyl', 'bardelas', 201354080, '$2y$10$4vjSe1NXru9CuLoSz.RdN.cWzavk1djFgmw77qZh3bsH7yiZfhhYm', 'L3yfn7VXluOmMd76ZGwLfZUBSbHnfugBVok6R1zvkRwQ2xyClPK1Qf1HwLKD', '2016-10-17 20:39:39', '2016-10-20 20:19:31', 0, 0, 0, 0, 0.00, ''),
(43, 'Kenneth', 'Tamayo', 201369687, '$2y$10$dQm7rulVpQlbkyWJHk8dG.qKTJIVXvhOUmPP.lZE81kqvpEoVAiuO', 'zU8paRzQToZ4kWrQWeuyCWOEYpHHzMPUh0uFq9MHX7l9M8nkjSzryxkYA8Ip', '2016-10-17 20:43:44', '2016-10-17 20:50:44', 0, 0, 10, 0, 0.00, ''),
(44, 'Francis', 'Molina', 201352618, '$2y$10$qD7U7LAI8qBRWqdQb8Xa2OH4OWELh2LjX7klmKqgA3qMxIMZAhLNy', 'PEiF0iBcrx4PmD3O34tYJ0BiNSjqJU7fcBEePqrHyn5HUpiAIWTxcmT1NHAu', '2016-10-17 20:52:07', '2016-10-21 01:02:34', 0, 0, 45, 0, 0.00, ''),
(45, 'VladJamir', 'Tingson', 201362775, '$2y$10$cG85NcwYdWFcGkn9t166juMzRNo92AQ40YLMW6Y1T2BZYqEUu.pPq', 'ylcEGa5p5YN9GLban0rAs8jTNlh8k8OcdtZupGx06NPM9fzeoNuUwbFSSQdB', '2016-10-17 20:54:36', '2016-10-20 20:19:28', 0, 0, 30, 0, 0.00, ''),
(46, 'Leonard', 'Inciso', 201334612, '$2y$10$brSQeMP8FkkkYP51l/Bih.SL/QXuVO7.0f6WEslD1LMSP2gu8PxGa', 'M1lmYuEzULtLOzJWdZQO3DQAT3YDzjZ0JruAK01yjN9h0qJaTkb26ys7vSLi', '2016-10-17 21:54:36', '2016-10-18 05:05:35', 0, 0, 10, 0, 0.00, ''),
(47, 'Joshua Renzo', 'Dorado', 201343294, '$2y$10$dkL6sZqB/LCPvOz5dUPqi.UJOMI2GsZ/T66rjWwPhCzUkRtkMPYbm', 'Vh5vfIhBFRumkBmqQJLgwzGejkv2r80fdMLMm9yXlewf7CAfPhwgmJw2mJvu', '2016-10-17 22:33:17', '2016-10-20 02:18:29', 0, 0, 35, 0, 0.00, ''),
(48, 'Jm', 'Astorga', 201351835, '$2y$10$V1e6pgROQrwrLm5H6BhYPuQM0jADAR98/sOersD95VxMU.5F9hTCG', '6Iq6BKeMjd3BSLHVfw7tNO10kIgRtu1fUwxHzbAaRqcetOX26RTVNVTNHKEE', '2016-10-17 22:44:55', '2016-10-17 23:17:34', 0, 0, 0, 0, 0.00, ''),
(49, 'Lester', 'Barrands', 201356789, '$2y$10$x8g.iptgWTRAlizemHTPAeMbTGINW6pBrbGpb2xVTXQe7RCSpEpO.', 'S5uCHbFZr9s1Z8axLdgsEaJ6avoi5ARpr4U9H5x3g8oxDt8qyBFowF7xMzQn', '2016-10-17 22:48:39', '2016-10-18 00:01:24', 0, 0, 0, 0, 0.00, ''),
(50, 'Jo Jeremy Just', 'Lim', 201504676, '$2y$10$epzFdoPpx4X.CN/02LPTleU8emd5Yjqi2B6C72e6GOIqXyUhoChCa', 'y8NTMhzN7dtyeH3memhrbKuASsufX8brWyPDlR9qrdQDlYh0m1986uqc8XJN', '2016-10-17 22:51:15', '2016-10-18 01:23:36', 0, 0, 0, 0, 0.00, ''),
(51, 'lester', 'arnado', 201512243, '$2y$10$J9SDCpjWAtzQdIVtsyoUXO36MTo0B.8aBzxRRv.9QXqbX040p1tp.', 'kaWGByVSX57tBJMB2aBegKD6ROoEB1t6dQOEsE0T5pTSvi8fM0I5JJ139qjN', '2016-10-17 22:51:20', '2016-10-17 23:55:21', 0, 0, 5, 0, 0.00, ''),
(52, 'Bea', 'Santiago', 201503335, '$2y$10$skLzadOy0TWuSxJXmQ7l4eR0DnHFnrnqlXW1nY9fN9xIMfNKhjogy', 'OgD2PgcpCMSoy8FfQlAZNWAtly54OiN06k5lmkgen6qoPLpIU25RBm6RCdjb', '2016-10-17 23:07:26', '2016-10-18 03:09:48', 0, 0, 0, 0, 0.00, ''),
(55, 'carlo', 'valleramos', 20131111, '$2y$10$hyxtxJQeK4PdTaqqdyOzr.fBr4wQaaJ4clXm90PNed89J4LMzwMs.', 'g1ia7hIr8rQpCL2weFNvyn2S02hVrEDHWn56OWvYAwhhi8VIlqPj8Ywucej8', '2016-10-18 00:03:21', '2016-10-18 01:12:28', 0, 0, 5, 0, 0.00, ''),
(56, 'Kiibiin', 'Awesome', 201481026, '$2y$10$84y/rgcirhcrg8r9.5c9rOIayqt9ls4cnI8cM2PC1t9L/MYsMuije', 'iicVst7yikpynceQsMkQuxRpUDErqYG0z24TWiupoDpb6aRMpDBZfvnjYICK', '2016-10-18 00:32:28', '2016-10-18 00:48:36', 0, 0, 0, 0, 0.00, ''),
(57, 'JUDE', 'BAGUINANG', 201475355, '$2y$10$dCtwIHvmns.KDOB/RnPxSuCgHhIBe1uEC1rFytL9.cHWStGugpcvm', '31UbzdjlfBuI9uSsPtiX5I56zI49Ftc1usOczIKbEZtXBKLKs6MWYOr6kx4C', '2016-10-18 00:32:57', '2016-10-18 00:48:18', 0, 0, 10, 0, 0.00, ''),
(58, 'Gwapo', 'Amistoso', 201473648, '$2y$10$lSBDxlqpO0jZGn0sp8X3mumR.ejUKoBgDsKwEvmjG0DTHGw8fZ2FO', '0hXtiOH5dS6tQUvtsKTIJG7OzZoKn3bs3SKfUvXjoUxDp1VJ8IcredIxLQ7b', '2016-10-18 00:34:14', '2016-10-18 01:23:58', 0, 0, 5, 0, 0.00, ''),
(59, 'Glyncel Joy', 'Alejandre', 201254887, '$2y$10$uCZGbMBxf/O9ev0yc1NyDOpk03zT2hE1Uz2GAK3HVcLSN/tvFyxuy', 'utuesCB5K9OVuL5J19ZUlZ7FWK2XzrcpXIJTWLeoM2pFVRWEIs7WQ4poVjIG', '2016-10-18 00:34:24', '2016-10-18 01:02:13', 0, 0, 10, 0, 0.00, ''),
(60, 'Jomar', 'Tomines', 201362055, '$2y$10$2yXACd7o74yRbT.90i9w7O8yxNMYDu4tXMbCxKbNG9j83iwl3PLTm', '54Pd0S5Rc9cli9M9DKha6CZwvMxUF3IH6nKjmR4X7M6CRDw95uPnEPqSVvlk', '2016-10-18 00:35:35', '2016-10-19 02:59:03', 0, 0, 0, 0, 0.00, ''),
(61, 'Nissi Praise', 'Espejo', 201334453, '$2y$10$fpxJt1YG52qt1g8IXix3B.99G5kG0PGtRQuGIcDdPg6uDThSaJv.e', '9lD8uFbRfTypbEsXiEhHHfatwkn6r0P9KI5u73GdiWchSKMasi0oOaWOWzoQ', '2016-10-18 01:28:55', '2016-10-18 01:36:54', 0, 0, 10, 0, 0.00, ''),
(62, 'Ralph', 'Devaras', 201233333, '$2y$10$RhR5UPjfrXC2uiQQXR3XCuWxQ7Bq3nZ4NrmSBNec1R4gLR2iIUqQe', 'GrhtPCmE5r5nkw7g5Es1e8UIeKyZOTHpX6ZVbScDfLQkW8sXldBm16IR2HWd', '2016-10-18 01:50:25', '2016-10-18 23:43:26', 0, 0, 50, 0, 0.00, ''),
(63, 'Bart', 'Monton', 201338339, '$2y$10$fqvkVr3IbBxxSkuzufuB9ecp9B3Pjb9FlBuhxLp74SuJJxNnMjLBa', 'FmaXp8TRObasnc7dfpAtaBps5glCFFCenuMA2KsbMyA02AuvlFaJFj2T03RA', '2016-10-18 02:02:31', '2016-10-18 03:02:57', 0, 0, 15, 0, 0.00, ''),
(64, 'JEff', 'Lucanas', 201353034, '$2y$10$nYtfw6L7GYd6FqEfcQG/A.0ciyA3C5R458GhBJmkvz2WfWZPpufli', 'XkCWfqbGmK9tLDKdtNfFMmtGfzIOKFCX6W1Q77Ss8EbKiSKXP9ioyQJALxDU', '2016-10-18 02:18:37', '2016-10-20 20:37:05', 0, 0, 5, 0, 0.00, ''),
(65, 'Saaaayuri', 'Maaaatsumoto', 201464319, '$2y$10$.s6hGtLMpGy7mGAP23.H6.jwixm8mMHvPgcp.2KwXiQiguvJip0lC', 'tJdyquO365DI9CuAZaUBfNQRk9Bn23Fmdjfitwg48SSEEFdwDM0BRoIK6q5o', '2016-10-18 02:39:57', '2016-10-20 22:01:20', 0, 0, 10, 0, 0.00, ''),
(66, 'Ivan', 'Puayap', 201511645, '$2y$10$6bmM3FCF9rVc8gDcyzLsfOdNbGLcHJkUTkd99.ZRhlSi1YwvUFJFK', '483RbUYfv99c15Vcikhfx5RuEsRNeKXKOXn79Zf4xlEGWLzTyVu6mZQ4xahI', '2016-10-18 02:40:33', '2016-10-18 21:32:26', 0, 0, 0, 0, 0.00, ''),
(67, 'Noel', 'Garcia', 201481823, '$2y$10$B5y3DuFQr1UoU4DY2kOsceyLMyQjTAcB6Cm3V9ofIp1WjoCqpG2ZS', 'Y2dEBXRdPeGkgQjqJktptH4gJsPFmc5sLAIgkoPmtuvu6kJZYNOcYMqx1CHQ', '2016-10-18 02:46:53', '2016-10-18 22:21:42', 0, 0, 0, 0, 0.00, ''),
(68, 'Faith', 'Cerena', 201503617, '$2y$10$gOYWFsr0zRh3V9BBlbGanekGHabnjG772JGHVkPYfiHNfJu4VmSoi', 'Xjtx7p4xm0HEwStELNyMvpslhs6xQ3dUzleBU3wZ0aWCic7qAjliVEfwkGWy', '2016-10-18 03:01:53', '2016-10-18 20:19:20', 0, 0, 0, 0, 0.00, ''),
(69, 'Babes Ivy', 'Ngoho', 201506761, '$2y$10$1SkuoSQyrh0C68FaLwxL8ew2ZHuPhSZsSIB8etwC2i37PgNQ9n2/K', 'vEdphpQZq1IIBvuABNvTJvclL5QK9ifKaMUGkeTtDmbRFqJBrDosYXLB34om', '2016-10-18 03:05:38', '2016-10-20 23:41:12', 0, 0, 0, 0, 0.00, ''),
(70, 'rj', 'goera', 201473647, '$2y$10$4hUhlQIaGzKADvKr9W97yesjNxBzsi.zZ7FGM4wkTLd9wb1CtgLCe', 'awHC5nguWwhrXuxHSTtRqeIjtUq7WvDWd2icDxuLm8E4QsTgTQENwqwfHzOf', '2016-10-18 03:05:45', '2016-10-18 03:06:07', 0, 0, 20, 0, 0.00, ''),
(74, 'Keanu', 'Go', 2011233, '$2y$10$JF18tzAdaHmpnJ.fqJWvQOmg54MwcK3dF9nGM0LFKK/MKcWWCc98m', 'xzkxbhVmxL6CAMBX5iJSKkV6SmEiYyxJ9qrMkTiikNE8EIx6IuCPlsYTI09U', '2016-10-18 03:20:21', '2016-10-18 03:36:47', 0, 0, 10, 0, 0.00, ''),
(75, 'Jethro', 'Albano', 201503609, '$2y$10$.Vf3iWJYTPax6IgQ0S74P.KMM8ypBhbBcleAkbbt13r8gXrWt7DkW', 'xDOTtxWWjkuliDL8bG24vqNCKxCqbIskKnQQzWq3YsRxKOkNhJuMS1QUoR0s', '2016-10-18 03:21:47', '2016-10-18 03:34:12', 0, 0, 0, 0, 0.00, ''),
(76, 'Nano', 'Leaf', 201400000, '$2y$10$mfwDq474z/siOmIqcaoqm.YDDuNopOmVX1pfpBCvphSbUojFSTlge', 'lEJkGNQNudWrTBbYkwEXRmrbmJrXF06ABX6sJDlj8VEsmiBsTsVyDvP9nFbj', '2016-10-18 03:25:45', '2016-10-18 05:07:59', 0, 0, 50, 0, 0.00, ''),
(77, 'Neil', 'Aurelia', 201481810, '$2y$10$AGHT.4QQ7TWrPlgxJxJfD.eZlF.CekKiwZMmxNJuGMgnP.PYJQ/ni', 'cHvDkEhFFhiX3mpTR1i7ZkNruLFJHp8KFQHVci6xojxIjGmnIcmT8kIK2Y60', '2016-10-18 03:34:36', '2016-10-18 04:19:00', 0, 0, 0, 0, 0.00, ''),
(78, 'Tin', 'Mantua', 201476512, '$2y$10$QZoPL8gJtK/AQLALwWScBeldLo7//UeMmqBPsBuwxHTYn0/UViFay', 'BWutrAm465ijviQ7DV9skZiRpnBNKbDPPbGNnY0IYX8ClUWhhJro3xm4dboZ', '2016-10-18 03:47:09', '2016-10-18 03:48:48', 0, 0, 15, 0, 0.00, ''),
(79, 'Krizzy', 'Urmeneta', 201469019, '$2y$10$cWHc7YX2yG0Y.qPJpNS07u6pIvbusdHVTUhxS45QW9HbmlZ85D7Xa', 'roSasbBtk7NIFS8rw9rsYqA9XvOQWcc2fbVb8Z7BEa5AgN8uFfgwOqM4YdNf', '2016-10-18 04:06:11', '2016-10-20 03:05:30', 0, 0, 0, 0, 0.00, ''),
(80, 'Kimberly', 'Lluz', 201473650, '$2y$10$OK0vJJyRDkLjbWmZVJBWgu/1CDd.6Q/ibmEmuuWcwtiX1mvMM/5J6', 'yeQmO1c4GAeLeJK631B82qoYsJT9bupEoshVGMLLg79tQxMQBcfVpL8kTObx', '2016-10-18 04:20:04', '2016-10-18 22:57:43', 0, 0, 0, 0, 0.00, ''),
(82, 'jovan', 'paner', 201269829, '$2y$10$J8dudSGzwLQTHhFq7PtWbuuWWzaaiaP7u9SjiTqLmw7VHqKrNj26m', 'vEVk5UJqTg4cgFjugeKemheWqJwG2OwkCnHa0r0AOM9RbPU7EXDUMZcVyRWL', '2016-10-18 17:39:22', '2016-10-18 18:43:39', 0, 0, 0, 0, 0.00, ''),
(84, 'Brandon Ian', 'Dela Cruz', 201506461, '$2y$10$/dSKQ9AERokmX62eEkEbIudV7sLP93j57BGSq0xfLJqAaA3vvz1/S', 'wMsmxvmfBXVZJE0j6VZIvE9CbTtCuMYzxK1ABC7cc842CZnovSoDlcibbdYa', '2016-10-18 17:46:17', '2016-10-18 18:15:13', 0, 0, 10, 0, 0.00, ''),
(85, 'Gerard Alain', 'Aclan', 201334952, '$2y$10$CDPkq/7Hi/2QB9I5mEGSvuCtZnUxELjO98NmdEmXyAG5ktos7mk/.', 'Lg818V3f1KbFNTEqOYYK0NZRBXbwI9uxXKC9GYXguSoY82QggdFYUIWV5CWk', '2016-10-18 17:46:23', '2016-10-19 20:57:59', 0, 0, 0, 0, 0.00, ''),
(86, 'Joemar', 'Codilla', 201338016, '$2y$10$GKwYw6EyH9vN0PZ91N8j3.XuZXAZnYd/g9PdV0tC/anS6NcuPDVmi', 'HxlCrZts28koLOe4RhXna0MHLNdwUbDtHToGxZYfiXY7jfXLkHeznWSQahgo', '2016-10-18 17:49:00', '2016-10-19 20:59:36', 0, 0, 0, 0, 0.00, ''),
(88, 'Benessa Mae', 'Gabrito', 201344596, '$2y$10$3KY5IuDUUNrPo9R.9N8SqOLsI6F0yrNtib9laF0gFSwVskHaltzZG', 'gFn1l7f54wY3c9GBtQoFzuBisYcVdXZlAAL4GOONp4LfhiX9cV9z7kgYTr0d', '2016-10-18 19:19:12', '2016-10-18 20:19:32', 0, 0, 10, 0, 0.00, ''),
(89, 'Melanie', 'Ladica', 201506849, '$2y$10$6/ayRQP4K1QeSYEletZkauDqi6kGJzwQtqvyLvRSLyu1UPq5Y/nJ.', 'T6V86mZH4adNOTh3LHExwmVmoRlsgL6MrQAAjrOo3Zc6MuR8aiiWC3dIbvLc', '2016-10-18 19:25:44', '2016-10-18 19:57:21', 0, 0, 15, 0, 0.00, ''),
(90, 'jemima ', 'roche', 201364563, '$2y$10$SkBHW.rq0LnaIH8tb65s/OKT5sIlK97G40MUN316TQd82q6QK6T5W', NULL, '2016-10-18 19:36:17', '2016-10-18 19:36:17', 0, 0, 5, 0, 0.00, ''),
(91, 'Kena', 'Soo', 201354107, '$2y$10$otSsJ6hmNLz8Q4tLLgBqqOgW1v2.SYcBwv2TUkQ8MYqAfh6Uri9xy', '3aeUAyK0rAfXg1Wr4UKChz9hcvYQN9qgg5jvtqpPA5GGw2R1YNBNupWz3Hbh', '2016-10-18 19:58:04', '2016-10-19 18:21:10', 0, 0, 0, 0, 0.00, ''),
(94, 'carlo', 'valleramos', 201244347, '$2y$10$1/sQ6KzCxfqQz3MUh0ZF.uojBONV5.H8RkWi5ZNoLgI1aGGJnody6', 'q3XX4P1RltVReGMlRUitm4ORHR84nnoQyIjNdcmCgecESas3yRXh7hWrsHBt', '2016-10-18 20:47:16', '2016-10-19 03:05:48', 0, 0, 0, 0, 0.00, ''),
(95, 'Jemuel Kirby', 'Gacita', 201480304, '$2y$10$D1jq0Rl57L2IOc9YoMF8TOgNEclC1BTUI.LHy/j6MpaocxyG9KsdW', 'GQE6M8L7zEPmTo1ELl2Jlfm4GA2UiyjGO2MuXz10CktHz2m86JTvFkE8lwRE', '2016-10-18 20:56:29', '2016-10-18 20:58:46', 0, 0, 15, 0, 0.00, ''),
(96, 'Kenneth', 'Tamayo', 201398868, '$2y$10$2g0/4dx0PDLc8Y3afGhQD.QNMQgfF5CuSW3i7dtUGZJSv7cMxjuOW', '1y4i1KP4iClMdSYlsBWw3llQtlqf5foUX1kQolAIJiDmFLw049FDXKBPDFkF', '2016-10-18 20:57:11', '2016-10-18 21:04:17', 0, 0, 5, 0, 0.00, ''),
(97, 'Kenn', 'Pulma', 201504604, '$2y$10$1OQqXWtkLyL5H.XFduwjUeb0GcEuJh5iHhsBW3NXST0w39jeJFMBG', 'ztwTlwocR1goqDs6BKRXQAieIOyDNUMSQPaFE2zS7YfwhzQM6YBpkgQXVkwY', '2016-10-18 21:19:06', '2016-10-20 23:40:06', 0, 0, 0, 0, 0.00, ''),
(98, 'Ken', 'Seco', 201239436, '$2y$10$bEKeQfYrkyt/NzddN3zIv.XkS6YE9fiRL2Z8C/h1CZuHolTPGx8yC', 'flMAkUAkeCPjXxQ54tAN3HTT3KzvBzt2LAsceU2IP7vjM6WObOsDdoNXF5qo', '2016-10-18 22:04:27', '2016-10-19 01:14:12', 0, 0, 0, 0, 0.00, ''),
(99, 'Brey', 'Gandaganda', 201353025, '$2y$10$mhqs.iz16TewFxTOqCFi6eICQEkdqN08p5zXPI3WrU4Q0qvgsa1Ty', 'sNk40VOSqMVwTelKOx3C7qhKS1KTEzmHSIBpzx5T5joLx3twg2yYsehjad64', '2016-10-18 22:04:35', '2016-10-19 00:21:31', 0, 0, 0, 0, 0.00, ''),
(100, 'Paul', 'Pedere', 201553009, '$2y$10$EgGLqc9qy2oB/zCtmNth1.y7WDHGZKQtFL8HrJCqJPXQgu2pwPwgu', 'H7awq7wbNzUiHtGtc9lsZD06M0T3qWBpsOEeblvrjX6yP29jHdZJiIltHSB8', '2016-10-18 22:14:44', '2016-10-18 23:06:16', 0, 0, 0, 0, 0.00, ''),
(101, 'mands', 'XD', 201473639, '$2y$10$TlNaNdaDhoel7hxTfO4cWOMiNAjItoXC1etZr8arqsJYaEvGJYIeO', 'CBX1yJVB3AbTJgrDnsHAvRRAmUEFxdyr4TOmb6rGdcRsl7nSehfXgEbXpK1d', '2016-10-18 22:28:29', '2016-10-18 22:52:19', 0, 0, 5, 0, 0.00, ''),
(103, 'jasper', 'abesamis', 201476944, '$2y$10$Ril6IsoLx069Omr2/iFNjOCyjqB7sFfcmfBhm.4AfzyF0/nqM2Mx6', 'CWf8OPwTSlKmgzqqBaTJwFVu7117tO0Fj1kx8aFwmJwD9cOaqPwGK2aUMddS', '2016-10-18 22:59:06', '2016-10-18 23:20:01', 0, 0, 20, 0, 0.00, ''),
(104, 'Anonymous', 'sdf', 201184363, '$2y$10$7Jqf/XrbDRsAcLkuA9QzNupm6RVgmBmtT2/x9xkqCujZBkajr1LXq', 'XBAjahSwOgFX1KWleNjDOMddXhhWCNvKVVqvh63EEjpZWbcjcm5URR31NKKm', '2016-10-18 22:59:13', '2016-10-18 23:05:32', 0, 0, 15, 0, 0.00, ''),
(105, 'Dodo', 'Juan', 123, '$2y$10$bQoj1Xntn8O7jZT/Bw82g.ei6A9aBLGv8IXJ1GxelJxPSQROJwj5W', 'gDr4glleW38E9UST8URbqYtHXzS52aoflBzsMKuZ1KnU3Ek6S8kE0l8UWV4S', '2016-10-18 23:01:15', '2016-10-20 19:18:59', 0, 0, 0, 0, 0.00, ''),
(106, 'jas', 'abesamis', 20176944, '$2y$10$4gdxd8ogrGkMAt6WU8Sqpu3chHKSVnQ9QyAWBvdbiqeQXdO36s6IG', 'XmgYzauJa9fdGmmbTVtAbJnUEZDk1BuZGft0G6hw2GB3AVYBxDJJz1aMgRxg', '2016-10-18 23:03:11', '2016-10-18 23:24:51', 0, 0, 20, 0, 0.00, ''),
(107, 'Keanu', 'Go', 201511362, '$2y$10$GAwTB.XLhIoiTyb2..4GbevG6VwEPkSq5iphvUnodQJFnqNN4tnBW', 'kseGdbfQMjwGUH9AmaAvaY7Rex55qMlWlDdGT8gMyM6OYrrn8YHSkSJGOuJk', '2016-10-18 23:05:00', '2016-10-18 23:35:14', 0, 0, 15, 0, 0.00, ''),
(109, 'Jude Clrance', 'Gaguinang', 201581810, '$2y$10$ontFwiTpGA02gvwMoHcryO5gWEwzaHJVMbMNZiqmf.zwNApOHt8jS', 'GEXtZEOa2sGf8mbpOUHgPzABAkFrxKXOYc9OXhpYIBdluEekVLo2fMQXvogK', '2016-10-18 23:14:45', '2016-10-19 00:22:20', 0, 0, 10, 0, 0.00, ''),
(112, 'jairus', 'aurelia', 201334312, '$2y$10$J7qkhi8mhp/dPZeDqQm1PO/p8Z00yfIYAkp4rBMuag3gFdcGLx00W', 'P07ua84iXUZOs6lB0ZEn1amDgATV3zy8QyI71M3Avhyh1H6vJ7LCSRhUjtcJ', '2016-10-18 23:18:59', '2016-10-19 00:46:39', 0, 0, 0, 0, 0.00, ''),
(116, 'Aira', 'Casino', 999999999, '$2y$10$vw75XoWKl5r38djuFHAHL.6J74pvTDI4DbEjielB9pgpvNBkbCoUa', '6MqEBrcW3O8gdPc7Tb5hwyhUEPtlSwibURQSEfvtWdEbvZnVEzYV4UQe5s3u', '2016-10-18 23:41:34', '2016-10-19 03:26:13', 0, 0, 5, 0, 0.00, ''),
(117, 'Hannah Rose', 'Corcilles', 201139372, '$2y$10$in6fjWuJTwig4rm0hjLws.llQ6T21TR0goYlDAp40ALl2go5IWTCW', 'cxmJzXH6ICBqmIHqUljY0yjVkKDsk5ViWLo37WndwLk4aNORRDNGzyCV0JOp', '2016-10-18 23:50:15', '2016-10-19 01:43:45', 0, 0, 20, 0, 0.00, ''),
(120, 'raul', 'montes', 201103229, '$2y$10$2Zh1SMvKER5nTVE7l9p8a.EuJGkxzq1jMK4sDsocIGGADnIJ2iLUa', 'AD8pvGvgNdxeIsoKu2S2EP1DSw37iwKbtpjGPLo04lrBOWXDDwhMcdRgoPkP', '2016-10-19 00:07:19', '2016-10-19 00:14:13', 0, 0, 0, 0, 0.00, ''),
(121, 'mark', 'dacles', 201124779, '$2y$10$/szykjSzlrthIlui8ldWEuqZyb9CIUMGfqT6rREJhdE.Lrtd6/5Py', 'fTDaSv3ncedPuairEvcjSSRIIVTltNfN0EtxOHxOoKej78tCMuZaD6ZKUNm2', '2016-10-19 00:16:23', '2016-10-19 00:20:29', 0, 0, 10, 0, 0.00, ''),
(123, 'Carlos', 'Decenilla', 201506724, '$2y$10$LupOxwXOV6k/UiWYmk0exu.RuTZ35nTa4kMatXqYSYSF6J/ZqQiw.', 'BVhXHb67ab6JqBrXNGFxHDDpvHR3MMimcCvHgJkaOHyoLTqMbc87jypDhWYl', '2016-10-19 00:22:09', '2016-10-19 00:25:43', 0, 0, 10, 0, 0.00, ''),
(127, 'Amiel', 'Cabus', 201481814, '$2y$10$oWGeULZYBEutcLJ1QK46d.4TRzm4l2prLptziViR1Wn/21lTAvlIm', 'NI09aZJ951Vm57pwBzhGMJ45NM495StgD3u2Wl9wDYUDcqYW1rlPfVD7Zuzh', '2016-10-19 03:05:35', '2016-10-19 03:07:55', 0, 0, 0, 0, 0.00, ''),
(129, 'Darryl', 'Vidad', 201257492, '$2y$10$h23dMxEvyAo2gTUixaEX7.jdN0STjh6vAq3zvF7PQsdGgV6AwAnf6', 'SetAnniWyAOpqgyj8Yive04qVMa1Z4Rwwf51T0Uk8xa2nNf9tGPtkrbJXqwb', '2016-10-19 17:58:46', '2016-10-20 01:25:49', 0, 0, 40, 0, 0.00, ''),
(130, 'Carlo', 'Valleramos', 201344349, '$2y$10$olpbXFzI0ObpvnbNn8QL7e4Fy3vi9nu2LVF4eADqf/gVg7vBotiIS', 'UFFl0or3iKL0whoBzGjpP5aH6r9nQ4784OiWJeGN20AvmmC5xzbth3WVBGa0', '2016-10-19 18:12:04', '2016-10-19 18:32:07', 0, 0, 0, 0, 0.00, ''),
(131, 'Roro', 'Maojud', 201411111, '$2y$10$.E2wWintKXQ/8dna5LuGXuxre9.lvShDP28nvkk.W5ctN44owuZTm', 'SmpqlqTEScZc5lV4sZXQTdRRHwW55CIgBlcWJKlzkW1z1oHZSaD9qmT26J1c', '2016-10-19 18:17:28', '2016-10-19 18:45:23', 0, 0, 15, 0, 0.00, ''),
(132, 'Ferlie Mae', 'Penido', 201437650, '$2y$10$90troEUIkxn.qu9QayE43.1JULTgRioIBYaNqGr8LD5/wqkSh5She', 'WXxBQCCA8RYqWEQ1szRXYADzwAENkIR6L1WBpBHmjOfsRO4GEl0J5DnHBhtV', '2016-10-19 18:19:40', '2016-10-19 18:35:26', 0, 0, 0, 0, 0.00, ''),
(133, 'Minard John', 'Nombrado', 201458585, '$2y$10$FteBIJXWifNgxVO/hPc6cO0kTfryvdcxA6rmfDqENTA.M12rkCLd2', 'C3iYX3mHp24j0FArvj5j9YCXp1SoluG6PlsM2ofLwaX2ZJD9PwLUOlXhl3B1', '2016-10-19 18:19:57', '2016-10-19 19:16:07', 0, 0, 0, 0, 0.00, ''),
(135, 'Shaishai', 'Yoon', 201356107, '$2y$10$4yKhc7QW2oypJm3oOcXvqu3CdCEDs65h8z9G2jj0TcUGdllbwO3Uq', 'I1uX4t5C355mTJDlNfHczMv3nXfk6DHQaBWciq1XLthRVWy2uCHwyyvQLHbM', '2016-10-19 18:28:39', '2016-10-20 22:27:06', 0, 0, 5, 0, 0.00, ''),
(136, 'open ', 'haus', 201399999, '$2y$10$hjEV8bCfKerDMzODxjcAleZfGYEEWKjvH9a3lD3xY4ziBOPzkufC.', 'ivwGiofA0NEfDXglM8HRX6hWfOI1pCJSwEC6bNbHEGymieCTb9tNfKCOybhf', '2016-10-19 18:29:58', '2016-10-19 18:41:45', 0, 0, 5, 0, 0.00, ''),
(137, 'Aura May', 'Naval', 201506464, '$2y$10$L/m6Ondh2jHawOSfyqA4L.5a6v/wyNT8hb0fMYor0ATxjDbcdOzx.', 'DqN2KbvyaHFkh6g67joePOPeNNM6fMCKQJIQde0nNxPIlYTGErf4ZhG13HAb', '2016-10-19 18:37:19', '2016-10-19 20:54:42', 0, 0, 0, 0, 0.00, ''),
(138, 'Caster', 'Misagal', 201473627, '$2y$10$oNrn3q0FAhiNgoCaqNX0h.osAYSrNnhRhbhsyi3IoAw9Kctv4Z/Nu', 'H8FSJKcsUOeDlVY4Epqh602JwBzUtDX18804DbUmbiZaD6VgAQqEXgT2tz9a', '2016-10-19 18:38:22', '2016-10-19 22:32:37', 0, 0, 10, 0, 0.00, ''),
(139, 'Benjoe', 'Barrio', 201473620, '$2y$10$IXpYxehXtVx2Hf2BIDh6UevA5kfOKYRt2qKvh7ZauY5wzucABmP9e', 'nqmLbMvyEvMjfjR9nKDP6dQcaZtpfTU6NkPSc7balEPWN7FH65XQpxQl4w9d', '2016-10-19 18:54:12', '2016-10-19 18:54:48', 0, 0, 15, 0, 0.00, ''),
(141, 'joy', 'abesamis', 123456789, '$2y$10$arGOgfmNPTe/1Q4E5QFPsuGbt.ZuvF2ZdFoV5jQqAPNmwmLv6qgiG', 'gMwbkfm0WnbiGOJ689Pfaif23FBqDT9HUBFYp2QsEBtJo8fQ25AqTORJHGgY', '2016-10-19 19:26:12', '2016-10-19 21:26:08', 0, 0, 10, 0, 0.00, ''),
(145, 'Jace-on', 'Quijano', 2147483647, '$2y$10$MlBJe5Ihl7bb2xPF/7C/tOzxgi51XIANa/petM8.g0kjN44t4HIee', 'S2FHGBAg5FItJeNmQnguld3ERGvvXImhBYaAL1Ka2OueR1H9MPKjNzFxSEfp', '2016-10-19 22:33:55', '2016-10-20 00:01:41', 0, 0, 0, 0, 0.00, ''),
(146, 'Sean', 'Ballais', 201504562, '$2y$10$C67x.vemhFe95V/JhWJoweZpup8zXXbsPypKvGlj7sEa4M6AI9hxe', 'PuRyfp07MLNVQ7gufqHRO9agvARtO98o8TX3QkYRNGyXc898gnB1KYe6hP2E', '2016-10-20 17:41:45', '2016-10-20 19:56:40', 0, 0, 5, 0, 0.00, ''),
(147, 'Joamir', 'Perpiñan', 201511348, '$2y$10$MxdOVW83708qOWCOVmBuFuNjY4/OijK7aXCqdR4W/4kHOZ5jNstVG', 'AP3td9vqbyGjk0g1va6pFRygN3YGb9rIhsKicQKHl9fHS3G3hojzaLNVq0Ev', '2016-10-20 18:13:46', '2016-10-20 20:01:48', 0, 0, 0, 0, 0.00, ''),
(148, 'Cleto', 'Reyes', 201506376, '$2y$10$SaEdP4rgGq4Y3WRpKDLxEuH1cLOe/xIOmcYwUwcK548NyzRwyD9d6', 'Qrmsbxdv9WOQpuGXQnsYm86sJhctiGOFDtAK32l8rGlyJsNKPrzissv3p8Xo', '2016-10-20 19:07:38', '2016-10-20 22:15:20', 0, 0, 5, 0, 0.00, ''),
(149, 'bug', 'gub', 200500000, '$2y$10$DkVJzmGA5EVgnXbFIiciGuqZk5NEGlyynx2e30f7z07Jk9C3hFVx2', '9dxS7pf9i4MCPELNPgx6Z1SXStZe6Gun2YDjpOrIS9cCLWbktjgwURKYXB2n', '2016-10-20 19:16:02', '2016-10-20 21:04:54', 0, 0, 0, 0, 0.00, ''),
(150, 'Restituto', 'Singaw', 111, '$2y$10$lmsB8Z4Xi1Y5b2lH.N.pvO4dd9gQZF0bsEzMLiP2FvDMRzRCuPeBa', 'rUEQpVrU9KuzqH2zE57dudp5lCNh0mkf3pTkaVGXK0aluD8L78vN2AN2Om6V', '2016-10-20 19:20:47', '2016-10-20 23:33:40', 0, 0, 0, 0, 0.00, ''),
(151, 'Kyell', 'Jeff', 201503613, '$2y$10$3CyDtnJtaCqZDXOpib.sXuQSLyoc5L4n0/OFo9VCOAYFSPJQLPm5i', '8S8ivFSODFpnJzE0VXjRBUbCKzE5CDpinptlbwleGjLWgMNFIpG43Lqt54S0', '2016-10-20 19:39:41', '2016-10-20 20:51:40', 0, 0, 5, 0, 0.00, ''),
(152, 'Jem', 'Hivano', 201355555, '$2y$10$k7KpEewTGP8PVlBtqZQJjuhMV2D4LtqIwpkQ522hQBmonloNnGYWO', '5q3MCRxGjla1RvbbbmL19dLxsemcjRDibCA9cHV2G6WwEAZuXp00n5Hy1TI5', '2016-10-20 19:55:21', '2016-10-20 20:01:57', 0, 0, 15, 0, 0.00, ''),
(153, 'Pao', 'Lim', 201354081, '$2y$10$OxRF6UGsQq2hT1w9Dd1BTeFKC3ji5qE3800zVcr9joShmxRKtWBFq', NULL, '2016-10-20 20:20:17', '2016-10-20 20:20:17', 0, 0, 15, 0, 0.00, ''),
(154, 'samantha dawn', 'candaza', 201504954, '$2y$10$oO81jp6PIaK/HKKWdp2UxeIUPtOxs9qebhZwN4.Nz5AL8vJqUXEAm', 'rNxNXiyWcXwIB5Ka3HRRLCh92PKh5OGWSIaQbfEdmm8UHaXJ5iL8vxaKIh1f', '2016-10-20 20:32:26', '2016-10-21 00:51:16', 0, 0, 0, 0, 0.00, ''),
(155, 'hihii', 'hiih', 200112344, '$2y$10$3qPXi4TDeI0BvzeBn1164.02OToFcjvMDC4HjPzcS8FbsLjEvvOX.', 'eevxqq0nJuqKPFo4mkcqU1uXOOM7mChcK7YxqYGfCSEv4VJPZV4HGgBLyfzZ', '2016-10-20 20:51:19', '2016-10-20 21:56:59', 0, 0, 0, 0, 0.00, ''),
(156, '23123', '12312', 201476252, '$2y$10$oeHVtf8vhr7JhUr.A6gpreBkYSEe7enSwCt7mvZC3DJLDw0zTancW', 'pl34ZyL41jpkQ7J6LOaIpMfobihEz3uWmWUaCBQopY2QkKlVQ81xCi9XcqGE', '2016-10-20 20:53:48', '2016-10-20 22:11:34', 0, 0, 5, 0, 0.00, ''),
(157, 'jo', 'talbo', 201343007, '$2y$10$nxKJcJu4cUp2bUtnsGA/bOfPhEK2892qB64CeDxly1JNO7uIfQhJm', 'JDQMcCNsSU3v70Rwn9f8ojPtZqTJBPL9TfG4F8B7QywcjzE8KOPWXnXoVRsk', '2016-10-20 21:35:12', '2016-10-20 22:16:18', 0, 0, 10, 0, 0.00, ''),
(158, 'nino glenn', 'jazmin', 201511316, '$2y$10$xSlMkkkATpuHXsoLye7Y8eiNSxe3jpKkgo1ae46ka52r5GkQRO52O', 'ROPtSp2wtXnM1ShWtmwhenNztn6v7vxF8i7Sz9rkNCffNqwbw99SZ4vqdI2m', '2016-10-20 21:47:51', '2016-10-20 21:54:45', 0, 0, 10, 0, 0.00, ''),
(159, 'Indira Dimna', 'Apa', 201512355, '$2y$10$XJ.udjJ8VwPp.8KwHtDDROx/dUVV7Za1FLwqY/dv9SEWn0lK9l31i', 'Q34yQ7FGGP0lLqe7WLZUfOKQhZhnPAtP2BbPsFDF5DHDnWcDXfD4M9VauuOs', '2016-10-20 22:14:50', '2016-10-20 22:17:08', 0, 0, 15, 0, 0.00, ''),
(160, 'Venus', 'Go', 201486232, '$2y$10$EYSfQGRb28NC/vjy70U2QugKCi8mOvbJnCcGLTEympwSICYRvsPMS', 'ka0D0fYlsXmhQpwf7hZUSpLMjJf7u9Dj0SBn9M6gAGWLs3pm8FIzMkNNO9ae', '2016-10-20 22:53:13', '2016-10-21 00:45:43', 0, 0, 15, 0, 0.00, ''),
(161, 'Clark', 'Lajarca', 201418532, '$2y$10$24C89wdlOj5JGjRZMI5lCeliNKArqssKGDPVE8cKhwH.AlXPNBccG', 'LWpWg97qn94fEQvmCEfBG4qzHpOaqD2DR8s3YFBxVsUS1fqo6eItTc0fpegK', '2016-10-20 23:19:44', '2016-10-20 23:40:35', 0, 0, 10, 0, 0.00, ''),
(162, 'Allan', 'Sarsoza', 201513839, '$2y$10$SD91bMYajbEEud34yMUBBOcALmStUdj68X2mEoBelnO0KCK0A.JB2', '4sKk8Ydzbkxt0SekZ8m6hoyO9Jz0Dr5ZPIDskcPqvtbb8PxZC4tBds41ucgg', '2016-10-20 23:40:10', '2016-10-21 00:45:57', 0, 0, 15, 0, 0.00, ''),
(163, 'John', 'Snow', 201354044, '$2y$10$/m9X9vQ.FGGCgy3VTAx0LOX8SX1acWIFHmqxk4DzJ51Yv5mMhZuGO', 'vPUdXZ8qFrSc7zA8QF06mm2QhhFmtcgYCUeSWWTuX6YMWJlaG4CcUivpKlyg', '2016-11-09 17:10:51', '2016-11-09 17:21:54', 0, 0, 9980, 0, 0.00, ''),
(164, 'Edward', 'Tan', 201467074, '$2y$10$wP58P6QZ73boOdXg4pnDX.Bo90/uwrpcfw2yaivS7yqt4chARH53q', NULL, '2017-10-17 20:08:21', '2017-10-17 20:08:21', 0, 0, 0, 0, 0.00, ''),
(165, 'John', 'Doe', 201412345, '$2y$10$fHkuHNnfelUKVIkFtiQBruVLMTH/iQojVRiX8T0iGSNShbYgsHTTy', NULL, '2017-10-17 23:37:50', '2017-10-17 23:37:50', 0, 0, 20, 0, 0.00, '');

-- --------------------------------------------------------

--
-- Table structure for table `uservideos`
--

CREATE TABLE `uservideos` (
  `userVideosID` int(10) UNSIGNED NOT NULL,
  `videoID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `isBought` tinyint(1) NOT NULL,
  `vidCount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `uservideos`
--

INSERT INTO `uservideos` (`userVideosID`, `videoID`, `userID`, `isBought`, `vidCount`) VALUES
(1, 30, 201339978, 1, 0),
(2, 53, 201352703, 1, 0),
(3, 122, 201208532, 1, 0),
(4, 85, 201354085, 1, 0),
(5, 30, 201362775, 1, 0),
(6, 30, 201338978, 1, 0),
(7, 31, 201339978, 1, 0),
(8, 98, 201343294, 1, 0),
(9, 31, 201338978, 1, 0),
(10, 56, 201352797, 1, 0),
(11, 64, 201504676, 1, 0),
(12, 32, 201338978, 1, 0),
(13, 1, 201334851, 1, 0),
(14, 1, 201343294, 1, 0),
(15, 33, 201338978, 1, 0),
(16, 30, 201343294, 1, 0),
(17, 53, 201338192, 1, 0),
(18, 54, 201338192, 1, 0),
(19, 65, 201338192, 1, 0),
(20, 65, 201209347, 1, 0),
(21, 34, 201338978, 1, 0),
(22, 18, 201209347, 1, 0),
(23, 39, 201343294, 1, 0),
(24, 53, 201362775, 1, 0),
(25, 53, 201233333, 1, 0),
(26, 30, 201338192, 1, 0),
(27, 37, 201353034, 1, 0),
(28, 39, 201353034, 1, 0),
(29, 21, 201353034, 1, 0),
(30, 93, 201353034, 1, 0),
(31, 29, 201353034, 1, 0),
(32, 1, 201481823, 1, 0),
(33, 18, 201481823, 1, 0),
(34, 37, 201339978, 1, 0),
(35, 19, 201339978, 1, 0),
(36, 53, 201352618, 1, 0),
(37, 1, 201506761, 1, 0),
(38, 54, 201352618, 1, 0),
(39, 143, 201352618, 1, 0),
(40, 1, 201352618, 1, 0),
(41, 65, 201352618, 1, 0),
(42, 98, 201352618, 1, 0),
(43, 18, 201352797, 1, 0),
(44, 33, 201400000, 1, 0),
(45, 30, 201400000, 1, 0),
(46, 143, 201352797, 1, 0),
(47, 1, 201352797, 1, 0),
(48, 3, 201400000, 1, 0),
(49, 19, 201400000, 1, 0),
(50, 36, 201400000, 1, 0),
(51, 18, 201352618, 1, 0),
(52, 12, 201400000, 1, 0),
(53, 57, 201400000, 1, 0),
(54, 91, 201400000, 1, 0),
(55, 77, 201400000, 1, 0),
(56, 150, 201400000, 1, 0),
(57, 107, 201400000, 1, 0),
(58, 64, 201338192, 1, 0),
(59, 98, 201338192, 1, 0),
(60, 143, 201338192, 1, 0),
(61, 18, 201338192, 1, 0),
(62, 52, 201338192, 1, 0),
(63, 1, 201339978, 1, 0),
(64, 2, 201339978, 1, 0),
(65, 18, 201339978, 1, 0),
(66, 29, 201339978, 1, 0),
(67, 158, 201352703, 1, 0),
(68, 30, 201352703, 1, 0),
(69, 143, 201352703, 1, 0),
(70, 65, 201353036, 1, 0),
(71, 87, 201353037, 1, 0),
(72, 66, 201353036, 1, 0),
(73, 227, 201398868, 1, 0),
(74, 237, 201353036, 1, 0),
(75, 143, 201353036, 1, 0),
(76, 18, 201504604, 1, 0),
(77, 145, 201352797, 1, 0),
(78, 30, 201424468, 1, 0),
(79, 31, 201424468, 1, 0),
(80, 143, 201184363, 1, 0),
(81, 53, 201581810, 1, 0),
(82, 30, 201581810, 1, 0),
(83, 32, 201334312, 1, 0),
(84, 96, 201234437, 1, 0),
(85, 35, 201338978, 1, 0),
(86, 189, 201367501, 1, 0),
(87, 36, 201338978, 1, 0),
(88, 143, 999999999, 1, 0),
(89, 33, 201334312, 1, 0),
(90, 34, 201334312, 1, 0),
(91, 37, 201338978, 1, 0),
(92, 189, 201124779, 1, 0),
(93, 35, 201334312, 1, 0),
(94, 38, 201338978, 1, 0),
(95, 225, 201352618, 1, 0),
(96, 144, 999999999, 1, 0),
(97, 39, 201338978, 1, 0),
(98, 30, 201511111, 1, 0),
(99, 40, 201338978, 1, 0),
(100, 194, 201352618, 1, 0),
(101, 85, 201511111, 1, 0),
(102, 248, 201511111, 1, 0),
(103, 236, 201353034, 1, 0),
(104, 145, 999999999, 1, 0),
(105, 31, 201362775, 1, 0),
(106, 64, 201344349, 1, 0),
(107, 63, 201344349, 1, 0),
(108, 41, 201338978, 1, 0),
(109, 143, 201411111, 1, 0),
(110, 98, 201458585, 1, 0),
(111, 164, 201257492, 1, 0),
(112, 189, 201356107, 1, 0),
(113, 143, 201458585, 1, 0),
(114, 32, 201362775, 1, 0),
(115, 42, 201338978, 1, 0),
(116, 227, 201338192, 1, 0),
(117, 225, 201338192, 1, 0),
(118, 53, 201473627, 1, 0),
(119, 165, 201257492, 1, 0),
(120, 54, 201473627, 1, 0),
(121, 143, 201355555, 1, 0),
(122, 143, 123456789, 1, 0),
(123, 43, 201338978, 1, 0),
(124, 248, 200112345, 1, 0),
(125, 248, 201209347, 1, 0),
(126, 55, 201473627, 1, 0),
(127, 56, 201473627, 1, 0),
(128, 57, 201473627, 1, 0),
(129, 58, 201473627, 1, 0),
(130, 33, 201362775, 1, 0),
(131, 59, 201473627, 1, 0),
(132, 34, 201362775, 1, 0),
(133, 144, 123456789, 1, 0),
(134, 35, 201362775, 1, 0),
(135, 143, 201438874, 1, 0),
(136, 60, 201473627, 1, 0),
(137, 144, 201438874, 1, 0),
(138, 36, 201362775, 1, 0),
(139, 61, 201473627, 1, 0),
(140, 37, 201362775, 1, 0),
(141, 30, 210241244, 1, 0),
(142, 30, 2147483647, 1, 0),
(143, 150, 201438874, 1, 0),
(144, 31, 210241244, 1, 0),
(145, 144, 201322222, 1, 0),
(146, 31, 2147483647, 1, 0),
(147, 32, 210241244, 1, 0),
(148, 151, 201438874, 1, 0),
(149, 32, 2147483647, 1, 0),
(150, 38, 201362775, 1, 0),
(151, 166, 201257492, 1, 0),
(152, 167, 201257492, 1, 0),
(153, 65, 201343294, 1, 0),
(154, 248, 201343294, 1, 0),
(155, 30, 201353034, 1, 0),
(156, 18, 201353034, 1, 0),
(157, 53, 201353034, 1, 0),
(158, 18, 201343294, 1, 0),
(159, 30, 12345, 1, 0),
(160, 65, 12345, 1, 0),
(161, 18, 12345, 1, 0),
(162, 39, 201362775, 1, 0),
(163, 65, 201355555, 1, 0),
(164, 40, 201362775, 1, 0),
(165, 248, 200112344, 1, 0),
(166, 190, 201356107, 1, 0),
(167, 191, 201356107, 1, 0),
(168, 225, 201339978, 1, 0),
(169, 41, 201362775, 1, 0),
(170, 42, 201362775, 1, 0),
(171, 157, 201338192, 1, 0),
(172, 53, 201354044, 1, 0),
(173, 197, 201354044, 1, 0),
(174, 65, 201352703, 1, 0),
(175, 97, 201367501, 1, 0),
(176, 53, 201467074, 1, 0),
(177, 30, 201467074, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `videoID` int(10) UNSIGNED NOT NULL,
  `videoName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `videoDesc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `videoURL` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`videoID`, `videoName`, `videoDesc`, `videoURL`) VALUES
(1, 'Kokoro Connect Episode 1', 'Episode 1 of the series:Kokoro Connect', 'vids/Kokoro Connect/1.flv'),
(2, 'Kokoro Connect Episode 2', 'Episode 2 of the series:Kokoro Connect', 'vids/Kokoro Connect/2.flv'),
(3, 'Kokoro Connect Episode 3', 'Episode 3 of the series:Kokoro Connect', 'vids/Kokoro Connect/3.flv'),
(4, 'Kokoro Connect Episode 4', 'Episode 4 of the series:Kokoro Connect', 'vids/Kokoro Connect/4.flv'),
(5, 'Kokoro Connect Episode 5', 'Episode 5 of the series:Kokoro Connect', 'vids/Kokoro Connect/5.flv'),
(6, 'Kokoro Connect Episode 6', 'Episode 6 of the series:Kokoro Connect', 'vids/Kokoro Connect/6.flv'),
(7, 'Kokoro Connect Episode 7', 'Episode 7 of the series:Kokoro Connect', 'vids/Kokoro Connect/7.flv'),
(8, 'Kokoro Connect Episode 8', 'Episode 8 of the series:Kokoro Connect', 'vids/Kokoro Connect/8.flv'),
(9, 'Kokoro Connect Episode 9', 'Episode 9 of the series:Kokoro Connect', 'vids/Kokoro Connect/9.flv'),
(10, 'Kokoro Connect Episode 10', 'Episode 10 of the series:Kokoro Connect', 'vids/Kokoro Connect/A10.flv'),
(11, 'Kokoro Connect Episode 11', 'Episode 11 of the series:Kokoro Connect', 'vids/Kokoro Connect/A11.flv'),
(12, 'Kokoro Connect Episode 12', 'Episode 12 of the series:Kokoro Connect', 'vids/Kokoro Connect/A12.flv'),
(13, 'Kokoro Connect Episode 13', 'Episode 13 of the series:Kokoro Connect', 'vids/Kokoro Connect/A13.flv'),
(14, 'Kokoro Connect Episode 14', 'Episode 14 of the series:Kokoro Connect', 'vids/Kokoro Connect/A14.flv'),
(15, 'Kokoro Connect Episode 15', 'Episode 15 of the series:Kokoro Connect', 'vids/Kokoro Connect/A15.flv'),
(16, 'Kokoro Connect Episode 16', 'Episode 16 of the series:Kokoro Connect', 'vids/Kokoro Connect/A16.flv'),
(17, 'Kokoro Connect Episode 17', 'Episode 17 of the series:Kokoro Connect', 'vids/Kokoro Connect/A17.flv'),
(18, 'D-Frag! Episode 1', 'Episode 1 of the series:D-Frag!', 'vids/D-Frag!/1.mp4'),
(19, 'D-Frag! Episode 2', 'Episode 2 of the series:D-Frag!', 'vids/D-Frag!/2.mp4'),
(20, 'D-Frag! Episode 3', 'Episode 3 of the series:D-Frag!', 'vids/D-Frag!/3.mp4'),
(21, 'D-Frag! Episode 4', 'Episode 4 of the series:D-Frag!', 'vids/D-Frag!/4.mp4'),
(22, 'D-Frag! Episode 5', 'Episode 5 of the series:D-Frag!', 'vids/D-Frag!/5.mp4'),
(23, 'D-Frag! Episode 6', 'Episode 6 of the series:D-Frag!', 'vids/D-Frag!/6.mp4'),
(24, 'D-Frag! Episode 7', 'Episode 7 of the series:D-Frag!', 'vids/D-Frag!/7.mp4'),
(25, 'D-Frag! Episode 8', 'Episode 8 of the series:D-Frag!', 'vids/D-Frag!/8.mp4'),
(26, 'D-Frag! Episode 9', 'Episode 9 of the series:D-Frag!', 'vids/D-Frag!/9.mp4'),
(27, 'D-Frag! Episode 10', 'Episode 10 of the series:D-Frag!', 'vids/D-Frag!/A10.mp4'),
(28, 'D-Frag! Episode 11', 'Episode 11 of the series:D-Frag!', 'vids/D-Frag!/A11.mp4'),
(29, 'D-Frag! Episode 12', 'Episode 12 of the series:D-Frag!', 'vids/D-Frag!/A12.mp4'),
(30, 'Assassination Classroom Episode 1', 'Episode 1 of the series:Assassination Classroom', 'vids/Assassination Classroom/1.mp4'),
(31, 'Assassination Classroom Episode 2', 'Episode 2 of the series:Assassination Classroom', 'vids/Assassination Classroom/2.mp4'),
(32, 'Assassination Classroom Episode 3', 'Episode 3 of the series:Assassination Classroom', 'vids/Assassination Classroom/3.mp4'),
(33, 'Assassination Classroom Episode 4', 'Episode 4 of the series:Assassination Classroom', 'vids/Assassination Classroom/4.mp4'),
(34, 'Assassination Classroom Episode 5', 'Episode 5 of the series:Assassination Classroom', 'vids/Assassination Classroom/5.mp4'),
(35, 'Assassination Classroom Episode 6', 'Episode 6 of the series:Assassination Classroom', 'vids/Assassination Classroom/6.mp4'),
(36, 'Assassination Classroom Episode 7', 'Episode 7 of the series:Assassination Classroom', 'vids/Assassination Classroom/7.mp4'),
(37, 'Assassination Classroom Episode 8', 'Episode 8 of the series:Assassination Classroom', 'vids/Assassination Classroom/8.mp4'),
(38, 'Assassination Classroom Episode 9', 'Episode 9 of the series:Assassination Classroom', 'vids/Assassination Classroom/9.mp4'),
(39, 'Assassination Classroom Episode 10', 'Episode 10 of the series:Assassination Classroom', 'vids/Assassination Classroom/10.mp4'),
(40, 'Assassination Classroom Episode 11', 'Episode 11 of the series:Assassination Classroom', 'vids/Assassination Classroom/A11.mp4'),
(41, 'Assassination Classroom Episode 12', 'Episode 12 of the series:Assassination Classroom', 'vids/Assassination Classroom/A12.mp4'),
(42, 'Assassination Classroom Episode 13', 'Episode 13 of the series:Assassination Classroom', 'vids/Assassination Classroom/A13.mp4'),
(43, 'Assassination Classroom Episode 14', 'Episode 14 of the series:Assassination Classroom', 'vids/Assassination Classroom/A14.mp4'),
(44, 'Assassination Classroom Episode 15', 'Episode 15 of the series:Assassination Classroom', 'vids/Assassination Classroom/A15.mp4'),
(45, 'Assassination Classroom Episode 16', 'Episode 16 of the series:Assassination Classroom', 'vids/Assassination Classroom/A16.mp4'),
(46, 'Assassination Classroom Episode 17', 'Episode 17 of the series:Assassination Classroom', 'vids/Assassination Classroom/A17.mp4'),
(47, 'Assassination Classroom Episode 18', 'Episode 18 of the series:Assassination Classroom', 'vids/Assassination Classroom/A18.mp4'),
(48, 'Assassination Classroom Episode 19', 'Episode 19 of the series:Assassination Classroom', 'vids/Assassination Classroom/A19.mp4'),
(49, 'Assassination Classroom Episode 20', 'Episode 20 of the series:Assassination Classroom', 'vids/Assassination Classroom/A20.mp4'),
(50, 'Assassination Classroom Episode 21', 'Episode 21 of the series:Assassination Classroom', 'vids/Assassination Classroom/A21.mp4'),
(51, 'Assassination Classroom Episode 22', 'Episode 22 of the series:Assassination Classroom', 'vids/Assassination Classroom/A22.mp4'),
(52, 'Assassination Classroom Episode 23', 'Episode 23 of the series:Assassination Classroom', 'vids/Assassination Classroom/A23.mp4'),
(53, 'One Punch Man Episode 1', 'Episode 1 of the series:One Punch Man', 'vids/One Punch Man/1.mp4'),
(54, 'One Punch Man Episode 2', 'Episode 2 of the series:One Punch Man', 'vids/One Punch Man/2.mp4'),
(55, 'One Punch Man Episode 3', 'Episode 3 of the series:One Punch Man', 'vids/One Punch Man/3.mp4'),
(56, 'One Punch Man Episode 4', 'Episode 4 of the series:One Punch Man', 'vids/One Punch Man/4.mp4'),
(57, 'One Punch Man Episode 5', 'Episode 5 of the series:One Punch Man', 'vids/One Punch Man/5.mp4'),
(58, 'One Punch Man Episode 6', 'Episode 6 of the series:One Punch Man', 'vids/One Punch Man/6.mp4'),
(59, 'One Punch Man Episode 7', 'Episode 7 of the series:One Punch Man', 'vids/One Punch Man/7.mp4'),
(60, 'One Punch Man Episode 8', 'Episode 8 of the series:One Punch Man', 'vids/One Punch Man/8.mp4'),
(61, 'One Punch Man Episode 9', 'Episode 9 of the series:One Punch Man', 'vids/One Punch Man/9.mp4'),
(62, 'One Punch Man Episode 10', 'Episode 10 of the series:One Punch Man', 'vids/One Punch Man/A10.mp4'),
(63, 'One Punch Man Episode 11', 'Episode 11 of the series:One Punch Man', 'vids/One Punch Man/A11.mp4'),
(64, 'One Punch Man Episode 12', 'Episode 12 of the series:One Punch Man', 'vids/One Punch Man/A12.mp4'),
(65, 'Pinocchio Episode 1', 'Episode 1 of the series:Pinocchio', 'vids/Pinocchio/Episode 1.mp4'),
(66, 'Pinocchio Episode 2', 'Episode 2 of the series:Pinocchio', 'vids/Pinocchio/Episode 2.mp4'),
(67, 'Pinocchio Episode 3', 'Episode 3 of the series:Pinocchio', 'vids/Pinocchio/Episode 3.mp4'),
(68, 'Pinocchio Episode 4', 'Episode 4 of the series:Pinocchio', 'vids/Pinocchio/Episode 4.mp4'),
(69, 'Pinocchio Episode 5', 'Episode 5 of the series:Pinocchio', 'vids/Pinocchio/Episode 5.mp4'),
(70, 'Pinocchio Episode 6', 'Episode 6 of the series:Pinocchio', 'vids/Pinocchio/Episode 6.mp4'),
(71, 'Pinocchio Episode 7', 'Episode 7 of the series:Pinocchio', 'vids/Pinocchio/Episode 7.mp4'),
(72, 'Pinocchio Episode 8', 'Episode 8 of the series:Pinocchio', 'vids/Pinocchio/Episode 8.mp4'),
(73, 'Pinocchio Episode 9', 'Episode 9 of the series:Pinocchio', 'vids/Pinocchio/Episode 9.mp4'),
(74, 'Pinocchio Episode 10', 'Episode 10 of the series:Pinocchio', 'vids/Pinocchio/Episode 10.mp4'),
(75, 'Pinocchio Episode 11', 'Episode 11 of the series:Pinocchio', 'vids/Pinocchio/Episode 11.mp4'),
(76, 'Pinocchio Episode 12', 'Episode 12 of the series:Pinocchio', 'vids/Pinocchio/Episode 12.mp4'),
(77, 'Pinocchio Episode 13', 'Episode 13 of the series:Pinocchio', 'vids/Pinocchio/Episode 13.mp4'),
(78, 'Pinocchio Episode 14', 'Episode 14 of the series:Pinocchio', 'vids/Pinocchio/Episode 14.mp4'),
(79, 'Pinocchio Episode 15', 'Episode 15 of the series:Pinocchio', 'vids/Pinocchio/Episode 15.mp4'),
(80, 'Pinocchio Episode 16', 'Episode 16 of the series:Pinocchio', 'vids/Pinocchio/Episode 16.mp4'),
(81, 'Pinocchio Episode 17', 'Episode 17 of the series:Pinocchio', 'vids/Pinocchio/Episode 17.mp4'),
(82, 'Pinocchio Episode 18', 'Episode 18 of the series:Pinocchio', 'vids/Pinocchio/Episode 18.mp4'),
(83, 'Pinocchio Episode 19', 'Episode 19 of the series:Pinocchio', 'vids/Pinocchio/Episode 19.mp4'),
(84, 'Pinocchio Episode 20', 'Episode 20 of the series:Pinocchio', 'vids/Pinocchio/Episode 20.mp4'),
(85, 'White Album 2 Episode 1', 'Episode 1 of the series:White Album 2', 'vids/White Album 2/1.mp4'),
(86, 'White Album 2 Episode 2', 'Episode 2 of the series:White Album 2', 'vids/White Album 2/2.mp4'),
(87, 'White Album 2 Episode 3', 'Episode 3 of the series:White Album 2', 'vids/White Album 2/3.mp4'),
(88, 'White Album 2 Episode 4', 'Episode 4 of the series:White Album 2', 'vids/White Album 2/4.mp4'),
(89, 'White Album 2 Episode 5', 'Episode 5 of the series:White Album 2', 'vids/White Album 2/5.mp4'),
(90, 'White Album 2 Episode 6', 'Episode 6 of the series:White Album 2', 'vids/White Album 2/6.mp4'),
(91, 'White Album 2 Episode 7', 'Episode 7 of the series:White Album 2', 'vids/White Album 2/7.mp4'),
(92, 'White Album 2 Episode 8', 'Episode 8 of the series:White Album 2', 'vids/White Album 2/8.mp4'),
(93, 'White Album 2 Episode 9', 'Episode 9 of the series:White Album 2', 'vids/White Album 2/9.mp4'),
(94, 'White Album 2 Episode 10', 'Episode 10 of the series:White Album 2', 'vids/White Album 2/A10.mp4'),
(95, 'White Album 2 Episode 11', 'Episode 11 of the series:White Album 2', 'vids/White Album 2/A11.mp4'),
(96, 'White Album 2 Episode 12', 'Episode 12 of the series:White Album 2', 'vids/White Album 2/A12.mp4'),
(97, 'White Album 2 Episode 13', 'Episode 13 of the series:White Album 2', 'vids/White Album 2/A13.mp4'),
(98, '#Reply 1997 Episode 1', 'Episode 1 of the series:#Reply 1997', 'vids/#Reply 1997/Reply 1997 Episode 1-1.mp4'),
(99, '#Reply 1997 Episode 2', 'Episode 2 of the series:#Reply 1997', 'vids/#Reply 1997/Reply 1997 Episode 1-2.mp4'),
(100, '#Reply 1997 Episode 3', 'Episode 3 of the series:#Reply 1997', 'vids/#Reply 1997/Reply 1997 Episode 1-3.mp4'),
(101, '#Reply 1997 Episode 4', 'Episode 4 of the series:#Reply 1997', 'vids/#Reply 1997/Reply 1997 Episode 10-1.mp4'),
(102, '#Reply 1997 Episode 5', 'Episode 5 of the series:#Reply 1997', 'vids/#Reply 1997/Reply 1997 Episode 10-2.mp4'),
(103, '#Reply 1997 Episode 6', 'Episode 6 of the series:#Reply 1997', 'vids/#Reply 1997/Reply 1997 Episode 10-3.mp4'),
(104, '#Reply 1997 Episode 7', 'Episode 7 of the series:#Reply 1997', 'vids/#Reply 1997/Reply 1997 Episode 11-1.mp4'),
(105, '#Reply 1997 Episode 8', 'Episode 8 of the series:#Reply 1997', 'vids/#Reply 1997/Reply 1997 Episode 11-2.mp4'),
(106, '#Reply 1997 Episode 9', 'Episode 9 of the series:#Reply 1997', 'vids/#Reply 1997/Reply 1997 Episode 11-3.mp4'),
(107, '#Reply 1997 Episode 10', 'Episode 10 of the series:#Reply 1997', 'vids/#Reply 1997/Reply 1997 Episode 12-1.mp4'),
(108, '#Reply 1997 Episode 11', 'Episode 11 of the series:#Reply 1997', 'vids/#Reply 1997/Reply 1997 Episode 12-2.mp4'),
(109, '#Reply 1997 Episode 12', 'Episode 12 of the series:#Reply 1997', 'vids/#Reply 1997/Reply 1997 Episode 12-3.mp4'),
(110, '#Reply 1997 Episode 13', 'Episode 13 of the series:#Reply 1997', 'vids/#Reply 1997/Reply 1997 Episode 13-1.mp4'),
(111, '#Reply 1997 Episode 14', 'Episode 14 of the series:#Reply 1997', 'vids/#Reply 1997/Reply 1997 Episode 13-2.mp4'),
(112, '#Reply 1997 Episode 15', 'Episode 15 of the series:#Reply 1997', 'vids/#Reply 1997/Reply 1997 Episode 13-3.mp4'),
(113, '#Reply 1997 Episode 16', 'Episode 16 of the series:#Reply 1997', 'vids/#Reply 1997/Reply 1997 Episode 14-1.mp4'),
(114, '#Reply 1997 Episode 17', 'Episode 17 of the series:#Reply 1997', 'vids/#Reply 1997/Reply 1997 Episode 14-2.mp4'),
(115, '#Reply 1997 Episode 18', 'Episode 18 of the series:#Reply 1997', 'vids/#Reply 1997/Reply 1997 Episode 14-3.mp4'),
(116, '#Reply 1997 Episode 19', 'Episode 19 of the series:#Reply 1997', 'vids/#Reply 1997/Reply 1997 Episode 15-1.mp4'),
(117, '#Reply 1997 Episode 20', 'Episode 20 of the series:#Reply 1997', 'vids/#Reply 1997/Reply 1997 Episode 15-2.mp4'),
(118, '#Reply 1997 Episode 21', 'Episode 21 of the series:#Reply 1997', 'vids/#Reply 1997/Reply 1997 Episode 15-3.mp4'),
(119, '#Reply 1997 Episode 22', 'Episode 22 of the series:#Reply 1997', 'vids/#Reply 1997/Reply 1997 Episode 16-1.mp4'),
(120, '#Reply 1997 Episode 23', 'Episode 23 of the series:#Reply 1997', 'vids/#Reply 1997/Reply 1997 Episode 16-2.mp4'),
(121, '#Reply 1997 Episode 24', 'Episode 24 of the series:#Reply 1997', 'vids/#Reply 1997/Reply 1997 Episode 16-3.mp4'),
(122, '#Reply 1997 Episode 25', 'Episode 25 of the series:#Reply 1997', 'vids/#Reply 1997/Reply 1997 Episode 16-4.mp4'),
(123, '#Reply 1997 Episode 26', 'Episode 26 of the series:#Reply 1997', 'vids/#Reply 1997/Reply 1997 Episode 2-1.mp4'),
(124, '#Reply 1997 Episode 27', 'Episode 27 of the series:#Reply 1997', 'vids/#Reply 1997/Reply 1997 Episode 2-2.mp4'),
(125, '#Reply 1997 Episode 28', 'Episode 28 of the series:#Reply 1997', 'vids/#Reply 1997/Reply 1997 Episode 2-3.mp4'),
(126, '#Reply 1997 Episode 29', 'Episode 29 of the series:#Reply 1997', 'vids/#Reply 1997/Reply 1997 Episode 3-1.mp4'),
(127, '#Reply 1997 Episode 30', 'Episode 30 of the series:#Reply 1997', 'vids/#Reply 1997/Reply 1997 Episode 3-2.mp4'),
(128, '#Reply 1997 Episode 31', 'Episode 31 of the series:#Reply 1997', 'vids/#Reply 1997/Reply 1997 Episode 3-3.mp4'),
(129, '#Reply 1997 Episode 32', 'Episode 32 of the series:#Reply 1997', 'vids/#Reply 1997/Reply 1997 Episode 4-1.mp4'),
(130, '#Reply 1997 Episode 33', 'Episode 33 of the series:#Reply 1997', 'vids/#Reply 1997/Reply 1997 Episode 4-2.mp4'),
(131, '#Reply 1997 Episode 34', 'Episode 34 of the series:#Reply 1997', 'vids/#Reply 1997/Reply 1997 Episode 4-3.mp4'),
(132, '#Reply 1997 Episode 35', 'Episode 35 of the series:#Reply 1997', 'vids/#Reply 1997/Reply 1997 Episode 5-1.mp4'),
(133, '#Reply 1997 Episode 36', 'Episode 36 of the series:#Reply 1997', 'vids/#Reply 1997/Reply 1997 Episode 5-2.mp4'),
(134, '#Reply 1997 Episode 37', 'Episode 37 of the series:#Reply 1997', 'vids/#Reply 1997/Reply 1997 Episode 5-3.mp4'),
(135, '#Reply 1997 Episode 38', 'Episode 38 of the series:#Reply 1997', 'vids/#Reply 1997/Reply 1997 Episode 6-1.mp4'),
(136, '#Reply 1997 Episode 39', 'Episode 39 of the series:#Reply 1997', 'vids/#Reply 1997/Reply 1997 Episode 6-2.mp4'),
(137, '#Reply 1997 Episode 40', 'Episode 40 of the series:#Reply 1997', 'vids/#Reply 1997/Reply 1997 Episode 6-3.mp4'),
(138, '#Reply 1997 Episode 41', 'Episode 41 of the series:#Reply 1997', 'vids/#Reply 1997/Reply 1997 Episode 8-1.mp4'),
(139, '#Reply 1997 Episode 42', 'Episode 42 of the series:#Reply 1997', 'vids/#Reply 1997/Reply 1997 Episode 8-2.mp4'),
(140, '#Reply 1997 Episode 43', 'Episode 43 of the series:#Reply 1997', 'vids/#Reply 1997/Reply 1997 Episode 8-3.mp4'),
(141, '#Reply 1997 Episode 44', 'Episode 44 of the series:#Reply 1997', 'vids/#Reply 1997/Reply 1997 Episode 9-2.mp4'),
(142, '#Reply 1997 Episode 45', 'Episode 45 of the series:#Reply 1997', 'vids/#Reply 1997/Reply 1997 Episode 9-3.mp4'),
(143, 'She Was Pretty Episode 1', 'Episode 1 of the series:She Was Pretty', 'vids/She Was Pretty/01.mp4'),
(144, 'She Was Pretty Episode 2', 'Episode 2 of the series:She Was Pretty', 'vids/She Was Pretty/02.mp4'),
(145, 'She Was Pretty Episode 3', 'Episode 3 of the series:She Was Pretty', 'vids/She Was Pretty/04.mp4'),
(146, 'She Was Pretty Episode 4', 'Episode 4 of the series:She Was Pretty', 'vids/She Was Pretty/05.mp4'),
(147, 'She Was Pretty Episode 5', 'Episode 5 of the series:She Was Pretty', 'vids/She Was Pretty/06.mp4'),
(148, 'She Was Pretty Episode 6', 'Episode 6 of the series:She Was Pretty', 'vids/She Was Pretty/07.mp4'),
(149, 'She Was Pretty Episode 7', 'Episode 7 of the series:She Was Pretty', 'vids/She Was Pretty/08.mp4'),
(150, 'She Was Pretty Episode 8', 'Episode 8 of the series:She Was Pretty', 'vids/She Was Pretty/09.mp4'),
(151, 'She Was Pretty Episode 9', 'Episode 9 of the series:She Was Pretty', 'vids/She Was Pretty/10.mp4'),
(152, 'She Was Pretty Episode 10', 'Episode 10 of the series:She Was Pretty', 'vids/She Was Pretty/11.mp4'),
(153, 'She Was Pretty Episode 11', 'Episode 11 of the series:She Was Pretty', 'vids/She Was Pretty/12.mp4'),
(154, 'She Was Pretty Episode 12', 'Episode 12 of the series:She Was Pretty', 'vids/She Was Pretty/13.mp4'),
(155, 'She Was Pretty Episode 13', 'Episode 13 of the series:She Was Pretty', 'vids/She Was Pretty/14.mp4'),
(156, 'She Was Pretty Episode 14', 'Episode 14 of the series:She Was Pretty', 'vids/She Was Pretty/15.mp4'),
(157, 'She Was Pretty Episode 15', 'Episode 15 of the series:She Was Pretty', 'vids/She Was Pretty/16.mp4'),
(158, 'KHR Episode 1', 'Episode 1 of the series:KHR', 'vids/KHR/Episode 020.mp4'),
(159, 'KHR Episode 2', 'Episode 2 of the series:KHR', 'vids/KHR/Episode 021.mp4'),
(160, 'KHR Episode 3', 'Episode 3 of the series:KHR', 'vids/KHR/Episode 066.mp4'),
(161, 'KHR Episode 1', 'Episode 1 of the series:KHR', 'vids/KHR/Episode 020.mp4'),
(162, 'KHR Episode 2', 'Episode 2 of the series:KHR', 'vids/KHR/Episode 021.mp4'),
(163, 'KHR Episode 3', 'Episode 3 of the series:KHR', 'vids/KHR/Episode 066.mp4'),
(164, 'Kiseijuu sei no kakuritsu Episode 1', 'Episode 1 of the series:Kiseijuu sei no kakuritsu', 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_01.mp4'),
(165, 'Kiseijuu sei no kakuritsu Episode 2', 'Episode 2 of the series:Kiseijuu sei no kakuritsu', 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_02.mp4'),
(166, 'Kiseijuu sei no kakuritsu Episode 3', 'Episode 3 of the series:Kiseijuu sei no kakuritsu', 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_03.mp4'),
(167, 'Kiseijuu sei no kakuritsu Episode 4', 'Episode 4 of the series:Kiseijuu sei no kakuritsu', 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_04_2.mp4'),
(168, 'Kiseijuu sei no kakuritsu Episode 5', 'Episode 5 of the series:Kiseijuu sei no kakuritsu', 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_05.mp4'),
(169, 'Kiseijuu sei no kakuritsu Episode 6', 'Episode 6 of the series:Kiseijuu sei no kakuritsu', 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_06.mp4'),
(170, 'Kiseijuu sei no kakuritsu Episode 7', 'Episode 7 of the series:Kiseijuu sei no kakuritsu', 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_07.mp4'),
(171, 'Kiseijuu sei no kakuritsu Episode 8', 'Episode 8 of the series:Kiseijuu sei no kakuritsu', 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_08.mp4'),
(172, 'Kiseijuu sei no kakuritsu Episode 9', 'Episode 9 of the series:Kiseijuu sei no kakuritsu', 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_09.mp4'),
(173, 'Kiseijuu sei no kakuritsu Episode 10', 'Episode 10 of the series:Kiseijuu sei no kakuritsu', 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_10.mp4'),
(174, 'Kiseijuu sei no kakuritsu Episode 11', 'Episode 11 of the series:Kiseijuu sei no kakuritsu', 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_11.mp4'),
(175, 'Kiseijuu sei no kakuritsu Episode 12', 'Episode 12 of the series:Kiseijuu sei no kakuritsu', 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_12.mp4'),
(176, 'Kiseijuu sei no kakuritsu Episode 13', 'Episode 13 of the series:Kiseijuu sei no kakuritsu', 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_13_2.mp4'),
(177, 'Kiseijuu sei no kakuritsu Episode 14', 'Episode 14 of the series:Kiseijuu sei no kakuritsu', 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_14.mp4'),
(178, 'Kiseijuu sei no kakuritsu Episode 15', 'Episode 15 of the series:Kiseijuu sei no kakuritsu', 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_15.mp4'),
(179, 'Kiseijuu sei no kakuritsu Episode 16', 'Episode 16 of the series:Kiseijuu sei no kakuritsu', 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_16.mp4'),
(180, 'Kiseijuu sei no kakuritsu Episode 17', 'Episode 17 of the series:Kiseijuu sei no kakuritsu', 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_17.mp4'),
(181, 'Kiseijuu sei no kakuritsu Episode 18', 'Episode 18 of the series:Kiseijuu sei no kakuritsu', 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_18.mp4'),
(182, 'Kiseijuu sei no kakuritsu Episode 19', 'Episode 19 of the series:Kiseijuu sei no kakuritsu', 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_19.mp4'),
(183, 'Kiseijuu sei no kakuritsu Episode 20', 'Episode 20 of the series:Kiseijuu sei no kakuritsu', 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_20.mp4'),
(184, 'Kiseijuu sei no kakuritsu Episode 21', 'Episode 21 of the series:Kiseijuu sei no kakuritsu', 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_21.mp4'),
(185, 'Kiseijuu sei no kakuritsu Episode 22', 'Episode 22 of the series:Kiseijuu sei no kakuritsu', 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_22.mp4'),
(186, 'Kiseijuu sei no kakuritsu Episode 23', 'Episode 23 of the series:Kiseijuu sei no kakuritsu', 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_23.mp4'),
(187, 'Kiseijuu sei no kakuritsu Episode 24', 'Episode 24 of the series:Kiseijuu sei no kakuritsu', 'vids/Kiseijuu sei no kakuritsu/kiseijuu_sei_no_kakuritsu_-_24.mp4'),
(188, 'Magi Kingdom of Magic Episode 1', 'Episode 1 of the series:Magi Kingdom of Magic', 'vids/Magi Kingdom of Magic/Magi  The Kingdom Of Magic Episode 07 Sub - Watch Magi  The Kingdom Of Magic 7 Online   AnimeSeason.com.mp4'),
(189, 'Seven Deadly Sins Episode 1', 'Episode 1 of the series:Seven Deadly Sins', 'vids/Seven Deadly Sins/1.mp4'),
(190, 'Seven Deadly Sins Episode 2', 'Episode 2 of the series:Seven Deadly Sins', 'vids/Seven Deadly Sins/2.mp4'),
(191, 'Seven Deadly Sins Episode 3', 'Episode 3 of the series:Seven Deadly Sins', 'vids/Seven Deadly Sins/3.mp4'),
(192, 'Seven Deadly Sins Episode 4', 'Episode 4 of the series:Seven Deadly Sins', 'vids/Seven Deadly Sins/4.mp4'),
(193, 'Seven Deadly Sins Episode 5', 'Episode 5 of the series:Seven Deadly Sins', 'vids/Seven Deadly Sins/5.mp4'),
(194, 'Seven Deadly Sins Episode 6', 'Episode 6 of the series:Seven Deadly Sins', 'vids/Seven Deadly Sins/6.mp4'),
(195, 'Seven Deadly Sins Episode 7', 'Episode 7 of the series:Seven Deadly Sins', 'vids/Seven Deadly Sins/7.mp4'),
(196, 'Seven Deadly Sins Episode 8', 'Episode 8 of the series:Seven Deadly Sins', 'vids/Seven Deadly Sins/8.mp4'),
(197, 'Seven Deadly Sins Episode 9', 'Episode 9 of the series:Seven Deadly Sins', 'vids/Seven Deadly Sins/9.mp4'),
(198, 'Seven Deadly Sins Episode 10', 'Episode 10 of the series:Seven Deadly Sins', 'vids/Seven Deadly Sins/10.mp4'),
(199, 'Seven Deadly Sins Episode 11', 'Episode 11 of the series:Seven Deadly Sins', 'vids/Seven Deadly Sins/A11.mp4'),
(200, 'Seven Deadly Sins Episode 12', 'Episode 12 of the series:Seven Deadly Sins', 'vids/Seven Deadly Sins/A12.mp4'),
(201, 'Seven Deadly Sins Episode 13', 'Episode 13 of the series:Seven Deadly Sins', 'vids/Seven Deadly Sins/A13.mp4'),
(202, 'Seven Deadly Sins Episode 14', 'Episode 14 of the series:Seven Deadly Sins', 'vids/Seven Deadly Sins/A14.mp4'),
(203, 'Seven Deadly Sins Episode 15', 'Episode 15 of the series:Seven Deadly Sins', 'vids/Seven Deadly Sins/A15.mp4'),
(204, 'Seven Deadly Sins Episode 16', 'Episode 16 of the series:Seven Deadly Sins', 'vids/Seven Deadly Sins/A16.mp4'),
(205, 'Seven Deadly Sins Episode 17', 'Episode 17 of the series:Seven Deadly Sins', 'vids/Seven Deadly Sins/A17.mp4'),
(206, 'Seven Deadly Sins Episode 18', 'Episode 18 of the series:Seven Deadly Sins', 'vids/Seven Deadly Sins/A18.mp4'),
(207, 'Seven Deadly Sins Episode 19', 'Episode 19 of the series:Seven Deadly Sins', 'vids/Seven Deadly Sins/A19.mp4'),
(208, 'Seven Deadly Sins Episode 20', 'Episode 20 of the series:Seven Deadly Sins', 'vids/Seven Deadly Sins/A20.mp4'),
(209, 'Seven Deadly Sins Episode 21', 'Episode 21 of the series:Seven Deadly Sins', 'vids/Seven Deadly Sins/A21.mp4'),
(210, 'Seven Deadly Sins Episode 22', 'Episode 22 of the series:Seven Deadly Sins', 'vids/Seven Deadly Sins/A22.mp4'),
(211, 'Seven Deadly Sins Episode 23', 'Episode 23 of the series:Seven Deadly Sins', 'vids/Seven Deadly Sins/A23.mp4'),
(212, 'Seven Deadly Sins Episode 24', 'Episode 24 of the series:Seven Deadly Sins', 'vids/Seven Deadly Sins/A24.mp4'),
(213, 'Tokyo Ghoul S1 Episode 1', 'Episode 1 of the series:Tokyo Ghoul S1', 'vids/Tokyo Ghoul S1/episode 1.mp4'),
(214, 'Tokyo Ghoul S1 Episode 2', 'Episode 2 of the series:Tokyo Ghoul S1', 'vids/Tokyo Ghoul S1/episode 2.mp4'),
(215, 'Tokyo Ghoul S1 Episode 3', 'Episode 3 of the series:Tokyo Ghoul S1', 'vids/Tokyo Ghoul S1/episode 3.mp4'),
(216, 'Tokyo Ghoul S1 Episode 4', 'Episode 4 of the series:Tokyo Ghoul S1', 'vids/Tokyo Ghoul S1/episode 4.mp4'),
(217, 'Tokyo Ghoul S1 Episode 5', 'Episode 5 of the series:Tokyo Ghoul S1', 'vids/Tokyo Ghoul S1/episode 5.mp4'),
(218, 'Tokyo Ghoul S1 Episode 6', 'Episode 6 of the series:Tokyo Ghoul S1', 'vids/Tokyo Ghoul S1/episode 6.mp4'),
(219, 'Tokyo Ghoul S1 Episode 7', 'Episode 7 of the series:Tokyo Ghoul S1', 'vids/Tokyo Ghoul S1/episode 7.mp4'),
(220, 'Tokyo Ghoul S1 Episode 8', 'Episode 8 of the series:Tokyo Ghoul S1', 'vids/Tokyo Ghoul S1/episode 8.mp4'),
(221, 'Tokyo Ghoul S1 Episode 9', 'Episode 9 of the series:Tokyo Ghoul S1', 'vids/Tokyo Ghoul S1/episode 9.mp4'),
(222, 'Tokyo Ghoul S1 Episode 10', 'Episode 10 of the series:Tokyo Ghoul S1', 'vids/Tokyo Ghoul S1/episode A10.mp4'),
(223, 'Tokyo Ghoul S1 Episode 11', 'Episode 11 of the series:Tokyo Ghoul S1', 'vids/Tokyo Ghoul S1/episode A11.mp4'),
(224, 'Tokyo Ghoul S1 Episode 12', 'Episode 12 of the series:Tokyo Ghoul S1', 'vids/Tokyo Ghoul S1/episode A12.mp4'),
(225, 'Tokyo Ghoul S2 Episode 1', 'Episode 1 of the series:Tokyo Ghoul S2', 'vids/Tokyo Ghoul S2/TG s2 ep1.mp4'),
(226, 'Tokyo Ghoul S2 Episode 2', 'Episode 2 of the series:Tokyo Ghoul S2', 'vids/Tokyo Ghoul S2/TG s2 ep2.mp4'),
(227, 'Tokyo Ghoul S2 Episode 3', 'Episode 3 of the series:Tokyo Ghoul S2', 'vids/Tokyo Ghoul S2/TG s2 ep3.mp4'),
(228, 'Tokyo Ghoul S2 Episode 4', 'Episode 4 of the series:Tokyo Ghoul S2', 'vids/Tokyo Ghoul S2/TG s2 ep4.mp4'),
(229, 'Tokyo Ghoul S2 Episode 5', 'Episode 5 of the series:Tokyo Ghoul S2', 'vids/Tokyo Ghoul S2/TG s2 ep5.mp4'),
(230, 'Tokyo Ghoul S2 Episode 6', 'Episode 6 of the series:Tokyo Ghoul S2', 'vids/Tokyo Ghoul S2/TG s2 ep6.mp4'),
(231, 'Tokyo Ghoul S2 Episode 7', 'Episode 7 of the series:Tokyo Ghoul S2', 'vids/Tokyo Ghoul S2/TG s2 ep7.mp4'),
(232, 'Tokyo Ghoul S2 Episode 8', 'Episode 8 of the series:Tokyo Ghoul S2', 'vids/Tokyo Ghoul S2/TG s2 ep8.mp4'),
(233, 'Tokyo Ghoul S2 Episode 9', 'Episode 9 of the series:Tokyo Ghoul S2', 'vids/Tokyo Ghoul S2/TG s2 ep9.mp4'),
(234, 'Tokyo Ghoul S2 Episode 10', 'Episode 10 of the series:Tokyo Ghoul S2', 'vids/Tokyo Ghoul S2/TG s2 epA10.mp4'),
(235, 'Tokyo Ghoul S2 Episode 11', 'Episode 11 of the series:Tokyo Ghoul S2', 'vids/Tokyo Ghoul S2/TG s2 epA11.mp4'),
(236, 'Tokyo Ghoul S2 Episode 12', 'Episode 12 of the series:Tokyo Ghoul S2', 'vids/Tokyo Ghoul S2/TG s2 epA12.mp4'),
(237, 'Good Doctor Episode 1', 'Episode 1 of the series:Good Doctor', 'vids/Good Doctor/Good Doctor Episode 12 Part 1.mp4'),
(238, 'Good Doctor Episode 2', 'Episode 2 of the series:Good Doctor', 'vids/Good Doctor/Good Doctor Episode 12 Part 2.mp4'),
(239, 'Good Doctor Episode 3', 'Episode 3 of the series:Good Doctor', 'vids/Good Doctor/Good Doctor Episode 12 Part 3.mp4'),
(240, 'Good Doctor Episode 4', 'Episode 4 of the series:Good Doctor', 'vids/Good Doctor/Good Doctor Episode 12 Part 4.mp4'),
(241, 'Good Doctor Episode 5', 'Episode 5 of the series:Good Doctor', 'vids/Good Doctor/good_doctor_-_13_clip1.mp4'),
(242, 'Good Doctor Episode 6', 'Episode 6 of the series:Good Doctor', 'vids/Good Doctor/good_doctor_-_15_clip2_2.mp4'),
(243, 'Good Doctor Episode 7', 'Episode 7 of the series:Good Doctor', 'vids/Good Doctor/good_doctor_-_16_clip1.mp4'),
(244, 'Good Doctor Episode 8', 'Episode 8 of the series:Good Doctor', 'vids/Good Doctor/good_doctor_-_17_clip1.mp4'),
(245, 'Good Doctor Episode 9', 'Episode 9 of the series:Good Doctor', 'vids/Good Doctor/good_doctor_-_18_clip1.mp4'),
(246, 'Good Doctor Episode 10', 'Episode 10 of the series:Good Doctor', 'vids/Good Doctor/good_doctor_-_19_clip1.mp4'),
(247, 'Good Doctor Episode 11', 'Episode 11 of the series:Good Doctor', 'vids/Good Doctor/good_doctor_-_20_clip1.mp4'),
(248, 'Cheese in the Trap Episode 1', 'Episode 1 of the series:Cheese in the Trap', 'vids/Cheese in the Trap/Cheese in the Trap episode 1.mp4'),
(249, 'Cheese in the Trap Episode 2', 'Episode 2 of the series:Cheese in the Trap', 'vids/Cheese in the Trap/Cheese in the Trap episode 10.mp4'),
(250, 'Cheese in the Trap Episode 3', 'Episode 3 of the series:Cheese in the Trap', 'vids/Cheese in the Trap/Cheese in the Trap episode 11.mp4'),
(251, 'Cheese in the Trap Episode 4', 'Episode 4 of the series:Cheese in the Trap', 'vids/Cheese in the Trap/Cheese in the Trap episode 12.mp4'),
(252, 'Cheese in the Trap Episode 5', 'Episode 5 of the series:Cheese in the Trap', 'vids/Cheese in the Trap/Cheese in the Trap episode 13.mp4'),
(253, 'Cheese in the Trap Episode 6', 'Episode 6 of the series:Cheese in the Trap', 'vids/Cheese in the Trap/Cheese in the Trap episode 14.mp4'),
(254, 'Cheese in the Trap Episode 7', 'Episode 7 of the series:Cheese in the Trap', 'vids/Cheese in the Trap/Cheese in the Trap episode 15.mp4'),
(255, 'Cheese in the Trap Episode 8', 'Episode 8 of the series:Cheese in the Trap', 'vids/Cheese in the Trap/Cheese in the Trap episode 16.mp4'),
(256, 'Cheese in the Trap Episode 9', 'Episode 9 of the series:Cheese in the Trap', 'vids/Cheese in the Trap/Cheese in the Trap episode 2.mp4'),
(257, 'Cheese in the Trap Episode 10', 'Episode 10 of the series:Cheese in the Trap', 'vids/Cheese in the Trap/Cheese in the Trap episode 3.mp4'),
(258, 'Cheese in the Trap Episode 11', 'Episode 11 of the series:Cheese in the Trap', 'vids/Cheese in the Trap/Cheese in the Trap episode 4.mp4'),
(259, 'Cheese in the Trap Episode 12', 'Episode 12 of the series:Cheese in the Trap', 'vids/Cheese in the Trap/Cheese in the Trap episode 5.mp4'),
(260, 'Cheese in the Trap Episode 13', 'Episode 13 of the series:Cheese in the Trap', 'vids/Cheese in the Trap/Cheese in the Trap episode 6.mp4'),
(261, 'Cheese in the Trap Episode 14', 'Episode 14 of the series:Cheese in the Trap', 'vids/Cheese in the Trap/Cheese in the Trap episode 7.mp4'),
(262, 'Cheese in the Trap Episode 15', 'Episode 15 of the series:Cheese in the Trap', 'vids/Cheese in the Trap/Cheese in the Trap episode 8.mp4'),
(263, 'Cheese in the Trap Episode 16', 'Episode 16 of the series:Cheese in the Trap', 'vids/Cheese in the Trap/Cheese in the Trap episode 9.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `videosgenres`
--

CREATE TABLE `videosgenres` (
  `videoGenreID` int(10) UNSIGNED NOT NULL,
  `videoID` int(11) NOT NULL,
  `genreID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `videotime`
--

CREATE TABLE `videotime` (
  `studentNumber` int(11) NOT NULL,
  `timeStart` int(11) NOT NULL,
  `timeOut` int(11) NOT NULL,
  `KDRAMA` int(11) NOT NULL,
  `ANIME` int(11) NOT NULL,
  `genre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gamegenres`
--
ALTER TABLE `gamegenres`
  ADD PRIMARY KEY (`gameGenresID`);

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
-- Indexes for table `seriesgenres`
--
ALTER TABLE `seriesgenres`
  ADD PRIMARY KEY (`seriesGenresID`);

--
-- Indexes for table `seriesvideo`
--
ALTER TABLE `seriesvideo`
  ADD PRIMARY KEY (`seriesVideoID`);

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
-- Indexes for table `uservideos`
--
ALTER TABLE `uservideos`
  ADD PRIMARY KEY (`userVideosID`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`videoID`);

--
-- Indexes for table `videosgenres`
--
ALTER TABLE `videosgenres`
  ADD PRIMARY KEY (`videoGenreID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gamegenres`
--
ALTER TABLE `gamegenres`
  MODIFY `gameGenresID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
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
-- AUTO_INCREMENT for table `seriesgenres`
--
ALTER TABLE `seriesgenres`
  MODIFY `seriesGenresID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `seriesvideo`
--
ALTER TABLE `seriesvideo`
  MODIFY `seriesVideoID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=264;
--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `tokenID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;
--
-- AUTO_INCREMENT for table `uservideos`
--
ALTER TABLE `uservideos`
  MODIFY `userVideosID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `videoID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=264;
--
-- AUTO_INCREMENT for table `videosgenres`
--
ALTER TABLE `videosgenres`
  MODIFY `videoGenreID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
