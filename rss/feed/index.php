<?php
  header('HTTP/1.1 307 Temporary Redirect');
  header('Location: rss.xml');
  header('Cache-Control: no-cache, no-store, must-revalidate');
  header('Expires: Thu, 01 Jan 1970 00:00:00 GMT');
  header('Pragma: no-cache');
  header("Cache-Control: no-cache, must-revalidate");
  exit();
?>
 
