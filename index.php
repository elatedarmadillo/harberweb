<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<?php
    require_once('./assets/requires/config.php');
    require_once('./assets/requires/header1.php');
?>

<div class="container">
    <div id="jdlaccl" style="font-size: 36px; color: brown;">
        Harber Web
    </div>
    <div class="card shadow-sm mb-5 bg-black rounded">
        <div class="card-body">
            <h5 class="card-title">Input Name</h5>
            <p class="card-text"><input type="text" class="input input-lg" style="width: 100%;" id="srchInv"></p>
        </div>
        <div class="card-footer">
            <button class="btn btn-primary" id="btnsearch">Submit</button>
        </div>
    </div>
    <div id="infoinvaccr"></div>
</div>

<div class="container">
    <div id="jdlaccl" style="font-size: 36px; color: brown;">
        Tugas UTS List Inventory
    </div>
    <div class="card shadow-sm mb-5 bg-black rounded">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
    </div>
</div>

</html>
<script src="./assets/scripts/js/harberweb.js"></script>