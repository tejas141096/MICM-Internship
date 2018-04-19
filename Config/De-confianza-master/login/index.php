<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
	<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
    <body class="login">
	<div class="container">
		<div class="login-container-wrapper clearfix">
			<div class="logo">
				<i class="fa fa-sign-in"></i>
			</div>
			<div class="welcome"><strong>Welcome,</strong> please login</div>

			<form class="form-horizontal login-form" action="login.php" method="post">
				<div class="form-group relative">
					<input id="login_username" class="form-control input-lg" type="text" name="username" placeholder="Username" required>
					<i class="fa fa-user"></i>
				</div>
				<div class="form-group relative">
					<input id="login_password" class="form-control input-lg" type="password" name="password" placeholder="Password" required>
					<i class="fa fa-lock"></i>
				</div>
			  <div class="form-group">
			    <button type="submit" class="btn btn-success btn-lg btn-block">Login</button>
			  </div>
			  <div class="checkbox pull-right">
			    <label> <a href="http://localhost/e-commerce/register/index.php">New user? Register now</a> </label>
			  </div>
			</form>
		</div>
	</div>

  </body>
  
  
</body>
</html>
