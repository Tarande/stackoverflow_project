<?php
echo time();
setcookie("category","books" ,time() + 86400, "/");
echo 'the cookie is set';
?>