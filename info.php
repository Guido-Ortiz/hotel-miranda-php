<?php
if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
    echo 'We do nott have mysqli!!!';
} else {
    echo 'Phew we have it!';
}
phpinfo();
?>