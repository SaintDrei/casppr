<?php
	$page_title = "Add Task to Specific User";
	include_once('../../includes/header_admin.php');
    

    $sql_user = "SELECT userID, username FROM users ORDER BY username";
    $result_user = $con->query($sql_user);
    $list_user = "";
    
	while ($row = mysqli_fetch_array($result_user))
	{
        $userID = $row['userID'];
		$username = $row['username'];
        $list_user .= "<option value='$userID'>$username</option>";
	}
	
	if (isset($_POST['add']))
	{
		$userID = mysqli_real_escape_string($con, $_POST['userID']);
		$task = mysqli_real_escape_string($con, $_POST['task']);
		
		$sql_add = "INSERT INTO task VALUES ('', '$userID', '$task', NOW())";
		$con->query($sql_add) or die(mysqli_error($con));
		header('location: add.php');
	}

	$sql_view = "SELECT username, task, taskID, dateAdded FROM task";
	$result_view = $con->query($sql_view) or die(mysqli_error($con));
	$list_view = "";
	
	while ($row4 = mysqli_fetch_array($result_view))
	{	
		
	    $userID = $row4['username'];
		$task = $row4['task'];
        $dateAdded = $row4['dateAdded'];
		$taskID = $row4['taskID'];
        $sql_update = $_SERVER['DOCUMENT_ROOT'] . '/casppr/edit.php';
//        <input class='fa fa-refresh upate btn btn-success btn-xs' type='submit' value='qty'>
		$list_view .= "<tr>
							<td>$username</td>
							
							<td>
                            
                            
                            <form method='get' action='./edit.php'>
                            <input type='text' class='form-control' value='$task' style='width:100px;' name='task'/> 
                            </td>
                            <td>
                            <input type='number' value='$taskID' hidden name='taskID'>
                             
                            <button class='btn-floating btn-medium update red lighten-1 waves-effect waves-light' onclick='return confirm(\"Update Task?\");'>
									 <i class='tiny material-icons'>loop</i>
								</button>
                                
                                <a href='delete.php?taskID=$taskID' class='btn-floating btn-medium blue lighten-1 center-align' 
										onclick='return confirm(\"Delete User Task?\");''>
										 <i class='tiny material-icons right center'>delete</i>
									</a>
                            </form>
				                
							</td>		
					   </tr>";
	}
?>
<div class="row"></div><div class="row"></div>
    <div class="row">
        <form method="post">
        <div class="col s12 m10 l6 push-l3 push-m1">
            <div class="card">
		<div class="form-group">
			<label class="control-label col-lg-4">User</label>
			<div class="col-lg-8">
				<select name="user" class="form-control" required>
					<option value="">Select one...</option>
					<?php echo $list_user; ?>
				</select>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-lg-4">Task</label>
			<div class="col-lg-8">
				<input name="task" rows="10" cols="80" type="text" class="form-control" required /></input>
			</div>
		</div>
	</div>
		
    <div class="row">
                            <div class="input-field col s12">
                              <button class="btn cyan waves-effect waves-light right" type="submit" name="add">Add
                                <i class="tiny material-icons right">add</i>
                              </button>
                                
                            </div>
                        </div>
  
</form>
</div></div>
<div class="row">
    <div class="col l6 push-l3">
        <div class="card">
            <div class="card-content l10 push-l1">
			<table class="table table-hover l8">
				<thead>
					<th>User</th>
					<th>Task</th>
					<th></th>
				</thead>
				<tbody>
					<?php echo $list_view; ?>
                   
				</tbody>
			</table>
            <hr>
			
	</div>
        </div>
    </div>
</div>

<?php

	include_once('../../includes/footer.php');
?>