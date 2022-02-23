<?php
session_start(); // Start session nya
session_destroy(); // Hapus semua session

include('config/connection.php');
header("location: ./"); // Redirect ke halaman index.php
?>
