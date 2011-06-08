<?php 
require '/configuration.php';
require '/libs/bootstrap.php';
require '/libs/database.php';
$db = new Database($config);

if (!empty($_GET['s'])) {
	
	# SET THE SURVEY AND THE QUESTIONS
	$survey = $db->fetch('SELECT SID,image,title,greeting FROM survey WHERE sid ='.$_GET['s']);
	$questions = $db->fetchAll('SELECT * FROM questions WHERE sid ='.$_GET['s']);

	# IF POST
	if (!empty($_POST['submit'])) {

		$user['nama'] = $_POST['nama'];
		$user['email'] = $_POST['email'];
		$user['tlp'] = $_POST['tlp'];
		$user['kota'] =$_POST['kota'];
		var_dump($user);
		# todo validasi
		
		# MASUKIN USER BARU AMBIL UIDNYA
		$uid = $db->insertwithlastid('users',$user);

		$answers = $_POST['answers'];

		if (!empty($uid) && !empty($answers)) {
			foreach ($answers as $answer) {
				#var_dump(key($answers));
				$sq[] = "('".$answer."',".key($answers).",".$uid.")";
				next($answers);
			}
			$query = implode(',', $sq);
			$fullquery = 'INSERT INTO answers(text,QID,UID) VALUES '.$query;
		}
		$status = $db->query($fullquery);
		
		if ($status) {
			echo "<div id=\"statues\">Answers and User saved.</div>";
		}
	}
	require '/pages/index.php';
}

?>