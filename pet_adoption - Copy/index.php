<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Site Name | Home</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.0/css/font-awesome.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

  <?php
    $pizza = $_SERVER["REQUEST_URI"];
    $pieces = explode("/", $pizza);
  ?>
</head>

<body>
  <div class="body-container">
    <?php include 'header.php'?>
    <?php include 'banner.php'?>
    <?php include 'body.php'?>
    <?php include 'footer.php'?>

  </div>

  <script src="js/myScript.js"></script>
  <script>
    $(document).ready(function(){

    // Name of form, how to handle info, div to place everything in, load style
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

      custom_submit('#dog-form',"selectedDog.php", "#result","#loading");
    })

  </script>
</body>

</html>