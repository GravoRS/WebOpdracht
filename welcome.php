<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
<ul class="nav">

	<li><a href="index.html">Home</a></li>
	<li><a href="about.html">About</a></li>
	<li><a href="booking.html">Booking</a></li>
	<li><a href="webshop.html">Webshop</a></li> 
	<li><a href="contact.html">Contact</a></li>

</ul>

Beste <?php echo $_POST["name"]; ?>, bedankt dat u contact heeft opgenomen met ons.<br>
We zullen u binnenkort via <?php echo $_POST["email"]; ?> benaderen. <br><br>
Met vriendelijke groet, <br><br>
Teamnaam. <br><br>

<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas finibus at diam et sagittis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam elementum finibus mi non tempor. Donec ac nulla id purus tempus mollis. Duis nec volutpat risus. Etiam pretium eleifend lacus a molestie. Donec id felis imperdiet, scelerisque augue nec, congue justo. Donec sit amet consectetur nibh, in mollis ligula.
</p>
<p>
Nunc in turpis ut diam congue malesuada. Phasellus luctus tristique lectus, id efficitur velit. Etiam venenatis pretium felis non suscipit. Sed sit amet blandit dolor, nec malesuada velit. Cras maximus velit ut lorem ultrices condimentum eu at ante. Pellentesque sodales libero id sagittis posuere. Etiam at ligula eget dui eleifend dictum eget at mi. Praesent sit amet sodales nunc. Aliquam ligula erat, porta nec nulla non, fringilla elementum purus. Suspendisse orci magna, congue et magna sit amet, malesuada vulputate arcu. Ut molestie, diam vel faucibus sodales, mauris urna scelerisque elit, sit amet porttitor purus nunc nec magna. Nunc placerat porttitor finibus.
</p>
<p>
Aliquam fermentum elit massa, quis tincidunt arcu auctor et. Vestibulum vestibulum nunc a orci efficitur, in malesuada nunc placerat. Nam eleifend pharetra tortor nec mollis. Pellentesque vulputate iaculis nisi, eget facilisis ipsum interdum vitae. Aliquam laoreet, metus vel ultrices pretium, erat dui ultricies nunc, sit amet consectetur urna dui vitae purus. Cras faucibus enim et est accumsan, ac tristique enim pretium. Vestibulum sapien nisl, sodales eget posuere tempus, sollicitudin ut sapien. Curabitur pellentesque vulputate urna. In interdum quis urna eget suscipit. Vivamus sagittis nisi mi, vehicula laoreet urna auctor at. Etiam tincidunt urna sit amet consequat sagittis. Suspendisse potenti.
</p>

<img src="contact.png" alt="contact">

<?php
$to = $_POST[email];
$subject = "Contact";
$txt = "Bedankt voor het contact opnemen $_POST[name]! We zullen contact met u opnemen op $_POST[email].";
$headers = "From: teamnaam@inkumail.nl";


mail($to,$subject,$txt,$headers);
?> 

 <?php
$myfile = fopen("$_POST[name].txt", "w") or die("Unable to open file!");
$txt = "$_POST[email] is de mail van ";
fwrite($myfile, $txt);
$txt = "$_POST[name]";
fwrite($myfile, $txt);
fclose($myfile);
?> 

</body>
</html> 