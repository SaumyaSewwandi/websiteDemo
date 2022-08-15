<?php require_once('inc/top.php');?>
  </head>
  
  
  <body> 
 
       <?php

	   require_once('inc/header.php');
       $number_of_posts = 2;

     if(isset($_GET['page'])){
         $page_id = $_GET['page'];
       }
       else{
         $page_id = 1;
       }
      
      if(isset($_GET['cat'])){
         $cat_id = $_GET['cat'];
		 $cat_query = "SELECT * FROM category  WHERE id = $cat_id ";
         $cat_run = mysqli_query($con, $cat_query);
         $cat_row = mysqli_fetch_array($cat_run ); 
		 $cate_id = $cat_row['id'];
		 $cat_name = $cat_row['name'];

        
         
       }




      $all_posts_query = "SELECT * FROM posts";
		if(isset($cat_id)){
		    $all_posts_query .= " where category_id = $cat_id ";
		} 
       $all_posts_run = mysqli_query($con,$all_posts_query);
       $all_posts = mysqli_num_rows($all_posts_run);
       $total_pages = ceil($all_posts /  $number_of_posts);
       $posts_start_from =($page_id - 1) * $number_of_posts;
       
       ?>

 

  <section>
    <div class="container col-11">
        <div class="row">

           <div class="col-md-8">
         <?php
            
       
          $query ="SELECT pos.id as Pid,pos.title,pos.img,pos.content,pos.date,cat.* FROM posts pos, category cat WHERE cat.id = pos.category_id";
           if(isset($cat_id )){
			   $query .= "  and pos.category_id =".$cat_id;
		   }

            $query .= " ORDER BY pos.id DESC LIMIT $posts_start_from, $number_of_posts";
            
            $run = mysqli_query($con, $query);
          
            if(mysqli_num_rows($run) > 0)
 
              while($row = mysqli_fetch_array($run)){

                
				$id = $row['id'];
        $Pid = $row['Pid'];
				$title = $row['title'];
				$img = $row['img'];
				$content = $row['content'];
				$date = $row['date'];
				$category = $row['name'];

        
 ?>
      

              		<div class="post">

                   		

                        			<div class=" post-title">
                                			<a href="post.php?Pid=<?php echo $Pid; ?>"><h2><?php echo $title;?> </h2></a>
                                      <p><i class="far fa-clock"></i> <?php echo $date;?></p>
                        			</div>



                        				<a href="post.php?Pid=<?php echo $Pid; ?>"><img src="admin/uploadFiles/<?php echo $img;?>" alt="post1"></a>
                        				<p class="desc">
										            <?php echo substr($content,0,300);?>........
                                
                        				</p>
                        				 
              
                        <a href="post.php?Pid=<?php echo $Pid; ?>"class="btn btn-primary">Read More...</a> 
                        				<div class="bottom">
                        				<span class="first"><i class="fas fa-folder"></i><a href="#"> <?php echo $category;?></a></span>
                         				</div>
              </div>
                <?php
                }
                else{
                  echo "<center><h1> No Posts available </h1></center>";
                }
			  
						  
      ?>

      <nav id = "pagination" >
  <ul class="pagination">
  <?php
for ($i = 1; $i <= $total_pages ; $i++) { 
  echo "<li class =''page-item ' '".($page_id == $i ? 'active' :' ')."'><a class ='page-link' href='index.php?page=".$i."&".(isset($cat_id)?"cat=$cat_id":"")."'>$i</a></li>";
}

      ?>
    
  </ul>
</nav>
       		</div>



                 <div class="col-md-4">
                <?php require_once('inc/sidebar.php');?>
                 </div>
           
    </div>
  </div>

</section>


<div class="container">
    
</div>
<footer>
<?php require_once('inc/footer.php');?>
</footer>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>