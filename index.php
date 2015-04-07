<?php include 'database.php'; ?>
<?php
	// Create Select query
	$query = "Select * from chats";
	$chats = mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>PHP Chat Room!!!</title>
		<link rel="stylesheet" href="css/style.css" type="text" />
	</head>
	<body>
		<div id="container">
			<header>
				<h1>Let's Chat!!!</h1>
			</header>
			<div id="chats">
				<ul>
					<?php while($row = mysqli_fetch_assoc($chats)) : ?>
						<li class="chats"><span><?php echo $row['time'] ?> - </span><strong><?php echo $row['user'] ?></strong>: <?php echo $row['message'] ?> </li>
					<?php endwhile; ?>					
				</ul>
			</div>
			<div id="input">
				<form method="post" action="process.php">
					<input type="text" name="user" placeholder="Enter your name" />
					<input type="text" name="message" placeholder="Enter a message" />
					<br />
					<input class="chat-btn" type="submit" name="submit" value="Chat!!" />
				</form>
			</div>
		</div>
	</body>
</html>