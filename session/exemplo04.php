<?php

session_id('tg0vh8aa2nplqglujrghnkp2f5');

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

?>