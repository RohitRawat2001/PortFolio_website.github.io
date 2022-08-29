<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="form";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{	
	 $first_name = $_POST['first_name'];
	 $Email = $_POST['Email'];
	 $first_message = $_POST['first_message'];
	 
	 
	 $sql_query = "INSERT INTO enter_details(first_name,Email,first_message)
	 VALUES ('$first_name','$Email','$first_message')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
		echo "New Details Entry inserted successfully !";
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
