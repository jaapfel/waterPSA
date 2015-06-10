<?php
	if($_POST['submit']){
		if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['comments'])){
			$error=true;
		} else{
			$to = "n_tammana@u.pacific.edu";
			$name = trim($_POST['name']);
			$email = trim($_POST['email']);
			$comments = trim($_POST['comments']);
			$subject = "Contact Form";
			$messages = "Name: $name \r\n Email: $email \r\n Comments: $comments";
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
<title>Contact Neha Tammana</title>
<meta charset="UTF-8">
<link href="style.css" type="text/css" rel="stylesheet" />
<link rel="icon" href="water.ico" >
</head>

<body>

	<div id="box">
		<h3>Is someone in your community over-exercising their right to water?</h3> 
		<p>Tell me and we'll forward your concerns to the proper <br>authorities.</p>
		<?php if($error == true) { ?>
			<p class="error">Please fill out all the fields in the form.</p>
		<?php } if($sent == true) { ?>
		<p class="sent">Your e-mail has been sent. Thank you!</p>
		<?php } ?>
		
		<div id="form">
			<form name="contact" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
				<label for="name">Name:</label>
				<input type="text" name="name" />
				<label for="email">Email:</label>
				<input type="email" name="email" />
				<label for="comments">Comments:</label>
				<textarea name="comments" cols="15" rows="10"></textarea>
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