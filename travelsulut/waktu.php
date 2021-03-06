<?php 
 
include 'koneksi.php'; // Include koneksi.php
 
error_reporting(0); // Menghilangkan error
 
session_start(); // Memulai session
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cuaca.css">
    <link rel="icon" href="asset1/logo1.jpg">
    <title>Waktu</title>
</head>
<body>
    <div class="container">
    <h1><a style="text-decoration:none" href="index.php">Cuaca</a></h1> <!--- Judul -->
        <div class="current-info"> <!--- Info Cuaca -->
            <div class="date-container"> <!--- Tanggal -->
                <div class="time" id="time"> <!--- Baris awal Waktu -->
                     <span id="am-pm">PM</span> <!--- AM/PM -->
                </div> <!--- Baris Akhir Waktu -->
                <div class="others" id="current-weather-items"> 
                </div>
            </div>
            <div class="place-container">
                <div class="time-zone" id="time-zone">Indonesia/Manado</div> <!--- Zona Waktu -->
                <div id="country" class="country">IN</div> <!-- Negara -->
            </div>   
            <!-- Baris awal Cuaca -->
                    <div class="current-date"> <!--- Tanggal -->
                        <span id="current-date"> <!-- Hari -->
                        </span>
                    </div> <!--- Baris Akhir Tanggal -->

        </div>
    </div>    
    <script src="js/waktu.js"></script> <!-- Waktu.js -->
</body>
</html>
