<html>
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Your Cassette Choice</title>
<!--

    Choose Your Cassette Assignment
    Date: 6/6/22
    Mackenzie King
    
    This page uses HTML and PHP to show the result of the previous page's choices.

-->

</head>
<style>
  
  body{
    /* Set a background image to make the page look more professional. Because I was in a hurry, I used a generic classroom picture */
   background-image: url(https://media.blogto.com/articles/4420-20141210-RotateThis-590-1.jpg?cmd=resize_then_crop&quality=70&w=2048&height=1365);
    background-repeat: no-repeat;
    background-size: cover;
   
  }
/* Set a box element to make the text easier to read against the background image. We'll put all our forms and buttons within this element */
  #element {
    background-image: url("https://www.wpfaster.org/wp-content/uploads/2014/06/wrinkled-white-paper-texture-background.jpg");
    background-repeat: no-repeat;
    background-size: cover;
		opacity: 96%;
		box-shadow: 3px 3px 6px 6px black;
    margin-top: 200px;
    margin-left: 240px;
    margin-right: 240px;
    text-align: center;
    padding: 50px;

</style>


<body style="margin: 4%;">
   <section id="element">

<?php

// I used isset from the example php code
// The radio buttons use the $size to pass values related to the player chosen
if(isset($_GET["player"])) { $size = $_GET["player"]; } else { $player = ""; }
if(isset($_GET["walkman"])) { $walkman = $_GET["walkman"]; } else { $walkman = ""; }
if(isset($_GET["sanyo"])) { $sanyo = $_GET["sanyo"]; } else { $sanyo = ""; }
if(isset($_GET["aiwa"])) { $aiwa = $_GET["aiwa"]; } else { $aiwa = ""; }

// This is the basic text and stuff that goes above the choice
print "
<style>
body { margin: 4%; }

</style>

<body>
<h1>Cassette Player </h1>
<p><br /><b>Your Choice of Player Is:</b>  
";

print "
</p>
</body>
";
?>

<?php
// This is a separate php section that prints the correct player
if($size == "walkman") { print "Sony Walkman ";
	}
	if($size == "sanyo") { print "Sanyo ";}
		if($size == "aiwa") { print "Aiwa ";
	
	}
?>

</body>
</html>
