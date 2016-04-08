<?php
$id = 1;

$sql = "SELECT * FROM roosterteeth;";
$result = $conn->query($sql);
$rowcount = mysqli_num_rows($result);


$sql = "SELECT * FROM roosterteeth WHERE ID='$id';";
$result = $conn->query($sql);
$rowcount = mysqli_num_rows($result);
while ($id <= $rowcount)
{
while($row = $result->fetch_assoc()) {
	$kerry = ("id: " . $row["ID"]);
}
$id++;
}


?>

<!-- /.row -->
<?php 
$sql = "SELECT * FROM roosterteeth;";
$result = $conn->query($sql);
$rowcount = mysqli_num_rows($result);
for ($currRow = 1; $currRow <= $rowcount; $currRow++) {
$limit = 3;
$times = 2;
?>
<!-- Project One -->
<div class="row">
<?php
for ($id = 1; $id <= $limit; $id++) {
    $sql = "SELECT * FROM roosterteeth WHERE ID='$id';";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
    	$name = ("id: " . $row["ID"]);
    	$nName = ("Nickname: " . $row["Nickname"]);
    	$title = ("Title: " . $row["title"]);
    } //end while
?>
    <div class="col-md-4">
        <a href="#">
            <img class="img-responsive portrait" src="images/burnie.jpg" alt="">
        </a>
    <div class="caption">
        <h3><?php echo $name; ?></h3>
        <h4><?php echo $nName; ?></h4>
        <p><?php echo $title; ?></p>
        <a class="btn btn-primary" href="#">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
    </div> <!--caption-->
    </div> <!--col-->
<?php

$limit = $limit * $times;
$times++;
} //end inner loop
?>
</div> <!--row-->
 <!-- /.row -->

<hr>
<?php
} //end outer loop
?>
