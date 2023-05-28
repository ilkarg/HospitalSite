<!DOCTYPE html>
<html lang="en">

<?php 
    session_start();
    if (!isset($_SESSION["user"])) {
        header("location: ../admin/login.php");
    }
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Здоровье - Админ-Панель</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
</head>
<body>
  <div class="gooey hidden">
    <div class="loader-dots">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <section>
    <nav class="navbar navbar-expand-lg shadow p-0 mb-5 fixed-top" style="background-color:#2fa6eb;">
      <div class="container">
        <a href="#" class="navbar-brand text-white"><img src="../assets/img/logo.png" width="50px" height="50px" alt=""
            style="margin-right:10px;">Админ-Панель</a>
        <button height="10" class="navbar-toggler text-white" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
          aria-label="Toggle navigation">
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-three-dots"
            viewBox="0 0 16 16">
            <path
              d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
          </svg>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link p-3" aria-current="page" href="javascript:logout()">Выйти</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </section>

  <section>
    <div class="container appointments">
      <div class="row">
        <div class="block-create">
          <div class="title-appointments">
            <h1 class="text-center">Записи к врачам</h1>
          </div>
        </div>
        <div id="appointments"></div>
      </div>
    </div>
  </section>

  <script src="../assets/js/jquery-3.7.0.min.js"></script>
  <script src="../assets/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/script.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      getAppointments();
    });
  </script>
</body>
</html>