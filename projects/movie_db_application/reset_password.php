<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Movies database reset password</title>
        <link rel="stylesheet" type="text/css" href="login.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
    <body>
	<?php
		if($_GET['view'] == 'request') {
			$content = '<div class="login">
							<h1>Reset password</h1>
							<form action="authenticate.php?action=request_token" method="post">
								<label for="username">
									<i class="fas fa-user"></i>
								</label>
								<input type="text" name="username" placeholder="Username" id="username" required>

								<input type="submit" value="Request reset key">
								<a class="reset_login" href="index.html">Back to login</a>
							</form>
						</div>';

		} else if($_GET['view'] == 'reset') {
			$content = '<div class="login">
										<h1>Reset password</h1>
										<form action="authenticate.php?action=reset_password" method="post">
											<label for="username">
												<i class="fas fa-user"></i>
											</label>
											<input type="text" name="username" placeholder="Username" id="username" required>

											<input type="submit" value="Request reset key">
											<a class="reset_login" href="index.html">Back to login</a>
										</form>
									</div>';
		} else {
			$content = 'Nothing to see here.';
		}
		echo($content);
	?>
    </body>
</html>