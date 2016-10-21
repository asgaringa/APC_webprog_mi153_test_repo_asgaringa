<html>
<head>
<title>
My Own Webpage
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
audio{
	display:none;
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
<td>ANTONIO</td>
</tr>

<tr>
<td>HOBBIES</td>
<td>MAKING ART </td>
</tr>

<tr>
<td>INTERESTS</td>
<td>ART , MUSIC , ART</td>
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

<audio controls autoplay>
  
  <source src="Go Cozy - Glimmer - 02 Fruit Flies.mp3" type="audio/mpeg">
</audio>

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr = "Invalid URL"; 
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website" value="<?php echo $website;?>">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
</body>
</html>