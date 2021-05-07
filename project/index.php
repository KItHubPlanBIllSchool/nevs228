<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    
  </head>
  <body>
    <?php 
        $connect = mysqli_connect('127.0.0.1', 'root', '', 'project2');
        $query = mysqli_query($connect, 'SELECT * FROM bd');
    ?>

  <div class="row" style="height: 70px; background-color: #2D4D42"> <!-- верхняя-->
    <img src="img/logo.png" style="width: 110px; height: 50px; margin-top:10px" class="ps-5" >
    <img src="img/UseDay.png" style="width: 150px; height: 60px; margin-top:15px" class="ps-5 ">
  </div>
  <div class="">
    <img src="img/img1.png" class="col-12" style="height: 800px;"> 
  </div>
  <div>
    <h1 style="margin-bottom:200px">Добро пожаловать в UseDay</h1>
  </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    
  </body>
</html>