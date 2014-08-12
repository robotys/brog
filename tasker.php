<?php

	// list all posts
	$lists = scandir('posts');

	unset($lists[0]);
	unset($lists[1]);

	arsort($lists);

	foreach($lists as $filename){
		
		$exp = explode('-', $filename);
		$date = $exp[0].'-'.$exp[1].'-'.$exp[2];
		unset($exp[0]);
		unset($exp[1]);
		unset($exp[2]);

		$title = ucwords(str_replace('.md','', implode(' ',$exp)));
		$link = str_replace('.md', '.html', $filename);
		$posts[] = array('title' => $title, 'date'=>$date, 'filename'=>$filename, 'link'=>$link);

	}

	$warehouse['posts'] = $posts;

	unset($posts);
?>