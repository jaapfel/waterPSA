<?php
	if($_POST['submit']){
		if(empty($_POST['name']) || empty($_POST['email'])){
			$error=true;
		} else{
			$to = "r_singh10@u.pacific.edu";
			$name = trim($_POST['name']);
			$email = trim($_POST['email']);
			$subject = "Newsletter Contact Info";
			$messages = "Name: $name \r\n Email: $email";
			$headers = "From:" .$name;
			$mailsent = mail($to, $subject, $messages, $headers);
			
			if($mailsent){
				$sent = true;
			}
		}
	}
?>
	
<!DOCTYPE html>
<html>

<head>
<title>Newsletter Program</title>
<meta charset="UTF-8">
<link href="style.css" type="text/css" rel="stylesheet" />
<link rel="icon" href="water.ico" >
</head>

<body>

	<div id="box">
		<h3>Need more information and monthly updates on this drought?</h3>
		<p>Provide us with your name and e-mail address to receive <br> monthly web newsletters straight to your e-mail inbox!. <br>(We promise we won't spam you!)</p>
		<?php if($error == true) { ?>
			<p class="error">Please fill out all the fields in the form.</p>
		<?php } if($sent == true) { ?>
		<p class="sent">You've been enrolled in our monthly newsletter recipient list! Thank you!</p>
		<?php } ?>
		
		<div id="form">
			<form name="contact" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
				<label for="name">Name:</label>
				<input type="text" name="name" />
				<label for="email">Email:</label>
				<input type="email" name="email" />
				<input type="submit" name="submit" class="submit" value="Submit" />
			</form>
			<div style="clear;"></div>
		</div>
	</div>
	
	<footer id="return">
		<p><a href="index.html">Return to the Homepage</a></p>
	</footer>
	
</body>
</html>