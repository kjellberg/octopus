<?php
$mysqli->query("CREATE TABLE default_routes (
  ID int(11) NOT NULL AUTO_INCREMENT,
  query_uri varchar(255) NOT NULL,
  theme_file varchar(200) NOT NULL,
  seo_title varchar(150) NOT NULL,
  page_keywords varchar(150) NOT NULL,
  page_description varchar(250) NOT NULL,
  page_language varchar(5) NOT NULL,
  PRIMARY KEY (ID)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=2;");


$mysqli->query("INSERT INTO default_routes (ID, query_uri, theme_file, seo_title, page_keywords, page_description, page_language) VALUES
(1, '/', 'index.php', 'Octopus CMS', 'Lorem, ipsum, dolor', 'Lorem ipsum dolor sit amet.', '');");