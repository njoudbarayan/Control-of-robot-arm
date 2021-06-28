<?php
 
 
// Create connection
$conn = mysqli_connect("localhost", "root", "", "control robot");

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
 
 $range1=$_POST['range1'];
 $range2=$_POST['range2'];
 $range3=$_POST['range3'];
 $range4=$_POST['range4'];
 $range5=$_POST['range5'];
 $range6=$_POST['range6'];
 $run=$_POST['run'];


if (isset($_POST['save'])){

$sql="UPDATE `range` SET `range1`='$range1',`range2`='$range2',`range3`='$range3',`range4`='$range4',`range5`='$range5',`range6`='$range6' , `on or off`='$run' WHERE 1";


//$sql= "INSERT INTO `range` (`range1`, `range2`, `range3`, `range4`, `range5`, `range6`,`on or off`) VALUES ('".$_POST['range1']."','".$_POST['range2']."','".$_POST['range3']."','".$_POST['range4']."','".$_POST['range5']."','".$_POST['range6']."','".$_POST['run']."')";
 
$result = $conn->query($sql);
 echo "Record Values successfully";


}
 


?>
