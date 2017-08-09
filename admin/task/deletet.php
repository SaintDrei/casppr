<?php 
    
	# checks if record is selected
	if (isset($_REQUEST['taskID']))
	{
		# checks if selected record is an ID value
		if (ctype_digit($_REQUEST['taskID']))
		{
			$taskID = $_REQUEST['taskID'];
			require($_SERVER['DOCUMENT_ROOT'] . '/casppr/config.php');
			require($_SERVER['DOCUMENT_ROOT'] . '/casppr/function.php');

			validateAccess();
			
			# archives existing record
            $sql_delete = "DELETE FROM task WHERE taskID = '$taskID'";
				
			$result = $con->query($sql_delete) or die(mysqli_error($con));
			header('location: add.php');
		}
		else
		{
			header('location: add.php');
		}
	}
	else
	{
		header('location: add.php');
	}
?>