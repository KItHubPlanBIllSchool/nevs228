<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <style type="text/css">
      
      <style>
   @font-face {
    font-family: Montserrat-Medium; /* Гарнитура шрифта */
    src: url(Montserrat-Medium.ttf); /* Путь к файлу со шрифтом */
   }
   h1 {
    font-family: Montserrat-Medium;
   }
    </style>
    
  </head>
  <body style="background-color: #D6CFC2">
    <?php 
        $connect = mysqli_connect('127.0.0.1', 'root', '', 'project2');
        $query = mysqli_query($connect, 'SELECT * FROM bd');
    ?>

  <div class="row" style="height: 70px; background-color: #2D4D42"> <!-- верхняя-->
    <img src="img/logo.png" style="width: 110px; height: 50px; margin-top:10px" class="ps-5" >
    <img src="img/UseDay.png" style="width: 150px; height: 60px; margin-top:15px" class="ps-5 ">
  </div>

  <div>
    <img src="img/img1.png" class="col-12" style="height: 800px;"> 
  </div>
  <div style="height:100px; background-color: #D6CFC2">
    <h1 class="text-center">Сайт созданный для пожилых людей, чтобы помочь им отлично и главное полезно провести время.</h1>
  </div>
    <div class="row">
    <div class="col-3" style="height:1000px; margin-left:130px; background-color: #D6CFC2">
      <img src="img/co1.png" width="150" style="margin-left:150px">
      <h1 style="font-family: Montserrat-Medium;" class="text-center">Понятный, простой интерфейс</h1>
    </div>
    <div class="col-3" style="height:1000px; margin-left:130px; background-color: #D6CFC2">
      <img src="img/co2.png" width="150" style="margin-left:150px">
      <h1 style="font-family: Montserrat-Medium;" class="text-center">Обучение в игровой, понятной форме</h1>
      <a href="registra.php"><button type="button" class="btn btn-success" style="margin-left:40px; margin-top:300px; width: 400px; height: 100px">Зарегестрироваться</button></a>
    </div>
    <div class="col-3" style="height:1000px; margin-left:130px; background-color: #D6CFC2">
      <img src="img/co3.png" width="150" style="margin-left:150px">
      <h1 style="font-family: Montserrat-Medium;" class="text-center">Полезное время провождения</h1>
    </div>
    </div>
  







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    
  </body>
</html>