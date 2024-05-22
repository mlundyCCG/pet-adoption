<!doctype html>
<html lang="en">
  <head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<title>Hello, world!</title>
	
	
	
	<script type = "text/javascript" 
	 src = "https://www.tutorialspoint.com/jquery/jquery-3.6.0.js">
  </script>
	
  <script type = "text/javascript" language = "javascript">
	 $(document).ready(function() {
		$("#driver").click(function(event){
			
		   $.getJSON('jquery/result.json', function(jd) {
			  $('#stage').html('<p> Name: ' + jd.name + '</p>');
			  $('#stage').append('<p>Age : ' + jd.age+ '</p>');
			  $('#stage').append('<p> Sex: ' + jd.sex+ '</p>');
		   });
				
		});
	 });
  </script>
	
	
	
  </head>
  <body>
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  <p>Click on the button to load result.json file −</p>
		  
		<div id = "stage" style = "background-color:#eee;">
		   STAGE
		</div>
		  
		<input type = "button" id = "driver" value = "Load Data" />
  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	<!-- Optional JavaScript; choose one of the two! -->

	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	<!-- Option 2: Separate Popper and Bootstrap JS -->
	<!--
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	-->
	<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
  </body>
</html>