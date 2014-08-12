<?php 
	require_once('functions.php');
	require_once('tasker.php');
	require_once('header.php');

?>

<div id="posts">
	<h2>All Posts</h2>
	<table class="listing">
		<thead>
			<tr><th>Date</th><th>Title</th><th>Action</th></tr>
		</thead>
		<tbody>
		<?php
			foreach($warehouse['posts'] as $post){
				echo '<tr><td>'.$post['date'].'</td><td>'.$post['title'].'</td><td>
					<button class="post_edit" data-filename="'.$post['filename'].'">edit</button>
					<button class="post_edit" data-filename="'.$post['filename'].'">unpublish</button>
					<button class="post_preview" data-link="'.$post['link'].'">preview</button>

				</td></tr>';
			}
		?>
		</tbody>
	</table>
</div>

<div id="writer">
	<h2>
		Write/Edit:

		<span id="edit_status"></span>

		<span style="float:right">
			<button id="save">save</button>
			<button id="preview">preview</button>
			<button id="schedule">schedule publish</button>
			<button id="publish">publish now</button>
		</span>
	</h2>
	<div class="half">
		<textarea id="md">#Title</textarea>
	</div>
	<div class="half" id="viewer">
		
	</div>
</div>


<?php require_once('footer.php');?>