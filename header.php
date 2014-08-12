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
    });
    </script>
</head>
<body>
<div class="center"><div class="wrap">
	<div class="header">
		<a href="#" class="logo"><img src="assets/logo2.jpg"/></a>
		

		<ul class="menu">
			<li><a href="#" id="write" class="btn">Write</a> </li>
			<li><a href="#" id="generate" class="btn">Generate html</a> </li>
			<li><a href="public" id="preview" class="btn">Preview</a> </li>
			<li><a href="#" id="publish" class="btn">Publish</a> </li>
			<li><a href="#" id="readme" class="btn">Readme</a> </li>
			<li><a href="#" id="readme" class="btn">Settings</a> </li>
			<li><a href="logout.php" id="logout" class="btn">Logout</a> </li>
		</ul>
	</div>

	<div class="content">