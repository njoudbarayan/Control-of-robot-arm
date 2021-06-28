<?php
                                   // Create connection
$conn = mysqli_connect("localhost", "root", "", "control robot");
                                  
                                   
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$result = $conn->query("SELECT * FROM `range` WHERE 1"); 

           

While($row = $result->fetch_assoc()){

                echo "المحرك الأول : ".$row['range1']."<br>";
                echo "المحرك الثاني : ".$row['range2']."<br>";
                echo "المحرك الثالث : ".$row['range3']."<br>";
                echo "المحرك الرابع : ".$row['range4']."<br>";
                echo "المحرك الخامس : ".$row['range6']."<br>";
                echo "المحرك السادس : ".$row['range6']."<br>";
                echo "زر التشغيل : ".$row['on or off']."<br>";


          }

          $conn->close(); 

          ?>