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
					<li class="chats"><span>10:15 pm - </span> Cam: What are you doing? </li>
					<li class="chats"><span>10:15 pm - </span> Cam: What are you doing? </li>
					<li class="chats"><span>10:15 pm - </span> Cam: What are you doing? </li>
					<li class="chats"><span>10:15 pm - </span> Cam: What are you doing? </li>
					<li class="chats"><span>10:15 pm - </span> Cam: What are you doing? </li>
					<li class="chats"><span>10:15 pm - </span> Cam: What are you doing? </li>
					<li class="chats"><span>10:15 pm - </span> Cam: What are you doing? </li>
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