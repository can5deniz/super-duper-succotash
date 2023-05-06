<?php
    // Set the default language
    $language = 'en';

	// require the config file
	require_once ('system/config.php');

	//if $maintance is true
    if ($maintance == true){ 
	
		//echo "The site is currently under maintance"
        echo "The site is currently under maintance"; 
		
	//else if $maintance is false
    } elseif ($maintance == false) { 
        ?>
		<html>
			<head>
				<title><?php echo $title.$seperator.$description; ?></title>
				<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
				<meta charset="utf-8">
			    <meta http-equiv="X-UA-Compatible" content="IE=edge">
			    <meta name="viewport" content="width=device-width, initial-scale=1">
			    <link href="frontend/design/css/bootstrap.min.css" rel="stylesheet">
			    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
			    <link href="frontend/design/css/stylesheet.css" rel="stylesheet" type="text/css">
				    <script src=
					"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
				    </script>

				    <script>
					$(document).ready(function() {
					    $("li:parent").css("background-color", "green");
					});
				    </script>
			</head>
			
			<body>
				<div id="wrapper">
					<div>
						Header
					</div>
					<div>
						Content
					</div>
					<div>
						Footer
					</div>
					    <h1 style="color:green">
						GeeksForGeeks
					    </h1>

					    <h2>
						jQuery ajax() Method
					    </h2>

					    <h3 id="h11"></h3>

					    <button>Click</button>

					    <!-- Script to use ajax() method to
						add text content -->
					    <script>
						$(document).ready(function() {
						    $("button").click(function() {
							$.ajax({url: "geeks.txt", 
								success: function(result) {
							    $("#h11").html(result);
							}});
						    });
						});
					    </script>
					
					
					
					
				</div>
			</body>
		</html>
        <?php 
    }

?>
