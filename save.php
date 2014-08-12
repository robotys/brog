<?php
	
	if(array_key_exists('md', $_POST) !== FALSE){
		//get the first 5 text
		$md = $_POST['md'];

		$exp = explode("\n\n",$md);
		$title = strtolower($exp[0]);
		$title = str_replace('#', '', $title);
		$filename = str_replace(' ', '-', $title).'.md';

		file_put_contents('draft/'.$filename, $md);
		// $str = str_replace("\n\n", " ", $md);
		// $str = str_replace('#', '', $str);

		// $exp = explode(' ',$str);

		// $arr = array();
		// for($i = 0; count($arr) < 5; $i++){
		// 	if(strpos($exp[$i], '!') === FALSE) $arr[] = $exp[$i];
		// }

		echo 'true';
	}

?>