<?php

//Burnie Burns
$sql = "SELECT * FROM roosterteeth WHERE LastName='Burns';";
$result = $conn->query($sql);

//output data
while($row = $result->fetch_assoc()) {
	$name1 = ($row["FirstName"]. " " . $row["LastName"]);
	$test1 = ("Title: <br>" . $row["title"]);
}
//--------------------------------

$sql = "SELECT * FROM roosterteeth WHERE LastName='Hullum' AND FirstName='Matt';";
$result = $conn->query($sql);

//output data
while($row = $result->fetch_assoc()) {
	$test2 = ("id: " . $row["ID"]. " - Name: " . $row["FirstName"]. " " . $row["LastName"]. " - Bio: " . $row["bio"]. " - Nickname: " . $row["Nickname"]. "<br>");
}

$sql = "SELECT * FROM roosterteeth WHERE FirstName='Geoff';";
$result = $conn->query($sql);

//output data
while($row = $result->fetch_assoc()) {
	$test3 = ("id: " . $row["ID"]. " - Name: " . $row["FirstName"]. " " . $row["LastName"]. " - Bio: " . $row["bio"]. " - Nickname: " . $row["Nickname"]. "<br>");
}

$sql = "SELECT * FROM roosterteeth WHERE LastName='Sorola' AND FirstName='Gustavo';";
$result = $conn->query($sql);

//output data
while($row = $result->fetch_assoc()) {
	$test4 = ("id: " . $row["ID"]. " - Name: " . $row["FirstName"]. " " . $row["LastName"]. " - Bio: " . $row["bio"]. " - Nickname: " . $row["Nickname"]. "<br>");
}

$sql = "SELECT * FROM roosterteeth WHERE LastName='Heyman' AND FirstName='Joel';";
$result = $conn->query($sql);

//output data
while($row = $result->fetch_assoc()) {
	$test5 = ("id: " . $row["ID"]. " - Name: " . $row["FirstName"]. " " . $row["LastName"]. " - Bio: " . $row["bio"]. " - Nickname: " . $row["Nickname"]. "<br>");
}

?>
