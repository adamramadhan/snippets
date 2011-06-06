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
		
		# todo validasi
		
		# MASUKIN USER BARU AMBIL UIDNYA
		#$uid = $db->insertwithlastid('users',$user);

		#
		foreach ($_POST['answers'] as $answer) {
			$sq[] = "('".$answer."',".$_GET['s'].")";
		}


	}
	require '/pages/index.php';
}

?>