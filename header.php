<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>praveen</title>
</head>
<link rel="stylesheet" type="text/css" href="Css\headstyle.css">
<body>
	<header>
		  <nav class="nav1">
        <div id="A" class="y">
		  	<a class="active" href="#">
		  		<img src="img/User-Interface-Login-icon.png" alt="login">
		  	</a>
        		<a href="#">Home</a>
       			<a href="#">profile</a>
        		<a href="#">about me</a>
       			<a href="#">contact</a>
         </div>   
   			<div class="y" id="B">
          <?php
            if (isset($_SESSION['userID']))
            {
              echo '<form class="x"  action="includes/logout.inc.php" method="post">
                <button class="d" type="submit" name="Logout-submit">Logout</button>
             </form>';
            }
            else
            {
              echo '<form class="x" action="includes/login.inc.php" method="post">
                <input class="a" type="text" name="mailid" placeholder="Username/E-mail..">
                <input class="b" type="password" name="pwd" placeholder="Password..">
                <button class="c" type="submit" name="login-submit">Login</button>
          </form>
             <a class="x" href="signup.php">Signup</a>';
            }
          ?>	 
    		</div> 
  		</nav>
	</header>

</body>
</html>