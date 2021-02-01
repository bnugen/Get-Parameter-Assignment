<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Get Assignment - Brian Nugen</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<div id="wrapper">
        <div id="header">
            <p><?php echo "Today is " . date("m/d/Y");?></p>
        </div>
        <div id="content">
           <p></p>
		   <p><?php
	$firstname = filter_input(INPUT_GET, 'first', FILTER_SANITIZE_STRING);
	$lastname = filter_input(INPUT_GET, 'last', FILTER_SANITIZE_STRING);
	$age = filter_input(INPUT_GET, 'age', FILTER_SANITIZE_NUMBER_INT);
	
	if (!empty($firstname) && !empty($lastname) && !empty($age)) {
		echo "<h1>Hello, my name is " . $firstname . " " . $lastname . ".</h1><br>";
		echo "<h3>I am " . $age . " years old, ";
		if ($age < 18){
			echo "and I am not old enough to vote in the United States.</h3><br>";
			}
			else {
				echo " and I am old enough to vote in the United States.</h3><br>";
			}
		echo "<h3>That means I'm at least " . number_format(($age * 365)) . " days old.</h3>";
	} else {
		echo "<h3>You did not submit firstname and lastname parameters.<br><p>You did not submit a numeric age parameter.</p></h3>";
	}
?></p>
		   <p></p>
       </div>
    </div>
</body>
</html>