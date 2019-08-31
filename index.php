<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   <link rel="stylesheet" type="text/css" href="http://localhost/style.css">

   <!-- Bootstrap -->
    <link href="http://localhost/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <header class="jumbotron text-center" id="jumbotron">
      <img src="http://localhost/photo/caulogo.jpg" alt="중앙대맛집" class="img-circle" id="logo">
      <h1><a href="http://localhost/">중앙대학교 맛집</a></h1>
    </header>
  <div class="row">
    <nav class="col-md-2">
    <ol>
      <?php
      echo file_get_contents("list.txt");
      ?>
    </ol>
    </nav>
    <article class="col-md-10 text-center">
      <h1 class="text-center">중앙대학교 맛집을 소개합니다!</h1>
      <a href="https://www.cau.ac.kr/index.do"> <img src="http://localhost/photo/caulogo2.png" with margin-right="10px"></a>
      <a href="http://www.dongjak.go.kr"><img src="http://localhost/photo/dongjak.jpg"></a>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/XgBh-GvVECs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </article>
  </div>
</div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <!-- Include all compiled plugins (below), or include individual files as needed -->
   <script src="http://localhost/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
</body>
</html>
