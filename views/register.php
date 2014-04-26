
<form method="post" action="?register">
	<label for="user_name"><?php echo WORDING_REGISTRATION_USERNAME; ?></label>
	<input id="user_name" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" value="<?php echo $_POST['user_name']; ?>" required />

	<label for="user_email"><?php echo WORDING_REGISTRATION_EMAIL; ?></label>
	<input id="user_email" type="email" name="user_email" value="<?php echo $_POST['user_email']; ?>" required />

	<label for="user_password_new"><?php echo WORDING_REGISTRATION_PASSWORD; ?></label>
	<input id="user_password_new" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" />

	<label for="user_password_repeat"><?php echo WORDING_REGISTRATION_PASSWORD_REPEAT; ?></label>
	<input id="user_password_repeat" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />

	<img src="tools/showCaptcha.php" alt="captcha" />

	<label><?php echo WORDING_REGISTRATION_CAPTCHA; ?></label>
	<input type="text" name="captcha" required />

	<input type="submit" name="register" value="<?php echo WORDING_REGISTER; ?>" />
</form>

<a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>"><?php echo WORDING_BACK_TO_LOGIN; ?></a>
