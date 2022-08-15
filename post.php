
  <?php require_once('inc/top.php');?>
  
  </head>
  
  
  <body>
  <?php require_once('inc/header.php');?>
  
 <?php
   if (isset($_GET['Pid'])) {
       $Pid= $_GET['Pid'];
       $query = "SELECT * FROM posts WHERE id =  $Pid";
       $run = mysqli_query($con , $query);
       if (mysqli_num_rows($run) > 0 ){
           $row = mysqli_fetch_array($run);
           $id = $row['id'];
           $title = $row['title'];
           $img = $row['img'];
           $content = $row['content'];
           $date =$row['date'];
           $Cat_id =$row['category_id'];
           
         
         

       }
       else {
           header('Location: index.php');
       }
   }
 ?>
   

   

       






       

<section>

    <div class="container col-11">
        <div class="row">

            <div class="col-md-8">
             
                <div class="post"> 
                        <div class="row">
                            <div class="col-md-2 post-date">
        
                         
                                <div class="month"><b><?php echo $date; ?></b></div>
                         
                            </div>
                            <div class="col-md-10 post-title">
                            <a href="post.php?Pid=<?php echo $id; ?>"><h2><?php echo $title; ?>  </h2></a>
                            <p></p>
                        </div>
                        
                        </div> 
                        <a href="#"><img src="admin/uploadFiles/<?php echo $img;?>" alt="post1"></a>
                        <p class="desc">
                        <?php echo $content; ?>
                        
                        </p> 
                    
                        
                      
                 </div> 
                
             <div class="related-post">
                <h2>Related Posts</h2><hr>
                <div class="row">
                <?php
   
                $query2 = "SELECT * FROM posts WHERE category_id =  $Cat_id LIMIT 3";
                
                 $run1 = mysqli_query($con, $query2);
          
                    if(mysqli_num_rows($run1) > 0)
         
                      while($row2 = mysqli_fetch_array($run1)){
                    $Pid = $row2['id'];      
                    $title1 = $row2['title'];
                    $img1 = $row2['img'];
                      
                    ?>
                                <div class="col-sm-4">
                                <a href="post.php?Pid=<?php echo $Pid; ?>">
                                    <img src="admin/uploadFiles/<?php echo $img1;?>" alt="post1"></a>
                                    <a href="post.php?Pid=<?php echo $Pid; ?>"><h6><?php echo $title1; ?>  </h6></a>
                                    </a>
                                </div>

                                <?php } ?>
                        
                                
                            
                

                </div>
                
            </div>
            

        </div>
        <div class="col-md-4">

        <?php require_once('inc/sidebar.php');?>

        </div>
        
        


    </div>
    
</section>

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