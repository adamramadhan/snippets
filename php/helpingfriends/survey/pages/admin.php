<!DOCTYPE html>
<html>
<head>
	<title>NSurvey - Admin</title>
	<link href='pages/assets/framework.css' rel='stylesheet'>
	<link href='pages/assets/master.css' rel='stylesheet'>
</head>
<body>
	<header id="head">
		<div><a href="?logout">logout</a></div>
    	<div class="head-wrap">
        	<p>Welcome to Survey Admin Page</p>
        </div>
    </header>
	<section id="content">
    <h1>Make new survey</h1>
	<!-- FORM START -->
	<form method="post" enctype="multipart/form-data">
	<ul>
		<li>
			<label>Title</label>
			<input type="text" name="title" required/>
		</li>
		<li>
			<label>Greeting</label>
			<textarea name="greeting"></textarea>
		</li>
		<li>
			<label>Numbers of Questions</label>
			<input type="number" name="num_questions" pattern="[0-9]+" required />
		</li>
		<li>
			<label>Logo</label>
			<input type="file" name="image" id="file" /> 
		</li>
		<li><input type="submit" name="submit" value="Submit" /></li>
	</ul>
	</form>
	<!-- FORM END -->
	</section>
	<footer id="foot">
    	<div class="foot-wrap">&copy;SOMEWHAT111</div>
    </footer>
</body>
</html>