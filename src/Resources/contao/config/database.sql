-- 
-- Table `tl_tsz_supporters`
-- 

CREATE TABLE `tl_tsz_lostandfoundanimals` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `tstamp` int(10) unsigned NOT NULL default '0',
  `kategorie` varchar(128) NOT NULL default '',
  `eintrag` varchar(255) NOT NULL default '',
  `art` varchar(255) NOT NULL default '',
  `datum` int(10) unsigned NOT NULL default '0',
  `bundesland` varchar(128) NOT NULL default '',
  `bezirk` varchar(128) NOT NULL default '',
  `plz` varchar(128) NOT NULL default '',
  `ort` varchar(128) NOT NULL default '',
  `strasse` varchar(256) NOT NULL default '',
  `hausnummer` varchar(128) NOT NULL default '',
  `name_tier` varchar(255) NOT NULL default '',
  `rasse` varchar(255) NOT NULL default '',
  `geschlecht` varchar(128) NOT NULL default '',
  `groesse` varchar(128) NOT NULL default '',
  `fell_haarlaenge` varchar(128) NOT NULL default '',
  `fellmusterung` varchar(128) NOT NULL default '',
  `farbe_tier` varchar(255) NOT NULL default '',
  `ungefaehre_altersgruppe` varchar(128) NOT NULL default '',
  `hundemarke` varchar(128) NOT NULL default '',
  `nummer_hundemarke` varchar(128) NOT NULL default '',
  `chipnummer` varchar(128) NOT NULL default '',
  `besondere_hinweise` text NULL,
  `bild` varchar(512) NOT NULL default '',
  `vorname` varchar(255) NOT NULL default '',
  `nachname` varchar(255) NOT NULL default '',
  `telefonnummer` varchar(128) NOT NULL default '',
  `mail` varchar(128) NOT NULL default '',
  `kontakt_strasse` varchar(255) NOT NULL default '',
  `kontakt_ort` varchar(255) NOT NULL default '',
  `kontakt_plz` varchar(255) NOT NULL default '',
  `anzeigenid` int(10) unsigned NOT NULL default '0',
  `password` varchar(64) NOT NULL default '',
  `published` char(1) NOT NULL default '',
  
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


-- 
-- Table `tl_module`
-- 

CREATE TABLE `tl_module` (
  `perrow` int(11) NOT NULL default '0',
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Table `tl_tsz_supporters`
-- 

CREATE TABLE `tl_tsz_supporters` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `tstamp` int(10) unsigned NOT NULL default '0',
  `art` varchar(128) NULL default '',
  `name` varchar(255) NULL default '',
  `vorname` varchar(255) NULL default '',
  `nachname` varchar(255) NULL default '',
  `plz` varchar(16) NULL default '',
  `ort` varchar(512) NULL default '',
  `email` varchar(255) NULL default '',
  `reg_bundesland` varchar(255) NULL default '',
  `reg_bezirk` varchar(255) NULL default '',
  `reg_plz` varchar(16) NULL default '',
  `werbung` char(1) NULL default '',
  `logo` varchar(255) NULL default '',
  `published` char(1) NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;