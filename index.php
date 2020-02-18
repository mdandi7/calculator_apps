<?php
include "string.php";

?>

<!DOCTYPE html>
<html>

<head>
	<title> <?php echo $nama_aplikasi; ?></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
  <script src="assets/jquery-3.4.1.min.js" type="text/javascript"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="jsfunction.js" type="text/javascript"></script>
</head>

<body>

<div class="mx-4 my-4">
  <div class="jumbotron jumbotron-fluid">
    <h1 class="text-center mb-5">Calculator Apps</h1>

      <!-- star input number & checkbox -->
      <!-- input number & checkbox 1 -->
      <div class="all-input">
      <div class="row justify-content-center mb-3 mx-2 row-input">
        <div class="input-group col-sm-3">
          <input type="number" class="form-control form-control-lg mr-2" id="num1" aria-label="Text input with checkbox">
          <div class="input-group-text">
            <input type="checkbox" id="cek1"  aria-label="checkbox for following text input">
          </div>
        </div>
      </div>
      <!-- input number & checkbox 2 -->
      <div class="row justify-content-center mb-3 mx-2 row-input">
        <div class="input-group col-sm-3">
          <input type="number" class="form-control form-control-lg mr-2" id="num2" aria-label="Text input with checkbox">
          <div class="input-group-text"> 
            <input type="checkbox" id="cek2" aria-label="checkbox for following text input">
          </div>
        </div>
      </div>
      <!-- input number & checkbox 3 -->
      <div class="row justify-content-center mb-3 mx-2 row-input">
        <div class="input-group col-sm-3">
          <input type="number" class="form-control form-control-lg mr-2" id="num3" aria-label="Text input with checkbox">
          <div class="input-group-text"> 
            <input type="checkbox" id="cek3" aria-label="checkbox for following text input">
          </div>
        </div>
      </div>
      </div>
      <!-- end input number & checkbox-->

      <!-- star operator button -->
      <div class="row justify-content-center mt-5" id="operator" onclick="Calculator()">
        <button type="button" class="btn btn-outline-dark mx-2 btn-lg font-weight-bold btn-op" data-op="+">+</button>
        <button type="button" class="btn btn-outline-dark mx-2 btn-lg font-weight-bold btn-op" data-op="-">-</button>
        <button type="button" class="btn btn-outline-dark mx-2 btn-lg font-weight-bold btn-op" data-op="*">&times;</button>
        <button type="button" class="btn btn-outline-dark mx-2 btn-lg font-weight-bold btn-op" data-op="/">/</button>
      </div>
      <!-- end operator button -->

      <!-- output -->
      <div class="row justify-content-center mt-5">
        <h4>Hasil: <div class="d-inline-block" id="hasil"></div></h4>
      </div>
  </div>
</div>

</body>
</html>