<!DOCTYPE html>
<html>
<head>
	<title>NSurvey - Admin | Insert questions</title>
	<link href='pages/assets/framework.css' rel='stylesheet'>
	<link href='pages/assets/master.css' rel='stylesheet'> 
</head>
<body>
	<header id="head">
    	<div class="head-wrap">
        	<p>Survey Admin Page</p>
        </div>
    </header>
	<section id="content">
        <h1>Please insert the questions</h1>
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
	</section>
	<footer id="foot">
    	<div class="foot-wrap">&copy;SOMEWHAT111</div>
    </footer>
</body>
</html>