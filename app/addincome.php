<?php
include_once 'data.php';
if(isset($_POST['save']))
{	 
	 $Amount = $_POST['Amount'];
	 $Date = $_POST['Date'];
	 $Time = $_POST['Time'];
     $Money = $_POST['Money'];
     $Comment = $_POST['Comment'];
     $Work = $_POST['Work'];

     
	 $sql = "INSERT INTO addincome (Amount,Date,Time,Money,Comment,Work)
	 VALUES ('$Amount','$Date','$Time','$Money','$Comment','$Work')";
	 if (mysqli_query($conn, $sql)) {
		//echo "New record created successfully !";
		 //header("Location:http://localhost/kiran/app/app.php");
		 echo "<script>alert('New record created successfully !');window.location.href='http://localhost/kiran/app/app.php';</script>";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>