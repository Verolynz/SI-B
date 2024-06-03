<?php

// Sertakan file functions.php
require_once '../../functions/functions.php';


// Panggil fungsi login saat halaman dimuat
login(); 
?>


<!doctype html>
<html lang="ar" dir="ltr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../../assets/css/login.css">
    <title>Bengkel Mantap</title>
    <style>
      .input-group-text {
          background-color: transparent;
          border: none;
      }
    </style>
  </head>
  <body>
    <div class="container">
        <h2 class="text-center">FORM LOGIN</h2>
        <form method="post">
            <div class="form-group">
               <label for="username">Username</label>
               <div class="input-group">
                   <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                   <input type="text" id="username" name="username" class="form-control" placeholder="masukan username anda">
               </div>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                    <input type="password" id="password" name="password" class="form-control" placeholder="masukan password anda">
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">LOGIN</button>
            <button type="reset" class="btn btn-danger"><a href="daftar.php">Daftar</a></button>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
