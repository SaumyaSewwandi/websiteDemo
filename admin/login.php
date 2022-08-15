<?php
include "db.php";

session_start();

if(isset($_POST["email"]) && isset($_POST["password"])){
	$email = mysqli_real_escape_string($conn,$_POST["email"]);
	$password = mysqli_real_escape_string($conn,$_POST["password"]);

	$sql = "SELECT * FROM user_info WHERE email = '$email'";
	$run_query = mysqli_query($conn,$sql);
	$count = mysqli_num_rows($run_query);
	
	if($count > 0){
		
		while($row = mysqli_fetch_array($run_query)){
			
			
			if(password_verify($password, $row["password"])){
				
				$_SESSION["uid"] = $row["user_id"];
				$_SESSION["name"] = $row["first_name"];
				
				echo "login_success";
				exit();
				
				}
			else{
			echo "<span style='color:red;'>Incorrect password...!</span>";
			exit();
				}
		}
	}
	else
{
	
	echo "<span style='color:red;'>Incorrect Email Address...!</span>";
}
	
}

		
	
?>