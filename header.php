<!DOCTYPE html>
<html>
<head>
	<title>BROG for You</title>
	<link href="assets/style.css" rel="stylesheet" type="text/css" />
	<script src="assets/jquery.min.js" type="text/javascript"></script>
	<script src="assets/markdown.js" type="text/javascript"></script>

	<script>
	$(document).ready(function(){
		$('#md').on('keyup', function(){
			$('#viewer').html(markdown.toHTML($(this).val()));
		});

		$('#save').on('click', function(){
			$.post('save.php', {md: $('#md').val()}, function(data){
				console.log(data);
			});
		});
    });
    </script>
</head>
<body>
<div class="center"><div class="wrap">
	<div class="header">
		<a href="#" class="logo"><img src="assets/logo2.jpg"/></a>
		

		<ul class="menu">
			
			<li><a href="#posts" id="posts" class="btn">Posts</a> </li>
			<li><a href="#editor" id="editor" class="btn">Editor</a> </li>
			<li><a href="public" id="preview_all" class="btn">Preview</a> </li>
			<!-- <li><a href="#" id="generate" class="btn">Generate html</a> </li> -->
			<!-- <li><a href="public" id="preview" class="btn">Preview</a> </li> -->
			<!-- <li><a href="#" id="publish" class="btn">Publish</a> </li> -->
			<li><a href="#readme" id="readme" class="btn">Readme</a> </li>
			<!-- <li><a href="#settings" id="settings" class="btn">Settings</a> </li> -->
			<!-- <li><a href="logout.php" id="logout" class="btn">Logout</a> </li> -->
		</ul>
	</div>

	<div class="content">