<?php
$mysqli->query("CREATE TABLE IF NOT EXISTS default_contents (
  id int(11) unsigned NOT NULL AUTO_INCREMENT,
  route_id int(11) DEFAULT NULL,
  loop_id int(11) DEFAULT NULL,
  nameId varchar(100) DEFAULT NULL,
  content text,
  PRIMARY KEY (id)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;");

