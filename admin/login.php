<?php 
	$page_title = "Administrator Login";
    include_once('../includes/header_admin.php');

    if (isset($_POST['login']))
    {
       session_destroy();
        session_start();

        $username = mysqli_real_escape_string($con, $_POST['username']);
//        $pw =  hash('sha256', mysqli_real_escape_string($con, $_POST['pw']));
        $pass = mysqli_real_escape_string($con, $_POST['pw']);
        $pw = hash('sha256', $pass);
        $sql_login = "SELECT username, password, userType FROM users
            WHERE username='$username' AND password='$pw' AND userType=1";
        $result_login = $con->query($sql_login) or die(mysqli_error($con));

        if (mysqli_num_rows($result_login) > 0)
        {
            while ($row = mysqli_fetch_array($result_login))
            {
                $_SESSION['userid'] = $row['username'];
                $_SESSION['typeid'] = $row['typeID'];
            }
            header('location: dashboard.php');
        } else { echo mysqli_error($con);}

    }

?>
<form method="POST" class="form-horizontal">
    <div class="col-lg-6">
        <?php
            if (isset($_POST['login']))
            {
                if (mysqli_num_rows($result_login) == 0)
                {
                    echo "
                       <p id='logerror' hidden>bad</p>
                    ";
                }

            }
        ?>
        
        <div class="container">
            <div class="row">
        <div class="col s12 m10 l6 push-l3 push-m1">
            <div class="card z-depth-4">
                <div class="row">
                    <div class="card-content">
                        <form method="post" class="col s12 m12 l10">
                              <div class="row">
                            <div class="input-field col s12 l10 m10 push-l1">
                                <input id="username" name="username" type="text" class="validate" tabindex="3">
                                <label for="username">Username</label>
                            </div>
                        </div> 
                            <div class="row">
                            
                        <div class="input-field col s12 l10 m10 push-l1">
                                <input id="pw" name="pw" type="password" class="validate" tabindex="4">
                                <label for="pw">Password</label>
                            </div>
                            </div>
                            <div class="row">
                            <div class="input-field col s12">
                              <button class="btn cyan waves-effect waves-light right" style="margin-right:2em;" type="submit" name="login">Login
                                
                              </button>
                            </div>
                        </form>
                    </div>
                </div>
                
                
                
            </div></div></div>
        </div>
        
        
</form>
<?php
	include_once('../includes/footer.php');
?>