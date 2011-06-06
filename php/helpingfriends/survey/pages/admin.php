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
	<form method="post" enctype="multipart/form-data">
	<ul>
		<li>
			<label>Title</label>
			<input type="text" name="title" />
		</li>
		<li>
			<label>Greeting</label>
			<textarea name="greeting"></textarea>
		</li>
		<li>
			<label>Numbers of Questions</label>
			<input type="text" name="num_questions" />
		</li>
		<li>
			<label>Logo</label>
			<input type="file" name="image" id="file" /> 
		</li>
		<li><input type="submit" name="submit" value="Submit" /></li>
	</ul>
	</form>
	<!-- FORM END -->
	</div>
	<div id="footer"></div>
</body>
</html>