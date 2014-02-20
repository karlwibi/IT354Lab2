<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Assignment 3</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/starter-template.css" rel="stylesheet">

<!--<link href="css/carousel.css" rel="stylesheet" type="text/css">-->

</head>

<body>

<div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Assignment 3</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li ><a href="index.html">Home</a></li>
            <li class="active"><a href="projects.php">projects</a></li>
            <li><a href="client.html">Client</a></li>
          </ul>
           
        </div><!--/.nav-collapse -->
        
      </div>
    </div>


    <div class="container">

      <div class="starter-template">
        <!-- 1st row-->
        <div class="row">
        <div class="col-md-12">
        <div id="box-message">
        <div class="col-md-12 text-right">
       <span id="closeB"> X
        </span>
        </div>
        <div class="col-md-12 text-left">
       
       <?php 
       
       echo 'Hi there i\'m using php ';
       ?>
       <p>
       Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at ullamcorper risus. Maecenas dictum diam facilisis sapien condimentum vulputate. Morbi nec pellentesque nisl. Pellentesque molestie ornare congue. Donec id lacus nec leo porta suscipit eget laoreet dui. Etiam quis sapien viverra, luctus mauris at, lacinia sapien. Sed vel mi eu libero scelerisque aliquam. Vestibulum viverra facilisis ante, eu consectetur neque ultrices dictum. Pellentesque nec mi sollicitudin, ornare sapien sit amet, pulvinar dui. Praesent ultrices risus non turpis laoreet sollicitudin. Suspendisse justo purus, ullamcorper ac lorem et, laoreet porta tortor.
       </p>
        </div>
        
        </div>
        </div>
        
        
        </div>  <!-- end 1st row-->       
            <!-- 2nd row-->
        <div class="row" style="text-align:justify">
        
        <div class="col-md-12">
        
        <table class="table table-bordered table-hover">
  <tr>
				<th>Project Description</th>
				<th>Due Date</th>
				<th>Client Name</th>
				<th>Client Phone Number</th>
			  </tr>
			  <tr>
			  <td>Assignment 3</td>
				<td>02/12/2014</td>
				<td>Kevin Schaefer</td>
				<td>309-123-4567</td>
				
			  </tr>
</table>

        
        </div>
        
        
        </div> <!-- end 2nd row--> 
        
      </div>

    </div><!-- /.container -->
    
  


<!--  BootStrap JS files--> 
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script> 
<script src="http://jquery.bassistance.de/validate/jquery.validate.js"></script>


<script src="js/bootstrap.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script>


$(document).ready(function(){

$('#closeB').click(function(){
	$('#box-message').hide();
	
});
	
});
</script>
</body>
</html>
