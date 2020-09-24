<?php
phpinfo();
 echo 'display_errors = ' . ini_get('display_errors') . "\n";
echo 'register_globals = ' . ini_get('register_globals') . "\n";
echo 'post_max_size = ' . ini_get('post_max_size') . "\n";
echo 'upload_max_filesize = ' . (ini_get('upload_max_filesize')) . "\n";
echo 'post_max_size in bytes = ' . return_bytes(ini_get('post_max_size'));

print_r(get_loaded_extensions());
?>