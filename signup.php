<?php


require "header.php";


?>



<main>
	

	<h1>signup</h1>
<form action="includes/signup.inc.php" method="post">
	<input type="text" name="uid" placeholder="username">
	<input type="text" name="mail" placeholder="E-mail">
	<input type="password" name="pwd" placeholder="password">
	<input type="password" name="pwd-repeat" placeholder="Repeat password">
    <button type="submit" name="signup-submit">signup</button>

</form>

</main>


<?php


require "footer";

?>
