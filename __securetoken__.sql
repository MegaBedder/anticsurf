-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Anamakine: localhost
-- Üretim Zamanı: 19 Şubat 2009 saat 21:35:29
-- Sunucu sürümü: 5.0.51
-- PHP Sürümü: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Veritabanı: `securetoken`
-- 

-- --------------------------------------------------------

-- 
-- Tablo yapısı: `securetoken`
-- 

CREATE TABLE `securetoken` (
  `Token` varchar(32) NOT NULL,
  `UserDescriptor` text NOT NULL,
  `id` int(11) NOT NULL auto_increment,
  `Time` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=217 ;

-- 
-- Tablo döküm verisi `securetoken`
-- 

