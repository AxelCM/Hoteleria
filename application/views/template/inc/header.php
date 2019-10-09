<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HOTEL LA CONCHA DE LA LORA</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">



  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">HOTEL CONCHA DE LA LORA</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
  <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    <li class="nav-item active">
      <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item active dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="material-icons">folder</i>
            RECEPCION
            </a>
             <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo site_url('user/checkin'); ?>">
                  Hospedar un Cliente</a>
                <a class="dropdown-item" href="<?php echo site_url('user/habitaciones'); ?>">
                 Ver Clientes Hospedados</a>
            </div>
    </li>    <li class="nav-item active dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="material-icons">assignment</i>
            HABITACIONES
            </a>
             <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo site_url('user/addhabitacion'); ?>">
                  Agregar Habitacion</a>
                <a class="dropdown-item" href="<?php echo site_url('user/habitaciones'); ?>">
                 Ver Habitaciones</a>
            </div>
    </li>
    <li class="nav-item active dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="material-icons">donut_large</i>
            HUESPEDES
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="<?php echo site_url('user/addhuesped'); ?>">Agregar Huesped</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?php echo site_url('user/huespedes'); ?>">Ver Huespedes</a>
            </div>
    </li>
  </ul>
</div>
<ul class="nav navbar-nav navbar-right">
  <!--<li>-->
  <!--  <img src="" width="50px" height="50px">-->
  <!--</li>-->
  <li class="nav-item active dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Beta User</a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      <a class="dropdown-item" href="#">Salir</a>
    </div>
</ul>
  </nav>
</div>
</head>
<body>
<div class="container">
<div class="row justify-content-md-center">
