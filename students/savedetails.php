<?php

//connects with the db(mysql), db name students. Table name-student_details
$con = mysqli_connect("localhost","root","","students");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
} 

  
$Name= $_POST["name"];
$FatherName= $_POST["f_name"];
$Email= $_POST["email"];
$DOB= $_POST["dob"];
$perc_10= $_POST["perc_10"];
$Percentage_12= $_POST["percentage_12"];
$CGPA= $_POST["cgpa"];
$Department=$_POST["department"];


//inserting form data into table
$sql = "INSERT INTO student_details (name,f_name,email,dob,10th_perce,12th_perc,cgpa,department) VALUES ('$Name','$FatherName','$Email','$DOB','$perc_10','$Percentage_12','$CGPA','$Department')";
if (mysqli_query($con, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: "  . "<br>" . mysqli_error($con);
}

?>