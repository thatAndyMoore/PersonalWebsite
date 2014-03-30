<!DOCTYPE HTML>
<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<title>Registration</title>
	<link rel="stylesheet" href="main.css">
</head>
<body>

<body style="background-image:url(images/contact.jpg); background-position: center; background-attachment:fixed;">


	<div id="big_wrapper">

		<header id="top_header">
			<h1>Validation</h1>
		</header>

		<nav id="side_menu"> <!-- Site navigation goes here -->
			<ul><!-- unordered list, figure out how to make vertical -->
				<li><a href="index.html">Home</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="professional.html">Professional</a></li>
				<li><a href="community.html">Community</a></li>
				<li><a href="links.html">Favorite Websites</a></li>
				<li><a href="contact.html">Contact Me!</a></li>
			</ul>
		</nav>

		<section id="main_section"> <!-- main content goes here -->

<?php

$first = $_POST['firstName'];
$last = $_POST['lastName'];
$email = $_POST['email'];
$phone = $_POST['phoneNumber'];

$host = 'localhost';
$user = 'root';
$passwd = '';
$database = 'contactInfo';
$table_name = 'information';
$connect = mysql_connect($host, $user, $passwd);
mysql_select_db($database);
$query = "INSERT INTO $table_name VALUES (0,'$email', '$first','$last','$phone')";


	if (mysql_query($query, $connect))
	{
		print "<article>
			<header>
				<hgroup> <!-- creates a group for the header -->
					<h1>Sucess!</h1>
					<h2></h2>
				</hgroup>
			</header>

			<p>
			Your info was sucessfully submitted!
			</p>

			<footer>
				<p></p>
			</footer>
			</article>";
	}
	else
	{
		print "<article>
			<header>
				<hgroup> <!-- creates a group for the header -->
					<h1>Failure!</h1>
					<h2></h2>
				</hgroup>
			</header>

			<p>
			Your info was failfully submitted! SOMETHING DONE GOOFED!
			</p>

			<footer>
				<p></p>
			</footer>
			</article>";
	}

mysql_close ($connect);
?>




		</section>

		<footer id="the_footer">
			Copyright ME!! 2013
		</footer>

	</div>
</body>

</body>
</html>
