<?php 


    require "db.php";

    if($_SERVER['REQUEST_METHOD'] === "GET") {

        if(isset($_GET['id'])) {

            $sql = "SELECT * FROM posts WHERE id=".$_GET['id'];

            $result = $conn->query($sql);

            header("HTTP/1.1 200 OK"); 
            echo json_encode($result->fetch_assoc());

        } else {

            $sql = "SELECT * FROM posts";

            $result = $conn->query($sql);
 
            $records = [];

            while($i = $result->fetch_assoc()){
                $records[] = $i;
            }

            header("HTTP/1.1 200 OK"); 
            echo json_encode($records); 

        }

    }
  
	
	
	if($_SERVER['REQUEST_METHOD'] === "POST") {
       	date_default_timezone_set('Asia/Colombo');
        $massage = "";
        $title = $_POST['title'];
        $content = $_POST['content'];
		$image = $_FILES['img'];
        $category_id = $_POST['category_id'];
		$date = date('Y-m-d');

        //Get the temp file path
        $tmpFilePath = $_FILES['img']['tmp_name'];
		$picture_size =  $_FILES['img']['size'];
		
   //Setup our new file path
   if ($tmpFilePath != "" && $picture_size < (5000000))
            {
				
                $newFilePath = "uploadFiles/" . $_FILES['img']['name'];

                //Upload the file into the temp dir
                if(move_uploaded_file($tmpFilePath, $newFilePath)) {

				$sql = "INSERT INTO posts(title, img, content, date, category_id) VALUES ('".$title."','".$_FILES['img']['name']."','".$content."','".$date."','".$category_id."')";
                    if ($conn->query($sql) === TRUE) 
                    {
                        header("HTTP/1.1 200 OK");
                         $massage =  "New Post added successfully";
						
                    } 
                    else 
                    {
                        header("HTTP/1.1 403 ERROR");
												
                        $massage = $conn->error;
                    }
                }
				
			}
		else {
			
			$massage =  "Insert Faild";
		}
            echo json_encode($massage);
			
    } 


 

    if($_SERVER['REQUEST_METHOD'] === "DELETE") {
        if(isset($_GET['id'])) {

            $id = $_GET['id'];

            $sql = "DELETE FROM posts WHERE id='$id'";

            if($conn->query($sql)) {
                header("HTTP/1.1 200 OK");
				echo json_encode(
                    array(
                        'status' => '200' ,'message' => 'Post removed successfully'  
                    )
                );
            } else {
                header("HTTP/1.1 403 ERROR");
                echo json_encode(
                    array(
                        'status' => '403' ,'message' => 'can not remove'  
                    )
                );
            }
        }
    }

?>