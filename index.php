<!DOCTYPE html>
<html lang="en">
<head>
<link href='images/favicon.png' rel='shortcut icon' type='image/x-icon'>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Beckenbauer</title>

<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php 
	include'nav.php';
?>

<div class="container-fluid">
  <div id="carousel1" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carousel1" data-slide-to="0" class="active"></li>
      <li data-target="#carousel1" data-slide-to="1"></li>
      <li data-target="#carousel1" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="item active"><img src="images/01.png" alt="First slide image" class="center-block">
        <div class="carousel-caption">
       
        </div>
      </div>
      <div class="item"><img src="images/02.png" alt="Second slide image" class="center-block">
        <div class="carousel-caption">
        
        </div>
      </div>
      <div class="item"><img src="images/03.png" alt="Third slide image" class="center-block">
        <div class="carousel-caption">
    
        </div>
      </div>
    </div>
  <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel1" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a></div>
<hr>
</div>
<div class="container">
  <div class="row text-center">
    <div class="col-md-6 col-md-offset-3">Somos tu mejor opcion para cada paso de tu vidad <strong>Los mejores diseños y estilos para ti</strong>. </div>
  </div>
  <hr>
<hr>
  <div class="row">
    
  </div>

  <hr>
  <div class="row">
  <?php 
  include'footer.php';
  ?>
   
  </div>
  <hr>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.2.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.js"></script>
</body>
</html>
