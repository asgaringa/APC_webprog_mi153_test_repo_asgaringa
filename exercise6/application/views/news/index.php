<html>
	<head>
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
			tr{
				text-align:center;
			}
			td{
				padding: 0 35px 0 35px;
			}
	</style>
	</head>

		<body>
		<center>
			ANTONIO SALVADOR SEBASTIAN GARINGA<br>
			<img src ="<?php echo base_url('Images/pic1.jpg');?>" style = "width: 512px; height: 383px"><br>
			
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
		<button type="button" onclick="document.getElementById('Q5').innerHTML = 'SARCASM'">JUST CLICK THIS</button><br><br>

		
		<a href="<?php echo site_url('news/create'); ?>">WANT TO SEND A MESSAGE? CLICK HERE!</a><br>
		

<h2>MESSAGES</h2>

<table align="center">
    <tr>
		
        <td>NAME</td>
        <td>NICKNAME</td>
		<td>EMAIL</td>
        <td>ADDRESS</td>
		<td>GENDER</td>
        <td>PHONE NUMBER</td>
        <td>COMMENT</td>
		<td>OPERATIONS</td>
		
	</tr>
<?php foreach ($userinfo as $news_item): ?>
        <tr>
            <td><?php echo $news_item['name']; ?></td>
			<td><?php echo $news_item['nName']; ?></td>
			<td><?php echo $news_item['email']; ?></td>
			<td><?php echo $news_item['hAd']; ?></td>
			<td><?php echo $news_item['gender']; ?></td>
			<td><?php echo $news_item['cNum']; ?></td>
			<td><?php echo $news_item['message']; ?></td>
            <td>
                <a href="<?php echo site_url('news/edit/'.$news_item['User_ID']); ?>">EDIT</a> | 
                <a href="<?php echo site_url('news/delete/'.$news_item['User_ID']); ?>" onClick="return confirm('Are you sure you want to delete?')">DELETE</a>
            </td>
        </tr>
<?php endforeach; ?>
</table>
</div>
