<?php
$text = $_POST['inserttext'];

echo '<html><head><title>MD5 Encryption</title></head><body><h1>Success!</h1><p>' . md5($text) . '</p></body></html>'
?>
