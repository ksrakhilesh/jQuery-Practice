<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js" language="JavaScript" type="text/javascript"></script>

</head>
<body>
	<a href="about.html">About</a>
	<a href="contact.html">Contact</a>
	<div class="container">
		
	</div>

	<script>
		;(function(){
		 // get , getJson , post , getScript , load : All Pointing to ajax method ($.ajax)
		 var wrap = $('body .container');
		 $('a').on('click' , function(e){
		 	var href = $(this).attr('href');
		 	e.preventDefault();
		 	wrap.load(href);
		 });
		})();
		
	</script>
</body>
</html>