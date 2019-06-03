<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="description" content="example" >
  <meta name=viewport content="width=device-width, intial-scale=1">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>

</head>
<body>


<header>


<nav>
	<a href="#">
		

<img src="img/bug.png" alt="logo">		
	</a>
   <ul>
   	<li><a href="index.php">home</a></li>
   	<li><a href="#">portfolio</a></li>
   	<li><a href="#">about me</a></li>
   	<li><a href="#">contact</a></li>
   </ul>

<div>
	
<form action="includes/login.inc.php" method="post">
	<input type="text" name="mailuid" placeholder="Username/E-mail..">
	<input type="password" name="pwd" placeholder="password..">
	<button type="submit" name="login-submit">login</button>

</form>
  <a href="signup.php">Signup</a>
<!-- comment -->
<form action="includes/logout.inc.php" method="post">
	
	<button type="submit" name="logout-submit">logout</button>

</form>





</div>
</nav>




</header>
</html>