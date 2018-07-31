
<?php
   include 'header.php';

   if(isset($_SESSION['u_id'])){
     include 'home.php';
   }
   else{
     ?>
    <div class="containers">
    <div class="col-lg-12"></div>
      <div class="col-lg-7" >
   <style>         
</style>
 
<br><br><br>
<div class="col-lg-1"></div>
<div class="col-lg-10" style="border: 1px solid rgb(221, 220, 220);border-radius: 3px; padding: 30px; background-color:white;box-shadow: 1px 1px 1px 1px rgb(163, 160, 160);">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <!--<ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>-->
    
    <!-- Wrapper for slides -->
    <div class="carousel-inner ">
      <div class="item active">
        <img src="alumni.jpg"  style="width:100%;height:330px">
      </div>

      <div class="item">
        <img src="alumni1.jpg"  style="width:100%;height:330px;">
      </div>
    
      <div class="item">
        <img src="graduation-traditions.jpg"  style="width:100%;height:330px;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<div class="col-lg-1"></div>
   </div>
     <div class="col-lg-5">
     <?php  
     include 'login.html';
 } ?>
   
   </div>
   
   </div>
   <br>
   <br>
  
   <?php
  
   include 'footer.html';

 ?>
