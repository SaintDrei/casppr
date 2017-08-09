<?php
	$page_title = "Contacts";
	include_once('../../includes/header_admin.php');

	$sql_view = "SELECT u.username, u.email, u.clandline, u.cmobile, t.username, t.task, t.eventID FROM users u INNER JOIN task t ON u.username = t.username";

	$result_view = $con->query($sql_view) or die(mysqli_error($con));
	$list_view = "";
	while ($row = mysqli_fetch_array($result_view))
	{
		$user = $row['username'];
		$task = $row['task'];
		$email = $row['email'];
		$landline = $row['clandline'];
		$mobile = $row['cmobile'];

		$list_view .= "<tr>
							<td>$user</td>
							<td>$task</td>
							<td>$email</td>
							<td>$landline</td>
							<td>$mobile</td>
						</tr>";
	}
?>
 <div class="row">
        <div class="col s12 m10 l8 push-l2 push-m1">
             <table class="highlight">
        <thead>
          <tr>
                <th>Username</th>
				<th>Task</th>
				<th>Email</th>
				<th>Landline</th>
				<th>Mobile</th>
          </tr>
        </thead>

        <tbody>
         <?php echo $list_view; ?>
        </tbody>
      </table>
         </div>
      </div>
 <div class="fixed-action-btn">
    <a class="btn-floating btn-large red">
      <i class="large material-icons">print</i>
    </a>
  </div>
<?php
	include_once('../../includes/footclean.php');
?>