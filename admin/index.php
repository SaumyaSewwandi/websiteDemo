<?php
require "db.php";
include "data.php";
session_start();
if(!isset($_SESSION["uid"])){
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Dashboard</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css//style.css" rel="stylesheet">
   

  </head>
  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Admin Kit</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Dashboard</a></li>
            <li><a href="add_category.html">Add Category</a></li>
            <li><a href="add_post.html">Add New Post</a></li>
            <li><a href="users.html">Users</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Welcome, <?php echo $_SESSION["name"]; ?></a></li>
              <li><a href="logout.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard <small>Manage  Site</small></h1>
          </div>
          <div class="col-md-2">
            
          </div>
        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li class="active">Dashboard</li>
        </ol>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="index.php" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
              <a href="add_category.html" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Add Category</a>
              <a href="add_post.html" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Add New Post </a>
              <a href="users.html" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Users </a>
            </div>

          </div>
          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Website Overview</h3>
              </div>
               <div class="panel-body">
                <div class="col-md-4" >
                  <div class="well dash-box">
                    <h1><span class="glyphicon glyphicon-user" aria-hidden="true"></span></h1>
                    <h4>Users</h4>
					<h2><?php echo $row2  ?></h2>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="well dash-box">
                    <h1><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> </h1>
                    <h4>Categories</h4>
					<h2><?php echo $row1 ?></h2>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="well dash-box">
                    <h1><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></h1>
                    <h4>Posts</h4>
					<h2><?php echo $row ?></h2>
                  </div>
                </div>
               
              </div>
               
              </div>
			   </div>  

        </div>
      </div>
    </section>

    <footer id="footer">
      <p>Copyright Admin Kit, &copy; 2021</p>
    </footer> 

  
     
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script>
// $.ajax({
                // url: "http://localhost/cms/post.php",
                // method: "GET",
                // dataType: 'JSON',
                // cache: false,
                // success: function (response) {
                    // console.log(response);

                    // response.forEach(function(row){
                        
                        // $('#postContainer').append('<h1>'+row.title+'</h1>'); //postContainer Div
                        // $('#postContainer').append('<img src = "uploadFiles/'+row.img+' "style = "width:50% ; height:50%">');
                        // $('#postContainer').append('<p>'+row.content+'</p>');
						// $('#postContainer').append('<p>'+row.date+'</p>');
                       
						// /*$('#postContainer').append('<table><th><tr><td>'+row.title+'</td><td>'+ row.content +'</td></tr></th></table>');*/

                    // });
                // },

                
                // error: function(response) {

                // }
            // });
			
			
		
	
  </script>
  
	
  </body>
</html>
