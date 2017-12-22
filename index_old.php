<!DOCTYPE html>
<html>
<head>
	<title>Anna University, CEO	</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-metro.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<style>
.dropdown-submenu {
    position: relative;
}

.dropdown-submenu .dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -1px;
}
</style>
</head>
<body>
	<div class="container-fluid">
		<div class="jumbotron text-center">
			<img src="image/aulo.jpg" alt="Lights" class="w3-image" style="float: left;">
			<img src="image/topics.png" alt="Lights" class="w3-image">
			<BR><br>
			<div style="float: left;">
				Welcome 7117-KGISL INSTITUTE OF TECHNOLOGY !!
			</div>
			<div style="float: right;">
				Last Login Time : 
				<?php
					$d=strtotime("yesterday");
					echo date("Y-m-d h:i:sa", $d);
				?>
			</div><br><br>
			<div class="w3-bar w3-metro-teal">
      			<a href="#" class="w3-bar-item w3-button ">Home</a>
				<a href="#" class="w3-bar-item w3-button ">Student Detail</a>
				<a href="#" class="w3-bar-item w3-button ">Faculty Detail</a>
				<div class="w3-dropdown-click">
					<button class="w3-button" onclick="myFunction()">Examination <i class="fa fa-caret-down" aria-hidden="true"></i></button>
					<div id="Demo" class="w3-dropdown-content w3-bar-block w3-border">
						<a href="#" class="w3-bar-item w3-button w3-metro-teal">Elective Selection<i class="fa fa-caret-right pull-right" aria-hidden="true"></i></a>
						<a href="#" class="w3-bar-item w3-button w3-metro-teal">Session Arrangement<i class="fa fa-caret-right pull-right" aria-hidden="true"></i></a>
						<a class="test w3-bar-item w3-button w3-metro-teal" href="#">Assessment <span class="caret"></span></a>
				        <ul class="dropdown-menu">
				          <li><a tabindex="-1" href="#">Student Status</a></li>
				          <li><a tabindex="-1" href="#">Student Assessment Entry</a></li>
				        </ul>
						<a href="#" class="w3-bar-item w3-button w3-metro-teal">Internal Marks</a>
						<a href="#" class="w3-bar-item w3-button w3-metro-teal">Regulation</a>
						<a href="#" class="w3-bar-item w3-button w3-metro-teal">Hall Ticket</a>
						<a href="#" class="w3-bar-item w3-button w3-metro-teal">Attendance Sheet<i class="fa fa-caret-right pull-right" aria-hidden="true"></i></a>
						<a href="#" class="w3-bar-item w3-button w3-metro-teal">Question Paper<i class="fa fa-caret-right pull-right" aria-hidden="true"></i></a>
						<a href="#" class="w3-bar-item w3-button w3-metro-teal">Revaluation Process</a>
					</div>
				</div>
				<a href="#" class="w3-bar-item w3-button ">Report</a>
  			</div>
  		</div>
	</div>
		

	<script>
		function myFunction() {
	    	var x = document.getElementById("Demo");
		    if (x.className.indexOf("w3-show") == -1) {
		        x.className += " w3-show";
		    } else { 
		        x.className = x.className.replace(" w3-show", "");
		    }
		}

		$(document).ready(function(){
  $('a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});

	</script>
</body>