<!DOCTYPE html>
<html>
<title>Yubikey Public ID</title>
<body>
<h1>WMF Office IT Yubikey Public ID calculator</h1>
<p>This tool will return the first 12 characters of a Yubikey One-Time-Password (OTP) aka Yubikey Public ID.</p>
<p>Please note, in LDAP, this is equal to the YubikeyVPN attribute.</p>
<p>To calculate the value of a Yubikey Public ID, navigate to the textbox below and press the button on your Yubikey.</p>
<form action="yubikey.php" method="post">
<b>Yubikey OTP:</b> <input type="text" name="otp" autofocus>
<input type="submit">
</form>
<br>
<b>Your Yubikey Public ID is:</b>
<?php
// Calculate value of Yubikey Public ID by
// extracting first 12 characters.
echo substr($_POST["otp"],0,12)."<br>";
?>

</body>
</html>
