<html>
<head>
	<title>Notes Demo</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	
	<script type="text/javascript">
	$(document).ready(function(){

		$(document).on('submit', 'form', function(){
			$.ajax({
				url: $(this).attr('action'),
				type: "post",
				data: $(this).serialize()
				}
			).done(function(response){
				$('#results').html(response);
			})
			return false;
		});

		$(document).on("change", "div.note textarea", function(){
			$(this).parent().submit();
		});

	});

	</script>

	<style>
		div.note{
			border:1px solid silver;
			padding:10px;
			margin:5px;
			background-color:yellow;
			display:inline-block;
			width:200px;
			height:150px;
		}
		div.note textarea{
			width:100%;
			height:100px;
			margin-bottom:5px;
		}
		h2{
			font-size:14px;
			margin:0px;
			padding:0px;
		}

	</style>
</head>
<body>

	<h1>Notes</h1>
	<div id='results'>
		<?php require('partial_index.php'); ?>
	</div>
	<h1>Create a note</h1>
	<form action='/notes/create' method='post'>
		<input type='text' name='title' value='' placeholder='Title' /><br />
		<textarea name='desc'></textarea>
		<input type='submit' value='Update' />
	</form>

</body>
</html>