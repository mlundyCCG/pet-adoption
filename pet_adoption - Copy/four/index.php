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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(document).ready(function(){
	$("form").on("submit", function(event){
		event.preventDefault();
 
		var formValues= $(this).serialize();
	   
	    $("#loading").fadeIn(1000); //show when submitting
		
		
		
		$.post("process_form.php", formValues, function(data){
			// Display the returned data in browser
			$("#result").html(data);
			$("#loading").fadeOut(1000); //hide when data's ready

		});
	});
});
</script>
</head>
<body>
<div id="loading" class="spinner-border" role="status">
	  <span class="visually-hidden">Loading...</span>
	</div>

	<div id="result">





	<form>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>	
</body>
</html>