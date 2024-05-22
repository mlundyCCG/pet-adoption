<html>
	  <head>
		<meta charset="utf-8">
		<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
		<title>jQuery + AJAX + PHP: Part 1: Getting a Response</title>
		</head>
	  <body>
		<div id="log"></div>
		<script>
		$.ajax({
			method: "POST",
			url: "response.php",
			data: { name: "Dan", example: "Yup" }
		  })
		  .done(function( message ) {
			$("#log").text(message);
		  })
		  .fail(function( message ) {
			$("#log").text(message);
		  });
		</script>
	  </body>
	</html>