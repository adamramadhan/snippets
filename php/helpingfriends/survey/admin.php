<?php 
require '/configuration.php';
require '/libs/bootstrap.php';
require '/libs/database.php';
$db = new Database($config);

# JIKA BELUM UDAH INSERT SURVEY
if (empty($_GET['s'])) {
	if (!empty($_POST['submit'])) {
	
	# SET UNTUK DIINSERT
	$survey['title'] = $_POST['title'];
	$survey['greeting'] = $_POST['greeting'];
	$survey['image'] = md5($_POST['title']).'_'.$_FILES['image']['name'];
	$get['num_questions'] = $_POST['num_questions'];	

	# MASUKIN IMAGE
    move_uploaded_file($_FILES["image"]["tmp_name"],"storage/" . $survey['image']);
	
	# INSERT KE DATABASE
	$lastid = $db->insertwithlastid('survey',$survey);

		# REDIRECT DENGAN NUM QUESTION DAN SID
		if (!empty($lastid)) {
			redirect('admin.php?s='.$lastid.'&nq='.$get['num_questions']);
		}
	}

	# LOAD PAGE ADMIN
	require '/pages/admin.php';
}

# JIKA SUDAH INSERT SURVEY MASUKIN QUESTION
if (!empty($_GET['s'])) {

	if (!empty($_POST['submit'])) {
		foreach ($_POST['questions'] as $question) {
			$sq[] = "('".$question."',".$_GET['s'].")";
		}
		$query = implode(',', $sq);
		$fullquery = 'INSERT INTO questions(title,SID) VALUES '.$query;
		$status = $db->query($fullquery);
		if ($status) {
			echo "IM CEO BITCH";
		}
	}
	require '/pages/question.php';
}
?>