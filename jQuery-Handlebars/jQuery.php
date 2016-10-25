<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>HandleBars</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js" language="JavaScript" type="text/javascript"></script>
	<script src="handlebars.js"></script>
</head>
<body>
	<ul class="tweets">
		<script id="template" type="text/x-handlebars-template">
		{{ #each this }}
			<h2>{{ author }}</h2>
				<p>{{ tweet }}</p>
				{{ /each }}
			</li>
		</script>
	</ul>

	<script>
		var data = [{
			author:  'Jeffery Way',
			tweet: 'I used to be the editor of Nettuts+ and head of web development courses at Tuts+.',
		},
		{
			author: 'KSRAkhilesh' ,
			tweet: 'Best jQuery Videos ever by my boi Jeffery xD',
		}];
		var template = Handlebars.compile($('#template').html());
		$('ul.tweets').append(template(data));
	</script>

</body>
</html>