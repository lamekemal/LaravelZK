CREATE TABLE IF NOT EXISTS `forms001` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Q001` text,
  `Q002` text,
  `Q003` text,
  `Q004` text,
  `Q005` text,
  `Q006` text,
  `Q006A` text,
  `Q007` text,
  `Q008` text,
  `Q009` text,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) 
ENGINE=InnoDB  
DEFAULT CHARSET=utf8 
AUTO_INCREMENT=0 