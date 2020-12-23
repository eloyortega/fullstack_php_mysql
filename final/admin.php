<?php session_start(); ?>
<html>
<head>
	<title>PHP and MySQL Demo</title>
	<link rel="stylesheet" href="assets/style.css">
</head>
<body>
	<?php require_once('assets/partials/nav.php'); ?>
	<h1>Admin</h1>
	<p>Thanks for entering: <?php echo $_SESSION['n'];?></p>
	<hr>
	<table>
		<tr>
			<th>Pics</th>
			<th>ID</th>
			<th>NAME</th>
			<th>GENRE</th>
		</tr>
<!--
		<tr>
			<td>1</td>
			<td>Name</td>
			<td>Genre</td>
		</tr>
-->

<?php
		$cnt = mysqli_connect('localhost', 'root', 'root', 'phpsql20');
		$qry = "select * from sqltable";
		$results = mysqli_query($cnt, $qry);
		//print_r($results);

		foreach($results as $v){
			echo'
				<tr>
					<td><img src="assets/'.$v['pic'].'" style="width:100px;"></td>
					<td>'.$v['uid'].'</td>
					<td>'.$v['name'].'</td>
					<td>'.$v['genre'].'</td>
				</tr>
			';
		};
		mysqli_close($cnt);
?>

	</table>
	<hr>
	<?php require_once('assets/partials/footer.php'); ?>
</body>
</html>