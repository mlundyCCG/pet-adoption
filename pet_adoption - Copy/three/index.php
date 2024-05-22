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
		

		
		
		
	  </head>
	  <body>
	
	<div class="result"></div>
	
	<a href="#" data-value="5" class="star">Star 5</a>
	<a href="#" data-value="4" class="star">Star 4</a>
	<a href="#" data-value="3" class="star">Star 3</a>
	<a href="#" data-value="2" class="star">Star 2</a>
	<a href="#" data-value="1" class="star">Star 1</a>
	  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		<!-- Optional JavaScript; choose one of the two! -->
	
		<!-- Option 1: Bootstrap Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	
		<!-- Option 2: Separate Popper and Bootstrap JS -->
		<!--
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
		-->
		<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
	  
	  
	  <script>
		  $('a').on('click', function(e) {
			  e.preventDefault();
		  
			  var star = $(this).data('value');
		  
			  $.ajax({
				  url: 'process.php',
				  type: 'POST',
				  data: {star:star},
				  success: function(data){
					  $('.result').html(data);                        
				  }       
			  });
		  });
		  </script>
	  
	  
	  </body>
	</html>