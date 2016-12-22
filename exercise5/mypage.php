<?php
	include_once 'dbconfig.php';
	if(isset($_POST['submit']))
		{
			// variables for input data
			$name = $_POST['name'];
			$nName = $_POST['nName'];
		    $email = $_POST['email'];
			$hAd = $_POST['hAd'];
			$gender = $_POST['gender'];
			$cNum = $_POST['cNum'];
			$comment = $_POST['comment'];
			// variables for input data
			
			// sql query for inserting data into database			 
			$sql_query = "INSERT INTO users(name,nName,email,hAd,gender,cNum,message) VALUES ('$name','$nName','$email','$hAd','$gender','$cNum','$comment')";
			mysqli_query($con,$sql_query);
			// sql query for inserting data into database
		}
?>

<html>
	<head>
		<title>
			TEACUP
		</title>
		<style>
			body {
				text-align : center;
				font-family: "simplifica";
				font-size: 50px;
			}
			
			a:link {
				color: black;
				background-color: transparent;
				text-decoration: none;
			}
			
			a:visited {
				color: black;
				background-color: transparent;
				text-decoration: none;
			}
			
			a:hover {
				color: red;
				background-color: transparent;
				text-decoration: none;
			}
			
			a:active {
				color: black;
				background-color: transparent;
				text-decoration: none;
			}
			
			table {
				font-family: "simplifica";
				font-size: 30px;
			}
			
			button {
				background-color: white;
				color: black;
				border: white;
				font-family: simplifica;
				font-size: 32px;
			}
			
			button:hover {
				background-color: white;
				color: red;
			}
						
			.input{
				column-count: 2;
				column-gap: 30px;
				column-rule-style: none;
				font-size: 19px;
				
			}
			
			.col1{
				float:right;
			}
			
			.col2{
				float:left;
			}
			
			.error{color: #FF0000;}
			
			a.button{
				float: right;
				font-size: 19px;
			}
			
			
			
		</style>
	</head>
	<body>
		ANTONIO SALVADOR SEBASTIAN GARINGA </br>
		<img src = "pic1.jpg" style = "width: 512px; height: 383px"></br>
		
		INFORMATION 

			<table align ="center">

				<tr>
					<td>NICKNAME</td>
					<td>DARTH VADER</td>
				</tr>

				<tr>
					<td>HOBBIES</td>
					<td>MAKING ART </td>
				</tr>

				<tr>
					<td>INTERESTS</td>
					<td>ART , MUSIC , ART , MUSIC , ART</td>
				</tr>

				<tr>
					<td>FAVOURITE WEBSITE</td>
					<td><a href="https://www.youtube.com/">YOUTUBE</a></td>
				</tr>
			</table>

		<h1>CREEP</h1>

		<h id="Q1">WHAT DO YOU USUALLY DO WHEN YOU'RE HOME ALONE?</h>
		<button type="button" onclick="document.getElementById('Q1').innerHTML = 'CRY'">WANT AN ANSWER? CLICK HERE</button>

		<h id="Q2">WHY CAN'T YOU BE LIKE YOUR SISTER?</h>
		<button type="button" onclick="document.getElementById('Q2').innerHTML = 'JUST LUCKY I GUESS'">CLICKING THIS IS A MUST</button>

		<h id="Q3">WHY ARE YOU SO QUIET?</h>
		<button type="button" onclick="document.getElementById('Q3').innerHTML = 'I AM STUDYING TO BE A MIME'">CLICKBAIT</button>

		<h id="Q4">DO YOU HATE PEOPLE?</h>
		<button type="button" onclick="document.getElementById('Q4').innerHTML = 'ONLY PEOPLE WHO ASK ME THAT QUESTION'">CAN'T THINK OF ANYTHING ELSE TO PUT IN THIS BUTTON</button>

		<h id="Q5">BEST TRAIT</h>
		<button type="button" onclick="document.getElementById('Q5').innerHTML = 'SARCASM'">JUST CLICK THIS</button>

		<?php
			$nameErr = $nNameErr = $emailErr = $genderErr = $cNumErr = $commentErr = "";
			$name = $nName = $email = $hAd = $gender = $cNum = $comment = "";

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				if (empty($_POST["name"])) {
				$nameErr = "NAME IS REQUIRED MAYNE! ";
			} else {
				$name = test_input($_POST["name"]);
				if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
				$nameErr = "ONLY LETTERS ARE ALLOWED DUDE"; 
				}
			}
		  
			if (empty($_POST["nName"])) {
				$nNameErr = "NICKNAME IS REQUIRED ";
			} else {
				$nName = test_input($_POST["nName"]);
				if (!preg_match("/^[a-zA-Z ]*$/",$nName)) {
				$nNameErr = "ONLY LETTERS ARE ALLOWED DUDE"; 
				}
			}
		  
			if (empty($_POST["email"])) {
				$emailErr = "E-MAIL IS REQUIRED MAYNE";
			} else {
				$email = test_input($_POST["email"]);
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$emailErr = "INVALID EMAIL FORMAT MAYNE"; 
				}
			}
		  
			if (empty($_POST["hAd"])) {
				$hAd = "";
			} else {
				$hAd = test_input($_POST["hAd"]);
			}
		  
			if (empty($_POST["gender"])) {
				$genderErr = "GENDER IS REQUIRED";
			} else {
				$gender = test_input($_POST["gender"]);
			}
		  
			if (empty($_POST["cNum"])) {
				$cNumErr = "NUMBER IS REQUIRED";
			} else {
				$cNum = test_input($_POST["cNum"]);
				if (!filter_var($cNum, FILTER_VALIDATE_INT) === FALSE) {
				$cNumErr = "NUMBERS ONLY MAYNE"; 
				}
			}
		  
			if (empty($_POST["comment"])) {
				$comment = "";
			} else {
				$comment = test_input($_POST["comment"]);
				}
			}

			function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
			}
		?>

		<h3>WANT TO SEND A MESSAGE? SCROLL DOWN</h3>

		<form method="post" >
			<div class="input">
				<div class="col1">
					NAME:
						<input type="text"  name="name" value="<?php echo $name;?>">
						<span class="error"> <?php echo $nameErr;?></span>
						<br><br>
					NICKNAME:
						<input type="text" name="nName" value="<?php echo $nName;?>">
						<span class="error"> <?php echo $nNameErr;?></span>
						<br><br>
					E-MAIL: 
						<input type="text" name="email" value="<?php echo $email;?>">
						<span class="error"> <?php echo $emailErr;?></span>
						<br><br>
					ADDRESS: 
					<textarea name="hAd" rows="3" cols="35"><?php echo $hAd;?></textarea>
				</div>
				<div class="col2">
					GENDER:
						<input type="radio" name="gender" value="FEMALE"/>FEMALE
						<input type="radio" name="gender" value="MALE"/>MALE
						<span class="error"> <?php echo $genderErr;?></span>					
						<br><br>
					CELLPHONE NUMBER:
						<input type="cNum" name="cNum" value="<?php echo $cNum;?>">
						<span class="error"> <?php echo $cNumErr;?></span>
						<br><br>
					COMMENT:
						<textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
						<br><br>
				</div>
			</div>
			
			<input type="submit" name="submit" value="SUBMIT" 
			style="background-color: white; color: red; border: white; font-family: simplifica; font-size: 35px; ">
			
		</form>
		<a href="index.php" class=button>MESSAGES ARE HERE DUDE!</a>
	</body>
</html>