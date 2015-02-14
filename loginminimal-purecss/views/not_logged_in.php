<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
    <style>
	body {
    		background-color: #0F0F0F;
		margin: 10px;
	}
	label {
		color: #666;
	}
	a {
		color: #666;
		text-decoration: underline;
		font-family: sans-serif;
	}
	a:hover {
		color: #9cf;
		text-decoration: none;
	}
    </style>
</head>
<body>

<?php
// show potential errors / feedback (from login object)
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            echo $error;
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo $message;
        }
    }
}
?>
<!-- login form box -->
<form class="pure-form pure-form-stacked" method="post" action="index.php" name="loginform">
 <fieldset>
    <label for="ctflogin">[CTF War Games]</label>
    <input id="login_input_username" class="login_input" type="text" name="user_name" placeholder="Username" required />
    <input id="login_input_password" class="login_input" type="password" name="user_password" autocomplete="off" placeholder="Password" required />
    <button type="submit" name="login" value="Sign in" class="pure-button pure-button-primary" />Sign in</button>
    <br><br><a href="register.php">Don't have account yet?</a>
 </fieldset>
</form>

</body>
</html>
