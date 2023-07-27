-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2023 at 08:53 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `obsw`
--

-- --------------------------------------------------------

--
-- Table structure for table `obsw`
--

CREATE TABLE `obsw` (
  `num` int(11) NOT NULL,
  `book` varchar(200) NOT NULL,
  `img` blob NOT NULL,
  `descript` text NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obsw`
--

INSERT INTO `obsw` (`num`, `book`, `img`, `descript`, `price`) VALUES
(1, 'The Diary of Young Girl', 0x696d672f626f6f6b322e6a7067, 'The Diary of a Young Girl is the story of Anne Frank, a Jewish teenager who lived in hiding in Amsterdam during the Holocaust. Though she and six of the seven others would die after being discovered and captured, Anne s father, Otto, received his daughter s writings and published them as a historical memoir.', 150),
(2, 'The Golden Years', 0x696d672f626f6f6b342e6a7067, 'Ruskin Bond is eighty-nine years old: long past sixty, the age at which one becomes a senior citizen; also the age around which it is said one should think of retiring from ...', 375),
(3, 'Wings of Fire', 0x696d672f626f6f6b332e6a7067, 'One of the most inspiring and popular autobiographies to read is Late Abdul Kalam Wings of Fire. In this book, the former president shares his personal experiences', 190),
(4, 'Dune', 0x696d672f626f6f6b352e6a7067, 'Before The Matrix, before Star Wars, before Enders Game and Neuromancer, there was Dune, one of the greatest science fiction novels ever written. ', 350),
(5, 'The Martian', 0x696d672f626f6f6b372e6a7067, 'Six days ago, astronaut Mark Watney became one of the first people to walk on Mars. Now, he is sure he will be the first person to die there. After a dust storm nearly kills him', 800),
(6, 'Nineteen Eighty-Four', 0x696d672f626f6f6b362e6a7067, 'Among the seminal texts of the 20th century, Nineteen Eighty-Four is a rare work that grows more haunting as its futuristic purgatory becomes more real.', 120),
(7, 'Treasure island', 0x696d672f626f6f6b382e6a7067, 'One-legged Long John Silver, treacherous Captain Billy Bones, wicked Black Dog and the terrifying Blind Pew are the most cruel and frightening pirates ever to sail the high seas! They all dream of finding Captain Flint is buried treasure, but it is young Jim Hawkins who finds Flint is map of Treasure Island.', 200),
(8, 'Moby-Dick', 0x696d672f626f6f6b392e6a7067, 'Moby Dick was written by Herman Melville whose writing draws on his experience at sea as a common sailor. This novel is a travel experience of Ishmael along with Ahab, in the hunt of a savage whale called Moby dick, which has ripped apart Ahabs one leg.', 300),
(9, 'Into the Wild', 0x696d672f626f6f6b31302e6a7067, 'In April 1992, Christopher McCandless hitchhiked to Alaska and walked alone into the wilderness north of Mt. McKinley. He had given $25,000 in savings to charity, abandoned his car and most of his possessions, burned all the cash in his wallet, and invented a new life for himself.', 400),
(10, 'Ghost Story', 0x696d672f626f6f6b31312e6a7067, 'In a seedy motel in Florida, a young man holds captive a little girl in a soiled pink dress. He is anxious, tormented, introspective. She is calm, passive, strangely detached. She says her name is Angie Maule. In the small upstate town of Milburn, New York, four old friends meet to honor the traditions of the Chowder Society.', 900),
(11, 'It', 0x696d672f626f6f6b31322e6a7067, 'Welcome to Derry, Maine. Its a small city, a place as hauntingly familiar as your own hometown. Only in Derry the haunting is real. They were seven teenagers when they first stumbled upon the horror. Now they are grown-up men and women who have gone out into the big world to gain success and happiness.', 1600),
(12, 'The Exorcists', 0x696d672f626f6f6b31332e6a7067, 'Father Damien Karras Where is Regan Regan MacNeil In here. This edition polished and expanded by the author includes new dialogue a new character and a chilling new extended scene provides an unforgettable reading experience that has lost none of its power to shock and continues to thrill and terrify new readers.', 400),
(13, 'The Silent Patient', 0x696d672f626f6f6b31342e6a7067, ' A famous painter married to an in-demand fashion photographer, she lives in a grand house with big windows overlooking a park in one of London most desirable areas. One evening her husband Gabriel returns home late from a fashion shoot, and Alicia shoots him five times in the face, and then never speaks another word.', 1300),
(14, 'Gone Girl', 0x696d672f626f6f6b31352e6a7067, 'Gone Girl is a thriller novel that was published in 2012 and made it to the New York Best Seller list. The story revolves around Nick and Amy Dunne, a couple who has been having a very difficult marriage. Half the book is narrated in first person by both Nick and Amy.', 400),
(15, 'One of Us Is Lying', 0x696d672f626f6f6b31362e6a7067, 'The internationally bestselling YA thriller by acclaimed author, Karen M. McManus - now a major new TV series! Five students go to detention. Only four leave alive. Yale hopeful Bronwyn has never publicly broken a rule. Sports star Cooper only knows what he is doing in the baseball diamond. ', 1300);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
