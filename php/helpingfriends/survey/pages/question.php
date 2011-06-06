<html>
<head>
	<title>NSurvey</title>
	<link href='pages/assets/framework.css' rel='stylesheet'>
	<link href='pages/assets/master.css' rel='stylesheet'> 
</head>
<body>
	<div id="header"></div>
	<div id="content">
	<!-- FORM START -->
	<form method="post">
	<ul>
		<?php 
		
		for ($i=0; $i < $_GET['nq']; $i++) {
			$num = $i + 1;
			echo '<li><label>Question '.$num.'</label><textarea name="questions[]"></textarea></li>';
		}

		?>

		<li><input type="submit" name="submit" value="Submit" /></li>
	</ul>
	</form>
	<!-- FORM END -->
	</div>
	<div id="footer"></div>
</body>
</html>