<?php
/*
if $page is 0 goto flash page
if $page is 1 detect individual games.
if $page is 2 goto google website
if $page is 3 use blank page
if $page is 4 crash gta4browser
*/
$page = 0;


if ($page == 0) {
header("location:./startscreen_001.swf");
}

if ($page == 1) {
	$debug = "0";
	if ($debug == "0") {
		if ($_POST["version"] == "tbogt") {
			print("This is a test page for TBoGT");
			print('</br> <a href="./startscreen_001.swf"> Click Here</a> to access normal gta iv menu');
		}
		if ($_POST["version"] == "tlad") {
			print("This is a test page for TLAD");
			print('</br> <a href="./startscreen_001.swf"> Click Here</a> to access normal gta iv menu');
		}
		if (!($_POST["version"] == "tlad")) {
			if (!($_POST["version"] == "tbogt")) {
				print('
<html>
<head>
</head>
<body>
<style>
html,body {
	margin: 0;
}
</style>
<embed src="./startscreen_001.swf" width="100%" height="100%">
</body>
</html>
				');
			}
		}
	}
}

if ($page == 2) {
header("location:http://www.google.com/");
}

if ($page == 3) {
print('
<html>
<head>
</head>
<body>
<style>
body {
background-color: black;
}
</style>
</body>
</html>
');
}

if ($page == 4) {
header("location:about:blank");
}
?>
