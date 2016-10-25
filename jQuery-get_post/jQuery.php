<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Get | Post</title>
</head>
<body>
	<h3>Content</h3>
	<p id="show"> </p>
	<h4><strong>Post Something</strong></h4>
	<form action="#">
		<textarea name="content" id="content" cols="30" rows="10"></textarea><br>
		<button type="submit">Save</button>
	</form>




	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js" language="JavaScript" type="text/javascript"></script>
	<script type="text/javascript">
		;(function($){
			wrap = $('#show');
			wrap.load('data.txt');
			$('form').on('submit' , function(event) {
				event.preventDefault();
					var text = $(this).serialize();// var input = $(this).find('#content').val();
					$.post('save.php', text, function(data) {
						console.log('Done!');
						wrap = $('#show');
						wrap.load('data.txt');
						});
					});

		})(jQuery);

	</script>
</body>
</html>