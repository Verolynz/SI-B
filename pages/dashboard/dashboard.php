<?php
if (!isset($_SESSION['user'])){
    header('location:login.php');
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <title>Dashboard</title>

    <style>
      body {
        display: flex;
        height: 100vh;
        overflow: hidden;
      }

      .sidebar {
        width: 250px;
        background-color: #343a40;
        color: white;
        display: flex;
        flex-direction: column;
      }

      .sidebar a {
        color: white;
        text-decoration: none;
      }

      .sidebar .nav-item {
        padding: 10px 20px;
      }

      .content {
        flex-grow: 1;
        padding: 20px;
        overflow-y: auto;
      }

      .content-header {
        padding: 20px;
        background-color: #f8f9fa;
        border-bottom: 1px solid #dee2e6;
      }

      .content-section {
        margin-top: 20px;
      }
    </style>
  </head>
  <body>
    <div class="sidebar">
      <div class="sidebar-header p-3">
        <h4>Dashboard</h4>
      </div>
      <nav class="nav flex-column">
        <a class="nav-link active" href="#"><i class="fa-solid fa-tachometer-alt"></i> Home</a>
        <a class="nav-link" href="#"><i class="fa-solid fa-users"></i> Users</a>
        <a class="nav-link" href="#"><i class="fa-solid fa-chart-bar"></i> Reports</a>
        <a class="nav-link" href="#"><i class="fa-solid fa-cog"></i> Settings</a>
      </nav>
    </div>

    <div class="content">
      <div class="content-header">
        <h1>Dashboard</h1>
      </div>
      <div class="content-section">
        <h2>Welcome to the Dashboard</h2>
        <p>This is a basic layout for a dashboard. You can add more sections and components as needed.</p>
      </div>
      <div class="content-section">
        <h2>Statistics</h2>
        <div class="row">
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Users</h5>
                <p class="card-text">1000</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Revenue</h5>
                <p class="card-text">$5000</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Sales</h5>
                <p class="card-text">150</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
