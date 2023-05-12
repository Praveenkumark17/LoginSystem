<?php

if (isset($_POST['login-submit']))
{
	
	require 'db.inc.php';

	$mailid = $_POST['mailid'];
	$password = $_POST['pwd'];

	if (empty($mailid) || empty($password)) 
	{
		header('Location: ../index.php?error=emptyfield');
		exit();
	}
	else
	{
		$sql = "SELECT * FROM users WHERE uidusers = ? OR emailusers = ?;";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt,$sql)) 
		{
			header('Location: ../index.php?error=sqlerror');
			exit();
		}
		else
		{
			mysqli_stmt_bind_param($stmt,"ss",$mailid,$mailid);
			mysqli_stmt_execute($stmt);
			$result= mysqli_stmt_get_result($stmt);
			if ($row = mysqli_fetch_assoc($result))
			{
				$checkpass = password_verify($password, $row['pwdusers']);
				if ($checkpass == false)
				{
					header("Location: ../index.php?error=wrongpass");
					exit();
				}
				elseif ($checkpass == true) 
				{
				    session_start();
				    $_SESSION['userID']  = $row['idusers'];
				    $_SESSION['useruid'] = $row['uidusers'];

				    header("Location: ../index.php?login=success");
				    exit();
				}
				else
				{
					header("Location: ../index.php?error=wrongpass");
					exit();
				}

			}	
			else
			{
				header("Location: ../index.php?error=nouser");
				exit();
			}
		}
	}

}
else
{
	header("Location: ../index.php");
}