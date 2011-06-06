<?php 

function redirect($link) {
	header ( 'Location: ' . $link );
	exit ( $link );
}

?>