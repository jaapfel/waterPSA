<?php
	if($_POST['submit']){
		if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['comments'])){
			$error=true;
		} else{
			$to = "j_apfel@u.pacific.edu";
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
<title>Contact Jessica Apfel</title>
<meta charset="UTF-8">
<link href="style.css" type="text/css" rel="stylesheet" />
<link rel="icon" href="water.ico" >
</head>

<body>

	<div id="box">
		<h2>Any questions or concerns about how you can help? Ask Me!</h2>
		<h3>I'll Try to Reply As Soon As Possible.</h3>
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
	
	
	
</body>
</html>