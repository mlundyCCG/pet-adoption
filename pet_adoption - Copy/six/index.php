<!DOCTYPE html>
	
	<html lang="en">
	<head>

	<meta charset="utf-8">
	<title>jQuery AJAX Submit Form</title>
	<style>
		#loading {
			display: none;
		}
		
	</style>
	
	<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


	</head>
	<body>
		
	<div class="main">	
	<div class="loadingnav">
	<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
		  <button data-file='process' data-location="result" data-loading='loading' type="button" class="btn btn-primary jslink">1</button>
		  <button type="button" class="btn btn-primary">2</button>
		
	<div class="btn-group" role="group">
		<button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
		  Dropdown
		</button>
		<ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
		  <li><a class="dropdown-item" href="#">Dropdown link</a></li>
		  <li><a class="dropdown-item" href="#">Dropdown link</a></li>
		</ul>
	  </div>	  <div class="btn-group" role="group">
		  <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
			Dropdown
		  </button>
		  <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
			<li><a data-location="loadingnav" data-file="process" data-value="13 - Thirteen" class="jslink dropdown-item" href="#">Star 13</a></li>
			<li><a data-location="loadingnav" data-file="process" data-value="14 - Fourteen" class="jslink dropdown-item" href="#">Star 14</a></li>
		  </ul>
		</div>
		</div>
	</div>


		<div></div>
		
		
		<a data-location="result" data-file="process" data-value="5" data-value="5" class="jslink star">Star 5</a>
		<a href="#" data-location="result" data-file="process" data-value="4" class="jslink star">Star 4</a>
		<a href="#" data-location="result" data-file="process" data-value="3" class="jslink star">Star 3</a>
		<a href="#" data-location="result" data-file="process" data-value="2" class="jslink star">Star 2</a>
		<a href="#" data-location="result" data-file="process" data-value="1" class="jslink star">Star 1</a>
		
		<div class="result"></div>

		
		
		<div id="loading" class="spinner-border" role="status">
			  <span class="visually-hidden">Loading...</span>
			</div>
		
			<div id="result">
		
			<form id='form-name'>
				<p>
					<label>Name:</label>
					<input type="text" name="name">
				</p>
				<p>
					<label>Gender:</label>
					<label><input type="radio" value="male" name="gender"> Male</label>
					<label><input type="radio" value="female" name="gender"> Female</label>
				</p>
				<p>
					<label>Hobbies:</label>
					<label><input type="checkbox" value="music" name="hobbies[]"> Music</label>
					<label><input type="checkbox" value="sports" name="hobbies[]"> Sports</label>
					<label><input type="checkbox" value="dance" name="hobbies[]"> Dance</label>
				</p>
				<p>
					<label>Favorite Color:</label>
					<select name="color">
						<option>Red</option>
						<option>Green</option>
						<option>Blue</option>
					</select>
				</p>
				<p>
					<label>Comment:</label>
					<textarea name="comment"></textarea>
				</p>
				<input type="submit" value="submit">
			</form>
			
			
			
			
			</div>
			
			
			<div id="result2">
			
				<form id='form-two'>
					<p>
						<label>Name:</label>
						<input type="text" name="name">
					</p>
					<p>
						<label>Gender:</label>
						<label><input type="radio" value="male" name="gender"> Male</label>
						<label><input type="radio" value="female" name="gender"> Female</label>
					</p>
					<p>
						<label>Hobbies:</label>
						<label><input type="checkbox" value="music" name="hobbies[]"> Music</label>
						<label><input type="checkbox" value="sports" name="hobbies[]"> Sports</label>
						<label><input type="checkbox" value="dance" name="hobbies[]"> Dance</label>
					</p>
					<p>
						<label>Favorite Color:</label>
						<select name="color">
							<option>Red</option>
							<option>Green</option>
							<option>Blue</option>
						</select>
					</p>
					<p>
						<label>Comment:</label>
						<textarea name="comment"></textarea>
					</p>
					<input type="submit" value="submit">
				</form>
				
				
				
				
				</div>
		
		</div>
		
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<script>
	function postThis(that) {
		var star = that.data('value');
		var location = that.data('location');
		var file = that.data('file');
	
		$.ajax({
			url: file +'.php',
			type: 'POST',
			data: {star:star},
			success: function(data){
				$('.'+location).html(data);                        
			}       
		});
	}
	// $('a.jslink').on('click', function(e) {
	// 	e.preventDefault();
	// 	postThis($(this));
	// });
	
	$('.main').delegate('a.jslink', 'click', function(e) {
		e.preventDefault();
		postThis($(this));
	});


$('.main').delegate('button.jslink', 'click', function(e) {
	e.preventDefault();
	postThis($(this));
});
	
	function custom_submit(formname, process, render, loading) {
		$(formname).on("submit", function(event){
			event.preventDefault();
	 
			var formValues= $(this).serialize();
		   
			$(loading).fadeIn(1000); //show when submitting
			
			
			
			$.post(process, formValues, function(data){
				// Display the returned data in browser
				$(render).html(data);
				$(loading).fadeOut(1000); //hide when data's ready
	
			});
		});	
	}


custom_submit('#form-name',"process_form.php", "#result","#loading");
custom_submit('#form-two',"process_form2.php", "#result2","#loading2");
	
	
	
</script>

	</body>
	</html>