<?php
$email = "ajju456@gmail.com";
$pattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';

if (preg_match($pattern, $email)) {
    echo "velid email : $email";
} else {
    echo "in valid email : $email ";
}
?>
