<?php

require "db.php";

if(isset($_POST["action"])){
	
	if($_POST["action"] == "PUT"){
		
	if(isset($_GET['id'])) {
		
		$id = $_GET['id'];
        date_default_timezone_set('Asia/Colombo');
        $massage = "";        
        $title = $_GET['title'];
		$image = $_FILES['img'];
        $content = $_GET['content'];
        $category_id = $_GET['category_id'];
		$date = date('Y-m-d');

        //Get the temp file path
        $tmpFilePath = $_FILES['img']['tmp_name'];
		$picture_size =  $_FILES['img']['size'];
		
   //Setup our new file path
   if ($tmpFilePath != "" && $picture_size < (5000000) )
            {
				
                $newFilePath = "uploadFiles/" . $_FILES['img']['name'];

                //Upload the file into the temp dir
                if(move_uploaded_file($tmpFilePath, $newFilePath)) {

				
				$sql = "UPDATE posts SET title='".$title."', img ='".$_FILES['img']['name']."',content='".$content."',date = '".$date."',category_id='".$category_id."' WHERE id='$id'";
               
			
			  if ($conn->query($sql) === TRUE) 
                    {
                        header("HTTP/1.1 200 OK");
                         $massage =  "Post updated successfully";
						
                    } 
                    else 
                    {
                        header("HTTP/1.1 403 ERROR");
												
                        $massage = $conn->error;
                    }
                }
				
			}
		else {
			
			$massage =  "Update Faild";
			
			}
            echo json_encode($massage);
			
                }
			}
			
			
  
	 
	
}
?>