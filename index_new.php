<?php

$page = $_GET['page'];
$temp = explode('.', $page);
$pageid = $temp[0];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>SeneGAD</title>
		<link rel="stylesheet" type="text/css" href="elska2.css" />
	</head>

	<body bgcolor="#cc3300" background="photo/wax_opaque_375.jpg" id="<?php print $pageid; ?>">
		<div id="container">

		<img id="banner" src="photo/el_logo2.jpg" alt="Peace Corps Senegal SeneGAD" />
			<ul id="nav">
				<li id="nav-home"><a href="?page=home.html">Home</a></li>
				<li id="nav-pcgad"><a href="?page=pcgad.html">PC &amp; GAD</a></li>
				<li id="nav-scholarship"><a href="?page=scholarship.html">Youth Scholarships</a></li>
				<li id="nav-cases"><a href="?page=cases.html">Case Studies</a></li>
				<li id="nav-traore"><a href="?page=traore.html">Awa Traore</a></li>
				<li id="nav-forpcv"><a href="?page=forpcv.html">For PCVs</a></li>
				<li id="nav-calendar"><a href="?page=calendar.html">Calendar</a></li>
				<li id="nav-links"><a href="?page=links.html">Partners</a></li>
				<li id="nav-donate"><a href="?page=donate.html">Donate</a></li>
			</ul>
		<div id="content">
			<?php include($page); ?>
			<br />
			<br />
			<hr />
			<p align="center"><a href="http://pcsenegal.org/disclaimer.html" target="_blank">Disclaimer</a></p>
		</div>
		</div>
	</body>
</html>