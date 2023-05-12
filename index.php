<?php
	require"header.php";
 ?>
 <style type="text/css">
 	p
 	{
 		text-align: center;
 		font-size: 20px;
 	}
 </style>

 <main>
 	<div>
 		<section>
 			<?php
 				if (isset($_SESSION['userID']))
 				{
 					echo "<p>you are logged in!</p>";
 				}
 				else
 				{
 					echo "<p>you are logged out!</p>";
 				}
 			?>
 		</section>
 	</div>
 </main>

 <?php
	require"fotter.php";
 ?>