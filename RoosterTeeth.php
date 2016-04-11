<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>RT Staff</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/1-col-portfolio.css" rel="stylesheet">
    <link rel="stylesheet" href="css/site.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<?php

include '.env.php';
?>

    <div class="container-fluid">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/~mloza1/RoosterTeethGuide/home.php">Rooster Teeth Guide</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="/~mloza1/RoosterTeethGuide/RoosterTeeth.php">Rooster Teeth</a>
                    </li>
                    <li>
                        <a href="#">Achievement Hunter</a>
                    </li>
                    <li>
                        <a href="#">Funhaus</a>
                    </li>
                    <li>
                        <a href="#">ScrewAttack</a>
                    </li>
                    <li>
                        <a href="#">Kinda Funny</a>
                    </li>
                    <li>
                        <a href="#">The Creatures</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    	<!-- Video -->
    
	<div class="row" style="background-color:black;">
	   <div class="col-md-12">
	      <center><iframe width="800" height="550" src="https://www.youtube-nocookie.com/embed/o1ROWLkPHKo?rel=0" frameborder="0" allowfullscreen>
	      </iframe></center>
	   </div> <!--end col-->
	</div> <!--end row-->
	</div>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Rooster Teeth Staff
                    <!-- <small>Secondary Text</small> -->
                </h1>
            </div>
        </div>

        <?php 
	   $sql = "SELECT * FROM roosterteeth;";
	   $result = $conn->query($sql);
	   $totalID = mysqli_num_rows($result);
		$maxCol = 3;
		$times = 2;
		$limit = 3;
		//$currRow = 1;
		$startRow = 1;
		if ($totalID % 3 == 0) {
		   $rowCount = $totalID / 3;
		} else {
		   $rowCount = 1 + ($totalID / 3);
		}		   
		$id = 1;
	   while ($currRow <= $rowCount) {    
	?>
	<!-- Project One -->
	<div class="row">
	<?php
	   while ($id <= $limit) {
   	      $sql = "SELECT * FROM roosterteeth WHERE ID='$id';";
    	      $result = $conn->query($sql);
	      while($row = $result->fetch_assoc()) {
    		 $name = ($row["FirstName"]. " " . $row["LastName"]);
    		 $nName = ($row["Nickname"]);
    		 $title = ($row["title"]);
		 $img = ($row["img"]);
    	      } //end while
	?>
	<div class="col-md-4">
        <a href="#">
            <img class="img-responsive portrait" src="images/rtStaff/<?php echo $img; ?>" alt="">
        </a>
	    <div class="caption">
		<h3><?php echo $name; ?></h3>
		<h4><?php echo $nName; ?></h4>
		<p><?php echo $title; ?></p>
		<!-- <a class="btn btn-primary" href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a> -->
	    </div> <!--caption-->
       </div> <!--col-->
       <?php
	     $id++;
	     if ($id > $totalID) {
	        $id = $id + $limit;
	     }
	     
	  } //end inner loop
	  $limit = $maxCol * $times;
	  $times++;
       ?>
       </div> <!--row-->
       <!-- /.row -->
       <hr>
       <?php
	     $currRow++;
	  } //end outer loop
       ?>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>


