<?php

        // removes backslashes
	$mb=$_POST['mb'];
	$ps=$_POST['ps'];
	$mb = stripslashes($mb);
	$ps = stripslashes($ps);


	$db=mysqli_connect("localhost", "root", "", "authentication_a");

	

		$result="SELECT * from `users` where mb='$mb' and ps='$ps'";
		//echo $result;

			//or die("Failed to query database" mysql_error());
mysqli_query($result);
	$row=mysqli_fetch_array($result);
	//echo "j";
	if($row['mb']==$mb && $row['ps']==$ps)
	{
		echo "Login success";
	}	
	else
	{
		echo "failed to login";
	}	

?>


