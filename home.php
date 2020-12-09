<?php

include"body/navbar.php";

?>
<!DOCTYPE html>
<html>
<head>
  
  <link rel="stylesheet" href="bootstrap2/css/bootstrap.min.css">
  

<div class="bd-example">
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
</ol>
        <div class="carousel-inner" style="height: 550px"><!-----ici ce le code qui augment la hauteur de photo dans le home page---->
        <div class="carousel-item active">
        <img src="img/fatshi.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
        </div>
               <div class="carousel-item">
               <img src="img/goodsize.png" class="d-block w-100" alt="...">
               <div class="carousel-caption d-none d-md-block">
               </div>
               </div>
                <div class="carousel-item">
               <img src="img/gratuite.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
               </div>
               </div>
               </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!----------------------ici ce pour le cadran qui sont en bas comme about us 


	etc------------------------------------>


<?php

include"footer.php";
?>
<p></p>
 		<script src="bootstrap2/jquery/jquery-3.3.1.slim.min.js"></script>
<script src="bootstrap2/jquery/popper.min.js"></script>
<script src="bootstrap2/jquery/bootstrap.min.js"></script>