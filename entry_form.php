<!DOCTYPE html>
<html>
<head>
	<title>Anna University, CEO	</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-metro.css">
	<link rel="stylesheet" type="text/css" href="css/myStyle.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body style="background-color:#FFFFFF;">
	<?php include 'header.php'; ?>

	<div class="container">
		<div class="tab">
		  <button class="tablinks">Student Assessment</button>
		</div>

		<div class="tabcontent" style="display:block; border-radius: 10px;">
		  <div class="container">
			  	<form class="form-inline" action="">
			  		<table width="500px;">
		  				<tr>
				  			<td><label for="assess_period">Assess Period</label></td>
				  			<td>
				  				<select class="form-group" style="width: 100%;" id="sel1">
							    <option>select</option>
							    <option>1</option>
							    <option>2</option>
							    <option>3</option>
							    <option>4</option>
							  </select>
							</td><td width="50px;"></td>
							<td><button type="submit" class="btn btn-default" style="background-color: black; color: white; border-radius: 10px;" onclick="viewMenu()">Go</button></td>
				  		</tr>
			  		</table>
			  	</form>

			  	<br><br>
			  	<div class="container" id="entry_Menu">
				  <form class="form-inline" action="">
				    <div class="form-group">
				      <label for="university">University:</label>
				  <select class="form-control" id="univ">
				    <option>Select</option>
				    <option>AUC</option>
				    <option>AUCBE</option>
				    <option>AUT</option>
				  </select>
				    </div>
				    <div class="form-group">
				      <label for="reg">Regulation:</label>
				  <select class="form-control" id="reg">
				    <option>Select</option>
				    <option>2008</option>
				    <option>2013</option>
				    <option>2017</option>
				  </select>
				    </div>
				    <div class="form-group">
				      <label for="semester">Semester:</label>
				  <select class="form-control" id="semester">
				    <option>Select</option>
				    <option>1st Semester</option>
				    <option>2nd Semester</option>
				    <option>3rd Semester</option>
				    <option>4th Semester</option>
				    <option>5th Semester</option>
				    <option>6th Semester</option>
				    <option>7th Semester</option>
				    <option>8th Semester</option>
				  </select>
				    </div>
				    <div class="form-group">
				      <label for="period">Period:</label>
				  <select class="form-control" id="period">
				    <option>Select</option>
				    <option>1st</option>
				    <option>2nd</option>
				    <option>3rd</option>
				    <option>4th</option>
				  </select>
				    </div>
				    <div class="container">
				    	<br>
				    	<div class="form-inline">
					      <label for="Branch">Branch:</label>
						  <select class="form-control" id="branch" style="width: 80%;">
						    <option>Select</option>
						    <option>103 - B.E. Civil Engineering</option>
						    <option>104 - B.E. Computer Science and Engineering</option>
						    <option>105 - B.E. Electrical and Electronics Engineering</option>
						    <option>106 - B.E. Electronics and Communication Engineering</option>
						    <option>114 - B.E. Mechanical Engineering</option>
						    <option>205 - B.Tech. Information Technology</option>
						  </select>
						    </div>
						    <br>
						    <div class="form-inline">
						      <label for="sub" >Subject:</label>
						  <select class="form-control" id="subject" style="width: 80%;">
						    <option>Select</option>
						    <option>IT6006 - Data Analtyics</option>
						    <option>IT6801 - Serivce oriented Architecture</option>
						    <option>CS6701 - Cryptography and Network Security</option>
						    <option>CS6702 - Graph Theory and Application</option>
						    <option>CS6703 - Grid and Cloud Computing</option>
						    <option>CS6704 - Resource Management Techniques</option>
						  </select>
					    </div>
				    </div>
				    <div>
				    	<br>
				    	<button type="submit" class="btn btn-default" style="position: absolute; right: 200px; background-color: black; color: white; border-radius: 10px;">Save</button>
				    	<br><br>
				  	</div>
				  </form>
				</div>
			</div>
			<div class="container-fluid">
	<?php
		include('database/dbConfig.php');
		$query = $db->prepare("SELECT * FROM student");
		$run = $query->execute();

		$rs = $query->fetchAll(PDO::FETCH_OBJ);

		$chat = '<table class="table">
					<tr>
						<th>S.No.</th>
						<th>Reg no.</th>
						<th>Name</th>
						<th>Total Period</th>
						<th>Att Period</th>
						<th>mark</th>
						<th>status</th>
					</tr>';

		$i = 1;
		foreach( $rs as $students )
		{
			$chat .= '<tr>
				<td>'.$i.'</td>
				<td>'.$students->RegNo.'</td>
				<td>'.$students->Name.'</td>
				<td><input type="text" style="width : 50%;" name="wh'.$students->RegNo.'"></td>
				<td><input type="text" style="width : 50%;" name="pr'.$students->RegNo.'"></td>
				<td><input type="text" style="width : 50%;" name="ma'.$students->RegNo.'"></td>
				<td></td>
			</tr>';
			$i++;
		}

	$chat .= '</table>';

		echo $chat;
		?>
		<div>
		<br>
		<button type="submit" id="markSubmit" class="btn btn-default" style="position: absolute; right: 50%; background-color: black; color: white; border-radius: 10px;">Save</button>
		<br><br>
	</div>
	</div>
	
		</div>
	</div>

	<script>
		function viewMenu() {
	    	var x = document.getElementById("entry_Menu");
		    if (x.hidden == true) {
		        x.hidden = x.hidden.replace(true, false);
		    } 
		}
	</script>

</body>
</html>