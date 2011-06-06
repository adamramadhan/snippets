<html>
<head>
	<title>NSurvey</title>
	<link href='pages/assets/framework.css' rel='stylesheet'>
	<link href='pages/assets/master.css' rel='stylesheet'> 
</head>
<body>
	<div id="header"><img src="<?php echo 'storage/'.$survey['image']; ?>"></div>
	<div id="content">
		<h1><?php echo $survey['title']; ?></h1>
		<p><?php echo $survey['greeting']; ?></p>
		<ul>
		<form method="post">
			<?php foreach ($questions as $question): ?>
				<ul>
					<li><?php echo $question['title']; ?></li>
					<li><textarea name="answers[<?php echo $question['QID']; ?>]"></textarea></li>
				</ul>
			<?php endforeach ?>
			<li><label>Nama</label><input name="nama"></li>
			<li><label>Email</label><input name="email"></li>
			<li><label>Telp</label><input name="tlp"></li>
			<li><label>Kota</label><input name="kota"></li>
		</ul>
		<li><input type="submit" name="submit" value="Submit" /></li>
		</form>
	</div>
	<div id="footer"></div>
</body>
</html>