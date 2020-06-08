<?php

session_start();
require_once '../config/db.php';

// user tidak bisa langsung mengakses form Admin
if (!isset($_SESSION['id_user'])) {
	header('Location: ../index.php');
}

// view
require_once 'includes/header.php';
require_once 'includes/dashboard.php'; // content
require_once 'includes/footer.php';
