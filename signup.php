<?php
	require"header.php";
 ?>
 <link rel="stylesheet" type="text/css" href="Css\sigup.css">
 		<main>
 			<div class="div3">
 				<section>
 					<h1>Signup</h1>
 					<?php
 						if (isset($_GET['error']))
 						{
 							if ($_GET['error'] == 'emptyfield') 
 							{
 								echo '<h3 class=r>Fill in all Field!</h3>';
 							}
 							elseif ($_GET['error'] == 'invalidmailuid') 
 							{
 								echo "<h3 class=r> Invalid Mail Id and Username!</h3>";
 							}
 							elseif ($_GET['error'] == 'invalidmail') 
 							{
 								echo "<h3 class=r> Invalid mail Id!</h3>";
 							}
 							elseif ($_GET['error'] == 'invaliduid') 
 							{
 								echo "<h3 class=r> Invalid Username!</h3>";
 							}
 							elseif ($_GET['error'] == 'passwordcheck') 
 							{
 								echo "<h3 class=r> Your Password is does not match!</h3>";
 							}
 							elseif ($_GET['error'] == 'usertaken') 
 							{
 								echo "<h3 class=r> User name is already taken!</h3>";
 							}
 						}
 						elseif (isset($_GET['signup']))
 						{
 							if ($_GET['signup'] == 'success') 
 							{
 								echo "<h3 class=o> Signup Successfull!</h3>";
 							}
 						}
 					?>
 					<form class="form" action="includes/signup.inc.php" method="POST">
 						<input type="text" name="uid" placeholder="username"><br>
 						<input type="text" name="mail" placeholder="E-mail"><br>
 						<input type="password" name="pwd" placeholder="password"><br>
 						<input type="password" name="pwd-rep" placeholder="repeat-pass"><br>
 						<button type="submit" name="signup-but">Signup</button>
 					</form>
 				</section>
 			</div>
 		</main>
 <?php
	require"fotter.php";
 ?>