<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Twitter | Templating</title>
</head>
<body>
	
	<ul id="Name">

	</ul>




	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js" language="JavaScript" type="text/javascript"></script>
	<script type="text/javascript">
		;(function($){
			var obj = [{
				first:'John',
				last:'Doe'
			},
			{
				first:'Jeffery',
				last:'way'
			},
			{
				first:'Allison',
				last:'way'
			},
			{
				first:'Taylor',
				last:'otwell'
			},
			{
				first:'Lilly',
				last:'way'
			}
			];
			var arr = [];
			arr = $.grep(obj , function(value , index){
				if (value.last == 'way') {
					return value;
				}
			});
			$.each( arr, function( key, value ) {
				$('ul#Name').append('<li>'+value.first+'_'+value.last+'</li>');
			});
			console.log(arr);

		})(jQuery);

	</script>
</body>
</html>