<?php
session_start();
$_SESSION['username'] = "taran";
$_SESSION['favcat'] = "books";
echo"we have saved your session";
?>