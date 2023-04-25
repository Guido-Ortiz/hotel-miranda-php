<?php
$inipath = php_ini_loaded_file();

if ($inipath) {
    echo 'Loaded php.ini: ' . $inipath;
} else {
    echo 'A php.ini file is not loaded';
}
if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
    echo 'We do nott have mysqli!!!';
} else {
    echo 'Phew we have it!';
}
phpinfo();
?>