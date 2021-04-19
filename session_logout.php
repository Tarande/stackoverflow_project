<?php
session_start();
session_unset();
session_destroy();
echo "<br> you have been logged out";
?>
