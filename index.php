<?php
if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);
    
    if(!$con){
        die("Connection to the database failed due to" . mysqli_connect_error());
    }
    
   
   $name = $_POST['name'];
   $age = $_POST['age'];
   $gender = $_POST['gender'];
   $email = $_POST['email'];
   $phno = $_POST['phno'];
   $a1 = $_POST['a1'];
   $a2 = $_POST['a2'];
   $test = $_POST['test'];
   
   $sql = "INSERT INTO `webtech`.`lab_tests` (`Name`, `Age`, `Gender`, `Email`, `Phno`, `Address-1`, `Address-2`, `Test`, `Date`) VALUES ('$name', '$age', '$gender', '$email', '$phno', '$a1', '$a2', '$test', current_timestamp());";
    
    // echo $sql;

    if($con->query($sql) == true){
        // echo "Successfully inserted";
    }
    $con->close();
} 
?>

<html>

<head>
	<title> VH Labs </title>

	<link href="css/style.css" type="text/css" rel="stylesheet">

</head>

<body>

	<div class="top">
		<div>
			Contact Us +91 96366 20000 / 01 | vh@labs.com
		</div>
	</div>

	<div class="logo">
		<div>
			<table>
				<tr>
					<td width="600px" style="font-size:50px;font-family:forte;">
						<span style="color:#428bca;"> VH </span>
						<span style="color:#000;"> Labs</span>
					</td>
					<td> <br> <br>

						<a href="index.html">HOME</a>
						<a href="about.html">ABOUT US</a>
						<a href="service.html">SERVICE</a>
						<a href="test.html">BOOK A TEST</a>
						<a href="contact.html">CONTACT US</a>

					</td>
				</tr>
			</table>
		</div>
	</div>

	<div class="middle">
		<div style="background-image:url('img/1.jpg'); background-size: 100%; background-repeat: no-repeat;">
			<p>
				<br> <br>
				Health Care Services <br>
				<span style="size:5px;"> We Care About Your Health </span>
			</p>
		</div>
	</div>

	<div class="bottom">
		<div>
			<table border="0">
				<tr>
					<td width="700px">
						<span style="color:#000;"> We are medical center </span> <br> <br>

						<span style="color:#000; size:5px;"> We Have Medicare Plan Options for You! </span> <br> <br>

							The Company's broad spectrum of services offer around 3,487 clinical laboratory tests and
							530 profiles. Various test combinations, specific to a disease or disorder and wellness
							profiles used for health and fitness screening form a part of the Company's service profile.
							<br><br>

							VH Labs has invested in a variety of specialized tests and also adopted several advanced
							tests and technologies introduced in the global market. As on date, the Company offers 2,799
							specialized tests. One of the prime reasons behind the Company's leading position in the
							diagnostics industry is its track record of introducing specialized tests. <br><br>
							<ul>
								<li>Putting our patients first: Delivering reliable pathology reports
								<li>Working in tandem with doctors because pathology matters
								<li>Quality is a way of functioning at VH Labs
								<li>Bolstering our growth in the wellness space
								<li>Always closer to the patients
							</ul>
							<br>
					</td>


					<td> </td>
				</tr>


			</table>
		</div>
	</div>

	<div class="nav_down">
		<div>
			&copy; VH Labs, site designed & developed by Varad&Harshit
		</div>
	</div>
</body>

</html>
 




