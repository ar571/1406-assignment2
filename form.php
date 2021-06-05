<!DOCTYPE html>
<html>
<head>
	<title>Petite Treats Bakery - Contact Us</title>
	<link rel='stylesheet' type='text/css' href='style.css'>
	<link rel="icon" href="images/logo.png" type="image/png" sizes="16x16">
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<h1><img src="images/logo.png" title="Logo" alt="petite treats logo" class=logo>Petite Treats</h1>
<a class=home href="index.html"><b>Home</b></a>
<a class=specials href="specials.html">Specials (25% Discount!)</a>
<a class=nav href="menu.html">Menu</a>
<a class=nav href="contact.html">Contact</a>
<a class=nav href="newsletter.html">Newsletter</a>
<a class=nav href="about.html">About Us</a>

<h2> Success! You are signed up to our newsletter </h2>
<p class=confirm>
Welcome to our newsletter <?php echo $_POST["username"]; ?>!<br>
Your email is <?php echo $_POST["email"]; ?>.<br>
Your birthday is <?php echo $_POST["birthday"]; ?>.<br>
You are interested in <?php echo $_POST["product"]; ?>.<br>
You will be contacted <?php echo $_POST["frequency"]; ?>.<br>
You entered the following comments: <?php echo $_POST["comments"]; ?>
</p>

<footer class=fix>
	<p class=footer>Copyright &copy; 2021, Petite Treats, 123 Prize Lane, Kirwan QLD.  <a href="plan.html">Visit site plan</a></p>
</footer>

</body>
</html>