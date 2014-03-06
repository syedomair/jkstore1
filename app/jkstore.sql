
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
 

--
-- Database: `jkstore`
--
CREATE DATABASE IF NOT EXISTS `jkstore` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `jkstore`;

-- --------------------------------------------------------

--
-- Table structure for table `Category`
--
drop table IF EXISTS `Category`;
CREATE TABLE IF NOT EXISTS `Category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `category`
--

INSERT INTO `Category` (`category_id`,`name`)VALUES(1, 'Pants');
INSERT INTO `Category` (`category_id`,`name`)VALUES(2, 'Shirts');
INSERT INTO `Category` (`category_id`,`name`)VALUES(3, 'Activewear');

-- --------------------------------------------------------

--
-- Table structure for table `Product`
--
drop table IF EXISTS `Product`;
CREATE TABLE IF NOT EXISTS `Product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `desc` text,
  `price` DECIMAL(4,2),
  `img` varchar(255) ,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `Product`
--

INSERT INTO `Product` (`product_id`, `category_id`, `name`, `desc`, `price`, `img`) VALUES 
(1, 1, "Men\'s corduroy pants - Black 29W x 28L", "Fabric 50% cotton, 50% polyester.", "30.00", "images/mens_pants_cords");

INSERT INTO `Product` (`product_id`, `category_id`, `name`, `desc`, `price`, `img`) VALUES
(2, 1, "Men\'s corduroy pants - Brown 29 Width x 28 Length", "Fabric 50% cotton, 50% polyester.", 30, "images/mens_pants_cords");

INSERT INTO `Product` (`product_id`, `category_id`, `name`, `desc`, `price`, `img`) VALUES
(3, 1,"Classic pleated dress pants - Black 29 Width x 32 Length", "Fabric 95% cotton, 5% spandex.", 40, "images/mens_pants_dress");

INSERT INTO `Product` (`product_id`, `category_id`, `name`, `desc`, `price`, `img`) VALUES
(4, 2, "Dress shirt - White - 15 collar - 32 Sleeve", "100% cotton. Dry clean only.", 33, "images/mens_shirts_dresscas_Dkhaki");

INSERT INTO `Product` (`product_id`, `category_id`, `name`, `desc`, `price`, `img`) VALUES
(5, 2,"Dress shirt - White - 16 collar - 35 Sleeve", "100% cotton. Dry clean only.", 33, "images/mens_shirts_dresscas_Dkhaki");

INSERT INTO `Product` (`product_id`, `category_id`, `name`, `desc`, `price`, `img`) VALUES
(6, 2,"Casual shirt - White - Small. Wrinkle free", "100% cotton. Machine washable.", 32, "images/mens_shirts_dresscas_Dkhaki");

INSERT INTO `Product` (`product_id`, `category_id`, `name`, `desc`, `price`, `img`) VALUES
(7, 2,"Casual shirt - Blue - Medium. Wrinkle free", "100% cotton. Machine washable.", 32, "images/mens_shirts_dresscas_Dkhaki");

INSERT INTO `Product` (`product_id`, `category_id`, `name`, `desc`, `price`, `img`) VALUES
(8, 3,"Women\'s Bodysuit - Black - Petit", "Machine wash in cold water, gentle cycle drip dry.", 17, "images/womens_sleepwear_short_Iblue");


