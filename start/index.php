<?php ?>
<html>
<head>
	<title>PHP and MySQL Demo</title>
	<link rel="stylesheet" href="assets/style.css">
</head>
<body>
	<?php ?>
	<h1>Enter A Performer</h1>
	<hr>
	<form action="assets/process.php" method="post" enctype="multipart/form-data">
		<input type="text" name="name" placeholder="John Smith">
		<br><br>
		<label>
			<input type="radio" name ="genre" value="Rock"> Rock
		</label>
		<br>
		<label>
			<input type="radio" name="genre" value="Hip-Hop"> Hip-Hop
		</label>
		<br>
		<label>
			<input type="radio" name="genre" value="Salsa"> Salsa
		</label>
		<br><br>
		<label>
			<input type="file" name="pic">
		</label>
		<br><br>
		<input type="submit" value="submit">
	</form>
	<hr>
	<?php ?>
</body>
</html>