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
	<input id="filetoupload" type="file" name="sortpic" />
	<button id="upload">Upload</button>
<div id="result"></div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script>
	$('#upload').on('click', function() {
		var file_data = $('#filetoupload').prop('files')[0];   
		var form_data = new FormData();                  
		form_data.append('file', file_data);
		
		$('#result').html('Uploading '+form_data);                        

		$.ajax({
			url: 'upload.php', // <-- point to server-side PHP script 
			dataType: 'text',  // <-- what to expect back from the PHP script, if anything
			cache: false,
			contentType: false,
			processData: false,
			data: form_data,                         
			type: 'post',
			success: function(php_script_response){

console.log(file_data);

				$('#result').html(php_script_response);                        
				
				// <-- display response from the PHP script, if any
			}
		 });
	});
</script>

</body>
</html>