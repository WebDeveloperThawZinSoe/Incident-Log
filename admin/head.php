<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Incident Management System</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <!-- Sweet Alert 2 -->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <!-- Vue Js -->
		<script src="vue.js"></script>
		<script src='axios-master/dist/axios.min.js'></script>
		<link rel="stylesheet" href="style.css">
    </head>
    <body>

    <?php
        session_start();
        include "database.php";
    ?>