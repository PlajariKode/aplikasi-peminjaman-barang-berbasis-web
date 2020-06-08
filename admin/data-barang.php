<?php
session_start();
require_once '../config/db.php';

if (!isset($_SESSION['id_user'])) {
	header('Location: ../index.php');
}

// select semua data barang
// join tabel barang dengan tabel user
$sql = "SELECT * FROM barang LEFT JOIN users ON barang.id_user = users.id_user";
$query = $conn->query($sql);
$data_barang = $query->fetch_all(MYSQLI_ASSOC);

// no urut increment
$no = 1;

require_once 'includes/header.php';

if(!isset($_GET['p'])) {
	require_once 'includes/barang.php';
}