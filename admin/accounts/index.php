
<?php 
	$page_title = "Account Management";
	include_once('../../includes/header_admin.php');
    validateAccess();

    function switchStatus($uname, $stat){
        $sql_switch = "";
        if ($stat="Active"){
            
        $sql_switch = "UPDATE users SET status='Pending' WHERE username='$uname'";
        } else if ($stat="Pending")
            
        $sql_switch = "UPDATE users SET status='Active' WHERE username='$uname'";
    }
    
    $sql_users = "SELECT u.username, u.userType, u.status, u.groupID, g.groupID, g.Name, t.typeID, t.Description FROM users u INNER JOIN artistgroups g on u.groupID = g.groupID INNER JOIN usertype t on u.userType = t.typeID ORDER BY u.username";
    $result_users = $con->query($sql_users);
    $list_users="";


    while ($row = mysqli_fetch_array($result_users))
	{
        $uname = $row['username'];
        $uType = $row['Description'];
        $gName = $row['Name'];
        $status = $row['status'];
        $btncol = "";
        if ($status == "Active"){
            $btncol = "red darken-4";
            
        } else {
            $btncol = "green accent-4";
        }
        $list_users .="
        <tr>
        <td>$uname</td>
        <td>$gName</td>
        <td>$uType</td>
        <td>$status</td>
        <td><a href='delete.php?taskID=$uname' class='btn-floating btn-medium $btncol center-align' 
										onclick='return confirm(\"Delete User Task?\");''>
										 <i class='tiny material-icons right center'>verified_user</i>
									</a>
                                    <a href='delete.php?taskID=$uname' class='btn-floating btn-medium teal lighten-2 center-align' 
										onclick='return confirm(\"Delete User Task?\");''>
										 <i class='tiny material-icons right center'>create</i>
									</a>
                                    </td>
        </tr>
        ";
        
	}
    
?>



  <main>
      <div class="">
     <div class="row">
        <div class="col s12 m10 l8 push-l2 push-m1">
             <table class="highlight">
        <thead>
          <tr>
              <th>Username</th>
              <th>Artist Group</th>
              <th>Account Type</th>
              <th>Status</th>
              <th>Actions</th>
          </tr>
        </thead>

        <tbody>
         <?php echo $list_users; ?>
        </tbody>
      </table>
         </div>
      </div>
      </div>
  </main>

    <?php
    
	include_once('../../includes/footclean.php');
    ?>