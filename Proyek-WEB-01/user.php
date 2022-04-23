<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Proyek Web 01</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<!-- Site wrapper -->

<?php
    include_once "sidebar.php";
?>
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        
     
      <li class="nav-item d-none d-sm-inline-block">
        <a href="variable.user.php" class="nav-link">Variable User</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="variable_system.php" class="nav-link">Variable System</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="variable_constan.php" class="nav-link">Variable konstan</a>
      </li>
      
    </ul>
</nav>
</body>
  <!-- /.navbar -->