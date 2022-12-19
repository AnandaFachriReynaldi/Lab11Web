<?php
include("koneksi.php");

//Query untuk menampilkan data
$sql = 'SELECT * FROM data_barang';
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        .tekslogin {
            position: relative;
            left: 110px;
        }
        form div > label {
			display: inline-block;
			width: 100px;
			height: 30px;
        }
        form div > label {
            display: inline-block;
			width: 100px;
        }
        input[type="submit"] {
            position: relative;
            left: 110px;
            border-radius: 4px;
            border: 1px solid #1f5faa;
            background-color: #1f5faa;
            color: #ffffff;
            font-weight: bold;
            padding: 5px 15px;
        }
    </style>
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div id="container">
        <header>
            <h1>Tugas</h1>
        </header>
        <nav>
            <a href="home.php">Home</a>
            <a href="tambah.php">Tambah Data</a>
        </nav>