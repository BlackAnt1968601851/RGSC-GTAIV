<?php
$email = $_POST['username'];
$password = $_POST['password'];
// Tells social club you have an xbox live profile.
$Xbox_Live = true;
// This shuts down social club login service.
$down = false;

if (strlen($_POST["username"]) == 0) {
	exit();
}

if (strlen($_POST["password"]) == 0) {
	exit();
}

if ($down == false) {
	if ($_SERVER['HTTP_USER_AGENT'] == "GTA4 Video Upload") {
	header('Content-type: text/xml');
	print('<?xml version="1.0"?>
<response>
  <session_id>5456465123464</session_id>
</response>');
	exit();
	}
	if ($_POST['username'] == $email) {
		if ($_POST['password'] == $password) {
			header("Content-type: text/xml");
			if ($Xbox_Live == false) {
				print('<?xml version="1.0"?>
			<response>
				<auth_token>46546540256465</auth_token>
				<error>1</error>
				<status>1</status>
				<session_id>5456465123464</session_id>
				<rockstar_id>
					<id>123</id>
					<email>' . $email . '</email>
					<avatar_url>https://mls.rockstargames.com/PE24.png</avatar_url>
					<created_date>2024-01-26T08:26:48.429Z</created_date>
					<dob>2024-01-26T08:26:48.429Z</dob>
					<country>US</country>
					<zip_code>12345</zip_code>
					<language>en</language>
					<personal_webpage>http://www.blackant02.com/</personal_webpage>
					<portal_visits>10</portal_visits>
					<last_portal_login_date>2024-01-26T08:26:48.429Z</last_portal_login_date>
					<standing>Good</standing>
					<nickname>' . $email . '</nickname>
					<accounts>
					</accounts>
					<games>
						<game ID="1" Name="GTAIV"/>
					</games>
				</rockstar_id>
			</response>');
			}

			if ($Xbox_Live == true) {
				print('<?xml version="1.0"?>
			<response>
				<auth_token>46546540256465</auth_token>
				<error>1</error>
				<status>1</status>
				<session_id>5456465123464</session_id>
				<rockstar_id>
					<gamertag>' . $email . '</gamertag>
					<id>123</id>
					<email>' . $email . '</email>
					<avatar_url>https://mls.rockstargames.com/PE24.png</avatar_url>
					<created_date>2024-01-26T08:26:48.429Z</created_date>
					<dob>2024-01-26T08:26:48.429Z</dob>
					<country>US</country>
					<zip_code>12345</zip_code>
					<language>en</language>
					<personal_webpage>http://www.blackant02.com/</personal_webpage>
					<portal_visits>10</portal_visits>
					<last_portal_login_date>2024-01-26T08:26:48.429Z</last_portal_login_date>
					<standing>Good</standing>
					<nickname>' . $email . '</nickname>
					<accounts>
						<account AccountID="1" Name="' . $email . '" Platform="1"/>
					</accounts>
					<games>
						<game ID="1" Name="GTAIV"/>
					</games>
				</rockstar_id>
			</response>');
			}
			
		}
		else {
			exit();
		}
	}
	else {
		exit();
	}
}
if ($down == true) {
	exit();
}
?>