<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	 $first_name = $_POST['first_name'];
	 $last_name = $_POST['last_name'];
	 $city_name = $_POST['city_name'];
	 $email = $_POST['email'];
         $cardno = $_POST['cardno'];
	 $expdate = $_POST['expdate'];
         $cvvno = $_POST['cvvno'];
         $amount = $_POST['amount'];
       $sql = "INSERT INTO usercard (first_name,last_name,city_name,email,cardno,expdate,cvvno,amount)
	 VALUES ('$first_name','$last_name','$city_name','$email','$cardno','$expdate','$cvvno','$amount')";
	 if (mysqli_query($conn, $sql)) {
		echo "Payment details successfully stored!";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>