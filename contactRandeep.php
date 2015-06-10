<?php
	if($_POST['submit']){
		if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['comments'])){
			$error=true;
		} else{
			$to = "r_singh10@u.pacific.edu";
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
<title>Contact Randeep Singh</title>
<meta charset="UTF-8">
<link href="style.css" type="text/css" rel="stylesheet" />
<link rel="icon" href="water.ico" >
</head>

<body>

	<div id="box">
		<h3>Any questions or concerns about the drought? Ask Me!</h3>
		<p>I'll Try to Reply As Soon As Possible.</p>
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
				<label for="comments">Questions:</label>
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