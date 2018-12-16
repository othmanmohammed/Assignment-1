<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>


	<header id="mainheader">
		<div class="container">
			<h1> Assignment # 1</h1>
		</div>
	</header>

	<nav id="navbar">
		<div class="container">
			<ul>
				<li> <a href="home.html"> Home </a> </li>
				<li> <a href="aboutus.html"> About Us </a> </li>
				<li> <a href="contactus.html"> Contact Us </a> </li>
				<li> <a href="myphp.php"> PHP </a> </li>
			</ul>
		</div>
	</nav>

	<section id="aboutus">
		<div class="container">
			<h1> PHP </h1>

		<?php

		echo 'Using print statement';
		echo "<br>";

		$firstName = 'Mohammed';
		$lastName = 'Usman';
		$fullName = "$firstName $lastName";
		echo $fullName;
		echo "<br>";

		echo 'Using an array to print a value';
		echo "<br>";

		$arr = ['usman'=> 1,'salman' => 2,'muneeb ' => 3,'kashif'=> 4, 'bilal' => 5 ];
		echo $arr['usman'];
		echo "<br>";

		echo 'Printing a full array';
		echo "<br>";

		var_dump($arr);

		echo "<br>";

		echo 'Using for loop';

		echo "<br>";

		for ($i=0 ; $i < 10 ; $i++) { 
			echo $i;
			}

			echo "<br>";

			echo 'Using while loop';

			echo "<br>";

			$i=0;
			while ($i < 10) {
				echo $i;
				echo '<br>';
				$i++;
				}

			echo "<br>";

			echo 'Using do-while loop';

			echo "<br>";

			$i = 0;
			do {
			 	echo $i;
			 	echo '<br>';
			 	$i++;
			 } while ( $i <= 10); 

			?>
		</div>
	</section>

	<footer id="mainfooter">
			<div class="container">
			Copyright &copy, CV Mohammed Usman
			</div>
		</footer>
</body>
</html>

