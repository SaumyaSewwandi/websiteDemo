
<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light ">
       <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            
                <img src="img/logo1.png" alt="Logo" width="40px">
             Hi Traveller
            </a>
           
       
            
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
              <a class="nav-link" href="index.php"><i class="fas fa-home"> </i> Home<span class="caret"></span></a>
            </li>
            
            <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-list"></i> Categories <span class="caret"></span> </a>
              

                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?php
				$qyery ="SELECT * FROM category ORDER BY id asc";
			
                  $run = mysqli_query($con,$qyery);

                  if(mysqli_num_rows($run)>0){

                    while($row = mysqli_fetch_array($run)){

                      $category = ucfirst($row['name']);
					  $id = $row['id'];

                      echo "<a class='dropdown-item' href='index.php?cat=".$id."'>$category </a>";
                    }
                  }
                  else{
                    echo "<a class='dropdown-item' href='#'>No Categories Yet</a>";
                  }
                  
                  ?>
                  </li>
				  
				  
				<li class="nav-item ">
                <a class="nav-link" href="http://localhost/cms/admin/login_form.html"><span> </span><i class="fas fa-user-circle"> </i>Login<span class="caret"></span></a>
              </li>	
              <li class="nav-item ">
                <a class="nav-link" href="contact-us.php"><i class="fas fa-phone"> </i> Contact Us<span class="caret"></span></a>
              </li> 

						  
          </ul>
        
        </div>
    </div>
 </nav>
 <br>
 <br>
<div class="container col-md-11">

 <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">

  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner">
    
  <div class="carousel-item active">
      <img class="d-block w-100" src="img/img4.jpg" alt="First slide">
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="img/img5.jpg" alt="Second slide">
    </div>

    <div class="carousel-item">
      <img class="d-block w-100" src="img/img6.jpg" alt="Third slide">
    </div>

  </div>

  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>

  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
                </div>
                </div>