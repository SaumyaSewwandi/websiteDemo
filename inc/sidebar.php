<!-- <div class="widgets">
        <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>  
</div> -->

                <div class="widgets">
                    <div class="popular">
                        <h4>Recent Posts</h4>
                           
                         <?php
                            $p_query ="SELECT * FROM posts  ORDER BY id DESC LIMIT 5";
                            $p_run = mysqli_query($con,$p_query);
                            if(mysqli_num_rows($p_run)>0){
                            while($row = mysqli_fetch_array($p_run)){
                            $id = $row['id'];
                            $title = $row['title'];
                            $img = $row['img'];
                            $date = $row['date'];
                        ?>
                        <hr>
                            <div class="row">
                                <div class="col-md-6">
                       
                                    <img src="admin/uploadFiles/<?php echo $img;?>" alt="">
                            </div>
                           
                            <div class="col-md-6 details">
                                <h2 style="font-size:15px"> <a href = "post.php?Pid=<?php echo $id; ?>"> <?php echo $title;?></a></h2>
                                <p style="font-size:12px"><i class="far fa-clock"></i> <?php echo $date;?></p>
                               
                            </div>
                            </div>
                        <?php
                            }
                        }
              else{
                  echo"";
              }     
                        ?>
        
                            
                    </div>        
                </div>
        
                 
                <div class="widgets">
                    <div class="popular">
                        <h4>Categories</h4>
                        <hr>
                        
					
					<div class="row">
                            <div class="col-md-12">
                              <?php
                            $p_query ="SELECT * FROM category  ";
                            $p_run = mysqli_query($con,$p_query);
                            if(mysqli_num_rows($p_run)>0){
                            while($row = mysqli_fetch_array($p_run)){
                            $id = $row['id'];
                            $cat = $row['name']; 
							
							
							
							
							 
                          
                  
                        ?>
						
												
								
						
								<ul><li><?php echo "<a href='index.php?cat=".$id."'>"?>
								<?php echo $cat;"</a>" ?></li></ul>
                          		
					 <?php
                            }
                        }
                 
                        ?>	         
                               
                            </div>
							</div >
						
                  						
                       

                    </div>
                </div>