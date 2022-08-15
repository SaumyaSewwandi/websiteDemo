<?php 


    require "db.php";
	
     $sql = "SELECT id from posts ORDER BY id" ;

      $result = mysqli_query($conn,$sql);
	  $row = mysqli_num_rows($result);
	  
	  $sql1 = "SELECT id from category ORDER BY id" ;

      $result1 = mysqli_query($conn,$sql1);
	  $row1 = mysqli_num_rows($result1);
	  
	  $sql2 = "SELECT user_id from user_info ORDER BY user_id " ;

      $result2 = mysqli_query($conn,$sql2);
	  
	  $row2 = mysqli_num_rows($result2);
		
	
		
?>
