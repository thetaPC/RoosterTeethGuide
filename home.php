<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Rooster Teeth Guide</title>
  
  <!--http://roosterteeth.wikia.com/wiki/Cast_%26_Crew-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/cHome2.css">
  <link rel="stylesheet" href="css/site.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jHome2.js"></script>
  
</head>
<body>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/staff01.jpg" alt="Image">
        <div class="carousel-caption">
          <!--
          <h3>Sell $</h3>
          <p>Money Money.</p>
          -->
        </div> <!-- carousel-caption -->      
      </div> <!-- end item active -->

      <div class="item">
        <img src="images/offtopic2.png" alt="Image">
        <div class="carousel-caption">
        </div>  <!-- end carousel-caption 1200x400 -->     
      </div> <!-- end item -->
    </div> <!-- end of carousel-inner -->

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a> <!-- end left arrow-->
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a> <!-- end right arrow -->
</div> <!-- end of myCarousel -->
  
<div id="container" class="container text-center">    
<div id="container2" class="container text-center">
  <h3>What exactly is the purpose of this site?</h3>
    <p style="padding-bottom:40px;">It's just a simple website for the people who want to learn more about the amazing people
        of <abbr title="Rooster Teeth Productions, LLC.">Rooster Teeth</abbr>. <br> It can be helpful towards existing fans and even the new comers trying to get caught up with who's who. I, for one, still need help with 
    remembering everyone in the company. Especially when Rooster Teeth keeps expanding. There are now two new family members (sub-companies) within the month 
    of April 2016.</p>
  <center>
      <button type="button" class="btn btn-danger btn-lg" style="background-color: #f44336;" onclick="selectDiv ('selection', 'container2', 'myCarousel');">Pick Your Poison</button>
      <!-- <a href="#" class="btn btn-danger btn-lg" style="background-color: #f44336;" role="button" onclick="selectDiv ('selection', 'myCarousel', 'container');">Enter!</a> -->
   </center>
 </div> <!--end of container2-->
   
  <div id="selection" class="row" style="display:none; padding-top: 50px; padding-bottom: 70px;">
    <div class="col-sm-6">
      <a href="/~mloza1/RoosterTeethGuide/RoosterTeeth.php"><img src="images/rtRach.jpg" class="img-responsive thumb" alt="Image"></a>
      <br>
      <!-- <p>Current Project</p> -->
    </div> <!--end of 1st grid 150x80-->
    <div class="col-sm-6"> 
      <img src="images/ahRach.jpg" class="img-responsive thumb grayscale" alt="Image">
      <br>
    </div> <!--end of 2nd grid-->
    <div class="col-sm-6">
      <img src="images/fhRach.jpg" class="img-responsive thumb grayscale" alt="Image">
      <br>
    </div> <!--end of 3rd grid-->
    <div class="col-sm-6"> 
      <img src="images/saRach.jpg" class="img-responsive thumb grayscale" alt="Image">  
      <br>
    </div> <!-- end of 4th grid -->
    <div class="col-sm-6"> 
      <img src="images/kfRach.jpg" class="img-responsive thumb grayscale" alt="Image"> 
      <br>
    </div> <!-- end of 5th grid -->
    <div class="col-sm-6"> 
      <img src="images/tcRach.jpg" class="img-responsive thumb grayscale" alt="Image"> 
      <br>
    </div> <!-- end of 6th grid -->
    
   
  </div> <!-- end of selection -->
</div> <!-- end of container -->
<br>

<footer style="padding: 0px; min-height: calc(100vh - 738px);">
  <div class="row">
    <div class="col-md-6">
      <p >2016 -  <?php echo date("Y"); ?></p>
    </div> <!--end col-->
    <div class="col-md-6">
      <p style="text-align: right;">Maria Loza</p>
    </div> <!--end col-->
  </div> <!--end row-->


</body>
</html>


<!-- 4/21 presentation -->