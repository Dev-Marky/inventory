create database intrica1_pigeonice;
use intrica1_pigeonice;

CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=200 ;

CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` mediumtext,
  `cost` double DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `selling_price` double DEFAULT NULL,
  `qty` double DEFAULT NULL,
  `is_inactive` int(11) DEFAULT NULL,
  `title` varchar(85) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `last_tweet_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=188 ;

CREATE TABLE IF NOT EXISTS `trackings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `link` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `date_shipped` datetime DEFAULT NULL,
  `date_delivered` datetime DEFAULT NULL,
  `date_ordered` datetime DEFAULT NULL,
  `from_etsy` int(11) DEFAULT NULL,
  `item` text COLLATE latin1_general_ci,
  `item_image` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `has_review` int(11) DEFAULT NULL,
  `printable` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `tracking_number` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `notes` text COLLATE latin1_general_ci,
  `shipping_provider` int(11) DEFAULT NULL,
  `invoice` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=468 ;

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;


alter table items add code varchar(255);

alter table items add wholesale_price double;

alter table users add salt varchar(255);

create table fbpages(
  id integer not null primary key AUTO_INCREMENT,
  name varchar(255),
  url varchar(255)
);
