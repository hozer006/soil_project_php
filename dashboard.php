<!DOCTYPE html>
<html lang="en">

<?php
include("connection.php");

?>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- JS, Popper.js, and jQuery -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  <script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
  <script nomodule src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ionic/core/css/ionic.bundle.css" />
  <link rel="stylesheet" href="css/style.css">
</head>

<body>  
  <div class="container">
  <div>
    <a href="index.php">หน้าแรก</a> / <a href="dashboard.php?page=1">ตาราง</a>
  </div>
    <div class="row">
      <div class="col">
        <h1> Statian 1</h1>
      </div>
      <div class="col col-btn">
        <form action="export_excle.php" method="POST">
          <button type="submit" name="export_excel" class="btn btn-primary">Export Excel</button>
        </form>
      </div>
    </div>
    <div class="table_wrapper" id="table_wrapper"></div>
  </div>
  </div>
</body>

</html>

<?php

$page = $_GET['page'];
echo '<script type="text/javascript">';
echo "var _page = '$page';";
echo '</script>';

?>



<script>
  // function realtimeDoc() {
  //   var xhttp = new XMLHttpRequest();
  //   xhttp.onreadystatechange = function() {
  //     if (this.readyState == 4 && this.status == 200) {
  //       document.getElementById("link_wrapper").innerHTML =
  //         this.responseText;
  //     }
  //   };

  //   xhttp.open("GET", "server.php", true);
  //   xhttp.send();
  // }

  function tableDoc(page) {
    var _url = "table_soil.php?page=" + _page;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("table_wrapper").innerHTML =
          this.responseText;
      }
    };

    xhttp.open("GET", _url, true);
    xhttp.send();
  }
  setInterval(function() {
    realtimeDoc();
    tableDoc();
    // 1sec
  }, 1000);

  // window.onload = realtimeDoc;
  window.onload = tableDoc;
</script>

<style>
  .container {
    margin-top: 20px;
  }
</style>