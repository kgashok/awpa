	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-metro.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	

	<div class="container-fluid">
		<div class="jumbotron text-center" style="background-color: #ffffff; padding-bottom: 0px;">
			<img src="image/aulo.jpg" alt="Lights" class="w3-image" style="float: left;">
			<img src="image/topics.png" alt="Lights" class="w3-image">
			<BR><br>
			<div style="float: left;">
				<b>Welcome 7117-KGISL INSTITUTE OF TECHNOLOGY !!</b>
			</div>
			<div style="float: right;">
				<b>Last Login Time : 
				<?php
					$d=strtotime("yesterday");
					echo date("Y-m-d h:i:sa", $d);
				?>
			</b>
			</div><br><br>
			
			<div class="navbar navbar-default " role="navigation" >
			    <div class="container">
			        <!--<div class="navbar-header">
			            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			                <span class="sr-only">Toggle navigation</span>
			                <span class="icon-bar"></span>
			                <span class="icon-bar"></span>
			                <span class="icon-bar"></span>
			            </button>
			            <a class="navbar-brand" href="#">NavBar</a>
			        </div> -->
			        <div class="collapse navbar-collapse">
			            <!--<ul class="nav navbar-nav navbar-right">
			                <li><a href="https://github.com/fontenele/bootstrap-navbar-dropdowns" target="_blank">GitHub Project</a></li>
			            </ul> -->
			            <ul class="nav navbar-nav">
			                <li><a href="#">Home</a></li>
			                <li><a href="#">Student Details <i class="fa fa-caret-down" aria-hidden="true"></i></a></li>
			                <li><a href="#">Faculty Details <i class="fa fa-caret-down" aria-hidden="true"></i></a></li>
			                <li>
			                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Examination <b class="caret"></b></a>
			                    <ul class="dropdown-menu multi-level">
			                        <li><a href="#">Elective Selection<i class="fa fa-caret-right pull-right" aria-hidden="true"></i></a></li>
			                        <li><a href="#">Session Arrangement<i class="fa fa-caret-right pull-right" aria-hidden="true"></i></a></li>
			                        <li class="dropdown-submenu">
			                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Assessment<i class="fa fa-caret-right pull-right" aria-hidden="true"></i></a>
			                            <ul class="dropdown-menu">
			                                <li><a href="#">Student Status</a></li>
			                                <li><a href="#">Student Assessment Entry</a></li>
			                                <li><a href="#">Ph.D. -Assessment Entry</a></li>
			                                <li><a href="#">Additional Subjects</a></li>
			                                <li><a href="#">Proforma - 1</a></li>
			                                <li><a href="#">Proforma 2 & 3 Entry</a></li>
			                                <li><a href="#">Proforma - 5</a></li>
			                            </ul>
			                        </li>
			                        <li><a href="#">Internal Marks<i class="fa fa-caret-right pull-right" aria-hidden="true"></i></a></li>
			                        <li><a href="#">Registration<i class="fa fa-caret-right pull-right" aria-hidden="true"></i></a></li>
			                        <li><a href="#">Hall Ticket<i class="fa fa-caret-right pull-right" aria-hidden="true"></i></a></li>
			                        <li><a href="#">Attendance Sheet<i class="fa fa-caret-right pull-right" aria-hidden="true"></i></a></li>
			                        <li><a href="#">Exam Absentees<i class="fa fa-caret-right pull-right" aria-hidden="true"></i></a></li>
			                        <li><a href="#">Question Paper<i class="fa fa-caret-right pull-right" aria-hidden="true"></i></a></li>
			                        <li><a href="#">Stationary Stock</a></li>
			                        <li><a href="#">Revaluation Process</a></li>
			                        <li><a href="#">Data For Degree Certificate</a></li>
			                    </ul>
			                </li>
			                <li><a href="#">Reports <i class="fa fa-caret-down" aria-hidden="true"></i></a></li>
			                <li><a href="#">Admin Utility <i class="fa fa-caret-down" aria-hidden="true"></i></a></li>
			                <li><a href="#">Entry Status <i class="fa fa-caret-down" aria-hidden="true"></i></a></li>
			                <li><a href="#">Help <i class="fa fa-caret-down" aria-hidden="true"></i></a></li>
			                <li><a href="#">Logout</a></li>
			            </ul>
			        </div>
			    </div>
			</div>
		</div>
	</div>
		

	<script>
		$(document).ready(function(){
		  $('.dropdown-submenu a.test').on("click", function(e){
		    $(this).next('ul').toggle();
		    e.stopPropagation();
		    e.preventDefault();
		  });
		});

	</script>